  <script src='https://code.jquery.com/jquery-1.10.2.js'></script>
<script src='https://code.jquery.com/ui/1.11.4/jquery-ui.js'></script><script  src="./scripta.js"></script>
<link rel='stylesheet' href='https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css'><link rel="stylesheet" href="./style.css">
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
    margin-bottom: .5rem;
    color: #0e0e0e!important;
    /* height: 30px; */
    width: 210px;
}
</style>
<?php
check_admin();
    if(isset($enviar)){
  $mysqli->query("UPDATE productosemp SET name = '$name',price = '$price',oferta = '$oferta',pesv = '$canti',pesv = '$canti', tipo1='$tipo1',tipo2='$tipo2',tipo3='$tipo3',tipo4='$tipo4',tipo5='$tipo5',tipo6='$tipo6' WHERE id = '$id' ");   
    redir("?p=agregar_producto");
}


    $re1 = $mysqli->query("SELECT * FROM productosemp WHERE id = '$id'");
    $re=mysqli_fetch_array($re1);
?>
 <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="card">
                                
                                <div class="card-divider"></div>
                                <div class="card-body">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-lg-10 col-xl-8">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800">Modificar producto</h1> 
          </div>
          
<?php
check_admin();
$id = clear($id);
$s = $mysqli->query("SELECT * FROM productosemp WHERE id = '$id'");
$r = mysqli_fetch_array($s);
if(isset($buscar12)){
  $estado = clear($estado);
  $mysqli->query("UPDATE productosemp SET estado = '$cat', fecha='$diar',numstock='$numstock' WHERE id = '$id'");
  redir("?p=agregar_producto");
}
?>
<form method="post" action="">
    <div class="row">
      
      <div class="col-md-5" style="
    max-width: 25%;
">
      <select id="categoria" name="cat" class="form-control" >

      <option <?php if($r['estado'] == 0) { echo "selected"; } ?> value="0">En stock</option>
      <option <?php if($r['estado'] == 1) { echo "selected"; } ?> value="1">Sin stock</option>
     
        </select>
      </div>
      <div class="col-md-2" style="flex: 0 0 22.66667%;
    max-width: 34.66667%;">
       <input  autocomplete="off" class="datepicker " name="diar" placeholder="Posible dia de stock" style="
    display: block;
    width: 100%;
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
    " />
      </div>
      <div class="col-md-2" style="    flex: 0 0 30%;
    max-width: 30%;">
    <input type="number" class="form-control" name="numstock" placeholder="Número de unidades disponibles"  value="<?=$re['numstock']?>"/>
  </div>
      <div class="col-md-2">
        <button type="submit" class="btn btn-prmiary" name="buscar12" style="
    background: #29393a;
    color: white;
    width: 80%;
"><i class="fa fa-serch" ></i> Actualizar</button>
      </div>
    </div>
  </form>
  <br>
<form method="post" action="" enctype="multipart/form-data">

  <div class="form-group">
      <label>Nombre del producto</label>
    <input type="text" class="form-control" name="name" value="<?=$re['name']?>"/>
  </div>


  <label style="    width: 800px;
">Precio del producto segun su tipo de cliente</label>
        <div class="row">
      
       <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
      <div class="form-group">
     <input type="number" class="form-control" name="tipo1"placeholder="Precio para Tiendas" value="<?=$re['tipo1']?>"/>
       

    </select>

  </div>
      </div>
      <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
     <input type="number" class="form-control" name="tipo2"placeholder="Precio para Minimarkets" value="<?=$re['tipo2']?>"/>
      </div>

    <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
       <input type="number" class="form-control" name="tipo3"placeholder="Precio para Supermecados" value="<?=$re['tipo3']?>"/>
      </div>
         <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
       <input type="number" class="form-control" name="tipo4"placeholder="Precio para resturantes" value="<?=$re['tipo4']?>"/>
      </div>
  
    
    </div><br>
            <div class="row">
      
       <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
      <div class="form-group">
     <input type="number" class="form-control" name="tipo5"placeholder="Precio para Mayoristas y/o distribuidores" value="<?=$re['tipo5']?>"/>
       

    </select>

  </div>
      </div>
      <div class="col-md-2" style="flex: 0 0 50%;
    max-width: 50.66667%;">
     <input type="number" class="form-control" name="tipo6"placeholder="Precio para clientes particulares" value="<?=$re['tipo6']?>"/>
      </div>


  
    
    </div>
    <br>

  <div class="form-group">
    <label>Peso neto o volumen</label>
    <input type="text" class="form-control" name="canti" value="<?=$re['canti']?>"/>
  </div>

  <div class="form-group">
    <label>Cantidad de unidades por paquete</label>
    <input type="number" class="form-control" name="pesv" value="<?=$re['pesv']?>"/>
  </div>

 
   <style>
    textarea {
    overflow: auto;
    width: 100%;
    resize: vertical;
}
   </style>



  <div class="form-group" >
      <label style="    width: 173px;">Imagen del producto</label>
    <input type="file" class="form-controle" name="imagen" title="Imagen del producto" placeholder="Imagen del producto"/>
  </div>

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

  <div class="form-group">
<label>Selección de categoria</label>
    <select name="categoria" required class="form-control">

      <?php
    $re3 = $mysqli->query("SELECT * FROM categorias WHERE id='".$re['id_categoria']."'");
    $re31=mysqli_fetch_array($re3);
      ?>
      <option value="<?=$re31['id']?>"><?=$re31['categoria']?></option>
      <?php
        $q = $mysqli->query("SELECT * FROM categorias ORDER BY categoria ASC");
        while($r=mysqli_fetch_array($q)){
          ?>
            <option value="<?=$r['id']?>"><?=$r['categoria']?></option>
          <?php 

        }
      ?>

    </select>

  </div>

  <div class="form-group">
    <label>Porcentaje de oferta (%)</label>
    <input type="number" class="form-control" name="oferta" value="<?=$re['oferta']?>"/>
  </div>


  <br><br>

  <div class="form-group">
    <button type="submit" class="btn btn-success" name="enviar"><i class="fa fa-check"></i> Modificar producto</button>
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