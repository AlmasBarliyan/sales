<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>DataTables | Gentallela</title>

  <!-- Bootstrap core CSS -->
  {{ HTML::style('css/bootstrap.min.css')}}
  
  {{ HTML::style('fonts/css/font-awesome.min.css')}}
  {{ HTML::style('css/animate.min.css')}}
  
  <!-- Custom styling plus plugins -->
  {{HTML::style('css/custom.css')}}
  {{HTML::style('css/icheck/flat/green.css')}}
  
  {{HTML::style('js/datatables/jquery.dataTables.min.css')}}
  {{HTML::style('js/datatables/buttons.bootstrap.min.css')}}
  {{HTML::style('js/datatables/fixedHeader.bootstrap.min.css')}}
  {{HTML::style('js/datatables/responsive.bootstrap.min.css')}}
  {{HTML::style('js/datatables/scroller.bootstrap.min.css')}}
  <!-- select2 -->
  {{ HTML::style('css/select/select2.min.css')}}
  
  {{HTML::script('js/jquery.min.js')}}
  <script src="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.2/jquery-ui.min.js"></script>
  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

  <div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

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
              <h2>John Doe</h2>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            @include('../layouts/sidebar')
          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  {{ HTML::image('images/user.png','')}}
                  John Doe
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        @yield('content')
      </div>
      <!-- /page content -->
          </div>

        </div>

        <div id="custom_notifications" class="custom-notifications dsp_none">
          <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
          </ul>
          <div class="clearfix"></div>
          <div id="notif-group" class="tabbed_notifications"></div>
        </div>
        {{HTML::script('js/bootstrap.min.js')}}
        
        <!-- bootstrap progress js -->
        {{ HTML::script('js/progressbar/bootstrap-progressbar.min.js')}}
        <!-- icheck -->
        {{ HTML::script('js/icheck/icheck.min.js')}}

        {{ HTML::script('js/custom.js')}}
        @yield('script')

        <!-- Datatables -->
        <!-- <script src="js/datatables/js/jquery.dataTables.js"></script>
  <script src="js/datatables/tools/js/dataTables.tableTools.js"></script> -->

        <!-- Datatables-->
        {{HTML::script('js/datatables/jquery.dataTables.min.js')}}
        {{HTML::script('js/datatables/dataTables.bootstrap.js')}}
        {{HTML::script('js/datatables/dataTables.buttons.min.js')}}
        {{HTML::script('js/datatables/buttons.bootstrap.min.js')}}
        {{HTML::script('js/datatables/jszip.min.js')}}
        {{HTML::script('js/datatables/pdfmake.min.js')}}
        {{HTML::script('js/datatables/vfs_fonts.js')}}
        {{HTML::script('js/datatables/buttons.html5.min.js')}}
        {{HTML::script('js/datatables/buttons.print.min.js')}}
        {{HTML::script('js/datatables/dataTables.fixedHeader.min.js')}}
        {{HTML::script('js/datatables/dataTables.keyTable.min.js')}}
        {{HTML::script('js/datatables/dataTables.responsive.min.js')}}
        {{HTML::script('js/datatables/responsive.bootstrap.min.js')}}
        {{HTML::script('js/datatables/dataTables.scroller.min.js')}}
        {{HTML::script('js/pace/pace.min.js')}}
        
        <script>
          var handleDataTableButtons = function() {
              "use strict";
              0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
                dom: "Bfrtip",
                buttons: [{
                  extend: "copy",
                  className: "btn-sm"
                }, {
                  extend: "csv",
                  className: "btn-sm"
                }, {
                  extend: "excel",
                  className: "btn-sm"
                }, {
                  extend: "pdf",
                  className: "btn-sm"
                }, {
                  extend: "print",
                  className: "btn-sm"
                }],
                responsive: !0
              })
            },
            TableManageButtons = function() {
              "use strict";
              return {
                init: function() {
                  handleDataTableButtons()
                }
              }
            }();
        </script>
        <script type="text/javascript">
          $(document).ready(function() {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({
              keys: true
            });
            $('#datatable-responsive').DataTable();
            $('#datatable-scroller').DataTable({
              ajax: "js/datatables/json/scroller-demo.json",
              deferRender: true,
              scrollY: 380,
              scrollCollapse: true,
              scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({
              fixedHeader: true
            });
          });
          TableManageButtons.init();
        </script>
</body>

</html>
