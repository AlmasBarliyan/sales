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
                <!-- <table border=0  id="myTable"> 

                  <tr>
                    <th valign=bottom>PACK CODE</th>
                  </tr>
                  <tr id="r1">  
                      <td class="col-sm-1">
                          <input type="btn"  value="delete" />
                      </td>
                      <td>
                          <input size=10  type=number id=sku1 name=sku1 onchange="showUser(1, this.value)">
                          <input type="button" name="choice" onClick="selectValue('sku1')" value="?">

                      </td>
                  </tr>
                  </table>
                  <p>
                      <input type="button" value="Insert row">
                  </p>
                  </form> -->
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
                      $indetail = DB::table('tx_itemindetail')->where('id_transaksi','=',$in->id_transaksi)->get();
                      foreach ($indetail as $ind) {
                        $gudang = DB::table('cd_code')->where('code','=',$ind->storage)->get();
                      }
                     // 
                    ?>
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$in->id_transaksi}}</td>
                        @foreach($gudang as $gdg)
                        <td>{{$gdg->code_name}}</td>
                        @endforeach
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                  <!-- <p>
                    <label for="spinner">Banyak Produk :</label>
                    <input id="spinner" name="value" />
                    <input type="button" value="OK" id="ok" />
                </p>
                <div class="order-listing">
                  <table id="my-table" class="table table-striped responsive-utilities jambo_table bulk_action">
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
                          
                        </tbody>
                    </table>                  
                </div> -->
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
                <div class="form-group">
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
<!--<script>
$(function() {
 var spinner = $( "#spinner" ).spinner({ min: 0 });

$( "#ok" ).click(function() {
  var spiner_val = spinner.spinner( "value" ) ;
   
 var html = '<tr><td><i class="fa fa-trash"></i></td><td><input size=10  type=number id=sku1 name=sku1 onchange="showUser(1, this.value)"><input type="button" name="choice" onClick="selectValue(sku1)" value="?"></td><td><input type="text" name="name" /></td><td><input type="text" name="name" /></td><td></td></tr>';
 for(i = 0; i < spiner_val;i++){
     $(html).insertAfter('tr:last');
 }
});

$( "button" ).button();
});
</script>
<script type="text/javascript">  
  function showUser(userNumber, str)  
  {  
    if (str=="")  
    {  
      document.getElementById("txtHint" + userNumber).innerHTML="";  
      return;  
    }    
    if (window.XMLHttpRequest)  
    {// code for IE7+, Firefox, Chrome, Opera, Safari  
      xmlhttp=new XMLHttpRequest();  
    }  

    xmlhttp.onreadystatechange=function()  
    {  
      if (xmlhttp.readyState==4 && xmlhttp.status==200)  
      {  
        //document.getElementById("txtHint" + userNumber).innerHTML=xmlhttp.responseText; 
        var responseText = xmlhttp.responseText; 
        var description = responseText; 
        var warehouse = ""; 
        var sellingUnits = ""; 
        if (responseText.indexOf("NOT A VALID") == -1) 
        { 
          description = responseText.substring(12, responseText.indexOf(",Warehouse:"));  
          warehouse = responseText.substring(responseText.indexOf(",Warehouse:")+11, responseText.indexOf(",SellingUnits:"));  
          sellingUnits = responseText.substring(responseText.indexOf(",SellingUnits:")+15);  
        } 

        document.getElementById("whse" + userNumber).innerHTML = warehouse;  
        document.getElementById("txtHint" + userNumber).innerHTML = description;  
        document.getElementById("su" + userNumber).innerHTML = sellingUnits; 

      }  
    }  
    xmlhttp.open("GET","getdata1.php?q="+str,true);  
    xmlhttp.send(); 
  } 
</script>
<script type="text/javascript">  
function selectValue(id)
{
    // open popup window and pass field id
    window.open('{{URL::to("sku")}}','popuppage',
      'width=400,toolbar=1,resizable=1,scrollbars=yes,height=400,top=100,left=100');
}

function updateValue(id, value)
{
    // this gets called from the popup window and updates the field with a new value
    document.getElementById(id).value = value;
}

</script>-->
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
  $('#myTable').on('click', '.fa-trash', function () {
    $(this).closest('tr').remove();
})
$('p input[type="button"]').click(function () {
    $('#myTable').append('<tr><td><i class="fa fa-trash"></i></td><td style="width:10px"><select name="material_code[]" style="width:200px" class="col-md-12"><option></option>@foreach($products as $product)<option value="{{$product->material_code}}">{{$product->material_code}} - {{$product->material_name}}</option>@endforeach</select></td><td><input type="text" name="nolot[]" class="col-md-12"></td><td><input type="text" class="col-md-12"  name="qty[]" /></td><td> <select class="col-md-12" name="storage[]">@foreach($storage as $st)<option value="{{$st->code}}">{{$st->code_name}}</option>@endforeach</select></td><td><select class="col-md-12" name="status[]"><option value="G">Good</option><option value="B">Bad</option></select></td></tr>')
});
</script>
@stop