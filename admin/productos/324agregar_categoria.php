<div class="tile" id="tile-1">
<style type="text/css">
   .h1, h1 {
    font-size: 2.0rem;
    color: #5a5c69!important;
}
.table {
    width: 100%;
    margin-bottom: 1rem;
    color: #5a5c69!important;
}
#tile-1 .nav-tabs .active {
    background-color: transparent!important;
    border: none!important;
    color: #0088ff!important;
}
div.dataTables_wrapper div.dataTables_length select {
    width: 71px;
    display: inline-block;
}
</style>

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800">&nbsp;&nbsp;Rutas</h1> 
            <a href="?p=agregar_ru" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus"></i>&nbsp Agregar ruta</a>
          </div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs nav-justified" role="tablist">
    
     <li class="nav-item">
        <a class="nav-link active" id="Lunes-tab" data-toggle="tab" href="#Lunes" role="tab" aria-controls="Lunes" aria-selected="true"></i> Lunes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="Martes-tab" data-toggle="tab" href="#Martes" role="tab" aria-controls="Martes" aria-selected="false"> Martes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="Miercoles-tab" data-toggle="tab" href="#Miercoles" role="tab" aria-controls="Miercoles" aria-selected="false"> Miercoles</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" id="Jueves-tab" data-toggle="tab" href="#Jueves" role="tab" aria-controls="Jueves" aria-selected="false"> Jueves</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" id="Vienes-tab" data-toggle="tab" href="#Vienes" role="tab" aria-controls="Vienes" aria-selected="false">Viernes</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" id="Sabado-tab" data-toggle="tab" href="#Sabado" role="tab" aria-controls="Sabado" aria-selected="false"> Sabado</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" id="Domingo-tab" data-toggle="tab" href="#Domingo" role="tab" aria-controls="Domingo" aria-selected="false"> Domingo</a>
      </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane fade show active" id="Lunes" role="tabpanel" aria-labelledby="Lunes-tab">

<?php

check_admin();
?>



     <div class="card shadow mb-4">
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Numero de ruta</th>
        <th>Transporte</th>
        <th>Duracion del recorrido</th>
        <th>Distancia</th>
        <th>Acciones</th>
                
                    </tr>
                  </thead>
                 
                  <tbody>

 <?php
    $id_vendedor = clear($_SESSION['id_vendedor']);
    $name_admin = admin_name_connected( $_SESSION['id_vendedor']);
$q = $mysqli->query("SELECT * FROM rutas WHERE id_vendedor = '$id_vendedor'  ORDER BY rutas ASC");
while ($rp = mysqli_fetch_array($q)){

            ?>
                <tr>
                    <td><a href="?p=rutainf&id=<?=$rp['rutas'];?>"><?=$rp['rutas']?></a></a></td>
                    <td><?=$rp['Transporte']?></td>
                    <td>
                      <?=$rp['Duracion']?>  
                    </td>

                    <td><?=$rp['Distancia']?></td>

                   <td>
                        
                        <a style="color:#08f" href="?p=manejar_ruta&id=<?=$rp['id']?>"><i class="fa fa-edit"></i></a>
                        &nbsp;
                        <a style="color:#08f" href="?p=manejar_ruta&eliminar=<?=$rp['id']?>"><i class="fa fa-times"></i></a>

                    </td>
                </tr>
            <?php
        }
    ?>
</table>
</table>
<style type="text/css">
    .table td, .table th {
    padding: .75rem;
    vertical-align: middle;
    text-align: center;
    border-top: 1px solid #dee2e6;
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
   <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</tbody>
</table>
</div></div></div>
</div>
  <div class="tab-pane fade" id="Martes" role="tabpanel" aria-labelledby="Martes-tab"><?php
check_admin();
if(isset($enviar1)){
    
    $id_vendedor = clear($_SESSION['id_vendedor']);
    $rutas = clear($rutas);
    $Transporte = clear($Transporte); 
    $Duracion = clear($Duracion);
    $Distancia = clear($Distancia);

  
        $mysqli->query("INSERT INTO rutas (rutas,id_vendedor,Duracion,Distancia,Transporte,dia) VALUES ('$rutas','$id_vendedor','$Duracion','$Distancia','$Transporte',2)");
       
        redir("");
    
}
if(isset($eliminar)){
    $eliminar = clear($eliminar);
    $mysqli->query("DELETE FROM rutas WHERE id = '$eliminar'");
    alert("rutas eliminada");
    redir("?p=agregar_categoria");
}
?>

<h1>Agregar rutas</h1><br>


 
<form method="post" action="">
    
        <input type="text"  name="rutas" placeholder="Rutas"/>
    
        <input type="text"  name="Transporte" placeholder="Transporte"/>
  
        <input type="text" name="Duracion" placeholder="Duracion"/>
   
        <input type="text" name="Distancia" placeholder="Distancia"/>
    

<br><br>

    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="enviar1" value="Agregar ruta"/>
    </div>
</form><br>



<table class="table table-striped">

    <tr>
        <th>Numero de ruta</th>
        <th>Transporte</th>
        <th>Duracion del recorrido</th>
        <th>Distancia</th>
        <th>Acciones</th>
     
    </tr>
<?php
    $id_vendedor = clear($_SESSION['id_vendedor']);
    $name_admin = admin_name_connected( $_SESSION['id_vendedor']);
$q = $mysqli->query("SELECT * FROM rutas WHERE id_vendedor = '$id_vendedor' AND dia = 2 ORDER BY rutas ASC");
while ($rp = mysqli_fetch_array($q)){

            ?>
                <tr>
                    <td><?=$rp['rutas']?></td>
                    <td><?=$rp['Transporte']?></td>
                    <td>
                      <?=$rp['Duracion']?>  
                    </td>

                    <td><?=$rp['Distancia']?></td>

                   <td>
                        
                        <a style="color:#08f" href="?p=manejar_ruta&id=<?=$rp['id']?>"><i class="fa fa-edit"></i></a>
                        &nbsp;
                        <a style="color:#08f" href="?p=manejar_ruta&eliminar=<?=$rp['id']?>"><i class="fa fa-times"></i></a>

                    </td>
                </tr>
            <?php
        }
    ?>

</table></div>
  <div class="tab-pane fade" id="Miercoles" role="tabpanel" aria-labelledby="Miercoles-tab"><?php
check_admin();
if(isset($enviar2)){
    
    $id_vendedor = clear($_SESSION['id_vendedor']);
    $rutas = clear($rutas);
    $Transporte = clear($Transporte); 
    $Duracion = clear($Duracion);
    $Distancia = clear($Distancia);

  
        $mysqli->query("INSERT INTO rutas (rutas,id_vendedor,Duracion,Distancia,Transporte,dia) VALUES ('$rutas','$id_vendedor','$Duracion','$Distancia','$Transporte',3)");
       
        redir("");
    
}
if(isset($eliminar)){
    $eliminar = clear($eliminar);
    $mysqli->query("DELETE FROM rutas WHERE id = '$eliminar'");
    alert("rutas eliminada");
    redir("?p=agregar_categoria");
}
?>

<h1>Agregar rutas</h1><br>

<form method="post" action="">
    
        <input type="text"  name="rutas" placeholder="Rutas"/>
    
        <input type="text"  name="Transporte" placeholder="Transporte"/>
  
        <input type="text" name="Duracion" placeholder="Duracion"/>
   
        <input type="text" name="Distancia" placeholder="Distancia"/>
    

<br><br>

    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="enviar2" value="Agregar ruta"/>
    </div>
</form><br>



<table class="table table-striped">

    <tr>
        <th>Numero de ruta</th>
        <th>Transporte</th>
        <th>Duracion del recorrido</th>
        <th>Distancia</th>
        <th>Acciones</th>
     
    </tr>
<?php
    $id_vendedor = clear($_SESSION['id_vendedor']);
    $name_admin = admin_name_connected( $_SESSION['id_vendedor']);
$q = $mysqli->query("SELECT * FROM rutas WHERE id_vendedor = '$id_vendedor' AND dia = 3 ORDER BY rutas ASC");
while ($rp = mysqli_fetch_array($q)){

            ?>
                <tr>
                    <td><?=$rp['rutas']?></td>
                    <td><?=$rp['Transporte']?></td>
                    <td>
                      <?=$rp['Duracion']?>  
                    </td>

                    <td><?=$rp['Distancia']?></td>

                   <td>
                        
                        <a style="color:#08f" href="?p=manejar_ruta&id=<?=$rp['id']?>"><i class="fa fa-edit"></i></a>
                        &nbsp;
                        <a style="color:#08f" href="?p=manejar_ruta&eliminar=<?=$rp['id']?>"><i class="fa fa-times"></i></a>

                    </td>
                </tr>
            <?php
        }
    ?>

</table></div>
  <div class="tab-pane fade" id="Jueves" role="tabpanel" aria-labelledby="Jueves-tab"><?php
check_admin();
if(isset($enviar3)){
    
    $id_vendedor = clear($_SESSION['id_vendedor']);
    $rutas = clear($rutas);
    $Transporte = clear($Transporte); 
    $Duracion = clear($Duracion);
    $Distancia = clear($Distancia);

  
        $mysqli->query("INSERT INTO rutas (rutas,id_vendedor,Duracion,Distancia,Transporte,dia) VALUES ('$rutas','$id_vendedor','$Duracion','$Distancia','$Transporte',4)");
       
        redir("");
    
}
if(isset($eliminar)){
    $eliminar = clear($eliminar);
    $mysqli->query("DELETE FROM rutas WHERE id = '$eliminar'");
    alert("rutas eliminada");
    redir("?p=agregar_categoria");
}
?>

<h1>Agregar rutas</h1><br>

<form method="post" action="">
    
        <input type="text"  name="rutas" placeholder="Rutas"/>
    
        <input type="text"  name="Transporte" placeholder="Transporte"/>
  
        <input type="text" name="Duracion" placeholder="Duracion"/>
   
        <input type="text" name="Distancia" placeholder="Distancia"/>
    

<br><br>

    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="enviar3" value="Agregar ruta"/>
    </div>
</form><br>



<table class="table table-striped">

    <tr>
        <th>Numero de ruta</th>
        <th>Transporte</th>
        <th>Duracion del recorrido</th>
        <th>Distancia</th>
        <th>Acciones</th>
     
    </tr>
<?php
    $id_vendedor = clear($_SESSION['id_vendedor']);
    $name_admin = admin_name_connected( $_SESSION['id_vendedor']);
$q = $mysqli->query("SELECT * FROM rutas WHERE id_vendedor = '$id_vendedor' AND dia = 4 ORDER BY rutas ASC");
while ($rp = mysqli_fetch_array($q)){

            ?>
                <tr>
                    <td><?=$rp['rutas']?></td>
                    <td><?=$rp['Transporte']?></td>
                    <td>
                      <?=$rp['Duracion']?>  
                    </td>

                    <td><?=$rp['Distancia']?></td>

                   <td>
                        
                        <a style="color:#08f" href="?p=manejar_ruta&id=<?=$rp['id']?>"><i class="fa fa-edit"></i></a>
                        &nbsp;
                        <a style="color:#08f" href="?p=manejar_ruta&eliminar=<?=$rp['id']?>"><i class="fa fa-times"></i></a>

                    </td>
                </tr>
            <?php
        }
    ?>

</table></div>
   <div class="tab-pane fade" id="Vienes" role="tabpanel" aria-labelledby="Vienes-tab"><?php
check_admin();
if(isset($enviar4)){
    
    $id_vendedor = clear($_SESSION['id_vendedor']);
    $rutas = clear($rutas);
    $Transporte = clear($Transporte); 
    $Duracion = clear($Duracion);
    $Distancia = clear($Distancia);

  
        $mysqli->query("INSERT INTO rutas (rutas,id_vendedor,Duracion,Distancia,Transporte,dia) VALUES ('$rutas','$id_vendedor','$Duracion','$Distancia','$Transporte',5)");
       
        redir("");
    
}
if(isset($eliminar)){
    $eliminar = clear($eliminar);
    $mysqli->query("DELETE FROM rutas WHERE id = '$eliminar'");
    alert("rutas eliminada");
    redir("?p=agregar_categoria");
}
?>

<h1>Agregar rutas</h1><br>

<form method="post" action="">
    
        <input type="text"  name="rutas" placeholder="Rutas"/>
    
        <input type="text"  name="Transporte" placeholder="Transporte"/>
  
        <input type="text" name="Duracion" placeholder="Duracion"/>
   
        <input type="text" name="Distancia" placeholder="Distancia"/>
    

<br><br>

    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="enviar4" value="Agregar ruta"/>
    </div>
</form><br>



<table class="table table-striped">

    <tr>
        <th>Numero de ruta</th>
        <th>Transporte</th>
        <th>Duracion del recorrido</th>
        <th>Distancia</th>
        <th>Acciones</th>
     
    </tr>
<?php
    $id_vendedor = clear($_SESSION['id_vendedor']);
    $name_admin = admin_name_connected( $_SESSION['id_vendedor']);
$q = $mysqli->query("SELECT * FROM rutas WHERE id_vendedor = '$id_vendedor' AND dia = 5 ORDER BY rutas ASC");
while ($rp = mysqli_fetch_array($q)){

            ?>
                <tr>
                    <td><?=$rp['rutas']?></td>
                    <td><?=$rp['Transporte']?></td>
                    <td>
                      <?=$rp['Duracion']?>  
                    </td>

                    <td><?=$rp['Distancia']?></td>

                   <td>
                        
                        <a style="color:#08f" href="?p=manejar_ruta&id=<?=$rp['id']?>"><i class="fa fa-edit"></i></a>
                        &nbsp;
                        <a style="color:#08f" href="?p=manejar_ruta&eliminar=<?=$rp['id']?>"><i class="fa fa-times"></i></a>

                    </td>
                </tr>
            <?php
        }
    ?>

</table></div>
   <div class="tab-pane fade" id="Sabado" role="tabpanel" aria-labelledby="Sabado-tab"><?php
check_admin();
if(isset($enviar5)){
    
    $id_vendedor = clear($_SESSION['id_vendedor']);
    $rutas = clear($rutas);
    $Transporte = clear($Transporte); 
    $Duracion = clear($Duracion);
    $Distancia = clear($Distancia);

  
        $mysqli->query("INSERT INTO rutas (rutas,id_vendedor,Duracion,Distancia,Transporte,dia) VALUES ('$rutas','$id_vendedor','$Duracion','$Distancia','$Transporte',6)");
       
        redir("");
    
}
if(isset($eliminar)){
    $eliminar = clear($eliminar);
    $mysqli->query("DELETE FROM rutas WHERE id = '$eliminar'");
    alert("rutas eliminada");
    redir("?p=agregar_categoria");
}
?>

<h1>Agregar rutas</h1><br>

<form method="post" action="">
    
        <input type="text"  name="rutas" placeholder="Rutas"/>
    
        <input type="text"  name="Transporte" placeholder="Transporte"/>
  
        <input type="text" name="Duracion" placeholder="Duracion"/>
   
        <input type="text" name="Distancia" placeholder="Distancia"/>
    

<br><br>

    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="enviar5" value="Agregar ruta"/>
    </div>
</form><br>



<table class="table table-striped">

    <tr>
        <th>Numero de ruta</th>
        <th>Transporte</th>
        <th>Duracion del recorrido</th>
        <th>Distancia</th>
        <th>Acciones</th>
     
    </tr>
<?php
    $id_vendedor = clear($_SESSION['id_vendedor']);
    $name_admin = admin_name_connected( $_SESSION['id_vendedor']);
$q = $mysqli->query("SELECT * FROM rutas WHERE id_vendedor = '$id_vendedor' AND dia = 6 ORDER BY rutas ASC");
while ($rp = mysqli_fetch_array($q)){

            ?>
                <tr>
                    <td><?=$rp['rutas']?></td>
                    <td><?=$rp['Transporte']?></td>
                    <td>
                      <?=$rp['Duracion']?>  
                    </td>

                    <td><?=$rp['Distancia']?></td>

                   <td>
                        
                        <a style="color:#08f" href="?p=modificar_categoria&id=<?=$rp['id']?>"><i class="fa fa-edit"></i></a>
                        &nbsp;
                        <a style="color:#08f" href="?p=agregar_categoria&eliminar=<?=$rp['id']?>"><i class="fa fa-times"></i></a>

                    </td>
                </tr>
            <?php
        }
    ?>

</table></div>
   <div class="tab-pane fade" id="Domingo" role="tabpanel" aria-labelledby="Domingo-tab"><?php
check_admin();
if(isset($enviar6)){
    
    $id_vendedor = clear($_SESSION['id_vendedor']);
    $rutas = clear($rutas);
    $Transporte = clear($Transporte); 
    $Duracion = clear($Duracion);
    $Distancia = clear($Distancia);

  
        $mysqli->query("INSERT INTO rutas (rutas,id_vendedor,Duracion,Distancia,Transporte,dia) VALUES ('$rutas','$id_vendedor','$Duracion','$Distancia','$Transporte',7)");
       
        redir("");

    
}
if(isset($eliminar)){
    $eliminar = clear($eliminar);
    $mysqli->query("DELETE FROM rutas WHERE id = '$eliminar'");
    alert("rutas eliminada");
    redir("?p=agregar_categoria");
}
?>

<h1>Agregar rutas</h1><br>

<form method="post" action="">
    
        <input type="text"  name="rutas" placeholder="Rutas"/>
    
        <input type="text"  name="Transporte" placeholder="Transporte"/>
  
        <input type="text" name="Duracion" placeholder="Duracion"/>
   
        <input type="text" name="Distancia" placeholder="Distancia"/>
    

<br><br>

    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="enviar6" value="Agregar ruta"/>
    </div>
</form><br>



<table class="table table-striped">

    <tr>
        <th>Numero de ruta</th>
        <th>Transporte</th>
        <th>Duracion del recorrido</th>
        <th>Distancia</th>
        <th>Acciones</th>
     
    </tr>
<?php
    $id_vendedor = clear($_SESSION['id_vendedor']);
    $name_admin = admin_name_connected( $_SESSION['id_vendedor']);
$q = $mysqli->query("SELECT * FROM rutas WHERE id_vendedor = '$id_vendedor'  AND dia = 7 ORDER BY rutas ASC");
while ($rp = mysqli_fetch_array($q)){

            ?>
                <tr>
                    <td><?=$rp['rutas']?></td>
                    <td><?=$rp['Transporte']?></td>
                    <td>
                      <?=$rp['Duracion']?>  
                    </td>

                    <td><?=$rp['Distancia']?></td>

                   <td>
                        
                        <a style="color:#08f" href="?p=modificar_categoria&id=<?=$rp['id']?>"><i class="fa fa-edit"></i></a>
                        &nbsp;
                        <a style="color:#08f" href="?p=agregar_categoria&eliminar=<?=$rp['id']?>"><i class="fa fa-times"></i></a>

                    </td>
                </tr>
            <?php
        }
    ?>

</table></div>

  </div>

</div>


<style>
  body
{
  background-color:#f1f1f2;
}
.h1, h1 {
    font-size: 2.0rem;
}
.tile
{
  width:100%;
  margin:0px auto;
}
#tile-1 .tab-pane
{
  padding:15px;
  height:80px;
}
#tile-1 .nav-tabs
{
  position:relative;
  border:none!important;
  background-color: #f7f5f5;
/*   box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 1px 5px 0 rgba(0,0,0,0.12), 0 3px 1px -2px rgba(0,0,0,0.2); */
  border-radius:6px;
}
#tile-1 .nav-tabs li
{
  margin:0px!important;
}
#tile-1 .nav-tabs li a
{
  position:relative;
  margin-right:0px!important;
  padding: 20px 21px!important;
  font-size:16px;
  border:none!important;
  color:#333;
}
button, input {
    overflow: visible;
    display: inline-block;
    width: 20%;
    height: calc(2.25rem + 2px);
    padding: .375rem .75rem;
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
}
.container, .container-fluid {
    padding-left: 10;
    padding-right: 10;
}
#tile-1 .nav-tabs a:hover
{
  background-color:#fff!important;
  border:none;
}
#tile-1 .slider
{
  display:inline-block;
  width:30px;
  height:4px;
  border-radius:3px;
  background-color:#39bcd3;
  position:absolute;
  z-index:1200;
  bottom:0;
  transition:all .4s linear;
  
}
#tile-1 .nav-tabs .active
{
  background-color:transparent!important;
  border:none!important;
  color:#39bcd3!important;
}
</style>
<script>
  $("#tile-1 .nav-tabs a").click(function() {
  var position = $(this).parent().position();
  var width = $(this).parent().width();
    $("#tile-1 .slider").css({"left":+ position.left,"width":width});
});
var actWidth = $("#tile-1 .nav-tabs").find(".active").parent("li").width();
var actPosition = $("#tile-1 .nav-tabs .active").position();
$("#tile-1 .slider").css({"left":+ actPosition.left,"width": actWidth});

</script>
<style>
    .form-control {
    display: block;
    width: 25%;
    height: calc(2.25rem + 2px);
    padding: .375rem .75rem;
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
}
#tile-1 .tab-pane {
    padding: 15px;
    height: auto;
}.form-control {
    display: inline-block;
    width: 25%;
    height: calc(2.25rem + 2px);
    padding: .375rem .75rem;
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
}
</style>
<script>
  $("#tile-1 .nav-tabs a").click(function() {
  var position = $(this).parent().position();
  var width = $(this).parent().width();
    $("#tile-1 .slider").css({"left":+ position.left,"width":width});
});
var actWidth = $("#tile-1 .nav-tabs").find(".active").parent("li").width();
var actPosition = $("#tile-1 .nav-tabs .active").position();
$("#tile-1 .slider").css({"left":+ actPosition.left,"width": actWidth});

</script>