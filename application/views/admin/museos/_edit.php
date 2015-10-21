    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?=base_url()?>Admin_Descubre/dist/css/skins/_all-skins.min.css">
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
    </style>
<body>
 <div class="wrapper">
     
<div class="modal fade" role="dialog" id="_museos">
  <div class="modal-dialog modal-lg " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><b>Actualizar Museo</b></h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
        <div class="row  ">
            <div class="col-md-12 ">    
                <form action="<?=base_url()?>admin/museos/save" method="post" class="form-horizonal">
                <fieldset><br/>
            
                     <div class="form-group col-xs-6">
                    <div class="row">
                        <label class="col-xs-5  control-label" for="n">Nombre</label> 
                    </div>
                    <div class="row ">    
                    <div class="col-xs-10">
                        <input id="nombre" name="nombre" type="text" placeholder="" class="form-control input-md"value="">
                    </div>
                    </div>
                    </div>
            
                    <div class="form-group col-xs-6">
                    <div class="row">
                        <label class="col-xs-5  control-label" for="ingreso">Ingreso</label> 
                    </div>
                    <div class="row ">    
                    <div class="col-xs-10">
                        <input id="ingreso" name="ingreso" type="text" placeholder="" class="form-control input-md"value="">
                    </div>
                    </div>
                    </div>
            
                    <div class="form-group col-xs-6">
                    <div class="row">
                        <label class="col-xs-5 control-label" for="precio">Precio</label> 
                    </div>
                    <div class="row ">    
                    <div class="col-xs-10">
                        <input id="precio" name="precio" type="text" placeholder="" class="form-control input-md"value="">
                    </div>
                    </div>
                    </div>

                    <div class="form-group col-xs-6">
                    <div class="row">
                        <label class="col-xs-5 control-label" for="imagen">Imagen</label> 
                    </div>
                    <div class="row">
                    <input id="imagen" class="col-xs-10" name="imagen" type="file">
                    </div>
                    </div> 

                    <div class="form-group col-xs-11">
                    <div class="row">
                        <label class="col-xs-12 text-center  control-label" for="horario">Horario</label>             
                    </div>
                    <div class="row">
                    <div class="col-xs-12">
                        <textarea class="form-control" rows="2" id="horario" name="horario"></textarea>
                    </div>
                    </div>
                    </div>
            
                    <div class="form-group col-xs-11">
                    <div class="row">
                        <label class="col-xs-12 text-center  control-label" for="vias">Vias Acceso</label>             
                    </div>
                    <div class="row">
                    <div class="col-xs-12">
                        <textarea class="form-control" rows="2" id="vias" name="vias"></textarea>
                    </div>
                    </div>
                    </div>

                    <div class="form-group col-xs-12">
                    <div class="row">
                        <label class="col-xs-5 control-label" for="servicios">Servicios Brindados</label>             
                    </div>
                    <div class="row">
                    <div class="col-xs-12 box simple1">

                        <label class="checkbox-inline"><input type="checkbox" value="">Artesania</label>
                         <label class="checkbox-inline"><input type="checkbox" value="">Guiado</label>
                         <label class="checkbox-inline"><input type="checkbox" value="">Seguridad</label>
                         <label class="checkbox-inline"><input type="checkbox" value="">Estacionamiento</label>
                        <label class="checkbox-inline"><input type="checkbox" value="">Material Informativo</label>
                    </div>
                    </div>
                    </div>    
            
                    <div class="form-group col-xs-11">
                    <div class="row">
                        <label class="col-xs-12 text-center  control-label" for="resena">Rese&ntilde;a Hist&oacute;rica</label>             
                    </div>
                    <div class="row">
                    <div class="col-xs-12">
                        <textarea class="form-control" rows="5" id="resena" name="resena"></textarea>
                    </div>
                    </div>
                    </div>  
                     <input type="hidden" name="idmuseos" value="" />
                </fieldset>
                </form>
            </div>
           </div>                
      </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
                    <div class="modal-footer ">
                    <button type="button" class="btn btn-default pull-left col-xs-2" data-dismiss="modal">Cerrar</button>
                    <a href="<?php echo base_url(); ?>index.php/admin/museos/save" class="btn btn-primary  col-xs-3 pull-right">Agregar</a>
                  </div>
    </div><!-- /.modal -->
     </div>
</div>
    <script src="<?=base_url()?>Admin_Descubre/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- FastClick -->
    <script src="<?=base_url()?>Admin_Descubre/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?=base_url()?>Admin_Descubre/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?=base_url()?>Admin_Descubre/dist/js/demo.js"></script>
</body>