<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Formulacion extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('formulacion_model');
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
            	
            	$this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_m');
				$this->load->view('formulacion/vregformulacion');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="2")
            {
                $aux="Usuario";
                // redirect('inicio_enfermera');
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_enf');
				$this->load->view('formulacion/vregformulacion');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="1")
            {
            	redirect('inicio_empleado');
            }
			
		}
		function registrar(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");
			$futuro=date("Y-m-d", strtotime("+8 day"));
			$cargo=$this->session->userdata('s_id');
			// $doc=$this->input->post('ndoc');
			$datos['formulacion_doc']=$this->input->post('ndoc');
			// $datos['formulacion_radicacion']=$this->input->post('rservicios');
			$datos['formulacion_f_reg']=$getfecha;
			$datos['formulacion_h_reg']=$gethora;
			$datos['formulacion_f_v']=$futuro;
			$datos['formulacion_created_user']=$cargo;
			$datos['formulacion_update_user']=$cargo;
			$medicamentos=$this->input->post('contadorMF');
			$idelementos=1;
			$nombre_med="";
			$lista="";
			$listadg="";
			if(isset($_REQUEST['contadorMF']))
			{
				$con=$_REQUEST['contadorMF'];
				
				if($con>0)
				{
					$i=0;
					while ($idelementos<=$con) 
					{
						if(isset($_REQUEST['nombre'.$idelementos]) && isset($_REQUEST['detalle'.$idelementos]) && isset($_REQUEST['cantidad'.$idelementos]) && isset($_REQUEST['lavia'.$idelementos]) )//&& isset($_REQUEST['elobserva'.$idelementos]) 
						{
							$nombre_medicamento=utf8_decode(utf8_encode($_REQUEST['nombre'.$idelementos]));
							$dt_medicamento=strtoupper(utf8_decode(utf8_encode($_REQUEST['detalle'.$idelementos])));
							$cn_medicamento=strtoupper(utf8_decode(utf8_encode($_REQUEST['cantidad'.$idelementos])));
							$v_medicamento=strtoupper(utf8_decode(utf8_encode($_REQUEST['lavia'.$idelementos])));
							// $ob_medicamento=strtoupper(utf8_decode(utf8_encode($_REQUEST['elobserva'.$idelementos])));
							$lista=$lista.$nombre_medicamento.'|'.$dt_medicamento.'|'.$cn_medicamento.'|'.$v_medicamento.';';
				  			// $listadg=$listadg.$nombre_dig."\r\n";
							$nombre_med="";
						}
						else
						{
							$nombre_med="Ninguno";
						}
						$i++;
						$idelementos++;
					}
				}
				else if($con=="")
				{
					//echo '<br>'."No hay dom de diagnostico ".$nombre_dig2;
				} 
			}
			if($nombre_med=="Ninguno")
			{
				$datos['formulacion_lista']=$nombre_med;
			}
			else
			{
				$datos['formulacion_lista']=$lista;
			}
			// $datos['formulacion_lista']=$lista;

			$rs=$this->formulacion_model->registrar_f($datos);

			echo $rs;
			// echo $medicamentos.$lista;
		}
		
		function mostrar_paciente_f(){
			$nom=$this->input->post('nomb');
			
			$datos=$this->formulacion_model->buscar_paciente_nombres($nom);
			echo json_encode($datos);
		}
		function mostrar_paciente(){
			$nom=$this->input->post('nomb');
			
			$datos=$this->formulacion_model->buscar_paciente_nombres_prf($nom);
			echo json_encode($datos);
		}
	}
?>