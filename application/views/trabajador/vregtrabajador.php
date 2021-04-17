  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registro de Empleados</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Empleados</a></li>
              <li class="breadcrumb-item active">Registrar Empleado</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="wrapper">
    <div class="col-12">
    <div class="card">
        <form id="rdem" action="#" method="post" enctype="multipart/form-data">
              <div class="form-row p-2">
                <div class="form-group col-md-5">
                  <label for="nombre" class="col-form-label"><strong>Nombres:</strong></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Nombres" id="elnombre" name="elnombre" minlength="2" maxlength="35" pattern="\S[A-Za-z ]{2,35}" required/>
                  </div>
                </div>
                <div class="form-group col-md-5">
                  <label for="nombre" class="col-form-label"><strong>Apellidos:</strong></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Apellidos" id="elape" name="elape" minlength="2" maxlength="35" pattern="\S[A-Za-z ]{2,35}" required/>
                  </div>
                </div>
                <div class="form-group col-md-5">
                  <label for="nombre" class="col-form-label"><strong>Correo(Usuario):</strong></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                        </span>
                    </div>
                    <input type="email" class="form-control" id="corre" name="corre" aria-describedby="emailHelp" placeholder="ejemplo@hotmail.com" required="">
                  </div>
                </div>
                <div class="form-group col-md-5">
                  <label for="nombre" class="col-form-label"><strong>Contraseña:</strong></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <!-- <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px"> -->
                            <a id="uno" name="uno" onclick="retro()"style="display:none"><img src="<?php echo base_url();?>assets/img/iconos/oj.png" width="22px" height="22px"></a>
                                <a id="dos" name="dos" onclick="hago()" ><img src="<?php echo base_url();?>assets/img/iconos/nooj.png" width="22px" height="22px"></a>
                        </span>
                    </div>
                    <input type="password" class="form-control" placeholder="ctr2****" id="lacl" name="lacl" pattern="^(?=.*\d)(?=.*[A-Za-z0-9])(?!.*\s).*$" minlength="6" maxlength="10" required/>
                  </div>
                </div>
                <div class="form-group col-md-5">
                  <label class="col-form-label"><strong>Sexo:</strong></label>
                  <select class="form-control" id="sex" name="sex" required>
                    <option selected value="0">Elija</option>
                    <option value="m">M</option>
                    <option value="f">F</option>
                  </select>
                </div>
                <div class="form-group col-md-5">
                  <label for="nota" class="col-form-label"><strong>Fecha de Nacimiento:</strong></label>
                  <input size="" type="date" class="form-control" id="fnaci" name="fnaci" onchange="calcularedad2()" required/>
                </div>
                <div class="form-group col-md-5">
                  <label for="nota" class="col-form-label"><strong>Edad:</strong></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="0" id="edad" name="edad" readonly="" required/> 
                  </div>
                </div>
                <div class="form-group col-md-5">
                  <label for="celular" class="col-form-label"><strong>Telefono/Celular:</strong></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="317002001." id="elcelular" name="elcelular" title="Solo Numeros min:10 max:10" pattern="[0-9]{10}" maxlength="10" required/>
                  </div>
                </div>
                <div class="form-group col-md-5">
                  <label class="col-form-label"><strong>Tipo de Emepleado:</strong></label>
                  <select class="form-control" id="templeado" name="templeado" onchange="mcualempleado();" required>
                    <option selected value="0">Elija</option>
                    <option value="1">Empleado</option>
                    <option value="2">Enfermero(a)</option>
                    <option value="3">Medico(a)</option>
                  </select>
                </div>
                <div  class="form-group col-md-5" id="regem1" style="display:none">
                  <label for="celular" class="col-form-label"><strong>N° de Documento:</strong></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="" id="elndoc" name="elndoc" title="Solo Numeros min:5 max:10" pattern="[0-9]{10}" maxlength="10" required/>
                  </div>
                </div>
                <div id="regem2" class="form-group col-md-5" style="display:none">
                  <label for="celular" class="col-form-label"><strong>N° de Registro:</strong></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="" id="elnreg" name="elnreg" title="Solo Numeros min:2 max:20" pattern="[0-9]{20}" maxlength="20" required/>
                  </div>
                </div>
                <div id="regem3" class="form-group col-md-5" style="display:none">
                  <label for="nombre" class="col-form-label"><strong>Especialidad:</strong></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="" id="laespec" name="laespec" minlength="2" maxlength="35" pattern="\S[A-Za-z ]{2,35}" required/>
                  </div>
                </div>
                <div class="form-group col-sm-12"></div>
                <div class="form-group col-sm-2">
                  <button type="button" id="btngdtra" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmar">REGISTRAR</button>
                </div>
                <div class="form-group col-md-2">
                  <button type="button" class="btn btn-danger" onclick="lol()">CANCELAR</button>
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
                  <h5 class="text">Estas Seguro de Registrar Esta Empleado</h5>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="inempleado();"> Si </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                  </div>
                </div>
              </div>
            </div>
            <div id="content"></div>
      </div>
      </div>
      </div>