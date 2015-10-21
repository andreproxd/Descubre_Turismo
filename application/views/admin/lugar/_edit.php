
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>Admin_Descubre/plugins/daterangepicker/daterangepicker-bs3.css">
 <script>
	function initMap() {
	  // Create a map object and specify the DOM element for display.
	  var map = new google.maps.Map(document.getElementById('map'), {
	    center: {lat: -8.1096556, lng: -79.040387},
	    scrollwheel: false,
	    zoom: 13
	  });
	}
	//initMap();
</script>
    <style>
      .example-modal .modal {
        position: relative;
        top: auto;
        bottom: auto;
        right: auto;
        left: auto;
        display: block;
        z-index: 1;
      }
      .example-modal .modal {
        background: transparent !important;
      }
          .simple1{
        width: 92%;
        height: 100%;
        border-radius: 3px;  
        padding: 5px;
        border-top: 3px solid #d2d6de;
        background: #ffffff;
        margin-bottom: 0;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    }
        .principal {
        width: 94%;
        height: 100%;
        padding: 22px;
        background-color:transparent;
        border: 1px solid #D8D8D8;
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
	//initMap();
</script>
<body>
 <div class="wrapper">
     
<div class="modal fade" role="dialog" id="_lugar">
  <div class="modal-dialog modal-lg " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><b>Actualizar Lugar</b></h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
        <div class="row  ">
 <div class="col-xs-11 col-xs-offset-1">
                    <br/>
        <form action="<?=base_url()?>admin/lugar/save" method="post" class="form-horizonal">
            
                <div class="form-group">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="row">
                         <input type="text" class="form-control" placeholder="Nombre del Lugar (Atractivo, Museo, Iglesia, Casona)">
                    </div>        
                </div>
                </div>
                <br/> <br/> <br/>
            
                <div class="row">
                   <div class="col-xs-8 col-xs-offset-2 ">
                        <div class="" id="map"  style="height:400px;"></div>
                    </div>
                </div>
                       <br/>     
                <div class="row">
                    <div class="dropdown col-xs-3 col-xs-offset-2">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Departamento
                        <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another </a></li>
                        </ul>
                    </div>

                    
                    <div class="dropdown col-xs-3">
                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Provincia
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another </a></li>
                      </ul>
                    </div>

                    
                    <div class="dropdown col-xs-3">
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
                <div class="row box principal">                
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
                                <label class="col-xs-7">Rango de Fecha</label>     
                                </div>
                                <div class="row">
                             <div class="col-xs-9 ">
                                  <div class="input-group">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type="text" class="form-control pull-right" id="reservation">
                                </div>
                                   
                                </div>
                            </div>
                            </div>
                            <div class=" form-group col-xs-5">
                            <div class="row">
                                <label class="col-xs-5 control-label" for="imagen">Telefono</label> 
                            </div>
                            <div class="row padding_15_lef">
                                 <input type="text" class="form-control" class="col-xs-5" placeholder="telefono de contacto">
                            </div>
                            </div>
                            <div class="form-group col-xs-12 ">
                            <div class="row">
                                <label class="col-xs-5 control-label" for="imagen">Imagen</label> 
                            </div>
                            <div class="row">
                                <input id="imagen" class="col-xs-12" name="galeria" type="file">
                            </div>
                            </div>
                          <input type="hidden" name="idlugar" value="" />
                      </div>    
                    </div>
                    </div>
                    </div>
                </form>
           </div>                
      </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
                    <div class="modal-footer ">
                    <button type="button" class="btn btn-default pull-left col-xs-2" data-dismiss="modal">Cerrar</button>
                    <a href="<?php echo base_url(); ?>index.php/admin/lugar/save" class="btn btn-primary  col-xs-3 pull-right">Agregar</a>
                  </div>
          
    </div><!-- /.modal -->
     </div>
</div>
                 <script src="<?php echo base_url(); ?>Admin_Descubre/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url(); ?>Admin_Descubre/bootstrap/js/bootstrap.js"></script>

    <!-- InputMask -->
    <script src="<?php echo base_url(); ?>Admin_Descubre/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="<?php echo base_url(); ?>Admin_Descubre/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="<?php echo base_url(); ?>Admin_Descubre/plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>Admin_Descubre/plugins/daterangepicker/daterangepicker.js"></script>

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