<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Empleado_model extends CI_Model
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
				// return 'cuenta ya registrada';
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
				redirect('inicio_empleado');
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
		function consultar_estadisticas(){
			date_default_timezone_set("America/Bogota");
	        $now = time();
	        $getfecha=date("Y-m-d");

			$total="SELECT COUNT(*) id_paciente FROM paciente WHERE id_paciente!='PC0000'";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_paciente;

			$cita="SELECT COUNT(*) id_agenda FROM agenda ";
			$cita=$this->db->query($cita);
			$cita=$cita->row();
			$cita=$cita->id_agenda;

			$citac="SELECT COUNT(*) id_agenda FROM agenda WHERE agenda_estado_cita='c' ";
			$citac=$this->db->query($citac);
			$citac=$citac->row();
			$citac=$citac->id_agenda;

			$pm="SELECT COUNT(*) id_visita FROM visita ";
			$pm=$this->db->query($pm);
			$pm=$pm->row();
			$pm=$pm->id_visita;

			$consulta="SELECT COUNT(*) agenda_nombres FROM agenda INNER JOIN hc_pad on hc_pad.pad_f_reg=agenda.agenda_f_cita WHERE agenda_f_cita='".$getfecha."' and agenda_estado_cita='p' ";
		    $r=$this->db->query($consulta);
		    $r=$r->row();
		    $r=$r->agenda_nombres;

			$resultado=array(
					'agenda_hoy'=>$cita,
					'paciente_hoy'=>$r2,
					'ca'=>$citac,
					'visita_hoy'=>$pm,
					'estado'=>$r
					);			
			return $resultado;
		}
	}
?>