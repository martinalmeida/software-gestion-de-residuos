<?php

/*
*
* ECOSOFT
* 
*
*/

require_once('PHPMailerAutoload.php');


$mail = new PHPMailer;

//$mail->SMTPDebug    = 3;

$mail->IsSMTP();
$mail->Host = 'mail.fundacionecotec.org';   /*Servidor SMTP*/																		
$mail->SMTPSecure = 'ssl';   /*Protocolo SSL o TLS*/
$mail->Port = 465;   /*Puerto de conexión al servidor SMTP*/
$mail->SMTPAuth = true;   /*Para habilitar o deshabilitar la autenticación*/
$mail->Username = 'ecosoft@fundacionecotec.org';   /*Usuario, normalmente el correo electrónico*/
$mail->Password = 'JI([cUf-n=Ku';   /*Tu contraseña*/
$mail->From = 'ecosoft@fundacionecotec.org';   /*Correo electrónico que estamos autenticando*/
$mail->FromName = 'ECOSOFT';   /*Puedes poner tu nombre, el de tu empresa, nombre de tu web, etc.*/
$mail->CharSet = 'UTF-8';   /*Codificación del mensaje*/

?>