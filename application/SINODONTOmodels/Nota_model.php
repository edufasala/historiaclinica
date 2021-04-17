<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Nota_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function buscar_paciente_nombres($busqueda){
			// $this->db->like("doc_paciente",$busqueda);
			// $this->db->like("pnombre_paciente",$busqueda);
			// $this->db->where("id_paciente!=",'PC0000');
			// $consulta=$this->db->get("paciente");
			if($busqueda)
			{
				$consulta="SELECT hc_pad.pad_documento,paciente.tipo_doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente,hc_concentimiento.id_hc_concentimiento,hc_barthel.id_hc_barthel,hc_valoracion.id_hc_valoracion,hc_norton.id_hc_norton,hc_braden.id_hc_braden FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente INNER JOIN hc_concentimiento ON hc_concentimiento.concentimiento_doc=paciente.doc_paciente INNER JOIN hc_barthel ON hc_barthel.barthel_doc=paciente.doc_paciente INNER JOIN hc_valoracion ON hc_valoracion.valoracion_doc=paciente.doc_paciente INNER JOIN hc_norton ON hc_norton.norton_doc=paciente.doc_paciente INNER JOIN hc_braden ON hc_braden.braden_doc=paciente.doc_paciente WHERE doc_paciente LIKE '%".$busqueda."%' or pnombre_paciente LIKE '%".$busqueda."%' or snombre_paciente LIKE '%".$busqueda."%' or papellido_paciente LIKE '%".$busqueda."%' or sapellido_paciente LIKE '%".$busqueda."%'";
			}
			else
			{
				$consulta="SELECT hc_pad.pad_documento,paciente.tipo_doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente,hc_concentimiento.id_hc_concentimiento,hc_barthel.id_hc_barthel,hc_valoracion.id_hc_valoracion,hc_norton.id_hc_norton,hc_braden.id_hc_braden FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente INNER JOIN hc_concentimiento ON hc_concentimiento.concentimiento_doc=paciente.doc_paciente INNER JOIN hc_barthel ON hc_barthel.barthel_doc=paciente.doc_paciente INNER JOIN hc_valoracion ON hc_valoracion.valoracion_doc=paciente.doc_paciente INNER JOIN hc_norton ON hc_norton.norton_doc=paciente.doc_paciente INNER JOIN hc_braden ON hc_braden.braden_doc=paciente.doc_paciente WHERE id_paciente!='PC0000' ";
				// SELECT hc_pad.pad_documento,paciente.pnombre_paciente,paciente.papellido_paciente,hc_concentimiento.id_hc_concentimiento,hc_barthel.id_hc_barthel,hc_valoracion.id_hc_valoracion,hc_norton.id_hc_norton,hc_braden.id_hc_braden FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente INNER JOIN hc_concentimiento ON hc_concentimiento.concentimiento_doc=paciente.doc_paciente INNER JOIN hc_barthel ON hc_barthel.barthel_doc=paciente.doc_paciente INNER JOIN hc_valoracion ON hc_valoracion.valoracion_doc=paciente.doc_paciente INNER JOIN hc_norton ON hc_norton.norton_doc=paciente.doc_paciente INNER JOIN hc_braden ON hc_braden.braden_doc=paciente.doc_paciente
			}
			$r=$this->db->query($consulta);
			return $r->result();
		}
		function registrar_nota($datos){
			$campos= array(
				'nota_doc'=>$datos['nota_doc'],
				'nota_f_nota'=>$datos['nota_f_nota'],
				'nota_h_nota'=>$datos['nota_h_nota'],
				'nota_nota'=>$datos['nota_nota'],
				'nota_f_reg'=>$datos['nota_f_reg'],
				'nota_h_reg'=>$datos['nota_h_reg'],
				'nota_created_user'=>$datos['nota_created_user'],
				'nota_update_user'=>$datos['nota_update_user']
				);
			
			$rs=$this->db->insert('nota',$campos);

			return $rs;
		}
		function consultar_todos(){
			$consulta=$this->db->get("visita");
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
		function consultar_separados_notas($start,$length,$seach,$direccion,$cual){
			$columna="";
			if($cual==0)
			{
				$columna="paciente.doc_paciente";
			}
			else if($cual==1)
			{
				$columna="paciente.pnombre_paciente";
			}
			else if($cual==2)
			{
				$columna="paciente.papellido_paciente";
			}
			else if($cual==3)
			{
				$columna="nota.nota_f_reg";
			}
			
			$busqueda="";
			if($seach)
			{
				$busqueda=" WHERE estado_paciente='0' and doc_paciente LIKE '%".$seach."%' ";
				$consulta="SELECT paciente.doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente,nota.* FROM nota INNER JOIN paciente ON nota.nota_doc=paciente.doc_paciente WHERE doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT paciente.doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente,nota.* FROM nota INNER JOIN paciente ON nota.nota_doc=paciente.doc_paciente  "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);
			// return $r;

			$total="SELECT COUNT(*) id_nota FROM nota ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_nota;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );
			return $resultado;			
		}
		function consultar_nota($id){
			$this->db->where("id_nota",$id);
			$consulta=$this->db->get("nota");
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
	}
?>