
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
            Museos</b>
            <small>Mantenedor</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><a href="fa fa-user"><i class="fa fa-institution"></i>Museos</a></li>
            <li class="active"></li>
          </ol>
        </section>
          <br/>
    <!-- Main content -->
    <section class="content ">
    <div class="col-md-9 col-xs-offset-2 ">
    <div class="row box principal">
        <form action="<?=base_url()?>admin/museos/save" method="post" class="form-horizonal">
        <fieldset><br/>

                    <div class="form-group col-xs-6">
                    <div class="row">
                        <label class="col-xs-10 text-center control-label" for="n">Nombre</label>
                    </div>
                    <div class="row ">
                    <div class="col-xs-10">
                        <input id="nombre" name="nombre" type="text" placeholder="" class="form-control input-md"value="">
                    </div>
                    </div>
                    </div>

                    <div class="form-group col-xs-6">
                    <div class="row">
                        <label class="col-xs-10 text-center  control-label" for="ingreso">Ingreso</label>
                    </div>
                    <div class="row ">
                    <div class="col-xs-10">
                        <input id="ingreso" name="ingreso" type="text" placeholder="" class="form-control input-md"value="">
                    </div>
                    </div>
                    </div>

                    <div class="form-group col-xs-6">
                    <div class="row">
                        <label class="col-xs-10 text-center control-label" for="precio">Precio</label>
                    </div>
                    <div class="row ">
                    <div class="col-xs-10">
                       <input type="number" id="precio" name="precio"class="form-control" min="1" max="100">
                    </div>
                    </div>
                    </div>

                    <div class="form-group col-xs-6">
                    <div class="row">
                        <label class="col-xs-10 text-center control-label" for="imagen">Imagen</label>
                    </div>
                    <div class="row">
                    <input id="imagen" class="col-xs-10" name="imagen" type="file">
                    </div>
                    </div>

 <div class="form-group col-xs-12">
                <div class="row">
                    <div class="dropdown col-xs-2 col-xs-offset-1">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Departamento
                        <span class="caret"></span>
                        </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another </a></li>
                      </ul>
                    </div>

                    <div class="dropdown col-xs-2 col-xs-offset-1">
                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Provincia
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another </a></li>
                      </ul>
                    </div>

                    <div class="dropdown col-xs-2 col-xs-offset-1">
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
                    </div>          <br/> <br/>
                <div class="form-group">
                    <div class="col-xs-4 col-xs-offset-1">
                        <div class="row">
                            <a href="<?php echo base_url(); ?>index.php/admin/museos/save" class="btn btn-block btn-success btn-flat">Agregar</a>
                        </div>
                    </div>
                    <div class="col-xs-3 col-xs-offset-1">
                        <div class="row">
                            <a href="<?php echo base_url(); ?>index.php/admin/museos" class="btn btn-block btn-danger btn-flat">Cancelar</a>
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
