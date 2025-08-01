<?php 


$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];

if(!file_exists('archivos')){
	mkdir('archivos',0777,true);
	if(file_exists('archivos')){
		if(move_uploaded_file($guardado, 'productos/'.rand(0,1000000).$nombre)){
$mysqli->query("INSERT INTO compven (facturas,descipcion) VALUES ('$nombre','$descripción') WHERE id='$id'");
  redir("?p=factura&id='$id'&te=1");
  echo "Envio exitoso";
		}else{
			echo "Archivo no se pudo guardar";
		}
	}
}else{
	if(move_uploaded_file($guardado, 'productos/'.rand(0,1000000).$nombre)){
	$mysqli->query("INSERT INTO compven (facturas,descipcion) VALUES ('$nombre','$descripción') WHERE id='$id'");
	  redir("?p=factura&id='$id'&te=1");
	    echo "Envio exitoso";
	  
	}else{
		echo "Archivo no se pudo guardar";
	}
}

?>