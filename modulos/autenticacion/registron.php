

    <style type="text/css">
        .cuerpo {
    background: #fff;
    padding: 0px !important;
    min-height: auto !important;
    text-align: initial!important;
}
.site-footer {
    background-color: #26272b;
    padding: 45px 77px 20px !important;
    font-size: 15px;
    line-height: 24px;
    color: #cec8c8 !important;
}
h4, .h4 {
    font-size: 1.6rem;
    color: #0e0e0e
    !important;
    font-family:'Raleway', sans-serif!important;
    padding: 5px;
}
    </style>
        <!-- desktop site__header / end -->
        <!-- site__body -->
    <?php
if(isset($_SESSION['id_cliente'])){
    redir("./");
}
   if(isset($busq) && isset($cat)){
 
    $q = $mysqli->query("SELECT * FROM productos WHERE name like '%$busq%' AND id_categoria = '$cat'");
}elseif(isset($cat) && !isset($busq)){

    $q = $mysqli->query("SELECT * FROM productos WHERE id_categoria = '$cat' ORDER BY id DESC");

}elseif(isset($busq) && !isset($cat)){
  redir("?p=search&busq=$busq");
}  
if(isset($enviar1)){
    $username1 = clear($username1);
    $password1 = clear($password1);
    $cpassword = clear($cpassword);
    $name = clear($name);
    $select1 = clear($select1);
    $select2 = clear($select2);
    $direccion = clear($direccion);
    $q = $mysqli->query("SELECT * FROM clientes WHERE username = '$username1'");
    if(mysqli_num_rows($q)>0){
        alert("El usuario ya está en uso",0,'registron');
        die();
       
    }
    if($password1 != $cpassword){
        alert("Las contraseñas no coinciden",0,'registron');
        die();


    }
    $fecha89 =date("Y-m-d H:i:s");
    
    
         if(isset($horario)){
              $mysqli->query("INSERT INTO clientes (username,password,name,pais,gastos) VALUES ('$username1','$password1','$name','$select1',2)");
       
         $q2 = $mysqli->query("SELECT * FROM clientes WHERE username = '$username1'");
    $r = mysqli_fetch_array($q2);
    $_SESSION['id_cliente'] = $r['id'];
    alert("Te has registrado satisfactoriamente",1,'horario');
    die();
    redir("horario");
         }else{
         
         
         
  if(isset($id)){
       $mysqli->query("INSERT INTO clientes (username,password,name,nombrev,nombrev1,municipio,tipo,pais, fecha, gastos) VALUES ('$username1','$password1','$name','$nombrev','$nombrev1','$select2','$tipo','$select1','$fecha89',1)");
       
         $q2 = $mysqli->query("SELECT * FROM clientes WHERE username = '$username1'");
    $r = mysqli_fetch_array($q2);
    $_SESSION['id_cliente'] = $r['id'];
    alert("Te has registrado satisfactoriamente",1,'gasto');
    die();
    redir("gasto");
    
  }else{
    $mysqli->query("INSERT INTO clientes (username,password,name,nombrev,nombrev1,direccion,municipio,tipo,tipo1,tipo2,time3,time4,pais, fecha) VALUES ('$username1','$password1','$name','$nombrev','$nombrev1','$direccion','$select2','$tipo','$time1','$time2','$time3','$time4','$select1','$fecha89')");
    
      $q2 = $mysqli->query("SELECT * FROM clientes WHERE username = '$username1'");
    $r = mysqli_fetch_array($q2);
    $_SESSION['id_cliente'] = $r['id'];
    alert("Te has registrado satisfactoriamente",1,'proveedoreszon');
    die();
    redir("proveedoreszon");
  }
    
         } 
  
}
    ?>

        <div class="site__body">

            <div class="page-header">
                <div class="page-header__container container">
                    <div class="page-header__breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="?p=productos">Home</a>
                                    <svg class="breadcrumb-arrow" width="6px" height="9px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                    </svg>
                                </li>
                               
                                <li class="breadcrumb-item active" aria-current="page">Mi cuenta</li>
                            </ol>
                        </nav>
                    </div>
                  
                </div>
            </div>
            
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-3 d-flex">
                            <div class="account-nav flex-grow-1" style="    max-height: 350px;">
                                <h4 class="account-nav__title">Navegación</h4>
                                <ul>
                                                                                                                     <?php
  if(isset($id)){
      ?>
                                    <li class="account-nav__item ">
                                        <a href="?p=registro&id=1">Inicio de sesion</a>
                                    </li>
                                    
                                    <li class="account-nav__item  account-nav__item--active ">
                                        <a href="?p=registron&id=1">Registro</a>
                                    </li>
                                    
                                   <?php
  }else{
                                   ?>
                                     <li class="account-nav__item ">
                                        <a href="?p=registro">Inicio de sesion</a>
                                    </li>
                                    
                                    <li class="account-nav__item  account-nav__item--active ">
                                        <a href="?p=registron">Registro</a>
                                    </li>
                                    
                                   <?php
  }
                                   ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Registro</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-body">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-lg-10 col-xl-8">
                                            <form method="post" action="">
                                            <div class="form-row">
                                                <?php
                                                 if(isset($horario)){
                                                ?>
                                                 <div class="form-group col-md-6">
                                                    <label for="checkout-first-name">Nombre</label>
                                                    <input type="text" class="form-control" name="name" placeholder="Nombre">
                                                </div>
                                                 <div class="form-group col-md-6">
                                                    <label for="checkout-email">Usuario / correo</label>
                                                    <input type="text" class="form-control" name="username1" placeholder="Usuario / correo">
                                                </div>
                                                 <div class="form-group col-md-6">
                                                    <label for="checkout-first-name">Contraseña</label>
                                                    <input type="text" class="form-control" name="password1" placeholder="Contraseña">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="checkout-first-name">Confirmar Contraseña</label>
                                                    <input type="text" class="form-control" name="cpassword" placeholder="Confirmar Contraseña">
                                                </div> 
                                                
                                                </div>
                                                 <div class="form-group">
                                                <label for="checkout-country">Pais</label>
                                              
                                                 <select  name="select1" id="select1" class="form-control form-control-select2">
                                                 <option value="">Pais</option>
                                                 <?php
                                                 $qn12 = $mysqli->query("SELECT * FROM paises  ");
                                                 while($rl12=mysqli_fetch_array($qn12)){
                                                 ?>
                                                 <option value="<?=$rl12['id']?>"><?=$rl12['nombre']?></option>                
                                                <?php
                                                 }
                                                ?> 
                                                </select>
                                            </div>
                                            
                                            
                                            
                                                 <?php
                                                 }else{
                                                ?>
                                                <div class="form-group col-md-6">
                                                    <label for="checkout-first-name">Nombre</label>
                                                    <input type="text" class="form-control" name="nombrev" placeholder="Nombre">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="checkout-last-name">Apellido</label>
                                                    <input type="text" class="form-control" name="nombrev1" id="checkout-last-name" placeholder="Apellido">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="checkout-company-name">Nombre de tu negocio </label>
                                                <input type="text" class="form-control" name="name" placeholder="Nombre de tu negocio">
                                            </div>
                                             <div class="form-group">
                                                <label for="checkout-country">Pais</label>
                                              
                                                 <select  name="select1" id="select1" class="form-control form-control-select2">
                                                 <option value="">Pais</option>
                                                 <?php
                                                 $qn12 = $mysqli->query("SELECT * FROM paises  ");
                                                 while($rl12=mysqli_fetch_array($qn12)){
                                                 ?>
                                                 <option value="<?=$rl12['id']?>"><?=$rl12['nombre']?></option>                
                                                <?php
                                                 }
                                                ?> 
                                                </select>
                                            </div>
                                            <!--
                                            <div class="form-group">
                                                <label for="checkout-country">Departamento</label>
                                              
                                                 <select  name="select1" id="select1" class="form-control form-control-select2">
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
                                            <div class="form-group">
                                                <label for="checkout-country">Municipio</label>
                                           
                                                 <select name="select2" id="select2" class="form-control form-control-select2">
                                               <option value="">Municipio</option>
                                           <?php
                                         $qn = $mysqli->query("SELECT * FROM municipios  ");
                                           while($rl=mysqli_fetch_array($qn)){
                                            ?>
                                           <option value="<?=$rl['id_municipio']?>" ><?=$rl['municipio']?></option>
                       
                                          <?php

                                                }

                                               ?>
                                             </select>
                                            </div>
                                            -->
                                            <div class="form-group">
                                                <label for="checkout-company-name">Ciudad </label>
                                                <input type="text" class="form-control" name="select2" placeholder="Nombre de tu negocio">
                                            </div>
                                                                                 <?php
  if(!isset($id)){
      ?>
                                            <div class="form-group">
                                                <label for="checkout-street-address">Dirección</label>
                                                <input type="text" class="form-control"  name="direccion" placeholder="Direccion">
                                            </div>
                                    <?php
  }
  ?>
                                             <div class="form-group">
                                                <label for="checkout-country">Tipo de negocio</label>
                                               <select name="tipo" class="form-control form-control-select2">
                                                  <option value="">Tipo de negocio</option>
                                                   <?php
                                                   $qs = $mysqli->query("SELECT * FROM tipo");
                                                   while($rm=mysqli_fetch_array($qs)){
                                                      ?>
                                                   <option value="<?=$rm['id']?>"><?=$rm['tipo']?></option>
                                                      <?php
                                                        }
                                                        ?>
                                                    </select>
                                                  
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="checkout-email">Usuario</label>
                                                    <input type="text" class="form-control"  placeholder="Usuario" name="username1" autocomplete="off" >
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="checkout-phone">Contraseña</label>
                                                    <input type="text" class="form-control"  placeholder="Contraseña" name="password1">
                                                </div>

                                            </div>
                                             <div class="form-group">
                                                <label for="checkout-street-address">Confirmar contraseña</label>
                                                <input type="text" class="form-control" placeholder="Confirmar contraseña" name="cpassword">
                                            </div>
                                                                                 <?php
  if(!isset($id)){
      ?>
                                            <label for="checkout-street-address">
                                            <ad style="font-weight:700">Horario atencion de tu negocio</ad> (lo necesitaremos para poder enviar tus pedidos ).</label>
                                            <br><br>
                                            <div class="form-row" style="    width: auto;">
                                                  <label for="checkout-street-address">Lunes a sabado: </label>
                                                   &nbsp; De  &nbsp;
                                            <div class="form-group">
                                                    <input type="time" id="time1" name="time1" >
                                            </div>
                                            
                                            <div class="form-group">
                                                &nbsp; hasta &nbsp; 
                                                <input type="time" id="time2" name="time2" >
                                            </div>
                                        
                                            <div class="form-group">
                                              
                                                   <label for="checkout-street-address">Domingos y festivos: </label>
                                                   &nbsp; De  &nbsp;<input type="time" id="time3" name="time3" >
                                            </div>
                                            <div class="form-group">
                                                  &nbsp; hasta &nbsp; 
                                                <input type="time" id="time4" name="time4" >
                                            </div>

        <?php
  }}
  ?>
     </div>                                       <div class="form-group mt-3 mb-0">
                                                <button  name="enviar1" type="submit" class="btn btn-primary">Registrarse</button>
                                            </div>
                                            
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                     <?php
    function contador()
    {
        $archivo = "contador1.txt"; //el archivo que contiene en numero
        $f = fopen($archivo, "r"); //abrimos el archivo en modo de lectura
        if($f)
        {
            $contador = fread($f, filesize($archivo)); //leemos el archivo
            $contador = $contador + 1; //sumamos +1 al contador
            fclose($f);
        }
        $f = fopen($archivo, "w+");
        if($f)
        {
            fwrite($f, $contador);
            fclose($f);
        }
        return $contador;
    }
    $visitante =contador();

?>
<a style="color:white">Eres el visitante numero <?=$visitante?></a>
        <!-- site__body / end -->
        <!-- site__footer -->
            <footer class="site__footer">
            <div class="site-footer">
                <div class="container">
                    <div class="site-footer__widgets">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="site-footer__widget footer-contacts">
                                    <h5 class="footer-contacts__title">Contactos</h5>
                                    
                                    <ul class="footer-contacts__contacts">
                                        <li><i class="footer-contacts__icon fas fa-globe-americas"></i> open.com.se</li>
                                        <li><i class="footer-contacts__icon far fa-envelope"></i> servicioalcliente@open.com.se</li>
                                     
                                        <li><i class="footer-contacts__icon far fa-clock"></i>Horario de atención al cliente:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9:00am - 9:00pm  Lunes a sabado</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 col-lg-2">
                                <div class="site-footer__widget footer-links">
                                    <h5 class="footer-links__title">Información</h5>
                                    <ul class="footer-links__list">
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Acerca de nosotros</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Informacion de entrega</a></li>
                                        <li class="footer-links__item"><a href="" class="footer-links__link">Politica de privacidad</a></li>
 
                                      
                                        
                                    </ul>
                                </div>
                            </div>
                            
                           <style type="text/css">
                               .site-footer__widgets {
    padding: 25px 0 17px;
}
.footer-links li {
    display: block;
    width: 300px !important;
}
                           </style> 
                        </div>
                    </div>
                    <div class="site-footer__bottom">
                        <div class="site-footer__copyright">
                            <!-- copyright -->
                           Desarrollado por HTML - Diseño por <a href="https://themeforest.net/user/kos9" target="_blank">Kos</a>
                            <!-- copyright / end -->
                        </div>
                        
                    </div>
                </div>
                <div class="totop">
                    <div class="totop__body">
                        <div class="totop__start"></div>
                        <div class="totop__container container"></div>
                        <div class="totop__end">
                            <button type="button" class="totop__button">
                                <svg width="13px" height="8px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-up-13x8"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- site__footer / end -->
    </div>
    <!-- site / end -->
    <!-- quickview-modal -->
   
<style type="text/css">
    .site-footer {
    background-color: #26272b;
    padding: 0px 0 20px !important;
    font-size: 15px;
    line-height: 24px;
    color: #737373;
}
</style>
           
   