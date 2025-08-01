<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'recuperarcuenta@open.com.se';                     //SMTP username
    $mail->Password   = 'Recuperarcuenta1';                               //SMTP password
    $mail->SMTPSecure = 'ssl';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('recuperarcuenta@open.com.se', 'Jose');
    $mail->addAddress('josemisavau@gmail.com');     //Add a recipient
    $mail->addAddress('ksierram@unal.edu.co');     //Add a recipient


    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Prueba para el correo';
    $mail->Body    = 'Hola Naty, este es un correo programable, ya pude!!! ya puedo hacer el backend de la recuperacion de contrasena... Pero hay unos puntos de los que me gustaria hablar contigo, sobre como va a quedar definitamente la interfaz de inicio de sesion, yo no segui avanzando con mi version porque a ti no te gusto, y mira, te entiendo totalmente, fue tu trabajo, y no estuvo bien de mi parte replicarlo sin consultarte antes, sin embargo, te aclaro que nunca modifique el tuyo, pues el mio lo hice totalmente de 0, pero entoncáéíóún no he logrado llegar al formulario de resgistro directamenáéíóúego de que un usuario se equivoque al momento del registro, ademas, ahora que puedo enviar correos, tambien podriamos pedir la confirmacion de cuenta una vez se de el registro, para estar mas seguros al momento de la recuperacion de contrasena, tambien te cuento que necesitamos una interfaz para la modificacion de contrasena una vez recuperada, la verdad eso es muy sencillo, seguiriamos utilizando las mismas interfaces hemos venido usando, y, áéíóúltimo, te queria preguntar si querias decorar un poco el correo del posible mensaje de confirmacion de cuenta y el de recuperacion de cuenta, dado que se pueden disenar en lenguaje HTML y pues de cierto modo, es frontend, bueno, si a ti te parece... por eso te queria decir que estoy libre manana paraehablar y salir de ese tema para tambien hacer la reu con el resto del grupo, siendo esto todo lo que te queria decir, tambien te ofraezco unas disculpas por mi ausencia, estaba un poco desmotivado con todo esto y la frustracion de no puder manejar la plantilla, pero ya estpy mejor y con ganas de avanzar, sin mas particulares, Jose, psdáéíóún no se como poner el salto de linea, y no es que tenga tan pesima ortografia, pero mira lo que pasa cuanto pongo tildes: áéíóú ';

    $mail->send();
    echo 'Mejor pa onde';
} catch (Exception $e) {
    echo "No fue capaz. Mailer Error: {$mail->ErrorInfo}";
}