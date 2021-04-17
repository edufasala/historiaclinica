    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Consultar Historia Enf</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Consultar</a></li>
              <li class="breadcrumb-item active">Consultar Historia Enf</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="wrapper">
    <div class="col-12">
    <div class="card">
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
                    <option selected value="0">Elige</option>
                    <!-- <option value="agudo salud en casa">Agudo salud en casa</option>
                    <option value="cronico sin enfermeria">Cronico sin enfermeria</option>
                    <option value="Paleativo">Paliativo</option> -->
                  </select>
                </div>

                <div class="form-group col-md-12">
                  <div class="card-header">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="nav-item">
                          <a class="nav-link active bg-white" id="uno" href="#multi1" data-toggle="collapse" data-target="#multi1" aria-expanded="false" aria-controls="multi1" onclick="pasar('1')"><font size="5">HISTORIA DE ENFERMERIA</font></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link bg-primaryhc text-uppercase text-white" id="dos" href="#multi2" data-toggle="collapse" data-target="#multi2" aria-expanded="false" aria-controls="multi2" onclick="pasar('2')"><font size="5">V. Sociofamiliar</font></a>
                        </li>
                         <li class="nav-item">
                          <a class="nav-link bg-primaryhc text-uppercase text-white" id="tres" href="#multi3" data-toggle="collapse" data-target="#multi3" aria-expanded="false" aria-controls="multi3" onclick="pasar('3')"><font size="5">Escala de Carga</font></a>
                        </li>
                         <li class="nav-item">
                          <a class="nav-link bg-primaryhc text-uppercase text-white" id="cua" href="#multi4" data-toggle="collapse" data-target="#multi4" aria-expanded="false" aria-controls="multi4" onclick="pasar('4')"><font size="5">Intervencion</font></a>
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
                                            Diagnostico, Antecedentes y Valoracion Subjectiva
                                          </button>
                                        </div>
                                        <div class="collapse" id="enfpad1" aria-labelledby="headiuno" data-parent="#separa1">
                                          <div class="card-body">
                                            <div class="row">
                                              <div class="form-group col-md-12">
                                                <label class="col-form-label"><strong>Diagnosticos:</strong></label>
                                                <textarea class="form-control" id="mdiagnosticos" name="mdiagnosticos" readonly=""></textarea>
                                              </div>
                                              <div class="form-group col-md-12">
                                                <label for="nota" class="col-form-label"><strong>Antecedentes:</strong></label>
                                                <textarea class="form-control" id="antecedentes" name="antecedentes" onkeypress="" required></textarea>
                                              </div>
                                              <div class="form-group col-md-12">
                                                <label for="nota" class="col-form-label"><strong>Valoracion Subjetiva estado general:</strong></label>
                                                <textarea class="form-control" id="valoracionsubjetiva" name="valoracionsubjetiva" onkeypress="" required></textarea>
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
                                                <label class="col-form-label"><strong>Frecuencia Cardiaca</strong></label>
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
                                                <!-- <label class="col-form-label"><strong>Sistole</strong></label>  
                                                <input type="text" class="form-control" placeholder="" id="sisenf" onkeyup="sumartensionarterialenf();" minlength="1" maxlength="6" pattern="\S[A-Za-z0-9 ]{1,6}" required />
                                                <label class="col-form-label"><strong>Diastole</strong></label>
                                                <input type="text" class="form-control" placeholder="" id="diasenf" onkeyup="sumartensionarterialenf();" minlength="1" maxlength="6" pattern="\S[A-Za-z0-9 ]{1,6}" required /> -->
                                                <label class="col-form-label"><strong>TENSION ARTERIAL MEDIA:</strong></label>
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
                                                <label class="col-form-label"><strong>Saturacion</strong></label>
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
                                            Dominio 1: Promocion de la Salud
                                          </button>
                                        </div>
                                        <div class="collapse" id="enfpad33" aria-labelledby="headiuno" data-parent="#separa1">
                                          <div class="card-body">
                                            <div class="row">
                                              <div class="form-group col-md-12">
                                                <label for="nota" class="col-form-label"><strong>¿Que sabe usted sobre su enfermedad?:</strong></label>
                                                <input type="text" class="form-control" placeholder="" id="dom1p1" name="dom1p1" required />
                                              </div>
                                              <div class="form-group col-md-12">
                                                <label for="nota" class="col-form-label"><strong>¿Necesita mayor informacion sobre su enfermeda?:</strong></label>
                                                <input type="text" class="form-control" placeholder="" id="dom1p2" name="dom1p2" required />
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card-header" id="headiuno">
                                          <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpad3"
                                          aria-expanded="false" aria-controls="enfpad3">
                                            Dominio 2: Nutricion
                                          </button>
                                        </div>
                                        <div class="collapse" id="enfpad3" aria-labelledby="headiuno" data-parent="#separa1">
                                          <div class="card-body">
                                            <div class="row">
                                              <div class="form-group col-md-12">
                                                <label class="col-form-label"><strong>Alimentacion</strong></label>
                                                <div class="row">
                                                  <div class="col-md-3">
                                                    <!--  <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="d2nutricion" id="d2nutricion1" onclick="" value="No Selecciona">
                                                        <label class="form-check-label">No Selecciona</label>
                                                      </div> -->
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="d2nutricion" id="d2nutricion2" onclick=""  value="Dieta" >
                                                        <label class="form-check-label">Dieta</label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="d2nutricion" id="d2nutricion3" onclick=""  value="SNG">
                                                        <label class="form-check-label">SNG</label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="d2nutricion" id="d2nutricion4" onclick=""  value="SOG" >
                                                        <label class="form-check-label">SOG</label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="d2nutricion" id="d2nutricion5" onclick="" value="SNY">
                                                        <label class="form-check-label">SNY</label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="d2nutricion" id="d2nutricion1" value="NPT">
                                                        <label class="form-check-label">NPT</label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="d2nutricion" id="d2nutricion6" value="Gastrostomia">
                                                        <label class="form-check-label">Gastrostomia</label>
                                                      </div>
                                                      <div class="form-group">
                                                        <label class="col-form-label">Otros</label>
                                                        <input type="text" class="form-control" id="dom2otro" name="dom2otro" placeholeder="activo" />
                                                        <input type="text" class="form-control" id="dom2nutricion" name="dom2nutricion" style="display:none" />
                                                      </div>
                                                  </div>
                                                   <div class="col-md-3">
                                                    <label class="form-check-label text-uppercase"><strong>Mucosa oral:</strong> </label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2mucosa" id="d2mucosa4" onclick=""  value="No aplica" >
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2mucosa" id="d2mucosa1" onclick=""  value="Intacta" >
                                                      <label class="form-check-label">Intacta</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2mucosa" id="d2mucosa2" onclick=""  value="Lesiones">
                                                      <label class="form-check-label">Lesiones</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2mucosa" id="d2mucosa3" onclick=""  value="Dificulta para diglutir" >
                                                      <label class="form-check-label">Dificulta para diglutir</label>
                                                      <input type="text" class="form-control" id="dom2mucosa" name="dom2mucosa" style="display:none" />
                                                    </div> 
                                                    <label class="form-check-label text-uppercase"><strong>Dentadura:</strong></label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2dentadura" id="d2dentadura4" onclick=""  value="No aplica" >
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2dentadura" id="d2dentadura1" onclick=""  value="completa" >
                                                      <label class="form-check-label">Completa</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2dentadura" id="d2dentadura2" onclick=""  value="incompleta">
                                                      <label class="form-check-label">Incompleta</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2dentadura" id="d2dentadura3" onclick=""  value="protesis" >
                                                      <label class="form-check-label">Protesis</label>
                                                      <input type="text" class="form-control" id="dom2dentadura" name="dom2dentadura" style="display:none" />
                                                    </div>                                           
                                                  </div>
                                                  <div class="col-md-3">
                                                    <label class="form-check-label text-uppercase"><strong>Piel:</strong> </label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2piel" id="d2piel3" onclick=""  value="No aplica" >
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2piel" id="d2piel1" onclick=""  value="normal" >
                                                      <label class="form-check-label">Normal</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2piel" id="d2piel2" onclick=""  value="palida">
                                                      <label class="form-check-label">Palida</label>
                                                      <input type="text" class="form-control" id="dom2piel" name="dom2piel" style="display:none" />
                                                    </div>
                                                    <label class="form-check-label text-uppercase"><strong>Hidratacion:</strong> </label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2hidratacion" id="d2hidratacion3" onclick=""  value="No aplica" >
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2hidratacion" id="d2hidratacion1" onclick=""  value="turgente" >
                                                      <label class="form-check-label">Turgente</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2hidratacion" id="d2hidratacion2" onclick=""  value="seca">
                                                      <label class="form-check-label">Seca</label>
                                                      <input type="text" class="form-control" id="dom2hidratacion" name="dom2hidratacion" style="display:none" />
                                                    </div>
                                                  </div>
                                                  <div class="col-md-3">
                                                    <label class="form-check-label text-uppercase"><strong>Adomen:</strong> </label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2adobmen" id="d2adobmen5" onclick=""  value="No aplica" >
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2adobmen" id="d2adobmen1" onclick=""  value="blando" >
                                                      <label class="form-check-label">Blando</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2adobmen" id="d2adobmen2" onclick=""  value="distendido">
                                                      <label class="form-check-label">Distendido</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2adobmen" id="d2adobmen3" onclick=""  value="doloroso" >
                                                      <label class="form-check-label">Doloroso</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2adobmen" id="d2adobmen4" onclick=""  value="valonado">
                                                      <label class="form-check-label">Valonado</label>
                                                      <input type="text" class="form-control" id="dom2adobmen" name="dom2adobmen" style="display:none" />
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-3">
                                                    <label class="form-check-label text-uppercase"><strong>Rsls:</strong> </label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2rsls" id="d2rsls5" onclick=""  value="No aplica" >
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2rsls" id="d2rsls1" onclick=""  value="normales" >
                                                      <label class="form-check-label">Normales</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2rsls" id="d2rsls2" onclick=""  value="aumentado">
                                                      <label class="form-check-label">Aumentado</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2rsls" id="d2rsls3" onclick=""  value="disminuidos" >
                                                      <label class="form-check-label">Disminuidos</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d2rsls" id="d2rsls4" onclick=""  value="ausentes">
                                                      <label class="form-check-label">Ausentes</label>
                                                      <input type="text" class="form-control" id="dom2rsls" name="dom2rsls" style="display:none" />
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-4">
                                                    <label class="form-check-label text-uppercase"><strong>SNG:</strong> </label>
                                                    <div class="form-check">
                                                      <label class="form-check-label">Residuo Gastrico</label>
                                                      <input type="text" class="form-control" id="d2sng" name="d2sng" >
                                                    </div>
                                                  </div>
                                                  <div class="col-md-4">
                                                    <label class="col-form-label"><strong>Drenaje:</strong></label>
                                                    <div class="row">
                                                      <div class="form-group col-md-4">
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d2drenaje" id="d2drenaje1" onclick="" onchange="" value="si">
                                                          <label class="form-check-label">SI</label>
                                                        </div>
                                                      </div>
                                                      <div class="form-group col-md-4">
                                                       <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d2drenaje" id="d2drenaje2" onclick="" onchange="" value="no">
                                                          <label class="form-check-label">NO</label>
                                                          <input type="text" class="form-control" id="dom2drenaje" name="dom2drenaje" style="display:none" />
                                                        </div>
                                                      </div> 
                                                      <div class="col-md-12">
                                                        <div class="form-check">
                                                          <label class="form-check-label">Observaciones</label>
                                                          <input type="text" class="form-control" id="d2caracteristicas" name="d2caracteristicas" >
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
                                          <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#enfpad4"
                                          aria-expanded="false" aria-controls="enfpad4">
                                            Dominio 3: Eliminacion
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
                                                      <input class="form-check-input" type="radio" name="d3deposiciones" id="d3deposiciones6" onclick=""  value="No aplica" >
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d3deposiciones" id="d3deposiciones1" onclick=""  value="normal" >
                                                      <label class="form-check-label">Normal</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d3deposiciones" id="d3deposiciones2" onclick=""  value="estreñimiento">
                                                      <label class="form-check-label">Estreñimiento</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d3deposiciones" id="d3deposiciones3" onclick=""  value="diarrea" >
                                                      <label class="form-check-label">Diarrea</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d3deposiciones" id="d3deposiciones4" onclick=""  value="melena">
                                                      <label class="form-check-label">Melena</label>
                                                    </div> 
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d3deposiciones" id="d3deposiciones5" onclick=""  value="hematoquecia">
                                                      <label class="form-check-label">Hematoquecia</label>
                                                      <input type="text" class="form-control" id="dom3deposiciones" name="dom3deposiciones" style="display:none" />
                                                    </div>
                                                    <div class="form-group">
                                                      <label class="form-check-label "><strong>Observaciones</strong> </label>
                                                      <input type="text" class="form-control" id="dom3tipo" name="dom3tipo">
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-4">
                                                    <label class="form-check-label"><strong>Vomito</strong></label>
                                                    <div class="row">
                                                       <div class="form-group col-md-4">
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d3vomito" id="d3vomito1" onclick="" onchange="" value="si">
                                                          <label class="form-check-label">Si</label>
                                                        </div>
                                                      </div>
                                                      <div class="form-group col-md-4">
                                                       <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="d3vomito" id="d3vomito2" onclick="" onchange="" value="no">
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
                                                      <label class="col-form-label"><strong>Colostomia:</strong></label>
                                                      <div class="row">
                                                         <div class="form-group col-md-4">
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d3colostomia" id="d3colostomia1" onclick="" onchange="" value="si">
                                                            <label class="form-check-label">Si</label>
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                         <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d3colostomia" id="d3colostomia2" onclick="" onchange="" value="no">
                                                            <label class="form-check-label">No</label>
                                                            <input type="text" class="form-control" id="dom3colostomia" name="dom3colostomia" style="display:none" />
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
                                                      <input class="form-check-input" type="radio" name="d3oresis" id="d3oresis1" onclick=""  value="expontanea" >
                                                      <label class="form-check-label">Expontanea</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d3oresis" id="d3oresis2" onclick=""  value="retencion">
                                                      <label class="form-check-label">Retencion</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d3oresis" id="d3oresis3" onclick=""  value="incontinencia" >
                                                      <label class="form-check-label">Incontinencia</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d3oresis" id="d3oresis4" onclick=""  value="cateter urinario">
                                                      <label class="form-check-label">Cateter urinario</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d3oresis" id="d3oresis5" onclick=""  value="poliuria">
                                                      <label class="form-check-label">Poliuria</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d3oresis" id="d3oresis6" onclick=""  value="oliguria">
                                                      <label class="form-check-label">Oliguria</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d3oresis" id="d3oresis7" onclick=""  value="anuria">
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
                                                      <input class="form-check-input" type="radio" name="d4dependencia" id="d4dependencia5" onclick=""  value="No aplica" >
                                                      <label class="form-check-label">No aplica</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4dependencia" id="d4dependencia1" onclick=""  value="I" >
                                                      <label class="form-check-label">I</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4dependencia" id="d4dependencia2" onclick=""  value="II">
                                                      <label class="form-check-label">II</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4dependencia" id="d4dependencia3" onclick=""  value="III" >
                                                      <label class="form-check-label">III</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4dependencia" id="d4dependencia4" onclick=""  value="IV">
                                                      <label class="form-check-label">IV</label>
                                                      <input type="text" class="form-control" id="dom4dependencia" name="dom4dependencia" style="display:none" />
                                                    </div> 
                                                  </div>
                                                   <div class="col-md-4">
                                                    <label class="form-check-label text-uppercase"><strong>Sueño:</strong></label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4sueno" id="d4sueno4" onclick=""  value="No aplica" >
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4sueno" id="d4sueno1" onclick=""  value="completo" >
                                                      <label class="form-check-label">Completo</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4sueno" id="d4sueno2" onclick=""  value="parcial">
                                                      <label class="form-check-label">Parcial</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4sueno" id="d4sueno3" onclick=""  value="insommio" >
                                                      <label class="form-check-label">Insommio</label>
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
                                                      <input class="form-check-input" type="radio" name="d4fiebre" id="d4fiebre1" onclick=""  value="si" >
                                                      <label class="form-check-label">Si</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4fiebre" id="d4fiebre2" onclick=""  value="no">
                                                      <label class="form-check-label">No</label>
                                                    </div>
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
                                                      <input class="form-check-input" type="radio" name="d4movilidad" id="d4movilidad6" onclick=""  value="No aplica" >
                                                      <label class="form-check-label">No aplica</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4movilidad" id="d4movilidad1" onclick=""  value="hemiplejia" >
                                                      <label class="form-check-label">Hemiplejia</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4movilidad" id="d4movilidad2" onclick=""  value="hemiparexia">
                                                      <label class="form-check-label">Hemiparexia</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4movilidad" id="d4movilidad3" onclick=""  value="cuadriplejia">
                                                      <label class="form-check-label">Cuadriplejia</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4movilidad" id="d4movilidad4" onclick=""  value="fracturas">
                                                      <label class="form-check-label">Fracturas</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4movilidad" id="d4movilidad7" onclick=""  value="apoyos externos">
                                                      <label class="form-check-label">Apoyos externos</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4movilidad" id="d4movilidad5" onclick=""  value="aparatos externos">
                                                      <label class="form-check-label">Aparatos externos</label>
                                                    </div>
                                                    <div class="form-group">
                                                      <label class="col-form-label">Observaciones</label>
                                                      <input type="text" class="form-control" id="d4movilidadetalle" name="d4movilidadetalle">
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
                                                      <input class="form-check-input" type="radio" name="d4muscular" id="d4muscular1" onclick=""  value="conservada" >
                                                      <label class="form-check-label">Conservada</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4muscular" id="d4muscular2" onclick=""  value="disminuida">
                                                      <label class="form-check-label">Disminuida</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4muscular" id="d4muscular3" onclick=""  value="flacidez">
                                                      <label class="form-check-label">Flacidez</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4muscular" id="d4muscular4" onclick=""  value="contractura">
                                                      <label class="form-check-label">Contractura</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4muscular" id="d4muscular5" onclick=""  value="paralisis">
                                                      <label class="form-check-label">Paralisis</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4muscular" id="d4muscular6" onclick=""  value="herida quirurgica">
                                                      <label class="form-check-label">Herida quirurgica</label>
                                                    </div><br><br>
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
                                                      <input class="form-check-input" type="radio" name="d4respiratorias" id="d4respiratorias6" onclick=""  value="No aplica" >
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4respiratorias" id="d4respiratorias1" onclick=""  value="regular" >
                                                      <label class="form-check-label">Regular</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4respiratorias" id="d4respiratorias2" onclick=""  value="irregular">
                                                      <label class="form-check-label">Irregular</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4respiratorias" id="d4respiratorias3" onclick=""  value="cianosis">
                                                      <label class="form-check-label">Cianosis</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4respiratorias" id="d4respiratorias4" onclick=""  value="hipertencion arterial">
                                                      <label class="form-check-label">Hipertencion arterial</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4respiratorias" id="d4respiratorias5" onclick=""  value="hipotencion arterial">
                                                      <label class="form-check-label">Hipotencion arterial</label>
                                                    </div>
                                                    <div class="form-group"><br>
                                                      <label class="form-check-label"><strong>LLenado Capillar</strong></label>
                                                      <input type="text" class="form-control" id="d4capilar" name="d4capilar" >
                                                      <input type="text" class="form-control" id="dom4respiratorias" name="dom4respiratorias" style="display:none" />
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
                                                      <input class="form-check-input" type="radio" name="d4pulso" id="d4pulso1" onclick=""  value="normal" >
                                                      <label class="form-check-label">Normal</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4pulso" id="d4pulso2" onclick=""  value="disminuido">
                                                      <label class="form-check-label">Disminuido</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4pulso" id="d4pulso3" onclick=""  value="cuadriplejia">
                                                      <label class="form-check-label">Cuadriplejia</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4pulso" id="d4pulso4" onclick=""  value="ausente">
                                                      <label class="form-check-label">Ausente</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4pulso" id="d4pulso5" onclick=""  value="marcapaso">
                                                      <label class="form-check-label">Marcapaso</label>
                                                    </div>
                                                    <div class="form-group"><br><br>
                                                      <label class="form-check-label"><strong>Fecha implantacion</strong></label>
                                                      <input type="text" class="form-control" id="d4pulsofecha" name="d4pulsofecha">
                                                      <input type="text" class="form-control" id="dom4pulso" name="dom4pulso" style="display:none" />
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-4">
                                                    <label class="form-check-label"><strong>FR:</strong></label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4fr" id="d4fr8" onclick=""  value="No aplica" >
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4fr" id="d4fr1" onclick=""  value="normal" >
                                                      <label class="form-check-label">Normal</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4fr" id="d4fr2" onclick=""  value="superfacial">
                                                      <label class="form-check-label">Superfacial</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4fr" id="d4fr3" onclick=""  value="regular">
                                                      <label class="form-check-label">Regular</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4fr" id="d4fr4" onclick=""  value="irregular">
                                                      <label class="form-check-label">Irregular</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4fr" id="d4fr5" onclick=""  value="disnea en reposo">
                                                      <label class="form-check-label">Disnea en reposo</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4fr" id="d4fr6" onclick=""  value="disnea en ejercicio">
                                                      <label class="form-check-label">Disnea en ejercicio</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4fr" id="d4fr7" onclick=""  value="drenajes">
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
                                                      <input class="form-check-input" type="radio" name="d4ruidos" id="d4ruidos9" onclick=""  value="No aplica" >
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4ruidos" id="d4ruidos1" onclick=""  value="disminuidos" >
                                                      <label class="form-check-label">Disminuidos</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4ruidos" id="d4ruidos2" onclick=""  value="sibilancias">
                                                      <label class="form-check-label">Sibilancias</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4ruidos" id="d4ruidos3" onclick=""  value="estertores">
                                                      <label class="form-check-label">Estertores</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4ruidos" id="d4ruidos4" onclick=""  value="roncus">
                                                      <label class="form-check-label">Roncus</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4ruidos" id="d4ruidos5" onclick=""  value="estridor">
                                                      <label class="form-check-label">Estridor</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4ruidos" id="d4ruidos6" onclick=""  value="timpanicos">
                                                      <label class="form-check-label">Timpanicos</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4ruidos" id="d4ruidos7" onclick=""  value="opacos">
                                                      <label class="form-check-label">Opacos</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4ruidos" id="d4ruidos8" onclick=""  value="simetricos">
                                                      <label class="form-check-label">Simetricos</label>
                                                      <input type="text" class="form-control" id="dom4ruidos" name="dom4ruidos" style="display:none" />
                                                    </div> 
                                                  </div>
                                                  <div class="form-group col-md-12  dropdown-divider"></div>
                                                  <div class="col-md-3">
                                                    <label class="form-check-label text-uppercase"><strong>Tos:</strong></label>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4tos" id="d4tos1" onclick=""  value="si" >
                                                      <label class="form-check-label">si</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4tos" id="d4tos2" onclick=""  value="no">
                                                      <label class="form-check-label">no</label>
                                                    </div>
                                                    <div class="form-group">
                                                      <label class="col-form-label"><strong>Observaciones</strong> </label>
                                                      <input type="text" class="form-control" id="d4tostipo" name="d4tostipo">
                                                      <input type="text" class="form-control" id="dom4tos" name="dom4tos" style="display:none" />
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-3">
                                                    <label class="form-check-label text-uppercase"><strong>Oxigenoterapia:</strong></label>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4oxigeno" id="d4oxigeno1" onclick=""  value="si" >
                                                      <label class="form-check-label">si</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="d4oxigeno" id="d4oxigeno2" onclick=""  value="no">
                                                      <label class="form-check-label">no</label>
                                                    </div>
                                                    <div class="form-group">
                                                      <label class="col-form-label"><strong>Observaciones</strong></label>
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
                                                  <div class="col-md-3">
                                                    <div class="form-check">
                                                      <!-- <input class="form-check-input" type="radio" name="d4traqueostomia"  onclick=""  value="traqueostomia"> -->
                                                      <label class="col-form-label">Traqueostomia</label>
                                                      <div class="row">
                                                         <div class="form-group col-md-4">
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4traqueostomia" id="d4traqueostomia1" onclick="" onchange="" value="si">
                                                            <label class="form-check-label">Si</label>
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                         <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="d4traqueostomia" id="d4traqueostomia2" onclick="" onchange="" value="no">
                                                            <label class="form-check-label">No</label>
                                                            <!-- <input type="text" class="form-control" id="dom4traqueostomia" name="dom4traqueostomia" style="display:none" /> -->
                                                          </div>
                                                        </div>                                                       
                                                      </div>
                                                      <input type="text" class="form-control" id="dom4traqueostomia" name="dom4traqueostomia" style="display:none" />
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
                                            Dominio 5: Percepcion Cognicion
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
                                                    <input class="form-check-input" type="radio" name="d5escala" id="d5escala7" onclick=""  value="No aplica" >
                                                    <label class="form-check-label">No aplica</label>
                                                  </div> -->
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5escala" id="d5escala1" onclick=""  value="puntaje" >
                                                    <label class="form-check-label">Puntaje</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5escala" id="d5escala2" onclick=""  value="conciente">
                                                    <label class="form-check-label">Conciente</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5escala" id="d5escala3" onclick=""  value="alerta" >
                                                    <label class="form-check-label">Alerta</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5escala" id="d5escala4" onclick=""  value="orientado tiempo">
                                                    <label class="form-check-label">Orientado tiempo</label>
                                                  </div> 
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5escala" id="d5escala5" onclick=""  value="orientado espacio">
                                                    <label class="form-check-label">Orientado espacio</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5escala" id="d5escala6" onclick=""  value="orienrado personal" >
                                                    <label class="form-check-label">Orienrado personal</label>
                                                    <input type="text" class="form-control" id="dom5escala" name="dom5escala" style="display:none" />
                                                  </div>
                                                  <div class="form-group">
                                                    <label class="col-form-label"><strong>Observaciones</strong></label>
                                                    <input type="text" class="form-control" id="dgasglowotro" name="dgasglowotro" >
                                                  </div>
                                                </div>
                                                <div class="col-md-4">
                                                  <label class="form-check-label text-uppercase"><strong>Estado de conciencia</strong></label>
                                                  <!-- <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5conciencia" id="d5conciencia6" onclick=""  value="No aplica">
                                                    <label class="form-check-label">No aplica</label>
                                                  </div> -->
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5conciencia" id="d5conciencia1" onclick=""  value="despierto">
                                                    <label class="form-check-label">Despierto</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5conciencia" id="d5conciencia2" onclick=""  value="confuso">
                                                    <label class="form-check-label">Confuso</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5conciencia" id="d5conciencia3" onclick=""  value="somnoliento">
                                                    <label class="form-check-label">Somnoliento</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5conciencia" id="d5conciencia4" onclick=""  value="estuporoso">
                                                    <label class="form-check-label">Estuporoso</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5conciencia" id="d5conciencia5" onclick=""  value="comotoso">
                                                    <label class="form-check-label">Comotoso</label>
                                                  </div>
                                                  <div class="form-group"><br>
                                                    <label class="col-form-label"><strong>Observaciones</strong></label>
                                                    <input type="text" class="form-control" id="dconcienciaotro" name="dconcienciaotro" >
                                                    <input type="text" class="form-control" id="dom5conciencia" name="dom5conciencia" style="display:none" />
                                                  </div> 
                                                </div>
                                                <div class="col-md-4">
                                                  <label class="form-check-label text-uppercase"><strong>Comunicacion</strong></label>
                                                  <!-- <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5comunicacion" id="d5comunicacion8" onclick=""  value="No aplica">
                                                    <label class="form-check-label">No aplica</label>
                                                  </div> -->
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5comunicacion" id="d5comunicacion1" onclick=""  value="verbal">
                                                    <label class="form-check-label">Verbal</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5comunicacion" id="d5comunicacion2" onclick=""  value="gestual">
                                                    <label class="form-check-label">Gestual</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5comunicacion" id="d5comunicacion3" onclick=""  value="gutural">
                                                    <label class="form-check-label">Gutural</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5comunicacion" id="d5comunicacion4" onclick=""  value="escrita">
                                                    <label class="form-check-label">Escrita</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5comunicacion" id="d5comunicacion5" onclick=""  value="otro idioma">
                                                    <label class="form-check-label">Otro idioma</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5comunicacion" id="d5comunicacion6" onclick=""  value="señas">
                                                    <label class="form-check-label">Señas</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d5comunicacion" id="d5comunicacion7" onclick=""  value="ninguna">
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
                                            Dominio 6: Autopercepcion
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
                                                    <input class="form-check-input" type="radio" name="d6emocional" id="d6emocional9" onclick=""  value="No aplica" >
                                                    <label class="form-check-label">No aplica</label>
                                                  </div> -->
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d6emocional" id="d6emocional1" onclick=""  value="tranquilo" >
                                                    <label class="form-check-label">Tranquilo</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d6emocional" id="d6emocional2" onclick=""  value="ansioso">
                                                    <label class="form-check-label">Ansioso</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d6emocional" id="d6emocional3" onclick=""  value="negativo" >
                                                    <label class="form-check-label">Negativo</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d6emocional" id="d6emocional4" onclick=""  value="temeroso">
                                                    <label class="form-check-label">Temeroso</label>
                                                  </div> 
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d6emocional" id="d6emocional5" onclick=""  value="irritable">
                                                    <label class="form-check-label">Irritable</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d6emocional" id="d6emocional6" onclick=""  value="indiferente" >
                                                    <label class="form-check-label">Indiferente</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d6emocional" id="d6emocional7" onclick=""  value="efectos de sedacion">
                                                    <label class="form-check-label">Efectos de sedacion</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d6emocional" id="d6emocional8" onclick=""  value="no responde">
                                                    <label class="form-check-label">No responde</label>
                                                    <input type="text" class="form-control" id="dom6emocional" name="dom6emocional" style="display:none" />
                                                  </div>
                                                </div>
                                                <div class="col-md-3">
                                                  <label class="form-check-label text-uppercase"><strong>Lenguaje</strong></label>
                                                  <!-- <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d6lenguaje" id="d6lenguaje6" onclick=""  value="No aplica">
                                                    <label class="form-check-label">No aplica</label>
                                                  </div> -->
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d6lenguaje" id="d6lenguaje1" onclick=""  value="normal">
                                                    <label class="form-check-label">Normal</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d6lenguaje" id="d6lenguaje2" onclick=""  value="titubeante">
                                                    <label class="form-check-label">Titubeante</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d6lenguaje" id="d6lenguaje3" onclick=""  value="confuso">
                                                    <label class="form-check-label">Confuso</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d6lenguaje" id="d6lenguaje4" onclick=""  value="afisia expresiva">
                                                    <label class="form-check-label">Afisia expresiva</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d6lenguaje" id="d6lenguaje5" onclick=""  value="mal relator">
                                                    <label class="form-check-label">Mal relator</label>
                                                    <input type="text" class="form-control" id="dom6lenguaje" name="dom6lenguaje" style="display:none" />
                                                  </div>
                                                </div>
                                                <div class="col-md-3">
                                                  <label class="form-check-label text-uppercase"><strong>Escucha</strong></label>
                                                  <!-- <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d6escucha" id="d6escucha6" onclick=""  value="No aplica">
                                                    <label class="form-check-label">No aplica</label>
                                                  </div> -->
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d6escucha" id="d6escucha1" onclick=""  value="normal">
                                                    <label class="form-check-label">Normal</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d6escucha" id="d6escucha2" onclick=""  value="hipoacustica derecha">
                                                    <label class="form-check-label">Hipoacustica derecha</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d6escucha" id="d6escucha3" onclick=""  value="hipoacustica izquierda">
                                                    <label class="form-check-label">Hipoacustica izquierda</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d6escucha" id="d6escucha4" onclick=""  value="sordera derecha">
                                                    <label class="form-check-label">Sordera derecha</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d6escucha" id="d6escucha5" onclick=""  value="sordera izquierda">
                                                    <label class="form-check-label">Sordera izquierda</label>
                                                    <input type="text" class="form-control" id="dom6escucha" name="dom6escucha" style="display:none" />
                                                  </div>
                                                </div>
                                                <div class="col-md-3">
                                                  <label class="form-check-label text-uppercase"><strong>Vision</strong></label>
                                                  <!-- <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d6vision" id="d6vision6" onclick=""  value="No aplica">
                                                    <label class="form-check-label">No aplica</label>
                                                  </div> -->
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d6vision" id="d6vision1" onclick=""  value="normal">
                                                    <label class="form-check-label">Normal</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d6vision" id="d6vision2" onclick=""  value="lesion ocular derecha">
                                                    <label class="form-check-label">Lesion ocular derecha</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d6vision" id="d6vision3" onclick=""  value="lesion ocular izquierda">
                                                    <label class="form-check-label">Lesion ocular izquierda</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d6vision" id="d6vision4" onclick=""  value="ceguera derecha">
                                                    <label class="form-check-label">Ceguera derecha</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d6vision" id="d6vision5" onclick=""  value="ceguera izquierda">
                                                    <label class="form-check-label">Ceguera izquierda</label>
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
                                                    <input class="form-check-input" type="radio" name="d7familiares" id="d7familiares1" onclick=""  value="No aplica">
                                                    <label class="form-check-label">No aplica</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d7familiares" id="d7familiares2" onclick=""  value="afectiva">
                                                    <label class="form-check-label">Afectiva</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d7familiares" id="d7familiares3" onclick=""  value="indiferente">
                                                    <label class="form-check-label">Indiferente</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d7familiares" id="d7familiares4" onclick=""  value="hostial">
                                                    <label class="form-check-label">Hostial</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d7familiares" id="d7familiares5" onclick=""  value="distante">
                                                    <label class="form-check-label">Adistante</label>
                                                  </div>
                                                </div>
                                                <div class="col-md-4">
                                                  <label class="form-check-label text-uppercase"><strong>Tipo de Maltrato</strong></label>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d7familiaresm" id="d7familiaresmaltrato1" onclick=""  value="No aplica">
                                                    <label class="form-check-label">No aplica</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d7familiaresm" id="d7familiaresmaltrato2" onclick=""  value="abandono familiar">
                                                    <label class="form-check-label">Abandono familiar</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d7familiaresm" id="d7familiaresmaltrato3" onclick=""  value="maltrato familiar">
                                                    <label class="form-check-label">Maltrato familiar</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d7familiaresm" id="d7familiaresmaltrato4" onclick=""  value="abuso familiar">
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
                                                    <input class="form-check-input" type="radio" name="d7equipo" id="d7equipo1" onclick=""  value="afectiva">
                                                    <label class="form-check-label">Afectiva</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d7equipo" id="d7equipo2" onclick=""  value="indiferente">
                                                    <label class="form-check-label">Indiferente</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d7equipo" id="d7equipo3" onclick=""  value="hostial">
                                                    <label class="form-check-label">Hostial</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d7equipo" id="d7equipo4" onclick=""  value="distante">
                                                    <label class="form-check-label">Adistante</label>
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
                                                    <input class="form-check-input" type="radio" name="d8civil" id="d8civil7" onclick=""  value="No aplica">
                                                    <label class="form-check-label">No aplica</label>
                                                  </div> -->
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d8civil" id="d8civil1" onclick=""  value="soltero">
                                                    <label class="form-check-label">Soltero</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d8civil" id="d8civil2" onclick=""  value="casado">
                                                    <label class="form-check-label">Casado</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d8civil" id="d8civil3" onclick=""  value="viudo">
                                                    <label class="form-check-label">Viudo</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d8civil" id="d8civil4" onclick=""  value="divorciado">
                                                    <label class="form-check-label">Divorciado</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d8civil" id="d8civil5" onclick=""  value="separado">
                                                    <label class="form-check-label">Separado</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d8civil" id="d8civil6" onclick=""  value="union libre">
                                                    <label class="form-check-label">Union libre</label>
                                                    <input type="text" class="form-control" id="dom8civil" name="dom8civil" style="display:none" />
                                                  </div>
                                                </div>
                                                <div class="col-md-3">
                                                  <label class="form-check-label text-uppercase"><strong>Paridad</strong></label>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d8paridad" id="d8paridad5" onclick=""  value="No aplica">
                                                    <label class="form-check-label">No aplica</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d8paridad" id="d8paridad1" onclick=""  value="G">
                                                    <label class="form-check-label">G</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d8paridad" id="d8paridad2" onclick=""  value="P">
                                                    <label class="form-check-label">P</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d8paridad" id="d8paridad3" onclick=""  value="A">
                                                    <label class="form-check-label">A</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d8paridad" id="d8paridad4" onclick=""  value="C">
                                                    <label class="form-check-label">C</label>
                                                    <input type="text" class="form-control" id="dom8paridad" name="dom8paridad" style="display:none" />
                                                  </div>
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
                                                    <input class="form-check-input" type="radio" name="d8its" id="d8its1" onclick=""  value="Si">
                                                    <label class="form-check-label">Si</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d8its" id="d8its2" onclick=""  value="No">
                                                    <label class="form-check-label">No</label>
                                                    <input type="text" class="form-control" id="dom8its" name="dom8its" style="display:none" />
                                                  </div><br><br>
                                                  <div class="form-group">
                                                    <label class="form-check-label"><strong>Observaciones</strong></label>
                                                    <input type="text" class="form-control" id="d8especifique" name="d8especifique" >
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
                                                    <input class="form-check-input" type="radio" name="d9respuesta" id="d9respuesta5" onclick=""  value="No aplica">
                                                    <label class="form-check-label">No aplica</label>
                                                  </div> -->
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d9respuesta" id="d9respuesta1" onclick=""  value="tranquilo">
                                                    <label class="form-check-label">Tranquilo</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d9respuesta" id="d9respuesta2" onclick=""  value="agresivo">
                                                    <label class="form-check-label">Agresivo</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d9respuesta" id="d9respuesta3" onclick=""  value="triste">
                                                    <label class="form-check-label">Triste</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d9respuesta" id="d9respuesta4" onclick=""  value="indiferente">
                                                    <label class="form-check-label">Indiferente</label>
                                                    <input type="text" class="form-control" id="dom9respuesta" name="dom9respuesta" style="display:none" />
                                                  </div>
                                                </div>                                        
                                                <div class="col-md-4">
                                                  <label class="form-check-label text-uppercase"><strong>Antecedente de intento de suicidio</strong></label>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d9intento" id="d9intento1" onclick=""  value="Si">
                                                    <label class="form-check-label">Si</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d9intento" id="d9intento2" onclick=""  value="No">
                                                    <label class="form-check-label">No</label>
                                                  </div>
                                                  <div class="form-group">
                                                    <label class="form-check-label"><strong>Observaciones</strong></label>
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
                                                  <label class="form-check-label"><strong>Religion</strong></label>
                                                  <div class="form-group">
                                                    <input type="text" class="form-control" id="d10religion" name="d10religion">
                                                  </div>
                                                </div>                                        
                                                <div class="col-md-4">
                                                  <label class="form-check-label text-uppercase"><strong>Acepta transfusion sanguinea</strong></label>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d10acepta" id="d10acepta1" onclick=""  value="Si">
                                                    <label class="form-check-label">Si</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d10acepta" id="d10acepta2" onclick=""  value="No">
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
                                                    <input class="form-check-input" type="radio" name="d10solicita" id="d10solicita1" onclick=""  value="Si">
                                                    <label class="form-check-label">Si</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d10solicita" id="d10solicita2" onclick=""  value="No">
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
                                            Dominio 11: Seguridad y Proteccion
                                          </button>
                                        </div>
                                        <div class="collapse" id="enfpdd7" aria-labelledby="headiuno" data-parent="#separa2">
                                          <div class="card-body">
                                            <div class="row">
                                              <div class="form-group col-md-12">
                                             
                                              <div class="row">
                                                <div class="col-md-3">
                                                  <label class="col-form-label">DISPOSITIVO</label>
                                                  <!-- <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d11seguridad" id="d11seguridad7" onclick=""  value="No aplica" >
                                                    <label class="form-check-label">No aplica</label>
                                                  </div> -->
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d11seguridad" id="d11seguridad1" onclick=""  value="cateter venoso periferico" >
                                                    <label class="form-check-label">Cateter Venoso Periferico</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d11seguridad" id="d11seguridad2" onclick=""  value="cateter venoso central">
                                                    <label class="form-check-label">Cateter Venoso Central</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d11seguridad" id="d11seguridad3" onclick=""  value="traccion esqueletica" >
                                                    <label class="form-check-label">Traccion esqueletica</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d11seguridad" id="d11seguridad4" onclick=""  value="traccion cutanea">
                                                    <label class="form-check-label">Traccion cutanea</label>
                                                  </div> 
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d11seguridad" id="d11seguridad5" onclick=""  value="inmovilizacion">
                                                    <label class="form-check-label">Inmovilizacion</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d11seguridad" id="d11seguridad6" onclick=""  value="sujecciones" >
                                                    <label class="form-check-label">Sujecciones</label>
                                                  </div>
                                                  <div class="form-group">
                                                    <label class="form-check-label"><strong>Observaciones</strong></label>
                                                    <input type="text" class="form-control" id="d11otros" name="d11otros" >
                                                    <input type="text" class="form-control" id="dom11seguridad" name="dom11seguridad" style="display:none" />
                                                  </div>
                                                </div>
                                                <div class="col-md-3">
                                                  <label class="form-check-label text-uppercase"><strong>Integrida cutanea</strong></label>
                                                  <!-- <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11cutanea[]" id="d11cutanea12" onclick=""  value="No aplica">
                                                    <label class="form-check-label">No aplica</label>
                                                  </div> -->
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11cutanea[]" id="d11cutanea1" onclick=""  value="sin lecciones">
                                                    <label class="form-check-label">Sin lecciones</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11cutanea[]" id="d11cutanea2" onclick=""  value="flebitis">
                                                    <label class="form-check-label">Flebitis</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11cutanea[]" id="d11cutanea3" onclick=""  value="hematomas">
                                                    <label class="form-check-label">Hematomas</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11cutanea[]" id="d11cutanea4" onclick=""  value="celulitis">
                                                    <label class="form-check-label">Celulitis</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11cutanea[]" id="d11cutanea5" onclick=""  value="heridas">
                                                    <label class="form-check-label">Heridas</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11cutanea[]" id="d11cutanea6" onclick=""  value="fracturas">
                                                    <label class="form-check-label">Fracturas</label>
                                                  </div>
                                                </div>
                                                <div class="col-md-3"><br>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11cutanea[]" id="d11cutanea7" onclick=""  value="ulceras">
                                                    <label class="form-check-label">Ulceras</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11cutanea[]" id="d11cutanea8" onclick=""  value="limpia">
                                                    <label class="form-check-label">limpia</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11cutanea[]" id="d11cutanea9" onclick=""  value="infectada">
                                                    <label class="form-check-label">Infectada</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11cutanea[]" id="d11cutanea10" onclick=""  value="primera intencion">
                                                    <label class="form-check-label">Primera intencion</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11cutanea[]" id="d11cutanea11" onclick=""  value="segunda intencion">
                                                    <label class="form-check-label">Segunda intencion</label>
                                                    <input type="text" class="form-control" id="dom11cutanea" name="dom11cutanea" style="display:none" />
                                                  </div>
                                                </div>
                                                <div class="col-md-3">
                                                   <div class="form-group">
                                                    <label class="form-check-label"><strong>Localizacion</strong></label>
                                                    <input type="text" class="form-control" id="d11localizacion" name="d11localizacion" >
                                                  </div>
                                                   <div class="form-group">
                                                    <label class="form-check-label"><strong>Grado</strong></label>
                                                    <input type="text" class="form-control" id="d11grado" name="d11grado" >
                                                  </div>
                                                </div>
                                                <div class="col-md-4">
                                                  <label class="form-check-label text-uppercase"><strong>Requerimientos</strong></label>
                                                  <!-- <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11requerimientos[]" id="d11requerimientos11" onclick=""  value="No aplica">
                                                    <label class="form-check-label">No aplica</label>
                                                  </div> -->
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11requerimientos[]" id="d11requerimientos1" onclick=""  value="sujecciones">
                                                    <label class="form-check-label">Sujecciones</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11requerimientos[]" id="d11requerimientos2" onclick=""  value="barandas">
                                                    <label class="form-check-label">Barandas</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11requerimientos[]" id="d11requerimientos3" onclick=""  value="acompañante">
                                                    <label class="form-check-label">Acompañante</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11requerimientos[]" id="d11requerimientos4" onclick=""  value="apoyo externo">
                                                    <label class="form-check-label">Apoyo externo</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11requerimientos[]" id="d11requerimientos5" onclick=""  value="ayuda alimentos">
                                                    <label class="form-check-label">Ayuda alimentos</label>
                                                  </div> 
                                                </div>
                                                <div class="col-md-4">
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11requerimientos[]" id="d11requerimientos6" onclick=""  value="ayuda deambulacion">
                                                    <label class="form-check-label">Ayuda deambulacion</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11requerimientos[]" id="d11requerimientos7" onclick=""  value="bolsas de arena">
                                                    <label class="form-check-label">Bolsas de arena</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11requerimientos[]" id="d11requerimientos8" onclick=""  value="colchon ortopedico">
                                                    <label class="form-check-label">Colchon ortopedico</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11requerimientos[]" id="d11requerimientos9" onclick=""  value="almuadones">
                                                    <label class="form-check-label">Almuadones</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="d11requerimientos[]" id="d11requerimientos10" onclick=""  value="cojines">
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
                                                    <input class="form-check-input" type="radio" name="d12dolor" id="d12dolor1" onclick=""  value="si">
                                                    <label class="form-check-label">Si</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d12dolor" id="d12dolor2" onclick=""  value="no">
                                                    <label class="form-check-label">No</label>
                                                    <input type="text" class="form-control" id="dom12dolor" name="dom12dolor" style="display:none" />
                                                  </div>
                                                  <div class="form-group">
                                                    <label class="form-check-label"><strong>Nivel</strong></label>
                                                    <input type="text" class="form-control" id="d12nivel" name="d12nivel" >
                                                  </div>
                                                  <div class="form-group">
                                                    <label class="form-check-label"><strong>Localizacion</strong></label>
                                                    <input type="text" class="form-control" id="d12localizacion" name="d12localizacion" >
                                                  </div>
                                                </div>                                        
                                                <div class="col-md-4">
                                                  <label class="form-check-label text-uppercase"><strong>Estado higiene</strong></label>
                                                  <!-- <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d12higiene" id="d12higiene5" onclick=""  value="No aplica">
                                                    <label class="form-check-label">No aplica</label>
                                                  </div> -->
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d12higiene" id="d12higiene1" onclick=""  value="bueno">
                                                    <label class="form-check-label">Bueno</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d12higiene" id="d12higiene2" onclick=""  value="regular">
                                                    <label class="form-check-label">Regular</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d12higiene" id="d12higiene3" onclick=""  value="deficinete">
                                                    <label class="form-check-label">Deficiente</label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d12higiene" id="d12higiene4" onclick=""  value="malo">
                                                    <label class="form-check-label">Malo</label>
                                                    <input type="text" class="form-control" id="dom12higiene" name="dom12higiene" style="display:none" />
                                                  </div>
                                                  <div class="form-group"><br>
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
                                                    <input type="text" class="form-control" id="d13peso" name="d13peso" >
                                                  </div>
                                                </div>
                                                <div class="col-md-2">
                                                  <div class="form-check">
                                                    <label class="form-check-label"><strong>Talla</strong></label>
                                                    <input type="text" class="form-control" id="d13talla" name="d13talla" >
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
                                                    <input class="form-check-input" type="radio" name="d13imc" id="d13imc1" onclick=""  value="bajo peso">
                                                    <label class="form-check-label"><strong>Bajo peso</strong></label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d13imc" id="d13imc2" onclick=""  value="obeso">
                                                    <label class="form-check-label"><strong>Obeso</strong></label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="d13imc" id="d13imc3" onclick=""  value="obseo morbido">
                                                    <label class="form-check-label"><strong>Obseo morbido</strong></label>
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
                                            Determinacion de nivel de cuidado de enfermeria
                                          </button>
                                        </div>
                                        <div class="collapse" id="enfpdd10" aria-labelledby="headiuno" data-parent="#separa2">
                                          <div class="card-body">
                                            <div class="row">
                                              <div class="form-group col-md-12">
                                                <label class="col-form-label"><strong></strong></label>
                                                <div class="row">
                                                  <div class="col-md-2">
                                                    <div class="form-check">
                                                      <label class="form-check-label">PFEIFFER</label>
                                                      <input type="text" class="form-control" id="cuidadopfeiffer" name="cuidadopfeiffer" >
                                                    </div>                                          
                                                  </div>
                                                  <div class="col-md-2">
                                                    <div class="form-check">
                                                      <label class="form-check-label">BARTHEL</label>
                                                      <input type="text" class="form-control" id="cuidadobarthel" name="cuidadobarthel" >
                                                    </div>
                                                  </div> 
                                                  <div class="col-md-2">
                                                    <div class="form-check">
                                                      <label class="form-check-label">NORTON</label>
                                                      <input type="text" class="form-control" id="cuidadonorton" name="cuidadonorton" >
                                                    </div>
                                                  </div>                                    
                                                  <div class="col-md-2">
                                                    <div class="form-check">
                                                      <label class="form-check-label">BRADEN Q</label>
                                                      <input type="text" class="form-control" id="cuidadobraden" name="cuidadobraden" >
                                                    </div>                                          
                                                  </div>
                                                  <div class="col-md-2">
                                                    <div class="form-check">
                                                      <label class="form-check-label">KARNOSKY-PPS</label>
                                                      <input type="text" class="form-control" id="cuidadokarnosky" name="cuidadokarnosky" >
                                                    </div>
                                                  </div> 
                                                  <div class="col-md-2">
                                                    <div class="form-check">
                                                      <label class="form-check-label">Total</label>
                                                      <input type="text" class="form-control" id="cuidadototal" name="cuidadototal" >
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="form-group col-md-12">
                                                <label class="col-form-label"><strong>Diagnosticos de Enfermeria:</strong></label>
                                                <textarea class="form-control" id="mdiagnosticos2" name="mdiagnosticos2" readonly=""></textarea>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group col-md-12  dropdown-divider"></div>
                                      <div class="row">
                                        <div class="col-md-12 text-center" id="btngpad">
                                          <input type="text" class="form-control" id="nmedpad" name="nmedpad" style="display:none" value="<?php echo ucwords($this->session->userdata('s_n')).', '.ucwords($this->session->userdata('s_ap'));?>" />
                                          <input type="text" class="form-control" id="numhc" name="numhc" style="display:none" />
                                        </div>
                                        <div class="col-md-12 text-center" id="btnapad" style="display:none">
                                          <button type="button" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarpad2">ACTUALIZAR</button>
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
                                            Valoracion de la vivienda
                                          </button>
                                        </div>
                                        <div class="collapse" id="valosoc1" aria-labelledby="headiuno" data-parent="#separa3">
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
                                                      <input class="form-check-input" type="checkbox" name="viveservicios[]" id="viveservicios1" onclick=""  value="Acueducto" >
                                                      <label class="form-check-label">Acueducto</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="viveservicios[]" id="viveservicios2" onclick=""  value="Alcantarillado">
                                                      <label class="form-check-label">Alcantarillado</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="viveservicios[]" id="viveservicios3" onclick=""  value="Energia" >
                                                      <label class="form-check-label">Energia</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="viveservicios[]" id="viveservicios4" onclick=""  value="Gas natural">
                                                      <label class="form-check-label">Gas natural</label>
                                                    </div> 
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="viveservicios[]" id="viveservicios5" onclick=""  value="Aseo">
                                                      <label class="form-check-label">Aseo</label>
                                                      <input type="text" class="form-control" id="auxservicios" name="auxservicios" style="display:none" />
                                                    </div>
                                                  </div>
                                                  <div class="col-md-3">
                                                    <label class="form-check-label text-uppercase"><strong>Telefonia</strong></label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="vivetelefonia[]" id="vivetelefonia4" onclick=""  value="No aplica">
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="vivetelefonia[]" id="vivetelefonia1" onclick=""  value="Fija">
                                                      <label class="form-check-label">Fija</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="vivetelefonia[]" id="vivetelefonia2" onclick=""  value="Movil">
                                                      <label class="form-check-label">Movil</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="vivetelefonia[]" id="vivetelefonia3" onclick=""  value="Internet">
                                                      <label class="form-check-label">Internet</label>
                                                      <input type="text" class="form-control" id="auxtelefonia" name="auxtelefonia" style="display:none" />
                                                    </div>
                                                  </div>
                                                  <div class="col-md-3">
                                                    <label class="form-check-label text-uppercase"><strong>Manejo de Residuos</strong></label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="viveresiduos[]" id="viveresiduos6" onclick=""  value="No aplica">
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="viveresiduos[]" id="viveresiduos1" onclick=""  value="Bolsa">
                                                      <label class="form-check-label">Bolsa</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="viveresiduos[]" id="viveresiduos2" onclick=""  value="Caneca">
                                                      <label class="form-check-label">Caneca</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="viveresiduos[]" id="viveresiduos3" onclick=""  value="Reciclaje">
                                                      <label class="form-check-label">Reciclaje</label>
                                                    </div> 
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="viveresiduos[]" id="viveresiduos4" onclick=""  value="Shunt">
                                                      <label class="form-check-label">Shunt</label>
                                                    </div> 
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="viveresiduos[]" id="viveresiduos5" onclick=""  value="Contenedor publico">
                                                      <label class="form-check-label">Contenedor publico</label>
                                                      <input type="text" class="form-control" id="auxresiduos" name="auxresiduos" style="display:none" />
                                                    </div> 
                                                  </div>
                                                  <div class="col-md-3">
                                                    <label class="form-check-label text-uppercase"><strong>Area en la vivienda</strong></label>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivearea" id="vivearea5" onclick=""  value="No aplica">
                                                      <label class="form-check-label">No aplica</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivearea" id="vivearea1" onclick=""  value="Interior">
                                                      <label class="form-check-label">Interior</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivearea" id="vivearea2" onclick=""  value="Exterior">
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
                                                      <label class="form-check-label"><strong>Animales domesticos</strong></label>
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
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivevectoreas" id="vivevectoreas5" onclick=""  value="No aplica">
                                                      <label class="form-check-label">Ninguna</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivevectoreas" id="vivevectoreas1" onclick=""  value="Voladores">
                                                      <label class="form-check-label">Voladores</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivevectoreas" id="vivevectoreas2" onclick=""  value="Rastreros">
                                                      <label class="form-check-label">Rastreros</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivevectoreas" id="vivevectoreas3" onclick=""  value="Antropodos">
                                                      <label class="form-check-label">Antropodos</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivevectoreas" id="vivevectoreas4" onclick=""  value="Se fumiga">
                                                      <label class="form-check-label">Se fumiga</label>
                                                    </div>
                                                    <div class="form-group"><br>
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
                                                    <label class="form-check-label text-uppercase"><strong>Utencilios de Cocina</strong></label>
                                                    <div class="form-group">
                                                      <label class="form-check-label"><strong>Conservacion</strong></label>
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
                                                    <label class="form-check-label text-uppercase"><strong>Acesibilidad</strong></label>
                                                    <div class="form-group">
                                                      <label class="form-check-label"><strong>Ingreso</strong></label>
                                                      <input type="text" class="form-control" id="viveingreso" name="viveingreso" >
                                                    </div>
                                                    <div class="form-group">
                                                      <label class="form-check-label"><strong>Exterior</strong></label>
                                                      <input type="text" class="form-control" id="viveexterior" name="viveexterior" >
                                                    </div>
                                                  </div>
                                                  <div class="col-md-3">
                                                    <label class="form-check-label text-uppercase"><strong>Baño</strong></label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivebano" id="vivebano5" onclick=""  value="No aplica">
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivebano" id="vivebano1" onclick=""  value="uni personal">
                                                      <label class="form-check-label">Uni personal</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivebano" id="vivebano2" onclick=""  value="en la habitacion">
                                                      <label class="form-check-label">En la habitacion</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivebano" id="vivebano3" onclick=""  value="compartido">
                                                      <label class="form-check-label">Compartido</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivebano" id="vivebano4" onclick=""  value="social">
                                                      <label class="form-check-label">Social</label>
                                                      <input type="text" class="form-control" id="auxbano" name="auxbano" style="display:none" />
                                                    </div>
                                                    <label class="form-check-label text-uppercase"><strong>Separacion</strong></label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="viveseparacion" id="viveseparacion4" onclick=""  value="No aplica">
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="viveseparacion" id="viveseparacion1" onclick=""  value="fija">
                                                      <label class="form-check-label">Fija</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="viveseparacion" id="viveseparacion2" onclick=""  value="movil">
                                                      <label class="form-check-label">Movil</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="viveseparacion" id="viveseparacion3" onclick=""  value="barra de apoyo">
                                                      <label class="form-check-label">Barra de apoyo</label>
                                                      <input type="text" class="form-control" id="auxseparacion" name="auxseparacion" style="display:none" />
                                                    </div>
                                                  </div>
                                                  <div class="col-md-3">
                                                    <label class="form-check-label text-uppercase"><strong>Habitacion</strong></label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivehabitacion" id="vivehabitacion4" onclick=""  value="No aplica">
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivehabitacion" id="vivehabitacion1" onclick=""  value="unipersonal">
                                                      <label class="form-check-label">Unipersonal</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivehabitacion" id="vivehabitacion2" onclick=""  value="bipersonal">
                                                      <label class="form-check-label">Bipersonal</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="vivehabitacion" id="vivehabitacion3" onclick=""  value="multiple">
                                                      <label class="form-check-label">Multiple</label>
                                                      <input type="text" class="form-control" id="auxhabitacion" name="auxhabitacion" style="display:none" />
                                                    </div>
                                                    <label class="form-check-label text-uppercase"><strong>Ventilacion</strong></label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="viveventilacion" id="viveventilacion3" onclick=""  value="No aplica">
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="viveventilacion" id="viveventilacion1" onclick=""  value="natural">
                                                      <label class="form-check-label">Natural</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="viveventilacion" id="viveventilacion2" onclick=""  value="artificial">
                                                      <label class="form-check-label">Artificial</label>
                                                      <input type="text" class="form-control" id="auxventilacion" name="auxventilacion" style="display:none" />
                                                    </div>
                                                    <label class="form-check-label text-uppercase"><strong>Iluminacion</strong></label>
                                                    <!-- <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="viveiluminacion" id="viveiluminacion3" onclick=""  value="No aplica">
                                                      <label class="form-check-label">No aplica</label>
                                                    </div> -->
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="viveiluminacion" id="viveiluminacion1" onclick=""  value="natural">
                                                      <label class="form-check-label">Natural</label>
                                                    </div>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="radio" name="viveiluminacion" id="viveiluminacion2" onclick=""  value="artificial">
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
                                            Escala de Ansiedad y Depresion Hospitalaria
                                          </button>
                                        </div>
                                        <div class="collapse" id="valosoc2" aria-labelledby="headiuno" data-parent="#separa3">
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
                                                <input type="range" class="form-control-range" id="ayd1" name="ayd1" onchange="aydhospitalaria()" value="3" min="1" max="4" step="1">
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
                                                <input type="range" class="form-control-range" id="ayd2" name="ayd2" onchange="aydhospitalaria()" value="3" min="1" max="4" step="1">
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
                                                <input type="range" class="form-control-range" id="ayd3" name="ayd3" onchange="aydhospitalaria()" value="3" min="1" max="4" step="1">
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
                                                <label for="formControlRange">Soy capaz de reirme y ver el lado gracioso de las cosas</label>
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
                                                <input type="range" class="form-control-range" id="ayd4" name="ayd4" onchange="aydhospitalaria()" value="3" min="1" max="4" step="1">
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
                                                <input type="range" class="form-control-range" id="ayd5" name="ayd5" onchange="aydhospitalaria()" value="3" min="1" max="4" step="1">
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
                                                <input type="range" class="form-control-range" id="ayd6" name="ayd6" onchange="aydhospitalaria()" value="3" min="1" max="4" step="1">
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
                                                <input type="range" class="form-control-range" id="ayd7" name="ayd7" onchange="aydhospitalaria()" value="3" min="1" max="4" step="1">
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
                                                <label for="formControlRange">He perdido el interez por mi aspecto personal</label>
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
                                                <input type="range" class="form-control-range" id="ayd8" name="ayd8" onchange="aydhospitalaria()" value="3" min="1" max="4" step="1">
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
                                                <label for="formControlRange">Experimento una desagrable senacion de "nervios y hormigueos" en el estomago</label>
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
                                                <input type="range" class="form-control-range" id="ayd9" name="ayd9" onchange="aydhospitalaria()" value="3" min="1" max="4" step="1">
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
                                                <label for="formControlRange">Espero las cosas con ilucion</label>
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
                                                <input type="range" class="form-control-range" id="ayd10" name="ayd10" onchange="aydhospitalaria()" value="3" min="1" max="4" step="1">
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
                                                <input type="range" class="form-control-range" id="ayd11" name="ayd11" onchange="aydhospitalaria()" value="3" min="1" max="4" step="1">
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
                                                <label for="formControlRange">Soy capaz de disfrutar con un buen libro o con un buen programa de radio o television</label>
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
                                                <input type="range" class="form-control-range" id="ayd12" name="ayd12" onchange="aydhospitalaria()" value="3" min="1" max="4" step="1">
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
                                                <input type="range" class="form-control-range" id="ayd13" name="ayd13" onchange="aydhospitalaria()" value="3" min="1" max="4" step="1">
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
                                      <div class="card-header" id="headiuno">
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
                                      </div>
                                      <div class="card-header" id="headiuno">
                                        <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#valosocd2"
                                        aria-expanded="false" aria-controls="valosocd2">
                                          Situacion Familiar
                                        </button>
                                      </div>
                                      <div class="collapse" id="valosocd2" aria-labelledby="headiuno" data-parent="#separa4">
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
                                                          vive con familia sin dependencia fisico psiquica
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
                                                          vive con conyuge de similar edad
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
                                                          vive con familia y/o conyuge y presenta algun grado de dependencia
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
                                                          vive solo  y tiene hijos proximos
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
                                                          vive solo y carace de hijos o viven alejados
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
                                          Situacion Economica
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
                                                        <th>1</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                      <tr>
                                                        <td class="text-justify">
                                                          Mas de 1,5 veces el salario minimo
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
                                                          Desde 1,5 veces el salario minimo hasta el salario minimo incluso
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
                                                          Desde el salario minimo a pension minima contributiva
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
                                                          Pension no contributiva, ingreso subsidiado
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
                                                          Barreras arquitectonicas en la vivienda o ingreso a la casa (peldaños, escalones, rampas, puertas angostas, baños comunales,etc.)
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
                                                          Humedades, mala higiene, equipamiento inadecuado (sin baño completo, sin agua caliente, sin calefacion,..)
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
                                                          Ausencia de ascensor, telefonos (sistemas de comunicacion audio visual)
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
                                                          Vivienda inadecuada (solo habitacion integral, inquilinato, compartidad con extraños, sin piso, en teja metalica o papel duro, sin equipamiento minimo,..)
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
                                                          Relacion social solo con familia y vecinos
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
                                                          Relacion social solo con familia o vecinos
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
                                                          Pendiente de ingreso en residencia geriatrica
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
                                    <div class="col-md-12 text-center" id="btngsociofamiliar">
                                      <button type="button" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarsociofamiliar">GUARDAR</button>
                                      <input type="text" class="form-control" id="nmedsociofamiliar" name="nmedsociofamiliar" style="display:none" value="<?php echo ucwords($this->session->userdata('s_n')).', '.ucwords($this->session->userdata('s_ap'));?>" />
                                      <input type="text" class="form-control" id="numhc2" name="numhc2" style="display:none" />
                                    </div>
                                    <div class="col-md-12 text-center" id="btnasociofamiliar" style="display:none">
                                      <button type="button" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarsociofamiliar2">ACTUALIZAR</button>
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
                                  <div class="form-group col-md-4">
                                    <label>Preguntas a Realizar</label>
                                  </div>
                                  <div class="form-group col-md-1">
                                    <label>Fecha</label>
                                  </div>
                                  <div class="form-group col-md-4">
                                    <input type="text" class="form-control" id="carga_fecha" name="carga_fecha" />
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
                                    <input type="range" class="form-control-range" id="carga_1" name="carga_1" onchange="escala_cuidador()" value="3" min="0" max="4" step="1">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-md-8">
                                    <span>¿Siente que debudo al tiempo que dedica a su familiar ya no dispone de tiempo suficiente para usted?</span>
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
                                    <input type="range" class="form-control-range" id="carga_2" name="carga_2" onchange="escala_cuidador()" value="3" min="0" max="4" step="1">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-md-8">
                                    <span>¿Se siente tenso cuando tiene que cuidar a su familiar y atender ademas otras responsibilidades?</span>
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
                                    <input type="range" class="form-control-range" id="carga_3" name="carga_3" onchange="escala_cuidador()" value="3" min="0" max="4" step="1">
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
                                    <input type="range" class="form-control-range" id="carga_4" name="carga_4" onchange="escala_cuidador()" value="3" min="0" max="4" step="1">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-md-8">
                                    <span>¿Se siente enfadado cuando esta cerca de su familiar?</span>
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
                                    <input type="range" class="form-control-range" id="carga_5" name="carga_5" onchange="escala_cuidador()" value="3" min="0" max="4" step="1">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-md-8">
                                    <span>¿Cree que la situacion actual afecta de manera negativa a su relacion con amigos y otros miembros de su familia?</span>
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
                                    <input type="range" class="form-control-range" id="carga_6" name="carga_6" onchange="escala_cuidador()" value="3" min="0" max="4" step="1">
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
                                    <input type="range" class="form-control-range" id="carga_7" name="carga_7" onchange="escala_cuidador()" value="3" min="0" max="4" step="1">
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
                                    <input type="range" class="form-control-range" id="carga_8" name="carga_8" onchange="escala_cuidador()" value="3" min="0" max="4" step="1">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-md-8">
                                    <span>¿Se siente agobiado cuando tiene que estar juanto a su familiar?</span>
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
                                    <input type="range" class="form-control-range" id="carga_9" name="carga_9" onchange="escala_cuidador()" value="3" min="0" max="4" step="1">
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
                                    <input type="range" class="form-control-range" id="carga_10" name="carga_10" onchange="escala_cuidador()" value="3" min="0" max="4" step="1">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-md-8">
                                    <span>¿Siente que no tiene la vida privada que desearia debido a su familiar?</span>
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
                                    <input type="range" class="form-control-range" id="carga_11" name="carga_11" onchange="escala_cuidador()" value="3" min="0" max="4" step="1">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-md-8">
                                    <span>¿Cree que su vida socila se ha visto afectada por tener que cuidar de su familiar?</span>
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
                                    <input type="range" class="form-control-range" id="carga_12" name="carga_12" onchange="escala_cuidador()" value="3" min="0" max="4" step="1">
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
                                    <input type="range" class="form-control-range" id="carga_13" name="carga_13" onchange="escala_cuidador()" value="3" min="0" max="4" step="1">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-md-8">
                                    <span>¿Cree que su familiar espera que usted le cuide, como si fuera la unica persona con la que puede contar?</span>
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
                                    <input type="range" class="form-control-range" id="carga_14" name="carga_14" onchange="escala_cuidador()" value="3" min="0" max="4" step="1">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-md-8">
                                    <span>¿Cree que no dispone de dinero suficiente para cuidar a su familiar ademas de sus otros gastos?</span>
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
                                    <input type="range" class="form-control-range" id="carga_15" name="carga_15" onchange="escala_cuidador()" value="3" min="0" max="4" step="1">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-md-8">
                                    <span>¿Siente que sera incapaz de cuidar a su familiar por mucho mas tiempo?</span>
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
                                    <input type="range" class="form-control-range" id="carga_16" name="carga_16" onchange="escala_cuidador()" value="3" min="0" max="4" step="1">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-md-8">
                                    <span>¿Siente que ha perdido el control de su vida desde que la enfermedad de su familiar se manifesto?</span>
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
                                    <input type="range" class="form-control-range" id="carga_17" name="carga_17" onchange="escala_cuidador()" value="3" min="0" max="4" step="1">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-md-8">
                                    <span>¿Desearia poder encargar el cuidado de su familiar a otras personas?</span>
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
                                    <input type="range" class="form-control-range" id="carga_18" name="carga_18" onchange="escala_cuidador()" value="3" min="0" max="4" step="1">
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
                                    <input type="range" class="form-control-range" id="carga_19" name="carga_19" onchange="escala_cuidador()" value="3" min="0" max="4" step="1">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-md-8">
                                    <span>¿Siente que deberia hacer mas de lo que hace por su familiar?</span>
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
                                    <input type="range" class="form-control-range" id="carga_20" name="carga_20" onchange="escala_cuidador()" value="3" min="0" max="4" step="1">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-md-8">
                                    <span>¿Cree que podria cuidar de su familiar mejor de lo que lo hace?</span>
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
                                    <input type="range" class="form-control-range" id="carga_21" name="carga_21" onchange="escala_cuidador()" value="3" min="0" max="4" step="1">
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
                                    <input type="range" class="form-control-range" id="carga_22" name="carga_22" onchange="escala_cuidador()" value="3" min="0" max="4" step="1">
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
                            <div class="col-md-12 text-center" id="btngescalacarga">
                              <input type="text" class="form-control" id="nmedescalacarga" name="nmedescalacarga" style="display:none" value="<?php echo ucwords($this->session->userdata('s_n')).', '.ucwords($this->session->userdata('s_ap'));?>" />
                              <input type="text" class="form-control" id="numhc3" name="numhc3" style="display:none" />
                            </div>
                            <div class="col-md-12 text-center" id="btnaescalacarga" style="display:none">
                              <button type="button" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarescalacarga2">ACTUALIZAR</button>
                            </div>
                          </div>
                        </div>
                        </form>
                      </div>
                      <div class="collapse multi-collapse collapse" id="multi4" data-parent="#accordion2">
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
                                          Plan de Intervencion 
                                        </button>
                                      </div>
                                      <div class="collapse" id="plani1" aria-labelledby="headiuno" data-parent="#separa6">
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
                                          </div>
                                          <div class="row">
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label"><strong>PFEIFFER:</strong></label>
                                              <input type="text" class="form-control" id="interpfeiffer" name="interpfeiffer" />
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label"><strong>BARTHEL:</strong></label>
                                              <input type="text" class="form-control" id="interbarthel" name="interbarthel" />
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label"><strong>NORTON:</strong></label>
                                              <input type="text" class="form-control" id="internorton" name="internorton" />
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label"><strong>BRADEN Q:</strong></label>
                                              <input type="text" class="form-control" id="interbraden" name="interbraden" />
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label"><strong>KARNOSKY-PPS:</strong></label>
                                              <input type="text" class="form-control" id="interkarnosky" name="interkarnosky" />
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label"><strong>SOCIOFAMILIAR:</strong></label>
                                              <input type="text" class="form-control" id="intersocio" name="intersocio" />
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="form-group col-md-6">
                                              <label class="col-form-label"><strong>ANSIEDAD:</strong></label>
                                              <input type="text" class="form-control" id="interansiedad" name="interansiedad" />
                                            </div>
                                            <div class="form-group col-md-6">
                                              <label class="col-form-label"><strong>ZARITH:</strong></label>
                                              <input type="text" class="form-control" id="interzarith" name="interzarith" />
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
                                              <label class="col-form-label"><strong>Ejercer culto a Dios, acorde a su religion:</strong></label>
                                              <textarea class="form-control" id="nsculto" name="nsculto"></textarea>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="form-group col-md-6">
                                              <label class="col-form-label"><strong>Comunicarse con otros, expresar emociones, nesecidades, miedos u opiniones:</strong></label>
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
                                              <label class="col-form-label"><strong>Participar en todas las formas de recreacion y ocio:</strong></label>
                                              <textarea class="form-control" id="nsparticipar" name="nsparticipar"></textarea>
                                            </div>
                                          </div>
                                           <div class="row">
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label"><strong>Medico:</strong></label>
                                              <input type="text" class="form-control" id="nsmedico" name="nsmedico" />
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label"><strong>Enfermeria:</strong></label>
                                              <input type="text" class="form-control" id="nsenfermeria" name="nsenfermeria" />
                                            </div>
                                            <div class="form-group col-md-3">
                                              <label class="col-form-label"><strong>Apoyo diagnostico:</strong></label>
                                              <input type="text" class="form-control" id="nsdiagnostico" name="nsdiagnostico" />
                                            </div>
                                            <div class="form-group col-md-3">
                                              <label class="col-form-label"><strong>Complementacion terap.:</strong></label>
                                              <input type="text" class="form-control" id="nscomplementacion" name="nscomplementacion" />
                                            </div>
                                            <div class="form-group col-md-2">
                                              <label class="col-form-label"><strong>Educativo:</strong></label>
                                              <input type="text" class="form-control" id="nseducativo" name="nseducativo" />
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="form-group col-md-12">
                                              <label class="col-form-label"><strong>Paraclinicos:</strong></label>
                                              <input type="text" class="form-control" id="intnparaclinicos" name="intnparaclinicos" />
                                            </div>
                                            <div class="form-group col-md-12">
                                              <label class="col-form-label"><strong>Imagenologia:</strong></label>
                                              <input type="text" class="form-control" id="intnimagenologia" name="intnimagenologia" />
                                            </div>
                                            <div class="form-group col-md-12">
                                              <label class="col-form-label"><strong>Liquidos:</strong></label>
                                              <input type="text" class="form-control" id="intnliquidos" name="intnliquidos" />
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="form-group col-md-12">
                                              <label class="col-form-label"><strong>Observaciones:</strong></label>
                                              <textarea class="form-control" id="auxdtobservaciones" name="auxdtobservaciones"></textarea>
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
                                              <label class="col-form-label"><strong>Diagnosticos:</strong></label>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis1" name="lis1" onclick="" value="Ansiedad">
                                                <label class="form-check-label">Ansiedad</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis2" name="lis2" onclick="" value="Riesgo de glucemia inestable" >
                                                <label class="form-check-label">Riesgo de glucemia inestable</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis3" name="lis3" onclick="" value="Riesgo de estreñimiento" >
                                                <label class="form-check-label">Riesgo de estreñimiento</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis4" name="lis4" onclick="" value="Estreñimiento" >
                                                <label class="form-check-label">Estreñimiento</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis5" name="lis5" onclick="" value="Deterioro de la deambulación" >
                                                <label class="form-check-label">Deterioro de la deambulación</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis6" name="lis6" onclick="" value="Insomnio">
                                                <label class="form-check-label">Insomnio</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis7" name="lis7" onclick="" value="Riego de deterioro de la integridad cutánea" >
                                                <label class="form-check-label">Riego de deterioro de la integridad cutánea</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis8" name="lis8" onclick="" value="Deterioro integridad tisular" >
                                                <label class="form-check-label">Deterioro integridad tisular</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis9" name="lis9" onclick="" value="Riesgo de infección" >
                                                <label class="form-check-label">Riesgo de infección</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis10" name="lis10" onclick="" value="Hipertermia">
                                                <label class="form-check-label">Hipertermia</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis11" name="lis11" onclick="" value="Dolor agudo" >
                                                <label class="form-check-label">Dolor agudo</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis12" name="lis12" onclick="" value="Dolor crónico" >
                                                <label class="form-check-label">Dolor crónico</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis13" name="lis13" onclick="" value="Perfusion tisular inefectiva" >
                                                <label class="form-check-label">Perfusion tisular inefectiva</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis14" name="lis14" onclick="" value="Riesgo de caídas">
                                                <label class="form-check-label">Riesgo de caídas</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis15" name="lis15" onclick="" value="Riesgo de alteración del patrón de autocuidado" >
                                                <label class="form-check-label">Riesgo de alteración del patrón de autocuidado</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis16" name="lis16" onclick="" value="Riesgo de aspiración" >
                                                <label class="form-check-label">Riesgo de aspiración</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis17" name="lis17" onclick="" value="Deterioro de la deglución" >
                                                <label class="form-check-label">Deterioro de la deglución</label>
                                              </div>                                              
                                            </div>
                                            <div class="form-group col-md-6">
                                              </br>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis18" name="lis18" onclick="" value="Incontinencia urinaria total">
                                                <label class="form-check-label">Incontinencia urinaria total</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis19" name="lis19" onclick="" value="Deterioro movilidad física" >
                                                <label class="form-check-label">Deterioro movilidad física</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis20" name="lis20" onclick="" value="Riesgo de Caídas" >
                                                <label class="form-check-label">Riesgo de Caídas</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis21" name="lis21" onclick="" value="Riesgo de la comunicación verbal" >
                                                <label class="form-check-label">Riesgo de la comunicación verbal</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis22" name="lis22" onclick="" value="Dispocición para mejorar el autocuidado">
                                                <label class="form-check-label">Dispocición para mejorar el autocuidado</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis23" name="lis23" onclick="" value="Afrontamiento familiar comprometido" >
                                                <label class="form-check-label">Afrontamiento familiar comprometido</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis24" name="lis24" onclick="" value="Riesgo de cansancio del rol de cuidador" >
                                                <label class="form-check-label">Riesgo de cansancio del rol de cuidador</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis25" name="lis25" onclick="" value="Déficit de autocuidado: alimentación" >
                                                <label class="form-check-label">Déficit de autocuidado: alimentación</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis26" name="lis26" onclick="" value="Déficit de autocuidado: Baño/higiene">
                                                <label class="form-check-label">Déficit de autocuidado: Baño/higiene</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis27" name="lis27" onclick="" value="Deterioro de la mucosa oral" >
                                                <label class="form-check-label">Deterioro de la mucosa oral</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis28" name="lis28" onclick="" value="Desatención unilateral" >
                                                <label class="form-check-label">Desatención unilateral</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis29" name="lis29" onclick="" value="Déficit de autocuidador: uso del WC" >
                                                <label class="form-check-label">Déficit de autocuidador: uso del WC</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis30" name="lis30" onclick="" value="Déficit de autocuidador: vestido/acicalamiento">
                                                <label class="form-check-label">Déficit de autocuidador: vestido/acicalamiento</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis31" name="lis31" onclick="" value="Riesgo del intercambio gaseoso" >
                                                <label class="form-check-label">Riesgo del intercambio gaseoso</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis32" name="lis32" onclick="" value="Limpieza ineficaz de las vias aéreas" >
                                                <label class="form-check-label">Limpieza ineficaz de las vias aéreas</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis33" name="lis33" onclick="" value="Patrón respiratorio ineficaz" >
                                                <label class="form-check-label">Patrón respiratorio ineficaz</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lis34" name="lis34" onclick="" value="Conocimientos deficinetes regimen terapéutico">
                                                <label class="form-check-label">Conocimientos deficinetes regimen terapéutico</label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group col-md-12  dropdown-divider"></div>
                                          <div class="row">
                                            <div class="form-group col-md-6">
                                              <label class="col-form-label"><strong>Criterios de riesgo y/o relacion:</strong></label>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd1" name="lisd1" onclick="" value="El estado de salud">
                                                <label class="form-check-label">El estado de salud</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd2" name="lisd2" onclick="" value="Falta de cumplimiento del plan terapéutico" >
                                                <label class="form-check-label">Falta de cumplimiento del plan terapéutico</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd3" name="lisd3" onclick="" value="Malos hábitos alimentarios" >
                                                <label class="form-check-label">Malos hábitos alimentarios</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd4" name="lisd4" onclick="" value="Disminución de la movilidad del tracto" >
                                                <label class="form-check-label">Disminución de la movilidad del tracto</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd5" name="lisd5" onclick="" value="Disminución actividad física" >
                                                <label class="form-check-label">Disminución actividad física</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd6" name="lisd6" onclick="" value="Resistencia limitada">
                                                <label class="form-check-label">Resistencia limitada</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd7" name="lisd7" onclick="" value="Patrón de actividad" >
                                                <label class="form-check-label">Patrón de actividad</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd8" name="lisd8" onclick="" value="Alteración de la circulación" >
                                                <label class="form-check-label">Alteración de la circulación</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd9" name="lisd9" onclick="" value="Destruccion tisular" >
                                                <label class="form-check-label">Destruccion tisular</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd10" name="lisd10" onclick="" value="Enfermedad">
                                                <label class="form-check-label">Enfermedad</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd11" name="lisd11" onclick="" value="Afentes lesivos quimicos, fisicos y psicológicos" >
                                                <label class="form-check-label">Afentes lesivos quimicos, fisicos y psicológicos</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd12" name="lisd12" onclick="" value="Incapacidad física crónica" >
                                                <label class="form-check-label">Incapacidad física crónica</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd13" name="lisd13" onclick="" value="Interrupcion del flujo arterial" >
                                                <label class="form-check-label">Interrupcion del flujo arterial</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd14" name="lisd14" onclick="" value="Inmovilidad o Incontinencia">
                                                <label class="form-check-label">Inmovilidad o Incontinencia</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd15" name="lisd15" onclick="" value="Dificulta en la marcha" >
                                                <label class="form-check-label">Dificulta en la marcha</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd16" name="lisd16" onclick="" value="Disfunción neurológica" >
                                                <label class="form-check-label">Disfunción neurológica</label>
                                              </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                              <br>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd17" name="lisd17" onclick="" value="Secreciones bronquiales" >
                                                <label class="form-check-label">Secreciones bronquiales</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd18" name="lisd18" onclick="" value="Deterioro neuromuscular">
                                                <label class="form-check-label">Deterioro neuromuscular</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd19" name="lisd19" onclick="" value="Deterioro neuromuscular y cognitivo" >
                                                <label class="form-check-label">Deterioro neuromuscular y cognitivo</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd20" name="lisd20" onclick="" value="Intolerancia a la actividad" >
                                                <label class="form-check-label">Intolerancia a la actividad</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd21" name="lisd21" onclick="" value="Deterioro de la percepcion" >
                                                <label class="form-check-label">Deterioro de la percepcion</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd22" name="lisd22" onclick="" value="Procedimientos invasivos">
                                                <label class="form-check-label">Procedimientos invasivos</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd23" name="lisd23" onclick="" value="Disminución de la actividad cerebral" >
                                                <label class="form-check-label">Disminución de la actividad cerebral</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd24" name="lisd24" onclick="" value="Falta de cumplimiento del plan terapéutico" >
                                                <label class="form-check-label">Falta de cumplimiento del plan terapéutico</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd25" name="lisd25" onclick="" value="Continuidad de cuidados en su domicilio" >
                                                <label class="form-check-label">Continuidad de cuidados en su domicilio</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd26" name="lisd26" onclick="" value="El cuidador desempeña roles que entran en competencia">
                                                <label class="form-check-label">El cuidador desempeña roles que entran en competencia</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd27" name="lisd27" onclick="" value="Deterioro congnitivo y neuromuscular" >
                                                <label class="form-check-label">Deterioro congnitivo y neuromuscular</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd28" name="lisd28" onclick="" value="Dieta absoluta más de 24 horas" >
                                                <label class="form-check-label">Dieta absoluta más de 24 horas</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd29" name="lisd29" onclick="" value="Desequilibrio ventilación-perfusión" >
                                                <label class="form-check-label">Desequilibrio ventilación-perfusión</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd30" name="lisd30" onclick="" value="Mucosidad excesiva">
                                                <label class="form-check-label">Mucosidad excesiva</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd31" name="lisd31" onclick="" value="Fatiga de los músculos respiratorios" >
                                                <label class="form-check-label">Fatiga de los músculos respiratorios</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisd32" name="lisd32" onclick="" value="Interpretación errónea de la información" >
                                                <label class="form-check-label">Interpretación errónea de la información</label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group col-md-12  dropdown-divider"></div>
                                          <div class="row">
                                            <div class="form-group col-md-6">
                                              <label class="col-form-label"><strong>Criterios de resultados:</strong></label>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list1" name="list1" onclick="" value="Nivel de ansiedad">
                                                <label class="form-check-label">Nivel de ansiedad</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list2" name="list2" onclick="" value="Nivel de glucemia" >
                                                <label class="form-check-label">Nivel de glucemia</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list3" name="list3" onclick="" value="Eliminación intestinal" >
                                                <label class="form-check-label">Eliminación intestinal</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list4" name="list4" onclick="" value="Ambular" >
                                                <label class="form-check-label">Ambular</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list5" name="list5" onclick="" value="Sueño" >
                                                <label class="form-check-label">Sueño</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list6" name="list6" onclick="" value="Integridad tisular: piel y membranas mucosas">
                                                <label class="form-check-label">Integridad tisular: piel y membranas mucosas</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list7" name="list7" onclick="" value="Curación de la herida: por segunda infección" >
                                                <label class="form-check-label">Curación de la herida: por segunda infección</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list8" name="list8" onclick="" value="Curación de la herida: por primera infección" >
                                                <label class="form-check-label">Curación de la herida: por primera infección</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list9" name="list9" onclick="" value="Termorregulación" >
                                                <label class="form-check-label">Termorregulación</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list10" name="list10" onclick="" value="Control del dolor">
                                                <label class="form-check-label">Control del dolor</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list11" name="list11" onclick="" value="Nivel del dolor" >
                                                <label class="form-check-label">Nivel del dolor</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list12" name="list12" onclick="" value="Perfusión tisular perfiférica" >
                                                <label class="form-check-label">Perfusión tisular perfiférica</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list13" name="list13" onclick="" value="Conducta de prenvención caídas" >
                                                <label class="form-check-label">Conducta de prenvención caídas</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list14" name="list14" onclick="" value="Actividades de la vida diaria asistidas">
                                                <label class="form-check-label">Actividades de la vida diaria asistidas</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list15" name="list15" onclick="" value="Estado respiratorio: Permeabilidad de vias respiratoria" >
                                                <label class="form-check-label">Estado respiratorio: Permeabilidad de vias respiratoria</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list16" name="list16" onclick="" value="Estado de deglución" >
                                                <label class="form-check-label">Estado de deglución</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list17" name="list17" onclick="" value="Eliminación urinaria" >
                                                <label class="form-check-label">Eliminación urinaria</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list18" name="list18" onclick="" value="Movilidad">
                                                <label class="form-check-label">Movilidad</label>
                                              </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                              <br>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list19" name="list19" onclick="" value="Severidad de la infección" >
                                                <label class="form-check-label">Severidad de la infección</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list20" name="list20" onclick="" value="Comunicación" >
                                                <label class="form-check-label">Comunicación</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list21" name="list21" onclick="" value="Actividades de la vida diaria" >
                                                <label class="form-check-label">Actividades de la vida diaria</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list22" name="list22" onclick="" value="Rendimiento del cuidador principal: cuidados directos">
                                                <label class="form-check-label">Rendimiento del cuidador principal: cuidados directos</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list23" name="list23" onclick="" value="Posible resistencia al cuidado familiar" >
                                                <label class="form-check-label">Posible resistencia al cuidado familiar</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list24" name="list24" onclick="" value="Autocuidados: comer" >
                                                <label class="form-check-label">Autocuidados: comer</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list25" name="list25" onclick="" value="Autocuidado: higiene" >
                                                <label class="form-check-label">Autocuidado: higiene</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list26" name="list26" onclick="" value="Higiene bucal">
                                                <label class="form-check-label">Higiene bucal</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list27" name="list27" onclick="" value="Consecuencias de la inmovilidad fisiológica" >
                                                <label class="form-check-label">Consecuencias de la inmovilidad fisiológica</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list28" name="list28" onclick="" value="Autocuidados: actividades de la vida diaria (AVD)" >
                                                <label class="form-check-label">Autocuidados: actividades de la vida diaria (AVD)</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list29" name="list29" onclick="" value="Autocuidado: uso del inodoro" >
                                                <label class="form-check-label">Autocuidado: uso del inodoro</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list30" name="list30" onclick="" value="Autocuidado: vestirse">
                                                <label class="form-check-label">Autocuidado: vestirse</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list31" name="list31" onclick="" value="Signos vitales" >
                                                <label class="form-check-label">Signos vitales</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list32" name="list32" onclick="" value="Estado respiratorio: intercambio gaseoso" >
                                                <label class="form-check-label">Estado respiratorio: intercambio gaseoso</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list33" name="list33" onclick="" value="Estado respiratorio: permeabilidad de las vias aéreas" >
                                                <label class="form-check-label">Estado respiratorio: permeabilidad de las vias aéreas</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list34" name="list34" onclick="" value="Estado respiratorio: ventilación">
                                                <label class="form-check-label">Estado respiratorio: ventilación</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="list35" name="list35" onclick="" value="Conocimiento medicación" >
                                                <label class="form-check-label">Conocimiento medicación</label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group col-md-12  dropdown-divider"></div>
                                          <div class="row">
                                            <div class="form-group col-md-6">
                                              <label class="col-form-label"><strong>Intervenciones a realizar:</strong></label>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc1" name="lisc1" onclick="" value="Disminución de la ansiedad">
                                                <label class="form-check-label">Disminución de la ansiedad</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc2" name="lisc2" onclick="" value="Manejo de la hiperglucemia" >
                                                <label class="form-check-label">Manejo de la hiperglucemia</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc3" name="lisc3" onclick="" value="Manejo del estreñimiento / impactación" >
                                                <label class="form-check-label">Manejo del estreñimiento / impactación</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc4" name="lisc4" onclick="" value="Manejo de la nutrición" >
                                                <label class="form-check-label">Manejo de la nutrición</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc5" name="lisc5" onclick="" value="Terapia ejercicio: Ambulación" >
                                                <label class="form-check-label">Terapia ejercicio: Ambulación</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc6" name="lisc6" onclick="" value="Mejorar el sueño">
                                                <label class="form-check-label">Mejorar el sueño</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc7" name="lisc7" onclick="" value="Cuidados circulctorios: liscficiencia arterial" >
                                                <label class="form-check-label">Cuidados circulctorios: liscficiencia arterial</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc8" name="lisc8" onclick="" value="Cuidados de las heridas" >
                                                <label class="form-check-label">Cuidados de las heridas</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc9" name="lisc9" onclick="" value="Protección contra las infecciones" >
                                                <label class="form-check-label">Protección contra las infecciones</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc10" name="lisc10" onclick="" value="Tratamiento de la fiebre">
                                                <label class="form-check-label">Tratamiento de la fiebre</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc11" name="lisc11" onclick="" value="Manejo del dolor" >
                                                <label class="form-check-label">Manejo del dolor</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc12" name="lisc12" onclick="" value="Cambio de posicion" >
                                                <label class="form-check-label">Cambio de posicion</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc13" name="lisc13" onclick="" value="Manejo ambiental" >
                                                <label class="form-check-label">Manejo ambiental</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc14" name="lisc14" onclick="" value="Ayuda al autocuidado">
                                                <label class="form-check-label">Ayuda al autocuidado</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc15" name="lisc15" onclick="" value="Fisioterapia respiratoria" >
                                                <label class="form-check-label">Fisioterapia respiratoria</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc16" name="lisc16" onclick="" value="Terapia de deglución" >
                                                <label class="form-check-label">Terapia de deglución</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc17" name="lisc17" onclick="" value="Manejo de la eliminación urinaira" >
                                                <label class="form-check-label">Manejo de la eliminación urinaira</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc18" name="lisc18" onclick="" value="Terapia de ejercicios: movilidad articular">
                                                <label class="form-check-label">Terapia de ejercicios: movilidad articular</label>
                                              </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                              <br>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc19" name="lisc19" onclick="" value="Cambios de posición" >
                                                <label class="form-check-label">Cambios de posición</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc20" name="lisc20" onclick="" value="Terpia de ejercicios: equilibrio" >
                                                <label class="form-check-label">Terpia de ejercicios: equilibrio</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc21" name="lisc21" onclick="" value="Control de las infecciones" >
                                                <label class="form-check-label">Control de las infecciones</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc22" name="lisc22" onclick="" value="Disminución de la ansiedad">
                                                <label class="form-check-label">Disminución de la ansiedad</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc23" name="lisc23" onclick="" value="Ayuda al autocuidado" >
                                                <label class="form-check-label">Ayuda al autocuidado</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc24" name="lisc24" onclick="" value="Apoyo al cuidador principal: facilitar el aprendizaje" >
                                                <label class="form-check-label">Apoyo al cuidador principal: facilitar el aprendizaje</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc25" name="lisc25" onclick="" value="Apoyo al cuidador principal: facilitar pausas activas" >
                                                <label class="form-check-label">Apoyo al cuidador principal: facilitar pausas activas</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc26" name="lisc26" onclick="" value="Ayuda con los autocuidados: alimentación">
                                                <label class="form-check-label">Ayuda con los autocuidados: alimentación</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc27" name="lisc27" onclick="" value="Ayuda con los autocuidados: baño/higiene" >
                                                <label class="form-check-label">Ayuda con los autocuidados: baño/higiene</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc28" name="lisc28" onclick="" value="Mantenimiento de la salud bucal" >
                                                <label class="form-check-label">Mantenimiento de la salud bucal</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc29" name="lisc29" onclick="" value="Ayuda con los autocuidados: vestir:arreglo personal" >
                                                <label class="form-check-label">Ayuda con los autocuidados: vestir:arreglo personal</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc30" name="lisc30" onclick="" value="Manejo ante la anulación de un lado del cuerpo">
                                                <label class="form-check-label">Manejo ante la anulación de un lado del cuerpo</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc31" name="lisc31" onclick="" value="Ayuda con los autocuidados: aseo" >
                                                <label class="form-check-label">Ayuda con los autocuidados: aseo</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc32" name="lisc32" onclick="" value="Monitorización respiratoria" >
                                                <label class="form-check-label">Monitorización respiratoria</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc33" name="lisc33" onclick="" value="Oxigenoterapia" >
                                                <label class="form-check-label">Oxigenoterapia</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc34" name="lisc34" onclick="" value="Manejo de las vias aéreas">
                                                <label class="form-check-label">Manejo de las vias aéreas</label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="lisc35" name="lisc35" onclick="" value="Fisioterapia respitaroia" >
                                                <label class="form-check-label">Fisioterapia respitaroia</label>
                                              </div>
                                              <div class="form-check">
                                                 <input class="form-check-input" type="checkbox" id="lisc36" name="lisc36" onclick="" value="Enseñanza: meciamentos prescritos" >
                                                <label class="form-check-label">Enseñanza: meciamentos prescritos</label>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group col-md-12  dropdown-divider"></div>
                                  <div class="row">
                                    <div class="col-md-12 text-center" id="btngintervencion">
                                      <input type="text" class="form-control" id="nmedintervencion" name="nmedintervencion" style="display:none" value="<?php echo ucwords($this->session->userdata('s_n')).', '.ucwords($this->session->userdata('s_ap'));?>" />
                                      <input type="text" class="form-control" id="numhc4" name="numhc4" style="display:none" />
                                    </div>
                                    <div class="col-md-12 text-center" id="btnaintervencion" style="display:none">
                                      <button type="button" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarintervencion2">ACTUALIZAR</button>
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
                            <input type="text" id="nombres" id="nombres" class="form-control" onkeyup="solopac7()" />
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
    </div>
    </div>
    </div>
    <script type="text/javascript">
      window.onload = function() {
        document.title="Cons. Historias Enf | H. Clinica";
      }
    </script>