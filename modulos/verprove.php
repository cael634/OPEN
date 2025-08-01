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
   <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <script type="text/javascript" src="main.js"></script>  
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

    <style type="text/css">
        .cuerpo {
    background: #fff;
    padding: 0px !important;
    min-height: auto !important;
    text-align: initial!important;
}
.site-footer {
    background-color: #26272b;
    padding: 45px 77px 20px !important;
    font-size: 15px;
    line-height: 24px;
    color: #cec8c8 !important;
}
h4, .h4 {
    font-size: 1.6rem;
    color: #0e0e0e
    !important;
    font-family:'Raleway', sans-serif!important;
    padding: 5px;
}
    </style>
        <!-- desktop site__header / end -->
        <!-- site__body -->
<?php
    $so1 = $mysqli->query("SELECT * FROM pedido7 WHERE id = '$ide' ");
    $ro1 = mysqli_fetch_array($so1);
              if(!isset($dia) && !isset($semana) && !isset($mes)){
     $q24 = $mysqli->query("SELECT * FROM proveedor WHERE id_cliente= '$id_cliente' "); 
    
}
if(isset($mes)){
 $q24 = $mysqli->query("SELECT * FROM pedido7 WHERE id_cliente= '$id_cliente'AND MONTH(fecha) = '$mes' AND tipoid=7 ORDER BY fecha ASC");   
}
if(isset($dia)){
    $diax   = substr($dia,8,2);
$mesx = substr($dia,5,2);
$aniox = substr($dia,0,4); 

$semanax = date('W',  mktime(0,0,0,$mesx,$diax,$aniox));  
 $q24 = $mysqli->query("SELECT * FROM pedido7 WHERE id_cliente= '$id_cliente' AND MONTH(fecha) = '$mesx'AND YEAR(fecha) ='$aniox' AND DAY(fecha)='$diax' AND tipoid=7 ORDER BY fecha ASC");   
}

if(isset($semana)){
$diax   = substr($semana,8,2);
$mesx = substr($semana,5,2);
$aniox = substr($semana,0,4); 

$semanax = date('W',  mktime(0,0,0,$mesx,$diax,$aniox));  
 $q24 = $mysqli->query("SELECT * FROM pedido7 WHERE id_cliente= '$id_cliente' AND semana= '$semanax' AND tipoid=7  ORDER BY fecha ASC");  

}   
if(isset($enviar)){
  $descripcion = clear($descripcion);

  $fecha= clear($fecha);
    $valor = clear($valor);
  $imagen = "";
  $id_cliente = clear($_SESSION['id_cliente']);
  
  

  if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
    $imagen = $name.rand(0,1000).".png";
    move_uploaded_file($_FILES['imagen']['tmp_name'], "../productos/".$imagen);
  }
 
  
 
  
  	$mysqli->query("UPDATE pedido7 SET descripcion = '$descripcion',fecha='$fecha',foto='$imagen',semana='$semanax', valor='$valor' WHERE id = '$ide'");


  redir("?p=gasto");
}

?>

        <div class="site__body">

            <div class="page-header">
                <div class="page-header__container container">
                    <div class="page-header__breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="?p=gasto">Home</a>
                                    <svg class="breadcrumb-arrow" width="6px" height="9px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                    </svg>
                                </li>
                               
                                <li class="breadcrumb-item active" aria-current="page">Añadir gastos</li>
                            </ol>
                        </nav>
                    </div>
                  
                </div>
            </div>
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-3 d-flex">
                            <div class="account-nav flex-grow-1" style="    max-height: 350px;">
                                <h4 class="account-nav__title">Navegación</h4>
                                <ul>
                                  
                                    
                                   
                                      <li class="account-nav__item  account-nav__item ">
                                        <a href="?p=todogastotal">Todos los gastos</a>
                                    </li>
                                    <li class="account-nav__item  account-nav__item ">
                                        <a href="?p=todogast">Facturas</a>
                                    </li>
                                     <li class="account-nav__item  account-nav__item--active">
                                        <a href="">Pedidos</a>
                                    </li>
                                     <li class="account-nav__item  account-nav__item ">
                                        <a href="?p=todogast5">Mas Gastos</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="card">
                                <div class="card-header" style="    display: flex;">
                                    <h5>Lista de tus Proveedores</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-body" style="    padding: 5px;">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-lg-10 col-xl-8">
                                          
             <div class="card shadow mb-4" style="margin: 12px 0px 0px 0px;">
           
            <div class="card-body" style="    padding-left: 0px;
    padding-right: 0px;">
              <div class="table-responsive">

                <table id="example" class="table table-striped table-bordered" style="margin-top: 0px !important;">
                  <thead>
                    <tr>
                   
                   
                    <th style="text-align: center;">Proveedor</th>
                    <th style="text-align: center;">Telefono</th>
                    <th style="text-align: center;">Info</th>        
                               
                                
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th style="text-align: center;">Proveedor</th>
                    <th style="text-align: center;">Telefono</th>
                    <th style="text-align: center;">Info</th> 
                               
                               
                    </tr>
                  </tfoot>
                  <tbody>

<?php


while($r24=mysqli_fetch_array($q24)){

?>
                    <tr>

           
            <td style="text-align: center;"><?=$r24['nombre']?></td>
            <td style="text-align: center;"><?=$r24['telefono']?></td>
            <td style="text-align: center;"><a href=""><i class="fas fa-question-circle"></i></a></td>
           
                                
                                
                               


                             
                    </tr>
                    
                     
                              <?php

}

?>
                   
                  </tbody>
                </table>                
                    </div>
                </div>
        </div>
   
                                            
                                            <!--
                                            <div class="form-group">
                                                <label for="checkout-country">Departamento</label>
                                              
                                                 <select  name="select1" id="select1" class="form-control form-control-select2">
                                                 <option value="">Departamento</option>
                                                 <?php
                                                 $qn = $mysqli->query("SELECT * FROM departamentos  ");
                                                 while($rl=mysqli_fetch_array($qn)){
                                                 ?>
                                                 <option value="<?=$rl['id_departamento']?>"><?=$rl['departamento']?></option>                
                                                <?php
                                                 }
                                                ?> 
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="checkout-country">Municipio</label>
                                           
                                                 <select name="select2" id="select2" class="form-control form-control-select2">
                                               <option value="">Municipio</option>
                                           <?php
                                         $qn = $mysqli->query("SELECT * FROM municipios  ");
                                           while($rl=mysqli_fetch_array($qn)){
                                            ?>
                                           <option value="<?=$rl['id_municipio']?>" ><?=$rl['municipio']?></option>
                       
                                          <?php

                                                }

                                               ?>
                                             </select>
                                            </div>
                                            -->
                                       
                                            
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- site__body / end -->
        <!-- site__footer -->
            <footer class="site__footer">
            <div class="site-footer">
                <div class="container">
                    <div class="site-footer__widgets">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="site-footer__widget footer-contacts">
                                    <h5 class="footer-contacts__title">Contactos</h5>
                                    
                                    <ul class="footer-contacts__contacts">
                                        <li><i class="footer-contacts__icon fas fa-globe-americas"></i> open.com.se</li>
                                        <li><i class="footer-contacts__icon far fa-envelope"></i> servicioalcliente@open.com.se</li>
                                     
                                        <li><i class="footer-contacts__icon far fa-clock"></i>Horario de atención al cliente:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9:00am - 9:00pm  Lunes a sabado</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-lg-2">
                                <div class="site-footer__widget footer-links">
                                    <h5 class="footer-links__title">Información</h5>
                                    <ul class="footer-links__list">
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Acerca de nosotros</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Informacion de entrega</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Politica de privacidad</a></li>
 
                                      
                                        
                                    </ul>
                                </div>
                            </div>
                            
                           <style type="text/css">
                               .site-footer__widgets {
    padding: 25px 0 17px;
}
.footer-links li {
    display: block;
    width: 300px !important;
}
                           </style> 
                        </div>
                    </div>
                    <div class="site-footer__bottom">
                        <div class="site-footer__copyright">
                            <!-- copyright -->
                           Desarrollado por HTML - Diseño por <a href="https://themeforest.net/user/kos9" target="_blank">Kos</a>
                            <!-- copyright / end -->
                        </div>
                        
                    </div>
                </div>
                <div class="totop">
                    <div class="totop__body">
                        <div class="totop__start"></div>
                        <div class="totop__container container"></div>
                        <div class="totop__end">
                            <button type="button" class="totop__button">
                                <svg width="13px" height="8px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-up-13x8"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- site__footer / end -->
    </div>
    <!-- site / end -->
    <!-- quickview-modal -->
   
<style type="text/css">
    .site-footer {
    background-color: #26272b;
    padding: 0px 0 20px !important;
    font-size: 15px;
    line-height: 24px;
    color: #737373;
}
</style>
           
   