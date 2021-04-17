    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Consultar Empleados</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Empleados</a></li>
              <li class="breadcrumb-item active">Consultar Empleados</li>
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
                <h3 class="card-title">Listado de Empleados</h3>

                <!-- <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 250px;">
                    <input type="text" id="buscar" onkeyup="individualtra()" class="form-control float-right" placeholder="Nombres Apellidos">

                    <div class="input-group-append">
                      <button type="button" class="btn btn-default" id="buscar2" onclick="mostrar_todos_tra()"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" >
                
                   <table id="resultado" class="display responsive nowrap" style="width:100%">
                  <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Sexo</th>
                        <th>Tipo/Empleado</th>
                        <th>Estado</th>
                        <th>Imagen</th>
                        <th>Celular</th>
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
                      //     <td>'.$fila->apellidos.'</td>
                      //     <td>'.$fila->sexo.'</td>
                      //     <td>Trabajador</td>
                      //     <td>'.$fila->estado_empleado.'</td>
                      //     <td><img src="'.base_url().$fila->img_empleado.'" class="img-circle" width="45px" height="45px"></td>
                      //     <td>'.$fila->celular.'</td>
                      //     <td><a href="#" class="btn btn-danger"  data-toggle="modal" data-target="#mdetalles" onclick="datosempleado(\''.$fila->id_empleado.'\',
                      //       \''.$fila->nombres.'\',\''.$fila->apellidos.'\',\''.$fila->contra.'\',\''.$fila->f_nacimiento.'\',\''.$fila->edad.'\',
                      //       \''.$fila->celular.'\',\''.$fila->sexo.'\',\''.$fila->tipo_empleado.'\',\''.$fila->estado_empleado.'\',\''.$fila->img_empleado.'\')"><img src="'.base_url().'assets/img/iconos/config.png" class="img-fluid" width="25" height="25"/></a></td>
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
        <div class="modal" id="mdetalles" tabindex="-1" role="dialog" aria-labelledby="vtitulo">
          <div class="modal-dialog modal-lg modal-show" role="document">
            <form id="inftr" method="post" enctype="multipart/form-data">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Detalles del Empleado</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-4">
                      </div>
                      <div class="col-md-4">
                        <div class="" style="text-align: center;">
                          <img id="laimg" src="" width="150px" height="150px" class="img-fluid img-rounded">
                          <input type="text" class="form-control" id="imga" name="imga" style="display:none" />
                        </div>
                      </div>
                      <div class="col-md-4">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-5">
                        <label for="nombre" class="col-form-label"><strong>Nombres:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="text" class="form-control" placeholder="Nombres" id="nombr" name="nombr" minlength="2" maxlength="35" pattern="\S[A-Za-z ]{2,35}" required/>
                        </div>
                      </div>
                      <div class="form-group col-md-5">
                        <label for="nombre" class="col-form-label"><strong>Apellidos:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="text" class="form-control" placeholder="Apellidos" id="elape" name="elape" minlength="2" maxlength="35" pattern="\S[A-Za-z ]{2,35}" required/>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-5">
                        <label for="nombre" class="col-form-label"><strong>Correo(Usuario):</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="email" class="form-control" id="corr" name="corr" aria-describedby="emailHelp" placeholder="ejemplo@hotmail.com" readonly="">
                        </div>
                      </div>
                      <div class="form-group col-md-5">
                        <label class="col-form-label"><strong>Sexo:</strong></label>
                        <select class="form-control" id="tpsex" name="tpsex" required>
                          <option ></option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-5">
                        <label for="nota" class="col-form-label"><strong>Fecha de Nacimiento:</strong></label>
                        <input size="" type="date" class="form-control" id="fnaci" name="fnaci" onchange="calcularedad2()" required/>
                      </div>
                      <div class="form-group col-md-5">
                        <label for="nota" class="col-form-label"><strong>Edad:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                            </span>
                          </div>
                          <input type="text" class="form-control" placeholder="0" id="edad" name="edad" readonly="" required/> 
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-5">
                        <label for="celular" class="col-form-label"><strong>Telefono/Celular:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                            </span>
                          </div>
                          <input type="text" class="form-control" placeholder="317002001." id="elcelular" name="elcelular" title="Solo Numeros min:10 max:10" pattern="[0-9]{10}" maxlength="10" required/>
                        </div>
                      </div>
                      <div class="form-group col-md-5">
                        <label class="col-form-label"><strong>Tipo de Emepleado:</strong></label>
                        <select class="form-control" id="templeado" name="templeado" onchange="mcualempleado2();" required>
                          <option selected value="0">Eliga</option>
                          <option value="trabajador">Trabajador</option>
                          <option value="medico">Medico</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-5">
                        <label class="col-form-label"><strong>Estado</strong></label>
                        <select class="form-control" id="elestado" name="elestado" required>
                          <option></option>
                        </select>
                      </div>
                      <div  class="form-group col-md-5" id="regemc1" name="regemc1" style="display:none">
                        <label for="celular" class="col-form-label"><strong>N° de Documento:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                            </span>
                          </div>
                          <input type="text" class="form-control" placeholder="" id="elndoc" name="elndoc" title="Solo Numeros min:5 max:10" pattern="[0-9]{10}" maxlength="10" required/>
                        </div>
                      </div>
                      <div id="regemc2" class="form-group col-md-5" style="display:none">
                        <label for="celular" class="col-form-label"><strong>N° de Registro:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <img src="<?php echo base_url();?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                            </span>
                          </div>
                          <input type="text" class="form-control" placeholder="" id="elnreg" name="elnreg" title="Solo Numeros min:2 max:20" pattern="[0-9]{20}" maxlength="20" required/>
                        </div>
                      </div>
                      <div id="regemc3" class="form-group col-md-5" style="display:none">
                        <label for="nombre" class="col-form-label"><strong>Especialidad:</strong></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <img src="<?php echo base_url();?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                              </span>
                          </div>
                          <input type="text" class="form-control" placeholder="" id="laespec" name="laespec" minlength="2" maxlength="35" pattern="\S[A-Za-z ]{2,35}" required/>
                        </div>
                      </div>
                      <div class="col-md-5">
                        <label class="col-form-label"><strong>Imagen</strong></label>
                        <input type="file" class="form-control" id="mift" name="mift" />
                      </div>
                    </div>
                    <div class="row">
                      
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" id="btnacttra" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#confirme">ACTUALIZAR</button>
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
                <h5 class="text">Estas Seguro de Actualizar Este Empleado</h5>
                  <p></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" onclick="acttrabajador();"> Si </button>
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
          document.title="Cons. Empleados | H. Clinica";
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
                    "searchPlaceholder": "Nombres",
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
                  "url":baseurl+"contrabajador/obtener_server_trabajador",
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
                  {data: 'registro_nombres'},
                  {data: 'registro_apellidos'},
                  {data: 'registro_sexo'},
                  {
                    render:function(data,type,row){
                      if(row.registro_tipo=="1")
                      {
                        return 'empleado';
                      }
                      else if(row.registro_tipo=="2")
                      {
                        return 'enfermero(a)';
                      }
                      else if(row.registro_tipo=="3")
                      {
                        return 'medico(a)';
                      }
                    }
                  },
                  {
                    render:function(data,type,row){
                      if(row.registro_estado=="1")
                      {
                        return 'activo';
                      }
                      else if(row.registro_estado=="0")
                      {
                        return 'inactivo';
                      }
                    }
                  },
                  {
                    render:function(data,type,row){
                      return '<div class="text-center"><img src="'+baseurl+'/'+row.registro_img+'" class="img-fluid img-circle" width="35" height="35"/></div>';
                    }
                  },
                  {data: 'registro_celular'},
                  {"orderable":true,
                    render:function(data,type,row){
                      return '<a href="#" class="btn btn-azul"  data-toggle="modal" data-target="#mdetalles" onclick="datosempleado(\''+row.id_registro_usuario+'\',\''+row.registro_nombres+'\',\''+row.registro_apellidos+'\',\''+row.registro_f_nacimiento+'\',\''+row.registro_edad+'\',\''+row.registro_celular+'\',\''+row.registro_sexo+'\',\''+row.registro_img+'\',\''+row.registro_tipo+'\',\''+row.registro_estado+'\',\''+row.registro_doc+'\',\''+row.registro_n_medico+'\',\''+row.registro_especialidad+'\')"><img src="'+baseurl+'assets/img/iconos/ver.png" class="img-fluid" width="25" height="25"/></a>';
                    }
                  }
                ],
                  // "order": [[ 3, "desc" ]],
                "order": [],
                
              } );
          }
    </script>