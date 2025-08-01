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
select.form-control, select.form-control:valid, select.form-control.is-valid, select.form-control:invalid, select.form-control.is-invalid {
    background-image: none!important;
    background-repeat: no-repeat;
    background-size: 5px 10px;
}
                       </style>
<?php
check_admin();
    $id_vendedor = clear($_SESSION['id_vendedor']);
if(isset($enviar1)){
	$mysqli->query("UPDATE transporte SET codigo = '$codigo',placa = '$placa',tipo = '$tipo' WHERE id = '$id' ");		
		redir("?p=transporte");
}

if(isset($eliminar)){
	$eliminar = clear($eliminar);
	$mysqli->query("DELETE FROM transporte WHERE id = '$eliminar'");

	redir("?p=transporte");
}
$id_vendedor = clear($_SESSION['id_vendedor']);
    $qe = $mysqli->query("SELECT * FROM transporte WHERE id_vendedor ='$id_vendedor' AND id='$id'  ");
    $re=mysqli_fetch_array($qe);
    $tipoes=$re['tipo'];
    $qn = $mysqli->query("SELECT * FROM transportev WHERE id ='$tipoes'");
    $rn=mysqli_fetch_array($qn);

?>



  <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Editar Transporte</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-body">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-lg-10 col-xl-8">
                                            <form method="post" action="">
                                           
                                                <div class="form-group">
                                                    <label for="checkout-first-name">Placa</label>
                                <input type="text" class="form-control" name="placa" value="<?=$re['placa']?>" >
                                                </div>
 

         
                              <div class="form-group">
                                                    <label for="checkout-first-name">Codigo</label>
                                          <input type="text" class="form-control" name="codigo" value="<?=$re['codigo']?>">
                                                </div>
  


                                              
      <label for="checkout-first-name">Tipo de vehiculo</label>
   <select name="tipo" id="tipo" class="form-control form-control-select2" style="
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
              <option value="<?=$rn['id']?>"><?=$rn['tipos']?></option>
              <?php              
		$qn = $mysqli->query("SELECT * FROM transportev");
		while($r=mysqli_fetch_array($qn)){
		?>
        <option value="<?=$r['id']?>"><?=$r['tipos']?></option> 
        <?php
    }
    ?>
    
 
               </select> 
<br>
     <div class="form-group">
    <input type="submit" class="btn btn-primary" name="enviar1" value="Actualizar"/>
  </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>