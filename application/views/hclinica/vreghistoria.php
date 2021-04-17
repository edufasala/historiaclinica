 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-7 text-right">
            <!-- <h1>Historia Clinica</h1> -->
          </div>
          <div class="col-sm-5">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Historia Clinica</a></li>
              <li class="breadcrumb-item active">Crear Historia</li>
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
                      <button class="btn btn-morado btn-lg btn-block" type="button" data-toggle="collapse" data-target="#elprinci1"
                      aria-expanded="false" aria-controls="elprinci1">
                        <h3>Historia Cl&iacutenica por Primera Vez</h3>
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
                            <label for="nombre" class="col-form-label"><strong>Segundo Nombre</strong></label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                  <span class="input-group-text">
                                      <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                                  </span>
                              </div>
                              <input type="text" class="form-control" placeholder="Nombres" id="snombre" name="snombre" />
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
                          <div class="form-group col-md-3">
                            <label for="nombre" class="col-form-label"><strong>Segundo Apellido</strong></label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                  <span class="input-group-text">
                                      <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                                  </span>
                              </div>
                              <input type="text" class="form-control" placeholder="Apellidos" id="sape" name="sape" />
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
                            <label class="col-form-label"><strong>Tipo de Vinculacion</strong></label>
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
                            <label for="nombre" class="col-form-label"><strong>Direccion:</strong></label>
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
                          <div class="form-group col-md-3">
                            <label for="nombre" class="col-form-label"><strong>Telefono Fijo:</strong></label>
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
                            <label for="nombre" class="col-form-label"><strong>Telefono Celular:</strong></label>
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
                            <label for="nombre" class="col-form-label"><strong>Ocupacion:</strong></label>
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
                            <label for="nombre" class="col-form-label"><strong>Telefono Cuidador:</strong></label>
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
                            <label for="nombre" class="col-form-label"><strong>Telefono Responsable:</strong></label>
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
                            <label for="nombre" class="col-form-label"><strong>Lugar Valoracion:</strong></label>
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
                          </div> -->
                         <!--  <div class="form-group col-md-4">
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
                              <label class="col-form-label"><strong>Motivo de Inclusion al PAD</strong></label>
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
                          <div class="form-group col-md-12 text-center">
                            <button type="button" id="btnpacienteact" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmar">ACTUALIZAR</button>
                          </div>
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
                  <button class="btn btn-morado btn-lg btn-block" type="button" data-toggle="collapse" data-target="#elprinci2"
                  aria-expanded="false" aria-controls="elprinci2">
                    <h3>Registrar Procesos de Apoyo</h3>
                  </button>
                </div>
                <div class="collapse" id="elprinci2" aria-labelledby="headiuno" data-parent="#princi2">
                 

                <div class="col-md-12">
                  <div class="card-header">
                    <ul class="nav nav-tabs nav-justified"><!-- primary btn-lg btn-block -->
                        <li class="nav-item">
                          <a class="nav-link active bg-white " id="uno" href="#multi1" data-toggle="collapse" data-target="#multi1" aria-expanded="false" aria-controls="multi1" onclick="pasar('1')"><FONT SIZE=5>HISTORIA CLINICA PRIMERA VEZ</FONT></a>
                        </li>
                        <!-- <li class="nav-item">
                          <a class="nav-link bg-primaryhc text-uppercase text-white"  id="dos" href="#multi2" data-toggle="collapse" data-target="#multi2" aria-expanded="false" aria-controls="multi2" onclick="pasar('2')"><FONT SIZE=5>Concentimiento</FONT></a>
                        </li> -->
                         <li class="nav-item">
                          <a class="nav-link bg-primaryhc text-uppercase text-white" id="tres" href="#multi3" data-toggle="collapse" data-target="#multi3" aria-expanded="false" aria-controls="multi3" onclick="pasar('3')"><FONT SIZE=5>INDICE DE BARTHEL</FONT></a>
                        </li>
                         <li class="nav-item">
                          <a class="nav-link bg-primaryhc text-uppercase text-white" id="cua" href="#multi4" data-toggle="collapse" data-target="#multi4" aria-expanded="false" aria-controls="multi4" onclick="pasar('4')"><FONT SIZE=5>VALORACION COGNITIVA</FONT></a>
                        </li>
                         <li class="nav-item">
                          <a class="nav-link bg-primaryhc text-uppercase text-white" id="cin" href="#multi5" data-toggle="collapse" data-target="#multi5" aria-expanded="false" aria-controls="multi5" onclick="pasar('5')"><FONT SIZE=5>ESCALA DE NORTON</FONT></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link bg-primaryhc text-uppercase text-white" id="sei" href="#multi6" data-toggle="collapse" data-target="#multi6" aria-expanded="false" aria-controls="multi6" onclick="pasar('6')"><FONT SIZE=5>ESCALA DE BRADEN</FONT></a>
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
                                        <input type="text" class="form-control" id="motivopadhc" name="motivopadhc" style="display:none" />
                                      </div>
                                    </div>
                                    <!-- <div class="form-group col-md-6">
                                      <label class="col-form-label"><strong>Tipo de Tratamiento</strong></label>
                                      <select class="form-control" id="" name="" >
                                        <option selected value="0">Elija</option>
                                        <option value="agudo salud en casa">agudo salud en casa</option>
                                        <option value="cronico sin enfermeria">cronico sin enfermeria</option>
                                        <option value="Paleativo">Paleativo</option>
                                      </select>
                                    </div> -->
                                    <div class="form-group col-md-12">
                                      <label class="col-form-label"><strong>Motivo Consulta:</strong></label>
                                      <textarea class="form-control" id="mconsuta" name="mconsuta" onkeypress="return cmTextoNum(event);" required></textarea>
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
                                                <textarea class="form-control" rows="8" id="enfactual" name="enfactual" onkeypress="return cmTextoNum(event);" required></textarea>
                                              </div>
                                              <div class="form-group col-md-12">
                                                <label class="col-form-label"><strong>Antecedentes Personales:</strong></label>
                                              </div>
                                              <div class="form-group col-md-6">
                                                <label class="col-form-label"><strong>Antecedentes Patológicos:</strong></label>
                                                <textarea class="form-control" id="apatologicos" name="apatologicos" onkeypress="return cmTextoNum(event);" required></textarea>
                                              </div>
                                              <div class="form-group col-md-6">
                                                <label class="col-form-label"><strong>Antecedentes Quirúrgicos:</strong></label>
                                                <textarea class="form-control" id="aquirurgicos" name="aquirurgicos" onkeypress="return cmTextoNum(event);" required></textarea>
                                              </div>
                                              <div class="form-group col-md-6">
                                                <label class="col-form-label"><strong>Antecedentes Farmacológicos:</strong></label>
                                                <textarea class="form-control" id="afarmacologicos" name="afarmacologicos" onkeypress="return cmTextoNum(event);" required></textarea>
                                              </div>
                                              <div class="form-group col-md-6">
                                                <label class="col-form-label"><strong>Antecedentes Toxico Alérgicos:</strong></label>
                                                <textarea class="form-control" id="aalergicos" name="aalergicos" onkeypress="return cmTextoNum(event);" required></textarea>
                                              </div>
                                              <div class="form-group col-md-6">
                                                <label class="col-form-label"><strong>Antecedentes Traumáticos:</strong></label>
                                                <textarea class="form-control" id="atraumaticos" name="atraumaticos" onkeypress="return cmTextoNum(event);" required></textarea>
                                              </div>
                                              <div class="form-group col-md-6">
                                                <label class="col-form-label"><strong>Antecedentes Familiares:</strong></label>
                                                <textarea class="form-control" id="afamiliares" name="afamiliares" onkeypress="return cmTextoNum(event);" required></textarea>
                                              </div>
                                              <div class="form-group col-md-6">
                                                <label class="col-form-label"><strong>Antecedentes Transfusionales:</strong></label>
                                                <textarea class="form-control" id="atransfucionales" name="atransfucionales" onkeypress="return cmTextoNum(event);" required></textarea>
                                              </div>
                                              <div class="form-group col-md-6">
                                                <label class="col-form-label"><strong>Antecedentes Ginecológicos:</strong></label>
                                                <textarea class="form-control" id="aginecologicos" name="aginecologicos" onkeypress="return cmTextoNum(event);" required></textarea>
                                              </div>
                                              <div class="form-group col-md-6">
                                                <label class="col-form-label"><strong>Antecedentes Exposicionales:</strong></label>
                                                <textarea class="form-control" id="aexposicionales" name="aexposicionales" onkeypress="return cmTextoNum(event);" required></textarea>
                                              </div>
                                              <div class="form-group col-md-6">
                                                <label class="col-form-label"><strong>Antecedentes Otros:</strong></label>
                                                <textarea class="form-control" id="aotros" name="aotros" onkeypress="return cmTextoNum(event);" required></textarea>
                                              </div>
                                              <div class="form-group col-md-12">
                                                <div class="row">
                                                <div class="form-group col-md-6 text-center "><!-- mt-4 pt-4 -->
                                                  <!-- <label class="col-form-label"><strong>Tratamiento Previo:</strong></label> -->
                                                  <span class="btn-verde">¿Marcar Sistema no Selecciondos como?</span>
                                                </div>
                                                <div class="form-group col-md-6 text-center">                                                  
                                                  <div class="row">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="elrefiere1[]" onclick="paciente_refiere_pad()" value="no refiere">
                                                      <label class="form-check-label">No Refiere</label>
                                                       <input class="forrm-control" type="text" id="auxfrpc1" name="auxfrpc1" style="display:none" >
                                                    </div>
                                                    <!-- <div class="form-group col-md-6">
                                                      <div class="form-check"><br><br>
                                                        <input class="form-check-input" type="radio"  name="elrefiere1" onclick="paciente_refiere_pad()" value="refiere">
                                                        <label class="form-check-label">Refiere</label>
                                                      </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                      <div class="form-check"><br><br>
                                                        <input class="form-check-input" type="radio"  name="elrefiere1" onclick="paciente_refiere_pad()" value="no refiere">
                                                        <label class="form-check-label">No Refiere</label>
                                                       
                                                      </div>
                                                    </div> -->
                                                  </div>
                                                </div>
                                                </div>
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
                                              Revisión Por Sistemas
                                            </button>
                                          </div>
                                          <div class="collapse" id="cspad1" aria-labelledby="headiuno" data-parent="#separa">
                                            <div class="card-body">
                                              <div class="row">
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Endocrinológico:</strong></label>
                                                  <input type="text" class="form-control" placeholder="RxS" id="endocrinologico" name="endocrinologico" minlength="2" maxlength="100" pattern="\S[A-Za-z0-9 ]{2,100}" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Organos de los Sentidos:</strong></label>
                                                  <input type="text" class="form-control" placeholder="RxS" id="organos" name="organos" minlength="2" maxlength="100" pattern="\S[A-Za-z0-9 ]{2,100}" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Cardio pulmonar:</strong></label>
                                                  <input type="text" class="form-control" placeholder="RxS" id="cardiopulmonar" name="cardiopulmonar" minlength="2" maxlength="100" pattern="\S[A-Za-z0-9 ]{2,100}" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Gastrointestinal:</strong></label>
                                                  <input type="text" class="form-control" placeholder="RxS" id="gastrointestinal" name="gastrointestinal" minlength="2" maxlength="100" pattern="\S[A-Za-z0-9 ]{2,100}" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Genitourinario:</strong></label>
                                                  <input type="text" class="form-control" placeholder="RxS" id="rvsgenitourinario" name="rvsgenitourinario" minlength="2" maxlength="100" pattern="\S[A-Za-z0-9 ]{2,100}" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Osteomuscular:</strong></label>
                                                  <input type="text" class="form-control" placeholder="RxS" id="osteomuscular" name="osteomuscular" minlength="2" maxlength="100" pattern="\S[A-Za-z0-9 ]{2,100}" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Neurológico:</strong></label>
                                                  <input type="text" class="form-control" placeholder="RxS" id="neurologico" name="neurologico" minlength="2" maxlength="100" pattern="\S[A-Za-z0-9 ]{2,100}" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Piel y Farenas:</strong></label>
                                                  <input type="text" class="form-control" placeholder="RxS" id="farenas" name="farenas" minlength="2" maxlength="100" pattern="\S[A-Za-z0-9 ]{2,100}" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Otros:</strong></label>
                                                  <input type="text" class="form-control" placeholder="RxS" id="rvsotros" name="rvsotros" minlength="2" maxlength="100" pattern="\S[A-Za-z0-9 ]{2,100}" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                </div>
                                                <div class="form-group col-md-6 text-center ">
                                                  <span class="btn-verde">¿Marcar Sistema no Seleccionados Como?</span>
                                                </div>
                                                <div class="form-group col-md-6 text-center">                                                  
                                                  <div class="row">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="elrefiere2[]" onclick="paciente_refiere_pad2()" value="no refiere">
                                                      <label class="form-check-label">No Refiere</label>
                                                      <input class="forrm-control" type="text" id="auxfrpc2" name="auxfrpc2" style="display:none" >
                                                    </div>
                                                    <!-- <div class="form-group col-md-6">
                                                      <div class="form-check"><br><br>
                                                        <input class="form-check-input" type="radio"  name="elrefiere2" onclick="paciente_refiere_pad2()" value="refiere">
                                                        <label class="form-check-label">Refiere</label>
                                                      </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                      <div class="form-check"><br><br>
                                                        <input class="form-check-input" type="radio"  name="elrefiere2" onclick="paciente_refiere_pad2()" value="no refiere">
                                                        <label class="form-check-label">No Refiere</label>
                                                        
                                                      </div>
                                                    </div> -->
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                      <div class="card">
                                        <div class="card-header" id="headidos">
                                            <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#cspad2"
                                            aria-expanded="false" aria-controls="cspad2">
                                              Examen Físico
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
                                                    <option value="5">Obnubilado</option>
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
                                                  <input type="text" class="form-control" placeholder="Bien, Malo, Regular" id="erespiratorio" name="erespiratorio" minlength="2" maxlength="200" pattern="\S[A-Za-z ]{2,200}" required />
                                                </div>
                                                <div class="form-group col-md-4">
                                                  <label class="col-form-label"><strong>Frecuencia Cardíaca</strong></label>
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
                                                  <label class="col-form-label"><strong>Sístole</strong></label>  
                                                  <input type="text" class="form-control" placeholder="" id="sis" name="sis" onkeyup="sumartensionarterial();" minlength="1" maxlength="6" pattern="\S[A-Za-z0-9 ]{1,6}" required />
                                                  <label class="col-form-label"><strong>Diástole</strong></label>
                                                  <input type="text" class="form-control" placeholder="" id="dias" name="dias" onkeyup="sumartensionarterial();" minlength="1" maxlength="6" pattern="\S[A-Za-z0-9 ]{1,6}" required />
                                                  <label class="col-form-label"><strong>TENSION ARTERIAL:</strong></label>
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
                                                  <label class="col-form-label"><strong>Saturación</strong></label>
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
                                                  <input type="text" class="form-control" placeholder="" id="cabeza" name="cabeza" minlength="2" maxlength="200" pattern="\S[A-Za-z ]{2,200}" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Ojos:</strong></label>
                                                  <input type="text" class="form-control" placeholder="" id="ojos" name="ojos" minlength="2" maxlength="200" pattern="\S[A-Za-z ]{2,200}" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Boca - Mucosa oral:</strong></label>
                                                  <input type="text" class="form-control" placeholder="" id="boca" name="boca" minlength="2" maxlength="200" pattern="\S[A-Za-z ]{2,200}" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Cuello:</strong></label>
                                                  <input type="text" class="form-control" placeholder="" id="cuello" name="cuello" minlength="2" maxlength="200" pattern="\S[A-Za-z ]{2,200}" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Torax/Mamas:</strong></label>
                                                  <input type="text" class="form-control" placeholder="" id="torax" name="torax" minlength="2" maxlength="200" pattern="\S[A-Za-z ]{2,200}" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Cardio Pulmonar:</strong></label>
                                                  <input type="text" class="form-control" placeholder="" id="cpulmonar" name="cpulmonar" minlength="2" maxlength="200" pattern="\S[A-Za-z ]{2,200}" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Abdomen:</strong></label>
                                                  <input type="text" class="form-control" placeholder="" id="abdomen" name="abdomen" minlength="2" maxlength="200" pattern="\S[A-Za-z ]{2,200}" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Genitourinario:</strong></label>
                                                  <input type="text" class="form-control" placeholder="" id="genitourinario" name="genitourinario" minlength="2" maxlength="200" pattern="\S[A-Za-z ]{2,200}" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Extremidades:</strong></label>
                                                  <input type="text" class="form-control" placeholder="" id="extremidades" name="extremidades" minlength="2" maxlength="200" pattern="\S[A-Za-z ]{2,200}" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>SNC:</strong></label>
                                                  <input type="text" class="form-control" placeholder="" id="snc" name="snc" minlength="2" maxlength="200" pattern="\S[A-Za-z ]{2,200}" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Mental:</strong></label>
                                                  <input type="text" class="form-control" placeholder="" id="mental" name="mental" minlength="2" maxlength="200" pattern="\S[A-Za-z ]{2,200}" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Piel:</strong></label>
                                                  <input type="text" class="form-control" placeholder="" id="piel" name="piel" minlength="2" maxlength="200" pattern="\S[A-Za-z ]{2,200}" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Otros:</strong></label>
                                                  <input type="text" class="form-control" placeholder="" id="otros" name="otros" minlength="2" maxlength="200" pattern="\S[A-Za-z ]{2,200}" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                </div>
                                                <div class="form-group col-md-8 text-center">
                                                  <span class="btn-verde">¿Marcar Como normal las Partes no Especificadas?</span>
                                                </div>
                                                <div class="form-group col-md-4 text-center">                                                  
                                                  <div class="row">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" name="elrefiere3[]" onclick="paciente_refiere_pad3()" value="normal">
                                                      <label class="form-check-label">Normal</label>
                                                      <input class="forrm-control" type="text" id="auxfrpc3" name="auxfrpc3" style="display:none" >
                                                    </div>
                                                    <!-- <div class="form-group col-md-6">
                                                      <div class="form-check"><br><br>
                                                        <input class="form-check-input" type="radio"  name="elrefiere3" onclick="paciente_refiere_pad3()" value="refiere">
                                                        <label class="form-check-label">Refiere</label>
                                                      </div>
                                                    </div> -->
                                                    <!-- <div class="form-group col-md-6">
                                                      <div class="form-check"><br><br>
                                                        <input class="form-check-input" type="radio"  name="elrefiere3" onclick="paciente_refiere_pad3()" value="no refiere">
                                                        <label class="form-check-label">No Refiere</label>
                                                        
                                                      </div>
                                                    </div> -->
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                    </div>  
                                  </div>
                                </div>
                                <div class="collapse multi-collapse collapse" id="op3" name="op3" data-parent="#accordion3">
                                  <div class="form-row">
                                    <div class="form-group col-md-12">
                                      <label class="col-form-label"><strong>Pag. 3 - Ingreso Pad</strong></label>
                                    </div>
                                    <div class="accordion form-group col-md-12" id="separa2">
                                      <div class="card">
                                        <div class="card-header" id="headiuno">
                                            <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#cspad3"
                                            aria-expanded="false" aria-controls="cspad3">
                                              Acceso Venoso, Ostomía, Sondas
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
                                                          <input class="form-check-input" type="checkbox" name="acceso_venoso_general[]" onclick="verificacheckpad_individual1()" value="No Selecciona">
                                                          <label class="form-check-label">No Selecciona</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" id="acceso_venoso1" name="acceso_venoso[]" onclick="verificachekpad_accvn1()"  value="Periférico" >
                                                          <label class="form-check-label">Periférico</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" id="acceso_venoso2" name="acceso_venoso[]" onclick="verificachekpad_accvn1()"  value="Central Subclavio">
                                                          <label class="form-check-label">Central Subclavio</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" id="acceso_venoso3" name="acceso_venoso[]" onclick="verificachekpad_accvn1()"  value="Central Yugular" >
                                                          <label class="form-check-label">Central Yugular</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" id="acceso_venoso4" name="acceso_venoso[]" onclick="verificachekpad_accvn1()" value="Central Femoral">
                                                          <label class="form-check-label">Central Femoral</label>
                                                        </div>
                                                        <div class="form-group"></br>
                                                          <label class="col-form-label">Estado Catéter</label>
                                                          <input type="text" class="form-control" id="accateter" name="accateter" placeholeder="activo" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="acceso_venoso5" name="acceso_venoso[]" onclick="verificachekpad_accvn1()"  value="Drum" >
                                                        <label class="form-check-label">Drum</label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="acceso_venoso6" name="acceso_venoso[]" onclick="verificachekpad_accvn1()"  value="PVC">
                                                        <label class="form-check-label">PVC</label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="acceso_venoso7" name="acceso_venoso[]" onclick="verificachekpad_accvn1()"  value="Implantado" >
                                                        <label class="form-check-label">Implantado</label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="acceso_venoso8" name="acceso_venoso[]" onclick="verificachekpad_accvn1()"  value="Subcutáneo" >
                                                        <label class="form-check-label">Subcutáneo</label>
                                                      </div>
                                                      <div class="form-group"></br></br>
                                                        <label class="col-form-label">Fecha Inserción</label>
                                                        <input class="form-control" type="text" placeholder="dd/mm/aaaa" id="acfinsercion" name="acfinsercion" style="display:" >
                                                        <input class="form-control" type="text" id="auxvenoso" name="auxvenoso" style="display:none" >
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label"><strong>Ostomía:</strong></label>
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="ostomina_general[]" onclick="verificacheckpad_individual2()" value="No Selecciona">
                                                        <label class="form-check-label">No Selecciona</label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="ostomina1" name="ostomina[]" onclick="verificachekpad_accvn2()"  value="Traqueostomía" >
                                                        <label class="form-check-label">Traqueostomía</label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="ostomina2" name="ostomina[]" onclick="verificachekpad_accvn2()"  value="Yeyunostomía">
                                                        <label class="form-check-label">Yeyunostomía</label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="ostomina4" name="ostomina[]" onclick="verificachekpad_accvn2()" value="Ileostomía">
                                                        <label class="form-check-label">Ileostomía</label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="ostomina5" name="ostomina[]" onclick="verificachekpad_accvn2()"  value="Urostomía" >
                                                        <label class="form-check-label">Urostomía</label>
                                                      </div>
                                                      <div class="form-group"></br>
                                                        <label class="col-form-label">Estado Ostomía</label>
                                                        <input type="text" class="form-control" id="oeostomina" name="oeostomina" placeholeder="activo" />
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="ostomina6" name="ostomina[]" onclick="verificachekpad_accvn2()"  value="Colostomía">
                                                        <label class="form-check-label">Colostomía</label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="ostomina3" name="ostomina[]" onclick="verificachekpad_accvn2()"  value="Otra" >
                                                        <label class="form-check-label">Otra</label>
                                                      </div>
                                                      <div class="form-group">
                                                        <label class="col-form-label">Cual ?</label>
                                                        <input type="text" class="form-control" id="ocualostomina" name="ocualostomina" placeholeder="activo" />
                                                      </div>
                                                      <div class="form-group">
                                                        <label class="col-form-label">Fecha Ostomía</label>
                                                        <input class="form-control" type="text" placeholder="dd/mm/aaaa" id="ofostomina" name="ofostomina" style="display:" >
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
                                                          <input class="form-check-input" type="checkbox" name="vesical_general[]" onclick="verificacheckpad_individual3()" value="No Selecciona">
                                                          <label class="form-check-label">No Selecciona</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" id="vesical1" name="vesical[]" onclick="verificachekpad_accvn3()"  value="Nasogástrica" >
                                                          <label class="form-check-label">Nasogástrica</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" id="vesical2" name="vesical[]" onclick="verificachekpad_accvn3()"  value="Nasoyeyunal">
                                                          <label class="form-check-label">Nasoyeyunal</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" id="vesical3" name="vesical[]" onclick="verificachekpad_accvn3()"  value="Gastrostomía" >
                                                          <label class="form-check-label">Gastrostomía</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" id="vesical5" name="vesical[]" onclick="verificachekpad_accvn3()"  value="Yeyunostomía" >
                                                          <label class="form-check-label">Yeyunostomía</label>
                                                        </div>
                                                        <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="vesical6" name="vesical[]" onclick="verificachekpad_accvn3()"  value="Cistostomía">
                                                          <label class="form-check-label">Cistostomía</label>
                                                        </div>
                                                        <div class="form-group">
                                                          <label class="col-form-label">Estado</label>
                                                          <input type="text" class="form-control" id="sondaestado" name="sondaestado" placeholeder="activo" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                      <div class="form-check"></div>                            
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="vesical7" name="vesical[]" onclick="verificachekpad_accvn3()"  value="Vesical" >
                                                        <label class="form-check-label">Vesical</label>
                                                      </div>
                                                      <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" id="vesical4" name="vesical[]" onclick="verificachekpad_accvn3()" value="Otra">
                                                          <label class="form-check-label">Otra</label>
                                                        </div>
                                                      <div class="form-group">
                                                          <label class="col-form-label">Cual ?</label>
                                                          <input type="text" class="form-control" id="cualsonda" name="cualsonda" placeholeder="activo" />
                                                        </div>
                                                      <div class="form-group">
                                                        <label class="col-form-label">Fecha Postura</label>
                                                        <input class="form-control" type="text" placeholder="dd/mm/aaaa" id="sfpostura" name="sfpostura" style="display:" >
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
                                                  <label class="col-form-label">Región</label>
                                                  <input type="text" class="form-control" id="edregion" name="edregion" placeholeder="activo" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label class="col-form-label">Irradiación</label>
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
                                                  <input type="range" class="form-control-range" id="dolorn" name="dolorn" value="0" min="0" max="10" step="1" onchange="mostrarimgescala()">
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
                                                          <input class="form-check-input" type="checkbox" name="tipodolor_general[]" onclick="verificacheckpad_individual4()" value="No Selecciona">
                                                          <label class="form-check-label">No Selecciona</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" id="tipodolor1" name="tipodolor[]" onclick="verificachekpad_accvn4()"  value="Visceral" >
                                                          <label class="form-check-label">Visceral</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" id="tipodolor2" name="tipodolor[]" onclick="verificachekpad_accvn4()"  value="Óseo">
                                                          <label class="form-check-label">Óseo</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" id="tipodolor3" name="tipodolor[]" onclick="verificachekpad_accvn4()"  value="Tejidos Blandos" >
                                                          <label class="form-check-label">Tejidos Blandos</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" id="tipodolor4" name="tipodolor[]" onclick="verificachekpad_accvn4()" value="Neuropático">
                                                          <label class="form-check-label">Neuropático</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" id="tipodolor5" name="tipodolor[]" onclick="verificachekpad_accvn4()"  value="Mixto" >
                                                          <label class="form-check-label">Mixto</label>
                                                        </div>
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" id="tipodolor6" name="tipodolor[]" onclick="verificachekpad_accvn4()"  value="Incidental">
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
                                                        <input class="form-check-input" type="radio"  name="tprevio" id="tprevio1" onclick="verificaradiopad_individual1()" value="si">
                                                        <label class="form-check-label">Si</label>
                                                      </div>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                      <div class="form-check"><br><br>
                                                        <input class="form-check-input" type="radio"  name="tprevio" id="tprevio2" onclick="verificaradiopad_individual1()" value="no">
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
                                                  <label class="col-form-label"><strong>Resultados Ultimos Paraclinicos:</strong></label>
                                                  <textarea class="form-control" id="uparaclinico" name="uparaclinico" required></textarea>
                                                </div>
                                                <div class="form-group col-md-12">
                                                  <label class="col-form-label"><strong>Plan de Manejo Medico Actual:</strong></label>
                                                  <textarea class="form-control" id="planmedicoactual" name="planmedicoactual" required></textarea>
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
                                                    <label class="form-label">Programa al que ingresa:</label>
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
                                                            <input class="form-check-input" type="radio"  name="noxigeno" onclick="verificaradiopad_individual2()" value="si">
                                                            <label class="form-check-label">Si</label>
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                          <div class="form-check"><br><br>
                                                            <input class="form-check-input" type="radio"  name="noxigeno" onclick="verificaradiopad_individual2()" value="no">
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
                                                <div class="form-group col-md-5">
                                                  <label class="col-form-label"><strong>Buscar Medicamentos:</strong></label>
                                                  <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text">
                                                        <img src="<?php echo base_url();?>assets/img/iconos/ver.png" class="rounded-circle" width="22px" height="22px">
                                                      </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="bmedicamentos" onkeyup="buscomedicamentos()" />
                                                  </div>
                                                </div>
                                                <div class="form-group col-md-6" id="llenarselectmed">
                                                  <label class="col-form-label"><strong>Seleccione:</strong></label>
                                                </div>
                                                <div class="form-group col-md-4">
                                                  <label>Dosis</label>
                                                  <input type="text" class="form-control" id="dosis" />
                                                </div>
                                                <div class="form-group col-md-4">
                                                  <label>Vía</label>
                                                  <input type="text" class="form-control" id="via" />
                                                </div>
                                                <div class="form-group col-md-4">
                                                  <label>Frecuencia</label>
                                                  <input type="text" class="form-control" id="frecuencia" />
                                                </div>
                                                <div class="form-group col-md-3">
                                                  <label>Dilución</label>
                                                  <input type="text" class="form-control" id="dilusion" />
                                                </div>
                                                <div class="form-group col-md-4">
                                                  <label>Solución</label>
                                                  <input type="text" class="form-control" id="solucion" />
                                                </div>
                                                <div class="form-group col-md-4">
                                                  <label>Tiempo Administración</label>
                                                  <input type="text" class="form-control" id="tiempoa" />
                                                </div>
                                                <div class="form-group col-md-1">
                                                  <label for="" class="col-form-label"><strong>Agregar</strong></label>
                                                  <input type="text" class="form-control" id="contadorM" name="contadorM" style="display:none" />
                                                  <button type="button" class="btn btn-primary" onclick="Admed()"> + </button>
                                                </div>
                                                <div class="form-group col-md-12 text-center" id="carga" style="display:none">
                                                  <div class="d-flex align-items-center">
                                                      <strong><span class="alert-info">Cargando Cie...</span></strong>
                                                     <div class="spinner-border ml-auto text-info" role="status" aria-hidden="true"></div>
                                                  </div>
                                                </div>
                                                <div class="form-group col-md-12" id="">
                                                  <div class="row">
                                                    <div class="form-group col-md-10">
                                                      <label class="col-form-label"><strong>Medicamentos Agregados:</strong></label>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                      <!-- <label class="col-form-label"><strong>Opcion</strong></label> -->
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="form-group col-md-12 table-responsive">
                                                      <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                              <th>Nombre</th>
                                                              <th>Dosis</th>
                                                              <th>Vía</th>
                                                              <th>Frecuencia</th>
                                                              <th>Dilución</th>
                                                              <th>Solución</th>
                                                              <th>T. Admin.</th>
                                                              <th>Opcion</th>
                                                            </tr>
                                                        </thead>
                                                      </table>
                                                    </div>
                                                  </div>
                                                  <div class="row" id="escreado">
                                                    
                                                  </div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                  <label class="col-form-label"><strong>Análisis:</strong></label>
                                                  <!-- <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text">
                                                        <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                                                      </span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder=""  minlength="2" maxlength="35" pattern="\S[A-Za-z]{2,35}" required />
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
                                              Diagnósticos
                                            </button>
                                          </div>
                                          <div class="collapse" id="cspad6" aria-labelledby="headiuno" data-parent="#separa3">
                                            <div class="card-body">
                                              <div class="row">
                                                <div class="form-group col-md-5">
                                                  <label class="col-form-label"><strong>Buscar Diagnóstico:</strong></label>
                                                  <div class="input-group">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text">
                                                        <img src="<?php echo base_url();?>assets/img/iconos/ver.png" class="rounded-circle" width="22px" height="22px">
                                                      </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="bdig" onkeyup="buscodiagnosticos()" />
                                                  </div>
                                                </div>
                                                <div class="form-group col-md-6" id="llenarselect">
                                                  <label class="col-form-label"><strong>Seleccione:</strong></label>
                                                  <?php
                                                  // require_once('../enlace.php');
                                                  // $SqlConsultar="SELECT * FROM cie";
                                                  // if($datos=mysqli_query($enlace,$SqlConsultar))
                                                  // {
                                                  //   echo '<select class="form-control" id="creadodig">';
                                                  //   while ($fila=mysqli_fetch_array($datos))
                                                  //   {
                                                  //     echo '<option value="'.utf8_encode($fila['cod_desc_cie']).'" >'.utf8_encode($fila['descripcion_cie']).'</option>';
                                                  //   }
                                                  //   echo '</select>';
                                                  // }
                                                  ?>
                                                </div>
                                                <div class="form-group col-md-1">
                                                  <label for="" class="col-form-label"><strong>Agregar</strong></label>
                                                  <input type="text" class="form-control" id="contadorD" name="contadorD" style="display:none" />
                                                  <button type="button" class="btn btn-primary" onclick="Adiagn()"> + </button>
                                                </div>
                                                <div class="form-group col-md-12 text-center" id="carga" style="display:none">
                                                  <div class="d-flex align-items-center">
                                                      <strong><span class="alert-info">Cargando Cie...</span></strong>
                                                     <div class="spinner-border ml-auto text-info" role="status" aria-hidden="true"></div>
                                                  </div>
                                                </div>
                                                <div class="form-group col-md-12" id="">
                                                  <div class="row">
                                                    <div class="form-group col-md-11">
                                                      <label class="col-form-label"><strong>Diagnosticos Agregados</strong></label>
                                                    </div>
                                                    <div class="form-group col-md-1">
                                                      <label class="col-form-label"><strong>Opcion</strong></label>
                                                    </div>
                                                  </div>
                                                  <div class="row" id="escreado2">
                                                    
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                      <div class="card">
                                        <div class="card-header" id="headidos">
                                            <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#cspad7"
                                            aria-expanded="false" aria-controls="cspad7">
                                              Determinación de atención y manejo
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
                                                                <input class="form-check-input" type="radio"  name="snmedico" id="snmedico1" onclick="verificaradiopad_individual4()" value="si">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="snmedico" id="snmedico2" onclick="verificaradiopad_individual4()" value="no">
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
                                                                <input class="form-check-input" type="radio"  name="snenfermera" id="snenfermera1" onclick="verificaradiopad_individual5()" value="si">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="snenfermera" id="snenfermera2" onclick="verificaradiopad_individual5()" value="no">
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
                                                       <!-- <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="aycenfermera[]" onclick="verificachekpad()" value="No Selecciona">
                                                          <label class="form-check-label">No Selecciona</label>
                                                        </div> -->
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                      <label class="col-form-label text-uppercase"><strong>Trabajo Social:</strong></label>
                                                      <div class="row">
                                                        <div class="form-group col-md-6">                                                  
                                                          <div class="row">
                                                            <div class="form-group col-md-6">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="sntrabajosocial" id="sntrabajosocial1" onclick="verificaradiopad_individual6()" value="si">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="sntrabajosocial" id="sntrabajosocial2" onclick="verificaradiopad_individual6()" value="no">
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
                                                                <input class="form-check-input" type="radio"  name="snnutricion" id="snnutricion1" onclick="verificaradiopad_individual7()" value="si">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="snnutricion" id="snnutricion2" onclick="verificaradiopad_individual7()" value="no">
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
                                                                <input class="form-check-input" type="radio"  name="snfisioterapia" id="snfisioterapia1" onclick="verificaradiopad_individual8()" value="si">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="snfisioterapia" id="snfisioterapia2" onclick="verificaradiopad_individual8()" value="no">
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
                                                                <input class="form-check-input" type="radio"  name="sntrespiratoria" id="sntrespiratoria1" onclick="verificaradiopad_individual9()" value="si">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="sntrespiratoria" id="sntrespiratoria2" onclick="verificaradiopad_individual9()" value="no">
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
                                                                <input class="form-check-input" type="radio"  name="sntocupacional" id="sntocupacional1" onclick="verificaradiopad_individual10()" value="si">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="sntocupacional" id="sntocupacional2" onclick="verificaradiopad_individual10()" value="no">
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
                                                                <input class="form-check-input" type="radio"  name="sntlenguaje" id="sntlenguaje1" onclick="verificaradiopad_individual11()" value="si">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="sntlenguaje" id="sntlenguaje2" onclick="verificaradiopad_individual11()" value="no">
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
                                                    <div class="form-group col-md-12">
                                                      <label class="col-form-label text-uppercase"><strong>Aux. Enfermeria:</strong></label>
                                                      <div class="row">
                                                        <div class="form-group col-md-6">                                                  
                                                          <div class="row">
                                                            <div class="form-group col-md-6">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="snauxenfermeria" id="snauxenfermeria1" onclick="verificaradiopad_individual12()" value="si">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="snauxenfermeria" id="snauxenfermeria2" onclick="verificaradiopad_individual12()" value="no">
                                                                <label class="form-check-label">No</label>
                                                                <input type="text" class="form-control" id="auxauxenfermeria" name="auxauxenfermeria" style="display:none"/>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Detalle</label>
                                                             <textarea class="form-control" id="otroenfermeria" name="otroenfermeria" required></textarea>                                                        </div>
                                                      </div>  
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                      <label class="col-form-label text-uppercase"><strong>Educacion:</strong></label>
                                                      <div class="row">
                                                        <div class="form-group col-md-6">                                                  
                                                          <div class="row">
                                                            <div class="form-group col-md-6">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="sneducacion" id="sneducacion1" onclick="verificaradiopad_individual13()" value="si">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="sneducacion" id="sneducacion2" onclick="verificaradiopad_individual13()" value="no">
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
                                                                <input class="form-check-input" type="radio"  name="snparaclinicos" id="snparaclinicos1" onclick="verificaradiopad_individual14()" value="si">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="snparaclinicos" id="snparaclinicos2" onclick="verificaradiopad_individual14()" value="no">
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
                                                    <div class="form-group col-md-8 text-center ">
                                                      <span class="btn-verde">¿Marcar Como no Refiere las Partes No Especificadas?</span>
                                                    </div>
                                                    <div class="form-group col-md-4 text-center">                                                  
                                                      <div class="row">
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" name="elrefiere7[]" onclick="paciente_refiere_pad7()" value="no refiere">
                                                          <label class="form-check-label">No Refiere</label>
                                                          <input class="forrm-control" type="text" id="auxfrpc7" name="auxfrpc7" style="display:none" >
                                                        </div>
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
                                            <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#cspad8"
                                            aria-expanded="false" aria-controls="cspad8">
                                              ESAS (24H)
                                            </button>
                                          </div>
                                          <div class="collapse" id="cspad8" aria-labelledby="headidos" data-parent="#separa3">
                                            <div class="card-body">
                                              <div>
                                                <div class="row">
                                                  <div class="form-group col-md-6 text-center mt-4 pt-4">
                                                    <span class="btn-verde">¿El Paciente ?</span>
                                                  </div>
                                                  <div class="form-group col-md-6 text-center">                                                  
                                                    <div class="row">
                                                      <div class="form-group col-md-6">
                                                        <div class="form-check"><br><br>
                                                          <input class="form-check-input" type="radio"  name="elrefiere4" onclick="paciente_refiere_pad4()" value="aplica">
                                                          <label class="form-check-label">Aplica</label>
                                                        </div>
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <div class="form-check"><br><br>
                                                          <input class="form-check-input" type="radio"  name="elrefiere4" onclick="paciente_refiere_pad4()" value="no aplica">
                                                          <label class="form-check-label">No Aplica</label>
                                                          <input class="forrm-control" type="text" id="auxfrpc4" name="auxfrpc4" style="display:none" >
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
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
                                                    <input type="range" class="form-control-range" id="esasdolor" name="esasdolor" value="0" min="0" max="10" step="1">
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
                                                    <input type="range" class="form-control-range" id="esascansancio" name="esascansancio" readonly="" value="0" min="0" max="10" step="1">
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
                                                    <input type="range" class="form-control-range" id="esasnauseas" name="esasnauseas" value="0" min="0" max="10" step="1">
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
                                                    <input type="range" class="form-control-range" id="esastristesa" name="esastristesa" value="0" min="0" max="10" step="1">
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
                                                    <input type="range" class="form-control-range" id="esasangustia" name="esasangustia" value="0" min="0" max="10" step="1">
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
                                                    <input type="range" class="form-control-range" id="esassomnolencia" name="esassomnolencia" value="0" min="0" max="10" step="1">
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
                                                    <input type="range" class="form-control-range" id="esasapetito" name="esasapetito" value="0" min="0" max="10" step="1">
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
                                                    <input type="range" class="form-control-range" id="esasdisnea" name="esasdisnea" value="0" min="0" max="10" step="1">
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
                                                    <input type="range" class="form-control-range" id="esasinsomnio" name="esasinsomnio" value="0" min="0" max="10" step="1">
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
                                                    <input type="range" class="form-control-range" id="esasestrenimiento" name="esasestrenimiento" value="0" min="0" max="10" step="1">
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
                                                    <input type="range" class="form-control-range" id="esasbienestar" name="esasbienestar" value="0" min="0" max="10" step="1">
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
                                                  <div class="form-group col-md-6 text-center mt-4 pt-4">
                                                    <span class="btn-verde">¿El Paciente ?</span>
                                                  </div>
                                                  <div class="form-group col-md-6 text-center">                                                  
                                                    <div class="row">
                                                      <div class="form-group col-md-6">
                                                        <div class="form-check"><br><br>
                                                          <input class="form-check-input" type="radio"  name="elrefiere5" onclick="paciente_refiere_pad5()" value="aplica">
                                                          <label class="form-check-label">Aplica</label>
                                                        </div>
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <div class="form-check"><br><br>
                                                          <input class="form-check-input" type="radio"  name="elrefiere5" onclick="paciente_refiere_pad5()" value="no aplica">
                                                          <label class="form-check-label">No Aplica</label>
                                                          <input class="forrm-control" type="text" id="auxfrpc5" name="auxfrpc5" style="display:none" >
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
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
                                                    <input type="range" size="20" class="form-control-range" id="ecafdisconfort" name="ecafdisconfort"  value="0" min="0" max="4" step="1">
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
                                                    <input type="range" class="form-control-range" id="ecafquebido" name="ecafquebido"  value="0" min="0" max="4" step="1">
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
                                                    <input type="range" class="form-control-range" id="ecafgrito" name="ecafgrito" value="0" min="0" max="4" step="1">
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
                                                    <input type="range" class="form-control-range" id="ecafarea" name="ecafarea" value="0" min="0" max="4" step="1">
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
                                                    <input type="range" class="form-control-range" id="ecafmovimiento" name="ecafmovimiento" value="0" min="0" max="4" step="1">
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
                                                    <input type="range" class="form-control-range" id="ecafrespiracion" name="ecafrespiracion" value="0" min="0" max="4" step="1">
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="form-group col-md-4">
                                                    <label for="formControlRange">Total</label>
                                                    <input type="text" class="form-control" placeholder="/24" id="ecaftotal" name="ecaftotal" readonly="" />
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
                                                        <input type="text" class="form-control" placeholder="" id="ik" name="ik" minlength="1" maxlength="6" pattern="\S[0-9A-Za-z, ]{1,6}" required />
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
                                                        <input type="text" class="form-control" placeholder="" id="ecog" name="ecog" minlength="1" maxlength="8" pattern="\S[A-Za-z0-9,. ]{1,8}" required />
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
                                                        <input type="text" class="form-control" placeholder="" id="cam" name="cam" minlength="1" maxlength="6" pattern="\S[A-Za-z0-9,. ]{1,6}" required />
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
                                                      <textarea class="form-control" id="observaciones" name="observaciones" onkeypress="return cmTextoNum(event);" required></textarea>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-md-8 text-center" id="btningresarpad">
                                      <button type="button" id="btnguardarpad" class="btn btn-azul"  data-dismiss="modal" data-toggle="modal" data-target="#confirmarpad">GUARDAR</button>
                                      <input type="text" class="form-control" id="fechai" name="fechai" style="display:none">
                                    </div>
                                    <div class="col-md-8 text-center" id="btnactualizarpad" style="display:none">
                                      <button type="button" id="btnguardarpad2" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarpad2">ACTUALIZAR</button>
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
                    <!-- <div class="collapse multi-collapse collapse" id="multi2" data-parent="#accordion2">
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
                                      <input type="text" class="form-control" placeholder="nombre cuidador" id="nombre_cuidador" name="nombre_cuidador" minlength="1" maxlength="35" pattern="\S[A-Za-z0-9,. ]{1,35}" required />
                                    </div>
                                    <div class="form-group col-md-4">
                                      <select class="form-control" id="tdoccuidador" name="tdoccuidador" >
                                        <option selected value="0">Elija</option>
                                        <option value="C.C">C.C</option>
                                      </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                      <input type="text" class="form-control" placeholder="N° documento" id="doccuidaor" name="doccuidaor" minlength="1" maxlength="10" pattern="\S[A-Za-z0-9,. ]{1,10}" required />
                                    </div>
                                    <div class="form-group col-md-5">
                                      <label>o Como responsable y cuidador del paciente</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" placeholder="El otro" id="otroresponsable" name="otroresponsable" minlength="1" maxlength="100" pattern="\S[A-Za-z0-9,. ]{1,100}" required />
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
                                    <div class="form-group col-md-4">
                                      <button type="button" class="btn btn-primary" onclick="traerdiagnosticos()">Traer Diagnosticos</button>
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
                                      <textarea class="form-control" id="pronostico" name="pronostico" onkeypress="return cmTextoNum(event);" required></textarea>
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
                                      <textarea class="form-control" id="materiales" name="materiales" onkeypress="return cmTextoNum(event);" required></textarea>
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
                                      <textarea class="form-control" id="disentimiento" name="disentimiento" onkeypress="return cmTextoNum(event);" required></textarea>
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
                                  <div class="row">
                                  <div class="col-md-8 text-center" id="btngconcentimiento">
                                    <button type="button" id="btnguardarconcentimiento" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarconcentimiento">GUARDAR</button>
                                    <input type="text" class="form-control" id="fechai2" name="fechai2" style="display:none">
                                  </div>
                                  <div class="col-md-8 text-center" id="btnaconcentimiento" style="display:none">
                                    <button type="button" id="btnguardarconcentimiento2" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarconcentimiento2">ACTUALIZAR</button>
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
                              <!-- <div class="col-md-12">
                                <div class="row">
                                  <div class="form-group col-md-6 text-center mt-4 pt-4">
                                    <span class="btn-verde">¿El Paciente ?</span>
                                  </div>
                                  <div class="form-group col-md-6 text-center">                                                  
                                    <div class="row">
                                      <div class="form-group col-md-6">
                                        <div class="form-check"><br><br>
                                          <input class="form-check-input" type="radio"  name="elrefiere6" onclick="paciente_refiere_pad6()" value="refiere">
                                          <label class="form-check-label">Refiere</label>
                                        </div>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <div class="form-check"><br><br>
                                          <input class="form-check-input" type="radio"  name="elrefiere6" onclick="paciente_refiere_pad6()" value="no refiere">
                                          <label class="form-check-label">No Refiere</label>
                                          <input class="forrm-control" type="text" id="auxfrpc6" name="auxfrpc6" style="display:none" >
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div> -->
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
                                          <input class="form-check-input" type="radio" id="btcomer1" name="btcomer" onclick="verificaradiobarthel()" value="10">
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
                                          <input class="form-check-input" type="radio" id="btcomer2" name="btcomer" onclick="verificaradiobarthel()" value="5">
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
                                          <input class="form-check-input" type="radio" id="btcomer3" name="btcomer" onclick="verificaradiobarthel()" value="0">
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
                                        <label for="">Capaz de entrar a la ducha por si solo, bañarse en un tiempo razonable, secar su cuerpo y salir del baño por si mismo</label>
                                      </div>
                                      <div class="form-group col-md-1">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" id="btbanarse1" name="btbanarse" onclick="verificaradiobarthel()" value="5">
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
                                          <input class="form-check-input" type="radio" id="btbanarse2" name="btbanarse" onclick="verificaradiobarthel()" value="0">
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
                                          <input class="form-check-input" type="radio" id="btvestirse1" name="btvestirse" onclick="verificaradiobarthel()" value="10">
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
                                          <input class="form-check-input" type="radio" id="btvestirse2" name="btvestirse" onclick="verificaradiobarthel()" value="5">
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
                                          <input class="form-check-input" type="radio" id="btvestirse3" name="btvestirse" onclick="verificaradiobarthel()" value="0">
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
                                          <input class="form-check-input" type="radio" id="btarreglarse1" name="btarreglarse" onclick="verificaradiobarthel()" value="5">
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
                                          <input class="form-check-input" type="radio" id="btarreglarse2" name="btarreglarse" onclick="verificaradiobarthel()" value="0">
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
                                    Deposición
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
                                          <input class="form-check-input" type="radio" id="btdeposicion1" name="btdeposicion" onclick="verificaradiobarthel()" value="10">
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
                                          <input class="form-check-input" type="radio" id="btdeposicion2" name="btdeposicion" onclick="verificaradiobarthel()" value="5">
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
                                          <input class="form-check-input" type="radio" id="btdeposicion3" name="btdeposicion" onclick="verificaradiobarthel()" value="0">
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
                                    Micción (Valorar la situación en la semana anterior)
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
                                        <label class="col-form-label">Ningún episodio de incontinencia, capaz de utilizar cualquier dispositivo por si solo</label>
                                      </div>
                                      <div class="form-group col-md-1">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" id="btmiccion1" name="btmiccion" onclick="verificaradiobarthel()" value="10">
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
                                          <input class="form-check-input" type="radio" id="btmiccion2" name="btmiccion" onclick="verificaradiobarthel()" value="5">
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
                                          <input class="form-check-input" type="radio" id="btmiccion3" name="btmiccion" onclick="verificaradiobarthel()" value="0">
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
                                          <input class="form-check-input" type="radio" id="btretrete1" name="btretrete" onclick="verificaradiobarthel()" value="10">
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
                                          <input class="form-check-input" type="radio" id="btretrete2" name="btretrete" onclick="verificaradiobarthel()" value="5">
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
                                          <input class="form-check-input" type="radio" id="btretrete3" name="btretrete" onclick="verificaradiobarthel()" value="0">
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
                                          <input class="form-check-input" type="radio" id="bttraslado1" name="bttraslado" onclick="verificaradiobarthel()" value="15">
                                        </div>
                                      </div>
                                      <div class="form-group col-md-1">
                                        <label class="col-form-label"><strong>10</strong></label>
                                      </div>
                                      <div class="form-group col-md-2">
                                        <label class="col-form-label">MINIMA AYUDA</label>
                                      </div>
                                      <div class="form-group col-md-8">
                                        <label class="col-form-label">Incluye supervision verbal o pequeña ayuda física</label>
                                      </div>
                                      <div class="form-group col-md-1">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" id="bttraslado2" name="bttraslado" onclick="verificaradiobarthel()" value="10">
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
                                          <input class="form-check-input" type="radio" id="bttraslado3" name="bttraslado" onclick="verificaradiobarthel()" value="5">
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
                                          <input class="form-check-input" type="radio" id="bttraslado4" name="bttraslado" onclick="verificaradiobarthel()" value="0">
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
                                    Deambulación
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
                                        <label class="col-form-label">Puede andar 50 metros o su equivalente por casa sin ayuda ni supervisión de otra persona. Puede usar ayuda instrumentales (muletas o baston). Excepto andador. Si utiliza prótesis debe ser capaz de ponersela y quitarsela solo</label>
                                      </div>
                                      <div class="form-group col-md-1">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" id="btdeambulacion1" name="btdeambulacion" onclick="" value="15">
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
                                          <input class="form-check-input" type="radio" id="btdeambulacion2" name="btdeambulacion" onclick="" value="10">
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
                                          <input class="form-check-input" type="radio" id="btdeambulacion3" name="btdeambulacion" onclick="" value="5">
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
                                          <input class="form-check-input" type="radio" id="btdeambulacion4" name="btdeambulacion" onclick="" value="0">
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
                                        <label class="col-form-label">Capaz de subir y bajar un piso sin la ayuda ni supervisión de otra persona</label>
                                      </div>
                                      <div class="form-group col-md-1">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" id="btescaleras1" name="btescaleras" onclick="verificaradiobarthel()" value="10">
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
                                          <input class="form-check-input" type="radio" id="btescaleras2" name="btescaleras" onclick="verificaradiobarthel()" value="5">
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
                                          <input class="form-check-input" type="radio" id="btescaleras3" name="btescaleras" onclick="verificaradiobarthel()" value="0">
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
                              <div class="form-group col-md-8 text-center" id="btngbarthel">
                                <button type="button" id="btnguardarbarthel" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarbarthel">GUARDAR</button>
                                <input type="text" class="form-control" id="numhc3" name="numhc3" style="display:none" />
                                <input type="text" class="form-control" id="fechai3" name="fechai3" style="display:none">
                              </div>
                              <div class="form-group col-md-8 text-center" id="btnabarthel" style="display:none">
                                 <button type="button" id="btnguardarbarthel2" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarbarthel2">ACTUALIZAR</button>
                              </div>
                              <div class="col-md-4">
                                <div id="box">
                                  <div id="box-time3" style="display:none"></div>
                                </div>
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
                                  Diagnósticos
                                </button>
                              </div>
                              <div class="collapse" id="valoracion1" aria-labelledby="headiuno" data-parent="#separa6">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="form-group col-md-4">
                                      <button type="button" class="btn btn-primary" onclick="traerdiagnosticos2()">Traer Diagnósticos</button>
                                    </div>
                                    <div class="form-group col-md-12">
                                      <label class="col-form-label"><strong>Diagnósticos:</strong></label>
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
                                  Condición Neurológica
                                </button>
                              </div>
                              <div class="collapse" id="valoracion2" aria-labelledby="headidos" data-parent="#separa6">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="form-group col-md-3">
                                      <label class="col-form-label text-uppercase"><strong>Apertura Ocular:</strong></label>                         
                                       <!-- <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnocular[]" onclick="verificachekvaloracion()" value="No Selecciona">
                                          <label class="form-check-label">No Selecciona</label>
                                        </div> -->
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnocular[]" onclick="verificachekvaloracion()"  value="Expontánea | 4" >
                                          <label class="form-check-label">Expontánea (4)</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnocular[]" onclick="verificachekvaloracion()"  value="A la orden | 3">
                                          <label class="form-check-label">A la orden (3)</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnocular[]" onclick="verificachekvaloracion()"  value="Ante un estímulo doloroso | 2" >
                                          <label class="form-check-label">Ante un estímulo doloroso (2)</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnocular[]" onclick="verificachekvaloracion()" value="Ausencia de estímulo ocular | 1">
                                          <label class="form-check-label">Ausencia de estímulo ocular (1)</label>
                                          <input type="text" class="form-control" id="auxcnocular" name="auxcnocular" style="display:none" />
                                        </div> 
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnocular[]" onclick="verificachekvaloracion()" value="No Selecciona | 0">
                                          <label class="form-check-label">No Selecciona (0)</label>
                                        </div>                                
                                    </div>
                                    <div class="form-group col-md-3">
                                      <label class="col-form-label text-uppercase"><strong>Respuesta Verbal:</strong></label>                         
                                       <!-- <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnverbal[]" onclick="verificachekvaloracion()" value="No Selecciona">
                                          <label class="form-check-label">No Selecciona</label>
                                        </div> -->
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnverbal[]" onclick="verificachekvaloracion()"  value="Orientado Correctamente | 5" >
                                          <label class="form-check-label">Orientado Correctamente (5)</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnverbal[]" onclick="verificachekvaloracion()"  value="Paciente Confuso | 4">
                                          <label class="form-check-label">Paciente Confuso (4)</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnverbal[]" onclick="verificachekvaloracion()"  value="Lenguaje inapropiado | 3">
                                          <label class="form-check-label">Lenguaje inapropiado (3)</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnverbal[]" onclick="verificachekvaloracion()"  value="Lenguaje incomprensible | 2" >
                                          <label class="form-check-label">Lenguaje incomprensible (2)</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnverbal[]" onclick="verificachekvaloracion()" value="Carencia de actividad verbal | 1">
                                          <label class="form-check-label">Carencia de actividad verbal (1)</label>
                                          <input type="text" class="form-control" id="auxcnverbal" name="auxcnverbal" style="display:none" />
                                        </div> 
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnverbal[]" onclick="verificachekvaloracion()" value="No Selecciona | 0">
                                          <label class="form-check-label">No Selecciona (0)</label>
                                        </div>                                
                                    </div>
                                    <div class="form-group col-md-5">
                                      <label class="col-form-label text-uppercase"><strong>Respuesta Motora:</strong></label>                           
                                       <!-- <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnmotora[]" onclick="verificachekvaloracion()" value="No Selecciona">
                                          <label class="form-check-label">No Selecciona</label>
                                        </div> -->
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnmotora[]" onclick="verificachekvaloracion()"  value="Obedece ordenes correctamente | 6">
                                          <label class="form-check-label">Obedece ordenes correctamente (6)</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnmotora[]" onclick="verificachekvaloracion()"  value="Localiza estímulos dolorosos | 5">
                                          <label class="form-check-label">Localiza estímulos dolorosos (5)</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnmotora[]" onclick="verificachekvaloracion()"  value="Responde al estímulo dolorso pero no localiza | 4" >
                                          <label class="form-check-label">Responde al estímulo dolorso pero no localiza (4)</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnmotora[]" onclick="verificachekvaloracion()"  value="Respuesta con flexión anormal de los miembros | 3">
                                          <label class="form-check-label">Respuesta con flexión anormal de los miembros (3)</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnmotora[]" onclick="verificachekvaloracion()"  value="Respuesta con extensión anormal de los miembros | 2" >
                                          <label class="form-check-label">Respuesta con extensión anormal de los miembros (2)</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnmotora[]" onclick="verificachekvaloracion()" value="Ausencia de respuesta motora | 1">
                                          <label class="form-check-label">Ausencia de respuesta motora (1)</label>
                                          <input type="text" class="form-control" id="auxcnmotora" name="auxcnmotora" style="display:none" />
                                        </div> 
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cnmotora[]" onclick="verificachekvaloracion()" value="No Selecciona | 0">
                                          <label class="form-check-label">No Selecciona (0)</label>
                                        </div>                                
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label class="col-form-label">Total</label>
                                        <input type="text" class="form-control" placeholder="" id="cntotal" name="cntotal" readonly="" />
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="dropdown-divider"></div>
                                  </div>
                                  <div class="row">
                                    <div class="form-group col-md-6">
                                      <label class="col-form-label text-uppercase"><strong>Alteracion del Estado de Conciencia:</strong></label>
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cngeneral_general[]" onclick="verificacheckvaloracioncogn_individual1()" value="No Selecciona">
                                          <label class="form-check-label">No Selecciona</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cngeneral[]" id="cngeneral1" onclick="verificachekvaloracion()"  value="Letargia" >
                                          <label class="form-check-label">Letargia</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cngeneral[]" id="cngeneral2" onclick="verificachekvaloracion()"  value="Obnublación">
                                          <label class="form-check-label">Obnublación</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cngeneral[]" id="cngeneral3" onclick="verificachekvaloracion()"  value="Estado Vegetativo" >
                                          <label class="form-check-label">Estado Vegetativo</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cngeneral[]" id="cngeneral4" onclick="verificachekvaloracion()" value="Mutismo Aquinetico">
                                          <label class="form-check-label">Mutismo Aquinetico</label>
                                        </div>                                
                                    </div>
                                    <div class="form-group col-md-6"><br>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cngeneral[]" id="cngeneral5" onclick="verificachekvaloracion()"  value="Estado de Conciencia Mínima" >
                                          <label class="form-check-label">Estado de Conciencia Mínima</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="cngeneral[]" id="cngeneral6" onclick="verificachekvaloracion()"  value="Sindrome de Cautiverio">
                                          <label class="form-check-label">Sindrome de Cautiverio</label>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-form-label">Otro</label>
                                          <input type="text" class="form-control" placeholder="" id="cnotrogeneral" name="cnotrogeneral" minlength="1" maxlength="50" pattern="\S[A-Za-z0-9,. ]{1,50}" required />
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
                                    <div class="form-group col-md-12">
                                      <label for="formControlRange">El paciente Puede Valorarse</label>
                                      <div class="row">
                                        <div class="form-group col-md-2">
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="tpregValo" onclick="verificaradiovaloracionPregunta()" value="si">
                                            <label class="form-check-label">Si</label>
                                          </div>
                                        </div>
                                        <div class="form-group col-md-2">
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="tpregValo" onclick="verificaradiovaloracionPregunta()" value="no">
                                            <label class="form-check-label">No</label>
                                            <input class="form-control" type="text" id="auxtpValo" name="auxtpValo" style="display:none" >
                                          </div>
                                        </div>
                                        <div id="cajapararesponder" class="form-group col-md-8" style="display:none">
                                          <label class="form-label">Detalle:</label>
                                          <input type="text" class="form-control" id="respodedetalle" name="respodedetalle"  >
                                        </div>
                                        
                                      </div>
                                      
                                      

                                                        
                                    </div>
                                    <div class="form-group col-md-8">
                                      <label for="formControlRange">Test de Pfeiffer "Escala de detección de deterioro congnitivo-SPMSQ"</label>
                                    </div>
                                     <div class="form-group col-md-2">
                                      <label for="formControlRange">Valoración N°</label>
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
                                    <?php
                                      date_default_timezone_set("America/Bogota");
                                      $now = time();
                                      $getfecha=date("d-m-Y");
                                      $getdia=date("d");
                                    ?>
                                    <div class="form-group col-md-4">
                                      <label for="formControlRange">¿Que día es hoy (mes/día/año)?</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testp1" name="testp1"  required />
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testr1" name="testr1"  required />
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" id="tpr1p11" name="tpr1" onclick="verificaradiovaloracion()" value="v">
                                      </div>
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" id="tpr1p12" name="tpr1" onclick="verificaradiovaloracion()" value="f">
                                        <input type="text" class="form-control" id="auxtpr1" name="auxtpr1" style="display:none" />
                                      </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="formControlRange">¿Que día de la semana es hoy?</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testp2" name="testp2" required />
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testr2" name="testr2" required />
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" id="tpr1p21" name="tpr2" onclick="verificaradiovaloracion()" value="v">
                                      </div>
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" id="tpr1p22" name="tpr2" onclick="verificaradiovaloracion()" value="f">
                                        <input type="text" class="form-control" id="auxtpr2" name="auxtpr2" style="display:none" />
                                      </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="formControlRange">¿Donde estamos ahora (Lugar o edificación)?</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testp3" name="testp3" minlength="1" maxlength="50" pattern="\S[A-Za-z0-9,. ]{1,50}" required />
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testr3" name="testr3" minlength="1" maxlength="50" pattern="\S[A-Za-z0-9,. ]{1,50}" required />
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" id="tpr1p31" name="tpr3" onclick="verificaradiovaloracion()" value="v">
                                      </div>
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" id="tpr1p32" name="tpr3" onclick="verificaradiovaloracion()" value="f">
                                        <input type="text" class="form-control" id="auxtpr3" name="auxtpr3" style="display:none" />
                                      </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="formControlRange">¿Cual es su numero de teléfono o dirección?</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testp4" name="testp4" minlength="1" maxlength="50" pattern="\S[A-Za-z0-9,. ]{1,50}" required />
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testr4" name="testr4" minlength="1" maxlength="50" pattern="\S[A-Za-z0-9,. ]{1,50}" required />
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" id="tpr1p41" name="tpr4" onclick="verificaradiovaloracion()" value="v">
                                      </div>
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" id="tpr1p42" name="tpr4" onclick="verificaradiovaloracion()" value="f">
                                        <input type="text" class="form-control" id="auxtpr4" name="auxtpr4" style="display:none" />
                                      </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="formControlRange">¿Cuantos años tiene?</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testp5" name="testp5" minlength="1" maxlength="50" pattern="\S[A-Za-z0-9,. ]{1,50}" required />
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testr5" name="testr5" minlength="1" maxlength="50" pattern="\S[A-Za-z0-9,. ]{1,50}" required />
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio"id="tpr1p51" name="tpr5" onclick="verificaradiovaloracion()" value="v">
                                      </div>
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio"id="tpr1p52" name="tpr5" onclick="verificaradiovaloracion()" value="f">
                                        <input type="text" class="form-control" id="auxtpr5" name="auxtpr5" style="display:none" />
                                      </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="formControlRange">¿En que día, mes y año nacio?</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testp6" name="testp6" required />
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testr6" name="testr6" required />
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" id="tpr1p61" name="tpr6" onclick="verificaradiovaloracion()" value="v">
                                      </div>
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" id="tpr1p62" name="tpr6" onclick="verificaradiovaloracion()" value="f">
                                        <input type="text" class="form-control" id="auxtpr6" name="auxtpr6" style="display:none" />
                                      </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="formControlRange">¿Como se llama el presidente de Colombia?</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testp7" name="testp7" minlength="1" maxlength="50" pattern="\S[A-Za-z0-9,. ]{1,50}" required />
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testr7" name="testr7" minlength="1" maxlength="50" pattern="\S[A-Za-z0-9,. ]{1,50}" required />
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" id="tpr1p71" name="tpr7" onclick="verificaradiovaloracion()" value="v">
                                      </div>
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" id="tpr1p72" name="tpr7" onclick="verificaradiovaloracion()" value="f">
                                        <input type="text" class="form-control" id="auxtpr7" name="auxtpr7" style="display:none" />
                                      </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="formControlRange">¿Quien mandaba antes del presidente actual en Colombia?</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testp8" name="testp8" minlength="1" maxlength="50" pattern="\S[A-Za-z0-9,. ]{1,50}" required />
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testr8" name="testr8" minlength="1" maxlength="50" pattern="\S[A-Za-z0-9,. ]{1,50}" required />
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" id="tpr1p81" name="tpr8" onclick="verificaradiovaloracion()" value="v">
                                      </div>
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" id="tpr1p82" name="tpr8" onclick="verificaradiovaloracion()" value="f">
                                        <input type="text" class="form-control" id="auxtpr8" name="auxtpr8" style="display:none" />
                                      </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="formControlRange">¿Como se llama o se llamaba su señora madre?</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testp9" name="testp9" minlength="1" maxlength="50" pattern="\S[A-Za-z0-9,. ]{1,50}" required />
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testr9" name="testr9" minlength="1" maxlength="50" pattern="\S[A-Za-z0-9,. ]{1,50}" required />
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" id="tpr1p91" name="tpr9" onclick="verificaradiovaloracion()" value="v">
                                      </div>
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" id="tpr1p92" name="tpr9" onclick="verificaradiovaloracion()" value="f">
                                        <input type="text" class="form-control" id="auxtpr9" name="auxtpr9" style="display:none" />
                                      </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="formControlRange">Si a 20 le restamos 3, ¿quedad?, y si le restamos 3 ¿Cuanto queda?</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" value="" id="testp10" name="testp10" minlength="1" maxlength="50" pattern="\S[A-Za-z0-9,. ]{1,50}" required />
                                    </div>
                                    <div class="form-group col-md-3">
                                      <input type="text" class="form-control" id="testr10" name="testr10" minlength="1" maxlength="50" pattern="\S[A-Za-z0-9,. ]{1,50}" required />
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" id="tpr1p101" name="tpr10" onclick="verificaradiovaloracion()" value="v">
                                      </div>
                                    </div>
                                    <div class="form-group col-md-1">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" id="tpr1p102" name="tpr10" onclick="verificaradiovaloracion()" value="f">
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
                            <div class="col-md-8 text-center" id="btngvaloracion">
                              <button type="button" id="btnguardarvaloracion" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarvaloracion">GUARDAR</button>
                              <input type="text" class="form-control" id="numhc4" name="numhc4" style="display:none" />
                              <input type="text" class="form-control" id="fechai4" name="fechai4" style="display:none">
                            </div>
                            <div class="col-md-8 text-center" id="btnavaloracion" style="display:none">
                              <button type="button" id="btnguardarvaloracion2" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarvaloracion2">ACTUALIZAR</button>
                            </div>
                            <div class="col-md-4">
                              <div id="box">
                                <div id="box-time4" style="display:none"></div>
                              </div>
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
                                  Diagnósticos
                                </button>
                            </div>
                            <div class="collapse" id="escala1" aria-labelledby="headiuno" data-parent="#separa7">
                              <div class="card-body">
                                <div class="row">
                                  <div class="form-group col-md-4">
                                    <button type="button" class="btn btn-primary" onclick="traerdiagnosticos3()">Traer Diagnósticos</button>
                                  </div>
                                  <div class="form-group col-md-12">
                                    <label class="col-form-label"><strong>Diagnósticos:</strong></label>
                                    <textarea class="form-control" id="mostrar_diagnostico4" name="mostrar_diagnostico4" onkeypress="return cmTexto(event);" readonly=""></textarea>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="card-header" id="headiuno">
                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#escala2"
                                aria-expanded="false" aria-controls="escala2">
                                  Estado Físico
                                </button>
                            </div>
                            <div class="collapse" id="escala2" aria-labelledby="headiuno" data-parent="#separa7">
                              <div class="card-body">
                                <div class="row">
                                  <!-- <div class="form-group col-md-2">
                                    <label for="formControlRange">Estado Fisico</label>
                                  </div> -->
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
                                    <!-- <input type="text" class="form-control" id="" name="" style="display:none" /> -->
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
                                                2 Raciones de proteínas
                                                Menú  1000 kcal
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
                                                3 Raciones de proteínas
                                                Menú 1500 kcal
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
                                                4 Raciones de proteínas
                                                Menú 2000 kcal
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
                                    <!-- <div class="progress">
                                      <div class="progress-bar bg-danger" role="" style="width: 25%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                      <div class="progress-bar bg-warning" role="" style="width: 25%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                      <div class="progress-bar bg-primary" role="" style="width: 25%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                      <div class="progress-bar bg-success" role="" style="width: 25%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div> -->
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
                                    <!-- <input type="text" class="form-control" id="" name="" style="display:none" /> -->
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
                                    <!-- <input type="text" class="form-control" id="" name="" style="display:none" /> -->
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
                                    <!-- <input type="text" class="form-control" id="" name="" style="display:none" /> -->
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
                                                corporal o sostenerla
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
                                                voluntarias con escasa frecuencia y
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
                                    <!-- <input type="text" class="form-control" id="" name="" style="display:none" /> -->
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
                            <div class="col-md-8 text-center" id="btngnorton">
                              <button type="button" id="btnguardarnorton" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarnorton">GUARDAR</button>
                              <input type="text" class="form-control" id="numhc5" name="numhc5" style="display:none" />
                              <input type="text" class="form-control" id="fechai5" name="fechai5" style="display:none">
                            </div>
                            <div class="col-md-8 text-center" id="btnanorton" style="display:none">
                              <button type="button" id="btnguardarnorton2" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarnorton2">ACTUALIZAR</button>
                            </div>
                            <div class="col-md-4">
                              <div id="box">
                                <div id="box-time5" style="display:none"></div>
                              </div>
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
                                      <input type="range" class="form-control-range" id="bradenmovilidad" name="bradenmovilidad" onchange="braden()" value="2" min="1" max="4" step="1">
                                      <!-- <div class="progress">
                                        <div class="progress-bar bg-secondary" role="" style="width: 25%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">Completamente inmovil</div>
                                        <div class="progress-bar bg-secondary" role="" style="width: 25%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">Muy Limitada</div>
                                        <div class="progress-bar bg-secondary" role="" style="width: 25%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">Ligeramente Limitada</div>
                                        <div class="progress-bar bg-secondary" role="" style="width: 25%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">Sin Limitaciones</div>
                                      </div> -->
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
                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#escalaq2"
                                aria-expanded="false" aria-controls="escalaq2">
                                  Actividad
                                </button>
                              </div>
                              <div class="collapse" id="escalaq2" aria-labelledby="headiuno" data-parent="#separa8">
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
                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#escalaq3"
                                aria-expanded="false" aria-controls="escalaq3">
                                  Percepción Sensorial
                                </button>
                              </div>
                              <div class="collapse" id="escalaq3" aria-labelledby="headiuno" data-parent="#separa8">
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
                                                  tiene alguna alteración sensorial
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
                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#escalaq4"
                                aria-expanded="false" aria-controls="escalaq4">
                                  Humedad
                                </button>
                              </div>
                              <div class="collapse" id="escalaq4" aria-labelledby="headiuno" data-parent="#separa8">
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
                                      <input type="range" class="form-control-range" id="bradenhumeda" name="bradenhumeda" onchange="braden()" value="2" min="1" max="4" step="1">
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
                                  Nutrición
                                </button>
                              </div>
                              <div class="collapse" id="escalaq5" aria-labelledby="headiuno" data-parent="#separa8">
                                <div class="card-body">
                                  <div class="row">
                                     <div class="form-group col-md-12">
                                      <label for="formControlRange">Nutrición patrón habitual de ingesta de alimentos</label>
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
                                                  Se le admnisitra una nutricion
                                                  enteral (SNG) o nutricion
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
                                <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#escalaq6"
                                aria-expanded="false" aria-controls="escalaq6">
                                  Fricción
                                </button>
                              </div>
                              <div class="collapse" id="escalaq6" aria-labelledby="headiuno" data-parent="#separa8">
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
                            <div class="col-md-8 text-center" id="btngbraden">
                              <button type="button" id="btnguardarbraden" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarbraden">GUARDAR</button>
                              <input type="text" class="form-control" id="numhc6" name="numhc6" style="display:none" />
                              <input type="text" class="form-control" id="fechai6" name="fechai6" style="display:none">
                            </div>
                            <div class="col-md-8 text-center" id="btnabraden" style="display:none">
                              <button type="button" id="btnguardarbraden2" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarbraden2">ACTUALIZAR</button>
                            </div>
                            <div class="col-md-4">
                              <div id="box">
                                <div id="box-time6" style="display:none"></div>
                              </div>
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
                            <input type="text" id="nombres" id="nombres" class="form-control" onkeyup="solopac()" />
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
        // document.getElementById("box-time2").innerHTML="<span class='hm-time'>" + hour + ":" + min + "</span> <span class='s-time'>" + seg + "</span> <span class='f-time'>" + w + "</span>";
        document.getElementById("box-time3").innerHTML="<span class='hm-time'>" + hour + ":" + min + "</span> <span class='s-time'>" + seg + "</span> <span class='f-time'>" + w + "</span>";
        document.getElementById("box-time4").innerHTML="<span class='hm-time'>" + hour + ":" + min + "</span> <span class='s-time'>" + seg + "</span> <span class='f-time'>" + w + "</span>";
        document.getElementById("box-time5").innerHTML="<span class='hm-time'>" + hour + ":" + min + "</span> <span class='s-time'>" + seg + "</span> <span class='f-time'>" + w + "</span>";
        document.getElementById("box-time6").innerHTML="<span class='hm-time'>" + hour + ":" + min + "</span> <span class='s-time'>" + seg + "</span> <span class='f-time'>" + w + "</span>";
      
        var d = setTimeout(function() {
          checkTime()
        }, 500);
      }
      checkTime();
    </script>