                       <style type="text/css">
                           .card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #c1c5d0;
    border-radius: .35rem;
    color: black;
    width: 100%;
}
.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #6e707e;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #d1d3e2;
    border-radius: .35rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.row {
    display: flex;
    width: 116%;
    flex-wrap: wrap;
    margin-right: -.75rem;
    margin-left: -.75rem;
}
.col-lg-9 {
    flex: 0 0 100%;
    max-width: 100%;
}
.card-body {
    flex: 1 1 auto;
    padding: 9px 8px 10px 28px;
}
                       </style>
<?php
check_admin();
$id_vendedor = clear($_SESSION['id_vendedor']);
if(isset($enviar)){
	$repartidores= clear($repartidores);
	


	

		$mysqli->query("INSERT INTO respartirutas(repartidor,ruta,id_vendedor) VALUES ('$repartidores','$id','$id_vendedor')");
		
		redir("?p=agregarepar&id=$id");
	

}
if(isset($enviar12)){
 redir("?p=lunes");

}

if(isset($eliminar)){
	$eliminar = clear($eliminar);
	$mysqli->query("DELETE FROM respartirutas WHERE id = '$eliminar'");

	redir("?p=agregarepar&id=$id");
}

?>



  <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="card">
                                <div class="card-header">
                                    <h5 >Agregar repartidores a la ruta</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-body">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-lg-10 col-xl-8">
                                            <form method="post" action="">
                                           
                                            
                                              
      <label for="checkout-first-name">Repartidores</label>
      <select name="repartidores" id="repartidores" class="form-control form-control-select2" style="
    display: block;
    width: 130%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #29393a;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #d1d3e2;
    border-radius: .35rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;">
              <option value="">Repartidores</option>
              <?php  
  

		$qo = $mysqli->query("SELECT * FROM seguimiento WHERE id_vendedor= '".$_SESSION['id_vendedor']."'");
		while($ro=mysqli_fetch_array($qo)){
		?>
        <option value="<?=$ro['id']?>"><?=$ro['name']?></option> 
        <?php
    }
    ?>
    
 
               </select> 
<br><div class="row">
                                             <div class="form-group" style="    padding: 0px 320px 0px 12px;">
    <input type="submit" class="btn btn-primary" name="enviar" value="Agregar repartidor"/>
  </div>

   <div class="form-group" style="text-align: end">
    <input type="submit" class="btn btn-primary" name="enviar12" value="Terminar" style="background-color: #36373a;
    border-color: #36373a;
" />
  </div>
  &nbsp;&nbsp;&nbsp;Puede relizar este proceso si lo desas luego en rutas. Al agregar repartidores aparecera esta ruta y sus pedidos en la App.
      </div>                                  </form>
                                   </div>
                           </div></div></div>
                        <?php

check_admin();
?>

<br>
<?php
$id_vendedor = clear($_SESSION['id_vendedor']);
$contador789=0;
$q = $mysqli->query("SELECT * FROM respartirutas WHERE id_vendedor = '$id_vendedor' AND ruta = '$id'   ");
while ($rp = mysqli_fetch_array($q)){
    $contador789++;
}
if($contador789!=0){
            ?>
     <div class="card shadow mb-4">
            
            <div class="card-body" style="font-weight: 600;">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="    color: black;">
             <br>   Repartidores agregados a esta ruta:<br><br>  <thead>
                    <tr>
        <th>Nombre del repartidor</th>
        <th>Acciones</th>
                
                    </tr>
                  </thead>
                 
                  <tbody>

 <?php
    $id_vendedor = clear($_SESSION['id_vendedor']);

$q = $mysqli->query("SELECT * FROM respartirutas WHERE id_vendedor = '$id_vendedor' AND ruta = '$id'   ");
while ($rp = mysqli_fetch_array($q)){
    $repartidore=$rp['repartidor'];
    $qv = $mysqli->query("SELECT * FROM seguimiento WHERE id ='$repartidore' ");
    $rv = mysqli_fetch_array($qv);

            ?>
                <tr>
                    <td><a href="?p=rutainf&id=<?=$rp['rutas'];?>"><?=$rv['name']?></a></a></td>
              
                  

                   <td>
                        
                   
                        <a style="color:#08f" href="?p=agregarepar&eliminar=<?=$rp['id']?>&id=<?=$id?>"><i class="fa fa-times"></i></a>

                    </td>
                </tr>
            <?php
        }
    ?>
</table>
   <?php
        }else{
            ?>
          <center><as style="    font-size: 21px;">Aqui abajo apareceran los nombres de los repartidores que asocies a esta ruta</as></center>  
            <?php
        }

    ?>