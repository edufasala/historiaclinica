    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Consultar Historias Atencion</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Consultas</a></li>
              <li class="breadcrumb-item active">Consultar Historias Atencion</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="wrapper">
    <div class="col-12">
    <!-- <div class="card"> -->
              <?php
                // $campos = json_decode(json_encode($cn), True);
              ?>
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="col-md-6">
                <button type="button" class="btn btn-azul btn-lg" data-toggle="modal" id="selecpc" data-target="#seleciona">SELECCIONAR PACIENTE</button>
              </div>
              <div class="row" id="datospaciente" style="display:none">
                <div class="row">
                  <div class="form-group col-md-3">
                    <label class="col-form-label"><strong>Tipo/Documento</strong></label>
                    <select class="form-control" id="tdoc" name="tdoc" readonly="">
                      <option selected value="0">Elija</option>
                    </select>
                  </div>
                  <div class="form-group col-md-3">
                    <label class="col-form-label"><strong>N° de Documento</strong></label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text">
                              <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                          </span>
                      </div>
                      <input type="text" class="form-control" placeholder="100100010" id="ndoc" name="ndoc" readonly="" />
                    </div>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="nombre" class="col-form-label"><strong>Primer Nombre</strong></label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text">
                              <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                          </span>
                      </div>
                      <input type="text" class="form-control" placeholder="Nombres" id="pnombre" name="pnombre" readonly="" />
                    </div>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="nombre" class="col-form-label"><strong>Primer Apellido</strong></label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text">
                              <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                          </span>
                      </div>
                      <input type="text" class="form-control" placeholder="Apellidos" id="pape" name="pape" readonly=""/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12" id="verhistatencion" style="display:none">
            <div class="card">
              <div class="">
                <div class="row">
                  <div class="form-group col-md-4">
                  </div>
                  <div class="form-group col-md-4 pt-2">
                    <!-- <h5 class="">Consultar por Fecha</h5> -->
                    <label class="">Consultar por Fecha</label>
                  </div>
                  <div class="form-group col-md-4 pt-2">
                    <!-- <label class="col-form-label"><strong>Fecha de la Cita:</strong></label> -->
                    <input size="16" type="date" class="form-control" id="fchathc" name="fchathc" onchange="buscarfecathc();" required>
                  </div>
                </div>
              </div>
            </div>
            <div class="card" >
              
              <div class="card-header">
                <h3 class="card-title">Listado de Historias Clinicas Atencion</h3>

                <div class="card-tools">
                  <div class="input-group input-group-md" style="width: 250px;">
                    <select class="form-control" id="selimprimirfatencion" name="selimprimirfatencion" onchange="buscarfatencion()">
                      <!-- <option value="general">General</option> -->
                      <option value="pad">Historia Clinica</option>
                      <!-- <option value="concentimiento">Concentimiento</option> -->
                      <option value="barthel">Barthel</option>
                      <option value="valoracion">Valoración Cognitiva</option>
                      <option value="norton">Norton</option>
                      <option value="braden">Braden</option>
                      <option value="padenf">Historia de Enfermeria</option>
                      <option value="sociofamiliar">Socio Familiar</option>
                      <option value="escaladecarga">Escala de Carga</option>
                      <option value="intervencion">Plan de Cuidados Enfermeria</option>
                    </select>
                  </div>
                  
                </div>
              </div>
              <!-- /.card-header  dataTable_width_auto  responsive nowrap  -->
              <div class="card-body">
                  <table id="resultado" class="display responsive nowrap " style="width:100%">
                  
                  <thead>
                    <tr>
                      <th>Ambito</th>
                      <th>Tipo Historia</th>
                      <th>Fecha Atencion</th>
                      <th>Diagnostico</th>
                      <th>Especialidad</th>
                      <th>Profesional</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      // foreach ($cn as $fila)
                      // {
                      //   echo '
                      //     <tr>
                      //     <td>'.$fila->codigo_cie.'</td>
                      //     <td>'.$fila->descripcion_cie.'</td>
                      //     <td>'.$fila->cod_desc_cie.'</td>
                      //     <td></td>
                          
                      //     </tr>
                      //   ';
                      //   // <td><a href="#" class="btn btn-danger"  data-toggle="modal" data-target="#mdetalles" onclick="datoscita(\''.$fila->id_agenda.'\',
                      //   //     \''.$fila->nombres.'\',\''.$fila->tipo_cita.'\',\''.$fila->f_cita.'\',\''.$fila->h_cita.'\',\''.$fila->celular.'\',
                      //   //     \''.$fila->nota_cita.'\',\''.$fila->estado_cita.'\')">OPC</a></td>
                      // }
                    ?>
                  </tbody>
                </table>                 
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    <!-- </div> -->
        <div class="modal fade" id="seleciona" tabindex="-1" role="dialog" aria-labelledby="vtitulo" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
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
                          <input type="text" id="nombres" id="nombres" class="form-control" onkeyup="solopacatencion()" />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <label class="col-form-label"><strong>Resultado</strong></label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12" id="cargapc" style="display:none">
                        <div class="text-center">
                          <div class="spinner-border text-success" role="status">
                            <span class="sr-only">Cargando...</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12" id="miresultado">
                      </div>
                    </div>
                  </div>
                </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="mdetalleshc" tabindex="-1" role="dialog" aria-labelledby="vtitulo" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
            <!--<form action="#" method="" onsubmit="">-->
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" >Detalles de La Historia Clinica</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <div class="container">   
                    <div class="col-md-12">
                      <div class="card-header">
                        <ul class="nav nav-tabs nav-justified"><!-- primary btn-lg btn-block -->
                            <li class="nav-item">
                              <a class="nav-link active text-uppercase bg-white " id="unocs" href="#csmulti1" data-toggle="collapse" data-target="#csmulti1" aria-expanded="false" aria-controls="csmulti1" onclick="pasarcs('1')"><FONT SIZE=5>Historia Clinica</FONT></a>
                            </li>
                            <!-- <li class="nav-item">
                              <a class="nav-link bg-primaryhc text-uppercase text-white"  id="dos" href="#multi2" data-toggle="collapse" data-target="#multi2" aria-expanded="false" aria-controls="multi2" onclick="pasarcs('2')"><FONT SIZE=5>Concentimiento</FONT></a>
                            </li> -->
                             <li class="nav-item">
                              <a class="nav-link bg-primaryhc text-uppercase text-white" id="trescs" href="#csmulti3" data-toggle="collapse" data-target="#csmulti3" aria-expanded="false" aria-controls="csmulti3" onclick="pasarcs('3')"><FONT SIZE=5>Indice de Barthel</FONT></a>
                            </li>
                             <li class="nav-item">
                              <a class="nav-link bg-primaryhc text-uppercase text-white" id="cuacs" href="#csmulti4" data-toggle="collapse" data-target="#csmulti4" aria-expanded="false" aria-controls="csmulti4" onclick="pasarcs('4')"><FONT SIZE=5>Valoracion Cognitiva</FONT></a>
                            </li>
                             <li class="nav-item">
                              <a class="nav-link bg-primaryhc text-uppercase text-white" id="cincs" href="#csmulti5" data-toggle="collapse" data-target="#csmulti5" aria-expanded="false" aria-controls="csmulti5" onclick="pasarcs('5')"><FONT SIZE=5>Escala de Norton</FONT></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link bg-primaryhc text-uppercase text-white" id="seics" href="#csmulti6" data-toggle="collapse" data-target="#csmulti6" aria-expanded="false" aria-controls="csmulti6" onclick="pasarcs('6')"><FONT SIZE=5>Escala de Braden</FONT></a>
                            </li>
                        </ul>
                      </div>
                      <div class="card-body">
                        <div class="accordion" id="accordion2cs">
                          <div class="collapse multi-collapse collapse" id="csmulti1" data-parent="#accordion2cs">
                              <form>
                              <div class="form-row p-2">
                                <div class="form-group col-md-12">
                                  <div class="card-header">
                                    <div class="accordion" id="accordion3cs">
                                      <div class="collapse multi-collapse collapse show" id="op1cs" data-parent="#accordion3cs">
                                        <div class="row">
                                          <!-- <div class="form-group col-md-6">
                                            <label for="nombre" class="col-form-label"><strong>N° Historia Clinica:</strong></label>
                                            <div class="input-group">
                                              <div class="input-group-prepend">
                                                  <span class="input-group-text">
                                                      <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                                                  </span>
                                              </div>
                                              <input type="text" class="form-control" placeholder="N° Historia Clinica" id="csnumhc" name="csnumhc" readonly="" />
                                            </div>
                                          </div> -->
                                          <div class="form-group col-md-12">
                                            <label class="col-form-label"><strong>Motivo Consulta:</strong></label>
                                            <textarea class="form-control" id="csmconsuta" name="csmconsuta" onkeypress="" required></textarea>
                                          </div>
                                          <div class="accordion form-group col-md-12" id="accordion">
                                            <div class="card">
                                              <div class="card-header" id="headiuno">
                                                <button class="btn btn-verde btn-lg btn-block"  type="button" data-toggle="collapse" data-target="#collapseunocs"
                                                aria-expanded="false" aria-controls="collapseunocs">
                                                  Enfermedad y Antecedentes
                                                </button>
                                              </div>
                                              <div class="collapse" id="collapseunocs" aria-labelledby="headiuno" data-parent="#accordion">
                                                <div class="card-body">
                                                  <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                      <label class="col-form-label"><strong>Enfermedad Actual:</strong></label>
                                                      <textarea class="form-control" rows="8" id="csenfactual" name="enfactual" onkeypress="" required></textarea>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                      <label class="col-form-label"><strong>Antecedentes Personales:</strong></label>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                      <label class="col-form-label"><strong>Antecedentes Patológicos:</strong></label>
                                                      <textarea class="form-control" id="csapatologicos" name="csapatologicos" onkeypress="" required></textarea>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                      <label class="col-form-label"><strong>Antecedentes Quirúrgicos:</strong></label>
                                                      <textarea class="form-control" id="csaquirurgicos" name="csaquirurgicos" onkeypress="" required></textarea>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                      <label class="col-form-label"><strong>Antecedentes Farmacológicos:</strong></label>
                                                      <textarea class="form-control" id="csafarmacologicos" name="csafarmacologicos" onkeypress="" required></textarea>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                      <label class="col-form-label"><strong>Antecedentes Toxico Alérgicos:</strong></label>
                                                      <textarea class="form-control" id="csaalergicos" name="csaalergicos" onkeypress="" required></textarea>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                      <label class="col-form-label"><strong>Antecedentes Traumáticos:</strong></label>
                                                      <textarea class="form-control" id="csatraumaticos" name="csatraumaticos" onkeypress="" required></textarea>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                      <label class="col-form-label"><strong>Antecedentes Familiares:</strong></label>
                                                      <textarea class="form-control" id="csafamiliares" name="csafamiliares" onkeypress="" required></textarea>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                      <label class="col-form-label"><strong>Antecedentes Transfusionales:</strong></label>
                                                      <textarea class="form-control" id="csatransfucionales" name="csatransfucionales" onkeypress="" required></textarea>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                      <label class="col-form-label"><strong>Antecedentes Ginecológicos:</strong></label>
                                                      <textarea class="form-control" id="csaginecologicos" name="csaginecologicos" onkeypress="" required></textarea>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                      <label class="col-form-label"><strong>Antecedentes Exposicionales:</strong></label>
                                                      <textarea class="form-control" id="csaexposicionales" name="csaexposicionales" onkeypress="" required></textarea>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                      <label class="col-form-label"><strong>Antecedentes Otros:</strong></label>
                                                      <textarea class="form-control" id="csaotros" name="csaotros" onkeypress="" required></textarea>
                                                    </div>
                                                    
                                                  </div>
                                                  
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <!-- <div class="form-group col-sm-12"></div>
                                          <div class="form-group col-sm-2">
                                            <button type="button" class="btn btn-primary" onclick="inhistoria()">REGISTRAR</button>
                                          </div>
                                          <div class="form-group col-md-2">
                                            <button type="button" class="btn btn-danger" onclick="msg()">CANCELAR</button>
                                          </div> -->
                                        </div>
                                      </div>
                                      <div class="collapse multi-collapse collapse" id="op2cs" data-parent="#accordion3cs">
                                        <div class="">
                                          <div class="form-group col-md-12">
                                            <label class="col-form-label"><strong>Pag. 2 - Ingreso Pad</strong></label>
                                          </div>
                                          <div class="accordion form-group col-md-12" id="separacs">
                                            <div class="card">
                                              <div class="card-header" id="headiuno">
                                                  <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#cspad1cs"
                                                  aria-expanded="false" aria-controls="cspad1cs">
                                                    Revisión Por Sistemas
                                                  </button>
                                                </div>
                                                <div class="collapse" id="cspad1cs" aria-labelledby="headiuno" data-parent="#separacs">
                                                  <div class="card-body">
                                                    <div class="row">
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Endocrinológico:</strong></label>
                                                        <input type="text" class="form-control" placeholder="RxS" id="csendocrinologico" name="csendocrinologico" required />
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Organos de los Sentidos:</strong></label>
                                                        <input type="text" class="form-control" placeholder="RxS" id="csorganos" name="csorganos" required />
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Cardio pulmonar:</strong></label>
                                                        <input type="text" class="form-control" placeholder="RxS" id="cscardiopulmonar" name="cscardiopulmonar" required />
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Gastrointestinal:</strong></label>
                                                        <input type="text" class="form-control" placeholder="RxS" id="csgastrointestinal" name="csgastrointestinal" required />
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Genitourinario:</strong></label>
                                                        <input type="text" class="form-control" placeholder="RxS" id="csrvsgenitourinario" name="csrvsgenitourinario" required />
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Osteomuscular:</strong></label>
                                                        <input type="text" class="form-control" placeholder="RxS" id="csosteomuscular" name="csosteomuscular" required />
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Neurologico:</strong></label>
                                                        <input type="text" class="form-control" placeholder="RxS" id="csneurologico" name="csneurologico" required />
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Piel y Farenas:</strong></label>
                                                        <input type="text" class="form-control" placeholder="RxS" id="csfarenas" name="csfarenas" required />
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Otros:</strong></label>
                                                        <input type="text" class="form-control" placeholder="RxS" id="csrvsotros" name="csrvsotros" required />
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                              <div class="card-header" id="headidos">
                                                  <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#cspad2cs"
                                                  aria-expanded="false" aria-controls="cspad2cs">
                                                    Examen Físico
                                                  </button>
                                                </div>
                                                <div class="collapse" id="cspad2cs" aria-labelledby="headidos" data-parent="#separacs">
                                                  <div class="card-body">
                                                    <div class="row">
                                                      <div class="form-group col-md-6">
                                                        <label for="" class="col-form-label"><strong>Estado General:</strong></label>
                                                        <select class="form-control" id="cstipoegeneral" name="cstipoegeneral" required>
                                                          <option selected value="0">Elija</option>
                                                          <option value="NF">Normal</option>
                                                          <option value="B">Bueno</option>
                                                          <option value="A">Aceptable</option>
                                                          <option value="R">Regular</option>
                                                          <option value="M">Malo</option>
                                                        </select>
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label for="" class="col-form-label"><strong>Estado de Conciencia:</strong></label>
                                                        <select class="form-control" id="cstipoeconciencia" name="cstipoeconciencia" required>
                                                          <option selected value="0">Elija</option>
                                                          <option value="NF">Normal</option>
                                                          <option value="1">Alerta</option>
                                                          <option value="2">Somnoliento</option>
                                                          <option value="3">Estupor</option>
                                                          <option value="4">Confuso</option>
                                                          <option value="5">Obnubilado</option>
                                                          <option value="6">Coma</option>
                                                          <option value="7">Fallecido</option>
                                                        </select>
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label for="" class="col-form-label"><strong>Estado de Hidratacion:</strong></label>
                                                        <select class="form-control" id="cstipoehidratacion" name="cstipoehidratacion" required>
                                                          <option selected value="0">Elija</option>
                                                          <option value="NF">Normal</option>
                                                          <option value="1">Hidratado</option>
                                                          <option value="2">D. Leve</option>
                                                          <option value="3">D. Moderado</option>
                                                          <option value="4erespiratorio">D. Severa</option>
                                                        </select>
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Estado Respiratorio:</strong></label>
                                                        <input type="text" class="form-control" placeholder="Bien, Malo, Regular" id="cserespiratorio" name="cserespiratorio" required />
                                                      </div>
                                                      <div class="form-group col-md-4">
                                                        <label class="col-form-label"><strong>Frecuencia Cardíaca</strong></label>
                                                        <div class="input-group">
                                                          <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                              <img src="<?php echo base_url();?>assets/img/fc.jpg" class="rounded-circle" width="150px" height="180px">
                                                            </span>
                                                          </div>
                                                          <input type="text" class="form-control" placeholder="" id="csfc" name="csfc" minlength="1" maxlength="6" pattern="\S[0-9A-Za-z, ]{1,6}" required />
                                                        </div>
                                                      </div>
                                                      <div class="form-group col-md-4">
                                                        <label class="col-form-label"><strong>Frecuencia Respiratoria</strong></label>
                                                        <div class="input-group">
                                                          <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                              <img src="<?php echo base_url();?>assets/img/fr.jpg" class="rounded-circle" width="150px" height="180px">
                                                            </span>
                                                          </div>
                                                          <input type="text" class="form-control" placeholder="" id="csfr" name="csfr" minlength="1" maxlength="8" pattern="\S[A-Za-z0-9,. ]{1,8}" required />
                                                        </div>
                                                      </div>
                                                      <div class="form-group col-md-4">
                                                        <label class="col-form-label"><strong>Sístole</strong></label>  
                                                        <input type="text" class="form-control" placeholder="" id="cssis" name="cssis" minlength="1" maxlength="6" pattern="\S[A-Za-z0-9 ]{1,6}" required />
                                                        <label class="col-form-label"><strong>Diástole</strong></label>
                                                        <input type="text" class="form-control" placeholder="" id="csdias" name="csdias"  minlength="1" maxlength="6" pattern="\S[A-Za-z0-9 ]{1,6}" required />
                                                        <label class="col-form-label"><strong>TENSION ARTERIAL:</strong></label>
                                                        <div class="input-group">
                                                          <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                              <img src="<?php echo base_url();?>assets/img/ta.jpg" class="rounded-circle" width="22px" height="22px">
                                                            </span>
                                                          </div>              
                                                          <input type="text" class="form-control" placeholder="" id="csta" name="csta" minlength="1" maxlength="6" pattern="\S[A-Za-z0-9 ]{1,6}" required />
                                                        </div>
                                                      </div>
                                                      <div class="form-group col-md-4">
                                                        <label class="col-form-label"><strong>Temperatura</strong></label>
                                                        <div class="input-group">
                                                          <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                              <img src="<?php echo base_url();?>assets/img/temp.jpg" class="rounded-circle" width="150px" height="150px">
                                                            </span>
                                                          </div>
                                                          <input type="text" class="form-control" placeholder="" id="cstemp" name="cstemp" required />
                                                        </div>
                                                      </div>
                                                      <div class="form-group col-md-4">
                                                        <label class="col-form-label"><strong>Saturación</strong></label>
                                                        <div class="input-group">
                                                          <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                              <img src="<?php echo base_url();?>assets/img/sac.jpg" class="rounded-circle" width="150px" height="150px">
                                                            </span>
                                                          </div>
                                                          <input type="text" class="form-control" placeholder="" id="cssac" name="cssac" minlength="1" maxlength="6" pattern="\S[A-Za-z0-9,. ]{1,6}" required />
                                                        </div>
                                                      </div>
                                                      <div class="form-group col-md-4">
                                                        <label class="col-form-label"><strong>Glucosa</strong></label>
                                                        <div class="input-group">
                                                          <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                              <img src="<?php echo base_url();?>assets/img/glu.jpg" class="rounded-circle" width="150px" height="150px">
                                                            </span>
                                                          </div>
                                                          <input type="text" class="form-control" placeholder="" id="csgluc" name="csgluc" minlength="1" maxlength="6" pattern="\S[A-Za-z0-9,. ]{1,6}" required />
                                                        </div>
                                                      </div>
                                                      <div class="form-group col-md-12">
                                                       <!--  <label class="col-form-label"><strong>Descripcion del Examen:</strong></label>
                                                        <textarea class="form-control" id="csdexamen" name="csdexamen" onkeypress="return cmTexto(event);" required></textarea> -->
                                                      </div>

                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Cabeza:</strong></label>
                                                        <input type="text" class="form-control" placeholder="" id="cscabeza" name="cscabeza" required />
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Ojos:</strong></label>
                                                        <input type="text" class="form-control" placeholder="RxS" id="csojos" name="csojos" required />
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Boca - Mucosa oral:</strong></label>
                                                        <input type="text" class="form-control" placeholder="RxS" id="csboca" name="csboca" required />
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Cuello:</strong></label>
                                                        <input type="text" class="form-control" placeholder="RxS" id="cscuello" name="cscuello" required />
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Torax/Mamas:</strong></label>
                                                        <input type="text" class="form-control" placeholder="RxS" id="cstorax" name="cstorax" required />
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Cardio Pulmonar:</strong></label>
                                                        <input type="text" class="form-control" placeholder="RxS" id="cscpulmonar" name="cscpulmonar" required />
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Abdomen:</strong></label>
                                                        <input type="text" class="form-control" placeholder="RxS" id="csabdomen" name="csabdomen" required />
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Genitourinario:</strong></label>
                                                        <input type="text" class="form-control" placeholder="RxS" id="csgenitourinario" name="csgenitourinario" required />
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Extremidades:</strong></label>
                                                        <input type="text" class="form-control" placeholder="RxS" id="csextremidades" name="csextremidades" required />
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>SNC:</strong></label>
                                                        <input type="text" class="form-control" placeholder="RxS" id="cssnc" name="cssnc" required />
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Mental:</strong></label>
                                                        <input type="text" class="form-control" placeholder="RxS" id="csmental" name="csmental" required />
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Piel:</strong></label>
                                                        <input type="text" class="form-control" placeholder="RxS" id="cspiel" name="cspiel" required />
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Otros:</strong></label>
                                                        <input type="text" class="form-control" placeholder="RxS" id="csotros" name="csotros" required />
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                          </div>  
                                        </div>
                                      </div>
                                      <div class="collapse multi-collapse collapse" id="op3cs" data-parent="#accordion3cs">
                                        <div class="form-row">
                                          <div class="form-group col-md-12">
                                            <label class="col-form-label"><strong>Pag. 3 - Ingreso Pad</strong></label>
                                          </div>
                                          <div class="accordion form-group col-md-12" id="separa2cs">
                                            <div class="card">
                                              <div class="card-header" id="headiuno">
                                                  <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#cspad3cs"
                                                  aria-expanded="false" aria-controls="cspad3cs">
                                                    Acceso Venoso, Ostomía, Sondas
                                                  </button>
                                                </div>
                                                <div class="collapse" id="cspad3cs" aria-labelledby="headiuno" data-parent="#separa2cs">
                                                  <div class="card-body">
                                                    <div class="row">
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Acceso Venoso:</strong></label>
                                                        <div class="row">
                                                          <div class="col-md-6">
                                                              <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="acceso_venoso[]" id="csacceso_venoso1" onclick="" value="No Selecciona">
                                                                <label class="form-check-label">No Selecciona</label>
                                                              </div>
                                                              <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="acceso_venoso[]" id="csacceso_venoso2" onclick=""  value="Periférico" >
                                                                <label class="form-check-label">Periférico</label>
                                                              </div>
                                                              <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="acceso_venoso[]" id="csacceso_venoso3" onclick=""  value="Central Subclavio">
                                                                <label class="form-check-label">Central Subclavio</label>
                                                              </div>
                                                              <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="acceso_venoso[]" id="csacceso_venoso4" onclick=""  value="Central Yugular" >
                                                                <label class="form-check-label">Central Yugular</label>
                                                              </div>
                                                              <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="acceso_venoso[]" id="csacceso_venoso5" onclick="" value="Central Femoral">
                                                                <label class="form-check-label">Central Femoral</label>
                                                              </div>
                                                              <div class="form-group"></br>
                                                                <label class="col-form-label">Estado Catéter</label>
                                                                <input type="text" class="form-control" id="csaccateter" name="accateter" placeholeder="activo" />
                                                              </div>
                                                          </div>
                                                          <div class="col-md-6">
                                                            <div class="form-check">
                                                              <input class="form-check-input" type="checkbox" name="acceso_venoso[]" id="csacceso_venoso6" onclick=""  value="Drum" >
                                                              <label class="form-check-label">Drum</label>
                                                            </div>
                                                            <div class="form-check">
                                                              <input class="form-check-input" type="checkbox" name="acceso_venoso[]" id="csacceso_venoso7" onclick=""  value="PVC">
                                                              <label class="form-check-label">PVC</label>
                                                            </div>
                                                            <div class="form-check">
                                                              <input class="form-check-input" type="checkbox" name="acceso_venoso[]" id="csacceso_venoso8" onclick=""  value="Implantado" >
                                                              <label class="form-check-label">Implantado</label>
                                                            </div>
                                                            <div class="form-check">
                                                              <input class="form-check-input" type="checkbox" name="acceso_venoso[]" id="csacceso_venoso9" onclick=""  value="Subcutáneo" >
                                                              <label class="form-check-label">Subcutáneo</label>
                                                            </div>
                                                            <div class="form-group"></br></br>
                                                              <label class="col-form-label">Fecha Inserción</label>
                                                              <input class="form-control" type="text" id="csacfinsercion" name="csacfinsercion" style="display:" >
                                                              <input class="form-control" type="text" id="csauxvenoso" name="csauxvenoso" style="display:none" >
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Ostomía:</strong></label>
                                                        <div class="row">
                                                          <div class="col-md-6">
                                                            <div class="form-check">
                                                              <input class="form-check-input" type="checkbox" name="ostomina[]" id="csostomina1" onclick="" value="No Selecciona">
                                                              <label class="form-check-label">No Selecciona</label>
                                                            </div>
                                                            <div class="form-check">
                                                              <input class="form-check-input" type="checkbox" name="ostomina[]" id="csostomina2" onclick=""  value="Traqueostomía" >
                                                              <label class="form-check-label">Traqueostomía</label>
                                                            </div>
                                                            <div class="form-check">
                                                              <input class="form-check-input" type="checkbox" name="ostomina[]" id="csostomina3" onclick=""  value="Yeyunostomía">
                                                              <label class="form-check-label">Yeyunostomía</label>
                                                            </div>
                                                            
                                                            <div class="form-check">
                                                              <input class="form-check-input" type="checkbox" name="ostomina[]" id="csostomina5" onclick="" value="Ileostomía">
                                                              <label class="form-check-label">Ileostomía</label>
                                                            </div>
                                                            <div class="form-check">
                                                              <input class="form-check-input" type="checkbox" name="ostomina[]" id="csostomina6" onclick=""  value="Urostomía" >
                                                              <label class="form-check-label">Urostomía</label>
                                                            </div>
                                                            <div class="form-group"></br>
                                                              <label class="col-form-label">Estado Ostomía</label>
                                                              <input type="text" class="form-control" id="csoeostomina" name="csoeostomina" placeholeder="activo" />
                                                            </div>
                                                          </div>
                                                          <div class="col-md-6">
                                                            <div class="form-check">
                                                              <input class="form-check-input" type="checkbox" name="ostomina[]" id="csostomina7" onclick=""  value="Colostomía">
                                                              <label class="form-check-label">Colostomía</label>
                                                            </div>
                                                            <div class="form-check">
                                                              <input class="form-check-input" type="checkbox" name="ostomina[]" id="csostomina4" onclick=""  value="Otra" >
                                                              <label class="form-check-label">Otra</label>
                                                            </div>
                                                            <div class="form-group">
                                                              <label class="col-form-label">Cual ?</label>
                                                              <input type="text" class="form-control" id="csocualostomina" name="ocualostomina" placeholeder="activo" />
                                                            </div>
                                                            <div class="form-group">
                                                              <label class="col-form-label">Fecha Ostomía</label>
                                                              <input class="form-control" type="text" id="csofostomina" name="csofostomina" style="display:" >
                                                              <input class="form-control" type="text" id="csauxostomia" name="csauxostomia" style="display:none" >
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="form-group col-md-12">
                                                        <label class="col-form-label"><strong>Sondas:</strong></label>
                                                        <div class="row">
                                                          <div class="col-md-3">
                                                             <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="vesical[]" id="csvesical1" onclick="" value="No Selecciona">
                                                                <label class="form-check-label">No Selecciona</label>
                                                              </div>
                                                              <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="vesical[]" id="csvesical2" onclick=""  value="Nasogástrica" >
                                                                <label class="form-check-label">Nasogástrica</label>
                                                              </div>
                                                              <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="vesical[]" id="csvesical3" onclick=""  value="Nasoyeyunal">
                                                                <label class="form-check-label">Nasoyeyunal</label>
                                                              </div>
                                                              <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="vesical[]" id="csvesical4" onclick=""  value="Gastrostomía" >
                                                                <label class="form-check-label">Gastrostomía</label>
                                                              </div>
                                                              <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="vesical[]" id="csvesical6" onclick=""  value="Yeyunostomía" >
                                                                <label class="form-check-label">Yeyunostomía</label>
                                                              </div>
                                                              <div class="form-check">
                                                              <input class="form-check-input" type="checkbox" name="vesical[]" id="csvesical7" onclick=""  value="Cistostomía">
                                                                <label class="form-check-label">Cistostomía</label>
                                                              </div>
                                                              <div class="form-group">
                                                                <label class="col-form-label">Estado</label>
                                                                <input type="text" class="form-control" id="cssondaestado" name="cssondaestado" placeholeder="activo" />
                                                              </div>
                                                          </div>
                                                          <div class="col-md-3">
                                                            <div class="form-check"></div>                            
                                                            <div class="form-check">
                                                              <input class="form-check-input" type="checkbox" name="vesical[]" id="csvesical8" onclick=""  value="Vesical" >
                                                              <label class="form-check-label">Vesical</label>
                                                            </div>
                                                            <div class="form-check">
                                                              <input class="form-check-input" type="checkbox" name="vesical[]" id="csvesical5" onclick="" value="Otra">
                                                              <label class="form-check-label">Otra</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-form-label">Cual ?</label>
                                                                <input type="text" class="form-control" id="cscualsonda" name="cualsonda" placeholeder="activo" />
                                                              </div>
                                                            <div class="form-group">
                                                              <label class="col-form-label">Fecha Postura</label>
                                                              <input class="form-control" type="text" id="cssfpostura" name="cssfpostura" style="display:" >
                                                              <input class="form-control" type="text" id="csauxsonda" name="csauxsonda" style="display:none" >
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                              <div class="card-header" id="headidos">
                                                  <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#cspad4cs"
                                                  aria-expanded="false" aria-controls="cspad4cs">
                                                    Escala de Dolor
                                                  </button>
                                                </div>
                                                <div class="collapse" id="cspad4cs" aria-labelledby="headidos" data-parent="#separa2cs">
                                                  <div class="card-body">
                                                    <div class="row">
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label">Región</label>
                                                        <input type="text" class="form-control" id="csedregion" name="csedregion" placeholeder="activo" />
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label">Irradiación</label>
                                                        <input type="text" class="form-control" id="csedirradiacion" name="csedirradiacion" placeholeder="activo" />
                                                      </div>
                                                      <div class="form-group col-md-12">
                                                        <label for="formControlRange">Nivel de Dolor</label>
                                                        <div class="progress">
                                                          <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">0</div>
                                                          <div class="progress-bar bg-white" role="" style="width: 9%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                          <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">1</div>
                                                          <div class="progress-bar bg-white" role="" style="width: 9%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                          <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">2</div>
                                                          <div class="progress-bar bg-white" role="" style="width: 9%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                          <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">3</div>
                                                          <div class="progress-bar bg-white" role="" style="width: 9%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                          <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">4</div>
                                                          <div class="progress-bar bg-white" role="" style="width: 9%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                          <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">5</div>
                                                          <div class="progress-bar bg-white" role="" style="width: 9%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                          <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">6</div>
                                                          <div class="progress-bar bg-white" role="" style="width: 9%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                          <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">7</div>
                                                          <div class="progress-bar bg-white" role="" style="width: 9%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                          <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">8</div>
                                                          <div class="progress-bar bg-white" role="" style="width: 9%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                          <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">9</div>
                                                          <div class="progress-bar bg-white" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                          <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10</div>
                                                        </div>
                                                        <input type="range" class="form-control-range" id="csdolorn" name="csdolorn" value="5" min="0" max="10" step="1" onchange="mostrarimgescala()">
                                                        <div class="row">
                                                          <div class="col-md-12 text-center">
                                                            <img src="<?php echo base_url();?>assets/img/c6.jpeg" id="csmcara" class="rounded-circle" width="100" height="100">
                                                          </div>
                                                        </div>
                                                        <div class="progress">
                                                          <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">Sin dolor</div>
                                                          <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">Dolor Leve</div>
                                                          <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">Dolor moderado</div>
                                                          <div class="progress-bar bg-danger" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">Dolor Cronico</div>
                                                        </div>
                                                      </div>
                                                       <div class="form-group col-md-6">
                                                        <!-- <input type="text" class="form-control" id="cs" name="" style="display:none" readonly="" /> -->
                                                      </div>
                                                      <div class="form-group col-md-12">
                                                      </div>
                                                      <div class="form-group col-md-6 text-center">
                                                          <img src="<?php echo base_url();?>assets/img/areas.png">
                                                      </div>
                                                      <div class="form-group col-md-6 ">
                                                        <div class="row">
                                                          <div class="col-md-6">
                                                            <label class="col-form-label">Tipo de Dolor</label>
                                                             <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tipodolor[]" id="cstipodolor1" onclick="" value="No Selecciona">
                                                                <label class="form-check-label">No Selecciona</label>
                                                              </div>
                                                              <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tipodolor[]" id="cstipodolor2" onclick=""  value="Visceral" >
                                                                <label class="form-check-label">Visceral</label>
                                                              </div>
                                                              <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tipodolor[]" id="cstipodolor3" onclick=""  value="Óseo">
                                                                <label class="form-check-label">Óseo</label>
                                                              </div>
                                                              <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tipodolor[]" id="cstipodolor4" onclick=""  value="Tejidos Blandos" >
                                                                <label class="form-check-label">Tejidos Blandos</label>
                                                              </div>
                                                              <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tipodolor[]" id="cstipodolor5" onclick="" value="Neuropático">
                                                                <label class="form-check-label">Neuropático</label>
                                                              </div>
                                                              <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tipodolor[]" id="cstipodolor6" onclick=""  value="Mixto" >
                                                                <label class="form-check-label">Mixto</label>
                                                              </div>
                                                              <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="tipodolor[]" id="cstipodolor7" onclick=""  value="Incidental">
                                                                <label class="form-check-label">Incidental</label>
                                                                <input type="text" class="form-control" id="csauxdolor" name="csauxdolor" style="display:none"/>
                                                              </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="form-group col-md-12">
                                                        <label class="col-form-label"><strong>Tratamiento Previo:</strong></label>
                                                        <div class="row">
                                                          <div class="form-group col-md-2">
                                                            <div class="form-check"><br><br>
                                                              <input class="form-check-input" type="radio"  name="cstprevio" id="cstprevio1" onclick="" value="si">
                                                              <label class="form-check-label">Si</label>
                                                            </div>
                                                          </div>
                                                          <div class="form-group col-md-2">
                                                            <div class="form-check"><br><br>
                                                              <input class="form-check-input" type="radio"  name="cstprevio" id="cstprevio2" onclick="" value="no">
                                                              <label class="form-check-label">No</label>
                                                              <input class="forrm-control" type="text" id="csauxtp" name="csauxtp" style="display:none" >
                                                            </div>
                                                          </div>
                                                          <div class="form-group col-md-4">
                                                            <label class="col-form-label">Cual ?</label>
                                                              <input type="text" class="form-control" id="cscualtprevio" name="cscualtprevio" placeholeder="activo" />
                                                          </div>
                                                          <div class="form-group col-md-4">
                                                            <label for="" class="col-form-label"><strong>Alivio:</strong></label>
                                                            <select class="form-control" id="cstpalivio" name="cstpalivio" required>
                                                              <option selected value="0">Elija</option>
                                                              <option value="NF">No Refiere</option>
                                                              <option value="N">Nada</option>
                                                              <option value="P">Poco</option>
                                                              <option value="B">Bastante</option>
                                                              <option value="M">Mucho</option>
                                                            </select>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        
                                                      </div>
                                                      <!-- <div class="form-group col-md-12">
                                                        <label class="col-form-label"><strong>Resultador Ultimos Paraclinicos:</strong></label>
                                                        <textarea class="form-control" id="uparaclinico" name="uparaclinico" onkeypress="" required></textarea>
                                                      </div>
                                                      <div class="form-group col-md-12">
                                                        <label class="col-form-label"><strong>Plan de Manejo Medico Actual:</strong></label>
                                                        <textarea class="form-control" id="planmedicoactual" name="planmedicoactual" onkeypress="" required></textarea>
                                                      </div> -->
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                              <div class="card-header" id="headidos">
                                                  <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#cspad5cs"
                                                  aria-expanded="false" aria-controls="cspad5cs">
                                                    Plan de Manejo
                                                  </button>
                                                </div>
                                                <div class="collapse" id="cspad5cs" aria-labelledby="headidos" data-parent="#separa2cs">
                                                  <div class="card-body">
                                                    <div class="row">
                                                      <div class="form-group col-md-12">
                                                        <label class="form-label">Programa al que ingresa:</label>
                                                        <input class="form-control" type="text" id="csprogrmaingreso" name="csprogrmaingreso"  >
                                                      </div>
                                                      <div class="form-group col-md-12">
                                                        <div class="row">
                                                          <div class="form-group col-md-2  mt-4 pt-4">
                                                            <label class="form-label">Oxigeno:</label>
                                                          </div>
                                                          <div class="form-group col-md-3 text-center">                                                  
                                                            <div class="row">
                                                              <div class="form-group col-md-6">
                                                                <div class="form-check"><br><br>
                                                                  <input class="form-check-input" type="radio"  name="csnoxigeno" id="csnoxigeno1" onclick="" value="si">
                                                                  <label class="form-check-label">Si</label>
                                                                </div>
                                                              </div>
                                                              <div class="form-group col-md-6">
                                                                <div class="form-check"><br><br>
                                                                  <input class="form-check-input" type="radio"  name="csnoxigeno" id="csnoxigeno2" onclick="" value="no">
                                                                  <label class="form-check-label">No</label>
                                                                  <input class="forrm-control" type="text" id="csauxnoxigeno" name="csauxnoxigeno" style="display:none" >
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="form-group col-md-7 mt-2 pt-2">
                                                            <label class="form-label">Detalle:</label>
                                                            <input class="form-control" type="text" id="cseldtnoxigeno" name="cseldtnoxigeno"  >
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="form-group col-md-12">
                                                          <label class="">Dieta:</label>
                                                          <input class="form-control" type="text" id="cspmdieta" name="cspmdieta"  >
                                                      </div>
                                                      <div class="form-group col-md-12">
                                                        <label class="col-form-label"><strong>Medicamentos:</strong></label>
                                                        <textarea class="form-control" id="cslosmd" name="cslosmd" readonly=""></textarea>
                                                      </div>
                                                      <div class="form-group col-md-12">
                                                        <label class="col-form-label"><strong>Análisis:</strong></label>
                                                        <!-- <div class="input-group">
                                                          <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                              <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                                                            </span>
                                                          </div>
                                                          <input type="text" class="form-control" placeholder="" id="csanalisis" name="csanalisis" required />
                                                        </div> -->
                                                        <textarea class="form-control" id="csanalisis" name="csanalisis" rows="8" required></textarea>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                          </div>
                                          
                                        </div>
                                      </div>
                                      <div class="collapse multi-collapse collapse" id="op4cs" data-parent="#accordion3cs">
                                        <div class="form-row">
                                          <div class="form-group col-md-12">
                                            <label class="col-form-label"><strong>Pag. 4 - Ingreso Pad</strong></label>
                                          </div>
                                          <div class="accordion form-group col-md-12" id="separa3cs">
                                            <div class="card">
                                              <div class="card-header" id="headiuno">
                                                  <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#cspad6cs"
                                                  aria-expanded="false" aria-controls="cspad6cs">
                                                    Diagnósticos
                                                  </button>
                                                </div>
                                                <div class="collapse" id="cspad6cs" aria-labelledby="headiuno" data-parent="#separa3cs">
                                                  <div class="card-body">
                                                    <div class="row">
                                                      <div class="form-group col-md-12">
                                                        <label class="col-form-label"><strong>Diagnósticos:</strong></label>
                                                        <textarea class="form-control" id="cslosdig" name="cslosdig" readonly=""></textarea>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                              <div class="card-header" id="headidos">
                                                  <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#cspad7cs"
                                                  aria-expanded="false" aria-controls="cspad7cs">
                                                    Determinación de atención y manejo
                                                  </button>
                                                </div>
                                                <div class="collapse" id="cspad7cs" aria-labelledby="headidos" data-parent="#separa3cs">
                                                  <div class="card-body">
                                                    <div class="">
                                                      <div class="form-group col-md-12">
                                                        <label class="col-form-label text-uppercase"><strong>Asistencia y Cuidados:</strong></label>
                                                        <div class="row">
                                                          <div class="form-group col-md-6">
                                                            <label class="col-form-label text-uppercase"><strong>Medico:</strong></label>
                                                            <div class="row">
                                                              <div class="form-group col-md-6">                                                  
                                                                <div class="row">
                                                                  <div class="form-group col-md-6">
                                                                    <div class="form-check"><br><br>
                                                                      <input class="form-check-input" type="radio"  name="snmedico" id="csaycmedico1" onclick="" value="si">
                                                                      <label class="form-check-label">Si</label>
                                                                    </div>
                                                                  </div>
                                                                  <div class="form-group col-md-6">
                                                                    <div class="form-check"><br><br>
                                                                      <input class="form-check-input" type="radio"  name="snmedico" id="csaycmedico2" onclick="" value="no">
                                                                      <label class="form-check-label">No</label>
                                                                      <input class="forrm-control" type="text" id="csauxaycmedico" name="csauxaycmedico" style="display:none" >
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="form-group col-md-12">
                                                                  <label>Detalle</label>
                                                                  <textarea class="form-control" id="cseldtsnmedico" name="cseldtsnmedico" required></textarea>
                                                              </div>
                                                            </div>                               
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            <label class="col-form-label text-uppercase"><strong>Enfermera:</strong></label>
                                                            <div class="row">
                                                              <div class="form-group col-md-6">                                                  
                                                                <div class="row">
                                                                  <div class="form-group col-md-6">
                                                                    <div class="form-check"><br><br>
                                                                      <input class="form-check-input" type="radio"  name="snenfermera" id="csaycenfermera1" onclick="" value="si">
                                                                      <label class="form-check-label">Si</label>
                                                                    </div>
                                                                  </div>
                                                                  <div class="form-group col-md-6">
                                                                    <div class="form-check"><br><br>
                                                                      <input class="form-check-input" type="radio"  name="snenfermera" id="csaycenfermera2" onclick="" value="no">
                                                                      <label class="form-check-label">No</label>
                                                                      <input type="text" class="form-control" id="csauxaycenfermera" name="csauxaycenfermera" style="display:none"/>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="form-group col-md-12">
                                                                  <label>Detalle</label>
                                                                   <textarea class="form-control" id="cseldtenfermera" name="cseldtenfermera" required></textarea>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            <label class="col-form-label text-uppercase"><strong>Trabajo Social:</strong></label>
                                                            <div class="row">
                                                              <div class="form-group col-md-6">                                                  
                                                                <div class="row">
                                                                  <div class="form-group col-md-6">
                                                                    <div class="form-check"><br><br>
                                                                      <input class="form-check-input" type="radio"  name="sntrabajosocial" id="csayctsocial1" onclick="" value="si">
                                                                      <label class="form-check-label">Si</label>
                                                                    </div>
                                                                  </div>
                                                                  <div class="form-group col-md-6">
                                                                    <div class="form-check"><br><br>
                                                                      <input class="form-check-input" type="radio"  name="sntrabajosocial" id="csayctsocial2" onclick="" value="no">
                                                                      <label class="form-check-label">No</label>
                                                                      <input type="text" class="form-control" id="csauxayctsocial" name="csauxayctsocial" style="display:none"/>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="form-group col-md-12">
                                                                  <label>Detalle</label>
                                                                   <textarea class="form-control" id="cseldttrabajosocial" name="cseldttrabajosocial" required></textarea>
                                                              </div>
                                                            </div>                               
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            <label class="col-form-label text-uppercase"><strong>Nutricion:</strong></label>
                                                            <div class="row">
                                                              <div class="form-group col-md-6">                                                  
                                                                <div class="row">
                                                                  <div class="form-group col-md-6">
                                                                    <div class="form-check"><br><br>
                                                                      <input class="form-check-input" type="radio"  name="snnutricion" id="csaycnutricion1" onclick="" value="si">
                                                                      <label class="form-check-label">Si</label>
                                                                    </div>
                                                                  </div>
                                                                  <div class="form-group col-md-6">
                                                                    <div class="form-check"><br><br>
                                                                      <input class="form-check-input" type="radio"  name="snnutricion" id="csaycnutricion2" onclick="" value="no">
                                                                      <label class="form-check-label">No</label>
                                                                      <input type="text" class="form-control" id="csauxaycnutricion" name="csauxaycnutricion" style="display:none"/>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="form-group col-md-12">
                                                                  <label>Detalle</label>
                                                                   <textarea class="form-control" id="cseldtnutricion" name="cseldtnutricion" required></textarea>
                                                              </div>
                                                            </div>                               
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            <label class="col-form-label text-uppercase"><strong>Fisioterapia:</strong></label>
                                                            <div class="row">
                                                              <div class="form-group col-md-6">                                                  
                                                                <div class="row">
                                                                  <div class="form-group col-md-6">
                                                                    <div class="form-check"><br><br>
                                                                      <input class="form-check-input" type="radio"  name="snfisioterapia" id="csaycfisioterapia1" onclick="" value="si">
                                                                      <label class="form-check-label">Si</label>
                                                                    </div>
                                                                  </div>
                                                                  <div class="form-group col-md-6">
                                                                    <div class="form-check"><br><br>
                                                                      <input class="form-check-input" type="radio"  name="snfisioterapia" id="csaycfisioterapia2" onclick="" value="no">
                                                                      <label class="form-check-label">No</label>
                                                                      <input type="text" class="form-control" id="csauxaycfisioterapia" name="csauxaycfisioterapia" style="display:none"/>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="form-group col-md-12">
                                                                  <label>Detalle</label>
                                                                   <textarea class="form-control" id="cseldtfisioterapia" name="cseldtfisioterapia" required></textarea>
                                                              </div>
                                                            </div>  
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            <label class="col-form-label text-uppercase"><strong>T. Respiratoria:</strong></label>
                                                            <div class="row">
                                                              <div class="form-group col-md-6">                                                  
                                                                <div class="row">
                                                                  <div class="form-group col-md-6">
                                                                    <div class="form-check"><br><br>
                                                                      <input class="form-check-input" type="radio"  name="sntrespiratoria" id="csayctrespiratoria1" onclick="" value="si">
                                                                      <label class="form-check-label">Si</label>
                                                                    </div>
                                                                  </div>
                                                                  <div class="form-group col-md-6">
                                                                    <div class="form-check"><br><br>
                                                                      <input class="form-check-input" type="radio"  name="sntrespiratoria" id="csayctrespiratoria2" onclick="" value="no">
                                                                      <label class="form-check-label">No</label>
                                                                      <input type="text" class="form-control" id="csauxayctrespiratoria" name="csauxayctrespiratoria" style="display:none"/>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="form-group col-md-12">
                                                                  <label>Detalle</label>
                                                                   <textarea class="form-control" id="cseldttrespiratoria" name="cseldttrespiratoria" required></textarea>
                                                              </div>
                                                            </div>  
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            <label class="col-form-label text-uppercase"><strong>T. Ocupacional:</strong></label>
                                                            <div class="row">
                                                              <div class="form-group col-md-6">                                                  
                                                                <div class="row">
                                                                  <div class="form-group col-md-6">
                                                                    <div class="form-check"><br><br>
                                                                      <input class="form-check-input" type="radio"  name="sntocupacional" id="csayctocupacional1" onclick="" value="si">
                                                                      <label class="form-check-label">Si</label>
                                                                    </div>
                                                                  </div>
                                                                  <div class="form-group col-md-6">
                                                                    <div class="form-check"><br><br>
                                                                      <input class="form-check-input" type="radio"  name="sntocupacional" id="csayctocupacional2" onclick="" value="no">
                                                                      <label class="form-check-label">No</label>
                                                                      <input type="text" class="form-control" id="csauxayctocupacional" name="csauxayctocupacional" style="display:none"/>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="form-group col-md-12">
                                                                  <label>Detalle</label>
                                                                   <textarea class="form-control" id="cseldttocupacional" name="cseldttocupacional" required></textarea>
                                                              </div>
                                                            </div>  
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            <label class="col-form-label text-uppercase"><strong>T. Lenguaje:</strong></label>
                                                            <div class="row">
                                                              <div class="form-group col-md-6">                                                  
                                                                <div class="row">
                                                                  <div class="form-group col-md-6">
                                                                    <div class="form-check"><br><br>
                                                                      <input class="form-check-input" type="radio"  name="sntlenguaje" id="csayctlenguaje1" onclick="" value="si">
                                                                      <label class="form-check-label">Si</label>
                                                                    </div>
                                                                  </div>
                                                                  <div class="form-group col-md-6">
                                                                    <div class="form-check"><br><br>
                                                                      <input class="form-check-input" type="radio"  name="sntlenguaje" id="csayctlenguaje2" onclick="" value="no">
                                                                      <label class="form-check-label">No</label>
                                                                      <input type="text" class="form-control" id="csauxayctlenguaje" name="csauxayctlenguaje" style="display:none"/>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="form-group col-md-12">
                                                                  <label>Detalle</label>
                                                                   <textarea class="form-control" id="cseldttlenguaje" name="cseldttlenguaje" required></textarea>
                                                              </div>
                                                            </div>  
                                                          </div>
                                                          <div class="form-group col-md-12">
                                                            <label class="col-form-label text-uppercase"><strong>Aux. Enfermeria:</strong></label>
                                                            <div class="row">
                                                              <div class="form-group col-md-6">                                                  
                                                                <div class="row">
                                                                  <div class="form-group col-md-6">
                                                                    <div class="form-check"><br><br>
                                                                      <input class="form-check-input" type="radio"  name="snauxenfermeria" id="csauxenfermeria1" onclick="" value="si">
                                                                      <label class="form-check-label">Si</label>
                                                                    </div>
                                                                  </div>
                                                                  <div class="form-group col-md-6">
                                                                    <div class="form-check"><br><br>
                                                                      <input class="form-check-input" type="radio"  name="snauxenfermeria" id="csauxenfermeria2" onclick="" value="no">
                                                                      <label class="form-check-label">No</label>
                                                                      <input type="text" class="form-control" id="csauxauxenfermeria" name="csauxauxenfermeria" style="display:none"/>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="form-group col-md-6">
                                                                  <label>Detalle</label>
                                                                   <textarea class="form-control" id="csotroenfermeria" name="csotroenfermeria" required></textarea>                                                        </div>
                                                            </div>  
                                                          </div>
                                                          <div class="form-group col-md-12">
                                                            <label class="col-form-label text-uppercase"><strong>Educacion:</strong></label>
                                                            <div class="row">
                                                              <div class="form-group col-md-6">                                                  
                                                                <div class="row">
                                                                  <div class="form-group col-md-6">
                                                                    <div class="form-check"><br><br>
                                                                      <input class="form-check-input" type="radio"  name="sneducacion" id="csayceducacion1" onclick="" value="si">
                                                                      <label class="form-check-label">Si</label>
                                                                    </div>
                                                                  </div>
                                                                  <div class="form-group col-md-6">
                                                                    <div class="form-check"><br><br>
                                                                      <input class="form-check-input" type="radio"  name="sneducacion" id="csayceducacion2" onclick="" value="no">
                                                                      <label class="form-check-label">No</label>
                                                                      <input type="text" class="form-control" id="csauxayceducacion" name="csauxayceducacion" style="display:none"/>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="form-group col-md-12">
                                                                  <label>Detalle</label>
                                                                   <textarea class="form-control" id="cseldteducacion" name="cseldteducacion" required></textarea>
                                                              </div>
                                                            </div>  
                                                          </div>
                                                          <div class="form-group col-md-12">
                                                            <label class="col-form-label text-uppercase"><strong>Paraclinicos:</strong></label>
                                                            <div class="row">
                                                              <div class="form-group col-md-6">                                                  
                                                                <div class="row">
                                                                  <div class="form-group col-md-6">
                                                                    <div class="form-check"><br><br>
                                                                      <input class="form-check-input" type="radio"  name="snparaclinicos" id="cssnparaclinicos1" onclick="" value="si">
                                                                      <label class="form-check-label">Si</label>
                                                                    </div>
                                                                  </div>
                                                                  <div class="form-group col-md-6">
                                                                    <div class="form-check"><br><br>
                                                                      <input class="form-check-input" type="radio"  name="snparaclinicos" id="cssnparaclinicos2" onclick="" value="no">
                                                                      <label class="form-check-label">No</label>
                                                                      <input type="text" class="form-control" id="csauxaycparaclinicos" name="csauxaycparaclinicos" style="display:none"/>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="form-group col-md-6">
                                                                  <label>Detalle</label>
                                                                   <textarea class="form-control" id="cseldtparaclinicos" name="cseldtparaclinicos" required></textarea>
                                                              </div>
                                                            </div>  
                                                          </div>
                                                          <div class="form-group col-md-12">
                                                            <label>Valoraciones</label>
                                                            <input class="form-control" type="text" id="cspmvaloraciones" name="cspmvaloraciones">
                                                          </div>
                                                          <div class="form-group col-md-12">
                                                            <label>Recomendaciones y Signos de Alarma</label>
                                                            <input class="form-control" type="text" id="cspmrecomendacionessignos" name="cspmrecomendacionessignos">
                                                          </div>

                                                        </div>
                                                      </div>                                               
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                              <div class="card-header" id="headidos">
                                                  <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#cspad8cs"
                                                  aria-expanded="false" aria-controls="cspad8cs">
                                                    ESAS (24H)
                                                  </button>
                                                </div>
                                                <div class="collapse" id="cspad8cs" aria-labelledby="headidos" data-parent="#separa3cs">
                                                  <div class="card-body">
                                                    <div>
                                                      <div class="row">
                                                        <div class="form-group col-md-4">
                                                          <label class="form-label">Dolor</label>
                                                        </div>
                                                        <div class="form-group col-md-8">
                                                          <div class="progress">
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">0</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">1</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">2</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">3</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">4</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">5</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">6</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">7</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">8</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">9</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 7%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 3%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10</div>
                                                          </div>
                                                          <input type="range" class="form-control-range" id="csesasdolor" name="csesasdolor" value="5" min="0" max="10" step="1">
                                                        </div>                                        
                                                      </div>
                                                      <div class="row">
                                                        <div class="form-group col-md-4">
                                                          <label for="formControlRange">Cansancio</label>
                                                        </div>
                                                        <div class="form-group col-md-8">
                                                          <div class="progress">
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">0</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">1</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">2</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">3</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">4</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">5</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">6</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">7</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">8</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">9</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 7%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 3%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10</div>
                                                          </div>
                                                          <input type="range" class="form-control-range" id="csesascansancio" name="csesascansancio" value="5" min="0" max="10" step="1">
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="form-group col-md-4">
                                                          <label for="formControlRange">Nauseas</label>
                                                        </div>
                                                        <div class="form-group col-md-8">
                                                          <div class="progress">
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">0</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">1</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">2</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">3</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">4</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">5</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">6</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">7</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">8</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">9</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 7%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 3%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10</div>
                                                          </div>
                                                          <input type="range" class="form-control-range" id="csesasnauseas" name="csesasnauseas" value="5" min="0" max="10" step="1">
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="form-group col-md-4">
                                                          <label for="formControlRange">Tristeza</label>
                                                        </div>
                                                        <div class="form-group col-md-8">
                                                          <div class="progress">
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">0</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">1</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">2</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">3</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">4</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">5</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">6</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">7</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">8</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">9</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 7%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 3%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10</div>
                                                          </div>
                                                          <input type="range" class="form-control-range" id="csesastristesa" name="csesastristesa" value="5" min="0" max="10" step="1">
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="form-group col-md-4">
                                                          <label for="formControlRange">Angustia</label>
                                                        </div>
                                                        <div class="form-group col-md-8">
                                                          <div class="progress">
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">0</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">1</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">2</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">3</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">4</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">5</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">6</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">7</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">8</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">9</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 7%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 3%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10</div>
                                                          </div>
                                                          <input type="range" class="form-control-range" id="csesasangustia" name="csesasangustia" value="5" min="0" max="10" step="1">
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="form-group col-md-4">
                                                          <label for="formControlRange">Somnolencia</label>
                                                        </div>
                                                        <div class="form-group col-md-8">
                                                          <div class="progress">
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">0</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">1</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">2</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">3</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">4</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">5</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">6</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">7</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">8</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">9</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 7%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 3%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10</div>
                                                          </div>
                                                          <input type="range" class="form-control-range" id="csesassomnolencia" name="csesassomnolencia" value="5" min="0" max="10" step="1">
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="form-group col-md-4">
                                                          <label for="formControlRange">Apetito</label>
                                                        </div>
                                                        <div class="form-group col-md-8">
                                                          <div class="progress">
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">0</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">1</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">2</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">3</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">4</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">5</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">6</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">7</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">8</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">9</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 7%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 3%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10</div>
                                                          </div>
                                                          <input type="range" class="form-control-range" id="csesasapetito" name="csesasapetito" value="5" min="0" max="10" step="1">
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="form-group col-md-4">
                                                          <label for="formControlRange">Disnea</label>
                                                        </div>
                                                        <div class="form-group col-md-8">
                                                          <div class="progress">
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">0</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">1</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">2</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">3</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">4</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">5</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">6</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">7</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">8</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">9</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 7%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 3%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10</div>
                                                          </div>
                                                          <input type="range" class="form-control-range" id="csesasdisnea" name="csesasdisnea" value="5" min="0" max="10" step="1">
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="form-group col-md-4">
                                                          <label for="formControlRange">Insomnio</label>
                                                        </div>
                                                        <div class="form-group col-md-8">
                                                          <div class="progress">
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">0</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">1</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">2</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">3</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">4</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">5</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">6</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">7</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">8</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">9</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 7%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 3%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10</div>
                                                          </div>
                                                          <input type="range" class="form-control-range" id="csesasinsomnio" name="csesasinsomnio" value="5" min="0" max="10" step="1">
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="form-group col-md-4">
                                                          <label for="formControlRange">Estreñimiento</label>
                                                        </div>
                                                        <div class="form-group col-md-8">
                                                          <div class="progress">
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">0</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">1</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">2</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">3</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">4</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">5</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">6</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">7</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">8</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">9</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 7%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 3%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10</div>
                                                          </div>
                                                          <input type="range" class="form-control-range" id="csesasestrenimiento" name="csesasestrenimiento" value="5" min="0" max="10" step="1">
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="form-group col-md-4">
                                                          <label for="formControlRange">Bienestar</label>
                                                        </div>
                                                        <div class="form-group col-md-8">
                                                          <div class="progress">
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">0</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">1</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">2</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">3</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">4</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">5</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">6</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">7</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">8</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 8%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">9</div>
                                                            <div class="progress-bar bg-light" role="" style="width: 7%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="" style="width: 3%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10</div>
                                                          </div>
                                                          <input type="range" class="form-control-range" id="csesasbienestar" name="csesasbienestar" value="5" min="0" max="10" step="1">
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                              <div class="card-header" id="headidos">
                                                  <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#cspad9cs"
                                                  aria-expanded="false" aria-controls="cspad9cs">
                                                    ECAF
                                                  </button>
                                                </div>
                                                <div class="collapse" id="cspad9cs" aria-labelledby="headidos" data-parent="#separa3cs">
                                                  <div class="card-body">
                                                    <div>
                                                      <div class="row">
                                                        <div class="form-group col-md-12">
                                                          <div class="progress">
                                                            <div class="progress-bar bg-secondary" role="" style="width: 20%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">0 | No ocurre</div>
                                                            <div class="progress-bar bg-primary" role="" style="width: 20%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">1 | Solo ante el Estimulo</div>
                                                            <div class="progress-bar bg-success" role="" style="width: 20%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">2 | Ocacional Espontaneo</div>
                                                            <div class="progress-bar bg-warning" role="" style="width: 20%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">3 | La mayor parte del tiempo</div>
                                                            <div class="progress-bar bg-danger" role="" style="width: 20%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">4 | Continuo</div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                         <div class="form-group col-md-4">
                                                          <label for="formControlRange">Gestos de disconfort</label>
                                                        </div>
                                                        <div class="form-group col-md-8">
                                                          <div class="progress">
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">0</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 22%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">1</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 23%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">2</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 23%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">3</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 22%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">4</div>
                                                          </div>
                                                          <input type="range" size="20" class="form-control-range" id="csecafdisconfort" name="csecafdisconfort" onchange="ecaf()" value="2" min="0" max="4" step="1">
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                         <div class="form-group col-md-4">
                                                          <label for="formControlRange">Quebido</label>
                                                        </div>
                                                        <div class="form-group col-md-8">
                                                          <div class="progress">
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">0</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 22%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">1</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 23%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">2</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 23%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">3</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 22%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">4</div>
                                                          </div>
                                                          <input type="range" class="form-control-range" id="csecafquebido" name="csecafquebido" onchange="ecaf()" value="2" min="0" max="4" step="1">
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                         <div class="form-group col-md-4">
                                                          <label for="formControlRange">Grito</label>
                                                        </div>
                                                        <div class="form-group col-md-8">
                                                          <div class="progress">
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">0</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 22%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">1</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 23%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">2</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 23%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">3</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 22%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">4</div>
                                                          </div>
                                                          <input type="range" class="form-control-range" id="csecafgrito" name="csecafgrito" onchange="ecaf()" value="2" min="0" max="4" step="1">
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                         <div class="form-group col-md-4">
                                                          <label for="formControlRange">Tocando una área</label>
                                                        </div>
                                                        <div class="form-group col-md-8">
                                                          <div class="progress">
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">0</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 22%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">1</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 23%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">2</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 23%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">3</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 22%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">4</div>
                                                          </div>
                                                          <input type="range" class="form-control-range" id="csecafarea" name="csecafarea" onchange="ecaf()"  value="2" min="0" max="4" step="1">
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                         <div class="form-group col-md-4">
                                                          <label for="formControlRange">Movimiento sin objetivo</label>
                                                        </div>
                                                        <div class="form-group col-md-8">
                                                          <div class="progress">
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">0</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 22%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">1</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 23%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">2</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 23%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">3</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 22%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">4</div>
                                                          </div>
                                                          <input type="range" class="form-control-range" id="csecafmovimiento" name="csecafmovimiento" onchange="ecaf()" value="2" min="0" max="4" step="1">
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                         <div class="form-group col-md-4">
                                                          <label for="formControlRange">Respiración dura</label>
                                                        </div>
                                                        <div class="form-group col-md-8">
                                                          <div class="progress">
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">0</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 22%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">1</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 23%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">2</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 23%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">3</div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 22%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">4</div>
                                                          </div>
                                                          <input type="range" class="form-control-range" id="csecafrespiracion" name="csecafrespiracion" onchange="ecaf()" value="2" min="0" max="4" step="1">
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="form-group col-md-4">
                                                          <label for="formControlRange">Total</label>
                                                          <input type="text" class="form-control" placeholder="/24" id="csecaftotal" name="csecaftotal" minlength="1" maxlength="6" pattern="\S[0-9A-Za-z, ]{1,6}" required />
                                                        </div>
                                                      </div>
                                                      <div class="form-group col-md-12">
                                                        <div class="row">
                                                          <div class="form-group col-md-2">
                                                            <label class="col-form-label"><strong>Ik%:</strong></label>
                                                            <div class="input-group">
                                                              <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                  <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                                                                </span>
                                                              </div>
                                                              <input type="text" class="form-control" placeholder="12 Cm" id="csik" name="csik" minlength="1" maxlength="6" pattern="\S[0-9A-Za-z, ]{1,6}" required />
                                                            </div>
                                                          </div>
                                                          <div class="form-group col-md-2">
                                                            <label class="col-form-label"><strong>ECOG:</strong></label>
                                                            <div class="input-group">
                                                              <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                  <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                                                                </span>
                                                              </div>
                                                              <input type="text" class="form-control" placeholder="55,5 Kg" id="csecog" name="csecog" minlength="1" maxlength="8" pattern="\S[A-Za-z0-9,. ]{1,8}" required />
                                                            </div>
                                                          </div>
                                                          <div class="form-group col-md-2">
                                                            <label class="col-form-label"><strong>PPS:</strong></label>
                                                            <div class="input-group">
                                                              <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                  <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                                                                </span>
                                                              </div>
                                                              <input type="text" class="form-control" placeholder="" id="cspps" name="cspps" minlength="1" maxlength="6" pattern="\S[A-Za-z0-9 ]{1,6}" required />
                                                            </div>
                                                          </div>
                                                          <div class="form-group col-md-2">
                                                            <label class="col-form-label"><strong>MDAS:</strong></label>
                                                            <div class="input-group">
                                                              <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                  <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                                                                </span>
                                                              </div>
                                                              <input type="text" class="form-control" placeholder="" id="csmdas" name="csmdas" required />
                                                            </div>
                                                          </div>
                                                          <div class="form-group col-md-2">
                                                            <label class="col-form-label"><strong>CAM:</strong></label>
                                                            <div class="input-group">
                                                              <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                  <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                                                                </span>
                                                              </div>
                                                              <input type="text" class="form-control" placeholder="37°" id="cscam" name="cscam" minlength="1" maxlength="6" pattern="\S[A-Za-z0-9,. ]{1,6}" required />
                                                            </div>
                                                          </div>
                                                          <div class="form-group col-md-2">
                                                            <label class="col-form-label"><strong>RAMSAY:</strong></label>
                                                            <div class="input-group">
                                                              <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                  <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                                                                </span>
                                                              </div>
                                                              <input type="text" class="form-control" placeholder="" id="csramsay" name="csramsay" minlength="1" maxlength="6" pattern="\S[A-Za-z0-9,. ]{1,6}" required />
                                                            </div>
                                                          </div>
                                                          <div class="form-group col-md-12">
                                                            <label class="col-form-label"><strong>Observaciones:</strong></label>
                                                            <textarea class="form-control" id="csobservaciones" name="csobservaciones" onkeypress="" required></textarea>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12 text-center" >
                                            <!-- <button type="button" class="btn btn-azul"  data-dismiss="modal" data-toggle="modal" data-target="#confirmarpad">GUARDAR</button> -->
                                            <!-- <input type="text" class="form-control" id="nmedpad" name="nmedpad" style="display:none" value="<?php echo ucwords($this->session->userdata('s_id'));?>" /> -->
                                          </div>
                                          <div class="col-md-12 text-center" >
                                            <!-- <button type="button" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarpad2">ACTUALIZAR</button> -->
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-body">
                                    <ul class="nav nav-tabs card-header-tabs">
                                        <li class="nav-item">
                                          <button class="btn btn-primary" type="button" onclick="siguientepaginacs()">Siguiente</button>
                                          <input type="text" value="1" id="paginacs" class="form-control" style="display:none" />
                                        </li>
                                        <li class="nav-item">
                                          <a href=""></a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link active bg-danger" id="subop1cs" href="#op1cs" data-toggle="collapse" data-target="#op1cs" aria-expanded="false" aria-controls="op1cs" onclick="doynumeropaginacs('1');">1</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link bg-white" id="subop2cs" href="#op2cs" data-toggle="collapse" data-target="#op2cs" aria-expanded="false" aria-controls="op2cs" onclick="doynumeropaginacs('2');">2</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link bg-white" id="subop3cs" href="#op3cs" data-toggle="collapse" data-target="#op3cs" aria-expanded="false" aria-controls="op3cs" onclick="doynumeropaginacs('3');">3</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link bg-white" id="subop4cs" href="#op4cs" data-toggle="collapse" data-target="#op4cs" aria-expanded="false" aria-controls="op4cs" onclick="doynumeropaginacs('4');">4</a>
                                        </li>
                                        <li class="nav-item">
                                          <button class="btn btn-primary" type="button" onclick="atraspaginacs()">Atras</button>
                                        </li>
                                    </ul>
                                  </div>
                                </div>
                              </form>
                              </div>
                          </div>
                          <div class="collapse multi-collapse collapse" id="csmulti3" data-parent="#accordion2cs">
                            <form >
                            <div class="row">
                                <div class="accordion form-group col-md-12" id="separa4cs">
                                  <div class="card">
                                    <div class="card-header" id="headiuno">
                                        <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#barthel1cs"
                                        aria-expanded="false" aria-controls="barthel1cs">
                                          Comer
                                        </button>
                                      </div>
                                      <div class="collapse" id="barthel1cs" aria-labelledby="headiuno" data-parent="#separa4cs">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="form-group col-md-1">
                                              <label class="col-form-label"><strong>10</strong></label>
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label">INDEPENDIENTE</label>
                                            </div>
                                            <div class="form-group col-md-8">
                                              <label class="col-form-label">Capaz de comer por si solo y en un tiempo razonable. la comida puede ser preparada y servida por otra persona</label>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="btcomer" id="csbtcomer1" onclick="" value="10">
                                              </div>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <label class="col-form-label"><strong>5</strong></label>
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label">NECESITA AYUDA</label>
                                            </div>
                                            <div class="form-group col-md-8">
                                              <label class="col-form-label">Para comer la carne o el pan, pero es capaz de comer el solo</label>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="btcomer" id="csbtcomer2" onclick="" value="5">
                                              </div>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <label class="col-form-label"><strong>0</strong></label>
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label">DEPENDIENTE</label>
                                            </div>
                                            <div class="form-group col-md-8">
                                              <label class="col-form-label">Nesecita ser alimentado por otra persona</label>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="btcomer" id="csbtcomer3" onclick="" value="0">
                                                <input class="form-control" type="text" id="csauxbtcomer" name="csauxbtcomer" style="display:none">
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="card">
                                    <div class="card-header" id="headidos">
                                        <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#barthel2cs"
                                        aria-expanded="false" aria-controls="barthel2cs">
                                          Bañarse
                                        </button>
                                      </div>
                                      <div class="collapse" id="barthel2cs" aria-labelledby="headidos" data-parent="#separa4cs">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="form-group col-md-1">
                                              <label class="col-form-label"><strong>5</strong></label>
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label">INDEPENDIENTE</label>
                                            </div>
                                            <div class="form-group col-md-8">
                                              <label for="">Capaz de entrar a la ducha por si solo, bañarse en un tiempo razonable, secar su cuerpo y salir del baño por si mismo</label>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="btbanarse" id="csbtbanarse1" onclick="" value="5">
                                              </div>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <label class="col-form-label"><strong>0</strong></label>
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label">DEPENDIENTE</label>
                                            </div>
                                            <div class="form-group col-md-8">
                                              <label class="col-form-label">Requiere de otro para ingresar y/o bañarse y/o secarse el cuerpo y/o salir del baño</label>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="btbanarse" id="csbtbanarse2" onclick="" value="0">
                                                <input class="form-control" type="text" id="csauxbtbanarse" name="csauxbtbanarse" style="display:none">
                                              </div>
                                            </div>
                                        </div>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="card">
                                    <div class="card-header" id="headidos">
                                        <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#barthel3cs"
                                        aria-expanded="false" aria-controls="barthel3cs">
                                          Vestirse
                                        </button>
                                      </div>
                                      <div class="collapse" id="barthel3cs" aria-labelledby="headidos" data-parent="#separa4cs">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="form-group col-md-1">
                                              <label class="col-form-label"><strong>10</strong></label>
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label">INDEPENDIENTE</label>
                                            </div>
                                            <div class="form-group col-md-8">
                                              <label class="col-form-label">Es capaz de quitarse y ponerse la ropa sin ayuda</label>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="btvestirse" id="csbtvestirse1" onclick="" value="10">
                                              </div>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <label class="col-form-label"><strong>5</strong></label>
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label">NECESITA AYUDA</label>
                                            </div>
                                            <div class="form-group col-md-8">
                                              <label class="col-form-label">Realiza solo al menos la mitad de las tareas en un tiempo razonable</label>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="btvestirse" id="csbtvestirse2" onclick="" value="5">
                                              </div>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <label class="col-form-label"><strong>0</strong></label>
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label">DEPENDIENTE</label>
                                            </div>
                                            <div class="form-group col-md-8">
                                              <label class="col-form-label">Requiere de otro incluso para alistar el vestuario</label>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="btvestirse" id="csbtvestirse3" onclick="" value="0">
                                                <input class="form-control" type="text" id="csauxbtvestirse" name="csauxbtvestirse" style="display:none">
                                              </div>
                                            </div>
                                        </div>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="card">
                                    <div class="card-header" id="headidos">
                                        <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#barthel4cs"
                                        aria-expanded="false" aria-controls="barthel4cs">
                                          Arreglarse
                                        </button>
                                      </div>
                                      <div class="collapse" id="barthel4cs" aria-labelledby="headidos" data-parent="#separa4cs">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="form-group col-md-1">
                                              <label class="col-form-label"><strong>5</strong></label>
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label">INDEPENDIENTE</label>
                                            </div>
                                            <div class="form-group col-md-8">
                                              <label class="col-form-label">Realiza todas las actividades personales sin ninguna ayuda, los complementos necesarios pueder ser provistos por otra persona</label>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="btarreglarse" id="csbtarreglarse1" onclick="" value="5">
                                              </div>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <label class="col-form-label"><strong>0</strong></label>
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label">DEPENDIENTE</label>
                                            </div>
                                            <div class="form-group col-md-8">
                                              <label class="col-form-label">Necesita alguna ayuda</label>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="btarreglarse" id="csbtarreglarse2" onclick="" value="0">
                                                <input class="form-control" type="text" id="csauxbtarreglarse" name="csauxbtarreglarse" style="display:none">
                                              </div>
                                            </div>
                                        </div>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="card">
                                    <div class="card-header" id="headidos">
                                        <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#barthel5cs"
                                        aria-expanded="false" aria-controls="barthel5cs">
                                          Deposición
                                        </button>
                                      </div>
                                      <div class="collapse" id="barthel5cs" aria-labelledby="headidos" data-parent="#separa4cs">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="form-group col-md-1">
                                              <label class="col-form-label"><strong>10</strong></label>
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label">CONTINENTE</label>
                                            </div>
                                            <div class="form-group col-md-8">
                                              <label class="col-form-label">Ningún episodio de incontinencia</label>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="btdeposicion" id="csbtdeposicion1" onclick="" value="10">
                                              </div>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <label class="col-form-label"><strong>5</strong></label>
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label">ACCIDENTE OCASIONAL</label>
                                            </div>
                                            <div class="form-group col-md-8">
                                              <label class="col-form-label">Menos de una vez por semana o necesita ayuda, enemas o supositorios</label>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="btdeposicion" id="csbtdeposicion2" onclick="" value="5">
                                              </div>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <label class="col-form-label"><strong>0</strong></label>
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label">INCONTINENTE</label>
                                            </div>
                                            <div class="form-group col-md-8">
                                              <label class="col-form-label">Requiere pañal permanente</label>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="btdeposicion" id="csbtdeposicion3" onclick="" value="0">
                                                <input class="form-control" type="text" id="csauxbtdeposicion" name="csauxbtdeposicion" style="display:none">
                                              </div>
                                            </div>
                                        </div>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="card">
                                    <div class="card-header" id="headidos">
                                        <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#barthel6cs"
                                        aria-expanded="false" aria-controls="barthel6cs">
                                          Micción (Valorar la situación en la semana anterior)
                                        </button>
                                      </div>
                                      <div class="collapse" id="barthel6cs" aria-labelledby="headidos" data-parent="#separa4cs">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="form-group col-md-1">
                                              <label class="col-form-label"><strong>10</strong></label>
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label">CONTINENTE</label>
                                            </div>
                                            <div class="form-group col-md-8">
                                              <label class="col-form-label">Ningún episodio de incontinencia, capaz de utilizar cualquier dispositivo por si solo</label>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="btmiccion" id="csbtmiccion1" onclick="" value="10">
                                              </div>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <label class="col-form-label"><strong>5</strong></label>
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label">ACCIDENTE OCASIONAL</label>
                                            </div>
                                            <div class="form-group col-md-8">
                                              <label class="col-form-label">Máximo un episodio de incontinencia en 24 horas, incluye necesitar ayuda en la manipulación de sondas y otros dispositivos</label>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="btmiccion" id="csbtmiccion2" onclick="" value="5">
                                              </div>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <label class="col-form-label"><strong>0</strong></label>
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label">INCONTINENTE</label>
                                            </div>
                                            <div class="form-group col-md-8">
                                              <label class="col-form-label">Requiere pañal o sondas permanente</label>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="btmiccion" id="csbtmiccion3" onclick="" value="0">
                                                <input class="form-control" type="text" id="csauxbtmiccion" name="csauxbtmiccion" style="display:none">
                                              </div>
                                            </div>
                                        </div>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="card">
                                    <div class="card-header" id="headidos">
                                        <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#barthel7cs"
                                        aria-expanded="false" aria-controls="barthel7cs">
                                          Ir al retrete
                                        </button>
                                      </div>
                                      <div class="collapse" id="barthel7cs" aria-labelledby="headidos" data-parent="#separa4cs">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="form-group col-md-1">
                                              <label class="col-form-label"><strong>10</strong></label>
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label">INDEPENDIENTE</label>
                                            </div>
                                            <div class="form-group col-md-8">
                                              <label class="col-form-label">Entra y sale solo  y no necesita ayuda de otra persona</label>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="btretrete" id="csbtretrete1" onclick="" value="10">
                                              </div>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <label class="col-form-label"><strong>5</strong></label>
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label">NECESITA AYUDA</label>
                                            </div>
                                            <div class="form-group col-md-8">
                                              <label class="col-form-label">Capaz de manejarse de una pequeña ayuda, capaz de usar el cuarto del baño. Puede limpiarse solo</label>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="btretrete" id="csbtretrete2" onclick="" value="5">
                                              </div>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <label class="col-form-label"><strong>0</strong></label>
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label">DEPENDIENTE</label>
                                            </div>
                                            <div class="form-group col-md-8">
                                              <label class="col-form-label">Incapaz de manejarse sin ayuda</label>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="btretrete" id="csbtretrete3" onclick="" value="0">
                                                <input class="form-control" type="text" id="csauxbtretrete" name="csauxbtretrete" style="display:none">
                                              </div>
                                            </div>
                                        </div>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="card">
                                    <div class="card-header" id="headidos">
                                        <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#barthel8cs"
                                        aria-expanded="false" aria-controls="barthel8cs">
                                          Traslado Sillon - Cama (Transferencia)
                                        </button>
                                      </div>
                                      <div class="collapse" id="barthel8cs" aria-labelledby="headidos" data-parent="#separa4cs">
                                        <div class="card-body">
                                           <div class="row">
                                            <div class="form-group col-md-1">
                                              <label class="col-form-label"><strong>15</strong></label>
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label">INDEPENDIENTE</label>
                                            </div>
                                            <div class="form-group col-md-8">
                                              <label class="col-form-label">No precisa ayuda</label>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="bttraslado" id="csbttraslado1" onclick="" value="15">
                                              </div>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <label class="col-form-label"><strong>10</strong></label>
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label">MINIMA AYUDA</label>
                                            </div>
                                            <div class="form-group col-md-8">
                                              <label class="col-form-label">Incluye supervisión verbal o pequeña ayuda física</label>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="bttraslado" id="csbttraslado2" onclick="" value="10">
                                              </div>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <label class="col-form-label"><strong>5</strong></label>
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label">GRAN AYUDA</label>
                                            </div>
                                            <div class="form-group col-md-8">
                                              <label class="col-form-label">Precisa la ayuda de una persona fuerte o entrenada</label>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="bttraslado" id="csbttraslado3" onclick="" value="5">
                                              </div>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <label class="col-form-label"><strong>0</strong></label>
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label">DEPENDIENTE</label>
                                            </div>
                                            <div class="form-group col-md-8">
                                              <label class="col-form-label">Necesita grua o alzamiento de dos personas, incapaz de permanecer sentado</label>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="bttraslado" id="csbttraslado4" onclick="" value="0">
                                                <input class="form-control" type="text" id="csauxbttraslado" name="csauxbttraslado" style="display:none">
                                              </div>
                                            </div>
                                        </div>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="card">
                                    <div class="card-header" id="headidos">
                                        <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#barthel9cs"
                                        aria-expanded="false" aria-controls="barthel9cs">
                                          Deambulación
                                        </button>
                                      </div>
                                      <div class="collapse" id="barthel9cs" aria-labelledby="headidos" data-parent="#separa4cs">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="form-group col-md-1">
                                              <label class="col-form-label"><strong>15</strong></label>
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label">INDEPENDIENTE</label>
                                            </div>
                                            <div class="form-group col-md-8">
                                              <label class="col-form-label">Puede andar 50 metros o su equivalente por casa sin ayuda ni supervisión de otra persona. Puede usar ayuda instrumentales (muletas o baston). Excepto andador. Si utiliza prótesis debe ser capaz de ponersela y quitarsela solo</label>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="btdeambulacion" id="csbtdeambulacion1" onclick="" value="15">
                                              </div>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <label class="col-form-label"><strong>10</strong></label>
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label">MINIMA AYUDA</label>
                                            </div>
                                            <div class="form-group col-md-8">
                                              <label class="col-form-label">Necesita supervisión o una pequeña ayuda física por otra persona. Precisa utilizar andador</label>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="btdeambulacion" id="csbtdeambulacion2" onclick="" value="10">
                                              </div>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <label class="col-form-label"><strong>5</strong></label>
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label">GRAN AYUDA</label>
                                            </div>
                                            <div class="form-group col-md-8">
                                              <label class="col-form-label">(En silla de ruedas) en 50 metros. No requiere ayuda ni supervisión</label>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="btdeambulacion" id="csbtdeambulacion3" onclick="" value="5">
                                              </div>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <label class="col-form-label"><strong>0</strong></label>
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label">DEPENDIENTE</label>
                                            </div>
                                            <div class="form-group col-md-8">
                                              <label class="col-form-label">Inmóvil</label>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="btdeambulacion" id="csbtdeambulacion4" onclick="" value="0">
                                                <input class="form-control" type="text" id="csauxbtdeambulacion" name="csauxbtdeambulacion" style="display:none">
                                              </div>
                                            </div>
                                        </div>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="card">
                                    <div class="card-header" id="headidos">
                                        <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#barthel10cs"
                                        aria-expanded="false" aria-controls="barthel10cs">
                                          Subir y bajar escaleras
                                        </button>
                                      </div>
                                      <div class="collapse" id="barthel10cs" aria-labelledby="headidos" data-parent="#separa4cs">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="form-group col-md-1">
                                              <label class="col-form-label"><strong>10</strong></label>
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label">INDEPENDIENTE</label>
                                            </div>
                                            <div class="form-group col-md-8">
                                              <label class="col-form-label">Capaz de subir y bajar un piso sin la ayuda ni supervisión de otra persona</label>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="btescaleras" id="csbtescaleras1" onclick="" value="10">
                                              </div>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <label class="col-form-label"><strong>5</strong></label>
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label">NECESITA AYUDA</label>
                                            </div>
                                            <div class="form-group col-md-8">
                                              <label class="col-form-label">Requiere de ayuda o supervisión de otra persona</label>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="btescaleras" id="csbtescaleras2" onclick="" value="5">
                                              </div>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <label class="col-form-label"><strong>0</strong></label>
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label">DEPENDIENTE</label>
                                            </div>
                                            <div class="form-group col-md-8">
                                              <label class="col-form-label">Incapaz de salvar escalones, requiere ascensor o rampa</label>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="btescaleras" id="csbtescaleras3" onclick="" value="0">
                                                <input class="form-control" type="text" id="csauxbtescaleras" name="csauxbtescaleras" style="display:none">
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="form-group col-md-12  dropdown-divider"></div>                           
                                  <div class="row">
                                    <div class="form-group col-md-6">
                                      <label class="col-form-label">DT (Dependencia Total): &lt; 20</label>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label class="col-form-label">DG (Dependencia Grabe): 20 - 40</label>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label class="col-form-label">DM (Dependencia Moderada): 45 - 55</label>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label class="col-form-label">DL (Dependencia Leve): 60 o mas</label>
                                    </div>
                                  </div>
                                  <div class="form-group col-md-12  dropdown-divider"></div>
                                  <div class="row">
                                    <div class="form-group col-md-2 text-right">
                                      <label class="col-form-label">Total Obtenido</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" placeholder="Total" id="csbttotal" name="csbttotal" readonly="" />

                                    </div>
                                    <div class="form-group col-md-3 text-right">
                                      <label class="col-form-label">Nivel de Dependencia</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" placeholder="Nivel" id="csbtnivel" name="csbtnivel" readonly="" />

                                    </div>
                                    <div class="form-group col-md-12  dropdown-divider"></div>
                                    <div class="form-group ">
                                       
                                    </div>
                                    <div class="form-group col-md-12 text-center" >
                                      <!-- <input type="text" class="form-control" id="csnmedpad3" name="csnmedpad3" style="display:none" value="<?php echo ucwords($this->session->userdata('s_id'));?>" />
                                      <input type="text" class="form-control" id="csnumhc3" name=cs"numhc3" style="display:none" /> -->
                                    </div>
                                    <div class="form-group col-md-12 text-center" >
                                       <!-- <button type="button" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarbarthel2">ACTUALIZAR</button> -->
                                    </div>
                                  </div>
                                </div>
                            </div>              
                            </form>
                          </div>
                          <div class="collapse multi-collapse collapse" id="csmulti4" data-parent="#accordion2cs">
                            <form>
                            <div class="row">
                              <div class="accordion form-group col-md-12" id="separa6cs">
                                <div class="card">
                                  <div class="card-header" id="headiuno">
                                      <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#valoracion1cs"
                                      aria-expanded="false" aria-controls="valoracion1cs">
                                        Diagnósticos
                                      </button>
                                    </div>
                                    <div class="collapse" id="valoracion1cs" aria-labelledby="headiuno" data-parent="#separa6cs">
                                      <div class="card-body">
                                        <div class="row">
                                          <div class="form-group col-md-12">
                                            <label class="col-form-label"><strong>Diagnósticos:</strong></label>
                                            <textarea class="form-control" id="csmotrar_diagnosticos3" name="csmotrar_diagnosticos3" onkeypress="return cmTexto(event);" readonly=""></textarea>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="card">
                                  <div class="card-header" id="headidos">
                                      <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#valoracion2cs"
                                      aria-expanded="false" aria-controls="valoracion2cs">
                                        Condición Neurológica
                                      </button>
                                    </div>
                                    <div class="collapse" id="valoracion2cs" aria-labelledby="headidos" data-parent="#separa6cs">
                                      <div class="card-body">
                                        <div class="row">
                                          <div class="form-group col-md-3">
                                            <label class="col-form-label text-uppercase"><strong>Apertura Ocular:</strong></label><br><br><br>                           
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cnocular[]" id="cscnocular1" onclick=""  value="Espontánea | 4" >
                                                <label class="form-check-label">Espontánea (4)</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cnocular[]" id="cscnocular2" onclick=""  value="A la orden | 3">
                                                <label class="form-check-label">A la orden (3)</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cnocular[]" id="cscnocular3" onclick=""  value="Ante un estímulo doloroso | 2" >
                                                <label class="form-check-label">Ante un estímulo doloroso (2)</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cnocular[]" id="cscnocular4" onclick="" value="Ausencia de estímulo ocular | 1">
                                                <label class="form-check-label">Ausencia de estímulo ocular (1)</label>
                                                <input type="text" class="form-control" id="csauxcnocular" name="auxcnocular" style="display:none" />
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cnocular[]" id="cscnocular5" onclick="" value="No Selecciona | 0">
                                                <label class="form-check-label">No Selecciona (0)</label>
                                              </div>                                
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label class="col-form-label text-uppercase"><strong>Respuesta Verbal:</strong></label><br><br>                          
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cnverbal[]" id="cscnverbal1" onclick=""  value="Orientado Correctamente | 5" >
                                                <label class="form-check-label">Orientado Correctamente (5)</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cnverbal[]" id="cscnverbal2" onclick=""  value="Paciente Confuso | 4">
                                                <label class="form-check-label">Paciente Confuso (4)</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cnverbal[]" id="cscnverbal3" onclick=""  value="Lenguaje inapropiado | 3">
                                                <label class="form-check-label">Lenguaje inapropiado (3)</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cnverbal[]" id="cscnverbal4" onclick=""  value="Lenguaje incomprensible | 2" >
                                                <label class="form-check-label">Lenguaje incomprensible (2)</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cnverbal[]" id="cscnverbal5" onclick="" value="Carencia de actividad verbal | 1">
                                                <label class="form-check-label">Carencia de actividad verbal(1)</label>
                                                <input type="text" class="form-control" id="csauxcnverbal" name="auxcnverbal" style="display:none" />
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cnocular[]" id="cscnverbal6" onclick="" value="No Selecciona | 0">
                                                <label class="form-check-label">No Selecciona (0)</label>
                                              </div>                                
                                          </div>
                                          <div class="form-group col-md-5">
                                            <label class="col-form-label text-uppercase"><strong>Respuesta Motora:</strong></label>                           
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cnmotora[]" id="cscnmotora1" onclick=""  value="Obedece ordenes correctamente | 6">
                                                <label class="form-check-label">Obedece ordenes correctamente (6)</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cnmotora[]" id="cscnmotora2" onclick=""  value="Localiza estímulos dolorosos | 5">
                                                <label class="form-check-label">Localiza estímulos dolorosos (5)</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cnmotora[]" id="cscnmotora3" onclick=""  value="Responde al estímulo dolorso pero no localiza | 4" >
                                                <label class="form-check-label">Responde al estímulo dolorso pero no localiza (4)</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cnmotora[]" id="cscnmotora4" onclick=""  value="Respuesta con flexión anormal de los miembros | 3">
                                                <label class="form-check-label">Respuesta con flexión anormal de los miembros (3)</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cnmotora[]" id="cscnmotora5" onclick=""  value="Respuesta con extensión anormal de los miembros | 2" >
                                                <label class="form-check-label">Respuesta con extensión anormal de los miembros (2)</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cnmotora[]" id="cscnmotora6" onclick="" value="Ausencia de respuesta motora | 1">
                                                <label class="form-check-label">Ausencia de respuesta motora (1)</label>
                                                <input type="text" class="form-control" id="csauxcnmotora" name="auxcnmotora" style="display:none" />
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cnocular[]" id="cscnmotora7" onclick="" value="No Selecciona | 0">
                                                <label class="form-check-label">No Selecciona (0)</label>
                                              </div>                                 
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label class="col-form-label">Total</label>
                                              <input type="text" class="form-control" placeholder="" id="cscntotal" name="cscntotal" readonly="" />
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="form-group col-md-6">
                                             <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cngeneral[]" id="cscngeneral1" onclick="" value="No Selecciona">
                                                <label class="form-check-label">No Selecciona</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cngeneral[]" id="cscngeneral2" onclick=""  value="Letargia" >
                                                <label class="form-check-label">Letargia</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cngeneral[]" id="cscngeneral3" onclick=""  value="Obnublación">
                                                <label class="form-check-label">Obnublación</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cngeneral[]" id="cscngeneral4" onclick=""  value="Estado Vegetativo" >
                                                <label class="form-check-label">Estado Vegetativo</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cngeneral[]" id="cscngeneral5" onclick="" value="Mutismo Aquinetico">
                                                <label class="form-check-label">Mutismo Aquinetico</label>
                                              </div>                                
                                          </div>
                                          <div class="form-group col-md-6">
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cngeneral[]" id="cscngeneral6" onclick=""  value="Estado de Conciencia Mínima" >
                                                <label class="form-check-label">Estado de Conciencia Mínima</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="cngeneral[]" id="cscngeneral7" onclick=""  value="Sindrome de Cautiverio">
                                                <label class="form-check-label">Sindrome de Cautiverio</label>
                                              </div>
                                              <div class="form-group">
                                                <label class="col-form-label">Otro</label>
                                                <input type="text" class="form-control" placeholder="" id="cscnotrogeneral" name="cnotrogeneral" required />
                                                <input type="text" class="form-control" id="csauxcngeneral" name="csauxcngeneral" style="display:none" />
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="card">
                                  <div class="card-header" id="headidos">
                                      <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#valoracion3cs"
                                      aria-expanded="false" aria-controls="valoracion3cs">
                                        Test de Pfeiffer
                                      </button>
                                    </div>
                                    <div class="collapse" id="valoracion3cs" aria-labelledby="headidos" data-parent="#separa6cs">
                                      <div class="card-body">
                                        <div class="row">
                                          <div class="form-group col-md-8">
                                            <label for="formControlRange">Test de Pfeiffer "Escala de detección de deterioro congnitivo-SPMSQ"</label>
                                          </div>
                                           <div class="form-group col-md-2">
                                            <label for="formControlRange">Valoración N°</label>
                                          </div>
                                          <div class="form-group col-md-2">
                                            <input type="number" class="form-control" id="cstestnvaloracion" name="cstestnvaloracion" value="1" min="1" max="6" step="1">
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="card form-group col-md-4">
                                            <label for="formControlRange">Pregunta</label>
                                          </div>
                                          <div class="card form-group col-md-3">
                                            <label for="formControlRange">Control</label>
                                          </div>
                                          <div class="card form-group col-md-3">
                                            <label for="formControlRange">Respuesta</label>
                                          </div>
                                          <div class="card form-group col-md-1">
                                            <label for="formControlRange">V</label>
                                          </div>
                                          <div class="card form-group col-md-1">
                                            <label for="formControlRange">F</label>
                                          </div>
                                          
                                          <div class="form-group col-md-4">
                                            <label for="formControlRange">¿Que día es hoy (mes/día/año)?</label>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <input type="text" class="form-control" id="cstestp1f" name="cstestp1f" />
                                          </div>
                                          <div class="form-group col-md-3">
                                            <input type="text" class="form-control" id="cstestr1f" name="cstestr1f" />
                                          </div>
                                          <div class="form-group col-md-1">
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="cstpr1" id="cstpr1a" onclick="" value="v">
                                            </div>
                                          </div>
                                          <div class="form-group col-md-1">
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="cstpr1" id="cstpr1b" onclick="" value="f">
                                              <input type="text" class="form-control" id="csauxtpr1" name="csauxtpr1" style="display:none" />
                                            </div>
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label for="formControlRange">¿Que día de la semana es hoy?</label>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <input type="text" class="form-control" id="cstestp2" name="cstestp2" required />
                                          </div>
                                          <div class="form-group col-md-3">
                                            <input type="text" class="form-control" id="cstestr2" name="cstestr2" required />
                                          </div>
                                          <div class="form-group col-md-1">
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="cstpr2" id="cstpr2a" onclick="" value="v">
                                            </div>
                                          </div>
                                          <div class="form-group col-md-1">
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="cstpr2" id="cstpr2b" onclick="" value="f">
                                              <input type="text" class="form-control" id="csauxtpr2" name="csauxtpr2" style="display:none" />
                                            </div>
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label for="formControlRange">¿Donde estamos ahora (Lugar o edificación)?</label>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <input type="text" class="form-control" id="cstestp3" name="cstestp3" required />
                                          </div>
                                          <div class="form-group col-md-3">
                                            <input type="text" class="form-control" id="cstestr3" name="cstestr3" required />
                                          </div>
                                          <div class="form-group col-md-1">
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="cstpr3" id="cstpr3a" onclick="" value="v">
                                            </div>
                                          </div>
                                          <div class="form-group col-md-1">
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="cstpr3" id="cstpr3b" onclick="" value="f">
                                              <input type="text" class="form-control" id="csauxtpr3" name="csauxtpr3" style="display:none" />
                                            </div>
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label for="formControlRange">¿Cual es su numero de teléfono o dirección?</label>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <input type="text" class="form-control" id="cstestp4" name="cstestp4" required />
                                          </div>
                                          <div class="form-group col-md-3">
                                            <input type="text" class="form-control" id="cstestr4" name="cstestr4" required />
                                          </div>
                                          <div class="form-group col-md-1">
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="cstpr4" id="cstpr4a" onclick="" value="v">
                                            </div>
                                          </div>
                                          <div class="form-group col-md-1">
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="cstpr4" id="cstpr4b" onclick="" value="f">
                                              <input type="text" class="form-control" id="csauxtpr4" name="csauxtpr4" style="display:none" />
                                            </div>
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label for="formControlRange">¿Cuantos años tiene?</label>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <input type="text" class="form-control" id="cstestp5" name="cstestp5" required />
                                          </div>
                                          <div class="form-group col-md-3">
                                            <input type="text" class="form-control" id="cstestr5" name="cstestr5" required />
                                          </div>
                                          <div class="form-group col-md-1">
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="cstpr5" id="cstpr5a" onclick="" value="v">
                                            </div>
                                          </div>
                                          <div class="form-group col-md-1">
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="cstpr5" id="cstpr5b" onclick="" value="f">
                                              <input type="text" class="form-control" id="csauxtpr5" name="csauxtpr5" style="display:none" />
                                            </div>
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label for="formControlRange">¿En que día, mes y año nacio?</label>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <input type="text" class="form-control" id="cstestp6" name="cstestp6" required />
                                          </div>
                                          <div class="form-group col-md-3">
                                            <input type="text" class="form-control" id="cstestr6" name="cstestr6" required />
                                          </div>
                                          <div class="form-group col-md-1">
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="cstpr6" id="cstpr6a" onclick="" value="v">
                                            </div>
                                          </div>
                                          <div class="form-group col-md-1">
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="cstpr6" id="cstpr6b" onclick="" value="f">
                                              <input type="text" class="form-control" id="csauxtpr6" name="csauxtpr6" style="display:none" />
                                            </div>
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label for="formControlRange">¿Como se llama el presidente de Colombia?</label>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <input type="text" class="form-control" id="cstestp7" name="cstestp7" required />
                                          </div>
                                          <div class="form-group col-md-3">
                                            <input type="text" class="form-control" id="cstestr7" name="cstestr7" required />
                                          </div>
                                          <div class="form-group col-md-1">
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="cstpr7" id="cstpr7a" onclick="" value="v">
                                            </div>
                                          </div>
                                          <div class="form-group col-md-1">
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="cstpr7" id="cstpr7b" onclick="" value="f">
                                              <input type="text" class="form-control" id="csauxtpr7" name="csauxtpr7" style="display:none" />
                                            </div>
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label for="formControlRange">¿Quien mandaba antes del presidente actual en Colombia?</label>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <input type="text" class="form-control" id="cstestp8" name="cstestp8" required />
                                          </div>
                                          <div class="form-group col-md-3">
                                            <input type="text" class="form-control" id="cstestr8" name="cstestr8" required />
                                          </div>
                                          <div class="form-group col-md-1">
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="cstpr8" id="cstpr8a" onclick="" value="v">
                                            </div>
                                          </div>
                                          <div class="form-group col-md-1">
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="cstpr8" id="cstpr8b" onclick="" value="f">
                                              <input type="text" class="form-control" id="csauxtpr8" name="csauxtpr8" style="display:none" />
                                            </div>
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label for="formControlRange">¿Como se llama o se llamaba su señora madre?</label>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <input type="text" class="form-control" id="cstestp9" name="cstestp9" required />
                                          </div>
                                          <div class="form-group col-md-3">
                                            <input type="text" class="form-control" id="cstestr9" name="cstestr9" required />
                                          </div>
                                          <div class="form-group col-md-1">
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="cstpr9" id="cstpr9a" onclick="" value="v">
                                            </div>
                                          </div>
                                          <div class="form-group col-md-1">
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="cstpr9" id="cstpr9b" onclick="" value="f">
                                              <input type="text" class="form-control" id="csauxtpr9" name="csauxtpr9" style="display:none" />
                                            </div>
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label for="formControlRange">Si a 20 le restamos 3, ¿quedad?, y si le restamos 3 ¿Cuanto queda?</label>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <input type="text" class="form-control" value="17" id="cstestp10" name="cstestp10" required />
                                          </div>
                                          <div class="form-group col-md-3">
                                            <input type="text" class="form-control" id="cstestr10" name="cstestr10" required />
                                          </div>
                                          <div class="form-group col-md-1">
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="cstpr10" id="cstpr10a" onclick="" value="v">
                                            </div>
                                          </div>
                                          <div class="form-group col-md-1">
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="cstpr10" id="cstpr10b" onclick="" value="f">
                                              <input type="text" class="form-control" id="csauxtpr10" name="csauxtpr10" style="display:none" />
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12  dropdown-divider"></div>
                                <div class="row">
                                  <div class="form-group col-md-6">
                                    <label class="col-form-label">N Normal hasta 2 errores</label><span> </span>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label class="col-form-label">DL Deterioro leve de 3 a 4 errores</label>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label class="col-form-label">DM Deterioro moderado (patologico) de 5 a 7 errores</label>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label class="col-form-label">DI Deterioro importante de 8 a 10 errores</label>
                                  </div>
                                </div>
                                <div class="form-group col-md-12  dropdown-divider"></div>
                                <div class="row">
                                  <div class="form-group col-md-2 text-right">
                                    <label class="col-form-label">Total Errores</label>
                                  </div>
                                  <div class="form-group col-md-4">
                                      <input type="text" class="form-control" placeholder="" id="cstesttotal" name="cstesttotal" readonly="" />
                                  </div>
                                  <div class="form-group col-md-2 text-right">
                                    <label class="col-form-label">Nivel de Riesgo</label>
                                  </div>
                                  <div class="form-group col-md-4">
                                    <input type="text" class="form-control" placeholder="" id="cstestnivel" name="cstestnivel" minlength="1" readonly="" />
                                  </div>
                                </div>
                                <div class="form-group col-md-12  dropdown-divider"></div>
                                <div class="row">
                                  <div class="col-md-12 text-center" >
                                    <!-- <input type="text" class="form-control" id="csnmedpad4" name="csnmedpad4" style="display:none" value="<?php echo ucwords($this->session->userdata('s_id'));?>" />
                                    <input type="text" class="form-control" id="csnumhc4" name="csnumhc4" style="display:none" /> -->
                                  </div>
                                  <div class="col-md-12 text-center">
                                    <!-- <button type="button" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarvaloracion2">ACTUALIZAR</button> -->
                                  </div>
                                </div>
                              </div>
                            </div>
                            </form>
                          </div>
                          <div class="collapse multi-collapse collapse" id="csmulti5" data-parent="#accordion2cs">
                            <form >
                            <div class="row">
                              <div class="accordion form-group col-md-12" id="separa7cs">
                                <div class="card">
                                  <div class="card-header" id="headiuno">
                                      <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#escala1cs"
                                      aria-expanded="false" aria-controls="escala1cs">
                                        Diagnósticos
                                      </button>
                                  </div>
                                  <div class="collapse" id="escala1cs" aria-labelledby="headiuno" data-parent="#separa7cs">
                                    <div class="card-body">
                                      <div class="row">
                                        <div class="form-group col-md-12">
                                          <label class="col-form-label"><strong>Diagnósticos:</strong></label>
                                          <textarea class="form-control" id="csmostrar_diagnostico4" name="csmostrar_diagnostico4" onkeypress="return cmTexto(event);" readonly=""></textarea>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-header" id="headiuno">
                                      <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#escala2cs"
                                      aria-expanded="false" aria-controls="escala2cs">
                                        Estado Físico
                                      </button>
                                  </div>
                                  <div class="collapse" id="escala2cs" aria-labelledby="headiuno" data-parent="#separa7cs">
                                    <div class="card-body">
                                      <div class="row">
                                        <div class="form-group col-md-12">
                                          <div class="progress">
                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">1</div>
                                            <div class="progress-bar bg-secondary" role="" style="width: 30%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">2</div>
                                            <div class="progress-bar bg-secondary" role="" style="width: 31%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">3</div>
                                            <div class="progress-bar bg-secondary" role="" style="width: 31%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">4</div>
                                          </div>
                                          <input type="range" class="form-control-range" id="csnortonfisico" name="csnortonfisico" onchange="norton()" value="2" min="1" max="4" step="1">
                                          <div class="row">
                                            <div class="col-md-3">
                                              <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">Muy Malo</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td class="text-justify">
                                                      1 comida diaria
                                                      1 Raciones de proteínas
                                                      Menú &lt; 1000 kcal
                                                      Toma 1/3 del menú
                                                      Bebe &lt; de 50mm ml
                                                      1° &lt; de 35,5 o &gt; de 38 °C
                                                      Edemas generalizados, piel muy
                                                      seca
                                                      IMC &gt; o igual a 50
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                            <div class="col-md-3">
                                              <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">Regular</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td class="text-justify">
                                                      2 Comidas diarias
                                                      2 Raciones de proteínas
                                                      Menú  1000 kcal
                                                      Toma % del menú
                                                      Bebe 500 - 1000 ml
                                                      T° 37,5 - 38 °C
                                                      Piel seca, escamosa
                                                      IMC &gt; o igual a 50
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                            <div class="col-md-3">
                                              <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">Mediano</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td class="text-justify">
                                                      3 Comidas diarias
                                                      3 Raciones de proteínas
                                                      Menú 1500 kcal
                                                      Toma mas de % menú
                                                      Bebe 1000 -1500 ml
                                                      T° 37 -37,5 °C
                                                      Relleno capilar lento
                                                      IMC &gt; 20 - &lt; 25
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                            <div class="col-md-3">
                                              <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th >Bueno</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td class="text-justify">
                                                      4 Comidas diarias
                                                      4 Raciones de proteínas
                                                      Menú 2000 kcal
                                                      Toma todo el menú
                                                      Bebe 1500 - 2000 ml
                                                      T° 36 - 37 °C
                                                      Mucosas humedas
                                                      IMC 20 - 25
                                                      NPT y SNG
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-header" id="headiuno">
                                      <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#escala3cs"
                                      aria-expanded="false" aria-controls="escala3cs">
                                        Estado Mental
                                      </button>
                                  </div>
                                  <div class="collapse" id="escala3cs" aria-labelledby="headiuno" data-parent="#separa7cs">
                                    <div class="card-body">
                                      <div class="row">
                                        <div class="form-group col-md-12">
                                          <div class="progress">
                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">1</div>
                                            <div class="progress-bar bg-secondary" role="" style="width: 30%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">2</div>
                                            <div class="progress-bar bg-secondary" role="" style="width: 31%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">3</div>
                                            <div class="progress-bar bg-secondary" role="" style="width: 31%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">4</div>
                                          </div>
                                          <input type="range" class="form-control-range" id="csnortonmental" name="csnortonmental" onchange="norton()" value="2" min="1" max="4" step="1">
                                          <div class="row">
                                            <div class="col-md-3">
                                              <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">Estupuroso/Comatoso</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td class="text-justify">
                                                      Desorientado en tiempo, lugar y
                                                      persona
                                                      Despierta solo con estímulos
                                                      dolorosos, pero no hay respuesta
                                                      verbal
                                                      Nunca esta totalmente despierto
                                                      Ausencia total de respuesta, incluso
                                                      la refleja
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                            <div class="col-md-3">
                                              <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">Confuso</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td class="text-justify">
                                                      Inquieto, agresivo, irritable,
                                                      dormido
                                                      Respuesta lenta a fuertes estímulos
                                                      dolorosos
                                                      Cuando despierta, responde
                                                      verbalmente pero breve e 
                                                      incontexto
                                                      intermitente desorientado
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                            <div class="col-md-3">
                                              <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">Apático</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td class="text-justify">
                                                      Aletargado, olvidadizo
                                                      somnoliento, pasivo, torpe,
                                                      perezoso
                                                      Ante estímulo, despierta sin
                                                      dificultad y permanece orientado
                                                      Obedece ordenes sencillas
                                                      Posible desorientación en el tiempo
                                                      y respuesta verbal lenta y vacilante
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                            <div class="col-md-3">
                                              <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th >Alerta</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td class="text-justify">
                                                      Esta orientado en tiempo, lugar y
                                                      persona
                                                      Responde adecuadamente a
                                                      estímulos visuales, auditivos y
                                                      tactiles
                                                      Comprende la información
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-header" id="headiuno">
                                      <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#escala4cs"
                                      aria-expanded="false" aria-controls="escala4cs">
                                        Actividad
                                      </button>
                                  </div>
                                  <div class="collapse" id="escala4cs" aria-labelledby="headiuno" data-parent="#separa7cs">
                                    <div class="card-body">
                                      <div class="row">
                                        <div class="form-group col-md-12">
                                          <div class="progress">
                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">1</div>
                                            <div class="progress-bar bg-secondary" role="" style="width: 30%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">2</div>
                                            <div class="progress-bar bg-secondary" role="" style="width: 31%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">3</div>
                                            <div class="progress-bar bg-secondary" role="" style="width: 31%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">4</div>
                                          </div>
                                          <input type="range" class="form-control-range" id="csnortonactividad" name="csnortonactividad" onchange="norton()" value="2" min="1" max="4" step="1">
                                          <div class="row">
                                            <div class="col-md-3">
                                              <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">Encamado</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td class="text-justify">
                                                      Falta de autonomía para realizar
                                                      todos sus movimientos
                                                      (dependencia total)
                                                      Precisa de ayuda para realizar
                                                      actividades (comer, asearse,..)
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                            <div class="col-md-3">
                                              <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">Sentado</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td class="text-justify">
                                                      No puede caminar, no puede
                                                      mantenerse de pie, es capaz de
                                                      mantenerse sentado o puede
                                                      movilizarse en silla.
                                                      Precisa ayuda de otro a través de
                                                      dispositivos mecánicos
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                            <div class="col-md-3">
                                              <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">Camina con Ayuda</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td class="text-justify">
                                                      Es capaz de caminar con ayuda o
                                                      supervisión de otra persona o de
                                                      médicos mecánicos como aparatos
                                                      con mas de un punto de apoyo
                                                      inicia movimientos voluntarios con
                                                      bastante frecuencia pero requiere
                                                      ayuda para realizar, completar o
                                                      mantener algunos de ellos
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                            <div class="col-md-3">
                                              <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th >Ambulante</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td class="text-justify">
                                                      Independiente total, no necesita
                                                      ayuda de otra persona.
                                                      Capaz de caminar solo, aunque se
                                                      ayude de aparatos de un solo
                                                      punto de apoyo o lleve prótesis
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                          </div>
                                        </div>
                                      </div>                                
                                    </div>
                                  </div>
                                  <div class="card-header" id="headiuno">
                                      <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#escala5cs"
                                      aria-expanded="false" aria-controls="escala5cs">
                                        Movilidad
                                      </button>
                                  </div>
                                  <div class="collapse" id="escala5cs" aria-labelledby="headiuno" data-parent="#separa7cs">
                                    <div class="card-body">
                                      <div class="row">
                                        <div class="form-group col-md-12">
                                          <div class="progress">
                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">1</div>
                                            <div class="progress-bar bg-secondary" role="" style="width: 30%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">2</div>
                                            <div class="progress-bar bg-secondary" role="" style="width: 31%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">3</div>
                                            <div class="progress-bar bg-secondary" role="" style="width: 31%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">4</div>
                                          </div>
                                          <input type="range" class="form-control-range" id="csnortonmovilidad" name="csnortonmovilidad" onchange="norton()" value="2" min="1" max="4" step="1">
                                          <div class="row">
                                            <div class="col-md-3">
                                              <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">Inmóvil</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td class="text-justify">
                                                      Es incapaz de cambiar de postura
                                                      por si mismo, mantener la posición
                                                      corporal o sostenrla
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                            <div class="col-md-3">
                                              <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">Muy limitada</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td class="text-justify">
                                                      Solo inicia movilizaciones
                                                      voluntarias con escasa frecuenia y
                                                      necesita ayuda para finalizar todos
                                                      los movimientos
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                            <div class="col-md-3">
                                              <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">Disminuida</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td class="text-justify">
                                                      Inicia movimientos voluntarios con
                                                      bastante frecuencia, pero requiere
                                                      ayuda para realizar, completar o
                                                      mantener algunos de ellos
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                            <div class="col-md-3">
                                              <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th >Total</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td class="text-justify">
                                                      Es totalmente capaz de cambiar de
                                                      postura corporal de forma
                                                      autónoma, mantenerla o
                                                      sostenerla
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-header" id="headiuno">
                                      <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#escala6cs"
                                      aria-expanded="false" aria-controls="escala6cs">
                                        Incontinencia
                                      </button>
                                  </div>
                                  <div class="collapse" id="escala6cs" aria-labelledby="headiuno" data-parent="#separa7cs">
                                    <div class="card-body">                                
                                      <div class="row">
                                        <div class="form-group col-md-12">
                                          <div class="progress">
                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">1</div>
                                            <div class="progress-bar bg-secondary" role="" style="width: 30%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">2</div>
                                            <div class="progress-bar bg-secondary" role="" style="width: 31%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">3</div>
                                            <div class="progress-bar bg-secondary" role="" style="width: 31%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary" role="" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">4</div>
                                          </div>
                                          <input type="range" class="form-control-range" id="csnortonincontinencia" name="csnortonincontinencia" onchange="norton()" value="2" min="1" max="4" step="1">
                                          <div class="row">
                                            <div class="col-md-3">
                                              <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">Urinaria y Fecal</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td class="text-justify">
                                                      No controla ninguno de los
                                                      esfinteres
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                            <div class="col-md-3">
                                              <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">Urinaria o Fecal</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td class="text-justify">
                                                      No controla uno de los dos
                                                      esfinteres permanentemente
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                            <div class="col-md-3">
                                              <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">Ocasional</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td class="text-justify">
                                                      No controla esporádicamente uno
                                                      o ambos esfinteres en 24 horas
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                            <div class="col-md-3">
                                              <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th >Ninguna</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td class="text-justify">
                                                      Control de ambos esfinteres
                                                      implantación de sonda vesical y
                                                      control de esfinter anal
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group col-md-12  dropdown-divider"></div>
                                <div class="row">
                                  <div class="form-group col-md-4">
                                    <label class="col-form-label">RIESGO ALTO: puntajes menores a 11</label><span> </span>
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label class="col-form-label">RIESGO EVIDENTE: puntajes entre 12 y 14</label>
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label class="col-form-label">RIESGO MINIMO: puntajes mayores a 14</label>
                                  </div>
                                </div>
                                <div class="form-group col-md-12  dropdown-divider"></div>
                                <div class="row">
                                  <div class="form-group col-md-2 text-right">
                                    <label class="col-form-label">Total Obtenido</label>
                                  </div>
                                  <div class="form-group col-md-4">
                                    <input type="text" class="form-control" placeholder="" id="csnortontotal" name="csnortontotal" readonly="" />
                                  </div>
                                  <div class="form-group col-md-2 text-right">
                                    <label class="col-form-label">Nivel de Riesgo</label>
                                  </div>
                                  <div class="form-group col-md-4">
                                    <input type="text" class="form-control" placeholder="" id="csnortonnivel" name="csnortonnivel" readonly="" />
                                  </div>
                                </div>
                                <div class="form-group col-md-12  dropdown-divider"></div>
                                <div class="row">
                                  <div class="col-md-12 text-center" >
                                    <!-- <input type="text" class="form-control" id="csnmedpad5" name="csnmedpad5" style="display:none" value="<?php echo ucwords($this->session->userdata('s_id'));?>" />
                                    <input type="text" class="form-control" id="csnumhc5" name="csnumhc5" style="display:none" /> -->
                                  </div>
                                  <div class="col-md-12 text-center" >
                                    <!-- <button type="button" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarnorton2">ACTUALIZAR</button> -->
                                  </div>
                                </div>                         
                              </div>
                            </div>
                            </form>
                          </div>
                          <div class="collapse multi-collapse collapse" id="csmulti6" data-parent="#accordion2cs">
                            <div>
                              <form >
                              <div class="accordion form-group col-md-12" id="separa8cs">
                                <div class="card">
                                  <div class="card-header" id="headiuno">
                                      <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#escalaq1cs"
                                      aria-expanded="false" aria-controls="escalaq1cs">
                                        Movilidad
                                      </button>
                                    </div>
                                    <div class="collapse" id="escalaq1cs" aria-labelledby="headiuno" data-parent="#separa8cs">
                                      <div class="card-body">
                                        <div class="row">
                                         <div class="form-group col-md-12">
                                            <label for="formControlRange">Movilidad capacidad para cambiar y controlar la posición del cuerpo</label>
                                          </div>
                                          <div class="form-group col-md-12">
                                            <div class="progress">
                                              <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">1</div>
                                              <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                              <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">2</div>
                                              <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                              <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">3</div>
                                              <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                              <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">4</div>
                                            </div>
                                            <input type="range" class="form-control-range" id="csbradenmovilidad" name="csbradenmovilidad" onchange="braden()" value="2" min="1" max="4" step="1">
                                            <div class="row">
                                              <div class="col-md-3">
                                                <table class="table table-bordered">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Completamente inmóvil</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="text-justify">
                                                        No realiza ningún movimiento con
                                                        el cuerpo o las extremidades sin
                                                        ayuda
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                              <div class="col-md-3">
                                                <table class="table table-bordered">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Muy Limitada</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="text-justify">
                                                        Ocasionalmente realiza ligeros
                                                        cambios en la posición del cuerpo o
                                                        de las extremidades, pero no es
                                                        capaz de realizar cambios
                                                        frecuentes o significativos sin ayuda
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                              <div class="col-md-3">
                                                <table class="table table-bordered">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Ligeramente Limitada</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="text-justify">
                                                        Realiza frecuentes aunque ligeros
                                                        cambios en la posición del cuerpo o
                                                        de las extremidades sin ayuda
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                              <div class="col-md-3">
                                                <table class="table table-bordered">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Sin Limitaciones</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="text-justify">
                                                        Realiza importantes y frecuentes
                                                        cambios de posición sin ayuda
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="card">
                                  <div class="card-header" id="headiuno">
                                      <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#escalaq2cs"
                                      aria-expanded="false" aria-controls="escalaq2cs">
                                        Actividad
                                      </button>
                                    </div>
                                    <div class="collapse" id="escalaq2cs" aria-labelledby="headiuno" data-parent="#separa8cs">
                                      <div class="card-body">
                                        <div class="row">
                                           <div class="form-group col-md-12">
                                            <label for="formControlRange">Actividad nivel de actividad física</label>
                                          </div>
                                          <div class="form-group col-md-12">
                                            <div class="progress">
                                              <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">1</div>
                                              <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                              <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">2</div>
                                              <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                              <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">3</div>
                                              <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                              <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">4</div>
                                            </div>
                                            <input type="range" class="form-control-range" id="csbradenactividad" name="csbradenactividad" onchange="braden()" value="2" min="1" max="4" step="1">
                                            <div class="row">
                                              <div class="col-md-3">
                                                <table class="table table-bordered">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">En Cama</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="text-justify">
                                                        Limitado a la cama
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                              <div class="col-md-3">
                                                <table class="table table-bordered">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">En silla</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="text-justify">
                                                        Capacidad para caminar
                                                        severamente limitada o inexistente
                                                        No puede soportar su propio peso
                                                        y/o hay que ayudarlo para sentarse
                                                        en una silla o en una silla de ruedas
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                              <div class="col-md-3">
                                                <table class="table table-bordered">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Camina ocasionalmente</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="text-justify">
                                                        Camina ocacionalmente durante el 
                                                        dia, pero distancias muy cortas, con
                                                        o sin ayuda. Pasa la mayor parte de
                                                        cada turno en la cama o en la silla
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                              <div class="col-md-3">
                                                <table class="table table-bordered">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Camina con Frecuencia</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="text-justify">
                                                        Camina fuera de la habitación al
                                                        menos dos veces al dia y dentro de
                                                        la habitación al menos una vez cada
                                                        dos horas durante las horas de paseo
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="card">
                                  <div class="card-header" id="headiuno">
                                      <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#escalaq3cs"
                                      aria-expanded="false" aria-controls="escalaq3cs">
                                        Percepción Sensorial
                                      </button>
                                    </div>
                                    <div class="collapse" id="escalaq3cs" aria-labelledby="headiuno" data-parent="#separa8cs">
                                      <div class="card-body">
                                        <div class="row">
                                           <div class="form-group col-md-12">
                                            <label for="formControlRange">Percepción Sensorial capacidad de responder adecuadamente, según su nivel de desarrollo al disconfort</label>
                                          </div>
                                          <div class="form-group col-md-12">
                                            <div class="progress">
                                              <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">1</div>
                                              <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                              <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">2</div>
                                              <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                              <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">3</div>
                                              <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                              <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">4</div>
                                            </div>
                                            <input type="range" class="form-control-range" id="csbradenpersecion" name="csbradenpersecion" onchange="braden()" value="2" min="1" max="4" step="1">
                                            <div class="row">
                                              <div class="col-md-3">
                                                <table class="table table-bordered">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Completamente limitada</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="text-justify">
                                                        No responde a estímulos dolorosos
                                                        (no gime, no se estremece ni se
                                                        agarra) debido a un bajo nivel de
                                                        conciencia o a sedación O
                                                        capacidad limitada para sentir
                                                        dolor en la mayor parte del cuerpo
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                              <div class="col-md-3">
                                                <table class="table table-bordered">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Muy limitada</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="text-justify">
                                                        Responde solo a estímulos
                                                        dolorosos. Incapacidad para
                                                        comunicar malestar, excepto
                                                        gimiendo o mostrando inquietud O
                                                        tiene alguna alteracion sensorial
                                                        que limita la capacidad de sentir
                                                        dolor o malestar
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                              <div class="col-md-3">
                                                <table class="table table-bordered">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Levemente limitada</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="text-justify">
                                                        Responde a ordenes verbales, pero
                                                        no siempre puede comunicar la
                                                        incomodidad o la necesidad de ser
                                                        cambiado de postura O tiene
                                                        alguna alteración sensorial que
                                                        limita la capacidad de sentir dolor o
                                                        malestar
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                              <div class="col-md-3">
                                                <table class="table table-bordered">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Sin limitaciones</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="text-justify">
                                                        Responde a ordenes verbales. No
                                                        tiene ninguna alteración sensorial
                                                        que limita su capacidad de sentir o
                                                        comunicar dolor o malestar
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="card">
                                  <div class="card-header" id="headiuno">
                                      <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#escalaq4cs"
                                      aria-expanded="false" aria-controls="escalaq4cs">
                                        Humedad
                                      </button>
                                    </div>
                                    <div class="collapse" id="escalaq4cs" aria-labelledby="headiuno" data-parent="#separa8cs">
                                      <div class="card-body">
                                        <div class="row">
                                           <div class="form-group col-md-12">
                                            <label for="formControlRange">Humedad nivel de exposición de la piel húmeda</label>
                                          </div>
                                          <div class="form-group col-md-12">
                                            <div class="progress">
                                              <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">1</div>
                                              <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                              <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">2</div>
                                              <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                              <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">3</div>
                                              <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                              <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">4</div>
                                            </div>
                                            <input type="range" class="form-control-range" id="csbradenhumeda" name="csbradenhumeda" onchange="braden()" value="2" min="1" max="4" step="1">
                                            <div class="row">
                                              <div class="col-md-3">
                                                <table class="table table-bordered">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Completamente húmeda</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="text-justify">
                                                        La piel se mantiene húmeda casi
                                                        permanentemente debido a la
                                                        transpiración, orina, drenaje, etc.
                                                        La humedad es detectada cada vez
                                                        que se gira o mueve al paciente
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                              <div class="col-md-3">
                                                <table class="table table-bordered">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Muy húmeda</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="text-justify">
                                                        La piel esta humedad a menudo
                                                        pero no siempre. La ropa de cama
                                                        debe ser cambiada al menos cada 8 horas
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                              <div class="col-md-3">
                                                <table class="table table-bordered">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Ocacionalmente húmeda</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="text-justify">
                                                        La piel esta húmeda de forma
                                                        ocasional, necesitando cambio de
                                                        la ropa de cama cada 12 horas.
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                              <div class="col-md-3">
                                                <table class="table table-bordered">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Raramente húmeda</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="text-justify">
                                                        La piel esta casi siempre seca. Hay
                                                        que cambiar los pañales de forma
                                                        rutinaria; la ropa de cama solo hay
                                                        que cambiarla cada 24 horas
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="card">
                                  <div class="card-header" id="headiuno">
                                      <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#escalaq5cs"
                                      aria-expanded="false" aria-controls="escalaq5cs">
                                        Nutrición
                                      </button>
                                    </div>
                                    <div class="collapse" id="escalaq5cs" aria-labelledby="headiuno" data-parent="#separa8cs">
                                      <div class="card-body">
                                        <div class="row">
                                           <div class="form-group col-md-12">
                                            <label for="formControlRange">Nutrición patron habitual de ingesta de alimentos</label>
                                          </div>
                                          <div class="form-group col-md-12">
                                            <div class="progress">
                                              <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">1</div>
                                              <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                              <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">2</div>
                                              <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                              <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">3</div>
                                              <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                              <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">4</div>
                                            </div>
                                            <input type="range" class="form-control-range" id="csbradennutricion" name="csbradennutricion" onchange="braden()" value="2" min="1" max="4" step="1">
                                            <div class="row">
                                              <div class="col-md-3">
                                                <table class="table table-bordered">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Muy pobre</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="text-justify">
                                                        Esta en ayunas; o a dieta líquida; o
                                                        con sueroterapia mas de 5 dias.
                                                        Raras veces come mas de la mitad
                                                        de cualquier comida ofrecida
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                              <div class="col-md-3">
                                                <table class="table table-bordered">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Indecuada</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="text-justify">
                                                        Se le admnisitra una nutrición
                                                        enteral (SNG) o nutrición
                                                        parental(IV) que le proporciona
                                                        una cantidad inadecuada de 
                                                        calorías y minerales para su edad
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                              <div class="col-md-3">
                                                <table class="table table-bordered">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Adecuada</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="text-justify">
                                                        Come la mitad de la mayoría de las
                                                        comidas. Come un total de 4
                                                        raciones de proteínas al dia
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                              <div class="col-md-3">
                                                <table class="table table-bordered">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Excelente</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="text-justify">
                                                        Toma una dieta normal que le
                                                        proporciona las calorías adecuadas
                                                        para su edad. Nunca rechaza una
                                                        comida. Ocasionalmente come
                                                        entre comidas
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="card">
                                  <div class="card-header" id="headiuno">
                                      <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#escalaq6cs"
                                      aria-expanded="false" aria-controls="escalaq6cs">
                                        Fricción
                                      </button>
                                    </div>
                                    <div class="collapse" id="escalaq6cs" aria-labelledby="headiuno" data-parent="#separa8cs">
                                      <div class="card-body">
                                        <div class="row">
                                           <div class="form-group col-md-12">
                                            <label for="formControlRange">Fricción</label>
                                          </div>
                                          <div class="form-group col-md-12">
                                            <div class="progress">
                                              <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">1</div>
                                              <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                              <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">2</div>
                                              <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                              <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">3</div>
                                              <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                              <div class="progress-bar bg-light" role="" style="width: 1%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">4</div>
                                            </div>
                                            <input type="range" class="form-control-range" id="csbradenfriccion" name="csbradenfriccion" onchange="braden()" value="2" min="1" max="4" step="1">
                                            <div class="row">
                                              <div class="col-md-3">
                                                <table class="table table-bordered">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Problema significativo</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="text-justify">
                                                        La espasticidad, contracturas,
                                                        picores o agitación le llevan a un
                                                        movimiento y fricción casi
                                                        constantes
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                              <div class="col-md-3">
                                                <table class="table table-bordered">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Problema</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="text-justify">
                                                        Requiere ayuda para moverse. Es
                                                        imposible levantarle
                                                        completamente sin que se
                                                        produzca un roce contra las
                                                        sabanas. Frecuentemente se desliza
                                                        hacia abajo en la cama o en la silla
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                              <div class="col-md-3">
                                                <table class="table table-bordered">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Problema potencial</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="text-justify">
                                                        Se mueve debilmente o necesita
                                                        una ayuda mínima. Mientras se
                                                        mueve, es posible que la piel roce
                                                        de algun modo con las sabanas, la
                                                        silla y otros dispositivos.
                                                        Ocasionalmente se deliza hacia abajo
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                              <div class="col-md-3">
                                                <table class="table table-bordered">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Sin problema aparente</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="text-justify">
                                                        Se mueve independientemente en
                                                        la cama y en la silla, y tiene
                                                        suficiente fuerza muscular para
                                                        levantarse completamente
                                                        mientras se mueve. Mantiene una
                                                        buena postura en la cama o en la
                                                        silla en todo momento
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12  dropdown-divider"></div>
                                <div class="row">
                                  <div class="form-group col-md-4">
                                    <label class="col-form-label">RIESGO ALTO: puntajes menores a 12</label><span> </span>
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label class="col-form-label">RIESGO MODERADO: entre 13 y 16</label>
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label class="col-form-label">RIESGO BAJO: puntaje mayor a 16</label>
                                  </div>
                                </div>
                                <div class="form-group col-md-12  dropdown-divider"></div>
                                <div class="row">
                                  <div class="form-group col-md-2 text-right">
                                    <label class="col-form-label">Total Obtenido</label>
                                  </div>
                                  <div class="form-group col-md-4">
                                    <input type="text" class="form-control" placeholder="" id="csbradentotal" name="csbradentotal" readonly="" />
                                  </div>
                                  <div class="form-group col-md-2 text-right">
                                    <label class="col-form-label">Nivel de Riesgo</label>
                                  </div>
                                  <div class="form-group col-md-4">
                                    <input type="text" class="form-control" placeholder="" id="csbradennivel" name="csbradennivel" readonly="" />
                                  </div>
                                </div>
                                <div class="form-group col-md-12  dropdown-divider"></div>
                                <div class="row">
                                  <div class="col-md-12 text-center">
                                    <!-- <input type="text" class="form-control" id="csnmedpad6" name="csnmedpad6" style="display:none" value="<?php echo ucwords($this->session->userdata('s_id'));?>" />
                                    <input type="text" class="form-control" id="csnumhc6" name="csnumhc6" style="display:none" /> -->
                                  </div>
                                  <div class="col-md-12 text-center">
                                    <!-- <button type="button" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarbraden2">ACTUALIZAR</button> -->
                                  </div>
                                </div>
                              </div>
                              </form>
                            </div>                      
                          </div>
                        </div>
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
        <div class="modal fade" id="mdetallesenf" tabindex="-1" role="dialog" aria-labelledby="vtitulo" aria-hidden="true">
              <div class="modal-dialog modal-xl" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" >Detalle Historia Enfermera</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                  <div class="modal-body">
                    <div class="container">
                      <div class="form-group col-md-12">
                        <div class="card-header">
                          <ul class="nav nav-tabs nav-justified">
                              <li class="nav-item">
                                <a class="nav-link active bg-white" id="unocse" href="#csemulti1" data-toggle="collapse" data-target="#csmulti1" aria-expanded="false" aria-controls="csemulti1" onclick="pasarcse('1')"><font size="5">HISTORIA DE ENFERMERIA</font></a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link bg-primaryhc text-uppercase text-white" id="doscse" href="#csemulti2" data-toggle="collapse" data-target="#csemulti2" aria-expanded="false" aria-controls="csemulti2" onclick="pasarcse('2')"><font size="5">Plan de Manejo</font></a>
                              </li>
                               <li class="nav-item">
                                <a class="nav-link bg-primaryhc text-uppercase text-white" id="trescse" href="#csemulti3" data-toggle="collapse" data-target="#csemulti3" aria-expanded="false" aria-controls="csemulti3" onclick="pasarcse('3')"><font size="5">Escala de Carga</font></a>
                              </li>
                               <li class="nav-item">
                                <a class="nav-link bg-primaryhc text-uppercase text-white" id="cuacse" href="#csemulti4" data-toggle="collapse" data-target="#csemulti4" aria-expanded="false" aria-controls="csemulti4" onclick="pasarcse('4')"><font size="5">V. Sociofamiliar</font></a>
                              </li>
                          </ul>
                        </div>
                        <div class="card body">
                          <div class="accordion" id="accordion2cse">
                            <div class="collapse multi-collapse collapse show" id="csemulti1" data-parent="#accordion2cse">
                              <form >
                              <div class="form-row ">
                                <div class="form-group col-md-12">
                                  <div class="card-header">
                                    <div class="accordion" id="accordion3cse">
                                      <div class="collapse multi-collapse collapse show" id="op1cse" data-parent="#accordion3cse">
                                        <div class="form-row">
                                          <div class="accordion form-group col-md-12" id="separa1cse">
                                            <div class="card">
                                              <div class="card-header" id="headiuno">
                                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpad1cse"
                                                aria-expanded="false" aria-controls="enfpad1cse">
                                                  Diagnóstico, Antecedentes y Valoración Subjetiva
                                                </button>
                                              </div>
                                              <div class="collapse" id="enfpad1cse" aria-labelledby="headiuno" data-parent="#separa1cse">
                                                <div class="card-body">
                                                  <div class="row">
                                                    <div class="form-group col-md-12">
                                                      <label class="col-form-label"><strong>Diagnósticos:</strong></label>
                                                      <textarea class="form-control" id="csemdiagnosticos" name="csemdiagnosticos" readonly=""></textarea>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                      <label for="nota" class="col-form-label"><strong>Antecedentes:</strong></label>
                                                      <textarea class="form-control" rows="15" id="cseantecedentes" name="cseantecedentes" onkeypress="" required></textarea>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                      <label for="nota" class="col-form-label"><strong>Valoración Subjetiva estado general:</strong></label>
                                                      <textarea class="form-control" rows="8" id="csevaloracionsubjetiva" name="csevaloracionsubjetiva" onkeypress="" required></textarea>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="card-header" id="headiuno">
                                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpad2cse"
                                                aria-expanded="false" aria-controls="enfpad2cse">
                                                  Signos Vitales
                                                </button>
                                              </div>
                                              <div class="collapse" id="enfpad2cse" aria-labelledby="headiuno" data-parent="#separa1cse">
                                                <div class="card-body">
                                                  <div class="row">
                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label"><strong>Frecuencia Cardíaca</strong></label>
                                                      <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text">
                                                            <img src="<?php echo base_url();?>assets/img/fc.jpg" class="rounded-circle" width="150px" height="180px">
                                                          </span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="" id="csesvfc" name="csesvfc" minlength="1" maxlength="6" pattern="\S[0-9A-Za-z, ]{1,6}" required />
                                                      </div>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label"><strong>Frecuencia Respiratoria</strong></label>
                                                      <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text">
                                                            <img src="<?php echo base_url();?>assets/img/fr.jpg" class="rounded-circle" width="150px" height="180px">
                                                          </span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="" id="csesvfr" name="csesvfr" minlength="1" maxlength="8" pattern="\S[A-Za-z0-9,. ]{1,8}" required />
                                                      </div>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label"><strong>Sístole</strong></label>  
                                                      <input type="text" class="form-control" placeholder="" id="csesisenf" name="csesisenf" onkeyup="sumartensionarterialenf();" minlength="1" maxlength="6" pattern="\S[A-Za-z0-9 ]{1,6}" required />
                                                      <label class="col-form-label"><strong>Diástole</strong></label>
                                                      <input type="text" class="form-control" placeholder="" id="csediasenf" name="csediasenf" onkeyup="sumartensionarterialenf();" minlength="1" maxlength="6" pattern="\S[A-Za-z0-9 ]{1,6}" required />
                                                      <label class="col-form-label"><strong>TENSION ARTERIAL:</strong></label>
                                                      <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text">
                                                            <img src="<?php echo base_url();?>assets/img/ta.jpg" class="rounded-circle" width="22px" height="22px">
                                                          </span>
                                                        </div>              
                                                        <input type="text" class="form-control" placeholder="" id="csesvta" name="csesvta" required />
                                                      </div>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label"><strong>Temperatura</strong></label>
                                                      <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text">
                                                            <img src="<?php echo base_url();?>assets/img/temp.jpg" class="rounded-circle" width="150px" height="150px">
                                                          </span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="" id="csesvt" name="csesvt" minlength="1" maxlength="6" pattern="\S[A-Za-z0-9 ]{1,6}" required />
                                                      </div>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label"><strong>Saturación</strong></label>
                                                      <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text">
                                                            <img src="<?php echo base_url();?>assets/img/sac.jpg" class="rounded-circle" width="150px" height="150px">
                                                          </span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="" id="csesvsaturacion" name="csesvsaturacion" minlength="1" maxlength="6" pattern="\S[A-Za-z0-9,. ]{1,6}" required />
                                                      </div>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label"><strong>Glucosa</strong></label>
                                                      <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text">
                                                            <img src="<?php echo base_url();?>assets/img/glu.jpg" class="rounded-circle" width="150px" height="150px">
                                                          </span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="" id="csesvglucometria" name="csesvglucometria" minlength="1" maxlength="6" pattern="\S[A-Za-z0-9,. ]{1,6}" required />
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="card-header" id="headiuno">
                                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpad33cse"
                                                aria-expanded="false" aria-controls="enfpad33cse">
                                                  Dominio 1: Promoción de la Salud
                                                </button>
                                              </div>
                                              <div class="collapse" id="enfpad33cse" aria-labelledby="headiuno" data-parent="#separa1cse">
                                                <div class="card-body">
                                                  <div class="row">
                                                    <div class="form-group col-md-12">
                                                      <label for="nota" class="col-form-label"><strong>¿Que sabe usted sobre su enfermedad?:</strong></label>
                                                      <input type="text" class="form-control" placeholder="" id="csedom1p1" name="csedom1p1" required />
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                      <label for="nota" class="col-form-label"><strong>¿Necesita mayor información sobre su enfermedad?:</strong></label>
                                                      <input type="text" class="form-control" placeholder="" id="csedom1p2" name="csedom1p2" required />
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="card-header" id="headiuno">
                                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpad3cse"
                                                aria-expanded="false" aria-controls="enfpad3cse">
                                                  Dominio 2: Nutrición
                                                </button>
                                              </div>
                                              <div class="collapse" id="enfpad3cse" aria-labelledby="headiuno" data-parent="#separa1cse">
                                                <div class="card-body">
                                                  <div class="row">
                                                    <div class="form-group col-md-12">
                                                      <label class="col-form-label text-uppercase"><strong>Alimentación</strong></label>
                                                      <div class="row">
                                                        <div class="col-md-3">
                                                          <!--  <div class="form-check">
                                                              <input class="form-check-input" type="radio" name="d2nutricion" id="d2nutricion1" onclick="" value="No Selecciona">
                                                              <label class="form-check-label">No Selecciona</label>
                                                            </div> -->
                                                            <div class="form-check">
                                                              <input class="form-check-input" type="radio" name="d2nutricion" id="csed2nutricion2" onclick=""  value="Dieta" >
                                                              <label class="form-check-label">Dieta</label>
                                                            </div>
                                                            <div class="form-check">
                                                              <input class="form-check-input" type="radio" name="d2nutricion" id="csed2nutricion3" onclick=""  value="SNG">
                                                              <label class="form-check-label">SNG</label>
                                                            </div>
                                                            <div class="form-check">
                                                              <input class="form-check-input" type="radio" name="d2nutricion" id="csed2nutricion4" onclick=""  value="SOG" >
                                                              <label class="form-check-label">SOG</label>
                                                            </div>
                                                            <div class="form-check">
                                                              <input class="form-check-input" type="radio" name="d2nutricion" id="csed2nutricion5" onclick="" value="SNY">
                                                              <label class="form-check-label">SNY</label>
                                                            </div>
                                                            <div class="form-check">
                                                              <input class="form-check-input" type="radio" name="d2nutricion" id="csed2nutricion1" value="NPT">
                                                              <label class="form-check-label">NPT</label>
                                                            </div>
                                                            <div class="form-check">
                                                              <input class="form-check-input" type="radio" name="d2nutricion" id="csed2nutricion6" value="Gastrostomía">
                                                              <label class="form-check-label">Gastrostomía</label>
                                                            </div>
                                                            <div class="form-group">
                                                              <label class="col-form-label">Otros</label>
                                                              <input type="text" class="form-control" id="csedom2otro" name="csedom2otro" placeholeder="activo" />
                                                              <input type="text" class="form-control" id="csedom2nutricion" name="csedom2nutricion" style="display:none" />
                                                            </div>
                                                        </div>
                                                         <div class="col-md-3">
                                                          <label class="form-check-label text-uppercase"><strong>Mucosa oral:</strong> </label>
                                                          <!-- <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d2mucosa" id="d2mucosa4" onclick=""  value="No aplica" >
                                                            <label class="form-check-label">No aplica</label>
                                                          </div> -->
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d2mucosa" id="csed2mucosa1" onclick=""  value="Intacta" >
                                                            <label class="form-check-label">Intacta</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d2mucosa" id="csed2mucosa2" onclick=""  value="Lesiones">
                                                            <label class="form-check-label">Lesiones</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d2mucosa" id="csed2mucosa3" onclick=""  value="Dificultad para deglutir" >
                                                            <label class="form-check-label">Dificultad para deglutir</label>
                                                            <input type="text" class="form-control" id="csedom2mucosa" name="csedom2mucosa" style="display:none" />
                                                          </div> 
                                                          <label class="form-check-label text-uppercase"><strong>Dentadura:</strong></label>
                                                          <!-- <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d2dentadura" id="d2dentadura4" onclick=""  value="No aplica" >
                                                            <label class="form-check-label">No aplica</label>
                                                          </div> -->
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d2dentadura" id="csed2dentadura1" onclick=""  value="completa" >
                                                            <label class="form-check-label">Completa</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d2dentadura" id="csed2dentadura2" onclick=""  value="incompleta">
                                                            <label class="form-check-label">Incompleta</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d2dentadura" id="csed2dentadura3" onclick=""  value="prótesis dental" >
                                                            <label class="form-check-label">Prótesis dental</label>
                                                            <input type="text" class="form-control" id="csedom2dentadura" name="csedom2dentadura" style="display:none" />
                                                          </div>                                           
                                                        </div>
                                                        <div class="col-md-3">
                                                          <label class="form-check-label text-uppercase"><strong>Piel:</strong> </label>
                                                          <!-- <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d2piel" id="d2piel3" onclick=""  value="No aplica" >
                                                            <label class="form-check-label">No aplica</label>
                                                          </div> -->
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d2piel" id="csed2piel1" onclick=""  value="normal" >
                                                            <label class="form-check-label">Normal</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d2piel" id="csed2piel2" onclick=""  value="pálida">
                                                            <label class="form-check-label">Pálida</label>
                                                            <input type="text" class="form-control" id="csedom2piel" name="csedom2piel" style="display:none" />
                                                          </div>
                                                          <label class="form-check-label text-uppercase"><strong>Hidratacion:</strong> </label>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d2hidratacion" id="csed2hidratacion3" onclick=""  value="normal" >
                                                            <label class="form-check-label">Normal</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d2hidratacion" id="csed2hidratacion1" onclick=""  value="turgente" >
                                                            <label class="form-check-label">Turgente</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d2hidratacion" id="csed2hidratacion2" onclick=""  value="seca">
                                                            <label class="form-check-label">Seca</label>
                                                            <input type="text" class="form-control" id="csedom2hidratacion" name="csedom2hidratacion" style="display:none" />
                                                          </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                          <label class="form-check-label text-uppercase"><strong>Abdomen:</strong> </label>
                                                          <!-- <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d2adobmen" id="d2adobmen5" onclick=""  value="No aplica" >
                                                            <label class="form-check-label">No aplica</label>
                                                          </div> -->
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d2adobmen" id="csed2adobmen1" onclick=""  value="blando" >
                                                            <label class="form-check-label">Blando</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d2adobmen" id="csed2adobmen2" onclick=""  value="distendido">
                                                            <label class="form-check-label">Distendido</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d2adobmen" id="csed2adobmen3" onclick=""  value="doloroso" >
                                                            <label class="form-check-label">Doloroso</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d2adobmen" id="csed2adobmen4" onclick=""  value="valonado">
                                                            <label class="form-check-label">Valonado</label>
                                                            <input type="text" class="form-control" id="csedom2adobmen" name="csedom2adobmen" style="display:none" />
                                                          </div> 
                                                        </div>
                                                        <div class="col-md-3">
                                                          <label class="form-check-label text-uppercase"><strong>Rsls:</strong> </label>
                                                          <!-- <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d2rsls" id="d2rsls5" onclick=""  value="No aplica" >
                                                            <label class="form-check-label">No aplica</label>
                                                          </div> -->
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d2rsls" id="csed2rsls1" onclick=""  value="normales" >
                                                            <label class="form-check-label">Normales</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d2rsls" id="csed2rsls2" onclick=""  value="aumentado">
                                                            <label class="form-check-label">Aumentado</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d2rsls" id="csed2rsls3" onclick=""  value="disminuidos" >
                                                            <label class="form-check-label">Disminuidos</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d2rsls" id="csed2rsls4" onclick=""  value="ausentes">
                                                            <label class="form-check-label">Ausentes</label>
                                                            <input type="text" class="form-control" id="csedom2rsls" name="csedom2rsls" style="display:none" />
                                                          </div> 
                                                        </div>
                                                        <div class="col-md-4">
                                                          <label class="form-check-label text-uppercase"><strong>SNG:</strong> </label>
                                                          <div class="form-check">
                                                            <label class="form-check-label">Residuo Gástrico</label>
                                                            <input type="text" class="form-control" id="csed2sng" name="csed2sng" >
                                                          </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                          <label class="col-form-label"><strong>Drenaje:</strong></label>
                                                          <div class="row">
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="d2drenaje" id="csed2drenaje1" onclick="" onchange="" value="si">
                                                                <label class="form-check-label">SI</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                             <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="d2drenaje" id="csed2drenaje2" onclick="" onchange="" value="no">
                                                                <label class="form-check-label">NO</label>
                                                                <input type="text" class="form-control" id="csedom2drenaje" name="csedom2drenaje" style="display:none" />
                                                              </div>
                                                            </div> 
                                                            <div class="col-md-12">
                                                              <div class="form-check">
                                                                <label class="form-check-label">Observaciones</label>
                                                                <input type="text" class="form-control" id="csed2caracteristicas" name="csed2caracteristicas" >
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <!-- <div class="form-group col-md-4">
                                                          <label class="col-form-label"><strong>Gastrostomia:</strong></label>
                                                          <div class="row">
                                                             <div class="form-group col-md-4">
                                                              <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="d2gastrostomia" id="d2gastrostomia1" onclick="" onchange="" value="si">
                                                                <label class="form-check-label">SI</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                             <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="d2gastrostomia" id="d2gastrostomia2" onclick="" onchange="" value="no">
                                                                <label class="form-check-label">NO</label>
                                                                <input type="text" class="form-control" id="dom2gastrostomia" name="dom2gastrostomia" style="display:none" />
                                                              </div>
                                                            </div>                                                     
                                                          </div>
                                                        </div> -->
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="card-header" id="headiuno">
                                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpad4cse"
                                                aria-expanded="false" aria-controls="enfpad4cse">
                                                  Dominio 3: Eliminación
                                                </button>
                                              </div>
                                              <div class="collapse" id="enfpad4cse" aria-labelledby="headiuno" data-parent="#separa1cse">
                                                <div class="card-body">
                                                  <div class="row">
                                                    <div class="form-group col-md-12">
                                                      <label class="col-form-label"><strong></strong></label>
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                          <label class="form-check-label text-uppercase"><strong>Deposicion:</strong> </label>
                                                          <!-- <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d3deposiciones" id="d3deposiciones6" onclick=""  value="No aplica" >
                                                            <label class="form-check-label">No aplica</label>
                                                          </div> -->
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d3deposiciones" id="csed3deposiciones1" onclick=""  value="normal" >
                                                            <label class="form-check-label">Normal</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d3deposiciones" id="csed3deposiciones2" onclick=""  value="estreñimiento">
                                                            <label class="form-check-label">Estreñimiento</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d3deposiciones" id="csed3deposiciones3" onclick=""  value="diarrea" >
                                                            <label class="form-check-label">Diarrea</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d3deposiciones" id="csed3deposiciones4" onclick=""  value="melena">
                                                            <label class="form-check-label">Melena</label>
                                                          </div> 
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d3deposiciones" id="csed3deposiciones5" onclick=""  value="hematoquecia">
                                                            <label class="form-check-label">Hematoquecia</label>
                                                            <input type="text" class="form-control" id="csedom3deposiciones" name="csedom3deposiciones" style="display:none" />
                                                          </div>
                                                          <div class="form-group">
                                                            <label class="form-check-label "><strong>Observaciones</strong> </label>
                                                            <input type="text" class="form-control" id="csedom3tipo" name="csedom3tipo">
                                                          </div> 
                                                        </div>
                                                        <div class="col-md-4">
                                                          <label class="form-check-label"><strong>Vómito</strong></label>
                                                          <div class="row">
                                                             <div class="form-group col-md-4">
                                                              <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="d3vomito" id="csed3vomito1" onclick="" onchange="" value="si">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                             <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="d3vomito" id="csed3vomito2" onclick="" onchange="" value="no">
                                                                <label class="form-check-label">No</label>
                                                                <input type="text" class="form-control" id="csedom3vomito" name="csedom3vomito" style="display:none" />
                                                              </div>
                                                            </div>                                                     
                                                          </div>
                                                          <div class="form-group">
                                                            <label class="form-check-label"><strong>Observaciones</strong> </label>
                                                            <input type="text" class="form-control" id="csed3caracteristicas" name="csed3caracteristicas">
                                                          </div>
                                                          <!-- <div class="form-group col-md-4"> -->
                                                            <label class="col-form-label"><strong>Colostomía:</strong></label>
                                                            <div class="row">
                                                               <div class="form-group col-md-4">
                                                                <div class="form-check">
                                                                  <input class="form-check-input" type="radio" name="d3colostomia" id="csed3colostomia1" onclick="" onchange="" value="si">
                                                                  <label class="form-check-label">Si</label>
                                                                </div>
                                                              </div>
                                                              <div class="form-group col-md-4">
                                                               <div class="form-check">
                                                                  <input class="form-check-input" type="radio" name="d3colostomia" id="csed3colostomia2" onclick="" onchange="" value="no">
                                                                  <label class="form-check-label">No</label>
                                                                  <input type="text" class="form-control" id="csedom3colostomia" name="csedom3colostomia" style="display:none" />
                                                                </div>
                                                              </div>                                                     
                                                            </div>
                                                          <!-- <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d3vomito"  onclick=""  value="drenaje">
                                                            <input type="text" class="form-control" id="dom3vomito" name="dom3vomito" style="display:none" />
                                                          </div> -->
                                                          <!-- <div class="form-group">
                                                            <label class="form-check-label"><strong>Caracteristicas</strong> </label>
                                                            <input type="text" class="form-control" id="d3caracteristicas" name="d3caracteristicas">
                                                          </div> -->
                                                        </div>
                                                        <div class="col-md-4">
                                                          <label class="form-check-label text-uppercase"><strong>Diuresis:</strong> </label>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d3oresis" id="csed3oresis1" onclick=""  value="espontánea" >
                                                            <label class="form-check-label">Espontánea</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d3oresis" id="csed3oresis2" onclick=""  value="retención">
                                                            <label class="form-check-label">Retención</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d3oresis" id="csed3oresis3" onclick=""  value="incontinencia" >
                                                            <label class="form-check-label">Incontinencia</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d3oresis" id="csed3oresis4" onclick=""  value="catéter urinario">
                                                            <label class="form-check-label">Catéter urinario</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d3oresis" id="csed3oresis5" onclick=""  value="poliuria">
                                                            <label class="form-check-label">Poliuria</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d3oresis" id="csed3oresis6" onclick=""  value="oliguria">
                                                            <label class="form-check-label">Oliguria</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d3oresis" id="csed3oresis7" onclick=""  value="anuria">
                                                            <label class="form-check-label">Anuria</label>
                                                            <input type="text" class="form-control" id="csedom3oresis" name="csedom3oresis" style="display:none" />
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="card-header" id="headiuno">
                                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpad5cse"
                                                aria-expanded="false" aria-controls="enfpad5cse">
                                                  Dominio 4: Actividad y Reposo
                                                </button>
                                              </div>
                                              <div class="collapse" id="enfpad5cse" aria-labelledby="headiuno" data-parent="#separa1cse">
                                                <div class="card-body">
                                                  <div class="row">
                                                    <div class="form-group col-md-12">
                                                      <label class="col-form-label"><strong></strong></label>
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                          <label class="form-check-label text-uppercase"><strong>Grado de dependencia:</strong></label>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4dependencia" id="csed4dependencia5" onclick=""  value="No aplica" >
                                                            <label class="form-check-label">No aplica</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4dependencia" id="csed4dependencia1" onclick=""  value="I" >
                                                            <label class="form-check-label">I</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4dependencia" id="csed4dependencia2" onclick=""  value="II">
                                                            <label class="form-check-label">II</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4dependencia" id="csed4dependencia3" onclick=""  value="III" >
                                                            <label class="form-check-label">III</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4dependencia" id="csed4dependencia4" onclick=""  value="IV">
                                                            <label class="form-check-label">IV</label>
                                                            <input type="text" class="form-control" id="csedom4dependencia" name="csedom4dependencia" style="display:none" />
                                                          </div> 
                                                        </div>
                                                         <div class="col-md-4">
                                                          <label class="form-check-label text-uppercase"><strong>Sueño:</strong></label>
                                                          <!-- <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4sueno" id="d4sueno4" onclick=""  value="No aplica" >
                                                            <label class="form-check-label">No aplica</label>
                                                          </div> -->
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4sueno" id="csed4sueno1" onclick=""  value="completo" >
                                                            <label class="form-check-label">Completo</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4sueno" id="csed4sueno2" onclick=""  value="parcial">
                                                            <label class="form-check-label">Parcial</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4sueno" id="csed4sueno3" onclick=""  value="insomnio" >
                                                            <label class="form-check-label">Insomnio</label>
                                                          </div>
                                                          <div class="form-group">
                                                            <label class="col-form-label">Observaciones</label>
                                                            <input type="text" class="form-control" id="csed4otros" name="csed4otros" >
                                                            <input type="text" class="form-control" id="csedom4sueno" name="csedom4sueno" style="display:none" />
                                                          </div> 
                                                        </div>
                                                        <div class="col-md-4">
                                                          <label class="form-check-label text-uppercase"><strong>Fiebre:</strong></label>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4fiebre" id="csed4fiebre1" onclick=""  value="si" >
                                                            <label class="form-check-label">Si</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4fiebre" id="csed4fiebre2" onclick=""  value="no">
                                                            <label class="form-check-label">No</label>
                                                          </div>
                                                          <div class="form-group">
                                                            <label class="col-form-label">Observaciones</label>
                                                            <input type="text" class="form-control" id="csed4tipo" name="csed4tipo">
                                                            <input type="text" class="form-control" id="csedom4fiebre" name="csedom4fiebre" style="display:none" />
                                                          </div> 
                                                        </div>
                                                        <div class="form-group col-md-12  dropdown-divider"></div>
                                                        <div class="col-md-4">
                                                          <label class="form-check-label text-uppercase"><strong>Movilidad Fisica:</strong></label>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4movilidad" id="csed4movilidad6" onclick=""  value="No aplica" >
                                                            <label class="form-check-label">No aplica</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4movilidad" id="csed4movilidad1" onclick=""  value="hemiplejia" >
                                                            <label class="form-check-label">Hemiplejia</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4movilidad" id="csed4movilidad2" onclick=""  value="hemiparexia">
                                                            <label class="form-check-label">Hemiparexia</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4movilidad" id="csed4movilidad3" onclick=""  value="cuadriplejia">
                                                            <label class="form-check-label">Cuadriplejia</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4movilidad" id="csed4movilidad4" onclick=""  value="fracturas">
                                                            <label class="form-check-label">Fracturas</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4movilidad" id="csed4movilidad7" onclick=""  value="apoyos externos">
                                                            <label class="form-check-label">Apoyos externos</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4movilidad" id="csed4movilidad5" onclick=""  value="aparatos externos">
                                                            <label class="form-check-label">Aparatos externos</label>
                                                          </div>
                                                          <div class="form-group">
                                                            <label class="col-form-label">Observaciones</label>
                                                            <input type="text" class="form-control" id="csed4movilidadetalle" name="csed4movilidadetalle">
                                                          </div> 
                                                         <!--  <div class="form-group">
                                                            <label class="form-check-label"><strong>Apoyos externos</strong></label>
                                                            <input type="text" class="form-control" id="d4apoyo" name="d4apoyo">
                                                            <input type="text" class="form-control" id="dom4movilidad" name="dom4movilidad" style="display:none" />
                                                          </div>  -->
                                                        </div>
                                                        <div class="col-md-3">
                                                          <label class="form-check-label text-uppercase"><strong>Fuerza Muscular:</strong></label>
                                                          <!-- <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4muscular" id="d4muscular7" onclick=""  value="No aplica" >
                                                            <label class="form-check-label">No aplica</label>
                                                          </div> -->
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4muscular" id="csed4muscular1" onclick=""  value="conservada" >
                                                            <label class="form-check-label">Conservada</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4muscular" id="csed4muscular2" onclick=""  value="disminuida">
                                                            <label class="form-check-label">Disminuida</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4muscular" id="csed4muscular3" onclick=""  value="flacidez">
                                                            <label class="form-check-label">Flacidez</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4muscular" id="csed4muscular4" onclick=""  value="contractura">
                                                            <label class="form-check-label">Contractura</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4muscular" id="csed4muscular5" onclick=""  value="parálisis">
                                                            <label class="form-check-label">Parálisis</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4muscular" id="csed4muscular6" onclick=""  value="herida quirúrgica">
                                                            <label class="form-check-label">Herida quirúrgica</label>
                                                          </div><br><br>
                                                          <div class="form-group">
                                                            <label class="col-form-label">Observaciones</label>
                                                            <input type="text" class="form-control" id="csed4musculardetalle" name="csed4musculardetalle">
                                                            <input type="text" class="form-control" id="csedom4muscular" name="csedom4muscular" style="display:none" />
                                                          </div> 
                                                        </div>
                                                        <div class="col-md-5">
                                                          <label class="form-check-label text-uppercase"><strong>Respuestas Cardiovasculares Respiratorias:</strong></label>
                                                          <div class="form-group">
                                                          </div>
                                                            <label class="form-check-label"><strong>FC:</strong></label>
                                                          <!-- <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4respiratorias" id="d4respiratorias6" onclick=""  value="No aplica" >
                                                            <label class="form-check-label">No aplica</label>
                                                          </div> -->
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4respiratorias" id="csed4respiratorias1" onclick=""  value="regular" >
                                                            <label class="form-check-label">Regular</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4respiratorias" id="csed4respiratorias2" onclick=""  value="irregular">
                                                            <label class="form-check-label">Irregular</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4respiratorias" id="csed4respiratorias3" onclick=""  value="cianosis">
                                                            <label class="form-check-label">Cianosis</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4respiratorias" id="csed4respiratorias4" onclick=""  value="hipertensión arterial">
                                                            <label class="form-check-label">Hipertensión arterial</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4respiratorias" id="csed4respiratorias5" onclick=""  value="hipotensión arterial">
                                                            <label class="form-check-label">Hipotensión arterial</label>
                                                          </div>
                                                          <div class="form-group"><br>
                                                            <label class="form-check-label"><strong>LLenado Capilar</strong></label>
                                                            <input type="text" class="form-control" id="csed4capilar" name="csed4capilar" >
                                                            <input type="text" class="form-control" id="csedom4respiratorias" name="csedom4respiratorias" style="display:none" />
                                                          </div> 
                                                        </div>
                                                        <div class="form-group col-md-12  dropdown-divider"></div>
                                                        <div class="col-md-4">
                                                          <label class="form-check-label text-uppercase"><strong>Pulso:</strong></label>
                                                          <!-- <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4pulso" id="d4pulso6" onclick=""  value="No aplica" >
                                                            <label class="form-check-label">No aplica</label>
                                                          </div> -->
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4pulso" id="csed4pulso1" onclick=""  value="normal" >
                                                            <label class="form-check-label">Normal</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4pulso" id="csed4pulso2" onclick=""  value="disminuido">
                                                            <label class="form-check-label">Disminuido</label>
                                                          </div>
                                                          <!-- <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4pulso" id="csed4pulso3" onclick=""  value="cuadriplejia">
                                                            <label class="form-check-label">Cuadriplejia</label>
                                                          </div> -->
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4pulso" id="csed4pulso4" onclick=""  value="ausente">
                                                            <label class="form-check-label">Ausente</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4pulso" id="csed4pulso5" onclick=""  value="marcapaso">
                                                            <label class="form-check-label">Marcapaso</label>
                                                          </div>
                                                          <div class="form-group"><br><br><br>
                                                            <label class="form-check-label"><strong>Fecha implantación</strong></label>
                                                            <input type="text" class="form-control" id="csed4pulsofecha" name="csed4pulsofecha">
                                                            <input type="text" class="form-control" id="csedom4pulso" name="csedom4pulso" style="display:none" />
                                                          </div> 
                                                        </div>
                                                        <div class="col-md-4">
                                                          <label class="form-check-label"><strong>FR:</strong></label>
                                                          <!-- <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4fr" id="d4fr8" onclick=""  value="No aplica" >
                                                            <label class="form-check-label">No aplica</label>
                                                          </div> -->
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4fr" id="csed4fr1" onclick=""  value="normal" >
                                                            <label class="form-check-label">Normal</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4fr" id="csed4fr2" onclick=""  value="superficial">
                                                            <label class="form-check-label">Superficial</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4fr" id="csed4fr3" onclick=""  value="regular">
                                                            <label class="form-check-label">Regular</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4fr" id="csed4fr4" onclick=""  value="irregular">
                                                            <label class="form-check-label">Irregular</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4fr" id="csed4fr5" onclick=""  value="disnea en reposo">
                                                            <label class="form-check-label">Disnea en reposo</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4fr" id="csed4fr6" onclick=""  value="disnea en ejercicio">
                                                            <label class="form-check-label">Disnea en ejercicio</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4fr" id="csed4fr7" onclick=""  value="drenajes">
                                                            <label class="form-check-label">Drenajes</label>
                                                          </div>
                                                          <div class="form-group">
                                                            <label class="col-form-label">Observaciones</label>
                                                            <input type="text" class="form-control" id="csed4frdetalle" name="csed4frdetalle">
                                                            <input type="text" class="form-control" id="csedom4fr" name="csedom4fr" style="display:none" />
                                                          </div> 
                                                        </div>
                                                        <div class="col-md-4">
                                                          <label class="form-check-label"><strong>Ruidos Respiratorios:</strong></label>
                                                          <!-- <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4ruidos" id="d4ruidos9" onclick=""  value="No aplica" >
                                                            <label class="form-check-label">No aplica</label>
                                                          </div> -->
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4ruidos" id="csed4ruidos1" onclick=""  value="disminuidos" >
                                                            <label class="form-check-label">Disminuidos</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4ruidos" id="csed4ruidos2" onclick=""  value="sibilancias">
                                                            <label class="form-check-label">Sibilancias</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4ruidos" id="csed4ruidos3" onclick=""  value="estertores">
                                                            <label class="form-check-label">Estertores</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4ruidos" id="csed4ruidos4" onclick=""  value="roncus">
                                                            <label class="form-check-label">Roncus</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4ruidos" id="csed4ruidos5" onclick=""  value="estridor">
                                                            <label class="form-check-label">Estridor</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4ruidos" id="csed4ruidos6" onclick=""  value="timpánicos">
                                                            <label class="form-check-label">Timpánicos</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4ruidos" id="csed4ruidos7" onclick=""  value="opacos">
                                                            <label class="form-check-label">Opacos</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4ruidos" id="csed4ruidos8" onclick=""  value="simétricos">
                                                            <label class="form-check-label">Simétricos</label>
                                                            <input type="text" class="form-control" id="csedom4ruidos" name="csedom4ruidos" style="display:none" />
                                                          </div> 
                                                        </div>
                                                        <div class="form-group col-md-12  dropdown-divider"></div>
                                                        <div class="col-md-3">
                                                          <label class="form-check-label text-uppercase"><strong>Tos:</strong></label>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4tos" id="csed4tos1" onclick=""  value="si" >
                                                            <label class="form-check-label">Si</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4tos" id="csed4tos2" onclick=""  value="no">
                                                            <label class="form-check-label">No</label>
                                                          </div>
                                                          <div class="form-group">
                                                            <label class="col-form-label"><strong>Observaciones</strong> </label>
                                                            <input type="text" class="form-control" id="csed4tostipo" name="csed4tostipo">
                                                            <input type="text" class="form-control" id="csedom4tos" name="csedom4tos" style="display:none" />
                                                          </div> 
                                                        </div>
                                                        <div class="col-md-3">
                                                          <label class="form-check-label text-uppercase"><strong>Oxigenoterapia:</strong></label>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4oxigeno" id="csed4oxigeno1" onclick=""  value="si" >
                                                            <label class="form-check-label">Si</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4oxigeno" id="csed4oxigeno2" onclick=""  value="no">
                                                            <label class="form-check-label">No</label>
                                                          </div>
                                                          <div class="form-group">
                                                            <label class="col-form-label"><strong>Observaciones</strong></label>
                                                            <input type="text" class="form-control" id="csed4oxigenotipo" name="csed4oxigenotipo">
                                                            <input type="text" class="form-control" id="csedom4oxigeno" name="csedom4oxigeno" style="display:none" />
                                                          </div> 
                                                        </div>
                                                        <div class="col-md-3">
                                                          <div class="form-check">
                                                            <label class="form-check-label"><strong>FIO2</strong></label>
                                                            <input type="text" class="form-control" id="csed4fio" name="csed4fio">
                                                          </div>
                                                          <div class="form-check">
                                                            <label class="form-check-label"><strong>TET</strong></label>
                                                            <input type="text" class="form-control" id="csed4tet" name="csed4tet">
                                                          </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                          <div class="form-check">
                                                            <!-- <input class="form-check-input" type="radio" name="d4traqueostomia"  onclick=""  value="traqueostomia"> -->
                                                            <label class="col-form-label">Traqueostomía</label>
                                                            <div class="row">
                                                               <div class="form-group col-md-4">
                                                                <div class="form-check">
                                                                  <input class="form-check-input" type="radio" name="d4traqueostomia" id="csed4traqueostomia1" onclick="" onchange="" value="si">
                                                                  <label class="form-check-label">Si</label>
                                                                </div>
                                                              </div>
                                                              <div class="form-group col-md-4">
                                                               <div class="form-check">
                                                                  <input class="form-check-input" type="radio" name="d4traqueostomia" id="csed4traqueostomia2" onclick="" onchange="" value="no">
                                                                  <label class="form-check-label">No</label>
                                                                  <!-- <input type="text" class="form-control" id="dom4traqueostomia" name="dom4traqueostomia" style="display:none" /> -->
                                                                </div>
                                                              </div>                                                       
                                                            </div>
                                                            <input type="text" class="form-control" id="csedom4traqueostomia" name="csedom4traqueostomia" style="display:none" />
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="collapse multi-collapse collapse " id="op2cse" data-parent="#accordion3cse">
                                        <div class="row">
                                          <div class="accordion form-group col-md-12" id="separa2cse">
                                            <div class="card">
                                              <div class="card-header" id="headiuno">
                                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpdd1cse"
                                                aria-expanded="false" aria-controls="enfpdd1cse">
                                                  Dominio 5: Percepción Cognición
                                                </button>
                                              </div>
                                              <div class="collapse" id="enfpdd1cse" aria-labelledby="headiuno" data-parent="#separa2cse">
                                                <div class="card-body">
                                                  <div class="row">
                                                    <div class="form-group col-md-12">
                                                    <label class="col-form-label"><strong></strong></label>
                                                    <div class="row">
                                                      <div class="col-md-4">
                                                        <label class="form-check-label text-uppercase"><strong>Escala de Glasgow:</strong> </label>
                                                        <!-- <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d5escala" id="d5escala7" onclick=""  value="No aplica" >
                                                          <label class="form-check-label">No aplica</label>
                                                        </div> -->
                                                        <!-- <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d5escala" id="csed5escala1" onclick=""  value="puntaje" >
                                                          <label class="form-check-label">Puntaje</label>
                                                        </div> -->
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d5escala" id="csed5escala2" onclick=""  value="consciente">
                                                          <label class="form-check-label">Consciente</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d5escala" id="csed5escala3" onclick=""  value="alerta" >
                                                          <label class="form-check-label">Alerta</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d5escala" id="csed5escala4" onclick=""  value="orientado tiempo">
                                                          <label class="form-check-label">Orientado tiempo</label>
                                                        </div> 
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d5escala" id="csed5escala5" onclick=""  value="orientado espacio">
                                                          <label class="form-check-label">Orientado espacio</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d5escala" id="csed5escala6" onclick=""  value="orientado persona" >
                                                          <label class="form-check-label">Orientado persona</label>
                                                          <input type="text" class="form-control" id="csedom5escala" name="csedom5escala" style="display:none" />
                                                        </div>
                                                        <div class="form-group">
                                                          <label class="col-form-label"><strong>Observaciones y (Puntaje)</strong></label>
                                                          <input type="text" class="form-control" id="csedgasglowotro" name="csedgasglowotro" >
                                                        </div>
                                                      </div>
                                                      <div class="col-md-4">
                                                        <label class="form-check-label text-uppercase"><strong>Estado de conciencia</strong></label>
                                                        <!-- <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d5conciencia" id="d5conciencia6" onclick=""  value="No aplica">
                                                          <label class="form-check-label">No aplica</label>
                                                        </div> -->
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d5conciencia" id="csed5conciencia1" onclick=""  value="despierto">
                                                          <label class="form-check-label">Despierto</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d5conciencia" id="csed5conciencia2" onclick=""  value="confuso">
                                                          <label class="form-check-label">Confuso</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d5conciencia" id="csed5conciencia3" onclick=""  value="somnoliento">
                                                          <label class="form-check-label">Somnoliento</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d5conciencia" id="csed5conciencia4" onclick=""  value="estuporoso">
                                                          <label class="form-check-label">Estuporoso</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d5conciencia" id="csed5conciencia5" onclick=""  value="comatoso">
                                                          <label class="form-check-label">Comatoso</label>
                                                        </div>
                                                        <div class="form-group"><br>
                                                          <label class="col-form-label"><strong>Observaciones</strong></label>
                                                          <input type="text" class="form-control" id="csedconcienciaotro" name="csedconcienciaotro" >
                                                          <input type="text" class="form-control" id="csedom5conciencia" name="csedom5conciencia" style="display:none" />
                                                        </div> 
                                                      </div>
                                                      <div class="col-md-4">
                                                        <label class="form-check-label text-uppercase"><strong>Comunicacion</strong></label>
                                                        <!-- <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d5comunicacion" id="d5comunicacion8" onclick=""  value="No aplica">
                                                          <label class="form-check-label">No aplica</label>
                                                        </div> -->
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d5comunicacion" id="csed5comunicacion1" onclick=""  value="verbal">
                                                          <label class="form-check-label">Verbal</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d5comunicacion" id="csed5comunicacion2" onclick=""  value="gestual">
                                                          <label class="form-check-label">Gestual</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d5comunicacion" id="csed5comunicacion3" onclick=""  value="gutural">
                                                          <label class="form-check-label">Gutural</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d5comunicacion" id="csed5comunicacion4" onclick=""  value="escrita">
                                                          <label class="form-check-label">Escrita</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d5comunicacion" id="csed5comunicacion5" onclick=""  value="otro idioma">
                                                          <label class="form-check-label">Otro idioma</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d5comunicacion" id="csed5comunicacion6" onclick=""  value="señas">
                                                          <label class="form-check-label">Señas</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d5comunicacion" id="csed5comunicacion7" onclick=""  value="ninguna">
                                                          <label class="form-check-label">Ninguna</label>
                                                        </div>
                                                        <div class="form-group">
                                                          <label class="col-form-label">Observaciones</label>
                                                          <input type="text" class="form-control" id="csed6comunicacionotro" name="csed6comunicacionotro">
                                                          <input type="text" class="form-control" id="csedom5comunicacion" name="csedom5comunicacion" style="display:none" />
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="card-header" id="headiuno">
                                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpdd2cse"
                                                aria-expanded="false" aria-controls="enfpdd2cse">
                                                  Dominio 6: Autopercepción
                                                </button>
                                              </div>
                                              <div class="collapse" id="enfpdd2cse" aria-labelledby="headiuno" data-parent="#separa2cse">
                                                <div class="card-body">
                                                  <div class="row">
                                                    <div class="form-group col-md-12">
                                                    <label class="col-form-label"><strong></strong></label>
                                                    <div class="row">
                                                      <div class="col-md-3">
                                                        <label class="form-check-label text-uppercase"><strong>Estado emocional:</strong></label>
                                                        <!-- <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d6emocional" id="d6emocional9" onclick=""  value="No aplica" >
                                                          <label class="form-check-label">No aplica</label>
                                                        </div> -->
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d6emocional[]" id="csed6emocional1" onclick=""  value="tranquilo" >
                                                          <label class="form-check-label">Tranquilo</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d6emocional[]" id="csed6emocional2" onclick=""  value="ansioso">
                                                          <label class="form-check-label">Ansioso</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d6emocional[]" id="csed6emocional3" onclick=""  value="negativo" >
                                                          <label class="form-check-label">Negativo</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d6emocional[]" id="csed6emocional4" onclick=""  value="temeroso">
                                                          <label class="form-check-label">Temeroso</label>
                                                        </div> 
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d6emocional[]" id="csed6emocional5" onclick=""  value="irritable">
                                                          <label class="form-check-label">Irritable</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d6emocional[]" id="csed6emocional6" onclick=""  value="indiferente" >
                                                          <label class="form-check-label">Indiferente</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d6emocional[]" id="csed6emocional7" onclick=""  value="efectos de sedación">
                                                          <label class="form-check-label">Efectos de sedación</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d6emocional[]" id="csed6emocional8" onclick=""  value="no responde">
                                                          <label class="form-check-label">No responde</label>
                                                          <input type="text" class="form-control" id="csedom6emocional" name="csedom6emocional" style="display:none" />
                                                        </div>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label class="form-check-label text-uppercase"><strong>Lenguaje</strong></label>
                                                        <!-- <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d6lenguaje" id="d6lenguaje6" onclick=""  value="No aplica">
                                                          <label class="form-check-label">No aplica</label>
                                                        </div> -->
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d6lenguaje[]" id="csed6lenguaje1" onclick=""  value="normal">
                                                          <label class="form-check-label">Normal</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d6lenguaje[]" id="csed6lenguaje2" onclick=""  value="titubeante">
                                                          <label class="form-check-label">Titubeante</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d6lenguaje[]" id="csed6lenguaje3" onclick=""  value="confuso">
                                                          <label class="form-check-label">Confuso</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d6lenguaje[]" id="csed6lenguaje4" onclick=""  value="afasia expresiva">
                                                          <label class="form-check-label">Afasia expresiva</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d6lenguaje[]" id="csed6lenguaje5" onclick=""  value="mal relator">
                                                          <label class="form-check-label">Mal relator</label>
                                                          <input type="text" class="form-control" id="csedom6lenguaje" name="csedom6lenguaje" style="display:none" />
                                                        </div>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label class="form-check-label text-uppercase"><strong>Escucha</strong></label>
                                                        <!-- <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d6escucha" id="d6escucha6" onclick=""  value="No aplica">
                                                          <label class="form-check-label">No aplica</label>
                                                        </div> -->
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d6escucha[]" id="csed6escucha1" onclick=""  value="normal">
                                                          <label class="form-check-label">Normal</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d6escucha[]" id="csed6escucha2" onclick=""  value="hipoacusia derecha">
                                                          <label class="form-check-label">Hipoacusia derecha</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d6escucha[]" id="csed6escucha3" onclick=""  value="hipoacusia izquierda">
                                                          <label class="form-check-label">Hipoacusia izquierda</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d6escucha[]" id="csed6escucha4" onclick=""  value="sordera derecha">
                                                          <label class="form-check-label">Sordera derecha</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d6escucha[]" id="csed6escucha5" onclick=""  value="sordera izquierda">
                                                          <label class="form-check-label">Sordera izquierda</label>
                                                          <input type="text" class="form-control" id="csedom6escucha" name="csedom6escucha" style="display:none" />
                                                        </div>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label class="form-check-label text-uppercase"><strong>Vision</strong></label>
                                                        <!-- <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d6vision" id="d6vision6" onclick=""  value="No aplica">
                                                          <label class="form-check-label">No aplica</label>
                                                        </div> -->
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d6vision[]" id="csed6vision1" onclick=""  value="normal">
                                                          <label class="form-check-label">Normal</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d6vision[]" id="csed6vision2" onclick=""  value="lesión ocular derecha">
                                                          <label class="form-check-label">Lesión ocular derecha</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d6vision[]" id="csed6vision3" onclick=""  value="lesión ocular izquierda">
                                                          <label class="form-check-label">Lesión ocular izquierda</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d6vision[]" id="csed6vision4" onclick=""  value="ceguera derecha">
                                                          <label class="form-check-label">Ceguera derecha</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d6vision[]" id="csed6vision5" onclick=""  value="ceguera izquierda">
                                                          <label class="form-check-label">Ceguera izquierda</label>
                                                          <input type="text" class="form-control" id="csedom6d6vision" name="csedom6d6vision" style="display:none" />
                                                        </div> 
                                                      </div>
                                                    </div>
                                                  </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="card-header" id="headiuno">
                                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpdd3cse"
                                                aria-expanded="false" aria-controls="enfpdd3cse">
                                                  Dominio 7: Rol / Relaciones
                                                </button>
                                              </div>
                                              <div class="collapse" id="enfpdd3cse" aria-labelledby="headiuno" data-parent="#separa2cse">
                                                <div class="card-body">
                                                  <div class="row">
                                                    <div class="form-group col-md-12">
                                                    <label class="col-form-label"><strong></strong></label>
                                                    <div class="row">
                                                      <div class="col-md-4">
                                                        <label class="form-check-label text-uppercase"><strong>Con familiares</strong></label>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d7familiares" id="csed7familiares1" onclick=""  value="No aplica">
                                                          <label class="form-check-label">No aplica</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d7familiares" id="csed7familiares2" onclick=""  value="afectiva">
                                                          <label class="form-check-label">Afectiva</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d7familiares" id="csed7familiares3" onclick=""  value="indiferente">
                                                          <label class="form-check-label">Indiferente</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d7familiares" id="csed7familiares4" onclick=""  value="hostil">
                                                          <label class="form-check-label">Hostil</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d7familiares" id="csed7familiares5" onclick=""  value="distante">
                                                          <label class="form-check-label">Distante</label>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-4">
                                                        <label class="form-check-label text-uppercase"><strong>Tipo de Maltrato</strong></label>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d7familiaresm" id="csed7familiaresmaltrato1" onclick=""  value="No aplica">
                                                          <label class="form-check-label">No aplica</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d7familiaresm" id="csed7familiaresmaltrato2" onclick=""  value="abandono familiar">
                                                          <label class="form-check-label">Abandono familiar</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d7familiaresm" id="csed7familiaresmaltrato3" onclick=""  value="maltrato familiar">
                                                          <label class="form-check-label">Maltrato familiar</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d7familiaresm" id="csed7familiaresmaltrato4" onclick=""  value="abuso familiar">
                                                          <label class="form-check-label">Abuso familiar</label>
                                                          <!-- <input type="text" class="form-control" id="dom7familiares" name="dom7familiares" style="display:none" /> -->
                                                        </div>
                                                      </div>
                                                      <div class="col-md-4">
                                                        <label class="form-check-label text-uppercase"><strong>Con equipo salud</strong></label>
                                                        <!-- <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d7equipo" id="d7equipo5" onclick=""  value="No aplica">
                                                          <label class="form-check-label">No aplica</label>
                                                        </div> -->
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d7equipo" id="csed7equipo1" onclick=""  value="afectiva">
                                                          <label class="form-check-label">Afectiva</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d7equipo" id="csed7equipo2" onclick=""  value="indiferente">
                                                          <label class="form-check-label">Indiferente</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d7equipo" id="csed7equipo3" onclick=""  value="hostil">
                                                          <label class="form-check-label">Hostil</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d7equipo" id="csed7equipo4" onclick=""  value="distante">
                                                          <label class="form-check-label">Distante</label>
                                                          <input type="text" class="form-control" id="csedom7equipo" name="csedom7equipo" style="display:none" />
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="card-header" id="headiuno">
                                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpdd4cse"
                                                aria-expanded="false" aria-controls="enfpdd4cse">
                                                  Dominio 8: Sexualidad
                                                </button>
                                              </div>
                                              <div class="collapse" id="enfpdd4cse" aria-labelledby="headiuno" data-parent="#separa2cse">
                                                <div class="card-body">
                                                  <div class="row">
                                                    <div class="form-group col-md-12">
                                                    <label class="col-form-label"><strong></strong></label>
                                                    <div class="row">
                                                      <div class="col-md-3">
                                                        <label class="form-check-label text-uppercase"><strong>Estado civil</strong></label>
                                                        <!-- <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d8civil" id="d8civil7" onclick=""  value="No aplica">
                                                          <label class="form-check-label">No aplica</label>
                                                        </div> -->
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d8civil" id="csed8civil1" onclick=""  value="soltero">
                                                          <label class="form-check-label">Soltero</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d8civil" id="csed8civil2" onclick=""  value="casado">
                                                          <label class="form-check-label">Casado</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d8civil" id="csed8civil3" onclick=""  value="viudo">
                                                          <label class="form-check-label">Viudo</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d8civil" id="csed8civil4" onclick=""  value="divorciado">
                                                          <label class="form-check-label">Divorciado</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d8civil" id="csed8civil5" onclick=""  value="separado">
                                                          <label class="form-check-label">Separado</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d8civil" id="csed8civil6" onclick=""  value="unión libre">
                                                          <label class="form-check-label">Unión libre</label>
                                                          <input type="text" class="form-control" id="csedom8civil" name="csedom8civil" style="display:none" />
                                                        </div>
                                                      </div>
                                                      <div class="col-md-2">
                                                        <label class="form-check-label text-uppercase"><strong>Paridad</strong></label>
                                                        <div class="form-check text-right">
                                                          <input class="form-check-input" type="radio" name="d8paridad" id="csed8paridad5" onclick=""  value="No aplica">
                                                          <label class="form-check-label">No aplica</label>
                                                        </div>
                                                        <div class="form-check text-right">
                                                          <input class="form-check-input" type="radio" name="d8paridad" id="csed8paridad1" onclick=""  value="G">
                                                          <label class="form-check-label">G</label>
                                                        </div>
                                                        <div class="form-check text-right"><br><br>
                                                          <input class="form-check-input" type="radio" name="d8paridad" id="csed8paridad2" onclick=""  value="P">
                                                          <label class="form-check-label">P</label>
                                                        </div>
                                                        <div class="form-check text-right"><br><br>
                                                          <input class="form-check-input" type="radio" name="d8paridad" id="csed8paridad3" onclick=""  value="A">
                                                          <label class="form-check-label">A</label>
                                                        </div>
                                                        <div class="form-check text-right"><br>
                                                          <input class="form-check-input" type="radio" name="d8paridad" id="csed8paridad4" onclick=""  value="C">
                                                          <label class="form-check-label">C</label>
                                                          <input type="text" class="form-control" id="csedom8paridad" name="csedom8paridad" style="display:none" />
                                                        </div>
                                                      </div>
                                                      <div class="col-md-3"><br><br>
                                                        <input type="text" class="form-control" id="csedtparidadg" name="csedtparidadg" style="display:" /><br>
                                                        <input type="text" class="form-control" id="csedtparidadp" name="csedtparidadp" style="display:" /><br>
                                                        <input type="text" class="form-control" id="csedtparidada" name="csedtparidada" style="display:" /><br>
                                                        <input type="text" class="form-control" id="csedtparidadc" name="csedtparidadc" style="display:" /><br>
                                                      </div>
                                                      <div class="col-md-1">
                                                      </div>
                                                      <div class="col-md-3">
                                                        <div class="form-check">
                                                          <label class="form-check-label"><strong>Hijos</strong></label>
                                                          <input type="text" class="form-control" id="csed8hijos" name="csed8hijos" >
                                                        </div> 
                                                        <div class="form-check">
                                                          <label class="form-check-label"><strong>Vivos</strong></label>
                                                          <input type="text" class="form-control" id="csed8vivos" name="csed8vivos" >
                                                        </div>
                                                        <div class="form-check">
                                                          <label class="form-check-label"><strong>Fallecidos</strong></label>
                                                          <input type="text" class="form-control" id="csed8fallecidos" name="csed8fallecidos" >
                                                        </div>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label class="form-check-label text-uppercase"><strong>Antecedentes ITS</strong></label>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d8its" id="csed8its1" onclick=""  value="Si">
                                                          <label class="form-check-label">Si</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d8its" id="csed8its2" onclick=""  value="No">
                                                          <label class="form-check-label">No</label>
                                                          <input type="text" class="form-control" id="csedom8its" name="csedom8its" style="display:none" />
                                                        </div><br><br>
                                                        <div class="form-group">
                                                          <label class="form-check-label"><strong>Observaciones</strong></label>
                                                          <input type="text" class="form-control" id="csed8especifique" name="csed8especifique" >
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="card-header" id="headiuno">
                                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpdd5cse"
                                                aria-expanded="false" aria-controls="enfpdd5cse">
                                                  Dominio 9: Afrontamiento - Tolerancia
                                                </button>
                                              </div>
                                              <div class="collapse" id="enfpdd5cse" aria-labelledby="headiuno" data-parent="#separa2cse">
                                                <div class="card-body">
                                                  <div class="row">
                                                    <div class="form-group col-md-12">
                                                    <label class="col-form-label"><strong></strong></label>
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                        <label class="form-check-label text-uppercase"><strong>Respuesta a la atencion domiciliaria</strong></label>
                                                       <!--  <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d9respuesta" id="d9respuesta5" onclick=""  value="No aplica">
                                                          <label class="form-check-label">No aplica</label>
                                                        </div> -->
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d9respuesta" id="csed9respuesta1" onclick=""  value="tranquilo">
                                                          <label class="form-check-label">Tranquilo</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d9respuesta" id="csed9respuesta2" onclick=""  value="agresivo">
                                                          <label class="form-check-label">Agresivo</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d9respuesta" id="csed9respuesta3" onclick=""  value="triste">
                                                          <label class="form-check-label">Triste</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d9respuesta" id="csed9respuesta4" onclick=""  value="indiferente">
                                                          <label class="form-check-label">Indiferente</label>
                                                          <input type="text" class="form-control" id="csedom9respuesta" name="csedom9respuesta" style="display:none" />
                                                        </div>
                                                      </div>                                        
                                                      <div class="col-md-4">
                                                        <label class="form-check-label text-uppercase"><strong>Antecedente de intento de suicidio</strong></label>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d9intento" id="csed9intento1" onclick=""  value="Si">
                                                          <label class="form-check-label">Si</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d9intento" id="csed9intento2" onclick=""  value="No">
                                                          <label class="form-check-label">No</label>
                                                        </div>
                                                        <div class="form-group">
                                                          <label class="form-check-label"><strong>Observaciones</strong></label>
                                                          <input type="text" class="form-control" id="csed9intentodetalle" name="csed9intentodetalle" >
                                                          <input type="text" class="form-control" id="csedom9intento" name="csedom9intento" style="display:none" />
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="card-header" id="headiuno">
                                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpdd6cse"
                                                aria-expanded="false" aria-controls="enfpdd6cse">
                                                  Dominio 10: Principios Vitales
                                                </button>
                                              </div>
                                              <div class="collapse" id="enfpdd6cse" aria-labelledby="headiuno" data-parent="#separa2cse">
                                                <div class="card-body">
                                                  <div class="row">
                                                    <div class="form-group col-md-12">
                                                    <label class="col-form-label"><strong></strong></label>
                                                    <div class="row">
                                                      <div class="col-md-4">
                                                        <label class="form-check-label"><strong>Religión</strong></label>
                                                        <div class="form-group">
                                                          <input type="text" class="form-control" id="csed10religion" name="csed10religion">
                                                        </div>
                                                      </div>                                        
                                                      <div class="col-md-4">
                                                        <label class="form-check-label text-uppercase"><strong>Acepta transfusion sanguinea</strong></label>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d10acepta" id="csed10acepta1" onclick=""  value="Si">
                                                          <label class="form-check-label">Si</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d10acepta" id="csed10acepta2" onclick=""  value="No">
                                                          <label class="form-check-label">No</label>
                                                          <input type="text" class="form-control" id="csedom10acepta" name="csedom10acepta" style="display:none" />
                                                        </div>
                                                        <div class="form-group">
                                                          <label class="col-form-label">Observaciones</label>
                                                          <input type="text" class="form-control" id="csed10aceptadetalle" name="csed10aceptadetalle" >
                                                        </div>
                                                      </div>
                                                      <div class="col-md-4">
                                                        <label class="form-check-label text-uppercase"><strong>Solicita ayuda religiosa</strong></label>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d10solicita" id="csed10solicita1" onclick=""  value="Si">
                                                          <label class="form-check-label">Si</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d10solicita" id="csed10solicita2" onclick=""  value="No">
                                                          <label class="form-check-label">No</label>
                                                          <input type="text" class="form-control" id="csedom10solicita" name="csedom10solicita" style="display:none" />
                                                        </div>
                                                        <div class="form-group">
                                                          <label class="col-form-label">Observaciones</label>
                                                          <input type="text" class="form-control" id="csed10solicitadetalle" name="csed10solicitadetalle" >
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="card-header" id="headiuno">
                                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpdd7cse"
                                                aria-expanded="false" aria-controls="enfpdd7cse">
                                                  Dominio 11: Seguridad y Protección
                                                </button>
                                              </div>
                                              <div class="collapse" id="enfpdd7cse" aria-labelledby="headiuno" data-parent="#separa2cse">
                                                <div class="card-body">
                                                  <div class="row">
                                                    <div class="form-group col-md-12">
                                                   
                                                    <div class="row">
                                                      <div class="col-md-3">
                                                        <label class="col-form-label">DISPOSITIVO</label>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d11seguridad" id="csed11seguridad7" onclick=""  value="No aplica" >
                                                          <label class="form-check-label">No aplica</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d11seguridad" id="csed11seguridad1" onclick=""  value="catéter venoso periférico" >
                                                          <label class="form-check-label">Catéter Venoso Periférico</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d11seguridad" id="csed11seguridad2" onclick=""  value="catéter venoso central">
                                                          <label class="form-check-label">Catéter Venoso Central</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d11seguridad" id="csed11seguridad3" onclick=""  value="tracción esquelética" >
                                                          <label class="form-check-label">Tracción esquelética</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d11seguridad" id="csed11seguridad4" onclick=""  value="tracción cutánea">
                                                          <label class="form-check-label">Tracción cutánea</label>
                                                        </div> 
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d11seguridad" id="csed11seguridad5" onclick=""  value="inmovilización">
                                                          <label class="form-check-label">Inmovilización</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d11seguridad" id="csed11seguridad6" onclick=""  value="sujeciones" >
                                                          <label class="form-check-label">Sujeciones</label>
                                                        </div>
                                                        <div class="form-group">
                                                          <label class="form-check-label"><strong>Observaciones</strong></label>
                                                          <input type="text" class="form-control" id="csed11otros" name="csed11otros" >
                                                          <input type="text" class="form-control" id="csedom11seguridad" name="csedom11seguridad" style="display:none" />
                                                        </div>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label class="form-check-label text-uppercase"><strong>Integridad cutanea</strong></label>
                                                        <!-- <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d11cutanea[]" id="d11cutanea12" onclick=""  value="No aplica">
                                                          <label class="form-check-label">No aplica</label>
                                                        </div> -->
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d11cutanea[]" id="csed11cutanea1" onclick=""  value="sin lesiones">
                                                          <label class="form-check-label">Sin lesiones</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d11cutanea[]" id="csed11cutanea2" onclick=""  value="flebitis">
                                                          <label class="form-check-label">Flebitis</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d11cutanea[]" id="csed11cutanea3" onclick=""  value="hematomas">
                                                          <label class="form-check-label">Hematomas</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d11cutanea[]" id="csed11cutanea4" onclick=""  value="celulitis">
                                                          <label class="form-check-label">Celulitis</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d11cutanea[]" id="csed11cutanea5" onclick=""  value="heridas">
                                                          <label class="form-check-label">Heridas</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d11cutanea[]" id="csed11cutanea6" onclick=""  value="fracturas">
                                                          <label class="form-check-label">Fracturas</label>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-3"><br>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d11cutanea[]" id="csed11cutanea7" onclick=""  value="ulceras">
                                                          <label class="form-check-label">Ulceras</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d11cutanea[]" id="csed11cutanea8" onclick=""  value="limpia">
                                                          <label class="form-check-label">limpia</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d11cutanea[]" id="csed11cutanea9" onclick=""  value="infectada">
                                                          <label class="form-check-label">Infectada</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d11cutanea[]" id="csed11cutanea10" onclick=""  value="primera intención">
                                                          <label class="form-check-label">Primera intención</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d11cutanea[]" id="csed11cutanea11" onclick=""  value="segunda intención">
                                                          <label class="form-check-label">Segunda intención</label>
                                                          <input type="text" class="form-control" id="csedom11cutanea" name="csedom11cutanea" style="display:none" />
                                                        </div>
                                                      </div>
                                                      <div class="col-md-3">
                                                         <div class="form-group">
                                                          <label class="form-check-label"><strong>Localización</strong></label>
                                                          <input type="text" class="form-control" id="csed11localizacion" name="csed11localizacion" >
                                                        </div>
                                                         <div class="form-group">
                                                          <label class="form-check-label"><strong>Grado</strong></label>
                                                          <input type="text" class="form-control" id="csed11grado" name="csed11grado" >
                                                        </div>
                                                      </div>
                                                      <div class="col-md-4">
                                                        <label class="form-check-label text-uppercase"><strong>Requerimientos</strong></label>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d11requerimientos[]" id="csed11requerimientos11" onclick=""  value="No aplica">
                                                          <label class="form-check-label">No aplica</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d11requerimientos[]" id="csed11requerimientos1" onclick=""  value="sujeciones">
                                                          <label class="form-check-label">Sujeciones</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d11requerimientos[]" id="csed11requerimientos2" onclick=""  value="barandas">
                                                          <label class="form-check-label">Barandas</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d11requerimientos[]" id="csed11requerimientos3" onclick=""  value="acompañante">
                                                          <label class="form-check-label">Acompañante</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d11requerimientos[]" id="csed11requerimientos4" onclick=""  value="apoyo externo">
                                                          <label class="form-check-label">Apoyo externo</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d11requerimientos[]" id="csed11requerimientos5" onclick=""  value="ayuda alimentos">
                                                          <label class="form-check-label">Ayuda alimentos</label>
                                                        </div> 
                                                      </div>
                                                      <div class="col-md-4">
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d11requerimientos[]" id="csed11requerimientos6" onclick=""  value="ayuda deambulación">
                                                          <label class="form-check-label">Ayuda deambulación</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d11requerimientos[]" id="csed11requerimientos7" onclick=""  value="bolsas de arena">
                                                          <label class="form-check-label">Bolsas de arena</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d11requerimientos[]" id="csed11requerimientos8" onclick=""  value="colchón ortopédico">
                                                          <label class="form-check-label">Colchón ortopédico</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d11requerimientos[]" id="csed11requerimientos9" onclick=""  value="almohadas">
                                                          <label class="form-check-label">Almohadas</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="d11requerimientos[]" id="csed11requerimientos10" onclick=""  value="cojines">
                                                          <label class="form-check-label">Cojines</label>
                                                          <input type="text" class="form-control" id="csedom11requerimientos" name="csedom11requerimientos" style="display:none" />
                                                        </div>
                                                      </div>
                                                      <div class="col-md-4">
                                                        <div class="form-group">
                                                          <label class="form-check-label"><strong>Observaciones</strong></label>
                                                          <input type="text" class="form-control" id="csedom11otros" name="csedom11otros" >
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="card-header" id="headiuno">
                                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpdd8cse"
                                                aria-expanded="false" aria-controls="enfpdd8cse">
                                                  Dominio 12: Confort
                                                </button>
                                              </div>
                                              <div class="collapse" id="enfpdd8cse" aria-labelledby="headiuno" data-parent="#separa2cse">
                                                <div class="card-body">
                                                  <div class="row">
                                                    <div class="form-group col-md-12">
                                                    <label class="col-form-label"><strong></strong></label>
                                                    <div class="row">
                                                      <div class="col-md-4">
                                                        <label class="form-check-label text-uppercase"><strong>Dolor</strong></label><br>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d12dolor" id="csed12dolor1" onclick=""  value="si">
                                                          <label class="form-check-label">Si</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d12dolor" id="csed12dolor2" onclick=""  value="no">
                                                          <label class="form-check-label">No</label>
                                                          <input type="text" class="form-control" id="csedom12dolor" name="csedom12dolor" style="display:none" />
                                                        </div>
                                                        <div class="form-group">
                                                          <label class="form-check-label"><strong>Nivel</strong></label>
                                                          <input type="text" class="form-control" id="csed12nivel" name="csed12nivel" >
                                                        </div>
                                                        <div class="form-group">
                                                          <label class="form-check-label"><strong>Localización</strong></label>
                                                          <input type="text" class="form-control" id="csed12localizacion" name="csed12localizacion" >
                                                        </div>
                                                      </div>                                        
                                                      <div class="col-md-4">
                                                        <label class="form-check-label text-uppercase"><strong>Estado higiene</strong></label>
                                                        <!-- <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d12higiene" id="d12higiene5" onclick=""  value="No aplica">
                                                          <label class="form-check-label">No aplica</label>
                                                        </div> -->
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d12higiene" id="csed12higiene1" onclick=""  value="bueno">
                                                          <label class="form-check-label">Bueno</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d12higiene" id="csed12higiene2" onclick=""  value="regular">
                                                          <label class="form-check-label">Regular</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d12higiene" id="csed12higiene3" onclick=""  value="deficinete">
                                                          <label class="form-check-label">Deficiente</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d12higiene" id="csed12higiene4" onclick=""  value="malo">
                                                          <label class="form-check-label">Malo</label>
                                                          <input type="text" class="form-control" id="csedom12higiene" name="csedom12higiene" style="display:none" />
                                                        </div>
                                                        <div class="form-group"><br>
                                                          <label class="col-form-label">Observaciones<strong></strong></label>
                                                          <input type="text" class="form-control" id="csed12especifique" name="csed12especifique">
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="card-header" id="headiuno">
                                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpdd9cse"
                                                aria-expanded="false" aria-controls="enfpdd9cse">
                                                  Dominio 13: Crecimiento y desarrollo
                                                </button>
                                              </div>
                                              <div class="collapse" id="enfpdd9cse" aria-labelledby="headiuno" data-parent="#separa2cse">
                                                <div class="card-body">
                                                  <div class="row">
                                                    <div class="form-group col-md-12">
                                                    <label class="col-form-label"><strong></strong></label>
                                                    <div class="row">
                                                      <div class="col-md-2">
                                                        <div class="form-check">
                                                          <label class="form-check-label"><strong>Peso</strong></label>
                                                          <input type="text" class="form-control" id="csed13peso" name="csed13peso" >
                                                        </div>
                                                      </div>
                                                      <div class="col-md-2">
                                                        <div class="form-check">
                                                          <label class="form-check-label"><strong>Talla</strong></label>
                                                          <input type="text" class="form-control" id="csed13talla" name="csed13talla" >
                                                        </div>
                                                      </div>
                                                      <div class="col-md-4">                                                  
                                                        <div class="form-check">
                                                          <label class="form-check-label"><strong>IMC</strong></label>
                                                          <input type="text" class="form-control" id="csed13cimc" name="csed13cimc" >
                                                        </div>
                                                      </div>                                        
                                                      <div class="col-md-4">
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d13imc" id="csed13imc1" onclick=""  value="peso insuficiente">
                                                          <label class="form-check-label"><strong>Peso Insuficiente</strong></label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d13imc" id="csed13imc2" onclick="" value="peso normal">
                                                          <label class="form-check-label"><strong>Peso Normal</strong></label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d13imc" id="csed13imc3" onclick="" value="sobrepeso">
                                                          <label class="form-check-label"><strong>SobrePeso</strong></label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d13imc" id="csed13imc4" onclick="" value="obesidad clínica">
                                                          <label class="form-check-label"><strong>Obesidad Clínica</strong></label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d13imc" id="csed13imc5" onclick="" value="obesidad morbida">
                                                          <label class="form-check-label"><strong>Obesidad Morbida</strong></label>
                                                          <input type="text" class="form-control" id="csedom13imc" name="csedom13imc" style="display:none" />
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="card-header" id="headiuno">
                                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpdd10cse"
                                                aria-expanded="false" aria-controls="enfpdd10cse">
                                                  Notas de Enfermería
                                                </button>
                                              </div>
                                              <div class="collapse" id="enfpdd10cse" aria-labelledby="headiuno" data-parent="#separa2cse">
                                                <div class="card-body">
                                                  <div class="row">
                                                    <div class="form-group col-md-12">
                                                      <label class="col-form-label"><strong></strong></label>
                                                      <div class="row">
                                                        <div class="form-group col-md-12">
                                                          <label class="col-form-label"><strong>Diagnósticos de Enfermería</strong></label>
                                                          <textarea class="form-control" id="csemdiagbdigenf" name="csemdiagbdigenf" ></textarea>
                                                        </div>
                                                        <!-- <div class="col-md-2">
                                                          <div class="form-check">
                                                            <label class="form-check-label">PFEIFFER</label>
                                                            <input type="text" class="form-control" id="csecuidadopfeiffer" name="csecuidadopfeiffer" >
                                                          </div>                                          
                                                        </div>
                                                        <div class="col-md-2">
                                                          <div class="form-check">
                                                            <label class="form-check-label">BARTHEL</label>
                                                            <input type="text" class="form-control" id="csecuidadobarthel" name="csecuidadobarthel" >
                                                          </div>
                                                        </div> 
                                                        <div class="col-md-2">
                                                          <div class="form-check">
                                                            <label class="form-check-label">NORTON</label>
                                                            <input type="text" class="form-control" id="csecuidadonorton" name="csecuidadonorton" >
                                                          </div>
                                                        </div>                                    
                                                        <div class="col-md-2">
                                                          <div class="form-check">
                                                            <label class="form-check-label">BRADEN Q</label>
                                                            <input type="text" class="form-control" id="csecuidadobraden" name="csecuidadobraden" >
                                                          </div>                                          
                                                        </div>
                                                        <div class="col-md-2">
                                                          <div class="form-check">
                                                            <label class="form-check-label">KARNOSKY-PPS</label>
                                                            <input type="text" class="form-control" id="csecuidadokarnosky" name="csecuidadokarnosky" >
                                                          </div>
                                                        </div> 
                                                        <div class="col-md-2">
                                                          <div class="form-check">
                                                            <label class="form-check-label">Total</label>
                                                            <input type="text" class="form-control" id="csecuidadototal" name="csecuidadototal" >
                                                          </div>
                                                        </div> -->
                                                      </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                      <label class="col-form-label"><strong>Notas de Enfermería</strong></label>
                                                      <textarea class="form-control" rows="8" id="csemdiagnosticos2" name="csemdiagnosticos2"></textarea>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group col-md-12  dropdown-divider"></div>
                                            <div class="row">
                                              <div class="col-md-12 text-center" >
                                                <!-- <input type="text" class="form-control" id="nmedpad" name="nmedpad" style="display:none" value="<?php echo ucwords($this->session->userdata('s_n')).', '.ucwords($this->session->userdata('s_ap'));?>" />
                                                <input type="text" class="form-control" id="numhc" name="numhc" style="display:none" /> -->
                                              </div>
                                              <div class="col-md-12 text-center">
                                                <!-- <button type="button" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarpad2">ACTUALIZAR</button> -->
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-body">
                                    <ul class="nav nav-tabs card-header-tabs">
                                      <li class="nav-item">
                                        <button class="btn btn-primary" type="button" onclick="siguientepaginaecsecse()">Siguiente</button>
                                        <input type="text" value="1" id="paginacse" class="form-control" style="display:none" />
                                      </li>
                                      <li class="nav-item">
                                        <a href=""></a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link active bg-danger" id="subop1cse" href="#op1cse" data-toggle="collapse" data-target="#op1cse" aria-expanded="false" aria-controls="op1cse" onclick="doynumeropaginaecse('1')">1</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link bg-white" id="subop2cse" href="#op2cse" data-toggle="collapse" data-target="#op2cse" aria-expanded="false" aria-controls="op2cse" onclick="doynumeropaginaecse('2')">2</a>
                                      </li>
                                      <li class="nav-item">
                                        <button class="btn btn-primary" type="button" onclick="atraspaginaecsecse()">Atras</button>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              </form>
                            </div>
                            <div class="collapse multi-collapse collapse" id="csemulti2" data-parent="#accordion2cse">
                              <form>
                              <div class="row">
                                <div class="form-group col-md-12">
                                  <div class="card-header">
                                    <div class="accordion" id="accordion5cse">
                                      <div class="collapse multi-collapse collapse show" id="opt1cse" data-parent="#accordion5cse">
                                        <div class="accordion form-group col-md-12" id="separa6cse">
                                          <div class="card">
                                            <div class="card-header" id="headiuno">
                                              <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#plani1cse"
                                              aria-expanded="false" aria-controls="plani1cse">
                                                Plan de Intervención 
                                              </button>
                                            </div>
                                            <div class="collapse" id="plani1cse" aria-labelledby="headiuno" data-parent="#separa6cse">
                                              <div class="card-body">
                                                <div class="row">
                                                  <!-- <div class="form-group col-md-6">
                                                    <label class="col-form-label"><strong>Fecha:</strong></label>
                                                    <input type="date" class="form-control" id="interfecha" name="interfecha" />
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                    <label class="col-form-label"><strong>N° Plan:</strong></label>
                                                    <input type="number" class="form-control" id="internplan" name="internplan" min="1" max="7" value="1" />
                                                  </div> -->
                                                  <div class="form-group col-md-12">
                                                    <label class="col-form-label"><strong>Diagnóstico de Enfermeria</strong></label>
                                                    <textarea class="form-control" id="csecgdigenfplan" name="csecgdigenfplan"></textarea>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="form-group col-md-2">
                                                    <label class="col-form-label"><strong>PFEIFFER:</strong></label>
                                                    <input type="text" class="form-control" id="cseinterpfeiffer" name="cseinterpfeiffer" />
                                                  </div>
                                                  <div class="form-group col-md-2">
                                                    <label class="col-form-label"><strong>BARTHEL:</strong></label>
                                                    <input type="text" class="form-control" id="cseinterbarthel" name="cseinterbarthel" />
                                                  </div>
                                                  <div class="form-group col-md-2">
                                                    <label class="col-form-label"><strong>NORTON:</strong></label>
                                                    <input type="text" class="form-control" id="cseinternorton" name="cseinternorton" />
                                                  </div>
                                                  <div class="form-group col-md-2">
                                                    <label class="col-form-label"><strong>BRADEN Q:</strong></label>
                                                    <input type="text" class="form-control" id="cseinterbraden" name="cseinterbraden" />
                                                  </div>
                                                  <div class="form-group col-md-2">
                                                    <label class="col-form-label"><strong>KARNOSFKY-PPS:</strong></label>
                                                    <input type="text" class="form-control" id="cseinterkarnosky" name="cseinterkarnosky" />
                                                  </div>
                                                  <div class="form-group col-md-2">
                                                    <label class="col-form-label"><strong>SOCIOFAMILIAR:</strong></label>
                                                    <input type="text" class="form-control" id="cseintersocio" name="cseintersocio" />
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="form-group col-md-6">
                                                    <label class="col-form-label"><strong>ANSIEDAD:</strong></label>
                                                    <input type="text" class="form-control" id="cseinteransiedad" name="cseinteransiedad" />
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                    <label class="col-form-label"><strong>ZARITH:</strong></label>
                                                    <input type="text" class="form-control" id="cseinterzarith" name="cseinterzarith" />
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="card-header" id="headiuno">
                                              <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#plani2cse"
                                              aria-expanded="false" aria-controls="plani2cse">
                                                Necesidades 1
                                              </button>
                                            </div>
                                            <div class="collapse" id="plani2cse" aria-labelledby="headiuno" data-parent="#separa6cse">
                                              <div class="card-body">
                                                <div class="row">
                                                  <div class="form-group col-md-6">
                                                    <label class="col-form-label"><strong>Respirar con normalidad:</strong></label>
                                                    <textarea class="form-control" id="csensrespirar" name="csensrespirar"></textarea>
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                    <label class="col-form-label"><strong>Descansar y dormir:</strong></label>
                                                    <textarea class="form-control" id="csensdescansar" name="csensdescansar"></textarea>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="form-group col-md-6">
                                                    <label class="col-form-label"><strong>Comer y beber adecuadamente:</strong></label>
                                                    <textarea class="form-control" id="csenscomerybeber" name="csenscomerybeber"></textarea>
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                    <label class="col-form-label"><strong>Seleccionar vestimenta adecuada:</strong></label>
                                                    <textarea class="form-control" id="csensvestimenta" name="csensvestimenta"></textarea>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="form-group col-md-6">
                                                    <label class="col-form-label"><strong>Eliminar los desechos del organismo:</strong></label>
                                                    <textarea class="form-control" id="csenseliminar" name="csenseliminar"></textarea>
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                    <label class="col-form-label"><strong>Mantener la temperatura corporal:</strong></label>
                                                    <textarea class="form-control" id="csenscorporal" name="csenscorporal"></textarea>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="form-group col-md-6">
                                                    <label class="col-form-label"><strong>Mantener la higiene corporal:</strong></label>
                                                    <textarea class="form-control" id="csenshigiene" name="csenshigiene"></textarea>
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                    <label class="col-form-label"><strong>Evitar los peligros del entorno:</strong></label>
                                                    <textarea class="form-control" id="csenspeligros" name="csenspeligros"></textarea>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="card-header" id="headiuno">
                                              <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#plani3cse"
                                              aria-expanded="false" aria-controls="plani3cse">
                                                Necesidades 2
                                              </button>
                                            </div>
                                            <div class="collapse" id="plani3cse" aria-labelledby="headiuno" data-parent="#separa6cse">
                                              <div class="card-body">
                                                <div class="row">
                                                  <div class="form-group col-md-6">
                                                    <label class="col-form-label"><strong>Movimientos y mantenimiento de la postura adecuada:</strong></label>
                                                    <textarea class="form-control" id="csenspostura" name="csenspostura"></textarea>
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                    <label class="col-form-label"><strong>Ejercer culto a Dios, acorde a su religión:</strong></label>
                                                    <textarea class="form-control" id="csensculto" name="csensculto"></textarea>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="form-group col-md-6">
                                                    <label class="col-form-label"><strong>Comunicarse con otros, expresar emociones, necesidades, miedos u opiniones:</strong></label>
                                                    <textarea class="form-control" id="csensexpresar" name="csensexpresar"></textarea>
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                    <label class="col-form-label"><strong>Estudiar, descubrir o satisfacer la curiosidad que conduce a un desarrollo normal de la salud:</strong></label>
                                                    <textarea class="form-control" id="csensestudiar" name="csensestudiar"></textarea>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="form-group col-md-6">
                                                    <label class="col-form-label"><strong>Trabajar de forma que permita sentirse realizado:</strong></label>
                                                    <textarea class="form-control" id="csenstrabajar" name="csenstrabajar"></textarea>
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                    <label class="col-form-label"><strong>Participar en todas las formas de recreación y ocio:</strong></label>
                                                    <textarea class="form-control" id="csensparticipar" name="csensparticipar"></textarea>
                                                  </div>
                                                </div>
                                                 <div class="row">
                                                  <div class="form-group col-md-12">
                                                    <label class="col-form-label"><strong>Detalle de Intervenciones</strong></label>
                                                  </div>
                                                  <div class="form-group col-md-3">
                                                    <label class="col-form-label"><strong>Médico:</strong></label>
                                                    <input type="text" class="form-control" id="csensmedico" name="csensmedico" />
                                                  </div>
                                                  <div class="form-group col-md-3">
                                                    <label class="col-form-label"><strong>Enfermería:</strong></label>
                                                    <input type="text" class="form-control" id="csensenfermeria" name="csensenfermeria" />
                                                  </div>
                                                  <div class="form-group col-md-3">
                                                    <label class="col-form-label"><strong>Apoyo diagnóstico:</strong></label>
                                                    <input type="text" class="form-control" id="csensdiagnostico" name="csensdiagnostico" />
                                                  </div>
                                                  <div class="form-group col-md-3">
                                                    <label class="col-form-label"><strong>Complementación terapias:</strong></label>
                                                    <input type="text" class="form-control" id="csenscomplementacion" name="csenscomplementacion" />
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="form-group col-md-12">
                                                    <label class="col-form-label"><strong>Paraclínicos:</strong></label>
                                                    <input type="text" class="form-control" id="cseintnparaclinicos" name="cseintnparaclinicos" />
                                                  </div>
                                                  <div class="form-group col-md-12">
                                                    <label class="col-form-label"><strong>Imagenología:</strong></label>
                                                    <input type="text" class="form-control" id="cseintnimagenologia" name="cseintnimagenologia" />
                                                  </div>
                                                  <div class="form-group col-md-12">
                                                    <label class="col-form-label"><strong>Liquidos:</strong></label>
                                                    <input type="text" class="form-control" id="cseintnliquidos" name="cseintnliquidos" />
                                                  </div>
                                                  <div class="form-group col-md-12">
                                                    <label class="col-form-label"><strong>Educativo:</strong></label>
                                                    <textarea class="form-control" id="csenseducativo" name="csenseducativo"></textarea>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="form-group col-md-12">
                                                    <label class="col-form-label"><strong>Observaciones:</strong></label>
                                                    <textarea class="form-control" id="cseauxdtobservaciones" name="cseauxdtobservaciones"></textarea>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="collapse multi-collapse collapse" id="opt2cse" data-parent="#accordion5cse">
                                        <div class="accordion form-group col-md-12" id="separa7cse">
                                          <div class="card">
                                            <div class="card-header" id="headiuno">
                                              <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#planid1cse"
                                              aria-expanded="false" aria-controls="planid1cse">
                                                Listado
                                              </button>
                                            </div>
                                            <div class="collapse" id="planid1cse" aria-labelledby="headiuno" data-parent="#separa7cse">
                                              <div class="card-body">
                                                <div class="row">
                                                  <div class="form-group col-md-6">
                                                    <label class="col-form-label"><strong>Diagnósticos:</strong></label>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis1" name="cselis1" onclick="" value="Ansiedad">
                                                      <label class="form-check-label">Ansiedad</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis2" name="cselis2" onclick="" value="Riesgo de glucemia inestable" >
                                                      <label class="form-check-label">Riesgo de glucemia inestable</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis3" name="cselis3" onclick="" value="Riesgo de estreñimiento" >
                                                      <label class="form-check-label">Riesgo de estreñimiento</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis4" name="cselis4" onclick="" value="Estreñimiento" >
                                                      <label class="form-check-label">Estreñimiento</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis5" name="cselis5" onclick="" value="Deterioro de la deambulación" >
                                                      <label class="form-check-label">Deterioro de la deambulación</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis6" name="cselis6" onclick="" value="Insomnio">
                                                      <label class="form-check-label">Insomnio</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis7" name="cselis7" onclick="" value="Riesgo de deterioro de la integridad cutánea" >
                                                      <label class="form-check-label">Riesgo de deterioro de la integridad cutánea</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis8" name="cselis8" onclick="" value="Deterioro integridad tisular" >
                                                      <label class="form-check-label">Deterioro integridad tisular</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis9" name="cselis9" onclick="" value="Riesgo de infección" >
                                                      <label class="form-check-label">Riesgo de infección</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis10" name="cselis10" onclick="" value="Hipertermia">
                                                      <label class="form-check-label">Hipertermia</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis11" name="cselis11" onclick="" value="Dolor agudo" >
                                                      <label class="form-check-label">Dolor agudo</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis12" name="cselis12" onclick="" value="Dolor crónico" >
                                                      <label class="form-check-label">Dolor crónico</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis13" name="cselis13" onclick="" value="Perfusión tisular inefectiva" >
                                                      <label class="form-check-label">Perfusión tisular inefectiva</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis14" name="cselis14" onclick="" value="Riesgo de caídas">
                                                      <label class="form-check-label">Riesgo de caídas</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis15" name="cselis15" onclick="" value="Riesgo de alteración del patrón de autocuidado" >
                                                      <label class="form-check-label">Riesgo de alteración del patrón de autocuidado</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis16" name="cselis16" onclick="" value="Riesgo de aspiración" >
                                                      <label class="form-check-label">Riesgo de aspiración</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis17" name="cselis17" onclick="" value="Deterioro de la deglución" >
                                                      <label class="form-check-label">Deterioro de la deglución</label>
                                                    </div>                                              
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                    </br>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis18" name="cselis18" onclick="" value="Incontinencia urinaria total">
                                                      <label class="form-check-label">Incontinencia urinaria total</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis19" name="cselis19" onclick="" value="Deterioro movilidad física" >
                                                      <label class="form-check-label">Deterioro movilidad física</label>
                                                    </div>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis20" name="cselis20" onclick="" value="Riesgo de Caídas" >
                                                      <label class="form-check-label">Riesgo de Caídas</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis21" name="cselis21" onclick="" value="Riesgo de la comunicación verbal" >
                                                      <label class="form-check-label">Riesgo de la comunicación verbal</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis22" name="cselis22" onclick="" value="Disposición para mejorar el autocuidado">
                                                      <label class="form-check-label">Disposición para mejorar el autocuidado</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis23" name="cselis23" onclick="" value="Afrontamiento familiar comprometido" >
                                                      <label class="form-check-label">Afrontamiento familiar comprometido</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis24" name="cselis24" onclick="" value="Riesgo de cansancio del rol de cuidador" >
                                                      <label class="form-check-label">Riesgo de cansancio del rol de cuidador</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis25" name="cselis25" onclick="" value="Déficit de autocuidado: alimentación" >
                                                      <label class="form-check-label">Déficit de autocuidado: alimentación</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis26" name="cselis26" onclick="" value="Déficit de autocuidado: Baño/higiene">
                                                      <label class="form-check-label">Déficit de autocuidado: Baño/higiene</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis27" name="cselis27" onclick="" value="Deterioro de la mucosa oral" >
                                                      <label class="form-check-label">Deterioro de la mucosa oral</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis28" name="cselis28" onclick="" value="Desatención unilateral" >
                                                      <label class="form-check-label">Desatención unilateral</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis29" name="cselis29" onclick="" value="Déficit de autocuidado: uso del WC" >
                                                      <label class="form-check-label">Déficit de autocuidado: uso del WC</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis30" name="cselis30" onclick="" value="Déficit de autocuidado: vestido/acicalamiento">
                                                      <label class="form-check-label">Déficit de autocuidado: vestido/acicalamiento</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis31" name="cselis31" onclick="" value="Deterioro del intercambio gaseoso" >
                                                      <label class="form-check-label">Deterioro del intercambio gaseoso</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis32" name="cselis32" onclick="" value="Limpieza ineficaz de las vías aéreas" >
                                                      <label class="form-check-label">Limpieza ineficaz de las vías aéreas</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis33" name="cselis33" onclick="" value="Patrón respiratorio ineficaz" >
                                                      <label class="form-check-label">Patrón respiratorio ineficaz</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselis34" name="cselis34" onclick="" value="Conocimientos deficientes régimen terapéutico">
                                                      <label class="form-check-label">Conocimientos deficientes régimen terapéutico</label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group col-md-12  dropdown-divider"></div>
                                                <div class="row">
                                                  <div class="form-group col-md-6">
                                                    <label class="col-form-label"><strong>Criterios de riesgo y/o relación:</strong></label>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd1" name="cselisd1" onclick="" value="El estado de salud">
                                                      <label class="form-check-label">El estado de salud</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd2" name="cselisd2" onclick="" value="Falta de cumplimiento del plan terapéutico" >
                                                      <label class="form-check-label">Falta de cumplimiento del plan terapéutico</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd3" name="cselisd3" onclick="" value="Malos hábitos alimentarios" >
                                                      <label class="form-check-label">Malos hábitos alimentarios</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd4" name="cselisd4" onclick="" value="Disminución de la movilidad del tracto" >
                                                      <label class="form-check-label">Disminución de la movilidad del tracto</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd5" name="cselisd5" onclick="" value="Disminución actividad física" >
                                                      <label class="form-check-label">Disminución actividad física</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd6" name="cselisd6" onclick="" value="Resistencia limitada">
                                                      <label class="form-check-label">Resistencia limitada</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd7" name="cselisd7" onclick="" value="Patrón de actividad" >
                                                      <label class="form-check-label">Patrón de actividad</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd8" name="cselisd8" onclick="" value="Alteración de la circulación" >
                                                      <label class="form-check-label">Alteración de la circulación</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd9" name="cselisd9" onclick="" value="Destrucción tisular" >
                                                      <label class="form-check-label">Destrucción tisular</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd10" name="cselisd10" onclick="" value="Enfermedad">
                                                      <label class="form-check-label">Enfermedad</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd11" name="cselisd11" onclick="" value="Agentes lesivos químicos, físicos y psicológicos" >
                                                      <label class="form-check-label">Agentes lesivos químicos, físicos y psicológicos</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd12" name="cselisd12" onclick="" value="Incapacidad física crónica" >
                                                      <label class="form-check-label">Incapacidad física crónica</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd13" name="cselisd13" onclick="" value="Interrupción del flujo arterial" >
                                                      <label class="form-check-label">Interrupción del flujo arterial</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd14" name="cselisd14" onclick="" value="Inmovilidad o Incontinencia">
                                                      <label class="form-check-label">Inmovilidad o Incontinencia</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd15" name="cselisd15" onclick="" value="Dificultad en la marcha" >
                                                      <label class="form-check-label">Dificultad en la marcha</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd16" name="cselisd16" onclick="" value="Disfunción neurológica" >
                                                      <label class="form-check-label">Disfunción neurológica</label>
                                                    </div>
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                    <br>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd17" name="cselisd17" onclick="" value="Secreciones bronquiales" >
                                                      <label class="form-check-label">Secreciones bronquiales</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd18" name="cselisd18" onclick="" value="Deterioro neuromuscular">
                                                      <label class="form-check-label">Deterioro neuromuscular</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd19" name="cselisd19" onclick="" value="Deterioro neuromuscular y cognitivo" >
                                                      <label class="form-check-label">Deterioro neuromuscular y cognitivo</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd20" name="cselisd20" onclick="" value="Intolerancia a la actividad" >
                                                      <label class="form-check-label">Intolerancia a la actividad</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd21" name="cselisd21" onclick="" value="Deterioro de la percepción" >
                                                      <label class="form-check-label">Deterioro de la percepción</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd22" name="cselisd22" onclick="" value="Procedimientos invasivos">
                                                      <label class="form-check-label">Procedimientos invasivos</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd23" name="cselisd23" onclick="" value="Disminución de la actividad cerebral" >
                                                      <label class="form-check-label">Disminución de la actividad cerebral</label>
                                                    </div>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd24" name="cselisd24" onclick="" value="Falta de cumplimiento del plan terapéutico" >
                                                      <label class="form-check-label">Falta de cumplimiento del plan terapéutico</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd25" name="cselisd25" onclick="" value="Continuidad de cuidados en su domicilio" >
                                                      <label class="form-check-label">Continuidad de cuidados en su domicilio</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd26" name="cselisd26" onclick="" value="El cuidador desempeña roles que entran en competencia">
                                                      <label class="form-check-label">El cuidador desempeña roles que entran en competencia</label>
                                                    </div>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd27" name="cselisd27" onclick="" value="Deterioro congnitivo y neuromuscular" >
                                                      <label class="form-check-label">Deterioro congnitivo y neuromuscular</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd28" name="cselisd28" onclick="" value="Dieta absoluta más de 24 horas" >
                                                      <label class="form-check-label">Dieta absoluta más de 24 horas</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd29" name="cselisd29" onclick="" value="Desequilibrio ventilación-perfusión" >
                                                      <label class="form-check-label">Desequilibrio ventilación-perfusión</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd30" name="cselisd30" onclick="" value="Mucosidad excesiva">
                                                      <label class="form-check-label">Mucosidad excesiva</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd31" name="cselisd31" onclick="" value="Fatiga de los músculos respiratorios" >
                                                      <label class="form-check-label">Fatiga de los músculos respiratorios</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisd32" name="cselisd32" onclick="" value="Interpretación errónea de la información" >
                                                      <label class="form-check-label">Interpretación errónea de la información</label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group col-md-12  dropdown-divider"></div>
                                                <div class="row">
                                                  <div class="form-group col-md-6">
                                                    <label class="col-form-label"><strong>Criterios de resultado:</strong></label>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist1" name="cselist1" onclick="" value="Nivel de ansiedad">
                                                      <label class="form-check-label">Nivel de ansiedad</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist2" name="cselist2" onclick="" value="Nivel de glucemia" >
                                                      <label class="form-check-label">Nivel de glucemia</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist3" name="cselist3" onclick="" value="Eliminación intestinal" >
                                                      <label class="form-check-label">Eliminación intestinal</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist4" name="cselist4" onclick="" value="Ambular" >
                                                      <label class="form-check-label">Ambular</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist5" name="cselist5" onclick="" value="Sueño" >
                                                      <label class="form-check-label">Sueño</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist6" name="cselist6" onclick="" value="Integridad tisular: piel y membranas mucosas">
                                                      <label class="form-check-label">Integridad tisular: piel y membranas mucosas</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist7" name="cselist7" onclick="" value="Curación de la herida: por segunda intección" >
                                                      <label class="form-check-label">Curación de la herida: por segunda intección</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist8" name="cselist8" onclick="" value="Curación de la herida: por primera intección" >
                                                      <label class="form-check-label">Curación de la herida: por primera intección</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist9" name="cselist9" onclick="" value="Termorregulación" >
                                                      <label class="form-check-label">Termorregulación</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist10" name="cselist10" onclick="" value="Control del dolor">
                                                      <label class="form-check-label">Control del dolor</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist11" name="cselist11" onclick="" value="Nivel del dolor" >
                                                      <label class="form-check-label">Nivel del dolor</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist12" name="cselist12" onclick="" value="Perfusión tisular periférica" >
                                                      <label class="form-check-label">Perfusión tisular periférica</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist13" name="cselist13" onclick="" value="Conducta de prenvención caídas" >
                                                      <label class="form-check-label">Conducta de prenvención caídas</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist14" name="cselist14" onclick="" value="Actividades de la vida diaria asistidas">
                                                      <label class="form-check-label">Actividades de la vida diaria asistidas</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist15" name="cselist15" onclick="" value="Estado respiratorio: Permeabilidad de vías respiratoria" >
                                                      <label class="form-check-label">Estado respiratorio: Permeabilidad de vías respiratoria</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist16" name="cselist16" onclick="" value="Estado de deglución" >
                                                      <label class="form-check-label">Estado de deglución</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist17" name="cselist17" onclick="" value="Eliminación urinaria" >
                                                      <label class="form-check-label">Eliminación urinaria</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist18" name="cselist18" onclick="" value="Motilidad intestinal">
                                                      <label class="form-check-label">Motilidad intestinal</label>
                                                    </div>
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                    <br>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist19" name="cselist19" onclick="" value="Severidad de la infección" >
                                                      <label class="form-check-label">Severidad de la infección</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist20" name="cselist20" onclick="" value="Comunicación" >
                                                      <label class="form-check-label">Comunicación</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist21" name="cselist21" onclick="" value="Actividades de la vida diaria" >
                                                      <label class="form-check-label">Actividades de la vida diaria</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist22" name="cselist22" onclick="" value="Rendimiento del cuidador principal: cuidados directos">
                                                      <label class="form-check-label">Rendimiento del cuidador principal: cuidados directos</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist23" name="cselist23" onclick="" value="Posible resistencia al cuidado familiar" >
                                                      <label class="form-check-label">Posible resistencia al cuidado familiar</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist24" name="cselist24" onclick="" value="Autocuidados: comer" >
                                                      <label class="form-check-label">Autocuidados: comer</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist25" name="cselist25" onclick="" value="Autocuidado: higiene" >
                                                      <label class="form-check-label">Autocuidado: higiene</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist26" name="cselist26" onclick="" value="Higiene bucal">
                                                      <label class="form-check-label">Higiene bucal</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist27" name="cselist27" onclick="" value="Consecuencias de la inmovilidad fisiológica" >
                                                      <label class="form-check-label">Consecuencias de la inmovilidad fisiológica</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist28" name="cselist28" onclick="" value="Autocuidados: actividades de la vida diaria (AVD)" >
                                                      <label class="form-check-label">Autocuidados: actividades de la vida diaria (AVD)</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist29" name="cselist29" onclick="" value="Autocuidado: uso del inodoro" >
                                                      <label class="form-check-label">Autocuidado: uso del inodoro</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist30" name="cselist30" onclick="" value="Autocuidado: vestirse">
                                                      <label class="form-check-label">Autocuidado: vestirse</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist31" name="cselist31" onclick="" value="Signos vitales" >
                                                      <label class="form-check-label">Signos vitales</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist32" name="cselist32" onclick="" value="Estado respiratorio: intercambio gaseoso" >
                                                      <label class="form-check-label">Estado respiratorio: intercambio gaseoso</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist33" name="cselist33" onclick="" value="Estado respiratorio: permeabilidad de las vías aéreas" >
                                                      <label class="form-check-label">Estado respiratorio: permeabilidad de las vías aéreas</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist34" name="cselist34" onclick="" value="Estado respiratorio: ventilación">
                                                      <label class="form-check-label">Estado respiratorio: ventilación</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselist35" name="cselist35" onclick="" value="Conocimiento medicación" >
                                                      <label class="form-check-label">Conocimiento medicación</label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group col-md-12  dropdown-divider"></div>
                                                <div class="row">
                                                  <div class="form-group col-md-6">
                                                    <label class="col-form-label"><strong>Intervenciones a realizar:</strong></label>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc1" name="cselisc1" onclick="" value="Disminución de la ansiedad">
                                                      <label class="form-check-label">Disminución de la ansiedad</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc2" name="cselisc2" onclick="" value="Manejo de la hiperglucemia" >
                                                      <label class="form-check-label">Manejo de la hiperglucemia</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc3" name="cselisc3" onclick="" value="Manejo del estreñimiento / impactación" >
                                                      <label class="form-check-label">Manejo del estreñimiento / impactación</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc4" name="cselisc4" onclick="" value="Manejo de la nutrición" >
                                                      <label class="form-check-label">Manejo de la nutrición</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc5" name="cselisc5" onclick="" value="Terapia ejercicio: Ambulación" >
                                                      <label class="form-check-label">Terapia ejercicio: Ambulación</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc6" name="cselisc6" onclick="" value="Mejorar el sueño">
                                                      <label class="form-check-label">Mejorar el sueño</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc7" name="cselisc7" onclick="" value="Cuidados circulctorios: Insuficiencia arterial" >
                                                      <label class="form-check-label">Cuidados circulctorios: Insuficiencia arterial</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc8" name="cselisc8" onclick="" value="Cuidados de las heridas" >
                                                      <label class="form-check-label">Cuidados de las heridas</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc9" name="cselisc9" onclick="" value="Protección contra las infecciones" >
                                                      <label class="form-check-label">Protección contra las infecciones</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc10" name="cselisc10" onclick="" value="Tratamiento de la fiebre">
                                                      <label class="form-check-label">Tratamiento de la fiebre</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc11" name="cselisc11" onclick="" value="Manejo del dolor" >
                                                      <label class="form-check-label">Manejo del dolor</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc12" name="cselisc12" onclick="" value="Cambio de posicion" >
                                                      <label class="form-check-label">Cambio de posicion</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc13" name="cselisc13" onclick="" value="Manejo ambiental" >
                                                      <label class="form-check-label">Manejo ambiental</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc14" name="cselisc14" onclick="" value="Ayuda al autocuidado">
                                                      <label class="form-check-label">Ayuda al autocuidado</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc15" name="cselisc15" onclick="" value="Fisioterapia respiratoria" >
                                                      <label class="form-check-label">Fisioterapia respiratoria</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc16" name="cselisc16" onclick="" value="Terapia de deglución" >
                                                      <label class="form-check-label">Terapia de deglución</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc17" name="cselisc17" onclick="" value="Manejo de la eliminación urinaria" >
                                                      <label class="form-check-label">Manejo de la eliminación urinaria</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc18" name="cselisc18" onclick="" value="Terapia de ejercicios: movilidad articular">
                                                      <label class="form-check-label">Terapia de ejercicios: movilidad articular</label>
                                                    </div>
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                    <br>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc19" name="cselisc19" onclick="" value="Cambios de posición" >
                                                      <label class="form-check-label">Cambios de posición</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc20" name="cselisc20" onclick="" value="Terapia de ejercicios: equilibrio" >
                                                      <label class="form-check-label">Terapia de ejercicios: equilibrio</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc21" name="cselisc21" onclick="" value="Control de las infecciones" >
                                                      <label class="form-check-label">Control de las infecciones</label>
                                                    </div>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc22" name="cselisc22" onclick="" value="Disminución de la ansiedad">
                                                      <label class="form-check-label">Disminución de la ansiedad</label>
                                                    </div> -->
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc23" name="cselisc23" onclick="" value="Ayuda al autocuidado" >
                                                      <label class="form-check-label">Ayuda al autocuidado</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc24" name="cselisc24" onclick="" value="Apoyo al cuidador principal: facilitar el aprendizaje" >
                                                      <label class="form-check-label">Apoyo al cuidador principal: facilitar el aprendizaje</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc25" name="cselisc25" onclick="" value="Apoyo al cuidador principal: facilitar pausas activas" >
                                                      <label class="form-check-label">Apoyo al cuidador principal: facilitar pausas activas</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc26" name="cselisc26" onclick="" value="Ayuda con los autocuidados: alimentación">
                                                      <label class="form-check-label">Ayuda con los autocuidados: alimentación</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc27" name="cselisc27" onclick="" value="Ayuda con los autocuidados: baño/higiene" >
                                                      <label class="form-check-label">Ayuda con los autocuidados: baño/higiene</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc28" name="cselisc28" onclick="" value="Mantenimiento de la salud bucal" >
                                                      <label class="form-check-label">Mantenimiento de la salud bucal</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc29" name="cselisc29" onclick="" value="Ayuda con los autocuidados: vestir/arreglo personal" >
                                                      <label class="form-check-label">Ayuda con los autocuidados: vestir/arreglo personal</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc30" name="cselisc30" onclick="" value="Manejo ante la anulación de un lado del cuerpo">
                                                      <label class="form-check-label">Manejo ante la anulación de un lado del cuerpo</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc31" name="cselisc31" onclick="" value="Ayuda con los autocuidados: aseo" >
                                                      <label class="form-check-label">Ayuda con los autocuidados: aseo</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc32" name="cselisc32" onclick="" value="Monitorización respiratoria" >
                                                      <label class="form-check-label">Monitorización respiratoria</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc33" name="cselisc33" onclick="" value="Oxigenoterapia" >
                                                      <label class="form-check-label">Oxigenoterapia</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc34" name="cselisc34" onclick="" value="Manejo de las vías aéreas">
                                                      <label class="form-check-label">Manejo de las vías aéreas</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" id="cselisc35" name="cselisc35" onclick="" value="Fisioterapia respitaroia" >
                                                      <label class="form-check-label">Fisioterapia respitaroia</label>
                                                    </div>
                                                    <div class="form-check">
                                                       <input class="form-check-input" type="checkbox" id="cselisc36" name="cselisc36" onclick="" value="Enseñanza: medicamentos prescritos" >
                                                      <label class="form-check-label">Enseñanza: medicamentos prescritos</label>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group col-md-12  dropdown-divider"></div>
                                        <div class="row">
                                          <div class="col-md-12 text-center" >
                                            <!-- <input type="text" class="form-control" id="nmedintervencion" name="nmedintervencion" style="display:none" value="<?php echo ucwords($this->session->userdata('s_n')).', '.ucwords($this->session->userdata('s_ap'));?>" />
                                            <input type="text" class="form-control" id="numhc4" name="numhc4" style="display:none" /> -->
                                          </div>
                                          <div class="col-md-12 text-center">
                                            <!-- <button type="button" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarintervencion2">ACTUALIZAR</button> -->
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-body">
                                    <ul class="nav nav-tabs card-header-tabs">
                                      <li class="nav-item">
                                        <button class="btn btn-primary" type="button" onclick="siguientepaginae3cse()">Siguiente</button>
                                        <input type="text" value="1" id="pagina3cse" class="form-control" style="display:none" />
                                      </li>
                                      <li class="nav-item">
                                        <a href=""></a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link active bg-danger" id="subopt1cse" href="#opt1cse" data-toggle="collapse" data-target="#opt1cse" aria-expanded="false" aria-controls="opt1cse" onclick="doynumeropaginae3cse('1')">1</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link bg-white" id="subopt2cse" href="#opt2cse" data-toggle="collapse" data-target="#opt2cse" aria-expanded="false" aria-controls="opt2cse" onclick="doynumeropaginae3cse('2')">2</a>
                                      </li>
                                      <li class="nav-item">
                                        <button class="btn btn-primary" type="button" onclick="atraspaginae3cse()">Atras</button>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              </form>
                            </div>
                            <div class="collapse multi-collapse collapse" id="csemulti3" data-parent="#accordion2cse">
                              <form >
                              <div class="accordion form-group col-md-12" id="separa5">
                                <div class="card">
                                  <div class="card-header" id="headiuno">
                                    <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#escala1"
                                    aria-expanded="false" aria-controls="escala1">
                                      Escala de Carga del Cuidador
                                    </button>
                                  </div>
                                  <div class="collapse" id="escala1" aria-labelledby="headiuno" data-parent="#separa5">
                                    <div class="card-body">
                                      <div class="row">
                                        <div class="form-group col-md-4">
                                          <label>Preguntas a Realizar</label>
                                        </div>
                                        <div class="form-group col-md-1">
                                          <label>Fecha</label>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <input type="text" class="form-control" id="csecarga_fecha" name="csecarga_fecha" />
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="form-group col-md-8">
                                          <span>¿Siente que su familiar solicita mas ayuda de la que realmente necesita?</span>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <div class="progress">
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">0</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">1</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">2</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">3</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">4</div>
                                          </div>
                                          <input type="range" class="form-control-range" id="csecarga_1" name="csecarga_1" onchange="" value="3" min="0" max="4" step="1">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="form-group col-md-8">
                                          <span>¿Siente que debido al tiempo que dedica a su familiar ya no dispone de tiempo suficiente para usted?</span>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <div class="progress">
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">0</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">1</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">2</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">3</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">4</div>
                                          </div>
                                          <input type="range" class="form-control-range" id="csecarga_2" name="csecarga_2" onchange="" value="3" min="0" max="4" step="1">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="form-group col-md-8">
                                          <span>¿Se siente tenso cuando tiene que cuidar a su familiar y atender además otras responsabilidades?</span>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <div class="progress">
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">0</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">1</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">2</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">3</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">4</div>
                                          </div>
                                          <input type="range" class="form-control-range" id="csecarga_3" name="csecarga_3" onchange="" value="3" min="0" max="4" step="1">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="form-group col-md-8">
                                          <span>¿Se siente avergonzado por la conducta de su familiar?</span>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <div class="progress">
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">0</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">1</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">2</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">3</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">4</div>
                                          </div>
                                          <input type="range" class="form-control-range" id="csecarga_4" name="csecarga_4" onchange="" value="3" min="0" max="4" step="1">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="form-group col-md-8">
                                          <span>¿Se siente enfadado cuando está cerca de su familiar?</span>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <div class="progress">
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">0</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">1</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">2</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">3</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">4</div>
                                          </div>
                                          <input type="range" class="form-control-range" id="csecarga_5" name="csecarga_5" onchange="" value="3" min="0" max="4" step="1">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="form-group col-md-8">
                                          <span>¿Cree que la situación actual afecta de manera negativa a su relación con amigos y otros miembros de su familia?</span>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <div class="progress">
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">0</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">1</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">2</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">3</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">4</div>
                                          </div>
                                          <input type="range" class="form-control-range" id="csecarga_6" name="csecarga_6" onchange="" value="3" min="0" max="4" step="1">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="form-group col-md-8">
                                          <span>¿Siente temor por el futuro que le espera a su familiar?</span>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <div class="progress">
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">0</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">1</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">2</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">3</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">4</div>
                                          </div>
                                          <input type="range" class="form-control-range" id="csecarga_7" name="csecarga_7" onchange="" value="3" min="0" max="4" step="1">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="form-group col-md-8">
                                          <span>¿Siente que su familiar depende de usted?</span>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <div class="progress">
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">0</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">1</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">2</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">3</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">4</div>
                                          </div>
                                          <input type="range" class="form-control-range" id="csecarga_8" name="csecarga_8" onchange="" value="3" min="0" max="4" step="1">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="form-group col-md-8">
                                          <span>¿Se siente agobiado cuando tiene que estar junto a su familiar?</span>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <div class="progress">
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">0</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">1</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">2</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">3</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">4</div>
                                          </div>
                                          <input type="range" class="form-control-range" id="csecarga_9" name="csecarga_9" onchange="" value="3" min="0" max="4" step="1">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="form-group col-md-8">
                                          <span>¿Siente que su salud se ha resentido por cuidar a su familiar?</span>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <div class="progress">
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">0</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">1</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">2</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">3</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">4</div>
                                          </div>
                                          <input type="range" class="form-control-range" id="csecarga_10" name="csecarga_10" onchange="" value="3" min="0" max="4" step="1">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="form-group col-md-8">
                                          <span>¿Siente que no tiene la vida privada que desearía debido a su familiar?</span>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <div class="progress">
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">0</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">1</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">2</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">3</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">4</div>
                                          </div>
                                          <input type="range" class="form-control-range" id="csecarga_11" name="csecarga_11" onchange="" value="3" min="0" max="4" step="1">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="form-group col-md-8">
                                          <span>¿Cree que su vida social se ha visto afectada por tener que cuidar de su familiar?</span>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <div class="progress">
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">0</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">1</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">2</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">3</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">4</div>
                                          </div>
                                          <input type="range" class="form-control-range" id="csecarga_12" name="csecarga_12" onchange="" value="3" min="0" max="4" step="1">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="form-group col-md-8">
                                          <span>¿Se siente incomodo para invitar amigos a casa, a causa de su familiar?</span>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <div class="progress">
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">0</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">1</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">2</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">3</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">4</div>
                                          </div>
                                          <input type="range" class="form-control-range" id="csecarga_13" name="csecarga_13" onchange="" value="3" min="0" max="4" step="1">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="form-group col-md-8">
                                          <span>¿Cree que su familiar espera que usted le cuide, como si fuera la única persona con la que puede contar?</span>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <div class="progress">
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">0</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">1</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">2</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">3</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">4</div>
                                          </div>
                                          <input type="range" class="form-control-range" id="csecarga_14" name="csecarga_14" onchange="" value="3" min="0" max="4" step="1">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="form-group col-md-8">
                                          <span>¿Cree que no dispone de dinero suficiente para cuidar a su familiar además de sus otros gastos?</span>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <div class="progress">
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">0</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">1</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">2</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">3</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">4</div>
                                          </div>
                                          <input type="range" class="form-control-range" id="csecarga_15" name="csecarga_15" onchange="" value="3" min="0" max="4" step="1">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="form-group col-md-8">
                                          <span>¿Siente que será incapaz de cuidar a su familiar por mucho mas tiempo?</span>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <div class="progress">
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">0</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">1</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">2</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">3</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">4</div>
                                          </div>
                                          <input type="range" class="form-control-range" id="csecarga_16" name="csecarga_16" onchange="" value="3" min="0" max="4" step="1">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="form-group col-md-8">
                                          <span>¿Siente que ha perdido el control de su vida desde que la enfermedad de su familiar se manifestó?</span>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <div class="progress">
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">0</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">1</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">2</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">3</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">4</div>
                                          </div>
                                          <input type="range" class="form-control-range" id="csecarga_17" name="csecarga_17" onchange="" value="3" min="0" max="4" step="1">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="form-group col-md-8">
                                          <span>¿Desearía poder encargar el cuidado de su familiar a otras personas?</span>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <div class="progress">
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">0</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">1</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">2</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">3</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">4</div>
                                          </div>
                                          <input type="range" class="form-control-range" id="csecarga_18" name="csecarga_18" onchange="" value="3" min="0" max="4" step="1">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="form-group col-md-8">
                                          <span>¿Se siente inseguro acerca de lo que debe hacer con su familiar?</span>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <div class="progress">
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">0</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">1</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">2</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">3</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">4</div>
                                          </div>
                                          <input type="range" class="form-control-range" id="csecarga_19" name="csecarga_19" onchange="" value="3" min="0" max="4" step="1">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="form-group col-md-8">
                                          <span>¿Siente que debería hacer mas de lo que hace por su familiar?</span>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <div class="progress">
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">0</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">1</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">2</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">3</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">4</div>
                                          </div>
                                          <input type="range" class="form-control-range" id="csecarga_20" name="csecarga_20" onchange="" value="3" min="0" max="4" step="1">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="form-group col-md-8">
                                          <span>¿Cree que podriá cuidar de su familiar mejor de lo que lo hace?</span>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <div class="progress">
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">0</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">1</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">2</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">3</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">4</div>
                                          </div>
                                          <input type="range" class="form-control-range" id="csecarga_21" name="csecarga_21" onchange="" value="3" min="0" max="4" step="1">
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="form-group col-md-8">
                                          <span>En general: ¿Se siente muy sobrecargado por tener que cuidar de su familiar?</span>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <div class="progress">
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">0</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">1</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">2</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">3</div>
                                            <div class="progress-bar bg-light" role="" style="width: 22%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">4</div>
                                          </div>
                                          <input type="range" class="form-control-range" id="csecarga_22" name="csecarga_22" onchange="" value="3" min="0" max="4" step="1">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group col-md-12  dropdown-divider"></div>
                                <div class="row">
                                  <div class="form-group col-md-4">
                                    <label class="col-form-label">SIN SOBRECARGA: de 0 a 46 puntos</label><span> </span>
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label class="col-form-label">SOBRECARGA LIGERA: de 47 a 55 puntos</label>
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label class="col-form-label">SOBRECARGA INTENSA: de 56 a 88 puntos</label>
                                  </div>
                                </div>
                                <div class="form-group col-md-12  dropdown-divider"></div>
                                <div class="row">
                                  <div class="form-group col-md-4">
                                    <label>Estado sobrecarga</label>
                                  </div>
                                  <div class="form-group col-md-1">
                                    <label>Puntaje</label>
                                  </div>
                                  <div class="form-group col-md-3">
                                    <input type="text" class="form-control" id="csecarga_total" name="csecarga_total" readonly="" />
                                  </div>
                                  <div class="form-group col-md-1">
                                    <label>Estado</label>
                                  </div>
                                  <div class="form-group col-md-3">
                                    <input type="text" class="form-control" id="csecarga_nivel" name="csecarga_nivel" readonly="" />
                                  </div>
                                </div>
                                <div class="form-group col-md-12  dropdown-divider"></div>
                                <div class="row">
                                  <div class="col-md-12 text-center" >
                                    <!-- <input type="text" class="form-control" id="nmedescalacarga" name="nmedescalacarga" style="display:none" value="<?php echo ucwords($this->session->userdata('s_n')).', '.ucwords($this->session->userdata('s_ap'));?>" />
                                    <input type="text" class="form-control" id="numhc3" name="numhc3" style="display:none" /> -->
                                  </div>
                                  <div class="col-md-12 text-center" >
                                    <!-- <button type="button" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarescalacarga2">ACTUALIZAR</button> -->
                                  </div>
                                </div>
                              </div>
                              </form>
                            </div>
                            <div class="collapse multi-collapse collapse" id="csemulti4" data-parent="#accordion2cse">
                              <form >
                              <div class="row">
                                <div class="form-group col-md-12">
                                  <div class="card-header">
                                    <div class="accordion" id="accordion4cse">
                                      <div class="collapse multi-collapse collapse show" id="opd1cse" data-parent="#accordion4cse">
                                        <div class="row">
                                          <div class="accordion form-group col-md-12" id="separa3cse">
                                            <div class="card">
                                              <div class="card-header" id="headiuno">
                                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#valosoc1cse"
                                                aria-expanded="false" aria-controls="valosoc1cse">
                                                  Valoración de la vivienda
                                                </button>
                                              </div>
                                              <div class="collapse" id="valosoc1cse" aria-labelledby="headiuno" data-parent="#separa3cse">
                                                <div class="card-body">
                                                  <div class="row">
                                                    <div class="form-group col-md-12">
                                                      <label class="col-form-label"><strong></strong></label>
                                                      <div class="row">
                                                        <div class="col-md-3">
                                                          <label class="form-check-label text-uppercase"><strong>Servicios publicos:</strong></label>
                                                          <!-- <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="viveservicios[]" id="viveservicios6" onclick=""  value="No aplica" >
                                                            <label class="form-check-label">No aplica</label>
                                                          </div> -->
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="viveservicios[]" id="cseviveservicios1" onclick=""  value="Acueducto" >
                                                            <label class="form-check-label">Acueducto</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="viveservicios[]" id="cseviveservicios2" onclick=""  value="Alcantarillado">
                                                            <label class="form-check-label">Alcantarillado</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="viveservicios[]" id="cseviveservicios3" onclick=""  value="Energía" >
                                                            <label class="form-check-label">Energía</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="viveservicios[]" id="cseviveservicios4" onclick=""  value="Gas natural">
                                                            <label class="form-check-label">Gas natural</label>
                                                          </div> 
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="viveservicios[]" id="cseviveservicios5" onclick=""  value="Aseo">
                                                            <label class="form-check-label">Aseo</label>
                                                            <input type="text" class="form-control" id="cseauxservicios" name="cseauxservicios" style="display:none" />
                                                          </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                          <label class="form-check-label text-uppercase"><strong>Telefonia</strong></label>
                                                          <!-- <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="vivetelefonia[]" id="vivetelefonia4" onclick=""  value="No aplica">
                                                            <label class="form-check-label">No aplica</label>
                                                          </div> -->
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="vivetelefonia[]" id="csevivetelefonia1" onclick=""  value="Fija">
                                                            <label class="form-check-label">Fija</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="vivetelefonia[]" id="csevivetelefonia2" onclick=""  value="Móvil">
                                                            <label class="form-check-label">Móvil</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="vivetelefonia[]" id="csevivetelefonia3" onclick=""  value="Internet">
                                                            <label class="form-check-label">Internet</label>
                                                            <input type="text" class="form-control" id="cseauxtelefonia" name="cseauxtelefonia" style="display:none" />
                                                          </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                          <label class="form-check-label text-uppercase"><strong>Manejo de Residuos</strong></label>
                                                          <!-- <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="viveresiduos[]" id="viveresiduos6" onclick=""  value="No aplica">
                                                            <label class="form-check-label">No aplica</label>
                                                          </div> -->
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="viveresiduos[]" id="cseviveresiduos1" onclick=""  value="Bolsa">
                                                            <label class="form-check-label">Bolsa</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="viveresiduos[]" id="cseviveresiduos2" onclick=""  value="Caneca">
                                                            <label class="form-check-label">Caneca</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="viveresiduos[]" id="cseviveresiduos3" onclick=""  value="Reciclaje">
                                                            <label class="form-check-label">Reciclaje</label>
                                                          </div> 
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="viveresiduos[]" id="cseviveresiduos4" onclick=""  value="Shunt">
                                                            <label class="form-check-label">Shunt</label>
                                                          </div> 
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="viveresiduos[]" id="cseviveresiduos5" onclick=""  value="Contenedor publico">
                                                            <label class="form-check-label">Contenedor publico</label>
                                                            <input type="text" class="form-control" id="cseauxresiduos" name="cseauxresiduos" style="display:none" />
                                                          </div> 
                                                        </div>
                                                        <div class="col-md-3">
                                                          <label class="form-check-label text-uppercase"><strong>Area en la vivienda</strong></label>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="vivearea" id="csevivearea5" onclick=""  value="No aplica">
                                                            <label class="form-check-label">No aplica</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="vivearea" id="csevivearea1" onclick=""  value="Interior">
                                                            <label class="form-check-label">Interior</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="vivearea" id="csevivearea2" onclick=""  value="Exterior">
                                                            <label class="form-check-label">Exterior</label>
                                                          </div>
                                                          <!-- <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="vivearea" id="vivearea3" onclick=""  value="gutural">
                                                            <label class="form-check-label">gutural</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="vivearea" id="vivearea4" onclick=""  value="escrita">
                                                            <label class="form-check-label">escrita</label>
                                                            <input type="text" class="form-control" id="auxarea" name="auxarea" style="display:none" />
                                                          </div> -->
                                                          <div class="form-group">
                                                            <label class="form-check-label"><strong>Observaciones</strong></label>
                                                            <input type="text" class="form-control" id="csedtareavivienda" name="csedtareavivienda" >
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="form-group col-md-12 dropdown-divider"></div>
                                                    <div class="form-group col-md-12">
                                                      <div class="row">
                                                        <div class="col-md-3">
                                                          <div class="form-group">
                                                            <label class="form-check-label"><strong>Animales domésticos</strong></label>
                                                            <input type="text" class="form-control" id="cseviveanimales" name="cseviveanimales" >
                                                          </div>
                                                          <div class="form-group">
                                                            <label class="form-check-label"><strong>Vacunados</strong></label>
                                                            <input type="text" class="form-control" id="csevivevacunados" name="csevivevacunados" >
                                                          </div>
                                                          <div class="form-group">
                                                            <label class="form-check-label"><strong>Donde habitan</strong></label>
                                                            <input type="text" class="form-control" id="csevivehabitan" name="csevivehabitan" >
                                                          </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                          <label class="form-check-label text-uppercase"><strong>Vectores</strong></label>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="vivevectoreas" id="csevivevectoreas5" onclick=""  value="No aplica">
                                                            <label class="form-check-label">Ninguna</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="vivevectoreas" id="csevivevectoreas1" onclick=""  value="Voladores">
                                                            <label class="form-check-label">Voladores</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="vivevectoreas" id="csevivevectoreas2" onclick=""  value="Rastreros">
                                                            <label class="form-check-label">Rastreros</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="vivevectoreas" id="csevivevectoreas3" onclick=""  value="Antropodos">
                                                            <label class="form-check-label">Antropodos</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="vivevectoreas" id="csevivevectoreas4" onclick=""  value="Se fumiga">
                                                            <label class="form-check-label">Se fumiga</label>
                                                          </div>
                                                          <div class="form-group"><br>
                                                            <label class="form-check-label"></label>
                                                            <label class="form-check-label"><strong>Nombre producto utilizado</strong></label>
                                                            <input type="text" class="form-control" id="cseviveproducto" name="cseviveproducto" >
                                                            <input type="text" class="form-control" id="cseauxvectores" name="cseauxvectores" style="display:none" />
                                                          </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                          <label class="form-check-label text-uppercase"><strong>Alimentos</strong></label>
                                                          <div class="form-group">
                                                            <label class="form-check-label"><strong>Almacenados</strong></label>
                                                            <input type="text" class="form-control" id="csevivealmacenados" name="csevivealmacenados" >
                                                          </div>
                                                          <div class="form-group">
                                                            <label class="form-check-label"><strong>Conservados</strong></label>
                                                            <input type="text" class="form-control" id="cseviveconservados" name="cseviveconservados" >
                                                          </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                          <label class="form-check-label text-uppercase"><strong>Utencilios de Cocina</strong></label>
                                                          <div class="form-group">
                                                            <label class="form-check-label"><strong>Conservación</strong></label>
                                                            <input type="text" class="form-control" id="cseviveconservacion" name="cseviveconservacion" >
                                                          </div>
                                                          <div class="form-group">
                                                            <label class="form-check-label"><strong>Estado</strong></label>
                                                            <input type="text" class="form-control" id="cseviveestado" name="cseviveestado" >
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="form-group col-md-12 dropdown-divider"></div>
                                                    <div class="form-group col-md-12">
                                                      <div class="row">
                                                        <div class="col-md-3">
                                                          <label class="form-check-label text-uppercase"><strong>Entorno</strong></label>
                                                          <div class="form-group">
                                                            <label class="form-check-label"><strong>Aseado</strong></label>
                                                            <input type="text" class="form-control" id="cseviveaseado" name="cseviveaseado" >
                                                          </div>
                                                          <div class="form-group">
                                                            <label class="form-check-label"><strong>Productos</strong></label>
                                                            <input type="text" class="form-control" id="cseviveproductos" name="cseviveproductos" >
                                                          </div>
                                                          <div class="form-group">
                                                            <label class="form-check-label"><strong>Orden</strong></label>
                                                            <input type="text" class="form-control" id="cseviveorden" name="cseviveorden" >
                                                          </div>
                                                          <div class="form-group">
                                                            <label class="form-check-label"><strong>Rutinas</strong></label>
                                                            <input type="text" class="form-control" id="cseviverutinas" name="cseviverutinas" >
                                                          </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                          <label class="form-check-label text-uppercase"><strong>Acesibilidad</strong></label>
                                                          <div class="form-group">
                                                            <label class="form-check-label"><strong>Ingreso</strong></label>
                                                            <input type="text" class="form-control" id="cseviveingreso" name="cseviveingreso" >
                                                          </div>
                                                          <div class="form-group">
                                                            <label class="form-check-label"><strong>Exterior</strong></label>
                                                            <input type="text" class="form-control" id="cseviveexterior" name="cseviveexterior" >
                                                          </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                          <label class="form-check-label text-uppercase"><strong>Baño</strong></label>
                                                          <!-- <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="vivebano" id="vivebano5" onclick=""  value="No aplica">
                                                            <label class="form-check-label">No aplica</label>
                                                          </div> -->
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="vivebano" id="csevivebano1" onclick=""  value="uní personal">
                                                            <label class="form-check-label">Uní personal</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="vivebano" id="csevivebano2" onclick=""  value="en la habitación">
                                                            <label class="form-check-label">En la habitación</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="vivebano" id="csevivebano3" onclick=""  value="compartido">
                                                            <label class="form-check-label">Compartido</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="vivebano" id="csevivebano4" onclick=""  value="social">
                                                            <label class="form-check-label">Social</label>
                                                            <input type="text" class="form-control" id="cseauxbano" name="cseauxbano" style="display:none" />
                                                          </div>
                                                          <label class="form-check-label text-uppercase"><strong>Separacion</strong></label>
                                                          <!-- <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="viveseparacion" id="viveseparacion4" onclick=""  value="No aplica">
                                                            <label class="form-check-label">No aplica</label>
                                                          </div> -->
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="viveseparacion" id="cseviveseparacion1" onclick=""  value="fija">
                                                            <label class="form-check-label">Fija</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="viveseparacion" id="cseviveseparacion2" onclick=""  value="móvil">
                                                            <label class="form-check-label">Móvil</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="viveseparacion" id="cseviveseparacion3" onclick=""  value="barra de apoyo">
                                                            <label class="form-check-label">Barra de apoyo</label>
                                                            <input type="text" class="form-control" id="cseauxseparacion" name="cseauxseparacion" style="display:none" />
                                                          </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                          <label class="form-check-label text-uppercase"><strong>Habitación</strong></label>
                                                          <!-- <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="vivehabitacion" id="vivehabitacion4" onclick=""  value="No aplica">
                                                            <label class="form-check-label">No aplica</label>
                                                          </div> -->
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="vivehabitacion" id="csevivehabitacion1" onclick=""  value="uní personal">
                                                            <label class="form-check-label">Uní personal</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="vivehabitacion" id="csevivehabitacion2" onclick=""  value="bipersonal">
                                                            <label class="form-check-label">Bipersonal</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="vivehabitacion" id="csevivehabitacion3" onclick=""  value="múltiple">
                                                            <label class="form-check-label">Múltiple</label>
                                                            <input type="text" class="form-control" id="cseauxhabitacion" name="cseauxhabitacion" style="display:none" />
                                                          </div>
                                                          <label class="form-check-label text-uppercase"><strong>Ventilacion</strong></label>
                                                          <!-- <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="viveventilacion" id="viveventilacion3" onclick=""  value="No aplica">
                                                            <label class="form-check-label">No aplica</label>
                                                          </div> -->
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="viveventilacion" id="cseviveventilacion1" onclick=""  value="natural">
                                                            <label class="form-check-label">Natural</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="viveventilacion" id="cseviveventilacion2" onclick=""  value="artificial">
                                                            <label class="form-check-label">Artificial</label>
                                                            <input type="text" class="form-control" id="cseauxventilacion" name="cseauxventilacion" style="display:none" />
                                                          </div>
                                                          <label class="form-check-label text-uppercase"><strong>Iluminacion</strong></label>
                                                          <!-- <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="viveiluminacion" id="viveiluminacion3" onclick=""  value="No aplica">
                                                            <label class="form-check-label">No aplica</label>
                                                          </div> -->
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="viveiluminacion" id="cseviveiluminacion1" onclick=""  value="natural">
                                                            <label class="form-check-label">Natural</label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="viveiluminacion" id="cseviveiluminacion2" onclick=""  value="artificial">
                                                            <label class="form-check-label">Artificial</label>
                                                            <input type="text" class="form-control" id="cseauxiluminacion" name="cseauxiluminacion" style="display:none" />
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="card-header" id="headiuno">
                                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#valosoc2cse"
                                                aria-expanded="false" aria-controls="valosoc2cse">
                                                  Escala de Ansiedad y Depresión Hospitalaria
                                                </button>
                                              </div>
                                              <div class="collapse" id="valosoc2cse" aria-labelledby="headiuno" data-parent="#separa3cse">
                                                <div class="card-body">
                                                  <div class="row">
                                                    <div class="form-group col-md-4">
                                                      <label for="formControlRange">Me siento tenso(a) o nervioso(a)</label>
                                                    </div>
                                                    <div class="form-group col-md-8">
                                                      <div class="progress">
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">1</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">2</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">3</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">4</div>
                                                      </div>
                                                      <input type="range" class="form-control-range" id="cseayd1" name="cseayd1" onchange="" value="3" min="1" max="4" step="1">
                                                      <div class="progress">
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">nunca</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">de vez en cuando</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">gran parte del dia</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">todo el dia</div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="form-group col-md-4">
                                                      <label for="formControlRange">Sigo disfrutando de las cosas como siempre</label>
                                                    </div>
                                                    <div class="form-group col-md-8">
                                                      <div class="progress">
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">1</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">2</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">3</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">4</div>
                                                      </div>
                                                      <input type="range" class="form-control-range" id="cseayd2" name="cseayd2" onchange="" value="3" min="1" max="4" step="1">
                                                      <div class="progress">
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">ya no disfruto como antes</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">solamente un poco</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">no tanto como antes</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">igual que antes</div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="form-group col-md-4">
                                                      <label for="formControlRange">Siento una especie de temor como si algo malo fuera a succeder</label>
                                                    </div>
                                                    <div class="form-group col-md-8">
                                                      <div class="progress">
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">1</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">2</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">3</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">4</div>
                                                      </div>
                                                      <input type="range" class="form-control-range" id="cseayd3" name="cseayd3" onchange="" value="3" min="1" max="4" step="1">
                                                      <div class="progress">
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">no siento nada de eso</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">si pero no me preocupa</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">si, pero no muy intenso</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">si y muy intenso</div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="form-group col-md-4">
                                                      <label for="formControlRange">Soy capaz de reírme y ver el lado gracioso de las cosas</label>
                                                    </div>
                                                    <div class="form-group col-md-8">
                                                      <div class="progress">
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">1</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">2</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">3</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">4</div>
                                                      </div>
                                                      <input type="range" class="form-control-range" id="cseayd4" name="cseayd4" onchange="" value="3" min="1" max="4" step="1">
                                                      <div class="progress">
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">actualmente, nada</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">actualmente, mucho menos</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">actualmente, algo menos</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">igual que siempre</div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="form-group col-md-4">
                                                      <label for="formControlRange">Tengo la cabeza llena de preocupaciones</label>
                                                    </div>
                                                    <div class="form-group col-md-8">
                                                      <div class="progress">
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">1</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">2</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">3</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">4</div>
                                                      </div>
                                                      <input type="range" class="form-control-range" id="cseayd5" name="cseayd5" onchange="" value="3" min="1" max="4" step="1">
                                                      <div class="progress">
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">nunca</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">de vez en cuando</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">gran parte del dia</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">todo el dia</div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="form-group col-md-4">
                                                      <label for="formControlRange">Me siento lento(a) y torpe</label>
                                                    </div>
                                                    <div class="form-group col-md-8">
                                                      <div class="progress">
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">1</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">2</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">3</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">4</div>
                                                      </div>
                                                      <input type="range" class="form-control-range" id="cseayd6" name="cseayd6" onchange="" value="3" min="1" max="4" step="1">
                                                      <div class="progress">
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">nunca</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">de vez en cuando</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">gran parte del dia</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">todo el dia</div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="form-group col-md-4">
                                                      <label for="formControlRange">Soy capaz de permanecer sentado(a) tranquilo(a) y relajado(a)</label>
                                                    </div>
                                                    <div class="form-group col-md-8">
                                                      <div class="progress">
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">1</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">2</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">3</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">4</div>
                                                      </div>
                                                      <input type="range" class="form-control-range" id="cseayd7" name="cseayd7" onchange="" value="3" min="1" max="4" step="1">
                                                      <div class="progress">
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">nunca</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">raras veces</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">a menudo</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">siempre</div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="form-group col-md-4">
                                                      <label for="formControlRange">He perdido el interés por mi aspecto personal</label>
                                                    </div>
                                                    <div class="form-group col-md-8">
                                                      <div class="progress">
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">1</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">2</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">3</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">4</div>
                                                      </div>
                                                      <input type="range" class="form-control-range" id="cseayd8" name="cseayd8" onchange="" value="3" min="1" max="4" step="1">
                                                      <div class="progress">
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">nunca</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">rara vez</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">a menudo</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">completamente</div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="form-group col-md-4">
                                                      <label for="formControlRange">Experimento una desagradable sensación de "nervios y hormigueos" en el estomago</label>
                                                    </div>
                                                    <div class="form-group col-md-8">
                                                      <div class="progress">
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">1</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">2</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">3</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">4</div>
                                                      </div>
                                                      <input type="range" class="form-control-range" id="cseayd9" name="cseayd9" onchange="" value="3" min="1" max="4" step="1">
                                                      <div class="progress">
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">nunca</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">rara vez</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">a menudo</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Siempre</div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="form-group col-md-4">
                                                      <label for="formControlRange">Espero las cosas con ilusión</label>
                                                    </div>
                                                    <div class="form-group col-md-8">
                                                      <div class="progress">
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">1</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">2</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">3</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">4</div>
                                                      </div>
                                                      <input type="range" class="form-control-range" id="cseayd10" name="cseayd10" onchange="" value="3" min="1" max="4" step="1">
                                                      <div class="progress">
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">nunca</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">rara vez</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">a menudo</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Siempre</div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="form-group col-md-4">
                                                      <label for="formControlRange">Me siento inquieto(a) como si no puediera parar de moverme</label>
                                                    </div>
                                                    <div class="form-group col-md-8">
                                                      <div class="progress">
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">1</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">2</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">3</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">4</div>
                                                      </div>
                                                      <input type="range" class="form-control-range" id="cseayd11" name="cseayd11" onchange="" value="3" min="1" max="4" step="1">
                                                      <div class="progress">
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">nunca</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">rara vez</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">a menudo</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Siempre</div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="form-group col-md-4">
                                                      <label for="formControlRange">Soy capaz de disfrutar con un buen libro o con un buen programa de radio o televisión</label>
                                                    </div>
                                                    <div class="form-group col-md-8">
                                                      <div class="progress">
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">1</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">2</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">3</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">4</div>
                                                      </div>
                                                      <input type="range" class="form-control-range" id="cseayd12" name="cseayd12" onchange="" value="3" min="1" max="4" step="1">
                                                      <div class="progress">
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">nunca</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">rara vez</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">a menudo</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Siempre</div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="form-group col-md-4">
                                                      <label for="formControlRange">Experimento de repente sensaciones de gran angustia o temor</label>
                                                    </div>
                                                    <div class="form-group col-md-8">
                                                      <div class="progress">
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">1</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">2</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">3</div>
                                                        <div class="progress-bar bg-light" role="" style="width: 32%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-light" role="" style="width: 2%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">4</div>
                                                      </div>
                                                      <input type="range" class="form-control-range" id="cseayd13" name="cseayd13" onchange="" value="3" min="1" max="4" step="1">
                                                      <div class="progress">
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">nunca</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">rara vez</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">a menudo</div>
                                                        <div class="progress-bar bg-white" role="" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Siempre</div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label">BAJA= de 13 a 26 puntos</label><span> </span>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label">MODERADA= de 27 a 39 puntos</label>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label">ALTA= de 40 a 52 puntos</label>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="form-group col-md-12 text-justify">
                                                      <p>Sumatoria de puntajes item IMPARES evidencia nivel de ANSIEDAD - De 6 a 12 BAJA, de 13 a 21 MODERADA y mayor a 21 ANSIEDAD manifiesta</p>
                                                    </div>
                                                    <div class="form-group col-md-12 text-justify">
                                                      <p>Sumatoria de puntajes item PARES evidencia nivel de DEPRESION - De 5 a 10 BAJA, de 11 a 15 MODERADA y mayor a 15 DEPRESION manifiesta</p>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="form-group col-md-4">
                                                      <label for="formControlRange">Total puntos</label>
                                                      <input type="text" class="form-control" id="cseaydtoal" name="cseaydtoal" readonly="" />
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                      <label for="formControlRange">1x = </label>
                                                      <input type="text" class="form-control" id="cseayd1x" name="cseayd1x" readonly="" />
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                      <label for="formControlRange">2x = </label>
                                                      <input type="text" class="form-control" id="cseayd2x" name="cseayd2x" readonly="" />
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                      <label for="formControlRange">3x = </label>
                                                      <input type="text" class="form-control" id="cseayd3x" name="cseayd3x" readonly="" />
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                      <label for="formControlRange">4x = </label>
                                                      <input type="text" class="form-control" id="cseayd4x" name="cseayd4x" readonly="" />
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>                                    
                                        </div>
                                      </div>
                                      <div class="collapse multi-collapse collapse " id="opd2cse" data-parent="#accordion4cse">
                                        <div class="accordion form-group col-md-12" id="separa4cse">
                                          <div class="card">
                                            <!-- <div class="card-header" id="headiuno">
                                              <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#valosocd1cse"
                                              aria-expanded="false" aria-controls="valosocd1cse">
                                                Familio Grama, Ecomapa
                                              </button>
                                            </div>
                                            <div class="collapse" id="valosocd1cse" aria-labelledby="headiuno" data-parent="#separa4cse">
                                              <div class="card-body">
                                                <div class="row">
                                                  <div class="form-group col-md-6">
                                                    <label>Familio Grama</label>
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                    <label>Ecomapa</label>
                                                  </div>
                                                </div>
                                              </div>
                                            </div> -->
                                            <div class="card-header" id="headiuno">
                                              <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#valosocd2cse"
                                              aria-expanded="false" aria-controls="valosocd2cse">
                                                Situación Familiar
                                              </button>
                                            </div>
                                            <div class="collapse" id="valosocd2cse" aria-labelledby="headiuno" data-parent="#separa4cse">
                                              <div class="card-body">
                                                <div class="row">
                                                  <div class="form-group col-md-11">
                                                    <div class="row">
                                                      <div class="col-md-2">
                                                        <table class="table table-bordered">
                                                          <thead>
                                                            <tr>
                                                              <th>1</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                              <td class="text-justify">
                                                                Vive con familia sin dependencia físico psíquica
                                                              </td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                      <div class="col-md-2">
                                                        <table class="table table-bordered">
                                                          <thead>
                                                            <tr>
                                                              <th>2</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                              <td class="text-justify">
                                                                Vive con cónyuge de similar edad
                                                              </td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <table class="table table-bordered">
                                                          <thead>
                                                            <tr>
                                                              <th>3</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                              <td class="text-justify">
                                                                Vive con familia y/o cónyuge y presenta algún grado de dependencia
                                                              </td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <table class="table table-bordered">
                                                          <thead>
                                                            <tr>
                                                              <th>4</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                              <td class="text-justify">
                                                                Vive solo  y tiene hijos próximos
                                                              </td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                      <div class="col-md-2">
                                                        <table class="table table-bordered">
                                                          <thead>
                                                            <tr>
                                                              <th>5</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                              <td class="text-justify">
                                                                Vive solo y carece de hijos o viven alejados. No tiene cuidados permanentes
                                                              </td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="form-group col-md-1">
                                                    <input type="number" class="form-control" id="csesituacion_familiar" name="csesituacion_familiar" onchange="" min="1" max="5" value="1" />
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="card-header" id="headiuno">
                                              <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#valosocd3cse"
                                              aria-expanded="false" aria-controls="valosocd3cse">
                                                Situación Económica
                                              </button>
                                            </div>
                                            <div class="collapse" id="valosocd3cse" aria-labelledby="headiuno" data-parent="#separa4cse">
                                              <div class="card-body">
                                                <div class="row">
                                                  <div class="form-group col-md-11">
                                                    <div class="row">
                                                      <div class="col-md-2">
                                                        <table class="table table-bordered">
                                                          <thead>
                                                            <tr>
                                                              <th>1</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                              <td class="text-justify">
                                                                Mas de 1,5 veces el salario mínimo
                                                              </td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                      <div class="col-md-2">
                                                        <table class="table table-bordered">
                                                          <thead>
                                                            <tr>
                                                              <th>2</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                              <td class="text-justify">
                                                                Desde 1,5 veces el salario mínimo hasta el salario mínimo incluso
                                                              </td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <table class="table table-bordered">
                                                          <thead>
                                                            <tr>
                                                              <th>3</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                              <td class="text-justify">
                                                                Desde el salario mínimo a pensión minima contributiva
                                                              </td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <table class="table table-bordered">
                                                          <thead>
                                                            <tr>
                                                              <th>4</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                              <td class="text-justify">
                                                                Pensión no contributiva, ingreso subsidiado
                                                              </td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                      <div class="col-md-2">
                                                        <table class="table table-bordered">
                                                          <thead>
                                                            <tr>
                                                              <th>5</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                              <td class="text-justify">
                                                                Sin ingresos o ingresos de apoyo familiar
                                                              </td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="form-group col-md-1">
                                                    <input type="number" class="form-control" id="csesituacion_economica" name="csesituacion_economica" onchange="" min="1" max="5" value="1" />
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="card-header" id="headiuno">
                                              <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#valosocd4cse"
                                              aria-expanded="false" aria-controls="valosocd4cse">
                                                Vivienda
                                              </button>
                                            </div>
                                            <div class="collapse" id="valosocd4cse" aria-labelledby="headiuno" data-parent="#separa4cse">
                                              <div class="card-body">
                                                <div class="row">
                                                  <div class="form-group col-md-11">
                                                    <div class="row">
                                                      <div class="col-md-2">
                                                        <table class="table table-bordered">
                                                          <thead>
                                                            <tr>
                                                              <th>1</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                              <td class="text-justify">
                                                                Adecuada a necesidades
                                                              </td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                      <div class="col-md-2">
                                                        <table class="table table-bordered">
                                                          <thead>
                                                            <tr>
                                                              <th>2</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                              <td class="text-justify">
                                                                Barreras arquitectónicas en la vivienda o ingreso a la casa (peldaños, escalones, rampas, puertas angostas, baños comunales,etc.)
                                                              </td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <table class="table table-bordered">
                                                          <thead>
                                                            <tr>
                                                              <th>3</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                              <td class="text-justify">
                                                                Humedades, mala higiene, equipamiento inadecuado (sin baño completo, sin agua caliente, sin calefacción,..)
                                                              </td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <table class="table table-bordered">
                                                          <thead>
                                                            <tr>
                                                              <th>4</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                              <td class="text-justify">
                                                                Ausencia de ascensor, telefonos (sistemas de comunicación audio visual)
                                                              </td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                      <div class="col-md-2">
                                                        <table class="table table-bordered">
                                                          <thead>
                                                            <tr>
                                                              <th>5</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                              <td class="text-justify">
                                                                Vivienda inadecuada (solo habitación integral, inquilinato, compartidad con extraños, sin piso, en teja metálica o papel duro, sin equipamiento minimo,..)
                                                              </td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="form-group col-md-1">
                                                    <input type="number" class="form-control" id="csesituacion_vivienda" name="csesituacion_vivienda" onchange="" min="1" max="5" value="1" />
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="card-header" id="headiuno">
                                              <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#valosocd5cse"
                                              aria-expanded="false" aria-controls="valosocd5cse">
                                                Relaciones Sociales
                                              </button>
                                            </div>
                                            <div class="collapse" id="valosocd5cse" aria-labelledby="headiuno" data-parent="#separa4cse">
                                              <div class="card-body">
                                                <div class="row">
                                                  <div class="form-group col-md-11">
                                                    <div class="row">
                                                      <div class="col-md-2">
                                                        <table class="table table-bordered">
                                                          <thead>
                                                            <tr>
                                                              <th>1</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                              <td class="text-justify">
                                                                Con relaciones solciales
                                                              </td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                      <div class="col-md-2">
                                                        <table class="table table-bordered">
                                                          <thead>
                                                            <tr>
                                                              <th>2</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                              <td class="text-justify">
                                                                Relación social solo con familia y vecinos
                                                              </td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <table class="table table-bordered">
                                                          <thead>
                                                            <tr>
                                                              <th>3</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                              <td class="text-justify">
                                                                Relación social solo con familia o vecinos
                                                              </td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <table class="table table-bordered">
                                                          <thead>
                                                            <tr>
                                                              <th>4</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                              <td class="text-justify">
                                                                No sale del domicilio, recibe visitas
                                                              </td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                      <div class="col-md-2">
                                                        <table class="table table-bordered">
                                                          <thead>
                                                            <tr>
                                                              <th>5</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                              <td class="text-justify">
                                                                No sale y no recibe visitas
                                                              </td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="form-group col-md-1">
                                                    <input type="number" class="form-control" id="csesituacion_relaciones" name="csesituacion_relaciones" onchange="" min="1" max="5" value="1" />
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="card-header" id="headiuno">
                                              <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#valosocd6cse"
                                              aria-expanded="false" aria-controls="valosocd6cse">
                                                Apoyo de la red Social
                                              </button>
                                            </div>
                                            <div class="collapse" id="valosocd6cse" aria-labelledby="headiuno" data-parent="#separa4cse">
                                              <div class="card-body">
                                                <div class="row">
                                                  <div class="form-group col-md-11">
                                                    <div class="row">
                                                      <div class="col-md-2">
                                                        <table class="table table-bordered">
                                                          <thead>
                                                            <tr>
                                                              <th>1</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                              <td class="text-justify">
                                                                Con apoyo familiar y vecinal
                                                              </td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                      <div class="col-md-2">
                                                        <table class="table table-bordered">
                                                          <thead>
                                                            <tr>
                                                              <th>2</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                              <td class="text-justify">
                                                                Voluntario social, ayuda domiciliaria
                                                              </td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <table class="table table-bordered">
                                                          <thead>
                                                            <tr>
                                                              <th>3</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                              <td class="text-justify">
                                                                No tiene apoyo
                                                              </td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <table class="table table-bordered">
                                                          <thead>
                                                            <tr>
                                                              <th>4</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                              <td class="text-justify">
                                                                Pendiente de ingreso en residencia geriátrica
                                                              </td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                      <div class="col-md-2">
                                                        <table class="table table-bordered">
                                                          <thead>
                                                            <tr>
                                                              <th>5</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                              <td class="text-justify">
                                                                Tiene cuidados permanentes
                                                              </td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="form-group col-md-1">
                                                    <input type="number" class="form-control" id="csesituacion_apoyo" name="csesituacion_apoyo" onchange="" min="1" max="5" value="1" />
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group col-md-12  dropdown-divider"></div>
                                        <div class="row">
                                          <div class="form-group col-md-3">
                                            <label class="col-form-label">ACEPTABLE: puntajes 5 y 9</label><span> </span>
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label class="col-form-label">EN RIESGO SOCIAL: puntajes entre 10-14</label>
                                          </div>
                                          <div class="form-group col-md-5">
                                            <label class="col-form-label">EN RIESGO DE PROBLEMA SOCIAL: mayor a 14</label>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-2 text-right">
                                            <label>Total Puntaje</label>
                                          </div>
                                          <div class="col-md-3">
                                            <input type="text" class="form-control" id="csesituacion_total" name="csesituacion_total" readonly="" />
                                          </div>
                                        </div>
                                        <div class="form-group col-md-12  dropdown-divider"></div>
                                        <div class="row">
                                          <div class="col-md-12 text-center" >
                                           <!--  <button type="button" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarsociofamiliar">GUARDAR</button>
                                            <input type="text" class="form-control" id="nmedsociofamiliar" name="nmedsociofamiliar" style="display:none" value="<?php echo ucwords($this->session->userdata('s_n')).', '.ucwords($this->session->userdata('s_ap'));?>" />
                                            <input type="text" class="form-control" id="numhc2" name="numhc2" style="display:none" /> -->
                                          </div>
                                          <div class="col-md-12 text-center">
                                            <!-- <button type="button" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarsociofamiliar2">ACTUALIZAR</button> -->
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-body">
                                    <ul class="nav nav-tabs card-header-tabs">
                                      <li class="nav-item">
                                        <button class="btn btn-primary" type="button" onclick="siguientepaginae2cse()">Siguiente</button>
                                        <input type="text" value="1" id="pagina2cse" class="form-control" style="display:none" />
                                      </li>
                                      <li class="nav-item">
                                        <a href=""></a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link active bg-danger" id="subopd1cse" href="#opd1cse" data-toggle="collapse" data-target="#opd1cse" aria-expanded="false" aria-controls="opd1cse" onclick="doynumeropaginae2cse('1')">1</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link bg-white" id="subopd2cse" href="#opd2cse" data-toggle="collapse" data-target="#opd2cse" aria-expanded="false" aria-controls="opd2cse" onclick="doynumeropaginae2cse('2')">2</a>
                                      </li>
                                      <li class="nav-item">
                                        <button class="btn btn-primary" type="button" onclick="atraspaginae2cse()">Atras</button>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>                      
                    </div>
                  </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
              </div>
          </div>
    </div>
    </div>
    <style type="text/css">
      table.dataTable.dataTable_width_auto {
        /*width: auto;*/
      }
      .dataTable td{
        /*max-width: 20px;*/
        /*word-wrap: break-word;*/
        /*white-space: nowrap;
         text-overflow: ellipsis;
           overflow: hidden;
           word-break: break-all;*/
      }
      .td-limit {
       /*max-width: 30px;
       text-overflow: ellipsis;
       white-space: nowrap;
       overflow: hidden;*/
       /*word-break: break-all;*/
      }
    </style>
    <input type="text" id="cualeslabaseurl" value="<?php echo base_url();?>" style="display:none">
    <script type="text/javascript">
          var baseurl=document.getElementById("cualeslabaseurl").value;
          document.title="Cons. Historia | H. Clinica";
          window.onload = function() {
            
            // $.extend( true, $.fn.dataTable.defaults, {
            //     "language": {
            //         "decimal": ",",
            //         "thousands": ".",
            //         "info": " Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            //         "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            //         "infoPostFix": "",
            //         "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            //         "loadingRecords": "Cargando...",
            //         "lengthMenu": "Mostrar _MENU_ registros",
            //         "paginate": {
            //             "first": "Primero",
            //             "last": "Último",
            //             "next": "Siguiente",
            //             "previous": "Anterior"
            //         },
            //         "processing": "Procesando...",
            //         "search": "Buscar:",
            //         "searchPlaceholder": "Documento, Nombre",
            //         "zeroRecords": "No se encontraron resultados",
            //         "emptyTable": "Ningún dato disponible en esta tabla",
            //         "aria": {
            //             "sortAscending":  ": Activar para ordenar la columna de manera ascendente",
            //             "sortDescending": ": Activar para ordenar la columna de manera descendente"
            //         },
            //         //only works for built-in buttons, not for custom buttons
            //         "buttons": {
            //             "create": "Nuevo",
            //             "edit": "Cambiar",
            //             "remove": "Borrar",
            //             "copy": "Copiar",
            //             "csv": "fichero CSV",
            //             "excel": "tabla Excel",
            //             "pdf": "documento PDF",
            //             "print": "Imprimir",
            //             "colvis": "Visibilidad columnas",
            //             "collection": "Colección",
            //             "upload": "Seleccione fichero...."
            //         },
            //         "select": {
            //             "rows": {
            //                 _: '%d filas seleccionadas',
            //                 0: 'clic fila para seleccionar',
            //                 1: 'una fila seleccionada'
            //             }
            //         },
          
            //     }           
            // } );
             // $('#resultado').DataTable( {
             //    'lengthMenu':[5,10,20,50,100],
             //    'lengthMenu2':['uno','dos'],
             //    'paging':true,
             //    'info':true,
             //    'filter':true,
             //    'stateSave':true,
             //    'processing':true,
             //    'serverSide':true,
             //    'responsive':true,
             //    // 'AutoWidth': false,
             //     dom: 'Brtlip',  
             //    'ajax':{
             //      "url":baseurl+"registro/obtener_server_hc_pad",
             //      "type":"POST"
             //      // dataSrc:''
             //    },
             //    'buttons': [
             //      {
             //        extend: 'csv',
             //        text: '<i class="fas fa-file-csv"></i>',
             //        titleAttr: 'Exportar a Csv',
             //        className: 'btn btn-verde'
             //      },
             //      {
             //        extend: 'excelHtml5',
             //        text: '<i class="fas fa-file-excel"></i>',
             //        titleAttr: 'Exportar a Excel',
             //        className: 'btn btn-success'
             //      },
             //      {
             //        extend: 'pdf',
             //        text: '<i class="fas fa-file-pdf"></i>',
             //        titleAttr: 'Exportar a Pdf',
             //        className: 'btn btn-danger'
             //      },
             //      {
             //        extend: 'print',
             //        text: '<i class="fas fa-print"></i>',
             //        titleAttr: 'Imprimir',
             //        className: 'btn btn-info'
             //      }                  
             //    ],
             //    // columnDefs: [{
             //    //     width: "20px",
             //    //     targets: 0
             //    //   },
             //    //   {
             //    //     width: "20px",
             //    //     targets: 1
             //    //   },
             //    //   {
             //    //     width: "20px",
             //    //     targets: 2
             //    //   },
             //    //   {
             //    //     width: "10px",
             //    //      height:"200px",
             //    //     targets: 3
             //    //   },
             //    //   {
             //    //     width: "20px",
             //    //     targets: 4
             //    //   },
             //    //   {
             //    //     width: "20px",
             //    //     targets: 5
             //    //   }
             //    // ],
             //    'columns':[
             //      // {data: 'rownum','sClass':'dt-body-center'},
             //      {data: 'ambito_registro_paciente'},
             //      {
             //        render:function(data,type,row){
             //          return 'Historia Clinica '+row.hc_pad_cod;
                      
             //        }
             //      },
             //      {data: 'pad_f_reg'},
             //      // {data: 'pad_diagnosticos'},
             //      {
             //        // width: "30px",
             //        // width:"10px",
             //        // height:"200px",
             //        render:function(data,type,row){
                      
             //          var os = row.pad_diagnosticos;
             //          var recorte = os.match(/.{0,25}\s/g).join("<br>");
             //          // console.log(recorte);
             //          var dg=row.pad_diagnosticos.split(";");
             //          var mdg="";
             //          var mdg2="";
             //          var result = stringDivider(os, 25, "<br/>");
             //          // console.log(result);
             //          if(dg.length>0)
             //          {
             //            for (var i = 0; i < dg.length-1; i++)
             //            {
                         
             //              if (dg[i].length>=25)
             //              {
             //                // mdg2=mdg2+dg[i].substring(0,20)+"\n\r"+dg[i].length;//+dg[i].substring(20,dg[i].length)+"\n\r";
             //                // console.log(""+mdg2);
             //                 // mdg=mdg+dg[i].match(/.{0,25}/g).join("<br>");
             //              }
             //              mdg=mdg+dg[i]+"<br>";
             //               // mdg=mdg+stringDivider(dg[i], 25, "<br/>");
             //              // mdg=mdg+dg[i].substring(0,20)+"\n\r"+dg[i].substring(20,dg[i].length)+"\n\r";
             //               // console.log("es: "+mdg);
             //            }
             //            // mdg=mdg.replace(",","<br>");
             //            // return mdg;//.replace(",","<br>");
             //            // return mdg.match(/.{0,25}\s/g).join("<br>");
             //            // return recorte;
             //            // return "<div class='text-justify'>"+stringDivider(mdg, 25, "<br/>")+"</div>";
             //            return stringDivider(mdg, 25, "<br/>");
             //            // return result;
             //            // console.log("es: "+mdg);
             //          }
             //          else
             //          {
             //            //return row.pad_diagnosticos;
             //            //console.log(":: "+row.pad_diagnosticos);
             //          }
             //          // return row.pad_diagnosticos;
             //        }
             //      },
             //      {data: 'registro_especialidad'},
             //      {
             //        render:function(data,type,row){
             //          return row.registro_nombres+" "+row.registro_apellidos;
             //        }
             //      },
             //      {"orderable":true,
             //        render:function(data,type,row){
                        
             //            return '<a  href="'+baseurl+'imprimir/generar_historia/pad/'+row.id_hc_pad+'/'+row.pad_documento+'/'+row.pad_f_reg+'/HC" class="btn btn-azul" title="Imprimir" onclick="" target="_blank"><img src="'+baseurl+'assets/img/iconos/oj.png" class="img-fluid" width="25" height="25"/></a><a href="#" class="btn btn-rosado" data-toggle="modal" data-target="#mdetalleshc" onclick="selpcT3(\''+row.id_hc_pad+'\',\''+row.pad_documento+'\',\''+row.pad_f_reg+'\',\''+1+'\')"><img src="'+baseurl+'assets/img/iconos/ver.png" class="img-fluid" width="25" height="25"/></a>';
             //        }
             //      }
             //    ],
             //      // "order": [[ 3, "desc" ]],
             //    "order": [],
             //  } );

            // $('#selimprimirfatencion').on('change',function(){
            //   var sel=$('#selimprimirfatencion').val();
            //   // alert(';'+sel);
            //   // $("#").DataTable.fnDestroy();
            //   var documento="";
            //   var fecha="";
            //   // if(op=="general")
            //   // {
            //   //   documento="pad_documento";
            //   //   fecha="pad_f_reg";
            //   // }
            //   if(op=="pad")
            //   {
            //     documento="pad_documento";
            //     fecha="pad_f_reg";
            //   }
            //   // else if(op=="concentimiento")
            //   // {
            //   //   documento="concentimiento_doc";
            //   //   fecha="concentimiento_f_reg";
            //   // }
            //   else if(op=="barthel")
            //   {
            //     documento="barthel_doc";
            //     fecha="barthel_f_reg";
            //   }
            //   else if(op=="valoracion")
            //   {
            //     documento="valoracion_doc";
            //     fecha="valoracion_f_reg";
            //   }
            //   else if(op=="norton")
            //   {
            //     documento="norton_doc";
            //     fecha="norton_f_reg";
            //   }
            //   else if(op=="braden")
            //   {
            //     documento="braden_doc";
            //     fecha="braden_f_reg";
            //   }
            //   else if(op=="padenf")
            //   {
            //     documento="enf_pad_doc";
            //     fecha="enf_pad_f_reg";
            //   }
            //   else if(op=="sociofamiliar")
            //   {
            //     documento="enf_valoracion_doc";
            //     fecha="enf_valoracion_f_reg";
            //   }
            //   else if(op=="escaladecarga")
            //   {
            //     documento="enf_escala_doc";
            //     fecha="enf_escala_f_reg";
            //   }
            //   else if(op=="intervencion")
            //   {
            //     documento="enf_intervencion_doc";
            //     fecha="enf_intervencion_f_reg";
            //   }
            //   $("#resultado").dataTable().fnDestroy();
            //     $('#resultado').DataTable( {
            //       'lengthMenu':[5,10,20,50,100],
            //       'lengthMenu2':['uno','dos'],
            //       'paging':true,
            //       'info':true,
            //       'filter':true,
            //       'stateSave':true,
            //       'processing':true,
            //       'serverSide':true,
            //       'responsive':true,
            //        dom: 'Brtlip',  
            //       'ajax':{
            //         "url":baseurl+"registro/obtener_server_hc_"+sel,
            //         "type":"POST"
            //         // dataSrc:''
            //       },
            //       'buttons': [
            //         {
            //           extend: 'csv',
            //           text: '<i class="fas fa-file-csv"></i>',
            //           titleAttr: 'Exportar a Csv',
            //           className: 'btn btn-verde'
            //         },
            //         {
            //           extend: 'excelHtml5',
            //           text: '<i class="fas fa-file-excel"></i>',
            //           titleAttr: 'Exportar a Excel',
            //           className: 'btn btn-success'
            //         },
            //         {
            //           extend: 'pdf',
            //           text: '<i class="fas fa-file-pdf"></i>',
            //           titleAttr: 'Exportar a Pdf',
            //           className: 'btn btn-danger'
            //         },
            //         {
            //           extend: 'print',
            //           text: '<i class="fas fa-print"></i>',
            //           titleAttr: 'Imprimir',
            //           className: 'btn btn-info'
            //         }                  
            //       ],
            //       // 'buttons': [{text:'nuevo'}],
            //       'columns':[
            //         // {data: 'rownum','sClass':'dt-body-center'},
            //         {data: 'ambito_registro_paciente'},
            //         {
            //           render:function(data,type,row){
                        
            //             // if(op=="general")
            //             // {
            //             //   return 'Historia Clinica '+row.hc_pad_cod;
            //             // }
            //             // else 
            //               if(op=="pad")
            //             {
            //               return 'Historia Clinica '+row.hc_pad_cod;
            //             }
            //             else if(op=="barthel")
            //             {
            //               return 'Barthel '+row.hc_barthel_cod;
            //             }
            //             else if(op=="valoracion")
            //             {
            //               return 'Valoracion '+row.hc_valoracion_cod;
            //             }
            //             else if(op=="norton")
            //             {
            //               return 'Norton '+row.hc_norton_cod;
            //             }
            //             else if(op=="braden")
            //             {
            //               return 'Braden '+row.hc_braden_cod;
            //             }
            //             // else if(op=="generalenf")
            //             // {
            //             //   return 'Historia Enf '+row.hc_enf_pad_cod;
            //             // }
            //             else if(op=="padenf")
            //             {
            //               return 'Historia Enf '+row.hc_enf_pad_cod;
            //             }
            //             else if(op=="sociofamiliar")
            //             {
            //               return 'Socio Familiar '+row.hc_enf_valoracion_cod;
            //             }
            //             else if(op=="escaladecarga")
            //             {
            //                return 'Escala de Carga '+row.hc_enf_escala_cod;
            //             }
            //             else if(op=="intervencion")
            //             {
            //                return 'Intervencion '+row.hc_enf_intervencion_cod;
            //             }
            //           }
            //         },
            //         {data: fecha},
            //         {
            //           render:function(data,type,row){
                        
            //             // if(op=="general")
            //             // {
            //             //   return 'Historia Clinica '+row.hc_pad_cod;
            //             // }
            //             // else 
            //               if(op=="pad")
            //             {
            //               // return 'Historia Clinica ';
            //               if(row.pad_diagnosticos)
            //               {
            //                 return ''+mostrarstring(row.pad_diagnosticos);
            //               }
            //               else
            //               {
            //                 return ''+row.pad_diagnosticos;//stringDivider(row.pad_diagnosticos, 25, "<br/>");
            //               }
            //               return ''+stringDivider(row.pad_diagnosticos, 25, "<br/>");
            //               // var dg=row.pad_diagnosticos.split(";");
            //               // var mdg="";
            //               // if(dg.length>0)
            //               // {
            //               //   for (var i = 0; i < dg.length-1; i++)
            //               //   {               
            //               //     mdg=mdg+dg[i]+"<br>";
            //               //   }
            //               //   return stringDivider(mdg, 25, "<br/>");
            //               // }
            //             }                        
            //             else if(op=="barthel")
            //             {
            //               if(row.pad_diagnosticos)
            //               {
            //                 var dg=row.pad_diagnosticos.split(";");
            //                 var mdg="";
            //                 if(dg.length>0)
            //                 {
            //                   for (var i = 0; i < dg.length-1; i++)
            //                   {               
            //                     mdg=mdg+dg[i]+"<br>";
            //                   }
            //                   return stringDivider(mdg, 25, "<br/>");
            //                 }
            //               }
            //               else
            //               {
            //                 return ''+row.pad_diagnosticos;
            //               }
            //               return ''+stringDivider(row.pad_diagnosticos, 25, "<br/>");
            //             }
            //             else if(op=="valoracion")
            //             {
            //               if(row.valoracion_diagnosticos)
            //               {
            //                 var ap=row.valoracion_diagnosticos;
            //                 // console.log(ap.includes(';'));
            //                 var dg=row.valoracion_diagnosticos.split(";");
            //                 var mdg="";
            //                 if(dg.length>0)
            //                 {
            //                   for (var i = 0; i < dg.length-1; i++)
            //                   {               
            //                     mdg=mdg+dg[i]+"<br>";
            //                   }
            //                   return stringDivider(mdg, 25, "<br/>");
            //                 }
                            
            //               }
            //               else
            //               {
            //                 return ''+row.valoracion_diagnosticos;//.match(/.{0,25}\s/g).join("<br>");
            //               }
            //               return ''+mostrarstring(row.valoracion_diagnosticos);
            //             }
            //             else if(op=="norton")
            //             {
            //               if(row.norton_diagnosticos)
            //               {
            //                 var dg=row.norton_diagnosticos.split(";");
            //                 var mdg="";
            //                 if(dg.length>0)
            //                 {
            //                   for (var i = 0; i < dg.length-1; i++)
            //                   {               
            //                     mdg=mdg+dg[i]+"<br>";
            //                   }
            //                   return stringDivider(mdg, 25, "<br/>");
            //                 }
            //               }
            //               else
            //               {
            //                 return ''+row.norton_diagnosticos;
            //               }
            //               return ''+mostrarstring(row.norton_diagnosticos);
            //             }
            //             else if(op=="braden")
            //             {
            //               if(row.pad_diagnosticos)
            //               {
            //                 return ''+mostrarstring(row.pad_diagnosticos);
            //               }
            //               else
            //               {
            //                 return ''+row.pad_diagnosticos; 
            //               }
            //               return ''+mostrarstring(row.pad_diagnosticos);
            //             }
            //             // // else if(op=="generalenf")
            //             // // {
            //             // //   return 'Historia Enf '+row.hc_enf_pad_cod;
            //             // // }
            //             else if(op=="padenf")
            //             {
            //               // alert("pad enf");
            //               if(row.enf_pad_diagnosticos_enfermera)
            //               {
            //                 return ''+mostrarstring2(row.enf_pad_diagnosticos_enfermera);
            //               }
            //               else
            //               {
            //                 return ''+row.enf_pad_diagnosticos_enfermera;
            //               }
            //               return ''+mostrarstring2(row.enf_pad_diagnosticos_enfermera);
            //             }
            //             else if(op=="sociofamiliar")
            //             {
            //               if(row.enf_pad_diagnosticos_enfermera)
            //               {
            //                 return ''+mostrarstring2(row.enf_pad_diagnosticos_enfermera);
            //               }
            //               else
            //               {
            //                 return ''+row.enf_pad_diagnosticos_enfermera;
            //               }
            //               return ''+mostrarstring2(row.enf_pad_diagnosticos_enfermera);
            //             }
            //             else if(op=="escaladecarga")
            //             {
            //               if(row.enf_pad_diagnosticos_enfermera)
            //               {
            //                 return ''+mostrarstring2(row.enf_pad_diagnosticos_enfermera);
            //               }
            //               else
            //               {
            //                 return ''+row.enf_pad_diagnosticos_enfermera;
            //               }
            //               return ''+mostrarstring2(row.enf_pad_diagnosticos_enfermera);
            //             }
            //             else if(op=="intervencion")
            //             {
            //               if(row.enf_intervencion_diagnosticos_enf)
            //               {
            //                 return ''+mostrarstring2(row.enf_intervencion_diagnosticos_enf);
            //               }
            //               else
            //               {
            //                 return ''+row.enf_intervencion_diagnosticos_enf;
            //               }
            //                return ''+mostrarstring2(row.enf_intervencion_diagnosticos_enf);
            //             }
            //           }
            //         },
            //         {data: 'registro_especialidad'},
            //         {
            //           render:function(data,type,row){
            //             return row.registro_nombres+" "+row.registro_apellidos;
            //           }
            //         },
            //         {"orderable":true,
            //           render:function(data,type,row){
            //               // if(op=="general")
            //               // {
            //               //   return '<a  href="'+baseurl+'imprimir/generar_historia/'+sel+'/'+row.id_hc_pad+'/'+row.pad_documento+'/'+row.pad_f_reg+'/HC" class="btn btn-azul" title="Imprimir" onclick="" target="_blank"><img src="'+baseurl+'assets/img/iconos/oj.png" class="img-fluid" width="25" height="25"/></a>';
            //               // }
            //               if(op=="pad")
            //               {
            //                 return '<a  href="'+baseurl+'imprimir/generar_historia/'+sel+'/'+row.id_hc_pad+'/'+row.pad_documento+'/HC" class="btn btn-azul" title="Imprimir" onclick="" target="_blank"><img src="'+baseurl+'assets/img/iconos/oj.png" class="img-fluid" width="25" height="25"/></a><a href="#" class="btn btn-rosado" data-toggle="modal" data-target="#mdetalleshc" onclick="selpcT3(\''+row.id_hc_pad+'\',\''+row.pad_documento+'\',\''+row.pad_f_reg+'\',\''+1+'\')"><img src="'+baseurl+'assets/img/iconos/ver.png" class="img-fluid" width="25" height="25"/></a>'; 
            //               }
            //               // else if(op=="concentimiento")
            //               // {
            //               //   return '<a  href="'+baseurl+'imprimir/generar_historia/'+sel+'/'+row.id_hc_concentimiento+'/'+row.concentimiento_doc+'/HC-Concentimiento" class="btn btn-azul" title="Imprimir" onclick="" target="_blank"><img src="'+baseurl+'assets/img/iconos/oj.png" class="img-fluid" width="25" height="25"/></a>'; 
            //               // }
            //               else if(op=="barthel")
            //               {
            //                 return '<a  href="'+baseurl+'imprimir/generar_historia/'+sel+'/'+row.id_hc_barthel+'/'+row.barthel_doc+'/HC-Barthel" class="btn btn-azul" title="Imprimir" onclick="" target="_blank"><img src="'+baseurl+'assets/img/iconos/oj.png" class="img-fluid" width="25" height="25"/></a><a href="#" class="btn btn-rosado" data-toggle="modal" data-target="#mdetalleshc" onclick="selpcT3(\''+row.id_hc_barthel+'\',\''+row.barthel_doc+'\',\''+row.barthel_f_reg+'\',\''+2+'\')"><img src="'+baseurl+'assets/img/iconos/ver.png" class="img-fluid" width="25" height="25"/></a>'; 
            //               }
            //               else if(op=="valoracion")
            //               {
            //                 return '<a  href="'+baseurl+'imprimir/generar_historia/'+sel+'/'+row.id_hc_valoracion+'/'+row.valoracion_doc+'/HC-Valoracion" class="btn btn-azul" title="Imprimir" onclick="" target="_blank"><img src="'+baseurl+'assets/img/iconos/oj.png" class="img-fluid" width="25" height="25"/></a><a href="#" class="btn btn-rosado" data-toggle="modal" data-target="#mdetalleshc" onclick="selpcT3(\''+row.id_hc_valoracion+'\',\''+row.valoracion_doc+'\',\''+row.valoracion_f_reg+'\',\''+3+'\')"><img src="'+baseurl+'assets/img/iconos/ver.png" class="img-fluid" width="25" height="25"/></a>'; 
            //               }
            //               else if(op=="norton")
            //               {
            //                 return '<a  href="'+baseurl+'imprimir/generar_historia/'+sel+'/'+row.id_hc_norton+'/'+row.norton_doc+'/HC-Norton" class="btn btn-azul" title="Imprimir" onclick="" target="_blank"><img src="'+baseurl+'assets/img/iconos/oj.png" class="img-fluid" width="25" height="25"/></a><a href="#" class="btn btn-rosado" data-toggle="modal" data-target="#mdetalleshc" onclick="selpcT3(\''+row.id_hc_norton+'\',\''+row.norton_doc+'\',\''+row.norton_f_reg+'\',\''+4+'\')"><img src="'+baseurl+'assets/img/iconos/ver.png" class="img-fluid" width="25" height="25"/></a>'; 
            //               }
            //               else if(op=="braden")
            //               {
            //                 return '<a  href="'+baseurl+'imprimir/generar_historia/'+sel+'/'+row.id_hc_braden+'/'+row.braden_doc+'/HC-Braden" class="btn btn-azul" title="Imprimir" onclick="" target="_blank"><img src="'+baseurl+'assets/img/iconos/oj.png" class="img-fluid" width="25" height="25"/></a><a href="#" class="btn btn-rosado" data-toggle="modal" data-target="#mdetalleshc" onclick="selpcT3(\''+row.id_hc_braden+'\',\''+row.braden_doc+'\',\''+row.braden_f_reg+'\',\''+5+'\')"><img src="'+baseurl+'assets/img/iconos/ver.png" class="img-fluid" width="25" height="25"/></a>'; 
            //               }
            //               else if(op=="padenf")
            //               {
            //                 return '<a  href="'+baseurl+'imprimir/generar_historia/'+sel+'/'+row.id_hc_enf_pad+'/'+row.enf_pad_doc+'/HC" class="btn btn-azul" title="Imprimir" onclick="" target="_blank"><img src="'+baseurl+'assets/img/iconos/oj.png" class="img-fluid" width="25" height="25"/></a>';//<a href="#" class="btn btn-rosado" data-toggle="modal" data-target="#vermodalgenf" onclick="selpcT2(\''+row.id_hc_enf_pad+'\',\''+row.enf_pad_doc+'\',\''+row.enf_pad_f_reg+'\',\''+1+'\')"><img src="'+baseurl+'assets/img/iconos/ver.png" class="img-fluid" width="25" height="25"/></a>
            //               }
            //               else if(op=="sociofamiliar")
            //               {
            //                 return '<a  href="'+baseurl+'imprimir/generar_historia/'+sel+'/'+row.id_hc_enf_valoracion+'/'+row.enf_valoracion_doc+'/HC-Valoracion" class="btn btn-azul" title="Imprimir" onclick="" target="_blank"><img src="'+baseurl+'assets/img/iconos/oj.png" class="img-fluid" width="25" height="25"/></a>';//<a href="#" class="btn btn-rosado" data-toggle="modal" data-target="#vermodalgenf" onclick="selpcT2(\''+row.id_hc_enf_valoracion+'\',\''+row.enf_valoracion_doc+'\',\''+row.enf_valoracion_f_reg+'\',\''+2+'\')"><img src="'+baseurl+'assets/img/iconos/ver.png" class="img-fluid" width="25" height="25"/></a>
            //               }
            //               else if(op=="escaladecarga")
            //               {
            //                 return '<a  href="'+baseurl+'imprimir/generar_historia/'+sel+'/'+row.id_hc_enf_escala+'/'+row.enf_escala_doc+'/HC-Escala" class="btn btn-azul" title="Imprimir" onclick="" target="_blank"><img src="'+baseurl+'assets/img/iconos/oj.png" class="img-fluid" width="25" height="25"/></a>';//<a href="#" class="btn btn-rosado" data-toggle="modal" data-target="#vermodalgenf" onclick="selpcT2(\''+row.id_hc_enf_escala+'\',\''+row.enf_escala_doc+'\',\''+row.enf_escala_f_reg+'\',\''+3+'\')"><img src="'+baseurl+'assets/img/iconos/ver.png" class="img-fluid" width="25" height="25"/></a> 
            //               }
            //               else if(op=="intervencion")
            //               {
            //                 return '<a  href="'+baseurl+'imprimir/generar_historia/'+sel+'/'+row.id_hc_enf_intervencion+'/'+row.enf_intervencion_doc+'/HC-Intervencion" class="btn btn-azul" title="Imprimir" onclick="" target="_blank"><img src="'+baseurl+'assets/img/iconos/oj.png" class="img-fluid" width="25" height="25"/></a>';//<a href="#" class="btn btn-rosado" data-toggle="modal" data-target="#vermodalgenf" onclick="selpcT2(\''+row.id_hc_enf_intervencion+'\',\''+row.enf_intervencion_doc+'\',\''+row.enf_intervencion_f_reg+'\',\''+4+'\')"><img src="'+baseurl+'assets/img/iconos/ver.png" class="img-fluid" width="25" height="25"/></a> 
            //               }
            //           }
            //         }
            //       ],
            //         // "order": [[ 3, "desc" ]],
            //       "order": [],
            //     } );
            // });
            
          }
          function buscarfatencion(){
            op=$('#selimprimirfatencion').val();
            // console.log(op);
          }
          function buscarfecathc(){
             op=$('#selimprimirfatencion').val();
            obtengolafechadehoy=$('#fchathc').val();
            // console.log(obtengolafechadehoy);
          }
          function stringDivider(str, width, spaceReplacer) {
              if (str.length>width) {
                  var p=width
                  for (;p>0 && str[p]!=' ';p--) {
                  }
                  if (p>0) {
                      var left = str.substring(0, p);
                      var right = str.substring(p+1);
                      return left + spaceReplacer + stringDivider(right, width, spaceReplacer);
                  }
              }
              return str;
          }
          function mostrarstring(ls){
            var ap=ls.includes(";");
            // console.log(ap);
            if(ap)
            {
              var dg=ls.split(";");
              var mdg="";
              if(dg.length>0)
              {
                for (var i = 0; i < dg.length-1; i++)
                {               
                  mdg=mdg+dg[i]+"<br>";
                }
                return ''+stringDivider(mdg, 25, "<br/>");
              }
              else
              {
                
              }
            }
            else
            {
                return ''+stringDivider(ls, 25, "<br/>");
            }
            
          }
          function mostrarstring2(ls){
            var ap=ls.includes(";");
            // console.log(ap);
            if(ap)
            {
              var dg=ls.split(";");
              var mdg="";
              if(dg.length>0)
              {
                for (var i = 0; i < dg.length-1; i++)
                {               
                  mdg=mdg+dg[i]+"<br>";
                }
                return ''+stringDivider(mdg, 20, "<br/>");
              }
              else
              {
                
              }
            }
            else
            {
                return ''+stringDivider(ls, 20, "<br/>");
            }
            
          }
    </script>