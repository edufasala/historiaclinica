<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>H. Clinica | Registrarse</title>
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
    <body class="hold-transition register-page">
        <div class="register-box">
          <div class="register-logo"></br>
            <img class="mb-4" src="<?php echo base_url();?>assets/img/logo2.png" alt="" width="200" height="70"></br>
            <a href="<?php echo base_url();?>"><b>Historias</b> Clinicas</a>
          </div>

          <div class="card">
            <div class="card-body register-card-body">
              <!-- <p class="login-box-msg">Registrarse en Historias Clinicas</p> -->

              <form id="rdem2" action="#" method="post" onsubmit="return inusuario();">
                <div class="">
                  <!-- <label for="nombre" class="col-form-label"><strong>Nombres:</strong></label> -->
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nombres" id="elnombre" name="elnombre" minlength="2" maxlength="35" pattern="\S[A-Za-z ]{2,35}" required/>
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                        </span>
                    </div>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Apellidos" id="elape" name="elape" minlength="2" maxlength="35" pattern="\S[A-Za-z ]{2,35}" required/>
                  <div class="input-group-append">
                      <span class="input-group-text">
                          <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                      </span>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input type="email" class="form-control" id="corre" name="corre" aria-describedby="emailHelp" placeholder="ejemplo@hotmail.com" required="">
                  <div class="input-group-append">
                      <span class="input-group-text">
                          <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                      </span>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input type="password" class="form-control" placeholder="ctr2****" id="lacl" name="lacl" pattern="^(?=.*\d)(?=.*[A-Za-z0-9])(?!.*\s).*$" minlength="6" maxlength="10" required/>
                  <div class="input-group-append">
                      <span class="input-group-text">
                          <!--<img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">-->
                          <a id="uno" name="uno" onclick="retro()"style="display:none"><img src="<?php echo base_url();?>assets/img/iconos/oj.png" width="20px" height="20px"></a>
                          <a id="dos" name="dos" onclick="hago()" ><img src="<?php echo base_url();?>assets/img/iconos/nooj.png" width="20px" height="20px"></a>
                      </span>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <label class="col-form-label"><strong>Sexo:</strong></label>
                  <div class="input-group">
                    <select class="form-control" id="sex" name="sex" required>
                      <option selected value="0">Elija</option>
                      <option value="m">M</option>
                      <option value="f">F</option>
                    </select>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                      </span>
                    </div>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <label for="nota" class="col-form-label"><strong>Fecha de Nacimiento:</strong></label>
                  <div class="input-group">
                    <input size="" type="date" class="form-control" id="fnaci" name="fnaci" onchange="calcularedad4()" required/>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                      </span>
                    </div>
                  </div>
                </div>
               
                <!-- <label for="nota" class="col-form-label"><strong>Edad:</strong></label> -->
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="0" id="edad" name="edad" readonly="" required/> 
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                    </span>
                  </div>
                </div>
               
                <!-- <label for="celular" class="col-form-label"><strong>Telefono/Celular:</strong></label> -->
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="317002001." id="elcelular" name="elcelular" title="Solo Numeros min:10 max:10" pattern="[0-9]{10}" maxlength="10" required/>
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                    </span>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <label class="col-form-label"><strong>Tipo de Usuario:</strong></label>
                  <div class="input-group">
                    <select class="form-control" id="tpusu" name="tpusu" required>
                      <option selected value="0">Elija</option>
                      <option value="3">Medico</option>
                      <option value="2">Enfermero(a)</option>
                      <option value="1">Empleado(a)</option>
                    </select>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                      </span>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-3">
                  </div>
                  <!-- /.col -->
                  <div class="col-12">
                    <button type="submit" id="btngdinusuario" class="btn btn-azul btn-block">Registrarse</button>
                  </div>
                  <!-- /.col -->
                </div>
              </form>
              <div id="content"></div>
              <a href="<?php echo base_url();?>entrar" class="text-center">Ir al Login</a>
            </div>
            <!-- /.form-box -->
          </div><!-- /.card -->
        </div>
        <!-- /.register-box -->

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
