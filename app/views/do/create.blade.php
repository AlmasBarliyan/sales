
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
  		<div class="x_panel">
  		<form class="form-horizontal form-label-left" action="{{URL::to('/create-delivery-order')}}" method="post">
		  	<div class="col-md-6 col-xs-12">
		        <div class="x_content">
		          <br />		          
		            <div class="form-group">
		              <label class="control-label col-md-3 col-sm-3 col-xs-12">PO Number</label>
		              <div class="col-md-9 col-sm-9 col-xs-12">
		              	<select name="material_code" class="select2_single form-control" ><option></option>@foreach($purchase_order as $po)<option value="{{$po->material_code}} ">{{$po->po_no}}</option>@endforeach</select>
		              </div>
		            </div>
		            <div class="form-group">
		              <label class="control-label col-md-3 col-sm-3 col-xs-12">Sourching</label>
		              <div class="col-md-9 col-sm-9 col-xs-12">
		              	  <select name="source" class="form-control">
                        <option value="A">Surabaya</option>
                        <option value="B">Jakarta</option>
                      </select>
		              </div>
		            </div>
		        </div>
		    </div>
		    <div class="col-md-6 col-xs-12">
		        <div class="x_content">
		          <br />
		            <div class="form-group">
		              <label class="control-label col-md-3 col-sm-3 col-xs-12">Remark </label>
		              <div class="col-md-9 col-sm-9 col-xs-12">
		                <input type="text" name="remark" class="form-control">
		              </div>
		            </div>
		        </div>
		    </div>
		    <div class="col-md-12 col-xs-12">
		    	<div class="form-group">
            <a onclick="myFunction()" class="btn btn-primary">Add</a>
		    	  <table id="myTable" class="table table-striped responsive-utilities jambo_table bulk_action">
              <thead>
                <tr class="headings">
                  <th>Product</th>
                  <th>Qty BAG</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{ Form::select('lotnumber[]', array(), null, array('id' => 'sLotnumber', 'class'=>'form-control'))  }}</td>
                  <td><input type='text' class="form-control" name='qty_bag[]'></td>
                </tr>
              </tbody>
            </table>
          </div>
		    </div>
		      <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: center">
		      	<div class="ln_solid"></div>
                <button type="submit" class="btn btn-primary">Cancel</button>
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
		    </form>
        
		    
    </div>
  </div>
 </div>
@stop
@section('script')
<script>
function myFunction() {
    var table = document.getElementById("myTable");
    var row = table.insertRow(2);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    
    cell1.innerHTML = '{{ Form::select("lotnumber[]", array(), null, array("id" => "sLotnumber", "class"=>"select2_single form-control"))  }}';
    cell2.innerHTML = "<input class='form-control' type='text' name='qty_bag[]'>";
    
}
</script>
<script type="text/javascript">
            $(document).ready(function() {
                $("select[name='material_code']").on('change', function(){
                $.post('{{ URL::to('delivery/data') }}', {type: 'lotnumber', id: $("select[name='material_code']").val()}, function(e){
                    $("select[name='lotnumber[]']").html(e);
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