    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Historia Enfermeria Primera Vez</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Historia Enfermeria</a></li>
              <li class="breadcrumb-item active">Historia Enfermeria Primera Vez</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="wrapper">
    <div class="col-12">
    <div class="card">
    <?php      
    ?>
              <div class="form-row p-2">
                <div class="form-group col-md-3">
                  <label for="" class="col-form-label">Debe Seleccionar al Paciente:</label>
                  <button type="button" id="selecpc" class="btn btn-azul " data-toggle="modal" data-target="#seleciona">SELECCIONAR PACIENTE</button>
                </div>
                <div class="form-group col-md-3">
                  <label class="col-form-label"><strong>Tipo de Documento</strong></label>
                  <select class="form-control" id="tdoc" name="tdoc" readonly="">
                    <option selected value="0">Elija</option>
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
                    <input type="text" class="form-control" id="nid" name="nid" style="display:none" readonly=""/>
                    <input type="text" class="form-control" id="nenf" name="nenf" style="display:none" value="<?php echo ucwords($this->session->userdata('s_n')).', '.ucwords($this->session->userdata('s_ap'));?>" />
                  </div>
                </div>
                <div class="form-group col-md-3">
                  <label for="nombre" class="col-form-label"><strong>Nombres/Apellidos</strong></label>
                  <div class="input-group">
                    <div class="input-group-prepend"><!--al inicio prepend y append al final-->
                        <span class="input-group-text">
                            <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Nombres Apellidos" id="elnombre" name="elnombre" readonly="" required/>
                  </div>
                </div>
                 <div class="form-group col-md-4">
                  <label class="col-form-label"><strong>Tipo de Tratamiento</strong></label>
                  <select class="form-control" id="tpt" name="tpt" readonly="">
                    <option selected value="0">Elija</option>
                   <!--  <option value="agudo salud en casa">agudo salud en casa</option>
                    <option value="cronico sin enfermeria">cronico sin enfermeria</option>
                    <option value="Paliativo">Paliativo</option> -->
                  </select>
                </div>

                <div class="form-group col-md-12">
                  <div class="card-header">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="nav-item">
                          <a class="nav-link active bg-white" id="uno" href="#multi1" data-toggle="collapse" data-target="#multi1" aria-expanded="false" aria-controls="multi1" onclick="pasar('1')"><font size="5">HISTORIA DE ENFERMERIA</font></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link bg-primaryhc text-uppercase text-white" id="dos" href="#multi2" data-toggle="collapse" data-target="#multi2" aria-expanded="false" aria-controls="multi2" onclick="pasar('2')"><font size="5">Plan de Cuidado</font></a>
                        </li>
                         <li class="nav-item">
                          <a class="nav-link bg-primaryhc text-uppercase text-white" id="tres" href="#multi3" data-toggle="collapse" data-target="#multi3" aria-expanded="false" aria-controls="multi3" onclick="pasar('3')"><font size="5">Escala de Carga</font></a>
                        </li>
                         <li class="nav-item">
                          <a class="nav-link bg-primaryhc text-uppercase text-white" id="cua" href="#multi4" data-toggle="collapse" data-target="#multi4" aria-expanded="false" aria-controls="multi4" onclick="pasar('4')"><font size="5">V. Sociofamiliar</font></a>
                        </li>
                    </ul>
                  </div>
                  <div class="card body">
                    <div class="accordion" id="accordion2">
                      <div class="collapse multi-collapse collapse show" id="multi1" data-parent="#accordion2">
                        <form id="hcpad_enf" action="#" method="POST">
                        <div class="form-row ">
                          <div class="form-group col-md-12">
                            <div class="card-header">
                              <div class="accordion" id="accordion3">
                                <div class="collapse multi-collapse collapse show" id="op1" data-parent="#accordion3">
                                  <div class="form-row">
                                    <div class="accordion form-group col-md-12" id="separa1">
                                      <div class="card">
                                        <div class="card-header" id="headiuno">
                                          <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpad1"
                                          aria-expanded="false" aria-controls="enfpad1">
                                            Diagnóstico, Antecedentes y Valoración Subjetiva
                                          </button>
                                        </div>
                                        <div class="collapse" id="enfpad1" aria-labelledby="headiuno" data-parent="#separa1">
                                          <div class="card-body">
                                            <div class="row">
                                              <div class="form-group col-md-4">
                                                <button type="button" class="btn btn-primary" onclick="traerdiagnosticos_enf()">Traer Diagnósticos</button>
                                              </div>
                                              <div class="form-group col-md-12">
                                                <label class="col-form-label"><strong>Diagnósticos:</strong></label>
                                                <textarea class="form-control" id="mdiagnosticos" name="mdiagnosticos" readonly=""></textarea>
                                              </div>
                                              <div class="form-group col-md-12">
                                                <label for="nota" class="col-form-label"><strong>Antecedentes:</strong></label>
                                                <textarea class="form-control" rows="15" id="antecedentes" name="antecedentes" onkeypress="return cmTextoNum(event);" required></textarea>
                                              </div>
                                              <div class="form-group col-md-12">
                                                <label for="nota" class="col-form-label"><strong>Valoración Subjetiva estado general:</strong></label>
                                                <textarea class="form-control" rows="8" id="valoracionsubjetiva" name="valoracionsubjetiva" onkeypress="return cmTextoNum(event);" required></textarea>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card-header" id="headiuno">
                                          <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpad2"
                                          aria-expanded="false" aria-controls="enfpad2">
                                            Signos Vitales
                                          </button>
                                        </div>
                                        <div class="collapse" id="enfpad2" aria-labelledby="headiuno" data-parent="#separa1">
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
                                                  <input type="text" class="form-control" placeholder="" id="svfc" name="svfc" minlength="1" maxlength="6" pattern="\S[0-9A-Za-z, ]{1,6}" required />
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
                                                  <input type="text" class="form-control" placeholder="" id="svfr" name="svfr" minlength="1" maxlength="8" pattern="\S[A-Za-z0-9,. ]{1,8}" required />
                                                </div>
                                              </div>
                                              <div class="form-group col-md-4">
                                                <label class="col-form-label"><strong>Sístole</strong></label>  
                                                <input type="text" class="form-control" placeholder="" id="sisenf" name="sisenf" onkeyup="sumartensionarterialenf();" minlength="1" maxlength="6" pattern="\S[A-Za-z0-9 ]{1,6}" required />
                                                <label class="col-form-label"><strong>Diástole</strong></label>
                                                <input type="text" class="form-control" placeholder="" id="diasenf" name="diasenf" onkeyup="sumartensionarterialenf();" minlength="1" maxlength="6" pattern="\S[A-Za-z0-9 ]{1,6}" required />
                                                <label class="col-form-label"><strong>TENSION ARTERIAL:</strong></label>
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                      <img src="<?php echo base_url();?>assets/img/ta.jpg" class="rounded-circle" width="22px" height="22px">
                                                    </span>
                                                  </div>              
                                                  <input type="text" class="form-control" placeholder="" id="svta" name="svta" required />
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
                                                  <input type="text" class="form-control" placeholder="" id="svt" name="svt" minlength="1" maxlength="6" pattern="\S[A-Za-z0-9 ]{1,6}" required />
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
                                                  <input type="text" class="form-control" placeholder="" id="svsaturacion" name="svsaturacion" minlength="1" maxlength="6" pattern="\S[A-Za-z0-9,. ]{1,6}" required />
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
                                                  <input type="text" class="form-control" placeholder="" id="svglucometria" name="svglucometria" minlength="1" maxlength="6" pattern="\S[A-Za-z0-9,. ]{1,6}" required />
                                                </div>
                                              </div>
                                              
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card-header" id="headiuno">
                                          <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpad33"
                                          aria-expanded="false" aria-controls="enfpad33">
                                            Dominio 1: Promoción de la Salud
                                          </button>
                                        </div>
                                        <div class="collapse" id="enfpad33" aria-labelledby="headiuno" data-parent="#separa1">
                                          <div class="card-body">
                                            <div class="row">
                                              <div class="form-group col-md-12">
                                                <label for="nota" class="col-form-label"><strong>¿Que sabe usted sobre su enfermedad?:</strong></label>
                                                <input type="text" class="form-control" placeholder="" id="dom1p1" name="dom1p1" minlength="1" maxlength="500" pattern="\S[A-Za-z0-9,. ]{1,500}" required />
                                              </div>
                                              <div class="form-group col-md-12">
                                                <label for="nota" class="col-form-label"><strong>¿Necesita mayor información sobre su enfermedad?:</strong></label>
                                                <input type="text" class="form-control" placeholder="" id="dom1p2" name="dom1p2" minlength="1" maxlength="500" pattern="\S[A-Za-z0-9,. ]{1,500}" required />
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card-header" id="headiuno">
                                          <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpad3"
                                          aria-expanded="false" aria-controls="enfpad3">
                                            Dominio 2: Nutrición
                                          </button>
                                        </div>
                                        <div class="collapse" id="enfpad3" aria-labelledby="headiuno" data-parent="#separa1">
                                          <div class="card-body">
                                            <div class="row">
                                              <div class="form-group col-md-12">
                                                <label class="col-form-label  text-uppercase"><strong>Alimentación</strong></label>
                                                <div class="row">
                                                  <div class="col-md-3">
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="d2nutricion" onclick="verificarradiopad_enf()"  value="Dieta" >
                                                        <label class="form-check-label">Dieta</label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="d2nutricion" onclick="verificarradiopad_enf()"  value="SNG">
                                                        <label class="form-check-label">SNG</label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="d2nutricion" onclick="verificarradiopad_enf()"  value="SOG" >
                                                        <label class="form-check-label">SOG</label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="d2nutricion" onclick="verificarradiopad_enf()" value="SNY">
                                                        <label class="form-check-label">SNY</label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="d2nutricion" onclick="verificarradiopad_enf()" value="NPT">
                                                        <label class="form-check-label">NPT</label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="d2nutricion" onclick="verificarradiopad_enf()" value="Gastrostomía">
                                                        <label class="form-check-label">Gastrostomía</label>
                                                      </div>
                                                      <div class="form-group">
                                                        <label class="col-form-label">Observaciones</label>
                                                        <input type="text" class="form-control" id="dom2otro" name="dom2otro" placeholeder="activo" />
                                                        <input type="text" class="form-control" id="dom2nutricion" name="dom2nutricion" style="display:none" />
                                                      </div>
                                                  </div>
                                                   <div class="col-md-3">
                                                    <label class="form-check-label text-uppercase"><strong>Mucosa oral:</strong> </label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2mucosa" onclick="verificarradiopad_enf()"  value="No aplica" >
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2mucosa" onclick="verificarradiopad_enf()"  value="Intacta" >
                                                      <label class="form-check-label">Intacta</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2mucosa" onclick="verificarradiopad_enf()"  value="Lesiones">
                                                      <label class="form-check-label">Lesiones</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2mucosa" onclick="verificarradiopad_enf()"  value="Dificultad para deglutir" >
                                                      <label class="form-check-label">Dificultad para deglutir</label>
                                                      <input type="text" class="form-control" id="dom2mucosa" name="dom2mucosa" style="display:none" />
                                                    </div><br>
                                                    <label class="form-check-label text-uppercase"><strong>Dentadura:</strong></label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2dentadura" onclick="verificarradiopad_enf()"  value="No aplica" >
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2dentadura" onclick="verificarradiopad_enf()"  value="completa" >
                                                      <label class="form-check-label">Completa</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2dentadura" onclick="verificarradiopad_enf()"  value="incompleta">
                                                      <label class="form-check-label">Incompleta</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2dentadura" onclick="verificarradiopad_enf()"  value="prótesis dental" >
                                                      <label class="form-check-label">Prótesis dental</label>
                                                      <input type="text" class="form-control" id="dom2dentadura" name="dom2dentadura" style="display:none" />
                                                    </div>                                           
                                                  </div>
                                                  <div class="col-md-3">
                                                    <label class="form-check-label text-uppercase"><strong>Piel:</strong> </label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2piel" onclick="verificarradiopad_enf()"  value="No aplica" >
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2piel" onclick="verificarradiopad_enf()"  value="normal" >
                                                      <label class="form-check-label">Normal</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2piel" onclick="verificarradiopad_enf()"  value="pálida">
                                                      <label class="form-check-label">Pálida</label>
                                                      <input type="text" class="form-control" id="dom2piel" name="dom2piel" style="display:none" />
                                                    </div><br><br>
                                                    <label class="form-check-label text-uppercase"><strong>Hidratacion:</strong> </label>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2hidratacion" onclick="verificarradiopad_enf()"  value="normal" >
                                                      <label class="form-check-label">Normal</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2hidratacion" onclick="verificarradiopad_enf()"  value="turgente" >
                                                      <label class="form-check-label">Turgente</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2hidratacion" onclick="verificarradiopad_enf()"  value="seca">
                                                      <label class="form-check-label">Seca</label>
                                                      <input type="text" class="form-control" id="dom2hidratacion" name="dom2hidratacion" style="display:none" />
                                                    </div>
                                                  </div>
                                                  <div class="col-md-3">
                                                    <label class="form-check-label text-uppercase"><strong>Abdomen:</strong> </label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2adobmen" onclick="verificarradiopad_enf()"  value="No aplica" >
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2adobmen" onclick="verificarradiopad_enf()"  value="blando" >
                                                      <label class="form-check-label">Blando</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2adobmen" onclick="verificarradiopad_enf()"  value="distendido">
                                                      <label class="form-check-label">Distendido</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2adobmen" onclick="verificarradiopad_enf()"  value="doloroso" >
                                                      <label class="form-check-label">Doloroso</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2adobmen" onclick="verificarradiopad_enf()"  value="valonado">
                                                      <label class="form-check-label">Valonado</label>
                                                      <input type="text" class="form-control" id="dom2adobmen" name="dom2adobmen" style="display:none" />
                                                    </div> 
                                                  </div><br>
                                                  <div class="form-group col-md-12  dropdown-divider"></div>
                                                  <div class="col-md-3">
                                                    <label class="form-check-label text-uppercase"><strong>Rsls:</strong> </label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2rsls" onclick="verificarradiopad_enf()"  value="No aplica" >
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2rsls" onclick="verificarradiopad_enf()"  value="normales" >
                                                      <label class="form-check-label">Normales</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2rsls" onclick="verificarradiopad_enf()"  value="aumentado">
                                                      <label class="form-check-label">Aumentado</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2rsls" onclick="verificarradiopad_enf()"  value="disminuidos" >
                                                      <label class="form-check-label">Disminuidos</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2rsls" onclick="verificarradiopad_enf()"  value="ausentes">
                                                      <label class="form-check-label">Ausentes</label>
                                                      <input type="text" class="form-control" id="dom2rsls" name="dom2rsls" style="display:none" />
                                                    </div> 
                                                  </div><br>
                                                  <div class="col-md-4">
                                                    <label class="form-check-label text-uppercase"><strong>SNG:</strong> </label>
                                                    <div class="form-group">
                                                      <label class="col-rom-label">Residuo Gástrico</label>
                                                      <input type="text" class="form-control" id="d2sng" name="d2sng" >
                                                    </div>
                                                  </div><br>
                                                  <div class="form-group col-md-4">
                                                    <label class="col-form-label"><strong>Drenaje:</strong></label>
                                                    <div class="row">
                                                       <div class="form-group col-md-4">
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d2drenaje" onclick="verificarradiopad_enf()" onchange="" value="si">
                                                          <label class="form-check-label">SI</label>
                                                        </div>
                                                      </div>
                                                      <div class="form-group col-md-4">
                                                       <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d2drenaje" onclick="verificarradiopad_enf()" onchange="" value="no">
                                                          <label class="form-check-label">NO</label>
                                                          <input type="text" class="form-control" id="dom2drenaje" name="dom2drenaje" style="display:none" />
                                                        </div>
                                                      </div> 
                                                    
                                                      <div class="col-md-12">
                                                        <!-- <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="" onclick="verificarradiopad_enf()"  value="drenaje">
                                                          <label class="form-check-label">drenaje</label>
                                                          
                                                        </div> -->
                                                          <label class="col-form-label">Observaciones</label>
                                                          <input type="text" class="form-control" id="d2caracteristicas" name="d2caracteristicas" >
                                                        <div class="form-check">
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <!-- <div class="form-group col-md-4">
                                                    <label class="col-form-label"><strong>Gastrostomia:</strong></label>
                                                    <div class="row">
                                                       <div class="form-group col-md-4">
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d2gastrostomia" onclick="verificarradiopad_enf()" onchange="" value="si">
                                                          <label class="form-check-label">SI</label>
                                                        </div>
                                                      </div>
                                                      <div class="form-group col-md-4">
                                                       <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d2gastrostomia" onclick="verificarradiopad_enf()" onchange="" value="no">
                                                          <label class="form-check-label">NO</label>
                                                          <input type="text" class="form-control" id="dom2gastrostomia" name="dom2gastrostomia" style="display:none" />
                                                        </div>
                                                      </div>                                                     
                                                    </div>
                                                  </div> -->
                                                  <div class="form-group col-md-6 text-center ">
                                                    <span class="btn-verde">¿No Validar campos?</span>
                                                  </div>
                                                  <div class="form-group col-md-6 text-center ">
                                                    <div class="row">
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="elrefiereepadenf[]" onclick="paciente_refiere_hcpad_enf()" value="aplicar">
                                                        <label class="form-check-label">Aplicar</label>
                                                         <input class="forrm-control" type="text" id="auxhcpdenf" name="auxhcpdenf" style="display:none" >
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card-header" id="headiuno">
                                          <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpad4"
                                          aria-expanded="false" aria-controls="enfpad4">
                                            Dominio 3: Eliminación
                                          </button>
                                        </div>
                                        <div class="collapse" id="enfpad4" aria-labelledby="headiuno" data-parent="#separa1">
                                          <div class="card-body">
                                            <div class="row">
                                              <div class="form-group col-md-12">
                                                <label class="col-form-label"><strong></strong></label>
                                                <div class="row">
                                                  <div class="col-md-4">
                                                    <label class="form-check-label text-uppercase"><strong>Deposicion:</strong> </label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d3deposiciones" onclick="verificarradiopad_enf()"  value="No aplica" >
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d3deposiciones" onclick="verificarradiopad_enf()"  value="normal" >
                                                      <label class="form-check-label">Normal</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d3deposiciones" onclick="verificarradiopad_enf()"  value="estreñimiento">
                                                      <label class="form-check-label">Estreñimiento</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d3deposiciones" onclick="verificarradiopad_enf()"  value="diarrea" >
                                                      <label class="form-check-label">Diarrea</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d3deposiciones" onclick="verificarradiopad_enf()"  value="melena">
                                                      <label class="form-check-label">Melena</label>
                                                    </div> 
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d3deposiciones" onclick="verificarradiopad_enf()"  value="hematoquecia">
                                                      <label class="form-check-label">Hematoquecia</label>
                                                      <input type="text" class="form-control" id="dom3deposiciones" name="dom3deposiciones" style="display:none" />
                                                    </div>
                                                    <div class="form-group">
                                                      <label class="form-check-label "><strong>Observaciones</strong> </label>
                                                      <input type="text" class="form-control" id="dom3tipo" name="dom3tipo">
                                                    </div> 
                                                  </div>
                                                  <div class="form-group col-md-4">
                                                    <label class="col-form-label"><strong>Vómito:</strong></label>
                                                    <div class="row">
                                                       <div class="form-group col-md-4">
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d3vomito" onclick="verificarradiopad_enf()" onchange="" value="si">
                                                          <label class="form-check-label">Si</label>
                                                        </div>
                                                      </div>
                                                      <div class="form-group col-md-4">
                                                       <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d3vomito" onclick="verificarradiopad_enf()" onchange="" value="no">
                                                          <label class="form-check-label">No</label>
                                                          <input type="text" class="form-control" id="dom3vomito" name="dom3vomito" style="display:none" />
                                                        </div>
                                                      </div>                                                     
                                                    </div>
                                                    <div class="form-group">
                                                      <label class="form-check-label"><strong>Observaciones</strong> </label>
                                                      <input type="text" class="form-control" id="d3caracteristicas" name="d3caracteristicas">
                                                    </div>
                                                    <!-- <div class="form-group col-md-4"> -->
                                                      <label class="col-form-label"><strong>Colostomía:</strong></label>
                                                      <div class="row">
                                                         <div class="form-group col-md-4">
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d3colostomia" onclick="verificarradiopad_enf()" onchange="" value="si">
                                                            <label class="form-check-label">Si</label>
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                         <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d3colostomia" onclick="verificarradiopad_enf()" onchange="" value="no">
                                                            <label class="form-check-label">No</label>
                                                            <input type="text" class="form-control" id="dom3colostomia" name="dom3colostomia" style="display:none" />
                                                          </div>
                                                        </div>                                                     
                                                      </div>
                                                    <!-- </div> -->
                                                  </div>
                                                  <div class="col-md-4">                                                    
                                                    <label class="form-check-label text-uppercase"><strong>Diuresis:</strong> </label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d3oresis" onclick="verificarradiopad_enf()"  value="No aplica" >
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d3oresis" onclick="verificarradiopad_enf()"  value="espontánea" >
                                                      <label class="form-check-label">Espontánea</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d3oresis" onclick="verificarradiopad_enf()"  value="retención">
                                                      <label class="form-check-label">Retención</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d3oresis" onclick="verificarradiopad_enf()"  value="incontinencia" >
                                                      <label class="form-check-label">Incontinencia</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d3oresis" onclick="verificarradiopad_enf()"  value="catéter urinario">
                                                      <label class="form-check-label">Catéter urinario</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d3oresis" onclick="verificarradiopad_enf()"  value="poliuria">
                                                      <label class="form-check-label">Poliuria</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d3oresis" onclick="verificarradiopad_enf()"  value="oliguria">
                                                      <label class="form-check-label">Oliguria</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d3oresis" onclick="verificarradiopad_enf()"  value="anuria">
                                                      <label class="form-check-label">Anuria</label>
                                                      <input type="text" class="form-control" id="dom3oresis" name="dom3oresis" style="display:none" />
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card-header" id="headiuno">
                                          <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpad5"
                                          aria-expanded="false" aria-controls="enfpad5">
                                            Dominio 4: Actividad y Reposo
                                          </button>
                                        </div>
                                        <div class="collapse" id="enfpad5" aria-labelledby="headiuno" data-parent="#separa1">
                                          <div class="card-body">
                                            <div class="row">
                                              <div class="form-group col-md-12">
                                                <label class="col-form-label"><strong></strong></label>
                                                <div class="row">
                                                  <div class="col-md-4">
                                                    <label class="form-check-label text-uppercase"><strong>Grado de dependencia:</strong></label>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4dependencia" onclick="verificarradiopad_enf()"  value="No aplica" >
                                                      <label class="form-check-label">No aplica</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4dependencia" onclick="verificarradiopad_enf()"  value="I" >
                                                      <label class="form-check-label">I</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4dependencia" onclick="verificarradiopad_enf()"  value="II">
                                                      <label class="form-check-label">II</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4dependencia" onclick="verificarradiopad_enf()"  value="III" >
                                                      <label class="form-check-label">III</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4dependencia" onclick="verificarradiopad_enf()"  value="IV">
                                                      <label class="form-check-label">IV</label>
                                                      <input type="text" class="form-control" id="dom4dependencia" name="dom4dependencia" style="display:none" />
                                                    </div> 
                                                  </div>
                                                   <div class="col-md-4">
                                                    <label class="form-check-label text-uppercase"><strong>Sueño:</strong></label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4sueno" onclick="verificarradiopad_enf()"  value="No aplica" >
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4sueno" onclick="verificarradiopad_enf()"  value="completo" >
                                                      <label class="form-check-label">Completo</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4sueno" onclick="verificarradiopad_enf()"  value="parcial">
                                                      <label class="form-check-label">Parcial</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4sueno" onclick="verificarradiopad_enf()"  value="insomnio" >
                                                      <label class="form-check-label">Insomnio</label>
                                                    </div>
                                                    <div class="form-group">
                                                      <label class="col-form-label">Observaciones</label>
                                                      <input type="text" class="form-control" id="d4otros" name="d4otros" >
                                                      <input type="text" class="form-control" id="dom4sueno" name="dom4sueno" style="display:none" />
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-4">
                                                    <label class="form-check-label text-uppercase"><strong>Fiebre:</strong></label>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4fiebre" onclick="verificarradiopad_enf()"  value="si" >
                                                      <label class="form-check-label">Si</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4fiebre" onclick="verificarradiopad_enf()"  value="no">
                                                      <label class="form-check-label">No</label>
                                                    </div><br>
                                                    <div class="form-group">
                                                      <label class="col-form-label">Observaciones</label>
                                                      <input type="text" class="form-control" id="d4tipo" name="d4tipo">
                                                      <input type="text" class="form-control" id="dom4fiebre" name="dom4fiebre" style="display:none" />
                                                    </div> 
                                                  </div>
                                                  <div class="form-group col-md-12  dropdown-divider"></div>
                                                  <div class="col-md-4">
                                                    <label class="form-check-label text-uppercase"><strong>Movilidad Fisica:</strong></label>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4movilidad" onclick="verificarradiopad_enf()"  value="No aplica" >
                                                      <label class="form-check-label">No aplica</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4movilidad" onclick="verificarradiopad_enf()"  value="hemiplejia" >
                                                      <label class="form-check-label">Hemiplejia</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4movilidad" onclick="verificarradiopad_enf()"  value="hemiparesia">
                                                      <label class="form-check-label">Hemiparesia</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4movilidad" onclick="verificarradiopad_enf()"  value="cuadriplejia">
                                                      <label class="form-check-label">Cuadriplejia</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4movilidad" onclick="verificarradiopad_enf()"  value="fracturas">
                                                      <label class="form-check-label">Fracturas</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4movilidad" onclick="verificarradiopad_enf()"  value="aparatos externos">
                                                      <label class="form-check-label">Apoyos externos</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4movilidad" onclick="verificarradiopad_enf()"  value="aparatos externos">
                                                      <label class="form-check-label">Aparatos externos</label>
                                                    </div>
                                                    <div class="form-group">
                                                      <label class="col-form-label">Observaciones</label>
                                                      <input type="text" class="form-control" id="d4movilidadetalle" name="d4movilidadetalle">
                                                      <input type="text" class="form-control" id="dom4movilidad" name="dom4movilidad" style="display:none" />
                                                    </div> 
                                                    <!-- <div class="form-group">
                                                      <label class="form-check-label"><strong>Apoyos externos</strong></label>
                                                      <input type="text" class="form-control" id="d4apoyo" name="d4apoyo">
                                                      
                                                    </div> --> 
                                                  </div>
                                                  <div class="col-md-3">
                                                    <label class="form-check-label text-uppercase"><strong>Fuerza Muscular:</strong></label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4muscular" onclick="verificarradiopad_enf()"  value="No aplica" >
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4muscular" onclick="verificarradiopad_enf()"  value="conservada" >
                                                      <label class="form-check-label">Conservada</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4muscular" onclick="verificarradiopad_enf()"  value="disminuida">
                                                      <label class="form-check-label">Disminuida</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4muscular" onclick="verificarradiopad_enf()"  value="flacidez">
                                                      <label class="form-check-label">Flacidez</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4muscular" onclick="verificarradiopad_enf()"  value="contractura">
                                                      <label class="form-check-label">Contractura</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4muscular" onclick="verificarradiopad_enf()"  value="parálisis">
                                                      <label class="form-check-label">Parálisis</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4muscular" onclick="verificarradiopad_enf()"  value="herida quirúrgica">
                                                      <label class="form-check-label">Herida Quirúrgica</label>
                                                    </div><br>
                                                    <div class="form-group">
                                                      <label class="col-form-label">Observaciones</label>
                                                      <input type="text" class="form-control" id="d4musculardetalle" name="d4musculardetalle">
                                                      <input type="text" class="form-control" id="dom4muscular" name="dom4muscular" style="display:none" />
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-5">
                                                    <label class="form-check-label text-uppercase"><strong>Respuestas Cardiovasculares Respiratorias:</strong></label>
                                                    <div class="form-group">
                                                    </div>
                                                      <label class="form-check-label"><strong>FC:</strong></label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4respiratorias" onclick="verificarradiopad_enf()"  value="No aplica" >
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4respiratorias" onclick="verificarradiopad_enf()"  value="regular" >
                                                      <label class="form-check-label">Regular</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4respiratorias" onclick="verificarradiopad_enf()"  value="irregular">
                                                      <label class="form-check-label">Irregular</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4respiratorias" onclick="verificarradiopad_enf()"  value="cianosis">
                                                      <label class="form-check-label">Cianosis</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4respiratorias" onclick="verificarradiopad_enf()"  value="hipertensión arterial">
                                                      <label class="form-check-label">Hipertensión arterial</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4respiratorias" onclick="verificarradiopad_enf()"  value="hipotensión arterial">
                                                      <label class="form-check-label">Hipotensión arterial</label>
                                                    </div>
                                                    <div class="form-group"><br>
                                                      <label class="form-check-label"><strong>LLenado Capilar</strong></label>
                                                      <input type="text" class="form-control" id="d4capilar" name="d4capilar" >
                                                      <input type="text" class="form-control" id="dom4respiratorias" name="dom4respiratorias" style="display:none" />
                                                    </div> 
                                                  </div>
                                                  <div class="form-group col-md-12  dropdown-divider"></div>
                                                  <div class="col-md-4">
                                                    <label class="form-check-label text-uppercase"><strong>Pulso:</strong></label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4pulso" onclick="verificarradiopad_enf()"  value="No aplica" >
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4pulso" onclick="verificarradiopad_enf()"  value="normal" >
                                                      <label class="form-check-label">Normal</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4pulso" onclick="verificarradiopad_enf()"  value="disminuido">
                                                      <label class="form-check-label">Disminuido</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4pulso" onclick="verificarradiopad_enf()"  value="cuadriplejia">
                                                      <label class="form-check-label">Cuadriplejia</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4pulso" onclick="verificarradiopad_enf()"  value="ausente">
                                                      <label class="form-check-label">Ausente</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4pulso" onclick="verificarradiopad_enf()"  value="marcapaso">
                                                      <label class="form-check-label">Marcapaso</label>
                                                    </div>
                                                    <div class="form-group"><br><br>
                                                      <label class="form-check-label"><strong>Fecha implantación</strong></label>
                                                      <input type="text" class="form-control" placeholder="dd/mm/aaaa" id="d4pulsofecha" name="d4pulsofecha">
                                                      <input type="text" class="form-control" id="dom4pulso" name="dom4pulso" style="display:none" />
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-4">
                                                    <label class="form-check-label"><strong>FR:</strong></label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4fr" onclick="verificarradiopad_enf()"  value="No aplica" >
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4fr" onclick="verificarradiopad_enf()"  value="normal" >
                                                      <label class="form-check-label">Normal</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4fr" onclick="verificarradiopad_enf()"  value="superficial">
                                                      <label class="form-check-label">Superficial</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4fr" onclick="verificarradiopad_enf()"  value="regular">
                                                      <label class="form-check-label">Regular</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4fr" onclick="verificarradiopad_enf()"  value="irregular">
                                                      <label class="form-check-label">Irregular</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4fr" onclick="verificarradiopad_enf()"  value="disnea en reposo">
                                                      <label class="form-check-label">Disnea en Reposo</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4fr" onclick="verificarradiopad_enf()"  value="disnea en ejercicio">
                                                      <label class="form-check-label">Disnea en Ejercicio</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4fr" onclick="verificarradiopad_enf()"  value="drenajes">
                                                      <label class="form-check-label">Drenajes</label>
                                                    </div>
                                                    <div class="form-group">
                                                      <label class="col-form-label">Observaciones</label>
                                                      <input type="text" class="form-control" id="d4frdetalle" name="d4frdetalle">
                                                      <input type="text" class="form-control" id="dom4fr" name="dom4fr" style="display:none" />
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-4">
                                                    <label class="form-check-label"><strong>Ruidos Respiratorios:</strong></label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4ruidos" onclick="verificarradiopad_enf()"  value="No aplica" >
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4ruidos" onclick="verificarradiopad_enf()"  value="disminuidos" >
                                                      <label class="form-check-label">Disminuidos</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4ruidos" onclick="verificarradiopad_enf()"  value="sibilancias">
                                                      <label class="form-check-label">Sibilancias</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4ruidos" onclick="verificarradiopad_enf()"  value="estertores">
                                                      <label class="form-check-label">Estertores</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4ruidos" onclick="verificarradiopad_enf()"  value="roncus">
                                                      <label class="form-check-label">Roncus</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4ruidos" onclick="verificarradiopad_enf()"  value="estridor">
                                                      <label class="form-check-label">Estridor</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4ruidos" onclick="verificarradiopad_enf()"  value="timpánicos">
                                                      <label class="form-check-label">Timpánicos</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4ruidos" onclick="verificarradiopad_enf()"  value="opacos">
                                                      <label class="form-check-label">Opacos</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4ruidos" onclick="verificarradiopad_enf()"  value="simétricos">
                                                      <label class="form-check-label">Simétricos</label>
                                                      <input type="text" class="form-control" id="dom4ruidos" name="dom4ruidos" style="display:none" />
                                                    </div> 
                                                  </div>
                                                  <div class="form-group col-md-12  dropdown-divider"></div>
                                                  <div class="col-md-3">
                                                    <label class="form-check-label text-uppercase"><strong>Tos:</strong></label>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4tos" onclick="verificarradiopad_enf()"  value="si" >
                                                      <label class="form-check-label">Si</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4tos" onclick="verificarradiopad_enf()"  value="no">
                                                      <label class="form-check-label">No</label>
                                                    </div>
                                                    <div class="form-group">
                                                      <label class="form-check-label"><strong>Observaciones</strong> </label>
                                                      <input type="text" class="form-control" id="d4tostipo" name="d4tostipo">
                                                      <input type="text" class="form-control" id="dom4tos" name="dom4tos" style="display:none" />
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-3">
                                                    <label class="form-check-label text-uppercase"><strong>Oxigenoterapia:</strong></label>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4oxigeno" onclick="verificarradiopad_enf()"  value="si" >
                                                      <label class="form-check-label">Si</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4oxigeno" onclick="verificarradiopad_enf()"  value="no">
                                                      <label class="form-check-label">No</label>
                                                    </div>
                                                    <div class="form-group">
                                                      <label class="form-check-label"><strong>Observaciones</strong></label>
                                                      <input type="text" class="form-control" id="d4oxigenotipo" name="d4oxigenotipo">
                                                      <input type="text" class="form-control" id="dom4oxigeno" name="dom4oxigeno" style="display:none" />
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-3">
                                                    <div class="form-check">
                                                      <label class="form-check-label"><strong>FIO2</strong></label>
                                                      <input type="text" class="form-control" id="d4fio" name="d4fio">
                                                    </div>
                                                    <div class="form-check">
                                                      <label class="form-check-label"><strong>TET</strong></label>
                                                      <input type="text" class="form-control" id="d4tet" name="d4tet">
                                                    </div>
                                                  </div>
                                                  <div class="form-group col-md-3">
                                                    <label class="col-form-label"><strong>Traqueostomía:</strong></label>
                                                    <div class="row">
                                                       <div class="form-group col-md-4">
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d4traqueostomia" onclick="verificarradiopad_enf()" onchange="" value="si">
                                                          <label class="form-check-label">Si</label>
                                                        </div>
                                                      </div>
                                                      <div class="form-group col-md-4">
                                                       <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d4traqueostomia" onclick="verificarradiopad_enf()" onchange="" value="no">
                                                          <label class="form-check-label">No</label>
                                                          <input type="text" class="form-control" id="dom4traqueostomia" name="dom4traqueostomia" style="display:none" />
                                                        </div>
                                                      </div>                                                       
                                                    </div>
                                                  </div>
                                                  <!-- <div class="col-md-3">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="" onclick="verificarradiopad_enf()"  value="traqueostomia">
                                                      <label class="form-check-label"></label>
                                                      
                                                    </div>
                                                  </div> -->
                                                  <div class="form-group col-md-6 text-center ">
                                                    <span class="btn-verde">¿No Validar campos?</span>
                                                  </div>
                                                  <div class="form-group col-md-6 text-center ">
                                                    <div class="row">
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="elrefiereepadenf2[]" onclick="paciente_refiere_hcpad_enf2()" value="aplicar">
                                                        <label class="form-check-label">Aplicar</label>
                                                         <input class="forrm-control" type="text" id="auxhcpdenf2" name="auxhcpdenf2" style="display:none" >
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
                                </div>
                                <div class="collapse multi-collapse collapse " id="op2" data-parent="#accordion3">
                                  <div class="row">
                                    <div class="accordion form-group col-md-12" id="separa2">
                                      <div class="card">
                                        <div class="card-header" id="headiuno">
                                          <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpdd1"
                                          aria-expanded="false" aria-controls="enfpdd1">
                                            Dominio 5: Percepción Cognición
                                          </button>
                                        </div>
                                        <div class="collapse" id="enfpdd1" aria-labelledby="headiuno" data-parent="#separa2">
                                          <div class="card-body">
                                            <div class="row">
                                              <div class="form-group col-md-12">
                                              <label class="col-form-label"><strong></strong></label>
                                              <div class="row">
                                                <div class="col-md-4">
                                                  <label class="form-check-label text-uppercase"><strong>Escala de Glasgow:</strong> </label>
                                                  <!-- <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5escala" onclick="verificarradiopad_enf()"  value="No aplica" >
                                                    <label class="form-check-label">No aplica</label>
                                                  </div> -->
                                                  <!-- <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5escala" onclick="verificarradiopad_enf()"  value="puntaje" >
                                                    <label class="form-check-label">Puntaje</label>
                                                  </div> -->
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5escala" onclick="verificarradiopad_enf()"  value="consciente">
                                                    <label class="form-check-label">Consciente</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5escala" onclick="verificarradiopad_enf()"  value="alerta" >
                                                    <label class="form-check-label">Alerta</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5escala" onclick="verificarradiopad_enf()"  value="orientado tiempo">
                                                    <label class="form-check-label">Orientado tiempo</label>
                                                  </div> 
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5escala" onclick="verificarradiopad_enf()"  value="orientado espacio">
                                                    <label class="form-check-label">Orientado espacio</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5escala" onclick="verificarradiopad_enf()"  value="orientado persona" >
                                                    <label class="form-check-label">Orientado persona</label>
                                                    <input type="text" class="form-control" id="dom5escala" name="dom5escala" style="display:none" />
                                                  </div>
                                                  <div class="form-group"><br>
                                                    <label class="col-form-label">Observaciones y (Puntaje)</label>
                                                    <input type="text" class="form-control" id="dgasglowotro" name="dgasglowotro" >
                                                  </div>
                                                </div>
                                                <div class="col-md-4">
                                                  <label class="form-check-label text-uppercase"><strong>Estado de conciencia</strong></label>
                                                  <!-- <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5conciencia" onclick="verificarradiopad_enf()"  value="No aplica">
                                                    <label class="form-check-label">No aplica</label>
                                                  </div> -->
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5conciencia" onclick="verificarradiopad_enf()"  value="despierto">
                                                    <label class="form-check-label">Despierto</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5conciencia" onclick="verificarradiopad_enf()"  value="confuso">
                                                    <label class="form-check-label">Confuso</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5conciencia" onclick="verificarradiopad_enf()"  value="somnoliento">
                                                    <label class="form-check-label">Somnoliento</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5conciencia" onclick="verificarradiopad_enf()"  value="estuporoso">
                                                    <label class="form-check-label">Estuporoso</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5conciencia" onclick="verificarradiopad_enf()"  value="comatoso">
                                                    <label class="form-check-label">Comatoso</label>
                                                  </div>
                                                  <div class="form-group"><br><br>
                                                    <label class="col-form-label">Observaciones</label>
                                                    <input type="text" class="form-control" id="dconcienciaotro" name="dconcienciaotro" >
                                                    <input type="text" class="form-control" id="dom5conciencia" name="dom5conciencia" style="display:none" />
                                                  </div> 
                                                </div>
                                                <div class="col-md-4">
                                                  <label class="form-check-label text-uppercase"><strong>Comunicacion</strong></label>
                                                  <!-- <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5comunicacion" onclick="verificarradiopad_enf()"  value="No aplica">
                                                    <label class="form-check-label">No aplica</label>
                                                  </div> -->
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5comunicacion" onclick="verificarradiopad_enf()"  value="verbal">
                                                    <label class="form-check-label">Verbal</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5comunicacion" onclick="verificarradiopad_enf()"  value="gestual">
                                                    <label class="form-check-label">Gestual</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5comunicacion" onclick="verificarradiopad_enf()"  value="gutural">
                                                    <label class="form-check-label">Gutural</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5comunicacion" onclick="verificarradiopad_enf()"  value="escrita">
                                                    <label class="form-check-label">Escrita</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5comunicacion" onclick="verificarradiopad_enf()"  value="otro idioma">
                                                    <label class="form-check-label">Otro idioma</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5comunicacion" onclick="verificarradiopad_enf()"  value="señas">
                                                    <label class="form-check-label">Señas</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5comunicacion" onclick="verificarradiopad_enf()"  value="ninguna">
                                                    <label class="form-check-label">Ninguna</label>
                                                  </div>
                                                  <div class="form-group">
                                                    <label class="col-form-label">Observaciones</label>
                                                    <input type="text" class="form-control" id="d6comunicacionotro" name="d6comunicacionotro">
                                                    <input type="text" class="form-control" id="dom5comunicacion" name="dom5comunicacion" style="display:none" />
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card-header" id="headiuno">
                                          <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpdd2"
                                          aria-expanded="false" aria-controls="enfpdd2">
                                            Dominio 6: Autopercepción
                                          </button>
                                        </div>
                                        <div class="collapse" id="enfpdd2" aria-labelledby="headiuno" data-parent="#separa2">
                                          <div class="card-body">
                                            <div class="row">
                                              <div class="form-group col-md-12">
                                              <label class="col-form-label"><strong></strong></label>
                                              <div class="row">
                                                <div class="col-md-3">
                                                  <label class="form-check-label text-uppercase"><strong>Estado emocional:</strong></label>
                                                  <!-- <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d6emocional" onclick="verificarradiopad_enf()"  value="No aplica" >
                                                    <label class="form-check-label">No aplica</label>
                                                  </div> -->
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d6emocional[]" onclick="verificachekpad_enf()"  value="tranquilo" >
                                                    <label class="form-check-label">Tranquilo</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d6emocional[]" onclick="verificachekpad_enf()"  value="ansioso">
                                                    <label class="form-check-label">Ansioso</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d6emocional[]" onclick="verificachekpad_enf()"  value="negativo" >
                                                    <label class="form-check-label">Negativo</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d6emocional[]" onclick="verificachekpad_enf()"  value="temeroso">
                                                    <label class="form-check-label">Temeroso</label>
                                                  </div> 
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d6emocional[]" onclick="verificachekpad_enf()"  value="irritable">
                                                    <label class="form-check-label">Irritable</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d6emocional[]" onclick="verificachekpad_enf()"  value="indiferente" >
                                                    <label class="form-check-label">Indiferente</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d6emocional[]" onclick="verificachekpad_enf()"  value="efectos de sedación">
                                                    <label class="form-check-label">Efectos de Sedación</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d6emocional[]" onclick="verificachekpad_enf()"  value="no responde">
                                                    <label class="form-check-label">No Responde</label>
                                                    <input type="text" class="form-control" id="dom6emocional" name="dom6emocional" style="display:none" />
                                                  </div>
                                                </div>
                                                <div class="col-md-3">
                                                  <label class="form-check-label text-uppercase"><strong>Lenguaje</strong></label>
                                                  <!-- <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d6lenguaje" onclick="verificarradiopad_enf()"  value="No aplica">
                                                    <label class="form-check-label">No aplica</label>
                                                  </div> -->
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d6lenguaje[]" onclick="verificachekpad_enf()"  value="normal">
                                                    <label class="form-check-label">Normal</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d6lenguaje[]" onclick="verificachekpad_enf()"  value="titubeante">
                                                    <label class="form-check-label">Titubeante</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d6lenguaje[]" onclick="verificachekpad_enf()"  value="confuso">
                                                    <label class="form-check-label">Confuso</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d6lenguaje[]" onclick="verificachekpad_enf()"  value="afasia expresiva">
                                                    <label class="form-check-label">Afasia Expresiva</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d6lenguaje[]" onclick="verificachekpad_enf()"  value="mal relator">
                                                    <label class="form-check-label">Mal Relator</label>
                                                    <input type="text" class="form-control" id="dom6lenguaje" name="dom6lenguaje" style="display:none" />
                                                  </div>
                                                </div>
                                                <div class="col-md-3">
                                                  <label class="form-check-label text-uppercase"><strong>Escucha</strong></label>
                                                  <!-- <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d6escucha" onclick="verificarradiopad_enf()"  value="No aplica">
                                                    <label class="form-check-label">No aplica</label>
                                                  </div> -->
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d6escucha[]" onclick="verificachekpad_enf()"  value="normal">
                                                    <label class="form-check-label">Normal</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d6escucha[]" onclick="verificachekpad_enf()"  value="hipoacusia derecha">
                                                    <label class="form-check-label">Hipoacusia Derecha</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d6escucha[]" onclick="verificachekpad_enf()"  value="hipoacusia izquierda">
                                                    <label class="form-check-label">Hipoacusia Izquierda</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d6escucha[]" onclick="verificachekpad_enf()"  value="sordera derecha">
                                                    <label class="form-check-label">Sordera Derecha</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d6escucha[]" onclick="verificachekpad_enf()"  value="sordera izquierda">
                                                    <label class="form-check-label">Sordera Izquierda</label>
                                                    <input type="text" class="form-control" id="dom6escucha" name="dom6escucha" style="display:none" />
                                                  </div>
                                                </div>
                                                <div class="col-md-3">
                                                  <label class="form-check-label text-uppercase"><strong>Vision</strong></label>
                                                  <!-- <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d6vision" onclick="verificarradiopad_enf()"  value="No aplica">
                                                    <label class="form-check-label">No aplica</label>
                                                  </div> -->
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d6vision[]" onclick="verificachekpad_enf()"  value="normal">
                                                    <label class="form-check-label">Normal</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d6vision[]" onclick="verificachekpad_enf()"  value="lesión ocular derecha">
                                                    <label class="form-check-label">Lesión Ocular Derecha</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d6vision[]" onclick="verificachekpad_enf()"  value="lesión ocular izquierda">
                                                    <label class="form-check-label">Lesión Ocular Izquierda</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d6vision[]" onclick="verificachekpad_enf()"  value="ceguera derecha">
                                                    <label class="form-check-label">Ceguera Derecha</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d6vision[]" onclick="verificachekpad_enf()"  value="ceguera izquierda">
                                                    <label class="form-check-label">Ceguera Izquierda</label>
                                                    <input type="text" class="form-control" id="dom6d6vision" name="dom6d6vision" style="display:none" />
                                                  </div> 
                                                </div>
                                              </div>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card-header" id="headiuno">
                                          <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpdd3"
                                          aria-expanded="false" aria-controls="enfpdd3">
                                            Dominio 7: Rol / Relaciones
                                          </button>
                                        </div>
                                        <div class="collapse" id="enfpdd3" aria-labelledby="headiuno" data-parent="#separa2">
                                          <div class="card-body">
                                            <div class="row">
                                              <div class="form-group col-md-12">
                                              <label class="col-form-label"><strong></strong></label>
                                              <div class="row">
                                                <div class="col-md-4">
                                                  <label class="form-check-label text-uppercase"><strong>Con familiares</strong></label>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d7familiares" onclick="verificarradiopad_enf()"  value="No aplica">
                                                    <label class="form-check-label">No aplica</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d7familiares" onclick="verificarradiopad_enf()"  value="afectiva">
                                                    <label class="form-check-label">Afectiva</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d7familiares" onclick="verificarradiopad_enf()"  value="indiferente">
                                                    <label class="form-check-label">Indiferente</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d7familiares" onclick="verificarradiopad_enf()"  value="hostil">
                                                    <label class="form-check-label">Hostil</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d7familiares" onclick="verificarradiopad_enf()"  value="distante">
                                                    <label class="form-check-label">Distante</label>
                                                  </div>
                                                </div>
                                                <div class="col-md-4">
                                                  <label class="form-check-label text-uppercase"><strong>Tipo de Maltrato</strong></label>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d7familiaresmaltrato" onclick="verificarradiopad_enf()"  value="No aplica">
                                                    <label class="form-check-label">No aplica</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d7familiaresmaltrato" onclick="verificarradiopad_enf()"  value="abandono familiar">
                                                    <label class="form-check-label">Abandono familiar</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d7familiaresmaltrato" onclick="verificarradiopad_enf()"  value="maltrato familiar">
                                                    <label class="form-check-label">Maltrato familiar</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d7familiaresmaltrato" onclick="verificarradiopad_enf()"  value="abuso familiar">
                                                    <label class="form-check-label">Abuso familiar</label>
                                                    <input type="text" class="form-control" id="dom7familiares" name="dom7familiares" style="display:none" />
                                                    <input type="text" class="form-control" id="dom7familiaresmaltrato" name="dom7familiaresmaltrato" style="display:none" />
                                                  </div>
                                                </div>
                                                <div class="col-md-4">
                                                  <label class="form-check-label text-uppercase"><strong>Con equipo salud</strong></label>
                                                  <!-- <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d7equipo" onclick="verificarradiopad_enf()"  value="No aplica">
                                                    <label class="form-check-label">No aplica</label>
                                                  </div> -->
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d7equipo" onclick="verificarradiopad_enf()"  value="afectiva">
                                                    <label class="form-check-label">Afectiva</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d7equipo" onclick="verificarradiopad_enf()"  value="indiferente">
                                                    <label class="form-check-label">Indiferente</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d7equipo" onclick="verificarradiopad_enf()"  value="hostil">
                                                    <label class="form-check-label">Hostil</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d7equipo" onclick="verificarradiopad_enf()"  value="distante">
                                                    <label class="form-check-label">Distante</label>
                                                    <input type="text" class="form-control" id="dom7equipo" name="dom7equipo" style="display:none" />
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card-header" id="headiuno">
                                          <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpdd4"
                                          aria-expanded="false" aria-controls="enfpdd4">
                                            Dominio 8: Sexualidad
                                          </button>
                                        </div>
                                        <div class="collapse" id="enfpdd4" aria-labelledby="headiuno" data-parent="#separa2">
                                          <div class="card-body">
                                            <div class="row">
                                              <div class="form-group col-md-12">
                                              <label class="col-form-label"><strong></strong></label>
                                              <div class="row">
                                                <div class="col-md-3">
                                                  <label class="form-check-label text-uppercase"><strong>Estado civil</strong></label>
                                                  <!-- <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d8civil" onclick="verificarradiopad_enf()"  value="No aplica">
                                                    <label class="form-check-label">No aplica</label>
                                                  </div> -->
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d8civil" onclick="verificarradiopad_enf()"  value="soltero">
                                                    <label class="form-check-label">Soltero</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d8civil" onclick="verificarradiopad_enf()"  value="casado">
                                                    <label class="form-check-label">Casado</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d8civil" onclick="verificarradiopad_enf()"  value="viudo">
                                                    <label class="form-check-label">Viudo</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d8civil" onclick="verificarradiopad_enf()"  value="divorciado">
                                                    <label class="form-check-label">Divorciado</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d8civil" onclick="verificarradiopad_enf()"  value="separado">
                                                    <label class="form-check-label">Separado</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d8civil" onclick="verificarradiopad_enf()"  value="unión libre">
                                                    <label class="form-check-label">Unión Libre</label>
                                                    <input type="text" class="form-control" id="dom8civil" name="dom8civil" style="display:none" />
                                                  </div>
                                                </div>
                                                <div class="col-md-2">
                                                  <label class="form-check-label text-uppercase"><strong>Paridad</strong></label>
                                                  <div class="form-check text-right">
                                                    <input class="form-check-input" type="radio" name="d8paridad" onclick="verificarradiopad_enf()"  value="No aplica">
                                                    <label class="form-check-label">No aplica</label>
                                                  </div>
                                                  <div class="form-check text-right">
                                                    <input class="form-check-input" type="radio" name="d8paridad" onclick="verificarradiopad_enf()"  value="G">
                                                    <label class="form-check-label">G</label>
                                                    
                                                  </div>
                                                  <div class="form-check text-right"><br><br>
                                                    <input class="form-check-input" type="radio" name="d8paridad" onclick="verificarradiopad_enf()"  value="P">
                                                    <label class="form-check-label">P</label>
                                                  </div>
                                                  <div class="form-check text-right"><br><br>
                                                    <input class="form-check-input" type="radio" name="d8paridad" onclick="verificarradiopad_enf()"  value="A">
                                                    <label class="form-check-label">A</label>
                                                  </div>
                                                  <div class="form-check text-right"><br>
                                                    <input class="form-check-input" type="radio" name="d8paridad" onclick="verificarradiopad_enf()"  value="C">
                                                    <label class="form-check-label">C</label>
                                                    <input type="text" class="form-control" id="dom8paridad" name="dom8paridad" style="display:none" />
                                                  </div>
                                                </div>
                                                <div class="col-md-3"><br><br>
                                                  <input type="text" class="form-control" id="dtparidadg" name="dtparidadg" style="display:" /><br>
                                                  <input type="text" class="form-control" id="dtparidadp" name="dtparidadp" style="display:" /><br>
                                                  <input type="text" class="form-control" id="dtparidada" name="dtparidada" style="display:" /><br>
                                                  <input type="text" class="form-control" id="dtparidadc" name="dtparidadc" style="display:" /><br>
                                                  <!-- <div class="form-check">
                                                    <input type="text" class="form-control" id="" name="" style="display:" />
                                                  </div>
                                                  <div class="form-check"><br>
                                                    <input type="text" class="form-control" id="" name="" style="display:" />
                                                  </div>
                                                  <div class="form-check"><br>
                                                    <input type="text" class="form-control" id="" name="" style="display:" />
                                                  </div>
                                                  <div class="form-check"><br>
                                                    <input type="text" class="form-control" id="" name="" style="display:" />
                                                  </div> -->
                                                </div>
                                                <div class="col-md-1">
                                                </div>
                                                <div class="col-md-3">
                                                  <div class="form-check">
                                                    <label class="form-check-label"><strong>Hijos</strong></label>
                                                    <input type="text" class="form-control" id="d8hijos" name="d8hijos" >
                                                  </div> 
                                                  <div class="form-check">
                                                    <label class="form-check-label"><strong>Vivos</strong></label>
                                                    <input type="text" class="form-control" id="d8vivos" name="d8vivos" >
                                                  </div>
                                                  <div class="form-check">
                                                    <label class="form-check-label"><strong>Fallecidos</strong></label>
                                                    <input type="text" class="form-control" id="d8fallecidos" name="d8fallecidos" >
                                                  </div>
                                                </div>
                                                <div class="col-md-3">
                                                  <label class="form-check-label text-uppercase"><strong>Antecedentes ITS</strong></label>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d8its" onclick="verificarradiopad_enf()"  value="Si">
                                                    <label class="form-check-label">Si</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d8its" onclick="verificarradiopad_enf()"  value="No">
                                                    <label class="form-check-label">No</label>
                                                    <input type="text" class="form-control" id="dom8its" name="dom8its" style="display:none" />
                                                  </div><br><br>
                                                  <div class="form-group">
                                                    <label class="form-check-label"><strong>Observaciones</strong></label>
                                                    <input type="text" class="form-control" id="d8especifique" name="d8especifique" >
                                                  </div>
                                                </div>
                                                <div class="col-md-9">
                                                  
                                                </div>
                                                <div class="form-group col-md-6 text-center ">
                                                  <span class="btn-verde">¿No Validar campos?</span>
                                                </div>
                                                <div class="form-group col-md-6 text-center ">
                                                  <div class="row">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="elrefiereepadenf3[]" onclick="paciente_refiere_hcpad_enf3()" value="aplicar">
                                                      <label class="form-check-label">Aplicar</label>
                                                       <input class="forrm-control" type="text" id="auxhcpdenf3" name="auxhcpdenf3" style="display:none" >
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card-header" id="headiuno">
                                          <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpdd5"
                                          aria-expanded="false" aria-controls="enfpdd5">
                                            Dominio 9: Afrontamiento - Tolerancia
                                          </button>
                                        </div>
                                        <div class="collapse" id="enfpdd5" aria-labelledby="headiuno" data-parent="#separa2">
                                          <div class="card-body">
                                            <div class="row">
                                              <div class="form-group col-md-12">
                                              <label class="col-form-label"><strong></strong></label>
                                              <div class="row">
                                                <div class="col-md-6">
                                                  <label class="form-check-label text-uppercase"><strong>Respuesta a la atencion domiciliaria</strong></label>
                                                 <!--  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d9respuesta" onclick="verificarradiopad_enf()"  value="No aplica">
                                                    <label class="form-check-label">No aplica</label>
                                                  </div> -->
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d9respuesta" onclick="verificarradiopad_enf()"  value="tranquilo">
                                                    <label class="form-check-label">Tranquilo</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d9respuesta" onclick="verificarradiopad_enf()"  value="agresivo">
                                                    <label class="form-check-label">Agresivo</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d9respuesta" onclick="verificarradiopad_enf()"  value="triste">
                                                    <label class="form-check-label">Triste</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d9respuesta" onclick="verificarradiopad_enf()"  value="indiferente">
                                                    <label class="form-check-label">Indiferente</label>
                                                    <input type="text" class="form-control" id="dom9respuesta" name="dom9respuesta" style="display:none" />
                                                  </div>
                                                </div>                                        
                                                <div class="col-md-4">
                                                  <label class="form-check-label text-uppercase"><strong>Antecedente de intento de suicidio</strong></label>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d9intento" onclick="verificarradiopad_enf()"  value="Si">
                                                    <label class="form-check-label">Si</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d9intento" onclick="verificarradiopad_enf()"  value="No">
                                                    <label class="form-check-label">No</label>
                                                  </div>
                                                  <div class="form-group">
                                                    <label class="col-form-label">Observaciones</label>
                                                    <input type="text" class="form-control" id="d9intentodetalle" name="d9intentodetalle" >
                                                    <input type="text" class="form-control" id="dom9intento" name="dom9intento" style="display:none" />
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card-header" id="headiuno">
                                          <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpdd6"
                                          aria-expanded="false" aria-controls="enfpdd6">
                                            Dominio 10: Principios Vitales
                                          </button>
                                        </div>
                                        <div class="collapse" id="enfpdd6" aria-labelledby="headiuno" data-parent="#separa2">
                                          <div class="card-body">
                                            <div class="row">
                                              <div class="form-group col-md-12">
                                              <label class="col-form-label"><strong></strong></label>
                                              <div class="row">
                                                <div class="col-md-4">
                                                  <label class="form-check-label"><strong>Religión</strong></label>
                                                  <div class="form-group">
                                                    <input type="text" class="form-control" id="d10religion" name="d10religion">
                                                  </div>
                                                </div>                                        
                                                <div class="col-md-4">
                                                  <label class="form-check-label text-uppercase"><strong>Acepta transfusion sanguinea</strong></label>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d10acepta" onclick="verificarradiopad_enf()"  value="Si">
                                                    <label class="form-check-label">Si</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d10acepta" onclick="verificarradiopad_enf()"  value="No">
                                                    <label class="form-check-label">No</label>
                                                    <input type="text" class="form-control" id="dom10acepta" name="dom10acepta" style="display:none" />
                                                  </div>
                                                   <div class="form-group">
                                                    <label class="col-form-label">Observaciones</label>
                                                    <input type="text" class="form-control" id="d10aceptadetalle" name="d10aceptadetalle" >
                                                  </div>
                                                </div>
                                                <div class="col-md-4">
                                                  <label class="form-check-label text-uppercase"><strong>Solicita ayuda religiosa</strong></label>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d10solicita" onclick="verificarradiopad_enf()"  value="Si">
                                                    <label class="form-check-label">Si</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d10solicita" onclick="verificarradiopad_enf()"  value="No">
                                                    <label class="form-check-label">No</label>
                                                    <input type="text" class="form-control" id="dom10solicita" name="dom10solicita" style="display:none" />
                                                  </div>
                                                  <div class="form-group">
                                                    <label class="col-form-label">Observaciones</label>
                                                    <input type="text" class="form-control" id="d10solicitadetalle" name="d10solicitadetalle" >
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card-header" id="headiuno">
                                          <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpdd7"
                                          aria-expanded="false" aria-controls="enfpdd7">
                                            Dominio 11: Seguridad y Protección
                                          </button>
                                        </div>
                                        <div class="collapse" id="enfpdd7" aria-labelledby="headiuno" data-parent="#separa2">
                                          <div class="card-body">
                                            <div class="row">
                                              <div class="form-group col-md-12">
                                              <div class="row">
                                                <div class="col-md-3">
                                                  <label class="col-form-label">DISPOSITIVO</label>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d11seguridad" onclick="verificarradiopad_enf()"  value="No aplica" >
                                                    <label class="form-check-label">No aplica</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d11seguridad" onclick="verificarradiopad_enf()"  value="catéter venoso periférico" >
                                                    <label class="form-check-label">Catéter Venoso Periférico</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d11seguridad" onclick="verificarradiopad_enf()"  value="catéter venoso central">
                                                    <label class="form-check-label">Catéter Venoso Central</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d11seguridad" onclick="verificarradiopad_enf()"  value="tracción esquelética" >
                                                    <label class="form-check-label">Tracción Esquelética</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d11seguridad" onclick="verificarradiopad_enf()"  value="tracción cutánea">
                                                    <label class="form-check-label">Tracción Cutánea</label>
                                                  </div> 
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d11seguridad" onclick="verificarradiopad_enf()"  value="inmovilización">
                                                    <label class="form-check-label">Inmovilización</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d11seguridad" onclick="verificarradiopad_enf()"  value="sujeciones" >
                                                    <label class="form-check-label">Sujeciones</label>
                                                  </div>
                                                  <div class="form-group">
                                                    <label class="form-check-label"><strong>Observaciones</strong></label>
                                                    <input type="text" class="form-control" id="d11otros" name="d11otros" >
                                                    <input type="text" class="form-control" id="dom11seguridad" name="dom11seguridad" style="display:none" />
                                                  </div>
                                                </div>
                                                <div class="col-md-3">
                                                  <label class="form-check-label text-uppercase"><strong>Integridad cutanea</strong></label>
                                                  <!-- <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11cutanea[]" onclick="verificachekpad_enf()"  value="No aplica">
                                                    <label class="form-check-label">No aplica</label>
                                                  </div> -->
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11cutanea[]" onclick="verificachekpad_enf()"  value="sin lesiones">
                                                    <label class="form-check-label">Sin Lesiones</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11cutanea[]" onclick="verificachekpad_enf()"  value="flebitis">
                                                    <label class="form-check-label">Flebitis</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11cutanea[]" onclick="verificachekpad_enf()"  value="hematomas">
                                                    <label class="form-check-label">Hematomas</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11cutanea[]" onclick="verificachekpad_enf()"  value="celulitis">
                                                    <label class="form-check-label">Celulitis</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11cutanea[]" onclick="verificachekpad_enf()"  value="heridas">
                                                    <label class="form-check-label">Heridas</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11cutanea[]" onclick="verificachekpad_enf()"  value="fracturas">
                                                    <label class="form-check-label">Fracturas</label>
                                                  </div>
                                                </div>
                                                <div class="col-md-3">
                                                  <br>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11cutanea[]" onclick="verificachekpad_enf()"  value="ulceras">
                                                    <label class="form-check-label">Ulceras</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11cutanea[]" onclick="verificachekpad_enf()"  value="limpia">
                                                    <label class="form-check-label">Limpia</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11cutanea[]" onclick="verificachekpad_enf()"  value="infectada">
                                                    <label class="form-check-label">Infectada</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11cutanea[]" onclick="verificachekpad_enf()"  value="primera intención">
                                                    <label class="form-check-label">Primera Intención</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11cutanea[]" onclick="verificachekpad_enf()"  value="segunda intención">
                                                    <label class="form-check-label">Segunda Intención</label>
                                                    <input type="text" class="form-control" id="dom11cutanea" name="dom11cutanea" style="display:none" />
                                                  </div>
                                                </div>
                                                <div class="col-md-3">
                                                   <div class="form-group">
                                                    <label class="form-check-label"><strong>Localización</strong></label>
                                                    <input type="text" class="form-control" id="d11localizacion" name="d11localizacion" >
                                                  </div>
                                                   <div class="form-group">
                                                    <label class="form-check-label"><strong>Grado</strong></label>
                                                    <input type="text" class="form-control" id="d11grado" name="d11grado" >
                                                  </div>
                                                </div>
                                                <div class="col-md-4">
                                                  <label class="form-check-label text-uppercase"><strong>Requerimientos</strong></label>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11requerimientos[]" onclick="verificachekpad_enf()"  value="No aplica">
                                                    <label class="form-check-label">No aplica</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11requerimientos[]" onclick="verificachekpad_enf()"  value="sujeciones">
                                                    <label class="form-check-label">Sujeciones</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11requerimientos[]" onclick="verificachekpad_enf()"  value="barandas">
                                                    <label class="form-check-label">Barandas</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11requerimientos[]" onclick="verificachekpad_enf()"  value="acompañante">
                                                    <label class="form-check-label">Acompañante</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11requerimientos[]" onclick="verificachekpad_enf()"  value="apoyo externo">
                                                    <label class="form-check-label">Apoyo Externo</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11requerimientos[]" onclick="verificachekpad_enf()"  value="ayuda alimentos">
                                                    <label class="form-check-label">Ayuda Alimentos</label>
                                                  </div> 
                                                </div>
                                                <div class="col-md-4"><br>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11requerimientos[]" onclick="verificachekpad_enf()"  value="ayuda deambulación">
                                                    <label class="form-check-label">Ayuda Deambulación</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11requerimientos[]" onclick="verificachekpad_enf()"  value="bolsas de arena">
                                                    <label class="form-check-label">Bolsas de Arena</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11requerimientos[]" onclick="verificachekpad_enf()"  value="colchón ortopédico">
                                                    <label class="form-check-label">Colchón Ortopédico</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11requerimientos[]" onclick="verificachekpad_enf()"  value="almohadas">
                                                    <label class="form-check-label">Almohadas</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11requerimientos[]" onclick="verificachekpad_enf()"  value="cojines">
                                                    <label class="form-check-label">Cojines</label>
                                                    <input type="text" class="form-control" id="dom11requerimientos" name="dom11requerimientos" style="display:none" />
                                                  </div>
                                                </div>
                                                <div class="col-md-4">
                                                  <div class="form-group">
                                                    <label class="form-check-label"><strong>Observaciones</strong></label>
                                                    <input type="text" class="form-control" id="dom11otros" name="dom11otros" >
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card-header" id="headiuno">
                                          <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpdd8"
                                          aria-expanded="false" aria-controls="enfpdd8">
                                            Dominio 12: Confort
                                          </button>
                                        </div>
                                        <div class="collapse" id="enfpdd8" aria-labelledby="headiuno" data-parent="#separa2">
                                          <div class="card-body">
                                            <div class="row">
                                              <div class="form-group col-md-12">
                                              <label class="col-form-label"><strong></strong></label>
                                              <div class="row">
                                                <div class="col-md-4">
                                                  <label class="form-check-label text-uppercase"><strong>Dolor</strong></label><br>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d12dolor" onclick="verificarradiopad_enf()"  value="si">
                                                    <label class="form-check-label">Si</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d12dolor" onclick="verificarradiopad_enf()"  value="no">
                                                    <label class="form-check-label">No</label>
                                                    <input type="text" class="form-control" id="dom12dolor" name="dom12dolor" style="display:none" />
                                                  </div>
                                                  <div class="form-group">
                                                    <label class="form-check-label"><strong>Nivel</strong></label>
                                                    <input type="text" class="form-control" id="d12nivel" name="d12nivel" >
                                                  </div>
                                                  <div class="form-group">
                                                    <label class="form-check-label"><strong>Localización</strong></label>
                                                    <input type="text" class="form-control" id="d12localizacion" name="d12localizacion" >
                                                  </div>
                                                </div>                                        
                                                <div class="col-md-4">
                                                  <label class="form-check-label text-uppercase"><strong>Estado higiene</strong></label>
                                                  <!-- <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d12higiene" onclick="verificarradiopad_enf()"  value="No aplica">
                                                    <label class="form-check-label">No aplica</label>
                                                  </div> -->
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d12higiene" onclick="verificarradiopad_enf()"  value="bueno">
                                                    <label class="form-check-label">Bueno</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d12higiene" onclick="verificarradiopad_enf()"  value="regular">
                                                    <label class="form-check-label">Regular</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d12higiene" onclick="verificarradiopad_enf()"  value="deficinete">
                                                    <label class="form-check-label">Deficiente</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d12higiene" onclick="verificarradiopad_enf()"  value="malo">
                                                    <label class="form-check-label">Malo</label>
                                                    <input type="text" class="form-control" id="dom12higiene" name="dom12higiene" style="display:none" />
                                                  </div>
                                                  <div class="form-group">
                                                    <label class="col-form-label">Observaciones<strong></strong></label>
                                                    <input type="text" class="form-control" id="d12especifique" name="d12especifique">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card-header" id="headiuno">
                                          <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpdd9"
                                          aria-expanded="false" aria-controls="enfpdd9">
                                            Dominio 13: Crecimiento y desarrollo
                                          </button>
                                        </div>
                                        <div class="collapse" id="enfpdd9" aria-labelledby="headiuno" data-parent="#separa2">
                                          <div class="card-body">
                                            <div class="row">
                                              <div class="form-group col-md-12">
                                              <label class="col-form-label"><strong></strong></label>
                                              <div class="row">
                                                <div class="col-md-2">
                                                  <div class="form-check">
                                                    <label class="form-check-label"><strong>Peso</strong></label>
                                                    <input type="text" class="form-control" id="d13peso" name="d13peso" placeholder="55.5" onkeyup="climcenf();">
                                                  </div>
                                                </div>
                                                <div class="col-md-2">
                                                  <div class="form-check">
                                                    <label class="form-check-label"><strong>Talla</strong></label>
                                                    <input type="text" class="form-control" id="d13talla" name="d13talla" placeholder="1.60" onkeyup="climcenf();" >
                                                  </div>
                                                </div>
                                                <div class="col-md-4">                                                  
                                                  <div class="form-check">
                                                    <label class="form-check-label"><strong>IMC</strong></label>
                                                    <input type="text" class="form-control" id="d13cimc" name="d13cimc" >
                                                  </div>
                                                </div>                                        
                                                <div class="col-md-4">
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d13imc" id="d13imc1" onclick=""  value="peso insuficiente">
                                                    <label class="form-check-label"><strong>Peso Insuficiente</strong></label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d13imc" id="d13imc2" onclick="" value="peso normal">
                                                    <label class="form-check-label"><strong>Peso Normal</strong></label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d13imc" id="d13imc3" onclick="" value="sobrepeso">
                                                    <label class="form-check-label"><strong>SobrePeso</strong></label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d13imc" id="d13imc4" onclick="" value="obesidad clínica">
                                                    <label class="form-check-label"><strong>Obesidad Clínica</strong></label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d13imc" id="d13imc5" onclick="" value="obesidad morbida">
                                                    <label class="form-check-label"><strong>Obesidad Morbida</strong></label>
                                                    <input type="text" class="form-control" id="dom13imc" name="dom13imc" style="display:none" />
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card-header" id="headiuno">
                                          <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpdd10"
                                          aria-expanded="false" aria-controls="enfpdd10">
                                            Notas de Enfermería
                                          </button>
                                        </div>
                                        <div class="collapse" id="enfpdd10" aria-labelledby="headiuno" data-parent="#separa2">
                                          <div class="card-body">
                                            <div class="row">
                                              <div class="form-group col-md-12">
                                                <label class="col-form-label"><strong></strong></label>
                                                <div class="row">
                                                  <div class="form-group col-md-5">
                                                    <label class="col-form-label"><strong>Buscar Diagnóstico:</strong></label>
                                                    <div class="input-group">
                                                      <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                          <img src="http://localhost/shistoria/assets/img/iconos/ver.png" class="rounded-circle" width="22px" height="22px">
                                                        </span>
                                                      </div>
                                                      <input type="text" class="form-control" id="bdigenf" onkeyup="buscodiagnosticosENF()" />
                                                    </div>
                                                  </div>
                                                  <div class="form-group col-md-6" id="llenarselectenf">
                                                    <label class="col-form-label"><strong>Seleccione:</strong></label>
                                                    </div>
                                                    <div class="form-group col-md-1">
                                                    <label for="" class="col-form-label"><strong>Agregar</strong></label>
                                                    <input type="text" class="form-control" id="contadorDGENF" name="contadorDGENF" style="display:none" />
                                                    <button type="button" class="btn btn-primary" onclick="AdiagnENF()"> + </button>
                                                  </div>
                                                  <!-- <div class="form-group col-md-12 text-center" id="carga" style="display:none">
                                                    <div class="d-flex align-items-center">
                                                        <strong><span class="alert-info">Cargando Cie...</span></strong>
                                                       <div class="spinner-border ml-auto text-info" role="status" aria-hidden="true"></div>
                                                    </div>
                                                  </div> -->
                                                  <div class="form-group col-md-12" id="">
                                                    <div class="row">
                                                      <div class="form-group col-md-11">
                                                        <label class="col-form-label"><strong>Diagnósticos Agregados</strong></label>
                                                      </div>
                                                      <div class="form-group col-md-1">
                                                        <label class="col-form-label"><strong>Opcion</strong></label>
                                                      </div>
                                                    </div>
                                                    <div class="row" id="escreado2enf">
                                                      
                                                    </div>
                                                  </div>
                                                  <!-- <div class="col-md-2">
                                                    <div class="form-check">
                                                      <label class="form-check-label">PFEIFFER</label>
                                                      <input type="text" class="form-control" id="cuidadopfeiffer" name="cuidadopfeiffer" readonly="">
                                                    </div>                                          
                                                  </div>
                                                  <div class="col-md-2">
                                                    <div class="form-check">
                                                      <label class="form-check-label">BARTHEL</label>
                                                      <input type="text" class="form-control" id="cuidadobarthel" name="cuidadobarthel" readonly="" >
                                                    </div>
                                                  </div> 
                                                  <div class="col-md-2">
                                                    <div class="form-check">
                                                      <label class="form-check-label">NORTON</label>
                                                      <input type="text" class="form-control" id="cuidadonorton" name="cuidadonorton" readonly="" >
                                                    </div>
                                                  </div>                                    
                                                  <div class="col-md-2">
                                                    <div class="form-check">
                                                      <label class="form-check-label">BRADEN Q</label>
                                                      <input type="text" class="form-control" id="cuidadobraden" name="cuidadobraden" readonly="" >
                                                    </div>                                          
                                                  </div>
                                                  <div class="col-md-2">
                                                    <div class="form-check">
                                                      <label class="form-check-label">KARNOSKY-PPS</label>
                                                      <input type="text" class="form-control" id="cuidadokarnosky" name="cuidadokarnosky" readonly="" >
                                                    </div>
                                                  </div> 
                                                  <div class="col-md-2">
                                                    <div class="form-check">
                                                      <label class="form-check-label">Total</label>
                                                      <input type="text" class="form-control" id="cuidadototal" name="cuidadototal" readonly="" >
                                                    </div>
                                                  </div> -->
                                                </div>
                                              </div>
                                              <div class="form-group col-md-12">
                                                <label class="col-form-label"><strong>Notas de Enfermería:</strong></label>
                                                <textarea class="form-control" rows="8" id="mdiagnosticos2" name="mdiagnosticos2"></textarea>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group col-md-12  dropdown-divider"></div>
                                      <div class="row">
                                        <div class="col-md-8 text-center" id="btngpad">
                                          <button type="button" id="btngdpad" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarpad">GUARDAR</button>
                                          <input type="text" class="form-control" id="numhc" name="numhc" style="display:none" />
                                          <input type="text" class="form-control" id="fechai" name="fechai" style="display:none">
                                          <input type="text" class="form-control" id="motivopadhcenf" name="motivopadhcenf" style="display:none" />
                                        </div>
                                        <div class="col-md-8 text-center" id="btnapad" style="display:none">
                                          <button type="button" id="btngdpad2" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarpad2">ACTUALIZAR</button>
                                        </div>
                                        <div class="col-md-4">
                                          <div id="box">
                                            <div id="box-time" style="display:none"></div>
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
                                  <button class="btn btn-primary" type="button" onclick="siguientepaginae()">Siguiente</button>
                                  <input type="text" value="1" id="pagina" class="form-control" style="display:none" />
                                </li>
                                <li class="nav-item">
                                  <a href=""></a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link active bg-danger" id="subop1" href="#op1" data-toggle="collapse" data-target="#op1" aria-expanded="false" aria-controls="op1" onclick="doynumeropaginae('1')">1</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link bg-white" id="subop2" href="#op2" data-toggle="collapse" data-target="#op2" aria-expanded="false" aria-controls="op2" onclick="doynumeropaginae('2')">2</a>
                                </li>
                                <li class="nav-item">
                                  <button class="btn btn-primary" type="button" onclick="atraspaginae()">Atras</button>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        </form>
                      </div>
                      <div class="collapse multi-collapse collapse" id="multi2" data-parent="#accordion2">
                        <form id="hcintervencion_enf" action="#" method="POST">
                        <div class="row">
                          <div class="form-group col-md-12">
                            <div class="card-header">
                              <div class="accordion" id="accordion5">
                                <div class="collapse multi-collapse collapse show" id="opt1" data-parent="#accordion5">
                                  <div class="accordion form-group col-md-12" id="separa6">
                                    <div class="card">
                                      <div class="card-header" id="headiuno">
                                        <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#plani1"
                                        aria-expanded="false" aria-controls="plani1">
                                          Plan de Intervención 
                                        </button>
                                      </div>
                                      <div class="collapse" id="plani1" aria-labelledby="headiuno" data-parent="#separa6">
                                        <div class="card-body">
                                          <!-- <div class="row">
                                            <div class="form-group col-md-6">
                                              <label class="col-form-label"><strong>Fecha:</strong></label>
                                              <input type="date" class="form-control" id="interfecha" name="interfecha" />
                                            </div>
                                            <div class="form-group col-md-6">
                                              <label class="col-form-label"><strong>N° Plan:</strong></label>
                                              <input type="number" class="form-control" id="internplan" name="internplan" min="1" max="7" value="1" />
                                            </div>
                                          </div> -->
                                          <div class="row">
                                            <div class="form-group col-md-6">
                                              <button type="button" class="btn btn-primary" onclick="traerdiagnosticos_enf2()">Cargar Diagnósticos Enfermeria</button>
                                            </div>
                                            <div class="form-group col-md-12">
                                              <label class="col-form-label"><strong>Diagnósticos Enfermeria</strong></label>
                                              <textarea class="form-control" id="cgdigenfplan" name="cgdigenfplan" readonly=""></textarea>
                                            </div>
                                            <div class="form-group col-md-4">
                                              <button type="button" class="btn btn-primary" onclick="buscartodaslasescalasenf()">Cargar Escalas</button>
                                            </div>
                                            <div class="form-group col-md-12">
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label"><strong>PFEIFFER:</strong></label>
                                              <input type="text" class="form-control" id="interpfeiffer" name="interpfeiffer" readonly="" />
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label"><strong>BARTHEL:</strong></label>
                                              <input type="text" class="form-control" id="interbarthel" name="interbarthel" readonly="" />
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label"><strong>NORTON:</strong></label>
                                              <input type="text" class="form-control" id="internorton" name="internorton" readonly="" />
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label"><strong>BRADEN Q:</strong></label>
                                              <input type="text" class="form-control" id="interbraden" name="interbraden" readonly="" />
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label"><strong>KARNOSFKY-PPS:</strong></label>
                                              <input type="text" class="form-control" id="interkarnosky" name="interkarnosky" readonly="" />
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label"><strong>SOCIOFAMILIAR:</strong></label>
                                              <input type="text" class="form-control" id="intersocio" name="intersocio" readonly="" />
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="form-group col-md-6">
                                              <label class="col-form-label"><strong>ANSIEDAD:</strong></label>
                                              <input type="text" class="form-control" id="interansiedad" name="interansiedad" readonly="" />
                                            </div>
                                            <div class="form-group col-md-6">
                                              <label class="col-form-label"><strong>ZARITH:</strong></label>
                                              <input type="text" class="form-control" id="interzarith" name="interzarith" readonly="" />
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card-header" id="headiuno">
                                        <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#plani2"
                                        aria-expanded="false" aria-controls="plani2">
                                          Necesidades 1
                                        </button>
                                      </div>
                                      <div class="collapse" id="plani2" aria-labelledby="headiuno" data-parent="#separa6">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="form-group col-md-6">
                                              <label class="col-form-label"><strong>Respirar con normalidad:</strong></label>
                                              <textarea class="form-control" id="nsrespirar" name="nsrespirar"></textarea>
                                            </div>
                                            <div class="form-group col-md-6">
                                              <label class="col-form-label"><strong>Descansar y dormir:</strong></label>
                                              <textarea class="form-control" id="nsdescansar" name="nsdescansar"></textarea>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="form-group col-md-6">
                                              <label class="col-form-label"><strong>Comer y beber adecuadamente:</strong></label>
                                              <textarea class="form-control" id="nscomerybeber" name="nscomerybeber"></textarea>
                                            </div>
                                            <div class="form-group col-md-6">
                                              <label class="col-form-label"><strong>Seleccionar vestimenta adecuada:</strong></label>
                                              <textarea class="form-control" id="nsvestimenta" name="nsvestimenta"></textarea>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="form-group col-md-6">
                                              <label class="col-form-label"><strong>Eliminar los desechos del organismo:</strong></label>
                                              <textarea class="form-control" id="nseliminar" name="nseliminar"></textarea>
                                            </div>
                                            <div class="form-group col-md-6">
                                              <label class="col-form-label"><strong>Mantener la temperatura corporal:</strong></label>
                                              <textarea class="form-control" id="nscorporal" name="nscorporal"></textarea>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="form-group col-md-6">
                                              <label class="col-form-label"><strong>Mantener la higiene corporal:</strong></label>
                                              <textarea class="form-control" id="nshigiene" name="nshigiene"></textarea>
                                            </div>
                                            <div class="form-group col-md-6">
                                              <label class="col-form-label"><strong>Evitar los peligros del entorno:</strong></label>
                                              <textarea class="form-control" id="nspeligros" name="nspeligros"></textarea>
                                            </div>
                                          </div>
                                          <div class="row">
                                            
                                            <div class="form-group col-md-6 text-center ">
                                              <span class="btn-verde">¿Marcar en las partes no Especificadas como?</span>
                                            </div>
                                            <div class="form-group col-md-6 text-center ">
                                              <div class="row">
                                                <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" name="elrefiereenf2[]" onclick="paciente_refiere_intervencion_enf2()" value="no aplica">
                                                  <label class="form-check-label">No Aplica</label>
                                                   <input class="forrm-control" type="text" id="auxfrpcenf2" name="auxfrpcenf2" style="display:none" >
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card-header" id="headiuno">
                                        <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#plani3"
                                        aria-expanded="false" aria-controls="plani3">
                                          Necesidades 2
                                        </button>
                                      </div>
                                      <div class="collapse" id="plani3" aria-labelledby="headiuno" data-parent="#separa6">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="form-group col-md-6">
                                              <label class="col-form-label"><strong>Movimientos y mantenimiento de la postura adecuada:</strong></label>
                                              <textarea class="form-control" id="nspostura" name="nspostura"></textarea>
                                            </div>
                                            <div class="form-group col-md-6">
                                              <label class="col-form-label"><strong>Ejercer culto a Dios, acorde a su religión:</strong></label>
                                              <textarea class="form-control" id="nsculto" name="nsculto"></textarea>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="form-group col-md-6">
                                              <label class="col-form-label"><strong>Comunicarse con otros, expresar emociones, necesidades, miedos u opiniones:</strong></label>
                                              <textarea class="form-control" id="nsexpresar" name="nsexpresar"></textarea>
                                            </div>
                                            <div class="form-group col-md-6">
                                              <label class="col-form-label"><strong>Estudiar, descubrir o satisfacer la curiosidad que conduce a un desarrollo normal de la salud:</strong></label>
                                              <textarea class="form-control" id="nsestudiar" name="nsestudiar"></textarea>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="form-group col-md-6">
                                              <label class="col-form-label"><strong>Trabajar de forma que permita sentirse realizado:</strong></label>
                                              <textarea class="form-control" id="nstrabajar" name="nstrabajar"></textarea>
                                            </div>
                                            <div class="form-group col-md-6">
                                              <label class="col-form-label"><strong>Participar en todas las formas de recreación y ocio:</strong></label>
                                              <textarea class="form-control" id="nsparticipar" name="nsparticipar"></textarea>
                                            </div>
                                          </div>
                                           <div class="row">
                                            <div class="form-group col-md-12">
                                              <label class="col-form-label"><strong>Detalle de Intervenciones</strong></label>
                                            </div>
                                            <div class="form-group col-md-3">
                                              <label class="col-form-label"><strong>Médico:</strong></label>
                                              <input type="text" class="form-control" id="nsmedico" name="nsmedico" />
                                            </div>
                                            <div class="form-group col-md-3">
                                              <label class="col-form-label"><strong>Enfermería:</strong></label>
                                              <input type="text" class="form-control" id="nsenfermeria" name="nsenfermeria" />
                                            </div>
                                            <div class="form-group col-md-3">
                                              <label class="col-form-label"><strong>Apoyo diagnóstico:</strong></label>
                                              <input type="text" class="form-control" id="nsdiagnostico" name="nsdiagnostico" />
                                            </div>
                                            <div class="form-group col-md-3">
                                              <label class="col-form-label"><strong>Complementación terapias:</strong></label>
                                              <input type="text" class="form-control" id="nscomplementacion" name="nscomplementacion" />
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="form-group col-md-12">
                                              <label class="col-form-label"><strong>Paraclínicos:</strong></label>
                                              <input type="text" class="form-control" id="intnparaclinicos" name="intnparaclinicos" />
                                            </div>
                                            <div class="form-group col-md-12">
                                              <label class="col-form-label"><strong>Imagenología:</strong></label>
                                              <input type="text" class="form-control" id="intnimagenologia" name="intnimagenologia" />
                                            </div>
                                            <div class="form-group col-md-12">
                                              <label class="col-form-label"><strong>Liquidos:</strong></label>
                                              <input type="text" class="form-control" id="intnliquidos" name="intnliquidos" />
                                            </div>
                                            <div class="form-group col-md-12">
                                              <label class="col-form-label"><strong>Educativo:</strong></label>
                                              <textarea class="form-control" id="nseducativo" name="nseducativo"></textarea>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="form-group col-md-12">
                                              <button type="button" class="btn btn-primary" onclick="traermedicamentos_enf()">Cargar Tratamiento Farmacológico</button>
                                            </div>
                                            <div class="form-group col-md-12">
                                              <textarea class="form-control" id="auxmlosmedicamentos" name="auxmlosmedicamentos" rows="20" readonly=""></textarea>
                                            </div>
                                            <div class="form-group col-md-12">
                                              <label class="col-form-label"><strong>Observaciones:</strong></label>
                                              <textarea class="form-control" id="auxdtobservaciones" name="auxdtobservaciones" ></textarea>
                                            </div>
                                          </div>
                                          <div class="row">
                                            
                                            <div class="form-group col-md-6 text-center "><!-- mt-4 pt-4 -->
                                              <span class="btn-verde">¿Marcar en las partes no Especificadas como?</span>
                                            </div>
                                            <div class="form-group col-md-6 text-center ">
                                              <div class="row">
                                                <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" name="elrefiereenf[]" onclick="paciente_refiere_intervencion_enf()" value="no aplica">
                                                  <label class="form-check-label">No Aplica</label>
                                                   <input class="forrm-control" type="text" id="auxfrpcenf" name="auxfrpcenf" style="display:none" >
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="collapse multi-collapse collapse" id="opt2" data-parent="#accordion5">
                                  <div class="accordion form-group col-md-12" id="separa7">
                                    <div class="card">
                                      <div class="card-header" id="headiuno">
                                        <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#planid1"
                                        aria-expanded="false" aria-controls="planid1">
                                          Listado
                                        </button>
                                      </div>
                                      <div class="collapse" id="planid1" aria-labelledby="headiuno" data-parent="#separa7">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="form-group col-md-6">
                                              <label class="col-form-label"><strong>Diagnósticos:</strong></label>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Ansiedad">
                                                <label class="form-check-label">Ansiedad</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Riesgo de glucemia inestable" >
                                                <label class="form-check-label">Riesgo de glucemia inestable</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Riesgo de estreñimiento" >
                                                <label class="form-check-label">Riesgo de estreñimiento</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Estreñimiento" >
                                                <label class="form-check-label">Estreñimiento</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Deterioro de la deambulación" >
                                                <label class="form-check-label">Deterioro de la deambulación</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Insomnio">
                                                <label class="form-check-label">Insomnio</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Riesgo de deterioro de la integridad cutánea" >
                                                <label class="form-check-label">Riesgo de deterioro de la integridad cutánea</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Deterioro integridad tisular" >
                                                <label class="form-check-label">Deterioro integridad tisular</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Riesgo de infección" >
                                                <label class="form-check-label">Riesgo de infección</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Hipertermia">
                                                <label class="form-check-label">Hipertermia</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Dolor agudo" >
                                                <label class="form-check-label">Dolor agudo</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Dolor crónico" >
                                                <label class="form-check-label">Dolor crónico</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Perfusión tisular inefectiva" >
                                                <label class="form-check-label">Perfusión tisular inefectiva</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Riesgo de caídas">
                                                <label class="form-check-label">Riesgo de caídas</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Riesgo de alteración del patrón de autocuidado" >
                                                <label class="form-check-label">Riesgo de alteración del patrón de autocuidado</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Riesgo de aspiración" >
                                                <label class="form-check-label">Riesgo de aspiración</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Deterioro de la deglución" >
                                                <label class="form-check-label">Deterioro de la deglución</label>
                                              </div>                                              
                                            </div>
                                            <div class="form-group col-md-6">
                                              </br>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Incontinencia urinaria total">
                                                <label class="form-check-label">Incontinencia urinaria total</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Deterioro movilidad física" >
                                                <label class="form-check-label">Deterioro movilidad física</label>
                                              </div>
                                              <!-- <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Riesgo de Caídas" >
                                                <label class="form-check-label">Riesgo de Caídas</label>
                                              </div> -->
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Riesgo de la comunicación verbal" >
                                                <label class="form-check-label">Riesgo de la comunicación verbal</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Disposición para mejorar el autocuidado">
                                                <label class="form-check-label">Disposición para mejorar el autocuidado</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Afrontamiento familiar comprometido" >
                                                <label class="form-check-label">Afrontamiento familiar comprometido</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Riesgo de cansancio del rol de cuidador" >
                                                <label class="form-check-label">Riesgo de cansancio del rol de cuidador</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Déficit de autocuidado: alimentación" >
                                                <label class="form-check-label">Déficit de autocuidado: alimentación</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Déficit de autocuidado: Baño/higiene">
                                                <label class="form-check-label">Déficit de autocuidado: Baño/higiene</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Deterioro de la mucosa oral" >
                                                <label class="form-check-label">Deterioro de la mucosa oral</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Desatención unilateral" >
                                                <label class="form-check-label">Desatención unilateral</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Déficit de autocuidado: uso del WC" >
                                                <label class="form-check-label">Déficit de autocuidado: uso del WC</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Déficit de autocuidado: vestido/acicalamiento">
                                                <label class="form-check-label">Déficit de autocuidado: vestido/acicalamiento</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Deterioro del intercambio gaseoso" >
                                                <label class="form-check-label">Deterioro del intercambio gaseoso</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Limpieza ineficaz de las vías aéreas" >
                                                <label class="form-check-label">Limpieza ineficaz de las vías aéreas</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Patrón respiratorio ineficaz" >
                                                <label class="form-check-label">Patrón respiratorio ineficaz</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis1[]" onclick="verificachekintervencion_enf()" value="Conocimientos deficientes régimen terapéutico">
                                                <label class="form-check-label">Conocimientos deficientes régimen terapéutico</label>
                                                <input class="forrm-control" type="text" id="auxlista1" name="auxlista1" style="display:none" >
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group col-md-12  dropdown-divider"></div>
                                          <div class="row">
                                            <div class="form-group col-md-6">
                                              <label class="col-form-label"><strong>Criterios de riesgo y/o relación:</strong></label>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="El estado de salud">
                                                <label class="form-check-label">El estado de salud</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="Falta de cumplimiento del plan terapéutico" >
                                                <label class="form-check-label">Falta de cumplimiento del plan terapéutico</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="Malos hábitos alimentarios" >
                                                <label class="form-check-label">Malos hábitos alimentarios</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="Disminución de la movilidad del tracto" >
                                                <label class="form-check-label">Disminución de la movilidad del tracto</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="Disminución actividad física" >
                                                <label class="form-check-label">Disminución actividad física</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="Resistencia limitada">
                                                <label class="form-check-label">Resistencia limitada</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="Patrón de actividad" >
                                                <label class="form-check-label">Patrón de actividad</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="Alteración de la circulación" >
                                                <label class="form-check-label">Alteración de la circulación</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="Destrucción tisular" >
                                                <label class="form-check-label">Destrucción tisular</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="Enfermedad">
                                                <label class="form-check-label">Enfermedad</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="Agentes lesivos químicos, físicos y psicológicos" >
                                                <label class="form-check-label">Agentes lesivos químicos, físicos y psicológicos</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="Incapacidad física crónica" >
                                                <label class="form-check-label">Incapacidad física crónica</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="Interrupción del flujo arterial" >
                                                <label class="form-check-label">Interrupción del flujo arterial</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="Inmovilidad o Incontinencia">
                                                <label class="form-check-label">Inmovilidad o Incontinencia</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="Dificultad en la marcha" >
                                                <label class="form-check-label">Dificultad en la marcha</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="Disfunción neurológica" >
                                                <label class="form-check-label">Disfunción neurológica</label>
                                              </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                              <br>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="Secreciones bronquiales" >
                                                <label class="form-check-label">Secreciones bronquiales</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="Deterioro neuromuscular">
                                                <label class="form-check-label">Deterioro neuromuscular</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="Deterioro neuromuscular y cognitivo" >
                                                <label class="form-check-label">Deterioro neuromuscular y cognitivo</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="Intolerancia a la actividad" >
                                                <label class="form-check-label">Intolerancia a la actividad</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="Deterioro de la percepción" >
                                                <label class="form-check-label">Deterioro de la percepción</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="Procedimientos invasivos">
                                                <label class="form-check-label">Procedimientos invasivos</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="Disminución de la actividad cerebral" >
                                                <label class="form-check-label">Disminución de la actividad cerebral</label>
                                              </div>
                                              <!-- <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="Falta de cumplimiento del plan terapéutico" >
                                                <label class="form-check-label">Falta de cumplimiento del plan terapéutico</label>
                                              </div> -->
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="Continuidad de cuidados en su domicilio" >
                                                <label class="form-check-label">Continuidad de cuidados en su domicilio</label>
                                              </div>
                                             <!--  <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="El cuidador desempeña roles que entran en competencia">
                                                <label class="form-check-label">El cuidador desempeña roles que entran en competencia</label>
                                              </div> -->
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="Deterioro congnitivo y neuromuscular" >
                                                <label class="form-check-label">Deterioro congnitivo y neuromuscular</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="Dieta absoluta más de 24 horas" >
                                                <label class="form-check-label">Dieta absoluta más de 24 horas</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="Desequilibrio ventilación-perfusión" >
                                                <label class="form-check-label">Desequilibrio ventilación-perfusión</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="Mucosidad excesiva">
                                                <label class="form-check-label">Mucosidad excesiva</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="Fatiga de los músculos respiratorios" >
                                                <label class="form-check-label">Fatiga de los músculos respiratorios</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis2[]" onclick="verificachekintervencion_enf()" value="Interpretación errónea de la información" >
                                                <label class="form-check-label">Interpretación errónea de la información</label>
                                                <input class="forrm-control" type="text" id="auxlista2" name="auxlista2" style="display:none" >
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group col-md-12  dropdown-divider"></div>
                                          <div class="row">
                                            <div class="form-group col-md-6">
                                              <label class="col-form-label"><strong>Criterios de resultado:</strong></label>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Nivel de ansiedad">
                                                <label class="form-check-label">Nivel de ansiedad</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Nivel de glucemia" >
                                                <label class="form-check-label">Nivel de glucemia</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Eliminación intestinal" >
                                                <label class="form-check-label">Eliminación intestinal</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Ambular" >
                                                <label class="form-check-label">Ambular</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Sueño" >
                                                <label class="form-check-label">Sueño</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Integridad tisular: piel y membranas mucosas">
                                                <label class="form-check-label">Integridad tisular: piel y membranas mucosas</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Curación de la herida: por segunda intención" >
                                                <label class="form-check-label">Curación de la herida: por segunda intención</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Curación de la herida: por primera intención" >
                                                <label class="form-check-label">Curación de la herida: por primera intención</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Termorregulación" >
                                                <label class="form-check-label">Termorregulación</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Control del dolor">
                                                <label class="form-check-label">Control del dolor</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Nivel del dolor" >
                                                <label class="form-check-label">Nivel del dolor</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Perfusión tisular periférica" >
                                                <label class="form-check-label">Perfusión tisular periférica</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Conducta de prenvención caídas" >
                                                <label class="form-check-label">Conducta de prenvención caídas</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Actividades de la vida diaria asistidas">
                                                <label class="form-check-label">Actividades de la vida diaria asistidas</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Estado respiratorio: Permeabilidad de vías respiratoria" >
                                                <label class="form-check-label">Estado respiratorio: Permeabilidad de vías respiratoria</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Estado de deglución" >
                                                <label class="form-check-label">Estado de deglución</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Eliminación urinaria" >
                                                <label class="form-check-label">Eliminación urinaria</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Motilidad intestina">
                                                <label class="form-check-label">Motilidad intestina</label>
                                              </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                              <br>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Severidad de la infeción" >
                                                <label class="form-check-label">Severidad de la infeción</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Comunicación" >
                                                <label class="form-check-label">Comunicación</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Actividades de la vida diaria" >
                                                <label class="form-check-label">Actividades de la vida diaria</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Rendimiento del cuidador principal: cuidados directos">
                                                <label class="form-check-label">Rendimiento del cuidador principal: cuidados directos</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Posible resistencia al cuidado familiar" >
                                                <label class="form-check-label">Posible resistencia al cuidado familiar</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Autocuidados: comer" >
                                                <label class="form-check-label">Autocuidados: comer</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Autocuidado: higiene" >
                                                <label class="form-check-label">Autocuidado: higiene</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Higiene bucal">
                                                <label class="form-check-label">Higiene bucal</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Consecuencias de la inmovilidad fisiológica" >
                                                <label class="form-check-label">Consecuencias de la inmovilidad fisiológica</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Autocuidados: actividades de la vida diaria (AVD)" >
                                                <label class="form-check-label">Autocuidados: actividades de la vida diaria (AVD)</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Autocuidado: uso del inodoro" >
                                                <label class="form-check-label">Autocuidado: uso del inodoro</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Autocuidado: vestirse">
                                                <label class="form-check-label">Autocuidado: vestirse</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Signos vitales" >
                                                <label class="form-check-label">Signos vitales</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Estado respiratorio: intercambio gaseoso" >
                                                <label class="form-check-label">Estado respiratorio: intercambio gaseoso</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Estado respiratorio: permeabilidad de las vias aéreas" >
                                                <label class="form-check-label">Estado respiratorio: permeabilidad de las vias aéreas</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Estado respiratorio: ventilación">
                                                <label class="form-check-label">Estado respiratorio: ventilación</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis3[]" onclick="verificachekintervencion_enf()" value="Conocimiento medicación" >
                                                <label class="form-check-label">Conocimiento medicación</label>
                                                <input class="forrm-control" type="text" id="auxlista3" name="auxlista3" style="display:none" >
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group col-md-12  dropdown-divider"></div>
                                          <div class="row">
                                            <div class="form-group col-md-6">
                                              <label class="col-form-label"><strong>Intervenciones a realizar:</strong></label>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Disminución de la ansiedad">
                                                <label class="form-check-label">Disminución de la ansiedad</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Manejo de la hiperglucemia" >
                                                <label class="form-check-label">Manejo de la hiperglucemia</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Manejo del estreñimiento / impactación" >
                                                <label class="form-check-label">Manejo del estreñimiento / impactación</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Manejo de la nutrición" >
                                                <label class="form-check-label">Manejo de la nutrición</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Terapia ejercicio: Ambulación" >
                                                <label class="form-check-label">Terapia ejercicio: Ambulación</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Mejorar el sueño">
                                                <label class="form-check-label">Mejorar el sueño</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Cuidados circulatorios: Insuficiencia arterial" >
                                                <label class="form-check-label">Cuidados circulatorios: Insuficiencia arterial</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Cuidados de las heridas" >
                                                <label class="form-check-label">Cuidados de las heridas</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Protección contra las infecciones" >
                                                <label class="form-check-label">Protección contra las infecciones</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Tratamiento de la fiebre">
                                                <label class="form-check-label">Tratamiento de la fiebre</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Manejo del dolor" >
                                                <label class="form-check-label">Manejo del dolor</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Cambio de posicion" >
                                                <label class="form-check-label">Cambio de posicion</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Manejo ambiental" >
                                                <label class="form-check-label">Manejo ambiental</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Ayuda al autocuidado">
                                                <label class="form-check-label">Ayuda al autocuidado</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Fisioterapia respiratoria" >
                                                <label class="form-check-label">Fisioterapia respiratoria</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Terapia de deglución" >
                                                <label class="form-check-label">Terapia de deglución</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Manejo de la eliminación urinaria" >
                                                <label class="form-check-label">Manejo de la eliminación urinaria</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Terapia de ejercicios: movilidad articular">
                                                <label class="form-check-label">Terapia de ejercicios: movilidad articular</label>
                                              </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                              <br>
                                              <!-- <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Cambios de posición" >
                                                <label class="form-check-label">Cambios de posición</label>
                                              </div> -->
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Terapia de ejercicios: equilibrio" >
                                                <label class="form-check-label">Terapia de ejercicios: equilibrio</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Control de las infecciones" >
                                                <label class="form-check-label">Control de las infecciones</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Disminución de la ansiedad">
                                                <label class="form-check-label">Disminución de la ansiedad</label>
                                              </div>
                                             <!--  <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Ayuda al autocuidado" >
                                                <label class="form-check-label">Ayuda al autocuidado</label>
                                              </div> -->
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Apoyo al cuidador principal: facilitar el aprendizaje" >
                                                <label class="form-check-label">Apoyo al cuidador principal: facilitar el aprendizaje</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Apoyo al cuidador principal: facilitar pausas activas" >
                                                <label class="form-check-label">Apoyo al cuidador principal: facilitar pausas activas</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Ayuda con los autocuidados: alimentación">
                                                <label class="form-check-label">Ayuda con los autocuidados: alimentación</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Ayuda con los autocuidados: baño/higiene" >
                                                <label class="form-check-label">Ayuda con los autocuidados: baño/higiene</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Mantenimiento de la salud bucal" >
                                                <label class="form-check-label">Mantenimiento de la salud bucal</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Ayuda con los autocuidados: vestir/arreglo personal" >
                                                <label class="form-check-label">Ayuda con los autocuidados: vestir/arreglo personal</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Manejo ante la anulación de un lado del cuerpo">
                                                <label class="form-check-label">Manejo ante la anulación de un lado del cuerpo</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Ayuda con los autocuidados: aseo" >
                                                <label class="form-check-label">Ayuda con los autocuidados: aseo</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Monitorización respiratoria" >
                                                <label class="form-check-label">Monitorización respiratoria</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Oxigenoterapia" >
                                                <label class="form-check-label">Oxigenoterapia</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Manejo de las vías aéreas">
                                                <label class="form-check-label">Manejo de las vías aéreas</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Fisioterapia respitaroia" >
                                                <label class="form-check-label">Fisioterapia respitaroia</label>
                                              </div>
                                              <div class="form-check">
                                                 <input class="form-check-input" type="checkbox" name="lis4[]" onclick="verificachekintervencion_enf()" value="Enseñanza: medicamentos prescritos" >
                                                <label class="form-check-label">Enseñanza: medicamentos prescritos</label>
                                                <input class="forrm-control" type="text" id="auxlista4" name="auxlista4" style="display:none" >
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group col-md-12  dropdown-divider"></div>
                                  <div class="row">
                                    <div class="col-md-8 text-center" id="btngintervencion">
                                      <button type="button" id="btngdintervencion" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarintervencion">GUARDAR</button>
                                      <input type="text" class="form-control" id="numhc4" name="numhc4" style="display:none" />
                                      <input type="text" class="form-control" id="fechai4" name="fechai4" style="display:none">
                                    </div>
                                    <div class="col-md-8 text-center" id="btnaintervencion" style="display:none">
                                      <button type="button" id="btngdintervencion2" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarintervencion2">ACTUALIZAR</button>
                                    </div>
                                    <div class="col-md-4">
                                      <div id="box">
                                        <div id="box-time4" style="display:none"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                  <button class="btn btn-primary" type="button" onclick="siguientepaginae3()">Siguiente</button>
                                  <input type="text" value="1" id="pagina3" class="form-control" style="display:none" />
                                </li>
                                <li class="nav-item">
                                  <a href=""></a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link active bg-danger" id="subopt1" href="#opt1" data-toggle="collapse" data-target="#opt1" aria-expanded="false" aria-controls="opt1" onclick="doynumeropaginae3('1')">1</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link bg-white" id="subopt2" href="#opt2" data-toggle="collapse" data-target="#opt2" aria-expanded="false" aria-controls="opt2" onclick="doynumeropaginae3('2')">2</a>
                                </li>
                                <li class="nav-item">
                                  <button class="btn btn-primary" type="button" onclick="atraspaginae3()">Atras</button>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        </form>
                      </div>
                      <div class="collapse multi-collapse collapse" id="multi3" data-parent="#accordion2">
                        <form id="hcescalacarga_enf" action="#" method="POST">
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
                                  <div class="form-group col-md-3 mt-2 pdt-2">
                                    <label class="col-form-label"><strong>El Paciente Puede Responder:</strong></label>
                                  </div>
                                  <div class="form-group col-md-2 mt-2 pt-2">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="puederesponderp2" onclick="verificaradiosescalaPreguntaenf1()" onchange="" value="si">
                                      <label class="form-check-label">SI</label>
                                    </div>
                                  </div>
                                  <div class="form-group col-md-2 mt-2 pt-2">
                                   <div class="form-check">
                                      <input class="form-check-input" type="radio" name="puederesponderp2" onclick="verificaradiosescalaPreguntaenf1()" onchange="" value="no">
                                      <label class="form-check-label">NO</label>
                                      <input class="forrm-control" type="text" id="auxpreguntar2" name="auxpreguntar2" style="display:none" >
                                    </div>
                                  </div>
                                  <div id="cajapararesponderescalacarga" class="form-group col-md-5" style="display:none" >
                                    <label class="col-form-label"><strong>Detalle</strong></label>
                                    <input class="form-control" type="text" id="auxpreguntardt2" name="auxpreguntardt2" >
                                  </div>
                                  <div class="form-group col-md-12">
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label>Preguntas a Realizar</label>
                                  </div>
                                  <div class="form-group col-md-1">
                                    <label>Fecha</label>
                                  </div>
                                  <div class="form-group col-md-4">
                                    <input type="text" class="form-control" placeholder="dd/mm/aaaa" id="carga_fecha" name="carga_fecha" />
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
                                    <input type="range" class="form-control-range" id="carga_1" name="carga_1"  value="0" min="0" max="4" step="1">
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
                                    <input type="range" class="form-control-range" id="carga_2" name="carga_2" value="0" min="0" max="4" step="1">
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
                                    <input type="range" class="form-control-range" id="carga_3" name="carga_3" value="0" min="0" max="4" step="1">
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
                                    <input type="range" class="form-control-range" id="carga_4" name="carga_4" value="0" min="0" max="4" step="1">
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
                                    <input type="range" class="form-control-range" id="carga_5" name="carga_5" value="0" min="0" max="4" step="1">
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
                                    <input type="range" class="form-control-range" id="carga_6" name="carga_6" value="0" min="0" max="4" step="1">
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
                                    <input type="range" class="form-control-range" id="carga_7" name="carga_7" value="0" min="0" max="4" step="1">
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
                                    <input type="range" class="form-control-range" id="carga_8" name="carga_8" value="0" min="0" max="4" step="1">
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
                                    <input type="range" class="form-control-range" id="carga_9" name="carga_9" value="0" min="0" max="4" step="1">
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
                                    <input type="range" class="form-control-range" id="carga_10" name="carga_10" value="0" min="0" max="4" step="1">
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
                                    <input type="range" class="form-control-range" id="carga_11" name="carga_11" value="0" min="0" max="4" step="1">
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
                                    <input type="range" class="form-control-range" id="carga_12" name="carga_12" value="0" min="0" max="4" step="1">
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
                                    <input type="range" class="form-control-range" id="carga_13" name="carga_13" value="0" min="0" max="4" step="1">
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
                                    <input type="range" class="form-control-range" id="carga_14" name="carga_14" value="0" min="0" max="4" step="1">
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
                                    <input type="range" class="form-control-range" id="carga_15" name="carga_15" value="0" min="0" max="4" step="1">
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
                                    <input type="range" class="form-control-range" id="carga_16" name="carga_16" value="0" min="0" max="4" step="1">
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
                                    <input type="range" class="form-control-range" id="carga_17" name="carga_17" value="0" min="0" max="4" step="1">
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
                                    <input type="range" class="form-control-range" id="carga_18" name="carga_18" value="0" min="0" max="4" step="1">
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
                                    <input type="range" class="form-control-range" id="carga_19" name="carga_19" value="0" min="0" max="4" step="1">
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
                                    <input type="range" class="form-control-range" id="carga_20" name="carga_20" value="0" min="0" max="4" step="1">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-md-8">
                                    <span>¿Cree que podría cuidar de su familiar mejor de lo que lo hace?</span>
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
                                    <input type="range" class="form-control-range" id="carga_21" name="carga_21" value="0" min="0" max="4" step="1">
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
                                    <input type="range" class="form-control-range" id="carga_22" name="carga_22" value="0" min="0" max="4" step="1">
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
                              <input type="text" class="form-control" id="carga_total" name="carga_total" readonly="" />
                            </div>
                            <div class="form-group col-md-1">
                              <label>Estado</label>
                            </div>
                            <div class="form-group col-md-3">
                              <input type="text" class="form-control" id="carga_nivel" name="carga_nivel" readonly="" />
                            </div>
                          </div>
                          <div class="form-group col-md-12  dropdown-divider"></div>
                          <div class="row">
                            <div class="col-md-8 text-center" id="btngescalacarga">
                              <button type="button" id="btngdescalacarga" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarescalacarga">GUARDAR</button>
                              <input type="text" class="form-control" id="numhc3" name="numhc3" style="display:none" />
                              <input type="text" class="form-control" id="fechai3" name="fechai3" style="display:none">
                            </div>
                            <div class="col-md-8 text-center" id="btnaescalacarga" style="display:none">
                              <button type="button" id="btngdescalacarga2" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarescalacarga2">ACTUALIZAR</button>
                            </div>
                            <div class="col-md-4">
                              <div id="box">
                                <div id="box-time3" style="display:none"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        </form>
                      </div>
                      <div class="collapse multi-collapse collapse" id="multi4" data-parent="#accordion2">
                        <form id="hcsociofamiliar_enf" action="#" method="POST">
                        <div class="row">
                          <div class="form-group col-md-12">
                            <div class="card-header">
                              <div class="accordion" id="accordion4">
                                <div class="collapse multi-collapse collapse show" id="opd1" data-parent="#accordion4">
                                  <div class="row">
                                    <div class="accordion form-group col-md-12" id="separa3">
                                      <div class="card">
                                        <div class="card-header" id="headiuno">
                                          <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#valosoc1"
                                          aria-expanded="false" aria-controls="valosoc1">
                                            Valoración de la vivienda
                                          </button>
                                        </div>
                                        <div class="collapse" id="valosoc1" aria-labelledby="headiuno" data-parent="#separa3">
                                          <div class="card-body">
                                            <div class="row">
                                              <div class="form-group col-md-12">
                                                <label class="col-form-label"><strong></strong></label>
                                                <div class="row">
                                                  <div class="form-group col-md-3 mt-2 pdt-2">
                                                    <label class="col-form-label"><strong>El Paciente Puede Responder:</strong></label>
                                                  </div>
                                                  <div class="form-group col-md-2 mt-2 pt-2">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="puederesponderpvs" onclick="verificaradiovaloracionPreguntaenf12()" onchange="" value="si">
                                                      <label class="form-check-label">SI</label>
                                                    </div>
                                                  </div>
                                                  <div class="form-group col-md-2 mt-2 pt-2">
                                                   <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="puederesponderpvs" onclick="verificaradiovaloracionPreguntaenf12()" onchange="" value="no">
                                                      <label class="form-check-label">NO</label>
                                                      <input class="forrm-control" type="text" id="auxpreguntarvs" name="auxpreguntarvs" style="display:none" >
                                                    </div>
                                                  </div>
                                                  <div id="cajapararespondersociofamiliar2" class="form-group col-md-5" style="display:none" >
                                                    <label class="col-form-label"><strong>Detalle</strong></label>
                                                    <input class="form-control" type="text" id="auxpreguntardt1vs" name="auxpreguntardt1vs" >
                                                  </div>
                                                  <div class="col-md-12">
                                                  </div>
                                                  <div class="col-md-3">
                                                    <label class="form-check-label text-uppercase"><strong>Servicios publicos:</strong></label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="viveservicios[]" onclick="verificacheksociofamiliar_enf()"  value="No aplica" >
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="viveservicios[]" id="viveservicios1" onclick="verificacheksociofamiliar_enf()"  value="Acueducto" >
                                                      <label class="form-check-label">Acueducto</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="viveservicios[]" id="viveservicios2" onclick="verificacheksociofamiliar_enf()"  value="Alcantarillado">
                                                      <label class="form-check-label">Alcantarillado</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="viveservicios[]" id="viveservicios3" onclick="verificacheksociofamiliar_enf()"  value="Energía" >
                                                      <label class="form-check-label">Energía</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="viveservicios[]" id="viveservicios4" onclick="verificacheksociofamiliar_enf()"  value="Gas natural">
                                                      <label class="form-check-label">Gas natural</label>
                                                    </div> 
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="viveservicios[]" id="viveservicios5" onclick="verificacheksociofamiliar_enf()"  value="Aseo">
                                                      <label class="form-check-label">Aseo</label>
                                                      <input type="text" class="form-control" id="auxservicios" name="auxservicios" style="display:none" />
                                                    </div>
                                                  </div>
                                                  <div class="col-md-3">
                                                    <label class="form-check-label text-uppercase"><strong>Telefonia</strong></label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="vivetelefonia[]" onclick="verificacheksociofamiliar_enf()"  value="No aplica">
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="vivetelefonia[]" id="vivetelefonia1" onclick="verificacheksociofamiliar_enf()"  value="Fija">
                                                      <label class="form-check-label">Fija</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="vivetelefonia[]" id="vivetelefonia2" onclick="verificacheksociofamiliar_enf()"  value="Móvil">
                                                      <label class="form-check-label">Móvil</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="vivetelefonia[]" id="vivetelefonia3" onclick="verificacheksociofamiliar_enf()"  value="Internet">
                                                      <label class="form-check-label">Internet</label>
                                                      <input type="text" class="form-control" id="auxtelefonia" name="auxtelefonia" style="display:none" />
                                                    </div>
                                                  </div>
                                                  <div class="col-md-3">
                                                    <label class="form-check-label text-uppercase"><strong>Manejo de Residuos</strong></label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="viveresiduos[]" onclick="verificacheksociofamiliar_enf()"  value="No aplica">
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="viveresiduos[]" id="viveresiduos1" onclick="verificacheksociofamiliar_enf()"  value="Bolsa">
                                                      <label class="form-check-label">Bolsa</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="viveresiduos[]" id="viveresiduos2" onclick="verificacheksociofamiliar_enf()"  value="Caneca">
                                                      <label class="form-check-label">Caneca</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="viveresiduos[]" id="viveresiduos3" onclick="verificacheksociofamiliar_enf()"  value="Reciclaje">
                                                      <label class="form-check-label">Reciclaje</label>
                                                    </div> 
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="viveresiduos[]" id="viveresiduos4" onclick="verificacheksociofamiliar_enf()"  value="Shunt">
                                                      <label class="form-check-label">Shunt</label>
                                                    </div> 
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="viveresiduos[]" id="viveresiduos5" onclick="verificacheksociofamiliar_enf()"  value="Contenedor publico">
                                                      <label class="form-check-label">Contenedor publico</label>
                                                      <input type="text" class="form-control" id="auxresiduos" name="auxresiduos" style="display:none" />
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-3">
                                                    <label class="form-check-label text-uppercase"><strong>Area en la vivienda</strong></label>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivearea" id="vivearea1" onclick="verificarradiosociofamiliar_enf()"  value="No aplica">
                                                      <label class="form-check-label">No aplica</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivearea" id="vivearea2" onclick="verificarradiosociofamiliar_enf()"  value="Interior">
                                                      <label class="form-check-label">Interior</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivearea" id="vivearea3" onclick="verificarradiosociofamiliar_enf()"  value="Exterior">
                                                      <label class="form-check-label">Exterior</label>
                                                      <input type="text" class="form-control" id="auxarea" name="auxarea" style="display:none" />
                                                    </div>
                                                    <div class="form-group">
                                                      <label class="form-check-label"><strong>Observaciones</strong></label>
                                                      <input type="text" class="form-control" id="dtareavivienda" name="dtareavivienda" >
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
                                                      <input type="text" class="form-control" id="viveanimales" name="viveanimales" >
                                                    </div>
                                                    <div class="form-group">
                                                      <label class="form-check-label"><strong>Vacunados</strong></label>
                                                      <input type="text" class="form-control" id="vivevacunados" name="vivevacunados" >
                                                    </div>
                                                    <div class="form-group">
                                                      <label class="form-check-label"><strong>Donde habitan</strong></label>
                                                      <input type="text" class="form-control" id="vivehabitan" name="vivehabitan" >
                                                    </div>
                                                  </div>
                                                  <div class="col-md-3">
                                                    <label class="form-check-label text-uppercase"><strong>Vectores</strong></label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivevectoreas" onclick="verificarradiosociofamiliar_enf()"  value="No aplica">
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivevectoreas" id="vivevectoreas1" onclick="verificarradiosociofamiliar_enf()"  value="Ninguna">
                                                      <label class="form-check-label">Ninguna</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivevectoreas" id="vivevectoreas2" onclick="verificarradiosociofamiliar_enf()"  value="Voladores">
                                                      <label class="form-check-label">Voladores</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivevectoreas" id="vivevectoreas3" onclick="verificarradiosociofamiliar_enf()"  value="Rastreros">
                                                      <label class="form-check-label">Rastreros</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivevectoreas" id="vivevectoreas4" onclick="verificarradiosociofamiliar_enf()"  value="Antropodos">
                                                      <label class="form-check-label">Antropodos</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivevectoreas" id="vivevectoreas5" onclick="verificarradiosociofamiliar_enf()"  value="Se fumiga">
                                                      <label class="form-check-label">Se fumiga</label>
                                                    </div>
                                                    <div class="form-group">
                                                      <label class="form-check-label"></label>
                                                      <label class="form-check-label"><strong>Nombre producto utilizado</strong></label>
                                                      <input type="text" class="form-control" id="viveproducto" name="viveproducto" >
                                                      <input type="text" class="form-control" id="auxvectores" name="auxvectores" style="display:none" />
                                                    </div>
                                                  </div>
                                                  <div class="col-md-3">
                                                    <label class="form-check-label text-uppercase"><strong>Alimentos</strong></label>
                                                    <div class="form-group">
                                                      <label class="form-check-label"><strong>Almacenados</strong></label>
                                                      <input type="text" class="form-control" id="vivealmacenados" name="vivealmacenados" >
                                                    </div>
                                                    <div class="form-group">
                                                      <label class="form-check-label"><strong>Conservados</strong></label>
                                                      <input type="text" class="form-control" id="viveconservados" name="viveconservados" >
                                                    </div>
                                                  </div>
                                                  <div class="col-md-3">
                                                    <label class="form-check-label text-uppercase"><strong>Utensilios de Cocina</strong></label>
                                                    <div class="form-group">
                                                      <label class="form-check-label"><strong>Conservación</strong></label>
                                                      <input type="text" class="form-control" id="viveconservacion" name="viveconservacion" >
                                                    </div>
                                                    <div class="form-group">
                                                      <label class="form-check-label"><strong>Estado</strong></label>
                                                      <input type="text" class="form-control" id="viveestado" name="viveestado" >
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
                                                      <input type="text" class="form-control" id="viveaseado" name="viveaseado" >
                                                    </div>
                                                    <div class="form-group">
                                                      <label class="form-check-label"><strong>Productos</strong></label>
                                                      <input type="text" class="form-control" id="viveproductos" name="viveproductos" >
                                                    </div>
                                                    <div class="form-group">
                                                      <label class="form-check-label"><strong>Orden</strong></label>
                                                      <input type="text" class="form-control" id="viveorden" name="viveorden" >
                                                    </div>
                                                    <div class="form-group">
                                                      <label class="form-check-label"><strong>Rutinas</strong></label>
                                                      <input type="text" class="form-control" id="viverutinas" name="viverutinas" >
                                                    </div>
                                                  </div>
                                                  <div class="col-md-3">
                                                    <label class="form-check-label text-uppercase"><strong>Accesibilidad</strong></label>
                                                    <div class="form-group">
                                                      <label class="form-check-label"><strong>Ingreso</strong></label>
                                                      <input type="text" class="form-control" id="viveingreso" name="viveingreso" >
                                                    </div>
                                                    <div class="form-group">
                                                      <label class="form-check-label"><strong>Interior</strong></label>
                                                      <input type="text" class="form-control" id="viveexterior" name="viveexterior" >
                                                    </div>
                                                  </div>
                                                  <div class="col-md-3">
                                                    <label class="form-check-label text-uppercase"><strong>Baño</strong></label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivebano" onclick="verificarradiosociofamiliar_enf()"  value="No aplica">
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivebano" id="vivebano1" onclick="verificarradiosociofamiliar_enf()"  value="uní personal">
                                                      <label class="form-check-label">Uní Personal</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivebano" id="vivebano2" onclick="verificarradiosociofamiliar_enf()"  value="en la habitación">
                                                      <label class="form-check-label">En la Habitación</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivebano" id="vivebano3" onclick="verificarradiosociofamiliar_enf()"  value="compartido">
                                                      <label class="form-check-label">Compartido</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivebano" id="vivebano4" onclick="verificarradiosociofamiliar_enf()"  value="social">
                                                      <label class="form-check-label">Social</label>
                                                      <input type="text" class="form-control" id="auxbano" name="auxbano" style="display:none" />
                                                    </div><br>
                                                    <label class="form-check-label text-uppercase"><strong>Separacion</strong></label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="viveseparacion" onclick="verificarradiosociofamiliar_enf()"  value="No aplica">
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="viveseparacion" id="viveseparacion1" onclick="verificarradiosociofamiliar_enf()"  value="fija">
                                                      <label class="form-check-label">Fija</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="viveseparacion" id="viveseparacion2" onclick="verificarradiosociofamiliar_enf()"  value="móvil">
                                                      <label class="form-check-label">Móvil</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="viveseparacion" id="viveseparacion3" onclick="verificarradiosociofamiliar_enf()"  value="barra de apoyo">
                                                      <label class="form-check-label">Barra de Apoyo</label>
                                                      <input type="text" class="form-control" id="auxseparacion" name="auxseparacion" style="display:none" />
                                                    </div>
                                                  </div>
                                                  <div class="col-md-3">
                                                    <label class="form-check-label text-uppercase"><strong>Habitación</strong></label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivehabitacion" onclick="verificarradiosociofamiliar_enf()"  value="No aplica">
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivehabitacion" id="vivehabitacion1" onclick="verificarradiosociofamiliar_enf()"  value="uní personal">
                                                      <label class="form-check-label">Uní personal</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivehabitacion" id="vivehabitacion2" onclick="verificarradiosociofamiliar_enf()"  value="bipersonal">
                                                      <label class="form-check-label">Bipersonal</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivehabitacion" id="vivehabitacion3" onclick="verificarradiosociofamiliar_enf()"  value="múltiple">
                                                      <label class="form-check-label">Múltiple</label>
                                                      <input type="text" class="form-control" id="auxhabitacion" name="auxhabitacion" style="display:none" />
                                                    </div><br><br>
                                                    <label class="form-check-label text-uppercase"><strong>Ventilacion</strong></label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="viveventilacion" onclick="verificarradiosociofamiliar_enf()"  value="No aplica">
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="viveventilacion" id="viveventilacion1" onclick="verificarradiosociofamiliar_enf()"  value="natural">
                                                      <label class="form-check-label">Natural</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="viveventilacion" id="viveventilacion2" onclick="verificarradiosociofamiliar_enf()"  value="artificial">
                                                      <label class="form-check-label">Artificial</label>
                                                      <input type="text" class="form-control" id="auxventilacion" name="auxventilacion" style="display:none" />
                                                    </div><br>
                                                    <label class="form-check-label text-uppercase"><strong>Iluminacion</strong></label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="viveiluminacion" onclick="verificarradiosociofamiliar_enf()"  value="No aplica">
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="viveiluminacion" id="viveiluminacion1" onclick="verificarradiosociofamiliar_enf()"  value="natural">
                                                      <label class="form-check-label">Natural</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="viveiluminacion" id="viveiluminacion2" onclick="verificarradiosociofamiliar_enf()"  value="artificial">
                                                      <label class="form-check-label">Artificial</label>
                                                      <input type="text" class="form-control" id="auxiluminacion" name="auxiluminacion" style="display:none" />
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card-header" id="headiuno">
                                          <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#valosoc2"
                                          aria-expanded="false" aria-controls="valosoc2">
                                            Escala de Ansiedad y Depresión Hospitalaria
                                          </button>
                                        </div>
                                        <div class="collapse" id="valosoc2" aria-labelledby="headiuno" data-parent="#separa3">
                                          <div class="card-body">
                                            <div class="row">
                                              <div class="form-group col-md-3 mt-2 pdt-2">
                                                <label class="col-form-label"><strong>El Paciente Puede Responder:</strong></label>
                                              </div>
                                              <div class="form-group col-md-2 mt-2 pt-2">
                                                <div class="form-check">
                                                  <input class="form-check-input" type="radio" name="puederesponderp" onclick="verificaradiovaloracionPreguntaenf1()" onchange="" value="si">
                                                  <label class="form-check-label">SI</label>
                                                </div>
                                              </div>
                                              <div class="form-group col-md-2 mt-2 pt-2">
                                               <div class="form-check">
                                                  <input class="form-check-input" type="radio" name="puederesponderp" onclick="verificaradiovaloracionPreguntaenf1()" onchange="" value="no">
                                                  <label class="form-check-label">NO</label>
                                                  <input class="forrm-control" type="text" id="auxpreguntar" name="auxpreguntar" style="display:none" >
                                                </div>
                                              </div>
                                              <div id="cajapararespondersociofamiliar" class="form-group col-md-5" style="display:none" >
                                                <label class="col-form-label"><strong>Detalle</strong></label>
                                                <input class="form-control" type="text" id="auxpreguntardt1" name="auxpreguntardt1" >
                                              </div>
                                              <div class="form-group col-md-12">
                                              </div>
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
                                                <input type="range" class="form-control-range" id="ayd1" name="ayd1" value="1" min="1" max="4" step="1">
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
                                                <input type="range" class="form-control-range" id="ayd2" name="ayd2" value="1" min="1" max="4" step="1">
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
                                                <input type="range" class="form-control-range" id="ayd3" name="ayd3" value="1" min="1" max="4" step="1">
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
                                                <input type="range" class="form-control-range" id="ayd4" name="ayd4" value="1" min="1" max="4" step="1">
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
                                                <input type="range" class="form-control-range" id="ayd5" name="ayd5" value="1" min="1" max="4" step="1">
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
                                                <input type="range" class="form-control-range" id="ayd6" name="ayd6" value="1" min="1" max="4" step="1">
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
                                                <input type="range" class="form-control-range" id="ayd7" name="ayd7" value="1" min="1" max="4" step="1">
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
                                                <input type="range" class="form-control-range" id="ayd8" name="ayd8" value="1" min="1" max="4" step="1">
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
                                                <input type="range" class="form-control-range" id="ayd9" name="ayd9" value="1" min="1" max="4" step="1">
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
                                                <input type="range" class="form-control-range" id="ayd10" name="ayd10" value="1" min="1" max="4" step="1">
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
                                                <input type="range" class="form-control-range" id="ayd11" name="ayd11" value="1" min="1" max="4" step="1">
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
                                                <input type="range" class="form-control-range" id="ayd12" name="ayd12" value="1" min="1" max="4" step="1">
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
                                                <input type="range" class="form-control-range" id="ayd13" name="ayd13" value="1" min="1" max="4" step="1">
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
                                                <input type="text" class="form-control" id="aydtoal" name="aydtoal" readonly="" />
                                              </div>
                                              <div class="form-group col-md-2">
                                                <label for="formControlRange">1x = </label>
                                                <input type="text" class="form-control" id="ayd1x" name="ayd1x" readonly="" />
                                              </div>
                                              <div class="form-group col-md-2">
                                                <label for="formControlRange">2x = </label>
                                                <input type="text" class="form-control" id="ayd2x" name="ayd2x" readonly="" />
                                              </div>
                                              <div class="form-group col-md-2">
                                                <label for="formControlRange">3x = </label>
                                                <input type="text" class="form-control" id="ayd3x" name="ayd3x" readonly="" />
                                              </div>
                                              <div class="form-group col-md-2">
                                                <label for="formControlRange">4x = </label>
                                                <input type="text" class="form-control" id="ayd4x" name="ayd4x" readonly="" />
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>                                    
                                  </div>
                                </div>
                                <div class="collapse multi-collapse collapse " id="opd2" data-parent="#accordion4">
                                  <div class="accordion form-group col-md-12" id="separa4">
                                    <div class="card">
                                      <!-- <div class="card-header" id="headiuno">
                                        <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#valosocd1"
                                        aria-expanded="false" aria-controls="valosocd1">
                                          Familio Grama, Ecomapa
                                        </button>
                                      </div>
                                      <div class="collapse" id="valosocd1" aria-labelledby="headiuno" data-parent="#separa4">
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
                                        <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#valosocd2"
                                        aria-expanded="false" aria-controls="valosocd2">
                                          Situación Familiar
                                        </button>
                                      </div>
                                      <div class="collapse" id="valosocd2" aria-labelledby="headiuno" data-parent="#separa4">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="form-group col-md-11">
                                              <div class="row">
                                                <!-- <div class="col-md-12">
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
                                                  <input type="range" class="form-control-range" id="" value="3" min="0" max="4" step="1">
                                                </div> -->
                                                <div class="col-md-2">
                                                  <table class="table table-bordered">
                                                    <thead>
                                                      <tr>
                                                        <th class="text-center">1</th>
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
                                                        <th class="text-center">2</th>
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
                                                        <th class="text-center">3</th>
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
                                                        <th class="text-center">4</th>
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
                                                        <th class="text-center">5</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                      <tr>
                                                        <td class="text-justify">
                                                          Vive solo y carece de hijos o viven alejados
                                                        </td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group col-md-1">
                                              <input type="number" class="form-control" id="situacion_familiar" name="situacion_familiar" onchange="situacion()" min="1" max="5" value="1" />
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card-header" id="headiuno">
                                        <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#valosocd3"
                                        aria-expanded="false" aria-controls="valosocd3">
                                          Situación Económica
                                        </button>
                                      </div>
                                      <div class="collapse" id="valosocd3" aria-labelledby="headiuno" data-parent="#separa4">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="form-group col-md-11">
                                              <div class="row">
                                                <div class="col-md-2">
                                                  <table class="table table-bordered">
                                                    <thead>
                                                      <tr>
                                                        <th class="text-center">1</th>
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
                                                        <th class="text-center">2</th>
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
                                                        <th class="text-center">3</th>
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
                                                        <th class="text-center">4</th>
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
                                                        <th class="text-center">5</th>
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
                                              <input type="number" class="form-control" id="situacion_economica" name="situacion_economica" onchange="situacion()" min="1" max="5" value="1" />
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card-header" id="headiuno">
                                        <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#valosocd4"
                                        aria-expanded="false" aria-controls="valosocd4">
                                          Vivienda
                                        </button>
                                      </div>
                                      <div class="collapse" id="valosocd4" aria-labelledby="headiuno" data-parent="#separa4">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="form-group col-md-11">
                                              <div class="row">
                                                <div class="col-md-2">
                                                  <table class="table table-bordered">
                                                    <thead>
                                                      <tr>
                                                        <th class="text-center">1</th>
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
                                                        <th class="text-center">2</th>
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
                                                        <th class="text-center">3</th>
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
                                                        <th class="text-center">4</th>
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
                                                        <th class="text-center">5</th>
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
                                              <input type="number" class="form-control" id="situacion_vivienda" name="situacion_vivienda" onchange="situacion()" min="1" max="5" value="1" />
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card-header" id="headiuno">
                                        <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#valosocd5"
                                        aria-expanded="false" aria-controls="valosocd5">
                                          Relaciones Sociales
                                        </button>
                                      </div>
                                      <div class="collapse" id="valosocd5" aria-labelledby="headiuno" data-parent="#separa4">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="form-group col-md-11">
                                              <div class="row">
                                                <div class="col-md-2">
                                                  <table class="table table-bordered">
                                                    <thead>
                                                      <tr>
                                                        <th class="text-center">1</th>
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
                                                        <th class="text-center">2</th>
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
                                                        <th class="text-center">3</th>
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
                                                        <th class="text-center">4</th>
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
                                                        <th class="text-center">5</th>
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
                                              <input type="number" class="form-control" id="situacion_relaciones" name="situacion_relaciones" onchange="situacion()" min="1" max="5" value="1" />
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card-header" id="headiuno">
                                        <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#valosocd6"
                                        aria-expanded="false" aria-controls="valosocd6">
                                          Apoyo de la red Social
                                        </button>
                                      </div>
                                      <div class="collapse" id="valosocd6" aria-labelledby="headiuno" data-parent="#separa4">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="form-group col-md-11">
                                              <div class="row">
                                                <div class="col-md-2">
                                                  <table class="table table-bordered">
                                                    <thead>
                                                      <tr>
                                                        <th class="text-center">1</th>
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
                                                        <th class="text-center">2</th>
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
                                                        <th class="text-center">3</th>
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
                                                        <th class="text-center">4</th>
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
                                                        <th class="text-center">5</th>
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
                                              <input type="number" class="form-control" id="situacion_apoyo" name="situacion_apoyo" onchange="situacion()" min="1" max="5" value="1" />
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
                                      <input type="text" class="form-control" id="situacion_total" name="situacion_total" readonly="" />
                                    </div>
                                  </div>
                                  <div class="form-group col-md-12  dropdown-divider"></div>
                                  <div class="row">
                                    <div class="col-md-8 text-center" id="btngsociofamiliar">
                                      <button type="button" id="btngdsociofamiliar" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarsociofamiliar">GUARDAR</button>
                                      <input type="text" class="form-control" id="numhc2" name="numhc2" style="display:none" />
                                      <input type="text" class="form-control" id="fechai2" name="fechai2" style="display:none">
                                    </div>
                                    <div class="col-md-8 text-center" id="btnasociofamiliar" style="display:none">
                                      <button type="button" id="btngdsociofamiliar2" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarsociofamiliar2">ACTUALIZAR</button>
                                    </div>
                                    <div class="col-md-4">
                                      <div id="box">
                                        <div id="box-time2" style="display:none"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                  <button class="btn btn-primary" type="button" onclick="siguientepaginae2()">Siguiente</button>
                                  <input type="text" value="1" id="pagina2" class="form-control" style="display:none" />
                                </li>
                                <li class="nav-item">
                                  <a href=""></a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link active bg-danger" id="subopd1" href="#opd1" data-toggle="collapse" data-target="#opd1" aria-expanded="false" aria-controls="opd1" onclick="doynumeropaginae2('1')">1</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link bg-white" id="subopd2" href="#opd2" data-toggle="collapse" data-target="#opd2" aria-expanded="false" aria-controls="opd2" onclick="doynumeropaginae2('2')">2</a>
                                </li>
                                <li class="nav-item">
                                  <button class="btn btn-primary" type="button" onclick="atraspaginae2()">Atras</button>
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
                            <input type="text" id="nombres" id="nombres" class="form-control" onkeyup="solopac3()" />
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
                  </div>
                </div>
            </div>
          </div>
          <div class="modal" id="confirme" tabindex="-1" role="dialog">
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
                    <button type="button" class="btn btn-danger" onclick="inhistoriapad_enf()"> Si </button>
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
                    <button type="button" class="btn btn-danger" onclick="acthistoriapad_enf()"> Si </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal" id="confirmarsociofamiliar" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                <div class="modal-body">
                  <h5 class="text">Estas Seguro de Guardar V. Socio Familiar</h5>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="inhistoriasocio_enf()"> Si </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal" id="confirmarsociofamiliar2" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                <div class="modal-body">
                  <h5 class="text">Estas Seguro de Actualizar V. Socio Familiar</h5>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="acthistoriasocio_enf()"> Si </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal" id="confirmarescalacarga" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                <div class="modal-body">
                  <h5 class="text">Estas Seguro de Guardar Escala de Carga Cuidador</h5>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="inhistoriaescala_enf()"> Si </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal" id="confirmarescalacarga2" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                <div class="modal-body">
                  <h5 class="text">Estas Seguro de Actualizar Escala de Carga Cuidador</h5>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="acthistoriaescala_enf()"> Si </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal" id="confirmarintervencion" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                <div class="modal-body">
                  <h5 class="text">Estas Seguro de Guardar Intervencion</h5>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="inhistoriaintervencion_enf()"> Si </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal" id="confirmarintervencion2" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                <div class="modal-body">
                  <h5 class="text">Estas Seguro de Actualizar Intervencion</h5>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="acthistoriaintervencion_enf()"> Si </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                  </div>
                </div>
              </div>
          </div>
          <div id="content"></div>
    </div>
    </div>
    </div>
    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
      function formatTime(n) {
        return (n < 10) ? "0" + n : n;
      }
      function checkTime() {
        var today = new Date(),
      
            day = ["Dom","Lun", "Mar", "Mie", "Jue", "Vie", "Sáb"],
            month = ["Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic"],
        
            h = formatTime(today.getHours()),
            min = formatTime(today.getMinutes()),
            seg = formatTime(today.getSeconds()),
            hour = h,
            w = "a.m.";
       
        if (hour >= 12) {
          hour = formatTime(hour - 12);
          w = "p.m.";
        };
      
        if (hour == 0) {
          hour = 12;
        };
       
        document.getElementById("box-time").innerHTML="<span class='hm-time'>" + hour + ":" + min + "</span> <span class='s-time'>" + seg + "</span> <span class='f-time'>" + w + "</span>";
        document.getElementById("box-time2").innerHTML="<span class='hm-time'>" + hour + ":" + min + "</span> <span class='s-time'>" + seg + "</span> <span class='f-time'>" + w + "</span>";
        document.getElementById("box-time3").innerHTML="<span class='hm-time'>" + hour + ":" + min + "</span> <span class='s-time'>" + seg + "</span> <span class='f-time'>" + w + "</span>";
        document.getElementById("box-time4").innerHTML="<span class='hm-time'>" + hour + ":" + min + "</span> <span class='s-time'>" + seg + "</span> <span class='f-time'>" + w + "</span>";      
        var d = setTimeout(function() {
          checkTime()
        }, 500);
      }
      checkTime();
    </script>