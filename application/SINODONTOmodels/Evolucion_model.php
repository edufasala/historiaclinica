<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Evolucion_model extends CI_Model
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
				$consulta="SELECT hc_pad.pad_documento,hc_pad.pad_diagnosticos,paciente.tipo_doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente,hc_concentimiento.id_hc_concentimiento,hc_barthel.id_hc_barthel,hc_valoracion.id_hc_valoracion,hc_norton.id_hc_norton,hc_braden.id_hc_braden FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente INNER JOIN hc_concentimiento ON hc_concentimiento.concentimiento_doc=paciente.doc_paciente INNER JOIN hc_barthel ON hc_barthel.barthel_doc=paciente.doc_paciente INNER JOIN hc_valoracion ON hc_valoracion.valoracion_doc=paciente.doc_paciente INNER JOIN hc_norton ON hc_norton.norton_doc=paciente.doc_paciente INNER JOIN hc_braden ON hc_braden.braden_doc=paciente.doc_paciente WHERE doc_paciente LIKE '%".$busqueda."%' or pnombre_paciente LIKE '%".$busqueda."%' or snombre_paciente LIKE '%".$busqueda."%' or papellido_paciente LIKE '%".$busqueda."%' or sapellido_paciente LIKE '%".$busqueda."%'";
			}
			else
			{
				$consulta="SELECT hc_pad.pad_documento,hc_pad.pad_diagnosticos,paciente.tipo_doc_paciente,paciente.pnombre_paciente,paciente.papellido_paciente,paciente.inclusion_pad_paciente,hc_concentimiento.id_hc_concentimiento,hc_barthel.id_hc_barthel,hc_valoracion.id_hc_valoracion,hc_norton.id_hc_norton,hc_braden.id_hc_braden FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente INNER JOIN hc_concentimiento ON hc_concentimiento.concentimiento_doc=paciente.doc_paciente INNER JOIN hc_barthel ON hc_barthel.barthel_doc=paciente.doc_paciente INNER JOIN hc_valoracion ON hc_valoracion.valoracion_doc=paciente.doc_paciente INNER JOIN hc_norton ON hc_norton.norton_doc=paciente.doc_paciente INNER JOIN hc_braden ON hc_braden.braden_doc=paciente.doc_paciente WHERE id_paciente!='PC0000' ";
				// SELECT hc_pad.pad_documento,paciente.pnombre_paciente,paciente.papellido_paciente,hc_concentimiento.id_hc_concentimiento,hc_barthel.id_hc_barthel,hc_valoracion.id_hc_valoracion,hc_norton.id_hc_norton,hc_braden.id_hc_braden FROM hc_pad INNER JOIN paciente ON hc_pad.pad_documento=paciente.doc_paciente INNER JOIN hc_concentimiento ON hc_concentimiento.concentimiento_doc=paciente.doc_paciente INNER JOIN hc_barthel ON hc_barthel.barthel_doc=paciente.doc_paciente INNER JOIN hc_valoracion ON hc_valoracion.valoracion_doc=paciente.doc_paciente INNER JOIN hc_norton ON hc_norton.norton_doc=paciente.doc_paciente INNER JOIN hc_braden ON hc_braden.braden_doc=paciente.doc_paciente
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

		// function buscar_paciente_nombres($busqueda){
		// 	// $this->db->like("tipo_doc",$tipo);
		// 	// $this->db->like("nombres_apellidos",$busqueda);
		// 	$this->db->select('h.*,p.*');
		//     $this->db->from('hc h');
		//     $this->db->join('paciente p','p.id_paciente=h.id_paciente');
		//     $this->db->where("id_hc!=",'HC0000');
		//     $this->db->where("p.tipo_doc",$tipo);
		// 	$this->db->like("p.nombres",$busqueda);
		// 	$consulta=$this->db->get();
		// 	// $search="miguel";
		// 	// $consulta="SELECT hc.nro_hc,paciente.* FROM hc INNER JOIN paciente ON hc.id_hc='HC0001' and paciente.nombres LIKE '%".$search."%' ";
		// 	// $rs=$this->db->query($consulta);
		// 	return $consulta->result();
		// }

		function registrar_evolucion($datos){
			$siguiente="SELECT MAX(id_ev) id_ev FROM ev";
			$siguiente=$this->db->query($siguiente);
			$siguiente=$siguiente->row();
			$siguiente=$siguiente->id_ev;
			$sigla='EV';
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
			$campos= array('id_ev'=>$codigo,
				'nro_hc'=>$datos['nro_hc'],
				'evolucion_doc'=>$datos['evolucion_doc'],
				'evolucion_motivo_consulta'=>$datos['evolucion_motivo_consulta'],
				'evolucion_enfermedad_actual'=>$datos['evolucion_enfermedad_actual'],
				'evolucion_a_personales'=>$datos['evolucion_a_personales'],
				'evolucion_a_familiares'=>$datos['evolucion_a_familiares'],
				'evolucion_revision_sistema'=>$datos['evolucion_revision_sistema'],
				'evolucion_tension_arterial'=>$datos['evolucion_tension_arterial'],
				'evolucion_fc'=>$datos['evolucion_fc'],
				'evolucion_fr'=>$datos['evolucion_fr'],
				'evolucion_satur'=>$datos['evolucion_satur'],
				'evolucion_temperatura'=>$datos['evolucion_temperatura'],
				'evolucion_glucom'=>$datos['evolucion_glucom'],
				'evolucion_descripcion_examen'=>$datos['evolucion_descripcion_examen'],
				'evolucion_diagnosticos'=>$datos['evolucion_diagnosticos'],
				'evolucion_otros_diagnosticos'=>$datos['evolucion_otros_diagnosticos'],
				'evolucion_analisis'=>$datos['evolucion_analisis'],
				'evolucion_plan'=>$datos['evolucion_plan'],
				'evolucion_pad'=>$datos['evolucion_pad'],
				'evolucion_farmacos'=>$datos['evolucion_farmacos'],
				'evolucion_mj_fisica'=>$datos['evolucion_mj_fisica'],
				'evolucion_mj_lenguaje'=>$datos['evolucion_mj_lenguaje'],
				'evolucion_mj_ocupacional'=>$datos['evolucion_mj_ocupacional'],
				'evolucion_mj_respiratoria'=>$datos['evolucion_mj_respiratoria'],
				'evolucion_mj_nutricion'=>$datos['evolucion_mj_nutricion'],
				'evolucion_mj_social'=>$datos['evolucion_mj_social'],
				'evolucion_mj_psicologia'=>$datos['evolucion_mj_psicologia'],
				'evolucion_mj_enfermeria'=>$datos['evolucion_mj_enfermeria'],
				'evolucion_paraclinicos'=>$datos['evolucion_paraclinicos'],
				'evolucion_valoraciones'=>$datos['evolucion_valoraciones'],
				'evolucion_insumos'=>$datos['evolucion_insumos'],
				'evolucion_recomendaciones'=>$datos['evolucion_recomendaciones'],
				'evolucion_f_reg'=>$datos['evolucion_f_reg'],
				'evolucion_h_reg'=>$datos['evolucion_h_reg'],
				'evolucion_h_inicio'=>$datos['evolucion_h_inicio'],
				'evolucion_created_user'=>$datos['evolucion_created_user'],
				'evolucion_update_user'=>$datos['evolucion_update_user']
				);
			
			$rs=$this->db->insert('ev',$campos);
			return '<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
					   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
					   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					   			<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<h5 class="text-center">Evolucion Medica Registrada</h5>
						</div>
					 	<div class="modal-footer">
					       	<button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="resetearNuevo2()" >CERRAR</button>
					   	</div>
					</div>
				</div>';
		}

		function consultar_todas(){
			$this->db->where("id_ev!=",'EV0000');
			$consulta=$this->db->get("ev");
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
		function consultar_ev_nombres($busqueda){
			$this->db->like("documento",$busqueda);
			$consulta=$this->db->get("ev");
			return $consulta->result();
			// return $busqueda;
		}
		function consultar_ev_todas(){
			$consulta=$this->db->get("ev");
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
				$consulta="SELECT * FROM medicamentos WHERE nombre LIKE '%".$busqueda."%' LIMIT 0,3";
			}
			else
			{
				$consulta="SELECT * FROM medicamentos LIMIT 0,3 ";
			}
			// $this->db->like("descripcion_cie",$busqueda);
			$consulta=$this->db->query($consulta);
			return $consulta->result();
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
		function consultar_evolucion($id){
			$this->db->where("id_ev",$id);
			$consulta=$this->db->get("ev");
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