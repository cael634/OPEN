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
?><br><br><br>
 <h1>Fecha de compra : <span style="color:#08f"><?=fecha($r['fecha'])?></span></h1><br>


 <FONT SIZE=5>Monto total:  <?=number_format($r['monto'])?><?=$divisa?></FONT><br><br>


 <table class="table table-striped">
  <tr><thead>

    <th><center>Empresa</center></th>
    <th><center>Monto</center></th>
    <th><center>Estado</center></th>
    <th><center>Confirmación</center></th>
    <th><center>Ver compra</center></th>

    
    
</thead>
  </tr>
  <?php

  $se = $mysqli->query("SELECT * FROM compven WHERE compra = '".$r['id']."'");
  while ($re = mysqli_fetch_array($se)){
    $id_vendedor = $re['id_vendedor'];
    $so = $mysqli->query("SELECT * FROM admins WHERE id = '$id_vendedor'");
    $ro = mysqli_fetch_array($so);
      ?>
        <tr>
          <td><center><?=$ro['name']?></center></td>
          <td><center><?=number_format($re['monto'])?><?=$divisa?></center></td>
          
  <td><center><?=estado($re['estado'])?></center>
  <td><center><img src="comprobar.png" width="30" height="30"></center></td>
    <td><center> 
        <a style="color:#08f" href="?p=ver_compraven&id=<?=$r['id'];?>&id_vendedor=<?=$id_vendedor;?>&monto=<?=$re['monto'];?>">
      <svg class="svg-inline--fa fa-eye fa-w-18" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="" style="
    color: #000;
"><path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"></path></svg></i>

        </center>
    </td>
<!---<button class="btn btn-warning pull-right">Confirmar</i></button>--->
 
<style >
  

table{
  background-color: white;
  text-align: left;
  border-collapse: collapse;
  width: 100%;
}
.cuerpo {
    background: #fff;
    padding: 30px;
    min-height: 500px;
    text-align: inherit;
}

th, td{
  padding: 20px;
}

thead{
  background-color: #246355;
  border-bottom: solid 5px #0F362D;
  color: white;
}

tr:nth-child(even){
  background-color: #ddd;
}

tr:hover td{
  background-color: #369681;
  color: white;
}
a {
    color: #060000;
    text-decoration: none;
    background-color: transparent;
}


  * {
    font-family: 'Droid Serif', serif;
}


</style>

 <?php
}
 ?>
</table>
<?php
  }else{
    redir("?p=miscompras");
}
