<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Consultar Perfil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Perfil</a></li>
              <li class="breadcrumb-item active">Consultar Perfil</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="wrapper">
    <div class="col-12">
    <div class="card">
      <?php
        $campos = json_decode(json_encode($cn), True);
        // $n=$nombres;
        // $ax=explode(" ", $n);
        // $n=$ax[0];
        // echo ":".$cn[0]->id_empleado.$cn[0]->nombres;
        $axsex="";
        $sx=$cn[0]->registro_sexo;
        if($sx=="m")
        {
          $axsex="f";
        }
        else if($sx=="f")
        {
          $axsex="m";
        }
      ?>
      <form id="actpfa" action="#" method="post" enctype="multipart/form-data">
              <div class="form-row p-2">
                <div class="form-group col-md-3">
                  <label for="" class="col-form-label"><h5>Perfil de <?php echo ucwords($cn[0]->registro_nombres)?></h5></label>
                  <div class="">
                    
                    <img src="<?php echo base_url().$cn[0]->registro_img?>" width="240px" height="120px" class="img-fluid rounded">
                    
                    <input type="text" class="form-control" name="ftanterior" value="<?php echo $cn[0]->registro_img;?>" style="display:none" />
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <label class="col-form-label"><strong>Correo</strong></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <img src="<?php echo base_url()?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="100100010" id="corre" name="corre" value="<?php echo $cn[0]->id_registro_usuario?>" readonly=""/>
                  </div>
                  <label class="col-form-label"><strong>Nombres</strong></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <img src="<?php echo base_url()?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="100100010" id="elnombre" name="elnombre" value="<?php echo $cn[0]->registro_nombres?>" minlength="2" maxlength="35" pattern="\S[A-Za-z ]{2,35}" required/>
                  </div>
                  <label class="col-form-label"><strong>Fecha de Nacimiento</strong></label>
                  <input size="16" type="date" class="form-control" id="fnaci" name="fnaci" value="<?php echo $cn[0]->registro_f_nacimiento?>" onchange="calcularedad8()" required>
                  <label class="col-form-label"><strong>Telefono/Celular</strong></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <img src="<?php echo base_url()?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="" id="elcelular" name="elcelular" value="<?php echo $cn[0]->registro_celular?>" title="Solo Numeros min:10 max:10" pattern="[0-9]{10}" maxlength="10" required />
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <label for="nombre" class="col-form-label"><strong>Apellidos</strong></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <img src="<?php echo base_url()?>assets/img/iconos/user.png" class="rounded-circle" width="22px" height="22px">
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Nombres Apellidos" id="elape" name="elape"  value="<?php echo $cn[0]->registro_apellidos?>" minlength="2" maxlength="35" pattern="\S[A-Za-z ]{2,35}" required/>
                  </div>
                  <label class="col-form-label"><strong>Edad</strong></label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <img src="<?php echo base_url()?>assets/img/iconos/combo.png" class="rounded-circle" width="22px" height="22px">
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="0" id="edad" name="edad" value="<?php echo $cn[0]->registro_edad?>" readonly=""  required />
                  </div>
                  <label class="col-form-label"><strong>Sexo:</strong></label>
                  <select class="form-control float-center" id="sex" name="sex" required>
                    <option selected="" value="<?php echo $sx?>"><?php echo strtoupper($cn[0]->registro_sexo) ?></option>
                    <option value="<?php echo $axsex?>"><?php echo strtoupper($axsex) ?></option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label class="col-form-label"><strong>Imagen de Perfil:</strong></label>
                  <input type="file" id="foto" name="foto" class="form-control-file" accept="image/*" />
                </div>
                <div class="form-group col-sm-12"></div>
                <div class="form-group col-md-12" id="carga" style="display:none">
                  <button class="btn btn-success" type="button" disabled>
                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                    Realizando Peticion...
                  </button>
                </div>
                <div class="form-group col-sm-2">
                  <button type="button" id="btnperfilad" class="btn btn-azul" data-dismiss="modal" data-toggle="modal" data-target="#confirmar">ACTUALIZAR</button>
                </div>
                <div class="form-group col-md-2">
                  <button type="button" class="btn btn-danger" >CANCELAR</button>
                </div>
              </div>
            </form>
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
                  <h5 class="text">Estas Seguro de Actualizar tu Perfil</h5>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="actperfila();"> Si </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                  </div>
                </div>
              </div>
            </div>
            <div id="content"></div>
      </div>
      </div>
      </div>