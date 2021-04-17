<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Conhistoria_odonto extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('historia_odonto_model');
			$cuales=$this->session->userdata('s_tipo');
	        if ($cuales=="5")
			{
			    //redirect('inicio_spadmin');
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
		function index(){			
			$this->load->view('plantilla/header');
			$this->load->view('plantilla/menu_s');
			$this->load->view('hclinica_odonto/vconhistoria_odonto');
			$this->load->view('plantilla/footer');
		}

		function buscar_nombres_hc_odonto(){
			$busqueda=$this->input->post('quien');
			$datos=$this->historia_odonto_model->consultar_hc_nombres_odonto($busqueda);
			echo json_encode($datos);
		}
		function mostrar_hc_pad_odonto(){
			$busqueda=$this->input->post('eldoc');
			$busqueda2=$this->input->post('fecha');
			$datos=$this->historia_odonto_model->consultar_historia_pad_odonto($busqueda,$busqueda2);
			echo json_encode($datos);
		}

		function mostrar_hc_barthel(){
			$busqueda=$this->input->post('eldoc');
			$busqueda2=$this->input->post('fecha');
			$datos=$this->historia_model->consultar_historia_barthel($busqueda,$busqueda2);
			echo json_encode($datos);
		}

		function mostrar_paciente_odonto(){
			$nom=$this->input->post('nomb');
			
			$datos=$this->historia_odonto_model->buscar_paciente_nombres_odonto($nom);
			echo json_encode($datos);
		}
		function mostrar_paciente_registro_odonto(){
			$doc=$this->input->post('quien');
			
			$datos=$this->historia_odonto_model->buscar_registro_individual_odonto($doc);
			echo json_encode($datos);
		}
		function mostrar_paciente_registro_todos_odonto(){
			$doc=$this->input->post('quien');
			
			$datos=$this->historia_odonto_model->buscar_registros_paciente_odonto($doc);
			echo json_encode($datos);
		}
		function mostrar_paciente_enfermedad_antecedentes(){
			$doc=$this->input->post('doc');
			
			$datos=$this->historia_model->buscar_registros_paciente_ea($doc);
			echo json_encode($datos);
		}
		function mostrar_paciente_enfermedad_antecedentesfh(){
			$doc=$this->input->post('doc');
			$ff=$this->input->post('fecha');
			$datos=$this->historia_model->buscar_registros_paciente_eafh($doc,$ff);
			echo json_encode($datos);
		}

	}
?>