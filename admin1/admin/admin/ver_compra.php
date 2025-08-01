<?php
check_admin();
$id = clear($id);
$s = $mysqli->query("SELECT * FROM compven WHERE id = '$id'");
$rm = mysqli_fetch_array($s);
$sl = $mysqli->query("SELECT * FROM compra WHERE id= '".$rm['compra']."'");
$r = mysqli_fetch_array($sl);
$sc = $mysqli->query("SELECT * FROM clientes WHERE id = '".$r['id_cliente']."'");
$rc = mysqli_fetch_array($sc);
$id_vendedor = $_SESSION['id_vendedor'];
$nombre = $rc['name'];

?>
<h1>Tienda : <span style="color:#08f"><?=$nombre?></span></h1><br>

Fecha:&nbsp&nbsp<?=fecha($rm['fecha'])?><br>
Monto:&nbsp&nbsp<?=number_format($rm['monto'])?> <?=$divisa?><br>
Estado:&nbsp&nbsp<?=estado($rm['estado'])?><br>
<br>

	
	     <div class="card shadow mb-4">
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th><center>Nombre del producto</center></th>
		<th><center>Cantidad</center></th>
		<th><center>Monto</center></th>
		<th><center>Monto Total</center></th>
                
                    </tr>
                  </thead>
                 
                  <tbody>

<?php
       
		$sp = $mysqli->query("SELECT * FROM productos_compra WHERE id_vendedor = '$id_vendedor' AND id_compra = '".$rm['compra']."'");
		while($rp=mysqli_fetch_array($sp)){
			$spro = $mysqli->query("SELECT * FROM productos WHERE id = '".$rp['id_producto']."'");
			$rpro = mysqli_fetch_array($spro);
			$nombre_producto = $rpro['name'];
			$montototal = $rp['monto'] * $rp['cantidad'];
			?>
				<tr>
					<td><center><?=$nombre_producto?></center></td>
					<td><center><?=$rp['cantidad']?></center></td>
					<td><center><?=number_format($rp['monto'])?></center></td>
					<td><center><?=number_format($montototal)?></center></td>
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
    color: #2f2f31!important;
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
    margin-bottom: 1rem;
    display: inline-block;
    width: 20%;
}
</style>
