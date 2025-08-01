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

<!DOCTYPE html>
<html lang="en">
 <h1 class="h3 mb-2 text-gray-800">Todos los pedidos y estadisticas</h1>

<nav id="primary_nav_wrap">
<ul>
  <li class="current-menu-item"><a href="?p=pedidos">Pedidos de Rutas</a></li>
  <li><a href="#"></a>
  
  <li><a href="?p=productospe">Cantidad por producto</a>
   
</ul>
</nav><br>
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
if($cat == 1){
     redir("?p=agregar_producto");
}
if($cat == 2){
     redir("?p=agregar_producto");
}

if($cat == 3){
  redir("?p=agregar_producto");
 
    }
if($cat == 4){
  redir("?p=agregar_producto");
 
    }
      
  


//$s = $mysqli->query("SELECT * FROM compVEN WHERE estado != 7 ");
if(isset($eliminar)){
  $eliminar = clear($eliminar);

$mysqli->query("DELETE FROM comraven WHERE id_compra = '$eliminar'");

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

      <option <?php if($cat == 0) { echo "selected"; } ?> value="0">Escoger lapso de tiempo por:</option>
      <option <?php if($cat == 1) { echo "selected"; } ?> value="1">Dia</option>
      <option <?php if($cat == 2) { echo "selected"; } ?> value="2">Semana</option>
      <option <?php if($cat == 3) { echo "selected"; } ?> value="3">Mes</option>
      <option <?php if($cat == 3) { echo "selected"; } ?> value="3">Año</option>

        

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

 
<!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <center>
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Earnings Overview  &nbsp &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;    <input type="submit" class="btn btn-primary" name="Despachado" value="Toatl de pedidos :  <?=$contador1?>" style="
    background-color: #1cc88a;
    border: aliceblue;
">
  </h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>
              </div></center>
            </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
           
            <div class="card-body">
              <div class="table-responsive">
               

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                  <thead>
                    <tr>
                      <th>Clientes</th>
                      <th>Ruta</th>
                      <th>Direccion</th>
                      <th>Estado</th>
                      <th>Fecha</th>
                      <th>Monto</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Clientes</th>
                      <th>Ruta</th>
                      <th>Direccion</th>
                      <th>Estado</th>
                      <th>Fecha</th>
                      <th>Monto</th>
                    </tr>
                  </tfoot>
                  <tbody>

<?php
                                                      
  while($r=mysqli_fetch_array($s)){
  $sl = $mysqli->query("SELECT * FROM compra WHERE id= '".$r['compra']."'");
  $rm = mysqli_fetch_array($sl);
  $sc = $mysqli->query("SELECT * FROM clientes  WHERE id = '".$rm['id_cliente']."'"); 
  $rc = mysqli_fetch_array($sc);
  $sw = $mysqli->query("SELECT * FROM clientev  WHERE id_cliente = '".$rm['id_cliente']."'"); 
  $rw = mysqli_fetch_array($sw);
  $cliente = $rc['name'];
  $ruta = $rw['ruta'];
  $direccion = $rc['direccion'];
  $fecha = fecha($r['fecha']);
?>
                    <tr>
                      <td><?=$cliente?></td>
                      <td><?=$ruta?></td>
                      <td><?=$direccion?></td>
                      <td><?=estado($r['estado'])?>
        <a  style="color:#08f" href="?p=manejar_tracking&eliminar=<?=$r['id']?>">
        <i class="fa fa-times"></i>
        </a>
        &nbsp; &nbsp;
        <a  style="color:#08f" href="?p=manejar_status&id=<?=$r['id']?>">
        <i class="fa fa-edit"></i>
        </a>
                             </td>
                      <td><?=$fecha?></td>
                      <td><?=number_format($r['monto'])?><?=$divisa?>
                         &nbsp; &nbsp;
        <a  style="color:#08f" href="?p=ver_compra&id=<?=$r['id']?>">
        <i class="fa fa-eye"></i>
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
