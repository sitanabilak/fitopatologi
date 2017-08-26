@include('header')
  @include('admin/header')
  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  @include('verificator/sidebar')

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-bottom:20px">
      <h1>
        Fungi Collections
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('v-fungi-mng') }}"><i class=""></i>Fungi Management</a></li>
        <li><a href="#">View</a></li>
        <!-- <li class="active">Fixed</li> -->
      </ol>
    </section>

    <section>
      <div class="row">
        <div class="box box-default" style="padding:10px;padding-right:30px;padding-left:30px;">
          <div class="box-header">
            <h3 class="box-title"><i>Acremonium strictum</i></h3>
          </div>
              <div class="col-sm-6">
                <div class="box box-solid">
                  <div class="box-body">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="item active">
                          <img src="https://c1.staticflickr.com/9/8370/8390977467_2e9994958f_b.jpg" alt="Micrograph">

                          <div class="carousel-caption">
                            Micrograph
                          </div>
                        </div>
                        <div class="item">
                          <img src="http://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Bootstrap" alt="Second slide">

                          <div class="carousel-caption">
                            Second Slide
                          </div>
                        </div>
                        <div class="item">
                          <img src="http://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap" alt="Third slide">

                          <div class="carousel-caption">
                            Third Slide
                          </div>
                        </div>
                      </div>
                      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="fa fa-angle-left"></span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="fa fa-angle-right"></span>
                      </a>
                    </div>
                  </div>
                </div>
                </div>
                <div class="box-body pad table-responsive">
                <div class="box box-solid">
                  <!-- /.box-header -->
                  <div class="box-body">
                    <div class="box-group" id="accordion">
                      <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                      <div class="panel box box-default">
                        <div class="box-header with-border">
                          <h5 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                              Species
                            </a>
                          </h5>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" style="padding-left:20px;">
                          <div class="box-body">
                            <h5 class="box-title">
                              <i><p class="text-muted">Species Name:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;"><i>Acremonium strictum</i></h4>
                            <h5 class="box-title">
                              <i><p class="text-muted">Genus:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">Asdf</h4>
                            <h5 class="box-title">
                              <i><p class="text-muted">Family:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">Asdf</h4>
                            <h5 class="box-title">
                              <i><p class="text-muted">Ordo:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">Asdf</h4>
                            <h5 class="box-title">
                              <i><p class="text-muted">Class:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">Asdf</h4>
                            <h5 class="box-title">
                              <i><p class="text-muted">Division:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">Asdf</h4>
                          </div>
                        </div>
                      </div>
                      <div class="panel box box-default">
                        <div class="box-header with-border">
                          <h5 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                              Substrat
                            </a>
                          </h5>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse in" style="padding-left:20px;">
                          <div class="box-body">
                            <h5 class="box-title">
                              <i><p class="text-muted">Substrat Name:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">Banana</h4>
                            <h5 class="box-title">
                              <i><p class="text-muted">Ecology:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">Asdf</h4>
                            <h5 class="box-title">
                              <i><p class="text-muted">Biology:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">Asdf</h4>
                            <h5 class="box-title">
                              <i><p class="text-muted">Physiology:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">Asdf</h4>
                            <h5 class="box-title">
                              <i><p class="text-muted">Mycotoxin:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">Asdf</h4>
                          </div>
                        </div>
                      </div>
                      <div class="panel box box-default">
                        <div class="box-header with-border">
                          <h5 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                              Location
                            </a>
                          </h5>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse in" style="padding-left:20px;">
                          <div class="box-body">
                            <h5 class="box-title">
                              <i><p class="text-muted">District:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">Asdf</h4>
                            <h5 class="box-title">
                              <i><p class="text-muted">city:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">Bogor</h4>
                            <h5 class="box-title">
                              <i><p class="text-muted">Province:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">West Java</h4>
                            <h5 class="box-title">
                              <i><p class="text-muted">State:</p></i>
                            </h5>
                              <h4 style="padding-left:30px;">Indonesia</h4>
                          </div>
                        </div>
                      </div>
                      <div class="panel box box-default">
                        <div class="box-header with-border">
                          <h5 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                              Isolator
                            </a>
                          </h5>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse in" style="padding-left:20px;">
                          <div class="box-body">
                              <h4 style="padding-left:30px;">Varin</h4>
                          </div>
                        </div>
                      </div>
                      <div class="panel box box-default">
                        <div class="box-header with-border">
                          <h5 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                              Raiser
                            </a>
                          </h5>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse in" style="padding-left:20px;">
                          <div class="box-body">
                              <h4 style="padding-left:30px;">Nijma</h4>
                          </div>
                        </div>
                      </div>
                      <div class="panel box box-default">
                        <div class="box-header with-border">
                          <h5 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                              Updating
                            </a>
                          </h5>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse in" style="padding-left:20px;">
                          <div class="box-body">
                              <h4 style="padding-left:30px;">24 Feb 2015</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <button type="" class="btn bg-olive btn-flat pull-right" style="margin-right:30px;" href="">Verified and Publish</button>
                <button type="" class="btn btn-default btn-flat pull-right" style="margin-right:30px;" href="">Comment</button>
            </div>
      </div>
    </section>

  </div>
  <!-- /.content-wrapper -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->

<!-- ./wrapper -->

  @include('footer')
