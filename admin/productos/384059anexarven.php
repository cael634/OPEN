                        


<?php
if(isset($enviar)){
  
  

    $mysqli->query("INSERT INTO ventas (id_cliente,id_vendedor,id_venta) VALUES ('$idrep','".$_SESSION['id_vendedor']."','$id')");
    $_SESSION['id_cliente'] = $id;
    
    redir("?p=anexarven&id=$id");
}

?>
                        <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Agregar cliente<br></h5>
                                   <br>
                                    <div class="form-row">
                                     <div class="form-group col-md-6">

                                         <form method="post" action="">

                                                 <select  name="idrep" id="idrep" class="form-control form-control-select2">
                                                 <option value="">Nombre del establecimento</option>
                                                 <?php
                                                 $qn = $mysqli->query("SELECT * FROM clientev  ");
                                                 while($rl=mysqli_fetch_array($qn)){
                                                $qe = $mysqli->query("SELECT * FROM clientes WHERE id ='".$rl['id_cliente']."' ");
                                                $re = mysqli_fetch_array($qe);
                                                 ?>
                                                 <option value="<?=$rl['id']?>"><?=$re['name']?></option>                
                                                <?php
                                                 }
                                                ?> 
                                                </select>
                                            </div>
                                            
                                           
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <button  name="enviar" name="enviar"  type="submit" class="btn btn-primary" style="border-color: #292c31;
    background: #292c31;">Añadir cliente</button>
                                            </div>
                                           
</div>
                                </div>
                            </form>
                                <div class="card-divider"></div>
                                <div class="card-table">
                                    <div class="table-responsive-sm">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Cliente</th>
                                                    <th>Direccion</th>
                                                    <th>Tipo</th>
                                                    <th>Establecimiento</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
  

$q2 = $mysqli->query("SELECT * FROM ventas WHERE  id_venta = '$id' ");
while ($rp2 = mysqli_fetch_array($q2)){

      $qe = $mysqli->query("SELECT * FROM clientev WHERE id ='".$rp2['id_cliente']."' ");
      $re = mysqli_fetch_array($qe);
      $qe1 = $mysqli->query("SELECT * FROM clientes WHERE id ='".$re['id_cliente']."' ");
      $re1 = mysqli_fetch_array($qe1);

      ?>
                                                <tr>
                                                    <td><?=$re1['name']?></td>
                                                    <td><?=$re1['direccion']?></td>
                                                    <td> <a style="color:#08f"href="lugar.php?&id=<?=$id?>&eliminar=<?=$rp['id']?>" >x</a></td>
                                                    <td><?=$re1['tipo']?></td>
                                                </tr>
                                                 <?php
        }
    ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-footer">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>