<?php
check_admin();
$id = clear($id);
$s = $mysqli->query("SELECT * FROM entregafecha WHERE compven = '$id'");
$r = mysqli_fetch_array($s);
if(isset($modificar)){
if($r['compven']==0){
	$mysqli->query("UPDATE compven SET ruta = '$select5' WHERE id = '$id'");
	$mysqli->query("INSERT INTO entregafecha (compven,fecha) VALUES ('$id',NOW())");
	redir("?p=manejar_tracking");
}else{
	$mysqli->query("UPDATE compven SET ruta = '$select5' WHERE id = '$id'");
	$mysqli->query("UPDATE entregafecha SET fecha = NOW() WHERE compven = '$id'");
}
	redir("?p=manejar_tracking");
}

?>
 <h1 class="h3 mb-2 text-gray-800" style="padding: 0px 0px 0px;">Vincular repartidor de este pedido.</h1>
 *Al modificarse aparecera en la app este pedido a entregar hoy.<br>

<br>
<form method="post" action="">
	<div class="form-group">
                                                <label for="checkout-country" style="color: black">Repartidores:</label>
                                           
                                                <select name="select5" id="select5" class="form-control form-control-select2">

                                                 <?php
                                                 $sx = $mysqli->query("SELECT * FROM compven WHERE id = '$id'");
                                                  $rx = mysqli_fetch_array($sx);
                                                  $entreg=$rx['ruta'];
                                                 if($entreg!=0){
                                                  
                                                  $qn = $mysqli->query("SELECT * FROM seguimiento WHERE id='$entreg'");
                                                  $rn = mysqli_fetch_array($qn);

                                                 ?>	
                                               <option value="<?=$entreg?>"><?=$rn['name']?></option>
                                               <?php
                                           }else{
                                               ?>
                                               <option value="">Repartidor</option>
                                           <?php
}
                                         $qn = $mysqli->query("SELECT * FROM seguimiento WHERE id_vendedor= '".$_SESSION['id_vendedor']."' ");
                                           while($rl=mysqli_fetch_array($qn)){
                                            ?>
                                           <option value="<?=$rl['id']?>" ><?=$rl['name']?></option>
                       
                                          <?php

                                                }

                                               ?>
                                             </select>
                                            </div>

	<div class="form-group">
		<input class="btn btn-primary" type="submit" value="Modificar" name="modificar"/>
	</div>
</form>