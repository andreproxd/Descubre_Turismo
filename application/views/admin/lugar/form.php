
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>Admin_Descubre/plugins/daterangepicker/daterangepicker-bs3.css">
<style>
    .padding_50{
        padding-bottom:50px;
    }
    
    .box {
        width: 94%;
        height: 100%;
        padding: 22px;
        background-color:transparent;
        border: 1px solid #D8D8D8;
    }
    .padding_50_lef{
        padding-left: 50px;
    }
    .padding_30_lef{
        padding-left: 30px;
    }
    .padding_20_lef{
        padding-left: 20px;
    }
    .padding_15_lef{
        padding-left: 15px;
    }
</style> 
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLm_X5x_zbACcAykuxaGop8DI8vS5I6_Y&callback=initMap"> </script> 
    <!-- daterange picker -->

 <script>
	function initMap() {
	  // Create a map object and specify the DOM element for display.
	  var map = new google.maps.Map(document.getElementById('map'), {
	    center: {lat: -8.1096556, lng: -79.040387},
	    scrollwheel: false,
	    zoom: 13
	  });
	}
	initMap();
</script>
   <body class="hold-transition skin-blue sidebar-mini">
    <div class="col-md-12 ">
    <div class="wrapper">
      <div class="content-wrapper">
        <section class="content-header">
          <h1><b>
            Lugares</b>
            <small>Mantenedor</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><a href="fa-binoculars"><i class="fa fa-map"></i>Lugares</a></li>
            <li class="active"></li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
            <div class="row">
                    <br/>
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="row">
                         <input type="text" class="form-control" placeholder="Nombre del Lugar (Atractivo, Museo, Iglesia, Casona)">
                    </div>         <br/>
                </div>
       
                <div class="row">
                   <div class="col-xs-8 col-xs-offset-2 ">
                        <div class="" id="map"  style="height:400px;"></div>
                    </div>
                </div>
                    <br/>
                <div class="row">
                    <div class="dropdown col-xs-2 col-xs-offset-3">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Departamento
                        <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another </a></li>
                        </ul>
                    </div>
                
                    <div class="dropdown col-xs-2">
                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Provincia
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another </a></li>
                      </ul>
                    </div>

                    <div class="dropdown col-xs-2">
                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Distrito
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another </a></li>
                      </ul>
                    </div>
                    </div>
                
                     <input type="hidden" class="form-control lat" placeholder="lat">
                     <input type="hidden" class="form-control lon" placeholder="long">
                       
                    <h4 class="col-xs-offset-2">Informaci&oacute;n</h4>

                <div class="col-xs-9 col-xs-offset-2">
                <div class="row box">                
                  <div class="col-md-12"> 
                    <div class="row">
                        
                        <div class="form-group col-xs-6">
                            <div class="row">
                                <label class="col-xs-3">Tipo</label>
                            </div>
                              <div class="row">
                                <div class="dropdown col-xs-4">
                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Seleccionar
                                    <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Atractivos</a></li>
                                    <li><a href="#"></a>Museos</li>
                                    <li><a href="#"></a>Iglesias</li>
                                    <li><a href="#"></a>Casonas</li>
                                    <li><a href="#"></a>Restaurantes</li>
                                    <li><a href="#"></a>Hospedajes</li>
                                    <li><a href="#"></a>Eventos y Festividades</li>
                                    <li><a href="#"></a>Instituciones</li>
                                  </ul>
                                </div>
                              </div>
                          </div>
                            <div class="form-group col-xs-6 ">
                            <div class="row">
                                <label class="col-xs-3">SubTipo</label>
                            </div>
                               <div class="row">
                                <div class="dropdown col-xs-3">
                                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Selecionar
                                    <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Sitios Arqueologicos</a></li>
                                    <li><a href="#">Arquitectura y Edificaciones</a></li>
                                    <li><a href="#">Recursos Naturales</a></li>
                                  </ul>
                                </div>
                            </div>
                            </div>
                        
                            <div class="form-group col-xs-6">
                            <div class="row">
                                <label class="col-xs-10">Rango de Fecha</label>     
                                </div>
                                <div class="row">
                             <div class="col-xs-8 ">
                                  <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type="text" class="form-control pull-right" id="reservation">
                                </div>
                                   
                                </div>
                            </div>
                            </div>
      
                            <div class=" form-group col-xs-4">
                            <div class="row">
                                <label class="col-xs-5 control-label" for="imagen">Telefono</label> 
                            </div>
                            <div class="row padding_15_lef">
                                 <input type="text" class="form-control" class="col-xs-3" placeholder="telefono de contacto">
                            </div>
                            </div>
                            <div class="form-group col-xs-6 ">
                            <div class="row">
                                <label class="col-xs-8 control-label" for="imagen">Imagen</label> 
                            </div>
                            <div class="row">
                                <input id="imagen" class="col-xs-12" name="galeria" type="file">
                            </div>
                            </div>
                          <input type="hidden" name="idlugar" value="" />
                      </div>    
                    </div>
                    </div>
                    </div><br/>
                        <div class="col-xs-4 col-xs-offset-2">
                            <div class="row">
                            <a href="<?php echo base_url(); ?>index.php/admin/lugar/save" class="btn btn-block btn-success btn-flat">Agregar</a>  
                            </div>
                        </div>
                        <div class="col-xs-3 col-xs-offset-1">
                            <div class="row">
                            <a href="<?php echo base_url(); ?>index.php/admin/lugar" class="btn btn-block btn-danger btn-flat">Cancelar</a>  
                            </div>
                        </div>
                </div>
                </div>
              </div>
          </section>
        </div>
              <footer class="main-footer">
        <strong>Copyright &copy; 2015 <a href="http://descubre.descubrelalibertad.com">Descubre La Libertad</a>.</strong>Todos los derechos reservados.
      </footer>
        
          <script src="<?php echo base_url(); ?>Admin_Descubre/plugins/jQuery/jQuery-2.1.4.min.js"></script>


    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>Admin_Descubre/plugins/daterangepicker/daterangepicker.js"></script>


    <!-- Select2 -->
            <script>
      $(function () {
        //Initialize Select2 Elements

        //Date range picker
        $('#reservation').daterangepicker();

        });

    </script>
    </div>
    </div>
  </body>