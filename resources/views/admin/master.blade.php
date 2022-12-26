<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{url('assets/admin')}}/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{url('assets/admin')}}/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{url('assets/admin')}}/css/AdminLTE.css">
  <link rel="stylesheet" href="{{url('assets/admin')}}/css/_all-skins.min.css">
  <link rel="stylesheet" href="{{url('assets/admin')}}/css/jquery-ui.css">
  <link rel="stylesheet" href="{{url('assets/admin')}}/css/style.css" />
  <script src="js/angular.min.js"></script>
  <script src="js/app.js"></script>
  <style>
    .hop{
      width: 10px;
      height: 10px;
  
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

 @include('admin.layouts.header')

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
 @include('admin.layouts.menu')

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @yield('title')
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
      @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('admin.layouts.footer')
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->

<script src="{{url('assets/admin')}}/js/jquery.min.js"></script>
<script src="{{url('assets/admin')}}/js/jquery-ui.js"></script>
<script src="{{url('assets/admin')}}/js/bootstrap.min.js"></script>
<script src="{{url('assets/admin')}}/js/adminlte.min.js"></script>
<script src="{{url('assets/admin')}}/js/dashboard.js"></script>
<script src="{{url('assets/admin')}}/tinymce/tinymce.min.js"></script>
<script src="{{url('assets/admin')}}/tinymce/config.js"></script>
<script src="{{url('assets/admin')}}/js/function.js"></script>
@yield('src')
</body>
</html>
