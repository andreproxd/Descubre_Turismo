
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Cambiar Password del Cliente</title>
<style type="text/css">@import "<?php echo base_url(); ?>media/css/registrocliente.css";</style>
<style>
.btn.btn-myButton{
	background-color: #00786a;
	font:bold 12px "Trebuchet MS";
	width:200px;
    color:#ffffff;
    height:32px;
	padding:5px 24px;
    padding-bottom: 5px
}
    
</style>
</head>
<body>
    	

<div id="envoltura">
<div id="contenedor" class="curva">
	<div id="cabecera" class="tac">
		<h6>RECUPERAR CONTRASEÑA</h6>
	</div>
	<div id="cuerpo">
	<form id="form-login" action="<?php echo base_url(); ?>auth/setPassword" method="post" autocomplete="off">
       
         <label class="control-label" for="email">Nuevo Password:</label>  
        <input type="password" name="password" class="form-control only-line" lass="form-control input-md margin" id="pwd" />
                 <label class="control-label" for="email">Confirmar Password:</label>  
        <input type="password" name="password2" class="form-control only-line" lass="form-control input-md margin" id="rpwd" />
       
        <input type="submit" id="#" value="CAMBIAR" class="btn btn-myButton"  />
        <input type="hidden" id="#" name="recovery" value="<?php echo $cliente->recovery; ?>"  />
	</form>
	</div>

</div><!-- fin contenedor -->

</div>
</body>
</html>