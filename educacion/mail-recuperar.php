<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

echo ("hola")

if ($_REQUEST['recu-btn'] == "Enviar"){
    include ("conexion.php");

    $sql = "SELECT id, nombre FROM usuario WHERE correo = \"".$email."\";";
    $query = mysqli_query($conexion, $sql);
    $mail_ = mysqli_fetch_array($query);
    $id = $mail_[0];
    $name = $mail_[1];

    if ($id > 0){

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
            $mail->setFrom('recuperarcuenta@open.com.se', 'Recupera tu cuenta');
            $mail->addAddress($email);     //Add a recipient


            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Recuperación de cuenta';
            $mail->Body    = 'hola '.$name.' Recupere su cuenta de ¿Como se llama el proyecto? http://open.com.se/educacion/cambio.html?id='.$id;
            $mail->send();
            //echo 'Mejor pa onde';
        } catch (Exception $e) {
            echo "No fue capaz. Mailer Error: {$mail->ErrorInfo}";
        }

    }else{
        echo ($id." ".$email);
        //header("location:contraseña.html?error=1");
    }
}else{
    header("location:login.html");
}