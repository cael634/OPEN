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
div.table-responsive>div.dataTables_wrapper>div.row>div[class^="col-"]:last-child {
    padding-right: 0;
    width: auto;
}
div.table-responsive>div.dataTables_wrapper>div.row>div[class^="col-"]:first-child {
    padding-left: 0;
    width: auto;
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
 <h1 class="h3 mb-2 text-gray-800" style="padding: 0px 0px 5px;">Buscar pedidos</h1>

<?php

//0 apenas comprado
//1 preparando compra
//2 en camino
//3 despachado
    if(isset($diar)){

$fecha= "$diar";
#separas la fecha en subcadenas y asignarlas a variables
#relacionadas en contenido, por ejemplo dia, mes y anio.

$diare   = substr($fecha,8,2);
$mes = substr($fecha,5,2);
$anio = substr($fecha,0,4); 

$diazz = date('N', strtotime($diar));


}else{
 $mes=date('m');
 $anio=date('Y');
 $diare= date('d');
}
$contador1 = 0;  
$s1 = $mysqli->query("SELECT * FROM compven WHERE estado>0  AND ruta='".$_SESSION['id_repartidor']. "'");
while($r1=mysqli_fetch_array($s1)){
$s2 = $mysqli->query("SELECT * FROM entregafecha WHERE compven='".$r1['id']."' AND MONTH(fecha)=$mes AND YEAR(fecha)=$anio AND DAY(fecha)=$diare ");                             
while($r2=mysqli_fetch_array($s2)){
$contador1 ++;
}}

$contador2 = 0;  
$s3 = $mysqli->query("SELECT * FROM compven WHERE estado=1  AND ruta='".$_SESSION['id_repartidor']. "'");
while($r3=mysqli_fetch_array($s3)){
$s4 = $mysqli->query("SELECT * FROM entregafecha WHERE compven='".$r3['id']."' AND MONTH(fecha)=$mes AND YEAR(fecha)=$anio AND DAY(fecha)=$diare ");                             
while($r4=mysqli_fetch_array($s4)){

$contador2 ++;}}

$contador3 = 0;
$s5 = $mysqli->query("SELECT * FROM compven WHERE estado=2  AND ruta='".$_SESSION['id_repartidor']. "'");
while($r5=mysqli_fetch_array($s5)){
$s6 = $mysqli->query("SELECT * FROM entregafecha WHERE compven='".$r5['id']."' AND MONTH(fecha)=$mes AND YEAR(fecha)=$anio AND DAY(fecha)=$diare ");                             
while($r6=mysqli_fetch_array($s6)){
$contador3 ++;
}}


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
    margin-bottom: 0.7rem;
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
    width: 67%;">
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
    width: 160%;
"><i class="fa fa-serch" ></i> Filtrar </button>

      
      </div><br>

       </form>

  <div class="form-group" style="
    width: 27%!important;">
 
    <input  type="submit" class="btn btn-primary" name="Despachado" value="Total :  <?=$contador1?>" style="
    background-color: #1cc88a;
    border: aliceblue;
    font-size: 14px;
        padding: 0px 13px 0px 12px;
">
  </div>
  <div class="form-group" style="
    width: 36%!important;">
     
    <input  type="submit" class="btn btn-primary" name="Finalizado" value="Entregados: <?=$contador2?>" style="
    background-color: #36b9cc;
    border: aliceblue;
   font-size: 14px;
       padding: 0px 13px 0px 12px;
">
  </div>
  <div class="form-group" style="
    width: 32%!important;">
   <input   type="submit" class="btn btn-primary" name="Sin entregar" value="Terminados : <?=$contador3?>" style=" font-size: 14px;    padding: 0px 13px 0px 12px;"/>
  </div>



   <div class="card shadow mb-4">
           
            <div class="card-body">
              <div class="table-responsive">
               

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                  <thead>
                    <tr>
                      <th>Orden</th>
                      <th>Direccion</th>
                      <th>Estado</th>
                      <th>Clientes</th>
                      <th>Fecha</th>
                      <th>Monto</th>
                      <th>Factura</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Orden</th>
                      <th>Direccion</th>
                      <th>Estado</th>
                      <th>Clientes</th>
                      <th>Fecha</th>
                      <th>Monto</th>
                      <th>Factura</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    if(isset($diar)){
                   if($diazz==0){
                     $diazz='Domingo';
                   }
                   if($diazz==1){
                     $diazz='Lunes';
                   }
                   if($diazz==2){
                     $diazz='Martes';
                   }
                   if($diazz==3){
                     $diazz='Miercoles';
                   }
                   if($diazz==4){
                     $diazz='Jueves';
                   }
                   if($diazz==5){
                     $diazz='Viernes';
                   }
                   if($diazz==6){
                     $diazz='Sabado';
                   }  
                      ?>
                   <center  style="padding: 0px 0px 7px 0px;"> Pedidos <?=$diar?> (<?=$diazz?>) </center>
                    <?php
                    }else{
                      ?>
                    <center style="padding: 0px 0px 7px 0px;">Pedidos realizados hoy</center>
                      <?php
}

$s = $mysqli->query("SELECT * FROM compven WHERE ruta='".$_SESSION['id_repartidor']. "' "); 
  while($r=mysqli_fetch_array($s)){

  $sx = $mysqli->query("SELECT * FROM entregafecha WHERE compven='".$r['id']."' AND MONTH(fecha)=$mes AND YEAR(fecha)=$anio AND DAY(fecha)=$diare ");                        
  while($rx=mysqli_fetch_array($sx)){
  $sl = $mysqli->query("SELECT * FROM compra WHERE id= '".$r['compra']."'");
  $rm = mysqli_fetch_array($sl);
  $sc = $mysqli->query("SELECT * FROM clientes  WHERE id = '".$rm['id_cliente']."'"); 
  $rc = mysqli_fetch_array($sc);
  $sw = $mysqli->query("SELECT * FROM clientev  WHERE id_cliente = '".$rm['id_cliente']."'"); 
  $rw = mysqli_fetch_array($sw);
  $cliente = $rc['name'];
  $ruta = $r['ruta'];
  $sn = $mysqli->query("SELECT * FROM seguimiento WHERE id= '$ruta' ");
  $rn = mysqli_fetch_array($sn);
  $direccion = $rc['direccion'];
  $fecha = fecha($r['fecha']);
  $id_vendedor = $_SESSION['id_vendedor'];
?>
                    <tr>


                      <td><a  style="color:#08f" href="?p=ver_compra&id=<?=$r['id']?>">
        # <?=$r['id']?></a></td>
                      
                     
                      <td><?=$direccion?></td>
                      <td style="width: 140px; text-align: center;"><a  style="color:#08f" href="?p=manejar_status&id=<?=$r['id']?>"><?=estado($r['estado'])?></a>
       
        &nbsp; &nbsp;
        
                             </td>
                             <td><?=$cliente?></td>
                      <td style="text-align: center;"><?=$fecha?></td>
                      <td style="width: auto;text-align: end"><?=$divisa?><?=number_format($r['monto'])?>
                         &nbsp; &nbsp;
      
                      </td>
                      <td><center><a href="modulos/index.php?id=<?php echo $r['id'];?>&id_vendedor=<?php echo $id_vendedor;?>"><i class="fas fa-file-invoice-dollar"></center></i></a></td>
                    </tr>
                    
                     
                              <?php

}}
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
   <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</body>

</html>
