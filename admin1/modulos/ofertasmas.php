<style type="text/css">
  .col-lg-9 {
    flex: 0 0 100%;
    max-width: 100%;
}
.col-xl-8 {
    flex: 0 0 100%;
    max-width: 100%;
}
.form-group {
    display: inline-flex!important;
    margin-bottom: 1rem;
}
.shadow {
    box-shadow: none!important;
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
    margin-bottom: .5rem;
    color: #0e0e0e!important;
    /* height: 30px; */
    width: 210px;
}
</style>
<?php

check_admin();
if(isset($buscar21)){
      $mysqli->query("INSERT INTO ofertas (dia1,dia2,cod) VALUES ('$diar','$diar2','$id')");
        redir("?p=ofertasmas&id=$id");
}
if(isset($buscar22)){
      $mysqli->query("UPDATE ofertas SET dia1 = '$diar',dia2 = '$diar2' WHERE cod = '$id' ");  
        redir("?p=ofertasmas&id=$id");
}

if(isset($enviar1)){
      $mysqli->query("INSERT INTO oferta (id_pro1,cant1,tipo,cod) VALUES ('$id_pro1','$cant1',1,'$id')");
        redir("?p=ofertasmas&id=$id");
}
if(isset($enviar2)){
    if($id_pro2==0){
        $mysqli->query("INSERT INTO oferta (obsequio,cant1,tipo,cod) VALUES ('$cant3','$cant2',2,'$id')");
      redir("?p=ofertasmas&id=$id&e=1");
      
    }else{
      
      $mysqli->query("INSERT INTO oferta (id_pro1,cant1,tipo,cod) VALUES ('$id_pro2','$cant2',2,'$id')");
      redir("?p=ofertasmas&id=$id&e=2");
    }
}
if(isset($eliminar)){
      $mysqli->query("DELETE FROM oferta WHERE id = '$eliminar'");
        redir("?p=ofertasmas&id=$id");
}
?>
 <style>
     .card-table table {
    width: 100%;
    border: 1px solid!important;
    min-width: 500px;
    text-align: center!important;color: #757171!important;
 
}
.card-table thead th {
    border-bottom: 2px solid #f0f0f0;
    text-transform: uppercase;
    color: black!important;
    font-size: 13px;
    font-weight: 500;
    padding: 10px 12px;
       font-weight: 700!important;
}
 </style>  
 <div class="col-12 col-lg-9 mt-4 mt-lg-0">
             <h1 class="h3 mb-0 text-gray-800">Agregar Oferta</h1>
       <div class="card-divider"></div>

      <br>
                                                <?php
                                                $contador87=0;
$q12 = $mysqli->query("SELECT * FROM ofertas WHERE  cod = '$id' ");
while ($rp12 = mysqli_fetch_array($q12)){
    $contador87++;
}
if($contador87==0){
?>
   <form method="post" action="">
       <div class="row">
  &nbsp;&nbsp;&nbsp; <input  autocomplete="off" class="datepicker " name="diar" placeholder="Pulse fecha comienzo de la oferta" style="
    display: block;
    width: 30%;
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
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;" />

&nbsp;&nbsp;
      <input  autocomplete="off" class="datepicker " name="diar2" placeholder="Pulse fecha final de la oferta" style="
    display: block;
    width: 30%;
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
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;" />
    </form>
  <link rel='stylesheet' href='https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css'><link rel="stylesheet" href="./style.css">
<div class="col-md-2">
        <button type="submit" class="btn btn-prmiary" name="buscar21" style="
    background: #29393a;
    color: white;
    width: 80%;
"><i class="fa fa-serch" ></i> Añadir</button>
      </div>
</div>
    <?php
}else{
      $qe25 = $mysqli->query("SELECT * FROM ofertas WHERE cod ='$id' ");
      $re21 = mysqli_fetch_array($qe25);
    ?>
       <form method="post" action="">
       <div class="row">
  &nbsp;&nbsp;&nbsp; <input  autocomplete="off" class="datepicker "value="<?=$re21['dia1']?>" name="diar" placeholder="Pulse fecha comienzo de la oferta" style="
    display: block;
    width: 30%;
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
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;" />

&nbsp;&nbsp;
      <input  autocomplete="off" class="datepicker " name="diar2" value="<?=$re21['dia2']?>"placeholder="Pulse fecha final de la oferta" style="
    display: block;
    width: 30%;
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
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;" />
    </form>
  <link rel='stylesheet' href='https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css'><link rel="stylesheet" href="./style.css">
<div class="col-md-2">
        <button type="submit" class="btn btn-prmiary" name="buscar22" style="
    background: #29393a;
    color: white;
    width: 80%;
"><i class="fa fa-serch" ></i> Añadir</button>
      </div>
</div>
    <?php
}
    ?>

   *Importante agregar fechas para guardar la oferta.                         <div class="card">
                                <div class="card-header">
                                    <h5>Agregar Transporte</h5>
                                </div>
                              
                                <div class="card-body">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-lg-10 col-xl-8">

     


<form method="post" action="" enctype="multipart/form-data">
1.) Productos que tu cliente debe comprar para aplicar a la promoción:<br><br>
  <div class="form-group">
      <label style="    width: 24%;
    margin: 6px 0px 0px 0px;">• Por la compra de este producto:</label>
                <select name="id_pro1" placeholder="Cantidad de producto " class="form-control" style="    width: 35%;">
      <option value="">Producto a comprar</option></option>
      <?php
          $q = $mysqli->query("SELECT * FROM productosemp WHERE id_vendedor='". $_SESSION['id_vendedor']."'");
        while($r=mysqli_fetch_array($q)){
          ?>
            <option value="<?=$r['id']?>"><?=$r['name']?></option>
          <?php 

        }
      ?>

    </select>
 
     &nbsp;&nbsp;
    <label style="  width: 24%;
    margin: 6px 0px 0px 0px;">• Cantidad a compra:</label>&nbsp;
    <input type="number" class="form-control" name="cant1" placeholder="Cantidad de producto " style="width: 35%;"/>

  &nbsp;  <button type="submit" class="btn btn-success" name="enviar1"style="width: 35%;"><i class="fa fa-check"></i> Agregar productos</button>


  </div><br>
2.) Obsequio o productos gratis al cumplir con la promoción:<br><br>
    <div class="form-group">
    <label style="    max-width: 146px;">• Lleva sin ningun costo:</label>&nbsp;
          <select name="id_pro2" class="form-control"style="    width: 40%;">
      <option value="0">Producto sin ningun costo</option></option>
      <?php
        $q = $mysqli->query("SELECT * FROM productosemp WHERE id_vendedor='". $_SESSION['id_vendedor']."'");
        while($r=mysqli_fetch_array($q)){
          ?>
            <option value="<?=$r['id']?>"><?=$r['name']?></option>
          <?php 

        }
      ?>

    </select>

     &nbsp;&nbsp;
     <label style="    max-width: 230px;">• Cantidad de producto sin costo:</label>
    <input type="cant2" class="form-control" name="cant2" placeholder="Cantidad de producto comprado" style="width: 60%;"/>

  </div>

    <div class="form-group">

     <label style="    max-width: 200px;">*Obsequio (si no es uno de sus productos):</label>
    <input type="text" class="form-control" name="cant3" placeholder="Obsequio(no producto)" style="width: 50%;"/>

  </div>
  <div class="form-group">
  <center> <button type="submit" class="btn btn-success" name="enviar2" style="margin: 0px 70px -10px 20px;"><i class="fa fa-check"></i> Agregar Obsequio o producto sin costo</button>
    
        </center> 
          <center><a href="?p=ofertasto" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="background-color: #e2013b;
    border-color: #e2013b;
    width: 130px;
    height: 37px;
    font-size: 20px;">Terminar</a></center> 
  </div>

<h1 style="padding: 2px 0px 4px 0px;color:black!important;    font-size: 2rem;">Estructura de la oferta</h1>

<!-- partial -->
  <script src='https://code.jquery.com/jquery-1.10.2.js'></script>
<script src='https://code.jquery.com/ui/1.11.4/jquery-ui.js'></script><script  src="./scripta.js"></script>
    
<!-- partial -->
  <script src='https://code.jquery.com/jquery-1.10.2.js'></script>
<script src='https://code.jquery.com/ui/1.11.4/jquery-ui.js'></script><script  src="./scripta.js"></script>
                                <div class="card-table">
                                    <div class="table-responsive-sm">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Producto </th>
                                                    <th>Tipo</th>
                                            
                                                    <th>Cantidad</th>
                                                    <th>Acción</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $contador87=0;
$q12 = $mysqli->query("SELECT * FROM oferta WHERE  cod = '$id' ");
while ($rp12 = mysqli_fetch_array($q12)){
    $contador87++;
}

$q32 = $mysqli->query("SELECT * FROM oferta WHERE  cod = '$id' ");
while ($rp32 = mysqli_fetch_array($q32)){

      $qe2 = $mysqli->query("SELECT * FROM productosemp WHERE id ='".$rp32['id_pro1']."' ");
      $re2 = mysqli_fetch_array($qe2);
  
      if($contador87==0){
      
      ?>

<?php
}else{
    ?>

                                                <tr>
                                                    <td>
                                                        <?php
                                                    if($rp32['tipo']==1){
                                                    ?>
                                                      <?=$re2['name']?>
                                                    <?php
                                                    }else{
                                                        ?>
                                                    <?php
                                                    if($rp32['id_pro1']==0){
                                                    ?>
                                                     <?=$rp32['obsequio']?>
                                                    <?php
                                                    }else{
                                                        ?>
                                                     <?=$re2['name']?>
                                                        <?php
                                                    }
                                                  
                                                    }
                                                    ?>
                                                      </td>
                                                  <td>  <?php
                                                    if($rp32['tipo']==1){
                                                    ?>
                                                    Producto a comprar
                                                    <?php
                                                    }else{
                                                        ?>
                                                    Obsequio o producto sin cargo
                                                        <?php
                                                    }
                                                    ?>
                                                    </td>
                                                    <td><?=$rp32['cant1']?></td>
                                                  <td><a href="?p=ofertasmas&id=<?=$id?>&eliminar=<?=$rp32['id']?>"><i class="fas fa-times"></i> </a></td>
                                                </tr>
                                                 <?php
      }
        }
    ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <?php
                                   if($contador87==0){
      
      ?>
<center><h1 style="font-size: 25px;
    color: #37373c!important;
    margin: 11px 0px 11px 0px;">No ha agregado productos</h1></center>
<?php
}
?>
                                <div class="card-divider"></div>
                                <div class="card-footer">
                                    
                                </div>
                            </div>
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








</form>
</div></div>
</div>
</div>
</div>
<br>
