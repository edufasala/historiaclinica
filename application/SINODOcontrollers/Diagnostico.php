<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Diagnostico extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('diagnostico_model');
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
			$cargo=$this->session->userdata('s_tipo');
			
            if($cargo=="3")
            {
            	$this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_m');
				$this->load->view('cie/vconcie');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="2")
            {
            	$this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_enf');
				$this->load->view('medicamentos/vregmedicamento');
				$this->load->view('plantilla/footer');
            }
			
		}
		function obtener_server(){
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna;
			$losdatos=$this->diagnostico_model->consultar_separados($start,$length,$search,$orden_dir,$orden_columna);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['codigo_cie']=$row['codigo_cie'];
				$array['descripcion_cie']=$row['descripcion_cie'];
				$array['cod_desc_cie']=$row['cod_desc_cie'];
				$resultado[]=$array;
			}

			$totalData=$datos->num_rows();

			$json_data=array(
				"draw"=>intval($this->input->post('draw')),
				"recordsTotal"=>intval($totalData),
				"recordsFiltered"=>intval($total),
				"data"=>$resultado,
				// order[0][column]:
				);
			// echo $resultado;
			// echo json_encode($datos->result());
			echo json_encode($json_data);
		}
		function registrar(){
			$datos['codigo_cie']=$this->input->post('codig');
			$datos['descripcion_cie']=$this->input->post('nombdig');
			$c=$this->input->post('codig');
			$d=$this->input->post('nombdig');
			$datos['cod_desc_cie']=$d.' '.strtoupper($c);
			$rs=$this->diagnostico_model->registrar_diagnostico($datos);
			// echo json_encode($datos);
			echo $rs;
			// echo $p;
		}
		function actualizar(){
			$datos['codigo_cie']=$this->input->post('elid');
			$datos['descripcion_cie']=$this->input->post('ndig');
			$c=$this->input->post('elid');
			$d=$this->input->post('ndig');
			$datos['cod_desc_cie']=$d.' '.$c;
			$rs=$this->diagnostico_model->actualizar_diagnostico($datos);
			// echo json_encode($datos);
			echo $rs;
			// echo $p;
		}
	}
?>