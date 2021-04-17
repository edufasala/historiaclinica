<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Pdf_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function medico_informacion($id,$cual){
			$tabla="";
			$idtabla="";
			$aux="";
			if($cual=="general")
			{
				$tabla="hc_pad";
				$idtabla="id_hc_pad";
				$aux="pad_created_user";
				$this->db->select('*');
				$this->db->from($tabla);
				$this->db->where('id_hc_pad',$id);
			}
			else if($cual=="general1")
			{
				$tabla="odonto";
				$idtabla="id_ev";
				$aux="evolucion_created_user";
				$this->db->select('*');
				$this->db->from('odonto');
				$this->db->where('id_ev',$id);
			}		
			else if($cual=="pad")
			{
				$tabla="hc_pad";
				$idtabla="id_hc_pad";
				$aux="pad_created_user";
				$this->db->select('*');
				$this->db->from('hc_pad');
				$this->db->where('id_hc_pad',$id);
			}
			else if($cual=="pad_odonto")
			{
				$tabla="odonto";
				$idtabla="id_ev";
				$aux="evolucion_created_user";
				$this->db->select('*');
				$this->db->from('odonto');
				$this->db->where('id_ev',$id);
			}			
			else if($cual=="pad_visitaodonto")
			{
				$tabla="visitaodonto";
				$idtabla="id_vis";
				$aux="visita_created_user";
				$this->db->select('*');
				$this->db->from('visitaodonto');
				$this->db->where('id_vis',$id);
			}			
			else if($cual=="concentimiento")
			{
				$tabla="hc_concentimiento";
				$idtabla="id_hc_concentimiento";
				$aux="concentimiento_created_user";
				$this->db->select('*');
				$this->db->from($tabla);
				$this->db->where('id_hc_concentimiento',$id);
			}
			else if($cual=="barthel")
			{
				$tabla="hc_barthel";
				$idtabla="id_hc_barthel";
				$aux="barthel_created_user";
				$this->db->select('*');
				$this->db->from($tabla);
				$this->db->where('id_hc_barthel',$id);
			}
			else if($cual=="valoracion")
			{
				$tabla="hc_valoracion";
				$idtabla="id_hc_valoracion";
				$aux="valoracion_created_user";
				$this->db->select('*');
				$this->db->from($tabla);
				$this->db->where('id_hc_valoracion',$id);
			}
			else if($cual=="norton")
			{
				$tabla="hc_norton";
				$idtabla="id_hc_norton";
				$aux="norton_created_user";
				$this->db->select('*');
				$this->db->from($tabla);
				$this->db->where('id_hc_norton',$id);
			}
			else if($cual=="braden")
			{
				$tabla="hc_braden";
				$idtabla="id_hc_braden";
				$aux="braden_created_user";
				$this->db->select('*');
				$this->db->from($tabla);
				$this->db->where('id_hc_braden',$id);
			}
			// $this->db->select('*');
			// $this->db->from('hc_pad');
			// $this->db->where('id_hc_pad',$id);
			$losdatos=$this->db->get();
			
			if($losdatos->num_rows()==1)
			{
				$separar=$losdatos->row();
				$u=$separar->$aux;

				// $this->db->select('*');
				// $this->db->from('usuarios');
				// $this->db->where('id',$u);
				// $datos=$this->db->get();
				// if($datos->num_rows()==1)
				// {
				// 	$separar2=$datos->row();
				// 	$usu=$separar2->id_usuario;
				// }

				$this->db->where('id',$u);
				$consulta=$this->db->get("registro_usuarios");
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
			else
			{
				return false;
			}
			
		}
		function enfermera_informacion($id,$cual){
			$tabla="";
			$idtabla="";
			$aux="";
			if($cual=="general")
			{
				$tabla="hc_enf_pad";
				$idtabla="id_hc_enf_pad";
				$aux="enf_pad_created_user";
				$this->db->select('*');
				$this->db->from($tabla);
				$this->db->where('id_hc_enf_pad',$id);
			}
			else if($cual=="pad")
			{
				$tabla="hc_enf_pad";
				$idtabla="id_hc_enf_pad";
				$aux="enf_pad_created_user";
				$this->db->select('*');
				$this->db->from('hc_enf_pad');
				$this->db->where('id_hc_enf_pad',$id);
			}
			else if($cual=="sociofamiliar")
			{
				$tabla="hc_enf_valoracion";
				$idtabla="id_hc_enf_valoracion";
				$aux="enf_valoracion_created_user";
				$this->db->select('*');
				$this->db->from($tabla);
				$this->db->where('id_hc_enf_valoracion',$id);
			}
			else if($cual=="escaladecarga")
			{
				$tabla="hc_enf_escala";
				$idtabla="id_hc_enf_escala";
				$aux="enf_escala_created_user";
				$this->db->select('*');
				$this->db->from($tabla);
				$this->db->where('id_hc_enf_escala',$id);
			}
			else if($cual=="intervencion")
			{
				$tabla="hc_enf_intervencion";
				$idtabla="id_hc_enf_intervencion";
				$aux="enf_intervencion_created_user";
				$this->db->select('*');
				$this->db->from($tabla);
				$this->db->where('id_hc_enf_intervencion',$id);
			}
			$losdatos=$this->db->get();
			
			if($losdatos->num_rows()==1)
			{
				$separar=$losdatos->row();
				$u=$separar->$aux;

				$this->db->where('id',$u);
				$consulta=$this->db->get("registro_usuarios");
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
			else
			{
				return false;
			}
		}
		function paciente_informacion($id){
			$this->db->where('doc_paciente',$id);
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
		function medico_informacion_ev($id){
			$tabla="";
			$idtabla="";
			$aux="";
			$tabla="ev";
			$idtabla="id_ev";
			$aux="evolucion_created_user";
			$this->db->select('*');
			$this->db->from($tabla);
			$this->db->where('id_ev',$id);
			// $this->db->select('*');
			// $this->db->from('hc_pad');
			// $this->db->where('id_hc_pad',$id);
			$losdatos=$this->db->get();
			
			if($losdatos->num_rows()==1)
			{
				$separar=$losdatos->row();
				$u=$separar->$aux;

				// $this->db->select('*');
				// $this->db->from('usuarios');
				// $this->db->where('id',$u);
				// $datos=$this->db->get();
				// if($datos->num_rows()==1)
				// {
				// 	$separar2=$datos->row();
				// 	$usu=$separar2->id_usuario;
				// }

				$this->db->where('id',$u);
				$consulta=$this->db->get("registro_usuarios");
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
			else
			{
				return false;
			}
			
		}
		function medico_informacion_nt($id){
			$tabla="";
			$idtabla="";
			$aux="";
			$tabla="nota";
			$idtabla="id_nota";
			$aux="nota_created_user";
			$this->db->select('*');
			$this->db->from($tabla);
			$this->db->where('id_nota',$id);
			// $this->db->select('*');
			// $this->db->from('hc_pad');
			// $this->db->where('id_hc_pad',$id);
			$losdatos=$this->db->get();
			
			if($losdatos->num_rows()==1)
			{
				$separar=$losdatos->row();
				$u=$separar->$aux;

				// $this->db->select('*');
				// $this->db->from('usuarios');
				// $this->db->where('id',$u);
				// $datos=$this->db->get();
				// if($datos->num_rows()==1)
				// {
				// 	$separar2=$datos->row();
				// 	$usu=$separar2->id_usuario;
				// }

				$this->db->where('id',$u);
				$consulta=$this->db->get("registro_usuarios");
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
			else
			{
				return false;
			}
		}
		function enfermera_informacion_vs($id){
			$tabla="";
			$idtabla="";
			$aux="";
			$tabla="visita";
			$idtabla="id_visita";
			$aux="visita_created_user";
			$this->db->select('*');
			$this->db->from($tabla);
			$this->db->where('id_visita',$id);
			
			$losdatos=$this->db->get();
			
			if($losdatos->num_rows()==1)
			{
				$separar=$losdatos->row();
				$u=$separar->$aux;

				$this->db->where('id',$u);
				$consulta=$this->db->get("registro_usuarios");
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
			else
			{
				return false;
			}
		}
		function imprimir_historia_uno($doc,$ff){
			$this->db->where('id_paciente',$ff);
			$this->db->where('id_hc',$doc);
			// $this->db->where('h_hc',$hh);
			$consulta=$this->db->get("hc");
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
		function imprimir_historia_g($id,$doc){
			// $this->db->where('id_hc_pad',$id);
			// $this->db->where('doc_paciente',$doc);
			// $consulta=$this->db->get("hc_pad");
			$this->db->select('hc_pad.*,registro_usuarios.*,hc_barthel.*,hc_valoracion.*,hc_norton.*,hc_braden.*');
		    $this->db->from('hc_pad');
		    $this->db->join('paciente','hc_pad.pad_documento=paciente.doc_paciente');
		    $this->db->join('registro_usuarios','hc_pad.pad_created_user=registro_usuarios.id');
		    //los demas iner
		    $this->db->join('hc_barthel','hc_pad.pad_documento=hc_barthel.barthel_doc');
		    $this->db->join('hc_valoracion','hc_pad.pad_documento=hc_valoracion.valoracion_doc');
		    $this->db->join('hc_norton','hc_pad.pad_documento=hc_norton.norton_doc');
		    $this->db->join('hc_braden','hc_pad.pad_documento=hc_braden.braden_doc');
		    // $this->db->join('hc_barthel','hc_pad.hc_pad_cod=hc_barthel.hc_barthel_cod and hc_pad.pad_documento=hc_barthel.barthel_doc');
		    // $this->db->where("id_hc_pad",$id);
		    $this->db->where("doc_paciente",$doc);
			$consulta=$this->db->get();
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
		function imprimir_historia_pad($id,$doc){
			// $this->db->where('id_hc_pad',$id);
			// $this->db->where('doc_paciente',$doc);
			// $consulta=$this->db->get("hc_pad");
			$this->db->select('hc_pad.*');
		    $this->db->from('hc_pad');
		    $this->db->join('paciente','hc_pad.pad_documento=paciente.doc_paciente');
		    $this->db->where("id_hc_pad",$id);
		    $this->db->where("doc_paciente",$doc);
			$consulta=$this->db->get();
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
		function imprimir_historia_pad_odonto($id,$doc){
			$this->db->select('odonto.*');
		    $this->db->from('odonto');
		    $this->db->join('paciente','odonto.evolucion_doc=paciente.doc_paciente');
		    $this->db->where("id_ev",$id);
		    $this->db->where("doc_paciente",$doc);
			$consulta=$this->db->get();
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
		function imprimir_historia_pad_visitaodonto($id,$doc){
			$this->db->select('visitaodonto.*');
		    $this->db->from('visitaodonto');
		    $this->db->join('paciente','visitaodonto.visita_doc=paciente.doc_paciente');
		    $this->db->where("id_vis",$id);
		    $this->db->where("doc_paciente",$doc);
			$consulta=$this->db->get();
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
		function imprimir_historia_concentimiento($id,$doc){
			$this->db->select('hc_concentimiento.*');
		    $this->db->from('hc_concentimiento');
		    $this->db->join('paciente','hc_concentimiento.concentimiento_doc=paciente.doc_paciente');
		    $this->db->where("id_hc_concentimiento",$id);
		    $this->db->where("doc_paciente",$doc);
			$consulta=$this->db->get();
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
		function imprimir_historia_barthel($id,$doc){
			$this->db->select('hc_barthel.*,hc_pad.pad_tipo_tratamiento');
		    $this->db->from('hc_barthel');
		    $this->db->join('paciente','hc_barthel.barthel_doc=paciente.doc_paciente');
		    $this->db->join('hc_pad','hc_pad.pad_f_reg=hc_barthel.barthel_f_reg');
		    $this->db->where("id_hc_barthel",$id);
		    $this->db->where("doc_paciente",$doc);
			$consulta=$this->db->get();
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
		function imprimir_historia_valoracion($id,$doc){
			$this->db->select('hc_valoracion.*,hc_pad.pad_tipo_tratamiento');
		    $this->db->from('hc_valoracion');
		    $this->db->join('paciente','hc_valoracion.valoracion_doc=paciente.doc_paciente');
		    $this->db->join('hc_pad','hc_pad.pad_f_reg=hc_valoracion.valoracion_f_reg');
		    $this->db->where("id_hc_valoracion",$id);
		    $this->db->where("doc_paciente",$doc);
			$consulta=$this->db->get();
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
		function imprimir_historia_norton($id,$doc){
			$this->db->select('hc_norton.*,hc_pad.pad_tipo_tratamiento');
		    $this->db->from('hc_norton');
		    $this->db->join('paciente','hc_norton.norton_doc=paciente.doc_paciente');
		    $this->db->join('hc_pad','hc_pad.pad_f_reg=hc_norton.norton_f_reg');
		    $this->db->where("id_hc_norton",$id);
		    $this->db->where("doc_paciente",$doc);
			$consulta=$this->db->get();
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
		function imprimir_historia_braden($id,$doc){
			$this->db->select('hc_braden.*,hc_pad.pad_tipo_tratamiento');
		    $this->db->from('hc_braden');
		    $this->db->join('paciente','hc_braden.braden_doc=paciente.doc_paciente');
		    $this->db->join('hc_pad','hc_pad.pad_f_reg=hc_braden.braden_f_reg');
		    $this->db->where("id_hc_braden",$id);
		    $this->db->where("doc_paciente",$doc);
			$consulta=$this->db->get();
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

		function imprimir_historia_enf_g($id,$doc){
			$this->db->select('hc_enf_pad.*,registro_usuarios.*,hc_enf_valoracion.*,hc_enf_escala.*');//,hc_enf_intervencion.*
		    $this->db->from('hc_enf_pad');
		    $this->db->join('paciente','hc_enf_pad.enf_pad_doc=paciente.doc_paciente');
		    $this->db->join('registro_usuarios','hc_enf_pad.enf_pad_created_user=registro_usuarios.id');

		    $this->db->join('hc_enf_valoracion','hc_enf_pad.enf_pad_doc=hc_enf_valoracion.enf_valoracion_doc');
		    $this->db->join('hc_enf_escala','hc_enf_pad.enf_pad_doc=hc_enf_escala.enf_escala_doc');
		    // $this->db->join('hc_enf_intervencion','hc_enf_pad.enf_pad_doc=hc_enf_intervencion.enf_intervencion_doc ');
		    // $this->db->join('hc_enf_intervencion','hc_enf_pad.hc_enf_pad_cod=hc_enf_intervencion.hc_enf_intervencion_cod ');
		    // $this->db->join('hc_enf_intervencion',' hc_enf_pad.hc_enf_pad_cod<=hc_enf_intervencion.hc_enf_intervencion_cod ');
		    // $this->db->join('hc_enf_intervencion','hc_enf_pad.enf_pad_doc=hc_enf_intervencion.enf_intervencion_doc and hc_enf_pad.hc_enf_pad_cod=hc_enf_intervencion.hc_enf_intervencion_cod and hc_enf_pad.enf_pad_f_reg=hc_enf_intervencion.enf_intervencion_f_reg');
		    // $this->db->join('hc_enf_intervencion','hc_enf_pad.enf_pad_doc=hc_enf_intervencion.enf_intervencion_doc and hc_enf_pad.hc_enf_pad_cod=hc_enf_intervencion.hc_enf_intervencion_cod and hc_enf_pad.enf_pad_f_reg=hc_enf_intervencion.enf_intervencion_f_reg');
		    // $this->db->join('hc_enf_intervencion','hc_enf_pad.hc_enf_pad_cod=hc_enf_intervencion.hc_enf_intervencion_cod');
		    // $this->db->where("id_hc_enf_pad",$id);
		    $this->db->where("doc_paciente",$doc);
			$consulta=$this->db->get();
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
		function imprimir_historia_enf_pad($id,$doc){
			$this->db->select('hc_enf_pad.*');
		    $this->db->from('hc_enf_pad');
		    $this->db->join('paciente','hc_enf_pad.enf_pad_doc=paciente.doc_paciente');
		    $this->db->where("id_hc_enf_pad",$id);
		    $this->db->where("doc_paciente",$doc);
			$consulta=$this->db->get();
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
		function imprimir_historia_enf_valoracion($id,$doc){
			$this->db->select('hc_enf_valoracion.*,hc_enf_pad.enf_pad_tipo_tratamiento');
		    $this->db->from('hc_enf_valoracion');
		    $this->db->join('paciente','hc_enf_valoracion.enf_valoracion_doc=paciente.doc_paciente');
		    $this->db->join('hc_enf_pad','hc_enf_pad.enf_pad_doc=hc_enf_valoracion.enf_valoracion_doc');
		    $this->db->where("id_hc_enf_valoracion",$id);
		    $this->db->where("doc_paciente",$doc);
			$consulta=$this->db->get();
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
		function imprimir_historia_enf_escala($id,$doc){
			$this->db->select('hc_enf_escala.*,hc_enf_pad.enf_pad_tipo_tratamiento');
		    $this->db->from('hc_enf_escala');
		    $this->db->join('paciente','hc_enf_escala.enf_escala_doc=paciente.doc_paciente');
		    $this->db->join('hc_enf_pad','hc_enf_pad.enf_pad_doc=hc_enf_escala.enf_escala_doc');
		    $this->db->where("id_hc_enf_escala",$id);
		    $this->db->where("doc_paciente",$doc);
			$consulta=$this->db->get();
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
		function imprimir_historia_enf_intervencion($id,$doc){
			$this->db->select('hc_enf_intervencion.*,hc_enf_pad.enf_pad_tipo_tratamiento');//,hc_enf_pad.enf_pad_tipo_tratamiento
		    $this->db->from('hc_enf_intervencion');
		    $this->db->join('paciente','hc_enf_intervencion.enf_intervencion_doc=paciente.doc_paciente');
		    $this->db->join('hc_enf_pad','hc_enf_pad.hc_enf_pad_cod=hc_enf_intervencion.hc_enf_intervencion_cod ');
		    // $this->db->join('hc_enf_pad','hc_enf_pad.enf_pad_f_reg=hc_enf_intervencion.enf_intervencion_f_reg');
		    // $this->db->join('hc_enf_pad','hc_enf_pad.hc_enf_pad_cod=hc_enf_intervencion.hc_enf_intervencion_cod and hc_enf_pad.enf_pad_doc=hc_enf_intervencion.enf_intervencion_doc');
		    $this->db->where("id_hc_enf_intervencion",$id);
		    $this->db->where("doc_paciente",$doc);
			$consulta=$this->db->get();
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
		function imprimir_evolucion($id,$doc){
			$this->db->select('ev.*');
			$this->db->from('ev');
			$this->db->join('paciente','ev.evolucion_doc=paciente.doc_paciente');
			$this->db->where('id_ev',$id);
			$this->db->where('doc_paciente',$doc);
			$consulta=$this->db->get();
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
		function imprimir_visita($id,$doc){
			$this->db->select('visita.*');
			$this->db->from('visita');
			$this->db->join('paciente','visita.visita_doc=paciente.doc_paciente');
			$this->db->where('id_visita',$id);
			$this->db->where('doc_paciente',$doc);
			$consulta=$this->db->get();
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
		function imprimir_nota($id,$doc){
			$this->db->select('nota.*');
			$this->db->from('nota');
			$this->db->join('paciente','nota.nota_doc=paciente.doc_paciente');
			$this->db->where('id_nota',$id);
			$this->db->where('doc_paciente',$doc);
			$consulta=$this->db->get();
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
		function buscar_registros_paciente($doc){
			date_default_timezone_set("America/Bogota");
	        $now = time();
	        $getfecha=date("Y-m-d");

			$consulta2="SELECT pad_documento FROM hc_pad WHERE pad_documento='".$doc."' ";
			$r3=$this->db->query($consulta2);
			if($r3->num_rows()==1)
			{
				$r3=$r3->row();
				$r3=$r3->pad_documento;
			}
			else
			{
				$r3="";
			}
			if($r3)
			{

			}
			else
			{
				$r3="0";
			}

			$consulta3="SELECT barthel_doc FROM hc_barthel WHERE barthel_doc='".$doc."'";
			$r4=$this->db->query($consulta3);
			if($r4->num_rows()==1)
			{
				$r4=$r4->row();
				$r4=$r4->barthel_doc;
			}
			else
			{
				$r4="";
			}
			
			if($r4)
			{

			}
			else
			{
				$r4="0";
			}

			$consulta4="SELECT valoracion_doc FROM  hc_valoracion WHERE valoracion_doc='".$doc."'";
			$r5=$this->db->query($consulta4);
			if($r5->num_rows()==1)
			{
				$r5=$r5->row();
				$r5=$r5->valoracion_doc;
			}
			else
			{
				$r5="";
			}
			if($r5)
			{

			}
			else
			{
				$r5="0";
			}

			$consulta5="SELECT norton_doc FROM hc_norton WHERE norton_doc='".$doc."' ";
			$r6=$this->db->query($consulta5);
			if($r6->num_rows()==1)
			{
				$r6=$r6->row();
				$r6=$r6->norton_doc;
			}
			else
			{
				$r6="";
			}
			if($r6)
			{

			}
			else
			{
				$r6="0";
			}

			$consulta6="SELECT braden_doc FROM hc_braden WHERE braden_doc='".$doc."' ";
			$r7=$this->db->query($consulta6);
			if($r7->num_rows()==1)
			{
				$r7=$r7->row();
				$r7=$r7->braden_doc;
			}
			else
			{
				$r7="";
			}
			if($r7)
			{

			}
			else
			{
				$r7="0";
			}

			$resultado=array(
					'hc_pad'=>$r3,
					'hc_barthel'=>$r4,
					'hc_valoracion'=>$r5,
					'hc_norton'=>$r6,
					'hc_braden'=>$r7
					);		
			return $resultado;
		}
		function buscar_registros_paciente_odonto($doc){
			date_default_timezone_set("America/Bogota");
	        $now = time();
	        $getfecha=date("Y-m-d");

			$consulta2="SELECT evolucion_doc FROM odonto WHERE evolucion_doc='".$doc."' ";
			$r3=$this->db->query($consulta2);
			if($r3->num_rows()==1)
			{
				$r3=$r3->row();
				$r3=$r3->evolucion_doc;
			}
			else
			{
				$r3="";
			}
			if($r3)
			{

			}
			else
			{
				$r3="0";
			}

			$consulta3="SELECT visita_doc FROM visitaodonto WHERE visita_doc='".$doc."'";
			$r4=$this->db->query($consulta3);
			if($r4->num_rows()>0)
			{
				$r4=$r4->row();
				$r4=$r4->visita_doc;
			}
			else
			{
				$r4="";
			}
			
			if($r4)
			{

			}
			else
			{
				$r4="0";
			}



			$resultado=array(
					'odonto'=>$r3,
					'visitaodonto'=>$r4
					);		
			return $resultado;
		}			
		function imprimir_historia_barthel_general($doc,$fch){
			$this->db->select('hc_barthel.*');
		    $this->db->from('hc_barthel');
		    $this->db->join('paciente','hc_barthel.barthel_doc=paciente.doc_paciente');
		    // $this->db->where("id_hc_barthel",$id);
		    // $this->db->where("doc_paciente",$doc);
		    $this->db->where("barthel_doc",$doc);
		    $this->db->where("barthel_f_reg",$fch);
		    // $this->db->where("hc_barthel_cod","1");
			$consulta=$this->db->get();
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
		function imprimir_historia_valoracion_general($doc){
			$this->db->select('hc_valoracion.*');
		    $this->db->from('hc_valoracion');
		    $this->db->join('paciente','hc_valoracion.valoracion_doc=paciente.doc_paciente');
		    // $this->db->where("id_hc_valoracion",$id);
		    $this->db->where("doc_paciente",$doc);
			$consulta=$this->db->get();
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
		function imprimir_historia_norton_general($doc){
			$this->db->select('hc_norton.*');
		    $this->db->from('hc_norton');
		    $this->db->join('paciente','hc_norton.norton_doc=paciente.doc_paciente');
		    // $this->db->where("id_hc_norton",$id);
		    $this->db->where("doc_paciente",$doc);
			$consulta=$this->db->get();
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
		function imprimir_historia_braden_general($doc){
			$this->db->select('hc_braden.*');
		    $this->db->from('hc_braden');
		    $this->db->join('paciente','hc_braden.braden_doc=paciente.doc_paciente');
		    // $this->db->where("id_hc_braden",$id);
		    $this->db->where("doc_paciente",$doc);
			$consulta=$this->db->get();
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
		function buscar_registros_paciente_enf($doc){
			date_default_timezone_set("America/Bogota");
	        $now = time();
	        $getfecha=date("Y-m-d");

			$consulta2="SELECT enf_pad_doc FROM hc_enf_pad WHERE enf_pad_doc='".$doc."' ";
			$r3=$this->db->query($consulta2);
			if($r3->num_rows()==1)
			{
				$r3=$r3->row();
				$r3=$r3->enf_pad_doc;
			}
			else
			{
				$r3="";
			}
			if($r3)
			{

			}
			else
			{
				$r3="0";
			}

			$consulta3="SELECT enf_valoracion_doc FROM hc_enf_valoracion WHERE enf_valoracion_doc='".$doc."'";
			$r4=$this->db->query($consulta3);
			if($r4->num_rows()==1)
			{
				$r4=$r4->row();
				$r4=$r4->enf_valoracion_doc;
			}
			else
			{
				$r4="";
			}
			
			if($r4)
			{

			}
			else
			{
				$r4="0";
			}

			$consulta4="SELECT enf_escala_doc FROM  hc_enf_escala WHERE enf_escala_doc='".$doc."'";
			$r5=$this->db->query($consulta4);
			if($r5->num_rows()==1)
			{
				$r5=$r5->row();
				$r5=$r5->enf_escala_doc;
			}
			else
			{
				$r5="";
			}
			if($r5)
			{

			}
			else
			{
				$r5="0";
			}

			$consulta5="SELECT enf_intervencion_doc FROM hc_enf_intervencion WHERE enf_intervencion_doc='".$doc."' ";
			$r6=$this->db->query($consulta5);
			if($r6->num_rows()==1)
			{
				$r6=$r6->row();
				$r6=$r6->enf_intervencion_doc;
			}
			else
			{
				$r6="";
			}
			if($r6)
			{

			}
			else
			{
				$r6="0";
			}

			// $consulta6="SELECT braden_doc FROM hc_braden WHERE braden_doc='".$doc."' ";
			// $r7=$this->db->query($consulta6);
			// if($r7->num_rows()==1)
			// {
			// 	$r7=$r7->row();
			// 	$r7=$r7->braden_doc;
			// }
			// else
			// {
			// 	$r7="";
			// }
			// if($r7)
			// {

			// }
			// else
			// {
			// 	$r7="0";
			// }

			$resultado=array(
					'hc_enf_pad'=>$r3,
					'hc_enf_valoracion'=>$r4,
					'hc_enf_escala'=>$r5,
					'hc_enf_intervencionnorton'=>$r6
					);		
			return $resultado;
		}
		function imprimir_historia_enf_valoracion_general($doc,$fch){
			$this->db->select('hc_enf_valoracion.*');
		    $this->db->from('hc_enf_valoracion');
		    $this->db->join('paciente','hc_enf_valoracion.enf_valoracion_doc=paciente.doc_paciente');
		    // $this->db->where("id_hc_barthel",$id);
		    // $this->db->where("doc_paciente",$doc);
		    $this->db->where("enf_valoracion_doc",$doc);
		    $this->db->where("enf_valoracion_f_reg",$fch);
		    // $this->db->where("hc_barthel_cod","1");
			$consulta=$this->db->get();
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
		function imprimir_f($id,$doc){
			$this->db->select('formulacion.*');
			$this->db->from('formulacion');
			$this->db->join('paciente','formulacion.formulacion_doc=paciente.doc_paciente');
			$this->db->where('formulacion.id',$id);
			$this->db->where('paciente.doc_paciente',$doc);
			$consulta=$this->db->get();
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
		function imprimir_f2($id,$doc){
			$this->db->select('hc_pad.*');
			$this->db->from('hc_pad');
			$this->db->join('paciente','hc_pad.pad_documento=paciente.doc_paciente');
			$this->db->where('hc_pad.hc_pad_cod',$id);
			$this->db->where('paciente.doc_paciente',$doc);
			$consulta=$this->db->get();
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
		function medoenf_informacion_f($id){
			// $tabla="";
			// $idtabla="";
			// $aux="";
			// $tabla="visita";
			// $idtabla="id_visita";
			// $aux="visita_created_user";
			// $this->db->select('*');
			// $this->db->from($tabla);
			// $this->db->where('id_visita',$id);
			
			// $losdatos=$this->db->get();
			
			// if($losdatos->num_rows()==1)
			// {
				
				
			// }
			// else
			// {
			// 	return false;
			// }
			// $separar=$losdatos->row();
			// $u=$separar->$aux;

			$this->db->where('id',$id);
			$consulta=$this->db->get("registro_usuarios");
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