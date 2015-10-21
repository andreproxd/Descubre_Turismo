 
 <div class="menu">
    <br/>
 <style>
	.padding_20{
		padding:15px;
	}
 </style>
 <div class="column_left column col-md-3">
 <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar padding_20">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar ">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url(); ?>Admin_Descubre/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Andre Morillas</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-users"></i> <span>Control de Usuario</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="<?php echo base_url(); ?>index.php/admin/administrador"><i class="fa  fa-user-secret"></i> Administrador</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/admin/cliente"><i class="fa fa-user"></i> Cliente</a></li>
              </ul>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>index.php/admin/lugar">
                 <i class="fa fa-map"></i> <span>Lugares</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>index.php/admin/provincias">
                 <i class="fa-binoculars"></i> <span>Provincias</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>index.php/admin/atractivos">
                <i class="fa fa-suitcase"></i> <span>Atractivos Turisticos</span> 
              </a>
            </li>
            <li class=" active treeview">
              <a href="#">
                <i class="fa fa-navicon"></i>
                <span>Sitios Turisticos</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>index.php/admin/casonas"><i class="fa fa-home"></i> Casonas</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/admin/iglesias"><i class="fa fa-bell"></i> Iglesias</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/admin/museos"><i class="fa fa-institution"></i> Museos</a></li>
              </ul>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>index.php/admin/eventos">
                <i class="fa fa-calendar"></i> <span>Eventos y Festividades</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>index.php/admin/hospedajes">
                <i class="fa fa-hotel"></i> <span>Hospedajes</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>index.php/admin/restaurantes">
                <i class="fa fa-cutlery"></i> <span>Restaurantes</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>index.php/admin/instituciones">
                <i class="fa fa-bank"></i> <span>Instituciones</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>index.php/admin/auth">
                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                <small class="label pull-right bg-yellow">12</small>
              </a>
            </li>
              <li class="header" align="center"><B>REPORTES</B></li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
              <br/>
              <br/>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
       <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>Admin_Descubre/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url(); ?>Admin_Descubre/bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="<?php echo base_url(); ?>Admin_Descubre/plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url(); ?>Admin_Descubre/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url(); ?>Admin_Descubre/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url(); ?>Admin_Descubre/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url(); ?>Admin_Descubre/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>Admin_Descubre/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url(); ?>Admin_Descubre/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url(); ?>Admin_Descubre/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url(); ?>Admin_Descubre/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>Admin_Descubre/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>Admin_Descubre/dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url(); ?>Admin_Descubre/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>Admin_Descubre/dist/js/demo.js"></script>
      </div>
 </div>
