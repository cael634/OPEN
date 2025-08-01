<!DOCTYPE html>
<?php 


$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];

if(!file_exists('archivos')){
	mkdir('archivos',0777,true);
	if(file_exists('archivos')){
		if(move_uploaded_file($guardado, 'productos/'.rand(0,1000000).$nombre)){
$mysqli->query("INSERT INTO compven (factura,descripcion) VALUES ('$archivo','$descripcion')");
  redir("?p=factura&id=$id&te=1");
  echo "Envio exitoso";
		}
	}
}else{
	if(move_uploaded_file($guardado, 'productos/'.rand(0,1000000).$nombre)){
	$mysqli->query("INSERT INTO compven (factura,descripcion) VALUES ('$archivo','$descripcion') ");
	  redir("?p=factura&id=$id&te=1");
	    echo "Envio exitoso";
	  
	}
}

?>
<html>
<head>
	<title></title>
</head>
<body>
<h1 style="color:black" class="h3 mb-0 text-gray-800">Información de facturación</h1>
<?php
if(isset($te)){
 ?>
<af style="color:green"><i class="far fa-check-circle"></i> Se envio correctamente</af> 
 <?php
}
?>
<br><label style="    color: black;
    font-size: 17px;
    font-weight: 500;">Cargar factura</label>
	<form action="" method="post" >
		<input type="file" name="archivo" >
		<br><br>
		<label style="    color: black;
    font-size: 17px;
    font-weight: 500;">Detalles de factuación o comentario sobre esta (opcional)</label>
		<textarea style="    overflow: auto;
    resize: vertical;
    width: 100%;
    height: 25%;
        border: 2px solid #d8dade; "name="descripcion">Detalles...</textarea><br><br>
		<button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" >Enviar información de facturación</button>
	</form>
</body>
</html>