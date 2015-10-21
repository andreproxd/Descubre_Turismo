
<style>
    .padding_50{
        padding-bottom:50px;
    }
    
    .box {
        width: 100%;
        height: 100%;
        padding: 22px;
        background-color:transparent;
        border: 1px solid #444655;
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
            Clientes</b>
            <small>Mantenedor</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><a href="fa fa-user"><i class="fa fa-user"></i>Clientes</a></li>
            <li class="active"></li>
          </ol>
        </section>
          <br/>
    <!-- Main content -->
    <section class="content ">    
    <div class="col-md-8 col-xs-offset-3 ">    
    <div class="row">
        <form action="<?=base_url()?>admin/cliente/save" method="post" class="form-horizonal">
        <fieldset><br/>
            
                    <div class="form-group">
                    <div class="row">
                    <label class="col-xs-4 col-xs-offset-2  text-center control-label" for="nombresyapellidos">Nombres y Apellidos</label>  
                    </div>
                    <div class="row">
                    <div class="col-xs-5 col-xs-offset-2">
                        <input id="nombresyapellidos" name="nombresyapellidos" type="text" placeholder="" class="form-control input-md" value=""> 
                    </div>
                    </div>
                    </div>
            
                    <div class="form-group">
                    <div class="row">
                    <label class="col-xs-4 col-xs-offset-2 text-center control-label" for="Sexo">Sexo</label> 
                    </div>
                    <div class="row">
                    <div class="col-xs-5 col-xs-offset-3 ">
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
                        <label class="col-xs-4 col-xs-offset-2 text-center control-label" for="nacionalidad">Nacionalidad</label>  
                    </div>
                     <div class="row">
                        <div class="col-xs-5 col-xs-offset-2">
                            <input id="nacionalidad" name="nacionalidad" type="text" placeholder="" class="form-control input-md" value="">
                        </div> 
                    </div>
                    </div>
            
                    <div class="form-group">
                    <div class="row">
                        <label class="col-xs-4 col-xs-offset-2 text-center control-label" for="edad">Edad</label>  
                    </div>
                    <div class="row">
                        <div class="col-xs-5 col-xs-offset-2">
                            <input id="edad" name="edad" type="text" placeholder="" class="form-control input-md" value="">
                        </div>
                    </div>
                    </div>
            
                    <div class="form-group">
                    <div class="row">
                        <label class="col-xs-4 col-xs-offset-2 text-center control-label" for="Correo">Correo</label> 
                    </div>
                    <div class="row ">    
                    <div class="col-xs-5 col-xs-offset-2">
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
          </section>
        </div>
      <footer class="main-footer">
        <strong>Copyright &copy; 2015 <a href="http://descubre.descubrelalibertad.com">Descubre La Libertad</a>.</strong>Todos los derechos reservados.
      </footer>
        </div>
    </div>
</body>