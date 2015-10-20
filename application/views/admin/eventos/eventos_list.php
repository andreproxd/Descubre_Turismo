    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>Admin_Descubre/plugins/datatables/dataTables.bootstrap.css">
  <body class="hold-transition skin-blue sidebar-mini">
       <div class="col-md-12 ">
    <div class="wrapper">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1><b>
              Eventos</b>
            <small>Mantenedor</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"> Inicio</a></li>
            <li><a href="#"><i class="fa fa-calendar"></i>Eventos</a></li>
            <li class="active"></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
             
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Lista de Eventos</h3>
                </div><!-- /.box-header -->
                <div class="row">
                <div class="col-xs-3 col-xs-offset-2">
                    <a href="<?php echo base_url(); ?>" class="btn btn-block btn-success btn-flat"><img src="<?php echo base_url(); ?>media/img/icon/admin/addadm2.png" align="left">Nuevo Evento</a>    
                </div>
                </div>
                <div class="box-body table-responsive">
                  <table id="example1" class=" table-bordered ">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Sub Tipo</th>
                        <th>Vias de Acceso</th>
                        <th>Ingreso</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Fin</th>
                        <th>Caracteristicas</th>
                        <th>Precio</th>
                        <th>Rese&ntilde;a Historica</th>
                        <th>Departamento</th>
                        <th>Provincia</th>
                        <th>Distrito</th>
                        <th>Imagen</th>
                        <th>Activo</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                            Concurso Nacional de Marinera
                        </td>
                        <td>
                            Culturales
                        </td>
                        <td>
                            Asfalto
                        </td>
                        <td>
                            Libre
                        </td>
                        <td>
                            15/06/15
                        </td>
                        <td>
                            31/06/15
                        </td>
                        <td>
                            Evento turístico, artístico y socio cultural
                        </td>
                        <td>
                            S/. 0.00
                        </td>
                        <td>
                            La ciudad de Trujillo se viste de gala todos los años al final del mes de enero para celebrar un festival consagrado al baile de cortejo nacional peruano: la marinera. Trujillo, capital del departamento de La libertad, en donde se premian a los mejores bailarines de las distintas formas de marinera existentes en el Perú (norteña o trujillana, limeña o criolla y puneña o serrana). La evaluación de las parejas considera aspectos como el aplomo, la personalidad, el salero, la picardía, la coquetería, la coordinación, la habilidad, el zapateo, el desplazamiento, el ritmo y el compás. tradicional concurso organizado por el Club Libertad y cuya final se realiza en el coliseo Gran Chimú.
                        </td>
                        <td>
                            La Libertad
                        </td>
                        <td>
                            Trujillo
                        </td>
                        <td>
                            Trujillo
                        </td>
                        <td>
                            /img/
                        </td>
                        <td>
                            1
                        </td>
                        <td>
                            <a href<img src="<?php echo base_url(); ?>"/><img src="<?php echo base_url(); ?>media/img/icon/admin/editadm.png"/></a>
                            <a href<img src="<?php echo base_url(); ?>"/><img src="<?php echo base_url(); ?>media/img/icon/admin/deleteadm.png"/></a>
                        </td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Nombre</th>
                        <th>Sub Tipo</th>
                        <th>Vias de Acceso</th>
                        <th>Ingreso</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Fin</th>
                        <th>Caracteristicas</th>
                        <th>Precio</th>
                        <th>Rese&ntilde;a Historica</th>
                        <th>Departamento</th>
                        <th>Provincia</th>
                        <th>Distrito</th>
                        <th>Imagen</th>
                        <th>Activo</th>
                        <th>Acciones</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <strong>Copyright &copy; 2015 <a href="http://descubre.descubrelalibertad.com">Descubre La Libertad</a>.</strong>Todos los derechos reservados.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>Admin_Descubre/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url(); ?>Admin_Descubre/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url(); ?>Admin_Descubre/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>Admin_Descubre/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url(); ?>Admin_Descubre/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>Admin_Descubre/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>Admin_Descubre/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>Admin_Descubre/dist/js/demo.js"></script>
    <!-- page script -->
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
  </body>
            </div>
  