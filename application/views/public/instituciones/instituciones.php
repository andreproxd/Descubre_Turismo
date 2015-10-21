
<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js"> <!--<![endif]-->  
  <title>Atractivos Turisticos</title>
    
<body  id="products" class="template-collection">

<div class="page_preloader"></div>


<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<div id="wrapper">
<div id="wrapper2">
<!-- MAIN CONTENT -->
<div id="main" role="main">
<div class="container">
    <div class="row sidebar_left ">
    <div class="">
    <div id="main_content" class="col-sm-9">
        <div class="collection-scope">
          <div class="page_header">
            <h1 class="page_heading">Instituciones</h1>
          </div>
          <div class="page_content">  
            <ul class="tags clearfix">
              <li class="active">
                <a href="<?php echo base_url(); ?>index.php/public/casonas/casonas">Todos</a>
              </li> 
            </ul>
<!-- collection image & description -->
<!-- products sorting -->
            <script>
            Shopify.queryParams = {};
            if (location.search.length) {
              for (var aKeyValue, i = 0, aCouples = location.search.substr(1).split('&'); i < aCouples.length; i++) {
                aKeyValue = aCouples[i].split('=');
                if (aKeyValue.length > 1) {
                  Shopify.queryParams[decodeURIComponent(aKeyValue[0])] = decodeURIComponent(aKeyValue[1]);
                }
              }
            }
            jQuery('.sort-by')
              .val('title-ascending')
              .on('change', function() {
                Shopify.queryParams.sort_by = jQuery(this).val();
                location.search = jQuery.param(Shopify.queryParams);
              });
            </script>
<!-- products listing -->
            <div class="product-listing__collection">
            <div class="product_listing_main"> 
                <div class="row">
                    <div class="col-sm-4">
                        <div class="wow product">
                            <div class="product_img">
                                <a class="img_change" href="<?php echo base_url(); ?>index.php/public/instituciones/Dircetur">
                                    <img src="<?php echo base_url(); ?>media/img/FOTOS_INSTITUCIONES/DIRCETUR.jpg" />
                                </a>
                            </div>
                            <div class="product_info">
                                <div class="product_name">
                                    <a href="<?php echo base_url(); ?>index.php/public/instituciones/Dircetur">Direccion General de Turismo</a>
                                </div>
                                <div class="product_desc"> Es un órgano de línea encargado de promover la actividad ...</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="wow product">
                            <div class="product_img">
                                <a class="img_change" href="<?php echo base_url(); ?>">
                                    <img src="<?php echo base_url(); ?>media/img/FOTOS_INSTITUCIONES/bomberos.jpg">
                                </a>
                            </div>
                            <div class="product_info">
                                <div class="product_name">
                                    <a href="<?php echo base_url(); ?>">Bomberos</a>
                                </div>
                                <div class="product_desc"> Es un órgano de línea encargado de promover la actividad ...</div>
                                </div>
                            </div>
                        </div>

                    <div class="col-sm-4">
                        <div class="wow product">
                            <div class="product_img">
                                <a class="img_change" href="<?php echo base_url(); ?>">
                                    <img src="<?php echo base_url(); ?>media/img/FOTOS_INSTITUCIONES/inrena.jpg">
                                </a>
                            </div>
                            <div class="product_info">
                                <div class="product_name">
                                    <a href="<?php echo base_url(); ?>">INRENA</a>
                                </div>
                                <div class="product_desc"> Es un órgano de línea encargado de promover la actividad ...</div>

                            </div>
                        </div>
                    </div>
                                    <div class="col-sm-4">
                        <div class="wow product">
                            <div class="product_img">
                                <a class="img_change" href="<?php echo base_url(); ?>">
                                    <img src="<?php echo base_url(); ?>media/img/FOTOS_INSTITUCIONES/MUNICIPALIDADPROVINCIALDETRUJILLO.png" alt="" />
                                </a>
                            </div>
                            <div class="product_info">
                                <div class="product_name">
                                    <a href="<?php echo base_url(); ?>">Municipalidad Provincial de Trujillo</a>
                                </div>
                                <div class="product_desc"> Es un órgano de línea encargado de promover la actividad ...</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="wow product">
                            <div class="product_img">
                                <a class="img_change" href="<?php echo base_url(); ?>">
                                    <img src="<?php echo base_url(); ?>media/img/FOTOS_INSTITUCIONES/IPERU.jpg"/>
                                </a>
                            </div>
                            <div class="product_info">
                                <div class="product_name">
                                    <a href="<?php echo base_url(); ?>">IPeru</a>
                                </div>
                                <div class="product_desc"> Es un órgano de línea encargado de promover la actividad ...</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="wow product">
                            <div class="product_img">
                                <a class="img_change" href="<?php echo base_url(); ?>">
                                    <img src="<?php echo base_url(); ?>media/img/FOTOS_INSTITUCIONES/POLICIATURISMO.jpg"/>
                                </a>
                            </div>
                            <div class="product_info">
                                <div class="product_name">
                                    <a href="<?php echo base_url(); ?>">Policia de Turismo</a>
                                </div>
                                <div class="product_desc"> Es un órgano de línea encargado de promover la actividad ...</div>
                            </div>
                        </div>
                    </div>
    </div>
              
            </div>
            </div>
<!-- pagination -->
        <div id="pagination">
          <span class="page current">1</span> <span class="page"><a href="/collections/all?page=2" title="">2</a></span> <span class="page"><a href="/collections/all?page=3" title="">3</a></span> <span class="page"><a href="/collections/all?page=4" title="">4</a></span> <span class="next"><a href="/collections/all?page=2" title="">Next &raquo;</a></span>
        </div>
        </div>
        </div>
    </div>
    </div>
	</div>
</div>
</div><!-- / #wrapper2 -->
</div><!-- / #wrapper -->
<script src="//cdn.shopify.com/s/files/1/0815/1651/t/2/assets/shop.js?5807396758501947651" type="text/javascript"></script>

</body>
</html>