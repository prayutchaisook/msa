<li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="border-left-width: 0px; padding-top: 10px; padding-bottom: 10px;">
                  <img src="{{asset("assets/dist/img/user2-160x160.jpg")}}" class="user-image" alt="User Image">
                  <span class="hidden-xs">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{asset("assets/dist/img/user2-160x160.jpg")}}" class="img-circle" alt="User Image">
                    <p>
                      {{ Auth::user()->name }}<br>
                      Service Engineer
                      <small>Public</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">My Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{URL::to("/logout")}}" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>