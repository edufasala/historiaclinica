    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Administrador</h1>
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
        $campos = json_decode(json_encode($cn),true);
        // echo var_dump($campos);
        // echo var_dump($cn); 
        // echo "hc: ".$cn['hc'];
          $tag=$cn['agenda'];
          $tpa=$cn['paciente'];
          $thc=$cn['hc'];
          $tev=$cn['ev'];
          $thcef=$cn['hc_enf'];
          $ttra=$cn['empleado'];
          $tmed=$cn['medico'];
          $tenf=$cn['enfermera'];
          $tvs=$cn['visita'];
      ?>
      <input type="text" class="form-control" id="elmes" name="elmes" style="display:none" value="<?php echo date('m');?>" />
      <input type="text" class="form-control" id="ncitas" name="ncitas" style="display:none" value="<?php echo $tag ?>" />
      <input type="text" class="form-control" id="npac" name="npac" style="display:none" value="<?php echo $tpa?>" />
      <input type="text" class="form-control" id="nhc" name="nhc" style="display:none" value="<?php echo $thc?>" />
      <input type="text" class="form-control" id="nev" name="nev" style="display:none" value="<?php echo $tev?>" />
      <input type="text" class="form-control" id="nhcenf" name="nhcenf" style="display:none" value="<?php echo $thcef?>" />
      <input type="text" class="form-control" id="nvs" name="nvs" style="display:none" value="<?php echo $tvs?>" />
      <input type="text" class="form-control" id="nre" name="nre" style="display:none" value="<?php echo $ttra?>" />
      <input type="text" class="form-control" id="nrm" name="nrm" style="display:none" value="<?php echo $tmed?>" />
      <input type="text" class="form-control" id="nrenf" name="nrenf" style="display:none" value="<?php echo $tenf?>" />

      <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box btn-azul">
              <span class="info-box-icon "><i class="fas fa-calendar-alt"></i></span>

              <div class="info-box-content"><a href="<?php echo base_url();?>conagenda">
                <span class="info-box-text">Citas</span>
                <span class="info-box-number">
                  <?php echo $tag;?>
                  <!-- <small>%</small> -->
                </span>
                 <div class="progress">
                </div></a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box btn-verde mb-3">
              <span class="info-box-icon"><i class="fas fa-copy"></i></span>

              <div class="info-box-content"><a href="<?php echo base_url();?>contrabajador/trabajador">
                <span class="info-box-text">Empleados</span>
                <span class="info-box-number"><?php echo $ttra;?></span>
                 <div class="progress">
                </div></a>
              </div>
              <!-- /.info-box-content -->
             
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box btn-morado mb-3">
              <span class="info-box-icon"><i class="fas fa-book"></i></span>

              <div class="info-box-content"><a href="<?php echo base_url();?>contrabajador/trabajador">
                <span class="info-box-text">Medicos</span>
                <span class="info-box-number"><?php echo $tmed;?></span>
                <div class="progress">
                </div></a>
              </div>
              <!-- /.info-box-content -->
              
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box btn-rosado mb-3">
              <span class="info-box-icon"><i class="fas fa-users"></i></span>

              <div class="info-box-content"><a href="<?php echo base_url();?>contrabajador/trabajador">
                <span class="info-box-text">Enfermeras</span>
                <span class="info-box-number"><?php echo $tenf;?></span>
                <div class="progress">
                </div></a>
              </div>
              <!-- /.info-box-content -->
              
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
      </div>
      <div class="row">
          <div class="col-md-12">
              <div class="card card-secondary">
                  <div class="card-header">
                    <h5 class="card-title">Registro del Sistema Hasta <?php echo date('M');?></h5>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </div>
                  </div>
                  <div class="card-body">
                      <canvas id="canvas3" style="display: block; width: 723px; height: 361px;" width="1446" height="722" class="chartjs-render-monitor"></canvas>
                  </div>
              </div>
          </div>
      </div>
      
    </div>
    </div>
    </div>
    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
      mes=$('#elmes').val();
      obmes=letrames(mes);
      //console.log(elmayor(msm));

      vect=[$('#ncitas').val(),$('#npac').val(),$('#nhc').val(),$('#nev').val(),$('#nhcenf').val(),$('#nvs').val(),$('#nre').val(),$('#nrm').val(),$('#nrenf').val()];
      // console.log("m:"+elmayor(vect));
      // console.log("mn:"+elmenor(vect));
      
      window.onload = function() {
        document.title="Inicio | H. Clinica";
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

      };
      
      //barras
      var MONTHS = ['Citas', 'Pacientes', 'H. Clinica 1° Vez', 'H. Clinica', 'H.C Enf 1° Vez', 'H. Clinica Enf', 'Empleados', 'Medicos','Enfermeras'];
      var color = Chart.helpers.color;
      var barChartData = {
        labels: ['Nº Registros'/*, 'Pacientes', 'H. Clinica', 'E. Medica', 'Visitas', 'Trabajadores', 'Medicos'*/],
        datasets: [{
          label: 'Citas',
          backgroundColor: color('#59cbff').alpha(0.5).rgbString(),//'#D62424'
          borderColor: '#59cbff',
          borderWidth: 1,
          data: [$('#ncitas').val()]
        }, {
          label: 'Pacientes',
          backgroundColor: color('#adf7bb').alpha(0.5).rgbString(),//'#4F5AD8'
          borderColor: '#adf7bb',
          borderWidth: 1,
          data: [$('#npac').val()]
        }, {
          label: 'H. Clinica 1° Vez',
          backgroundColor: color('#ae80ff').alpha(0.1).rgbString(),//'#4F5AD8'
          borderColor: '#ae80ff',
          borderWidth: 2,
          data: [$('#nhc').val()]
        }, {
          label: 'H. Clinica',
          backgroundColor: color('#F2D7D5').alpha(0.5).rgbString(),//'#4F5AD8'
          borderColor: '#F2D7D5',
          borderWidth: 1,
          data: [$('#nev').val()]
        }, {
          label: 'H.C Enf 1° Vez',
          backgroundColor: color('#ae80ff').alpha(0.1).rgbString(),//'#4F5AD8'
          borderColor: '#ae80ff',
          borderWidth: 2,
          data: [$('#nhcenf').val()]
        }, {
          label: 'H. Clinica Enf',
          backgroundColor: color('#D62424').alpha(0.5).rgbString(),//'#4F5AD8'
          borderColor: '#D62424',
          borderWidth: 1,
          data: [$('#nvs').val()]
        }, {
          label: 'Empleados',
          backgroundColor: color('#5F9234').alpha(0.5).rgbString(),//'#4F5AD8'
          borderColor: '#5F9234',
          borderWidth: 1,
          data: [$('#nre').val()]
        }, {
          label: 'Medicos',
          backgroundColor: color('#501335').alpha(0.5).rgbString(),//'#4F5AD8'
          borderColor: '#501335',
          borderWidth: 1,
          data: [$('#nrm').val()]
        },{
          label: 'Enfermeras',
          backgroundColor: color('#59cbff').alpha(0.5).rgbString(),//'#D62424'
          borderColor: '#59cbff',
          borderWidth: 1,
          data: [$('#nrenf').val()]
        }]

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