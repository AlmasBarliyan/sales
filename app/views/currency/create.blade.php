@extends('products.table')
@section('content')
<div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>
                Currency
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
              	<div class="x_title">
	              <h2>List Currency Rate </h2>
	              <ul class="nav navbar-right panel_toolbox">
	                <li><button type="button" class="btn btn-round btn-primary"  data-toggle="modal" data-target=".bs-example-modal-lg">+ Add </button></li>
	              </ul>
	              <div class="clearfix"></div>
	            </div>
                <div class="x_content">
                  <div class="col-xs-12">
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div class="tab-pane active" id="home">
                       <!--  @if(Session::get('code') != "")
                        <?php $tb = DB::table('cd_code')->where('code','=',Session::get('code'))->first(); ?>
                          <p class="lead">{{$tb->code_name}} TAB <button type="button" class="btn btn-round btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">+ Add </button></p>
                        @else
                          <p class="lead">All Products </p>
                        @endif -->
                      
                         <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Date</th>
                              <th>Currency Code</th>
                              <th>Currency Rate</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php $no = 1 ?>
                          @foreach($list_cur as $cur)
                          	<tr>
                          		<td>{{$no++}}</td>
                          		<td>{{$cur->exchange_date}}</td>
                          		<td>{{$cur->currency_code}}</td>
                          		<td>Rp. {{$cur->currency_rate}}</td>
                              <td>
                                <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg{{$cur->exchange_date}}"><i class="fa fa-pencil"></i></button>
                                <a href="{{URL::to('/delete-currency/'.$cur->exchange_date)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> </a>
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
                <h4 class="modal-title" id="myModalLabel">Add Currency Rate</h4>
              </div>
              <form class="form-horizontal form-label-left" novalidate action="{{URL::to('/create-currency')}}" method="post">
              <div class="modal-body">
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Exchange Date</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="date" name="exchange_date" value="<?php echo date("Y-m-d"); ?>" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Exchange Code</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="currency_code" class="form-control">
                        	@foreach($list_cur_code as $lcr)
                        		<option value="{{$lcr->code}}">{{$lcr->code_name}}</option>
                        	@endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Exchange Rate</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        Rp. <input type="text" name="currency_rate" class="form-control">
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
        @foreach($list_cur as $cur)
        <div class="modal fade bs-example-modal-lg{{$cur->exchange_date}}" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Add Currency Rate</h4>
              </div>
              <form class="form-horizontal form-label-left" novalidate action="{{URL::to('/update-currency')}}" method="post">
              <div class="modal-body">
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Exchange Date</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="hidden" name="id" value="{{$cur->exchange_date}}">
                        <input type="date" name="exchange_date" value="{{$cur->exchange_date}}" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Exchange Code</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="currency_code" class="form-control">
                          @foreach($list_cur_code as $lcr)
                            <option value="{{$lcr->code_name}}">{{$lcr->code_name}}</option>
                          @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Exchange Rate</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        Rp. <input type="text" name="currency_rate" value="{{$cur->currency_rate}}" class="form-control">
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
@stop