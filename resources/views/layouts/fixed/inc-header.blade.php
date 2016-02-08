
        <!-- Logo -->
        <a href="../../index2.html" class="logo" >
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>MSA</b>CLOUD</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        
        <nav class="navbar navbar-static-top" role="navigation" style="margin-left: 180px;">
            
          <!-- Sidebar toggle button-->
          <ul class="nav navbar-nav">
             <!-- Notifications: style can be found in dropdown.less -->
             
             
          </ul>
        
          <div class="navbar-custom-menu" style="font-weight: bold;height: 50px; font-size: 20px; padding-right: 5px; padding-top: 15px;">
              <span class="complonent-name" >
               INSTALLATION
            </span>
                 
            
          </div>
        </nav>
         <!-- Logo -->
  
        <nav class="navbar navbar-static-top" style="margin-left: 0px; min-height: 40px;height: 40px;background-color: #3c8dbc;" role="navigation">
          <!-- Sidebar toggle button-->
          <ul class="nav navbar-nav">
           
              
          </ul>
        
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
              <!-- Notifications: style can be found in dropdown.less -->
             
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown">
                <a href="{{URL::to("/clients")}}" style="border-right-width: 0px; border-left-width:0 ;  padding-top: 10px; padding-bottom: 10px;">
                  <i class="fa fa-home"></i> กลับหน้าหลัก
                 
                </a>
         
              </li> 
              <!-- User Account: style can be found in dropdown.less -->
               @include('layouts.fixed.inc-user-menu')
             
            </ul>
          </div>
        </nav>
