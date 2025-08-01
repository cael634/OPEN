 <body>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- primero -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6224266730639986"
     data-ad-slot="5729493737"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</body>  
<?php
check_admin();


if(isset($enviar)){
    $id= clear($id);
    $id_vendedor= clear($_SESSION['id_vendedor']);
    $select6= clear($select6);
    $select7= clear($select7);

  
    $mysqli->query("INSERT INTO trandis (id_vendedor,id_distribuidor) VALUES ('$id_vendedor','$id_distribuidor')");
    
    redir("?p=cobertura&id=$id");
  

}

if(isset($enviar1)){

    redir("?p=distribu");
  

}

?>

 <form method="post" action="">

            <div class="centrar_login">

<h1>Agregar repartidor.</h1><br>
<br><br>


             <div class="col-xs-6">
  <select class="form-control" name="select6" id="select6" required class="form-control">
    <option value="">Departamento</option>
<?php
                $qn = $mysqli->query("SELECT * FROM repartidor  ");
                while($rl=mysqli_fetch_array($qn)){
                    ?>
                        <option value="<?=$rl['id']?>"><?=$rl['nombre']?></option>
                       
                    <?php
                }

            ?>
  </select>
</div>
<br>



<script>
    //Reference: https://jsfiddle.net/fwv18zo1/
var $select6 = $( '#select6' ),
        $select7 = $( '#select7' ),
    $options = $select6.find( 'option' );
    
$select6.on( 'change', function() {
    $select7.html( $options.filter( '[value="' + this.value + '"]' ) );
} ).trigger( 'change' );
</script><br>

    <input type="submit" class="btn btn-primary" name="enviar" value="Añadir municipio"/>
   <input type="submit" class="btn btn-primary" name="enviar1" value="Terminar" style="
    float: right;
    background-color: #730303;
    border-color: #730303;
">

  

<table class="table table-striped">

    <tr>
        <th>Departamento</th>
        <th>Municipio</th>
        <th>Acciones</th>
       
     
    </tr>
<?php
    $id_vendedor = clear($_SESSION['id_vendedor']);

$q = $mysqli->query("SELECT * FROM cobertura WHERE id_vendedor = '$id_vendedor' AND codigo = '$id' ");
while ($rp = mysqli_fetch_array($q)){

      $qe = $mysqli->query("SELECT * FROM departamentos WHERE id_departamento ='".$rp['departamento']."' ");
      $re = mysqli_fetch_array($qe);
      $qm = $mysqli->query("SELECT * FROM departamentos WHERE id_departamento = '".$rp['departamento']."'");
      $rm = mysqli_fetch_array($qm);

            ?>
                <tr>

        
                    
                    <td><?=$re['departamento']?></td>
                    <td><?=$rm['departamento']?></td>
                   

                   <td>
                        
                        <a style="color:#08f" href="?p=modificar_categoria&id=<?=$rp['id']?>"><i class="fa fa-edit"></i></a>
                        &nbsp;
                        <a style="color:#08f" href="?p=agregar_categoria&eliminar=<?=$rp['id']?>"><i class="fa fa-times"></i></a>

                    </td>
                </tr>
            <?php
        }
    ?>
</form><br></div>

<br></table>

