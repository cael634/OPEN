  
<?php
check_admin("agregar_categoria");
if(isset($enviar)){
	$departamentos = clear($departamentos);
	$s = $mysqli->query("SELECT * FROM departamentos WHERE departamentos = '$departamentos'");
	if(mysqli_num_rows($s)>0){

		redir("");
	}else{
		$mysqli->query("INSERT INTO departamentos (departamentos) VALUES ('$departamentos')");

		redir("");
	}
}
if(isset($eliminar)){
	$eliminar = clear($eliminar);
	$mysqli->query("DELETE FROM departamentos WHERE id = '$eliminar'");

	redir("?p=agregar_categoria");
}
?>
<script >
	
</script>
<h1>Agregar Categoria</h1>

<form method="post" action="">
	<div class="form-group">
		<input type="text" class="form-control" name="departamentos" placeholder="departamentos"/>
	</div>

	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="enviar" value="Departamentos"/>
	</div>
</form><br>

<br>

<table class="table table-striped">
	<tr>
		<th>ID</th>
		<th>Categoria</th>
		<th>Acciones</th>
	</tr>

	<?php
	$q = $mysqli->query("SELECT * FROM departamentos ORDER BY departamentos ASC");
	while($r=mysqli_fetch_array($q)){
		?>
			<tr>
				<td><?=$r['id']?></td>
				<td><?=$r['departamentos']?>
				<td>
					<a href="?p=agregar_categoria&eliminar=<?=$r['id']?>"><i class="fa fa-times"></i></a>
				</td>
			</tr>
		<?php
	}
	?>
</table>