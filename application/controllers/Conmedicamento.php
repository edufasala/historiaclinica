<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Conmedicamento extends CI_Controller {
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
            $aux="";
            if($cargo=="3")
            {
                $aux="Administrador";
			
				$this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_m');
				$this->load->view('medicamentos/vconmedicamento');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="2")
            {
                $aux="Usuario";
			
				$this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_enf');
				$this->load->view('medicamentos/vconmedicamento');
				$this->load->view('plantilla/footer');
            }
			
		}
		function mostrar(){

			$busqueda=$this->input->post('buscar');
			
			$datos=$this->empleado_model->consultar_empleado($busqueda);
			echo json_encode($datos);
		}
		function obtener_server_md(){
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna;
			$losdatos=$this->medicamento_model->consultar_separados_md($start,$length,$search,$orden_dir,$orden_columna);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id']=$row['id'];
				$array['codigo']=$row['codigo'];
				$array['nombre']=$row['nombre'];
				$array['lote']=$row['lote'];
				$array['registro_sanitario']=$row['registro_sanitario'];
				$array['laboratorio']=$row['laboratorio'];
				$array['precio_compra']=$row['precio_compra'];
				$array['precio_venta']=$row['precio_venta'];
				$array['presentacion']=$row['presentacion'];
				$array['vencimiento']=$row['vencimiento'];
				$array['minimo']=$row['minimo'];
				$array['stock']=$row['stock'];
				$resultado[]=$array;
			}

			$totalData=$datos->num_rows();

			$json_data=array(
				"draw"=>intval($this->input->post('draw')),
				"recordsTotal"=>intval($totalData),
				"recordsFiltered"=>intval($total),
				"data"=>$resultado,
				);
			echo json_encode($json_data);
		}
		function buscar_nombres(){
			
			$busqueda=$this->input->post('quien');
			
			$datos=$this->medicamento_model->consultar_medicamento_nombres($busqueda);
			echo json_encode($datos);
		}
		function buscar_todos(){			
			// $busqueda=$this->input->post('quien');
			
			$datos=$this->medicamento_model->consultar_medicamento_todos();
			echo json_encode($datos);
		}
	}
?>