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

?>
    
        <!-- desktop site__header / end -->
        <!-- site__body -->
        <div class="site__body">
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
                                <li class="breadcrumb-item">
                                    <a href="">Breadcrumb</a>
                                    <svg class="breadcrumb-arrow" width="6px" height="9px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                    </svg>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Screwdrivers</li>
                            </ol>
                        </nav>
                    </div>
                         <div class="page-header__title">
                        <h1>Busqueda: <?=$busq?></h1>
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
                                        
                                        
                                   
                                        <div class="view-options__divider"></div>
                                        <div class="view-options__control">
                                            
                                        </div>
                                       
                                    </div>
                                </div>
<?php
$contador32=0;
$qw = $mysqli->query("SELECT * FROM productos WHERE name like '%$busq%' ");
while($rw=mysqli_fetch_array($qw)){
$contador32++;          
}

if($contador32>0){
    ?>                           
                                <div class="products-view__list products-list" data-layout="grid-5-full" data-with-features="false" data-mobile-grid-columns="2">
                                    <div class="products-list__body">
                                                                         <?php

$q = $mysqli->query("SELECT * FROM productos WHERE name like '%$busq%' ");
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
                                                <button class="product-card__quickview" type="button">
                                                    <svg width="16px" height="16px">
                                                        <use xlink:href="images/sprite.svg#quickview-16"></use>
                                                    </svg>
                                                    <span class="fake-svg-icon"></span>
                                                </button>
                                                <div class="product-card__image product-image">
                                                    <a href="product.html" class="product-image__body">
                                                        <img class="product-image__img" src="productos/<?=$r['imagen']?>"  alt="">
                                                    </a>
                                                </div>
                                                <div class="product-card__info">
                                                    <div class="product-card__name">
                                                        <a href="?p=produc&id=<?=$r['id'];?>"><?=$r['name']?></a>
                                                    </div>
                                                    <div class="product-card__rating">
                                                        <div class="product-card__rating-stars">
                                                            <div class="rating">
                                                                <div class="rating__body">
                                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div>
                                                                    <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div>
                                                                                                             <?php
            
            $so = $mysqli->query("SELECT * FROM admins WHERE id = '$id_vendedor'");
$ro = mysqli_fetch_array($so);
            ?>
                                                                    <svg class="rating__star " width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge ">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div>
                                                                    <svg class="rating__star " width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge ">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div>
                                                                    <svg class="rating__star " width="13px" height="12px">
                                                                        <g class="rating__fill">
                                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                                        </g>
                                                                        <g class="rating__stroke">
                                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                                        </g>
                                                                    </svg>
                                                                    <div class="rating__star rating__star--only-edge ">
                                                                        <div class="rating__fill">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                        <div class="rating__stroke">
                                                                            <div class="fake-svg-icon"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-card__rating-legend">4 Reviews</div>
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
           
         
            <span class="widget-products__new-price" style="color: black"><?=$divisa?> <?=number_format($r['price'])?></span>
            <span class="widget-products__old-price"><?=$divisa?> <?=number_format($preciototal)?></span>
            <?php
            }else{
            ?>
            <div class="price--sell-price"> <?=number_format($r['price'])?><?=$divisa?></div><bR>
          
             <?php
}
?>


                                                    </div>
                                                    <?php
                                                }else{
                                                ?>
                                                No se encontro productos con ese nombre revise si esta bien escrito
                                                <?php
                                            }

?>
                                                    <div class="product-card__buttons">
                                                        <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                                                        <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Add To Cart</button>
                                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                                            <svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                                            </svg>
                                                            <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                                        </button>
                                                        <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                                            <svg width="16px" height="16px">
                                                                <use xlink:href="images/sprite.svg#compare-16"></use>
                                                            </svg>
                                                            <span class="fake-svg-icon fake-svg-icon--compare-16"></span>
                                                        </button>
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
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link page-link--with-arrow" href="" aria-label="Previous">
                                                <svg class="page-link__arrow page-link__arrow--left" aria-hidden="true" width="8px" height="13px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-left-8x13"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="">2 <span class="sr-only">(current)</span></a></li>
                                        <li class="page-item"><a class="page-link" href="">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link page-link--with-arrow" href="" aria-label="Next">
                                                <svg class="page-link__arrow page-link__arrow--right" aria-hidden="true" width="8px" height="13px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-right-8x13"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
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
                                    <h5 class="footer-contacts__title">Contact Us</h5>
                                    <div class="footer-contacts__text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in feugiat lorem. Pellentque ac placerat tellus.
                                    </div>
                                    <ul class="footer-contacts__contacts">
                                        <li><i class="footer-contacts__icon fas fa-globe-americas"></i> 715 Fake Street, New York 10021 USA</li>
                                        <li><i class="footer-contacts__icon far fa-envelope"></i> stroyka@example.com</li>
                                        <li><i class="footer-contacts__icon fas fa-mobile-alt"></i> (800) 060-0730, (800) 060-0730</li>
                                        <li><i class="footer-contacts__icon far fa-clock"></i> Mon-Sat 10:00pm - 7:00pm</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-lg-2">
                                <div class="site-footer__widget footer-links">
                                    <h5 class="footer-links__title">Information</h5>
                                    <ul class="footer-links__list">
                                        <li class="footer-links__item"><a href="" class="footer-links__link">About Us</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Delivery Information</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Privacy Policy</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Brands</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Contact Us</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Returns</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Site Map</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-lg-2">
                                <div class="site-footer__widget footer-links">
                                    <h5 class="footer-links__title">My Account</h5>
                                    <ul class="footer-links__list">
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Store Location</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Order History</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Wish List</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Newsletter</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Specials</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Gift Certificates</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Affiliate</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="site-footer__widget footer-newsletter">
                                    <h5 class="footer-newsletter__title">Newsletter</h5>
                                    <div class="footer-newsletter__text">
                                        Praesent pellentesque volutpat ex, vitae auctor lorem pulvinar mollis felis at lacinia.
                                    </div>
                                    <form action="" class="footer-newsletter__form">
                                        <label class="sr-only" for="footer-newsletter-address">Email Address</label>
                                        <input type="text" class="footer-newsletter__form-input form-control" id="footer-newsletter-address" placeholder="Email Address...">
                                        <button class="footer-newsletter__form-button btn btn-primary">Subscribe</button>
                                    </form>
                                    <div class="footer-newsletter__text footer-newsletter__text--social">
                                        Follow us on social networks
                                    </div>
                                    <!-- social-links -->
                                    <div class="social-links footer-newsletter__social-links social-links--shape--circle">
                                        <ul class="social-links__list">
                                            <li class="social-links__item">
                                                <a class="social-links__link social-links__link--type--rss" href="" target="_blank">
                                                    <i class="fas fa-rss"></i>
                                                </a>
                                            </li>
                                            <li class="social-links__item">
                                                <a class="social-links__link social-links__link--type--youtube" href="" target="_blank">
                                                    <i class="fab fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li class="social-links__item">
                                                <a class="social-links__link social-links__link--type--facebook" href="" target="_blank">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="social-links__item">
                                                <a class="social-links__link social-links__link--type--twitter" href="" target="_blank">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="social-links__item">
                                                <a class="social-links__link social-links__link--type--instagram" href="" target="_blank">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- social-links / end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="site-footer__bottom">
                        <div class="site-footer__copyright">
                            <!-- copyright -->
                            Powered by HTML — Design by <a href="https://themeforest.net/user/kos9" target="_blank">Kos</a>
                            <!-- copyright / end -->
                        </div>
                        <div class="site-footer__payments">
                            <img src="images/payments.png" alt="">
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
    <div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content"></div>
        </div>
    </div>
    <!-- quickview-modal / end -->
    <!-- mobilemenu -->
    <div class="mobilemenu">
        <div class="mobilemenu__backdrop"></div>
        <div class="mobilemenu__body">
            <div class="mobilemenu__header">
                <div class="mobilemenu__title">Menu</div>
                <button type="button" class="mobilemenu__close">
                    <svg width="20px" height="20px">
                        <use xlink:href="images/sprite.svg#cross-20"></use>
                    </svg>
                </button>
            </div>
            <div class="mobilemenu__content">
                <ul class="mobile-links mobile-links--level--0" data-collapse data-collapse-opened-class="mobile-links__item--open">
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a href="index.html" class="mobile-links__item-link">Home</a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="index.html" class="mobile-links__item-link">Home 1</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="index-2.html" class="mobile-links__item-link">Home 2</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="index-3.html" class="mobile-links__item-link">Home 1 Finder</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="index-4.html" class="mobile-links__item-link">Home 2 Finder</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="offcanvas-cart.html" class="mobile-links__item-link">Offcanvas Cart</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a href="" class="mobile-links__item-link">Categories</a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="" class="mobile-links__item-link">Power Tools</a>
                                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="mobile-links__item-sub-links" data-collapse-content>
                                        <ul class="mobile-links mobile-links--level--2">
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="" class="mobile-links__item-link">Engravers</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="" class="mobile-links__item-link">Wrenches</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="" class="mobile-links__item-link">Wall Chaser</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="" class="mobile-links__item-link">Pneumatic Tools</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="" class="mobile-links__item-link">Machine Tools</a>
                                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="mobile-links__item-sub-links" data-collapse-content>
                                        <ul class="mobile-links mobile-links--level--2">
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="" class="mobile-links__item-link">Thread Cutting</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="" class="mobile-links__item-link">Chip Blowers</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="" class="mobile-links__item-link">Sharpening Machines</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="" class="mobile-links__item-link">Pipe Cutters</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="" class="mobile-links__item-link">Slotting machines</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="" class="mobile-links__item-link">Lathes</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a href="shop-grid-3-columns-sidebar.html" class="mobile-links__item-link">Shop</a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="shop-grid-3-columns-sidebar.html" class="mobile-links__item-link">Shop Grid</a>
                                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="mobile-links__item-sub-links" data-collapse-content>
                                        <ul class="mobile-links mobile-links--level--2">
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="shop-grid-3-columns-sidebar.html" class="mobile-links__item-link">3 Columns Sidebar</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="shop-grid-4-columns-full.html" class="mobile-links__item-link">4 Columns Full</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="shop-grid-5-columns-full.html" class="mobile-links__item-link">5 Columns Full</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="shop-list.html" class="mobile-links__item-link">Shop List</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="shop-right-sidebar.html" class="mobile-links__item-link">Shop Right Sidebar</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="product.html" class="mobile-links__item-link">Product</a>
                                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="mobile-links__item-sub-links" data-collapse-content>
                                        <ul class="mobile-links mobile-links--level--2">
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="product.html" class="mobile-links__item-link">Product</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="product-alt.html" class="mobile-links__item-link">Product Alt</a>
                                                </div>
                                            </li>
                                            <li class="mobile-links__item" data-collapse-item>
                                                <div class="mobile-links__item-title">
                                                    <a href="product-sidebar.html" class="mobile-links__item-link">Product Sidebar</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="cart.html" class="mobile-links__item-link">Cart</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="cart-empty.html" class="mobile-links__item-link">Cart Empty</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="checkout.html" class="mobile-links__item-link">Checkout</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="order-success.html" class="mobile-links__item-link">Order Success</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="wishlist.html" class="mobile-links__item-link">Wishlist</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="compare.html" class="mobile-links__item-link">Compare</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="track-order.html" class="mobile-links__item-link">Track Order</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a href="account-login.html" class="mobile-links__item-link">Account</a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="account-login.html" class="mobile-links__item-link">Login</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="account-dashboard.html" class="mobile-links__item-link">Dashboard</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="account-profile.html" class="mobile-links__item-link">Edit Profile</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="account-orders.html" class="mobile-links__item-link">Order History</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="account-order-details.html" class="mobile-links__item-link">Order Details</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="account-addresses.html" class="mobile-links__item-link">Address Book</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="account-edit-address.html" class="mobile-links__item-link">Edit Address</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="account-password.html" class="mobile-links__item-link">Change Password</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a href="blog-classic.html" class="mobile-links__item-link">Blog</a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="blog-classic.html" class="mobile-links__item-link">Blog Classic</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="blog-grid.html" class="mobile-links__item-link">Blog Grid</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="blog-list.html" class="mobile-links__item-link">Blog List</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="blog-left-sidebar.html" class="mobile-links__item-link">Blog Left Sidebar</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="post.html" class="mobile-links__item-link">Post Page</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="post-without-sidebar.html" class="mobile-links__item-link">Post Without Sidebar</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a href="" class="mobile-links__item-link">Pages</a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="about-us.html" class="mobile-links__item-link">About Us</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="contact-us.html" class="mobile-links__item-link">Contact Us</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="contact-us-alt.html" class="mobile-links__item-link">Contact Us Alt</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="404.html" class="mobile-links__item-link">404</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="terms-and-conditions.html" class="mobile-links__item-link">Terms And Conditions</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="faq.html" class="mobile-links__item-link">FAQ</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="components.html" class="mobile-links__item-link">Components</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="typography.html" class="mobile-links__item-link">Typography</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a data-collapse-trigger class="mobile-links__item-link">Currency</a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="" class="mobile-links__item-link">€ Euro</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="" class="mobile-links__item-link">£ Pound Sterling</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="" class="mobile-links__item-link">$ US Dollar</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="" class="mobile-links__item-link">₽ Russian Ruble</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a data-collapse-trigger class="mobile-links__item-link">Language</a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="" class="mobile-links__item-link">English</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="" class="mobile-links__item-link">French</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="" class="mobile-links__item-link">German</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="" class="mobile-links__item-link">Russian</a>
                                    </div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title">
                                        <a href="" class="mobile-links__item-link">Italian</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- mobilemenu / end -->
    <!-- photoswipe -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <!--<button class="pswp__button pswp__button&#45;&#45;share" title="Share"></button>-->
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- photoswipe / end -->
    <!-- js -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/photoswipe/photoswipe.min.js"></script>
    <script src="vendor/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="vendor/select2/js/select2.min.js"></script>
    <script src="js/number.js"></script>
    <script src="js/main.js"></script>
    <script src="js/header.js"></script>
    <script src="vendor/svg4everybody/svg4everybody.min.js"></script>
    <script>
        svg4everybody();
    </script>
</body>

</html>