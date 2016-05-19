<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Sales</title>
  
  <!-- Bootstrap core CSS -->
  
  <style type="text/css" title="currentStyle">
    @import "css/css/layout-styles.css";
    @import "css/css/themes/smoothness/jquery-ui-1.8.4.custom.css";
  </style>
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
  
  <!-- jQuery libs -->
  <!-- {{HTML::script('js/jquery.min.js')}} -->
    <script  type="text/javascript" src="js/jquery.js"></script>
    <!-- {{HTML::script('js/jquery.min.js')}} -->
    <script  type="text/javascript" src="https://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>

    <!-- Our jQuery Script to make everything work -->

    <script  type="text/javascript" src="js/js/jq-ac-script.js"></script>

  <!--
  <script src="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.2/jquery-ui.min.js"></script> -->
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

          @include('../layouts/sidebar')
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
                  <li><a href="{{URL::to('/logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
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
        
          <div class="">
          <div class="x_panel">
            <div class="x_title">
              <h2>Data Material In </h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><button type="button" class="btn btn-round btn-primary"  data-toggle="modal" data-target=".bs-example-modal-lg">+ Add </button></li>
              </ul>
              <div class="clearfix"></div>
            </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Kode Transaksi</th>
                        <th>Product In</th>
                        <th>Lot Number</th>
                        <th>Qty</th>
                        <th>Date In</th>
                        <th>Storage</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                      $no = 1;

                     ?>
                    @foreach($inbound as $in)
                    <?php
                      $cdcode = DB::table('cd_code')->where('hcode','=','GD01')->where('code','=',$in->storage)->where('code','!=','*')->get();
                      $indetail = DB::table('tx_itemindetail')->where('id_transaksi','=',$in->id_transaksi)->get()
                    ?>
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$in->id_transaksi}}</td>
                        <td>
                          <ul>
                          @foreach($indetail as $ind)
                          <?php $pr = DB::table('cd_material')->where('material_code','=',$ind->material_code)->first(); ?>
                            <li>{{$ind->material_code}} - {{$pr->material_name}}</li>
                          @endforeach
                          </ul>
                        </td>
                        <td>
                          <ul>
                          @foreach($indetail as $ind)
                            <li>{{$ind->lot_number}} </li>
                          @endforeach
                          </ul>
                        </td>
                        <td>
                          <ul>
                          @foreach($indetail as $ind)
                            @if($ind->status == 'G')
                              <li>{{$ind->qty}} BAG <button class="btn btn-success btn-xs">Good</button></li>
                            @elseif($ind->status == 'B')
                              <li>{{$ind->qty}} BAG <button class="btn btn-danger btn-xs">Bad</button></li>
                            @endif
                          @endforeach
                          </ul>
                        </td>
                        <td>{{date("d M Y",strtotime($in->date_in))}}</td>
                        @foreach($cdcode as $cc)
                        <td>{{$cc->code_name}}</td>
                        @endforeach
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Add Inbound</h4>
              </div>
              <form class="form-horizontal form-label-left input_mask" action="{{URL::to('/inbound-create')}}" method="post">
              <div class="modal-body">
                <div id="messageBox" style="margin-left:15px; padding-left:20px; padding-bottom:5px; border:1px #ccc solid; display:none;"></div>
          <form action="" id="itemsForm" class="form-horizontal form-label-left" action="{{URL::to('inbound-create')}}" method="post">
              <div class="form-group" >
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Number In</label>
                  <?php 
                      $no_in = DB::select(DB::raw("select max(substr(id_transaksi,-5,5)) as max from tx_itemin where(select max(substr(id_transaksi,-5,5)) from tx_itemin where substr(id_transaksi,1,3)='STO')"));
                      
                  ?>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="id_transaksi"  type="text" class="form-control col-md-7 col-xs-12" />
                  </div>
              </div>
              <div class="form-group" >
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Date In</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="date_in" type="date" value="<?php echo date('Y-m-d')?>" class="form-control col-md-7 col-xs-12"  tabindex="1"/>    
                  </div>
              </div>
              <div class="form-group" >
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Surat Jalan</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <input name="no_suratjln" type="text"  class="form-control col-md-7 col-xs-12"  tabindex="1"/>    
                  </div>
              </div>
              <div class="form-group" style="padding-bottom:50px">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Storage</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <select name="storage" class="form-control col-md-7 co-xs-12" name="storage[]">@foreach($storage as $st)<option value="{{$st->code}}">{{$st->code_name}}</option>@endforeach</select>
                  </div>
              </div>
              <table id="itemsTable" class="table table-striped table-bordered dt-responsive nowrap">
                  <thead>
                  <tr>
                      <th>#</th>
                      <th>Item</th>
                      <th>Product Description</th>
                      <th>Lot Number</th>
                      <th>Qty In</th>
                      <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                      <tr class="item-row">
                          <td></td>
                          <td><input style="width:50px" name="material_code[]" value="" class="tInput" id="itemCode" tabindex="1"/></td> 
                          <td><input name="material_name[]" value="" class="tInput" id="itemDesc"  readonly="readonly" /></td>
                          <td style="width:200px"><input style="width:50px" name="nicklot[]" value="" class="tInput" id="itemPrice" readonly="readonly" /><input style="width:130px" type="text" placeholder="161230" class="tInput" name="nolot[]" id="nicklot" tabindex="2"></td>
                          <td><input name="qty[]" value="" class="tInput" id="itemQty" tabindex="2"/></td>
                          <td>
                              <select class="tInput" name="status[]">
                                  <option value="G">Good</option>
                                  <option value="B">Bad</option>
                              </select>
                          </td>
                      </tr>
                  </tbody>
              </table>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12" style="text-align:left">
                  <a href="#" id="addRow" class="btn btn-primary"><span> + Add Item</span></a>
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>
          </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
              </div>
              </form>
            </div>
          </div>
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
        {{HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/2.3.1/js/bootstrap.min.js')}}
        
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
