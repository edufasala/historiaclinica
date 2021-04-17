    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Consultar Tiempos de Registro</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Registros</a></li>
              <li class="breadcrumb-item active">Consultar Tiempos de Registro</li>
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
                <h3 class="card-title">Listado de Tiempos de Registro</h3>

                <div class="card-tools">
                  <div class="input-group input-group-md" style="width: 250px;">
                    <select class="form-control" id="selimprimir" name="selimprimir" onchange="buscarhistoria()">
                      <option value="hc_general_tiempo">Histora 1° Vez</option>
                      <option value="ev_tiempo">Historia Clinica</option>
                      <option value="hc_enf_general_tiempo">Historia Enf 1° Vez</option>
                      <option value="visitas_tiempo">Historia Enf</option>
                      <!-- <option value="intervencion">Intervencion</option> -->
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
                      <th>Hora Inicio</th>
                      <th>Hora Fin</th>
                      <th>Tiempo Total</th>
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
          document.title="Cons. Tiempos | H. Clinica";
          var hora_inicio = "12:57:52";
          var hora_final = "01:00:49";
          
          var partes_inicio = hora_inicio.split(':');
          var partes_final = hora_final.split(':');
          var horas = 0;
          var minutos = 0;
          var segundos = 0;
          var hri=parseInt(partes_inicio[0]);
          var mini=parseInt(partes_inicio[1]);
          var segi=parseInt(partes_inicio[2]);
          var hrf=parseInt(partes_final[0]);
          var minf=parseInt(partes_final[1]);
          var segf=parseInt(partes_final[2]);
          // if(hri>1 && hri<10)
          // {
          //   hri+=12;
          // }
          if(hrf>=1 && hrf<=12)
          {
            hrf+=12;
          }
          ophr=0;
          opmin=0;
          opseg3=0;
          opseg4=0;
          if(mini==00)
          {
            mini=60;
          }
          if(minf==00)
          {
            minf=60;
          }
          
          //calculo los minutos
          if(mini>minf)
          {
            minutos=mini-minf;
            opmin=mini-minf;
          
          }
          else if(mini<minf)
          {
            minutos=minf-mini;
            opmin=minf-mini;
            
          }
          else if(mini==minf)
          {
            minutos=00;
            opmin=00;
            
          } 
          opseg=60-segi;
          opseg2=60-segf;
          opseg3=opseg+opseg2;
          if(opseg3>=60)
          {
            opmin+=1;
            opseg4=60-opseg3;
            if(opseg4<=0)
            {
              opseg4=opseg4*-1;
            } 
            opseg3=opseg4;
          }
          if(opmin<=0)
          {
            opmin+=opmin*-1;
          } 
          if(opmin>=60)
          {
            ophr+=1;
          }
          // console.log(horas+":"+minutos+":"+segundos+" ::: "+ophr+"."+opmin+"."+opseg3);

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
                  "url":baseurl+"registro/obtener_server_hc_general_tiempo",
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
                  {data: 'pad_documento'},
                  {data: 'pnombre_paciente'},
                  {data: 'papellido_paciente'},
                  {data: 'pad_f_reg'},
                  {data: 'pad_h_inicio'},
                  {data: 'pad_h_reg'},
                  {
                      render:function(data,type,row){
                        var hora_inicio = row.pad_h_inicio;
                        var hora_final = row.pad_h_reg;
                        var partes_inicio = hora_inicio.split(':');
                        var partes_final = hora_final.split(':');
                        var horas = 0;
                        var minutos = 0;
                        var segundos = 0;
                        var hri=parseInt(partes_inicio[0]);
                        var mini=parseInt(partes_inicio[1]);
                        var segi=parseInt(partes_inicio[2]);
                        var hrf=parseInt(partes_final[0]);
                        var minf=parseInt(partes_final[1]);
                        var segf=parseInt(partes_final[2]);
                        
                        ophr=0;
                        opmin=0;
                        opseg3=0;
                        opseg4=0;
                        if(mini==00)
                        {
                          mini=60;
                        }
                        if(minf==00)
                        {
                          minf=60;
                        }                              
                        //calculo los minutos
                        if(mini>minf)
                        {
                          minutos=mini-minf;
                          opmin=mini-minf;
                        
                        }
                        else if(mini<minf)
                        {
                          minutos=minf-mini;
                          opmin=minf-mini;
                          
                        }
                        else if(mini==minf)
                        {
                          minutos=00;
                          opmin=00;
                          
                        } 
                        opseg=60-segi;
                        opseg2=60-segf;
                        opseg3=opseg+opseg2;
                        if(opseg3>=60)
                        {
                          opmin+=1;
                          opseg4=60-opseg3;
                          if(opseg4<=0)
                          {
                            opseg4=opseg4*-1;
                          } 
                          opseg3=opseg4;
                        }
                        if(opmin<=0)
                        {
                          opmin+=opmin*-1;
                        } 
                        if(opmin>=60)
                        {
                          ophr+=1;
                          //falta sumar minutos
                        }
                        return (ophr < 10 ? '0' : '')+ ophr + ':'+ (opmin < 10 ? '0' : '') + opmin+':'+(opseg3 < 10 ? '0' : '')+opseg3;
                        // // Expresión regular para comprobar formato
                        // var formatohora = /^([01]?[0-9]|2[0-3]):[0-5][0-9]$/;
                        
                        // // Si algún valor no tiene formato correcto sale
                        // if (!(hora_inicio.match(formatohora)
                        //       && hora_final.match(formatohora))){
                        //   return '0';
                        // }
                        
                        // // Calcula los minutos de cada hora
                        // var minutos_inicio = hora_inicio.split(':')
                        //   .reduce((p, c) => parseInt(p) * 60 + parseInt(c));
                        // var minutos_final = hora_final.split(':')
                        //   .reduce((p, c) => parseInt(p) * 60 + parseInt(c));
                        
                        // // Si la hora final es anterior a la hora inicial sale
                        // if (minutos_final < minutos_inicio) return '0';
                        
                        // // Diferencia de minutos
                        // var diferencia = minutos_final - minutos_inicio;
                        
                        // // Cálculo de horas y minutos de la diferencia
                        // var horas = Math.floor(diferencia / 60);
                        // var minutos = diferencia % 60;
                        // var segundos = Math.floor(diferencia % 3600);
                        
                        // return  horas + ':'+ (minutos < 10 ? '0' : '') + minutos+':'+segundos;
                    }
                  },
                  // {data: 'Opciones'},
                  // {"orderable":true,
                  //   render:function(data,type,row){
                  //       return '<a  href="http://localhost/shistoria/imprimir/generar_historia_enf/general/'+row.id_hc_pad+'.'+row.id_hc_valoracion+'.'+row.id_hc_escala+'.'+row.id_hc_intervencion+'/'+row.pad_doc+'/HC" class="btn btn-azul" title="Imprimir" onclick="" target="_blank"><img src="'+baseurl+'assets/img/iconos/oj.png" class="img-fluid" width="25" height="25"/></a>';
                  //   }
                  // }
                ],
                  // "order": [[ 3, "desc" ]],
                "order": [],
              } );

            $('#selimprimir').on('change',function(){
              var sel=$('#selimprimir').val();
              // alert(';'+sel);
              // $("#").DataTable.fnDestroy();
              var documento="";
              var fecha="";
              var fechai="";
              var fechaf="";
              if(op=="hc_general_tiempo")
              {
                documento="pad_documento";
                fecha="pad_f_reg";
                fechai="pad_h_inicio"
                fechaf="pad_h_reg"
              }
              else if(op=="ev_tiempo")
              {
                documento="pad_documento";
                fecha="pad_f_reg";
                fechai="pad_h_inicio"
                fechaf="pad_h_reg"
              }
              else if(op=="hc_enf_general_tiempo")
              {
                documento="enf_pad_doc";
                fecha="enf_pad_f_reg";
                fechai="enf_pad_h_inicio"
                fechaf="enf_pad_h_reg"
              }
              else if(op=="visitas_tiempo")
              {
                documento="enf_pad_doc";
                fecha="enf_pad_f_reg";
                fechai="enf_pad_h_inicio"
                fechaf="enf_pad_h_reg"
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
                    "url":baseurl+"registro/obtener_server_"+sel,
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
                  // 'buttons': [{text:'nuevo'}],
                  'columns':[
                    // {data: 'rownum','sClass':'dt-body-center'},
                    {data: documento},
                    {data: 'pnombre_paciente'},
                    {data: 'papellido_paciente'},
                    {data: fecha},
                    {data: fechai},
                    {data: fechaf},
                    // {data: 'Opciones'},
                    {"orderable":true,
                      render:function(data,type,row,){
                          var hora1="";
                          var hora2="";
                          var aux="";
                          var aux2="";
                          t1 = new Date(),
                          t2 = new Date();
                          
                          if(op=="hc_general_tiempo")
                          {
                            if(row.pad_h_inicio)
                            {
                              var hora_inicio = row.pad_h_inicio;
                              var hora_final = row.pad_h_reg;
                              
                              var partes_inicio = hora_inicio.split(':');
                              var partes_final = hora_final.split(':');
                              var horas = 0;
                              var minutos = 0;
                              var segundos = 0;
                              var hri=parseInt(partes_inicio[0]);
                              var mini=parseInt(partes_inicio[1]);
                              var segi=parseInt(partes_inicio[2]);
                              var hrf=parseInt(partes_final[0]);
                              var minf=parseInt(partes_final[1]);
                              var segf=parseInt(partes_final[2]);
                              
                              ophr=0;
                              opmin=0;
                              opseg3=0;
                              opseg4=0;
                              if(mini==00)
                              {
                                mini=60;
                              }
                              if(minf==00)
                              {
                                minf=60;
                              }                              
                              //calculo los minutos
                              if(mini>minf)
                              {
                                minutos=mini-minf;
                                opmin=mini-minf;
                              
                              }
                              else if(mini<minf)
                              {
                                minutos=minf-mini;
                                opmin=minf-mini;
                                
                              }
                              else if(mini==minf)
                              {
                                minutos=00;
                                opmin=00;
                                
                              } 
                              opseg=60-segi;
                              opseg2=60-segf;
                              opseg3=opseg+opseg2;
                              if(opseg3>=60)
                              {
                                opmin+=1;
                                opseg4=60-opseg3;
                                if(opseg4<=0)
                                {
                                  opseg4=opseg4*-1;
                                } 
                                opseg3=opseg4;
                              }
                              if(opmin<=0)
                              {
                                opmin+=opmin*-1;
                              } 
                              if(opmin>=60)
                              {
                                ophr+=1;
                                //falta sumar minutos
                              }
                              return (ophr < 10 ? '0' : '')+ ophr + ':'+ (opmin < 10 ? '0' : '') + opmin+':'+(opseg3 < 10 ? '0' : '')+opseg3;
                              // aux=row.pad_h_reg;
                              // aux2=row.pad_h_inicio;
                              // hora1 = (row.pad_h_reg).split(":"),
                              // hora2 = (row.pad_h_inicio).split(":"),
                              
                               
                              // t1.setHours(hora1[0], hora1[1], hora1[2]);
                              // t2.setHours(hora2[0], hora2[1], hora2[2]);
                               
                              // t1.setHours(t1.getHours() - t2.getHours(), t1.getMinutes() - t2.getMinutes(), t1.getSeconds() - t2.getSeconds());
                                
                              // return (t1.getHours() ? t1.getHours() + (t1.getHours() > 1 ? " horas" : " hora") : "") + (t1.getMinutes() ? " " + t1.getMinutes() + (t1.getMinutes() > 1 ? " minutos" : " minuto") : "") + (t1.getSeconds() ? (t1.getHours() || t1.getMinutes() ? " y " : "") + t1.getSeconds() + (t1.getSeconds() > 1 ? " segundos" : " segundo") : "");

                            }
                            else if(row.pad_h_inicio=="")
                            {
                              return '0';
                            }
                            return '0';
                          }
                          else if(op=="ev_tiempo")
                          {
                            if(row.pad_h_inicio)
                            {
                              var dif="";
                              var hora_inicio = row.pad_h_inicio;
                              var hora_final = row.pad_h_reg; 
                              var partes_inicio = hora_inicio.split(':');
                              var partes_final = hora_final.split(':');
                              var horas = 0;
                              var minutos = 0;
                              var segundos = 0;
                              var hri=parseInt(partes_inicio[0]);
                              var mini=parseInt(partes_inicio[1]);
                              var segi=parseInt(partes_inicio[2]);
                              var hrf=parseInt(partes_final[0]);
                              var minf=parseInt(partes_final[1]);
                              var segf=parseInt(partes_final[2]);
                              
                              ophr=0;
                              opmin=0;
                              opseg3=0;
                              opseg4=0;
                              if(mini==00)
                              {
                                mini=60;
                              }
                              if(minf==00)
                              {
                                minf=60;
                              }                              
                              //calculo los minutos
                              if(mini>minf)
                              {
                                minutos=mini-minf;
                                opmin=mini-minf;
                              
                              }
                              else if(mini<minf)
                              {
                                minutos=minf-mini;
                                opmin=minf-mini;
                                
                              }
                              else if(mini==minf)
                              {
                                minutos=00;
                                opmin=00;
                                
                              } 
                              opseg=60-segi;
                              opseg2=60-segf;
                              opseg3=opseg+opseg2;
                              if(opseg3>=60)
                              {
                                opmin+=1;
                                opseg4=60-opseg3;
                                if(opseg4<=0)
                                {
                                  opseg4=opseg4*-1;
                                } 
                                opseg3=opseg4;
                              }
                              if(opmin<=0)
                              {
                                opmin+=opmin*-1;
                              } 
                              if(opmin>=60)
                              {
                                ophr+=1;
                                //falta sumar minutos
                              }
                              return (ophr < 10 ? '0' : '')+ ophr + ':'+ (opmin < 10 ? '0' : '') + opmin+':'+(opseg3 < 10 ? '0' : '')+opseg3;                           
                            }
                            else if(row.pad_h_inicio=="")
                            {
                              return '0';
                            }
                            return '0';
                          }
                          else if(op=="hc_enf_general_tiempo")
                          {
                            if(row.enf_pad_h_inicio)
                            {
                              var hora_inicio = row.enf_pad_h_inicio;
                              var hora_final = row.enf_pad_h_reg;
                              
                              var partes_inicio = hora_inicio.split(':');
                              var partes_final = hora_final.split(':');
                              var horas = 0;
                              var minutos = 0;
                              var segundos = 0;
                              var hri=parseInt(partes_inicio[0]);
                              var mini=parseInt(partes_inicio[1]);
                              var segi=parseInt(partes_inicio[2]);
                              var hrf=parseInt(partes_final[0]);
                              var minf=parseInt(partes_final[1]);
                              var segf=parseInt(partes_final[2]);
                              
                              ophr=0;
                              opmin=0;
                              opseg3=0;
                              opseg4=0;
                              if(mini==00)
                              {
                                mini=60;
                              }
                              if(minf==00)
                              {
                                minf=60;
                              }                              
                              //calculo los minutos
                              if(mini>minf)
                              {
                                minutos=mini-minf;
                                opmin=mini-minf;
                              
                              }
                              else if(mini<minf)
                              {
                                minutos=minf-mini;
                                opmin=minf-mini;
                                
                              }
                              else if(mini==minf)
                              {
                                minutos=00;
                                opmin=00;
                                
                              } 
                              opseg=60-segi;
                              opseg2=60-segf;
                              opseg3=opseg+opseg2;
                              if(opseg3>=60)
                              {
                                opmin+=1;
                                opseg4=60-opseg3;
                                if(opseg4<=0)
                                {
                                  opseg4=opseg4*-1;
                                } 
                                opseg3=opseg4;
                              }
                              if(opmin<=0)
                              {
                                opmin+=opmin*-1;
                              } 
                              if(opmin>=60)
                              {
                                ophr+=1;
                                //falta sumar minutos
                              }
                              return (ophr < 10 ? '0' : '')+ ophr + ':'+ (opmin < 10 ? '0' : '') + opmin+':'+(opseg3 < 10 ? '0' : '')+opseg3;
                              //  hora1 = (row.enf_pad_h_reg).split(":"),
                              //     hora2 = (row.enf_pad_h_inicio).split(":"),
                              //     // t1 = new Date(),
                              //     // t2 = new Date();
                               
                              // t1.setHours(hora1[0], hora1[1], hora1[2]);
                              // t2.setHours(hora2[0], hora2[1], hora2[2]);
                               
                              // t1.setHours(t1.getHours() - t2.getHours(), t1.getMinutes() - t2.getMinutes(), t1.getSeconds() - t2.getSeconds());
                                
                              // return (t1.getHours() ? t1.getHours() + (t1.getHours() > 1 ? " horas" : " hora") : "") + (t1.getMinutes() ? " " + t1.getMinutes() + (t1.getMinutes() > 1 ? " minutos" : " minuto") : "") + (t1.getSeconds() ? (t1.getHours() || t1.getMinutes() ? " y " : "") + t1.getSeconds() + (t1.getSeconds() > 1 ? " segundos" : " segundo") : "");
                            }
                            else if(row.enf_pad_h_inicio=="")
                            {
                              return '0';
                            }
                            return '0';
                          }
                          else if(op=="visitas_tiempo")
                          {
                            if(row.enf_pad_h_inicio)
                            {
                              var hora_inicio = row.enf_pad_h_inicio;
                              var hora_final = row.enf_pad_h_reg;
                              
                              var partes_inicio = hora_inicio.split(':');
                              var partes_final = hora_final.split(':');
                              var horas = 0;
                              var minutos = 0;
                              var segundos = 0;
                              // console.log(partes_inicio[0]+":"+partes_inicio[1]+":"+partes_inicio[2]);
                              // console.log(parseInt(partes_inicio[0])+":"+parseInt(partes_inicio[1])+":"+parseInt(partes_inicio[2]));
                              var hri=parseInt(partes_inicio[0]);
                              var mini=parseInt(partes_inicio[1]);
                              var segi=parseInt(partes_inicio[2]);
                              var hrf=parseInt(partes_final[0]);
                              var minf=parseInt(partes_final[1]);
                              var segf=parseInt(partes_final[2]);
                              
                              ophr=0;
                              opmin=0;
                              opseg3=0;
                              opseg4=0;
                              if(mini==00)
                              {
                                mini=60;
                              }
                              if(minf==00)
                              {
                                minf=60;
                              }
                              
                              // console.log("op: "+ophr+":"+opmin+":"+opseg3);
                              //calculo de las horas
                              // if(hri>hrf)
                              // {
                              //   horas=hri-hrf;
                              //   ophr=hri-hrf;
                              // }
                              // else if(hri<hrf)
                              // {
                              //   horas=hrf-hri;
                              //   ophr=hrf-hri;
                              // }
                              // else if(hri==hrf)
                              // {
                              //   horas=00;
                              //   ophr=00;
                              // }
                              //calculo los minutos
                              if(mini>minf)
                              {
                                minutos=mini-minf;
                                opmin=mini-minf;
                              
                              }
                              else if(mini<minf)
                              {
                                minutos=minf-mini;
                                opmin=minf-mini;
                                
                              }
                              else if(mini==minf)
                              {
                                minutos=00;
                                opmin=00;
                                
                              } 
                              //calculo los segundos
                              // if(segi<segf)
                              // {
                              //   segundos=parseInt(partes_inicio[2])-parseInt(partes_final[2]);
                              // }
                              //  if(segi>segf)
                              // {
                              //   segundos=parseInt(partes_final[2])-parseInt(partes_inicio[2]);
                              // }
                              //  if(segi==segf)
                              // {
                              //   segundos=00;
                              // }
                              opseg=60-segi;
                              opseg2=60-segf;
                              opseg3=opseg+opseg2;
                              if(opseg3>=60)
                              {
                                opmin+=1;
                                opseg4=60-opseg3;
                                if(opseg4<=0)
                                {
                                  opseg4=opseg4*-1;
                                } 
                                opseg3=opseg4;
                              }
                              if(opmin<=0)
                              {
                                opmin+=opmin*-1;
                              } 
                              if(opmin>=60)
                              {
                                ophr+=1;
                                //falta sumar minutos
                              }
                              // console.log(ophr+"."+opmin+"."+opseg3);
                              
                              // return horas + ':'+ (minutos < 10 ? '0' : '') + minutos+':'+segundos;
                              // hora1 = (row.visita_h_reg).split(":"),
                              //     hora2 = (row.visita_h_inicio).split(":"),
                              //     // t1 = new Date(),
                              //     // t2 = new Date();
                              // if(hora1[0]>)
                              // t1.setHours(hora1[0], hora1[1], hora1[2]);
                              // t2.setHours(hora2[0], hora2[1], hora2[2]);
                               
                              // t1.setHours(t1.getHours() - t2.getHours(), t1.getMinutes() - t2.getMinutes(), t1.getSeconds() - t2.getSeconds());
                                
                              // return (t1.getHours() ? t1.getHours() + (t1.getHours() > 1 ? " horas" : " hora") : "") + (t1.getMinutes() ? " " + t1.getMinutes() + (t1.getMinutes() > 1 ? " minutos" : " minuto") : "") + (t1.getSeconds() ? (t1.getHours() || t1.getMinutes() ? " y " : "") + t1.getSeconds() + (t1.getSeconds() > 1 ? " segundos" : " segundo") : "");
                              return (ophr < 10 ? '0' : '') + ophr+":"+(opmin < 10 ? '0' : '') + opmin+":"+(opseg3 < 10 ? '0' : '') + opseg3;
                            }
                            else if(row.enf_pad_h_inicio=="")
                            {
                               // console.log('4 nada:'+row.visita_h_inicio);
                               return '0';
                            }
                            return '0';
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
          function calculardiferencia(hora_inicio,hora_final){
            // var hora_inicio = $('#hora_desde').val();
            // var hora_final = $('#hora_hasta').val();
            
            // Expresión regular para comprobar formato
            var formatohora = /^([01]?[0-9]|2[0-3]):[0-5][0-9]$/;
            
            // Si algún valor no tiene formato correcto sale
            if (!(hora_inicio.match(formatohora)
                  && hora_final.match(formatohora))){
              return;
            }
            
            // Calcula los minutos de cada hora
            var minutos_inicio = hora_inicio.split(':')
              .reduce((p, c) => parseInt(p) * 60 + parseInt(c));
            var minutos_final = hora_final.split(':')
              .reduce((p, c) => parseInt(p) * 60 + parseInt(c));
            
            // Si la hora final es anterior a la hora inicial sale
            if (minutos_final < minutos_inicio) return;
            
            // Diferencia de minutos
            var diferencia = minutos_final - minutos_inicio;
            
            // Cálculo de horas y minutos de la diferencia
            var horas = Math.floor(diferencia / 60);
            var minutos = diferencia % 60;
            
            // $('#horas_justificacion_real').val(horas + ':'
            //   + (minutos < 10 ? '0' : '') + minutos);
            return  horas + ':'+ (minutos < 10 ? '0' : '') + minutos;
            console.log(horas + ':'+ (minutos < 10 ? '0' : '') + minutos);
        }
    </script>