<?php 

$nombre = $_POST['name'];
$mail = $_POST['email'];
$telefono = $_POST['subject'];
$mensaje = $_POST['message'];

$header = 'from: '.$mail."\r\n";
$header .= "X-Mailer:PHP/".phpversion()."\r\n";
$header .= "Mime-Version:1.0 \r\n";
$header .= "content-Type:text/plain";

$message = "Este message fue enviado por: ".$nombre."\r\n";
$message .= "Su e-mail es: ".$mail."\r\n";
$message .= "Telefono: ".$telefono."\r\n";
$message .= "Mensaje: ".$mensaje."\r\n";
$message .= "Enviado el: ".date('d/m/Y',time());


$para = 'edielectronica@hotmail.com';
$asunto = 'Quiero contactar con Magsil Elektro';

if(mail($para,$asunto,utf8_decode($message),$header)){
    echo "<script type='text/javascript'>alert('Tu message ha sido enviado exitosamente');</script>";
}


 ?>
