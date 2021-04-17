<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Historia_enfermera_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function consultar_diagnostico_nombres($busqueda){
			if($busqueda)
			{
				$consulta="SELECT * FROM nanda WHERE descripcion_nanda LIKE '%".$busqueda."%' or codigo_nanda LIKE '%".$busqueda."%' LIMIT 0,15";
			}
			else
			{
				$consulta="SELECT * FROM nanda LIMIT 0,3 ";
			}
			// $this->db->like("descripcion_cie",$busqueda);
			$consulta=$this->db->query($consulta);
			return $consulta->result();
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
		function buscar_paciente_nombres2($busqueda){
			// $this->db->like("doc_paciente",$busqueda);
			// $this->db->like("pnombre_paciente",$busqueda);
			// $this->db->where("id_paciente!=",'PC0000');
			// $consulta=$this->db->get("paciente");
			if($busqueda)
			{
				// $consulta="SELECT paciente.doc_paciente,paciente.tipo_doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente,hc_enf_valoracion.id_hc_enf_valoracion,hc_enf_escala.id_hc_enf_escala,hc_enf_intervencion.id_hc_enf_intervencion FROM hc_enf_pad INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente INNER JOIN hc_enf_valoracion ON hc_enf_valoracion.enf_valoracion_doc=paciente.doc_paciente INNER JOIN hc_enf_escala ON hc_enf_escala.enf_escala_doc=paciente.doc_paciente INNER JOIN hc_enf_intervencion ON hc_enf_intervencion.enf_intervencion_doc=paciente.doc_paciente WHERE doc_paciente LIKE '%".$busqueda."%' or pnombre_paciente LIKE '%".$busqueda."%' or snombre_paciente LIKE '%".$busqueda."%' or papellido_paciente LIKE '%".$busqueda."%' or sapellido_paciente LIKE '%".$busqueda."%'";
				$consulta="SELECT paciente.doc_paciente,paciente.tipo_doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente,hc_enf_pad.enf_pad_f_reg,hc_enf_pad.hc_enf_pad_cod FROM hc_enf_pad INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente WHERE hc_enf_pad_cod='1' and doc_paciente LIKE '%".$busqueda."%' or pnombre_paciente LIKE '%".$busqueda."%' or snombre_paciente LIKE '%".$busqueda."%' or papellido_paciente LIKE '%".$busqueda."%' or sapellido_paciente LIKE '%".$busqueda."%'";
			}
			else
			{
				// $consulta="SELECT paciente.doc_paciente,paciente.tipo_doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente,hc_enf_valoracion.id_hc_enf_valoracion,hc_enf_escala.id_hc_enf_escala,hc_enf_intervencion.id_hc_enf_intervencion FROM hc_enf_pad INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente INNER JOIN hc_enf_valoracion ON hc_enf_valoracion.enf_valoracion_doc=paciente.doc_paciente INNER JOIN hc_enf_escala ON hc_enf_escala.enf_escala_doc=paciente.doc_paciente INNER JOIN hc_enf_intervencion ON hc_enf_intervencion.enf_intervencion_doc=paciente.doc_paciente WHERE id_paciente!='PC0000' ";
				$consulta="SELECT paciente.doc_paciente,paciente.tipo_doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente,hc_enf_pad.enf_pad_f_reg,hc_enf_pad.hc_enf_pad_cod FROM hc_enf_pad INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente WHERE id_paciente!='PC0000' and hc_enf_pad_cod='1' ";
				// SELECT hc_pad.pad_documento,paciente.pnombre_paciente,paciente.papellido_paciente,hc_concentimiento.id_hc_concentimiento,hc_barthel.id_hc_barthel,hc_valoracion.id_hc_valoracion,hc_norton.id_hc_norton,hc_braden.id_hc_braden FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente INNER JOIN hc_concentimiento ON hc_concentimiento.concentimiento_doc=paciente.doc_paciente INNER JOIN hc_barthel ON hc_barthel.barthel_doc=paciente.doc_paciente INNER JOIN hc_valoracion ON hc_valoracion.valoracion_doc=paciente.doc_paciente INNER JOIN hc_norton ON hc_norton.norton_doc=paciente.doc_paciente INNER JOIN hc_braden ON hc_braden.braden_doc=paciente.doc_paciente
			}
			$r=$this->db->query($consulta);
			return $r->result();
		}
		function buscar_registro_individual($busqueda){
			
			//$consulta="SELECT paciente.doc_paciente FROM hc_enf_pad INNER JOIN paciente ON hc_enf_pad.enf_pad_doc=paciente.doc_paciente INNER JOIN hc_enf_valoracion ON hc_enf_valoracion.enf_valoracion_doc=paciente.doc_paciente INNER JOIN hc_enf_escala ON hc_enf_escala.enf_escala_doc=paciente.doc_paciente INNER JOIN hc_enf_intervencion ON hc_enf_intervencion.enf_intervencion_doc=paciente.doc_paciente WHERE doc_paciente='".$busqueda."' ";
			$consulta="SELECT COUNT(*) FROM hc_enf_pad WHERE enf_pad_doc='".$busqueda."' ";
			$r=$this->db->query($consulta);
			return $r->result();
		}
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
		function buscar_registros_paciente($doc){
			date_default_timezone_set("America/Bogota");
	        $now = time();
	        $getfecha=date("Y-m-d");
	        $prim="SELECT enf_pad_f_reg FROM hc_enf_pad WHERE enf_pad_doc='".$doc."' and hc_enf_pad_cod='1' ";
			$rprim=$this->db->query($prim);
			if($rprim->num_rows()==1)
			{
				$rprim=$rprim->row();
				$rprim=$rprim->enf_pad_f_reg;
			}
			else
			{
				$rprim="";
			}

			$consulta2="SELECT enf_pad_doc FROM hc_enf_pad WHERE enf_pad_doc='".$doc."' and enf_pad_f_reg='".$rprim."' ";
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

			$consulta3="SELECT enf_valoracion_doc FROM hc_enf_valoracion WHERE enf_valoracion_doc='".$doc."' and enf_valoracion_f_reg='".$rprim."' ";
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

			$consulta4="SELECT enf_escala_doc FROM  hc_enf_escala WHERE enf_escala_doc='".$doc."' and enf_escala_f_reg='".$rprim."'";
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

			$consulta5="SELECT enf_intervencion_doc FROM hc_enf_intervencion WHERE enf_intervencion_doc='".$doc."' and enf_intervencion_f_reg='".$rprim."' ";
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
			$resultado=
					$r3.','.
					$r4.','.
					$r5.','.
					$r6
					;			
			return $resultado;
		}
		function buscar_registros_paciente_escalas($doc){
			date_default_timezone_set("America/Bogota");
	        $now = time();
	        $getfecha=date("Y-m-d");

			// $consulta2="SELECT pad_documento FROM hc_pad WHERE pad_documento='".$doc."' ";
			// $r3=$this->db->query($consulta2);
			// if($r3->num_rows()==1)
			// {
			// 	$r3=$r3->row();
			// 	$r3=$r3->pad_documento;
			// }
			// else
			// {
			// 	$r3="";
			// }
			// if($r3)
			// {

			// }
			// else
			// {
			// 	$r3="0";
			// }

			$consulta3="SELECT MAX(barthel_total) barthel_total FROM hc_barthel WHERE barthel_doc='".$doc."'";
			$r4=$this->db->query($consulta3);
			if($r4->num_rows()==1)
			{
				$r4=$r4->row();
				$r4=$r4->barthel_total;
			}
			else
			{
				$r4="";
			}
			
			if($r4)
			{
				// $r4=$r4;
			}
			else
			{
				$r4="0";
			}

			$consulta4="SELECT MAX(valoracion_test_total) valoracion_test_total FROM  hc_valoracion WHERE valoracion_doc='".$doc."'";
			$r5=$this->db->query($consulta4);
			if($r5->num_rows()==1)
			{
				$r5=$r5->row();
				$r5=$r5->valoracion_test_total;
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

			$consulta5="SELECT MAX(norton_total) norton_total FROM hc_norton WHERE norton_doc='".$doc."' ";
			$r6=$this->db->query($consulta5);
			if($r6->num_rows()==1)
			{
				$r6=$r6->row();
				$r6=$r6->norton_total;
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

			$consulta6="SELECT MAX(braden_total_obtenido) braden_total_obtenido FROM hc_braden WHERE braden_doc='".$doc."' ";
			$r7=$this->db->query($consulta6);
			if($r7->num_rows()==1)
			{
				$r7=$r7->row();
				$r7=$r7->braden_total_obtenido;
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

			// $resultado=array(
			// 		'hc_pad'=>$r3,
			// 		'hc_barthel'=>'0',
			// 		'hc_valoracion'=>'0',
			// 		'hc_norton'=>'0',
			// 		'hc_braden'=>'0'
			// 		);
			// $resultado=array(
			// 		$r3,
			// 		'0',
			// 		'0',
			// 		'0',
			// 		'0'
			// 		);	
			$resultado=
					// $r3.','.
					$r4.','.
					$r5.','.
					$r6.','.
					$r7
					;			
			return $resultado;
		}
		function buscar_registros_paciente_escalas_enf($doc){
			date_default_timezone_set("America/Bogota");
	        $now = time();
	        $getfecha=date("Y-m-d");

			// $consulta2="SELECT pad_documento FROM hc_pad WHERE pad_documento='".$doc."' ";
			// $r3=$this->db->query($consulta2);
			// if($r3->num_rows()==1)
			// {
			// 	$r3=$r3->row();
			// 	$r3=$r3->pad_documento;
			// }
			// else
			// {
			// 	$r3="";
			// }
			// if($r3)
			// {

			// }
			// else
			// {
			// 	$r3="0";
			// }

			$consulta3="SELECT MAX(barthel_total) barthel_total FROM hc_barthel WHERE barthel_doc='".$doc."'";
			$r4=$this->db->query($consulta3);
			if($r4->num_rows()==1)
			{
				$r4=$r4->row();
				$r4=$r4->barthel_total;
			}
			else
			{
				$r4="";
			}
			
			if($r4)
			{
				// $r4=$r4;
			}
			else
			{
				$r4="0";
			}

			$consulta4="SELECT MAX(valoracion_test_total) valoracion_test_total FROM  hc_valoracion WHERE valoracion_doc='".$doc."'";
			$r5=$this->db->query($consulta4);
			if($r5->num_rows()==1)
			{
				$r5=$r5->row();
				$r5=$r5->valoracion_test_total;
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

			$consulta5="SELECT MAX(norton_total) norton_total FROM hc_norton WHERE norton_doc='".$doc."' ";
			$r6=$this->db->query($consulta5);
			if($r6->num_rows()==1)
			{
				$r6=$r6->row();
				$r6=$r6->norton_total;
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

			$consulta6="SELECT MAX(braden_total_obtenido) braden_total_obtenido FROM hc_braden WHERE braden_doc='".$doc."' ";
			$r7=$this->db->query($consulta6);
			if($r7->num_rows()==1)
			{
				$r7=$r7->row();
				$r7=$r7->braden_total_obtenido;
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
			$consulta7="SELECT enf_valoracion_situacion_total FROM hc_enf_valoracion WHERE enf_valoracion_doc='".$doc."' and hc_enf_valoracion_cod='1' ";
			$r8=$this->db->query($consulta7);
			if($r8->num_rows()==1)
			{
				$r8=$r8->row();
				$r8=$r8->enf_valoracion_situacion_total;
			}
			else
			{
				$r8="";
			}
			if($r8)
			{

			}
			else
			{
				$r8="0";
			}

			$consulta8="SELECT enf_valoracion_aydtotal FROM hc_enf_valoracion WHERE enf_valoracion_doc='".$doc."' and hc_enf_valoracion_cod='1' ";
			$r9=$this->db->query($consulta8);
			if($r9->num_rows()==1)
			{
				$r9=$r9->row();
				$r9=$r9->enf_valoracion_aydtotal;
			}
			else
			{
				$r9="";
			}
			if($r9)
			{

			}
			else
			{
				$r9="0";
			}

			$consulta9="SELECT enf_escala_total FROM hc_enf_escala WHERE enf_escala_doc='".$doc."' and hc_enf_escala_cod='1' ";
			$r10=$this->db->query($consulta9);
			if($r10->num_rows()==1)
			{
				$r10=$r10->row();
				$r10=$r10->enf_escala_total;
			}
			else
			{
				$r10="";
			}
			if($r10)
			{

			}
			else
			{
				$r10="0";
			}

			$resultado=
					// $r3.','.
					$r5.','.
					$r4.','.
					$r6.','.
					$r7.','.
					$r8.','.
					$r9.','.
					$r10
					;			
			return $resultado;
		}
		function consultar_diagnostico_individual($busqueda){
			$this->db->select("MAX(pad_diagnosticos) pad_diagnosticos");
			$this->db->where("pad_documento",$busqueda);
			$consulta=$this->db->get("hc_pad");
			return $consulta->result();
			// return $busqueda;
		}
		function consultar_diagnostico_individual2($busqueda){
			date_default_timezone_set("America/Bogota");
	        $now = time();
	        $getfecha=date("Y-m-d");
			$this->db->select("enf_pad_diagnosticos_enfermera");
			$this->db->where("enf_pad_doc",$busqueda);
			$this->db->where("enf_pad_f_reg",$getfecha);
			$consulta=$this->db->get("hc_enf_pad");
			return $consulta->result();
			// return $busqueda;
		}
		function consultar_medicamento_individual($busqueda){
			$this->db->select("MAX(pad_medicamentos) pad_medicamentos");
			$this->db->where("pad_documento",$busqueda);
			$consulta=$this->db->get("hc_pad");
			return $consulta->result();
			// return $busqueda;
		}
		function registrar_historiapad_enf($datos){
			$existe="SELECT COUNT(*) hc_enf_pad FROM hc_enf_pad WHERE enf_pad_doc='".$datos['enf_pad_doc']."' ";
			$resultado=$this->db->query($existe);
			$resultado=$resultado->row();
			$result=$resultado->hc_enf_pad;
			// if($resultado->num_rows()==1)
			// {
			// 	$resultado=$resultado->row();
			// 	$result=$resultado->enf_pad_doc;
			// }
			// else
			// {
			// 	$result="";
			// }
			if($result>0)
			{
				return 0;
			}
			else
			{
				$siguiente="SELECT MAX(id_hc_enf_pad) id_hc_enf_pad FROM hc_enf_pad";
				$siguiente=$this->db->query($siguiente);
				$siguiente=$siguiente->row();
				$siguiente=$siguiente->id_hc_enf_pad;
				$sigla='PADE';
				$numero=explode($sigla, $siguiente);
				$siguiente=$numero[1];
				$suma=$numero[1]+1;

				if($suma<=9)
				{
					$codigo=$sigla."000".$suma;
				}
				else if($suma>9 && $suma<=99)
				{
					$codigo=$sigla."00".$suma;
				}
				else if($suma>99 && $suma<=999)
				{
					$codigo=$sigla."0".$suma;
				}
				else if($suma>999 && $suma<=9999)
				{
					$codigo=$sigla.$suma;
				}
				else if($suma>9999)
				{
					$codigo=$sigla."A000".$suma;
				}
				$seguir="SELECT COUNT(*) hc_enf_pad_cod FROM hc_enf_pad WHERE enf_pad_doc='".$datos['enf_pad_doc']."'";
				$seguir=$this->db->query($seguir);
				$seguir=$seguir->row();
				$seguir=$seguir->hc_enf_pad_cod;
				if($seguir==0)
				{
					$suma2=1;
				}
				else
				{
					$suma2=$seguir+1;
				}
				
				$obcod=$codigo;
				$campos= array(
					'id_hc_enf_pad'=>$codigo,
					'hc_enf_pad_cod'=>$suma2,
					'enf_pad_doc'=>$datos['enf_pad_doc'],
					'enf_pad_diagnosticos'=>$datos['enf_pad_diagnosticos'],
					'enf_pad_antecedentes'=>$datos['enf_pad_antecedentes'],
					'enf_pad_val_subjetiva'=>$datos['enf_pad_val_subjetiva'],
					'enf_pad_sv_fc'=>$datos['enf_pad_sv_fc'],
					'enf_pad_sv_fr'=>$datos['enf_pad_sv_fr'],
					'enf_pad_sv_t'=>$datos['enf_pad_sv_t'],
					'enf_pad_sv_sistole'=>$datos['enf_pad_sv_sistole'],
					'enf_pad_sv_diastole'=>$datos['enf_pad_sv_diastole'],
					'enf_pad_svta'=>$datos['enf_pad_svta'],
					'enf_pad_sv_saturacion'=>$datos['enf_pad_sv_saturacion'],
					'enf_pad_sv_glucometria'=>$datos['enf_pad_sv_glucometria'],
					'enf_pad_dom1_p1'=>$datos['enf_pad_dom1_p1'],
					'enf_pad_dom1_p2'=>$datos['enf_pad_dom1_p2'],
					'enf_pad_dom2_nutricion'=>$datos['enf_pad_dom2_nutricion'],
					'enf_pad_dom2_otro'=>$datos['enf_pad_dom2_otro'],
					'enf_pad_dom2_mucosa'=>$datos['enf_pad_dom2_mucosa'],
					'enf_pad_dom2_dentadura'=>$datos['enf_pad_dom2_dentadura'],
					'enf_pad_dom2_piel'=>$datos['enf_pad_dom2_piel'],
					'enf_pad_dom2_hidratacion'=>$datos['enf_pad_dom2_hidratacion'],
					'enf_pad_dom2_abdomen'=>$datos['enf_pad_dom2_abdomen'],
					'enf_pad_dom2_rsls'=>$datos['enf_pad_dom2_rsls'],
					'enf_pad_dom2_sng'=>$datos['enf_pad_dom2_sng'],
					'enf_pad_dom2_drenaje'=>$datos['enf_pad_dom2_drenaje'],
					'enf_pad_dom2_caracteristicas'=>$datos['enf_pad_dom2_caracteristicas'],
					'enf_pad_dom3_deposiciones'=>$datos['enf_pad_dom3_deposiciones'],
					'enf_pad_dom3_tipo'=>$datos['enf_pad_dom3_tipo'],
					'enf_pad_dom3_vomito'=>$datos['enf_pad_dom3_vomito'],
					'enf_pad_dom3_caracteristicas'=>$datos['enf_pad_dom3_caracteristicas'],
					'enf_pad_dom3_colostomia'=>$datos['enf_pad_dom3_colostomia'],
					'enf_pad_dom3_oresis'=>$datos['enf_pad_dom3_oresis'],
					'enf_pad_dom4_dependencia'=>$datos['enf_pad_dom4_dependencia'],
					'enf_pad_dom4_sueno'=>$datos['enf_pad_dom4_sueno'],
					'enf_pad_dom4_sueno_otros'=>$datos['enf_pad_dom4_sueno_otros'],
					'enf_pad_dom4_fiebre'=>$datos['enf_pad_dom4_fiebre'],
					'enf_pad_dom4_tipo'=>$datos['enf_pad_dom4_tipo'],
					'enf_pad_dom4_fisica'=>$datos['enf_pad_dom4_fisica'],
					'enf_pad_dom4_fisica_descripcion'=>$datos['enf_pad_dom4_fisica_descripcion'],
					'enf_pad_dom4_muscular'=>$datos['enf_pad_dom4_muscular'],
					'enf_pad_dom4_muscular_descripcion'=>$datos['enf_pad_dom4_muscular_descripcion'],
					'enf_pad_dom4_respiratorias'=>$datos['enf_pad_dom4_respiratorias'],
					'enf_pad_dom4_llenado_capilar'=>$datos['enf_pad_dom4_llenado_capilar'],
					'enf_pad_dom4_pulso'=>$datos['enf_pad_dom4_pulso'],
					'enf_pad_dom4_pulso_f_implantacion'=>$datos['enf_pad_dom4_pulso_f_implantacion'],
					'enf_pad_dom4_fr'=>$datos['enf_pad_dom4_fr'],
					'enf_pad_dom4_fr_descripcion'=>$datos['enf_pad_dom4_fr_descripcion'],
					'enf_pad_dom4_ruidos'=>$datos['enf_pad_dom4_ruidos'],
					'enf_pad_dom4_tos'=>$datos['enf_pad_dom4_tos'],
					'enf_pad_dom4_tos_tipo'=>$datos['enf_pad_dom4_tos_tipo'],
					'enf_pad_dom4_oxigenoterapia'=>$datos['enf_pad_dom4_oxigenoterapia'],
					'enf_pad_dom4_oxigenoterapia_tipo'=>$datos['enf_pad_dom4_oxigenoterapia_tipo'],
					'enf_pad_dom4_fio'=>$datos['enf_pad_dom4_fio'],
					'enf_pad_dom4_tet'=>$datos['enf_pad_dom4_tet'],
					'enf_pad_dom4_traqueostomia'=>$datos['enf_pad_dom4_traqueostomia'],
					
					'enf_pad_dom5_escala'=>$datos['enf_pad_dom5_escala'],
					'enf_pad_dom5_escala_otro'=>$datos['enf_pad_dom5_escala_otro'],
					'enf_pad_dom5_conciencia'=>$datos['enf_pad_dom5_conciencia'],
					'enf_pad_dom5_otro'=>$datos['enf_pad_dom5_otro'],
					'enf_pad_dom5_comunicacion'=>$datos['enf_pad_dom5_comunicacion'],
					'enf_pad_dom5_comunicacion_otro'=>$datos['enf_pad_dom5_comunicacion_otro'],
					'enf_pad_dom6_emocional'=>$datos['enf_pad_dom6_emocional'],
					'enf_pad_dom6_lenguaje'=>$datos['enf_pad_dom6_lenguaje'],
					'enf_pad_dom6_escucha'=>$datos['enf_pad_dom6_escucha'],
					'enf_pad_dom6_vision'=>$datos['enf_pad_dom6_vision'],
					'enf_pad_dom7_familiares'=>$datos['enf_pad_dom7_familiares'],
					'enf_pad_dom7_maltrato'=>$datos['enf_pad_dom7_maltrato'],
					'enf_pad_dom7_equipo'=>$datos['enf_pad_dom7_equipo'],
					'enf_pad_dom8_civil'=>$datos['enf_pad_dom8_civil'],
					'enf_pad_dom8_paridad'=>$datos['enf_pad_dom8_paridad'],
					'enf_pad_dom8_hijos'=>$datos['enf_pad_dom8_hijos'],
					'enf_pad_dom8_vivos'=>$datos['enf_pad_dom8_vivos'],
					'enf_pad_dom8_fallecidos'=>$datos['enf_pad_dom8_fallecidos'],
					'enf_pad_dom8_its'=>$datos['enf_pad_dom8_its'],
					'enf_pad_dom8_especifique'=>$datos['enf_pad_dom8_especifique'],
					'enf_pad_dom9_respuesta'=>$datos['enf_pad_dom9_respuesta'],
					'enf_pad_dom9_intento'=>$datos['enf_pad_dom9_intento'],
					'enf_pad_dom9_intento_descripcion'=>$datos['enf_pad_dom9_intento_descripcion'],
					'enf_pad_dom10_religion'=>$datos['enf_pad_dom10_religion'],
					'enf_pad_dom10_sanguinea'=>$datos['enf_pad_dom10_sanguinea'],
					'enf_pad_dom10_sanguinea_descripcion'=>$datos['enf_pad_dom10_sanguinea_descripcion'],
					'enf_pad_dom10_religiosa'=>$datos['enf_pad_dom10_religiosa'],
					'enf_pad_dom10_religiosa_descripcion'=>$datos['enf_pad_dom10_religiosa_descripcion'],
					'enf_pad_dom11_seguridad'=>$datos['enf_pad_dom11_seguridad'],
					'enf_pad_dom11_seguridad_otros'=>$datos['enf_pad_dom11_seguridad_otros'],
					'enf_pad_dom11_cutanea'=>$datos['enf_pad_dom11_cutanea'],
					'enf_pad_dom11_localizacion'=>$datos['enf_pad_dom11_localizacion'],
					'enf_pad_dom11_grado'=>$datos['enf_pad_dom11_grado'],
					'enf_pad_dom11_requerimientos'=>$datos['enf_pad_dom11_requerimientos'],
					'enf_pad_dom11_requerimientos_otros'=>$datos['enf_pad_dom11_requerimientos_otros'],
					'enf_pad_dom12_dolor'=>$datos['enf_pad_dom12_dolor'],
					'enf_pad_dom12_dolor_nivel'=>$datos['enf_pad_dom12_dolor_nivel'],
					'enf_pad_dom12_dolor_localizacion'=>$datos['enf_pad_dom12_dolor_localizacion'],
					'enf_pad_dom12_estado'=>$datos['enf_pad_dom12_estado'],
					'enf_pad_dom12_especifique'=>$datos['enf_pad_dom12_especifique'],
					'enf_pad_dom13_peso'=>$datos['enf_pad_dom13_peso'],
					'enf_pad_dom13_talla'=>$datos['enf_pad_dom13_talla'],
					'enf_pad_dom13_imc'=>$datos['enf_pad_dom13_imc'],
					'enf_pad_dom13_cual'=>$datos['enf_pad_dom13_cual'],
					'enf_pad_detalle_g'=>$datos['enf_pad_detalle_g'],
					'enf_pad_detalle_p'=>$datos['enf_pad_detalle_p'],
					'enf_pad_detalle_a'=>$datos['enf_pad_detalle_a'],
					'enf_pad_detalle_c'=>$datos['enf_pad_detalle_c'],
					'enf_pad_notas_enfermeria'=>$datos['enf_pad_notas_enfermeria'],
					// 'enf_pad_total'=>$datos['enf_pad_total'],
					'enf_pad_diagnosticos_enfermera'=>$datos['enf_pad_diagnosticos_enfermera'],
					'enf_pad_f_reg'=>$datos['enf_pad_f_reg'],
					'enf_pad_h_reg'=>$datos['enf_pad_h_reg'],
					'enf_pad_h_inicio'=>$datos['enf_pad_h_inicio'],
					'enf_pad_tipo_tratamiento'=>$datos['enf_pad_tipo_tratamiento'],
					'enf_pad_created_user'=>$datos['enf_pad_created_user'],
					'enf_pad_update_user'=>$datos['enf_pad_update_user']
					);
				
				$rs=$this->db->insert('hc_enf_pad',$campos);
				
				return '<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
					   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
					   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					   			<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<h5 class="text-center">Ingreso al Pad Registrado</h5>
						</div>
					 	<div class="modal-footer">
					       	<button type="button" class="btn btn-secondary" data-dismiss="modal" >CERRAR</button>
					   	</div>
					</div>
				</div>';
			}
		}
		function actualizar_historiapad_enf($datos){
			$id=$datos['enf_pad_doc'];
			
			$campos= array(
				'enf_pad_diagnosticos'=>$datos['enf_pad_diagnosticos'],
				'enf_pad_antecedentes'=>$datos['enf_pad_antecedentes'],
				'enf_pad_val_subjetiva'=>$datos['enf_pad_val_subjetiva'],
				'enf_pad_sv_fc'=>$datos['enf_pad_sv_fc'],
				'enf_pad_sv_fr'=>$datos['enf_pad_sv_fr'],
				'enf_pad_sv_t'=>$datos['enf_pad_sv_t'],
				'enf_pad_sv_sistole'=>$datos['enf_pad_sv_sistole'],
				'enf_pad_sv_diastole'=>$datos['enf_pad_sv_diastole'],
				'enf_pad_svta'=>$datos['enf_pad_svta'],
				'enf_pad_sv_saturacion'=>$datos['enf_pad_sv_saturacion'],
				'enf_pad_sv_glucometria'=>$datos['enf_pad_sv_glucometria'],
				'enf_pad_dom1_p1'=>$datos['enf_pad_dom1_p1'],
				'enf_pad_dom1_p2'=>$datos['enf_pad_dom1_p2'],
				'enf_pad_dom2_nutricion'=>$datos['enf_pad_dom2_nutricion'],
				'enf_pad_dom2_otro'=>$datos['enf_pad_dom2_otro'],
				'enf_pad_dom2_mucosa'=>$datos['enf_pad_dom2_mucosa'],
				'enf_pad_dom2_dentadura'=>$datos['enf_pad_dom2_dentadura'],
				'enf_pad_dom2_piel'=>$datos['enf_pad_dom2_piel'],
				'enf_pad_dom2_hidratacion'=>$datos['enf_pad_dom2_hidratacion'],
				'enf_pad_dom2_abdomen'=>$datos['enf_pad_dom2_abdomen'],
				'enf_pad_dom2_rsls'=>$datos['enf_pad_dom2_rsls'],
				'enf_pad_dom2_sng'=>$datos['enf_pad_dom2_sng'],
				'enf_pad_dom2_drenaje'=>$datos['enf_pad_dom2_drenaje'],
				'enf_pad_dom2_caracteristicas'=>$datos['enf_pad_dom2_caracteristicas'],
				'enf_pad_dom3_deposiciones'=>$datos['enf_pad_dom3_deposiciones'],
				'enf_pad_dom3_tipo'=>$datos['enf_pad_dom3_tipo'],
				'enf_pad_dom3_vomito'=>$datos['enf_pad_dom3_vomito'],
				'enf_pad_dom3_caracteristicas'=>$datos['enf_pad_dom3_caracteristicas'],
				'enf_pad_dom3_oresis'=>$datos['enf_pad_dom3_oresis'],
				'enf_pad_dom4_dependencia'=>$datos['enf_pad_dom4_dependencia'],
				'enf_pad_dom4_sueno'=>$datos['enf_pad_dom4_sueno'],
				'enf_pad_dom4_sueno_otros'=>$datos['enf_pad_dom4_sueno_otros'],
				'enf_pad_dom4_fiebre'=>$datos['enf_pad_dom4_fiebre'],
				'enf_pad_dom4_tipo'=>$datos['enf_pad_dom4_tipo'],
				'enf_pad_dom4_fisica'=>$datos['enf_pad_dom4_fisica'],
				'enf_pad_dom4_fisica_descripcion'=>$datos['enf_pad_dom4_fisica_descripcion'],
				'enf_pad_dom4_muscular'=>$datos['enf_pad_dom4_muscular'],
				'enf_pad_dom4_muscular_descripcion'=>$datos['enf_pad_dom4_muscular_descripcion'],
				'enf_pad_dom4_respiratorias'=>$datos['enf_pad_dom4_respiratorias'],
				'enf_pad_dom4_llenado_capilar'=>$datos['enf_pad_dom4_llenado_capilar'],
				'enf_pad_dom4_pulso'=>$datos['enf_pad_dom4_pulso'],
				'enf_pad_dom4_pulso_f_implantacion'=>$datos['enf_pad_dom4_pulso_f_implantacion'],
				'enf_pad_dom4_fr'=>$datos['enf_pad_dom4_fr'],
				'enf_pad_dom4_fr_descripcion'=>$datos['enf_pad_dom4_fr_descripcion'],
				'enf_pad_dom4_ruidos'=>$datos['enf_pad_dom4_ruidos'],
				'enf_pad_dom4_tos'=>$datos['enf_pad_dom4_tos'],
				'enf_pad_dom4_tos_tipo'=>$datos['enf_pad_dom4_tos_tipo'],
				'enf_pad_dom4_oxigenoterapia'=>$datos['enf_pad_dom4_oxigenoterapia'],
				'enf_pad_dom4_oxigenoterapia_tipo'=>$datos['enf_pad_dom4_oxigenoterapia_tipo'],
				'enf_pad_dom4_fio'=>$datos['enf_pad_dom4_fio'],
				'enf_pad_dom4_tet'=>$datos['enf_pad_dom4_tet'],
				'enf_pad_dom4_traqueostomia'=>$datos['enf_pad_dom4_traqueostomia'],
				
				'enf_pad_dom5_escala'=>$datos['enf_pad_dom5_escala'],
				'enf_pad_dom5_escala_otro'=>$datos['enf_pad_dom5_escala_otro'],
				'enf_pad_dom5_conciencia'=>$datos['enf_pad_dom5_conciencia'],
				'enf_pad_dom5_otro'=>$datos['enf_pad_dom5_otro'],
				'enf_pad_dom5_comunicacion'=>$datos['enf_pad_dom5_comunicacion'],
				'enf_pad_dom5_comunicacion_otro'=>$datos['enf_pad_dom5_comunicacion_otro'],
				'enf_pad_dom6_emocional'=>$datos['enf_pad_dom6_emocional'],
				'enf_pad_dom6_lenguaje'=>$datos['enf_pad_dom6_lenguaje'],
				'enf_pad_dom6_escucha'=>$datos['enf_pad_dom6_escucha'],
				'enf_pad_dom6_vision'=>$datos['enf_pad_dom6_vision'],
				'enf_pad_dom7_familiares'=>$datos['enf_pad_dom7_familiares'],
				'enf_pad_dom7_maltrato'=>$datos['enf_pad_dom7_maltrato'],
				'enf_pad_dom7_equipo'=>$datos['enf_pad_dom7_equipo'],
				'enf_pad_dom8_civil'=>$datos['enf_pad_dom8_civil'],
				'enf_pad_dom8_paridad'=>$datos['enf_pad_dom8_paridad'],
				'enf_pad_dom8_hijos'=>$datos['enf_pad_dom8_hijos'],
				'enf_pad_dom8_vivos'=>$datos['enf_pad_dom8_vivos'],
				'enf_pad_dom8_fallecidos'=>$datos['enf_pad_dom8_fallecidos'],
				'enf_pad_dom8_its'=>$datos['enf_pad_dom8_its'],
				'enf_pad_dom8_especifique'=>$datos['enf_pad_dom8_especifique'],
				'enf_pad_dom9_respuesta'=>$datos['enf_pad_dom9_respuesta'],
				'enf_pad_dom9_intento'=>$datos['enf_pad_dom9_intento'],
				'enf_pad_dom9_intento_descripcion'=>$datos['enf_pad_dom9_intento_descripcion'],
				'enf_pad_dom10_religion'=>$datos['enf_pad_dom10_religion'],
				'enf_pad_dom10_sanguinea'=>$datos['enf_pad_dom10_sanguinea'],
				'enf_pad_dom10_sanguinea_descripcion'=>$datos['enf_pad_dom10_sanguinea_descripcion'],
				'enf_pad_dom10_religiosa'=>$datos['enf_pad_dom10_religiosa'],
				'enf_pad_dom10_religiosa_descripcion'=>$datos['enf_pad_dom10_religiosa_descripcion'],
				'enf_pad_dom11_seguridad'=>$datos['enf_pad_dom11_seguridad'],
				'enf_pad_dom11_seguridad_otros'=>$datos['enf_pad_dom11_seguridad_otros'],
				'enf_pad_dom11_cutanea'=>$datos['enf_pad_dom11_cutanea'],
				'enf_pad_dom11_localizacion'=>$datos['enf_pad_dom11_localizacion'],
				'enf_pad_dom11_grado'=>$datos['enf_pad_dom11_grado'],
				'enf_pad_dom11_requerimientos'=>$datos['enf_pad_dom11_requerimientos'],
				'enf_pad_dom11_requerimientos_otros'=>$datos['enf_pad_dom11_requerimientos_otros'],
				'enf_pad_dom12_dolor'=>$datos['enf_pad_dom12_dolor'],
				'enf_pad_dom12_dolor_nivel'=>$datos['enf_pad_dom12_dolor_nivel'],
				'enf_pad_dom12_dolor_localizacion'=>$datos['enf_pad_dom12_dolor_localizacion'],
				'enf_pad_dom12_estado'=>$datos['enf_pad_dom12_estado'],
				'enf_pad_dom12_especifique'=>$datos['enf_pad_dom12_especifique'],
				'enf_pad_dom13_peso'=>$datos['enf_pad_dom13_peso'],
				'enf_pad_dom13_talla'=>$datos['enf_pad_dom13_talla'],
				'enf_pad_dom13_imc'=>$datos['enf_pad_dom13_imc'],
				'enf_pad_dom13_cual'=>$datos['enf_pad_dom13_cual'],
				'enf_pad_detalle_g'=>$datos['enf_pad_detalle_g'],
				'enf_pad_detalle_p'=>$datos['enf_pad_detalle_p'],
				'enf_pad_detalle_a'=>$datos['enf_pad_detalle_a'],
				'enf_pad_detalle_c'=>$datos['enf_pad_detalle_c'],
				'enf_pad_notas_enfermeria'=>$datos['enf_pad_notas_enfermeria'],
				// 'enf_pad_total'=>$datos['enf_pad_total'],
				'enf_pad_diagnosticos_enfermera'=>$datos['enf_pad_diagnosticos_enfermera'],
				'enf_pad_h_reg'=>$datos['enf_pad_h_reg'],
				'enf_pad_tipo_tratamiento'=>$datos['enf_pad_tipo_tratamiento'],
				'enf_pad_created_user'=>$datos['enf_pad_created_user'],
				'enf_pad_update_user'=>$datos['enf_pad_update_user']
				);
			
			$this->db->where("enf_pad_doc",$id);
			$this->db->where("enf_pad_f_reg",$datos['enf_pad_f_reg']);
			$rs=$this->db->update('hc_enf_pad',$campos);
			
			return '<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
				   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
				   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				   			<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5 class="text-center">Ingreso al Pad Actualizado</h5>
					</div>
				 	<div class="modal-footer">
				       	<button type="button" class="btn btn-secondary" data-dismiss="modal" >CERRAR</button>
				   	</div>
				</div>
			</div>';
		}
		function registrar_historiasocio_enf($datos){
			$pvalidar="SELECT COUNT(*) hc_enf_valoracion FROM hc_enf_valoracion WHERE enf_valoracion_doc='".$datos['enf_valoracion_doc']."' ";
			$pvalidar=$this->db->query($pvalidar);
			$pvalidar=$pvalidar->row();
			$pvalidar=$pvalidar->hc_enf_valoracion;

			if($pvalidar>0)
			{
				$existe="SELECT COUNT(hc_enf_valoracion.id_hc_enf_valoracion),hc_enf_valoracion.enf_valoracion_f_reg FROM hc_enf_valoracion INNER JOIN hc_enf_escala ON hc_enf_valoracion.enf_valoracion_doc=hc_enf_escala.enf_escala_doc INNER JOIN paciente ON hc_enf_valoracion.enf_valoracion_doc=paciente.doc_paciente and paciente.doc_paciente='".$datos['enf_valoracion_doc']."' ";
				$resultado=$this->db->query($existe);
				$resultado=$resultado->row();
				$result2 = $resultado->enf_valoracion_f_reg;
      			$miarray = get_object_vars($resultado);
      			foreach ($miarray as $valor) {
			        // echo "".$valor[0];
			        $result=$valor[0];
			    }
				if($result>0)
				{
					$fecha = date_create($result2);
				    date_add($fecha, date_interval_create_from_date_string("6 months"));
				    $obfecha=date_format($fecha,"Y-m-d");
					if($datos['enf_valoracion_f_reg']==$obfecha)
					{
						$siguiente="SELECT MAX(id_hc_enf_valoracion) id_hc_enf_valoracion FROM hc_enf_valoracion";
						$siguiente=$this->db->query($siguiente);
						$siguiente=$siguiente->row();
						$siguiente=$siguiente->id_hc_enf_valoracion;
						$sigla='VALE';
						$numero=explode($sigla, $siguiente);
						$siguiente=$numero[1];
						$suma=$numero[1]+1;

						if($suma<=9)
						{
							$codigo=$sigla."000".$suma;
						}
						else if($suma>9 && $suma<=99)
						{
							$codigo=$sigla."00".$suma;
						}
						else if($suma>99 && $suma<=999)
						{
							$codigo=$sigla."0".$suma;
						}
						else if($suma>999 && $suma<=9999)
						{
							$codigo=$sigla.$suma;
						}
						else if($suma>9999)
						{
							$codigo=$sigla."A000".$suma;
						}
						if($result==0)
						{
							$suma2=1;
						}
						else
						{
							$suma2=$seguir+1;
						}
						
						$campos= array(
							'id_hc_enf_valoracion'=>$codigo,
							'hc_enf_valoracion_cod'=>$suma2,
							'enf_valoracion_doc'=>$datos['enf_valoracion_doc'],
							'enf_valoracion_pregunta_v'=>$datos['enf_valoracion_pregunta_v'],
							'enf_valoracion_pregunta_detalle_v'=>$datos['enf_valoracion_pregunta_detalle_v'],
							'enf_valoracion_servicios'=>$datos['enf_valoracion_servicios'],
							'enf_valoracion_telefonia'=>$datos['enf_valoracion_telefonia'],
							'enf_valoracion_residuos'=>$datos['enf_valoracion_residuos'],
							'enf_valoracion_vivienda'=>$datos['enf_valoracion_vivienda'],
							'enf_valoracion_vivienda_detalle'=>$datos['enf_valoracion_vivienda_detalle'],
							'enf_valoracion_animales'=>$datos['enf_valoracion_animales'],
							'enf_valoracion_vacunados'=>$datos['enf_valoracion_vacunados'],
							'enf_valoracion_habitan'=>$datos['enf_valoracion_habitan'],
							'enf_valoracion_vectores'=>$datos['enf_valoracion_vectores'],
							'enf_valoracion_producto'=>$datos['enf_valoracion_producto'],
							'enf_valoracion_almacenados'=>$datos['enf_valoracion_almacenados'],
							'enf_valoracion_conservados'=>$datos['enf_valoracion_conservados'],
							'enf_valoracion_conservacion'=>$datos['enf_valoracion_conservacion'],
							'enf_valoracion_estado_cocina'=>$datos['enf_valoracion_estado_cocina'],
							'enf_valoracion_entorno_aseado'=>$datos['enf_valoracion_entorno_aseado'],
							'enf_valoracion_entorno_productos'=>$datos['enf_valoracion_entorno_productos'],
							'enf_valoracion_entorno_orden'=>$datos['enf_valoracion_entorno_orden'],
							'enf_valoracion_entorno_rutinas'=>$datos['enf_valoracion_entorno_rutinas'],
							'enf_valoracion_ingreso'=>$datos['enf_valoracion_ingreso'],
							'enf_valoracion_exterior'=>$datos['enf_valoracion_exterior'],
							'enf_valoracion_bano'=>$datos['enf_valoracion_bano'],
							'enf_valoracion_separacion'=>$datos['enf_valoracion_separacion'],
							'enf_valoracion_habitacion'=>$datos['enf_valoracion_habitacion'],
							'enf_valoracion_ventilacion'=>$datos['enf_valoracion_ventilacion'],
							'enf_valoracion_iluminacion'=>$datos['enf_valoracion_iluminacion'],

							'enf_valoracion_pregunta'=>$datos['enf_valoracion_pregunta'],
							'enf_valoracion_pregunta_detalle'=>$datos['enf_valoracion_pregunta_detalle'],
							'enf_valoracion_ayd1'=>$datos['enf_valoracion_ayd1'],
							'enf_valoracion_ayd2'=>$datos['enf_valoracion_ayd2'],
							'enf_valoracion_ayd3'=>$datos['enf_valoracion_ayd3'],
							'enf_valoracion_ayd4'=>$datos['enf_valoracion_ayd4'],
							'enf_valoracion_ayd5'=>$datos['enf_valoracion_ayd5'],
							'enf_valoracion_ayd6'=>$datos['enf_valoracion_ayd6'],
							'enf_valoracion_ayd7'=>$datos['enf_valoracion_ayd7'],
							'enf_valoracion_ayd8'=>$datos['enf_valoracion_ayd8'],
							'enf_valoracion_ayd9'=>$datos['enf_valoracion_ayd9'],
							'enf_valoracion_ayd10'=>$datos['enf_valoracion_ayd10'],
							'enf_valoracion_ayd11'=>$datos['enf_valoracion_ayd11'],
							'enf_valoracion_ayd12'=>$datos['enf_valoracion_ayd12'],
							'enf_valoracion_ayd13'=>$datos['enf_valoracion_ayd13'],
							'enf_valoracion_aydtotal'=>$datos['enf_valoracion_aydtotal'],
							'enf_valoracion_aydnivel'=>$datos['enf_valoracion_aydnivel'],
							'enf_valoracion_ayd1x'=>$datos['enf_valoracion_ayd1x'],
							'enf_valoracion_ayd2x'=>$datos['enf_valoracion_ayd2x'],
							'enf_valoracion_ayd3x'=>$datos['enf_valoracion_ayd3x'],
							'enf_valoracion_ayd4x'=>$datos['enf_valoracion_ayd4x'],
							'enf_valoracion_grama'=>$datos['enf_valoracion_grama'],
							'enf_valoracion_ecomapa'=>$datos['enf_valoracion_ecomapa'],
							'enf_valoracion_situacion_familiar'=>$datos['enf_valoracion_situacion_familiar'],
							'enf_valoracion_situacion_economica'=>$datos['enf_valoracion_situacion_economica'],
							'enf_valoracion_situacion_vivienda'=>$datos['enf_valoracion_situacion_vivienda'],
							'enf_valoracion_situacion_relaciones'=>$datos['enf_valoracion_situacion_relaciones'],
							'enf_valoracion_situacion_apoyo'=>$datos['enf_valoracion_situacion_apoyo'],
							'enf_valoracion_situacion_total'=>$datos['enf_valoracion_situacion_total'],
							'enf_valoracion_situacion_nivel'=>$datos['enf_valoracion_situacion_nivel'],
							'enf_valoracion_f_reg'=>$datos['enf_valoracion_f_reg'],
							'enf_valoracion_h_reg'=>$datos['enf_valoracion_h_reg'],
							'enf_valoracion_h_inicio'=>$datos['enf_valoracion_h_inicio'],
							'enf_valoracion_created_user'=>$datos['enf_valoracion_created_user'],
							'enf_valoracion_update_user'=>$datos['enf_valoracion_update_user']

							);
						
						$rs=$this->db->insert('hc_enf_valoracion',$campos);
						
						return '<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
							   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
							   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							   			<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<h5 class="text-center">Valoracion Socio Familiar Registrado</h5>
								</div>
							 	<div class="modal-footer">
							       	<button type="button" class="btn btn-secondary" data-dismiss="modal" >CERRAR</button>
							   	</div>
							</div>
						</div>';
					}
					else
					{
						return 2;
					}
				}
				else
				{
					return 0;
				}
			}
			else
			{
				// return 3;
				$siguiente="SELECT MAX(id_hc_enf_valoracion) id_hc_enf_valoracion FROM hc_enf_valoracion";
				$siguiente=$this->db->query($siguiente);
				$siguiente=$siguiente->row();
				$siguiente=$siguiente->id_hc_enf_valoracion;
				$sigla='VALE';
				$numero=explode($sigla, $siguiente);
				$siguiente=$numero[1];
				$suma=$numero[1]+1;

				if($suma<=9)
				{
					$codigo=$sigla."000".$suma;
				}
				else if($suma>9 && $suma<=99)
				{
					$codigo=$sigla."00".$suma;
				}
				else if($suma>99 && $suma<=999)
				{
					$codigo=$sigla."0".$suma;
				}
				else if($suma>999 && $suma<=9999)
				{
					$codigo=$sigla.$suma;
				}
				else if($suma>9999)
				{
					$codigo=$sigla."A000".$suma;
				}
				if($result==0)
				{
					$suma2=1;
				}
				else
				{
					$suma2=$seguir+1;
				}
				
				$campos= array(
					'id_hc_enf_valoracion'=>$codigo,
					'hc_enf_valoracion_cod'=>$suma2,
					'enf_valoracion_doc'=>$datos['enf_valoracion_doc'],
					'enf_valoracion_pregunta_v'=>$datos['enf_valoracion_pregunta_v'],
					'enf_valoracion_pregunta_detalle_v'=>$datos['enf_valoracion_pregunta_detalle_v'],
					'enf_valoracion_servicios'=>$datos['enf_valoracion_servicios'],
					'enf_valoracion_telefonia'=>$datos['enf_valoracion_telefonia'],
					'enf_valoracion_residuos'=>$datos['enf_valoracion_residuos'],
					'enf_valoracion_vivienda'=>$datos['enf_valoracion_vivienda'],
					'enf_valoracion_vivienda_detalle'=>$datos['enf_valoracion_vivienda_detalle'],
					'enf_valoracion_animales'=>$datos['enf_valoracion_animales'],
					'enf_valoracion_vacunados'=>$datos['enf_valoracion_vacunados'],
					'enf_valoracion_habitan'=>$datos['enf_valoracion_habitan'],
					'enf_valoracion_vectores'=>$datos['enf_valoracion_vectores'],
					'enf_valoracion_producto'=>$datos['enf_valoracion_producto'],
					'enf_valoracion_almacenados'=>$datos['enf_valoracion_almacenados'],
					'enf_valoracion_conservados'=>$datos['enf_valoracion_conservados'],
					'enf_valoracion_conservacion'=>$datos['enf_valoracion_conservacion'],
					'enf_valoracion_estado_cocina'=>$datos['enf_valoracion_estado_cocina'],
					'enf_valoracion_entorno_aseado'=>$datos['enf_valoracion_entorno_aseado'],
					'enf_valoracion_entorno_productos'=>$datos['enf_valoracion_entorno_productos'],
					'enf_valoracion_entorno_orden'=>$datos['enf_valoracion_entorno_orden'],
					'enf_valoracion_entorno_rutinas'=>$datos['enf_valoracion_entorno_rutinas'],
					'enf_valoracion_ingreso'=>$datos['enf_valoracion_ingreso'],
					'enf_valoracion_exterior'=>$datos['enf_valoracion_exterior'],
					'enf_valoracion_bano'=>$datos['enf_valoracion_bano'],
					'enf_valoracion_separacion'=>$datos['enf_valoracion_separacion'],
					'enf_valoracion_habitacion'=>$datos['enf_valoracion_habitacion'],
					'enf_valoracion_ventilacion'=>$datos['enf_valoracion_ventilacion'],
					'enf_valoracion_iluminacion'=>$datos['enf_valoracion_iluminacion'],

					'enf_valoracion_pregunta'=>$datos['enf_valoracion_pregunta'],
					'enf_valoracion_pregunta_detalle'=>$datos['enf_valoracion_pregunta_detalle'],
					'enf_valoracion_ayd1'=>$datos['enf_valoracion_ayd1'],
					'enf_valoracion_ayd2'=>$datos['enf_valoracion_ayd2'],
					'enf_valoracion_ayd3'=>$datos['enf_valoracion_ayd3'],
					'enf_valoracion_ayd4'=>$datos['enf_valoracion_ayd4'],
					'enf_valoracion_ayd5'=>$datos['enf_valoracion_ayd5'],
					'enf_valoracion_ayd6'=>$datos['enf_valoracion_ayd6'],
					'enf_valoracion_ayd7'=>$datos['enf_valoracion_ayd7'],
					'enf_valoracion_ayd8'=>$datos['enf_valoracion_ayd8'],
					'enf_valoracion_ayd9'=>$datos['enf_valoracion_ayd9'],
					'enf_valoracion_ayd10'=>$datos['enf_valoracion_ayd10'],
					'enf_valoracion_ayd11'=>$datos['enf_valoracion_ayd11'],
					'enf_valoracion_ayd12'=>$datos['enf_valoracion_ayd12'],
					'enf_valoracion_ayd13'=>$datos['enf_valoracion_ayd13'],
					'enf_valoracion_aydtotal'=>$datos['enf_valoracion_aydtotal'],
					'enf_valoracion_aydnivel'=>$datos['enf_valoracion_aydnivel'],
					'enf_valoracion_ayd1x'=>$datos['enf_valoracion_ayd1x'],
					'enf_valoracion_ayd2x'=>$datos['enf_valoracion_ayd2x'],
					'enf_valoracion_ayd3x'=>$datos['enf_valoracion_ayd3x'],
					'enf_valoracion_ayd4x'=>$datos['enf_valoracion_ayd4x'],
					'enf_valoracion_grama'=>$datos['enf_valoracion_grama'],
					'enf_valoracion_ecomapa'=>$datos['enf_valoracion_ecomapa'],
					'enf_valoracion_situacion_familiar'=>$datos['enf_valoracion_situacion_familiar'],
					'enf_valoracion_situacion_economica'=>$datos['enf_valoracion_situacion_economica'],
					'enf_valoracion_situacion_vivienda'=>$datos['enf_valoracion_situacion_vivienda'],
					'enf_valoracion_situacion_relaciones'=>$datos['enf_valoracion_situacion_relaciones'],
					'enf_valoracion_situacion_apoyo'=>$datos['enf_valoracion_situacion_apoyo'],
					'enf_valoracion_situacion_total'=>$datos['enf_valoracion_situacion_total'],
					'enf_valoracion_situacion_nivel'=>$datos['enf_valoracion_situacion_nivel'],
					'enf_valoracion_f_reg'=>$datos['enf_valoracion_f_reg'],
					'enf_valoracion_h_reg'=>$datos['enf_valoracion_h_reg'],
					'enf_valoracion_h_inicio'=>$datos['enf_valoracion_h_inicio'],
					'enf_valoracion_created_user'=>$datos['enf_valoracion_created_user'],
					'enf_valoracion_update_user'=>$datos['enf_valoracion_update_user']

					);
				
				$rs=$this->db->insert('hc_enf_valoracion',$campos);
				
				return '<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
					   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
					   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					   			<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<h5 class="text-center">Valoracion Socio Familiar Registrado</h5>
						</div>
					 	<div class="modal-footer">
					       	<button type="button" class="btn btn-secondary" data-dismiss="modal" >CERRAR</button>
					   	</div>
					</div>
				</div>';
			}
		}
		function actualizar_historiasocio_enf($datos){
			$id=$datos['enf_valoracion_doc'];
			
			$campos= array(
				'enf_valoracion_pregunta_v'=>$datos['enf_valoracion_pregunta_v'],
				'enf_valoracion_pregunta_detalle_v'=>$datos['enf_valoracion_pregunta_detalle_v'],
				'enf_valoracion_servicios'=>$datos['enf_valoracion_servicios'],
				'enf_valoracion_telefonia'=>$datos['enf_valoracion_telefonia'],
				'enf_valoracion_residuos'=>$datos['enf_valoracion_residuos'],
				'enf_valoracion_vivienda'=>$datos['enf_valoracion_vivienda'],
				'enf_valoracion_vivienda_detalle'=>$datos['enf_valoracion_vivienda_detalle'],
				'enf_valoracion_animales'=>$datos['enf_valoracion_animales'],
				'enf_valoracion_vacunados'=>$datos['enf_valoracion_vacunados'],
				'enf_valoracion_habitan'=>$datos['enf_valoracion_habitan'],
				'enf_valoracion_vectores'=>$datos['enf_valoracion_vectores'],
				'enf_valoracion_producto'=>$datos['enf_valoracion_producto'],
				'enf_valoracion_almacenados'=>$datos['enf_valoracion_almacenados'],
				'enf_valoracion_conservados'=>$datos['enf_valoracion_conservados'],
				'enf_valoracion_conservacion'=>$datos['enf_valoracion_conservacion'],
				'enf_valoracion_estado_cocina'=>$datos['enf_valoracion_estado_cocina'],
				'enf_valoracion_entorno_aseado'=>$datos['enf_valoracion_entorno_aseado'],
				'enf_valoracion_entorno_productos'=>$datos['enf_valoracion_entorno_productos'],
				'enf_valoracion_entorno_orden'=>$datos['enf_valoracion_entorno_orden'],
				'enf_valoracion_entorno_rutinas'=>$datos['enf_valoracion_entorno_rutinas'],
				'enf_valoracion_ingreso'=>$datos['enf_valoracion_ingreso'],
				'enf_valoracion_exterior'=>$datos['enf_valoracion_exterior'],
				'enf_valoracion_bano'=>$datos['enf_valoracion_bano'],
				'enf_valoracion_separacion'=>$datos['enf_valoracion_separacion'],
				'enf_valoracion_habitacion'=>$datos['enf_valoracion_habitacion'],
				'enf_valoracion_ventilacion'=>$datos['enf_valoracion_ventilacion'],
				'enf_valoracion_iluminacion'=>$datos['enf_valoracion_iluminacion'],

				'enf_valoracion_pregunta'=>$datos['enf_valoracion_pregunta'],
				'enf_valoracion_pregunta_detalle'=>$datos['enf_valoracion_pregunta_detalle'],
				'enf_valoracion_ayd1'=>$datos['enf_valoracion_ayd1'],
				'enf_valoracion_ayd2'=>$datos['enf_valoracion_ayd2'],
				'enf_valoracion_ayd3'=>$datos['enf_valoracion_ayd3'],
				'enf_valoracion_ayd4'=>$datos['enf_valoracion_ayd4'],
				'enf_valoracion_ayd5'=>$datos['enf_valoracion_ayd5'],
				'enf_valoracion_ayd6'=>$datos['enf_valoracion_ayd6'],
				'enf_valoracion_ayd7'=>$datos['enf_valoracion_ayd7'],
				'enf_valoracion_ayd8'=>$datos['enf_valoracion_ayd8'],
				'enf_valoracion_ayd9'=>$datos['enf_valoracion_ayd9'],
				'enf_valoracion_ayd10'=>$datos['enf_valoracion_ayd10'],
				'enf_valoracion_ayd11'=>$datos['enf_valoracion_ayd11'],
				'enf_valoracion_ayd12'=>$datos['enf_valoracion_ayd12'],
				'enf_valoracion_ayd13'=>$datos['enf_valoracion_ayd13'],
				'enf_valoracion_aydtotal'=>$datos['enf_valoracion_aydtotal'],
				'enf_valoracion_aydnivel'=>$datos['enf_valoracion_aydnivel'],
				'enf_valoracion_ayd1x'=>$datos['enf_valoracion_ayd1x'],
				'enf_valoracion_ayd2x'=>$datos['enf_valoracion_ayd2x'],
				'enf_valoracion_ayd3x'=>$datos['enf_valoracion_ayd3x'],
				'enf_valoracion_ayd4x'=>$datos['enf_valoracion_ayd4x'],
				'enf_valoracion_grama'=>$datos['enf_valoracion_grama'],
				'enf_valoracion_ecomapa'=>$datos['enf_valoracion_ecomapa'],
				'enf_valoracion_situacion_familiar'=>$datos['enf_valoracion_situacion_familiar'],
				'enf_valoracion_situacion_economica'=>$datos['enf_valoracion_situacion_economica'],
				'enf_valoracion_situacion_vivienda'=>$datos['enf_valoracion_situacion_vivienda'],
				'enf_valoracion_situacion_relaciones'=>$datos['enf_valoracion_situacion_relaciones'],
				'enf_valoracion_situacion_apoyo'=>$datos['enf_valoracion_situacion_apoyo'],
				'enf_valoracion_situacion_total'=>$datos['enf_valoracion_situacion_total'],
				'enf_valoracion_situacion_nivel'=>$datos['enf_valoracion_situacion_nivel'],
				'enf_valoracion_f_reg'=>$datos['enf_valoracion_f_reg'],
				'enf_valoracion_h_reg'=>$datos['enf_valoracion_h_reg'],
				'enf_valoracion_created_user'=>$datos['enf_valoracion_created_user'],
				'enf_valoracion_update_user'=>$datos['enf_valoracion_update_user']
				);

			$this->db->where("enf_valoracion_doc",$id);
			$this->db->where("enf_valoracion_f_reg",$datos['enf_valoracion_f_reg']);
			$rs=$this->db->update('hc_enf_valoracion',$campos);
			
			return '<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
				   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
				   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				   			<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5 class="text-center">Valoracion Socio Familiar Actualizado</h5>
					</div>
				 	<div class="modal-footer">
				       	<button type="button" class="btn btn-secondary" data-dismiss="modal" >CERRAR</button>
				   	</div>
				</div>
			</div>';
		}
		function registrar_historiaescala_enf($datos){
			$pvalidar="SELECT COUNT(*) hc_enf_escala FROM hc_enf_escala WHERE enf_escala_doc='".$datos['enf_escala_doc']."' ";
			$pvalidar=$this->db->query($pvalidar);
			$pvalidar=$pvalidar->row();
			$pvalidar=$pvalidar->hc_enf_escala;
			if($pvalidar>0)
			{
				$existe="SELECT COUNT(hc_enf_escala.id_hc_enf_escala),hc_enf_escala.enf_escala_f_reg FROM hc_enf_escala INNER JOIN hc_enf_valoracion ON hc_enf_escala.enf_escala_doc=hc_enf_valoracion.enf_valoracion_doc INNER JOIN paciente ON hc_enf_escala.enf_escala_doc=paciente.doc_paciente and paciente.doc_paciente='".$datos['enf_escala_doc']."' ";
				$resultado=$this->db->query($existe);
				$resultado=$resultado->row();
				$result2 = $resultado->enf_escala_f_reg;
      			$miarray = get_object_vars($resultado);
      			foreach ($miarray as $valor) {
			        // echo "".$valor[0];
			        $result=$valor[0];
			    }
				if($result>0)
				{
					$fecha = date_create($result2);
				    date_add($fecha, date_interval_create_from_date_string("6 months"));
				    $obfecha=date_format($fecha,"Y-m-d");
					if($datos['enf_escala_f_reg']==$obfecha)
					{
						$siguiente="SELECT MAX(id_hc_enf_escala) id_hc_enf_escala FROM hc_enf_escala";
						$siguiente=$this->db->query($siguiente);
						$siguiente=$siguiente->row();
						$siguiente=$siguiente->id_hc_enf_escala;
						$sigla='ECE';
						$numero=explode($sigla, $siguiente);
						$siguiente=$numero[1];
						$suma=$numero[1]+1;

						if($suma<=9)
						{
							$codigo=$sigla."000".$suma;
						}
						else if($suma>9 && $suma<=99)
						{
							$codigo=$sigla."00".$suma;
						}
						else if($suma>99 && $suma<=999)
						{
							$codigo=$sigla."0".$suma;
						}
						else if($suma>999 && $suma<=9999)
						{
							$codigo=$sigla.$suma;
						}
						else if($suma>9999)
						{
							$codigo=$sigla."A000".$suma;
						}
						if($result==0)
						{
							$suma2=1;
						}
						else
						{
							$suma2=$seguir+1;
						}
						$campos= array(
							'id_hc_enf_escala'=>$codigo,
							'hc_enf_escala_cod'=>$suma2,
							'enf_escala_doc'=>$datos['enf_escala_doc'],
							'enf_escala_pregunta'=>$datos['enf_escala_pregunta'],
							'enf_escala_detalle'=>$datos['enf_escala_detalle'],
							'enf_escala_fecha'=>$datos['enf_escala_fecha'],
							'enf_escala_p1'=>$datos['enf_escala_p1'],
							'enf_escala_p2'=>$datos['enf_escala_p2'],
							'enf_escala_p3'=>$datos['enf_escala_p3'],
							'enf_escala_p4'=>$datos['enf_escala_p4'],
							'enf_escala_p5'=>$datos['enf_escala_p5'],
							'enf_escala_p6'=>$datos['enf_escala_p6'],
							'enf_escala_p7'=>$datos['enf_escala_p7'],
							'enf_escala_p8'=>$datos['enf_escala_p8'],
							'enf_escala_p9'=>$datos['enf_escala_p9'],
							'enf_escala_p10'=>$datos['enf_escala_p10'],
							'enf_escala_p11'=>$datos['enf_escala_p11'],
							'enf_escala_p12'=>$datos['enf_escala_p12'],
							'enf_escala_p13'=>$datos['enf_escala_p13'],
							'enf_escala_p14'=>$datos['enf_escala_p14'],
							'enf_escala_p15'=>$datos['enf_escala_p15'],
							'enf_escala_p16'=>$datos['enf_escala_p16'],
							'enf_escala_p17'=>$datos['enf_escala_p17'],
							'enf_escala_p18'=>$datos['enf_escala_p18'],
							'enf_escala_p19'=>$datos['enf_escala_p19'],
							'enf_escala_p20'=>$datos['enf_escala_p20'],
							'enf_escala_p21'=>$datos['enf_escala_p21'],
							'enf_escala_p22'=>$datos['enf_escala_p22'],
							'enf_escala_total'=>$datos['enf_escala_total'],
							'enf_escala_estado'=>$datos['enf_escala_estado'],
							'enf_escala_f_reg'=>$datos['enf_escala_f_reg'],
							'enf_escala_h_reg'=>$datos['enf_escala_h_reg'],
							'enf_escala_h_inicio'=>$datos['enf_escala_h_inicio'],
							'enf_escala_created_user'=>$datos['enf_escala_created_user'],
							'enf_escala_update_user'=>$datos['enf_escala_update_user']
							);
						
						$rs=$this->db->insert('hc_enf_escala',$campos);
						
						return '<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
							   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
							   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							   			<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<h5 class="text-center">Escala de Carga Cuidador Registrada</h5>
								</div>
							 	<div class="modal-footer">
							       	<button type="button" class="btn btn-secondary" data-dismiss="modal" >CERRAR</button>
							   	</div>
							</div>
						</div>';
					}
					else
					{
						return 2;
					}
				}
				else
				{
					return 0;
				}
			}
			else
			{
				// return 3;
				$siguiente="SELECT MAX(id_hc_enf_escala) id_hc_enf_escala FROM hc_enf_escala";
				$siguiente=$this->db->query($siguiente);
				$siguiente=$siguiente->row();
				$siguiente=$siguiente->id_hc_enf_escala;
				$sigla='ECE';
				$numero=explode($sigla, $siguiente);
				$siguiente=$numero[1];
				$suma=$numero[1]+1;

				if($suma<=9)
				{
					$codigo=$sigla."000".$suma;
				}
				else if($suma>9 && $suma<=99)
				{
					$codigo=$sigla."00".$suma;
				}
				else if($suma>99 && $suma<=999)
				{
					$codigo=$sigla."0".$suma;
				}
				else if($suma>999 && $suma<=9999)
				{
					$codigo=$sigla.$suma;
				}
				else if($suma>9999)
				{
					$codigo=$sigla."A000".$suma;
				}
				if($result==0)
				{
					$suma2=1;
				}
				else
				{
					$suma2=$seguir+1;
				}
				$campos= array(
					'id_hc_enf_escala'=>$codigo,
					'hc_enf_escala_cod'=>$suma2,
					'enf_escala_doc'=>$datos['enf_escala_doc'],
					'enf_escala_pregunta'=>$datos['enf_escala_pregunta'],
					'enf_escala_detalle'=>$datos['enf_escala_detalle'],
					'enf_escala_fecha'=>$datos['enf_escala_fecha'],
					'enf_escala_p1'=>$datos['enf_escala_p1'],
					'enf_escala_p2'=>$datos['enf_escala_p2'],
					'enf_escala_p3'=>$datos['enf_escala_p3'],
					'enf_escala_p4'=>$datos['enf_escala_p4'],
					'enf_escala_p5'=>$datos['enf_escala_p5'],
					'enf_escala_p6'=>$datos['enf_escala_p6'],
					'enf_escala_p7'=>$datos['enf_escala_p7'],
					'enf_escala_p8'=>$datos['enf_escala_p8'],
					'enf_escala_p9'=>$datos['enf_escala_p9'],
					'enf_escala_p10'=>$datos['enf_escala_p10'],
					'enf_escala_p11'=>$datos['enf_escala_p11'],
					'enf_escala_p12'=>$datos['enf_escala_p12'],
					'enf_escala_p13'=>$datos['enf_escala_p13'],
					'enf_escala_p14'=>$datos['enf_escala_p14'],
					'enf_escala_p15'=>$datos['enf_escala_p15'],
					'enf_escala_p16'=>$datos['enf_escala_p16'],
					'enf_escala_p17'=>$datos['enf_escala_p17'],
					'enf_escala_p18'=>$datos['enf_escala_p18'],
					'enf_escala_p19'=>$datos['enf_escala_p19'],
					'enf_escala_p20'=>$datos['enf_escala_p20'],
					'enf_escala_p21'=>$datos['enf_escala_p21'],
					'enf_escala_p22'=>$datos['enf_escala_p22'],
					'enf_escala_total'=>$datos['enf_escala_total'],
					'enf_escala_estado'=>$datos['enf_escala_estado'],
					'enf_escala_f_reg'=>$datos['enf_escala_f_reg'],
					'enf_escala_h_reg'=>$datos['enf_escala_h_reg'],
					'enf_escala_h_inicio'=>$datos['enf_escala_h_inicio'],
					'enf_escala_created_user'=>$datos['enf_escala_created_user'],
					'enf_escala_update_user'=>$datos['enf_escala_update_user']
					);
				
				$rs=$this->db->insert('hc_enf_escala',$campos);
				
				return '<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
					   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
					   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					   			<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<h5 class="text-center">Escala de Carga Cuidador Registrada</h5>
						</div>
					 	<div class="modal-footer">
					       	<button type="button" class="btn btn-secondary" data-dismiss="modal" >CERRAR</button>
					   	</div>
					</div>
				</div>';
			}
		}
		function actualizar_historiaescala_enf($datos){
			$id=$datos['enf_escala_doc'];
			
			$campos= array(
				'enf_escala_fecha'=>$datos['enf_escala_fecha'],
				'enf_escala_pregunta'=>$datos['enf_escala_pregunta'],
				'enf_escala_detalle'=>$datos['enf_escala_detalle'],
				'enf_escala_fecha'=>$datos['enf_escala_fecha'],
				'enf_escala_p1'=>$datos['enf_escala_p1'],
				'enf_escala_p2'=>$datos['enf_escala_p2'],
				'enf_escala_p3'=>$datos['enf_escala_p3'],
				'enf_escala_p4'=>$datos['enf_escala_p4'],
				'enf_escala_p5'=>$datos['enf_escala_p5'],
				'enf_escala_p6'=>$datos['enf_escala_p6'],
				'enf_escala_p7'=>$datos['enf_escala_p7'],
				'enf_escala_p8'=>$datos['enf_escala_p8'],
				'enf_escala_p9'=>$datos['enf_escala_p9'],
				'enf_escala_p10'=>$datos['enf_escala_p10'],
				'enf_escala_p11'=>$datos['enf_escala_p11'],
				'enf_escala_p12'=>$datos['enf_escala_p12'],
				'enf_escala_p13'=>$datos['enf_escala_p13'],
				'enf_escala_p14'=>$datos['enf_escala_p14'],
				'enf_escala_p15'=>$datos['enf_escala_p15'],
				'enf_escala_p16'=>$datos['enf_escala_p16'],
				'enf_escala_p17'=>$datos['enf_escala_p17'],
				'enf_escala_p18'=>$datos['enf_escala_p18'],
				'enf_escala_p19'=>$datos['enf_escala_p19'],
				'enf_escala_p20'=>$datos['enf_escala_p20'],
				'enf_escala_p21'=>$datos['enf_escala_p21'],
				'enf_escala_p22'=>$datos['enf_escala_p22'],
				'enf_escala_total'=>$datos['enf_escala_total'],
				'enf_escala_estado'=>$datos['enf_escala_estado'],
				'enf_escala_f_reg'=>$datos['enf_escala_f_reg'],
				'enf_escala_h_reg'=>$datos['enf_escala_h_reg'],
				'enf_escala_created_user'=>$datos['enf_escala_created_user'],
				'enf_escala_update_user'=>$datos['enf_escala_update_user']
				);
			
			$this->db->where("enf_escala_doc",$id);
			$this->db->where("enf_escala_f_reg",$datos['enf_escala_f_reg']);
			$rs=$this->db->update('hc_enf_escala',$campos);
			
			return '<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
				   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
				   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				   			<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5 class="text-center">Escala de Carga Cuidador Actualizada</h5>
					</div>
				 	<div class="modal-footer">
				       	<button type="button" class="btn btn-secondary" data-dismiss="modal" >CERRAR</button>
				   	</div>
				</div>
			</div>';
		}
		function registrar_historiintervencion_enf($datos){
			$existe="SELECT COUNT(*) enf_intervencion_doc FROM hc_enf_intervencion WHERE enf_intervencion_doc='".$datos['enf_intervencion_doc']."' ";
			$resultado=$this->db->query($existe);
			$resultado=$resultado->row();
			$result=$resultado->enf_intervencion_doc;
			// if($resultado->num_rows()==1)
			// {
			// 	$resultado=$resultado->row();
			// 	$result=$resultado->enf_intervencion_doc;
			// }
			// else
			// {
			// 	$result="";
			// }
			if($result>0)
			{
				return 0;
			}
			else
			{
				$siguiente="SELECT MAX(id_hc_enf_intervencion) id_hc_enf_intervencion FROM hc_enf_intervencion";
				$siguiente=$this->db->query($siguiente);
				$siguiente=$siguiente->row();
				$siguiente=$siguiente->id_hc_enf_intervencion;
				$sigla='INTE';
				$numero=explode($sigla, $siguiente);
				$siguiente=$numero[1];
				$suma=$numero[1]+1;

				if($suma<=9)
				{
					$codigo=$sigla."000".$suma;
				}
				else if($suma>9 && $suma<=99)
				{
					$codigo=$sigla."00".$suma;
				}
				else if($suma>99 && $suma<=999)
				{
					$codigo=$sigla."0".$suma;
				}
				else if($suma>999 && $suma<=9999)
				{
					$codigo=$sigla.$suma;
				}
				else if($suma>9999)
				{
					$codigo=$sigla."A000".$suma;
				}
				if($result==0)
				{
					$suma2=1;
				}
				else
				{
					$suma2=$seguir+1;
				}
				
				$campos= array(
					'id_hc_enf_intervencion'=>$codigo,
					'hc_enf_intervencion_cod'=>$suma2,
					'enf_intervencion_doc'=>$datos['enf_intervencion_doc'],
					// 'enf_intervencion_fecha'=>$datos['enf_intervencion_fecha'],
					// 'enf_intervencion_npla'=>$datos['enf_intervencion_npla'],
					'enf_intervencion_diagnosticos_enf'=>$datos['enf_intervencion_diagnosticos_enf'],
					'enf_intervencion_pfeiffer'=>$datos['enf_intervencion_pfeiffer'],
					'enf_intervencion_barthel'=>$datos['enf_intervencion_barthel'],
					'enf_intervencion_norton'=>$datos['enf_intervencion_norton'],
					'enf_intervencion_braden'=>$datos['enf_intervencion_braden'],
					'enf_intervencion_karnosky'=>$datos['enf_intervencion_karnosky'],
					'enf_intervencion_socio'=>$datos['enf_intervencion_socio'],
					'enf_intervencion_ansiedad'=>$datos['enf_intervencion_ansiedad'],
					'enf_intervencion_zarith'=>$datos['enf_intervencion_zarith'],
					'enf_intervencion_ns_respiar'=>$datos['enf_intervencion_ns_respiar'],
					'enf_intervencion_ns_descansar'=>$datos['enf_intervencion_ns_descansar'],
					'enf_intervencion_ns_comer'=>$datos['enf_intervencion_ns_comer'],
					'enf_intervencion_ns_vestimenta'=>$datos['enf_intervencion_ns_vestimenta'],
					'enf_intervencion_ns_eliminar'=>$datos['enf_intervencion_ns_eliminar'],
					'enf_intervencion_ns_corporal'=>$datos['enf_intervencion_ns_corporal'],
					'enf_intervencion_ns_higiene'=>$datos['enf_intervencion_ns_higiene'],
					'enf_intervencion_ns_peligros'=>$datos['enf_intervencion_ns_peligros'],
					'enf_intervencion_ns_postura'=>$datos['enf_intervencion_ns_postura'],
					'enf_intervencion_ns_culto'=>$datos['enf_intervencion_ns_culto'],
					'enf_intervencion_ns_comunicarse'=>$datos['enf_intervencion_ns_comunicarse'],
					'enf_intervencion_ns_estudiar'=>$datos['enf_intervencion_ns_estudiar'],
					'enf_intervencion_ns_trabajar'=>$datos['enf_intervencion_ns_trabajar'],
					'enf_intervencion_ns_participar'=>$datos['enf_intervencion_ns_participar'],
					'enf_intervencion_ns_medico'=>$datos['enf_intervencion_ns_medico'],
					'enf_intervencion_ns_enfermeria'=>$datos['enf_intervencion_ns_enfermeria'],
					'enf_intervencion_ns_diagnostico'=>$datos['enf_intervencion_ns_diagnostico'],
					'enf_intervencion_ns_complementacion'=>$datos['enf_intervencion_ns_complementacion'],
					'enf_intervencion_ns_educativo'=>$datos['enf_intervencion_ns_educativo'],
					'enf_intervencion_paraclinicos'=>$datos['enf_intervencion_paraclinicos'],
					'enf_intervencion_imagenologia'=>$datos['enf_intervencion_imagenologia'],
					'enf_intervencion_liquidos'=>$datos['enf_intervencion_liquidos'],
					'enf_intervencion_observaciones'=>$datos['enf_intervencion_observaciones'],			
					'enf_intervencion_f_reg'=>$datos['enf_intervencion_f_reg'],
					'enf_intervencion_h_reg'=>$datos['enf_intervencion_h_reg'],
					'enf_intervencion_h_inicio'=>$datos['enf_intervencion_h_inicio'],
					'enf_intervencion_lista_diagnostico'=>$datos['enf_intervencion_lista_diagnostico'],
					'enf_intervencion_lista_riesgo'=>$datos['enf_intervencion_lista_riesgo'],
					'enf_intervencion_lista_resultado'=>$datos['enf_intervencion_lista_resultado'],
					'enf_intervencion_lista_intervenciones'=>$datos['enf_intervencion_lista_intervenciones'],
					'enf_intervencion_created_user'=>$datos['enf_intervencion_created_user'],
					'enf_intervencion_update_user'=>$datos['enf_intervencion_update_user']
					);
				
				$rs=$this->db->insert('hc_enf_intervencion',$campos);
				
				return '<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
					   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
					   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					   			<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<h5 class="text-center">Intervencion Registrada</h5>
						</div>
					 	<div class="modal-footer">
					       	<button type="button" class="btn btn-secondary" data-dismiss="modal" >CERRAR</button>
					   	</div>
					</div>
				</div>';
			}			

			// $pvalidar="SELECT enf_pad_f_reg FROM hc_enf_pad WHERE enf_pad_doc='".$datos['enf_intervencion_doc']."' and hc_enf_pad_cod='1' ";
			// $pvalidar=$this->db->query($pvalidar);
			// $pvalidar=$pvalidar->row();
			// if($pvalidar)
			// {
			// 	$pvalidar=$pvalidar->enf_pad_f_reg;
			// 	if($pvalidar==$datos['enf_intervencion_f_reg'])
			// 	{
					
			// 	}
			// 	else
			// 	{
			// 		return 2;
			// 	}
			// }
			// else
			// {
			// 	return 3;
			// }
		}
		function actualizar_historiintervencion_enf($datos){
			$id=$datos['enf_intervencion_doc'];
			
			$campos= array(
				// 'enf_intervencion_fecha'=>$datos['enf_intervencion_fecha'],
				// 'enf_intervencion_npla'=>$datos['enf_intervencion_npla'],
				'enf_intervencion_diagnosticos_enf'=>$datos['enf_intervencion_diagnosticos_enf'],
				'enf_intervencion_pfeiffer'=>$datos['enf_intervencion_pfeiffer'],
				'enf_intervencion_barthel'=>$datos['enf_intervencion_barthel'],
				'enf_intervencion_norton'=>$datos['enf_intervencion_norton'],
				'enf_intervencion_braden'=>$datos['enf_intervencion_braden'],
				'enf_intervencion_karnosky'=>$datos['enf_intervencion_karnosky'],
				'enf_intervencion_socio'=>$datos['enf_intervencion_socio'],
				'enf_intervencion_ansiedad'=>$datos['enf_intervencion_ansiedad'],
				'enf_intervencion_zarith'=>$datos['enf_intervencion_zarith'],
				'enf_intervencion_ns_respiar'=>$datos['enf_intervencion_ns_respiar'],
				'enf_intervencion_ns_descansar'=>$datos['enf_intervencion_ns_descansar'],
				'enf_intervencion_ns_comer'=>$datos['enf_intervencion_ns_comer'],
				'enf_intervencion_ns_vestimenta'=>$datos['enf_intervencion_ns_vestimenta'],
				'enf_intervencion_ns_eliminar'=>$datos['enf_intervencion_ns_eliminar'],
				'enf_intervencion_ns_corporal'=>$datos['enf_intervencion_ns_corporal'],
				'enf_intervencion_ns_higiene'=>$datos['enf_intervencion_ns_higiene'],
				'enf_intervencion_ns_peligros'=>$datos['enf_intervencion_ns_peligros'],
				'enf_intervencion_ns_postura'=>$datos['enf_intervencion_ns_postura'],
				'enf_intervencion_ns_culto'=>$datos['enf_intervencion_ns_culto'],
				'enf_intervencion_ns_comunicarse'=>$datos['enf_intervencion_ns_comunicarse'],
				'enf_intervencion_ns_estudiar'=>$datos['enf_intervencion_ns_estudiar'],
				'enf_intervencion_ns_trabajar'=>$datos['enf_intervencion_ns_trabajar'],
				'enf_intervencion_ns_participar'=>$datos['enf_intervencion_ns_participar'],
				'enf_intervencion_ns_medico'=>$datos['enf_intervencion_ns_medico'],
				'enf_intervencion_ns_enfermeria'=>$datos['enf_intervencion_ns_enfermeria'],
				'enf_intervencion_ns_diagnostico'=>$datos['enf_intervencion_ns_diagnostico'],
				'enf_intervencion_ns_complementacion'=>$datos['enf_intervencion_ns_complementacion'],
				'enf_intervencion_ns_educativo'=>$datos['enf_intervencion_ns_educativo'],
				'enf_intervencion_paraclinicos'=>$datos['enf_intervencion_paraclinicos'],
				'enf_intervencion_imagenologia'=>$datos['enf_intervencion_imagenologia'],
				'enf_intervencion_liquidos'=>$datos['enf_intervencion_liquidos'],
				'enf_intervencion_observaciones'=>$datos['enf_intervencion_observaciones'],			
				'enf_intervencion_f_reg'=>$datos['enf_intervencion_f_reg'],
				'enf_intervencion_h_reg'=>$datos['enf_intervencion_h_reg'],
				'enf_intervencion_lista_diagnostico'=>$datos['enf_intervencion_lista_diagnostico'],
				'enf_intervencion_lista_riesgo'=>$datos['enf_intervencion_lista_riesgo'],
				'enf_intervencion_lista_resultado'=>$datos['enf_intervencion_lista_resultado'],
				'enf_intervencion_lista_intervenciones'=>$datos['enf_intervencion_lista_intervenciones'],
				'enf_intervencion_created_user'=>$datos['enf_intervencion_created_user'],
				'enf_intervencion_update_user'=>$datos['enf_intervencion_update_user']
				);
			
			$this->db->where("enf_intervencion_doc",$id);
			$this->db->where("enf_intervencion_f_reg",$datos['enf_intervencion_f_reg']);
			$rs=$this->db->update('hc_enf_intervencion',$campos);
			
			return '<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
				   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
				   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				   			<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5 class="text-center">Intervencion Actualizada</h5>
					</div>
				 	<div class="modal-footer">
				       	<button type="button" class="btn btn-secondary" data-dismiss="modal" >CERRAR</button>
				   	</div>
				</div>
			</div>';
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
	}
?>