
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>

<style type="text/css">
#wrapper #content-wrapper {
    background-color: white!important;
    width: 100%;
    overflow-x: hidden;
}
.p-5 {
    padding: 3% 17% 3% 17%!important;
}
.container {
    max-width: 100%;
}
.container, .container-fluid {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
    background: white!important;
  
}
.card-header:first-child {

}


.shadow {
    box-shadow: none!important;
}
.bg-gradient-primary {
background:white!important;
    background-size: cover;
}.bg-login-image {
    background: url('titulo12.png')!important;
    background-position: center;
    background-size: cover;
}
select.form-control, select.form-control:valid, select.form-control.is-valid, select.form-control:invalid, select.form-control.is-invalid {
    background-image: none!important;
    background-repeat: no-repeat;
    /* background: bisque; */
    background-position-y: 12px!important;
    background-position-x: 4px!important;
    background-size: 5px 10px!important;
}
.topbar {
    height: 34px;
    background: white;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-bottom: white!important;
    font-size: 14px;
    line-height: 14px;
    color: #99bbff;
    position: relative;
    z-index: 20;
}

.topbar {
    height: 4.375rem;
    border-block-end: 1px solid #e3e6f0!important;
}
</style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
    <!-- css -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/photoswipe/photoswipe.css">
    <link rel="stylesheet" href="vendor/photoswipe/default-skin/default-skin.css">
    <link rel="stylesheet" href="vendor/select2/css/select2.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- font - fontawesome -->
    <link rel="stylesheet" href="vendor/fontawesome/css/all.min.css">
    <!-- font - stroyka -->
    <link rel="stylesheet" href="fonts/stroyka/stroyka.css">
  <?php
include "../configs/config.php";
include "../configs/funciones.php";
date_default_timezone_set('America/Bogota'); 
if(isset($logear)){
  $username1 = clear($username1);
  $password1 = clear($password1);

  $q = $mysqli->query("SELECT * FROM admins WHERE username = '$username1' AND password = '$password1'");

  if(mysqli_num_rows($q)>0){
    $r = mysqli_fetch_array($q);
    $_SESSION['id_vendedor'] = $r['id'];
    redir("./");
  }else{

   
  }


}


if(!isset($_SESSION['id_vendedor'])){
  ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>OPEN para empresa</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container" style=" max-width: 100%;">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9" style="
    max-width: 100%;">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
            
              <div class="col-lg-6" style="flex: 0 0 100%;
    max-width: 100%;">
                <div class="p-5" style="padding: 3% 15% 3% 15%!important; 

    border-radius: 36px;
    border: 2px solid;
">
                  <div class="text-center">
                      <img src="logo.png" style="    width: 70px;">
                    <h1 class="h4 text-gray-900 mb-4" style="
    margin-bottom: 0.5rem!important;
">Inicio para empresas</h1>
                    <label  for="customCheck">Eficiencia en la toma de pedidos</label>
                    <br>
                    <br>

                  </div>
                  <?php
                  if(isset($logear)){
  $username1 = clear($username1);
  $password1 = clear($password1);

  $q = $mysqli->query("SELECT * FROM admins WHERE username = '$username1' AND password = '$password1'");

  if(mysqli_num_rows($q)>0){
    $r = mysqli_fetch_array($q);
    $_SESSION['id_vendedor'] = $r['id'];
    redir("./");
  }else{
      ?>
          <ad style="color:red">  <i class="fas fa-exclamation-circle"></i> El usuario o contraseña son incorrectos</ad>  
          <?php
   
  }


}
?>
                  <form class="user">
                    <div class="form-group">
                      <input type="text" placeholder="Usuario" class="form-control form-control-user" name="username1">
                    </div>
                    <div class="form-group">
                      <input type="password" placeholder="Contraseña" class="form-control form-control-user" name="password1">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Recordar</label>
                      </div>
                    </div>
                     <center> <button  name="logear" type="submit" class="btn btn-primary btn-user btn-block" style="    max-width:400px;padding: 0px;min-height: 40px;">Iniciar</button></center>
                    <hr>
                   
                    
                  </form>
                  <hr>
                  
                  <div class="text-center">
                    <a class="small" href="registroempresa.php" style="font-size">Empieza a tomar los pedidos de tus clientes.<br>¡Crea una cuenta!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

  <?php
  die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>OPEN para empresa</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="open12498.png">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="
    background-image: linear-gradient(180deg,#36373a 10%,#36373a 100%)!important;"
>

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php" style="
    height: 3.375rem;
">
       
       <img src="open.png" style="
    width: 64px;
    height: 40px;
    text-align: center;
">
      </a>
       
     
      </a>
<style type="text/css">
  .sidebar-dark .sidebar-brand {
    color: #fff;
    background: #e2013b;

}
.bg-gradient-primary {
   
    background-size: cover;
    background-image: none;
}
</style>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Principal</span></a>
      </li>
<!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
          <li class="nav-item">
        <a class="nav-link" href="./?p=agregar_producto"  >
         <i class="fas fa-boxes"></i>
          <span>Productos</span></a>
      </li>
     
        
       <?php
                $qn = $mysqli->query("SELECT * FROM admins WHERE id= '".$_SESSION['id_vendedor']."' ");
                $rl=mysqli_fetch_array($qn);
                 if ($rl['entrega']==1) {
       
                    ?>
       <li class="nav-item">
        <a class="nav-link" href="./?p=distribu" >
        <i class="fas fa-industry"></i>
          <span> Puntos de distribucion</span></a>
      </li>

       <?php
                }
            ?>
        <li class="nav-item">
        <a class="nav-link" href="./?p=clientes"  >
          <i class="fas fa-store"></i>
          <span>Clientes</span></a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="./?p=manejar_tracking" >
          <i class="fas fa-dolly-flatbed"></i>
          <span>Todos los pedidos</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./modulos/chat.php" >
        <i class="fas fa-comments"></i>
          <span>Chat Cliente-Distribuidor</span></a>
      </li>
        <?php
                $qn = $mysqli->query("SELECT * FROM admins WHERE id= '".$_SESSION['id_vendedor']."' ");
                $rl=mysqli_fetch_array($qn);
                 if ($rl['tipo']==1) {
       
                    ?>
      <li class="nav-item">
        <a class="nav-link" href="./?p=pedidos" >
          <i class="far fa-check-square"></i>
          <span>Revisar pedidos</span></a>
      </li>
      <?php
    }
    ?>
      
       
        <li class="nav-item">
        <a class="nav-link" href="./?p=estadistica" >
          <i class="fas fa-chart-bar"></i>
          <span>Estadistica</span></a>
      </li>
      
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Logistica (opcional)
      </div>
       <li class="nav-item">
        <a class="nav-link" href="./?p=seguimiento" >
        <i class="fas fa-shipping-fast"></i>
          <span>Seguimiento</span></a>
      </li>
       <?php
                $qn = $mysqli->query("SELECT * FROM admins WHERE id= '".$_SESSION['id_vendedor']."' ");
                $rl=mysqli_fetch_array($qn);
                 if ($rl['tipo']==1) {
       
                    ?>
       <li class="nav-item">
        <a class="nav-link"  href="./?p=lunes" >
           <i class="fas fa-route"></i>
          <span> Rutas</span></a>
      </li>
      <?php
    }
    ?>
    
      <li class="nav-item">
        <a class="nav-link" href="./?p=distribuidor"   >
          <i class="fas fa-users"></i>
          <span>Personal distribuidor</span></a>
      </li>
      <?php
                $qn = $mysqli->query("SELECT * FROM admins WHERE id= '".$_SESSION['id_vendedor']."' ");
                $rl=mysqli_fetch_array($qn);
                 if ($rl['tipo']==1) {
       
                    ?>

       <li class="nav-item">
        <a class="nav-link" href="./?p=transporte" >
         <i class="fas fa-truck-moving"></i>
          <span>Transportes</span></a>
          <?php
        }
        ?>
           
      <!-- Nav Item - Pages Collapse Menu -->
     

      <!-- Nav Item - Utilities Collapse Menu -->
     

      <!-- Divider -->
 

      <!-- Heading -->
    

      <!-- Nav Item - Pages Collapse Menu -->
    

      <!-- Nav Item - Charts -->
    

      <!-- Nav Item - Tables -->
   

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" style="box-shadow: 0 .15rem 1.75rem 0 rgba(255, 255, 255, 0)!important">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->

          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button" style="
                  width: 100%;">
                  <i class="fas fa-search fa-sm"></i>
                </button>
                </button>
              </div>
            </div>
          </form>
          <center style="padding: 8px;">¡Bienvenido! Asesoramiento y/o preguntas. Correo: cael04311@gmail.com </center>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=admin_name_connected( $_SESSION['id_vendedor'])?></span>
              <?php
                $qa = $mysqli->query("SELECT * FROM admins WHERE id= '".$_SESSION['id_vendedor']."' ");
                $ra=mysqli_fetch_array($qa);
                if($ra['imagen']!=0){
                    ?>
                  <img class="img-profile rounded-circle" src="productos/<?=$ra['imagen']?>">
                  <?php
                }else{
            
              }
              ?>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <a class="dropdown-item" href="?p=configsinf">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Configuracion
                </a>
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="?p=logoute">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar sesion
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
     
<?php
    if(!isset($p)){
    ?>

          <!-- Page Heading -->
         
<i class="fas fa-star"></i> &nbsp;Bienvenido, empieza añadiendo tus productos en la seccion de&nbsp; <i class="fas fa-boxes"></i>&nbsp;Productos
<br>
<?php
  $q12t = $mysqli->query("SELECT * FROM admins WHERE id = '".$_SESSION['id_vendedor']. "'");
  $r12t = mysqli_fetch_array($q12t);

    ?>
<i class="fas fa-star"></i> &nbsp;El código para tus clientes que deben digitar en la App es: para agregarte automáticamente a su lista de proveedores y poder realizarte pedidos y ver tu catálogo es: 
<?=$r12t['select7']?>, aun así también aparceras para ellos en los proveedores cerca a su zona
          <!-- Content Row -->
          
          <div class="row">

<?php
$semana = date("W");
$contador5 = 0;
$sq = $mysqli->query("SELECT * FROM compven WHERE semana = '$semana'  AND  id_vendedor = '".$_SESSION['id_vendedor']. "' ");
while($rq =mysqli_fetch_array($sq)){
$contador5 ++;}?>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2" style="box-shadow: none!important;border: 1px solid #bbbbc3;">
                <div class="card-body" >
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="color:#4e73df">Pedidos esta semana</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$contador5?></div>
                    </div>
                    <div class="col-auto">
                         <i class="fas fa-box-open" style="    font-size: 33px;
    color: #dddfeb;
"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
              $mes = date('m');
              $anioz = date('Y');
$id_vendedor =$_SESSION['id_vendedor'];
$s30 = "SELECT  COALESCE(SUM(monto),0) AS f30 FROM compven WHERE id_vendedor = '$id_vendedor' AND MONTH(fecha)= '$mes' AND YEAR(fecha) = $anioz";
$res30= $mysqli->query($s30);
$data30=mysqli_fetch_array($res30);
?>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2" style="box-shadow: none!important;border: 1px solid #bbbbc3;">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Ventas de este mes</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$ <?=number_format($data30['f30'])?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2" style="box-shadow: none!important;border: 1px solid #bbbbc3;">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pedidos Revisados</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <?php
$sg = $mysqli->query("SELECT * FROM compven WHERE estado = 1 AND id_vendedor = '".$_SESSION['id_vendedor']. "' ");
$contador36 = 0;
$contadortore =0;
while($rg=mysqli_fetch_array($sg)){
$contador36 ++;}
$su = $mysqli->query("SELECT * FROM compven WHERE estado = 0 AND id_vendedor = '".$_SESSION['id_vendedor']. "' ");
$contador37 = 0;
while($ru=mysqli_fetch_array($su)){
$contador37++;}

if(($contador36+$contador37)==0){
 ?>
 No hay pedidos
  </div>
 <?php
}else{
$contadortore = (100/($contador36+$contador37))*$contador36;

?>
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                             <!--  <?php
                              echo round($contadortore,1);
                              ?>-->0%
                              </div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width:<!--  <?=$contadortore?>-->0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <?php
                      }
                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <?php
$sa = $mysqli->query("SELECT * FROM compven WHERE estado = 0 AND id_vendedor = '".$_SESSION['id_vendedor']. "' ");
$contador89= 0;
while($ra=mysqli_fetch_array($sa)){
$contador89++;}
?>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2" style="box-shadow: none!important;border: 1px solid #bbbbc3;">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
             
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pedidos sin revisar</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><!-- <?=$contador89?>-->0</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-exclamation-circle" style="    font-size: 33px;
    color: #dddfeb;
"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->



           <div class="row">
<!-- Area Chart -->

            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4"  style="box-shadow: none!important;border: 1px solid #bbbbc3;">
                <!-- Card Header - Dropdown -->
               
                <!-- Card Body -->
                <div class="card-body">
                  <style type="text/css">
  .sidebar {
    width: 6.5rem;
    background-color: #36373a;
    min-height: 100vh;
}
.card-body {
    flex: 1 1 auto;
    padding: 1.25rem;
    color: #292a2d;
}
table.dataTable {
    clear: both;
    margin-top: 6px !important;
    margin-bottom: 6px !important;
    max-width: none !important;
    border-collapse: separate !important;
    color: #292a2d;
    border-spacing: 0;
}
.h1, h1 {
    font-size: 1.2rem;
}
.text-gray-600 {
    color: #5a5c69!important;
}
</style>
<style type="text/css">
  .form-group {
    margin-bottom: 1rem;
    display: inline-block;
    width: 20%;
}
#primary_nav_wrap
{
  margin-top:15px
}

#primary_nav_wrap ul
{
  list-style:none;
  position:relative;
  float:left;
  margin:0;
  padding:0
}

#primary_nav_wrap ul a
{
  display:block;
  color:#333;
  text-decoration:none;
  font-weight:700;
  font-size:12px;
  line-height:32px;
  padding:0 15px;
  font-family:"HelveticaNeue","Helvetica Neue",Helvetica,Arial,sans-serif
}

#primary_nav_wrap ul li
{
  position:relative;
  float:left;
  margin:0;
  padding:0
}

#primary_nav_wrap ul li.current-menu-item
{
  background:#ddd
}

#primary_nav_wrap ul li:hover
{
  background:#f6f6f6
}

#primary_nav_wrap ul ul
{
  display:none;
  position:absolute;
  top:100%;
  left:0;
  background:#fff;
  padding:0
}

#primary_nav_wrap ul ul li
{
  float:none;
  width:200px
}

#primary_nav_wrap ul ul a
{
  line-height:120%;
  padding:10px 15px
}

#primary_nav_wrap ul ul ul
{
  top:0;
  left:100%
}

#primary_nav_wrap ul li:hover > ul
{
  display:block
}
</style>
<script type="text/javascript">
    /*
 Highcharts JS v8.0.0 (2019-12-10)

 (c) 2009-2018 Torstein Honsi

 License: www.highcharts.com/license
*/
(function(S,M){"object"===typeof module&&module.exports?(M["default"]=M,module.exports=S.document?M(S):M):"function"===typeof define&&define.amd?define("highcharts/highcharts",function(){return M(S)}):(S.Highcharts&&S.Highcharts.error(16,!0),S.Highcharts=M(S))})("undefined"!==typeof window?window:this,function(S){function M(c,e,F,I){c.hasOwnProperty(e)||(c[e]=I.apply(null,F))}var J={};M(J,"parts/Globals.js",[],function(){var c="undefined"!==typeof S?S:"undefined"!==typeof window?window:{},e=c.document,
F=c.navigator&&c.navigator.userAgent||"",I=e&&e.createElementNS&&!!e.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect,G=/(edge|msie|trident)/i.test(F)&&!c.opera,H=-1!==F.indexOf("Firefox"),v=-1!==F.indexOf("Chrome"),q=H&&4>parseInt(F.split("Firefox/")[1],10);return{product:"Highcharts",version:"8.0.0",deg2rad:2*Math.PI/360,doc:e,hasBidiBug:q,hasTouch:!!c.TouchEvent,isMS:G,isWebKit:-1!==F.indexOf("AppleWebKit"),isFirefox:H,isChrome:v,isSafari:!v&&-1!==F.indexOf("Safari"),isTouchDevice:/(Mobile|Android|Windows Phone)/.test(F),
SVG_NS:"http://www.w3.org/2000/svg",chartCount:0,seriesTypes:{},symbolSizes:{},svg:I,win:c,marginNames:["plotTop","marginRight","marginBottom","plotLeft"],noop:function(){},charts:[],dateFormats:{}}});M(J,"parts/Utilities.js",[J["parts/Globals.js"]],function(c){function e(d,a){return parseInt(d,a||10)}function F(d){return"string"===typeof d}function I(d){d=Object.prototype.toString.call(d);return"[object Array]"===d||"[object Array Iterator]"===d}function G(d,a){return!!d&&"object"===typeof d&&(!a||
!I(d))}function H(d){return G(d)&&"number"===typeof d.nodeType}function v(d){var a=d&&d.constructor;return!(!G(d,!0)||H(d)||!a||!a.name||"Object"===a.name)}function q(d){return"number"===typeof d&&!isNaN(d)&&Infinity>d&&-Infinity<d}function C(d){return"undefined"!==typeof d&&null!==d}function B(d,a,b){var h;F(a)?C(b)?d.setAttribute(a,b):d&&d.getAttribute&&((h=d.getAttribute(a))||"class"!==a||(h=d.getAttribute(a+"Name"))):A(a,function(a,h){d.setAttribute(h,a)});return h}function u(d,a){var h;d||(d=
{});for(h in a)d[h]=a[h];return d}function w(){for(var d=arguments,a=d.length,b=0;b<a;b++){var l=d[b];if("undefined"!==typeof l&&null!==l)return l}}function m(d,a){var h=function(){};h.prototype=new d;u(h.prototype,a);return h}function r(d,a){return parseFloat(d.toPrecision(a||14))}function D(d,a,b,l){d=+d||0;a=+a;var h=c.defaultOptions.lang,k=(d.toString().split(".")[1]||"").split("e")[0].length,g=d.toString().split("e");if(-1===a)a=Math.min(k,20);else if(!q(a))a=2;else if(a&&g[1]&&0>g[1]){var t=
a+ +g[1];0<=t?(g[0]=(+g[0]).toExponential(t).split("e")[0],a=t):(g[0]=g[0].split(".")[0]||0,d=20>a?(g[0]*Math.pow(10,g[1])).toFixed(a):0,g[1]=0)}var x=(Math.abs(g[1]?g[0]:d)+Math.pow(10,-Math.max(a,k)-1)).toFixed(a);k=String(e(x));t=3<k.length?k.length%3:0;b=w(b,h.decimalPoint);l=w(l,h.thousandsSep);d=(0>d?"-":"")+(t?k.substr(0,t)+l:"");d+=k.substr(t).replace(/(\d{3})(?=\d)/g,"$1"+l);a&&(d+=b+x.slice(-a));g[1]&&0!==+d&&(d+="e"+g[1]);return d}function A(d,a,b){for(var h in d)Object.hasOwnProperty.call(d,
h)&&a.call(b||d[h],d[h],h,d)}c.timers=[];var f=c.charts,b=c.doc,a=c.win;c.error=function(d,b,k,l){var h=q(d),f=h?"Highcharts error #"+d+": www.highcharts.com/errors/"+d+"/":d.toString(),g=function(){if(b)throw Error(f);a.console&&console.log(f)};if("undefined"!==typeof l){var t="";h&&(f+="?");c.objectEach(l,function(d,a){t+="\n"+a+": "+d;h&&(f+=encodeURI(a)+"="+encodeURI(d))});f+=t}k?c.fireEvent(k,"displayError",{code:d,message:f,params:l},g):g()};c.Fx=function(d,a,b){this.options=a;this.elem=d;this.prop=
b};c.Fx.prototype={dSetter:function(){var d=this.paths[0],a=this.paths[1],b=[],l=this.now,f=d.length;if(1===l)b=this.toD;else if(f===a.length&&1>l)for(;f--;){var p=parseFloat(d[f]);b[f]=isNaN(p)||"A"===a[f-4]||"A"===a[f-5]?a[f]:l*parseFloat(""+(a[f]-p))+p}else b=a;this.elem.attr("d",b,null,!0)},update:function(){var d=this.elem,a=this.prop,b=this.now,l=this.options.step;if(this[a+"Setter"])this[a+"Setter"]();else d.attr?d.element&&d.attr(a,b,null,!0):d.style[a]=b+this.unit;l&&l.call(d,b,this)},run:function(d,
b,k){var h=this,f=h.options,p=function(d){return p.stopped?!1:h.step(d)},g=a.requestAnimationFrame||function(d){setTimeout(d,13)},t=function(){for(var d=0;d<c.timers.length;d++)c.timers[d]()||c.timers.splice(d--,1);c.timers.length&&g(t)};d!==b||this.elem["forceAnimate:"+this.prop]?(this.startTime=+new Date,this.start=d,this.end=b,this.unit=k,this.now=this.start,this.pos=0,p.elem=this.elem,p.prop=this.prop,p()&&1===c.timers.push(p)&&g(t)):(delete f.curAnim[this.prop],f.complete&&0===Object.keys(f.curAnim).length&&
f.complete.call(this.elem))},step:function(d){var a=+new Date,b=this.options,l=this.elem,f=b.complete,p=b.duration,g=b.curAnim;if(l.attr&&!l.element)d=!1;else if(d||a>=p+this.startTime){this.now=this.end;this.pos=1;this.update();var t=g[this.prop]=!0;A(g,function(d){!0!==d&&(t=!1)});t&&f&&f.call(l);d=!1}else this.pos=b.easing((a-this.startTime)/p),this.now=this.start+(this.end-this.start)*this.pos,this.update(),d=!0;return d},initPath:function(d,a,b){function h(d){for(n=d.length;n--;){var a="M"===
d[n]||"L"===d[n];var b=/[a-zA-Z]/.test(d[n+3]);a&&b&&d.splice(n+1,0,d[n+1],d[n+2],d[n+1],d[n+2])}}function f(d,a){for(;d.length<r;){d[0]=a[r-d.length];var b=d.slice(0,c);[].splice.apply(d,[0,0].concat(b));z&&(b=d.slice(d.length-c),[].splice.apply(d,[d.length,0].concat(b)),n--)}d[0]="M"}function k(d,a){for(var b=(r-d.length)/c;0<b&&b--;)E=d.slice().splice(d.length/N-c,c*N),E[0]=a[r-c-b*c],x&&(E[c-6]=E[c-2],E[c-5]=E[c-1]),[].splice.apply(d,[d.length/N,0].concat(E)),z&&b--}a=a||"";var g=d.startX,t=d.endX,
x=-1<a.indexOf("C"),c=x?7:3,E,n;a=a.split(" ");b=b.slice();var z=d.isArea,N=z?2:1;x&&(h(a),h(b));if(g&&t){for(n=0;n<g.length;n++)if(g[n]===t[0]){var O=n;break}else if(g[0]===t[t.length-g.length+n]){O=n;var A=!0;break}else if(g[g.length-1]===t[t.length-g.length+n]){O=g.length-n;break}"undefined"===typeof O&&(a=[])}if(a.length&&q(O)){var r=b.length+O*N*c;A?(f(a,b),k(b,a)):(f(b,a),k(a,b))}return[a,b]},fillSetter:function(){c.Fx.prototype.strokeSetter.apply(this,arguments)},strokeSetter:function(){this.elem.attr(this.prop,
c.color(this.start).tweenTo(c.color(this.end),this.pos),null,!0)}};c.merge=function(){var d,a=arguments,b={},l=function(d,a){"object"!==typeof d&&(d={});A(a,function(b,h){!G(b,!0)||v(b)||H(b)?d[h]=a[h]:d[h]=l(d[h]||{},b)});return d};!0===a[0]&&(b=a[1],a=Array.prototype.slice.call(a,2));var f=a.length;for(d=0;d<f;d++)b=l(b,a[d]);return b};c.clearTimeout=function(d){C(d)&&clearTimeout(d)};c.css=function(d,a){c.isMS&&!c.svg&&a&&"undefined"!==typeof a.opacity&&(a.filter="alpha(opacity="+100*a.opacity+
")");u(d.style,a)};c.createElement=function(d,a,f,l,y){d=b.createElement(d);var h=c.css;a&&u(d,a);y&&h(d,{padding:"0",border:"none",margin:"0"});f&&h(d,f);l&&l.appendChild(d);return d};c.datePropsToTimestamps=function(d){A(d,function(a,b){G(a)&&"function"===typeof a.getTime?d[b]=a.getTime():(G(a)||I(a))&&c.datePropsToTimestamps(a)})};c.formatSingle=function(d,a,b){var h=/\.([0-9])/,f=c.defaultOptions.lang,k=b&&b.time||c.time;b=b&&b.numberFormatter||D;/f$/.test(d)?(h=(h=d.match(h))?h[1]:-1,null!==
a&&(a=b(a,h,f.decimalPoint,-1<d.indexOf(",")?f.thousandsSep:""))):a=k.dateFormat(d,a);return a};c.format=function(d,a,b){for(var h="{",f=!1,k,g,t,x,L=[],E;d;){h=d.indexOf(h);if(-1===h)break;k=d.slice(0,h);if(f){k=k.split(":");g=k.shift().split(".");x=g.length;E=a;for(t=0;t<x;t++)E&&(E=E[g[t]]);k.length&&(E=c.formatSingle(k.join(":"),E,b));L.push(E)}else L.push(k);d=d.slice(h+1);h=(f=!f)?"}":"{"}L.push(d);return L.join("")};c.getMagnitude=function(d){return Math.pow(10,Math.floor(Math.log(d)/Math.LN10))};
c.normalizeTickInterval=function(d,a,b,l,f){var h=d;b=w(b,1);var g=d/b;a||(a=f?[1,1.2,1.5,2,2.5,3,4,5,6,8,10]:[1,2,2.5,5,10],!1===l&&(1===b?a=a.filter(function(d){return 0===d%1}):.1>=b&&(a=[1/b])));for(l=0;l<a.length&&!(h=a[l],f&&h*b>=d||!f&&g<=(a[l]+(a[l+1]||a[l]))/2);l++);return h=r(h*b,-Math.round(Math.log(.001)/Math.LN10))};c.stableSort=function(d,a){var b=d.length,h,f;for(f=0;f<b;f++)d[f].safeI=f;d.sort(function(d,b){h=a(d,b);return 0===h?d.safeI-b.safeI:h});for(f=0;f<b;f++)delete d[f].safeI};
c.timeUnits={millisecond:1,second:1E3,minute:6E4,hour:36E5,day:864E5,week:6048E5,month:24192E5,year:314496E5};Math.easeInOutSine=function(d){return-.5*(Math.cos(Math.PI*d)-1)};c.getStyle=function(d,b,f){if("width"===b)return b=Math.min(d.offsetWidth,d.scrollWidth),f=d.getBoundingClientRect&&d.getBoundingClientRect().width,f<b&&f>=b-1&&(b=Math.floor(f)),Math.max(0,b-c.getStyle(d,"padding-left")-c.getStyle(d,"padding-right"));if("height"===b)return Math.max(0,Math.min(d.offsetHeight,d.scrollHeight)-
c.getStyle(d,"padding-top")-c.getStyle(d,"padding-bottom"));a.getComputedStyle||c.error(27,!0);if(d=a.getComputedStyle(d,void 0))d=d.getPropertyValue(b),w(f,"opacity"!==b)&&(d=e(d));return d};c.inArray=function(d,a,b){return a.indexOf(d,b)};c.find=Array.prototype.find?function(d,a){return d.find(a)}:function(d,a){var b,h=d.length;for(b=0;b<h;b++)if(a(d[b],b))return d[b]};c.keys=Object.keys;c.stop=function(d,a){for(var b=c.timers.length;b--;)c.timers[b].elem!==d||a&&a!==c.timers[b].prop||(c.timers[b].stopped=
!0)};A({map:"map",each:"forEach",grep:"filter",reduce:"reduce",some:"some"},function(d,a){c[a]=function(a){return Array.prototype[d].apply(a,[].slice.call(arguments,1))}});c.addEvent=function(d,a,b,f){void 0===f&&(f={});var h=d.addEventListener||c.addEventListenerPolyfill;var l="function"===typeof d&&d.prototype?d.prototype.protoEvents=d.prototype.protoEvents||{}:d.hcEvents=d.hcEvents||{};c.Point&&d instanceof c.Point&&d.series&&d.series.chart&&(d.series.chart.runTrackerClick=!0);h&&h.call(d,a,b,
!1);l[a]||(l[a]=[]);l[a].push({fn:b,order:"number"===typeof f.order?f.order:Infinity});l[a].sort(function(d,a){return d.order-a.order});return function(){c.removeEvent(d,a,b)}};c.removeEvent=function(d,a,b){function h(a,b){var g=d.removeEventListener||c.removeEventListenerPolyfill;g&&g.call(d,a,b,!1)}function f(b){var g;if(d.nodeName){if(a){var f={};f[a]=!0}else f=b;A(f,function(d,a){if(b[a])for(g=b[a].length;g--;)h(a,b[a][g].fn)})}}var k;["protoEvents","hcEvents"].forEach(function(g,t){var l=(t=
t?d:d.prototype)&&t[g];l&&(a?(k=l[a]||[],b?(l[a]=k.filter(function(a){return b!==a.fn}),h(a,b)):(f(l),l[a]=[])):(f(l),t[g]={}))})};c.fireEvent=function(a,h,f,l){var d;f=f||{};if(b.createEvent&&(a.dispatchEvent||a.fireEvent)){var k=b.createEvent("Events");k.initEvent(h,!0,!0);u(k,f);a.dispatchEvent?a.dispatchEvent(k):a.fireEvent(h,k)}else f.target||u(f,{preventDefault:function(){f.defaultPrevented=!0},target:a,type:h}),function(b,h){void 0===b&&(b=[]);void 0===h&&(h=[]);var g=0,t=0,l=b.length+h.length;
for(d=0;d<l;d++)!1===(b[g]?h[t]?b[g].order<=h[t].order?b[g++]:h[t++]:b[g++]:h[t++]).fn.call(a,f)&&f.preventDefault()}(a.protoEvents&&a.protoEvents[h],a.hcEvents&&a.hcEvents[h]);l&&!f.defaultPrevented&&l.call(a,f)};c.animate=function(a,b,f){var d,h="",k,g;if(!G(f)){var t=arguments;f={duration:t[2],easing:t[3],complete:t[4]}}q(f.duration)||(f.duration=400);f.easing="function"===typeof f.easing?f.easing:Math[f.easing]||Math.easeInOutSine;f.curAnim=c.merge(b);A(b,function(t,l){c.stop(a,l);g=new c.Fx(a,
f,l);k=null;"d"===l?(g.paths=g.initPath(a,a.d,b.d),g.toD=b.d,d=0,k=1):a.attr?d=a.attr(l):(d=parseFloat(c.getStyle(a,l))||0,"opacity"!==l&&(h="px"));k||(k=t);k&&k.match&&k.match("px")&&(k=k.replace(/px/g,""));g.run(d,k,h)})};c.seriesType=function(a,b,f,l,y){var d=c.getOptions(),g=c.seriesTypes;d.plotOptions[a]=c.merge(d.plotOptions[b],f);g[a]=m(g[b]||function(){},l);g[a].prototype.type=a;y&&(g[a].prototype.pointClass=m(c.Point,y));return g[a]};c.uniqueKey=function(){var a=Math.random().toString(36).substring(2,
9),b=0;return function(){return"highcharts-"+a+"-"+b++}}();c.isFunction=function(a){return"function"===typeof a};a.jQuery&&(a.jQuery.fn.highcharts=function(){var a=[].slice.call(arguments);if(this[0])return a[0]?(new (c[F(a[0])?a.shift():"Chart"])(this[0],a[0],a[1]),this):f[B(this[0],"data-highcharts-chart")]});return{animObject:function(a){return G(a)?c.merge(a):{duration:a?500:0}},arrayMax:function(a){for(var d=a.length,b=a[0];d--;)a[d]>b&&(b=a[d]);return b},arrayMin:function(a){for(var d=a.length,
b=a[0];d--;)a[d]<b&&(b=a[d]);return b},attr:B,clamp:function(a,b,f){return a>b?a<f?a:f:b},correctFloat:r,defined:C,destroyObjectProperties:function(a,b){A(a,function(d,h){d&&d!==b&&d.destroy&&d.destroy();delete a[h]})},discardElement:function(a){var d=c.garbageBin;d||(d=c.createElement("div"));a&&d.appendChild(a);d.innerHTML=""},erase:function(a,b){for(var d=a.length;d--;)if(a[d]===b){a.splice(d,1);break}},extend:u,extendClass:m,isArray:I,isClass:v,isDOMElement:H,isNumber:q,isObject:G,isString:F,
numberFormat:D,objectEach:A,offset:function(d){var h=b.documentElement;d=d.parentElement||d.parentNode?d.getBoundingClientRect():{top:0,left:0};return{top:d.top+(a.pageYOffset||h.scrollTop)-(h.clientTop||0),left:d.left+(a.pageXOffset||h.scrollLeft)-(h.clientLeft||0)}},pad:function(a,b,f){return Array((b||2)+1-String(a).replace("-","").length).join(f||"0")+a},pick:w,pInt:e,relativeLength:function(a,b,f){return/%$/.test(a)?b*parseFloat(a)/100+(f||0):parseFloat(a)},setAnimation:function(a,b){b.renderer.globalAnimation=
w(a,b.options.chart.animation,!0)},splat:function(a){return I(a)?a:[a]},syncTimeout:function(a,b,f){if(0<b)return setTimeout(a,b,f);a.call(0,f);return-1},wrap:function(a,b,f){var d=a[b];a[b]=function(){var a=Array.prototype.slice.call(arguments),b=arguments,g=this;g.proceed=function(){d.apply(g,arguments.length?arguments:b)};a.unshift(d);a=f.apply(this,a);g.proceed=null;return a}}}});M(J,"parts/Color.js",[J["parts/Globals.js"],J["parts/Utilities.js"]],function(c,e){var F=e.isNumber,I=e.pInt,G=c.merge;
c.Color=function(e){if(!(this instanceof c.Color))return new c.Color(e);this.init(e)};c.Color.prototype={parsers:[{regex:/rgba\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]?(?:\.[0-9]+)?)\s*\)/,parse:function(c){return[I(c[1]),I(c[2]),I(c[3]),parseFloat(c[4],10)]}},{regex:/rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/,parse:function(c){return[I(c[1]),I(c[2]),I(c[3]),1]}}],names:{white:"#ffffff",black:"#000000"},init:function(e){var v,q;if((this.input=e=this.names[e&&
e.toLowerCase?e.toLowerCase():""]||e)&&e.stops)this.stops=e.stops.map(function(e){return new c.Color(e[1])});else{if(e&&e.charAt&&"#"===e.charAt()){var C=e.length;e=parseInt(e.substr(1),16);7===C?v=[(e&16711680)>>16,(e&65280)>>8,e&255,1]:4===C&&(v=[(e&3840)>>4|(e&3840)>>8,(e&240)>>4|e&240,(e&15)<<4|e&15,1])}if(!v)for(q=this.parsers.length;q--&&!v;){var H=this.parsers[q];(C=H.regex.exec(e))&&(v=H.parse(C))}}this.rgba=v||[]},get:function(c){var e=this.input,q=this.rgba;if(this.stops){var C=G(e);C.stops=
[].concat(C.stops);this.stops.forEach(function(e,q){C.stops[q]=[C.stops[q][0],e.get(c)]})}else C=q&&F(q[0])?"rgb"===c||!c&&1===q[3]?"rgb("+q[0]+","+q[1]+","+q[2]+")":"a"===c?q[3]:"rgba("+q.join(",")+")":e;return C},brighten:function(c){var e,q=this.rgba;if(this.stops)this.stops.forEach(function(e){e.brighten(c)});else if(F(c)&&0!==c)for(e=0;3>e;e++)q[e]+=I(255*c),0>q[e]&&(q[e]=0),255<q[e]&&(q[e]=255);return this},setOpacity:function(c){this.rgba[3]=c;return this},tweenTo:function(c,e){var q=this.rgba,
v=c.rgba;v.length&&q&&q.length?(c=1!==v[3]||1!==q[3],e=(c?"rgba(":"rgb(")+Math.round(v[0]+(q[0]-v[0])*(1-e))+","+Math.round(v[1]+(q[1]-v[1])*(1-e))+","+Math.round(v[2]+(q[2]-v[2])*(1-e))+(c?","+(v[3]+(q[3]-v[3])*(1-e)):"")+")"):e=c.input||"none";return e}};c.color=function(e){return new c.Color(e)}});M(J,"parts/SvgRenderer.js",[J["parts/Globals.js"],J["parts/Utilities.js"]],function(c,e){var F=e.animObject,I=e.attr,G=e.defined,H=e.destroyObjectProperties,v=e.erase,q=e.extend,C=e.isArray,B=e.isNumber,
u=e.isObject,w=e.isString,m=e.objectEach,r=e.pick,D=e.pInt,A=e.splat,f=c.addEvent,b=c.animate,a=c.charts,d=c.color,h=c.css,k=c.createElement,l=c.deg2rad,y=c.doc,p=c.hasTouch,g=c.isFirefox,t=c.isMS,x=c.isWebKit,L=c.merge,E=c.noop,n=c.removeEvent,z=c.stop,N=c.svg,O=c.SVG_NS,V=c.symbolSizes,T=c.win;var P=c.SVGElement=function(){return this};q(P.prototype,{opacity:1,SVG_NS:O,textProps:"direction fontSize fontWeight fontFamily fontStyle color lineHeight width textAlign textDecoration textOverflow textOutline cursor".split(" "),
init:function(a,b){this.element="span"===b?k(b):y.createElementNS(this.SVG_NS,b);this.renderer=a;c.fireEvent(this,"afterInit")},animate:function(a,d,n){var K=F(r(d,this.renderer.globalAnimation,!0));r(y.hidden,y.msHidden,y.webkitHidden,!1)&&(K.duration=0);0!==K.duration?(n&&(K.complete=n),b(this,a,K)):(this.attr(a,void 0,n),m(a,function(a,b){K.step&&K.step.call(this,a,{prop:b,pos:1})},this));return this},complexColor:function(a,b,d){var n=this.renderer,K,Q,g,z,f,h,t,l,R,x,k,N=[],p;c.fireEvent(this.renderer,
"complexColor",{args:arguments},function(){a.radialGradient?Q="radialGradient":a.linearGradient&&(Q="linearGradient");Q&&(g=a[Q],f=n.gradients,t=a.stops,x=d.radialReference,C(g)&&(a[Q]=g={x1:g[0],y1:g[1],x2:g[2],y2:g[3],gradientUnits:"userSpaceOnUse"}),"radialGradient"===Q&&x&&!G(g.gradientUnits)&&(z=g,g=L(g,n.getRadialAttr(x,z),{gradientUnits:"userSpaceOnUse"})),m(g,function(a,b){"id"!==b&&N.push(b,a)}),m(t,function(a){N.push(a)}),N=N.join(","),f[N]?k=f[N].attr("id"):(g.id=k=c.uniqueKey(),f[N]=h=
n.createElement(Q).attr(g).add(n.defs),h.radAttr=z,h.stops=[],t.forEach(function(a){0===a[1].indexOf("rgba")?(K=c.color(a[1]),l=K.get("rgb"),R=K.get("a")):(l=a[1],R=1);a=n.createElement("stop").attr({offset:a[0],"stop-color":l,"stop-opacity":R}).add(h);h.stops.push(a)})),p="url("+n.url+"#"+k+")",d.setAttribute(b,p),d.gradient=N,a.toString=function(){return p})})},applyTextOutline:function(a){var b=this.element,d;-1!==a.indexOf("contrast")&&(a=a.replace(/contrast/g,this.renderer.getContrast(b.style.fill)));
a=a.split(" ");var n=a[a.length-1];if((d=a[0])&&"none"!==d&&c.svg){this.fakeTS=!0;a=[].slice.call(b.getElementsByTagName("tspan"));this.ySetter=this.xSetter;d=d.replace(/(^[\d\.]+)(.*?)$/g,function(a,b,d){return 2*b+d});this.removeTextOutline(a);var g=b.firstChild;a.forEach(function(a,K){0===K&&(a.setAttribute("x",b.getAttribute("x")),K=b.getAttribute("y"),a.setAttribute("y",K||0),null===K&&b.setAttribute("y",0));a=a.cloneNode(1);I(a,{"class":"highcharts-text-outline",fill:n,stroke:n,"stroke-width":d,
"stroke-linejoin":"round"});b.insertBefore(a,g)})}},removeTextOutline:function(a){for(var b=a.length,d;b--;)d=a[b],"highcharts-text-outline"===d.getAttribute("class")&&v(a,this.element.removeChild(d))},symbolCustomAttribs:"x y width height r start end innerR anchorX anchorY rounded".split(" "),attr:function(a,b,d,n){var g=this.element,K,Q=this,f,h,t=this.symbolCustomAttribs;if("string"===typeof a&&"undefined"!==typeof b){var l=a;a={};a[l]=b}"string"===typeof a?Q=(this[a+"Getter"]||this._defaultGetter).call(this,
a,g):(m(a,function(b,d){f=!1;n||z(this,d);this.symbolName&&-1!==c.inArray(d,t)&&(K||(this.symbolAttr(a),K=!0),f=!0);!this.rotation||"x"!==d&&"y"!==d||(this.doTransform=!0);f||(h=this[d+"Setter"]||this._defaultSetter,h.call(this,b,d,g),!this.styledMode&&this.shadows&&/^(width|height|visibility|x|y|d|transform|cx|cy|r)$/.test(d)&&this.updateShadows(d,b,h))},this),this.afterSetters());d&&d.call(this);return Q},afterSetters:function(){this.doTransform&&(this.updateTransform(),this.doTransform=!1)},updateShadows:function(a,
b,d){for(var n=this.shadows,g=n.length;g--;)d.call(n[g],"height"===a?Math.max(b-(n[g].cutHeight||0),0):"d"===a?this.d:b,a,n[g])},addClass:function(a,b){var d=b?"":this.attr("class")||"";a=(a||"").split(/ /g).reduce(function(a,b){-1===d.indexOf(b)&&a.push(b);return a},d?[d]:[]).join(" ");a!==d&&this.attr("class",a);return this},hasClass:function(a){return-1!==(this.attr("class")||"").split(" ").indexOf(a)},removeClass:function(a){return this.attr("class",(this.attr("class")||"").replace(w(a)?new RegExp(" ?"+
a+" ?"):a,""))},symbolAttr:function(a){var b=this;"x y r start end width height innerR anchorX anchorY clockwise".split(" ").forEach(function(d){b[d]=r(a[d],b[d])});b.attr({d:b.renderer.symbols[b.symbolName](b.x,b.y,b.width,b.height,b)})},clip:function(a){return this.attr("clip-path",a?"url("+this.renderer.url+"#"+a.id+")":"none")},crisp:function(a,b){b=b||a.strokeWidth||0;var d=Math.round(b)%2/2;a.x=Math.floor(a.x||this.x||0)+d;a.y=Math.floor(a.y||this.y||0)+d;a.width=Math.floor((a.width||this.width||
0)-2*d);a.height=Math.floor((a.height||this.height||0)-2*d);G(a.strokeWidth)&&(a.strokeWidth=b);return a},css:function(a){var b=this.styles,d={},n=this.element,g="",z=!b,f=["textOutline","textOverflow","width"];a&&a.color&&(a.fill=a.color);b&&m(a,function(a,n){a!==b[n]&&(d[n]=a,z=!0)});if(z){b&&(a=q(b,d));if(a)if(null===a.width||"auto"===a.width)delete this.textWidth;else if("text"===n.nodeName.toLowerCase()&&a.width)var Q=this.textWidth=D(a.width);this.styles=a;Q&&!N&&this.renderer.forExport&&delete a.width;
if(n.namespaceURI===this.SVG_NS){var t=function(a,b){return"-"+b.toLowerCase()};m(a,function(a,b){-1===f.indexOf(b)&&(g+=b.replace(/([A-Z])/g,t)+":"+a+";")});g&&I(n,"style",g)}else h(n,a);this.added&&("text"===this.element.nodeName&&this.renderer.buildText(this),a&&a.textOutline&&this.applyTextOutline(a.textOutline))}return this},getStyle:function(a){return T.getComputedStyle(this.element||this,"").getPropertyValue(a)},strokeWidth:function(){if(!this.renderer.styledMode)return this["stroke-width"]||
0;var a=this.getStyle("stroke-width"),b=0;if(a.indexOf("px")===a.length-2)b=D(a);else if(""!==a){var d=y.createElementNS(O,"rect");I(d,{width:a,"stroke-width":0});this.element.parentNode.appendChild(d);b=d.getBBox().width;d.parentNode.removeChild(d)}return b},on:function(a,b){var d=this,n=d.element;p&&"click"===a?(n.ontouchstart=function(a){d.touchEventFired=Date.now();a.preventDefault();b.call(n,a)},n.onclick=function(a){(-1===T.navigator.userAgent.indexOf("Android")||1100<Date.now()-(d.touchEventFired||
0))&&b.call(n,a)}):n["on"+a]=b;return this},setRadialReference:function(a){var b=this.renderer.gradients[this.element.gradient];this.element.radialReference=a;b&&b.radAttr&&b.animate(this.renderer.getRadialAttr(a,b.radAttr));return this},translate:function(a,b){return this.attr({translateX:a,translateY:b})},invert:function(a){this.inverted=a;this.updateTransform();return this},updateTransform:function(){var a=this.translateX||0,b=this.translateY||0,d=this.scaleX,n=this.scaleY,g=this.inverted,z=this.rotation,
f=this.matrix,h=this.element;g&&(a+=this.width,b+=this.height);a=["translate("+a+","+b+")"];G(f)&&a.push("matrix("+f.join(",")+")");g?a.push("rotate(90) scale(-1,1)"):z&&a.push("rotate("+z+" "+r(this.rotationOriginX,h.getAttribute("x"),0)+" "+r(this.rotationOriginY,h.getAttribute("y")||0)+")");(G(d)||G(n))&&a.push("scale("+r(d,1)+" "+r(n,1)+")");a.length&&h.setAttribute("transform",a.join(" "))},toFront:function(){var a=this.element;a.parentNode.appendChild(a);return this},align:function(a,b,d){var n,
g={};var z=this.renderer;var f=z.alignedObjects;var K,h;if(a){if(this.alignOptions=a,this.alignByTranslate=b,!d||w(d))this.alignTo=n=d||"renderer",v(f,this),f.push(this),d=null}else a=this.alignOptions,b=this.alignByTranslate,n=this.alignTo;d=r(d,z[n],z);n=a.align;z=a.verticalAlign;f=(d.x||0)+(a.x||0);var t=(d.y||0)+(a.y||0);"right"===n?K=1:"center"===n&&(K=2);K&&(f+=(d.width-(a.width||0))/K);g[b?"translateX":"x"]=Math.round(f);"bottom"===z?h=1:"middle"===z&&(h=2);h&&(t+=(d.height-(a.height||0))/
h);g[b?"translateY":"y"]=Math.round(t);this[this.placed?"animate":"attr"](g);this.placed=!0;this.alignAttr=g;return this},getBBox:function(a,b){var d,n=this.renderer,g=this.element,z=this.styles,f=this.textStr,K,h=n.cache,t=n.cacheKeys,Q=g.namespaceURI===this.SVG_NS;b=r(b,this.rotation,0);var x=n.styledMode?g&&P.prototype.getStyle.call(g,"font-size"):z&&z.fontSize;if(G(f)){var c=f.toString();-1===c.indexOf("<")&&(c=c.replace(/[0-9]/g,"0"));c+=["",b,x,this.textWidth,z&&z.textOverflow].join()}c&&!a&&
(d=h[c]);if(!d){if(Q||n.forExport){try{(K=this.fakeTS&&function(a){[].forEach.call(g.querySelectorAll(".highcharts-text-outline"),function(b){b.style.display=a})})&&K("none"),d=g.getBBox?q({},g.getBBox()):{width:g.offsetWidth,height:g.offsetHeight},K&&K("")}catch(ca){""}if(!d||0>d.width)d={width:0,height:0}}else d=this.htmlGetBBox();n.isSVG&&(a=d.width,n=d.height,Q&&(d.height=n={"11px,17":14,"13px,20":16}[z&&z.fontSize+","+Math.round(n)]||n),b&&(z=b*l,d.width=Math.abs(n*Math.sin(z))+Math.abs(a*Math.cos(z)),
d.height=Math.abs(n*Math.cos(z))+Math.abs(a*Math.sin(z))));if(c&&0<d.height){for(;250<t.length;)delete h[t.shift()];h[c]||t.push(c);h[c]=d}}return d},show:function(a){return this.attr({visibility:a?"inherit":"visible"})},hide:function(a){a?this.attr({y:-9999}):this.attr({visibility:"hidden"});return this},fadeOut:function(a){var b=this;b.animate({opacity:0},{duration:a||150,complete:function(){b.attr({y:-9999})}})},add:function(a){var b=this.renderer,d=this.element;a&&(this.parentGroup=a);this.parentInverted=
a&&a.inverted;"undefined"!==typeof this.textStr&&b.buildText(this);this.added=!0;if(!a||a.handleZ||this.zIndex)var n=this.zIndexSetter();n||(a?a.element:b.box).appendChild(d);if(this.onAdd)this.onAdd();return this},safeRemoveChild:function(a){var b=a.parentNode;b&&b.removeChild(a)},destroy:function(){var a=this,b=a.element||{},d=a.renderer,n=d.isSVG&&"SPAN"===b.nodeName&&a.parentGroup,g=b.ownerSVGElement,f=a.clipPath;b.onclick=b.onmouseout=b.onmouseover=b.onmousemove=b.point=null;z(a);f&&g&&([].forEach.call(g.querySelectorAll("[clip-path],[CLIP-PATH]"),
function(a){-1<a.getAttribute("clip-path").indexOf(f.element.id)&&a.removeAttribute("clip-path")}),a.clipPath=f.destroy());if(a.stops){for(g=0;g<a.stops.length;g++)a.stops[g]=a.stops[g].destroy();a.stops=null}a.safeRemoveChild(b);for(d.styledMode||a.destroyShadows();n&&n.div&&0===n.div.childNodes.length;)b=n.parentGroup,a.safeRemoveChild(n.div),delete n.div,n=b;a.alignTo&&v(d.alignedObjects,a);m(a,function(b,d){a[d]&&a[d].parentGroup===a&&a[d].destroy&&a[d].destroy();delete a[d]})},shadow:function(a,
b,d){var n=[],g,z=this.element;if(!a)this.destroyShadows();else if(!this.shadows){var f=r(a.width,3);var h=(a.opacity||.15)/f;var K=this.parentInverted?"(-1,-1)":"("+r(a.offsetX,1)+", "+r(a.offsetY,1)+")";for(g=1;g<=f;g++){var t=z.cloneNode(0);var l=2*f+1-2*g;I(t,{stroke:a.color||"#000000","stroke-opacity":h*g,"stroke-width":l,transform:"translate"+K,fill:"none"});t.setAttribute("class",(t.getAttribute("class")||"")+" highcharts-shadow");d&&(I(t,"height",Math.max(I(t,"height")-l,0)),t.cutHeight=l);
b?b.element.appendChild(t):z.parentNode&&z.parentNode.insertBefore(t,z);n.push(t)}this.shadows=n}return this},destroyShadows:function(){(this.shadows||[]).forEach(function(a){this.safeRemoveChild(a)},this);this.shadows=void 0},xGetter:function(a){"circle"===this.element.nodeName&&("x"===a?a="cx":"y"===a&&(a="cy"));return this._defaultGetter(a)},_defaultGetter:function(a){a=r(this[a+"Value"],this[a],this.element?this.element.getAttribute(a):null,0);/^[\-0-9\.]+$/.test(a)&&(a=parseFloat(a));return a},
dSetter:function(a,b,d){a&&a.join&&(a=a.join(" "));/(NaN| {2}|^$)/.test(a)&&(a="M 0 0");this[b]!==a&&(d.setAttribute(b,a),this[b]=a)},dashstyleSetter:function(a){var b,d=this["stroke-width"];"inherit"===d&&(d=1);if(a=a&&a.toLowerCase()){a=a.replace("shortdashdotdot","3,1,1,1,1,1,").replace("shortdashdot","3,1,1,1").replace("shortdot","1,1,").replace("shortdash","3,1,").replace("longdash","8,3,").replace(/dot/g,"1,3,").replace("dash","4,3,").replace(/,$/,"").split(",");for(b=a.length;b--;)a[b]=D(a[b])*
d;a=a.join(",").replace(/NaN/g,"none");this.element.setAttribute("stroke-dasharray",a)}},alignSetter:function(a){var b={left:"start",center:"middle",right:"end"};b[a]&&(this.alignValue=a,this.element.setAttribute("text-anchor",b[a]))},opacitySetter:function(a,b,d){this[b]=a;d.setAttribute(b,a)},titleSetter:function(a){var b=this.element.getElementsByTagName("title")[0];b||(b=y.createElementNS(this.SVG_NS,"title"),this.element.appendChild(b));b.firstChild&&b.removeChild(b.firstChild);b.appendChild(y.createTextNode(String(r(a,
"")).replace(/<[^>]*>/g,"").replace(/&lt;/g,"<").replace(/&gt;/g,">")))},textSetter:function(a){a!==this.textStr&&(delete this.bBox,delete this.textPxLength,this.textStr=a,this.added&&this.renderer.buildText(this))},setTextPath:function(a,b){var d=this.element,n={textAnchor:"text-anchor"},g=!1,z=this.textPathWrapper,f=!z;b=L(!0,{enabled:!0,attributes:{dy:-5,startOffset:"50%",textAnchor:"middle"}},b);var h=b.attributes;if(a&&b&&b.enabled){z&&null===z.element.parentNode?(f=!0,z=z.destroy()):z&&this.removeTextOutline.call(z.parentGroup,
[].slice.call(d.getElementsByTagName("tspan")));this.options&&this.options.padding&&(h.dx=-this.options.padding);z||(this.textPathWrapper=z=this.renderer.createElement("textPath"),g=!0);var t=z.element;(b=a.element.getAttribute("id"))||a.element.setAttribute("id",b=c.uniqueKey());if(f)for(a=d.getElementsByTagName("tspan");a.length;)a[0].setAttribute("y",0),B(h.dx)&&a[0].setAttribute("x",-h.dx),t.appendChild(a[0]);g&&z.add({element:this.text?this.text.element:d});t.setAttributeNS("http://www.w3.org/1999/xlink",
"href",this.renderer.url+"#"+b);G(h.dy)&&(t.parentNode.setAttribute("dy",h.dy),delete h.dy);G(h.dx)&&(t.parentNode.setAttribute("dx",h.dx),delete h.dx);m(h,function(a,b){t.setAttribute(n[b]||b,a)});d.removeAttribute("transform");this.removeTextOutline.call(z,[].slice.call(d.getElementsByTagName("tspan")));this.text&&!this.renderer.styledMode&&this.attr({fill:"none","stroke-width":0});this.applyTextOutline=this.updateTransform=E}else z&&(delete this.updateTransform,delete this.applyTextOutline,this.destroyTextPath(d,
a),this.updateTransform(),this.options.rotation&&this.applyTextOutline(this.options.style.textOutline));return this},destroyTextPath:function(a,b){var d=a.getElementsByTagName("text")[0];if(d){if(d.removeAttribute("dx"),d.removeAttribute("dy"),b.element.setAttribute("id",""),d.getElementsByTagName("textPath").length){for(a=this.textPathWrapper.element.childNodes;a.length;)d.appendChild(a[0]);d.removeChild(this.textPathWrapper.element)}}else if(a.getAttribute("dx")||a.getAttribute("dy"))a.removeAttribute("dx"),
a.removeAttribute("dy");this.textPathWrapper=this.textPathWrapper.destroy()},fillSetter:function(a,b,d){"string"===typeof a?d.setAttribute(b,a):a&&this.complexColor(a,b,d)},visibilitySetter:function(a,b,d){"inherit"===a?d.removeAttribute(b):this[b]!==a&&d.setAttribute(b,a);this[b]=a},zIndexSetter:function(a,b){var d=this.renderer,n=this.parentGroup,g=(n||d).element||d.box,z=this.element,f=!1;d=g===d.box;var h=this.added;var t;G(a)?(z.setAttribute("data-z-index",a),a=+a,this[b]===a&&(h=!1)):G(this[b])&&
z.removeAttribute("data-z-index");this[b]=a;if(h){(a=this.zIndex)&&n&&(n.handleZ=!0);b=g.childNodes;for(t=b.length-1;0<=t&&!f;t--){n=b[t];h=n.getAttribute("data-z-index");var l=!G(h);if(n!==z)if(0>a&&l&&!d&&!t)g.insertBefore(z,b[t]),f=!0;else if(D(h)<=a||l&&(!G(a)||0<=a))g.insertBefore(z,b[t+1]||null),f=!0}f||(g.insertBefore(z,b[d?3:0]||null),f=!0)}return f},_defaultSetter:function(a,b,d){d.setAttribute(b,a)}});P.prototype.yGetter=P.prototype.xGetter;P.prototype.translateXSetter=P.prototype.translateYSetter=
P.prototype.rotationSetter=P.prototype.verticalAlignSetter=P.prototype.rotationOriginXSetter=P.prototype.rotationOriginYSetter=P.prototype.scaleXSetter=P.prototype.scaleYSetter=P.prototype.matrixSetter=function(a,b){this[b]=a;this.doTransform=!0};P.prototype["stroke-widthSetter"]=P.prototype.strokeSetter=function(a,b,d){this[b]=a;this.stroke&&this["stroke-width"]?(P.prototype.fillSetter.call(this,this.stroke,"stroke",d),d.setAttribute("stroke-width",this["stroke-width"]),this.hasStroke=!0):"stroke-width"===
b&&0===a&&this.hasStroke?(d.removeAttribute("stroke"),this.hasStroke=!1):this.renderer.styledMode&&this["stroke-width"]&&(d.setAttribute("stroke-width",this["stroke-width"]),this.hasStroke=!0)};e=c.SVGRenderer=function(){this.init.apply(this,arguments)};q(e.prototype,{Element:P,SVG_NS:O,init:function(a,b,d,n,z,t,l){var K=this.createElement("svg").attr({version:"1.1","class":"highcharts-root"});l||K.css(this.getStyle(n));n=K.element;a.appendChild(n);I(a,"dir","ltr");-1===a.innerHTML.indexOf("xmlns")&&
I(n,"xmlns",this.SVG_NS);this.isSVG=!0;this.box=n;this.boxWrapper=K;this.alignedObjects=[];this.url=(g||x)&&y.getElementsByTagName("base").length?T.location.href.split("#")[0].replace(/<[^>]*>/g,"").replace(/([\('\)])/g,"\\$1").replace(/ /g,"%20"):"";this.createElement("desc").add().element.appendChild(y.createTextNode("Created with Highcharts 8.0.0"));this.defs=this.createElement("defs").add();this.allowHTML=t;this.forExport=z;this.styledMode=l;this.gradients={};this.cache={};this.cacheKeys=[];this.imgCount=
0;this.setSize(b,d,!1);var c;g&&a.getBoundingClientRect&&(b=function(){h(a,{left:0,top:0});c=a.getBoundingClientRect();h(a,{left:Math.ceil(c.left)-c.left+"px",top:Math.ceil(c.top)-c.top+"px"})},b(),this.unSubPixelFix=f(T,"resize",b))},definition:function(a){function b(a,n){var g;A(a).forEach(function(a){var z=d.createElement(a.tagName),f={};m(a,function(a,b){"tagName"!==b&&"children"!==b&&"textContent"!==b&&(f[b]=a)});z.attr(f);z.add(n||d.defs);a.textContent&&z.element.appendChild(y.createTextNode(a.textContent));
b(a.children||[],z);g=z});return g}var d=this;return b(a)},getStyle:function(a){return this.style=q({fontFamily:'"Lucida Grande", "Lucida Sans Unicode", Arial, Helvetica, sans-serif',fontSize:"12px"},a)},setStyle:function(a){this.boxWrapper.css(this.getStyle(a))},isHidden:function(){return!this.boxWrapper.getBBox().width},destroy:function(){var a=this.defs;this.box=null;this.boxWrapper=this.boxWrapper.destroy();H(this.gradients||{});this.gradients=null;a&&(this.defs=a.destroy());this.unSubPixelFix&&
this.unSubPixelFix();return this.alignedObjects=null},createElement:function(a){var b=new this.Element;b.init(this,a);return b},draw:E,getRadialAttr:function(a,b){return{cx:a[0]-a[2]/2+b.cx*a[2],cy:a[1]-a[2]/2+b.cy*a[2],r:b.r*a[2]}},truncate:function(a,b,d,n,g,z,f){var h=this,t=a.rotation,l,K=n?1:0,x=(d||n).length,c=x,k=[],N=function(a){b.firstChild&&b.removeChild(b.firstChild);a&&b.appendChild(y.createTextNode(a))},p=function(z,t){t=t||z;if("undefined"===typeof k[t])if(b.getSubStringLength)try{k[t]=
g+b.getSubStringLength(0,n?t+1:t)}catch(ea){""}else h.getSpanWidth&&(N(f(d||n,z)),k[t]=g+h.getSpanWidth(a,b));return k[t]},R;a.rotation=0;var O=p(b.textContent.length);if(R=g+O>z){for(;K<=x;)c=Math.ceil((K+x)/2),n&&(l=f(n,c)),O=p(c,l&&l.length-1),K===x?K=x+1:O>z?x=c-1:K=c;0===x?N(""):d&&x===d.length-1||N(l||f(d||n,c))}n&&n.splice(0,c);a.actualWidth=O;a.rotation=t;return R},escapes:{"&":"&amp;","<":"&lt;",">":"&gt;","'":"&#39;",'"':"&quot;"},buildText:function(a){var b=a.element,d=this,n=d.forExport,
g=r(a.textStr,"").toString(),z=-1!==g.indexOf("<"),f=b.childNodes,t,l=I(b,"x"),x=a.styles,c=a.textWidth,k=x&&x.lineHeight,p=x&&x.textOutline,L=x&&"ellipsis"===x.textOverflow,E=x&&"nowrap"===x.whiteSpace,A=x&&x.fontSize,Q,e=f.length;x=c&&!a.added&&this.box;var V=function(a){var n;d.styledMode||(n=/(px|em)$/.test(a&&a.style.fontSize)?a.style.fontSize:A||d.style.fontSize||12);return k?D(k):d.fontMetrics(n,a.getAttribute("style")?a:b).h},q=function(a,b){m(d.escapes,function(d,n){b&&-1!==b.indexOf(d)||
(a=a.toString().replace(new RegExp(d,"g"),n))});return a},P=function(a,b){var d=a.indexOf("<");a=a.substring(d,a.indexOf(">")-d);d=a.indexOf(b+"=");if(-1!==d&&(d=d+b.length+1,b=a.charAt(d),'"'===b||"'"===b))return a=a.substring(d+1),a.substring(0,a.indexOf(b))},T=/<br.*?>/g;var u=[g,L,E,k,p,A,c].join();if(u!==a.textCache){for(a.textCache=u;e--;)b.removeChild(f[e]);z||p||L||c||-1!==g.indexOf(" ")&&(!E||T.test(g))?(x&&x.appendChild(b),z?(g=d.styledMode?g.replace(/<(b|strong)>/g,'<span class="highcharts-strong">').replace(/<(i|em)>/g,
'<span class="highcharts-emphasized">'):g.replace(/<(b|strong)>/g,'<span style="font-weight:bold">').replace(/<(i|em)>/g,'<span style="font-style:italic">'),g=g.replace(/<a/g,"<span").replace(/<\/(b|strong|i|em|a)>/g,"</span>").split(T)):g=[g],g=g.filter(function(a){return""!==a}),g.forEach(function(g,z){var f=0,x=0;g=g.replace(/^\s+|\s+$/g,"").replace(/<span/g,"|||<span").replace(/<\/span>/g,"</span>|||");var K=g.split("|||");K.forEach(function(g){if(""!==g||1===K.length){var k={},p=y.createElementNS(d.SVG_NS,
"tspan"),R,r;(R=P(g,"class"))&&I(p,"class",R);if(R=P(g,"style"))R=R.replace(/(;| |^)color([ :])/,"$1fill$2"),I(p,"style",R);(r=P(g,"href"))&&!n&&(I(p,"onclick",'location.href="'+r+'"'),I(p,"class","highcharts-anchor"),d.styledMode||h(p,{cursor:"pointer"}));g=q(g.replace(/<[a-zA-Z\/](.|\n)*?>/g,"")||" ");if(" "!==g){p.appendChild(y.createTextNode(g));f?k.dx=0:z&&null!==l&&(k.x=l);I(p,k);b.appendChild(p);!f&&Q&&(!N&&n&&h(p,{display:"block"}),I(p,"dy",V(p)));if(c){var m=g.replace(/([^\^])-/g,"$1- ").split(" ");
k=!E&&(1<K.length||z||1<m.length);r=0;var e=V(p);if(L)t=d.truncate(a,p,g,void 0,0,Math.max(0,c-parseInt(A||12,10)),function(a,b){return a.substring(0,b)+"\u2026"});else if(k)for(;m.length;)m.length&&!E&&0<r&&(p=y.createElementNS(O,"tspan"),I(p,{dy:e,x:l}),R&&I(p,"style",R),p.appendChild(y.createTextNode(m.join(" ").replace(/- /g,"-"))),b.appendChild(p)),d.truncate(a,p,null,m,0===r?x:0,c,function(a,b){return m.slice(0,b).join(" ").replace(/- /g,"-")}),x=a.actualWidth,r++}f++}}});Q=Q||b.childNodes.length}),
L&&t&&a.attr("title",q(a.textStr,["&lt;","&gt;"])),x&&x.removeChild(b),p&&a.applyTextOutline&&a.applyTextOutline(p)):b.appendChild(y.createTextNode(q(g)))}},getContrast:function(a){a=d(a).rgba;a[0]*=1;a[1]*=1.2;a[2]*=.5;return 459<a[0]+a[1]+a[2]?"#000000":"#FFFFFF"},button:function(a,b,d,n,g,z,h,l,x,c){var K=this.label(a,b,d,x,null,null,c,null,"button"),k=0,N=this.styledMode;K.attr(L({padding:8,r:2},g));if(!N){g=L({fill:"#f7f7f7",stroke:"#cccccc","stroke-width":1,style:{color:"#333333",cursor:"pointer",
fontWeight:"normal"}},g);var p=g.style;delete g.style;z=L(g,{fill:"#e6e6e6"},z);var O=z.style;delete z.style;h=L(g,{fill:"#e6ebf5",style:{color:"#000000",fontWeight:"bold"}},h);var R=h.style;delete h.style;l=L(g,{style:{color:"#cccccc"}},l);var E=l.style;delete l.style}f(K.element,t?"mouseover":"mouseenter",function(){3!==k&&K.setState(1)});f(K.element,t?"mouseout":"mouseleave",function(){3!==k&&K.setState(k)});K.setState=function(a){1!==a&&(K.state=k=a);K.removeClass(/highcharts-button-(normal|hover|pressed|disabled)/).addClass("highcharts-button-"+
["normal","hover","pressed","disabled"][a||0]);N||K.attr([g,z,h,l][a||0]).css([p,O,R,E][a||0])};N||K.attr(g).css(q({cursor:"default"},p));return K.on("click",function(a){3!==k&&n.call(K,a)})},crispLine:function(a,b){a[1]===a[4]&&(a[1]=a[4]=Math.round(a[1])-b%2/2);a[2]===a[5]&&(a[2]=a[5]=Math.round(a[2])+b%2/2);return a},path:function(a){var b=this.styledMode?{}:{fill:"none"};C(a)?b.d=a:u(a)&&q(b,a);return this.createElement("path").attr(b)},circle:function(a,b,d){a=u(a)?a:"undefined"===typeof a?{}:
{x:a,y:b,r:d};b=this.createElement("circle");b.xSetter=b.ySetter=function(a,b,d){d.setAttribute("c"+b,a)};return b.attr(a)},arc:function(a,b,d,n,g,z){u(a)?(n=a,b=n.y,d=n.r,a=n.x):n={innerR:n,start:g,end:z};a=this.symbol("arc",a,b,d,d,n);a.r=d;return a},rect:function(a,b,d,n,g,z){g=u(a)?a.r:g;var f=this.createElement("rect");a=u(a)?a:"undefined"===typeof a?{}:{x:a,y:b,width:Math.max(d,0),height:Math.max(n,0)};this.styledMode||("undefined"!==typeof z&&(a.strokeWidth=z,a=f.crisp(a)),a.fill="none");g&&
(a.r=g);f.rSetter=function(a,b,d){f.r=a;I(d,{rx:a,ry:a})};f.rGetter=function(){return f.r};return f.attr(a)},setSize:function(a,b,d){var n=this.alignedObjects,g=n.length;this.width=a;this.height=b;for(this.boxWrapper.animate({width:a,height:b},{step:function(){this.attr({viewBox:"0 0 "+this.attr("width")+" "+this.attr("height")})},duration:r(d,!0)?void 0:0});g--;)n[g].align()},g:function(a){var b=this.createElement("g");return a?b.attr({"class":"highcharts-"+a}):b},image:function(a,b,d,n,g,z){var h=
{preserveAspectRatio:"none"},t=function(a,b){a.setAttributeNS?a.setAttributeNS("http://www.w3.org/1999/xlink","href",b):a.setAttribute("hc-svg-href",b)},l=function(b){t(x.element,a);z.call(x,b)};1<arguments.length&&q(h,{x:b,y:d,width:n,height:g});var x=this.createElement("image").attr(h);z?(t(x.element,"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="),h=new T.Image,f(h,"load",l),h.src=a,h.complete&&l({})):t(x.element,a);return x},symbol:function(b,d,n,g,z,f){var t=this,
l=/^url\((.*?)\)$/,x=l.test(b),c=!x&&(this.symbols[b]?b:"circle"),K=c&&this.symbols[c],N=G(d)&&K&&K.call(this.symbols,Math.round(d),Math.round(n),g,z,f);if(K){var p=this.path(N);t.styledMode||p.attr("fill","none");q(p,{symbolName:c,x:d,y:n,width:g,height:z});f&&q(p,f)}else if(x){var O=b.match(l)[1];p=this.image(O);p.imgwidth=r(V[O]&&V[O].width,f&&f.width);p.imgheight=r(V[O]&&V[O].height,f&&f.height);var R=function(){p.attr({width:p.width,height:p.height})};["width","height"].forEach(function(a){p[a+
"Setter"]=function(a,b){var d={},n=this["img"+b],g="width"===b?"translateX":"translateY";this[b]=a;G(n)&&(f&&"within"===f.backgroundSize&&this.width&&this.height&&(n=Math.round(n*Math.min(this.width/this.imgwidth,this.height/this.imgheight))),this.element&&this.element.setAttribute(b,n),this.alignByTranslate||(d[g]=((this[b]||0)-n)/2,this.attr(d)))}});G(d)&&p.attr({x:d,y:n});p.isImg=!0;G(p.imgwidth)&&G(p.imgheight)?R():(p.attr({width:0,height:0}),k("img",{onload:function(){var b=a[t.chartIndex];0===
this.width&&(h(this,{position:"absolute",top:"-999em"}),y.body.appendChild(this));V[O]={width:this.width,height:this.height};p.imgwidth=this.width;p.imgheight=this.height;p.element&&R();this.parentNode&&this.parentNode.removeChild(this);t.imgCount--;if(!t.imgCount&&b&&b.onload)b.onload()},src:O}),this.imgCount++)}return p},symbols:{circle:function(a,b,d,n){return this.arc(a+d/2,b+n/2,d/2,n/2,{start:.5*Math.PI,end:2.5*Math.PI,open:!1})},square:function(a,b,d,n){return["M",a,b,"L",a+d,b,a+d,b+n,a,b+
n,"Z"]},triangle:function(a,b,d,n){return["M",a+d/2,b,"L",a+d,b+n,a,b+n,"Z"]},"triangle-down":function(a,b,d,n){return["M",a,b,"L",a+d,b,a+d/2,b+n,"Z"]},diamond:function(a,b,d,n){return["M",a+d/2,b,"L",a+d,b+n/2,a+d/2,b+n,a,b+n/2,"Z"]},arc:function(a,b,d,n,g){var z=g.start,f=g.r||d,h=g.r||n||d,t=g.end-.001;d=g.innerR;n=r(g.open,.001>Math.abs(g.end-g.start-2*Math.PI));var l=Math.cos(z),x=Math.sin(z),c=Math.cos(t);t=Math.sin(t);z=r(g.longArc,.001>g.end-z-Math.PI?0:1);f=["M",a+f*l,b+h*x,"A",f,h,0,z,
r(g.clockwise,1),a+f*c,b+h*t];G(d)&&f.push(n?"M":"L",a+d*c,b+d*t,"A",d,d,0,z,G(g.clockwise)?1-g.clockwise:0,a+d*l,b+d*x);f.push(n?"":"Z");return f},callout:function(a,b,d,n,g){var z=Math.min(g&&g.r||0,d,n),f=z+6,h=g&&g.anchorX;g=g&&g.anchorY;var t=["M",a+z,b,"L",a+d-z,b,"C",a+d,b,a+d,b,a+d,b+z,"L",a+d,b+n-z,"C",a+d,b+n,a+d,b+n,a+d-z,b+n,"L",a+z,b+n,"C",a,b+n,a,b+n,a,b+n-z,"L",a,b+z,"C",a,b,a,b,a+z,b];h&&h>d?g>b+f&&g<b+n-f?t.splice(13,3,"L",a+d,g-6,a+d+6,g,a+d,g+6,a+d,b+n-z):t.splice(13,3,"L",a+d,
n/2,h,g,a+d,n/2,a+d,b+n-z):h&&0>h?g>b+f&&g<b+n-f?t.splice(33,3,"L",a,g+6,a-6,g,a,g-6,a,b+z):t.splice(33,3,"L",a,n/2,h,g,a,n/2,a,b+z):g&&g>n&&h>a+f&&h<a+d-f?t.splice(23,3,"L",h+6,b+n,h,b+n+6,h-6,b+n,a+z,b+n):g&&0>g&&h>a+f&&h<a+d-f&&t.splice(3,3,"L",h-6,b,h,b-6,h+6,b,d-z,b);return t}},clipRect:function(a,b,d,n){var g=c.uniqueKey()+"-",z=this.createElement("clipPath").attr({id:g}).add(this.defs);a=this.rect(a,b,d,n,0).add(z);a.id=g;a.clipPath=z;a.count=0;return a},text:function(a,b,d,n){var g={};if(n&&
(this.allowHTML||!this.forExport))return this.html(a,b,d);g.x=Math.round(b||0);d&&(g.y=Math.round(d));G(a)&&(g.text=a);a=this.createElement("text").attr(g);n||(a.xSetter=function(a,b,d){var n=d.getElementsByTagName("tspan"),g=d.getAttribute(b),z;for(z=0;z<n.length;z++){var f=n[z];f.getAttribute(b)===g&&f.setAttribute(b,a)}d.setAttribute(b,a)});return a},fontMetrics:function(a,b){a=!this.styledMode&&/px/.test(a)||!T.getComputedStyle?a||b&&b.style&&b.style.fontSize||this.style&&this.style.fontSize:
b&&P.prototype.getStyle.call(b,"font-size");a=/px/.test(a)?D(a):12;b=24>a?a+3:Math.round(1.2*a);return{h:b,b:Math.round(.8*b),f:a}},rotCorr:function(a,b,d){var n=a;b&&d&&(n=Math.max(n*Math.cos(b*l),4));return{x:-a/3*Math.sin(b*l),y:n}},label:function(a,b,d,g,z,f,h,t,l){var x=this,c=x.styledMode,k=x.g("button"!==l&&"label"),p=k.text=x.text("",0,0,h).attr({zIndex:1}),N,K,O=0,E=3,r=0,A,y,m,R,e,D={},V,T,da=/^url\((.*?)\)$/.test(g),u=c||da,v=function(){return c?N.strokeWidth()%2/2:(V?parseInt(V,10):0)%
2/2};l&&k.addClass("highcharts-"+l);var w=function(){var a=p.element.style,b={};K=("undefined"===typeof A||"undefined"===typeof y||e)&&G(p.textStr)&&p.getBBox();k.width=(A||K.width||0)+2*E+r;k.height=(y||K.height||0)+2*E;T=E+Math.min(x.fontMetrics(a&&a.fontSize,p).b,K?K.height:Infinity);u&&(N||(k.box=N=x.symbols[g]||da?x.symbol(g):x.rect(),N.addClass(("button"===l?"":"highcharts-label-box")+(l?" highcharts-"+l+"-box":"")),N.add(k),a=v(),b.x=a,b.y=(t?-T:0)+a),b.width=Math.round(k.width),b.height=Math.round(k.height),
N.attr(q(b,D)),D={})};var Q=function(){var a=r+E;var b=t?0:T;G(A)&&K&&("center"===e||"right"===e)&&(a+={center:.5,right:1}[e]*(A-K.width));if(a!==p.x||b!==p.y)p.attr("x",a),p.hasBoxWidthChanged&&(K=p.getBBox(!0),w()),"undefined"!==typeof b&&p.attr("y",b);p.x=a;p.y=b};var U=function(a,b){N?N.attr(a,b):D[a]=b};k.onAdd=function(){p.add(k);k.attr({text:a||0===a?a:"",x:b,y:d});N&&G(z)&&k.attr({anchorX:z,anchorY:f})};k.widthSetter=function(a){A=B(a)?a:null};k.heightSetter=function(a){y=a};k["text-alignSetter"]=
function(a){e=a};k.paddingSetter=function(a){G(a)&&a!==E&&(E=k.padding=a,Q())};k.paddingLeftSetter=function(a){G(a)&&a!==r&&(r=a,Q())};k.alignSetter=function(a){a={left:0,center:.5,right:1}[a];a!==O&&(O=a,K&&k.attr({x:m}))};k.textSetter=function(a){"undefined"!==typeof a&&p.attr({text:a});w();Q()};k["stroke-widthSetter"]=function(a,b){a&&(u=!0);V=this["stroke-width"]=a;U(b,a)};c?k.rSetter=function(a,b){U(b,a)}:k.strokeSetter=k.fillSetter=k.rSetter=function(a,b){"r"!==b&&("fill"===b&&a&&(u=!0),k[b]=
a);U(b,a)};k.anchorXSetter=function(a,b){z=k.anchorX=a;U(b,Math.round(a)-v()-m)};k.anchorYSetter=function(a,b){f=k.anchorY=a;U(b,a-R)};k.xSetter=function(a){k.x=a;O&&(a-=O*((A||K.width)+2*E),k["forceAnimate:x"]=!0);m=Math.round(a);k.attr("translateX",m)};k.ySetter=function(a){R=k.y=Math.round(a);k.attr("translateY",R)};var C=k.css;h={css:function(a){if(a){var b={};a=L(a);k.textProps.forEach(function(d){"undefined"!==typeof a[d]&&(b[d]=a[d],delete a[d])});p.css(b);"width"in b&&w();"fontSize"in b&&
(w(),Q())}return C.call(k,a)},getBBox:function(){return{width:K.width+2*E,height:K.height+2*E,x:K.x-E,y:K.y-E}},destroy:function(){n(k.element,"mouseenter");n(k.element,"mouseleave");p&&(p=p.destroy());N&&(N=N.destroy());P.prototype.destroy.call(k);k=x=w=Q=U=null}};c||(h.shadow=function(a){a&&(w(),N&&N.shadow(a));return k});return q(k,h)}});c.Renderer=e});M(J,"parts/Html.js",[J["parts/Globals.js"],J["parts/Utilities.js"]],function(c,e){var F=e.attr,I=e.defined,G=e.extend,H=e.pick,v=e.pInt,q=c.createElement,
C=c.css,B=c.isFirefox,u=c.isMS,w=c.isWebKit,m=c.SVGElement;e=c.SVGRenderer;var r=c.win;G(m.prototype,{htmlCss:function(c){var r="SPAN"===this.element.tagName&&c&&"width"in c,f=H(r&&c.width,void 0);if(r){delete c.width;this.textWidth=f;var b=!0}c&&"ellipsis"===c.textOverflow&&(c.whiteSpace="nowrap",c.overflow="hidden");this.styles=G(this.styles,c);C(this.element,c);b&&this.htmlUpdateTransform();return this},htmlGetBBox:function(){var c=this.element;return{x:c.offsetLeft,y:c.offsetTop,width:c.offsetWidth,
height:c.offsetHeight}},htmlUpdateTransform:function(){if(this.added){var c=this.renderer,r=this.element,f=this.translateX||0,b=this.translateY||0,a=this.x||0,d=this.y||0,h=this.textAlign||"left",k={left:0,center:.5,right:1}[h],l=this.styles,y=l&&l.whiteSpace;C(r,{marginLeft:f,marginTop:b});!c.styledMode&&this.shadows&&this.shadows.forEach(function(a){C(a,{marginLeft:f+1,marginTop:b+1})});this.inverted&&[].forEach.call(r.childNodes,function(a){c.invertChild(a,r)});if("SPAN"===r.tagName){l=this.rotation;
var p=this.textWidth&&v(this.textWidth),g=[l,h,r.innerHTML,this.textWidth,this.textAlign].join(),t;(t=p!==this.oldTextWidth)&&!(t=p>this.oldTextWidth)&&((t=this.textPxLength)||(C(r,{width:"",whiteSpace:y||"nowrap"}),t=r.offsetWidth),t=t>p);t&&(/[ \-]/.test(r.textContent||r.innerText)||"ellipsis"===r.style.textOverflow)?(C(r,{width:p+"px",display:"block",whiteSpace:y||"normal"}),this.oldTextWidth=p,this.hasBoxWidthChanged=!0):this.hasBoxWidthChanged=!1;g!==this.cTT&&(y=c.fontMetrics(r.style.fontSize,
r).b,!I(l)||l===(this.oldRotation||0)&&h===this.oldAlign||this.setSpanRotation(l,k,y),this.getSpanCorrection(!I(l)&&this.textPxLength||r.offsetWidth,y,k,l,h));C(r,{left:a+(this.xCorr||0)+"px",top:d+(this.yCorr||0)+"px"});this.cTT=g;this.oldRotation=l;this.oldAlign=h}}else this.alignOnAdd=!0},setSpanRotation:function(c,r,f){var b={},a=this.renderer.getTransformKey();b[a]=b.transform="rotate("+c+"deg)";b[a+(B?"Origin":"-origin")]=b.transformOrigin=100*r+"% "+f+"px";C(this.element,b)},getSpanCorrection:function(c,
r,f){this.xCorr=-c*f;this.yCorr=-r}});G(e.prototype,{getTransformKey:function(){return u&&!/Edge/.test(r.navigator.userAgent)?"-ms-transform":w?"-webkit-transform":B?"MozTransform":r.opera?"-o-transform":""},html:function(c,r,f){var b=this.createElement("span"),a=b.element,d=b.renderer,h=d.isSVG,k=function(a,b){["opacity","visibility"].forEach(function(d){a[d+"Setter"]=function(g,f,h){var t=a.div?a.div.style:b;m.prototype[d+"Setter"].call(this,g,f,h);t&&(t[f]=g)}});a.addedSetters=!0};b.textSetter=
function(d){d!==a.innerHTML&&(delete this.bBox,delete this.oldTextWidth);this.textStr=d;a.innerHTML=H(d,"");b.doTransform=!0};h&&k(b,b.element.style);b.xSetter=b.ySetter=b.alignSetter=b.rotationSetter=function(a,d){"align"===d&&(d="textAlign");b[d]=a;b.doTransform=!0};b.afterSetters=function(){this.doTransform&&(this.htmlUpdateTransform(),this.doTransform=!1)};b.attr({text:c,x:Math.round(r),y:Math.round(f)}).css({position:"absolute"});d.styledMode||b.css({fontFamily:this.style.fontFamily,fontSize:this.style.fontSize});
a.style.whiteSpace="nowrap";b.css=b.htmlCss;h&&(b.add=function(f){var h=d.box.parentNode,l=[];if(this.parentGroup=f){var g=f.div;if(!g){for(;f;)l.push(f),f=f.parentGroup;l.reverse().forEach(function(a){function d(b,d){a[d]=b;"translateX"===d?t.left=b+"px":t.top=b+"px";a.doTransform=!0}var f=F(a.element,"class");g=a.div=a.div||q("div",f?{className:f}:void 0,{position:"absolute",left:(a.translateX||0)+"px",top:(a.translateY||0)+"px",display:a.display,opacity:a.opacity,pointerEvents:a.styles&&a.styles.pointerEvents},
g||h);var t=g.style;G(a,{classSetter:function(a){return function(b){this.element.setAttribute("class",b);a.className=b}}(g),on:function(){l[0].div&&b.on.apply({element:l[0].div},arguments);return a},translateXSetter:d,translateYSetter:d});a.addedSetters||k(a)})}}else g=h;g.appendChild(a);b.added=!0;b.alignOnAdd&&b.htmlUpdateTransform();return b});return b}})});M(J,"parts/Time.js",[J["parts/Globals.js"],J["parts/Utilities.js"]],function(c,e){var F=e.defined,I=e.extend,G=e.isObject,H=e.objectEach,v=
e.pad,q=e.pick,C=e.splat,B=c.merge,u=c.timeUnits,w=c.win;c.Time=function(c){this.update(c,!1)};c.Time.prototype={defaultOptions:{Date:void 0,getTimezoneOffset:void 0,timezone:void 0,timezoneOffset:0,useUTC:!0},update:function(c){var r=q(c&&c.useUTC,!0),m=this;this.options=c=B(!0,this.options||{},c);this.Date=c.Date||w.Date||Date;this.timezoneOffset=(this.useUTC=r)&&c.timezoneOffset;this.getTimezoneOffset=this.timezoneOffsetFunction();(this.variableTimezone=!(r&&!c.getTimezoneOffset&&!c.timezone))||
this.timezoneOffset?(this.get=function(c,f){var b=f.getTime(),a=b-m.getTimezoneOffset(f);f.setTime(a);c=f["getUTC"+c]();f.setTime(b);return c},this.set=function(c,f,b){if("Milliseconds"===c||"Seconds"===c||"Minutes"===c&&0===f.getTimezoneOffset()%60)f["set"+c](b);else{var a=m.getTimezoneOffset(f);a=f.getTime()-a;f.setTime(a);f["setUTC"+c](b);c=m.getTimezoneOffset(f);a=f.getTime()+c;f.setTime(a)}}):r?(this.get=function(c,f){return f["getUTC"+c]()},this.set=function(c,f,b){return f["setUTC"+c](b)}):
(this.get=function(c,f){return f["get"+c]()},this.set=function(c,f,b){return f["set"+c](b)})},makeTime:function(m,r,e,A,f,b){if(this.useUTC){var a=this.Date.UTC.apply(0,arguments);var d=this.getTimezoneOffset(a);a+=d;var h=this.getTimezoneOffset(a);d!==h?a+=h-d:d-36E5!==this.getTimezoneOffset(a-36E5)||c.isSafari||(a-=36E5)}else a=(new this.Date(m,r,q(e,1),q(A,0),q(f,0),q(b,0))).getTime();return a},timezoneOffsetFunction:function(){var m=this,r=this.options,e=w.moment;if(!this.useUTC)return function(c){return 6E4*
(new Date(c)).getTimezoneOffset()};if(r.timezone){if(e)return function(c){return 6E4*-e.tz(c,r.timezone).utcOffset()};c.error(25)}return this.useUTC&&r.getTimezoneOffset?function(c){return 6E4*r.getTimezoneOffset(c)}:function(){return 6E4*(m.timezoneOffset||0)}},dateFormat:function(m,r,e){if(!F(r)||isNaN(r))return c.defaultOptions.lang.invalidDate||"";m=q(m,"%Y-%m-%d %H:%M:%S");var A=this,f=new this.Date(r),b=this.get("Hours",f),a=this.get("Day",f),d=this.get("Date",f),h=this.get("Month",f),k=this.get("FullYear",
f),l=c.defaultOptions.lang,y=l.weekdays,p=l.shortWeekdays;f=I({a:p?p[a]:y[a].substr(0,3),A:y[a],d:v(d),e:v(d,2," "),w:a,b:l.shortMonths[h],B:l.months[h],m:v(h+1),o:h+1,y:k.toString().substr(2,2),Y:k,H:v(b),k:b,I:v(b%12||12),l:b%12||12,M:v(A.get("Minutes",f)),p:12>b?"AM":"PM",P:12>b?"am":"pm",S:v(f.getSeconds()),L:v(Math.floor(r%1E3),3)},c.dateFormats);H(f,function(a,b){for(;-1!==m.indexOf("%"+b);)m=m.replace("%"+b,"function"===typeof a?a.call(A,r):a)});return e?m.substr(0,1).toUpperCase()+m.substr(1):
m},resolveDTLFormat:function(c){return G(c,!0)?c:(c=C(c),{main:c[0],from:c[1],to:c[2]})},getTimeTicks:function(c,r,e,A){var f=this,b=[],a={};var d=new f.Date(r);var h=c.unitRange,k=c.count||1,l;A=q(A,1);if(F(r)){f.set("Milliseconds",d,h>=u.second?0:k*Math.floor(f.get("Milliseconds",d)/k));h>=u.second&&f.set("Seconds",d,h>=u.minute?0:k*Math.floor(f.get("Seconds",d)/k));h>=u.minute&&f.set("Minutes",d,h>=u.hour?0:k*Math.floor(f.get("Minutes",d)/k));h>=u.hour&&f.set("Hours",d,h>=u.day?0:k*Math.floor(f.get("Hours",
d)/k));h>=u.day&&f.set("Date",d,h>=u.month?1:Math.max(1,k*Math.floor(f.get("Date",d)/k)));if(h>=u.month){f.set("Month",d,h>=u.year?0:k*Math.floor(f.get("Month",d)/k));var y=f.get("FullYear",d)}h>=u.year&&f.set("FullYear",d,y-y%k);h===u.week&&(y=f.get("Day",d),f.set("Date",d,f.get("Date",d)-y+A+(y<A?-7:0)));y=f.get("FullYear",d);A=f.get("Month",d);var p=f.get("Date",d),g=f.get("Hours",d);r=d.getTime();f.variableTimezone&&(l=e-r>4*u.month||f.getTimezoneOffset(r)!==f.getTimezoneOffset(e));r=d.getTime();
for(d=1;r<e;)b.push(r),r=h===u.year?f.makeTime(y+d*k,0):h===u.month?f.makeTime(y,A+d*k):!l||h!==u.day&&h!==u.week?l&&h===u.hour&&1<k?f.makeTime(y,A,p,g+d*k):r+h*k:f.makeTime(y,A,p+d*k*(h===u.day?1:7)),d++;b.push(r);h<=u.hour&&1E4>b.length&&b.forEach(function(b){0===b%18E5&&"000000000"===f.dateFormat("%H%M%S%L",b)&&(a[b]="day")})}b.info=I(c,{higherRanks:a,totalRange:h*k});return b}}});M(J,"parts/Options.js",[J["parts/Globals.js"]],function(c){var e=c.color,F=c.merge;c.defaultOptions={colors:"#7cb5ec #434348 #90ed7d #f7a35c #8085e9 #f15c80 #e4d354 #2b908f #f45b5b #91e8e1".split(" "),
symbols:["circle","diamond","square","triangle","triangle-down"],lang:{loading:"Loading...",months:"January February March April May June July August September October November December".split(" "),shortMonths:"Jan Feb Mar Apr May Jun Jul Aug Sep Oct Nov Dec".split(" "),weekdays:"Sunday Monday Tuesday Wednesday Thursday Friday Saturday".split(" "),decimalPoint:".",numericSymbols:"kMGTPE".split(""),resetZoom:"Reset zoom",resetZoomTitle:"Reset zoom level 1:1",thousandsSep:" "},global:{},time:c.Time.prototype.defaultOptions,
chart:{styledMode:!1,borderRadius:0,colorCount:10,defaultSeriesType:"line",ignoreHiddenSeries:!0,spacing:[10,10,15,10],resetZoomButton:{theme:{zIndex:6},position:{align:"right",x:-10,y:10}},width:null,height:null,borderColor:"#335cad",backgroundColor:"#ffffff",plotBorderColor:"#cccccc"},title:{text:"",align:"center",margin:15,widthAdjust:-44},subtitle:{text:"",align:"center",widthAdjust:-44},caption:{margin:15,text:"",align:"left",verticalAlign:"bottom"},plotOptions:{},labels:{style:{position:"absolute",
color:"#333333"}},legend:{enabled:!0,align:"center",alignColumns:!0,layout:"horizontal",labelFormatter:function(){return this.name},borderColor:"#999999",borderRadius:0,navigation:{activeColor:"#003399",inactiveColor:"#cccccc"},itemStyle:{color:"#333333",cursor:"pointer",fontSize:"12px",fontWeight:"bold",textOverflow:"ellipsis"},itemHoverStyle:{color:"#000000"},itemHiddenStyle:{color:"#cccccc"},shadow:!1,itemCheckboxStyle:{position:"absolute",width:"13px",height:"13px"},squareSymbol:!0,symbolPadding:5,
verticalAlign:"bottom",x:0,y:0,title:{style:{fontWeight:"bold"}}},loading:{labelStyle:{fontWeight:"bold",position:"relative",top:"45%"},style:{position:"absolute",backgroundColor:"#ffffff",opacity:.5,textAlign:"center"}},tooltip:{enabled:!0,animation:c.svg,borderRadius:3,dateTimeLabelFormats:{millisecond:"%A, %b %e, %H:%M:%S.%L",second:"%A, %b %e, %H:%M:%S",minute:"%A, %b %e, %H:%M",hour:"%A, %b %e, %H:%M",day:"%A, %b %e, %Y",week:"Week from %A, %b %e, %Y",month:"%B %Y",year:"%Y"},footerFormat:"",
padding:8,snap:c.isTouchDevice?25:10,headerFormat:'<span style="font-size: 10px">{point.key}</span><br/>',pointFormat:'<span style="color:{point.color}">\u25cf</span> {series.name}: <b>{point.y}</b><br/>',backgroundColor:e("#f7f7f7").setOpacity(.85).get(),borderWidth:1,shadow:!0,style:{color:"#333333",cursor:"default",fontSize:"12px",pointerEvents:"none",whiteSpace:"nowrap"}},credits:{enabled:!0,href:"https://www.highcharts.com?credits",position:{align:"right",x:-10,verticalAlign:"bottom",y:-5},style:{cursor:"pointer",
color:"#999999",fontSize:"9px"},text:"Highcharts.com"}};c.setOptions=function(e){c.defaultOptions=F(!0,c.defaultOptions,e);(e.time||e.global)&&c.time.update(F(c.defaultOptions.global,c.defaultOptions.time,e.global,e.time));return c.defaultOptions};c.getOptions=function(){return c.defaultOptions};c.defaultPlotOptions=c.defaultOptions.plotOptions;c.time=new c.Time(F(c.defaultOptions.global,c.defaultOptions.time));c.dateFormat=function(e,G,H){return c.time.dateFormat(e,G,H)};""});M(J,"parts/Tick.js",
[J["parts/Globals.js"],J["parts/Utilities.js"]],function(c,e){var F=e.clamp,I=e.correctFloat,G=e.defined,H=e.destroyObjectProperties,v=e.extend,q=e.isNumber,C=e.objectEach,B=e.pick,u=c.fireEvent,w=c.merge,m=c.deg2rad;c.Tick=function(c,e,m,f,b){this.axis=c;this.pos=e;this.type=m||"";this.isNewLabel=this.isNew=!0;this.parameters=b||{};this.tickmarkOffset=this.parameters.tickmarkOffset;this.options=this.parameters.options;m||f||this.addLabel()};c.Tick.prototype={addLabel:function(){var c=this,e=c.axis,
m=e.options,f=e.chart,b=e.categories,a=e.names,d=c.pos,h=B(c.options&&c.options.labels,m.labels),k=e.tickPositions,l=d===k[0],y=d===k[k.length-1];a=this.parameters.category||(b?B(b[d],a[d],d):d);var p=c.label;b=(!h.step||1===h.step)&&1===e.tickInterval;k=k.info;var g,t;if(e.isDatetimeAxis&&k){var x=f.time.resolveDTLFormat(m.dateTimeLabelFormats[!m.grid&&k.higherRanks[d]||k.unitName]);var L=x.main}c.isFirst=l;c.isLast=y;c.formatCtx={axis:e,chart:f,isFirst:l,isLast:y,dateTimeLabelFormat:L,tickPositionInfo:k,
value:e.isLog?I(e.lin2log(a)):a,pos:d};m=e.labelFormatter.call(c.formatCtx,this.formatCtx);if(t=x&&x.list)c.shortenLabel=function(){for(g=0;g<t.length;g++)if(p.attr({text:e.labelFormatter.call(v(c.formatCtx,{dateTimeLabelFormat:t[g]}))}),p.getBBox().width<e.getSlotWidth(c)-2*B(h.padding,5))return;p.attr({text:""})};b&&e._addedPlotLB&&e.isXAxis&&c.moveLabel(m,h);G(p)||c.movedLabel?p&&p.textStr!==m&&!b&&(!p.textWidth||h.style&&h.style.width||p.styles.width||p.css({width:null}),p.attr({text:m}),p.textPxLength=
p.getBBox().width):(c.label=p=c.createLabel({x:0,y:0},m,h),c.rotation=0)},moveLabel:function(c,e){var r=this,f=r.label,b=!1,a=r.axis,d=a.reversed,h=a.chart.inverted;f&&f.textStr===c?(r.movedLabel=f,b=!0,delete r.label):C(a.ticks,function(a){b||a.isNew||a===r||!a.label||a.label.textStr!==c||(r.movedLabel=a.label,b=!0,a.labelPos=r.movedLabel.xy,delete a.label)});if(!b&&(r.labelPos||f)){var k=r.labelPos||f.xy;f=h?k.x:d?0:a.width+a.left;a=h?d?a.width+a.left:0:k.y;r.movedLabel=r.createLabel({x:f,y:a},
c,e);r.movedLabel&&r.movedLabel.attr({opacity:0})}},createLabel:function(c,e,m){var f=this.axis,b=f.chart;if(c=G(e)&&m.enabled?b.renderer.text(e,c.x,c.y,m.useHTML).add(f.labelGroup):null)b.styledMode||c.css(w(m.style)),c.textPxLength=c.getBBox().width;return c},replaceMovedLabel:function(){var c=this.label,e=this.axis,m=e.reversed,f=this.axis.chart.inverted;if(c&&!this.isNew){var b=f?c.xy.x:m?e.left:e.width+e.left;m=f?m?e.width+e.top:e.top:c.xy.y;c.animate({x:b,y:m,opacity:0},void 0,c.destroy);delete this.label}e.isDirty=
!0;this.label=this.movedLabel;delete this.movedLabel},getLabelSize:function(){return this.label?this.label.getBBox()[this.axis.horiz?"height":"width"]:0},handleOverflow:function(c){var e=this.axis,r=e.options.labels,f=c.x,b=e.chart.chartWidth,a=e.chart.spacing,d=B(e.labelLeft,Math.min(e.pos,a[3]));a=B(e.labelRight,Math.max(e.isRadial?0:e.pos+e.len,b-a[1]));var h=this.label,k=this.rotation,l={left:0,center:.5,right:1}[e.labelAlign||h.attr("align")],y=h.getBBox().width,p=e.getSlotWidth(this),g=p,t=
1,x,L={};if(k||"justify"!==B(r.overflow,"justify"))0>k&&f-l*y<d?x=Math.round(f/Math.cos(k*m)-d):0<k&&f+l*y>a&&(x=Math.round((b-f)/Math.cos(k*m)));else if(b=f+(1-l)*y,f-l*y<d?g=c.x+g*(1-l)-d:b>a&&(g=a-c.x+g*l,t=-1),g=Math.min(p,g),g<p&&"center"===e.labelAlign&&(c.x+=t*(p-g-l*(p-Math.min(y,g)))),y>g||e.autoRotation&&(h.styles||{}).width)x=g;x&&(this.shortenLabel?this.shortenLabel():(L.width=Math.floor(x),(r.style||{}).textOverflow||(L.textOverflow="ellipsis"),h.css(L)))},getPosition:function(c,e,m,
f){var b=this.axis,a=b.chart,d=f&&a.oldChartHeight||a.chartHeight;c={x:c?I(b.translate(e+m,null,null,f)+b.transB):b.left+b.offset+(b.opposite?(f&&a.oldChartWidth||a.chartWidth)-b.right-b.left:0),y:c?d-b.bottom+b.offset-(b.opposite?b.height:0):I(d-b.translate(e+m,null,null,f)-b.transB)};c.y=F(c.y,-1E5,1E5);u(this,"afterGetPosition",{pos:c});return c},getLabelPosition:function(c,e,A,f,b,a,d,h){var k=this.axis,l=k.transA,r=k.isLinked&&k.linkedParent?k.linkedParent.reversed:k.reversed,p=k.staggerLines,
g=k.tickRotCorr||{x:0,y:0},t=b.y,x=f||k.reserveSpaceDefault?0:-k.labelOffset*("center"===k.labelAlign?.5:1),L={};G(t)||(t=0===k.side?A.rotation?-8:-A.getBBox().height:2===k.side?g.y+8:Math.cos(A.rotation*m)*(g.y-A.getBBox(!1,0).height/2));c=c+b.x+x+g.x-(a&&f?a*l*(r?-1:1):0);e=e+t-(a&&!f?a*l*(r?1:-1):0);p&&(A=d/(h||1)%p,k.opposite&&(A=p-A-1),e+=k.labelOffset/p*A);L.x=c;L.y=Math.round(e);u(this,"afterGetLabelPosition",{pos:L,tickmarkOffset:a,index:d});return L},getMarkPath:function(c,e,m,f,b,a){return a.crispLine(["M",
c,e,"L",c+(b?0:-m),e+(b?m:0)],f)},renderGridLine:function(c,e,m){var f=this.axis,b=f.options,a=this.gridLine,d={},h=this.pos,k=this.type,l=B(this.tickmarkOffset,f.tickmarkOffset),r=f.chart.renderer,p=k?k+"Grid":"grid",g=b[p+"LineWidth"],t=b[p+"LineColor"];b=b[p+"LineDashStyle"];a||(f.chart.styledMode||(d.stroke=t,d["stroke-width"]=g,b&&(d.dashstyle=b)),k||(d.zIndex=1),c&&(e=0),this.gridLine=a=r.path().attr(d).addClass("highcharts-"+(k?k+"-":"")+"grid-line").add(f.gridGroup));if(a&&(m=f.getPlotLinePath({value:h+
l,lineWidth:a.strokeWidth()*m,force:"pass",old:c})))a[c||this.isNew?"attr":"animate"]({d:m,opacity:e})},renderMark:function(c,e,m){var f=this.axis,b=f.options,a=f.chart.renderer,d=this.type,h=d?d+"Tick":"tick",k=f.tickSize(h),l=this.mark,r=!l,p=c.x;c=c.y;var g=B(b[h+"Width"],!d&&f.isXAxis?1:0);b=b[h+"Color"];k&&(f.opposite&&(k[0]=-k[0]),r&&(this.mark=l=a.path().addClass("highcharts-"+(d?d+"-":"")+"tick").add(f.axisGroup),f.chart.styledMode||l.attr({stroke:b,"stroke-width":g})),l[r?"attr":"animate"]({d:this.getMarkPath(p,
c,k[0],l.strokeWidth()*m,f.horiz,a),opacity:e}))},renderLabel:function(c,e,m,f){var b=this.axis,a=b.horiz,d=b.options,h=this.label,k=d.labels,l=k.step;b=B(this.tickmarkOffset,b.tickmarkOffset);var y=!0,p=c.x;c=c.y;h&&q(p)&&(h.xy=c=this.getLabelPosition(p,c,h,a,k,b,f,l),this.isFirst&&!this.isLast&&!B(d.showFirstLabel,1)||this.isLast&&!this.isFirst&&!B(d.showLastLabel,1)?y=!1:!a||k.step||k.rotation||e||0===m||this.handleOverflow(c),l&&f%l&&(y=!1),y&&q(c.y)?(c.opacity=m,h[this.isNewLabel?"attr":"animate"](c),
this.isNewLabel=!1):(h.attr("y",-9999),this.isNewLabel=!0))},render:function(e,m,q){var f=this.axis,b=f.horiz,a=this.pos,d=B(this.tickmarkOffset,f.tickmarkOffset);a=this.getPosition(b,a,d,m);d=a.x;var h=a.y;f=b&&d===f.pos+f.len||!b&&h===f.pos?-1:1;q=B(q,1);this.isActive=!0;this.renderGridLine(m,q,f);this.renderMark(a,q,f);this.renderLabel(a,m,q,e);this.isNew=!1;c.fireEvent(this,"afterRender")},destroy:function(){H(this,this.axis)}}});M(J,"parts/Axis.js",[J["parts/Globals.js"],J["parts/Utilities.js"]],
function(c,e){var F=e.animObject,I=e.arrayMax,G=e.arrayMin,H=e.clamp,v=e.correctFloat,q=e.defined,C=e.destroyObjectProperties,B=e.extend,u=e.isArray,w=e.isNumber,m=e.isString,r=e.objectEach,D=e.pick,A=e.relativeLength,f=e.splat,b=e.syncTimeout,a=c.addEvent,d=c.color,h=c.defaultOptions,k=c.deg2rad,l=c.fireEvent,y=c.format,p=c.getMagnitude,g=c.merge,t=c.normalizeTickInterval,x=c.removeEvent,L=c.seriesTypes,E=c.Tick;e=function(){this.init.apply(this,arguments)};B(e.prototype,{defaultOptions:{dateTimeLabelFormats:{millisecond:{main:"%H:%M:%S.%L",
range:!1},second:{main:"%H:%M:%S",range:!1},minute:{main:"%H:%M",range:!1},hour:{main:"%H:%M",range:!1},day:{main:"%e. %b"},week:{main:"%e. %b"},month:{main:"%b '%y"},year:{main:"%Y"}},endOnTick:!1,labels:{enabled:!0,indentation:10,x:0,style:{color:"#666666",cursor:"default",fontSize:"11px"}},maxPadding:.01,minorTickLength:2,minorTickPosition:"outside",minPadding:.01,showEmpty:!0,startOfWeek:1,startOnTick:!1,tickLength:10,tickPixelInterval:100,tickmarkPlacement:"between",tickPosition:"outside",title:{align:"middle",
style:{color:"#666666"}},type:"linear",minorGridLineColor:"#f2f2f2",minorGridLineWidth:1,minorTickColor:"#999999",lineColor:"#ccd6eb",lineWidth:1,gridLineColor:"#e6e6e6",tickColor:"#ccd6eb"},defaultYAxisOptions:{endOnTick:!0,maxPadding:.05,minPadding:.05,tickPixelInterval:72,showLastLabel:!0,labels:{x:-8},startOnTick:!0,title:{rotation:270,text:"Values"},stackLabels:{allowOverlap:!1,enabled:!1,crop:!0,overflow:"justify",formatter:function(){var a=this.axis.chart.numberFormatter;return a(this.total,
-1)},style:{color:"#000000",fontSize:"11px",fontWeight:"bold",textOutline:"1px contrast"}},gridLineWidth:1,lineWidth:0},defaultLeftAxisOptions:{labels:{x:-15},title:{rotation:270}},defaultRightAxisOptions:{labels:{x:15},title:{rotation:90}},defaultBottomAxisOptions:{labels:{autoRotation:[-45],x:0},margin:15,title:{rotation:0}},defaultTopAxisOptions:{labels:{autoRotation:[-45],x:0},margin:15,title:{rotation:0}},init:function(b,d){var n=d.isX,g=this;g.chart=b;g.horiz=b.inverted&&!g.isZAxis?!n:n;g.isXAxis=
n;g.coll=g.coll||(n?"xAxis":"yAxis");l(this,"init",{userOptions:d});g.opposite=d.opposite;g.side=d.side||(g.horiz?g.opposite?0:2:g.opposite?1:3);g.setOptions(d);var z=this.options,h=z.type;g.labelFormatter=z.labels.formatter||g.defaultLabelFormatter;g.userOptions=d;g.minPixelPadding=0;g.reversed=z.reversed;g.visible=!1!==z.visible;g.zoomEnabled=!1!==z.zoomEnabled;g.hasNames="category"===h||!0===z.categories;g.categories=z.categories||g.hasNames;g.names||(g.names=[],g.names.keys={});g.plotLinesAndBandsGroups=
{};g.isLog="logarithmic"===h;g.isDatetimeAxis="datetime"===h;g.positiveValuesOnly=g.isLog&&!g.allowNegativeLog;g.isLinked=q(z.linkedTo);g.ticks={};g.labelEdge=[];g.minorTicks={};g.plotLinesAndBands=[];g.alternateBands={};g.len=0;g.minRange=g.userMinRange=z.minRange||z.maxZoom;g.range=z.range;g.offset=z.offset||0;g.stacks={};g.oldStacks={};g.stacksTouched=0;g.max=null;g.min=null;g.crosshair=D(z.crosshair,f(b.options.tooltip.crosshairs)[n?0:1],!1);d=g.options.events;-1===b.axes.indexOf(g)&&(n?b.axes.splice(b.xAxis.length,
0,g):b.axes.push(g),b[g.coll].push(g));g.series=g.series||[];b.inverted&&!g.isZAxis&&n&&"undefined"===typeof g.reversed&&(g.reversed=!0);r(d,function(b,d){c.isFunction(b)&&a(g,d,b)});g.lin2log=z.linearToLogConverter||g.lin2log;g.isLog&&(g.val2lin=g.log2lin,g.lin2val=g.lin2log);l(this,"afterInit")},setOptions:function(a){this.options=g(this.defaultOptions,"yAxis"===this.coll&&this.defaultYAxisOptions,[this.defaultTopAxisOptions,this.defaultRightAxisOptions,this.defaultBottomAxisOptions,this.defaultLeftAxisOptions][this.side],
g(h[this.coll],a));l(this,"afterSetOptions",{userOptions:a})},defaultLabelFormatter:function(){var a=this.axis,b=this.value,d=a.chart.time,g=a.categories,f=this.dateTimeLabelFormat,c=h.lang,t=c.numericSymbols;c=c.numericSymbolMagnitude||1E3;var l=t&&t.length,x=a.options.labels.format;a=a.isLog?Math.abs(b):a.tickInterval;var k=this.chart,p=k.numberFormatter;if(x)var e=y(x,this,k);else if(g)e=b;else if(f)e=d.dateFormat(f,b);else if(l&&1E3<=a)for(;l--&&"undefined"===typeof e;)d=Math.pow(c,l+1),a>=d&&
0===10*b%d&&null!==t[l]&&0!==b&&(e=p(b/d,-1)+t[l]);"undefined"===typeof e&&(e=1E4<=Math.abs(b)?p(b,-1):p(b,-1,void 0,""));return e},getSeriesExtremes:function(){var a=this,b=a.chart,d;l(this,"getSeriesExtremes",null,function(){a.hasVisibleSeries=!1;a.dataMin=a.dataMax=a.threshold=null;a.softThreshold=!a.isXAxis;a.buildStacks&&a.buildStacks();a.series.forEach(function(g){if(g.visible||!b.options.chart.ignoreHiddenSeries){var n=g.options,z=n.threshold;a.hasVisibleSeries=!0;a.positiveValuesOnly&&0>=
z&&(z=null);if(a.isXAxis){if(n=g.xData,n.length){d=g.getXExtremes(n);var f=d.min;var h=d.max;w(f)||f instanceof Date||(n=n.filter(w),d=g.getXExtremes(n),f=d.min,h=d.max);n.length&&(a.dataMin=Math.min(D(a.dataMin,f),f),a.dataMax=Math.max(D(a.dataMax,h),h))}}else if(g.getExtremes(),h=g.dataMax,f=g.dataMin,q(f)&&q(h)&&(a.dataMin=Math.min(D(a.dataMin,f),f),a.dataMax=Math.max(D(a.dataMax,h),h)),q(z)&&(a.threshold=z),!n.softThreshold||a.positiveValuesOnly)a.softThreshold=!1}})});l(this,"afterGetSeriesExtremes")},
translate:function(a,b,d,g,f,h){var n=this.linkedParent||this,z=1,c=0,t=g?n.oldTransA:n.transA;g=g?n.oldMin:n.min;var l=n.minPixelPadding;f=(n.isOrdinal||n.isBroken||n.isLog&&f)&&n.lin2val;t||(t=n.transA);d&&(z*=-1,c=n.len);n.reversed&&(z*=-1,c-=z*(n.sector||n.len));b?(a=(a*z+c-l)/t+g,f&&(a=n.lin2val(a))):(f&&(a=n.val2lin(a)),a=w(g)?z*(a-g)*t+c+z*l+(w(h)?t*h:0):void 0);return a},toPixels:function(a,b){return this.translate(a,!1,!this.horiz,null,!0)+(b?0:this.pos)},toValue:function(a,b){return this.translate(a-
(b?0:this.pos),!0,!this.horiz,null,!0)},getPlotLinePath:function(a){var b=this,d=b.chart,g=b.left,n=b.top,f=a.old,h=a.value,c=a.translatedValue,t=a.lineWidth,x=a.force,k,p,e,E,m=f&&d.oldChartHeight||d.chartHeight,L=f&&d.oldChartWidth||d.chartWidth,y,r=b.transB,q=function(a,b,d){if("pass"!==x&&a<b||a>d)x?a=H(a,b,d):y=!0;return a};a={value:h,lineWidth:t,old:f,force:x,acrossPanes:a.acrossPanes,translatedValue:c};l(this,"getPlotLinePath",a,function(a){c=D(c,b.translate(h,null,null,f));c=H(c,-1E5,1E5);
k=e=Math.round(c+r);p=E=Math.round(m-c-r);w(c)?b.horiz?(p=n,E=m-b.bottom,k=e=q(k,g,g+b.width)):(k=g,e=L-b.right,p=E=q(p,n,n+b.height)):(y=!0,x=!1);a.path=y&&!x?null:d.renderer.crispLine(["M",k,p,"L",e,E],t||1)});return a.path},getLinearTickPositions:function(a,b,d){var g=v(Math.floor(b/a)*a);d=v(Math.ceil(d/a)*a);var n=[],f;v(g+a)===g&&(f=20);if(this.single)return[b];for(b=g;b<=d;){n.push(b);b=v(b+a,f);if(b===z)break;var z=b}return n},getMinorTickInterval:function(){var a=this.options;return!0===
a.minorTicks?D(a.minorTickInterval,"auto"):!1===a.minorTicks?null:a.minorTickInterval},getMinorTickPositions:function(){var a=this,b=a.options,d=a.tickPositions,g=a.minorTickInterval,f=[],h=a.pointRangePadding||0,c=a.min-h;h=a.max+h;var t=h-c;if(t&&t/g<a.len/3)if(a.isLog)this.paddedTicks.forEach(function(b,d,n){d&&f.push.apply(f,a.getLogTickPositions(g,n[d-1],n[d],!0))});else if(a.isDatetimeAxis&&"auto"===this.getMinorTickInterval())f=f.concat(a.getTimeTicks(a.normalizeTimeTickInterval(g),c,h,b.startOfWeek));
else for(b=c+(d[0]-c)%g;b<=h&&b!==f[0];b+=g)f.push(b);0!==f.length&&a.trimTicks(f);return f},adjustForMinRange:function(){var a=this.options,b=this.min,d=this.max,g,f,h,c,t;this.isXAxis&&"undefined"===typeof this.minRange&&!this.isLog&&(q(a.min)||q(a.max)?this.minRange=null:(this.series.forEach(function(a){c=a.xData;for(f=t=a.xIncrement?1:c.length-1;0<f;f--)if(h=c[f]-c[f-1],"undefined"===typeof g||h<g)g=h}),this.minRange=Math.min(5*g,this.dataMax-this.dataMin)));if(d-b<this.minRange){var l=this.dataMax-
this.dataMin>=this.minRange;var x=this.minRange;var k=(x-d+b)/2;k=[b-k,D(a.min,b-k)];l&&(k[2]=this.isLog?this.log2lin(this.dataMin):this.dataMin);b=I(k);d=[b+x,D(a.max,b+x)];l&&(d[2]=this.isLog?this.log2lin(this.dataMax):this.dataMax);d=G(d);d-b<x&&(k[0]=d-x,k[1]=D(a.min,d-x),b=I(k))}this.min=b;this.max=d},getClosest:function(){var a;this.categories?a=1:this.series.forEach(function(b){var d=b.closestPointRange,g=b.visible||!b.chart.options.chart.ignoreHiddenSeries;!b.noSharedTooltip&&q(d)&&g&&(a=
q(a)?Math.min(a,d):d)});return a},nameToX:function(a){var b=u(this.categories),d=b?this.categories:this.names,g=a.options.x;a.series.requireSorting=!1;q(g)||(g=!1===this.options.uniqueNames?a.series.autoIncrement():b?d.indexOf(a.name):D(d.keys[a.name],-1));if(-1===g){if(!b)var n=d.length}else n=g;"undefined"!==typeof n&&(this.names[n]=a.name,this.names.keys[a.name]=n);return n},updateNames:function(){var a=this,b=this.names;0<b.length&&(Object.keys(b.keys).forEach(function(a){delete b.keys[a]}),b.length=
0,this.minRange=this.userMinRange,(this.series||[]).forEach(function(b){b.xIncrement=null;if(!b.points||b.isDirtyData)a.max=Math.max(a.max,b.xData.length-1),b.processData(),b.generatePoints();b.data.forEach(function(d,g){if(d&&d.options&&"undefined"!==typeof d.name){var n=a.nameToX(d);"undefined"!==typeof n&&n!==d.x&&(d.x=n,b.xData[g]=n)}})}))},setAxisTranslation:function(a){var b=this,d=b.max-b.min,g=b.axisPointRange||0,n=0,f=0,h=b.linkedParent,c=!!b.categories,t=b.transA,x=b.isXAxis;if(x||c||g){var k=
b.getClosest();h?(n=h.minPointOffset,f=h.pointRangePadding):b.series.forEach(function(a){var d=c?1:x?D(a.options.pointRange,k,0):b.axisPointRange||0,h=a.options.pointPlacement;g=Math.max(g,d);if(!b.single||c)a=L.xrange&&a instanceof L.xrange?!x:x,n=Math.max(n,a&&m(h)?0:d/2),f=Math.max(f,a&&"on"===h?0:d)});h=b.ordinalSlope&&k?b.ordinalSlope/k:1;b.minPointOffset=n*=h;b.pointRangePadding=f*=h;b.pointRange=Math.min(g,b.single&&c?1:d);x&&(b.closestPointRange=k)}a&&(b.oldTransA=t);b.translationSlope=b.transA=
t=b.staticScale||b.len/(d+f||1);b.transB=b.horiz?b.left:b.bottom;b.minPixelPadding=t*n;l(this,"afterSetAxisTranslation")},minFromRange:function(){return this.max-this.range},setTickInterval:function(a){var b=this,d=b.chart,g=b.options,n=b.isLog,f=b.isDatetimeAxis,h=b.isXAxis,x=b.isLinked,k=g.maxPadding,e=g.minPadding,E=g.tickInterval,m=g.tickPixelInterval,L=b.categories,y=w(b.threshold)?b.threshold:null,r=b.softThreshold;f||L||x||this.getTickAmount();var A=D(b.userMin,g.min);var u=D(b.userMax,g.max);
if(x){b.linkedParent=d[b.coll][g.linkedTo];var C=b.linkedParent.getExtremes();b.min=D(C.min,C.dataMin);b.max=D(C.max,C.dataMax);g.type!==b.linkedParent.options.type&&c.error(11,1,d)}else{if(!r&&q(y))if(b.dataMin>=y)C=y,e=0;else if(b.dataMax<=y){var B=y;k=0}b.min=D(A,C,b.dataMin);b.max=D(u,B,b.dataMax)}n&&(b.positiveValuesOnly&&!a&&0>=Math.min(b.min,D(b.dataMin,b.min))&&c.error(10,1,d),b.min=v(b.log2lin(b.min),16),b.max=v(b.log2lin(b.max),16));b.range&&q(b.max)&&(b.userMin=b.min=A=Math.max(b.dataMin,
b.minFromRange()),b.userMax=u=b.max,b.range=null);l(b,"foundExtremes");b.beforePadding&&b.beforePadding();b.adjustForMinRange();!(L||b.axisPointRange||b.usePercentage||x)&&q(b.min)&&q(b.max)&&(d=b.max-b.min)&&(!q(A)&&e&&(b.min-=d*e),!q(u)&&k&&(b.max+=d*k));w(b.userMin)||(w(g.softMin)&&g.softMin<b.min&&(b.min=A=g.softMin),w(g.floor)&&(b.min=Math.max(b.min,g.floor)));w(b.userMax)||(w(g.softMax)&&g.softMax>b.max&&(b.max=u=g.softMax),w(g.ceiling)&&(b.max=Math.min(b.max,g.ceiling)));r&&q(b.dataMin)&&(y=
y||0,!q(A)&&b.min<y&&b.dataMin>=y?b.min=b.options.minRange?Math.min(y,b.max-b.minRange):y:!q(u)&&b.max>y&&b.dataMax<=y&&(b.max=b.options.minRange?Math.max(y,b.min+b.minRange):y));b.tickInterval=b.min===b.max||"undefined"===typeof b.min||"undefined"===typeof b.max?1:x&&!E&&m===b.linkedParent.options.tickPixelInterval?E=b.linkedParent.tickInterval:D(E,this.tickAmount?(b.max-b.min)/Math.max(this.tickAmount-1,1):void 0,L?1:(b.max-b.min)*m/Math.max(b.len,m));h&&!a&&b.series.forEach(function(a){a.processData(b.min!==
b.oldMin||b.max!==b.oldMax)});b.setAxisTranslation(!0);b.beforeSetTickPositions&&b.beforeSetTickPositions();b.postProcessTickInterval&&(b.tickInterval=b.postProcessTickInterval(b.tickInterval));b.pointRange&&!E&&(b.tickInterval=Math.max(b.pointRange,b.tickInterval));a=D(g.minTickInterval,b.isDatetimeAxis&&b.closestPointRange);!E&&b.tickInterval<a&&(b.tickInterval=a);f||n||E||(b.tickInterval=t(b.tickInterval,null,p(b.tickInterval),D(g.allowDecimals,!(.5<b.tickInterval&&5>b.tickInterval&&1E3<b.max&&
9999>b.max)),!!this.tickAmount));this.tickAmount||(b.tickInterval=b.unsquish());this.setTickPositions()},setTickPositions:function(){var a=this.options,b=a.tickPositions;var d=this.getMinorTickInterval();var g=a.tickPositioner,f=a.startOnTick,h=a.endOnTick;this.tickmarkOffset=this.categories&&"between"===a.tickmarkPlacement&&1===this.tickInterval?.5:0;this.minorTickInterval="auto"===d&&this.tickInterval?this.tickInterval/5:d;this.single=this.min===this.max&&q(this.min)&&!this.tickAmount&&(parseInt(this.min,
10)===this.min||!1!==a.allowDecimals);this.tickPositions=d=b&&b.slice();!d&&(!this.ordinalPositions&&(this.max-this.min)/this.tickInterval>Math.max(2*this.len,200)?(d=[this.min,this.max],c.error(19,!1,this.chart)):d=this.isDatetimeAxis?this.getTimeTicks(this.normalizeTimeTickInterval(this.tickInterval,a.units),this.min,this.max,a.startOfWeek,this.ordinalPositions,this.closestPointRange,!0):this.isLog?this.getLogTickPositions(this.tickInterval,this.min,this.max):this.getLinearTickPositions(this.tickInterval,
this.min,this.max),d.length>this.len&&(d=[d[0],d.pop()],d[0]===d[1]&&(d.length=1)),this.tickPositions=d,g&&(g=g.apply(this,[this.min,this.max])))&&(this.tickPositions=d=g);this.paddedTicks=d.slice(0);this.trimTicks(d,f,h);this.isLinked||(this.single&&2>d.length&&!this.categories&&(this.min-=.5,this.max+=.5),b||g||this.adjustTickAmount());l(this,"afterSetTickPositions")},trimTicks:function(a,b,d){var g=a[0],n=a[a.length-1],f=this.minPointOffset||0;l(this,"trimTicks");if(!this.isLinked){if(b&&-Infinity!==
g)this.min=g;else for(;this.min-f>a[0];)a.shift();if(d)this.max=n;else for(;this.max+f<a[a.length-1];)a.pop();0===a.length&&q(g)&&!this.options.tickPositions&&a.push((n+g)/2)}},alignToOthers:function(){var a={},b,d=this.options;!1===this.chart.options.chart.alignTicks||!1===d.alignTicks||!1===d.startOnTick||!1===d.endOnTick||this.isLog||this.chart[this.coll].forEach(function(d){var g=d.options;g=[d.horiz?g.left:g.top,g.width,g.height,g.pane].join();d.series.length&&(a[g]?b=!0:a[g]=1)});return b},
getTickAmount:function(){var a=this.options,b=a.tickAmount,d=a.tickPixelInterval;!q(a.tickInterval)&&this.len<d&&!this.isRadial&&!this.isLog&&a.startOnTick&&a.endOnTick&&(b=2);!b&&this.alignToOthers()&&(b=Math.ceil(this.len/d)+1);4>b&&(this.finalTickAmt=b,b=5);this.tickAmount=b},adjustTickAmount:function(){var a=this.options,b=this.tickInterval,d=this.tickPositions,g=this.tickAmount,f=this.finalTickAmt,h=d&&d.length,c=D(this.threshold,this.softThreshold?0:null),t;if(this.hasData()){if(h<g){for(t=
this.min;d.length<g;)d.length%2||t===c?d.push(v(d[d.length-1]+b)):d.unshift(v(d[0]-b));this.transA*=(h-1)/(g-1);this.min=a.startOnTick?d[0]:Math.min(this.min,d[0]);this.max=a.endOnTick?d[d.length-1]:Math.max(this.max,d[d.length-1])}else h>g&&(this.tickInterval*=2,this.setTickPositions());if(q(f)){for(b=a=d.length;b--;)(3===f&&1===b%2||2>=f&&0<b&&b<a-1)&&d.splice(b,1);this.finalTickAmt=void 0}}},setScale:function(){var a=this.series.some(function(a){return a.isDirtyData||a.isDirty||a.xAxis&&a.xAxis.isDirty}),
b;this.oldMin=this.min;this.oldMax=this.max;this.oldAxisLength=this.len;this.setAxisSize();(b=this.len!==this.oldAxisLength)||a||this.isLinked||this.forceRedraw||this.userMin!==this.oldUserMin||this.userMax!==this.oldUserMax||this.alignToOthers()?(this.resetStacks&&this.resetStacks(),this.forceRedraw=!1,this.getSeriesExtremes(),this.setTickInterval(),this.oldUserMin=this.userMin,this.oldUserMax=this.userMax,this.isDirty||(this.isDirty=b||this.min!==this.oldMin||this.max!==this.oldMax)):this.cleanStacks&&
this.cleanStacks();l(this,"afterSetScale")},setExtremes:function(a,b,d,g,f){var n=this,h=n.chart;d=D(d,!0);n.series.forEach(function(a){delete a.kdTree});f=B(f,{min:a,max:b});l(n,"setExtremes",f,function(){n.userMin=a;n.userMax=b;n.eventArgs=f;d&&h.redraw(g)})},zoom:function(a,b){var d=this.dataMin,g=this.dataMax,n=this.options,f=Math.min(d,D(n.min,d)),h=Math.max(g,D(n.max,g));a={newMin:a,newMax:b};l(this,"zoom",a,function(a){var b=a.newMin,n=a.newMax;if(b!==this.min||n!==this.max)this.allowZoomOutside||
(q(d)&&(b<f&&(b=f),b>h&&(b=h)),q(g)&&(n<f&&(n=f),n>h&&(n=h))),this.displayBtn="undefined"!==typeof b||"undefined"!==typeof n,this.setExtremes(b,n,!1,void 0,{trigger:"zoom"});a.zoomed=!0});return a.zoomed},setAxisSize:function(){var a=this.chart,b=this.options,d=b.offsets||[0,0,0,0],g=this.horiz,f=this.width=Math.round(A(D(b.width,a.plotWidth-d[3]+d[1]),a.plotWidth)),h=this.height=Math.round(A(D(b.height,a.plotHeight-d[0]+d[2]),a.plotHeight)),c=this.top=Math.round(A(D(b.top,a.plotTop+d[0]),a.plotHeight,
a.plotTop));b=this.left=Math.round(A(D(b.left,a.plotLeft+d[3]),a.plotWidth,a.plotLeft));this.bottom=a.chartHeight-h-c;this.right=a.chartWidth-f-b;this.len=Math.max(g?f:h,0);this.pos=g?b:c},getExtremes:function(){var a=this.isLog;return{min:a?v(this.lin2log(this.min)):this.min,max:a?v(this.lin2log(this.max)):this.max,dataMin:this.dataMin,dataMax:this.dataMax,userMin:this.userMin,userMax:this.userMax}},getThreshold:function(a){var b=this.isLog,d=b?this.lin2log(this.min):this.min;b=b?this.lin2log(this.max):
this.max;null===a||-Infinity===a?a=d:Infinity===a?a=b:d>a?a=d:b<a&&(a=b);return this.translate(a,0,1,0,1)},autoLabelAlign:function(a){var b=(D(a,0)-90*this.side+720)%360;a={align:"center"};l(this,"autoLabelAlign",a,function(a){15<b&&165>b?a.align="right":195<b&&345>b&&(a.align="left")});return a.align},tickSize:function(a){var b=this.options,d=b[a+"Length"],g=D(b[a+"Width"],"tick"===a&&this.isXAxis&&!this.categories?1:0);if(g&&d){"inside"===b[a+"Position"]&&(d=-d);var f=[d,g]}a={tickSize:f};l(this,
"afterTickSize",a);return a.tickSize},labelMetrics:function(){var a=this.tickPositions&&this.tickPositions[0]||0;return this.chart.renderer.fontMetrics(this.options.labels.style&&this.options.labels.style.fontSize,this.ticks[a]&&this.ticks[a].label)},unsquish:function(){var a=this.options.labels,b=this.horiz,d=this.tickInterval,g=d,f=this.len/(((this.categories?1:0)+this.max-this.min)/d),h,c=a.rotation,t=this.labelMetrics(),l,x=Number.MAX_VALUE,p,e=this.max-this.min,E=function(a){var b=a/(f||1);b=
1<b?Math.ceil(b):1;b*d>e&&Infinity!==a&&Infinity!==f&&e&&(b=Math.ceil(e/d));return v(b*d)};b?(p=!a.staggerLines&&!a.step&&(q(c)?[c]:f<D(a.autoRotationLimit,80)&&a.autoRotation))&&p.forEach(function(a){if(a===c||a&&-90<=a&&90>=a){l=E(Math.abs(t.h/Math.sin(k*a)));var b=l+Math.abs(a/360);b<x&&(x=b,h=a,g=l)}}):a.step||(g=E(t.h));this.autoRotation=p;this.labelRotation=D(h,c);return g},getSlotWidth:function(a){var b=this.chart,d=this.horiz,g=this.options.labels,f=Math.max(this.tickPositions.length-(this.categories?
0:1),1),n=b.margin[3];return a&&a.slotWidth||d&&2>(g.step||0)&&!g.rotation&&(this.staggerLines||1)*this.len/f||!d&&(g.style&&parseInt(g.style.width,10)||n&&n-b.spacing[3]||.33*b.chartWidth)},renderUnsquish:function(){var a=this.chart,b=a.renderer,d=this.tickPositions,g=this.ticks,f=this.options.labels,h=f&&f.style||{},c=this.horiz,t=this.getSlotWidth(),l=Math.max(1,Math.round(t-2*(f.padding||5))),x={},k=this.labelMetrics(),p=f.style&&f.style.textOverflow,e=0;m(f.rotation)||(x.rotation=f.rotation||
0);d.forEach(function(a){a=g[a];a.movedLabel&&a.replaceMovedLabel();a&&a.label&&a.label.textPxLength>e&&(e=a.label.textPxLength)});this.maxLabelLength=e;if(this.autoRotation)e>l&&e>k.h?x.rotation=this.labelRotation:this.labelRotation=0;else if(t){var E=l;if(!p){var L="clip";for(l=d.length;!c&&l--;){var y=d[l];if(y=g[y].label)y.styles&&"ellipsis"===y.styles.textOverflow?y.css({textOverflow:"clip"}):y.textPxLength>t&&y.css({width:t+"px"}),y.getBBox().height>this.len/d.length-(k.h-k.f)&&(y.specificTextOverflow=
"ellipsis")}}}x.rotation&&(E=e>.5*a.chartHeight?.33*a.chartHeight:e,p||(L="ellipsis"));if(this.labelAlign=f.align||this.autoLabelAlign(this.labelRotation))x.align=this.labelAlign;d.forEach(function(a){var b=(a=g[a])&&a.label,d=h.width,f={};b&&(b.attr(x),a.shortenLabel?a.shortenLabel():E&&!d&&"nowrap"!==h.whiteSpace&&(E<b.textPxLength||"SPAN"===b.element.tagName)?(f.width=E,p||(f.textOverflow=b.specificTextOverflow||L),b.css(f)):b.styles&&b.styles.width&&!f.width&&!d&&b.css({width:null}),delete b.specificTextOverflow,
a.rotation=x.rotation)},this);this.tickRotCorr=b.rotCorr(k.b,this.labelRotation||0,0!==this.side)},hasData:function(){return this.series.some(function(a){return a.hasData()})||this.options.showEmpty&&q(this.min)&&q(this.max)},addTitle:function(a){var b=this.chart.renderer,d=this.horiz,f=this.opposite,h=this.options.title,n,c=this.chart.styledMode;this.axisTitle||((n=h.textAlign)||(n=(d?{low:"left",middle:"center",high:"right"}:{low:f?"right":"left",middle:"center",high:f?"left":"right"})[h.align]),
this.axisTitle=b.text(h.text,0,0,h.useHTML).attr({zIndex:7,rotation:h.rotation||0,align:n}).addClass("highcharts-axis-title"),c||this.axisTitle.css(g(h.style)),this.axisTitle.add(this.axisGroup),this.axisTitle.isNew=!0);c||h.style.width||this.isRadial||this.axisTitle.css({width:this.len});this.axisTitle[a?"show":"hide"](a)},generateTick:function(a){var b=this.ticks;b[a]?b[a].addLabel():b[a]=new E(this,a)},getOffset:function(){var a=this,b=a.chart,d=b.renderer,g=a.options,f=a.tickPositions,h=a.ticks,
c=a.horiz,t=a.side,x=b.inverted&&!a.isZAxis?[1,0,3,2][t]:t,k,p=0,e=0,E=g.title,m=g.labels,L=0,y=b.axisOffset;b=b.clipOffset;var A=[-1,1,1,-1][t],u=g.className,v=a.axisParent;var w=a.hasData();a.showAxis=k=w||D(g.showEmpty,!0);a.staggerLines=a.horiz&&m.staggerLines;a.axisGroup||(a.gridGroup=d.g("grid").attr({zIndex:g.gridZIndex||1}).addClass("highcharts-"+this.coll.toLowerCase()+"-grid "+(u||"")).add(v),a.axisGroup=d.g("axis").attr({zIndex:g.zIndex||2}).addClass("highcharts-"+this.coll.toLowerCase()+
" "+(u||"")).add(v),a.labelGroup=d.g("axis-labels").attr({zIndex:m.zIndex||7}).addClass("highcharts-"+a.coll.toLowerCase()+"-labels "+(u||"")).add(v));w||a.isLinked?(f.forEach(function(b,d){a.generateTick(b,d)}),a.renderUnsquish(),a.reserveSpaceDefault=0===t||2===t||{1:"left",3:"right"}[t]===a.labelAlign,D(m.reserveSpace,"center"===a.labelAlign?!0:null,a.reserveSpaceDefault)&&f.forEach(function(a){L=Math.max(h[a].getLabelSize(),L)}),a.staggerLines&&(L*=a.staggerLines),a.labelOffset=L*(a.opposite?
-1:1)):r(h,function(a,b){a.destroy();delete h[b]});if(E&&E.text&&!1!==E.enabled&&(a.addTitle(k),k&&!1!==E.reserveSpace)){a.titleOffset=p=a.axisTitle.getBBox()[c?"height":"width"];var C=E.offset;e=q(C)?0:D(E.margin,c?5:10)}a.renderLine();a.offset=A*D(g.offset,y[t]?y[t]+(g.margin||0):0);a.tickRotCorr=a.tickRotCorr||{x:0,y:0};d=0===t?-a.labelMetrics().h:2===t?a.tickRotCorr.y:0;e=Math.abs(L)+e;L&&(e=e-d+A*(c?D(m.y,a.tickRotCorr.y+8*A):m.x));a.axisTitleMargin=D(C,e);a.getMaxLabelDimensions&&(a.maxLabelDimensions=
a.getMaxLabelDimensions(h,f));c=this.tickSize("tick");y[t]=Math.max(y[t],a.axisTitleMargin+p+A*a.offset,e,f&&f.length&&c?c[0]+A*a.offset:0);g=g.offset?0:2*Math.floor(a.axisLine.strokeWidth()/2);b[x]=Math.max(b[x],g);l(this,"afterGetOffset")},getLinePath:function(a){var b=this.chart,d=this.opposite,g=this.offset,f=this.horiz,h=this.left+(d?this.width:0)+g;g=b.chartHeight-this.bottom-(d?this.height:0)+g;d&&(a*=-1);return b.renderer.crispLine(["M",f?this.left:h,f?g:this.top,"L",f?b.chartWidth-this.right:
h,f?g:b.chartHeight-this.bottom],a)},renderLine:function(){this.axisLine||(this.axisLine=this.chart.renderer.path().addClass("highcharts-axis-line").add(this.axisGroup),this.chart.styledMode||this.axisLine.attr({stroke:this.options.lineColor,"stroke-width":this.options.lineWidth,zIndex:7}))},getTitlePosition:function(){var a=this.horiz,b=this.left,d=this.top,g=this.len,f=this.options.title,h=a?b:d,c=this.opposite,t=this.offset,x=f.x||0,k=f.y||0,p=this.axisTitle,e=this.chart.renderer.fontMetrics(f.style&&
f.style.fontSize,p);p=Math.max(p.getBBox(null,0).height-e.h-1,0);g={low:h+(a?0:g),middle:h+g/2,high:h+(a?g:0)}[f.align];b=(a?d+this.height:b)+(a?1:-1)*(c?-1:1)*this.axisTitleMargin+[-p,p,e.f,-p][this.side];a={x:a?g+x:b+(c?this.width:0)+t+x,y:a?b+k-(c?this.height:0)+t:g+k};l(this,"afterGetTitlePosition",{titlePosition:a});return a},renderMinorTick:function(a){var b=this.chart.hasRendered&&w(this.oldMin),d=this.minorTicks;d[a]||(d[a]=new E(this,a,"minor"));b&&d[a].isNew&&d[a].render(null,!0);d[a].render(null,
!1,1)},renderTick:function(a,b){var d=this.isLinked,g=this.ticks,f=this.chart.hasRendered&&w(this.oldMin);if(!d||a>=this.min&&a<=this.max)g[a]||(g[a]=new E(this,a)),f&&g[a].isNew&&g[a].render(b,!0,-1),g[a].render(b)},render:function(){var a=this,d=a.chart,g=a.options,f=a.isLog,h=a.isLinked,t=a.tickPositions,x=a.axisTitle,k=a.ticks,p=a.minorTicks,e=a.alternateBands,m=g.stackLabels,L=g.alternateGridColor,y=a.tickmarkOffset,q=a.axisLine,A=a.showAxis,u=F(d.renderer.globalAnimation),D,v;a.labelEdge.length=
0;a.overlap=!1;[k,p,e].forEach(function(a){r(a,function(a){a.isActive=!1})});if(a.hasData()||h)a.minorTickInterval&&!a.categories&&a.getMinorTickPositions().forEach(function(b){a.renderMinorTick(b)}),t.length&&(t.forEach(function(b,d){a.renderTick(b,d)}),y&&(0===a.min||a.single)&&(k[-1]||(k[-1]=new E(a,-1,null,!0)),k[-1].render(-1))),L&&t.forEach(function(b,g){v="undefined"!==typeof t[g+1]?t[g+1]+y:a.max-y;0===g%2&&b<a.max&&v<=a.max+(d.polar?-y:y)&&(e[b]||(e[b]=new c.PlotLineOrBand(a)),D=b+y,e[b].options=
{from:f?a.lin2log(D):D,to:f?a.lin2log(v):v,color:L},e[b].render(),e[b].isActive=!0)}),a._addedPlotLB||((g.plotLines||[]).concat(g.plotBands||[]).forEach(function(b){a.addPlotBandOrLine(b)}),a._addedPlotLB=!0);[k,p,e].forEach(function(a){var g,f=[],h=u.duration;r(a,function(a,b){a.isActive||(a.render(b,!1,0),a.isActive=!1,f.push(b))});b(function(){for(g=f.length;g--;)a[f[g]]&&!a[f[g]].isActive&&(a[f[g]].destroy(),delete a[f[g]])},a!==e&&d.hasRendered&&h?h:0)});q&&(q[q.isPlaced?"animate":"attr"]({d:this.getLinePath(q.strokeWidth())}),
q.isPlaced=!0,q[A?"show":"hide"](A));x&&A&&(g=a.getTitlePosition(),w(g.y)?(x[x.isNew?"attr":"animate"](g),x.isNew=!1):(x.attr("y",-9999),x.isNew=!0));m&&m.enabled&&a.renderStackTotals();a.isDirty=!1;l(this,"afterRender")},redraw:function(){this.visible&&(this.render(),this.plotLinesAndBands.forEach(function(a){a.render()}));this.series.forEach(function(a){a.isDirty=!0})},keepProps:"extKey hcEvents names series userMax userMin".split(" "),destroy:function(a){var b=this,d=b.stacks,g=b.plotLinesAndBands,
f;l(this,"destroy",{keepEvents:a});a||x(b);r(d,function(a,b){C(a);d[b]=null});[b.ticks,b.minorTicks,b.alternateBands].forEach(function(a){C(a)});if(g)for(a=g.length;a--;)g[a].destroy();"stackTotalGroup axisLine axisTitle axisGroup gridGroup labelGroup cross scrollbar".split(" ").forEach(function(a){b[a]&&(b[a]=b[a].destroy())});for(f in b.plotLinesAndBandsGroups)b.plotLinesAndBandsGroups[f]=b.plotLinesAndBandsGroups[f].destroy();r(b,function(a,d){-1===b.keepProps.indexOf(d)&&delete b[d]})},drawCrosshair:function(a,
b){var g=this.crosshair,f=D(g.snap,!0),h,c=this.cross;l(this,"drawCrosshair",{e:a,point:b});a||(a=this.cross&&this.cross.e);if(this.crosshair&&!1!==(q(b)||!f)){f?q(b)&&(h=D("colorAxis"!==this.coll?b.crosshairPos:null,this.isXAxis?b.plotX:this.len-b.plotY)):h=a&&(this.horiz?a.chartX-this.pos:this.len-a.chartY+this.pos);if(q(h)){var t={value:b&&(this.isXAxis?b.x:D(b.stackY,b.y)),translatedValue:h};this.chart.polar&&B(t,{isCrosshair:!0,chartX:a&&a.chartX,chartY:a&&a.chartY,point:b});t=this.getPlotLinePath(t)||
null}if(!q(t)){this.hideCrosshair();return}f=this.categories&&!this.isRadial;c||(this.cross=c=this.chart.renderer.path().addClass("highcharts-crosshair highcharts-crosshair-"+(f?"category ":"thin ")+g.className).attr({zIndex:D(g.zIndex,2)}).add(),this.chart.styledMode||(c.attr({stroke:g.color||(f?d("#ccd6eb").setOpacity(.25).get():"#cccccc"),"stroke-width":D(g.width,1)}).css({"pointer-events":"none"}),g.dashStyle&&c.attr({dashstyle:g.dashStyle})));c.show().attr({d:t});f&&!g.width&&c.attr({"stroke-width":this.transA});
this.cross.e=a}else this.hideCrosshair();l(this,"afterDrawCrosshair",{e:a,point:b})},hideCrosshair:function(){this.cross&&this.cross.hide();l(this,"afterHideCrosshair")}});return c.Axis=e});M(J,"parts/DateTimeAxis.js",[J["parts/Globals.js"]],function(c){var e=c.Axis,F=c.getMagnitude,I=c.normalizeTickInterval,G=c.timeUnits;e.prototype.getTimeTicks=function(){return this.chart.time.getTimeTicks.apply(this.chart.time,arguments)};e.prototype.normalizeTimeTickInterval=function(c,e){var q=e||[["millisecond",
[1,2,5,10,20,25,50,100,200,500]],["second",[1,2,5,10,15,30]],["minute",[1,2,5,10,15,30]],["hour",[1,2,3,4,6,8,12]],["day",[1,2]],["week",[1,2]],["month",[1,2,3,4,6]],["year",null]];e=q[q.length-1];var v=G[e[0]],B=e[1],u;for(u=0;u<q.length&&!(e=q[u],v=G[e[0]],B=e[1],q[u+1]&&c<=(v*B[B.length-1]+G[q[u+1][0]])/2);u++);v===G.year&&c<5*v&&(B=[1,2,5]);c=I(c/v,B,"year"===e[0]?Math.max(F(c/v),1):1);return{unitRange:v,count:c,unitName:e[0]}}});M(J,"parts/LogarithmicAxis.js",[J["parts/Globals.js"],J["parts/Utilities.js"]],
function(c,e){var F=e.pick;e=c.Axis;var I=c.getMagnitude,G=c.normalizeTickInterval;e.prototype.getLogTickPositions=function(c,e,q,C){var v=this.options,u=this.len,w=[];C||(this._minorAutoInterval=null);if(.5<=c)c=Math.round(c),w=this.getLinearTickPositions(c,e,q);else if(.08<=c){u=Math.floor(e);var m,r;for(v=.3<c?[1,2,4]:.15<c?[1,2,4,6,8]:[1,2,3,4,5,6,7,8,9];u<q+1&&!r;u++){var D=v.length;for(m=0;m<D&&!r;m++){var A=this.log2lin(this.lin2log(u)*v[m]);A>e&&(!C||f<=q)&&"undefined"!==typeof f&&w.push(f);
f>q&&(r=!0);var f=A}}}else e=this.lin2log(e),q=this.lin2log(q),c=C?this.getMinorTickInterval():v.tickInterval,c=F("auto"===c?null:c,this._minorAutoInterval,v.tickPixelInterval/(C?5:1)*(q-e)/((C?u/this.tickPositions.length:u)||1)),c=G(c,null,I(c)),w=this.getLinearTickPositions(c,e,q).map(this.log2lin),C||(this._minorAutoInterval=c/5);C||(this.tickInterval=c);return w};e.prototype.log2lin=function(c){return Math.log(c)/Math.LN10};e.prototype.lin2log=function(c){return Math.pow(10,c)}});M(J,"parts/PlotLineOrBand.js",
[J["parts/Globals.js"],J["parts/Axis.js"],J["parts/Utilities.js"]],function(c,e,F){var I=F.arrayMax,G=F.arrayMin,H=F.defined,v=F.destroyObjectProperties,q=F.erase,C=F.extend,B=F.objectEach,u=F.pick,w=c.merge;c.PlotLineOrBand=function(c,e){this.axis=c;e&&(this.options=e,this.id=e.id)};c.PlotLineOrBand.prototype={render:function(){c.fireEvent(this,"render");var e=this,r=e.axis,q=r.horiz,A=e.options,f=A.label,b=e.label,a=A.to,d=A.from,h=A.value,k=H(d)&&H(a),l=H(h),y=e.svgElem,p=!y,g=[],t=A.color,x=u(A.zIndex,
0),L=A.events;g={"class":"highcharts-plot-"+(k?"band ":"line ")+(A.className||"")};var E={},n=r.chart.renderer,z=k?"bands":"lines";r.isLog&&(d=r.log2lin(d),a=r.log2lin(a),h=r.log2lin(h));r.chart.styledMode||(l?(g.stroke=t||"#999999",g["stroke-width"]=u(A.width,1),A.dashStyle&&(g.dashstyle=A.dashStyle)):k&&(g.fill=t||"#e6ebf5",A.borderWidth&&(g.stroke=A.borderColor,g["stroke-width"]=A.borderWidth)));E.zIndex=x;z+="-"+x;(t=r.plotLinesAndBandsGroups[z])||(r.plotLinesAndBandsGroups[z]=t=n.g("plot-"+z).attr(E).add());
p&&(e.svgElem=y=n.path().attr(g).add(t));if(l)g=r.getPlotLinePath({value:h,lineWidth:y.strokeWidth(),acrossPanes:A.acrossPanes});else if(k)g=r.getPlotBandPath(d,a,A);else return;(p||!y.d)&&g&&g.length?(y.attr({d:g}),L&&B(L,function(a,b){y.on(b,function(a){L[b].apply(e,[a])})})):y&&(g?(y.show(!0),y.animate({d:g})):y.d&&(y.hide(),b&&(e.label=b=b.destroy())));f&&(H(f.text)||H(f.formatter))&&g&&g.length&&0<r.width&&0<r.height&&!g.isFlat?(f=w({align:q&&k&&"center",x:q?!k&&4:10,verticalAlign:!q&&k&&"middle",
y:q?k?16:10:k?6:-4,rotation:q&&!k&&90},f),this.renderLabel(f,g,k,x)):b&&b.hide();return e},renderLabel:function(c,e,q,A){var f=this.label,b=this.axis.chart.renderer;f||(f={align:c.textAlign||c.align,rotation:c.rotation,"class":"highcharts-plot-"+(q?"band":"line")+"-label "+(c.className||"")},f.zIndex=A,A=this.getLabelText(c),this.label=f=b.text(A,0,0,c.useHTML).attr(f).add(),this.axis.chart.styledMode||f.css(c.style));b=e.xBounds||[e[1],e[4],q?e[6]:e[1]];e=e.yBounds||[e[2],e[5],q?e[7]:e[2]];q=G(b);
A=G(e);f.align(c,!1,{x:q,y:A,width:I(b)-q,height:I(e)-A});f.show(!0)},getLabelText:function(c){return H(c.formatter)?c.formatter.call(this):c.text},destroy:function(){q(this.axis.plotLinesAndBands,this);delete this.axis;v(this)}};C(e.prototype,{getPlotBandPath:function(c,e){var m=this.getPlotLinePath({value:e,force:!0,acrossPanes:this.options.acrossPanes}),r=this.getPlotLinePath({value:c,force:!0,acrossPanes:this.options.acrossPanes}),f=[],b=this.horiz,a=1;c=c<this.min&&e<this.min||c>this.max&&e>
this.max;if(r&&m){if(c){var d=r.toString()===m.toString();a=0}for(c=0;c<r.length;c+=6)b&&m[c+1]===r[c+1]?(m[c+1]+=a,m[c+4]+=a):b||m[c+2]!==r[c+2]||(m[c+2]+=a,m[c+5]+=a),f.push("M",r[c+1],r[c+2],"L",r[c+4],r[c+5],m[c+4],m[c+5],m[c+1],m[c+2],"z"),f.isFlat=d}return f},addPlotBand:function(c){return this.addPlotBandOrLine(c,"plotBands")},addPlotLine:function(c){return this.addPlotBandOrLine(c,"plotLines")},addPlotBandOrLine:function(e,r){var m=(new c.PlotLineOrBand(this,e)).render(),q=this.userOptions;
if(m){if(r){var f=q[r]||[];f.push(e);q[r]=f}this.plotLinesAndBands.push(m)}return m},removePlotBandOrLine:function(c){for(var e=this.plotLinesAndBands,m=this.options,A=this.userOptions,f=e.length;f--;)e[f].id===c&&e[f].destroy();[m.plotLines||[],A.plotLines||[],m.plotBands||[],A.plotBands||[]].forEach(function(b){for(f=b.length;f--;)b[f].id===c&&q(b,b[f])})},removePlotBand:function(c){this.removePlotBandOrLine(c)},removePlotLine:function(c){this.removePlotBandOrLine(c)}})});M(J,"parts/Tooltip.js",
[J["parts/Globals.js"],J["parts/Utilities.js"]],function(c,e){var F=e.clamp,I=e.defined,G=e.discardElement,H=e.extend,v=e.isNumber,q=e.isString,C=e.pick,B=e.splat,u=e.syncTimeout;"";var w=c.doc,m=c.format,r=c.merge,D=c.timeUnits;c.Tooltip=function(){this.init.apply(this,arguments)};c.Tooltip.prototype={init:function(c,f){this.chart=c;this.options=f;this.crosshairs=[];this.now={x:0,y:0};this.isHidden=!0;this.split=f.split&&!c.inverted&&!c.polar;this.shared=f.shared||this.split;this.outside=C(f.outside,
!(!c.scrollablePixelsX&&!c.scrollablePixelsY))},cleanSplit:function(c){this.chart.series.forEach(function(f){var b=f&&f.tt;b&&(!b.isActive||c?f.tt=b.destroy():b.isActive=!1)})},applyFilter:function(){var c=this.chart;c.renderer.definition({tagName:"filter",id:"drop-shadow-"+c.index,opacity:.5,children:[{tagName:"feGaussianBlur","in":"SourceAlpha",stdDeviation:1},{tagName:"feOffset",dx:1,dy:1},{tagName:"feComponentTransfer",children:[{tagName:"feFuncA",type:"linear",slope:.3}]},{tagName:"feMerge",
children:[{tagName:"feMergeNode"},{tagName:"feMergeNode","in":"SourceGraphic"}]}]});c.renderer.definition({tagName:"style",textContent:".highcharts-tooltip-"+c.index+"{filter:url(#drop-shadow-"+c.index+")}"})},getLabel:function(){var e=this,f=this.chart.renderer,b=this.chart.styledMode,a=this.options,d="tooltip"+(I(a.className)?" "+a.className:""),h;if(!this.label){this.outside&&(this.container=h=c.doc.createElement("div"),h.className="highcharts-tooltip-container",c.css(h,{position:"absolute",top:"1px",
pointerEvents:a.style&&a.style.pointerEvents,zIndex:3}),c.doc.body.appendChild(h),this.renderer=f=new c.Renderer(h,0,0,{},void 0,void 0,f.styledMode));this.split?this.label=f.g(d):(this.label=f.label("",0,0,a.shape||"callout",null,null,a.useHTML,null,d).attr({padding:a.padding,r:a.borderRadius}),b||this.label.attr({fill:a.backgroundColor,"stroke-width":a.borderWidth}).css(a.style).shadow(a.shadow));b&&(this.applyFilter(),this.label.addClass("highcharts-tooltip-"+this.chart.index));if(e.outside&&!e.split){var k=
{x:this.label.xSetter,y:this.label.ySetter};this.label.xSetter=function(a,b){k[b].call(this.label,e.distance);h.style.left=a+"px"};this.label.ySetter=function(a,b){k[b].call(this.label,e.distance);h.style.top=a+"px"}}this.label.attr({zIndex:8}).add()}return this.label},update:function(c){this.destroy();r(!0,this.chart.options.tooltip.userOptions,c);this.init(this.chart,r(!0,this.options,c))},destroy:function(){this.label&&(this.label=this.label.destroy());this.split&&this.tt&&(this.cleanSplit(this.chart,
!0),this.tt=this.tt.destroy());this.renderer&&(this.renderer=this.renderer.destroy(),G(this.container));c.clearTimeout(this.hideTimer);c.clearTimeout(this.tooltipTimeout)},move:function(e,f,b,a){var d=this,h=d.now,k=!1!==d.options.animation&&!d.isHidden&&(1<Math.abs(e-h.x)||1<Math.abs(f-h.y)),l=d.followPointer||1<d.len;H(h,{x:k?(2*h.x+e)/3:e,y:k?(h.y+f)/2:f,anchorX:l?void 0:k?(2*h.anchorX+b)/3:b,anchorY:l?void 0:k?(h.anchorY+a)/2:a});d.getLabel().attr(h);k&&(c.clearTimeout(this.tooltipTimeout),this.tooltipTimeout=
setTimeout(function(){d&&d.move(e,f,b,a)},32))},hide:function(e){var f=this;c.clearTimeout(this.hideTimer);e=C(e,this.options.hideDelay,500);this.isHidden||(this.hideTimer=u(function(){f.getLabel()[e?"fadeOut":"hide"]();f.isHidden=!0},e))},getAnchor:function(c,f){var b=this.chart,a=b.pointer,d=b.inverted,h=b.plotTop,k=b.plotLeft,l=0,e=0,p,g;c=B(c);this.followPointer&&f?("undefined"===typeof f.chartX&&(f=a.normalize(f)),c=[f.chartX-b.plotLeft,f.chartY-h]):c[0].tooltipPos?c=c[0].tooltipPos:(c.forEach(function(a){p=
a.series.yAxis;g=a.series.xAxis;l+=a.plotX+(!d&&g?g.left-k:0);e+=(a.plotLow?(a.plotLow+a.plotHigh)/2:a.plotY)+(!d&&p?p.top-h:0)}),l/=c.length,e/=c.length,c=[d?b.plotWidth-e:l,this.shared&&!d&&1<c.length&&f?f.chartY-h:d?b.plotHeight-l:e]);return c.map(Math.round)},getPosition:function(c,f,b){var a=this.chart,d=this.distance,h={},k=a.inverted&&b.h||0,l,e=this.outside,p=e?w.documentElement.clientWidth-2*d:a.chartWidth,g=e?Math.max(w.body.scrollHeight,w.documentElement.scrollHeight,w.body.offsetHeight,
w.documentElement.offsetHeight,w.documentElement.clientHeight):a.chartHeight,t=a.pointer.getChartPosition(),x=a.containerScaling,L=function(a){return x?a*x.scaleX:a},E=function(a){return x?a*x.scaleY:a},n=function(h){var n="x"===h;return[h,n?p:g,n?c:f].concat(e?[n?L(c):E(f),n?t.left-d+L(b.plotX+a.plotLeft):t.top-d+E(b.plotY+a.plotTop),0,n?p:g]:[n?c:f,n?b.plotX+a.plotLeft:b.plotY+a.plotTop,n?a.plotLeft:a.plotTop,n?a.plotLeft+a.plotWidth:a.plotTop+a.plotHeight])},z=n("y"),m=n("x"),r=!this.followPointer&&
C(b.ttBelow,!a.inverted===!!b.negative),q=function(a,b,g,f,c,t,n){var l="y"===a?E(d):L(d),x=(g-f)/2,e=f<c-d,p=c+d+f<b,z=c-l-g+x;c=c+l-x;if(r&&p)h[a]=c;else if(!r&&e)h[a]=z;else if(e)h[a]=Math.min(n-f,0>z-k?z:z-k);else if(p)h[a]=Math.max(t,c+k+g>b?c:c+k);else return!1},A=function(a,b,g,f,c){var t;c<d||c>b-d?t=!1:h[a]=c<g/2?1:c>b-f/2?b-f-2:c-g/2;return t},u=function(a){var b=z;z=m;m=b;l=a},v=function(){!1!==q.apply(0,z)?!1!==A.apply(0,m)||l||(u(!0),v()):l?h.x=h.y=0:(u(!0),v())};(a.inverted||1<this.len)&&
u();v();return h},defaultFormatter:function(c){var f=this.points||B(this);var b=[c.tooltipFooterHeaderFormatter(f[0])];b=b.concat(c.bodyFormatter(f));b.push(c.tooltipFooterHeaderFormatter(f[0],!0));return b},refresh:function(e,f){var b=this.chart,a=this.options,d=e,h={},k=[],l=a.formatter||this.defaultFormatter;h=this.shared;var y=b.styledMode;if(a.enabled){c.clearTimeout(this.hideTimer);this.followPointer=B(d)[0].series.tooltipOptions.followPointer;var p=this.getAnchor(d,f);f=p[0];var g=p[1];!h||
d.series&&d.series.noSharedTooltip?h=d.getLabelConfig():(b.pointer.applyInactiveState(d),d.forEach(function(a){a.setState("hover");k.push(a.getLabelConfig())}),h={x:d[0].category,y:d[0].y},h.points=k,d=d[0]);this.len=k.length;b=l.call(h,this);l=d.series;this.distance=C(l.tooltipOptions.distance,16);!1===b?this.hide():(this.split?this.renderSplit(b,B(e)):(e=this.getLabel(),a.style.width&&!y||e.css({width:this.chart.spacingBox.width}),e.attr({text:b&&b.join?b.join(""):b}),e.removeClass(/highcharts-color-[\d]+/g).addClass("highcharts-color-"+
C(d.colorIndex,l.colorIndex)),y||e.attr({stroke:a.borderColor||d.color||l.color||"#666666"}),this.updatePosition({plotX:f,plotY:g,negative:d.negative,ttBelow:d.ttBelow,h:p[2]||0})),this.isHidden&&this.label&&this.label.attr({opacity:1}).show(),this.isHidden=!1);c.fireEvent(this,"refresh")}},renderSplit:function(e,f){function b(a,b,d,g,c){void 0===c&&(c=!0);d?(b=D?0:I,a=F(a-g/2,K.left,K.right-g)):(b-=B,a=c?a-g-v:a+v,a=F(a,c?a:K.left,K.right));return{x:a,y:b}}var a=this,d=a.chart,h=a.chart,k=h.chartWidth,
l=h.chartHeight,y=h.plotHeight,p=h.plotLeft,g=h.plotTop,t=h.plotWidth,x=h.pointer,L=h.renderer,E=h.scrollablePixelsX;E=void 0===E?0:E;var n=h.scrollablePixelsY,z=void 0===n?0:n;n=h.scrollingContainer;n=void 0===n?{scrollLeft:0,scrollTop:0}:n;var m=n.scrollLeft,r=n.scrollTop,u=h.styledMode,v=a.distance,w=a.options,A=a.options.positioner,K={left:E?p:0,right:E?p+t-E:k,top:z?g:0,bottom:z?g+y-z:l},R=a.getLabel(),D=!(!d.xAxis[0]||!d.xAxis[0].opposite),B=g,G=0,I=y-z;q(e)&&(e=[!1,e]);e=e.slice(0,f.length+
1).reduce(function(d,c,h){if(!1!==c&&""!==c){h=f[h-1]||{isHeader:!0,plotX:f[0].plotX,plotY:y,series:{}};var t=h.isHeader,n=t?a:h.series,l=n.tt,x=h.isHeader;var e=h.series;var k="highcharts-color-"+C(h.colorIndex,e.colorIndex,"none");l||(l={padding:w.padding,r:w.borderRadius},u||(l.fill=w.backgroundColor,l["stroke-width"]=w.borderWidth),l=L.label(null,null,null,w[x?"headerShape":"shape"]||"callout",null,null,w.useHTML).addClass(x?"highcharts-tooltip-header ":"highcharts-tooltip-box "+k).attr(l).add(R));
l.isActive=!0;l.attr({text:c});u||l.css(w.style).shadow(w.shadow).attr({stroke:w.borderColor||h.color||e.color||"#333333"});c=n.tt=l;x=c.getBBox();n=x.width+c.strokeWidth();t&&(G=x.height,I+=G,D&&(B-=G));e=h.plotX;e=void 0===e?0:e;k=h.plotY;k=void 0===k?0:k;var E=h.series;h.isHeader?(e=p+e-m,k=g+(y-z)/2):(l=E.xAxis,E=E.yAxis,e=l.pos+F(e,-v,l.len+v)-m,k=E.pos+F(k,0,E.len)-r);e=F(e,K.left-v,K.right+v);k=F(k,K.top,K.bottom);x=x.height+1;l=A?A.call(a,n,x,h):b(e,k,t,n);d.push({align:A?0:void 0,anchorX:e,
anchorY:k,boxWidth:n,point:h,rank:C(l.rank,t?1:0),size:x,target:l.y,tt:c,x:l.x})}return d},[]);!A&&e.some(function(a){return 0>a.x})&&(e=e.map(function(a){var d=b(a.anchorX,a.anchorY,a.point.isHeader,a.boxWidth,!1);return H(a,{target:d.y,x:d.x})}));a.cleanSplit();c.distribute(e,I,void 0);e.forEach(function(a){var b=a.pos;a.tt.attr({visibility:"undefined"===typeof b?"hidden":"inherit",x:a.x,y:b+B,anchorX:a.anchorX,anchorY:a.anchorY})});e=a.container;d=a.renderer;a.outside&&e&&d&&(h=R.getBBox(),d.setSize(h.width+
h.x,h.height+h.y,!1),x=x.getChartPosition(),e.style.left=x.left+"px",e.style.top=x.top+"px")},updatePosition:function(e){var f=this.chart,b=f.pointer,a=this.getLabel(),d=e.plotX+f.plotLeft,h=e.plotY+f.plotTop;b=b.getChartPosition();e=(this.options.positioner||this.getPosition).call(this,a.width,a.height,e);if(this.outside){var k=(this.options.borderWidth||0)+2*this.distance;this.renderer.setSize(a.width+k,a.height+k,!1);if(f=f.containerScaling)c.css(this.container,{transform:"scale("+f.scaleX+", "+
f.scaleY+")"}),d*=f.scaleX,h*=f.scaleY;d+=b.left-e.x;h+=b.top-e.y}this.move(Math.round(e.x),Math.round(e.y||0),d,h)},getDateFormat:function(c,f,b,a){var d=this.chart.time,h=d.dateFormat("%m-%d %H:%M:%S.%L",f),e={millisecond:15,second:12,minute:9,hour:6,day:3},l="millisecond";for(y in D){if(c===D.week&&+d.dateFormat("%w",f)===b&&"00:00:00.000"===h.substr(6)){var y="week";break}if(D[y]>c){y=l;break}if(e[y]&&h.substr(e[y])!=="01-01 00:00:00.000".substr(e[y]))break;"week"!==y&&(l=y)}if(y)var p=d.resolveDTLFormat(a[y]).main;
return p},getXDateFormat:function(c,f,b){f=f.dateTimeLabelFormats;var a=b&&b.closestPointRange;return(a?this.getDateFormat(a,c.x,b.options.startOfWeek,f):f.day)||f.year},tooltipFooterHeaderFormatter:function(e,f){var b=f?"footer":"header",a=e.series,d=a.tooltipOptions,h=d.xDateFormat,k=a.xAxis,l=k&&"datetime"===k.options.type&&v(e.key),y=d[b+"Format"];f={isFooter:f,labelConfig:e};c.fireEvent(this,"headerFormatter",f,function(b){l&&!h&&(h=this.getXDateFormat(e,d,k));l&&h&&(e.point&&e.point.tooltipDateKeys||
["key"]).forEach(function(a){y=y.replace("{point."+a+"}","{point."+a+":"+h+"}")});a.chart.styledMode&&(y=this.styledModeFormat(y));b.text=m(y,{point:e,series:a},this.chart)});return f.text},bodyFormatter:function(c){return c.map(function(c){var b=c.series.tooltipOptions;return(b[(c.point.formatPrefix||"point")+"Formatter"]||c.point.tooltipFormatter).call(c.point,b[(c.point.formatPrefix||"point")+"Format"]||"")})},styledModeFormat:function(c){return c.replace('style="font-size: 10px"','class="highcharts-header"').replace(/style="color:{(point|series)\.color}"/g,
'class="highcharts-color-{$1.colorIndex}"')}}});M(J,"parts/Pointer.js",[J["parts/Globals.js"],J["parts/Utilities.js"]],function(c,e){var F=e.attr,I=e.defined,G=e.extend,H=e.isNumber,v=e.isObject,q=e.objectEach,C=e.offset,B=e.pick,u=e.splat,w=c.addEvent,m=c.charts,r=c.color,D=c.css,A=c.find,f=c.fireEvent,b=c.Tooltip;c.Pointer=function(a,b){this.init(a,b)};c.Pointer.prototype={init:function(a,d){this.options=d;this.chart=a;this.runChartClick=d.chart.events&&!!d.chart.events.click;this.pinchDown=[];
this.lastValidTouch={};b&&(a.tooltip=new b(a,d.tooltip),this.followTouchMove=B(d.tooltip.followTouchMove,!0));this.setDOMEvents()},zoomOption:function(a){var b=this.chart,c=b.options.chart,f=c.zoomType||"";b=b.inverted;/touch/.test(a.type)&&(f=B(c.pinchType,f));this.zoomX=a=/x/.test(f);this.zoomY=f=/y/.test(f);this.zoomHor=a&&!b||f&&b;this.zoomVert=f&&!b||a&&b;this.hasZoom=a||f},getChartPosition:function(){var a=this.chart;a=a.scrollingContainer||a.container;return this.chartPosition||(this.chartPosition=
C(a))},normalize:function(a,b){var d=a.touches?a.touches.length?a.touches.item(0):a.changedTouches[0]:a;b||(b=this.getChartPosition());var c=d.pageX-b.left;b=d.pageY-b.top;if(d=this.chart.containerScaling)c/=d.scaleX,b/=d.scaleY;return G(a,{chartX:Math.round(c),chartY:Math.round(b)})},getCoordinates:function(a){var b={xAxis:[],yAxis:[]};this.chart.axes.forEach(function(d){b[d.isXAxis?"xAxis":"yAxis"].push({axis:d,value:d.toValue(a[d.horiz?"chartX":"chartY"])})});return b},findNearestKDPoint:function(a,
b,c){var d;a.forEach(function(a){var f=!(a.noSharedTooltip&&b)&&0>a.options.findNearestPointBy.indexOf("y");a=a.searchPoint(c,f);if((f=v(a,!0))&&!(f=!v(d,!0))){f=d.distX-a.distX;var h=d.dist-a.dist,g=(a.series.group&&a.series.group.zIndex)-(d.series.group&&d.series.group.zIndex);f=0<(0!==f&&b?f:0!==h?h:0!==g?g:d.series.index>a.series.index?-1:1)}f&&(d=a)});return d},getPointFromEvent:function(a){a=a.target;for(var b;a&&!b;)b=a.point,a=a.parentNode;return b},getChartCoordinatesFromPoint:function(a,
b){var d=a.series,c=d.xAxis;d=d.yAxis;var f=B(a.clientX,a.plotX),e=a.shapeArgs;if(c&&d)return b?{chartX:c.len+c.pos-f,chartY:d.len+d.pos-a.plotY}:{chartX:f+c.pos,chartY:a.plotY+d.pos};if(e&&e.x&&e.y)return{chartX:e.x,chartY:e.y}},getHoverData:function(a,b,c,f,e,y){var d,g=[];f=!(!f||!a);var h=b&&!b.stickyTracking?[b]:c.filter(function(a){return a.visible&&!(!e&&a.directTouch)&&B(a.options.enableMouseTracking,!0)&&a.stickyTracking});b=(d=f||!y?a:this.findNearestKDPoint(h,e,y))&&d.series;d&&(e&&!b.noSharedTooltip?
(h=c.filter(function(a){return a.visible&&!(!e&&a.directTouch)&&B(a.options.enableMouseTracking,!0)&&!a.noSharedTooltip}),h.forEach(function(a){var b=A(a.points,function(a){return a.x===d.x&&!a.isNull});v(b)&&(a.chart.isBoosting&&(b=a.getPoint(b)),g.push(b))})):g.push(d));return{hoverPoint:d,hoverSeries:b,hoverPoints:g}},runPointActions:function(a,b){var d=this.chart,f=d.tooltip&&d.tooltip.options.enabled?d.tooltip:void 0,e=f?f.shared:!1,y=b||d.hoverPoint,p=y&&y.series||d.hoverSeries;p=this.getHoverData(y,
p,d.series,(!a||"touchmove"!==a.type)&&(!!b||p&&p.directTouch&&this.isDirectTouch),e,a);y=p.hoverPoint;var g=p.hoverPoints;b=(p=p.hoverSeries)&&p.tooltipOptions.followPointer;e=e&&p&&!p.noSharedTooltip;if(y&&(y!==d.hoverPoint||f&&f.isHidden)){(d.hoverPoints||[]).forEach(function(a){-1===g.indexOf(a)&&a.setState()});if(d.hoverSeries!==p)p.onMouseOver();this.applyInactiveState(g);(g||[]).forEach(function(a){a.setState("hover")});d.hoverPoint&&d.hoverPoint.firePointEvent("mouseOut");if(!y.series)return;
y.firePointEvent("mouseOver");d.hoverPoints=g;d.hoverPoint=y;f&&f.refresh(e?g:y,a)}else b&&f&&!f.isHidden&&(y=f.getAnchor([{}],a),f.updatePosition({plotX:y[0],plotY:y[1]}));this.unDocMouseMove||(this.unDocMouseMove=w(d.container.ownerDocument,"mousemove",function(a){var b=m[c.hoverChartIndex];if(b)b.pointer.onDocumentMouseMove(a)}));d.axes.forEach(function(b){var d=B(b.crosshair.snap,!0),f=d?c.find(g,function(a){return a.series[b.coll]===b}):void 0;f||!d?b.drawCrosshair(a,f):b.hideCrosshair()})},
applyInactiveState:function(a){var b=[],c;(a||[]).forEach(function(a){c=a.series;b.push(c);c.linkedParent&&b.push(c.linkedParent);c.linkedSeries&&(b=b.concat(c.linkedSeries));c.navigatorSeries&&b.push(c.navigatorSeries)});this.chart.series.forEach(function(a){-1===b.indexOf(a)?a.setState("inactive",!0):a.options.inactiveOtherPoints&&a.setAllPointsToState("inactive")})},reset:function(a,b){var d=this.chart,c=d.hoverSeries,f=d.hoverPoint,e=d.hoverPoints,p=d.tooltip,g=p&&p.shared?e:f;a&&g&&u(g).forEach(function(b){b.series.isCartesian&&
"undefined"===typeof b.plotX&&(a=!1)});if(a)p&&g&&u(g).length&&(p.refresh(g),p.shared&&e?e.forEach(function(a){a.setState(a.state,!0);a.series.isCartesian&&(a.series.xAxis.crosshair&&a.series.xAxis.drawCrosshair(null,a),a.series.yAxis.crosshair&&a.series.yAxis.drawCrosshair(null,a))}):f&&(f.setState(f.state,!0),d.axes.forEach(function(a){a.crosshair&&f.series[a.coll]===a&&a.drawCrosshair(null,f)})));else{if(f)f.onMouseOut();e&&e.forEach(function(a){a.setState()});if(c)c.onMouseOut();p&&p.hide(b);
this.unDocMouseMove&&(this.unDocMouseMove=this.unDocMouseMove());d.axes.forEach(function(a){a.hideCrosshair()});this.hoverX=d.hoverPoints=d.hoverPoint=null}},scaleGroups:function(a,b){var d=this.chart,c;d.series.forEach(function(f){c=a||f.getPlotBox();f.xAxis&&f.xAxis.zoomEnabled&&f.group&&(f.group.attr(c),f.markerGroup&&(f.markerGroup.attr(c),f.markerGroup.clip(b?d.clipRect:null)),f.dataLabelsGroup&&f.dataLabelsGroup.attr(c))});d.clipRect.attr(b||d.clipBox)},dragStart:function(a){var b=this.chart;
b.mouseIsDown=a.type;b.cancelClick=!1;b.mouseDownX=this.mouseDownX=a.chartX;b.mouseDownY=this.mouseDownY=a.chartY},drag:function(a){var b=this.chart,c=b.options.chart,f=a.chartX,e=a.chartY,m=this.zoomHor,p=this.zoomVert,g=b.plotLeft,t=b.plotTop,x=b.plotWidth,L=b.plotHeight,E=this.selectionMarker,n=this.mouseDownX,z=this.mouseDownY,q=v(c.panning)?c.panning&&c.panning.enabled:c.panning,u=c.panKey&&a[c.panKey+"Key"];if(!E||!E.touch)if(f<g?f=g:f>g+x&&(f=g+x),e<t?e=t:e>t+L&&(e=t+L),this.hasDragged=Math.sqrt(Math.pow(n-
f,2)+Math.pow(z-e,2)),10<this.hasDragged){var w=b.isInsidePlot(n-g,z-t);b.hasCartesianSeries&&(this.zoomX||this.zoomY)&&w&&!u&&!E&&(this.selectionMarker=E=b.renderer.rect(g,t,m?1:x,p?1:L,0).attr({"class":"highcharts-selection-marker",zIndex:7}).add(),b.styledMode||E.attr({fill:c.selectionMarkerFill||r("#335cad").setOpacity(.25).get()}));E&&m&&(f-=n,E.attr({width:Math.abs(f),x:(0<f?0:f)+n}));E&&p&&(f=e-z,E.attr({height:Math.abs(f),y:(0<f?0:f)+z}));w&&!E&&q&&b.pan(a,c.panning)}},drop:function(a){var b=
this,c=this.chart,e=this.hasPinched;if(this.selectionMarker){var l={originalEvent:a,xAxis:[],yAxis:[]},m=this.selectionMarker,p=m.attr?m.attr("x"):m.x,g=m.attr?m.attr("y"):m.y,t=m.attr?m.attr("width"):m.width,x=m.attr?m.attr("height"):m.height,L;if(this.hasDragged||e)c.axes.forEach(function(d){if(d.zoomEnabled&&I(d.min)&&(e||b[{xAxis:"zoomX",yAxis:"zoomY"}[d.coll]])){var c=d.horiz,f="touchend"===a.type?d.minPixelPadding:0,h=d.toValue((c?p:g)+f);c=d.toValue((c?p+t:g+x)-f);l[d.coll].push({axis:d,min:Math.min(h,
c),max:Math.max(h,c)});L=!0}}),L&&f(c,"selection",l,function(a){c.zoom(G(a,e?{animation:!1}:null))});H(c.index)&&(this.selectionMarker=this.selectionMarker.destroy());e&&this.scaleGroups()}c&&H(c.index)&&(D(c.container,{cursor:c._cursor}),c.cancelClick=10<this.hasDragged,c.mouseIsDown=this.hasDragged=this.hasPinched=!1,this.pinchDown=[])},onContainerMouseDown:function(a){a=this.normalize(a);2!==a.button&&(this.zoomOption(a),a.preventDefault&&a.preventDefault(),this.dragStart(a))},onDocumentMouseUp:function(a){m[c.hoverChartIndex]&&
m[c.hoverChartIndex].pointer.drop(a)},onDocumentMouseMove:function(a){var b=this.chart,c=this.chartPosition;a=this.normalize(a,c);!c||this.inClass(a.target,"highcharts-tracker")||b.isInsidePlot(a.chartX-b.plotLeft,a.chartY-b.plotTop)||this.reset()},onContainerMouseLeave:function(a){var b=m[c.hoverChartIndex];b&&(a.relatedTarget||a.toElement)&&(b.pointer.reset(),b.pointer.chartPosition=void 0)},onContainerMouseMove:function(a){var b=this.chart;I(c.hoverChartIndex)&&m[c.hoverChartIndex]&&m[c.hoverChartIndex].mouseIsDown||
(c.hoverChartIndex=b.index);a=this.normalize(a);a.preventDefault||(a.returnValue=!1);"mousedown"===b.mouseIsDown&&this.drag(a);!this.inClass(a.target,"highcharts-tracker")&&!b.isInsidePlot(a.chartX-b.plotLeft,a.chartY-b.plotTop)||b.openMenu||this.runPointActions(a)},inClass:function(a,b){for(var d;a;){if(d=F(a,"class")){if(-1!==d.indexOf(b))return!0;if(-1!==d.indexOf("highcharts-container"))return!1}a=a.parentNode}},onTrackerMouseOut:function(a){var b=this.chart.hoverSeries;a=a.relatedTarget||a.toElement;
this.isDirectTouch=!1;if(!(!b||!a||b.stickyTracking||this.inClass(a,"highcharts-tooltip")||this.inClass(a,"highcharts-series-"+b.index)&&this.inClass(a,"highcharts-tracker")))b.onMouseOut()},onContainerClick:function(a){var b=this.chart,c=b.hoverPoint,e=b.plotLeft,l=b.plotTop;a=this.normalize(a);b.cancelClick||(c&&this.inClass(a.target,"highcharts-tracker")?(f(c.series,"click",G(a,{point:c})),b.hoverPoint&&c.firePointEvent("click",a)):(G(a,this.getCoordinates(a)),b.isInsidePlot(a.chartX-e,a.chartY-
l)&&f(b,"click",a)))},setDOMEvents:function(){var a=this,b=a.chart.container,f=b.ownerDocument;b.onmousedown=function(b){a.onContainerMouseDown(b)};b.onmousemove=function(b){a.onContainerMouseMove(b)};b.onclick=function(b){a.onContainerClick(b)};this.unbindContainerMouseLeave=w(b,"mouseleave",a.onContainerMouseLeave);c.unbindDocumentMouseUp||(c.unbindDocumentMouseUp=w(f,"mouseup",a.onDocumentMouseUp));c.hasTouch&&(w(b,"touchstart",function(b){a.onContainerTouchStart(b)}),w(b,"touchmove",function(b){a.onContainerTouchMove(b)}),
c.unbindDocumentTouchEnd||(c.unbindDocumentTouchEnd=w(f,"touchend",a.onDocumentTouchEnd)))},destroy:function(){var a=this;a.unDocMouseMove&&a.unDocMouseMove();this.unbindContainerMouseLeave();c.chartCount||(c.unbindDocumentMouseUp&&(c.unbindDocumentMouseUp=c.unbindDocumentMouseUp()),c.unbindDocumentTouchEnd&&(c.unbindDocumentTouchEnd=c.unbindDocumentTouchEnd()));clearInterval(a.tooltipTimeout);q(a,function(b,c){a[c]=null})}}});M(J,"parts/TouchPointer.js",[J["parts/Globals.js"],J["parts/Utilities.js"]],
function(c,e){var F=e.extend,I=e.pick,G=c.charts,H=c.noop;F(c.Pointer.prototype,{pinchTranslate:function(c,e,C,B,u,w){this.zoomHor&&this.pinchTranslateDirection(!0,c,e,C,B,u,w);this.zoomVert&&this.pinchTranslateDirection(!1,c,e,C,B,u,w)},pinchTranslateDirection:function(c,e,C,B,u,w,m,r){var q=this.chart,v=c?"x":"y",f=c?"X":"Y",b="chart"+f,a=c?"width":"height",d=q["plot"+(c?"Left":"Top")],h,k,l=r||1,y=q.inverted,p=q.bounds[c?"h":"v"],g=1===e.length,t=e[0][b],x=C[0][b],L=!g&&e[1][b],E=!g&&C[1][b];C=
function(){!g&&20<Math.abs(t-L)&&(l=r||Math.abs(x-E)/Math.abs(t-L));k=(d-x)/l+t;h=q["plot"+(c?"Width":"Height")]/l};C();e=k;if(e<p.min){e=p.min;var n=!0}else e+h>p.max&&(e=p.max-h,n=!0);n?(x-=.8*(x-m[v][0]),g||(E-=.8*(E-m[v][1])),C()):m[v]=[x,E];y||(w[v]=k-d,w[a]=h);w=y?1/l:l;u[a]=h;u[v]=e;B[y?c?"scaleY":"scaleX":"scale"+f]=l;B["translate"+f]=w*d+(x-w*t)},pinch:function(c){var e=this,v=e.chart,B=e.pinchDown,u=c.touches,w=u.length,m=e.lastValidTouch,r=e.hasZoom,D=e.selectionMarker,A={},f=1===w&&(e.inClass(c.target,
"highcharts-tracker")&&v.runTrackerClick||e.runChartClick),b={};1<w&&(e.initiated=!0);r&&e.initiated&&!f&&c.preventDefault();[].map.call(u,function(a){return e.normalize(a)});"touchstart"===c.type?([].forEach.call(u,function(a,b){B[b]={chartX:a.chartX,chartY:a.chartY}}),m.x=[B[0].chartX,B[1]&&B[1].chartX],m.y=[B[0].chartY,B[1]&&B[1].chartY],v.axes.forEach(function(a){if(a.zoomEnabled){var b=v.bounds[a.horiz?"h":"v"],c=a.minPixelPadding,f=a.toPixels(Math.min(I(a.options.min,a.dataMin),a.dataMin)),
e=a.toPixels(Math.max(I(a.options.max,a.dataMax),a.dataMax)),m=Math.max(f,e);b.min=Math.min(a.pos,Math.min(f,e)-c);b.max=Math.max(a.pos+a.len,m+c)}}),e.res=!0):e.followTouchMove&&1===w?this.runPointActions(e.normalize(c)):B.length&&(D||(e.selectionMarker=D=F({destroy:H,touch:!0},v.plotBox)),e.pinchTranslate(B,u,A,D,b,m),e.hasPinched=r,e.scaleGroups(A,b),e.res&&(e.res=!1,this.reset(!1,0)))},touch:function(e,q){var v=this.chart,B;if(v.index!==c.hoverChartIndex)this.onContainerMouseLeave({relatedTarget:!0});
c.hoverChartIndex=v.index;if(1===e.touches.length)if(e=this.normalize(e),(B=v.isInsidePlot(e.chartX-v.plotLeft,e.chartY-v.plotTop))&&!v.openMenu){q&&this.runPointActions(e);if("touchmove"===e.type){q=this.pinchDown;var u=q[0]?4<=Math.sqrt(Math.pow(q[0].chartX-e.chartX,2)+Math.pow(q[0].chartY-e.chartY,2)):!1}I(u,!0)&&this.pinch(e)}else q&&this.reset();else 2===e.touches.length&&this.pinch(e)},onContainerTouchStart:function(c){this.zoomOption(c);this.touch(c,!0)},onContainerTouchMove:function(c){this.touch(c)},
onDocumentTouchEnd:function(e){G[c.hoverChartIndex]&&G[c.hoverChartIndex].pointer.drop(e)}})});M(J,"parts/MSPointer.js",[J["parts/Globals.js"],J["parts/Utilities.js"]],function(c,e){var F=e.extend,I=e.objectEach;e=e.wrap;var G=c.addEvent,H=c.charts,v=c.css,q=c.doc,C=c.noop,B=c.Pointer,u=c.removeEvent,w=c.win;if(!c.hasTouch&&(w.PointerEvent||w.MSPointerEvent)){var m={},r=!!w.PointerEvent,D=function(){var c=[];c.item=function(b){return this[b]};I(m,function(b){c.push({pageX:b.pageX,pageY:b.pageY,target:b.target})});
return c},A=function(f,b,a,d){"touch"!==f.pointerType&&f.pointerType!==f.MSPOINTER_TYPE_TOUCH||!H[c.hoverChartIndex]||(d(f),d=H[c.hoverChartIndex].pointer,d[b]({type:a,target:f.currentTarget,preventDefault:C,touches:D()}))};F(B.prototype,{onContainerPointerDown:function(c){A(c,"onContainerTouchStart","touchstart",function(b){m[b.pointerId]={pageX:b.pageX,pageY:b.pageY,target:b.currentTarget}})},onContainerPointerMove:function(c){A(c,"onContainerTouchMove","touchmove",function(b){m[b.pointerId]={pageX:b.pageX,
pageY:b.pageY};m[b.pointerId].target||(m[b.pointerId].target=b.currentTarget)})},onDocumentPointerUp:function(c){A(c,"onDocumentTouchEnd","touchend",function(b){delete m[b.pointerId]})},batchMSEvents:function(c){c(this.chart.container,r?"pointerdown":"MSPointerDown",this.onContainerPointerDown);c(this.chart.container,r?"pointermove":"MSPointerMove",this.onContainerPointerMove);c(q,r?"pointerup":"MSPointerUp",this.onDocumentPointerUp)}});e(B.prototype,"init",function(c,b,a){c.call(this,b,a);this.hasZoom&&
v(b.container,{"-ms-touch-action":"none","touch-action":"none"})});e(B.prototype,"setDOMEvents",function(c){c.apply(this);(this.hasZoom||this.followTouchMove)&&this.batchMSEvents(G)});e(B.prototype,"destroy",function(c){this.batchMSEvents(u);c.call(this)})}});M(J,"parts/Legend.js",[J["parts/Globals.js"],J["parts/Utilities.js"]],function(c,e){var F=e.defined,I=e.discardElement,G=e.isNumber,H=e.pick,v=e.relativeLength,q=e.setAnimation,C=e.syncTimeout;e=e.wrap;var B=c.addEvent,u=c.css,w=c.fireEvent,
m=c.isFirefox,r=c.marginNames,D=c.merge,A=c.stableSort,f=c.win;c.Legend=function(b,a){this.init(b,a)};c.Legend.prototype={init:function(b,a){this.chart=b;this.setOptions(a);a.enabled&&(this.render(),B(this.chart,"endResize",function(){this.legend.positionCheckboxes()}),this.proximate?this.unchartrender=B(this.chart,"render",function(){this.legend.proximatePositions();this.legend.positionItems()}):this.unchartrender&&this.unchartrender())},setOptions:function(b){var a=H(b.padding,8);this.options=b;
this.chart.styledMode||(this.itemStyle=b.itemStyle,this.itemHiddenStyle=D(this.itemStyle,b.itemHiddenStyle));this.itemMarginTop=b.itemMarginTop||0;this.itemMarginBottom=b.itemMarginBottom||0;this.padding=a;this.initialItemY=a-5;this.symbolWidth=H(b.symbolWidth,16);this.pages=[];this.proximate="proximate"===b.layout&&!this.chart.inverted},update:function(b,a){var d=this.chart;this.setOptions(D(!0,this.options,b));this.destroy();d.isDirtyLegend=d.isDirtyBox=!0;H(a,!0)&&d.redraw();w(this,"afterUpdate")},
colorizeItem:function(b,a){b.legendGroup[a?"removeClass":"addClass"]("highcharts-legend-item-hidden");if(!this.chart.styledMode){var d=this.options,c=b.legendItem,f=b.legendLine,e=b.legendSymbol,m=this.itemHiddenStyle.color;d=a?d.itemStyle.color:m;var p=a?b.color||m:m,g=b.options&&b.options.marker,t={fill:p};c&&c.css({fill:d,color:d});f&&f.attr({stroke:p});e&&(g&&e.isMarker&&(t=b.pointAttribs(),a||(t.stroke=t.fill=m)),e.attr(t))}w(this,"afterColorizeItem",{item:b,visible:a})},positionItems:function(){this.allItems.forEach(this.positionItem,
this);this.chart.isResizing||this.positionCheckboxes()},positionItem:function(b){var a=this.options,d=a.symbolPadding;a=!a.rtl;var c=b._legendItemPos,f=c[0];c=c[1];var e=b.checkbox;if((b=b.legendGroup)&&b.element)b[F(b.translateY)?"animate":"attr"]({translateX:a?f:this.legendWidth-f-2*d-4,translateY:c});e&&(e.x=f,e.y=c)},destroyItem:function(b){var a=b.checkbox;["legendItem","legendLine","legendSymbol","legendGroup"].forEach(function(a){b[a]&&(b[a]=b[a].destroy())});a&&I(b.checkbox)},destroy:function(){function b(a){this[a]&&
(this[a]=this[a].destroy())}this.getAllItems().forEach(function(a){["legendItem","legendGroup"].forEach(b,a)});"clipRect up down pager nav box title group".split(" ").forEach(b,this);this.display=null},positionCheckboxes:function(){var b=this.group&&this.group.alignAttr,a=this.clipHeight||this.legendHeight,d=this.titleHeight;if(b){var c=b.translateY;this.allItems.forEach(function(f){var e=f.checkbox;if(e){var h=c+d+e.y+(this.scrollOffset||0)+3;u(e,{left:b.translateX+f.checkboxOffset+e.x-20+"px",top:h+
"px",display:this.proximate||h>c-6&&h<c+a-6?"":"none"})}},this)}},renderTitle:function(){var b=this.options,a=this.padding,d=b.title,c=0;d.text&&(this.title||(this.title=this.chart.renderer.label(d.text,a-3,a-4,null,null,null,b.useHTML,null,"legend-title").attr({zIndex:1}),this.chart.styledMode||this.title.css(d.style),this.title.add(this.group)),d.width||this.title.css({width:this.maxLegendWidth+"px"}),b=this.title.getBBox(),c=b.height,this.offsetWidth=b.width,this.contentGroup.attr({translateY:c}));
this.titleHeight=c},setText:function(b){var a=this.options;b.legendItem.attr({text:a.labelFormat?c.format(a.labelFormat,b,this.chart):a.labelFormatter.call(b)})},renderItem:function(b){var a=this.chart,d=a.renderer,c=this.options,f=this.symbolWidth,e=c.symbolPadding,m=this.itemStyle,p=this.itemHiddenStyle,g="horizontal"===c.layout?H(c.itemDistance,20):0,t=!c.rtl,x=b.legendItem,L=!b.series,E=!L&&b.series.drawLegendSymbol?b.series:b,n=E.options;n=this.createCheckboxForItem&&n&&n.showCheckbox;g=f+e+
g+(n?20:0);var z=c.useHTML,r=b.options.className;x||(b.legendGroup=d.g("legend-item").addClass("highcharts-"+E.type+"-series highcharts-color-"+b.colorIndex+(r?" "+r:"")+(L?" highcharts-series-"+b.index:"")).attr({zIndex:1}).add(this.scrollGroup),b.legendItem=x=d.text("",t?f+e:-e,this.baseline||0,z),a.styledMode||x.css(D(b.visible?m:p)),x.attr({align:t?"left":"right",zIndex:2}).add(b.legendGroup),this.baseline||(this.fontMetrics=d.fontMetrics(a.styledMode?12:m.fontSize,x),this.baseline=this.fontMetrics.f+
3+this.itemMarginTop,x.attr("y",this.baseline)),this.symbolHeight=c.symbolHeight||this.fontMetrics.f,E.drawLegendSymbol(this,b),this.setItemEvents&&this.setItemEvents(b,x,z));n&&!b.checkbox&&this.createCheckboxForItem(b);this.colorizeItem(b,b.visible);!a.styledMode&&m.width||x.css({width:(c.itemWidth||this.widthOption||a.spacingBox.width)-g});this.setText(b);a=x.getBBox();b.itemWidth=b.checkboxOffset=c.itemWidth||b.legendItemWidth||a.width+g;this.maxItemWidth=Math.max(this.maxItemWidth,b.itemWidth);
this.totalItemWidth+=b.itemWidth;this.itemHeight=b.itemHeight=Math.round(b.legendItemHeight||a.height||this.symbolHeight)},layoutItem:function(b){var a=this.options,d=this.padding,c="horizontal"===a.layout,f=b.itemHeight,e=this.itemMarginBottom,m=this.itemMarginTop,p=c?H(a.itemDistance,20):0,g=this.maxLegendWidth;a=a.alignColumns&&this.totalItemWidth>g?this.maxItemWidth:b.itemWidth;c&&this.itemX-d+a>g&&(this.itemX=d,this.lastLineHeight&&(this.itemY+=m+this.lastLineHeight+e),this.lastLineHeight=0);
this.lastItemY=m+this.itemY+e;this.lastLineHeight=Math.max(f,this.lastLineHeight);b._legendItemPos=[this.itemX,this.itemY];c?this.itemX+=a:(this.itemY+=m+f+e,this.lastLineHeight=f);this.offsetWidth=this.widthOption||Math.max((c?this.itemX-d-(b.checkbox?0:p):a)+d,this.offsetWidth)},getAllItems:function(){var b=[];this.chart.series.forEach(function(a){var d=a&&a.options;a&&H(d.showInLegend,F(d.linkedTo)?!1:void 0,!0)&&(b=b.concat(a.legendItems||("point"===d.legendType?a.data:a)))});w(this,"afterGetAllItems",
{allItems:b});return b},getAlignment:function(){var b=this.options;return this.proximate?b.align.charAt(0)+"tv":b.floating?"":b.align.charAt(0)+b.verticalAlign.charAt(0)+b.layout.charAt(0)},adjustMargins:function(b,a){var d=this.chart,c=this.options,f=this.getAlignment();f&&[/(lth|ct|rth)/,/(rtv|rm|rbv)/,/(rbh|cb|lbh)/,/(lbv|lm|ltv)/].forEach(function(e,h){e.test(f)&&!F(b[h])&&(d[r[h]]=Math.max(d[r[h]],d.legend[(h+1)%2?"legendHeight":"legendWidth"]+[1,-1,-1,1][h]*c[h%2?"x":"y"]+H(c.margin,12)+a[h]+
(d.titleOffset[h]||0)))})},proximatePositions:function(){var b=this.chart,a=[],d="left"===this.options.align;this.allItems.forEach(function(f){var e=d;if(f.yAxis&&f.points){f.xAxis.options.reversed&&(e=!e);var h=c.find(e?f.points:f.points.slice(0).reverse(),function(a){return G(a.plotY)});e=this.itemMarginTop+f.legendItem.getBBox().height+this.itemMarginBottom;var m=f.yAxis.top-b.plotTop;f.visible?(h=h?h.plotY:f.yAxis.height,h+=m-.3*e):h=m+f.yAxis.height;a.push({target:h,size:e,item:f})}},this);c.distribute(a,
b.plotHeight);a.forEach(function(a){a.item._legendItemPos[1]=b.plotTop-b.spacing[0]+a.pos})},render:function(){var b=this.chart,a=b.renderer,d=this.group,c,f=this.box,e=this.options,m=this.padding;this.itemX=m;this.itemY=this.initialItemY;this.lastItemY=this.offsetWidth=0;this.widthOption=v(e.width,b.spacingBox.width-m);var p=b.spacingBox.width-2*m-e.x;-1<["rm","lm"].indexOf(this.getAlignment().substring(0,2))&&(p/=2);this.maxLegendWidth=this.widthOption||p;d||(this.group=d=a.g("legend").attr({zIndex:7}).add(),
this.contentGroup=a.g().attr({zIndex:1}).add(d),this.scrollGroup=a.g().add(this.contentGroup));this.renderTitle();p=this.getAllItems();A(p,function(a,b){return(a.options&&a.options.legendIndex||0)-(b.options&&b.options.legendIndex||0)});e.reversed&&p.reverse();this.allItems=p;this.display=c=!!p.length;this.itemHeight=this.totalItemWidth=this.maxItemWidth=this.lastLineHeight=0;p.forEach(this.renderItem,this);p.forEach(this.layoutItem,this);p=(this.widthOption||this.offsetWidth)+m;var g=this.lastItemY+
this.lastLineHeight+this.titleHeight;g=this.handleOverflow(g);g+=m;f||(this.box=f=a.rect().addClass("highcharts-legend-box").attr({r:e.borderRadius}).add(d),f.isNew=!0);b.styledMode||f.attr({stroke:e.borderColor,"stroke-width":e.borderWidth||0,fill:e.backgroundColor||"none"}).shadow(e.shadow);0<p&&0<g&&(f[f.isNew?"attr":"animate"](f.crisp.call({},{x:0,y:0,width:p,height:g},f.strokeWidth())),f.isNew=!1);f[c?"show":"hide"]();b.styledMode&&"none"===d.getStyle("display")&&(p=g=0);this.legendWidth=p;this.legendHeight=
g;c&&(a=b.spacingBox,f=a.y,/(lth|ct|rth)/.test(this.getAlignment())&&0<b.titleOffset[0]?f+=b.titleOffset[0]:/(lbh|cb|rbh)/.test(this.getAlignment())&&0<b.titleOffset[2]&&(f-=b.titleOffset[2]),f!==a.y&&(a=D(a,{y:f})),d.align(D(e,{width:p,height:g,verticalAlign:this.proximate?"top":e.verticalAlign}),!0,a));this.proximate||this.positionItems();w(this,"afterRender")},handleOverflow:function(b){var a=this,d=this.chart,c=d.renderer,f=this.options,e=f.y,m=this.padding;e=d.spacingBox.height+("top"===f.verticalAlign?
-e:e)-m;var p=f.maxHeight,g,t=this.clipRect,x=f.navigation,L=H(x.animation,!0),E=x.arrowSize||12,n=this.nav,z=this.pages,r,q=this.allItems,u=function(b){"number"===typeof b?t.attr({height:b}):t&&(a.clipRect=t.destroy(),a.contentGroup.clip());a.contentGroup.div&&(a.contentGroup.div.style.clip=b?"rect("+m+"px,9999px,"+(m+b)+"px,0)":"auto")},w=function(b){a[b]=c.circle(0,0,1.3*E).translate(E/2,E/2).add(n);d.styledMode||a[b].attr("fill","rgba(0,0,0,0.0001)");return a[b]};"horizontal"!==f.layout||"middle"===
f.verticalAlign||f.floating||(e/=2);p&&(e=Math.min(e,p));z.length=0;b>e&&!1!==x.enabled?(this.clipHeight=g=Math.max(e-20-this.titleHeight-m,0),this.currentPage=H(this.currentPage,1),this.fullHeight=b,q.forEach(function(a,b){var d=a._legendItemPos[1],c=Math.round(a.legendItem.getBBox().height),f=z.length;if(!f||d-z[f-1]>g&&(r||d)!==z[f-1])z.push(r||d),f++;a.pageIx=f-1;r&&(q[b-1].pageIx=f-1);b===q.length-1&&d+c-z[f-1]>g&&d!==r&&(z.push(d),a.pageIx=f);d!==r&&(r=d)}),t||(t=a.clipRect=c.clipRect(0,m,9999,
0),a.contentGroup.clip(t)),u(g),n||(this.nav=n=c.g().attr({zIndex:1}).add(this.group),this.up=c.symbol("triangle",0,0,E,E).add(n),w("upTracker").on("click",function(){a.scroll(-1,L)}),this.pager=c.text("",15,10).addClass("highcharts-legend-navigation"),d.styledMode||this.pager.css(x.style),this.pager.add(n),this.down=c.symbol("triangle-down",0,0,E,E).add(n),w("downTracker").on("click",function(){a.scroll(1,L)})),a.scroll(0),b=e):n&&(u(),this.nav=n.destroy(),this.scrollGroup.attr({translateY:1}),this.clipHeight=
0);return b},scroll:function(b,a){var d=this,f=this.chart,e=this.pages,l=e.length,m=this.currentPage+b;b=this.clipHeight;var p=this.options.navigation,g=this.pager,t=this.padding;m>l&&(m=l);0<m&&("undefined"!==typeof a&&q(a,f),this.nav.attr({translateX:t,translateY:b+this.padding+7+this.titleHeight,visibility:"visible"}),[this.up,this.upTracker].forEach(function(a){a.attr({"class":1===m?"highcharts-legend-nav-inactive":"highcharts-legend-nav-active"})}),g.attr({text:m+"/"+l}),[this.down,this.downTracker].forEach(function(a){a.attr({x:18+
this.pager.getBBox().width,"class":m===l?"highcharts-legend-nav-inactive":"highcharts-legend-nav-active"})},this),f.styledMode||(this.up.attr({fill:1===m?p.inactiveColor:p.activeColor}),this.upTracker.css({cursor:1===m?"default":"pointer"}),this.down.attr({fill:m===l?p.inactiveColor:p.activeColor}),this.downTracker.css({cursor:m===l?"default":"pointer"})),this.scrollOffset=-e[m-1]+this.initialItemY,this.scrollGroup.animate({translateY:this.scrollOffset}),this.currentPage=m,this.positionCheckboxes(),
a=c.animObject(H(a,f.renderer.globalAnimation,!0)),C(function(){w(d,"afterScroll",{currentPage:m})},a.duration||0))}};c.LegendSymbolMixin={drawRectangle:function(b,a){var d=b.symbolHeight,c=b.options.squareSymbol;a.legendSymbol=this.chart.renderer.rect(c?(b.symbolWidth-d)/2:0,b.baseline-d+1,c?d:b.symbolWidth,d,H(b.options.symbolRadius,d/2)).addClass("highcharts-point").attr({zIndex:3}).add(a.legendGroup)},drawLineMarker:function(b){var a=this.options,d=a.marker,c=b.symbolWidth,f=b.symbolHeight,e=
f/2,m=this.chart.renderer,p=this.legendGroup;b=b.baseline-Math.round(.3*b.fontMetrics.b);var g={};this.chart.styledMode||(g={"stroke-width":a.lineWidth||0},a.dashStyle&&(g.dashstyle=a.dashStyle));this.legendLine=m.path(["M",0,b,"L",c,b]).addClass("highcharts-graph").attr(g).add(p);d&&!1!==d.enabled&&c&&(a=Math.min(H(d.radius,e),e),0===this.symbol.indexOf("url")&&(d=D(d,{width:f,height:f}),a=0),this.legendSymbol=d=m.symbol(this.symbol,c/2-a,b-a,2*a,2*a,d).addClass("highcharts-point").add(p),d.isMarker=
!0)}};(/Trident\/7\.0/.test(f.navigator&&f.navigator.userAgent)||m)&&e(c.Legend.prototype,"positionItem",function(b,a){var d=this,c=function(){a._legendItemPos&&b.call(d,a)};c();d.bubbleLegend||setTimeout(c)})});M(J,"parts/Chart.js",[J["parts/Globals.js"],J["parts/Utilities.js"]],function(c,e){var F=e.animObject,I=e.attr,G=e.defined,H=e.discardElement,v=e.erase,q=e.extend,C=e.isArray,B=e.isNumber,u=e.isObject,w=e.isString,m=e.numberFormat,r=e.objectEach,D=e.pick,A=e.pInt,f=e.relativeLength,b=e.setAnimation,
a=e.splat,d=e.syncTimeout,h=c.addEvent,k=c.animate,l=c.doc,y=c.Axis,p=c.createElement,g=c.defaultOptions,t=c.charts,x=c.css,L=c.find,E=c.fireEvent,n=c.Legend,z=c.marginNames,N=c.merge,O=c.Pointer,V=c.removeEvent,T=c.seriesTypes,P=c.win,Q=c.Chart=function(){this.getArgs.apply(this,arguments)};c.chart=function(a,b,d){return new Q(a,b,d)};q(Q.prototype,{callbacks:[],getArgs:function(){var a=[].slice.call(arguments);if(w(a[0])||a[0].nodeName)this.renderTo=a.shift();this.init(a[0],a[1])},init:function(a,
b){var d,f=a.series,e=a.plotOptions||{};E(this,"init",{args:arguments},function(){a.series=null;d=N(g,a);r(d.plotOptions,function(a,b){u(a)&&(a.tooltip=e[b]&&N(e[b].tooltip)||void 0)});d.tooltip.userOptions=a.chart&&a.chart.forExport&&a.tooltip.userOptions||a.tooltip;d.series=a.series=f;this.userOptions=a;var n=d.chart,x=n.events;this.margin=[];this.spacing=[];this.bounds={h:{},v:{}};this.labelCollectors=[];this.callback=b;this.isResizing=0;this.options=d;this.axes=[];this.series=[];this.time=a.time&&
Object.keys(a.time).length?new c.Time(a.time):c.time;this.numberFormatter=n.numberFormatter||m;this.styledMode=n.styledMode;this.hasCartesianSeries=n.showAxes;var l=this;l.index=t.length;t.push(l);c.chartCount++;x&&r(x,function(a,b){c.isFunction(a)&&h(l,b,a)});l.xAxis=[];l.yAxis=[];l.pointCount=l.colorCounter=l.symbolCounter=0;E(l,"afterInit");l.firstRender()})},initSeries:function(a){var b=this.options.chart;b=a.type||b.type||b.defaultSeriesType;var d=T[b];d||c.error(17,!0,this,{missingModuleFor:b});
b=new d;b.init(this,a);return b},setSeriesData:function(){this.getSeriesOrderByLinks().forEach(function(a){a.points||a.data||!a.enabledDataSorting||a.setData(a.options.data,!1)})},getSeriesOrderByLinks:function(){return this.series.concat().sort(function(a,b){return a.linkedSeries.length||b.linkedSeries.length?b.linkedSeries.length-a.linkedSeries.length:0})},orderSeries:function(a){var b=this.series;for(a=a||0;a<b.length;a++)b[a]&&(b[a].index=a,b[a].name=b[a].getName())},isInsidePlot:function(a,b,
d){var g=d?b:a;a=d?a:b;return 0<=g&&g<=this.plotWidth&&0<=a&&a<=this.plotHeight},redraw:function(a){E(this,"beforeRedraw");var d=this.axes,g=this.series,c=this.pointer,f=this.legend,e=this.userOptions.legend,h=this.isDirtyLegend,t=this.hasCartesianSeries,n=this.isDirtyBox,x=this.renderer,l=x.isHidden(),p=[];this.setResponsive&&this.setResponsive(!1);b(a,this);l&&this.temporaryDisplay();this.layOutTitles();for(a=g.length;a--;){var k=g[a];if(k.options.stacking){var m=!0;if(k.isDirty){var z=!0;break}}}if(z)for(a=
g.length;a--;)k=g[a],k.options.stacking&&(k.isDirty=!0);g.forEach(function(a){a.isDirty&&("point"===a.options.legendType?(a.updateTotals&&a.updateTotals(),h=!0):e&&(e.labelFormatter||e.labelFormat)&&(h=!0));a.isDirtyData&&E(a,"updatedData")});h&&f&&f.options.enabled&&(f.render(),this.isDirtyLegend=!1);m&&this.getStacks();t&&d.forEach(function(a){a.updateNames();a.setScale()});this.getMargins();t&&(d.forEach(function(a){a.isDirty&&(n=!0)}),d.forEach(function(a){var b=a.min+","+a.max;a.extKey!==b&&
(a.extKey=b,p.push(function(){E(a,"afterSetExtremes",q(a.eventArgs,a.getExtremes()));delete a.eventArgs}));(n||m)&&a.redraw()}));n&&this.drawChartBox();E(this,"predraw");g.forEach(function(a){(n||a.isDirty)&&a.visible&&a.redraw();a.isDirtyData=!1});c&&c.reset(!0);x.draw();E(this,"redraw");E(this,"render");l&&this.temporaryDisplay(!0);p.forEach(function(a){a.call()})},get:function(a){function b(b){return b.id===a||b.options&&b.options.id===a}var d=this.series,g;var c=L(this.axes,b)||L(this.series,
b);for(g=0;!c&&g<d.length;g++)c=L(d[g].points||[],b);return c},getAxes:function(){var b=this,d=this.options,g=d.xAxis=a(d.xAxis||{});d=d.yAxis=a(d.yAxis||{});E(this,"getAxes");g.forEach(function(a,b){a.index=b;a.isX=!0});d.forEach(function(a,b){a.index=b});g.concat(d).forEach(function(a){new y(b,a)});E(this,"afterGetAxes")},getSelectedPoints:function(){var a=[];this.series.forEach(function(b){a=a.concat((b[b.hasGroupedData?"points":"data"]||[]).filter(function(a){return D(a.selectedStaging,a.selected)}))});
return a},getSelectedSeries:function(){return this.series.filter(function(a){return a.selected})},setTitle:function(a,b,d){this.applyDescription("title",a);this.applyDescription("subtitle",b);this.applyDescription("caption",void 0);this.layOutTitles(d)},applyDescription:function(a,b){var d=this,g="title"===a?{color:"#333333",fontSize:this.options.isStock?"16px":"18px"}:{color:"#666666"};g=this.options[a]=N(!this.styledMode&&{style:g},this.options[a],b);var c=this[a];c&&b&&(this[a]=c=c.destroy());
g&&!c&&(c=this.renderer.text(g.text,0,0,g.useHTML).attr({align:g.align,"class":"highcharts-"+a,zIndex:g.zIndex||4}).add(),c.update=function(b){d[{title:"setTitle",subtitle:"setSubtitle",caption:"setCaption"}[a]](b)},this.styledMode||c.css(g.style),this[a]=c)},layOutTitles:function(a){var b=[0,0,0],d=this.renderer,g=this.spacingBox;["title","subtitle","caption"].forEach(function(a){var c=this[a],f=this.options[a],e=f.verticalAlign||"top";a="title"===a?-3:"top"===e?b[0]+2:0;if(c){if(!this.styledMode)var h=
f.style.fontSize;h=d.fontMetrics(h,c).b;c.css({width:(f.width||g.width+(f.widthAdjust||0))+"px"});var t=Math.round(c.getBBox(f.useHTML).height);c.align(q({y:"bottom"===e?h:a+h,height:t},f),!1,"spacingBox");f.floating||("top"===e?b[0]=Math.ceil(b[0]+t):"bottom"===e&&(b[2]=Math.ceil(b[2]+t)))}},this);b[0]&&"top"===(this.options.title.verticalAlign||"top")&&(b[0]+=this.options.title.margin);b[2]&&"bottom"===this.options.caption.verticalAlign&&(b[2]+=this.options.caption.margin);var c=!this.titleOffset||
this.titleOffset.join(",")!==b.join(",");this.titleOffset=b;E(this,"afterLayOutTitles");!this.isDirtyBox&&c&&(this.isDirtyBox=this.isDirtyLegend=c,this.hasRendered&&D(a,!0)&&this.isDirtyBox&&this.redraw())},getChartSize:function(){var a=this.options.chart,b=a.width;a=a.height;var d=this.renderTo;G(b)||(this.containerWidth=c.getStyle(d,"width"));G(a)||(this.containerHeight=c.getStyle(d,"height"));this.chartWidth=Math.max(0,b||this.containerWidth||600);this.chartHeight=Math.max(0,f(a,this.chartWidth)||
(1<this.containerHeight?this.containerHeight:400))},temporaryDisplay:function(a){var b=this.renderTo;if(a)for(;b&&b.style;)b.hcOrigStyle&&(c.css(b,b.hcOrigStyle),delete b.hcOrigStyle),b.hcOrigDetached&&(l.body.removeChild(b),b.hcOrigDetached=!1),b=b.parentNode;else for(;b&&b.style;){l.body.contains(b)||b.parentNode||(b.hcOrigDetached=!0,l.body.appendChild(b));if("none"===c.getStyle(b,"display",!1)||b.hcOricDetached)b.hcOrigStyle={display:b.style.display,height:b.style.height,overflow:b.style.overflow},
a={display:"block",overflow:"hidden"},b!==this.renderTo&&(a.height=0),c.css(b,a),b.offsetWidth||b.style.setProperty("display","block","important");b=b.parentNode;if(b===l.body)break}},setClassName:function(a){this.container.className="highcharts-container "+(a||"")},getContainer:function(){var a=this.options,b=a.chart;var d=this.renderTo;var g=c.uniqueKey(),f,e;d||(this.renderTo=d=b.renderTo);w(d)&&(this.renderTo=d=l.getElementById(d));d||c.error(13,!0,this);var h=A(I(d,"data-highcharts-chart"));
B(h)&&t[h]&&t[h].hasRendered&&t[h].destroy();I(d,"data-highcharts-chart",this.index);d.innerHTML="";b.skipClone||d.offsetWidth||this.temporaryDisplay();this.getChartSize();h=this.chartWidth;var n=this.chartHeight;x(d,{overflow:"hidden"});this.styledMode||(f=q({position:"relative",overflow:"hidden",width:h+"px",height:n+"px",textAlign:"left",lineHeight:"normal",zIndex:0,"-webkit-tap-highlight-color":"rgba(0,0,0,0)"},b.style));this.container=d=p("div",{id:g},f,d);this._cursor=d.style.cursor;this.renderer=
new (c[b.renderer]||c.Renderer)(d,h,n,null,b.forExport,a.exporting&&a.exporting.allowHTML,this.styledMode);this.setClassName(b.className);if(this.styledMode)for(e in a.defs)this.renderer.definition(a.defs[e]);else this.renderer.setStyle(b.style);this.renderer.chartIndex=this.index;E(this,"afterGetContainer")},getMargins:function(a){var b=this.spacing,d=this.margin,g=this.titleOffset;this.resetMargins();g[0]&&!G(d[0])&&(this.plotTop=Math.max(this.plotTop,g[0]+b[0]));g[2]&&!G(d[2])&&(this.marginBottom=
Math.max(this.marginBottom,g[2]+b[2]));this.legend&&this.legend.display&&this.legend.adjustMargins(d,b);E(this,"getMargins");a||this.getAxisMargins()},getAxisMargins:function(){var a=this,b=a.axisOffset=[0,0,0,0],d=a.colorAxis,g=a.margin,c=function(a){a.forEach(function(a){a.visible&&a.getOffset()})};a.hasCartesianSeries?c(a.axes):d&&d.length&&c(d);z.forEach(function(d,c){G(g[c])||(a[d]+=b[c])});a.setChartSize()},reflow:function(a){var b=this,g=b.options.chart,f=b.renderTo,e=G(g.width)&&G(g.height),
h=g.width||c.getStyle(f,"width");g=g.height||c.getStyle(f,"height");f=a?a.target:P;if(!e&&!b.isPrinting&&h&&g&&(f===P||f===l)){if(h!==b.containerWidth||g!==b.containerHeight)c.clearTimeout(b.reflowTimeout),b.reflowTimeout=d(function(){b.container&&b.setSize(void 0,void 0,!1)},a?100:0);b.containerWidth=h;b.containerHeight=g}},setReflow:function(a){var b=this;!1===a||this.unbindReflow?!1===a&&this.unbindReflow&&(this.unbindReflow=this.unbindReflow()):(this.unbindReflow=h(P,"resize",function(a){b.options&&
b.reflow(a)}),h(this,"destroy",this.unbindReflow))},setSize:function(a,g,c){var f=this,e=f.renderer;f.isResizing+=1;b(c,f);f.oldChartHeight=f.chartHeight;f.oldChartWidth=f.chartWidth;"undefined"!==typeof a&&(f.options.chart.width=a);"undefined"!==typeof g&&(f.options.chart.height=g);f.getChartSize();if(!f.styledMode){var h=e.globalAnimation;(h?k:x)(f.container,{width:f.chartWidth+"px",height:f.chartHeight+"px"},h)}f.setChartSize(!0);e.setSize(f.chartWidth,f.chartHeight,c);f.axes.forEach(function(a){a.isDirty=
!0;a.setScale()});f.isDirtyLegend=!0;f.isDirtyBox=!0;f.layOutTitles();f.getMargins();f.redraw(c);f.oldChartHeight=null;E(f,"resize");d(function(){f&&E(f,"endResize",null,function(){--f.isResizing})},F(h).duration||0)},setChartSize:function(a){var b=this.inverted,d=this.renderer,g=this.chartWidth,c=this.chartHeight,f=this.options.chart,e=this.spacing,h=this.clipOffset,t,n,x,l;this.plotLeft=t=Math.round(this.plotLeft);this.plotTop=n=Math.round(this.plotTop);this.plotWidth=x=Math.max(0,Math.round(g-
t-this.marginRight));this.plotHeight=l=Math.max(0,Math.round(c-n-this.marginBottom));this.plotSizeX=b?l:x;this.plotSizeY=b?x:l;this.plotBorderWidth=f.plotBorderWidth||0;this.spacingBox=d.spacingBox={x:e[3],y:e[0],width:g-e[3]-e[1],height:c-e[0]-e[2]};this.plotBox=d.plotBox={x:t,y:n,width:x,height:l};g=2*Math.floor(this.plotBorderWidth/2);b=Math.ceil(Math.max(g,h[3])/2);d=Math.ceil(Math.max(g,h[0])/2);this.clipBox={x:b,y:d,width:Math.floor(this.plotSizeX-Math.max(g,h[1])/2-b),height:Math.max(0,Math.floor(this.plotSizeY-
Math.max(g,h[2])/2-d))};a||this.axes.forEach(function(a){a.setAxisSize();a.setAxisTranslation()});E(this,"afterSetChartSize",{skipAxes:a})},resetMargins:function(){E(this,"resetMargins");var a=this,b=a.options.chart;["margin","spacing"].forEach(function(d){var g=b[d],c=u(g)?g:[g,g,g,g];["Top","Right","Bottom","Left"].forEach(function(g,f){a[d][f]=D(b[d+g],c[f])})});z.forEach(function(b,d){a[b]=D(a.margin[d],a.spacing[d])});a.axisOffset=[0,0,0,0];a.clipOffset=[0,0,0,0]},drawChartBox:function(){var a=
this.options.chart,b=this.renderer,d=this.chartWidth,g=this.chartHeight,c=this.chartBackground,f=this.plotBackground,e=this.plotBorder,h=this.styledMode,t=this.plotBGImage,n=a.backgroundColor,x=a.plotBackgroundColor,l=a.plotBackgroundImage,p,k=this.plotLeft,m=this.plotTop,z=this.plotWidth,L=this.plotHeight,r=this.plotBox,q=this.clipRect,y=this.clipBox,N="animate";c||(this.chartBackground=c=b.rect().addClass("highcharts-background").add(),N="attr");if(h)var u=p=c.strokeWidth();else{u=a.borderWidth||
0;p=u+(a.shadow?8:0);n={fill:n||"none"};if(u||c["stroke-width"])n.stroke=a.borderColor,n["stroke-width"]=u;c.attr(n).shadow(a.shadow)}c[N]({x:p/2,y:p/2,width:d-p-u%2,height:g-p-u%2,r:a.borderRadius});N="animate";f||(N="attr",this.plotBackground=f=b.rect().addClass("highcharts-plot-background").add());f[N](r);h||(f.attr({fill:x||"none"}).shadow(a.plotShadow),l&&(t?(l!==t.attr("href")&&t.attr("href",l),t.animate(r)):this.plotBGImage=b.image(l,k,m,z,L).add()));q?q.animate({width:y.width,height:y.height}):
this.clipRect=b.clipRect(y);N="animate";e||(N="attr",this.plotBorder=e=b.rect().addClass("highcharts-plot-border").attr({zIndex:1}).add());h||e.attr({stroke:a.plotBorderColor,"stroke-width":a.plotBorderWidth||0,fill:"none"});e[N](e.crisp({x:k,y:m,width:z,height:L},-e.strokeWidth()));this.isDirtyBox=!1;E(this,"afterDrawChartBox")},propFromSeries:function(){var a=this,b=a.options.chart,d,g=a.options.series,c,f;["inverted","angular","polar"].forEach(function(e){d=T[b.type||b.defaultSeriesType];f=b[e]||
d&&d.prototype[e];for(c=g&&g.length;!f&&c--;)(d=T[g[c].type])&&d.prototype[e]&&(f=!0);a[e]=f})},linkSeries:function(){var a=this,b=a.series;b.forEach(function(a){a.linkedSeries.length=0});b.forEach(function(b){var d=b.options.linkedTo;w(d)&&(d=":previous"===d?a.series[b.index-1]:a.get(d))&&d.linkedParent!==b&&(d.linkedSeries.push(b),b.linkedParent=d,d.enabledDataSorting&&b.setDataSortingOptions(),b.visible=D(b.options.visible,d.options.visible,b.visible))});E(this,"afterLinkSeries")},renderSeries:function(){this.series.forEach(function(a){a.translate();
a.render()})},renderLabels:function(){var a=this,b=a.options.labels;b.items&&b.items.forEach(function(d){var g=q(b.style,d.style),c=A(g.left)+a.plotLeft,f=A(g.top)+a.plotTop+12;delete g.left;delete g.top;a.renderer.text(d.html,c,f).attr({zIndex:2}).css(g).add()})},render:function(){var a=this.axes,b=this.colorAxis,d=this.renderer,g=this.options,c=0,f=function(a){a.forEach(function(a){a.visible&&a.render()})};this.setTitle();this.legend=new n(this,g.legend);this.getStacks&&this.getStacks();this.getMargins(!0);
this.setChartSize();g=this.plotWidth;a.some(function(a){if(a.horiz&&a.visible&&a.options.labels.enabled&&a.series.length)return c=21,!0});var e=this.plotHeight=Math.max(this.plotHeight-c,0);a.forEach(function(a){a.setScale()});this.getAxisMargins();var h=1.1<g/this.plotWidth;var t=1.05<e/this.plotHeight;if(h||t)a.forEach(function(a){(a.horiz&&h||!a.horiz&&t)&&a.setTickInterval(!0)}),this.getMargins();this.drawChartBox();this.hasCartesianSeries?f(a):b&&b.length&&f(b);this.seriesGroup||(this.seriesGroup=
d.g("series-group").attr({zIndex:3}).add());this.renderSeries();this.renderLabels();this.addCredits();this.setResponsive&&this.setResponsive();this.updateContainerScaling();this.hasRendered=!0},addCredits:function(a){var b=this;a=N(!0,this.options.credits,a);a.enabled&&!this.credits&&(this.credits=this.renderer.text(a.text+(this.mapCredits||""),0,0).addClass("highcharts-credits").on("click",function(){a.href&&(P.location.href=a.href)}).attr({align:a.position.align,zIndex:8}),b.styledMode||this.credits.css(a.style),
this.credits.add().align(a.position),this.credits.update=function(a){b.credits=b.credits.destroy();b.addCredits(a)})},updateContainerScaling:function(){var a=this.container;if(a.offsetWidth&&a.offsetHeight&&a.getBoundingClientRect){var b=a.getBoundingClientRect(),d=b.width/a.offsetWidth;a=b.height/a.offsetHeight;1!==d||1!==a?this.containerScaling={scaleX:d,scaleY:a}:delete this.containerScaling}},destroy:function(){var a=this,b=a.axes,d=a.series,g=a.container,f,e=g&&g.parentNode;E(a,"destroy");a.renderer.forExport?
v(t,a):t[a.index]=void 0;c.chartCount--;a.renderTo.removeAttribute("data-highcharts-chart");V(a);for(f=b.length;f--;)b[f]=b[f].destroy();this.scroller&&this.scroller.destroy&&this.scroller.destroy();for(f=d.length;f--;)d[f]=d[f].destroy();"title subtitle chartBackground plotBackground plotBGImage plotBorder seriesGroup clipRect credits pointer rangeSelector legend resetZoomButton tooltip renderer".split(" ").forEach(function(b){var d=a[b];d&&d.destroy&&(a[b]=d.destroy())});g&&(g.innerHTML="",V(g),
e&&H(g));r(a,function(b,d){delete a[d]})},firstRender:function(){var a=this,b=a.options;if(!a.isReadyToRender||a.isReadyToRender()){a.getContainer();a.resetMargins();a.setChartSize();a.propFromSeries();a.getAxes();(C(b.series)?b.series:[]).forEach(function(b){a.initSeries(b)});a.linkSeries();a.setSeriesData();E(a,"beforeRender");O&&(a.pointer=new O(a,b));a.render();if(!a.renderer.imgCount&&a.onload)a.onload();a.temporaryDisplay(!0)}},onload:function(){this.callbacks.concat([this.callback]).forEach(function(a){a&&
"undefined"!==typeof this.index&&a.apply(this,[this])},this);E(this,"load");E(this,"render");G(this.index)&&this.setReflow(this.options.chart.reflow);this.onload=null}})});M(J,"parts/ScrollablePlotArea.js",[J["parts/Globals.js"],J["parts/Utilities.js"]],function(c,e){var F=e.pick,I=c.addEvent;e=c.Chart;"";I(e,"afterSetChartSize",function(e){var G=this.options.chart.scrollablePlotArea,v=G&&G.minWidth;G=G&&G.minHeight;if(!this.renderer.forExport){if(v){if(this.scrollablePixelsX=v=Math.max(0,v-this.chartWidth)){this.plotWidth+=
v;this.inverted?(this.clipBox.height+=v,this.plotBox.height+=v):(this.clipBox.width+=v,this.plotBox.width+=v);var q={1:{name:"right",value:v}}}}else G&&(this.scrollablePixelsY=v=Math.max(0,G-this.chartHeight))&&(this.plotHeight+=v,this.inverted?(this.clipBox.width+=v,this.plotBox.width+=v):(this.clipBox.height+=v,this.plotBox.height+=v),q={2:{name:"bottom",value:v}});q&&!e.skipAxes&&this.axes.forEach(function(e){q[e.side]?e.getPlotLinePath=function(){var v=q[e.side].name,u=this[v];this[v]=u-q[e.side].value;
var w=c.Axis.prototype.getPlotLinePath.apply(this,arguments);this[v]=u;return w}:(e.setAxisSize(),e.setAxisTranslation())})}});I(e,"render",function(){this.scrollablePixelsX||this.scrollablePixelsY?(this.setUpScrolling&&this.setUpScrolling(),this.applyFixed()):this.fixedDiv&&this.applyFixed()});e.prototype.setUpScrolling=function(){var e={WebkitOverflowScrolling:"touch",overflowX:"hidden",overflowY:"hidden"};this.scrollablePixelsX&&(e.overflowX="auto");this.scrollablePixelsY&&(e.overflowY="auto");
this.scrollingContainer=c.createElement("div",{className:"highcharts-scrolling"},e,this.renderTo);this.innerContainer=c.createElement("div",{className:"highcharts-inner-container"},null,this.scrollingContainer);this.innerContainer.appendChild(this.container);this.setUpScrolling=null};e.prototype.moveFixedElements=function(){var c=this.container,e=this.fixedRenderer,v=".highcharts-contextbutton .highcharts-credits .highcharts-legend .highcharts-legend-checkbox .highcharts-navigator-series .highcharts-navigator-xaxis .highcharts-navigator-yaxis .highcharts-navigator .highcharts-reset-zoom .highcharts-scrollbar .highcharts-subtitle .highcharts-title".split(" "),
q;this.scrollablePixelsX&&!this.inverted?q=".highcharts-yaxis":this.scrollablePixelsX&&this.inverted?q=".highcharts-xaxis":this.scrollablePixelsY&&!this.inverted?q=".highcharts-xaxis":this.scrollablePixelsY&&this.inverted&&(q=".highcharts-yaxis");v.push(q,q+"-labels");v.forEach(function(q){[].forEach.call(c.querySelectorAll(q),function(c){(c.namespaceURI===e.SVG_NS?e.box:e.box.parentNode).appendChild(c);c.style.pointerEvents="auto"})})};e.prototype.applyFixed=function(){var e,H=!this.fixedDiv,v=this.options.chart.scrollablePlotArea;
H?(this.fixedDiv=c.createElement("div",{className:"highcharts-fixed"},{position:"absolute",overflow:"hidden",pointerEvents:"none",zIndex:2},null,!0),this.renderTo.insertBefore(this.fixedDiv,this.renderTo.firstChild),this.renderTo.style.overflow="visible",this.fixedRenderer=e=new c.Renderer(this.fixedDiv,this.chartWidth,this.chartHeight),this.scrollableMask=e.path().attr({fill:this.options.chart.backgroundColor||"#fff","fill-opacity":F(v.opacity,.85),zIndex:-1}).addClass("highcharts-scrollable-mask").add(),
this.moveFixedElements(),I(this,"afterShowResetZoom",this.moveFixedElements),I(this,"afterLayOutTitles",this.moveFixedElements)):this.fixedRenderer.setSize(this.chartWidth,this.chartHeight);e=this.chartWidth+(this.scrollablePixelsX||0);var q=this.chartHeight+(this.scrollablePixelsY||0);c.stop(this.container);this.container.style.width=e+"px";this.container.style.height=q+"px";this.renderer.boxWrapper.attr({width:e,height:q,viewBox:[0,0,e,q].join(" ")});this.chartBackground.attr({width:e,height:q});
this.scrollablePixelsY&&(this.scrollingContainer.style.height=this.chartHeight+"px");H&&(v.scrollPositionX&&(this.scrollingContainer.scrollLeft=this.scrollablePixelsX*v.scrollPositionX),v.scrollPositionY&&(this.scrollingContainer.scrollTop=this.scrollablePixelsY*v.scrollPositionY));q=this.axisOffset;H=this.plotTop-q[0]-1;v=this.plotLeft-q[3]-1;e=this.plotTop+this.plotHeight+q[2]+1;q=this.plotLeft+this.plotWidth+q[1]+1;var C=this.plotLeft+this.plotWidth-(this.scrollablePixelsX||0),B=this.plotTop+this.plotHeight-
(this.scrollablePixelsY||0);H=this.scrollablePixelsX?["M",0,H,"L",this.plotLeft-1,H,"L",this.plotLeft-1,e,"L",0,e,"Z","M",C,H,"L",this.chartWidth,H,"L",this.chartWidth,e,"L",C,e,"Z"]:this.scrollablePixelsY?["M",v,0,"L",v,this.plotTop-1,"L",q,this.plotTop-1,"L",q,0,"Z","M",v,B,"L",v,this.chartHeight,"L",q,this.chartHeight,"L",q,B,"Z"]:["M",0,0];"adjustHeight"!==this.redrawTrigger&&this.scrollableMask.attr({d:H})}});M(J,"parts/Point.js",[J["parts/Globals.js"],J["parts/Utilities.js"]],function(c,e){var F=
e.animObject,I=e.defined,G=e.erase,H=e.extend,v=e.isArray,q=e.isNumber,C=e.isObject,B=e.syncTimeout,u=e.pick,w,m=c.fireEvent,r=c.format,D=c.uniqueKey,A=c.removeEvent;c.Point=w=function(){};c.Point.prototype={init:function(c,b,a){this.series=c;this.applyOptions(b,a);this.id=I(this.id)?this.id:D();this.resolveColor();c.chart.pointCount++;m(this,"afterInit");return this},resolveColor:function(){var c=this.series;var b=c.chart.options.chart.colorCount;var a=c.chart.styledMode;a||this.options.color||(this.color=
c.color);c.options.colorByPoint?(a||(b=c.options.colors||c.chart.options.colors,this.color=this.color||b[c.colorCounter],b=b.length),a=c.colorCounter,c.colorCounter++,c.colorCounter===b&&(c.colorCounter=0)):a=c.colorIndex;this.colorIndex=u(this.colorIndex,a)},applyOptions:function(c,b){var a=this.series,d=a.options.pointValKey||a.pointValKey;c=w.prototype.optionsToObject.call(this,c);H(this,c);this.options=this.options?H(this.options,c):c;c.group&&delete this.group;c.dataLabels&&delete this.dataLabels;
d&&(this.y=this[d]);this.formatPrefix=(this.isNull=u(this.isValid&&!this.isValid(),null===this.x||!q(this.y)))?"null":"point";this.selected&&(this.state="select");"name"in this&&"undefined"===typeof b&&a.xAxis&&a.xAxis.hasNames&&(this.x=a.xAxis.nameToX(this));"undefined"===typeof this.x&&a&&(this.x="undefined"===typeof b?a.autoIncrement(this):b);return this},setNestedProperty:function(c,b,a){a.split(".").reduce(function(a,c,f,e){a[c]=e.length-1===f?b:C(a[c],!0)?a[c]:{};return a[c]},c);return c},optionsToObject:function(f){var b=
{},a=this.series,d=a.options.keys,e=d||a.pointArrayMap||["y"],k=e.length,l=0,m=0;if(q(f)||null===f)b[e[0]]=f;else if(v(f))for(!d&&f.length>k&&(a=typeof f[0],"string"===a?b.name=f[0]:"number"===a&&(b.x=f[0]),l++);m<k;)d&&"undefined"===typeof f[l]||(0<e[m].indexOf(".")?c.Point.prototype.setNestedProperty(b,f[l],e[m]):b[e[m]]=f[l]),l++,m++;else"object"===typeof f&&(b=f,f.dataLabels&&(a._hasPointLabels=!0),f.marker&&(a._hasPointMarkers=!0));return b},getClassName:function(){return"highcharts-point"+(this.selected?
" highcharts-point-select":"")+(this.negative?" highcharts-negative":"")+(this.isNull?" highcharts-null-point":"")+("undefined"!==typeof this.colorIndex?" highcharts-color-"+this.colorIndex:"")+(this.options.className?" "+this.options.className:"")+(this.zone&&this.zone.className?" "+this.zone.className.replace("highcharts-negative",""):"")},getZone:function(){var c=this.series,b=c.zones;c=c.zoneAxis||"y";var a=0,d;for(d=b[a];this[c]>=d.value;)d=b[++a];this.nonZonedColor||(this.nonZonedColor=this.color);
this.color=d&&d.color&&!this.options.color?d.color:this.nonZonedColor;return d},hasNewShapeType:function(){return(this.graphic&&(this.graphic.symbolName||this.graphic.element.nodeName))!==this.shapeType},destroy:function(){function c(){e&&(b.setState(),G(e,b),e.length||(d.hoverPoints=null));if(b===d.hoverPoint)b.onMouseOut();if(b.graphic||b.dataLabel||b.dataLabels)A(b),b.destroyElements();for(l in b)b[l]=null}var b=this,a=b.series,d=a.chart;a=a.options.dataSorting;var e=d.hoverPoints,k=F(b.series.chart.renderer.globalAnimation),
l;a&&a.enabled?(this.animateBeforeDestroy(),B(c,k.duration)):c();d.pointCount--;b.legendItem&&d.legend.destroyItem(b)},animateBeforeDestroy:function(){var c=this,b={x:c.startXPos,opacity:0},a,d=c.getGraphicalProps();d.singular.forEach(function(d){a="dataLabel"===d;c[d]=c[d].animate(a?{x:c[d].startXPos,y:c[d].startYPos,opacity:0}:b)});d.plural.forEach(function(a){c[a].forEach(function(a){a.element&&a.animate(H({x:c.startXPos},a.startYPos?{x:a.startXPos,y:a.startYPos}:{}))})})},destroyElements:function(c){var b=
this;c=b.getGraphicalProps(c);c.singular.forEach(function(a){b[a]=b[a].destroy()});c.plural.forEach(function(a){b[a].forEach(function(a){a.element&&a.destroy()});delete b[a]})},getGraphicalProps:function(c){var b=this,a=[],d,f={singular:[],plural:[]};c=c||{graphic:1,dataLabel:1};c.graphic&&a.push("graphic","shadowGroup");c.dataLabel&&a.push("dataLabel","dataLabelUpper","connector");for(d=a.length;d--;){var e=a[d];b[e]&&f.singular.push(e)}["dataLabel","connector"].forEach(function(a){var d=a+"s";c[a]&&
b[d]&&f.plural.push(d)});return f},getLabelConfig:function(){return{x:this.category,y:this.y,color:this.color,colorIndex:this.colorIndex,key:this.name||this.category,series:this.series,point:this,percentage:this.percentage,total:this.total||this.stackTotal}},tooltipFormatter:function(c){var b=this.series,a=b.tooltipOptions,d=u(a.valueDecimals,""),f=a.valuePrefix||"",e=a.valueSuffix||"";b.chart.styledMode&&(c=b.chart.tooltip.styledModeFormat(c));(b.pointArrayMap||["y"]).forEach(function(a){a="{point."+
a;if(f||e)c=c.replace(RegExp(a+"}","g"),f+a+"}"+e);c=c.replace(RegExp(a+"}","g"),a+":,."+d+"f}")});return r(c,{point:this,series:this.series},b.chart)},firePointEvent:function(c,b,a){var d=this,f=this.series.options;(f.point.events[c]||d.options&&d.options.events&&d.options.events[c])&&this.importEvents();"click"===c&&f.allowPointSelect&&(a=function(a){d.select&&d.select(null,a.ctrlKey||a.metaKey||a.shiftKey)});m(this,c,b,a)},visible:!0}});M(J,"parts/Series.js",[J["parts/Globals.js"],J["parts/Utilities.js"]],
function(c,e){var F=e.animObject,I=e.arrayMax,G=e.arrayMin,H=e.clamp,v=e.correctFloat,q=e.defined,C=e.erase,B=e.extend,u=e.isArray,w=e.isNumber,m=e.isString,r=e.objectEach,D=e.pick,A=e.splat,f=e.syncTimeout,b=c.addEvent,a=c.defaultOptions,d=c.defaultPlotOptions,h=c.fireEvent,k=c.merge,l=c.removeEvent,y=c.SVGElement,p=c.win;c.Series=c.seriesType("line",null,{lineWidth:2,allowPointSelect:!1,showCheckbox:!1,animation:{duration:1E3},events:{},marker:{enabledThreshold:2,lineColor:"#ffffff",lineWidth:0,
radius:4,states:{normal:{animation:!0},hover:{animation:{duration:50},enabled:!0,radiusPlus:2,lineWidthPlus:1},select:{fillColor:"#cccccc",lineColor:"#000000",lineWidth:2}}},point:{events:{}},dataLabels:{align:"center",formatter:function(){var a=this.series.chart.numberFormatter;return null===this.y?"":a(this.y,-1)},padding:5,style:{fontSize:"11px",fontWeight:"bold",color:"contrast",textOutline:"1px contrast"},verticalAlign:"bottom",x:0,y:0},cropThreshold:300,opacity:1,pointRange:0,softThreshold:!0,
states:{normal:{animation:!0},hover:{animation:{duration:50},lineWidthPlus:1,marker:{},halo:{size:10,opacity:.25}},select:{animation:{duration:0}},inactive:{animation:{duration:50},opacity:.2}},stickyTracking:!0,turboThreshold:1E3,findNearestPointBy:"x"},{axisTypes:["xAxis","yAxis"],coll:"series",colorCounter:0,cropShoulder:1,directTouch:!1,eventsToUnbind:[],isCartesian:!0,parallelArrays:["x","y"],pointClass:c.Point,requireSorting:!0,sorted:!0,init:function(a,d){h(this,"init",{options:d});var g=this,
f=a.series,e;this.eventOptions=this.eventOptions||{};g.chart=a;g.options=d=g.setOptions(d);g.linkedSeries=[];g.bindAxes();B(g,{name:d.name,state:"",visible:!1!==d.visible,selected:!0===d.selected});var t=d.events;r(t,function(a,d){c.isFunction(a)&&g.eventOptions[d]!==a&&(c.isFunction(g.eventOptions[d])&&l(g,d,g.eventOptions[d]),g.eventOptions[d]=a,b(g,d,a))});if(t&&t.click||d.point&&d.point.events&&d.point.events.click||d.allowPointSelect)a.runTrackerClick=!0;g.getColor();g.getSymbol();g.parallelArrays.forEach(function(a){g[a+
"Data"]||(g[a+"Data"]=[])});g.isCartesian&&(a.hasCartesianSeries=!0);f.length&&(e=f[f.length-1]);g._i=D(e&&e._i,-1)+1;a.orderSeries(this.insert(f));d.dataSorting&&d.dataSorting.enabled?g.setDataSortingOptions():g.points||g.data||g.setData(d.data,!1);h(this,"afterInit")},insert:function(a){var b=this.options.index,d;if(w(b)){for(d=a.length;d--;)if(b>=D(a[d].options.index,a[d]._i)){a.splice(d+1,0,this);break}-1===d&&a.unshift(this);d+=1}else a.push(this);return D(d,a.length-1)},bindAxes:function(){var a=
this,b=a.options,d=a.chart,f;h(this,"bindAxes",null,function(){(a.axisTypes||[]).forEach(function(g){d[g].forEach(function(d){f=d.options;if(b[g]===f.index||"undefined"!==typeof b[g]&&b[g]===f.id||"undefined"===typeof b[g]&&0===f.index)a.insert(d.series),a[g]=d,d.isDirty=!0});a[g]||a.optionalAxis===g||c.error(18,!0,d)})})},updateParallelArrays:function(a,b){var d=a.series,c=arguments,g=w(b)?function(c){var g="y"===c&&d.toYData?d.toYData(a):a[c];d[c+"Data"][b]=g}:function(a){Array.prototype[b].apply(d[a+
"Data"],Array.prototype.slice.call(c,2))};d.parallelArrays.forEach(g)},hasData:function(){return this.visible&&"undefined"!==typeof this.dataMax&&"undefined"!==typeof this.dataMin||this.visible&&this.yData&&0<this.yData.length},autoIncrement:function(){var a=this.options,b=this.xIncrement,d,c=a.pointIntervalUnit,f=this.chart.time;b=D(b,a.pointStart,0);this.pointInterval=d=D(this.pointInterval,a.pointInterval,1);c&&(a=new f.Date(b),"day"===c?f.set("Date",a,f.get("Date",a)+d):"month"===c?f.set("Month",
a,f.get("Month",a)+d):"year"===c&&f.set("FullYear",a,f.get("FullYear",a)+d),d=a.getTime()-b);this.xIncrement=b+d;return b},setDataSortingOptions:function(){var a=this.options;B(this,{requireSorting:!1,sorted:!1,enabledDataSorting:!0,allowDG:!1});q(a.pointRange)||(a.pointRange=1)},setOptions:function(b){var d=this.chart,c=d.options,g=c.plotOptions,f=d.userOptions||{};b=k(b);d=d.styledMode;var e={plotOptions:g,userOptions:b};h(this,"setOptions",e);var l=e.plotOptions[this.type],p=f.plotOptions||{};
this.userOptions=e.userOptions;f=k(l,g.series,f.plotOptions&&f.plotOptions[this.type],b);this.tooltipOptions=k(a.tooltip,a.plotOptions.series&&a.plotOptions.series.tooltip,a.plotOptions[this.type].tooltip,c.tooltip.userOptions,g.series&&g.series.tooltip,g[this.type].tooltip,b.tooltip);this.stickyTracking=D(b.stickyTracking,p[this.type]&&p[this.type].stickyTracking,p.series&&p.series.stickyTracking,this.tooltipOptions.shared&&!this.noSharedTooltip?!0:f.stickyTracking);null===l.marker&&delete f.marker;
this.zoneAxis=f.zoneAxis;c=this.zones=(f.zones||[]).slice();!f.negativeColor&&!f.negativeFillColor||f.zones||(g={value:f[this.zoneAxis+"Threshold"]||f.threshold||0,className:"highcharts-negative"},d||(g.color=f.negativeColor,g.fillColor=f.negativeFillColor),c.push(g));c.length&&q(c[c.length-1].value)&&c.push(d?{}:{color:this.color,fillColor:this.fillColor});h(this,"afterSetOptions",{options:f});return f},getName:function(){return D(this.options.name,"Series "+(this.index+1))},getCyclic:function(a,
b,d){var c=this.chart,g=this.userOptions,f=a+"Index",e=a+"Counter",h=d?d.length:D(c.options.chart[a+"Count"],c[a+"Count"]);if(!b){var t=D(g[f],g["_"+f]);q(t)||(c.series.length||(c[e]=0),g["_"+f]=t=c[e]%h,c[e]+=1);d&&(b=d[t])}"undefined"!==typeof t&&(this[f]=t);this[a]=b},getColor:function(){this.chart.styledMode?this.getCyclic("color"):this.options.colorByPoint?this.options.color=null:this.getCyclic("color",this.options.color||d[this.type].color,this.chart.options.colors)},getSymbol:function(){this.getCyclic("symbol",
this.options.marker.symbol,this.chart.options.symbols)},findPointIndex:function(a,b){var d=a.id,g=a.x,f=this.points,e,h=this.options.dataSorting;if(d)var t=this.chart.get(d);else if(this.linkedParent||this.enabledDataSorting){var l=h&&h.matchByName?"name":"index";t=c.find(f,function(b){return!b.touched&&b[l]===a[l]});if(!t)return}if(t){var p=t&&t.index;"undefined"!==typeof p&&(e=!0)}"undefined"===typeof p&&w(g)&&(p=this.xData.indexOf(g,b));-1!==p&&"undefined"!==typeof p&&this.cropped&&(p=p>=this.cropStart?
p-this.cropStart:p);!e&&f[p]&&f[p].touched&&(p=void 0);return p},drawLegendSymbol:c.LegendSymbolMixin.drawLineMarker,updateData:function(a,b){var d=this.options,c=d.dataSorting,g=this.points,f=[],e,h,t,l=this.requireSorting,p=a.length===g.length,m=!0;this.xIncrement=null;a.forEach(function(a,b){var h=q(a)&&this.pointClass.prototype.optionsToObject.call({series:this},a)||{};var n=h.x;if(h.id||w(n)){if(n=this.findPointIndex(h,t),-1===n||"undefined"===typeof n?f.push(a):g[n]&&a!==d.data[n]?(g[n].update(a,
!1,null,!1),g[n].touched=!0,l&&(t=n+1)):g[n]&&(g[n].touched=!0),!p||b!==n||c&&c.enabled||this.hasDerivedData)e=!0}else f.push(a)},this);if(e)for(a=g.length;a--;)(h=g[a])&&!h.touched&&h.remove&&h.remove(!1,b);else!p||c&&c.enabled?m=!1:(a.forEach(function(a,b){g[b].update&&a!==g[b].y&&g[b].update(a,!1,null,!1)}),f.length=0);g.forEach(function(a){a&&(a.touched=!1)});if(!m)return!1;f.forEach(function(a){this.addPoint(a,!1,null,null,!1)},this);null===this.xIncrement&&this.xData&&this.xData.length&&(this.xIncrement=
I(this.xData),this.autoIncrement());return!0},setData:function(a,b,d,f){var g=this,e=g.points,h=e&&e.length||0,t,l=g.options,p=g.chart,x=l.dataSorting,k=null,r=g.xAxis;k=l.turboThreshold;var L=this.xData,q=this.yData,y=(t=g.pointArrayMap)&&t.length,v=l.keys,A=0,B=1,C;a=a||[];t=a.length;b=D(b,!0);x&&x.enabled&&(a=this.sortData(a));!1!==f&&t&&h&&!g.cropped&&!g.hasGroupedData&&g.visible&&!g.isSeriesBoosting&&(C=this.updateData(a,d));if(!C){g.xIncrement=null;g.colorCounter=0;this.parallelArrays.forEach(function(a){g[a+
"Data"].length=0});if(k&&t>k)if(k=g.getFirstValidPoint(a),w(k))for(d=0;d<t;d++)L[d]=this.autoIncrement(),q[d]=a[d];else if(u(k))if(y)for(d=0;d<t;d++)f=a[d],L[d]=f[0],q[d]=f.slice(1,y+1);else for(v&&(A=v.indexOf("x"),B=v.indexOf("y"),A=0<=A?A:0,B=0<=B?B:1),d=0;d<t;d++)f=a[d],L[d]=f[A],q[d]=f[B];else c.error(12,!1,p);else for(d=0;d<t;d++)"undefined"!==typeof a[d]&&(f={series:g},g.pointClass.prototype.applyOptions.apply(f,[a[d]]),g.updateParallelArrays(f,d));q&&m(q[0])&&c.error(14,!0,p);g.data=[];g.options.data=
g.userOptions.data=a;for(d=h;d--;)e[d]&&e[d].destroy&&e[d].destroy();r&&(r.minRange=r.userMinRange);g.isDirty=p.isDirtyBox=!0;g.isDirtyData=!!e;d=!1}"point"===l.legendType&&(this.processData(),this.generatePoints());b&&p.redraw(d)},sortData:function(a){var b=this,d=b.options.dataSorting.sortKey||"y",c=function(a,b){return q(b)&&a.pointClass.prototype.optionsToObject.call({series:a},b)||{}};a.forEach(function(d,g){a[g]=c(b,d);a[g].index=g},this);a.concat().sort(function(a,b){return w(b[d])?b[d]-a[d]:
-1}).forEach(function(a,b){a.x=b},this);b.linkedSeries&&b.linkedSeries.forEach(function(b){var d=b.options,g=d.data;d.dataSorting&&d.dataSorting.enabled||!g||(g.forEach(function(d,f){g[f]=c(b,d);a[f]&&(g[f].x=a[f].x,g[f].index=f)}),b.setData(g,!1))});return a},processData:function(a){var b=this.xData,d=this.yData,g=b.length;var f=0;var e=this.xAxis,h=this.options;var l=h.cropThreshold;var p=this.getExtremesFromAll||h.getExtremesFromAll,m=this.isCartesian;h=e&&e.val2lin;var k=e&&e.isLog,r=this.requireSorting;
if(m&&!this.isDirty&&!e.isDirty&&!this.yAxis.isDirty&&!a)return!1;if(e){a=e.getExtremes();var q=a.min;var y=a.max}if(m&&this.sorted&&!p&&(!l||g>l||this.forceCrop))if(b[g-1]<q||b[0]>y)b=[],d=[];else if(this.yData&&(b[0]<q||b[g-1]>y)){f=this.cropData(this.xData,this.yData,q,y);b=f.xData;d=f.yData;f=f.start;var u=!0}for(l=b.length||1;--l;)if(g=k?h(b[l])-h(b[l-1]):b[l]-b[l-1],0<g&&("undefined"===typeof w||g<w))var w=g;else 0>g&&r&&(c.error(15,!1,this.chart),r=!1);this.cropped=u;this.cropStart=f;this.processedXData=
b;this.processedYData=d;this.closestPointRange=this.basePointRange=w},cropData:function(a,b,d,c,f){var g=a.length,e=0,h=g,t;f=D(f,this.cropShoulder);for(t=0;t<g;t++)if(a[t]>=d){e=Math.max(0,t-f);break}for(d=t;d<g;d++)if(a[d]>c){h=d+f;break}return{xData:a.slice(e,h),yData:b.slice(e,h),start:e,end:h}},generatePoints:function(){var a=this.options,b=a.data,d=this.data,c,f=this.processedXData,e=this.processedYData,l=this.pointClass,p=f.length,m=this.cropStart||0,k=this.hasGroupedData;a=a.keys;var r=[],
q;d||k||(d=[],d.length=b.length,d=this.data=d);a&&k&&(this.options.keys=!1);for(q=0;q<p;q++){var y=m+q;if(k){var u=(new l).init(this,[f[q]].concat(A(e[q])));u.dataGroup=this.groupMap[q];u.dataGroup.options&&(u.options=u.dataGroup.options,B(u,u.dataGroup.options),delete u.dataLabels)}else(u=d[y])||"undefined"===typeof b[y]||(d[y]=u=(new l).init(this,b[y],f[q]));u&&(u.index=y,r[q]=u)}this.options.keys=a;if(d&&(p!==(c=d.length)||k))for(q=0;q<c;q++)q!==m||k||(q+=p),d[q]&&(d[q].destroyElements(),d[q].plotX=
void 0);this.data=d;this.points=r;h(this,"afterGeneratePoints")},getXExtremes:function(a){return{min:G(a),max:I(a)}},getExtremes:function(a){var b=this.xAxis,d=this.yAxis,c=this.processedXData||this.xData,g=[],f=0,e=0;var l=0;var p=this.requireSorting?this.cropShoulder:0,m=d?d.positiveValuesOnly:!1,k;a=a||this.stackedYData||this.processedYData||[];d=a.length;b&&(l=b.getExtremes(),e=l.min,l=l.max);for(k=0;k<d;k++){var r=c[k];var q=a[k];var y=(w(q)||u(q))&&(q.length||0<q||!m);r=this.getExtremesFromAll||
this.options.getExtremesFromAll||this.cropped||!b||(c[k+p]||r)>=e&&(c[k-p]||r)<=l;if(y&&r)if(y=q.length)for(;y--;)w(q[y])&&(g[f++]=q[y]);else g[f++]=q}this.dataMin=G(g);this.dataMax=I(g);h(this,"afterGetExtremes")},getFirstValidPoint:function(a){for(var b=null,d=a.length,c=0;null===b&&c<d;)b=a[c],c++;return b},translate:function(){this.processedXData||this.processData();this.generatePoints();var a=this.options,b=a.stacking,d=this.xAxis,c=d.categories,f=this.enabledDataSorting,e=this.yAxis,l=this.points,
p=l.length,k=!!this.modifyValue,m,r=this.pointPlacementToXValue(),y=w(r),A=a.threshold,B=a.startFromThreshold?A:0,C,G=this.zoneAxis||"y",I=Number.MAX_VALUE;for(m=0;m<p;m++){var F=l[m],J=F.x;var W=F.y;var M=F.low,Z=b&&e.stacks[(this.negStacks&&W<(B?0:A)?"-":"")+this.stackKey];e.positiveValuesOnly&&null!==W&&0>=W&&(F.isNull=!0);F.plotX=C=v(H(d.translate(J,0,0,0,1,r,"flags"===this.type),-1E5,1E5));if(b&&this.visible&&Z&&Z[J]){var S=this.getStackIndicator(S,J,this.index);if(!F.isNull){var Y=Z[J];var ba=
Y.points[S.key]}}u(ba)&&(M=ba[0],W=ba[1],M===B&&S.key===Z[J].base&&(M=D(w(A)&&A,e.min)),e.positiveValuesOnly&&0>=M&&(M=null),F.total=F.stackTotal=Y.total,F.percentage=Y.total&&F.y/Y.total*100,F.stackY=W,this.irregularWidths||Y.setOffset(this.pointXOffset||0,this.barW||0));F.yBottom=q(M)?H(e.translate(M,0,1,0,1),-1E5,1E5):null;k&&(W=this.modifyValue(W,F));F.plotY=W="number"===typeof W&&Infinity!==W?H(e.translate(W,0,1,0,1),-1E5,1E5):void 0;F.isInside="undefined"!==typeof W&&0<=W&&W<=e.len&&0<=C&&C<=
d.len;F.clientX=y?v(d.translate(J,0,0,0,1,r)):C;F.negative=F[G]<(a[G+"Threshold"]||A||0);F.category=c&&"undefined"!==typeof c[F.x]?c[F.x]:F.x;if(!F.isNull&&!1!==F.visible){"undefined"!==typeof ca&&(I=Math.min(I,Math.abs(C-ca)));var ca=C}F.zone=this.zones.length&&F.getZone();!F.graphic&&this.group&&f&&(F.isNew=!0)}this.closestPointRangePx=I;h(this,"afterTranslate")},getValidPoints:function(a,b,d){var c=this.chart;return(a||this.points||[]).filter(function(a){return b&&!c.isInsidePlot(a.plotX,a.plotY,
c.inverted)?!1:!1!==a.visible&&(d||!a.isNull)})},getClipBox:function(a,b){var d=this.options,c=this.chart,g=c.inverted,f=this.xAxis,e=f&&this.yAxis;a&&!1===d.clip&&e?a=g?{y:-c.chartWidth+e.len+e.pos,height:c.chartWidth,width:c.chartHeight,x:-c.chartHeight+f.len+f.pos}:{y:-e.pos,height:c.chartHeight,width:c.chartWidth,x:-f.pos}:(a=this.clipBox||c.clipBox,b&&(a.width=c.plotSizeX,a.x=0));return b?{width:a.width,x:a.x}:a},setClip:function(a){var b=this.chart,d=this.options,c=b.renderer,g=b.inverted,f=
this.clipBox,e=this.getClipBox(a),h=this.sharedClipKey||["_sharedClip",a&&a.duration,a&&a.easing,e.height,d.xAxis,d.yAxis].join(),l=b[h],p=b[h+"m"];l||(a&&(e.width=0,g&&(e.x=b.plotSizeX+(!1!==d.clip?0:b.plotTop)),b[h+"m"]=p=c.clipRect(g?b.plotSizeX+99:-99,g?-b.plotLeft:-b.plotTop,99,g?b.chartWidth:b.chartHeight)),b[h]=l=c.clipRect(e),l.count={length:0});a&&!l.count[this.index]&&(l.count[this.index]=!0,l.count.length+=1);if(!1!==d.clip||a)this.group.clip(a||f?l:b.clipRect),this.markerGroup.clip(p),
this.sharedClipKey=h;a||(l.count[this.index]&&(delete l.count[this.index],--l.count.length),0===l.count.length&&h&&b[h]&&(f||(b[h]=b[h].destroy()),b[h+"m"]&&(b[h+"m"]=b[h+"m"].destroy())))},animate:function(a){var b=this.chart,d=F(this.options.animation);if(a)this.setClip(d);else{var c=this.sharedClipKey;a=b[c];var g=this.getClipBox(d,!0);a&&a.animate(g,d);b[c+"m"]&&b[c+"m"].animate({width:g.width+99,x:g.x-(b.inverted?0:99)},d);this.animate=null}},afterAnimate:function(){this.setClip();h(this,"afterAnimate");
this.finishedAnimating=!0},drawPoints:function(){var a=this.points,b=this.chart,d,c,f=this.options.marker,e=this[this.specialGroup]||this.markerGroup,h=this.xAxis,l=D(f.enabled,!h||h.isRadial?!0:null,this.closestPointRangePx>=f.enabledThreshold*f.radius);if(!1!==f.enabled||this._hasPointMarkers)for(d=0;d<a.length;d++){var p=a[d];var m=(c=p.graphic)?"animate":"attr";var k=p.marker||{};var r=!!p.marker;if((l&&"undefined"===typeof k.enabled||k.enabled)&&!p.isNull&&!1!==p.visible){var q=D(k.symbol,this.symbol);
var y=this.markerAttribs(p,p.selected&&"select");this.enabledDataSorting&&(p.startXPos=h.reversed?-y.width:h.width);var u=!1!==p.isInside;c?c[u?"show":"hide"](u).animate(y):u&&(0<y.width||p.hasImage)&&(p.graphic=c=b.renderer.symbol(q,y.x,y.y,y.width,y.height,r?k:f).add(e),this.enabledDataSorting&&b.hasRendered&&(c.attr({x:p.startXPos}),m="animate"));c&&"animate"===m&&c[u?"show":"hide"](u).animate(y);if(c&&!b.styledMode)c[m](this.pointAttribs(p,p.selected&&"select"));c&&c.addClass(p.getClassName(),
!0)}else c&&(p.graphic=c.destroy())}},markerAttribs:function(a,b){var d=this.options.marker,c=a.marker||{},g=c.symbol||d.symbol,f=D(c.radius,d.radius);b&&(d=d.states[b],b=c.states&&c.states[b],f=D(b&&b.radius,d&&d.radius,f+(d&&d.radiusPlus||0)));a.hasImage=g&&0===g.indexOf("url");a.hasImage&&(f=0);a={x:Math.floor(a.plotX)-f,y:a.plotY-f};f&&(a.width=a.height=2*f);return a},pointAttribs:function(a,b){var d=this.options.marker,c=a&&a.options,g=c&&c.marker||{},f=this.color,e=c&&c.color,h=a&&a.color;c=
D(g.lineWidth,d.lineWidth);var l=a&&a.zone&&a.zone.color;a=1;f=e||l||h||f;e=g.fillColor||d.fillColor||f;f=g.lineColor||d.lineColor||f;b=b||"normal";d=d.states[b];b=g.states&&g.states[b]||{};c=D(b.lineWidth,d.lineWidth,c+D(b.lineWidthPlus,d.lineWidthPlus,0));e=b.fillColor||d.fillColor||e;f=b.lineColor||d.lineColor||f;a=D(b.opacity,d.opacity,a);return{stroke:f,"stroke-width":c,fill:e,opacity:a}},destroy:function(a){var b=this,d=b.chart,g=/AppleWebKit\/533/.test(p.navigator.userAgent),f,e,l=b.data||
[],k,m;h(b,"destroy");this.removeEvents(a);(b.axisTypes||[]).forEach(function(a){(m=b[a])&&m.series&&(C(m.series,b),m.isDirty=m.forceRedraw=!0)});b.legendItem&&b.chart.legend.destroyItem(b);for(e=l.length;e--;)(k=l[e])&&k.destroy&&k.destroy();b.points=null;c.clearTimeout(b.animationTimeout);r(b,function(a,b){a instanceof y&&!a.survive&&(f=g&&"group"===b?"hide":"destroy",a[f]())});d.hoverSeries===b&&(d.hoverSeries=null);C(d.series,b);d.orderSeries();r(b,function(d,c){a&&"hcEvents"===c||delete b[c]})},
getGraphPath:function(a,b,d){var c=this,f=c.options,g=f.step,e,h=[],l=[],p;a=a||c.points;(e=a.reversed)&&a.reverse();(g={right:1,center:2}[g]||g&&3)&&e&&(g=4-g);a=this.getValidPoints(a,!1,!(f.connectNulls&&!b&&!d));a.forEach(function(e,n){var t=e.plotX,m=e.plotY,k=a[n-1];(e.leftCliff||k&&k.rightCliff)&&!d&&(p=!0);e.isNull&&!q(b)&&0<n?p=!f.connectNulls:e.isNull&&!b?p=!0:(0===n||p?n=["M",e.plotX,e.plotY]:c.getPointSpline?n=c.getPointSpline(a,e,n):g?(n=1===g?["L",k.plotX,m]:2===g?["L",(k.plotX+t)/2,
k.plotY,"L",(k.plotX+t)/2,m]:["L",t,k.plotY],n.push("L",t,m)):n=["L",t,m],l.push(e.x),g&&(l.push(e.x),2===g&&l.push(e.x)),h.push.apply(h,n),p=!1)});h.xMap=l;return c.graphPath=h},drawGraph:function(){var a=this,b=this.options,d=(this.gappedPath||this.getGraphPath).call(this),c=this.chart.styledMode,f=[["graph","highcharts-graph"]];c||f[0].push(b.lineColor||this.color||"#cccccc",b.dashStyle);f=a.getZonesGraphs(f);f.forEach(function(f,g){var e=f[0],h=a[e],l=h?"animate":"attr";h?(h.endX=a.preventGraphAnimation?
null:d.xMap,h.animate({d:d})):d.length&&(a[e]=h=a.chart.renderer.path(d).addClass(f[1]).attr({zIndex:1}).add(a.group));h&&!c&&(e={stroke:f[2],"stroke-width":b.lineWidth,fill:a.fillGraph&&a.color||"none"},f[3]?e.dashstyle=f[3]:"square"!==b.linecap&&(e["stroke-linecap"]=e["stroke-linejoin"]="round"),h[l](e).shadow(2>g&&b.shadow));h&&(h.startX=d.xMap,h.isArea=d.isArea)})},getZonesGraphs:function(a){this.zones.forEach(function(b,d){d=["zone-graph-"+d,"highcharts-graph highcharts-zone-graph-"+d+" "+(b.className||
"")];this.chart.styledMode||d.push(b.color||this.color,b.dashStyle||this.options.dashStyle);a.push(d)},this);return a},applyZones:function(){var a=this,b=this.chart,d=b.renderer,c=this.zones,f,e,h=this.clips||[],l,p=this.graph,k=this.area,m=Math.max(b.chartWidth,b.chartHeight),r=this[(this.zoneAxis||"y")+"Axis"],q=b.inverted,y,u,w,v=!1;if(c.length&&(p||k)&&r&&"undefined"!==typeof r.min){var A=r.reversed;var C=r.horiz;p&&!this.showLine&&p.hide();k&&k.hide();var B=r.getExtremes();c.forEach(function(c,
g){f=A?C?b.plotWidth:0:C?0:r.toPixels(B.min)||0;f=H(D(e,f),0,m);e=H(Math.round(r.toPixels(D(c.value,B.max),!0)||0),0,m);v&&(f=e=r.toPixels(B.max));y=Math.abs(f-e);u=Math.min(f,e);w=Math.max(f,e);r.isXAxis?(l={x:q?w:u,y:0,width:y,height:m},C||(l.x=b.plotHeight-l.x)):(l={x:0,y:q?w:u,width:m,height:y},C&&(l.y=b.plotWidth-l.y));q&&d.isVML&&(l=r.isXAxis?{x:0,y:A?u:w,height:l.width,width:b.chartWidth}:{x:l.y-b.plotLeft-b.spacingBox.x,y:0,width:l.height,height:b.chartHeight});h[g]?h[g].animate(l):h[g]=d.clipRect(l);
p&&a["zone-graph-"+g].clip(h[g]);k&&a["zone-area-"+g].clip(h[g]);v=c.value>B.max;a.resetZones&&0===e&&(e=void 0)});this.clips=h}else a.visible&&(p&&p.show(!0),k&&k.show(!0))},invertGroups:function(a){function d(){["group","markerGroup"].forEach(function(b){c[b]&&(f.renderer.isVML&&c[b].attr({width:c.yAxis.len,height:c.xAxis.len}),c[b].width=c.yAxis.len,c[b].height=c.xAxis.len,c[b].invert(c.isRadialSeries?!1:a))})}var c=this,f=c.chart;c.xAxis&&(c.eventsToUnbind.push(b(f,"resize",d)),d(),c.invertGroups=
d)},plotGroup:function(a,b,d,c,f){var g=this[a],e=!g;e&&(this[a]=g=this.chart.renderer.g().attr({zIndex:c||.1}).add(f));g.addClass("highcharts-"+b+" highcharts-series-"+this.index+" highcharts-"+this.type+"-series "+(q(this.colorIndex)?"highcharts-color-"+this.colorIndex+" ":"")+(this.options.className||"")+(g.hasClass("highcharts-tracker")?" highcharts-tracker":""),!0);g.attr({visibility:d})[e?"attr":"animate"](this.getPlotBox());return g},getPlotBox:function(){var a=this.chart,b=this.xAxis,d=this.yAxis;
a.inverted&&(b=d,d=this.xAxis);return{translateX:b?b.left:a.plotLeft,translateY:d?d.top:a.plotTop,scaleX:1,scaleY:1}},removeEvents:function(a){a?this.eventsToUnbind.length&&(this.eventsToUnbind.forEach(function(a){a()}),this.eventsToUnbind.length=0):l(this)},render:function(){var a=this,b=a.chart,d=a.options,c=!!a.animate&&b.renderer.isSVG&&F(d.animation).duration,e=a.visible?"inherit":"hidden",l=d.zIndex,p=a.hasRendered,k=b.seriesGroup,m=b.inverted;h(this,"render");var r=a.plotGroup("group","series",
e,l,k);a.markerGroup=a.plotGroup("markerGroup","markers",e,l,k);c&&a.animate(!0);r.inverted=a.isCartesian||a.invertable?m:!1;a.drawGraph&&(a.drawGraph(),a.applyZones());a.visible&&a.drawPoints();a.drawDataLabels&&a.drawDataLabels();a.redrawPoints&&a.redrawPoints();a.drawTracker&&!1!==a.options.enableMouseTracking&&a.drawTracker();a.invertGroups(m);!1===d.clip||a.sharedClipKey||p||r.clip(b.clipRect);c&&a.animate();p||(a.animationTimeout=f(function(){a.afterAnimate()},c||0));a.isDirty=!1;a.hasRendered=
!0;h(a,"afterRender")},redraw:function(){var a=this.chart,b=this.isDirty||this.isDirtyData,d=this.group,c=this.xAxis,f=this.yAxis;d&&(a.inverted&&d.attr({width:a.plotWidth,height:a.plotHeight}),d.animate({translateX:D(c&&c.left,a.plotLeft),translateY:D(f&&f.top,a.plotTop)}));this.translate();this.render();b&&delete this.kdTree},kdAxisArray:["clientX","plotY"],searchPoint:function(a,b){var d=this.xAxis,c=this.yAxis,f=this.chart.inverted;return this.searchKDTree({clientX:f?d.len-a.chartY+d.pos:a.chartX-
d.pos,plotY:f?c.len-a.chartX+c.pos:a.chartY-c.pos},b,a)},buildKDTree:function(a){function b(a,c,f){var g;if(g=a&&a.length){var e=d.kdAxisArray[c%f];a.sort(function(a,b){return a[e]-b[e]});g=Math.floor(g/2);return{point:a[g],left:b(a.slice(0,g),c+1,f),right:b(a.slice(g+1),c+1,f)}}}this.buildingKdTree=!0;var d=this,c=-1<d.options.findNearestPointBy.indexOf("y")?2:1;delete d.kdTree;f(function(){d.kdTree=b(d.getValidPoints(null,!d.directTouch),c,c);d.buildingKdTree=!1},d.options.kdNow||a&&"touchstart"===
a.type?0:1)},searchKDTree:function(a,b,d){function c(a,b,d,l){var p=b.point,n=f.kdAxisArray[d%l],t=p;var k=q(a[g])&&q(p[g])?Math.pow(a[g]-p[g],2):null;var m=q(a[e])&&q(p[e])?Math.pow(a[e]-p[e],2):null;m=(k||0)+(m||0);p.dist=q(m)?Math.sqrt(m):Number.MAX_VALUE;p.distX=q(k)?Math.sqrt(k):Number.MAX_VALUE;n=a[n]-p[n];m=0>n?"left":"right";k=0>n?"right":"left";b[m]&&(m=c(a,b[m],d+1,l),t=m[h]<t[h]?m:p);b[k]&&Math.sqrt(n*n)<t[h]&&(a=c(a,b[k],d+1,l),t=a[h]<t[h]?a:t);return t}var f=this,g=this.kdAxisArray[0],
e=this.kdAxisArray[1],h=b?"distX":"dist";b=-1<f.options.findNearestPointBy.indexOf("y")?2:1;this.kdTree||this.buildingKdTree||this.buildKDTree(d);if(this.kdTree)return c(a,this.kdTree,b,b)},pointPlacementToXValue:function(){var a=this.xAxis,b=this.options.pointPlacement;"between"===b&&(b=a.reversed?-.5:.5);w(b)&&(b*=D(this.options.pointRange||a.pointRange));return b}});""});M(J,"parts/Stacking.js",[J["parts/Globals.js"],J["parts/Utilities.js"]],function(c,e){var F=e.correctFloat,I=e.defined,G=e.destroyObjectProperties,
H=e.objectEach,v=e.pick;e=c.Axis;var q=c.Chart,C=c.format,B=c.Series;c.StackItem=function(c,e,m,r,q){var u=c.chart.inverted;this.axis=c;this.isNegative=m;this.options=e=e||{};this.x=r;this.total=null;this.points={};this.stack=q;this.rightCliff=this.leftCliff=0;this.alignOptions={align:e.align||(u?m?"left":"right":"center"),verticalAlign:e.verticalAlign||(u?"middle":m?"bottom":"top"),y:e.y,x:e.x};this.textAlign=e.textAlign||(u?m?"right":"left":"center")};c.StackItem.prototype={destroy:function(){G(this,
this.axis)},render:function(c){var e=this.axis.chart,m=this.options,r=m.format;r=r?C(r,this,e):m.formatter.call(this);this.label?this.label.attr({text:r,visibility:"hidden"}):(this.label=e.renderer.label(r,null,null,m.shape,null,null,m.useHTML,!1,"stack-labels"),r={text:r,align:this.textAlign,rotation:m.rotation,padding:v(m.padding,0),visibility:"hidden"},this.label.attr(r),e.styledMode||this.label.css(m.style),this.label.added||this.label.add(c));this.label.labelrank=e.plotHeight},setOffset:function(c,
e,m,r,q){var u=this.axis,f=u.chart;r=u.translate(u.usePercentage?100:r?r:this.total,0,0,0,1);m=u.translate(m?m:0);m=I(r)&&Math.abs(r-m);c=v(q,f.xAxis[0].translate(this.x))+c;u=I(r)&&this.getStackBox(f,this,c,r,e,m,u);e=this.label;c=this.isNegative;q="justify"===v(this.options.overflow,"justify");if(e&&u){m=e.getBBox();var b=f.inverted?c?m.width:0:m.width/2,a=f.inverted?m.height/2:c?-4:m.height+4;this.alignOptions.x=v(this.options.x,0);e.align(this.alignOptions,null,u);r=e.alignAttr;e.show();r.y-=
a;q&&(r.x-=b,B.prototype.justifyDataLabel.call(this.axis,e,this.alignOptions,r,m,u),r.x+=b);r.x=e.alignAttr.x;e.attr({x:r.x,y:r.y});v(!q&&this.options.crop,!0)&&((f=f.isInsidePlot(e.x+(f.inverted?0:-m.width/2),e.y)&&f.isInsidePlot(e.x+(f.inverted?c?-m.width:m.width:m.width/2),e.y+m.height))||e.hide())}},getStackBox:function(c,e,m,r,q,v,f){var b=e.axis.reversed,a=c.inverted;c=f.height+f.pos-(a?c.plotLeft:c.plotTop);e=e.isNegative&&!b||!e.isNegative&&b;return{x:a?e?r:r-v:m,y:a?c-m-q:e?c-r-v:c-r,width:a?
v:q,height:a?q:v}}};q.prototype.getStacks=function(){var c=this,e=c.inverted;c.yAxis.forEach(function(c){c.stacks&&c.hasVisibleSeries&&(c.oldStacks=c.stacks)});c.series.forEach(function(m){var r=m.xAxis&&m.xAxis.options||{};!m.options.stacking||!0!==m.visible&&!1!==c.options.chart.ignoreHiddenSeries||(m.stackKey=[m.type,v(m.options.stack,""),e?r.top:r.left,e?r.height:r.width].join())})};e.prototype.buildStacks=function(){var e=this.series,q=v(this.options.reversedStacks,!0),m=e.length,r;if(!this.isXAxis){this.usePercentage=
!1;for(r=m;r--;){var D=e[q?r:m-r-1];D.setStackedPoints()}for(r=0;r<m;r++)e[r].modifyStacks();c.fireEvent(this,"afterBuildStacks")}};e.prototype.renderStackTotals=function(){var c=this.chart,e=c.renderer,m=this.stacks,r=this.stackTotalGroup;r||(this.stackTotalGroup=r=e.g("stack-labels").attr({visibility:"visible",zIndex:6}).add());r.translate(c.plotLeft,c.plotTop);H(m,function(c){H(c,function(c){c.render(r)})})};e.prototype.resetStacks=function(){var c=this,e=c.stacks;c.isXAxis||H(e,function(e){H(e,
function(m,q){m.touched<c.stacksTouched?(m.destroy(),delete e[q]):(m.total=null,m.cumulative=null)})})};e.prototype.cleanStacks=function(){if(!this.isXAxis){if(this.oldStacks)var c=this.stacks=this.oldStacks;H(c,function(c){H(c,function(c){c.cumulative=c.total})})}};B.prototype.setStackedPoints=function(){if(this.options.stacking&&(!0===this.visible||!1===this.chart.options.chart.ignoreHiddenSeries)){var e=this.processedXData,q=this.processedYData,m=[],r=q.length,D=this.options,A=D.threshold,f=v(D.startFromThreshold&&
A,0),b=D.stack;D=D.stacking;var a=this.stackKey,d="-"+a,h=this.negStacks,k=this.yAxis,l=k.stacks,y=k.oldStacks,p,g;k.stacksTouched+=1;for(g=0;g<r;g++){var t=e[g];var x=q[g];var L=this.getStackIndicator(L,t,this.index);var E=L.key;var n=(p=h&&x<(f?0:A))?d:a;l[n]||(l[n]={});l[n][t]||(y[n]&&y[n][t]?(l[n][t]=y[n][t],l[n][t].total=null):l[n][t]=new c.StackItem(k,k.options.stackLabels,p,t,b));n=l[n][t];null!==x?(n.points[E]=n.points[this.index]=[v(n.cumulative,f)],I(n.cumulative)||(n.base=E),n.touched=
k.stacksTouched,0<L.index&&!1===this.singleStacks&&(n.points[E][0]=n.points[this.index+","+t+",0"][0])):n.points[E]=n.points[this.index]=null;"percent"===D?(p=p?a:d,h&&l[p]&&l[p][t]?(p=l[p][t],n.total=p.total=Math.max(p.total,n.total)+Math.abs(x)||0):n.total=F(n.total+(Math.abs(x)||0))):n.total=F(n.total+(x||0));n.cumulative=v(n.cumulative,f)+(x||0);null!==x&&(n.points[E].push(n.cumulative),m[g]=n.cumulative)}"percent"===D&&(k.usePercentage=!0);this.stackedYData=m;k.oldStacks={}}};B.prototype.modifyStacks=
function(){var c=this,e=c.stackKey,m=c.yAxis.stacks,r=c.processedXData,q,v=c.options.stacking;c[v+"Stacker"]&&[e,"-"+e].forEach(function(f){for(var b=r.length,a,d;b--;)if(a=r[b],q=c.getStackIndicator(q,a,c.index,f),d=(a=m[f]&&m[f][a])&&a.points[q.key])c[v+"Stacker"](d,a,b)})};B.prototype.percentStacker=function(c,e,m){e=e.total?100/e.total:0;c[0]=F(c[0]*e);c[1]=F(c[1]*e);this.stackedYData[m]=c[1]};B.prototype.getStackIndicator=function(c,e,m,r){!I(c)||c.x!==e||r&&c.key!==r?c={x:e,index:0,key:r}:c.index++;
c.key=[m,e,c.index].join();return c}});M(J,"parts/Dynamics.js",[J["parts/Globals.js"],J["parts/Utilities.js"]],function(c,e){var F=e.defined,I=e.erase,G=e.extend,H=e.isArray,v=e.isNumber,q=e.isObject,C=e.isString,B=e.objectEach,u=e.pick,w=e.relativeLength,m=e.setAnimation,r=e.splat,D=c.addEvent,A=c.animate,f=c.Axis;e=c.Chart;var b=c.createElement,a=c.css,d=c.fireEvent,h=c.merge,k=c.Point,l=c.Series,y=c.seriesTypes;c.cleanRecursively=function(a,b){var d={};B(a,function(f,g){if(q(a[g],!0)&&!a.nodeType&&
b[g])f=c.cleanRecursively(a[g],b[g]),Object.keys(f).length&&(d[g]=f);else if(q(a[g])||a[g]!==b[g])d[g]=a[g]});return d};G(e.prototype,{addSeries:function(a,b,c){var f,g=this;a&&(b=u(b,!0),d(g,"addSeries",{options:a},function(){f=g.initSeries(a);g.isDirtyLegend=!0;g.linkSeries();f.enabledDataSorting&&f.setData(a.data,!1);d(g,"afterAddSeries",{series:f});b&&g.redraw(c)}));return f},addAxis:function(a,b,d,c){return this.createAxis(b?"xAxis":"yAxis",{axis:a,redraw:d,animation:c})},addColorAxis:function(a,
b,d){return this.createAxis("colorAxis",{axis:a,redraw:b,animation:d})},createAxis:function(a,b){var d=this.options,g="colorAxis"===a,e=b.redraw,l=b.animation;b=h(b.axis,{index:this[a].length,isX:"xAxis"===a});var p=g?new c.ColorAxis(this,b):new f(this,b);d[a]=r(d[a]||{});d[a].push(b);g&&(this.isDirtyLegend=!0,this.axes.forEach(function(a){a.series=[]}),this.series.forEach(function(a){a.bindAxes();a.isDirtyData=!0}));u(e,!0)&&this.redraw(l);return p},showLoading:function(d){var c=this,f=c.options,
e=c.loadingDiv,h=f.loading,l=function(){e&&a(e,{left:c.plotLeft+"px",top:c.plotTop+"px",width:c.plotWidth+"px",height:c.plotHeight+"px"})};e||(c.loadingDiv=e=b("div",{className:"highcharts-loading highcharts-loading-hidden"},null,c.container),c.loadingSpan=b("span",{className:"highcharts-loading-inner"},null,e),D(c,"redraw",l));e.className="highcharts-loading";c.loadingSpan.innerHTML=u(d,f.lang.loading,"");c.styledMode||(a(e,G(h.style,{zIndex:10})),a(c.loadingSpan,h.labelStyle),c.loadingShown||(a(e,
{opacity:0,display:""}),A(e,{opacity:h.style.opacity||.5},{duration:h.showDuration||0})));c.loadingShown=!0;l()},hideLoading:function(){var b=this.options,d=this.loadingDiv;d&&(d.className="highcharts-loading highcharts-loading-hidden",this.styledMode||A(d,{opacity:0},{duration:b.loading.hideDuration||100,complete:function(){a(d,{display:"none"})}}));this.loadingShown=!1},propsRequireDirtyBox:"backgroundColor borderColor borderWidth borderRadius plotBackgroundColor plotBackgroundImage plotBorderColor plotBorderWidth plotShadow shadow".split(" "),
propsRequireReflow:"margin marginTop marginRight marginBottom marginLeft spacing spacingTop spacingRight spacingBottom spacingLeft".split(" "),propsRequireUpdateSeries:"chart.inverted chart.polar chart.ignoreHiddenSeries chart.type colors plotOptions time tooltip".split(" "),collectionsWithUpdate:["xAxis","yAxis","zAxis","series"],update:function(a,b,f,e){var g=this,l={credits:"addCredits",title:"setTitle",subtitle:"setSubtitle",caption:"setCaption"},p,k,m,t=a.isResponsiveOptions,q=[];d(g,"update",
{options:a});t||g.setResponsive(!1,!0);a=c.cleanRecursively(a,g.options);h(!0,g.userOptions,a);if(p=a.chart){h(!0,g.options.chart,p);"className"in p&&g.setClassName(p.className);"reflow"in p&&g.setReflow(p.reflow);if("inverted"in p||"polar"in p||"type"in p){g.propFromSeries();var x=!0}"alignTicks"in p&&(x=!0);B(p,function(a,b){-1!==g.propsRequireUpdateSeries.indexOf("chart."+b)&&(k=!0);-1!==g.propsRequireDirtyBox.indexOf(b)&&(g.isDirtyBox=!0);t||-1===g.propsRequireReflow.indexOf(b)||(m=!0)});!g.styledMode&&
"style"in p&&g.renderer.setStyle(p.style)}!g.styledMode&&a.colors&&(this.options.colors=a.colors);a.plotOptions&&h(!0,this.options.plotOptions,a.plotOptions);a.time&&this.time===c.time&&(this.time=new c.Time(a.time));B(a,function(a,b){if(g[b]&&"function"===typeof g[b].update)g[b].update(a,!1);else if("function"===typeof g[l[b]])g[l[b]](a);"chart"!==b&&-1!==g.propsRequireUpdateSeries.indexOf(b)&&(k=!0)});this.collectionsWithUpdate.forEach(function(b){if(a[b]){if("series"===b){var d=[];g[b].forEach(function(a,
b){a.options.isInternal||d.push(u(a.options.index,b))})}r(a[b]).forEach(function(a,c){(c=F(a.id)&&g.get(a.id)||g[b][d?d[c]:c])&&c.coll===b&&(c.update(a,!1),f&&(c.touched=!0));!c&&f&&g.collectionsWithInit[b]&&(g.collectionsWithInit[b][0].apply(g,[a].concat(g.collectionsWithInit[b][1]||[]).concat([!1])).touched=!0)});f&&g[b].forEach(function(a){a.touched||a.options.isInternal?delete a.touched:q.push(a)})}});q.forEach(function(a){a.remove&&a.remove(!1)});x&&g.axes.forEach(function(a){a.update({},!1)});
k&&g.getSeriesOrderByLinks().forEach(function(a){a.chart&&a.update({},!1)},this);a.loading&&h(!0,g.options.loading,a.loading);x=p&&p.width;p=p&&p.height;C(p)&&(p=w(p,x||g.chartWidth));m||v(x)&&x!==g.chartWidth||v(p)&&p!==g.chartHeight?g.setSize(x,p,e):u(b,!0)&&g.redraw(e);d(g,"afterUpdate",{options:a,redraw:b,animation:e})},setSubtitle:function(a,b){this.applyDescription("subtitle",a);this.layOutTitles(b)},setCaption:function(a,b){this.applyDescription("caption",a);this.layOutTitles(b)}});e.prototype.collectionsWithInit=
{xAxis:[e.prototype.addAxis,[!0]],yAxis:[e.prototype.addAxis,[!1]],series:[e.prototype.addSeries]};G(k.prototype,{update:function(a,b,d,c){function f(){g.applyOptions(a);null===g.y&&h&&(g.graphic=h.destroy());q(a,!0)&&(h&&h.element&&a&&a.marker&&"undefined"!==typeof a.marker.symbol&&(g.graphic=h.destroy()),a&&a.dataLabels&&g.dataLabel&&(g.dataLabel=g.dataLabel.destroy()),g.connector&&(g.connector=g.connector.destroy()));l=g.index;e.updateParallelArrays(g,l);k.data[l]=q(k.data[l],!0)||q(a,!0)?g.options:
u(a,k.data[l]);e.isDirty=e.isDirtyData=!0;!e.fixedBox&&e.hasCartesianSeries&&(p.isDirtyBox=!0);"point"===k.legendType&&(p.isDirtyLegend=!0);b&&p.redraw(d)}var g=this,e=g.series,h=g.graphic,l,p=e.chart,k=e.options;b=u(b,!0);!1===c?f():g.firePointEvent("update",{options:a},f)},remove:function(a,b){this.series.removePoint(this.series.data.indexOf(this),a,b)}});G(l.prototype,{addPoint:function(a,b,c,f,e){var g=this.options,h=this.data,l=this.chart,p=this.xAxis;p=p&&p.hasNames&&p.names;var k=g.data,m=
this.xData,t;b=u(b,!0);var r={series:this};this.pointClass.prototype.applyOptions.apply(r,[a]);var q=r.x;var x=m.length;if(this.requireSorting&&q<m[x-1])for(t=!0;x&&m[x-1]>q;)x--;this.updateParallelArrays(r,"splice",x,0,0);this.updateParallelArrays(r,x);p&&r.name&&(p[q]=r.name);k.splice(x,0,a);t&&(this.data.splice(x,0,null),this.processData());"point"===g.legendType&&this.generatePoints();c&&(h[0]&&h[0].remove?h[0].remove(!1):(h.shift(),this.updateParallelArrays(r,"shift"),k.shift()));!1!==e&&d(this,
"addPoint",{point:r});this.isDirtyData=this.isDirty=!0;b&&l.redraw(f)},removePoint:function(a,b,d){var c=this,f=c.data,g=f[a],e=c.points,h=c.chart,l=function(){e&&e.length===f.length&&e.splice(a,1);f.splice(a,1);c.options.data.splice(a,1);c.updateParallelArrays(g||{series:c},"splice",a,1);g&&g.destroy();c.isDirty=!0;c.isDirtyData=!0;b&&h.redraw()};m(d,h);b=u(b,!0);g?g.firePointEvent("remove",null,l):l()},remove:function(a,b,c,f){function g(){e.destroy(f);e.remove=null;h.isDirtyLegend=h.isDirtyBox=
!0;h.linkSeries();u(a,!0)&&h.redraw(b)}var e=this,h=e.chart;!1!==c?d(e,"remove",null,g):g()},update:function(a,b){a=c.cleanRecursively(a,this.userOptions);d(this,"update",{options:a});var f=this,g=f.chart,e=f.userOptions,l=f.initialType||f.type,p=a.type||e.type||g.options.chart.type,k=!(this.hasDerivedData||a.dataGrouping||p&&p!==this.type||"undefined"!==typeof a.pointStart||a.pointInterval||a.pointIntervalUnit||a.keys),m=y[l].prototype,r,q=["group","markerGroup","dataLabelsGroup","transformGroup"],
v=["eventOptions","navigatorSeries","baseSeries"],w=f.finishedAnimating&&{animation:!1},A={};k&&(v.push("data","isDirtyData","points","processedXData","processedYData","xIncrement","_hasPointMarkers","_hasPointLabels","mapMap","mapData","minY","maxY","minX","maxX"),!1!==a.visible&&v.push("area","graph"),f.parallelArrays.forEach(function(a){v.push(a+"Data")}),a.data&&(a.dataSorting&&G(f.options.dataSorting,a.dataSorting),this.setData(a.data,!1)));a=h(e,w,{index:"undefined"===typeof e.index?f.index:
e.index,pointStart:u(e.pointStart,f.xData[0])},!k&&{data:f.options.data},a);k&&a.data&&(a.data=f.options.data);v=q.concat(v);v.forEach(function(a){v[a]=f[a];delete f[a]});f.remove(!1,null,!1,!0);for(r in m)f[r]=void 0;y[p||l]?G(f,y[p||l].prototype):c.error(17,!0,g,{missingModuleFor:p||l});v.forEach(function(a){f[a]=v[a]});f.init(g,a);if(k&&this.points){var D=f.options;!1===D.visible?(A.graphic=1,A.dataLabel=1):f._hasPointLabels||(p=D.marker,m=D.dataLabels,p&&(!1===p.enabled||"symbol"in p)&&(A.graphic=
1),m&&!1===m.enabled&&(A.dataLabel=1));this.points.forEach(function(a){a&&a.series&&(a.resolveColor(),Object.keys(A).length&&a.destroyElements(A),!1===D.showInLegend&&a.legendItem&&g.legend.destroyItem(a))},this)}a.zIndex!==e.zIndex&&q.forEach(function(b){f[b]&&f[b].attr({zIndex:a.zIndex})});f.initialType=l;g.linkSeries();d(this,"afterUpdate");u(b,!0)&&g.redraw(k?void 0:!1)},setName:function(a){this.name=this.options.name=this.userOptions.name=a;this.chart.isDirtyLegend=!0}});G(f.prototype,{update:function(a,
b){var d=this.chart,c=a&&a.events||{};a=h(this.userOptions,a);d.options[this.coll].indexOf&&(d.options[this.coll][d.options[this.coll].indexOf(this.userOptions)]=a);B(d.options[this.coll].events,function(a,b){"undefined"===typeof c[b]&&(c[b]=void 0)});this.destroy(!0);this.init(d,G(a,{events:c}));d.isDirtyBox=!0;u(b,!0)&&d.redraw()},remove:function(a){for(var b=this.chart,d=this.coll,c=this.series,f=c.length;f--;)c[f]&&c[f].remove(!1);I(b.axes,this);I(b[d],this);H(b.options[d])?b.options[d].splice(this.options.index,
1):delete b.options[d];b[d].forEach(function(a,b){a.options.index=a.userOptions.index=b});this.destroy();b.isDirtyBox=!0;u(a,!0)&&b.redraw()},setTitle:function(a,b){this.update({title:a},b)},setCategories:function(a,b){this.update({categories:a},b)}})});M(J,"parts/AreaSeries.js",[J["parts/Globals.js"],J["parts/Utilities.js"]],function(c,e){var F=e.objectEach,I=e.pick,G=c.color,H=c.Series;e=c.seriesType;e("area","line",{softThreshold:!1,threshold:0},{singleStacks:!1,getStackPoints:function(c){var e=
[],v=[],B=this.xAxis,u=this.yAxis,w=u.stacks[this.stackKey],m={},r=this.index,D=u.series,A=D.length,f=I(u.options.reversedStacks,!0)?1:-1,b;c=c||this.points;if(this.options.stacking){for(b=0;b<c.length;b++)c[b].leftNull=c[b].rightNull=void 0,m[c[b].x]=c[b];F(w,function(a,b){null!==a.total&&v.push(b)});v.sort(function(a,b){return a-b});var a=D.map(function(a){return a.visible});v.forEach(function(d,c){var h=0,l,q;if(m[d]&&!m[d].isNull)e.push(m[d]),[-1,1].forEach(function(e){var g=1===e?"rightNull":
"leftNull",h=0,p=w[v[c+e]];if(p)for(b=r;0<=b&&b<A;)l=p.points[b],l||(b===r?m[d][g]=!0:a[b]&&(q=w[d].points[b])&&(h-=q[1]-q[0])),b+=f;m[d][1===e?"rightCliff":"leftCliff"]=h});else{for(b=r;0<=b&&b<A;){if(l=w[d].points[b]){h=l[1];break}b+=f}h=u.translate(h,0,1,0,1);e.push({isNull:!0,plotX:B.translate(d,0,0,0,1),x:d,plotY:h,yBottom:h})}})}return e},getGraphPath:function(c){var e=H.prototype.getGraphPath,v=this.options,B=v.stacking,u=this.yAxis,w,m=[],r=[],D=this.index,A=u.stacks[this.stackKey],f=v.threshold,
b=Math.round(u.getThreshold(v.threshold));v=I(v.connectNulls,"percent"===B);var a=function(a,d,e){var g=c[a];a=B&&A[g.x].points[D];var l=g[e+"Null"]||0;e=g[e+"Cliff"]||0;g=!0;if(e||l){var p=(l?a[0]:a[1])+e;var k=a[0]+e;g=!!l}else!B&&c[d]&&c[d].isNull&&(p=k=f);"undefined"!==typeof p&&(r.push({plotX:h,plotY:null===p?b:u.getThreshold(p),isNull:g,isCliff:!0}),m.push({plotX:h,plotY:null===k?b:u.getThreshold(k),doCurve:!1}))};c=c||this.points;B&&(c=this.getStackPoints(c));for(w=0;w<c.length;w++){B||(c[w].leftCliff=
c[w].rightCliff=c[w].leftNull=c[w].rightNull=void 0);var d=c[w].isNull;var h=I(c[w].rectPlotX,c[w].plotX);var k=I(c[w].yBottom,b);if(!d||v)v||a(w,w-1,"left"),d&&!B&&v||(r.push(c[w]),m.push({x:w,plotX:h,plotY:k})),v||a(w,w+1,"right")}w=e.call(this,r,!0,!0);m.reversed=!0;d=e.call(this,m,!0,!0);d.length&&(d[0]="L");d=w.concat(d);e=e.call(this,r,!1,v);d.xMap=w.xMap;this.areaPath=d;return e},drawGraph:function(){this.areaPath=[];H.prototype.drawGraph.apply(this);var c=this,e=this.areaPath,C=this.options,
B=[["area","highcharts-area",this.color,C.fillColor]];this.zones.forEach(function(e,q){B.push(["zone-area-"+q,"highcharts-area highcharts-zone-area-"+q+" "+e.className,e.color||c.color,e.fillColor||C.fillColor])});B.forEach(function(q){var v=q[0],m=c[v],r=m?"animate":"attr",u={};m?(m.endX=c.preventGraphAnimation?null:e.xMap,m.animate({d:e})):(u.zIndex=0,m=c[v]=c.chart.renderer.path(e).addClass(q[1]).add(c.group),m.isArea=!0);c.chart.styledMode||(u.fill=I(q[3],G(q[2]).setOpacity(I(C.fillOpacity,.75)).get()));
m[r](u);m.startX=e.xMap;m.shiftUnit=C.step?2:1})},drawLegendSymbol:c.LegendSymbolMixin.drawRectangle});""});M(J,"parts/SplineSeries.js",[J["parts/Globals.js"],J["parts/Utilities.js"]],function(c,e){var F=e.pick;c=c.seriesType;c("spline","line",{},{getPointSpline:function(c,e,H){var v=e.plotX,q=e.plotY,C=c[H-1];H=c[H+1];if(C&&!C.isNull&&!1!==C.doCurve&&!e.isCliff&&H&&!H.isNull&&!1!==H.doCurve&&!e.isCliff){c=C.plotY;var B=H.plotX;H=H.plotY;var u=0;var w=(1.5*v+C.plotX)/2.5;var m=(1.5*q+c)/2.5;B=(1.5*
v+B)/2.5;var r=(1.5*q+H)/2.5;B!==w&&(u=(r-m)*(B-v)/(B-w)+q-r);m+=u;r+=u;m>c&&m>q?(m=Math.max(c,q),r=2*q-m):m<c&&m<q&&(m=Math.min(c,q),r=2*q-m);r>H&&r>q?(r=Math.max(H,q),m=2*q-r):r<H&&r<q&&(r=Math.min(H,q),m=2*q-r);e.rightContX=B;e.rightContY=r}e=["C",F(C.rightContX,C.plotX),F(C.rightContY,C.plotY),F(w,v),F(m,q),v,q];C.rightContX=C.rightContY=null;return e}});""});M(J,"parts/AreaSplineSeries.js",[J["parts/Globals.js"]],function(c){var e=c.seriesTypes.area.prototype,F=c.seriesType;F("areaspline","spline",
c.defaultPlotOptions.area,{getStackPoints:e.getStackPoints,getGraphPath:e.getGraphPath,drawGraph:e.drawGraph,drawLegendSymbol:c.LegendSymbolMixin.drawRectangle});""});M(J,"parts/ColumnSeries.js",[J["parts/Globals.js"],J["parts/Utilities.js"]],function(c,e){var F=e.animObject,I=e.clamp,G=e.defined,H=e.extend,v=e.isNumber,q=e.pick,C=c.color,B=c.merge,u=c.Series;e=c.seriesType;var w=c.svg;e("column","line",{borderRadius:0,crisp:!0,groupPadding:.2,marker:null,pointPadding:.1,minPointLength:0,cropThreshold:50,
pointRange:null,states:{hover:{halo:!1,brightness:.1},select:{color:"#cccccc",borderColor:"#000000"}},dataLabels:{align:null,verticalAlign:null,y:null},softThreshold:!1,startFromThreshold:!0,stickyTracking:!1,tooltip:{distance:6},threshold:0,borderColor:"#ffffff"},{cropShoulder:0,directTouch:!0,trackerGroups:["group","dataLabelsGroup"],negStacks:!0,init:function(){u.prototype.init.apply(this,arguments);var c=this,e=c.chart;e.hasRendered&&e.series.forEach(function(e){e.type===c.type&&(e.isDirty=!0)})},
getColumnMetrics:function(){var c=this,e=c.options,v=c.xAxis,u=c.yAxis,f=v.options.reversedStacks;f=v.reversed&&!f||!v.reversed&&f;var b,a={},d=0;!1===e.grouping?d=1:c.chart.series.forEach(function(f){var e=f.yAxis,g=f.options;if(f.type===c.type&&(f.visible||!c.chart.options.chart.ignoreHiddenSeries)&&u.len===e.len&&u.pos===e.pos){if(g.stacking){b=f.stackKey;"undefined"===typeof a[b]&&(a[b]=d++);var h=a[b]}else!1!==g.grouping&&(h=d++);f.columnIndex=h}});var h=Math.min(Math.abs(v.transA)*(v.ordinalSlope||
e.pointRange||v.closestPointRange||v.tickInterval||1),v.len),k=h*e.groupPadding,l=(h-2*k)/(d||1);e=Math.min(e.maxPointWidth||v.len,q(e.pointWidth,l*(1-2*e.pointPadding)));c.columnMetrics={width:e,offset:(l-e)/2+(k+((c.columnIndex||0)+(f?1:0))*l-h/2)*(f?-1:1)};return c.columnMetrics},crispCol:function(c,e,q,v){var f=this.chart,b=this.borderWidth,a=-(b%2?.5:0);b=b%2?.5:1;f.inverted&&f.renderer.isVML&&(b+=1);this.options.crisp&&(q=Math.round(c+q)+a,c=Math.round(c)+a,q-=c);v=Math.round(e+v)+b;a=.5>=Math.abs(e)&&
.5<v;e=Math.round(e)+b;v-=e;a&&v&&(--e,v+=1);return{x:c,y:e,width:q,height:v}},translate:function(){var c=this,e=c.chart,v=c.options,w=c.dense=2>c.closestPointRange*c.xAxis.transA;w=c.borderWidth=q(v.borderWidth,w?0:1);var f=c.yAxis,b=v.threshold,a=c.translatedThreshold=f.getThreshold(b),d=q(v.minPointLength,5),h=c.getColumnMetrics(),k=h.width,l=c.barW=Math.max(k,1+2*w),y=c.pointXOffset=h.offset,p=c.dataMin,g=c.dataMax;e.inverted&&(a-=.5);v.pointPadding&&(l=Math.ceil(l));u.prototype.translate.apply(c);
c.points.forEach(function(h){var m=q(h.yBottom,a),t=999+Math.abs(m),r=k;t=I(h.plotY,-t,f.len+t);var n=h.plotX+y,z=l,v=Math.min(t,m),u=Math.max(t,m)-v;if(d&&Math.abs(u)<d){u=d;var w=!f.reversed&&!h.negative||f.reversed&&h.negative;h.y===b&&c.dataMax<=b&&f.min<b&&p!==g&&(w=!w);v=Math.abs(v-a)>d?m-d:a-(w?d:0)}G(h.options.pointWidth)&&(r=z=Math.ceil(h.options.pointWidth),n-=Math.round((r-k)/2));h.barX=n;h.pointWidth=r;h.tooltipPos=e.inverted?[f.len+f.pos-e.plotLeft-t,c.xAxis.len-n-z/2,u]:[n+z/2,t+f.pos-
e.plotTop,u];h.shapeType=c.pointClass.prototype.shapeType||"rect";h.shapeArgs=c.crispCol.apply(c,h.isNull?[n,a,z,0]:[n,v,z,u])})},getSymbol:c.noop,drawLegendSymbol:c.LegendSymbolMixin.drawRectangle,drawGraph:function(){this.group[this.dense?"addClass":"removeClass"]("highcharts-dense-data")},pointAttribs:function(c,e){var m=this.options,r=this.pointAttrToOptions||{};var f=r.stroke||"borderColor";var b=r["stroke-width"]||"borderWidth",a=c&&c.color||this.color,d=c&&c[f]||m[f]||this.color||a,h=c&&c[b]||
m[b]||this[b]||0;r=c&&c.options.dashStyle||m.dashStyle;var k=q(c&&c.opacity,m.opacity,1);if(c&&this.zones.length){var l=c.getZone();a=c.options.color||l&&(l.color||c.nonZonedColor)||this.color;l&&(d=l.borderColor||d,r=l.dashStyle||r,h=l.borderWidth||h)}e&&c&&(c=B(m.states[e],c.options.states&&c.options.states[e]||{}),e=c.brightness,a=c.color||"undefined"!==typeof e&&C(a).brighten(c.brightness).get()||a,d=c[f]||d,h=c[b]||h,r=c.dashStyle||r,k=q(c.opacity,k));f={fill:a,stroke:d,"stroke-width":h,opacity:k};
r&&(f.dashstyle=r);return f},drawPoints:function(){var c=this,e=this.chart,q=c.options,u=e.renderer,f=q.animationLimit||250,b;c.points.forEach(function(a){var d=a.graphic,h=!!d,k=d&&e.pointCount<f?"animate":"attr";if(v(a.plotY)&&null!==a.y){b=a.shapeArgs;d&&a.hasNewShapeType()&&(d=d.destroy());c.enabledDataSorting&&(a.startXPos=c.xAxis.reversed?-(b?b.width:0):c.xAxis.width);d||(a.graphic=d=u[a.shapeType](b).add(a.group||c.group))&&c.enabledDataSorting&&e.hasRendered&&e.pointCount<f&&(d.attr({x:a.startXPos}),
h=!0,k="animate");if(d&&h)d[k](B(b));if(q.borderRadius)d[k]({r:q.borderRadius});e.styledMode||d[k](c.pointAttribs(a,a.selected&&"select")).shadow(!1!==a.allowShadow&&q.shadow,null,q.stacking&&!q.borderRadius);d.addClass(a.getClassName(),!0)}else d&&(a.graphic=d.destroy())})},animate:function(c){var e=this,m=this.yAxis,q=e.options,f=this.chart.inverted,b={},a=f?"translateX":"translateY";if(w)if(c)b.scaleY=.001,c=I(m.toPixels(q.threshold),m.pos,m.pos+m.len),f?b.translateX=c-m.len:b.translateY=c,e.clipBox&&
e.setClip(),e.group.attr(b);else{var d=e.group.attr(a);e.group.animate({scaleY:1},H(F(e.options.animation),{step:function(c,f){b[a]=d+f.pos*(m.pos-d);e.group.attr(b)}}));e.animate=null}},remove:function(){var c=this,e=c.chart;e.hasRendered&&e.series.forEach(function(e){e.type===c.type&&(e.isDirty=!0)});u.prototype.remove.apply(c,arguments)}});""});M(J,"parts/BarSeries.js",[J["parts/Globals.js"]],function(c){c=c.seriesType;c("bar","column",null,{inverted:!0});""});M(J,"parts/ScatterSeries.js",[J["parts/Globals.js"]],
function(c){var e=c.Series,F=c.seriesType;F("scatter","line",{lineWidth:0,findNearestPointBy:"xy",jitter:{x:0,y:0},marker:{enabled:!0},tooltip:{headerFormat:'<span style="color:{point.color}">\u25cf</span> <span style="font-size: 10px"> {series.name}</span><br/>',pointFormat:"x: <b>{point.x}</b><br/>y: <b>{point.y}</b><br/>"}},{sorted:!1,requireSorting:!1,noSharedTooltip:!0,trackerGroups:["group","markerGroup","dataLabelsGroup"],takeOrdinalPosition:!1,drawGraph:function(){this.options.lineWidth&&
e.prototype.drawGraph.call(this)},applyJitter:function(){var c=this,e=this.options.jitter,F=this.points.length;e&&this.points.forEach(function(v,q){["x","y"].forEach(function(C,B){var u="plot"+C.toUpperCase();if(e[C]&&!v.isNull){var w=c[C+"Axis"];var m=e[C]*w.transA;if(w&&!w.isLog){var r=Math.max(0,v[u]-m);w=Math.min(w.len,v[u]+m);B=1E4*Math.sin(q+B*F);v[u]=r+(w-r)*(B-Math.floor(B));"x"===C&&(v.clientX=v.plotX)}}})})}});c.addEvent(e,"afterTranslate",function(){this.applyJitter&&this.applyJitter()});
""});M(J,"mixins/centered-series.js",[J["parts/Globals.js"],J["parts/Utilities.js"]],function(c,e){var F=e.isNumber,I=e.pick,G=e.relativeLength,H=c.deg2rad;c.CenteredSeriesMixin={getCenter:function(){var c=this.options,e=this.chart,C=2*(c.slicedOffset||0),B=e.plotWidth-2*C;e=e.plotHeight-2*C;var u=c.center;u=[I(u[0],"50%"),I(u[1],"50%"),c.size||"100%",c.innerSize||0];var w=Math.min(B,e),m;for(m=0;4>m;++m){var r=u[m];c=2>m||2===m&&/%$/.test(r);u[m]=G(r,[B,e,w,u[2]][m])+(c?C:0)}u[3]>u[2]&&(u[3]=u[2]);
return u},getStartAndEndRadians:function(c,e){c=F(c)?c:0;e=F(e)&&e>c&&360>e-c?e:c+360;return{start:H*(c+-90),end:H*(e+-90)}}}});M(J,"parts/PieSeries.js",[J["parts/Globals.js"],J["parts/Utilities.js"]],function(c,e){var F=e.clamp,I=e.defined,G=e.isNumber,H=e.pick,v=e.relativeLength,q=e.setAnimation,C=c.addEvent;e=c.CenteredSeriesMixin;var B=e.getStartAndEndRadians,u=c.merge,w=c.noop,m=c.Point,r=c.Series,D=c.seriesType,A=c.fireEvent;D("pie","line",{center:[null,null],clip:!1,colorByPoint:!0,dataLabels:{allowOverlap:!0,
connectorPadding:5,connectorShape:"fixedOffset",crookDistance:"70%",distance:30,enabled:!0,formatter:function(){return this.point.isNull?void 0:this.point.name},softConnector:!0,x:0},fillColor:void 0,ignoreHiddenPoint:!0,inactiveOtherPoints:!0,legendType:"point",marker:null,size:null,showInLegend:!1,slicedOffset:10,stickyTracking:!1,tooltip:{followPointer:!0},borderColor:"#ffffff",borderWidth:1,lineWidth:void 0,states:{hover:{brightness:.1}}},{isCartesian:!1,requireSorting:!1,directTouch:!0,noSharedTooltip:!0,
trackerGroups:["group","dataLabelsGroup"],axisTypes:[],pointAttribs:c.seriesTypes.column.prototype.pointAttribs,animate:function(c){var b=this,a=b.points,d=b.startAngleRad;c||(a.forEach(function(a){var c=a.graphic,f=a.shapeArgs;c&&f&&(c.attr({r:H(a.startR,b.center&&b.center[3]/2),start:d,end:d}),c.animate({r:f.r,start:f.start,end:f.end},b.options.animation))}),b.animate=null)},hasData:function(){return!!this.processedXData.length},updateTotals:function(){var c,b=0,a=this.points,d=a.length,e=this.options.ignoreHiddenPoint;
for(c=0;c<d;c++){var k=a[c];b+=e&&!k.visible?0:k.isNull?0:k.y}this.total=b;for(c=0;c<d;c++)k=a[c],k.percentage=0<b&&(k.visible||!e)?k.y/b*100:0,k.total=b},generatePoints:function(){r.prototype.generatePoints.call(this);this.updateTotals()},getX:function(c,b,a){var d=this.center,f=this.radii?this.radii[a.index]:d[2]/2;c=Math.asin(F((c-d[1])/(f+a.labelDistance),-1,1));return d[0]+(b?-1:1)*Math.cos(c)*(f+a.labelDistance)+(0<a.labelDistance?(b?-1:1)*this.options.dataLabels.padding:0)},translate:function(c){this.generatePoints();
var b=0,a=this.options,d=a.slicedOffset,f=d+(a.borderWidth||0),e=B(a.startAngle,a.endAngle),l=this.startAngleRad=e.start;e=(this.endAngleRad=e.end)-l;var m=this.points,p=a.dataLabels.distance;a=a.ignoreHiddenPoint;var g,t=m.length;c||(this.center=c=this.getCenter());for(g=0;g<t;g++){var q=m[g];var r=l+b*e;if(!a||q.visible)b+=q.percentage/100;var u=l+b*e;q.shapeType="arc";q.shapeArgs={x:c[0],y:c[1],r:c[2]/2,innerR:c[3]/2,start:Math.round(1E3*r)/1E3,end:Math.round(1E3*u)/1E3};q.labelDistance=H(q.options.dataLabels&&
q.options.dataLabels.distance,p);q.labelDistance=v(q.labelDistance,q.shapeArgs.r);this.maxLabelDistance=Math.max(this.maxLabelDistance||0,q.labelDistance);u=(u+r)/2;u>1.5*Math.PI?u-=2*Math.PI:u<-Math.PI/2&&(u+=2*Math.PI);q.slicedTranslation={translateX:Math.round(Math.cos(u)*d),translateY:Math.round(Math.sin(u)*d)};var n=Math.cos(u)*c[2]/2;var z=Math.sin(u)*c[2]/2;q.tooltipPos=[c[0]+.7*n,c[1]+.7*z];q.half=u<-Math.PI/2||u>Math.PI/2?1:0;q.angle=u;r=Math.min(f,q.labelDistance/5);q.labelPosition={natural:{x:c[0]+
n+Math.cos(u)*q.labelDistance,y:c[1]+z+Math.sin(u)*q.labelDistance},"final":{},alignment:0>q.labelDistance?"center":q.half?"right":"left",connectorPosition:{breakAt:{x:c[0]+n+Math.cos(u)*r,y:c[1]+z+Math.sin(u)*r},touchingSliceAt:{x:c[0]+n,y:c[1]+z}}}}A(this,"afterTranslate")},drawEmpty:function(){var c=this.options;if(0===this.total){var b=this.center[0];var a=this.center[1];this.graph||(this.graph=this.chart.renderer.circle(b,a,0).addClass("highcharts-graph").add(this.group));this.graph.animate({"stroke-width":c.borderWidth,
cx:b,cy:a,r:this.center[2]/2,fill:c.fillColor||"none",stroke:c.color||"#cccccc"})}else this.graph&&(this.graph=this.graph.destroy())},redrawPoints:function(){var c=this,b=c.chart,a=b.renderer,d,e,k,l,m=c.options.shadow;this.drawEmpty();!m||c.shadowGroup||b.styledMode||(c.shadowGroup=a.g("shadow").attr({zIndex:-1}).add(c.group));c.points.forEach(function(f){var g={};e=f.graphic;if(!f.isNull&&e){l=f.shapeArgs;d=f.getTranslate();if(!b.styledMode){var h=f.shadowGroup;m&&!h&&(h=f.shadowGroup=a.g("shadow").add(c.shadowGroup));
h&&h.attr(d);k=c.pointAttribs(f,f.selected&&"select")}f.delayedRendering?(e.setRadialReference(c.center).attr(l).attr(d),b.styledMode||e.attr(k).attr({"stroke-linejoin":"round"}).shadow(m,h),f.delayedRendering=!1):(e.setRadialReference(c.center),b.styledMode||u(!0,g,k),u(!0,g,l,d),e.animate(g));e.attr({visibility:f.visible?"inherit":"hidden"});e.addClass(f.getClassName())}else e&&(f.graphic=e.destroy())})},drawPoints:function(){var c=this.chart.renderer;this.points.forEach(function(b){b.graphic||
(b.graphic=c[b.shapeType](b.shapeArgs).add(b.series.group),b.delayedRendering=!0)})},searchPoint:w,sortByAngle:function(c,b){c.sort(function(a,d){return"undefined"!==typeof a.angle&&(d.angle-a.angle)*b})},drawLegendSymbol:c.LegendSymbolMixin.drawRectangle,getCenter:e.getCenter,getSymbol:w,drawGraph:null},{init:function(){m.prototype.init.apply(this,arguments);var c=this;c.name=H(c.name,"Slice");var b=function(a){c.slice("select"===a.type)};C(c,"select",b);C(c,"unselect",b);return c},isValid:function(){return G(this.y)&&
0<=this.y},setVisible:function(c,b){var a=this,d=a.series,f=d.chart,e=d.options.ignoreHiddenPoint;b=H(b,e);c!==a.visible&&(a.visible=a.options.visible=c="undefined"===typeof c?!a.visible:c,d.options.data[d.data.indexOf(a)]=a.options,["graphic","dataLabel","connector","shadowGroup"].forEach(function(b){if(a[b])a[b][c?"show":"hide"](!0)}),a.legendItem&&f.legend.colorizeItem(a,c),c||"hover"!==a.state||a.setState(""),e&&(d.isDirty=!0),b&&f.redraw())},slice:function(c,b,a){var d=this.series;q(a,d.chart);
H(b,!0);this.sliced=this.options.sliced=I(c)?c:!this.sliced;d.options.data[d.data.indexOf(this)]=this.options;this.graphic.animate(this.getTranslate());this.shadowGroup&&this.shadowGroup.animate(this.getTranslate())},getTranslate:function(){return this.sliced?this.slicedTranslation:{translateX:0,translateY:0}},haloPath:function(c){var b=this.shapeArgs;return this.sliced||!this.visible?[]:this.series.chart.renderer.symbols.arc(b.x,b.y,b.r+c,b.r+c,{innerR:b.r-1,start:b.start,end:b.end})},connectorShapes:{fixedOffset:function(c,
b,a){var d=b.breakAt;b=b.touchingSliceAt;return["M",c.x,c.y].concat(a.softConnector?["C",c.x+("left"===c.alignment?-5:5),c.y,2*d.x-b.x,2*d.y-b.y,d.x,d.y]:["L",d.x,d.y]).concat(["L",b.x,b.y])},straight:function(c,b){b=b.touchingSliceAt;return["M",c.x,c.y,"L",b.x,b.y]},crookedLine:function(c,b,a){b=b.touchingSliceAt;var d=this.series,e=d.center[0],f=d.chart.plotWidth,l=d.chart.plotLeft;d=c.alignment;var m=this.shapeArgs.r;a=v(a.crookDistance,1);a="left"===d?e+m+(f+l-e-m)*(1-a):l+(e-m)*a;e=["L",a,c.y];
if("left"===d?a>c.x||a<b.x:a<c.x||a>b.x)e=[];return["M",c.x,c.y].concat(e).concat(["L",b.x,b.y])}},getConnectorPath:function(){var c=this.labelPosition,b=this.series.options.dataLabels,a=b.connectorShape,d=this.connectorShapes;d[a]&&(a=d[a]);return a.call(this,{x:c.final.x,y:c.final.y,alignment:c.alignment},c.connectorPosition,b)}});""});M(J,"parts/DataLabels.js",[J["parts/Globals.js"],J["parts/Utilities.js"]],function(c,e){var F=e.animObject,I=e.arrayMax,G=e.clamp,H=e.defined,v=e.extend,q=e.isArray,
C=e.objectEach,B=e.pick,u=e.relativeLength,w=e.splat,m=c.format,r=c.merge;e=c.noop;var D=c.Series,A=c.seriesTypes,f=c.stableSort;c.distribute=function(b,a,d){function e(a,b){return a.target-b.target}var k,l=!0,m=b,p=[];var g=0;var t=m.reducedLen||a;for(k=b.length;k--;)g+=b[k].size;if(g>t){f(b,function(a,b){return(b.rank||0)-(a.rank||0)});for(g=k=0;g<=t;)g+=b[k].size,k++;p=b.splice(k-1,b.length)}f(b,e);for(b=b.map(function(a){return{size:a.size,targets:[a.target],align:B(a.align,.5)}});l;){for(k=b.length;k--;)l=
b[k],g=(Math.min.apply(0,l.targets)+Math.max.apply(0,l.targets))/2,l.pos=G(g-l.size*l.align,0,a-l.size);k=b.length;for(l=!1;k--;)0<k&&b[k-1].pos+b[k-1].size>b[k].pos&&(b[k-1].size+=b[k].size,b[k-1].targets=b[k-1].targets.concat(b[k].targets),b[k-1].align=.5,b[k-1].pos+b[k-1].size>a&&(b[k-1].pos=a-b[k-1].size),b.splice(k,1),l=!0)}m.push.apply(m,p);k=0;b.some(function(b){var e=0;if(b.targets.some(function(){m[k].pos=b.pos+e;if(Math.abs(m[k].pos-m[k].target)>d)return m.slice(0,k+1).forEach(function(a){delete a.pos}),
m.reducedLen=(m.reducedLen||a)-.1*a,m.reducedLen>.1*a&&c.distribute(m,a,d),!0;e+=m[k].size;k++}))return!0});f(m,e)};D.prototype.drawDataLabels=function(){function b(a,b){var d=b.filter;return d?(b=d.operator,a=a[d.property],d=d.value,">"===b&&a>d||"<"===b&&a<d||">="===b&&a>=d||"<="===b&&a<=d||"=="===b&&a==d||"==="===b&&a===d?!0:!1):!0}function a(a,b){var d=[],c;if(q(a)&&!q(b))d=a.map(function(a){return r(a,b)});else if(q(b)&&!q(a))d=b.map(function(b){return r(a,b)});else if(q(a)||q(b))for(c=Math.max(a.length,
b.length);c--;)d[c]=r(a[c],b[c]);else d=r(a,b);return d}var d=this,e=d.chart,f=d.options,l=f.dataLabels,y=d.points,p,g=d.hasRendered||0,t=F(f.animation).duration,x=Math.min(t,200),u=!e.renderer.forExport&&B(l.defer,0<x),v=e.renderer;l=a(a(e.options.plotOptions&&e.options.plotOptions.series&&e.options.plotOptions.series.dataLabels,e.options.plotOptions&&e.options.plotOptions[d.type]&&e.options.plotOptions[d.type].dataLabels),l);c.fireEvent(this,"drawDataLabels");if(q(l)||l.enabled||d._hasPointLabels){var n=
d.plotGroup("dataLabelsGroup","data-labels",u&&!g?"hidden":"inherit",l.zIndex||6);u&&(n.attr({opacity:+g}),g||setTimeout(function(){var a=d.dataLabelsGroup;a&&(d.visible&&n.show(!0),a[f.animation?"animate":"attr"]({opacity:1},{duration:x}))},t-x));y.forEach(function(c){p=w(a(l,c.dlOptions||c.options&&c.options.dataLabels));p.forEach(function(a,g){var h=a.enabled&&(!c.isNull||c.dataLabelOnNull)&&b(c,a),l=c.dataLabels?c.dataLabels[g]:c.dataLabel,p=c.connectors?c.connectors[g]:c.connector,k=B(a.distance,
c.labelDistance),t=!l;if(h){var q=c.getLabelConfig();var r=B(a[c.formatPrefix+"Format"],a.format);q=H(r)?m(r,q,e):(a[c.formatPrefix+"Formatter"]||a.formatter).call(q,a);r=a.style;var y=a.rotation;e.styledMode||(r.color=B(a.color,r.color,d.color,"#000000"),"contrast"===r.color?(c.contrastColor=v.getContrast(c.color||d.color),r.color=!H(k)&&a.inside||0>k||f.stacking?c.contrastColor:"#000000"):delete c.contrastColor,f.cursor&&(r.cursor=f.cursor));var x={r:a.borderRadius||0,rotation:y,padding:a.padding,
zIndex:1};e.styledMode||(x.fill=a.backgroundColor,x.stroke=a.borderColor,x["stroke-width"]=a.borderWidth);C(x,function(a,b){"undefined"===typeof a&&delete x[b]})}!l||h&&H(q)?h&&H(q)&&(l?x.text=q:(c.dataLabels=c.dataLabels||[],l=c.dataLabels[g]=y?v.text(q,0,-9999).addClass("highcharts-data-label"):v.label(q,0,-9999,a.shape,null,null,a.useHTML,null,"data-label"),g||(c.dataLabel=l),l.addClass(" highcharts-data-label-color-"+c.colorIndex+" "+(a.className||"")+(a.useHTML?" highcharts-tracker":""))),l.options=
a,l.attr(x),e.styledMode||l.css(r).shadow(a.shadow),l.added||l.add(n),a.textPath&&!a.useHTML&&(l.setTextPath(c.getDataLabelPath&&c.getDataLabelPath(l)||c.graphic,a.textPath),c.dataLabelPath&&!a.textPath.enabled&&(c.dataLabelPath=c.dataLabelPath.destroy())),d.alignDataLabel(c,l,a,null,t)):(c.dataLabel=c.dataLabel&&c.dataLabel.destroy(),c.dataLabels&&(1===c.dataLabels.length?delete c.dataLabels:delete c.dataLabels[g]),g||delete c.dataLabel,p&&(c.connector=c.connector.destroy(),c.connectors&&(1===c.connectors.length?
delete c.connectors:delete c.connectors[g])))})})}c.fireEvent(this,"afterDrawDataLabels")};D.prototype.alignDataLabel=function(b,a,c,e,f){var d=this,h=this.chart,p=this.isCartesian&&h.inverted,g=this.enabledDataSorting,k=B(b.dlBox&&b.dlBox.centerX,b.plotX,-9999),m=B(b.plotY,-9999),q=a.getBBox(),r=c.rotation,n=c.align,u=h.isInsidePlot(k,Math.round(m),p),w="justify"===B(c.overflow,g?"none":"justify"),A=this.visible&&(b.series.forceDL||g&&!w||u||e&&h.isInsidePlot(k,p?e.x+1:e.y+e.height-1,p));var C=function(c){g&&
d.xAxis&&!w&&d.setDataLabelStartPos(b,a,f,u,c)};if(A){var D=h.renderer.fontMetrics(h.styledMode?void 0:c.style.fontSize,a).b;e=v({x:p?this.yAxis.len-m:k,y:Math.round(p?this.xAxis.len-k:m),width:0,height:0},e);v(c,{width:q.width,height:q.height});r?(w=!1,k=h.renderer.rotCorr(D,r),k={x:e.x+c.x+e.width/2+k.x,y:e.y+c.y+{top:0,middle:.5,bottom:1}[c.verticalAlign]*e.height},C(k),a[f?"attr":"animate"](k).attr({align:n}),C=(r+720)%360,C=180<C&&360>C,"left"===n?k.y-=C?q.height:0:"center"===n?(k.x-=q.width/
2,k.y-=q.height/2):"right"===n&&(k.x-=q.width,k.y-=C?0:q.height),a.placed=!0,a.alignAttr=k):(C(e),a.align(c,null,e),k=a.alignAttr);w&&0<=e.height?this.justifyDataLabel(a,c,k,q,e,f):B(c.crop,!0)&&(A=h.isInsidePlot(k.x,k.y)&&h.isInsidePlot(k.x+q.width,k.y+q.height));if(c.shape&&!r)a[f?"attr":"animate"]({anchorX:p?h.plotWidth-b.plotY:b.plotX,anchorY:p?h.plotHeight-b.plotX:b.plotY})}f&&g&&(a.placed=!1);A||g&&!w||(a.hide(!0),a.placed=!1)};D.prototype.setDataLabelStartPos=function(b,a,c,e,f){var d=this.chart,
h=d.inverted,p=this.xAxis,g=p.reversed,k=h?a.height/2:a.width/2;b=(b=b.pointWidth)?b/2:0;p=h?f.x:g?-k-b:p.width-k+b;f=h?g?this.yAxis.height-k+b:-k-b:f.y;a.startXPos=p;a.startYPos=f;e?"hidden"===a.visibility&&(a.show(),a.attr({opacity:0}).animate({opacity:1})):a.attr({opacity:1}).animate({opacity:0},void 0,a.hide);d.hasRendered&&(c&&a.attr({x:a.startXPos,y:a.startYPos}),a.placed=!0)};D.prototype.justifyDataLabel=function(b,a,c,e,f,l){var d=this.chart,h=a.align,g=a.verticalAlign,k=b.box?0:b.padding||
0;var m=c.x+k;if(0>m){"right"===h?(a.align="left",a.inside=!0):a.x=-m;var q=!0}m=c.x+e.width-k;m>d.plotWidth&&("left"===h?(a.align="right",a.inside=!0):a.x=d.plotWidth-m,q=!0);m=c.y+k;0>m&&("bottom"===g?(a.verticalAlign="top",a.inside=!0):a.y=-m,q=!0);m=c.y+e.height-k;m>d.plotHeight&&("top"===g?(a.verticalAlign="bottom",a.inside=!0):a.y=d.plotHeight-m,q=!0);q&&(b.placed=!l,b.align(a,null,f));return q};A.pie&&(A.pie.prototype.dataLabelPositioners={radialDistributionY:function(b){return b.top+b.distributeBox.pos},
radialDistributionX:function(b,a,c,e){return b.getX(c<a.top+2||c>a.bottom-2?e:c,a.half,a)},justify:function(b,a,c){return c[0]+(b.half?-1:1)*(a+b.labelDistance)},alignToPlotEdges:function(b,a,c,e){b=b.getBBox().width;return a?b+e:c-b-e},alignToConnectors:function(b,a,c,e){var d=0,f;b.forEach(function(a){f=a.dataLabel.getBBox().width;f>d&&(d=f)});return a?d+e:c-d-e}},A.pie.prototype.drawDataLabels=function(){var b=this,a=b.data,d,e=b.chart,f=b.options.dataLabels,l=f.connectorPadding,m,p=e.plotWidth,
g=e.plotHeight,q=e.plotLeft,x=Math.round(e.chartWidth/3),u,v=b.center,n=v[2]/2,z=v[1],w,A,C,F,G=[[],[]],J,K,M,S,U=[0,0,0,0],X=b.dataLabelPositioners,aa;b.visible&&(f.enabled||b._hasPointLabels)&&(a.forEach(function(a){a.dataLabel&&a.visible&&a.dataLabel.shortened&&(a.dataLabel.attr({width:"auto"}).css({width:"auto",textOverflow:"clip"}),a.dataLabel.shortened=!1)}),D.prototype.drawDataLabels.apply(b),a.forEach(function(a){a.dataLabel&&(a.visible?(G[a.half].push(a),a.dataLabel._pos=null,!H(f.style.width)&&
!H(a.options.dataLabels&&a.options.dataLabels.style&&a.options.dataLabels.style.width)&&a.dataLabel.getBBox().width>x&&(a.dataLabel.css({width:.7*x}),a.dataLabel.shortened=!0)):(a.dataLabel=a.dataLabel.destroy(),a.dataLabels&&1===a.dataLabels.length&&delete a.dataLabels))}),G.forEach(function(a,h){var k=a.length,m=[],r;if(k){b.sortByAngle(a,h-.5);if(0<b.maxLabelDistance){var t=Math.max(0,z-n-b.maxLabelDistance);var x=Math.min(z+n+b.maxLabelDistance,e.plotHeight);a.forEach(function(a){0<a.labelDistance&&
a.dataLabel&&(a.top=Math.max(0,z-n-a.labelDistance),a.bottom=Math.min(z+n+a.labelDistance,e.plotHeight),r=a.dataLabel.getBBox().height||21,a.distributeBox={target:a.labelPosition.natural.y-a.top+r/2,size:r,rank:a.y},m.push(a.distributeBox))});t=x+r-t;c.distribute(m,t,t/5)}for(S=0;S<k;S++){d=a[S];C=d.labelPosition;w=d.dataLabel;M=!1===d.visible?"hidden":"inherit";K=t=C.natural.y;m&&H(d.distributeBox)&&("undefined"===typeof d.distributeBox.pos?M="hidden":(F=d.distributeBox.size,K=X.radialDistributionY(d)));
delete d.positionIndex;if(f.justify)J=X.justify(d,n,v);else switch(f.alignTo){case "connectors":J=X.alignToConnectors(a,h,p,q);break;case "plotEdges":J=X.alignToPlotEdges(w,h,p,q);break;default:J=X.radialDistributionX(b,d,K,t)}w._attr={visibility:M,align:C.alignment};w._pos={x:J+f.x+({left:l,right:-l}[C.alignment]||0),y:K+f.y-10};C.final.x=J;C.final.y=K;B(f.crop,!0)&&(A=w.getBBox().width,t=null,J-A<l&&1===h?(t=Math.round(A-J+l),U[3]=Math.max(t,U[3])):J+A>p-l&&0===h&&(t=Math.round(J+A-p+l),U[1]=Math.max(t,
U[1])),0>K-F/2?U[0]=Math.max(Math.round(-K+F/2),U[0]):K+F/2>g&&(U[2]=Math.max(Math.round(K+F/2-g),U[2])),w.sideOverflow=t)}}}),0===I(U)||this.verifyDataLabelOverflow(U))&&(this.placeDataLabels(),this.points.forEach(function(a){aa=r(f,a.options.dataLabels);if(m=B(aa.connectorWidth,1)){var c;u=a.connector;if((w=a.dataLabel)&&w._pos&&a.visible&&0<a.labelDistance){M=w._attr.visibility;if(c=!u)a.connector=u=e.renderer.path().addClass("highcharts-data-label-connector  highcharts-color-"+a.colorIndex+(a.className?
" "+a.className:"")).add(b.dataLabelsGroup),e.styledMode||u.attr({"stroke-width":m,stroke:aa.connectorColor||a.color||"#666666"});u[c?"attr":"animate"]({d:a.getConnectorPath()});u.attr("visibility",M)}else u&&(a.connector=u.destroy())}}))},A.pie.prototype.placeDataLabels=function(){this.points.forEach(function(b){var a=b.dataLabel,c;a&&b.visible&&((c=a._pos)?(a.sideOverflow&&(a._attr.width=Math.max(a.getBBox().width-a.sideOverflow,0),a.css({width:a._attr.width+"px",textOverflow:(this.options.dataLabels.style||
{}).textOverflow||"ellipsis"}),a.shortened=!0),a.attr(a._attr),a[a.moved?"animate":"attr"](c),a.moved=!0):a&&a.attr({y:-9999}));delete b.distributeBox},this)},A.pie.prototype.alignDataLabel=e,A.pie.prototype.verifyDataLabelOverflow=function(b){var a=this.center,c=this.options,e=c.center,f=c.minSize||80,l=null!==c.size;if(!l){if(null!==e[0])var m=Math.max(a[2]-Math.max(b[1],b[3]),f);else m=Math.max(a[2]-b[1]-b[3],f),a[0]+=(b[3]-b[1])/2;null!==e[1]?m=G(m,f,a[2]-Math.max(b[0],b[2])):(m=G(m,f,a[2]-b[0]-
b[2]),a[1]+=(b[0]-b[2])/2);m<a[2]?(a[2]=m,a[3]=Math.min(u(c.innerSize||0,m),m),this.translate(a),this.drawDataLabels&&this.drawDataLabels()):l=!0}return l});A.column&&(A.column.prototype.alignDataLabel=function(b,a,c,e,f){var d=this.chart.inverted,h=b.series,p=b.dlBox||b.shapeArgs,g=B(b.below,b.plotY>B(this.translatedThreshold,h.yAxis.len)),k=B(c.inside,!!this.options.stacking);p&&(e=r(p),0>e.y&&(e.height+=e.y,e.y=0),p=e.y+e.height-h.yAxis.len,0<p&&(e.height-=p),d&&(e={x:h.yAxis.len-e.y-e.height,
y:h.xAxis.len-e.x-e.width,width:e.height,height:e.width}),k||(d?(e.x+=g?0:e.width,e.width=0):(e.y+=g?e.height:0,e.height=0)));c.align=B(c.align,!d||k?"center":g?"right":"left");c.verticalAlign=B(c.verticalAlign,d||k?"middle":g?"top":"bottom");D.prototype.alignDataLabel.call(this,b,a,c,e,f);e&&(0>=e.height&&e.y===this.chart.plotHeight||0>=e.width&&0===e.x)&&(a.hide(!0),a.placed=!1);c.inside&&b.contrastColor&&a.css({color:b.contrastColor})})});M(J,"modules/overlapping-datalabels.src.js",[J["parts/Globals.js"],
J["parts/Utilities.js"]],function(c,e){var F=e.isArray,I=e.objectEach,G=e.pick;e=c.Chart;var H=c.addEvent,v=c.fireEvent;H(e,"render",function(){var c=[];(this.labelCollectors||[]).forEach(function(e){c=c.concat(e())});(this.yAxis||[]).forEach(function(e){e.options.stackLabels&&!e.options.stackLabels.allowOverlap&&I(e.stacks,function(e){I(e,function(e){c.push(e.label)})})});(this.series||[]).forEach(function(e){var q=e.options.dataLabels;e.visible&&(!1!==q.enabled||e._hasPointLabels)&&e.points.forEach(function(e){e.visible&&
(F(e.dataLabels)?e.dataLabels:e.dataLabel?[e.dataLabel]:[]).forEach(function(q){var m=q.options;q.labelrank=G(m.labelrank,e.labelrank,e.shapeArgs&&e.shapeArgs.height);m.allowOverlap||c.push(q)})})});this.hideOverlappingLabels(c)});e.prototype.hideOverlappingLabels=function(c){var e=this,q=c.length,u=e.renderer,w,m,r,D=!1;var A=function(a){var b=a.box?0:a.padding||0;var c=0;if(a&&(!a.alignAttr||a.placed)){var e=a.alignAttr||{x:a.attr("x"),y:a.attr("y")};var f=a.parentGroup;a.width||(c=a.getBBox(),
a.width=c.width,a.height=c.height,c=u.fontMetrics(null,a.element).h);return{x:e.x+(f.translateX||0)+b,y:e.y+(f.translateY||0)+b-c,width:a.width-2*b,height:a.height-2*b}}};for(m=0;m<q;m++)if(w=c[m])w.oldOpacity=w.opacity,w.newOpacity=1,w.absoluteBox=A(w);c.sort(function(a,b){return(b.labelrank||0)-(a.labelrank||0)});for(m=0;m<q;m++){var f=(A=c[m])&&A.absoluteBox;for(w=m+1;w<q;++w){var b=(r=c[w])&&r.absoluteBox;!f||!b||A===r||0===A.newOpacity||0===r.newOpacity||b.x>f.x+f.width||b.x+b.width<f.x||b.y>
f.y+f.height||b.y+b.height<f.y||((A.labelrank<r.labelrank?A:r).newOpacity=0)}}c.forEach(function(a){var b;if(a){var c=a.newOpacity;a.oldOpacity!==c&&(a.alignAttr&&a.placed?(c?a.show(!0):b=function(){a.hide(!0);a.placed=!1},D=!0,a.alignAttr.opacity=c,a[a.isOld?"animate":"attr"](a.alignAttr,null,b),v(e,"afterHideOverlappingLabel")):a.attr({opacity:c}));a.isOld=!0}});D&&v(e,"afterHideAllOverlappingLabels")}});M(J,"parts/Interaction.js",[J["parts/Globals.js"],J["parts/Utilities.js"]],function(c,e){var F=
e.defined,I=e.extend,G=e.isArray,H=e.isObject,v=e.objectEach,q=e.pick,C=c.addEvent;e=c.Chart;var B=c.createElement,u=c.css,w=c.defaultOptions,m=c.defaultPlotOptions,r=c.fireEvent,D=c.hasTouch,A=c.Legend,f=c.merge,b=c.Point,a=c.Series,d=c.seriesTypes,h=c.svg;var k=c.TrackerMixin={drawTrackerPoint:function(){var a=this,b=a.chart,c=b.pointer,d=function(a){var b=c.getPointFromEvent(a);"undefined"!==typeof b&&(c.isDirectTouch=!0,b.onMouseOver(a))},e;a.points.forEach(function(a){e=G(a.dataLabels)?a.dataLabels:
a.dataLabel?[a.dataLabel]:[];a.graphic&&(a.graphic.element.point=a);e.forEach(function(b){b.div?b.div.point=a:b.element.point=a})});a._hasTracking||(a.trackerGroups.forEach(function(e){if(a[e]){a[e].addClass("highcharts-tracker").on("mouseover",d).on("mouseout",function(a){c.onTrackerMouseOut(a)});if(D)a[e].on("touchstart",d);!b.styledMode&&a.options.cursor&&a[e].css(u).css({cursor:a.options.cursor})}}),a._hasTracking=!0);r(this,"afterDrawTracker")},drawTrackerGraph:function(){var a=this,b=a.options,
c=b.trackByArea,d=[].concat(c?a.areaPath:a.graphPath),e=d.length,f=a.chart,k=f.pointer,m=f.renderer,n=f.options.tooltip.snap,q=a.tracker,u,v=function(){if(f.hoverSeries!==a)a.onMouseOver()},w="rgba(192,192,192,"+(h?.0001:.002)+")";if(e&&!c)for(u=e+1;u--;)"M"===d[u]&&d.splice(u+1,0,d[u+1]-n,d[u+2],"L"),(u&&"M"===d[u]||u===e)&&d.splice(u,0,"L",d[u-2]+n,d[u-1]);q?q.attr({d:d}):a.graph&&(a.tracker=m.path(d).attr({visibility:a.visible?"visible":"hidden",zIndex:2}).addClass(c?"highcharts-tracker-area":
"highcharts-tracker-line").add(a.group),f.styledMode||a.tracker.attr({"stroke-linejoin":"round",stroke:w,fill:c?w:"none","stroke-width":a.graph.strokeWidth()+(c?0:2*n)}),[a.tracker,a.markerGroup].forEach(function(a){a.addClass("highcharts-tracker").on("mouseover",v).on("mouseout",function(a){k.onTrackerMouseOut(a)});b.cursor&&!f.styledMode&&a.css({cursor:b.cursor});if(D)a.on("touchstart",v)}));r(this,"afterDrawTracker")}};d.column&&(d.column.prototype.drawTracker=k.drawTrackerPoint);d.pie&&(d.pie.prototype.drawTracker=
k.drawTrackerPoint);d.scatter&&(d.scatter.prototype.drawTracker=k.drawTrackerPoint);I(A.prototype,{setItemEvents:function(a,c,d){var e=this,h=e.chart.renderer.boxWrapper,l=a instanceof b,p="highcharts-legend-"+(l?"point":"series")+"-active",k=e.chart.styledMode;(d?c:a.legendGroup).on("mouseover",function(){a.visible&&e.allItems.forEach(function(b){a!==b&&b.setState("inactive",!l)});a.setState("hover");a.visible&&h.addClass(p);k||c.css(e.options.itemHoverStyle)}).on("mouseout",function(){e.chart.styledMode||
c.css(f(a.visible?e.itemStyle:e.itemHiddenStyle));e.allItems.forEach(function(b){a!==b&&b.setState("",!l)});h.removeClass(p);a.setState()}).on("click",function(b){var c=function(){a.setVisible&&a.setVisible();e.allItems.forEach(function(b){a!==b&&b.setState(a.visible?"inactive":"",!l)})};h.removeClass(p);b={browserEvent:b};a.firePointEvent?a.firePointEvent("legendItemClick",b,c):r(a,"legendItemClick",b,c)})},createCheckboxForItem:function(a){a.checkbox=B("input",{type:"checkbox",className:"highcharts-legend-checkbox",
checked:a.selected,defaultChecked:a.selected},this.options.itemCheckboxStyle,this.chart.container);C(a.checkbox,"click",function(b){r(a.series||a,"checkboxClick",{checked:b.target.checked,item:a},function(){a.select()})})}});I(e.prototype,{showResetZoom:function(){function a(){b.zoomOut()}var b=this,c=w.lang,d=b.options.chart.resetZoomButton,e=d.theme,f=e.states,h="chart"===d.relativeTo||"spaceBox"===d.relativeTo?null:"plotBox";r(this,"beforeShowResetZoom",null,function(){b.resetZoomButton=b.renderer.button(c.resetZoom,
null,null,a,e,f&&f.hover).attr({align:d.position.align,title:c.resetZoomTitle}).addClass("highcharts-reset-zoom").add().align(d.position,!1,h)});r(this,"afterShowResetZoom")},zoomOut:function(){r(this,"selection",{resetSelection:!0},this.zoom)},zoom:function(a){var b=this,c,d=b.pointer,e=!1,f=b.inverted?d.mouseDownX:d.mouseDownY;!a||a.resetSelection?(b.axes.forEach(function(a){c=a.zoom()}),d.initiated=!1):a.xAxis.concat(a.yAxis).forEach(function(a){var g=a.axis,h=b.inverted?g.left:g.top,l=b.inverted?
h+g.width:h+g.height,p=g.isXAxis,k=!1;if(!p&&f>=h&&f<=l||p||!F(f))k=!0;d[p?"zoomX":"zoomY"]&&k&&(c=g.zoom(a.min,a.max),g.displayBtn&&(e=!0))});var h=b.resetZoomButton;e&&!h?b.showResetZoom():!e&&H(h)&&(b.resetZoomButton=h.destroy());c&&b.redraw(q(b.options.chart.animation,a&&a.animation,100>b.pointCount))},pan:function(a,b){var c=this,d=c.hoverPoints,e=c.options.chart,f;b="object"===typeof b?b:{enabled:b,type:"x"};e&&e.panning&&(e.panning=b);var h=b.type;r(this,"pan",{originalEvent:a},function(){d&&
d.forEach(function(a){a.setState()});var b=[1];"xy"===h?b=[1,0]:"y"===h&&(b=[0]);b.forEach(function(b){var d=c[b?"xAxis":"yAxis"][0],e=d.options,g=d.horiz,h=a[g?"chartX":"chartY"];g=g?"mouseDownX":"mouseDownY";var l=c[g],k=(d.pointRange||0)/2,p=d.reversed&&!c.inverted||!d.reversed&&c.inverted?-1:1,m=d.getExtremes(),n=d.toValue(l-h,!0)+k*p;p=d.toValue(l+d.len-h,!0)-k*p;var q=p<n;l=q?p:n;n=q?n:p;p=Math.min(m.dataMin,k?m.min:d.toValue(d.toPixels(m.min)-d.minPixelPadding));k=Math.max(m.dataMax,k?m.max:
d.toValue(d.toPixels(m.max)+d.minPixelPadding));if(!e.ordinal){b&&(e=p-l,0<e&&(n+=e,l=p),e=n-k,0<e&&(n=k,l-=e));if(d.series.length&&l!==m.min&&n!==m.max&&b||d.panningState&&l>=d.panningState.startMin&&n<=d.panningState.startMax)d.setExtremes(l,n,!1,!1,{trigger:"pan"}),f=!0;c[g]=h}});f&&c.redraw(!1);u(c.container,{cursor:"move"})})}});I(b.prototype,{select:function(a,b){var c=this,d=c.series,e=d.chart;this.selectedStaging=a=q(a,!c.selected);c.firePointEvent(a?"select":"unselect",{accumulate:b},function(){c.selected=
c.options.selected=a;d.options.data[d.data.indexOf(c)]=c.options;c.setState(a&&"select");b||e.getSelectedPoints().forEach(function(a){var b=a.series;a.selected&&a!==c&&(a.selected=a.options.selected=!1,b.options.data[b.data.indexOf(a)]=a.options,a.setState(e.hoverPoints&&b.options.inactiveOtherPoints?"inactive":""),a.firePointEvent("unselect"))})});delete this.selectedStaging},onMouseOver:function(a){var b=this.series.chart,c=b.pointer;a=a?c.normalize(a):c.getChartCoordinatesFromPoint(this,b.inverted);
c.runPointActions(a,this)},onMouseOut:function(){var a=this.series.chart;this.firePointEvent("mouseOut");this.series.options.inactiveOtherPoints||(a.hoverPoints||[]).forEach(function(a){a.setState()});a.hoverPoints=a.hoverPoint=null},importEvents:function(){if(!this.hasImportedEvents){var a=this,b=f(a.series.options.point,a.options).events;a.events=b;v(b,function(b,d){c.isFunction(b)&&C(a,d,b)});this.hasImportedEvents=!0}},setState:function(a,b){var c=this.series,d=this.state,e=c.options.states[a||
"normal"]||{},f=m[c.type].marker&&c.options.marker,h=f&&!1===f.enabled,l=f&&f.states&&f.states[a||"normal"]||{},k=!1===l.enabled,u=c.stateMarkerGraphic,v=this.marker||{},y=c.chart,w=c.halo,A,B=f&&c.markerAttribs;a=a||"";if(!(a===this.state&&!b||this.selected&&"select"!==a||!1===e.enabled||a&&(k||h&&!1===l.enabled)||a&&v.states&&v.states[a]&&!1===v.states[a].enabled)){this.state=a;B&&(A=c.markerAttribs(this,a));if(this.graphic){d&&this.graphic.removeClass("highcharts-point-"+d);a&&this.graphic.addClass("highcharts-point-"+
a);if(!y.styledMode){var C=c.pointAttribs(this,a);var D=q(y.options.chart.animation,e.animation);c.options.inactiveOtherPoints&&((this.dataLabels||[]).forEach(function(a){a&&a.animate({opacity:C.opacity},D)}),this.connector&&this.connector.animate({opacity:C.opacity},D));this.graphic.animate(C,D)}A&&this.graphic.animate(A,q(y.options.chart.animation,l.animation,f.animation));u&&u.hide()}else{if(a&&l){d=v.symbol||c.symbol;u&&u.currentSymbol!==d&&(u=u.destroy());if(A)if(u)u[b?"animate":"attr"]({x:A.x,
y:A.y});else d&&(c.stateMarkerGraphic=u=y.renderer.symbol(d,A.x,A.y,A.width,A.height).add(c.markerGroup),u.currentSymbol=d);!y.styledMode&&u&&u.attr(c.pointAttribs(this,a))}u&&(u[a&&this.isInside?"show":"hide"](),u.element.point=this)}a=e.halo;e=(u=this.graphic||u)&&u.visibility||"inherit";a&&a.size&&u&&"hidden"!==e&&!this.isCluster?(w||(c.halo=w=y.renderer.path().add(u.parentGroup)),w.show()[b?"animate":"attr"]({d:this.haloPath(a.size)}),w.attr({"class":"highcharts-halo highcharts-color-"+q(this.colorIndex,
c.colorIndex)+(this.className?" "+this.className:""),visibility:e,zIndex:-1}),w.point=this,y.styledMode||w.attr(I({fill:this.color||c.color,"fill-opacity":a.opacity},a.attributes))):w&&w.point&&w.point.haloPath&&w.animate({d:w.point.haloPath(0)},null,w.hide);r(this,"afterSetState")}},haloPath:function(a){return this.series.chart.renderer.symbols.circle(Math.floor(this.plotX)-a,this.plotY-a,2*a,2*a)}});I(a.prototype,{onMouseOver:function(){var a=this.chart,b=a.hoverSeries;if(b&&b!==this)b.onMouseOut();
this.options.events.mouseOver&&r(this,"mouseOver");this.setState("hover");a.hoverSeries=this},onMouseOut:function(){var a=this.options,b=this.chart,c=b.tooltip,d=b.hoverPoint;b.hoverSeries=null;if(d)d.onMouseOut();this&&a.events.mouseOut&&r(this,"mouseOut");!c||this.stickyTracking||c.shared&&!this.noSharedTooltip||c.hide();b.series.forEach(function(a){a.setState("",!0)})},setState:function(a,b){var c=this,d=c.options,e=c.graph,f=d.inactiveOtherPoints,h=d.states,l=d.lineWidth,k=d.opacity,m=q(h[a||
"normal"]&&h[a||"normal"].animation,c.chart.options.chart.animation);d=0;a=a||"";if(c.state!==a&&([c.group,c.markerGroup,c.dataLabelsGroup].forEach(function(b){b&&(c.state&&b.removeClass("highcharts-series-"+c.state),a&&b.addClass("highcharts-series-"+a))}),c.state=a,!c.chart.styledMode)){if(h[a]&&!1===h[a].enabled)return;a&&(l=h[a].lineWidth||l+(h[a].lineWidthPlus||0),k=q(h[a].opacity,k));if(e&&!e.dashstyle)for(h={"stroke-width":l},e.animate(h,m);c["zone-graph-"+d];)c["zone-graph-"+d].attr(h),d+=
1;f||[c.group,c.markerGroup,c.dataLabelsGroup,c.labelBySeries].forEach(function(a){a&&a.animate({opacity:k},m)})}b&&f&&c.points&&c.setAllPointsToState(a)},setAllPointsToState:function(a){this.points.forEach(function(b){b.setState&&b.setState(a)})},setVisible:function(a,b){var c=this,d=c.chart,e=c.legendItem,f=d.options.chart.ignoreHiddenSeries,h=c.visible;var k=(c.visible=a=c.options.visible=c.userOptions.visible="undefined"===typeof a?!h:a)?"show":"hide";["group","dataLabelsGroup","markerGroup",
"tracker","tt"].forEach(function(a){if(c[a])c[a][k]()});if(d.hoverSeries===c||(d.hoverPoint&&d.hoverPoint.series)===c)c.onMouseOut();e&&d.legend.colorizeItem(c,a);c.isDirty=!0;c.options.stacking&&d.series.forEach(function(a){a.options.stacking&&a.visible&&(a.isDirty=!0)});c.linkedSeries.forEach(function(b){b.setVisible(a,!1)});f&&(d.isDirtyBox=!0);r(c,k);!1!==b&&d.redraw()},show:function(){this.setVisible(!0)},hide:function(){this.setVisible(!1)},select:function(a){this.selected=a=this.options.selected=
"undefined"===typeof a?!this.selected:a;this.checkbox&&(this.checkbox.checked=a);r(this,a?"select":"unselect")},drawTracker:k.drawTrackerGraph})});M(J,"parts/Responsive.js",[J["parts/Globals.js"],J["parts/Utilities.js"]],function(c,e){var F=e.isArray,I=e.isObject,G=e.objectEach,H=e.pick,v=e.splat;e=c.Chart;e.prototype.setResponsive=function(e,v){var q=this.options.responsive,u=[],w=this.currentResponsive;!v&&q&&q.rules&&q.rules.forEach(function(e){"undefined"===typeof e._id&&(e._id=c.uniqueKey());
this.matchResponsiveRule(e,u)},this);v=c.merge.apply(0,u.map(function(e){return c.find(q.rules,function(c){return c._id===e}).chartOptions}));v.isResponsiveOptions=!0;u=u.toString()||void 0;u!==(w&&w.ruleIds)&&(w&&this.update(w.undoOptions,e,!0),u?(w=this.currentOptions(v),w.isResponsiveOptions=!0,this.currentResponsive={ruleIds:u,mergedOptions:v,undoOptions:w},this.update(v,e,!0)):this.currentResponsive=void 0)};e.prototype.matchResponsiveRule=function(c,e){var q=c.condition;(q.callback||function(){return this.chartWidth<=
H(q.maxWidth,Number.MAX_VALUE)&&this.chartHeight<=H(q.maxHeight,Number.MAX_VALUE)&&this.chartWidth>=H(q.minWidth,0)&&this.chartHeight>=H(q.minHeight,0)}).call(this)&&e.push(c._id)};e.prototype.currentOptions=function(c){function e(c,m,r,u){var w;G(c,function(c,b){if(!u&&-1<q.collectionsWithUpdate.indexOf(b))for(c=v(c),r[b]=[],w=0;w<c.length;w++)m[b][w]&&(r[b][w]={},e(c[w],m[b][w],r[b][w],u+1));else I(c)?(r[b]=F(c)?[]:{},e(c,m[b]||{},r[b],u+1)):r[b]="undefined"===typeof m[b]?null:m[b]})}var q=this,
u={};e(c,this.options,u,0);return u}});M(J,"masters/highcharts.src.js",[J["parts/Globals.js"],J["parts/Utilities.js"]],function(c,e){var F=e.extend;F(c,{animObject:e.animObject,arrayMax:e.arrayMax,arrayMin:e.arrayMin,attr:e.attr,correctFloat:e.correctFloat,defined:e.defined,destroyObjectProperties:e.destroyObjectProperties,discardElement:e.discardElement,erase:e.erase,extend:e.extend,extendClass:e.extendClass,isArray:e.isArray,isClass:e.isClass,isDOMElement:e.isDOMElement,isNumber:e.isNumber,isObject:e.isObject,
isString:e.isString,numberFormat:e.numberFormat,objectEach:e.objectEach,offset:e.offset,pad:e.pad,pick:e.pick,pInt:e.pInt,relativeLength:e.relativeLength,setAnimation:e.setAnimation,splat:e.splat,syncTimeout:e.syncTimeout,wrap:e.wrap});return c});J["masters/highcharts.src.js"]._modules=J;return J["masters/highcharts.src.js"]});
//# sourceMappingURL=highcharts.js.map
$(document).ready(function() {
  $(function() {
    $('.datepicker').datepicker({
      dateFormat: 'yy/mm/dd',
      showButtonPanel: false,
      changeMonth: false,
      changeYear: false,
      /*showOn: "button",
      buttonImage: "images/calendar.gif",
      buttonImageOnly: true,
      minDate: '+1D',
      maxDate: '+3M',*/
      inline: true
    });
  });
  $.datepicker.regional['es'] = {
    closeText: 'Cerrar',
    prevText: '<Ant',
    nextText: 'Sig>',
    currentText: 'Hoy',
    monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
    monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
    dayNames: ['Domingo', 'f8', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
    dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
    dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
    weekHeader: 'Sm',
    dateFormat: 'yy/mm/dd',
    firstDay: 1,
    isRTL: false,
    showMonthAfterYear: false,
    yearSuffix: ''
  };
  $.datepicker.setDefaults($.datepicker.regional['es']);
});
</script>
<!DOCTYPE html>
<html lang="en">
<style type="text/css">
 .form-group {
    margin-bottom: 1rem;
    display: inline-flex;
    width: 23%;
}
div.dataTables_wrapper div.dataTables_length select {
    width: 73px;
    display: inline-block;
}
.card-body {
    flex: 1 1 auto;
    padding: 1.05rem;
    color: #292a2d;
}

.chart-pie {
    height: calc(11rem - 43px)!important;
}

</style>
   <style type="text/css">
#container1 {
  height: 150px !important; 
}

.highcharts-figure, .highcharts-data-table table {
  min-width: 310px; 
  max-width: 800px;
  margin: 1em auto;
}

.highcharts-data-table table {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #EBEBEB;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 200px;
}


        </style>        
        <!-- End 

<?php
check_admin();
//0 apenas comprado
//1 preparando compra
//2 en camino
//3 despachado

?>




<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Open</title>



Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
<style type="text/css">
  .form-group {
    margin-bottom: 1rem;
    display: inline-block;
    width: 20%;
}
</style>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
       

          <!-- Page Heading -->
         
  

<?php
$sq = $mysqli->query("SELECT * FROM compven WHERE estado = 0 AND id_vendedor = '".$_SESSION['id_vendedor']. "' ");

$contador1 = 0;
while($rq=mysqli_fetch_array($sq)){

$contador1 ++;}

  
$se = $mysqli->query("SELECT * FROM compven WHERE estado = 2 AND id_vendedor = '".$_SESSION['id_vendedor']. "' ");
  
$contador2 = 0; 
while($re=mysqli_fetch_array($se)){

$contador2 ++;}


$sf = $mysqli->query("SELECT * FROM compven WHERE estado = 3 AND id_vendedor = '".$_SESSION['id_vendedor']. "' ");

$contador3 = 0;
while($rf=mysqli_fetch_array($sf)){

$contador3 ++;}



 


$id_vendedor = $_SESSION['id_vendedor'];

#separas la fecha en subcadenas y asignarlas a variables
#relacionadas en contenido, por ejemplo dia, mes y anio.

$semanau=date('W');
$aniox= date('Y');

//donde:
        
#W (mayúscula) te devuelve el número de semana
#w (minúscula) te devuelve el número de día dentro de la semana (0=domingo, #6=sabado)



$montototalsem = 0;

$s1 = "SELECT  COALESCE(SUM(monto),0) AS f1 FROM compven WHERE id_vendedor = '$id_vendedor' AND semana = '$semanau' AND WEEKDAY(fecha)=0 AND year(fecha) = $aniox";
$res1= $mysqli->query($s1);
$data1=mysqli_fetch_array($res1);

$s2 = "SELECT  COALESCE(SUM(monto),0) AS f2 FROM compven WHERE id_vendedor = '$id_vendedor' AND semana = '$semanau' AND WEEKDAY(fecha)=1 AND year(fecha) = $aniox";
$res2= $mysqli->query($s2);
$data2=mysqli_fetch_array($res2);

$s3 = "SELECT  COALESCE(SUM(monto),0) AS f3 FROM compven WHERE id_vendedor = '$id_vendedor' AND semana = '$semanau' AND WEEKDAY(fecha)=2 AND year(fecha) = $aniox";
$res3= $mysqli->query($s3);
$data3=mysqli_fetch_array($res3);

$s4 = "SELECT  COALESCE(SUM(monto),0) AS f4 FROM compven WHERE id_vendedor = '$id_vendedor' AND semana = '$semanau' AND WEEKDAY(fecha)=3 AND year(fecha) = $aniox";
$res4= $mysqli->query($s4);
$data4=mysqli_fetch_array($res4);

$s5 = "SELECT  COALESCE(SUM(monto),0) AS f5 FROM compven WHERE id_vendedor = '$id_vendedor' AND semana = '$semanau' AND WEEKDAY(fecha)=4 AND year(fecha) = $aniox";
$res5= $mysqli->query($s5);
$data5=mysqli_fetch_array($res5);

$s6 = "SELECT  COALESCE(SUM(monto),0) AS f6 FROM compven WHERE id_vendedor = '$id_vendedor' AND semana = '$semanau' AND WEEKDAY(fecha)=5 AND year(fecha) = $aniox";
$res6= $mysqli->query($s6);
$data6=mysqli_fetch_array($res6);


$s7 = "SELECT  COALESCE(SUM(monto),0) AS f7 FROM compven WHERE id_vendedor = '$id_vendedor' AND semana = '$semanau' AND WEEKDAY(fecha)=6 AND year(fecha) = $aniox";
$res7 = $mysqli->query($s7);
$data7 = mysqli_fetch_array($res7);

$montototalsem= $data1['f1'] + $data2['f2'] + $data3['f3'] + $data4['f4'] + $data5['f5'] + $data6['f6'] + $data7['f7'];





?>
<script src="code/highcharts.js"></script>
<script src="code/modules/exporting.js"></script>
<script src="code/modules/export-data.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>




        <script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Ventas esta semana',
    },
    subtitle: {
        text: 'Monto total de la semana: $ 0'
    },
    xAxis: {
        categories: ['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo']

    },
    yAxis: {
        title: {
            text: 'Monto (COP)'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{

        name: 'Monto diario',
        data: [0,0,0,0,0,0,0]
    },]
});
// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable();
});

        </script>
    </body>
  </li></li>
        <!-- DataTales Example -->

        </div>



<?php



$año = date("Y");   

//$s = $mysqli->query("SELECT * FROM compVEN WHERE estado != 7 ");
if(isset($eliminar)){
  $eliminar = clear($eliminar);

$mysqli->query("DELETE FROM comraven WHERE id_compra = '$eliminar'");

  $mysqli->query("DELETE FROM compra WHERE id = '$eliminar'");
  redir("?p=manejar_tracking");
}



?>
  



<!-- Area Chart -->
          

        <!-- /.container-fluid -->

    
      <!-- End of Main Content -->

      <!-- Footer -->
    
      <!-- End of Footer -->

  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->


  <!-- Logout Modal-->
 

  <!-- Bootstrap core JavaScript-->

  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>


  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
</body>

</html>
<style type="text/css">
  .sidebar {
    width: 6.5rem;
    background-color: #36373a;
    min-height: 100vh;
}
.card-body {
    flex: 1 1 auto;
    padding: 1.25rem;
    color: #292a2d;
}
table.dataTable {
    clear: both;
    margin-top: 6px !important;
    margin-bottom: 6px !important;
    max-width: none !important;
    border-collapse: separate !important;
    color: #292a2d;
    border-spacing: 0;
}
.h1, h1 {
    font-size: 1.2rem;
}
.text-gray-600 {
    color: #5a5c69!important;
}
</style>
<style type="text/css">
  .form-group {
    margin-bottom: 1rem;
    display: inline-block;
    width: 20%;
}
#primary_nav_wrap
{
  margin-top:15px
}

#primary_nav_wrap ul
{
  list-style:none;
  position:relative;
  float:left;
  margin:0;
  padding:0
}

#primary_nav_wrap ul a
{
  display:block;
  color:#333;
  text-decoration:none;
  font-weight:700;
  font-size:12px;
  line-height:32px;
  padding:0 15px;
  font-family:"HelveticaNeue","Helvetica Neue",Helvetica,Arial,sans-serif
}

#primary_nav_wrap ul li
{
  position:relative;
  float:left;
  margin:0;
  padding:0
}

#primary_nav_wrap ul li.current-menu-item
{
  background:#ddd
}

#primary_nav_wrap ul li:hover
{
  background:#f6f6f6
}

#primary_nav_wrap ul ul
{
  display:none;
  position:absolute;
  top:100%;
  left:0;
  background:#fff;
  padding:0
}

#primary_nav_wrap ul ul li
{
  float:none;
  width:200px
}

#primary_nav_wrap ul ul a
{
  line-height:120%;
  padding:10px 15px
}

#primary_nav_wrap ul ul ul
{
  top:0;
  left:100%
}

#primary_nav_wrap ul li:hover > ul
{
  display:block
}
.text-gray-800 {
    color: #302a2d!important;
}
</style>
                </div>
           </div>

        
            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4"  style="box-shadow: none!important;border: 1px solid #bbbbc3;">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary" style="color: #36373a!important;">Entregas hoy</h6>
                  <div class="dropdown no-arrow">
                   
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body" style="padding: 0.5rem 1.25rem 1.25rem 1.25rem;">
                  <?php
                  $semana = date("W");

$contador154 = 0;
$contador254 = 0;
$contador354 = 0;

$see = $mysqli->query("SELECT * FROM compven WHERE semana = '$semana' AND estado >0 AND id_vendedor = '".$_SESSION['id_vendedor']. "' ");
while($ree=mysqli_fetch_array($see)){
$contador154 ++;}
 
 $sr54 = $mysqli->query("SELECT * FROM compven WHERE  semana = '$semana' AND estado = 1  AND id_vendedor = '".$_SESSION['id_vendedor']. "' ");
while($rr54=mysqli_fetch_array($sr54)){
$contador254 ++;}

$st54 = $mysqli->query("SELECT * FROM compven WHERE semana = '$semana' AND estado = 2 AND id_vendedor = '".$_SESSION['id_vendedor']. "' ");
while($ro54=mysqli_fetch_array($st54)){
$contador354 ++;}


$ere= (100/$contador154);
$er = $ere*$contador254;
$era = 100-$er;
if($contador154==0){
    ?>
  <h1   style="padding: 80px;">No hay compras revisadas</h1>
  <?php
}else{
?>

<figure class="highcharts-figure">
    <div id="container1"></div>
    <p class="highcharts-description">
 <center>
       <span class="mr-2">
                      <i class="fas fa-circle text-primary" style="color:#434348!important"></i> Entregados
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success" style="color:#7cb5ec!important"></i> Faltantes
                    </span>
                    </center>          
        
    </p>
</figure>
<?php
}
?>

        <script type="text/javascript">
Highcharts.chart('container1', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45,
            beta: 0
        }
    },
    
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 35,
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        }
    },
    series: [{
        type: 'pie',
        name: 'Porcentaje',
        data: [
           
            ['Faltan', 52.17],
            ['Entregados', 47.83],
           
        ]
    }]
});
        </script>
    </body>

</html>

    </div>
              </div>
            </div>
          </div>
          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4" style="box-shadow: none!important;border: 1px solid #bbbbc3;">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary" style="color: #2acb91!important;">Porcentaje de ventas este mes</h6>
                </div>
                <div class="card-body">
                  <?php
 $sl12 = $mysqli->query("SELECT * FROM productosemp WHERE id_vendedor= '".$_SESSION['id_vendedor']. "' ");
while($rl12 =mysqli_fetch_array($sl12)){
    $contador32 ++;
}
if($contador32>0){
                  $mes = date('m');
$sl = $mysqli->query("SELECT * FROM productosemp WHERE id_vendedor= '".$_SESSION['id_vendedor']. "' ");
while($rl =mysqli_fetch_array($sl)){
$productos = $rl['id'];
$contador11= 0;
$contadorto= 0;
$sx = $mysqli->query("SELECT * FROM compra WHERE MONTH(fecha) = '$mes' ");
while($rx =mysqli_fetch_array($sx)){
$compra = $rx['id'];
$sd = $mysqli->query("SELECT * FROM productos_compra WHERE id_compra = '$compra' AND id_vendedor = '$id_vendedor' ");
while($rd =mysqli_fetch_array($sd)){
  $contadorto++;
}
$sy = $mysqli->query("SELECT * FROM productos_compra WHERE id_compra = '$compra' AND id_producto = '$productos' ");
while($ry =mysqli_fetch_array($sy)){
  $contador11++;
}
}
if($contadorto==0){
  $contadoruni=0;
}else{
$contadoruni=(100/$contadorto)*$contador11;
}
  ?>

                  <h4 class="small font-weight-bold"><?=$rl['name']?> (Total de unidades vendidas: <?=$contador11?>)<span class="float-right">
                    <?php
                    echo round($contadoruni,1);
                    ?>%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-info" role="progressbar" style="width: <?=$contadoruni?>%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                
                  <?php
                }
}else{
    ?>
    <h1>No has agregado productos</h1>
    <?php
}
                ?>
                  
                </div>
              </div>

              <!-- Color System -->
         
              </div>

            </div>

            <div class="col-lg-6 mb-4">

              <!-- Illustrations -->
             

              <!-- Approach -->
              

            <style type="text/css">
              .col-lg-6 {
    flex: 0 0 100%;
    max-width: 100%;
}
            </style>
          </div>

        </div>
    
       
        <!-- /.container-fluid -->
 
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; OPEN 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="?p=logoute">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
 <?php
    }else{
      ?>
      <div style="padding:0px;">
      <?php
      if(file_exists("modulos/".$p.".php")){
        include "modulos/".$p.".php";
      }else{
        echo "El modulo solicitado no existe";
      }
      ?>
    </div>
      <?php
    }
    ?>
</body>
<style >
  .img_producto{
  text-align: center;
    width: 230px;
  height: 230px;
  /*max-width: 300px; max-height: 300px; /> ajustar imagenes*/
}
.imagen_carro {
    width: 70px;
    height: 70px;
    border-radius: 1500px;
}
 /*max-width: 300px; max-height: 300px; /> ajustar imagenes
.navbar-light .navbar-nav .nav-link {
    color: #fff;
}
.navbar-light .navbar-nav .nav-link {
    color: #fff;
}
.navbar-light .navbar-nav .show>.nav-link {
    color: #fff;
}*/
.navbar-light .navbar-nav .nav-link {
    color: #000;
}

[class*=sidebar-dark] .brand-link {
    border-bottom: 1px solid #253748;
    color: #fff;
    background-color: rgb(226, 1, 59);
    font-family: 'Fredoka One', cursive;
}
.font-weight-light {
    font-weight: 520!important;
}
element.style {
    opacity: .3;
}
.text-gray-600 {
    color: #5a5c69!important;
}
.btn-primary {
    
    background-color: #e2013b;
    border-color: #e2013b;
}
.btn.btn-flat {
    border-radius: 0;
    border-width: 1px;
    box-shadow: none;
    color: #080808;
}
[class*=sidebar-dark] .brand-link {
    border-bottom: 1px solid #253748;
    color: #fff;
    padding: 10px 80px 9px;
    background-color: rgb(226, 1, 59);
    font-family: 'Fredoka One', cursive;
}

</style>
<script type="text/javascript">
  /*!
 DataTables 1.10.19
 ©2008-2018 SpryMedia Ltd - datatables.net/license
*/
(function(h){"function"===typeof define&&define.amd?define(["jquery"],function(E){return h(E,window,document)}):"object"===typeof exports?module.exports=function(E,H){E||(E=window);H||(H="undefined"!==typeof window?require("jquery"):require("jquery")(E));return h(H,E,E.document)}:h(jQuery,window,document)})(function(h,E,H,k){function Z(a){var b,c,d={};h.each(a,function(e){if((b=e.match(/^([^A-Z]+?)([A-Z])/))&&-1!=="a aa ai ao as b fn i m o s ".indexOf(b[1]+" "))c=e.replace(b[0],b[2].toLowerCase()),
d[c]=e,"o"===b[1]&&Z(a[e])});a._hungarianMap=d}function J(a,b,c){a._hungarianMap||Z(a);var d;h.each(b,function(e){d=a._hungarianMap[e];if(d!==k&&(c||b[d]===k))"o"===d.charAt(0)?(b[d]||(b[d]={}),h.extend(!0,b[d],b[e]),J(a[d],b[d],c)):b[d]=b[e]})}function Ca(a){var b=n.defaults.oLanguage,c=b.sDecimal;c&&Da(c);if(a){var d=a.sZeroRecords;!a.sEmptyTable&&(d&&"No hay datos disponibles en la tabla"===b.sEmptyTable)&&F(a,a,"sZeroRecords","sEmptyTable");!a.sLoadingRecords&&(d&&"Loading..."===b.sLoadingRecords)&&F(a,
a,"sZeroRecords","sLoadingRecords");a.sInfoThousands&&(a.sThousands=a.sInfoThousands);(a=a.sDecimal)&&c!==a&&Da(a)}}function fb(a){A(a,"ordering","bSort");A(a,"orderMulti","bSortMulti");A(a,"orderClasses","bSortClasses");A(a,"orderCellsTop","bSortCellsTop");A(a,"order","aaSorting");A(a,"orderFixed","aaSortingFixed");A(a,"paging","bPaginate");A(a,"pagingType","sPaginationType");A(a,"pageLength","iDisplayLength");A(a,"searching","bFilter");"boolean"===typeof a.sScrollX&&(a.sScrollX=a.sScrollX?"100%":
"");"boolean"===typeof a.scrollX&&(a.scrollX=a.scrollX?"100%":"");if(a=a.aoSearchCols)for(var b=0,c=a.length;b<c;b++)a[b]&&J(n.models.oSearch,a[b])}function gb(a){A(a,"orderable","bSortable");A(a,"orderData","aDataSort");A(a,"orderSequence","asSorting");A(a,"orderDataType","sortDataType");var b=a.aDataSort;"number"===typeof b&&!h.isArray(b)&&(a.aDataSort=[b])}function hb(a){if(!n.__browser){var b={};n.__browser=b;var c=h("<div/>").css({position:"fixed",top:0,left:-1*h(E).scrollLeft(),height:1,width:1,
overflow:"hidden"}).append(h("<div/>").css({position:"absolute",top:1,left:1,width:100,overflow:"scroll"}).append(h("<div/>").css({width:"100%",height:10}))).appendTo("body"),d=c.children(),e=d.children();b.barWidth=d[0].offsetWidth-d[0].clientWidth;b.bScrollOversize=100===e[0].offsetWidth&&100!==d[0].clientWidth;b.bScrollbarLeft=1!==Math.round(e.offset().left);b.bBounding=c[0].getBoundingClientRect().width?!0:!1;c.remove()}h.extend(a.oBrowser,n.__browser);a.oScroll.iBarWidth=n.__browser.barWidth}
function ib(a,b,c,d,e,f){var g,j=!1;c!==k&&(g=c,j=!0);for(;d!==e;)a.hasOwnProperty(d)&&(g=j?b(g,a[d],d,a):a[d],j=!0,d+=f);return g}function Ea(a,b){var c=n.defaults.column,d=a.aoColumns.length,c=h.extend({},n.models.oColumn,c,{nTh:b?b:H.createElement("th"),sTitle:c.sTitle?c.sTitle:b?b.innerHTML:"",aDataSort:c.aDataSort?c.aDataSort:[d],mData:c.mData?c.mData:d,idx:d});a.aoColumns.push(c);c=a.aoPreSearchCols;c[d]=h.extend({},n.models.oSearch,c[d]);ka(a,d,h(b).data())}function ka(a,b,c){var b=a.aoColumns[b],
d=a.oClasses,e=h(b.nTh);if(!b.sWidthOrig){b.sWidthOrig=e.attr("width")||null;var f=(e.attr("style")||"").match(/width:\s*(\d+[pxem%]+)/);f&&(b.sWidthOrig=f[1])}c!==k&&null!==c&&(gb(c),J(n.defaults.column,c),c.mDataProp!==k&&!c.mData&&(c.mData=c.mDataProp),c.sType&&(b._sManualType=c.sType),c.className&&!c.sClass&&(c.sClass=c.className),c.sClass&&e.addClass(c.sClass),h.extend(b,c),F(b,c,"sWidth","sWidthOrig"),c.iDataSort!==k&&(b.aDataSort=[c.iDataSort]),F(b,c,"aDataSort"));var g=b.mData,j=S(g),i=b.mRender?
S(b.mRender):null,c=function(a){return"string"===typeof a&&-1!==a.indexOf("@")};b._bAttrSrc=h.isPlainObject(g)&&(c(g.sort)||c(g.type)||c(g.filter));b._setter=null;b.fnGetData=function(a,b,c){var d=j(a,b,k,c);return i&&b?i(d,b,a,c):d};b.fnSetData=function(a,b,c){return N(g)(a,b,c)};"number"!==typeof g&&(a._rowReadObject=!0);a.oFeatures.bSort||(b.bSortable=!1,e.addClass(d.sSortableNone));a=-1!==h.inArray("asc",b.asSorting);c=-1!==h.inArray("desc",b.asSorting);!b.bSortable||!a&&!c?(b.sSortingClass=d.sSortableNone,
b.sSortingClassJUI=""):a&&!c?(b.sSortingClass=d.sSortableAsc,b.sSortingClassJUI=d.sSortJUIAscAllowed):!a&&c?(b.sSortingClass=d.sSortableDesc,b.sSortingClassJUI=d.sSortJUIDescAllowed):(b.sSortingClass=d.sSortable,b.sSortingClassJUI=d.sSortJUI)}function $(a){if(!1!==a.oFeatures.bAutoWidth){var b=a.aoColumns;Fa(a);for(var c=0,d=b.length;c<d;c++)b[c].nTh.style.width=b[c].sWidth}b=a.oScroll;(""!==b.sY||""!==b.sX)&&la(a);r(a,null,"column-sizing",[a])}function aa(a,b){var c=ma(a,"bVisible");return"number"===
typeof c[b]?c[b]:null}function ba(a,b){var c=ma(a,"bVisible"),c=h.inArray(b,c);return-1!==c?c:null}function V(a){var b=0;h.each(a.aoColumns,function(a,d){d.bVisible&&"none"!==h(d.nTh).css("display")&&b++});return b}function ma(a,b){var c=[];h.map(a.aoColumns,function(a,e){a[b]&&c.push(e)});return c}function Ga(a){var b=a.aoColumns,c=a.aoData,d=n.ext.type.detect,e,f,g,j,i,h,l,q,t;e=0;for(f=b.length;e<f;e++)if(l=b[e],t=[],!l.sType&&l._sManualType)l.sType=l._sManualType;else if(!l.sType){g=0;for(j=d.length;g<
j;g++){i=0;for(h=c.length;i<h;i++){t[i]===k&&(t[i]=B(a,i,e,"type"));q=d[g](t[i],a);if(!q&&g!==d.length-1)break;if("html"===q)break}if(q){l.sType=q;break}}l.sType||(l.sType="string")}}function jb(a,b,c,d){var e,f,g,j,i,m,l=a.aoColumns;if(b)for(e=b.length-1;0<=e;e--){m=b[e];var q=m.targets!==k?m.targets:m.aTargets;h.isArray(q)||(q=[q]);f=0;for(g=q.length;f<g;f++)if("number"===typeof q[f]&&0<=q[f]){for(;l.length<=q[f];)Ea(a);d(q[f],m)}else if("number"===typeof q[f]&&0>q[f])d(l.length+q[f],m);else if("string"===
typeof q[f]){j=0;for(i=l.length;j<i;j++)("_all"==q[f]||h(l[j].nTh).hasClass(q[f]))&&d(j,m)}}if(c){e=0;for(a=c.length;e<a;e++)d(e,c[e])}}function O(a,b,c,d){var e=a.aoData.length,f=h.extend(!0,{},n.models.oRow,{src:c?"dom":"data",idx:e});f._aData=b;a.aoData.push(f);for(var g=a.aoColumns,j=0,i=g.length;j<i;j++)g[j].sType=null;a.aiDisplayMaster.push(e);b=a.rowIdFn(b);b!==k&&(a.aIds[b]=f);(c||!a.oFeatures.bDeferRender)&&Ha(a,e,c,d);return e}function na(a,b){var c;b instanceof h||(b=h(b));return b.map(function(b,
e){c=Ia(a,e);return O(a,c.data,e,c.cells)})}function B(a,b,c,d){var e=a.iDraw,f=a.aoColumns[c],g=a.aoData[b]._aData,j=f.sDefaultContent,i=f.fnGetData(g,d,{settings:a,row:b,col:c});if(i===k)return a.iDrawError!=e&&null===j&&(K(a,0,"Requested unknown parameter "+("function"==typeof f.mData?"{function}":"'"+f.mData+"'")+" for row "+b+", column "+c,4),a.iDrawError=e),j;if((i===g||null===i)&&null!==j&&d!==k)i=j;else if("function"===typeof i)return i.call(g);return null===i&&"display"==d?"":i}function kb(a,
b,c,d){a.aoColumns[c].fnSetData(a.aoData[b]._aData,d,{settings:a,row:b,col:c})}function Ja(a){return h.map(a.match(/(\\.|[^\.])+/g)||[""],function(a){return a.replace(/\\\./g,".")})}function S(a){if(h.isPlainObject(a)){var b={};h.each(a,function(a,c){c&&(b[a]=S(c))});return function(a,c,f,g){var j=b[c]||b._;return j!==k?j(a,c,f,g):a}}if(null===a)return function(a){return a};if("function"===typeof a)return function(b,c,f,g){return a(b,c,f,g)};if("string"===typeof a&&(-1!==a.indexOf(".")||-1!==a.indexOf("[")||
-1!==a.indexOf("("))){var c=function(a,b,f){var g,j;if(""!==f){j=Ja(f);for(var i=0,m=j.length;i<m;i++){f=j[i].match(ca);g=j[i].match(W);if(f){j[i]=j[i].replace(ca,"");""!==j[i]&&(a=a[j[i]]);g=[];j.splice(0,i+1);j=j.join(".");if(h.isArray(a)){i=0;for(m=a.length;i<m;i++)g.push(c(a[i],b,j))}a=f[0].substring(1,f[0].length-1);a=""===a?g:g.join(a);break}else if(g){j[i]=j[i].replace(W,"");a=a[j[i]]();continue}if(null===a||a[j[i]]===k)return k;a=a[j[i]]}}return a};return function(b,e){return c(b,e,a)}}return function(b){return b[a]}}
function N(a){if(h.isPlainObject(a))return N(a._);if(null===a)return function(){};if("function"===typeof a)return function(b,d,e){a(b,"set",d,e)};if("string"===typeof a&&(-1!==a.indexOf(".")||-1!==a.indexOf("[")||-1!==a.indexOf("("))){var b=function(a,d,e){var e=Ja(e),f;f=e[e.length-1];for(var g,j,i=0,m=e.length-1;i<m;i++){g=e[i].match(ca);j=e[i].match(W);if(g){e[i]=e[i].replace(ca,"");a[e[i]]=[];f=e.slice();f.splice(0,i+1);g=f.join(".");if(h.isArray(d)){j=0;for(m=d.length;j<m;j++)f={},b(f,d[j],g),
a[e[i]].push(f)}else a[e[i]]=d;return}j&&(e[i]=e[i].replace(W,""),a=a[e[i]](d));if(null===a[e[i]]||a[e[i]]===k)a[e[i]]={};a=a[e[i]]}if(f.match(W))a[f.replace(W,"")](d);else a[f.replace(ca,"")]=d};return function(c,d){return b(c,d,a)}}return function(b,d){b[a]=d}}function Ka(a){return D(a.aoData,"_aData")}function oa(a){a.aoData.length=0;a.aiDisplayMaster.length=0;a.aiDisplay.length=0;a.aIds={}}function pa(a,b,c){for(var d=-1,e=0,f=a.length;e<f;e++)a[e]==b?d=e:a[e]>b&&a[e]--; -1!=d&&c===k&&a.splice(d,
1)}function da(a,b,c,d){var e=a.aoData[b],f,g=function(c,d){for(;c.childNodes.length;)c.removeChild(c.firstChild);c.innerHTML=B(a,b,d,"display")};if("dom"===c||(!c||"auto"===c)&&"dom"===e.src)e._aData=Ia(a,e,d,d===k?k:e._aData).data;else{var j=e.anCells;if(j)if(d!==k)g(j[d],d);else{c=0;for(f=j.length;c<f;c++)g(j[c],c)}}e._aSortData=null;e._aFilterData=null;g=a.aoColumns;if(d!==k)g[d].sType=null;else{c=0;for(f=g.length;c<f;c++)g[c].sType=null;La(a,e)}}function Ia(a,b,c,d){var e=[],f=b.firstChild,g,
j,i=0,m,l=a.aoColumns,q=a._rowReadObject,d=d!==k?d:q?{}:[],t=function(a,b){if("string"===typeof a){var c=a.indexOf("@");-1!==c&&(c=a.substring(c+1),N(a)(d,b.getAttribute(c)))}},G=function(a){if(c===k||c===i)j=l[i],m=h.trim(a.innerHTML),j&&j._bAttrSrc?(N(j.mData._)(d,m),t(j.mData.sort,a),t(j.mData.type,a),t(j.mData.filter,a)):q?(j._setter||(j._setter=N(j.mData)),j._setter(d,m)):d[i]=m;i++};if(f)for(;f;){g=f.nodeName.toUpperCase();if("TD"==g||"TH"==g)G(f),e.push(f);f=f.nextSibling}else{e=b.anCells;
f=0;for(g=e.length;f<g;f++)G(e[f])}if(b=b.firstChild?b:b.nTr)(b=b.getAttribute("id"))&&N(a.rowId)(d,b);return{data:d,cells:e}}function Ha(a,b,c,d){var e=a.aoData[b],f=e._aData,g=[],j,i,m,l,q;if(null===e.nTr){j=c||H.createElement("tr");e.nTr=j;e.anCells=g;j._DT_RowIndex=b;La(a,e);l=0;for(q=a.aoColumns.length;l<q;l++){m=a.aoColumns[l];i=c?d[l]:H.createElement(m.sCellType);i._DT_CellIndex={row:b,column:l};g.push(i);if((!c||m.mRender||m.mData!==l)&&(!h.isPlainObject(m.mData)||m.mData._!==l+".display"))i.innerHTML=
B(a,b,l,"display");m.sClass&&(i.className+=" "+m.sClass);m.bVisible&&!c?j.appendChild(i):!m.bVisible&&c&&i.parentNode.removeChild(i);m.fnCreatedCell&&m.fnCreatedCell.call(a.oInstance,i,B(a,b,l),f,b,l)}r(a,"aoRowCreatedCallback",null,[j,f,b,g])}e.nTr.setAttribute("role","row")}function La(a,b){var c=b.nTr,d=b._aData;if(c){var e=a.rowIdFn(d);e&&(c.id=e);d.DT_RowClass&&(e=d.DT_RowClass.split(" "),b.__rowc=b.__rowc?qa(b.__rowc.concat(e)):e,h(c).removeClass(b.__rowc.join(" ")).addClass(d.DT_RowClass));
d.DT_RowAttr&&h(c).attr(d.DT_RowAttr);d.DT_RowData&&h(c).data(d.DT_RowData)}}function lb(a){var b,c,d,e,f,g=a.nTHead,j=a.nTFoot,i=0===h("th, td",g).length,m=a.oClasses,l=a.aoColumns;i&&(e=h("<tr/>").appendTo(g));b=0;for(c=l.length;b<c;b++)f=l[b],d=h(f.nTh).addClass(f.sClass),i&&d.appendTo(e),a.oFeatures.bSort&&(d.addClass(f.sSortingClass),!1!==f.bSortable&&(d.attr("tabindex",a.iTabIndex).attr("aria-controls",a.sTableId),Ma(a,f.nTh,b))),f.sTitle!=d[0].innerHTML&&d.html(f.sTitle),Na(a,"header")(a,d,
f,m);i&&ea(a.aoHeader,g);h(g).find(">tr").attr("role","row");h(g).find(">tr>th, >tr>td").addClass(m.sHeaderTH);h(j).find(">tr>th, >tr>td").addClass(m.sFooterTH);if(null!==j){a=a.aoFooter[0];b=0;for(c=a.length;b<c;b++)f=l[b],f.nTf=a[b].cell,f.sClass&&h(f.nTf).addClass(f.sClass)}}function fa(a,b,c){var d,e,f,g=[],j=[],i=a.aoColumns.length,m;if(b){c===k&&(c=!1);d=0;for(e=b.length;d<e;d++){g[d]=b[d].slice();g[d].nTr=b[d].nTr;for(f=i-1;0<=f;f--)!a.aoColumns[f].bVisible&&!c&&g[d].splice(f,1);j.push([])}d=
0;for(e=g.length;d<e;d++){if(a=g[d].nTr)for(;f=a.firstChild;)a.removeChild(f);f=0;for(b=g[d].length;f<b;f++)if(m=i=1,j[d][f]===k){a.appendChild(g[d][f].cell);for(j[d][f]=1;g[d+i]!==k&&g[d][f].cell==g[d+i][f].cell;)j[d+i][f]=1,i++;for(;g[d][f+m]!==k&&g[d][f].cell==g[d][f+m].cell;){for(c=0;c<i;c++)j[d+c][f+m]=1;m++}h(g[d][f].cell).attr("rowspan",i).attr("colspan",m)}}}}function P(a){var b=r(a,"aoPreDrawCallback","preDraw",[a]);if(-1!==h.inArray(!1,b))C(a,!1);else{var b=[],c=0,d=a.asStripeClasses,e=
d.length,f=a.oLanguage,g=a.iInitDisplayStart,j="ssp"==y(a),i=a.aiDisplay;a.bDrawing=!0;g!==k&&-1!==g&&(a._iDisplayStart=j?g:g>=a.fnRecordsDisplay()?0:g,a.iInitDisplayStart=-1);var g=a._iDisplayStart,m=a.fnDisplayEnd();if(a.bDeferLoading)a.bDeferLoading=!1,a.iDraw++,C(a,!1);else if(j){if(!a.bDestroying&&!mb(a))return}else a.iDraw++;if(0!==i.length){f=j?a.aoData.length:m;for(j=j?0:g;j<f;j++){var l=i[j],q=a.aoData[l];null===q.nTr&&Ha(a,l);var t=q.nTr;if(0!==e){var G=d[c%e];q._sRowStripe!=G&&(h(t).removeClass(q._sRowStripe).addClass(G),
q._sRowStripe=G)}r(a,"aoRowCallback",null,[t,q._aData,c,j,l]);b.push(t);c++}}else c=f.sZeroRecords,1==a.iDraw&&"ajax"==y(a)?c=f.sLoadingRecords:f.sEmptyTable&&0===a.fnRecordsTotal()&&(c=f.sEmptyTable),b[0]=h("<tr/>",{"class":e?d[0]:""}).append(h("<td />",{valign:"top",colSpan:V(a),"class":a.oClasses.sRowEmpty}).html(c))[0];r(a,"aoHeaderCallback","header",[h(a.nTHead).children("tr")[0],Ka(a),g,m,i]);r(a,"aoFooterCallback","footer",[h(a.nTFoot).children("tr")[0],Ka(a),g,m,i]);d=h(a.nTBody);d.children().detach();
d.append(h(b));r(a,"aoDrawCallback","draw",[a]);a.bSorted=!1;a.bFiltered=!1;a.bDrawing=!1}}function T(a,b){var c=a.oFeatures,d=c.bFilter;c.bSort&&nb(a);d?ga(a,a.oAnteriorSearch):a.aiDisplay=a.aiDisplayMaster.slice();!0!==b&&(a._iDisplayStart=0);a._drawHold=b;P(a);a._drawHold=!1}function ob(a){var b=a.oClasses,c=h(a.nTable),c=h("<div/>").insertBefore(c),d=a.oFeatures,e=h("<div/>",{id:a.sTableId+"_wrapper","class":b.sWrapper+(a.nTFoot?"":" "+b.sNoFooter)});a.nHolding=c[0];a.nTableWrapper=e[0];a.nTableReinsertBefore=
a.nTable.nextSibling;for(var f=a.sDom.split(""),g,j,i,m,l,q,k=0;k<f.length;k++){g=null;j=f[k];if("<"==j){i=h("<div/>")[0];m=f[k+1];if("'"==m||'"'==m){l="";for(q=2;f[k+q]!=m;)l+=f[k+q],q++;"H"==l?l=b.sJUIHeader:"F"==l&&(l=b.sJUIFooter);-1!=l.indexOf(".")?(m=l.split("."),i.id=m[0].substr(1,m[0].length-1),i.className=m[1]):"#"==l.charAt(0)?i.id=l.substr(1,l.length-1):i.className=l;k+=q}e.append(i);e=h(i)}else if(">"==j)e=e.parent();else if("l"==j&&d.bPaginate&&d.bLengthChange)g=pb(a);else if("f"==j&&
d.bFilter)g=qb(a);else if("r"==j&&d.bProcessing)g=rb(a);else if("t"==j)g=sb(a);else if("i"==j&&d.bInfo)g=tb(a);else if("p"==j&&d.bPaginate)g=ub(a);else if(0!==n.ext.feature.length){i=n.ext.feature;q=0;for(m=i.length;q<m;q++)if(j==i[q].cFeature){g=i[q].fnInit(a);break}}g&&(i=a.aanFeatures,i[j]||(i[j]=[]),i[j].push(g),e.append(g))}c.replaceWith(e);a.nHolding=null}function ea(a,b){var c=h(b).children("tr"),d,e,f,g,j,i,m,l,q,k;a.splice(0,a.length);f=0;for(i=c.length;f<i;f++)a.push([]);f=0;for(i=c.length;f<
i;f++){d=c[f];for(e=d.firstChild;e;){if("TD"==e.nodeName.toUpperCase()||"TH"==e.nodeName.toUpperCase()){l=1*e.getAttribute("colspan");q=1*e.getAttribute("rowspan");l=!l||0===l||1===l?1:l;q=!q||0===q||1===q?1:q;g=0;for(j=a[f];j[g];)g++;m=g;k=1===l?!0:!1;for(j=0;j<l;j++)for(g=0;g<q;g++)a[f+g][m+j]={cell:e,unique:k},a[f+g].nTr=d}e=e.nextSibling}}}function ra(a,b,c){var d=[];c||(c=a.aoHeader,b&&(c=[],ea(c,b)));for(var b=0,e=c.length;b<e;b++)for(var f=0,g=c[b].length;f<g;f++)if(c[b][f].unique&&(!d[f]||
!a.bSortCellsTop))d[f]=c[b][f].cell;return d}function sa(a,b,c){r(a,"aoServerParams","serverParams",[b]);if(b&&h.isArray(b)){var d={},e=/(.*?)\[\]$/;h.each(b,function(a,b){var c=b.name.match(e);c?(c=c[0],d[c]||(d[c]=[]),d[c].push(b.value)):d[b.name]=b.value});b=d}var f,g=a.ajax,j=a.oInstance,i=function(b){r(a,null,"xhr",[a,b,a.jqXHR]);c(b)};if(h.isPlainObject(g)&&g.data){f=g.data;var m="function"===typeof f?f(b,a):f,b="function"===typeof f&&m?m:h.extend(!0,b,m);delete g.data}m={data:b,success:function(b){var c=
b.error||b.sError;c&&K(a,0,c);a.json=b;i(b)},dataType:"json",cache:!1,type:a.sServerMethod,error:function(b,c){var d=r(a,null,"xhr",[a,null,a.jqXHR]);-1===h.inArray(!0,d)&&("parsererror"==c?K(a,0,"Invalid JSON response",1):4===b.readyState&&K(a,0,"Ajax error",7));C(a,!1)}};a.oAjaxData=b;r(a,null,"preXhr",[a,b]);a.fnServerData?a.fnServerData.call(j,a.sAjaxSource,h.map(b,function(a,b){return{name:b,value:a}}),i,a):a.sAjaxSource||"string"===typeof g?a.jqXHR=h.ajax(h.extend(m,{url:g||a.sAjaxSource})):
"function"===typeof g?a.jqXHR=g.call(j,b,i,a):(a.jqXHR=h.ajax(h.extend(m,g)),g.data=f)}function mb(a){return a.bAjaxDataGet?(a.iDraw++,C(a,!0),sa(a,vb(a),function(b){wb(a,b)}),!1):!0}function vb(a){var b=a.aoColumns,c=b.length,d=a.oFeatures,e=a.oAnteriorSearch,f=a.aoPreSearchCols,g,j=[],i,m,l,k=X(a);g=a._iDisplayStart;i=!1!==d.bPaginate?a._iDisplayLength:-1;var t=function(a,b){j.push({name:a,value:b})};t("sEcho",a.iDraw);t("iColumns",c);t("sColumns",D(b,"sName").join(","));t("iDisplayStart",g);t("iDisplayLength",
i);var G={draw:a.iDraw,columns:[],order:[],start:g,length:i,search:{value:e.sSearch,regex:e.bRegex}};for(g=0;g<c;g++)m=b[g],l=f[g],i="function"==typeof m.mData?"function":m.mData,G.columns.push({data:i,name:m.sName,searchable:m.bSearchable,orderable:m.bSortable,search:{value:l.sSearch,regex:l.bRegex}}),t("mDataProp_"+g,i),d.bFilter&&(t("sSearch_"+g,l.sSearch),t("bRegex_"+g,l.bRegex),t("bSearchable_"+g,m.bSearchable)),d.bSort&&t("bSortable_"+g,m.bSortable);d.bFilter&&(t("sSearch",e.sSearch),t("bRegex",
e.bRegex));d.bSort&&(h.each(k,function(a,b){G.order.push({column:b.col,dir:b.dir});t("iSortCol_"+a,b.col);t("sSortDir_"+a,b.dir)}),t("iSortingCols",k.length));b=n.ext.legacy.ajax;return null===b?a.sAjaxSource?j:G:b?j:G}function wb(a,b){var c=ta(a,b),d=b.sEcho!==k?b.sEcho:b.draw,e=b.iTotalRecords!==k?b.iTotalRecords:b.recordsTotal,f=b.iTotalDisplayRecords!==k?b.iTotalDisplayRecords:b.recordsFiltered;if(d){if(1*d<a.iDraw)return;a.iDraw=1*d}oa(a);a._iRecordsTotal=parseInt(e,10);a._iRecordsDisplay=parseInt(f,
10);d=0;for(e=c.length;d<e;d++)O(a,c[d]);a.aiDisplay=a.aiDisplayMaster.slice();a.bAjaxDataGet=!1;P(a);a._bInitComplete||ua(a,b);a.bAjaxDataGet=!0;C(a,!1)}function ta(a,b){var c=h.isPlainObject(a.ajax)&&a.ajax.dataSrc!==k?a.ajax.dataSrc:a.sAjaxDataProp;return"data"===c?b.aaData||b[c]:""!==c?S(c)(b):b}function qb(a){var b=a.oClasses,c=a.sTableId,d=a.oLanguage,e=a.oAnteriorSearch,f=a.aanFeatures,g='<input type="search" class="'+b.sFilterInput+'"/>',j=d.sSearch,j=j.match(/_INPUT_/)?j.replace("_INPUT_",
g):j+g,b=h("<div/>",{id:!f.f?c+"_filter":null,"class":b.sFilter}).append(h("<label/>").append(j)),f=function(){var b=!this.value?"":this.value;b!=e.sSearch&&(ga(a,{sSearch:b,bRegex:e.bRegex,bSmart:e.bSmart,bCaseInsensitive:e.bCaseInsensitive}),a._iDisplayStart=0,P(a))},g=null!==a.searchDelay?a.searchDelay:"ssp"===y(a)?400:0,i=h("input",b).val(e.sSearch).attr("placeholder",d.sSearchPlaceholder).on("keyup.DT search.DT input.DT paste.DT cut.DT",g?Oa(f,g):f).on("keypress.DT",function(a){if(13==a.keyCode)return!1}).attr("aria-controls",
c);h(a.nTable).on("search.dt.DT",function(b,c){if(a===c)try{i[0]!==H.activeElement&&i.val(e.sSearch)}catch(d){}});return b[0]}function ga(a,b,c){var d=a.oAnteriorSearch,e=a.aoPreSearchCols,f=function(a){d.sSearch=a.sSearch;d.bRegex=a.bRegex;d.bSmart=a.bSmart;d.bCaseInsensitive=a.bCaseInsensitive};Ga(a);if("ssp"!=y(a)){xb(a,b.sSearch,c,b.bEscapeRegex!==k?!b.bEscapeRegex:b.bRegex,b.bSmart,b.bCaseInsensitive);f(b);for(b=0;b<e.length;b++)yb(a,e[b].sSearch,b,e[b].bEscapeRegex!==k?!e[b].bEscapeRegex:e[b].bRegex,
e[b].bSmart,e[b].bCaseInsensitive);zb(a)}else f(b);a.bFiltered=!0;r(a,null,"search",[a])}function zb(a){for(var b=n.ext.search,c=a.aiDisplay,d,e,f=0,g=b.length;f<g;f++){for(var j=[],i=0,m=c.length;i<m;i++)e=c[i],d=a.aoData[e],b[f](a,d._aFilterData,e,d._aData,i)&&j.push(e);c.length=0;h.merge(c,j)}}function yb(a,b,c,d,e,f){if(""!==b){for(var g=[],j=a.aiDisplay,d=Pa(b,d,e,f),e=0;e<j.length;e++)b=a.aoData[j[e]]._aFilterData[c],d.test(b)&&g.push(j[e]);a.aiDisplay=g}}function xb(a,b,c,d,e,f){var d=Pa(b,
d,e,f),f=a.oAnteriorSearch.sSearch,g=a.aiDisplayMaster,j,e=[];0!==n.ext.search.length&&(c=!0);j=Ab(a);if(0>=b.length)a.aiDisplay=g.slice();else{if(j||c||f.length>b.length||0!==b.indexOf(f)||a.bSorted)a.aiDisplay=g.slice();b=a.aiDisplay;for(c=0;c<b.length;c++)d.test(a.aoData[b[c]]._sFilterRow)&&e.push(b[c]);a.aiDisplay=e}}function Pa(a,b,c,d){a=b?a:Qa(a);c&&(a="^(?=.*?"+h.map(a.match(/"[^"]+"|[^ ]+/g)||[""],function(a){if('"'===a.charAt(0))var b=a.match(/^"(.*)"$/),a=b?b[1]:a;return a.replace('"',
"")}).join(")(?=.*?")+").*$");return RegExp(a,d?"i":"")}function Ab(a){var b=a.aoColumns,c,d,e,f,g,j,i,h,l=n.ext.type.search;c=!1;d=0;for(f=a.aoData.length;d<f;d++)if(h=a.aoData[d],!h._aFilterData){j=[];e=0;for(g=b.length;e<g;e++)c=b[e],c.bSearchable?(i=B(a,d,e,"filter"),l[c.sType]&&(i=l[c.sType](i)),null===i&&(i=""),"string"!==typeof i&&i.toString&&(i=i.toString())):i="",i.indexOf&&-1!==i.indexOf("&")&&(va.innerHTML=i,i=Wb?va.textContent:va.innerText),i.replace&&(i=i.replace(/[\r\n]/g,"")),j.push(i);
h._aFilterData=j;h._sFilterRow=j.join("  ");c=!0}return c}function Bb(a){return{search:a.sSearch,smart:a.bSmart,regex:a.bRegex,caseInsensitive:a.bCaseInsensitive}}function Cb(a){return{sSearch:a.search,bSmart:a.smart,bRegex:a.regex,bCaseInsensitive:a.caseInsensitive}}function tb(a){var b=a.sTableId,c=a.aanFeatures.i,d=h("<div/>",{"class":a.oClasses.sInfo,id:!c?b+"_info":null});c||(a.aoDrawCallback.push({fn:Db,sName:"information"}),d.attr("role","status").attr("aria-live","polite"),h(a.nTable).attr("aria-describedby",
b+"_info"));return d[0]}function Db(a){var b=a.aanFeatures.i;if(0!==b.length){var c=a.oLanguage,d=a._iDisplayStart+1,e=a.fnDisplayEnd(),f=a.fnRecordsTotal(),g=a.fnRecordsDisplay(),j=g?c.sInfo:c.sInfoEmpty;g!==f&&(j+=" "+c.sInfoFiltered);j+=c.sInfoPostFix;j=Eb(a,j);c=c.fnInfoCallback;null!==c&&(j=c.call(a.oInstance,a,d,e,f,g,j));h(b).html(j)}}function Eb(a,b){var c=a.fnFormatNumber,d=a._iDisplayStart+1,e=a._iDisplayLength,f=a.fnRecordsDisplay(),g=-1===e;return b.replace(/_START_/g,c.call(a,d)).replace(/_END_/g,
c.call(a,a.fnDisplayEnd())).replace(/_MAX_/g,c.call(a,a.fnRecordsTotal())).replace(/_TOTAL_/g,c.call(a,f)).replace(/_PAGE_/g,c.call(a,g?1:Math.ceil(d/e))).replace(/_PAGES_/g,c.call(a,g?1:Math.ceil(f/e)))}function ha(a){var b,c,d=a.iInitDisplayStart,e=a.aoColumns,f;c=a.oFeatures;var g=a.bDeferLoading;if(a.bInitialised){ob(a);lb(a);fa(a,a.aoHeader);fa(a,a.aoFooter);C(a,!0);c.bAutoWidth&&Fa(a);b=0;for(c=e.length;b<c;b++)f=e[b],f.sWidth&&(f.nTh.style.width=v(f.sWidth));r(a,null,"preInit",[a]);T(a);e=
y(a);if("ssp"!=e||g)"ajax"==e?sa(a,[],function(c){var f=ta(a,c);for(b=0;b<f.length;b++)O(a,f[b]);a.iInitDisplayStart=d;T(a);C(a,!1);ua(a,c)},a):(C(a,!1),ua(a))}else setTimeout(function(){ha(a)},200)}function ua(a,b){a._bInitComplete=!0;(b||a.oInit.aaData)&&$(a);r(a,null,"plugin-init",[a,b]);r(a,"aoInitComplete","init",[a,b])}function Ra(a,b){var c=parseInt(b,10);a._iDisplayLength=c;Sa(a);r(a,null,"length",[a,c])}function pb(a){for(var b=a.oClasses,c=a.sTableId,d=a.aLengthMenu,e=h.isArray(d[0]),f=
e?d[0]:d,d=e?d[1]:d,e=h("<select/>",{name:c+"_length","aria-controls":c,"class":b.sLengthSelect}),g=0,j=f.length;g<j;g++)e[0][g]=new Option("number"===typeof d[g]?a.fnFormatNumber(d[g]):d[g],f[g]);var i=h("<div><label/></div>").addClass(b.sLength);a.aanFeatures.l||(i[0].id=c+"_length");i.children().append(a.oLanguage.sLengthMenu.replace("_MENU_",e[0].outerHTML));h("select",i).val(a._iDisplayLength).on("change.DT",function(){Ra(a,h(this).val());P(a)});h(a.nTable).on("length.dt.DT",function(b,c,d){a===
c&&h("select",i).val(d)});return i[0]}function ub(a){var b=a.sPaginationType,c=n.ext.pager[b],d="function"===typeof c,e=function(a){P(a)},b=h("<div/>").addClass(a.oClasses.sPaging+b)[0],f=a.aanFeatures;d||c.fnInit(a,b,e);f.p||(b.id=a.sTableId+"_paginate",a.aoDrawCallback.push({fn:function(a){if(d){var b=a._iDisplayStart,i=a._iDisplayLength,h=a.fnRecordsDisplay(),l=-1===i,b=l?0:Math.ceil(b/i),i=l?1:Math.ceil(h/i),h=c(b,i),k,l=0;for(k=f.p.length;l<k;l++)Na(a,"pageButton")(a,f.p[l],l,h,b,i)}else c.fnUpdate(a,
e)},sName:"pagination"}));return b}function Ta(a,b,c){var d=a._iDisplayStart,e=a._iDisplayLength,f=a.fnRecordsDisplay();0===f||-1===e?d=0:"number"===typeof b?(d=b*e,d>f&&(d=0)):"first"==b?d=0:"Anterior"==b?(d=0<=e?d-e:0,0>d&&(d=0)):"next"==b?d+e<f&&(d+=e):"last"==b?d=Math.floor((f-1)/e)*e:K(a,0,"Unknown paging action: "+b,5);b=a._iDisplayStart!==d;a._iDisplayStart=d;b&&(r(a,null,"page",[a]),c&&P(a));return b}function rb(a){return h("<div/>",{id:!a.aanFeatures.r?a.sTableId+"_processing":null,"class":a.oClasses.sProcessing}).html(a.oLanguage.sProcessing).insertBefore(a.nTable)[0]}
function C(a,b){a.oFeatures.bProcessing&&h(a.aanFeatures.r).css("display",b?"block":"none");r(a,null,"processing",[a,b])}function sb(a){var b=h(a.nTable);b.attr("role","grid");var c=a.oScroll;if(""===c.sX&&""===c.sY)return a.nTable;var d=c.sX,e=c.sY,f=a.oClasses,g=b.children("caption"),j=g.length?g[0]._captionSide:null,i=h(b[0].cloneNode(!1)),m=h(b[0].cloneNode(!1)),l=b.children("tfoot");l.length||(l=null);i=h("<div/>",{"class":f.sScrollWrapper}).append(h("<div/>",{"class":f.sScrollHead}).css({overflow:"hidden",
position:"relative",border:0,width:d?!d?null:v(d):"100%"}).append(h("<div/>",{"class":f.sScrollHeadInner}).css({"box-sizing":"content-box",width:c.sXInner||"100%"}).append(i.removeAttr("id").css("margin-left",0).append("top"===j?g:null).append(b.children("thead"))))).append(h("<div/>",{"class":f.sScrollBody}).css({position:"relative",overflow:"auto",width:!d?null:v(d)}).append(b));l&&i.append(h("<div/>",{"class":f.sScrollFoot}).css({overflow:"hidden",border:0,width:d?!d?null:v(d):"100%"}).append(h("<div/>",
{"class":f.sScrollFootInner}).append(m.removeAttr("id").css("margin-left",0).append("bottom"===j?g:null).append(b.children("tfoot")))));var b=i.children(),k=b[0],f=b[1],t=l?b[2]:null;if(d)h(f).on("scroll.DT",function(){var a=this.scrollLeft;k.scrollLeft=a;l&&(t.scrollLeft=a)});h(f).css(e&&c.bCollapse?"max-height":"height",e);a.nScrollHead=k;a.nScrollBody=f;a.nScrollFoot=t;a.aoDrawCallback.push({fn:la,sName:"scrolling"});return i[0]}function la(a){var b=a.oScroll,c=b.sX,d=b.sXInner,e=b.sY,b=b.iBarWidth,
f=h(a.nScrollHead),g=f[0].style,j=f.children("div"),i=j[0].style,m=j.children("table"),j=a.nScrollBody,l=h(j),q=j.style,t=h(a.nScrollFoot).children("div"),n=t.children("table"),o=h(a.nTHead),p=h(a.nTable),s=p[0],r=s.style,u=a.nTFoot?h(a.nTFoot):null,x=a.oBrowser,U=x.bScrollOversize,Xb=D(a.aoColumns,"nTh"),Q,L,R,w,Ua=[],y=[],z=[],A=[],B,C=function(a){a=a.style;a.paddingTop="0";a.paddingBottom="0";a.borderTopWidth="0";a.borderBottomWidth="0";a.height=0};L=j.scrollHeight>j.clientHeight;if(a.scrollBarVis!==
L&&a.scrollBarVis!==k)a.scrollBarVis=L,$(a);else{a.scrollBarVis=L;p.children("thead, tfoot").remove();u&&(R=u.clone().prependTo(p),Q=u.find("tr"),R=R.find("tr"));w=o.clone().prependTo(p);o=o.find("tr");L=w.find("tr");w.find("th, td").removeAttr("tabindex");c||(q.width="100%",f[0].style.width="100%");h.each(ra(a,w),function(b,c){B=aa(a,b);c.style.width=a.aoColumns[B].sWidth});u&&I(function(a){a.style.width=""},R);f=p.outerWidth();if(""===c){r.width="100%";if(U&&(p.find("tbody").height()>j.offsetHeight||
"scroll"==l.css("overflow-y")))r.width=v(p.outerWidth()-b);f=p.outerWidth()}else""!==d&&(r.width=v(d),f=p.outerWidth());I(C,L);I(function(a){z.push(a.innerHTML);Ua.push(v(h(a).css("width")))},L);I(function(a,b){if(h.inArray(a,Xb)!==-1)a.style.width=Ua[b]},o);h(L).height(0);u&&(I(C,R),I(function(a){A.push(a.innerHTML);y.push(v(h(a).css("width")))},R),I(function(a,b){a.style.width=y[b]},Q),h(R).height(0));I(function(a,b){a.innerHTML='<div class="dataTables_sizing">'+z[b]+"</div>";a.childNodes[0].style.height=
"0";a.childNodes[0].style.overflow="hidden";a.style.width=Ua[b]},L);u&&I(function(a,b){a.innerHTML='<div class="dataTables_sizing">'+A[b]+"</div>";a.childNodes[0].style.height="0";a.childNodes[0].style.overflow="hidden";a.style.width=y[b]},R);if(p.outerWidth()<f){Q=j.scrollHeight>j.offsetHeight||"scroll"==l.css("overflow-y")?f+b:f;if(U&&(j.scrollHeight>j.offsetHeight||"scroll"==l.css("overflow-y")))r.width=v(Q-b);(""===c||""!==d)&&K(a,1,"Possible column misalignment",6)}else Q="100%";q.width=v(Q);
g.width=v(Q);u&&(a.nScrollFoot.style.width=v(Q));!e&&U&&(q.height=v(s.offsetHeight+b));c=p.outerWidth();m[0].style.width=v(c);i.width=v(c);d=p.height()>j.clientHeight||"scroll"==l.css("overflow-y");e="padding"+(x.bScrollbarLeft?"Left":"Right");i[e]=d?b+"px":"0px";u&&(n[0].style.width=v(c),t[0].style.width=v(c),t[0].style[e]=d?b+"px":"0px");p.children("colgroup").insertBefore(p.children("thead"));l.scroll();if((a.bSorted||a.bFiltered)&&!a._drawHold)j.scrollTop=0}}function I(a,b,c){for(var d=0,e=0,
f=b.length,g,j;e<f;){g=b[e].firstChild;for(j=c?c[e].firstChild:null;g;)1===g.nodeType&&(c?a(g,j,d):a(g,d),d++),g=g.nextSibling,j=c?j.nextSibling:null;e++}}function Fa(a){var b=a.nTable,c=a.aoColumns,d=a.oScroll,e=d.sY,f=d.sX,g=d.sXInner,j=c.length,i=ma(a,"bVisible"),m=h("th",a.nTHead),l=b.getAttribute("width"),k=b.parentNode,t=!1,n,o,p=a.oBrowser,d=p.bScrollOversize;(n=b.style.width)&&-1!==n.indexOf("%")&&(l=n);for(n=0;n<i.length;n++)o=c[i[n]],null!==o.sWidth&&(o.sWidth=Fb(o.sWidthOrig,k),t=!0);if(d||
!t&&!f&&!e&&j==V(a)&&j==m.length)for(n=0;n<j;n++)i=aa(a,n),null!==i&&(c[i].sWidth=v(m.eq(n).width()));else{j=h(b).clone().css("visibility","hidden").removeAttr("id");j.find("tbody tr").remove();var s=h("<tr/>").appendTo(j.find("tbody"));j.find("thead, tfoot").remove();j.append(h(a.nTHead).clone()).append(h(a.nTFoot).clone());j.find("tfoot th, tfoot td").css("width","");m=ra(a,j.find("thead")[0]);for(n=0;n<i.length;n++)o=c[i[n]],m[n].style.width=null!==o.sWidthOrig&&""!==o.sWidthOrig?v(o.sWidthOrig):
"",o.sWidthOrig&&f&&h(m[n]).append(h("<div/>").css({width:o.sWidthOrig,margin:0,padding:0,border:0,height:1}));if(a.aoData.length)for(n=0;n<i.length;n++)t=i[n],o=c[t],h(Gb(a,t)).clone(!1).append(o.sContentPadding).appendTo(s);h("[name]",j).removeAttr("name");o=h("<div/>").css(f||e?{position:"absolute",top:0,left:0,height:1,right:0,overflow:"hidden"}:{}).append(j).appendTo(k);f&&g?j.width(g):f?(j.css("width","auto"),j.removeAttr("width"),j.width()<k.clientWidth&&l&&j.width(k.clientWidth)):e?j.width(k.clientWidth):
l&&j.width(l);for(n=e=0;n<i.length;n++)k=h(m[n]),g=k.outerWidth()-k.width(),k=p.bBounding?Math.ceil(m[n].getBoundingClientRect().width):k.outerWidth(),e+=k,c[i[n]].sWidth=v(k-g);b.style.width=v(e);o.remove()}l&&(b.style.width=v(l));if((l||f)&&!a._reszEvt)b=function(){h(E).on("resize.DT-"+a.sInstance,Oa(function(){$(a)}))},d?setTimeout(b,1E3):b(),a._reszEvt=!0}function Fb(a,b){if(!a)return 0;var c=h("<div/>").css("width",v(a)).appendTo(b||H.body),d=c[0].offsetWidth;c.remove();return d}function Gb(a,
b){var c=Hb(a,b);if(0>c)return null;var d=a.aoData[c];return!d.nTr?h("<td/>").html(B(a,c,b,"display"))[0]:d.anCells[b]}function Hb(a,b){for(var c,d=-1,e=-1,f=0,g=a.aoData.length;f<g;f++)c=B(a,f,b,"display")+"",c=c.replace(Yb,""),c=c.replace(/&nbsp;/g," "),c.length>d&&(d=c.length,e=f);return e}function v(a){return null===a?"0px":"number"==typeof a?0>a?"0px":a+"px":a.match(/\d$/)?a+"px":a}function X(a){var b,c,d=[],e=a.aoColumns,f,g,j,i;b=a.aaSortingFixed;c=h.isPlainObject(b);var m=[];f=function(a){a.length&&
!h.isArray(a[0])?m.push(a):h.merge(m,a)};h.isArray(b)&&f(b);c&&b.pre&&f(b.pre);f(a.aaSorting);c&&b.post&&f(b.post);for(a=0;a<m.length;a++){i=m[a][0];f=e[i].aDataSort;b=0;for(c=f.length;b<c;b++)g=f[b],j=e[g].sType||"string",m[a]._idx===k&&(m[a]._idx=h.inArray(m[a][1],e[g].asSorting)),d.push({src:i,col:g,dir:m[a][1],index:m[a]._idx,type:j,formatter:n.ext.type.order[j+"-pre"]})}return d}function nb(a){var b,c,d=[],e=n.ext.type.order,f=a.aoData,g=0,j,i=a.aiDisplayMaster,h;Ga(a);h=X(a);b=0;for(c=h.length;b<
c;b++)j=h[b],j.formatter&&g++,Ib(a,j.col);if("ssp"!=y(a)&&0!==h.length){b=0;for(c=i.length;b<c;b++)d[i[b]]=b;g===h.length?i.sort(function(a,b){var c,e,g,j,i=h.length,k=f[a]._aSortData,n=f[b]._aSortData;for(g=0;g<i;g++)if(j=h[g],c=k[j.col],e=n[j.col],c=c<e?-1:c>e?1:0,0!==c)return"asc"===j.dir?c:-c;c=d[a];e=d[b];return c<e?-1:c>e?1:0}):i.sort(function(a,b){var c,g,j,i,k=h.length,n=f[a]._aSortData,o=f[b]._aSortData;for(j=0;j<k;j++)if(i=h[j],c=n[i.col],g=o[i.col],i=e[i.type+"-"+i.dir]||e["string-"+i.dir],
c=i(c,g),0!==c)return c;c=d[a];g=d[b];return c<g?-1:c>g?1:0})}a.bSorted=!0}function Jb(a){for(var b,c,d=a.aoColumns,e=X(a),a=a.oLanguage.oAria,f=0,g=d.length;f<g;f++){c=d[f];var j=c.asSorting;b=c.sTitle.replace(/<.*?>/g,"");var i=c.nTh;i.removeAttribute("aria-sort");c.bSortable&&(0<e.length&&e[0].col==f?(i.setAttribute("aria-sort","asc"==e[0].dir?"ascending":"descending"),c=j[e[0].index+1]||j[0]):c=j[0],b+="asc"===c?a.sSortAscending:a.sSortDescending);i.setAttribute("aria-label",b)}}function Va(a,
b,c,d){var e=a.aaSorting,f=a.aoColumns[b].asSorting,g=function(a,b){var c=a._idx;c===k&&(c=h.inArray(a[1],f));return c+1<f.length?c+1:b?null:0};"number"===typeof e[0]&&(e=a.aaSorting=[e]);c&&a.oFeatures.bSortMulti?(c=h.inArray(b,D(e,"0")),-1!==c?(b=g(e[c],!0),null===b&&1===e.length&&(b=0),null===b?e.splice(c,1):(e[c][1]=f[b],e[c]._idx=b)):(e.push([b,f[0],0]),e[e.length-1]._idx=0)):e.length&&e[0][0]==b?(b=g(e[0]),e.length=1,e[0][1]=f[b],e[0]._idx=b):(e.length=0,e.push([b,f[0]]),e[0]._idx=0);T(a);"function"==
typeof d&&d(a)}function Ma(a,b,c,d){var e=a.aoColumns[c];Wa(b,{},function(b){!1!==e.bSortable&&(a.oFeatures.bProcessing?(C(a,!0),setTimeout(function(){Va(a,c,b.shiftKey,d);"ssp"!==y(a)&&C(a,!1)},0)):Va(a,c,b.shiftKey,d))})}function wa(a){var b=a.aLastSort,c=a.oClasses.sSortColumn,d=X(a),e=a.oFeatures,f,g;if(e.bSort&&e.bSortClasses){e=0;for(f=b.length;e<f;e++)g=b[e].src,h(D(a.aoData,"anCells",g)).removeClass(c+(2>e?e+1:3));e=0;for(f=d.length;e<f;e++)g=d[e].src,h(D(a.aoData,"anCells",g)).addClass(c+
(2>e?e+1:3))}a.aLastSort=d}function Ib(a,b){var c=a.aoColumns[b],d=n.ext.order[c.sSortDataType],e;d&&(e=d.call(a.oInstance,a,b,ba(a,b)));for(var f,g=n.ext.type.order[c.sType+"-pre"],j=0,i=a.aoData.length;j<i;j++)if(c=a.aoData[j],c._aSortData||(c._aSortData=[]),!c._aSortData[b]||d)f=d?e[j]:B(a,j,b,"sort"),c._aSortData[b]=g?g(f):f}function xa(a){if(a.oFeatures.bStateSave&&!a.bDestroying){var b={time:+new Date,start:a._iDisplayStart,length:a._iDisplayLength,order:h.extend(!0,[],a.aaSorting),search:Bb(a.oAnteriorSearch),
columns:h.map(a.aoColumns,function(b,d){return{visible:b.bVisible,search:Bb(a.aoPreSearchCols[d])}})};r(a,"aoStateSaveParams","stateSaveParams",[a,b]);a.oSavedState=b;a.fnStateSaveCallback.call(a.oInstance,a,b)}}function Kb(a,b,c){var d,e,f=a.aoColumns,b=function(b){if(b&&b.time){var g=r(a,"aoStateLoadParams","stateLoadParams",[a,b]);if(-1===h.inArray(!1,g)&&(g=a.iStateDuration,!(0<g&&b.time<+new Date-1E3*g)&&!(b.columns&&f.length!==b.columns.length))){a.oLoadedState=h.extend(!0,{},b);b.start!==k&&
(a._iDisplayStart=b.start,a.iInitDisplayStart=b.start);b.length!==k&&(a._iDisplayLength=b.length);b.order!==k&&(a.aaSorting=[],h.each(b.order,function(b,c){a.aaSorting.push(c[0]>=f.length?[0,c[1]]:c)}));b.search!==k&&h.extend(a.oAnteriorSearch,Cb(b.search));if(b.columns){d=0;for(e=b.columns.length;d<e;d++)g=b.columns[d],g.visible!==k&&(f[d].bVisible=g.visible),g.search!==k&&h.extend(a.aoPreSearchCols[d],Cb(g.search))}r(a,"aoStateLoaded","stateLoaded",[a,b])}}c()};if(a.oFeatures.bStateSave){var g=
a.fnStateLoadCallback.call(a.oInstance,a,b);g!==k&&b(g)}else c()}function ya(a){var b=n.settings,a=h.inArray(a,D(b,"nTable"));return-1!==a?b[a]:null}function K(a,b,c,d){c="DataTables warning: "+(a?"table id="+a.sTableId+" - ":"")+c;d&&(c+=". For more information about this error, please see http://datatables.net/tn/"+d);if(b)E.console&&console.log&&console.log(c);else if(b=n.ext,b=b.sErrMode||b.errMode,a&&r(a,null,"error",[a,d,c]),"alert"==b)alert(c);else{if("throw"==b)throw Error(c);"function"==
typeof b&&b(a,d,c)}}function F(a,b,c,d){h.isArray(c)?h.each(c,function(c,d){h.isArray(d)?F(a,b,d[0],d[1]):F(a,b,d)}):(d===k&&(d=c),b[c]!==k&&(a[d]=b[c]))}function Xa(a,b,c){var d,e;for(e in b)b.hasOwnProperty(e)&&(d=b[e],h.isPlainObject(d)?(h.isPlainObject(a[e])||(a[e]={}),h.extend(!0,a[e],d)):a[e]=c&&"data"!==e&&"aaData"!==e&&h.isArray(d)?d.slice():d);return a}function Wa(a,b,c){h(a).on("click.DT",b,function(b){h(a).blur();c(b)}).on("keypress.DT",b,function(a){13===a.which&&(a.preventDefault(),c(a))}).on("selectstart.DT",
function(){return!1})}function z(a,b,c,d){c&&a[b].push({fn:c,sName:d})}function r(a,b,c,d){var e=[];b&&(e=h.map(a[b].slice().reverse(),function(b){return b.fn.apply(a.oInstance,d)}));null!==c&&(b=h.Event(c+".dt"),h(a.nTable).trigger(b,d),e.push(b.result));return e}function Sa(a){var b=a._iDisplayStart,c=a.fnDisplayEnd(),d=a._iDisplayLength;b>=c&&(b=c-d);b-=b%d;if(-1===d||0>b)b=0;a._iDisplayStart=b}function Na(a,b){var c=a.renderer,d=n.ext.renderer[b];return h.isPlainObject(c)&&c[b]?d[c[b]]||d._:"string"===
typeof c?d[c]||d._:d._}function y(a){return a.oFeatures.bServerSide?"ssp":a.ajax||a.sAjaxSource?"ajax":"dom"}function ia(a,b){var c=[],c=Lb.numbers_length,d=Math.floor(c/2);b<=c?c=Y(0,b):a<=d?(c=Y(0,c-2),c.push("ellipsis"),c.push(b-1)):(a>=b-1-d?c=Y(b-(c-2),b):(c=Y(a-d+2,a+d-1),c.push("ellipsis"),c.push(b-1)),c.splice(0,0,"ellipsis"),c.splice(0,0,0));c.DT_el="span";return c}function Da(a){h.each({num:function(b){return za(b,a)},"num-fmt":function(b){return za(b,a,Ya)},"html-num":function(b){return za(b,
a,Aa)},"html-num-fmt":function(b){return za(b,a,Aa,Ya)}},function(b,c){x.type.order[b+a+"-pre"]=c;b.match(/^html\-/)&&(x.type.search[b+a]=x.type.search.html)})}function Mb(a){return function(){var b=[ya(this[n.ext.iApiIndex])].concat(Array.prototype.slice.call(arguments));return n.ext.internal[a].apply(this,b)}}var n=function(a){this.$=function(a,b){return this.api(!0).$(a,b)};this._=function(a,b){return this.api(!0).rows(a,b).data()};this.api=function(a){return a?new s(ya(this[x.iApiIndex])):new s(this)};
this.fnAddData=function(a,b){var c=this.api(!0),d=h.isArray(a)&&(h.isArray(a[0])||h.isPlainObject(a[0]))?c.rows.add(a):c.row.add(a);(b===k||b)&&c.draw();return d.flatten().toArray()};this.fnAdjustColumnSizing=function(a){var b=this.api(!0).columns.adjust(),c=b.settings()[0],d=c.oScroll;a===k||a?b.draw(!1):(""!==d.sX||""!==d.sY)&&la(c)};this.fnClearTable=function(a){var b=this.api(!0).clear();(a===k||a)&&b.draw()};this.fnClose=function(a){this.api(!0).row(a).child.hide()};this.fnDeleteRow=function(a,
b,c){var d=this.api(!0),a=d.rows(a),e=a.settings()[0],h=e.aoData[a[0][0]];a.remove();b&&b.call(this,e,h);(c===k||c)&&d.draw();return h};this.fnDestroy=function(a){this.api(!0).destroy(a)};this.fnDraw=function(a){this.api(!0).draw(a)};this.fnFilter=function(a,b,c,d,e,h){e=this.api(!0);null===b||b===k?e.search(a,c,d,h):e.column(b).search(a,c,d,h);e.draw()};this.fnGetData=function(a,b){var c=this.api(!0);if(a!==k){var d=a.nodeName?a.nodeName.toLowerCase():"";return b!==k||"td"==d||"th"==d?c.cell(a,b).data():
c.row(a).data()||null}return c.data().toArray()};this.fnGetNodes=function(a){var b=this.api(!0);return a!==k?b.row(a).node():b.rows().nodes().flatten().toArray()};this.fnGetPosition=function(a){var b=this.api(!0),c=a.nodeName.toUpperCase();return"TR"==c?b.row(a).index():"TD"==c||"TH"==c?(a=b.cell(a).index(),[a.row,a.columnVisible,a.column]):null};this.fnIsOpen=function(a){return this.api(!0).row(a).child.isShown()};this.fnOpen=function(a,b,c){return this.api(!0).row(a).child(b,c).show().child()[0]};
this.fnPageChange=function(a,b){var c=this.api(!0).page(a);(b===k||b)&&c.draw(!1)};this.fnSetColumnVis=function(a,b,c){a=this.api(!0).column(a).visible(b);(c===k||c)&&a.columns.adjust().draw()};this.fnSettings=function(){return ya(this[x.iApiIndex])};this.fnSort=function(a){this.api(!0).order(a).draw()};this.fnSortListener=function(a,b,c){this.api(!0).order.listener(a,b,c)};this.fnUpdate=function(a,b,c,d,e){var h=this.api(!0);c===k||null===c?h.row(b).data(a):h.cell(b,c).data(a);(e===k||e)&&h.columns.adjust();
(d===k||d)&&h.draw();return 0};this.fnVersionCheck=x.fnVersionCheck;var b=this,c=a===k,d=this.length;c&&(a={});this.oApi=this.internal=x.internal;for(var e in n.ext.internal)e&&(this[e]=Mb(e));this.each(function(){var e={},g=1<d?Xa(e,a,!0):a,j=0,i,e=this.getAttribute("id"),m=!1,l=n.defaults,q=h(this);if("table"!=this.nodeName.toLowerCase())K(null,0,"Non-table node initialisation ("+this.nodeName+")",2);else{fb(l);gb(l.column);J(l,l,!0);J(l.column,l.column,!0);J(l,h.extend(g,q.data()));var t=n.settings,
j=0;for(i=t.length;j<i;j++){var o=t[j];if(o.nTable==this||o.nTHead&&o.nTHead.parentNode==this||o.nTFoot&&o.nTFoot.parentNode==this){var s=g.bRetrieve!==k?g.bRetrieve:l.bRetrieve;if(c||s)return o.oInstance;if(g.bDestroy!==k?g.bDestroy:l.bDestroy){o.oInstance.fnDestroy();break}else{K(o,0,"Cannot reinitialise DataTable",3);return}}if(o.sTableId==this.id){t.splice(j,1);break}}if(null===e||""===e)this.id=e="DataTables_Table_"+n.ext._unique++;var p=h.extend(!0,{},n.models.oSettings,{sDestroyWidth:q[0].style.width,
sInstance:e,sTableId:e});p.nTable=this;p.oApi=b.internal;p.oInit=g;t.push(p);p.oInstance=1===b.length?b:q.dataTable();fb(g);Ca(g.oLanguage);g.aLengthMenu&&!g.iDisplayLength&&(g.iDisplayLength=h.isArray(g.aLengthMenu[0])?g.aLengthMenu[0][0]:g.aLengthMenu[0]);g=Xa(h.extend(!0,{},l),g);F(p.oFeatures,g,"bPaginate bLengthChange bFilter bSort bSortMulti bInfo bProcessing bAutoWidth bSortClasses bServerSide bDeferRender".split(" "));F(p,g,["asStripeClasses","ajax","fnServerData","fnFormatNumber","sServerMethod",
"aaSorting","aaSortingFixed","aLengthMenu","sPaginationType","sAjaxSource","sAjaxDataProp","iStateDuration","sDom","bSortCellsTop","iTabIndex","fnStateLoadCallback","fnStateSaveCallback","renderer","searchDelay","rowId",["iCookieDuration","iStateDuration"],["oSearch","oAnteriorSearch"],["aoSearchCols","aoPreSearchCols"],["iDisplayLength","_iDisplayLength"]]);F(p.oScroll,g,[["sScrollX","sX"],["sScrollXInner","sXInner"],["sScrollY","sY"],["bScrollCollapse","bCollapse"]]);F(p.oLanguage,g,"fnInfoCallback");
z(p,"aoDrawCallback",g.fnDrawCallback,"user");z(p,"aoServerParams",g.fnServerParams,"user");z(p,"aoStateSaveParams",g.fnStateSaveParams,"user");z(p,"aoStateLoadParams",g.fnStateLoadParams,"user");z(p,"aoStateLoaded",g.fnStateLoaded,"user");z(p,"aoRowCallback",g.fnRowCallback,"user");z(p,"aoRowCreatedCallback",g.fnCreatedRow,"user");z(p,"aoHeaderCallback",g.fnHeaderCallback,"user");z(p,"aoFooterCallback",g.fnFooterCallback,"user");z(p,"aoInitComplete",g.fnInitComplete,"user");z(p,"aoPreDrawCallback",
g.fnPreDrawCallback,"user");p.rowIdFn=S(g.rowId);hb(p);var u=p.oClasses;h.extend(u,n.ext.classes,g.oClasses);q.addClass(u.sTable);p.iInitDisplayStart===k&&(p.iInitDisplayStart=g.iDisplayStart,p._iDisplayStart=g.iDisplayStart);null!==g.iDeferLoading&&(p.bDeferLoading=!0,e=h.isArray(g.iDeferLoading),p._iRecordsDisplay=e?g.iDeferLoading[0]:g.iDeferLoading,p._iRecordsTotal=e?g.iDeferLoading[1]:g.iDeferLoading);var v=p.oLanguage;h.extend(!0,v,g.oLanguage);v.sUrl&&(h.ajax({dataType:"json",url:v.sUrl,success:function(a){Ca(a);
J(l.oLanguage,a);h.extend(true,v,a);ha(p)},error:function(){ha(p)}}),m=!0);null===g.asStripeClasses&&(p.asStripeClasses=[u.sStripeOdd,u.sStripeEven]);var e=p.asStripeClasses,x=q.children("tbody").find("tr").eq(0);-1!==h.inArray(!0,h.map(e,function(a){return x.hasClass(a)}))&&(h("tbody tr",this).removeClass(e.join(" ")),p.asDestroyStripes=e.slice());e=[];t=this.getElementsByTagName("thead");0!==t.length&&(ea(p.aoHeader,t[0]),e=ra(p));if(null===g.aoColumns){t=[];j=0;for(i=e.length;j<i;j++)t.push(null)}else t=
g.aoColumns;j=0;for(i=t.length;j<i;j++)Ea(p,e?e[j]:null);jb(p,g.aoColumnDefs,t,function(a,b){ka(p,a,b)});if(x.length){var w=function(a,b){return a.getAttribute("data-"+b)!==null?b:null};h(x[0]).children("th, td").each(function(a,b){var c=p.aoColumns[a];if(c.mData===a){var d=w(b,"sort")||w(b,"order"),e=w(b,"filter")||w(b,"search");if(d!==null||e!==null){c.mData={_:a+".display",sort:d!==null?a+".@data-"+d:k,type:d!==null?a+".@data-"+d:k,filter:e!==null?a+".@data-"+e:k};ka(p,a)}}})}var U=p.oFeatures,
e=function(){if(g.aaSorting===k){var a=p.aaSorting;j=0;for(i=a.length;j<i;j++)a[j][1]=p.aoColumns[j].asSorting[0]}wa(p);U.bSort&&z(p,"aoDrawCallback",function(){if(p.bSorted){var a=X(p),b={};h.each(a,function(a,c){b[c.src]=c.dir});r(p,null,"order",[p,a,b]);Jb(p)}});z(p,"aoDrawCallback",function(){(p.bSorted||y(p)==="ssp"||U.bDeferRender)&&wa(p)},"sc");var a=q.children("caption").each(function(){this._captionSide=h(this).css("caption-side")}),b=q.children("thead");b.length===0&&(b=h("<thead/>").appendTo(q));
p.nTHead=b[0];b=q.children("tbody");b.length===0&&(b=h("<tbody/>").appendTo(q));p.nTBody=b[0];b=q.children("tfoot");if(b.length===0&&a.length>0&&(p.oScroll.sX!==""||p.oScroll.sY!==""))b=h("<tfoot/>").appendTo(q);if(b.length===0||b.children().length===0)q.addClass(u.sNoFooter);else if(b.length>0){p.nTFoot=b[0];ea(p.aoFooter,p.nTFoot)}if(g.aaData)for(j=0;j<g.aaData.length;j++)O(p,g.aaData[j]);else(p.bDeferLoading||y(p)=="dom")&&na(p,h(p.nTBody).children("tr"));p.aiDisplay=p.aiDisplayMaster.slice();
p.bInitialised=true;m===false&&ha(p)};g.bStateSave?(U.bStateSave=!0,z(p,"aoDrawCallback",xa,"state_save"),Kb(p,g,e)):e()}});b=null;return this},x,s,o,u,Za={},Nb=/[\r\n]/g,Aa=/<.*?>/g,Zb=/^\d{2,4}[\.\/\-]\d{1,2}[\.\/\-]\d{1,2}([T ]{1}\d{1,2}[:\.]\d{2}([\.:]\d{2})?)?$/,$b=RegExp("(\\/|\\.|\\*|\\+|\\?|\\||\\(|\\)|\\[|\\]|\\{|\\}|\\\\|\\$|\\^|\\-)","g"),Ya=/[',$£€¥%\u2009\u202F\u20BD\u20a9\u20BArfkɃΞ]/gi,M=function(a){return!a||!0===a||"-"===a?!0:!1},Ob=function(a){var b=parseInt(a,10);return!isNaN(b)&&
isFinite(a)?b:null},Pb=function(a,b){Za[b]||(Za[b]=RegExp(Qa(b),"g"));return"string"===typeof a&&"."!==b?a.replace(/\./g,"").replace(Za[b],"."):a},$a=function(a,b,c){var d="string"===typeof a;if(M(a))return!0;b&&d&&(a=Pb(a,b));c&&d&&(a=a.replace(Ya,""));return!isNaN(parseFloat(a))&&isFinite(a)},Qb=function(a,b,c){return M(a)?!0:!(M(a)||"string"===typeof a)?null:$a(a.replace(Aa,""),b,c)?!0:null},D=function(a,b,c){var d=[],e=0,f=a.length;if(c!==k)for(;e<f;e++)a[e]&&a[e][b]&&d.push(a[e][b][c]);else for(;e<
f;e++)a[e]&&d.push(a[e][b]);return d},ja=function(a,b,c,d){var e=[],f=0,g=b.length;if(d!==k)for(;f<g;f++)a[b[f]][c]&&e.push(a[b[f]][c][d]);else for(;f<g;f++)e.push(a[b[f]][c]);return e},Y=function(a,b){var c=[],d;b===k?(b=0,d=a):(d=b,b=a);for(var e=b;e<d;e++)c.push(e);return c},Rb=function(a){for(var b=[],c=0,d=a.length;c<d;c++)a[c]&&b.push(a[c]);return b},qa=function(a){var b;a:{if(!(2>a.length)){b=a.slice().sort();for(var c=b[0],d=1,e=b.length;d<e;d++){if(b[d]===c){b=!1;break a}c=b[d]}}b=!0}if(b)return a.slice();
b=[];var e=a.length,f,g=0,d=0;a:for(;d<e;d++){c=a[d];for(f=0;f<g;f++)if(b[f]===c)continue a;b.push(c);g++}return b};n.util={throttle:function(a,b){var c=b!==k?b:200,d,e;return function(){var b=this,g=+new Date,j=arguments;d&&g<d+c?(clearTimeout(e),e=setTimeout(function(){d=k;a.apply(b,j)},c)):(d=g,a.apply(b,j))}},escapeRegex:function(a){return a.replace($b,"\\$1")}};var A=function(a,b,c){a[b]!==k&&(a[c]=a[b])},ca=/\[.*?\]$/,W=/\(\)$/,Qa=n.util.escapeRegex,va=h("<div>")[0],Wb=va.textContent!==k,Yb=
/<.*?>/g,Oa=n.util.throttle,Sb=[],w=Array.prototype,ac=function(a){var b,c,d=n.settings,e=h.map(d,function(a){return a.nTable});if(a){if(a.nTable&&a.oApi)return[a];if(a.nodeName&&"table"===a.nodeName.toLowerCase())return b=h.inArray(a,e),-1!==b?[d[b]]:null;if(a&&"function"===typeof a.settings)return a.settings().toArray();"string"===typeof a?c=h(a):a instanceof h&&(c=a)}else return[];if(c)return c.map(function(){b=h.inArray(this,e);return-1!==b?d[b]:null}).toArray()};s=function(a,b){if(!(this instanceof
s))return new s(a,b);var c=[],d=function(a){(a=ac(a))&&(c=c.concat(a))};if(h.isArray(a))for(var e=0,f=a.length;e<f;e++)d(a[e]);else d(a);this.context=qa(c);b&&h.merge(this,b);this.selector={rows:null,cols:null,opts:null};s.extend(this,this,Sb)};n.Api=s;h.extend(s.prototype,{any:function(){return 0!==this.count()},concat:w.concat,context:[],count:function(){return this.flatten().length},each:function(a){for(var b=0,c=this.length;b<c;b++)a.call(this,this[b],b,this);return this},eq:function(a){var b=
this.context;return b.length>a?new s(b[a],this[a]):null},filter:function(a){var b=[];if(w.filter)b=w.filter.call(this,a,this);else for(var c=0,d=this.length;c<d;c++)a.call(this,this[c],c,this)&&b.push(this[c]);return new s(this.context,b)},flatten:function(){var a=[];return new s(this.context,a.concat.apply(a,this.toArray()))},join:w.join,indexOf:w.indexOf||function(a,b){for(var c=b||0,d=this.length;c<d;c++)if(this[c]===a)return c;return-1},iterator:function(a,b,c,d){var e=[],f,g,j,h,m,l=this.context,
n,o,u=this.selector;"string"===typeof a&&(d=c,c=b,b=a,a=!1);g=0;for(j=l.length;g<j;g++){var r=new s(l[g]);if("table"===b)f=c.call(r,l[g],g),f!==k&&e.push(f);else if("columns"===b||"rows"===b)f=c.call(r,l[g],this[g],g),f!==k&&e.push(f);else if("column"===b||"column-rows"===b||"row"===b||"cell"===b){o=this[g];"column-rows"===b&&(n=Ba(l[g],u.opts));h=0;for(m=o.length;h<m;h++)f=o[h],f="cell"===b?c.call(r,l[g],f.row,f.column,g,h):c.call(r,l[g],f,g,h,n),f!==k&&e.push(f)}}return e.length||d?(a=new s(l,a?
e.concat.apply([],e):e),b=a.selector,b.rows=u.rows,b.cols=u.cols,b.opts=u.opts,a):this},lastIndexOf:w.lastIndexOf||function(a,b){return this.indexOf.apply(this.toArray.reverse(),arguments)},length:0,map:function(a){var b=[];if(w.map)b=w.map.call(this,a,this);else for(var c=0,d=this.length;c<d;c++)b.push(a.call(this,this[c],c));return new s(this.context,b)},pluck:function(a){return this.map(function(b){return b[a]})},pop:w.pop,push:w.push,reduce:w.reduce||function(a,b){return ib(this,a,b,0,this.length,
1)},reduceRight:w.reduceRight||function(a,b){return ib(this,a,b,this.length-1,-1,-1)},reverse:w.reverse,selector:null,shift:w.shift,slice:function(){return new s(this.context,this)},sort:w.sort,splice:w.splice,toArray:function(){return w.slice.call(this)},to$:function(){return h(this)},toJQuery:function(){return h(this)},unique:function(){return new s(this.context,qa(this))},unshift:w.unshift});s.extend=function(a,b,c){if(c.length&&b&&(b instanceof s||b.__dt_wrapper)){var d,e,f,g=function(a,b,c){return function(){var d=
b.apply(a,arguments);s.extend(d,d,c.methodExt);return d}};d=0;for(e=c.length;d<e;d++)f=c[d],b[f.name]="function"===typeof f.val?g(a,f.val,f):h.isPlainObject(f.val)?{}:f.val,b[f.name].__dt_wrapper=!0,s.extend(a,b[f.name],f.propExt)}};s.register=o=function(a,b){if(h.isArray(a))for(var c=0,d=a.length;c<d;c++)s.register(a[c],b);else for(var e=a.split("."),f=Sb,g,j,c=0,d=e.length;c<d;c++){g=(j=-1!==e[c].indexOf("()"))?e[c].replace("()",""):e[c];var i;a:{i=0;for(var m=f.length;i<m;i++)if(f[i].name===g){i=
f[i];break a}i=null}i||(i={name:g,val:{},methodExt:[],propExt:[]},f.push(i));c===d-1?i.val=b:f=j?i.methodExt:i.propExt}};s.registerPlural=u=function(a,b,c){s.register(a,c);s.register(b,function(){var a=c.apply(this,arguments);return a===this?this:a instanceof s?a.length?h.isArray(a[0])?new s(a.context,a[0]):a[0]:k:a})};o("tables()",function(a){var b;if(a){b=s;var c=this.context;if("number"===typeof a)a=[c[a]];else var d=h.map(c,function(a){return a.nTable}),a=h(d).filter(a).map(function(){var a=h.inArray(this,
d);return c[a]}).toArray();b=new b(a)}else b=this;return b});o("table()",function(a){var a=this.tables(a),b=a.context;return b.length?new s(b[0]):a});u("tables().nodes()","table().node()",function(){return this.iterator("table",function(a){return a.nTable},1)});u("tables().body()","table().body()",function(){return this.iterator("table",function(a){return a.nTBody},1)});u("tables().header()","table().header()",function(){return this.iterator("table",function(a){return a.nTHead},1)});u("tables().footer()",
"table().footer()",function(){return this.iterator("table",function(a){return a.nTFoot},1)});u("tables().containers()","table().container()",function(){return this.iterator("table",function(a){return a.nTableWrapper},1)});o("draw()",function(a){return this.iterator("table",function(b){"page"===a?P(b):("string"===typeof a&&(a="full-hold"===a?!1:!0),T(b,!1===a))})});o("page()",function(a){return a===k?this.page.info().page:this.iterator("table",function(b){Ta(b,a)})});o("page.info()",function(){if(0===
this.context.length)return k;var a=this.context[0],b=a._iDisplayStart,c=a.oFeatures.bPaginate?a._iDisplayLength:-1,d=a.fnRecordsDisplay(),e=-1===c;return{page:e?0:Math.floor(b/c),pages:e?1:Math.ceil(d/c),start:b,end:a.fnDisplayEnd(),length:c,recordsTotal:a.fnRecordsTotal(),recordsDisplay:d,serverSide:"ssp"===y(a)}});o("page.len()",function(a){return a===k?0!==this.context.length?this.context[0]._iDisplayLength:k:this.iterator("table",function(b){Ra(b,a)})});var Tb=function(a,b,c){if(c){var d=new s(a);
d.one("draw",function(){c(d.ajax.json())})}if("ssp"==y(a))T(a,b);else{C(a,!0);var e=a.jqXHR;e&&4!==e.readyState&&e.abort();sa(a,[],function(c){oa(a);for(var c=ta(a,c),d=0,e=c.length;d<e;d++)O(a,c[d]);T(a,b);C(a,!1)})}};o("ajax.json()",function(){var a=this.context;if(0<a.length)return a[0].json});o("ajax.params()",function(){var a=this.context;if(0<a.length)return a[0].oAjaxData});o("ajax.reload()",function(a,b){return this.iterator("table",function(c){Tb(c,!1===b,a)})});o("ajax.url()",function(a){var b=
this.context;if(a===k){if(0===b.length)return k;b=b[0];return b.ajax?h.isPlainObject(b.ajax)?b.ajax.url:b.ajax:b.sAjaxSource}return this.iterator("table",function(b){h.isPlainObject(b.ajax)?b.ajax.url=a:b.ajax=a})});o("ajax.url().load()",function(a,b){return this.iterator("table",function(c){Tb(c,!1===b,a)})});var ab=function(a,b,c,d,e){var f=[],g,j,i,m,l,n;i=typeof b;if(!b||"string"===i||"function"===i||b.length===k)b=[b];i=0;for(m=b.length;i<m;i++){j=b[i]&&b[i].split&&!b[i].match(/[\[\(:]/)?b[i].split(","):
[b[i]];l=0;for(n=j.length;l<n;l++)(g=c("string"===typeof j[l]?h.trim(j[l]):j[l]))&&g.length&&(f=f.concat(g))}a=x.selector[a];if(a.length){i=0;for(m=a.length;i<m;i++)f=a[i](d,e,f)}return qa(f)},bb=function(a){a||(a={});a.filter&&a.search===k&&(a.search=a.filter);return h.extend({search:"none",order:"current",page:"all"},a)},cb=function(a){for(var b=0,c=a.length;b<c;b++)if(0<a[b].length)return a[0]=a[b],a[0].length=1,a.length=1,a.context=[a.context[b]],a;a.length=0;return a},Ba=function(a,b){var c,
d,e,f=[],g=a.aiDisplay;e=a.aiDisplayMaster;var j=b.search;c=b.order;d=b.page;if("ssp"==y(a))return"removed"===j?[]:Y(0,e.length);if("current"==d){c=a._iDisplayStart;for(d=a.fnDisplayEnd();c<d;c++)f.push(g[c])}else if("current"==c||"applied"==c)if("none"==j)f=e.slice();else if("applied"==j)f=g.slice();else{if("removed"==j){var i={};c=0;for(d=g.length;c<d;c++)i[g[c]]=null;f=h.map(e,function(a){return!i.hasOwnProperty(a)?a:null})}}else if("index"==c||"original"==c){c=0;for(d=a.aoData.length;c<d;c++)"none"==
j?f.push(c):(e=h.inArray(c,g),(-1===e&&"removed"==j||0<=e&&"applied"==j)&&f.push(c))}return f};o("rows()",function(a,b){a===k?a="":h.isPlainObject(a)&&(b=a,a="");var b=bb(b),c=this.iterator("table",function(c){var e=b,f;return ab("row",a,function(a){var b=Ob(a),i=c.aoData;if(b!==null&&!e)return[b];f||(f=Ba(c,e));if(b!==null&&h.inArray(b,f)!==-1)return[b];if(a===null||a===k||a==="")return f;if(typeof a==="function")return h.map(f,function(b){var c=i[b];return a(b,c._aData,c.nTr)?b:null});if(a.nodeName){var b=
a._DT_RowIndex,m=a._DT_CellIndex;if(b!==k)return i[b]&&i[b].nTr===a?[b]:[];if(m)return i[m.row]&&i[m.row].nTr===a?[m.row]:[];b=h(a).closest("*[data-dt-row]");return b.length?[b.data("dt-row")]:[]}if(typeof a==="string"&&a.charAt(0)==="#"){b=c.aIds[a.replace(/^#/,"")];if(b!==k)return[b.idx]}b=Rb(ja(c.aoData,f,"nTr"));return h(b).filter(a).map(function(){return this._DT_RowIndex}).toArray()},c,e)},1);c.selector.rows=a;c.selector.opts=b;return c});o("rows().nodes()",function(){return this.iterator("row",
function(a,b){return a.aoData[b].nTr||k},1)});o("rows().data()",function(){return this.iterator(!0,"rows",function(a,b){return ja(a.aoData,b,"_aData")},1)});u("rows().cache()","row().cache()",function(a){return this.iterator("row",function(b,c){var d=b.aoData[c];return"search"===a?d._aFilterData:d._aSortData},1)});u("rows().invalidate()","row().invalidate()",function(a){return this.iterator("row",function(b,c){da(b,c,a)})});u("rows().indexes()","row().index()",function(){return this.iterator("row",
function(a,b){return b},1)});u("rows().ids()","row().id()",function(a){for(var b=[],c=this.context,d=0,e=c.length;d<e;d++)for(var f=0,g=this[d].length;f<g;f++){var h=c[d].rowIdFn(c[d].aoData[this[d][f]]._aData);b.push((!0===a?"#":"")+h)}return new s(c,b)});u("rows().remove()","row().remove()",function(){var a=this;this.iterator("row",function(b,c,d){var e=b.aoData,f=e[c],g,h,i,m,l;e.splice(c,1);g=0;for(h=e.length;g<h;g++)if(i=e[g],l=i.anCells,null!==i.nTr&&(i.nTr._DT_RowIndex=g),null!==l){i=0;for(m=
l.length;i<m;i++)l[i]._DT_CellIndex.row=g}pa(b.aiDisplayMaster,c);pa(b.aiDisplay,c);pa(a[d],c,!1);0<b._iRecordsDisplay&&b._iRecordsDisplay--;Sa(b);c=b.rowIdFn(f._aData);c!==k&&delete b.aIds[c]});this.iterator("table",function(a){for(var c=0,d=a.aoData.length;c<d;c++)a.aoData[c].idx=c});return this});o("rows.add()",function(a){var b=this.iterator("table",function(b){var c,f,g,h=[];f=0;for(g=a.length;f<g;f++)c=a[f],c.nodeName&&"TR"===c.nodeName.toUpperCase()?h.push(na(b,c)[0]):h.push(O(b,c));return h},
1),c=this.rows(-1);c.pop();h.merge(c,b);return c});o("row()",function(a,b){return cb(this.rows(a,b))});o("row().data()",function(a){var b=this.context;if(a===k)return b.length&&this.length?b[0].aoData[this[0]]._aData:k;var c=b[0].aoData[this[0]];c._aData=a;h.isArray(a)&&c.nTr.id&&N(b[0].rowId)(a,c.nTr.id);da(b[0],this[0],"data");return this});o("row().node()",function(){var a=this.context;return a.length&&this.length?a[0].aoData[this[0]].nTr||null:null});o("row.add()",function(a){a instanceof h&&
a.length&&(a=a[0]);var b=this.iterator("table",function(b){return a.nodeName&&"TR"===a.nodeName.toUpperCase()?na(b,a)[0]:O(b,a)});return this.row(b[0])});var db=function(a,b){var c=a.context;if(c.length&&(c=c[0].aoData[b!==k?b:a[0]])&&c._details)c._details.remove(),c._detailsShow=k,c._details=k},Ub=function(a,b){var c=a.context;if(c.length&&a.length){var d=c[0].aoData[a[0]];if(d._details){(d._detailsShow=b)?d._details.insertAfter(d.nTr):d._details.detach();var e=c[0],f=new s(e),g=e.aoData;f.off("draw.dt.DT_details column-visibility.dt.DT_details destroy.dt.DT_details");
0<D(g,"_details").length&&(f.on("draw.dt.DT_details",function(a,b){e===b&&f.rows({page:"current"}).eq(0).each(function(a){a=g[a];a._detailsShow&&a._details.insertAfter(a.nTr)})}),f.on("column-visibility.dt.DT_details",function(a,b){if(e===b)for(var c,d=V(b),f=0,h=g.length;f<h;f++)c=g[f],c._details&&c._details.children("td[colspan]").attr("colspan",d)}),f.on("destroy.dt.DT_details",function(a,b){if(e===b)for(var c=0,d=g.length;c<d;c++)g[c]._details&&db(f,c)}))}}};o("row().child()",function(a,b){var c=
this.context;if(a===k)return c.length&&this.length?c[0].aoData[this[0]]._details:k;if(!0===a)this.child.show();else if(!1===a)db(this);else if(c.length&&this.length){var d=c[0],c=c[0].aoData[this[0]],e=[],f=function(a,b){if(h.isArray(a)||a instanceof h)for(var c=0,k=a.length;c<k;c++)f(a[c],b);else a.nodeName&&"tr"===a.nodeName.toLowerCase()?e.push(a):(c=h("<tr><td/></tr>").addClass(b),h("td",c).addClass(b).html(a)[0].colSpan=V(d),e.push(c[0]))};f(a,b);c._details&&c._details.detach();c._details=h(e);
c._detailsShow&&c._details.insertAfter(c.nTr)}return this});o(["row().child.show()","row().child().show()"],function(){Ub(this,!0);return this});o(["row().child.hide()","row().child().hide()"],function(){Ub(this,!1);return this});o(["row().child.remove()","row().child().remove()"],function(){db(this);return this});o("row().child.isShown()",function(){var a=this.context;return a.length&&this.length?a[0].aoData[this[0]]._detailsShow||!1:!1});var bc=/^([^:]+):(name|visIdx|visible)$/,Vb=function(a,b,
c,d,e){for(var c=[],d=0,f=e.length;d<f;d++)c.push(B(a,e[d],b));return c};o("columns()",function(a,b){a===k?a="":h.isPlainObject(a)&&(b=a,a="");var b=bb(b),c=this.iterator("table",function(c){var e=a,f=b,g=c.aoColumns,j=D(g,"sName"),i=D(g,"nTh");return ab("column",e,function(a){var b=Ob(a);if(a==="")return Y(g.length);if(b!==null)return[b>=0?b:g.length+b];if(typeof a==="function"){var e=Ba(c,f);return h.map(g,function(b,f){return a(f,Vb(c,f,0,0,e),i[f])?f:null})}var k=typeof a==="string"?a.match(bc):
"";if(k)switch(k[2]){case "visIdx":case "visible":b=parseInt(k[1],10);if(b<0){var n=h.map(g,function(a,b){return a.bVisible?b:null});return[n[n.length+b]]}return[aa(c,b)];case "name":return h.map(j,function(a,b){return a===k[1]?b:null});default:return[]}if(a.nodeName&&a._DT_CellIndex)return[a._DT_CellIndex.column];b=h(i).filter(a).map(function(){return h.inArray(this,i)}).toArray();if(b.length||!a.nodeName)return b;b=h(a).closest("*[data-dt-column]");return b.length?[b.data("dt-column")]:[]},c,f)},
1);c.selector.cols=a;c.selector.opts=b;return c});u("columns().header()","column().header()",function(){return this.iterator("column",function(a,b){return a.aoColumns[b].nTh},1)});u("columns().footer()","column().footer()",function(){return this.iterator("column",function(a,b){return a.aoColumns[b].nTf},1)});u("columns().data()","column().data()",function(){return this.iterator("column-rows",Vb,1)});u("columns().dataSrc()","column().dataSrc()",function(){return this.iterator("column",function(a,b){return a.aoColumns[b].mData},
1)});u("columns().cache()","column().cache()",function(a){return this.iterator("column-rows",function(b,c,d,e,f){return ja(b.aoData,f,"search"===a?"_aFilterData":"_aSortData",c)},1)});u("columns().nodes()","column().nodes()",function(){return this.iterator("column-rows",function(a,b,c,d,e){return ja(a.aoData,e,"anCells",b)},1)});u("columns().visible()","column().visible()",function(a,b){var c=this.iterator("column",function(b,c){if(a===k)return b.aoColumns[c].bVisible;var f=b.aoColumns,g=f[c],j=b.aoData,
i,m,l;if(a!==k&&g.bVisible!==a){if(a){var n=h.inArray(!0,D(f,"bVisible"),c+1);i=0;for(m=j.length;i<m;i++)l=j[i].nTr,f=j[i].anCells,l&&l.insertBefore(f[c],f[n]||null)}else h(D(b.aoData,"anCells",c)).detach();g.bVisible=a;fa(b,b.aoHeader);fa(b,b.aoFooter);b.aiDisplay.length||h(b.nTBody).find("td[colspan]").attr("colspan",V(b));xa(b)}});a!==k&&(this.iterator("column",function(c,e){r(c,null,"column-visibility",[c,e,a,b])}),(b===k||b)&&this.columns.adjust());return c});u("columns().indexes()","column().index()",
function(a){return this.iterator("column",function(b,c){return"visible"===a?ba(b,c):c},1)});o("columns.adjust()",function(){return this.iterator("table",function(a){$(a)},1)});o("column.index()",function(a,b){if(0!==this.context.length){var c=this.context[0];if("fromVisible"===a||"toData"===a)return aa(c,b);if("fromData"===a||"toVisible"===a)return ba(c,b)}});o("column()",function(a,b){return cb(this.columns(a,b))});o("cells()",function(a,b,c){h.isPlainObject(a)&&(a.row===k?(c=a,a=null):(c=b,b=null));
h.isPlainObject(b)&&(c=b,b=null);if(null===b||b===k)return this.iterator("table",function(b){var d=a,e=bb(c),f=b.aoData,g=Ba(b,e),j=Rb(ja(f,g,"anCells")),i=h([].concat.apply([],j)),l,m=b.aoColumns.length,n,o,u,s,r,v;return ab("cell",d,function(a){var c=typeof a==="function";if(a===null||a===k||c){n=[];o=0;for(u=g.length;o<u;o++){l=g[o];for(s=0;s<m;s++){r={row:l,column:s};if(c){v=f[l];a(r,B(b,l,s),v.anCells?v.anCells[s]:null)&&n.push(r)}else n.push(r)}}return n}if(h.isPlainObject(a))return a.column!==
k&&a.row!==k&&h.inArray(a.row,g)!==-1?[a]:[];c=i.filter(a).map(function(a,b){return{row:b._DT_CellIndex.row,column:b._DT_CellIndex.column}}).toArray();if(c.length||!a.nodeName)return c;v=h(a).closest("*[data-dt-row]");return v.length?[{row:v.data("dt-row"),column:v.data("dt-column")}]:[]},b,e)});var d=this.columns(b),e=this.rows(a),f,g,j,i,m;this.iterator("table",function(a,b){f=[];g=0;for(j=e[b].length;g<j;g++){i=0;for(m=d[b].length;i<m;i++)f.push({row:e[b][g],column:d[b][i]})}},1);var l=this.cells(f,
c);h.extend(l.selector,{cols:b,rows:a,opts:c});return l});u("cells().nodes()","cell().node()",function(){return this.iterator("cell",function(a,b,c){return(a=a.aoData[b])&&a.anCells?a.anCells[c]:k},1)});o("cells().data()",function(){return this.iterator("cell",function(a,b,c){return B(a,b,c)},1)});u("cells().cache()","cell().cache()",function(a){a="search"===a?"_aFilterData":"_aSortData";return this.iterator("cell",function(b,c,d){return b.aoData[c][a][d]},1)});u("cells().render()","cell().render()",
function(a){return this.iterator("cell",function(b,c,d){return B(b,c,d,a)},1)});u("cells().indexes()","cell().index()",function(){return this.iterator("cell",function(a,b,c){return{row:b,column:c,columnVisible:ba(a,c)}},1)});u("cells().invalidate()","cell().invalidate()",function(a){return this.iterator("cell",function(b,c,d){da(b,c,a,d)})});o("cell()",function(a,b,c){return cb(this.cells(a,b,c))});o("cell().data()",function(a){var b=this.context,c=this[0];if(a===k)return b.length&&c.length?B(b[0],
c[0].row,c[0].column):k;kb(b[0],c[0].row,c[0].column,a);da(b[0],c[0].row,"data",c[0].column);return this});o("order()",function(a,b){var c=this.context;if(a===k)return 0!==c.length?c[0].aaSorting:k;"number"===typeof a?a=[[a,b]]:a.length&&!h.isArray(a[0])&&(a=Array.prototype.slice.call(arguments));return this.iterator("table",function(b){b.aaSorting=a.slice()})});o("order.listener()",function(a,b,c){return this.iterator("table",function(d){Ma(d,a,b,c)})});o("order.fixed()",function(a){if(!a){var b=
this.context,b=b.length?b[0].aaSortingFixed:k;return h.isArray(b)?{pre:b}:b}return this.iterator("table",function(b){b.aaSortingFixed=h.extend(!0,{},a)})});o(["columns().order()","column().order()"],function(a){var b=this;return this.iterator("table",function(c,d){var e=[];h.each(b[d],function(b,c){e.push([c,a])});c.aaSorting=e})});o("search()",function(a,b,c,d){var e=this.context;return a===k?0!==e.length?e[0].oAnteriorSearch.sSearch:k:this.iterator("table",function(e){e.oFeatures.bFilter&&ga(e,
h.extend({},e.oAnteriorSearch,{sSearch:a+"",bRegex:null===b?!1:b,bSmart:null===c?!0:c,bCaseInsensitive:null===d?!0:d}),1)})});u("columns().search()","column().search()",function(a,b,c,d){return this.iterator("column",function(e,f){var g=e.aoPreSearchCols;if(a===k)return g[f].sSearch;e.oFeatures.bFilter&&(h.extend(g[f],{sSearch:a+"",bRegex:null===b?!1:b,bSmart:null===c?!0:c,bCaseInsensitive:null===d?!0:d}),ga(e,e.oAnteriorSearch,1))})});o("state()",function(){return this.context.length?this.context[0].oSavedState:
null});o("state.clear()",function(){return this.iterator("table",function(a){a.fnStateSaveCallback.call(a.oInstance,a,{})})});o("state.loaded()",function(){return this.context.length?this.context[0].oLoadedState:null});o("state.save()",function(){return this.iterator("table",function(a){xa(a)})});n.versionCheck=n.fnVersionCheck=function(a){for(var b=n.version.split("."),a=a.split("."),c,d,e=0,f=a.length;e<f;e++)if(c=parseInt(b[e],10)||0,d=parseInt(a[e],10)||0,c!==d)return c>d;return!0};n.isDataTable=
n.fnIsDataTable=function(a){var b=h(a).get(0),c=!1;if(a instanceof n.Api)return!0;h.each(n.settings,function(a,e){var f=e.nScrollHead?h("table",e.nScrollHead)[0]:null,g=e.nScrollFoot?h("table",e.nScrollFoot)[0]:null;if(e.nTable===b||f===b||g===b)c=!0});return c};n.tables=n.fnTables=function(a){var b=!1;h.isPlainObject(a)&&(b=a.api,a=a.visible);var c=h.map(n.settings,function(b){if(!a||a&&h(b.nTable).is(":visible"))return b.nTable});return b?new s(c):c};n.camelToHungarian=J;o("$()",function(a,b){var c=
this.rows(b).nodes(),c=h(c);return h([].concat(c.filter(a).toArray(),c.find(a).toArray()))});h.each(["on","one","off"],function(a,b){o(b+"()",function(){var a=Array.prototype.slice.call(arguments);a[0]=h.map(a[0].split(/\s/),function(a){return!a.match(/\.dt\b/)?a+".dt":a}).join(" ");var d=h(this.tables().nodes());d[b].apply(d,a);return this})});o("clear()",function(){return this.iterator("table",function(a){oa(a)})});o("settings()",function(){return new s(this.context,this.context)});o("init()",function(){var a=
this.context;return a.length?a[0].oInit:null});o("data()",function(){return this.iterator("table",function(a){return D(a.aoData,"_aData")}).flatten()});o("destroy()",function(a){a=a||!1;return this.iterator("table",function(b){var c=b.nTableWrapper.parentNode,d=b.oClasses,e=b.nTable,f=b.nTBody,g=b.nTHead,j=b.nTFoot,i=h(e),f=h(f),k=h(b.nTableWrapper),l=h.map(b.aoData,function(a){return a.nTr}),o;b.bDestroying=!0;r(b,"aoDestroyCallback","destroy",[b]);a||(new s(b)).columns().visible(!0);k.off(".DT").find(":not(tbody *)").off(".DT");
h(E).off(".DT-"+b.sInstance);e!=g.parentNode&&(i.children("thead").detach(),i.append(g));j&&e!=j.parentNode&&(i.children("tfoot").detach(),i.append(j));b.aaSorting=[];b.aaSortingFixed=[];wa(b);h(l).removeClass(b.asStripeClasses.join(" "));h("th, td",g).removeClass(d.sSortable+" "+d.sSortableAsc+" "+d.sSortableDesc+" "+d.sSortableNone);f.children().detach();f.append(l);g=a?"remove":"detach";i[g]();k[g]();!a&&c&&(c.insertBefore(e,b.nTableReinsertBefore),i.css("width",b.sDestroyWidth).removeClass(d.sTable),
(o=b.asDestroyStripes.length)&&f.children().each(function(a){h(this).addClass(b.asDestroyStripes[a%o])}));c=h.inArray(b,n.settings);-1!==c&&n.settings.splice(c,1)})});h.each(["column","row","cell"],function(a,b){o(b+"s().every()",function(a){var d=this.selector.opts,e=this;return this.iterator(b,function(f,g,h,i,m){a.call(e[b](g,"cell"===b?h:d,"cell"===b?d:k),g,h,i,m)})})});o("i18n()",function(a,b,c){var d=this.context[0],a=S(a)(d.oLanguage);a===k&&(a=b);c!==k&&h.isPlainObject(a)&&(a=a[c]!==k?a[c]:
a._);return a.replace("%d",c)});n.version="1.10.19";n.settings=[];n.models={};n.models.oSearch={bCaseInsensitive:!0,sSearch:"",bRegex:!1,bSmart:!0};n.models.oRow={nTr:null,anCells:null,_aData:[],_aSortData:null,_aFilterData:null,_sFilterRow:null,_sRowStripe:"",src:null,idx:-1};n.models.oColumn={idx:null,aDataSort:null,asSorting:null,bSearchable:null,bSortable:null,bVisible:null,_sManualType:null,_bAttrSrc:!1,fnCreatedCell:null,fnGetData:null,fnSetData:null,mData:null,mRender:null,nTh:null,nTf:null,
sClass:null,sContentPadding:null,sDefaultContent:null,sName:null,sSortDataType:"std",sSortingClass:null,sSortingClassJUI:null,sTitle:null,sType:null,sWidth:null,sWidthOrig:null};n.defaults={aaData:null,aaSorting:[[0,"asc"]],aaSortingFixed:[],ajax:null,aLengthMenu:[10,25,50,100],aoColumns:null,aoColumnDefs:null,aoSearchCols:[],asStripeClasses:null,bAutoWidth:!0,bDeferRender:!1,bDestroy:!1,bFilter:!0,bInfo:!0,bLengthChange:!0,bPaginate:!0,bProcessing:!1,bRetrieve:!1,bScrollCollapse:!1,bServerSide:!1,
bSort:!0,bSortMulti:!0,bSortCellsTop:!1,bSortClasses:!0,bStateSave:!1,fnCreatedRow:null,fnDrawCallback:null,fnFooterCallback:null,fnFormatNumber:function(a){return a.toString().replace(/\B(?=(\d{3})+(?!\d))/g,this.oLanguage.sThousands)},fnHeaderCallback:null,fnInfoCallback:null,fnInitComplete:null,fnPreDrawCallback:null,fnRowCallback:null,fnServerData:null,fnServerParams:null,fnStateLoadCallback:function(a){try{return JSON.parse((-1===a.iStateDuration?sessionStorage:localStorage).getItem("DataTables_"+
a.sInstance+"_"+location.pathname))}catch(b){}},fnStateLoadParams:null,fnStateLoaded:null,fnStateSaveCallback:function(a,b){try{(-1===a.iStateDuration?sessionStorage:localStorage).setItem("DataTables_"+a.sInstance+"_"+location.pathname,JSON.stringify(b))}catch(c){}},fnStateSaveParams:null,iStateDuration:7200,iDeferLoading:null,iDisplayLength:10,iDisplayStart:0,iTabIndex:0,oClasses:{},oLanguage:{oAria:{sSortAscending:": activate to sort column ascending",sSortDescending:": activate to sort column descending"},
oPaginate:{sFirst:"First",sLast:"Last",sNext:"Siguiente",sAnterior:"Anterior"},sEmptyTable:"No hay datos disponibles en la tabla",sInfo:"Mostrando desde _START_ hasta _END_, de _TOTAL_ elementos",sInfoEmpty:"Mostrando desde 0 hasta 0, de 0 elementos",sInfoFiltered:"(Filtrados _MAX_  elementos)",sInfoPostFix:"",sDecimal:"",sThousands:",",sLengthMenu:"Mostrar _MENU_ elementos",sLoadingRecords:"Loading...",sProcessing:"Processing...",sSearch:"Buscar:",sSearchPlaceholder:"",sUrl:"",sZeroRecords:"No matching records found"},oSearch:h.extend({},
n.models.oSearch),sAjaxDataProp:"data",sAjaxSource:null,sDom:"lfrtip",searchDelay:null,sPaginationType:"simple_numbers",sScrollX:"",sScrollXInner:"",sScrollY:"",sServerMethod:"GET",renderer:null,rowId:"DT_RowId"};Z(n.defaults);n.defaults.column={aDataSort:null,iDataSort:-1,asSorting:["asc","desc"],bSearchable:!0,bSortable:!0,bVisible:!0,fnCreatedCell:null,mData:null,mRender:null,sCellType:"td",sClass:"",sContentPadding:"",sDefaultContent:null,sName:"",sSortDataType:"std",sTitle:null,sType:null,sWidth:null};
Z(n.defaults.column);n.models.oSettings={oFeatures:{bAutoWidth:null,bDeferRender:null,bFilter:null,bInfo:null,bLengthChange:null,bPaginate:null,bProcessing:null,bServerSide:null,bSort:null,bSortMulti:null,bSortClasses:null,bStateSave:null},oScroll:{bCollapse:null,iBarWidth:0,sX:null,sXInner:null,sY:null},oLanguage:{fnInfoCallback:null},oBrowser:{bScrollOversize:!1,bScrollbarLeft:!1,bBounding:!1,barWidth:0},ajax:null,aanFeatures:[],aoData:[],aiDisplay:[],aiDisplayMaster:[],aIds:{},aoColumns:[],aoHeader:[],
aoFooter:[],oAnteriorSearch:{},aoPreSearchCols:[],aaSorting:null,aaSortingFixed:[],asStripeClasses:null,asDestroyStripes:[],sDestroyWidth:0,aoRowCallback:[],aoHeaderCallback:[],aoFooterCallback:[],aoDrawCallback:[],aoRowCreatedCallback:[],aoPreDrawCallback:[],aoInitComplete:[],aoStateSaveParams:[],aoStateLoadParams:[],aoStateLoaded:[],sTableId:"",nTable:null,nTHead:null,nTFoot:null,nTBody:null,nTableWrapper:null,bDeferLoading:!1,bInitialised:!1,aoOpenRows:[],sDom:null,searchDelay:null,sPaginationType:"two_button",
iStateDuration:0,aoStateSave:[],aoStateLoad:[],oSavedState:null,oLoadedState:null,sAjaxSource:null,sAjaxDataProp:null,bAjaxDataGet:!0,jqXHR:null,json:k,oAjaxData:k,fnServerData:null,aoServerParams:[],sServerMethod:null,fnFormatNumber:null,aLengthMenu:null,iDraw:0,bDrawing:!1,iDrawError:-1,_iDisplayLength:10,_iDisplayStart:0,_iRecordsTotal:0,_iRecordsDisplay:0,oClasses:{},bFiltered:!1,bSorted:!1,bSortCellsTop:null,oInit:null,aoDestroyCallback:[],fnRecordsTotal:function(){return"ssp"==y(this)?1*this._iRecordsTotal:
this.aiDisplayMaster.length},fnRecordsDisplay:function(){return"ssp"==y(this)?1*this._iRecordsDisplay:this.aiDisplay.length},fnDisplayEnd:function(){var a=this._iDisplayLength,b=this._iDisplayStart,c=b+a,d=this.aiDisplay.length,e=this.oFeatures,f=e.bPaginate;return e.bServerSide?!1===f||-1===a?b+d:Math.min(b+a,this._iRecordsDisplay):!f||c>d||-1===a?d:c},oInstance:null,sInstance:null,iTabIndex:0,nScrollHead:null,nScrollFoot:null,aLastSort:[],oPlugins:{},rowIdFn:null,rowId:null};n.ext=x={buttons:{},
classes:{},builder:"-source-",errMode:"alert",feature:[],search:[],selector:{cell:[],column:[],row:[]},internal:{},legacy:{ajax:null},pager:{},renderer:{pageButton:{},header:{}},order:{},type:{detect:[],search:{},order:{}},_unique:0,fnVersionCheck:n.fnVersionCheck,iApiIndex:0,oJUIClasses:{},sVersion:n.version};h.extend(x,{afnFiltering:x.search,aTypes:x.type.detect,ofnSearch:x.type.search,oSort:x.type.order,afnSortData:x.order,aoFeatures:x.feature,oApi:x.internal,oStdClasses:x.classes,oPagination:x.pager});
h.extend(n.ext.classes,{sTable:"dataTable",sNoFooter:"no-footer",sPageButton:"paginate_button",sPageButtonActive:"current",sPageButtonDisabled:"disabled",sStripeOdd:"odd",sStripeEven:"even",sRowEmpty:"dataTables_empty",sWrapper:"dataTables_wrapper",sFilter:"dataTables_filter",sInfo:"dataTables_info",sPaging:"dataTables_paginate paging_",sLength:"dataTables_length",sProcessing:"dataTables_processing",sSortAsc:"sorting_asc",sSortDesc:"sorting_desc",sSortable:"sorting",sSortableAsc:"sorting_asc_disabled",
sSortableDesc:"sorting_desc_disabled",sSortableNone:"sorting_disabled",sSortColumn:"sorting_",sFilterInput:"",sLengthSelect:"",sScrollWrapper:"dataTables_scroll",sScrollHead:"dataTables_scrollHead",sScrollHeadInner:"dataTables_scrollHeadInner",sScrollBody:"dataTables_scrollBody",sScrollFoot:"dataTables_scrollFoot",sScrollFootInner:"dataTables_scrollFootInner",sHeaderTH:"",sFooterTH:"",sSortJUIAsc:"",sSortJUIDesc:"",sSortJUI:"",sSortJUIAscAllowed:"",sSortJUIDescAllowed:"",sSortJUIWrapper:"",sSortIcon:"",
sJUIHeader:"",sJUIFooter:""});var Lb=n.ext.pager;h.extend(Lb,{simple:function(){return["Anterior","next"]},full:function(){return["first","Anterior","next","last"]},numbers:function(a,b){return[ia(a,b)]},simple_numbers:function(a,b){return["Anterior",ia(a,b),"next"]},full_numbers:function(a,b){return["first","Anterior",ia(a,b),"next","last"]},first_last_numbers:function(a,b){return["first",ia(a,b),"last"]},_numbers:ia,numbers_length:7});h.extend(!0,n.ext.renderer,{pageButton:{_:function(a,b,c,d,e,
f){var g=a.oClasses,j=a.oLanguage.oPaginate,i=a.oLanguage.oAria.paginate||{},m,l,n=0,o=function(b,d){var k,s,u,r,v=function(b){Ta(a,b.data.action,true)};k=0;for(s=d.length;k<s;k++){r=d[k];if(h.isArray(r)){u=h("<"+(r.DT_el||"div")+"/>").appendTo(b);o(u,r)}else{m=null;l="";switch(r){case "ellipsis":b.append('<span class="ellipsis">&#x2026;</span>');break;case "first":m=j.sFirst;l=r+(e>0?"":" "+g.sPageButtonDisabled);break;case "Anterior":m=j.sAnterior;l=r+(e>0?"":" "+g.sPageButtonDisabled);break;case "next":m=
j.sNext;l=r+(e<f-1?"":" "+g.sPageButtonDisabled);break;case "last":m=j.sLast;l=r+(e<f-1?"":" "+g.sPageButtonDisabled);break;default:m=r+1;l=e===r?g.sPageButtonActive:""}if(m!==null){u=h("<a>",{"class":g.sPageButton+" "+l,"aria-controls":a.sTableId,"aria-label":i[r],"data-dt-idx":n,tabindex:a.iTabIndex,id:c===0&&typeof r==="string"?a.sTableId+"_"+r:null}).html(m).appendTo(b);Wa(u,{action:r},v);n++}}}},s;try{s=h(b).find(H.activeElement).data("dt-idx")}catch(u){}o(h(b).empty(),d);s!==k&&h(b).find("[data-dt-idx="+
s+"]").focus()}}});h.extend(n.ext.type.detect,[function(a,b){var c=b.oLanguage.sDecimal;return $a(a,c)?"num"+c:null},function(a){if(a&&!(a instanceof Date)&&!Zb.test(a))return null;var b=Date.parse(a);return null!==b&&!isNaN(b)||M(a)?"date":null},function(a,b){var c=b.oLanguage.sDecimal;return $a(a,c,!0)?"num-fmt"+c:null},function(a,b){var c=b.oLanguage.sDecimal;return Qb(a,c)?"html-num"+c:null},function(a,b){var c=b.oLanguage.sDecimal;return Qb(a,c,!0)?"html-num-fmt"+c:null},function(a){return M(a)||
"string"===typeof a&&-1!==a.indexOf("<")?"html":null}]);h.extend(n.ext.type.search,{html:function(a){return M(a)?a:"string"===typeof a?a.replace(Nb," ").replace(Aa,""):""},string:function(a){return M(a)?a:"string"===typeof a?a.replace(Nb," "):a}});var za=function(a,b,c,d){if(0!==a&&(!a||"-"===a))return-Infinity;b&&(a=Pb(a,b));a.replace&&(c&&(a=a.replace(c,"")),d&&(a=a.replace(d,"")));return 1*a};h.extend(x.type.order,{"date-pre":function(a){a=Date.parse(a);return isNaN(a)?-Infinity:a},"html-pre":function(a){return M(a)?
"":a.replace?a.replace(/<.*?>/g,"").toLowerCase():a+""},"string-pre":function(a){return M(a)?"":"string"===typeof a?a.toLowerCase():!a.toString?"":a.toString()},"string-asc":function(a,b){return a<b?-1:a>b?1:0},"string-desc":function(a,b){return a<b?1:a>b?-1:0}});Da("");h.extend(!0,n.ext.renderer,{header:{_:function(a,b,c,d){h(a.nTable).on("order.dt.DT",function(e,f,g,h){if(a===f){e=c.idx;b.removeClass(c.sSortingClass+" "+d.sSortAsc+" "+d.sSortDesc).addClass(h[e]=="asc"?d.sSortAsc:h[e]=="desc"?d.sSortDesc:
c.sSortingClass)}})},jqueryui:function(a,b,c,d){h("<div/>").addClass(d.sSortJUIWrapper).append(b.contents()).append(h("<span/>").addClass(d.sSortIcon+" "+c.sSortingClassJUI)).appendTo(b);h(a.nTable).on("order.dt.DT",function(e,f,g,h){if(a===f){e=c.idx;b.removeClass(d.sSortAsc+" "+d.sSortDesc).addClass(h[e]=="asc"?d.sSortAsc:h[e]=="desc"?d.sSortDesc:c.sSortingClass);b.find("span."+d.sSortIcon).removeClass(d.sSortJUIAsc+" "+d.sSortJUIDesc+" "+d.sSortJUI+" "+d.sSortJUIAscAllowed+" "+d.sSortJUIDescAllowed).addClass(h[e]==
"asc"?d.sSortJUIAsc:h[e]=="desc"?d.sSortJUIDesc:c.sSortingClassJUI)}})}}});var eb=function(a){return"string"===typeof a?a.replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/"/g,"&quot;"):a};n.render={number:function(a,b,c,d,e){return{display:function(f){if("number"!==typeof f&&"string"!==typeof f)return f;var g=0>f?"-":"",h=parseFloat(f);if(isNaN(h))return eb(f);h=h.toFixed(c);f=Math.abs(h);h=parseInt(f,10);f=c?b+(f-h).toFixed(c).substring(2):"";return g+(d||"")+h.toString().replace(/\B(?=(\d{3})+(?!\d))/g,
a)+f+(e||"")}}},text:function(){return{display:eb,filter:eb}}};h.extend(n.ext.internal,{_fnExternApiFunc:Mb,_fnBuildAjax:sa,_fnAjaxUpdate:mb,_fnAjaxParameters:vb,_fnAjaxUpdateDraw:wb,_fnAjaxDataSrc:ta,_fnAddColumn:Ea,_fnColumnOptions:ka,_fnAdjustColumnSizing:$,_fnVisibleToColumnIndex:aa,_fnColumnIndexToVisible:ba,_fnVisbleColumns:V,_fnGetColumns:ma,_fnColumnTypes:Ga,_fnApplyColumnDefs:jb,_fnHungarianMap:Z,_fnCamelToHungarian:J,_fnLanguageCompat:Ca,_fnBrowserDetect:hb,_fnAddData:O,_fnAddTr:na,_fnNodeToDataIndex:function(a,
b){return b._DT_RowIndex!==k?b._DT_RowIndex:null},_fnNodeToColumnIndex:function(a,b,c){return h.inArray(c,a.aoData[b].anCells)},_fnGetCellData:B,_fnSetCellData:kb,_fnSplitObjNotation:Ja,_fnGetObjectDataFn:S,_fnSetObjectDataFn:N,_fnGetDataMaster:Ka,_fnClearTable:oa,_fnDeleteIndex:pa,_fnInvalidate:da,_fnGetRowElements:Ia,_fnCreateTr:Ha,_fnBuildHead:lb,_fnDrawHead:fa,_fnDraw:P,_fnReDraw:T,_fnAddOptionsHtml:ob,_fnDetectHeader:ea,_fnGetUniqueThs:ra,_fnFeatureHtmlFilter:qb,_fnFilterComplete:ga,_fnFilterCustom:zb,
_fnFilterColumn:yb,_fnFilter:xb,_fnFilterCreateSearch:Pa,_fnEscapeRegex:Qa,_fnFilterData:Ab,_fnFeatureHtmlInfo:tb,_fnUpdateInfo:Db,_fnInfoMacros:Eb,_fnInitialise:ha,_fnInitComplete:ua,_fnLengthChange:Ra,_fnFeatureHtmlLength:pb,_fnFeatureHtmlPaginate:ub,_fnPageChange:Ta,_fnFeatureHtmlProcessing:rb,_fnProcessingDisplay:C,_fnFeatureHtmlTable:sb,_fnScrollDraw:la,_fnApplyToChildren:I,_fnCalculateColumnWidths:Fa,_fnThrottle:Oa,_fnConvertToWidth:Fb,_fnGetWidestNode:Gb,_fnGetMaxLenString:Hb,_fnStringToCss:v,
_fnSortFlatten:X,_fnSort:nb,_fnSortAria:Jb,_fnSortListener:Va,_fnSortAttachListener:Ma,_fnSortingClasses:wa,_fnSortData:Ib,_fnSaveState:xa,_fnLoadState:Kb,_fnSettingsFromNode:ya,_fnLog:K,_fnMap:F,_fnBindAction:Wa,_fnCallbackReg:z,_fnCallbackFire:r,_fnLengthOverflow:Sa,_fnRenderer:Na,_fnDataSource:y,_fnRowAttributes:La,_fnExtend:Xa,_fnCalculateEnd:function(){}});h.fn.dataTable=n;n.$=h;h.fn.dataTableSettings=n.settings;h.fn.dataTableExt=n.ext;h.fn.DataTable=function(a){return h(this).dataTable(a).api()};
h.each(n,function(a,b){h.fn.DataTable[a]=b});return h.fn.dataTable});
/*!
 DataTables Bootstrap 4 integration
 ©2011-2017 SpryMedia Ltd - datatables.net/license
*/
(function(b){"function"===typeof define&&define.amd?define(["jquery","datatables.net"],function(a){return b(a,window,document)}):"object"===typeof exports?module.exports=function(a,d){a||(a=window);if(!d||!d.fn.dataTable)d=require("datatables.net")(a,d).$;return b(d,a,a.document)}:b(jQuery,window,document)})(function(b,a,d,m){var f=b.fn.dataTable;b.extend(!0,f.defaults,{dom:"<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>><'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
renderer:"bootstrap"});b.extend(f.ext.classes,{sWrapper:"dataTables_wrapper dt-bootstrap4",sFilterInput:"form-control form-control-sm",sLengthSelect:"custom-select custom-select-sm form-control form-control-sm",sProcessing:"dataTables_processing card",sPageButton:"paginate_button page-item"});f.ext.renderer.pageButton.bootstrap=function(a,h,r,s,j,n){var o=new f.Api(a),t=a.oClasses,k=a.oLanguage.oPaginate,u=a.oLanguage.oAria.paginate||{},e,g,p=0,q=function(d,f){var l,h,i,c,m=function(a){a.preventDefault();
!b(a.currentTarget).hasClass("disabled")&&o.page()!=a.data.action&&o.page(a.data.action).draw("page")};l=0;for(h=f.length;l<h;l++)if(c=f[l],b.isArray(c))q(d,c);else{g=e="";switch(c){case "ellipsis":e="&#x2026;";g="disabled";break;case "first":e=k.sFirst;g=c+(0<j?"":" disabled");break;case "Anterior":e=k.sAnterior;g=c+(0<j?"":" disabled");break;case "next":e=k.sNext;g=c+(j<n-1?"":" disabled");break;case "last":e=k.sLast;g=c+(j<n-1?"":" disabled");break;default:e=c+1,g=j===c?"active":""}e&&(i=b("<li>",
{"class":t.sPageButton+" "+g,id:0===r&&"string"===typeof c?a.sTableId+"_"+c:null}).append(b("<a>",{href:"#","aria-controls":a.sTableId,"aria-label":u[c],"data-dt-idx":p,tabindex:a.iTabIndex,"class":"page-link"}).html(e)).appendTo(d),a.oApi._fnBindAction(i,{action:c},m),p++)}},i;try{i=b(h).find(d.activeElement).data("dt-idx")}catch(v){}q(b(h).empty().html('<ul class="pagination"/>').children("ul"),s);i!==m&&b(h).find("[data-dt-idx="+i+"]").focus()};return f});

</script>
</html>
<style type="text/css">
  .text-gray-800 {
    color: #302a2d!important;
}
</style>