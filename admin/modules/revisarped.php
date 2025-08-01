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
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
 <?php

    $sc = $mysqli->query("SELECT * FROM rutas WHERE id = $id AND id_vendedor = '".$_SESSION['id_vendedor']. "'"); 
    $rc = mysqli_fetch_array($sc);

    ?>
<html lang="en">
 <h1 class="h3 mb-2 text-gray-800">Revision de pedidos  <?=$rc['rutas']?></h1>

<nav id="primary_nav_wrap">
<ul>
  <li class="current-menu-item"><a href="?p=revisarped&id=<?=$id?>&semana=<?=$semana?>">Pedidos de esta ruta</a></li>

  <li><a href="?p=productosper&id=<?=$id?>&semana=<?=$semana?>">Cantidad por producto de  esta ruta</a>
   
</ul>
</nav><br>
<?php

check_admin();
//0 apenas comprado
//1 preparando compra
//2 en camino
//3 despachado


$se = $mysqli->query("SELECT * FROM compven WHERE estado < 2 AND ruta = '$id' AND semana = '$semana'AND id_vendedor = '".$_SESSION['id_vendedor']. "' ");

$contador1 = 0;
while($re=mysqli_fetch_array($se)){

$contador1 ++;}

  
$se = $mysqli->query("SELECT * FROM compven WHERE estado = 1 AND ruta = '$id' AND semana = '$semana'AND id_vendedor = '".$_SESSION['id_vendedor']. "' ");
  
$contador2 = 0; 
while($re=mysqli_fetch_array($se)){

$contador2 ++;}


$sf = $mysqli->query("SELECT * FROM compven WHERE estado = 0 AND ruta = '$id' AND semana = '$semana'AND id_vendedor = '".$_SESSION['id_vendedor']. "' ");

$contador3 = 0;
while($rf=mysqli_fetch_array($sf)){

$contador3 ++;}




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
#primary_nav_wrap
{
  margin-top:15px
}

#primary_nav_wrap ul
{
  list-style:none;
  position:relative;
  float:left;
  margin:0;
  padding:0
}

#primary_nav_wrap ul a
{
  display:block;
  color:#333;
  text-decoration:none;
  font-weight:700;
  font-size:12px;
  line-height:32px;
  padding:0 15px;
  font-family:"HelveticaNeue","Helvetica Neue",Helvetica,Arial,sans-serif
}

#primary_nav_wrap ul li
{
  position:relative;
  float:left;
  margin:0;
  padding:0
}

#primary_nav_wrap ul li.current-menu-item
{
  background:#ddd
}

#primary_nav_wrap ul li:hover
{
  background:#f6f6f6
}

#primary_nav_wrap ul ul
{
  display:none;
  position:absolute;
  top:100%;
  left:0;
  background:#fff;
  padding:0
}

#primary_nav_wrap ul ul li
{
  float:none;
  width:200px
}

#primary_nav_wrap ul ul a
{
  line-height:120%;
  padding:10px 15px
}

#primary_nav_wrap ul ul ul
{
  top:0;
  left:100%
}

#primary_nav_wrap ul li:hover > ul
{
  display:block
}
</style>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
       

          <!-- Page Heading -->
         
         <br>

<form method="post" action="">
    <div class="row">
      
    
     
    </div>
  </form>
 
  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="Despachado" value="Pedidos :  <?=$contador1?>" style="
    background-color: #1cc88a;
    border: aliceblue;
">
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="Despachado" value="Revisados :  <?=$contador2?>" style="
    background-color: #4e73df;
    border: aliceblue;
"></div>

<div class="form-group">
    <input type="submit" class="btn btn-primary" name="Despachado" value="Sin revisar :  <?=$contador3?>" style="
    background-color: #e74a3b;
    border: aliceblue;
">
  </div>
 <?php
check_admin();
$id = clear($id);


    $s = $mysqli->query("SELECT * FROM clientev WHERE ruta = '$id' AND id_vendedor = '".$_SESSION['id_vendedor']. "'");

?>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
           
            <div class="card-body">
              <div class="table-responsive">
               

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
        <th>N° Orden</th>
        <th>Cliente</th>
        <th>Monto Total</th>
        <th>Dirección</th>
        <th>Estado</th>
      
        
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
        <th>N° Orden</th>
        <th>Cliente</th>
        <th>Monto Total</th>
        <th>Dirección</th>
        <th>Estado</th>
      
        
                    </tr>
                  </tfoot>
                  <tbody>

                   

 <?php
   $se = $mysqli->query("SELECT * FROM compven WHERE estado < 2 AND ruta = '".$rc['id']."' AND semana = '$semana' AND id_vendedor = '".$_SESSION['id_vendedor']. "' ");
    $contador3= 0;
    $id_vendedor = $_SESSION['id_vendedor'];

    while($re=mysqli_fetch_array($se)){    
    $compra = $re['compra'];
    $sy = $mysqli->query("SELECT * FROM compra WHERE id = '$compra'"); 
    $ry = mysqli_fetch_array($sy);
    $id_cliente = $ry['id_cliente'];
    $sw = $mysqli->query("SELECT * FROM clientes WHERE id = '$id_cliente'"); 
    $rw = mysqli_fetch_array($sw);

    $contador3 ++;
    $idc = $re['id'];
    $monto = $re['monto'];
    $name = $rw['name'];
    
 
    
    ?>
                <tr>
                    <td><a href="?p=ver_compra&id=<?=$idc?>"><?=$idc?></a> </td>
                    <td>
                      <?=$name?> 
                    </td>
                    <td>$ <?=number_format($monto)?></td>
                    <td><?=$rw['direccion']?></td>
                    <td>  <a  style="color:#08f" href="?p=manejar_status&id=<?=$idc?>"><?=estado($re['estado'])?>
                     
                     </a>
                      </td>
                      
                    
    

                  
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
