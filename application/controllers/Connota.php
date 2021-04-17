<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Connota extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('nota_model');
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
				$this->load->view('nota/vconnota');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="2")
            {
                $aux="Usuario";			
				redirect('inicio_enfermera');
            }
            else if($cargo=="1")
            {
            	redirect('inicio_empleado');
            }
		}
		function buscar_nombres(){
			$busqueda=$this->input->post('quien');
			$datos=$this->nota_model->consultar_cita_nombres($busqueda);
			echo json_encode($datos);
		}
		function mostrar(){
			// $busqueda=$this->input->post('buscar');
			
			$datos=$this->nota_model->consultar_cita_todas();
			echo json_encode($datos);
		}
		function obtener_server_notas(){
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna;
			$losdatos=$this->nota_model->consultar_separados_notas($start,$length,$search,$orden_dir,$orden_columna);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['doc_paciente']=$row['doc_paciente'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['nota_f_nota']=$row['nota_f_nota'];
				$array['nota_h_nota']=$row['nota_h_nota'];
				$array['nota_nota']=$row['nota_nota'];
				$array['nota_f_reg']=$row['nota_f_reg'];
				$array['nota_h_reg']=$row['nota_h_reg'];
				$array['inclusion_pad_paciente']=$row['inclusion_pad_paciente'];
				$array['id_nota']=$row['id_nota'];
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
		function mostrar_nota(){
			$busqueda=$this->input->post('id');
			$datos=$this->nota_model->consultar_nota($busqueda);
			echo json_encode($datos);
		}
	}
?>