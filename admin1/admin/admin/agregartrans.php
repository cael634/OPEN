<?php
check_admin();

if(isset($enviar)){
	$placa= clear($placa);
	

	$codigo = clear($codigo);
	$id_vendedor = clear($_SESSION['id_vendedor']);

		$mysqli->query("INSERT INTO transporte(placa,codigo,id_vendedor,tipo) VALUES ('$placa','$codigo','$id_vendedor','$tipo')");
		
		redir("?p=transporte");
	

}

if(isset($eliminar)){
	$eliminar = clear($eliminar);
	$mysqli->query("DELETE FROM transporte WHERE id = '$eliminar'");

	redir("?p=transporte");
}

?>

<h1 class="h3 mb-0 text-gray-800">Agregar transporte</h1> <br>




<br>
<form method="post" action="">
	<div class="form-group">
		<input type="text" class="form-control" name="placa" placeholder="Placa"/>
	</div>
<form method="post" action="">
	<div class="form-group">
		<input type="text" class="form-control" name="codigo" placeholder="Codigo de vehiculo"/>
	</div>
	<form method="post" action="">
		<div class="form-group">
	    <select name="tipo" required class="form-control">
        <option value="">Tipo de vehiculo</option>   
        <option value="1">Camion Furgon Termoquin</option> 
        <option value="2">Motocarro Furgon</option>    
         <option value="3">Camioneta Furgon Termoquin</option>  
         <option value="4">Camion</option> 
         <option value="45">Camioneta</option> 
         <option value="6">Tractomula</option> 
         <option value="7">Motocicleta</option> 
             
        </select></div>
	
	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="enviar" value="Agregar Transportes"/>
	</div>
</form><br>
<br></form></form></div>