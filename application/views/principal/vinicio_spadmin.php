    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Odontología</h1>
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
        $getfecha2="2020-07-23";
        $fef=date('j \of M \of Y');
        $campos = json_decode(json_encode($cn), True);        
        $cantpaciente=$cn['paciente'];  
        $atendidadhc=$cn['historia'];
        $atendidadev=$cn['evoluciones'];
        $tatencion=$atendidadhc+$atendidadev;
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
       
        // echo ": ".$poract;
      // var_dump($r);
      ?>
        <div class="row">

          <!-- SI TIENE CITAS PENDIENTES -->
          <div class="col-md-6 " style="display:<?php echo $mivr;?>">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Estado de las Citas</h5>
                <p class="card-text">Se debe actualizar el estado de las citas. <a href="<?php echo base_url();?>conagenda" class="btn btn-azul">Ir a Consultar Cita </a></p>
              </div>
            </div>            
          </div>
          <div class="col-md-3 col-sm-6 col-md-3" style="display:none">
              <div class="info-box btn-morado mb-3" style="">
                <span class="info-box-icon"><i class="far fa-copy"></i></span>
                <span class="info-box-icon"><i class="far fa-bookmark"></i></span>
                <div class="info-box-content"><a href="<?php echo base_url();?>conpaciente">
                  <span class="info-box-text">Pacientes</span>
                  <span class="info-box-number"><?php echo $cantpaciente?></span>
                   <div class="progress">
                  <!-- <div class="progress-bar" style="width: 10%"></div> -->
                </div></a>
                </div>
                <!-- /.info-box-content -->
              </div>
          </div>

          <div class="col-md-12 text-center" style="display:none">
            <div class="card-group">
              <div class="card ">
                <a href="<?php echo base_url();?>conpaciente" class=""><img src="<?php echo base_url();?>assets/img/ic_pacientes.png" class="mt-4 mx-auto" alt="Pacientes Card image cap"  width="100" ></a>
                <div class="card-body">
                 <a href="<?php echo base_url();?>conpaciente" class=""><h5 class="">Pacientes</h5></a>
                </div>
              </div>
              <div class="card">
                <a href="<?php echo base_url();?>historia_odonto" class=""><img src="<?php echo base_url();?>assets/img/ic_historia.png" class="mt-4 mx-auto" width="100" ></a>
                <div class="card-body">
                  <a href="<?php echo base_url();?>historia_odonto" class=""><h5 class="">Historia Clinica Primera Vez</h5></a>
                </div>
              </div>
              <div class="card ">
                <a href="<?php echo base_url();?>registro/historia_clinica" class=""><img src="<?php echo base_url();?>assets/img/ic_registros.png" class="mt-4 mx-auto" alt="registro/historia_clinicas Card image cap"  width="100" ></a>
                <div class="card-body">
                 <a href="<?php echo base_url();?>registro/historia_clinica" class=""><h5 class="">Reportes</h5></a>
                </div>
              </div>
            </div>
            <div class="card-group">
              
              <!-- <div class="card">
                <a href="<?php echo base_url();?>diagnostico" class=""><img src="<?php echo base_url();?>assets/img/ic_dig.png" class="mt-4 mx-auto" width="100" ></a>
                <div class="card-body">
                  <a href="<?php echo base_url();?>diagnostico" class=""><h5 class="">Diagnosticos</h5></a>
                </div>
              </div>
              <div class="card">
                <a href="<?php echo base_url();?>medicamento" class=""><img src="<?php echo base_url();?>assets/img/ic_med.png" class="mt-4 mx-auto" width="100"></a>
                <div class="card-body">
                  <a href="<?php echo base_url();?>medicamento" class=""><h5 class="">Medicamentos</h5></a>
                </div>
              </div> -->
            </div>
          </div>

          <div id="rta">
            <!-- <input type="text" class="form-control" id="hc" name="hc" value="<?php echo $atendidadhc?>"  style="display:none"/>
            <input type="text" class="form-control" id="ev" name="ev" value="<?php echo $atendidadev?>" style="display:none"/>
            <input type="text" class="form-control" id="rc" name="rc" value="<?php echo $atendidadrc?>" style="display:none"/> -->
          </div>
        </div>

    </div>
    </div>
    </div>

    <script type="text/javascript">
      window.onload = function() {
        document.title="Inicio | H. Clinica";
      }
    </script>