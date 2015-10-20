
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
                    <a href="<?php echo base_url(); ?>admin/lugar/create" class="btn btn-block btn-success btn-flat"><img src="<?php echo base_url(); ?>media/img/icon/admin/addadm2.png" align="left">Nuevo Atractivo</a>    
                </div>
                </div>
                <div class="box-body table-responsive">
                  <table id="example1" class=" table-bordered ">
                    <thead>
                      <tr>
                        <th>Atractivo</th>
                        <th>Tipo</th>
                        <th class="tipo">Serivicio Brindado</th>
                        <th>Vias de Acceso</th>
                        <th>Transporte</th>
                        <th>Horario</th>
                        <th>Ingreso</th>
                        <th>Estacionalidad</th>
                        <th>Estado</th>
                        <th>Direccion</th>
                        <th>Precio</th>
                        <th>Recomendaciones</th>
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
                            Chan Chan
                        </td>
                        <td >
                            Sitios Arqueologicos
                        </td>
                        <td>
                        - Estacionamiento
                        - Servicio de Guiado
                        - Servicios Higiénicos
                        - Venta de Artesanía
                        - Venta de Material Informativo(libros, revistas, postales, videos, etc)
                        - Venta de Material para Fotografía
                        </td>
                        <td>
                        Desde la Plaza de Armas de Trujillo - Atractivo turístico a 4.5 km en 15 min aproximadamente.
                        </td>
                        <td>
                        - Automóvil Particular
                        - Bus Turístico
                        - Taxi 
                        </td>
                        <td>
                        Todos los días de 09:00 a.m - 16:00 p.m
                        </td>
                        <td>
                            Adultos: S/.10.00, Estudiantes: S/5.00 y Niños: S/1.00
                        </td>
                        <td>
                            Todo el A&ntilde;o
                        </td>
                        <td>
                            Bueno
                        </td>
                        <td>
                            Jr. Torre Tagle 178
                        </td>
                        <td>
                            S/ 10.00
                        </td>
                        <td>
                            Usar ropa deportiva para el recorrido, así como también lentes, gorra, bloqueador y agua.
                        </td>
                        <td>
                            Chan Chan se ubica en el valle de Moche, frente al mar, a mitad de camino entre el balneario de Huanchaco y la ciudad de Trujillo. El sitio arqueológico cubre un área aproximada de 20 kilómetros cuadrados, de los cuales se protegen 14 kilómetros. La zona central está formada por un conjunto de 10 recintos amurallados (llamados palacios) y otras pirámides solitarias. Este conjunto central, cubre un área de 6 kilómetros cuadrados, aproximadamente. El resto, está formado por una multitud de pequeñas estructuras conservadas, veredas, canales, murallas y cementerios.

                        </td>
                        <td>
                            La Libertad
                        </td>
                        <td>
                            Trujillo
                        </td>
                        <td>
                            Huanchaco
                        </td>
                        <td>
                            /src/img/1
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
                        <th>Atractivo</th>
                        <th>Tipo</th>
                        <th>Serivicio Brindado</th>
                        <th>Transporte</th>
                        <th>Horario</th>
                        <th>Ingreso</th>
                        <th>Estacionalidad</th>
                        <th>Estado</th>
                        <th>Direcci&oacute;n</th>
                        <th>Precio</th>
                        <th>Recomendaciones</th>
                        <th>Rese&ntilde;a Hist&oaccute;rica</th>
                        <th>Departamento</th>
                        <th>Provincia</th>
                        <th>Distrito</th>
                        <th>Imagen</th>
                        <th>Activo</th>
                        <th>Acciones</th>
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
  