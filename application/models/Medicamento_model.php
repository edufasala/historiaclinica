<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Medicamento_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function registrar_m($datos){
			// $this->input->post('');
			$siguiente="SELECT MAX(codigo) codigo FROM medicamentos";
			$siguiente=$this->db->query($siguiente);
			$siguiente=$siguiente->row();
			$siguiente=$siguiente->codigo;
			$sigla='MED-';
			$numero=explode($sigla, $siguiente);
			$siguiente=$numero[1];
			$suma=$numero[1]+1;

			if($suma<9)
			{
				$codigo=$sigla.$suma;
			}
			else if($suma>9 && $suma<99)
			{
				$codigo=$sigla.$suma;
			}
			else if($suma>99 && $suma<999)
			{
				$codigo=$sigla.$suma;
			}
			else if($suma>999 && $suma<9999)
			{
				$codigo=$sigla.$suma;
			}
			else if($suma>9999)
			{
				$codigo=$sigla."A".$suma;
			}
			$campos= array('codigo'=>$codigo,
				'nombre'=>$datos['nombre'],
				'precio_compra'=>$datos['precio_compra'],
				'precio_venta'=>$datos['precio_venta'],
				'lote'=>$datos['lote'],
				'registro_sanitario'=>$datos['registro_sanitario'],
				'presentacion' => $datos['presentacion'], 
				'laboratorio'=>$datos['laboratorio'],
				'vencimiento'=>$datos['vencimiento'],
				'minimo'=>$datos['minimo'],
				'stock'=>$datos['stock'],
				'created_user'=>$datos['created_user'],
				'updated_user'=>$datos['updated_user']
				);
			
			$rs=$this->db->insert('medicamentos',$campos);

			return $rs;
		}
		function consultar_medicamento_todos(){
			$consulta=$this->db->get("medicamento");
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
		function actualizar_m($datos){
			$aux=$datos['codigo'];
			$campos= array('nombre' => $datos['nombre'],
				'precio_compra' => $datos['precio_compra'],
				'precio_venta' => $datos['precio_venta'],
				'lote'=>$datos['lote'],
				'registro_sanitario'=>$datos['registro_sanitario'],
				'presentacion' => $datos['presentacion'], 
				'laboratorio'=>$datos['laboratorio'],
				'vencimiento' => $datos['vencimiento']);
		
			$this->db->where('codigo',$aux);
			// $this->db->insert('registro_empleado',$campos);
			$query=$this->db->update('medicamentos',$campos);
			// echo $query.$aux;
			return $query;
		}
		function eliminar_m($id){
			// $this->db->where('id_agenda',$id);
			// $this->db->delete('agenda');
			$this->db->delete('medicamento',array('id_medicamento'=>$id));

			// return $ejecute;
			/*otro forma
			$query="DELETE FROM galeria WHERE id_galeria=$id";
			$this->db->query($query);*/
		}
		function consultar_separados_md($start,$length,$seach,$direccion,$cual){
			$columna="";
			if($cual==0)
			{
				$columna="nombre";
			}
			else if($cual==1)
			{
				$columna="lote";
			}
			else if($cual==2)
			{
				$columna="precio_compra";
			}
			else if($cual==3)
			{
				$columna="precio_venta";
			}
			else if($cual==4)
			{
				$columna="presentacion";
			}
			else if($cual==5)
			{
				$columna="vencimiento";
			}
			else if($cual==6)
			{
				$columna="nombre";
			}
			
			$busqueda="";
			if($seach)
			{
				$busqueda=" WHERE nombre LIKE '%".$seach."%' or lote LIKE '%".$seach."%' ";
			}
			$consulta="SELECT * FROM medicamentos ".$busqueda." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			$r=$this->db->query($consulta);
			// return $r;

			$total="SELECT COUNT(*) codigo FROM medicamentos".$busqueda;
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->codigo;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );
			return $resultado;
			
		}
		function consultar_medicamento_nombres($busqueda){
			$this->db->like("nombre",$busqueda);
			$consulta=$this->db->get("medicamento");
			return $consulta->result();
		}
	}
?>