<!DOCTYPE html>
<html lang="es">
  <?php
      if (!$this->session->userdata('s_id'))
      {
        
        redirect('entrar');
      }
      else
      {
        $cuales=$this->session->userdata('s_tipo');
        // if ($cuales=="tra")
        // {
        //     redirect('inicio_empleado');
        // }
        // else if ($cuales=="med")
        // {
        //     redirect('inicio_medico');
        // }
        // else if ($cuales=="adm")
        // {
        //     redirect('inicio_admin');
        // }
      }
  ?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Historia Clinica | Inicio</title>
   
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/alertifyjs/css/alertify.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/alertifyjs/css/themes/default.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/select2.css">
      <script type="text/javascript" src="<?php echo base_url();?>assets/alertifyjs/alertify.js"></script>
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/datatables.css">
      <link rel="icon" href="<?php echo base_url();?>assets/img/logo2.png"/>
      
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/adminlte.css">
    <!-- Google Font: Source Sans Pro -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
    <script src="<?php echo base_url();?>assets/js/funciones.js?v=1.50"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/utf8_encode.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/Chart.min.js"></script>
  </head>