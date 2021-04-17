<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Conhistoria extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('historia_model');
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
			$this->load->view('hclinica/vconhistoria');
			$this->load->view('plantilla/footer');
		}
		function buscar_nombres(){
			
			$busqueda=$this->input->post('quien');
			
			$datos=$this->historia_model->consultar_diagnostico_nombres($busqueda);
			echo json_encode($datos);
		}
		function buscar_nombres_medicamentos(){
			$busqueda=$this->input->post('quien');
			
			$datos=$this->historia_model->consultar_medicamentos_nombres($busqueda);
			echo json_encode($datos);
		}
		function buscar_nombres_hc(){
			$busqueda=$this->input->post('quien');
			$datos=$this->historia_model->consultar_hc_nombres($busqueda);
			echo json_encode($datos);
		}
		function mostrar_hc_pad(){
			$busqueda=$this->input->post('eldoc');
			$busqueda2=$this->input->post('fecha');
			$datos=$this->historia_model->consultar_historia_pad($busqueda,$busqueda2);
			echo json_encode($datos);
		}
		function mostrar_hc_concentimiento(){
			$busqueda=$this->input->post('eldoc');
			$datos=$this->historia_model->consultar_historia_concentimiento($busqueda);
			echo json_encode($datos);
		}
		function mostrar_hc_barthel(){
			$busqueda=$this->input->post('eldoc');
			$busqueda2=$this->input->post('fecha');
			$datos=$this->historia_model->consultar_historia_barthel($busqueda,$busqueda2);
			echo json_encode($datos);
		}
		function mostrar_hc_valoracion(){
			$busqueda=$this->input->post('eldoc');
			$busqueda2=$this->input->post('fecha');
			$datos=$this->historia_model->consultar_historia_valoracion($busqueda,$busqueda2);
			echo json_encode($datos);
		}
		function mostrar_hc_norton(){
			$busqueda=$this->input->post('eldoc');
			$busqueda2=$this->input->post('fecha');
			$datos=$this->historia_model->consultar_historia_norton($busqueda,$busqueda2);
			echo json_encode($datos);
		}
		function mostrar_hc_braden(){
			$busqueda=$this->input->post('eldoc');
			$busqueda2=$this->input->post('fecha');
			$datos=$this->historia_model->consultar_historia_braden($busqueda,$busqueda2);
			echo json_encode($datos);
		}
		function buscar_diagnostico(){
			$busqueda=$this->input->post('quien');
			$datos=$this->historia_model->consultar_diagnostico_individual($busqueda);
			echo json_encode($datos);
		}
		function mostrar_paciente(){
			$nom=$this->input->post('nomb');
			
			$datos=$this->historia_model->buscar_paciente_nombres2($nom);
			echo json_encode($datos);
		}
		function mostrar_paciente_registro(){
			$doc=$this->input->post('quien');
			
			$datos=$this->historia_model->buscar_registro_individual($doc);
			echo json_encode($datos);
		}
		function mostrar_paciente_registro_todos(){
			$doc=$this->input->post('quien');
			
			$datos=$this->historia_model->buscar_registros_paciente($doc);
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
		function mostrar_paciente_listado_medicamentos(){
			$doc=$this->input->post('doc');
			
			$datos=$this->historia_model->buscar_registros_paciente_tdmd($doc);
			echo json_encode($datos);
		}
		function mostrar_paciente_listado_medicamentosfh(){
			$doc=$this->input->post('doc');
			$ff=$this->input->post('fecha');
			$datos=$this->historia_model->buscar_registros_paciente_tdmdfh($doc,$ff);
			echo json_encode($datos);
		}
		function mostrar_paciente_listado_diagnosticos(){
			$doc=$this->input->post('doc');
			
			$datos=$this->historia_model->buscar_registros_paciente_tddgs($doc);
			echo json_encode($datos);
		}
		function mostrar_paciente_listado_diagnosticosfh(){
			$doc=$this->input->post('doc');
			$ff=$this->input->post('fecha');
			$datos=$this->historia_model->buscar_registros_paciente_tddgsfh($doc,$ff);
			echo json_encode($datos);
		}

		//consulta
		function mostrar_hc_pad_enf(){
			$busqueda=$this->input->post('eldoc');
			$busqueda2=$this->input->post('fecha');
			$datos=$this->historia_model->consultar_historia_pad_enf($busqueda,$busqueda2);
			echo json_encode($datos);
		}
		function mostrar_hc_valoracion_enf(){
			$busqueda=$this->input->post('eldoc');
			$busqueda2=$this->input->post('fecha');
			$datos=$this->historia_model->consultar_historia_valoracion_enf($busqueda,$busqueda2);
			echo json_encode($datos);
		}
		function mostrar_hc_escala_enf(){
			$busqueda=$this->input->post('eldoc');
			$busqueda2=$this->input->post('fecha');
			$datos=$this->historia_model->consultar_historia_escala_enf($busqueda,$busqueda2);
			echo json_encode($datos);
		}
		function mostrar_hc_intervencion_enf(){
			$busqueda=$this->input->post('eldoc');
			$busqueda2=$this->input->post('fecha');
			$datos=$this->historia_model->consultar_historia_intervencion_enf($busqueda,$busqueda2);
			echo json_encode($datos);
		}
	}
?>