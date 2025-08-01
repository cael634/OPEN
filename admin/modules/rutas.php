<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<form method="POST" action="?p=rutas">
		<input type="checkbox" name="checkbox[]" value="1"> Futbol<br>
		<input type="checkbox" name="checkbox[]" value="2">Basquetbal<br>
		<input type="checkbox" name="checkbox[]" value="3">Patinaje<br>
		<input type="submit">
	</form>
</body>
<?php 
    
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_WARNING & ~E_NOTICE);
	$link =mysqli_connect("localhost","root","");
	if($link){
		mysqli_select_db($link , "open");
	}
	$checkbox=$_POST['checkbox'];
	foreach($checkbox as $llave => $valor) {
		$ficha2="INSERT INTO dia SET dia='$valor',ruta='$valor' ";
		$ejecutar_insertar_ficha2=mysqli_query($link , $ficha2);
	}

 ?>
</html>