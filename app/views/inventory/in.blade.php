@extends('products.table')
@section('content')
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>
                Inbound
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
                <button type="button" class="btn btn-round btn-primary" onClick="selectValue('sku1')" value="?">+ Add </button>
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
                      
                     // 
                    ?>
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$in->id_transaksi}}</td>
                        <td></td>
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
                <h4 class="modal-title" id="myModalLabel">Add Inbound</h4>
              </div>
              <form class="form-horizontal form-label-left input_mask" action="{{URL::to('/inbound-create')}}" method="post">
              <div class="modal-body">
                <!-- <div class="form-group">
                  <table id="myTable" class="table table-striped responsive-utilities jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                        <th>#</th>
                        <th>Product</th>
                        <th>Lot Number</th>
                        <th>Qty In</th>
                        <th>Storage</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                  </table>
                  <p>
                      <input type="button" value="Insert row">
                  </p>
                </div> -->
                <form action="" id="itemsForm">
                  <table id="itemsTable" class="general-table">
                      <thead>
                      <tr>
                          <th></th>
                          <th>Item Code</th>
                          <th>Item Description</th>
                          <th>Item Qty</th>
                          <th>Item Price</th>
                      </tr>
                      </thead>
                      <tbody>
                          <tr class="item-row">
                              <td></td>
                              <td><input name="itemCode[]" value="" class="tInput" id="itemCode" tabindex="1"/> </td>
                              <td><input name="itemDesc[]" value="" class="tInput" id="itemDesc"  readonly="readonly" /></td>
                              <td><input name="itemQty[]" value="" class="tInput" id="itemQty" tabindex="2"/></td>
                              <td><input name="itemPrice[]" value="" class="tInput" id="itemPrice" readonly="readonly" /> </td>
                          </tr>
                      </tbody>
                  </table>
              </form>
              <a href="#" id="addRow" class="button-clean large"><span> <img src="images/images/icon-plus.png" alt="Add" title="Add Row" /> Add Item</span></a>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
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
<script type="text/javascript">  
function selectValue(id)
{
    // open popup window and pass field id
    window.open('{{URL::to("add")}}','popuppage',
      'width=1000,toolbar=1,resizable=1,scrollbars=yes,height=1000,top=100,left=100');
}
</script>
<!-- select2 

<script type="text/javascript">
  $('#myTable').on('click', '.fa-trash', function () {
    $(this).closest('tr').remove();
})
$('p input[type="button"]').click(function () {
    $('#myTable').append('<tr><td><i class="fa fa-trash"></i></td><td style="width:10px"><select name="material_code[]" style="width:200px" class="col-md-12"><option></option>@foreach($products as $product)<option value="{{$product->material_code}}">{{$product->material_code}} - {{$product->material_name}}</option>@endforeach</select></td><td><input type="text" name="nolot[]" class="col-md-12"></td><td><input type="text" class="col-md-12"  name="qty[]" /></td><td> <select class="col-md-12" name="storage[]">@foreach($storage as $st)<option value="{{$st->code}}">{{$st->code_name}}</option>@endforeach</select></td><td><select class="col-md-12" name="status[]"><option value="G">Good</option><option value="B">Bad</option></select></td></tr>')
});
</script>-->
@stop