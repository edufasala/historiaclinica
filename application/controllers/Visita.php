<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Visita extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('visita_model');
			if(!$this->session->userdata('s_id'))
			{
				redirect('entrar');
			}
			else
			{
				// $cuales=$this->session->userdata('s_tipo');
		  //       if ($cuales=="tra")
		  //       {
		  //           redirect('inicio_empleado');
		  //       }
		  //       else if ($cuales=="med")
		  //       {
		  //           redirect('inicio_medico');
		  //       }
		  //       else if ($cuales=="adm")
		  //       {
		  //           redirect('inicio_admin');
		  //       }
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
            	redirect('inicio_medico');
            }
            else if($cargo=="2")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_enf');
				$this->load->view('visita/vregvisita');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="1")
            {
            	redirect('inicio_empleado');
            }
			
		}
		function control(){
			$this->load->view('plantilla/header');
			$this->load->view('plantilla/menu_e');
			$this->load->view('visita/vregcontrol');
			$this->load->view('plantilla/footer');
		}
		function registrar(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");
			$cuales=$this->session->userdata('s_id');
			$datos['visita_doc']=$this->input->post('ndoc');
			$datos['visita_f_visita']=$this->input->post('fchct');
			$datos['visita_h_visita']=$this->input->post('lahr');
			$datos['visita_control_liquidos']=$this->input->post('liquidos');
			$datos['visita_fc']=$this->input->post('fc');
			$datos['visita_fr']=$this->input->post('fr');
			$datos['visita_t']=$this->input->post('temp');
			$datos['visita_ta']=$this->input->post('ta');
			$datos['visita_saturacion']=$this->input->post('saturacion');
			$datos['visita_glucometria']=$this->input->post('glucometria');
			$datos['visita_nota']=$this->input->post('lanota');
			$datos['visita_f_reg']=$getfecha;
			$datos['visita_h_reg']=$gethora;
			$datos['visita_created_user']=$cuales;
			$datos['visita_update_user']=$cuales;
			$datos['visita_h_inicio']=$this->input->post('fechainicio');

			$this->visita_model->registrar_visita($datos);

			echo json_encode($datos);
		}
		function actualizar(){
			$datos['id_agenda']=$this->input->post('idcita');
			$datos['nombres']=$this->input->post('nombre');
			$datos['tipo_cita']=$this->input->post('tipocita');
			$datos['f_cita']=$this->input->post('fchct');
			$datos['h_cita']=$this->input->post('lahr');
			$datos['celular']=$this->input->post('elcelular');
			$datos['nota_cita']=$this->input->post('lanota');
			$datos['estado_cita']=$this->input->post('estado');

			$rs=$this->visita_model->actualizar_cita($datos);

			echo $rs;
		}
		function eliminar(){
			$dato=$this->input->post('id');
			
			$rs=$this->visita_model->eliminar_cita($dato);
		}
		function mostrar_paciente_visita(){
			$nom=$this->input->post('nomb');
			
			$datos=$this->visita_model->buscar_paciente_nombres($nom);
			echo json_encode($datos);
		}
	}
?>