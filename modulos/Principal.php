
<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilocoses.css"/>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="fontawosome/css/all.css"/>
    <script type="text/javascript" src="fontawesome/js/all.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>

    <meta charset="UTF-8">
    <title>Slider Responsive</title>
    <link rel="stylesheet" href="flexslider.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider({
        touch: true,
        pauseOnAction: false,
        pauseOnHover: false,
    });
  });
</script>
</head>
<body>
    <div class="flexslider">
        <ul class="slides">
            <li>
                <img src="1.jpg" alt="">
                <section class="flex-caption">
                    <p>LOREM IPSUM 1</p>
                </section>
            </li>
            <li>
                <img src="2.jpg" alt="">
                <section class="flex-caption">
                    <p>LOREM IPSUM 2</p>
                </section>
            </li>
            <li>
                <img src="3.jpg" alt="">
                <section class="flex-caption">
                    <p>LOREM IPSUM 3</p>
                </section>
            </li>
        </ul>
    </div>
</body>
</html>
<style>
    @font-face {
  font-family: 'flexslider-icon';
  src: url('fonts/flexslider-icon.eot');
  src: url('fonts/flexslider-icon.eot?#iefix') format('embedded-opentype'), url('fonts/flexslider-icon.woff') 
  format('woff'), url('fonts/flexslider-icon.ttf') format('truetype'), url('fonts/flexslider-icon.svg#flexslider-icon') format('svg');
  font-weight: normal;
  font-style: normal;
}

.flexslider{
    width: 90%;
    position: relative;
}

.slides{
    overflow: hidden;
}

.slides img{
    width: 10%;
}

.slides,
.flex-control-nav,
.flex-direction-nav {
  margin: 0;
  padding: 0;
  list-style: none;
}

.flex-control-nav{
    width: 100%;
    text-align: center;
    position: absolute;
    bottom: 5%;
    z-index: 999;
}

.flex-control-nav li{
    display: inline-block;
    margin: 0 6px;
}

.flex-control-nav li a{
    display: block;
    background: #777777;
    width: 12px;
    height: 12px;
    border-radius: 12px;
    text-indent: -9999px;
}

.flex-control-nav li a:hover{
    background: #2E2E2E;
}

.flex-control-nav li a.flex-active{
    background: #2E2E2E;    
}

.flex-direction-nav a{
    display: block;
    text-decoration: none;
    position: absolute;
    top: 50%;
    z-index: 999;
    width: 40px;
    height: 40px;
    overflow: hidden;
    opacity: 0;
    -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.flex-direction-nav .flex-prev{
    left: 0;
}

.flex-direction-nav .flex-next{
    right: 0;
}

.flex-direction-nav a:before {
  font-family: "flexslider-icon";
  font-size: 40px;
  display: inline-block;
  content: '\f001';
  color: #fff;
  text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.3);
}
.flex-direction-nav a.flex-next:before {
  content: '\f002';
}

.flex-caption p{
    font-family: Lato;
    position: absolute;
    top: 50%;
    text-align: center;
    width: 100%;
    font-size: 45px;
    color: #fff;
    font-weight: bold;
}

.flexslider:hover .flex-direction-nav .flex-prev{
    opacity: 0.7;
    left: 10px;
}

.flexslider:hover .flex-direction-nav .flex-prev:hover{
    opacity: 1;
}

.flexslider:hover .flex-direction-nav .flex-next{
    opacity: 0.7;
    right: 10px;
}

.flexslider:hover .flex-direction-nav .flex-next:hover{
    opacity: 1;
}
</style>
<script>
    $(document).ready(function(){
    var imgItems = $('.slider li').length; // Numero de Slides
    var imgPos = 1;

    // Agregando paginacion --
    for(i = 1; i <= imgItems; i++){
        $('.pagination').append('<li><span class="fa fa-circle"></span></li>');
    } 
    //------------------------

    $('.slider li').hide(); // Ocultanos todos los slides
    $('.slider li:first').show(); // Mostramos el primer slide
    $('.pagination li:first').css({'color': '#CD6E2E'}); // Damos estilos al primer item de la paginacion

    // Ejecutamos todas las funciones
    $('.pagination li').click(pagination);
    $('.right span').click(nextSlider);
    $('.left span').click(prevSlider);


    setInterval(function(){
        nextSlider();
    }, 4000);

    // FUNCIONES =========================================================

    function pagination(){
        var paginationPos = $(this).index() + 1; // Posicion de la paginacion seleccionada

        $('.slider li').hide(); // Ocultamos todos los slides
        $('.slider li:nth-child('+ paginationPos +')').fadeIn(); // Mostramos el Slide seleccionado

        // Dandole estilos a la paginacion seleccionada
        $('.pagination li').css({'color': '#858585'});
        $(this).css({'color': '#CD6E2E'});

        imgPos = paginationPos;

    }

    function nextSlider(){
        if( imgPos >= imgItems){imgPos = 1;} 
        else {imgPos++;}

        $('.pagination li').css({'color': '#858585'});
        $('.pagination li:nth-child(' + imgPos +')').css({'color': '#CD6E2E'});

        $('.slider li').hide(); // Ocultamos todos los slides
        $('.slider li:nth-child('+ imgPos +')').fadeIn(); // Mostramos el Slide seleccionado

    }

    function prevSlider(){
        if( imgPos <= 1){imgPos = imgItems;} 
        else {imgPos--;}

        $('.pagination li').css({'color': '#858585'});
        $('.pagination li:nth-child(' + imgPos +')').css({'color': '#CD6E2E'});

        $('.slider li').hide(); // Ocultamos todos los slides
        $('.slider li:nth-child('+ imgPos +')').fadeIn(); // Mostramos el Slide seleccionado
    }

});
</script>