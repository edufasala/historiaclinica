 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Evolucion Medica</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Evolucion Medica</a></li>
              <li class="breadcrumb-item active">Crear Evolucion</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="wrapper">
    <div class="col-12">
    <div class="card">
      <form id="rgev" action="#" method="post" >
              <div class="form-row p-2">
                <div class="form-group col-md-4">
                  <label for="" class="col-form-label">Debe Seleccionar al Paciente:</label>
                  <button type="button" id="selecpc" class="btn btn-azul btn-lg" data-toggle="modal" data-target="#seleciona">SELECCIONAR PACIENTE</button>
                </div>
                <div class="form-group col-md-12">
                </div>
                <div class="form-group col-md-2">
                  <label class="col-form-label"><strong>N° HC</strong></label>
                  <div class="input-group">
                    <div class="input-group-prepend"><!--al inicio prepend y append al final-->
                        <span class="input-group-text">
                            <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="100100010" id="nhc" name="nhc" readonly="" required/>
                  </div>
                </div>
                <div class="form-group col-md-2">
                  <label class="col-form-label"><strong>Tipo/Doc</strong></label>
                  <select class="form-control" id="tdoc" name="tdoc" readonly="">
                    <option selected value="0">Eliga</option>
                  </select>
                </div>
                <div class="form-group col-md-2">
                  <label class="col-form-label"><strong>N° Doc</strong></label>
                  <div class="input-group">
                    <div class="input-group-prepend"><!--al inicio prepend y append al final-->
                        <span class="input-group-text">
                            <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="100100010" id="ndoc" name="ndoc" readonly="" required/>
                    <input type="text" class="form-control" id="nid" name="nid" style="display:none" readonly=""/>
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
                 <div class="form-group col-md-3">
                  <label class="col-form-label"><strong>Tipo de Tratamiento</strong></label>
                  <select class="form-control" id="ttrata" name="ttrata" readonly="">
                    <option selected value="0">Eliga</option>
                  </select>
                </div>
                <div class="form-group col-md-12">
                  <label class="col-form-label"><strong>Motivo Consulta:</strong></label>
                  <textarea class="form-control" id="mconsuta" name="mconsuta"></textarea>
                </div>
                <div class="accordion form-group col-md-12" id="accordion">
                  <div class="card">
                    <div class="card-header" id="headiuno">
                      <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#collapseuno"
                      aria-expanded="false" aria-controls="collapseuno">
                        Enfermedad y Antecedentes
                      </button>
                    </div>
                    <div class="collapse" id="collapseuno" aria-labelledby="headiuno" data-parent="#accordion"><!-- show -->
                      <div class="card-body">
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label class="col-form-label"><strong>Enfermedad Actual:</strong></label>
                            <textarea class="form-control" id="enfactual" name="enfactual" required></textarea>
                          </div>
                          <div class="form-group col-md-6">
                            <label class="col-form-label"><strong>Antecedentes Personales:</strong></label>
                            <textarea class="form-control" id="antper" name="antper" required></textarea>
                          </div>
                          <div class="form-group col-md-6">
                            <label class="col-form-label"><strong>Antecedentes Familiares:</strong></label>
                            <textarea class="form-control" id="antfam"  name="antfam" required></textarea>
                          </div>
                          <div class="form-group col-md-6">
                            <label class="col-form-label"><strong>Revision Por Sistema:</strong></label>
                            <input type="text" class="form-control" placeholder="RxS" id="rxs" name="rxs" required />
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headidos">
                      <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#collapsedos"
                      aria-expanded="false" aria-controls="collapsedos">
                        Examen Fisico
                      </button>
                    </div>
                    <div class="collapse" id="collapsedos" aria-labelledby="headidos" data-parent="#accordion">
                      <div class="card-body">
                        <div class="form-row">
                          <div class="form-group col-md-2">
                            <label class="col-form-label"><strong>TA:</strong></label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                                </span>
                              </div>
                              <input type="text" class="form-control" placeholder="" id="ta" name="ta" required />
                            </div>
                          </div>
                          <div class="form-group col-md-2">
                            <label class="col-form-label"><strong>FC:</strong></label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                                </span>
                              </div>
                              <input type="text" class="form-control" placeholder="" id="fc" name="fc" required />
                            </div>
                          </div>
                          <div class="form-group col-md-2">
                            <label class="col-form-label"><strong>FR:</strong></label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                                </span>
                              </div>
                              <input type="text" class="form-control" placeholder="" id="fr" name="fr" required />
                            </div>
                          </div>
                          <div class="form-group col-md-2">
                            <label class="col-form-label"><strong>SATUR:</strong></label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                                </span>
                              </div>
                              <input type="text" class="form-control" placeholder="" id="satur" name="satur" required />
                            </div>
                          </div>
                          <div class="form-group col-md-2">
                            <label class="col-form-label"><strong>TEMP:</strong></label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                                </span>
                              </div>
                              <input type="text" class="form-control" placeholder="" id="te" name="te" required />
                            </div>
                          </div>
                          <div class="form-group col-md-2">
                            <label class="col-form-label"><strong>GLUCOM:</strong></label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                                </span>
                              </div>
                              <input type="text" class="form-control" placeholder="" id="glucom" name="glucom" required />
                            </div>
                          </div>
                          <div class="form-group col-md-12">
                            <label class="col-form-label"><strong>Descripcion del Examen:</strong></label>
                            <textarea class="form-control" id="dexamen" name="dexamen" required></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headitres">
                      <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#collapsetres"
                      aria-expanded="false" aria-controls="collapsetres">
                        Analisis, Diagnostico y Plan
                      </button>
                    </div>
                    <div class="collapse" id="collapsetres" aria-labelledby="headitres" data-parent="#accordion">
                      <div class="card-body">
                        <div class="form-row">
                          <div class="form-group col-md-12" id="">
                            <div class="row">
                              <div class="form-group col-md-12">
                                <label class="col-form-label"><strong>Diagnosticos:</strong></label>
                                <textarea class="form-control" id="losdg" name="losdg" readonly=""></textarea>
                              </div>
                            </div>
                          </div>
                          
                          <div class="form-group col-md-5">
                            <label class="col-form-label"><strong>Buscar Diagnostico:</strong></label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/ver.png" class="rounded-circle" width="22px" height="22px">
                                </span>
                              </div>
                              <input type="text" class="form-control" id="bdig" name="bdig" onkeyup="buscodiagnosticos2()" />
                            </div>
                          </div>
                          <div class="form-group col-md-6" id="llenarselect">
                            <label class="col-form-label"><strong>Seleccione:</strong></label>
                          </div>
                          <div class="form-group col-md-1">
                            <label for="" class="col-form-label"><strong>Agregar</strong></label>
                            <input type="text" class="form-control" id="contadorD" name="contadorD" style="display:none" />
                            <button type="button" class="btn btn-primary" onclick="Agregar2()"> + </button>
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
                                <label class="col-form-label"><strong>Diagnosticos Agregados:</strong></label>
                              </div>
                              <div class="form-group col-md-2">
                                <label class="col-form-label"><strong>Opcion</strong></label>
                              </div>
                            </div>
                            <div class="row" id="escreado">
                              
                            </div>
                          </div>
                          <div class="form-group col-md-6">
                            <label class="col-form-label"><strong>Analisis:</strong></label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                                </span>
                              </div>
                              <input type="text" class="form-control" placeholder="" id="anali" name="anali" required />
                            </div>
                          </div>
                          <div class="form-group col-md-6">
                            <label class="col-form-label"><strong>Impresion Diagnostica:</strong></label>
                            <textarea class="form-control" id="plan" name="plan" required></textarea>
                          </div>
                          <!-- mejorar el pdf y hacer la parte de la pag del proyecto -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headi4">
                      <button class="btn btn-verde btn-lg btn-block" type="button" data-toggle="collapse" data-target="#collapse4"
                      aria-expanded="false" aria-controls="collapse4">
                        Plan de Manejo Domiciliario
                      </button>
                    </div>
                    <div class="collapse" id="collapse4" aria-labelledby="headi4" data-parent="#accordion">
                      <div class="card-body">
                        <div class="form-row">
                          <div class="form-group col-md-12">
                            <label class="col-form-label"><strong>Continuar en PAD:</strong></label>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" id="pds" name="pd" onclick="inverifica2('si')" value="si">
                              <label class="form-check-label">SI</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" id="pdn" name="pd" onclick="inverifica2('no')" value="no">
                              <label class="form-check-label">NO</label>
                              <input class="forrm-control" type="text" id="auxpad" name="auxpad" style="display:none" >
                            </div>
                          </div>
                          <div class="form-group col-md-12">
                            <label class="col-form-label"><strong>Manejo Farmacologico:</strong></label>
                          </div>
                          <div class="form-group col-md-5">
                            <label class="col-form-label"><strong>Buscar Farmaco:</strong></label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/ver.png" class="rounded-circle" width="22px" height="22px">
                                </span>
                              </div>
                              <input type="text" class="form-control" id="bdig2" name="bdig2" onkeyup="buscodiagnosticos3()" />
                            </div>
                          </div>
                          <div class="form-group col-md-6" id="llenarsel">
                            <label class="col-form-label"><strong>Seleccione:</strong></label>
                            <?php
                            // require_once('../enlace.php');
                            // $SqlConsultar="SELECT * FROM cie";
                            // if($datos=mysqli_query($enlace,$SqlConsultar))
                            // {
                            //   echo '<select class="form-control" id="creadodig" name="creadodig">';
                            //   while ($fila=mysqli_fetch_array($datos))
                            //   {
                            //     echo '<option value="'.utf8_encode($fila['cod_desc_cie']).'">'.utf8_encode($fila['descripcion_cie']).'</option>';
                            //   }
                            //   echo '</select>';
                            // }
                            ?>
                          </div>
                          <div class="form-group col-md-1">
                            <label for="" class="col-form-label"><strong>Agregar</strong></label>
                            <input type="text" class="form-control" id="contadorDI" name="contadorDI" style="display:none" />
                            <button type="button" class="btn btn-primary" onclick="Adiagn2()"> + </button>
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
                                <label class="col-form-label"><strong>Farmacos Agregados:</strong></label>
                              </div>
                              <div class="form-group col-md-2">
                                <label class="col-form-label"><strong>Opcion</strong></label>
                              </div>
                            </div>
                            <div class="row" id="escreados">
                              
                            </div>
                          </div>
                          <div class="form-group col-md-12">
                            <label class="col-form-label"><strong>Manejo Integral:</strong></label>
                            <div class="row">
                              <div class="col-md-6">
                                <label class="form-check-label">Terapia Fisica</label>
                                <input class="form-control" type="text" id="mi1" name="mi1" onclick="" >
                              </div>
                              <div class="col-md-6">
                                <label class="form-check-label">Terapia de Lenguaje</label>
                                <input class="form-control" type="text" id="mi2" name="mi2" onclick="" >
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <label class="form-check-label">Terapia Ocupacional</label>
                                <input class="form-control" type="text" id="mi3" name="mi3" onclick="" >
                              </div>
                              <div class="col-md-6">
                                <label class="form-check-label">Terapia Respiratoria</label>
                                <input class="form-control" type="text" id="mi4" name="mi4" onclick="" >
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <label class="form-check-label">Nutricion</label>
                                <input class="form-control" type="text" id="mi5" name="mi5" onclick="">
                              </div>
                              <div class="col-md-6">
                                <label class="form-check-label">Trabajo Social</label>
                                <input class="form-control" type="text" id="mi6" name="mi6" onclick="">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <label class="form-check-label">Psicologia</label>
                                <input class="form-control" type="text" id="mi7" name="mi7" onclick="">
                              </div>
                              <div class="col-md-6">
                                <label class="form-check-label">Auxiliar Enfermeria</label>
                                <input class="form-control" type="text" id="mi8" name="mi8" onclick="">
                              </div>
                            </div>
                            <!-- <div class="row">
                              <div class="col-md-6">
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="manejo[]" onclick="inverifica()" value="Terapia Fisica">
                                    <label class="form-check-label">Terapia Fisica</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="manejo[]" onclick="inverifica()"  value="Terapia Ocupacional" >
                                    <label class="form-check-label">Terapia Ocupacional</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="manejo[]" onclick="inverifica()"  value="Nutricion">
                                    <label class="form-check-label">Nutricion</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="manejo[]" onclick="inverifica()"  value="Psicologia" >
                                    <label class="form-check-label">Psicologia</label>
                                  </div>
                              </div>
                               <div class="col-md-6">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="manejo[]" onclick="inverifica()" value="Terapia de  Lenguaje">
                                  <label class="form-check-label">Terapia de  Lenguaje</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="manejo[]" onclick="inverifica()"  value="Terapia Respiratoria" >
                                  <label class="form-check-label">Terapia Respiratoria</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="manejo[]" onclick="inverifica()"  value="Trabajo Social">
                                  <label class="form-check-label">Trabajo Social</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="manejo[]" onclick="inverifica()"  value="Auxiliar Enfermeria" >
                                  <label class="form-check-label">Auxiliar Enfermeria</label>
                                  <input class="forrm-control" type="text" id="auxmanejo" name="auxmanejo" style="display:none" >
                                </div>
                              </div>
                            </div> -->
                          </div>
                          <div class="form-group col-md-6">
                            <label class="col-form-label"><strong>Paraclinicos:</strong></label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                                </span>
                              </div>
                              <input type="text" class="form-control" placeholder="" id="paracli" name="paracli" required />
                            </div>
                          </div>
                          <div class="form-group col-md-6">
                            <label class="col-form-label"><strong>Valoraciones:</strong></label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                                </span>
                              </div>
                              <input type="text" class="form-control" placeholder="" id="valo" name="valo" required />
                            </div>
                          </div>
                          <div class="form-group col-md-6">
                            <label class="col-form-label"><strong>Insumos:</strong></label>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="insu[]" onclick="inverifica()" value="No Amerita">
                              <label class="form-check-label">No Amerita</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="insu[]" onclick="inverifica()" value="Oxigeno">
                              <label class="form-check-label">Oxigeno</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="insu[]" onclick="inverifica()" value="Ambulancia" >
                              <label class="form-check-label">Ambulancia</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="insu[]" onclick="inverifica()" value="Pañales" >
                              <label class="form-check-label">Pañales</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="insu[]" onclick="inverifica()" value="Bolsa de Nutricion" >
                              <label class="form-check-label">Bolsa de Nutricion</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="insu[]" onclick="inverifica()" value="Nutrientes" >
                              <label class="form-check-label">Nutrientes</label>
                              <input class="forrm-control" type="text" id="auxinsumo" name="auxinsumo" style="display:none" >
                            </div>
                          </div>
                          <div class="form-group col-md-6">
                            <label class="col-form-label"><strong>Recomendaciones:</strong></label>
                            <textarea class="form-control" id="reco" name="reco" required></textarea>
                          </div>
                          <!-- mejorar el pdf y hacer la parte de la pag del proyecto -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group col-md-8 text-center">
                  <button type="button" id="btngevolucion" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmar">REGISTRAR</button>
                  <input type="text" class="form-control" id="fechai" name="fechai" style="display:none">
                  <button type="button" class="btn btn-danger">CANCELAR</button>
                </div>
                <div class="col-md-4">
                  <div id="box">
                    <div id="box-time" style="display:none"></div>
                  </div>
                </div>           
              </div>
            </form>

        <div class="modal fade" id="seleciona" tabindex="-1" role="dialog" aria-labelledby="vtitulo" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
            <!--<form action="#" method="" onsubmit="">-->
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
                          <input type="text" id="nombres" id="nombres" class="form-control" onkeyup="solopac4()" />
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
                        <?php
                        ?>
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
        <div class="modal" id="confirme" tabindex="-1" role="dialog">
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
              <h5 class="text">Estas Seguro de Registrar Esta Evolucion</h5>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" onclick="inevolucion();"> Si </button>
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
        
        var d = setTimeout(function() {
          checkTime()
        }, 500);
      }
      checkTime();
    </script>