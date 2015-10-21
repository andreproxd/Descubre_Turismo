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
     
<div class="modal fade" role="dialog" id="_hospedajes">
  <div class="modal-dialog modal-lg " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><b>Actualizar Hospedaje</b></h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
        <div class="row  ">
            <div class="col-md-12 ">    
                <form action="<?=base_url()?>admin/hospedajes/save" method="post" class="form-horizonal">
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
                    
                    <div class="form-group col-xs-6">
                        <div class="row">
                            <label class="col-xs-5">Categoria</label>
                        </div>
                        <div class="row">
                            <div class="dropdown col-xs-5">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Selecionar
                                <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">1 Estrella</a></li>
                                    <li><a href="#">2 Estrellas</a></li>
                                    <li><a href="#">3 Estrellas</a></li>
                                    <li><a href="#">4 Estrellas</a></li>
                                    <li><a href="#">5 Estrellas</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                                        
                    <div class="form-group col-xs-6">
                    <div class="row">
                        <label class="col-xs-5 control-label" for="contacto">Contacto</label> 
                    </div>
                    <div class="row ">    
                    <div class="col-xs-10">
                        <input id="contacto" name="contacto" type="text" placeholder="" class="form-control input-md"value="">
                    </div>
                    </div>
                    </div>
            
                    <div class="form-group col-xs-6">
                    <div class="row">
                        <label class="col-xs-5 control-label" for="direccion">Direccion</label> 
                    </div>
                    <div class="row ">    
                    <div class="col-xs-10">
                        <input id="direccion" name="direccion" type="text" placeholder="" class="form-control input-md"value="">
                    </div>
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

                    <div class="form-group col-xs-12">
                    <div class="row">
                        <label class="col-xs-5 control-label" for="servicios">Servicios Brindados</label>             
                    </div>
                    <div class="row">
                    <div class="col-xs-12 box simple1">
                        <label class="checkbox-inline"><input type="checkbox" value="">Estacionamiento</label>
                         <label class="checkbox-inline"><input type="checkbox" value="">Cable</label>
                         <label class="checkbox-inline"><input type="checkbox" value="">Internet</label>
                         <label class="checkbox-inline"><input type="checkbox" value="">Serrvicios Higienicos</label>
                         <label class="checkbox-inline"><input type="checkbox" value="">Restaurante</label>
                         <label class="checkbox-inline"><input type="checkbox" value="">Agua Caliente</label>
                         <label class="checkbox-inline"><input type="checkbox" value="">Piscina</label>
                         <label class="checkbox-inline"><input type="checkbox" value="">Bar</label>
                    </div>
                    </div><br/> <br/>
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
                     <input type="hidden" name="idiglesias" value="" />
                </fieldset>
                </form>
            </div>
           </div>                
      </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
                    <div class="modal-footer ">
                    <button type="button" class="btn btn-default pull-left col-xs-2" data-dismiss="modal">Cerrar</button>
                    <a href="<?php echo base_url(); ?>index.php/admin/hospedajes/save" class="btn btn-primary  col-xs-3 pull-right">Agregar</a>
                  </div>
    </div><!-- /.modal -->
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
     
<div class="modal fade" role="dialog" id="_hospedajes">
  <div class="modal-dialog modal-lg " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><b>Actualizar Hospedaje</b></h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
        <div class="row  ">
            <div class="col-md-12 ">    
                <form action="<?=base_url()?>admin/hospedajes/save" method="post" class="form-horizonal">
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
                    
                    <div class="form-group col-xs-6">
                        <div class="row">
                            <label class="col-xs-5">Categoria</label>
                        </div>
                        <div class="row">
                            <div class="dropdown col-xs-5">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Selecionar
                                <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">1 Estrella</a></li>
                                    <li><a href="#">2 Estrellas</a></li>
                                    <li><a href="#">3 Estrellas</a></li>
                                    <li><a href="#">4 Estrellas</a></li>
                                    <li><a href="#">5 Estrellas</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                                        
                    <div class="form-group col-xs-6">
                    <div class="row">
                        <label class="col-xs-5 control-label" for="contacto">Contacto</label> 
                    </div>
                    <div class="row ">    
                    <div class="col-xs-10">
                        <input id="contacto" name="contacto" type="text" placeholder="" class="form-control input-md"value="">
                    </div>
                    </div>
                    </div>
            
                    <div class="form-group col-xs-6">
                    <div class="row">
                        <label class="col-xs-5 control-label" for="direccion">Direccion</label> 
                    </div>
                    <div class="row ">    
                    <div class="col-xs-10">
                        <input id="direccion" name="direccion" type="text" placeholder="" class="form-control input-md"value="">
                    </div>
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

                    <div class="form-group col-xs-12">
                    <div class="row">
                        <label class="col-xs-5 control-label" for="servicios">Servicios Brindados</label>             
                    </div>
                    <div class="row">
                    <div class="col-xs-12 box simple1">
                        <label class="checkbox-inline"><input type="checkbox" value="">Estacionamiento</label>
                         <label class="checkbox-inline"><input type="checkbox" value="">Cable</label>
                         <label class="checkbox-inline"><input type="checkbox" value="">Internet</label>
                         <label class="checkbox-inline"><input type="checkbox" value="">Serrvicios Higienicos</label>
                         <label class="checkbox-inline"><input type="checkbox" value="">Restaurante</label>
                         <label class="checkbox-inline"><input type="checkbox" value="">Agua Caliente</label>
                         <label class="checkbox-inline"><input type="checkbox" value="">Piscina</label>
                         <label class="checkbox-inline"><input type="checkbox" value="">Bar</label>
                    </div>
                    </div><br/> <br/>
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
                     <input type="hidden" name="idiglesias" value="" />
                </fieldset>
                </form>
            </div>
           </div>                
      </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
                    <div class="modal-footer ">
                    <button type="button" class="btn btn-default pull-left col-xs-2" data-dismiss="modal">Cerrar</button>
                    <a href="<?php echo base_url(); ?>index.php/admin/hospedajes/save" class="btn btn-primary  col-xs-3 pull-right">Agregar</a>
                  </div>
    </div><!-- /.modal -->
     </div>
</div>

>>>>>>> f715f51d5f673893028e94a581ed42d7e4a1d48d
</body>