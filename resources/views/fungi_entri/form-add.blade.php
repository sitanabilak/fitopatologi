<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-success" style="padding-left:100px;padding-right:150px;padding-top:10px;">
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
                <input value='{{ $input["code_cendawan"] or ""}}' type="" class="form-control" id="" name="code_cendawan" placeholder="Code">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Name Isolate</label>
              <div class="col-sm-8">
                <input value='{{ $input["name_cendawan"] or ""}}' type="" class="form-control" id="" name="name_cendawan" placeholder="Name">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Quantity</label>
              <div class="col-sm-8">
                <input value='{{ $input["quantity_cendawan"] or ""}}' type="" class="form-control" id="" name="quantity_cendawan" placeholder="Quantity">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Label</label>
              <div class="col-sm-8">
                <input value='{{ $input["label_cendawan"] or ""}}' type="" class="form-control" id="" name="label_cendawan" placeholder="Label">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Utilization</label>
              <div class="col-sm-8">
                <!-- <div class="box-body pad" style="margin-left: 30px;"> -->
                  <form>
                    <textarea id="editor1" name="utilization" rows="10" cols="80">{{$input["utilization"] or ""}}</textarea>
                  </form>
                <!-- </div> -->
              </div>
            </div>

            @include('fungi_entri/form-add-location')
            @include('fungi_entri/form-add-substrat')
            @include('fungi_entri/form-add-species')
            @include('fungi_entri/form-add-isolator')
            @include('fungi_entri/form-add-raiser')
            @include('fungi_entri/form-add-storage')
            @include('fungi_entri/form-add-photo')
            @include('fungi_entri/form-add-updating')


            <div class="box-footer">
              <button type="submit" class="btn btn-primary pull-right">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript">

  var get_division= function(){

    op="";

     $.ajax({
        type:'get',
        url:'{!!URL::to('/add-divisi')!!}',
        data:{},
        success:function(data){
            console.log('success');

            console.log(data);
           op+='<option value="0" selected="disabled">--Choose a Division--</option>';
            for(var i=0;i<data.length;i++){
                op+='<option value="'+data[i].id_divisi+'">'+data[i].name_divisi+'</option>';
            }
            $('.divisi').html(" ");
            $('.divisi').append(op);
        },
        error:function(){

        }
     });
  }


            $(document).ready(function(){


              get_division();

                $(document).on('change','.divisi',function(){
                    console.log("hmm its change");

                    var id=$(this).val();
                    console.log(id);
                    var div=$(this).parent();

                    var op=" ";

                     $.ajax({
                        type:'get',
                        url:'{!!URL::to('/add-findclass')!!}',
                        data:{'id':id},
                        success:function(data){
                            console.log('success');

                            console.log(data);
                           op+='<option value="0" selected="disabled">--Choose a Province--</option>';
                            for(var i=0;i<data.length;i++){
                                op+='<option value="'+data[i].id_class+'">'+data[i].name_class+'</option>';
                            }
                            $('.class').html(" ");
                            $('.class').append(op);
                        },
                        error:function(){

                        }
                     }); 
                });
            });
  </script>
  <script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
  </script>
@include('select')
</section>
