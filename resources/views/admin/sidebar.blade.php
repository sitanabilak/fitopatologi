<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          &nbsp;<br/>;&nbsp;
        </div>
        <div class="pull-left info">
          <p>admin's name</p>
          <a href="#"><i class="fa fa-circle text-success"></i> ADMIN</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li {{{ (Request::is('admin') ? 'class=active' : '') }}}><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li {{{ (Request::is('admin-fungi-mng') ? 'class=active' : '') }}}><a href="{{ route('fungi-mng') }}"><i class="fa fa-book"></i> <span>Fungi Management</span></a></li>
        <li {{{ (Request::is('db-mng') ? 'class=active' : '') }}}><a href="{{ route('db-mng') }}"><i class="fa fa-database"></i> <span>Database Management</span></a></li>
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Mildew Database</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li {{{ (Request::is('db-substrat') ? 'class=active' : '') }}}><a href="{{ route('db-mng') }}"><i class="fa fa-circle-o"></i> Add New Substrat</a></li>
            <li><a href="../examples/profile.html"><i class="fa fa-circle-o"></i> Add New Species</a></li>
            <li><a href="../examples/login.html"><i class="fa fa-circle-o"></i> Add New Location</a></li>
            <li><a href="../examples/register.html"><i class="fa fa-circle-o"></i> Add New Isolator</a></li>
            <li><a href="../examples/lockscreen.html"><i class="fa fa-circle-o"></i> Add New Raiser</a></li>
            <li><a href="../examples/404.html"><i class="fa fa-circle-o"></i> Add New Storage</a></li>
            <li><a href="../examples/500.html"><i class="fa fa-circle-o"></i> Add New Updating</a></li>
            <li><a href="../examples/blank.html"><i class="fa fa-circle-o"></i> Add New Photo</a></li>
          </ul>
        </li>  -->       
        <li {{{ (Request::is('admin-user-mng') ? 'class=active' : '') }}}><a href="{{ route('user-mng') }}"><i class="fa fa-users"></i> <span>User Management</span></a></li>
        <li {{{ (Request::is('admin-order-mng') ? 'class=active' : '') }}}><a href="{{ route('order-mng') }}"><i class="fa fa-list-alt"></i> <span>Order Management</span></a></li>
        <li {{{ (Request::is('verificator') ? 'class=active' : '') }}}><a href="{{ route('v-fungi-mng') }}"><i class="fa fa-check"></i> <span>Fungi Verification</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  