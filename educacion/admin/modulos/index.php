<?php

$host_mysql = "localhost";
$user_mysql = "root";
$pass_mysql = "";
$db_mysql = "open";
$mysqli = mysqli_connect($host_mysql,$user_mysql,$pass_mysql,$db_mysql);
$connection = mysqli_connect($host_mysql,$user_mysql,$pass_mysql,$db_mysql);
function clear($var){
  htmlspecialchars($var);
  return $var;
}
function check_admin(){
  if(!isset($_SESSION['id_vendedor'])){
    redir("?p=admin&return=$url");
  }else{
  }}

function check_repartidor(){
  if(!isset($_SESSION['id_repartidor'])){
    redir("?p=admin&return=$url");
  }else{
  }}

function redir($var){
  ?>
  <script>
    window.location="<?=$var?>";
  </script>
  <?php
  die();
}
function alert($txt,$type,$url){
  //"error", "success" and "info".
  if($type==0){
    $t = "error";
  }elseif($type==1){
    $t = "success";
  }elseif($type==2){
    $t = "info";
  }else{
    $t = "info";
  }
  echo '<script>swal({ title: "Alerta", text: "'.$txt.'", icon: "'.$t.'"});';
  echo '$(".swal-button").click(function(){ window.location="?p='.$url.'"; });';
  echo '</script>';
}
function check_user($url){
  if(!isset($_SESSION['id_cliente'])){
    redir("?p=registro&return=$url");
  }else{
  }
}

function nombre_cliente($id_cliente){
  $mysqli = connect();
  $q = $mysqli->query("SELECT * FROM clientes WHERE id = '$id_cliente'");
  $r = mysqli_fetch_array($q);
  return $r['name'];
}
function conectarse(){
  $link = mysqli_connect("localhost","root","");
  if(!$link)
    exit();
  $bd = "open";
  $con=mysqli_select_db("transportev",$link);
  if(!$con)
    exit();
  return $link;
}

function connect(){
  $host_mysql = "localhost";
  $user_mysql = "root";
  $pass_mysql = "";
  $db_mysql = "open";
  $mysqli = mysqli_connect($host_mysql,$user_mysql,$pass_mysql,$db_mysql);
  return $mysqli;

}
function fecha($fecha){
  $e = explode("-",$fecha);
  $year = $e[0];
  $month = $e[1];
  $e2 = explode(" ",$e[2]);
  $day = $e2[0];
  $time = $e2[1];
  $e3 = explode(":",$time);
  $hour = $e3[0];
  $mins = $e3[1];
  return $year."/".$month."/".$day." ".$hour.":".$mins;
}

function estado($id_estado){
      if($id_estado == 0){

    
    ?><span class="badge badge-success">Iniciando</span>
    <?php

  }elseif($id_estado==1){
    
    ?><span class="badge badge-info"></span>
    <?php
  }elseif($id_estado == 2){
    ?><span class="badge badge-warning">Procesando el pedido</span>
    <?php
  }elseif($id_estado == 3){
    ?><span class="badge badge-danger">Terminado</span>
    <?php
  }else{
    
    ?><span class="badge badge-warning">Error</span>
  <?php
}

    
    
}

function admin_name_connected($id_vendedor){
  $mysqli = connect();
  $q = $mysqli->query("SELECT * FROM admins WHERE id = '$id_vendedor'");
  $r = mysqli_fetch_array($q);
  return $r['name'];
}





function estado_pago($estado){
  if($estado==0){
    $estado = "Sin Verificar";
  }elseif($estado==1){
    $estado = "Verificado y Aprobado";
  }elseif($estado==2){
    $estado = "Rembolsado";
  }else{
    $estado = "Sin Verificar";
  }
  return $estado;
}


$id_vendedor=$_GET['id_vendedor'];
$id=$_GET['id'];
$s = $mysqli->query("SELECT * FROM compven WHERE id = '$id'");
$rm = mysqli_fetch_array($s);
$sl = $mysqli->query("SELECT * FROM compra WHERE id= '".$rm['compra']."'");
$r = mysqli_fetch_array($sl);
$sc = $mysqli->query("SELECT * FROM clientes WHERE id = '".$r['id_cliente']."'");
$rc = mysqli_fetch_array($sc);
$sx = $mysqli->query("SELECT * FROM admins WHERE id = '$id_vendedor'");
$rx = mysqli_fetch_array($sx);

$nombre = $rc['name'];

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Quick Invoice</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="control-bar">
  <div class="container">
    <div class="row">
      <div class="col-2-4">
        <div class="slogan">InvoiceKit</div>

        
      </div>
      <div class="col-4 text-right">
        <a href="javascript:window.print()">Guardar / Imprimir</a>
      </div><!--.col-->
    </div><!--.row-->
  </div><!--.container-->
</div><!--.control-bar-->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>


<header class="row">
  <div class="logoholder text-center" contenteditable>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Coca-Cola_bottle_cap.svg/1200px-Coca-Cola_bottle_cap.svg.png" style="width:55px;">
  </div><!--.logoholder-->


  <div class="me" contenteditable>
    <p>
      <strong>Empresa: <?=$rx['name']?></strong><br>
      Ubicación:  <?=$rx['departamento']?>/<?=$rx['municipio']?><br>
      Dirección:  <?=$rx['direccion']?>
    </p>
  </div><!--.col-->
  <div class="info">
    <p contenteditable>
      Web: <a href="http://volkerotto.net">www.volkerotto.net</a><br>
      Correo: <a href="mailto:hello@volkerotto.net"><?=$rx['correo']?></a><br>
      Telefono: <?=$rx['telefono']?><br>
    
    </p>
  </div>
<!--.col-->
</header>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Invoice Template</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'><link rel="stylesheet" href="./style1.css">

</head>
<body>

<!-- partial:index.partial.html -->
<div class="container invoice">
  <div class="invoice-header">
    <div class="row">
      <div class="col-xs-8">
        <h1>Factura </h1>
        <h4 class="text-muted">N°: 554775/R1 | Fecha de compra: <?=fecha($rm['fecha'])?></h4>
      </div>
      
    </div>
  </div>
  <div class="invoice-body">
    <div class="row">
      
      <div class="col-xs-7" style="width: 670px;">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Detalles del comprador</h3>
          </div>
          <div class="panel-body">
            <dl class="dl-horizontal">
              <dt>Nombre del cliente:&nbsp;</dt>
              <dd><?=$rc['name']?></dd>
              <dt>Nombre del negocio:&nbsp;</dt>
              <dd><?=$rc['nombrev']?></dd>
              <dt>Dirección:&nbsp;</dt>
              <dd><?=$rc['direccion']?></dd>
              <dt>Numero de telefono:&nbsp;</dt>
              <dd><?=$rc['number']?></dd>
           
              <dt>&nbsp;</dt>
              <dd>&nbsp;</dd>
          </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Servicios / Productos</h3>
      </div>
      <table class="table table-bordered table-condensed">
        <thead>
          <tr>
            <th>Detalles del artículo</th>
            <th class="text-center colfix">Costo unidad</th>
            <th class="text-center colfix">Suma de costo</th>
            <th class="text-center colfix">Descuento</th>
            <th class="text-center colfix">Impuesto</th>
            <th class="text-center colfix">Total</th>
          </tr>
        </thead>
        <tbody>

    <?php
       $impto = 0;
        $totaltotaltotal=0;
        $subt= 0;
        $destotal =0 ;
        $totalconofer= 0;

    $sp = $mysqli->query("SELECT * FROM productos_compra WHERE id_vendedor = '$id_vendedor' AND id_compra = '".$rm['compra']."'");
    while($rp=mysqli_fetch_array($sp)){
      $spro = $mysqli->query("SELECT * FROM productos WHERE id = '".$rp['id_producto']."'");
      $rpro = mysqli_fetch_array($spro);
      $nombre_producto = $rpro['name'];
      $codigo = $rpro['codigo'];
      $montototal = $rp['monto'] * $rp['cantidad'];
      $totofer = (($montototal/100)*$rp['oferta'] )*$rp['monto'];
      $imp = ($montototal/100)* $rp['impuesto'];
      $totaltotal = $montototal + $imp -$totofer;
      $conofer = $montototal - $totofer;
      $impto = $impto + $imp;
      $totaltotaltotal = $totaltotaltotal + $totaltotal;
      $subt = $subt + $montototal;
      $destotal = $destotal + $totofer;
      $totalconofer = $totalconofer + $conofer;

      ?>
          <tr>
            <td>
              <?=$nombre_producto?>
              <br>
              <small class="text-muted"><?=$codigo?></small>
            </td>
            <td class="text-right">
              <span class="mono"><?=number_format($rp['monto'])?></span>
              <br>
              <small class="text-muted">Sin impuesto</small>
            </td>
            <td class="text-right">
              <span class="mono"><?=number_format($montototal)?></span>
              <br>
              <small class="text-muted"><?=$rp['cantidad']?> Unidades</small>
            </td>
            <td class="text-right">
              <span class="mono">- $<?=number_format($totofer)?></span>
              <br>
              <small class="text-muted">Descuento <?=number_format($rp['oferta'])?>%</small>
            </td>
            <td class="text-right">
              <span class="mono">+ <?=number_format($imp)?></span>
              <br>
              <small class="text-muted">IVA <?=number_format($rp['impuesto'])?>%</small>
            </td>
            <td class="text-right">
              <strong class="mono"><?=number_format($totaltotal)?></strong>
              <br>
              <small class="text-muted mono"><?=number_format($conofer)?></small>
            </td>
          </tr>

          <?php
    }
  ?>
        </tbody>
      </table>
    </div>
    <div class="panel panel-default">
      <table class="table table-bordered table-condensed">
        <thead>
          <tr>
            <td class="text-center col-xs-1">Sub Total</td>
            <td class="text-center col-xs-1">Descuento</td>
            <td class="text-center col-xs-1">Total</td>
            <td class="text-center col-xs-1">Impuesto</td>
            <td class="text-center col-xs-1">Final</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th class="text-center rowtotal mono">$<?=number_format($subt)?></th>
            <th class="text-center rowtotal mono">-$<?=number_format($destotal)?></th>
            <th class="text-center rowtotal mono">$<?=number_format($totalconofer)?></th>
            <th class="text-center rowtotal mono">$<?=number_format($impto)?></th>
            <th class="text-center rowtotal mono">$<?=number_format($totaltotaltotal)?></th>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="row">
      <div class="col-xs-7">
        <div class="panel panel-default">
          <div class="panel-body">
            <i>Observaciones:</i>
            <hr style="margin:3px 0 5px" /> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit repudiandae numquam sit facere blanditiis, quasi distinctio ipsam? Libero odit ex expedita, facere sunt, possimus consectetur dolore, nobis iure amet vero.
          </div>
        </div>
      </div>
      <div class="col-xs-5">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Metodo de pago</h3>
          </div>
          <div class="panel-body">
            <p>For your convenience, you may deposite the final ammount at one of our banks</p>
            <ul class="list-unstyled">
              <li>Alpha Bank - <span class="mono">MO123456789456123</span></li>
              <li>Beta Bank - <span class="mono">MO123456789456123</span></li>
              <li>Gamma Bank - <span class="mono">MO123456789456123</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="invoice-footer">
    Thank you for choosing our services.
    <br/> We hope to see you again soon
    <br/>
    <strong>~ACME~</strong>
  </div>
</div>
<!-- partial -->
  
</body>
</html>
<style type="text/css">
  @charset "UTF-8";
 html {
   font-size: 12px;
   line-height: 1.5;
   color: #000;
   background: #ddd;
   box-sizing: border-box;
}
.invoice .invoice-body {
    border-radius: 10px;
    padding: 6px!important;
    background: #FFF;
}
.dl-horizontal dt {
    float: left;
    width: 126px!important;
    overflow: hidden;
    clear: left;
    text-align: inherit!important;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.logoholder {
    width: 14% !important;
}
 body {
   margin: 6rem auto 0;
   max-width: 850px;
   background: white;
   border: 1px solid #aaa;
   padding: 2rem;
}
 .container {
   max-width: 800px;
   margin-left: auto;
   margin-right: auto;
   padding-left: 1rem;
   padding-right: 1rem;
}
 *, *:before, *:after {
   box-sizing: inherit;
}
 [contenteditable]:hover, [contenteditable]:focus, input:hover, input:focus {
   background: rgba(241, 76, 76, 0.1);
   outline: 2px solid #f14c4c;
}
 .group:after, .row:after, .invoicelist-footer:after {
   content: "";
   display: table;
   clear: both;
}
/** * Small Grid **/
 .row {
   position: relative;
   display: block;
   width: 100%;
   font-size: 0;
}
 .col, .logoholder, .me, .info, .bank, [class*="col-"] {
   vertical-align: top;
   display: inline-block;
   font-size: 1rem;
   padding: 0 1rem;
   min-height: 1px;
}
 .col-4 {
   width: 25%;
}
 .col-3 {
   width: 33.33%;
}
 .col-2 {
   width: 50%;
}
 .col-2-4 {
   width: 75%;
}
 .col-1 {
   width: 100%;
}
 .text-center {
   text-align: center;
}
 .text-right {
   text-align: right;
}
 a {
   color: #f14c4c;
   text-decoration: none;
}
 p {
   margin: 0;
}
 .control-bar {
   position: fixed;
   top: 0;
   left: 0;
   right: 0;
   z-index: 100;
   background: #f14c4c;
   color: white;
   line-height: 4rem;
   height: 4rem;
}
 .control-bar .slogan {
   font-weight: bold;
   font-size: 1.2rem;
   display: inline-block;
   margin-right: 2rem;
}
 .control-bar label {
   margin-right: 1rem;
}
 .control-bar a {
   margin: 0;
   padding: 0.5em 1em;
   background: rgba(255, 255, 255, 0.8);
}
 .control-bar a:hover {
   background: white;
}
 .control-bar input {
   border: none;
   background: rgba(255, 255, 255, 0.2);
   padding: 0.5rem 0;
   max-width: 30px;
   text-align: center;
}
 .control-bar input:hover {
   background: rgba(255, 255, 255, 0.3);
}
 .hidetax .taxrelated {
   display: none;
}
 .showtax .notaxrelated {
   display: none;
}
 .hidedate .daterelated {
   display: none;
}
 .showdate .notdaterelated {
   display: none;
}
code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 11px;
    /* font: inherit; */
    font-size: 11px;
    vertical-align: baseline;
}
/** * HEADER */
 header {
   margin: 1rem 0 0;
   padding: 0 0 2rem 0;
   border-bottom: 3pt solid #f14c4c;
}
 header p {
   font-size: 0.9rem;
}
 header a {
   color: #000;
}
 .logo {
   margin: 0 auto;
   width: auto;
   height: auto;
   border: none;
   fill: #f14c4c;
}
 .logoholder {
   width: 10%;
}
 .me {
   width: 30%;
}
 .info {
   width: 30%;
}
 .bank {
   width: 30%;
}
/** * SECTION */
 .section {
   margin: 3rem 0 0;
}
 .smallme {
   display: inline-block;
   text-transform: uppercase;
   margin: 0 0 2rem 0;
   font-size: 0.9rem;
}
 .client {
   margin: 0 0 3rem 0;
}
 h1 {
   margin: 0;
   padding: 0;
   font-size: 2rem;
   color: #f14c4c;
}
 .details input {
   display: inline;
   margin: 0 0 0 0.5rem;
   border: none;
   width: 50px;
   min-width: 0;
   background: transparent;
   text-align: left;
}
 .rate:before, .price:before, .sum:before, .tax:before, #total_price:before, #total_tax:before {
   content: '€';
}
/** * INVOICELIST BODY */
 .invoicelist-body {
   margin: 1rem;
}
 .invoicelist-body table {
   width: 100%;
}
 .invoicelist-body thead {
   text-align: left;
   border-bottom: 2pt solid #666;
}
 .invoicelist-body td, .invoicelist-body th {
   position: relative;
   padding: 1rem;
}
 .invoicelist-body tr:nth-child(even) {
   background: #ccc;
}
 .invoicelist-body tr:hover .removeRow {
   display: block;
}
 .invoicelist-body input {
   display: inline;
   margin: 0;
   border: none;
   width: 80%;
   min-width: 0;
   background: transparent;
   text-align: left;
}
 .invoicelist-body .control {
   display: inline-block;
   color: white;
   background: #f14c4c;
   padding: 3px 7px;
   font-size: 0.9rem;
   text-transform: uppercase;
   cursor: pointer;
}
 .invoicelist-body .control:hover {
   background: #f36464;
}
 .invoicelist-body .newRow {
   margin: 0.5rem 0;
   float: left;
}
 .invoicelist-body .removeRow {
   display: none;
   position: absolute;
   top: 0.1rem;
   bottom: 0.1rem;
   left: -1.3rem;
   font-size: 0.7rem;
   border-radius: 3px 0 0 3px;
   padding: 0.5rem;
}
/** * INVOICE LIST FOOTER */
 .invoicelist-footer {
   margin: 1rem;
}
 .invoicelist-footer table {
   float: right;
   width: 25%;
}
 .invoicelist-footer table td {
   padding: 1rem 2rem 0 1rem;
   text-align: right;
}
.invoice {
    width: 970px !important;
    margin: 0px auto !important;
}
 .invoicelist-footer table tr:nth-child(2) td {
   padding-top: 0;
}
 .invoicelist-footer table #total_price {
   font-size: 2rem;
   color: #f14c4c;
}
/** * NOTE */
 .note {
   margin: 1rem;
}
 .hidenote .note {
   display: none;
}
 .note h2 {
   margin: 0;
   font-size: 1rem;
   font-weight: bold;
}
/** * FOOTER */
 footer {
   display: block;
   margin: 1rem 0;
   padding: 1rem 0 0;
}
 footer p {
   font-size: 0.8rem;
}
/** * PRINT STYLE */
.control-bar {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 100;
    background: #e2013b !important;
    color: white;
    line-height: 4rem;
    height: 4rem;
} 
header {
    margin: 1rem 0 0;
    padding: 0 0 2rem 0;
    border-bottom: 3pt solid #e2013b !important;
}
 @media print {
   html {
     margin: 0;
     padding: 0;
     background: #fff;
  }
   body {
     width: 100%;
     border: none;
     background: #fff;
     margin: 0;
     padding: 0;
  }
   .control, .control-bar {
     display: none !important;
  }
   [contenteditable]:hover, [contenteditable]:focus {
     outline: none;
  }
}
 
</style>
