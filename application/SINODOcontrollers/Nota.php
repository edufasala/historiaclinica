<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Nota extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('nota_model');
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
				$this->load->view('nota/vregnota');
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
			$datos['nota_doc']=$this->input->post('ndoc');
			$datos['nota_f_nota']=$this->input->post('fchct');
			$datos['nota_h_nota']=$this->input->post('lahr');
			$datos['nota_nota']=$this->input->post('lanota');
			$datos['nota_f_reg']=$getfecha;
			$datos['nota_h_reg']=$gethora;
			$datos['nota_created_user']=$cargo;
			$datos['nota_update_user']=$cargo;

			$this->nota_model->registrar_nota($datos);

			echo json_encode($datos);
		}
		
		function mostrar_paciente_nota(){
			$nom=$this->input->post('nomb');
			
			$datos=$this->nota_model->buscar_paciente_nombres($nom);
			echo json_encode($datos);
		}
	}
?>