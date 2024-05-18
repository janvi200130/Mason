
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MASON</title>

  <link rel="stylesheet" href="../../css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="../../ionicons/2.0.1/css/ionicons.min.css">

  <link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

  <link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

  <link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/plugins/jqvmap/jqvmap.min.css">

  <link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/css/adminlte.min.css?v=3.2.0">

  <link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/plugins/daterangepicker/daterangepicker.css">

  <link rel="stylesheet" href="<?=base_url();?>assets/admin_assets/plugins/summernote/summernote-bs4.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?=base_url();?>assets/admin_assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div> -->

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?=base_url('admin')?>" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
             <i class="fa fa-user" aria-hidden="true"></i>
          </a>
        </li>
      </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href="index3.html" class="brand-link">
  <!-- <img src="</?=base_url();?>assets/admin_assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
  <span class="brand-text font-weight-light">
    <h4><b>MASON</b></h4>
  </span>
</a>

<div class="sidebar">
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

      <li class="nav-item">
        <a href="<?=base_url('dashboard')?>" class="nav-link active">
          <i class="fa-solid fa-gauge"></i>
            <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?=base_url('about')?>" class="nav-link">
          <i class="fa-solid fa-address-card"></i>
          <p>About Us</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?=base_url('service')?>" class="nav-link">
          <i class="fa-brands fa-servicestack"></i>
          <p>Services</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?=base_url('contact')?>" class="nav-link">
          <i class="fa-solid fa-address-book"></i>
          <p>Contact</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?=base_url('career')?>" class="nav-link">
          <i class="fa-solid fa-scarecrow"></i>
          <p>Career</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?=base_url('gallery')?>" class="nav-link">
          <i class="nav-icon far fa-image"></i>
          <p> Gallery</p>
        </a>
      </li>
    </ul>
  </nav>

</div>

</aside>