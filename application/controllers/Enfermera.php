<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Enfermera extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('enfermera_model');
			if(!$this->session->userdata('s_id'))
			{
				redirect('entrar');//iniciar/vlogin
			}
			$cuales=$this->session->userdata('s_tipo');
	        if ($cuales=="5")
			{
			    redirect('super');
			}
			else if ($cuales=="4")
			{
			    redirect('admin');
			}
			else if ($cuales=="3")
			{
			    redirect('medico');
			}
			else if ($cuales=="2")
			{
			    // redirect('enfermera');
			}
			else if ($cuales=="1")
			{
			    redirect('empleado');
			}
		}
		function index(){
			// $datos=$this->empleado_model->consultar_perfil($busqueda);
			$recibodatos['cn']=$this->enfermera_model->consultar_perfil($this->session->userdata('s_id'));
			$this->load->view('plantilla/header');
			$this->load->view('plantilla/menu_enf');
			$this->load->view('perfil/venfermera',$recibodatos);
			$this->load->view('plantilla/footer');
		}
		function actualizar(){
			$usu=$this->input->post('corre');
			$cuales=$this->session->userdata('s_tipo');
			$datos['id_registro_usuario']=$this->input->post('corre');
			$datos['registro_nombres']=$this->input->post('elnombre');
			$datos['registro_apellidos']=$this->input->post('elape');
			$datos['registro_f_nacimiento']=$this->input->post('fnaci');
			$datos['registro_edad']=$this->input->post('edad');
			$datos['registro_celular']=$this->input->post('elcelular');
			$datos['registro_sexo']=$this->input->post('sex');
			$datos['registro_doc']=$this->input->post('elndoc');
			$datos['registro_n_medico']=$this->input->post('elnreg');
			$datos['registro_especialidad']=$this->input->post('laespec');
			
			$datos['registro_tipo']=$cuales;
			$fotoa=$this->input->post('ftanterior');
			$nvfoto=$_FILES['foto'];
	
			$porciones = explode("@", $usu);
			$nomcarp=$porciones[0];

			$carpeta='assets/img/empleado/'.$nomcarp.'/';
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
						unlink($fotoa);
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
				$nuevarutaimg=$fotoa;
				//echo "dguardar";
			}
			$datos['registro_img']=$nuevarutaimg;
			$rs=$this->enfermera_model->actualizar_perfil($datos);
			echo $rs;
		}
		function calcular(){
			$dato=$this->input->post('lafecha');
			$rs=$this->enfermera_model->calcular_edad($dato);
			echo $rs;			
		}
		function salir_sistema(){
			session_destroy();
			redirect('entrar');
		}
	}
?>