
<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
$result="";

require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';
require '../phpmailer/src/Exception.php';
require '../phpmailer/src/OAuth.php';

$mail = new PHPMailer(true);
$mail->SMTPDebug = 1;
$mail->Debugoutput = 'html';



/** Configurar SMTP para el acceso de la cuenta gmail**/
$mail->isSMTP();                                      // Indicamos que use SMTP
$mail->Host = "smtp.gmail.com";                        // Indicamos los servidores SMTP
$mail->SMTPAuth = true;                               // Habilitamos la autenticación SMTP
$mail->Username = 'formlarioenvio@gmail.com';                 // SMTP username
$mail->Password = 'R123456789mu';                           // SMTP password
$mail->SMTPSecure = 'tsl';                            // Habilitar encriptación TLS o SSL
$mail->Port = 587;                                    // TCP port

/** Configurar cabeceras del mensaje **/
$mail->From = 'formlarioenvio@gmail.com';                       // Correo del remitente
$mail->FromName = 'Robertclasing';           // Nombre del remitente
$mail->Subject = 'test de asunto';                // Asunto

/** Incluir destinatarios. El nombre es opcional **/
$mail->addAddress('robertclasing@gmail.com');


/** Enviarlo en formato HTML **/
$mail->isHTML();                                  

/** Configurar cuerpo del mensaje **/
$mail->Body    = 'Este es el mensaje en HTML <b>en negrita!</b>';

/** Para que use el lenguaje español **/
$mail->setLanguage('es');

/** Enviar mensaje... **/
if(!$mail->send()) {
    echo 'El mensaje no pudo ser enviado.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Mensaje enviado correctamente';
}




?>

