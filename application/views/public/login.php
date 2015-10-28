        <base href="<?php echo base_url(); ?>" />
<?php include("head.php"); ?>
<?php include("header.php"); ?>
<!-- MAIN CONTENT -->
<div id="main" role="main">
<div class="container">

    <div class="row sidebar_left sidebar_off">

    <div class="column_center">
    <div id="main_content" class="col-sm-12">



<div id="template" class="customer customer__login">

<div id="customer">

<h2 class="page_heading">Logeo Turista</h2>

<div class="form-horizontal">
<form method="post" action="<?php echo base_url(); ?>index.php/public/auth/login" id="customer_login" accept-charset="UTF-8"><input type="hidden" value="customer_login" name="form_type" /><input type="hidden" name="utf8" value="✓" />

<div id="login_email" class="clearfix large_form form-group">
<label for="customer_email" class="login control-label col-sm-4">Email </label>
<div class="col-sm-4">
<input type="email" value="" name="email" id="email" class="form-control" size="30" />
</div>
</div>

<!-- Customer Account Login -->
<div id="login_password" class="clearfix large_form form-group">
<label for="customer_password" class="login control-label col-sm-4">Password</label>
<div class="col-sm-4">
<input type="password" value="" name="password" id="password" class="form-control" size="16" />
</div>
</div>

<div class="form-group">
<div id="forgot_password">
<div class="col-sm-4 col-sm-offset-4">
<a href="#" onclick="showRecoverPasswordForm();return false;">Olvid&oacute; su password?</a>
</div>
</div>
</div>



<div class="form-group">
<div class="action_bottom col-sm-offset-4 col-sm-4">
<input class="btn btn-primary" type="submit" value="Iniciar Sesion" />
<span class="note">o <a href="<?php echo base_url(); ?>index.php/public/cliente/create">Crear Cuenta</a></span>
</div>
</div>

</form>
</div>

</div>

<!-- Recover Password Form -->
<div id="recover-password" style='display:none' class="customer customer__recover">
<h2 class="page_heading">Recuperar Password</h2>
<p class="note">Ingrese su correo electronico para recuperar su password.</p>
<form method="post" action="<?php echo base_url(); ?>index.php/public/cliente/recovery" accept-charset="UTF-8"><input type="hidden" value="recover_customer_password" name="form_type" /><input type="hidden" name="utf8" value="✓" />

<div id="recover_email" class="clearfix form-horizontal">
<div class="form-group">
    <label for="email" class="large col-sm-4">Email</label>
    <div class="col-sm-4">
        <input class="form-control" type="email" value="" size="30" name="email" id="recover_email" />
    </div>
</div>
<div class="form-group action_bottom ">
    <div class="col-sm-4 col-sm-offset-4">
        <input class="btn btn-primary" type="submit" value="Recuperar" />
        <span class="note">o  <a href="#" onclick="hideRecoverPasswordForm();return false;">Cancel</a></span>
    </div>
</div>
</div>
</form>
</div>

<!-- Guest Login form for shops with optional customer accounts. This form is displayed only when users click on the checkout link on the cart page. -->


</div>

<script type="text/javascript">
  function showRecoverPasswordForm() {
    document.getElementById('recover-password').style.display = 'block';
    document.getElementById('customer').style.display='none';
  }

  function hideRecoverPasswordForm() {
    document.getElementById('recover-password').style.display = 'none';
    document.getElementById('customer').style.display = 'block';
  }

  if (window.location.hash == '#recover') { showRecoverPasswordForm() }
</script>

    </div>
    </div>





    </div>

</div>
</div>
<?php include("footer.php"); ?>
