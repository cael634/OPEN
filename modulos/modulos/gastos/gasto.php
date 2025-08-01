<body>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- primero -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6224266730639986"
     data-ad-slot="5729493737"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</body>
<!doctype html>
   <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style type="text/css">
    .square {
  width: .7em;
  height: .7em;
  margin: .5em;
  display: inline-block;
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
</style>  
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <script type="text/javascript" src="main.js"></script>  
<html lang="en">
  <head>
    <style type="text/css">
  
 .cuerpo {
    background: #fff;
    padding: 0px!important;
    min-height: 500px;
    text-align: inherit!important;
} 
div.dataTables_wrapper div.dataTables_length label {
    font-weight: normal;
    text-align: left;
    display: none;
    white-space: nowrap;
}

h1 {
    font-size: 36px!important;
    font-weight: 700 !important;
    font-family: 'Raleway', sans-serif !important;
   
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


        <div class="row">
                <div class="col-lg-12">
                     <div class="page-header">
                <div class="page-header__container container" style="   padding: 10px 0px 0px 0px;font-size: 24px;
    font-weight: 700;">
                
                    
                    <div class="d-sm-flex align-items-center justify-content-between mb-4" style="    margin-bottom: 0rem!important;">
           <h1 class="h3 mb-0 text-gray-800" style="    text-align: center;
    padding: 14px 27px;font-size:25px!important;">Administración de Gastos</h1> 
        
           
     
          </div>
                </div>
            </div>
             <nav id="primary_nav_wrap" style="margin-top: 0px!important;">
<ul >
  <li class="current-menu-item"  style=" background: teal;
    border-radius: 16px;"><a href="https://open.com.se/?p=gasto2">Añadir gastos</a></li>

 

</ul>
</nav><br><br>

<?php

    $hoy = date("Y-m-d");

      $s1 = $mysqli->query("SELECT * FROM pedido7 WHERE id_cliente = '$id_cliente' AND fecha ='$hoy' ");                                
    while($r1=mysqli_fetch_array($s1)){
      $r3a=$r1['valor']+$r1['valor'];
    }
    ?>
    <?php
    $sem = date("W");
    
      $s11 = $mysqli->query("SELECT * FROM pedido7 WHERE id_cliente = '$id_cliente' AND semana ='$sem' ");                                
    while($r11=mysqli_fetch_array($s11)){
      $r13a=$r11['valor']+$r11['valor'];
    }
    ?>
                        <div class="col-xl-3 col-md-6 mb-4" style="display: flex;     padding-left: 0px;
    padding-right: 0px;">
              <div class="card border-left-success shadow h-100 py-2" style="box-shadow: none!important;border: 1px solid #bbbbc3;    width: 50%!important;border-radius: 20px;">
                <div class="card-body" style="padding: 0.65rem;">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Hoy</div> <div class="text-xs font-weight-bold text-success text-uppercase mb-1"style="color: black!important;">$ <?=number_format($r3a)?></div>
    
                    </div>
                   
                  </div>
                </div>
              </div>
              <a style="color:white!important">a</a>
                <div class="card border-left-success shadow h-100 py-2" style="box-shadow: none!important;border: 1px solid #bbbbc3;    width: 50%!important; border-radius: 20px;">
                <div class="card-body" style="padding: 0.65rem;">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Esta semana</div>
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1" style="color: black!important;">$ <?=number_format($r13a)?></div>
                    </div>
                    
                  </div>
                  
                </div>
              </div>
            </div>
            <style>div.dataTables_wrapper div.dataTables_filter label {
    font-weight: normal;
    white-space: nowrap;
    text-align: left;
    display: none!important;
}
table, th, td {
    border: 1px solid #c5b4b4;
}</style>
 <span class="badge badge-success" style="background-color: #e2013b;    font-size: 15px;
    margin: 0px 0px 8px 0px;">Recordatorio facturas</span>
                       <table style="width:100%;margin: 0px 0px 8px 0px;">
  <tr style="height: 40px;">
    <th style="width:30%;    padding: 0px;    text-align: center;">Fecha</th>
    <th style="width:50%;    text-align: center;">Descripcion</th>
                    <th style="width:20%!important;  text-align: center;">Mas</th>
                    
                   
  </tr>
  <?php
  $contador=0;
    $s1 = $mysqli->query("SELECT * FROM pedido7 WHERE id_cliente = '$id_cliente' AND tipoid =6 ORDER BY fecha ASC ");                                
    while($r1=mysqli_fetch_array($s1)){
  $contador++;
  if($contador<3){
?>
  <tr style="height: 40px;">
    <td style="    text-align: center;"><?=$r1['fecha']?></td>
    <td style="    text-align: center;"><?=$r1['descripcion']?></td>
     <td style="text-align: center;"><a href="?p=gasto16&ide=<?=$r1['id']?>"><i class="fas fa-question-circle"></i></a></td>
        
  </tr>
<?php
}
}
 
?>

</table>
<?php
 if($contador==0){
      ?>
    <center>No ha agregado facturas aun</center>  
      <?php
  }
?><br>
<center style="color:#007bff" ><a href="?p=todogast">Ver mas</a></center>
<br>
            <span class="badge badge-success" style="background-color: cadetblue;    font-size: 15px;
    margin: 0px 0px 8px 0px;">Gastos Recientes</span>
                                <div class="table-responsive">        
        
 <div class="card shadow mb-4" style="margin: 12px 0px 0px 0px;">
           
            <div class="card-body" style="    padding: 0.3rem;">
              <div class="table-responsive">
               

                <table id="example" class="table table-striped table-bordered" style="margin-top: 0px !important;">
                  <thead>
                    <tr>
                   
                   
                    <th style="text-align: center;">Fecha</th>
                    <th style="text-align: center;">Descripción</th>
                    <th style="text-align: center;">Valor</th>
                    <th style="text-align: center;">Tipo</th>
                    <th style="text-align: center;">Info</th>
                               
                               
                                
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th style="text-align: center;">Fecha</th>
                    <th style="text-align: center;">Descripción</th>
                    <th style="text-align: center;">Valor</th>
                    <th style="text-align: center;">Tipo</th>
                    <th style="text-align: center;">Info</th>
                               
                               
                               
                    </tr>
                  </tfoot>
                  <tbody>

<?php
$contador1=0;
$q24 = $mysqli->query("SELECT * FROM pedido7 WHERE id_cliente= '$id_cliente' ORDER BY fecha ASC");
while($r24=mysqli_fetch_array($q24)){
  $contador1++;
  if($contador1<8){
?>
                    <tr>


           
            <td style="text-align: center;"><?=$r24['fecha']?></td>
            <td style="text-align: center;"><?=$r24['descripcion']?></td>
            <td style="text-align: center;">$ <?=$r24['valor']?></td>
            <td style="text-align: center;">
            <?php
            if($r24['tipoid']==5){
            ?>
            Otros gastos
            <?php
            }if($r24['tipoid']==6){
            ?>
            Facturas
            <?php
            }if($r24['tipoid']==7){
            ?>
           Pedidos
            <?php
            }
            ?>
            </td>
            <td style="text-align: center;"><a href="
            
            <?php
            if($r24['tipoid']==5){
            ?>
            ?p=gasto15&ide=<?=$r24['id']?>
            <?php
            }if($r24['tipoid']==6){
            ?>
            ?p=gasto16&ide=<?=$r24['id']?>
            <?php
            }if($r24['tipoid']==7){
            ?>
           ?p=gasto17&ide=<?=$r24['id']?>
            <?php
            }
            ?>"><i class="fas fa-question-circle"></i></a></td>
           
                                
                                
                               


                             
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
           <center style="color:#007bff" ><a href="?p=todogastotal">Ver todos</a></center> <br>       
        <div class="col-xl-3 col-md-6 mb-4" style="display: flex;">
             <div class="card border-left-success shadow h-100 py-2" style="box-shadow: none!important;border: 1px solid #bbbbc3;    width: 50%!important; border-radius: 20px;">
                <div class="card-body" style="    text-align: center;">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="?p=todogast7">Pedidos</a></div>
               
                    </div>
                    <div class="col-auto">
                   <center><img src="portapapeles.png" style="width:50px;"></center>  
                    </div>
                  </div>
                  
                </div>
              </div>
              <a style="color:white!important">a</a>
              <div class="card border-left-success shadow h-100 py-2" style="box-shadow: none!important;border: 1px solid #bbbbc3;    width: 50%!important; border-radius: 20px;">
                <div class="card-body" style="    text-align: center;">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1" ><a href="?p=todogast">Facturas</a></div>
               
                    </div>
                    <div class="col-auto">
                     <img src="recibo.png" style="width:50px;">
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4" style="display: flex;">
             <div class="card border-left-success shadow h-100 py-2" style="box-shadow: none!important;border: 1px solid #bbbbc3;    width: 50%!important; border-radius: 20px;">
                <div class="card-body" style="    text-align: center;">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="?p=todogast5">Mas gastos</a></div>
               
                    </div>
                    <div class="col-auto">
                     <img src="cuenta.png" style="width:50px;">
                    </div>
                  </div>
                  
                </div>
              </div>
              <a style="color:white!important">a</a>
             
            </div>
          
          
            
  

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
      
    <!-- jQuery, Popper.js, Bootstrap JS -->
 
    
    
  </body>
</html>
