<div class="tab-pane {{ !empty($tabName) && $tabName == 'photo' ? 'active' : '' }}" id="photo">
              <form class="form-horizontal" action="" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">
                  <div class="box-header with-border">
                    <h3 class="box-title">Add New Link Photo</h3>
                    <p>{{ $error_msg or "" }}</p>
                  </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Biakan</label>
                  <div class="col-sm-10">
                    <input value='{{ $input["name_isolator"] or ""}}' type="" class="form-control" id="exampleInputPassword1" name="name_isolator" placeholder="name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Micrograph</label>
                  <div class="col-sm-10">
                    <input value='{{ $input["instansi_isolator"] or ""}}' type="" class="form-control" id="exampleInputPassword1" name="instansi_isolator" placeholder="instansi">
                  </div>
                </div>
                  
                  <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary pull-right">Save</button>
                </div>
              </form>
            </div>