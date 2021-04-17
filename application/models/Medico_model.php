<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Medico_model extends CI_Model
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
					'registro_img' => $datos['registro_img'],
					'registro_doc'=>$datos['registro_doc'],
					'registro_n_medico'=>$datos['registro_n_medico'],
					'registro_especialidad'=>$datos['registro_especialidad']);

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
				redirect('inicio_medico');
			}
			
		}
		function consultar_estadisticas(){
			date_default_timezone_set("America/Bogota");
	        $now = time();
	        $getfecha=date("Y-m-d");
			// $fecha="2020-02-13";
			$consulta="SELECT COUNT(*) id_hc FROM hc WHERE f_hc='".$getfecha."' ";
			$r=$this->db->query($consulta);
			$r=$r->row();
			$r=$r->id_hc;

			$total="SELECT COUNT(*) id_ev FROM ev WHERE f_ev='".$getfecha."' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_ev;

			$consulta2="SELECT COUNT(*) id_receta FROM recetario WHERE f_receta='".$getfecha."' ";
			$r3=$this->db->query($consulta2);
			$r3=$r3->row();
			$r3=$r3->id_receta;

			$resultado=array('hc_hoy' => $r,
					'ev_hoy'=>$r2,
					'rc_hoy'=>$r3 );			
			return $resultado;
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
	        $q=$this->session->userdata('s_id');

			$total="SELECT COUNT(*) id_paciente FROM paciente WHERE id_paciente!='PC0000' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id_paciente;

			$hc="SELECT COUNT(*) id_hc_pad FROM hc_pad WHERE id_hc_pad!='PAD0000'";
			$hc=$this->db->query($hc);
			$hc=$hc->row();
			$hc=$hc->id_hc_pad;

			$evolucion="SELECT COUNT(*) id_ev FROM ev WHERE id_ev!='EV0000'";
			$evolucion=$this->db->query($evolucion);
			$evolucion=$evolucion->row();
			$evolucion=$evolucion->id_ev;

			$consulta="SELECT COUNT(*) agenda_nombres FROM agenda INNER JOIN hc_pad on hc_pad.pad_f_reg=agenda.agenda_f_cita WHERE agenda_nombres_profesional='".$q."' and agenda_f_cita='".$getfecha."' and agenda_estado_cita='p' ";
		    $r=$this->db->query($consulta);
		    $r=$r->row();
		    $r=$r->agenda_nombres;


			$resultado=array(
					'paciente_hoy'=>$r2,
					'hc_hoy'=>$hc,
					'ev_hoy'=>$evolucion,
					'estado'=>$r
					);			
			return $resultado;
		}
	}
?>