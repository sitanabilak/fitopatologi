<div class="box-header with-border">
                    <h3 class="box-title">Add New raiser</h3>
                    <p>{{ $error_msg or "" }}</p>
                  </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Raiser Name</label>
                  <div class="col-sm-8">
                    <input value='{{ $input["name_raiser"] or ""}}' type="" class="form-control" id="" name="name_raiser" placeholder="name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Instansi</label>
                  <div class="col-sm-8">
                    <input value='{{ $input["instansi_raiser"] or ""}}' type="" class="form-control" id="" name="instansi_raiser" placeholder="instansi">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Expertise</label>
                  <div class="col-sm-8">
                    <input value='{{ $input["expertise_raiser"] or ""}}' type="" class="form-control" id="" name="expertise_raiser" placeholder="expertise">
                  </div>
                </div>