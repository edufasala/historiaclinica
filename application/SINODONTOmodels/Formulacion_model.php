<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Formulacion_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function buscar_paciente_nombres_prf($busqueda){
			// $this->db->like("doc_paciente",$busqueda);
			// $this->db->like("pnombre_paciente",$busqueda);
			// $this->db->where("id_paciente!=",'PC0000');
			// $consulta=$this->db->get("paciente");
			if($busqueda)
			{
				$consulta="SELECT * FROM paciente WHERE doc_paciente LIKE '%".$busqueda."%' or pnombre_paciente LIKE '%".$busqueda."%' or snombre_paciente LIKE '%".$busqueda."%'";
			}
			else
			{
				$consulta="SELECT * FROM paciente WHERE id_paciente!='PC0000' ";
			}
			$r=$this->db->query($consulta);
			// $this->db->like("doc_paciente",$busqueda);
			// $this->db->like("pnombre_paciente",$busqueda);
			// $this->db->where("id_paciente!=",'PC0000');
			// $r=$this->db->get("paciente");
			// $this->db->where("id_paciente!=",'PC0000');
			// $this->db->where("doc_paciente", "LIKE %".$busqueda."%");
			// $r=$this->db->get("paciente");
			return $r->result();
		}
		function buscar_paciente_nombres($busqueda){
			if($busqueda)
			{
				$consulta="SELECT paciente.doc_paciente,paciente.tipo_doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente,paciente.estado_paciente FROM paciente WHERE doc_paciente LIKE '%".$busqueda."%' or pnombre_paciente LIKE '%".$busqueda."%' or snombre_paciente LIKE '%".$busqueda."%' or papellido_paciente LIKE '%".$busqueda."%' or sapellido_paciente LIKE '%".$busqueda."%'";
			}
			else
			{
				$consulta="SELECT paciente.doc_paciente,paciente.tipo_doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente,paciente.estado_paciente FROM paciente WHERE id_paciente!='PC0000' ";
				// SELECT hc_pad.pad_documento,paciente.pnombre_paciente,paciente.papellido_paciente,hc_concentimiento.id_hc_concentimiento,hc_barthel.id_hc_barthel,hc_valoracion.id_hc_valoracion,hc_norton.id_hc_norton,hc_braden.id_hc_braden FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente INNER JOIN hc_concentimiento ON hc_concentimiento.concentimiento_doc=paciente.doc_paciente INNER JOIN hc_barthel ON hc_barthel.barthel_doc=paciente.doc_paciente INNER JOIN hc_valoracion ON hc_valoracion.valoracion_doc=paciente.doc_paciente INNER JOIN hc_norton ON hc_norton.norton_doc=paciente.doc_paciente INNER JOIN hc_braden ON hc_braden.braden_doc=paciente.doc_paciente
			}
			$r=$this->db->query($consulta);
			return $r->result();
		}
		function consultar_medicamentos_nombres($busqueda){
			if($busqueda)
			{
				// $this->db->like("nombre",$busqueda);
				$consulta="SELECT * FROM medicamentos WHERE nombre LIKE '%".$busqueda."%' ";
			}
			else
			{
				$consulta="SELECT * FROM medicamentos LIMIT 0,1";
			}
			$consulta=$this->db->query($consulta);
			return $consulta->result();
		}
		function registrar_f($datos){
			$campos= array(
					'formulacion_doc'=>$datos['formulacion_doc'],
					'formulacion_lista'=>$datos['formulacion_lista'],
					// 'formulacion_radicacion'=>$datos['formulacion_radicacion'],
					'formulacion_f_reg'=>$datos['formulacion_f_reg'],
					'formulacion_h_reg'=>$datos['formulacion_h_reg'],
					'formulacion_f_v'=>$datos['formulacion_f_v'],
					'formulacion_created_user'=>$datos['formulacion_created_user'],
					'formulacion_update_user'=>$datos['formulacion_update_user']
					);
				
				$rs=$this->db->insert('formulacion',$campos);

				return $rs;
			
		}
		
		function consultar_separados_f($start,$length,$seach,$direccion,$cual,$doc){
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
				$columna="formulacion.formulacion_f_reg";
			}
			
			$busqueda="";
			if($seach)
			{
				$busqueda=" WHERE estado_paciente='0' and doc_paciente LIKE '%".$seach."%' ";
				// $consulta="SELECT paciente.doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente,formulacion.* FROM formulacion INNER JOIN paciente ON formulacion.formulacion_doc=paciente.doc_paciente WHERE doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT paciente.doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente,formulacion.* FROM formulacion INNER JOIN paciente ON formulacion.formulacion_doc=paciente.doc_paciente and formulacion_doc='".$doc."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);
			// return $r;

			$total="SELECT COUNT(*) id FROM formulacion WHERE formulacion_doc='".$doc."' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );
			return $resultado;			
		}
		function consultar_separados_f_2($start,$length,$seach,$direccion,$cual,$doc){
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
				$columna="hc_pad.pad_f_reg";
			}
			
			$busqueda="";
			if($seach)
			{
				$busqueda=" WHERE estado_paciente='0' and doc_paciente LIKE '%".$seach."%' ";
				// $consulta="SELECT paciente.doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente,hc_pad.* FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente WHERE doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT paciente.doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente,hc_pad.* FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente and id_hc_pad!='PAD0000' and pad_documento='".$doc."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);
			// return $r;

			$total="SELECT COUNT(*) id_hc_pad FROM hc_pad WHERE id_hc_pad!='PAD0000' and pad_documento='".$doc."' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_pad;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );
			return $resultado;			
		}
		function consultar_f($id){
			$this->db->where("id",$id);
			$consulta=$this->db->get("formulacion");
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