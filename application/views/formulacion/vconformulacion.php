    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Consultar Formulaciones</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Formulaciones</a></li>
              <li class="breadcrumb-item active">Consultar Formulaciones</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="wrapper">
    <div class="col-12">
    <!-- <div class="card"> -->
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
        <div class="col-12"  id="verfrmfor" style="display:none">
            <div class="card" >
              <div class="card-header">
                <h3 class="card-title">Listado de Formulaciones</h3>
                <div class="card-tools">
                  <div class="input-group input-group-md" style="width: 250px;">
                    <select class="form-control" id="selimpfor" name="selimpfor" onchange="buscarfprfor()">
                      <option value="particular">Particular</option>
                      <option value="hc">Historia Clinica</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
          
              <div class="card-body" >
                
                <table id="resultado" class="display responsive nowrap" style="width:100%">
                  <thead>
                    <tr>
                      <th>Documento</th>
                      <th>Primer Nombre</th>
                      <th>Primer Apellido</th>
                      <th>Fecha</th>
                      <th>Tipo Formulacion</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      // foreach ($cn as $fila)
                      // {
                      //   echo '
                      //     <tr>
                      //     <td>'.$fila->documento.'</td>
                      //     <td>'.$fila->nombres_apellidos.'</td>
                      //     <td>'.$fila->tipo_tratamiento.'</td>
                      //     <td>'.$fila->f_visita.'</td>
                      //     <td>'.$fila->h_visita.'</td>
                      //     <td>'.$fila->nota.'</td>
                      //     <td><a href="#" class="btn btn-primary"  data-toggle="modal" data-target="#mdetalles" onclick="datoscita(\''.$fila->id_visita.'\',
                      //       \''.$fila->nombres_apellidos.'\',\''.$fila->tipo_tratamiento.'\',\''.$fila->f_visita.'\',\''.$fila->h_visita.'\',\''.$fila->nota.'\',
                      //       \''.$fila->nota.'\',\''.$fila->nota.'\')"><img src="'.base_url().'assets/img/iconos/ver.png" class="img-fluid" width="25" height="25"/></a>
                      //        <a  href="http://localhost/shistoria/imprimir/generar_visita/'.$fila->id_visita.'/'.$fila->documento.'/VS" class="btn btn-danger" title="Imprimir" onclick="" target="_blank">
                      //             <img src="'.base_url().'assets/img/iconos/descargar.png" class="img-fluid" width="25" height="25"/></a></td>
                      //     </tr>
                      //   ';
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
        <div class="modal" id="mdetalles" tabindex="-1" role="dialog" aria-labelledby="vtitulo">
          <div class="modal-dialog modal-lg modal-show" role="document">
            <form >
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" >Detalles de la Formulacion</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-5">
                        <label class="col-form-label">Nombres</label>
                        <input type="text" class="form-control" id="elnomb" minlength="2" maxlength="35" pattern="\S[A-Za-z ]{2,35}" required/>
                        <input type="text" class="form-control" id="elid" style="display:none"  />
                      </div>
                      <div class="col-md-5" style="display:none">
                        <label class="col-form-label">Tipo de Tratamiento</label>
                        <select class="form-control" id="cualcita" name="cualcita" required>
                          <option></option>
                        </select>
                      </div>
                      <div class="col-md-5" style="display:none">
                        <label class="col-form-label">Radicacion Servicios</label>
                        <input type="text" class="form-control" id="rservicios" name="rservicios" required>
                      </div>
                      <div class="col-md-5">
                        <label class="col-form-label">Fecha</label>
                        <input size="16" type="date" class="form-control" id="mff" required>
                      </div>
                      <div class="col-md-5">
                        <label>Hora</label>
                        <input size="16" type="time" class="form-control" id="lahr" required>
                      </div>
                      <div class="col-md-5">
                        <label class="col-form-label">Fecha de vencimiento</label>
                        <input size="16" type="date" class="form-control" id="mffv" required>
                      </div>
                    </div>
                    <div class="row">
                                           
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <label for="nota" class="col-form-label"><strong>Formulaciones:</strong></label>
                        <textarea class="form-control" rows="8" id="lanota" onkeypress="return cmTexto(event);" required></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <!-- <button type="submit" class="btn btn-primary" data-dismiss="">ACTUALIZAR</button> -->
                  <!-- <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#confirme">ELIMINAR</button> -->
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="modal" id="mdetalles2" tabindex="-1" role="dialog" aria-labelledby="vtitulo">
          <div class="modal-dialog modal-lg modal-show" role="document">
            <form >
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" >Detalles de la Formulacion</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-5">
                        <label class="col-form-label">Nombres</label>
                        <input type="text" class="form-control" id="elnomb2" minlength="2" maxlength="35" pattern="\S[A-Za-z ]{2,35}" required/>
                        <input type="text" class="form-control" id="elid2" style="display:none"  />
                      </div>
                      <!-- <div class="col-md-5" style="display:none">
                        <label class="col-form-label">Tipo de Tratamiento</label>
                        <select class="form-control" id="cualcita" name="cualcita" required>
                          <option></option>
                        </select>
                      </div> -->
                      <!-- <div class="col-md-5" style="display:none">
                        <label class="col-form-label">Radicacion Servicios</label>
                        <input type="text" class="form-control" id="rservicios" name="rservicios" required>
                      </div> -->
                      <div class="col-md-5">
                        <label class="col-form-label">Fecha</label>
                        <input size="16" type="date" class="form-control" id="mff2" required>
                      </div>
                      <div class="col-md-5">
                        <label>Hora</label>
                        <input size="16" type="time" class="form-control" id="lahr2" required>
                      </div>
                      <!-- <div class="col-md-5">
                        <label class="col-form-label">Fecha de vencimiento</label>
                        <input size="16" type="date" class="form-control" id="mffv" required>
                      </div> -->
                    </div>
                    <div class="row">
                                           
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <label for="nota" class="col-form-label"><strong>Formulaciones:</strong></label>
                        <textarea class="form-control" rows="8" id="lanota2" onkeypress="return cmTexto(event);" required></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <!-- <button type="submit" class="btn btn-primary" data-dismiss="">ACTUALIZAR</button> -->
                  <!-- <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#confirme">ELIMINAR</button> -->
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="modal" id="confirme" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
              <div class="modal-body">
                <h5 class="text">Estas Seguro de Eliminar Esta Ctia</h5>
                  <p></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" onclick="eliminarcita();"> Si </button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
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
                          <input type="text" id="nombres" id="nombres" class="form-control" onkeyup="solopacformulacion()" />
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
    </div>
    </div>
    <input type="text" id="cualeslabaseurl" value="<?php echo base_url();?>" style="display:none">
    <script type="text/javascript">
          var baseurl=document.getElementById("cualeslabaseurl").value;
          document.title="Cons. Formulaciones | H. Clinica";
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
            //         }
            //     }           
            // } );  
            // $('#resultado').DataTable( {
            //     'lengthMenu':[5,10,20,50,100],
            //     'paging':true,
            //     'info':true,
            //     'filter':true,
            //     'stateSave':true,
            //     'processing':true,
            //     'serverSide':true,
            //     'responsive':true,
            //     dom: 'Brtlip',
            //     'ajax':{
            //       "url":baseurl+"conformulacion/obtener_server_f_particular",
            //       "type":"POST"
            //       // dataSrc:''
            //     },
            //     'buttons': [
            //       {
            //         extend: 'csv',
            //         text: '<i class="fas fa-file-csv"></i>',
            //         titleAttr: 'Exportar a Csv',
            //         className: 'btn btn-verde'
            //       },
            //       {
            //         extend: 'excelHtml5',
            //         text: '<i class="fas fa-file-excel"></i>',
            //         titleAttr: 'Exportar a Excel',
            //         className: 'btn btn-success'
            //       },
            //       {
            //         extend: 'pdf',
            //         text: '<i class="fas fa-file-pdf"></i>',
            //         titleAttr: 'Exportar a Pdf',
            //         className: 'btn btn-danger'
            //       },
            //       {
            //         extend: 'print',
            //         text: '<i class="fas fa-print"></i>',
            //         titleAttr: 'Imprimir',
            //         className: 'btn btn-info'
            //       }                  
            //     ],
            //     'columns':[
            //       // {data: 'rownum','sClass':'dt-body-center'},
            //       {data: 'doc_paciente'},
            //       {data: 'pnombre_paciente'},
            //       {data: 'papellido_paciente'},
            //       {data: 'formulacion_f_reg'},
            //       {
            //         render:function(data,type,row){
            //           if(row.hc_pad_cod)
            //           {
            //             return 'HC'+row.hc_pad_cod;
            //           }
            //           else
            //           {
            //             return 'Particular';
            //           }
            //         }
            //       },
            //       {"orderable":true,
            //         render:function(data,type,row){
            //             return '<a href="#" class="btn btn-azul"  data-toggle="modal" data-target="#mdetalles" onclick="datosformulacion(\''+row.id+'\',\''+row.pnombre_paciente+'\',\''+row.papellido_paciente+'\',\''+row.inclusion_pad_paciente+'\',\''+row.formulacion_f_reg+'\',\''+row.formulacion_h_reg+'\',\''+row.formulacion_f_v+'\',\''+row.formulacion_lista+'\',\''+row.formulacion_radicacion+'\')"><img src="'+baseurl+'assets/img/iconos/ver.png" class="img-fluid" width="25" height="25"/></a><a  href="'+baseurl+'imprimir/generar_f/'+row.id+'/'+row.doc_paciente+'/'+row.formulacion_created_user+'/FM" class="btn btn-rosado" title="Imprimir" onclick="" target="_blank"><img src="'+baseurl+'assets/img/iconos/oj.png" class="img-fluid" width="25" height="25"/></a>';
            //         }
            //       }
            //     ],
            //       // "order": [[ 3, "desc" ]],
            //     "order": [],
            //   } );

            //  $('#selimpfor').on('change',function(){
            //   var sel=$('#selimpfor').val();
     
            //   var documento="";
            //   var fecha="";
            //   var numero="";
            //   if(op=="particular")
            //   {
            //     documento="pad_documento";
            //     fecha="formulacion_f_reg";
            //     numero="hc_pad_cod";
            //   }
            //   else if(op=="hc")
            //   {
            //     documento="pad_documento";
            //     fecha="pad_f_reg";
            //     numero="hc_pad_cod";
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
            //         "url":baseurl+"conformulacion/obtener_server_f_"+sel+"",
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
            //         {data: 'doc_paciente'},
            //         {data: 'pnombre_paciente'},
            //         {data: 'papellido_paciente'},
            //         {data: fecha},
            //         {
            //           render:function(data,type,row){
            //             if(op=="particular")
            //             {
            //               return 'Particular ';
            //             }
            //             else if(op=="hc")
            //             {
            //               return 'Historia Clinica '+row.hc_pad_cod;
            //             }
            //           }
            //         },
            //         {"orderable":true,
            //           render:function(data,type,row){
            //               if(op=="particular")
            //               {
            //                 return '<a href="#" class="btn btn-azul"  data-toggle="modal" data-target="#mdetalles" onclick="datosformulacion(\''+row.id+'\',\''+row.pnombre_paciente+'\',\''+row.papellido_paciente+'\',\''+row.inclusion_pad_paciente+'\',\''+row.formulacion_f_reg+'\',\''+row.formulacion_h_reg+'\',\''+row.formulacion_f_v+'\',\''+row.formulacion_lista+'\',\''+row.formulacion_radicacion+'\')"><img src="'+baseurl+'assets/img/iconos/ver.png" class="img-fluid" width="25" height="25"/></a><a  href="'+baseurl+'imprimir/generar_f/'+row.id+'/'+row.doc_paciente+'/'+row.formulacion_created_user+'/FM" class="btn btn-rosado" title="Imprimir" onclick="" target="_blank"><img src="'+baseurl+'assets/img/iconos/oj.png" class="img-fluid" width="25" height="25"/></a>';
            //               }
            //               else if(op=="hc")
            //               {
            //                 if(row.pad_medicamentos)
            //                 {
            //                   return '<a href="#" class="btn btn-azul"  data-toggle="modal" data-target="#mdetalles2" onclick="datosformulacion2(\''+row.id_hc_pad+'\',\''+row.pnombre_paciente+'\',\''+row.papellido_paciente+'\',\''+row.pad_f_reg+'\',\''+row.pad_h_reg+'\',\''+row.pad_medicamentos+'\')"><img src="'+baseurl+'assets/img/iconos/ver.png" class="img-fluid" width="25" height="25"/></a><a  href="'+baseurl+'imprimir/generar_f2/'+row.hc_pad_cod+'/'+row.doc_paciente+'/'+row.pad_created_user+'/FM" class="btn btn-rosado" title="Imprimir" onclick="" target="_blank"><img src="'+baseurl+'assets/img/iconos/oj.png" class="img-fluid" width="25" height="25"/></a>';
            //                 }
            //                 else
            //                 {
            //                   return '<a href="#" class="btn btn-azul"  data-toggle="modal" data-target="#mdetalles2" onclick="datosformulacion2(\''+row.id_hc_pad+'\',\''+row.pnombre_paciente+'\',\''+row.papellido_paciente+'\',\''+row.pad_f_reg+'\',\''+row.pad_h_reg+'\',\''+row.pad_medicamentos+'\')"><img src="'+baseurl+'assets/img/iconos/ver.png" class="img-fluid" width="25" height="25"/></a>';
            //                 }
            //                 return '<a href="#" class="btn btn-azul"  data-toggle="modal" data-target="#mdetalles2" onclick="datosformulacion2(\''+row.id_hc_pad+'\',\''+row.pnombre_paciente+'\',\''+row.papellido_paciente+'\',\''+row.pad_f_reg+'\',\''+row.pad_h_reg+'\',\''+row.pad_medicamentos+'\')"><img src="'+baseurl+'assets/img/iconos/ver.png" class="img-fluid" width="25" height="25"/></a><a  href="'+baseurl+'imprimir/generar_f2/'+row.hc_pad_cod+'/'+row.doc_paciente+'/'+row.pad_created_user+'/FM" class="btn btn-rosado" title="Imprimir" onclick="" target="_blank"><img src="'+baseurl+'assets/img/iconos/oj.png" class="img-fluid" width="25" height="25"/></a>';
            //               }
            //           }
            //         }
            //       ],
            //         // "order": [[ 3, "desc" ]],
            //       "order": [],
            //     } );
            // });

          }
          function buscarfprfor(){
            op=$('#selimpfor').val();
            // console.log(op);
          }
    </script>