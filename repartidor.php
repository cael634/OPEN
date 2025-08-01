<style>
    .row {
    display: none !important;

}
.menu {
    display: none !important;
}
.cuerpo {
    background: #fff;
    padding: 0px;
    min-height: 500px;
}

</style>
<!DOCTYPE html>
<html>
<?php
if(isset($_SESSION['id_repartidor'])){
    redir("./");
}
    
if(isset($enviar)){
    $username = clear($username);
    $password = clear($password);
    $q = $mysqli->query("SELECT * FROM repartidor WHERE username = '$username' AND password = '$password'");
    if(mysqli_num_rows($q)>0){
        $r = mysqli_fetch_array($q);
        $_SESSION['id_repartidor'] = $r['id'];
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
if(isset($_SESSION['id_repartidor'])){
    redir("./");
}
    
if(isset($enviar1)){
    $nombre = clear($nombre);
    $password = clear($password);
    $cpassword = clear($cpassword);
    $username = clear($username);
    $passworld = clear($passworld);  
    $departamentos = clear($departamentos);


    $q = $mysqli->query("SELECT * FROM repartidor WHERE username = '$username'");
    if(mysqli_num_rows($q)>0){
        alert("El usuario ya está en uso",0,'registro');
        die();
    }
    if($password != $cpassword){
        alert("Las contraseñas no coinciden",0,'registro');
        die();
    }
    $mysqli->query("INSERT INTO repartidor (nombre,password,departamentos,username,passworld) VALUES ('$nombre','$password','$departamentos','$username','$passworld')");
    $q2 = $mysqli->query("SELECT * FROM repartidor WHERE username = '$username'");
    $r = mysqli_fetch_array($q2);
    $_SESSION['id_repartidor'] = $r['id'];
    alert("Te has registrado satisfactoriamente",1,'principal');
    redir("");
    die();
    
}
    ?>

<div class="wrapper">
    <div class="sign-panels">
        <div class="login">
            <div class="title">
                <span>Inicio de sesion.</span>
                 <div class="or"><span></span></div>
                <p></p>
            </div>

           
       <center>
        <form method="post" action="">
            <div class="centrar_login">
             
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Usuario" name="username"/>
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Contraseña" name="password"/>
                </div>

                <div class="form-group">
                    <button class="btn-signin"  name="enviar" type="submit"></i> Ingresar</button>

                </div>
            </div>
        </form>
    </center>
<style >
    .btn {
    padding: .5rem 1.5rem;
    border: none;
    border-radius: 4rem;
    background-repeat: #2b5876;
    color: whitesmoke;
    font-size: .7rem;
    font-family: var(--Montserrat);
    box-shadow: var(--primary-shadow);
    cursor: pointer;
}
</style>
           <a href="javascript:void(0)" class="btn-reset btn-fade">¿Olvido su contraseña? </a>
                <a href="javascript:void(0)" class="btn-member btn-fade">No tienes cuenta, registrate.</a> 
            </form>
        </div>

        <div class="signup">
            <div class="title">

                <span>Registro.</span>
                <p></p>
            </div>

        

         

            <form method="post" action="">

            <div class="centrar_login">
               
                <div class="form-group">
                    <input type="text" autocomplete="off" class="form-control" placeholder="Clave de la empresa" name="passworld"/>
                </div>

                <div class="form-group">
                    <input type="text" autocomplete="off" class="form-control" placeholder="Tu nombre" name="nombre"/>
                </div>
                <br>
                <select name="departamentos" required class="form-control">
            <option value="">Deparatamento</option>
            <?php
                $q = $mysqli->query("SELECT * FROM departamentos ORDER BY departamentos ASC");
                while($r=mysqli_fetch_array($q)){
                    ?>
                        <option value="<?=$r['id']?>"><?=$r['departamentos']?></option>
                    <?php
                }
            ?>
        </select><br>
                
                <div class="form-group">
                    <input type="text" autocomplete="off" class="form-control" placeholder="Usuario" name="username"/>
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Contraseña" name="password"/>
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Confirmar contraseña" name="cpassword"/>
                </div>


                <div class="form-group">
                    <button class="btn-signin" name="enviar1" type="submit"> Registrate</button>
                </div>

                <a href="javascript:void(0)" class="btn-login btn-fade">Ya tienes cuenta, inicia sesion.</a>
            </div>

        </form>
    </center>
           
            </form>
        </div>

        <div class="recover-password">
            <div class="title">
                <span>Recover Password</span>
                <p>Enter in the username or email associated with your account</p>
            </div>

            <form action="">
                <input type="email" placeholder="Username/Email Address" id="resetPassword" required>
                <span class="error"></span>
                <a href="javascript:void(0)" class="btn-signin btn-password">Submit Reset</a>
                <a href="javascript:void(0)" class="btn-login btn-fade"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Cancel
                    and go back to Login page </a>
            </form>

            <div class="notification">
                <p>Good job. An email containing information on how to reset your passworld was sent to
                    <span class="reset-mail"></span>. Please follow the instruction in that email to
                    reset your password. Thanks!</p>
            </div>

        </div>
    </div>
</div>

<!--
 * Created by Muhammed Erdem on 10.10.2017.
 *-->
 <style>
     /**
 * Created by Muhammed Erdem on 10.10.2017.
 */

@import url('https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700&subset=latin-ext');
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

body {
    margin: 0;
}

.wrapper {
    width: 1%;
    height: 100vh;
    background: #ededed;
    display: table-cell;
    vertical-align: middle;
    font-family: 'Dosis', sans-serif;

}

.sign-panels {
    width: 650px;
    background: #fff;
    padding: 40px 80px;
    margin: 40px auto;
    border-radius: 20px;
    text-align: center;
}
.login,.signup {
    position: relative;
}


.title {
    color: #9f9f9f;
}

.title span {
    display: block;
    font-size: 46px;
    font-weight: bold;
        color: #525252;
}

.title p {
    font-size: 20px;
    font-weight: 500;
}

.btn-face,.btn-twitter {
    color: #fff;
    display: inline-block;
    width: 200px;
    font-size: 20px;
    height: 50px;
    border-radius: 50px;
    text-decoration: none;
    padding: 11px 0;
    font-weight: 500;
}

.btn-face .fa,.btn-twitter .fa {
    margin-right: 5px;
}

.btn-face {
    background: #5397d7;
    margin-right: 25px;
}

.btn-twitter {
    background: #40b9e0;
}

.or {
    margin: 35px 0;
    font-weight: 600;
    color: #9f9f9f;
}

.or:after {
    content: '';
    display: block;
    width: 100%;
    height: 1px;
    background: #cecece;
    position: absolute;
    margin-top: -10px;
    z-index: 0;
}

.or span {
    display: block;
    background: #fff;
    width: 50px;
    margin: auto;
    position: relative;
    z-index: 2;
}

.sign-panels input {
    width: 100%;
    display: block;
    margin-bottom: 15px;
    height: 50px;
    border-radius: 50px;
    border: none;
    background: #ededed;
    text-align: center;
    padding: 10px;
    font-size: 15px;
    color: #7c7c7c;
    font-weight: 500;
}

.sign-panels input:focus {
    outline:none;
}

.sign-panels input[type="checkbox"] {
    display: none;
}

.sign-panels input[type="checkbox"] + label {
    display: block;
    width: 50%;
    text-align: left;
    padding-left: 60px;
    cursor: pointer;
    color: #828282;
    font-weight: 500;
    margin-top: 10px;
    float: left;
    height: 50px;
    padding-top: 15px;
}

.sign-panels input[type="checkbox"] + label:before {
    content: '';
    display: block;
    width: 15px;
    height: 15px;
    background: #dbdbdb;
    position: absolute;
    left: 30px;
    border-radius: 50%;
    border: 2px solid white;
    box-shadow: 0 0 0 5px #ededed;
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
}
.sign-panels input[type="checkbox"]:checked + label:before {
    background: #FF5722;
    box-shadow: 0 0 0 5px #FF5722;
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
}

.btn-signin {
    display: inline-block;
    width: 50%;
    margin-top: 10px;
    height: 50px;
    background: #ec581e;
    border-radius: 50px;
    padding: 11px;
    font-size: 20px;
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    border: none;
    box-shadow: none;
    cursor: pointer;
}

.btn-reset,.btn-member,.btn-fade {
    font-size: 19px;
    font-weight: 500;
    color: #9f9f9f;
    display: block;
    /*width: 210px;*/
    margin: 30px auto 0;
    text-decoration: none;

}
.btn-member {
    margin-top: 15px;
}

.btn-reset .fa,.btn-member .fa {
    margin-left: 6px;
}

.notification p {
    font-size: 20px;
    font-weight: 600;
    color: #9f9f9f;
}

.notification span {
    color: #ec581e;
}

.error {
    display: block;
    color: #ec581e;
    font-size: 20px;
    font-weight: 600;
    margin: 15px 0;
}

@media screen and (max-width: 768px) {
    .sign-panels {
        width: 90%;
        padding: 40px;
    }
}

@media screen and (max-width: 570px) {
    .sign-panels {
        padding: 40px 20px;
    }

    .btn-face, .btn-twitter {
        width: 100%;
    }
    .btn-face {
        margin-right: 0;
        margin-bottom: 25px;
    }
}

@media screen and (max-width: 480px) {
    .sign-panels input[type="checkbox"] + label {
        width: 100%;
    }

    .btn-signin {
        width: 80%;
    }

    .title span {
        font-size: 36px;
    }

}

 </style>
 <script>
     /**
 * Created by Muhammed Erdem on 10.10.2017.
 */

// $('.login').hide();
$('.signup').hide();
$('.recover-password').hide();


$('.btn-reset').click(function () {
    $('.login').hide();
    $('.recover-password').fadeIn(300);
});

$('.btn-member').click(function () {
    $('.login').hide();
    $('.signup').fadeIn(300);
});


$('.btn-login').click(function () {
    $('.signup').hide();
    $('.recover-password').hide();
    $('.login').fadeIn(300);

});

$('.notification').hide();

$('.btn-password').click(function () {

    if($('#resetPassword').val()==0) {
        // $('#resetPassword').after('<span class="error">Email not valid.</span>')
        $('.error').text('Email not valid.')
    }

   else {
        $('.reset-mail').text($('#resetPassword').val());
        $('.recover-password form').hide();
        $('.notification').fadeIn(300);
    }
});

 </script></html>