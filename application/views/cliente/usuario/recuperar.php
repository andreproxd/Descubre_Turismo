<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Registro de Cliente</title>
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
	<form id="form-login" action="<?php echo base_url(); ?>public/cliente/recovery" method="post" autocomplete="off">
       
         <label class="control-label" for="email">Correo Electronico:</label>  
     <input id="email" name="email" type="text" placeholder="Correo Electronico" class="form-control input-md margin" value=""/> 
       
       <input type="submit" id="#" value="RECUPERAR" class="btn btn-myButton"  />

	</form>
	</div>

</div><!-- fin contenedor -->

</div>
</body>
</html>