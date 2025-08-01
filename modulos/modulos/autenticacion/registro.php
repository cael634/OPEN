

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
    
if(isset($enviar)){
    $username1 = clear($username1);
    $password1 = clear($password1);
    $q = $mysqli->query("SELECT * FROM clientes WHERE username = '$username1' AND password = '$password'");
    if(mysqli_num_rows($q)>0){
        $r = mysqli_fetch_array($q);
        $_SESSION['id_cliente'] = $r['id'];
        if(isset($return)){
            redir("?p=".$return);
        }else{
            redir("./");
        }
    }else{
        alert("Los datos no son validos",0,'registro');
        
    }
}
    ?>
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
        alert("El usuario ya está en uso",0,'registro');
        die();
    }
    if($password != $cpassword){
        alert("Las contraseñas no coinciden",0,'registro');
        die();
    }
    $mysqli->query("INSERT INTO clientes (username,password,name,nombrev,departamentos,direccion,municipio,tipo) VALUES ('$username1','$password1','$name','$nombrev','$select1','$direccion','$select1','$tipo')");
    $q2 = $mysqli->query("SELECT * FROM clientes WHERE username = '$username'");
    $r = mysqli_fetch_array($q2);
    $_SESSION['id_cliente'] = $r['id'];
    alert("Te has registrado satisfactoriamente",1,'productos');
    die();
    redir("./");
}
    ?>
        <div class="site__body" >

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
                                    
                                         <li class="account-nav__item  account-nav__item--active ">
                                        <a href="?p=registro&id=1">Inicio de sesion</a>
                                    </li>
                                    
                                    <li class="account-nav__item ">
                                        <a href="?p=registron&id=1">Registro</a>
                                    </li>
                                    
                                   <?php
  }else{
                                   ?>
                                     <li class="account-nav__item ">
                                          <li class="account-nav__item  account-nav__item--active ">
                                        <a href="?p=registro">Inicio de sesion</a>
                                    </li>
                                    
                                   <li class="account-nav__item ">
                                        <a href="?p=registron">Registro</a>
                                    </li>
                                    
                                   <?php
  }
                                   ?>
                                   
                                   
                                </ul>
                            </div>
                        </div>
                        
                            <div class="card flex-grow-1 mb-md-0">
                                <div class="card-body">
                                    <h3 class="card-title">Inicio de sesión</h3>
                                    <form method="post" action="">
                                        <div class="form-group">
                                            <label>Usuario</label>
                                            <input type="text" class="form-control" placeholder="Usuario" name="username1">
                                        </div>
                                        <div class="form-group">
                                            <label>Contraseña</label>
                                            <input type="password" class="form-control" placeholder="Contraseña" name="password1">
                                           
                                        </div>
                                        
                                        <button type="submit" name="enviar" class="btn btn-primary mt-4">Iniciar</button>
                                    </form>
                                     <br>
                                     ¿Olvidaste tu contraseña?:<br> Para restablecer contactanos a:  servicioalcliente@open.com.se
                                    <ul><br>
<li><p><strong style="font-size:23px">Te ayudamos en las cuentas</strong></p></li>
<li><p><strong style="font-size:18px">Digitaliza:</strong></p></li>
<li><p>* Tu cuaderno de cuentas</p></li>
<li><p>* Tus pedidos (puedes guardar una foto de la factura)</p></li>
<li><p>* Recordatorio de facturas</p></li>
<li><p>* Otros gastos</p></li>

</ul>
                                </div>
                        
                    </div>
                </div>
                
            </div>
           
        </div>
             <?php
    function contador()
    {
        $archivo = "contador12.txt"; //el archivo que contiene en numero
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
           
   
    <!-- photoswipe / end -->
    <!-- js -->

</body>

</html>