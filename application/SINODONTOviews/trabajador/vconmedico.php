    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Consultar Medicos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trabajadores</a></li>
              <li class="breadcrumb-item active">Consultar Medicos</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="wrapper">
    <div class="col-12">
    <!-- <div class="card"> -->
              <?php
                $campos = json_decode(json_encode($cn), True);
              ?>
        <div class="col-12" >
            <div class="card" >
              <div class="card-header">
                <h3 class="card-title">Listado de Medicos</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 250px;">
                    <input type="text" id="buscar" onkeyup="individualmed()" class="form-control float-right" placeholder="Nombres Apellidos">

                    <div class="input-group-append">
                      <button type="button" class="btn btn-default" id="buscar2" onclick="mostrar_todos_med()"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" id="resultado">
                
                   <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Sexo</th>
                        <th>Tipo/Empleado</th>
                        <th>Estado</th>
                        <th>Imagen</th>
                        <th>Celular</th>
                        <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      foreach ($cn as $fila)
                      {
                        echo '
                          <tr>
                          <td>'.$fila->nombres.'</td>
                          <td>'.$fila->apellidos.'</td>
                          <td>'.$fila->sexo.'</td>
                          <td>Medico</td>
                          <td>'.$fila->estado_medico.'</td>
                          <td><img src="'.base_url().$fila->img_medico.'" class="img-circle" width="45px" height="45px"></td>
                          <td>'.$fila->celular.'</td>
                          <td><a href="#" class="btn btn-danger"  data-toggle="modal" data-target="#mdetalles" onclick="datosmedico(\''.$fila->id_medico.'\',
                            \''.$fila->nombres.'\',\''.$fila->apellidos.'\',\''.$fila->contra.'\',\''.$fila->f_nacimiento.'\',\''.$fila->edad.'\',
                            \''.$fila->celular.'\',\''.$fila->sexo.'\',\''.$fila->tipo_medico.'\',\''.$fila->estado_medico.'\',\''.$fila->img_medico.'\')"><img src="'.base_url().'assets/img/iconos/config.png" class="img-fluid" width="25" height="25"/></a></td>
                          </tr>
                        ';
                      }
                    ?>
                  </tbody>
                </table>
                    
                 
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
          <div class="modal" id="mdetalles" tabindex="-1" role="dialog" aria-labelledby="vtitulo">
          <div class="modal-dialog modal-lg modal-show" role="document">
            <form id="inftr" method="post" onsubmit="return actmedico();" enctype="multipart/form-data">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Detalles del Medico</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-4">
                      </div>
                      <div class="col-md-4">
                        <div class="" style="text-align: center;">
                          <img id="laimg" src="" width="150px" height="150px" class="img-fluid img-rounded">
                          <input type="text" class="form-control" id="imga" name="imga" style="display:none" />
                        </div>
                      </div>
                      <div class="col-md-4">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-5">
                        <label for="nombre" class="col-form-label"><strong>Nombres:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url()?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="text" class="form-control" placeholder="Nombres" id="nombr" name="nombr" minlength="2" maxlength="35" pattern="\S[A-Za-z ]{2,35}" required/>
                        </div>
                      </div>
                      <div class="form-group col-md-5">
                        <label for="nombre" class="col-form-label"><strong>Apellidos:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url()?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="text" class="form-control" placeholder="Apellidos" id="elape" name="elape" minlength="2" maxlength="35" pattern="\S[A-Za-z ]{2,35}" required/>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-5">
                        <label for="nombre" class="col-form-label"><strong>Correo(Usuario):</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url()?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="email" class="form-control" id="corr" name="corr" aria-describedby="emailHelp" placeholder="ejemplo@hotmail.com" readonly="">
                        </div>
                      </div>
                      <div class="form-group col-md-5">
                        <label for="nombre" class="col-form-label"><strong>Contraseña:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url()?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                                  <!--<a id="uno" name="uno" onclick="retro()"style="display:none"><img src="../img/oj.png" width="22px" height="22px"></a>
                                                  <a id="dos" name="dos" onclick="hago()" ><img src="../img/nooj.png" width="22px" height="22px"></a>-->
                              </span>
                          </div>
                          <input type="password" class="form-control" placeholder="ctr2****" id="lacl" name="lacl" pattern="^(?=.*\d)(?=.*[A-Za-z0-9])(?!.*\s).*$" minlength="6" maxlength="10" required/>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-5">
                        <label class="col-form-label"><strong>Sexo:</strong></label>
                        <select class="form-control" id="tpsex" name="tpsex" required>
                          <option ></option>
                        </select>
                      </div>
                      <div class="form-group col-md-5">
                        <label for="nota" class="col-form-label"><strong>Fecha de Nacimiento:</strong></label>
                        <input size="" type="date" class="form-control" id="fnaci" name="fnaci" onchange="calcularedad2()" required/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-5">
                        <label for="nota" class="col-form-label"><strong>Edad:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <img src="<?php echo base_url()?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
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
                              <img src="<?php echo base_url()?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                            </span>
                          </div>
                          <input type="text" class="form-control" placeholder="317002001." id="elcelular" name="elcelular" title="Solo Numeros min:10 max:10" pattern="[0-9]{10}" maxlength="10" required/>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-5">
                        <label class="col-form-label"><strong>Tipo de Emepleado:</strong></label>
                        <select class="form-control" id="templeado" name="templeado" required>
                          <option selected value="0">Eliga</option>
                          <option value="trabajador">Trabajador</option>
                          <option value="medico">Medico</option>
                        </select>
                      </div>
                      <div class="col-md-5">
                        <label class="col-form-label"><strong>Estado</strong></label>
                        <select class="form-control" id="elestado" name="elestado" required>
                          <option></option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-10">
                        <label class="col-form-label"><strong>Imagen</strong></label>
                        <input type="file" class="form-control" id="mift" name="mift" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary" data-dismiss="">ACTUALIZAR</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#confirme">ELIMINAR</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="modal" id="confirme" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
              <div class="modal-body">
                <h5 class="text">Estas Seguro de Eliminar Este Medico</h5>
                  <p></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" onclick="eliminarmedico();"> Si </button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </div>
              </div>
            </div>
        </div>
    </div>
    </div>