<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Bootstrap core CSS -->
  	{{ HTML::style('css/bootstrap.min.css')}}
  	{{ HTML::style('fonts/css/font-awesome.min.css')}}
  	{{ HTML::style('css/animate.min.css')}}
  	<!-- Custom styling plus plugins -->

  	{{HTML::style('css/icheck/flat/green.css')}}
  
  	{{HTML::style('js/datatables/jquery.dataTables.min.css')}}
  	{{HTML::style('js/datatables/buttons.bootstrap.min.css')}}
  	{{HTML::style('js/datatables/fixedHeader.bootstrap.min.css')}}
  	{{HTML::style('js/datatables/responsive.bootstrap.min.css')}}
  	{{HTML::style('js/datatables/scroller.bootstrap.min.css')}}
  	<!-- select2 -->
  	{{ HTML::style('css/select/select2.min.css')}}
  	<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
	<script src="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.9.2/jquery-ui.min.js"></script>
</head>
<body>
	<p>
		<select class="select2_multiple form-control" multiple="multiple"><option value"a">a</option><option value"a">b</option><option value"c">c</option><option value"d">d</option></select>
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
 {{HTML::script('js/bootstrap.min.js')}}
 <script type="text/javascript" src="js/search.js"></script>
<script>
$(function() {
 var spinner = $( "#spinner" ).spinner({ min: 0 });

$( "#ok" ).click(function() {
  var spiner_val = spinner.spinner( "value" ) ;
   
 var html = '<tr><td><i class="fa fa-trash"></i></td><td><div class="form-group"><input type="text" id="search_input" name="search_input" class="form-control" placeholder="Search" onkeyup="up()" onkeydown="down()"></input></div><div style="position: relative; float: left; width: 40px; margin: 10px;" id="search-results"></div></td><td><input type="text" name="name" /></td><td><input type="text" name="name" /></td><td></td></tr>';
 for(i = 0; i < spiner_val;i++){
     $(html).insertAfter('tr:last');
 }
});

$( "button" ).button();
});
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
  $('#my-table').on('click', '.fa-trash', function () {
    $(this).closest('tr').remove();
});
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
        <!-- select2 -->
<script src="js/select/select2.full.js"></script>
<script>
    
</script>
</body>
</html>