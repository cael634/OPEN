<?php
check_admin();

if(isset($eliminar)){
  $eliminar = clear($eliminar);
  $mysqli->query("DELETE FROM transporte WHERE id = '$eliminar'");

  redir("?p=transporte");
}

?>
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800">Transportes</h1> 
            <a href="?p=agregartrans" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus"></i>&nbsp Agregar transporte</a>
          </div>
           <br>
          <div class="card shadow mb-4">
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                   <th>Tipo</th>
		<th>Placa</th>
		<th>Codigo</th>
		<th>Acciones</th>
                
                    </tr>
                  </thead>
                 
                  <tbody>

	<?php

	$id_vendedor = clear($_SESSION['id_vendedor']);
	$q = $mysqli->query("SELECT * FROM transporte WHERE id_vendedor ='$id_vendedor'  ");
	while($r=mysqli_fetch_array($q)){
		$qn = $mysqli->query("SELECT * FROM transportev WHERE id ='".$r['tipo']."'");
	    $rn=mysqli_fetch_array($qn);
		
		?>
			<tr>
				<td><?=$rn['tipos']?></td>
				<td><?=$r['placa']?></td>
				<td><?=$r['codigo']?></td>
				<td>
          <a style="color:#08f" href="?p=modificartrans&id=<?=$r['id']?>"><i class="fas fa-cog"></i></a>
                        &nbsp;
           
					<a  style="color:#08f" href="?p=transporte&eliminar=<?=$r['id']?>"><i class="fa fa-times"></i></a>
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
	.h1, h1 {
    font-size: 2.5rem;
    color: #5a5c69!important;
}
.table {
    width: 100%;
    margin-bottom: 1rem;
    color: #5a5c69!important;
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