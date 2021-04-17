<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Gams extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('gams_model');
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
            	
            	$this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_m');
				$this->load->view('gams/vreggams');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="2")
            {
                $aux="Usuario";
                redirect('inicio_enfermera');
            }
            else if($cargo=="1")
            {
            	redirect('inicio_empleado');
            }
			
		}
		function registrar(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");
			$cargo=$this->session->userdata('s_id');
			$datos['gams_doc']=$this->input->post('ndoc');
			$datos['gams_tipo_edad']=$this->input->post('ted');
			$datos['gams_tipo_analisis']=$this->input->post('tan');
			$datos['gams_f_gams']=$this->input->post('fchct');
			$datos['gams_h_gams']=$this->input->post('lahr');
			$datos['gams_nota']=$this->input->post('lanota');
			$datos['gams_f_reg']=$getfecha;
			$datos['gams_h_reg']=$gethora;
			$datos['gams_created_user']=$cargo;
			$datos['gams_update_user']=$cargo;

			$rs=$this->gams_model->registrar_gams($datos);

			// echo json_encode($datos);
			echo $rs;
		}
		
		function mostrar_paciente_gams(){
			$nom=$this->input->post('nomb');
			
			$datos=$this->gams_model->buscar_paciente_nombres($nom);
			echo json_encode($datos);
		}
	}
?>