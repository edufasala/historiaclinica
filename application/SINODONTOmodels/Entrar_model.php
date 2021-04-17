<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Entrar_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function consultar_usuario($us,$cl,$cp){
			$secret="6LemLNwZAAAAAEWuKItPXu0wJnK5vxlSZGYl6HpO";
			$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
			// return 'es:'.$cp;
			if(!$cp)
			{
				return 2;
			}
			else
			{
				// return 'ok';
				$response=file_get_contents($recaptcha_url."?secret=".$secret."&response=".$cp);
				$response=json_decode($response,true);
				if($response['success'])
				{
					
					$this->db->select('*');
					$this->db->from('usuarios');
					$this->db->where('id_usuario',$us);
					$losdatos=$this->db->get();
					
					if($losdatos->num_rows()==1)
					{
						$separar=$losdatos->row();
						$u=$separar->id_usuario;
						$c=$separar->usuario_contra;
						$t=$separar->usuario_tipo;
						$e=$separar->usuario_estado;
						// $s_usuario= array('s_id' => $separar->id_usuario,
						// 	's_tipo' => $separar->tipo,
						// 	's_estado' => $separar->estado);
						// $this->session->set_userdata($s_usuario);
						$ayuda=password_verify($cl,$c);
						//echo $tipo."  ".$estado.'</br>';
						$nc="";
						if($ayuda)
						{
							$nc="1";
						}
						else
						{
							$nc="0";
						}
						if($u==$us && $nc=='1')
						{
							if($t=="5" && $e=="1")
							{
								$this->db->select('*');
								$this->db->from('registro_usuarios');
								$this->db->where('id_registro_usuario',$us);
								$datospersonales=$this->db->get();
								$fila_e=$datospersonales->row();
								$s_datos= array('s_n' => $fila_e->registro_nombres,
									's_ap' => $fila_e->registro_apellidos,
									's_img' => $fila_e->registro_img,
									's_id' => $fila_e->id,
									's_tipo' => $fila_e->registro_tipo,
									's_estado' => $fila_e->registro_estado
									);
								$this->session->set_userdata($s_datos);
								return 'inicio_spadmin';
							}
							else if($t=="5" && $e=="0")
							{
								$s_datos= array('s_id' => '');
									$this->session->set_userdata($s_datos);
								return 8;
							}
							else if($t=="4" && $e=="1")
							{
								$this->db->select('*');
								$this->db->from('registro_usuarios');
								$this->db->where('id_registro_usuario',$us);
								$datospersonales=$this->db->get();
								$fila_e=$datospersonales->row();
								$s_datos= array('s_n' => $fila_e->registro_nombres,
									's_ap' => $fila_e->registro_apellidos,
									's_img' => $fila_e->registro_img,
									's_id' => $fila_e->id,
									's_tipo' => $fila_e->registro_tipo,
									's_estado' => $fila_e->registro_estado
									);
								$this->session->set_userdata($s_datos);
								return 'inicio_admin';
							}
							else if($t=="4" && $e=="0")
							{
								$s_datos= array('s_id' => '');
									$this->session->set_userdata($s_datos);
								return 8;
							}
							else if($t=="3" && $e=="1")
							{
								$this->db->select('*');
								$this->db->from('registro_usuarios');
								$this->db->where('id_registro_usuario',$us);
								$datospersonales=$this->db->get();
								$fila_e=$datospersonales->row();
								$s_datos= array('s_n' => $fila_e->registro_nombres,
									's_ap' => $fila_e->registro_apellidos,
									's_img' => $fila_e->registro_img,
									's_id' => $fila_e->id,
									's_tipo' => $fila_e->registro_tipo,
									's_estado' => $fila_e->registro_estado
									);
								$this->session->set_userdata($s_datos);
								return 'inicio_medico';
							}
							else if($t=="3" && $e=="0")
							{
								$s_datos= array('s_id' => '');
									$this->session->set_userdata($s_datos);
								return 8;
							}
							else if($t=="2" && $e=="1")
							{
								$this->db->select('*');
								$this->db->from('registro_usuarios');
								$this->db->where('id_registro_usuario',$us);
								$datospersonales=$this->db->get();
								$fila_e=$datospersonales->row();
								$s_datos= array('s_n' => $fila_e->registro_nombres,
									's_ap' => $fila_e->registro_apellidos,
									's_img' => $fila_e->registro_img,
									's_id' => $fila_e->id,
									's_tipo' => $fila_e->registro_tipo,
									's_estado' => $fila_e->registro_estado
									);
								$this->session->set_userdata($s_datos);
								return 'inicio_enfermera';
							}
							else if($t=="2" && $e=="0")
							{
								$s_datos= array('s_id' => '');
									$this->session->set_userdata($s_datos);
								return 8;
							}
							else if($t=="1" && $e=="1")
							{
								$this->db->select('*');
								$this->db->from('registro_usuarios');
								$this->db->where('id_registro_usuario',$us);
								$datospersonales=$this->db->get();
								$fila_e=$datospersonales->row();
								$s_datos= array('s_n' => $fila_e->registro_nombres,
									's_ap' => $fila_e->registro_apellidos,
									's_img' => $fila_e->registro_img,
									's_id' => $fila_e->id,
									's_tipo' => $fila_e->registro_tipo,
									's_estado' => $fila_e->registro_estado
									);
								$this->session->set_userdata($s_datos);
								return 'inicio_empleado';
							}
							else if($t=="1" && $e=="0")
							{
								$s_datos= array('s_id' => '');
									$this->session->set_userdata($s_datos);
								return 8;
							}
							// return "correcto";
							//validar los tipos de usuario y el estado
						}
						else if($u!=$us && $nc=='1')
						{
							return 4;
						}
						else if($nc!='1' && $u==$us)
						{
							return 5;
						}
						else if($u!=$us && $nc!='1')
						{
							return 6;
						}
					}
					else
					{
						return 0;
					}
				}
				else
				{
					return 3;
				}
				
			}
			
			// $this->db->select('id_usuario,contra,tipo,estado');
			// $this->db->from('usuarios');
			// $this->db->where('id_usuario',$us);
			// $this->db->where('contra',$cl);

			// $resultado=$this->db->get();

			// if($resultado->num_rows()==1)
			// {
			// 	$r=$resultado->row();
			// 	// if($r->tipo_usuario=="" && $r->estado)
			// 	$s_usuario= array(
			// 		's_id' => $r->id_usuario,);
			// 	$this->session->set_userdata($s_usuario);
			// 	return $r;
			// 	//con este return mando el resultado de la consulta al controlador
			// }
			// else
			// {
			// 	$r=$resultado->row();
			// 	$cual=$r->id_usuario;
			// 	return $r;
			// }
		}
		function registrar_trabajador($datos){
			// $this->input->post('');
			$usu=$datos['id_registro_usuario'];
			$nomcarp=$datos['nombre_carpeta'];
			$mitip=$datos['registro_tipo'];
			
			$existe="SELECT id_usuario FROM usuarios WHERE id_usuario='".$usu."' ";
			$resultado=$this->db->query($existe);
			if($resultado->num_rows()==1)
			{
				$resultado=$resultado->row();
				$result=$resultado->id_usuario;
				//$u=$separar->id_usuario;
			}
			else
			{
				$result="";
			}
			// return $result;
			// $this->db->select('id_usuario');
			// $this->db->from('usuarios');
			// $this->db->where('id_usuario',$usu);
			// $losdatos=$this->db->get();
			// $fila=$losdatos->row();
			// $us=$fila->id_usuario;
			// return $us;
			if($result==$usu)
			{
				return 'cuenta ya registrada';
			}
			else if($result!=$usu)
			{
				$carpeta='assets/img/empleado/'.$nomcarp.'/';

				mkdir($carpeta);

				$micarp='assets/img/empleado/'.$nomcarp.'/';
				opendir($carpeta);
				$fp=fopen('assets/img/usm.png', 'r');
				$origen="assets/img/usm.png";
				
				copy($origen, $carpeta."usm.png");
				$nomb=$carpeta."usm.png";
				$clave=$datos['registro_contra'];
				$nuevaclave=password_hash($clave,PASSWORD_DEFAULT);
				$campos= array(
					'id_registro_usuario'=>$datos['id_registro_usuario'],
					'registro_nombres'=>$datos['registro_nombres'],
					'registro_apellidos'=>$datos['registro_apellidos'],
					'registro_f_nacimiento'=>$datos['registro_f_nacimiento'],
					'registro_edad'=>$datos['registro_edad'],
					'registro_celular'=>$datos['registro_celular'],
					'registro_sexo'=>$datos['registro_sexo'],
					'registro_img'=>$nomb,
					'registro_tipo'=>$datos['registro_tipo'],
					'registro_estado'=>$datos['registro_estado'],
					'created_user'=>'0',
					'update_user'=>'0');

				$campos_usuario= array(
					'id_usuario'=>$datos['id_registro_usuario'],
					'usuario_contra'=>$nuevaclave,
					'usuario_tipo'=>$datos['registro_tipo'],
					'usuario_estado'=>$datos['registro_estado']);

				$rs=$this->db->insert('registro_usuarios',$campos);

				$rs2=$this->db->insert('usuarios',$campos_usuario);

				return $rs.','.$usu;
				// if ($mitip=="2")
				// {
				// 	$carpeta='assets/img/empleado/'.$nomcarp.'/';

				// 	mkdir($carpeta);

				// 	$micarp='assets/img/empleado/'.$nomcarp.'/';
				// 	opendir($carpeta);
				// 	$fp=fopen('assets/img/usm.png', 'r');
				// 	$origen="assets/img/usm.png";
					
				// 	copy($origen, $carpeta."usm.png");
				// 	$nomb=$carpeta."usm.png";
				// 	$campos= array(
				// 		'id_empleado'=>$datos['id_empleado'],
				// 		'nombres'=>$datos['nombres'],
				// 		'apellidos'=>$datos['apellidos'],
				// 		'contra'=>$datos['contra'],
				// 		'f_nacimiento'=>$datos['f_nacimiento'],
				// 		'edad'=>$datos['edad'],
				// 		'celular'=>$datos['celular'],
				// 		'sexo'=>$datos['sexo'],
				// 		'img_empleado'=>$nomb,
				// 		'tipo_empleado'=>$datos['tipo_empleado'],
				// 		'estado_empleado'=>$datos['estado_empleado']);

				// 	$campos_usuario= array(
				// 		'id_usuario'=>$datos['id_empleado'],
				// 		'contra'=>$datos['contra'],
				// 		'tipo'=>$datos['tipo_empleado'],
				// 		'estado'=>$datos['estado_empleado']);

				// 	$rs=$this->db->insert('registro_empleado',$campos);

				// 	$rs2=$this->db->insert('usuarios',$campos_usuario);

				// 	return $rs;
				// }
				// else if ($mitip=="3")
				// {
				// 	$carpeta='assets/img/medico/'.$nomcarp.'/';

				// 	mkdir($carpeta);

				// 	$micarp='assets/img/medico/'.$nomcarp.'/';
				// 	opendir($carpeta);
				// 	$fp=fopen('assets/img/usm.png', 'r');
				// 	$origen="assets/img/usm.png";
					
				// 	copy($origen, $carpeta."usm.png");
				// 	$nomb=$carpeta."usm.png";

				// 	$campos= array(
				// 		'id_medico'=>$datos['id_empleado'],
				// 		'nombres'=>$datos['nombres'],
				// 		'apellidos'=>$datos['apellidos'],
				// 		'contra'=>$datos['contra'],
				// 		'f_nacimiento'=>$datos['f_nacimiento'],
				// 		'edad'=>$datos['edad'],
				// 		'celular'=>$datos['celular'],
				// 		'sexo'=>$datos['sexo'],
				// 		'img_medico'=>$nomb,
				// 		'tipo_medico'=>$datos['tipo_empleado'],
				// 		'estado_medico'=>$datos['estado_empleado']);

				// 	$campos_usuario= array(
				// 		'id_usuario'=>$datos['id_empleado'],
				// 		'contra'=>$datos['contra'],
				// 		'tipo'=>$datos['tipo_empleado'],
				// 		'estado'=>$datos['estado_empleado']);

				// 	$rs=$this->db->insert('registro_medico',$campos);

				// 	$rs2=$this->db->insert('usuarios',$campos_usuario);

				// 	return $rs;

				// }
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
		function recuperar_contra($correo){
			$aux="";
			$existe="SELECT * FROM usuarios WHERE id_usuario='".$correo."' ";
			$resultado=$this->db->query($existe);
			if($resultado->num_rows()==1)
			{
				$resultado=$resultado->row();
				$result=$resultado->id_usuario;
				$id=$resultado->id;
				// $cr=$separar->id_usuario;
			}
			else
			{
				$result="";
			}
			$existe2="SELECT * FROM registro_usuarios WHERE id_registro_usuario='".$correo."' ";
			$resultado2=$this->db->query($existe2);
			if($resultado2->num_rows()==1)
			{
				$resultado2=$resultado2->row();
				$celular=$resultado2->registro_celular;
				// $cr=$separar->id_usuario;
			}
			else
			{
				$result="";
			}
			if($result==$correo)
			{
				$aux="1";
			}
			else if($result!=$correo)
			{
				$aux="0";
				// return 'noesta';
			}
			$resultado=array(
					'consulta'=>$aux,
					'dato1'=>$id,
					'dato2'=>$celular
					);			
			return $resultado;
		}
		function registrar_codigo($datos){
			
			$campos= array(
				'codigo'=>$datos['codigo'],
				'celular'=>$datos['celular'],
				'codigo_f_reg'=>$datos['codigo_f_reg'],
				'codigo_h_reg'=>$datos['codigo_h_reg'],
				);

			$rs=$this->db->insert('codigo',$campos);

			return $rs;
		}
		function verificar_codigo($codigo,$celular){
			
			$existe="SELECT * FROM codigo WHERE codigo='".$codigo."' and celular='".$celular."' ";
			$resultado=$this->db->query($existe);
			if($resultado->num_rows()==1)
			{
				$resultado=$resultado->row();
				$result=$resultado->codigo;
			}
			else
			{
				$result="";
			}
			if($result==$codigo)
			{
				return '1';
			}
			else if($result!=$codigo)
			{
				return '2';
			}
		}
		function actualizar_clave($id,$clave,$celular){
			// $aux=$datos['id'];
			$nuevaclave=password_hash($clave,PASSWORD_DEFAULT);
			// return $id.$clave.' '.$nuevaclave;

			$campos_usuario= array(
						'usuario_contra'=>$nuevaclave
						);

			$this->db->where('id',$id);
			$query=$this->db->update('usuarios',$campos_usuario);
			// // echo $query.$aux;
			//eliminar codigo
			$this->db->delete('codigo',array('celular'=>$celular));
			return $query;
		}
		function actualizar_cuenta($id,$celular){
			// $aux=$datos['id'];
			// return $id.$clave.' '.$nuevaclave;
			$result="";
			$existe="SELECT id_usuario FROM usuarios WHERE id='".$id."' ";
			$resultado=$this->db->query($existe);
			if($resultado->num_rows()==1)
			{
				$resultado=$resultado->row();
				$result=$resultado->id_usuario;
				//$u=$separar->id_usuario;
			}

			$campos= array(
						'registro_estado'=>'1'
						);

			$campos_usuario= array(
						'usuario_estado'=>'1'
						);

			$this->db->where('id_registro_usuario',$result);
			$query=$this->db->update('registro_usuarios',$campos);

			$this->db->where('id',$id);
			$query2=$this->db->update('usuarios',$campos_usuario);
			// // echo $query.$aux;
			$this->db->delete('codigo',array('celular'=>$celular));
			return $query;
		}
		function eliminar_codigo($celular){
			$this->db->delete('codigo',array('celular'=>$celular));
		}
	}
?>