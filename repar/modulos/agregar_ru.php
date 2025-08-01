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
/* Customize the label (the container) */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 16px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
  top: 9px;
  left: 9px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: white;
}
</style>
<?php
check_admin();
if(isset($enviar)){
    
     $id_vendedor = clear($_SESSION['id_vendedor']);
    $rutas = clear($rutas);
    $select1= clear($select1); 
    $select2= clear($select2); 
  
    $id_vendedor = clear($_SESSION['id_vendedor']);
 
      $id_vendedor = clear($_SESSION['id_vendedor']);

 $link =mysqli_connect("localhost","root","");
  
    
    if($link){
        mysqli_select_db($link , "open");

    }
    $checkbox=$_POST['checkbox'];
     $mysqli->query("INSERT INTO rutas (rutas,id_vendedor,Transporte,dia) VALUES ('$rutas','$id_vendedor','$select1','$select2')");   
    foreach($checkbox as $llave => $valor) {
      
    $ficha2="INSERT INTO dia SET dia='$valor',ruta='$rutas',id_vendedor='$id_vendedor' ";
    $ejecutar_insertar_ficha2=mysqli_query($link , $ficha2); 

    }
      redir("?p=agregarepar&id=$rutas&id_vendedor=$id_vendedor"); 
}
if(isset($eliminar)){
    $eliminar = clear($eliminar);
    $mysqli->query("DELETE FROM rutas WHERE id = '$eliminar'");
    alert("rutas eliminada");
    redir("?p=rutas");
}
?>
                        <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Agregar nueva ruta</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-body">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-lg-10 col-xl-8">
                                            <form method="post" action="">
                                           
                                                <div class="form-group">
                                                    <label for="checkout-first-name">Nombre de la ruta o codigo</label>
                                                    <input type="text" class="form-control" name="rutas" placeholder="Nombre de la ruta o codigo">
                                                </div>

                                                <div class="form-group">
                                                <label for="checkout-country">Vehiculo</label>
                                              
                                                 <select  name="select1" id="select1" class="form-control form-control-select2">
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
                                            </div>

                                        
                                            <div class="form-group">
                                                <label for="checkout-country">Dia de distribución</label>
                                              
                                                 <select  name="select2" id="select2" class="form-control form-control-select2">
                                                  <option value="">Dia de distribución</option>
    <option  value="1">Lunes</option>
      <option  value="2">Martes</option>
      <option  value="3">Miercoles</option>
      <option  value="4">Jueves</option>
      <option  value="5">Viernes</option>
      <option  value="6">Sabado</option>
      <option  value="7">Domingo</option>
                                                </select>
                                            </div>
                                          
                                            

<label for="checkout-country" style="width: 130%;
}">Dias habiles para realizar pedidos a esta ruta:<br><as style="font-size: 12px">(Los pedidos realizados luego del dia de distribucion seran adjuntados en los pedidos de la proxima semana).<as></label>   <br>                                        

  <label class="container">
  <input type="checkbox" name="checkbox[]" value="1">  Lunes
  <span class="checkmark"></span>
</label>

<label class="container">
  <input type="checkbox" name="checkbox[]" value="2">  Martes
  <span class="checkmark"></span>
</label>

<label class="container">
  <input type="checkbox" name="checkbox[]" value="3">  Miercoles
  <span class="checkmark"></span>
</label>

<label class="container">
  <input type="checkbox" name="checkbox[]" value="4">  Jueves
  <span class="checkmark"></span>
</label>

<label class="container">
  <input type="checkbox" name="checkbox[]" value="5">  Viernes
  <span class="checkmark"></span>
</label>

<label class="container">
  <input type="checkbox" name="checkbox[]" value="6">  Sabado
  <span class="checkmark"></span>
</label>

<label class="container">
  <input type="checkbox" name="checkbox[]" value="7">  Domingo
  <span class="checkmark"></span>
</label>
                                            
                                            

                                                  
                                            <div class="form-group mt-3 mb-0">
                                                <button  name="enviar"  type="submit" class="btn btn-primary">Agregar ruta</button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
