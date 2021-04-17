<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Administrador_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function registrar_administrador($datos){
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
					'registro_estado'=>$datos['registro_estado']);

				$campos_usuario= array(
					'id_usuario'=>$datos['id_registro_usuario'],
					'usuario_contra'=>$nuevaclave,
					'usuario_tipo'=>$datos['registro_tipo'],
					'usuario_estado'=>$datos['registro_estado']);

				$rs=$this->db->insert('registro_usuarios',$campos);

				$rs2=$this->db->insert('usuarios',$campos_usuario);

				return $rs;
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
		function actualizar_administrador($datos){
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
				'registro_estado' => $datos['registro_estado']);

			$campos_usuario= array(
						'usuario_estado'=>$datos['registro_estado']);
		
			$this->db->where('id_registro_usuario',$aux);
			// $this->db->insert('registro_empleado',$campos);
			$query=$this->db->update('registro_usuarios',$campos);

			$this->db->where('id_usuario',$aux);
			// $this->db->insert('registro_empleado',$campos);
			$query2=$this->db->update('usuarios',$campos_usuario);
			// echo $query.$aux;
			return $query;
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
		
		function consultar_separados_administrador($start,$length,$seach,$direccion,$cual){
			$columna="";
			if($cual==0)
			{
				$columna="registro_nombres";
			}
			else if($cual==1)
			{
				$columna="registro_apellidos";
			}
			else if($cual==2)
			{
				$columna="registro_sexo";
			}
			else if($cual==3)
			{
				$columna="registro_tipo";
			}
			
			$busqueda="";
			$consulta="";
			if($seach)
			{
				$busqueda=" WHERE documento LIKE '%".$seach."%' or nombres_apellidos LIKE '%".$seach."%'";
				$consulta="SELECT * FROM registro_usuarios WHERE registro_tipo='4' and registro_nombres LIKE '%".$seach."%' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
				// la consulta genera problemas con or paciente.pnombre_paciente LIKE '%".$seach."%' 
			}
			else
			{
				$consulta="SELECT * FROM registro_usuarios WHERE registro_tipo='4' "." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			}
			// $consulta="SELECT * FROM hc_pad ".$busqueda." ORDER BY ".$columna." ".strtoupper($direccion)." LIMIT $start,$length";
			$r=$this->db->query($consulta);

			$total="SELECT COUNT(*) id FROM registro_usuarios WHERE registro_tipo='4' ";
			$r2=$this->db->query($total);
			$r2=$r2->row();
			$r2=$r2->id;
			$resultado=array('consulta_total' => $r,
					'total_datos'=>$r2 );

			return $resultado;			
		}
	}
?>