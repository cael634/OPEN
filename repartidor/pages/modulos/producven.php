<style type="text/css">
  .sidebar {
    width: 6.5rem;
    background-color: #36373a;
    min-height: 100vh;
}
.card-body {
    flex: 1 1 auto;
    padding: 1.25rem;
    color: #292a2d;
}
table.dataTable {
    clear: both;
    margin-top: 6px !important;
    margin-bottom: 6px !important;
    max-width: none !important;
    border-collapse: separate !important;
    color: #292a2d;
    border-spacing: 0;
}
.h1, h1 {
    font-size: 1.2rem;
}
.text-gray-600 {
    color: #5a5c69!important;
}
</style>
<!DOCTYPE html>
<html lang="en">
 <h1 class="h3 mb-2 text-gray-800">Pedidos por cada producto</h1>

<?php

check_admin();
//0 apenas comprado
//1 preparando compra
//2 en camino
//3 despachado


$sq = $mysqli->query("SELECT * FROM compven WHERE estado = 0 AND id_vendedor = '".$_SESSION['id_vendedor']. "' ");

$contador1 = 0;
while($rq=mysqli_fetch_array($sq)){

$contador1 ++;}

  
$se = $mysqli->query("SELECT * FROM compven WHERE estado = 2 AND id_vendedor = '".$_SESSION['id_vendedor']. "' ");
  
$contador2 = 0; 
while($re=mysqli_fetch_array($se)){

$contador2 ++;}


$sf = $mysqli->query("SELECT * FROM compven WHERE estado = 3 AND id_vendedor = '".$_SESSION['id_vendedor']. "' ");

$contador3 = 0;
while($rf=mysqli_fetch_array($sf)){

$contador3 ++;}
if(isset($busq) && isset($cat)){
  $q = $mysqli->query("SELECT * FROM productos WHERE name like '%$busq%' AND id_categoria = '$cat'");
}elseif(isset($cat) && !isset($busq)){
  $q = $mysqli->query("SELECT * FROM productos WHERE id_categoria = '$cat' ORDER BY id DESC");
}elseif(isset($busq) && !isset($cat)){
  $q = $mysqli->query("SELECT * FROM productos WHERE name like '%$busq%'");
}elseif(!isset($busq) && !isset($cat)){
  $q = $mysqli->query("SELECT * FROM productos ORDER BY id DESC");
}else{
  $q = $mysqli->query("SELECT * FROM productos ORDER BY id DESC");
}
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_WARNING & ~E_NOTICE);
$año = date("Y");
if($cat == 0){
$s = $mysqli->query("SELECT * FROM rutas WHERE dia = 1 AND id_vendedor = '".$_SESSION['id_vendedor']. "' ");  
}
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_WARNING & ~E_NOTICE);
$dia = date("d");
if($cat == 1){
$s = $mysqli->query("SELECT * FROM rutas WHERE  dia = 2   AND id_vendedor = '".$_SESSION['id_vendedor']. "' "); 
}

$ayer = date("now()),date(date(now())-1");
if($cat == 2){
$s = $mysqli->query("SELECT * FROM rutas WHERE  dia = 3  AND id_vendedor = '".$_SESSION['id_vendedor']. "' "); 
}

$semana = date("W");
if($cat == 3){
$s = $mysqli->query("SELECT * FROM rutas WHERE dia = 4  AND id_vendedor = '".$_SESSION['id_vendedor']. "' ");
  
}

$mes = date("n");
if($cat == 4){
$s = $mysqli->query("SELECT * FROM rutas WHERE dia = 5  AND id_vendedor = '".$_SESSION['id_vendedor']. "' ");  
}

if($cat == 5){
$s = $mysqli->query("SELECT * FROM rutas WHERE id_vendedor = '".$_SESSION['id_vendedor']. "' ");
  
}

//$s = $mysqli->query("SELECT * FROM compVEN WHERE estado != 7 ");
if(isset($eliminar)){
  $eliminar = clear($eliminar);

$mysqli->query("DELETE FROM productos_compra WHERE id_compra = '$eliminar'");

  $mysqli->query("DELETE FROM compra WHERE id = '$eliminar'");
  redir("?p=manejar_tracking");
}
?>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Tables</title>


  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
<style type="text/css">
  .form-group {
    margin-bottom: 1rem;
    display: inline-block;
    width: 20%;
}
</style>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
       

          <!-- Page Heading -->
         
         <br>

<form method="post" action="">
    <div class="row">
      
      <div class="col-md-5">
        <select id="categoria" name="cat" class="form-control">

      <option <?php if($cat == 0) { echo "selected"; } ?> value="0">Hoy</option>
      <option <?php if($cat == 1) { echo "selected"; } ?> value="1">Lunes</option>
      <option <?php if($cat == 2) { echo "selected"; } ?> value="2">Martes</option>
      <option <?php if($cat == 3) { echo "selected"; } ?> value="3">Miercoles</option>
      <option <?php if($cat == 4) { echo "selected"; } ?> value="4">Jueves</option>
      <option <?php if($cat == 3) { echo "selected"; } ?> value="5">Viernes</option>
      <option <?php if($cat == 3) { echo "selected"; } ?> value="5">Sabado</option>
      <option <?php if($cat == 3) { echo "selected"; } ?> value="5">Domingo</option>

        

        </select>
      </div>
      <div class="col-md-2">
        <button type="submit" class="btn btn-prmiary" name="buscar" style="
    background: cadetblue;
    color: white;
"><i class="fa fa-serch"></i> Filtrar</button>
      </div>
    </div>
  </form>
  <br>
  <?php
  if(isset($cat)){
  if($cat == 1){
    
  echo 'Filtrado por: Hoy';
?>
<br><br>
<?php
}

 if($cat == 2){
   
  echo 'Filtrado por: Ayer';
  ?>
<br><br>
<?php
}

 if($cat == 3){
  
  echo 'Filtrado por: Esta semana';
  ?>
<br><br>
<?php
}

 if($cat == 4){
 
  echo 'Filtrado por: Este mes';
  ?>
<br><br>
<?php
}
 if($cat == 5){
   ?>


<?php
  echo 'Filtrado por: Todos';
 ?>
<br><br>
<?php

}
  ?>
  
  <?php
}?>


  
 
<div class="form-group">
    <input type="submit" class="btn btn-primary" name="Despachado" value="Total de pedidos :  <?=$contador1?>" style="
    background-color: #1cc88a;
    border: aliceblue;
">
  </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
           
            <div class="card-body">

              <div class="table-responsive">
               

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                  <thead>
                  
                    <tr>
        <th>Producto</th>
        <th>Cantiadad de producto vendido</th>
        <th>Monto Total</th>
        <th>Promedio por cada vendedor</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
        <th>Producto</th>
        <th>Cantiadad de producto vendido</th>
        <th>Monto Total</th>
        <th>Promedio por cada vendedor</th>
                    </tr>
                  </tfoot>
                  <tbody>

                   

<?php
  $dia = date("d");
  $semana = date("W");
  $id_vendedor = clear($_SESSION['id_vendedor']);
  $name_admin = admin_name_connected( $_SESSION['id_vendedor']);
$re = $mysqli->query("SELECT * FROM productos WHERE id_vendedor = '$id_vendedor'");
while ($rz = mysqli_fetch_array($re)){
$wn = mysqli_fetch_array($we);
$sq = $mysqli->query("SELECT * FROM rutas WHERE id_vendedor = '$id_vendedor' AND  dia = $dia");
$rq = mysqli_fetch_array($sq);
$qt = $mysqli->query("SELECT * FROM compven WHERE id_vendedor = '$id_vendedor'AND semana = $semana AND ruta = '".$rq['ruta']."'");
$rt = mysqli_fetch_array($qt);
$id_producto = $rc['id_producto'];
$qt = $mysqli->query("SELECT * FROM productos_compra WHERE id_vendedor = '$id_vendedor'AND id_producto = '$id_producto' AND id_compra = '".$rz['id']."'");
$contadore = 0;
$cant = 0;
$cante= 0;
$monto_total = 0;
while($rt=mysqli_fetch_array($qt)){
$rt = mysqli_fetch_array($qt);
$cant = $cant + $rt['cant'];
$monto_total = $monto_total = $rt['cant'];
$contadore ++;
$cante= $contadore/ $cant;
}

      ?>

            
                <tr>
                    <td><?=$rz['name']?></td>
                    <td><?=$cant?></td>             
                    <td><?=$monto_total?></td>
                    <td><?=$cante?></td>
                </tr>
            <?php
        }
    ?>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

    
      <!-- End of Main Content -->

      <!-- Footer -->
    
      <!-- End of Footer -->

  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->


  <!-- Logout Modal-->
 

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
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

</body>

</html>
