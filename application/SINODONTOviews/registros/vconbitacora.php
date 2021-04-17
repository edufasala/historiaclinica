<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Consultar Bitacora</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Bitacora</a></li>
              <li class="breadcrumb-item active">Consultar Bitacora</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="wrapper">
    <div class="col-12">
        <div class="col-12" >
            <div class="card" >
              <div class="card-header">
                <h3 class="card-title">Listado de Bitacora</h3>
                 <div class="row">
                  <div class="form-group col-md-4">
                  </div>
                  <div class="form-group col-md-4">
                    <!-- <h5 class="">Consultar por Fecha</h5> -->
                    <label class="">Consultar por Fecha</label>
                  </div>
                  <div class="form-group col-md-4">
                    <!-- <label class="col-form-label"><strong>Fecha de la Cita:</strong></label> -->
                    <input size="16" type="date" class="form-control" id="fchctbtc" name="fchctbtc" onchange="buscarfecbtc();" required>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body" >
                
                   <table id="resultado" class="display responsive nowrap" style="width:100%">
                  <thead>
                    <tr>
                      <th>Nombre/Apellido</th>
                      <th>Fecha/Hora</th>
                      <th>Accion Realizada</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      // foreach ($cn as $fila)
                      // {
                      //   echo '
                      //     <tr>
                      //     <td>'.strtoupper($fila->tipo_doc).'</td>
                      //     <td>'.$fila->documento.'</td>
                      //     <td>'.$fila->nombres_apellidos.'</td>
                      //     <td>'.$fila->motivo_consulta.'</td>
                      //     <td>'.$fila->f_ev.'</td>
                      //     <td>
                                  
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
    </div>
    </div>
    <input type="text" id="cualeslabaseurl" value="<?php echo base_url();?>" style="display:none">
    <script type="text/javascript">
          var baseurl=document.getElementById("cualeslabaseurl").value;
          document.title="Cons. Bitacora | H. Clinica";
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
                dom: 'Brtlip', 
                'ajax':{
                  "url":baseurl+"registro/obtener_server_bitacora",
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
                  {
                    render:function(data,type,row){
                      if(row.id_persona)
                      {
                        //alert("es 0");
                        return row.registro_nombres+" "+row.registro_apellidos;
                      }
                      else
                      {
                        return 'Registro por Sistema';
                      }
                    }
                  },
                  {data:'fecha'},
                  {data:'accion_realizada'}
                  // {"orderable":true,
                  //   render:function(data,type,row){
                  //       return '<a  href="'+baseurl+'imprimir/generar_evolucion/'+row.id_ev+'/'+row.doc_paciente+'/EV" class="btn btn-azul" title="Imprimir" onclick="" target="_blank"><img src="'+baseurl+'assets/img/iconos/oj.png" class="img-fluid" width="25" height="25"/></a>';
                  //   }
                  // }
                ],
                  // "order": [[ 3, "desc" ]],
                "order": [],
                
              } );
            $('#fchctbtc').on('change',function(){
              var sel=$('#fchctbtc').val();
               $('#resultado').dataTable().fnDestroy();
               $('#resultado').DataTable( {
                'lengthMenu':[5,10,20,50,100],
                'paging':true,
                'info':true,
                'filter':true,
                'stateSave':true,
                'processing':true,
                'serverSide':true,
                'responsive':true,
                dom: 'Brtlip', 
                'ajax':{
                  "url":baseurl+"registro/obtener_server_bitacora2/"+sel,
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
                  {
                    render:function(data,type,row){
                      if(row.id_persona)
                      {
                        //alert("es 0");
                        return row.registro_nombres+" "+row.registro_apellidos;
                      }
                      else
                      {
                        return 'Registro por Sistema';
                      }
                    }
                  },
                  {data:'fecha'},
                  {data:'accion_realizada'}
                  // {"orderable":true,
                  //   render:function(data,type,row){
                  //       return '<a  href="'+baseurl+'imprimir/generar_evolucion/'+row.id_ev+'/'+row.doc_paciente+'/EV" class="btn btn-azul" title="Imprimir" onclick="" target="_blank"><img src="'+baseurl+'assets/img/iconos/oj.png" class="img-fluid" width="25" height="25"/></a>';
                  //   }
                  // }
                ],
                  // "order": [[ 3, "desc" ]],
                "order": [],
                
              } );
            });
          }
          function buscarfecbtc(){
            obtengolafechadehoy=$('#fchctbtc').val();
            // console.log(obtengolafechadehoy);
          }
    </script>
