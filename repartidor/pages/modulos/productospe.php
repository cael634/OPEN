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
 <h1 class="h3 mb-2 text-gray-800">Revision de pedidos dias </h1>

<nav id="primary_nav_wrap">
<ul>
  <li ><a href="?p=pedidos">Pedidos de Rutas</a></li>
  <li><a href="#"></a>
  
  <li class="current-menu-item"><a href="?p=productospe">Cantidad por productos por dias</a>
   
</ul>
</nav><br>
<?php

check_admin();


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

      <!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - jquery ui datepicker español</title>
  <link rel='stylesheet' href='https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
 <form method="post" action="">
     <div class="row">
  &nbsp;&nbsp;&nbsp;    
<input  autocomplete="off" class="datepicker " name="diar" placeholder="Pulse para seleccionar dia de la entrega" style="
    display: block;
    width: 30%;
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
</form>
<div class="col-md-2">
        <button type="submit" class="btn btn-prmiary" name="buscar" style="
    background: #29393a;
    color: white;
    width: 80%;
"><i class="fa fa-serch" ></i> Filtrar dia</button>
      </div>
</div>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-1.10.2.js'></script>
<script src='https://code.jquery.com/ui/1.11.4/jquery-ui.js'></script><script  src="./scripta.js"></script>

</body>
</html>
<?php
  
if(isset($diar)){

$fecha= "$diar";
#separas la fecha en subcadenas y asignarlas a variables
#relacionadas en contenido, por ejemplo dia, mes y anio.

$diax   = substr($fecha,8,2);
$mesx = substr($fecha,5,2);
$aniox = substr($fecha,0,4); 
$semanax = date('W',  mktime(0,0,0,$mesx,$diax,$aniox));  
$diazz = date('N', strtotime($diar));

//donde:
?>

 


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
     
            <div class="card-body">
                <center><a>Dia: <?=$diar?></a></center>  
              <div class="table-responsive">
               

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
        <th>Nombre del producto</th>
        <th>Cantidad</th>
        <th>Monto Total</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
        <th>Nombre del producto</th>
        <th>Cantidad</th>
        <th>Monto Total</th>
   
                    </tr>
                  </tfoot>
                  <tbody>

                   

 <?php
  $semana = date("W");
    $id_vendedor = clear($_SESSION['id_vendedor']);
    $name_admin = admin_name_connected( $_SESSION['id_vendedor']);
$q = $mysqli->query("SELECT * FROM productos WHERE id_vendedor = '$id_vendedor' ");
while ($rp = mysqli_fetch_array($q)){
            ?>
                <tr>
                    <td><?=$rp['name']?></td>
      <?php
      $qy = $mysqli->query("SELECT * FROM rutas WHERE id_vendedor = '$id_vendedor' AND dia = '$diazz' ORDER BY rutas ASC");
      $ry = mysqli_fetch_array($qy);
      $qn = $mysqli->query("SELECT * FROM compven WHERE id_vendedor = '$id_vendedor' AND semana = '$semana' AND ruta = '".$ry['rutas']."'");
      $sn = mysqli_fetch_array($qn);
      $id_producto = $rp['id'];
      $compra = $sn['compra'];
      $sx = $mysqli->query("SELECT * FROM productos_compra WHERE id_compra = '$compra'  AND id_producto = '$id_producto' ");     
      $contador1 = 0;
      $montototalp = 0;
      while($rx=mysqli_fetch_array($sx)){
    
      $contador1 = $contador1+ $rx['cantidad'];
      $montototalp = $montototalp + $rx['monto'];
      }

      ?>
                    <td><?=$contador1?></td>
                    <td>
                      <?=$montototalp?>  
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
 <?php
        }else{
          $diazz=date('N');
          $semana=date('W');

    ?>
        <!-- DataTales Example -->
          <div class="card shadow mb-4">
     
            <div class="card-body">
                <center><a>Hoy</a></center>  
              <div class="table-responsive">
               

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
        <th>Nombre del producto</th>
        <th>Cantidad</th>
        <th>Monto Total</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
        <th>Nombre del producto</th>
        <th>Cantidad</th>
        <th>Monto Total</th>
   
                    </tr>
                  </tfoot>
                  <tbody>

                   

 <?php
  $semana = date("W");
    $id_vendedor = clear($_SESSION['id_vendedor']);
    $name_admin = admin_name_connected( $_SESSION['id_vendedor']);
$q = $mysqli->query("SELECT * FROM productos WHERE id_vendedor = '$id_vendedor' ");
while ($rp = mysqli_fetch_array($q)){
            ?>
                <tr>
                    <td><?=$rp['name']?></td>
      <?php
      $qy = $mysqli->query("SELECT * FROM rutas WHERE id_vendedor = '$id_vendedor' AND dia = '$diazz' ORDER BY rutas ASC");
      $ry = mysqli_fetch_array($qy);
      $qn = $mysqli->query("SELECT * FROM compven WHERE id_vendedor = '$id_vendedor' AND semana = '$semana' AND ruta = '".$ry['rutas']."'");
      $sn = mysqli_fetch_array($qn);
      $id_producto = $rp['id'];
      $compra = $sn['compra'];
      $sx = $mysqli->query("SELECT * FROM productos_compra WHERE id_compra = '$compra'  AND id_producto = '$id_producto' ");     
      $contador1 = 0;
      $montototalp = 0;
      while($rx=mysqli_fetch_array($sx)){
    
      $contador1 = $contador1+ $rx['cantidad'];
      $montototalp = $montototalp + $rx['monto'];
      }

      ?>
                    <td><?=$contador1?></td>
                    <td>
                      <?=$montototalp?>  
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
      <!-- End of Main Content -->

      <!-- Footer -->
    
      <!-- End of Footer -->

  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->


  <!-- Logout Modal-->
 

  <!-- Bootstrap core JavaScript-->

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
