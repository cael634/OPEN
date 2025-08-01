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
$nombre = $rc['nombrev'];
$tipoc = $rc['tipo'];
$sx = $mysqli->query("SELECT * FROM tipo WHERE id = '$tipoc'");
$rx = mysqli_fetch_array($sx);
?>
<style type="text/css">
  .address-card--featured .address-card__body {
    padding: 32px 7px 11px 22px!important;
}
.col-sm-6 {
    flex: 0 0 100%!important;
    max-width: 100%!important;
}
</style>

                              <div class="col-sm-6 col-12 px-2">
                                    <div class="card address-card address-card--featured">
                                        <div class="address-card__body">

                                            <div class="address-card__badge address-card__badge--muted">Informacion del cliente</div>
                                            <div class="address-card__name">Cliente: <?=$nombre?></div>
                                            
                                            <div class="address-card__row">
                                                                       <div class="form-group" style="
    width: 36%!important;"> 
                                                <div class="address-card__row-title">Datos del clientes</div>
                                                <div class="address-card__row-content">
                                                  Tipo de cliente: <?=$rx['tipo']?><br>
                                              Nombre del establecimento: <?=$rc['name']?><br>
                                                </div>
                                            </div>

                                                     <div class="form-group" style="
    width: 36%!important;"> 
                                            <div class="address-card__row">
                                                <div class="address-card__row-title">Datos de la compra</div>
                                                <div class="address-card__row-content"> Estado: <?=estado($rm['estado'])?><br>
                                              Fecha de compra: <?=fecha($rm['fecha'])?></div>
                                            </div>
                                          </div>
                                        <div class="form-group" style="
    width: 16%!important;">   
                                            <div class="address-card__row">
                                                <div class="address-card__row-title">Dirección</div>
                                                <div class="address-card__row-content"><?=$rc['direccion']?></div>
                                            </div>
</div>
  <div class="form-group" style="
    width: 16%!important;">
                                            <div class="address-card__row">
                                                <div class="address-card__row-title">Monto de la compra</div>
                                                <div class="address-card__row-content"><?=$divisa?><?=number_format($rm['monto'])?> </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
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
					<td><center>$ <?=number_format($rp['monto'])?></center></td>
					<td><center>$ <?=number_format($montototal)?></center></td>
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
