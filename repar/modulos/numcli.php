<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
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
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Stroyka</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
    <!-- css -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/photoswipe/photoswipe.css">
    <link rel="stylesheet" href="vendor/photoswipe/default-skin/default-skin.css">
    <link rel="stylesheet" href="vendor/select2/css/select2.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- font - fontawesome -->
    <link rel="stylesheet" href="vendor/fontawesome/css/all.min.css">
    <!-- font - stroyka -->
    <link rel="stylesheet" href="fonts/stroyka/stroyka.css">
</head>

<body>
    <!-- site -->
    <div class="site" >
        <!-- mobile site__header -->
        <header class="site__header d-lg-none" >
            <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
            
        </header>

        <!-- desktop site__header / end -->
        <!-- site__body -->

      

  <div class="site__body" >
 

   <?php
   check_user('carrito');
    $id_cliente = $_SESSION['id_cliente'];
    $q = $mysqli->query("SELECT * FROM carro WHERE id_cliente = '$id_cliente'");



if(mysqli_num_rows($q)>0){
check_user('carrito');
 if(isset($busq) && isset($cat)){
 
    $q = $mysqli->query("SELECT * FROM productos WHERE name like '%$busq%' AND id_categoria = '$cat'");
}elseif(isset($cat) && !isset($busq)){

    $q = $mysqli->query("SELECT * FROM productos WHERE id_categoria = '$cat' ORDER BY id DESC");

}elseif(isset($busq) && !isset($cat)){
  redir("?p=search&busq=$busq");
}
if(isset($eliminar)){
  $eliminar = clear($eliminar);
  $mysqli->query("DELETE FROM carro WHERE id = '$eliminar'");
  redir("?p=carrito");
}
if(isset($id) && isset($modificar)){
  $id = clear($id);
  $modificar = clear($modificar);
  $mysqli->query("UPDATE carro SET cant = '$modificar' WHERE id = '$id'");
  alert("Cantidad modificada",1,'carrito');
  //redir("?p=carrito");
}

$semana = date("W") ;
if(isset($finalizar)){

  $monto = clear($monto_total);

  $id_cliente = clear($_SESSION['id_cliente']);
  $q = $mysqli->query("INSERT INTO compra (id_cliente,fecha,monto,estado) VALUES ('$id_cliente',NOW(),'$monto',0)");
  $sc = $mysqli->query("SELECT * FROM compra WHERE id_cliente = '$id_cliente' ORDER BY id DESC LIMIT 1");
  $rc = mysqli_fetch_array($sc);
  $ultima_compra = $rc['id'];
  $q2 = $mysqli->query("SELECT * FROM carro WHERE id_cliente = '$id_cliente'");
  while($r2=mysqli_fetch_array($q2)){
    $sp = $mysqli->query("SELECT * FROM productos WHERE id = '".$r2['id_producto']."'");
    $rp = mysqli_fetch_array($sp);
    $monto = $rp['price'];
    $impuesto = $rp['impuesto'];
    $oferta = $rp['oferta'];


  $mysqli->query("INSERT INTO productos_compra (id_compra,id_producto,cantidad,monto,id_vendedor,impuesto,oferta) VALUES ('$ultima_compra','".$r2['id_producto']."','".$r2['cant']."','$monto','".$r2['id_vendedor']."','$impuesto','$oferta')");}
  $q2 = $mysqli->query("SELECT DISTINCT id_vendedor FROM carro");
  
  while($r3=mysqli_fetch_array($q2)){
  
    

  $q3 = $mysqli->query("SELECT * FROM carro WHERE id_vendedor = '".$r3['id_vendedor']."'");
  while($r4=mysqli_fetch_array($q3)){

$qw = $mysqli->query("SELECT * FROM clientev WHERE id_cliente = '$id_cliente' AND id_vendedor = '".$r3['id_vendedor']."'");
if(mysqli_num_rows($qw)>0){

}else{
     $qw = $mysqli->query("INSERT INTO clientev (id_cliente,ruta,id_vendedor) VALUES ('$id_cliente',0,'".$r3['id_vendedor']."')");
   }



}

   $id_vendedor=clear($r3['id_vendedor']);
   
   $sa = $mysqli->query("SELECT * FROM admins WHERE id = '$id_vendedor'");
            $ra = mysqli_fetch_array($sa);
      if($ra['tipo']==1){ 
            $xq=0;
            $xy=0;
            $id_cliente = clear($_SESSION['id_cliente']);
            $dia = date("D");
            if($dia == "Mon"){
              $dia=1;
            }
            if($dia == "Tue"){
              $dia=2;
            }
            if($dia == "Wed"){
              $dia=3;
            }
            if($dia == "Thu"){
              $dia=4;
            }
            if($dia == "Fri"){
              $dia=5;
            }
            if($dia == "Sat"){
              $dia=6;
            }
            if($dia == "Sun"){
              $dia=7;
            }
            
            $qj = $mysqli->query("SELECT * FROM clientev WHERE id_vendedor = '$id_vendedor' AND id_cliente = '$id_cliente'");
            $rj=mysqli_fetch_array($qj);
            $rutin = $rj['ruta'];
            if(mysqli_num_rows($qj)>0){
            $qf = $mysqli->query("SELECT * FROM dia WHERE id_vendedor = '$id_vendedor' AND dia = '$dia' AND ruta = '$rutin'");
            if(mysqli_num_rows($qf)>0){
            $contador1=0; 
            $menor=0;
            $mayor=0;
            $qj = $mysqli->query("SELECT * FROM clientev WHERE id_vendedor = '$id_vendedor' AND id_cliente = '$id_cliente'");
            while($rj = mysqli_fetch_array($qj)){
            $rutin = $rj['ruta'];
            $qf = $mysqli->query("SELECT * FROM dia WHERE id_vendedor = '$id_vendedor' AND dia = '$dia' AND ruta = '".$rj['ruta']."'");     
            $rf=mysqli_fetch_array($qf);
            $ruten = $rf['ruta'];
            $sx = $mysqli->query("SELECT * FROM rutas WHERE rutas = '$ruten' AND id_vendedor = '$id_vendedor'");
            $rx=mysqli_fetch_array($sx);
            
            if($contador1==0){
              $menor= $rx['dia'];
              $mayor=$rx['dia'];
            }

            if($mayor<$rx['dia']){
              $mayor  = $rx['dia'];
            }
            if($menor>$rx['dia']){
              $menor= $rx['dia'];
            }
            
            $contador1 ++;
            }

            

            

            
            if($menor>$dia){
           
            $sw = $mysqli->query("SELECT * FROM rutas WHERE dia = '$menor' AND id_vendedor = '$id_vendedor' ");
            $rw=mysqli_fetch_array($sw);
            $rutos = $rw['rutas'];
            $mysqli->query("INSERT INTO compven (compra,fecha,id_vendedor,monto,semana,ruta) VALUES ($ultima_compra,NOW(),'".$r3['id_vendedor']."','$monto_total','$semana','$rutos')");
                }

           
            if($mayor<$dia){
             
            $semana = $semana+1;
            $sw = $mysqli->query("SELECT * FROM rutas WHERE dia = '$menor' AND id_vendedor = '$id_vendedor' ");
            $rw=mysqli_fetch_array($sw);
            $rutos = $rw['rutas'];
            $mysqli->query("INSERT INTO compven (compra,fecha,id_vendedor,monto,semana,ruta) VALUES ($ultima_compra,NOW(),'".$r3['id_vendedor']."','$monto_total','$semana','$rutos')");
                }

            if($menor<$dia && $mayor>$dia){

            $contador4=0; 
            $menor4=0;
            $mayor4=0;
            $qj = $mysqli->query("SELECT * FROM clientev WHERE id_vendedor = '$id_vendedor' AND id_cliente = '$id_cliente'");
            while($rj = mysqli_fetch_array($qj)){
            $rutin = $rj['ruta'];
            $qf = $mysqli->query("SELECT * FROM dia WHERE id_vendedor = '$id_vendedor' AND dia = '$dia' AND ruta = '".$rj['ruta']."'");     
            $rf=mysqli_fetch_array($qf);
            $ruten = $rf['ruta'];
            $sxx = $mysqli->query("SELECT * FROM rutas WHERE rutas = '$ruten' AND id_vendedor = '$id_vendedor' ");
            $rxx=mysqli_fetch_array($sxx);

           
                  
            if($rxx['dia']>$dia){
              $menor4=$rxx['dia'];
              if($menor4>$rxx['dia']){
              $menor4 = $rxx['dia'];
            }
            }           
            $contador4 ++;
            }
          
            $sw = $mysqli->query("SELECT * FROM rutas WHERE dia = '$menor4' AND id_vendedor = '$id_vendedor' ");
            $rw=mysqli_fetch_array($sw);
            $rutos = $rw['rutas'];
            $mysqli->query("INSERT INTO compven (compra,fecha,id_vendedor,monto,semana,ruta) VALUES ($ultima_compra,NOW(),'".$r3['id_vendedor']."','$monto_total','$semana','$rutos')");
                }
            }else{  


            $contador2=0; 
            $menor=0;
            $mayor=0;
            $diaer=0;
            $qj = $mysqli->query("SELECT * FROM clientev WHERE id_vendedor = '$id_vendedor' AND id_cliente = '$id_cliente'");
            while($rj = mysqli_fetch_array($qj)){
            $rutin = $rj['ruta'];
            $qf = $mysqli->query("SELECT * FROM dia WHERE id_vendedor = '$id_vendedor' AND ruta = '".$rj['ruta']."'");     
            $rf=mysqli_fetch_array($qf);
            $ruten = $rf['dia'];

            if($contador2==0){
              $menor= $ruten;
              $mayor=$ruten;
            }

            if($mayor<$ruten){
              $mayor  = $ruten;
            }
            if($menor>$ruten){
              $menor= $ruten;
            }
            
            $contador2++;
            }
            
          if($menor>$dia){
            $diaer=$menor;

          }
          if($mayor<$dia){
            $diaer=$menor;

           }
           if($menor<$dia && $mayor>$dia){

            $contador7=0; 
            $menor7=0;
            $mayor7=0;

            $qj = $mysqli->query("SELECT * FROM clientev WHERE id_vendedor = '$id_vendedor' AND id_cliente = '$id_cliente'");
            while($rj = mysqli_fetch_array($qj)){
            $rutin = $rj['ruta'];
            $qf = $mysqli->query("SELECT * FROM dia WHERE id_vendedor = '$id_vendedor' AND ruta = '".$rj['ruta']."'");     
            $rf=mysqli_fetch_array($qf);
            $ruten = $rf['dia'];

           
                  
            if($ruten>$dia){
              $menor7=$ruten;
              if($menor7>$ruten){
              $menor7 = $ruten;
            }}           
            $contador7 ++;}
            $diaer = $menor7; }


            $qj = $mysqli->query("SELECT * FROM clientev WHERE id_vendedor = '$id_vendedor' AND id_cliente = '$id_cliente'");
            $rj=mysqli_fetch_array($qj);
            $rutin = $rj['ruta'];
            if(mysqli_num_rows($qj)>0){
            $qf = $mysqli->query("SELECT * FROM dia WHERE id_vendedor = '$id_vendedor' AND dia = '$diaer' AND ruta = '$rutin'");
            if(mysqli_num_rows($qf)>0){
            $contador1=0; 
            $menor=0;
            $mayor=0;
            $qj = $mysqli->query("SELECT * FROM clientev WHERE id_vendedor = '$id_vendedor' AND id_cliente = '$id_cliente'");
            while($rj = mysqli_fetch_array($qj)){
            $rutin = $rj['ruta'];
            $qf = $mysqli->query("SELECT * FROM dia WHERE id_vendedor = '$id_vendedor' AND dia = '$diaer' AND ruta = '".$rj['ruta']."'");     
            $rf=mysqli_fetch_array($qf);
            $ruten = $rf['ruta'];
            $sx = $mysqli->query("SELECT * FROM rutas WHERE rutas = '$ruten' AND id_vendedor = '$id_vendedor'");
            $rx=mysqli_fetch_array($sx);
            
            if($contador1==0){
              $menor= $rx['dia'];
              $mayor=$rx['dia'];
            }

            if($mayor<$rx['dia']){
              $mayor  = $rx['dia'];
            }
            if($menor>$rx['dia']){
              $menor= $rx['dia'];
            }
            
            $contador1 ++;
            }

            

           

            
            if($menor>$dia){

             
            $sw = $mysqli->query("SELECT * FROM rutas WHERE dia = '$menor' AND id_vendedor = '$id_vendedor' ");
            $rw=mysqli_fetch_array($sw);
            $rutos = $rw['rutas'];
            $mysqli->query("INSERT INTO compven (compra,fecha,id_vendedor,monto,semana,ruta) VALUES ($ultima_compra,NOW(),'".$r3['id_vendedor']."','$monto_total','$semana','$rutos')");
                }

           
            if($mayor<$dia){
             
           $semana = $semana+1;
            $sw = $mysqli->query("SELECT * FROM rutas WHERE dia = '$menor' AND id_vendedor = '$id_vendedor' ");
            $rw=mysqli_fetch_array($sw);
            $rutos = $rw['rutas'];
            $mysqli->query("INSERT INTO compven (compra,fecha,id_vendedor,monto,semana,ruta) VALUES ($ultima_compra,NOW(),'".$r3['id_vendedor']."','$monto_total','$semana','$rutos')");
             
                }

            
            if($menor<$dia && $mayor>$dia){

            $contador4=0; 
            $menor4=0;
            $mayor4=0;
            $qj = $mysqli->query("SELECT * FROM clientev WHERE id_vendedor = '$id_vendedor' AND id_cliente = '$id_cliente'");
            while($rj = mysqli_fetch_array($qj)){
            $rutin = $rj['ruta'];
            $qf = $mysqli->query("SELECT * FROM dia WHERE id_vendedor = '$id_vendedor' AND dia = '$diaer' AND ruta = '".$rj['ruta']."'");     
            $rf=mysqli_fetch_array($qf);
            $ruten = $rf['ruta'];
            $sxx = $mysqli->query("SELECT * FROM rutas WHERE rutas = '$ruten' AND id_vendedor = '$id_vendedor' ");
            $rxx=mysqli_fetch_array($sxx);

           
                  
            if($rxx['dia']>$dia){
              $menor4=$rxx['dia'];
              if($menor4>$rxx['dia']){
              $menor4 = $rxx['dia'];
            }
            }           
            $contador4 ++;
            }
      
            $sw = $mysqli->query("SELECT * FROM rutas WHERE dia = '$menor4' AND id_vendedor = '$id_vendedor' ");
            $rw=mysqli_fetch_array($sw);
            $rutos = $rw['rutas'];
            $mysqli->query("INSERT INTO compven (compra,fecha,id_vendedor,monto,semana,ruta) VALUES ($ultima_compra,NOW(),'".$r3['id_vendedor']."','$monto_total','$semana','$rutos')");
            
                }
           
}
  }
}        
    }else{

    $mysqli->query("INSERT INTO clientenuevo (id_vendedor,id_cliente) VALUES ($id_vendedor,$id_cliente");
    $mysqli->query("INSERT INTO compven (compra,fecha,id_vendedor,monto,semana,ruta) VALUES ($ultima_compra,NOW(),'".$r3['id_vendedor']."','$monto_total','$semana',0)");
                }
                  }
            

                
              
if($ra['tipo']==2){ 
$mysqli->query("INSERT INTO compven (compra,fecha,id_vendedor,monto,semana,ruta) VALUES ($ultima_compra,NOW(),'".$r3['id_vendedor']."','$monto_total','$semana',0)");
}
}





     $id_cliente = $_SESSION['id_cliente'];
  $mysqli->query("DELETE FROM carro WHERE id_cliente = '$id_cliente'");
  $sc = $mysqli->query("SELECT * FROM compra WHERE id_cliente = '$id_cliente' ORDER BY id DESC LIMIT 1");
  $rc = mysqli_fetch_array($sc);
  $id_compra = $rc['id'];
  alert("Se ha finalizado la compra",1,'ver_comprater&id='.$id_compra);
  //redir("?p=ver_compra&id=".$id_compra);
}

?>

            <div class="page-header">

                <div class="page-header__container container">

                    <div class="page-header__breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">

                                <li class="breadcrumb-item">
                                    <a href="?p=productos">Inicio</a>
                                    <svg class="breadcrumb-arrow" width="6px" height="9px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                    </svg>
                                </li>
                                
                                <li class="breadcrumb-item active" aria-current="page">Carrito</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <h1>Carrito</h1>
                    </div>
                </div>
            </div>

            <div class="cart block">
                <div class="container">
                    <table class="cart__table cart-table">
                        <thead class="cart-table__head">
                            <tr class="cart-table__row">
                                <th class="cart-table__column cart-table__column--image">Imagen</th>
                                <th class="cart-table__column cart-table__column--product">Producto</th>
                                <th class="cart-table__column cart-table__column--price">Precio</th>
                                <th class="cart-table__column cart-table__column--quantity">Cantidad</th>
                                <th class="cart-table__column cart-table__column--total">Total</th>
                                <th class="cart-table__column cart-table__column--remove"></th>
                            </tr>
                        </thead>
                        <tbody class="cart-table__body">
<?php
$monto_total=0;
     $id_cliente = $_SESSION['id_cliente'];
    $q = $mysqli->query("SELECT * FROM carro WHERE id_cliente = '$id_cliente'");
    while($r = mysqli_fetch_array($q)){


  $q2 = $mysqli->query("SELECT * FROM productos WHERE id = '".$r['id_producto']."'");
  $r2 = mysqli_fetch_array($q2);
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
  $cantidad = $r['cant'];
  $precio_unidad = $r2['price'];
  $precio_total = $cantidad * $preciototal;
  $imagen_producto = $r2['imagen'];
  $monto_total = $monto_total + $precio_total;
  $id_vendedor = $r2['id_vendedor'];
 

  ?>

                      
                            <tr class="cart-table__row">

                                <td class="cart-table__column cart-table__column--image">
                                    <div class="product-image">
                                        <a href="" class="product-image__body">
                                            <img class="product-image__img" src="productos/<?=$imagen_producto?>" alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="cart-table__column cart-table__column--product">
                                  <a  class="cart-table__product-name" href="?p=produc&id=<?=$r['id'];?>"><?=$nombre_producto?></a>
                                    <ul class="cart-table__options">
                                        <li>Color: Yellow</li>
                                        <li>Material: Aluminium</li>
                                    </ul>
                                </td>
                                <td class="cart-table__column cart-table__column--price" data-title="Precio"><?php
        if($r2['oferta']>0){
            ?>
            <del><?=number_format($r2['price'])?><?=$divisa?></del> <?=number_format($preciototal)?><?=$divisa?></center>
            <?php
            }else{
            ?>
            
            <?=number_format($r2['price'])?>
            <?=$divisa?>
           
            <?php
            }
            ?>
             <a onclick="modificar('<?=$r2['id']?>')" href="#"><i class="fa fa-edit" title="Modificar cantidad en carrito"></i></a>
          </td>
                                <td class="cart-table__column cart-table__column--quantity" data-title="Cantidad">
                                  <?=$cantidad?>&nbsp;&nbsp;
                                   

                                </td>
                                <td class="cart-table__column cart-table__column--total" data-title="Total"><?=number_format($precio_total)?> <?=$divisa?> </td>
                                <td class="cart-table__column cart-table__column--remove">
                                    <button type="button" class="btn btn-light btn-sm btn-svg-icon">
                                       <a href="?p=carrito&eliminar=<?=$r['id']?>"> <svg width="12px" height="12px">
                                            <use xlink:href="images/sprite.svg#cross-12"></use><
                                        </svg></a>
                                    </button>
                                </td>
                            </tr>
                              <?php

    }
    ?> 

                        </tbody>
                    </table>
                    <div class="cart__actions">
                        
                        <div class="cart__buttons">
                            <a href="?p=productos" class="btn btn-light">Continuar comprando</a>
                            <a href="" class="btn btn-primary cart__update-button">Actualizar carro</a>
                        </div>
                    </div>
                    <div class="row justify-content-end pt-5">
                        <div class="col-12 col-md-7 col-lg-6 col-xl-5">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Total del carrito</h3>
                                    <table class="cart__totals">
                                        <thead class="cart__totals-header">
                                            <tr>
                                                <th>Subtotal</th>
                                                <td>$5,877.00</td>
                                            </tr>
                                        </thead>
                                        <tbody class="cart__totals-body">
                                           
                                            <tr>
                                                <th>Tax</th>
                                                <td>
                                                    $0.00
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot class="cart__totals-footer">
                                            <tr>
                                                <th>Total</th>
                                                <td><?=number_format($monto_total)?> <?=$divisa?></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <form method="post" action="">
                                   <center> <button type="submit" href="#" name="finalizar" class="btn continue" style="
   border-color: #cc3333;
    background: #cc3333;
    color: #fff;
    fill: #fff;
    font-size: 1.375rem;
    height: calc(3.625rem + 2px);
    padding: 1.125rem 3rem;
    line-height: 1;
    font-weight: 500;
">Finalizar Compra</button></center></form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <?php

    }else{
  ?><center>
<img src="sin.png" width="900" height="500" style="
    max-width: 100%;
    height: auto;
    padding-top: 97px;
    padding-block-end: 160px;
"></center>
  <?php
    }?>
        <!-- site__body / end -->
      
   
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
    
  function modificar(idc){
    var new_cant = prompt("¿Cual es la nueva cantidad?");

    if(new_cant>0){

      window.location="?p=carrito&id="+idc+"&modificar="+new_cant;

    }

  }

</script>
           
   