<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" href="<?= base_url(); ?>assets_style/icon/logo-smkn1palu.png">
  <title>Sipandai | <?php echo $title_web; ?></title>
  <!-- Tell the browser to be responsive to screen width -->


  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- bootstrap 4 -->
  <link href="<?= base_url(); ?>assets_style/sbadmin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">



  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/bower_components/font-awesome/css/font-awesome.min.css">

  <!-- <link href="<?= base_url(); ?>assets_style/sbadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url(); ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->


  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/bower_components/select2/dist/css/select2.min.css">

  <link href="<?= base_url(); ?>assets_style/plugin/chosen/dist/css/component-chosen.min.css" rel="stylesheet">

  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->

  <link href="<?php echo base_url(); ?>assets_style/assets/plugins/summernote/summernote-lite.css" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/dist/css/AdminLTE.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/dist/css/responsive.css">

  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/plugins/pace/pace.min.css">
  <!-- jQuery 3 -->
  <script src="<?php echo base_url(); ?>assets_style/assets/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- offline -->
  <script type="text/javascript">
    $(document).ajaxStart(function() {
      Pace.restart();
    });
  </script>
</head>

<body class="hold-transition skin-black-light sidebar-mini shadow-lg">
  <div class="wrapper">
    <header class="main-header">

      <!-- Logo -->
      <a href="<?php echo base_url('index.php/dashboard'); ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <img class="logo-mini" src="<?= base_url(); ?>assets_style/icon/logo-smkn1palu.png" alt="" width="50">
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
          <img src="<?= base_url(); ?>assets_style/icon/logo-smkn1palu.png" alt="" width="45">SIPANDAI</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top shadow-lg">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>


        <!-- navbaar right new -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <?php $d = $this->db->query("SELECT * FROM tbl_login WHERE id_login = '$idbo'")->row(); ?>
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <span class="mr-2 d-none d-lg-inline text-gray-600 font-weight-bold" id="namaP"> <?php echo $d->nama; ?> | </span>
                <input type="hidden" name="iduser" id="iduser" value="<?= $this->session->userdata('id_user') ?>">
                <img id="img" src="<?= base_url() ?>/assets_style/image/<?= $d->foto; ?>" width="25" style="border-radius: 50%;">
              </a>
              <!-- Dropdown - User Information -->
              <ul class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= base_url('user/edit/' . $idbo); ?>">
                  <i class="fa fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  <span class="mr-2 d-none d-lg-inline text-gray-600 font-weight-bold cursor"> Profile</span>
                </a>

                <div class=" divider">
                </div>
                <a class="dropdown-item logout" href="<?php echo base_url(); ?>login/logout" id="logout">
                  <i class="fa fa-sign-out fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </ul>
            </li>
          </ul>
        </div>







        <!-- end navbar -->

        <!-- Navbar Right Menu old-->
        <!-- <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li>
              <?php
              $d = $this->db->query("SELECT * FROM tbl_login WHERE id_login = '$idbo'")->row();
              ?>
              <a href="<?= base_url('user/edit/' . $idbo); ?>">
                Welcome , <i class="fa fa-edit"> </i> <?php echo $d->nama;
                                                      echo ' | ( ' . $d->level . ' )'; ?></a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>login/logout">Sign out</a>
            </li> -->
        <!-- Control Sidebar Toggle Button 
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>-->
        <!-- </ul> -->

      </nav>
    </header>
    <!--loading-->
    <!-- Left side column. contains the logo and sidebar -->