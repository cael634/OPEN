<?php
check_admin();
$id = clear($id);
$s = $mysqli->query("SELECT * FROM clientev WHERE id = '$id'");
$r = mysqli_fetch_array($s);
if(isset($modificar)){
  $estado = clear($estado);
  $mysqli->query("UPDATE clientev SET ruta = '$estado' WHERE id = '$id'");
  redir("?p=clientes");
}
?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800">Modificar ruta</h1> 
          </div>

<br>

<form method="post" action="">
<div class="col-xs-6">
  <select  name="estado" id="estado" class="form-control form-control-select2">

   <?php
    $re3 = $mysqli->query("SELECT * FROM clientev WHERE id='$id'");
    $re31=mysqli_fetch_array($re3);
    $qn12 = $mysqli->query("SELECT * FROM rutas WHERE id = '".$re31['ruta']."' ");
    $re36=mysqli_fetch_array($qn12);
      ?>
      <option value="<?=$re36['id']?>"><?=$re36['rutas']?></option>
         <?php
         $id_vendedor = clear($_SESSION['id_vendedor']);
                $qn = $mysqli->query("SELECT * FROM rutas WHERE id_vendedor = '$id_vendedor' AND id!='".$re36['id']."' ");
                while($rl=mysqli_fetch_array($qn)){
                    ?>
                       <option value="<?=$rl['id']?>" > <?=$rl['rutas']?></option>
                       
                    <?php

                }

            ?>
</select>
  </div><br>
<style type="text/css">
.select2-container--default .select2-selection--single {
    background-color: #fff!important;
    border: 1px solid #aaa!important;
    border-radius: 4px!important;
    display: block !important;
    width: 100% !important;
    height: calc(1.5em + .75rem + 2px)!important;
    padding: .375rem .75rem!important;
    font-size: 1rem!important;
    font-weight: 400!important;
    line-height: 1.5!important;
    color: #495057!important;
    background-color: #fff !important;
    background-clip: padding-box!important;
    border: 1px solid #ced4da !important;
    border-radius: .25rem !important;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out !important;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: 5px!important;
}
.form-control + .select2-container .select2-selection--single {
    border-radius: 2px;
    border-width: 1px;
    border-style: solid;
    background-clip: border-box;
    background-image: none!important;
    background-repeat: no-repeat;
    background-size: 5px 10px;
    -webkit-transition: border-color .15s ease-in-out, background .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out, background .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out, background .15s ease-in-out, box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out, background .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
}
.select2-container {
    box-sizing: border-box;
    display: inline-block;
    margin: 0;
    position: relative;
    vertical-align: middle;
    width: 100%;
}
.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 35px !important;
    position: absolute;
    top: 1px;
    right: 1px;
    width: 20px;
}


</style>
  <div class="form-group">
    <input class="btn btn-primary" type="submit" value="Modificar" name="modificar"/>
  </div>
</form>    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Stroyka</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
    <!-- css -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/photoswipe/photoswipe.css">
    <link rel="stylesheet" href="vendor/photoswipe/default-skin/default-skin.css">
    <link rel="stylesheet" href="vendor/select2/css/select2.min.css">
  
    <!-- font - fontawesome -->

        <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/photoswipe/photoswipe.min.js"></script>
    <script src="vendor/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="vendor/select2/js/select2.min.js"></script>
    <script src="js/number.js"></script>
    <script src="js/main.js"></script>
    <script src="js/header.js"></script>
    <script src="vendor/svg4everybody/svg4everybody.min.js"></script>
    <script>
        svg4everybody();
    </script>