<div class="tab-pane {{ !empty($tabName) && $tabName == 'location' ? 'active' : '' }}" id="location">
              <form class="form-horizontal" action="" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">
                  <div class="box-header with-border">
                    <h3 class="box-title">Add New Location</h3>
                    <p>{{ $error_msg or "" }}</p>
                  </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Latitude</label>
                  <div class="col-sm-10">
                    <input type="" class="form-control" id="exampleInputPassword1" placeholder="latitude">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Longitude</label>
                  <div class="col-sm-10">
                    <input type="" class="form-control" id="exampleInputPassword1" placeholder="longitude">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Atitude</label>
                  <div class="col-sm-10">
                    <input type="" class="form-control" id="exampleInputPassword1" placeholder="atitude">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">District</label>
                  <div class="col-sm-10">
                    <input type="" class="form-control" id="exampleInputPassword1" placeholder="district">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">City</label>
                  <div class="col-sm-10">
                    <input type="" class="form-control" id="exampleInputPassword1" placeholder="city">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Province</label>
                  <div class="col-sm-10">
                    <input type="" class="form-control" id="exampleInputPassword1" placeholder="province">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">State</label>
                  <div class="col-sm-10">
                    <input type="" class="form-control" id="exampleInputPassword1" placeholder="state">
                  </div>
                </div>
                  
                  <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary pull-right">Save</button>
                </div>
              </form>
            </div>