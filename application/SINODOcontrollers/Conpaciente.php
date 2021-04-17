<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Conpaciente extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('paciente_model');
		}
		function index(){
			$cargo=$this->session->userdata('s_tipo');
            $aux="";
			$recibodatos['cn']=$this->paciente_model->consultar_todos();
            if($cargo=="5")
            {
            	redirect('inicio_spadmin');
            }
            else if($cargo=="4")
            {
                $aux="Administrador";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_a');
				$this->load->view('paciente/vconpaciente',$recibodatos);
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="3")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_m');
				$this->load->view('paciente/vconpaciente',$recibodatos);
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="2")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_enf');
				$this->load->view('paciente/vconpaciente',$recibodatos);
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="1")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_e');
				$this->load->view('paciente/vconpaciente',$recibodatos);
				$this->load->view('plantilla/footer');
            }		
		}
		function buscar_nombres(){
			$busqueda=$this->input->post('quien');
			$datos=$this->paciente_model->consultar_paciente_nombres($busqueda);
			echo json_encode($datos);
		}
		function mostrar(){
			
			$datos=$this->paciente_model->consultar_paciente_todos();
			echo json_encode($datos);
		}
		function obtener_server_pacientes(){
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna;
			$losdatos=$this->paciente_model->consultar_separados_paciente($start,$length,$search,$orden_dir,$orden_columna);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_paciente']=$row['id_paciente'];
				$array['tipo_doc_paciente']=$row['tipo_doc_paciente'];
				$array['doc_paciente']=$row['doc_paciente'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['snombre_paciente']=$row['snombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['sapellido_paciente']=$row['sapellido_paciente'];
				$array['lugar_nacimiento_paciente']=$row['lugar_nacimiento_paciente'];
				$array['f_nacimiento_paciente']=$row['f_nacimiento_paciente'];
				$array['tipo_vinculacion_paciente']=$row['tipo_vinculacion_paciente'];
				$array['tipo_afiliado_paciente']=$row['tipo_afiliado_paciente'];
				$array['aseguradora_paciente']=$row['aseguradora_paciente'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				$array['direccion_paciente']=$row['direccion_paciente'];
				$array['barrio_paciente']=$row['barrio_paciente'];
				$array['municipio_paciente']=$row['municipio_paciente'];
				$array['tel_fijo_paciente']=$row['tel_fijo_paciente'];
				$array['tel_celular_paciente']=$row['tel_celular_paciente'];
				$array['ocupacion_paciente']=$row['ocupacion_paciente'];
				$array['religion_paciente']=$row['religion_paciente'];
				$array['estado_civil_paciente']=$row['estado_civil_paciente'];
				$array['nom_cuidador_paciente']=$row['nom_cuidador_paciente'];
				$array['tel_cuidador_paciente']=$row['tel_cuidador_paciente'];
				$array['nom_responsable_paciente']=$row['nom_responsable_paciente'];
				$array['tel_responsable_paciente']=$row['tel_responsable_paciente'];
				$array['parentezco_responsable_paciente']=$row['parentezco_responsable_paciente'];
				$array['motivo_inclusion_paciente']=$row['motivo_inclusion_paciente'];
				$array['lugar_valoracion_paciente']=$row['lugar_valoracion_paciente'];
				$array['f_vinculacion_paciente']=$row['f_vinculacion_paciente'];
				$array['h_vinculacion_paciente']=$row['h_vinculacion_paciente'];
				$array['inclusion_pad_paciente']=$row['inclusion_pad_paciente'];
				$array['estado_paciente']=$row['estado_paciente'];
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
	
	}
?>