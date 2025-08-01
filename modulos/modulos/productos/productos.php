  <?php
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
    <style type="text/css">
        .cuerpo {
    background: #fff;
    padding: 0px !important;
    min-height: auto !important;
    text-align: initial!important;
}
.block-features__item {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    padding: 16px 7px!important;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}
.product-image__img {
    display: block;
    position: absolute;
    width: 100%;
    height: 82% !important;
  
}
.block-banner__title {
    padding-top: 0px!important;
    font-size: 30px;
    line-height: 1;
    font-weight: 700;
}
.block-slideshow--layout--full .block-slideshow__slide-button {
    margin-top: 24px!important;
}
.block-slideshow--layout--full .block-slideshow__body, .block-slideshow--layout--full .block-slideshow__slide {
    height: 350px!important;
}

.block-products__list-item {
   max-width: calc(50% - 12px)!important;
}

.block-products-carousel .owl-item {
    -ms-flex-negative: 0;
    flex-shrink: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    max-width: 290px !important;
}
.block-features__content {
    padding-top: 10px!important;
    padding-left: 6px;
}
h4, .h4 {
    font-size: 1.6rem;
    color: #0e0e0e
    !important;
    font-family:'Raleway', sans-serif!important;
    padding: 5px;
}
    </style>
    <?php

if(isset($cat)){
    $sc = $mysqli->query("SELECT * FROM categorias WHERE id = '$cat'");
    $rc = mysqli_fetch_array($sc);
    ?>
    <h1>Categoria Filtrada por: <?=$rc['categoria']?></h1>
    <?php
}
if(isset($busq) && isset($cat)){
 
    $q = $mysqli->query("SELECT * FROM productos WHERE name like '%$busq%' AND id_categoria = '$cat'");
}elseif(isset($cat) && !isset($busq)){

    $q = $mysqli->query("SELECT * FROM productos WHERE id_categoria = '$cat' ORDER BY id DESC");

}elseif(isset($busq) && !isset($cat)){
  redir("?p=search&busq=$busq");
}
if(isset($agregar) && isset($cant)){
    $idp = clear($agregar);
    $cant = clear($cant);
    $id_cliente = clear($_SESSION['id_cliente']);

    $v = $mysqli->query("SELECT * FROM carro WHERE id_cliente = '$id_cliente' AND id_producto = '$idp' AND devolucion=0");

        $spro = $mysqli->query("SELECT * FROM productos WHERE id = '$idp'");
        $rpro = mysqli_fetch_array($spro);
        $id_vendedor = $rpro['id_vendedor'];
          
    
    if(mysqli_num_rows($v)>0){
        $q = $mysqli->query("UPDATE carro SET cant = cant + $cant WHERE id_cliente = '$id_cliente' AND id_producto = '$idp' AND devolucion=0");
    }else{
        $q = $mysqli->query("INSERT INTO carro (id_cliente,id_producto,cant,id_vendedor) VALUES ($id_cliente,$idp,$cant,$id_vendedor)");
    }
   alert("Se ha agregado al carro de compras",1,'productos');
    //redir("?p=productos");
}
if(isset($devolucion) && isset($cante)){
    $v1 = $mysqli->query("SELECT * FROM carro WHERE id_cliente = '$id_cliente' AND id_producto = '$devolucion' AND devolucion=1");
      $spro = $mysqli->query("SELECT * FROM productos WHERE id = '$devolucion'");
        $rpro = mysqli_fetch_array($spro);
        $id_vendedor = $rpro['id_vendedor'];
     if(mysqli_num_rows($v1)>0){
        $q = $mysqli->query("UPDATE carro SET cant = cant + $cante WHERE id_cliente = '$id_cliente' AND id_producto = '$devolucion' AND devolucion=1");
    }else{
        $q = $mysqli->query("INSERT INTO carro (id_cliente,id_producto,cant,devolucion,id_vendedor) VALUES ($id_cliente,$devolucion,$cante,1,$id_vendedor)");
    }
      alert("Finaliza en carrito",1,'productos');
}
if(isset($enviar1)){
 
    redir("?p=ofertas");
}
if(isset($enviar2)){
 
    redir("?p=registron");
}
?>

    
        <div class="site__body" >
            <!-- .block-slideshow -->
            <div class="block-slideshow block-slideshow--layout--full block">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="block-slideshow__body">
                                <div class="owl-carousel">
                                    <a class="block-slideshow__slide" href="" style="    border: 1px solid;">
                                        <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop" style="background-image: url(21618q.jpg);
    background-position: center;

        background-position-x: -2913px;
    background-position-y: -1423px;"></div>
                                        <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile" style="background-image: url('https://cdn.pixabay.com/photo/2016/09/16/19/19/online-store-1674907_960_720.png');background-position-y: -162px;"></div>
                                        <div class="block-slideshow__slide-content" style="   background-color: #ffffff;
    background-color: #ffffff;
    padding: 23px 10px 16px 16px;
    color: #000000 !important;
    border: 2px solid;
    padding: 12px 8px 20px 26px;
    color: #000000 !important;
    border: 2px solid;
    height: 278px;
    max-width: 453px;
    font-size: 15px!important;
    border-bottom-left-radius: 55px !important;
    border-bottom-left-radius: 45px !important;
    /* border-left: 30px; */
    border-bottom: solid !important;
    border-bottom-right-radius: 54px !important;">
                                            <div class="block-slideshow__slide-title" style="">Realiza tus pedidos.</div>
                                            <div class="block-slideshow__slide-text"></div>Plataforma donde tiendas de abarrotes, supermercados, restaurantes y mayoristas realizan  pedidos a sus proveedores.
                                            <form method="post" action="" >
                                         <div class="block-slideshow__slide-button" style="    padding: 0px 0px 7px 0px;margin-top: 10px!important;" >
                                            
                                            
                                             <?php
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
                                              <button name="enviar1"  type="submit" class="btn btn-primary btn-lg" > Ver ofertas</button>
                                            <?php
                                            }else{
                                                ?>
                                                <button name="enviar2"  type="submit" class="btn btn-primary btn-lg" > Registrate</button>
                                                <?php
                                            }
                                            ?>
                                            </div>
                                            </form>
                                        
                                        </div>
                                        
                                    </a>
                                    <a class="block-slideshow__slide" href="">
                                        <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop" style="    background-image: url(pla.jpg);
    background-position: center;
    background-position-x: -2000px;
    background-position-y: -844px;" ></div>
                                        <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile" style="    background-image: url(pla.jpg);
    background-position: center;
    background-position-x: -2000px;
    background-position-y: -844px;"></div>
                                        <div class="block-slideshow__slide-content" style="background-color: #ffffff;
    padding: 30px !important;
    color: #000000 !important;
    border-color: darkturquoise !important;
    border-bottom-left-radius: 54px !important;
    /* border-left: 30px; */
    border-bottom: solid !important;
    border-bottom-right-radius: 248px !important;">
                                            <div class="block-slideshow__slide-title">Encuentra lo que necesita<br>tu negocio</div>
                                            <div class="block-slideshow__slide-text">Las mas grandes marcas estan aqui, que esperas<br> adquire los productos que tu negocio necesita.</div>
                                            <div class="block-slideshow__slide-button">
                                                <span class="btn btn-primary btn-lg">Descubre</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="block-slideshow__slide" href="">
                                        <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop" style="background-image: url('144610-OTQW09-589.jpg');background-position: right;"></div>
                                        <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile" style="background-image: url('144610-OTQW09-589.jpg');background-position: right;"></div>
                                        <div class="block-slideshow__slide-content" style="background-color: #ffffff;
    padding: 30px !important;
    color: #000000 !important;
    border-color: darkturquoise !important;
    border-bottom-left-radius: 54px !important;
    /* border-left: 30px; */
    border-bottom: solid !important;
    border-bottom-right-radius: 248px !important;">
                                            <div class="block-slideshow__slide-title">Tus cuentas en un solo lugar<br>revisa tus gastos</div>
                                            <div class="block-slideshow__slide-text"></div>
                                            <div class="block-slideshow__slide-button">
                                                <span class="btn btn-primary btn-lg">Mis compras</span>
                                            </div>
                                        </div>
                                       
                                    </a>
                                 
                                </div>
                              
                            </div>
                        </div>
                    </div>
 <ad style="font-weight:600">*(La pagina actual es una muestra de la interfaz ) </ad>
                </div>
                         
            </div>

            <!-- .block-slideshow / end -->
            <!-- .block-features -->
               <div class="block block-features block-features--layout--classic">
                <div class="container">
                    <div class="block-features__list">
                        <div class="block-features__item">
                            <div class="block-features__icon">
                                <img  src="producto.png" style="width: 65px;" alt="">
                            </div>
                            <div class="block-features__content">
                                <div class="block-features__title">Realiza tus pedidos</div>
                                <div class="block-features__subtitle">El catalogo de tus provedores 24/7.</div>
                            </div>
                        </div>
                        <div class="block-features__divider"></div>
                        <div class="block-features__item">
                            <div class="block-features__icon">
                                <img  src="9834.jpg" style="width: 55px;" alt="">
                            </div>
                            <div class="block-features__content">
                                <div class="block-features__title">Categorias</div>
                                <div class="block-features__subtitle"><a href="?p=categorias">Ver categorias</div>
                            </div>
                        </div>
                        <div class="block-features__divider"></div>
                        <div class="block-features__item">
                            <div class="block-features__icon">
                                <img  src="productos/Papasa BBQ 150gr526.png" style="width: 65px;" alt="">
                            </div>
                            <div class="block-features__content">
                                <div class="block-features__title"style="color: #3d464d" >Alimentos</div>
                                <div class="block-features__subtitle" style="color: #3d464d">Abarrotes,pasabocas,<br> golosinas,etc.. </div>
                            </div>
                        </div>
                        <div class="block-features__divider"></div>
                        <div class="block-features__item">
                            <div class="block-features__icon">
                               <img  src="categorias/soap.png" style="width: 60px;" alt="">
                                                           </div>
                            <div class="block-features__content">
                                <div class="block-features__title" style="color: #3d464d">Productos del hogar</div>
                                <div class="block-features__subtitle"><a href="?p=ofertas" style="color:#3d464d;
">Aseo personal y limpieza para el hogar</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .block-features / end -->
            <!-- .block-products-carousel -->
            <div class="block block-products-carousel" data-layout="grid-5">
                <div class="container">
                    <div class="block-header">
                        <h3 class="block-header__title"><img src="seguro-de-calidad.png" style="    width: 38px;">&nbsp;Productos destacados</h3>
                        <div class="block-header__divider" ></div>
                        <ul class="block-header__groups-list">
                            <li><button type="button" class="block-header__group  block-header__group--active ">Todos</button></li>
                           
                        </ul>
                        <div class="block-header__arrows-list">
                            <button class="block-header__arrow block-header__arrow--left" type="button">
                                <svg width="7px" height="11px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-left-7x11"></use>
                                </svg>
                            </button>
                            <button class="block-header__arrow block-header__arrow--right" type="button">
                                <svg width="7px" height="11px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-right-7x11"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="block-products-carousel__slider">
                        <div class="block-products-carousel__preloader"></div>
                        <div class="owl-carousel">







                            





                                 <?php
if(isset($busq) && isset($cat)){
 
    $q = $mysqli->query("SELECT * FROM productos WHERE name like '%$busq%' AND id_categoria = '$cat'");
}elseif(isset($cat) && !isset($busq)){

    $q = $mysqli->query("SELECT * FROM productos WHERE id_categoria = '$cat' ORDER BY id DESC");

}elseif(isset($busq) && !isset($cat)){
  redir("?p=search&busq=$busq");

  
}elseif(!isset($busq) && !isset($cat)){
    $q = $mysqli->query("SELECT * FROM productos ORDER BY RAND (id)  ");
   
}else{
    $q = $mysqli->query("SELECT * FROM productos ORDER BY id DESC");
 
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

                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card product-card--hidden-actions ">
                                        
                                        <div class="product-card__image product-image">
                                            <a href="?p=produc&id=<?=$r['id'];?>" class="product-image__body">
                                                <img class="product-image__img" src="productos/<?=$r['imagen']?>" alt="">
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
<div class="product-card__rating-legend"><a href="?p=vendedor&id=<?=$ro['id'];?>">Distribuidor: <?=$ro['name']?></a></div>


<style>
 .product-card__rating-legend {
    font-size: 13px;
    line-height: 1;
    color: #989898!important;
    padding-top: 1px;
    white-space: nowrap;
}
</style>


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
            <?=$divisa?>
            <?=number_format($r['price'])?>
            
           
            <?php
            }
            ?>
                                            </div>
                                            <div class="product-card__buttons">
                                                    <?php
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
                                          
                                                 <button type="button" class="btn btn-primary product-card__addtocart" onclick="agregar_carro('<?=$r['id']?>');">Añadir al carro</button>
                                                
                                       
                                            <?php
                                        }else{
                                        ?>
                                      
                                                <a href="?p=registron"> <button class="btn btn-primary product-card__addtocart">Añadir al carro</button></a>
                                                
                                      
                                        <?php
                                    }
                                            ?>
                                                <?php
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
                                          
                                                 <button type="button" class="btn btn-secondary product-card__addtocart product-card__addtocart--list" onclick="agregar_carro('<?=$r['id']?>');">Añadir al carro</button>
                                                
                                       
                                            <?php
                                        }else{
                                        ?>
                                      
                                                <a href="?p=registron"> <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list">Añadir al carro</button></a>
                                                
                                      
                                        <?php
                                    }
                                            ?>
                                               
                                            </div>
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
                </div>
            </div>
            <!-- .block-products-carousel / end -->
            <!-- .block-banner -->
            
            <!-- .block-banner / end -->
            <!-- .block-products -->
            
            
         <style type="text/css">
         
.block-products-carousel[data-layout="grid-5"] .product-card--hidden-actions:hover .product-card__buttons {
    display: -webkit-box;
    display: -ms-flexbox;
    display: block !important;
    text-align: center !important;
}
         </style>   
            
            
            <?php  

  $q4 = $mysqli->query("SELECT * FROM productos WHERE id = 126");
  $r4 = mysqli_fetch_array($q4);
  $q5 = $mysqli->query("SELECT * FROM productos WHERE id = 122");
  $r5 = mysqli_fetch_array($q5);
  $q6 = $mysqli->query("SELECT * FROM productos WHERE id = 112");
  $r6 = mysqli_fetch_array($q6);
  $q7 = $mysqli->query("SELECT * FROM productos WHERE id = 113");
  $r7 = mysqli_fetch_array($q7);
  $q8 = $mysqli->query("SELECT * FROM productos WHERE id = 114");
  $r8 = mysqli_fetch_array($q8);
  $q9 = $mysqli->query("SELECT * FROM productos WHERE id = 115");
  $r9 = mysqli_fetch_array($q9);
  $q10 = $mysqli->query("SELECT * FROM productos WHERE id = 124");
  $r10 = mysqli_fetch_array($q10);
  
        $preciototal4 = 0;
            if($r4['oferta']>0){
            if(strlen($r4['oferta'])==1){
            $desc4 = "0.0".$r4['oferta'];
            }else{
            $desc4 = "0.".$r4['oferta'];
            }
            $preciototal4 = $r4['price'] -($r4['price'] * $desc4);
            }else{
                $preciototal4 = $r4['price'];
            }
            $id_vendedor4 = $r4['id_vendedor'];



           
            $preciototal5 = 0;
            if($r5['oferta']>0){
            if(strlen($r5['oferta'])==1){
            $desc5 = "0.0".$r5['oferta'];
            }else{
            $desc5 = "0.".$r5['oferta'];
            }
            $preciototal5 = $r5['price'] -($r5['price'] * $desc5);
            }else{
                $preciototal5 = $r5['price'];
            }
            $id_vendedor5 = $r5['id_vendedor'];



            $preciototal6 = 0;
            if($r6['oferta']>0){
            if(strlen($r6['oferta'])==1){
            $desc6 = "0.0".$r6['oferta'];
            }else{
            $desc6 = "0.".$r6['oferta'];
            }
            $preciototal6 = $r6['price'] -($r6['price'] * $desc6);
            }else{
                $preciototal6 = $r6['price'];
            }
            $id_vendedor6 = $r6['id_vendedor'];


   
            $preciototal7 = 0;
            if($r7['oferta']>0){
            if(strlen($r7['oferta'])==1){
            $desc7 = "0.0".$r7['oferta'];
            }else{
            $desc7 = "0.".$r7['oferta'];
            }
            $preciototal7 = $r7['price'] -($r7['price'] * $desc7);
            }else{
                $preciototal7 = $r7['price'];
            }
            $id_vendedor7 = $r7['id_vendedor'];



      
            $preciototal8 = 0;
            if($r8['oferta']>0){
            if(strlen($r8['oferta'])==1){
            $desc8 = "0.0".$r8['oferta'];
            }else{
            $desc8 = "0.".$r8['oferta'];
            }
            $preciototal8 = $r8['price'] -($r8['price'] * $desc8);
            }else{
                $preciototal8 = $r8['price'];
            }
            $id_vendedor8 = $r8['id_vendedor'];



            $preciototal9 = 0;
            if($r9['oferta']>0){
            if(strlen($r9['oferta'])==1){
            $desc9 = "0.0".$r9['oferta'];
            }else{
            $desc9 = "0.".$r9['oferta'];
            }
            $preciototal9 = $r9['price'] -($r9['price'] * $desc9);
            }else{
                $preciototal9 = $r9['price'];
            }
            $id_vendedor9 = $r9['id_vendedor'];


            $preciototal10 = 0;
            if($r10['oferta']>0){
            if(strlen($r10['oferta'])==1){
            $desc10 = "0.0".$r10['oferta'];
            }else{
            $desc10 = "0.".$r10['oferta'];
            }
            $preciototal10 = $r10['price'] -($r10['price'] * $desc10);
            }else{
                $preciototal10 = $r10['price'];
            }
            $id_vendedor10 = $r10['id_vendedor'];

  ?>
              <div class="block block-banner" style="    padding-top: 6px;">
                <div class="container" style="    padding-top: 6px;">
                    <a href="" class="block-banner__body"style="background-image: url('plataforma1212.png');
    background-position: center;    padding-top: 6px;    background-position-y: 220px; height: 246px !important; ">
                        <div class="block-banner__image block-banner__image--desktop" style="background-image: url('onle.png');
    background-position: center;padding-top: 6px;"></div>
                        <div class="block-banner__image block-banner__image--mobile" style="background-image: url('onle.png');
    background-position: center;padding-top: 6px;"></div>
                        <div class="block-banner__title"><img src="logo21.png" style="
    width: 72px;   
"><br class="block-banner__mobile-br"> </div>
                        <div class="block-banner__text"><ad style="     padding: 10px;
   
    border-radius: 20px;">Plataforma para tiendas, minimarkets, supermercados, mayoristas y * clientes particulares</ad></div>
                        <div class="block-banner__button">
                            <span class="btn btn-sm btn-primary">Abastece tu negocio</span>
                        </div>
                    </a>
                </div>
            </div>

            <!-- .block-banner / end -->
            <!-- .block-products -->
            <div class="block block-products block-products--layout--large-last">
                <div class="container">
                    <div class="block-header">
                        <h3 class="block-header__title"><img src="nuevo.png" style="width:50px">&nbsp;Productos nuevos</h3>
                        <div class="block-header__divider"></div>
                    </div>
                    <div class="block-products__body">
                        <div class="block-products__list">
                            <div class="block-products__list-item">
                                <div class="product-card product-card--hidden-actions ">
                                    <div class="product-card__badges-list"> <div class="product-card__badge product-card__badge--new">Nuevo</div> </div>
                                    
                                    <div class="product-card__image product-image">
                                        <a href="href=produc&id=<?=$r4['id'];?>" class="product-image__body">
                                            <img class="product-image__img" src="productos/<?=$r4['imagen']?>" alt="">
                                        </a>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__name">
                                             <a href="?p=produc&id=<?=$r4['id'];?>"><?=$r4['name']?></a>
                                        </div>
                                        <div class="product-card__rating">
                                           <?php
$so = $mysqli->query("SELECT * FROM admins WHERE id = '$id_vendedor4'");
$ro = mysqli_fetch_array($so);
            ?>
                                    
                                     <a style="font-size:13px;" href="?p=vendedor&id=<?=$ro['id'];?>">Distribuidor: <?=$ro['name']?></a>
                                     
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
                                                if($r4['oferta']>0){
            ?>
            <span class="widget-products__new-price" style="color: black"><?=$divisa?><?=number_format($preciototal4)?></span>
            <span class="widget-products__old-price"><?=$divisa?><?=number_format($r4['price'])?></span>
            <?php
            }else{
            ?>
            <?=$divisa?>
            <?=number_format($r4['price'])?>
            
           
            <?php
            }
            ?>
                                        </div>
                                        <div class="product-card__buttons">
                                                <?php
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
                                          
                                                 <button type="button" class="btn btn-primary product-card__addtocart" onclick="agregar_carro('<?=$r4['id']?>');">Añadir al carro</button>
                                                
                                       
                                            <?php
                                        }else{
                                        ?>
                                      
                                                <a href="?p=registron"> <button class="btn btn-primary product-card__addtocart">Añadir al carro</button></a>
                                                
                                      
                                        <?php
                                    }
                                            ?>
                                            <?php
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
                                          
                                                 <button type="button" class="btn btn-secondary product-card__addtocart product-card__addtocart--list" onclick="agregar_carro('<?=$r4['id']?>');">Añadir al carro</button>
                                                
                                       
                                            <?php
                                        }else{
                                        ?>
                                      
                                                <a href="?p=registron"> <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list">Añadir al carro</button></a>
                                                
                                      
                                        <?php
                                    }
                                            ?>
                                           
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <style type="text/css">
                                .block-products__list-item .product-card--hidden-actions:hover .product-card__buttons {
    display: -webkit-box;
    display: -ms-flexbox;
    display: block !important;
    text-align: center!important;
}

                            </style>
                            <div class="block-products__list-item">
                                <div class="product-card product-card--hidden-actions ">
                                    <div class="product-card__badges-list"> <div class="product-card__badge product-card__badge--new">Nuevo</div> </div>
                                    <div class="product-card__image product-image">
                                        <a href="?p=produc&id=<?=$r5['id'];?>" class="product-image__body">
                                            <img class="product-image__img" src="productos/<?=$r5['imagen']?>" alt="">
                                        </a>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__name">
                                             <a href="?p=produc&id=<?=$r5['id'];?>"><?=$r5['name']?></a>
                                        </div>
                                        <div class="product-card__rating">
                                            <?php
$so = $mysqli->query("SELECT * FROM admins WHERE id = '$id_vendedor5'");
$ro = mysqli_fetch_array($so);
            ?>
                                    
                                     <a style="font-size:13px;" href="?p=vendedor&id=<?=$ro['id'];?>">Distribuidor: <?=$ro['name']?></a>
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
                                                if($r5['oferta']>0){
            ?>
            <span class="widget-products__new-price" style="color: black"><?=$divisa?><?=number_format($preciototal5)?></span>
            <span class="widget-products__old-price"><?=$divisa?><?=number_format($r5['price'])?></span>
            <?php
            }else{
            ?>
            <?=$divisa?>
            <?=number_format($r5['price'])?>
            
           
            <?php
            }
            ?>
                                        </div>
                                        <div class="product-card__buttons">
                                                <?php
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
                                          
                                                 <button type="button" class="btn btn-primary product-card__addtocart" onclick="agregar_carro('<?=$r5['id']?>');">Añadir al carro</button>
                                                
                                       
                                            <?php
                                        }else{
                                        ?>
                                      
                                                <a href="?p=registron"> <button class="btn btn-primary product-card__addtocart">Añadir al carro</button></a>
                                                
                                      
                                        <?php
                                    }
                                            ?>
                                            <?php
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
                                          
                                                 <button type="button" class="btn btn-secondary product-card__addtocart product-card__addtocart--list" onclick="agregar_carro('<?=$r5['id']?>');">Añadir al carro</button>
                                                
                                       
                                            <?php
                                        }else{
                                        ?>
                                      
                                                <a href="?p=registron"> <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list">Añadir al carro</button></a>
                                                
                                      
                                        <?php
                                    }
                                            ?>
                                           
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products__list-item">
                                <div class="product-card product-card--hidden-actions ">
                                    <div class="product-card__badges-list"> <div class="product-card__badge product-card__badge--new">Nuevo</div> </div>
                                    
                                    <div class="product-card__image product-image">
                                        <a href="?p=produc&id=<?=$r6['id'];?>"class="product-image__body">
                                            <img class="product-image__img" src="productos/<?=$r6['imagen']?>" alt="">
                                        </a>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__name">
                                             <a href="?p=produc&id=<?=$r6['id'];?>"><?=$r6['name']?></a>
                                        </div>
                                        <div class="product-card__rating">
                                            <?php
$so = $mysqli->query("SELECT * FROM admins WHERE id = '$id_vendedor6'");
$ro = mysqli_fetch_array($so);
            ?>
                                    
                                     <a style="font-size:13px;" href="?p=vendedor&id=<?=$ro['id'];?>">Distribuidor: <?=$ro['name']?></a>
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
                                                if($r6['oferta']>0){
            ?>
            <span class="widget-products__new-price" style="color: black"><?=$divisa?><?=number_format($preciototal6)?></span>
            <span class="widget-products__old-price"><?=$divisa?><?=number_format($r6['price'])?></span>
            <?php
            }else{
            ?>
            <?=$divisa?>
            <?=number_format($r6['price'])?>
            
           
            <?php
            }
            ?>
                                        </div>
                                        <div class="product-card__buttons">
                                                <?php
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
                                          
                                                 <button type="button" class="btn btn-primary product-card__addtocart" onclick="agregar_carro('<?=$r6['id']?>');">Añadir al carro</button>
                                                
                                       
                                            <?php
                                        }else{
                                        ?>
                                      
                                                <a href="?p=registron"> <button class="btn btn-primary product-card__addtocart">Añadir al carro</button></a>
                                                
                                      
                                        <?php
                                    }
                                            ?>
                                            <?php
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
                                          
                                                 <button type="button" class="btn btn-secondary product-card__addtocart product-card__addtocart--list" onclick="agregar_carro('<?=$r6['id']?>');">Añadir al carro</button>
                                                
                                       
                                            <?php
                                        }else{
                                        ?>
                                      
                                                <a href="?p=registron"> <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list">Añadir al carro</button></a>
                                                
                                      
                                        <?php
                                    }
                                            ?>
                                           
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products__list-item">
                                <div class="product-card product-card--hidden-actions ">
                                    <div class="product-card__badges-list"> <div class="product-card__badge product-card__badge--new">Nuevo</div> </div>
                                    <div class="product-card__image product-image">
                                        <a href="?p=produc&id=<?=$r7['id'];?>" class="product-image__body">
                                            <img class="product-image__img" src="productos/<?=$r7['imagen']?>" alt="">
                                        </a>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__name">
                                            <a href="?p=produc&id=<?=$r7['id'];?>"><?=$r7['name']?></a>
                                        </div>
                                        <div class="product-card__rating">
                                            <?php
$so = $mysqli->query("SELECT * FROM admins WHERE id = '$id_vendedor7'");
$ro = mysqli_fetch_array($so);
            ?>
                                    
                                     <a style="font-size:13px;" href="?p=vendedor&id=<?=$ro['id'];?>">Distribuidor: <?=$ro['name']?></a>
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
                                                if($r7['oferta']>0){
            ?>
            <span class="widget-products__new-price" style="color: black"><?=$divisa?><?=number_format($preciototal7)?></span>
            <span class="widget-products__old-price"><?=$divisa?><?=number_format($r7['price'])?></span>
            <?php
            }else{
            ?>
            <?=$divisa?>
            <?=number_format($r7['price'])?>
            
           
            <?php
            }
            ?>
                                        </div>
                                        <div class="product-card__buttons">
                                                <?php
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
                                          
                                                 <button type="button" class="btn btn-primary product-card__addtocart" onclick="agregar_carro('<?=$r7['id']?>');">Añadir al carro</button>
                                                
                                       
                                            <?php
                                        }else{
                                        ?>
                                      
                                                <a href="?p=registron"> <button class="btn btn-primary product-card__addtocart">Añadir al carro</button></a>
                                                
                                      
                                        <?php
                                    }
                                            ?>
                                            <?php
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
                                          
                                                 <button type="button" class="btn btn-secondary product-card__addtocart product-card__addtocart--list" onclick="agregar_carro('<?=$r7['id']?>');">Añadir al carro</button>
                                                
                                       
                                            <?php
                                        }else{
                                        ?>
                                      
                                                <a href="?p=registron"> <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list">Añadir al carro</button></a>
                                                
                                      
                                        <?php
                                    }
                                            ?>
                                           
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products__list-item">
                                <div class="product-card product-card--hidden-actions ">
                                    <div class="product-card__badges-list"> <div class="product-card__badge product-card__badge--new">Nuevo</div> </div>
                                    <div class="product-card__image product-image">
                                        <a href="?p=produc&id=<?=$r8['id'];?>" class="product-image__body">
                                            <img class="product-image__img" src="productos/<?=$r8['imagen']?>" alt="">
                                        </a>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__name">
                                            <a href="?p=produc&id=<?=$r8['id'];?>"><?=$r8['name']?></a>
                                        </div>
                                        <div class="product-card__rating">
                                           <?php
$so = $mysqli->query("SELECT * FROM admins WHERE id = '$id_vendedor8'");
$ro = mysqli_fetch_array($so);
            ?>
                                    
                                     <a style="font-size:13px;" href="?p=vendedor&id=<?=$ro['id'];?>">Distribuidor: <?=$ro['name']?></a>
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
                                                if($r8['oferta']>0){
            ?>
            <span class="widget-products__new-price" style="color: black"><?=$divisa?><?=number_format($preciototal8)?></span>
            <span class="widget-products__old-price"><?=$divisa?><?=number_format($r8['price'])?></span>
            <?php
            }else{
            ?>
            <?=$divisa?>
            <?=number_format($r8['price'])?>
            
           
            <?php
            }
            ?>
                                        </div>
                                        <div class="product-card__buttons">
                                                <?php
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
                                          
                                                 <button type="button" class="btn btn-primary product-card__addtocart" onclick="agregar_carro('<?=$r8['id']?>');">Añadir al carro</button>
                                                
                                       
                                            <?php
                                        }else{
                                        ?>
                                      
                                                <a href="?p=registron"> <button class="btn btn-primary product-card__addtocart">Añadir al carro</button></a>
                                                
                                      
                                        <?php
                                    }
                                            ?>
                                            <?php
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
                                          
                                                 <button type="button" class="btn btn-secondary product-card__addtocart product-card__addtocart--list" onclick="agregar_carro('<?=$r8['id']?>');">Añadir al carro</button>
                                                
                                       
                                            <?php
                                        }else{
                                        ?>
                                      
                                                <a href="?p=registron"> <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list">Añadir al carro</button></a>
                                                
                                      
                                        <?php
                                    }
                                            ?>
                                           
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products__list-item">
                                <div class="product-card product-card--hidden-actions ">
                                    <div class="product-card__badges-list"> <div class="product-card__badge product-card__badge--new">Nuevo</div> </div>
                                     <div class="product-card__image product-image">
                                        <a href="?p=produc&id=<?=$r9['id'];?>" class="product-image__body">
                                            <img class="product-image__img" src="productos/<?=$r9['imagen']?>" alt="">
                                        </a>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__name">
                                             <a href="?p=produc&id=<?=$r9['id'];?>"><?=$r9['name']?></a>
                                        </div>
                                        <div class="product-card__rating">
                                            <?php
$so = $mysqli->query("SELECT * FROM admins WHERE id = '$id_vendedor9'");
$ro = mysqli_fetch_array($so);
            ?>
                                    
                                     <a style="font-size:13px;" href="?p=vendedor&id=<?=$ro['id'];?>">Distribuidor: <?=$ro['name']?></a>
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
                                                if($r9['oferta']>0){
            ?>
            <span class="widget-products__new-price" style="color: black"><?=$divisa?><?=number_format($preciototal9)?></span>
            <span class="widget-products__old-price"><?=$divisa?><?=number_format($r9['price'])?></span>
            <?php
            }else{
            ?>
            <?=$divisa?>
            <?=number_format($r9['price'])?>
            
           
            <?php
            }
            ?>
                                        </div>
                                        <div class="product-card__buttons">
                                                <?php
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
                                          
                                                 <button type="button" class="btn btn-primary product-card__addtocart" onclick="agregar_carro('<?=$r9['id']?>');">Añadir al carro</button>
                                                
                                       
                                            <?php
                                        }else{
                                        ?>
                                      
                                                <a href="?p=registron"> <button class="btn btn-primary product-card__addtocart">Añadir al carro</button></a>
                                                
                                      
                                        <?php
                                    }
                                            ?>
                                            <?php
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
                                          
                                                 <button type="button" class="btn btn-secondary product-card__addtocart product-card__addtocart--list" onclick="agregar_carro('<?=$r9['id']?>');">Añadir al carro</button>
                                                
                                       
                                            <?php
                                        }else{
                                        ?>
                                      
                                                <a href="?p=registron"> <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list">Añadir al carro</button></a>
                                                
                                      
                                        <?php
                                    }
                                            ?>
                                           
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products__featured">
                            <div class="block-products__featured-item">
                                <div class="product-card product-card--hidden-actions ">
                                    
                                    <div class="product-card__badges-list">
                                        <div class="product-card__badge product-card__badge--new">Nuevo</div>
                                    </div>
                                    <div class="product-card__image product-image">
                                        <a href="?p=produc&id=<?=$r10['id'];?>" class="product-image__body">
                                            <img class="product-image__img" src="productos/<?=$r10['imagen']?>"  alt="">
                                        </a>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__name">
                                           <a href="?p=produc&id=<?=$r10['id'];?>"><?=$r10['name']?></a>
                                        </div>
                                        <div class="product-card__rating">
                                           <?php
$so = $mysqli->query("SELECT * FROM admins WHERE id = '$id_vendedor10'");
$ro = mysqli_fetch_array($so);
            ?>
                                    
                                     <a style="font-size:13px;" href="?p=vendedor&id=<?=$ro['id'];?>">Distribuidor: <?=$ro['name']?></a>
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
                                                if($r10['oferta']>0){
            ?>
            <span class="widget-products__new-price" style="color: black"><?=$divisa?><?=number_format($preciototal10)?></span>
            <span class="widget-products__old-price"><?=$divisa?><?=number_format($r10['price'])?></span>
            <?php
            }else{
            ?>
            <?=$divisa?>
            <?=number_format($r10['price'])?>
            
           
            <?php
            }
            ?>
                                        </div>
                                        <div class="product-card__buttons">

                                                <?php
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
                                          
                                                 <button  class="btn btn-primary product-card__addtocart"  onclick="agregar_carro('<?=$r10['id']?>');">Añadir al carro</button>
                                                
                                       
                                            <?php
                                        }else{
                                        ?>
                                      
                                                <a href="?p=registron"> <button class="btn btn-primary product-card__addtocart">Añadir al carro</button></a>
                                                
                                      
                                        <?php
                                    }
                                            ?>
                                            <?php
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
                                          
                                                 <button  class="btn btn-secondary product-card__addtocart product-card__addtocart--list" onclick="agregar_carro('<?=$r10['id']?>');">Añadir al carro</button>
                                                
                                       
                                            <?php
                                        }else{
                                        ?>
                                      
                                                <a href="?p=registron"> <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list">Añadir al carro</button></a>
                                                
                                      
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
            <!-- .block-categories / end -->
            <!-- .block-products-carousel -->
            <div class="block block-products-carousel" data-layout="grid-5">
                <div class="container">
                    <div class="block-header">
                        <h3 class="block-header__title"><img src="categorias/rebaja.png" style="width:40px">&nbsp;Productos en Oferta</h3>
                        <div class="block-header__divider"></div>
                        <ul class="block-header__groups-list">
                            <li><button type="button" class="block-header__group  block-header__group--active ">Todos</button></li>
                        
                           
                        </ul>
                        <div class="block-header__arrows-list">
                            <button class="block-header__arrow block-header__arrow--left" type="button">
                                <svg width="7px" height="11px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-left-7x11"></use>
                                </svg>
                            </button>
                            <button class="block-header__arrow block-header__arrow--right" type="button">
                                <svg width="7px" height="11px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-right-7x11"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="block-products-carousel__slider">
                        <div class="block-products-carousel__preloader"></div>
                        <div class="owl-carousel">


<?php
$q = $mysqli->query("SELECT * FROM productos WHERE oferta>0  ORDER BY id ASC");
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
             



                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card product-card--hidden-actions ">
                                        
                                       <div class="product-card__badges-list">
                                            <div class="product-card__badge product-card__badge--sale">Oferta</div>
                                        </div>
                                        <div class="product-card__image product-image">
                                            <a href="?p=produc&id=<?=$r['id'];?>" class="product-image__body">
                                               <img class="product-image__img" src="productos/<?=$r['imagen']?>" alt="">
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
                                    
                                     <a style="font-size:13px;" href="?p=vendedor&id=<?=$ro['id'];?>">Distribuidor: <?=$ro['name']?></a>
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
            <?=$divisa?>
            <?=number_format($r['price'])?>
            
           
            <?php
            }
            ?>
                                            </div>
                                            <div class="product-card__buttons">
                                                    <?php
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
                                          
                                                 <button  class="btn btn-primary product-card__addtocart" onclick="agregar_carro('<?=$r['id']?>');">Añadir al carro</button>
                                                
                                       
                                            <?php
                                        }else{
                                        ?>
                                      
                                                <a href="?p=registron"> <button class="btn btn-primary product-card__addtocart">Añadir al carro</button></a>
                                                
                                      
                                        <?php
                                    }
                                            ?>
                                                <?php
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
                                          
                                                 <button  class="btn btn-secondary product-card__addtocart product-card__addtocart--list" onclick="agregar_carro('<?=$r['id']?>');">Añadir al carro</button>
                                                
                                       
                                            <?php
                                        }else{
                                        ?>
                                      
                                                <a href="?p=registron"> <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list">Añadir al carro</button></a>
                                                
                                      
                                        <?php
                                    }
                                            ?>
                                               
                                            </div>
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
            </div>
            <!-- .block-products-carousel / end -->
            <!-- .block-posts -->

            <!-- .block-posts / end -->
            <!-- .block-brands -->
           
            <!-- .block-brands / end -->
            <!-- .block-product-columns -->
            <div class="block block-product-columns d-lg-block d-none">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <div class="block-header">
                                <h3 class="block-header__title">Productos nuevos</h3>
                                <div class="block-header__divider"></div>
                            </div>

<?php
$qg = $mysqli->query("SELECT * FROM productos ORDER BY rand(id)"); 
$cont=0;
while($rg=mysqli_fetch_array($qg)){
    $cont++;
$preciototalg = 0;
            if($rg['oferta']>0){
                if(strlen($rg['oferta'])==1){
                    $descg = "0.0".$rg['oferta'];
                }else{
                    $descg = "0.".$rg['oferta'];
                }
                $preciototalg = $rg['price'] -($rg['price'] * $descg);
            }else{
                $preciototalg = $rg['price'];
            }
            $id_vendedor = $rg['id_vendedor'];
if($cont<4){
   
   
?>
                            <div class="block-product-columns__column">
                                <div class="block-product-columns__item">
                                    <div class="product-card product-card--hidden-actions product-card--layout--horizontal">
                                        
                                        <div class="product-card__badges-list">
                                            <div class="product-card__badge product-card__badge--new">Nuevo</div>
                                        </div>
                                        <div class="product-card__image product-image">
                                            <a href="?p=produc&id=<?=$rg['id'];?>" class="product-image__body">
                                                <img class="product-image__img" src="productos/<?=$rg['imagen']?>" alt="">
                                            </a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name">
                                                <a href="?p=produc&id=<?=$rg['id'];?>"><?=$rg['name']?></a>
                                            </div>
                                            <div class="product-card__rating">
                                              <?php
$so = $mysqli->query("SELECT * FROM admins WHERE id = '$id_vendedor'");
$ro = mysqli_fetch_array($so);
            ?>
                                    
                                     <a style="font-size:13px;" href="?p=vendedor&id=<?=$ro['id'];?>">Distribuidor: <?=$ro['name']?></a>
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
                                                if($rg['oferta']>0){
            ?>
<span class="widget-products__new-price" style="color: black"><?=$divisa?><?=number_format($preciototalg)?></span>
            <span class="widget-products__old-price"><?=$divisa?><?=number_format($rg['price'])?></span>
            <?php
            }else{
            ?>
            <?=$divisa?>
            <?=number_format($rg['price'])?>
            
           
            <?php
            }
            ?>
                                            </div>
                                            <div class="product-card__buttons">
                                                    <?php
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
                                          
                                                 <button  class="btn btn-primary product-card__addtocart" onclick="agregar_carro('<?=$r['id']?>');">Añadir al carro</button>
                                                
                                       
                                            <?php
                                        }else{
                                        ?>
                                      
                                                <a href="?p=registron"> <button class="btn btn-primary product-card__addtocart">Añadir al carro</button></a>
                                                
                                      
                                        <?php
                                    }
                                            ?>
                                                <?php
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
                                          
                                                 <button  class="btn btn-secondary product-card__addtocart product-card__addtocart--list" onclick="agregar_carro('<?=$r['id']?>');">Añadir al carro</button>
                                                
                                       
                                            <?php
                                        }else{
                                        ?>
                                      
                                                <a href="?p=registron"> <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list">Añadir al carro</button></a>
                                                
                                      
                                        <?php
                                    }
                                            ?>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 </div>
              <?php
           
}
}
          ?>
                   


                           
                        </div>
                                               <div class="col-4">
                            <div class="block-header">
                                <h3 class="block-header__title">Ofertas especiales</h3>
                                <div class="block-header__divider"></div>
                            </div>
<?php
$qz = $mysqli->query("SELECT * FROM productos WHERE oferta>0  ORDER BY id ASC"); 
$contz=0;
while($rz=mysqli_fetch_array($qz)){
    $contz++;
$preciototalz = 0;
            if($rz['oferta']>0){
                if(strlen($rz['oferta'])==1){
                    $descz = "0.0".$rz['oferta'];
                }else{
                    $descz = "0.".$rz['oferta'];
                }
                $preciototalz = $rz['price'] -($rz['price'] * $descz);
            }else{
                $preciototalz = $rz['price'];
            }
            $id_vendedor = $rz['id_vendedor'];
if($contz<4){
   
   
?>
                            <div class="block-product-columns__column">
                                <div class="block-product-columns__item">
                                    <div class="product-card product-card--hidden-actions product-card--layout--horizontal">
                                        
                                        <div class="product-card__badges-list">
                                            <div class="product-card__badge product-card__badge--sale">Sale</div>
                                        </div>
                                        <div class="product-card__image product-image">
                                            <a href="?p=produc&id=<?=$rz['id'];?>" class="product-image__body">
                                                <img class="product-image__img" src="productos/<?=$rz['imagen']?>" alt="">
                                            </a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name">
                                                 <a href="?p=produc&id=<?=$rz['id'];?>"><?=$rz['name']?></a>
                                            </div>
                                            <div class="product-card__rating">
                                                <?php
$so = $mysqli->query("SELECT * FROM admins WHERE id = '$id_vendedor'");
$ro = mysqli_fetch_array($so);
            ?>
                                    
                                     <a style="font-size:13px;" href="?p=vendedor&id=<?=$ro['id'];?>">Distribuidor: <?=$ro['name']?></a>
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
                                                if($rz['oferta']>0){
            ?>
<span class="widget-products__new-price" style="color: black"><?=$divisa?><?=number_format($preciototalz)?></span>
            <span class="widget-products__old-price"><?=$divisa?><?=number_format($rz['price'])?></span>
            <?php
            }else{
            ?>
            <?=$divisa?>
            <?=number_format($rz['price'])?>
            
           
            <?php
            }
            ?>
                                            </div>
                                            <div class="product-card__buttons">
                                                    <?php
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
                                          
                                                 <button  class="btn btn-primary product-card__addtocart" onclick="agregar_carro('<?=$r['id']?>');">Añadir al carro</button>
                                                
                                       
                                            <?php
                                        }else{
                                        ?>
                                      
                                                <a href="?p=registron"> <button class="btn btn-primary product-card__addtocart">Añadir al carro</button></a>
                                                
                                      
                                        <?php
                                    }
                                            ?>
                                                <?php
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
                                          
                                                 <button  class="btn btn-secondary product-card__addtocart product-card__addtocart--list" onclick="agregar_carro('<?=$r['id']?>');">Añadir al carro</button>
                                                
                                       
                                            <?php
                                        }else{
                                        ?>
                                      
                                                <a href="?p=registron"> <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list">Añadir al carro</button></a>
                                                
                                      
                                        <?php
                                    }
                                            ?>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }}
                        ?>

                        </div>




                        <div class="col-4">
                            <div class="block-header">
                                <h3 class="block-header__title">Productos destacados</h3>
                                <div class="block-header__divider"></div>
                            </div>
                            <?php
$qq = $mysqli->query("SELECT * FROM productos ORDER BY id ASC"); 
$contq=0;
while($rq=mysqli_fetch_array($qq)){
    $contq++;
$preciototalg = 0;
            if($rq['oferta']>0){
                if(strlen($rg['oferta'])==1){
                    $descq = "0.0".$rq['oferta'];
                }else{
                    $descq = "0.".$rq['oferta'];
                }
                $preciototalq = $rq['price'] -($rq['price'] * $descq);
            }else{
                $preciototalg = $rq['price'];
            }
            $id_vendedor = $rq['id_vendedor'];
if($contq<4){
   
   
?>
                                <div class="block-product-columns__item">
                                    <div class="product-card product-card--hidden-actions product-card--layout--horizontal">
                                        
                                        <div class="product-card__image product-image">
                                            <a href="?p=produc&id=<?=$rq['id'];?>" class="product-image__body">
                                                <img class="product-image__img" src="productos/<?=$rq['imagen']?>" alt="">
                                            </a>
                                        </div>
                                        <div class="product-card__info">
                                            <div class="product-card__name">
                                                <a href="?p=produc&id=<?=$rq['id'];?>"><?=$rq['name']?></a>
                                            </div>
<?php
$so = $mysqli->query("SELECT * FROM admins WHERE id = '$id_vendedor'");
$ro = mysqli_fetch_array($so);
            ?>
                                            <div class="product-card__rating">
                                              <a style="font-size:13px;" href="?p=vendedor&id=<?=$ro['id'];?>">Distribuidor: <?=$ro['name']?></a>
                                               
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
if($rq['oferta']>0){
            ?>
<span class="widget-products__new-price" style="color: black"><?=$divisa?><?=number_format($preciototalq)?></span>
            <span class="widget-products__old-price"><?=$divisa?><?=number_format($rq['price'])?></span>
            <?php
            }else{
            ?>
            <?=$divisa?>
            <?=number_format($rq['price'])?>
            
           
            <?php
            }
            ?>
                                            </div>
                                            <div class="product-card__buttons">
                                                    <?php
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
                                          
                                                 <button  class="btn btn-primary product-card__addtocart" onclick="agregar_carro('<?=$r['id']?>');">Añadir al carro</button>
                                                
                                       
                                            <?php
                                        }else{
                                        ?>
                                      
                                                <a href="?p=registron"> <button class="btn btn-primary product-card__addtocart">Añadir al carro</button></a>
                                                
                                      
                                        <?php
                                    }
                                            ?>
                                                <?php
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
                                          
                                                 <button  class="btn btn-secondary product-card__addtocart product-card__addtocart--list" onclick="agregar_carro('<?=$r['id']?>');">Añadir al carro</button>
                                                
                                       
                                            <?php
                                        }else{
                                        ?>
                                      
                                                <a href="?p=registron"> <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list">Añadir al carro</button></a>
                                                
                                      
                                        <?php
                                    }
                                            ?>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }}
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .block-product-columns / end -->
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
                                        <li class="footer-links__item"><a href="?p=terminos" class="footer-links__link">Terminos de Uso</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Informacion de entrega</a></li>
                                        <li class="footer-links__item"><a href="?p=politicadeprivacidad" class="footer-links__link">Politica de privacidad</a></li>
 
                                      
                                       
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
                              <img src="logo21.png" style="    margin: 7px 15px 16px 15%;
    width: 113px !important;
    height: 100px !important;" > 
  
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
    color: #e2dada!important;
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
   <?php
                                            }else{
                                                 redir("info/inicio12.php");
                                            }
                                            
                                            ?>