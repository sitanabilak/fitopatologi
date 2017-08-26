<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-success" style="padding-left:150px;padding-right:200px;padding-top:10px;">
        <form class="form-horizontal" action="" method="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="box-body">
            <div class="box-header with-border">
              <h3 class="box-title">Add New Fungi Collection</h3>
              <p>{{ $error_msg or "" }}</p>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Isolate Code</label>
              <div class="col-sm-8">
                <input value='{{ $input["name_isolator"] or ""}}' type="" class="form-control" id="" name="code_cendawan" placeholder="Code">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Name Species</label>
              <div class="col-sm-8">
                <select class="species" style="width: 430px ;  height:34px" id="id_species" name="id_species" action="{{ route('add-prov') }}" value="{{ old('id_species') }}" autofocus>
                      <option value="0" disabled="true" selected="true">--Choouse a Species--</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Quantity</label>
              <div class="col-sm-8">
                <input value='{{ $input["instansi_isolator"] or ""}}' type="" class="form-control" id="" name="quantity_cendawan" placeholder="Quantity">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Label</label>
              <div class="col-sm-8">
                <input value='{{ $input["instansi_isolator"] or ""}}' type="" class="form-control" id="" name="label_cendawan" placeholder="Label">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Origin of the substrate</label>
              <div class="col-sm-8">
                <select class="location" style="width: 430px ;  height:34px" id="id_location" name="id_location" action="{{ route('add-prov') }}" value="{{ old('id_location') }}" autofocus>
                      <option value="0" disabled="true" selected="true">--Choouse a Location--</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Utilization</label>
              <div class="col-sm-8">
                <!-- <div class="box-body pad" style="margin-left: 30px;"> -->
                  <form>
                    <textarea id="editor1" name="editor1" rows="10" cols="80">
                                            
                    </textarea>
                  </form>
                <!-- </div> -->
              </div>
            </div>

            <div class="box-header with-border">
              <h3 class="box-title">Add Photo</h3>
              <p>{{ $error_msg or "" }}</p>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Biakan</label>
              <div class="col-sm-8">
                <input value='{{ $input["name_isolator"] or ""}}' type="" class="form-control" id="" name="name_isolator" placeholder="name">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Micrograph</label>
              <div class="col-sm-8">
                <input value='{{ $input["instansi_isolator"] or ""}}' type="" class="form-control" id="" name="instansi_isolator" placeholder="instansi">
              </div>
            </div>

            <div class="box-header with-border">
              <h3 class="box-title">Storage</h3>
              <p>{{ $error_msg or "" }}</p>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Tube Number</label>
              <div class="col-sm-8">
                <input value='{{ $input["no_tube"] or ""}}' type="" class="form-control" id="" name="no_tube" placeholder="no tube">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Rack</label>
              <div class="col-sm-8">
                <input value='{{ $input["rack"] or ""}}' type="" class="form-control" id="" name="rack" placeholder="rack">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Isolator</label>
              <div class="col-sm-8">
                <select class="isolator" style="width: 430px ;  height:34px" id="id_isolator" name="id_isolator" action="{{ route('add-prov') }}" value="{{ old('id_isolator') }}" autofocus>
                      <option value="0" disabled="true" selected="true">--Choouse a Isolator--</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Raiser</label>
              <div class="col-sm-8">
                <select class="raiser" style="width: 430px ;  height:34px" id="id_raiser" name="id_raiser" action="{{ route('add-prov') }}" value="{{ old('id_raiser') }}" autofocus>
                      <option value="0" disabled="true" selected="true">--Choouse a Raiser--</option>
                </select>
              </div>
            </div>
                  
            <!-- <div class="box-footer">
              <button type="submit" class="btn btn-primary pull-right">Save</button>
            </div> -->

            <div role="tabpanel" class="tab-pane" id="updating">
              <form class="form-horizontal" action="" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">
                  <div class="box-header with-border">
                    <h3 class="box-title">Updating</h3>
                    <p>{{ $error_msg or "" }}</p>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-3 control-label">First Update</label>
                    <div class="col-xs-5">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input value='{{ $input[""] or ""}}' type="text" class="form-control pull-right" name="" id="datepicker">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Second Update</label>
                    <div class="col-xs-5">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input value='{{ $input[""] or ""}}' type="text" class="form-control pull-right" name="" id="datepicker">
                      </div>
                    </div>
                  </div>
                  
                  <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary pull-right">Save</button>
                </div>
                </div>
              </form>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){

                $(document).on('change','.species',function(){
                    console.log("hmm its change");

                    var id_species=$(this).val();
                    console.log(id_species);
                    var div=$(this).parent();

                    // var op=" ";

                    //  $.ajax({
                    //     type:'get',
                    //     url:'{!!URL::to('/add-prov')!!}',
                    //     data:{'id':state_id},
                    //     console.log(state_id);
                    //     success:function(data){
                    //         console.log('success');

                    //         console.log(data);
                    //        op+='<option value="0" selected="disabled">--Choose a Province--</option>';
                    //         for(var i=0;i<data.length;i++){
                    //             op+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
                    //         }
                    //         div.find('.prov').html(" ");
                    //         div.find('.prov').append(op);
                    //     },
                    //     error:function(){

                    //     }
                    //  });
                });
            });
        </script>
</section>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>