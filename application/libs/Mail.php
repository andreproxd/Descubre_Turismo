<?php

class Mail{
    
 
    public static function send($to, $title, $content, $attachments){
        
        require_once("application/libs/class.phpmailer.php");
        $mail = new PHPMailer();
        
        $mail->IsSMTP(); // telling the class to use SMTP
        $mail->Host       = "smtp.mandrillapp.com"; // SMTP server
        $mail->SMTPAuth   = true;
        $mail->Port       = 587; 
        $mail->Username   = "necudeco@gmail.com";
        $mail->Password   = "v88fkC_0BFkp_x1Zhl48dg"; 
        
        $mail->SetFrom('info@urbaner.com', 'Urbaner');
        $mail->Subject  = $title;
        
        
        
        
        $mail->MsgHTML($content);
        
        $mail->AddAddress($to->email, $to->nombres);
        
        $mail->SMTPDebug  = 2; 
        
       // print $content;
        //die();
        $mail->Send();
        
        
    }
    
}


?>