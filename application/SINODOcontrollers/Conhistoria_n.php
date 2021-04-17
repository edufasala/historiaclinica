<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Conhistoria_n extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('historia_n_model');
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
			$this->load->view('hclinica_n/vconhistoria');
			$this->load->view('plantilla/footer');
		}
		function buscar_nombres(){
			
			$busqueda=$this->input->post('quien');
			
			$datos=$this->historia_n_model->consultar_diagnostico_nombres($busqueda);
			echo json_encode($datos);
		}
		function buscar_nombres_medicamentos(){
			$busqueda=$this->input->post('quien');
			
			$datos=$this->historia_n_model->consultar_medicamentos_nombres($busqueda);
			echo json_encode($datos);
		}
		function buscar_nombres_hc(){
			$busqueda=$this->input->post('quien');
			$datos=$this->historia_n_model->consultar_hc_nombres($busqueda);
			echo json_encode($datos);
		}
		function mostrar_hc_pad(){
			$busqueda=$this->input->post('eldoc');
			$datos=$this->historia_n_model->consultar_historia_pad($busqueda);
			echo json_encode($datos);
		}
		function mostrar_hc_concentimiento(){
			$busqueda=$this->input->post('eldoc');
			$datos=$this->historia_n_model->consultar_historia_concentimiento($busqueda);
			echo json_encode($datos);
		}
		function mostrar_hc_barthel(){
			$busqueda=$this->input->post('eldoc');
			$datos=$this->historia_n_model->consultar_historia_barthel($busqueda);
			echo json_encode($datos);
		}
		function mostrar_hc_valoracion(){
			$busqueda=$this->input->post('eldoc');
			$datos=$this->historia_n_model->consultar_historia_valoracion($busqueda);
			echo json_encode($datos);
		}
		function mostrar_hc_norton(){
			$busqueda=$this->input->post('eldoc');
			$datos=$this->historia_n_model->consultar_historia_norton($busqueda);
			echo json_encode($datos);
		}
		function mostrar_hc_braden(){
			$busqueda=$this->input->post('eldoc');
			$datos=$this->historia_n_model->consultar_historia_braden($busqueda);
			echo json_encode($datos);
		}
		function buscar_diagnostico(){
			$busqueda=$this->input->post('quien');
			$datos=$this->historia_n_model->consultar_diagnostico_individual($busqueda);
			echo json_encode($datos);
		}
		function mostrar_paciente(){
			$nom=$this->input->post('nomb');
			
			$datos=$this->historia_n_model->buscar_paciente_nombres2($nom);
			echo json_encode($datos);
		}
		function mostrar_paciente_registro(){
			$doc=$this->input->post('quien');
			
			$datos=$this->historia_n_model->buscar_registro_individual($doc);
			echo json_encode($datos);
		}
		function mostrar_paciente_registro_todos(){
			$doc=$this->input->post('quien');
			
			$datos=$this->historia_n_model->buscar_registros_paciente($doc);
			echo json_encode($datos);
		}
	}
?>