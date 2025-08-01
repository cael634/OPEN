<?php
check_admin();

if(isset($enviar)){
	$nombre= clear($nombre);
	$password = clear($password);
	$username = clear($username);
  $id_vendedor = $_SESSION['id_vendedor'];


		$mysqli->query("INSERT INTO repartidor (nombre,password,username,id_vendedor) VALUES ('$nombre','$password','$username','$id_vendedor')");
		
		redir("");
	

}

if(isset($eliminar)){
	$eliminar = clear($eliminar);
	$mysqli->query("DELETE FROM repartidor WHERE id = '$eliminar'");

	redir("?p=distribuidor");
}

?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800">Agregar personal de distribución.</h1> 
          </div>
<br>
<form method="post" action="">
	<div class="form-group">
		<input type="text" class="form-control" name="nombre" placeholder="Nombre del distribuidor"/>
	</div>
                <div class="form-group">
                    <input type="text" autocomplete="on" class="form-control" placeholder="Usuario" name="username"/>
                </div>

                <div class="form-group">
                    <input type="password" autocomplete="on" class="form-control" placeholder="Contraseña" name="password"/>
                </div>

            


	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="enviar" value="Agregar distribuidor"/>
	</div>
</form><br>
<br>
</div>