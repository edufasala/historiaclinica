<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>H. Clinica | Activar</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/alertifyjs/css/alertify.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/alertifyjs/css/themes/default.css">
      <script type="text/javascript" src="<?php echo base_url();?>assets/alertifyjs/alertify.js"></script>
      <link rel="icon" href="<?php echo base_url();?>assets/img/logo2.png"/>

      <!-- Font Awesome -->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/fontawesome-free/css/all.min.css">
     
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
              <p class="login-box-msg">Para activar tu Cuenta. Verifica que esta cuenta te pertenece</p>
              <?php
                
                $tx=$this->uri->segment(4);
                
                $x=$this->encryption->decrypt($tx);
                $sp=substr($x,6,9);
                
              ?>
              <form id="iniciar" action="#" method="post" onsubmit="return validarcr();"><!--inenviarcl(); -->
                <input type="text" class="form-control" id="corre" name="corre" value="<?php echo $this->uri->segment(3);?>" style="display:none" readonly="">
                <label>Enviar Sms al Celular Terminado en</label>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" id="elcelular" name="elcelular" value="<?php echo $x;?>" style="display:none" readonly="" />
                  <input type="text" class="form-control" placeholder="0001." id="" name="" value="******<?php echo $sp;?>" title="Solo Numeros min:10 max:10" pattern="[0-9]{10}" maxlength="10" readonly="" />
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                    </span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <button type="button" class="btn btn-azul btn-block" onclick="enviarcodigosmsactivar()">Enviar SMS</button>
                  </div>
                </div>
              </form>
              <form id="validar" action="#" method="post" style="display:none">
                <label>Ingresa El Codigo de verificacion</label>
                <p>Recibiste un codigo de 6 digitos por SMS</p>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="002001" id="elcod" name="elcod" title="Solo Numeros min:10 max:10" pattern="[0-9]{10}" maxlength="10" required/>
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                    </span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <button type="button" class="btn btn-azul btn-block" onclick="validarcodigo2()">Validar Codigo</button>
                    <input type="text" class="form-control"  id="elcelular2" name="elcelular2" value="<?php echo $x;?>" style="display:none" readonly="" />
                  </div>
                </div>
                <p></p>
                <div class="row">
                  <div class="col-12">
                    <button type="button" id="btnotravez2" class="btn btn-azul btn-block" disabled="true" onclick="enviarcodigosms2()">Renviar SMS <span><label id="conta2" name="conta2" class="alert"></label></span></button>
                  </div>
                </div>
              </form>
              <!-- <p class="mt-3 mb-1">
                <a href="<?php echo base_url();?>entrar">Ir al Login</a>
              </p>
              <p class="mb-0">
                <a href="<?php echo base_url();?>entrar/registrar" class="text-center">Registrate</a>
              </p> -->
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
