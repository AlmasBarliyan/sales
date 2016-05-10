<!DOCTYPE html>
<html>
<head>
  <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  
</head>
<body>
<!-- Modal -->
                      <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                          
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Modal Header</h4>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                  <select id="myselect" name="Icecream Flavours"><option value="double chocolate">Double Chocolate</option><option value="vanilla">Vanilla</option><option value="strawberry">Strawberry</option><option value="caramel">Caramel</option></select>
                                  <!-- <select name="material_name[]" class="select2_single form-control" id="sMaterialName"><option></option>@foreach($purchase_order as $po)<option value="{{$po->material_name}}">{{$po->po_no}}</option>@endforeach</select> -->
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" onclick="addUser()" class="btn btn-default">Pilih</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>

                        </div>
                      </div>
                    <!--  -->
  <div class="col-md-12 col-xs-12">
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
  </div>
  <input type="text" name="milk_input_name[]" id="milk_input_id" class="milk_input_class" value=""><br/>
  
  </div>
  
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
      '<button type="button" id="milk_a_id" class="btn btn-info btn-sm milk_a_class" data-toggle="modal" data-target="#myModal">Open Modal</button><a id="milk_a_id" class="milk_a_class" data-target="#myModal" data-toggle="modal" href="#">See Milk List</a>', 
      '<input name="order_qty[]" class="form-control col-md-12" type="text" id="order_qty" onkeyup="myFunction()"></input>',
      '<input type="text" onkeyup="myFunction()" name="unit_price[]" id="unit_price" class="form-control col-md-12"></input>',
      '<input name="so_date[]" type="date" class="form-control" placeholder="03/31/2016" aria-describedby="inputSuccess2Status2">',
      '<input type="date" name="etd[]" class="form-control " placeholder="03/31/2016" aria-describedby="inputSuccess2Status2">',
      '<input type="date" name="eta_po[]" class="form-control"  placeholder="03/31/2016" aria-describedby="inputSuccess2Status2">',
      '',
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
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jj.js"></script>
</body>
</html>

