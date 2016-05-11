@extends('products.table')
@section('content')
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>
                Products
              </h3>
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
                <div class="x_content">
                <button type="button" class="btn btn-round btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">+ Add </button>
                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Kode Transaksi</th>
                        <th>Storage</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                      $no = 1;

                     ?>
                    @foreach($inbound as $in)
                    <?php
                      $gudang = DB::table('cd_code')->where('code','=',$in->storage)->get();
                    ?>
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$in->id_transaksi}}</td>
                        @foreach($gudang as $gdg)
                        <td>{{$gdg->code_name}} </td>
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
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
              </div>
              <form class="form-horizontal form-label-left" novalidate action="{{URL::to('/create-product')}}" method="post">
              <div class="modal-body">
                <table id="myTable" class="table table-striped responsive-utilities jambo_table bulk_action">
                  <thead>
                    <tr class="headings">
                      <th>#</th>
                      <th class="column-title">Product</th>
                      <th class="column-title">Lot Number</th>
                      <th class="column-title">Qty In</th>
                      <th class="column-title">Good</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="col-sm-1">
                          <input type="button"  value="delete" />
                      </td>
                      <td>
                        <select class="select2_single">
                          <option>Choose option</option>
                          <option>Option one</option>
                          <option>Option two</option>
                          <option>Option three</option>
                          <option>Option four</option>
                          <option>Option five</option>
                          <option>Option six</option>
                        </select>
                      </td>
                      <td>
                        <input type="text" class="col-md-12 fname" name="qty[]" />
                      </td>
                      <td>
                        <input type="text" class="col-md-12 fname" name="qty[]" />
                      </td>
                      <td>
                        <div class="radio">
                          <label>
                            <input type="radio" class="flat" checked name="iCheck"> Yes
                            <input type="radio" class="flat" name="iCheck"> No
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            
                          </label>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <p>
                    <input type="button" value="Insert row">
                </p>
               </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
              </form>
            </div>
          </div>
        </div>
<!-- footer content -->
<footer>
  <div class="pull-right">
    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
  </div>
  <div class="clearfix"></div>
</footer>
<!-- /footer content -->
@stop
@section('script')
<!-- select2 -->
  <script src="js/select/select2.full.js"></script>
<script>
    $(document).ready(function() {
      $(".select2_single").select2({
        placeholder: "Select a state",
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
  $('#myTable').on('click', 'input[type="button"]', function () {
    $(this).closest('tr').remove();
})
$('p input[type="button"]').click(function () {
    $('#myTable').append('<tr><td class="col-sm-1"><input type="button" class="fa fa-trash" value="delete" /></td><td><input type="text" class="col-md-12 fname" name="qty[]"/></td><td><select name="status[]" class="col-md-12"><option value="G">Good</option><option value="B">Bad</option></select></td></tr>')
});
</script>
@stop