<?php
check_user('miscompras');
$s = $mysqli->query("SELECT * FROM compra WHERE id_cliente = '".$_SESSION['id_cliente']."'ORDER BY fecha DESC");
if(mysqli_num_rows($s)>0){
	?><br>
	<h1>&nbsp<i class="fas fa-shopping-basket"></i>&nbspMis compras</h1><br>
	<table class="table table-stripe">	
		<tr>
			<th>Fecha</th>
			<th>Monto</th>
			<td>Estado</td>
			<TD>Acciones</TD>
		</tr>
		<?php
	while($r=mysqli_fetch_array($s)){
		?>
		<tr>
			<td><?=fecha($r['fecha'])?></td>
			<td><?=number_format($r['monto'])?><?=$divisa?></td>
			<td><?=estado($r['estado'])?></td>
			<td>
				<a href="?p=ver_compra&id=<?=$r['id']?>">
					<i class="fa fa-eye"></i>
				</a>
		</tr>
		<?php
	}
	?>
</table>
	<?php
}else{
	?>
	<i>Usted no ha comprado</i>
	<?php
}
