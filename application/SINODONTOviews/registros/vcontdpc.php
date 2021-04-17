    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Consultar Pacientes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Paciente</a></li>
              <li class="breadcrumb-item active">Consultar Pacientes</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <div class="wrapper">
    <div class="col-12">
              <?php
                // $campos = json_decode(json_encode($cn), True);
              ?>
        <div class="col-12" >
            <div class="card" >
              <div class="card-header">
                <h3 class="card-title">Listado de Pacientes</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <table id="resultado" class="display responsive nowrap " style="width:100%">
                  <thead>
                    <tr>
                      <th>Documento</th>
                      <th>Primer Nombre</th>
                      <th>Primer Apellido</th>
                      <th>Estado Paciente</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      // foreach ($cn as $fila) table-striped table-bordered
                      // {
                      //   echo '
                      //     <tr>
                      //     <td>'.strtoupper($fila->tipo_doc).'</td>
                      //     <td>'.$fila->documento.'</td>
                      //     <td>'.$fila->nombres.'</td>
                      //     <td>'.$fila->apellidos.'</td>
                      //     <td>'.strtoupper($fila->sexo).'</td>
                      //     <td>'.strtoupper($fila->tipo_entidad).'</td>
                      //       <td>'.$fila->entidad.'</td>
                      //     <td>'.$fila->celular.'</td>
                      //     <td><a href="#" class="btn btn-danger"  data-toggle="modal" data-target="#mdetalles" onclick="datospaciente(\''.$fila->id_paciente.'\',
                      //       \''.$fila->tipo_doc.'\',\''.$fila->documento.'\',\''.$fila->nombres.'\',\''.$fila->apellidos.'\',\''.$fila->sexo.'\',
                      //       \''.$fila->tipo_entidad.'\',\''.$fila->entidad.'\',\''.$fila->f_nacimiento.'\',\''.$fila->edad.'\',\''.$fila->celular.'\')"><img src="'.base_url().'assets/img/iconos/config.png" class="img-fluid" width="25" height="25"/></a></td>
                      //     </tr>
                      //   ';
                      // }
                    ?>
                  </tbody>
                </table>                    
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="modal" id="mdetalles" tabindex="-1" role="dialog" aria-labelledby="vtitulo">
          <div class="modal-dialog modal-xl modal-show" role="document">
            <form id="inf" method="post">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Detalles del Paciente</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-3">
                        <label for="" class="col-form-label"><strong>Tipo de Documento:</strong></label>
                        <select class="form-control" id="tipodoc" name="tipodoc" required>
                          <option></option> 
                        </select>
                      </div>
                      <div class="col-md-3">
                        <label class="col-form-label"><strong>N° de Documento:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="text" class="form-control" placeholder="100100010" id="ndoc" title="Solo Numeros min:6 max:10" pattern="\S{5,10}[0-9]" minlength="5" maxlength="10" required readonly="" />
                        </div>
                        <input type="text" class="form-control" id="elid" name="elid" style="display:none" />
                      </div>
                      <div class="col-md-3">
                        <label for="nombre" class="col-form-label"><strong>Primer Nombre:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="text" class="form-control" placeholder="Nombres" id="nombr" name="nombr" minlength="2" maxlength="35" pattern="\S[A-Za-z ]{2,35}" required/>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <label for="nombre" class="col-form-label"><strong>Segundo Nombre:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="text" class="form-control" placeholder="Nombres" id="nombr2" name="nombr2" minlength="2" maxlength="35" pattern="\S[A-Za-z ]{2,35}" required/>
                        </div>
                      </div>
                    </div>
                    <div class="row">                      
                      <div class="col-md-3">
                        <label for="nombre" class="col-form-label"><strong>Primer Apellido:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="text" class="form-control" placeholder="Apellidos" id="elape" name="elape" minlength="2" maxlength="35" pattern="\S[A-Za-z ]{2,35}" required/>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <label for="nombre" class="col-form-label"><strong>Segundo Apellido:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="text" class="form-control" placeholder="Apellidos" id="elape2" name="elape2" minlength="2" maxlength="35" pattern="\S[A-Za-z ]{2,35}" required/>
                        </div>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="nombre" class="col-form-label"><strong>Lugar de Nacimiento:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="text" class="form-control" placeholder="" id="lugarnaci" name="lugarnaci">
                        </div>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="nombre" class="col-form-label"><strong>Fecha de Nacimiento:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="date" class="form-control" placeholder="" id="fnaci" name="fnaci">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-3">
                        <label class="col-form-label"><strong>Tipo de Vinculación</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                           </div>                            
                          <select class="form-control" id="tpv" name="tpv">
                              <option selected="" value="0">Elija</option>
                              <option value="s">Subsidiado</option>
                              <!-- <option value="v">Vinculado</option> -->
                              <option value="c">Contributivo</option>
                              <!-- <option value="p">Participativo</option> -->
                              <option value="o">Otro</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group col-md-3">
                        <label class="col-form-label"><strong>Tipo de Afiliado</strong></label>
                        <div class="input-group">                            
                          <div class="input-group-prepend">                            
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                           </div>                                    
                          <select class="form-control" id="tpa" name="tpa">
                              <option selected="" value="0">Elija</option>
                              <option value="c">Cotizante</option>
                              <option value="b">Beneficiario</option>
                              <option value="a">Adicional</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group col-md-3">
                        <label class="col-form-label"><strong>Aseguradora</strong></label>
                        <div class="input-group">                            
                          <div class="input-group-prepend">                            
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>    
                          <select class="form-control" id="tpasegura" name="tpasegura">
                              <option selected="" value="0">Elija</option>
                              <option value="1">EPS</option>
                              <option value="2">ARS</option>
                              <option value="3">IPS</option>
                              <option value="4">ARL</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="nombre" class="col-form-label"><strong>Nombre Aseguradora:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="text" class="form-control" placeholder="" id="minclusion" name="minclusion" />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-3">
                        <label for="nombre" class="col-form-label"><strong>Ambito de Registro:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="text" class="form-control" value="AMBULATORIO" id="aregistro" name="aregistro">
                        </div>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="nombre" class="col-form-label"><strong>Dirección:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="text" class="form-control" placeholder="Calle 5 N° 2-0" id="direc" name="direc" />
                        </div>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="nombre" class="col-form-label"><strong>Barrio:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="text" class="form-control" placeholder="El paso" id="barri" name="barri" />
                        </div>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="nombre" class="col-form-label"><strong>Municipio:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="text" class="form-control" placeholder="" id="muni" name="muni" />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-3">
                        <label for="nombre" class="col-form-label"><strong>Teléfono Fijo:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="text" class="form-control" placeholder="" id="telfijo" name="telfijo" />
                        </div>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="nombre" class="col-form-label"><strong>Teléfono Celular:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="text" class="form-control" placeholder="" id="telcel" name="telcel" />
                        </div>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="nombre" class="col-form-label"><strong>Ocupación:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="text" class="form-control" placeholder="" id="ocupa" name="ocupa" />
                        </div>
                      </div>
                      <!-- <div class="form-group col-md-3">
                        <label for="nombre" class="col-form-label"><strong>Religion:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="text" class="form-control" placeholder="" id="reli" name="reli" />
                        </div>
                      </div> -->
                      <div class="form-group col-md-3">
                        <label for="nombre" class="col-form-label"><strong>Estado Civil:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                            <select class="form-control" id="tpec" name="tpec">
                               <option selected="" value="0">Elija</option>
                               <option value="s">Soltero(a)</option>
                               <option value="c">Casado(a)</option>
                               <option value="v">Viudo(a)</option>
                               <option value="d">Divorciado(a)</option>
                               <option value="o">Otro</option>
                            </select>
                        </div>
                      </div>                    
                    </div>
                    <div class="row">
                      <div class="form-group col-md-3">
                        <label for="nombre" class="col-form-label"><strong>Nombre Cuidador:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="text" class="form-control" placeholder="" id="ncuidador" name="ncuidador" />
                        </div>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="nombre" class="col-form-label"><strong>Teléfono Cuidador:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="text" class="form-control" placeholder="" id="telcuidador" name="telcuidador" />
                        </div>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="nombre" class="col-form-label"><strong>Nombre Responsable:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="text" class="form-control" placeholder="" id="nresponsable" name="nresponsable" />
                        </div>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="nombre" class="col-form-label"><strong>Teléfono Responsable:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="text" class="form-control" placeholder="" id="telresponsable" name="telresponsable" />
                        </div>
                      </div>                     
                    </div>
                    <div class="row">
                      <div class="form-group col-md-4">
                        <label for="nombre" class="col-form-label"><strong>Parentesco Responsable:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="text" class="form-control" placeholder="" id="parece" name="parece" />
                        </div>
                      </div>
                      <!-- <div class="form-group col-md-4">
                        <label for="nombre" class="col-form-label"><strong>Motivo Inclusion:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="text" class="form-control" placeholder="" id="minclusion" name="minclusion" />
                        </div>
                      </div> -->
                      <div class="form-group col-md-4">
                        <label for="nombre" class="col-form-label"><strong>Lugar Valoración:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="text" class="form-control" placeholder="" id="lugarv" name="lugarv" />
                        </div>
                      </div> 
                      <div class="form-group col-md-4">
                          <label class="col-form-label"><strong>Motivo de Inclusión</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>      
                            <!-- <input type="text" class="form-control" placeholder="" id="motivopad" name="motivopad" /> -->
                            <select class="form-control" id="motivopad" name="motivopad">
                               <option selected="" value="0">Elija</option>
                            </select>                                             
                        </div>
                      </div>                    
                    </div>
                    <div class="row">
                      <!-- <div class="form-group col-md-4">
                        <label for="nombre" class="col-form-label"><strong>Fecha de Vinculacion:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>                      
                          <input type="date" class="form-control" placeholder="" id="fvincula" name="fvincula">
                        </div>
                      </div> -->
                      <!-- <div class="form-group col-md-4">
                        <label for="nombre" class="col-form-label"><strong>Hora de Vinculacion:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>                      
                          <input type="time" class="form-control" id="hvincula" name="hvincula" min="00:00" max="22:00" step="1">
                        </div>
                      </div> -->
                      
                      <!-- <div class="form-group col-md-4">
                          <label class="col-form-label"><strong>Motivo de Inclusion al PAD</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>                                                    
                             <select class="form-control" id="motivopad" name="motivopad">
                               <option selected="" value="0">Elija</option>
                               <option value="ag">Agudo</option>
                               <option value="ce">Cronico con Entrenamiento</option>
                               <option value="ca">Cronico Atencion Domicilio</option>
                               <option value="pn">Paliativo NO Oncologico</option>
                               <option value="po">Paliativo Oncologico</option>
                            </select>
                        </div>
                      </div>  -->                    
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" id="btnactpc2" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirme2">ACTUALIZAR</button>
                  <!-- <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#confirme">ELIMINAR</button> -->
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
                <h5 class="text">Estas Seguro de Eliminar Este Paciente</h5>
                  <p></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" onclick="eliminarpaciente();"> Si </button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </div>
              </div>
            </div>
        </div>
        <div class="modal" id="confirme2" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
              <div class="modal-body">
                <h5 class="text">Estas Seguro de Actualizar Este Paciente</h5>
                  <p></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" onclick="actpc3();"> Si </button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </div>
              </div>
            </div>
        </div>
        <div id="content"></div>
    </div>
    </div>
    <input type="text" id="cualeslabaseurl" value="<?php echo base_url();?>" style="display:none">
    <script type="text/javascript">
          var baseurl=document.getElementById("cualeslabaseurl").value;
          document.title="Cons. Paciente | H. Clinica";
          window.onload = function() {
             
            $.extend( true, $.fn.dataTable.defaults, {
                "language": {
                    "decimal": ",",
                    "thousands": ".",
                    "info": " Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "infoPostFix": "",
                    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "loadingRecords": "Cargando...",
                    "lengthMenu": "Mostrar _MENU_ registros",
                    "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    },
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "searchPlaceholder": "Documento",
                    "zeroRecords": "No se encontraron resultados",
                    "emptyTable": "Ningún dato disponible en esta tabla",
                    "aria": {
                        "sortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sortDescending": ": Activar para ordenar la columna de manera descendente"
                    },
                    //only works for built-in buttons, not for custom buttons
                    "buttons": {
                        "create": "Nuevo",
                        "edit": "Cambiar",
                        "remove": "Borrar",
                        "copy": "Copiar",
                        "csv": "CSV",
                        "excel": "Excel",
                        "pdf": "PDF",
                        "print": "Imprimir",
                        "colvis": "Visibilidad columnas",
                        "collection": "Colección",
                        "upload": "Seleccione fichero...."
                    },
                    "select": {
                        "rows": {
                            _: '%d filas seleccionadas',
                            0: 'clic fila para seleccionar',
                            1: 'una fila seleccionada'
                        }
                    }
                }           
            } );  
            $('#resultado').DataTable( {                
                'lengthMenu':[5,10,20,50,100],
                'paging':true,
                'info':true,
                'filter':true,
                'stateSave':true,
                'processing':true,
                'serverSide':true,
                'responsive':true,
                'dom': 'Bfrtlip',//lBf  Bfrtip
               
                'ajax':{
                  "url":baseurl+"registro/obtener_server_pacientes",
                  "type":"POST"
                  // dataSrc:''
                },
                'buttons': [
                  {
                    extend: 'csv',
                    text: '<i class="fas fa-file-csv"></i>',
                    titleAttr: 'Exportar a Csv',
                    className: 'btn btn-verde'
                  },
                  {
                    extend: 'excelHtml5',
                    text: '<i class="fas fa-file-excel"></i>',
                    titleAttr: 'Exportar a Excel',
                    className: 'btn btn-success'
                  },
                  {
                    extend: 'pdf',
                    text: '<i class="fas fa-file-pdf"></i>',
                    titleAttr: 'Exportar a Pdf',
                    className: 'btn btn-danger'
                  },
                  {
                    extend: 'print',
                    text: '<i class="fas fa-print"></i>',
                    titleAttr: 'Imprimir',
                    className: 'btn btn-info'
                  }                  
                ],
                'columns':[
                  // {data: 'rownum','sClass':'dt-body-center'},
                  {data: 'doc_paciente'},
                  {data: 'pnombre_paciente'},
                  {data: 'papellido_paciente'},
                  { 
                    render:function(data,type,row){
                      if(row.estado_paciente=="1")
                      {
                        return 'activo';
                      }
                      else if(row.estado_paciente=="0")
                      {
                        return 'inactivo';
                      }
                    }
                  },
                  // {data: 'Opciones'},
                  {"orderable":true,
                    render:function(data,type,row){
                        return '<a href="#" class="btn btn-azul"  data-toggle="modal" data-target="#mdetalles" onclick="datospaciente(\''+row.id_paciente+'\',\''+row.tipo_doc_paciente+'\',\''+row.doc_paciente+'\',\''+row.pnombre_paciente+'\',\''+row.snombre_paciente+'\',\''+row.papellido_paciente+'\',\''+row.sapellido_paciente+'\',\''+row.lugar_nacimiento_paciente+'\',\''+row.f_nacimiento_paciente+'\',\''+row.tipo_vinculacion_paciente+'\',\''+row.tipo_afiliado_paciente+'\',\''+row.aseguradora_paciente+'\',\''+row.ambito_registro_paciente+'\',\''+row.direccion_paciente+'\',\''+row.barrio_paciente+'\',\''+row.municipio_paciente+'\',\''+row.tel_fijo_paciente+'\',\''+row.tel_celular_paciente+'\',\''+row.ocupacion_paciente+'\',\''+row.religion_paciente+'\',\''+row.estado_civil_paciente+'\',\''+row.nom_cuidador_paciente+'\',\''+row.tel_cuidador_paciente+'\',\''+row.nom_responsable_paciente+'\',\''+row.tel_responsable_paciente+'\',\''+row.parentezco_responsable_paciente+'\',\''+row.motivo_inclusion_paciente+'\',\''+row.lugar_valoracion_paciente+'\',\''+row.f_vinculacion_paciente+'\',\''+row.h_vinculacion_paciente+'\',\''+row.inclusion_pad_paciente+'\')"><img src="'+baseurl+'assets/img/iconos/ver.png" class="img-fluid" width="25" height="25"/></a>';
                    }
                  }
                ],
                  // "order": [[ 3, "desc" ]],
                "order": [],
              } );            
          }
    </script>