<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Sutan Iqbal Pramudya Chandra(3042019010)</title>

  <!-- Favicons -->
  <link href="{{url('system')}}/img/favicon.png" rel="icon">
  <link href="{{url('system')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{url('system')}}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link rel="stylesheet" type="text/css" href="{{url('system')}}/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="{{url('system')}}/lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="{{url('system')}}/css/style.css" rel="stylesheet">
  <link href="{{url('system')}}/css/style-responsive.css" rel="stylesheet">
  <script src="{{url('system')}}/lib/chart-master/Chart.js"></script>
<!-- Bootstrap core CSS -->
  <link href="{{url('system')}}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="{{url('system')}}/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="{{url('system')}}/lib/fancybox/jquery.fancybox.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{url('system')}}/css/style.css" rel="stylesheet">
  <link href="{{url('system')}}/css/style-responsive.css" rel="stylesheet">
  <script src="{{url('system')}}/lib/jquery/jquery.min.js"></script>
  

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
    <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
        <!--header start-->
        @include('template.section.header')

          <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        @include('template.section.sidebar')
</div>
            <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              @include('template.utils.notif')              
            </div>
          </div>
          
        </div>
        @yield('content')
         <!--footer start-->
        @include('template.section.footer')

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{url('public')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{url('public')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url('public')}}/dist/js/adminlte.min.js"></script>
</body>
</html>
