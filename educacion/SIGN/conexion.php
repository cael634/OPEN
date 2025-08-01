<?php
    $servidor="localhost";
    $usuario="u863656637_educacion";
    $contrasena="C55/uv=0";
    $DB="u863656637_educacion";

    $conexion=mysqli_connect($servidor, $usuario, $contrasena, $DB);

    if($conexion){

        echo "</br></br></br>"."Conexión exitosa"."</br></br></br>";

    }else{

        echo "</br></br></br>"."Sin conexión";

    }

?>