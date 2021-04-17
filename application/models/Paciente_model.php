<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Paciente_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function registrar_paciente($datos){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");
			$doc=$datos['doc_paciente'];

			$existe="SELECT doc_paciente FROM paciente WHERE doc_paciente='".$doc."' ";
			$existe=$this->db->query($existe);
			
			if($existe->num_rows()==1)
			{
				$existe=$existe->row();
				$condoc=$existe->doc_paciente;
			}
			else
			{
				$condoc="";
			}
			if($condoc==$doc)
			{
				return 'cuenta ya registrada';
			}
			else if($condoc!=$doc)
			{
				$siguiente="SELECT MAX(id_paciente) id_paciente FROM paciente";
				$siguiente=$this->db->query($siguiente);
				$siguiente=$siguiente->row();
				$siguiente=$siguiente->id_paciente;
				$sigla='PC';
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
				$carpeta='assets/img/paciente/'.$codigo.'/';

				mkdir($carpeta);

				$campos= array('id_paciente'=>$codigo,
					'tipo_doc_paciente'=>$datos['tipo_doc_paciente'],
					'doc_paciente' => $datos['doc_paciente'], 
					'pnombre_paciente'=>$datos['pnombre_paciente'],
					'snombre_paciente'=>$datos['snombre_paciente'],
					'papellido_paciente'=>$datos['papellido_paciente'],
					'sapellido_paciente'=>$datos['sapellido_paciente'],
					'lugar_nacimiento_paciente'=>$datos['lugar_nacimiento_paciente'],
					'f_nacimiento_paciente'=>$datos['f_nacimiento_paciente'],
					'tipo_vinculacion_paciente'=>$datos['tipo_vinculacion_paciente'],
					'tipo_afiliado_paciente'=>$datos['tipo_afiliado_paciente'],
					'aseguradora_paciente'=>$datos['aseguradora_paciente'],
					'ambito_registro_paciente'=>$datos['ambito_registro_paciente'],
					'direccion_paciente'=>$datos['direccion_paciente'],
					'barrio_paciente'=>$datos['barrio_paciente'],
					'municipio_paciente'=>$datos['municipio_paciente'],
					'tel_fijo_paciente'=>$datos['tel_fijo_paciente'],
					'tel_celular_paciente'=>$datos['tel_celular_paciente'],
					'ocupacion_paciente'=>$datos['ocupacion_paciente'],
					'religion_paciente'=>$datos['religion_paciente'],
					'estado_civil_paciente'=>$datos['estado_civil_paciente'],
					'nom_cuidador_paciente'=>$datos['nom_cuidador_paciente'],
					'tel_cuidador_paciente'=>$datos['tel_cuidador_paciente'],
					'nom_responsable_paciente'=>$datos['nom_responsable_paciente'],
					'tel_responsable_paciente'=>$datos['tel_responsable_paciente'],
					'parentezco_responsable_paciente'=>$datos['parentezco_responsable_paciente'],
					'motivo_inclusion_paciente'=>$datos['motivo_inclusion_paciente'],
					'lugar_valoracion_paciente'=>$datos['lugar_valoracion_paciente'],
					'f_vinculacion_paciente'=>$datos['f_vinculacion_paciente'],
					'h_vinculacion_paciente'=>$datos['h_vinculacion_paciente'],
					'inclusion_pad_paciente'=>$datos['inclusion_pad_paciente'],
					'created_user'=>$datos['created_user'],
					'update_user'=>$datos['update_user'],
					'estado_paciente'=>'1'
					);
				
				$rs=$this->db->insert('paciente',$campos);

				return $rs;
			}
		}
		function consultar_todos(){
			$this->db->where("id_paciente!=",'PC0000');
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
		function actualizar_paciente($datos){
			$aux=$datos['id_paciente'];
			$campos= array(
			'tipo_doc_paciente'=>$datos['tipo_doc_paciente'],
			'doc_paciente'=>$datos['doc_paciente'],
			'pnombre_paciente'=>$datos['pnombre_paciente'],
			'snombre_paciente'=>$datos['snombre_paciente'],
			'papellido_paciente'=>$datos['papellido_paciente'],
			'sapellido_paciente'=>$datos['sapellido_paciente'],
			'lugar_nacimiento_paciente'=>$datos['lugar_nacimiento_paciente'],
			'f_nacimiento_paciente'=>$datos['f_nacimiento_paciente'],
			'tipo_vinculacion_paciente'=>$datos['tipo_vinculacion_paciente'],
			'tipo_afiliado_paciente'=>$datos['tipo_afiliado_paciente'],
			'aseguradora_paciente'=>$datos['aseguradora_paciente'],
			'ambito_registro_paciente'=>$datos['ambito_registro_paciente'],
			'direccion_paciente'=>$datos['direccion_paciente'],
			'barrio_paciente'=>$datos['barrio_paciente'],
			'municipio_paciente'=>$datos['municipio_paciente'],
			'tel_fijo_paciente'=>$datos['tel_fijo_paciente'],
			'tel_celular_paciente'=>$datos['tel_celular_paciente'],
			'ocupacion_paciente'=>$datos['ocupacion_paciente'],
			'religion_paciente'=>$datos['religion_paciente'],
			'estado_civil_paciente'=>$datos['estado_civil_paciente'],
			'nom_cuidador_paciente'=>$datos['nom_cuidador_paciente'],
			'tel_cuidador_paciente'=>$datos['tel_cuidador_paciente'],
			'nom_responsable_paciente'=>$datos['nom_responsable_paciente'],
			'tel_responsable_paciente'=>$datos['tel_responsable_paciente'],
			'parentezco_responsable_paciente'=>$datos['parentezco_responsable_paciente'],
			'motivo_inclusion_paciente'=>$datos['motivo_inclusion_paciente'],
			'lugar_valoracion_paciente'=>$datos['lugar_valoracion_paciente'],
			// 'f_vinculacion_paciente'=>$datos['f_vinculacion_paciente'],
			// 'h_vinculacion_paciente'=>$datos['h_vinculacion_paciente'],
			'inclusion_pad_paciente'=>$datos['inclusion_pad_paciente'],
			'created_user'=>$datos['created_user'],
			'update_user'=>$datos['update_user']);
		
			$this->db->where('id_paciente',$aux);
			$query=$this->db->update('paciente',$campos);
			return $query;
		}
		function registrar_arc($datos){
			$usu=$datos['cualpc'];
			$dt=$datos['img_paciente'];
			if($dt)
			{
				$campos= array(
				'img_paciente' => $datos['img_paciente'],
					);

				$this->db->where('id_paciente',$usu);
				$query=$this->db->update('paciente',$campos);
				return $query;
				}
			else
			{
				return 'dg1';
			}
			
			
		}
		function eliminar_paciente($id){
			$this->db->delete('paciente',array('id_paciente'=>$id));
		}
		function calcular_edad($ff){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$todayh =getdate($now);

			$d = $todayh['mday'];
			$m = $todayh['mon'];
			$y = $todayh['year'];
			$hr=$todayh['hours'];
			$min=$todayh['minutes'];
			$s=$todayh['seconds'];

			$getfecha=$y."-".$m."-".$d;
			$getfecha2=date("Y/m/d");
			$gethora=$hr.":".$min.":".$s;
			$gethora2=date("h:i:s");

			$fef=date('j \of M \of Y');//l jS \of F Y h:i:s A
			$xx=date_create($ff);//recibe este formato'2019-01-01'
			$dos=date_create($getfecha2);
			$diferencia=date_diff($xx,$dos);
			$fechagenerarl=$diferencia->format('%Y %m %d');//%d%a días %Y %m %R%a
			$anios=$diferencia->format('%Y');
			$meses=$diferencia->format('%m');
			$dias=$diferencia->format('%d');
			
			$tan="";
			$tms="";
			$tds="";
			if($anios==0)
			{
				if($meses==0)
				{
					// $tds=letras($dias);
					$tx3="";
					if($dias==1)
					{
						$tx3=" Dia";
					}
					else
					{
						$tx3=" Dias";
					}
					$tds=$tx3;
					echo $dias.$tds;
				}
				else
				{
					if($dias==0)
					{
						// $tms=letrasm($meses);
						$tx2="";
						if($meses==1)
						{
							$tx2=" Mes";
						}
						else
						{
							$tx2=" Meses";
						}
						$tms=$tx2;
						echo $meses.$tms;
					}
					else
					{
						// $tms=letrasm($meses);
						// $tds=letras($dias);
						$tx2="";
						if($meses==1)
						{
							$tx2=" Mes";
						}
						else
						{
							$tx2=" Meses";
						}
						$tms=$tx2;
						$tx3="";
						if($dias==1)
						{
							$tx3=" Dia";
						}
						else
						{
							$tx3=" Dias";
						}
						$tds=$tx3;
				
						echo $meses.$tms." ".$dias.$tds;
					}
				}
			}
			else
			{
				$tx="";
				if($anios==1)
				{
					$tx=" Año";
				}
				else
				{
					$tx=" Años";
				}
				$tx2="";
				if($meses==1)
				{
					$tx2=" Mes";
				}
				else
				{
					$tx2=" Meses";
				}
				$tx3="";
				if($dias==1)
				{
					$tx3=" Dia";
				}
				else
				{
					$tx3=" Dias";
				}
				$tan=$tx;//letrasa($anios);
				$tms=$tx2;//letrasm($meses);
				$tds=$tx3;//letras($dias);
				
				echo $anios.$tan." ".$meses.$tms." ".$dias.$tds;
			}
		}
		function consultar_paciente_nombres($busqueda){
			$this->db->where("id_paciente!=",'PC0000');
			$this->db->like("nombres",$busqueda);
			$consulta=$this->db->get("paciente");
			return $consulta->result();
			// return $busqueda;
		}
		function consultar_paciente_todos(){
			$this->db->where("id_paciente!=",'PC0000');
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
			if($seach)// terminar la consulta sql
			{
				$busqueda=" WHERE doc_paciente LIKE '%".$seach."%' or pnombre_paciente LIKE '%".$seach."%' or snombre_paciente LIKE '%".$seach."%' or papellido_paciente LIKE '%".$seach."%' or sapellido_paciente LIKE '%".$seach."%' and estado_paciente='1' ";
			}
			else
			{
				$busqueda=" WHERE id_paciente!='PC0000' and estado_paciente!='0'";
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
	}
?>