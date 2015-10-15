<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Registro de Cliente</title>
<style type="text/css">@import "<?php echo base_url(); ?>media/css/registrocliente.css";</style>
</head>
<body>
    	

<div id="envoltura">
<div id="contenedor" class="curva">
	<div id="cabecera" class="tac">
		<img src="<?php echo base_url(); ?>media/img/login/urbaner_logo.png"/>
	</div>
	<div id="cuerpo">
	<form id="form-login" action="<?php echo base_url(); ?>public/cliente/save" method="post" autocomplete="off">
       
    <label class="control-label" for="nombres">Nombres</label>  
     <input id="nombres" name="nombres" type="text" placeholder="Nombre Completo" class="form-control input-md" value=""/> 
         <label class="control-label" for="apellidos">Apellidos</label>  
     <input id="apellidos" name="apellidos" type="text" placeholder="Apellido Completo" class="form-control input-md" value=""/>
         <label class="control-label" for="email">Email</label>  
     <input id="email" name="email" type="text" placeholder="Correo Electronico" class="form-control input-md" value=""/> 
         <label class="control-label" for="telefono">Telefono</label>  
     <input id="telefono" name="telefono" type="text" placeholder="Telefono o Celular" class="form-control input-md" value=""/>
         <label class="control-label" for="password">Password</label>  
     <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md" value=""/>
                 <label class="control-label" for="password1">Repetir Password</label>  
     <input id="password1" type="password" placeholder="Confirmar password" class="form-control input-md" value=""/>
    
       <p><input type="submit" id="#" value="REGISTRAR" class="btn btn-myButton"  /></p> 

	</form>
	</div>

</div><!-- fin contenedor -->

</div>
</body>
</html>