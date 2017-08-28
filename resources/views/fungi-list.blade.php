<div id="content">
  <div class="box box-success" style="padding-left:100px;padding-right:100px;">
	 <h3 class="box-title text-success">Fungi Collections</h3>
    <div class="collection-index" style="padding-left:50px;padding-right:50px;">
  	<div class="box-header">
  		<h4 class="number"><em>Number of species:</em> <span>{{ (count($isolat_cendawan)) }}</span></h4>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div> 
      <div class="row">
        <div class="col-xs-12 table-responsive alphabet">
          <table class="table table-striped">
            <thead>
            	<tr>
            		<th><h3><b>A</b></h3></th>
            	</tr>
            </thead>
            <tbody>
            <?php 
              foreach ($isolat_cendawan as $i => $fungi) { ?>
            	<?php if ($i%3 ==0) echo '<tr>'; ?>
            		<td><a class="lead" href="{{ route('fungi-detail') }}?id={{$fungi->id_cendawan}}"><i><?= $fungi->name_cendawan ?></i></a></td>
            	<?php if ($i%3 ==2) echo '</tr>'; ?>
            <?php } ?>     
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
			</div>
		</div>
</div>