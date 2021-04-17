<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Agenda extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('agenda_model');
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
			$recibodatosPC=$this->agenda_model->consultar_pacientes();
			$recibodatosMD=$this->agenda_model->consultar_profesional();
			$recibodatos['cn']=array('pc' => $recibodatosPC,'md'=>$recibodatosMD );
            $aux="";
            if($cargo=="5")
            {
                redirect('inicio_spadmin');
            }
            else if($cargo=="4")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_a');
				$this->load->view('agenda/vregcita',$recibodatos);
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="3")
            {
                // redirect('inicio_medico');
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_m');
				$this->load->view('agenda/vregcita',$recibodatos);
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="2")
            {
                // redirect('inicio_enfermera');
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_enf');
				$this->load->view('agenda/vregcita',$recibodatos);
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="1")
            {
            	$aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_e');
				$this->load->view('agenda/vregcita',$recibodatos);
				$this->load->view('plantilla/footer');
            }
			
		}
		function registrar(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");
			$datos['agenda_nombres']=$this->input->post('elnombre');
			$datos['agenda_nombres_profesional']=$this->input->post('pro');
			$datos['agenda_tipo_cita']=$this->input->post('tipo');
			$datos['agenda_f_cita']=$this->input->post('fecha');
			$datos['agenda_h_cita']=$this->input->post('hora');
			$datos['agenda_celular']=$this->input->post('celular');
			$datos['agenda_nota_cita']=$this->input->post('nota');
			$datos['agenda_f_reg']=$getfecha;
			$datos['agenda_h_reg']=$gethora;

			$rta=$this->agenda_model->registrar_cita($datos);

			echo json_encode($rta);
		}
		function actualizar(){
			$datos['id']=$this->input->post('idcita');
			// $datos['agenda_nombres']=$this->input->post('nombre');
			$datos['agenda_tipo_cita']=$this->input->post('tipocita');
			$datos['agenda_f_cita']=$this->input->post('fchct');
			$datos['agenda_h_cita']=$this->input->post('lahr');
			$datos['agenda_celular']=$this->input->post('elcelular');
			$datos['agenda_nota_cita']=$this->input->post('lanota');
			$datos['agenda_estado_cita']=$this->input->post('estado');

			$rs=$this->agenda_model->actualizar_cita($datos);

			echo $rs;
		}
		function eliminar(){
			$dato=$this->input->post('id');
			
			$rs=$this->agenda_model->eliminar_cita($dato);
		}
	}
?>