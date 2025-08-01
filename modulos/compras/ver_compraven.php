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
if(isset($busq) && isset($cat)){
 
    $q = $mysqli->query("SELECT * FROM productos WHERE name like '%$busq%' AND id_categoria = '$cat'");
}elseif(isset($cat) && !isset($busq)){

    $q = $mysqli->query("SELECT * FROM productos WHERE id_categoria = '$cat' ORDER BY id DESC");

}elseif(isset($busq) && !isset($cat)){
  redir("?p=search&busq=$busq");
}
check_user('ver_compraven');
$id = clear($id);
$id_vendedor = clear($id_vendedor);
$monto = clear($monto);

$s = $mysqli->query("SELECT * FROM compra WHERE id = '$id' AND id_cliente = '".$_SESSION['id_cliente']."'");
if(mysqli_num_rows($s)>0){
$s = $mysqli->query("SELECT * FROM compra WHERE id = '$id'");
$r = mysqli_fetch_array($s);
$sc = $mysqli->query("SELECT * FROM clientes WHERE id = '".$r['id_cliente']."'");
$rc = mysqli_fetch_array($sc);
$nombre = $rc['name'];
$so = $mysqli->query("SELECT * FROM admins WHERE id = '$id_vendedor'");
$ro = mysqli_fetch_array($so);
    $se = $mysqli->query("SELECT * FROM compven WHERE  id_vendedor = '$id_vendedor' AND compra = '".$r['id']."'");
    
        $re = mysqli_fetch_array($se);
?>
        <!-- desktop site__header / end -->
        <!-- site__body -->
            <style type="text/css">
                                .form-group {
    margin-bottom: 1rem;
    display: inline-block!important;
    width: 20%;
}
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

.product--layout--columnar .product__prices {
    margin-top: 20px;
    margin-bottom: 0px !important;
    line-height: 28px;
}
.row {
    display: -ms-flexbox;
    display: flex !important;
    -ms-flex-wrap: wrap;
    flex-wrap: inherit;
    margin-right: -15px;
    margin-left: -15px;
}
.col-lg-9 {
    -ms-flex: 0 0 75%;
    flex: 1 0 75% !important;
    max-width: 75%;
}
.col-lg-9 {
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 100%!important;
}
    </style>
        <div class="site__body">
            <div class="page-header">
                <div class="page-header__container container">
                    
                    
                </div>
            </div>
            <div class="block">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="card">
                                <div class="order-header">
                                    <div class="order-header__actions">
                                        <a href="?p=miscompras" class="btn btn-xs btn-secondary">Volver a mis compras</a>
                                    </div>
                                    <h5 class="order-header__title">Orden #<?=$re['id']?></h5>
                                    <div class="order-header__subtitle">
                                        El pedido fue realizado  <mark class="order-header__date"><?=fecha($r['fecha'])?></mark>
                                        su estado es <mark class="order-header__status"><?=estado($re['estado'])?></mark>.
                                    </div>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-table">
                                    <div class="table-responsive-sm">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Producto</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody class="card-table__body card-table__body--merge-rows">
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
     $unica=$rp['monto']*$rp['cantidad'];

            ?>
                                                <tr>
                                                    <td><?=$nombre_producto?> × <?=$rp['cantidad']?></td>
                                                    <td><?=$divisa?><?=number_format($unica)?></td>
                                                </tr>
                                                    <?php
        }
    ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Total</th>
                                                    <td><?=$divisa?><?=number_format($re['monto'])?></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                       <div></div>
                        </div>

                    </div>
                    <br>
                                               <style type="text/css">
  .address-card--featured .address-card__body {
    padding: 32px 7px 11px 22px!important;
}
.col-sm-6 {
    flex: 0 0 100%!important;
    max-width: 100%!important;
}
</style>
                                             <div class="col-sm-6 col-12 px-2">
                                    <div class="card address-card address-card--featured">
                                        <div class="address-card__body">

                                            <div class="address-card__badge address-card__badge--muted">Informacion del vendedor</div>
                                            <div class="address-card__name">Vendedor: <?=$ro['name']?></div>
                                            
                                            <div class="address-card__row">
 <div class="form-group" style="
    width: 30%!important;"> 
                                                <div class="address-card__row-title">Contacto</div>
                                                <div class="address-card__row-content">
                                                  Tel: <?=$ro['telefono']?><br>
                                                  Email: <?=$ro['correo']?>
                                                </div>
                                            </div>

                                                     <div class="form-group" style="
    width: 30%!important;"> 
                                            <div class="address-card__row">
                                                <div class="address-card__row-title">Dirección</div>
                                                <div class="address-card__row-content"> <?=$ro['direccion']?></div>
                                            </div>
                                          </div>
                                        <div class="form-group" style="
    width: 30%!important;">   
                                            <div class="address-card__row">
                                                <div class="address-card__row-title">Comprar mas del vendedor</div>
                                                <div class="address-card__row-content"><a href="?p=vendedor&id=<?=$id_vendedor?>">Ver productos</a></div>
                                            </div>
</div>
 
                                            
                                          </div>
                                        </div>
                                    </div>
                                </div>
                </div>
            </div>
        </div>
        <?php
}else{
    alert("Ha ocurrido un error");
    redir("?p=miscompras");
}
?>
 
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
           
   