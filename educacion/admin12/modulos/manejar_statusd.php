<?php
check_admin();
$id = clear($id);
$s = $mysqli->query("SELECT * FROM compven WHERE id = '$id'");
$r = mysqli_fetch_array($s);
if(isset($modificar)){
	$estado = clear($estado);
	$mysqli->query("UPDATE compven SET estado = '$estado' WHERE id = '$id'");
	redir("?p=seg&id=$ruta&semana=$semana");
}
?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800">Manejar estado</h1> 
          </div>
<br>
<form method="post" action="">
	<div class="form-group">
		<select class="form-control" name="estado">
			<option <?php if($r['estado'] == 0) { echo "selected"; } ?> value="0">Iniciado</option>
			<option <?php if($r['estado'] == 1) { echo "selected"; } ?> value="1">Revisado</option>
			<option <?php if($r['estado'] == 3) { echo "selected"; } ?> value="3">Esta por llegar</option>
			<option <?php if($r['estado'] == 2) { echo "selected"; } ?> value="2">Finalizado</option>
		</select>
	</div>

	<div class="form-group">
		<input class="btn btn-primary" type="submit" value="Modificar" name="modificar"/>
	</div>
</form>