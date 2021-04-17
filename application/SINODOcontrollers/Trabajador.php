<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Trabajador extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('trabajador_model');
			if(!$this->session->userdata('s_id'))
			{
				redirect('entrar');//iniciar/vlogin
			}
			$cuales=$this->session->userdata('s_tipo');
	        if ($cuales=="5")
			{
			    redirect('inicio_spadmin');
			}
			else if ($cuales=="4")
			{
			    // redirect('inicio_admin');
			}
			else if ($cuales=="3")
			{
			    redirect('inicio_medico');
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
			$this->load->view('plantilla/menu_a');
			$this->load->view('trabajador/vregtrabajador');
			$this->load->view('plantilla/footer');
            
		}
		function registrar(){
			$datos['registro_nombres']=$this->input->post('elnombre');
			$datos['registro_apellidos']=$this->input->post('elape');
			$datos['registro_contra']=$this->input->post('lacl');
			$datos['registro_sexo']=$this->input->post('sex');
			$datos['registro_f_nacimiento']=$this->input->post('fnaci');
			$datos['registro_edad']=$this->input->post('edad');
			$datos['registro_celular']=$this->input->post('elcelular');
			$datos['registro_doc']=$this->input->post('elndoc');
			$datos['registro_n_medico']=$this->input->post('elnreg');
			$datos['registro_especialidad']=$this->input->post('laespec');
			// $ttra=$this->input->post('templeado');
			$datos['registro_img']="";
			$datos['id_registro_usuario']=$this->input->post('corre');
			$usu=$this->input->post('corre');
			$estado="1";
			$datos['registro_estado']=$estado;
			
			$porciones = explode("@", $usu);
			$nomcarp=$porciones[0];

			$datos['nombre_carpeta']=$nomcarp;
			$datos['registro_tipo']=$this->input->post('templeado');
			
			$rs=$this->trabajador_model->registrar_trabajador($datos);
			// echo json_encode($datos);
			echo $rs;
		}
		
		function actualizar(){
			$datos['id_registro_usuario']=$this->input->post('corr');
			$datos['registro_nombres']=$this->input->post('nombr');
			$datos['registro_apellidos']=$this->input->post('elape');
			$datos['registro_sexo']=$this->input->post('tpsex');
			$datos['registro_f_nacimiento']=$this->input->post('fnaci');
			$datos['registro_edad']=$this->input->post('edad');
			$datos['registro_celular']=$this->input->post('elcelular');
			$datos['registro_tipo']=$this->input->post('templeado');//templeado
			$datos['registro_estado']=$this->input->post('elestado');
			$datos['registro_doc']=$this->input->post('elndoc');
			$datos['registro_n_medico']=$this->input->post('elnreg');
			$datos['registro_especialidad']=$this->input->post('laespec');
			$usu=$this->input->post('corr');
	
			$fotoa=$this->input->post('imga');
			$nvfoto=$_FILES['mift'];

			$porciones = explode("@", $usu);
			$nomcarp=$porciones[0];
			$carpeta='assets/img/empleado/'.$nomcarp.'/';
			$nuevarutaimg="";

			$mis_extensiones=array('image/jpeg','image/jpg','image/png');
			$tpimg= $_FILES['mift']['type'];
			$timg= $_FILES['mift']['size'];
			$maximo=500000;

			if($nvfoto['name']!="")
			{
				if(in_array($tpimg,$mis_extensiones))
				{
					if($timg<=$maximo)
					{
						echo "guardar";
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
				echo "dguardar";
			}
			$datos['registro_img']=$nuevarutaimg;

			$rs=$this->trabajador_model->actualizar_trabajador($datos);

			// echo json_encode($datos);//Validar si se guardo o no
			echo $rs;
		}
		function eliminar_tra(){
			$dato=$this->input->post('llave');
			$ruta=$this->input->post('ruta');
			$porciones = explode("@", $dato);
			$nomcarp=$porciones[0];
			
			$carpeta='assets/img/empleado/'.$nomcarp;
			unlink($ruta);
			rmdir($carpeta);
			$rs=$this->trabajador_model->eliminar_trabajador($dato);
		}

		function eliminar_med(){
			$dato=$this->input->post('llave');
			$ruta=$this->input->post('ruta');
			$porciones = explode("@", $dato);
			$nomcarp=$porciones[0];
			
			$carpeta='assets/img/medico/'.$nomcarp;
			unlink($ruta);
			rmdir($carpeta);
			$rs=$this->trabajador_model->eliminar_medico($dato);
		}
		function calcular(){
			$dato=$this->input->post('lafecha');
			$rs=$this->trabajador_model->calcular_edad($dato);
			echo $rs;			
		}
	}
?>