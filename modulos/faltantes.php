<!doctype html>
<html lang="en">
  <head>
    <style type="text/css">
 .cuerpo {
    background: #fff;
    padding: 0px!important;
    min-height: 500px;
    text-align: inherit;
} 
.page-header__title h1 {
    margin-bottom: 0;
    font-size: 30px;
    font-weight: 260!important;
}
.card-body {
    -ms-flex: 1 1 auto;
    flex: auto;
    padding: 0rem;
    border: 2px solid white;
}
table.dataTable thead>tr>th.sorting_asc, table.dataTable thead>tr>th.sorting_desc, table.dataTable thead>tr>th.sorting, table.dataTable thead>tr>td.sorting_asc, table.dataTable thead>tr>td.sorting_desc, table.dataTable thead>tr>td.sorting {
    /* padding-right: 30px; */
    vertical-align: inherit!important;
        text-align: center;

}
.mb-4, .my-4 {
    margin-bottom: 1.5rem!important;
    border: 2px solid white!important;
}
.card-body {
    -ms-flex: 1 1 auto;
    padding: 0rem!important;
    border: 2px solid white;
}
h1 {
    font-size: 36px!important;
    font-weight: 700 !important;
    font-family: 'Raleway', sans-serif !important;
   
}
table.dataTable thead>tr>th.sorting_asc, table.dataTable thead>tr>th.sorting_desc, table.dataTable thead>tr>th.sorting, table.dataTable thead>tr>td.sorting_asc, table.dataTable thead>tr>td.sorting_desc, table.dataTable thead>tr>td.sorting {
    /* padding-right: 30px; */
    padding: 17px;
    vertical-align: inherit;
    text-align: center;
}
.page-header__title h1 {
    margin-bottom: 0;
    font-weight: 100!important;
    font-size: 30px;
}
div.dataTables_wrapper div.dataTables_length, div.dataTables_wrapper div.dataTables_filter, div.dataTables_wrapper div.dataTables_info, div.dataTables_wrapper div.dataTables_paginate {
    text-align: inherit !important;
}
    </style>

<?php
if(isset($busq) && isset($cat)){
 
    $q = $mysqli->query("SELECT * FROM productos WHERE name like '%$busq%' AND id_categoria = '$cat'");
}elseif(isset($cat) && !isset($busq)){

    $q = $mysqli->query("SELECT * FROM productos WHERE id_categoria = '$cat' ");

}elseif(isset($busq) && !isset($cat)){
  redir("?p=search&busq=$busq");
}
$id_cliente = $_SESSION['id_cliente'];
check_user('miscompras');
$s = $mysqli->query("SELECT * FROM compra WHERE id_cliente = '$id_cliente' ");
if(mysqli_num_rows($s)>0){
    ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tutorial DataTables</title>
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="main.css">  
      
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
           
  </head>
    
  <body> 
         
   
     
    <!--Ejemplo tabla con DataTables-->
    <div class="container">

<style type="text/css">
    .square {
  width: .7em;
  height: .7em;
  margin: .5em;
  display: inline-block;
}
table, th, td {
  border: 1px solid black;
}
</style>
        <div class="row">
                <div class="col-lg-12">
                     <div class="page-header">
                <div class="page-header__container container" style="    padding: 21px 0px;">
                   
                    <div class="page-header__title">
                        <h1 style="font-size: 30px!important">Pedidos pendientes:</h1>
                    </div>
                </div>
            </div>
            <span class="badge badge-success" style="background-color: #e2013b;    font-size: 15px;
    margin: 0px 0px 8px 0px;">Pedidos proximos a entregarse</span>
                       <table style="width:100%;margin: 0px 0px 8px 0px;">
  <tr style="height: 40px;">
    <th style="    padding: 0px;    text-align: center;">Orden</th>
    <th style="width:35%;    text-align: center;">Vendedor</th>
                    <th style="width:40%!important;padding: 0px 34px 0px 34px;    text-align: center;">Monto Total</th>
                    
                   
  </tr>
  <?php
    $s1 = $mysqli->query("SELECT * FROM compra WHERE id_cliente = '$id_cliente' ");                                
    while($r1=mysqli_fetch_array($s1)){
    $q212 = $mysqli->query("SELECT * FROM compven WHERE estado=3 AND compra = '".$r1['id']."' ");
    while($r212=mysqli_fetch_array($q212)){
   
$contador5 =0;
$q242 = $mysqli->query("SELECT * FROM productos_compra WHERE id_compra = '".$r1['id']."' AND id_vendedor= '".$r212['id_vendedor']."'");
while($r242=mysqli_fetch_array($q242)){
$contador5++;
}
  $q2112 = $mysqli->query("SELECT * FROM admins WHERE id = '".$r212['id_vendedor']."' ");
  $r262 = mysqli_fetch_array($q2112);
?>
  <tr style="height: 40px;">
    <td style="    text-align: center;"><a href="?p=ver_compraven&id=<?=$r212['compra']?>&id_vendedor=<?=$r212['id_vendedor']?>"># <?=$r212['id']?></a></td>
    <td style="    text-align: center;"><?=$r262['name']?></td>
    <td style="    text-align: center;"><?=$divisa?><?=number_format($r212['monto'])?><br> por <?=$contador5?> artículo (s) </td>
        
  </tr>
<?php
}
}
?>
</table>
          <ka style="margin:3px">• Pospuesto:&nbsp;<ad style="color:#5435b0;" title="Pospuesto"><i class="fas fa-exclamation-circle"></i></ad>&nbsp;&nbsp;&nbsp;•&nbsp;Sin posponer:&nbsp;<ad style="color:#a5a4a7;" title="Sin posponer"><i class="fas fa-exclamation-circle"></i></ad></ka><br>
                    <div class="table-responsive">        
        
 <div class="card shadow mb-4" style="margin: 12px 0px 0px 0px;">
           
            <div class="card-body">
              <div class="table-responsive">
               

                <table id="example" class="table table-striped table-bordered" style="width:100%;margin: 8px 0px 0px 0px;">
                  <thead>
                    <tr>
                    <th style="    padding: 0px;">Orden</th>
                    <th style="width:200px!important;padding: 0px 34px 0px 34px;">Monto Total</th>
                    <th style="width:100px">Vendedor</th>
                    <th>Estados</th>
                    <th>Fecha de llegada</th>
                               
                               
                                
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>Orden</th>
                    <th style="width:100px">Vendedor</th>
                    <th>Estados</th>
                    <th style="width:200px!important">Monto Total</th>
                
                    <th>Fecha de llegada</th>
                               
                               
                               
                    </tr>
                  </tfoot>
                  <tbody>

<?php
                                    
    while($r=mysqli_fetch_array($s)){
    $q21 = $mysqli->query("SELECT * FROM compven WHERE estado<2 AND compra = '".$r['id']."' ");
    while($r21=mysqli_fetch_array($q21)){
   
$contador5 =0;
$q24 = $mysqli->query("SELECT * FROM productos_compra WHERE id_compra = '".$r['id']."' AND id_vendedor= '".$r21['id_vendedor']."'");
while($r24=mysqli_fetch_array($q24)){
$contador5++;
}
  $q211 = $mysqli->query("SELECT * FROM admins WHERE id = '".$r21['id_vendedor']."' ");
  $r26 = mysqli_fetch_array($q211);
?>
                    <tr>


            <td><a href="?p=ver_compraven&id=<?=$r21['compra']?>&id_vendedor=<?=$r21['id_vendedor']?>"># <?=$r21['id']?></a></td>
             <td style="width:100px"><?=$r26['name']?></td>
            <td><?=estado($r21['estado'])?>
            <?php
            if($r21['tipoau']==1|| $r21['tipo']==2){
            ?>
            <ad style="color:#5435b0;" title="Pospuesto" ><i class="fas fa-exclamation-circle"></i></ad>
            <?php
            }
            ?>
            <?php
            if($r21['tipoau']==0){
            ?>
           <a href="?p=pedidofal&id=<?=$r21['id']?>"><ad style="color:#a5a4a7;" title="Sin posponer" ><i class="fas fa-exclamation-circle"></i></ad></a>
            <?php
            }
            ?></td>
            <td style="width:200px" ><?=$divisa?><?=number_format($r21['monto'])?> por <?=$contador5?> artículo (s) </td>
           
            <td><?=fecha($r21['fecha'])?></td>
                                
                                
                               


                             
                    </tr>
                    
                     
                              <?php

}
}
?>
                   
                  </tbody>
                </table>                
                    </div>
                </div>
        </div>  
    </div>    
      
<br>
                <?php
}else{
    ?>
    <center>
<img src="faltan.png" width="1000" height="500" style="
    max-width: 86%;
    height: auto;
    padding: 53px 0px 0px 0px;
"></center>
    <?php
} 
?> 
    <!--Ejemplo tabla con HTML-->  
    <!--<div style="height:50px"></div> 
    <div class="container">
    <h3>Tabla con <span class="badge badge-secondary">HTML puro</span></h3>
    <div class="row">
            <div class="col-lg-12">
                <table border=1 cellpadding=1>
                    <thead>
                        <th>Nombre</th>
                        <th>País</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Juan Perez</td>
                            <td>Argentina</td>
                        </tr>
                        <tr>
                            <td>María Pía</td>
                            <td>Venezuela</td>
                        </tr>
                        <tr>
                            <td>Juan Caros</td>
                            <td>Perú</td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
    </div>    -->
      
      
    <!--Ejemplo tabla con bootstrap 4-->    
    <!--<div style="height:50px"></div>               
    <div class="container">
    <h3>Tabla con <span class="badge badge-secondary">BOOTSTRAP 4</span></h3>
    <div class="row">
            <div class="col-lg-12">                    
                <table class="table table-striped table-hover table-bordered">
                    <thead class="thead-dark">
                        <th>Nombre</th>
                        <th>País</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Juan Perez</td>
                            <td>Argentina</td>
                        </tr>
                        <tr>
                            <td>María Pía</td>
                            <td>Venezuela</td>
                        </tr>
                        <tr>
                            <td>Juan Caros</td>
                            <td>Perú</td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
    </div>-->    
      
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <script type="text/javascript" src="main.js"></script>  
    
    
  </body>
</html>
