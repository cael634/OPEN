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
<html lang="en">
  <head>
    <style type="text/css">
  
 .cuerpo {
    background: #fff;
    padding: 0px!important;
    min-height: 500px;
    text-align: inherit!important;
} 


#primary_nav_wrap ul a {
    display: block;
    color: black!important;
    text-decoration: none;
    font-weight: 700;
    font-size: 12px;
    line-height: 32px;
    padding: 0 15px;
    font-family: "HelveticaNeue","Helvetica Neue",Helvetica,Arial,sans-serif;
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
        <div class="row">
                <div class="col-lg-12">
                     <div class="page-header">
                <div class="page-header__container container" style="    padding: 17px 0px 0px 0px;">
                
                    
                    <div class="d-sm-flex align-items-center justify-content-between mb-4" style="    margin-bottom: 0.6rem!important;">
           <h1 class="h3 mb-0 text-gray-800">Mis Gastos</h1> 

           
            <a href="?p=gastos" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-clipboard-list"></i>&nbsp;&nbsp; Administrar gastos</a>
          </div>
                </div>
            </div>
                    <nav id="primary_nav_wrap" style="margin-top: 0px;">
<ul style="border:1px solid">
  <li class="current-menu-item"><a href="#">Añadir gastos</a></li>

 

</ul>
</nav><br>               
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
 
 if(!isset($mesr) && !isset($anior)){
                                
$s = $mysqli->query("SELECT * FROM Gasto WHERE id_cliente = '$id_cliente'");

}else{
   $s = $mysqli->query("SELECT * FROM compra WHERE id_cliente = '$id_cliente'AND YEAR(fecha)='$anior' AND MONTH(fecha)='$mesr' ORDER BY fecha ASC");
   

}

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
     <form method="post" action="">
    <div class="row" style="    display: inline-flex!important;">
      <div class="col-md-5">
        <select id="categoria" name="anior" class="form-control">

      <option <?php if($catw == 0) { echo "selected"; } ?> value="0">Escoger año:</option>
      <option <?php if($catw == 1) { echo "selected"; } ?> value="2020">2020</option>


        

      </select>
      </div><br>
      <div class="col-md-5">
      <select id="categoria" name="mesr" class="form-control">

      <option <?php if($catw == 0) { echo "selected"; } ?> value="0">Escoger mes:</option>
      <option <?php if($catw == 1) { echo "selected"; } ?> value="1">Enero</option>
      <option <?php if($catw == 2) { echo "selected"; } ?> value="2">Febrero</option>
      <option <?php if($catw == 3) { echo "selected"; } ?> value="3">Marzo</option>
      <option <?php if($catw == 1) { echo "selected"; } ?> value="4">Abril</option>
      <option <?php if($catw == 2) { echo "selected"; } ?> value="5">Mayo</option>
      <option <?php if($catw == 3) { echo "selected"; } ?> value="6">Junio</option>
      <option <?php if($catw == 1) { echo "selected"; } ?> value="7">Julio</option>
      <option <?php if($catw == 2) { echo "selected"; } ?> value="8">Agosto</option>
      <option <?php if($catw == 3) { echo "selected"; } ?> value="9">Sepetiembre</option>
      <option <?php if($catw == 1) { echo "selected"; } ?> value="10">Octubre</option>
      <option <?php if($catw == 2) { echo "selected"; } ?> value="11">Noviembre</option>
      <option <?php if($catw == 3) { echo "selected"; } ?> value="12">Diciembre</option>


        

        </select>
      </div>
    <div class="col-md-2" style="    padding: 7px;">
        <button type="submit" class="btn btn-prmiary" name="buscar" style="
    background: #29393a;
    color: white;
    width: 70%;
"><i class="fa fa-serch"></i> Filtrar mes</button>
      </div></div></form><br>
                    <div class="table-responsive">        
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th style="padding: 0px 8px 0px 9px;">Descripcion</th>
                                <th>Monto</th>
                                <th style="max-width: 500px!important;padding: 0px 8px 0px 9px;">Fecha</th>
                                <th style="padding: 2px;padding:0px 8px 0px 9px">Tipo</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        
                                      <?php
    while($r=mysqli_fetch_array($s)){
        ?>
            <?php
        $contador5 =0;
  $q2 = $mysqli->query("SELECT * FROM productos_compra WHERE id_compra = '".$r['id']."' ");
  while($r2=mysqli_fetch_array($q2)){
$contador5++;
}
?>

                            <tr>
                                <td style="text-align: center!important;"><a href="?p=ver_compra&id=<?=$r['id']?>"># <?=$r['id']?></a></td>
                                <td style="text-align: center!important;"><?=fecha($r['fecha'])?></td>
                                <td style="max-width: 500px!important;text-align: center!important;"><?=$divisa?><?=number_format($r['monto'])?> por <?=$contador5?> artículo (s) </td>
                                <td style="max-width: 150px;text-align: center!important;">
                                 <?php
                                
$s1 = $mysqli->query("SELECT * FROM compra WHERE id = '".$r['id']."'");
$rz = mysqli_fetch_array($s1);
$se = $mysqli->query("SELECT * FROM compven WHERE compra = '".$rz['id']."'");
    while ($re = mysqli_fetch_array($se)){
    $id_vendedor = $re['id_vendedor'];
    $so = $mysqli->query("SELECT * FROM admins WHERE id = '$id_vendedor'");
    $ro = mysqli_fetch_array($so);
?>
<?php
if($re['estado']==0){
?>
              <a title=" <?=$ro['name']?>"style="color:#08f" href="?p=ver_compraven&id=<?=$rz['id'];?>&id_vendedor=<?=$id_vendedor;?>&monto=<?=$re['monto'];?>">  <div class="square" style="background: #27ae60"></div></a>
                    <?php
                }
    
if($re['estado']==1){
?>
              <a  title=" <?=$ro['name']?>"style="color:#08f" href="?p=ver_compraven&id=<?=$rz['id'];?>&id_vendedor=<?=$id_vendedor;?>&monto=<?=$re['monto'];?>">  <div class="square" style="background: #f1c40f"></div></a>
                    <?php
                }
                
       
if($re['estado']==2){
?>
              <a title=" <?=$ro['name']?>" style="color:#08f" href="?p=ver_compraven&id=<?=$rz['id'];?>&id_vendedor=<?=$id_vendedor;?>&monto=<?=$re['monto'];?>">  <div class="square" style="background: #d35400"></div></a>
                    <?php
                }
                
             
                }
                
                ?>

            </td>
                             
                               
                            </tr>
                                              <?php
    }
    ?>
                        </tbody>        
                       </table>                  
                    </div>
                </div>
        </div>  
    </div>    
      
<br><br>

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
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <script type="text/javascript" src="main.js"></script>  
    
    
  </body>
</html>
