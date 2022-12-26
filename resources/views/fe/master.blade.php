<!doctype html>
<html lang="zxx">


<!-- Mirrored from risingtheme.com/html/demo-suruchi/suruchi/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Mar 2022 12:35:54 GMT -->
<head>
<meta charset="utf-8">
  <title>Suruchi - Product Details</title>
  <meta name="description" content="Morden Bootstrap HTML5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="{{url('assets')}}/img/favicon.ico">
    
   <!-- ======= All CSS Plugins here ======== -->
  <link rel="stylesheet" href="{{url('assets')}}/css/plugins/swiper-bundle.min.css">
  <link rel="stylesheet" href="{{url('assets')}}/css/plugins/glightbox.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Plugin css -->
  <!-- <link rel="stylesheet" href="{{url('assets')}}/css/vendor/bootstrap.min.css"> -->

  <!-- Custom Style CSS -->
  <link rel="stylesheet" href="{{url('assets')}}/css/style.css">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>

    @include('fe.layout.header')
    <!-- End header area -->

    @yield('main');

    <!-- Start footer section -->
   @include('fe.layout.footer')
    

  
  <script src="{{url('assets')}}/js/plugins/swiper-bundle.min.js"></script>
  <script src="{{url('assets')}}/js/plugins/glightbox.min.js"></script>

  <!-- Customscript js -->
  <script src="{{url('assets')}}/js/script.js"></script>
  
  @yield('js');
</body>

<!-- Mirrored from risingtheme.com/html/demo-suruchi/suruchi/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Mar 2022 12:36:19 GMT -->
</html>