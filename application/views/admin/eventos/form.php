   <!-- daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>Admin_Descubre/plugins/daterangepicker/daterangepicker-bs3.css">
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
            Eventos y Festividades</b>
            <small>Mantenedor</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><a href="fa fa-user"><i class="fa fa-calendar"></i>Eventos y Festividades</a></li>
            <li class="active"></li>
          </ol>
        </section>
          <br/>
    <!-- Main content -->
    <section class="content ">    
    <div class="row box principal">
            <div class="col-md-9 col-xs-offset-2 ">    
        <form action="<?=base_url()?>admin/eventos/save" method="post" class="form-horizonal">
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
                            <label class="col-xs-5">SubTipo</label>
                        </div>
                        <div class="row">
                            <div class="dropdown col-xs-3">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Selecionar
                                <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Culturales</a></li>
                                    <li><a href="#">Religiosos</a></li>
                                    <li><a href="#">Gastronomicos </a></li>
                                </ul>
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
            
                    <div class="form-group col-xs-12">
                    <div class="row">
                        <label class="col-xs-5 control-label" for="vias">Vias de Acceso</label>             
                    </div>
                    <div class="row padding_15_lef">
                    <div class="col-xs-12 box simple1">
                        <label class="checkbox-inline"><input type="checkbox" value="">Asfaltado</label>
                        <label class="checkbox-inline"><input type="checkbox" value="">Asfaltado/Afirmado</label>
                        <label class="checkbox-inline"><input type="checkbox" value="">Trocha Carrosable</label>
                        <label class="checkbox-inline"><input type="checkbox" value="">Afirmado</label>
                    </div>
                    </div>
                    </div>

                    <div class="form-group col-xs-11">
                    <div class="row">
                        <label class="col-xs-12 text-center  control-label" for="caracteristicas">Caracteristicas</label>             
                    </div>
                    <div class="row">
                    <div class="col-xs-12">
                        <textarea class="form-control" rows="2" id="caracteristicas" name="caracteristicas"></textarea>
                    </div>
                    </div>
                    </div>
                    
                    <div class="form-group col-xs-6">
                    <div class="row">
                        <label class="col-xs-10">Rango de Fechas</label>     
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
                            <a href="<?php echo base_url(); ?>index.php/admin/atractivos/save" class="btn btn-block btn-success btn-flat">Agregar</a>  
                        </div>
                    </div>
                    <div class="col-xs-3 col-xs-offset-1">
                        <div class="row">
                            <a href="<?php echo base_url(); ?>index.php/admin/atractivos" class="btn btn-block btn-danger btn-flat">Cancelar</a>  
                        </div>
                    </div>    
                </div>
                </fieldset>
                </form>

            </div>
            </div>
          </section>
          
        </div>
          <script src="<?php echo base_url(); ?>Admin_Descubre/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url(); ?>Admin_Descubre/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>Admin_Descubre/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Select2 -->
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