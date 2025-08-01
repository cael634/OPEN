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
                               
                                <li class="breadcrumb-item active" aria-current="page">Todas las empresa y distribuidores</li>
                            </ol>
                        </nav>
                  
                </div>
            </div>
             <div class="block block--highlighted block-categories block-categories--layout--compact" style="padding: 0px">
                <div class="container">
                    <div class="block-header">
                        <h3 class="block-header__title">Empresas y distribuidores</h3>
                        <div class="block-header__divider"></div>
                    </div>
                    <div class="block-categories__list">
                        <?php
                         if(!isset($_SESSION['id_cliente'])){
                        $v1 = $mysqli->query("SELECT * FROM admins ");
                         }else{
                              $so = $mysqli->query("SELECT * FROM clientesWHERE id= '".$_SESSION['id_cliente']."' ");
                              $ro = mysqli_fetch_array($so);
                              $v1 = $mysqli->query("SELECT * FROM admins WHERE municipio='".$ro['municipio']."'");
                         }
                        while($r12=mysqli_fetch_array($v1)){
                            ?>

                        <div class="block-categories__item category-card category-card--layout--compact">
                            <div class="category-card__body">
                                <div class="category-card__image">
                                     <?php
                                                        if($r12['imagen']!=0){
                                                        ?>
                                                        <img  src="admin/productos/<?=$r12['imagen']?>"  alt="">
                                                        <?php
                                                        }else{
                                                            ?>
                                                            <img src="interfaz.png"  alt="" style="width: 104%; height: 80%;">
                                                            
                                <?php
                                                        }
                                                        ?>
                                  
                                </div>
                                <div class="category-card__content">
                                    <div class="category-card__name">
                                        <a href="?p=vendedor&id=<?=$r12['id']?>"><?=$r12['name']?></a><br>
                                         <a style="color:red" href="?p=vendedor&id=<?=$r12['id']?>">Ver productos</a>
                                    </div>
                                    <ul class="category-card__links">
                                        <li><a href="">Lathes</a></li>
                                        <li><a href="">Milling Machines</a></li>
                                        <li><a href="">Grinding Machines</a></li>
                                        <li><a href="">CNC Machines</a></li>
                                        <li><a href="">Sharpening Machines</a></li>
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
        