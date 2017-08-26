<div class="tab-pane {{ !empty($tabName) && $tabName == 'raiser' ? 'active' : '' }}" id="raiser">
              <form class="form-horizontal" action="" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">
                  <div class="box-header with-border">
                    <h3 class="box-title">Add New raiser</h3>
                    <p>{{ $error_msg or "" }}</p>
                  </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Raiser Name</label>
                  <div class="col-sm-10">
                    <input type="" class="form-control" id="exampleInputPassword1" placeholder="name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Instansi</label>
                  <div class="col-sm-10">
                    <input type="" class="form-control" id="exampleInputPassword1" placeholder="instansi">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Expertise</label>
                  <div class="col-sm-10">
                    <input type="" class="form-control" id="exampleInputPassword1" placeholder="expertise">
                  </div>
                </div>
                  
                  <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary pull-right">Save</button>
                </div>
              </form>
            </div>