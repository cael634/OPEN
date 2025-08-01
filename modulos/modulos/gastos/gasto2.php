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
                <div class="page-header__container container" style="   padding: 10px 0px 0px 0px;font-size: 24px;
    font-weight: 700;">
                
                    
                    <div class="d-sm-flex align-items-center justify-content-between mb-4" style="    margin-bottom: 0rem!important;">
           <h1 class="h3 mb-0 text-gray-800" style="    text-align: center;
    padding: 14px 27px;font-size:25px!important;">Escoge el tipo de gasto</h1> 
        <br>
           
            <a href="?p=gastos" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-clipboard-list"></i>&nbsp;&nbsp; Administrar gastos</a>
          </div>
                </div>
            </div>
           
              <a href="?p=gasto7">         
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2" style="box-shadow: none!important;border: 1px solid #bbbbc3;" href="?p=gastos7">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1" style="text-align: center;     color: #000000!important;"><a href="?p=gasto7">Pedidos</a></div>
                     
                    </div>
                    <div class="col-auto">
                        <img src="portapapeles.png" style="width:50px;">
                  
                    </div>
                  </div>
                  
                </div>
              </div>
              
            </div>
            </a>
            <a href="?p=gasto6">
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2" style="box-shadow: none!important;border: 1px solid #bbbbc3;">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1" style="text-align: center;    color: #007bff!important;">Facturas</div>
               
                    </div>
                    <div class="col-auto">
                        <img src="recibo.png" style="width:50px;">
                    </div>
                  </div>
                  
                </div>
              </div>
            
            </div>
             </a>
            <a href="?p=gasto5">
             <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2" style="box-shadow: none!important;border: 1px solid #bbbbc3;">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1" style="text-align: center;    color: #000000!important;"<a href="?p=gasto5">Otros gastos</a></div>
                     
                    </div>
                    <div class="col-auto">
                         <img src="cuenta.png" style="    width: 50px;">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </a>
            
  

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
