<style type="text/css">
  .col-lg-9 {
    flex: 0 0 100%;
    max-width: 100%;
}
.col-xl-8 {
    flex: 0 0 100%;
    max-width: 100%;
}
.card-header:first-child {
    border-radius: calc(.35rem - 1px) calc(.35rem - 1px) 0 0;
    display: none;
}
.card-divider {
    height: 2px;
    background: #f0f0f0;
    display: none;
}
select.form-control, select.form-control:valid, select.form-control.is-valid, select.form-control:invalid, select.form-control.is-invalid {
    background-image: none;
    background-repeat: no-repeat;
    background-size: 5px 10px;
}
.mb-4, .my-4 {
    margin-bottom: 1rem!important;
}
.form-control:valid, .form-control.is-valid, .form-control:invalid, .form-control.is-invalid {
    background-image: none;
    display: initial!important;
}
.form-group {
    display: flex;
    margin-bottom: 1rem;
}
label {
    display: inline-block;
    margin-bottom: .5rem;
    color: #0e0e0e!important;
    /* height: 30px; */
    width: 210px;
}
</style>
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
	$comentario = clear($comentario);


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
 <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Agregar Transporte</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-body">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-lg-10 col-xl-8">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800">Agregar producto</h1> 
          </div>
           <br>

<form method="post" action="" enctype="multipart/form-data">

	<div class="form-group">
      <label>*Nombre del producto</label>
		<input type="text" class="form-control" name="name" placeholder="Nombre del producto"/>
	</div>


	<div class="form-group">
    <label>*Precio del producto</label>
		<input type="number" class="form-control" name="price" placeholder="Precio del producto"/>
	</div>

	<div class="form-group">
    <label>Peso neto o volumen</label>
		<input type="text" class="form-control" name="canti" placeholder="Peso neto o volumen"/>
	</div>

	<div class="form-group">
    <label>Cantidad de unidades</label>
		<input type="number" class="form-control" name="pesv" placeholder="Cantidad de unidades"/>
	</div>
	<div class="form-group">
    <label>Iva</label>
		<input type="number" class="form-control" name="iva" placeholder="Iva %"/>
	</div>

 
   <style>
   	textarea {
    overflow: auto;
    width: 100%;
    resize: vertical;
}
   </style>



	<div class="form-group" >
      <label style="    width: 173px;">*Imagen del producto</label>
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
    width: 40%!important;
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
<label>*Seleccion de categoria</label>
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
    <label>Porcentaje de oferta</label>
		<input type="number" class="form-control" name="oferta" placeholder="Descuento %"/>
	</div>


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