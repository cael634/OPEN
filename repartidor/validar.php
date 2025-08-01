<?php 
    

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
