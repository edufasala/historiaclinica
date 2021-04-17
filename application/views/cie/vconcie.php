    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Crear y Consultar Diagnosticos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Diagnosticos</a></li>
              <li class="breadcrumb-item active">Crear y Consultar Diagnosticos</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="wrapper">
    <div class="col-12">
    <!-- <div class="card"> -->
        <div class="col-12">
        <div class="card" >
        <div class="card-header">
          <form id="regdig" action="" method="POST">
          <div class="row">
            <div class="col-md-2">
              <label class="col-form-label">Codigo Diagnostico</label>
              <input type="text" class="form-control" id="codig" name="codig" minlength="2" maxlength="35" pattern="\S[A-Za-z0-9 ]{2,35}" />
            </div>
            <div class="col-md-8">
              <label class="col-form-label">Nombre del Diagnostico</label>
              <textarea class="form-control" id="nombdig" name="nombdig" onkeypress="return cmTexto(event);" required></textarea>
            </div>
            <div class="col-md-2 pt-4 mt-4">
              <button type="button" id="btnguardardiganostico" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmar">AGREGAR</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12" style="display:none">
              <label for="nota" class="col-form-label"><strong>Detalle del Diagnostico:</strong></label>
              <textarea class="form-control" id="descdig" name="descdig" onkeypress="return cmTexto(event);" readonly=""></textarea>
            </div>
          </div>
          </form>
        </div>
        </div>
        </div>
        <p></p>
        <div class="col-12" >
            <div class="card" >
              <div class="card-header">
                <h3 class="card-title">Listado de Diagnosticos</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                  <table id="resultado" class="display responsive nowrap" style="width:100%">
                  <thead>
                    <tr>
                      <th>Codigo</th>
                      <th>Descripcion</th>
                      <th>Detalle</th>
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
        <div class="modal" id="mdetalles" tabindex="-1" role="dialog" aria-labelledby="vtitulo">
          <div class="modal-dialog modal-lg modal-show" role="document">
            <form id="inf" method="post" >
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" >Detalles del Diagnostico</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-3">
                        <label class="col-form-label">Codigo Diagnostico</label>
                        <input type="text" class="form-control" id="elid" name="elid" minlength="2" maxlength="35" pattern="\S[A-Za-z0-9 ]{2,35}" readonly="" />
                        <input type="text" class="form-control" id="" style="display:none"  />
                      </div>
                      <div class="col-md-9">
                        <label class="col-form-label">Nombre del Diagnostico</label>
                        <textarea class="form-control" id="ndig" name="ndig" onkeypress="return cmTexto(event);" required></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8">
                        <label for="nota" class="col-form-label"><strong>Detalle del Diagnostico:</strong></label>
                        <textarea class="form-control" id="ddig" name="ddig" onkeypress="return cmTexto(event);" readonly=""></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <!-- <button type="submit" class="btn btn-primary" data-dismiss=""></button> -->
                  <button type="button" id="btnactdiganostico" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirme">ACTUALIZAR</button>
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
                <h5 class="text">Estas Seguro de Actualizar Este Diagnostico</h5>
                  <p></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" onclick="actdiagnostico();"> Si </button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </div>
              </div>
            </div>
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
                <h5 class="text">Estas Seguro de Registrar Este Diagnostico</h5>
                  <p></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" onclick="indiagnostico();"> Si </button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </div>
              </div>
            </div>
        </div>
        <div id="content"></div>
    </div>
    </div>
    <input type="text" id="cualeslabaseurl" value="<?php echo base_url();?>" style="display:none">
    <script type="text/javascript">
      // $(document).ready(function() {
      //     $('#resultado').DataTable( {
      //         order: [[ 3, 'desc' ], [ 0, 'asc' ]]
      //     } );
      // } );

          var baseurl=document.getElementById("cualeslabaseurl").value;
          document.title="Cons. Diagnosticos | H. Clinica";
          window.onload = function() {
             // $('#resultado').DataTable( {
             //    // 'paging':true,
             //    // 'info':true,
             //    // 'filter':true,
             //    // 'stateSave':true,
             //    // 'ajax':{
             //    //   "url":baseurl+"",
             //    //   "type":"POST",
             //    //   dataSrc:''
             //    // },
             //    // 'columns'
             //      "order": [[ 3, "desc" ]],
                
             //  } );
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
                    "searchPlaceholder": "Codigo, Descripcion",
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
                  "url":baseurl+"diagnostico/obtener_server",
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
                  {data: 'codigo_cie'},
                  {data: 'descripcion_cie'},
                  {data: 'cod_desc_cie'},
                  {"orderable":true,
                    render:function(data,type,row){
                        return '<a href="#" class="btn btn-azul"  data-toggle="modal" data-target="#mdetalles" onclick="datosdig(\''+row.codigo_cie+'\',\''+row.descripcion_cie+'\',\''+row.descripcion_cie+'\')"><img src="'+baseurl+'assets/img/iconos/ver.png" class="img-fluid" width="25" height="25"/></a>'
                    }
                  }
                ],
                  // "order": [[ 3, "desc" ]],
                "order": [],
                
              } );
          }
    </script>