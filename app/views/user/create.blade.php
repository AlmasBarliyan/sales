@extends('products.table')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Users</h3>
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
                          <li><a href="{{URL::to('/users/'.$tab->code)}}">{{$tab->code_name}}</a>
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
                              <p class="lead">User {{$tb->code_name}} <button type="button" class="btn btn-round btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">+ Add </button></p>
                            @else
                              <p class="lead">All Users </p>
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
                              @foreach($customers as $ctm)
                                <tr>
                                  <td>{{$no++}}</td>
                                  <td>{{$ctm->company}}</td>
                                  <td>{{$ctm->plant}}</td>
                                  <td>{{$ctm->employee_code}}</td>
                                  <td>{{$ctm->employee_name}}</td>
                                  <td>
                                    <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-pencil"></i></button>
                                    <a href="{{URL::to('common-code/delete/')}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> </a>
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
                          
                            <div class="modal-body">
                                <form class="form-horizontal form-label-left" novalidate action="{{URL::to('/create-users')}}" method="post">
                            
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Company</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select name="company" class="select2_single form-control" required="required">
                                                <option></option>
                                                @foreach($hcode as $cd)
                                                    <option value="{{$cd->code}}">{{ $cd->code_name }}</option>
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
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="employee_code">Employee Number <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="number" name="employee_code" required="required" placeholder="123456" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="employee_name">Employee Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="name" class="form-control col-md-7 col-xs-12" name="employee_name" placeholder="Jon Doe" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="employee_name">Employee Kategori <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="name" class="form-control col-md-7 col-xs-12" name="emp_ktg" value="{{Session::get('code')}}" readonly="true" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Confirm Email <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="email" id="email2" name="confirm_email" data-validate-linked="email" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="password" class="control-label col-md-3">Password</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="password" type="password" name="password" data-validate-length="3,20" class="form-control col-md-7 col-xs-12" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat Password</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Viewer</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select name="viewer" class="select2_single form-control" required="required">
                                                <option></option>
                                                <option value="A">All</option>
                                                <option value="P">Plant</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button type="submit" class="btn btn-primary">Cancel</button>
                                            <button id="send" type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop