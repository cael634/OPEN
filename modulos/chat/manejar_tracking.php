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
check_admin();
//0 apenas comprado
//1 preparando compra
//2 en camino
//3 despachado
$s = $mysqli->query("SELECT * FROM compra WHERE estado != 7 ORDER BY fecha DESC");
if(isset($eliminar)){
	$eliminar = clear($eliminar);

$mysqli->query("DELETE FROM productos_compra WHERE id_compra = '$eliminar'");

	$mysqli->query("DELETE FROM compra WHERE id = '$eliminar'");
	redir("?p=manejar_tracking");
}
?>
<h1>Tracking</h1><br><br>
<div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
	<tr>
		<th>Cliente</th>
		<th>Fecha</th>
		<th>Monto</th>
		<th>Estatus</th>
		<th>Acciones</th>

		</tr>
	
<?php
while($r=mysqli_fetch_array($s)){
	$sc = $mysqli->query("SELECT * FROM clientes  WHERE id = '".$r['id_cliente']."'"); 
	$rc = mysqli_fetch_array($sc);
	$cliente = $rc['name'];
	$fecha = fecha($r['fecha']);
?>



<tr>

	<td><?=$cliente?></td>
	<td><?=$fecha?></td>
	<td><?=$r['monto']?><?=$divisa?></td>

	<td ><?=estado($r['estado'])?></td>



	
	<td>
		<a style="color:#08f" href="?p=manejar_tracking&eliminar=<?=$r['id']?>">
		<i class="fa fa-times"></i>
</a>

&nbsp; &nbsp;
			<a style="color:#08f" href="?p=manejar_status&id=<?=$r['id']?>">
				<i class="fa fa-edit"></i>
			</a>
&nbsp; &nbsp;
<a style="color:#08f" href="?p=ver_compra&id=<?=$r['id']?>">
	<i class= "fa fa-eye"></i>

		</td>
	</tr>

<?php
}
?>

</table>
</div>
</div>

