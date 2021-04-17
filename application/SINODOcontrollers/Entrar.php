<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Entrar extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('entrar_model');
			$this->load->library('encryption');
	        $this->encryption->initialize(
	                  array(
	                          'cipher' => 'rc4',//aes-128 cast5
	                          'mode' => 'Stream',//ctr ecb cfb8 bce
	                          'key' => '<a 0-character>'//<a 2-character random string> <a 0-character>
	                  )
	        );
			if(!$this->session->userdata('s_id'))
			{
				// redirect('');
			}
			else
			{
				$cuales=$this->session->userdata('s_tipo');
		        if ($cuales=="5")
		        {
		            redirect('inicio_spadmin');
		        }
		        else if ($cuales=="4")
		        {
		            redirect('inicio_admin');
		        }
		        else if ($cuales=="3")
		        {
		            redirect('inicio_medico');
		        }
		        else if ($cuales=="2")
		        {
		            redirect('inicio_enfermera');
		        }
		        else if ($cuales=="1")
		        {
		            redirect('inicio_empleado');
		        }
			}
		}
		function index(){
			$this->load->view('iniciar/vlogin');
		}
		function registrar(){
			$this->load->view('iniciar/vregistrar');
		}
		function recuperar(){
			$this->load->view('iniciar/vrcps');
		}
		function restablecer(){
			$this->load->view('iniciar/vrestablecer');
		}
		function activar(){
			$this->load->view('iniciar/vactivar');
		}
		function ingresar(){
			$us=$this->input->post('usuario');
			$ps=$this->input->post('clave');
			$captcha=$this->input->post('captcha');//g-recaptcha-response
			$datos=$this->entrar_model->consultar_usuario($us,$ps,$captcha);
			echo json_encode($datos);
		}
		function calcular(){
			$dato=$this->input->post('lafecha');
			$rs=$this->entrar_model->calcular_edad($dato);
			echo $rs;			
		}
		function registrar_usuario(){
			$datos['registro_nombres']=$this->input->post('elnombre');
			$datos['registro_apellidos']=$this->input->post('elape');
			$datos['registro_contra']=$this->input->post('lacl');
			$datos['registro_sexo']=$this->input->post('sex');
			$datos['registro_f_nacimiento']=$this->input->post('fnaci');
			$datos['registro_edad']=$this->input->post('edad');
			$datos['registro_celular']=$this->input->post('elcelular');
			// $ttra=$this->input->post('templeado');
			$datos['registro_img']="";
			$datos['id_registro_usuario']=$this->input->post('corre');
			$usu=$this->input->post('corre');
			$estado="0";
			$datos['registro_estado']=$estado;
			
			$porciones = explode("@", $usu);
			$nomcarp=$porciones[0];

			$datos['nombre_carpeta']=$nomcarp;
			$datos['registro_tipo']=$this->input->post('tpusu');
			
			$rs=$this->entrar_model->registrar_trabajador($datos);
			// echo json_encode($datos);
			echo $rs;
		}
		function enviar(){
			// $this->load->library('encryption');
			// // $this->encryption->initialize(array('driver' => 'mcrypt'));
			// $this->encryption->initialize(
			//         array(
			//                 'cipher' => 'rc4',//aes-128 cast5
			//                 'mode' => 'Stream',//ctr ecb cfb8 bce
			//                 'key' => '<a 0-character>'//<a 2-character random string> <a 0-character>
			//         )
			// );
			$destino=$this->input->post('usu');
			// $rs=$this->entrar_model->recuperar_contra($destino);
			$recibodatos=$this->entrar_model->recuperar_contra($destino);
			$rs=$recibodatos['consulta'];
			$id=$recibodatos['dato1'];
			$cel=$recibodatos['dato2'];
			
			if($rs=="1")
			{
					// echo extension_loaded('mcrypt') ? 'Yup' : 'Nope';
				$key='';  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar o dejar en blanco
			    // $encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $cel, MCRYPT_MODE_CBC, md5(md5($key))));
				$ciphertext=$this->encryption->encrypt($cel);
				// $x=$this->encryption->decrypt($ciphertext);

				// echo ' cifrado: '.$ciphertext.':'.$x;
				//metodo 2
				$this->load->library("email");
				$quienenvia="historiasclinicas@gmail.com";
				$clave="";
				//configuracion normal
				$configuracion = array(
					'mailtype' => 'html',
					'charset' => 'utf-8',
					'newline' => "\r\n"
				);
				$this->email->initialize($configuracion);

				$this->email->from($quienenvia);
				$this->email->to($destino);
				$this->email->subject('Recuperar Contraseña');
				$this->email->message('
					<h2>Historias Clinicas - Restablecer Contraseña</h2>
					<a href="https://voiparkas.com/desarrollo/"><img src="'.base_url().'assets/img/logo2.png" width="200" height="70" ></a>
					<br>
					<br>
					<strong>Apreciado Usuario:</strong>
					<p>Para Recuperar tu Contraseña Solicitada por el Correo: '.$destino.'<br>
						<strong>1.</strong> Debes Acceder al Siguiente Link: <a href="'.base_url().'entrar/restablecer/'.$id.'/'.$ciphertext.'">Validar informacion</a><br>
						<strong>2.</strong> En ese enlace debes Proporcionar informacion de tu cuenta.<br>
						<strong>3.</strong> Sigue los Pasos que se muestran.<br>
						<strong>4.</strong> Una vez finalizado el proceso acceder al sistema <a href="http://voiparkas.com/shistoria">Historias Clinicas</a><br>
					</p>
					<br>
					<h3>Para mas informacion Visita Nuestra Pagina. <a href="https://voiparkas.com/desarrollo/">Productos Relacionados</a></h3>
					'
					);

				if ($this->email->send())
				{
					echo "1";
				}
				else
				{
					$e=$this->email->print_debugger();
					// echo "0".$e;
					echo "0";
				}
			}
			else
			{
				echo "no";
			}
			// //metodo 1
			// $this->load->library("email");
			// $quienenvia="tucorreo@gmail.com";
			// $clave="";
			// //configuracion gmail
			// $configGmail = array(
			// 	'protocol' => 'smtp',
			// 	'smtp_host' => 'ssl://smtp.googlemail.com',
			// 	'smtp_port' => 465,
			// 	'smtp_user' => $quienenvia,
			// 	'smtp_pass' => $clave,
			// 	'mailtype' => 'html',
			// 	'charset' => 'utf-8',
			// 	'newline' => "\r\n"
			// );
			// $this->email->initialize($configGmail);

			// $this->email->from($quienenvia);
			// $this->email->to($destino);
			// $this->email->subject('Recuperacion de contraseña');
			// $this->email->message('<h2>Correo de recuperacion</h2>');

			// if ($this->email->send())
			// {
			// 	echo "Enviado";
			// }
			// else
			// {
			// 	echo "Error al enviar correo ";//$this->email->print_debugger();
			// }			
		}
		function enviarsms(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");


			$cel=$this->input->post('celular');
			// $mj=$this->input->post('mj');
			$codigo=rand(100000,1000000);

			$datos['codigo']=$codigo;
			$datos['celular']=$cel;
			$datos['codigo_f_reg']=$getfecha;
			$datos['codigo_h_reg']=$gethora;
			$rs=$this->entrar_model->registrar_codigo($datos);
			// echo $rs;
			if($rs==1)
			{
				$mj="Historias%20Clinicas%20ha%20generado%20el%20siguiente%20codigo%20de%20seguridad:".$codigo.",%20para%20que%20pueda%20continuar%20con%20su%20proceso.";
				$url="https://sistemasmasivos.com/envio/api/sendsms/send.php?user=arkasmsn1@hotmail.com&password=V1z1LDiupzpx&GSM=".$cel."&SMSText=".$mj;
				// echo $cel.$mj;
				// Crear un nuevo recurso cURL
				$ch = curl_init();

				// Establecer URL y otras opciones apropiadas
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_HEADER, true);

				// Capturar la URL y pasarla al navegador
				$resultado=curl_exec($ch);

				// Cerrar el recurso cURL y liberar recursos del sistema
				curl_close($ch);

				echo $resultado;
			}
			else
			{

			}


			// otro metodo
			// echo $url;
			// $json =file_get_contents($url);
			// echo $json;

			// $rs=$this->entrar_model->registrar_trabajador($datos);
			// echo json_encode($datos);
			// echo $rs;
		}
		function reenviarenviarsms(){
			date_default_timezone_set("America/Bogota");
			$now = time();
			$getfecha=date("Y-m-d");
			$gethora=date("h:i:s");


			$cel=$this->input->post('celular');
			$this->entrar_model->eliminar_codigo($cel);
			// $mj=$this->input->post('mj');
			$codigo=rand(100000,1000000);

			$datos['codigo']=$codigo;
			$datos['celular']=$cel;
			$datos['codigo_f_reg']=$getfecha;
			$datos['codigo_h_reg']=$gethora;
			$rs=$this->entrar_model->registrar_codigo($datos);
			// echo $rs;
			if($rs==1)
			{
				$mj="Historias%20Clinicas%20ha%20generado%20el%20siguiente%20codigo%20de%20seguridad:".$codigo.",%20para%20que%20pueda%20continuar%20con%20su%20proceso.";
				$url="https://sistemasmasivos.com/envio/api/sendsms/send.php?user=arkasmsn1@hotmail.com&password=V1z1LDiupzpx&GSM=".$cel."&SMSText=".$mj;
				// echo $cel.$mj;
				// Crear un nuevo recurso cURL
				$ch = curl_init();

				// Establecer URL y otras opciones apropiadas
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_HEADER, true);

				// Capturar la URL y pasarla al navegador
				$resultado=curl_exec($ch);

				// Cerrar el recurso cURL y liberar recursos del sistema
				curl_close($ch);

				echo $resultado;
			}
			else
			{

			}


			// otro metodo
			// echo $url;
			// $json =file_get_contents($url);
			// echo $json;

			// $rs=$this->entrar_model->registrar_trabajador($datos);
			// echo json_encode($datos);
			// echo $rs;
		}
		function validar(){
			$codigo=$this->input->post('codigo');
			$celular=$this->input->post('celular');
			
			$rs=$this->entrar_model->verificar_codigo($codigo,$celular);
			// echo json_encode($datos);
			echo $rs;
		}
		function actualizar(){
			$id=$this->input->post('id');
			$clave=$this->input->post('clave');
			$celular=$this->input->post('celular');
			
			$rs=$this->entrar_model->actualizar_clave($id,$clave,$celular);
			// echo json_encode($datos);
			echo $rs;
		}
		function enviar_activacion(){
			$destino=$this->input->post('correo');
			
			$recibodatos=$this->entrar_model->recuperar_contra($destino);
			$rs=$recibodatos['consulta'];
			$id=$recibodatos['dato1'];
			$cel=$recibodatos['dato2'];
			
			if($rs=="1")
			{
				$ciphertext=$this->encryption->encrypt($cel);
				//metodo 2
				$this->load->library("email");
				$quienenvia="historiasclinicas@gmail.com";
				$clave="";
				//configuracion normal
				$configuracion = array(
					'mailtype' => 'html',
					'charset' => 'utf-8',
					'newline' => "\r\n"
				);
				$this->email->initialize($configuracion);

				$this->email->from($quienenvia);
				$this->email->to($destino);
				$this->email->subject('Activar Cuenta');
				$this->email->message('
					<h2>Historias Clinicas - Activar Cuenta</h2>
					<a href="https://voiparkas.com/desarrollo/"><img src="'.base_url().'assets/img/logo2.png" width="200" height="70" ></a>
					<br>
					<br>
					<strong>Apreciado Usuario:</strong>
					<p>Para Activar tu Cuenta, Del Correo Registrado: '.$destino.'<br>
						<strong>1.</strong> Debes Acceder al Siguiente Link: <a href="'.base_url().'entrar/activar/'.$id.'/'.$ciphertext.'">Validar informacion</a><br>
						<strong>2.</strong> En ese enlace debes Proporcionar informacion de tu cuenta.<br>
						<strong>3.</strong> Sigue los Pasos que se muestran.<br>
						<strong>4.</strong> Una vez finalizado el proceso acceder al sistema <a href="http://voiparkas.com/shistoria">Historias Clinicas</a><br>
					</p>
					<br>
					<h3>Para mas informacion Visita Nuestra Pagina. <a href="https://voiparkas.com/desarrollo/">Productos Relacionados</a></h3>
					'
					);

				if ($this->email->send())
				{
					echo "1";
				}
				else
				{
					$e=$this->email->print_debugger();
					// echo "0".$e;
					echo "0";
				}
			}
			else
			{
				echo "no";
			}
		}
		function actualizar_activar(){
			$id=$this->input->post('id');
			$celular=$this->input->post('celular');
			
			$rs=$this->entrar_model->actualizar_cuenta($id,$celular);
			// echo json_encode($datos);
			echo $rs;
		}
	}
?>