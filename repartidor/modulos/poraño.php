<br>

 
<!DOCTYPE html>
<html lang="es">
<head>
  <!--http://www.lawebdelprogramador.com-->
 
<?php

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
<!-- Nav Bar --><?php
$q = $mysqli->query("SELECT * FROM productos WHERE id =  '$id' ");
                $r=mysqli_fetch_array($q);
                $cat = $mysqli->query("SELECT * FROM categorias WHERE id = '".$r['id_categoria']."'");
                $rn=mysqli_fetch_array($cat);


                  ?>
                  <?php
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
<br>

Categoria: <?=$rn['categoria']?>

<style>
     
  
       
.cuerpo {
    background: #fff;
    padding: 0px;
    min-height: 0px;
    max-height: 0px;
}
.row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: 0px;
    margin-left: 0px;
    text-align: center;
}


img {
    vertical-align: middle;
    border-style: none;
    max-width: 383px;
    max-height: 400px;
}
#product {
    padding: 54px 0;
}
</style>

  <div class="container">
 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
            aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#highlight">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#testimonials">Our Story</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#purchase-options">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link buy-now" href="https://www.shopshereadstruth.com/cart/add?id=34423961680">Buy Now</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <!-- Mobile Menu -->
    
      <a class="navbar-brand" href="index.html">
        <img src="img/logo-srt2.png" class="img-fluid" alt="">
        <!-- She Reads Truth -->
      </a>
   

      <label for="burger">
        <span></span>
        <span></span>
        <span></span>
      </label>

      
       
      </nav>
    </div>


<!-- Product Section -->

<section id="product" class="product">
  <div class="container">
    <div class="row flex-container">
      <div class="col-lg-6 col-md-12">
        <div class="product-image">
          <img class="product-image" src="productos/<?=$r['imagen']?>" style="
    max-width: 100%;
    height: auto;
">
          

        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="product-description">
          <h2 class="product-title" style="
    margin: 30px 0 66px;
"><?=$r['name']?></h2>
          
          <h6 class="product-price"> 
          </h6></div>


    <?php
        if($r['oferta']>0){
            ?><center>
           <del><?=number_format($r['price'])?><?=$divisa?></del> <span class="precio"><?=number_format($preciototal)?><?=$divisa?></span></center>
  <?php
            $so = $mysqli->query("SELECT * FROM admins WHERE id = '$id_vendedor'");
$ro = mysqli_fetch_array($so);
            ?><br>
             <center>Vendedor:&nbsp<?=$ro['name']?><br><br><button class="btn btn-warning pull-right" onclick="agregar_carro('<?=$r['id']?>');"><i class="fa fa-shopping-cart"></i>&nbsp&nbspAgregar al carro</button></center>
    </h6>

<br>

            <?php
            }else{
            ?>
            <center> 
            <span class="precio"><?=number_format($r['price'])?>
            <?=$divisa?></span>
            </center></font>
       <?php
 
            
             
          }
           
     ?>
      <?php
      error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_WARNING & ~E_NOTICE);
            if($ro['tipo']==1){ 
            $xq=clear($xq);
            $xy=clear($xy);
            $id_cliente = clear($_SESSION['id_cliente']);
            $dia = date("d");
            $qj = $mysqli->query("SELECT * FROM clientev WHERE id_vendedor = '$id_vendedor' AND id_cliente = '$id_cliente'");
            if(mysqli_num_rows($qj)>0){
            $sr = $mysqli->query("SELECT * FROM clientev WHERE id_vendedor = '$id_vendedor' AND id_cliente = '$id_cliente'");
            $rr=mysqli_fetch_array($sr);
            $sx = $mysqli->query("SELECT * FROM dia WHERE id_vendedor = '$id_vendedor'AND dia = '$dia' AND ruta = '".$rr['ruta']."' ");
            $rx = mysqli_fetch_array($sx);
            //Creo que la de abajo esta de mas
           while($rx=mysqli_fetch_array($sx)){
            $xq = min($rx['dia']);
            $xy = max($rx['dia']);
}
$mysqli->query("INSERT INTO compven (compra,fecha,id_vendedor,monto,semana,ruta) VALUES ($ultima_compra,NOW(),'".$r3['id_vendedor']."','$monto_total','$semana','$enviarru')");


$mysqli->query("INSERT INTO clientenuevo (id_vendedor,id_cliente) VALUES ($id_vendedor,$id_cliente");
$mysqli->query("INSERT INTO compven (compra,fecha,id_vendedor,monto,semana,ruta) VALUES ($ultima_compra,NOW(),'".$r3['id_vendedor']."','$monto_total','$semana',0)"); 
$mysqli->query("INSERT INTO clientenuevo (id_vendedor,id_cliente) VALUES ($id_vendedor,$id_cliente");
$mysqli->query("INSERT INTO compven (compra,fecha,id_vendedor,monto,semana,ruta) VALUES ($ultima_compra,NOW(),'".$r3['id_vendedor']."','$monto_total','$semana',0)");
  ?>
     <?php
           
                if($xq >= $dia){
       $xr=$xy;
                    ?>
         <a>Si pides productos de este vendedor hoy, llegaran el dia <?=$xr?>.</a><br>


       <?php
                }
            ?>
               <?php
                
                 if($xy <= $dia){
       $xr=$xq;
                    ?>
      <a>Si pides productos de este vendedor hoy, llegaran el dia <?=$xr?>.</a><br>

       <?php
                }
            ?>
       


       <?php
                }else{
                  ?>
                   <a><i class="fas fa-exclamation"></i>&nbsp;&nbsp;Esta empresa tiene entregas por mecanismo de rutas,esta es tu primera compra en esta empresa desde Open, lugo de realizar la compra la empresa te asignara el dia de rutas a la cual se te ha asignado, si ya habias pedidio anteriormente seguramante el dia de entrega es igual al cual aconstumbrabas antes.</a><br>
                 <?php
                }
            ?>

            
 <?php
                }
            ?>


       <?php
               if($ro['tipo']==2){ 
            $st = $mysqli->query("SELECT * FROM hora WHERE id_vendedor = '$id_vendedor' AND tipo= 1 ");
            $rt = mysqli_fetch_array($st);
            $sa = $mysqli->query("SELECT * FROM hora WHERE id_vendedor = '$id_vendedor' AND tipo= 2  ");
            $ra = mysqli_fetch_array($sa);
  ?>
        <a>Horario de distribucion: <?=$rt['hora']?> a <?=$ra['hora']?></a><br>
      <a>Tiempo aproximado en entrega de su pedido </a>

<br>
       <?php
                }
            ?>
     
   
<table class="table table-striped">

  <tr>
    <th><center>Peso/volumen</center></th>
    <th><center>Cantidad de unidades por paquete</center></th>
 
  </tr>

      
          <td><center><?=$r['canti']?></center></td>
          <td><center><?=$r['pesv']?></center></td>
          
</table>
          <p class="product-description">These running shoes combine comfort and high-performance technology for a best-ever-run feeling. </p>
      
        </div>
        <br>

<!--       Dropdowns -->
 
          </div><h1 style="
    font-size: 1.5em;
    margin: .67em 0;
"><br>Mas productos del vendedor:</h1><br>
         
   
<head>
  <meta charset="UTF-8">
  <title>CodePen - Swiper - Uno a Cuatro Column Slider</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- slider main container -->
<div class="swiper-container">

    <!-- additional required wrapper -->
    <div class="swiper-wrapper">

        <!-- slides -->
        <div class="swiper-slide">
          <div class="product">
            <img class="photograph" src="https://unsplash.it/g/430/431?image=502" alt="">
            <h2 class="product__name">Lorem ipsum 1</h2>
            <p class="product__description">lorem ipsum dol</p>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="product">
            <img class="photograph" src="https://unsplash.it/g/430/431?image=401" alt="">
            <h2 class="product__name">Lorem ipsum 2</h2>
            <p class="product__description">lorem ipsum dol</p>
          </div>
       </div>

       <div class="swiper-slide">
         <div class="product">
           <img class="photograph" src="https://unsplash.it/g/430/431?image=201" alt="">
           <h2 class="product__name">Lorem ipsum 3</h2>
           <p class="product__description">lorem ipsum dol</p>
         </div>
      </div>

      <div class="swiper-slide">
        <div class="product">
          <img class="photograph" src="https://unsplash.it/g/430/431?image=504" alt="">
          <h2 class="product__name">Lorem ipsum 4</h2>
          <p class="product__description">lorem ipsum dol</p>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="product">
          <img class="photograph" src="https://unsplash.it/g/430/431?image=404" alt="">
          <h2 class="product__name">Lorem ipsum 5</h2>
          <p class="product__description">lorem ipsum dol</p>
        </div>
      </div>
      
      <div class="swiper-slide">
        <div class="product">
          <img class="photograph" src="https://unsplash.it/g/430/431?image=406" alt="">
          <h2 class="product__name">Lorem ipsum 6</h2>
          <p class="product__description">lorem ipsum dol</p>
        </div>
      </div>
      
      <div class="swiper-slide">
        <div class="product">
          <img class="photograph" src="https://unsplash.it/g/430/431?image=407" alt="">
          <h2 class="product__name">Lorem ipsum 7</h2>
          <p class="product__description">lorem ipsum dol</p>
        </div>
      </div>

    </div>

    <!-- pagination -->
    <div class="swiper-pagination"></div>

    <!-- navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

</div>
</section>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js'></script><script  src="./script.js"></script>

</body>
</html>
<style>



/* ==========================================================================
   Swiper modifications
 ========================================================================== */

.swiper-container {
  margin-top: 2em; /* minor cosmetic */
}
.container {
    width: 100%;
   }
body {
    text-align: center;
    background: #fff;
    font-family: 'Montserrat', sans-serif;
    font-size: 14px;
    color: #000;
    margin: 0;
    padding: 0;
    -webkit-font-smoothing: antialiased;
}

  .swiper-wrapper {
    /* now pagination is below slides */
    margin-bottom: 3em;

    /* just enough width so slides handing off screen are partially visible */
    width: 73.8%;
  }

  @media (min-width: 37.5em) {
    .swiper-wrapper {
      /* now arrows appear */
      /* make room for arrows */
      width: 92%;
    }
  }
  .cuerpo {
    background: #fff;
    padding: 30px;
    min-height: 0px;
}

  @media (min-width: 43.75em) {
    .swiper-wrapper {
      /* make room for arrows */
      width: 95%;
    }
  }


    /* doubleing up specificity to win over on transform */
    .swiper-slide.swiper-slide {
      /* a single column layout */
      width: 100%;
    }


    @media (min-width: 37.5em) {
      .swiper-slide.swiper-slide  {
        /* going for a 2 column layout here */
        width: 50%;

        /* centeredSlides set to true */
        /* reposition so first slide appears on left */
        transform: translateX(-50%);
      }
    }

    @media (min-width: 43.75em) {
      .swiper-slide.swiper-slide  {
        /* upping it to a 3 column layout */
        width: 33.33333333333%;

        /* centeredSlides set to true */
        /* reposition so first slide appears on left */
        transform: translateX(-100%);
      }
    }

    @media (min-width: 53em) {
      .swiper-slide.swiper-slide  {
        /* and finally the 4 column layout */
        width: 25%;

        /* centeredSlides set to true */
        /* reposition so first slide appears on left */
        transform: translateX(-160%);
      }
    }

    .swiper-pagination {
      /* show on small viewports */
      display: block;
    }

    @media (min-width: 37.5em) {
      .swiper-pagination {
        /* hide on larger viewports per stakeholder recommendation */
        display: none;
      }
    }

    /* now move prev button more to the left */
    .swiper-button-prev {

    display: none;
    left: -93px;
    top: -55px;
    margin-top: 0;
    height: calc(100% - 3em);
    background-color: transparent;

    }
    .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col, .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm, .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md, .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg, .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl, .col-xl-auto {
    max-width: 130%;
    height: auto;
    text-align: center;
}

    @media (min-width: 37.5em) {
      .swiper-button-prev {
        /* show on larger viewports */
        display: block;
      }
    }
    .pull-right {
    float: inherit;
}
    .swiper-button-next {
      /* hide on small viewports */

    display: none;
    right: -93px;
    top: -55px;
    margin-top: 0;
    height: calc(100% - 3em);
    background-color: transparent;
}
    

    @media (min-width: 37.5em) {
      .swiper-button-next {
        /* show on larger viewports */
        display: block;
      }
    }

/* ==========================================================================
   content in swiper
 ========================================================================== */

.product {
  /* odds are you will use flexbox */
  // display: flex;

  /* center it */
  margin-left: auto;
  margin-right: auto;

  /* adjust the width to add or remove whitespace  */
  width: 82%;
}

  .photograph {
    /* if parent is flex it will stretch this image */
    // align-self: center;
    display: block;

    height: auto;
    width: 100%;
  }

  .product__name.product__name {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
    font-size: calc(-0.5em + 5vw);
    font-weight: 600;
    text-align: center;
    text-transform: uppercase;
  }

  @media (min-width: 37.5em) {
    .product__name.product__name {
      font-size: .92em;
    }
  }

  .product__description {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
    font-size: calc(.1em + 5vw);
    font-weight: 300;
    line-height: 1.1;
    text-align: center;
  }

  @media (min-width: 37.5em) {
    .product__description {
      font-size: .92em;
    }
  }
</style>
<script type="text/javascript">
  (function () {

  'use strict';

  const mySwiper = new Swiper('.swiper-container', {

    loop: true,

    slidesPerView: 'auto',
    centeredSlides: true,

    a11y: true,
    keyboardControl: true,
    grabCursor: true,

    // pagination
    pagination: '.swiper-pagination',
    paginationClickable: true,

    // navigation arrows
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev' });





})(); /* IIFE end */
</script>
<script type="text/javascript">
    
    function agregar_carro(idp){
        var cant = prompt("¿Que cantidad desea agregar?",1);

        if(cant.length>0){
            window.location="?p=productos&agregar="+idp+"&cant="+cant;
        }
    }

</script>