<br>
    <br>
    <br><br><br>
<n style="
    display: flex;
    font-size: 30px;
"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ofertas de Hoy:</n>    <br>
    <br>
   

    <style type="text/css">
  html, body {
   font-size: 14px;
   line-height: 1.4;
   background-color: #fff;
   color: #333;
}
 *, *:before, *:after {
   -webkit-box-sizing: border-box;
   -moz-box-sizing: border-box;
   box-sizing: border-box;
}
 .grid-row {
   display: inline-block;
   flex-wrap: wrap;
   width: 1200px;
   margin: 0 auto;
   padding-top: 30px;
}
.cuerpo {
    background: #fff;
    padding: 0px;
    min-height: 500px;
    text-align: center;
}
.product {
    width: 178px;
    margin-bottom: 0px;
    padding-left: 6px;
    padding-right: 6px;
    display: inline-block;
    height: 332px;
}
 .product--card {
   border: 1px solid #ddd;
   background: #fff;
   position: relative;
   overflow: hidden;
   width: 100%;
   display: flex;
   flex-direction: column;
}
.img_producto {
    text-align: center;
    padding: 4px;
    min-height: 100px;
    max-height: 141px;
    max-width: 141px;
    min-width: 100px;
}
 .product .product--image {
   padding-bottom: 81.88%;
   position: relative;
   border-bottom: 1px solid #ddd;
   -moz-box-sizing: content-box;
   -webkit-box-sizing: content-box;
   box-sizing: content-box;
   display: block;
   overflow: hidden;
   height: 0;
}
 .img-responsive {
   max-width: 100%;
   width: 100%;
   height: auto;
   -moz-transition: all 0.3s;
   -o-transition: all 0.3s;
   -webkit-transition: all 0.3s;
   transition: all 0.3s;
}
 .product--title {
   display: block;
   color: #333;
   padding-bottom: 0 !important;
   text-decoration: none;
   padding: 20px;
}
 .product--brand {
   color: #777;
   display: block;
   padding-top: 0 !important;
   padding: 20px;
   flex: 1 0 auto;
}
 .product a {
   color: inherit;
   text-decoration: none;
   display: block;
}
button, input {
    overflow: visible;
    cursor: pointer;
    text-decoration: none;
    padding: 6px;
    font-weight: 100;
    font-size: 14px;
    color: #000000;
    background-color: transparent;
    border-radius: 6px;
    border: transparent;
}
 .product .product--price {
   padding-top: 0 !important;
   padding: 20px;
}
 .product .price--sell-price, .product .price--discount-price {
   font-size: 1.5rem;
}
 .price--sell-price {
   color: #28a528;
}
 .product .product--price .was-price, .product .product--price .price--rrp {
   font-size: 1rem;
}
 .price--sell-price.was-price, .price--rrp {
   color: #777;
   font-weight: 100;
   text-decoration: line-through;
}
 .price--discount-price {
   color: #0074d9;
}
 .tags {
   display: block;
   position: absolute;
   z-index: 2;
   text-align: right;
   bottom: 6px;
   right: 12px;
}
 .tags > .availability {
   text-transform: uppercase;
   color: #fff;
   line-height: 1;
   padding: 4px 5px;
   display: inline-block;
   margin-left: 6px;
   margin-bottom: 6px;
   font-size: 0.75rem;
}
 .tags > .availability.almost-gone {
   background-color: #ff9600;
}
 .tags > .availability.discount {
   background-color: #0074d9;
}
 .tags > .availability.sold-out {
   background-color: #f00;
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
if(isset($cat)){
    $q = $mysqli->query("SELECT * FROM productos WHERE id_categoria = '$cat' AND oferta>0 ORDER BY id DESC");
}else{
    $q = $mysqli->query("SELECT * FROM productos WHERE oferta>0 ORDER BY id DESC");
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

    <div class="product">
    <div class="product--card">
      <a class="product--image" href="#" title="<?=$r['name']?>">
        <img class="img_producto" src="productos/<?=$r['imagen']?>"/>
       
        <span class="tags"></span>
      </a>
      <a class="product--title" ><a href="?p=produc&id=<?=$r['id'];?>"><?=$r['name']?></a></a>
      <div class="product--brand">
            <?php
            
            $so = $mysqli->query("SELECT * FROM admins WHERE id = '$id_vendedor'");
$ro = mysqli_fetch_array($so);
            ?>

        
        <a>Vendedor:<br> <?=$ro['name']?></a>
      </div>
      <a class="product--price" >
        <span class="product--price-inner">
          <?php
        if($r['oferta']>0){
            ?>
            <div class="price--rrp"><?=number_format($r['price'])?><?=$divisa?> </div>
          <div class="price--sell-price"><?=number_format($preciototal)?><?=$divisa?></div>
           
            <?php
            }else{
            ?>
            <div class="price--sell-price"> <?=number_format($r['price'])?><?=$divisa?></div><bR>
          
             <?php
}
?>

      </a>
    </div>
  </div>
       
    <?php
}
?>

<script type="text/javascript">
    
    function agregar_carro(idp){
        var cant = prompt("¿Que cantidad desea agregar?",1);
        if(cant.length>0){
            window.location="?p=ofertas&agregar="+idp+"&cant="+cant;
        }
    }
    function redir_cat(){
        window.location="?p=ofertas&cat="+$("#categoria").val();
    }
</script>