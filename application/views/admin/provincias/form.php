
<style>
    .padding_50{
        padding-bottom:50px;
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
</style>   
<body class="hold-transition skin-blue sidebar-mini">
    <div class="col-xs-12 ">
    <div class="wrapper">
      <div class="content-wrapper">
        <section class="content-header">
          <h1><b>
            Provincias</b>
            <small>Mantenedor</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><a href="fa-binoculars"><i class="fa-binoculars"></i>Provincias</a></li>
            <li class="active"></li>
          </ol>
        </section>
          <br/>
    <!-- Main content -->
    <section class="content ">    
    <div class="col-md-8 col-xs-offset-3 ">    
    <div class="row">
        <form action="<?=base_url()?>admin/provincias/save" method="post" class="form-horizonal">
        <fieldset><br/>
                    <div class="form-group">
                    <div class="row">
                    <label class="col-xs-4 col-xs-offset-2  text-center control-label" for="nombre">Nombre</label>  
                    </div>
                    <div class="row">
                    <div class="col-xs-6 col-xs-offset-2">
                        <input id="nombre" name="nombre" type="text" placeholder="" class="form-control input-md" value=""> 
                    </div>
                    </div>
                    </div>
            
                    <div class="form-group">
                    <div class="row">
                        <label class="col-xs-4 col-xs-offset-2 text-center control-label" for="descripcion">Descripcion</label>  
                    </div>
                     <div class="row">
                        <div class="col-xs-6 col-xs-offset-2">
                            <textarea class="form-control" rows="5" id="descripcion"></textarea>
                        </div> 
                    </div>
                    </div>
            
                    <div class="form-group">
                    <div class="row">
                    <label class="col-xs-4 col-xs-offset-2 text-center control-label" for="Sexo">Departamento</label> 
                    </div>
                    <div class="row">
                    <div class="col-xs-5 col-xs-offset-3 ">
                        <button class="btn btn-default dropdown-toggle" type="button" id="departamento" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Selecionar
                        <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="departamento">
                            <li><a href="#">Seleccionar</a></li>
                            <li><a href="#">Another </a></li>
                        </ul>
                    </div>
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <div class="row">
                    <label class="col-xs-4 col-xs-offset-2 text-center control-label" for="provincia">Provincia</label> 
                    </div>
                    <div class="row">
                    <div class="col-xs-5 col-xs-offset-3 ">
                        <button class="btn btn-default dropdown-toggle" type="button" id="provincia" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Selecionar
                        <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="provincia">
                            <li><a href="#">Seleccionar</a></li>
                            <li><a href="#">Another </a></li>
                        </ul>
                    </div>
                    </div>
                    </div>
                    
                    <div class="form-group">
                    <div class="row">
                        <label class="col-xs-4 col-xs-offset-2 text-center control-label" for="imagen">Imagen</label>
                    </div>
                    <div class="row"> 
                    <div class="form-group col-xs-8 col-xs-offset-2">
                        <input id="imagen" class="col-xs-12" name="imagen" type="file">
                    </div>
                    </div> 
                    </div>
                        <br/>

                <input type="hidden" name="idprovincia" value="" />

                <div class="form-group">
                    <div class="col-xs-4 col-xs-offset-1">
                        <div class="row">
                            <a href="<?php echo base_url(); ?>index.php/admin/provincias/save" class="btn btn-block btn-success btn-flat">Agregar</a>  
                        </div>
                    </div>
                    <div class="col-xs-3 col-xs-offset-1">
                        <div class="row">
                            <a href="<?php echo base_url(); ?>index.php/admin/provincias" class="btn btn-block btn-danger btn-flat">Cancelar</a>  
                        </div>
                    </div>    
                </div>
                </fieldset>
                </form>
            </div>
            </div>
          </section>
        </div>
        </div>
    </div>
</body>
