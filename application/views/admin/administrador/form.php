
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
            Administrador</b>
            <small>Mantenedor</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><a href="fa fa-user"><i class="fa fa-user"></i>Administrador</a></li>
            <li class="active"></li>
          </ol>
        </section>
          <br/>
    <!-- Main content -->
    <section class="content  ">    
    <div class="col-md-8 col-xs-offset-3 ">    
    <div class="row">
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
                    <div class="form-group col-xs-8 col-xs-offset-2">
                        <input id="imagen" class="col-xs-12" name="imagen" type="file">
                    </div>
                    </div>    
                    </div>
                        <br/>

                <input type="hidden" name="idadministrador" value="" />

                <div class="form-group">
                    <div class="col-xs-4 col-xs-offset-1 ">
                        <div class="row">
                            <a href="<?php echo base_url(); ?>index.php/admin/lugar/save" class="btn btn-block btn-success btn-flat">Agregar</a>  
                        </div>
                    </div>
                    <div class="col-xs-3 col-xs-offset-1">
                        <div class="row">
                            <a href="<?php echo base_url(); ?>index.php/admin/administrador/" class="btn btn-block btn-danger btn-flat">Cancelar</a>  
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
    