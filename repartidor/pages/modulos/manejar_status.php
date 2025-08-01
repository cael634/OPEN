<?php
check_admin();
$id = clear($id);
$s = $mysqli->query("SELECT * FROM compven WHERE id = '$id'");
$r = mysqli_fetch_array($s);
if(isset($modificar)){
	$estado = clear($estado);
	$mysqli->query("UPDATE compven SET estado = '$estado' WHERE id = '$id'");
	redir("index.php");
}
?>
<h1>Manejar Status</h1>
<br>
<form method="post" action="">
	<div class="form-group">
		<select class="form-control" name="estado">
			<option <?php if($r['estado'] == 0) { echo "selected"; } ?> value="0">Iniciando</option>
			<option <?php if($r['estado'] == 1) { echo "selected"; } ?> value="1">Preparando</option>
			<option <?php if($r['estado'] == 2) { echo "selected"; } ?> value="2">Terminado</option>
		
		</select>
	</div>

	<div class="form-group">
		<input class="btn btn-primary" type="submit" value="Modificar" name="modificar"/>
	</div>
</form>