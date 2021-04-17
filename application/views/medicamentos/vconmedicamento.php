    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Consultar Medicamentos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Medicamentos</a></li>
              <li class="breadcrumb-item active">Consultar Medicamentos</li>
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
        <div class="col-12" >
            <div class="card" >
              <div class="card-header">
                <h3 class="card-title">Listado de Medicamentos</h3>

                <!-- <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 250px;">
                    <input type="text" id="buscar" onkeyup="individualcita()" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="button" class="btn btn-default" id="buscar2" onclick="mostrar_todos()"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" >
                
                   <table id="resultado" class="display responsive nowrap" style="width:100%">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Lote</th>
                      <th>Precio Compra</th>
                      <th>Precio Venta</th>
                      <th>Presentacion</th>
                      <th>F/Vencimiento</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      // foreach ($cn as $fila)
                      // {
                      //   echo '
                      //     <tr>
                      //     <td>'.$fila->nombres.'</td>
                      //     <td>'.$fila->tipo_cita.'</td>
                      //     <td>'.$fila->f_cita.'</td>
                      //     <td>'.$fila->h_cita.'</td>
                      //     <td>'.$fila->nota_cita.'</td>
                      //     <td>'.$fila->celular.'</td>
                      //     <td>'.$fila->estado_cita.'</td>
                      //     <td><a href="#" class="btn btn-danger"  data-toggle="modal" data-target="#mdetalles" onclick="datoscita(\''.$fila->id_agenda.'\',
                      //       \''.$fila->nombres.'\',\''.$fila->tipo_cita.'\',\''.$fila->f_cita.'\',\''.$fila->h_cita.'\',\''.$fila->celular.'\',
                      //       \''.$fila->nota_cita.'\',\''.$fila->estado_cita.'\')">OPC</a></td>
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
            <form id="inf" method="post" >
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" >Detalles del Medicamento</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6">
                        <label class="col-form-label">Nombre</label>
                        <input type="text" class="form-control" id="elnomb" name="elnomb" minlength="2" maxlength="35" pattern="\S[A-Za-z ]{2,35}" required/>
                        <input type="text" class="form-control" id="elid" name="elid" style="display:none"  />
                      </div>
                      <div class="col-md-6">
                        <label class="col-form-label">Lote</label>
                        <input type="text" class="form-control" id="ellote" name="ellote" minlength="2" maxlength="35" pattern="\S[A-Za-z0-9 ]{2,35}" required/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <label class="col-form-label">Registro Sanitario</label>
                        <input type="text" class="form-control" id="elreg" name="elreg" minlength="2" maxlength="35" pattern="\S[A-Za-z0-9 ]{2,35}" required/>
                      </div>
                      <div class="col-md-6">
                        <label class="col-form-label">Laboratorio</label>
                        <input type="text" class="form-control" id="lab" id="lab" minlength="2" maxlength="35" pattern="\S[A-Za-z0-9 ]{2,35}" required/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <label>Precio de Compra</label>
                        <input type="number" class="form-control" id="velpre" name="velpre" placeholder="1,000" minlength="1.100" title="Valor Numerico" pattern="[0-9]" step="0.001" required="">
                      </div>
                      <div class="col-md-6">
                        <label>Precio de Venta</label>
                        <input type="number" class="form-control" id="velpv" name="velpv" placeholder="1,000" minlength="1.100" title="Valor Numerico" pattern="[0-9]" step="0.001" required="">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <label for="nota" class="col-form-label"><strong>Presentacion:</strong></label>
                        <input type="text" class="form-control" id="pe" minlength="2" maxlength="35" pattern="\S[A-Za-z0-9 ]{2,35}" required/>                      </div>
                      <div class="col-md-6">
                      <label for="nota" class="col-form-label"><strong>Fecha de Vencimiento:</strong></label>
                        <input type="date" class="form-control"  id="ff" name="ff" required="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" id="btnactmedicamento" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirme">ACTUALIZAR</button>
                  <!-- <button type="button" class="btn btn-danger" >ELIMINAR</button> -->
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
                <h5 class="text">Estas Seguro de Actualizar Este Medicamento</h5>
                  <p></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" onclick="actmedicamento();"> Si </button>
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
          var baseurl=document.getElementById("cualeslabaseurl").value;
          document.title="Cons. Medicamentos | H. Clinica";
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
                    "searchPlaceholder": "Nombre, Lote",
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
                  "url":baseurl+"conmedicamento/obtener_server_md",
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
                  {data: 'nombre'},
                  {data: 'lote'},
                  {data: 'precio_compra'},
                  {data: 'precio_venta'},
                  {data: 'presentacion'},
                  {data: 'vencimiento'},
                  // {data: 'Opciones'},
                  {"orderable":true,
                    render:function(data,type,row){
                      return '<a href="#" class="btn btn-azul"  data-toggle="modal" data-target="#mdetalles" onclick="datosmedicamento(\''+row.codigo+'\',\''+row.nombre+'\',\''+row.lote+'\',\''+row.registro_sanitario+'\',\''+row.laboratorio+'\',\''+row.precio_compra+'\',\''+row.precio_venta+'\',\''+row.presentacion+'\',\''+row.vencimiento+'\')"><img src="'+baseurl+'assets/img/iconos/ver.png" class="img-fluid" width="25" height="25"/></a>';
                    }
                  }
                ],
                  // "order": [[ 3, "desc" ]],
                "order": [],
                
              } );
          }
    </script>