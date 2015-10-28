<?php include("head.php"); ?>
<?php include("header.php"); ?>

             <div class="template_content">
      <div class="form-horizontal">
 <form action="<?=base_url()?>public/cliente/save" method="post" class="form-horizonal">

                <div id="first_name" class="clearfix form-group">
                  <label for="nombresyapellidos" class="login control-label col-sm-4">Nombres y Apellidos</label>
                  <div class="col-sm-4"><input type="text" value="" placeholder="Nombre Completo" name="cli_nomyape" id="cli_nomyape" class="form-control" size="30" /></div>
                </div>

                    <div id="sexo" class="clearfix form-group">
                    <label for="sexo"  class="login control-label col-sm-4">Sexo</label>
                    <div class="col-sm-5">
                   <form role="form">
                        <label class="radio-inline">
                          <input type="radio" name="cli_sexo">Masculino
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="cli_sexo">Femenino
                        </label>
                        </form>
                    </div>
                  </div>

                <div id="nacionalidad" class="clearfix form-group">
                  <label for="nacionalidad" name="cli_nacionalidad" class="login control-label col-sm-4">Nacionalidad</label>
                  <div class="col-sm-4"><input type="text" value="" placeholder="Nacionalidad"name="cli_nacionalidad" id="cli_nacionalidad" class="form-control" size="30" /></div>
                </div>

                <div id="edad" class="clearfix form-group">
                  <label for="edad" class="login control-label col-sm-4">Edad</label>
                  <div class="col-sm-4"><input type="number" id="cli_edad" name="cli_edad"class="form-control" min="1" max="100"></div>
                </div>

                <div id="email" class="clearfix form-group">
                  <label for="email" class="login control-label col-sm-4">Email</label>
                  <div class="col-sm-4"><input type="email" value="" name="cli_email" id="cli_email" class="form-control" size="60" placeholder="Correo Electronico" /></div>
                </div>

                <div id="password" class="clearfix form-group">
                  <label for="password" class="login control-label col-sm-4">Password</label>
                  <div class="col-sm-4"><input type="password" value="" name="cli_password" id="cli_password" class="form-control password" size="30" /></div>
                </div>

            <div id="password1" class="clearfix form-group">
                  <label for="password1" class="login control-label col-sm-4">Repetir Password</label>
                  <div class="col-sm-4"><input type="password" value=""  class="form-control password" size="30" /></div>
                </div>

                <div class="form-group">
                  <div class="col-sm-offset-4 col-sm-4">
                     <input type="submit" class="btn btn-success " value="Crear"/>
                    <button type="reset" class="btn btn-success">Cancelar</button>
                  </div>
                </div>
              </form>
      </div>
        </div>
<?php include("footer.php"); ?>
