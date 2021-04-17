    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Registro Pacientes</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Paciente</a></li>
                        <li class="breadcrumb-item active">Registrar Paciente</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <div class="wrapper">
      <div class="col-12">
        <div class="card">
          <form action="#" method="post">
                  <div class="form-row p-2">
                    <div class="form-group col-md-3">
                      <label for="" class="col-form-label"><strong>Tipo de Documento:</strong></label>
                      <select class="form-control" id="tipodoc" required>
                        <option selected value="0">Elija</option>
                        <option value="r">R.C</option>
                        <option value="t">T.I</option>
                        <option value="c">C.C</option>
                        <option value="e">C.E</option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label class="col-form-label"><strong>N° de Documento:</strong></label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="" id="ndoc" title="Solo Numeros min:6 max:10" pattern="\S{5,10}[0-9]" minlength="5" maxlength="10" required/>
                      </div>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="nombre" class="col-form-label"><strong>Primer Nombre:</strong></label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="" id="pnombre" minlength="2" maxlength="35" pattern="\S[A-Za-z ]{2,35}" required/>
                      </div>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="nombre" class="col-form-label"><strong>Segundo Nombre:</strong></label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="" id="snombre" minlength="2" maxlength="35" pattern="\S[A-Za-z ]{2,35}"/>
                      </div>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="nombre" class="col-form-label"><strong>Primer Apellido:</strong></label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="" id="pape" minlength="2" maxlength="35" pattern="\S[A-Za-záéíóúñ]{2,35}" required/>
                      </div>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="nombre" class="col-form-label"><strong>Segundo Apellido:</strong></label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="" id="sape" minlength="2" maxlength="35" pattern="\S[A-Za-záéíóúñ]{2,35}"/>
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
                            <option value="pr">Particular</option>
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
                        <input type="text" class="form-control" placeholder="" id="direc" name="direc" />
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
                    </div>
                    <div class="form-group col-md-4">
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
                             <option value="1">Consulta Médico</option>
                             <option value="2">Consulta Enfermera</option>
                             <option value="3">Consulta Odontologica</option>
                             <option value="4">Atención de Crónico</option>
                             <option value="5">Atención de Paliativo</option>
                             <option value="6">Atención de Agudo</option>
                          </select>                                                
                      </div>
                    </div>
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
                    </div> -->
                    
                    <div class="form-group col-sm-12 dropdown-divider"></div>
                    <div class="form-group col-sm-12 text-center">
                      <button type="button" id="btngdpaciente" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmar">REGISTRAR</button>
                      <button type="button" class="btn btn-danger">CANCELAR</button>
                    </div>
                    <div class="form-group col-md-2">
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
                    <h5 class="text">Estas Seguro de Registrar Este Paciente</h5>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" onclick="inpaciente();"> Si </button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    </div>
                  </div>
                </div>
                <div id="content"></div>
              </div>
          </div>
        </div>
      </div>
