<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Convisita extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('visita_model');
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
             $recibodatos['cn']=$this->visita_model->consultar_todos();
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
            	redirect('inicio_medico');
            }
            else if($cargo=="2")
            {
                $aux="Usuario";			
				$this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_enf');
				$this->load->view('visita/vconvisita',$recibodatos);
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="1")
            {
            	redirect('inicio_empleado');
            }
		}
		function buscar_nombres(){
			$busqueda=$this->input->post('quien');
			$datos=$this->visita_model->consultar_cita_nombres($busqueda);
			echo json_encode($datos);
		}
		function mostrar(){
			// $busqueda=$this->input->post('buscar');
			
			$datos=$this->visita_model->consultar_cita_todas();
			echo json_encode($datos);
		}
		function obtener_server_visitas(){
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna;
			$losdatos=$this->visita_model->consultar_separados_visitas($start,$length,$search,$orden_dir,$orden_columna);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['doc_paciente']=$row['doc_paciente'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['visita_f_visita']=$row['visita_f_visita'];
				$array['visita_h_visita']=$row['visita_h_visita'];
				$array['visita_control_liquidos']=$row['visita_control_liquidos'];
				$array['visita_fc']=$row['visita_fc'];
				$array['visita_fr']=$row['visita_fr'];
				$array['visita_t']=$row['visita_t'];
				$array['visita_ta']=$row['visita_ta'];
				$array['visita_saturacion']=$row['visita_saturacion'];
				$array['visita_glucometria']=$row['visita_glucometria'];
				$array['visita_nota']=$row['visita_nota'];
				$array['visita_f_reg']=$row['visita_f_reg'];
				$array['visita_h_reg']=$row['visita_h_reg'];
				$array['inclusion_pad_paciente']=$row['inclusion_pad_paciente'];
				$array['id_visita']=$row['id_visita'];
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
		function mostrar_visita(){
			$busqueda=$this->input->post('id');
			$datos=$this->visita_model->consultar_visita($busqueda);
			echo json_encode($datos);
		}
	}
?>