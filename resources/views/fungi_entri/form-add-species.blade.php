<div class="tab-pane {{ !empty($tabName) && $tabName == 'species' ? 'active' : '' }}" id="species">
              <form class="form-horizontal" action="" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">
                  <div class="box-header with-border">
                    <h3 class="box-title">Add New Species</h3>
                    <p>{{ $error_msg or "" }}</p>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Division</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group">
                        <input value='{{ $input["name_divisi"] or ""}}' type="species" class="form-control" id="" name="name_divisi" placeholder="name division">
                        <span class="input-group-btn">
                          <button type="submit" class="btn btn-info btn-flat">Add Division</button>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Class</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group">
                        <input value='{{ $input["name_class"] or ""}}' type="species" class="form-control" id="" name="name_class" placeholder="name class">
                        <span class="input-group-btn">
                          <button type="submit" class="btn btn-info btn-flat">Add Class</button>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Ordo</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group">
                        <input value='{{ $input["name_ordo"] or ""}}' type="species" class="form-control" id="" name="name_ordo" placeholder="name ordo">
                        <span class="input-group-btn">
                          <button type="submit" class="btn btn-info btn-flat">Add Ordo</button>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Family</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group">
                        <input value='{{ $input["name_family"] or ""}}' type="species" class="form-control" id="" name="name_family" placeholder="name family">
                        <span class="input-group-btn">
                          <button type="submit" class="btn btn-info btn-flat">Add Family</button>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Genus</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group">
                        <input value='{{ $input["name_genus"] or ""}}' type="species" class="form-control" id="" name="name_genus" placeholder="name genus">
                        <span class="input-group-btn">
                          <button type="submit" class="btn btn-info btn-flat">Add Genus</button>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Name Species</label>
                    <div class="col-sm-10">
                      <input value='{{ $input["name_species"] or ""}}' type="species" class="form-control" id="" name="name_species" placeholder="name_species">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                      <textarea value='{{ $input["description"] or ""}}' class="form-control" rows="3" name="description" placeholder="description"></textarea>
                    </div>
                  </div> 
                </div>
                  
                  <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary pull-right">Save</button>
                </div>
              </form>
            </div>