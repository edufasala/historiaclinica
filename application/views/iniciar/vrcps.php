<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>H. Clinica | Restablecer</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/alertifyjs/css/alertify.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/alertifyjs/css/themes/default.css">
      <script type="text/javascript" src="<?php echo base_url();?>assets/alertifyjs/alertify.js"></script>
      <link rel="icon" href="<?php echo base_url();?>assets/img/logo2.png"/>

      <!-- Font Awesome -->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/fontawesome-free/css/all.min.css">
      <!-- Ionicons -->
      <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
      <!-- icheck bootstrap -->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/adminlte.min.css">

    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
          <div class="login-logo">
            <img class="mb-4" src="<?php echo base_url();?>assets/img/logo2.png" alt="" width="200" height="70"></br>
            <a href="<?php echo base_url();?>"><b>Historias</b> Clinicas</a>
          </div>
          <!-- /.login-logo -->
          <div class="card">
            <div class="card-body login-card-body">
              <p class="login-box-msg">Olvidaste tu Contraseña? Escribe tu Correo, Para recuperar tu Contraseña.</p>

              <form action="#" method="post" onsubmit="return validarcr();"><!--inenviarcl(); -->
                <div class="input-group mb-3">
                  <input type="email" class="form-control" id="corre" name="corre" aria-describedby="emailHelp" placeholder="ejemplo@hotmail.com" required="">
                  <div class="input-group-append">
                      <span class="input-group-text">
                          <!--<img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">-->
                           <span class="fas fa-envelope"></span>
                      </span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <button type="submit" id="btngdrecuperar" class="btn btn-azul btn-block">Recuperar Contraseña</button>
                  </div>
                  <!-- /.col -->
                </div>
              </form>
              <div id="content"></div>
              <p class="mt-3 mb-1">
                <a href="<?php echo base_url();?>entrar">Ir al Login</a>
              </p>
              <p class="mb-0">
                <a href="<?php echo base_url();?>entrar/registrar" class="text-center">Registrate</a>
              </p>
            </div>
            <!-- /.login-card-body -->
          </div>
        </div>

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
    <script type="text/javascript">
      
    </script>
    </body>
</html>
