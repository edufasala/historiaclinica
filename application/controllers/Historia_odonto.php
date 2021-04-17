<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Historia_odonto extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('historia_odonto_model');
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
			$this->load->view('hclinica_odonto/vreghistoria_odonto');
			$this->load->view('plantilla/footer');
		}
		function registrar_pad_odonto(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");

			$datos['evolucion_tipo_tratamiento']=$this->input->post('motivopadhc');
			$cuales=$this->session->userdata('s_id');

			$datos['evolucion_doc']=$this->input->post('numhc');
			$datos['evolucion_motivo_consulta']=$this->input->post('mconsutaodonto');
			$datos['evolucion_enfermedad_actual']=$this->input->post('enfactualodonto');
			$datos['evolucion_t_medico']=$this->input->post('auxbttratame');
			$datos['evolucion_i_alimentos']=$this->input->post('auxbtingestion');
			$datos['evolucion_r_alergicas']=$this->input->post('auxbtalergica');
			$datos['evolucion_anestecia']=$this->input->post('auxbtanestesia');
			$datos['evolucion_antibiotico']=$this->input->post('auxbtantibiotico');
			$datos['evolucion_hemorragias']=$this->input->post('auxbthemorragia');
			$datos['evolucion_irradiaciones']=$this->input->post('auxbtradiacion');
			$datos['evolucion_enf_respiratoria']=$this->input->post('auxbtrespira');
			$datos['evolucion_cardiopatias']=$this->input->post('auxbtcardio');
			$datos['evolucion_artritis']=$this->input->post('auxbtartritis');
			$datos['evolucion_terapia']=$this->input->post('auxbtcoagulante');			
			$datos['evolucion_hepatitis']=$this->input->post('auxbthepatitis');
			$datos['evolucion_embarazo']=$this->input->post('auxbtembarazo');
			$datos['evolucion_enf_renal']=$this->input->post('auxbtrenal');
			$datos['evolucion_gastro']=$this->input->post('auxbtgastro');
			$datos['evolucion_ante_quirurgicos']=$this->input->post('auxbtquirurgico');
			$datos['evolucion_osteo']=$this->input->post('auxbtosteo');
			$datos['evolucion_otros']=$this->input->post('odontootros');
			$datos['evolucion_observa']=$this->input->post('odontoobservaciones');			
			$datos['evolucion_cepillado']=$this->input->post('ocepillado');
			$datos['evolucion_cepillado_obs']=$this->input->post('ocepillado');
			$datos['evolucion_crema']=$this->input->post('ocrema');
			$datos['evolucion_crema_obs']=$this->input->post('ocrema');
			$datos['evolucion_normalidad']=$this->input->post('onormal');
			$datos['evolucion_normalidad_obs']=$this->input->post('onormal');
			$datos['evolucion_bebida_frecu']=$this->input->post('oazucarada');
			$datos['evolucion_bebida_ocasion']=$this->input->post('oazucarada');
			$datos['evolucion_masas_no_azucar_frec']=$this->input->post('omasasa');
			$datos['evolucion_masas_no_azucar_ocasion']=$this->input->post('omasasa');
			$datos['evolucion_caramelo_frec']=$this->input->post('ocaramelos');
			$datos['evolucion_caramelo_ocasion']=$this->input->post('ocaramelos');
			$datos['evolucion_azucar_frec']=$this->input->post('oconsumea');
			$datos['evolucion_azucar_ocasion']=$this->input->post('oconsumea');
			$datos['evolucion_alcohol_frec']=$this->input->post('oconsumeb');
			$datos['evolucion_alcohol_ocasion']=$this->input->post('oconsumeb');
			$datos['evolucion_cigarro_frec']=$this->input->post('ofuma');
			$datos['evolucion_cigarro_ocasion']=$this->input->post('ofuma');
			$datos['evolucion_f_reg']=$getfecha;
			$datos['evolucion_h_reg']=$gethora;			
			$datos['evolucion_h_inicio']=$this->input->post('fechai');	
			$datos['evolucion_created_user']=$cuales;
			$datos['evolucion_update_user']=$cuales;			


			$rs=$this->historia_odonto_model->registrar_historiapad_odonto($datos);
			echo $rs;

		}

		function actualizar_pad_odonto(){

			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");
			$cuales=$this->session->userdata('s_id');
			$datos['id_creado_odonto']=$this->input->post('numhc');
			$datos['evolucion_tipo_tratamiento']=$this->input->post('motivopadhc');
			$datos['evolucion_motivo_consulta']=$this->input->post('mconsutaodonto');
			$datos['evolucion_enfermedad_actual']=$this->input->post('enfactualodonto');
			$datos['evolucion_t_medico']=$this->input->post('auxbttratame');
			$datos['evolucion_i_alimentos']=$this->input->post('auxbtingestion');
			$datos['evolucion_r_alergicas']=$this->input->post('auxbtalergica');
			$datos['evolucion_anestecia']=$this->input->post('auxbtanestesia');
			$datos['evolucion_antibiotico']=$this->input->post('auxbtantibiotico');
			$datos['evolucion_hemorragias']=$this->input->post('auxbthemorragia');
			$datos['evolucion_irradiaciones']=$this->input->post('auxbtradiacion');
			$datos['evolucion_enf_respiratoria']=$this->input->post('auxbtrespira');
			$datos['evolucion_cardiopatias']=$this->input->post('auxbtcardio');
			$datos['evolucion_artritis']=$this->input->post('auxbtartritis');
			$datos['evolucion_terapia']=$this->input->post('auxbtcoagulante');			
			$datos['evolucion_hepatitis']=$this->input->post('auxbthepatitis');
			$datos['evolucion_embarazo']=$this->input->post('auxbtembarazo');
			$datos['evolucion_enf_renal']=$this->input->post('auxbtrenal');
			$datos['evolucion_gastro']=$this->input->post('auxbtgastro');
			$datos['evolucion_ante_quirurgicos']=$this->input->post('auxbtquirurgico');
			$datos['evolucion_osteo']=$this->input->post('auxbtosteo');
			$datos['evolucion_otros']=$this->input->post('odontootros');
			$datos['evolucion_observa']=$this->input->post('odontoobservaciones');			
			$datos['evolucion_cepillado']=$this->input->post('ocepillado');
			$datos['evolucion_cepillado_obs']=$this->input->post('ocepillado');
			$datos['evolucion_crema']=$this->input->post('ocrema');
			$datos['evolucion_crema_obs']=$this->input->post('ocrema');
			$datos['evolucion_normalidad']=$this->input->post('onormal');
			$datos['evolucion_normalidad_obs']=$this->input->post('onormal');
			$datos['evolucion_bebida_frecu']=$this->input->post('oazucarada');
			$datos['evolucion_bebida_ocasion']=$this->input->post('oazucarada');
			$datos['evolucion_masas_no_azucar_frec']=$this->input->post('omasasa');
			$datos['evolucion_masas_no_azucar_ocasion']=$this->input->post('omasasa');
			$datos['evolucion_caramelo_frec']=$this->input->post('ocaramelos');
			$datos['evolucion_caramelo_ocasion']=$this->input->post('ocaramelos');
			$datos['evolucion_azucar_frec']=$this->input->post('oconsumea');
			$datos['evolucion_azucar_ocasion']=$this->input->post('oconsumea');
			$datos['evolucion_alcohol_frec']=$this->input->post('oconsumeb');
			$datos['evolucion_alcohol_ocasion']=$this->input->post('oconsumeb');
			$datos['evolucion_cigarro_frec']=$this->input->post('ofuma');
			$datos['evolucion_cigarro_ocasion']=$this->input->post('ofuma');
			$datos['evolucion_f_reg']=$getfecha;
			$datos['evolucion_h_reg']=$gethora;			
			$datos['evolucion_h_inicio']=$this->input->post('fechai');	
			$datos['evolucion_created_user']=$cuales;
			$datos['evolucion_update_user']=$cuales;	

			$rs=$this->historia_odonto_model->actualizar_historiapad_odonto($datos);
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

			$rs=$this->historia_model->registrar_historiabarthel($datos);
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

			$rs=$this->historia_model->actualizar_historiabarthel($datos);
			echo $rs;
		}

		function eliminar(){
			$dato=$this->input->post('id');
			
			$rs=$this->agenda_model->eliminar_cita($dato);

		}
		function mostrar_paciente_odonto(){
			$nom=$this->input->post('nomb');
			
			$datos=$this->historia_odonto_model->buscar_paciente_nombres_odonto($nom);
			echo json_encode($datos);
		}
	}
?>