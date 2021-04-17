<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Agenda_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function registrar_cita($datos){
			$aux=$this->session->userdata('s_id');
			$qpf=$datos['agenda_nombres_profesional'];
			$ctfch=$datos['agenda_f_cita'];
			$cthr=$datos['agenda_h_cita'];

			$existe="SELECT agenda_nombres_profesional FROM agenda WHERE agenda_nombres_profesional='".$qpf."' and agenda_f_cita='".$ctfch."' and agenda_h_cita='".$cthr."' ";
			$resultado=$this->db->query($existe);
			
			
			if($resultado->num_rows()==1)
			{
				$resultado=$resultado->row();
				$result=$resultado->agenda_nombres_profesional;
			}
			else
			{
				$result="";
			}

			if($result)
			{
				return 1;
			}
			else
			{
				$campos= array(
				'agenda_nombres'=>$datos['agenda_nombres'],
				'agenda_nombres_profesional'=>$datos['agenda_nombres_profesional'],
				'agenda_tipo_cita' => $datos['agenda_tipo_cita'], 
				'agenda_f_cita'=>$datos['agenda_f_cita'],
				'agenda_h_cita'=>$datos['agenda_h_cita'],
				'agenda_celular'=>$datos['agenda_celular'],
				'agenda_nota_cita'=>$datos['agenda_nota_cita'],
				'agenda_estado_cita'=>'p',
				'agenda_f_reg'=>$datos['agenda_f_reg'],
				'agenda_h_reg'=>$datos['agenda_h_reg'],
				'agenda_created_user'=>$aux,
				'agenda_update_user'=>$aux);
			
				$rs=$this->db->insert('agenda',$campos);
				// return $rs;
				return 0;
			}
			
		}
		function consultar_todos(){
			$consulta=$this->db->get("agenda");
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();
			}
			else
			{
				return false;
			}
		}
		function actualizar_cita($datos){
			$aux=$datos['id'];
			$campos= array(
				// 'agenda_nombres' => $datos['agenda_nombres'],
				'agenda_tipo_cita' => $datos['agenda_tipo_cita'],
				'agenda_f_cita' => $datos['agenda_f_cita'],
				'agenda_h_cita' => $datos['agenda_h_cita'],
				'agenda_celular' => $datos['agenda_celular'],
				'agenda_nota_cita' => $datos['agenda_nota_cita'],
				'agenda_estado_cita' => $datos['agenda_estado_cita']);
		
			$this->db->where('id',$aux);
			$query=$this->db->update('agenda',$campos);
			return $query;
		}
		function eliminar_cita($id){
			$this->db->delete('agenda',array('id'=>$id));
		}
		function consultar_cita_dia(){
			date_default_timezone_set("America/Bogota");
	        $now = time();
	        $getfecha=date("Y-m-d");
			$this->db->where("f_cita",$getfecha);
			$consulta=$this->db->get("agenda");
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();
			}
			else
			{
				return false;
			}
		}
		function consultar_cita_nombres($busqueda){
			$this->db->like("nombres",$busqueda);
			$consulta=$this->db->get("agenda");
			return $consulta->result();
			// return $busqueda;
		}
		function consultar_cita_todas(){
			$consulta=$this->db->get("agenda");
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();
			}
			else
			{
				return false;
			}
		}
		function consultar_estadisticas(){
			date_default_timezone_set("America/Bogota");
	        $now = time();
	        $getfecha=date("Y-m-d");
			// $fecha="2020-02-13";
			$consulta="SELECT COUNT(*) id_agenda FROM agenda WHERE estado_cita='atendidad' and f_cita='".$getfecha."' ";
			$r=$this->db->query($consulta);
			$r=$r->row();
			$r=$r->id_agenda;

			$total="SELECT COUNT(*) id_agenda FROM agenda WHERE f_cita='".$getfecha."' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_agenda;

			$consulta2="SELECT COUNT(*) id_agenda FROM agenda WHERE estado_cita='cancelada' and f_cita='".$getfecha."' ";
			$r3=$this->db->query($consulta2);
			$r3=$r3->row();
			$r3=$r3->id_agenda;

			// $consulta3="SELECT COUNT(*) id_agenda FROM paciente WHERE estado_cita='cancelada' and f_cita='".$fecha."' ";
			// $r4=$this->db->query($consulta3);
			// $r4=$r4->row();
			// $r4=$r4->id_agenda;

			$resultado=array('atencion_hoy' => $r,
					'citas_hoy'=>$r2,
					'canceladas_hoy'=>$r3 );
			// $resultado=$r+$r2+$r3;
			
			return $resultado;			
		}
		function consultar_separados_agenda($start,$length,$seach,$direccion,$cual){
			date_default_timezone_set("America/Bogota");
	        $now = time();
	        $getfecha=date("Y-m-d");
			$columna="";
			if($cual==0)
			{
				$columna="agenda_nombres";
			}
			else if($cual==1)
			{
				$columna="agenda_tipo_cita";
			}
			else if($cual==2)
			{
				$columna="registro_usuarios.registro_nombres";
			}
			else if($cual==3)
			{
				$columna="agenda_f_cita";
			}
			else if($cual==4)
			{
				$columna="agenda_h_cita";
			}
			else if($cual==5)
			{
				$columna="agenda_nota_cita";
			}
			else if($cual==6)
			{
				$columna="agenda_celular";
			}
			else if($cual==7)
			{
				$columna="agenda_estado_cita";
			}
			else if($cual==8)
			{
				$columna="agenda_estado_cita";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				$consulta="SELECT agenda.*,paciente.pnombre_paciente,paciente.snombre_paciente,paciente.papellido_paciente,paciente.sapellido_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos FROM agenda INNER JOIN paciente ON agenda.agenda_nombres=paciente.doc_paciente INNER JOIN registro_usuarios ON agenda.agenda_nombres_profesional=registro_usuarios.id WHERE paciente.pnombre_paciente and agenda.agenda_f_cita='".$getfecha."' and agenda_nombres LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT agenda.*,paciente.pnombre_paciente,paciente.snombre_paciente,paciente.papellido_paciente,paciente.sapellido_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos FROM agenda INNER JOIN paciente ON agenda.agenda_nombres=paciente.doc_paciente INNER JOIN registro_usuarios ON agenda.agenda_nombres_profesional=registro_usuarios.id WHERE agenda_f_cita='".$getfecha."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id FROM agenda WHERE agenda_f_cita='".$getfecha."' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_agenda2($start,$length,$seach,$direccion,$cual,$getfecha){
			
			$columna="";
			if($cual==0)
			{
				$columna="agenda_nombres";
			}
			else if($cual==1)
			{
				$columna="agenda_tipo_cita";
			}
			else if($cual==2)
			{
				$columna="registro_usuarios.registro_nombres";
			}
			else if($cual==3)
			{
				$columna="agenda_f_cita";
			}
			else if($cual==4)
			{
				$columna="agenda_h_cita";
			}
			else if($cual==5)
			{
				$columna="agenda_nota_cita";
			}
			else if($cual==6)
			{
				$columna="agenda_celular";
			}
			else if($cual==7)
			{
				$columna="agenda_estado_cita";
			}
			else if($cual==8)
			{
				$columna="agenda_estado_cita";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				$consulta="SELECT agenda.*,paciente.pnombre_paciente,paciente.snombre_paciente,paciente.papellido_paciente,paciente.sapellido_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos FROM agenda INNER JOIN paciente ON agenda.agenda_nombres=paciente.doc_paciente INNER JOIN registro_usuarios ON agenda.agenda_nombres_profesional=registro_usuarios.id WHERE paciente.pnombre_paciente and agenda_f_cita='".$getfecha."' and agenda_nombres LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT agenda.*,paciente.pnombre_paciente,paciente.snombre_paciente,paciente.papellido_paciente,paciente.sapellido_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos FROM agenda INNER JOIN paciente ON agenda.agenda_nombres=paciente.doc_paciente INNER JOIN registro_usuarios ON agenda.agenda_nombres_profesional=registro_usuarios.id WHERE agenda_f_cita='".$getfecha."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id FROM agenda WHERE agenda_f_cita='".$getfecha."' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_agenda_p($start,$length,$seach,$direccion,$cual,$id){
			date_default_timezone_set("America/Bogota");
          	$now = time();
          	$getfecha=date("Y-m-d");
			$columna="";
			if($cual==0)
			{
				$columna="agenda_nombres";
			}
			else if($cual==1)
			{
				$columna="agenda_tipo_cita";
			}
			else if($cual==2)
			{
				$columna="registro_usuarios.registro_nombres";
			}
			else if($cual==3)
			{
				$columna="agenda_f_cita";
			}
			else if($cual==4)
			{
				$columna="agenda_h_cita";
			}
			else if($cual==5)
			{
				$columna="agenda_nota_cita";
			}
			else if($cual==6)
			{
				$columna="agenda_celular";
			}
			else if($cual==7)
			{
				$columna="agenda_estado_cita";
			}
			else if($cual==8)
			{
				$columna="agenda_estado_cita";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				$consulta="SELECT agenda.*,paciente.pnombre_paciente,paciente.snombre_paciente,paciente.papellido_paciente,paciente.sapellido_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos FROM agenda INNER JOIN paciente ON agenda.agenda_nombres=paciente.doc_paciente INNER JOIN registro_usuarios ON agenda.agenda_nombres_profesional=registro_usuarios.id WHERE agenda.agenda_nombres_profesional='".$id."' and agenda_f_cita='".$getfecha."' and paciente.pnombre_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT agenda.*,paciente.pnombre_paciente,paciente.snombre_paciente,paciente.papellido_paciente,paciente.sapellido_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos FROM agenda INNER JOIN paciente ON agenda.agenda_nombres=paciente.doc_paciente INNER JOIN registro_usuarios ON agenda.agenda_nombres_profesional=registro_usuarios.id and agenda_nombres_profesional='".$id."' and agenda_f_cita='".$getfecha."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id FROM agenda WHERE agenda_nombres_profesional='".$id."' and agenda_f_cita='".$getfecha."'";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_agenda_p2($start,$length,$seach,$direccion,$cual,$id,$getfecha){
			// date_default_timezone_set("America/Bogota");
   //        	$now = time();
   //        	$getfecha=date("Y-m-d");
			$columna="";
			if($cual==0)
			{
				$columna="agenda_nombres";
			}
			else if($cual==1)
			{
				$columna="agenda_tipo_cita";
			}
			else if($cual==2)
			{
				$columna="registro_usuarios.registro_nombres";
			}
			else if($cual==3)
			{
				$columna="agenda_f_cita";
			}
			else if($cual==4)
			{
				$columna="agenda_h_cita";
			}
			else if($cual==5)
			{
				$columna="agenda_nota_cita";
			}
			else if($cual==6)
			{
				$columna="agenda_celular";
			}
			else if($cual==7)
			{
				$columna="agenda_estado_cita";
			}
			else if($cual==8)
			{
				$columna="agenda_estado_cita";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				$consulta="SELECT agenda.*,paciente.pnombre_paciente,paciente.snombre_paciente,paciente.papellido_paciente,paciente.sapellido_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos FROM agenda INNER JOIN paciente ON agenda.agenda_nombres=paciente.doc_paciente INNER JOIN registro_usuarios ON agenda.agenda_nombres_profesional=registro_usuarios.id WHERE agenda.agenda_nombres_profesional='".$id."' and agenda_f_cita='".$getfecha."' and paciente.pnombre_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT agenda.*,paciente.pnombre_paciente,paciente.snombre_paciente,paciente.papellido_paciente,paciente.sapellido_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos FROM agenda INNER JOIN paciente ON agenda.agenda_nombres=paciente.doc_paciente INNER JOIN registro_usuarios ON agenda.agenda_nombres_profesional=registro_usuarios.id and agenda_nombres_profesional='".$id."' and agenda_f_cita='".$getfecha."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id FROM agenda WHERE agenda_nombres_profesional='".$id."' and agenda_f_cita='".$getfecha."'";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_pacientes(){
			$this->db->where("estado_paciente","1");
			$consulta=$this->db->get("paciente");
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();
			}
			else
			{
				return false;
			}
		}
		function consultar_profesional(){
			$consulta="SELECT * FROM registro_usuarios WHERE registro_tipo!='1' and registro_tipo!='4' and registro_estado='1'  ";
			// $r=$this->db->query($consulta);
			// $r=$r->row();
			// $r=$r->id_agenda;
			// $this->db->where("registro_tipo","2");
			// $this->db->where("registro_tipo","3");
			$consulta2=$this->db->query($consulta);
			return $consulta2->result();
			if($consulta2->num_rows()>0)
			{
				return $consulta2->result();
			}
			else
			{
				return false;
			}
		}
	}
?>