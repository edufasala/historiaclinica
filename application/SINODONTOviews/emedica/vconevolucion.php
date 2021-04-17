<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Consultar Evolucion Medica</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Evolucion Medica</a></li>
              <li class="breadcrumb-item active">Consultar Evolucion</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <div class="wrapper">
    <div class="col-12">
        <div class="col-12" >
            <div class="card" >
              <div class="card-header">
                <h3 class="card-title">Listado de E. Medica</h3>

                <!-- <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 250px;">
                    <input type="text" id="buscar" onkeyup="individualev()" class="form-control float-right" placeholder="Documento">

                    <div class="input-group-append">
                      <button type="button" class="btn btn-default" id="buscar2" onclick="mostrar_todas_ev()"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body " >
                
                <table id="resultado" class="display responsive nowrap" style="width:100%">
                  <thead>
                    <tr>
                      <th>Documento</th>
                      <th>Primer Nombre</th>
                      <th>Primer Apellidos</th>
                      <th>Fecha</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      // foreach ($cn as $fila)
                      // {
                      //   echo '
                      //     <tr>
                      //     <td>'.$fila->id_ev.'</td>
                      //     <td>'.$fila->id_paciente.'</td>
                      //     <td>'.$fila->motivo_consulta.'</td>
                      //     <td>'.$fila->f_ev.'</td>
                      //     <td>'.$fila->h_ev.'</td>
                      //     <td><a href="#" class="btn btn-primary"  data-toggle="modal" data-target="#mdetalles" onclick="datosev(\''.$fila->id_ev.'\',
                      //       \''.$fila->tipo_tratamiento.'\',\''.$fila->motivo_consulta.'\',
                      //       \''.$fila->enfermedad_actual.'\',\''.$fila->a_personales.'\',\''.$fila->a_familiares.'\',\''.$fila->revision_sistema.'\',
                      //       \''.$fila->talla.'\',\''.$fila->peso.'\',\''.$fila->fr.'\',\''.$fila->fc.'\',\''.$fila->temperatura.'\',
                      //       \''.$fila->tension_arterial.'\',\''.$fila->descripcion_examen.'\',\''.$fila->diagnosticos.'\',\''.$fila->analisis.'\',\''.$fila->plan.'\',
                      //       \''.$fila->pad.'\',\''.$fila->farmacos.'\',\''.$fila->manejo_integral.'\',\''.$fila->paraclinicos.'\',\''.$fila->valoraciones.'\',
                      //       \''.$fila->insumos.'\',\''.$fila->recomendaciones.'\',)"><img src="'.base_url().'assets/img/iconos/ver.png" class="img-fluid" width="25" height="25"/></a>
                            
                      //       <a  href="http://localhost/shistoria/imprimir/generar_evolucion/'.$fila->id_ev.'/'.$fila->id_paciente.'/EV" class="btn btn-danger" title="Imprimir" onclick="" target="_blank">
                      //             <img src="'.base_url().'assets/img/iconos/descargar.png" class="img-fluid" width="25" height="25"/></a>
                                  
                      //     </td>
                      //     </tr>
                      //   ';
                      //   // <a  href="#" class="btn btn-danger" title="Imprimir" onclick="generarhc(\''.$fila->id_hc.'\',\''.$fila->documento.'\')">
                      //   //           <img src="'.base_url().'assets/img/iconos/descargar.png" class="img-fluid" width="25" height="25"/></a>
                      //   // mandar los parametros y terminar 
                      //   //'.$fila->id_hc.'  '.$fila->documento.'
                      // }
                    ?>
                  </tbody>
                </table>
                    
                 
              </div>
              <!-- /.card-body -->
            </div>
            
        </div>
        <div class="modal fade" id="mdetalles" tabindex="-1" role="dialog" aria-labelledby="vtitulo" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
            <!--<form action="#" method="" onsubmit="">-->
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" >Detalles de La Evolucion Medica</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <div class="container">   
                    <div class="row">
                      <div class="col-md-2">
                        <label class="col-form-label"><strong>Tipo de Documento</strong></label>
                        <select class="form-control" id="tpdoc" readonly="">
                          <option></option>
                        </select>
                      </div>
                      <div class="col-md-3">
                        <label class="col-form-label"><strong>N° de Documento</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend"><!--al inicio prepend y append al final-->
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="text" class="form-control" placeholder="100100010" id="ndoc" name="ndoc" readonly=""/>
                          <input type="text" class="form-control" id="nid" name="nid" style="display:none" readonly=""/>
                          <input type="text" class="form-control" id="sex" name="sex" style="display:none" readonly=""/>
                          <input type="text" class="form-control" id="tentidad" name="tentidad" style="display:none" readonly=""/>
                          <input type="text" class="form-control" id="entidad" name="entidad" style="display:none" readonly=""/>
                          <input type="text" class="form-control" id="fnaci" name="fnaci" style="display:none" readonly=""/>
                          <input type="text" class="form-control" id="ced" name="ced" style="display:none" readonly=""/>
                          <input type="text" class="form-control" id="cel" name="cel" style="display:none" readonly=""/>
                        </div>
                      </div>
                      <div class="form-group col-md-5">
                        <label for="nombre" class="col-form-label"><strong>Nombres/Apellidos</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend"><!--al inicio prepend y append al final-->
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="text" class="form-control" id="tdnombre" name="tdelnombre" readonly=""/>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-4">
                        <label class="col-form-label"><strong>Tipo de Tratamiento</strong></label>
                        <select class="form-control" id="ttrata" name="ttrata" readonly="">
                          <option selected value="0">Eliga</option>
                        </select>
                      </div>
                      <div class="form-group col-md-12">
                        <label class="col-form-label"><strong>Motivo Consulta:</strong></label>
                        <textarea class="form-control" id="mconsuta" name="mconsuta" onkeypress="" required></textarea>
                      </div>
                    </div>
                    <div class="row">
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
                                  <textarea class="form-control" id="enfactual" name="enfactual" onkeypress="" required></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                  <label class="col-form-label"><strong>Antecedentes Personales:</strong></label>
                                  <textarea class="form-control" id="antper" name="antper" onkeypress="" required></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                  <label class="col-form-label"><strong>Antecedentes Familiares:</strong></label>
                                  <textarea class="form-control" id="antfam" name="antfam" onkeypress="" required></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                  <label class="col-form-label"><strong>Revision Por Sistema:</strong></label>
                                  <input type="text" class="form-control" placeholder="RxS" id="rpors" name="rpors" required />
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
                                  <label class="col-form-label"><strong>Satur:</strong></label>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">
                                        <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                                      </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="12 Cm" id="talla" name="talla" minlength="1" maxlength="6" pattern="\S[0-9A-Za-z, ]{1,6}" required />
                                  </div>
                                </div>
                                <div class="form-group col-md-2">
                                  <label class="col-form-label"><strong>Glucom:</strong></label>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">
                                        <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                                      </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="55,5 Kg" id="peso" name="peso" minlength="1" maxlength="8" pattern="\S[A-Za-z0-9,. ]{1,8}" required />
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
                                    <input type="text" class="form-control" placeholder="" id="fr" name="fr" minlength="1" maxlength="6" pattern="\S[A-Za-z0-9 ]{1,6}" required />
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
                                  <label class="col-form-label"><strong>T°:</strong></label>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">
                                        <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                                      </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="37°" id="te" name="te" minlength="1" maxlength="6" pattern="\S[A-Za-z0-9,. ]{1,6}" required />
                                  </div>
                                </div>
                                <div class="form-group col-md-2">
                                  <label class="col-form-label"><strong>TA:</strong></label>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">
                                        <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                                      </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="" id="ta" name="ta" minlength="1" maxlength="6" pattern="\S[A-Za-z0-9,. ]{1,6}" required />
                                  </div>
                                </div>
                                <div class="form-group col-md-12">
                                  <label class="col-form-label"><strong>Descripcion del Examen:</strong></label>
                                  <textarea class="form-control" id="dexamen" name="dexamen" onkeypress="" required></textarea>
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
                                      <textarea class="form-control" id="losdg" name="losdg" onkeypress="" required></textarea>
                                    </div>
                                  </div>
                                  <div class="row" id="escreado">
                                    
                                  </div>
                                </div>
                                <div class="form-group col-md-12" id="">
                                  <div class="row">
                                    <div class="form-group col-md-12">
                                      <label class="col-form-label"><strong>Otros Diagnosticos:</strong></label>
                                      <textarea class="form-control" id="losdg2" name="losdg2" onkeypress="" required></textarea>
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
                                  <label class="col-form-label"><strong>Plan:</strong></label>
                                  <textarea class="form-control" id="plan" name="plan" onkeypress="" required></textarea>
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
                                    <input class="form-check-input" type="radio" id="pds" name="pd" value="si">
                                    <label class="form-check-label">SI</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" id="pdn" name="pd" value="no">
                                    <label class="form-check-label">NO</label>
                                    <input class="forrm-control" type="text" id="auxpad" name="auxpad" style="display:none" >
                                  </div>
                                </div>
                                <div class="form-group col-md-12" id="">
                                  <div class="row">
                                    <div class="form-group col-md-12">
                                      <label class="col-form-label"><strong>Manejo Farmacologico:</strong></label>
                                      <textarea class="form-control" id="losdg3" name="losdg3" onkeypress="" required></textarea>
                                    </div>
                                  </div>
                                  <div class="row" id="escreado">
                                    
                                  </div>
                                </div>
                                <div class="form-group col-md-12">
                                  <label class="col-form-label"><strong>Manejo Integral:</strong></label>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <label class="form-check-label">Terapia Fisica</label>
                                      <input class="form-control" type="text" id="mi1" name="mi1" onclick="" value="">
                                    </div>
                                    <div class="col-md-6">
                                      <label class="form-check-label">Terapia de Lenguaje</label>
                                      <input class="form-control" type="text" id="mi2" name="mi2" onclick="" value="">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <label class="form-check-label">Terapia Ocupacional</label>
                                      <input class="form-control" type="text" id="mi3" name="mi3" onclick="" value="">
                                    </div>
                                    <div class="col-md-6">
                                      <label class="form-check-label">Terapia Respiratoria</label>
                                      <input class="form-control" type="text" id="mi4" name="mi4" onclick="" value="">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <label class="form-check-label">Nutricion</label>
                                      <input class="form-control" type="text" id="mi5" name="mi5" onclick="" value="">
                                    </div>
                                    <div class="col-md-6">
                                      <label class="form-check-label">Trabajo Social</label>
                                      <input class="form-control" type="text" id="mi6" name="mi6" onclick="" >
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <label class="form-check-label">Psicologia</label>
                                      <input class="form-control" type="text" id="mi7" name="mi7" onclick="" value="">
                                    </div>
                                    <div class="col-md-6">
                                      <label class="form-check-label">Auxiliar Enfermeria</label>
                                      <input class="form-control" type="text" id="mi8" name="mi8" onclick="" value="">
                                    </div>
                                  </div>
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
                                    <input class="form-check-input" type="checkbox" name="insu[]" id="insp" onclick="" value="No Amerita">
                                    <label class="form-check-label">No Amerita</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="insu[]" id="ins" onclick="" value="Oxigeno">
                                    <label class="form-check-label">Oxigeno</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="insu[]" id="ins2" onclick="" value="Ambulancia" >
                                    <label class="form-check-label">Ambulancia</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="insu[]" id="ins3" onclick="" value="Pañales" >
                                    <label class="form-check-label">Pañales</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="insu[]" id="ins4" onclick="" value="Bolsa de Nutricion" >
                                    <label class="form-check-label">Bolsa de Nutricion</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="insu[]" id="ins5" onclick="" value="Nutrientes" >
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
                    </div>
                    <div class="row">

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
    <input type="text" id="cualeslabaseurl" value="<?php echo base_url();?>" style="display:none">
    <script type="text/javascript">
          var baseurl=document.getElementById("cualeslabaseurl").value;
          document.title="Cons. Evoluciones | H. Clinica";
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
                        "csv": "fichero CSV",
                        "excel": "tabla Excel",
                        "pdf": "documento PDF",
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
                dom: 'Bfrtlip',
                'ajax':{
                  "url":baseurl+"conevolucion/obtener_server_ev",
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
                  {data: 'evolucion_f_reg'},
                  // {data: 'Opciones'},
                  {"orderable":true,
                    render:function(data,type,row){
                        return '<a href="#" class="btn btn-azul"  data-toggle="modal" data-target="#mdetalles" onclick="datosev(\''+row.id_ev+'\',\''+row.tipo_doc_paciente+'\',\''+row.doc_paciente+'\',\''+row.pnombre_paciente+'\',\''+row.papellido_paciente+'\',\''+row.inclusion_pad_paciente+'\',\''+row.evolucion_satur+'\',\''+row.evolucion_glucom+'\',\''+row.evolucion_fr+'\',\''+row.evolucion_fc+'\',\''+row.evolucion_temperatura+'\',\''+row.evolucion_tension_arterial+'\',\''+row.evolucion_diagnosticos+'\',\''+row.evolucion_otros_diagnosticos+'\',\''+row.evolucion_analisis+'\',\''+row.evolucion_pad+'\',\''+row.evolucion_farmacos+'\',\''+row.evolucion_mj_fisica+'\',\''+row.evolucion_mj_lenguaje+'\',\''+row.evolucion_mj_ocupacional+'\',\''+row.evolucion_mj_respiratoria+'\',\''+row.evolucion_mj_nutricion+'\',\''+row.evolucion_mj_social+'\',\''+row.evolucion_mj_psicologia+'\',\''+row.evolucion_mj_enfermeria+'\',\''+row.evolucion_paraclinicos+'\',\''+row.evolucion_valoraciones+'\',\''+row.evolucion_insumos+'\')"><img src="'+baseurl+'assets/img/iconos/ver.png" class="img-fluid" width="25" height="25"/></a><a  href="'+baseurl+'imprimir/generar_evolucion/'+row.id_ev+'/'+row.doc_paciente+'/EV" class="btn btn-rosado" title="Imprimir" onclick="" target="_blank"><img src="'+baseurl+'assets/img/iconos/oj.png" class="img-fluid" width="25" height="25"/></a>';
                    }
                  }
                ],
                  // "order": [[ 3, "desc" ]],
                "order": [],
              } );
          }
    </script>
