<<<<<<< HEAD

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
     
<div class="modal fade" role="dialog" id="_cliente">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><b>Actualizar Cliente</b></h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
	       <div class="row ">
<div class="col-md-11 col-xs-offset-1">    
        <form action="<?=base_url()?>admin/cliente/save" method="post" class="form-horizonal">
        <fieldset><br/>
                    <div class="form-group">
                    <div class="row">
                    <label class="col-xs-7 col-xs-offset-2  text-center control-label" for="nombresyapellidos">Nombres y Apellidos</label>  
                    </div>
                    <div class="row">
                    <div class="col-xs-7 col-xs-offset-2">
                        <input id="nombresyapellidos" name="nombresyapellidos" type="text" placeholder="" class="form-control input-md" value=""> 
                    </div>
                    </div>
                     </div>
            
                    <div class="form-group">
                    <div class="row">
                    <label class="col-xs-7 col-xs-offset-2 text-center control-label" for="Sexo">Sexo</label> 
                    </div>
                    <div class="row">
                    <div class="col-xs-7 col-xs-offset-4 ">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Selecionar
                        <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Seleccionar</a></li>
                            <li><a href="#">Another </a></li>
                        </ul>
                    </div>
                    </div>
                    </div>
            
                    <div class="form-group">
                    <div class="row">
                        <label class="col-xs-7 col-xs-offset-2 text-center control-label" for="nacionalidad">Nacionalidad</label>  
                    </div>
                     <div class="row">
                        <div class="col-xs-7 col-xs-offset-2">
                            <input id="nacionalidad" name="nacionalidad" type="text" placeholder="" class="form-control input-md" value="">
                        </div> 
                    </div>
                    </div>  
            
                    <div class="form-group">
                    <div class="row">
                        <label class="col-xs-7 col-xs-offset-2 text-center control-label" for="edad">Edad</label>  
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-xs-offset-2">
                            <input id="edad" name="edad" type="text" placeholder="" class="form-control input-md" value="">
                        </div>
                    </div>
                    </div>
            
                    <div class="form-group">
                    <div class="row">
                        <label class="col-xs-7 col-xs-offset-2 text-center control-label" for="Correo">Correo</label> 
                    </div>
                    <div class="row ">    
                    <div class="col-xs-7 col-xs-offset-2">
                        <input id="correo" name="correo" type="text" placeholder="" class="form-control input-md"value="">
                    </div>
                    </div>
                    </div>

                        <input type="hidden" name="idcliente" value="" />

                <div class="form-group">
                    <div class="col-xs-4 col-xs-offset-1">
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
                </fieldset>
                </form>
            </div>
           </div>                
      </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
                       <div class="modal-footer ">
                    <button type="button" class="btn btn-default pull-left col-xs-2" data-dismiss="modal">Cerrar</button>
                    <a href="<?php echo base_url(); ?>index.php/admin/cliente/save" class="btn btn-primary  col-xs-3 pull-right">Agregar</a>
                  </div>
    </div><!-- /.modal -->
 </div>
</div>
</div>
=======

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
     
<div class="modal fade" role="dialog" id="_cliente">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><b>Actualizar Cliente</b></h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
	       <div class="row ">
<div class="col-md-11 col-xs-offset-1">    
        <form action="<?=base_url()?>admin/cliente/save" method="post" class="form-horizonal">
        <fieldset><br/>
                    <div class="form-group">
                    <div class="row">
                    <label class="col-xs-7 col-xs-offset-2  text-center control-label" for="nombresyapellidos">Nombres y Apellidos</label>  
                    </div>
                    <div class="row">
                    <div class="col-xs-7 col-xs-offset-2">
                        <input id="nombresyapellidos" name="nombresyapellidos" type="text" placeholder="" class="form-control input-md" value=""> 
                    </div>
                    </div>
                     </div>
            
                    <div class="form-group">
                    <div class="row">
                    <label class="col-xs-7 col-xs-offset-2 text-center control-label" for="Sexo">Sexo</label> 
                    </div>
                    <div class="row">
                    <div class="col-xs-7 col-xs-offset-4 ">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Selecionar
                        <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Seleccionar</a></li>
                            <li><a href="#">Another </a></li>
                        </ul>
                    </div>
                    </div>
                    </div>
            
                    <div class="form-group">
                    <div class="row">
                        <label class="col-xs-7 col-xs-offset-2 text-center control-label" for="nacionalidad">Nacionalidad</label>  
                    </div>
                     <div class="row">
                        <div class="col-xs-7 col-xs-offset-2">
                            <input id="nacionalidad" name="nacionalidad" type="text" placeholder="" class="form-control input-md" value="">
                        </div> 
                    </div>
                    </div>  
            
                    <div class="form-group">
                    <div class="row">
                        <label class="col-xs-7 col-xs-offset-2 text-center control-label" for="edad">Edad</label>  
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-xs-offset-2">
                            <input id="edad" name="edad" type="text" placeholder="" class="form-control input-md" value="">
                        </div>
                    </div>
                    </div>
            
                    <div class="form-group">
                    <div class="row">
                        <label class="col-xs-7 col-xs-offset-2 text-center control-label" for="Correo">Correo</label> 
                    </div>
                    <div class="row ">    
                    <div class="col-xs-7 col-xs-offset-2">
                        <input id="correo" name="correo" type="text" placeholder="" class="form-control input-md"value="">
                    </div>
                    </div>
                    </div>

                        <input type="hidden" name="idcliente" value="" />

                <div class="form-group">
                    <div class="col-xs-4 col-xs-offset-1">
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
                </fieldset>
                </form>
            </div>
           </div>                
      </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
                       <div class="modal-footer ">
                    <button type="button" class="btn btn-default pull-left col-xs-2" data-dismiss="modal">Cerrar</button>
                    <a href="<?php echo base_url(); ?>index.php/admin/cliente/save" class="btn btn-primary  col-xs-3 pull-right">Agregar</a>
                  </div>
    </div><!-- /.modal -->
 </div>
</div>
</div>
>>>>>>> f715f51d5f673893028e94a581ed42d7e4a1d48d
</body>