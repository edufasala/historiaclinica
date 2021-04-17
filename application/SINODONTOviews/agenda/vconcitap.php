    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Consultar Citas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Agenda</a></li>
              <li class="breadcrumb-item active">Consultar Citas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php
        date_default_timezone_set("America/Bogota");
          $now = time();
          $getfecha=date("Y-m-d");
          // echo $getfecha;
      ?>
    <div class="wrapper">
    <div class="col-12">
    <!-- <div class="card"> -->
        <div class="col-12" >
            <div class="card" >
              <div class="card-header">
                <h3 class="card-title">Listado de Citas</h3>

                <!-- <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 250px;">
                    <input type="text" id="buscar" onkeyup="individualcita()" class="form-control float-right" placeholder="Nombres Apellidos">

                    <div class="input-group-append">
                      <button type="button" class="btn btn-default" id="buscar2" onclick="mostrar_todas_citas()"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div> -->
                <div class="row">
                  
                  <div class="form-group col-md-4">
                  </div>
                  <div class="form-group col-md-4">
                    <!-- <h5 class="">Consultar por Fecha</h5> -->
                    <label class="">Consultar por Fecha</label>
                  </div>
                  <div class="form-group col-md-4">
                    <input size="16" type="date" value="<?php echo $getfecha?>" class="form-control" id="fchct" name="fchct" onchange="buscarfec();" required>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
          
              <div class="card-body " >
                
                   <table id="resultado" class="display responsive nowrap" style="width:100%">
                  <thead>
                    <tr>
                      <th>Paciente</th>
                      <th>Tipo Tratamiento</th>
                      <th>Profesional</th>
                      <th>Fecha</th>
                      <th>Hora</th>
                      <th>Nota</th>
                      <th>Celular</th>
                      <th>Estado</th>
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
                      //       \''.$fila->nota_cita.'\',\''.$fila->estado_cita.'\')"><img src="'.base_url().'assets/img/iconos/config.png" class="img-fluid" width="25" height="25"/></a></td>
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
            <form id="inf" method="post">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" >Detalles de la Cita</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-4">
                        <label class="col-form-label">Nombre Paciente</label>
                        <input type="text" class="form-control" id="elnomb" readonly="" minlength="2" maxlength="35" pattern="\S[A-Za-z ]{2,35}" required/>
                        <input type="text" class="form-control" id="elid" style="display:none"  />
                      </div>
                      <div class="col-md-4">
                        <label class="col-form-label">Nombre Profesional</label>
                        <input type="text" class="form-control" id="elnombf" readonly="" minlength="2" maxlength="35" pattern="\S[A-Za-z ]{2,35}" required/>
                      </div>
                      <div class="col-md-4">
                        <label class="col-form-label">Tipo de Tratamiento</label>
                        <select class="form-control" id="cualcita" name="cualcita" required>
                          <option></option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <label class="col-form-label">Fecha de la cita</label>
                        <input size="16" type="date" class="form-control" id="mff" required>
                      </div>
                      <div class="col-md-4">
                        <label>Hora de la cita</label>
                        <input size="16" type="time" class="form-control" min="00:00" max="17:00" step="1" id="lahr" required>
                      </div>
                      <div class="col-md-4">
                        <label>Celular</label>
                        <input type="text" class="form-control" id="cel" pattern="[0-9]{10}" maxlength="10" required/>
                        
                      </div>
                      
                      <div class="col-md-4">
                        <label>Estado de la cita</label>
                        <select class="form-control" id="estadocita" name="estadocita" required>
                          <option></option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8">
                        <label for="nota" class="col-form-label"><strong>Nota:</strong></label>
                        <textarea class="form-control" id="lanota" onkeypress="return cmTexto(event);" required></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" id="btnactcita" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmar">ACTUALIZAR</button>
                  <button type="button" id="btnelicita" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#confirme">ELIMINAR</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </form>
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
                  <h5 class="text">Estas Seguro de Actualizar Esta Cita</h5>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="actualizarcita();"> Si </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                  </div>
                </div>
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
        <div id="content"></div>
    </div>
    </div>
    <input type="text" id="cualeslabaseurl" value="<?php echo base_url();?>" style="display:none">
    <input type="text" id="cualeselt" value="<?php echo $this->session->userdata('s_tipo');?>" style="display:none">
    <script type="text/javascript">
          var bsl=document.getElementById("cualeslabaseurl").value;
          var bst=document.getElementById("cualeselt").value;
          var baseurl=bsl;
          window.onload = function() {
            document.title="Cons. Agenda | H. Clinica";
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
                  "url":baseurl+"conagenda/obtener_server_agenda_p",
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
                      return row.pnombre_paciente+" "+row.snombre_paciente+" "+row.papellido_paciente+" "+row.sapellido_paciente;
                    }
                  },
                  {
                    render:function(data,type,row){
                      if(row.agenda_tipo_cita=="c")
                      {
                        return 'Consulta';
                      }
                      else if(row.agenda_tipo_cita=="e")
                      {
                        return 'Examenes';
                      }
                      else if(row.agenda_tipo_cita=="r")
                      {
                        return 'Resultados';
                      }
                      else if(row.agenda_tipo_cita=="v")
                      {
                        return 'Valoracion';
                      }
                    }
                  },
                  {
                    render:function(data,type,row){
                      return row.registro_nombres+" "+row.registro_apellidos;
                    }
                  },
                  {data: 'agenda_f_cita'},
                  {data: 'agenda_h_cita'},
                  {data: 'agenda_nota_cita'},
                  {data: 'agenda_celular'},
                  {
                    render:function(data,type,row){
                      if(row.agenda_estado_cita=="p")
                      {
                        return 'Pendiente';
                      }
                      else if(row.agenda_estado_cita=="a")
                      {
                        return 'Aprobada';
                      }
                      else if(row.agenda_estado_cita=="c")
                      {
                        return 'Cancelada';
                      }
                      else if(row.agenda_estado_cita=="at")
                      {
                        return 'Atendida';
                      }
                    }
                  },
                  {"orderable":true,
                    render:function(data,type,row){
                      if(bst=="2")
                      {
                        return '<a href="#" class="btn btn-azul"  data-toggle="modal" data-target="#mdetalles" onclick="datoscita(\''+row.agendaid+'\',\''+row.pnombre_paciente+'\',\''+row.snombre_paciente+'\',\''+row.papellido_paciente+'\',\''+row.sapellido_paciente+'\',\''+row.agenda_tipo_cita+'\',\''+row.agenda_f_cita+'\',\''+row.agenda_h_cita+'\',\''+row.agenda_celular+'\',\''+row.agenda_nota_cita+'\',\''+row.agenda_estado_cita+'\',\''+row.registro_nombres+'\',\''+row.registro_apellidos+'\')"><img src="'+baseurl+'assets/img/iconos/ver.png" class="img-fluid" width="25" height="25"/></a> <a href="'+baseurl+'/historia_enfermera" class="btn btn-rosado">Ir a H.C Enfermera</a>';//
                      }
                      else if(bst=="3")
                      {
                        return '<a href="#" class="btn btn-azul"  data-toggle="modal" data-target="#mdetalles" onclick="datoscita(\''+row.agendaid+'\',\''+row.pnombre_paciente+'\',\''+row.snombre_paciente+'\',\''+row.papellido_paciente+'\',\''+row.sapellido_paciente+'\',\''+row.agenda_tipo_cita+'\',\''+row.agenda_f_cita+'\',\''+row.agenda_h_cita+'\',\''+row.agenda_celular+'\',\''+row.agenda_nota_cita+'\',\''+row.agenda_estado_cita+'\',\''+row.registro_nombres+'\',\''+row.registro_apellidos+'\')"><img src="'+baseurl+'assets/img/iconos/ver.png" class="img-fluid" width="25" height="25"/></a> <a href="'+baseurl+'/historia" class="btn btn-rosado">Ir a Historia Clinica</a>';//<a href="'+baseurl+'/historia" class="btn btn-rosado">Ir a Historia Clinica</a>
                      }
                      
                    }
                  }
                ],
                  // "order": [[ 3, "desc" ]],
                "order": [],
                
              } );
            $('#fchct').on('change',function(){
              var sel=$('#fchct').val();
              $("#resultado").dataTable().fnDestroy();
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
                  "url":baseurl+"conagenda/obtener_server_agenda_p2/"+sel,
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
                      return row.pnombre_paciente+" "+row.snombre_paciente+" "+row.papellido_paciente+" "+row.sapellido_paciente;
                    }
                  },
                  {
                    render:function(data,type,row){
                      if(row.agenda_tipo_cita=="c")
                      {
                        return 'Consulta';
                      }
                      else if(row.agenda_tipo_cita=="e")
                      {
                        return 'Examenes';
                      }
                      else if(row.agenda_tipo_cita=="r")
                      {
                        return 'Resultados';
                      }
                      else if(row.agenda_tipo_cita=="v")
                      {
                        return 'Valoracion';
                      }
                    }
                  },
                  {
                    render:function(data,type,row){
                      return row.registro_nombres+" "+row.registro_apellidos;
                    }
                  },
                  {data: 'agenda_f_cita'},
                  {data: 'agenda_h_cita'},
                  {data: 'agenda_nota_cita'},
                  {data: 'agenda_celular'},
                  {
                    render:function(data,type,row){
                      if(row.agenda_estado_cita=="p")
                      {
                        return 'Pendiente';
                      }
                      else if(row.agenda_estado_cita=="a")
                      {
                        return 'Aprobada';
                      }
                      else if(row.agenda_estado_cita=="c")
                      {
                        return 'Cancelada';
                      }
                      else if(row.agenda_estado_cita=="at")
                      {
                        return 'Atendida';
                      }
                    }
                  },
                  {"orderable":true,
                    render:function(data,type,row){
                      if(bst=="2")
                      {
                        return '<a href="#" class="btn btn-azul"  data-toggle="modal" data-target="#mdetalles" onclick="datoscita(\''+row.agendaid+'\',\''+row.pnombre_paciente+'\',\''+row.snombre_paciente+'\',\''+row.papellido_paciente+'\',\''+row.sapellido_paciente+'\',\''+row.agenda_tipo_cita+'\',\''+row.agenda_f_cita+'\',\''+row.agenda_h_cita+'\',\''+row.agenda_celular+'\',\''+row.agenda_nota_cita+'\',\''+row.agenda_estado_cita+'\',\''+row.registro_nombres+'\',\''+row.registro_apellidos+'\')"><img src="'+baseurl+'assets/img/iconos/ver.png" class="img-fluid" width="25" height="25"/></a> <a href="'+baseurl+'/historia_enfermera" class="btn btn-rosado">Ir a H.C Enfermera</a>';//
                      }
                      else if(bst=="3")
                      {
                        return '<a href="#" class="btn btn-azul"  data-toggle="modal" data-target="#mdetalles" onclick="datoscita(\''+row.agendaid+'\',\''+row.pnombre_paciente+'\',\''+row.snombre_paciente+'\',\''+row.papellido_paciente+'\',\''+row.sapellido_paciente+'\',\''+row.agenda_tipo_cita+'\',\''+row.agenda_f_cita+'\',\''+row.agenda_h_cita+'\',\''+row.agenda_celular+'\',\''+row.agenda_nota_cita+'\',\''+row.agenda_estado_cita+'\',\''+row.registro_nombres+'\',\''+row.registro_apellidos+'\')"><img src="'+baseurl+'assets/img/iconos/ver.png" class="img-fluid" width="25" height="25"/></a> <a href="'+baseurl+'/historia" class="btn btn-rosado">Ir a Historia Clinica</a>';//<a href="'+baseurl+'/historia" class="btn btn-rosado">Ir a Historia Clinica</a>
                      }
                      
                    }
                  }
                ],
                  // "order": [[ 3, "desc" ]],
                "order": [],
                
              } );
            });
          }
            function buscarfec(){
            obtengolafechadehoy=$('#fchct').val();
            // console.log(obtengolafechadehoy);
            }
    </script>