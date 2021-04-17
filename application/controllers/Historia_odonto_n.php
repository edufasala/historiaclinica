<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Historia_odonto_n extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('historia_odonto_n_model');
			$cuales=$this->session->userdata('s_tipo');
	        if ($cuales=="5")
	        {
	            //redirect('inicio_spadmin');
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
		function index(){
			$this->load->view('plantilla/header');
			$this->load->view('plantilla/menu_s');
			$this->load->view('hclinica_odonto_n/vreghistoria_odonto_n');
			$this->load->view('plantilla/footer');
		}
		function registrar_pad_odonto_n(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");

			$datos['visita_tipo_tratamiento']=$this->input->post('motivopadhc');
			$cuales=$this->session->userdata('s_id');
			$datos['visita_doc']=$this->input->post('numhc');
			$datos['visita_f_visita']=$this->input->post('vfchct');
			$datos['visita_h_visita']=$this->input->post('vlahr');
			$datos['visita_nota']=$this->input->post('mconsutaodontov');	
			$datos['visita_f_reg']=$getfecha;
			$datos['visita_h_reg']=$gethora;			
			$datos['visita_h_inicio']=$this->input->post('fechai');	
			$datos['visita_created_user']=$cuales;
			$datos['visita_update_user']=$cuales;	
			
			$rs=$this->historia_odonto_n_model->registrar_historiapad_odonto_n($datos);
			echo $rs;
		}
		function actualizar_pad_odonto_n(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");

			$cuales=$this->session->userdata('s_id');
			$datos['id_creado_odontov']=$this->input->post('numhc');

			$datos['visita_tipo_tratamiento']=$this->input->post('motivopadhc');
			$datos['visita_f_visita']=$this->input->post('vfchct');
			$datos['visita_h_visita']=$this->input->post('vlahr');
			$datos['visita_nota']=$this->input->post('mconsutaodontov');			
			$datos['visita_f_reg']=$getfecha;
			$datos['visita_h_reg']=$gethora;			
			$datos['visita_h_inicio']=$this->input->post('fechai');	
			$datos['visita_created_user']=$cuales;
			$datos['visita_update_user']=$cuales;	
			// $datos['pad_quien_creo']=$this->input->post('nmedpad');
			
			$rs=$this->historia_odonto_n_model->actualizar_historiapad_odonto_n($datos);
			echo $rs;
		}
		function registrar_barthel(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");
			$cuales=$this->session->userdata('s_id');
			$datos['barthel_doc']=$this->input->post('numhc3');
			$datos['barthel_comer']=$this->input->post('auxbtcomer');
			$datos['barthel_banarse']=$this->input->post('auxbtbanarse');
			$datos['barthel_vestirse']=$this->input->post('auxbtvestirse');
			$datos['barthel_arreglarse']=$this->input->post('auxbtarreglarse');
			$datos['barthel_deposicion']=$this->input->post('auxbtdeposicion');
			$datos['barthel_miccion']=$this->input->post('auxbtmiccion');
			$datos['barthel_retrete']=$this->input->post('auxbtretrete');
			$datos['barthel_traslado']=$this->input->post('auxbttraslado');
			$datos['barthel_deambulacion']=$this->input->post('auxbtdeambulacion');
			$datos['barthel_escaleras']=$this->input->post('auxbtescaleras');
			$datos['barthel_total']=$this->input->post('bttotal');
			$datos['barthel_nivel']=$this->input->post('btnivel');
			$datos['barthel_f_reg']=$getfecha;
			$datos['barthel_h_reg']=$gethora;
			$datos['barthel_created_user']=$cuales;
			$datos['barthel_update_user']=$cuales;
			$datos['barthel_h_inicio']=$this->input->post('fechai3');

			$rs=$this->historia_n_model->registrar_historiabarthel($datos);
			echo $rs;
		}
		function actualizar_barthel(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");
 			$cuales=$this->session->userdata('s_id');
			$datos['barthel_doc']=$this->input->post('numhc3');
			$datos['barthel_comer']=$this->input->post('auxbtcomer');
			$datos['barthel_banarse']=$this->input->post('auxbtbanarse');
			$datos['barthel_vestirse']=$this->input->post('auxbtvestirse');
			$datos['barthel_arreglarse']=$this->input->post('auxbtarreglarse');
			$datos['barthel_deposicion']=$this->input->post('auxbtdeposicion');
			$datos['barthel_miccion']=$this->input->post('auxbtmiccion');
			$datos['barthel_retrete']=$this->input->post('auxbtretrete');
			$datos['barthel_traslado']=$this->input->post('auxbttraslado');
			$datos['barthel_deambulacion']=$this->input->post('auxbtdeambulacion');
			$datos['barthel_escaleras']=$this->input->post('auxbtescaleras');
			$datos['barthel_total']=$this->input->post('bttotal');
			$datos['barthel_nivel']=$this->input->post('btnivel');
			$datos['barthel_f_reg']=$getfecha;
			$datos['barthel_h_reg']=$gethora;
			$datos['barthel_created_user']=$cuales;
			$datos['barthel_update_user']=$cuales;

			$rs=$this->historia_n_model->actualizar_historiabarthel($datos);
			echo $rs;
		}

		function mostrar_paciente_odonto_n(){
			$nom=$this->input->post('nomb');			
			$datos=$this->historia_odonto_n_model->buscar_paciente_nombres_odonto_n($nom);
			echo json_encode($datos);
		}
		
		function editar_motivo(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");
 			$cuales=$this->session->userdata('s_id');
			$datos['doc_paciente']=$this->input->post('doc');
			$datos['inclusion_pad_paciente']=$this->input->post('fecha');
			// $datos['braden_created_user']=$cuales;
			$datos['update_user']=$cuales;
			// $datos['braden_h_inicio']=$this->input->post('fechai6');

			$rs=$this->historia_n_model->cambios_motivo($datos);
			echo $rs;
		}
	}
?>