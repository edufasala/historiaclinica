<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Inicio_empleado extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('empleado_model');
			if(!$this->session->userdata('s_id'))
			{
				redirect('entrar');//iniciar/vlogin
			}
			else
			{
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
		            redirect('inicio_medico');
		        }
		        else if ($cuales=="2")
		        {
		            redirect('inicio_enfermera');
		        }
		        else if ($cuales=="1")
		        {
		            // redirect('inicio_empleado');
		        }
			}
		}
		function index(){
			$recibodatos=$this->empleado_model->consultar_estadisticas();
			$datos['cn']= array('agenda' => $recibodatos['agenda_hoy'],
							'paciente' => $recibodatos['paciente_hoy'],
							'visita' => $recibodatos['visita_hoy'],
							'cancelada' => $recibodatos['ca'],
							'e' => $recibodatos['estado']
							);
			$this->load->view('plantilla/header');
			$this->load->view('plantilla/menu_e');
			$this->load->view('principal/vinicio_empleado',$datos);
			$this->load->view('plantilla/footer');
		}
		function estadisticas_hoy(){
			$recibodatos=$this->agenda_model->consultar_estadisticas();
			echo json_encode($recibodatos);
		}
	}
?>