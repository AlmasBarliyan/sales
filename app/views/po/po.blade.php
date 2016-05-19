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

    <script  type="text/javascript" src="js/js/jq-ac-script1.js"></script>

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
              <h2>List Po </h2>
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
                        <th>Number PO</th>
                        <th>PO Date</th>
                        <th>Customer</th>
                        <th>Destination</th>
                        <th>Source</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                      $no = 1;
                     ?>
                    @foreach($purchase_order as $po)
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$po->po_no}}</td>
                        <td>{{$po->po_date}}</td>
                        <td>{{$po->customer_name}}</td>
                        <td>{{$po->ship_name}}</td>
                        <td>{{$po->code_name}}</td>
                        <td>
                          <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg{{$po->po_no}}"><i class="fa fa-pencil"></i></button><a href="{{URL::to('products/delete/'.$po->po_no)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> </a>
                        </td>
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
        <div class="modal-dialog modal-lg" style="width:90%">
          <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
              </button>
              <h4 class="modal-title" id="myModalLabel">Add PO</h4>
            </div>
            <form class="form-horizontal form-label-left input_mask" action="{{URL::to('/purchase-order/create')}}" method="post">
              <div class="modal-body" style="max-height: calc(100vh - 212px);overflow-y: auto;">
                <div id="messageBox" style="margin-left:15px; padding-left:20px; padding-bottom:5px; border:1px #ccc solid; display:none;"></div>
                  <div class="form-group" >
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">PO No.</label>
                      <?php 
                          $no_in = DB::select(DB::raw("select max(substr(id_transaksi,-5,5)) as max from tx_itemin where(select max(substr(id_transaksi,-5,5)) from tx_itemin where substr(id_transaksi,1,3)='STO')"));
                          
                      ?>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="po_no"  type="text" class="form-control col-md-7 col-xs-12" />
                      </div>
                  </div>
                  <div class="form-group" >
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Po Date</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <input name="po_date" type="date" value="<?php echo date('Y-m-d')?>" class="form-control col-md-7 col-xs-12"  tabindex="1"/>
                      </div>
                  </div>
                  <div class="form-group" >
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">ETA PO</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="eta_po" type="date" class="form-control col-md-7 col-xs-12">
                      </div>
                  </div>
                  <div class="form-group" >
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Customers </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="customer" class="select2_single form-control" style="width:100%" id="sCustomer">
                        <option></option>
                          @foreach($customers as $customer)
                            <option value="{{$customer->customer_code}}">{{$customer->customer_code }} - {{$customer->customer_name}}</option>
                          @endforeach
                        </select>
                      </div>
                  </div>
                  <div class="form-group" >
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Ship To </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::select('ship_to_party', array(), null, array('id' => 'dl', 'class'=>'select2_single form-control','style'=>'width:100%'))  }}
                      </div>
                  </div>
                  <div class="form-group" >
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Source</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="source" class="form-control" style="width:100%">
                          @foreach($source as $src)
                            <option value="{{$src->code}}">{{$src->code_name}}</option>
                          @endforeach
                        </select>
                      </div>
                  </div>
                  <div class="form-group" style="padding-bottom:20px">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Currency Code</label>
                      <div class="col-md-2 col-sm-2 col-xs-12">
                        <select name="currency_code" class="form-control" style="width:100%" id="currency_code">
                          <option></option>
                          @foreach($currency as $cur)
                            <option value="{{$cur->code}}" >{{$cur->code_name}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="col-md-2 col-sm-2 col-xs-12">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12">Currency Rate</label>
                      </div>
                      <div class="col-md-2 col-sm-2 col-xs-12">
                          <p  id="currency_rate"><input type="text" name="currency_rate[]" id="currency_rate"></p>
                      </div>
                  </div>
                <table id="itemsTable" class="table table-bordered dt-responsive nowrap order-list ">
                  <thead>
                  <tr>
                      <th rowspan="2" style="width:1%">#</th>
                      <th rowspan="2" style="text-align:center;width:1%">Item</th>
                      <th rowspan="2" style="text-align:center;width:1%">Product Description</th>
                      <th rowspan="2" style="text-align:center;width:1%">Quantity</th>
                      <th colspan="2" style="text-align:center">U/Price</th>
                      <th colspan="2" style="text-align:center">Exclude</th>
                      <th rowspan="2" style="width: 1%;text-align:center">Include</th>
                  </tr>
                  <tr>
                      <td style="width:1%;text-align:center">IDR</td>
                      <td style="width:1%;text-align:center">USD</td>
                      <td style="width:1%;text-align:center">IDR</td>
                      <td style="width:1%;text-align:center">USD</td>
                  </tr>
                  </thead>
                  <tbody>
                      <tr class="item-row">
                          <td style="width:20px"></td>
                          <td style="width:50px"><input style="width:50px" name="material_code[]" value="" class="tInput" id="itemCode" /></td><td style="width:250px"><input style="width:300px" name="material_name[]" value="" class="tInput" id="itemDesc"  readonly="readonly" /></td>
                          <td style="width:80px"><input style="width:80px" name="qty[]" value="" class="tInput" id="itemQty" tabindex="1" /></td>
                          <td><input style="width:80px" name="price_idr[]" value="" class="tInput" tabindex="2" /></td>
                          <td><input style="width:80px" name="price_usd[]" value="" class="tInput" readonly="readonly" /></td>
                          <td><input style="width:140px" type="text" name="exclude_idr[]" readonly="readonly" /></td>
                          <td><input style="width:140px" type="text" name="exclude_usd[]" readonly="readonly"  /></td>
                          <td style="width:100px"><input style="width:100px" name="include[]" value="" class="tInput" readonly="readonly" id=""></td>
                          <!-- <td style="width:200px"><input style="width:50px" name="nicklot[]" value="" class="tInput" id="itemPrice" readonly="readonly" /><input style="width:130px" type="text" placeholder="161230" class="tInput" name="nolot[]" id="nicklot" tabindex="2"></td>
                          <td><input name="qty[]" value="" class="tInput" id="itemQty" tabindex="2"/></td>
                          <td>
                              <select class="tInput" name="status[]">
                                  <option value="G">Good</option>
                                  <option value="B">Bad</option>
                              </select>
                          </td> -->
                      </tr>
                  </tbody>
              </table>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12" style="text-align:left">
                  <a href="#" id="addRow" class="btn btn-primary"><span> + Add Item</span></a>
                </div>
              </div>
        
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add</button>
            </div>
            </form>
          </div>
        </div>
      </div>
      @foreach($po_edit as $po)
      <div class="modal fade bs-example-modal-lg{{$po->po_no}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width:90%">
          <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
              </button>
              <h4 class="modal-title" id="myModalLabel">Add PO</h4>
            </div>
            <form class="form-horizontal form-label-left input_mask" action="{{URL::to('/purchase-order/create')}}" method="post">
              <div class="modal-body" style="max-height: calc(100vh - 212px);overflow-y: auto;">
                <div id="messageBox" style="margin-left:15px; padding-left:20px; padding-bottom:5px; border:1px #ccc solid; display:none;"></div>
                  <div class="form-group" >
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">PO No.</label>
                      <?php 
                          $no_in = DB::select(DB::raw("select max(substr(id_transaksi,-5,5)) as max from tx_itemin where(select max(substr(id_transaksi,-5,5)) from tx_itemin where substr(id_transaksi,1,3)='STO')"));
                          
                      ?>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="po_no"  type="text" class="form-control col-md-7 col-xs-12" />
                      </div>
                  </div>
                  <div class="form-group" >
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Po Date</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <input name="po_date" type="date" value="<?php echo date('Y-m-d')?>" class="form-control col-md-7 col-xs-12"  tabindex="1"/>
                      </div>
                  </div>
                  <div class="form-group" >
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">ETA PO</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input name="eta_po" type="date" class="form-control col-md-7 col-xs-12">
                      </div>
                  </div>
                  <div class="form-group" >
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Customers </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="customer" class="select2_single form-control" style="width:100%" id="sCustomer">
                        <option></option>
                          @foreach($customers as $customer)
                            <option value="{{$customer->customer_code}}">{{$customer->customer_code }} - {{$customer->customer_name}}</option>
                          @endforeach
                        </select>
                      </div>
                  </div>
                  <div class="form-group" >
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Ship To </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::select('ship_to_party', array(), null, array('id' => 'dl', 'class'=>'select2_single form-control','style'=>'width:100%'))  }}
                      </div>
                  </div>
                  <div class="form-group" >
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Source</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="source" class="form-control" style="width:100%">
                          @foreach($source as $src)
                            <option value="{{$src->code}}">{{$src->code_name}}</option>
                          @endforeach
                        </select>
                      </div>
                  </div>
                  <div class="form-group" style="padding-bottom:20px">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Currency Code</label>
                      <div class="col-md-2 col-sm-2 col-xs-12">
                        <select name="currency_code" class="form-control" style="width:100%" id="currency_code">
                          <option></option>
                          @foreach($currency as $cur)
                            <option value="{{$cur->code}}" >{{$cur->code_name}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="col-md-2 col-sm-2 col-xs-12">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12">Currency Rate</label>
                      </div>
                      <div class="col-md-2 col-sm-2 col-xs-12">
                          <p  id="currency_rate"><input type="text" name="currency_rate[]" id="currency_rate"></p>
                      </div>
                  </div>
                <table id="itemsTable" class="table table-bordered dt-responsive nowrap order-list ">
                  <thead>
                  <tr>
                      <th rowspan="2" style="width:1%">#</th>
                      <th rowspan="2" style="text-align:center;width:1%">Item</th>
                      <th rowspan="2" style="text-align:center;width:1%">Product Description</th>
                      <th rowspan="2" style="text-align:center;width:1%">Quantity</th>
                      <th colspan="2" style="text-align:center">U/Price</th>
                      <th colspan="2" style="text-align:center">Exclude</th>
                      <th rowspan="2" style="width: 1%;text-align:center">Include</th>
                  </tr>
                  <tr>
                      <td style="width:1%;text-align:center">IDR</td>
                      <td style="width:1%;text-align:center">USD</td>
                      <td style="width:1%;text-align:center">IDR</td>
                      <td style="width:1%;text-align:center">USD</td>
                  </tr>
                  </thead>
                  <tbody>
                      <tr class="item-row">
                          <td style="width:20px"></td>
                          <td style="width:50px"><input style="width:50px" name="material_code[]" value="" class="tInput" id="itemCode" /></td><td style="width:250px"><input style="width:300px" name="material_name[]" value="" class="tInput" id="itemDesc"  readonly="readonly" /></td>
                          <td style="width:80px"><input style="width:80px" name="qty[]" value="" class="tInput" id="itemQty" tabindex="1" /></td>
                          <td><input style="width:80px" name="price_idr[]" value="" class="tInput" tabindex="2" /></td>
                          <td><input style="width:80px" name="price_usd[]" value="" class="tInput" readonly="readonly" /></td>
                          <td><input style="width:140px" type="text" name="exclude_idr[]" readonly="readonly" /></td>
                          <td><input style="width:140px" type="text" name="exclude_usd[]" readonly="readonly"  /></td>
                          <td style="width:100px"><input style="width:100px" name="include[]" value="" class="tInput" readonly="readonly" id=""></td>
                          <!-- <td style="width:200px"><input style="width:50px" name="nicklot[]" value="" class="tInput" id="itemPrice" readonly="readonly" /><input style="width:130px" type="text" placeholder="161230" class="tInput" name="nolot[]" id="nicklot" tabindex="2"></td>
                          <td><input name="qty[]" value="" class="tInput" id="itemQty" tabindex="2"/></td>
                          <td>
                              <select class="tInput" name="status[]">
                                  <option value="G">Good</option>
                                  <option value="B">Bad</option>
                              </select>
                          </td> -->
                      </tr>
                  </tbody>
              </table>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12" style="text-align:left">
                  <a href="#" id="addRow" class="btn btn-primary"><span> + Add Item</span></a>
                </div>
              </div>
        
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add</button>
            </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach
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
        <!-- select2 -->
        {{ HTML::script('js/select/select2.full.js')}}
        <script>
            $(document).ready(function() {
                $(".select2_single").select2({
                    placeholder: "Select...",
                    allowClear: true
                });
                $(".select2_group").select2({});
                $(".select2_multiple").select2({
                    maximumSelectionLength: 4,
                    placeholder: "With Max Selection limit 4",
                    allowClear: true
                });
            });
        </script>
         <script type="text/javascript">
            $(document).ready(function() {
                $("#sCustomer").on('change', function(){
                $.post('{{ URL::to('purchase-o/data') }}', {type: 'dl', id: $("#sCustomer").val()}, function(e){
                    $("#dl").html(e);
                });
                
                $('#sMaterial').html('');
                $('#sDesa').html('');
                
            });
            $('#sLotnumber').on('change', function(){
                $.post('{{ URL::to('delivery/data') }}', {type: 'material', id: $('#sLotnumber').val()}, function(e){
                    $('#sMaterial').html(e);
                });
                $('#sDesa').html('');
            });
            $('#sKecamatan').on('change', function(){
                $.post('{{ URL::to('site/data') }}', {type: 'desa', id: $('#sKecamatan').val()}, function(e){
                    $('#sDesa').html(e);
                });
            });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#currency_code").on('change', function(){
                $.post('{{ URL::to('purchase-o/data1') }}', {type: 'currency_rate', id: $("#currency_code").val()}, function(e){
                    $("#currency_rate").html(e);
                });
                
                $('#sMaterial').html('');
                $('#sDesa').html('');
              });
            });
        </script>
        <script>
          $(document).ready(function () {
            var counter = 1;
            
            $("#addrow").on("click", function () {
              counter++;
              
              var newRow = $("<tr>");
              var cols = "";
              cols += '<td><input type="text" name="product' + counter + '"/></td>';
              cols += '<td>$<input type="text" name="price' + counter + '"/></td>';
              cols += '<td><input type="text" name="qty' + counter + '"/></td>';
              cols += '<td>$<input type="text" name="linetotal' + counter + '" readonly="readonly"/></td>';
              cols += '<td><a class="deleteRow"> x </a></td>';
              newRow.append(cols);
              
              $("table.order-list").append(newRow);
            });
            
            $("table.order-list").on("change", 'input[name^="price"], input[name^="qty"]', function (event) {
              calculateRow($(this).closest("tr"));
              calculateGrandTotal();
            });
            
            $("table.order-list").on("click", "a.deleteRow", function (event) {
              $(this).closest("tr").remove();
              calculateGrandTotal();
            });
          });
            
          function calculateRow(row) {
            var price = +row.find('input[name^="price_idr"]').val();
            var qty = +row.find('input[name^="qty"]').val();
            //row.find('input[name^="usd"]').val((price / row.find('input[name^="currency_rate"]').val()));
            row.find('input[name^="exclude_idr"]').val((price * qty));
            row.find('input[name^="include"]').val(parseInt(row.find('input[name^="exclude_idr"]').val() * 1.1));
            row.find('input[name^="price_usd"]').val((price / <?php echo Session::get('cur_cod'); ?> ).toFixed(3));
            row.find('input[name^="exclude_usd"]').val((qty * row.find('input[name^="price_usd"]').val()));
          }
          
            
          function calculateGrandTotal() {
            var grandTotal = 0;
            $("table.order-list").find('input[name^="linetotal"]').each(function () {
              grandTotal += +$(this).val();
            });
            $("#grandtotal").text(grandTotal.toFixed(2));
          }
        </script>
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
