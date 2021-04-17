    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Consultar Evolucion Enf</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Evolucion Enf</a></li>
              <li class="breadcrumb-item active">Consultar Evolucion Enf</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="wrapper">
    <div class="col-12">
    <!-- <div class="card"> -->
        <div class="col-12" >
            <div class="card" >
              <div class="card-header">
                <h3 class="card-title">Listado de Evolucion Enf</h3>

                
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
            <form id="inf" method="post" onsubmit="return actualizarcita();">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" >Detalles de la Evolucion Enf</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-4">
                        <label class="col-form-label">Nombre</label>
                        <input type="text" class="form-control" id="elnomb" minlength="2" maxlength="35" pattern="\S[A-Za-z ]{2,35}" required/>
                        <input type="text" class="form-control" id="elid" style="display:none"  />
                      </div>
                      <div class="col-md-4">
                        <label class="col-form-label">Tipo de Tratamiento</label>
                        <select class="form-control" id="cualcita" name="cualcita" required>
                          <option></option>
                        </select>
                      </div>
                      <div class="col-md-4">
                        <label class="col-form-label">Fecha de la visita</label>
                        <input size="16" type="date" class="form-control" id="mff" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <label>Hora de la visita</label>
                        <input size="16" type="time" class="form-control" min="00:00" max="17:00" step="3600" id="lahr" required>
                      </div>                      
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <label for="nota" class="col-form-label"><strong>Recomendaciones:</strong></label>
                        <textarea class="form-control" id="lanota" onkeypress="return cmTexto(event);" required></textarea>
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
    </div>
    </div>
    <input type="text" id="cualeslabaseurl" value="<?php echo base_url();?>" style="display:none">
    <script type="text/javascript">
          var baseurl=document.getElementById("cualeslabaseurl").value;
          document.title="Cons. Evolucion Enf | H. Clinica";
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
                  "url":baseurl+"registro/obtener_server_visitas",
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
                  {data: 'visita_f_reg'},
                  // {data: 'Opciones'},
                  {"orderable":true,
                    render:function(data,type,row){
                        return '<a  href="'+baseurl+'imprimir/generar_visita/'+row.id_visita+'/'+row.doc_paciente+'/EV" class="btn btn-azul" title="Imprimir" onclick="" target="_blank"><img src="'+baseurl+'assets/img/iconos/oj.png" class="img-fluid" width="25" height="25"/></a>';
                    }
                  }
                ],
                  // "order": [[ 3, "desc" ]],
                "order": [],
              } );
          }
    </script>