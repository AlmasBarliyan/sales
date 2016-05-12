@extends('products.table')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Customers</h3>
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
                          <li><a href="{{URL::to('/customers/'.$tab->code)}}">{{$tab->code_name}}</a>
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
                              <p class="lead">Tab Customer {{$tb->code_name}} <button type="button" class="btn btn-round btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">+ Add </button></p>
                            @else
                              <p class="lead">All Customer </p>
                            @endif
                          
                             <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Company</th>
                                  <th>Plant</th>
                                  <th>Customer Code</th>
                                  <th>Customer Name</th>
                                  <th>Sales District</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php $no = 1 ?>
                              @foreach($customers as $ctm)
                                <tr>
                                  <td>{{$no++}}</td>
                                  <td>{{$ctm->company}}</td>
                                  <td>{{$ctm->plant}}</td>
                                  <td>{{$ctm->customer_code}}</td>
                                  <td>{{$ctm->customer_name}}</td>
                                  <?php foreach (DB::table('cd_code')->where('hcode','=','ZD')->where('code','=',$ctm->sales_district)->get() as $key) { ?>
                                    <td>{{$key->code_name}}</td>
                                  <?php } ?>
                                  <td>
                                    <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg{{$ctm->customer_code}}"><i class="fa fa-pencil"></i></button>
                                    <a href="{{URL::to('customer/delete/'.$ctm->customer_code)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> </a>
                                  </td>
                                </tr>
                              @endforeach
                              </tbody>
                            </table>
                          </div>
                          
                        </div>
                      </div>
                    <br />
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                          </div>
                           <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ URL::to('/customers-create') }}" method="post">
                          <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Company</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="company" class="form-control" required="required">
                                        <option></option>
                                        @foreach($hcode as $cd)
                                            <option value="{{ $cd->code }}">{{$cd->code_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Plant</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="plant" class="select2_single form-control" required="required">
                                        <option></option>
                                        @foreach($plant as $cd)
                                            <option value="{{$cd->code}}">{{$cd->code}} ( {{$cd->code_name}} )</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="code_name" class="control-label col-md-3 col-sm-3 col-xs-12">Customer Code <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="customer_code" class="form-control col-md-7 col-xs-12" type="text" name="customer_code">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="code_name" class="control-label col-md-3 col-sm-3 col-xs-12">Customer Name <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="customer_name" class="form-control col-md-7 col-xs-12" type="text" name="customer_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="code_name" class="control-label col-md-3 col-sm-3 col-xs-12">Customer Kategori <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="customer_ktg" readonly="true" value="{{Session::get('code')}}" class="form-control col-md-7 col-xs-12" type="text" name="customer_ktg">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="code_name" class="control-label col-md-3 col-sm-3 col-xs-12">Sales District <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select class="form-control" name="sales_district">
                                    <?php foreach (DB::table('cd_code')->where('code','!=','*')->where('hcode','=','ZD')->get() as $row) { ?>
                                      <option value="{{$row->code}}">{{$row->code_name}}</option>
                                    <?php } ?>
                                  </select>
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
                    @foreach($customers as $ctm)
                    <div class="modal fade bs-example-modal-lg{{$ctm->customer_code}}" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                          </div>
                           <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ URL::to('/customers-update') }}" method="post">
                          <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Company</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="company" class="form-control" required="required">
                                        <option></option>
                                        @foreach($hcode as $cd)
                                          <option value="{{ $cd->code }}">{{$cd->code_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Plant</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="plant" class="select2_single form-control" required="required">
                                        <option></option>
                                        @foreach($plant as $cd)
                                            <option value="{{$cd->code}}">{{$cd->code}} ( {{$cd->code_name}} )</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="code_name" class="control-label col-md-3 col-sm-3 col-xs-12">Customer Code <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="customer_code" class="form-control col-md-7 col-xs-12" value="{{$ctm->customer_code}}" type="text" name="customer_code">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="code_name" class="control-label col-md-3 col-sm-3 col-xs-12">Customer Name <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="customer_name" class="form-control col-md-7 col-xs-12" type="text" value="{{$ctm->customer_name}}" name="customer_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="code_name" class="control-label col-md-3 col-sm-3 col-xs-12">Customer Kategori <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="customer_ktg" readonly="true" value="{{$ctm->customer_ktg}}" class="form-control col-md-7 col-xs-12" type="text" name="customer_ktg">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="code_name" class="control-label col-md-3 col-sm-3 col-xs-12">Sales District <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select class="form-control" name="sales_district">
                                    <?php foreach (DB::table('cd_code')->where('code','!=','*')->where('hcode','=','ZD')->get() as $row) { ?>
                                      <option value="{{$row->code}}">{{$row->code_name}}</option>
                                    <?php } ?>
                                  </select>
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
@stop