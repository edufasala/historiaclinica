<?php
	defined('BASEPATH') or exit('No direct script access allowed');
	// define('FPDF_FONTPATH','third_party/font');
	require_once APPPATH.'third_party/fpdf/fpdf.php';

	class Imprimir extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('pdf_model');
			
    		// $pdf = $this->Plte->getInstance();
		}
		function generar_hc(){
			$ndoc = $this->uri->segment(3);
			$ff=$this->uri->segment(4);
			// $hh=$this->uri->segment(5);
			$datoshc=$this->pdf_model->imprimir_historia_uno($ndoc,$ff);
			$datospc=$this->pdf_model->paciente_informacion($ff);
			$recibodatos['cn']=array('hc'=>$datoshc,'pc'=>$datospc);
			$this->load->view('hclinica/imphistoria',$recibodatos);
		}
		function generar_historia(){
			$cual_imprimir=$this->uri->segment(3);
			$id1 =$this->uri->segment(4);// PAD0001
			$doc1=$this->uri->segment(5);// 7676555
			$fch1=$this->uri->segment(6);// 7676555
			$dt['cn']=array('pd' => 'uno');
			// $this->load->library('plte');
			//-
			if($cual_imprimir=="general")
			{
				// $partes=explode('.',$id1);
				// // if(strlen($partes)>=6)
				// $datospad=$this->pdf_model->imprimir_historia_pad($partes[0],$doc1);
				// // $datosconcentimiento=$this->pdf_model->imprimir_historia_concentimiento($partes[1],$doc1);
				// $datosbarthel=$this->pdf_model->imprimir_historia_barthel($partes[1],$doc1);
				// $datosvaloracion=$this->pdf_model->imprimir_historia_valoracion($partes[2],$doc1);
				// $datosnorton=$this->pdf_model->imprimir_historia_norton($partes[3],$doc1);
				// $datosbraden=$this->pdf_model->imprimir_historia_braden($partes[4],$doc1);
				// $datospc=$this->pdf_model->paciente_informacion($doc1);
				// $datosmd=$this->pdf_model->medico_informacion($partes[0],$cual_imprimir);
				// $recibodatos['cn']=array(
				// 	'hcpad'=>$datospad,
				// 	// 'hcconcentimiento'=>$datosconcentimiento,
				// 	'hcbarthel'=>$datosbarthel,
				// 	'hcvaloracion'=>$datosvaloracion,
				// 	'hcnorton'=>$datosnorton,
				// 	'hcbraden'=>$datosbraden,
				// 	'pc'=>$datospc,
				// 	'md'=>$datosmd
				// 	);
				// $this->load->view('hclinica/mhistoriageneral',$recibodatos);
				$datos=$this->pdf_model->imprimir_historia_pad($id1,$doc1);
				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datosmd=$this->pdf_model->medico_informacion($id1,$cual_imprimir);
				$recibodatos['cn']=array('hcpad'=>$datos,'pc'=>$datospc,'md'=>$datosmd);
				$enviodatos['cn']=array('md'=>$datosmd);
				$datoshcgeneral=$this->pdf_model->buscar_registros_paciente($doc1);
				$datosbarthel=$this->pdf_model->imprimir_historia_barthel_general($doc1,$fch1);
				$datosvaloracion=$this->pdf_model->imprimir_historia_valoracion_general($doc1);
				$datosnorton=$this->pdf_model->imprimir_historia_norton_general($doc1);
				$datosbraden=$this->pdf_model->imprimir_historia_braden_general($doc1);
				if($datosbarthel)
				{
					$barthel=$datoshcgeneral['barthel_doc'];//hc_barthel
				}
				else
				{
					$barthel="0";
				}
				$valoracion=$datoshcgeneral['hc_valoracion'];
				$norton=$datoshcgeneral['hc_norton'];
				$braden=$datoshcgeneral['hc_braden'];
				$recibodatos['cn']=array(
					'hcpad'=>$datos,
					// 'hcconcentimiento'=>$datosconcentimiento,
					'hcbarthel'=>$datosbarthel,
					'hcvaloracion'=>$datosvaloracion,
					'hcnorton'=>$datosnorton,
					'hcbraden'=>$datosbraden,
					'pc'=>$datospc,
					'md'=>$datosmd,
					'barthel'=>$barthel,
					'valoracion'=>$valoracion,
					'norton'=>$norton,
					'braden'=>$braden
					);
				$this->load->view('hclinica/mhistoria',$recibodatos);
			}
			//normal
			else if($cual_imprimir=="pad")
			{
				$datos=$this->pdf_model->imprimir_historia_pad($id1,$doc1);
				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datosmd=$this->pdf_model->medico_informacion($id1,$cual_imprimir);
				$recibodatos['cn']=array('hcpad'=>$datos,'pc'=>$datospc,'md'=>$datosmd,'chc'=>'2');
				$enviodatos['cn']=array('md'=>$datosmd);
				// $this->load->view('hclinica/pltencabezado',$enviodatos);
				$this->load->view('hclinica/mhistoriapad',$recibodatos);	
			}
			// else if($cual_imprimir=="pad.")
			// {
			// 	$datos=$this->pdf_model->imprimir_historia_pad($id1,$doc1);
			// 	$datospc=$this->pdf_model->paciente_informacion($doc1);
			// 	$datosmd=$this->pdf_model->medico_informacion($id1,str_replace('.', '', $cual_imprimir));
			// 	$recibodatos['cn']=array('hcpad'=>$datos,'pc'=>$datospc,'md'=>$datosmd,'chc'=>'2');
			// 	$enviodatos['cn']=array('md'=>$datosmd);
			// 	// $this->load->view('hclinica/pltencabezado',$enviodatos);
			// 	$this->load->view('hclinica/mhistoriapad',$recibodatos);	
			// }
			//todos 
			// else if($cual_imprimir=="pad")
			// {
			// 	$datos=$this->pdf_model->imprimir_historia_pad($id1,$doc1);
			// 	$datospc=$this->pdf_model->paciente_informacion($doc1);
			// 	$datosmd=$this->pdf_model->medico_informacion($id1,$cual_imprimir);
			// 	$recibodatos['cn']=array('hcpad'=>$datos,'pc'=>$datospc,'md'=>$datosmd);
			// 	$enviodatos['cn']=array('md'=>$datosmd);
			// 	$datoshcgeneral=$this->pdf_model->buscar_registros_paciente($doc1);
			// 	$datosbarthel=$this->pdf_model->imprimir_historia_barthel_general($doc1);
			// 	$datosvaloracion=$this->pdf_model->imprimir_historia_valoracion_general($doc1);
			// 	$datosnorton=$this->pdf_model->imprimir_historia_norton_general($doc1);
			// 	$datosbraden=$this->pdf_model->imprimir_historia_braden_general($doc1);
			// 	$barthel=$datoshcgeneral['hc_barthel'];
			// 	$valoracion=$datoshcgeneral['hc_valoracion'];
			// 	$norton=$datoshcgeneral['hc_norton'];
			// 	$braden=$datoshcgeneral['hc_braden'];
			// 	$recibodatos['cn']=array(
			// 		'hcpad'=>$datos,
			// 		// 'hcconcentimiento'=>$datosconcentimiento,
			// 		'hcbarthel'=>$datosbarthel,
			// 		'hcvaloracion'=>$datosvaloracion,
			// 		'hcnorton'=>$datosnorton,
			// 		'hcbraden'=>$datosbraden,
			// 		'pc'=>$datospc,
			// 		'md'=>$datosmd,
			// 		'barthel'=>$barthel,
			// 		'valoracion'=>$valoracion,
			// 		'norton'=>$norton,
			// 		'braden'=>$braden
			// 		);
			// 	$this->load->view('hclinica/mhistoria',$recibodatos);	
			// }
			// else if($cual_imprimir=="concentimiento")
			// {
			// 	$datos=$this->pdf_model->imprimir_historia_concentimiento($id1,$doc1);
			// 	$datospc=$this->pdf_model->paciente_informacion($doc1);
			// 	$recibodatos['cn']=array('hcconcentimiento'=>$datos,'pc'=>$datospc);
			// 	$this->load->view('hclinica/mhistoriaconcentimiento',$recibodatos);
			// }
			else if($cual_imprimir=="barthel")
			{
				$datos=$this->pdf_model->imprimir_historia_barthel($id1,$doc1);
				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datosmd=$this->pdf_model->medico_informacion($id1,$cual_imprimir);
				$recibodatos['cn']=array('hcbarthel'=>$datos,'pc'=>$datospc,'md'=>$datosmd);
				$this->load->view('hclinica/mhistoriabarthel',$recibodatos);
			}
			else if($cual_imprimir=="valoracion")
			{
				$datos=$this->pdf_model->imprimir_historia_valoracion($id1,$doc1);
				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datosmd=$this->pdf_model->medico_informacion($id1,$cual_imprimir);
				$recibodatos['cn']=array('hcvaloracion'=>$datos,'pc'=>$datospc,'md'=>$datosmd);
				$this->load->view('hclinica/mhistoriavaloracion',$recibodatos);
			}
			else if($cual_imprimir=="norton")
			{
				$datos=$this->pdf_model->imprimir_historia_norton($id1,$doc1);
				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datosmd=$this->pdf_model->medico_informacion($id1,$cual_imprimir);
				$recibodatos['cn']=array('hcnorton'=>$datos,'pc'=>$datospc,'md'=>$datosmd);
				$this->load->view('hclinica/mhistorianorton',$recibodatos);
			}
			else if($cual_imprimir=="braden")
			{
				$datos=$this->pdf_model->imprimir_historia_braden($id1,$doc1);
				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datosmd=$this->pdf_model->medico_informacion($id1,$cual_imprimir);
				$recibodatos['cn']=array('hcbraden'=>$datos,'pc'=>$datospc,'md'=>$datosmd);
				$this->load->view('hclinica/mhistoriabraden',$recibodatos);
			}
			else if($cual_imprimir=="padenf")
			{
				$datos=$this->pdf_model->imprimir_historia_enf_pad($id1,$doc1);
				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datosenf=$this->pdf_model->enfermera_informacion($id1,str_replace('padenf', 'pad', $cual_imprimir));
				$recibodatos['cn']=array('hcpadenf'=>$datos,'pc'=>$datospc,'enf'=>$datosenf,'chc'=>'2');
				$this->load->view('hclinica_enfermera/mhistoriapadenf',$recibodatos);	
			}
			else if($cual_imprimir=="sociofamiliar")
			{
				$datos=$this->pdf_model->imprimir_historia_enf_valoracion($id1,$doc1);
				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datosenf=$this->pdf_model->enfermera_informacion($id1,$cual_imprimir);
				$recibodatos['cn']=array('hcvaloracionenf'=>$datos,'pc'=>$datospc,'enf'=>$datosenf);
				$this->load->view('hclinica_enfermera/mhistoriavaloracionenf',$recibodatos);
			}
			else if($cual_imprimir=="escaladecarga")
			{
				$datos=$this->pdf_model->imprimir_historia_enf_escala($id1,$doc1);
				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datosenf=$this->pdf_model->enfermera_informacion($id1,$cual_imprimir);
				$recibodatos['cn']=array('hcescala'=>$datos,'pc'=>$datospc,'enf'=>$datosenf);
				$this->load->view('hclinica_enfermera/mhistoriaescalaenf',$recibodatos);
			}
			else if($cual_imprimir=="intervencion")
			{
				$datos=$this->pdf_model->imprimir_historia_enf_intervencion($id1,$doc1);
				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datosenf=$this->pdf_model->enfermera_informacion($id1,$cual_imprimir);
				$recibodatos['cn']=array('hcintervencion'=>$datos,'pc'=>$datospc,'enf'=>$datosenf);
				$this->load->view('hclinica_enfermera/mhistoriaintervencionenf',$recibodatos);
			}
		}
		function generar_historia_odonto(){
			$cual_imprimir=$this->uri->segment(3);
			$id1 =$this->uri->segment(4);// PAD0001
			$doc1=$this->uri->segment(5);// 7676555
			$fch1=$this->uri->segment(6);// 7676555
			$dt['cn']=array('pd' => 'uno');
			// $this->load->library('plte');
			//-
			if($cual_imprimir=="general1")
			{

				$datos=$this->pdf_model->imprimir_historia_pad_odonto($id1,$doc1);
				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datosmd=$this->pdf_model->medico_informacion($id1,$cual_imprimir);
				$recibodatos['cn']=array('hcpadodonto'=>$datos,'pc'=>$datospc,'md'=>$datosmd,'chc'=>'2');
				$enviodatos['cn']=array('md'=>$datosmd);
				//$datoshcgeneral=$this->pdf_model->buscar_registros_paciente_odonto($doc1);

				$this->load->view('hclinica_odonto/mhistoria_odonto',$recibodatos);
			}
			//normal
			else if($cual_imprimir=="pad_odonto")
			{
				$datos=$this->pdf_model->imprimir_historia_pad_odonto($id1,$doc1);
				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datosmd=$this->pdf_model->medico_informacion($id1,$cual_imprimir);
				$recibodatos['cn']=array('hcpadodonto'=>$datos,'pc'=>$datospc,'md'=>$datosmd,'chc'=>'2');
				$enviodatos['cn']=array('md'=>$datosmd);
				// $this->load->view('hclinica/pltencabezado',$enviodatos);
				$this->load->view('hclinica_odonto/mhistoria_odonto',$recibodatos);	
			}

			else if($cual_imprimir=="pad_visitaodonto")
			{
				$datos=$this->pdf_model->imprimir_historia_pad_visitaodonto($id1,$doc1);
				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datosmd=$this->pdf_model->medico_informacion($id1,$cual_imprimir);
				$recibodatos['cn']=array('hcpadvisitaodonto'=>$datos,'pc'=>$datospc,'md'=>$datosmd,'chc'=>'2');
				$this->load->view('hclinica_odonto/mhistoria_visitaodonto',$recibodatos);
			}

		}				
		function generar_historia_enf(){
			$cual_imprimir=$this->uri->segment(3);
			$id1 =$this->uri->segment(4);// PAD0001
			$doc1=$this->uri->segment(5);// 7676555
			$fch1=$this->uri->segment(6);
			if($cual_imprimir=="general")
			{
				// $partes=explode('.',$id1);
				// // if(strlen($partes)>=6)
				// $datospad=$this->pdf_model->imprimir_historia_enf_pad($partes[0],$doc1);
				// $datosvaloracionenf=$this->pdf_model->imprimir_historia_enf_valoracion($partes[1],$doc1);
				// $datosescala=$this->pdf_model->imprimir_historia_enf_escala($partes[2],$doc1);
				// $datosintervencion=$this->pdf_model->imprimir_historia_enf_intervencion($partes[3],$doc1);
				// $datospc=$this->pdf_model->paciente_informacion($doc1);
				// $datosenf=$this->pdf_model->enfermera_informacion($partes[0],$cual_imprimir);
				// $recibodatos['cn']=array(
				// 	'hcpadenf'=>$datospad,
				// 	'hcvaloracionenf'=>$datosvaloracionenf,
				// 	'hcescala'=>$datosescala,
				// 	'hcintervencion'=>$datosintervencion,
				// 	'pc'=>$datospc,
				// 	'enf'=>$datosenf
				// 	);
				// $this->load->view('hclinica_enfermera/mhistoriageneralenf',$recibodatos);

				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datospadenf=$this->pdf_model->imprimir_historia_enf_pad($id1,$doc1);
				$datosenf=$this->pdf_model->enfermera_informacion($id1,$cual_imprimir);
				$datoshcgeneralenf=$this->pdf_model->buscar_registros_paciente_enf($doc1);
				$datosvaloracion=$this->pdf_model->imprimir_historia_enf_valoracion_general($doc1,$fch1);
				// $datosescala=$this->pdf_model->imprimir_historia_enf_valoracion_general($doc1,$fch1);
				// $datosintervencion=$this->pdf_model->imprimir_historia_enf_valoracion_general($doc1,$fch1);
				if($datosvaloracion)
				{
					$valoracion=$datoshcgeneralenf['enf_valoracion_doc'];//hc_enf_valoracion   enf_valoracion_doc
				}
				else
				{
					$valoracion="0";
				}
				// $escala=$datoshcgeneralenf['hc_enf_escala'];
				// $intervencion=$datoshcgeneralenf['hc_enf_intervencion'];
				// $valoracion="0";
				$escala="0";
				$intervencion="0";
				$datosescala="0";
				$datosintervencion="0";
				$recibodatos['cn']=array(
					'hcpadenf'=>$datospadenf,
					'hcvaloracionenf'=>$datosvaloracion,
					'hcescala'=>$datosescala,
					'hcintervencion'=>$datosintervencion,
					'pc'=>$datospc,
					'enf'=>$datosenf,
					'valoracion'=>$valoracion,
					'escala'=>$escala,
					'intervencion'=>$intervencion
					);
				// $recibodatos['cn']=array('hcpadenf'=>$datospadenf,'pc'=>$datospc,'enf'=>$datosenf);
				$this->load->view('hclinica_enfermera/mhistoriaenf',$recibodatos);
				// $this->load->view('hclinica_enfermera/mhistoriapadenf',$recibodatos);
			}
			else if($cual_imprimir=="pad")
			{
				$datos=$this->pdf_model->imprimir_historia_enf_pad($id1,$doc1);
				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datosenf=$this->pdf_model->enfermera_informacion($id1,$cual_imprimir);
				$recibodatos['cn']=array('hcpadenf'=>$datos,'pc'=>$datospc,'enf'=>$datosenf,'chc'=>'1');
				$this->load->view('hclinica_enfermera/mhistoriapadenf',$recibodatos);	
			}
			else if($cual_imprimir=="pad.")
			{
				$datos=$this->pdf_model->imprimir_historia_enf_pad($id1,$doc1);
				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datosenf=$this->pdf_model->enfermera_informacion($id1,str_replace('.', '', $cual_imprimir));
				$recibodatos['cn']=array('hcpadenf'=>$datos,'pc'=>$datospc,'enf'=>$datosenf,'chc'=>'2');
				$this->load->view('hclinica_enfermera/mhistoriapadenf',$recibodatos);	
			}
			else if($cual_imprimir=="sociofamiliar")
			{
				$datos=$this->pdf_model->imprimir_historia_enf_valoracion($id1,$doc1);
				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datosenf=$this->pdf_model->enfermera_informacion($id1,$cual_imprimir);
				$recibodatos['cn']=array('hcvaloracionenf'=>$datos,'pc'=>$datospc,'enf'=>$datosenf);
				$this->load->view('hclinica_enfermera/mhistoriavaloracionenf',$recibodatos);
			}
			else if($cual_imprimir=="escaladecarga")
			{
				$datos=$this->pdf_model->imprimir_historia_enf_escala($id1,$doc1);
				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datosenf=$this->pdf_model->enfermera_informacion($id1,$cual_imprimir);
				$recibodatos['cn']=array('hcescala'=>$datos,'pc'=>$datospc,'enf'=>$datosenf);
				$this->load->view('hclinica_enfermera/mhistoriaescalaenf',$recibodatos);
			}
			else if($cual_imprimir=="intervencion")
			{
				$datos=$this->pdf_model->imprimir_historia_enf_intervencion($id1,$doc1);
				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datosenf=$this->pdf_model->enfermera_informacion($id1,$cual_imprimir);
				$recibodatos['cn']=array('hcintervencion'=>$datos,'pc'=>$datospc,'enf'=>$datosenf);
				$this->load->view('hclinica_enfermera/mhistoriaintervencionenf',$recibodatos);
			}
		}
		function generar_evolucion(){
			$id1 = $this->uri->segment(3);
			$doc1=$this->uri->segment(4);
			$datos=$this->pdf_model->imprimir_evolucion($id1,$doc1);
			$datospc=$this->pdf_model->paciente_informacion($doc1);
			$datosmd=$this->pdf_model->medico_informacion_ev($id1);
			$recibodatos['cn']=array('ev'=>$datos,'pc'=>$datospc,'md'=>$datosmd);
			$this->load->view('emedica/impevolucion',$recibodatos);
			// $this->load->view('plantilla/footer');
		}
		function generar_vs(){
			$ndoc = $this->uri->segment(3);
			$ff=$this->uri->segment(4);
			$hh=$this->uri->segment(5);
			$recibodatos['cn']=$this->pdf_model->imprimir_evolucion_uno($ndoc,$ff,$hh);
			// $this->load->view('plantilla/header');
			// $this->load->view('hclinica/pltencabezado');
			// $this->load->vars($recibodatos);
			$this->load->view('emedica/impevolucion',$recibodatos);
			// $this->load->view('plantilla/footer');
		}
		function generar_visita(){
			$id1 = $this->uri->segment(3);
			$doc1=$this->uri->segment(4);
			$datos=$this->pdf_model->imprimir_visita($id1,$doc1);
			$datospc=$this->pdf_model->paciente_informacion($doc1);
			$datosenf=$this->pdf_model->enfermera_informacion_vs($id1);
			$recibodatos['cn']=array('vs'=>$datos,'pc'=>$datospc,'enf'=>$datosenf);
			$this->load->view('visita/mvisita',$recibodatos);
		}
		function generar_nota(){
			$id1 = $this->uri->segment(3);
			$doc1=$this->uri->segment(4);
			$datos=$this->pdf_model->imprimir_nota($id1,$doc1);
			$datospc=$this->pdf_model->paciente_informacion($doc1);
			$datosmd=$this->pdf_model->medico_informacion_nt($id1);
			$recibodatos['cn']=array('nt'=>$datos,'pc'=>$datospc,'md'=>$datosmd);
			$this->load->view('nota/mnota',$recibodatos);
		}
		function generar_f(){
			$id1 = $this->uri->segment(3);
			$doc1=$this->uri->segment(4);
			$obid=$this->uri->segment(5);
			$datos=$this->pdf_model->imprimir_f($id1,$doc1);
			$datospc=$this->pdf_model->paciente_informacion($doc1);
			$datosenfmed=$this->pdf_model->medoenf_informacion_f($obid);
			$recibodatos['cn']=array('fm'=>$datos,'pc'=>$datospc,'enfomed'=>$datosenfmed);
			$this->load->view('formulacion/mformulacion',$recibodatos);
		}
		function generar_f2(){
			$id1 = $this->uri->segment(3);
			$doc1=$this->uri->segment(4);
			$obid=$this->uri->segment(5);
			$datos=$this->pdf_model->imprimir_f2($id1,$doc1);
			$datospc=$this->pdf_model->paciente_informacion($doc1);
			$datosenfmed=$this->pdf_model->medoenf_informacion_f($obid);
			$recibodatos['cn']=array('fmhc'=>$datos,'pc'=>$datospc,'enfomed'=>$datosenfmed);
			$this->load->view('formulacion/mformulacionhc',$recibodatos);
		}
		function generar_historia_g(){
			$cual_imprimir=$this->uri->segment(3);
			$id1 =$this->uri->segment(4);// PAD0001
			$doc1=$this->uri->segment(5);// 7676555
			$fch1=$this->uri->segment(6);// 7676555
			$dt['cn']=array('pd' => 'uno');
			// $this->load->library('plte');
			//-
			if($cual_imprimir=="general")
			{
				$datos=$this->pdf_model->imprimir_historia_pad($id1,$doc1);
				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datosmd=$this->pdf_model->medico_informacion($id1,$cual_imprimir);
				$recibodatos['cn']=array('hcpad'=>$datos,'pc'=>$datospc,'md'=>$datosmd);
				$enviodatos['cn']=array('md'=>$datosmd);
				$datoshcgeneral=$this->pdf_model->buscar_registros_paciente($doc1);
				$datosbarthel=$this->pdf_model->imprimir_historia_barthel_general($doc1,$fch1);
				$datosvaloracion=$this->pdf_model->imprimir_historia_valoracion_general($doc1);
				$datosnorton=$this->pdf_model->imprimir_historia_norton_general($doc1);
				$datosbraden=$this->pdf_model->imprimir_historia_braden_general($doc1);
				if($datosbarthel)
				{
					$barthel=$datoshcgeneral['barthel_doc'];//hc_barthel
				}
				else
				{
					$barthel="0";
				}
				$valoracion=$datoshcgeneral['hc_valoracion'];
				$norton=$datoshcgeneral['hc_norton'];
				$braden=$datoshcgeneral['hc_braden'];
				$recibodatos['cn']=array(
					'hcpad'=>$datos,
					// 'hcconcentimiento'=>$datosconcentimiento,
					'hcbarthel'=>$datosbarthel,
					'hcvaloracion'=>$datosvaloracion,
					'hcnorton'=>$datosnorton,
					'hcbraden'=>$datosbraden,
					'pc'=>$datospc,
					'md'=>$datosmd,
					'barthel'=>$barthel,
					'valoracion'=>$valoracion,
					'norton'=>$norton,
					'braden'=>$braden
					);
				$this->load->view('hclinica/mhistoria',$recibodatos);
			}
			//normal
			else if($cual_imprimir=="pad")
			{
				$datos=$this->pdf_model->imprimir_historia_pad($id1,$doc1);
				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datosmd=$this->pdf_model->medico_informacion($id1,$cual_imprimir);
				$recibodatos['cn']=array('hcpad'=>$datos,'pc'=>$datospc,'md'=>$datosmd,'chc'=>'2');
				$enviodatos['cn']=array('md'=>$datosmd);
				// $this->load->view('hclinica/pltencabezado',$enviodatos);
				$this->load->view('hclinica/mhistoriapad',$recibodatos);	
			}
			// else if($cual_imprimir=="pad.")
			// {
			// 	$datos=$this->pdf_model->imprimir_historia_pad($id1,$doc1);
			// 	$datospc=$this->pdf_model->paciente_informacion($doc1);
			// 	$datosmd=$this->pdf_model->medico_informacion($id1,str_replace('.', '', $cual_imprimir));
			// 	$recibodatos['cn']=array('hcpad'=>$datos,'pc'=>$datospc,'md'=>$datosmd,'chc'=>'2');
			// 	$enviodatos['cn']=array('md'=>$datosmd);
			// 	// $this->load->view('hclinica/pltencabezado',$enviodatos);
			// 	$this->load->view('hclinica/mhistoriapad',$recibodatos);	
			// }
			else if($cual_imprimir=="barthel")
			{
				$datos=$this->pdf_model->imprimir_historia_barthel($id1,$doc1);
				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datosmd=$this->pdf_model->medico_informacion($id1,$cual_imprimir);
				$recibodatos['cn']=array('hcbarthel'=>$datos,'pc'=>$datospc,'md'=>$datosmd);
				$this->load->view('hclinica/mhistoriabarthel',$recibodatos);
			}
			else if($cual_imprimir=="valoracion")
			{
				$datos=$this->pdf_model->imprimir_historia_valoracion($id1,$doc1);
				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datosmd=$this->pdf_model->medico_informacion($id1,$cual_imprimir);
				$recibodatos['cn']=array('hcvaloracion'=>$datos,'pc'=>$datospc,'md'=>$datosmd);
				$this->load->view('hclinica/mhistoriavaloracion',$recibodatos);
			}
			else if($cual_imprimir=="norton")
			{
				$datos=$this->pdf_model->imprimir_historia_norton($id1,$doc1);
				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datosmd=$this->pdf_model->medico_informacion($id1,$cual_imprimir);
				$recibodatos['cn']=array('hcnorton'=>$datos,'pc'=>$datospc,'md'=>$datosmd);
				$this->load->view('hclinica/mhistorianorton',$recibodatos);
			}
			else if($cual_imprimir=="braden")
			{
				$datos=$this->pdf_model->imprimir_historia_braden($id1,$doc1);
				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datosmd=$this->pdf_model->medico_informacion($id1,$cual_imprimir);
				$recibodatos['cn']=array('hcbraden'=>$datos,'pc'=>$datospc,'md'=>$datosmd);
				$this->load->view('hclinica/mhistoriabraden',$recibodatos);
			}
			else if($cual_imprimir=="generalenf")
			{
				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datospadenf=$this->pdf_model->imprimir_historia_enf_pad($id1,$doc1);
				$datosenf=$this->pdf_model->enfermera_informacion($id1,str_replace('generalenf', 'general', $cual_imprimir));
				$datoshcgeneralenf=$this->pdf_model->buscar_registros_paciente_enf($doc1);
				$datosvaloracion=$this->pdf_model->imprimir_historia_enf_valoracion_general($doc1,$fch1);
				// $datosescala=$this->pdf_model->imprimir_historia_enf_valoracion_general($doc1,$fch1);
				// $datosintervencion=$this->pdf_model->imprimir_historia_enf_valoracion_general($doc1,$fch1);
				if($datosvaloracion)
				{
					$valoracion=$datoshcgeneralenf['enf_valoracion_doc'];//hc_enf_valoracion   enf_valoracion_doc
				}
				else
				{
					$valoracion="0";
				}
				// $escala=$datoshcgeneralenf['hc_enf_escala'];
				// $intervencion=$datoshcgeneralenf['hc_enf_intervencion'];
				// $valoracion="0";
				$escala="0";
				$intervencion="0";
				$datosescala="0";
				$datosintervencion="0";
				$recibodatos['cn']=array(
					'hcpadenf'=>$datospadenf,
					'hcvaloracionenf'=>$datosvaloracion,
					'hcescala'=>$datosescala,
					'hcintervencion'=>$datosintervencion,
					'pc'=>$datospc,
					'enf'=>$datosenf,
					'valoracion'=>$valoracion,
					'escala'=>$escala,
					'intervencion'=>$intervencion
					);
				// $recibodatos['cn']=array('hcpadenf'=>$datospadenf,'pc'=>$datospc,'enf'=>$datosenf);
				$this->load->view('hclinica_enfermera/mhistoriaenf',$recibodatos);
				// $this->load->view('hclinica_enfermera/mhistoriapadenf',$recibodatos);
			}
			else if($cual_imprimir=="padenf")
			{
				$datos=$this->pdf_model->imprimir_historia_enf_pad($id1,$doc1);
				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datosenf=$this->pdf_model->enfermera_informacion($id1,str_replace('padenf', 'pad', $cual_imprimir));
				$recibodatos['cn']=array('hcpadenf'=>$datos,'pc'=>$datospc,'enf'=>$datosenf,'chc'=>'2');
				$this->load->view('hclinica_enfermera/mhistoriapadenf',$recibodatos);	
			}
			// else if($cual_imprimir=="pad.")
			// {
			// 	$datos=$this->pdf_model->imprimir_historia_enf_pad($id1,$doc1);
			// 	$datospc=$this->pdf_model->paciente_informacion($doc1);
			// 	$datosenf=$this->pdf_model->enfermera_informacion($id1,str_replace('.', '', $cual_imprimir));
			// 	$recibodatos['cn']=array('hcpadenf'=>$datos,'pc'=>$datospc,'enf'=>$datosenf,'chc'=>'2');
			// 	$this->load->view('hclinica_enfermera/mhistoriapadenf',$recibodatos);	
			// }
			else if($cual_imprimir=="sociofamiliar")
			{
				$datos=$this->pdf_model->imprimir_historia_enf_valoracion($id1,$doc1);
				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datosenf=$this->pdf_model->enfermera_informacion($id1,$cual_imprimir);
				$recibodatos['cn']=array('hcvaloracionenf'=>$datos,'pc'=>$datospc,'enf'=>$datosenf);
				$this->load->view('hclinica_enfermera/mhistoriavaloracionenf',$recibodatos);
			}
			else if($cual_imprimir=="escaladecarga")
			{
				$datos=$this->pdf_model->imprimir_historia_enf_escala($id1,$doc1);
				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datosenf=$this->pdf_model->enfermera_informacion($id1,$cual_imprimir);
				$recibodatos['cn']=array('hcescala'=>$datos,'pc'=>$datospc,'enf'=>$datosenf);
				$this->load->view('hclinica_enfermera/mhistoriaescalaenf',$recibodatos);
			}
			else if($cual_imprimir=="intervencion")
			{
				$datos=$this->pdf_model->imprimir_historia_enf_intervencion($id1,$doc1);
				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datosenf=$this->pdf_model->enfermera_informacion($id1,$cual_imprimir);
				$recibodatos['cn']=array('hcintervencion'=>$datos,'pc'=>$datospc,'enf'=>$datosenf);
				$this->load->view('hclinica_enfermera/mhistoriaintervencionenf',$recibodatos);
			}
		}
		function generar_historia_td(){
			$cual_imprimir=$this->uri->segment(3);
			$id1 =$this->uri->segment(4);// PAD0001
			$doc1=$this->uri->segment(5);// 7676555
			$fch1=$this->uri->segment(6);
			
			if($cual_imprimir=="general")
			{
				$datos=$this->pdf_model->imprimir_historia_g($id1,$doc1);
				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datosmd=$this->pdf_model->medico_informacion($id1,$cual_imprimir);
				$recibodatos['cn']=array('hcpad'=>$datos,'pc'=>$datospc,'md'=>$datosmd,'chc'=>'2');
				$enviodatos['cn']=array('md'=>$datosmd);
				$this->load->view('hclinica/mhistoria_global',$recibodatos);	
			}
			else if($cual_imprimir=="generalenf")
			{
				$datos=$this->pdf_model->imprimir_historia_enf_g($id1,$doc1);
				$datospc=$this->pdf_model->paciente_informacion($doc1);
				$datosenf=$this->pdf_model->enfermera_informacion($id1,'pad');
				$recibodatos['cn']=array('hcpadenf'=>$datos,'pc'=>$datospc,'enf'=>$datosenf,'chc'=>'2');
				$this->load->view('hclinica_enfermera/mhistoriaenf_global',$recibodatos);	
			}
		}
	}
	//este metodo funciona pero como recibo los datos
	// class PDF extends FPDF
	// {
	// 	// protected $numhis="Historia Clinica N°";
		
	// 	function Header()
	// 	{
	// 		$this->SetFont('Arial','B',15);
	// 		$this->Cell(65);
	// 		$this->Cell(40,0,'HISTORIA CLINICA',0,0,1);
	// 		$this->SetFont('Arial','',10);
	// 		$this->Cell(85,2,'',0,1,'R');#crear una variable para dar el numero de historia
	// 		$this->SetFont('Arial','',13);
	// 		$this->Cell(180,5, 'Dr. Nombre Apellido Sapellido',0,1,'C');
	// 		$this->SetFont('Arial','',11);
	// 		$this->Cell(180,5, 'Especialista en NombreEspecialidad',0,1,'C');
	// 		$this->Cell(180,5, 'Universidad de Nombreuniversidad',0,1,'C');
	// 		$this->Cell(180,4, 'RM 00-00',0,1,'C');
	// 		$this->Cell(158);
	// 		$this->Cell(24,0, '',0,0,1);
	// 		$this->Cell(10,0, '',0,1,'R');
	// 		$this->Ln(20);
	// 	}
	// 	function Footer()
	// 	{
	// 		$this->SetY(-15);
	// 		$this->SetFont('Arial','I',8);
	// 		#$this->SetAuthor('Historia Clinica v.1.0');
	// 		#$this->SetCreator('Desarrollador Wilca');
	// 		#$this->SetAuthor('HISsadasd asda', true);
	// 		$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C'); 
	// 	}
	// 	function SetCol($col)
	// 	{
	// 	    // Establecer la posición de una columna dada
	// 	    $this->col = $col;
	// 	    $x = 10+$col*65;
	// 	    $this->SetLeftMargin($x);
	// 	    $this->SetX($x);
	// 	}
	// }
?>