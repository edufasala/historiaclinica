 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-7">
            <h1>Consultar Historia Clinica</h1>
          </div>
          <div class="col-sm-5">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Historia Clinica</a></li>
              <li class="breadcrumb-item active">Consultar Historia</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <div class="wrapper">
    <div class="col-12">
    <div class="card">      
              <div class="form-row p-2">                
                <div class="form-group col-md-12">
                </div>
                <div class="accordion form-group col-md-12" id="princi">
                  <div class="card">
                    <div class="card-header" id="headiuno">
                      <button class="btn btn-rosado btn-lg btn-block" type="button" data-toggle="collapse" data-target="#elprinci1"
                      aria-expanded="false" aria-controls="elprinci1">
                        <h3>Datos Personales del Paciente</h3>
                      </button>
                    </div>
                    <div class="collapse" id="elprinci1" aria-labelledby="headiuno" data-parent="#princi">
                      <div class="card-body" >
                        <div class="row">
                          <div class="form-group col-md-4 ">
                            <label for="" class="col-form-label">Debe Seleccionar al Paciente:</label>
                          </div>
                          <div class="form-group col-md-6">
                            
                            <button type="button" class="btn btn-azul btn-lg" data-toggle="modal" id="selecpc" data-target="#seleciona">SELECCIONAR PACIENTE</button>
                          </div>
                        </div>
                        <div class="row" id="datospaciente" style="display:none">
                          <!-- <div class="form-group col-md-12"></div> -->
                          <div class="row">
                          <div class="form-group col-md-3">
                            <label class="col-form-label"><strong>Tipo/Documento</strong></label>
                            <select class="form-control" id="tdoc" name="tdoc">
                              <option selected value="0">Eliga</option>
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
                              <input type="text" class="form-control" placeholder="100100010" id="ndoc" name="ndoc" />
                              <input type="text" class="form-control" id="nid" name="nid" style="display:none" readonly=""/>
                              <input type="text" class="form-control" id="nmed" name="nmed" style="display:none" value="<?php echo ucwords($this->session->userdata('s_n')).', '.ucwords($this->session->userdata('s_ap'));?>" />
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
                              <input type="text" class="form-control" placeholder="Nombres" id="pnombre" name="pnombre" />
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
                              <input type="text" class="form-control" placeholder="Apellidos" id="pape" name="pape" />
                            </div>
                          </div>
                          <div class="form-group col-md-4">
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
                          </div>
                          <!-- <div class="form-group col-md-12 text-center">
                            <button type="button" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmar">ACTUALIZAR</button>
                          </div> -->
                          <div class="box-time"></div>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <button type="button" class="btn" style="background:#59cbff">color</button>
                <button type="button" class="btn" style="background:#adf7bb">color 2</button>
                <button type="button" class="btn" style="background:#ae80ff">color 3</button> -->
                <div class="accordion form-group col-md-12" id="princi2">
                <div class="card">
                <div class="card-header" id="headiuno">
                  <button class="btn btn-rosado btn-lg btn-block" type="button" data-toggle="collapse" data-target="#elprinci2"
                  aria-expanded="false" aria-controls="elprinci2">
                    <h3>Gestion Procesos de Apoyo</h3>
                  </button>
                </div>
                <div class="collapse" id="elprinci2" aria-labelledby="headiuno" data-parent="#princi2">
                  <div class="card-body" >

                <div class="col-md-12">
                  <div class="card-header">
                    <ul class="nav nav-tabs nav-justified"><!-- primary btn-lg btn-block -->
                        <li class="nav-item">
                          <a class="nav-link active text-uppercase bg-white " id="uno" href="#multi1" data-toggle="collapse" data-target="#multi1" aria-expanded="false" aria-controls="multi1" onclick="pasar('1')"><FONT SIZE=5>Historia Clinica Primera Vez</FONT></a>
                        </li>
                        <!-- <li class="nav-item">
                          <a class="nav-link bg-primaryhc text-uppercase text-white"  id="dos" href="#multi2" data-toggle="collapse" data-target="#multi2" aria-expanded="false" aria-controls="multi2" onclick="pasar('2')"><FONT SIZE=5>Concentimiento</FONT></a>
                        </li> -->
                         <li class="nav-item">
                          <a class="nav-link bg-primaryhc text-uppercase text-white" id="tres" href="#multi3" data-toggle="collapse" data-target="#multi3" aria-expanded="false" aria-controls="multi3" onclick="pasar('3')"><FONT SIZE=5>Barthel</FONT></a>
                        </li>
                         <li class="nav-item">
                          <a class="nav-link bg-primaryhc text-uppercase text-white" id="cua" href="#multi4" data-toggle="collapse" data-target="#multi4" aria-expanded="false" aria-controls="multi4" onclick="pasar('4')"><FONT SIZE=5>Valoracion</FONT></a>
                        </li>
                         <li class="nav-item">
                          <a class="nav-link bg-primaryhc text-uppercase text-white" id="cin" href="#multi5" data-toggle="collapse" data-target="#multi5" aria-expanded="false" aria-controls="multi5" onclick="pasar('5')"><FONT SIZE=5>Norton</FONT></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link bg-primaryhc text-uppercase text-white" id="sei" href="#multi6" data-toggle="collapse" data-target="#multi6" aria-expanded="false" aria-controls="multi6" onclick="pasar('6')"><FONT SIZE=5>Braden Q</FONT></a>
                        </li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <div class="accordion" id="accordion2">
                      <div class="collapse multi-collapse collapse show" id="multi1" data-parent="#accordion2">
                        <form id="hcpad" action="#" method="POST">
                        <div class="form-row p-2">
                          <div class="form-group col-md-12">
                            <div class="card-header">
                              <div class="accordion" id="accordion3">
                                <div class="collapse multi-collapse collapse show" id="op1" data-parent="#accordion3">
                                  <div class="row">
                                    <div class="form-group col-md-6">
                                      <label for="nombre" class="col-form-label"><strong>N° Historia Clinica:</strong></label>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="N° Historia Clinica" id="numhc" name="numhc" readonly="" />
                                      </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                      <label class="col-form-label"><strong>Motivo Consulta:</strong></label>
                                      <textarea class="form-control" id="mconsuta" name="mconsuta" onkeypress="" required></textarea>
                                    </div>
                                    <div class="accordion form-group col-md-12" id="accordion">
                                      <div class="card">
                                        <div class="card-header" id="headiuno">
                                          <button class="btn btn-verde btn-lg btn-block"  type="button" data-toggle="collapse" data-target="#collapseuno"
                                          aria-expanded="false" aria-controls="collapseuno">
                                            Enfermedad y Antecedentes
                                          </button>
                                        </div>
                                        <div class="collapse" id="collapseuno" aria-labelledby="headiuno" data-parent="#accordion">
                                          <div class="card-body">
                                            <div class="form-row">
                                              <div class="form-group col-md-12">
                                                <label class="col-form-label"><strong>Enfermedad Actual:</strong></label>
                                                <textarea class="form-control" id="enfactual" name="enfactual" onkeypress="" required></textarea>
                                              </div>
                                              <div class="form-group col-md-12">
                                                <label class="col-form-label"><strong>Antecedentes Personales:</strong></label>
                                              </div>
                                              <div class="form-group col-md-6">
                                                <label class="col-form-label"><strong>Antecedentes Patologicos:</strong></label>
                                                <textarea class="form-control" id="apatologicos" name="apatologicos" onkeypress="" required></textarea>
                                              </div>
                                              <div class="form-group col-md-6">
                                                <label class="col-form-label"><strong>Antecedentes Quirurgicos:</strong></label>
                                                <textarea class="form-control" id="aquirurgicos" name="aquirurgicos" onkeypress="" required></textarea>
                                              </div>
                                              <div class="form-group col-md-6">
                                                <label class="col-form-label"><strong>Antecedentes Farmacologicos:</strong></label>
                                                <textarea class="form-control" id="afarmacologicos" name="afarmacologicos" onkeypress="" required></textarea>
                                              </div>
                                              <div class="form-group col-md-6">
                                                <label class="col-form-label"><strong>Antecedentes Toxico Akergicos:</strong></label>
                                                <textarea class="form-control" id="aalergicos" name="aalergicos" onkeypress="" required></textarea>
                                              </div>
                                              <div class="form-group col-md-6">
                                                <label class="col-form-label"><strong>Antecedentes Traumaticos:</strong></label>
                                                <textarea class="form-control" id="atraumaticos" name="atraumaticos" onkeypress="" required></textarea>
                                              </div>
                                              <div class="form-group col-md-6">
                                                <label class="col-form-label"><strong>Antecedentes Familiares:</strong></label>
                                                <textarea class="form-control" id="afamiliares" name="afamiliares" onkeypress="" required></textarea>
                                              </div>
                                              <div class="form-group col-md-6">
                                                <label class="col-form-label"><strong>Antecedentes Transfucionales:</strong></label>
                                                <textarea class="form-control" id="atransfucionales" name="atransfucionales" onkeypress="" required></textarea>
                                              </div>
                                              <div class="form-group col-md-6">
                                                <label class="col-form-label"><strong>Antecedentes Ginecologicos:</strong></label>
                                                <textarea class="form-control" id="aginecologicos" name="aginecologicos" onkeypress="" required></textarea>
                                              </div>
                                              <div class="form-group col-md-6">
                                                <label class="col-form-label"><strong>Antecedentes Exposicionales:</strong></label>
                                                <textarea class="form-control" id="aexposicionales" name="aexposicionales" onkeypress="" required></textarea>
                                              </div>
                                              <div class="form-group col-md-6">
                                                <label class="col-form-label"><strong>Antecedentes Otros:</strong></label>
                                                <textarea class="form-control" id="aotros" name="aotros" onkeypress="" required></textarea>
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
                                <div class="collapse multi-collapse collapse" id="op2" data-parent="#accordion3">
                                  <div class="">
                                    <div class="form-group col-md-12">
                                      <label class="col-form-label"><strong>Pag. 2 - Ingreso Pad</strong></label>
                                    </div>
                                    <div class="accordion form-group col-md-12" id="separa">
                                      <div class="card">
                                        <div class="card-header" id="headiuno">
                                            <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#cspad1"
                                            aria-expanded="false" aria-controls="cspad1">
                                              Revision Por Sistemas
                                            </button>
                                          </div>
                                          <div class="collapse" id="cspad1" aria-labelledby="headiuno" data-parent="#separa">
                                            <div class="card-body">
                                              <div class="row">
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Endocrinologico:</strong></label>
                                                  <input type="text" class="form-control" placeholder="RxS" id="endocrinologico" name="endocrinologico" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Organos de los Sentidos:</strong></label>
                                                  <input type="text" class="form-control" placeholder="RxS" id="organos" name="organos" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Cardiopulmonar:</strong></label>
                                                  <input type="text" class="form-control" placeholder="RxS" id="cardiopulmonar" name="cardiopulmonar" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Gastrointestinal:</strong></label>
                                                  <input type="text" class="form-control" placeholder="RxS" id="gastrointestinal" name="gastrointestinal" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Genitourinario:</strong></label>
                                                  <input type="text" class="form-control" placeholder="RxS" id="rvsgenitourinario" name="rvsgenitourinario" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Osteomuscular:</strong></label>
                                                  <input type="text" class="form-control" placeholder="RxS" id="osteomuscular" name="osteomuscular" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Neurologico:</strong></label>
                                                  <input type="text" class="form-control" placeholder="RxS" id="neurologico" name="neurologico" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Piel y Farenas:</strong></label>
                                                  <input type="text" class="form-control" placeholder="RxS" id="farenas" name="farenas" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Otros:</strong></label>
                                                  <input type="text" class="form-control" placeholder="RxS" id="rvsotros" name="rvsotros" required />
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                      <div class="card">
                                        <div class="card-header" id="headidos">
                                            <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#cspad2"
                                            aria-expanded="false" aria-controls="cspad2">
                                              Examen Fisico
                                            </button>
                                          </div>
                                          <div class="collapse" id="cspad2" aria-labelledby="headidos" data-parent="#separa">
                                            <div class="card-body">
                                              <div class="row">
                                                <div class="form-group col-md-6">
                                                  <label for="" class="col-form-label"><strong>Estado General:</strong></label>
                                                  <select class="form-control" id="tipoegeneral" name="tipoegeneral" required>
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
                                                  <select class="form-control" id="tipoeconciencia" name="tipoeconciencia" required>
                                                    <option selected value="0">Elija</option>
                                                    <option value="NF">Normal</option>
                                                    <option value="1">Alerta</option>
                                                    <option value="2">Somnoliento</option>
                                                    <option value="3">Estupor</option>
                                                    <option value="4">Confuso</option>
                                                    <option value="5">Comnubilado</option>
                                                    <option value="6">Coma</option>
                                                    <option value="7">Fallecido</option>
                                                  </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label for="" class="col-form-label"><strong>Estado de Hidratacion:</strong></label>
                                                  <select class="form-control" id="tipoehidratacion" name="tipoehidratacion" required>
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
                                                  <input type="text" class="form-control" placeholder="Bien, Malo, Regular" id="erespiratorio" name="erespiratorio" required />
                                                </div>
                                                <div class="form-group col-md-4">
                                                  <label class="col-form-label"><strong>Frecuencia Cardiaca</strong></label>
                                                  <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text">
                                                        <img src="<?php echo base_url();?>assets/img/fc.jpg" class="rounded-circle" width="150px" height="180px">
                                                      </span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="" id="fc" name="fc" minlength="1" maxlength="6" pattern="\S[0-9A-Za-z, ]{1,6}" required />
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
                                                    <input type="text" class="form-control" placeholder="" id="fr" name="fr" minlength="1" maxlength="8" pattern="\S[A-Za-z0-9,. ]{1,8}" required />
                                                  </div>
                                                </div>
                                                <div class="form-group col-md-4">
                                                  <!-- <label class="col-form-label"><strong>Sistole</strong></label>  
                                                  <input type="text" class="form-control" placeholder="" id="sis"  minlength="1" maxlength="6" pattern="\S[A-Za-z0-9 ]{1,6}" required />
                                                  <label class="col-form-label"><strong>Diastole</strong></label>
                                                  <input type="text" class="form-control" placeholder="" id="dias"   minlength="1" maxlength="6" pattern="\S[A-Za-z0-9 ]{1,6}" required /> -->
                                                  <label class="col-form-label"><strong>TENSION ARTERIAL MEDIA:</strong></label>
                                                  <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text">
                                                        <img src="<?php echo base_url();?>assets/img/ta.jpg" class="rounded-circle" width="22px" height="22px">
                                                      </span>
                                                    </div>              
                                                    <input type="text" class="form-control" placeholder="" id="ta" name="ta" minlength="1" maxlength="6" pattern="\S[A-Za-z0-9 ]{1,6}" required />
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
                                                    <input type="text" class="form-control" placeholder="" id="temp" name="temp" required />
                                                  </div>
                                                </div>
                                                <div class="form-group col-md-4">
                                                  <label class="col-form-label"><strong>TAC</strong></label>
                                                  <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text">
                                                        <img src="<?php echo base_url();?>assets/img/sac.jpg" class="rounded-circle" width="150px" height="150px">
                                                      </span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="" id="sac" name="sac" minlength="1" maxlength="6" pattern="\S[A-Za-z0-9,. ]{1,6}" required />
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
                                                    <input type="text" class="form-control" placeholder="" id="gluc" name="gluc" minlength="1" maxlength="6" pattern="\S[A-Za-z0-9,. ]{1,6}" required />
                                                  </div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                 <!--  <label class="col-form-label"><strong>Descripcion del Examen:</strong></label>
                                                  <textarea class="form-control" id="dexamen" name="dexamen" onkeypress="return cmTexto(event);" required></textarea> -->
                                                </div>

                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Cabeza:</strong></label>
                                                  <input type="text" class="form-control" placeholder="" id="cabeza" name="cabeza" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Ojos:</strong></label>
                                                  <input type="text" class="form-control" placeholder="RxS" id="ojos" name="ojos" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Boca - Mucosa oral:</strong></label>
                                                  <input type="text" class="form-control" placeholder="RxS" id="boca" name="boca" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Cuello:</strong></label>
                                                  <input type="text" class="form-control" placeholder="RxS" id="cuello" name="cuello" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Torax/Mamas:</strong></label>
                                                  <input type="text" class="form-control" placeholder="RxS" id="torax" name="torax" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>CardioPulmonar:</strong></label>
                                                  <input type="text" class="form-control" placeholder="RxS" id="cpulmonar" name="cpulmonar" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Abdomen:</strong></label>
                                                  <input type="text" class="form-control" placeholder="RxS" id="abdomen" name="abdomen" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Genitourinario:</strong></label>
                                                  <input type="text" class="form-control" placeholder="RxS" id="genitourinario" name="genitourinario" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Extremidades:</strong></label>
                                                  <input type="text" class="form-control" placeholder="RxS" id="extremidades" name="extremidades" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>SNC:</strong></label>
                                                  <input type="text" class="form-control" placeholder="RxS" id="snc" name="snc" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Mental:</strong></label>
                                                  <input type="text" class="form-control" placeholder="RxS" id="mental" name="mental" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Piel:</strong></label>
                                                  <input type="text" class="form-control" placeholder="RxS" id="piel" name="piel" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Otros:</strong></label>
                                                  <input type="text" class="form-control" placeholder="RxS" id="otros" name="otros" required />
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                    </div>  
                                  </div>
                                </div>
                                <div class="collapse multi-collapse collapse" id="op3" data-parent="#accordion3">
                                  <div class="form-row">
                                    <div class="form-group col-md-12">
                                      <label class="col-form-label"><strong>Pag. 3 - Ingreso Pad</strong></label>
                                    </div>
                                    <div class="accordion form-group col-md-12" id="separa2">
                                      <div class="card">
                                        <div class="card-header" id="headiuno">
                                            <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#cspad3"
                                            aria-expanded="false" aria-controls="cspad3">
                                              Acceso Venoso, Ostomia, Sondas
                                            </button>
                                          </div>
                                          <div class="collapse" id="cspad3" aria-labelledby="headiuno" data-parent="#separa2">
                                            <div class="card-body">
                                              <div class="row">
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Acceso Venoso:</strong></label>
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="acceso_venoso[]" id="acceso_venoso1" onclick="" value="No Selecciona">
                                                          <label class="form-check-label">No Selecciona</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="acceso_venoso[]" id="acceso_venoso2" onclick=""  value="Periferico" >
                                                          <label class="form-check-label">Periferico</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="acceso_venoso[]" id="acceso_venoso3" onclick=""  value="Central Subclavio">
                                                          <label class="form-check-label">Central Subclavio</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="acceso_venoso[]" id="acceso_venoso4" onclick=""  value="Central Yugular" >
                                                          <label class="form-check-label">Central Yugular</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="acceso_venoso[]" id="acceso_venoso5" onclick="" value="Central Femoral">
                                                          <label class="form-check-label">Central Femoral</label>
                                                        </div>
                                                        <div class="form-group"></br>
                                                          <label class="col-form-label">Estado Cateter</label>
                                                          <input type="text" class="form-control" id="accateter" name="accateter" placeholeder="activo" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="acceso_venoso[]" id="acceso_venoso6" onclick=""  value="Drum" >
                                                        <label class="form-check-label">Drum</label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="acceso_venoso[]" id="acceso_venoso7" onclick=""  value="PVC">
                                                        <label class="form-check-label">PVC</label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="acceso_venoso[]" id="acceso_venoso8" onclick=""  value="Implantado" >
                                                        <label class="form-check-label">Implantado</label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="acceso_venoso[]" id="acceso_venoso9" onclick=""  value="Subcutaneo" >
                                                        <label class="form-check-label">Subcutaneo</label>
                                                        <input class="forrm-control" type="text" id="" name="" style="display:none" >
                                                      </div>
                                                      <div class="form-group"></br></br>
                                                        <label class="col-form-label">Fecha Insercion</label>
                                                        <input class="form-control" type="text" id="acfinsercion" name="acfinsercion" style="display:" >
                                                        <input class="form-control" type="text" id="auxvenoso" name="auxvenoso" style="display:none" >
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Ostomia:</strong></label>
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="ostomina[]" id="ostomina1" onclick="" value="No Selecciona">
                                                        <label class="form-check-label">No Selecciona</label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="ostomina[]" id="ostomina2" onclick=""  value="Traqueostomia" >
                                                        <label class="form-check-label">Traqueostomia</label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="ostomina[]" id="ostomina3" onclick=""  value="Yeyunostomia">
                                                        <label class="form-check-label">Yeyunostomia</label>
                                                      </div>
                                                      
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="ostomina[]" id="ostomina5" onclick="" value="Ileostomia">
                                                        <label class="form-check-label">Ileostomia</label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="ostomina[]" id="ostomina6" onclick=""  value="Urostomia" >
                                                        <label class="form-check-label">Urostomia</label>
                                                      </div>
                                                      <div class="form-group"></br>
                                                        <label class="col-form-label">Estado Ostomia</label>
                                                        <input type="text" class="form-control" id="oeostomina" name="oeostomina" placeholeder="activo" />
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="ostomina[]" id="ostomina7" onclick=""  value="Colostomia">
                                                        <label class="form-check-label">Colostomia</label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="ostomina[]" id="ostomina4" onclick=""  value="Otra" >
                                                        <label class="form-check-label">Otra</label>
                                                      </div>
                                                      <div class="form-group">
                                                        <label class="col-form-label">Cual ?</label>
                                                        <input type="text" class="form-control" id="ocualostomina" name="ocualostomina" placeholeder="activo" />
                                                      </div>
                                                      <div class="form-group">
                                                        <label class="col-form-label">Fecha Ostomia</label>
                                                        <input class="form-control" type="text" id="ofostomina" name="ofostomina" style="display:" >
                                                        <input class="form-control" type="text" id="auxostomia" name="auxostomia" style="display:none" >
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                  <label class="col-form-label"><strong>Sondas:</strong></label>
                                                  <div class="row">
                                                    <div class="col-md-3">
                                                       <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="vesical[]" id="vesical1" onclick="" value="No Selecciona">
                                                          <label class="form-check-label">No Selecciona</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="vesical[]" id="vesical2" onclick=""  value="Nasogastrica" >
                                                          <label class="form-check-label">Nasogastrica</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="vesical[]" id="vesical3" onclick=""  value="Nasoyeyunal">
                                                          <label class="form-check-label">Nasoyeyunal</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="vesical[]" id="vesical4" onclick=""  value="Gastrostomia" >
                                                          <label class="form-check-label">Gastrostomia</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="vesical[]" id="vesical6" onclick=""  value="Yeyunostomia" >
                                                          <label class="form-check-label">Yeyunostomia</label>
                                                        </div>
                                                        <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="vesical[]" id="vesical7" onclick=""  value="Cistostomia">
                                                          <label class="form-check-label">Cistostomia</label>
                                                        </div>
                                                        <div class="form-group">
                                                          <label class="col-form-label">Estado</label>
                                                          <input type="text" class="form-control" id="sondaestado" name="sondaestado" placeholeder="activo" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                      <div class="form-check"></div>                            
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="vesical[]" id="vesical8" onclick=""  value="Vesical" >
                                                        <label class="form-check-label">Vesical</label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="vesical[]" id="vesical5" onclick="" value="Otra">
                                                        <label class="form-check-label">Otra</label>
                                                      </div>
                                                      <div class="form-group">
                                                          <label class="col-form-label">Cual ?</label>
                                                          <input type="text" class="form-control" id="cualsonda" name="cualsonda" placeholeder="activo" />
                                                        </div>
                                                      <div class="form-group">
                                                        <label class="col-form-label">Fecha Postura</label>
                                                        <input class="form-control" type="text" id="sfpostura" name="sfpostura" style="display:" >
                                                        <input class="form-control" type="text" id="auxsonda" name="auxsonda" style="display:none" >
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
                                            <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#cspad4"
                                            aria-expanded="false" aria-controls="cspad4">
                                              Escala de Dolor
                                            </button>
                                          </div>
                                          <div class="collapse" id="cspad4" aria-labelledby="headidos" data-parent="#separa2">
                                            <div class="card-body">
                                              <div class="row">
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label">Region</label>
                                                  <input type="text" class="form-control" id="edregion" name="edregion" placeholeder="activo" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label">Irradiacion</label>
                                                  <input type="text" class="form-control" id="edirradiacion" name="edirradiacion" placeholeder="activo" />
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
                                                  <input type="range" class="form-control-range" id="dolorn" name="dolorn" value="5" min="0" max="10" step="1" onchange="mostrarimgescala()">
                                                  <div class="row">
                                                    <div class="col-md-12 text-center">
                                                      <img src="<?php echo base_url();?>assets/img/c6.jpeg" id="mcara" class="rounded-circle" width="100" height="100">
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
                                                  <!-- <input type="text" class="form-control" id="" name="" style="display:none" readonly="" /> -->
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
                                                          <input class="form-check-input" type="checkbox" name="tipodolor[]" id="tipodolor1" onclick="" value="No Selecciona">
                                                          <label class="form-check-label">No Selecciona</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="tipodolor[]" id="tipodolor2" onclick=""  value="Visceral" >
                                                          <label class="form-check-label">Visceral</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="tipodolor[]" id="tipodolor3" onclick=""  value="Oseo">
                                                          <label class="form-check-label">Oseo</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="tipodolor[]" id="tipodolor4" onclick=""  value="Tejidos Blandos" >
                                                          <label class="form-check-label">Tejidos Blandos</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="tipodolor[]" id="tipodolor5" onclick="" value="Neuropatico">
                                                          <label class="form-check-label">Neuropatico</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="tipodolor[]" id="tipodolor6" onclick=""  value="Mixto" >
                                                          <label class="form-check-label">Mixto</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="tipodolor[]" id="tipodolor7" onclick=""  value="Incidental">
                                                          <label class="form-check-label">Incidental</label>
                                                          <input type="text" class="form-control" id="auxdolor" name="auxdolor" style="display:none"/>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                  <label class="col-form-label"><strong>Tratamiento Previo:</strong></label>
                                                  <div class="row">
                                                    <div class="form-group col-md-2">
                                                      <div class="form-check"><br><br>
                                                        <input class="form-check-input" type="radio"  name="tprevio" id="tprevio1" onclick="" value="si">
                                                        <label class="form-check-label">Si</label>
                                                      </div>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                      <div class="form-check"><br><br>
                                                        <input class="form-check-input" type="radio"  name="tprevio" id="tprevio2" onclick="" value="no">
                                                        <label class="form-check-label">No</label>
                                                        <input class="forrm-control" type="text" id="auxtp" name="auxtp" style="display:none" >
                                                      </div>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label">Cual ?</label>
                                                        <input type="text" class="form-control" id="cualtprevio" name="cualtprevio" placeholeder="activo" />
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                      <label for="" class="col-form-label"><strong>Alivio:</strong></label>
                                                      <select class="form-control" id="tpalivio" name="tpalivio" required>
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
                                            <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#cspad5"
                                            aria-expanded="false" aria-controls="cspad5">
                                              Plan de Manejo
                                            </button>
                                          </div>
                                          <div class="collapse" id="cspad5" aria-labelledby="headidos" data-parent="#separa2">
                                            <div class="card-body">
                                              <div class="row">
                                                <div class="form-group col-md-12">
                                                  <label class="form-label">Programa al Que Ingresa:</label>
                                                  <input class="form-control" type="text" id="progrmaingreso" name="progrmaingreso"  >
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
                                                            <input class="form-check-input" type="radio"  name="noxigeno" id="noxigeno1" onclick="" value="si">
                                                            <label class="form-check-label">Si</label>
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                          <div class="form-check"><br><br>
                                                            <input class="form-check-input" type="radio"  name="noxigeno" id="noxigeno2" onclick="" value="no">
                                                            <label class="form-check-label">No</label>
                                                            <input class="forrm-control" type="text" id="auxnoxigeno" name="auxnoxigeno" style="display:none" >
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="form-group col-md-7 mt-2 pt-2">
                                                      <label class="form-label">Detalle:</label>
                                                      <input class="form-control" type="text" id="eldtnoxigeno" name="eldtnoxigeno"  >
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label class="">Dieta:</label>
                                                    <input class="form-control" type="text" id="pmdieta" name="pmdieta"  >
                                                </div>
                                                <div class="form-group col-md-12">
                                                  <label class="col-form-label"><strong>Medicamentos:</strong></label>
                                                  <textarea class="form-control" id="losmd" name="losmd" readonly=""></textarea>
                                                </div>
                                                <div class="form-group col-md-12">
                                                  <label class="col-form-label"><strong>Analisis:</strong></label>
                                                  <!-- <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text">
                                                        <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                                                      </span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="" id="analisis" name="analisis" required />
                                                  </div> -->
                                                  <textarea class="form-control" id="analisis" name="analisis" rows="8" required></textarea>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                                    
                                  </div>
                                </div>
                                <div class="collapse multi-collapse collapse" id="op4" data-parent="#accordion3">
                                  <div class="form-row">
                                    <div class="form-group col-md-12">
                                      <label class="col-form-label"><strong>Pag. 4 - Ingreso Pad</strong></label>
                                    </div>
                                    <div class="accordion form-group col-md-12" id="separa3">
                                      <div class="card">
                                        <div class="card-header" id="headiuno">
                                            <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#cspad6"
                                            aria-expanded="false" aria-controls="cspad6">
                                              Diagnosticos
                                            </button>
                                          </div>
                                          <div class="collapse" id="cspad6" aria-labelledby="headiuno" data-parent="#separa3">
                                            <div class="card-body">
                                              <div class="row">
                                                <div class="form-group col-md-12">
                                                  <label class="col-form-label"><strong>Diagnosticos:</strong></label>
                                                  <textarea class="form-control" id="losdig" name="losdig" readonly=""></textarea>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                      <div class="card">
                                        <div class="card-header" id="headidos">
                                            <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#cspad7"
                                            aria-expanded="false" aria-controls="cspad7">
                                              Determinacion de atencion y manejo
                                            </button>
                                          </div>
                                          <div class="collapse" id="cspad7" aria-labelledby="headidos" data-parent="#separa3">
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
                                                                <input class="form-check-input" type="radio"  name="snmedico" id="aycmedico1" onclick="" value="si">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="snmedico" id="aycmedico2" onclick="" value="no">
                                                                <label class="form-check-label">No</label>
                                                                <input class="forrm-control" type="text" id="auxaycmedico" name="auxaycmedico" style="display:none" >
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Detalle</label>
                                                            <textarea class="form-control" id="eldtsnmedico" name="eldtsnmedico" required></textarea>
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
                                                                <input class="form-check-input" type="radio"  name="snenfermera" id="aycenfermera1" onclick="" value="si">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="snenfermera" id="aycenfermera2" onclick="" value="no">
                                                                <label class="form-check-label">No</label>
                                                                <input type="text" class="form-control" id="auxaycenfermera" name="auxaycenfermera" style="display:none"/>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Detalle</label>
                                                             <textarea class="form-control" id="eldtenfermera" name="eldtenfermera" required></textarea>
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
                                                                <input class="form-check-input" type="radio"  name="sntrabajosocial" id="ayctsocial1" onclick="" value="si">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="sntrabajosocial" id="ayctsocial2" onclick="" value="no">
                                                                <label class="form-check-label">No</label>
                                                                <input type="text" class="form-control" id="auxayctsocial" name="auxayctsocial" style="display:none"/>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Detalle</label>
                                                             <textarea class="form-control" id="eldttrabajosocial" name="eldttrabajosocial" required></textarea>
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
                                                                <input class="form-check-input" type="radio"  name="snnutricion" id="aycnutricion1" onclick="" value="si">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="snnutricion" id="aycnutricion2" onclick="" value="no">
                                                                <label class="form-check-label">No</label>
                                                                <input type="text" class="form-control" id="auxaycnutricion" name="auxaycnutricion" style="display:none"/>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Detalle</label>
                                                             <textarea class="form-control" id="eldtnutricion" name="eldtnutricion" required></textarea>
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
                                                                <input class="form-check-input" type="radio"  name="snfisioterapia" id="aycfisioterapia1" onclick="" value="si">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="snfisioterapia" id="aycfisioterapia2" onclick="" value="no">
                                                                <label class="form-check-label">No</label>
                                                                <input type="text" class="form-control" id="auxaycfisioterapia" name="auxaycfisioterapia" style="display:none"/>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Detalle</label>
                                                             <textarea class="form-control" id="eldtfisioterapia" name="eldtfisioterapia" required></textarea>
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
                                                                <input class="form-check-input" type="radio"  name="sntrespiratoria" id="ayctrespiratoria1" onclick="" value="si">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="sntrespiratoria" id="ayctrespiratoria2" onclick="" value="no">
                                                                <label class="form-check-label">No</label>
                                                                <input type="text" class="form-control" id="auxayctrespiratoria" name="auxayctrespiratoria" style="display:none"/>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Detalle</label>
                                                             <textarea class="form-control" id="eldttrespiratoria" name="eldttrespiratoria" required></textarea>
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
                                                                <input class="form-check-input" type="radio"  name="sntocupacional" id="ayctocupacional1" onclick="" value="si">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="sntocupacional" id="ayctocupacional2" onclick="" value="no">
                                                                <label class="form-check-label">No</label>
                                                                <input type="text" class="form-control" id="auxayctocupacional" name="auxayctocupacional" style="display:none"/>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Detalle</label>
                                                             <textarea class="form-control" id="eldttocupacional" name="eldttocupacional" required></textarea>
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
                                                                <input class="form-check-input" type="radio"  name="sntlenguaje" id="ayctlenguaje1" onclick="" value="si">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="sntlenguaje" id="ayctlenguaje2" onclick="" value="no">
                                                                <label class="form-check-label">No</label>
                                                                <input type="text" class="form-control" id="auxayctlenguaje" name="auxayctlenguaje" style="display:none"/>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Detalle</label>
                                                             <textarea class="form-control" id="eldttlenguaje" name="eldttlenguaje" required></textarea>
                                                        </div>
                                                      </div>  
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                      <label class="col-form-label text-uppercase"><strong>Aux. Enfermeria:</strong></label>
                                                      <div class="row">
                                                        <div class="form-group col-md-6">                                                  
                                                          <div class="row">
                                                            <div class="form-group col-md-6">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="snauxenfermeria" id="auxenfermeria1" onclick="" value="si">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="snauxenfermeria" id="auxenfermeria2" onclick="" value="no">
                                                                <label class="form-check-label">No</label>
                                                                <input type="text" class="form-control" id="auxauxenfermeria" name="auxauxenfermeria" style="display:none"/>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Detalle</label>
                                                             <textarea class="form-control" id="otroenfermeria" name="otroenfermeria" required></textarea>                                                        </div>
                                                      </div>  
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                      <label class="col-form-label text-uppercase"><strong>Educacion:</strong></label>
                                                      <div class="row">
                                                        <div class="form-group col-md-6">                                                  
                                                          <div class="row">
                                                            <div class="form-group col-md-6">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="sneducacion" id="ayceducacion1" onclick="" value="si">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="sneducacion" id="ayceducacion2" onclick="" value="no">
                                                                <label class="form-check-label">No</label>
                                                                <input type="text" class="form-control" id="auxayceducacion" name="auxayceducacion" style="display:none"/>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label>Detalle</label>
                                                             <textarea class="form-control" id="eldteducacion" name="eldteducacion" required></textarea>
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
                                                                <input class="form-check-input" type="radio"  name="snparaclinicos" id="snparaclinicos1" onclick="" value="si">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="snparaclinicos" id="snparaclinicos2" onclick="" value="no">
                                                                <label class="form-check-label">No</label>
                                                                <input type="text" class="form-control" id="auxaycparaclinicos" name="auxaycparaclinicos" style="display:none"/>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Detalle</label>
                                                             <textarea class="form-control" id="eldtparaclinicos" name="eldtparaclinicos" required></textarea>
                                                        </div>
                                                      </div>  
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                      <label>Valoraciones</label>
                                                      <input class="form-control" type="text" id="pmvaloraciones" name="pmvaloraciones">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                      <label>Recomendaciones y Signos de Alarma</label>
                                                      <input class="form-control" type="text" id="pmrecomendacionessignos" name="pmrecomendacionessignos">
                                                    </div>

                                                  </div>
                                                </div>                                               
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                      <div class="card">
                                        <div class="card-header" id="headidos">
                                            <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#cspad8"
                                            aria-expanded="false" aria-controls="cspad8">
                                              ESAS (24H)
                                            </button>
                                          </div>
                                          <div class="collapse" id="cspad8" aria-labelledby="headidos" data-parent="#separa3">
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
                                                    <input type="range" class="form-control-range" id="esasdolor" name="esasdolor" value="5" min="0" max="10" step="1">
                                                    <!-- <input type="text" class="form-control" id="" name="" style="display:none" /> -->
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
                                                    <input type="range" class="form-control-range" id="esascansancio" name="esascansancio" value="5" min="0" max="10" step="1">
                                                    <!-- <input type="text" class="form-control" id="" name="" style="display:none" /> -->
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
                                                    <input type="range" class="form-control-range" id="esasnauseas" name="esasnauseas" value="5" min="0" max="10" step="1">
                                                    <!-- <input type="text" class="form-control" id="" name="" style="display:none" /> -->
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
                                                    <input type="range" class="form-control-range" id="esastristesa" name="esastristesa" value="5" min="0" max="10" step="1">
                                                    <!-- <input type="text" class="form-control" id="" name="" style="display:none" /> -->
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
                                                    <input type="range" class="form-control-range" id="esasangustia" name="esasangustia" value="5" min="0" max="10" step="1">
                                                    <!-- <input type="text" class="form-control" id="" name="" style="display:none" /> -->
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
                                                    <input type="range" class="form-control-range" id="esassomnolencia" name="esassomnolencia" value="5" min="0" max="10" step="1">
                                                    <!-- <input type="text" class="form-control" id="" name="" style="display:none" /> -->
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
                                                    <input type="range" class="form-control-range" id="esasapetito" name="esasapetito" value="5" min="0" max="10" step="1">
                                                    <!-- <input type="text" class="form-control" id="" name="" style="display:none" /> -->
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
                                                    <input type="range" class="form-control-range" id="esasdisnea" name="esasdisnea" value="5" min="0" max="10" step="1">
                                                    <!-- <input type="text" class="form-control" id="" name="" style="display:none" /> -->
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
                                                    <input type="range" class="form-control-range" id="esasinsomnio" name="esasinsomnio" value="5" min="0" max="10" step="1">
                                                    <!-- <input type="text" class="form-control" id="" name="" style="display:none" /> -->
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
                                                    <input type="range" class="form-control-range" id="esasestrenimiento" name="esasestrenimiento" value="5" min="0" max="10" step="1">
                                                    <!-- <input type="text" class="form-control" id="" name="" style="display:none" /> -->
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
                                                    <input type="range" class="form-control-range" id="esasbienestar" name="esasbienestar" value="5" min="0" max="10" step="1">
                                                    <!-- <input type="text" class="form-control" id="" name="" style="display:none" /> -->
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                      <div class="card">
                                        <div class="card-header" id="headidos">
                                            <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#cspad9"
                                            aria-expanded="false" aria-controls="cspad9">
                                              ECAF
                                            </button>
                                          </div>
                                          <div class="collapse" id="cspad9" aria-labelledby="headidos" data-parent="#separa3">
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
                                                    <label for="formControlRange">Gestos de Disconfort</label>
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
                                                    <input type="range" size="20" class="form-control-range" id="ecafdisconfort" name="ecafdisconfort" onchange="ecaf()" value="2" min="0" max="4" step="1">
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
                                                    <input type="range" class="form-control-range" id="ecafquebido" name="ecafquebido" onchange="ecaf()" value="2" min="0" max="4" step="1">
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
                                                    <input type="range" class="form-control-range" id="ecafgrito" name="ecafgrito" onchange="ecaf()" value="2" min="0" max="4" step="1">
                                                  </div>
                                                </div>
                                                <div class="row">
                                                   <div class="form-group col-md-4">
                                                    <label for="formControlRange">Tocando una Area</label>
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
                                                    <input type="range" class="form-control-range" id="ecafarea" name="ecafarea" onchange="ecaf()"  value="2" min="0" max="4" step="1">
                                                  </div>
                                                </div>
                                                <div class="row">
                                                   <div class="form-group col-md-4">
                                                    <label for="formControlRange">Movimiento sin Objetivo</label>
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
                                                    <input type="range" class="form-control-range" id="ecafmovimiento" name="ecafmovimiento" onchange="ecaf()" value="2" min="0" max="4" step="1">
                                                  </div>
                                                </div>
                                                <div class="row">
                                                   <div class="form-group col-md-4">
                                                    <label for="formControlRange">Respiracion Dura</label>
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
                                                    <input type="range" class="form-control-range" id="ecafrespiracion" name="ecafrespiracion" onchange="ecaf()" value="2" min="0" max="4" step="1">
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="form-group col-md-4">
                                                    <label for="formControlRange">Total</label>
                                                    <input type="text" class="form-control" placeholder="/24" id="ecaftotal" name="ecaftotal" minlength="1" maxlength="6" pattern="\S[0-9A-Za-z, ]{1,6}" required />
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
                                                        <input type="text" class="form-control" placeholder="12 Cm" id="ik" name="ik" minlength="1" maxlength="6" pattern="\S[0-9A-Za-z, ]{1,6}" required />
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
                                                        <input type="text" class="form-control" placeholder="55,5 Kg" id="ecog" name="ecog" minlength="1" maxlength="8" pattern="\S[A-Za-z0-9,. ]{1,8}" required />
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
                                                        <input type="text" class="form-control" placeholder="" id="pps" name="pps" minlength="1" maxlength="6" pattern="\S[A-Za-z0-9 ]{1,6}" required />
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
                                                        <input type="text" class="form-control" placeholder="" id="mdas" name="mdas" required />
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
                                                        <input type="text" class="form-control" placeholder="37°" id="cam" name="cam" minlength="1" maxlength="6" pattern="\S[A-Za-z0-9,. ]{1,6}" required />
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
                                                        <input type="text" class="form-control" placeholder="" id="ramsay" name="ramsay" minlength="1" maxlength="6" pattern="\S[A-Za-z0-9,. ]{1,6}" required />
                                                      </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                      <label class="col-form-label"><strong>Observaciones:</strong></label>
                                                      <textarea class="form-control" id="observaciones" name="observaciones" onkeypress="" required></textarea>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12 text-center" id="btningresarpad">
                                      <!-- <button type="button" class="btn btn-azul"  data-dismiss="modal" data-toggle="modal" data-target="#confirmarpad">GUARDAR</button> -->
                                      <input type="text" class="form-control" id="nmedpad" name="nmedpad" style="display:none" value="<?php echo ucwords($this->session->userdata('s_id'));?>" />
                                    </div>
                                    <div class="col-md-12 text-center" id="btnactualizarpad" style="display:none">
                                      <button type="button" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarpad2">ACTUALIZAR</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              <ul class="nav nav-tabs card-header-tabs">
                                  <li class="nav-item">
                                    <button class="btn btn-primary" type="button" onclick="siguientepagina()">Siguiente</button>
                                    <input type="text" value="1" id="pagina" class="form-control" style="display:none" />
                                  </li>
                                  <li class="nav-item">
                                    <a href=""></a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link active bg-danger" id="subop1" href="#op1" data-toggle="collapse" data-target="#op1" aria-expanded="false" aria-controls="op1" onclick="doynumeropagina('1');">1</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link bg-white" id="subop2" href="#op2" data-toggle="collapse" data-target="#op2" aria-expanded="false" aria-controls="op2" onclick="doynumeropagina('2');">2</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link bg-white" id="subop3" href="#op3" data-toggle="collapse" data-target="#op3" aria-expanded="false" aria-controls="op3" onclick="doynumeropagina('3');">3</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link bg-white" id="subop4" href="#op4" data-toggle="collapse" data-target="#op4" aria-expanded="false" aria-controls="op4" onclick="doynumeropagina('4');">4</a>
                                  </li>
                                  <li class="nav-item">
                                    <button class="btn btn-primary" type="button" onclick="atraspagina()">Atras</button>
                                  </li>
                              </ul>
                            </div>
                          </div>
                        </form>
                        </div>
                    </div>
                   <!--  <div class="collapse multi-collapse collapse" id="multi2" data-parent="#accordion2">
                      <form id="hcconsentimiento" action="#" method="POST">
                      <div class="row">
                        <div class="form-group col-md-12">
                            <div class="card-header">
                              <div class="accordion" id="accordion4">
                                <div class="collapse multi-collapse collapse show" id="opd1" data-parent="#accordion4">
                                  <div class="row">
                                    <div class="form-group col-md-12">
                                      <p class="text-justify">
                                        Dentro de las normas eticas exigidas en Colombia (ley 23 de 1981 para Medicina, Ley 911 de 2004 para Enfermeria, Ley 528 de
                                        1999 para Fisioterapia, Ley de 2008 para Terapia Respiratoria, Ley 949 de 2005 para Terapia Ocupacional y Ley 376 de 1997
                                        para Terapia de Lenguaje) y Decreto 780 de 2016, el profesional de la salud se encuentra en el deber de informar adecuada y
                                        oportunamente a todos sus paciente los riesgos que puedan derivarse del tratamiento y/o procedimiento que le sera practicado,
                                        solicitando su consentimiento anticipadamente. Por lo tanto, con el presente documento escrito, se pretende informar a usted y
                                        el favor, de manera respetuosam llene de su puño y letra, los espacions en blanco.
                                      </p>
                                    </div>
                                    <div class="form-group col-md-1">
                                      <label>Yo__</label>
                                    </div>
                                    <div class="form-group col-md-5">
                                      <input type="text" class="form-control" placeholder="nombre cuidador" id="nombre_cuidador" name="nombre_cuidador"  required />
                                    </div>
                                    <div class="form-group col-md-4">
                                      <select class="form-control" id="tdoccuidador" name="tdoccuidador" >
                                        <option selected value="0">Elija</option>
                                        <option value="C.C">C.C</option>
                                      </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                      <input type="text" class="form-control" placeholder="N° documento" id="doccuidaor" name="doccuidaor" required />
                                    </div>
                                    <div class="form-group col-md-5">
                                      <label>o Como responsable y cuidador del paciente</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" placeholder="El otro" id="otroresponsable" name="otroresponsable" required />
                                    </div>
                                    <div class="form-group col-md-2">
                                      <label>Con Historia Clinica</label>
                                    </div>
                                    <div class="form-group col-md-2">
                                      <input type="text" class="form-control" placeholder="N° Historia" id="numhc2" name="numhc2" readonly="" required />
                                    </div>
                                    <div class="form-group col-md-12">
                                      <p>
                                        solicito a los profesionales de la salud de la IPS COMPAÑIA CALIDAD Y CUIDADO EN SALUD S.A.S.
                                        SIGLA COMPCASA SAS que me realicen la atencion integral en el PAD como 
                                      </p>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Paciente CRONICO, AGUDO O PALEATIVO</label>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <select class="form-control" id="tipopaciente" name="tipopaciente" >
                                        <option selected value="0">Elija</option>
                                        <option value="C">CRONICO</option>
                                        <option value="A">AGUDO</option>
                                        <option value="P">PALEATIVO</option>
                                      </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                      <p class="text-justify">
                                        siendo este, el PAD, una alternativa asistencial continua para la presentacion de servicios de salud interdisciplinarios en el
                                        domicilo. basados en un PLAN DE INTERVERSION, diseñado por el grupo de profesionales, que lo ejecutan a traves de visitas
                                        domiciliarias programadas, definidas por la condicion de salud del paciente, que son idenficiadas con aplicacion de formatos,
                                        escalas y test, que ademas, evidencian riesgos existentes en el domicilio. El principal objetivo es el de brindar intervenciones
                                        terapeuticas con orientacion y educacion, a traves de la relacion profesional-paciente necesaria. que previamente he señalado al
                                        equipo de salud deseo tener, para que realice la atencion acordad y enunciada en el paciente. Entiendo que la atencion ofrecida
                                        es solo domiciliaria, la cual no contempla servicios de urgencia, internacion, quirurgicos, transporte asistencial medicalizado, ni
                                        de consulta externa intramural; que ademas, el domicilio presenta riesgos ambientales, que inducen en disfuncionalidad y
                                        morbiliades, limitando el alcance de los objetivos de forma integral, mas aun si estos no son controlados por mi cuidador, de los
                                        cuales tengo conocimiento.
                                      </p>
                                    </div>
                                    <div class="form-group col-md-12">
                                      <label class="col-form-label"><strong>Diagnosticos:</strong></label>
                                      <textarea class="form-control" id="mdiagnosticos" name="mdiagnosticos" readonly=""></textarea>
                                    </div>
                                    
                                    <div class="form-group col-md-12">
                                      <p class="text-justify">
                                        Procedimiento Atencion que involucra acciones centrdas en la asistencia - educacion en el domicilio, con abordaje intgral
                                        ofrecido por un equipo de salud interdisciplinario,, que busca intervenir de forma miltifactorial los diferentes aspectos que afectan
                                        el proceso cronico de salud enfermedad del paciente, e implica la evaluacion y manejo del paciente como individuo en su entorno
                                        autonomia, independecia y calidad de vida, a traves de potenciar el domicilio como el lugar terapeutico de atencion, sumando
                                        la vigilancia activa y asistencia con la promocion del autocuidado que ofrece la familia y el paciente en beneficio de su propia
                                        funcionalidad.</p>

                                        <p class="text-justify">Riesgos Previstos Generales. Cronicidad y/o agudizacion de Comorbilidades y Muerte, ademas de la presencia de comorbilidades
                                        inducidas por disfuncionalidad del entorno domiciliario no controlado por la familia.</p>

                                        <p class="text-justify">Riesgos Previstos Especificos. Efectos secundarios por uso de tecnologias en salud formulados, entregados y aplicados durenatela
                                        atencion domiciliaria, dolor irruptivo, perdida de capacidad funcional por agudizacion de las patologias de ingreso al programa de
                                        atencion domiciliaria y hospitalizacion por agudizacion de comorbilidades o presencia de enfermedad aguda emergente que
                                        puede ser inducida por suceso no seguro condicionado a disfuncionalidad del entorno domiciliario no controlado por la familia.</p>

                                        <p class="text-justify">Anestesia. No es requerida, sin embargo, la Analgesia y/o Sedacion es complemento terapeutico en el manejo de dolor cuando
                                        el medico asi lo determine, sobre todo en los pacientes de Cuidado Paleativo.</p>

                                        <p class="text-justify">Patologia. No es requeridad muestra de partes corporales para estudio por laboratoiro de patologia, pero en caso de ser requerida
                                        como parte del Plane de interversion programado al paciente, se realizara con aplicacion a la Referencia de Servicios de Salud de
                                        la Red de paciente y su asegurador.</p>

                                        <p class="text-justify">Probabilidad de exito. Las interverciones que cada profesional desarrolla no son ajenas a la variabilidad inter subjetiva. En general
                                        estas son mas precisas para la sintomatologia que para el de entidades y mucho menos cuando existen comorbilidades y cuando
                                        no se genera adherencia al Plan de interversion de parte del Cuidador o Paciente. La probabilidad de exito del procedimiento
                                        mencionado arriba es catalogado como:
                                      </p>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="" class="col-form-label"><strong>Probabilidad de exito:</strong></label>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <select class="form-control" id="probabilidad" name="probabilidad" required>
                                        <option selected value="0">Elija</option>
                                        <option value="B">Bueno</option>
                                        <option value="R">Regular</option>
                                        <option value="D">Deficiente</option>
                                      </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                      <p>
                                        Pronostico. Si decido no efectuar el procedimiento mencionado arriba, mi pronostico (condiciones medicas futuras) son:
                                      </p>
                                    </div>
                                    <div class="form-group col-md-12">
                                      <label class="col-form-label"><strong>Pronostico:</strong></label>
                                      <textarea class="form-control" id="pronostico" name="pronostico" onkeypress="" required></textarea>
                                    </div>
                                  </div>
                                </div>
                                <div class="collapse multi-collapse collapse" id="opd2" data-parent="#accordion4">
                                  <div class="row">
                                    <div class="form-group col-md-12">
                                      <p class="text-justify">
                                        Alternativas de tratamiento. No existen y yo he elegido este procedimiento como metodo de atencion basada en un modelo
                                        integral asistencial domiciliario interdisiplinario con complementacion terapeutica.
                                      </p>
                                      <p class="text-justify">
                                        Consentimiento informado. Comprendo y acepto que durante las atenciones, pueden aparecer circunstancias imprevisibles o
                                        inesperadas, que puedan requerir una extension del procedimiento original o la relacion de otro procedimiento no mencionado
                                        arriba, o la utilizacion de otros recursos adicionales con los ciretrios que definan la necesidad de remision a un centro hospitalario
                                        de la Red propia del Paciente.
                                      </p>
                                      <p class="text-justify">
                                        Solicito a COMPAÑIA CALIDAD Y CUIDADO EN SALUD S.A.S. SIGLA COMPCASA SAS que realicen los procedimientos adicionales
                                        que juezguen necesarios que complementen el PLAN DE INTERVENCION del <strong>PROGRAMA DE ATENCION DOMICILIARIA - PAD</strong>. Al
                                        firmar este formulario reconozca que los he leido o que me ha sido leido y explicado y que comprendo perfectamente su
                                        contenido. Se me han dado amplias oportunidades de formular preguntas y que todas las preguntas que he formulado han sido
                                        respondidas o explicadas en forma satisfactoria. Todos los espacios en blanco o frases por completar han sido llenados y todos
                                        los puntos en los que no estoy de acuerdo han sido marcados antes de firmar este consentimiento. Acepto que las profesionales de
                                        la salud no son ciencias exactas y que no se me han garantizado resultados, que se esperan de los procedimientos de diagnostico
                                        y/o terapeuticos, en el sentido de que la practia de la atencion del PAD que se requiere, compromete solo una actividad de
                                        medios, pero no de resultados, mas aun cuando el estado mental del paciente y la ausencia de parientes o allegados impidan la
                                        advertencia de los riesgos previstos.
                                      </p>
                                      <p class="text-justify">
                                        Comprendiendo estas limitaciones, solicito a COMPAÑIA CALIDAD Y CUIDADO EN SALUD S.A.S. SIGLA COMPCASA SAS que realice
                                        la inclision al PAD y el desarrollo del PLAN DE INTERVENCION, firmo el
                                      </p>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label class="col-form-label"><strong>Fecha</strong></label>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <input type="date" class="form-control" id="fconsentimiento" name="fconsentimiento" required />
                                    </div>
                                    <div class="form-group col-md-4"></div>
                                    <div class="form-group col-md-6">
                                      <label>PACIENTE</label>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>RESPONSABLE CUIDADOR</label>
                                    </div>
                                    <div class="form-group col-md-2">
                                      <label>C.C</label>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <input type="text" class="form-control" placeholder="Paciente" id="ndocpaciente" name="ndocpaciente" required />
                                    </div>
                                    <div class="form-group col-md-2">
                                      <label>C.C</label>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <input type="text" class="form-control" placeholder="Medico" id="ndoresponsable" name="ndoresponsable" required />
                                    </div>
                                    <div class="form-group col-md-7">
                                      <p>
                                        La persona que da el consentimiento, tiene una relacion con el paciente de
                                      </p>
                                    </div>
                                    <div class="form-group col-md-5">
                                      <input type="text" class="form-control" placeholder="Medico" id="cualrelacion" name="cualrelacion" required />
                                    </div>
                                    <div class="form-group col-md-12">
                                      <p>
                                        si no es el mismo paciente.
                                      </p>
                                    </div>
                                    <div class="form-group col-md-3">
                                      <p>
                                        El paciente no pueder firmar por.
                                      </p>
                                    </div>
                                    <div class="form-group col-md-9">
                                      <input type="text" class="form-control" placeholder="Medico" id="nofirma" name="nofirma" required />
                                    </div>
                                    <div class="form-group col-md-12">
                                      <p>
                                        Los materiales adicionales que se utilizaron durante el proceso de consentimiento informado para
                                        este procedimiento incluyen:
                                      </p>
                                    </div>
                                    <div class="form-group col-md-12">
                                      <textarea class="form-control" id="materiales" name="materiales" onkeypress="" required></textarea>
                                    </div>
                                    <div class="form-group col-md-12 text-center">
                                      <label>DISENTIMIENTO DEL PROCEDIMIENTO</label>
                                    </div>
                                    <div class="form-group col-md-12">
                                      <p class="text-justify">
                                        he decidido no permitir, presindir o continuar con la realizacion del PLAN DE
                                        INTERVENCION del PROGRAMA DE ATENCION DOMICILIARIA. Voluntariamente haciendo uso de mi ferecho, sin que esto
                                        ocacione ningun tipo de represlia contra mi, siendo expuestos mis motivos de desistimiento a continuaicon:
                                      </p>
                                    </div>
                                    <div class="form-group col-md-12">
                                      <textarea class="form-control" id="disentimiento" name="disentimiento" onkeypress="" required></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                      <p class="text-justify">
                                        De igual forma declaro que he sido debidamente informado (a) sobre los riesgos y posibles complicaciones de salud que implica
                                        el disentimiento voluntario a la atencion del PAD. Afirmo que bajo mi responsabilidad decido desistir y en consecuencia declaro
                                        que COMPAÑIA CALIDAD Y CUIDADO EN SALUD S.A.S. SIGLA COMPCASA SAD, no es responsable legal en caso de complicaciones
                                        posterioes ni derivadas de mi objecion.
                                      </p>
                                    </div>
                                     
                                  </div>
                                  <div class="col-md-12 text-center" id="btngconcentimiento">
                                    <input type="text" class="form-control" id="nmedpad2" name="nmedpad2" style="display:none" value="<?php echo ucwords($this->session->userdata('s_id'));?>" />
                                  </div>
                                  <div class="col-md-12 text-center" id="btnaconcentimiento" style="display:none">
                                    <button type="button" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarconcentimiento2">ACTUALIZAR</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              <ul class="nav nav-tabs card-header-tabs">
                                  <li class="nav-item">
                                    <button class="btn btn-primary" type="button" onclick="siguientepagina2()">Siguiente</button>
                                    <input type="text" value="1" id="pagina2" class="form-control" style="display:none" />
                                  </li>
                                  <li class="nav-item">
                                    <a href=""></a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link active bg-danger" id="subopd1" href="#opd1" data-toggle="collapse" data-target="#opd1" aria-expanded="false" aria-controls="opd1" onclick="doynumeropagina2('1')">1</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link bd-white" id="subopd2" href="#opd2" data-toggle="collapse" data-target="#opd2" aria-expanded="false" aria-controls="opd2" onclick="doynumeropagina2('2')">2</a>
                                  </li>
                                  <li class="nav-item">
                                    <button class="btn btn-primary" type="button" onclick="atraspagina2()">Atras</button>
                                  </li>
                              </ul>
                            </div>
                        </div>
                      </div>
                      </form>
                    </div> -->
                    <div class="collapse multi-collapse collapse" id="multi3" data-parent="#accordion2">
                      <form id="hcbarthel" action="#" method="POST">
                      <div class="row">
                          <div class="accordion form-group col-md-12" id="separa4">
                            <div class="card">
                              <div class="card-header" id="headiuno">
                                  <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#barthel1"
                                  aria-expanded="false" aria-controls="barthel1">
                                    Comer
                                  </button>
                                </div>
                                <div class="collapse" id="barthel1" aria-labelledby="headiuno" data-parent="#separa4">
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
                                          <input class="form-check-input" type="radio" name="btcomer" id="btcomer1" onclick="" value="10">
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
                                          <input class="form-check-input" type="radio" name="btcomer" id="btcomer2" onclick="" value="5">
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
                                          <input class="form-check-input" type="radio" name="btcomer" id="btcomer3" onclick="" value="0">
                                          <input class="form-control" type="text" id="auxbtcomer" name="auxbtcomer" style="display:none">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="card">
                              <div class="card-header" id="headidos">
                                  <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#barthel2"
                                  aria-expanded="false" aria-controls="barthel2">
                                    Bañarse
                                  </button>
                                </div>
                                <div class="collapse" id="barthel2" aria-labelledby="headidos" data-parent="#separa4">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="form-group col-md-1">
                                        <label class="col-form-label"><strong>5</strong></label>
                                      </div>
                                      <div class="form-group col-md-2">
                                        <label class="col-form-label">INDEPENDIENTE</label>
                                      </div>
                                      <div class="form-group col-md-8">
                                        <label for="">capaz de entrar a la ducha por si solo, bañarse en un tiempo razonable, secar su cuerpo y salir del baño por si mismo</label>
                                      </div>
                                      <div class="form-group col-md-1">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="btbanarse" id="btbanarse1" onclick="" value="5">
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
                                          <input class="form-check-input" type="radio" name="btbanarse" id="btbanarse2" onclick="" value="0">
                                          <input class="form-control" type="text" id="auxbtbanarse" name="auxbtbanarse" style="display:none">
                                        </div>
                                      </div>
                                  </div>
                                  </div>
                                </div>
                            </div>
                            <div class="card">
                              <div class="card-header" id="headidos">
                                  <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#barthel3"
                                  aria-expanded="false" aria-controls="barthel3">
                                    Vestirse
                                  </button>
                                </div>
                                <div class="collapse" id="barthel3" aria-labelledby="headidos" data-parent="#separa4">
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
                                          <input class="form-check-input" type="radio" name="btvestirse" id="btvestirse1" onclick="" value="10">
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
                                          <input class="form-check-input" type="radio" name="btvestirse" id="btvestirse2" onclick="" value="5">
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
                                          <input class="form-check-input" type="radio" name="btvestirse" id="btvestirse3" onclick="" value="0">
                                          <input class="form-control" type="text" id="auxbtvestirse" name="auxbtvestirse" style="display:none">
                                        </div>
                                      </div>
                                  </div>
                                  </div>
                                </div>
                            </div>
                            <div class="card">
                              <div class="card-header" id="headidos">
                                  <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#barthel4"
                                  aria-expanded="false" aria-controls="barthel4">
                                    Arreglarse
                                  </button>
                                </div>
                                <div class="collapse" id="barthel4" aria-labelledby="headidos" data-parent="#separa4">
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
                                          <input class="form-check-input" type="radio" name="btarreglarse" id="btarreglarse1" onclick="" value="5">
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
                                          <input class="form-check-input" type="radio" name="btarreglarse" id="btarreglarse2" onclick="" value="0">
                                          <input class="form-control" type="text" id="auxbtarreglarse" name="auxbtarreglarse" style="display:none">
                                        </div>
                                      </div>
                                  </div>
                                  </div>
                                </div>
                            </div>
                            <div class="card">
                              <div class="card-header" id="headidos">
                                  <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#barthel5"
                                  aria-expanded="false" aria-controls="barthel5">
                                    Deposicion
                                  </button>
                                </div>
                                <div class="collapse" id="barthel5" aria-labelledby="headidos" data-parent="#separa4">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="form-group col-md-1">
                                        <label class="col-form-label"><strong>10</strong></label>
                                      </div>
                                      <div class="form-group col-md-2">
                                        <label class="col-form-label">CONTINENTE</label>
                                      </div>
                                      <div class="form-group col-md-8">
                                        <label class="col-form-label">Ningun episodio de incontinencia</label>
                                      </div>
                                      <div class="form-group col-md-1">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="btdeposicion" id="btdeposicion1" onclick="" value="10">
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
                                          <input class="form-check-input" type="radio" name="btdeposicion" id="btdeposicion2" onclick="" value="5">
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
                                          <input class="form-check-input" type="radio" name="btdeposicion" id="btdeposicion3" onclick="" value="0">
                                          <input class="form-control" type="text" id="auxbtdeposicion" name="auxbtdeposicion" style="display:none">
                                        </div>
                                      </div>
                                  </div>
                                  </div>
                                </div>
                            </div>
                            <div class="card">
                              <div class="card-header" id="headidos">
                                  <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#barthel6"
                                  aria-expanded="false" aria-controls="barthel6">
                                    Miccion (Valorar la situacion en la semana anterior)
                                  </button>
                                </div>
                                <div class="collapse" id="barthel6" aria-labelledby="headidos" data-parent="#separa4">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="form-group col-md-1">
                                        <label class="col-form-label"><strong>10</strong></label>
                                      </div>
                                      <div class="form-group col-md-2">
                                        <label class="col-form-label">CONTINENTE</label>
                                      </div>
                                      <div class="form-group col-md-8">
                                        <label class="col-form-label">Ningun episodio de incontinencia, capaz de utilizar cualquier dispositivo por si solo</label>
                                      </div>
                                      <div class="form-group col-md-1">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="btmiccion" id="btmiccion1" onclick="" value="10">
                                        </div>
                                      </div>
                                      <div class="form-group col-md-1">
                                        <label class="col-form-label"><strong>5</strong></label>
                                      </div>
                                      <div class="form-group col-md-2">
                                        <label class="col-form-label">ACCIDENTE OCASIONAL</label>
                                      </div>
                                      <div class="form-group col-md-8">
                                        <label class="col-form-label">Maximo un episodio de incontinencia en 24 horas, incluye necesitar ayuda en la manipulacion de sondas y otros dispositivos</label>
                                      </div>
                                      <div class="form-group col-md-1">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="btmiccion" id="btmiccion2" onclick="" value="5">
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
                                          <input class="form-check-input" type="radio" name="btmiccion" id="btmiccion3" onclick="" value="0">
                                          <input class="form-control" type="text" id="auxbtmiccion" name="auxbtmiccion" style="display:none">
                                        </div>
                                      </div>
                                  </div>
                                  </div>
                                </div>
                            </div>
                            <div class="card">
                              <div class="card-header" id="headidos">
                                  <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#barthel7"
                                  aria-expanded="false" aria-controls="barthel7">
                                    Ir al retrete
                                  </button>
                                </div>
                                <div class="collapse" id="barthel7" aria-labelledby="headidos" data-parent="#separa4">
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
                                          <input class="form-check-input" type="radio" name="btretrete" id="btretrete1" onclick="" value="10">
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
                                          <input class="form-check-input" type="radio" name="btretrete" id="btretrete2" onclick="" value="5">
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
                                          <input class="form-check-input" type="radio" name="btretrete" id="btretrete3" onclick="" value="0">
                                          <input class="form-control" type="text" id="auxbtretrete" name="auxbtretrete" style="display:none">
                                        </div>
                                      </div>
                                  </div>
                                  </div>
                                </div>
                            </div>
                            <div class="card">
                              <div class="card-header" id="headidos">
                                  <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#barthel8"
                                  aria-expanded="false" aria-controls="barthel8">
                                    Traslado Sillon - Cama (Transferencia)
                                  </button>
                                </div>
                                <div class="collapse" id="barthel8" aria-labelledby="headidos" data-parent="#separa4">
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
                                          <input class="form-check-input" type="radio" name="bttraslado" id="bttraslado1" onclick="" value="15">
                                        </div>
                                      </div>
                                      <div class="form-group col-md-1">
                                        <label class="col-form-label"><strong>10</strong></label>
                                      </div>
                                      <div class="form-group col-md-2">
                                        <label class="col-form-label">MINIMA AYUDA</label>
                                      </div>
                                      <div class="form-group col-md-8">
                                        <label class="col-form-label">Incluye supervision verbal o pequeña ayuda fisica</label>
                                      </div>
                                      <div class="form-group col-md-1">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="bttraslado" id="bttraslado2" onclick="" value="10">
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
                                          <input class="form-check-input" type="radio" name="bttraslado" id="bttraslado3" onclick="" value="5">
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
                                          <input class="form-check-input" type="radio" name="bttraslado" id="bttraslado4" onclick="" value="0">
                                          <input class="form-control" type="text" id="auxbttraslado" name="auxbttraslado" style="display:none">
                                        </div>
                                      </div>
                                  </div>
                                  </div>
                                </div>
                            </div>
                            <div class="card">
                              <div class="card-header" id="headidos">
                                  <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#barthel9"
                                  aria-expanded="false" aria-controls="barthel9">
                                    Deambulacion
                                  </button>
                                </div>
                                <div class="collapse" id="barthel9" aria-labelledby="headidos" data-parent="#separa4">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="form-group col-md-1">
                                        <label class="col-form-label"><strong>15</strong></label>
                                      </div>
                                      <div class="form-group col-md-2">
                                        <label class="col-form-label">INDEPENDIENTE</label>
                                      </div>
                                      <div class="form-group col-md-8">
                                        <label class="col-form-label">Puede andar 50 metros o su equivalente por casa sin ayuda ni supervision de otra persona. Puede usar ayuda instrumentales (muletas o baston). Excepto andador. Si utiliza protesis debde ser capaz de ponersela y quitarsela solo</label>
                                      </div>
                                      <div class="form-group col-md-1">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="btdeambulacion" id="btdeambulacion1" onclick="" value="15">
                                        </div>
                                      </div>
                                      <div class="form-group col-md-1">
                                        <label class="col-form-label"><strong>10</strong></label>
                                      </div>
                                      <div class="form-group col-md-2">
                                        <label class="col-form-label">MINIMA AYUDA</label>
                                      </div>
                                      <div class="form-group col-md-8">
                                        <label class="col-form-label">Necesita supervision o una pequeña ayuda fisica por otra persona. Precisa utilizar andador</label>
                                      </div>
                                      <div class="form-group col-md-1">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="btdeambulacion" id="btdeambulacion2" onclick="" value="10">
                                        </div>
                                      </div>
                                      <div class="form-group col-md-1">
                                        <label class="col-form-label"><strong>5</strong></label>
                                      </div>
                                      <div class="form-group col-md-2">
                                        <label class="col-form-label">GRAN AYUDA</label>
                                      </div>
                                      <div class="form-group col-md-8">
                                        <label class="col-form-label">(En silla de ruedas) en 50 metros. No requiere ayuda ni supervision</label>
                                      </div>
                                      <div class="form-group col-md-1">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="btdeambulacion" id="btdeambulacion3" onclick="" value="5">
                                        </div>
                                      </div>
                                      <div class="form-group col-md-1">
                                        <label class="col-form-label"><strong>0</strong></label>
                                      </div>
                                      <div class="form-group col-md-2">
                                        <label class="col-form-label">DEPENDIENTE</label>
                                      </div>
                                      <div class="form-group col-md-8">
                                        <label class="col-form-label">Inmovil</label>
                                      </div>
                                      <div class="form-group col-md-1">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="btdeambulacion" id="btdeambulacion4" onclick="" value="0">
                                          <input class="form-control" type="text" id="auxbtdeambulacion" name="auxbtdeambulacion" style="display:none">
                                        </div>
                                      </div>
                                  </div>
                                  </div>
                                </div>
                            </div>
                            <div class="card">
                              <div class="card-header" id="headidos">
                                  <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#barthel10"
                                  aria-expanded="false" aria-controls="barthel10">
                                    Subir y bajar escaleras
                                  </button>
                                </div>
                                <div class="collapse" id="barthel10" aria-labelledby="headidos" data-parent="#separa4">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="form-group col-md-1">
                                        <label class="col-form-label"><strong>10</strong></label>
                                      </div>
                                      <div class="form-group col-md-2">
                                        <label class="col-form-label">INDEPENDIENTE</label>
                                      </div>
                                      <div class="form-group col-md-8">
                                        <label class="col-form-label">Capaz de subir y bajar un piso sin la ayuda ni supervision de otra persona</label>
                                      </div>
                                      <div class="form-group col-md-1">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="btescaleras" id="btescaleras1" onclick="" value="10">
                                        </div>
                                      </div>
                                      <div class="form-group col-md-1">
                                        <label class="col-form-label"><strong>5</strong></label>
                                      </div>
                                      <div class="form-group col-md-2">
                                        <label class="col-form-label">NECESITA AYUDA</label>
                                      </div>
                                      <div class="form-group col-md-8">
                                        <label class="col-form-label">Requiere de ayuda o supervision de otra persona</label>
                                      </div>
                                      <div class="form-group col-md-1">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="btescaleras" id="btescaleras2" onclick="" value="5">
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
                                          <input class="form-check-input" type="radio" name="btescaleras" id="btescaleras3" onclick="" value="0">
                                          <input class="form-control" type="text" id="auxbtescaleras" name="auxbtescaleras" style="display:none">
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
                                <label class="col-form-label">DG (Dependencia Grbe): 20 - 40</label>
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
                                <input type="text" class="form-control" placeholder="Total" id="bttotal" name="bttotal" readonly="" />

                              </div>
                              <div class="form-group col-md-3 text-right">
                                <label class="col-form-label">Nivel de Dependencia</label>
                              </div>
                              <div class="form-group col-md-3">
                                <input type="text" class="form-control" placeholder="Nivel" id="btnivel" name="btnivel" readonly="" />

                              </div>
                              <div class="form-group col-md-12  dropdown-divider"></div>
                              <div class="form-group ">
                                 
                              </div>
                              <div class="form-group col-md-12 text-center" id="btngbarthel">
                                <input type="text" class="form-control" id="nmedpad3" name="nmedpad3" style="display:none" value="<?php echo ucwords($this->session->userdata('s_id'));?>" />
                                <input type="text" class="form-control" id="numhc3" name="numhc3" style="display:none" />
                              </div>
                              <div class="form-group col-md-12 text-center" id="btnabarthel" style="display:none">
                                 <button type="button" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarbarthel2">ACTUALIZAR</button>
                              </div>
                            </div>
                          </div>
                      </div>              
                      </form>
                    </div>
                    <div class="collapse multi-collapse collapse" id="multi4" data-parent="#accordion2">
                      <form id="hcvaloracion" action="#" method="POST">
                      <div class="row">
                        <div class="accordion form-group col-md-12" id="separa6">
                          <div class="card">
                            <div class="card-header" id="headiuno">
                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#valoracion1"
                                aria-expanded="false" aria-controls="valoracion1">
                                  Diagnosticos
                                </button>
                              </div>
                              <div class="collapse" id="valoracion1" aria-labelledby="headiuno" data-parent="#separa6">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="form-group col-md-12">
                                      <label class="col-form-label"><strong>Diagnosticos:</strong></label>
                                      <textarea class="form-control" id="motrar_diagnosticos3" name="motrar_diagnosticos3" onkeypress="return cmTexto(event);" readonly=""></textarea>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headidos">
                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#valoracion2"
                                aria-expanded="false" aria-controls="valoracion2">
                                  Condicion Neurologica
                                </button>
                              </div>
                              <div class="collapse" id="valoracion2" aria-labelledby="headidos" data-parent="#separa6">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="form-group col-md-3">
                                      <label class="col-form-label text-uppercase"><strong>Apertura Ocular:</strong></label><br><br><br>                           
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnocular[]" id="cnocular1" onclick=""  value="Expontanea | 4" >
                                          <label class="form-check-label">Expontanea (4)</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnocular[]" id="cnocular2" onclick=""  value="A la orden | 3">
                                          <label class="form-check-label">A la orden (3)</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnocular[]" id="cnocular3" onclick=""  value="Ante un estimulo doloroso | 2" >
                                          <label class="form-check-label">Ante un estimulo doloroso (2)</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnocular[]" id="cnocular4" onclick="" value="Ausencia de estimulo ocular | 1">
                                          <label class="form-check-label">Ausencia de estimulo ocular (1)</label>
                                          <input type="text" class="form-control" id="auxcnocular" name="auxcnocular" style="display:none" />
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnocular[]" id="cnocular5" onclick="" value="No Selecciona | 0">
                                          <label class="form-check-label">No Selecciona (0)</label>
                                        </div>                                
                                    </div>
                                    <div class="form-group col-md-3">
                                      <label class="col-form-label text-uppercase"><strong>Respuesta Verbal:</strong></label><br><br>                          
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnverbal[]" id="cnverbal1" onclick=""  value="Orienteado Correctamente | 5" >
                                          <label class="form-check-label">Orienteado Correctamente (5)</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnverbal[]" id="cnverbal2" onclick=""  value="Paciente Confuso | 4">
                                          <label class="form-check-label">Paciente Confuso (4)</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnverbal[]" id="cnverbal3" onclick=""  value="Lenguaje inapropiado | 3">
                                          <label class="form-check-label">Lenguaje inapropiado (3)</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnverbal[]" id="cnverbal4" onclick=""  value="Lenguaje incomprensible | 2" >
                                          <label class="form-check-label">Lenguaje incomprensible (2)</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnverbal[]" id="cnverbal5" onclick="" value="Carencia de actividad verbal | 1">
                                          <label class="form-check-label">Carencia de actividad verbal(1)</label>
                                          <input type="text" class="form-control" id="auxcnverbal" name="auxcnverbal" style="display:none" />
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnocular[]" id="cnverbal6" onclick="" value="No Selecciona | 0">
                                          <label class="form-check-label">No Selecciona (0)</label>
                                        </div>                                
                                    </div>
                                    <div class="form-group col-md-5">
                                      <label class="col-form-label text-uppercase"><strong>Respuesta Motora:</strong></label>                           
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnmotora[]" id="cnmotora1" onclick=""  value="Obedece ordenes correctamente | 6">
                                          <label class="form-check-label">Obedece ordenes correctamente (6)</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnmotora[]" id="cnmotora2" onclick=""  value="Localiza estimulos dolorosos | 5">
                                          <label class="form-check-label">Localiza estimulos dolorosos (5)</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnmotora[]" id="cnmotora3" onclick=""  value="Responde al estimulo dolorso pero no localiza | 4" >
                                          <label class="form-check-label">Responde al estimulo dolorso pero no localiza (4)</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnmotora[]" id="cnmotora4" onclick=""  value="Respuesta con flexion anormal de los miembros | 3">
                                          <label class="form-check-label">Respuesta con flexion anormal de los miembros (3)</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnmotora[]" id="cnmotora5" onclick=""  value="Respuesta con extension anormal de los miembros | 2" >
                                          <label class="form-check-label">Respuesta con extension anormal de los miembros (2)</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnmotora[]" id="cnmotora6" onclick="" value="Ausencia de respuesta motora | 1">
                                          <label class="form-check-label">Ausencia de respuesta motora (1)</label>
                                          <input type="text" class="form-control" id="auxcnmotora" name="auxcnmotora" style="display:none" />
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnocular[]" id="cnmotora7" onclick="" value="No Selecciona | 0">
                                          <label class="form-check-label">No Selecciona (0)</label>
                                        </div>                                 
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label class="col-form-label">Total</label>
                                        <input type="text" class="form-control" placeholder="" id="cntotal" name="cntotal" readonly="" />
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="form-group col-md-6">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cngeneral[]" id="cngeneral1" onclick="" value="No Selecciona">
                                          <label class="form-check-label">No Selecciona</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cngeneral[]" id="cngeneral2" onclick=""  value="Letargia" >
                                          <label class="form-check-label">Letargia</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cngeneral[]" id="cngeneral3" onclick=""  value="Obnublacion">
                                          <label class="form-check-label">Obnublacion</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cngeneral[]" id="cngeneral4" onclick=""  value="Estado Vegetativo" >
                                          <label class="form-check-label">Estado Vegetativo</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cngeneral[]" id="cngeneral5" onclick="" value="Mutismo Aquinetico">
                                          <label class="form-check-label">Mutismo Aquinetico</label>
                                        </div>                                
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cngeneral[]" id="cngeneral6" onclick=""  value="Estado de Conciencia Minima" >
                                          <label class="form-check-label">Estado de Conciencia Minima</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cngeneral[]" id="cngeneral7" onclick=""  value="Sindrome de Cautiverio">
                                          <label class="form-check-label">Sindrome de Cautiverio</label>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-form-label">Otro</label>
                                          <input type="text" class="form-control" placeholder="" id="cnotrogeneral" name="cnotrogeneral" required />
                                          <input type="text" class="form-control" id="auxcngeneral" name="auxcngeneral" style="display:none" />
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headidos">
                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#valoracion3"
                                aria-expanded="false" aria-controls="valoracion3">
                                  Test de Pfeiffer
                                </button>
                              </div>
                              <div class="collapse" id="valoracion3" aria-labelledby="headidos" data-parent="#separa6">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="form-group col-md-8">
                                      <label for="formControlRange">Test de Pfeiffer "Escala de detecion de deterioro congnitivo-SPMSQ"</label>
                                    </div>
                                     <div class="form-group col-md-2">
                                      <label for="formControlRange">Valoracion N°</label>
                                    </div>
                                    <div class="form-group col-md-2">
                                      <input type="number" class="form-control" id="testnvaloracion" name="testnvaloracion" value="1" min="1" max="6" step="1">
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
                                      <label for="formControlRange">¿Que dia es hoy (mes/dia/año)?</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testp1f" name="testp1f" />
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testr1f" name="testr1f" />
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tpr1" id="tpr1a" onclick="" value="v">
                                      </div>
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tpr1" id="tpr1b" onclick="" value="f">
                                        <input type="text" class="form-control" id="auxtpr1" name="auxtpr1" style="display:none" />
                                      </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="formControlRange">¿Que dia de la semana es hoy?</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testp2" name="testp2" required />
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testr2" name="testr2" required />
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tpr2" id="tpr2a" onclick="" value="v">
                                      </div>
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tpr2" id="tpr2b" onclick="" value="f">
                                        <input type="text" class="form-control" id="auxtpr2" name="auxtpr2" style="display:none" />
                                      </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="formControlRange">¿Donde estamos ahora (Lugar o edificacion)?</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testp3" name="testp3" required />
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testr3" name="testr3" required />
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tpr3" id="tpr3a" onclick="" value="v">
                                      </div>
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tpr3" id="tpr3b" onclick="" value="f">
                                        <input type="text" class="form-control" id="auxtpr3" name="auxtpr3" style="display:none" />
                                      </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="formControlRange">¿Cual es su numero de telefono o direccion?</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testp4" name="testp4" required />
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testr4" name="testr4" required />
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tpr4" id="tpr4a" onclick="" value="v">
                                      </div>
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tpr4" id="tpr4b" onclick="" value="f">
                                        <input type="text" class="form-control" id="auxtpr4" name="auxtpr4" style="display:none" />
                                      </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="formControlRange">¿Cuantos años tiene?</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testp5" name="testp5" required />
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testr5" name="testr5" required />
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tpr5" id="tpr5a" onclick="" value="v">
                                      </div>
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tpr5" id="tpr5b" onclick="" value="f">
                                        <input type="text" class="form-control" id="auxtpr5" name="auxtpr5" style="display:none" />
                                      </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="formControlRange">¿En que dia, mes y año nacio?</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testp6" name="testp6" required />
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testr6" name="testr6" required />
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tpr6" id="tpr6a" onclick="" value="v">
                                      </div>
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tpr6" id="tpr6b" onclick="" value="f">
                                        <input type="text" class="form-control" id="auxtpr6" name="auxtpr6" style="display:none" />
                                      </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="formControlRange">¿Como se llama el presidente de Colombia?</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testp7" name="testp7" required />
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testr7" name="testr7" required />
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tpr7" id="tpr7a" onclick="" value="v">
                                      </div>
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tpr7" id="tpr7b" onclick="" value="f">
                                        <input type="text" class="form-control" id="auxtpr7" name="auxtpr7" style="display:none" />
                                      </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="formControlRange">¿Quien mandaba antes del presidente actual en Colombia?</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testp8" name="testp8" required />
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testr8" name="testr8" required />
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tpr8" id="tpr8a" onclick="" value="v">
                                      </div>
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tpr8" id="tpr8b" onclick="" value="f">
                                        <input type="text" class="form-control" id="auxtpr8" name="auxtpr8" style="display:none" />
                                      </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="formControlRange">¿Como se llama o se llamaba su señora madre?</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testp9" name="testp9" required />
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testr9" name="testr9" required />
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tpr9" id="tpr9a" onclick="" value="v">
                                      </div>
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tpr9" id="tpr9b" onclick="" value="f">
                                        <input type="text" class="form-control" id="auxtpr9" name="auxtpr9" style="display:none" />
                                      </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="formControlRange">Si a 20 le restamos 3, ¿quedad?, y si le restamos 3 ¿Cuanto queda?</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" value="17" id="testp10" name="testp10" required />
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testr10" name="testr10" required />
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tpr10" id="tpr10a" onclick="" value="v">
                                      </div>
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tpr10" id="tpr10b" onclick="" value="f">
                                        <input type="text" class="form-control" id="auxtpr10" name="auxtpr10" style="display:none" />
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <div class="form-group col-md-12  dropdown-divider"></div>
                          <div class="row">
                            <div class="form-group col-md-6">
                              <label class="col-form-label">N Normal Hasat 2 errores</label><span> </span>
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
                                <input type="text" class="form-control" placeholder="" id="testtotal" name="testtotal" readonly="" />
                            </div>
                            <div class="form-group col-md-2 text-right">
                              <label class="col-form-label">Nivel de Riesgo</label>
                            </div>
                            <div class="form-group col-md-4">
                              <input type="text" class="form-control" placeholder="" id="testnivel" name="testnivel" minlength="1" readonly="" />
                            </div>
                          </div>
                          <div class="form-group col-md-12  dropdown-divider"></div>
                          <div class="row">
                            <div class="col-md-12 text-center" id="btngvaloracion">
                              <input type="text" class="form-control" id="nmedpad4" name="nmedpad4" style="display:none" value="<?php echo ucwords($this->session->userdata('s_id'));?>" />
                              <input type="text" class="form-control" id="numhc4" name="numhc4" style="display:none" />
                            </div>
                            <div class="col-md-12 text-center" id="btnavaloracion" style="display:none">
                              <button type="button" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarvaloracion2">ACTUALIZAR</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      </form>
                    </div>
                    <div class="collapse multi-collapse collapse" id="multi5" data-parent="#accordion2">
                      <form id="hcnorton" action="#" method="POST">
                      <div class="row">
                        <div class="accordion form-group col-md-12" id="separa7">
                          <div class="card">
                            <div class="card-header" id="headiuno">
                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#escala1"
                                aria-expanded="false" aria-controls="escala1">
                                  Diagnosticos
                                </button>
                            </div>
                            <div class="collapse" id="escala1" aria-labelledby="headiuno" data-parent="#separa7">
                              <div class="card-body">
                                <div class="row">
                                  <div class="form-group col-md-12">
                                    <label class="col-form-label"><strong>Diagnosticos:</strong></label>
                                    <textarea class="form-control" id="mostrar_diagnostico4" name="mostrar_diagnostico4" onkeypress="return cmTexto(event);" readonly=""></textarea>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="card-header" id="headiuno">
                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#escala2"
                                aria-expanded="false" aria-controls="escala2">
                                  Estado Fisico
                                </button>
                            </div>
                            <div class="collapse" id="escala2" aria-labelledby="headiuno" data-parent="#separa7">
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
                                    <input type="range" class="form-control-range" id="nortonfisico" name="nortonfisico" onchange="norton()" value="2" min="1" max="4" step="1">
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
                                                1 Raciones de proteinas
                                                Menu &lt; 1000 kcal
                                                Toma 1/3 del menu
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
                                                2 Raciones de proteinas
                                                Menu  1000 kcal
                                                Toma % del menu
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
                                                3 Raciones de proteinas
                                                Menu 1500 kcal
                                                Toma mas de % menu
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
                                                4 Raciones de proteinas
                                                Menu 2000 kcal
                                                Toma todo el menu
                                                Bebe 1500 - 2000 ml
                                                T° 36 - 37 °C
                                                Mucosas humeas
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
                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#escala3"
                                aria-expanded="false" aria-controls="escala3">
                                  Estado Mental
                                </button>
                            </div>
                            <div class="collapse" id="escala3" aria-labelledby="headiuno" data-parent="#separa7">
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
                                    <input type="range" class="form-control-range" id="nortonmental" name="nortonmental" onchange="norton()" value="2" min="1" max="4" step="1">
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
                                                Despierta solo con estimulos
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
                                                Respuesta lenta a fuertes estimulos
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
                                              <th scope="col">Apatico</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td class="text-justify">
                                                Aletargado, olvidadizo
                                                somnoliento, pasivo, torpe,
                                                perezoso
                                                Ante estimulo, despierta sin
                                                dificultad y permanece orientado
                                                Obedece ordenes sencillas
                                                Posible desorientacion en el tiempo
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
                                                perosna
                                                Responde adecuadamente a
                                                estimulos visuales, auditivos y
                                                tactiles
                                                Comprende la informacion
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
                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#escala4"
                                aria-expanded="false" aria-controls="escala4">
                                  Actividad
                                </button>
                            </div>
                            <div class="collapse" id="escala4" aria-labelledby="headiuno" data-parent="#separa7">
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
                                    <input type="range" class="form-control-range" id="nortonactividad" name="nortonactividad" onchange="norton()" value="2" min="1" max="4" step="1">
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
                                                Falta de autonomia para realiar
                                                todos sus movimientos
                                                (despendencia toal)
                                                Precia de ayuda para realizar
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
                                                Precisa ayuda de otro a travez de
                                                dispositivos mecanicos
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
                                                Es capaz de camniar con ayuda o
                                                supervision de otra persona o de
                                                medicos mecanicos como aparatos
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
                                                Capaz de camninar solo, aunque se
                                                ayude de aparatos de un solo
                                                punto de apoyo o lleve protesis
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
                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#escala5"
                                aria-expanded="false" aria-controls="escala5">
                                  Movilidad
                                </button>
                            </div>
                            <div class="collapse" id="escala5" aria-labelledby="headiuno" data-parent="#separa7">
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
                                    <input type="range" class="form-control-range" id="nortonmovilidad" name="nortonmovilidad" onchange="norton()" value="2" min="1" max="4" step="1">
                                    <div class="row">
                                      <div class="col-md-3">
                                        <table class="table table-bordered">
                                          <thead>
                                            <tr>
                                              <th scope="col">Inmovil</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td class="text-justify">
                                                Es incapaz de cambiar de postura
                                                por si mismo, mantener la posicion
                                                corporal o sustenrarla
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
                                                ayuda para realizar, comletar o
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
                                                autonoma, mantenerla o
                                                sustentarla
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
                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#escala6"
                                aria-expanded="false" aria-controls="escala6">
                                  Incontinencia
                                </button>
                            </div>
                            <div class="collapse" id="escala6" aria-labelledby="headiuno" data-parent="#separa7">
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
                                    <input type="range" class="form-control-range" id="nortonincontinencia" name="nortonincontinencia" onchange="norton()" value="2" min="1" max="4" step="1">
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
                                                No controla esporadicamente uno
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
                                                implantacion de sonda vesical y
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
                              <input type="text" class="form-control" placeholder="" id="nortontotal" name="nortontotal" readonly="" />
                            </div>
                            <div class="form-group col-md-2 text-right">
                              <label class="col-form-label">Nivel de Riesgo</label>
                            </div>
                            <div class="form-group col-md-4">
                              <input type="text" class="form-control" placeholder="" id="nortonnivel" name="nortonnivel" readonly="" />
                            </div>
                          </div>
                          <div class="form-group col-md-12  dropdown-divider"></div>
                          <div class="row">
                            <div class="col-md-12 text-center" id="btngnorton">
                              <input type="text" class="form-control" id="nmedpad5" name="nmedpad5" style="display:none" value="<?php echo ucwords($this->session->userdata('s_id'));?>" />
                              <input type="text" class="form-control" id="numhc5" name="numhc5" style="display:none" />
                            </div>
                            <div class="col-md-12 text-center" id="btnanorton" style="display:none">
                              <button type="button" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarnorton2">ACTUALIZAR</button>
                            </div>
                          </div>                         
                        </div>
                      </div>
                      </form>
                    </div>
                    <div class="collapse multi-collapse collapse" id="multi6" data-parent="#accordion2">
                      <div>
                        <form id="hcbradenq" action="#" method="POST">
                        <div class="accordion form-group col-md-12" id="separa8">
                          <div class="card">
                            <div class="card-header" id="headiuno">
                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#escalaq1"
                                aria-expanded="false" aria-controls="escalaq1">
                                  Movilidad
                                </button>
                              </div>
                              <div class="collapse" id="escalaq1" aria-labelledby="headiuno" data-parent="#separa8">
                                <div class="card-body">
                                  <div class="row">
                                   <div class="form-group col-md-12">
                                      <label for="formControlRange">Movilidad capacidad para cambiar y controlar la posicion del cuerpo</label>
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
                                      <input type="range" class="form-control-range" id="bradenmovilidad" name="bradenmovilidad" onchange="braden()" value="2" min="1" max="4" step="1">
                                      <div class="row">
                                        <div class="col-md-3">
                                          <table class="table table-bordered">
                                            <thead>
                                              <tr>
                                                <th scope="col">Completamente inmovil</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td class="text-justify">
                                                  No realiza ningun movimiento con
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
                                                  cambios en la posicion del cuerpo o
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
                                                  cambios en la posicion del cuerpo o
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
                                                  cambios de posicion sun ayuda
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
                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#escalaq2"
                                aria-expanded="false" aria-controls="escalaq2">
                                  Actividad
                                </button>
                              </div>
                              <div class="collapse" id="escalaq2" aria-labelledby="headiuno" data-parent="#separa8">
                                <div class="card-body">
                                  <div class="row">
                                     <div class="form-group col-md-12">
                                      <label for="formControlRange">Actividad nivel de actividad fisica</label>
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
                                      <input type="range" class="form-control-range" id="bradenactividad" name="bradenactividad" onchange="braden()" value="2" min="1" max="4" step="1">
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
                                                  o sin ayuda. Pasala mayor parte de
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
                                                  Camina fuera de la habitacion al
                                                  menos dos veces al dia y dentro de
                                                  la habitacion al menos una vez cada
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
                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#escalaq3"
                                aria-expanded="false" aria-controls="escalaq3">
                                  Persecion Sensorial
                                </button>
                              </div>
                              <div class="collapse" id="escalaq3" aria-labelledby="headiuno" data-parent="#separa8">
                                <div class="card-body">
                                  <div class="row">
                                     <div class="form-group col-md-12">
                                      <label for="formControlRange">Persecion Sensorial capacidad de responder adecuadamente, segun su nivel de desarrollo al disconfort</label>
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
                                      <input type="range" class="form-control-range" id="bradenpersecion" name="bradenpersecion" onchange="braden()" value="2" min="1" max="4" step="1">
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
                                                  No responde a estimulos dolorosos
                                                  (no gime, no se estremece ni se
                                                  agarra) debido a un bajo nivel de
                                                  conciencia o a sedacion O
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
                                                  Responde solo a estimulos
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
                                                  alguna alteracion sensorial que
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
                                                  tiene ninguna alteracion sensorial
                                                  que limit su capacidad de sentir o
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
                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#escalaq4"
                                aria-expanded="false" aria-controls="escalaq4">
                                  Humedad
                                </button>
                              </div>
                              <div class="collapse" id="escalaq4" aria-labelledby="headiuno" data-parent="#separa8">
                                <div class="card-body">
                                  <div class="row">
                                     <div class="form-group col-md-12">
                                      <label for="formControlRange">Humedad nivel de expocision de la piel humeda</label>
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
                                      <input type="range" class="form-control-range" id="bradenhumeda" name="bradenhumeda" onchange="braden()" value="2" min="1" max="4" step="1">
                                      <div class="row">
                                        <div class="col-md-3">
                                          <table class="table table-bordered">
                                            <thead>
                                              <tr>
                                                <th scope="col">Completamente humeda</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td class="text-justify">
                                                  la piel se mantiene humeda casi
                                                  permanentemente debido a la
                                                  transpiracion, orina, drenaje, etc.
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
                                                <th scope="col">Muy humeda</th>
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
                                                <th scope="col">Ocacionalmente humeda</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td class="text-justify">
                                                  La piel esta humeda de forma
                                                  ocasional, necesitando cmabio de
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
                                                <th scope="col">Raramente humeda</th>
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
                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#escalaq5"
                                aria-expanded="false" aria-controls="escalaq5">
                                  Nutricion
                                </button>
                              </div>
                              <div class="collapse" id="escalaq5" aria-labelledby="headiuno" data-parent="#separa8">
                                <div class="card-body">
                                  <div class="row">
                                     <div class="form-group col-md-12">
                                      <label for="formControlRange">Nutricion patron habitual de ingesta de alimentos</label>
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
                                      <input type="range" class="form-control-range" id="bradennutricion" name="bradennutricion" onchange="braden()" value="2" min="1" max="4" step="1">
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
                                                  Esta en ayunas; o a dieta liquida; o
                                                  con sueroterapia mas de 5 dias.
                                                  Raras veces come mas de la mitad
                                                  de cualquuier comida ofrecida
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
                                                  Se le admnisitra una nutricion
                                                  enteral (SNG) o nutricion
                                                  parental(IV) que le proporciona
                                                  una cantidad inadecuada de 
                                                  calorias y minerales para su edad
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
                                                  Come la mitad de la mayoria de las
                                                  comidas. Come un total de 4
                                                  raciones de proteinas al dia
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
                                                  proporciona las calorias adecuadas
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
                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#escalaq6"
                                aria-expanded="false" aria-controls="escalaq6">
                                  Friccion
                                </button>
                              </div>
                              <div class="collapse" id="escalaq6" aria-labelledby="headiuno" data-parent="#separa8">
                                <div class="card-body">
                                  <div class="row">
                                     <div class="form-group col-md-12">
                                      <label for="formControlRange">Friccion</label>
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
                                      <input type="range" class="form-control-range" id="bradenfriccion" name="bradenfriccion" onchange="braden()" value="2" min="1" max="4" step="1">
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
                                                  picores o agitacion le llevan a un
                                                  movimiento y friccion casi
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
                                                  una ayuda minima. Mientras se
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
                              <input type="text" class="form-control" placeholder="" id="bradentotal" name="bradentotal" readonly="" />
                            </div>
                            <div class="form-group col-md-2 text-right">
                              <label class="col-form-label">Nivel de Riesgo</label>
                            </div>
                            <div class="form-group col-md-4">
                              <input type="text" class="form-control" placeholder="" id="bradennivel" name="bradennivel" readonly="" />
                            </div>
                          </div>
                          <div class="form-group col-md-12  dropdown-divider"></div>
                          <div class="row">
                            <div class="col-md-12 text-center" id="btngbraden">
                              <input type="text" class="form-control" id="nmedpad6" name="nmedpad6" style="display:none" value="<?php echo ucwords($this->session->userdata('s_id'));?>" />
                              <input type="text" class="form-control" id="numhc6" name="numhc6" style="display:none" />
                            </div>
                            <div class="col-md-12 text-center" id="btnabraden" style="display:none">
                              <button type="button" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarbraden2">ACTUALIZAR</button>
                            </div>
                          </div>
                        </div>
                        </form>
                      </div>                      
                    </div>
                    </div>
                  </div>

                </div><!-- div del col-md-12 -->

                  </div>
                </div>
                </div>
                </div>
              </div>

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
                            <input type="text" id="nombres" id="nombres" class="form-control" onkeyup="solopac6()" />
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
          <div class="modal" id="confirme" tabindex="-1" role="dialog">
          </div>
          <div class="modal" id="confirme2" tabindex="-1" role="dialog">
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
                <h5 class="text">Estas Seguro de Actualizar Este Paciente</h5>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" onclick="actpc();"> Si </button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </div>
              </div>
            </div>
          </div>
          <div class="modal" id="confirmarpad" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                <div class="modal-body">
                  <h5 class="text">Estas Seguro de Guardar Ingreso al PAD</h5>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="inhistoriapad()"> Si </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal" id="confirmarpad2" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                <div class="modal-body">
                  <h5 class="text">Estas Seguro de Actualizar Ingreso al PAD</h5>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="acthistoriapad()"> Si </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal" id="confirmarconcentimiento" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                <div class="modal-body">
                  <h5 class="text">Estas Seguro de Guardar Concentimiento</h5>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="inhistoriaconcentimiento()"> Si </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal" id="confirmarconcentimiento2" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                <div class="modal-body">
                  <h5 class="text">Estas Seguro de Actualizar Concentimiento</h5>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="acthistoriaconcentimiento()"> Si </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal" id="confirmarbarthel" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                <div class="modal-body">
                  <h5 class="text">Estas Seguro de Guardar Barthel</h5>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="inhistoriabarthel()"> Si </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal" id="confirmarbarthel2" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                <div class="modal-body">
                  <h5 class="text">Estas Seguro de Actualizar Barthel</h5>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="acthistoriabarthel()"> Si </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal" id="confirmarvaloracion" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                <div class="modal-body">
                  <h5 class="text">Estas Seguro de Guardar Valoracion</h5>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="inhistoriavaloracion()"> Si </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal" id="confirmarvaloracion2" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                <div class="modal-body">
                  <h5 class="text">Estas Seguro de Actualizar Valoracion</h5>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="acthistoriavaloracion()"> Si </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal" id="confirmarnorton" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                <div class="modal-body">
                  <h5 class="text">Estas Seguro de Guardar Norton</h5>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="inhistorianorton()"> Si </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal" id="confirmarnorton2" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                <div class="modal-body">
                  <h5 class="text">Estas Seguro de Actualizar Norton</h5>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="acthistorianorton()"> Si </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal" id="confirmarbraden" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                <div class="modal-body">
                  <h5 class="text">Estas Seguro de Guardar Braden</h5>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="inhistoriabraden()"> Si </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal" id="confirmarbraden2" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                <div class="modal-body">
                  <h5 class="text">Estas Seguro de Actualizar Braden</h5>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="acthistoriabraden()"> Si </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                  </div>
                </div>
              </div>
          </div>
    </div>
    </div>
    </div>
    <script type="text/javascript">
      window.onload = function() {
        document.title="Cons. Historias | H. Clinica";
      }
    </script>