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
    width: 130%;
}
.form-control {
    display: block;
    width: 130%;
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
                       </style>
<?php
check_admin();

if(isset($enviar1)){
	$mysqli->query("UPDATE seguimiento SET name = '$name' WHERE id = '$id' ");		
		redir("?p=distribuidor");
}
if(isset($enviar2)){
    $mysqli->query("UPDATE seguimiento SET username = '$username' WHERE id = '$id' ");        
        redir("?p=distribuidor");
}
if(isset($enviar3)){
    $mysqli->query("UPDATE seguimiento SET password = '$password' WHERE id = '$id' ");        
        redir("?p=distribuidor");
}

if(isset($eliminar)){
	$eliminar = clear($eliminar);
	$mysqli->query("DELETE FROM transporte WHERE id = '$eliminar'");

	redir("?p=transporte");
}
$id_vendedor = clear($_SESSION['id_vendedor']);
    $qe = $mysqli->query("SELECT * FROM seguimiento WHERE id='$id'  ");
    $re=mysqli_fetch_array($qe);

?>



  <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Editar repartidor</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-body">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-lg-10 col-xl-8">
                                            <form method="post" action="">
                                           
                                                <div class="form-group">
                                                    <label for="checkout-first-name">Nombre</label>
                                <input type="text" class="form-control" name="name" placeholder="<?=$re['name']?>">
                                                </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" name="enviar1" value="Cambiar nombre"/>
  </div>

                </form>
                <form method="post" action=""> 
                 <div class="form-group">
                  <label for="checkout-first-name">Usuario</label>
                 <input type="text" class="form-control" name="username" placeholder="<?=$re['username']?>">
                                                </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="enviar2" value="Cambiar usuario"/>
  </div>
</form>

  <form method="post" action="">                                <div class="form-group">
                                                    <label for="checkout-first-name">Contraseña</label>
                                          <input type="text" class="form-control" name="password" placeholder="<?=$re['password']?>">
                                                </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="enviar3" value="Cambiar contraseña"/>
  </div>
</form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>