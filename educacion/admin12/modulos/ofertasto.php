<?php
check_admin();

?>

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
if(isset($eliminar)){
      $mysqli->query("DELETE FROM ofertas WHERE cod = '$eliminar'");
        redir("?p=ofertasto");
}

$id_vendedor = clear($_SESSION['id_vendedor']);
$q43 = $mysqli->query("SELECT * FROM admins WHERE id =  '$id_vendedor' ");
$r43=mysqli_fetch_array($q43);
if($r43['listo']==1){

?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800">Tus Ofertas</h1> 
           <center>¡El lanazamiento de la App y la Web sera el 22 de Junio!</center>
<center style="font-size:14px">En esa fecha apareceran todos tus productos.</center>
<?php
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
?>
            <a href="?p=ofertasmas&id=<?=substr(str_shuffle($permitted_chars), 0, 16)?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus"></i>&nbsp Agregar ofertas</a>
          </div>
           


     <div class="card shadow mb-4">
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
    <th>#</th>
    <th>Fecha de comienzo</th>
     <th>Fecha de finalización</th>
    <th>Por la compra de estos productos</th>
    <th> Recibe estos productos y/o obsequio</th>

   <th>Acciones</th>
                
                    </tr>
                  </thead>
                 
                  <tbody>

  <?php
  $contador=0;
  $name_admin = admin_name_connected( $_SESSION['id_vendedor']);
  $q22 = $mysqli->query("SELECT DISTINCT cod FROM ofertas"); 
while ($rp121 = mysqli_fetch_array($q22)){
$contador++;
$q43 = $mysqli->query("SELECT * FROM ofertas WHERE cod =  '".$rp121['cod']."' ");
$r43=mysqli_fetch_array($q43);
      ?>
        <tr>
          <td><?=$contador?></td>
          <td>
            <?=$r43['dia1']?>
          </td>
          <td>
            <?=$r43['dia2']?>
          </td>
     
          <td><?php
           $contador312==0;
                $q221 = $mysqli->query("SELECT * FROM oferta WHERE cod = '".$rp121['cod']."' AND tipo = 1");
                 while($r31=mysqli_fetch_array($q221)){
                     $contador312++;
              $qe2 = $mysqli->query("SELECT * FROM productosemp WHERE id ='".$r31['id_pro1']."' ");
      $re2 = mysqli_fetch_array($qe2);
              ?>
              • <?=$re2['name']?> x <?=$r31['cant1']?> &nbsp;
              <?php
$limite=20;
$numero=3;

	if($contador312%$numero==0){
	?>
	<br>
	<?php
	}
?>
              
              <?php
                 }
              ?></td>
          <td><?php
           $contador312==0;
                $q221 = $mysqli->query("SELECT * FROM oferta WHERE cod = '".$rp121['cod']."' AND tipo = 2");
                 while($r31=mysqli_fetch_array($q221)){
                     $contador312++;
      $qe2 = $mysqli->query("SELECT * FROM productosemp WHERE id ='".$r31['id_pro1']."' ");
      $re2 = mysqli_fetch_array($qe2);
              ?>
              • <?=$re2['name']?> x <?=$r31['cant1']?> &nbsp;
              <?php
$limite=20;
$numero=3;

	if($contador312%$numero==0){
	?>
	<br>
	<?php
	}
?>
              
              <?php
                 }
              ?></td>
        

       <td><a href="?p=ofertasto&eliminar=<?=$rp121['cod']?>"><i class="fas fa-times"></i> </a> &nbsp;<a href="?p=ofertasmas&id=<?=$rp121['cod']?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="far fa-edit"></i></a></td>
          
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
  <script src='https://code.jquery.com/jquery-1.10.2.js'></script>
<script src='https://code.jquery.com/ui/1.11.4/jquery-ui.js'></script><script  src="./scripta.js"></script>
<link rel='stylesheet' href='https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css'><link rel="stylesheet" href="./style.css">
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

  $mysqli->query("UPDATE admins SET tipo1 = '$tipo1', tipo2 = '$tipo2', tipo3 = '$tipo3',tipo4 = '$tipo4',tipo5 = '$tipo5', hora1 = '$hora1',hora2 = '$hora2',hora3 = '$hora3', hora4 = '$hora4',part = '$part',montpart = '$montpart',tipdi = '$tipdi',tiempoentre = '$tiempoentre',listo=1 WHERE id = '$id_vendedor'");
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
  <label style="    width: 800px;
">Monto minimo para que sus clientes puedan realizarle pedidos (pude ser 0)</label>
<br>


    <div class="row">
      
       <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
      <div class="form-group">
   
    <input type="number" class="form-control" name="tipo1"placeholder="Tienda"/>
  </div>
      </div>
      <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
       <input type="number" class="form-control" name="tipo2" placeholder="Minimarket"/>
      </div>

    </div>


    <div class="row">
      
       <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
      <input type="number" class="form-control" name="tipo3"  placeholder="Supermercado"/>
      </div>
      <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
   <input type="number" class="form-control" name="tipo4"  placeholder="Restaurante"/>
      </div>

    </div>

<br>


    <div class="row">
      
       <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
    <input type="number" class="form-control"name="tipo5" placeholder="Mayorista"/>
      </div>
 
    </div>
<br>
      <label style="    width: 400px;
">¿Realiza pedidos a clientes particulares?</label>
 <div class="row">

       <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
      <select name="part" required class="form-control">

       <option value="">Elegir opción</option>
       <option value="1">No</option>
       <option value="2">Si</option>

    </select>
  </div>

       <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
      <input type="number" class="form-control" name="montpart" placeholder="Monto minimo para particulares   *Respuesta anterior: Si" />
  </div>
</div>
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
<center>¡El lanazamiento de la App y la Web sera el 22 de Junio!</center>
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
