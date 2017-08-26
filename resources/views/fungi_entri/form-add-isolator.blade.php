<div class="tab-pane {{ !empty($tabName) && $tabName == 'isolator' ? 'active' : '' }}" id="isolator">
              <form class="form-horizontal" action="" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">
                  <div class="box-header with-border">
                    <h3 class="box-title">Add New Isolator</h3>
                    <p>{{ $error_msg or "" }}</p>
                  </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Isolator Name</label>
                  <div class="col-sm-10">
                    <input value='{{ $input["name_isolator"] or ""}}' type="" class="form-control" id="exampleInputPassword1" name="name_isolator" placeholder="name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Instansi</label>
                  <div class="col-sm-10">
                    <input value='{{ $input["instansi_isolator"] or ""}}' type="" class="form-control" id="exampleInputPassword1" name="instansi_isolator" placeholder="instansi">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Expertise</label>
                  <div class="col-sm-10">
                    <input value='{{ $input["instansi_isolator"] or ""}}' type="" class="form-control" id="exampleInputPassword1" name="expertise_isolator" placeholder="expertise">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Isolated at</label>
                  <div class="col-xs-5">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input value='{{ $input["date_isolator"] or ""}}' type="text" class="form-control pull-right" name="date_isolator" id="datepicker">
                    </div>
                  </div>
                </div>
                  
                  <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary pull-right">Save</button>
                </div>
              </form>
            </div>