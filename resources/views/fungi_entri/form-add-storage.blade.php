<div class="tab-pane {{ !empty($tabName) && $tabName == 'storage' ? 'active' : '' }}" id="storage">
              <form class="form-horizontal" action="" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">
                  <div class="box-header with-border">
                    <h3 class="box-title">Add New Storage</h3>
                    <p>{{ $error_msg or "" }}</p>
                  </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tube Number</label>
                  <div class="col-sm-10">
                    <input type="tube" class="form-control" id="exampleInputPassword1" placeholder="tube">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Rack</label>
                  <div class="col-sm-10">
                    <input type="rack" class="form-control" id="exampleInputPassword1" placeholder="rack">
                  </div>
                </div>
                  
                  <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary pull-right">Save</button>
                </div>
              </form>
            </div>