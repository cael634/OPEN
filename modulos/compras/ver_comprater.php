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
check_user('ver_compra');
if(isset($busq) && isset($cat)){
 
    $q = $mysqli->query("SELECT * FROM productos WHERE name like '%$busq%' AND id_categoria = '$cat'");
}elseif(isset($cat) && !isset($busq)){

    $q = $mysqli->query("SELECT * FROM productos WHERE id_categoria = '$cat' ORDER BY id DESC");

}elseif(isset($busq) && !isset($cat)){
  redir("?p=search&busq=$busq");
}
$id = clear($id);
$s = $mysqli->query("SELECT * FROM compra WHERE id = '$id' AND id_cliente = '".$_SESSION['id_cliente']."'");
if(mysqli_num_rows($s)>0){
$s = $mysqli->query("SELECT * FROM compra WHERE id = '$id'");
$r = mysqli_fetch_array($s);

$sc = $mysqli->query("SELECT * FROM clientes WHERE id = '".$r['id_cliente']."'");
$rc = mysqli_fetch_array($sc);
$nombre = $rc['name'];
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

.col-lg-9 {
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 100% !important;
}


    </style>
        <!-- desktop site__header / end -->
        <!-- site__body -->
        <div class="site__body" >
            <div class="block order-success">
                <div class="container">
                    <div class="order-success__body">
                        <div class="order-success__header">
                            <svg class="order-success__icon" width="100" height="100">
                                <use xlink:href="images/sprite.svg#check-100"></use>
                            </svg>
                            <h1 class="order-success__title">Gracias</h1>
                            <div class="order-success__subtitle">Tu orden ha sido recibida.</div>
                            <div class="order-success__actions">
                                <a href="?p=productos" class="btn btn-xs btn-secondary">Ir a la página de inicio</a>
                            </div>
                        </div>
                        <div class="order-success__meta">
                            <ul class="order-success__meta-list">
                                <li class="order-success__meta-item">
                                    <span class="order-success__meta-title">Numero de orden:</span>
                                    <span class="order-success__meta-value"># <?=$r['id']?></span>
                                </li>
                                <li class="order-success__meta-item">
                                    <span class="order-success__meta-title">Fecha de realización de la compra:</span>
                                    <span class="order-success__meta-value"><span ><?=fecha($r['fecha'])?></span></span>
                                </li>
                                <li class="order-success__meta-item">
                                    <span class="order-success__meta-title">Total:</span>
                                    <span class="order-success__meta-value"><?=$divisa?><?=number_format($r['monto'])?></span>
                                </li>
                                <li class="order-success__meta-item">
                                    <span class="order-success__meta-title">Metodo de pago:</span>
                                    <span class="order-success__meta-value">Efectivo</span>
                                </li>
                            </ul>
                        </div>
                        <div class="card">
                            <div class="order-list">
                                <table>
                                    <thead class="order-list__header">
                                        <tr>
                                            <th class="order-list__column-label" colspan="2">Productos</th>
                                            <th class="order-list__column-quantity">Cantidad</th>
                                            <th class="order-list__column-total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class="order-list__products">
 <?php
 $totalfin=0;
  $se = $mysqli->query("SELECT * FROM productos_compra WHERE id_compra = '$id'");
  while ($re = mysqli_fetch_array($se)){
    $id_vendedor = $re['id_vendedor'];
    $id_producto = $re['id_producto'];

    $so = $mysqli->query("SELECT * FROM admins WHERE id = '$id_vendedor'");
    $ro = mysqli_fetch_array($so);
    $sq = $mysqli->query("SELECT * FROM productos WHERE id = '$id_producto'");
    $rq = mysqli_fetch_array($sq);
    $imagen_producto = $rq['imagen'];
    $totalfin=$re['cantidad']*$re['monto'];
      ?>
                                        <tr>
                                            <td class="order-list__column-image">
                                                <div class="product-image">
                                                    <a href="" class="product-image__body">
                                                        <img class="product-image__img" src="productos/<?=$imagen_producto?>" alt="">
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="order-list__column-product">
                                                <a href=""><?=$rq['name']?></a>
                                                <div class="order-list__options">
                                                    <ul class="order-list__options-list">
                                                        <li class="order-list__options-item">
                                                            <span class="order-list__options-label">Vendedor:</span>
                                                            <span class="order-list__options-value"><?=$ro['name']?></span>
                                                        </li>
                                                       
                                                    </ul>
                                                </div>
                                            </td>
                                            <td class="order-list__column-quantity" data-title="Cantidad:"><?=$re['cantidad']?></td>
                                            <td class="order-list__column-total"><?=$divisa?><?=number_format($totalfin)?></td>
                                        </tr>

 <?php
}
 ?>


                                    </tbody>
                                    <tbody class="order-list__subtotals">
                                        
                                    </tbody>
                                    <tfoot class="order-list__footer">
                                        <tr>
                                            <th class="order-list__column-label" colspan="3">Total</th>
                                            <td class="order-list__column-total"><?=$divisa?><?=number_format($r['monto'])?></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                        <div class="row mt-3 no-gutters mx-n2">
                            
<?php
$s = $mysqli->query("SELECT * FROM compra WHERE id = '$id'");
$r = mysqli_fetch_array($s);

$sc = $mysqli->query("SELECT * FROM clientes WHERE id = '".$r['id_cliente']."'");
$rc = mysqli_fetch_array($sc);
$nombre = $rc['name'];

    $sx1 = $mysqli->query("SELECT * FROM compven WHERE compra = '".$r['id']."'");
    while ($rx1 = mysqli_fetch_array($sx1)){
    $id_vendedor = $rx1['id_vendedor'];
    $so = $mysqli->query("SELECT * FROM admins WHERE id = '$id_vendedor'");
    $ro = mysqli_fetch_array($so);
    
            ?>

                            <div class="col-sm-6 col-12 px-2" style="padding: 5px;">

                                <div class="card address-card">
                                    <div class="address-card__body">
                                       <a href="?p=ver_compraven&id=<?=$id?>&id_vendedor=<?=$id_vendedor?>&monto=<?=$rx['monto']?>"><div class="address-card__badge address-card__badge--muted">Ver datalles</div></a>
                                        <div class="address-card__name">Vendedor: <?=$ro['name']?></div>
                                        <div class="address-card__row">
                                           Total: <?=$divisa?><?=number_format($rx1['monto'])?><br>
                                            <?php
 if($ro['tipo']==1){
 $qw = $mysqli->query("SELECT * FROM clientev WHERE id_cliente = '$id_cliente' AND id_vendedor = '$id_vendedor'");
 if(mysqli_num_rows($qw)>0){
 $rw = mysqli_fetch_array($qw);
 $qx = $mysqli->query("SELECT * FROM rutas WHERE id = '".$rw['ruta']."' AND id_vendedor = '$id_vendedor'");
 $rx = mysqli_fetch_array($qx);
 $llego=$rx['dia'];
 $semanar=$rx1['semana'];
 $seman1=date('W');
 $seman2=$seman1+1;
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
    if($semanar==$seman1){
     $muestra='esta semana';
    }
    if($semanar==$seman2){
     $muestra='la proxima semana';
    }
    ?>
    Entrega: <?=$llega?> de <?=$muestra?>
    <?php
   }else{
        ?>
    Se te asiganara una ruta.
    <?php
 }
 }                                      
                                            
                                            ?>
                                            <?php
                                            if($ro['tipo']==2){
                                                ?>
                                               Entrega de pedidos: De <?=$ro['emp']?> a <?=$ro['ter']?> 
                                               <?php 
                                            }
                                            ?>
                                        </div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">Productos:</div>
                <?php
 $monto_total = 0;
        $sp = $mysqli->query("SELECT * FROM productos_compra WHERE id_compra = '$id' AND id_vendedor = '$id_vendedor'");
        while($rp=mysqli_fetch_array($sp)){
            $spro = $mysqli->query("SELECT * FROM productos WHERE id = '".$rp['id_producto']."'");
            $r2 = mysqli_fetch_array($spro);

                        $preciototal = 0;


            if($r2['oferta']>0){
                if(strlen($r2['oferta'])==1){
                    $desc = "0.0".$r2['oferta'];
                   }else{
                    $desc = "0.".$r2['oferta'];
                   }
                $preciototal = $r2['price'] -($r2['price'] * $desc);
            }else{
                $preciototal = $r2['price'];
            }
    $nombre_producto = $r2['name'];
    $cantidad = $rp['cantidad'];
    $precio_unidad = $r2['price'];
    $precio_total = $cantidad * $preciototal;
    $imagen_producto = $r2['imagen'];
    $monto_total = $monto_total + $precio_total;

            ?>
                                            <div class="address-card__row-content">• <?=$nombre_producto?> × <?=$rp['cantidad']?></div>
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
                    </div>
                </div>
            </div>
        </div>
        <!-- site__body / end -->
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
           
   
<?php
  }else{
    redir("?p=miscompras");
}
?>