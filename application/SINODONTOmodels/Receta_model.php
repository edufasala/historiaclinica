<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Receta_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function buscar_paciente_nombres($quien,$tipo,$busqueda){
			if($quien=="historia clinica")
			{
				// echo "hc";
				// $porelid="id_hc";
				// $porelid2="f_hc";
				
				$this->db->like("tipo_doc",$tipo);
				// $this->db->like("documento",$busqueda);
				$this->db->like("nombres_apellidos",$busqueda);
				$consulta=$this->db->get("hc");
				// return "hc";
				return $consulta->result();
			}
			else if($quien=="evolucion medica")
			{
				// echo "ev";
				// $porelid="id_ev";
				// $porelid2="f_ev";
			
				$this->db->like("tipo_doc",$tipo);
				// $this->db->like("documento",$busqueda);
				$this->db->like("nombres_apellidos",$busqueda);
				$consulta=$this->db->get("ev");
				// return "ev";
				return $consulta->result();
			}
			
			// return $consulta->result();
		}
		function registrar_receta($datos){
			$obtdoc=$datos['tipo_documento'];
			$obndoc=$datos['documento'];
			$obnyape=$datos['nombres_apellidos'];
			$getfecha=$datos['f_receta'];
			$gethora=$datos['h_receta'];
			$campos= array('codigo_rc'=>$datos['codigo_rc'],
				'tipo_receta'=>$datos['tipo_receta'],
				'tipo_documento'=>$datos['tipo_documento'],
				'documento'=>$datos['documento'],
				'nombres_apellidos' => $datos['nombres_apellidos'], 
				'edad'=>$datos['edad'],
				'talla'=>$datos['talla'],
				'peso'=>$datos['peso'],
				'cual_receta'=>$datos['cual_receta'],
				'receta'=>$datos['receta'],
				'lista_receta'=>$datos['lista_receta'],
				'f_receta'=>$datos['f_receta'],
				'h_receta'=>$datos['h_receta']);//siono
			
			$rs=$this->db->insert('recetario',$campos);
			return '<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
				   		<h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
				   		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				   			<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5 class="text-center">Formula Medica Registrada</h5>
					   	<span class="alert-success" role="alert">'.strtoupper($obtdoc).': '.$obndoc.' Paciente: '.strtoupper($obnyape).'</span>
					</div>
				 	<div class="modal-footer">
				   		<button type="button" class="btn btn-primary" onclick="resetearNuevo();">NUEVO REGISTRO</button>
				   		<button type="button" class="btn btn-danger" onclick="imprimirreceta(\''.$obndoc.'\',\''.$getfecha.'\',\''.$gethora.'\');">IMPRIMIR</button>
				       	<button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="resetearNuevo();">CERRAR</button>
				   	</div>
				</div>
			</div>';
		}
		function consultar_todas(){
			$consulta=$this->db->get("recetario");
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
		function consultar_rc_nombres($busqueda){
			$this->db->like("documento",$busqueda);
			$consulta=$this->db->get("recetario");
			return $consulta->result();
			// return $busqueda;
		}
		function consultar_rc_todas(){
			$consulta=$this->db->get("recetario");
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