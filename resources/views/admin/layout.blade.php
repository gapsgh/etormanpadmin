<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    
    <title>@yield('title', 'Promotegh Admin Panel')</title>

    @include('admin.includes.head_links')

</head>

<body>
    <!-- START HEADER -->
    @include('admin.includes.header')
    <!-- END HEADER -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START LEFT SIDEBAR NAV-->
            @include('admin.includes.left_nav')
            <!-- END LEFT SIDEBAR NAV-->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <section id="content">

                <!--start container-->
                <div class="container" >
                    @yield('content')
                </div>
                <!--end container-->

            </section>
            <!-- END CONTENT -->

        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    <footer class="page-footer">
        
        <div class="footer-copyright">
            <div class="container">
                Copyright © 2017 <b><a class="grey-text text-lighten-4" href="http://promotegh.com" target="_blank">Promotegh.com</a></b> All rights reserved.
                <span class="right"> Design and Developed by <b><a class="grey-text text-lighten-4" href="http://promotegh.com">SharkDev</a></b></span>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->


    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="{{asset('/admin-assets/js/jquery-1.11.2.min.js')}}"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="{{asset('/admin-assets/js/materialize.min.js')}}"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="{{asset('/admin-assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
       

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
    {{-- <script type="text/javascript" src="{{asset('/admin-assets/js/plugins.js')}}"></script> --}}
    <!-- Toast Notification -->
    <script type="text/javascript">
    

    </script>
    @yield('scripts')
</body>

</html>