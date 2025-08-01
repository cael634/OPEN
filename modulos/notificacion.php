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
if(isset($act)){

	$sq = $mysqli->query("SELECT * FROM notificacion WHERE id_cliente =  '".$_SESSION['id_cliente']. "' AND estado=1 ");
    while($rq=mysqli_fetch_array($sq)){
	$mysqli->query("UPDATE notificacion SET estado = 0 WHERE id = '".$rq['id']."'");
    }
	redir("?p=notificacion");
}
?>
      
      
      
        <div class="site__body" style="    min-height: 500px;
}">
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
                               
                                <li class="breadcrumb-item active" aria-current="page">Notificaciones</li>
                            </ol>
                        </nav>
                  
                </div>
            </div>
             <div class="block block--highlighted block-categories block-categories--layout--compact" style="padding: 0px">
                <div class="container">
                  
                    <div class="block-categories__list">


<?php
$sq = $mysqli->query("SELECT * FROM notificacion WHERE id_cliente =  '".$_SESSION['id_cliente']. "' ");

while($rq=mysqli_fetch_array($sq)){
 $sw1 = $mysqli->query("SELECT * FROM productos  WHERE id = '".$rq['id_producto']."'"); 
  $rw1 = mysqli_fetch_array($sw1);
   $sw12 = $mysqli->query("SELECT * FROM admins  WHERE id = '".$rq['id_vendedor']."'"); 
  $rw12 = mysqli_fetch_array($sw12);
 if($rq['tipo']==1){
 $tipo='¡Nuevo producto!';
 }else{
      $tipo='¡Nueva oferta!';
 }
    ?>

                        <div class="block-categories__item category-card category-card--layout--compact">
                            <div class="category-card__body">
                                <div class="category-card__image">
                                    <a href="?p=produc&id=<?=$rq['id_producto'];?>"><img src="productos/<?=$rw1['imagen']?>" alt=""></a>
                                </div>
                                <div class="category-card__content">
                                    <div class="category-card__name">
                                        <a href="?p=produc&id=<?=$rq['id_producto'];?>" style="color:blue"><?=$rw1['name']?></a>
                                    </div>
                                    <?=$tipo?>&nbsp<br><a style="color:blue" href="?p=vendedor&id=<?=$rq['id_vendedor'];?>">Vendedor: <?=$rw12['name']?></a> 
                                    <ul class="category-card__links">
                                        <li><a href="">Screwdrivers</a></li>
                                        <li><a href="">Milling Cutters</a></li>
                                        <li><a href="">Sanding Machines</a></li>
                                        <li><a href="">Wrenches</a></li>
                                        <li><a href="">Drills</a></li>
                                    </ul>
                                    <div class="category-card__all">
                                        <a href="">Show All</a>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
<?php
}
?>



                   
                  
                           
                        </div>
                    </div>
                </div>
                <br>
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
        