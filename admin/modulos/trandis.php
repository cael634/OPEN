   
<?php
check_admin();


if(isset($enviar)){
    $id= clear($id);
    $id_vendedor= clear($_SESSION['id_vendedor']);
    $id_distribuidor= clear($id_distribuidor);
  

  
    $mysqli->query("INSERT INTO trandis (id_vendedor,id_distribuidor,id_transporte) VALUES ('$id_vendedor','$id_distribuidor','$id')");
    
    redir("?p=trandis&id=$id");
  

}

if(isset($enviar1)){

    redir("?p=distribu");
  

}
if(isset($eliminar)){
    $eliminar = clear($eliminar);
    $mysqli->query("DELETE FROM trandis WHERE id = '$eliminar'");

    redir("?p=trandis");
}

?>

 <form method="post" action="">

            <div class="centrar_login">

<h1>Agregar repartidor.</h1><br>
<br><br>


      <select name="id_distribuidor" required class="form-control">

            <option value="">Repartidor</option>
            <?php
                $qs = $mysqli->query("SELECT * FROM repartidor ");
                while($rm=mysqli_fetch_array($qs)){
                    ?>
                        <option value="<?=$rm['id']?>"><?=$rm['nombre']?></option>

                    <?php
                }

            ?>
        </select>

<br>

 <input type="submit" class="btn btn-primary" name="enviar" value="Añadir repartidor"/><a style="
    padding: 370px;
"></a>
  <a style="color:#08f" href="?p=transporte">Finalizar</a>
<br>

  

<table class="table table-striped">

    <tr>
        <th>Nombre del repartidor</th>
        <th>Acciones</th>
       
     
    </tr>
<?php
    $id_vendedor = clear($_SESSION['id_vendedor']);

$q = $mysqli->query("SELECT * FROM trandis WHERE id_vendedor = '$id_vendedor' AND id_transporte = '$id' ");
while ($rp = mysqli_fetch_array($q)){

      $qe = $mysqli->query("SELECT * FROM repartidor WHERE id ='".$rp['id_distribuidor']."' ");
      $re = mysqli_fetch_array($qe);
      

            ?>
                <tr>

        
                    
                    <td><?=$re['nombre']?></td>
                 
                   

                   <td>
                        
                       
                        <a style="color:#08f" href="?p=trandis&eliminar=<?=$rp['id']?>"><i class="fa fa-times"></i></a>

                    </td>
                </tr>
            <?php
        }
    ?>
</form><br></div>

<br></table>

