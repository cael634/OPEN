<?php
check_admin();
$id = clear($id);

if(isset($modificar)){

	$mysqli->query("UPDATE compven SET ruta = '$select5',semana='$select22' WHERE id = '$id'");


	redir("?p=manejar_tracking");
}

?>
 <h1 class="h3 mb-2 text-gray-800" style="padding: 0px 0px 0px;">Vincular o cambiar ruta de este pedido.</h1>
 <br>

<br>
<form method="post" action="">
	<div class="form-group">
                                                <label for="checkout-country" style="color: black">Rutas:</label>
                                           
                                                <select name="select5" id="select5" class="form-control form-control-select2">

                                                 <?php
                                                 $sx = $mysqli->query("SELECT * FROM compven WHERE id = '$id'");
                                                  $rx = mysqli_fetch_array($sx);
                                                  $entreg=$rx['ruta'];
                                                 if($entreg!=0){
                                                  
                                                  $qn = $mysqli->query("SELECT * FROM rutas WHERE id='$entreg'");
                                                  $rn = mysqli_fetch_array($qn);

                                                 ?>	
                                               <option value="<?=$entreg?>"><?=$rn['rutas']?></option>

                                               <?php
                                           }else{
                                               ?>
                                               <option value="">Rutas</option>
                                           <?php
}
                                         $qn = $mysqli->query("SELECT * FROM rutas WHERE id_vendedor= '".$_SESSION['id_vendedor']."' ");
                                           while($rl=mysqli_fetch_array($qn)){
                                            ?>
                                           <option value="<?=$rl['id']?>" ><?=$rl['rutas']?></option>
                       
                                          <?php

                                                }

                                               ?>
                                             </select>
                                            </div>
                                            <?php
                                            $semana=date('W');
                                            $semana1=date('W')+1;
                                            ?>
                                               <div class="form-group">
                                                <label for="checkout-country" style="color:black">Elegir semana de entrega</label>
                                           
                                                 <select name="select22" id="select22" class="form-control form-control-select2">
                                               <option value="<?=$semana?>">Esta semana</option>
                                               <option value="<?=$semana1?>">Proxima semana</option>  
                                             </select>
                                            </div>

	<div class="form-group">
		<input class="btn btn-primary" type="submit" value="Modificar" name="modificar"/>
	</div>
</form>