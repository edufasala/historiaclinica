<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Conagenda extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('agenda_model');
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
             $recibodatos['cn']=$this->agenda_model->consultar_todos();
            if($cargo=="5")
            {
            	redirect('inicio_spadmin');
            }
            else if($cargo=="4")
            {
                $aux="Administrador";
			
				$this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_a');
				$this->load->view('agenda/vconcita',$recibodatos);
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="3")
            {
            	// redirect('inicio_medico');
            	$this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_m');
				$this->load->view('agenda/vconcitap',$recibodatos);
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="2")
            {
            	// redirect('inicio_enfermera');
            	$this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_enf');
				$this->load->view('agenda/vconcitap',$recibodatos);
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="1")
            {
                $aux="Usuario";			
				$this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_e');
				$this->load->view('agenda/vconcita',$recibodatos);
				$this->load->view('plantilla/footer');
            }
            
		}
		function buscar_nombres(){
			$busqueda=$this->input->post('quien');
			$datos=$this->agenda_model->consultar_cita_nombres($busqueda);
			echo json_encode($datos);
		}
		function mostrar(){
			// $busqueda=$this->input->post('buscar');
			
			$datos=$this->agenda_model->consultar_cita_todas();
			echo json_encode($datos);
		}
		function obtener_server_agenda(){
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna.$select;
			$losdatos=$this->agenda_model->consultar_separados_agenda($start,$length,$search,$orden_dir,$orden_columna);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['agendaid']=$row['id'];
				$array['agenda_nombres']=$row['agenda_nombres'];
				$array['agenda_tipo_cita']=$row['agenda_tipo_cita'];
				$array['agenda_f_cita']=$row['agenda_f_cita'];
				$array['agenda_h_cita']=$row['agenda_h_cita'];
				$array['agenda_celular']=$row['agenda_celular'];
				$array['agenda_nota_cita']=$row['agenda_nota_cita'];
				$array['agenda_estado_cita']=$row['agenda_estado_cita'];
				$array['pnombre_paciente']=ucwords($row['pnombre_paciente']);
				$array['snombre_paciente']=ucwords($row['snombre_paciente']);
				$array['papellido_paciente']=ucwords($row['papellido_paciente']);
				$array['sapellido_paciente']=ucwords($row['sapellido_paciente']);
				$array['registro_nombres']=ucwords($row['registro_nombres']);
				$array['registro_apellidos']=ucwords($row['registro_apellidos']);
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
		function obtener_server_agenda2(){
			$laff=$this->uri->segment(3);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna.$select;
			$losdatos=$this->agenda_model->consultar_separados_agenda2($start,$length,$search,$orden_dir,$orden_columna,$laff);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['agendaid']=$row['id'];
				$array['agenda_nombres']=$row['agenda_nombres'];
				$array['agenda_tipo_cita']=$row['agenda_tipo_cita'];
				$array['agenda_f_cita']=$row['agenda_f_cita'];
				$array['agenda_h_cita']=$row['agenda_h_cita'];
				$array['agenda_celular']=$row['agenda_celular'];
				$array['agenda_nota_cita']=$row['agenda_nota_cita'];
				$array['agenda_estado_cita']=$row['agenda_estado_cita'];
				$array['pnombre_paciente']=ucwords($row['pnombre_paciente']);
				$array['snombre_paciente']=ucwords($row['snombre_paciente']);
				$array['papellido_paciente']=ucwords($row['papellido_paciente']);
				$array['sapellido_paciente']=ucwords($row['sapellido_paciente']);
				$array['registro_nombres']=ucwords($row['registro_nombres']);
				$array['registro_apellidos']=ucwords($row['registro_apellidos']);
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
		function obtener_server_agenda_p(){
			$cargo=$this->session->userdata('s_id');
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna.$select;
			$losdatos=$this->agenda_model->consultar_separados_agenda_p($start,$length,$search,$orden_dir,$orden_columna,$cargo);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['agendaid']=$row['id'];
				$array['agenda_nombres']=$row['agenda_nombres'];
				$array['agenda_tipo_cita']=$row['agenda_tipo_cita'];
				$array['agenda_f_cita']=$row['agenda_f_cita'];
				$array['agenda_h_cita']=$row['agenda_h_cita'];
				$array['agenda_celular']=$row['agenda_celular'];
				$array['agenda_nota_cita']=$row['agenda_nota_cita'];
				$array['agenda_estado_cita']=$row['agenda_estado_cita'];
				$array['pnombre_paciente']=ucwords($row['pnombre_paciente']);
				$array['snombre_paciente']=ucwords($row['snombre_paciente']);
				$array['papellido_paciente']=ucwords($row['papellido_paciente']);
				$array['sapellido_paciente']=ucwords($row['sapellido_paciente']);
				$array['registro_nombres']=ucwords($row['registro_nombres']);
				$array['registro_apellidos']=ucwords($row['registro_apellidos']);
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
		function obtener_server_agenda_p2(){
			$laff=$this->uri->segment(3);
			$cargo=$this->session->userdata('s_id');
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna.$select;
			$losdatos=$this->agenda_model->consultar_separados_agenda_p2($start,$length,$search,$orden_dir,$orden_columna,$cargo,$laff);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['agendaid']=$row['id'];
				$array['agenda_nombres']=$row['agenda_nombres'];
				$array['agenda_tipo_cita']=$row['agenda_tipo_cita'];
				$array['agenda_f_cita']=$row['agenda_f_cita'];
				$array['agenda_h_cita']=$row['agenda_h_cita'];
				$array['agenda_celular']=$row['agenda_celular'];
				$array['agenda_nota_cita']=$row['agenda_nota_cita'];
				$array['agenda_estado_cita']=$row['agenda_estado_cita'];
				$array['pnombre_paciente']=ucwords($row['pnombre_paciente']);
				$array['snombre_paciente']=ucwords($row['snombre_paciente']);
				$array['papellido_paciente']=ucwords($row['papellido_paciente']);
				$array['sapellido_paciente']=ucwords($row['sapellido_paciente']);
				$array['registro_nombres']=ucwords($row['registro_nombres']);
				$array['registro_apellidos']=ucwords($row['registro_apellidos']);
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