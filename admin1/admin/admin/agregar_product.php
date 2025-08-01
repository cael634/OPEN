<?php
check_admin();
if(isset($enviar)){
	$name = clear($name);
	$price = clear($price);
	$oferta = clear($oferta);
    $categoria = clear($categoria);
	$imagen = "";
	$id_vendedor = clear($_SESSION['id_vendedor']);
	$canti = clear($canti);
	$pesv = clear($pesv);


	if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
		$imagen = $name.rand(0,1000).".png";
		move_uploaded_file($_FILES['imagen']['tmp_name'], "../productos/".$imagen);
	}
	
	$mysqli->query("INSERT INTO productos (name,price,imagen,oferta,id_categoria,id_vendedor,canti,pesv,impuesto) VALUES ('$name','$price','$imagen','$oferta','$categoria','$id_vendedor','$canti','$pesv','$iva')");
	
	redir("?p=agregar_producto");
}
if(isset($eliminar)){
	$mysqli->query("DELETE FROM productos WHERE id = '$eliminar'");
	redir("?p=agregar_producto");
}
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800">Agregar producto</h1> 
          </div>
           <br>

<form method="post" action="" enctype="multipart/form-data">
	<div class="form-group">
		<input type="text" class="form-control" name="name" placeholder="Nombre del producto"/>
	</div>


	<div class="form-group">
		<input type="text" class="form-control" name="price" placeholder="Precio del producto"/>
	</div>

	<div class="form-group">
		<input type="text" class="form-control" name="canti" placeholder="Peso neto o volumen"/>
	</div>

	<div class="form-group">
		<input type="text" class="form-control" name="pesv" placeholder="Cantidad de unidades"/>
	</div>
	<div class="form-group">
		<input type="number" class="form-control" name="iva" placeholder="Iva %"/>
	</div>

 
   <style>
   	textarea {
    overflow: auto;
    width: 100%;
    resize: vertical;
}
   </style>

	<label>Imagen del producto</label>

	<div class="form-group">
		<input type="file" class="form-controle" name="imagen" title="Imagen del producto" placeholder="Imagen del producto"/>
	</div>

  <style type="text/css">
  .h1, h1 {
    font-size: 2.5rem;
    color: #5a5c69!important;
}
.table {
    width: 100%;
    margin-bottom: 1rem;
    color: #5a5c69!important;
}
</style>
	<style>
.form-controle {
    display: block;
    width: 100%;
    height: calc(2.65rem + 2px);
    padding: 0.375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    box-shadow: inset 0 0 0 transparent;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}</style>

	<div class="form-group">

		<select name="categoria" required class="form-control">
			<option value="">Seleccione una categoria</option>
			<?php
				$q = $mysqli->query("SELECT * FROM categorias ORDER BY categoria ASC");
				while($r=mysqli_fetch_array($q)){
					?>
						<option value="<?=$r['id']?>"><?=$r['categoria']?></option>
					<?php 

				}
			?>

		</select>

	</div>

	<div class="form-group">
		<input type="number" class="form-control" name="oferta" placeholder="Descuento %"/>
	</div>
	<textarea name="comentarios" rows="10" cols="40">  Descripción del producto</textarea>

<br><br>
	<div class="form-group">
		<button type="submit" class="btn btn-success" name="enviar"><i class="fa fa-check"></i> Agregar Producto</button>
	</div>

</form><br>

<br>
<style type="text/css">
	label {
    display: inline-block;
    margin-bottom: .5rem;
    color: #0e0e0e!important;
}
.text-gray-800 {
    color: #0e0e0e!important;
}
</style>