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
    color: #2f2f31!important;
}
.text-gray-600 {
    color: #5a5c69!important;
}
</style>
<style type="text/css">
  .sidebar {
    width: 6.5rem;
    background-color: #36373a;
    min-height: 100vh;
}
.shadow {
    box-shadow: none!important;
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
    font-size: 2.5rem;
}
.text-gray-600 {
    color: #5a5c69!important;
}
body {
    margin: 0;
    font-family: Nunito,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #111113;
    text-align: left;
    background-color: #fff;
}
</style>
<style type="text/css">
  .form-group {
    margin-bottom: 0.33rem;
    display: inline-block;
    width: 20%;
}
</style>
<style type="text/css">
  .address-card--featured .address-card__body {
    padding: 32px 7px 11px 22px!important;
}
.col-sm-6 {
    flex: 0 0 100%!important;
    max-width: 100%!important;
}
.address-card__name {
    font-size: 16px;
    font-weight: 700;
    margin-bottom: 0.5rem;
}
</style>
<?php
check_admin();
$id = clear($id);
$sc = $mysqli->query("SELECT * FROM clientes WHERE id = '$id'");
$rc = mysqli_fetch_array($sc);
$id_vendedor = $_SESSION['id_vendedor'];
$nombre = $rc['nombrev'];
$tipoc = $rc['tipo'];
$sx = $mysqli->query("SELECT * FROM tipo WHERE id = '$tipoc'");
$rx = mysqli_fetch_array($sx);

?>


                              <div class="col-sm-6 col-12 px-2">
                                    <div class="card address-card address-card--featured" style="    margin: 4px 0px 7px 0px;">
                                        <div class="address-card__body">

                                            <div class="address-card__badge address-card__badge--muted">Informacion del cliente</div>
                                            <div class="address-card__name">Establecimiento: <?=$rc['name']?> </div>
                                            
                                            <div class="address-card__row">
                                                                       <div class="form-group" style="
    width: 36%!important;"> 
                                                <div class="address-card__row-title">Tipo de cliente</div>
                                                <div class="address-card__row-content">
                                                  <?=$rx['tipo']?><br>
                                        
                                                </div>
                                            </div>

                                                     <div class="form-group" style="
    width: 36%!important;"> 
                                            <div class="address-card__row">
                                                <div class="address-card__row-title">Nomre del encargado</div>
                                                <?=$nombre?>
                                                
                                            </div>
                                          </div>
                                        <div class="form-group" style="
    width: 16%!important;">   
                                            <div class="address-card__row">
                                                <div class="address-card__row-title">Dirección</div>
                                                <div class="address-card__row-content"><?=$rc['direccion']?></div>
                                            </div>
</div>
 
                                        </div>
                                    </div>
                                </div>

 <form method="post" action="">
     <div class="row">
  &nbsp;&nbsp;&nbsp;  
  <?php
  ?>  
      <select id="categoria" name="catw" class="form-control" style="width: 50%">

      <option  value="0">Escoger mes:</option>
      <option  value="1">Enero</option>
      <option  value="2">Febrero</option>
      <option  value="3">Marzo</option>
      <option  value="4">Abril</option>
      <option value="5">Mayo</option>
      <option value="6">Junio</option>
      <option  value="7">Julio</option>
      <option  value="8">Agosto</option>
      <option  value="9">Sepetiembre</option>
      <option value="10">Octubre</option>
      <option  value="11">Noviembre</option>
      <option value="12">Dicimbre</option>


        

        </select>
</form>
<div class="col-md-2">
        <button type="submit" class="btn btn-prmiary" name="buscar" style="
    background: #29393a;
    color: white;
    width: 80%;
"><i class="fa fa-serch" ></i> Filtrar mes</button>
      </div>
</div>
<?php
if(!isset($catw)){
?>
         <div class="card shadow mb-4">
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
         <th><center>Orden</center></th>
        <th><center>Fecha</center></th>
        <th><center>Monto</center></th>
        <th><center>Estado</center></th>
                
                    </tr>
                  </thead>
                 
                  <tbody>

<?php
         $sp1 = $mysqli->query("SELECT * FROM compra WHERE id_cliente='$id' ");
        while($rp1=mysqli_fetch_array($sp1)){
        $sp = $mysqli->query("SELECT * FROM compven WHERE compra= '".$rp1['id']."' AND id_vendedor='".$_SESSION['id_vendedor']."'");
        while($rp=mysqli_fetch_array($sp)){
          $contador110=0;
      $sa11 = $mysqli->query("SELECT * FROM productos_compra WHERE id_vendedor = '$id_vendedor' AND id_compra = '".$rp1['id']."'");
    while ($r21 = mysqli_fetch_array($sa11)){
        $contador110++;}

            ?>
                <tr>
                    <td><center><a href="?p=ver_compra&id=<?=$rp['id']?>"># <?=$rp['id']?></a></center></td>
                    <td><center><?=fecha($rp['fecha'])?></center></td>
                    <td><center>$ <?=number_format($rp['monto'])?>  por <?=$contador110?> producto(s)</center></td>
                    <td><center><?=estado($rp['estado'])?> &nbsp; &nbsp;
        <a  style="color:#08f" href="?p=manejar_status&id=<?=$rp['id']?>">
        <i class="fa fa-edit"></i>
        </a></center></td>
                </tr>
            <?php
        }
      }
    ?>
</table>
</table>


<?php
}else{
?>
         <div class="card shadow mb-4">
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
         <th><center>Orden</center></th>
        <th><center>Fecha</center></th>
        <th><center>Monto</center></th>
        <th><center>Estado</center></th>
                
                    </tr>
                  </thead>
                 
                  <tbody>

<?php
         $sp1 = $mysqli->query("SELECT * FROM compra WHERE id_cliente='$id' ");
        while($rp1=mysqli_fetch_array($sp1)){
        $sp = $mysqli->query("SELECT * FROM compven WHERE compra= '".$rp1['id']."' AND id_vendedor='".$_SESSION['id_vendedor']."' AND MONTH(fecha)='$catw'");
        while($rp=mysqli_fetch_array($sp)){

            ?>
                <tr>
                    <td><center><a href="?p=ver_compra&id=<?=$rp['id']?>"># <?=$rp['id']?></a></center></td>
                    <td><center><?=fecha($rp['fecha'])?></center></td>
                    <td><center>$ <?=number_format($rp['monto'])?></center></td>
                    <td><center><?=estado($rp['estado'])?> &nbsp; &nbsp;
        <a  style="color:#08f" href="?p=manejar_status&id=<?=$rp['id']?>">
        <i class="fa fa-edit"></i>
        </a></center></td>
                </tr>
            <?php
        }
      }
    ?>
</table>
</table>
<?php
}
?>


</tbody>
</table>
</div></div></div></div>

