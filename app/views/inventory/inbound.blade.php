@extends('layouts.main')
@section('content')
		<div class="">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Inbound <small>Product IN</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form class="form-horizontal form-label-left input_mask" action="{{URL::to('/inbound-create')}}" method="post">
              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12">Product Name</label>
                <div class="col-md-10 col-sm-10 col-xs-12">
                  {{ Form::select('material_code', $products, null, array('id' => 'sMaterialName', 'class'=>'select2_single form-control'))  }}
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12">Lot Number</label>
                <div class="col-md-5 col-sm-5 col-xs-6">
              	   <p id="sNicklot"><input  type="text" class="form-control" readonly="readonly" placeholder="ABCD"></p>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-6">
                	<input type="text" name="nolot" class="form-control has-feedback-left" id="single_cal2" placeholder="160707" aria-describedby="inputSuccess2Status2">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12">Remark <span class="required">*</span>
                </label>
                <div class="col-md-10 col-sm-10 col-xs-12">
                  <input name="remark" class="date-picker form-control col-md-7 col-xs-12"  type="text">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12">Storage <span class="required">*</span>
                </label>
                <div class="col-md-10 col-sm-10 col-xs-12">
                  <select name="storage" class="select2_single form-control">
                    @foreach($storage as $st)
                      <option value="{{$st->code}}">{{$st->code_name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group">
                <table id="myTable" class="table table-striped responsive-utilities jambo_table bulk_action">
                  <thead>
                    <tr class="headings">
                      <th>#</th>
                      <th class="column-title">Qty Bag</th>
                      <th class="column-title">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="col-sm-1">
                          <input type="button"  value="delete" />
                      </td>
                      <td>
                          <input type="text" class="col-md-12 fname" name="qty[]" />
                      </td>
                      <td>
                        <select class="col-md-12" name="status[]">
                          <option value="G">Good</option>
                          <option value="B">Bad</option>
                        </select>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <p>
                    <input type="button" value="Insert row">
                </p>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                  <button type="submit" class="btn btn-primary">Cancel</button>
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>

            </form>
          </div>
        </div>
			</div>
		</div>
@stop
@section('script')
<script type="text/javascript">
  $('#myTable').on('click', 'input[type="button"]', function () {
    $(this).closest('tr').remove();
})
$('p input[type="button"]').click(function () {
    $('#myTable').append('<tr><td class="col-sm-1"><input type="button" class="fa fa-trash" value="delete" /></td><td><input type="text" class="col-md-12 fname" name="qty[]"/></td><td><select name="status[]" class="col-md-12"><option value="G">Good</option><option value="B">Bad</option></select></td></tr>')
});
</script>
<script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#single_cal2').daterangepicker({
        singleDatePicker: true,
        calender_style: "picker_2"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
    });
  </script>
<script>
function myFunction() {
    var x = document.getElementById("good_kg").value * document.getElementById("good_bag").value;
    document.getElementById("result_good").value = x;
    var y = document.getElementById("bad_kg").value * document.getElementById("bad_bag").value;
    document.getElementById("result_bad").value = y;
    var z = +(document.getElementById("good_bag").value) + +(document.getElementById("bad_bag").value);
    document.getElementById("result_bag").value = z;
    var r = z * document.getElementById("result_kg").value;
    document.getElementById("result_kgs").value = r;
}
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#sMaterialName').on('change', function(){
        $.post('{{ URL::to('site/data') }}', {type: 'nicklot', id: $('#sMaterialName').val()}, function(e){
            $('#sNicklot').html(e);
        });
        
        $('#sKecamatan').html('');
        $('#sDesa').html('');
        
    });
    $('#sKota').on('change', function(){
        $.post('{{ URL::to('site/data') }}', {type: 'kecamatan', id: $('#sKota').val()}, function(e){
            $('#sKecamatan').html(e);
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