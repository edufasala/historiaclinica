 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-7 text-right">
            <!-- <h1>Historia Clinica</h1> -->
          </div>
          <div class="col-sm-5">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Historia Odontologica</a></li>
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
                        <h3>Historia Odontologica por Primera Vez</h3>
                      </button>
                    </div>
                    <div class="collapse" id="elprinci1" aria-labelledby="headiuno" data-parent="#princi">
                      <div class="card-body" >
                        <div class="row">
                          <div class="form-group col-md-4 ">
                            <label for="" class="col-form-label">Debe Seleccionar al Paciente:</label>
                          </div>
                          <div class="form-group col-md-6">
                            
                            <button type="button" class="btn btn-azul btn-lg" data-toggle="modal" id="selecpcodonto" data-target="#seleciona">SELECCIONAR PACIENTE</button>
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
                              <input type="text" class="form-control" id="nmedodonto" name="nmedodonto" style="display:none" value="<?php echo ucwords($this->session->userdata('s_n')).', '.ucwords($this->session->userdata('s_ap'));?>" />
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
                                  <option value="s">Subsidio</option>
                                  <option value="v">Vinculado</option>
                                  <option value="c">Contribuyente</option>
                                  <option value="p">Participativo</option>
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
                          <a class="nav-link active bg-white " id="uno" href="#multi1" data-toggle="collapse" data-target="#multi1" aria-expanded="false" aria-controls="multi1" onclick="pasar('1')"><FONT SIZE=5>ODONTOLOGIA PRIMERA VEZ</FONT></a>
                        </li>

<!--
                        <li class="nav-item">
                          <a class="nav-link bg-primaryhc text-uppercase text-white" id="tres" href="#multi3" data-toggle="collapse" data-target="#multi3" aria-expanded="false" aria-controls="multi3" onclick="pasar('3')"><FONT SIZE=5>ODONTOGRAMA</FONT></a>
                        </li>
-->
                    </ul>
                  </div>
                  <div class="card-body">
                    <div class="accordion" id="accordion2">
                      <div class="collapse multi-collapse collapse show" id="multi1" data-parent="#accordion2">
                        <form id="hcpadodonto" action="#" method="POST">
                         <div class="form-row p-2">
                          <div class="form-group col-md-12">
                            <div class="card-header">
                              <div class="accordion" id="accordion3">
                                <div class="collapse multi-collapse collapse show" id="op1" data-parent="#accordion3">
                                  <div class="row">
                                    <div class="form-group col-md-6">
                                      <label for="nombre" class="col-form-label"><strong>N° H.C. Odontologica:</strong></label>
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
                                    <div class="form-group col-md-12">
                                      <label class="col-form-label"><strong>Motivo Consulta:</strong></label>
                                      <textarea class="form-control" id="mconsutaodonto" name="mconsutaodonto" onkeypress="return cmTextoNum(event);" required></textarea>
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
                                                <label class="col-form-label text-uppercase"><strong>Enfermedad Actual:</strong></label>
                                                <textarea class="form-control" rows="5" id="enfactualodonto" name="enfactualodonto" onkeypress="return cmTextoNum(event);" required></textarea>
                                              </div>

                                              <div class="form-group col-md-12">
                                                <label class="col-form-label text-uppercase"><strong>Antecedentes Personales:</strong></label>
                                              </div>

                                              <div class="form-group col-md-12">
                                                   <div class="row">
                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label "><strong>Tratamiento Medico:</strong></label>
                                                      <div class="row">
                                                        <div class="form-group col-md-9">               
                                                          <div class="row">
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="bttratame" id="bttratame1" onclick="verificaradioodonto()" value="SI">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="bttratame" id="bttratame2" onclick="verificaradioodonto()" value="NO">
                                                                <label class="form-check-label">No</label>
                                                               </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="bttratame" id="bttratame3" onclick="verificaradioodonto()" value="NO SABE">
                                                                <label class="form-check-label">No Sabe</label>
                                                                <input class="forrm-control" type="text" id="auxbttratame" name="auxbttratame" style="display:none" >
                                                              </div>
                                                            </div>                                                            
                                                          </div>
                                                        </div>

                                                      </div>                               
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label "><strong>Ingestion de Alimentos:</strong></label>
                                                      <div class="row">
                                                        <div class="form-group col-md-9">     
                                                          <div class="row">
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btingestion" id="btingestion1" onclick="verificaradioodonto()" value="SI">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btingestion" id="btingestion2" onclick="verificaradioodonto()" value="NO">
                                                                <label class="form-check-label">No</label>
                                                              </div>
                                                            </div>                                                     
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btingestion" id="btingestion3" onclick="verificaradioodonto()" value="NO SABE">
                                                                <label class="form-check-label">No Sabe</label>
                                                                <input type="text" class="form-control" id="auxbtingestion" name="auxbtingestion" style="display:none"/>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label "><strong>Reacciones Alergicas:</strong></label>
                                                      <div class="row">
                                                        <div class="form-group col-md-9">                
                                                          <div class="row">
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btalergica" id="btalergica1" onclick="verificaradioodonto()" value="SI">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btalergica" id="btalergica2" onclick="verificaradioodonto()" value="NO">
                                                                <label class="form-check-label">No</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btalergica" id="btalergica3" onclick="verificaradioodonto()" value="NO SABE">
                                                                <label class="form-check-label">No Sabe</label>
                                                                <input type="text" class="form-control" id="auxbtalergica" name="auxbtalergica" style="display:none"/>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>                               
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label "><strong>Anestesia:</strong></label>
                                                      <div class="row">
                                                        <div class="form-group col-md-9">                                                  
                                                          <div class="row">
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btanestesia" id="btanestesia1" onclick="verificaradioodonto()" value="SI">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btanestesia" id="btanestesia2" onclick="verificaradioodonto()" value="NO">
                                                                <label class="form-check-label">No</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btanestesia" id="btanestesia3" onclick="verificaradioodonto()" value="NO SABE">
                                                                <label class="form-check-label">No Sabe</label>
                                                                <input type="text" class="form-control" id="auxbtanestesia" name="auxbtanestesia" style="display:none"/>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>                               
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label "><strong>Antibioticos:</strong></label>
                                                      <div class="row">
                                                        <div class="form-group col-md-9">                                                  
                                                          <div class="row">
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btantibiotico" id="btantibiotico1" onclick="verificaradioodonto()" value="SI">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btantibiotico" id="btantibiotico2" onclick="verificaradioodonto()" value="NO">
                                                                <label class="form-check-label">No</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btantibiotico" id="btantibiotico3" onclick="verificaradioodonto()" value="NO SABE">
                                                                <label class="form-check-label">No Sabe</label>
                                                                <input type="text" class="form-control" id="auxbtantibiotico" name="auxbtantibiotico" style="display:none"/>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>  
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label "><strong>Hemorragias:</strong></label>
                                                      <div class="row">
                                                        <div class="form-group col-md-9">                                                  
                                                          <div class="row">
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="bthemorragia" id="bthemorragia1" onclick="verificaradioodonto()" value="SI">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="bthemorragia" id="bthemorragia2" onclick="verificaradioodonto()" value="NO">
                                                                <label class="form-check-label">No</label>
                                                              </div>
                                                            </div>                                                     
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="bthemorragia" id="bthemorragia3" onclick="verificaradioodonto()" value="NO SABE">
                                                                <label class="form-check-label">No Sabe</label>
                                                                <input type="text" class="form-control" id="auxbthemorragia" name="auxbthemorragia" style="display:none"/>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>  
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label "><strong>Irradiaciones:</strong></label>
                                                      <div class="row">
                                                        <div class="form-group col-md-9">                                                  
                                                          <div class="row">
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btradiacion" id="btradiacion1" onclick="verificaradioodonto()" value="SI">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btradiacion" id="btradiacion2" onclick="verificaradioodonto()" value="NO">
                                                                <label class="form-check-label">No</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btradiacion" id="btradiacion3" onclick="verificaradioodonto()" value="NO SABE">
                                                                <label class="form-check-label">No Sabe</label>
                                                                <input type="text" class="form-control" id="auxbtradiacion" name="auxbtradiacion" style="display:none"/>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>  
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label "><strong>Enf. Respiratoria:</strong></label>
                                                      <div class="row">
                                                        <div class="form-group col-md-9">                                                  
                                                          <div class="row">
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btrespira" id="btrespira1" onclick="verificaradioodonto()" value="SI">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btrespira" id="btrespira2" onclick="verificaradioodonto()" value="NO">
                                                                <label class="form-check-label">No</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btrespira" id="btrespira3" onclick="verificaradioodonto()" value="NO SABE">
                                                                <label class="form-check-label">No Sabe</label>
                                                                <input type="text" class="form-control" id="auxbtrespira" name="auxbtrespira" style="display:none"/>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>  
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label "><strong>Cardiopatias:</strong></label>
                                                      <div class="row">
                                                        <div class="form-group col-md-9">                                                  
                                                          <div class="row">
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btcardio" id="btcardio1" onclick="verificaradioodonto()" value="SI">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btcardio" id="btcardio2" onclick="verificaradioodonto()" value="NO">
                                                                <label class="form-check-label">No</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btcardio" id="btcardio3" onclick="verificaradioodonto()" value="NO SABE">
                                                                <label class="form-check-label">No Sabe</label>
                                                                <input type="text" class="form-control" id="auxbtcardio" name="auxbtcardio" style="display:none"/>
                                                              </div>
                                                            </div>            
                                                          </div>
                                                        </div>
                                                      </div>  
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label "><strong>Artritis:</strong></label>
                                                      <div class="row">
                                                        <div class="form-group col-md-9">                                                  
                                                          <div class="row">
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btartritis" id="btartritis1" onclick="verificaradioodonto()" value="SI">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btartritis" id="btartritis2" onclick="verificaradioodonto()" value="NO">
                                                                <label class="form-check-label">No</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btartritis" id="btartritis3" onclick="verificaradioodonto()" value="NO SABE">
                                                                <label class="form-check-label">No Sabe</label>
                                                                <input type="text" class="form-control" id="auxbtartritis" name="auxbtartritis" style="display:none"/>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>  
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label "><strong>Terapia Anticuagulante:</strong></label>
                                                      <div class="row">
                                                        <div class="form-group col-md-9">
                                                          <div class="row">
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btcoagulante" id="btcoagulante1" onclick="verificaradioodonto()" value="SI">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btcoagulante" id="btcoagulante2" onclick="verificaradioodonto()" value="NO">
                                                                <label class="form-check-label">No</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btcoagulante" id="btcoagulante3" onclick="verificaradioodonto()" value="NO SABE">
                                                                <label class="form-check-label">No Sabe</label>
                                                                <input type="text" class="form-control" id="auxbtcoagulante" name="auxbtcoagulante" style="display:none"/>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>  
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label "><strong>Hepatitis:</strong></label>
                                                      <div class="row">
                                                        <div class="form-group col-md-9">
                                                          <div class="row">
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="bthepatitis" id="bthepatitis1" onclick="verificaradioodonto()" value="SI">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="bthepatitis" id="bthepatitis2" onclick="verificaradioodonto()" value="NO">
                                                                <label class="form-check-label">No</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="bthepatitis" id="bthepatitis3" onclick="verificaradioodonto()" value="NO SABE">
                                                                <label class="form-check-label">No Sabe</label>
                                                                <input type="text" class="form-control" id="auxbthepatitis" name="auxbthepatitis" style="display:none"/>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>  
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label "><strong>Embarazo:</strong></label>
                                                      <div class="row">
                                                        <div class="form-group col-md-9">
                                                          <div class="row">
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btembarazo" id="btembarazo1" onclick="verificaradioodonto()" value="SI">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btembarazo" id="btembarazo2" onclick="verificaradioodonto()" value="NO">
                                                                <label class="form-check-label">No</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btembarazo" id="btembarazo3" onclick="verificaradioodonto()" value="NO SABE">
                                                                <label class="form-check-label">No Sabe</label>
                                                                <input type="text" class="form-control" id="auxbtembarazo" name="auxbtembarazo" style="display:none"/>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>  
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label "><strong>Enf. Renal:</strong></label>
                                                      <div class="row">
                                                        <div class="form-group col-md-9">
                                                          <div class="row">
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btrenal" id="btrenal1" onclick="verificaradioodonto()" value="SI">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btrenal" id="btrenal2" onclick="verificaradioodonto()" value="NO">
                                                                <label class="form-check-label">No</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btrenal" id="btrenal3" onclick="verificaradioodonto()" value="NO SABE">
                                                                <label class="form-check-label">No Sabe</label>
                                                                <input type="text" class="form-control" id="auxbtrenal" name="auxbtrenal" style="display:none"/>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>  
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label "><strong>Gastrointestinal:</strong></label>
                                                      <div class="row">
                                                        <div class="form-group col-md-9">
                                                          <div class="row">
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btgastro" id="btgastro1" onclick="verificaradioodonto()" value="SI">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btgastro" id="btgastro2" onclick="verificaradioodonto()" value="NO">
                                                                <label class="form-check-label">No</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btgastro" id="btgastro3" onclick="verificaradioodonto()" value="NO SABE">
                                                                <label class="form-check-label">No Sabe</label>
                                                                <input type="text" class="form-control" id="auxbtgastro" name="auxbtgastro" style="display:none"/>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>  
                                                    </div>                              

                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label "><strong>Antec. Quirurgicos:</strong></label>
                                                      <div class="row">
                                                        <div class="form-group col-md-9">
                                                          <div class="row">
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btquirurgico" id="btquirurgico1" onclick="verificaradioodonto()" value="SI">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btquirurgico" id="btquirurgico2" onclick="verificaradioodonto()" value="NO">
                                                                <label class="form-check-label">No</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btquirurgico" id="btquirurgico3" onclick="verificaradioodonto()" value="NO SABE">
                                                                <label class="form-check-label">No Sabe</label>
                                                                <input type="text" class="form-control" id="auxbtquirurgico" name="auxbtquirurgico" style="display:none"/>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>  
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label "><strong>Osteoporosis:</strong></label>
                                                      <div class="row">
                                                        <div class="form-group col-md-9">
                                                          <div class="row">
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btosteo" id="btosteo1" onclick="verificaradioodonto()" value="SI">
                                                                <label class="form-check-label">Si</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btosteo" id="btosteo2" onclick="verificaradioodonto()" value="NO">
                                                                <label class="form-check-label">No</label>
                                                              </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                              <div class="form-check"><br><br>
                                                                <input class="form-check-input" type="radio"  name="btosteo" id="btosteo3" onclick="verificaradioodonto()" value="NO SABE">
                                                                <label class="form-check-label">No Sabe</label>
                                                                <input type="text" class="form-control" id="auxbtosteo" name="auxbtosteo" style="display:none"/>
                                                              </div>
                                                            </div>              
                                                          </div>
                                                        </div>
                                                      </div>  
                                                    </div>

                                                    <div class="form-group col-md-12">
                                                      <label>Otros</label>
                                                      <input class="form-control" type="text" id="odontootros" name="odontootros">
                                                    </div>

                                                    <div class="form-group col-md-12">
                                                      <label>Observaciones</label>
                                                      <input class="form-control" type="text" id="odontoobservaciones" name="odontoobservaciones">
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
                                <div class="collapse multi-collapse collapse" id="op2" data-parent="#accordion3">
                                  <div class="">
                                    <div class="form-group col-md-12">
                                      <label class="col-form-label"><strong>Pag. 2 - Ingreso Odontologico</strong></label>
                                    </div>
                                    <div class="accordion form-group col-md-12" id="separa">
                                      <div class="card">
                                        <div class="card-header" id="headiuno">
                                            <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#cspad1"
                                            aria-expanded="false" aria-controls="cspad1">
                                              Habitos Odontologicos
                                            </button>
                                          </div>
                                          <div class="collapse" id="cspad1" aria-labelledby="headiuno" data-parent="#separa">
                                            <div class="card-body">
                                              <div class="row">

                                              <div class="form-group col-md-12">
                                                <div class="row">
                                                  <label class="col-form-label "><strong>HABITOS ODONTOLOGICOS:</strong></label>
                                                </div>
                                                <div class="row">
                                                 <div class="form-group col-md-4">
                                                   <label class="col-form-label"><strong>Cepillado:</strong></label>
                                                   <textarea class="form-control" id="ocepillado" name="ocepillado" onkeypress="return cmTextoNum(event);" required></textarea>
                                                 </div>
                                                 <div class="form-group col-md-4">
                                                    <label class="col-form-label"><strong>Crema Dental Con Fluor:</strong></label>
                                                    <textarea class="form-control" id="ocrema" name="ocrema" onkeypress="return cmTextoNum(event);" required></textarea>
                                                 </div>
                                                 <div class="form-group col-md-4">
                                                    <label class="col-form-label"><strong>Normalidad:</strong></label>
                                                    <textarea class="form-control" id="onormal" name="onormal" onkeypress="return cmTextoNum(event);" required></textarea>
                                                 </div>
                                                </div>
                                              </div>

                                              <div class="form-group col-md-12">
                                                  <div class="row">
                                                     <label class="col-form-label "><strong>GRADO DE CARIOGENICIDAD:</strong></label>
                                                  </div>
                                                 <div class="row">
                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label"><strong>Bebidas Azucaradas:</strong></label>
                                                      <textarea class="form-control" id="oazucarada" name="oazucarada" onkeypress="return cmTextoNum(event);" required></textarea>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label"><strong>Masas No Azucaradas:</strong></label>
                                                      <textarea class="form-control" id="omasasa" name="omasasa" onkeypress="return cmTextoNum(event);" required></textarea>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label"><strong>Caramelos:</strong></label>
                                                      <textarea class="form-control" id="ocaramelos" name="ocaramelos" onkeypress="return cmTextoNum(event);" required></textarea>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label"><strong>¿Consume Azucar?</strong></label>
                                                      <textarea class="form-control" id="oconsumea" name="oconsumea" onkeypress="return cmTextoNum(event);" required></textarea>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label"><strong>¿Consume Bebidas Alcoholicas?:</strong></label>
                                                      <textarea class="form-control" id="oconsumeb" name="oconsumeb" onkeypress="return cmTextoNum(event);" required></textarea>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                      <label class="col-form-label"><strong>¿Fuma?:</strong></label>
                                                      <textarea class="form-control" id="ofuma" name="ofuma" onkeypress="return cmTextoNum(event);" required></textarea>
                                                    </div>                                              
                                                 </div> <br><br>

                                                  <div class="form-group col-md-12  dropdown-divider"></div>
                                                  <div class="form-row">
                                                    <div class="form-group col-md-8 text-center" id="btningresarpadodonto">
                                                      <button type="button" id="btnguardarpadodonto" class="btn btn-azul"  data-dismiss="modal" data-toggle="modal" data-target="#confirmarpadodonto">GUARDAR</button>
                                                      <input type="text" class="form-control" id="fechai" name="fechai" style="display:none">
                                                    </div>
                                                    <div class="form-group col-md-8 text-center" id="btnactualizarpadodonto" style="display:none">
                                                      <button type="button" id="btnguardarpadodonto2" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmarpadodonto2">ACTUALIZAR</button>
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
                                    <button class="btn btn-primary" type="button" onclick="atraspagina()">Atras</button>
                                  </li>
                              </ul>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
 
                    <div class="collapse multi-collapse collapse" id="multi3" data-parent="#accordion2">
                      <form id="hcbarthel" action="#" method="POST">
                        <div class="row">
                          <div class="accordion form-group col-md-12" id="separa4">
                            <div class="card">

                              <div class="card-header" id="headiuno">
                                  <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#barthel1"
                                  aria-expanded="false" aria-controls="barthel1">
                                    Odontograma
                                  </button>
                                </div>
                                <div class="collapse" id="barthel1" aria-labelledby="headiuno" data-parent="#separa4">
                                  <div class="card-body">
                                    <div class="row">
                                      <span class="input-group-text text-center">
                                        <img src="<?php echo base_url();?>assets/img/consultorio5.png" class="img-fluid">
                                      </span>
                                    </div>
                                  </div>
                                </div>
                            </div>

                              <div class="form-group col-md-12  dropdown-divider"></div>
                              <div class="row">

                                <div class="form-group col-md-12  dropdown-divider"></div>
                                <div class="form-group">                                 
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
                            <input type="text" id="nombres" id="nombres" class="form-control" onkeyup="odontosolopac()" />
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
                    <h5 class="modal-title"><strong>Compcasa IPS</strong></h5>
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
          <div class="modal" id="confirmarpadodonto" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"><strong>Compcasa IPS</strong></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                <div class="modal-body">
                  <h5 class="text">Estas Seguro de Guardar H.C. Odontologica</h5>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="inhistoriapadodonto()"> Si </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal" id="confirmarpadodonto2" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"><strong>Compcasa IPS</strong></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                <div class="modal-body">
                  <h5 class="text">Estas Seguro de Actualizar H.C. Odontologica</h5>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="acthistoriapadodonto()"> Si </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal" id="confirmarbarthel" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title"><strong>Compcasa IPS</strong></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                <div class="modal-body">
                  <h5 class="text">Estas Seguro de Guardar Odontograma</h5>
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
                      <h5 class="modal-title"><strong>Compcasa</strong></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                <div class="modal-body">
                  <h5 class="text">Estas Seguro de Actualizar Odontograma</h5>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="acthistoriabarthel()"> Si </button>
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

        
        //document.getElementById("box-time4").innerHTML="<span class='hm-time'>" + hour + ":" + min + "</span> <span class='s-time'>" + seg + "</span> <span class='f-time'>" + w + "</span>";
        //document.getElementById("box-time5").innerHTML="<span class='hm-time'>" + hour + ":" + min + "</span> <span class='s-time'>" + seg + "</span> <span class='f-time'>" + w + "</span>";
        //document.getElementById("box-time6").innerHTML="<span class='hm-time'>" + hour + ":" + min + "</span> <span class='s-time'>" + seg + "</span> <span class='f-time'>" + w + "</span>";


      
        var d = setTimeout(function() {
          checkTime()
        }, 500);
      }
      checkTime();
    </script>