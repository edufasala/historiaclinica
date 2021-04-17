    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-7">
            <h1>Consultar Historias Consolidada</h1>
          </div>
          <div class="col-sm-5">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Consultas</a></li>
              <li class="breadcrumb-item active">Consultar Historias Consolidada</li>
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
                      <input type="text" class="form-control" placeholder="100100010" id="ndocc" name="ndocc" readonly="" />
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
        <div class="col-12" id="verhistconsolidada" style="display:none" >
            <div class="card" >
              <div class="card-header">
                <h3 class="card-title">Listado de Historias Clinicas Consolidada</h3>

                <div class="card-tools">
                  <div class="input-group input-group-md" style="width: 250px;">
                    <select class="form-control" id="selimprimirconsolidada" name="selimprimirconsolidada" onchange="buscarhistoriaconsolidada()">
                      <option value="general">Historia Clinica</option>
                      <option value="generalenf">Historia Enfermera</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <table id="resultado" class="display responsive nowrap" style="width:100%">
                  
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
                          <input type="text" id="nombres" id="nombres" class="form-control" onkeyup="solopacconsolidada()" />
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
        <div class="modal fade" id="mdetalles" tabindex="-1" role="dialog" aria-labelledby="vtitulo" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
            <!--<form action="#" method="" onsubmit="">-->
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" >Detalles de La Historia Clinica</h4>
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
                      <div class="form-group col-md-12">
                        <label class="col-form-label"><strong>Motivo Consulta:</strong></label>
                        <textarea class="form-control" id="mconsuta" name="mconsuta" onkeypress="return cmTexto(event);" required></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="accordion form-group col-md-12" id="accordion">
                        <div class="card">
                          <div class="card-header" id="headiuno">
                            <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapseuno"
                            aria-expanded="false" aria-controls="collapseuno">
                              Enfermedad y Antecedentes
                            </button>
                          </div>
                          <div class="collapse" id="collapseuno" aria-labelledby="headiuno" data-parent="#accordion"><!-- show -->
                            <div class="card-body">
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label class="col-form-label"><strong>Enfermedad Actual:</strong></label>
                                  <textarea class="form-control" id="enfactual" name="enfactual" onkeypress="return cmTexto(event);" required></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                  <label class="col-form-label"><strong>Antecedentes Personales:</strong></label>
                                  <textarea class="form-control" id="antper" name="antper" onkeypress="return cmTexto(event);" required></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                  <label class="col-form-label"><strong>Antecedentes Familiares:</strong></label>
                                  <textarea class="form-control" id="antfam" name="antfam" onkeypress="return cmTexto(event);" required></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                  <label class="col-form-label"><strong>Revision Por Sistema:</strong></label>
                                  <input type="text" class="form-control" placeholder="RxS" id="rpors" name="rpors" minlength="2" maxlength="35" pattern="\S[A-Za-z ]{2,35}" required />
                                </div>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headidos">
                            <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapsedos"
                            aria-expanded="false" aria-controls="collapsedos">
                              Examen Fisico
                            </button>
                          </div>
                          <div class="collapse" id="collapsedos" aria-labelledby="headidos" data-parent="#accordion">
                            <div class="card-body">
                              <div class="form-row">
                                <div class="form-group col-md-2">
                                  <label class="col-form-label"><strong>Talla:</strong></label>
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
                                  <label class="col-form-label"><strong>Peso:</strong></label>
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
                                  <textarea class="form-control" id="dexamen" name="dexamen" onkeypress="return cmTexto(event);" required></textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headitres">
                            <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapsetres"
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
                                      <textarea class="form-control" id="losdg" name="losdg" onkeypress="return cmTexto(event);" required></textarea>
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
                                    <input type="text" class="form-control" placeholder="" id="anali" name="anali" minlength="2" maxlength="35" pattern="\S[A-Za-z]{2,35}" required />
                                  </div>
                                </div>
                                <div class="form-group col-md-6">
                                  <label class="col-form-label"><strong>Plan:</strong></label>
                                  <textarea class="form-control" id="plan" name="plan" onkeypress="return cmTexto(event);" required></textarea>
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
            //         "searchPlaceholder": "Documento",
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
             //     dom: 'Brtlip',  
             //    'ajax':{
             //      "url":baseurl+"registro/obtener_server_hc_general_n",
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
             //    'columns':[
             //      // {data: 'rownum','sClass':'dt-body-center'},
             //      {data: 'ambito_registro_paciente'},
             //      {
             //        render:function(data,type,row){
             //          return 'Historia Clinica '+row.hc_pad_cod;
                      
             //        }
             //      },
             //      {data: 'pad_f_reg'},
             //      {data: 'pad_diagnosticos'},
             //      {data: 'registro_especialidad'},
             //      {
             //        render:function(data,type,row){
             //          return row.registro_nombres+" "+row.registro_apellidos;
             //        }
             //      },
             //      {"orderable":true,
             //        render:function(data,type,row){
                        
             //            return '<a  href="'+baseurl+'imprimir/generar_historia_td/general/'+row.id_hc_pad+'/'+row.pad_documento+'/'+row.pad_f_reg+'/HC" class="btn btn-azul" title="Imprimir" onclick="" target="_blank"><img src="'+baseurl+'assets/img/iconos/oj.png" class="img-fluid" width="25" height="25"/></a>';
             //        }
             //      }
             //    ],
             //      // "order": [[ 3, "desc" ]],
             //    "order": [],
             //  } );

            // $('#selimprimirconsolidada').on('change',function(){
            //   var sel=$('#selimprimirconsolidada').val();
            //   // alert(';'+sel);
            //   // $("#").DataTable.fnDestroy();
            //   var documento="";
            //   var fecha="";
            //   var numero="";
            //   if(op=="general")
            //   {
            //     documento="pad_documento";
            //     fecha="pad_f_reg";
            //     numero="hc_pad_cod";
            //   }
            //   else if(op=="generalenf")
            //   {
            //     documento="enf_pad_doc";
            //     fecha="enf_pad_f_reg";
            //     numero="hc_enf_pad_cod";
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
            //         "url":baseurl+"registro/obtener_server_hc_"+sel+"_n",
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
            //             if(op=="general")
            //             {
            //               return 'Historia Clinica '+row.hc_pad_cod;
            //             }
            //             else if(op=="generalenf")
            //             {
            //               return 'Historia Enfermera '+row.hc_enf_pad_cod;
            //             }
            //           }
            //         },
            //         {data: fecha},
            //         {
            //           render:function(data,type,row){
            //             if(op=="general")
            //             {
            //               return ''+row.pad_diagnosticos;
            //             }
            //             else if(op=="generalenf")
            //             {
            //               return ''+row.enf_pad_diagnosticos_enfermera;
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
            //               if(op=="general")
            //               {
            //                 return '<a  href="'+baseurl+'imprimir/generar_historia_td/'+sel+'/'+row.id_hc_pad+'/'+row.pad_documento+'/'+row.pad_f_reg+'/HC" class="btn btn-azul" title="Imprimir" onclick="" target="_blank"><img src="'+baseurl+'assets/img/iconos/oj.png" class="img-fluid" width="25" height="25"/></a>';
            //               }
            //               else if(op=="generalenf")
            //               {
            //                 return '<a  href="'+baseurl+'imprimir/generar_historia_td/'+sel+'/'+row.id_hc_enf_pad+'/'+row.enf_pad_doc+'/'+row.enf_pad_f_reg+'/HC" class="btn btn-azul" title="Imprimir" onclick="" target="_blank"><img src="'+baseurl+'assets/img/iconos/oj.png" class="img-fluid" width="25" height="25"/></a>'; 
            //               }
            //           }
            //         }
            //       ],
            //         // "order": [[ 3, "desc" ]],
            //       "order": [],
            //     } );
            // });
            // $('#resultado').DataTable( {
            //     'lengthMenu':[5,10,20,50,100],
            //     'lengthMenu2':['uno','dos'],
            //     'paging':true,
            //     'info':true,
            //     'filter':true,
            //     'stateSave':true,
            //     'processing':true,
            //     'serverSide':true,
            //     'responsive':true,
            //      // dom: 'Bfrtip',  
            //     'ajax':{
            //       "url":baseurl+"registro/obtener_server_hc",
            //       "type":"POST"
            //       // dataSrc:''
            //     },
            //     'buttons':[
            //       {
            //         text: 'My button',
            //           action: function ( e, dt, node, config ) {
            //                 alert( 'Button activated' );
            //           }
            //       },'csv'
            //     ],
            //     // 'select':[{
            //     //   'row':
            //     //   {
            //     //     0: 'una',
            //     //     1: 'dos'
            //     //   }
            //     // }],
            //     // 'buttons': [{text:'nuevo'}],
            //     'columns':[
            //       // {data: 'rownum','sClass':'dt-body-center'},
            //       {data: 'pad_documento'},
            //       {data: 'pnombre_paciente'},
            //       {data: 'papellido_paciente'},
            //       {data: 'pad_f_reg'},
            //       // {data: 'Opciones'},
            //       {"orderable":true,
            //         render:function(data,type,row){
                        
            //             return '<a  href="http://localhost/shistoria/imprimir/generar_historia/'+row.id_hc+'/'+row.documento+'/HC" class="btn btn-danger" title="Imprimir" onclick="" target="_blank"><img src="'+baseurl+'assets/img/iconos/descargar.png" class="img-fluid" width="25" height="25"/></a>';
            //             // return '<a href="#" class="btn btn-danger"  data-toggle="modal" data-target="#mdetalles" onclick="datoscita(\''.$fila->id_agenda.'\',
            //             //     \''.$fila->nombres.'\',\''.$fila->tipo_cita.'\',\''.$fila->f_cita.'\',\''.$fila->h_cita.'\',\''.$fila->celular.'\',
            //             //     \''.$fila->nota_cita.'\',\''.$fila->estado_cita.'\')">OPC</a>';
            //         }
            //       }
            //     ],
            //       // "order": [[ 3, "desc" ]],
            //     "order": [],
            //   } );
          }
          function buscarhistoriaconsolidada(){
            op=$('#selimprimirconsolidada').val();
            // console.log(op);
          }
    </script>