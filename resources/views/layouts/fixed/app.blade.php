<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MOBILE APPLICATION SERVICE</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
     @include('layouts.fixed.inc-stylesheet')
     @yield('stylesheet')

    
    
  </head>
  <!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
  <!-- the fixed layout is not compatible with sidebar-mini -->
  <body class="hold-transition skin-black-light fixed ">
    <!-- Site wrapper -->
    <div class="wrapper">
       <!-- main-header-->
       <header class="main-header">
       @include('layouts.fixed.inc-header')
       </header>
      <!-- =============================================== -->
      <!-- Left side column. contains the sidebar -->
       @yield('menu')
       <!-- =============================================== -->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="padding-top: 80px;">
      @yield('content')
      </div><!-- /.content-wrapper -->
 
      <!-- /.main-footer -->
      @include('layouts.fixed.inc-footer')
      
    </div><!-- ./wrapper -->

    <!-- /.app-script -->
      @include('layouts.fixed.inc-scripts')
      @yield('page-script')
   <!-- /.page-script --> 
   
   
    
  </body>
</html>
