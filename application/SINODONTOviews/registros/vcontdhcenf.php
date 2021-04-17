    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Consultar Historias Enfermera</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Registros</a></li>
              <li class="breadcrumb-item active">Consultar Historias Enfermera</li>
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
                <h3 class="card-title">Listado de Historias Clinicas de Enfermera primera vez</h3>

                <div class="card-tools">
                  <div class="input-group input-group-md" style="width: 250px;">
                    <select class="form-control" id="selimprimir" name="selimprimir" onchange="buscarhistoria()">
                      <option value="general">General</option>
                      <option value="pad">Historia de Enfermera Primera vez</option>
                      <option value="sociofamiliar">Socio Familiar</option>
                      <option value="escaladecarga">Escala de Carga</option>
                      <option value="intervencion">Intervencion</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="resultado" class="display responsive nowrap" style="width:100%">
                  <thead>
                    <tr>
                      <th>Documento</th>
                      <th>Nombres</th>
                      <th>Apellidos</th>
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
    </div>
    </div>
    <input type="text" id="cualeslabaseurl" value="<?php echo base_url();?>" style="display:none">
    <script type="text/javascript">
          var baseurl=document.getElementById("cualeslabaseurl").value;
          document.title="Cons. Historia Enf | H. Clinica";
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
                    },
          
                }           
            } );
             $('#resultado').DataTable( {
                'lengthMenu':[5,10,20,50,100],
                'lengthMenu2':['uno','dos'],
                'paging':true,
                'info':true,
                'filter':true,
                'stateSave':true,
                'processing':true,
                'serverSide':true,
                'responsive':true,
                 dom: 'Bfrtlip',  
                'ajax':{
                  "url":baseurl+"registro/obtener_server_hc_enf_general",
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
                  {data: 'enf_pad_doc'},
                  {data: 'pnombre_paciente'},
                  {data: 'papellido_paciente'},
                  {data: 'enf_pad_f_reg'},
                  // {data: 'Opciones'},
                  {"orderable":true,
                    render:function(data,type,row){
                        return '<a  href="'+baseurl+'imprimir/generar_historia_enf/general/'+row.id_hc_enf_pad+'/'+row.enf_pad_doc+'/'+row.enf_pad_f_reg+'/HC" class="btn btn-azul" title="Imprimir" onclick="" target="_blank"><img src="'+baseurl+'assets/img/iconos/oj.png" class="img-fluid" width="25" height="25"/></a>';
                    }
                  }
                ],
                  // "order": [[ 3, "desc" ]], target="_blank"  window.print()
                "order": [],
              } );

            $('#selimprimir').on('change',function(){
              var sel=$('#selimprimir').val();
              // alert(';'+sel);
              // $("#").DataTable.fnDestroy();
              var documento="";
              var fecha="";
              if(op=="general")
              {
                documento="enf_pad_doc";
                fecha="enf_pad_f_reg";
              }
              else if(op=="pad")
              {
                documento="enf_pad_doc";
                fecha="enf_pad_f_reg";
              }
              else if(op=="sociofamiliar")
              {
                documento="enf_valoracion_doc";
                fecha="enf_valoracion_f_reg";
              }
              else if(op=="escaladecarga")
              {
                documento="enf_escala_doc";
                fecha="enf_escala_f_reg";
              }
              else if(op=="intervencion")
              {
                documento="enf_intervencion_doc";
                fecha="enf_intervencion_f_reg";
              }
              $("#resultado").dataTable().fnDestroy();
                $('#resultado').DataTable( {
                  'lengthMenu':[5,10,20,50,100],
                  'lengthMenu2':['uno','dos'],
                  'paging':true,
                  'info':true,
                  'filter':true,
                  'stateSave':true,
                  'processing':true,
                  'serverSide':true,
                  'responsive':true,
                   dom: 'Bfrtlip',  
                  'ajax':{
                    "url":baseurl+"registro/obtener_server_hc_enf_"+sel,
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
                    {data: documento},
                    {data: 'pnombre_paciente'},
                    {data: 'papellido_paciente'},
                    {data: fecha},
                    // {data: 'Opciones'},
                    {"orderable":true,
                      render:function(data,type,row){
                          if(op=="general")
                          {
                            return '<a  href="'+baseurl+'imprimir/generar_historia_enf/'+sel+'/'+row.id_hc_enf_pad+'/'+row.enf_pad_doc+'/'+row.enf_pad_f_reg+'/HC" class="btn btn-azul" title="Imprimir" onclick="" target="_blank"><img src="'+baseurl+'assets/img/iconos/oj.png" class="img-fluid" width="25" height="25"/></a>';
                          }
                          else if(op=="pad")
                          {
                            return '<a  href="'+baseurl+'imprimir/generar_historia_enf/'+sel+'/'+row.id_hc_enf_pad+'/'+row.enf_pad_doc+'/HC" class="btn btn-azul" title="Imprimir" onclick="" target="_blank"><img src="'+baseurl+'assets/img/iconos/oj.png" class="img-fluid" width="25" height="25"/></a>'; 
                          }
                          else if(op=="sociofamiliar")
                          {
                            return '<a  href="'+baseurl+'imprimir/generar_historia_enf/'+sel+'/'+row.id_hc_enf_valoracion+'/'+row.enf_valoracion_doc+'/HC-Valoracion" class="btn btn-azul" title="Imprimir" onclick="" target="_blank"><img src="'+baseurl+'assets/img/iconos/oj.png" class="img-fluid" width="25" height="25"/></a>'; 
                          }
                          else if(op=="escaladecarga")
                          {
                            return '<a  href="'+baseurl+'imprimir/generar_historia_enf/'+sel+'/'+row.id_hc_enf_escala+'/'+row.enf_escala_doc+'/HC-Escala" class="btn btn-azul" title="Imprimir" onclick="" target="_blank"><img src="'+baseurl+'assets/img/iconos/oj.png" class="img-fluid" width="25" height="25"/></a>'; 
                          }
                          else if(op=="intervencion")
                          {
                            return '<a  href="'+baseurl+'imprimir/generar_historia_enf/'+sel+'/'+row.id_hc_enf_intervencion+'/'+row.enf_intervencion_doc+'/HC-Intervencion" class="btn btn-azul" title="Imprimir" onclick="" target="_blank"><img src="'+baseurl+'assets/img/iconos/oj.png" class="img-fluid" width="25" height="25"/></a>'; 
                          }                          
                      }
                    }
                  ],
                    // "order": [[ 3, "desc" ]],
                  "order": [],
                } );
            });
          }
          function buscarhistoria(){
            op=$('#selimprimir').val();
            // console.log(op);
          }
    </script>