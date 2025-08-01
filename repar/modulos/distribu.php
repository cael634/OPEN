<?php
check_admin();

if(isset($enviar)){
    $select4 = clear($select4);
    $select5 = clear($select5);
    $entrega1= clear($entrega1);
    $codigo= clear($codigo);
    $name= clear($name);
    $direccion= clear($direccion);

	
		$mysqli->query("INSERT INTO distribucion (departamentos,municipio,entrega,codigo,nombre,direccion) VALUES ('$select4','$select5','$entrega1','$codigo','$name','$direccion')");
		
		redir("?p=cobertura&id=$codigo");


}

?>
 <form method="post" action="">

            <div class="centrar_login">

<h1>Agregar un punto de distribución.</h1><br>
Ubicacion del punto de distribucion:<br><br>


             <div class="col-xs-6">
  <select class="form-control" name="select4" id="select4" required class="form-control">
    <option value="">Departamento</option>
<?php
                $qn = $mysqli->query("SELECT * FROM departamentos  ");
                while($rl=mysqli_fetch_array($qn)){
                    ?>
                        <option value="<?=$rl['id_departamento']?>"><?=$rl['departamento']?></option>
                       
                    <?php
                }

            ?>
  </select>
</div>
<br>

<div class="col-xs-6">
  <select class="form-control" name="select5" id="select5" required class="form-control">
 <option value="">Municipio</option>
         <?php
                $qn = $mysqli->query("SELECT * FROM municipios  ");
                while($rl=mysqli_fetch_array($qn)){
                    ?>
                        <option value="<?=$rl['departamento_id']?>" ><?=$rl['municipio']?></option>
                       
                    <?php

                }

            ?>
</select>
</div>

<script>
    //Reference: https://jsfiddle.net/fwv18zo1/
var $select4 = $( '#select4' ),
        $select5 = $( '#select5' ),
    $options = $select5.find( 'option' );
    
$select4.on( 'change', function() {
    $select5.html( $options.filter( '[value="' + this.value + '"]' ) );
} ).trigger( 'change' );
</script><br>
           

          <select name="entrega1" required class="form-control">

            <option value="">Tipo de negocio</option>
            <?php
                $qs = $mysqli->query("SELECT * FROM distriv");
                while($rm=mysqli_fetch_array($qs)){
                    ?>
                        <option value="<?=$rm['id']?>"><?=$rm['tipo']?></option>

                    <?php
                }

            ?>
        </select><br>

<form method="post" action="">
	<div class="form-group">
		<input type="text" class="form-control" name="codigo" placeholder="Codigo distribucion"/>
	
	</div>

<form method="post" action="">
	<div class="form-group">
		<input type="text" class="form-control" name="name" placeholder="Nombre del punto de distribucion"/>
	</div>

<form method="post" action="">
	<div class="form-group">
		<input type="text" class="form-control" name="direccion" placeholder="Direccion"/>
	</div>


		<input type="submit" class="btn btn-primary" name="enviar" value="Siguiente"/>
<br>*Seguir el proceso de añadir rutas,stock,empleados,etc..
	</div>

</form><br>

<br>
