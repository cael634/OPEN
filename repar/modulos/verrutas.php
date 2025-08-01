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

div.table-responsive>div.dataTables_wrapper>div.row>div[class^="col-"]:last-child {
    padding-right: 0;
    width: auto;
}
div.table-responsive>div.dataTables_wrapper>div.row>div[class^="col-"]:first-child {
    padding-left: 0;
    width: auto;
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
check_repartidor();
//0 apenas comprado
//1 preparando compra
//2 en camino
//3 despachado
 $mes=date('m');
 $anio=date('Y');
 $diare= date('d');

$semanak=date('W');
$contador2=0;
$contador1=0;
$contador3=0;
$s78 = $mysqli->query("SELECT * FROM seguimiento WHERE id = '".$_SESSION['id_repartidor']. "'");
$r78 = mysqli_fetch_array($s78);
$s52 = $mysqli->query("SELECT * FROM respartirutas WHERE repartidor = '".$_SESSION['id_repartidor']. "' ");
while($r52=mysqli_fetch_array($s52)){
$id_vendedor = $r78['id_vendedor'];
$rutaen= $r52['ruta'];

$contador1 = 0;  
$s1 = $mysqli->query("SELECT * FROM compven WHERE id_vendedor= '$id_vendedor'  AND ruta = '$rutaen' AND estado>0 AND semana='$semanak'  ");
while($r1=mysqli_fetch_array($s1)){
$contador1 ++;}

$contador2 = 0;  
$s3 = $mysqli->query("SELECT * FROM compven WHERE id_vendedor= '$id_vendedor'  AND ruta = '$rutaen' AND estado= 1 AND semana='$semanak' ");
while($r3=mysqli_fetch_array($s3)){
$contador2 ++;}

$contador3 = 0;
$s5 = $mysqli->query("SELECT * FROM compven WHERE id_vendedor= '$id_vendedor'  AND ruta = '$rutaen' AND estado= 2 AND semana='$semanak' ");
while($r5=mysqli_fetch_array($s5)){
$contador3 ++;}

}

if($estado==0){
  ?>
 <h1 class="h3 mb-2 text-gray-800" style="padding: 0px 0px 7px;">Todos los pedidos: <?=$contador1?></h1>
<?php
}
if($estado==1){
  ?>

 <h1 class="h3 mb-2 text-gray-800" style="padding: 0px 0px 7px;">Pedidos faltantes: <?=$contador2?></h1>
 <?php
}
if($estado==2){
  ?>
 <h1 class="h3 mb-2 text-gray-800" style="padding: 0px 0px 7px;">Pedidos entregados: <?=$contador3?></h1>
 <?php
}

 
if(isset($diar)){
$s78 = $mysqli->query("SELECT * FROM seguimiento WHERE id = '".$_SESSION['id_repartidor']. "'");
$r78 = mysqli_fetch_array($s78);
$id_vendedor = $r78['id_vendedor'];
$fecha= "$diar";
#separas la fecha en subcadenas y asignarlas a variables
#relacionadas en contenido, por ejemplo dia, mes y anio.

$diax   = substr($fecha,8,2);
$mesx = substr($fecha,5,2);
$aniox = substr($fecha,0,4); 
$semana = date('W',  mktime(0,0,0,$mesx,$diax,$aniox));  
$diazz = date('N', strtotime($diar));

if($estado==0){
$s = $mysqli->query("SELECT * FROM compven WHERE id_vendedor= '$id_vendedor'  AND ruta = '$rutaen' AND estado>0 AND semana='$semanak' "); 
}
if($estado==1){
$s = $mysqli->query("SELECT * FROM compven WHERE id_vendedor= '$id_vendedor'  AND ruta = '$rutaen' AND estado= 1 AND semana='$semanak' "); 
}
if($estado==2){
$s = $mysqli->query("SELECT * FROM compven WHERE id_vendedor= '$id_vendedor'  AND ruta = '$rutaen' AND estado= 2 AND semana='$semanak' "); 
}
}else{

if($estado==0){  
$s = $mysqli->query("SELECT * FROM compven WHERE id_vendedor= '$id_vendedor'  AND ruta = '$rutaen' AND estado>0 AND semana='$semanak' "); 
}
if($estado==1){
$s = $mysqli->query("SELECT * FROM compven WHERE id_vendedor= '$id_vendedor'  AND ruta = '$rutaen' AND estado= 1 AND semana='$semanak' "); 
}
if($estado==2){
$s = $mysqli->query("SELECT * FROM compven WHERE id_vendedor= '$id_vendedor'  AND ruta = '$rutaen' AND estado= 2 AND semana='$semanak' "); 
}
}
//$s = $mysqli->query("SELECT * FROM compVEN WHERE estado != 7 ");
if(isset($eliminar)){
  $eliminar = clear($eliminar);

$mysqli->query("DELETE FROM comrpven WHERE id_compra = '$eliminar'");

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


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
           
            <div class="card-body">
              <div class="table-responsive">
               

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Datos</th>
                      <th>Monto</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Datos</th>
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
                      <td style="min-width: 50px;display: table-cell;vertical-align: middle;"><a  style="color:#08f" href="?p=ver_compra&id=<?=$r['id']?>"># <?=$r['id']?></a></td>
                      
                    
                      <td style="min-width: 130px;display: table-cell;vertical-align: middle;"><?=$direccion?><br>• <?=$cliente?></td>
                      <td style="min-width: 80px;display: table-cell;vertical-align: middle;"><?=$divisa?><?=number_format($r['monto'])?></td>
        
     
                     
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
