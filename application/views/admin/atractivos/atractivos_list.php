<style>
        thead  th {
            text-align: center;
        }
        tbody td{
            text-align: center;

        }
        .resena {
            text-align: justify;
            width: 70%;
        }
        .acciones{
            text-align: center;
            width: 5%;
        }
        tfoot  th {
            text-align: center;
        }
</style>
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
              Atractivos Turisticos</b>
            <small>Mantenedor</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"> Inicio</a></li>
            <li><a href="#"><i class="fa fa-suitcase"></i>Atractivos Turisticos</a></li>
            <li class="active"></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Lista de Atractivos Turisticos</h3>
                </div><!-- /.box-header -->
                <div class="row">
                <div class="col-xs-3 col-xs-offset-3">
                    <a href="<?php echo base_url(); ?>index.php/admin/atractivos/create" class="btn btn-block btn-success btn-flat"><img src="<?php echo base_url(); ?>media/img/icon/admin/addadm2.png" align="left">Nuevo Atractivo</a>
                </div>
                </div>
                <div class="box-body table-responsive">
                  <table id="example1" class=" table-bordered ">
                    <thead>
                      <tr>
                        <th>Atractivo</th>
                        <th>Tipo</th>
                        <th>Horario</th>
                        <th>Rese&ntilde;a Historica</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                            Chan Chan
                        </td>
                        <td >
                            Sitios Arqueologicos
                        </td>
                        <td>
                            Todos los días de 09:00 a.m - 16:00 p.m
                        </td>
                        <td class="resena">
                            Chan Chan se ubica en el valle de Moche, frente al mar, a mitad de camino entre el balneario de Huanchaco y la ciudad de Trujillo. El sitio arqueológico cubre un área aproximada de 20 kilómetros cuadrados, de los cuales se protegen 14 kilómetros. La zona central está formada por un conjunto de 10 recintos amurallados (llamados palacios) y otras pirámides solitarias. Este conjunto central, cubre un área de 6 kilómetros cuadrados, aproximadamente. El resto, está formado por una multitud de pequeñas estructuras conservadas, veredas, canales, murallas y cementerios.
                        </td>
                        <td class="acciones">
                            <a href="" data-toggle="modal" data-target="#_atractivo"<img src="<?php echo base_url(); ?>"/><img src="<?php echo base_url(); ?>media/img/icon/admin/editadm.png"/></a>
                            <a href=""<img src="<?php echo base_url(); ?>"/><img src="<?php echo base_url(); ?>media/img/icon/admin/deleteadm.png"/></a>
                        </td>
                      </tr>

                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Atractivo</th>
                        <th>Tipo</th>
                        <th>Horario</th>
                        <th>Rese&ntilde;a Historica</th>
                        <th></th>
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
 <?php include("application/views/admin/atractivos/_edit.php"); ?>
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
    </div>
  </body>
