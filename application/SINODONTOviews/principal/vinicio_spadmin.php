    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sp. Administrador</h1>
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
        $thc=$cn['hc'];
        $tev=$cn['ev'];
        $thcef=$cn['hc_enf'];
        $tvs=$cn['visita'];
        $ttra=$cn['empleado'];
        $tmed=$cn['medico'];
        $tenf=$cn['enfermera'];
        $tad=$cn['administrador'];
        $tspad=$cn['spadministrador'];
      ?>
     
      <div class="card">
         
      </div>
        <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box btn-azul">
              <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

              <div class="info-box-content"><a href="<?php echo base_url();?>conadministrador/administrador">
                <span class="info-box-text">Administradores</span>
                <span class="info-box-number" id="mp"><?php echo $tad ?></span>

                <div class="progress">
                  <!-- <div class="progress-bar" style="width: 10%"></div> -->
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
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box btn-verde" >
              <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

              <div class="info-box-content"><a href="<?php echo base_url();?>registro/historia_clinica">
                <span class="info-box-text">Historias 1° Vez</span>
                <span class="info-box-number" id="ma"><?php echo $thc ?></span>

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
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box btn-morado">
              <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>

              <div class="info-box-content"><a href="<?php echo base_url();?>registro/evolucion_medica">
                <span class="info-box-text">Historias Clinicas</span>
                <span class="info-box-number" id="mct"><?php echo $tev ?></span>

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
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box btn-rosado" >
              <span class="info-box-icon"><i class="fas fa-comments"></i></span>

              <div class="info-box-content"><a href="<?php echo base_url();?>registro/visita">
                <span class="info-box-text">Historia Enf</span>
                <span class="info-box-number" id="mc"><?php echo $tvs ?></span>

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
          <!-- pacientes con citas para hoy al igual que citas atendidas hoy canceladas y cuantas terminar las validaciones
          todas luego el mensaje al ver el perfil luego validar las url  -->
        </div>
      
        <div class="form-group col-md-6">
          
        </div>
        <div class="row">
          <div class="col-md-6">
              <div class="card card-success">
                  <div class="card-header">
                    <h5 class="card-title">Usuarios del Sistema Hasta <?php echo date('M');?></h5>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </div>
                  </div>
                  <div class="card-body">
                      <canvas id="chart-area" style="display: block; width: 386px; height: 193px;" width="772" height="386" class="chartjs-render-monitor"></canvas>
                  </div>
              </div>
          </div>
          <div class="col-md-6">
              <div class="card card-secondary">
                  <div class="card-header">
                    <h5 class="card-title">Registros del Sistema Hasta <?php echo date('M');?></h5>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </div>
                  </div>
                  <div class="card-body">
                      <canvas id="canvas3" style="display: block; width: 723px; height: 361px;" width="1446" height="722" class="chartjs-render-monitor"></canvas>
                  </div>
              </div>
          </div>
          <input type="text" class="form-control" id="elmes" name="elmes" style="display:none" value="<?php echo date('m');?>" />
          <input type="text" class="form-control" value="<?php echo $ttra ?>" id="templeado" name="templeado" style="display:none" />
          <input type="text" class="form-control" value="<?php echo $tenf ?>" id="tenfermera" name="tenfermera" style="display:none" />
          <input type="text" class="form-control" value="<?php echo $tmed ?>" id="tmedico" name="tmedico" style="display:none" />
          <input type="text" class="form-control" value="<?php echo $tad ?>" id="tadmin" name="tadmin" style="display:none" />
          <input type="text" class="form-control" value="<?php echo $tspad ?>" id="tsuper" name="tsuper" style="display:none" />

          <input type="text" class="form-control" value="<?php echo $thc ?>" id="nhc" name="nhc" style="display:none" />
          <input type="text" class="form-control" value="<?php echo $tev ?>" id="nev" name="nev" style="display:none" />
          <input type="text" class="form-control" value="<?php echo $thcef ?>" id="nhcenf" name="nhcenf" style="display:none" />
          <input type="text" class="form-control" value="<?php echo $tvs ?>" id="nvs" name="nvs" style="display:none" />
        </div>
    </div>
    </div>
    </div>
    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
      mes=$('#elmes').val();
      obmes=letrames(mes);
      //console.log(elmayor(msm));

      vect=[$('#nhc').val(),$('#nev').val(),$('#nhcenf').val(),$('#nvs').val()];
      // console.log("m:"+elmayor(vect));
      // console.log("mn:"+elmenor(vect));
      
      window.onload = function() {
        document.title="Inicio | H. Clinica";
        // $('#mp').html('3');
        // $('#ma').html('2');
        // $('#mct').html('1');
        // $('#mc').html('9');

        var ctx3 = document.getElementById('canvas3').getContext('2d');
        window.myBar = new Chart(ctx3, {
          type: 'bar',
          data: barChartData,
          options: {
            responsive: true,
            legend: {
              position: 'bottom',// los valores de la estadistica abajo o arriba
            },
            title: {
              display: true,
              // text: 'Todos los Registros del Sistema Hasta '+obmes
            },
            scales: {
              yAxes: [{
                ticks: {
                  min: 0,
                  max: elmayor(vect)
                }
              }]
            }
          }
        });

        var ctx4 = document.getElementById('chart-area').getContext('2d');
        window.myPie = new Chart(ctx4, config3);


      };
      
      //barras
      var MONTHS = ['H. Clinica 1° Vez', 'H. Clinica', 'H.C Enf 1° Vez' , 'H. Clinica Enf'];
      var color = Chart.helpers.color;
      var barChartData = {
        labels: ['Nº Registros'/*, 'Pacientes', 'H. Clinica', 'E. Medica', 'Visitas', 'Trabajadores', 'Medicos'*/],
        datasets: [{
          label: 'H. Clinica 1° Vez',
          backgroundColor: color('#59cbff').alpha(0.1).rgbString(),//'#4F5AD8'
          borderColor: '#59cbff',
          borderWidth: 2,
          data: [$('#nhc').val()]
        }, {
          label: 'H. Clinica',
          backgroundColor: color('#adf7bb').alpha(0.5).rgbString(),//'#4F5AD8'
          borderColor: '#adf7bb',
          borderWidth: 1,
          data: [$('#nev').val()]
        }, {
          label: 'H.C Enf 1° Vez',
          backgroundColor: color('#ae80ff').alpha(0.5).rgbString(),//'#4F5AD8'
          borderColor: '#ae80ff',
          borderWidth: 1,
          data: [$('#nhcenf').val()]
        }, {
          label: 'H. Clinica Enf',
          backgroundColor: color('#F2D7D5').alpha(0.5).rgbString(),//'#4F5AD8'
          borderColor: '#F2D7D5',
          borderWidth: 1,
          data: [$('#nvs').val()]
        }]

      };

      //circular
      var config3 = {
        type: 'pie',
        data: {
          datasets: [{
            data: [
              $('#templeado').val(),
              $('#tenfermera').val(),
              $('#tmedico').val(),
              $('#tadmin').val(),
              $('#tsuper').val()
            ],
            backgroundColor: [
              '#59cbff',
              '#adf7bb',
              '#ae80ff',
              '#F2D7D5',
              '#fd7e14'
            ],
            label: 'Dataset 1'
          }],
          labels: [
            'Empledados',
            'Enfermeras',
            'Medicos',
            'Administradores',
            'Sp. Administradores'
          ]
        },
        options: {
          responsive: true,
            legend: {
            position: 'bottom',// los valores de la estadistica abajo o arriba
            },
          title: {
            display: true,
            text: 'Total de Personas en el Sistema'
            }
        }
      };

      // window.onload = function() {
      //  var ctx = document.getElementById('chart-area').getContext('2d');
      //  window.myDoughnut = new Chart(ctx, config);
      // };

      //Datasets (line) para mostrar los datos con una tabla
      
      function elmayor(v){
        m=0;
        for (var i = 0; i < v.length; i++)
        {
          // console.log(v[i]);
          if(v[i]>m)
          {
            // if(m==m)
            // {
            //  m=v[parseInt(i) + parseInt(1)];
            // }
            // else
            // {
            //  m=v[i];
            // }
            m=parseInt(v[i]);
          }
          // else if(v[i]==m)
          // {
          //  m=v[i+1];
          // }
          // else
          // {
          //  m=v[i];
          // }
        }
        return m;
      }
      function elmenor(v){
        m=0;
        for (var i = 0 ; i < v.length; i++)
        {
          // console.log(v[i]);
          if(v[i]>m)
          {
            m=parseInt(v[i]);
          }
          // else if(v[i]==m)
          // {
          //  m=v[i+1];
          // }
          else
          {
            m=parseInt(v[i]);
          }
        }
        return m;
      }
      function letrames(m){
        var quemes="";
        if(m==01)
        {
          quemes="Enero";
        }
        else if(m==02)
        {
          quemes="Febrero";
        }
        else if(m==03)
        {
          quemes="Marzo";
        }
        else if(m==04)
        {
          quemes="Abril";
        }
        else if(m==05)
        {
          quemes="Mayo";
        }
        else if(m==06)
        {
          quemes="Junio";
        }
        else if(m==07)
        {
          quemes="Julio";
        }
        else if(m==08)
        {
          quemes="Agosto";
        }
        else if(m==09)
        {
          quemes="Septiembre";
        }
        else if(m==10)
        {
          quemes="Octubre";
        }
        else if(m==11)
        {
          quemes="Noviembre";
        }
        else if(m==12)
        {
          quemes="Diciembre";
        }
        return quemes;
      }
    </script>