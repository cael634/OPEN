<!DOCTYPE html>
<html>
    <head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Responsive Animated Login Form Using HTML & CSS & JavaScript (2021)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- primero -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6224266730639986"
     data-ad-slot="5729493737"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</head>
<body>
  <div class="contact-wrapper">
  
    <div class="right_side">
         <div class="socials-wrapper"  style="    text-align: center;">
<!--            
      <h2>¡Digitaliza tus cuentas!</h2>

      <h2>Ahorra trabajo y tiempo, deja de depender de facturas físicas</h2>
<a style="text-align:center">Organizamos tus demas facturas, gastos y pedidos. Ten el control de tus gastos</a> 
   <ul>
          <li><a href="#" class="facebook"><i class="fas fa-chart-area"></i></a></li>
          <li><a href="#" class="twitter"><i class="far fa-calendar-alt"></i></a></li>
          <li><a href="#" class="instagram"><i class="far fa-clipboard"></i></a></li>
          <li><a href="#" class="youtube"><i class="fas fa-phone-square"></i></a></li>
        </ul> 
 
       
      
            <div class="form-row"> 
              <a href="https://open.com.se/?p=registron" class="button" style="background-color: #7b5dfa;
    border: .10em solid #7b5dfa;
    color: #fff;
    cursor: pointer;
    font-weight: bold;
    transition: all 300ms ease;
        border-radius: .5em;
        padding: 0.7em 0em;
    width: 100%;
        text-align: center;
    font-family: inherit;">Inicio/Registro</a>
     </div>-->
  <form style="text-align:center">
         
              <h2 style="text-align: center;    color: #3e3f5e;
    font-size: 1.75em;
    text-align: center;">Administra tu vida escolar/Universitaria </h2>
    <p>
               <hr width=200>
            <p>
        <div class="form-row" style="text-align:center"></div>
     <h2 style="background: #fff;
    color: #3e3f5e;
    font-size: 1rem;
    position: relative;
    text-align: center;
    z-index: 10;">Ahorra trabajo y tiempo, deja de depender de anotaciones en cuadernos.</h2>
    <a style="text-align:center">Organiza:</a><br>
    * Tus clases (Horario y link de clase virtal)<br>
    * Tus calificaciones (Calculamos los procentajes de tus notas)<br>
    * Tus Recordatorios<br>
    * Tus Gastos
    <br>
      <div class="form-row"> 
              <a href="https://open.com.se/?p=registro&horario=1" class="button" style="background-color: #7b5dfa;
    border: .10em solid #7b5dfa;
    color: #fff;
    cursor: pointer;
    font-weight: bold;
    transition: all 300ms ease;
        border-radius: .5em;
        padding: 0.7em 0em;
    width: 100%;
        text-align: center;
    font-family: inherit;">Iniciar sesion</a>
     </div>
        <div class="form-row"> 
              <a href="https://open.com.se/?p=registron&horario=1" class="button" style="background-color: #7b5dfa;
    border: .10em solid #7b5dfa;
    color: #fff;
    cursor: pointer;
    font-weight: bold;
    transition: all 300ms ease;
        border-radius: .5em;
        padding: 0.7em 0em;
    width: 100%;
        text-align: center;
    font-family: inherit;">Registro</a>
     </div>


          <p>
                <hr width=200>
            <p>
             
                </form>

  <form>


</form>

   
  
      </div>
    </div>
 
     <?php
    function contador()
    {
        $archivo = "contador.txt"; //el archivo que contiene en numero
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
      <center>OPEN</center>
         <body>

    </body>
    
  </div>

</body>

</html>


<style type="text/css">
  @import url("https://fonts.googleapis.com/css?family=Rajdhani:500,700&display=swap");
*,
*:before,
*:after {
  box-sizing: border-box;
} 
.contact-wrapper {
    background: #fff;
    box-shadow: 3px 3px 2px rgba(0,0,0,0.15);
    border-radius: .75em;
    padding: 2em 1em!important;
    width: 60em;
    display: block!important;
    align-items: center;
    justify-content: space-between;
}
body {
  -webkit-box-align: center;
          align-items: center;
  background: #614385;   
  background: -webkit-linear-gradient(to right, #516395, #614385);
  background: linear-gradient(to right, #516395, #614385); 
  display: -webkit-box;
  display: flex;
  font-family: "Rajdhani", sans-serif;
  height: auto;
  -webkit-box-pack: center;
          justify-content: center;
} 
.contact-wrapper{
  background:#fff;
  box-shadow: 3px 3px 2px rgba(0,0,0,0.15);
  border-radius: .75em;
  padding:4em 2em;
  width:60em;
  display:flex;

  align-items:center;
  justify-content:space-between;
}
.left_side,
.right_side{
  width:50%;
  padding:0 3em;
}
.right_side > h2{
  color:#3e3f5e;
  font-size: 1.75em;
  text-align: center;
}
.contact-wrapper {
    height: auto;
    flex-direction: column-reverse!important;
}
.left_side, .right_side {
    width: 100%;
    padding: 0 1em!important;
}
form{
  margin:1em 0;
}
form > .form-row{
  display:-webkit-box;
  display:flex;
  margin:.75em 0;
  position:relative;
}
form > .form-row > span{
  background:#fff;
  color:#adafca;
  display:inline-block;
  font-weight: 400;
  left:1em;
  padding:0 .5em;
  position:absolute;
  pointer-events:none;
  -webkit-transform:translateY(-50%); 
  transform:translateY(-50%); 
  top:50%;
  -webkit-transition: all 300ms ease;
  transition: all 300ms ease;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
form > .form-row > input,
form > .form-row > button{
  border-radius: .5em;
  padding:1em .5em;
  width:100%;
  font-family: inherit;
}
form > .form-row > input{
  font-weight: bold;
  -webkit-transition:100ms ease all;
  transition:100ms ease all;
  width:100%;
}
form > .form-row > input[type=text],
form > .form-row > input[type=password]{
  border:.075em solid #ddd;
}
form > .form-row > input:valid + span{
  top:0;
  font-size: .90rem;
}
form > .form-row > input:focus + span{
  top:0;
  color: #7b5dfa;
  font-weight: 600;
}
form > .form-row > input:required{
  box-shadow: none;
}
form > .form-row > input:focus{
  border-color:#7b5dfa;
  outline:none;
}
form > .form-row > input:focus:invalid{
  box-shadow: none;
  top:50%;
}
form > .form-row > input:focus:valid{
  top:0;
}
form > .form-row > button{
  background-color:#7b5dfa;
  border:.10em solid #7b5dfa;
  color:#fff;
  cursor: pointer;
  font-weight: bold;
  transition:all 300ms ease;
}
form > .form-row > button:focus{
  border:0.1em solid #533cf8;
  outline:none;
}
form> .form-row > button:hover{
  background:#6744f9;
}

h2 {
    font-size: 25px;
    line-height: 1.2!important;
}
.socials-wrapper > h2{
  background:#fff;
  color:#3e3f5e;
  font-size: 1rem;
  position: relative;
  text-align: center;
  z-index: 10;
}
.socials-wrapper > h2:before,
.socials-wrapper > h2:after{
  background:#d3d3e2;
  content:'';
  display: block;
  height:.10em;
  position: absolute;
  top:50%;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
  width:17.5%;
}
.socials-wrapper > h2:before{
  left:0;
}
.socials-wrapper > h2:after{
  right:0;
}
.socials-wrapper > ul{
  display:-webkit-box;
  display:flex;
  list-style: none;
  -webkit-box-pack: center;
  justify-content:center;
  padding:0;
}
.socials-wrapper > ul > li{
  margin:.5em;
}
.socials-wrapper > ul > li > a{
  -webkit-box-align:center;
  align-items:center;
  border-radius: .5em;
  color:#fff;
  display:-webkit-box;
  height:2em;
  -webkit-box-pack: center;
  justify-content:center;
  text-align: center;
  text-decoration: none;
  -webkkit-transition:all 300ms ease;
  transition:all 300ms ease;
  width:2em;
}
.socials-wrapper > ul > li > a.facebook{
  background:#3763d2;
}
.socials-wrapper > ul > li > a.twitter{
  background:#1abcff;
}
.socials-wrapper > ul > li > a.instagram{
  background:#ff00aa;
}
.socials-wrapper > ul > li > a.youtube{
  background:#fd434f;
}
.socials-wrapper > ul > li > a:hover{
  -webkit-transform:translateY(-0.50em);
   transform:translateY(-0.50em);
}

@media (max-width:992px){ 
  .socials-wrapper > h2:after,
  .socials-wrapper > h2:before{
    width:10.5%
  }
}
@media (max-width:767px){
  .contact-wrapper{
    flex-direction: column;
  }
  .left_side,
  .right_side{
    width:100%;
    padding:0 3em;
  }
  .socials-wrapper > h2:after,
  .socials-wrapper > h2:before{
    width:10.5%
  }
}

  
</style>
