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
  $id_vendedor = $_SESSION['id_vendedor'];
if(isset($buscar12)){

  $mysqli->query("UPDATE compven SET lunes = '$lunes', martes = '$martes', miercoles = '$miercoles',jueves = '$jueves',viernes = '$viernes', sabado= '$sabado',domingo = '$domingo',tipo = '$tipo', diasde = '$diasde',dia = '$dia' WHERE id = '$id'");
  redir("?p=agregar_producto");
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
<div class="d-sm-flex align-items-center justify-content-between mb-4" style="    margin-bottom: 0rem!important;">
           <h1 class="h3 mb-0 text-gray-800">Agregar dia de distribucion</h1> 
          </div>
    <br>

<form method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
 <label for="checkout-country">*Cuantos dias a la semana hay entregas</label>
                                              
      <select  name="tipo" id="select2"required class="form-control" >
      <option value="">Opciones</option>
      <option  value="1">Un dia </option>
      <option  value="2">Mas de un dia</option>

                                                </select>


  </div>
  <center><label for="checkout-country">* Solo un dia de entregas:</label></center><br> 


  <div class="form-group">
 <label for="checkout-country">*Dia de distribución</label>
                                              
      <select  name="dia" id="select2"required class="form-control" >
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
    <label>*Numero de dias de antelacion para realizar el pedido</label>
      <select  name="diasde" id="select2"required class="form-control" >
      <option value="">Dia de distribución</option>
      <option  value="0">El mismo dia</option>
      <option  value="1">1 dia</option>
      <option  value="2">2 dias</option>
      <option  value="3">3 dias</option>
      <option  value="4">4 dias</option>
      <option  value="5">5 dias</option>
      <option  value="6">6 dias</option>
      <option  value="7">7 dias</option>
                                                </select>
  </div>
  *Si pide en los dias antes los de antelacion, la fecha de entraga sera el dia de entrega mas cercano  mas 7 dias.<br><br>
    <center><label for="checkout-country">* Mas de un dia de entregas</label></center><br> 



    <div class="row">
      
       <div class="col-md-2" style="flex: 0 0 33.3%;
    max-width: 50.66667%;">
      <div class="form-group">
   
     <select  name="lunes" id="select2"required class="form-control" >
      <option value="">Si pide el Lunes llegara el :</option>
      <option  value="1">Lunes</option>
      <option  value="2">Martes</option>
      <option  value="3">Miercoles</option>
      <option  value="4">Jueves</option>
      <option  value="5">Viernes</option>
      <option  value="6">Sabado</option>
      <option  value="7">Domingo</option>
                                                </select>
  </div>
      </div>
      <div class="col-md-2" style="flex: 0 0 33.3%;
    max-width: 50.66667%;">
      <select  name="martes" id="select2"required class="form-control" >
      <option value="">Si pide el Martes llegara el :</option>
      <option  value="1">Lunes</option>
      <option  value="2">Martes</option>
      <option  value="3">Miercoles</option>
      <option  value="4">Jueves</option>
      <option  value="5">Viernes</option>
      <option  value="6">Sabado</option>
      <option  value="7">Domingo</option>
                                                </select>
      </div>
      <div class="col-md-2" style="flex: 0 0 33.3%;
    max-width: 50.66667%;">
      <select  name="miercoles" id="select2"required class="form-control" >
      <option value="">Si pide el Miercoles llegara el :</option>
      <option  value="1">Lunes</option>
      <option  value="2">Martes</option>
      <option  value="3">Miercoles</option>
      <option  value="4">Jueves</option>
      <option  value="5">Viernes</option>
      <option  value="6">Sabado</option>
      <option  value="7">Domingo</option>
                                                </select>
      </div>

    </div>

      <div class="row">
      
       <div class="col-md-2" style="flex: 0 0 33.3%;
    max-width: 50.66667%;">
      <div class="form-group">
      <select  name="jueves" id="select2"required class="form-control" >
      <option value="">Si pide el Jueves llegara el :</option>
      <option  value="1">Lunes</option>
      <option  value="2">Martes</option>
      <option  value="3">Miercoles</option>
      <option  value="4">Jueves</option>
      <option  value="5">Viernes</option>
      <option  value="6">Sabado</option>
      <option  value="7">Domingo</option>
                                                </select>
  </div>
      </div>
      <div class="col-md-2" style="flex: 0 0 33.3%;
    max-width: 50.66667%;">
      <select  name="viernes" id="select2"required class="form-control" >
      <option value="">Si pide el Viernes llegara el :</option>
      <option  value="1">Lunes</option>
      <option  value="2">Martes</option>
      <option  value="3">Miercoles</option>
      <option  value="4">Jueves</option>
      <option  value="5">Viernes</option>
      <option  value="6">Sabado</option>
      <option  value="7">Domingo</option>
                                                </select>
      </div>
      <div class="col-md-2" style="flex: 0 0 33.3%;
    max-width: 50.66667%;">
      <select  name="sabado" id="select2"required class="form-control" >
      <option value="">Si pide el Sabado llegara el :</option>
      <option  value="1">Lunes</option>
      <option  value="2">Martes</option>
      <option  value="3">Miercoles</option>
      <option  value="4">Jueves</option>
      <option  value="5">Viernes</option>
      <option  value="6">Sabado</option>
      <option  value="7">Domingo</option>
                                                </select>
      </div>

    </div>

        <div class="row">
      
       <div class="col-md-2" style="flex: 0 0 33.3%;
    max-width: 50.66667%;">
      <div class="form-group">
      <select  name="domingo" id="select2"required class="form-control" >
      <option value="">Si pide el Domingo llegara el :</option>
      <option  value="1">Lunes</option>
      <option  value="2">Martes</option>
      <option  value="3">Miercoles</option>
      <option  value="4">Jueves</option>
      <option  value="5">Viernes</option>
      <option  value="6">Sabado</option>
      <option  value="7">Domingo</option>
                                                </select>
  </div>
      </div>
      

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
    <input type="submit" class="btn btn-primary" name="buscar12" value="Siguiente" style="background-color: #36373a;
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