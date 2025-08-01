<?php
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

    $v = $mysqli->query("SELECT * FROM carro WHERE id_cliente = '$id_cliente' AND id_producto = '$idp'");

        $spro = $mysqli->query("SELECT * FROM productos WHERE id = '$idp'");
        $rpro = mysqli_fetch_array($spro);
        $id_vendedor = $rpro['id_vendedor'];
          
    
    if(mysqli_num_rows($v)>0){
        $q = $mysqli->query("UPDATE carro SET cant = cant + $cant WHERE id_cliente = '$id_cliente' AND id_producto = '$idp' AND devolucion=0");
    }else{
        $q = $mysqli->query("INSERT INTO carro (id_cliente,id_producto,cant) VALUES ($id_cliente,$idp,$cant)");
    }
   alert("Se ha agregado al carro de compras",1,'productos');
    //redir("?p=productos");
}
if(isset($devolucion) && isset($cante)){
     if(mysqli_num_rows($v)>0){
        $q = $mysqli->query("UPDATE carro SET cant = cant + $cant WHERE id_cliente = '$id_cliente' AND id_producto = '$devolucion'");
    }else{
        $q = $mysqli->query("INSERT INTO carro (id_cliente,id_producto,cant) VALUES ($id_cliente,$devolucion,$cant)");
    }
      alert("Finaliza en carrito",1,'productos');
}
     $id_cliente = $_SESSION['id_cliente'];
?>
<style>
    .page-header__container {
    padding-bottom: 0px !important;
}
.product-image__body {
    display: block;
    position: relative;
    padding-bottom: 70%!important;
    width: 100%;
}
.product-gallery__featured .product-image {
    padding: 0px!important;
}
.owl-carousel .owl-item .product-image--location--gallery .product-image__img {
    max-width: 110%;
    max-height: 90%!important;
    width: auto;
    height: auto;
    left: 50%;
    top: 50%;
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
}
</style>
<!-- Nav Bar -->
<?php
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
            
   $so = $mysqli->query("SELECT * FROM admins WHERE id = '$id_vendedor'");
$ro = mysqli_fetch_array($so);
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
                                    <a href="?p=productos">Home</a>
                                    <svg class="breadcrumb-arrow" width="6px" height="9px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                    </svg>
                                </li>
                               
                                <li class="breadcrumb-item ctive" aria-current="page"><?=$r['name']?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div><br>
            <div class="block">
                <div class="container">
                    <div class="product product--layout--columnar" data-layout="columnar">
                        <div class="product__content">
                            <!-- .product__gallery -->
                            <div class="product__gallery">
                                <div class="product-gallery">
                                    <div class="product-gallery__featured">
                                        
                                        <div class="owl-carousel" id="product-image">
                                            <div class="product-image product-image--location--gallery">
                                                <!--
                                The data-width and data-height attributes must contain the size of a larger version
                                of the product image.

                                If you do not know the image size, you can remove the data-width and data-height
                                attribute, in which case the width and height will be obtained from the naturalWidth
                                and naturalHeight property of img.product-image__img.
                                -->
                                                <a href="productos/<?=$r['imagen']?>" data-width="700" data-height="700" class="product-image__body" target="_blank">
                                                    <img class="product-image__img" src="productos/<?=$r['imagen']?>" alt="">
                                                </a>
                                            </div>
                                          
                                           
                                         
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- .product__gallery / end -->
                            <!-- .product__info -->
                            <div class="product__info">
                                
                                <h1 class="product__name"><?=$r['name']?></h1>
                                <div class="product__rating">
                                  
                                    
                                     <a style="font-size:13px;" href="?p=vendedor&id=<?=$ro['id'];?>">Vendedor: <?=$ro['name']?></a>
                                   
                                </div>
                                <div class="product__description">
                                  
                                </div>
<?php
$semana=date('W');
$semanamas=date('W')+1;
$hoy=date('N');
     $id_cliente = $_SESSION['id_cliente'];
 
$sa = $mysqli->query("SELECT * FROM admins WHERE id = '$id_vendedor'");
$ra = mysqli_fetch_array($sa);
 if($ra['tipo']==1){
 $qw = $mysqli->query("SELECT * FROM clientev WHERE id_cliente = '$id_cliente' AND id_vendedor = '$id_vendedor'");
 if(mysqli_num_rows($qw)>0){
 $rw = mysqli_fetch_array($qw);
 $qx = $mysqli->query("SELECT * FROM rutas WHERE id = '".$rw['ruta']."' AND id_vendedor = '$id_vendedor'");
 $rx = mysqli_fetch_array($qx);
 $diarbien=$rx['dia']+7;
 $llego=$rx['dia'];

 $xa=0;
 $xa = $diarbien-$rx['Diasant'];
 $encontrar=0;
 for ($i = $xa; $i >$diarbien; $i++) {

     if($i==14){
         $encontrar1=7;
     }
     if($i==13){
         $encontrar1=6;
     }
     if($i==12){
         $encontrar1=5;
     }
     if($i==11){
         $encontrar1=4;
     }
     if($i==10){
         $encontrar1=3;
     }
     if($i==9){
         $encontrar1=2;
     }
     if($i==8){
         $encontrar1=1;
     }
    
     
     if($encontrar1==$hoy){
         $encontrar=1;
     }
 }

 $dia=$diarbien;
 $dias=0;

 if($encontrar==0){
     if($dia==14){
         $dias=7;
     }
     if($dia==13){
         $dias=6;
     }
     if($dia==12){
         $dias=5;
     }
     if($dia==11){
         $dias=4;
     }
     if($dia==10){
         $dias=3;
     }
     if($dia==9){
         $dias=2;
     }
     if($dia==8){
         $dias=1;
     }

    if($llego==1){
    $llega='Lunes';
    }
    if($llego==2){
    $llega='Martes';
    }
    if($llego==3){
    $llega='Miercoles';
    }
    if($llego==4){
    $llega='Jueves';
    }
    if($llego==5){
    $llega='Viernes';
    }
    if($llego==6){
    $llega='Sabado';
    }
    if($llego==7){
    $llega='Domingo';
    }
    

     if($dias<$hoy){
        ?>
   <a style="font-size: 15px;">Los pedidos que realices hoy a este vendedor llegaran el dia <ad style="color: red"> <?=$llega?> </ad>  de la proxima semana. </a>
       <?php
     }else{
         ?>
   <a style="font-size: 15px;">Los pedidos que realices hoy a este vendedor llegaran el dia <ad style="color: red"> <?=$llega?> </ad>  de esta semana. </a>
       <?php
     }

 }
 if($encontrar==1){
    ?>
   <a style="font-size: 15px;">Los pedidos que realices hoy a este vendedor llegaran el dia <ad style="color: red"> <?=$llega?> </ad>  de la proxima semana. </a>
       <?php
 }

 }else{
   ?>
    <a style="font-size: 13px;"><i class="fas fa-exclamation"></i>&nbsp;&nbsp;Esta empresa tiene entregas por mecanismo de rutas,esta es tu primera compra en esta empresa desde Open, lugo de realizar la compra la empresa te asignara el dia de rutas a la cual se te ha asignado, si ya habias pedidio anteriormente a la empresa seguramante el dia de entrega es igual al cual aconstumbrabas antes.</a>
    <?php
 }
 }
 if($ra['tipo']==2){
   $st = $mysqli->query("SELECT * FROM hora WHERE id_vendedor = '$id_vendedor' AND tipo= 1 ");
            $rt = mysqli_fetch_array($st);
            $sa = $mysqli->query("SELECT * FROM hora WHERE id_vendedor = '$id_vendedor' AND tipo= 2  ");
            $ra = mysqli_fetch_array($sa);
  ?>
  
                          
                                    <li>Horario de distribucion: <?=$rt['hora']?> a <?=$ra['hora']?></li>
                                    <li>Tiempo aproximado en entrega de su pedido: </li>
                                 
                                
       


<?php
 }
 ?>
 <style type="text/css">
     .product__features {
    display: block!important;
    list-style: none;
    padding: 0;
    margin: 0;
    font-size: 14px;
}
 </style>
                  <ul class="product__features">             
                  <li><b>Peso/volumen:</b> <?=$r['canti']?>.</li>
                                    <li><b>Cantidad de unidades por paquete:</b> <?=$r['pesv']?>.</li>
                                    <?php
                                    $unidad=0;
                                    if($r['pesv']!=0){
                                         if($r['oferta']>0){
                                            $unidadesv= $preciototal;
                                         }else{
                                            $unidadesv= $r['price'];
                                         }
                                      $unidad= $unidadesv/ $r['pesv'];


                                    ?>
                                    <li><b>Valor por cada unidad:</b> <?=number_format($unidad)?>.</li>
                                
                                    <?php
                                }
                                    ?>                       

                              </ul>  
                                
                            </div>
                            <!-- .product__info / end -->
                            <!-- .product__sidebar -->
                            <div class="product__sidebar">
                        
                                  <?php
                                       
                                            if($r['estado']==1){
                                            ?>
                                          
                                                  <?php
                                                  }else{
                                                      ?>
                                <div class="product__availability">
                                    Disponibilidad: <span class="text-success">En stock</span>
                                </div>
                                <?php
                                                  }
                                                  ?>
       <div class="product__prices">
                                 <?php
                         
        if($r['oferta']>0){
            ?>
    <span class="widget-products__new-price" style="color: black ;   font-size: 28px;
    font-weight: 700;
    letter-spacing: -.03em;
    color: #3d464d;"><?=$divisa?><?=number_format($r['price'])?>&nbsp;</span>
    <span class="widget-products__old-price" style="  font-size: 20px;"><?=$divisa?><?=number_format($preciototal)?></span>
    </div>
  <?php
            $so = $mysqli->query("SELECT * FROM admins WHERE id = '$id_vendedor'");
$ro = mysqli_fetch_array($so);
            ?>

<br>
   <div class="form-group product__option">
                                        
                                        <div class="product__actions">
                                            
                                            <?php
$sa1 = $mysqli->query("SELECT * FROM clientes WHERE id = '".$_SESSION['id_cliente']."'");
$ra1 = mysqli_fetch_array($sa1);
$sa = $mysqli->query("SELECT * FROM admins WHERE id = '$id_vendedor'");
$ra = mysqli_fetch_array($sa);
if($ra1['tipo']==8){
if($ra['part']==1){ 
                                            if($r['estado']==1){
                                            ?>
                                            Agotado
                                                  <?php
                                                  }else{
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
                                            <div class="product__actions-item product__actions-item--addtocart">
                                                 <button style="font-size: initial;" class="btn btn-primary btn-lg" onclick="agregar_carro('<?=$r['id']?>');">Añadir al carro</button>
                                                
                                            </div>
                                            <?php
                                        }else{
                                        ?>
                                        <div class="product__actions-item product__actions-item--addtocart">
                                                <a href="?p=registron"> <button style="font-size: initial;"  class="btn btn-primary btn-lg">Añadir al carro</button></a>
                                                
                                            </div>
                                        <?php
                                    }
                                    
        }
}else{
    ?>
 <ds style="font-size: 17px;">El vendedor no realiza ventas a particulares</ds> 
    <?php
    
    
}
}else{
    if($r['estado']==1){
                                            ?>
                                            Agotado
                                                  <?php
                                                  }else{
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
                                            <div class="product__actions-item product__actions-item--addtocart">
                                                 <button style="font-size: initial;" class="btn btn-primary btn-lg" onclick="agregar_carro('<?=$r['id']?>');">Añadir al carro</button>
                                                
                                            </div>
                                            <?php
                                        }else{
                                        ?>
                                        <div class="product__actions-item product__actions-item--addtocart">
                                                <a href="?p=registron"> <button style="font-size: initial;"  class="btn btn-primary btn-lg">Añadir al carro</button></a>
                                                
                                            </div>
                                        <?php
                                    }
                                    
        }
}
 
                                            ?>
                                            
                                        </div>
                                        
                                    </div>

                                    <br>

<style type="text/css">

.product--layout--columnar .product__prices {
    margin-top: 20px;
    margin-bottom: 0px !important;
    line-height: 27px;
}
.product__actions {
    display: -webkit-box;
    display: -ms-flexbox;
    display: block!important;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin: -4px;
    text-align: center!important;
}

</style>
         
                            <?php
                          }else{
                           ?>
                                                                       <?php
$sa1 = $mysqli->query("SELECT * FROM clientes WHERE id = '".$_SESSION['id_cliente']."'");
$ra1 = mysqli_fetch_array($sa1);
$sa = $mysqli->query("SELECT * FROM admins WHERE id = '$id_vendedor'");
$ra = mysqli_fetch_array($sa);
if($ra1['tipo']==8){
if($ra['part']==1){ 
    ?>
                                         <div class="product__prices">
                             <?=$divisa?> <?=number_format($r['price'])?>
                                </div>
                                       <?php
                                       
                                            if($r['estado']==1){
                                            ?>
                                            <a style="color:red">Agotado</a>
                                                  <?php
                                                  }else{
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
                                            <div class="product__actions-item product__actions-item--addtocart">
                                                 <button style="font-size: initial;margin: 16px 0px 6px 0px;;" class="btn btn-primary btn-lg" onclick="agregar_carro('<?=$r['id']?>');">Añadir al carro</button>
                                                
                                            </div>
                                            <center style="font-size: 13px;
  ">¿Se vencieron tus productos?</center>
                                            <div class="product__actions-item product__actions-item--addtocart" style="text-align: center;">
                                                 <button style="font-size: initial;background: #3c3cca;border: #3c3cca" class="btn btn-primary btn-lg" onclick="devolucion('<?=$r['id']?>');">Devolucion</button>
                                                
                                            </div>
                                            <?php
                                        }else{
                                        ?>
                                        <div class="product__actions-item product__actions-item--addtocart">
                                                <a href="?p=registron"> <button style="font-size: initial;"  class="btn btn-primary btn-lg">Añadir al carro</button></a>
                                                
                                            </div>
                                        <?php
                                    }
                                    
        }
}else{
    ?>
   <ds style="font-size: 17px;">El vendedor no realiza ventas a particulares</ds> 
    <?php
    
    
}
}else{
    ?>
   <div class="product__prices">
                             <?=$divisa?> <?=number_format($r['price'])?>
                                </div>
                                       <?php
                                       
                                            if($r['estado']==1){
                                            ?>
                                            <a style="color:red">Agotado</a>
                                                  <?php
                                                  }else{
                                            if(isset($_SESSION['id_cliente'])){
                                            ?>
                                            <div class="product__actions-item product__actions-item--addtocart">
                                                 <button style="font-size: initial;margin: 16px 0px 6px 0px;;" class="btn btn-primary btn-lg" onclick="agregar_carro('<?=$r['id']?>');">Añadir al carro</button>
                                                
                                            </div>
                                            <center style="font-size: 13px;
  ">¿Se vencieron tus productos?</center>
                                            <div class="product__actions-item product__actions-item--addtocart" style="text-align: center;">
                                                 <button style="font-size: initial;background: #3c3cca;border: #3c3cca" class="btn btn-primary btn-lg" onclick="devolucion('<?=$r['id']?>');">Devolucion</button>
                                                
                                            </div>
                                            <?php
                                        }else{
                                        ?>
                                        <div class="product__actions-item product__actions-item--addtocart">
                                                <a href="?p=registron"> <button style="font-size: initial;"  class="btn btn-primary btn-lg">Añadir al carro</button></a>
                                                
                                            </div>
                                        <?php
                                    }
                                    
        }
}
 
                                        
                             
                                  

                            }

                                ?>
<?php
$sa1 = $mysqli->query("SELECT * FROM clientes WHERE id = '".$_SESSION['id_cliente']."'");
$ra1 = mysqli_fetch_array($sa1);
$sa = $mysqli->query("SELECT * FROM admins WHERE id = '$id_vendedor'");
$ra = mysqli_fetch_array($sa);

if($ra1['tipo']==1){
  if($ra['tipo1']==0){
    ?>
     <div style=" font-size: 15px;   font-weight: 500;">No hay monto minimo para comprar con <?=$ra['name']?></div>
    <?php
} else{
    ?>
     <div style=" font-size: 15px;   font-weight: 500;">    <span class="text-success">   Monto minimo</span> para realizar pedidos a <?=$ra['name']?> es:<span class="text-success"> $ <?=number_format($ra['tipo1'])?></span></div>
    <?php
} 
}




if($ra1['tipo']==2){
  if($ra['tipo2']==0){
    ?>
     <div style=" font-size: 15px;   font-weight: 500;">No hay monto minimo para comprar con <?=$ra['name']?></div>
    <?php
} else{
    ?>
     <div style=" font-size: 15px;   font-weight: 500;">    <span class="text-success">   Monto minimo</span> para realizar pedidos a <?=$ra['name']?> es:<span class="text-success"> $ <?=number_format($ra['tipo2'])?></span></div>
    <?php
} 
}




if($ra1['tipo']==3){
  if($ra['tipo3']==0){
    ?>
     <div style=" font-size: 15px;   font-weight: 500;">No hay monto minimo para comprar con <?=$ra['name']?></div>
    <?php
} else{
    ?>
     <div style=" font-size: 15px;   font-weight: 500;">    <span class="text-success">   Monto minimo</span> para realizar pedidos a <?=$ra['name']?> es:<span class="text-success"> $ <?=number_format($ra['tipo3'])?></span></div>
    <?php
} 
}



if($ra1['tipo']==4){
  if($ra['tipo4']==0){
    ?>
     <div style=" font-size: 15px;   font-weight: 500;">No hay monto minimo para comprar con <?=$ra['name']?></div>
    <?php
} else{
    ?>
     <div style=" font-size: 15px;   font-weight: 500;">    <span class="text-success">   Monto minimo</span> para realizar pedidos a <?=$ra['name']?> es:<span class="text-success"> $ <?=number_format($ra['tipo4'])?></span></div>
    <?php
} 
}


if($ra1['tipo']==5){
  if($ra['tipo5']==0){
    ?>
     <div style=" font-size: 15px;   font-weight: 500;">No hay monto minimo para comprar con <?=$ra['name']?></div>
    <?php
} else{
    ?>
     <div style=" font-size: 15px;   font-weight: 500;">    <span class="text-success">   Monto minimo</span> para realizar pedidos a <?=$ra['name']?> es:<span class="text-success"> $ <?=number_format($ra['tipo5'])?></span></div>
    <?php
} 
}


if($ra1['tipo']==8){
  if($ra['montpart']==0){
    ?>
     <div style=" font-size: 15px;   font-weight: 500;">No hay monto minimo para comprar con <?=$ra['name']?></div>
    <?php
} else{
    ?>
     <div style=" font-size: 15px;   font-weight: 500;">    <span class="text-success">   Monto minimo</span> para realizar pedidos a <?=$ra['name']?> es:<span class="text-success"> $ <?=number_format($ra['montpart'])?></span></div>
    <?php
} 
}
?>
                            
                                <form class="product__options">
                                    
                                   
      <script type="text/javascript">            
    function agregar_carro(idp){
        var cant = prompt("¿Que cantidad desea agregar?",1);

        if(cant.length>0){
            window.location="?p=productos&agregar="+idp+"&cant="+cant;
        }
    }

</script>
    <script type="text/javascript">            
    function devolucion(idp){
        var cant = prompt("¿Que cantidad de productos se vencieron?",1);

        if(cant.length>0){
            window.location="?p=productos&devolucion="+idp+"&cante="+cant;
        }
    }

</script>
                                </form>
                                <!-- .product__options / end -->
                            </div>
                            <!-- .product__end -->
                            <div class="product__footer">
                                
                               
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <?php
            $contador=0;
$qj = $mysqli->query("SELECT * FROM productos WHERE id_vendedor = '$id_vendedor'");
while($rj = mysqli_fetch_array($qj)){
    $contador++;
    }
    ?>
            <!-- .block-products-carousel -->
            <div class="block block-products-carousel" data-layout="grid-5">
                <div class="container">
                    <div class="block-header">
                        <h3 class="block-header__title">Mas productos del vendedor</h3>
                        <div class="block-header__divider"></div>
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

if($contador>0){
$qj = $mysqli->query("SELECT * FROM productos WHERE id_vendedor = '$id_vendedor'");
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
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card product-card--hidden-actions ">
                                        
                                        <div class="product-card__badges-list">
                                            <div class="product-card__badge product-card__badge--new">New</div>
                                        </div>
                                        <div class="product-card__image product-image">
                                            <a href="?p=produc&id=<?=$rj['id'];?>" class="product-image__body">
                                                <img class="product-image__img" src="productos/<?=$rj['imagen']?>" alt="">
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
                                                Availability: <span class="text-success">En Stock</span>
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
                            </div>
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

            <!-- .block-products-carousel / end -->
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
.owl-carousel .owl-item .product-image--location--gallery .product-image__img {
    max-width: 90%;
    max-height: 90%;
    width: auto;
    height: auto;
    left: 50%;
    top: 50%;
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
}
.block-products-carousel .owl-item {
    -ms-flex-negative: 0;
    flex-shrink: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    max-width: 290px !important;
}
.product-image__img {
    display: block;
    position: absolute;
    width: 90% !important;
    height: 90% !important;
    -o-object-fit: scale-down;
    object-fit: scale-down;
}
</style>
           
   