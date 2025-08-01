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
.mb-4, .my-4 {
    margin-bottom: 1rem!important;
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
.shadow {
    box-shadow: none!important;
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
table.dataTable {
    clear: both;
    margin-top: 6px !important;
    margin-bottom: 6px !important;
    max-width: none !important;
    border-collapse: separate !important;
    color: #292a2d !important;
    border-spacing: 0;
}
.card-body {
    flex: 1 1 auto;
    padding: 1.25rem;
    color: #292a2d !important;
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
<style type="text/css">
  .table td, .table th {
    padding: .75rem;
    vertical-align: middle;
    text-align: center;
    border-top: 1px solid #dee2e6;
}
.shadow {
    box-shadow: none!important;
    border: 0.5px solid #bfc1d0!important;
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
.text-gray-600 {
    color: #5a5c69!important;
}
</style>
<?php

check_admin();


  $s = $mysqli->query("SELECT * FROM clientev WHERE id_vendedor = '".$_SESSION['id_vendedor']. "'");

?>


<div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800">Clientes.</h1> 
          </div>

<html lang="en">


<nav id="primary_nav_wrap">
<ul style="    border: 1px solid;">
            <?php
         
$qn11 = $mysqli->query("SELECT * FROM admins WHERE id = '".$_SESSION['id_vendedor']. "'");
$re11=mysqli_fetch_array($qn11);
         if($re11['tipo']==2){
         ?>
         
   <li ><a href="?p=clientes">Clientes con asignación de dia</a></li>

  
  <li class="current-menu-item"><a href="?p=clientesnue">Clientes nuevos (sin asignación de dia)</a>
   <?php
         }else{
         
          ?>
  <li ><a href="?p=clientes">Clientes con asignación de ruta</a></li>

  
  <li class="current-menu-item"><a href="?p=clientesnue">Clientes nuevos (sin asignación de ruta)</a>
          <?php
         }
         ?>
</ul>
</nav><br><br>
          <div class="card shadow mb-4">
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Ruta</th>
                      <th>Dirección</th>
                      <th>Tipo de negocio</th>
                      <th>Acción</th>
                
                    </tr>
                  </thead>
                 
                  <tbody>

  <?php
  while($r=mysqli_fetch_array($s)){

  $qn12 = $mysqli->query("SELECT * FROM rutas WHERE id = '".$r['ruta']."' ");
    $re36=mysqli_fetch_array($qn12);
    
  $sc = $mysqli->query("SELECT * FROM clientes  WHERE id = '".$r['id_cliente']."'"); 
  $rc = mysqli_fetch_array($sc);

  
  $cliente = $rc['name'];
  $ruta = $re36['rutas'];
  $direccion = $rc['direccion'];
  $tipo = $rc['tipo'];

  if($tipo == 1){
      $tipo = "Tienda";
  }
  if($tipo == 2){
     $tipo = "Minimarket";
  }
  if($tipo == 3){
     $tipo = "Supermercado";
  }
  if($tipo == 4){
     $tipo = "Restaurante";
  }
  if($tipo == 5){
     $tipo = "Mayorista";
  }
 

  
  
  ?>
      <tr>
        <td><a href="?p=cliente&id=<?=$rc['id']?>"><?=$cliente?></a></td>
        <td><?=$ruta?></td>
        <td><?=$direccion?></td>
        <td><?=$tipo?></td>


        <td>

          <a  style="color:#08f" href="?p=manejar_ruta&eliminar=<?=$r['id']?>"><i class="fa fa-times"></i></a>
         <?php
         
$qn11 = $mysqli->query("SELECT * FROM admins WHERE id = '".$_SESSION['id_vendedor']. "'");
$re11=mysqli_fetch_array($qn11);
         if($re11['tipo']==1){
         ?>
         
          &nbsp; &nbsp;<a style="color:#08f" href="?p=manejar_ruta&id=<?=$r['id']?>">
              <?php
         }else{
              ?>
                  &nbsp; &nbsp;<a style="color:#08f" href="?p=agregardia&id=<?=$r['id']?>">
                      <?php
         }
         ?>
        <i class="fa fa-edit"></i>
      </a>
        </td>
      </tr>
    <?php
  }
  ?>
</table>
</table>

 
  <!-- Custom styles for this template -->
  

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</tbody>
</table>
</div></div></div></div>
