            <div class="tab-pane {{ !empty($tabName) && $tabName == 'substrat' ? 'active' : '' }}" id="substrat">
              <form class="form-horizontal" action="" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">
                  <div class="box-header with-border">
                    <h3 class="box-title">Add New Substrat</h3>
                    <p>{{ $error_msg or "" }}</p>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Substrat Name</label>
                    <div class="col-sm-10">
                      <input value='{{ $input["name_substrat"] or ""}}' type="substrat" class="form-control" id="" name="name_substrat" placeholder="name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Ecology</label>
                    <div class="col-sm-10">
                      <input value='{{ $input["ecology"] or ""}}' type="substrat" class="form-control" id="" name="ecology" placeholder="ecology">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Biology</label>
                    <div class="col-sm-10">
                      <input value='{{ $input["biology"] or ""}}' type="substrat" class="form-control" id="" name="biology" placeholder="biology">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Physiolgy</label>
                    <div class="col-sm-10">
                      <input value='{{ $input["physiology"] or ""}}' type="substrat" class="form-control" id="" name="physiology" placeholder="physiology">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Mycotoxin</label>
                    <div class="col-sm-10">
                      <input value='{{ $input["mycotoxin"] or ""}}' type="substrat" class="form-control" id="" name="mycotoxin" placeholder="mycotoxin">
                    </div>
                  </div>
                </div>
                  
                  <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary pull-right">Save</button>
                </div>
              </form>
              
            </div>