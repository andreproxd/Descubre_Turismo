<html>
<head>
        <meta http-equiv="Content -Type" content="text/html";charset="utf-8">
</head>
    <table>
        <tbody>
            <tr>
                <td>
                    <img src="<?php echo base_url(); ?>media/img/logo.png" alt="Urbaner" >  
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Estimado <?php echo $cliente->nombres; ?>,</h3>
                    <p>
                       Alguien (probablemente usted) ha solicitado restablecer la contrase&ntilde;a asociada a su cuenta Urbaner.
                    </p>
                    <p>
                       Para continuar con el reinicio,
                       , haga clic en el enlace de abajo. Este enlace es v&aacute;lido durante 24h.
                    </p>  
                    <p>
                        <a href="<?php echo base_url(); ?>auth/password/<?php echo $cliente->recovery; ?>" target="_blank"> Haga Clic aqu&iacute; para restablecer tu contrase&ntilde;a</a>
                    </p>  
                    <p>
                        Por razones de seguridad, cada vez que restablezca su contrase&ntilde;, se desconectara su sesi&oacute;n(en todos los dispositivos). Usted puede iniciar sesi&oacute;n nuevametamente con su nueva contrase&ntilde;a.            
                    </p>
                    <p>
                        Si usted no solicit&oacute; restablecer su contrase&ntilde;a, simpemente ignorar este mensaje, pero ser consciente de que alguien podría estar intentando tener acceso a su cuenta.
                    </p>

                     <p>
                        Saludos,
                     </p>
                     <p>
                        <strong>
                            <a href="mailto:latch-support@support.urbaner.pe" target="_blank">El equipo Urbaner</a>
                        </strong>
                     </p>
                     <p align="left">
                        Copyright &copy; 2015 Urbaner Todos los derechos reservados. 
                     </p>
                     <p>
                        Urbaner es una empresa peruana especializada de Env&iacute;os y log&iacute;stica express inteligente, tus envios a un solo clic.
                     </p>
                </td>
            </tr>
       </tbody>     
    </table>
</html>

