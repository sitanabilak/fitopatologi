    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box box-success" style="padding:20px;padding-bottom:20px;">
        <div class="box-header" style="padding-bottom:30px;">
          <h3 class="box-title">Fungi List</h3>
        <div class="box-tools">
          <ul class="nav navbar-nav">
            <li><a type="submit" class="btn btn-default" href="{{ route('fungi-add') }}" style="margin-right:20px;">Add New Collection</a></li>
            <li><div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div></li>
            <ul/>
          </div>
        </div>
        <div class="box-body table-responsive" style="padding-right:30px;padding-left:30px;">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>No</th>
              <th>Code</th>
              <th>Name</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              <?php $i = 0 ?>
              @foreach($isolat_cendawan as $key => $isolat)
              <?php $i++ ?>
              <tr>
                <td>{{ $i }}</td>
                <td>{{ $isolat->code_cendawan }}</td>
                <td><i>{{ $isolat->name_cendawan }}</i></td>
                <td>
                  <a type="submit" class="btn btn-sm btn-info" href="{{ route('fungi-view') }}?id={{$isolat->id_cendawan}}">View</a>
                  <a type="submit" class="btn btn-sm btn-primary" href="{{ route('fungi-edit') }}">Edit</a>
                  <a type="submit" class="btn btn-sm btn-danger" href="#">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.box-footer-->

      <!-- /.box -->
      
    </section>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>