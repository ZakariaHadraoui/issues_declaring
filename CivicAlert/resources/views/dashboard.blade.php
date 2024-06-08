@extends('layouts.dashboard')
@section('main')
    
<!-- Start wrapper-->
 <div id="wrapper">
 
    
  
  <div class="clearfix"></div>
      
    <div class="content-wrapper">
      <div class="container-fluid">
        @yield('main')
        
      <!--start overlay-->
            <div class="overlay toggle-menu"></div>
          <!--end overlay-->
          
      </div>
      <!-- End container-fluid-->
      
      </div><!--End content-wrapper-->
     <!--Start Back To Top Button-->
      <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
      <!--End Back To Top Button--> 
    
@endsection