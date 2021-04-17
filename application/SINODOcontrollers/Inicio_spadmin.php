<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Inicio_spadmin extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('super_model');
			if(!$this->session->userdata('s_id'))
			{
				redirect('entrar');//iniciar/vlogin
			}
			else
			{
				$cuales=$this->session->userdata('s_tipo');
		        if ($cuales=="5")
		        {
		            // redirect('inicio_spadmin');
		        }
		        else if ($cuales=="4")
		        {
		            redirect('inicio_admin');
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
		}
		function index(){
			$recibodatos=$this->super_model->consultar_estadisticas_inicio();
			$datos['cn']= array(
							'hc' => $recibodatos['hc_hoy'],
							'ev' => $recibodatos['ev_hoy'],
							'hc_enf' => $recibodatos['hc_enf_hoy'],
							'visita' => $recibodatos['vs_hoy'],
							'empleado' => $recibodatos['emp_hoy'],
							'enfermera' => $recibodatos['enf_hoy'],
							'medico' => $recibodatos['med_hoy'],
							'administrador' => $recibodatos['adm_hoy'],
							'spadministrador' => $recibodatos['spadm_hoy'],
							);
			$this->load->view('plantilla/header');
			$this->load->view('plantilla/menu_s');
			$this->load->view('principal/vinicio_spadmin',$datos);
			$this->load->view('plantilla/footer');
		}
		function estadisticas_hoy(){
			$recibodatos=$this->agenda_model->consultar_estadisticas();
			echo json_encode($recibodatos);
		}
	}
?>