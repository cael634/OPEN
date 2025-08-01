<?php

include ("../conexion.php");

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$pass_ = $_REQUEST['pass'];
$chpass = $_REQUEST['chpass'];
$rol = $_REQUEST['rol'];

if ($pass_ == $chpass){
    $pass = password_hash($pass_, PASSWORD_DEFAULT, ['cost' => 10]);

    $sqli = "SELECT COUNT(id) FROM usuario WHERE correo = \"".$email."\";";
    $ejecutari = mysqli_query($conexion, $sqli);

    $unico_ = mysqli_fetch_array($ejecutari);
    $unico = $unico_[0];

    if($unico == 0){

        $sql="INSERT INTO usuario (tipo, correo, nombre, pass, id_colegio)
        VALUES('$rol', '$email',  '$name', '$pass', '0') ";

        $insertar = mysqli_query($conexion, $sql);

        if ($insertar){
            header("location:../index.html");
        }
    }else{
        header("location:../login.html?reerror=1&name=".$name."&rol=".$rol);
    }



}else{
    header("location:../login.html?rcerror=1&name=".$name."&email=".$email."&rol=".$rol);
}

?>