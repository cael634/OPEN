<?php
check_admin();
$id = clear($id);
$id_vendedor = $_SESSION['id_vendedor'];
$s = $mysqli->query("SELECT * FROM rutas WHERE id = '$id' AND id_vendedor='$id_vendedor'");
$r = mysqli_fetch_array($s);
$ruto=$r['rutas'];
if(isset($transporte)){
	$select5 = clear($select5);
	$mysqli->query("UPDATE rutas SET Transporte = '$select5' WHERE id = '$id'");
	redir("?p=ruta&id=$id");
}
if(isset($repartidor)){
    $select7 = clear($select7);
	 $qq = $mysqli->query("INSERT INTO respartirutas (id_vendedor,ruta,repartidor) VALUES ('$id_vendedor','$id','$select7')");
	redir("?p=ruta&id=$id");
}
if(isset($dias)){
	$select6 = clear($select6);
	 $qs = $mysqli->query("INSERT INTO dia (ruta,dia,id_vendedor) VALUES ('$ruto','$select6','$id_vendedor')");
	redir("?p=ruta&id=$id");
}

if(isset($eliminar1)){
  $eliminar1 = clear($eliminar1);

  $mysqli->query("DELETE FROM respartirutas WHERE id = '$eliminar1'");

 redir("?p=ruta&id=$id");
}
if(isset($eliminar2)){
  $eliminar2 = clear($eliminar2);

$mysqli->query("DELETE FROM dia WHERE id = '$eliminar2'");

 redir("?p=ruta&id=$id");
}


?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800">Modificar ruta <?=$r['rutas']?></h1> 
          </div>

<style type="text/css">
	.mb-4, .my-4 {
    margin-bottom: 1.5rem!important;
    color: black;
}
table.dataTable {
    clear: both;
    margin-top: 6px !important;
    margin-bottom: 6px !important;
    max-width: none !important;
    border-collapse: separate !important;
    border-spacing: 0;
    color: black;
}
.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #000000;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #d1d3e2;
    border-radius: .35rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.table-bordered thead td, .table-bordered thead th {
    border-bottom-width: 2px;
    color: black;
}
.table-bordered td, .table-bordered th {
    border: 1px solid #e3e6f0;
    color: black;
}
</style>
  <label for="checkout-country" style="color: black">Transporte:</label>
 <form method="post" action="">
     <div class="row">
  &nbsp;&nbsp;&nbsp; 

     <select name="select5" id="select5" class="form-control form-control-select2" style="
    display: block;
    width: 30%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #29393a;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #d1d3e2;
    border-radius: .35rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;">
             	<?php
             	 $qy = $mysqli->query("SELECT * FROM rutas WHERE id ='$id' ");
                 $ry = mysqli_fetch_array($qy);
                 $tipa =$ry['Transporte'];
                 $qv = $mysqli->query("SELECT * FROM transporte WHERE id ='$tipa' ");
                 $rv = mysqli_fetch_array($qv);
                 $tipar =$rv['tipo'];
                 $codigo =$rv['codigo'];
                 $qh = $mysqli->query("SELECT * FROM transportev WHERE id ='$tipar' ");
                 $rh = mysqli_fetch_array($qh);
                  ?>
              <option value=""><?=$codigo?> (<?=$rh['tipos']?>)</option>
                <?php
                 $qn = $mysqli->query("SELECT * FROM transporte WHERE id_vendedor='$id_vendedor' ");
                  while($rl=mysqli_fetch_array($qn)){
                  	$tipo=$rl['tipo'];
                  $qx = $mysqli->query("SELECT * FROM transportev WHERE id ='$tipo' ");
                  $rx = mysqli_fetch_array($qx);
                 ?>
               <option value="<?=$rl['id']?>" ><?=$rl['codigo']?> (<?=$rx['tipos']?>)</option>
                    <?php
}

                     ?>
               </select> 

</form>
<div class="col-md-2">
        <button type="submit" class="btn btn-prmiary" name="transporte" style="
    background: #29393a;
    color: white;
    width: 80%;
"><i class="fa fa-serch" ></i> Modificar</button>
      </div>
</div>
</form>

   <label for="checkout-country" style="color: black">Repartidor(es):</label>
   <form method="post" action="">
     <div class="row">
  &nbsp;&nbsp;&nbsp; 

     <select name="select7" id="select7" class="form-control form-control-select2" style="
    display: block;
    width: 30%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #29393a;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #d1d3e2;
    border-radius: .35rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;">
             	<?php
             	 
             	 $sd = $mysqli->query("SELECT * FROM seguimiento WHERE id_vendedor ='$id_vendedor' ");
             	 while($rd=mysqli_fetch_array($sd)){
             	 	$repar=$rd['id'];
             	 $contador45=0;
                 $st = $mysqli->query("SELECT * FROM respartirutas WHERE ruta = '$id' AND repartidor='$repar' "); 
             	 while($rt=mysqli_fetch_array($st)){
             	 	$contador45++;
             	 }
             	 if($contador45==0){
                
                 ?>
               <option value="<?=$rd['id']?>" ><?=$rd['name']?> </option>
                    <?php
}}

                     ?>
               </select> 

</form>
<div class="col-md-2">
        <button type="submit" class="btn btn-prmiary" name="repartidor" style="
    background: #29393a;
    color: white;
    width: 130%;
"><i class="fa fa-serch" ></i>Agregar repartidor</button>
      </div>
</div>
</form>
                   <div class="card shadow mb-4">
           
            <div class="card-body">
              <div class="table-responsive">
               

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                  <thead>
                    <tr>
                     <th>Nombre</th>
                      <th>Acción</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nombre</th>
                      <th>Acción</th>
                    </tr>
                  </tfoot>
                  <tbody><center>Repartidores vinculados a esta ruta</center>
  <?php
  $sg = $mysqli->query("SELECT * FROM respartirutas WHERE ruta = '$id' ");                                                    
  while($rg=mysqli_fetch_array($sg)){
  	$er=$rg['repartidor'];
  	$qy = $mysqli->query("SELECT * FROM seguimiento WHERE id ='$er' ");
    $ry = mysqli_fetch_array($qy);
    ?>
                    <tr>

                      <td><?=$ry['name']?></td>
                      <td><a  style="color:#08f"  href="?p=ruta&id=<?=$id?>&eliminar1=<?=$rg['id']?>">
                      	<i class="fa fa-times"></i>
        </a></td>
               
                     
                   
                   
                    </tr>
                    
          <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>                           



           <label for="checkout-country" style="color: black">Dias habiles para realizar el pedido:</label>
              <form method="post" action="">
     <div class="row">
  &nbsp;&nbsp;&nbsp; 

     <select name="select6" id="select6" class="form-control form-control-select2" style="
    display: block;
    width: 30%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #29393a;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #d1d3e2;
    border-radius: .35rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;">
       <?php

$ruto=$r['rutas'];
?>      
              <option value="">Dias</option>
                <?php
                  for ($i = 1; $i < 8; $i++) {

  $contador=0;
  $sl = $mysqli->query("SELECT * FROM dia WHERE ruta = '$ruto' AND dia= '$i' ");                                                    
  while($rl=mysqli_fetch_array($sl)){
  	$contador++;
  }
  if($contador==0){
  	if($i==1){
  		$ia='Lunes';
  	}
  	if($i==2){
  		$ia='Martes';
  	}
  	if($i==3){
  		$ia='Miercoles';
  	}
  	if($i==4){
  		$ia='Jueves';
  	}
  	if($i==5){
  		$ia='Viernes';
  	}
  	if($i==6){
  		$ia='Sabado';
  	}
  	if($i==7){
  		$ia='Domingo';
  	}
  	?>
               <option value="<?=$i?>" ><?=$ia?> </option>
                    <?php
}}

                     ?>
               </select> 

</form>
<div class="col-md-2">
        <button type="submit" class="btn btn-prmiary" name="dias" style="
    background: #29393a;
    color: white;
    width: 100%;
"><i class="fa fa-serch" ></i>Agregar dia</button>
      </div>
</div>
</form>
                   <div class="card shadow mb-4">
           
            <div class="card-body">
              <div class="table-responsive">
               

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                  <thead>
                    <tr>
                     <th><center>Dias habiles para realizar el pedido</center></th>
                      <th><center>Acción</center></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th><center>Dias habiles para realizar el pedido</center></th>
                      <th><center>Acción</center></th>
                    </tr>
                  </tfoot>
                  <tbody>
  <?php
  $sm = $mysqli->query("SELECT * FROM dia WHERE ruta = '$ruto' ");                                                    
  while($rm=mysqli_fetch_array($sm)){
    ?>
<tr>
      <?php              
    if($rm['dia']==1){
  		$iar='Lunes';
  	}
  	if($rm['dia']==2){
  		$iar='Martes';
  	}
  	if($rm['dia']==3){
  		$iar='Miercoles';
  	}
  	if($rm['dia']==4){
  		$iar='Jueves';
  	}
  	if($rm['dia']==5){
  		$iar='Viernes';
  	}
  	if($rm['dia']==6){
  		$iar='Sabado';
  	}
  	if($rm['dia']==7){
  		$iar='Domingo';
  	}
  	?>
                      <td><center><?=$iar?></center></td>
                      <td> <center><a  style="color:#08f" href="?p=ruta&id=<?=$id?>&eliminar2=<?=$rm['id']?>"><i class="fa fa-times"></i></center></td>
                    </tr>
                    
          <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>                                   




  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
  <script src="js/demo/datatables-demo.js"></script>
</body>

</html>


<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">