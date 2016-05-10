@extends('layouts.main')
@section('content')
<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Form Elements</h3>
    </div>
    <div class="title_right">
      <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                </span>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="row">
  	<div class="col-md-12 col-sm-12 col-xs-12">
  		<div class="panel">
        <a class="panel-heading collapsed" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <button class="btn btn-primary">Tambah PO</button>
        </a>
        <a class="panel-heading collapsed" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseTwo">
          <button class="btn btn-primary">Tambah SO</button>
        </a>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="panel-body">
      		<form class="form-horizontal form-label-left" action="{{URL::to('/purchase-order/create')}}" method="post">
    		  	<div class="col-md-6 col-xs-12">
    	        <div class="x_content">
    	          <br />
    	            <div class="form-group">
    	              <label class="control-label col-md-3 col-sm-3 col-xs-12">PO Number</label>
    	              <div class="col-md-9 col-sm-9 col-xs-12">
    	                <input type="text" name="po_no" class="form-control" placeholder="5000914537">
    	              </div>
    	            </div>
    	            <div class="form-group">
    	              <label class="control-label col-md-3 col-sm-3 col-xs-12">Customer Name</label>
    	              <div class="col-md-9 col-sm-9 col-xs-12">
    	              	  <select name="customer_name" class="select2_single form-control" style="width: 300px">
    		              	<option></option>
    		                @foreach($customers as $customer)
    		                	<option value="{{$customer->customer_name}}">{{$customer->customer_name}}</option>
    		                @endforeach
    		              </select>
    	              </div>
    	            </div>
    	        </div>
    		    </div>
    		    <div class="col-md-6 col-xs-12">
    		        <div class="x_content">
    		          <br />
    		            <div class="form-group">
    		              <label class="control-label col-md-3 col-sm-3 col-xs-12">PO Date </label>
    		              <div class="col-md-9 col-sm-9 col-xs-12">
    		                <input type="text" name="po_date" class="form-control has-feedback-left" id="single_cal2" placeholder="03/31/2016" aria-describedby="inputSuccess2Status2">
    		              </div>
    		            </div>
    		        </div>
    		    </div>
    		    <div class="col-md-12 col-xs-12">
              <div class="x_content">
      		    	<div class="form-group">
      		    	  <a onclick="addRow();" class="btn btn-primary">Add Product</a>
      		    	  <a onclick="deleteRow();" class="btn btn-danger">Delete Row</a>
                  <table class="table table-striped responsive-utilities jambo_table bulk_action" id="myTable">
                    <thead>
                      <tr class="headings">
                      	<th class="column-title">Product Name</th>
                      	<th class="column-title">Order Qty </th>
                        <th class="column-title">Unit Price </th>
                      	<th class="column-title">SO Date </th>
                        <th class="column-title">ETD Date </th>
                        <th class="column-title">ETA di PO </th>
                      	<th class="column-title">Sourching </th>
                      </tr>
                    </thead>
                    <tbody>

                    </tbody>
                  </table>
                </div>
      		      <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: center">
      		      	<div class="ln_solid"></div>
                  <button type="submit" class="btn btn-primary">Cancel</button>
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>
              </div>
    		    </form>
    		    <!--<div id="controlButtons">
    			  <button onclick="">Add row</button>
    			  <button >Delete row</button>
    			</div>-->
        </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
       <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="form-group">
          <label class="control-label col-md-2 col-sm-2 col-xs-12">PO Date </label>
          <div class="col-md-10 col-sm-10 col-xs-10">
            <select name="material_code" class="select2_single form-control" ><option></option>@foreach($purchase_order as $po)<option value="{{$po->po_no}} ">{{$po->po_no}}</option>@endforeach</select>
          </div>
        </div>
        <div class="form-group">
          <table class="table table-striped responsive-utilities jambo_table bulk_action" >
                    <thead>
                      <tr class="headings">
                        <th class="column-title">Product Name</th>
                        <th class="column-title">Order Qty </th>
                        <th class="column-title">Unit Price </th>
                        <th class="column-title">SO Date </th>
                        <th class="column-title">ETD Date </th>
                        <th class="column-title">ETA di PO </th>
                        <th class="column-title">Sourching </th>
                      </tr>
                    </thead>
                      
                    <tbody>
                      <tr>
                        <!-- <p id="dl"><input value="array()"></p> -->
                        <td>{{ Form::select('dl', array(), null, array('id' => 'dl', 'class'=>'form-control'))  }}</td>
                      </tr>
                    </tbody>
                  </table>
        </div>
       </div>
    </div>
  </div>
@stop
@section('script')
{{ HTML::script('js/datatables/jquery.dataTables.min.js')}}
<script type="text/javascript">
  var count = [];

  $(document).ready(function() {
    $('table#myTable').dataTable({
      'bFilter': false,
      'bInfo': false,
      'bPaginate': false,
    });

    // Add initial row
    addRow();
  } );

  function addRow() {
    $('table#myTable').dataTable().fnAddData( [
      "<select class='select2_single form-control'  name='material_name[]'><option></option>@foreach($products as $product)<option value='{{$product->material_name}}'>{{$product->material_name}}</option>@endforeach</select>",	
      '<input name="order_qty[]" class="form-control col-md-12" type="text" id="order_qty" onkeyup="myFunction()"></input>',
      '<input type="text" onkeyup="myFunction()" name="unit_price[]" id="unit_price" class="form-control col-md-12"></input>',
      '<input name="so_date[]" type="date" class="form-control" placeholder="03/31/2016" aria-describedby="inputSuccess2Status2">',
      '<input type="date" name="etd[]" class="form-control " placeholder="03/31/2016" aria-describedby="inputSuccess2Status2">',
      '<input type="date" name="eta_po[]" class="form-control"  placeholder="03/31/2016" aria-describedby="inputSuccess2Status2">',
      '<select name="source[]" class="select2_single form-control"><option></option>@foreach($storages as $storage)<option value="{{$storage->code_name}}">{{$storage->code_name}}</option>@endforeach</select>',
      ] );

    count++;
  }

  function deleteRow () {
    if (count != 1) {
        $("table#myTable").dataTable().fnDeleteRow(count - 1);

        count--;
    }
  }
</script>
<script>
function myFunction() {
    var x = document.getElementById("order_qty").value * document.getElementById("unit_price").value;
    document.getElementById("exclude").value = x;
    var y = document.getElementById("exclude").value * +(1.1);
    document.getElementById("include").value = y;
}
</script>
<script type="text/javascript" src="js/datepicker/daterangepicker1.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    	
      $('input[name^=so_date]').daterangepicker({
        singleDatePicker: true,
        calender_style: "picker_2"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
      $('#single_cal2').daterangepicker({
        singleDatePicker: true,
        calender_style: "picker_2"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
      $('input[name^=eta_po]').daterangepicker({
        singleDatePicker: true,
        calender_style: "picker_2"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
      $('input[name^=etd]').daterangepicker({
        singleDatePicker: true,
        calender_style: "picker_2"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
    });
  </script>
  <script type="text/javascript">
      $(document).ready(function() {
          $("select[name='material_code']").on('change', function(){
          $.post('{{ URL::to('purchase-o/data') }}', {type: 'dl', id: $("select[name='material_code']").val()}, function(e){
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
@stop