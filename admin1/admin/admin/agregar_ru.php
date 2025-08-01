<?php
check_admin();
if(isset($enviar2)){
    
     $id_vendedor = clear($_SESSION['id_vendedor']);
    $rutas = clear($rutas);
    $select1= clear($select1); 
    $select2= clear($select2); 
    $Duracion = clear($Duracion);
    $Distancia = clear($Distancia);
    $id_vendedor = clear($_SESSION['id_vendedor']);
    
}
if(isset($eliminar)){
    $eliminar = clear($eliminar);
    $mysqli->query("DELETE FROM rutas WHERE id = '$eliminar'");
    alert("rutas eliminada");
    redir("?p=rutas");
}
?>
<h1 class="h3 mb-2 text-gray-800">Agregar ruta</h1>
<br>


    
     

    
</form><br></div>
<style type="text/css">
    label {
    display: inline-block;
    margin-bottom: .5rem;
    color: #2f2b2b;
}
.h1, h1 {
    font-size: 2.5rem;
    color: #464343;
}
a:not([href]):not([tabindex]) {
    color: inherit;
    text-decoration: none;
    color: #464343;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <form method="POST" action="?p=agregar_ru">
         <input type="text" name="rutas" placeholder="Codigo de la ruta" style="
    overflow: visible;
    display: inline-block;
    width: 19%;
    height: calc(2.25rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    box-shadow: inset 0 0 0 transparent;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-ou;
">
    
       <select class="form-control" name="select1" id="select1" required class="form-control"
        style="
    overflow: visible;
    display: inline-block;
    width: 19%;
    height: calc(2.25rem + 2px);
    padding: .375rem .95rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    box-shadow: inset 0 0 0 transparent;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-ou;
">

    <option value="">Vehiculo</option>
<?php
                $qn = $mysqli->query("SELECT * FROM transporte   ");
                while($rl=mysqli_fetch_array($qn)){
                    ?>
                        <option value="<?=$rl['id']?>"><?=$rl['placa']?></option>
                       
                    <?php
                }

            ?>
    </select>
          <select class="form-control" name="select2" id="select2" required class="form-control"
        style="
    overflow: visible;
    display: inline-block;
    width: 19%;
    height: calc(2.25rem + 2px);
    padding: .375rem .95rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    box-shadow: inset 0 0 0 transparent;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-ou;
">

    <option value="">Dia de distribución</option>
    <option  value="1">Lunes</option>
      <option  value="2">Martes</option>
      <option  value="3">Miercoles</option>
      <option  value="4">Jueves</option>
      <option  value="5">Viernes</option>
      <option  value="6">Sabado</option>
      <option  value="7">Domingo</option>
    </select>
  

        <input type="text" name="Duracion" placeholder="Duracion" style="
    overflow: visible;
    display: inline-block;
    width: 19%;
    height: calc(2.25rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    box-shadow: inset 0 0 0 transparent;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-ou;"/>
   
        <input type="text" name="Distancia" placeholder="Distancia"style="
    overflow: visible;
    display: inline-block;
    width: 19%;
    height: calc(2.25rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    box-shadow: inset 0 0 0 transparent;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-ou;"/><br><br>

     <br>
     Dias habiles para relizar pedidos a esta ruta:<br><br>
        <input type="checkbox" name="checkbox[]" value="1">  Lunes<br>
        <input type="checkbox" name="checkbox[]" value="2">  Martes<br>
        <input type="checkbox" name="checkbox[]" value="3">  Miercoles<br>
        <input type="checkbox" name="checkbox[]" value="4">  Jueves<br>
        <input type="checkbox" name="checkbox[]" value="5">  Viernes<br>
        <input type="checkbox" name="checkbox[]" value="6">  Sabado<br>
        <input type="checkbox" name="checkbox[]" value="7">  Domingo<br><br>
     
  
     <input type="submit" style="
    background-color: #e2013b;
    border: #e2013b;
    color: #fff;
    padding: .25rem .5rem;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: .2rem;
">
    </form>
</body>
<?php
   
     $id_vendedor = clear($_SESSION['id_vendedor']);
      error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_WARNING & ~E_NOTICE);
 $link =mysqli_connect("localhost","root","");
  
    
    if($link){
        mysqli_select_db($link , "open");
    }
    $checkbox=$_POST['checkbox'];
     $mysqli->query("INSERT INTO rutas (rutas,id_vendedor,Duracion,Distancia,Transporte,dia) VALUES ('$rutas','$id_vendedor','$Duracion','$Distancia','$select1','$select2')");   
    foreach($checkbox as $llave => $valor) {
   
    $ficha2="INSERT INTO dia SET dia='$valor',ruta='$rutas',id_vendedor='$id_vendedor' ";
    $ejecutar_insertar_ficha2=mysqli_query($link , $ficha2); 
   
    }
    ?> 
</html>
