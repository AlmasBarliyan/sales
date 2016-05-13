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