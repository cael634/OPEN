<?php
check_admin();

?>



<div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800">Tus Productos</h1> 
            <a href="?p=agregar_product" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus"></i>&nbsp Agregar producto</a>
          </div>
           <br>


     <div class="card shadow mb-4">
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Descuento</th>
    <th>Precio Total</th>
    <th>Imagen</th>
    <th>Categoria</th>
    <th>Acciones</th>
                
                    </tr>
                  </thead>
                 
                  <tbody>

  <?php
  $id_vendedor = clear($_SESSION['id_vendedor']);
  $name_admin = admin_name_connected( $_SESSION['id_vendedor']);
$q = $mysqli->query("SELECT * FROM productos WHERE id_vendedor = '$id_vendedor'");
while ($rp = mysqli_fetch_array($q)){

  $cat = $mysqli->query("SELECT * FROM productos WHERE id = '".'id_producto'."'");
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
          <td><?=$rp['price']?></td>
          <td>
            <?php
              if($rp['oferta']>0){
                echo $rp['oferta']."% de Descuento";
              }else{
                echo "Sin descuento";
              }
            ?>
          </td>

          <td><?=$preciototal?></td>

          <td><img src="../productos/<?=$rp['imagen']?>" class="imagen_carro"/></td>
          <td><?=$categoria?></td>
          <td>
            
            <a style="color:#08f" href="?p=modificar_producto&id=<?=$rp['id']?>"><i class="fa fa-edit"></i></a>
            &nbsp;
            <a style="color:#08f" href="?p=agregar_producto&eliminar=<?=$rp['id']?>"><i class="fa fa-times"></i></a>

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
</div></div></div></div>
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
.card-body {
    flex: 1 1 auto;
    padding: 1.25rem;
    color: #292a2d !important;
}
</style>