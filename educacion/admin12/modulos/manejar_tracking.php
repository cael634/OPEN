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
.shadow {
    box-shadow: none!important;
}
.shadow {
    box-shadow: none!important;
    border: 0.5px solid #bfc1d0!important;
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
 <h1 class="h3 mb-2 text-gray-800" style="padding: 0px 0px 5px;">Pedidos</h1>

<?php
check_admin();
//0 apenas comprado
//1 preparando compra
//2 en camino
//3 despachado



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


if(isset($diar)){

$fecha= "$diar";
#separas la fecha en subcadenas y asignarlas a variables
#relacionadas en contenido, por ejemplo dia, mes y anio.

$diax   = substr($fecha,8,2);
$mesx = substr($fecha,5,2);
$aniox = substr($fecha,0,4); 
$semana = date('W',  mktime(0,0,0,$mesx,$diax,$aniox));  
$diazz = date('N', strtotime($diar));

$s = $mysqli->query("SELECT * FROM compven WHERE  DAY(fecha) = '$diax' AND MONTH(fecha) = '$mesx' AND YEAR(fecha) = '$aniox'  AND id_vendedor = '".$_SESSION['id_vendedor']. "' "); 
}else{
$diax   = date('d');
$mesx = date('m');
$aniox = date('Y'); 
$s = $mysqli->query("SELECT * FROM compven WHERE  DAY(fecha) = '$diax' AND MONTH(fecha) = '$mesx' AND YEAR(fecha) = '$aniox'  AND id_vendedor = '".$_SESSION['id_vendedor']. "' "); 
}

$sq = $mysqli->query("SELECT * FROM compven WHERE estado>0 AND DAY(fecha) = '$diax' AND MONTH(fecha) = '$mesx' AND YEAR(fecha) = '$aniox'  AND id_vendedor = '".$_SESSION['id_vendedor']. "'");

$contador1 = 0;
while($rq=mysqli_fetch_array($sq)){

$contador1 ++;}

  
$se = $mysqli->query("SELECT * FROM compven WHERE estado=1 AND  DAY(fecha) = '$diax' AND MONTH(fecha) = '$mesx' AND YEAR(fecha) = '$aniox'  AND id_vendedor = '".$_SESSION['id_vendedor']. "'");
  
$contador2 = 0; 
while($re=mysqli_fetch_array($se)){

$contador2 ++;}


$sf = $mysqli->query("SELECT * FROM compven WHERE estado=2  AND DAY(fecha) = '$diax' AND MONTH(fecha) = '$mesx' AND YEAR(fecha) = '$aniox'  AND id_vendedor = '".$_SESSION['id_vendedor']. "' ");

$contador3 = 0;
while($rf=mysqli_fetch_array($sf)){

$contador3 ++;}

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
    width: auto;
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
   width: -webkit-fill-available;
    max-width: 190px;">
      <input  autocomplete="off" class="datepicker " name="diar" placeholder="Pulse para seleccionar dia " style="
    display: block;
    width: -webkit-fill-available;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 14px;
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
        width: max-content;
"><i class="fa fa-serch" ></i> Filtrar dia</button>

      
      </div>

   

  <div class="form-group" style="
    width: auto!important;">
    <a href="?p=estado&estado=0"> 
    <input  type="submit" class="btn btn-primary" name="Despachado" value="Iniciados :  <?=$contador1?>" style="
    background-color: #1cc88a;
    border: aliceblue;
"></a>
  </div>
  <div class="form-group"style="
    width: auto;">
    <a href="?p=estado&estado=1"> 
    <input  type="submit" class="btn btn-primary" name="Finalizado" value="Revisados : <?=$contador2?>" style="
    background-color: #36b9cc;
    border: aliceblue;
"></a>
  </div>
  <div class="form-group">
  <a href="?p=estado&estado=2">  <input   type="submit" class="btn btn-primary" name="Finalizado" value="Terminados : <?=$contador3?>"/></a>
  </div>
      </form>

 
 <?php
                $qn = $mysqli->query("SELECT * FROM admins WHERE id= '".$_SESSION['id_vendedor']."' ");
                $rl=mysqli_fetch_array($qn);
                 if ($rl['tipo']==1) {
       
                    ?>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
           
            <div class="card-body">
              <div class="table-responsive">
               

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                  <thead><center>
                      <?php
                      if(isset($diar)){
                      ?>Pedidos realizados en la fecha: <?=$diar?></center>
                      <?php
                      }else{
                      ?>
                      Pedidos realizados hoy</center>
                      <?php
                      }
                      ?>
                      
                    <tr>
                      <th>Orden</th>
                      <th>Negocio</th>
                      <th>Encargado</th>
                      <th>Ruta</th>
                      <th>Direccion</th>
                      <th>Estado</th>
                      <th>Fecha</th>
                      <th>Monto</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Orden</th>
                      <th>Encargado</th>
                      <th>Cliente</th>
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
  $contador110=0;
  $sl = $mysqli->query("SELECT * FROM compra WHERE id= '".$r['compra']."'");
  $rm = mysqli_fetch_array($sl);
  $sc = $mysqli->query("SELECT * FROM clientes  WHERE id = '".$rm['id_cliente']."'"); 
  $rc = mysqli_fetch_array($sc);
  $sw = $mysqli->query("SELECT * FROM clientev  WHERE id_cliente = '".$rm['id_cliente']."'"); 
  $rw = mysqli_fetch_array($sw);
  $cliente = $rc['name'];

  $sw7 = $mysqli->query("SELECT * FROM rutas  WHERE id = '".$r['ruta']."'"); 
  $rw7 = mysqli_fetch_array($sw7);
  $ruta = $rw7['rutas'];
  if($rw7['rutas']=1){
      $diare='Lunes';
  }
  if($rw7['rutas']=2){
      $diare='Martes';
  }
  if($rw7['rutas']=3){
      $diare='Miercoles';
  }
  if($rw7['rutas']=4){
      $diare='Jueves';
  }
  if($rw7['rutas']=5){
      $diare='Viernes';
  }
  if($rw7['rutas']=6){
      $diare='Sabado';
  }
  if($rw7['rutas']=7){
      $diare='Domingo';
  }
  $direccion = $rc['direccion'];
  $fecha = fecha($r['fecha']);
  $id_vendedor = $_SESSION['id_vendedor'];
  $sl1 = $mysqli->query("SELECT * FROM admins WHERE id= '$id_vendedor'");
  $rm1 = mysqli_fetch_array($sl1);
  $qa = $mysqli->query("SELECT * FROM tipo WHERE id='".$rc['tipo']."'");
  $ra = mysqli_fetch_array($qa);
     $sa11 = $mysqli->query("SELECT * FROM productos_compra WHERE id_vendedor = '$id_vendedor' AND id_compra = '".$r['compra']."'");
    while ($r21 = mysqli_fetch_array($sa11)){
        $contador110++;}
?>
                    <tr>
                      <td><a  style="color:#08f" href="?p=ver_compra&id=<?=$r['id']?>">
        # <?=$r['id']?></a></td>
        <td><a href="?p=cliente&id=<?=$rc['id']?>"><?=$rc['name']?></a><br>• <?=$ra['tipo']?></td>
                      <td><?=$cliente?></td>
<?php
if($sl1==1){
?>
        <td style="width:auto;text-align: center;min-width: 49px"  ><a  style="color:#08f" href="?p=editaruta&id=<?=$r['id']?>"><?=$ruta?><br>(<?=$diare?>)
        
        </a></td>
  <?php
  }else{
  ?>    
  <td style="width:auto;text-align: center;" ><?=$ruta?>&nbsp;<a  style="color:#08f" href="?p=editarentrega&id=<?=$r['id']?>">
        <i class="fa fa-edit"></i>
        </a></td>
        <?php
        }
        ?>   
         <td><?=$direccion?></td>
          <td style="width: auto; text-align: center;"><?=estado($r['estado'])?><br>
        <a  style="color:#08f" href="?p=manejar_tracking&eliminar=<?=$r['id']?>">
        <i class="fa fa-times"></i>
        </a>
        &nbsp; &nbsp;
        <a  style="color:#08f" href="?p=manejar_status&id=<?=$r['id']?>">
        <i class="fa fa-edit"></i>
        </a>
                             </td>
                      <td style="text-align: center;"><?=$fecha?></td>
                      <td style="width: 140px;text-align: center;"><?=$divisa?><?=number_format($r['monto'])?><br>
                        por <?=$contador110?> producto(s)

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

                                      <?php

}else{
?>
   <div class="card shadow mb-4">
           
            <div class="card-body">
              <div class="table-responsive">
               

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                  <thead>
                    <tr>
                     <th>Orden</th>
                      <th>Negocio</th>
                      <th>Encargado</th>
                      <th>Ruta</th>
                      <th>Direccion</th>
                      <th>Estado</th>
                      <th>Fecha</th>
                      <th>Monto</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                     <th>Orden</th>
                      <th>Negocio</th>
                      <th>Encargado</th>
                      <th>Ruta</th>
                      <th>Direccion</th>
                      <th>Estado</th>
                      <th>Fecha</th>
                      <th>Monto</th>
                    </tr>
                  </tfoot>
                  <tbody><center>
                      <?php
                      if(isset($diar)){
                      ?>Pedidos realizados en la fecha: <?=$diar?></center>
                      <?php
                      }else{
                      ?>
                      Pedidos realizados hoy</center>
                      <?php
                      }
                      ?>

<?php
                                                      
  while($r=mysqli_fetch_array($s)){
  $sl = $mysqli->query("SELECT * FROM compra WHERE id= '".$r['compra']."'");
  $rm = mysqli_fetch_array($sl);
  $sc = $mysqli->query("SELECT * FROM clientes  WHERE id = '".$rm['id_cliente']."'"); 
  $rc = mysqli_fetch_array($sc);
  $sw = $mysqli->query("SELECT * FROM clientev  WHERE id_cliente = '".$rm['id_cliente']."'"); 
  $rw = mysqli_fetch_array($sw);
  $cliente = $rc['nombrev'];
  $ruta = $r['ruta'];
  $sn = $mysqli->query("SELECT * FROM seguimiento WHERE id= '$ruta' ");
  $rn = mysqli_fetch_array($sn);
  $direccion = $rc['direccion'];
  $fecha = fecha($r['fecha']);
  $id_vendedor = $_SESSION['id_vendedor'];
  $sl1 = $mysqli->query("SELECT * FROM admins WHERE id= '$id_vendedor'");
  $rm1 = mysqli_fetch_array($sl1);
  $qa = $mysqli->query("SELECT * FROM tipo WHERE id='".$rc['tipo']."'");
  $ra = mysqli_fetch_array($qa);
  $sa11 = $mysqli->query("SELECT * FROM productos_compra WHERE id_vendedor = '$id_vendedor' AND id_compra = '".$r['compra']."'");
  while ($r21 = mysqli_fetch_array($sa11)){
        $contador110++;}
?>
                    <tr>


                      <td><a  style="color:#08f" href="?p=ver_compra&id=<?=$r['id']?>">
        # <?=$r['id']?></a></td>
        <td><a href="?p=cliente&id=<?=$rc['id']?>"><?=$rc['name']?></a><br>• <?=$ra['tipo']?></td>
                      <td><a href="?p=cliente&id=<?=$rc['id']?>"><?=$cliente?></a></td>
                      <td style="width: 150px;text-align: center;" >
 <?php
                      if($r['ruta']==0){
                      ?>
                      *Sin repartidor
                      <?php
                    }else{
                    ?>
                    <a style="color:#08f" href="?p=repartidorever&id=<?=$rn['id']?>"><?=$rn['name']?></a>
               
                    <?php
                  }
                    ?>
                       &nbsp;<a  style="color:#08f" href="?p=editarentrega&id=<?=$r['id']?>">
        <i class="fa fa-edit"></i>
        </a></td>
                      <td><?=$direccion?></td>
                      <td style="width: 140px; text-align: center;"><?=estado($r['estado'])?>
        <a  style="color:#08f" href="?p=manejar_tracking&eliminar=<?=$r['id']?>">
        <i class="fa fa-times"></i>
        </a>
        &nbsp; &nbsp;
        <a  style="color:#08f" href="?p=manejar_status&id=<?=$r['id']?>">
        <i class="fa fa-edit"></i>
        </a>
                             </td>
                      <td style="text-align: center;"><?=$fecha?></td>
                      
                      <td style="width: 140px;text-align: center;"><?=$divisa?><?=number_format($r['monto'])?><br>
                        por <?=$contador110?> producto(s)

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

                                <?php

}
?>
        <!-- /.container-fluid -->

    
      <!-- End of Main Content -->

      <!-- Footer -->
    
      <!-- End of Footer -->

  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->


  <!-- Logout Modal-->
 


  <!-- Custom scripts for all pages-->
 
</body>

</html>
