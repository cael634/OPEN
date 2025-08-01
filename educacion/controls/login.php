<?php
include ("../conexion.php");

$email = $_REQUEST['email'];
$pass_ = $_REQUEST['pass'];

$sql = "SELECT pass, id FROM usuario WHERE correo = \"".$email."\";";
$query = mysqli_query($conexion, $sql);
$mail_ = mysqli_fetch_array($query);
$pass = $mail_[0];
$id = $mail_[1];

if ($query){
    if(password_verify($pass_, $pass)){
        header("location:../index.php?id=".$id);
    }else{
        header("location:../login.html?lcerror=1");
    }
}else{
    header("location:../login.html?leerror=1");
}



?>