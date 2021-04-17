<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Registro_model extends CI_Model
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
				$consulta="SELECT * FROM paciente WHERE doc_paciente LIKE '%".$busqueda."%' or pnombre_paciente LIKE '%".$busqueda."%' or snombre_paciente LIKE '%".$busqueda."%' or papellido_paciente LIKE '%".$busqueda."%' or sapellido_paciente LIKE '%".$busqueda."%'";
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
		//para todos
		function consultar_historia_pad($id,$ff){
			$this->db->where("id_hc_pad",$id);
			// $this->db->where("pad_documento",$id);
			// $this->db->where("pad_f_reg",$ff);
			$consulta=$this->db->get("hc_pad");
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();//->row();
			}
			else
			{
				return false;
			}
		}
		function consultar_historia_pad_odonto($id,$ff){
			$this->db->where("id_ev",$id);
			$consulta=$this->db->get("odonto");
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();//->row();
			}
			else
			{
				return false;
			}
		}	
		function consultar_historia_pad_visitaodonto($id,$ff){
			$this->db->where("id_vis",$id);
			$consulta=$this->db->get("visitaodonto");
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();//->row();
			}
			else
			{
				return false;
			}
		}
		function consultar_historia_barthel($id,$ff){
			$this->db->where("barthel_doc",$id);
			$this->db->where("barthel_f_reg",$ff);
			$consulta=$this->db->get("hc_barthel");
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();//->row();
			}
			else
			{
				return false;
			}
		}
		function consultar_historia_valoracion($id,$ff){
			$this->db->where("valoracion_doc",$id);
			$this->db->where("valoracion_f_reg",$ff);
			$consulta=$this->db->get("hc_valoracion");
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();//->row();
			}
			else
			{
				return false;
			}
		}
		function consultar_historia_norton($id,$ff){
			$this->db->where("norton_doc",$id);
			$this->db->where("norton_f_reg",$ff);
			$consulta=$this->db->get("hc_norton");
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();//->row();
			}
			else
			{
				return false;
			}
		}
		function consultar_historia_braden($id,$ff){
			$this->db->where("braden_doc",$id);
			$this->db->where("braden_f_reg",$ff);
			$consulta=$this->db->get("hc_braden");
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();//->row();
			}
			else
			{
				return false;
			}
		}
		function consultar_historia_pad_enf($id,$ff){
			$this->db->where("id_hc_enf_pad",$id);
			// $this->db->where("enf_pad_doc",$id);
			// $this->db->where("enf_pad_f_reg",$ff);
			$consulta=$this->db->get("hc_enf_pad");
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();//->row();
			}
			else
			{
				return false;
			}
		}
		function consultar_historia_valoracion_enf($id,$ff){
			$this->db->where("enf_valoracion_doc",$id);
			$this->db->where("enf_valoracion_f_reg",$ff);
			$consulta=$this->db->get("hc_enf_valoracion");
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();//->row();
			}
			else
			{
				return false;
			}
		}
		function consultar_historia_escala_enf($id,$ff){
			$this->db->where("enf_escala_doc",$id);
			$this->db->where("enf_escala_f_reg",$ff);
			$consulta=$this->db->get("hc_enf_escala");
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();//->row();
			}
			else
			{
				return false;
			}
		}
		function consultar_historia_intervencion_enf($id,$ff){
			$this->db->where("enf_intervencion_doc",$id);
			$this->db->where("enf_intervencion_f_reg",$ff);
			$consulta=$this->db->get("hc_enf_intervencion");
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();//->row();
			}
			else
			{
				return false;
			}
		}

		function consultar_todos(){
			$consulta=$this->db->get("cie");
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();//->row();
			}
			else
			{
				return false;
			}

			// $this->db->where('id_galeria',$id);
			// $query=$this->db->get('galeria');
			// if($query->num_rows()>0) return $query;
			// else return false;
		}
		function consultar_separados_hc_general($start,$length,$seach,$direccion,$cual){
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
				$columna="hc_pad.pad_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				// $consulta="SELECT hc_pad.id_hc_pad,hc_pad.pad_documento,hc_pad.pad_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,hc_barthel.id_hc_barthel,hc_valoracion.id_hc_valoracion,hc_norton.id_hc_norton,hc_braden.id_hc_braden FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente INNER JOIN hc_barthel ON hc_barthel.barthel_doc=paciente.doc_paciente INNER JOIN hc_valoracion ON hc_valoracion.valoracion_doc=paciente.doc_paciente INNER JOIN hc_norton ON hc_norton.norton_doc=paciente.doc_paciente INNER JOIN hc_braden ON hc_braden.braden_doc=paciente.doc_paciente and paciente.doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
				$consulta="SELECT hc_pad.id_hc_pad,hc_pad.pad_documento,hc_pad.pad_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente WHERE hc_pad_cod='1' and doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				// $consulta="SELECT hc_pad.id_hc_pad,hc_pad.pad_documento,hc_pad.pad_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,hc_barthel.id_hc_barthel,hc_valoracion.id_hc_valoracion,hc_norton.id_hc_norton,hc_braden.id_hc_braden FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente INNER JOIN hc_barthel ON hc_barthel.barthel_f_reg=hc_pad.pad_f_reg INNER JOIN hc_valoracion ON hc_valoracion.valoracion_f_reg=hc_pad.pad_f_reg INNER JOIN hc_norton ON hc_norton.norton_f_reg=hc_pad.pad_f_reg INNER JOIN hc_braden ON hc_braden.braden_f_reg=hc_pad.pad_f_reg and id_hc_pad!='PAD0000' and hc_pad_cod='1'"." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
				$consulta="SELECT hc_pad.id_hc_pad,hc_pad.pad_documento,hc_pad.pad_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente and id_hc_pad!='PAD0000' and hc_pad_cod='1'"." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_pad FROM hc_pad WHERE id_hc_pad!='PAD0000' and hc_pad_cod='1'";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_pad;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_hc_pad($start,$length,$seach,$direccion,$cual,$doc){
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
				$columna="hc_pad.pad_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				$busqueda=" WHERE hc_pad_cod='1' and documento LIKE '%".$seach."%' or nombres_apellidos LIKE '%".$seach."%'";
				// $consulta="SELECT hc_pad.id_hc_pad,hc_pad.pad_documento,hc_pad.hc_pad_cod,hc_pad.pad_diagnosticos,hc_pad.pad_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_pad.pad_created_user=registro_usuarios.id and paciente.doc_paciente WHERE doc_paciente LIKE '%".$seach."%' or pnombre_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
				// la consulta genera problemas con or paciente.pnombre_paciente LIKE '%".$seach."%' 
			}
			else
			{
				$consulta="SELECT hc_pad.id_hc_pad,hc_pad.pad_documento,hc_pad.hc_pad_cod,hc_pad.pad_diagnosticos,hc_pad.pad_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_pad.pad_created_user=registro_usuarios.id and id_hc_pad!='PAD0000' and pad_documento='".$doc."'  "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			// $consulta="SELECT * FROM hc_pad ".$busqueda." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_pad FROM hc_pad WHERE id_hc_pad!='PAD0000' and pad_documento='".$doc."'  ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_pad;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			// $consulta="SELECT hc_pad.nro_hc,paciente.* FROM hc INNER JOIN paciente ON hc.id_hc='HC0001' and paciente.nombres LIKE '%".$search."%' ";
			// $rs=$this->db->query($consulta);
			// $this->db->select('hc_pad.*,p.*');
		 //    $this->db->from('hc_pad h');
		 //    $this->db->join('paciente p','p.doc_paciente=h.pad_documento');
		 //    $this->db->where("id_hc_pad!=",'PAD0000');
			// $this->db->like("p.doc_paciente",$seach);
			// $consulta=$this->db->get();

			return $resultado;			
		}
		function consultar_separados_hc_pad_odonto($start,$length,$seach,$direccion,$cual,$doc){
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
				$columna="odonto.evolucion_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				$busqueda="WHERE nro_hc='1' and documento LIKE '%".$seach."%' or nombres_apellidos LIKE '%".$seach."%'";
			}
			else
			{
				$consulta="SELECT odonto.id_ev,odonto.evolucion_doc,odonto.nro_hc,odonto.evolucion_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad FROM odonto INNER JOIN paciente ON odonto.evolucion_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON odonto.evolucion_created_user=registro_usuarios.id and id_ev!='ODO0000' and evolucion_doc='".$doc."'  "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}

			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_ev FROM odonto WHERE id_ev!='ODO0000' and evolucion_doc='".$doc."'  ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_ev;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}	
		function consultar_separados_hc_pad_visitaodonto($start,$length,$seach,$direccion,$cual,$doc){
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
				$columna="visitaodonto.visita_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				$busqueda="WHERE nro_hc='1' and documento LIKE '%".$seach."%' or nombres_apellidos LIKE '%".$seach."%'";
			}
			else
			{
				$consulta="SELECT visitaodonto.id_vis,visitaodonto.visita_doc,visitaodonto.nro_hc,visitaodonto.visita_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad FROM visitaodonto INNER JOIN paciente ON visitaodonto.visita_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON visitaodonto.visita_created_user=registro_usuarios.id and id_vis!='VIS0000' and visita_doc='".$doc."'  "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}

			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_vis FROM visitaodonto WHERE id_vis!='VIS0000' and visita_doc='".$doc."'  ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_vis;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_hc_concentimiento($start,$length,$seach,$direccion,$cual){
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
				$columna="hc_concentimiento.concentimiento_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				$consulta="SELECT hc_concentimiento.id_hc_concentimiento,hc_concentimiento.concentimiento_doc,hc_concentimiento.concentimiento_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_concentimiento INNER JOIN paciente ON hc_concentimiento.concentimiento_doc=paciente.doc_paciente and paciente.doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_concentimiento.id_hc_concentimiento,hc_concentimiento.concentimiento_doc,hc_concentimiento.concentimiento_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_concentimiento INNER JOIN paciente ON hc_concentimiento.concentimiento_doc=paciente.doc_paciente and id_hc_concentimiento!='CON0000'"." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_concentimiento FROM hc_concentimiento WHERE id_hc_concentimiento!='CON0000' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_concentimiento;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_hc_barthel($start,$length,$seach,$direccion,$cual,$doc){
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
				$columna="hc_barthel.barthel_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				// $consulta="SELECT hc_barthel.id_hc_barthel,hc_barthel.barthel_doc,hc_barthel.hc_barthel_cod,hc_barthel.barthel_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad,hc_pad.pad_diagnosticos FROM hc_barthel INNER JOIN paciente ON hc_barthel.barthel_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_barthel.barthel_created_user=registro_usuarios.id INNER JOIN hc_pad ON hc_pad.hc_pad_cod=hc_barthel.hc_barthel_cod and hc_pad.pad_f_reg=hc_barthel.barthel_f_reg and paciente.doc_paciente WHERE doc_paciente LIKE '%".$seach."%' or pnombre_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_barthel.id_hc_barthel,hc_barthel.barthel_doc,hc_barthel.hc_barthel_cod,hc_barthel.barthel_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad,hc_pad.pad_diagnosticos FROM hc_barthel INNER JOIN paciente ON hc_barthel.barthel_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_barthel.barthel_created_user=registro_usuarios.id INNER JOIN hc_pad ON hc_pad.hc_pad_cod=hc_barthel.hc_barthel_cod and hc_pad.pad_f_reg=hc_barthel.barthel_f_reg and id_hc_barthel!='BT0000' and barthel_doc='".$doc."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_barthel FROM hc_barthel WHERE id_hc_barthel!='BT0000' and barthel_doc='".$doc."' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_barthel;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_hc_valoracion($start,$length,$seach,$direccion,$cual,$doc){
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
				$columna="hc_valoracion.valoracion_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				// $consulta="SELECT hc_valoracion.id_hc_valoracion,hc_valoracion.valoracion_diagnosticos,hc_valoracion.hc_valoracion_cod,hc_valoracion.valoracion_doc,hc_valoracion.valoracion_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad FROM hc_valoracion INNER JOIN paciente ON hc_valoracion.valoracion_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_valoracion.valoracion_created_user=registro_usuarios.id and paciente.doc_paciente WHERE doc_paciente LIKE '%".$seach."%' or pnombre_paciente LIKE '%".$seach."%'  "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_valoracion.id_hc_valoracion,hc_valoracion.valoracion_diagnosticos,hc_valoracion.hc_valoracion_cod,hc_valoracion.valoracion_doc,hc_valoracion.valoracion_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad FROM hc_valoracion INNER JOIN paciente ON hc_valoracion.valoracion_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_valoracion.valoracion_created_user=registro_usuarios.id and id_hc_valoracion!='VAL0000' and valoracion_doc='".$doc."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_valoracion FROM hc_valoracion WHERE id_hc_valoracion!='VAL0000' and valoracion_doc='".$doc."' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_valoracion;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_hc_norton($start,$length,$seach,$direccion,$cual,$doc){
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
				$columna="hc_norton.norton_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				//$consulta="SELECT hc_norton.id_hc_norton,hc_norton.hc_norton_cod,hc_norton.norton_diagnosticos,hc_norton.norton_doc,hc_norton.norton_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad FROM hc_norton INNER JOIN paciente ON hc_norton.norton_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_norton.norton_created_user=registro_usuarios.id and paciente.doc_paciente WHERE doc_paciente LIKE '%".$seach."%' or pnombre_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_norton.id_hc_norton,hc_norton.hc_norton_cod,hc_norton.norton_diagnosticos,hc_norton.norton_doc,hc_norton.norton_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad FROM hc_norton INNER JOIN paciente ON hc_norton.norton_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_norton.norton_created_user=registro_usuarios.id and id_hc_norton!='NT0000' and norton_doc='".$doc."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_norton FROM hc_norton WHERE id_hc_norton!='NT0000' and norton_doc='".$doc."' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_norton;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_hc_braden($start,$length,$seach,$direccion,$cual,$doc){
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
				$columna="hc_braden.braden_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				// $consulta="SELECT hc_braden.id_hc_braden,hc_braden.hc_braden_cod,hc_braden.braden_doc,hc_braden.braden_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad,hc_pad.pad_diagnosticos FROM hc_braden INNER JOIN paciente ON hc_braden.braden_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_braden.braden_created_user=registro_usuarios.id INNER JOIN hc_pad ON hc_pad.hc_pad_cod=hc_braden.hc_braden_cod and hc_pad.pad_documento=hc_braden.braden_doc and paciente.doc_paciente WHERE doc_paciente LIKE '%".$seach."%' or pnombre_paciente LIKE '%".$seach."%'  "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_braden.id_hc_braden,hc_braden.hc_braden_cod,hc_braden.braden_doc,hc_braden.braden_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad,hc_pad.pad_diagnosticos FROM hc_braden INNER JOIN paciente ON hc_braden.braden_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_braden.braden_created_user=registro_usuarios.id INNER JOIN hc_pad ON hc_pad.hc_pad_cod=hc_braden.hc_braden_cod and hc_pad.pad_documento=hc_braden.braden_doc and id_hc_braden!='BR0000' and braden_doc='".$doc."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_braden FROM hc_braden WHERE id_hc_braden!='BR0000' and braden_doc='".$doc."' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_braden;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_ev($start,$length,$seach,$direccion,$cual){
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
				$columna="ev.evolucion_f_reg";
			}
			
			$busqueda="";
			if($seach)
			{
				$busqueda=" WHERE documento LIKE '%".$seach."%' or nombres_apellidos LIKE '%".$seach."%'";
				$consulta="SELECT paciente.tipo_doc_paciente,paciente.doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente,ev.* FROM ev INNER JOIN paciente ON ev.evolucion_doc=paciente.doc_paciente WHERE paciente.doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT paciente.tipo_doc_paciente,paciente.doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente,ev.* FROM ev INNER JOIN paciente ON ev.evolucion_doc=paciente.doc_paciente WHERE id_ev!='EV0000' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);
			// INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente

			$total="SELECT COUNT(*) id_ev FROM ev WHERE id_ev!='EV0000' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_ev;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );
			return $resultado;
		}

		function consultar_separados_hc_enf_general($start,$length,$seach,$direccion,$cual){
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
				$columna="hc_enf_pad.enf_pad_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				// $consulta="SELECT hc_enf_pad.id_hc_enf_pad,hc_enf_pad.enf_pad_doc,hc_enf_pad.enf_pad_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,hc_enf_valoracion.id_hc_enf_valoracion,hc_enf_escala.id_hc_enf_escala,hc_enf_intervencion.id_hc_enf_intervencion FROM hc_enf_pad INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente INNER JOIN hc_enf_valoracion ON hc_enf_valoracion.enf_valoracion_doc=paciente.doc_paciente INNER JOIN hc_enf_escala ON hc_enf_escala.enf_escala_doc=paciente.doc_paciente INNER JOIN hc_enf_intervencion ON hc_enf_intervencion.enf_intervencion_doc=paciente.doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
				$consulta="SELECT hc_enf_pad.id_hc_enf_pad,hc_enf_pad.enf_pad_doc,hc_enf_pad.enf_pad_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_enf_pad INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente WHERE hc_enf_pad_cod='1' and doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				// $consulta="SELECT hc_enf_pad.id_hc_enf_pad,hc_enf_pad.enf_pad_doc,hc_enf_pad.enf_pad_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,hc_enf_valoracion.id_hc_enf_valoracion,hc_enf_escala.id_hc_enf_escala,hc_enf_intervencion.id_hc_enf_intervencion FROM hc_enf_pad INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente INNER JOIN hc_enf_valoracion ON hc_enf_valoracion.enf_valoracion_doc=paciente.doc_paciente INNER JOIN hc_enf_escala ON hc_enf_escala.enf_escala_doc=paciente.doc_paciente INNER JOIN hc_enf_intervencion ON hc_enf_intervencion.enf_intervencion_doc=paciente.doc_paciente and id_hc_enf_pad!='PADE0000'"." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
				$consulta="SELECT hc_enf_pad.id_hc_enf_pad,hc_enf_pad.enf_pad_doc,hc_enf_pad.enf_pad_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_enf_pad INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente and id_hc_enf_pad!='PADE0000' and hc_enf_pad_cod='1' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_enf_pad FROM hc_enf_pad WHERE id_hc_enf_pad!='PADE0000' and hc_enf_pad_cod='1' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_enf_pad;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_hc_enf_pad($start,$length,$seach,$direccion,$cual,$doc){
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
				$columna="hc_enf_pad.enf_pad_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				// $consulta="SELECT hc_enf_pad.id_hc_enf_pad,hc_enf_pad.hc_enf_pad_cod,hc_enf_pad.enf_pad_diagnosticos_enfermera,hc_enf_pad.enf_pad_doc,hc_enf_pad.enf_pad_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad FROM hc_enf_pad INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_enf_pad.enf_pad_created_user=registro_usuarios.id and paciente.doc_paciente and hc_enf_pad.enf_pad_doc WHERE doc_paciente LIKE '%".$seach."%'  or pnombre_paciente LIKE '%".$seach."%'  "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_enf_pad.id_hc_enf_pad,hc_enf_pad.hc_enf_pad_cod,hc_enf_pad.enf_pad_diagnosticos_enfermera,hc_enf_pad.enf_pad_doc,hc_enf_pad.enf_pad_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad FROM hc_enf_pad INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_enf_pad.enf_pad_created_user=registro_usuarios.id and id_hc_enf_pad!='PADE0000' and enf_pad_doc='".$doc."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_enf_pad FROM hc_enf_pad WHERE id_hc_enf_pad!='PADE0000' and enf_pad_doc='".$doc."' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_enf_pad;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );
			return $resultado;			
		}
		function consultar_separados_hc_enf_valoracion($start,$length,$seach,$direccion,$cual,$doc){
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
				$columna="hc_enf_valoracion.enf_valoracion_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				// $consulta="SELECT hc_enf_valoracion.id_hc_enf_valoracion,hc_enf_valoracion.hc_enf_valoracion_cod,hc_enf_valoracion.enf_valoracion_doc,hc_enf_valoracion.enf_valoracion_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad,hc_enf_pad.enf_pad_diagnosticos_enfermera FROM hc_enf_valoracion INNER JOIN paciente ON hc_enf_valoracion.enf_valoracion_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_enf_valoracion.enf_valoracion_created_user=registro_usuarios.id INNER JOIN hc_enf_pad ON hc_enf_pad.hc_enf_pad_cod=hc_enf_valoracion.hc_enf_valoracion_cod and paciente.doc_paciente WHERE doc_paciente LIKE '%".$seach."%' or pnombre_paciente LIKE '%".$seach."%'  "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_enf_valoracion.id_hc_enf_valoracion,hc_enf_valoracion.hc_enf_valoracion_cod,hc_enf_valoracion.enf_valoracion_doc,hc_enf_valoracion.enf_valoracion_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad,hc_enf_pad.enf_pad_diagnosticos_enfermera FROM hc_enf_valoracion INNER JOIN paciente ON hc_enf_valoracion.enf_valoracion_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_enf_valoracion.enf_valoracion_created_user=registro_usuarios.id INNER JOIN hc_enf_pad ON hc_enf_pad.hc_enf_pad_cod=hc_enf_valoracion.hc_enf_valoracion_cod and hc_enf_pad.enf_pad_doc=hc_enf_valoracion.enf_valoracion_doc and id_hc_enf_valoracion!='VALE0000' and enf_valoracion_doc='".$doc."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_enf_valoracion FROM hc_enf_valoracion WHERE id_hc_enf_valoracion!='VALE0000' and enf_valoracion_doc='".$doc."' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_enf_valoracion;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );
			return $resultado;			
		}
		function consultar_separados_hc_enf_escala($start,$length,$seach,$direccion,$cual,$doc){
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
				$columna="hc_enf_escala.enf_escala_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				// $consulta="SELECT hc_enf_escala.id_hc_enf_escala,hc_enf_escala.hc_enf_escala_cod,hc_enf_escala.enf_escala_doc,hc_enf_escala.enf_escala_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad,hc_enf_pad.enf_pad_diagnosticos_enfermera FROM hc_enf_escala INNER JOIN paciente ON hc_enf_escala.enf_escala_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_enf_escala.enf_escala_created_user=registro_usuarios.id INNER JOIN hc_enf_pad ON hc_enf_pad.hc_enf_pad_cod=hc_enf_escala.hc_enf_escala_cod and paciente.doc_paciente WHERE doc_paciente LIKE '%".$seach."%' or pnombre_paciente LIKE '%".$seach."%'  "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_enf_escala.id_hc_enf_escala,hc_enf_escala.hc_enf_escala_cod,hc_enf_escala.enf_escala_doc,hc_enf_escala.enf_escala_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad,hc_enf_pad.enf_pad_diagnosticos_enfermera FROM hc_enf_escala INNER JOIN paciente ON hc_enf_escala.enf_escala_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_enf_escala.enf_escala_created_user=registro_usuarios.id INNER JOIN hc_enf_pad ON hc_enf_pad.hc_enf_pad_cod=hc_enf_escala.hc_enf_escala_cod and hc_enf_pad.enf_pad_doc=hc_enf_escala.enf_escala_doc and id_hc_enf_escala!='ECE0000' and enf_escala_doc='".$doc."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_enf_escala FROM hc_enf_escala WHERE id_hc_enf_escala!='ECE0000' and enf_escala_doc='".$doc."' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_enf_escala;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );
			return $resultado;			
		}
		function consultar_separados_hc_enf_intervencion($start,$length,$seach,$direccion,$cual,$doc){
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
				$columna="hc_enf_intervencion.enf_intervencion_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				// $consulta="SELECT hc_enf_intervencion.id_hc_enf_intervencion,hc_enf_intervencion.hc_enf_intervencion_cod,hc_enf_intervencion.enf_intervencion_diagnosticos_enf,hc_enf_intervencion.enf_intervencion_doc,hc_enf_intervencion.enf_intervencion_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad FROM hc_enf_intervencion INNER JOIN paciente ON hc_enf_intervencion.enf_intervencion_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_enf_intervencion.enf_intervencion_created_user=registro_usuarios.id and paciente.doc_paciente WHERE doc_paciente LIKE '%".$seach."%' or pnombre_paciente LIKE '%".$seach."%'  "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_enf_intervencion.id_hc_enf_intervencion,hc_enf_intervencion.hc_enf_intervencion_cod,hc_enf_intervencion.enf_intervencion_diagnosticos_enf,hc_enf_intervencion.enf_intervencion_doc,hc_enf_intervencion.enf_intervencion_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad FROM hc_enf_intervencion INNER JOIN paciente ON hc_enf_intervencion.enf_intervencion_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_enf_intervencion.enf_intervencion_created_user=registro_usuarios.id and id_hc_enf_intervencion!='INTE0000' and enf_intervencion_doc='".$doc."'  "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_enf_intervencion FROM hc_enf_intervencion WHERE id_hc_enf_intervencion!='INTE0000' and enf_intervencion_doc='".$doc."'  ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_enf_intervencion;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );
			return $resultado;			
		}

		//fch
		function consultar_separados_hc_pad_bf($start,$length,$seach,$direccion,$cual,$doc,$ff){
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
				$columna="hc_pad.pad_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				$busqueda=" WHERE hc_pad_cod='1' and documento LIKE '%".$seach."%' or nombres_apellidos LIKE '%".$seach."%'";
				// $consulta="SELECT hc_pad.id_hc_pad,hc_pad.pad_documento,hc_pad.hc_pad_cod,hc_pad.pad_diagnosticos,hc_pad.pad_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_pad.pad_created_user=registro_usuarios.id and paciente.doc_paciente WHERE doc_paciente LIKE '%".$seach."%' or pnombre_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
				// la consulta genera problemas con or paciente.pnombre_paciente LIKE '%".$seach."%' 
			}
			else
			{
				$consulta="SELECT hc_pad.id_hc_pad,hc_pad.pad_documento,hc_pad.hc_pad_cod,hc_pad.pad_diagnosticos,hc_pad.pad_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_pad.pad_created_user=registro_usuarios.id and id_hc_pad!='PAD0000' and pad_documento='".$doc."' and pad_f_reg='".$ff."'  "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			// $consulta="SELECT * FROM hc_pad ".$busqueda." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_pad FROM hc_pad WHERE id_hc_pad!='PAD0000' and pad_documento='".$doc."' and pad_f_reg='".$ff."' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_pad;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			// $consulta="SELECT hc_pad.nro_hc,paciente.* FROM hc INNER JOIN paciente ON hc.id_hc='HC0001' and paciente.nombres LIKE '%".$search."%' ";
			// $rs=$this->db->query($consulta);
			// $this->db->select('hc_pad.*,p.*');
		 //    $this->db->from('hc_pad h');
		 //    $this->db->join('paciente p','p.doc_paciente=h.pad_documento');
		 //    $this->db->where("id_hc_pad!=",'PAD0000');
			// $this->db->like("p.doc_paciente",$seach);
			// $consulta=$this->db->get();

			return $resultado;			
		}
		function consultar_separados_hc_barthel_bf($start,$length,$seach,$direccion,$cual,$doc,$ff){
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
				$columna="hc_barthel.barthel_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				// $consulta="SELECT hc_barthel.id_hc_barthel,hc_barthel.barthel_doc,hc_barthel.hc_barthel_cod,hc_barthel.barthel_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad,hc_pad.pad_diagnosticos FROM hc_barthel INNER JOIN paciente ON hc_barthel.barthel_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_barthel.barthel_created_user=registro_usuarios.id INNER JOIN hc_pad ON hc_pad.hc_pad_cod=hc_barthel.hc_barthel_cod and hc_pad.pad_f_reg=hc_barthel.barthel_f_reg and paciente.doc_paciente WHERE doc_paciente LIKE '%".$seach."%' or pnombre_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_barthel.id_hc_barthel,hc_barthel.barthel_doc,hc_barthel.hc_barthel_cod,hc_barthel.barthel_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad,hc_pad.pad_diagnosticos FROM hc_barthel INNER JOIN paciente ON hc_barthel.barthel_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_barthel.barthel_created_user=registro_usuarios.id INNER JOIN hc_pad ON hc_pad.hc_pad_cod=hc_barthel.hc_barthel_cod and hc_pad.pad_f_reg=hc_barthel.barthel_f_reg and id_hc_barthel!='BT0000' and barthel_doc='".$doc."' and barthel_f_reg='".$ff."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_barthel FROM hc_barthel WHERE id_hc_barthel!='BT0000' and barthel_doc='".$doc."' and barthel_f_reg='".$ff."' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_barthel;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_hc_valoracion_bf($start,$length,$seach,$direccion,$cual,$doc,$ff){
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
				$columna="hc_valoracion.valoracion_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				// $consulta="SELECT hc_valoracion.id_hc_valoracion,hc_valoracion.valoracion_diagnosticos,hc_valoracion.hc_valoracion_cod,hc_valoracion.valoracion_doc,hc_valoracion.valoracion_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad FROM hc_valoracion INNER JOIN paciente ON hc_valoracion.valoracion_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_valoracion.valoracion_created_user=registro_usuarios.id and paciente.doc_paciente WHERE doc_paciente LIKE '%".$seach."%' or pnombre_paciente LIKE '%".$seach."%'  "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_valoracion.id_hc_valoracion,hc_valoracion.valoracion_diagnosticos,hc_valoracion.hc_valoracion_cod,hc_valoracion.valoracion_doc,hc_valoracion.valoracion_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad FROM hc_valoracion INNER JOIN paciente ON hc_valoracion.valoracion_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_valoracion.valoracion_created_user=registro_usuarios.id and id_hc_valoracion!='VAL0000' and valoracion_doc='".$doc."' and valoracion_f_reg='".$ff."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_valoracion FROM hc_valoracion WHERE id_hc_valoracion!='VAL0000' and valoracion_doc='".$doc."' and valoracion_f_reg='".$ff."' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_valoracion;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_hc_norton_bf($start,$length,$seach,$direccion,$cual,$doc,$ff){
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
				$columna="hc_norton.norton_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				//$consulta="SELECT hc_norton.id_hc_norton,hc_norton.hc_norton_cod,hc_norton.norton_diagnosticos,hc_norton.norton_doc,hc_norton.norton_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad FROM hc_norton INNER JOIN paciente ON hc_norton.norton_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_norton.norton_created_user=registro_usuarios.id and paciente.doc_paciente WHERE doc_paciente LIKE '%".$seach."%' or pnombre_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_norton.id_hc_norton,hc_norton.hc_norton_cod,hc_norton.norton_diagnosticos,hc_norton.norton_doc,hc_norton.norton_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad FROM hc_norton INNER JOIN paciente ON hc_norton.norton_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_norton.norton_created_user=registro_usuarios.id and id_hc_norton!='NT0000' and norton_doc='".$doc."' and norton_f_reg='".$ff."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_norton FROM hc_norton WHERE id_hc_norton!='NT0000' and norton_doc='".$doc."' and norton_f_reg='".$ff."' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_norton;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_hc_braden_bf($start,$length,$seach,$direccion,$cual,$doc,$ff){
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
				$columna="hc_braden.braden_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				// $consulta="SELECT hc_braden.id_hc_braden,hc_braden.hc_braden_cod,hc_braden.braden_doc,hc_braden.braden_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad,hc_pad.pad_diagnosticos FROM hc_braden INNER JOIN paciente ON hc_braden.braden_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_braden.braden_created_user=registro_usuarios.id INNER JOIN hc_pad ON hc_pad.hc_pad_cod=hc_braden.hc_braden_cod and hc_pad.pad_documento=hc_braden.braden_doc and paciente.doc_paciente WHERE doc_paciente LIKE '%".$seach."%' or pnombre_paciente LIKE '%".$seach."%'  "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_braden.id_hc_braden,hc_braden.hc_braden_cod,hc_braden.braden_doc,hc_braden.braden_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad,hc_pad.pad_diagnosticos FROM hc_braden INNER JOIN paciente ON hc_braden.braden_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_braden.braden_created_user=registro_usuarios.id INNER JOIN hc_pad ON hc_pad.hc_pad_cod=hc_braden.hc_braden_cod and hc_pad.pad_documento=hc_braden.braden_doc and id_hc_braden!='BR0000' and braden_doc='".$doc."' and braden_f_reg='".$ff."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_braden FROM hc_braden WHERE id_hc_braden!='BR0000' and braden_doc='".$doc."' and braden_f_reg='".$ff."' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_braden;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_hc_enf_pad_bf($start,$length,$seach,$direccion,$cual,$doc,$ff){
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
				$columna="hc_enf_pad.enf_pad_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				// $consulta="SELECT hc_enf_pad.id_hc_enf_pad,hc_enf_pad.hc_enf_pad_cod,hc_enf_pad.enf_pad_diagnosticos_enfermera,hc_enf_pad.enf_pad_doc,hc_enf_pad.enf_pad_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad FROM hc_enf_pad INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_enf_pad.enf_pad_created_user=registro_usuarios.id and paciente.doc_paciente and hc_enf_pad.enf_pad_doc WHERE doc_paciente LIKE '%".$seach."%'  or pnombre_paciente LIKE '%".$seach."%'  "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_enf_pad.id_hc_enf_pad,hc_enf_pad.hc_enf_pad_cod,hc_enf_pad.enf_pad_diagnosticos_enfermera,hc_enf_pad.enf_pad_doc,hc_enf_pad.enf_pad_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad FROM hc_enf_pad INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_enf_pad.enf_pad_created_user=registro_usuarios.id and id_hc_enf_pad!='PADE0000' and enf_pad_doc='".$doc."' and enf_pad_f_reg='".$ff."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_enf_pad FROM hc_enf_pad WHERE id_hc_enf_pad!='PADE0000' and enf_pad_doc='".$doc."' and enf_pad_f_reg='".$ff."' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_enf_pad;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );
			return $resultado;			
		}
		function consultar_separados_hc_enf_valoracion_bf($start,$length,$seach,$direccion,$cual,$doc,$ff){
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
				$columna="hc_enf_valoracion.enf_valoracion_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				// $consulta="SELECT hc_enf_valoracion.id_hc_enf_valoracion,hc_enf_valoracion.hc_enf_valoracion_cod,hc_enf_valoracion.enf_valoracion_doc,hc_enf_valoracion.enf_valoracion_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad,hc_enf_pad.enf_pad_diagnosticos_enfermera FROM hc_enf_valoracion INNER JOIN paciente ON hc_enf_valoracion.enf_valoracion_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_enf_valoracion.enf_valoracion_created_user=registro_usuarios.id INNER JOIN hc_enf_pad ON hc_enf_pad.hc_enf_pad_cod=hc_enf_valoracion.hc_enf_valoracion_cod and paciente.doc_paciente WHERE doc_paciente LIKE '%".$seach."%' or pnombre_paciente LIKE '%".$seach."%'  "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_enf_valoracion.id_hc_enf_valoracion,hc_enf_valoracion.hc_enf_valoracion_cod,hc_enf_valoracion.enf_valoracion_doc,hc_enf_valoracion.enf_valoracion_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad,hc_enf_pad.enf_pad_diagnosticos_enfermera FROM hc_enf_valoracion INNER JOIN paciente ON hc_enf_valoracion.enf_valoracion_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_enf_valoracion.enf_valoracion_created_user=registro_usuarios.id INNER JOIN hc_enf_pad ON hc_enf_pad.hc_enf_pad_cod=hc_enf_valoracion.hc_enf_valoracion_cod and id_hc_enf_valoracion!='VALE0000' and enf_valoracion_doc='".$doc."' and enf_valoracion_f_reg='".$ff."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_enf_valoracion FROM hc_enf_valoracion WHERE id_hc_enf_valoracion!='VALE0000' and enf_valoracion_doc='".$doc."' and enf_valoracion_f_reg='".$ff."' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_enf_valoracion;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );
			return $resultado;			
		}
		function consultar_separados_hc_enf_escala_bf($start,$length,$seach,$direccion,$cual,$doc,$ff){
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
				$columna="hc_enf_escala.enf_escala_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				// $consulta="SELECT hc_enf_escala.id_hc_enf_escala,hc_enf_escala.hc_enf_escala_cod,hc_enf_escala.enf_escala_doc,hc_enf_escala.enf_escala_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad,hc_enf_pad.enf_pad_diagnosticos_enfermera FROM hc_enf_escala INNER JOIN paciente ON hc_enf_escala.enf_escala_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_enf_escala.enf_escala_created_user=registro_usuarios.id INNER JOIN hc_enf_pad ON hc_enf_pad.hc_enf_pad_cod=hc_enf_escala.hc_enf_escala_cod and paciente.doc_paciente WHERE doc_paciente LIKE '%".$seach."%' or pnombre_paciente LIKE '%".$seach."%'  "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_enf_escala.id_hc_enf_escala,hc_enf_escala.hc_enf_escala_cod,hc_enf_escala.enf_escala_doc,hc_enf_escala.enf_escala_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad,hc_enf_pad.enf_pad_diagnosticos_enfermera FROM hc_enf_escala INNER JOIN paciente ON hc_enf_escala.enf_escala_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_enf_escala.enf_escala_created_user=registro_usuarios.id INNER JOIN hc_enf_pad ON hc_enf_pad.hc_enf_pad_cod=hc_enf_escala.hc_enf_escala_cod and hc_enf_pad.enf_pad_doc=hc_enf_escala.enf_escala_doc and id_hc_enf_escala!='ECE0000' and enf_escala_doc='".$doc."' and enf_escala_f_reg='".$ff."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_enf_escala FROM hc_enf_escala WHERE id_hc_enf_escala!='ECE0000' and enf_escala_doc='".$doc."' and enf_escala_f_reg='".$ff."' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_enf_escala;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );
			return $resultado;			
		}
		function consultar_separados_hc_enf_intervencion_bf($start,$length,$seach,$direccion,$cual,$doc,$ff){
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
				$columna="hc_enf_intervencion.enf_intervencion_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				// $consulta="SELECT hc_enf_intervencion.id_hc_enf_intervencion,hc_enf_intervencion.hc_enf_intervencion_cod,hc_enf_intervencion.enf_intervencion_diagnosticos_enf,hc_enf_intervencion.enf_intervencion_doc,hc_enf_intervencion.enf_intervencion_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad FROM hc_enf_intervencion INNER JOIN paciente ON hc_enf_intervencion.enf_intervencion_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_enf_intervencion.enf_intervencion_created_user=registro_usuarios.id and paciente.doc_paciente WHERE doc_paciente LIKE '%".$seach."%' or pnombre_paciente LIKE '%".$seach."%'  "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_enf_intervencion.id_hc_enf_intervencion,hc_enf_intervencion.hc_enf_intervencion_cod,hc_enf_intervencion.enf_intervencion_diagnosticos_enf,hc_enf_intervencion.enf_intervencion_doc,hc_enf_intervencion.enf_intervencion_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad FROM hc_enf_intervencion INNER JOIN paciente ON hc_enf_intervencion.enf_intervencion_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_enf_intervencion.enf_intervencion_created_user=registro_usuarios.id and id_hc_enf_intervencion!='INTE0000' and enf_intervencion_doc='".$doc."' and enf_intervencion_f_reg='".$ff."'  "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_enf_intervencion FROM hc_enf_intervencion WHERE id_hc_enf_intervencion!='INTE0000' and enf_intervencion_doc='".$doc."' and enf_intervencion_f_reg='".$ff."'  ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_enf_intervencion;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );
			return $resultado;			
		}

		function consultar_separados_paciente($start,$length,$seach,$direccion,$cual){
			$columna="";
			if($cual==0)
			{
				$columna="doc_paciente";
			}
			else if($cual==1)
			{
				$columna="pnombre_paciente";
			}
			else if($cual==2)
			{
				$columna="papellido_paciente";
			}
			else if($cual==3)
			{
				$columna="doc_paciente";
			}
			
			$busqueda="";
			if($seach)
			{
				$busqueda=" WHERE doc_paciente LIKE '%".$seach."%' ";
			}
			else
			{
				$busqueda=" WHERE id_paciente!='PC0000' ";
			}
			$consulta="SELECT * FROM paciente ".$busqueda." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			$r=$this->db->query($consulta);
			// return $r;

			$total="SELECT COUNT(*) id_paciente FROM paciente".$busqueda;
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_paciente;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );
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

		function consultar_separados_hc_general_tiempo($start,$length,$seach,$direccion,$cual){
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
				$columna="hc_pad.pad_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				$consulta="SELECT hc_pad.id_hc_pad,hc_pad.pad_documento,hc_pad.pad_f_reg,hc_pad.pad_h_reg,hc_pad.pad_h_inicio,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente and paciente.doc_paciente WHERE hc_pad_cod='1' and doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_pad.id_hc_pad,hc_pad.pad_documento,hc_pad.pad_f_reg,hc_pad.pad_h_reg,hc_pad.pad_h_inicio,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente and id_hc_pad!='PAD0000' and hc_pad_cod='1' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
				//SELECT hc_pad.id_hc_pad,hc_pad.pad_documento,hc_pad.pad_f_reg,hc_pad.pad_h_reg,hc_pad.pad_h_inicio,paciente.pnombre_paciente,paciente.papellido_paciente,hc_barthel.id_hc_barthel,hc_valoracion.id_hc_valoracion,hc_norton.id_hc_norton,hc_braden.id_hc_braden FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente INNER JOIN hc_barthel ON hc_barthel.barthel_f_reg=hc_pad.pad_f_reg and hc_barthel.barthel_doc=hc_pad.pad_documento INNER JOIN hc_valoracion ON hc_valoracion.valoracion_f_reg=hc_pad.pad_f_reg and hc_valoracion.valoracion_doc=hc_pad.pad_documento INNER JOIN hc_norton ON hc_norton.norton_f_reg=hc_pad.pad_f_reg and hc_norton.norton_doc=hc_pad.pad_documento INNER JOIN hc_braden ON hc_braden.braden_f_reg=hc_pad.pad_f_reg and hc_braden.braden_doc=hc_pad.pad_documento
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_pad FROM hc_pad WHERE id_hc_pad!='PAD0000' and hc_pad_cod='1' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_pad;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_ev_tiempo($start,$length,$seach,$direccion,$cual){
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
				$busqueda=" WHERE documento LIKE '%".$seach."%' or nombres_apellidos LIKE '%".$seach."%'";
				$consulta="SELECT hc_pad.id_hc_pad,hc_pad.pad_documento,hc_pad.pad_h_inicio,hc_pad.pad_f_reg,hc_pad.pad_h_reg,paciente.tipo_doc_paciente,paciente.doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente WHERE hc_pad_cod>'1' and doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_pad.id_hc_pad,hc_pad.pad_documento,hc_pad.pad_h_inicio,hc_pad.pad_f_reg,hc_pad.pad_h_reg,paciente.tipo_doc_paciente,paciente.doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente and id_hc_pad!='PAD0000' and hc_pad_cod>'1' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);
			// INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente

			$total="SELECT COUNT(*) id_hc_pad FROM hc_pad WHERE id_hc_pad!='PAD0000' and hc_pad_cod>'1' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_pad;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );
			return $resultado;
		}
		function consultar_separados_hc_enf_general_tiempo($start,$length,$seach,$direccion,$cual){
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
				$columna="hc_enf_pad.enf_pad_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				$consulta="SELECT hc_enf_pad.id_hc_enf_pad,hc_enf_pad.enf_pad_doc,hc_enf_pad.enf_pad_f_reg,hc_enf_pad.enf_pad_h_reg,hc_enf_pad.enf_pad_h_inicio,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_enf_pad INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente WHERE hc_enf_pad_cod='1' and doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_enf_pad.id_hc_enf_pad,hc_enf_pad.enf_pad_doc,hc_enf_pad.enf_pad_f_reg,hc_enf_pad.enf_pad_h_reg,hc_enf_pad.enf_pad_h_inicio,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_enf_pad INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente and id_hc_enf_pad!='PADE0000' and hc_enf_pad_cod='1' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_enf_pad FROM hc_enf_pad WHERE id_hc_enf_pad!='PADE0000' and hc_enf_pad_cod='1' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_enf_pad;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_visitas_tiempo($start,$length,$seach,$direccion,$cual){
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
				$columna="hc_enf_pad.enf_pad_f_reg";
			}
			
			$busqueda="";
			if($seach)
			{
				$busqueda=" WHERE estado_paciente='0' and doc_paciente LIKE '%".$seach."%' ";
				$consulta="SELECT hc_enf_pad.id_hc_enf_pad,hc_enf_pad.enf_pad_doc,hc_enf_pad.enf_pad_f_reg,hc_enf_pad.enf_pad_h_reg,hc_enf_pad.enf_pad_h_inicio,paciente.doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente FROM hc_enf_pad INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente WHERE hc_enf_pad_cod>'1' and doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_enf_pad.id_hc_enf_pad,hc_enf_pad.enf_pad_doc,hc_enf_pad.enf_pad_f_reg,hc_enf_pad.enf_pad_h_reg,hc_enf_pad.enf_pad_h_inicio,paciente.doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente FROM hc_enf_pad INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente  and hc_enf_pad_cod>'1' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);
			// return $r;

			$total="SELECT COUNT(*) id_hc_enf_pad FROM hc_enf_pad WHERE id_hc_enf_pad!='PADE0000' and hc_enf_pad_cod>'1'";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_enf_pad;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );
			return $resultado;			
		}

		function consultar_separados_bitacora($start,$length,$seach,$direccion,$cual){
			$columna="";
			if($cual==0)
			{
				$columna="registro_usuarios.registro_nombres";
			}
			else if($cual==1)
			{
				$columna="registro_usuarios.registro_apellidos";
			}
			else if($cual==2)
			{
				$columna="registro_usuarios.registro_nombres";
			}
			
			$busqueda="";
			if($seach)
			{
				$busqueda=" WHERE documento LIKE '%".$seach."%' or nombres_apellidos LIKE '%".$seach."%'";
				$consulta="SELECT registro_usuarios.*,bitacora.* FROM bitacora INNER JOIN registro_usuarios ON registro_usuarios.id=bitacora.id_persona WHERE registro_usuarios.registro_nombres LIKE '%".$seach."%' "." ORDER BY fecha ASC LIMIT $start,$length";//$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT registro_usuarios.*,bitacora.* FROM bitacora INNER JOIN registro_usuarios ON registro_usuarios.id=bitacora.id_persona "." ORDER BY fecha ASC LIMIT $start,$length";//columna." ".strtoupper($direccion)." LIMIT $start,$length
			}
			$r=$this->db->query($consulta);
			// INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente

			$total="SELECT COUNT(*) id FROM bitacora";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );
			return $resultado;
		}
		function consultar_separados_bitacora2($start,$length,$seach,$direccion,$cual,$ff){
			$columna="";
			if($cual==0)
			{
				$columna="registro_usuarios.registro_nombres";
			}
			else if($cual==1)
			{
				$columna="registro_usuarios.registro_apellidos";
			}
			else if($cual==2)
			{
				$columna="registro_usuarios.registro_nombres";
			}
			
			$busqueda="";
			if($seach)
			{
				$busqueda=" WHERE documento LIKE '%".$seach."%' or nombres_apellidos LIKE '%".$seach."%'";
				// $consulta="SELECT registro_usuarios.*,bitacora.* FROM bitacora INNER JOIN registro_usuarios ON registro_usuarios.id=bitacora.id_persona WHERE registro_usuarios.registro_nombres LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT registro_usuarios.*,bitacora.* FROM bitacora INNER JOIN registro_usuarios ON registro_usuarios.id=bitacora.id_persona and fecha>='".$ff." 00:00:00"."' and  fecha<='".$ff." 22:00:00"."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);
			// INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente

			$total="SELECT COUNT(*) id FROM bitacora";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );
			return $resultado;
		}

		function consultar_separados_hc_general_n($start,$length,$seach,$direccion,$cual,$doc){
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
				$columna="hc_pad.pad_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				// $consulta="SELECT hc_pad.id_hc_pad,hc_pad.pad_documento,hc_pad.pad_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,hc_barthel.id_hc_barthel,hc_valoracion.id_hc_valoracion,hc_norton.id_hc_norton,hc_braden.id_hc_braden FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente INNER JOIN hc_barthel ON hc_barthel.barthel_doc=paciente.doc_paciente INNER JOIN hc_valoracion ON hc_valoracion.valoracion_doc=paciente.doc_paciente INNER JOIN hc_norton ON hc_norton.norton_doc=paciente.doc_paciente INNER JOIN hc_braden ON hc_braden.braden_doc=paciente.doc_paciente and paciente.doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
				// $consulta="SELECT hc_pad.id_hc_pad,hc_pad.pad_documento,hc_pad.pad_diagnosticos,hc_pad.pad_f_reg,hc_pad.hc_pad_cod,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_pad.pad_created_user=registro_usuarios.id WHERE doc_paciente LIKE '%".$seach."%' "." ORDER BY hc_pad_cod DESC LIMIT 0,1 ";//.strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				// $consulta="SELECT hc_pad.id_hc_pad,hc_pad.pad_documento,hc_pad.pad_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,hc_barthel.id_hc_barthel,hc_valoracion.id_hc_valoracion,hc_norton.id_hc_norton,hc_braden.id_hc_braden FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente INNER JOIN hc_barthel ON hc_barthel.barthel_f_reg=hc_pad.pad_f_reg INNER JOIN hc_valoracion ON hc_valoracion.valoracion_f_reg=hc_pad.pad_f_reg INNER JOIN hc_norton ON hc_norton.norton_f_reg=hc_pad.pad_f_reg INNER JOIN hc_braden ON hc_braden.braden_f_reg=hc_pad.pad_f_reg and id_hc_pad!='PAD0000' and hc_pad_cod='1'"." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
				$consulta="SELECT hc_pad.id_hc_pad,hc_pad.pad_documento,hc_pad.pad_diagnosticos,hc_pad.pad_f_reg,hc_pad.hc_pad_cod,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_pad.pad_created_user=registro_usuarios.id and id_hc_pad!='PAD0000' and pad_documento='".$doc."'  "." ORDER BY hc_pad_cod DESC LIMIT 0,1";//.strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_pad FROM hc_pad WHERE id_hc_pad!='PAD0000' and pad_documento='".$doc."'  ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_pad;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_hc_pad_n($start,$length,$seach,$direccion,$cual){
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
				$columna="hc_pad.pad_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				$busqueda=" WHERE hc_pad_cod>'1' and documento LIKE '%".$seach."%' or nombres_apellidos LIKE '%".$seach."%'";
				$consulta="SELECT hc_pad.id_hc_pad,hc_pad.pad_documento,hc_pad.pad_f_reg,hc_pad.hc_pad_cod,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente and paciente.doc_paciente WHERE hc_pad_cod>'1' and doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
				// la consulta genera problemas con or paciente.pnombre_paciente LIKE '%".$seach."%' 
			}
			else
			{
				$consulta="SELECT hc_pad.id_hc_pad,hc_pad.pad_documento,hc_pad.pad_f_reg,hc_pad.hc_pad_cod,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente and id_hc_pad!='PAD0000' and hc_pad_cod>'1' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			// $consulta="SELECT * FROM hc_pad ".$busqueda." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_pad FROM hc_pad WHERE id_hc_pad!='PAD0000' and hc_pad_cod>'1' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_pad;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			// $consulta="SELECT hc_pad.nro_hc,paciente.* FROM hc INNER JOIN paciente ON hc.id_hc='HC0001' and paciente.nombres LIKE '%".$search."%' ";
			// $rs=$this->db->query($consulta);
			// $this->db->select('hc_pad.*,p.*');
		 //    $this->db->from('hc_pad h');
		 //    $this->db->join('paciente p','p.doc_paciente=h.pad_documento');
		 //    $this->db->where("id_hc_pad!=",'PAD0000');
			// $this->db->like("p.doc_paciente",$seach);
			// $consulta=$this->db->get();

			return $resultado;			
		}
		function consultar_separados_hc_pad_odonto_n($start,$length,$seach,$direccion,$cual){
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
				$columna="odonto.evolucion_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				$busqueda=" WHERE nro_hc>'1' and documento LIKE '%".$seach."%' or nombres_apellidos LIKE '%".$seach."%'";
				$consulta="SELECT odonto.id_ev,odonto.evolucion_doc,odonto.evolucion_f_reg,odonto.nro_hc,paciente.pnombre_paciente,paciente.papellido_paciente FROM odonto INNER JOIN paciente ON odonto.evolucion_doc=paciente.doc_paciente and paciente.doc_paciente WHERE nro_hc>'1' and doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
				// la consulta genera problemas con or paciente.pnombre_paciente LIKE '%".$seach."%' 
			}
			else
			{
				$consulta="SELECT odonto.id_ev,odonto.evolucion_doc,odonto.evolucion_f_reg,odonto.nro_hc,paciente.pnombre_paciente,paciente.papellido_paciente FROM odonto JOIN paciente ON odonto.evolucion_doc=paciente.doc_paciente and id_ev!='ODO0000' and nro_hc>'1' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			// $consulta="SELECT * FROM hc_pad ".$busqueda." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_ev FROM odonto WHERE id_ev!='ODO0000' and nro_hc>'1' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_ev;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_hc_concentimiento_n($start,$length,$seach,$direccion,$cual){
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
				$columna="hc_concentimiento.concentimiento_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				$consulta="SELECT hc_concentimiento.id_hc_concentimiento,hc_concentimiento.concentimiento_doc,hc_concentimiento.concentimiento_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_concentimiento INNER JOIN paciente ON hc_concentimiento.concentimiento_doc=paciente.doc_paciente and paciente.doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_concentimiento.id_hc_concentimiento,hc_concentimiento.concentimiento_doc,hc_concentimiento.concentimiento_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_concentimiento INNER JOIN paciente ON hc_concentimiento.concentimiento_doc=paciente.doc_paciente and id_hc_concentimiento!='CON0000'"." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_concentimiento FROM hc_concentimiento WHERE id_hc_concentimiento!='CON0000' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_concentimiento;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_hc_barthel_n($start,$length,$seach,$direccion,$cual){
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
				$columna="hc_barthel.barthel_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				$consulta="SELECT hc_barthel.id_hc_barthel,hc_barthel.barthel_doc,hc_barthel.barthel_f_reg,hc_barthel.hc_barthel_cod,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_barthel INNER JOIN paciente ON hc_barthel.barthel_doc=paciente.doc_paciente and paciente.doc_paciente WHERE hc_barthel_cod>'1' and doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_barthel.id_hc_barthel,hc_barthel.barthel_doc,hc_barthel.barthel_f_reg,hc_barthel.hc_barthel_cod,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_barthel INNER JOIN paciente ON hc_barthel.barthel_doc=paciente.doc_paciente and id_hc_barthel!='BT0000' and hc_barthel_cod>'1' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_barthel FROM hc_barthel WHERE id_hc_barthel!='BT0000' and hc_barthel_cod>'1' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_barthel;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_hc_valoracion_n($start,$length,$seach,$direccion,$cual){
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
				$columna="hc_valoracion.valoracion_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				$consulta="SELECT hc_valoracion.id_hc_valoracion,hc_valoracion.valoracion_doc,hc_valoracion.valoracion_f_reg,hc_valoracion.hc_valoracion_cod,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_valoracion INNER JOIN paciente ON hc_valoracion.valoracion_doc=paciente.doc_paciente and paciente.doc_paciente WHERE hc_valoracion_cod>'1' and doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_valoracion.id_hc_valoracion,hc_valoracion.valoracion_doc,hc_valoracion.valoracion_f_reg,hc_valoracion.hc_valoracion_cod,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_valoracion INNER JOIN paciente ON hc_valoracion.valoracion_doc=paciente.doc_paciente and id_hc_valoracion!='VAL0000' and hc_valoracion_cod>'1' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_valoracion FROM hc_valoracion WHERE id_hc_valoracion!='VAL0000' and hc_valoracion_cod>'1'";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_valoracion;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_hc_norton_n($start,$length,$seach,$direccion,$cual){
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
				$columna="hc_norton.norton_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				$consulta="SELECT hc_norton.id_hc_norton,hc_norton.norton_doc,hc_norton.norton_f_reg,hc_norton.hc_norton_cod,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_norton INNER JOIN paciente ON hc_norton.norton_doc=paciente.doc_paciente and paciente.doc_paciente WHERE hc_norton_cod>'1' and doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_norton.id_hc_norton,hc_norton.norton_doc,hc_norton.norton_f_reg,hc_norton.hc_norton_cod,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_norton INNER JOIN paciente ON hc_norton.norton_doc=paciente.doc_paciente and id_hc_norton!='NT0000' and hc_norton_cod>'1' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_norton FROM hc_norton WHERE id_hc_norton!='NT0000' and hc_norton_cod>'1' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_norton;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_hc_braden_n($start,$length,$seach,$direccion,$cual){
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
				$columna="hc_braden.braden_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				$consulta="SELECT hc_braden.id_hc_braden,hc_braden.braden_doc,hc_braden.braden_f_reg,hc_braden.hc_braden_cod,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_braden INNER JOIN paciente ON hc_braden.braden_doc=paciente.doc_paciente and paciente.doc_paciente WHERE hc_braden_cod>'1' and doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_braden.id_hc_braden,hc_braden.braden_doc,hc_braden.braden_f_reg,hc_braden.hc_braden_cod,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_braden INNER JOIN paciente ON hc_braden.braden_doc=paciente.doc_paciente and id_hc_braden!='BR0000' and hc_braden_cod>'1'"." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_braden FROM hc_braden WHERE id_hc_braden!='BR0000' and hc_braden_cod>'1' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_braden;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_hc_enf_general_n($start,$length,$seach,$direccion,$cual,$doc){
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
				$columna="hc_enf_pad.enf_pad_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				// $consulta="SELECT hc_enf_pad.id_hc_enf_pad,hc_enf_pad.enf_pad_doc,hc_enf_pad.enf_pad_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,hc_enf_valoracion.id_hc_enf_valoracion,hc_enf_escala.id_hc_enf_escala,hc_enf_intervencion.id_hc_enf_intervencion FROM hc_enf_pad INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente INNER JOIN hc_enf_valoracion ON hc_enf_valoracion.enf_valoracion_doc=paciente.doc_paciente INNER JOIN hc_enf_escala ON hc_enf_escala.enf_escala_doc=paciente.doc_paciente INNER JOIN hc_enf_intervencion ON hc_enf_intervencion.enf_intervencion_doc=paciente.doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
				// $consulta="SELECT hc_enf_pad.id_hc_enf_pad,hc_enf_pad.enf_pad_diagnosticos_enfermera,hc_enf_pad.enf_pad_doc,hc_enf_pad.enf_pad_f_reg,hc_enf_pad.hc_enf_pad_cod,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad FROM hc_enf_pad INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_enf_pad.enf_pad_created_user=registro_usuarios.id WHERE hc_enf_pad_cod>'1' and doc_paciente LIKE '%".$seach."%' ORDER BY hc_enf_pad_cod DESC LIMIT 0,1 ";//." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				// $consulta="SELECT hc_enf_pad.id_hc_enf_pad,hc_enf_pad.enf_pad_doc,hc_enf_pad.enf_pad_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,hc_enf_valoracion.id_hc_enf_valoracion,hc_enf_escala.id_hc_enf_escala,hc_enf_intervencion.id_hc_enf_intervencion FROM hc_enf_pad INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente INNER JOIN hc_enf_valoracion ON hc_enf_valoracion.enf_valoracion_doc=paciente.doc_paciente INNER JOIN hc_enf_escala ON hc_enf_escala.enf_escala_doc=paciente.doc_paciente INNER JOIN hc_enf_intervencion ON hc_enf_intervencion.enf_intervencion_doc=paciente.doc_paciente and id_hc_enf_pad!='PADE0000'"." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
				$consulta="SELECT hc_enf_pad.id_hc_enf_pad,hc_enf_pad.enf_pad_diagnosticos_enfermera,hc_enf_pad.enf_pad_doc,hc_enf_pad.enf_pad_f_reg,hc_enf_pad.hc_enf_pad_cod,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad FROM hc_enf_pad INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_enf_pad.enf_pad_created_user=registro_usuarios.id and id_hc_enf_pad!='PADE0000' and enf_pad_doc='".$doc."'  ORDER BY hc_enf_pad_cod DESC LIMIT 0,1";//." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_enf_pad FROM hc_enf_pad WHERE id_hc_enf_pad!='PADE0000' and enf_pad_doc='".$doc."'  ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_enf_pad;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_hc_enf_pad_n($start,$length,$seach,$direccion,$cual){
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
				$columna="hc_enf_pad.enf_pad_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				$consulta="SELECT hc_enf_pad.id_hc_enf_pad,hc_enf_pad.enf_pad_doc,hc_enf_pad.enf_pad_f_reg,hc_enf_pad.hc_enf_pad_cod,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_enf_pad INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente and paciente.doc_paciente WHERE hc_enf_pad_cod>'1' and doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_enf_pad.id_hc_enf_pad,hc_enf_pad.enf_pad_doc,hc_enf_pad.enf_pad_f_reg,hc_enf_pad.hc_enf_pad_cod,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_enf_pad INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente and id_hc_enf_pad!='PADE0000' and hc_enf_pad_cod>'1' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_enf_pad FROM hc_enf_pad WHERE id_hc_enf_pad!='PADE0000' and hc_enf_pad_cod>'1' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_enf_pad;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );
			return $resultado;			
		}
		function consultar_separados_hc_enf_valoracion_n($start,$length,$seach,$direccion,$cual){
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
				$columna="hc_enf_valoracion.enf_valoracion_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				$consulta="SELECT hc_enf_valoracion.id_hc_enf_valoracion,hc_enf_valoracion.enf_valoracion_doc,hc_enf_valoracion.enf_valoracion_f_reg,hc_enf_valoracion.hc_enf_valoracion_cod,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_enf_valoracion INNER JOIN paciente ON hc_enf_valoracion.enf_valoracion_doc=paciente.doc_paciente and paciente.doc_paciente WHERE hc_enf_valoracion_cod>'1' and doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_enf_valoracion.id_hc_enf_valoracion,hc_enf_valoracion.enf_valoracion_doc,hc_enf_valoracion.enf_valoracion_f_reg,hc_enf_valoracion.hc_enf_valoracion_cod,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_enf_valoracion INNER JOIN paciente ON hc_enf_valoracion.enf_valoracion_doc=paciente.doc_paciente and id_hc_enf_valoracion!='VALE0000' and hc_enf_valoracion_cod>'1' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_enf_valoracion FROM hc_enf_valoracion WHERE id_hc_enf_valoracion!='VALE0000' and hc_enf_valoracion_cod>'1' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_enf_valoracion;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );
			return $resultado;			
		}
		function consultar_separados_hc_enf_escala_n($start,$length,$seach,$direccion,$cual){
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
				$columna="hc_enf_escala.enf_escala_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				$consulta="SELECT hc_enf_escala.id_hc_enf_escala,hc_enf_escala.enf_escala_doc,hc_enf_escala.enf_escala_f_reg,hc_enf_escala.hc_enf_escala_cod,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_enf_escala INNER JOIN paciente ON hc_enf_escala.enf_escala_doc=paciente.doc_paciente and paciente.doc_paciente WHERE hc_enf_escala_cod>'1' and doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_enf_escala.id_hc_enf_escala,hc_enf_escala.enf_escala_doc,hc_enf_escala.enf_escala_f_reg,hc_enf_escala.hc_enf_escala_cod,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_enf_escala INNER JOIN paciente ON hc_enf_escala.enf_escala_doc=paciente.doc_paciente and id_hc_enf_escala!='ECE0000' and hc_enf_escala_cod>'1' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_enf_escala FROM hc_enf_escala WHERE id_hc_enf_escala!='ECE0000' and hc_enf_escala_cod>'1' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_enf_escala;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );
			return $resultado;			
		}
		function consultar_separados_hc_enf_intervencion_n($start,$length,$seach,$direccion,$cual){
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
				$columna="hc_enf_intervencion.enf_intervencion_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				$consulta="SELECT hc_enf_intervencion.id_hc_enf_intervencion,hc_enf_intervencion.enf_intervencion_doc,hc_enf_intervencion.enf_intervencion_f_reg,hc_enf_intervencion.hc_enf_intervencion_cod,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_enf_intervencion INNER JOIN paciente ON hc_enf_intervencion.enf_intervencion_doc=paciente.doc_paciente and paciente.doc_paciente WHERE hc_enf_intervencion_cod>'1' and doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_enf_intervencion.id_hc_enf_intervencion,hc_enf_intervencion.enf_intervencion_doc,hc_enf_intervencion.enf_intervencion_f_reg,hc_enf_intervencion.hc_enf_intervencion_cod,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_enf_intervencion INNER JOIN paciente ON hc_enf_intervencion.enf_intervencion_doc=paciente.doc_paciente and id_hc_enf_intervencion!='INTE0000' and hc_enf_intervencion_cod>'1' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_enf_intervencion FROM hc_enf_intervencion WHERE id_hc_enf_intervencion!='INTE0000' and hc_enf_intervencion_cod>'1' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_enf_intervencion;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );
			return $resultado;			
		}

		//todos
		function consultar_separados_listado_general($start,$length,$seach,$direccion,$cual,$doc){
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
			else if($cual==4)
			{
				$columna="hc_pad.hc_pad_cod";
			}
			else if($cual==5)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			// $doc="7676555";
			if($seach)
			{
				// $consulta="SELECT hc_pad.id_hc_pad,hc_pad.pad_documento,hc_pad.pad_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,hc_barthel.id_hc_barthel,hc_valoracion.id_hc_valoracion,hc_norton.id_hc_norton,hc_braden.id_hc_braden FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente INNER JOIN hc_barthel ON hc_barthel.barthel_doc=paciente.doc_paciente INNER JOIN hc_valoracion ON hc_valoracion.valoracion_doc=paciente.doc_paciente INNER JOIN hc_norton ON hc_norton.norton_doc=paciente.doc_paciente INNER JOIN hc_braden ON hc_braden.braden_doc=paciente.doc_paciente and paciente.doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
				// $consulta="SELECT hc_pad.id_hc_pad,hc_pad.pad_documento,hc_pad.pad_f_reg,hc_pad.hc_pad_cod,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente WHERE doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				// $consulta="SELECT hc_pad.id_hc_pad,hc_pad.pad_documento,hc_pad.pad_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,hc_barthel.id_hc_barthel,hc_valoracion.id_hc_valoracion,hc_norton.id_hc_norton,hc_braden.id_hc_braden FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente INNER JOIN hc_barthel ON hc_barthel.barthel_f_reg=hc_pad.pad_f_reg INNER JOIN hc_valoracion ON hc_valoracion.valoracion_f_reg=hc_pad.pad_f_reg INNER JOIN hc_norton ON hc_norton.norton_f_reg=hc_pad.pad_f_reg INNER JOIN hc_braden ON hc_braden.braden_f_reg=hc_pad.pad_f_reg and id_hc_pad!='PAD0000' and hc_pad_cod='1'"." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
				$consulta="SELECT hc_pad.id_hc_pad,hc_pad.pad_documento,hc_pad.pad_f_reg,hc_pad.hc_pad_cod,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente and id_hc_pad!='PAD0000' and pad_documento='".$doc."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_pad FROM hc_pad WHERE id_hc_pad!='PAD0000' and pad_documento='".$doc."'  ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_pad;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_listado_pad($start,$length,$seach,$direccion,$cual,$doc){
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
				$columna="hc_pad.pad_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			else if($cual==4)
			{
				$columna="paciente.doc_paciente";
			}
			else if($cual==5)
			{
				$columna="paciente.doc_paciente";
			}
			else if($cual==6)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				// $busqueda=" WHERE hc_pad_cod>'1' and documento LIKE '%".$seach."%' or nombres_apellidos LIKE '%".$seach."%'";
				// $consulta="SELECT hc_pad.id_hc_pad,hc_pad.pad_documento,hc_pad.pad_f_reg,hc_pad.hc_pad_cod,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente and paciente.doc_paciente WHERE hc_pad_cod>'1' and doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
				// la consulta genera problemas con or paciente.pnombre_paciente LIKE '%".$seach."%' 
			}
			else
			{
				$consulta="SELECT hc_pad.id_hc_pad,hc_pad.pad_documento,hc_pad.pad_f_reg,hc_pad.hc_pad_cod,hc_pad.pad_diagnosticos,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_pad.pad_created_user=registro_usuarios.id and id_hc_pad!='PAD0000' and pad_documento='".$doc."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			// $consulta="SELECT * FROM hc_pad ".$busqueda." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_pad FROM hc_pad WHERE id_hc_pad!='PAD0000' and pad_documento='".$doc."' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_pad;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_listado_barthel($start,$length,$seach,$direccion,$cual,$doc){
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
				$columna="hc_barthel.barthel_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			else if($cual==4)
			{
				$columna="paciente.doc_paciente";
			}
			else if($cual==5)
			{
				$columna="paciente.doc_paciente";
			}
			else if($cual==6)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				// $consulta="SELECT hc_barthel.id_hc_barthel,hc_barthel.barthel_doc,hc_barthel.barthel_f_reg,hc_barthel.hc_barthel_cod,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_barthel INNER JOIN paciente ON hc_barthel.barthel_doc=paciente.doc_paciente and paciente.doc_paciente WHERE hc_barthel_cod>'1' and doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_barthel.id_hc_barthel,hc_barthel.barthel_doc,hc_barthel.barthel_f_reg,hc_barthel.hc_barthel_cod,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad,hc_pad.pad_diagnosticos FROM hc_barthel INNER JOIN paciente ON hc_barthel.barthel_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_barthel.barthel_created_user=registro_usuarios.id INNER JOIN hc_pad ON hc_pad.pad_f_reg=hc_barthel.barthel_f_reg and id_hc_barthel!='BT0000' and barthel_doc='".$doc."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_barthel FROM hc_barthel WHERE id_hc_barthel!='BT0000' and barthel_doc='".$doc."' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_barthel;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_listado_valoracion($start,$length,$seach,$direccion,$cual,$doc){
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
				$columna="hc_valoracion.valoracion_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			else if($cual==4)
			{
				$columna="paciente.doc_paciente";
			}
			else if($cual==5)
			{
				$columna="paciente.doc_paciente";
			}
			else if($cual==6)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				//$consulta="SELECT hc_valoracion.id_hc_valoracion,hc_valoracion.valoracion_doc,hc_valoracion.valoracion_f_reg,hc_valoracion.hc_valoracion_cod,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_valoracion INNER JOIN paciente ON hc_valoracion.valoracion_doc=paciente.doc_paciente and paciente.doc_paciente WHERE hc_valoracion_cod>'1' and doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_valoracion.id_hc_valoracion,hc_valoracion.valoracion_doc,hc_valoracion.valoracion_diagnosticos,hc_valoracion.valoracion_f_reg,hc_valoracion.hc_valoracion_cod,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad FROM hc_valoracion INNER JOIN paciente ON hc_valoracion.valoracion_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_valoracion.valoracion_created_user=registro_usuarios.id and id_hc_valoracion!='VAL0000' and valoracion_doc='".$doc."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_valoracion FROM hc_valoracion WHERE id_hc_valoracion!='VAL0000' and valoracion_doc='".$doc."'";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_valoracion;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_listado_norton($start,$length,$seach,$direccion,$cual,$doc){
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
				$columna="hc_norton.norton_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			else if($cual==4)
			{
				$columna="paciente.doc_paciente";
			}
			else if($cual==5)
			{
				$columna="paciente.doc_paciente";
			}
			else if($cual==6)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				// $consulta="SELECT hc_norton.id_hc_norton,hc_norton.norton_doc,hc_norton.norton_f_reg,hc_norton.hc_norton_cod,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_norton INNER JOIN paciente ON hc_norton.norton_doc=paciente.doc_paciente and paciente.doc_paciente WHERE hc_norton_cod>'1' and doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_norton.id_hc_norton,hc_norton.norton_doc,hc_norton.norton_f_reg,hc_norton.hc_norton_cod,hc_norton.norton_diagnosticos,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad FROM hc_norton INNER JOIN paciente ON hc_norton.norton_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_norton.norton_created_user=registro_usuarios.id and id_hc_norton!='NT0000' and norton_doc='".$doc."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_norton FROM hc_norton WHERE id_hc_norton!='NT0000' and norton_doc='".$doc."' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_norton;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_listado_braden($start,$length,$seach,$direccion,$cual,$doc){
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
				$columna="hc_braden.braden_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			else if($cual==4)
			{
				$columna="paciente.doc_paciente";
			}
			else if($cual==5)
			{
				$columna="paciente.doc_paciente";
			}
			else if($cual==6)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				// $consulta="SELECT hc_braden.id_hc_braden,hc_braden.braden_doc,hc_braden.braden_f_reg,hc_braden.hc_braden_cod,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_braden INNER JOIN paciente ON hc_braden.braden_doc=paciente.doc_paciente and paciente.doc_paciente WHERE hc_braden_cod>'1' and doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_braden.id_hc_braden,hc_braden.braden_doc,hc_braden.braden_f_reg,hc_braden.hc_braden_cod,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad,hc_pad.pad_diagnosticos FROM hc_braden INNER JOIN paciente ON hc_braden.braden_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_braden.braden_created_user=registro_usuarios.id INNER JOIN hc_pad ON hc_pad.pad_f_reg=hc_braden.braden_f_reg and id_hc_braden!='BR0000' and braden_doc='".$doc."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_braden FROM hc_braden WHERE id_hc_braden!='BR0000' and braden_doc='".$doc."' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_braden;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_listado_enf_general($start,$length,$seach,$direccion,$cual,$doc){
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
				$columna="hc_enf_pad.enf_pad_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			else if($cual==4)
			{
				$columna="paciente.doc_paciente";
			}
			else if($cual==5)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				// $consulta="SELECT hc_enf_pad.id_hc_enf_pad,hc_enf_pad.enf_pad_doc,hc_enf_pad.enf_pad_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,hc_enf_valoracion.id_hc_enf_valoracion,hc_enf_escala.id_hc_enf_escala,hc_enf_intervencion.id_hc_enf_intervencion FROM hc_enf_pad INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente INNER JOIN hc_enf_valoracion ON hc_enf_valoracion.enf_valoracion_doc=paciente.doc_paciente INNER JOIN hc_enf_escala ON hc_enf_escala.enf_escala_doc=paciente.doc_paciente INNER JOIN hc_enf_intervencion ON hc_enf_intervencion.enf_intervencion_doc=paciente.doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
				// $consulta="SELECT hc_enf_pad.id_hc_enf_pad,hc_enf_pad.enf_pad_doc,hc_enf_pad.enf_pad_f_reg,hc_enf_pad.hc_enf_pad_cod,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_enf_pad INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente WHERE hc_enf_pad_cod>'1' and doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				// $consulta="SELECT hc_enf_pad.id_hc_enf_pad,hc_enf_pad.enf_pad_doc,hc_enf_pad.enf_pad_f_reg,paciente.pnombre_paciente,paciente.papellido_paciente,hc_enf_valoracion.id_hc_enf_valoracion,hc_enf_escala.id_hc_enf_escala,hc_enf_intervencion.id_hc_enf_intervencion FROM hc_enf_pad INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente INNER JOIN hc_enf_valoracion ON hc_enf_valoracion.enf_valoracion_doc=paciente.doc_paciente INNER JOIN hc_enf_escala ON hc_enf_escala.enf_escala_doc=paciente.doc_paciente INNER JOIN hc_enf_intervencion ON hc_enf_intervencion.enf_intervencion_doc=paciente.doc_paciente and id_hc_enf_pad!='PADE0000'"." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
				$consulta="SELECT hc_enf_pad.id_hc_enf_pad,hc_enf_pad.enf_pad_doc,hc_enf_pad.enf_pad_f_reg,hc_enf_pad.hc_enf_pad_cod,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_enf_pad INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente and id_hc_enf_pad!='PADE0000' and enf_pad_doc='".$doc."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_enf_pad FROM hc_enf_pad WHERE id_hc_enf_pad!='PADE0000' and enf_pad_doc='".$doc."' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_enf_pad;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
		function consultar_separados_listado_padenf($start,$length,$seach,$direccion,$cual,$doc){
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
				$columna="hc_enf_pad.enf_pad_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			else if($cual==4)
			{
				$columna="paciente.doc_paciente";
			}
			else if($cual==5)
			{
				$columna="paciente.doc_paciente";
			}
			else if($cual==6)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				// $consulta="SELECT hc_enf_pad.id_hc_enf_pad,hc_enf_pad.enf_pad_doc,hc_enf_pad.enf_pad_f_reg,hc_enf_pad.hc_enf_pad_cod,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_enf_pad INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente and paciente.doc_paciente WHERE hc_enf_pad_cod>'1' and doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_enf_pad.id_hc_enf_pad,hc_enf_pad.enf_pad_diagnosticos_enfermera,hc_enf_pad.enf_pad_doc,hc_enf_pad.enf_pad_f_reg,hc_enf_pad.hc_enf_pad_cod,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad FROM hc_enf_pad INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_enf_pad.enf_pad_created_user=registro_usuarios.id and id_hc_enf_pad!='PADE0000' and enf_pad_doc='".$doc."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_enf_pad FROM hc_enf_pad WHERE id_hc_enf_pad!='PADE0000' and enf_pad_doc='".$doc."' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_enf_pad;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );
			return $resultado;			
		}
		function consultar_separados_listado_valoracionenf($start,$length,$seach,$direccion,$cual,$doc){
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
				$columna="hc_enf_valoracion.enf_valoracion_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			else if($cual==4)
			{
				$columna="paciente.doc_paciente";
			}
			else if($cual==5)
			{
				$columna="paciente.doc_paciente";
			}
			else if($cual==6)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				// $consulta="SELECT hc_enf_valoracion.id_hc_enf_valoracion,hc_enf_valoracion.enf_valoracion_doc,hc_enf_valoracion.enf_valoracion_f_reg,hc_enf_valoracion.hc_enf_valoracion_cod,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_enf_valoracion INNER JOIN paciente ON hc_enf_valoracion.enf_valoracion_doc=paciente.doc_paciente and paciente.doc_paciente WHERE hc_enf_valoracion_cod>'1' and doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_enf_valoracion.id_hc_enf_valoracion,hc_enf_valoracion.enf_valoracion_doc,hc_enf_valoracion.enf_valoracion_f_reg,hc_enf_valoracion.hc_enf_valoracion_cod,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad,hc_enf_pad.enf_pad_diagnosticos_enfermera FROM hc_enf_valoracion INNER JOIN paciente ON hc_enf_valoracion.enf_valoracion_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_enf_valoracion.enf_valoracion_created_user=registro_usuarios.id INNER JOIN hc_enf_pad ON hc_enf_pad.hc_enf_pad_cod=hc_enf_valoracion.hc_enf_valoracion_cod and hc_enf_pad.enf_pad_doc=hc_enf_valoracion.enf_valoracion_doc and id_hc_enf_valoracion!='VALE0000' and enf_valoracion_doc='".$doc."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_enf_valoracion FROM hc_enf_valoracion WHERE id_hc_enf_valoracion!='VALE0000' and enf_valoracion_doc='".$doc."' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_enf_valoracion;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );
			return $resultado;			
		}
		function consultar_separados_listado_escala($start,$length,$seach,$direccion,$cual,$doc){
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
				$columna="hc_enf_escala.enf_escala_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			else if($cual==4)
			{
				$columna="paciente.doc_paciente";
			}
			else if($cual==5)
			{
				$columna="paciente.doc_paciente";
			}
			else if($cual==6)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				// $consulta="SELECT hc_enf_escala.id_hc_enf_escala,hc_enf_escala.enf_escala_doc,hc_enf_escala.enf_escala_f_reg,hc_enf_escala.hc_enf_escala_cod,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_enf_escala INNER JOIN paciente ON hc_enf_escala.enf_escala_doc=paciente.doc_paciente and paciente.doc_paciente WHERE hc_enf_escala_cod>'1' and doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_enf_escala.id_hc_enf_escala,hc_enf_escala.enf_escala_doc,hc_enf_escala.enf_escala_f_reg,hc_enf_escala.hc_enf_escala_cod,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad,hc_enf_pad.enf_pad_diagnosticos_enfermera FROM hc_enf_escala INNER JOIN paciente ON hc_enf_escala.enf_escala_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_enf_escala.enf_escala_created_user=registro_usuarios.id INNER JOIN hc_enf_pad ON hc_enf_pad.hc_enf_pad_cod=hc_enf_escala.hc_enf_escala_cod and hc_enf_pad.enf_pad_doc=hc_enf_escala.enf_escala_doc and id_hc_enf_escala!='ECE0000' and enf_escala_doc='".$doc."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_enf_escala FROM hc_enf_escala WHERE id_hc_enf_escala!='ECE0000' and enf_escala_doc='".$doc."' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_enf_escala;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );
			return $resultado;			
		}
		function consultar_separados_listado_intervencion($start,$length,$seach,$direccion,$cual,$doc){
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
				$columna="hc_enf_intervencion.enf_intervencion_f_reg";
			}
			else if($cual==3)
			{
				$columna="paciente.doc_paciente";
			}
			else if($cual==4)
			{
				$columna="paciente.doc_paciente";
			}
			else if($cual==5)
			{
				$columna="paciente.doc_paciente";
			}
			else if($cual==6)
			{
				$columna="paciente.doc_paciente";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				// $consulta="SELECT hc_enf_intervencion.id_hc_enf_intervencion,hc_enf_intervencion.enf_intervencion_doc,hc_enf_intervencion.enf_intervencion_f_reg,hc_enf_intervencion.hc_enf_intervencion_cod,paciente.pnombre_paciente,paciente.papellido_paciente FROM hc_enf_intervencion INNER JOIN paciente ON hc_enf_intervencion.enf_intervencion_doc=paciente.doc_paciente and paciente.doc_paciente WHERE hc_enf_intervencion_cod>'1' and doc_paciente LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			else
			{
				$consulta="SELECT hc_enf_intervencion.id_hc_enf_intervencion,hc_enf_intervencion.enf_intervencion_diagnosticos_enf,hc_enf_intervencion.enf_intervencion_doc,hc_enf_intervencion.enf_intervencion_f_reg,hc_enf_intervencion.hc_enf_intervencion_cod,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.ambito_registro_paciente,registro_usuarios.registro_nombres,registro_usuarios.registro_apellidos,registro_usuarios.registro_especialidad FROM hc_enf_intervencion INNER JOIN paciente ON hc_enf_intervencion.enf_intervencion_doc=paciente.doc_paciente INNER JOIN registro_usuarios ON hc_enf_intervencion.enf_intervencion_created_user=registro_usuarios.id and id_hc_enf_intervencion!='INTE0000' and enf_intervencion_doc='".$doc."' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id_hc_enf_intervencion FROM hc_enf_intervencion WHERE id_hc_enf_intervencion!='INTE0000' and enf_intervencion_doc='".$doc."' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_hc_enf_intervencion;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );
			return $resultado;			
		}			
	}
?>