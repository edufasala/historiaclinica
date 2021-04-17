<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Medicamento extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('medicamento_model');
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
	            // redirect('inicio_enfermera');
	        }
	        else if ($cuales=="1")
	        {
	            redirect('inicio_empleado');
	        }
		}
		function index(){
			$cargo=$this->session->userdata('s_tipo');
			
            if($cargo=="3")
            {
                $aux="Administrador";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_m');
				$this->load->view('medicamentos/vregmedicamento');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="2")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_enf');
				$this->load->view('medicamentos/vregmedicamento');
				$this->load->view('plantilla/footer');
            }
			
		}
		function registrar(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");
			$datos['nombre']=$this->input->post('elnombre');
			$datos['lote']=$this->input->post('lote');
			$datos['registro_sanitario']=$this->input->post('registro');
			$datos['presentacion']=$this->input->post('presentacion');
			$datos['laboratorio']=$this->input->post('laboratorio');
			$datos['precio_compra']=$this->input->post('elpre');
			$datos['precio_venta']=$this->input->post('elprev');
			$datos['vencimiento']=$this->input->post('fchct');
			$datos['minimo']='0';//$this->input->post('eldeta');
			$datos['stock']='0';//$this->input->post('elnombre');
			$us=$this->session->userdata('s_id');
			$datos['created_user']=$us;
			$datos['updated_user']=$us;

			$this->medicamento_model->registrar_m($datos);

			echo json_encode($datos);//Validar si se guardo o no
		}
		function actualizar(){
			$datos['codigo']=$this->input->post('idmed');
			$datos['nombre']=$this->input->post('nombre');
			$datos['lote']=$this->input->post('lote');
			$datos['registro_sanitario']=$this->input->post('registro');
			$datos['presentacion']=$this->input->post('presentacion');
			$datos['laboratorio']=$this->input->post('laboratorio');
			$datos['precio_compra']=$this->input->post('uno');
			$datos['precio_venta']=$this->input->post('dos');
			$datos['vencimiento']=$this->input->post('fe');

			$rs=$this->medicamento_model->actualizar_m($datos);

			echo $rs;
		}
		function eliminar(){
			$dato=$this->input->post('id');
			
			$rs=$this->medicamento_model->eliminar_m($dato);
		}
	}
?>