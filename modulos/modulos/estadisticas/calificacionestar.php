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
<?php
if(isset($enviar1)){
  redir("?p=calificacionestar&hol=$numeronotas");
}


if(isset($enviarter)){
        $i5=0;
    while ($i5 <= ($hol-1)) {
    $i5++;
    $porcentaje1=$porcentaje.$i;
  $mysqli->query("INSERT INTO notaid (id_cliente,id_materia,nombren, porcentaje) VALUES ('$id_cliente1',1,'$nombrem2', '$porcentaje1')");
  if($i==3){
  redir("?p=notas");
  }
}
}
?>
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


        <div class="site__body">

            <div class="page-header">
                <div class="page-header__container container">
                    <div class="page-header__breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="?p=productos">Home</a>
                                    <svg class="breadcrumb-arrow" width="6px" height="9px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                    </svg>
                                </li>
                               
                                <li class="breadcrumb-item active" aria-current="page">Horario</li>
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
                                        <a href="?p=registron">Agregar Calificaciones</a>
                                    </li>
                                    
                                   
                                </ul>
                            </div>
                        </div>
                         
                         <script>
                                    /* Sumar dos números. */
function sumar (valor) {
    var total = 0;	
    valor = parseInt(valor); // Convertir el valor a un entero (número).
	
    total = document.getElementById('spTotal').innerHTML;
	
    // Aquí valido si hay un valor previo, si no hay datos, le pongo un cero "0".
    total = (total == null || total == undefined || total == "") ? 0 : total;
	
    /* Esta es la suma. */
    total = (parseInt(total) + parseInt(valor));
	
    // Colocar el resultado de la suma en el control "span".
    document.getElementById('spTotal').innerHTML = total;
}
                                </script>
                        <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Agregar calificaciones</h5>
                                </div>
                                
                                <div class="card-divider"></div>
                                <div class="card-body">
                                      <div class="form-row">
<?php
if(!isset($hol)){
?>
                                     <form method="post" action="" style="
    display: contents;
">                                    
         <a style="padding:5px" style="    font-size: 13px;">Numero de calificaciones, podras modificarlo al terminar</a> 
         <br><br>
     
                                                    
            <input style="width: 50%;" type="number" class="form-control" name="numeronotas" placeholder=" Numero de notas">
                <a style="color:white">a</a>
                    <button  style="padding: -1px; width: 43%!important;" name="enviar1" type="submit" class="btn btn-primary">                                                  Siguiente
                    </button>
              </form>
              <?php
              }else{
              ?>
              </div>
                                    <div class="row no-gutters">
                                        <div class="col-12 col-lg-10 col-xl-8">
                                           <form method="post" action="" enctype="multipart/form-data">
                                                 
                                            <div class="form-row">

  <?php
for ($i = 0; $i <= 10; $i++) {
    echo '<input type="checkbox" onclick="document.getElementById(\"debe_tener_una_letra_primero_y_despues_usas_el_incrementador' . $i . '\").disable=false" />';
    echo '<input type="text" name="nombre_del_campo_tipo_array[]" id="debe_tener_una_letra_primero_y_despues_usas_el_incrementador' . $i . '" disable="disable" />';
}

                                                
                              
                                $i=0;
                                while ($i <= ($hol-1)) {
                                    $i++;
                                ?>

                                 <label for="checkout-first-name">Califiación <?=$i?></label>
                                                <div class="form-group col-md-6">
                                                    <label for="checkout-first-name">Nombre de la actividad</label>
                                                    <input type="text" class="form-control" name="nombrem<?=$i?>" placeholder="Actividad">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="checkout-first-name">Porcentaje</label>
                                                    
                                                    <input type="number"  class="form-control"id="txt_campo_1" name="porcentaje<?=$i?>" placeholder="Porcentaje" onchange="sumar(this.value);" />
                                                </div>
                                                <?php
                                }
              
                                ?>
                                <div class="form-group mt-3 mb-0">
                                <span>Total de los porcentajes: </span> <span id="spTotal"></span>  %
                                </div>
                                <div class="form-group mt-3 mb-0">
                                <span>Debe ser 100% para enviar (puedes modificar estas cuando quieras)</span> 
                                </div>
                                            <div class="form-group mt-3 mb-0">
                                                <button  name="enviarter" type="submit" class="btn btn-primary">Terminado</button>
                                            </div>
                                            
                                        </form>
                                        </div>
                                                   <?php
                                }
              
                                ?>
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
           
   