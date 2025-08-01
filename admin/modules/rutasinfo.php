<div class="tile" id="tile-1">
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
    <meta charset="UTF-8">
  <title>CodePen - jquery ui datepicker español</title>
  <link rel='stylesheet' href='https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css'><link rel="stylesheet" href="./style.css">
    <script src='https://code.jquery.com/jquery-1.10.2.js'></script>
<script src='https://code.jquery.com/ui/1.11.4/jquery-ui.js'></script><script  src="./scripta.js"></script>

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


    <?php
    check_admin();
    $sc = $mysqli->query("SELECT * FROM rutas WHERE id = $id AND id_vendedor = '".$_SESSION['id_vendedor']. "'"); 
    $rc = mysqli_fetch_array($sc);
    $ed = $rc['id'];
    ?>
<h1>Ruta: <?=$rc['rutas']?></h1><br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs nav-justified" role="tablist">
   
     <li class="nav-item">
        <a class="nav-link active" id="Clientes-tab" data-toggle="tab" href="#Clientes" role="tab" aria-controls="Clientes" aria-selected="true">Total de productos</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="?p=Clientesruta&id=<?=$id?>" >  Clientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?p=ventasrutas&id=<?=$id?>" >Ventas</a>
      </li>
    <li class="nav-item">
         <a class="nav-link" href="?p=transporteruta&id=<?=$id?>">Información</a>
      </li>
        
       
  </ul>
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
  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane fade show active" id="Productos" role="tabpanel" aria-labelledby="Productos-tab">
      <html lang="en">


<nav id="primary_nav_wrap">
<ul>
  <li><a href="?p=rutainf&id=<?=$id?>">Productos para esta semana</a></li>
  <li><a href="#"></a>
  

  <li  class="current-menu-item"><a href="#">Buscar por semana</a>
   
</ul>
</nav><br><br>
<form method="post" action="">
    <div class="row">
&nbsp;&nbsp;&nbsp;<input  autocomplete="off" class="datepicker " name="semanar" placeholder="Pulse y seleccione un dia de la semana a consultar" style="
    display: block;
    width: 36%;
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

 <div class="col-md-2">
        <button type="submit" class="btn btn-prmiary" name="buscar" style="
    background: #29393a;
    color: white;
    width: 90%;
"><i class="fa fa-serch"></i> Filtrar semana</button>
      </div>
</div></form>
      <?php
if(isset($semanar)){

$id_vendedor = $_SESSION['id_vendedor'];
$fecha= "$semanar";
#separas la fecha en subcadenas y asignarlas a variables
#relacionadas en contenido, por ejemplo dia, mes y anio.

$diax   = substr($fecha,8,2);
$mesx = substr($fecha,5,2);
$aniox = substr($fecha,0,4); 

$semanau = date('W',  mktime(0,0,0,$mesx,$diax,$aniox));  
 

 
# Obtenemos el día de la semana de la fecha dada
$diaSemana=date("w",mktime(0,0,0,$mesx,$diax,$aniox));
 
# el 0 equivale al domingo...
if($diaSemana==0)
    $diaSemana=7;
 
# A la fecha recibida, le restamos el dia de la semana y obtendremos el lunes
$primerDia=date("d-m-Y",mktime(0,0,0,$mesx,$diax-$diaSemana+1,$aniox));
 
# A la fecha recibida, le sumamos el dia de la semana menos siete y obtendremos el domingo
$ultimoDia=date("d-m-Y",mktime(0,0,0,$mesx,$diax+(7-$diaSemana),$aniox));
 


    $s12 = $mysqli->query("SELECT * FROM clientev WHERE ruta = '$id' AND id_vendedor = '".$_SESSION['id_vendedor']. "'");
    $contador=0;
    while($r12=mysqli_fetch_array($s12)){
     $contador++;}

    $s = $mysqli->query("SELECT * FROM productos WHERE  id_vendedor = '".$_SESSION['id_vendedor']. "'");

?>





          <!-- DataTales Example -->
          <div class="card shadow mb-4">
           
            <div class="card-body">
              <div class="table-responsive">
               

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                       <th>Nombre del producto</th>
                       <th>Cantidad</th>     
                       <th>Monto</th>
                       <th>Promedio por vendedor</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nombre del producto</th>
                       <th>Cantidad</th>     
                       <th>Monto</th>
                       <th>Promedio por vendedor</th>
                    </tr>
                  </tfoot>
                  <tbody><center>Ventas de <?=$primerDia?> hasta <?=$ultimoDia?></center>
   <?php
    while($r=mysqli_fetch_array($s)){ 
       $vendedoruni=0;
      $contador43=0;
      $montototal=0;
      $montototal12=0;
      $total=0;
    $s1 = $mysqli->query("SELECT * FROM compven WHERE semana= '$semanau'  AND ruta= '$id'");
    while($r1=mysqli_fetch_array($s1)){ 
    $s2 = $mysqli->query("SELECT * FROM productos_compra WHERE id_compra='".$r1['compra']."' AND id_producto='".$r['id']."'"); 
    while($r2=mysqli_fetch_array($s2)){
      $contador43=$contador43+$r2['cantidad'];
      $montototal=$montototal+$r2['monto'];
    }
  }

  $total=$montototal*$contador43;
if($contador==0){
  $vendedoruni='No hay clientes en esta ruta';
}else{
$vendedoruni=$contador43/$contador;
}
    

    
    ?>
            <tr>
                <td><?=$r['name']?></a></td>
                <td><?=$contador43?></td>
               
                <td><?=number_format($total)?></td>


                <td><?=$vendedoruni?></td>
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
  <div class="tab-pane fade" id="Clientes" role="tabpanel" aria-labelledby="Clientes-tab"><?php

check_admin();
$id = clear($id);
    $s = $mysqli->query("SELECT * FROM clientev WHERE ruta = '$id' AND id_vendedor = '".$_SESSION['id_vendedor']. "'");
    $contador=0;
    while($r=mysqli_fetch_array($s)){
     $contador++;}

    $s = $mysqli->query("SELECT * FROM clientev WHERE ruta = '$id' AND id_vendedor = '".$_SESSION['id_vendedor']. "'");

?>





          <!-- DataTales Example -->
          <div class="card shadow mb-4">
           
            <div class="card-body">
              <div class="table-responsive">
               

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr><th>Posicion</th>
                       <th>Nombre</th>
       
        <th>Direccion</th>
        <th>Acciones</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>Posicion</th>
                       <th>Nombre</th>
    
        <th>Direccion</th>
        <th>Acciones</th>
                    </tr>
                  </tfoot>
                  <tbody>
   <?php
    while($r=mysqli_fetch_array($s)){

 
    $sc = $mysqli->query("SELECT * FROM clientes  WHERE id = '".$r['id_cliente']."'"); 
    $rc = mysqli_fetch_array($sc);

    
    $cliente = $rc['name'];
    $ruta = $r['ruta'];
    $direccion = $rc['direccion'];
    $posicion = $r['posicion'];
    
    
    ?>
            <tr>
                <td><a href="?p=numcli&ru=<?=$ed?>&id=<?=$r['id']?>"><?=$posicion?></a></td>
                <td><?=$cliente?></td>
               
                <td><?=$direccion?></td>


                <td>
                    <a style="color:#08f" href="?p=numcli&ru=<?=$ed?>&id=<?=$r['id']?>"><i class="fa fa-edit"></i></a>
                        &nbsp;
                     <a style="color:#08f" href="?p=numcli&eliminar=<?=$r['id']?>"><i class="fa fa-times"></i></a>
                </td>
            </tr>
        <?php
    }
  }
    ?>
                   
                  </tbody>
                </table>
              </div>
            </div>
         
        </div>

<style type="text/css">
    div.dataTables_wrapper div.dataTables_length select {
    width: 69px;
    display: inline-block;
}
</style>


  <div class="tab-pane fade" id="Ventas" role="tabpanel" aria-labelledby="Ventas-tab"><?php
check_admin();
//0 apenas comprado
//1 preparando compra
//2 en camino
//3 despachado

$s = $mysqli->query("SELECT * FROM compven WHERE id_vendedor = '".$_SESSION['id_vendedor']. "'ORDER BY fecha  DESC ");

//$s = $mysqli->query("SELECT * FROM compVEN WHERE estado != 7 ORDER BY fecha DESC");
if(isset($eliminar)){
    $eliminar = clear($eliminar);

$mysqli->query("DELETE FROM productos_compra WHERE id_compra = '$eliminar'");

    $mysqli->query("DELETE FROM compra WHERE id = '$eliminar'");
    redir("?p=manejar_tracking");
}
?>
<br>
<div class="card-body p-0">
                <div class="table-responsive">

                  <table class="table m-0">
    <tr>
        <th><center>Cliente</center></th>
        <th><center>Fecha</center></th>
        <th><center>Monto</center></th>
        <th><center>Estado</center></th>
        <th><center>Acciones</center></th>

        </tr>
    
<?php
while($r=mysqli_fetch_array($s)){
    $sl = $mysqli->query("SELECT * FROM compra WHERE id= '".$r['compra']."'");
    $rm = mysqli_fetch_array($sl);
    $sc = $mysqli->query("SELECT * FROM clientes  WHERE id = '".$rm['id_cliente']."'"); 
    $rc = mysqli_fetch_array($sc);
    $cliente = $rc['name'];
    $fecha = fecha($r['fecha']);
?>



<tr>

    <td><center><?=$cliente?></center></td>
    <td><center><?=$fecha?></center></td>
    <td><center><?=number_format($r['monto'])?><?=$divisa?></center></td>
    <td><center><?=estado($r['estado'])?></center></td>



    
    <td><center>
        <a style="color:#08f" href="?p=manejar_tracking&eliminar=<?=$r['id']?>">
        <i class="fa fa-times"></i>
</a>

&nbsp; &nbsp;
            <a style="color:#08f" href="?p=manejar_status&id=<?=$r['id']?>">
                <i class="fa fa-edit"></i>
            </a>
&nbsp; &nbsp;
<a style="color:#08f" href="?p=ver_compra&id=<?=$r['id']?>">
    <i class= "fa fa-eye"></i>
</center>
        </td>
    </tr>

<?php
}
?>

</table>
</div>
</div>

</div>
  <div class="tab-pane fade" id="Transporte" role="tabpanel" aria-labelledby="Transporte-tab"><?php

check_admin();


    $sn = $mysqli->query("SELECT * FROM rutas WHERE rutas = $id AND id_vendedor = '".$_SESSION['id_vendedor']. "'"); 
    $rn = mysqli_fetch_array($sn);
    $sc = $mysqli->query("SELECT * FROM transporte WHERE id = '".$rn['Transporte']."' "); 
    $rc = mysqli_fetch_array($sc);

?>

<h1>Vahiculo <?=$rn['Transporte']?> </h1><br>

Placa: &nbsp<?=$rc['placa']?><br>
Tipo: &nbsp<?=$rc['tipo']?><br>
Distribuiores<br>

<table class="table table-striped">
    <tr>
        <th>Nombre</th>
    </tr>

    <?php
    while($r=mysqli_fetch_array($s)){

  
    $sc = $mysqli->query("SELECT * FROM repartidor WHERE vehiculo = '".$rn['Transporte']."' "); 
    $rc = mysqli_fetch_array($sc);

    
    $repartidor = $rc['name'];

    
    
    ?>
            <tr>
                <td><?=$repartidor?></td>
                


               
            </tr>
        <?php
    }
    ?>
</table>
<style type="text/css">
    .table td, .table th {
    padding: .75rem;
    vertical-align: middle;
    text-align: center;
    border-top: 1px solid #dee2e6;
}
</style></div>
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
                        
                        <a style="color:#08f" href="?p=modificar_categoria&id=<?=$rp['id']?>"><i class="fa fa-edit"></i></a>
                        &nbsp;
                        <a style="color:#08f" href="?p=agregar_categoria&eliminar=<?=$rp['id']?>"><i class="fa fa-times"></i></a>

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
</a></center></td></tr></table></div>
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
  background-color: #171b25;
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
  color:#6d6b6b;
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
    font-size: 1.8rem;
    color: #423f3f;
}
.text-gray-600 {
    color: #5a5c69!important;
}
#tile-1 .tab-pane {
    padding: 15px;
    height: auto;
    color: #171515;
}
</style>

