<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link href="{{asset('assets/css/pace.min.css')}}" rel="stylesheet"/>
    <script src="{{asset('assets/js/pace.min.js')}}"></script>
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="{{asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
    <!-- simplebar CSS-->
    <link href="{{asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="{{asset('assets/css/sidebar-menu.css')}}" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="{{asset('assets/css/app-style.css')}}" rel="stylesheet"/>

</head>
<body>
	@yield('main')





	<script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
      
   <!-- simplebar js -->
    <script src="{{asset('assets/plugins/simplebar/js/simplebar.js')}}"></script>
    <!-- sidebar-menu js -->
    <script src="{{asset('assets/js/sidebar-menu.js')}}"></script>
    <!-- loader scripts -->
    <script src="{{asset('assets/js/jquery.loading-indicator.js')}}"></script>
    <!-- Custom scripts -->
    <script src="{{asset('assets/js/app-script.js')}}"></script>
    <!-- Chart js -->
    
    <script src="{{asset('assets/plugins/Chart.js/Chart.min.js')}}"></script>
   
    <!-- Index js -->
    <script src="{{asset('assets/js/index.js')}}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
</body>
</html>