<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Product In</title>
    <style type="text/css" title="currentStyle">
                @import "css/css/layout-styles.css";
                @import "css/css/themes/smoothness/jquery-ui-1.8.4.custom.css";
    </style>
    {{ HTML::style('css/bootstrap.min.css')}}

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

    <!-- jQuery libs -->
    <script  type="text/javascript" src="js/js/jquery-1.6.1.min.js"></script>
    <script  type="text/javascript" src="js/js/jquery-ui-1.8.14.custom.min.js"></script>

    <!-- Our jQuery Script to make everything work -->
    <script  type="text/javascript" src="js/js/jq-ac-script.js"></script>


</head>
<body>

<div id="container">

        <div class="panel">
            <div class="title-large">
                <div class="theme"></div>
            </div>

                <div class="content inpad">

                    <div id="messageBox" style="margin-left:15px; padding-left:20px; padding-bottom:5px; border:1px #ccc solid; display:none;"></div>

                            <form action="" id="itemsForm" class="form-horizontal form-label-left" action="{{URL::to('inbound-create')}}" method="post">
                                <div class="form-group" >
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Number In</label>
                                    <?php 
                                        $no_in = DB::select(DB::raw("select max(substr(id_transaksi,-5,5)) as max from tx_itemin where(select max(substr(id_transaksi,-5,5)) from tx_itemin where substr(id_transaksi,1,3)='STO')"));
                                        
                                    ?>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    @foreach($no_in as $noin)
                                    <input name="id_transaksi" readonly="" value="{{'STO' .date('Ym').sprintf('%05d',(int)$noin->max+1)}}" type="text" class="form-control col-md-7 col-xs-12" />
                                    @endforeach
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Date In</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="date_in" type="date" value="<?php echo date('Y-m-d')?>" class="form-control col-md-7 col-xs-12"  tabindex="1"/>    
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Surat Jalan</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input name="no_suratjln" type="text"  class="form-control col-md-7 col-xs-12"  tabindex="1"/>    
                                    </div>
                                </div>
                                <div class="form-group" style="padding-bottom:50px">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Storage</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="storage" class="form-control col-md-7 co-xs-12" name="storage[]">@foreach($storage as $st)<option value="{{$st->code}}">{{$st->code_name}}</option>@endforeach</select>
                                    </div>
                                </div>
                                <table id="itemsTable" class="table table-striped table-bordered dt-responsive nowrap">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Item</th>
                                        <th>Product Description</th>
                                        <th>Lot Number</th>
                                        <th>Qty In</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="item-row">
                                            <td></td>
                                            <td><input style="width:50px" name="material_code[]" value="" class="tInput" id="itemCode" tabindex="1"/></td> 
                                            <td><input name="material_name[]" value="" class="tInput" id="itemDesc"  readonly="readonly" /></td>
                                            <td style="width:200px"><input style="width:50px" name="nicklot[]" value="" class="tInput" id="itemPrice" readonly="readonly" /><input style="width:130px" type="text" placeholder="161230" class="tInput" name="nolot[]" id="nicklot" tabindex="2"></td>
                                            <td><input name="qty[]" value="" class="tInput" id="itemQty" tabindex="2"/></td>
                                            <td>
                                                <select class="tInput" name="status[]">
                                                    <option value="G">Good</option>
                                                    <option value="B">Bad</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                  <div class="col-md-12 col-sm-12 col-xs-12" style="text-align:left">
                                    <a href="#" id="addRow" class="btn btn-primary"><span> + Add Item</span></a>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                  </div>
                                </div>
                            </form>
                        </div>

                </div>
        </div>

</body>
</html>