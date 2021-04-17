    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registrar Medicamento</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Medicamento</a></li>
              <li class="breadcrumb-item active">Agregar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="wrapper">
    <div class="col-12">
    <div class="card">
      <form action="#" method="post" >
              <div class="form-row p-2">
                <div class="form-group col-md-6">
                  <label for="nombre" class="col-form-label"><strong>Nombre:</strong></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <img src="<?php echo base_url();?>assets/img/iconos/producto.png" class="rounded" width="22px" height="22px">
                            
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Calmante" id="elnombre" minlength="2" maxlength="35" pattern="\S[A-Za-z ]{2,35}" required/>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="nombre" class="col-form-label"><strong>Lote:</strong></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <img src="<?php echo base_url();?>assets/img/iconos/detalle.png" class="rounded" width="22px" height="22px">
                            
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="" id="ellote" minlength="2" maxlength="35" pattern="\S[A-Za-z0-9 ]{2,35}" required/>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="nombre" class="col-form-label"><strong>Registro Sanitario:</strong></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <img src="<?php echo base_url();?>assets/img/iconos/detalle.png" class="rounded" width="22px" height="22px">
                            
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="" id="elreg" minlength="2" maxlength="35" pattern="\S[A-Za-z0-9 ]{2,35}" required/>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="nombre" class="col-form-label"><strong>Laboratorio:</strong></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <img src="<?php echo base_url();?>assets/img/iconos/detalle.png" class="rounded" width="22px" height="22px">
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="" id="lab" minlength="2" maxlength="35" pattern="\S[A-Za-z0-9 ]{2,35}" required/>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label class="col-form-label"><strong>Precio de Compra:</strong></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <img src="<?php echo base_url();?>assets/img/iconos/barato.png" class="rounded" width="22px" height="22px">
                      </span>
                    </div>
                    <input type="number" class="form-control" id="elpre" name="elpre" placeholder="1,000" min="0.100"  title="Valor Numerico" pattern="[0-9]" step="0.001" required>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label class="col-form-label"><strong>Precio de Venta:</strong></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <img src="<?php echo base_url();?>assets/img/iconos/barato.png" class="rounded" width="22px" height="22px">
                      </span>
                    </div>
                    <input type="number" class="form-control" id="elprev" name="elprev" placeholder="1,000" min="0.100"  title="Valor Numerico" pattern="[0-9]" step="0.001" required>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="nombre" class="col-form-label"><strong>Presentacion: (jarabe, capsulla, ampolla..)</strong></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <img src="<?php echo base_url();?>assets/img/iconos/detalle.png" class="rounded" width="22px" height="22px">
                            
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="pastillas" id="eldeta" minlength="2" maxlength="35" pattern="\S[A-Za-z ]{2,35}" required/>
                  </div>
                </div>
                <div class="form-group col-md-5">
                  <label class="col-form-label"><strong>Fecha de Vencimiento:</strong></label>
                  <input size="16" type="date" class="form-control" id="fchct" required>
                </div>
                <div class="form-group col-sm-12"></div>
                <div class="form-group col-sm-2">
                  <button type="button" id="btngdmedicamento" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmar">AGREGAR</button>
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
                  <h5 class="text">Estas Seguro de Registrar Este Medicamento</h5>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="inmedicamento();"> Si </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                  </div>
                </div>
              </div>
            </div>
            <div id="content"></div>
    </div>
    </div>
    </div>