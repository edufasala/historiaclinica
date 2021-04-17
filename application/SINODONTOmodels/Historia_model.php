<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Historia_model extends CI_Model
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
		function buscar_paciente_nombres2($busqueda){
			// $this->db->like("doc_paciente",$busqueda);
			// $this->db->like("pnombre_paciente",$busqueda);
			// $this->db->where("id_paciente!=",'PC0000');
			// $consulta=$this->db->get("paciente");
			if($busqueda)
			{
				// $consulta="SELECT paciente.doc_paciente,paciente.tipo_doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente,hc_concentimiento.id_hc_concentimiento,hc_barthel.id_hc_barthel,hc_valoracion.id_hc_valoracion,hc_norton.id_hc_norton,hc_braden.id_hc_braden FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente INNER JOIN hc_concentimiento ON hc_concentimiento.concentimiento_doc=paciente.doc_paciente INNER JOIN hc_barthel ON hc_barthel.barthel_doc=paciente.doc_paciente INNER JOIN hc_valoracion ON hc_valoracion.valoracion_doc=paciente.doc_paciente INNER JOIN hc_norton ON hc_norton.norton_doc=paciente.doc_paciente INNER JOIN hc_braden ON hc_braden.braden_doc=paciente.doc_paciente WHERE doc_paciente LIKE '%".$busqueda."%' or pnombre_paciente LIKE '%".$busqueda."%' or snombre_paciente LIKE '%".$busqueda."%' or papellido_paciente LIKE '%".$busqueda."%' or sapellido_paciente LIKE '%".$busqueda."%'";
				$consulta="SELECT paciente.doc_paciente,paciente.tipo_doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente,hc_pad.pad_f_reg,hc_pad.hc_pad_cod FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente WHERE hc_pad_cod='1' and doc_paciente LIKE '%".$busqueda."%' or pnombre_paciente LIKE '%".$busqueda."%' or snombre_paciente LIKE '%".$busqueda."%' or papellido_paciente LIKE '%".$busqueda."%' or sapellido_paciente LIKE '%".$busqueda."%'";
			}
			else
			{
				// $consulta="SELECT paciente.doc_paciente,paciente.tipo_doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente,hc_concentimiento.id_hc_concentimiento,hc_barthel.id_hc_barthel,hc_valoracion.id_hc_valoracion,hc_norton.id_hc_norton,hc_braden.id_hc_braden FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente INNER JOIN hc_concentimiento ON hc_concentimiento.concentimiento_doc=paciente.doc_paciente INNER JOIN hc_barthel ON hc_barthel.barthel_doc=paciente.doc_paciente INNER JOIN hc_valoracion ON hc_valoracion.valoracion_doc=paciente.doc_paciente INNER JOIN hc_norton ON hc_norton.norton_doc=paciente.doc_paciente INNER JOIN hc_braden ON hc_braden.braden_doc=paciente.doc_paciente WHERE id_paciente!='PC0000' ";
				$consulta="SELECT paciente.doc_paciente,paciente.tipo_doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente,,hc_pad.pad_f_reg,hc_pad.hc_pad_cod FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente WHERE id_paciente!='PC0000' and hc_pad.hc_pad_cod='1'";
				// SELECT hc_pad.pad_documento,paciente.pnombre_paciente,paciente.papellido_paciente,hc_concentimiento.id_hc_concentimiento,hc_barthel.id_hc_barthel,hc_valoracion.id_hc_valoracion,hc_norton.id_hc_norton,hc_braden.id_hc_braden FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente INNER JOIN hc_concentimiento ON hc_concentimiento.concentimiento_doc=paciente.doc_paciente INNER JOIN hc_barthel ON hc_barthel.barthel_doc=paciente.doc_paciente INNER JOIN hc_valoracion ON hc_valoracion.valoracion_doc=paciente.doc_paciente INNER JOIN hc_norton ON hc_norton.norton_doc=paciente.doc_paciente INNER JOIN hc_braden ON hc_braden.braden_doc=paciente.doc_paciente
			}
			$r=$this->db->query($consulta);
			return $r->result();
		}
		function buscar_registro_individual($busqueda){
			
			//$consulta="SELECT COUNT(*) FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente INNER JOIN hc_barthel ON hc_barthel.barthel_doc=paciente.doc_paciente INNER JOIN hc_valoracion ON hc_valoracion.valoracion_doc=paciente.doc_paciente INNER JOIN hc_norton ON hc_norton.norton_doc=paciente.doc_paciente INNER JOIN hc_braden ON hc_braden.braden_doc=paciente.doc_paciente WHERE doc_paciente='".$busqueda."' ";
			$consulta="SELECT COUNT(*) FROM hc_pad WHERE pad_documento='".$busqueda."' ";
			$r=$this->db->query($consulta);
			return $r->result();
		}
		function buscar_registros_paciente($doc){
			date_default_timezone_set("America/Bogota");
	        $now = time();
	        $getfecha=date("Y-m-d");
	        $prim="SELECT pad_f_reg FROM hc_pad WHERE pad_documento='".$doc."' and hc_pad_cod='1' ";
			$rprim=$this->db->query($prim);
			if($rprim->num_rows()==1)
			{
				$rprim=$rprim->row();
				$rprim=$rprim->pad_f_reg;
			}
			else
			{
				$rprim="";
			}
			
			$consulta2="SELECT pad_documento FROM hc_pad WHERE pad_documento='".$doc."' and pad_f_reg='".$rprim."' ";
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

			$consulta3="SELECT barthel_doc FROM hc_barthel WHERE barthel_doc='".$doc."' and barthel_f_reg='".$rprim."' ";
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

			$consulta4="SELECT valoracion_doc FROM  hc_valoracion WHERE valoracion_doc='".$doc."' and valoracion_f_reg='".$rprim."'";
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

			$consulta5="SELECT norton_doc FROM hc_norton WHERE norton_doc='".$doc."' and norton_f_reg='".$rprim."' ";
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

			$consulta6="SELECT braden_doc FROM hc_braden WHERE braden_doc='".$doc."' and braden_f_reg='".$rprim."' ";
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
					$r3.','.
					$r4.','.
					$r5.','.
					$r6.','.
					$r7
					;			
			return $resultado;
		}
		function buscar_registros_paciente_ea($doc){
			date_default_timezone_set("America/Bogota");
	        $now = time();
	        $getfecha=date("Y-m-d");
			$this->db->where("pad_documento",$doc);
			$this->db->join('paciente','hc_pad.pad_documento=paciente.doc_paciente');
			// $this->db->where("id_hc_pad_cod!=",'PAD0000');
		    $this->db->where("doc_paciente",$doc);
			$consulta=$this->db->get("hc_pad");
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();
			}
			else
			{
				return false;
			}
			/*
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();
			}
			else
			{
				return false;
			}
			*/
		}
		function buscar_registros_paciente_eafh($doc,$ff){
			date_default_timezone_set("America/Bogota");
	        $now = time();
	        $getfecha=date("Y-m-d");
			$this->db->where("pad_documento",$doc);
			$this->db->join('paciente','hc_pad.pad_documento=paciente.doc_paciente');
			// $this->db->where("id_hc_pad_cod!=",'PAD0000');
		    $this->db->where("doc_paciente",$doc);
		    $this->db->where("pad_f_reg",$ff);
			$consulta=$this->db->get("hc_pad");
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();
			}
			else
			{
				return false;
			}
			/*
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();
			}
			else
			{
				return false;
			}
			*/
		}
		function buscar_registros_paciente_tdmd($doc){
			date_default_timezone_set("America/Bogota");
	        $now = time();
	        $getfecha=date("Y-m-d");
			$this->db->where("pad_documento",$doc);
			$this->db->join('paciente','hc_pad.pad_documento=paciente.doc_paciente');
			// $this->db->where("id_hc_pad_cod!=",'PAD0000');
		    $this->db->where("doc_paciente",$doc);
			$consulta=$this->db->get("hc_pad");
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();
			}
			else
			{
				return false;
			}
			/*
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();
			}
			else
			{
				return false;
			}
			*/
		}
		function buscar_registros_paciente_tdmdfh($doc,$ff){
			date_default_timezone_set("America/Bogota");
	        $now = time();
	        $getfecha=date("Y-m-d");
			$this->db->where("pad_documento",$doc);
			$this->db->join('paciente','hc_pad.pad_documento=paciente.doc_paciente');
			// $this->db->where("id_hc_pad_cod!=",'PAD0000');
			$this->db->where("pad_f_reg",$ff);
		    $this->db->where("doc_paciente",$doc);
			$consulta=$this->db->get("hc_pad");
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();
			}
			else
			{
				return false;
			}
			/*
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();
			}
			else
			{
				return false;
			}
			*/
		}
		function buscar_registros_paciente_tddgs($doc){
			date_default_timezone_set("America/Bogota");
	        $now = time();
	        $getfecha=date("Y-m-d");
			$this->db->where("pad_documento",$doc);
			$this->db->join('paciente','hc_pad.pad_documento=paciente.doc_paciente');
			// $this->db->where("id_hc_pad_cod!=",'PAD0000');
		    $this->db->where("doc_paciente",$doc);
			$consulta=$this->db->get("hc_pad");
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();
			}
			else
			{
				return false;
			}
			/*
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();
			}
			else
			{
				return false;
			}
			*/
		}
		function buscar_registros_paciente_tddgsfh($doc,$ff){
			date_default_timezone_set("America/Bogota");
	        $now = time();
	        $getfecha=date("Y-m-d");
			$this->db->where("pad_documento",$doc);
			$this->db->join('paciente','hc_pad.pad_documento=paciente.doc_paciente');
			// $this->db->where("id_hc_pad_cod!=",'PAD0000');
			$this->db->where("pad_f_reg",$ff);
		    $this->db->where("doc_paciente",$doc);
			$consulta=$this->db->get("hc_pad");
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();
			}
			else
			{
				return false;
			}
			/*
			return $consulta->result();
			if($consulta->num_rows()>0)
			{
				return $consulta->result();
			}
			else
			{
				return false;
			}
			*/
		}
		function registrar_historiapad($datos){
			$existe="SELECT COUNT(*) hc_pad FROM hc_pad WHERE pad_documento='".$datos['pad_documento']."' ";
			$resultado=$this->db->query($existe);
			$resultado=$resultado->row();
			$result=$resultado->hc_pad;
			/*if($resultado->num_rows()==1)
			{
				$result=$resultado->row();
				//$result=$resultado->pad_documento;
			}
			else
			{
				$result="";
			}*/
			if($result>0)
			{
				return 0;
			}
			else
			{
				$siguiente="SELECT MAX(id_hc_pad) id_hc_pad FROM hc_pad";
				$siguiente=$this->db->query($siguiente);
				$siguiente=$siguiente->row();
				$siguiente=$siguiente->id_hc_pad;
				$sigla='PAD';
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

				$seguir="SELECT COUNT(*) hc_pad_cod FROM hc_pad WHERE pad_documento='".$datos['pad_documento']."'";
				$seguir=$this->db->query($seguir);
				$seguir=$seguir->row();
				$seguir=$seguir->hc_pad_cod;
				if($seguir==0)
				{
					$suma2=1;
				}
				else
				{
					$suma2=$seguir+1;
				}
				$obcod=$codigo;
				// $obpc=$datos['id_paciente'];
				// $getfecha=$datos['f_hc'];
				// $gethora=$datos['h_hc'];
				$guardarid="";
				$campos= array(
					// $guardarid=>'id',
					'id_hc_pad'=>$codigo,
					'hc_pad_cod'=>$suma2,
					'pad_documento'=>$datos['pad_documento'],

					'pad_mconsulta'=>$datos['pad_mconsulta'],
					'pad_enf_actual'=>$datos['pad_enf_actual'],
					'pad_a_patologicos'=>$datos['pad_a_patologicos'],
					'pad_a_quirurgicos'=>$datos['pad_a_quirurgicos'],
					'pad_a_farmacologicos'=>$datos['pad_a_farmacologicos'],
					'pad_a_alergicos'=>$datos['pad_a_alergicos'],
					'pad_a_traumaticos'=>$datos['pad_a_traumaticos'],
					'pad_a_familiares'=>$datos['pad_a_familiares'],
					'pad_a_transfusionales'=>$datos['pad_a_transfusionales'],
					'pad_a_ginecologicos'=>$datos['pad_a_ginecologicos'],
					'pad_a_exposicionales'=>$datos['pad_a_exposicionales'],
					'pad_a_otros'=>$datos['pad_a_otros'],

					'pad_endocrinologico'=>$datos['pad_endocrinologico'],
					'pad_organos'=>$datos['pad_organos'],
					'pad_cardiopulmonar'=>$datos['pad_cardiopulmonar'],
					'pad_gastrointestinal'=>$datos['pad_gastrointestinal'],
					'pad_genitourinario'=>$datos['pad_genitourinario'],
					'pad_osteomuscular'=>$datos['pad_osteomuscular'],
					'pad_neurologico'=>$datos['pad_neurologico'],
					'pad_pielyfarenas'=>$datos['pad_pielyfarenas'],
					'pad_rxs_otros'=>$datos['pad_rxs_otros'],
					'pad_e_general'=>$datos['pad_e_general'],
					'pad_e_conciencia'=>$datos['pad_e_conciencia'],
					'pad_e_hidratacion'=>$datos['pad_e_hidratacion'],
					'pad_e_respiratorio'=>$datos['pad_e_respiratorio'],
					'pad_fr'=>$datos['pad_fr'],
					'pad_fc'=>$datos['pad_fc'],
					'pad_t_sistole'=>$datos['pad_t_sistole'],
					'pad_t_diastole'=>$datos['pad_t_diastole'],
					'pad_ta'=>$datos['pad_ta'],
					'pad_te'=>$datos['pad_te'],
					'pad_sac'=>$datos['pad_sac'],
					'pad_gluc'=>$datos['pad_gluc'],
					'pad_cabeza'=>$datos['pad_cabeza'],
					'pad_ojos'=>$datos['pad_ojos'],
					'pad_boca'=>$datos['pad_boca'],
					'pad_cuello'=>$datos['pad_cuello'],
					'pad_torax'=>$datos['pad_torax'],
					'pad_c_pulmonar'=>$datos['pad_c_pulmonar'],
					'pad_abdomen'=>$datos['pad_abdomen'],
					'pad_e_genitourinario'=>$datos['pad_e_genitourinario'],
					'pad_extremidades'=>$datos['pad_extremidades'],
					'pad_snc'=>$datos['pad_snc'],
					'pad_mental'=>$datos['pad_mental'],
					'pad_piel'=>$datos['pad_piel'],
					'pad_examen_otros'=>$datos['pad_examen_otros'],

					'pad_acceso_venoso'=>$datos['pad_acceso_venoso'],
					'pad_estado_cateter'=>$datos['pad_estado_cateter'],
					'pad_f_insercion'=>$datos['pad_f_insercion'],
					'pad_ostomia'=>$datos['pad_ostomia'],
					'pad_estado_ostomia'=>$datos['pad_estado_ostomia'],
					'pad_cual_ostomia'=>$datos['pad_cual_ostomia'],
					'pad_f_ostomia'=>$datos['pad_f_ostomia'],
					'pad_sondas'=>$datos['pad_sondas'],
					'pad_estado_sonda'=>$datos['pad_estado_sonda'],
					'pad_cual_sonda'=>$datos['pad_cual_sonda'],
					'pad_f_postura_sonda'=>$datos['pad_f_postura_sonda'],
					'pad_dolor_region'=>$datos['pad_dolor_region'],
					'pad_dolor_irradiacion'=>$datos['pad_dolor_irradiacion'],
					'pad_dolor_nivel'=>$datos['pad_dolor_nivel'],
					'pad_dolor_cual'=>$datos['pad_dolor_cual'],
					'pad_partes'=>$datos['pad_partes'],
					'pad_tipo_dolor'=>$datos['pad_tipo_dolor'],
					'pad_tratamiento_previo'=>$datos['pad_tratamiento_previo'],
					'pad_cual_dolor'=>$datos['pad_cual_dolor'],
					'pad_alivio'=>$datos['pad_alivio'],
					'pad_r_paraclinico'=>$datos['pad_r_paraclinico'],
					'pad_plan_manejo_medico_actual'=>$datos['pad_plan_manejo_medico_actual'],
					'pad_medicamentos'=>$datos['pad_medicamentos'],
					'pad_analisis'=>$datos['pad_analisis'],

					'pad_plan_manejo_programa'=>$datos['pad_plan_manejo_programa'],
					'pad_plan_manejo_oxigeno'=>$datos['pad_plan_manejo_oxigeno'],
					'pad_plan_manejo_oxigenodetalle'=>$datos['pad_plan_manejo_oxigenodetalle'],
					'pad_plan_manejo_dieta'=>$datos['pad_plan_manejo_dieta'],

					'pad_diagnosticos'=>$datos['pad_diagnosticos'],
					'pad_ac_medico'=>$datos['pad_ac_medico'],
					'pad_ac_medico_detalle'=>$datos['pad_ac_medico_detalle'],
					'pad_ac_enfermera'=>$datos['pad_ac_enfermera'],
					'pad_ac_enfermera_detalle'=>$datos['pad_ac_enfermera_detalle'],
					'pad_ac_trabajo_social'=>$datos['pad_ac_trabajo_social'],
					'pad_ac_trabajo_social_detalle'=>$datos['pad_ac_trabajo_social_detalle'],
					'pad_ac_nutricion'=>$datos['pad_ac_nutricion'],
					'pad_ac_nutricion_detalle'=>$datos['pad_ac_nutricion_detalle'],
					'pad_ac_fisioterapia'=>$datos['pad_ac_fisioterapia'],
					'pad_ac_fisioterapia_detalle'=>$datos['pad_ac_fisioterapia_detalle'],
					'pad_t_respiratoria'=>$datos['pad_t_respiratoria'],
					'pad_t_respiratoria_detalle'=>$datos['pad_t_respiratoria_detalle'],
					'pad_t_ocupacional'=>$datos['pad_t_ocupacional'],
					'pad_t_ocupacional_detalle'=>$datos['pad_t_ocupacional_detalle'],
					'pad_t_lenguaje'=>$datos['pad_t_lenguaje'],
					'pad_t_lenguaje_detalle'=>$datos['pad_t_lenguaje_detalle'],
					'pad_aux_enfermeria'=>$datos['pad_aux_enfermeria'],
					'pad_aux_otro'=>$datos['pad_aux_otro'],
					'pad_educacion'=>$datos['pad_educacion'],
					'pad_educacion_detalle'=>$datos['pad_educacion_detalle'],
					'pad_paraclinicos'=>$datos['pad_paraclinicos'],
					'pad_paraclinicos_detalle'=>$datos['pad_paraclinicos_detalle'],
					'pad_pm_valoraciones'=>$datos['pad_pm_valoraciones'],
					'pad_pm_recomendaciones'=>$datos['pad_pm_recomendaciones'],
					'pad_esas_dolor'=>$datos['pad_esas_dolor'],
					'pad_esas_cansancio'=>$datos['pad_esas_cansancio'],
					'pad_esas_nauseas'=>$datos['pad_esas_nauseas'],
					'pad_esas_tristeza'=>$datos['pad_esas_tristeza'],
					'pad_esas_angustia'=>$datos['pad_esas_angustia'],
					'pad_esas_somnolencia'=>$datos['pad_esas_somnolencia'],
					'pad_esas_apetito'=>$datos['pad_esas_apetito'],
					'pad_esas_disnea'=>$datos['pad_esas_disnea'],
					'pad_esas_insomnio'=>$datos['pad_esas_insomnio'],
					'pad_esas_estrenimiento'=>$datos['pad_esas_estrenimiento'],
					'pad_esas_bienestar'=>$datos['pad_esas_bienestar'],
					'pad_ecaf_gestos'=>$datos['pad_ecaf_gestos'],
					'pad_ecaf_quebido'=>$datos['pad_ecaf_quebido'],
					'pad_ecaf_grito'=>$datos['pad_ecaf_grito'],
					'pad_ecaf_tocando'=>$datos['pad_ecaf_tocando'],
					'pad_ecaf_movimiento'=>$datos['pad_ecaf_movimiento'],
					'pad_ecaf_respiracion'=>$datos['pad_ecaf_respiracion'],
					'pad_ecaf_total'=>$datos['pad_ecaf_total'],
					'pad_ik'=>$datos['pad_ik'],
					'pad_ecog'=>$datos['pad_ecog'],
					'pad_pps'=>$datos['pad_pps'],
					'pad_mdas'=>$datos['pad_mdas'],
					'pad_cam'=>$datos['pad_cam'],
					'pad_ramsay'=>$datos['pad_ramsay'],
					'pad_ecaf_observaciones'=>$datos['pad_ecaf_observaciones'],
					'pad_f_reg'=>$datos['pad_f_reg'],
					'pad_h_reg'=>$datos['pad_h_reg'],
					'pad_h_inicio'=>$datos['pad_h_inicio'],
					'pad_tipo_tratamiento'=>$datos['pad_tipo_tratamiento'],
					'pad_created_user'=>$datos['pad_created_user'],
					'pad_update_user'=>$datos['pad_update_user']
					);
				// $id='id';
				$rs=$this->db->insert('hc_pad',$campos);

				// $campos_paciente= array(
				// 		'estado_paciente'=>'2');
				// $this->db->where('doc_paciente',$datos['pad_documento']);
				// $query=$this->db->update('paciente',$campos_paciente);
				// 	return '<div class="modal-dialog" role="document">
				// 	<div class="modal-content">
				// 		<div class="modal-header">
				// 	   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
				// 	   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				// 	   			<span aria-hidden="true">&times;</span>
				// 			</button>
				// 		</div>
				// 		<div class="modal-body">
				// 			<h5 class="text-center">Historia Clinica Registrada</h5>
				// 		   	<span class="alert-success" role="alert">N°: </span>'.strtoupper($obcod).' </span>'.'
				// 		</div>
				// 	 	<div class="modal-footer">
				// 	   		<button type="button" class="btn btn-primary" onclick="resetearNuevo3();">NUEVO REGISTRO</button>
				// 	   		<button type="button" class="btn btn-danger"  onclick="imprimirhistoria(\''.$obcod.'\',\''.$obpc.'\');">IMPRIMIR</button>
				// 	       	<button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="resetearNuevo3()" >CERRAR</button>
				// 	   	</div>
				// 	</div>
				// </div>';
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
						   	<input type="text" class="form-control" id="idpad" name="idpad" value="'.$codigo.'" style="display:none"/>
						</div>
					 	<div class="modal-footer">
					       	<button type="button" class="btn btn-secondary" data-dismiss="modal" >CERRAR</button>
					   	</div>
					</div>
				</div>';
			}
		}
		function actualizar_historiapad($datos){
			$id=$datos['id_creado'];
			// $obpc=$datos['id_paciente'];
			// $getfecha=$datos['f_hc'];
			// $gethora=$datos['h_hc'];
			// return var_dump($datos);
			$campos= array(

				'pad_mconsulta'=>$datos['pad_mconsulta'],
				'pad_enf_actual'=>$datos['pad_enf_actual'],
				'pad_a_patologicos'=>$datos['pad_a_patologicos'],
				'pad_a_quirurgicos'=>$datos['pad_a_quirurgicos'],
				'pad_a_farmacologicos'=>$datos['pad_a_farmacologicos'],
				'pad_a_alergicos'=>$datos['pad_a_alergicos'],
				'pad_a_traumaticos'=>$datos['pad_a_traumaticos'],
				'pad_a_familiares'=>$datos['pad_a_familiares'],
				'pad_a_transfusionales'=>$datos['pad_a_transfusionales'],
				'pad_a_ginecologicos'=>$datos['pad_a_ginecologicos'],
				'pad_a_exposicionales'=>$datos['pad_a_exposicionales'],
				'pad_a_otros'=>$datos['pad_a_otros'],

				'pad_endocrinologico'=>$datos['pad_endocrinologico'],
				'pad_organos'=>$datos['pad_organos'],
				'pad_cardiopulmonar'=>$datos['pad_cardiopulmonar'],
				'pad_gastrointestinal'=>$datos['pad_gastrointestinal'],
				'pad_genitourinario'=>$datos['pad_genitourinario'],
				'pad_osteomuscular'=>$datos['pad_osteomuscular'],
				'pad_neurologico'=>$datos['pad_neurologico'],
				'pad_pielyfarenas'=>$datos['pad_pielyfarenas'],
				'pad_rxs_otros'=>$datos['pad_rxs_otros'],
				'pad_e_general'=>$datos['pad_e_general'],
				'pad_e_conciencia'=>$datos['pad_e_conciencia'],
				'pad_e_hidratacion'=>$datos['pad_e_hidratacion'],
				'pad_e_respiratorio'=>$datos['pad_e_respiratorio'],
				'pad_fr'=>$datos['pad_fr'],
				'pad_fc'=>$datos['pad_fc'],
				'pad_t_sistole'=>$datos['pad_t_sistole'],
				'pad_t_diastole'=>$datos['pad_t_diastole'],
				'pad_ta'=>$datos['pad_ta'],
				'pad_te'=>$datos['pad_te'],
				'pad_sac'=>$datos['pad_sac'],
				'pad_gluc'=>$datos['pad_gluc'],
				'pad_cabeza'=>$datos['pad_cabeza'],
				'pad_ojos'=>$datos['pad_ojos'],
				'pad_boca'=>$datos['pad_boca'],
				'pad_cuello'=>$datos['pad_cuello'],
				'pad_torax'=>$datos['pad_torax'],
				'pad_c_pulmonar'=>$datos['pad_c_pulmonar'],
				'pad_abdomen'=>$datos['pad_abdomen'],
				'pad_e_genitourinario'=>$datos['pad_e_genitourinario'],
				'pad_extremidades'=>$datos['pad_extremidades'],
				'pad_snc'=>$datos['pad_snc'],
				'pad_mental'=>$datos['pad_mental'],
				'pad_piel'=>$datos['pad_piel'],
				'pad_examen_otros'=>$datos['pad_examen_otros'],

				'pad_acceso_venoso'=>$datos['pad_acceso_venoso'],
				'pad_estado_cateter'=>$datos['pad_estado_cateter'],
				'pad_f_insercion'=>$datos['pad_f_insercion'],
				'pad_ostomia'=>$datos['pad_ostomia'],
				'pad_estado_ostomia'=>$datos['pad_estado_ostomia'],
				'pad_cual_ostomia'=>$datos['pad_cual_ostomia'],
				'pad_f_ostomia'=>$datos['pad_f_ostomia'],
				'pad_sondas'=>$datos['pad_sondas'],
				'pad_estado_sonda'=>$datos['pad_estado_sonda'],
				'pad_cual_sonda'=>$datos['pad_cual_sonda'],
				'pad_f_postura_sonda'=>$datos['pad_f_postura_sonda'],
				'pad_dolor_region'=>$datos['pad_dolor_region'],
				'pad_dolor_irradiacion'=>$datos['pad_dolor_irradiacion'],
				'pad_dolor_nivel'=>$datos['pad_dolor_nivel'],
				'pad_dolor_cual'=>$datos['pad_dolor_cual'],
				'pad_partes'=>$datos['pad_partes'],
				'pad_tipo_dolor'=>$datos['pad_tipo_dolor'],
				'pad_tratamiento_previo'=>$datos['pad_tratamiento_previo'],
				'pad_cual_dolor'=>$datos['pad_cual_dolor'],
				'pad_alivio'=>$datos['pad_alivio'],
				'pad_r_paraclinico'=>$datos['pad_r_paraclinico'],
				'pad_plan_manejo_medico_actual'=>$datos['pad_plan_manejo_medico_actual'],
				'pad_medicamentos'=>$datos['pad_medicamentos'],
				'pad_analisis'=>$datos['pad_analisis'],

				'pad_plan_manejo_programa'=>$datos['pad_plan_manejo_programa'],
				'pad_plan_manejo_oxigeno'=>$datos['pad_plan_manejo_oxigeno'],
				'pad_plan_manejo_oxigenodetalle'=>$datos['pad_plan_manejo_oxigenodetalle'],
				'pad_plan_manejo_dieta'=>$datos['pad_plan_manejo_dieta'],

				'pad_diagnosticos'=>$datos['pad_diagnosticos'],
				'pad_ac_medico'=>$datos['pad_ac_medico'],
				'pad_ac_medico_detalle'=>$datos['pad_ac_medico_detalle'],
				'pad_ac_enfermera'=>$datos['pad_ac_enfermera'],
				'pad_ac_enfermera_detalle'=>$datos['pad_ac_enfermera_detalle'],
				'pad_ac_trabajo_social'=>$datos['pad_ac_trabajo_social'],
				'pad_ac_trabajo_social_detalle'=>$datos['pad_ac_trabajo_social_detalle'],
				'pad_ac_nutricion'=>$datos['pad_ac_nutricion'],
				'pad_ac_nutricion_detalle'=>$datos['pad_ac_nutricion_detalle'],
				'pad_ac_fisioterapia'=>$datos['pad_ac_fisioterapia'],
				'pad_ac_fisioterapia_detalle'=>$datos['pad_ac_fisioterapia_detalle'],
				'pad_t_respiratoria'=>$datos['pad_t_respiratoria'],
				'pad_t_respiratoria_detalle'=>$datos['pad_t_respiratoria_detalle'],
				'pad_t_ocupacional'=>$datos['pad_t_ocupacional'],
				'pad_t_ocupacional_detalle'=>$datos['pad_t_ocupacional_detalle'],
				'pad_t_lenguaje'=>$datos['pad_t_lenguaje'],
				'pad_t_lenguaje_detalle'=>$datos['pad_t_lenguaje_detalle'],
				'pad_aux_enfermeria'=>$datos['pad_aux_enfermeria'],
				'pad_aux_otro'=>$datos['pad_aux_otro'],
				'pad_educacion'=>$datos['pad_educacion'],
				'pad_educacion_detalle'=>$datos['pad_educacion_detalle'],
				'pad_paraclinicos'=>$datos['pad_paraclinicos'],
				'pad_paraclinicos_detalle'=>$datos['pad_paraclinicos_detalle'],
				'pad_pm_valoraciones'=>$datos['pad_pm_valoraciones'],
				'pad_pm_recomendaciones'=>$datos['pad_pm_recomendaciones'],
				'pad_esas_dolor'=>$datos['pad_esas_dolor'],
				'pad_esas_cansancio'=>$datos['pad_esas_cansancio'],
				'pad_esas_nauseas'=>$datos['pad_esas_nauseas'],
				'pad_esas_tristeza'=>$datos['pad_esas_tristeza'],
				'pad_esas_angustia'=>$datos['pad_esas_angustia'],
				'pad_esas_somnolencia'=>$datos['pad_esas_somnolencia'],
				'pad_esas_apetito'=>$datos['pad_esas_apetito'],
				'pad_esas_disnea'=>$datos['pad_esas_disnea'],
				'pad_esas_insomnio'=>$datos['pad_esas_insomnio'],
				'pad_esas_estrenimiento'=>$datos['pad_esas_estrenimiento'],
				'pad_esas_bienestar'=>$datos['pad_esas_bienestar'],
				'pad_ecaf_gestos'=>$datos['pad_ecaf_gestos'],
				'pad_ecaf_quebido'=>$datos['pad_ecaf_quebido'],
				'pad_ecaf_grito'=>$datos['pad_ecaf_grito'],
				'pad_ecaf_tocando'=>$datos['pad_ecaf_tocando'],
				'pad_ecaf_movimiento'=>$datos['pad_ecaf_movimiento'],
				'pad_ecaf_respiracion'=>$datos['pad_ecaf_respiracion'],
				'pad_ecaf_total'=>$datos['pad_ecaf_total'],
				'pad_ik'=>$datos['pad_ik'],
				'pad_ecog'=>$datos['pad_ecog'],
				'pad_pps'=>$datos['pad_pps'],
				'pad_mdas'=>$datos['pad_mdas'],
				'pad_cam'=>$datos['pad_cam'],
				'pad_ramsay'=>$datos['pad_ramsay'],
				'pad_ecaf_observaciones'=>$datos['pad_ecaf_observaciones'],
				'pad_h_reg'=>$datos['pad_h_reg'],
				'pad_tipo_tratamiento'=>$datos['pad_tipo_tratamiento'],
				);

			$this->db->where('pad_documento',$id);
			$this->db->where('pad_h_inicio',$datos['pad_h_inicio']);
			$rs=$this->db->update('hc_pad',$campos);
			
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
		function registrar_historiaconcentimiento($datos){
			$existe="SELECT concentimiento_doc FROM hc_concentimiento WHERE concentimiento_doc='".$datos['concentimiento_doc']."' ";
			$resultado=$this->db->query($existe);
			if($resultado->num_rows()==1)
			{
				$resultado=$resultado->row();
				$result=$resultado->concentimiento_doc;
			}
			else
			{
				$result="";
			}
			if($result)
			{
				return 0;
			}
			else
			{
				$siguiente="SELECT MAX(id_hc_concentimiento) id_hc_concentimiento FROM hc_concentimiento";
				$siguiente=$this->db->query($siguiente);
				$siguiente=$siguiente->row();
				$siguiente=$siguiente->id_hc_concentimiento;
				$sigla='CON';
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
				
				$campos= array(
					'id_hc_concentimiento'=>$codigo,
					'concentimiento_doc'=>$datos['concentimiento_doc'],
					'concentimiento_nombre_cuidador'=>$datos['concentimiento_nombre_cuidador'],
					'concentimiento_tipo_doc_cuidador'=>$datos['concentimiento_tipo_doc_cuidador'],
					'concentimiento_doc_cuidador'=>$datos['concentimiento_doc_cuidador'],
					'concentimiento_responsable_paciente'=>$datos['concentimiento_responsable_paciente'],
					'concentimiento_paciente_pad'=>$datos['concentimiento_paciente_pad'],
					'concentimiento_diagnosticos'=>$datos['concentimiento_diagnosticos'],
					'concentimiento_probabilidad_exito'=>$datos['concentimiento_probabilidad_exito'],
					'concentimiento_pronostico'=>$datos['concentimiento_pronostico'],
					'concentimiento_fecha'=>$datos['concentimiento_fecha'],
					'concentimiento_nombre_paciente'=>$datos['concentimiento_nombre_paciente'],
					'concentimiento_nombre_responsable'=>$datos['concentimiento_nombre_responsable'],
					'concentimiento_da_concentimiento'=>$datos['concentimiento_da_concentimiento'],
					'concentimiento_no_firma_por'=>$datos['concentimiento_no_firma_por'],
					'concentimiento_mareriales'=>$datos['concentimiento_mareriales'],
					'concentimiento_disentimiento'=>$datos['concentimiento_disentimiento'],
					'concentimiento_f_reg'=>$datos['concentimiento_f_reg'],
					'concentimiento_h_reg'=>$datos['concentimiento_h_reg'],
					'concentimiento_h_inicio'=>$datos['concentimiento_h_inicio'],
					'concentimiento_created_user'=>$datos['concentimiento_created_user'],
					'concentimiento_update_user'=>$datos['concentimiento_update_user']
					);

				$rs=$this->db->insert('hc_concentimiento',$campos);

				return '<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
					   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
					   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					   			<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<h5 class="text-center">Concentimiento Registrado</h5>
						</div>
					 	<div class="modal-footer">
					       	<button type="button" class="btn btn-secondary" data-dismiss="modal" >CERRAR</button>
					   	</div>
					</div>
				</div>';
			}
		}
		function actualizar_historiaconcentimiento($datos){
			$id=$datos['concentimiento_doc'];
			
			$campos= array(
				'concentimiento_nombre_cuidador'=>$datos['concentimiento_nombre_cuidador'],
				'concentimiento_tipo_doc_cuidador'=>$datos['concentimiento_tipo_doc_cuidador'],
				'concentimiento_doc_cuidador'=>$datos['concentimiento_doc_cuidador'],
				'concentimiento_responsable_paciente'=>$datos['concentimiento_responsable_paciente'],
				'concentimiento_paciente_pad'=>$datos['concentimiento_paciente_pad'],
				'concentimiento_diagnosticos'=>$datos['concentimiento_diagnosticos'],
				'concentimiento_probabilidad_exito'=>$datos['concentimiento_probabilidad_exito'],
				'concentimiento_pronostico'=>$datos['concentimiento_pronostico'],
				'concentimiento_fecha'=>$datos['concentimiento_fecha'],
				'concentimiento_nombre_paciente'=>$datos['concentimiento_nombre_paciente'],
				'concentimiento_nombre_responsable'=>$datos['concentimiento_nombre_responsable'],
				'concentimiento_da_concentimiento'=>$datos['concentimiento_da_concentimiento'],
				'concentimiento_no_firma_por'=>$datos['concentimiento_no_firma_por'],
				'concentimiento_mareriales'=>$datos['concentimiento_mareriales'],
				'concentimiento_disentimiento'=>$datos['concentimiento_disentimiento'],
				'concentimiento_f_reg'=>$datos['concentimiento_f_reg'],
				'concentimiento_h_reg'=>$datos['concentimiento_h_reg'],
				'concentimiento_created_user'=>$datos['concentimiento_created_user'],
				'concentimiento_update_user'=>$datos['concentimiento_update_user']
				);
			
			$this->db->where("concentimiento_doc",$id);
			$rs=$this->db->update('hc_concentimiento',$campos);

			return '<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
				   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
				   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				   			<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5 class="text-center">Concentimiento Actualizado</h5>
					</div>
				 	<div class="modal-footer">
				       	<button type="button" class="btn btn-secondary" data-dismiss="modal" >CERRAR</button>
				   	</div>
				</div>
			</div>';
		}
		function registrar_historiabarthel($datos){
			$pvalidar="SELECT COUNT(*) hc_barthel FROM hc_barthel WHERE barthel_doc='".$datos['barthel_doc']."' ";
			$pvalidar=$this->db->query($pvalidar);
			$pvalidar=$pvalidar->row();
			$pvalidar=$pvalidar->hc_barthel;
			if($pvalidar>0)
			{
				$existe="SELECT COUNT(hc_barthel.id_hc_barthel),hc_barthel.barthel_f_reg FROM hc_barthel INNER JOIN hc_norton ON hc_barthel.barthel_doc=hc_norton.norton_doc INNER JOIN hc_braden ON hc_barthel.barthel_doc=hc_braden.braden_doc INNER JOIN hc_valoracion ON hc_barthel.barthel_doc=hc_valoracion.valoracion_doc INNER JOIN paciente ON hc_barthel.barthel_doc=paciente.doc_paciente and paciente.doc_paciente='".$datos['barthel_doc']."' ";
				$resultado=$this->db->query($existe);
				$resultado=$resultado->row();
				$result2 = $resultado->barthel_f_reg;
      			$miarray = get_object_vars($resultado);
      			foreach ($miarray as $valor) {
			        // echo "".$valor[0];
			        $result=$valor[0];
			    }
				if($result>0)
				{
					// return 0;
					//validar fecha 6 meses
					$fecha = date_create($result2);
				    date_add($fecha, date_interval_create_from_date_string("6 months"));
				    $obfecha=date_format($fecha,"Y-m-d");
				    if($datos['barthel_f_reg']==$obfecha)
				    {
				    	// echo "si";//siguiente escala
				    	$siguiente="SELECT MAX(id_hc_barthel) id_hc_barthel FROM hc_barthel";
						$siguiente=$this->db->query($siguiente);
						$siguiente=$siguiente->row();
						$siguiente=$siguiente->id_hc_barthel;
						$sigla='BT';
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
						
						$seguir="SELECT COUNT(*) hc_barthel_cod FROM hc_barthel WHERE barthel_doc='".$datos['barthel_doc']."'";
						$seguir=$this->db->query($seguir);
						$seguir=$seguir->row();
						$seguir=$seguir->hc_barthel_cod;
						if($seguir==0)
						{
							$suma2=1;
						}
						else
						{
							$suma2=$seguir+1;
						}
						$campos= array(
							'id_hc_barthel'=>$codigo,
							'hc_barthel_cod'=>$suma2,
							'barthel_doc'=>$datos['barthel_doc'],
							'barthel_comer'=>$datos['barthel_comer'],
							'barthel_banarse'=>$datos['barthel_banarse'],
							'barthel_vestirse'=>$datos['barthel_vestirse'],
							'barthel_arreglarse'=>$datos['barthel_arreglarse'],
							'barthel_deposicion'=>$datos['barthel_deposicion'],
							'barthel_miccion'=>$datos['barthel_miccion'],
							'barthel_retrete'=>$datos['barthel_retrete'],
							'barthel_traslado'=>$datos['barthel_traslado'],
							'barthel_deambulacion'=>$datos['barthel_deambulacion'],
							'barthel_escaleras'=>$datos['barthel_escaleras'],
							'barthel_total'=>$datos['barthel_total'],
							'barthel_nivel'=>$datos['barthel_nivel'],
							'barthel_f_reg'=>$datos['barthel_f_reg'],
							'barthel_h_reg'=>$datos['barthel_h_reg'],
							'barthel_h_inicio'=>$datos['barthel_h_inicio'],
							'barthel_created_user'=>$datos['barthel_created_user'],
							'barthel_update_user'=>$datos['barthel_update_user']
							);

						$rs=$this->db->insert('hc_barthel',$campos);

						return '<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
							   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
							   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							   			<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<h5 class="text-center">Barthel Registrado</h5>
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
				    	//echo "no"; // esperar los 6 meses
				    }
				}
				else
				{
					return 0; //escala hecha
					// termina las otras escalas
				}
			}
			else
			{
				// return 2;
				//puede hacerla
				$siguiente="SELECT MAX(id_hc_barthel) id_hc_barthel FROM hc_barthel";
				$siguiente=$this->db->query($siguiente);
				$siguiente=$siguiente->row();
				$siguiente=$siguiente->id_hc_barthel;
				$sigla='BT';
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
				
				$seguir="SELECT COUNT(*) hc_barthel_cod FROM hc_barthel WHERE barthel_doc='".$datos['barthel_doc']."'";
				$seguir=$this->db->query($seguir);
				$seguir=$seguir->row();
				$seguir=$seguir->hc_barthel_cod;
				if($seguir==0)
				{
					$suma2=1;
				}
				else
				{
					$suma2=$seguir+1;
				}
				$campos= array(
					'id_hc_barthel'=>$codigo,
					'hc_barthel_cod'=>$suma2,
					'barthel_doc'=>$datos['barthel_doc'],
					'barthel_comer'=>$datos['barthel_comer'],
					'barthel_banarse'=>$datos['barthel_banarse'],
					'barthel_vestirse'=>$datos['barthel_vestirse'],
					'barthel_arreglarse'=>$datos['barthel_arreglarse'],
					'barthel_deposicion'=>$datos['barthel_deposicion'],
					'barthel_miccion'=>$datos['barthel_miccion'],
					'barthel_retrete'=>$datos['barthel_retrete'],
					'barthel_traslado'=>$datos['barthel_traslado'],
					'barthel_deambulacion'=>$datos['barthel_deambulacion'],
					'barthel_escaleras'=>$datos['barthel_escaleras'],
					'barthel_total'=>$datos['barthel_total'],
					'barthel_nivel'=>$datos['barthel_nivel'],
					'barthel_f_reg'=>$datos['barthel_f_reg'],
					'barthel_h_reg'=>$datos['barthel_h_reg'],
					'barthel_h_inicio'=>$datos['barthel_h_inicio'],
					'barthel_created_user'=>$datos['barthel_created_user'],
					'barthel_update_user'=>$datos['barthel_update_user']
					);

				$rs=$this->db->insert('hc_barthel',$campos);

				return '<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
					   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
					   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					   			<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<h5 class="text-center">Barthel Registrado</h5>
						</div>
					 	<div class="modal-footer">
					       	<button type="button" class="btn btn-secondary" data-dismiss="modal" >CERRAR</button>
					   	</div>
					</div>
				</div>';
			}
			//SELECT pad_f_reg FROM `hc_pad` WHERE pad_documento=7676555 and hc_pad_cod="1"
			
			/*if($resultado->num_rows()==1)
			{
				$resultado=$resultado->row();
				$result=$resultado->barthel_doc;
			}
			else
			{
				$result="";
			}*/
		}
		function actualizar_historiabarthel($datos){
			$id=$datos['barthel_doc'];
			
			$campos= array(
				'barthel_comer'=>$datos['barthel_comer'],
				'barthel_banarse'=>$datos['barthel_banarse'],
				'barthel_vestirse'=>$datos['barthel_vestirse'],
				'barthel_arreglarse'=>$datos['barthel_arreglarse'],
				'barthel_deposicion'=>$datos['barthel_deposicion'],
				'barthel_miccion'=>$datos['barthel_miccion'],
				'barthel_retrete'=>$datos['barthel_retrete'],
				'barthel_traslado'=>$datos['barthel_traslado'],
				'barthel_deambulacion'=>$datos['barthel_deambulacion'],
				'barthel_escaleras'=>$datos['barthel_escaleras'],
				'barthel_total'=>$datos['barthel_total'],
				'barthel_nivel'=>$datos['barthel_nivel'],
				'barthel_f_reg'=>$datos['barthel_f_reg'],
				'barthel_h_reg'=>$datos['barthel_h_reg'],
				'barthel_created_user'=>$datos['barthel_created_user'],
				'barthel_update_user'=>$datos['barthel_update_user']
				);

			$this->db->where("barthel_doc",$id);
			$this->db->where("barthel_f_reg",$datos['barthel_f_reg']);
			$rs=$this->db->update('hc_barthel',$campos);

			return '<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
				   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
				   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				   			<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5 class="text-center">Barthel Actualizado</h5>
					</div>
				 	<div class="modal-footer">
				       	<button type="button" class="btn btn-secondary" data-dismiss="modal" >CERRAR</button>
				   	</div>
				</div>
			</div>';
		}
		function registrar_historiavarloracion($datos){
			$pvalidar="SELECT COUNT(*) hc_valoracion FROM hc_valoracion WHERE valoracion_doc='".$datos['valoracion_doc']."' ";
			$pvalidar=$this->db->query($pvalidar);
			$pvalidar=$pvalidar->row();
			$pvalidar=$pvalidar->hc_valoracion;
			if($pvalidar>0)
			{
				$existe="SELECT COUNT(hc_barthel.id_hc_barthel),hc_barthel.barthel_f_reg FROM hc_barthel INNER JOIN hc_norton ON hc_barthel.barthel_doc=hc_norton.norton_doc INNER JOIN hc_braden ON hc_barthel.barthel_doc=hc_braden.braden_doc INNER JOIN hc_valoracion ON hc_barthel.barthel_doc=hc_valoracion.valoracion_doc INNER JOIN paciente ON hc_barthel.barthel_doc=paciente.doc_paciente and paciente.doc_paciente='".$datos['valoracion_doc']."' ";
				$resultado=$this->db->query($existe);
				$resultado=$resultado->row();
				$result2 = $resultado->barthel_f_reg;
      			$miarray = get_object_vars($resultado);
      			foreach ($miarray as $valor) {
			        $result=$valor[0];
			    }
				if($result>0)
				{
					// return 0;
					$fecha = date_create($result2);
				    date_add($fecha, date_interval_create_from_date_string("6 months"));
				    $obfecha=date_format($fecha,"Y-m-d");
				    if($datos['valoracion_f_reg']==$obfecha)
				    {
				    	// echo "si";//siguiente escala
				    	$siguiente="SELECT MAX(id_hc_valoracion) id_hc_valoracion FROM hc_valoracion";
						$siguiente=$this->db->query($siguiente);
						$siguiente=$siguiente->row();
						$siguiente=$siguiente->id_hc_valoracion;
						$sigla='VAL';
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
						$seguir="SELECT COUNT(*) hc_valoracion_cod FROM hc_valoracion WHERE valoracion_doc='".$datos['valoracion_doc']."'";
						$seguir=$this->db->query($seguir);
						$seguir=$seguir->row();
						$seguir=$seguir->hc_valoracion_cod;
						if($seguir==0)
						{
							$suma2=1;
						}
						else
						{
							$suma2=$seguir+1;
						}
						
						$campos= array(
							'id_hc_valoracion'=>$codigo,
							'hc_valoracion_cod'=>$suma2,
							'valoracion_doc'=>$datos['valoracion_doc'],
							'valoracion_diagnosticos'=>$datos['valoracion_diagnosticos'],
							'valoracion_ocular'=>$datos['valoracion_ocular'],
							'valoracion_verbal'=>$datos['valoracion_verbal'],
							'valoracion_motora'=>$datos['valoracion_motora'],
							'valoracion_avm_total'=>$datos['valoracion_avm_total'],
							'valoracion_tipo_condicion'=>$datos['valoracion_tipo_condicion'],
							'valoracion_otro_condicion'=>$datos['valoracion_otro_condicion'],
							'valoracion_test_numero'=>$datos['valoracion_test_numero'],
							'valoracion_test_control_1'=>$datos['valoracion_test_control_1'],
							'valoracion_test_respuesta_1'=>$datos['valoracion_test_respuesta_1'],
							'valoracion_test_resultado_1'=>$datos['valoracion_test_resultado_1'],
							'valoracion_test_control_2'=>$datos['valoracion_test_control_2'],
							'valoracion_test_respuesta_2'=>$datos['valoracion_test_respuesta_2'],
							'valoracion_test_resultado_2'=>$datos['valoracion_test_resultado_2'],
							'valoracion_test_control_3'=>$datos['valoracion_test_control_3'],
							'valoracion_test_respuesta_3'=>$datos['valoracion_test_respuesta_3'],
							'valoracion_test_resultado_3'=>$datos['valoracion_test_resultado_3'],
							'valoracion_test_control_4'=>$datos['valoracion_test_control_4'],
							'valoracion_test_respuesta_4'=>$datos['valoracion_test_respuesta_4'],
							'valoracion_test_resultado_4'=>$datos['valoracion_test_resultado_4'],
							'valoracion_test_control_5'=>$datos['valoracion_test_control_5'],
							'valoracion_test_respuesta_5'=>$datos['valoracion_test_respuesta_5'],
							'valoracion_test_resultado_5'=>$datos['valoracion_test_resultado_5'],
							'valoracion_test_control_6'=>$datos['valoracion_test_control_6'],
							'valoracion_test_respuesta_6'=>$datos['valoracion_test_respuesta_6'],
							'valoracion_test_resultado_6'=>$datos['valoracion_test_resultado_6'],
							'valoracion_test_control_7'=>$datos['valoracion_test_control_7'],
							'valoracion_test_respuesta_7'=>$datos['valoracion_test_respuesta_7'],
							'valoracion_test_resultado_7'=>$datos['valoracion_test_resultado_7'],
							'valoracion_test_control_8'=>$datos['valoracion_test_control_8'],
							'valoracion_test_respuesta_8'=>$datos['valoracion_test_respuesta_8'],
							'valoracion_test_resultado_8'=>$datos['valoracion_test_resultado_8'],
							'valoracion_test_control_9'=>$datos['valoracion_test_control_9'],
							'valoracion_test_respuesta_9'=>$datos['valoracion_test_respuesta_9'],
							'valoracion_test_resultado_9'=>$datos['valoracion_test_resultado_9'],
							'valoracion_test_control_10'=>$datos['valoracion_test_control_10'],
							'valoracion_test_respuesta_10'=>$datos['valoracion_test_respuesta_10'],
							'valoracion_test_resultado_10'=>$datos['valoracion_test_resultado_10'],
							'valoracion_test_total'=>$datos['valoracion_test_total'],
							'valoracion_test_riesgo'=>$datos['valoracion_test_riesgo'],
							'valoracion_test_pregunta_general'=>$datos['valoracion_test_pregunta_general'],
							'valoracion_f_reg'=>$datos['valoracion_f_reg'],
							'valoracion_h_reg'=>$datos['valoracion_h_reg'],
							'valoracion_h_inicio'=>$datos['valoracion_h_inicio'],
							'valoracion_created_user'=>$datos['valoracion_created_user'],
							'valoracion_update_user'=>$datos['valoracion_update_user']
							);

						$rs=$this->db->insert('hc_valoracion',$campos);

						return '<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
							   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
							   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							   			<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<h5 class="text-center">Valoracion Registrada</h5>
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
				    	//echo "no"; // esperar los 6 meses
				    }
				}
				else
				{
					return 0;
				}
			}
			else
			{
				// return 2;
				$siguiente="SELECT MAX(id_hc_valoracion) id_hc_valoracion FROM hc_valoracion";
				$siguiente=$this->db->query($siguiente);
				$siguiente=$siguiente->row();
				$siguiente=$siguiente->id_hc_valoracion;
				$sigla='VAL';
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
				$seguir="SELECT COUNT(*) hc_valoracion_cod FROM hc_valoracion WHERE valoracion_doc='".$datos['valoracion_doc']."'";
				$seguir=$this->db->query($seguir);
				$seguir=$seguir->row();
				$seguir=$seguir->hc_valoracion_cod;
				if($seguir==0)
				{
					$suma2=1;
				}
				else
				{
					$suma2=$seguir+1;
				}
				
				$campos= array(
					'id_hc_valoracion'=>$codigo,
					'hc_valoracion_cod'=>$suma2,
					'valoracion_doc'=>$datos['valoracion_doc'],
					'valoracion_diagnosticos'=>$datos['valoracion_diagnosticos'],
					'valoracion_ocular'=>$datos['valoracion_ocular'],
					'valoracion_verbal'=>$datos['valoracion_verbal'],
					'valoracion_motora'=>$datos['valoracion_motora'],
					'valoracion_avm_total'=>$datos['valoracion_avm_total'],
					'valoracion_tipo_condicion'=>$datos['valoracion_tipo_condicion'],
					'valoracion_otro_condicion'=>$datos['valoracion_otro_condicion'],
					'valoracion_test_numero'=>$datos['valoracion_test_numero'],
					'valoracion_test_control_1'=>$datos['valoracion_test_control_1'],
					'valoracion_test_respuesta_1'=>$datos['valoracion_test_respuesta_1'],
					'valoracion_test_resultado_1'=>$datos['valoracion_test_resultado_1'],
					'valoracion_test_control_2'=>$datos['valoracion_test_control_2'],
					'valoracion_test_respuesta_2'=>$datos['valoracion_test_respuesta_2'],
					'valoracion_test_resultado_2'=>$datos['valoracion_test_resultado_2'],
					'valoracion_test_control_3'=>$datos['valoracion_test_control_3'],
					'valoracion_test_respuesta_3'=>$datos['valoracion_test_respuesta_3'],
					'valoracion_test_resultado_3'=>$datos['valoracion_test_resultado_3'],
					'valoracion_test_control_4'=>$datos['valoracion_test_control_4'],
					'valoracion_test_respuesta_4'=>$datos['valoracion_test_respuesta_4'],
					'valoracion_test_resultado_4'=>$datos['valoracion_test_resultado_4'],
					'valoracion_test_control_5'=>$datos['valoracion_test_control_5'],
					'valoracion_test_respuesta_5'=>$datos['valoracion_test_respuesta_5'],
					'valoracion_test_resultado_5'=>$datos['valoracion_test_resultado_5'],
					'valoracion_test_control_6'=>$datos['valoracion_test_control_6'],
					'valoracion_test_respuesta_6'=>$datos['valoracion_test_respuesta_6'],
					'valoracion_test_resultado_6'=>$datos['valoracion_test_resultado_6'],
					'valoracion_test_control_7'=>$datos['valoracion_test_control_7'],
					'valoracion_test_respuesta_7'=>$datos['valoracion_test_respuesta_7'],
					'valoracion_test_resultado_7'=>$datos['valoracion_test_resultado_7'],
					'valoracion_test_control_8'=>$datos['valoracion_test_control_8'],
					'valoracion_test_respuesta_8'=>$datos['valoracion_test_respuesta_8'],
					'valoracion_test_resultado_8'=>$datos['valoracion_test_resultado_8'],
					'valoracion_test_control_9'=>$datos['valoracion_test_control_9'],
					'valoracion_test_respuesta_9'=>$datos['valoracion_test_respuesta_9'],
					'valoracion_test_resultado_9'=>$datos['valoracion_test_resultado_9'],
					'valoracion_test_control_10'=>$datos['valoracion_test_control_10'],
					'valoracion_test_respuesta_10'=>$datos['valoracion_test_respuesta_10'],
					'valoracion_test_resultado_10'=>$datos['valoracion_test_resultado_10'],
					'valoracion_test_total'=>$datos['valoracion_test_total'],
					'valoracion_test_riesgo'=>$datos['valoracion_test_riesgo'],
					'valoracion_test_pregunta_general'=>$datos['valoracion_test_pregunta_general'],
					'valoracion_f_reg'=>$datos['valoracion_f_reg'],
					'valoracion_h_reg'=>$datos['valoracion_h_reg'],
					'valoracion_h_inicio'=>$datos['valoracion_h_inicio'],
					'valoracion_created_user'=>$datos['valoracion_created_user'],
					'valoracion_update_user'=>$datos['valoracion_update_user']
					);

				$rs=$this->db->insert('hc_valoracion',$campos);

				return '<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
					   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
					   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					   			<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<h5 class="text-center">Valoracion Registrada</h5>
						</div>
					 	<div class="modal-footer">
					       	<button type="button" class="btn btn-secondary" data-dismiss="modal" >CERRAR</button>
					   	</div>
					</div>
				</div>';
			}
		}
		function actualizar_historiavarloracion($datos){
			$id=$datos['valoracion_doc'];
			$campos= array(
				'valoracion_diagnosticos'=>$datos['valoracion_diagnosticos'],
				'valoracion_ocular'=>$datos['valoracion_ocular'],
				'valoracion_verbal'=>$datos['valoracion_verbal'],
				'valoracion_motora'=>$datos['valoracion_motora'],
				'valoracion_avm_total'=>$datos['valoracion_avm_total'],
				'valoracion_tipo_condicion'=>$datos['valoracion_tipo_condicion'],
				'valoracion_otro_condicion'=>$datos['valoracion_otro_condicion'],
				'valoracion_test_numero'=>$datos['valoracion_test_numero'],
				'valoracion_test_control_1'=>$datos['valoracion_test_control_1'],
				'valoracion_test_respuesta_1'=>$datos['valoracion_test_respuesta_1'],
				'valoracion_test_resultado_1'=>$datos['valoracion_test_resultado_1'],
				'valoracion_test_control_2'=>$datos['valoracion_test_control_2'],
				'valoracion_test_respuesta_2'=>$datos['valoracion_test_respuesta_2'],
				'valoracion_test_resultado_2'=>$datos['valoracion_test_resultado_2'],
				'valoracion_test_control_3'=>$datos['valoracion_test_control_3'],
				'valoracion_test_respuesta_3'=>$datos['valoracion_test_respuesta_3'],
				'valoracion_test_resultado_3'=>$datos['valoracion_test_resultado_3'],
				'valoracion_test_control_4'=>$datos['valoracion_test_control_4'],
				'valoracion_test_respuesta_4'=>$datos['valoracion_test_respuesta_4'],
				'valoracion_test_resultado_4'=>$datos['valoracion_test_resultado_4'],
				'valoracion_test_control_5'=>$datos['valoracion_test_control_5'],
				'valoracion_test_respuesta_5'=>$datos['valoracion_test_respuesta_5'],
				'valoracion_test_resultado_5'=>$datos['valoracion_test_resultado_5'],
				'valoracion_test_control_6'=>$datos['valoracion_test_control_6'],
				'valoracion_test_respuesta_6'=>$datos['valoracion_test_respuesta_6'],
				'valoracion_test_resultado_6'=>$datos['valoracion_test_resultado_6'],
				'valoracion_test_control_7'=>$datos['valoracion_test_control_7'],
				'valoracion_test_respuesta_7'=>$datos['valoracion_test_respuesta_7'],
				'valoracion_test_resultado_7'=>$datos['valoracion_test_resultado_7'],
				'valoracion_test_control_8'=>$datos['valoracion_test_control_8'],
				'valoracion_test_respuesta_8'=>$datos['valoracion_test_respuesta_8'],
				'valoracion_test_resultado_8'=>$datos['valoracion_test_resultado_8'],
				'valoracion_test_control_9'=>$datos['valoracion_test_control_9'],
				'valoracion_test_respuesta_9'=>$datos['valoracion_test_respuesta_9'],
				'valoracion_test_resultado_9'=>$datos['valoracion_test_resultado_9'],
				'valoracion_test_control_10'=>$datos['valoracion_test_control_10'],
				'valoracion_test_respuesta_10'=>$datos['valoracion_test_respuesta_10'],
				'valoracion_test_resultado_10'=>$datos['valoracion_test_resultado_10'],
				'valoracion_test_total'=>$datos['valoracion_test_total'],
				'valoracion_test_riesgo'=>$datos['valoracion_test_riesgo'],
				'valoracion_test_pregunta_general'=>$datos['valoracion_test_pregunta_general'],
				'valoracion_f_reg'=>$datos['valoracion_f_reg'],
				'valoracion_h_reg'=>$datos['valoracion_h_reg'],
				'valoracion_created_user'=>$datos['valoracion_created_user'],
				'valoracion_update_user'=>$datos['valoracion_update_user']
				);
			
			$this->db->where("valoracion_doc",$id);
			$this->db->where("valoracion_f_reg",$datos['valoracion_f_reg']);
			$rs=$this->db->update('hc_valoracion',$campos);

			return '<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
				   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
				   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				   			<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5 class="text-center">Valoracion Actualizada</h5>
					</div>
				 	<div class="modal-footer">
				       	<button type="button" class="btn btn-secondary" data-dismiss="modal" >CERRAR</button>
				   	</div>
				</div>
			</div>';
		}
		function registrar_historianorton($datos){
			$pvalidar="SELECT COUNT(*) hc_norton FROM hc_norton WHERE norton_doc='".$datos['norton_doc']."' ";
			$pvalidar=$this->db->query($pvalidar);
			$pvalidar=$pvalidar->row();
			$pvalidar=$pvalidar->hc_norton;
			if($pvalidar>0)
			{
				$existe="SELECT COUNT(hc_barthel.id_hc_barthel),hc_barthel.barthel_f_reg FROM hc_barthel INNER JOIN hc_norton ON hc_barthel.barthel_doc=hc_norton.norton_doc INNER JOIN hc_braden ON hc_barthel.barthel_doc=hc_braden.braden_doc INNER JOIN hc_valoracion ON hc_barthel.barthel_doc=hc_valoracion.valoracion_doc INNER JOIN paciente ON hc_barthel.barthel_doc=paciente.doc_paciente and paciente.doc_paciente='".$datos['norton_doc']."' ";
				$resultado=$this->db->query($existe);
				$resultado=$resultado->row();
				$result2 = $resultado->barthel_f_reg;
      			$miarray = get_object_vars($resultado);
      			foreach ($miarray as $valor) {
			        $result=$valor[0];
			    }
				if($result>0)
				{
					// return 0;
					$fecha = date_create($result2);
				    date_add($fecha, date_interval_create_from_date_string("6 months"));
				    $obfecha=date_format($fecha,"Y-m-d");
				    if($datos['norton_f_reg']==$obfecha)
				    {
				    	// echo "si";//siguiente escala
				    	$siguiente="SELECT MAX(id_hc_norton) id_hc_norton FROM hc_norton";
						$siguiente=$this->db->query($siguiente);
						$siguiente=$siguiente->row();
						$siguiente=$siguiente->id_hc_norton;
						$sigla='NT';
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
						$seguir="SELECT COUNT(*) hc_norton_cod FROM hc_norton WHERE norton_doc='".$datos['norton_doc']."'";
						$seguir=$this->db->query($seguir);
						$seguir=$seguir->row();
						$seguir=$seguir->hc_norton_cod;
						if($seguir==0)
						{
							$suma2=1;
						}
						else
						{
							$suma2=$seguir+1;
						}
						$campos= array(
							'id_hc_norton'=>$codigo,
							'hc_norton_cod'=>$suma2,
							'norton_doc'=>$datos['norton_doc'],
							'norton_diagnosticos'=>$datos['norton_diagnosticos'],
							'norton_estado_fisico'=>$datos['norton_estado_fisico'],
							'norton_estado_mental'=>$datos['norton_estado_mental'],
							'norton_actividad'=>$datos['norton_actividad'],
							'norton_movilidad'=>$datos['norton_movilidad'],
							'norton_incontinencia'=>$datos['norton_incontinencia'],
							'norton_total'=>$datos['norton_total'],
							'norton_nivel'=>$datos['norton_nivel'],
							'norton_f_reg'=>$datos['norton_f_reg'],
							'norton_h_reg'=>$datos['norton_h_reg'],
							'norton_h_inicio'=>$datos['norton_h_inicio'],
							'norton_created_user'=>$datos['norton_created_user'],
							'norton_update_user'=>$datos['norton_update_user']
							);

						$rs=$this->db->insert('hc_norton',$campos);

						return '<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
							   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
							   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							   			<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<h5 class="text-center">Norton Registrado</h5>
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
				    	//echo "no"; // esperar los 6 meses
				    }
				}
				else
				{
					return 0;
				}
			}
			else
			{
				// return 2;
				$siguiente="SELECT MAX(id_hc_norton) id_hc_norton FROM hc_norton";
				$siguiente=$this->db->query($siguiente);
				$siguiente=$siguiente->row();
				$siguiente=$siguiente->id_hc_norton;
				$sigla='NT';
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
				$seguir="SELECT COUNT(*) hc_norton_cod FROM hc_norton WHERE norton_doc='".$datos['norton_doc']."'";
				$seguir=$this->db->query($seguir);
				$seguir=$seguir->row();
				$seguir=$seguir->hc_norton_cod;
				if($seguir==0)
				{
					$suma2=1;
				}
				else
				{
					$suma2=$seguir+1;
				}
				$campos= array(
					'id_hc_norton'=>$codigo,
					'hc_norton_cod'=>$suma2,
					'norton_doc'=>$datos['norton_doc'],
					'norton_diagnosticos'=>$datos['norton_diagnosticos'],
					'norton_estado_fisico'=>$datos['norton_estado_fisico'],
					'norton_estado_mental'=>$datos['norton_estado_mental'],
					'norton_actividad'=>$datos['norton_actividad'],
					'norton_movilidad'=>$datos['norton_movilidad'],
					'norton_incontinencia'=>$datos['norton_incontinencia'],
					'norton_total'=>$datos['norton_total'],
					'norton_nivel'=>$datos['norton_nivel'],
					'norton_f_reg'=>$datos['norton_f_reg'],
					'norton_h_reg'=>$datos['norton_h_reg'],
					'norton_h_inicio'=>$datos['norton_h_inicio'],
					'norton_created_user'=>$datos['norton_created_user'],
					'norton_update_user'=>$datos['norton_update_user']
					);

				$rs=$this->db->insert('hc_norton',$campos);

				return '<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
					   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
					   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					   			<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<h5 class="text-center">Norton Registrado</h5>
						</div>
					 	<div class="modal-footer">
					       	<button type="button" class="btn btn-secondary" data-dismiss="modal" >CERRAR</button>
					   	</div>
					</div>
				</div>';
			}
		}
		function actualizar_historianorton($datos){
			$id=$datos['norton_doc'];
			
			$campos= array(
				'norton_diagnosticos'=>$datos['norton_diagnosticos'],
				'norton_estado_fisico'=>$datos['norton_estado_fisico'],
				'norton_estado_mental'=>$datos['norton_estado_mental'],
				'norton_actividad'=>$datos['norton_actividad'],
				'norton_movilidad'=>$datos['norton_movilidad'],
				'norton_incontinencia'=>$datos['norton_incontinencia'],
				'norton_total'=>$datos['norton_total'],
				'norton_nivel'=>$datos['norton_nivel'],
				'norton_f_reg'=>$datos['norton_f_reg'],
				'norton_h_reg'=>$datos['norton_h_reg']
				// 'norton_created_user'=>$datos['norton_created_user'],
				// 'norton_update_user'=>$datos['norton_update_user']
				);

			$this->db->where("norton_doc",$id);
			$this->db->where("norton_f_reg",$datos['norton_f_reg']);
			$rs=$this->db->update('hc_norton',$campos);

			return '<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
				   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
				   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				   			<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5 class="text-center">Norton Actualizado</h5>
					</div>
				 	<div class="modal-footer">
				       	<button type="button" class="btn btn-secondary" data-dismiss="modal" >CERRAR</button>
				   	</div>
				</div>
			</div>';
		}
		function registrar_historiabraden($datos){
			$pvalidar="SELECT COUNT(*) hc_braden FROM hc_braden WHERE braden_doc='".$datos['braden_doc']."'  ";
			$pvalidar=$this->db->query($pvalidar);
			$pvalidar=$pvalidar->row();
			$pvalidar=$pvalidar->hc_braden;
			if($pvalidar>0)
			{
				$existe="SELECT COUNT(hc_barthel.id_hc_barthel),hc_barthel.barthel_f_reg FROM hc_barthel INNER JOIN hc_norton ON hc_barthel.barthel_doc=hc_norton.norton_doc INNER JOIN hc_braden ON hc_barthel.barthel_doc=hc_braden.braden_doc INNER JOIN hc_valoracion ON hc_barthel.barthel_doc=hc_valoracion.valoracion_doc INNER JOIN paciente ON hc_barthel.barthel_doc=paciente.doc_paciente and paciente.doc_paciente='".$datos['braden_doc']."' ";
				$resultado=$this->db->query($existe);
				$resultado=$resultado->row();
				$result2 = $resultado->barthel_f_reg;
      			$miarray = get_object_vars($resultado);
      			foreach ($miarray as $valor) {
			        $result=$valor[0];
			    }
				if($result>0)
				{
					// return 0;
					$fecha = date_create($result2);
				    date_add($fecha, date_interval_create_from_date_string("6 months"));
				    $obfecha=date_format($fecha,"Y-m-d");
				    if($datos['braden_f_reg']==$obfecha)
				    {
				    	// echo "si";//siguiente escala
				    	$siguiente="SELECT MAX(id_hc_braden) id_hc_braden FROM hc_braden";
						$siguiente=$this->db->query($siguiente);
						$siguiente=$siguiente->row();
						$siguiente=$siguiente->id_hc_braden;
						$sigla='BR';
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
						$seguir="SELECT COUNT(*) hc_braden_cod FROM hc_braden WHERE braden_doc='".$datos['braden_doc']."'";
						$seguir=$this->db->query($seguir);
						$seguir=$seguir->row();
						$seguir=$seguir->hc_braden_cod;
						if($seguir==0)
						{
							$suma2=1;
						}
						else
						{
							$suma2=$seguir+1;
						}
						$campos= array(
							'id_hc_braden'=>$codigo,
							'hc_braden_cod'=>$suma2,
							'braden_doc'=>$datos['braden_doc'],
							'braden_movilidad'=>$datos['braden_movilidad'],
							'braden_actividad'=>$datos['braden_actividad'],
							'braden_persecion_sensorial'=>$datos['braden_persecion_sensorial'],
							'braden_humedad'=>$datos['braden_humedad'],
							'braden_nutricion'=>$datos['braden_nutricion'],
							'braden_fricion'=>$datos['braden_fricion'],
							'braden_total_obtenido'=>$datos['braden_total_obtenido'],
							'braden_nivel_riesgo'=>$datos['braden_nivel_riesgo'],
							'braden_f_reg'=>$datos['braden_f_reg'],
							'braden_h_reg'=>$datos['braden_h_reg'],
							'braden_h_inicio'=>$datos['braden_h_inicio'],
							'braden_created_user'=>$datos['braden_created_user'],
							'braden_update_user'=>$datos['braden_update_user']
							);

						$rs=$this->db->insert('hc_braden',$campos);

						return '<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
							   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
							   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							   			<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<h5 class="text-center">Braden Registrado</h5>
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
				    	//echo "no"; // esperar los 6 meses
				    }
				}
				else
				{
					
				}
			}
			else
			{
				// return 2;
				$siguiente="SELECT MAX(id_hc_braden) id_hc_braden FROM hc_braden";
				$siguiente=$this->db->query($siguiente);
				$siguiente=$siguiente->row();
				$siguiente=$siguiente->id_hc_braden;
				$sigla='BR';
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
				$seguir="SELECT COUNT(*) hc_braden_cod FROM hc_braden WHERE braden_doc='".$datos['braden_doc']."'";
				$seguir=$this->db->query($seguir);
				$seguir=$seguir->row();
				$seguir=$seguir->hc_braden_cod;
				if($seguir==0)
				{
					$suma2=1;
				}
				else
				{
					$suma2=$seguir+1;
				}
				$campos= array(
					'id_hc_braden'=>$codigo,
					'hc_braden_cod'=>$suma2,
					'braden_doc'=>$datos['braden_doc'],
					'braden_movilidad'=>$datos['braden_movilidad'],
					'braden_actividad'=>$datos['braden_actividad'],
					'braden_persecion_sensorial'=>$datos['braden_persecion_sensorial'],
					'braden_humedad'=>$datos['braden_humedad'],
					'braden_nutricion'=>$datos['braden_nutricion'],
					'braden_fricion'=>$datos['braden_fricion'],
					'braden_total_obtenido'=>$datos['braden_total_obtenido'],
					'braden_nivel_riesgo'=>$datos['braden_nivel_riesgo'],
					'braden_f_reg'=>$datos['braden_f_reg'],
					'braden_h_reg'=>$datos['braden_h_reg'],
					'braden_h_inicio'=>$datos['braden_h_inicio'],
					'braden_created_user'=>$datos['braden_created_user'],
					'braden_update_user'=>$datos['braden_update_user']
					);

				$rs=$this->db->insert('hc_braden',$campos);

				return '<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
					   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
					   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					   			<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<h5 class="text-center">Braden Registrado</h5>
						</div>
					 	<div class="modal-footer">
					       	<button type="button" class="btn btn-secondary" data-dismiss="modal" >CERRAR</button>
					   	</div>
					</div>
				</div>';
			}
		}
		function actualizar_historiabraden($datos){
			$id=$datos['braden_doc'];
			
			$campos= array(
				'braden_movilidad'=>$datos['braden_movilidad'],
				'braden_actividad'=>$datos['braden_actividad'],
				'braden_persecion_sensorial'=>$datos['braden_persecion_sensorial'],
				'braden_humedad'=>$datos['braden_humedad'],
				'braden_nutricion'=>$datos['braden_nutricion'],
				'braden_fricion'=>$datos['braden_fricion'],
				'braden_total_obtenido'=>$datos['braden_total_obtenido'],
				'braden_nivel_riesgo'=>$datos['braden_nivel_riesgo'],
				'braden_f_reg'=>$datos['braden_f_reg'],
				'braden_h_reg'=>$datos['braden_h_reg'],
				'braden_created_user'=>$datos['braden_created_user'],
				'braden_update_user'=>$datos['braden_update_user']
				);

			$this->db->where("braden_doc",$id);
			$this->db->where("braden_f_reg",$datos['braden_f_reg']);
			$rs=$this->db->update('hc_braden',$campos);

			return '<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
				   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
				   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				   			<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5 class="text-center">Braden Actualizado</h5>
					</div>
				 	<div class="modal-footer">
				       	<button type="button" class="btn btn-secondary" data-dismiss="modal" >CERRAR</button>
				   	</div>
				</div>
			</div>';
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
		function consultar_historia_concentimiento($id){
			$this->db->where("concentimiento_doc",$id);
			$consulta=$this->db->get("hc_concentimiento");
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
		function consultar_diagnostico_nombres($busqueda){
			if($busqueda)
			{
				$consulta="SELECT * FROM cie WHERE descripcion_cie LIKE '%".$busqueda."%' or codigo_cie LIKE '%".$busqueda."%' LIMIT 0,15";
			}
			else
			{
				$consulta="SELECT * FROM cie LIMIT 0,3 ";
			}
			// $this->db->like("descripcion_cie",$busqueda);
			$consulta=$this->db->query($consulta);
			return $consulta->result();
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
		function consultar_diagnostico_individual($busqueda){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");
			$this->db->select("pad_diagnosticos");
			$this->db->where("pad_documento",$busqueda);
			$this->db->where("pad_f_reg",$getfecha);
			$consulta=$this->db->get("hc_pad");
			return $consulta->result();
			// return $busqueda;
		}
		function consultar_hc_nombres($busqueda){
			$this->db->like("documento",$busqueda);
			$consulta=$this->db->get("hc");
			return $consulta->result();
			// return $busqueda;
		}
		function consultar_hc_todas(){
			$consulta=$this->db->get("hc");
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
	}
?>