<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Evolucion extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('evolucion_model');
			$cuales=$this->session->userdata('s_tipo');
	        if ($cuales=="5")
	        {
	            redirect('inicio_spadmin');
	        }
	        else if ($cuales=="4")
	        {
	            redirect('inicio_admin');
	        }
	        else if ($cuales=="3")
	        {
	            // redirect('inicio_medico');
	        }
	        else if ($cuales=="2")
	        {
	            redirect('inicio_enfermera');
	        }
	        else if ($cuales=="1")
	        {
	            redirect('inicio_empleado');
	        }
		}
		function index(){
			$this->load->view('plantilla/header');
			$this->load->view('plantilla/menu_m');
			$this->load->view('emedica/vregevolucion');
			$this->load->view('plantilla/footer');
		}
		function registrar(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");
			$cuales=$this->session->userdata('s_id');
			$datos['nro_hc']=$this->input->post('nhc');
			$datos['evolucion_doc']=$this->input->post('ndoc');

			$datos['evolucion_motivo_consulta']=$this->input->post('mconsuta');
			$datos['evolucion_enfermedad_actual']=$this->input->post('enfactual');
			$datos['evolucion_a_personales']=$this->input->post('antper');
			$datos['evolucion_a_familiares']=$this->input->post('antfam');
			$datos['evolucion_revision_sistema']=$this->input->post('rxs');
			$datos['evolucion_satur']=$this->input->post('satur');
			$datos['evolucion_glucom']=$this->input->post('glucom');
			$datos['evolucion_fr']=$this->input->post('fr');

			$datos['evolucion_fc']=$this->input->post('fc');
			$datos['evolucion_temperatura']=$this->input->post('te');
			$datos['evolucion_tension_arterial']=$this->input->post('ta');
			$datos['evolucion_descripcion_examen']=$this->input->post('dexamen');
			$datos['evolucion_analisis']=$this->input->post('anali');
			$datos['evolucion_plan']=$this->input->post('plan');
			
			$datos['evolucion_pad']=$this->input->post('auxpad');
			$datos['evolucion_mj_fisica']=$this->input->post('mi1');
			$datos['evolucion_mj_lenguaje']=$this->input->post('mi2');
			$datos['evolucion_mj_ocupacional']=$this->input->post('mi3');
			$datos['evolucion_mj_respiratoria']=$this->input->post('mi4');
			$datos['evolucion_mj_nutricion']=$this->input->post('mi5');
			$datos['evolucion_mj_social']=$this->input->post('mi6');
			$datos['evolucion_mj_psicologia']=$this->input->post('mi7');
			$datos['evolucion_mj_enfermeria']=$this->input->post('mi8');
			$datos['evolucion_paraclinicos']=$this->input->post('paracli');
			$datos['evolucion_valoraciones']=$this->input->post('valo');
			$datos['evolucion_insumos']=$this->input->post('auxinsumo');
			$datos['evolucion_recomendaciones']=$this->input->post('reco');
			$datos['evolucion_f_reg']=$getfecha;
			$datos['evolucion_h_reg']=$gethora;
			$datos['evolucion_created_user']=$cuales;
			$datos['evolucion_update_user']=$cuales;	
			$datos['evolucion_h_inicio']=$this->input->post('fechai');

			$diagnostico=$this->input->post('contadorD');
			$diagnostico2=$this->input->post('contadorDI');

			$idelementos=1;
			$nombre_dig2="Ninguno";
			$listd="";
			$listadg="";
			
			if(isset($_REQUEST['contadorD']))
			{
				$con=$_REQUEST['contadorD'];
				
				if($con>0)
				{
					$i=0;
					while ($idelementos<=$con) 
					{
						if(isset($_REQUEST['dg'.$idelementos]))
						{
							$nombre_dig=utf8_decode(utf8_encode($_REQUEST['dg'.$idelementos]));
							//echo '<br>'." AG: ".$nombre_dig.'';
							////echo '<br>'."guardar td y dom";
							//$data[$i]=$nombre_dig.';'; //utf8_decode($_REQUEST['diagn'.$idelementos]);
							$listd=$listd.$nombre_dig.';';
				  			$listadg=$listadg.$nombre_dig."\r\n";
							$nombre_dig2="";
						}
						else
						{
							//echo "Error no hay datos en el dom diagnostico";
							$nombre_dig2="Ninguno";
							//echo '<br>'."guardar td";
						}
						$i++;
						$idelementos++;
					}
				}
				else if($con=="")
				{
					//echo '<br>'."No hay dom de diagnostico ".$nombre_dig2;
				} 
			}
			if($nombre_dig2=="Ninguno")
			{
				$datos['evolucion_otros_diagnosticos']=$nombre_dig2;
			}
			else
			{
				$datos['evolucion_otros_diagnosticos']=$listd;
			}
			$dig=$this->input->post('losdg');
			$armar=explode("\r\n", $dig);
			$ndig="";
			for ($i=0; $i < count($armar)-1; $i++)
			{ 
				$ndig=$ndig.$armar[$i];
			}
			$datos['evolucion_diagnosticos']=$ndig;
			// $datos['lista_diagnosticos']=$this->input->post('losdg');

			$idelementos2=1;
			$nombre_dig3="Ninguno";
			$listd2="";
			$listadg2="";
			if(isset($_REQUEST['contadorDI']))
			{
				$con2=$_REQUEST['contadorDI'];
				
				if($con2>0)
				{
					$j=0;
					while ($idelementos2<=$con2) 
					{
						if(isset($_REQUEST['farmaco'.$idelementos2]))
						{
							$nombre_f=strtoupper(utf8_decode(utf8_encode($_REQUEST['farmaco'.$idelementos2])));
							$listd2=$listd2.$nombre_f.';';
				  			$listadg2=$listadg2.$nombre_f."\r\n";
							$nombre_dig3="";
						}
						else
						{
							//echo "Error no hay datos en el dom diagnostico";
							$nombre_dig3="Ninguno";
							//echo '<br>'."guardar td";
						}
						$j++;
						$idelementos2++;
					}
				}
				else if($con2=="")
				{
					//echo '<br>'."No hay dom de diagnostico ".$nombre_dig2;
				} 
			}
			if($nombre_dig3=="Ninguno")
			{
				$datos['evolucion_farmacos']=$nombre_dig3;
				// $datos['siono']="no";
			}
			else
			{
				$datos['evolucion_farmacos']=$listd2;
				// $datos['siono']="si";
			}

			$rs=$this->evolucion_model->registrar_evolucion($datos);
			echo $rs;
		}
		function mostrar_paciente_historia(){
			$nom=$this->input->post('nomb');
			
			$datos=$this->evolucion_model->buscar_paciente_nombres($nom);
			echo json_encode($datos);
		}
	}
?>