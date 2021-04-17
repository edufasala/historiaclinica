    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Administrativo</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <!-- <li class="breadcrumb-item active">Consultar Perfil</li> -->
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="wrapper">
    <div class="col-12">
    <div class="">
      <?php
        date_default_timezone_set("America/Bogota");
        $now = time();
        $getfecha=date("Y-m-d");
        $fef=date('j \of M \of Y');
        $campos = json_decode(json_encode($cn), True);
        
        $cantagenda=$cn['agenda'];
        $cantpaciente=$cn['paciente'];
        $cantvisita=$cn['visita'];
        $cantcancelada=$cn['cancelada'];   
        $poract=$cn['e'];
        $mivr="";
        if($poract=="0")
        {
          $mivr="none";
        }
        else
        {
          $mivr="block";
        }
      ?>
      <div class="card">
         
      </div>
        <div class="row">
          <div class="col-md-6 " style="display:<?php echo $mivr;?>">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Estado de las Citas</h5>
                <p class="card-text">Se debe actualizar el estado de las citas. <a href="<?php echo base_url();?>conagenda" class="btn btn-azul">Ir a Consultar Cita </a></p>
              </div>
            </div>            
          </div>
          <div class="col-md-3 col-sm-6 col-12" style="display:none">
            <div class="info-box btn-azul">
              <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

              <div class="info-box-content"><a href="<?php echo base_url();?>conpaciente">
                <span class="info-box-text">Pacientes</span>
                <span class="info-box-number" id="mp"><?php echo $cantpaciente;?></span>

                <div class="progress">
                  <!-- <div class="progress-bar" style="width: 10%"></div> -->
                </div>
                <!-- <span class="progress-description">
                  70% Increase in 30 Days
                </span> --></a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12" style="display:none">
            <div class="info-box btn-verde">
              <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

              <div class="info-box-content"><a href="<?php echo base_url();?>conagenda">
                <span class="info-box-text">Citas</span>
                <span class="info-box-number" id="ma"><?php echo $cantagenda ?></span>

                <div class="progress">
                  <!-- <div class="progress-bar" style="width: 70%"></div> -->
                </div></a>
                <!-- <span class="progress-description">
                  70% Increase in 30 Days
                </span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12" style="display:none">
            <div class="info-box btn-morado">
              <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>

              <div class="info-box-content"><a href="<?php echo base_url();?>registro/visita">
                <span class="info-box-text">Evolucion Enf</span>
                <span class="info-box-number" id="mct"><?php echo $cantvisita?></span>

                <div class="progress">
                  <!-- <div class="progress-bar" style="width: 70%"></div> -->
                </div></a>
               <!--  <span class="progress-description">
                  70% Increase in 30 Days
                </span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12" style="display:none">
            <div class="info-box btn-rosado">
              <span class="info-box-icon"><i class="fas fa-comments"></i></span>

              <div class="info-box-content"><a href="<?php echo base_url();?>conagenda">
                <span class="info-box-text">Citas Canceladas</span>
                <span class="info-box-number" id="mc"><?php echo $cantcancelada?></span>

                <div class="progress">
                  <!-- <div class="progress-bar" style="width: 70%"></div> -->
                </div></a>
                <!-- <span class="progress-description">
                  70% Increase in 30 Days
                </span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- <div class="col-md-12 text-center">
            <div class="card-group">
              <div class="col-md-4">
                <div class="card col-md-4 text-center">
                  <a href="#" class=""><img src="<?php echo base_url();?>assets/img/ic_pc2.png" alt="Pacientes" >
                  Pacientes</a>
                </div> 
              </div>
              <div class="col-md-4">
                <div class="card col-md-4 text-center">
                  <a href="#" class=""><img src="<?php echo base_url();?>assets/img/ic_citas.png" alt="Pacientes" >
                  Citas</a>
                </div>                 
              </div>
              <div class="col-md-4">
                <div class="card col-md-4 text-center">
                  <a href="#" class=""><img src="<?php echo base_url();?>assets/img/ic_registros.png" alt="Pacientes" >
                  Registros</a>
                </div>                 
              </div>
            </div>
          </div> -->
          <div class="col-md-12 text-center" style="display:none">
            <div class="card-group">
              <div class="card ">
                <a href="<?php echo base_url();?>paciente" class=""><img src="<?php echo base_url();?>assets/img/ic_pacientes.png" class="mt-4 mx-auto" alt="Pacientes Card image cap"  width="100" ></a>
                <div class="card-body">
                 <a href="<?php echo base_url();?>paciente" class=""><h5 class="">Pacientes</h5></a>
                </div>
              </div>
              <div class="card">
                <a href="<?php echo base_url();?>agenda" class=""><img src="<?php echo base_url();?>assets/img/ic_citas.png" class="mt-4 mx-auto" width="100" ></a>
                <div class="card-body">
                  <a href="<?php echo base_url();?>agenda" class=""><h5 class="">Citas</h5></a>
                </div>
              </div>
              <div class="card">
                <a href="<?php echo base_url();?>registro/historia_clinica" class=""><img src="<?php echo base_url();?>assets/img/ic_registros.png" class="mt-4 mx-auto" width="100"></a>
                <div class="card-body">
                  <a href="<?php echo base_url();?>registro/historia_clinica" class=""><h5 class="">Reportes</h5></a>
                </div>
              </div>
            </div>
          </div>
         
        </div>
    </div>
    </div>
    </div>
    <script type="text/javascript">
        window.onload=function(){
          document.title="Inicio | H. Clinica";
            // $('#mp').html('3');
            // $('#ma').html('2');
            // $('#mct').html('1');
            // $('#mc').html('9');

           
            // datos=$('#buscar').val();
            // var a="";
            // $.ajax({
            //     type: "POST",
            //     dataType:'json',
            //     url: "http://localhost/shistoria/inicio_empleado/estadisticas_hoy",
            //     success: function(respu) {
                   
            //     }
            // });
        }
    </script>