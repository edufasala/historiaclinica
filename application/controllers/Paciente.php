<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Paciente extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('paciente_model');
			// if(!$this->session->userdata('s_id'))
			// {
			// 	redirect('entrar');//iniciar/vlogin
			// }
		}
		function index(){
			$cargo=$this->session->userdata('s_tipo');
            $aux="";
            if($cargo=="5")
            {
            	// redirect('inicio_spadmin');
            	$this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_s');
				$this->load->view('paciente/vregpaciente');
				$this->load->view('plantilla/footer');
               
            }
            else if($cargo=="4")
            {
                $aux="Administrador";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_a');
				$this->load->view('paciente/vregpaciente');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="3")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_m');
				$this->load->view('paciente/vregpaciente');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="2")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_enf');
				$this->load->view('paciente/vregpaciente');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="1")
            {
            	$aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_e');
				$this->load->view('paciente/vregpaciente');
				$this->load->view('plantilla/footer');
            }
		}
		function registrar(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$todayh =getdate($now);

			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");
			$cuales=$this->session->userdata('s_id');
			$datos['tipo_doc_paciente']=$this->input->post('tipodoc');
			$datos['doc_paciente']=$this->input->post('ndoc');
			$datos['pnombre_paciente']=$this->input->post('elnombre');
			$datos['snombre_paciente']=$this->input->post('snombre');
			$datos['papellido_paciente']=$this->input->post('apelli');
			$datos['sapellido_paciente']=$this->input->post('sapelli');
			$datos['lugar_nacimiento_paciente']=$this->input->post('lugarn');
			$datos['f_nacimiento_paciente']=$this->input->post('fnaci');
			$datos['tipo_vinculacion_paciente']=$this->input->post('tipov');
			$datos['tipo_afiliado_paciente']=$this->input->post('tipoa');
			$datos['aseguradora_paciente']=$this->input->post('asegura');
			$datos['ambito_registro_paciente']=$this->input->post('ambito');
			$datos['direccion_paciente']=$this->input->post('direccion');
			$datos['barrio_paciente']=$this->input->post('barrio');
			$datos['municipio_paciente']=$this->input->post('municipio');
			$datos['tel_fijo_paciente']=$this->input->post('telfijo');
			$datos['tel_celular_paciente']=$this->input->post('telcel');
			$datos['ocupacion_paciente']=$this->input->post('ocupacion');
			$datos['religion_paciente']=$this->input->post('religion');
			$datos['estado_civil_paciente']=$this->input->post('estadoc');
			$datos['nom_cuidador_paciente']=$this->input->post('ncuidador');
			$datos['tel_cuidador_paciente']=$this->input->post('telcuidador');
			$datos['nom_responsable_paciente']=$this->input->post('nresponsable');
			$datos['tel_responsable_paciente']=$this->input->post('tresponsable');
			$datos['parentezco_responsable_paciente']=$this->input->post('parece');
			$datos['motivo_inclusion_paciente']=$this->input->post('minclusion');
			$datos['lugar_valoracion_paciente']=$this->input->post('lugarv');
			$datos['f_vinculacion_paciente']=$getfecha;//$this->input->post('fvincula');
			$datos['h_vinculacion_paciente']=$gethora;//this->input->post('hvincula');
			$datos['inclusion_pad_paciente']=$this->input->post('mpad');
			$datos['created_user']=$cuales;
			$datos['update_user']=$cuales;
			
			$rs=$this->paciente_model->registrar_paciente($datos);
			echo $rs;
		}
		function actualizar(){
			$cuales=$this->session->userdata('s_id');
			$datos['id_paciente']=$this->input->post('idpc');
			$datos['tipo_doc_paciente']=$this->input->post('tdoc');
			$datos['doc_paciente']=$this->input->post('ndoc');
			$datos['pnombre_paciente']=$this->input->post('pnombre');
			$datos['snombre_paciente']=$this->input->post('snombre');
			$datos['papellido_paciente']=$this->input->post('papellido');
			$datos['sapellido_paciente']=$this->input->post('sapellido');
			$datos['lugar_nacimiento_paciente']=$this->input->post('lugarn');
			$datos['f_nacimiento_paciente']=$this->input->post('fnaci');
			$datos['tipo_vinculacion_paciente']=$this->input->post('tipov');
			$datos['tipo_afiliado_paciente']=$this->input->post('tipoa');
			$datos['aseguradora_paciente']=$this->input->post('asegura');
			$datos['ambito_registro_paciente']=$this->input->post('ambito');
			$datos['direccion_paciente']=$this->input->post('direccion');
			$datos['barrio_paciente']=$this->input->post('barrio');
			$datos['municipio_paciente']=$this->input->post('municipio');
			$datos['tel_fijo_paciente']=$this->input->post('telfijo');
			$datos['tel_celular_paciente']=$this->input->post('telcel');
			$datos['ocupacion_paciente']=$this->input->post('ocupacion');
			$datos['religion_paciente']=$this->input->post('religion');
			$datos['estado_civil_paciente']=$this->input->post('estadoc');
			$datos['nom_cuidador_paciente']=$this->input->post('ncuidador');
			$datos['tel_cuidador_paciente']=$this->input->post('telcuidador');
			$datos['nom_responsable_paciente']=$this->input->post('nresponsable');
			$datos['tel_responsable_paciente']=$this->input->post('tresponsable');
			$datos['parentezco_responsable_paciente']=$this->input->post('parece');
			$datos['motivo_inclusion_paciente']=$this->input->post('minclusion');
			$datos['lugar_valoracion_paciente']=$this->input->post('lugarv');
			// $datos['f_vinculacion_paciente']=$this->input->post('fvincula');
			// $datos['h_vinculacion_paciente']=$this->input->post('hvincula');
			$datos['inclusion_pad_paciente']=$this->input->post('mpad');
			$datos['created_user']=$cuales;
			$datos['update_user']=$cuales;
			// $datos['_paciente']=$this->input->post('');
			// $datos['_paciente']=$this->input->post('');
			// $datos['_paciente']=$this->input->post('');
			

			$rs=$this->paciente_model->actualizar_paciente($datos);
			echo $rs;
		}
		function actualizar2(){
			$cuales=$this->session->userdata('s_id');
			$datos['id_paciente']=$this->input->post('idpc');
			$datos['tipo_doc_paciente']=$this->input->post('tipodoc');
			$datos['doc_paciente']=$this->input->post('ndoc');
			$datos['pnombre_paciente']=$this->input->post('pnombre');
			$datos['snombre_paciente']=$this->input->post('snombre');
			$datos['papellido_paciente']=$this->input->post('papellido');
			$datos['sapellido_paciente']=$this->input->post('sapellido');
			$datos['lugar_nacimiento_paciente']=$this->input->post('lugarn');
			$datos['f_nacimiento_paciente']=$this->input->post('fnaci');
			$datos['tipo_vinculacion_paciente']=$this->input->post('tipov');
			$datos['tipo_afiliado_paciente']=$this->input->post('tipoa');
			$datos['aseguradora_paciente']=$this->input->post('asegura');
			$datos['ambito_registro_paciente']=$this->input->post('ambito');
			$datos['direccion_paciente']=$this->input->post('direccion');
			$datos['barrio_paciente']=$this->input->post('barrio');
			$datos['municipio_paciente']=$this->input->post('municipio');
			$datos['tel_fijo_paciente']=$this->input->post('telfijo');
			$datos['tel_celular_paciente']=$this->input->post('telcel');
			$datos['ocupacion_paciente']=$this->input->post('ocupacion');
			$datos['religion_paciente']=$this->input->post('religion');
			$datos['estado_civil_paciente']=$this->input->post('estadoc');
			$datos['nom_cuidador_paciente']=$this->input->post('ncuidador');
			$datos['tel_cuidador_paciente']=$this->input->post('telcuidador');
			$datos['nom_responsable_paciente']=$this->input->post('nresponsable');
			$datos['tel_responsable_paciente']=$this->input->post('tresponsable');
			$datos['parentezco_responsable_paciente']=$this->input->post('parece');
			$datos['motivo_inclusion_paciente']=$this->input->post('minclusion');
			$datos['lugar_valoracion_paciente']=$this->input->post('lugarv');
			// $datos['f_vinculacion_paciente']=$this->input->post('fvincula');
			// $datos['h_vinculacion_paciente']=$this->input->post('hvincula');
			$datos['inclusion_pad_paciente']=$this->input->post('mpad');
			// $datos['_paciente']=$this->input->post('');
			// $datos['_paciente']=$this->input->post('');
			// $datos['_paciente']=$this->input->post('');
			$datos['created_user']=$cuales;
			$datos['update_user']=$cuales;
			
			$rs=$this->paciente_model->actualizar_paciente($datos);
			echo $rs;
		}
		function archivo(){
			$usu=$this->input->post('unosid');
			$cuales=$this->session->userdata('s_id');
			
			// $fotoa=$this->input->post('ftanterior');
			$nvfoto=$_FILES['foto'];
	
			// $porciones = explode("@", $usu);
			$nomcarp=$usu;

			$carpeta='assets/img/paciente/'.$nomcarp.'/';
			$nuevarutaimg="";

			$mis_extensiones=array('image/jpeg','image/jpg','image/png');
			$tpimg= $_FILES['foto']['type'];
			$timg= $_FILES['foto']['size'];
			$maximo=500000;
			//echo $carpeta.$_FILES['foto']['name'];
			if($nvfoto['name']!="")
			{
				if(in_array($tpimg,$mis_extensiones))
				{
					if($timg<=$maximo)
					{
						//echo "guardar";
						// unlink($fotoa);
						opendir($carpeta);
						$ruta=$carpeta.$nvfoto['name'];
						copy($nvfoto['tmp_name'],$ruta);
						
						$nuevarutaimg=$ruta;
					}
					else
					{
						echo "notm";
					}
				}
				else
				{
					echo "nofmt";
				}
			}
			else
			{
				$nuevarutaimg="";
				// echo "dg";
				// return 3;
			}
			$datos['img_paciente']=$nuevarutaimg;
			$datos['cualpc']=$usu;
			$datos['created_user']=$cuales;
			$datos['update_user']=$cuales;
			$rs=$this->paciente_model->registrar_arc($datos);
			echo $rs;
		}
		function eliminar(){
			$dato=$this->input->post('llave');
			
			$rs=$this->paciente_model->eliminar_paciente($dato);
		}
		function calcular(){
			$dato=$this->input->post('lafecha');
			$rs=$this->paciente_model->calcular_edad($dato);
			echo $rs;
		}
	}
?>