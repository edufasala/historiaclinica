<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Super_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function consultar_perfil($busqueda){
			$this->db->where("id",$busqueda);
			$consulta=$this->db->get("registro_usuarios");
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
		function actualizar_perfil($datos){
			$usu=$datos['id_registro_usuario'];
			$tp=$datos['registro_tipo'];
			$existe="SELECT * FROM registro_usuarios WHERE id_registro_usuario='".$usu."' and registro_tipo='".$tp."' ";
			$resultado=$this->db->query($existe);
			if($resultado->num_rows()==1)
			{
				$resultado=$resultado->row();
				$result=$resultado->id_registro_usuario;
				$result2=$resultado->registro_tipo;
			}
			else
			{
				$result="";
				$result2="";
			}
			if($result==$usu && $result2==$tp)
			{
				$aux=$datos['id_registro_usuario'];
				// $clave=$datos['registro_contra'];
				// $nuevaclave=password_hash($clave,PASSWORD_DEFAULT);
				$campos= array('registro_nombres' => $datos['registro_nombres'],
					'registro_apellidos' => $datos['registro_apellidos'],
					'registro_f_nacimiento' => $datos['registro_f_nacimiento'],
					'registro_edad' => $datos['registro_edad'],
					'registro_celular' => $datos['registro_celular'],
					'registro_sexo' => $datos['registro_sexo'],
					'registro_img' => $datos['registro_img']);

				$n_n=$datos['registro_nombres'];
				$n_ap=$datos['registro_apellidos'];
				$n_img=$datos['registro_img'];
				
				$campos_usuario= array('id_usuario' => $aux, 
					'usuario_tipo'=>$datos['registro_tipo']);

				$this->db->where('id_registro_usuario',$aux);
				$query=$this->db->update('registro_usuarios',$campos);
				$this->db->where('id_usuario',$aux);
				$query2=$this->db->update('usuarios',$campos_usuario);
				$s_datos= array('s_n' => $n_n,
						's_ap' => $n_ap,
						's_img' => $n_img);
				$this->session->set_userdata($s_datos);
				// echo $query.$aux;
				return $query;
			}
			else
			{
				redirect('inicio_spadmin');
			}
			
		}
		function calcular_edad($ff){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$todayh =getdate($now);// $timestamp;

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
		function consultar_estadisticas_inicio(){
			date_default_timezone_set("America/Bogota");
	        $now = time();
	        $getfecha=date("Y-m-d");

			$consulta2="SELECT COUNT(*) id_hc_pad FROM hc_pad WHERE id_hc_pad!='PAD0000' and hc_pad_cod='1' ";
			$r3=$this->db->query($consulta2);
			$r3=$r3->row();
			$r3=$r3->id_hc_pad;

			$consulta3="SELECT COUNT(*) id_hc_pad FROM hc_pad WHERE id_hc_pad!='PAD0000' and hc_pad_cod>'1' ";
			$r4=$this->db->query($consulta3);
			$r4=$r4->row();
			$r4=$r4->id_hc_pad;

			$consulta4="SELECT COUNT(*) id_hc_enf_pad FROM  hc_enf_pad WHERE id_hc_enf_pad!='PADE0000' and hc_enf_pad_cod='1' ";
			$r5=$this->db->query($consulta4);
			$r5=$r5->row();
			$r5=$r5->id_hc_enf_pad;

			$consulta5="SELECT COUNT(*) id_registro_usuario FROM registro_usuarios WHERE registro_tipo='1' ";
			$r6=$this->db->query($consulta5);
			$r6=$r6->row();
			$r6=$r6->id_registro_usuario;

			$consulta6="SELECT COUNT(*) id_registro_usuario FROM registro_usuarios WHERE registro_tipo='2' ";
			$r7=$this->db->query($consulta6);
			$r7=$r7->row();
			$r7=$r7->id_registro_usuario;

			$consulta7="SELECT COUNT(*) id_registro_usuario FROM registro_usuarios WHERE registro_tipo='3' ";
			$r8=$this->db->query($consulta7);
			$r8=$r8->row();
			$r8=$r8->id_registro_usuario;

			$consulta8="SELECT COUNT(*) id_registro_usuario FROM registro_usuarios WHERE registro_tipo='4' ";
			$r9=$this->db->query($consulta8);
			$r9=$r9->row();
			$r9=$r9->id_registro_usuario;

			$consulta9="SELECT COUNT(*) id_registro_usuario FROM registro_usuarios WHERE registro_tipo='5' ";
			$r10=$this->db->query($consulta9);
			$r10=$r10->row();
			$r10=$r10->id_registro_usuario;

			$visita="SELECT COUNT(*) id_hc_enf_pad FROM  hc_enf_pad WHERE id_hc_enf_pad!='PADE0000' and hc_enf_pad_cod>'1' ";
			$visita=$this->db->query($visita);
			$visita=$visita->row();
			$visita=$visita->id_hc_enf_pad;


			$resultado=array(
					'hc_hoy'=>$r3,
					'ev_hoy'=>$r4,
					'hc_enf_hoy'=>$r5,
					'vs_hoy'=>$visita,
					'emp_hoy'=>$r6,
					'enf_hoy'=>$r7,
					'med_hoy'=>$r8,
					'adm_hoy'=>$r9,
					'spadm_hoy'=>$r10,
					);			
			return $resultado;
		}
	}
?>