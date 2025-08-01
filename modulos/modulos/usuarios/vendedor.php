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
<style>
    .product-image__img {
    display: block;
    position: absolute;
    width: 100%;
    padding: 25px !important;
    height: 100%;

}
.page-header__title {

    padding: 17px!important;
    display: flex!important;
}
.page-header__container {
    padding-bottom: 0px;
}
.page-header__title {
    padding-top: 4px;
    display: flex!important;
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
                                
                                <li class="breadcrumb-item active" aria-current="page">Productos del vendedor</li>
                            </ol>
                        </nav>
                    </div>
                    <?php
$so = $mysqli->query("SELECT * FROM admins WHERE id = '$id'");
$ro = mysqli_fetch_array($so);
if(isset($enviar1)){
 
    redir("?p=registron");
}
if(isset($enviar2)){
 
    redir("?p=registron");
}
if(isset($busq) && isset($cat)){
 
    $q = $mysqli->query("SELECT * FROM productos WHERE name like '%$busq%' AND id_categoria = '$cat'");
}elseif(isset($cat) && !isset($busq)){

    $q = $mysqli->query("SELECT * FROM productos WHERE id_categoria = '$cat' ORDER BY id DESC");

}elseif(isset($busq) && !isset($cat)){
  redir("?p=search&busq=$busq");
}
?>
                    <div class="page-header__title">
                        <?php
                        if($ro['imagen']!=0){
                            ?>
                        <img src="admin/productos/<?=$ro['imagen']?>" style="width: 78px;    width: 92px;
                        
    margin: 0px 11px 0px 0px;" >  
    <?php
                        }
                        ?>
                      
                        <h1 ><?=$ro['name']?></h1>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="block">
                            <div class="products-view">
                                <div class="products-view__options">
                                    <div class="view-options view-options--offcanvas--always">
                                        <div class="view-options__filters-button">
                                            
                                        </div>
                                        
                                        <?php
                                        $contador=0;
$qj = $mysqli->query("SELECT * FROM productos WHERE id_vendedor = '$id'");
while($rj = mysqli_fetch_array($qj)){
    $contador++;
}

    ?>
                                        <div class="view-options__legend">Mostrando <?=$contador?> de <?=$contador?> productos</div>
                                        <div class="view-options__divider"></div>
                                        <div class="view-options__control">
                                          
 
                                  </div>
                                <?php
    if($contador==0){
        ?>
        
      El vendedor no ha agregado productos aun, próximamente los estará agregando.<br><i class="fas fa-exclamation-circle"></i>&nbsp; Recuerda&nbsp; <strong style="color:#e2013b;"> ahórra tiempo y trabajo</strong> digitalizando tus cuentas desde la opción digitalizar mis cuentas, deja de depender de un monton de facturas, todo en un mismo lugar. Descubre: Pincha <a href="https://open.com.se/?p=gasto" style="color:#007bff;">aqui </a>
        <?php
    }
        ?>           
                                    </div>
                                </div>
                                <div class="products-view__list products-list" data-layout="grid-5-full" data-with-features="false" data-mobile-grid-columns="2">
                                    <div class="products-list__body">
<?php
$qj = $mysqli->query("SELECT * FROM productos WHERE id_vendedor = '$id'");
while($rj = mysqli_fetch_array($qj)){
    $preciototal = 0;
            if($rj['oferta']>0){
                if(strlen($rj['oferta'])==1){
                    $desc = "0.0".$rj['oferta'];
                }else{
                    $desc = "0.".$rj['oferta'];
                }
                $preciototal = $rj['price'] -($rj['price'] * $desc);
            }else{
                $preciototal = $rj['price'];
            }
            $id_vendedor = $rj['id_vendedor'];
?>


                                        <div class="products-list__item">
                                            <div class="product-card product-card--hidden-actions ">
                                                
                                                <div class="product-card__badges-list">
                                                    <div class="product-card__badge product-card__badge--new">New</div>
                                                </div>
                                                <div class="product-card__image product-image">
                                                    <a href="?p=produc&id=<?=$rj['id'];?>" class="product-image__body">
                                                        <img class="product-image__img"  src="productos/<?=$rj['imagen']?>" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-card__info">
                                                    <div class="product-card__name">
                                                         <a href="?p=produc&id=<?=$rj['id'];?>"><?=$rj['name']?></a>
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
                                                if($rj['oferta']>0){
            ?>
<span class="widget-products__new-price" style="color: black"><?=$divisa?><?=number_format($rj['price'])?></span>
            <span class="widget-products__old-price"><?=$divisa?><?=number_format($preciototal)?></span>
            <?php
            }else{
            ?>
            <?=$divisa?>
            <?=number_format($rj['price'])?>
            
           
            <?php
            }
            ?>
                                                    </div>
                                                    <div class="product-card__buttons">
                                                            <?php
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
                                                        <button class="btn btn-primary product-card__addtocart" type="button" onclick="agregar_carro('<?=$rj['id']?>');">Añadir al carrito</button>
                                                        <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button" onclick="agregar_carro('<?=$rj['id']?>');">Añadir al carrito</button>
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
                                    </div>
                                </div>
                                <div class="products-view__pagination">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block block-sidebar block-sidebar--offcanvas--always">
                    <div class="block-sidebar__backdrop"></div>
                    <div class="block-sidebar__body">
                        <div class="block-sidebar__header">
                            <div class="block-sidebar__title">Filters</div>
                            <button class="block-sidebar__close" type="button">
                                <svg width="20px" height="20px">
                                    <use xlink:href="images/sprite.svg#cross-20"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="block-sidebar__item">
                            <div class="widget-filters widget widget-filters--offcanvas--always" data-collapse data-collapse-opened-class="filter--opened">
                                <h4 class="widget-filters__title widget__title">Filters</h4>
                                <div class="widget-filters__list">
                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item>
                                            <button type="button" class="filter__title" data-collapse-trigger>
                                                Categories
                                                <svg class="filter__arrow" width="12px" height="7px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                                </svg>
                                            </button>
                                            <div class="filter__body" data-collapse-content>
                                                <div class="filter__container">
                                                    <div class="filter-categories">
                                                        <ul class="filter-categories__list">
                                                            <li class="filter-categories__item filter-categories__item--parent">
                                                                <svg class="filter-categories__arrow" width="6px" height="9px">
                                                                    <use xlink:href="images/sprite.svg#arrow-rounded-left-6x9"></use>
                                                                </svg>
                                                                <a href="">Construction & Repair</a>
                                                                <div class="filter-categories__counter">254</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--parent">
                                                                <svg class="filter-categories__arrow" width="6px" height="9px">
                                                                    <use xlink:href="images/sprite.svg#arrow-rounded-left-6x9"></use>
                                                                </svg>
                                                                <a href="">Instruments</a>
                                                                <div class="filter-categories__counter">75</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--current">
                                                                <a href="">Power Tools</a>
                                                                <div class="filter-categories__counter">21</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child">
                                                                <a href="">Drills & Mixers</a>
                                                                <div class="filter-categories__counter">15</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child">
                                                                <a href="">Cordless Screwdrivers</a>
                                                                <div class="filter-categories__counter">2</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child">
                                                                <a href="">Screwdrivers</a>
                                                                <div class="filter-categories__counter">30</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child">
                                                                <a href="">Wrenches</a>
                                                                <div class="filter-categories__counter">7</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child">
                                                                <a href="">Grinding Machines</a>
                                                                <div class="filter-categories__counter">5</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child">
                                                                <a href="">Milling Cutters</a>
                                                                <div class="filter-categories__counter">2</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child">
                                                                <a href="">Electric Spray Guns</a>
                                                                <div class="filter-categories__counter">9</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child">
                                                                <a href="">Jigsaws</a>
                                                                <div class="filter-categories__counter">4</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child">
                                                                <a href="">Jackhammers</a>
                                                                <div class="filter-categories__counter">0</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child">
                                                                <a href="">Planers</a>
                                                                <div class="filter-categories__counter">12</div>
                                                            </li>
                                                            <li class="filter-categories__item filter-categories__item--child">
                                                                <a href="">Glue Guns</a>
                                                                <div class="filter-categories__counter">7</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item>
                                            <button type="button" class="filter__title" data-collapse-trigger>
                                                Categories Alt
                                                <svg class="filter__arrow" width="12px" height="7px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                                </svg>
                                            </button>
                                            <div class="filter__body" data-collapse-content>
                                                <div class="filter__container">
                                                    <div class="filter-categories-alt">
                                                        <ul class="filter-categories-alt__list filter-categories-alt__list--level--1" data-collapse-opened-class="filter-categories-alt__item--open">
                                                            <li class="filter-categories-alt__item" data-collapse-item>
                                                                <a href="">Clothes & PPE</a>
                                                            </li>
                                                            <li class="filter-categories-alt__item" data-collapse-item>
                                                                <button class="filter-categories-alt__expander" data-collapse-trigger></button>
                                                                <a href="">Power Tools</a>
                                                                <div class="filter-categories-alt__children" data-collapse-content>
                                                                    <ul class="filter-categories-alt__list filter-categories-alt__list--level--2">
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Engravers</a>
                                                                        </li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Drills</a>
                                                                        </li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Wrenches</a>
                                                                        </li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Plumbing</a>
                                                                        </li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Wall Chaser</a>
                                                                        </li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Pneumatic Tools</a>
                                                                        </li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Milling Cutters</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="filter-categories-alt__item filter-categories-alt__item--open filter-categories-alt__item--current" data-collapse-item>
                                                                <button class="filter-categories-alt__expander" data-collapse-trigger></button>
                                                                <a href="">Hand Tools</a>
                                                                <div class="filter-categories-alt__children" data-collapse-content>
                                                                    <ul class="filter-categories-alt__list filter-categories-alt__list--level--2">
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Screwdrivers</a>
                                                                        </li>
                                                                        <li class="filter-categories-alt__item filter-categories-alt__item--current" data-collapse-item>
                                                                            <button class="filter-categories-alt__expander" data-collapse-trigger></button>
                                                                            <a href="">Handsaws</a>
                                                                            <div class="filter-categories-alt__children" data-collapse-content>
                                                                                <ul class="filter-categories-alt__list filter-categories-alt__list--level--3">
                                                                                    <li class="filter-categories-alt__item" data-collapse-item>
                                                                                        <a href="">Power Saws</a>
                                                                                    </li>
                                                                                    <li class="filter-categories-alt__item" data-collapse-item>
                                                                                        <a href="">Hacksaws</a>
                                                                                    </li>
                                                                                    <li class="filter-categories-alt__item filter-categories-alt__item--current" data-collapse-item>
                                                                                        <button class="filter-categories-alt__expander" data-collapse-trigger></button>
                                                                                        <a href="">Deep Dive</a>
                                                                                        <div class="filter-categories-alt__children" data-collapse-content>
                                                                                            <ul class="filter-categories-alt__list filter-categories-alt__list--level--4">
                                                                                                <li class="filter-categories-alt__item" data-collapse-item>
                                                                                                    <a href="">Submarines</a>
                                                                                                </li>
                                                                                                <li class="filter-categories-alt__item" data-collapse-item>
                                                                                                    <a href="">Silt In Bags</a>
                                                                                                </li>
                                                                                                <li class="filter-categories-alt__item" data-collapse-item>
                                                                                                    <a href="">Black Pearl</a>
                                                                                                </li>
                                                                                                <li class="filter-categories-alt__item" data-collapse-item>
                                                                                                    <a href="">Krakens</a>
                                                                                                </li>
                                                                                                <li class="filter-categories-alt__item" data-collapse-item>
                                                                                                    <a href="">Nautilus</a>
                                                                                                </li>
                                                                                                <li class="filter-categories-alt__item" data-collapse-item>
                                                                                                    <a href="">Mariana Trench</a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="filter-categories-alt__item" data-collapse-item>
                                                                                        <a href="">Chain Saws</a>
                                                                                    </li>
                                                                                    <li class="filter-categories-alt__item" data-collapse-item>
                                                                                        <a href="">Two-handed Saws</a>
                                                                                    </li>
                                                                                    <li class="filter-categories-alt__item" data-collapse-item>
                                                                                        <a href="">Other</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Knives</a>
                                                                        </li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Axes</a>
                                                                        </li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Multitools</a>
                                                                        </li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Paint Tools</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="filter-categories-alt__item" data-collapse-item>
                                                                <a href="">Measurement</a>
                                                            </li>
                                                            <li class="filter-categories-alt__item" data-collapse-item>
                                                                <button class="filter-categories-alt__expander" data-collapse-trigger></button>
                                                                <a href="">Garden Equipment</a>
                                                                <div class="filter-categories-alt__children" data-collapse-content>
                                                                    <ul class="filter-categories-alt__list filter-categories-alt__list--level--2">
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Motor Pumps</a>
                                                                        </li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Chainsaws</a>
                                                                        </li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Electric Saws</a>
                                                                        </li>
                                                                        <li class="filter-categories-alt__item" data-collapse-item>
                                                                            <a href="">Brush Cutters</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item>
                                            <button type="button" class="filter__title" data-collapse-trigger>
                                                Price
                                                <svg class="filter__arrow" width="12px" height="7px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                                </svg>
                                            </button>
                                            <div class="filter__body" data-collapse-content>
                                                <div class="filter__container">
                                                    <div class="filter-price" data-min="500" data-max="1500" data-from="590" data-to="1130">
                                                        <div class="filter-price__slider"></div>
                                                        <div class="filter-price__title">Price: $<span class="filter-price__min-value"></span> – $<span class="filter-price__max-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item>
                                            <button type="button" class="filter__title" data-collapse-trigger>
                                                Brand
                                                <svg class="filter__arrow" width="12px" height="7px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                                </svg>
                                            </button>
                                            <div class="filter__body" data-collapse-content>
                                                <div class="filter__container">
                                                    <div class="filter-list">
                                                        <div class="filter-list__list">
                                                            <label class="filter-list__item ">
                                                                <span class="filter-list__input input-check">
                                                                    <span class="input-check__body">
                                                                        <input class="input-check__input" type="checkbox">
                                                                        <span class="input-check__box"></span>
                                                                        <svg class="input-check__icon" width="9px" height="7px">
                                                                            <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <span class="filter-list__title">
                                                                    Wakita
                                                                </span>
                                                                <span class="filter-list__counter">7</span>
                                                            </label>
                                                            <label class="filter-list__item ">
                                                                <span class="filter-list__input input-check">
                                                                    <span class="input-check__body">
                                                                        <input class="input-check__input" type="checkbox" checked>
                                                                        <span class="input-check__box"></span>
                                                                        <svg class="input-check__icon" width="9px" height="7px">
                                                                            <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <span class="filter-list__title">
                                                                    Zosch
                                                                </span>
                                                                <span class="filter-list__counter">42</span>
                                                            </label>
                                                            <label class="filter-list__item  filter-list__item--disabled ">
                                                                <span class="filter-list__input input-check">
                                                                    <span class="input-check__body">
                                                                        <input class="input-check__input" type="checkbox" checked disabled>
                                                                        <span class="input-check__box"></span>
                                                                        <svg class="input-check__icon" width="9px" height="7px">
                                                                            <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <span class="filter-list__title">
                                                                    WeVALT
                                                                </span>
                                                            </label>
                                                            <label class="filter-list__item  filter-list__item--disabled ">
                                                                <span class="filter-list__input input-check">
                                                                    <span class="input-check__body">
                                                                        <input class="input-check__input" type="checkbox" disabled>
                                                                        <span class="input-check__box"></span>
                                                                        <svg class="input-check__icon" width="9px" height="7px">
                                                                            <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <span class="filter-list__title">
                                                                    Hammer
                                                                </span>
                                                            </label>
                                                            <label class="filter-list__item ">
                                                                <span class="filter-list__input input-check">
                                                                    <span class="input-check__body">
                                                                        <input class="input-check__input" type="checkbox">
                                                                        <span class="input-check__box"></span>
                                                                        <svg class="input-check__icon" width="9px" height="7px">
                                                                            <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <span class="filter-list__title">
                                                                    Mitasia
                                                                </span>
                                                                <span class="filter-list__counter">1</span>
                                                            </label>
                                                            <label class="filter-list__item ">
                                                                <span class="filter-list__input input-check">
                                                                    <span class="input-check__body">
                                                                        <input class="input-check__input" type="checkbox">
                                                                        <span class="input-check__box"></span>
                                                                        <svg class="input-check__icon" width="9px" height="7px">
                                                                            <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <span class="filter-list__title">
                                                                    Metaggo
                                                                </span>
                                                                <span class="filter-list__counter">25</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item>
                                            <button type="button" class="filter__title" data-collapse-trigger>
                                                Brand
                                                <svg class="filter__arrow" width="12px" height="7px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                                </svg>
                                            </button>
                                            <div class="filter__body" data-collapse-content>
                                                <div class="filter__container">
                                                    <div class="filter-list">
                                                        <div class="filter-list__list">
                                                            <label class="filter-list__item ">
                                                                <span class="filter-list__input input-radio">
                                                                    <span class="input-radio__body">
                                                                        <input class="input-radio__input" name="filter_radio" type="radio">
                                                                        <span class="input-radio__circle"></span>
                                                                    </span>
                                                                </span>
                                                                <span class="filter-list__title">
                                                                    Wakita
                                                                </span>
                                                                <span class="filter-list__counter">7</span>
                                                            </label>
                                                            <label class="filter-list__item ">
                                                                <span class="filter-list__input input-radio">
                                                                    <span class="input-radio__body">
                                                                        <input class="input-radio__input" name="filter_radio" type="radio">
                                                                        <span class="input-radio__circle"></span>
                                                                    </span>
                                                                </span>
                                                                <span class="filter-list__title">
                                                                    Zosch
                                                                </span>
                                                                <span class="filter-list__counter">42</span>
                                                            </label>
                                                            <label class="filter-list__item  filter-list__item--disabled ">
                                                                <span class="filter-list__input input-radio">
                                                                    <span class="input-radio__body">
                                                                        <input class="input-radio__input" name="filter_radio" type="radio" checked disabled>
                                                                        <span class="input-radio__circle"></span>
                                                                    </span>
                                                                </span>
                                                                <span class="filter-list__title">
                                                                    WeVALT
                                                                </span>
                                                            </label>
                                                            <label class="filter-list__item  filter-list__item--disabled ">
                                                                <span class="filter-list__input input-radio">
                                                                    <span class="input-radio__body">
                                                                        <input class="input-radio__input" name="filter_radio" type="radio" disabled>
                                                                        <span class="input-radio__circle"></span>
                                                                    </span>
                                                                </span>
                                                                <span class="filter-list__title">
                                                                    Hammer
                                                                </span>
                                                            </label>
                                                            <label class="filter-list__item ">
                                                                <span class="filter-list__input input-radio">
                                                                    <span class="input-radio__body">
                                                                        <input class="input-radio__input" name="filter_radio" type="radio">
                                                                        <span class="input-radio__circle"></span>
                                                                    </span>
                                                                </span>
                                                                <span class="filter-list__title">
                                                                    Mitasia
                                                                </span>
                                                                <span class="filter-list__counter">1</span>
                                                            </label>
                                                            <label class="filter-list__item ">
                                                                <span class="filter-list__input input-radio">
                                                                    <span class="input-radio__body">
                                                                        <input class="input-radio__input" name="filter_radio" type="radio">
                                                                        <span class="input-radio__circle"></span>
                                                                    </span>
                                                                </span>
                                                                <span class="filter-list__title">
                                                                    Metaggo
                                                                </span>
                                                                <span class="filter-list__counter">25</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-filters__item">
                                        <div class="filter filter--opened" data-collapse-item>
                                            <button type="button" class="filter__title" data-collapse-trigger>
                                                Color
                                                <svg class="filter__arrow" width="12px" height="7px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                                </svg>
                                            </button>
                                            <div class="filter__body" data-collapse-content>
                                                <div class="filter__container">
                                                    <div class="filter-color">
                                                        <div class="filter-color__list">
                                                            <label class="filter-color__item">
                                                                <span class="filter-color__check input-check-color  input-check-color--white  " style="color: #fff;">
                                                                    <label class="input-check-color__body">
                                                                        <input class="input-check-color__input" type="checkbox">
                                                                        <span class="input-check-color__box"></span>
                                                                        <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg>
                                                                        <span class="input-check-color__stick"></span>
                                                                    </label>
                                                                </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                <span class="filter-color__check input-check-color   input-check-color--light " style="color: #d9d9d9;">
                                                                    <label class="input-check-color__body">
                                                                        <input class="input-check-color__input" type="checkbox">
                                                                        <span class="input-check-color__box"></span>
                                                                        <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg>
                                                                        <span class="input-check-color__stick"></span>
                                                                    </label>
                                                                </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                <span class="filter-color__check input-check-color  " style="color: #b3b3b3;">
                                                                    <label class="input-check-color__body">
                                                                        <input class="input-check-color__input" type="checkbox">
                                                                        <span class="input-check-color__box"></span>
                                                                        <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg>
                                                                        <span class="input-check-color__stick"></span>
                                                                    </label>
                                                                </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                <span class="filter-color__check input-check-color  " style="color: #808080;">
                                                                    <label class="input-check-color__body">
                                                                        <input class="input-check-color__input" type="checkbox">
                                                                        <span class="input-check-color__box"></span>
                                                                        <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg>
                                                                        <span class="input-check-color__stick"></span>
                                                                    </label>
                                                                </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                <span class="filter-color__check input-check-color  " style="color: #666;">
                                                                    <label class="input-check-color__body">
                                                                        <input class="input-check-color__input" type="checkbox">
                                                                        <span class="input-check-color__box"></span>
                                                                        <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg>
                                                                        <span class="input-check-color__stick"></span>
                                                                    </label>
                                                                </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                <span class="filter-color__check input-check-color  " style="color: #4d4d4d;">
                                                                    <label class="input-check-color__body">
                                                                        <input class="input-check-color__input" type="checkbox">
                                                                        <span class="input-check-color__box"></span>
                                                                        <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg>
                                                                        <span class="input-check-color__stick"></span>
                                                                    </label>
                                                                </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                <span class="filter-color__check input-check-color  " style="color: #262626;">
                                                                    <label class="input-check-color__body">
                                                                        <input class="input-check-color__input" type="checkbox">
                                                                        <span class="input-check-color__box"></span>
                                                                        <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg>
                                                                        <span class="input-check-color__stick"></span>
                                                                    </label>
                                                                </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                <span class="filter-color__check input-check-color  " style="color: #ff4040;">
                                                                    <label class="input-check-color__body">
                                                                        <input class="input-check-color__input" type="checkbox" checked>
                                                                        <span class="input-check-color__box"></span>
                                                                        <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg>
                                                                        <span class="input-check-color__stick"></span>
                                                                    </label>
                                                                </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                <span class="filter-color__check input-check-color  " style="color: #ff8126;">
                                                                    <label class="input-check-color__body">
                                                                        <input class="input-check-color__input" type="checkbox">
                                                                        <span class="input-check-color__box"></span>
                                                                        <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg>
                                                                        <span class="input-check-color__stick"></span>
                                                                    </label>
                                                                </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                <span class="filter-color__check input-check-color   input-check-color--light " style="color: #ffd440;">
                                                                    <label class="input-check-color__body">
                                                                        <input class="input-check-color__input" type="checkbox">
                                                                        <span class="input-check-color__box"></span>
                                                                        <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg>
                                                                        <span class="input-check-color__stick"></span>
                                                                    </label>
                                                                </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                <span class="filter-color__check input-check-color   input-check-color--light " style="color: #becc1f;">
                                                                    <label class="input-check-color__body">
                                                                        <input class="input-check-color__input" type="checkbox">
                                                                        <span class="input-check-color__box"></span>
                                                                        <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg>
                                                                        <span class="input-check-color__stick"></span>
                                                                    </label>
                                                                </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                <span class="filter-color__check input-check-color  " style="color: #8fcc14;">
                                                                    <label class="input-check-color__body">
                                                                        <input class="input-check-color__input" type="checkbox" checked>
                                                                        <span class="input-check-color__box"></span>
                                                                        <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg>
                                                                        <span class="input-check-color__stick"></span>
                                                                    </label>
                                                                </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                <span class="filter-color__check input-check-color  " style="color: #47cc5e;">
                                                                    <label class="input-check-color__body">
                                                                        <input class="input-check-color__input" type="checkbox">
                                                                        <span class="input-check-color__box"></span>
                                                                        <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg>
                                                                        <span class="input-check-color__stick"></span>
                                                                    </label>
                                                                </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                <span class="filter-color__check input-check-color  " style="color: #47cca0;">
                                                                    <label class="input-check-color__body">
                                                                        <input class="input-check-color__input" type="checkbox">
                                                                        <span class="input-check-color__box"></span>
                                                                        <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg>
                                                                        <span class="input-check-color__stick"></span>
                                                                    </label>
                                                                </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                <span class="filter-color__check input-check-color  " style="color: #47cccc;">
                                                                    <label class="input-check-color__body">
                                                                        <input class="input-check-color__input" type="checkbox">
                                                                        <span class="input-check-color__box"></span>
                                                                        <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg>
                                                                        <span class="input-check-color__stick"></span>
                                                                    </label>
                                                                </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                <span class="filter-color__check input-check-color  " style="color: #40bfff;">
                                                                    <label class="input-check-color__body">
                                                                        <input class="input-check-color__input" type="checkbox" disabled>
                                                                        <span class="input-check-color__box"></span>
                                                                        <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg>
                                                                        <span class="input-check-color__stick"></span>
                                                                    </label>
                                                                </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                <span class="filter-color__check input-check-color  " style="color: #3d6dcc;">
                                                                    <label class="input-check-color__body">
                                                                        <input class="input-check-color__input" type="checkbox" checked>
                                                                        <span class="input-check-color__box"></span>
                                                                        <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg>
                                                                        <span class="input-check-color__stick"></span>
                                                                    </label>
                                                                </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                <span class="filter-color__check input-check-color  " style="color: #7766cc;">
                                                                    <label class="input-check-color__body">
                                                                        <input class="input-check-color__input" type="checkbox">
                                                                        <span class="input-check-color__box"></span>
                                                                        <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg>
                                                                        <span class="input-check-color__stick"></span>
                                                                    </label>
                                                                </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                <span class="filter-color__check input-check-color  " style="color: #b852cc;">
                                                                    <label class="input-check-color__body">
                                                                        <input class="input-check-color__input" type="checkbox">
                                                                        <span class="input-check-color__box"></span>
                                                                        <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg>
                                                                        <span class="input-check-color__stick"></span>
                                                                    </label>
                                                                </span>
                                                            </label>
                                                            <label class="filter-color__item">
                                                                <span class="filter-color__check input-check-color  " style="color: #e53981;">
                                                                    <label class="input-check-color__body">
                                                                        <input class="input-check-color__input" type="checkbox">
                                                                        <span class="input-check-color__box"></span>
                                                                        <svg class="input-check-color__icon" width="12px" height="9px">
                                                                            <use xlink:href="images/sprite.svg#check-12x9"></use>
                                                                        </svg>
                                                                        <span class="input-check-color__stick"></span>
                                                                    </label>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-filters__actions d-flex">
                                    <button class="btn btn-primary btn-sm">Filter</button>
                                    <button class="btn btn-secondary btn-sm">Reset</button>
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
<script type="text/javascript">            
    function agregar_carro(idp){
        var cant = prompt("¿Que cantidad desea agregar?",1);

        if(cant.length>0){
            window.location="?p=productos&agregar="+idp+"&cant="+cant;
        }
    }

</script>