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
 <script src='https://code.jquery.com/jquery-1.10.2.js'></script>
<script src='https://code.jquery.com/ui/1.11.4/jquery-ui.js'></script><script  src="./scripta.js"></script>
<link rel='stylesheet' href='https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css'><link rel="stylesheet" href="./style.css">
<script src="../../code/highcharts.js"></script>
<script src="../../code/highcharts-3d.js"></script>
<script src="../../code/modules/exporting.js"></script>
<script src="../../code/modules/export-data.js"></script>
<script src="../../code/modules/accessibility.js"></script>
<!DOCTYPE html>
<html lang="en">
<?php
check_admin();
//0 apenas comprado
//1 preparando compra
//2 en camino
//3 despachado


$sq = $mysqli->query("SELECT * FROM compven WHERE estado = 0 AND id_vendedor = '".$_SESSION['id_vendedor']. "' AND ruta='$id'");

$contador1 = 0;
while($rq=mysqli_fetch_array($sq)){

$contador1 ++;}

  
$se = $mysqli->query("SELECT * FROM compven WHERE estado = 1 AND id_vendedor = '".$_SESSION['id_vendedor']. "' AND ruta='$id' ");
  
$contador2 = 0; 
while($re=mysqli_fetch_array($se)){

$contador2 ++;}


$sf = $mysqli->query("SELECT * FROM compven WHERE estado = 2 AND id_vendedor = '".$_SESSION['id_vendedor']. "' AND ruta='$id'");

$contador3 = 0;
while($rf=mysqli_fetch_array($sf)){

$contador3 ++;}
if($estado==0){
  ?>
 <h1 class="h3 mb-2 text-gray-800" style="padding: 0px 0px 7px;">Total de pedidos iniciados: <?=$contador1?></h1>
<?php
}
if($estado==1){
  ?>
 <h1 class="h3 mb-2 text-gray-800" style="padding: 0px 0px 7px;">Total de pedidos revisados: <?=$contador2?></h1>
 <?php
}
if($estado==2){
  ?>
 <h1 class="h3 mb-2 text-gray-800" style="padding: 0px 0px 7px;">Total de pedidos terminados: <?=$contador3?></h1>
 <?php
}

 
if(isset($diar)){

$fecha= "$diar";
#separas la fecha en subcadenas y asignarlas a variables
#relacionadas en contenido, por ejemplo dia, mes y anio.

$diax   = substr($fecha,8,2);
$mesx = substr($fecha,5,2);
$aniox = substr($fecha,0,4); 
$semana = date('W',  mktime(0,0,0,$mesx,$diax,$aniox));  
$diazz = date('N', strtotime($diar));

if($estado==0){
 $s = $mysqli->query("SELECT * FROM compven WHERE  DAY(fecha) = '$diax' AND estado=0 AND MONTH(fecha) = '$mesx' AND YEAR(fecha) = '$aniox'  AND id_vendedor = '".$_SESSION['id_vendedor']. "' AND ruta='$id'  "); 
}
if($estado==1){
 $s = $mysqli->query("SELECT * FROM compven WHERE  DAY(fecha) = '$diax' AND estado=1 AND MONTH(fecha) = '$mesx' AND YEAR(fecha) = '$aniox'  AND id_vendedor = '".$_SESSION['id_vendedor']. "' AND ruta='$id'"); 
}
if($estado==2){
$s = $mysqli->query("SELECT * FROM compven WHERE  DAY(fecha) = '$diax' AND estado=2 AND MONTH(fecha) = '$mesx' AND YEAR(fecha) = '$aniox'  AND id_vendedor = '".$_SESSION['id_vendedor']. "' AND ruta='$id'"); 
}

}else{
  if($estado==0){
 $s = $mysqli->query("SELECT * FROM compven WHERE estado=0 AND  id_vendedor = '".$_SESSION['id_vendedor']. "' AND ruta='$id' ");
 } 
if($estado==1){
  $s = $mysqli->query("SELECT * FROM compven WHERE estado=1 AND  id_vendedor = '".$_SESSION['id_vendedor']. "' AND ruta='$id' "); 
}
if($estado==2){
 $s = $mysqli->query("SELECT * FROM compven WHERE estado=2 AND  id_vendedor = '".$_SESSION['id_vendedor']. "' AND ruta='$id'"); 
}
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
         
         

<form method="post" action="" style="
    padding: 0px;
    margin: 1px;
">

       <div class="form-group" style="margin-bottom: 0.2rem;
    display: inline-flex;
    width: 25%;">
      <input  autocomplete="off" class="datepicker " name="diar" placeholder="Pulse para seleccionar dia " style="
    display: block;
    width: 215%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #6e707e;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #d1d3e2;
    border-radius: .35rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;" />
</div>
       <div class="form-group">

        <button type="submit" class="btn btn-prmiary" name="buscar" style="
    background: #29393a;
    color: white;
    width: 60%;
"><i class="fa fa-serch" ></i> Filtrar dia</button>

      
      </div><br>

       </form>



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
                      <th>Factura</th>
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
                      <th>Factura</th>
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
  $id_vendedor = $_SESSION['id_vendedor'];
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
                      <td  style="width: 140px;text-align: end"><?=number_format($r['monto'])?><?=$divisa?>
                         &nbsp; &nbsp;
        <a  style="color:#08f" href="?p=ver_compra&id=<?=$r['id']?>">
        <i class="fa fa-eye"></i>
        </a>

                      </td>
                      <td><center><a href="modulos/index.php?id=<?php echo $r['id'];?>&id_vendedor=<?php echo $id_vendedor;?>"><i class="fas fa-file-invoice-dollar"></center></i></a></td>
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
 


  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
