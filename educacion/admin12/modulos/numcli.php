<?php
check_admin();

$s = $mysqli->query("SELECT * FROM clientev WHERE id = '$id'");
$r = mysqli_fetch_array($s);

if(isset($modificar)){
	$posicion = clear($posicion);
	$mysqli->query("UPDATE clientev SET posicion = '$posicion' WHERE id = '$id'");
	redir("?p=seg&id=$ruta&semana=$semana");
}
?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800">Modificar posoción</h1> 
          </div>

<br>
<form method="post" action="">
<div class="col-xs-6">
  <div class="form-group" style="margin-bottom: 1rem;
    display: inline-flex;
    width: 53%;">
                    <input type="number" class="form-control" placeholder="Numero de posicion" name="posicion"/>
                </div>
	</div><br>

	<div class="form-group" style="margin-bottom: 1rem;
    display: inline-flex;
    width: 53%;">
		<input class="btn btn-primary" type="submit" value="modificar" name="modificar"/>
	</div>
</form>