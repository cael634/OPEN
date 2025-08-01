<style type="text/css">
  .col-lg-9 {
    flex: 0 0 100%;
    max-width: 100%;
}
.col-xl-8 {
    flex: 0 0 100%;
    max-width: 100%;
}
.card-header:first-child {
    border-radius: calc(.35rem - 1px) calc(.35rem - 1px) 0 0;
    display: none;
}
.card-divider {
    height: 2px;
    background: #f0f0f0;
    display: none;
}
select.form-control, select.form-control:valid, select.form-control.is-valid, select.form-control:invalid, select.form-control.is-invalid {
    background-image: none;
    background-repeat: no-repeat;
    background-size: 5px 10px;
}
.mb-4, .my-4 {
    margin-bottom: 1rem!important;
}
.form-control:valid, .form-control.is-valid, .form-control:invalid, .form-control.is-invalid {
    background-image: none;
    display: initial!important;
}
.form-group {
    display: flex;
    margin-bottom: 1rem;
}
label {
    display: inline-block;
    margin-bottom: 0rem!important;
    color: #0e0e0e!important;
    margin-right: 8px!important;
        width: 255px!important;
}
</style>
<?php
check_admin();
  $id_vendedor = clear($_SESSION['id_vendedor']);
if(isset($enviar)){
    
   
    $rutas = clear($rutas);
    $select1= clear($select1); 
    $select2= clear($select2); 
  
    $id_vendedor = clear($_SESSION['id_vendedor']);
 
      $id_vendedor = clear($_SESSION['id_vendedor']);

    $mysqli->query("INSERT INTO rutas (rutas,id_vendedor,Transporte,dia,Diasant) VALUES ('$rutas','$id_vendedor','$select1','$select2','$select7')");  
    
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
                                    <h5>Agregar Transporte</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-body">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-lg-10 col-xl-8">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800">Agregar ruta</h1> 
          </div>
           <br>

<form method="post" action="" enctype="multipart/form-data">
<div class="form-group">
    <label>*Nombre o codigo de la ruta</label>
    <input type="text" class="form-control" name="rutas" placeholder="Nombre de la ruta o codigo">
  </div>

  <div class="form-group">
 <label for="checkout-country">*Dia de distribución</label>
                                              
      <select  name="select2" id="select2"required class="form-control" >
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

  <div class="form-group">
    <label>*Numero de dias anteriores al dia de distribucion</label>
  <select  name="select7" id="select7" class="form-control form-control-select2" style="">
      <option value="">Numero de dias anteriores al dia de distribucion</option>
      <option  value="1">1</option>
      <option  value="2">2</option>
      <option  value="3">3</option>
      <option  value="4">4</option>
      <option  value="5">5</option>
      <option  value="6">6</option>
      <option  value="7">7</option>
      <option  value="0">Se puede el mismo dia</option>
</select>
  </div>

  <div class="form-group">
    <label>Vehiculo</label>
     <select  name="select1" id="select1" class="form-control form-control-select2">
                                                    <option value="">Vehiculo</option>
<?php
                $qn1 = $mysqli->query("SELECT * FROM transporte  WHERE id_vendedor='$id_vendedor' ");
                while($rl1=mysqli_fetch_array($qn1)){
                    ?>
                        <option value="<?=$rl1['id']?>"><?=$rl1['placa']?></option>
                       
                    <?php
                }

            ?>
                                                </select>
  </div>



 
   <style>
    textarea {
    overflow: auto;
    width: 100%;
    resize: vertical;
}
   </style>




  <style type="text/css">
  .h1, h1 {
    font-size: 2.5rem;
    color: #5a5c69!important;
}
.table {
    width: 100%;
    margin-bottom: 1rem;
    color: #5a5c69!important;
}
</style>
  <style>
.form-controle {
    display: block;
    width: 40%!important;
    height: calc(2.65rem + 2px);
    padding: 0.375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    box-shadow: inset 0 0 0 transparent;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}</style>





  <br>
    <div class="form-group" style="text-align: center;">
    <input type="submit" class="btn btn-primary" name="enviar" value="Siguiente" style="background-color: #36373a;
    border-color: #36373a;
" />
  </div>

</form><br>

<br>
<style type="text/css">
  label {
    display: inline-block;
    margin-bottom: .5rem;
    color: #0e0e0e!important;
}
.text-gray-800 {
    color: #0e0e0e!important;
}
</style>