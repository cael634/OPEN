      <div class="p  <div class="page-header__title">
                        <h1 style="font-size: 24px;margin-bottom: 18px;color: black"><i class="fas fa-cog"></i> Configuración:</h1>
                    </div>
                </div>
            </div>
  <style type="text/css">
      .card-header:first-child {
    border-radius: calc(.35rem - 1px) calc(.35rem - 1px) 0 0;
    background: white;
    color: black;
}
.card-table thead th {
    border-bottom: 2px solid #f0f0f0;
    text-transform: uppercase;
    color: black;
    font-size: 13px;
    font-weight: 500;
    padding: 10px 12px;
}
  </style>


    <?php




if(isset($enviar)){
  
  $id_vendedor = clear($_SESSION['id_vendedor']);
    $select6= clear($select6);
    $select7= clear($select7);

  
    $mysqli->query("INSERT INTO cobertura (id_vendedor,departamento,municipio) VALUES ('$id_vendedor','$select6','$select7')");

    
    redir("?p=coberturainf");
}



if(isset($enviar1)){
    $id= clear($id);
    redir("user.php?id=$id");
}

if(isset($eliminar)){

  
  $mysqli->query("DELETE FROM cobertura WHERE id = '$eliminar'");
  redir("lugar.php?id=$id");
}



?>
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-3 d-flex">
                            <div class="account-nav flex-grow-1">
                                <h4 class="account-nav__title">Navegación</h4>
                                <ul>
                                   <li class="account-nav__item  account-nav__item--active ">
                                        <a href="?p=configsinf" >Información basica</a>
                                    </li>
                                    
                                    <li class="account-nav__item  account-nav__item--active ">
                                        <a  style="color: #3d464d !important; font-weight: 500 !important;">Cobertura (unico punto)</a>
                                    </li>
                                    <li class="account-nav__item ">
                                        <a>Datos de sesión</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Agregar cobertura<br></h5>
                                    En que municios operas.<br><br>
                                    <div class="form-row">
                                     <div class="form-group col-md-6">

                                         <form method="post" action="">

                                                <label for="checkout-country">Departamento</label>
                                              
                                                 <select  name="select6" id="select6" class="form-control form-control-select2">
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
                                            
                                             <div class="form-group col-md-6">
                                                <label for="checkout-country">Municipio</label>
                                           
                                                 <select name="select7" id="select7" class="form-control form-control-select2">
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
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <button  name="enviar" name="enviar"  type="submit" class="btn btn-primary" style="border-color: #292c31;
    background: #292c31;">Añadir municipio</button>
                                            </div>
                                            </div>
                                </div>
                            </form>
                                <div class="card-divider"></div>
                                <div class="card-table">
                                    <div class="table-responsive-sm">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Departamento</th>
                                                    <th>Municipio</th>
                                                    <th>Accion</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody style="color: #36373a;
    font-size: 15px;">
                                                <?php
  
$id_vendedor = clear($_SESSION['id_vendedor']);
$q = $mysqli->query("SELECT * FROM cobertura WHERE  id_vendedor = '$id_vendedor' ");
while ($rp = mysqli_fetch_array($q)){

      $qe = $mysqli->query("SELECT * FROM departamentos WHERE id_departamento ='".$rp['departamento']."' ");
      $re = mysqli_fetch_array($qe);
      $qm = $mysqli->query("SELECT * FROM municipios WHERE id_municipio = '".$rp['municipio']."'");
      $rm = mysqli_fetch_array($qm);
      ?>
                                                <tr>
                                                    <td><?=$re['departamento']?></td>
                                                    <td><?=$rm['municipio']?></td>
                                                    <td> <a style="color:#08f"href="lugar.php?&id=<?=$id?>&eliminar=<?=$rp['id']?>" >x</a></td>
                                                </tr>
                                                 <?php
        }
    ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-footer">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style type="text/css">
    .page-header__title h1 {
    margin-bottom: 18px;
    color: black;
    font-size: 24px;
}
.flex-grow-1 {
    flex-grow: 1!important;
    background: white;
    color: black;
}
.card-body {
    flex: 1 1 auto;
    padding: 1.25rem;
    color: black;
}
.card-header h1, .card-header h2, .card-header h3, .card-header h4, .card-header h5, .card-header h6, .card-footer h1, .card-footer h2, .card-footer h3, .card-footer h4, .card-footer h5, .card-footer h6 {
    margin-bottom: 0;
    color: black;
}
select.form-control, select.form-control:valid, select.form-control.is-valid, select.form-control:invalid, select.form-control.is-invalid {
    background-image: url(data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 5 10'%3E%3Cpath fill='%234d4d4d' d='M4.503,4 L0.497,4 C0.094,4 -0.142,3.492 0.089,3.122 L2.095,0.233 C2.293,-0.084 2.712,-0.084 2.911,0.233 L4.911,3.122 C5.142,3.492 4.906,4 4.503,4 ZM0.497,6 L4.503,6 C4.906,6 5.142,6.504 4.911,6.871 L2.905,9.737 C2.707,10.052 2.288,10.052 2.089,9.737 L0.089,6.871 C-0.142,6.504 0.094,6 0.497,6 Z'/%3E%3C/svg%3E%0A);
    background-repeat: repeat-x;
    background-size: 987px 12px;
    background-position-x: 1px;
    background-position-y: 12px;
    /* margin: 0px; */
}
.form-control + .select2-container .select2-selection--single {
    border-radius: 2px;
    border-width: 1px;
    border-style: solid;
    background-clip: border-box;
    background-position-x: 492px;
    background-position-y: 10px;
    background-image: url(data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 5 10'%3E%3Cpath fill='%234d4d4d' d='M4.503,4 L0.497,4 C0.094,4 -0.142,3.492 0.089,3.122 L2.095,0.233 C2.293,-0.084 2.712,-0.084 2.911,0.233 L4.911,3.122 C5.142,3.492 4.906,4 4.503,4 ZM0.497,6 L4.503,6 C4.906,6 5.142,6.504 4.911,6.871 L2.905,9.737 C2.707,10.052 2.288,10.052 2.089,9.737 L0.089,6.871 C-0.142,6.504 0.094,6 0.497,6 Z'/%3E%3C/svg%3E%0A);
    background-repeat: no-repeat;
    background-size: 5px 10px;
    -webkit-transition: border-color .15s ease-in-out, background .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out, background .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out, background .15s ease-in-out, box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out, background .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
}
</style>
            <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/photoswipe/photoswipe.min.js"></script>
    <script src="vendor/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="vendor/select2/js/select2.min.js"></script>
    <script src="js/number.js"></script>
    <script src="js/main.js"></script>
    <script src="js/header.js"></script>
    <script src="vendor/svg4everybody/svg4everybody.min.js"></script>
    <script>
        svg4everybody();
    </script>