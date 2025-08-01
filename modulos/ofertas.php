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
    <style type="text/css">
        .cuerpo {
    background: #fff;
    padding: 0px !important;
    min-height: auto !important;
    text-align: initial!important;
}
.product-image__img {
    display: block;
    position: absolute;
    width: 100%;
    height: 82% !important;
  
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
        <div class="site__body" >
            <div class="page-header">
                <div class="page-header__container container">
                    <div class="page-header__breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                    <svg class="breadcrumb-arrow" width="6px" height="9px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                    </svg>
                                </li>
                                
                                <li class="breadcrumb-item active" aria-current="page">Todas las ofertas</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <h1>Todas las ofertas</h1>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="shop-layout shop-layout--sidebar--start">
                    <div class="shop-layout__sidebar">
                        <div class="block block-sidebar block-sidebar--offcanvas--mobile">
                            <div class="block-sidebar__backdrop"></div>
                            <div class="block-sidebar__body">
                                <div class="block-sidebar__header">
                                    <div class="block-sidebar__title">Filtros</div>
                                    <button class="block-sidebar__close" type="button">
                                        <svg width="20px" height="20px">
                                            <use xlink:href="images/sprite.svg#cross-20"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="block-sidebar__item">
                                    <div class="widget-filters widget widget-filters--offcanvas--mobile" data-collapse data-collapse-opened-class="filter--opened">
                                        <h4 class="widget-filters__title widget__title">Categorias</h4>
                                        <div class="widget-filters__list">
                                            <div class="widget-filters__item">
                                                <div class="filter filter--opened" data-collapse-item>
                                                   
                                                    <div class="filter__body" data-collapse-content>
                                                        <div class="filter__container">
                                                            <div class="filter-categories">
                                                                <ul class="filter-categories__list">
                                                                   
                                                                    <li class="filter-categories__item filter-categories__item--child">
                                                                        <a href="?p=ofertascat&id=1">Despensa</a>
                                                                       
                                                                    </li>
                                                                    <li class="filter-categories__item filter-categories__item--child">
                                                                        <a href="?p=ofertascat&id=2">Abarrotes</a>
                                                                        
                                                                    </li>
                                                                    <li class="filter-categories__item filter-categories__item--child">
                                                                        <a href="?p=ofertascat&id=3">Pasabocas salados</a>
                                                                      
                                                                    </li>
                                                                    <li class="filter-categories__item filter-categories__item--child">
                                                                        <a href="?p=ofertascat&id=6">Golosinas</a>
                                                                    
                                                                    </li>
                                                                    <li class="filter-categories__item filter-categories__item--child">
                                                                        <a href="?p=ofertascat&id=7">Bebidas</a>
                                                                     
                                                                    </li>
                                                                    <li class="filter-categories__item filter-categories__item--child">
                                                                        <a href="?p=ofertascat&id=8">Carne</a>
                                                                    
                                                                    </li>
                                                                    <li class="filter-categories__item filter-categories__item--child">
                                                                        <a href="?p=ofertascat&id=13">Frutas y verduras</a>
                                                                   
                                                                    </li>
                                                                    <li class="filter-categories__item filter-categories__item--child">
                                                                        <a href="?p=ofertascat&id=10">Aseo personal</a>
                                                                     
                                                                    </li>
                                                                    <li class="filter-categories__item filter-categories__item--child">
                                                                        <a href="?p=ofertascat&id=9">Aseo hogar</a>
                                                                    
                                                                    </li>
                                                                    <li class="filter-categories__item filter-categories__item--child">
                                                                        <a href="?p=ofertascat&id=11">Productos para bebes</a>
                                                                     
                                                                    </li>
                                                                     <li class="filter-categories__item filter-categories__item--child">
                                                                     <a href="?p=ofertascat&id=12">Productos para mascotas</a>
                                                                     
                                                                    </li>
                                                                     <li class="filter-categories__item filter-categories__item--child">

                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                         
                                            
                                           
                                         
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="block-sidebar__item d-none d-lg-block">
                                    <div class="widget-products widget">
                                        <h4 class="widget__title">Ultimos productos</h4>
                                        <div class="widget-products__list">
                                           

                                                <?php

if(isset($cat)){
    $sc = $mysqli->query("SELECT * FROM categorias WHERE id = '$cat'");
    $rc = mysqli_fetch_array($sc);
    ?>
    <h1>Categoria Filtrada por: <?=$rc['categoria']?></h1>
    <?php
}
if(isset($agregar) && isset($cant)){
    $idp = clear($agregar);
    $cant = clear($cant);
    $id_cliente = clear($_SESSION['id_cliente']);

    $v = $mysqli->query("SELECT * FROM carro WHERE id_cliente = '$id_cliente' AND id_producto = '$idp'");

        $spro = $mysqli->query("SELECT * FROM productos WHERE id = '$idp'");
        $rpro = mysqli_fetch_array($spro);
        $id_vendedor = $rpro['id_vendedor'];
          
    
    if(mysqli_num_rows($v)>0){
        $q = $mysqli->query("UPDATE carro SET cant = cant + $cant WHERE id_cliente = '$id_cliente' AND id_p = '$idp'");
    }else{
        $q = $mysqli->query("INSERT INTO carro (id_cliente,id_producto,cant,id_vendedor) VALUES ($id_cliente,$idp,$cant,$id_vendedor)");
    }
    alert("Se ha agregado al carro de compras",1,'productos');
    //redir("?p=productos");
}
if(isset($enviar1)){
 
    redir("?p=registron");
}
if(isset($enviar2)){
 
    redir("?p=registron");
}
if(isset($busq) && isset($cat)){
 
    $q = $mysqli->query("SELECT * FROM productos WHERE name like '%$busq%' AND id_categoria = '$cat'");
}elseif(isset($cat) && !isset($busq)){

    $q = $mysqli->query("SELECT * FROM productos WHERE id_categoria = '$cat' ORDER  BY RAND (id)");

}elseif(isset($busq) && !isset($cat)){
  redir("?p=search&busq=$busq");

  
}elseif(!isset($busq) && !isset($cat)){
    $q = $mysqli->query("SELECT * FROM productos WHERE oferta>0 ORDER BY RAND (id)");
   
}else{
   $q = $mysqli->query("SELECT * FROM productos WHERE oferta>0 ORDER BY RAND (id)");
 
}

while($r=mysqli_fetch_array($q)){
    $preciototal = 0;
            if($r['oferta']>0){
                if(strlen($r['oferta'])==1){
                    $desc = "0.0".$r['oferta'];
                }else{
                    $desc = "0.".$r['oferta'];
                }
                $preciototal = $r['price'] -($r['price'] * $desc);
            }else{
                $preciototal = $r['price'];
            }
             $id_vendedor = $r['id_vendedor'];
    ?>  <div class="widget-products__item">
                                                <div class="widget-products__image">
                                                    <div class="product-image">
                                                        <a href="product.html" class="product-image__body">
                                                            <img  alt="<?=$r['name']?>" class="product-image__img" src="productos/<?=$r['imagen']?>"/>
                                                            
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="widget-products__info">
                                                    <div class="widget-products__name">
                                                        <a href="?p=produc&id=<?=$r['id'];?>"><?=$r['name']?></a>
                                                    </div>
                                                    <div class="widget-products__prices">
                                                                <?php
        if($r['oferta']>0){
            ?>
            <span class="widget-products__new-price" style="color: black"><?=$divisa?><?=number_format($preciototal)?></span>
            <span class="widget-products__old-price"><?=$divisa?><?=number_format($r['price'])?></span>

           
           
            <?php
            }else{
            ?>
             <span class="widget-products__new-price" style="color: black"><?=$divisa?><?=number_format($r['price'])?></span>
          
             <?php
}
?>

                                                    </div>
                                                </div>
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
                    <div class="shop-layout__content">
                        <div class="block">
                            <div class="products-view">
                                <div class="products-view__options">
                                    <div class="view-options view-options--offcanvas--mobile">
                                        <div class="view-options__filters-button">
                                            <button type="button" class="filters-button">
                                                <svg class="filters-button__icon" width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#filters-16"></use>
                                                </svg>
                                                <span class="filters-button__title">Filtros</span>
                                                <span class="filters-button__counter">11</span>
                                            </button>
                                        </div>
                                        
<?php
$contador56=0;
$qr = $mysqli->query("SELECT * FROM productos WHERE oferta>0 ORDER BY RAND (id) ");
while($rr=mysqli_fetch_array($qr)){
$contador56++;
}
?>
                                        <div class="view-options__legend">Mostrando <?=$contador56?> de <?=$contador56?> productos</div>
                                        <div class="view-options__divider"></div>
                                        <div class="view-options__control">
                                          
                                            <div>
                                                
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                                <div class="products-view__list products-list" data-layout="grid-3-sidebar" data-with-features="false" data-mobile-grid-columns="2">
                                    <div class="products-list__body">
                                        <?php

if(isset($cat)){
    $sc = $mysqli->query("SELECT * FROM categorias WHERE id = '$cat'");
    $rc = mysqli_fetch_array($sc);
    ?>
    <h1>Categoria Filtrada por: <?=$rc['categoria']?></h1>
    <?php
}
if(isset($agregar) && isset($cant)){
    $idp = clear($agregar);
    $cant = clear($cant);
    $id_cliente = clear($_SESSION['id_cliente']);

    $v = $mysqli->query("SELECT * FROM carro WHERE id_cliente = '$id_cliente' AND id_producto = '$idp'");

        $spro = $mysqli->query("SELECT * FROM productos WHERE id = '$idp'");
        $rpro = mysqli_fetch_array($spro);
        $id_vendedor = $rpro['id_vendedor'];
          
    
    if(mysqli_num_rows($v)>0){
        $q = $mysqli->query("UPDATE carro SET cant = cant + $cant WHERE id_cliente = '$id_cliente' AND id_p = '$idp'");
    }else{
        $q = $mysqli->query("INSERT INTO carro (id_cliente,id_producto,cant,id_vendedor) VALUES ($id_cliente,$idp,$cant,$id_vendedor)");
    }
    alert("Se ha agregado al carro de compras",1,'productos');
    //redir("?p=productos");
}

if(isset($busq) && isset($cat)){
 
    $q = $mysqli->query("SELECT * FROM productos WHERE name like '%$busq%' AND id_categoria = '$cat'");
}elseif(isset($cat) && !isset($busq)){

    $q = $mysqli->query("SELECT * FROM productos WHERE id_categoria = '$cat' ORDER BY RAND (id) ");

}elseif(isset($busq) && !isset($cat)){
  redir("?p=search&busq=$busq");

  
}elseif(!isset($busq) && !isset($cat)){
    $q = $mysqli->query("SELECT * FROM productos WHERE oferta>0 ORDER BY RAND (id) ");
   
}else{
   $q = $mysqli->query("SELECT * FROM productos WHERE oferta>0 ORDER BY RAND (id) ");
 
}

while($r=mysqli_fetch_array($q)){
    $preciototal = 0;
            if($r['oferta']>0){
                if(strlen($r['oferta'])==1){
                    $desc = "0.0".$r['oferta'];
                }else{
                    $desc = "0.".$r['oferta'];
                }
                $preciototal = $r['price'] -($r['price'] * $desc);
            }else{
                $preciototal = $r['price'];
            }
             $id_vendedor = $r['id_vendedor'];
    ?>
                                        <div class="products-list__item">
                                            <div class="product-card product-card--hidden-actions ">
                                                
                                                <div class="product-card__badges-list">
                                                    <div class="product-card__badge product-card__badge--new">New</div>
                                                </div>
                                                <div class="product-card__image product-image">
                                                    <a href="?p=produc&id=<?=$r['id'];?>" class="product-image__body">
                                                     <img alt="<?=$r['name']?>" class="product-image__img" src="productos/<?=$r['imagen']?>"/>
                                                    </a>
                                                </div>
                                                <div class="product-card__info">
                                                    <div class="product-card__name">
                                                       <a href="?p=produc&id=<?=$r['id'];?>"><?=$r['name']?></a>
                                                    </div>
                                                    <div class="product-card__rating">
                                                       
                                                       <?php
$so = $mysqli->query("SELECT * FROM admins WHERE id = '$id_vendedor'");
$ro = mysqli_fetch_array($so);
            ?>
                                    
                                     <a style="font-size:13px;" href="?p=vendedor&id=<?=$ro['id'];?>">Vendedor: <?=$ro['name']?></a>
                                   
                                                    </div>
                                                    <ul class="product-card__features-list">
                                                        <li>Speed: 750 RPM</li>
                                                        <li>Power Source: Cordless-Electric</li>
                                                        <li>Battery Cell Type: Lithium</li>
                                                        <li>Voltage: 20 Volts</li>
                                                        <li>Battery Capacity: 2 Ah</li>
                                                    </ul>
                                                </div>
                                                <div class="product-card__actions">
                                                    <div class="product-card__availability">
                                                        Availability: <span class="text-success">In Stock</span>
                                                    </div>
                                                    <div class="product-card__prices">
                                                                                                                       <?php
        if($r['oferta']>0){
            ?>
            <span class="widget-products__new-price" style="color: black"><?=$divisa?><?=number_format($preciototal)?></span>
            <span class="widget-products__old-price"><?=$divisa?><?=number_format($r['price'])?></span>

           
           
            <?php
            }else{
            ?>
             <span class="widget-products__new-price" style="color: black"><?=$divisa?><?=number_format($r['price'])?></span>
          
             <?php
}
?>
                                                    </div>
                                                    <div class="product-card__buttons">
                                                          <?php
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
                                                        <button class="btn btn-primary product-card__addtocart" type="button" onclick="agregar_carro('<?=$r['id']?>');">Añadir al carrito</button>
                                                        <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button" onclick="agregar_carro('<?=$r['id']?>');">Añadir al carrito</button>
                                                       <?php
                                                   }else{
                                                ?>
                                                 <form method="post" action="" >
                                                <button class="btn btn-primary product-card__addtocart" name="enviar1"  type="submit">Añadir al carrito</button>
                                                <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list"   name="enviar2"  type="submit">Añadir al carrito</button>
                                                </form>
                                                        <?php
                                                   }
                                                   ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         <?php
}
?>
                                     
                                        <div class="products-list__item">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="products-view__pagination">
                                    
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
       <script type="text/javascript">            
    function agregar_carro(idp){
        var cant = prompt("¿Que cantidad desea agregar?",1);

        if(cant.length>0){
            window.location="?p=productos&agregar="+idp+"&cant="+cant;
        }
    }

</script>
    <!-- photoswipe / end -->
    <!-- js -->

</body>

</html>