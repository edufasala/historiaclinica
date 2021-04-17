<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Historia_enfermera extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('visita_model');
			$this->load->model('historia_enfermera_model');
			if(!$this->session->userdata('s_id'))
			{
				redirect('entrar');
			}
			else
			{
				// $cuales=$this->session->userdata('s_tipo');
		  //       if ($cuales=="tra")
		  //       {
		  //           redirect('inicio_empleado');
		  //       }
		  //       else if ($cuales=="med")
		  //       {
		  //           redirect('inicio_medico');
		  //       }
		  //       else if ($cuales=="adm")
		  //       {
		  //           redirect('inicio_admin');
		  //       }
			}
		}
		function index(){
			$cargo=$this->session->userdata('s_tipo');
            $aux="";
            if($cargo=="5")
            {
                $aux="Administrador";
                redirect('inicio_spadmin');
            }
            else if($cargo=="4")
            {
            	redirect('inicio_admin');
            }
            else if($cargo=="3")
            {
            	redirect('inicio_medico');
            }
            else if($cargo=="2")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_enf');
				$this->load->view('hclinica_enfermera/vreghistoria_enfermera');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="1")
            {
            	redirect('inicio_empleado');
            }
			
		}
		function registrar_pad_enf(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");

			$datos['enf_pad_tipo_tratamiento']=$this->input->post('motivopadhcenf');
			$cargo=$this->session->userdata('s_id');
			$datos['enf_pad_doc']=$this->input->post('numhc');
			$dig=$this->input->post('mdiagnosticos');
			$armar=explode("\r\n", $dig);
			$ndig="";
			for ($i=0; $i < count($armar)-1; $i++)
			{ 
				$ndig=$ndig.$armar[$i];
			}
			$datos['enf_pad_diagnosticos']=$ndig;
			$datos['enf_pad_antecedentes']=$this->input->post('antecedentes');
			$datos['enf_pad_val_subjetiva']=$this->input->post('valoracionsubjetiva');
			$datos['enf_pad_sv_fc']=$this->input->post('svfc');
			$datos['enf_pad_sv_fr']=$this->input->post('svfr');
			$datos['enf_pad_sv_t']=$this->input->post('svt');
			$datos['enf_pad_svta']=$this->input->post('svta');
			$datos['enf_pad_sv_saturacion']=$this->input->post('svsaturacion');
			$datos['enf_pad_sv_glucometria']=$this->input->post('svglucometria');
			$datos['enf_pad_dom1_p1']=$this->input->post('dom1p1');
			$datos['enf_pad_dom1_p2']=$this->input->post('dom1p2');
			$datos['enf_pad_dom2_nutricion']=$this->input->post('dom2nutricion');
			$datos['enf_pad_dom2_otro']=$this->input->post('dom2otro');
			$datos['enf_pad_dom2_mucosa']=$this->input->post('dom2mucosa');
			$datos['enf_pad_dom2_dentadura']=$this->input->post('dom2dentadura');
			$datos['enf_pad_dom2_piel']=$this->input->post('dom2piel');
			$datos['enf_pad_dom2_hidratacion']=$this->input->post('dom2hidratacion');
			$datos['enf_pad_dom2_abdomen']=$this->input->post('dom2adobmen');
			$datos['enf_pad_dom2_rsls']=$this->input->post('dom2rsls');
			$datos['enf_pad_dom2_sng']=$this->input->post('d2sng');
			$datos['enf_pad_dom2_drenaje']=$this->input->post('dom2drenaje');
			$datos['enf_pad_dom2_caracteristicas']=$this->input->post('d2caracteristicas');
			$datos['enf_pad_dom3_deposiciones']=$this->input->post('dom3deposiciones');
			$datos['enf_pad_dom3_tipo']=$this->input->post('dom3tipo');
			$datos['enf_pad_dom3_vomito']=$this->input->post('dom3vomito');
			$datos['enf_pad_dom3_caracteristicas']=$this->input->post('d3caracteristicas');
			$datos['enf_pad_dom3_colostomia']=$this->input->post('dom3colostomia');
			$datos['enf_pad_dom3_oresis']=$this->input->post('dom3oresis');
			$datos['enf_pad_dom4_dependencia']=$this->input->post('dom4dependencia');
			$datos['enf_pad_dom4_sueno']=$this->input->post('dom4sueno');
			$datos['enf_pad_dom4_sueno_otros']=$this->input->post('d4otros');
			$datos['enf_pad_dom4_fiebre']=$this->input->post('dom4fiebre');
			$datos['enf_pad_dom4_tipo']=$this->input->post('d4tipo');
			$datos['enf_pad_dom4_fisica']=$this->input->post('dom4movilidad');
			$datos['enf_pad_dom4_fisica_descripcion']=$this->input->post('d4movilidadetalle');
			$datos['enf_pad_dom4_muscular']=$this->input->post('dom4muscular');
			$datos['enf_pad_dom4_muscular_descripcion']=$this->input->post('d4musculardetalle');
			$datos['enf_pad_dom4_respiratorias']=$this->input->post('dom4respiratorias');
			$datos['enf_pad_dom4_llenado_capilar']=$this->input->post('d4capilar');
			$datos['enf_pad_dom4_pulso']=$this->input->post('dom4pulso');
			$datos['enf_pad_dom4_pulso_f_implantacion']=$this->input->post('d4pulsofecha');
			$datos['enf_pad_dom4_fr']=$this->input->post('dom4fr');
			$datos['enf_pad_dom4_fr_descripcion']=$this->input->post('d4frdetalle');
			$datos['enf_pad_dom4_ruidos']=$this->input->post('dom4ruidos');
			$datos['enf_pad_dom4_tos']=$this->input->post('dom4tos');
			$datos['enf_pad_dom4_tos_tipo']=$this->input->post('d4tostipo');
			$datos['enf_pad_dom4_oxigenoterapia']=$this->input->post('dom4oxigeno');
			$datos['enf_pad_dom4_oxigenoterapia_tipo']=$this->input->post('d4oxigenotipo');
			$datos['enf_pad_dom4_fio']=$this->input->post('d4fio');
			$datos['enf_pad_dom4_tet']=$this->input->post('d4tet');
			$datos['enf_pad_dom4_traqueostomia']=$this->input->post('dom4traqueostomia');
			
			$datos['enf_pad_dom5_escala']=$this->input->post('dom5escala');
			$datos['enf_pad_dom5_escala_otro']=$this->input->post('dgasglowotro');
			$datos['enf_pad_dom5_conciencia']=$this->input->post('dom5conciencia');
			$datos['enf_pad_dom5_otro']=$this->input->post('dconcienciaotro');
			$datos['enf_pad_dom5_comunicacion']=$this->input->post('dom5comunicacion');
			$datos['enf_pad_dom5_comunicacion_otro']=$this->input->post('d6comunicacionotro');
			$datos['enf_pad_dom6_emocional']=$this->input->post('dom6emocional');
			$datos['enf_pad_dom6_lenguaje']=$this->input->post('dom6lenguaje');
			$datos['enf_pad_dom6_escucha']=$this->input->post('dom6escucha');//sin definir
			$datos['enf_pad_dom6_vision']=$this->input->post('dom6d6vision');
			$datos['enf_pad_dom7_familiares']=$this->input->post('dom7familiares');
			$datos['enf_pad_dom7_maltrato']=$this->input->post('dom7familiaresmaltrato');
			$datos['enf_pad_dom7_equipo']=$this->input->post('dom7equipo');
			$datos['enf_pad_dom8_civil']=$this->input->post('dom8civil');
			$datos['enf_pad_dom8_paridad']=$this->input->post('dom8paridad');
			$datos['enf_pad_dom8_hijos']=$this->input->post('d8hijos');
			$datos['enf_pad_dom8_vivos']=$this->input->post('d8vivos');
			$datos['enf_pad_dom8_fallecidos']=$this->input->post('d8fallecidos');
			$datos['enf_pad_dom8_its']=$this->input->post('dom8its');
			$datos['enf_pad_dom8_especifique']=$this->input->post('d8especifique');
			$datos['enf_pad_dom9_respuesta']=$this->input->post('dom9respuesta');
			$datos['enf_pad_dom9_intento']=$this->input->post('dom9intento');
			$datos['enf_pad_dom9_intento_descripcion']=$this->input->post('d9intentodetalle');
			$datos['enf_pad_dom10_religion']=$this->input->post('d10religion');
			$datos['enf_pad_dom10_sanguinea']=$this->input->post('dom10acepta');
			$datos['enf_pad_dom10_sanguinea_descripcion']=$this->input->post('d10aceptadetalle');
			$datos['enf_pad_dom10_religiosa']=$this->input->post('dom10solicita');
			$datos['enf_pad_dom10_religiosa_descripcion']=$this->input->post('d10solicitadetalle');
			$datos['enf_pad_dom11_seguridad']=$this->input->post('dom11seguridad');
			$datos['enf_pad_dom11_seguridad_otros']=$this->input->post('d11otros');
			$datos['enf_pad_dom11_cutanea']=$this->input->post('dom11cutanea');
			$datos['enf_pad_dom11_localizacion']=$this->input->post('d11localizacion');
			$datos['enf_pad_dom11_grado']=$this->input->post('d11grado');
			$datos['enf_pad_dom11_requerimientos']=$this->input->post('dom11requerimientos');
			$datos['enf_pad_dom11_requerimientos_otros']=$this->input->post('dom11otros');
			$datos['enf_pad_dom12_dolor']=$this->input->post('dom12dolor');
			$datos['enf_pad_dom12_dolor_nivel']=$this->input->post('d12nivel');
			$datos['enf_pad_dom12_dolor_localizacion']=$this->input->post('d12localizacion');
			$datos['enf_pad_dom12_estado']=$this->input->post('dom12higiene');
			$datos['enf_pad_dom12_especifique']=$this->input->post('d12especifique');
			$datos['enf_pad_dom13_peso']=$this->input->post('d13peso');
			$datos['enf_pad_dom13_talla']=$this->input->post('d13talla');
			$datos['enf_pad_dom13_imc']=$this->input->post('d13cimc');
			$datos['enf_pad_dom13_cual']=$this->input->post('dom13imc');
			$datos['enf_pad_detalle_g']=$this->input->post('dtparidadg');
			$datos['enf_pad_detalle_p']=$this->input->post('dtparidadp');
			$datos['enf_pad_detalle_a']=$this->input->post('dtparidada');
			$datos['enf_pad_detalle_c']=$this->input->post('dtparidadc');
			$datos['enf_pad_notas_enfermeria']=$this->input->post('mdiagnosticos2');
			$datos['enf_pad_sv_sistole']=$this->input->post('sisenf');
			$datos['enf_pad_sv_diastole']=$this->input->post('diasenf');
			// $datos['enf_pad_total']=$this->input->post('cuidadototal');
			// $dig2=$this->input->post('mdiagnosticos2');
			// $armar2=explode("\r\n", $dig2);
			// $ndig2="";
			// for ($i=0; $i < count($armar2)-1; $i++)
			// { 
			// 	$ndig2=$ndig2.$armar2[$i];
			// }
			$diagnostico=$this->input->post('contadorDGENF');
			$idelementos2=1;
			$nombre_dig="Ninguno";
			$listd="";
			$listadg="";
			if(isset($_REQUEST['contadorDGENF']))
			{
				$con2=$_REQUEST['contadorDGENF'];
				
				if($con2>0)
				{
					$j=0;
					while ($idelementos2<=$con2) 
					{
						if(isset($_REQUEST['diagnenf'.$idelementos2]))
						{
							$nombre_dig=utf8_decode(utf8_encode($_REQUEST['diagnenf'.$idelementos2]));
							$listd=$listd.$nombre_dig.';';
				  			// $listadg=$listadg.$nombre_dig."\r\n";
							$nombre_dig="";
						}
						else
						{
							$nombre_dig="Ninguno";
						}
						$j++;
						$idelementos2++;
					}
				}
				else if($con2=="")
				{
					//echo '<br>'."No hay dom de diagnostico ".$nombre_dig;
				} 
			}
			if($nombre_dig=="Ninguno")
			{
				$datos['enf_pad_diagnosticos_enfermera']=$nombre_dig;
			}
			else
			{
				$datos['enf_pad_diagnosticos_enfermera']=$listd;
			}
			// $datos['enf_pad_diagnosticos_enfermera']=$this->input->post('mdiagnosticos2');
			$datos['enf_pad_f_reg']=$getfecha;
			$datos['enf_pad_h_reg']=$gethora;
			$datos['enf_pad_created_user']=$cargo;
			$datos['enf_pad_update_user']=$cargo;
			$datos['enf_pad_h_inicio']=$this->input->post('fechai');
			// $datos['enf_pad_update_date']=$quees;//validar con el dolor nivel

			$rs=$this->historia_enfermera_model->registrar_historiapad_enf($datos);
			echo $rs;
		}
		function actualizar_pad_enf(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");

			$datos['enf_pad_tipo_tratamiento']=$this->input->post('motivopadhcenf');
			$cargo=$this->session->userdata('s_id');
			$dig=$this->input->post('mdiagnosticos');
			$armar=explode("\r\n", $dig);
			$ndig="";
			for ($i=0; $i < count($armar)-1; $i++)
			{ 
				$ndig=$ndig.$armar[$i];
			}
			$datos['enf_pad_doc']=$this->input->post('numhc');
			$datos['enf_pad_diagnosticos']=$ndig;
			$datos['enf_pad_antecedentes']=$this->input->post('antecedentes');
			$datos['enf_pad_val_subjetiva']=$this->input->post('valoracionsubjetiva');
			$datos['enf_pad_sv_fc']=$this->input->post('svfc');
			$datos['enf_pad_sv_fr']=$this->input->post('svfr');
			$datos['enf_pad_sv_t']=$this->input->post('svt');
			$datos['enf_pad_svta']=$this->input->post('svta');
			$datos['enf_pad_sv_saturacion']=$this->input->post('svsaturacion');
			$datos['enf_pad_sv_glucometria']=$this->input->post('svglucometria');
			$datos['enf_pad_dom1_p1']=$this->input->post('dom1p1');
			$datos['enf_pad_dom1_p2']=$this->input->post('dom1p2');
			$datos['enf_pad_dom2_nutricion']=$this->input->post('dom2nutricion');
			$datos['enf_pad_dom2_otro']=$this->input->post('dom2otro');
			$datos['enf_pad_dom2_mucosa']=$this->input->post('dom2mucosa');
			$datos['enf_pad_dom2_dentadura']=$this->input->post('dom2dentadura');
			$datos['enf_pad_dom2_piel']=$this->input->post('dom2piel');
			$datos['enf_pad_dom2_hidratacion']=$this->input->post('dom2hidratacion');
			$datos['enf_pad_dom2_abdomen']=$this->input->post('dom2adobmen');
			$datos['enf_pad_dom2_rsls']=$this->input->post('dom2rsls');
			$datos['enf_pad_dom2_sng']=$this->input->post('d2sng');
			$datos['enf_pad_dom2_drenaje']=$this->input->post('dom2drenaje');
			$datos['enf_pad_dom2_caracteristicas']=$this->input->post('d2caracteristicas');
			$datos['enf_pad_dom3_deposiciones']=$this->input->post('dom3deposiciones');
			$datos['enf_pad_dom3_tipo']=$this->input->post('dom3tipo');
			$datos['enf_pad_dom3_vomito']=$this->input->post('dom3vomito');
			$datos['enf_pad_dom3_caracteristicas']=$this->input->post('d3caracteristicas');
			$datos['enf_pad_dom3_colostomia']=$this->input->post('dom3colostomia');
			$datos['enf_pad_dom3_oresis']=$this->input->post('dom3oresis');
			$datos['enf_pad_dom4_dependencia']=$this->input->post('dom4dependencia');
			$datos['enf_pad_dom4_sueno']=$this->input->post('dom4sueno');
			$datos['enf_pad_dom4_sueno_otros']=$this->input->post('d4otros');
			$datos['enf_pad_dom4_fiebre']=$this->input->post('dom4fiebre');
			$datos['enf_pad_dom4_tipo']=$this->input->post('d4tipo');
			$datos['enf_pad_dom4_fisica']=$this->input->post('dom4movilidad');
			$datos['enf_pad_dom4_fisica_descripcion']=$this->input->post('d4movilidadetalle');
			$datos['enf_pad_dom4_muscular']=$this->input->post('dom4muscular');
			$datos['enf_pad_dom4_muscular_descripcion']=$this->input->post('d4musculardetalle');
			$datos['enf_pad_dom4_respiratorias']=$this->input->post('dom4respiratorias');
			$datos['enf_pad_dom4_llenado_capilar']=$this->input->post('d4capilar');
			$datos['enf_pad_dom4_pulso']=$this->input->post('dom4pulso');
			$datos['enf_pad_dom4_pulso_f_implantacion']=$this->input->post('d4pulsofecha');
			$datos['enf_pad_dom4_fr']=$this->input->post('dom4fr');
			$datos['enf_pad_dom4_fr_descripcion']=$this->input->post('d4frdetalle');
			$datos['enf_pad_dom4_ruidos']=$this->input->post('dom4ruidos');
			$datos['enf_pad_dom4_tos']=$this->input->post('dom4tos');
			$datos['enf_pad_dom4_tos_tipo']=$this->input->post('d4tostipo');
			$datos['enf_pad_dom4_oxigenoterapia']=$this->input->post('dom4oxigeno');
			$datos['enf_pad_dom4_oxigenoterapia_tipo']=$this->input->post('d4oxigenotipo');
			$datos['enf_pad_dom4_fio']=$this->input->post('d4fio');
			$datos['enf_pad_dom4_tet']=$this->input->post('d4tet');
			$datos['enf_pad_dom4_traqueostomia']=$this->input->post('dom4traqueostomia');
			
			$datos['enf_pad_dom5_escala']=$this->input->post('dom5escala');
			$datos['enf_pad_dom5_escala_otro']=$this->input->post('dgasglowotro');
			$datos['enf_pad_dom5_conciencia']=$this->input->post('dom5conciencia');
			$datos['enf_pad_dom5_otro']=$this->input->post('dconcienciaotro');
			$datos['enf_pad_dom5_comunicacion']=$this->input->post('dom5comunicacion');
			$datos['enf_pad_dom5_comunicacion_otro']=$this->input->post('d6comunicacionotro');
			$datos['enf_pad_dom6_emocional']=$this->input->post('dom6emocional');
			$datos['enf_pad_dom6_lenguaje']=$this->input->post('dom6lenguaje');
			$datos['enf_pad_dom6_escucha']=$this->input->post('dom6escucha');//sin definir
			$datos['enf_pad_dom6_vision']=$this->input->post('dom6d6vision');
			$datos['enf_pad_dom7_familiares']=$this->input->post('dom7familiares');
			$datos['enf_pad_dom7_maltrato']=$this->input->post('dom7familiaresmaltrato');
			$datos['enf_pad_dom7_equipo']=$this->input->post('dom7equipo');
			$datos['enf_pad_dom8_civil']=$this->input->post('dom8civil');
			$datos['enf_pad_dom8_paridad']=$this->input->post('dom8paridad');
			$datos['enf_pad_dom8_hijos']=$this->input->post('d8hijos');
			$datos['enf_pad_dom8_vivos']=$this->input->post('d8vivos');
			$datos['enf_pad_dom8_fallecidos']=$this->input->post('d8fallecidos');
			$datos['enf_pad_dom8_its']=$this->input->post('dom8its');
			$datos['enf_pad_dom8_especifique']=$this->input->post('d8especifique');
			$datos['enf_pad_dom9_respuesta']=$this->input->post('dom9respuesta');
			$datos['enf_pad_dom9_intento']=$this->input->post('dom9intento');
			$datos['enf_pad_dom9_intento_descripcion']=$this->input->post('d9intentodetalle');
			$datos['enf_pad_dom10_religion']=$this->input->post('d10religion');
			$datos['enf_pad_dom10_sanguinea']=$this->input->post('dom10acepta');
			$datos['enf_pad_dom10_sanguinea_descripcion']=$this->input->post('d10aceptadetalle');
			$datos['enf_pad_dom10_religiosa']=$this->input->post('dom10solicita');
			$datos['enf_pad_dom10_religiosa_descripcion']=$this->input->post('d10solicitadetalle');
			$datos['enf_pad_dom11_seguridad']=$this->input->post('dom11seguridad');
			$datos['enf_pad_dom11_seguridad_otros']=$this->input->post('d11otros');
			$datos['enf_pad_dom11_cutanea']=$this->input->post('dom11cutanea');
			$datos['enf_pad_dom11_localizacion']=$this->input->post('d11localizacion');
			$datos['enf_pad_dom11_grado']=$this->input->post('d11grado');
			$datos['enf_pad_dom11_requerimientos']=$this->input->post('dom11requerimientos');
			$datos['enf_pad_dom11_requerimientos_otros']=$this->input->post('dom11otros');
			$datos['enf_pad_dom12_dolor']=$this->input->post('dom12dolor');
			$datos['enf_pad_dom12_dolor_nivel']=$this->input->post('d12nivel');
			$datos['enf_pad_dom12_dolor_localizacion']=$this->input->post('d12localizacion');
			$datos['enf_pad_dom12_estado']=$this->input->post('dom12higiene');
			$datos['enf_pad_dom12_especifique']=$this->input->post('d12especifique');
			$datos['enf_pad_dom13_peso']=$this->input->post('d13peso');
			$datos['enf_pad_dom13_talla']=$this->input->post('d13talla');
			$datos['enf_pad_dom13_imc']=$this->input->post('d13cimc');
			$datos['enf_pad_dom13_cual']=$this->input->post('dom13imc');
			$datos['enf_pad_detalle_g']=$this->input->post('dtparidadg');
			$datos['enf_pad_detalle_p']=$this->input->post('dtparidadp');
			$datos['enf_pad_detalle_a']=$this->input->post('dtparidada');
			$datos['enf_pad_detalle_c']=$this->input->post('dtparidadc');
			$datos['enf_pad_notas_enfermeria']=$this->input->post('mdiagnosticos2');
			$datos['enf_pad_sv_sistole']=$this->input->post('sisenf');
			$datos['enf_pad_sv_diastole']=$this->input->post('diasenf');
			// $datos['enf_pad_total']=$this->input->post('cuidadototal');
			// $dig2=$this->input->post('mdiagnosticos2');
			// $armar2=explode("\r\n", $dig2);
			// $ndig2="";
			// for ($i=0; $i < count($armar2)-1; $i++)
			// { 
			// 	$ndig2=$ndig2.$armar2[$i];
			// }
			// $datos['enf_pad_diagnosticos_enfermera']=$ndig2;
			$diagnostico=$this->input->post('contadorDGENF');
			$idelementos2=1;
			$nombre_dig="Ninguno";
			$listd="";
			$listadg="";
			if(isset($_REQUEST['contadorDGENF']))
			{
				$con2=$_REQUEST['contadorDGENF'];
				
				if($con2>0)
				{
					$j=0;
					while ($idelementos2<=$con2) 
					{
						if(isset($_REQUEST['diagnenf'.$idelementos2]))
						{
							$nombre_dig=utf8_decode(utf8_encode($_REQUEST['diagnenf'.$idelementos2]));
							$listd=$listd.$nombre_dig.';';
				  			// $listadg=$listadg.$nombre_dig."\r\n";
							$nombre_dig="";
						}
						else
						{
							$nombre_dig="Ninguno";
						}
						$j++;
						$idelementos2++;
					}
				}
				else if($con2=="")
				{
					//echo '<br>'."No hay dom de diagnostico ".$nombre_dig;
				} 
			}
			if($nombre_dig=="Ninguno")
			{
				$datos['enf_pad_diagnosticos_enfermera']=$nombre_dig;
			}
			else
			{
				$datos['enf_pad_diagnosticos_enfermera']=$listd;
			}
			$datos['enf_pad_f_reg']=$getfecha;
			$datos['enf_pad_h_reg']=$gethora;
			$datos['enf_pad_created_user']=$cargo;
			$datos['enf_pad_update_user']=$cargo;
			// $datos['enf_pad_update_date']=$quees;//validar con el dolor nivel

			$rs=$this->historia_enfermera_model->actualizar_historiapad_enf($datos);
			echo $rs;
		}
		function registrar_socio_enf(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");
			$cargo=$this->session->userdata('s_id');
			$t1=$this->input->post('aydtoal');
			$t2=$this->input->post('situacion_total');
			$aux="";
			$aux2="";
			if($t1>=13 && $t1<=26)
			{
				$aux="BAJA";
			}
			else if($t1>=27 && $t1<=39)
			{
				$aux="MODERADA";
			}
			else if($t1>=40 && $t1<=52)
			{
				$aux="ALTA";
			}
			if($t2>=5 && $t2<=9)
			{
				$aux2="ACEPTABLE";
			}
			else if($t2>=10 && $t2<=14)
			{
				$aux2="RIESGO SOCIAL";
			}
			else if($t2>14)
			{
				$aux2="RIESGO DE PROBLEMA SOCIAL";
			}

			$datos['enf_valoracion_doc']=$this->input->post('numhc2');
			$datos['enf_valoracion_pregunta_v']=$this->input->post('auxpreguntarvs');
			$datos['enf_valoracion_pregunta_detalle_v']=$this->input->post('auxpreguntardt1vs');
			$datos['enf_valoracion_servicios']=$this->input->post('auxservicios');
			$datos['enf_valoracion_telefonia']=$this->input->post('auxtelefonia');
			$datos['enf_valoracion_residuos']=$this->input->post('auxresiduos');
			$datos['enf_valoracion_vivienda']=$this->input->post('auxarea');
			$datos['enf_valoracion_vivienda_detalle']=$this->input->post('dtareavivienda');
			$datos['enf_valoracion_animales']=$this->input->post('viveanimales');
			$datos['enf_valoracion_vacunados']=$this->input->post('vivevacunados');
			$datos['enf_valoracion_habitan']=$this->input->post('vivehabitan');
			$datos['enf_valoracion_vectores']=$this->input->post('auxvectores');
			$datos['enf_valoracion_producto']=$this->input->post('viveproducto');
			$datos['enf_valoracion_almacenados']=$this->input->post('vivealmacenados');
			$datos['enf_valoracion_conservados']=$this->input->post('viveconservados');
			$datos['enf_valoracion_conservacion']=$this->input->post('viveconservacion');
			$datos['enf_valoracion_estado_cocina']=$this->input->post('viveestado');
			$datos['enf_valoracion_entorno_aseado']=$this->input->post('viveaseado');
			$datos['enf_valoracion_entorno_productos']=$this->input->post('viveproductos');
			$datos['enf_valoracion_entorno_orden']=$this->input->post('viveorden');
			$datos['enf_valoracion_entorno_rutinas']=$this->input->post('viverutinas');
			$datos['enf_valoracion_ingreso']=$this->input->post('viveingreso');
			$datos['enf_valoracion_exterior']=$this->input->post('viveexterior');
			$datos['enf_valoracion_bano']=$this->input->post('auxbano');
			$datos['enf_valoracion_separacion']=$this->input->post('auxseparacion');
			$datos['enf_valoracion_habitacion']=$this->input->post('auxhabitacion');
			$datos['enf_valoracion_ventilacion']=$this->input->post('auxventilacion');
			$datos['enf_valoracion_iluminacion']=$this->input->post('auxiluminacion');

			$datos['enf_valoracion_pregunta']=$this->input->post('auxpreguntar');
			$datos['enf_valoracion_pregunta_detalle']=$this->input->post('auxpreguntardt1');
			$datos['enf_valoracion_ayd1']=$this->input->post('ayd1');
			$datos['enf_valoracion_ayd2']=$this->input->post('ayd2');
			$datos['enf_valoracion_ayd3']=$this->input->post('ayd3');
			$datos['enf_valoracion_ayd4']=$this->input->post('ayd4');
			$datos['enf_valoracion_ayd5']=$this->input->post('ayd5');
			$datos['enf_valoracion_ayd6']=$this->input->post('ayd6');
			$datos['enf_valoracion_ayd7']=$this->input->post('ayd7');
			$datos['enf_valoracion_ayd8']=$this->input->post('ayd8');
			$datos['enf_valoracion_ayd9']=$this->input->post('ayd9');
			$datos['enf_valoracion_ayd10']=$this->input->post('ayd10');
			$datos['enf_valoracion_ayd11']=$this->input->post('ayd11');
			$datos['enf_valoracion_ayd12']=$this->input->post('ayd12');
			$datos['enf_valoracion_ayd13']=$this->input->post('ayd13');
			$datos['enf_valoracion_aydtotal']=$this->input->post('aydtoal');
			$datos['enf_valoracion_aydnivel']=$aux;
			$datos['enf_valoracion_ayd1x']=$this->input->post('ayd1x');
			$datos['enf_valoracion_ayd2x']=$this->input->post('ayd2x');
			$datos['enf_valoracion_ayd3x']=$this->input->post('ayd3x');
			$datos['enf_valoracion_ayd4x']=$this->input->post('ayd4x');
			$datos['enf_valoracion_grama']='na';//$this->input->post('dom4ruidos');
			$datos['enf_valoracion_ecomapa']='na';//$this->input->post('dom4tos');
			$datos['enf_valoracion_situacion_familiar']=$this->input->post('situacion_familiar');
			$datos['enf_valoracion_situacion_economica']=$this->input->post('situacion_economica');
			$datos['enf_valoracion_situacion_vivienda']=$this->input->post('situacion_vivienda');
			$datos['enf_valoracion_situacion_relaciones']=$this->input->post('situacion_relaciones');
			$datos['enf_valoracion_situacion_apoyo']=$this->input->post('situacion_apoyo');
			$datos['enf_valoracion_situacion_total']=$this->input->post('situacion_total');
			$datos['enf_valoracion_situacion_nivel']=$aux2;
			$datos['enf_valoracion_f_reg']=$getfecha;
			$datos['enf_valoracion_h_reg']=$gethora;
			$datos['enf_valoracion_created_user']=$cargo;
			$datos['enf_valoracion_update_user']=$cargo;
			// $datos['enf_valoracion_update_date']=$this->input->post('dom6emocional');
			$datos['enf_valoracion_h_inicio']=$this->input->post('fechai2');

			$rs=$this->historia_enfermera_model->registrar_historiasocio_enf($datos);
			echo $rs;
		}
		function actualizar_socio_enf(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");
			$cargo=$this->session->userdata('s_id');
			$t1=$this->input->post('aydtoal');
			$t2=$this->input->post('situacion_total');
			$aux="";
			$aux2="";
			if($t1>=13 && $t1<=26)
			{
				$aux="BAJA";
			}
			else if($t1>=27 && $t1<=39)
			{
				$aux="MODERADA";
			}
			else if($t1>=40 && $t1<=52)
			{
				$aux="ALTA";
			}
			if($t2>=5 && $t2<=9)
			{
				$aux2="ACEPTABLE";
			}
			else if($t2>=10 && $t2<=14)
			{
				$aux2="RIESGO SOCIAL";
			}
			else if($t2>14)
			{
				$aux2="RIESGO DE PROBLEMA SOCIAL";
			}

			$datos['enf_valoracion_doc']=$this->input->post('numhc2');
			$datos['enf_valoracion_pregunta_v']=$this->input->post('auxpreguntarvs');
			$datos['enf_valoracion_pregunta_detalle_v']=$this->input->post('auxpreguntardt1vs');
			$datos['enf_valoracion_servicios']=$this->input->post('auxservicios');
			$datos['enf_valoracion_telefonia']=$this->input->post('auxtelefonia');
			$datos['enf_valoracion_residuos']=$this->input->post('auxresiduos');
			$datos['enf_valoracion_vivienda']=$this->input->post('auxarea');
			$datos['enf_valoracion_vivienda_detalle']=$this->input->post('dtareavivienda');
			$datos['enf_valoracion_animales']=$this->input->post('viveanimales');
			$datos['enf_valoracion_vacunados']=$this->input->post('vivevacunados');
			$datos['enf_valoracion_habitan']=$this->input->post('vivehabitan');
			$datos['enf_valoracion_vectores']=$this->input->post('auxvectores');
			$datos['enf_valoracion_producto']=$this->input->post('viveproducto');
			$datos['enf_valoracion_almacenados']=$this->input->post('vivealmacenados');
			$datos['enf_valoracion_conservados']=$this->input->post('viveconservados');
			$datos['enf_valoracion_conservacion']=$this->input->post('viveconservacion');
			$datos['enf_valoracion_estado_cocina']=$this->input->post('viveestado');
			$datos['enf_valoracion_entorno_aseado']=$this->input->post('viveaseado');
			$datos['enf_valoracion_entorno_productos']=$this->input->post('viveproductos');
			$datos['enf_valoracion_entorno_orden']=$this->input->post('viveorden');
			$datos['enf_valoracion_entorno_rutinas']=$this->input->post('viverutinas');
			$datos['enf_valoracion_ingreso']=$this->input->post('viveingreso');
			$datos['enf_valoracion_exterior']=$this->input->post('viveexterior');
			$datos['enf_valoracion_bano']=$this->input->post('auxbano');
			$datos['enf_valoracion_separacion']=$this->input->post('auxseparacion');
			$datos['enf_valoracion_habitacion']=$this->input->post('auxhabitacion');
			$datos['enf_valoracion_ventilacion']=$this->input->post('auxventilacion');
			$datos['enf_valoracion_iluminacion']=$this->input->post('auxiluminacion');

			$datos['enf_valoracion_pregunta']=$this->input->post('auxpreguntar');
			$datos['enf_valoracion_pregunta_detalle']=$this->input->post('auxpreguntardt1');
			$datos['enf_valoracion_ayd1']=$this->input->post('ayd1');
			$datos['enf_valoracion_ayd2']=$this->input->post('ayd2');
			$datos['enf_valoracion_ayd3']=$this->input->post('ayd3');
			$datos['enf_valoracion_ayd4']=$this->input->post('ayd4');
			$datos['enf_valoracion_ayd5']=$this->input->post('ayd5');
			$datos['enf_valoracion_ayd6']=$this->input->post('ayd6');
			$datos['enf_valoracion_ayd7']=$this->input->post('ayd7');
			$datos['enf_valoracion_ayd8']=$this->input->post('ayd8');
			$datos['enf_valoracion_ayd9']=$this->input->post('ayd9');
			$datos['enf_valoracion_ayd10']=$this->input->post('ayd10');
			$datos['enf_valoracion_ayd11']=$this->input->post('ayd11');
			$datos['enf_valoracion_ayd12']=$this->input->post('ayd12');
			$datos['enf_valoracion_ayd13']=$this->input->post('ayd13');
			$datos['enf_valoracion_aydtotal']=$this->input->post('aydtoal');
			$datos['enf_valoracion_aydnivel']=$aux;
			$datos['enf_valoracion_ayd1x']=$this->input->post('ayd1x');
			$datos['enf_valoracion_ayd2x']=$this->input->post('ayd2x');
			$datos['enf_valoracion_ayd3x']=$this->input->post('ayd3x');
			$datos['enf_valoracion_ayd4x']=$this->input->post('ayd4x');
			$datos['enf_valoracion_grama']='na';//$this->input->post('dom4ruidos');
			$datos['enf_valoracion_ecomapa']='na';//$this->input->post('dom4tos');
			$datos['enf_valoracion_situacion_familiar']=$this->input->post('situacion_familiar');
			$datos['enf_valoracion_situacion_economica']=$this->input->post('situacion_economica');
			$datos['enf_valoracion_situacion_vivienda']=$this->input->post('situacion_vivienda');
			$datos['enf_valoracion_situacion_relaciones']=$this->input->post('situacion_relaciones');
			$datos['enf_valoracion_situacion_apoyo']=$this->input->post('situacion_apoyo');
			$datos['enf_valoracion_situacion_total']=$this->input->post('situacion_total');
			$datos['enf_valoracion_situacion_nivel']=$aux2;
			$datos['enf_valoracion_f_reg']=$getfecha;
			$datos['enf_valoracion_h_reg']=$gethora;
			$datos['enf_valoracion_created_user']=$cargo;
			$datos['enf_valoracion_update_user']=$cargo;
			// $datos['enf_valoracion_update_date']=$this->input->post('dom6emocional');

			$rs=$this->historia_enfermera_model->actualizar_historiasocio_enf($datos);
			echo $rs;
		}
		function registrar_escala_enf(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");

			$cargo=$this->session->userdata('s_id');
			$datos['enf_escala_doc']=$this->input->post('numhc3');
			$datos['enf_escala_pregunta']=$this->input->post('auxpreguntar2');
			$datos['enf_escala_detalle']=$this->input->post('auxpreguntardt2');
			$datos['enf_escala_fecha']=$this->input->post('carga_fecha');
			$datos['enf_escala_p1']=$this->input->post('carga_1');
			$datos['enf_escala_p2']=$this->input->post('carga_2');
			$datos['enf_escala_p3']=$this->input->post('carga_3');
			$datos['enf_escala_p4']=$this->input->post('carga_4');
			$datos['enf_escala_p5']=$this->input->post('carga_5');
			$datos['enf_escala_p6']=$this->input->post('carga_6');
			$datos['enf_escala_p7']=$this->input->post('carga_7');
			$datos['enf_escala_p8']=$this->input->post('carga_8');
			$datos['enf_escala_p9']=$this->input->post('carga_9');
			$datos['enf_escala_p10']=$this->input->post('carga_10');
			$datos['enf_escala_p11']=$this->input->post('carga_11');
			$datos['enf_escala_p12']=$this->input->post('carga_12');
			$datos['enf_escala_p13']=$this->input->post('carga_13');
			$datos['enf_escala_p14']=$this->input->post('carga_14');
			$datos['enf_escala_p15']=$this->input->post('carga_15');
			$datos['enf_escala_p16']=$this->input->post('carga_16');
			$datos['enf_escala_p17']=$this->input->post('carga_17');
			$datos['enf_escala_p18']=$this->input->post('carga_18');
			$datos['enf_escala_p19']=$this->input->post('carga_19');
			$datos['enf_escala_p20']=$this->input->post('carga_20');
			$datos['enf_escala_p21']=$this->input->post('carga_21');
			$datos['enf_escala_p22']=$this->input->post('carga_22');
			$datos['enf_escala_total']=$this->input->post('carga_total');
			$datos['enf_escala_estado']=$this->input->post('carga_nivel');
			$datos['enf_escala_f_reg']=$getfecha;
			$datos['enf_escala_h_reg']=$gethora;
			$datos['enf_escala_created_user']=$cargo;
			$datos['enf_escala_update_user']=$cargo;
			// $datos['enf_escala_update_date']=$this->input->post('ayd6');
			$datos['enf_escala_h_inicio']=$this->input->post('fechai3');

			$rs=$this->historia_enfermera_model->registrar_historiaescala_enf($datos);
			echo $rs;
		}
		function actualizar_escala_enf(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");

			$cargo=$this->session->userdata('s_id');
			$datos['enf_escala_doc']=$this->input->post('numhc3');
			$datos['enf_escala_pregunta']=$this->input->post('auxpreguntar2');
			$datos['enf_escala_detalle']=$this->input->post('auxpreguntardt2');
			$datos['enf_escala_fecha']=$this->input->post('carga_fecha');
			$datos['enf_escala_p1']=$this->input->post('carga_1');
			$datos['enf_escala_p2']=$this->input->post('carga_2');
			$datos['enf_escala_p3']=$this->input->post('carga_3');
			$datos['enf_escala_p4']=$this->input->post('carga_4');
			$datos['enf_escala_p5']=$this->input->post('carga_5');
			$datos['enf_escala_p6']=$this->input->post('carga_6');
			$datos['enf_escala_p7']=$this->input->post('carga_7');
			$datos['enf_escala_p8']=$this->input->post('carga_8');
			$datos['enf_escala_p9']=$this->input->post('carga_9');
			$datos['enf_escala_p10']=$this->input->post('carga_10');
			$datos['enf_escala_p11']=$this->input->post('carga_11');
			$datos['enf_escala_p12']=$this->input->post('carga_12');
			$datos['enf_escala_p13']=$this->input->post('carga_13');
			$datos['enf_escala_p14']=$this->input->post('carga_14');
			$datos['enf_escala_p15']=$this->input->post('carga_15');
			$datos['enf_escala_p16']=$this->input->post('carga_16');
			$datos['enf_escala_p17']=$this->input->post('carga_17');
			$datos['enf_escala_p18']=$this->input->post('carga_18');
			$datos['enf_escala_p19']=$this->input->post('carga_19');
			$datos['enf_escala_p20']=$this->input->post('carga_20');
			$datos['enf_escala_p21']=$this->input->post('carga_21');
			$datos['enf_escala_p22']=$this->input->post('carga_22');
			$datos['enf_escala_total']=$this->input->post('carga_total');
			$datos['enf_escala_estado']=$this->input->post('carga_nivel');
			$datos['enf_escala_f_reg']=$getfecha;
			$datos['enf_escala_h_reg']=$gethora;
			$datos['enf_escala_created_user']=$cargo;
			$datos['enf_escala_update_user']=$cargo;
			// $datos['enf_escala_update_date']=$this->input->post('ayd6');

			$rs=$this->historia_enfermera_model->actualizar_historiaescala_enf($datos);
			echo $rs;
		}
		function registrar_intervencion_enf(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");

			$cargo=$this->session->userdata('s_id');
			$datos['enf_intervencion_doc']=$this->input->post('numhc4');
			// $datos['enf_intervencion_fecha']=$this->input->post('interfecha');
			// $datos['enf_intervencion_npla']=$this->input->post('internplan');
			$dig=$this->input->post('cgdigenfplan');
			$armar=explode("\r\n", $dig);
			$ndig="";
			for ($i=0; $i < count($armar)-1; $i++)
			{ 
				$ndig=$ndig.$armar[$i];
			}
			$datos['enf_intervencion_diagnosticos_enf']=$ndig;
			$datos['enf_intervencion_pfeiffer']=$this->input->post('interpfeiffer');
			$datos['enf_intervencion_barthel']=$this->input->post('interbarthel');
			$datos['enf_intervencion_norton']=$this->input->post('internorton');
			$datos['enf_intervencion_braden']=$this->input->post('interbraden');
			$datos['enf_intervencion_karnosky']=$this->input->post('interkarnosky');
			$datos['enf_intervencion_socio']=$this->input->post('intersocio');
			$datos['enf_intervencion_ansiedad']=$this->input->post('interansiedad');
			$datos['enf_intervencion_zarith']=$this->input->post('interzarith');
			$datos['enf_intervencion_ns_respiar']=$this->input->post('nsrespirar');
			$datos['enf_intervencion_ns_descansar']=$this->input->post('nsdescansar');
			$datos['enf_intervencion_ns_comer']=$this->input->post('nscomerybeber');
			$datos['enf_intervencion_ns_vestimenta']=$this->input->post('nsvestimenta');
			$datos['enf_intervencion_ns_eliminar']=$this->input->post('nseliminar');
			$datos['enf_intervencion_ns_corporal']=$this->input->post('nscorporal');
			$datos['enf_intervencion_ns_higiene']=$this->input->post('nshigiene');
			$datos['enf_intervencion_ns_peligros']=$this->input->post('nspeligros');
			$datos['enf_intervencion_ns_postura']=$this->input->post('nspostura');
			$datos['enf_intervencion_ns_culto']=$this->input->post('nsculto');
			$datos['enf_intervencion_ns_comunicarse']=$this->input->post('nsexpresar');
			$datos['enf_intervencion_ns_estudiar']=$this->input->post('nsestudiar');
			$datos['enf_intervencion_ns_trabajar']=$this->input->post('nstrabajar');
			$datos['enf_intervencion_ns_participar']=$this->input->post('nsparticipar');
			$datos['enf_intervencion_ns_medico']=$this->input->post('nsmedico');
			$datos['enf_intervencion_ns_enfermeria']=$this->input->post('nsenfermeria');
			$datos['enf_intervencion_ns_diagnostico']=$this->input->post('nsdiagnostico');
			$datos['enf_intervencion_ns_complementacion']=$this->input->post('nscomplementacion');
			$datos['enf_intervencion_ns_educativo']=$this->input->post('nseducativo');
			$datos['enf_intervencion_paraclinicos']=$this->input->post('intnparaclinicos');
			$datos['enf_intervencion_imagenologia']=$this->input->post('intnimagenologia');
			$datos['enf_intervencion_liquidos']=$this->input->post('intnliquidos');
			$datos['enf_intervencion_observaciones']=$this->input->post('auxdtobservaciones');			
			$datos['enf_intervencion_f_reg']=$getfecha;
			$datos['enf_intervencion_h_reg']=$gethora;
			$datos['enf_intervencion_lista_diagnostico']=$this->input->post('auxlista1');
			$datos['enf_intervencion_lista_riesgo']=$this->input->post('auxlista2');
			$datos['enf_intervencion_lista_resultado']=$this->input->post('auxlista3');
			$datos['enf_intervencion_lista_intervenciones']=$this->input->post('auxlista4');
			
			$datos['enf_intervencion_created_user']=$cargo;
			$datos['enf_intervencion_update_user']=$cargo;
			// $datos['enf_intervencion_update_date']=$this->input->post('ayd6');
			$datos['enf_intervencion_h_inicio']=$this->input->post('fechai4');

			$rs=$this->historia_enfermera_model->registrar_historiintervencion_enf($datos);
			echo $rs;
		}
		function actualizar_intervencion_enf(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");

			$cargo=$this->session->userdata('s_id');
			$datos['enf_intervencion_doc']=$this->input->post('numhc4');
			// $datos['enf_intervencion_fecha']=$this->input->post('interfecha');
			// $datos['enf_intervencion_npla']=$this->input->post('internplan');
			$dig=$this->input->post('cgdigenfplan');
			$armar=explode("\r\n", $dig);
			$ndig="";
			for ($i=0; $i < count($armar)-1; $i++)
			{ 
				$ndig=$ndig.$armar[$i];
			}
			$datos['enf_intervencion_diagnosticos_enf']=$ndig;
			$datos['enf_intervencion_pfeiffer']=$this->input->post('interpfeiffer');
			$datos['enf_intervencion_barthel']=$this->input->post('interbarthel');
			$datos['enf_intervencion_norton']=$this->input->post('internorton');
			$datos['enf_intervencion_braden']=$this->input->post('interbraden');
			$datos['enf_intervencion_karnosky']=$this->input->post('interkarnosky');
			$datos['enf_intervencion_socio']=$this->input->post('intersocio');
			$datos['enf_intervencion_ansiedad']=$this->input->post('interansiedad');
			$datos['enf_intervencion_zarith']=$this->input->post('interzarith');
			$datos['enf_intervencion_ns_respiar']=$this->input->post('nsrespirar');
			$datos['enf_intervencion_ns_descansar']=$this->input->post('nsdescansar');
			$datos['enf_intervencion_ns_comer']=$this->input->post('nscomerybeber');
			$datos['enf_intervencion_ns_vestimenta']=$this->input->post('nsvestimenta');
			$datos['enf_intervencion_ns_eliminar']=$this->input->post('nseliminar');
			$datos['enf_intervencion_ns_corporal']=$this->input->post('nscorporal');
			$datos['enf_intervencion_ns_higiene']=$this->input->post('nshigiene');
			$datos['enf_intervencion_ns_peligros']=$this->input->post('nspeligros');
			$datos['enf_intervencion_ns_postura']=$this->input->post('nspostura');
			$datos['enf_intervencion_ns_culto']=$this->input->post('nsculto');
			$datos['enf_intervencion_ns_comunicarse']=$this->input->post('nsexpresar');
			$datos['enf_intervencion_ns_estudiar']=$this->input->post('nsestudiar');
			$datos['enf_intervencion_ns_trabajar']=$this->input->post('nstrabajar');
			$datos['enf_intervencion_ns_participar']=$this->input->post('nsparticipar');
			$datos['enf_intervencion_ns_medico']=$this->input->post('nsmedico');
			$datos['enf_intervencion_ns_enfermeria']=$this->input->post('nsenfermeria');
			$datos['enf_intervencion_ns_diagnostico']=$this->input->post('nsdiagnostico');
			$datos['enf_intervencion_ns_complementacion']=$this->input->post('nscomplementacion');
			$datos['enf_intervencion_ns_educativo']=$this->input->post('nseducativo');
			$datos['enf_intervencion_paraclinicos']=$this->input->post('intnparaclinicos');
			$datos['enf_intervencion_imagenologia']=$this->input->post('intnimagenologia');
			$datos['enf_intervencion_liquidos']=$this->input->post('intnliquidos');
			$datos['enf_intervencion_observaciones']=$this->input->post('auxdtobservaciones');		
			$datos['enf_intervencion_f_reg']=$getfecha;
			$datos['enf_intervencion_h_reg']=$gethora;
			$datos['enf_intervencion_lista_diagnostico']=$this->input->post('auxlista1');
			$datos['enf_intervencion_lista_riesgo']=$this->input->post('auxlista2');
			$datos['enf_intervencion_lista_resultado']=$this->input->post('auxlista3');
			$datos['enf_intervencion_lista_intervenciones']=$this->input->post('auxlista4');
			$datos['enf_intervencion_created_user']=$cargo;
			$datos['enf_intervencion_update_user']=$cargo;
			// $datos['enf_intervencion_update_date']=$this->input->post('ayd6');

			$rs=$this->historia_enfermera_model->actualizar_historiintervencion_enf($datos);
			echo $rs;
		}

		function mostrar_paciente(){
			$nom=$this->input->post('nomb');
			
			$datos=$this->historia_enfermera_model->buscar_paciente_nombres($nom);
			echo json_encode($datos);
		}
	}
?>