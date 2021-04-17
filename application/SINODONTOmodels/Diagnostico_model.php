<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Diagnostico_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
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
		function consultar_separados($start,$length,$seach,$direccion,$cual){
			$columna="";
			if($cual==0)
			{
				$columna="codigo_cie";
			}
			else if($cual==1)
			{
				$columna="descripcion_cie";
			}
			else if($cual==2)
			{
				$columna="cod_desc_cie";
			}
			else if($cual==3)
			{
				$columna="codigo_cie";
			}
			
			$busqueda="";
			if($seach)
			{
				$busqueda=" WHERE codigo_cie LIKE '%".$seach."%' or descripcion_cie LIKE '%".$seach."%'";
			}
			$consulta="SELECT * FROM cie ".$busqueda." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			$r=$this->db->query($consulta);
			// return $r;

			$total="SELECT COUNT(*) codigo_cie FROM cie".$busqueda;
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->codigo_cie;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );
			return $resultado;
			
			// $this->db->where('id_galeria',$id);
			// $query=$this->db->get('galeria');
			// if($query->num_rows()>0) return $query;
			// else return false;
		}
		function registrar_diagnostico($datos){
			$aux=$this->session->userdata('s_id');
			$codigo=strtoupper($datos['codigo_cie']);
			// return $codigo.'::';
			$existe="SELECT codigo_cie FROM cie WHERE codigo_cie='".$codigo."' ";
			$resultado=$this->db->query($existe);
			if($resultado->num_rows()==1)
			{
				$resultado=$resultado->row();
				$result=$resultado->codigo_cie;
				//$u=$separar->id_usuario;
			}
			else
			{
				$result="";
				// return 0;
			}
			if($result==$codigo)
			{
				return 'codigo ya existe';
			}
			else if($result!=$codigo)
			{
				$campos= array(
					'codigo_cie'=>strtoupper($datos['codigo_cie']),
					'descripcion_cie'=>$datos['descripcion_cie'],
					'cod_desc_cie'=>$datos['cod_desc_cie'],
					'created_user'=>$aux,
					'update_user'=>$aux
					);

				$rs=$this->db->insert('cie',$campos);

				return $rs;
			}
		}
		function actualizar_diagnostico($datos){
			$aux=$datos['codigo_cie'];
			$campos= array('codigo_cie' => $datos['codigo_cie'],
				'descripcion_cie' => $datos['descripcion_cie'],
				'cod_desc_cie' => $datos['cod_desc_cie']
				);

		
			$this->db->where('codigo_cie',$aux);
			// $this->db->insert('registro_empleado',$campos);
			$query=$this->db->update('cie',$campos);
			// echo $query.$aux;
			return $query;
		}
	}
?>