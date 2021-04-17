<script type="text/javascript">
  // document.title="";
  window.onload=function(){
    g=" | H. Clinica";
    t=$('#lostitu').val();
    // alert(t);
    if(t=="visita")
    {
      t="evolucion";
    }
    document.title=t.replace(/\b\w/g, function(l){ return l.toUpperCase() })+g;
    
  }
</script>
  <?php
  $segs = $this->uri->segment_array();
  $vf= end($segs);
  echo '<input type="text" id="lostitu" value="'.$vf.'" style="display:none">';
  if(!$this->session->userdata('s_tipo'))
  {
    redirect('entrar');
  }
  ?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url();?>inicio_enfermera" class="nav-link">Inicio</a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown d-none d-sm-inline-block">
          <h5 class="pd-2 pt-2"><span class="hidden-xs">Bienvenido, <?php echo '<strong>'.ucwords($this->session->userdata('s_n')).', '.ucwords($this->session->userdata('s_ap')).'</strong>';?> </span></h5>
        <!-- <a href="#" class="nav-link" data-toggle="dropdown">
        <a> -->
         <!-- <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  
          <div class="dropdown-divider"></div>
          <div class="dropdown-divider"></div>
          <a href="<?php echo base_url();?>enfermera" class="dropdown-item dropdown-footer">Perfil</a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer" data-dismiss="modal" data-toggle="modal" data-target="#confirmarsalir">Salir</a>

        </div> -->
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link" data-toggle="dropdown">
        <i class="far fa-edit"></i>
          <?php
            // echo $this->session->userdata('s_n');
            $cargo=$this->session->userdata('s_tipo');
            $aux="";
            if($cargo=="tra")
            {
                $aux="Trabajador";
            }
            else
            {
                $aux="Usuario";
            }
            // solo mostrar en el inico
            $segs = $this->uri->segment_array();
            $vf= end($segs);
            $aux="";
            if($vf=="inicio_enfermera")
            {
              $aux="/assets/img/consultorio.png";
            }
            else
            {
              $aux="";
            }
          ?>
        </a>
          <!-- <h5><span class="hidden-xs">Bienvenido, <?php echo '<strong>'.ucwords($this->session->userdata('s_n')).', '.ucwords($this->session->userdata('s_ap')).'</strong>';?> </span></h5> -->
        <!-- <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">          
          <div class="dropdown-divider"></div>
         
          <div class="dropdown-divider"></div>
          <a href="<?php echo base_url();?>enfermera" class="dropdown-item dropdown-footer">Perfil</a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer" data-dismiss="modal" data-toggle="modal" data-target="#confirmarsalir">Salir</a>

        </div> -->
        <!-- <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-edit"></i>
          
        </a> -->

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  
          <div class="dropdown-divider"></div>
          <div class="dropdown-divider"></div>
          <a href="<?php echo base_url();?>enfermera" class="dropdown-item dropdown-footer">Perfil</a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer" data-dismiss="modal" data-toggle="modal" data-target="#confirmarsalir">Salir</a>

        </div>
        
      </li>
      <!-- <li class="nav-item ">
        <a class="nav-link"  href="#">
          <i class="far fa-edit"></i>
          
        </a>
        
      </li> -->
    </ul>
  </nav>
 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-white-primary elevation-4" style="">
    <!-- Brand Logo -->
    <a href="<?php echo base_url();?>inicio_enfermera" class="brand-link">
      <div class="info text-center container">
      <!-- <img src="<?php echo base_url();?>assets/img/logo3.png" alt="AdminLTE Logo" class="img-rounded elevation-1"
           style="opacity: .8"> -->
         <img src="<?php echo base_url();?>assets/img/logo3.png" alt="compcasa Logo" class="img-rounded elevation-2 img-fluid"
           width="220" height="80">
      </div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="info text-center container mt-1 mb-1">
          <img src="<?php echo base_url().$this->session->userdata('s_img')?>" class="img-circle elevation-2" width="420px" height="40px" alt="User Image">
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item">
            <a href="<?php echo base_url();?>inicio_enfermera" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <font size="4"><p>Inicio</p></font>
            </a>
          </li> -->
          <!-- <li class="nav-item has-treeview menu">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <font size="4"><p>
                Paciente
                <i class="right fas fa-angle-left"></i>
              </p></font>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>paciente" class="nav-link"> 
                  <i class="far fa-circle nav-icon"></i>
                  <font size="4"><p>Registrar</p></font>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>conpaciente" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <font size="4"><p>Consultar</p></font>
                </a>
              </li>
            </ul>
          </li> -->
          <!-- <li class="nav-item has-treeview menu">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-box"></i>
              <font size="4"><p>
                Medicamentos
                <i class="right fas fa-angle-left"></i>
              </p></font>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>medicamento" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <font size="4"><p>Crear</p></font>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>conmedicamento" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <font size="4"><p>Consultar</p></font>
                </a>
              </li>
            </ul>
          </li> -->
          <!-- <li class="nav-item has-treeview menu">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-plus-square"></i>
              <font size="4"><p>
                H. E. Primera Vez.
                <i class="right fas fa-angle-left"></i>
              </p></font>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>historia_enfermera" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <font size="4"><p>Registrar</p></font>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>conhistoria_enfermera" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <font size="4"><p>Consultar</p></font>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item has-treeview menu">
          </li>
          <div class="btn-group">
              <button class="btn btn-morado btn-lg dropdown-toggle-split text-left text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="nav-icon fas fa-copy text-dark"></i> Paciente
              </button>
              <div class="dropdown-menu dropdown-menu-left" style="background:#EBEAEA" aria-labelledby="dropdownMenuButton">
                <!-- <a type="button" class="btn btn-lg dropdown-item" href="<?php echo base_url();?>historia" >Registro Primera Vez</a> -->
                <a type="button" class="btn btn-lg dropdown-item" href="<?php echo base_url();?>conpaciente" >Consultar</a>
              </div>
            </div>
          
          <br>
            <div class="btn-group">
              <button class="btn btn-morado btn-lg dropdown-toggle-split text-left text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="nav-icon fas fa-plus-square text-dark"></i> H.C Enfermeria
              </button>
              <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuButton">
              <!-- <a type="button" class="btn btn-lg dropdown-item" onclick="mimenu_enf1('1')">H.E Primera Vez</a> -->
                <a type="button" class="btn btn-lg dropdown-item" href="<?php echo base_url();?>historia_enfermera">H.E Primera Vez</a>
                <a type="button" class="btn btn-lg dropdown-item" href="<?php echo base_url();?>historia_enfermera_n">H.E Atenciones</a>
              </div>
            </div>
         <!--  <li class="nav-item has-treeview menu">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <font size="4"><p>
                Historia Enfermera
                <i class="right fas fa-angle-left"></i>
              </p></font>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>historia_enfermera_n" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <font size="4"><p>Registrar</p></font>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>conhistoria_enfermera_n" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <font size="4"><p>Consultar</p></font>
                </a>
              </li>
            </ul>
          </li> -->
          <br>
          <li class="nav-item has-treeview menu">
          </li>
            <div class="btn-group">
              <button class="btn btn-morado btn-lg dropdown-toggle-split text-left text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="nav-icon fas fa-copy text-dark"></i> Agenda Enfermeria
              </button>
              <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuButton">
                <a type="button" class="btn btn-lg dropdown-item" href="<?php echo base_url();?>agenda">Crear Cita</a>
                <a type="button" class="btn btn-lg dropdown-item" href="<?php echo base_url();?>conagenda">Consultar Cita</a>
              </div>
            </div>
          <br>
          <li class="nav-item has-treeview menu">
          </li>
            <div class="btn-group dropright">
              <button class="btn btn-morado btn-lg dropdown-toggle-split text-left text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="nav-icon fas fa-book text-dark"></i> Consultas
              </button>
              <div class="dropdown-menu dropdown-menu-botton" aria-labelledby="dropdownMenuButton">
                <a type="button" class="btn btn-lg dropdown-item" href="<?php echo base_url();?>registro/historia_clinica">H.E Atención</a>
                <a type="button" class="btn btn-lg dropdown-item" href="<?php echo base_url();?>registro/historia_clinica_n">H.E Consolidada</a>
              </div>
            </div>
          <br>
          <li class="nav-item has-treeview menu">
          </li>
            <div class="btn-group dropright">
              <button class="btn btn-morado btn-lg dropdown-toggle-split text-left text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="nav-icon fas fa-book text-dark"></i> Formulaciones
              </button>
              <div class="dropdown-menu dropdown-menu-botton" aria-labelledby="dropdownMenuButton">
                <a type="button" class="btn btn-lg dropdown-item" href="<?php echo base_url();?>formulacion">Registrar</a>
                <a type="button" class="btn btn-lg dropdown-item" href="<?php echo base_url();?>conformulacion">Consultar</a>
              </div>
            </div>

          <!-- <li class="nav-item has-treeview menu">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <font size="4"><p>
                Evolucion Enf
                <i class="right fas fa-angle-left"></i>
              </p></font>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>visita" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <font size="4"><p>Registrar</p></font>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>convisita" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <font size="4"><p>Consultar</p></font>
                </a>
              </li>
            </ul>
          </li> -->
          <!-- <li class="nav-item has-treeview menu">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <font size="4"><p>
                Reportes
                <i class="right fas fa-angle-left"></i>
              </p></font>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>registro/historia_clinica" class="nav-link"> 
                  <i class="far fa-circle nav-icon"></i>
                  <font size="4"><p>H.C. Primera Vez</p></font>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>registro/historia_clinica_n" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <font size="4"><p>Historia Clinica</p></font>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>registro/historia_clinica_enf" class="nav-link"> 
                  <i class="far fa-circle nav-icon"></i>
                  <font size="4"><p>H.E. Primera Vez</p></font>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>registro/historia_clinica_enf_n" class="nav-link"> 
                  <i class="far fa-circle nav-icon"></i>
                  <font size="4"><p>Historias Enfermera</p></font>
                </a>
              </li>
            </ul>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background:url('<?php echo base_url().$aux;?>')">
  <div class="modal" id="confirmarsalir" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><strong>Nombre de la entidad</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>
      <div class="modal-body">
        <h5 class="text">Estas Seguro de Salir del Sistema</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" onclick="salir('enfermera');"> Si </button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        </div>
      </div>
    </div>
  </div>