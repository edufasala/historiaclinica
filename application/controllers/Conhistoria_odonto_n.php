<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Conhistoria_odonto_n extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('historia_odonto_n_model');
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
		function index(){			
			$this->load->view('plantilla/header');
			$this->load->view('plantilla/menu_m');
			$this->load->view('hclinica_odonto_n/vconhistoria_odonto_n');
			$this->load->view('plantilla/footer');
		}
		function buscar_nombres(){
			
			$busqueda=$this->input->post('quien');
			
			$datos=$this->historia_n_model->consultar_diagnostico_nombres($busqueda);
			echo json_encode($datos);
		}

		function buscar_nombres_hc_odonto_n(){
			$busqueda=$this->input->post('quien');
			$datos=$this->historia_odonto_n_model->consultar_hc_nombres_odonto_n($busqueda);
			echo json_encode($datos);
		}
		function mostrar_hc_pad_odonto_n(){
			$busqueda=$this->input->post('eldoc');
			$datos=$this->historia_odonto_n_model->consultar_historia_pad_odonto_n($busqueda);
			echo json_encode($datos);
		}
		function mostrar_hc_barthel(){
			$busqueda=$this->input->post('eldoc');
			$datos=$this->historia_n_model->consultar_historia_barthel($busqueda);
			echo json_encode($datos);
		}
		function mostrar_paciente_odonto_n(){
			$nom=$this->input->post('nomb');
			
			$datos=$this->historia_odonto_n_model->buscar_paciente_nombres_odonto2($nom);
			echo json_encode($datos);
		}
		function mostrar_paciente_registro_odonto_n(){
			$doc=$this->input->post('quien');
			
			$datos=$this->historia_odonto_n_model->buscar_registro_individual_odonto_n($doc);
			echo json_encode($datos);
		}
		function mostrar_paciente_registro_todos_odonto_n(){
			$doc=$this->input->post('quien');
			
			$datos=$this->historia_odonto_n_model->buscar_registros_paciente_odonto_n($doc);
			echo json_encode($datos);
		}
	}
?>