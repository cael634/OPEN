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
  .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px!important;
}
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
.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 23px!important;
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
                <div class="col-lg-12" style="padding-left: 15px!important;">
                     <div class="page-header">
                <div class="page-header__container container" style="   padding: 10px 0px 0px 0px;font-size: 24px;
    font-weight: 700;">
                
               <!--     
                    <div class="d-sm-flex align-items-center justify-content-between mb-4" style="    margin-bottom: 1rem!important;   text-align: center;padding-top: 2px;
    /* padding-right: 0px; */
    padding-block: 15px;    height: 65px;">
           <h1 class="h3 mb-0 text-gray-800">¡Bienvenido!</h1> 
        
           <br>
            <a href="?p=gastos" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-clipboard-list"></i>&nbsp;&nbsp; Administrar gastos</a>
          </div>-->
                </div>
            </div><br>
                          <div class="col-xl-3 col-md-6 mb-4"  style="width: 50%;
    display: table-footer-group">
                              <a href="?p=notas">
              <div class="card border-left-success shadow h-100 py-2" style="box-shadow: none!important;border: 1px solid #bbbbc3;">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Califiaciones</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Revisa tus notas y el promedio</div>
                    </div>
                    <div class="col-auto">
                         <img src="calificaciones.png" style="    width: 50px;">
                    </div>
                  </div>
                </div>
              </div>
           </a>
              <div class="card border-left-success shadow h-100 py-2" style="box-shadow: none!important;border: 1px solid #bbbbc3;">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Recordatorios</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">No vuelvas a olvidar algo</div>
                    </div>
                    <div class="col-auto">
                         <img src="recordatorio.png" style="    width: 50px;">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
                        <div class="col-xl-3 col-md-6 mb-4"  style="width: 50%;
    display:table-footer-group">
                          <?php
                            $hoym=date('N');
                            ?>
                            <a href="?p=horario1&id=<?=$hoym?>">
              <div class="card border-left-success shadow h-100 py-2" style="box-shadow: none!important;border: 1px solid #bbbbc3;">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                       <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Horario</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Links de clases y/o clases</div>
                     
                    </div>
                    <div class="col-auto">
                         <img src="calendario-de-escritorio.png" style="    width: 50px;">
                    </div>
                  </div>
                </div>
              </div>
       </a>
              <div class="card border-left-success shadow h-100 py-2" style="box-shadow: none!important;border: 1px solid #bbbbc3;">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
               <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Actividades</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Tus tareas, taller y examenes</div>
                    </div>
                    <div class="col-auto">
                         <img src="homework.png" style="    width: 50px;">
                    </div>
                  </div>
                </div>
              </div>
            </div>
       
            <br>
          
         

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
     
    <center>OPEN 2021</center>
    <br>
  </body>
</html>
