<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Registro extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('registro_model');
			$this->load->helper('file');
			$this->load->helper('download');
			$this->load->library('zip');
			if(!$this->session->userdata('s_id'))
			{
				redirect('entrar');//iniciar/vlogin
			}
			else
			{
				$cuales=$this->session->userdata('s_tipo');

		        // if($cuales)
		        // {
		        //     redirect('registro/historia_clinica');
		        // }
		        // else
		        // {
		        //     redirect('entrar');
		        // }
		  //       else if ($cuales=="adm")
		  //       {
		  //           redirect('inicio_admin');
		  //       }
		         // redirect('registro/historia_clinica');
			}
		}
		function mostrar_paciente(){
			$nom=$this->input->post('nomb');
			
			$datos=$this->registro_model->buscar_paciente_nombres($nom);
			echo json_encode($datos);
		}
		//para todos 
		function mostrar_hc_pad(){
			$busqueda=$this->input->post('eldoc');
			$busqueda2=$this->input->post('fecha');
			$datos=$this->registro_model->consultar_historia_pad($busqueda,$busqueda2);
			echo json_encode($datos);
		}
		function mostrar_hc_pad_odonto(){
			$busqueda=$this->input->post('eldoc');
			$busqueda2=$this->input->post('fecha');
			$datos=$this->registro_model->consultar_historia_pad_odonto($busqueda,$busqueda2);
			echo json_encode($datos);
		}		
		function mostrar_hc_pad_visitaodonto(){
			$busqueda=$this->input->post('eldoc');
			$busqueda2=$this->input->post('fecha');
			$datos=$this->registro_model->consultar_historia_pad_visitaodonto($busqueda,$busqueda2);
			echo json_encode($datos);
		}					
		function mostrar_hc_barthel(){
			$busqueda=$this->input->post('eldoc');
			$busqueda2=$this->input->post('fecha');
			$datos=$this->registro_model->consultar_historia_barthel($busqueda,$busqueda2);
			echo json_encode($datos);
		}
		function mostrar_hc_valoracion(){
			$busqueda=$this->input->post('eldoc');
			$busqueda2=$this->input->post('fecha');
			$datos=$this->registro_model->consultar_historia_valoracion($busqueda,$busqueda2);
			echo json_encode($datos);
		}
		function mostrar_hc_norton(){
			$busqueda=$this->input->post('eldoc');
			$busqueda2=$this->input->post('fecha');
			$datos=$this->registro_model->consultar_historia_norton($busqueda,$busqueda2);
			echo json_encode($datos);
		}
		function mostrar_hc_braden(){
			$busqueda=$this->input->post('eldoc');
			$busqueda2=$this->input->post('fecha');
			$datos=$this->registro_model->consultar_historia_braden($busqueda,$busqueda2);
			echo json_encode($datos);
		}
		function mostrar_hc_pad_enf(){
			$busqueda=$this->input->post('eldoc');
			$busqueda2=$this->input->post('fecha');
			$datos=$this->registro_model->consultar_historia_pad_enf($busqueda,$busqueda2);
			echo json_encode($datos);
		}
		function mostrar_hc_valoracion_enf(){
			$busqueda=$this->input->post('eldoc');
			$busqueda2=$this->input->post('fecha');
			$datos=$this->registro_model->consultar_historia_valoracion_enf($busqueda,$busqueda2);
			echo json_encode($datos);
		}
		function mostrar_hc_escala_enf(){
			$busqueda=$this->input->post('eldoc');
			$busqueda2=$this->input->post('fecha');
			$datos=$this->registro_model->consultar_historia_escala_enf($busqueda,$busqueda2);
			echo json_encode($datos);
		}
		function mostrar_hc_intervencion_enf(){
			$busqueda=$this->input->post('eldoc');
			$busqueda2=$this->input->post('fecha');
			$datos=$this->registro_model->consultar_historia_intervencion_enf($busqueda,$busqueda2);
			echo json_encode($datos);
		}

		function historia_clinica(){
			// $recibodatos['cn']=$this->diagnostico_model->consultar_todos();
			$cargo=$this->session->userdata('s_tipo');
            $aux="";
            if($cargo=="5")
            {
                $aux="Administrador";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_s');
				$this->load->view('registros/vcontdhc');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="4")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_a');
				$this->load->view('registros/vcontdhc');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="3")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_m');
				$this->load->view('registros/vcontdhc');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="2")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_enf');
				$this->load->view('registros/vcontdhc');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="1")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_e');
				$this->load->view('registros/vcontdhc');
				$this->load->view('plantilla/footer');
            }
		}
		function historia_clinica_odonto(){
			// $recibodatos['cn']=$this->diagnostico_model->consultar_todos();
			$cargo=$this->session->userdata('s_tipo');
            $aux="";
            if($cargo=="5")
            {
                $aux="usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_s');
				$this->load->view('registros/vcontdhcodonto');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="4")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_a');
				$this->load->view('registros/vcontdhcodonto');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="3")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_m');
				$this->load->view('registros/vcontdhcodonto');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="2")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_enf');
				$this->load->view('registros/vcontdhcodonto');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="1")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_e');
				$this->load->view('registros/vcontdhcodonto');
				$this->load->view('plantilla/footer');
            }
		}		
		function evolucion_medica(){
			// $recibodatos['cn']=$this->diagnostico_model->consultar_todos();
			$cargo=$this->session->userdata('s_tipo');
            $aux="";
            if($cargo=="5")
            {
            	$this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_s');
				$this->load->view('registros/vcontdev');
				$this->load->view('plantilla/footer');
			}
			else  if($cargo=="4")
			{
				$this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_a');
				$this->load->view('registros/vcontdev');
				$this->load->view('plantilla/footer');
			}
			else  if($cargo=="3")
			{
				$this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_m');
				$this->load->view('registros/vcontdev');
				$this->load->view('plantilla/footer');
			}
			else  if($cargo=="2")
			{
				$this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_enf');
				$this->load->view('registros/vcontdev');
				$this->load->view('plantilla/footer');
			}
			else  if($cargo=="1")
			{
				$this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_e');
				$this->load->view('registros/vcontdev');
				$this->load->view('plantilla/footer');
			}
		}
		function historia_clinica_enf(){
			$cargo=$this->session->userdata('s_tipo');
            $aux="";
            if($cargo=="5")
            {
                $aux="Administrador";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_s');
				$this->load->view('registros/vcontdhcenf');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="4")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_a');
				$this->load->view('registros/vcontdhcenf');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="3")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_m');
				$this->load->view('registros/vcontdhcenf');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="2")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_enf');
				$this->load->view('registros/vcontdhcenf');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="1")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_e');
				$this->load->view('registros/vcontdhcenf');
				$this->load->view('plantilla/footer');
            }
		}
		function paciente(){
			$cargo=$this->session->userdata('s_tipo');
            $aux="";
            if($cargo=="5")
            {
                $aux="Administrador";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_s');
				$this->load->view('registros/vcontdpc');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="4")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_a');
				$this->load->view('registros/vcontdpc');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="3")
            {
    //             $aux="Usuario";
    //             $this->load->view('plantilla/header');
				// $this->load->view('plantilla/menu_m');
				// $this->load->view('registros/vcontdhcenf');
				// $this->load->view('plantilla/footer');
            }
            else if($cargo=="2")
            {
    //             $aux="Usuario";
    //             $this->load->view('plantilla/header');
				// $this->load->view('plantilla/menu_enf');
				// $this->load->view('registros/vcontdhcenf');
				// $this->load->view('plantilla/footer');
            }
            else if($cargo=="1")
            {
    //             $aux="Usuario";
    //             $this->load->view('plantilla/header');
				// $this->load->view('plantilla/menu_e');
				// $this->load->view('registros/vcontdhcenf');
				// $this->load->view('plantilla/footer');
            }
		}
		function visita(){
			$cargo=$this->session->userdata('s_tipo');
            $aux="";
            if($cargo=="5")
            {
                $aux="Administrador";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_s');
				$this->load->view('registros/vcontdvs');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="4")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_a');
				$this->load->view('registros/vcontdvs');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="3")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_m');
				$this->load->view('registros/vcontdvs');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="2")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_enf');
				$this->load->view('registros/vcontdvs');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="1")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_e');
				$this->load->view('registros/vcontdvs');
				$this->load->view('plantilla/footer');
            }
		}
		function tiempos(){
			$cargo=$this->session->userdata('s_tipo');
            $aux="";
            if($cargo=="5")
            {
                $aux="Administrador";
    //             $this->load->view('plantilla/header');
				// $this->load->view('plantilla/menu_s');
				// $this->load->view('registros/vcontdpc');
				// $this->load->view('plantilla/footer');
            }
            else if($cargo=="4")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_a');
				$this->load->view('registros/vcontdtiempos');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="3")
            {
    //             $aux="Usuario";
    //             $this->load->view('plantilla/header');
				// $this->load->view('plantilla/menu_m');
				// $this->load->view('registros/vcontdhcenf');
				// $this->load->view('plantilla/footer');
            }
            else if($cargo=="2")
            {
    //             $aux="Usuario";
    //             $this->load->view('plantilla/header');
				// $this->load->view('plantilla/menu_enf');
				// $this->load->view('registros/vcontdhcenf');
				// $this->load->view('plantilla/footer');
            }
            else if($cargo=="1")
            {
    //             $aux="Usuario";
    //             $this->load->view('plantilla/header');
				// $this->load->view('plantilla/menu_e');
				// $this->load->view('registros/vcontdhcenf');
				// $this->load->view('plantilla/footer');
            }
		}
		function bitacora(){
			$cargo=$this->session->userdata('s_tipo');
            $aux="";
            if($cargo=="5")
            {
                $aux="Administrador";
    //             $this->load->view('plantilla/header');
				// $this->load->view('plantilla/menu_s');
				// $this->load->view('registros/vcontdpc');
				// $this->load->view('plantilla/footer');
            }
            else if($cargo=="4")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_a');
				$this->load->view('registros/vconbitacora');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="3")
            {
    //             $aux="Usuario";
    //             $this->load->view('plantilla/header');
				// $this->load->view('plantilla/menu_m');
				// $this->load->view('registros/vcontdhcenf');
				// $this->load->view('plantilla/footer');
            }
            else if($cargo=="2")
            {
    //             $aux="Usuario";
    //             $this->load->view('plantilla/header');
				// $this->load->view('plantilla/menu_enf');
				// $this->load->view('registros/vcontdhcenf');
				// $this->load->view('plantilla/footer');
            }
            else if($cargo=="1")
            {
    //             $aux="Usuario";
    //             $this->load->view('plantilla/header');
				// $this->load->view('plantilla/menu_e');
				// $this->load->view('registros/vcontdhcenf');
				// $this->load->view('plantilla/footer');
            }
		}
		function historia_clinica_n(){
			// $recibodatos['cn']=$this->diagnostico_model->consultar_todos();
			$cargo=$this->session->userdata('s_tipo');
            $aux="";
            if($cargo=="5")
            {
                $aux="Administrador";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_s');
				$this->load->view('registros/vcontdhcn');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="4")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_a');
				$this->load->view('registros/vcontdhcn');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="3")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_m');
				$this->load->view('registros/vcontdhcn');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="2")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_enf');
				$this->load->view('registros/vcontdhcn');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="1")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_e');
				$this->load->view('registros/vcontdhcn');
				$this->load->view('plantilla/footer');
            }
		}
		function historia_clinica_odonto_n(){
			// $recibodatos['cn']=$this->diagnostico_model->consultar_todos();
			$cargo=$this->session->userdata('s_tipo');
            $aux="";
            if($cargo=="5")
            {
                $aux="Administrador";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_s');
				$this->load->view('registros/vcontdhcn');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="4")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_a');
				$this->load->view('registros/vcontdhcn');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="3")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_m');
				$this->load->view('registros/vcontdhcn');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="2")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_enf');
				$this->load->view('registros/vcontdhcn');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="1")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_e');
				$this->load->view('registros/vcontdhcn');
				$this->load->view('plantilla/footer');
            }
		}		
		function obtener_server_hc_general(){
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna.$select;
			$losdatos=$this->registro_model->consultar_separados_hc_general($start,$length,$search,$orden_dir,$orden_columna);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_pad']=$row['id_hc_pad'];
				$array['pad_documento']=$row['pad_documento'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['pad_f_reg']=$row['pad_f_reg'];
				// $array['id_hc_concentimiento']=$row['id_hc_concentimiento'];
				// $array['id_hc_barthel']=$row['id_hc_barthel'];
				// $array['id_hc_valoracion']=$row['id_hc_valoracion'];
				// $array['id_hc_norton']=$row['id_hc_norton'];
				// $array['id_hc_braden']=$row['id_hc_braden'];
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
		function obtener_server_hc_pad(){
			$doc=$this->uri->segment(3);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna.$select;
			$losdatos=$this->registro_model->consultar_separados_hc_pad($start,$length,$search,$orden_dir,$orden_columna,$doc);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_pad']=$row['id_hc_pad'];
				$array['pad_documento']=$row['pad_documento'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['pad_f_reg']=$row['pad_f_reg'];
				$array['hc_pad_cod']=$row['hc_pad_cod'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				$array['pad_diagnosticos']=$row['pad_diagnosticos'];
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
		function obtener_server_hc_pad_odonto(){
			$doc=$this->uri->segment(3);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna.$select;
			$losdatos=$this->registro_model->consultar_separados_hc_pad_odonto($start,$length,$search,$orden_dir,$orden_columna,$doc);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_ev']=$row['id_ev'];
				$array['evolucion_doc']=$row['evolucion_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['evolucion_f_reg']=$row['evolucion_f_reg'];
				$array['nro_hc']=$row['nro_hc'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];				
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

		function obtener_server_hc_pad_visitaodonto(){
			$doc=$this->uri->segment(3);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna.$select;
			$losdatos=$this->registro_model->consultar_separados_hc_pad_visitaodonto($start,$length,$search,$orden_dir,$orden_columna,$doc);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_vis']=$row['id_vis'];
				$array['visita_doc']=$row['visita_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['visita_f_reg']=$row['visita_f_reg'];
				$array['nro_hc']=$row['nro_hc'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
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
		function obtener_server_hc_concentimiento(){
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_hc_concentimiento($start,$length,$search,$orden_dir,$orden_columna);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_concentimiento']=$row['id_hc_concentimiento'];
				$array['concentimiento_doc']=$row['concentimiento_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['concentimiento_f_reg']=$row['concentimiento_f_reg'];
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
			echo json_encode($json_data);
		}
		function obtener_server_hc_barthel(){
			$doc=$this->uri->segment(3);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_hc_barthel($start,$length,$search,$orden_dir,$orden_columna,$doc);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_barthel']=$row['id_hc_barthel'];
				$array['barthel_doc']=$row['barthel_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['barthel_f_reg']=$row['barthel_f_reg'];
				$array['hc_barthel_cod']=$row['hc_barthel_cod'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				$array['pad_diagnosticos']=$row['pad_diagnosticos'];
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
			echo json_encode($json_data);
		}
		function obtener_server_hc_valoracion(){
			$doc=$this->uri->segment(3);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_hc_valoracion($start,$length,$search,$orden_dir,$orden_columna,$doc);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_valoracion']=$row['id_hc_valoracion'];
				$array['valoracion_doc']=$row['valoracion_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['valoracion_f_reg']=$row['valoracion_f_reg'];
				$array['hc_valoracion_cod']=$row['hc_valoracion_cod'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				$array['valoracion_diagnosticos']=$row['valoracion_diagnosticos'];
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
			echo json_encode($json_data);
		}
		function obtener_server_hc_norton(){
			$doc=$this->uri->segment(3);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_hc_norton($start,$length,$search,$orden_dir,$orden_columna,$doc);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_norton']=$row['id_hc_norton'];
				$array['norton_doc']=$row['norton_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['norton_f_reg']=$row['norton_f_reg'];
				$array['hc_norton_cod']=$row['hc_norton_cod'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				$array['norton_diagnosticos']=$row['norton_diagnosticos'];
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
			echo json_encode($json_data);
		}
		function obtener_server_hc_braden(){
			$doc=$this->uri->segment(3);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_hc_braden($start,$length,$search,$orden_dir,$orden_columna,$doc);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_braden']=$row['id_hc_braden'];
				$array['braden_doc']=$row['braden_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['braden_f_reg']=$row['braden_f_reg'];
				$array['hc_braden_cod']=$row['hc_braden_cod'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				$array['pad_diagnosticos']=$row['pad_diagnosticos'];
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
			echo json_encode($json_data);
		}
		function obtener_server_ev(){
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna;
			$losdatos=$this->registro_model->consultar_separados_ev($start,$length,$search,$orden_dir,$orden_columna);
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
		function obtener_server_hc_enf_general(){
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna.$select;
			$losdatos=$this->registro_model->consultar_separados_hc_enf_general($start,$length,$search,$orden_dir,$orden_columna);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_enf_pad']=$row['id_hc_enf_pad'];
				$array['enf_pad_doc']=$row['enf_pad_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['enf_pad_f_reg']=$row['enf_pad_f_reg'];
				// $array['enf_pad_f_reg']=$row['enf_pad_f_reg'];
				// $array['id_hc_enf_valoracion']=$row['id_hc_enf_valoracion'];
				// $array['id_hc_enf_escala']=$row['id_hc_enf_escala'];
				// $array['id_hc_enf_intervencion']=$row['id_hc_enf_intervencion'];
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
			echo json_encode($json_data);
		}
		function obtener_server_hc_padenf(){
			$doc=$this->uri->segment(3);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_hc_enf_pad($start,$length,$search,$orden_dir,$orden_columna,$doc);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_enf_pad']=$row['id_hc_enf_pad'];
				$array['enf_pad_doc']=$row['enf_pad_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['enf_pad_f_reg']=$row['enf_pad_f_reg'];
				$array['hc_enf_pad_cod']=$row['hc_enf_pad_cod'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				$array['enf_pad_diagnosticos_enfermera']=$row['enf_pad_diagnosticos_enfermera'];
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
			echo json_encode($json_data);
		}
		function obtener_server_hc_sociofamiliar(){
			$doc=$this->uri->segment(3);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_hc_enf_valoracion($start,$length,$search,$orden_dir,$orden_columna,$doc);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_enf_valoracion']=$row['id_hc_enf_valoracion'];
				$array['enf_valoracion_doc']=$row['enf_valoracion_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['enf_valoracion_f_reg']=$row['enf_valoracion_f_reg'];
				$array['hc_enf_valoracion_cod']=$row['hc_enf_valoracion_cod'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				$array['enf_pad_diagnosticos_enfermera']=$row['enf_pad_diagnosticos_enfermera'];
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
			echo json_encode($json_data);
		}
		function obtener_server_hc_escaladecarga(){
			$doc=$this->uri->segment(3);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_hc_enf_escala($start,$length,$search,$orden_dir,$orden_columna,$doc);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_enf_escala']=$row['id_hc_enf_escala'];
				$array['enf_escala_doc']=$row['enf_escala_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['enf_escala_f_reg']=$row['enf_escala_f_reg'];
				$array['hc_enf_escala_cod']=$row['hc_enf_escala_cod'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				$array['enf_pad_diagnosticos_enfermera']=$row['enf_pad_diagnosticos_enfermera'];
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
			echo json_encode($json_data);
		}
		function obtener_server_hc_intervencion(){
			$doc=$this->uri->segment(3);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_hc_enf_intervencion($start,$length,$search,$orden_dir,$orden_columna,$doc);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_enf_intervencion']=$row['id_hc_enf_intervencion'];
				$array['enf_intervencion_doc']=$row['enf_intervencion_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['enf_intervencion_f_reg']=$row['enf_intervencion_f_reg'];
				$array['hc_enf_intervencion_cod']=$row['hc_enf_intervencion_cod'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				$array['enf_intervencion_diagnosticos_enf']=$row['enf_intervencion_diagnosticos_enf'];
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
			echo json_encode($json_data);
		}

		//fch
		function obtener_server_hc_bf_pad(){
			$doc=$this->uri->segment(3);
			$ff=$this->uri->segment(4);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna.$select;
			$losdatos=$this->registro_model->consultar_separados_hc_pad_bf($start,$length,$search,$orden_dir,$orden_columna,$doc,$ff);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_pad']=$row['id_hc_pad'];
				$array['pad_documento']=$row['pad_documento'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['pad_f_reg']=$row['pad_f_reg'];
				$array['hc_pad_cod']=$row['hc_pad_cod'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				$array['pad_diagnosticos']=$row['pad_diagnosticos'];
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
		function obtener_server_hc_bf_barthel(){
			$doc=$this->uri->segment(3);
			$ff=$this->uri->segment(4);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_hc_barthel_bf($start,$length,$search,$orden_dir,$orden_columna,$doc,$ff);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_barthel']=$row['id_hc_barthel'];
				$array['barthel_doc']=$row['barthel_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['barthel_f_reg']=$row['barthel_f_reg'];
				$array['hc_barthel_cod']=$row['hc_barthel_cod'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				$array['pad_diagnosticos']=$row['pad_diagnosticos'];
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
			echo json_encode($json_data);
		}
		function obtener_server_hc_bf_valoracion(){
			$doc=$this->uri->segment(3);
			$ff=$this->uri->segment(4);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_hc_valoracion_bf($start,$length,$search,$orden_dir,$orden_columna,$doc,$ff);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_valoracion']=$row['id_hc_valoracion'];
				$array['valoracion_doc']=$row['valoracion_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['valoracion_f_reg']=$row['valoracion_f_reg'];
				$array['hc_valoracion_cod']=$row['hc_valoracion_cod'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				$array['valoracion_diagnosticos']=$row['valoracion_diagnosticos'];
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
			echo json_encode($json_data);
		}
		function obtener_server_hc_bf_norton(){
			$doc=$this->uri->segment(3);
			$ff=$this->uri->segment(4);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_hc_norton_bf($start,$length,$search,$orden_dir,$orden_columna,$doc,$ff);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_norton']=$row['id_hc_norton'];
				$array['norton_doc']=$row['norton_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['norton_f_reg']=$row['norton_f_reg'];
				$array['hc_norton_cod']=$row['hc_norton_cod'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				$array['norton_diagnosticos']=$row['norton_diagnosticos'];
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
			echo json_encode($json_data);
		}
		function obtener_server_hc_bf_braden(){
			$doc=$this->uri->segment(3);
			$ff=$this->uri->segment(4);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_hc_braden_bf($start,$length,$search,$orden_dir,$orden_columna,$doc,$ff);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_braden']=$row['id_hc_braden'];
				$array['braden_doc']=$row['braden_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['braden_f_reg']=$row['braden_f_reg'];
				$array['hc_braden_cod']=$row['hc_braden_cod'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				$array['pad_diagnosticos']=$row['pad_diagnosticos'];
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
			echo json_encode($json_data);
		}
		function obtener_server_hc_bf_padenf(){
			$doc=$this->uri->segment(3);
			$ff=$this->uri->segment(4);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_hc_enf_pad_bf($start,$length,$search,$orden_dir,$orden_columna,$doc,$ff);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_enf_pad']=$row['id_hc_enf_pad'];
				$array['enf_pad_doc']=$row['enf_pad_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['enf_pad_f_reg']=$row['enf_pad_f_reg'];
				$array['hc_enf_pad_cod']=$row['hc_enf_pad_cod'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				$array['enf_pad_diagnosticos_enfermera']=$row['enf_pad_diagnosticos_enfermera'];
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
			echo json_encode($json_data);
		}
		function obtener_server_hc_bf_sociofamiliar(){
			$doc=$this->uri->segment(3);
			$ff=$this->uri->segment(4);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_hc_enf_valoracion_bf($start,$length,$search,$orden_dir,$orden_columna,$doc,$ff);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_enf_valoracion']=$row['id_hc_enf_valoracion'];
				$array['enf_valoracion_doc']=$row['enf_valoracion_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['enf_valoracion_f_reg']=$row['enf_valoracion_f_reg'];
				$array['hc_enf_valoracion_cod']=$row['hc_enf_valoracion_cod'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				$array['enf_pad_diagnosticos_enfermera']=$row['enf_pad_diagnosticos_enfermera'];
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
			echo json_encode($json_data);
		}
		function obtener_server_hc_bf_escaladecarga(){
			$doc=$this->uri->segment(3);
			$ff=$this->uri->segment(4);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_hc_enf_escala_bf($start,$length,$search,$orden_dir,$orden_columna,$doc,$ff);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_enf_escala']=$row['id_hc_enf_escala'];
				$array['enf_escala_doc']=$row['enf_escala_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['enf_escala_f_reg']=$row['enf_escala_f_reg'];
				$array['hc_enf_escala_cod']=$row['hc_enf_escala_cod'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				$array['enf_pad_diagnosticos_enfermera']=$row['enf_pad_diagnosticos_enfermera'];
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
			echo json_encode($json_data);
		}
		function obtener_server_hc_bf_intervencion(){
			$doc=$this->uri->segment(3);
			$ff=$this->uri->segment(4);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_hc_enf_intervencion_bf($start,$length,$search,$orden_dir,$orden_columna,$doc,$ff);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_enf_intervencion']=$row['id_hc_enf_intervencion'];
				$array['enf_intervencion_doc']=$row['enf_intervencion_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['enf_intervencion_f_reg']=$row['enf_intervencion_f_reg'];
				$array['hc_enf_intervencion_cod']=$row['hc_enf_intervencion_cod'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				$array['enf_intervencion_diagnosticos_enf']=$row['enf_intervencion_diagnosticos_enf'];
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
			echo json_encode($json_data);
		}

		function obtener_server_pacientes(){
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna;
			$losdatos=$this->registro_model->consultar_separados_paciente($start,$length,$search,$orden_dir,$orden_columna);
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
		function obtener_server_visitas(){
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna;
			$losdatos=$this->registro_model->consultar_separados_visitas($start,$length,$search,$orden_dir,$orden_columna);
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

		function obtener_server_hc_general_tiempo(){
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna.$select;
			$losdatos=$this->registro_model->consultar_separados_hc_general_tiempo($start,$length,$search,$orden_dir,$orden_columna);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_pad']=$row['id_hc_pad'];
				$array['pad_documento']=$row['pad_documento'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['pad_f_reg']=$row['pad_f_reg'];
				$array['pad_h_reg']=$row['pad_h_reg'];
				$array['pad_h_inicio']=$row['pad_h_inicio'];
				// $array['id_hc_concentimiento']=$row['id_hc_concentimiento'];
				// $array['id_hc_barthel']=$row['id_hc_barthel'];
				// $array['id_hc_valoracion']=$row['id_hc_valoracion'];
				// $array['id_hc_norton']=$row['id_hc_norton'];
				// $array['id_hc_braden']=$row['id_hc_braden'];
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
		function obtener_server_ev_tiempo(){
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna;
			$losdatos=$this->registro_model->consultar_separados_ev_tiempo($start,$length,$search,$orden_dir,$orden_columna);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_pad']=$row['id_hc_pad'];
				$array['pad_documento']=$row['pad_documento'];
				// $array['tipo_doc_paciente']=$row['tipo_doc_paciente'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['pad_f_reg']=$row['pad_f_reg'];
				$array['pad_h_reg']=$row['pad_h_reg'];
				$array['pad_h_inicio']=$row['pad_h_inicio'];
				// $array['inclusion_pad_paciente']=$row['inclusion_pad_paciente'];
				// $array['evolucion_motivo_consulta']=$row['evolucion_motivo_consulta'];
				// $array['evolucion_f_reg']=$row['evolucion_f_reg'];
				// $array['evolucion_h_reg']=$row['evolucion_h_reg'];
				// $array['evolucion_h_inicio']=$row['evolucion_h_inicio'];
				// $array['evolucion_enfermedad_actual']=$row['evolucion_enfermedad_actual'];
				// $array['evolucion_a_personales']=$row['evolucion_a_personales'];
				// $array['evolucion_a_familiares']=$row['evolucion_a_familiares'];
				// $array['evolucion_revision_sistema']=$row['evolucion_revision_sistema'];
				// $array['evolucion_talla']=$row['evolucion_talla'];
				// $array['evolucion_peso']=$row['evolucion_peso'];
				// $array['evolucion_fr']=$row['evolucion_fr'];
				// $array['evolucion_fc']=$row['evolucion_fc'];
				// $array['evolucion_temperatura']=$row['evolucion_temperatura'];
				// $array['evolucion_tension_arterial']=$row['evolucion_tension_arterial'];
				// $array['evolucion_descripcion_examen']=$row['evolucion_descripcion_examen'];
				// $array['evolucion_diagnosticos']=$row['evolucion_diagnosticos'];
				// $array['evolucion_otros_diagnosticos']=$row['evolucion_otros_diagnosticos'];
				// $array['evolucion_analisis']=$row['evolucion_analisis'];
				// $array['evolucion_plan']=$row['evolucion_plan'];
				// $array['evolucion_pad']=$row['evolucion_pad'];
				// $array['evolucion_farmacos']=$row['evolucion_farmacos'];
				// $array['evolucion_manejo_integral']=$row['evolucion_manejo_integral'];
				// $array['evolucion_paraclinicos']=$row['evolucion_paraclinicos'];
				// $array['evolucion_valoraciones']=$row['evolucion_valoraciones'];
				// $array['evolucion_insumos']=$row['evolucion_insumos'];
				// $array['evolucion_recomendaciones']=$row['evolucion_recomendaciones'];
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
		function obtener_server_hc_enf_general_tiempo(){
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna.$select;
			$losdatos=$this->registro_model->consultar_separados_hc_enf_general_tiempo($start,$length,$search,$orden_dir,$orden_columna);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_enf_pad']=$row['id_hc_enf_pad'];
				$array['enf_pad_doc']=$row['enf_pad_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['enf_pad_f_reg']=$row['enf_pad_f_reg'];
				$array['enf_pad_h_reg']=$row['enf_pad_h_reg'];
				$array['enf_pad_h_inicio']=$row['enf_pad_h_inicio'];
				// $array['id_hc_enf_valoracion']=$row['id_hc_enf_valoracion'];
				// $array['id_hc_enf_escala']=$row['id_hc_enf_escala'];
				// $array['id_hc_enf_intervencion']=$row['id_hc_enf_intervencion'];
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
			echo json_encode($json_data);
		}
		function obtener_server_visitas_tiempo(){
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna;
			$losdatos=$this->registro_model->consultar_separados_visitas_tiempo($start,$length,$search,$orden_dir,$orden_columna);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['doc_paciente']=$row['doc_paciente'];
				$array['enf_pad_doc']=$row['enf_pad_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				// $array['visita_f_visita']=$row['visita_f_visita'];
				// $array['visita_h_visita']=$row['visita_h_visita'];
				// $array['visita_nota']=$row['visita_nota'];
				$array['enf_pad_f_reg']=$row['enf_pad_f_reg'];
				$array['enf_pad_h_reg']=$row['enf_pad_h_reg'];
				$array['enf_pad_h_inicio']=$row['enf_pad_h_inicio'];
				// $array['inclusion_pad_paciente']=$row['inclusion_pad_paciente'];
				$array['id_hc_enf_pad']=$row['id_hc_enf_pad'];
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

		function obtener_server_bitacora(){
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna;
			$losdatos=$this->registro_model->consultar_separados_bitacora($start,$length,$search,$orden_dir,$orden_columna);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['id_persona']=$row['id_persona'];
				$array['accion_realizada']=$row['accion_realizada'];
				$array['fecha']=$row['fecha'];
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
		function obtener_server_bitacora2(){
			$ff=$this->uri->segment(3);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna;
			$losdatos=$this->registro_model->consultar_separados_bitacora2($start,$length,$search,$orden_dir,$orden_columna,$ff);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['id_persona']=$row['id_persona'];
				$array['accion_realizada']=$row['accion_realizada'];
				$array['fecha']=$row['fecha'];
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
		function descargar_copia_db(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");

			$this->load->dbutil();
			$db_format=array(
				'format' => 'zip',
				'filename'=>'backup_'.$getfecha.'_'.$gethora.'.sql',
				);
			$backup=& $this->dbutil->backup($db_format);
			$bdname='backup-HC-'.$getfecha.'-'.$gethora.'.zip';
			//$guardar='assets/'.$bdname;
			//write_file($backup);
			force_download($bdname,$backup);
		}

		function obtener_server_hc_general_n(){
			$doc=$this->uri->segment(3);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna.$select;
			$losdatos=$this->registro_model->consultar_separados_hc_general_n($start,$length,$search,$orden_dir,$orden_columna,$doc);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_pad']=$row['id_hc_pad'];
				$array['pad_documento']=$row['pad_documento'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['pad_f_reg']=$row['pad_f_reg'];
				$array['hc_pad_cod']=$row['hc_pad_cod'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				$array['pad_diagnosticos']=$row['pad_diagnosticos'];
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
		function obtener_server_hc_pad_n(){
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna.$select;
			$losdatos=$this->registro_model->consultar_separados_hc_pad_n($start,$length,$search,$orden_dir,$orden_columna);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_pad']=$row['id_hc_pad'];
				$array['pad_documento']=$row['pad_documento'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['pad_f_reg']=$row['pad_f_reg'];
				$array['hc_pad_cod']=$row['hc_pad_cod'];
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
		function obtener_server_hc_concentimiento_n(){
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_hc_concentimiento($start,$length,$search,$orden_dir,$orden_columna);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_concentimiento']=$row['id_hc_concentimiento'];
				$array['concentimiento_doc']=$row['concentimiento_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['concentimiento_f_reg']=$row['concentimiento_f_reg'];
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
			echo json_encode($json_data);
		}
		function obtener_server_hc_barthel_n(){
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_hc_barthel_n($start,$length,$search,$orden_dir,$orden_columna);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_barthel']=$row['id_hc_barthel'];
				$array['barthel_doc']=$row['barthel_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['barthel_f_reg']=$row['barthel_f_reg'];
				$array['hc_barthel_cod']=$row['hc_barthel_cod'];
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
			echo json_encode($json_data);
		}
		function obtener_server_hc_valoracion_n(){
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_hc_valoracion_n($start,$length,$search,$orden_dir,$orden_columna);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_valoracion']=$row['id_hc_valoracion'];
				$array['valoracion_doc']=$row['valoracion_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['valoracion_f_reg']=$row['valoracion_f_reg'];
				$array['hc_valoracion_cod']=$row['hc_valoracion_cod'];
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
			echo json_encode($json_data);
		}
		function obtener_server_hc_norton_n(){
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_hc_norton_n($start,$length,$search,$orden_dir,$orden_columna);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_norton']=$row['id_hc_norton'];
				$array['norton_doc']=$row['norton_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['norton_f_reg']=$row['norton_f_reg'];
				$array['hc_norton_cod']=$row['hc_norton_cod'];
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
			echo json_encode($json_data);
		}
		function obtener_server_hc_braden_n(){
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_hc_braden_n($start,$length,$search,$orden_dir,$orden_columna);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_braden']=$row['id_hc_braden'];
				$array['braden_doc']=$row['braden_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['braden_f_reg']=$row['braden_f_reg'];
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
			echo json_encode($json_data);
		}
		function historia_clinica_enf_n(){
			$cargo=$this->session->userdata('s_tipo');
            $aux="";
            if($cargo=="5")
            {
                $aux="Administrador";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_s');
				$this->load->view('registros/vcontdhcenfn');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="4")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_a');
				$this->load->view('registros/vcontdhcenfn');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="3")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_m');
				$this->load->view('registros/vcontdhcenfn');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="2")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_enf');
				$this->load->view('registros/vcontdhcenfn');
				$this->load->view('plantilla/footer');
            }
            else if($cargo=="1")
            {
                $aux="Usuario";
                $this->load->view('plantilla/header');
				$this->load->view('plantilla/menu_e');
				$this->load->view('registros/vcontdhcenfn');
				$this->load->view('plantilla/footer');
            }
		}
		function obtener_server_hc_generalenf_n(){
			$doc=$this->uri->segment(3);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna.$select;
			$losdatos=$this->registro_model->consultar_separados_hc_enf_general_n($start,$length,$search,$orden_dir,$orden_columna,$doc);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_enf_pad']=$row['id_hc_enf_pad'];
				$array['enf_pad_doc']=$row['enf_pad_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['enf_pad_f_reg']=$row['enf_pad_f_reg'];
				$array['hc_enf_pad_cod']=$row['hc_enf_pad_cod'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				$array['enf_pad_diagnosticos_enfermera']=$row['enf_pad_diagnosticos_enfermera'];
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
			echo json_encode($json_data);
		}
		function obtener_server_hc_enf_pad_n(){
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_hc_enf_pad_n($start,$length,$search,$orden_dir,$orden_columna);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_enf_pad']=$row['id_hc_enf_pad'];
				$array['enf_pad_doc']=$row['enf_pad_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['enf_pad_f_reg']=$row['enf_pad_f_reg'];
				$array['hc_enf_pad_cod']=$row['hc_enf_pad_cod'];
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
			echo json_encode($json_data);
		}
		function obtener_server_hc_enf_sociofamiliar_n(){
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_hc_enf_valoracion_n($start,$length,$search,$orden_dir,$orden_columna);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_enf_valoracion']=$row['id_hc_enf_valoracion'];
				$array['enf_valoracion_doc']=$row['enf_valoracion_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['enf_valoracion_f_reg']=$row['enf_valoracion_f_reg'];
				$array['hc_enf_valoracion_cod']=$row['hc_enf_valoracion_cod'];
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
			echo json_encode($json_data);
		}
		function obtener_server_hc_enf_escaladecarga_n(){
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_hc_enf_escala_n($start,$length,$search,$orden_dir,$orden_columna);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_enf_escala']=$row['id_hc_enf_escala'];
				$array['enf_escala_doc']=$row['enf_escala_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['enf_escala_f_reg']=$row['enf_escala_f_reg'];
				$array['hc_enf_escala_cod']=$row['hc_enf_escala_cod'];
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
			echo json_encode($json_data);
		}
		function obtener_server_hc_enf_intervencion_n(){
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_hc_enf_intervencion_n($start,$length,$search,$orden_dir,$orden_columna);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_enf_intervencion']=$row['id_hc_enf_intervencion'];
				$array['enf_intervencion_doc']=$row['enf_intervencion_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['enf_intervencion_f_reg']=$row['enf_intervencion_f_reg'];
				$array['hc_enf_intervencion_cod']=$row['hc_enf_intervencion_cod'];
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
			echo json_encode($json_data);
		}

		//todos
		function obtener_server_listado_general(){
			$doc=$this->uri->segment(3);
			// $id =$this->uri->segment(4);// PAD0001
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// $doc=$this->input->post('ahoradoc');
			// echo $orden_dir.$orden_columna.$select;
			$losdatos=$this->registro_model->consultar_separados_listado_general($start,$length,$search,$orden_dir,$orden_columna,$doc);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_pad']=$row['id_hc_pad'];
				$array['pad_documento']=$row['pad_documento'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['pad_f_reg']=$row['pad_f_reg'];
				$array['hc_pad_cod']=$row['hc_pad_cod'];
				// $array['registro_nombres']=$row['registro_nombres'];
				// $array['registro_apellidos']=$row['registro_apellidos'];
				// $array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				// $array['pad_diagnosticos']=$row['pad_diagnosticos'];
				// $array['id_hc_braden']=$row['id_hc_braden'];
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
			// echo $doc;
			// echo json_encode($datos->result());
			echo json_encode($json_data);
		}
		//listado
		function obtener_server_listado_pad(){
			$doc=$this->uri->segment(3);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna.$select;
			$losdatos=$this->registro_model->consultar_separados_listado_pad($start,$length,$search,$orden_dir,$orden_columna,$doc);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_pad']=$row['id_hc_pad'];
				$array['pad_documento']=$row['pad_documento'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['pad_f_reg']=$row['pad_f_reg'];
				$array['hc_pad_cod']=$row['hc_pad_cod'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				$array['pad_diagnosticos']=$row['pad_diagnosticos'];
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
		function obtener_server_listado_pad_odonto(){
			$doc=$this->uri->segment(3);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna.$select;
			$losdatos=$this->registro_model->consultar_separados_listado_pad_odonto($start,$length,$search,$orden_dir,$orden_columna,$doc);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_ev']=$row['id_ev'];
				$array['evolucion_doc']=$row['evolucion_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['evolucion_f_reg']=$row['evolucion_f_reg'];
				$array['nro_hc']=$row['nro_hc'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				//$array['pad_diagnosticos']=$row['pad_diagnosticos'];
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
		function obtener_server_listado_barthel(){
			$doc=$this->uri->segment(3);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_listado_barthel($start,$length,$search,$orden_dir,$orden_columna,$doc);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_barthel']=$row['id_hc_barthel'];
				$array['barthel_doc']=$row['barthel_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['barthel_f_reg']=$row['barthel_f_reg'];
				$array['hc_barthel_cod']=$row['hc_barthel_cod'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				$array['pad_diagnosticos']=$row['pad_diagnosticos'];
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
			echo json_encode($json_data);
		}
		function obtener_server_listado_valoracion(){
			$doc=$this->uri->segment(3);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_listado_valoracion($start,$length,$search,$orden_dir,$orden_columna,$doc);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_valoracion']=$row['id_hc_valoracion'];
				$array['valoracion_doc']=$row['valoracion_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['valoracion_f_reg']=$row['valoracion_f_reg'];
				$array['hc_valoracion_cod']=$row['hc_valoracion_cod'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				$array['valoracion_diagnosticos']=$row['valoracion_diagnosticos'];
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
			echo json_encode($json_data);
		}
		function obtener_server_listado_norton(){
			$doc=$this->uri->segment(3);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_listado_norton($start,$length,$search,$orden_dir,$orden_columna,$doc);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_norton']=$row['id_hc_norton'];
				$array['norton_doc']=$row['norton_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['norton_f_reg']=$row['norton_f_reg'];
				$array['hc_norton_cod']=$row['hc_norton_cod'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				$array['norton_diagnosticos']=$row['norton_diagnosticos'];
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
			echo json_encode($json_data);
		}
		function obtener_server_listado_braden(){
			$doc=$this->uri->segment(3);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_listado_braden($start,$length,$search,$orden_dir,$orden_columna,$doc);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_braden']=$row['id_hc_braden'];
				$array['braden_doc']=$row['braden_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['braden_f_reg']=$row['braden_f_reg'];
				$array['hc_braden_cod']=$row['hc_braden_cod'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				$array['pad_diagnosticos']=$row['pad_diagnosticos'];
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
			echo json_encode($json_data);
		}
		function obtener_server_listado_generalenf(){
			$doc=$this->uri->segment(3);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			// echo $orden_dir.$orden_columna.$select;
			$losdatos=$this->registro_model->consultar_separados_listado_enf_general($start,$length,$search,$orden_dir,$orden_columna,$doc);
			// var_dump($losdatos);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_enf_pad']=$row['id_hc_enf_pad'];
				$array['enf_pad_doc']=$row['enf_pad_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['enf_pad_f_reg']=$row['enf_pad_f_reg'];
				$array['hc_enf_pad_cod']=$row['hc_enf_pad_cod'];
				// $array['enf_pad_f_reg']=$row['enf_pad_f_reg'];
				// $array['id_hc_enf_valoracion']=$row['id_hc_enf_valoracion'];
				// $array['id_hc_enf_escala']=$row['id_hc_enf_escala'];
				// $array['id_hc_enf_intervencion']=$row['id_hc_enf_intervencion'];
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
			echo json_encode($json_data);
		}
		function obtener_server_listado_padenf(){
			$doc=$this->uri->segment(3);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_listado_padenf($start,$length,$search,$orden_dir,$orden_columna,$doc);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_enf_pad']=$row['id_hc_enf_pad'];
				$array['enf_pad_doc']=$row['enf_pad_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['enf_pad_f_reg']=$row['enf_pad_f_reg'];
				$array['hc_enf_pad_cod']=$row['hc_enf_pad_cod'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				$array['enf_pad_diagnosticos_enfermera']=$row['enf_pad_diagnosticos_enfermera'];
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
			echo json_encode($json_data);
		}
		function obtener_server_listado_sociofamiliar(){
			$doc=$this->uri->segment(3);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_listado_valoracionenf($start,$length,$search,$orden_dir,$orden_columna,$doc);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_enf_valoracion']=$row['id_hc_enf_valoracion'];
				$array['enf_valoracion_doc']=$row['enf_valoracion_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['enf_valoracion_f_reg']=$row['enf_valoracion_f_reg'];
				$array['hc_enf_valoracion_cod']=$row['hc_enf_valoracion_cod'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				$array['enf_pad_diagnosticos_enfermera']=$row['enf_pad_diagnosticos_enfermera'];
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
			echo json_encode($json_data);
		}
		function obtener_server_listado_escaladecarga(){
			$doc=$this->uri->segment(3);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_listado_escala($start,$length,$search,$orden_dir,$orden_columna,$doc);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_enf_escala']=$row['id_hc_enf_escala'];
				$array['enf_escala_doc']=$row['enf_escala_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['enf_escala_f_reg']=$row['enf_escala_f_reg'];
				$array['hc_enf_escala_cod']=$row['hc_enf_escala_cod'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				$array['enf_pad_diagnosticos_enfermera']=$row['enf_pad_diagnosticos_enfermera'];
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
			echo json_encode($json_data);
		}
		function obtener_server_listado_intervencion(){
			$doc=$this->uri->segment(3);
			$start=$this->input->post('start');
			$length=$this->input->post('length');
			$search=$this->input->post('search')['value'];
			$orden_dir=$this->input->post('order')[0]['dir'];
			$orden_columna=$this->input->post('order')[0]['column'];
			$losdatos=$this->registro_model->consultar_separados_listado_intervencion($start,$length,$search,$orden_dir,$orden_columna,$doc);
			$datos=$losdatos['consulta_total'];
			$total=$losdatos['total_datos'];
			$resultado=array();
			foreach ($datos->result_array() as $row) {
				$array=array();
				$array['id_hc_enf_intervencion']=$row['id_hc_enf_intervencion'];
				$array['enf_intervencion_doc']=$row['enf_intervencion_doc'];
				$array['pnombre_paciente']=$row['pnombre_paciente'];
				$array['papellido_paciente']=$row['papellido_paciente'];
				$array['enf_intervencion_f_reg']=$row['enf_intervencion_f_reg'];
				$array['hc_enf_intervencion_cod']=$row['hc_enf_intervencion_cod'];
				$array['registro_nombres']=$row['registro_nombres'];
				$array['registro_apellidos']=$row['registro_apellidos'];
				$array['registro_especialidad']=$row['registro_especialidad'];
				$array['ambito_registro_paciente']=$row['ambito_registro_paciente'];
				$array['enf_intervencion_diagnosticos_enf']=$row['enf_intervencion_diagnosticos_enf'];
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
			echo json_encode($json_data);
		}
	}
?>