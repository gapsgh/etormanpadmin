<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<!--================================================================================
    Item Name: Materialize - Material Design Admin Template
    Version: 1.0
    Author: GeeksLabs
    Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
  <title>@yield('title', 'Promotegh Admin Panel')</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Login Page | Materialize - Material Design Admin Template</title>
   <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="{{asset('/admin-assets/images/favicon/apple-touch-icon-152x152.png')}}">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="{{asset('/admin-assets/images/favicon/mstile-144x144.png')}}">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="{{asset('/admin-assets/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{asset('/admin-assets/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{asset('/admin-assets/css/page-center.css')}}" type="text/css" rel="stylesheet" media="screen,projection">


  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="{{asset('/admin-assets/css/prism.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{asset('/admin-assets/js/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>

<body class="cyan">

  @yield('content')

  <!-- ================================================
    Scripts
    ================================================ -->
    <!-- jQuery Library -->
    <script type="text/javascript" src="{{asset('/admin-assets/js/jquery-1.11.2.min.js')}}"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="{{asset('/admin-assets/js/materialize.min.js')}}"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="{{asset('/admin-assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
       

  <script type="text/javascript" src="{{asset('/admin-assets/js/prism.js')}}"></script>

    <!-- chartist -->
    <script type="text/javascript" src="{{asset('/admin-assets/js/plugins/chartist-js/chartist.min.js')}}"></script>   
    <!-- sparkline -->
    <script type="text/javascript" src="{{asset('/admin-assets/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin-assets/js/plugins/sparkline/sparkline-script.js')}}"></script>
    
    <!--jvectormap-->
    <script type="text/javascript" src="{{asset('/admin-assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin-assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script type="text/javascript" src="{{asset('/admin-assets/js/plugins/jvectormap/vectormap-script.js')}}"></script>
    
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{{asset('/admin-assets/js/plugins.js')}}"></script>
    <!-- Toast Notification -->
    <script type="text/javascript">
    

    </script>
    @yield('scripts')

</body>

</html>