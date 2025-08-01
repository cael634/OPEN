<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>


  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
<style type="text/css">
  .col-lg-9 {
    flex: 0 0 100%;
    max-width: 100%;
}
.col-xl-8 {
    flex: 0 0 100%;
    max-width: 100%;
}
.shadow {
    box-shadow: none!important;
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
   $qe4 = $mysqli->query("SELECT * FROM productos ORDER BY id DESC  LIMIT 1");
  $re4 = mysqli_fetch_array($qe4);
  $rqa = $mysqli->query("SELECT * FROM clientev WHERE id_vendedor='$id_vendedor'");
  while($rla=mysqli_fetch_array($rqa)){
    $mysqli->query("INSERT INTO notificacion (id_cliente,id_vendedor,tipo,id_producto,clientev) VALUES ('".$rla['id_cliente']."','$id_vendedor',1,'".$re4['id']."','".$rla['id']."')");
  } 
  $mysqli->query("INSERT INTO productosemp (name,imagen,oferta,id_categoria,id_vendedor,canti,pesv,tipo1,tipo2,tipo3,tipo4,tipo5,tipo6,numstock,stock) VALUES ('$name','$imagen','$oferta','$categoria','$id_vendedor','$canti','$pesv','$tipo1','$tipo2','$tipo3','$tipo4','$tipo5','$tipo6','$numstock','$stock')");

  redir("?p=agregar_producto");
}
if(isset($eliminar)){
  $mysqli->query("DELETE FROM productosemp WHERE id = '$eliminar'");
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
 <!--
">Precio del producto</label>-->
  <div class="form-group">
      <label>Precio del producto</label>
    <input type="text" class="form-control" name="name" placeholder="Precio del producto"/>
  </div><!--
        <div class="row">
      
       <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
          
      
      <div class="form-group">
     <input type="number" class="form-control" name="tipo1"placeholder="Precio para Tiendas"/>
       

    </select>

  </div>
      </div>
      <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
     <input type="number" class="form-control" name="tipo2"placeholder="Precio para Minimarkets"/>
      </div>

    <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
       <input type="number" class="form-control" name="tipo3"placeholder="Precio para Supermecados"/>
      </div>
         <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
       <input type="number" class="form-control" name="tipo4"placeholder="Precio para resturantes"/>
      </div>
  
    
    </div><br>
            <div class="row">
      
       <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
      <div class="form-group">
     <input type="number" class="form-control" name="tipo5"placeholder="Precio para Mayoristas y/o distribuidores"/>
       

    </select>

  </div>
      </div>
      <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
     <input type="number" class="form-control" name="tipo6"placeholder="Precio para clientes particulares"/>
      </div>


  
   
    </div>-->
    <br>




  <div class="form-group">
    <label>Peso neto o volumen</label>
    <input type="text" class="form-control" name="canti" placeholder="Peso neto o volumen"/>
  </div>

  <div class="form-group">
    <label>Cantidad de unidades por paquete</label>
    <input type="number" class="form-control" name="pesv" placeholder="Cantidad de unidades"/>
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
  .block-slideshow--layout--full .block-slideshow__slide-button {
    margin-top: 20px!important;
}
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
    <label>Porcentaje de oferta (%)</label>
    <input type="number" class="form-control" name="oferta" placeholder="Descuento %"/>
  </div>
 <div class="form-group">
<label>¿Amostrara el stock este producto?<br> (se restara automaticamente)</label>
    <select name="stock" required class="form-control">
      <option value="">Seleccione una respuesta</option>
     
            <option value="1">Si</option></option>
            <option value="2">No</option>
         

    </select>

  </div>

  <div class="form-group">
    <label>Número de unidades (puede cambiar el valor en cualquier momento)</label>
    <input type="number" class="form-control" name="numstock" placeholder="Número de unidades disponibles"/>
  </div>


<asd style="color:black;">Elige el tipo de clientes a los cuales va dirigido este producto</asd>
  <br><br>
<label class="content-input">
	<input type="checkbox" name="tienda1" id="autopista" value="1">Tienda de Barrio
	<i></i>
</label>
<label class="content-input">
	<input type="checkbox" name="tienda2" id="autopista" value="1">Minimarket
	<i></i>
</label>
<label class="content-input">
	<input type="checkbox" name="tienda3" id="autopista" value="1">Supermercado
	<i></i>
</label>
<label class="content-input">
	<input type="checkbox" name="tienda4" id="autopista" value="1">Mayorista
	<i></i>
</label>
<style>
    .content-input{
	position: relative;
	margin-bottom: 30px;
	padding:5px 0 5px 60px; /* Damos un padding de 60px para posicionar 
        el elemento <i> en este espacio*/
	display: block;
}
 
/* Estas reglas se aplicarán a todos las elementos i 
después de cualquier input*/
.content-input input + i{
       background: #f0f0f0;
       border:2px solid rgba(0,0,0,0.2);
       position: absolute; 
       left: 0;
       top: 0;
}
 .content-input input[type=checkbox] + i:before{
	content: ''; /* No hay contenido */
	width: 26px;
	height: 26px;
	background: #fff;
	border-radius: 50%;
	position: absolute;
	z-index: 1;
	left: 0px;
	top: 0px;
	-webkit-box-shadow: 3px 0 3px 0 rgba(0,0,0,0.2);
	box-shadow: 3px 0 3px 0 rgba(0,0,0,0.2);
}
.content-input input[type=checkbox]:checked + i:before{
	left: 22px;
	-webkit-box-shadow: -3px 0 3px 0 rgba(0,0,0,0.2);
	box-shadow: 3px 0 -3px 0 rgba(0,0,0,0.2);
}
 input[type=checkbox], input[type=radio] {
    box-sizing: border-box;
    padding: 0;
    display: none!important;
}


.content-input input[type=checkbox]:checked + i{
 background: #2AC176;
}
/* Estas reglas se aplicarán a todos los i despues 
de un input de tipo checkbox*/
.content-input input[type=checkbox ] + i{
	width: 52px;
	height: 30px;
	border-radius: 15px;
}
</style>
  <div class="form-group">
    <button type="submit" class="btn btn-success" name="enviar"><i class="fa fa-check"></i> Agregar Producto</button>
  </div>

</form>




</div></div>
</div>
</div>
</div>
<br>
<!--
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
           <h1 class="h3 mb-0 text-gray-800">Agregar Ofertas</h1> 
          </div>
           <br>

<form method="post" action="" enctype="multipart/form-data">
1).Oferta
<br>
  <div class="form-group">
      <label  style="    width: 300px;">* Si compra este producto por la cantidad mayor a</label>&nbsp;&nbsp;
    <input type="number" class="form-control" name="name21" placeholder="Cantidad de este producto para aplicar esta promoción"/>
  </div>


  <div class="form-group">
    <label style="    width: 300px;">* El descuento de las unidades sera (%) </label>&nbsp;&nbsp;
    <input type="number" class="form-control" name="price12" placeholder="Descuento por unidad"/>
  </div>
 2).Oferta
 <br>
  <div class="form-group">
      <label  style="    width: 300px;">* Si compra este producto por la cantidad de</label>&nbsp;&nbsp;
    <input type="number" class="form-control" name="name21" placeholder="Cantidad de este producto para aplicar esta promoción"/>
  </div>


  <div class="form-group">
    <label style="    width: 300px;">* Lleva gratis este numero de unidades </label>&nbsp;&nbsp;
    <input type="number" class="form-control" name="price12" placeholder="Cantidad de unidades adicionales sin costo"/>
  </div>
* Para conocer más tipos de ofertas, busque desde el panel de productos en la parte superior derecha.



   <style>
    textarea {
    overflow: auto;
    width: 100%;
    resize: vertical;
}
   </style>




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






  <br><br>

  <div class="form-group">
    <button type="submit" class="btn btn-success" name="enviar"><i class="fa fa-check"></i> Agregar Oferta</button>
  </div>
 -->
</form><br>
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