<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <title>Hello, world!</title>
  </head>
  <body>
   <section class="contact-box">
       <div class="row no-gutters bg-dark">
           <div class="col-xl-5 col-lg-12 register-bg">
            <div class="position-absolute testiomonial p-4">
                <h3 class="font-weight-bold text-light">La siguiente revolución digital.</h3>
                <p class="lead text-light">La nueva etapa de la revolución digital se aproxima.</p>
            </div>
           </div>
           <div class="col-xl-7 col-lg-12 d-flex">
                <div class="container align-self-center p-6">
                    <h1 class="font-weight-bold mb-3">Crea tu cuenta gratis</h1>
                    <div class="form-group">
                        <button class="btn btn-outline-dark d-inline-block text-light mr-2 mb-3 width-100"><i class="icon ion-logo-google lead align-middle mr-2"></i> Google </button>
                        <button class="btn btn-outline-dark d-inline-block text-light mb-3 width-100"><i class="icon ion-logo-facebook lead align-middle mr-2"></i> Facebook</button>
                    </div>
                    <p class="text-muted mb-5">Ingresa la siguiente información para registrarte.</p>

                    <form>
                        <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Nombre <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Tu nombre">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Apellido <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Tu apellido">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Correo electrónico <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" placeholder="Ingresa tu correo electrónico">
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Contraseña <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" placeholder="Ingresa una contraseña">
                        </div>
                        <div class="form-group mb-5">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label text-muted">Al seleccionar esta casilla aceptas nuestro aviso de privacidad y los términos y condiciones</label>
                            </div>
                        </div>
                        <button class="btn btn-primary width-100">Regístrate</button>
                    </form>
                    <small class="d-inline-block text-muted mt-5">Todos los derechos reservados | © 2019 Templune</small>
                </div>
           </div>
       </div>
   </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<style>
    :root {
    --color-dark: #15181f;
    --color-dark-x: #2d343f;
    --color-dark-xx: #1f232b;
    --color-light: #ffffff;
    --color-grey: #f5f6f8;
}

body {
    font-family: 'Roboto', sans-serif;
    font-size: 1.1rem;
    font-weight: 300;
    background-color: var(--color-grey);
    color: var(--color-light);
    letter-spacing: .05rem;
}

.bg-light {
    background-color: var(--color-light)!important;
}

.bg-dark {
    background-color: var(--color-dark)!important;
}

.p-6 {
    padding: 4rem 7rem;
}

.contact-box {
    padding: 3rem;
}

.btn {
    font-weight: 400;
    padding: 1rem 2rem;
    border-radius: 5rem;
    min-width: 10rem;
}

.btn-outline-dark {
    border: 2px solid var(--color-dark-xx);
}


.form-control {
    background-color: var(--color-dark-xx);
    border: 2px solid var(--color-dark-xx);
    border-radius: .2rem;
    padding: 1.5rem 1rem;
}

.register-bg {
    background-image: url('images/hero.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    min-height: 100vh;
}

.testiomonial {
    bottom: 10px
}

@media (max-width: 575.98px) {
    .p-6 {
        padding: 2rem;
    }

    .contact-box {
        padding: 0;
    }

    .width-100 {
        width: 100%;
    }
}

@media (max-width: 1200px) { 
    .register-bg {
        min-height: 50vh;
    }
}
</style>