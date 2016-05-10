      <div class="x_content">
        <div class="col-xs-3">
          <!-- required for floating -->
          <!-- Nav tabs -->
          <ul class="nav nav-tabs tabs-left">
            <li><a href="{{URL::to('/common-code')}}">COMMON CODE</a>
            </li>
            @foreach($commoncode as $cmc)
            <li><a href="{{URL::to('/common-code/'.$cmc->hcode)}}">{{$cmc->code_name}}</a>
            </li>
            @endforeach
          </ul>
        </div>

      <div class="col-xs-9">
        <!-- Tab panes -->
        <div class="tab-content">
        
          <div class="tab-pane active" id="home">
          @if(Session::get('hc') != "")
          <?php $tb = DB::table('cd_code')->where('hcode','=',Session::get('hc'))->first(); ?>
            <p class="lead">{{$tb->code_name}} TAB <button type="button" class="btn btn-round btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">+ Add </button></p>
          @else
            <p class="lead">COMMON CODE TAB <button type="button" class="btn btn-round btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">+ Add </button></p>
          @endif
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>HCode</th>
                  <th>Code</th>
                  <th>Code Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php $no = 1 ?>
              @foreach($hcode as $hc)
                  <tr>
                      <td>{{$no++}}</td>
                      <td>{{$hc->hcode}}</td>
                      <td>{{$hc->code}}</td>
                      <td>{{$hc->code_name}}</td>
                      <td>
                        <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg{{$hc->id}}"><i class="fa fa-pencil"></i> Edit </button>
                        <a href="{{URL::to('common-code/delete/'.$hc->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                      </td>
                  </tr>
              @endforeach
              </tbody>
            </table>
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
          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ URL::to('/common-code/tambah') }}" method="post">
          <div class="modal-body">
                                    
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="head-code">Head Code <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="head-code" required="required" name="hcode" value="{{Session::get('hc')}}" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="code">Code <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="code" name="code" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="form-group">
                <label for="code_name" class="control-label col-md-3 col-sm-3 col-xs-12">Code Name <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="code_name" class="form-control col-md-7 col-xs-12" type="text" name="code_name">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Description 1
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea class="form-control col-md-7 col-xs-12" name="desc1"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Description 2
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea class="form-control col-md-7 col-xs-12" name="desc2"></textarea>
                </div>
            </div>
            <div class="ln_solid"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    @foreach($hcode as $hc)
    <div class="modal fade bs-example-modal-lg{{$hc->id}}" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ URL::to('/common-code/update') }}" method="post">
          <div class="modal-body">
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="head-code">Head Code <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="hidden" name="id" value="{{$hc->id}}">
                    <input type="text" id="head-code" required="required" name="hcode" value="{{$hc->hcode}}" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="code">Code <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="code" name="code" value="{{$hc->code}}" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="form-group">
                <label for="code_name" class="control-label col-md-3 col-sm-3 col-xs-12">Code Name <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="code_name" class="form-control col-md-7 col-xs-12" value="{{$hc->code_name}}" type="text" name="code_name">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Description 1
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea class="form-control col-md-7 col-xs-12" name="desc1">{{$hc->desc1}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Description 2
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea class="form-control col-md-7 col-xs-12" name="desc2">{{$hc->desc2}}</textarea>
                </div>
            </div>
            <div class="ln_solid"></div>
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