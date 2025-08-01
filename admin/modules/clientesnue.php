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
    font-size: 1.2rem;
}
.text-gray-600 {
    color: #5a5c69!important;
}
</style>
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
.shadow {
    box-shadow: none!important;
    border: 0.5px solid #bfc1d0!important;
}
#primary_nav_wrap ul li:hover > ul
{
  display:block
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
<?php

check_admin();

if(isset($eliminar)){
  $eliminar = clear($eliminar);

$mysqli->query("DELETE FROM clientenuevo WHERE id = '$eliminar'");

 redir("?p=clientesnue");
}
	$s = $mysqli->query("SELECT * FROM  clientenuevo WHERE id_vendedor = '".$_SESSION['id_vendedor']. "'");

?>


<div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800">Clientes.</h1> 
          </div>

<html lang="en">


<nav id="primary_nav_wrap">
<ul style="border:1px solid">
  <li ><a href="?p=clientes">Clientes con asignacion de ruta</a></li>

  
  <li class="current-menu-item"><a href="?p=clientesnue">Clientes nuevos (sin asignacion de ruta)</a>
   
</ul>
</nav><br><br>
          <div class="card shadow mb-4">
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nombre del negocio</th>
                      <th>Nombre del encargado</th>
                      <th>Dirección</th>
                      <th>Tipo de negocio</th>
                      <th>Acción</th>
                
                    </tr>
                  </thead>
                 
                  <tbody>

	<?php
	while($r=mysqli_fetch_array($s)){

  
	$sc = $mysqli->query("SELECT * FROM clientes  WHERE id = '".$r['id_cliente']."'"); 
	$rc = mysqli_fetch_array($sc);

	
	$cliente = $rc['name'];

	$direccion = $rc['direccion'];
  $tipo = $rc['tipo'];

  if($tipo == 1){
      $tipo = "Tienda";
  }
  if($tipo == 2){
     $tipo = "Minimarket";
  }
  if($tipo == 3){
     $tipo = "Supermercado";
  }
  if($tipo == 4){
     $tipo = "Restaurante";
  }
  if($tipo == 5){
     $tipo = "Mayorista";
  }
 

	
	
	?>
			<tr>
				<td><?=$cliente?></td>
		    <td><?=$rc['nombrev']?></td>
				<td><?=$direccion?></td>
        <td><?=$tipo?></td>


				<td>

					<a  style="color:#08f" href="?p=clientesnue&eliminar=<?=$r['id']?>"><i class="fa fa-times"></i></a>
					&nbsp; &nbsp;<a style="color:#08f" href="?p=añadiruta&id=<?=$r['id']?>">
				<i class="fa fa-edit"></i>
			</a>
				</td>
			</tr>
		<?php
	}
	?>
</table>
</table>

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
