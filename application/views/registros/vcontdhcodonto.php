    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Consultar H.C. Primera Vez</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Consultas</a></li>
              <li class="breadcrumb-item active">Consultar H.C. Primera Vez</li>
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
                <button type="button" class="btn btn-azul btn-lg" data-toggle="modal" id="selecpcodonto" data-target="#seleciona">SELECCIONAR PACIENTE</button>
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
        <div class="col-12" id="verhistodontoatencion" style="display:none">
            <div class="card">
              <div class="">
                <div class="row">
                  <div class="form-group col-md-4">
                  </div>

                </div>
              </div>
            </div>
            <div class="card" >
              
              <div class="card-header">
                <h3 class="card-title">Listado de H.C. Odontologicas </h3>

                <div class="card-tools">
                  <div class="input-group input-group-md" style="width: 250px;">
                    <select class="form-control" id="odontoselimprimirfatencion" name="odontoselimprimirfatencion" onchange="buscarfatencionodonto()">
                      <!-- <option value="general">General</option> -->
                      <option value="pad_odonto">Historia Clinica</option>
                      <!-- <option value="concentimiento">Concentimiento</option> -->
                      <option value="pad_visitaodonto">Evoluciones</option>

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
                      <th>Especialidad</th>
                      <th>Profesional</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
 
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
                          <input type="text" id="nombres" id="nombres" class="form-control" onkeyup="solopacodontoatencion()" />
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
                              <a class="nav-link active text-uppercase bg-white " id="unocs" href="#csmulti1" data-toggle="collapse" data-target="#csmulti1" aria-expanded="false" aria-controls="csmulti1" onclick="pasarcs('1')"><FONT SIZE=5>Historia Clinica Odontologica</FONT></a>
                            </li>
                             <li class="nav-item">
                              <a class="nav-link bg-primaryhc text-uppercase text-white" id="trescs" href="#csmulti3" data-toggle="collapse" data-target="#csmulti3" aria-expanded="false" aria-controls="csmulti3" onclick="pasarcs('3')"><FONT SIZE=5>Evoluciones</FONT></a>
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
                                                      <label class="col-form-label"><strong>ENFERMEDAD ACTUAL:</strong></label>
                                                      <textarea class="form-control" rows="5" id="csenfactual" name="enfactual" ></textarea>
                                                    </div>

                                                    <div class="form-group col-md-12">
                                                      <label class="col-form-label"><strong>ANTECEDENTES PERSONALES:</strong></label>
                                                    </div>
      
                                                    <div class="form-group col-md-12">
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                          <label class="col-form-label "><strong>Tratamiento Medico:</strong></label>
                                                          <input class="col-md-4" type="text"  name="cstmedico" id="cstmedico"></input>
                                                        </div>
                                                        <div class="col-md-4">
                                                          <label class="col-form-label "><strong>Ingestion de Alimentos:</strong></label>
                                                          <input class="col-md-4" type="text"  name="csingestion" id="csingestion"></input>
                                                        </div>

                                                        <div class="col-md-4">
                                                          <label class="col-form-label "><strong>Reacciones Alergicas:</strong></label>
                                                          <input class="col-md-4" type="text"  name="csalergica" id="csalergica"></input>
                                                        </div>

                                                        <div class="col-md-4">
                                                          <label class="col-form-label "><strong>Anestesia:</strong></label>
                                                          <input class="col-md-4" type="text"  name="csanestesia" id="csanestesia"></input>
                                                        </div>

                                                        <div class="col-md-4">
                                                          <label class="col-form-label "><strong>Antibioticos:</strong></label>
                                                          <input class="col-md-4" type="text"  name="csantibiotico" id="csantibiotico"></input>
                                                        </div>

                                                        <div class="col-md-4">
                                                          <label class="col-form-label "><strong>Hemorragias:</strong></label>
                                                          <input class="col-md-4" type="text"  name="cshemorragia" id="cshemorragia"></input>
                                                        </div>

                                                        <div class="col-md-4">
                                                          <label class="col-form-label "><strong>Irradiaciones:</strong></label>
                                                          <input class="col-md-4" type="text"  name="csradiacion" id="csradiacion"></input>
                                                        </div>

                                                        <div class="col-md-4">
                                                          <label class="col-form-label "><strong>Enf. Respiratoria:</strong></label>
                                                          <input class="col-md-4" type="text"  name="csrespira" id="csrespira"></input>
                                                        </div>

                                                        <div class="col-md-4">
                                                          <label class="col-form-label "><strong>Cardiopatias:</strong></label>
                                                          <input class="col-md-4" type="text"  name="cscardio" id="cscardio"></input>
                                                        </div>

                                                        <div class="col-md-4">
                                                          <label class="col-form-label "><strong>Artritis:</strong></label>
                                                          <input class="col-md-4" type="text"  name="csartritis" id="csartritis"></input>
                                                        </div>

                                                        <div class="col-md-4">
                                                          <label class="col-form-label "><strong>Terapia Anticuagulante:</strong></label>
                                                          <input class="col-md-4" type="text"  name="cscoagulante" id="cscoagulante"></input>
                                                        </div>

                                                        <div class="col-md-4">
                                                          <label class="col-form-label "><strong>Hepatitis:</strong></label>
                                                          <input class="col-md-4" type="text"  name="cshepatitis" id="cshepatitis"></input>
                                                        </div>

                                                        <div class="col-md-4">
                                                          <label class="col-form-label "><strong>Embarazo:</strong></label>
                                                          <input class="col-md-4" type="text"  name="csembarazo" id="csembarazo"></input>
                                                        </div>

                                                        <div class="col-md-4">
                                                          <label class="col-form-label "><strong>Enf. Renal:</strong></label>
                                                          <input class="col-md-4" type="text"  name="csrenal" id="csrenal"></input>
                                                        </div>

                                                        <div class="col-md-4">
                                                          <label class="col-form-label "><strong>Gastrointestinal:</strong></label>
                                                          <input class="col-md-4" type="text"  name="csgastro" id="csgastro"></input>
                                                        </div>

                                                        <div class="col-md-4">
                                                          <label class="col-form-label "><strong>Antec. Quirurgicos:</strong></label>
                                                          <input class="col-md-4" type="text"  name="csquirurgico" id="csquirurgico"></input>
                                                        </div>

                                                        <div class="col-md-4">
                                                          <label class="col-form-label "><strong>Osteoporosis:</strong></label>
                                                          <input class="col-md-4" type="text"  name="csosteo" id="csosteo"></input>
                                                        </div>  

                                                        <div class="form-group col-md-12">
                                                          <label class="col-form-label"><strong>OTROS:</strong></label>
                                                          <textarea class="form-control" rows="5" id="csotros" name="csotros" ></textarea>
                                                        </div>
                                                        <hr><br>  
                                                        <div class="form-group col-md-12">
                                                          <label class="col-form-label"><strong>OBSERVACIONES:</strong></label>
                                                          <textarea class="form-control" rows="5" id="csobservaciones" name="csobservaciones" ></textarea>
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
                                      <div class="collapse multi-collapse collapse" id="op2cs" data-parent="#accordion3cs">
                                        <div class="">
                                          <div class="form-group col-md-12">
                                            <label class="col-form-label"><strong>Pag. 2 - Ingreso Odontologico</strong></label>
                                          </div>
                                          <div class="accordion form-group col-md-12" id="separacs">
                                            <div class="card">
                                              <div class="card-header" id="headiuno">
                                                  <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#cspad1cs"
                                                  aria-expanded="false" aria-controls="cspad1cs">
                                                    Habitos Odontologicos
                                                  </button>
                                              </div>

                                               <div class="collapse" id="cspad1cs" aria-labelledby="headiuno" data-parent="#separacs">
                                                  <div class="card-body">
                                                    <div class="row">
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Cepillado:</strong></label>
                                                        <input type="text" class="form-control" placeholder="" id="cscepillado" name="cscepillado" required />
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Usa Crema Dental?</strong></label>
                                                        <input type="text" class="form-control"  id="cscrema" name="cscrema" required />
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Normalidad:</strong></label>
                                                        <input type="text" class="form-control"  id="csnormal" name="csnormal" required />
                                                      </div>
                                                    </div>  
                                                    <hr><br><div class="row">
                                                      <div class="form-group col-md-12">
                                                        <label class="col-form-label"><strong>GRADO DE CARIOGENICIDAD:</strong></label>
                                                      </div>

                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Bebidas Azucaradas:</strong></label>
                                                        <input type="text" class="form-control"  id="csazucarada" name="csazucarada" required />
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Masas No Azucaradas:</strong></label>
                                                        <input type="text" class="form-control"  id="csmasasa" name="csmasasa" required />
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Consume Azucar:</strong></label>
                                                        <input type="text" class="form-control"  id="csconsumea" name="csconsumea" required />
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Consume Bebidas Alcoholicas:</strong></label>
                                                        <input type="text" class="form-control"  id="csconsumeb" name="csconsumeb" required />
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label class="col-form-label"><strong>Fuma:</strong></label>
                                                        <input type="text" class="form-control"  id="csfuma" name="csfuma" required />
                                                      </div>
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
                                              <button class="btn btn-primary" type="button" onclick="atraspaginacs()">Atras</button>
                                            </li>
                                        </ul>
                                      </div>
                                    </div>                                  
                                  </div>
                                </div>
                              </div>
                              </form>
                          </div>
                          <div class="collapse multi-collapse collapse" id="csmulti3" data-parent="#accordion2cs">
                            <form >
                            <div class="row">
                                <div class="accordion form-group col-md-12" id="separa4cs">
                                  <div class="card">
                                      <div class="card-header" id="headiuno">
                                        <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#barthel1cs"
                                        aria-expanded="false" aria-controls="barthel1cs">
                                          Evoluciones Odontologicas
                                        </button>
                                      </div>
                                      <div class="collapse" id="barthel1cs" aria-labelledby="headiuno" data-parent="#separa4cs">
                                          <div class="card-body">


                                                  <div class="form-row">
                                                      <div class="form-group col-md-12">
                                                        <label class="col-form-label col-md-6"><strong>FECHA:</strong></label>
                                                        <input class="form-control col-md-4"  id="csfecha" name="csfecha" >
                                                        <label class="col-form-label col-md-6"><strong>HORA:</strong></label>
                                                        <input class="form-control col-md-4"  id="cshora" name="cshora" >
                                                      </div>                                                   

                                                      <div class="form-group col-md-12">
                                                        <label class="col-form-label"><strong>EVOLUCION:</strong></label>
                                                        <textarea class="form-control" rows="5" id="csnota" name="csnota" ></textarea>
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
                                                  <a class="nav-link active bg-danger" id="subop1cse" href="#op1cse" data-toggle="collapse" data-target="#op1cse" aria-expanded="false" aria-controls="op1cse" onclick="doynumeropaginaecse('1');">1</a>
                                                </li>
                                                <li class="nav-item">
                                                  <button class="btn btn-primary" type="button" onclick="atraspaginaecsecse()">Atras</button>
                                                </li>
                                            </ul>
                                          </div>
                                        <div class="form-group col-md-12 text-center" >
                                          <!-- <input type="text" class="form-control" id="csnmedpad3" name="csnmedpad3" style="display:none" value="<?php echo ucwords($this->session->userdata('s_id'));?>" />
                                          <input type="text" class="form-control" id="csnumhc3" name=cs"numhc3" style="display:none" /> -->
                                        </div>


                                      </div>
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
                      <!--<button type="submit" class="btn btn-primary" onclick="">SELECCIONAR</button>-->
                </div>
              </div>
            <!--</form>-->
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
            
            
          }
          function buscarfatencionodonto(){
            op=$('#odontoselimprimirfatencion').val();
            // console.log(op);
          }
          function buscarfecathc(){
             op=$('#odontoselimprimirfatencion').val();
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