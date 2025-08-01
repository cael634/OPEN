

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
    
    
if(isset($enviar)){
  $descripcion = clear($descripcion);
  $tipo = clear($tipo);
  $fecha= clear($fecha);
    $valor = clear($valor);
  $imagen = "";
  $id_cliente = clear($_SESSION['id_cliente']);
  

  if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
    $imagen = $name.rand(0,1000).".png";
    move_uploaded_file($_FILES['imagen']['tmp_name'], "../productos/".$imagen);
  }

#separas la fecha en subcadenas y asignarlas a variables
#relacionadas en contenido, por ejemplo dia, mes y anio.

$diax   = substr($fecha,8,2);
$mesx = substr($fecha,5,2);
$aniox = substr($fecha,0,4); 

$semanax = date('W',  mktime(0,0,0,$mesx,$diax,$aniox));  
  

    $mysqli->query("INSERT INTO proveedor (nombre, telefono, direccion, frecuencia, id_cliente) VALUES ('$nombre', '$telefono', '$direccion', '$frecuencia', '$id_cliente')");
  
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
                               
                                <li class="breadcrumb-item active" aria-current="page">Añadir Proveedor</li>
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
                                  
                                    
                                    <li class="account-nav__item  account-nav__item--active ">
                                        <a href="?p=registron">Proveedor</a>
                                    </li>
                                    
                                   
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Añadir Proveedor</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-body">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-lg-10 col-xl-8">
                                           <form method="post" action="" enctype="multipart/form-data">
                                            <div class="form-row">
                                                  <div class="form-group col-md-6">
                                                    <label for="checkout-first-name">Nombre de la empresa</label>
                                                    <input type="text" name="nombre" class="form-control" placeholder="Nombre de la empresa">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="checkout-first-name">Telefono o celular (Opcional</label>
                                                    <input type="text" class="form-control" name="telefono" placeholder="Numero de contacto">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="checkout-first-name">Dirección (Opcional)</label>
                                                    <input type="text" class="form-control" name="direccion" placeholder="Dirección">
                                                </div>
                                               
                                                       <div class="form-group col-md-6">
                                                        <label for="checkout-country">Frecuencia de entrega (opcional)</label>
                                                 
                                                <select name="frecuencia" class="form-control form-control-select2">
                                                 <option value="">Escoger</option> 
                                                 <option value="1 dia ">1 dia</option> 
                                                 <option value="2 dias">2 dias</option> 
                                                 <option value="3 dias">3 dias</option> 
                                                 <option value="4 dias">4 dias</option>
                                                 <option value="5 dias">5 dias</option> 
                                                 <option value="6 dias">6 dias</option> 
                                                 <option value="1 semana">1 semana</option> 
                                                 <option value="15 dias">15 dias</option> 
                                                 <option value="1 mes">1 mes</option> 
                                                  
                                                    </select>
                                                    
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
                                          
                                            <div class="form-group mt-3 mb-0">
                                                <button  name="enviar" type="submit" class="btn btn-primary">Terminar</button>
                                            </div>
                                            
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
           
   