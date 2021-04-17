<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Conadministrador extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('administrador_model');
			$cuales=$this->session->userdata('s_tipo');
	        if ($cuales=="5")
			{
			    // redirect('inicio_spadmin');
			}
			else if ($cuales=="4")
			{
			    redirect('inicio_admin');
			}
			else if ($cuales=="3")
			{
			    redirect('inicio_medico');
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
		function administrador(){
			$this->load->view('plantilla/header');
			$this->load->view('plantilla/menu_s');
			$this->load->view('administrador/vconadministrador');
			$this->load->view('plantilla/footer');
		}
		
		function obtener_server_administrador(){
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna.$select;
			$losdatos=$this->administrador_model->consultar_separados_administrador($start,$length,$search,$orden_dir,$orden_columna);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id']=$row['id'];
				$array['id_registro_usuario']=$row['id_registro_usuario'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_f_nacimiento']=$row['registro_f_nacimiento'];
				$array['registro_edad']=$row['registro_edad'];
				$array['registro_celular']=$row['registro_celular'];
				$array['registro_sexo']=$row['registro_sexo'];
				$array['registro_img']=$row['registro_img'];
				$array['registro_tipo']=$row['registro_tipo'];
				$array['registro_estado']=$row['registro_estado'];
				// $array['pad_f_reg']=$row['pad_f_reg'];
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