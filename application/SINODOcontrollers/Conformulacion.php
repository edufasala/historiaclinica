<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Conformulacion extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('formulacion_model');
			if(!$this->session->userdata('s_id'))
			{
				redirect('entrar');
			}
			else
			{
				
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
				$this->load->view('formulacion/vconformulacion');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="2")
            {
                $aux="Usuario";			
				// redirect('inicio_enfermera');
				$this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_enf');
				$this->load->view('formulacion/vconformulacion');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="1")
            {
            	redirect('inicio_empleado');
            }
		}
		function buscar_nombres(){
			$busqueda=$this->input->post('quien');
			$datos=$this->formulacion_model->consultar_cita_nombres($busqueda);
			echo json_encode($datos);
		}
		function mostrar(){
			// $busqueda=$this->input->post('buscar');
			
			$datos=$this->formulacion_model->consultar_cita_todas();
			echo json_encode($datos);
		}
		function obtener_server_f_particular(){
			$doc=$this->uri->segment(3);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna;
			$losdatos=$this->formulacion_model->consultar_separados_f($start,$length,$search,$orden_dir,$orden_columna,$doc);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['doc_paciente']=$row['doc_paciente'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['formulacion_lista']=$row['formulacion_lista'];
				$array['formulacion_f_v']=$row['formulacion_f_v'];
				$array['formulacion_f_reg']=$row['formulacion_f_reg'];
				$array['formulacion_h_reg']=$row['formulacion_h_reg'];
				$array['inclusion_pad_paciente']=$row['inclusion_pad_paciente'];
				$array['id']=$row['id'];
				$array['formulacion_created_user']=$row['formulacion_created_user'];
				$array['formulacion_radicacion']=$row['formulacion_radicacion'];
				// $array['pad_medicamentos']=$row['pad_medicamentos'];
				// $array['hc_pad_cod']=$row['hc_pad_cod'];
				// $array['']=$row[''];
				// $array['']=$row[''];
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
		function obtener_server_f_hc(){
			$doc=$this->uri->segment(3);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna;
			$losdatos=$this->formulacion_model->consultar_separados_f_2($start,$length,$search,$orden_dir,$orden_columna,$doc);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['doc_paciente']=$row['doc_paciente'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				// $array['formulacion_lista']=$row['formulacion_lista'];
				// $array['formulacion_f_v']=$row['formulacion_f_v'];
				$array['pad_f_reg']=$row['pad_f_reg'];
				$array['pad_h_reg']=$row['pad_h_reg'];
				$array['inclusion_pad_paciente']=$row['inclusion_pad_paciente'];
				$array['id_hc_pad']=$row['id_hc_pad'];
				// $array['id']=$row['id'];
				// $array['formulacion_created_user']=$row['formulacion_created_user'];
				// $array['formulacion_radicacion']=$row['formulacion_radicacion'];
				$array['pad_medicamentos']=$row['pad_medicamentos'];
				$array['hc_pad_cod']=$row['hc_pad_cod'];
				$array['pad_created_user']=$row['pad_created_user'];
				// $array['']=$row[''];
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
		function mostrar_f(){
			$busqueda=$this->input->post('id');
			$datos=$this->formulacion_model->consultar_f($busqueda);
			echo json_encode($datos);
		}
		function buscar_nombres_medicamentos(){
			$busqueda=$this->input->post('quien');
			
			$datos=$this->formulacion_model->consultar_medicamentos_nombres($busqueda);
			echo json_encode($datos);
		}
	}
?>