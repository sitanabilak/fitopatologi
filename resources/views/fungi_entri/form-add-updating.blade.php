<div class="box-header with-border">
                    <h3 class="box-title">Updating</h3>
                    <p>{{ $error_msg or "" }}</p>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Update</label>
                    <div class="col-xs-5">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input value='{{ $input[""] or ""}}' type="text" class="form-control pull-right" name="datepicker" id="datepicker">
                      </div>
                    </div>
                  </div>
                  