<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Visita_model extends CI_Model
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
		function registrar_visita($datos){
			$campos= array(
				'visita_doc'=>$datos['visita_doc'],
				'visita_f_visita'=>$datos['visita_f_visita'],
				'visita_h_visita'=>$datos['visita_h_visita'],
				'visita_control_liquidos'=>$datos['visita_control_liquidos'],
				'visita_fc'=>$datos['visita_fc'],
				'visita_fr'=>$datos['visita_fr'],
				'visita_t'=>$datos['visita_t'],
				'visita_ta'=>$datos['visita_ta'],
				'visita_saturacion'=>$datos['visita_saturacion'],
				'visita_glucometria'=>$datos['visita_glucometria'],
				'visita_nota'=>$datos['visita_nota'],
				'visita_f_reg'=>$datos['visita_f_reg'],
				'visita_h_reg'=>$datos['visita_h_reg'],
				'visita_h_inicio'=>$datos['visita_h_inicio'],
				'visita_created_user'=>$datos['visita_created_user'],
				'visita_update_user'=>$datos['visita_update_user']
				);
			
			$rs=$this->db->insert('visita',$campos);

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
		function actualizar_cita($datos){
			$aux=$datos['id_agenda'];
			$campos= array('nombres' => $datos['nombres'],
				'tipo_cita' => $datos['tipo_cita'],
				'f_cita' => $datos['f_cita'],
				'h_cita' => $datos['h_cita'],
				'celular' => $datos['celular'],
				'nota_cita' => $datos['nota_cita'],
				'estado_cita' => $datos['estado_cita']);
		
			$this->db->where('id_agenda',$aux);
			$query=$this->db->update('agenda',$campos);
			return $query;
		}
		function eliminar_cita($id){
			$this->db->delete('agenda',array('id_agenda'=>$id));
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
		function consultar_separados_visitas($start,$length,$seach,$direccion,$cual){
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
				$columna="visita.visita_f_reg";
			}
			
			$busqueda="";
			if($seach)
			{
				$busqueda=" WHERE estado_paciente='0' and doc_paciente LIKE '%".$seach."%' ";
				$consulta="SELECT paciente.doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente,visita.* FROM visita INNER JOIN paciente ON visita.visita_doc=paciente.doc_paciente WHERE doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT paciente.doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente,visita.* FROM visita INNER JOIN paciente ON visita.visita_doc=paciente.doc_paciente  "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);
			// return $r;

			$total="SELECT COUNT(*) id_visita FROM visita ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_visita;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );
			return $resultado;			
		}
		function consultar_visita($id){
			$this->db->where("id_visita",$id);
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
	}
?>