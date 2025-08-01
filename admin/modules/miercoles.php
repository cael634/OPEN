<div class="tile" id="tile-1">
<style type="text/css">
   .h1, h1 {
    font-size: 2.0rem;
    color: #5a5c69!important;
}
.table {
    width: 100%;
    margin-bottom: 1rem;
    color: #5a5c69!important;
}
#tile-1 .nav-tabs .active {
    background-color: transparent!important;
    border: none!important;
    color: #0088ff!important;
}
div.dataTables_wrapper div.dataTables_length select {
    width: 71px;
    display: inline-block;
}
</style>
<?php
if(isset($eliminar)){
    $eliminar = clear($eliminar);
    $mysqli->query("DELETE FROM rutas WHERE id = '$eliminar'");

    redir("?p=miercoles");
}
?>
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800">&nbsp;&nbsp;Rutas</h1> 
            <a href="?p=agregar_ru" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus"></i>&nbsp Agregar ruta</a>
          </div>

  <!-- Nav tabs -->
 <ul class="nav nav-tabs nav-justified" role="tablist" style=" border: 1px solid #0c0c0c!important;background: white">
    
     <li class="nav-item">
       <a href="?p=lunes" class="nav-link"> Lunes</a>
      </li>
      <li class="nav-item">
        <a href="?p=martes" class="nav-link" > Martes</a>
      </li>
      <li class="nav-item">
        <a href="?p=miercoles" class="nav-link active" > Miercoles</a>
      </li>
    <li class="nav-item">
         <a href="?p=jueves" class="nav-link"> Jueves</a>
      </li>
         <li class="nav-item">
        <a href="?p=viernes" class="nav-link" > Viernes</a>
      </li>
         <li class="nav-item">
        <a href="?p=sabado" class="nav-link" > Sabado</a>
      </li>
       <li class="nav-item">
       <a href="?p=domingo" class="nav-link" > Domingo</a>
      </li>
  </ul>


  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane fade show active" id="Lunes" role="tabpanel" aria-labelledby="Lunes-tab">

<?php

check_admin();
?>



     <div class="card shadow mb-4">
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
        <th>Nombre de ruta</th>
        <th>Transporte</th>
        <th>Acciones</th>
                
                    </tr>
                  </thead>
                 
                  <tbody>

 <?php
    $id_vendedor = clear($_SESSION['id_vendedor']);
    $name_admin = admin_name_connected( $_SESSION['id_vendedor']);
$q = $mysqli->query("SELECT * FROM rutas WHERE id_vendedor = '$id_vendedor' AND dia = 3  ORDER BY rutas ASC");
while ($rp = mysqli_fetch_array($q)){

            ?>
                <tr>
                    <td><a href="?p=rutainf&id=<?=$rp['id'];?>"><?=$rp['rutas']?></a></a></td>
                    <td><?=$rp['Transporte']?></td>
                   

                   <td>
                        
                        <a style="color:#08f" href="?p=ruta&id=<?=$rp['id']?>"><i class="fas fa-cog"></i></a>
                        &nbsp;
                        <a style="color:#08f" href="?p=miercoles&eliminar=<?=$rp['id']?>"><i class="fa fa-times"></i></a>

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
  background-color: #f7f5f5;
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
  color:#333;
}
button, input {
    overflow: visible;
    display: inline-block;
    width: 20%;
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
.container, .container-fluid {
    padding-left: 10;
    padding-right: 10;
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
<script>
  $("#tile-1 .nav-tabs a").click(function() {
  var position = $(this).parent().position();
  var width = $(this).parent().width();
    $("#tile-1 .slider").css({"left":+ position.left,"width":width});
});
var actWidth = $("#tile-1 .nav-tabs").find(".active").parent("li").width();
var actPosition = $("#tile-1 .nav-tabs .active").position();
$("#tile-1 .slider").css({"left":+ actPosition.left,"width": actWidth});

</script>
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
div.dataTables_wrapper div.dataTables_length select {
    width: 71px !important;
    display: inline-block;
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