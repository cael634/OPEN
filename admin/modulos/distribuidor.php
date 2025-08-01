
<?php
check_admin();

if(isset($eliminar)){
  $eliminar = clear($eliminar);
  $mysqli->query("DELETE FROM seguimiento WHERE id = '$eliminar'");

  redir("?p=distribuidor");
}

?>
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800">Personal de distribución.</h1> 
           
            <a href="?p=agregar_personal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus"></i>&nbsp Agregar personal de distribución</a>
          </div>
        Este módulo puede usarlo para la App OPEN repartidor o solo para complementar la información de la ruta.<br>
<br>

  <!-- End of Topbar -->

        <!-- Begin Page Content -->
     
  <div class="card shadow mb-4">
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Usuario</th>
                      <th>Contraseña</th>
                      <th>Acciones</th>
                
                    </tr>
                  </thead>
                 
                  <tbody>

<?php
  $id_vendedor = $_SESSION['id_vendedor'];
  $q = $mysqli->query("SELECT * FROM seguimiento WHERE id_vendedor= '$id_vendedor' ORDER BY id ASC");
  while($r=mysqli_fetch_array($q)){
    ?>
    <tr>
        <td>
<?php
 $qn = $mysqli->query("SELECT * FROM admins WHERE id= '".$_SESSION['id_vendedor']."' ");
                $rl=mysqli_fetch_array($qn);
                 if ($rl['tipo']==1) {
       
                    ?>
        <?=$r['name']?>
<?php
}else{
  ?>
   <a style="color:#08f" href="?p=repartidorever&id=<?=$r['id']?>"><?=$r['name']?></a>
  <?php
  # code...
}
?>

       </td>
        <td><?=$r['username']?></span></td>
        <td><?=$r['password']?></td>
        <td>
          <a style="color:#08f" href="?p=manejarrepart&id=<?=$r['id']?>"><i class="fas fa-cog"></i></a>
                        &nbsp;
          <a  style="color:#08f" href="?p=distribuidor&eliminar=<?=$r['id']?>"><i class="fa fa-times"></i></a>
        </td>
      </tr>
    <?php
  }
  ?>
</table>
</table>
<script type="text/javascript">
  $(document).on('click', '#ver', function() {
    if ($('#senha').attr('type') == 'password') {
      $('#senha').attr('type', 'text');
      $('#ver').attr('class', 'fa fa-eye-slash');
      $('#ver').attr('title', 'Ocultar Senha');
    } else {
      $('#senha').attr('type', 'password');
      $('#ver').attr('class', 'fa fa-eye');
      $('#ver').attr('title', 'Mostrar Senha');
    }
});


</script>
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
    color: #292a2d !important;
    border-spacing: 0;
}
.card-body {
    flex: 1 1 auto;
    padding: 1.25rem;
    color: #292a2d !important;
}
</style>