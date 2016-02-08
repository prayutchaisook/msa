<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MOBILE APPLICATION SERVICE</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
 <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset("assets/bootstrap/css/bootstrap.min.css")}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
     <link rel="stylesheet" href="{{asset("assets/dist/css/fonts/sarabun/thsarabunnew.css")}} "> 
    <link rel="stylesheet" href="{{asset("assets/dist/css/AdminLTE.min.css")}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset("assets/dist/css/skins/_all-skins.min.css")}}">

    
    <style>
         body { font-family: 'THSarabunNew', 'Source Sans Pro','Helvetica Neue','Helvetica','Arial','sans-serif'; }
        .skin-black-light .main-header .navbar-brand {
    border-right: none;
    color: #333;
    
}

.skin-black-light .main-header > .navbar .navbar-nav > li > a {
    border-right:none;
    
}
.skin-black-light .main-header > .navbar .navbar-custom-menu .navbar-nav > li > a, .skin-black-light .main-header > .navbar .navbar-right > li > a {
    border-left: none;
    border-right-width: 0;
    
}
.skin-black-light .main-header > .navbar .nav > li > a {
    color: #fff;
}

.main-header > .navbar .navbar-custom-menu .navbar-nav > li > a,.main-header > .navbar .navbar-right > li > a {
    border-left:none;
    border-right-width: 0;
}
.skin-black-light .main-header > .sub-nav  {
   background-color: #3c8dbc;
   min-height: 40px;
   height: 40px;
} 
.navbar-nav > li.user-menu > a,.navbar-nav > li.home > a {
    padding-bottom:10px;
    padding-top: 10px;
  
}
.skin-black-light .main-header > .navbar .nav > li > a:hover, .skin-black-light .main-header > .navbar .nav > li > a:active, .skin-black-light .main-header > .navbar .nav > li > a:focus, .skin-black-light .main-header > .navbar .nav .open > a, .skin-black-light .main-header > .navbar .nav .open > a:hover, .skin-black-light .main-header > .navbar .nav .open > a:focus, .skin-black-light .main-header > .navbar .nav > .active > a {
     background: rgba(0,0,0,0.1);
    color: #f6f6f6;
}

.container {
   width: 1000px !important; 
 
}
h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family:"THSarabunNew","Source Sans Pro","Helvetica Neue","Helvetica","Arial","sans-serif";
}
.component{
    padding: 5px;
}
.small-box {

    margin-bottom: 5px;

}
.small-box > .inner {
    padding-bottom: 0px;
}
.small-box p {
    
    padding: 50px 0 0px 0;
    text-align: center;
}
.small-box .icon {
    font-size: 90px;
    right: 50px;
    top: 20px;
   
}
.small-box > .small-box-footer {
   font-size: 12px;
   padding-bottom: 15px;
   padding-top: 15px;
}
.small-box > .support-tool{
    padding-top: 10px;
     padding-bottom: 10px;
     text-align: left;
     padding-left: 10px;
}
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

      <header class="main-header">
          <nav class="navbar navbar-static-top" style=" background-color: #fff;">
              <div class="container" >
            <div class="navbar-header">
                <a href="../../index2.html" class="navbar-brand" style="    color: #333;"><b>MSA</b>CLOUD</a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
                
            
              </ul>
              
            </div><!-- /.navbar-collapse -->
          
          </div><!-- /.container-fluid -->
        </nav>
          <nav class="navbar navbar-static-top sub-nav" style="height:40px;min-height: 40px;">
          <div class="container" style="  padding-left: 0;padding-right: 0;" >
           

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              
              
            </div><!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <!-- Messages: style can be found in dropdown.less-->
                  <!-- User Account Menu -->
                @include('layouts.fixed.inc-user-menu')
                </ul>
              </div><!-- /.navbar-custom-menu -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container" style="  padding-left: 0;padding-right: 0;" >
          <!-- Content Header (Page header) -->
  

          <div class="content-wrapper" style="border-left:0;">
        <!-- Content Header (Page header) -->
        <section class="content-header"  style="padding-bottom:10px;">
          <h1>
           Portal Page
            <small></small>
          </h1>
        
        </section>

        <!-- Main content -->
        <section class="col-xs-9">

          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-xs-3 component">
              <!-- small box -->
              <div class="small-box  bg-blue-gradient">
                <div class="inner">
                  <h3>&nbsp;</h3>
                  <p>&nbsp;</p>
                </div>
                <div class="icon">
                  <i class="fa fa-cog"></i>
                </div>
                <a href="{{URL::to("/clients/installation")}}" class="small-box-footer">
                 INSTALLATION 
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-xs-3 component">
              <!-- small box -->
              <div class="small-box bg-blue-gradient">
                <div class="inner">
                  <h3>&nbsp;</h3>
                  <p>&nbsp;</p>
                </div>
                <div class="icon">
                  <i class="fa fa-wrench"></i>
                </div>
                <a href="#" class="small-box-footer">
                 MAINTENANCE
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-xs-3 component">
              <!-- small box -->
              <div class="small-box bg-blue-gradient">
                <div class="inner">
                  <h3>&nbsp;</h3>
                  <p>&nbsp;</p>
                </div>
                <div class="icon">
                  <i class="fa fa-pencil-square-o"></i>
                </div>
                <a href="#" class="small-box-footer">
                  ADHOC
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-xs-3 component">
              <!-- small box -->
              <div class="small-box bg-yellow-gradient">
                <div class="inner">
                  <h3>&nbsp;</h3>
                  <p>&nbsp;</p>
                </div>
                <div class="icon">
                  <i class="fa fa-database"></i>
                </div>
                <a href="#" class="small-box-footer">
                PROFILE DATABASE
                </a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->

          <!-- =========================================================== -->
 <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-xs-3 component">
              <!-- small box -->
              <div class="small-box  bg-green-gradient">
                <div class="inner">
                  <h3>&nbsp;</h3>
                  <p>&nbsp;</p>
                </div>
                <div class="icon">
                  <i class="fa fa-dashboard"></i>
                </div>
                <a href="#" class="small-box-footer">
                  DASHBOARD
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-xs-3 component">
              <!-- small box -->
              <div class="small-box bg-green-gradient">
                <div class="inner">
                  <h3>&nbsp;</h3>
                  <p>&nbsp;</p>
                </div>
                <div class="icon">
                  <i class="fa fa-bar-chart"></i>
                </div>
                <a href="#" class="small-box-footer">
                 REPORT
                </a>
              </div>
            </div><!-- ./col -->
          
            <div class="col-xs-6 component">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>&nbsp;</h3>
                  <p>&nbsp;</p>
                </div>
                  <div class="icon" style="right: 200px; left: 140px;">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">
                 USER & FORM SETTING
                </a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->

          <!-- =========================================================== -->

        </section><!-- /.content -->
        
        <section class="col-xs-3 component">

          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-xs-12">
              <!-- small box -->
              <div class="small-box bg-light-blue">
                  <p  style="padding:20px 0 17px 10px;margin-bottom: 0px; text-align: left;">
                   <i class="fa fa-plug"></i> SUPPORT TOOLS
                </p>
              </div>
              <div class="small-box bg-aqua">
                <a href="#" class="small-box-footer support-tool">
                  TOOLS 1
                </a>   
              </div>
               <div class="small-box bg-aqua">
                <a href="#" class="small-box-footer support-tool">
                  TOOLS 2
                </a>   
              </div>
               <div class="small-box bg-aqua">
                <a href="#" class="small-box-footer support-tool">
                  TOOLS 3
                </a>   
              </div>
               <div class="small-box bg-aqua">
                <a href="#" class="small-box-footer support-tool">
                  TOOLS 4
                </a>   
              </div>
               <div class="small-box bg-aqua">
                <a href="#" class="small-box-footer support-tool">
                  TOOLS 5
                </a>   
              </div>
               <div class="small-box bg-aqua">
                <a href="#" class="small-box-footer support-tool">
                  TOOLS 6
                </a>   
              </div>
               <div class="small-box bg-aqua">
                <a href="#" class="small-box-footer support-tool">
                  TOOLS 7
                </a>   
              </div>
                <div class="small-box bg-red">
                <a href="{{URL::to("/logout")}}" class="small-box-footer support-tool">
                <i class="fa fa-power-off"></i>  SIGN OUT
                </a>   
              </div>
              
              
            </div><!-- ./col -->
        
          
            
          </div><!-- /.row -->



        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="container">
          <div class="pull-right hidden-xs">
            <b>Version</b> BETA 0.1
          </div>
          <strong>Copyright &copy; 2014-2015 <a href="#">MSACLOUD</a>.</strong> All rights reserved.
        </div><!-- /.container -->
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="{{asset("assets/plugins/jQuery/jQuery-2.1.4.min.js")}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset("assets/bootstrap/js/bootstrap.min.js")}}"></script>
    <!-- SlimScroll -->
    <script src="{{asset("assets/plugins/slimScroll/jquery.slimscroll.min.js")}}"></script>
    <!-- FastClick -->
    <script src="{{asset("assets/plugins/fastclick/fastclick.min.js")}}"></script>
    
    <!-- AdminLTE App -->
    <script src="{{asset("assets/dist/js/app.min.js")}}"></script>

  </body>
</html>
