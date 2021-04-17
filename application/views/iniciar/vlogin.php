<!DOCTYPE html>
<html lang="es">
	<head>
	  	<meta charset="utf-8">
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	  	<title>H. Clinica | Login</title>
	  	<!-- Tell the browser to be responsive to screen width -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/alertifyjs/css/alertify.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/alertifyjs/css/themes/default.css">
		<script type="text/javascript" src="<?php echo base_url();?>assets/alertifyjs/alertify.js"></script>
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
		<link rel="icon" href="<?php echo base_url();?>assets/img/logo2.png"/>

	  	<!-- Font Awesome -->
	  	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/fontawesome-free/css/all.min.css">
	  	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	  	<!-- Theme style -->
	  	<link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/adminlte.min.css">
	  	
	</head>

	<body class="hold-transition login-page" style="background:url('<?php echo base_url();?>/assets/img/fondote.jpg'); background-size: cover;">
	<div class="login-box" style="background:url('<?php echo base_url();?>/assets/img/fondo.jpg')"><!-- style="background-image:url('img/piel.jpg'); width: 100%; height: ;" --> 
 	 <div class="login-box-msg" style="background:white">
	  <div class="login-logo mt-2" style="">
	  	<img class="mb-4" src="<?php echo base_url();?>assets/img/logo2.png" alt="" width="280" height="150"></br>
	    <!-- <a href="<?php echo base_url();?>"><b>Historias</b> Clinicas</a> -->

	  </div>
	 </div>
	  <!-- /.login-logo -->
	  <div class="card card-primary">
	    <div class="card-body login-card-body ">
	      <p class="login-box-msg">Ingresa tus datos para Acceder !</p>
	      <form id="rdem" onsubmit="return validar();" method="post">
	        <div class="input-group mb-3">
	          <!-- <input type="email" class="form-control" placeholder="Email"> -->
	          <input type="email" class="form-control" id="corre" placeholder="ejemplo@hotmail.com" onpaste="return false" required autofocus>
	          <div class="input-group-append">
	            <div class="input-group-text">
	              <span class="fas fa-envelope"></span>
	            </div>
	          </div>
	        </div>
	        <div class="input-group mb-3">
	          <!-- <input type="password" class="form-control" placeholder="Password"> -->
	          <input type="password" class="form-control" placeholder="ctr2****"  id="lacl" onpaste="return false" pattern="^(?=.*\d)(?=.*[A-Za-z0-9])(?!.*\s).*$" minlength="6" maxlength="10" required />
	          <div class="input-group-append">
	            <div class="input-group-text">
	              <span class="fas fa-lock"></span>
	            </div>
	          </div>
	        </div>
	        <div class="">
	        <div class="col-md-12 text-center">
				<div class="g-recaptcha" data-sitekey="6LclBgAaAAAAANtn8Ns1nMWJQpYjSRujKvMknbbA"></div>			</div>
			</div>
	        <div class="col-md-12 text-center" id="carga" style="display:none">
				<button class="btn btn-danger" type="button" disabled>
				  	<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
				  	Vericando Informacion...
				</button>
				<p></p>
			</div>
	        <div class="p-1">
			</div>
	        <div class="row">
	          <div class="col-12">
	            <button type="submit" id="btningresar" class="btn btn-azul btn-block btn-center">Ingresar</button>
	          </div>
	        </div>
	      </form>

	      <p class="mb-1">
	        <a href="<?php base_url();?>entrar/recuperar">Olvide mi Contraseña</a>
	      </p>
	      <p class="mb-0">
	        <a href="<?php base_url();?>entrar/registrar" class="text-center">Registrarme</a>
	      </p>
	      <p class="mb-0">
	        <a href="https://voiparkas.com/desarrollo/" target="_blank" class="text-center">Solicitar Usuario</a>
	      </p>
	      <p class="mt-3 mb-3 text-muted">&copy; 2020 Arkas Comunicaciones</p>
	    </div>
	  </div>
	</div>
	<div id="content"></div>

	<!-- jQuery -->
	<script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
	<!-- <script type="text/javascript" src="<?php echo base_url();?>assets/js/popper.min.js"></script> -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/funciones.js"></script>
	
	</body>
</html>
