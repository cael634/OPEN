     <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>


<?php



include "../configs/config.php";
include "../configs/funciones.php";

if(isset($_SESSION['id_vendedor'])){
  redir("./");
}
  
if(isset($enviar)){
  $username = clear($username);
  $password = clear($password);
  $cpassword = clear($cpassword);


  $q = $mysqli->query("SELECT * FROM clientes WHERE username = '$username'");

  if(mysqli_num_rows($q)>0){
    alert("El usuario ya está en uso",0,'registro');
    die();
  }

  if($password != $cpassword){
    alert("Las contraseñas no coinciden",0,'registro');
    die();
  }


    $mysqli->query("UPDATE admins WHERE name ='$id' SET username = '$username',password = '$password'");



  $q2 = $mysqli->query("SELECT * FROM admins WHERE username = '$username'");

  $r = mysqli_fetch_array($q2);

  $_SESSION['id_cliente'] = $r['id'];
redir('index.php');
  alert("Te has registrado satisfactoriamente",1,'principal');
  die();
  
  //redir("./");

}
  ?>

<!DOCTYPE html>
<html lang="en" >
<head>

  <meta charset="UTF-8">
  <title>CodePen - [Bootstrap4] registration form with validation</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>

</head>
<header class="header"><img src="open.png" style="
    max-width: 75px;
    max-height: max-content;
">
        <div class="contenedor-header">
 </div></header>
<body>
<!-- partial:index.partial.html -->
<!-- Bootstrap4 registration with validation 
---- Jaeyoon Song
---- https://codepen.io/jyo3on
-->
<div class="container mt-5">

 <form method="post" action="">

            <div class="centrar_login">
  <center>
    <form method="post" action="">
      <div class="centrar_login">
        <label><h2><i class="fa fa-key"></i>Informacion para inicio de sesion.</h2></label><br><br>
        <div class="form-group">
          <input type="text" autocomplete="off" class="form-control" placeholder="Usuario" name="username"/>
        </div>

        <div class="form-group">
          <input type="password" class="form-control" placeholder="Contraseña" name="password"/>
        </div>

        <div class="form-group">
          <input type="password" class="form-control" placeholder="Confirmar Contraseña" name="cpassword"/>
        </div>



        <div class="form-group">
        <button class="btn btn-submit" name="enviar" type="submit" style="
    background-color: #e2013b;
    color: white;
"><i class="fa fa-sign-in"></i> Registrate</button>
        </div>
      </div>
    </form>
  </center>

<style type="text/css">
    img {
    vertical-align: middle;
    max-width: 400px;
    max-height: max-content;
}
.header {
    width: 100%;
    padding: 10px;
    display: block;
    z-index: 9000;
    background: #e2013b;
    
    top: 0;
    -webkit-box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
</style>