<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminlte.io/themes/v3/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Aug 2024 06:18:47 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Panel | Web Landing Page</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

<link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="../../../code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

<link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

<link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

<link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css">

<link rel="stylesheet" href="/dist/css/adminlte.min2167.css?v=3.2.0">

<link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

<link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">

<link rel="stylesheet" href="/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<div class="preloader flex-column justify-content-center align-items-center">
<img class="animation__shake" src="/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
</div>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">

<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
</li>
</ul>
</nav>


<aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href="/index" class="brand-link">
<img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
<span class="brand-text font-weight-light">Admin Panel</span>
</a>

<div class="sidebar">

<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

<li class="nav-item menu-open">
<a href="/forms/contacts" class="nav-link">
<i class="nav-icon far fa-circle nav-icon"></i>
<p>
Contact US Data
</p>
</a>
</li>
<li class="nav-item menu-open">
<a href="/forms/web-development" class="nav-link">
<i class="nav-icon far fa-circle nav-icon"></i>
<p>
Web Landing Page Data
</p>
</a>
</li>
<li class="nav-item menu-open">
<a href="/forms/app-development" class="nav-link">
<i class="nav-icon far fa-circle nav-icon"></i>
<p>
App Landing Page Data
</p>
</a>
</li>
<li class="nav-item menu-open">
<a href="/logout" class="nav-link">
<i class="nav-icon far fa-circle nav-icon"></i>
<p>
Logout
</p>
</a>
</li>
</ul>
</nav>

</div>

</aside>

<div class="content-wrapper">

<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1 class="m-0">Dashboard</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="/index">Home</a></li>
<li class="breadcrumb-item active">Dashboard</li>
</ol>
</div>
</div>
</div>
</div>

<section class="content">
  <div class="container-fluid">
  <div class="row">
  <div class="col-12">
  <div class="card">
  
  <div class="card-body">
  <table id="example2" class="table table-bordered table-hover">
  <thead>
  <tr>
  <th>Name</th>
  <th>Email</th>
  <th>Phone</th>
  <th>Message</th>
  </tr>
  </thead>
  <tbody>
  @foreach ($forms as $form)
    <tr>
      <td>{{$form->name}}</td>
      <td>{{$form->email}}</td>
      <td>{{$form->phone}}</td>
      <td>{{$form->message}}</td>
    </tr>
    @endforeach
  </tbody>
  </table>
  </div>
  
  </div>
  
  </div>
  
  </div>
  
  </div>
  
  </section>

</div>

<footer class="main-footer">
<strong>Copyright &copy; 2024 <a href="index.html">Admin</a>.</strong>
All rights reserved.
<div class="float-right d-none d-sm-inline-block">
<b>Version</b> 1.0
</div>
</footer>

<aside class="control-sidebar control-sidebar-dark">

</aside>

</div>


<script src="/plugins/jquery/jquery.min.js"></script>

<script src="/plugins/jquery-ui/jquery-ui.min.js"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="/plugins/chart.js/Chart.min.js"></script>

<script src="/plugins/sparklines/sparkline.js"></script>

<script src="/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

<script src="/plugins/jquery-knob/jquery.knob.min.js"></script>

<script src="/plugins/moment/moment.min.js"></script>
<script src="/plugins/daterangepicker/daterangepicker.js"></script>

<script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<script src="/plugins/summernote/summernote-bs4.min.js"></script>

<script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<script src="/dist/js/adminlte2167.js?v=3.2.0"></script>

<script src="/dist/js/demo.js"></script>

<script src="/dist/js/pages/dashboard.js"></script>
</body>

<!-- Mirrored from adminlte.io/themes/v3/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Aug 2024 06:19:09 GMT -->
</html>
