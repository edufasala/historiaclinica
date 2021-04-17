    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registrar Nota Medico</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Nota Medico</a></li>
              <li class="breadcrumb-item active">Registrar Nota Medico</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="wrapper">
    <div class="col-12">
    <div class="card">
      <?php
        date_default_timezone_set("America/Bogota");
        $now = time();
        $getfecha=date("Y-m-d");
        $gethora=date("h:i:s");
      ?>
      <form action="#" method="post" >
              <div class="form-row p-2">
                <div class="form-group col-md-3">
                  <label for="" class="col-form-label">Debe Seleccionar al Paciente:</label>
                  <button type="button" id="selecpc" class="btn btn-azul" data-toggle="modal" data-target="#seleciona">SELECCIONAR PACIENTE</button>
                </div>
                <div class="form-group col-md-2">
                  <label class="col-form-label"><strong>Tipo de Documento</strong></label>
                  <select class="form-control" id="tdoc" name="tdoc" readonly="">
                    <option selected value="0">Eliga</option>
                  </select>
                </div>
                <div class="form-group col-md-3">
                  <label class="col-form-label"><strong>N° de Documento</strong></label>
                  <div class="input-group">
                    <div class="input-group-prepend"><!--al inicio prepend y append al final-->
                        <span class="input-group-text">
                            <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="100100010" id="ndoc" name="ndoc" readonly="" required/>
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <label for="nombre" class="col-form-label"><strong>Nombres/Apellidos</strong></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Nombres Apellidos" id="elnombre" name="elnombre" readonly="" required/>
                  </div>
                </div>
                 <div class="form-group col-md-4">
                  <label class="col-form-label"><strong>Tipo de Tratamiento</strong></label>
                  <select class="form-control" id="ttrata" name="ttrata" readonly="">
                    <option selected value="0">Eliga</option>
                  </select>
                </div>

                <div class="form-group col-md-12"></div>
                <div class="form-group col-md-5">
                  <label class="col-form-label"><strong>Fecha de la Nota:</strong></label>
                  <input size="16" type="date" class="form-control" id="fchct" value="<?php echo $getfecha;?>" readonly="">
                </div>
                <div class="form-group col-md-5">
                  <label class="col-form-label"><strong>Hora de la Nota:</strong></label>
                  <input size="16" type="time" class="form-control" min="00:00" max="17:60" value="<?php echo $gethora;?>"  step="1" id="lahr" readonly="">
                </div>
                
                <div class="form-group col-md-10">
                  <label for="nota" class="col-form-label"><strong>Nota de Medico:</strong></label>
                  <textarea class="form-control" id="lanota" max="1000" required></textarea>
                </div>
                <div class="form-group col-sm-12"></div>
                <div class="form-group col-sm-2">
                  <button type="button" id="btnregnota" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmar">REGISTRAR</button>
                </div>
                <div class="form-group col-md-2">
                  <button type="button" class="btn btn-danger" onclick="p()">CANCELAR</button>
                </div>
              
              </div>
            </form>
          <div class="modal fade" id="seleciona" tabindex="-1" role="dialog" aria-labelledby="vtitulo" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
              <!--<form action="#" method="" onsubmit="">-->
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" >Buscar Paciente</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                    <div class="container">   
                      <div class="row">
                        <div class="col-md-12">
                          <label class="col-form-label"><strong>Buscar por Nombre o Documento</strong></label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                            </div>
                            <input type="text" id="nombres" id="nombres" class="form-control" onkeyup="solopac5()" />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <label class="col-form-label"><strong>Resultado</strong></label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-12" id="carga" style="display:none">
                          <div class="text-center">
                            <div class="spinner-border text-success" role="status">
                              <span class="sr-only">Cargando...</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12" id="miresultado">
                          <?php
                          ?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <!--<button type="submit" class="btn btn-primary" onclick="">SELECCIONAR</button>-->
                  </div>
                </div>
              <!--</form>-->
            </div>
          </div>
          <div class="modal" id="confirme" tabindex="-1" role="dialog">
          </div>
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
                <h5 class="text">Estas Seguro de Registrar Esta Nota</h5>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" onclick="innota();"> Si </button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </div>
              </div>
            </div>
          </div>
          <div id="content"></div>
    </div>
    </div>
    </div>