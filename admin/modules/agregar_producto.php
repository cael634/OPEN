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
  <script src="js/demo/datatables-demo.js"></script>   <script src="vendor/jquery/jquery.min.js"></script>
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
<?php
check_admin();

?>
<style>
    .mb-4, .my-4 {
    margin-bottom: 1rem!important;
}
</style>
 
   <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<style type="text/css">
  table.dataTable {
    clear: both;
    margin-top: 6px !important;
    margin-bottom: 6px !important;
    max-width: none !important;
    border-collapse: separate !important;
    color: #292a2d !important;
    border-spacing: 0;
}
.shadow {
    box-shadow: none!important;
}
.card-body {
    flex: 1 1 auto;
    padding: 1.25rem;
    color: #292a2d !important;
}

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
<?php

if(isset($eliminar1)){
  $eliminar1 = clear($eliminar1);

  $mysqli->query("DELETE FROM productosemp WHERE id = '$eliminar1'");

 redir("?p=agregar_producto");
}
$id_vendedor = clear($_SESSION['id_vendedor']);
$q43 = $mysqli->query("SELECT * FROM admins WHERE id =  '$id_vendedor' ");
$r43=mysqli_fetch_array($q43);
if($r43['listo']==0){

?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800">Tus Productos</h1> 
 
            <a href="?p=agregar_product" class=" d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus"></i>&nbsp Agregar producto</a>
            <!-- <a href="?p=ofertasto" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-cart-arrow-down"></i>&nbsp Agregar ofertas</a>-->
          </div>

<af style="font-size:14px">En esa fecha apareceran todos tus productos.</af>     
<br><br>

     <div class="card shadow mb-4">
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Descuento</th>
    <th>Precio con descuento</th>
    <th>Imagen</th>
    <th>Categoria</th>
     <th>Estado</th>
    <th>Acciones</th>
   
                
                    </tr>
                  </thead>
                 
                  <tbody>

  <?php
  $name_admin = admin_name_connected( $_SESSION['id_vendedor']);
$q = $mysqli->query("SELECT * FROM productosemp WHERE id_vendedor = '$id_vendedor'");
while ($rp = mysqli_fetch_array($q)){

  $cat = $mysqli->query("SELECT * FROM productosemp WHERE id = '".'id_producto'."'");
$cat = $mysqli->query("SELECT * FROM categorias WHERE id = '".$rp['id_categoria']."'");
      if(mysqli_num_rows($cat)>0){
        $rcat = mysqli_fetch_array($cat);
        $categoria = $rcat['categoria'];
      }else{
        $categoria = "--";
      }
      if($rp['oferta']>0){
        if(strlen($rp['oferta'])==1){
          $desc = "0.0".$rp['oferta'];
        }else{
          $desc = "0.".$rp['oferta'];
        }
        $preciototal = $rp['price'] -($rp['price'] * $desc);
      }else{
        $preciototal = $rp['price'];
      }
      ?>
        <tr>
          <td><?=$rp['name']?></td>
          <td><?=$divisa?><?=number_format($rp['price'])?></td>
          <td>
            <?php
              if($rp['oferta']>0){
                echo $rp['oferta']."% de Descuento";
              }else{
                echo "Sin descuento";
              }
            ?>
          </td>

          <td><?=$divisa?><?=number_format($preciototal)?></td>

          <td><img src="../productos/<?=$rp['imagen']?>" class="imagen_carro"/></td>
          <td><?=$categoria?></td>
          <?php
          if($rp['estado']==0){
           ?>
           <td style="color:green;    width: 86px;"><i class="fas fa-check-circle"></i> En Stock</td>
           <?php
          }else{
          ?>
          <td style="color:red;    width: 86px;"> Sin Stock</td>
          <?php
          }
          ?>
          
          <td>
            
            <a style="color:#08f" href="?p=modificar_producto&id=<?=$rp['id']?>"><i class="fa fa-edit"></i></a>
            &nbsp;
            <a style="color:#08f" href="?p=agregar_producto&eliminar1=<?=$rp['id']?>"><i class="fa fa-times"></i></a>
 &nbsp;&nbsp;<a style="color:#08f" href="?p=productosestadisticasuni&producto=<?=$rp['id']?>&mesr=<?=date('m')?>&anior=<?=date('Y')?>"><i class="fas fa-chart-line"></i></a>
          </td>
        </tr>
      <?php
    }
  ?>
</table>
</table>

</tbody>
</table>
</div></div></div></div></div>
<?php
}else{
?>

<style type="text/css">
  .col-lg-9 {
    flex: 0 0 100%;
    max-width: 100%;
}
.col-xl-8 {
    flex: 0 0 100%;
    max-width: 100%;
}
.card-header:first-child {
    border-radius: calc(.35rem - 1px) calc(.35rem - 1px) 0 0;
    display: none;
}
.card-divider {
    height: 2px;
    background: #f0f0f0;
    display: none;
}
select.form-control, select.form-control:valid, select.form-control.is-valid, select.form-control:invalid, select.form-control.is-invalid {
    background-image: none;
    background-repeat: no-repeat;
    background-size: 5px 10px;
}
.mb-4, .my-4 {
    margin-bottom: 1rem!important;
}
.form-control:valid, .form-control.is-valid, .form-control:invalid, .form-control.is-invalid {
    background-image: none;
    display: initial!important;
}
.form-group {
    display: flex;
    margin-bottom: 1rem;
}
label {
    display: inline-block;
    margin-bottom: .5rem;
    color: #0e0e0e!important;
    /* height: 30px; */
    width: 210px;
}
</style>

 <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="card">
                                
                                <div class="card-divider"></div>
                                <div class="card-body">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-lg-10 col-xl-8">
<div class="d-sm-flex align-items-center justify-content-between mb-4" style="margin-bottom: 2rem!important;">
           <h1 class="h3 mb-0 text-gray-800" style="    font-size: 22px;">Antes de comenzar. Información para ventas.  </h1> 
          ¡ Nos adaptamos a las diferentes necesidades de las empresas !
          </div>
          
<?php
check_admin();
  $id_vendedor = $_SESSION['id_vendedor'];
if(isset($buscar12)){

  $mysqli->query("UPDATE admins SET tipo1 = '$tipo1', tipo2 = '$tipo2', tipo3 = '$tipo3',tipo4 = '$tipo4',tipo5 = '$tipo5', hora1 = '$hora1',hora2 = '$hora2',hora3 = '$hora3', hora4 = '$hora4',part = '$part',montpart = '$montpart',tipdi = '$tipdi',tiempoentre = '$tiempoentre',listo=1,pre1='$pre1',pre2='$pre2',pre3='$pre3',pre4='$pre4',pre5='$pre5',ofer1='$ofer1',ofer2='$ofer2',ofer3='$ofer3',ofer4='$ofer4',ofer5='$ofer5',ofer6='$ofer6' WHERE id = '$id_vendedor'");
  redir("?p=agregar_producto");
}
?>


<form method="post" action="" >
  <div class="form-group">
<label>Opciones para manejo de estado de pedidos</label>
    <select name="categoria" required class="form-control">

     <option value="">Elegir opción</option>
        <option value="1">Usar App repartidor</option>
           <option value="2">Cambiar estado de la compra desde el panel</option>
            <option value="2">Al llegar el pedido, su cliente puede cambiar el estado de este a terminado</option>

    </select>

  </div>
    <h1 class="h3 mb-0 text-gray-800" style="    font-size: 22px;">Toma de pedidos de sus diversos tipos de clientes  </h1>
    <br>
*Al marcar no en alguna de las siguientes casillas pase por alto el monto mínimo de al lado de la casilla marcada con dicha respuesta.
<br>
    <br>

  <label style="    width: 800px;
">Información para pedidos realizados por Tiendas</label>


    <div class="row">
      
       <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
      <div class="form-group">
        <select name="pre1" required class="form-control">

       <option value="">¿Tomara pedidos de Tiendas?</option>
       <option value="1">Si</option>
       <option value="2">No</option>

    </select>

  </div>
      </div>
      <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
       <input type="number" class="form-control" name="ofer1" placeholder="Monto minimo para Tiendas"/>
      </div>

  <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
       <input type="number" class="form-control" name="tipo3"placeholder="Descuento del pedido para Tiendas (%)"/>
      </div>
    </div>
    <br>
  <label style="    width: 800px;
">Información para pedidos realizados por Minimarkets</label>
    <div class="row">
      
       <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
      <div class="form-group">
        <select name="pre2" required class="form-control">

       <option value="">¿Tomara pedidos de minimarkets?</option>
       <option value="1">Si</option>
       <option value="2">No</option>

    </select>

  </div>
      </div>
      <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
       <input type="number" class="form-control" name="tipo2"placeholder="Monto minimo para Minimarkets"/>
      </div>

     <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
       <input type="number" class="form-control" name="ofer2"placeholder="Descuento del pedido para Minimarkets (%)"/>
      </div>
    </div>
    <br>
 <label style="    width: 800px;
">Información para pedidos realizados por Restaurantes</label>
    <div class="row">
      
       <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
      <div class="form-group">
        <select name="pre3" required class="form-control">

       <option value="">¿Tomara pedidos de restaurante?</option>
       <option value="1">Si</option>
       <option value="2">No</option>

    </select>

  </div>
      </div>
      <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
       <input type="number" class="form-control" name="tipo3"placeholder="Monto minimo para restaurantes"/>
      </div>
 <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
       <input type="number" class="form-control" name="ofer3"placeholder="Descuento del pedido para restaurantes (%)"/>
      </div>
    </div>
    <br>
    
    
     <label style="    width: 800px;
">Información para pedidos realizados por Supermercados</label>
    <div class="row">
      
       <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
      <div class="form-group">
        <select name="pre4" required class="form-control">

       <option value="">¿Tomara pedidos de Supermercados?</option>
       <option value="1">Si</option>
       <option value="2">No</option>
       

    </select>

  </div>
      </div>
      <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
       <input type="number" class="form-control" name="tipo4"placeholder="Monto minimo para supermercados"/>
      </div>
    <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
       <input type="number" class="form-control" name="ofer4"placeholder="Descuento del pedido para supermercados (%)"/>
      </div>
    </div>
         <label style="    width: 800px;
">Información para pedidos realizados por Mayoristas y/o distribuidores</label>
        <div class="row">
      
       <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
      <div class="form-group">
        <select name="pre5" required class="form-control">

       <option value="">¿Tomara pedidos de Mayoristas y/o distribuidores?</option>
       <option value="1">Si</option>
       <option value="2">No</option>
       

    </select>

  </div>
      </div>
      <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
       <input type="number" class="form-control" name="tipo5"placeholder="Monto minimo para Mayoristas y/o distribuidores"/>
      </div>

    <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
       <input type="number" class="form-control" name="ofer5"placeholder="Descuento del pedido para Mayoristas y/o distribuidores (%)"/>
      </div>
    </div>
    <br>



      <label style="    width: 700px;
">Información para pedidos realizados por clientes particulares (canal directo)</label>
 <div class="row">

       <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
      <select name="part" required class="form-control">

       <option value="">¿Tomara pedidos de clientes particulares (canal directo)?</option>
       <option value="1">No</option>
       <option value="2">Si</option>

    </select>
  </div>

       <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
      <input type="number" class="form-control" name="montpart" placeholder="Monto minimo para clientes particulares (canal directo) " />
  </div>

    <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
       <input type="number" class="form-control" name="ofer6"placeholder="Descuento del pedido para clientes particulares (canal directo)  (%)"/>
      </div>
    </div>
    <br>
<br>
<?php
$q43 = $mysqli->query("SELECT * FROM admins WHERE id =  '$id_vendedor' ");
$r43=mysqli_fetch_array($q43);
if($r43['tipo']==2){
    ?>
  <div class="form-group">
    <label>Tipo de distribución</label>
    <select name="tipdi" required class="form-control">

     <option value="">Opciones</option>
        <option value="1">Añadir dia o dias de entrega semanal y lapso de antelación para cada cliente</option>
        <option value="2">Tiempo promedio de entrega.</option>

    </select>
  </div>
  * Solo si marco (Tiempo promedio de entrega)<br>
    <div class="form-group">
                                <label for="checkout-street-address">
                                          * Horario de entregas:</label>
                                            <br><br>
                                            <div class="form-row" style="    width: 605px;">
                                                  <label for="checkout-street-address">Lunes a sabado: </label>
                                                   &nbsp; De  &nbsp;
                                            <div class="form-group">
                                                    <input type="time" id="hora1" name="hora1" >
                                            </div>
                                            
                                            <div class="form-group">
                                                &nbsp; hasta &nbsp; 
                                                <input type="time" id="hora2" name="hora2" >
                                            </div>
                                        
                                            <div class="form-group">
                                              
                                                   <label for="checkout-street-address">Domingos y festivos: </label>
                                                   &nbsp; De  &nbsp;<input type="time" id="hora3" name="hora3" >
                                            </div>
                                            <div class="form-group">
                                                  &nbsp; hasta &nbsp; 
                                                <input type="time" id="hora4" name="hora4" >
                                            </div>
</div>
                
  </div>
    <div class="form-group">
    <label>*Tiempor pormedio de entrega de pedido</label>
    <select name="tiempoentre" required class="form-control">

     <option value="">Elegir opción</option>
        <option value="0"> Mismo dia</option>
        <option value="1"> 1 dia</option>
        <option value="2"> 2 dia</option>
        <option value="3"> 3 dia</option>
        <option value="4"> 4 dia</option>
        <option value="5"> 5 dia</option>
        <option value="6"> 6 dia</option>
        <option value="7"> 1 semana</option>



    </select>
  </div>
<?php
}
?>

 
   <style>
    textarea {
    overflow: auto;
    width: 100%;
    resize: vertical;
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
</style>
  <style>
.form-controle {
    display: block;
    width: 40%!important;
    height: calc(2.65rem + 2px);
    padding: 0.375rem .75rem;
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
}</style>





  <br><br>
<center>¡El lanzamiento de la App y la Web sera el 22 de Junio!</center>
<center style="font-size:14px">En esa fecha apareceran todos tus productos</center>
  <div class="form-group">
    <button type="submit" class="btn btn-success" name="buscar12"><i class="fa fa-check"></i> Terminar</button>
  </div>

</form><br>

<br>
<style type="text/css">
  label {
    display: inline-block;
    margin-bottom: .5rem;
    color: #0e0e0e!important;
}
.text-gray-800 {
    color: #0e0e0e!important;
}
</style>
<?php
}
?>
