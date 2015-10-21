
<style>
    .padding_50{
        padding-bottom:50px;
    }

    .simple1{
        width: 90%;
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
    .checklabel{
    white-space:nowrap;
    }
    .padding_50_lef{
        padding-left: 50px;
    }
    .padding_30{
        margin: 50px;
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
    .padding_10_lef{
        padding-right: 20px;
    }
    
</style>   
<body class="hold-transition skin-blue sidebar-mini">
    <div class="col-xs-12 ">
    <div class="wrapper">
      <div class="content-wrapper">
        <section class="content-header">
          <h1><b>
            Hospedajes</b>
            <small>Mantenedor</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><a href="fa fa-user"><i class="fa fa-hotel"></i>Hospedajes</a></li>
            <li class="active"></li>
          </ol>
        </section>
          <br/>
    <!-- Main content -->
    <section class="content ">    
    <div class="col-md-9 col-xs-offset-2 ">    
    <div class="row box principal">
        <form action="<?=base_url()?>index.php/admin/hospedajes/save" method="post" class="form-horizonal">
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
                            <div class="dropdown col-xs-3">
                                <button class="btn btn-default dropdown-toggle" type="button" id="categoria" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Selecionar
                                <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="categoria">
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
                    
                <div class="form-group">
                    <div class="col-xs-4 col-xs-offset-1">
                        <div class="row">
                            <a href="<?php echo base_url(); ?>index.php/admin/hospedajes/save" class="btn btn-block btn-success btn-flat">Agregar</a>  
                        </div>
                    </div>
                    <div class="col-xs-3 col-xs-offset-1">
                        <div class="row">
                            <a href="<?php echo base_url(); ?>index.php/admin/hospedajes" class="btn btn-block btn-danger btn-flat">Cancelar</a>  
                        </div>
                    </div>    
                </div>
                </fieldset>
                </form>

            </div>
            </div>
          </section>
        </div>
       <footer class="main-footer">
        <strong>Copyright &copy; 2015 <a href="http://descubre.descubrelalibertad.com">Descubre La Libertad</a>.</strong>Todos los derechos reservados.
      </footer>
        </div>
    </div>
</body>