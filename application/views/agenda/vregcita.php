    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registrar Cita</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Agenda</a></li>
              <li class="breadcrumb-item active">Asignar Cita</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php
        $campos = json_decode(json_encode($cn), True);
        // $n=$nombres;
        // $ax=explode(" ", $n);
        // $n=$ax[0];
        // echo ":".$cn[0]->id_empleado.$cn[0]->nombres;
        foreach ($cn['md'] as $fila) {
          // echo $fila->registro_nombres;
        }
         // echo ":".var_dump($cn['md']);
      ?>
    <div class="wrapper">
    <div class="col-12">
    <div class="card">
      <form action="#" method="post" >
              <div class="form-row p-2">
                <div class="form-group col-md-5">
                  <label for="nombre" class="col-form-label"><strong>Selecciona un Paciente:</strong></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                        </span>
                    </div>
                    <!-- <input type="text" class="form-control" placeholder="Nombres Apellidos" id="elnombre" minlength="2" maxlength="35" pattern="\S[A-Za-z ]{2,35}" required/> -->
                    <select class="form-control" id="elnombre" name="elnombre" required>
                      <option selected value="0">Elija</option>
                      <?php
                        foreach ($cn['pc'] as $fila) {
                          echo '<option value="'.$fila->doc_paciente.'">'.ucwords($fila->pnombre_paciente).' '.ucwords($fila->snombre_paciente).', '.ucwords($fila->papellido_paciente).' '.ucwords($fila->sapellido_paciente).'</option>';
                        }
                      ?>
                      <!-- <option value="c">Consulta</option>
                      <option value="e">Examenes</option>
                      <option value="r">Resultados</option>
                      <option value="v">Valoracion</option> -->
                    </select>
                  </div>
                </div>
                <div class="form-group col-md-5">
                  <label class="col-form-label" for="inputGropuSelect01"><strong>Tipo de Tratamiento:</strong></label>
                  <select class="form-control" id="tipocita" name="tipocita" required>
                    <option selected value="0">Elija</option>
                    <option value="c">Consulta</option>
                    <option value="e">Examenes</option>
                    <option value="r">Resultados</option>
                    <option value="v">Valoración</option>
                  </select>
                </div>
                <div class="form-group col-md-5">
                  <label for="nombre" class="col-form-label"><strong>Selecciona el Profesional:</strong></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                        </span>
                    </div>
                    <!-- <input type="text" class="form-control" placeholder="Nombres Apellidos" id="elnombre" minlength="2" maxlength="35" pattern="\S[A-Za-z ]{2,35}" required/> -->
                    <select class="form-control" id="elnombref" name="elnombref" required>
                      <option selected value="0">Elija</option>
                      <?php
                        foreach ($cn['md'] as $fila2) {
                          if($fila2->registro_tipo=="2")
                          {
                            echo '<option value="'.$fila2->id.'">Enfermero(a) '.ucwords($fila2->registro_nombres).', '.ucwords($fila2->registro_apellidos).'</option>';
                          }
                          else if($fila2->registro_tipo=="3")
                          {
                            echo '<option value="'.$fila2->id.'">Medico(a) '.ucwords($fila2->registro_nombres).', '.ucwords($fila2->registro_apellidos).'</option>';
                          }
                          else if($fila2->registro_tipo=="5" )
                          {
                            echo '<option value="'.$fila2->id.'">Odontologo(a) '.ucwords($fila2->registro_nombres).', '.ucwords($fila2->registro_apellidos).'</option>';
                          }                               
                        }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="form-group col-md-5">
                  <label class="col-form-label"><strong>Fecha de la Cita:</strong></label>
                  <input size="16" type="date" class="form-control" id="fchct" name="fchct" required>
                </div>
                <div class="form-group col-md-5">
                  <label class="col-form-label"><strong>Hora de la Cita:</strong></label>
                  <input size="16" type="time" class="form-control" min="00:00" max="17:00" step="1" id="lahr" name="lahr" required>
                </div>
                <div class="form-group col-md-5">
                  <label for="celular" class="col-form-label"><strong>Celular:</strong></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="3170020001" id="elcelular" name="elcelular" title="Solo Numeros min:10 max:10" pattern="[0-9]{10}" maxlength="10" required />
                  </div>
                </div>
                <div class="form-group col-md-5">
                  <label for="nota" class="col-form-label"><strong>Nota:</strong></label>
                  <textarea class="form-control" id="lanota" onkeypress="return cmTexto(event);" required></textarea>
                </div>
                <div class="form-group col-sm-12"></div>
                <div class="form-group col-sm-2">
                  <button type="button" id="btngdcita" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmar">AGENDAR</button>
                </div>
                <div class="form-group col-md-2">
                  <button type="button" class="btn btn-danger" onclick="p()">CANCELAR</button>
                </div>
              
              </div>
            </form>
            <div class="modal" id="confirmar" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                <div class="modal-body">
                  <h5 class="text">Estas Seguro de Registrar Esta Cita</h5>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="incita();"> Si </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                  </div>
                </div>
              </div>
            </div>
            <div id="content"></div>
    </div>
    </div>
    </div>
    <script type="text/javascript">
          
          window.onload = function() { 
            $('#elnombre').select2(); 
            $('#elnombref').select2();          
          }
    </script>