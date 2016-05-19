<div class="navbar nav_title" style="border: 0;">
    <a href="index.html" class="site_title">{{HTML::image('images/logo_CJ.png')}} <span>Sales System</span></a>
</div>
<div class="clearfix"></div>

<!-- menu prile quick info -->
<div class="profile">
    <div class="profile_pic">
        {{ HTML::image('images/user.png','',array('class'=>'img-circle profile_img'))}} 
    </div>
    <div class="profile_info">
        <span>Welcome,</span>
        <h2>{{Auth::user()->employee_name}}</h2>
    </div>
</div>
<!-- /menu prile quick info -->

<br />

<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
   <div class="menu_section">
      <h3>General</h3>
        <ul class="nav side-menu">
          <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu" style="display: none">
                  <li><a href="{{ URL::to('/beranda') }}">Dashboard</a>
                  </li>
              </ul>
          </li>
          <li><a><i class="fa fa-file-code-o"></i> Code <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu" style="display: none">
                  <li><a href="{{ URL::to('/common-code') }}">Common Code</a>
                  </li>
                  <li><a href="{{ URL::to('/products') }}">Material Code</a>
                  </li>
                  <li><a href="{{ URL::to('/customers') }}">Customers Code</a>
                  </li>
                  <li><a href="{{ URL::to('/users') }}">Users Code</a>
                  </li>
                  <li><a href="{{ URL::to('/currency') }}">Currency</a>
                  </li>
              </ul>
          </li>
          <li><a><i class="fa fa-user"></i> Transaction <span class="fa fa-chevron-down"></span> </a>
              <ul class="nav child_menu" style="display: none">
                  <li><a href="{{ URL::to('/inbound') }}"> Inbound</a>
                  </li>
                  <li><a href="{{ URL::to('/purchase-order') }}"> Purchase Order </a>
                  </li>
                  <!--<li><a href="{{ URL::to('/return') }}"> Return</a>
                  </li>
                  <li><a href="{{ URL::to('/delivery-order') }}"> DO </a>
                  </li> -->
              </ul>
          </li>
        </ul>
    </div>
</div>
<!-- /sidebar menu -->

<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Logout">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
</div>
<!-- /menu footer buttons -->