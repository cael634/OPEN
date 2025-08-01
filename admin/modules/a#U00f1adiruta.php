<?php
check_admin();
$id = clear($id);
 $id_vendedor = clear($_SESSION['id_vendedor']);
$s = $mysqli->query("SELECT * FROM clientenuevo WHERE id = '$id'");
$r = mysqli_fetch_array($s);
if(isset($modificar)){
	$estado = clear($estado);
   $mysqli->query("INSERT INTO clientev (ruta,id_cliente,id_vendedor) VALUES ('$estado','".$r['id_cliente']."','$id_vendedor')");
   $mysqli->query("DELETE FROM clientenuevo WHERE id = '$id'");
    redir("?p=clientes");
}
?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800">Modificar ruta</h1> 
          </div>

<br>
<form method="post" action="">
<div class="col-xs-6">
  <select class="form-control" name="estado" id="estado" required class="form-control">
 <option value="">Rutas</option>
         <?php
         $id_vendedor = clear($_SESSION['id_vendedor']);
                $qn = $mysqli->query("SELECT * FROM rutas WHERE id_vendedor = '$id_vendedor' ");
                while($rl=mysqli_fetch_array($qn)){
                    ?>
                        <option value="<?=$rl['id']?>" ><?=$rl['rutas']?></option>
                       
                    <?php

                }

            ?>
</select>
	</div><br>

	<div class="form-group">
		<input class="btn btn-primary" type="submit" value="Modificar" name="modificar"/>
	</div>
</form>