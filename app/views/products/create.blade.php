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
                  <div class="col-xs-3">
                    <!-- required for floating -->
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tabs-left">
                    @foreach($tabs as $tab)
                      <li><a href="{{URL::to('/products/'.$tab->code)}}">{{$tab->code_name}}</a>
                      </li>
                    @endforeach
                    </ul>
                  </div>

                  <div class="col-xs-9">
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div class="tab-pane active" id="home">
                        @if(Session::get('code') != "")
                        <?php $tb = DB::table('cd_code')->where('code','=',Session::get('code'))->first(); ?>
                          <p class="lead">{{$tb->code_name}} TAB <button type="button" class="btn btn-round btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">+ Add </button></p>
                        @else
                          <p class="lead">All Products </p>
                        @endif
                      
                         <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Company</th>
                              <th>Plant</th>
                              <th>Material Code</th>
                              <th>Material Name</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php $no = 1 ?>
                          @foreach($material as $mt)
                            <tr>
                              <td>{{$no++}}</td>
                              <td>{{$mt->company}}</td>
                              <td>{{$mt->plant}}</td>
                              <td>{{$mt->material_code}}</td>
                              <td>{{$mt->material_name}}</td>
                              <td>
                                <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg{{$mt->material_code}}"><i class="fa fa-pencil"></i></button>
                                <a href="{{URL::to('common-code/delete/'.$mt->material_code)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> </a>
                              </td>
                            </tr>
                          @endforeach
                          </tbody>
                        </table>
                      </div>
                      
                    </div>
                  </div>
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
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Company</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" value="{{$company}}" name="company" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Plant</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="plant" value="1010" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="material_code">Product Code <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="matrial_code" name="material_code" required="required" placeholder="123456" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="material_name">Product Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="material_name" class="form-control col-md-7 col-xs-12" name="material_name" placeholder="MSG Large Crystal Jombang (25kg)" required="required" type="text">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="material_name">Product Kategori <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="material_ktg" readonly="true" class="form-control col-md-7 col-xs-12" name="material_ktg" value="{{Session::get('code')}}" required="required" type="text">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="material_pack">Product Pack <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="material_pack" name="material_pack" required="required" placeholder="BAG/BOX" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="material_size">Product Size <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="material_size" class="form-control col-md-7 col-xs-12" name="material_size" placeholder="25" required="required" type="text">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="material_unit">Product Unit <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="material_unit" class="form-control col-md-7 col-xs-12" name="material_unit" placeholder="KG/BOX" required="required" type="text">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="material_item">Product Item
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="material_item" class="form-control col-md-7 col-xs-12" name="material_item" placeholder="IMP / I+G" type="text">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="material_type">Product Type <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="material_type" class="form-control col-md-7 col-xs-12" name="material_type" placeholder="MSG / PROSIN" required="required" type="text">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nicklot">Nicklote <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="nickot" class="form-control col-md-7 col-xs-12" name="nicklot" placeholder="GDAF" required="required" type="text">
                        </div>
                    </div>
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