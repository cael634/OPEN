<body>
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
</body>

    <style type="text/css">
        .cuerpo {
    background: #fff;
    padding: 0px !important;
    min-height: auto !important;
    text-align: initial!important;
}
.card-body {
    padding: 1rem!important;
}

.card-b
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
                               
                                <li class="breadcrumb-item active" aria-current="page">Horario</li>
                                   <a href="?p=materia">  <input type="submit" class="btn btn-primary" name="Despachado" value="Configurar " style="
    background-color: #36b9cc;
    border: aliceblue;
"></a>
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
                                   <li class="account-nav__item  account-nav__item--active ">
                                
                        
                                    <?php
  $q2 = $mysqli->query("SELECT * FROM materia WHERE id = '$ide'");
  $r2 = mysqli_fetch_array($q2);
                                    ?>
                                        <a href="">Calificaciones <?=$r2['nombrem']?></a>
                                    </li>
                                
                                    
                                   
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-12 col-lg-9 mt-4 mt-lg-0">
            
                            <div class="card">
                              
                        
                                <div class="card-body">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-lg-10 col-xl-8">
                                            <form method="post" action="">
                                            <div class="form-row">
                                                <?php
$sq = $mysqli->query("SELECT * FROM notaid WHERE id_materia = '$ide'  ");
$contador198 = 0;
while($rq=mysqli_fetch_array($sq)){

$contador198++;

                                                ?>
                                                
  <div class="card border-left-success shadow h-100 py-2" style="box-shadow: none!important;border: 1px solid #bbbbc3;    width: -webkit-fill-available;">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                       <div class="text-xs font-weight-bold text-success text-uppercase mb-1"style="font-size:15px"><a href="?p=calificaciones&ide=<?=$rq['id']?>"><?=$rq['id_materia']?></a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" style=" font-size:15px;   width: 203px;">Porcentaje: <a href="<?=$rq['tipo']?>" style="font-size:15px"><?=$rq['porcentaje']?> %</a></div>
                     
                    </div>
                    <div class="col-auto" style="width:70px;    text-align: center;" >
                        Nota <br>
                        4,0
                    </div>
                  </div>
                </div>
              </div>
              <?php
              }if($contador198 == 0){
              ?>
                      
          <div class="card border-left-success shadow h-100 py-2" style="box-shadow: none!important;border: 1px solid #bbbbc3;    width: -webkit-fill-available;">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                       <div class="text-xs font-weight-bold text-success text-uppercase mb-1"style="font-size:15px; text-align: center;">No has agregado ni una calficacion</div><br>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" style=" font-size:15px;   text-align: center;   "><a href="?p=calificacionestar" >Agregar calificaciones</a> </div>
                     
                    </div>
                   
                  </div>
                </div>
              </div>                                    
                <?php
              }
              ?>
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
           
   