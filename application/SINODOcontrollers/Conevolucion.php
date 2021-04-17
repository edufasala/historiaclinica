<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Conevolucion extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('evolucion_model');
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
			$recibodatos['cn']=$this->evolucion_model->consultar_todas();
			
			$this->load->view('plantilla/header');
			$this->load->view('plantilla/menu_m');
			$this->load->view('emedica/vconevolucion',$recibodatos);
			$this->load->view('plantilla/footer');
		}
		function buscar_nombres(){
			
			$busqueda=$this->input->post('quien');
			
			$datos=$this->evolucion_model->consultar_diagnostico_nombres($busqueda);
			echo json_encode($datos);
		}
		function buscar_nombres2(){
			
			$busqueda=$this->input->post('quien');
			
			$datos=$this->evolucion_model->consultar_medicamentos_nombres($busqueda);
			echo json_encode($datos);
		}
		function obtener_server_ev(){
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna;
			$losdatos=$this->evolucion_model->consultar_separados_ev($start,$length,$search,$orden_dir,$orden_columna);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_ev']=$row['id_ev'];
				$array['doc_paciente']=$row['doc_paciente'];
				$array['tipo_doc_paciente']=$row['tipo_doc_paciente'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['inclusion_pad_paciente']=$row['inclusion_pad_paciente'];
				$array['evolucion_motivo_consulta']=$row['evolucion_motivo_consulta'];
				$array['evolucion_f_reg']=$row['evolucion_f_reg'];
				$array['evolucion_h_reg']=$row['evolucion_h_reg'];
				$array['evolucion_enfermedad_actual']=$row['evolucion_enfermedad_actual'];
				$array['evolucion_a_personales']=$row['evolucion_a_personales'];
				$array['evolucion_a_familiares']=$row['evolucion_a_familiares'];
				$array['evolucion_revision_sistema']=$row['evolucion_revision_sistema'];
				$array['evolucion_satur']=$row['evolucion_satur'];
				$array['evolucion_glucom']=$row['evolucion_glucom'];
				$array['evolucion_fr']=$row['evolucion_fr'];
				$array['evolucion_fc']=$row['evolucion_fc'];
				$array['evolucion_temperatura']=$row['evolucion_temperatura'];
				$array['evolucion_tension_arterial']=$row['evolucion_tension_arterial'];
				$array['evolucion_descripcion_examen']=$row['evolucion_descripcion_examen'];
				$array['evolucion_diagnosticos']=$row['evolucion_diagnosticos'];
				$array['evolucion_otros_diagnosticos']=$row['evolucion_otros_diagnosticos'];
				$array['evolucion_analisis']=$row['evolucion_analisis'];
				$array['evolucion_plan']=$row['evolucion_plan'];
				$array['evolucion_pad']=$row['evolucion_pad'];
				$array['evolucion_farmacos']=$row['evolucion_farmacos'];
				$array['evolucion_mj_fisica']=$row['evolucion_mj_fisica'];
				$array['evolucion_mj_lenguaje']=$row['evolucion_mj_lenguaje'];
				$array['evolucion_mj_ocupacional']=$row['evolucion_mj_ocupacional'];
				$array['evolucion_mj_respiratoria']=$row['evolucion_mj_respiratoria'];
				$array['evolucion_mj_nutricion']=$row['evolucion_mj_nutricion'];
				$array['evolucion_mj_social']=$row['evolucion_mj_social'];
				$array['evolucion_mj_psicologia']=$row['evolucion_mj_psicologia'];
				$array['evolucion_mj_enfermeria']=$row['evolucion_mj_enfermeria'];
				$array['evolucion_paraclinicos']=$row['evolucion_paraclinicos'];
				$array['evolucion_valoraciones']=$row['evolucion_valoraciones'];
				$array['evolucion_insumos']=$row['evolucion_insumos'];
				$array['evolucion_recomendaciones']=$row['evolucion_recomendaciones'];
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
		function mostrar_evolucion(){
			$busqueda=$this->input->post('id');
			$datos=$this->evolucion_model->consultar_evolucion($busqueda);
			echo json_encode($datos);
		}
	}
?>