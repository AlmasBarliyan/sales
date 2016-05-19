@extends('products.table')
@section('content')
		<div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Return</h3>
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
          <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Items Bad in Warehouse </h2>
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
                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Kode Transaksi</th>
                        <th>Material</th>
                        <th>Quantity Bad</th>
                        <th>Warehouse</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                      $no = 1;
                    ?>
                    @foreach($return as $rtn)
                    <?php
                      $material = DB::table('cd_material')->where('material_code','=',$rtn->material_code)->first();
                      $gudang = DB::table('cd_code')->where('code','=',$rtn->storage)->where('hcode','!=','*')->first();
                    ?>
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$rtn->lot_number}}</td>
                        <td>{{$material->material_code}} - {{$material->material_name}}</td>
                        <td>{{$rtn->in_qty}} BAG <span class="tags">BAD</span></td>
                        <td>{{$gudang->code_name}}</td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                  <form class="form-horizontal form-label-left input_mask" action="{{URL::to('/return-create')}}" method="post">
                    <!-- <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12">Product Name</label>
                      <div class="col-md-10 col-sm-10 col-xs-12">

                        {{ Form::select('material_code', $products, null, array('id' => 'sMaterialName', 'class'=>'select2_single form-control'))  }}
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12">Lot Number</label>
                      <div class="col-md-10 col-sm-10 col-xs-12">
                      		{{ Form::select('lotnumber', array(), null, array('id' => 'sLotnumber', 'class'=>'select2_single form-control'))  }}
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
                      <p id="sMaterial">
                      <table class="table table-striped responsive-utilities jambo_table bulk_action">

	                  </table></p>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">Cancel</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>-->

                  </form>
                </div>
              </div>
			</div>
		</div>
@stop
@section('script')
<script>
function myFunction() {
    var x = document.getElementById("return_kg").value * document.getElementById("return_bag").value;
    document.getElementById("result_return").value = x;
    var y = document.getElementById("bad_kg").value * document.getElementById("bad_bag").value;
    document.getElementById("result_bad").value = y;
}
</script>
<script type="text/javascript">
            $(document).ready(function() {
                $('#sMaterialName').on('change', function(){
                $.post('{{ URL::to('site/return') }}', {type: 'lotnumber', id: $('#sMaterialName').val()}, function(e){
                    $('#sLotnumber').html(e);
                });
                
                $('#sMaterial').html('');
                $('#sDesa').html('');
                
            });
            $('#sLotnumber').on('change', function(){
                $.post('{{ URL::to('site/return') }}', {type: 'material', id: $('#sLotnumber').val()}, function(e){
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