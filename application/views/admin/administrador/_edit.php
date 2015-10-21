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
    </style>
<body>
 <div class="wrapper">
     
<div class="modal fade" role="dialog" id="_administrador">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><b>Actualizar Administrador</b></h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
	       <div class="row ">
             <div class="col-xs-11 col-xs-offset-1">
                <form action="<?=base_url()?>admin/administrador/save" method="post" class="form-horizonal">
        <fieldset><br/>
                    <div class="form-group">
                    <div class="row">
                        <label class="col-xs-4 col-xs-offset-2 text-center control-label" for="correo">Correo</label> 
                    </div>
                    <div class="row ">    
                    <div class="col-xs-6 col-xs-offset-2">
                        <input id="correo" name="correo" type="text" placeholder="" class="form-control input-md"value="">
                    </div>
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <div class="row">
                        <label class="col-xs-4 col-xs-offset-2 text-center control-label" for="password">Password</label> 
                    </div>
                    <div class="row ">    
                    <div class="col-xs-6 col-xs-offset-2">
                        <input id="password" name="password" type="text" placeholder="" class="form-control input-md"value="">
                    </div>
                    </div>
                    </div>
            
                    <div class="form-group">
                    <div class="row">
                        <label class="col-xs-4 col-xs-offset-2 text-center control-label" for="password1">Repetir Password</label> 
                    </div>
                    <div class="row ">    
                    <div class="col-xs-6 col-xs-offset-2">
                        <input id="password1" name="password1" type="text" placeholder="" class="form-control input-md"value="">
                    </div>
                    </div> 
                    </div>
                    
                    <div class="form-group">
                    <div class="row">
                        <label class="col-xs-4 col-xs-offset-2 text-center control-label" for="imagen">Imagen</label> 
                    </div>
                    <div class="row"> 
                    <div class="form-group col-xs-10 col-xs-offset-2">
                        <input id="imagen" class="col-xs-12" name="imagen" type="file">
                    </div>
                    </div>    
                    </div>
                        <br/>

                <input type="hidden" name="idadministrador" value="" />

    
                </fieldset>
                </form> 
               </div>
           </div>                
      </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
                       <div class="modal-footer ">
                    <button type="button" class="btn btn-default pull-left col-xs-2" data-dismiss="modal">Cerrar</button>
                    <a href="<?php echo base_url(); ?>index.php/admin/administrador/save" class="btn btn-primary  col-xs-3 pull-right">Agregar</a>
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
    </div>
</body>