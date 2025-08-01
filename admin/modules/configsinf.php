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

<?php
$id_vendedor = clear($_SESSION['id_vendedor']);
    $qe = $mysqli->query("SELECT * FROM admins WHERE id ='$id_vendedor' ");
    $re=mysqli_fetch_array($qe);
if(isset($enviar)){
    $select4 = clear($select4);
    $select5 = clear($select5);
   
    $name= clear($name);
    $direccion= clear($direccion);
    $empresa= clear($empresa);
   

    
        $mysqli->query("INSERT INTO admins (departamento,municipio,direccion,name,empresa,tipo) VALUES ('$select4','$select5','$direccion','$name','$empresa','$tipo')");
       
       $mysqli->query("UPDATE admins SET departamento = '$select4',municipio = '$select5',direccion = '$direccion',name = '$name',empresa = '$empresa',tipo = '$tipo' WHERE id = '$id_vendedor' ");

        redir("index.php"); 
                # code...
            
            }
    ?>

                  <div class="page-header__title">
                        <h1><i class="fas fa-cog"></i> Configuración:</h1>
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
                                        <a >Informacion basica</a>
                                    </li>
                                    
                                    <li class="account-nav__item ">
                                        <a href="?p=coberturainf" style="color: black">Cobertura (unico punto)</a>
                                    </li>
                                    <li class="account-nav__item ">
                                        <a >Datos de sesión</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Informacion basica</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-body">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-lg-10 col-xl-8">
                                            <form method="post" action="">
                                           
                                                <div class="form-group">
                                                    <label for="checkout-first-name">Nombre de la empresa</label>
                                                    <input type="text" class="form-control" name="name" value="<?=$re['name']?>">
                                                </div>

                                                <div class="form-group">
                                                <label for="checkout-country">Tipo de empresa</label>
                                              
                                                 <select  name="empresa" id="select1" class="form-control form-control-select2">
                                                    
                                                    <?php
                                                    $qe = $mysqli->query("SELECT * FROM admins WHERE id ='$id_vendedor' ");
                                                    $re=mysqli_fetch_array($qe);
                                                    if($re['empresa']==1){
                                                        ?>
                                                    <option value="1">Distribuidor</option> 
                                                    <option value="2">Empresa</option>     
                                                    <option value="3">Mediana empresa</option>  
                                                    <option value="4">Pequeña empresa</option> 
                                                        <?php
                                                    }
                                                  
                                                    if($re['empresa']==2){
                                                        ?>

                                                    <option value="2">Empresa</option>
                                                    <option value="1">Distribuidor</option> 
                                                    <option value="3">Mediana empresa</option>  
                                                    <option value="4">Pequeña empresa</option>  
                                                        <?php
                                                    }
                                                    
                                                    if($re['empresa']==3){
                                                        ?>
                                                    <option value="3">Mediana empresa</option>
                                                    <option value="2">Empresa</option>
                                                    <option value="1">Distribuidor</option> 
                                                      
                                                    <option value="4">Pequeña empresa</option>  
                                                        <?php
                                                    }
                                                    
                                                    if($re['empresa']==4){
                                                        ?>
                                                    <option value="4">Pequeña empresa</option> 
                                                    <option value="3">Mediana empresa</option>
                                                    <option value="2">Empresa</option>
                                                    <option value="1">Distribuidor</option>  
                                                     
                                                        <?php
                                                    }if($re['empresa']==0){
                                                    ?>
                                                    <option value="1">Distribuidor</option> 
                                                    <option value="2">Empresa</option>     
                                                    <option value="3">Mediana empresa</option>  
                                                    <option value="4">Pequeña empresa</option> 
                                                    <?php
                                                }
                                                ?>
                                                </select>
                                            </div>

                                        
                                            <div class="form-group">
                                                <label for="checkout-country">Departamento</label>
                                              
                                                 <select  name="select4" id="select4" class="form-control form-control-select2">
                                                
                                                 <?php

                                                 $qn2 = $mysqli->query("SELECT * FROM departamentos WHERE id_departamento='".$re['departamento']."'  ");
                                                 $re2=mysqli_fetch_array($qn2);
                                                 ?>
                                                 <option value="<?=$re2['id_departamento']?>"><?=$re2['departamento']?></option>
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
                                           
                                                 <select name="select5" id="select5" class="form-control form-control-select2">
                                                <?php

                                                 $qn22 = $mysqli->query("SELECT * FROM municipios WHERE id_municipio='".$re['municipio']."'  ");
                                                 $re22=mysqli_fetch_array($qn22);

                                                 ?>
                                                  <option value="<?=$re22['departamento_id']?>" ><?=$re22['municipio']?></option>
                                           <?php
                                         $qn = $mysqli->query("SELECT * FROM municipios  ");
                                           while($rl=mysqli_fetch_array($qn)){
                                            ?>
                                           <option value="<?=$rl['departamento_id']?>" ><?=$rl['municipio']?></option>
                       
                                          <?php

                                                }

                                               ?>
                                             </select>
                                            </div>
                                            

                                            <div class="form-group">
                                                    <label for="checkout-first-name">Dirección</label>
                                                    <input type="text" class="form-control"name="direccion" value="<?=$re['direccion']?>">
                                                </div>


                                            
                                             <div class="form-group">
                                                <label for="checkout-country">Tipo de distribucion</label>
                                               <select name="tipo" class="form-control form-control-select2">
                                                <?php
                                                 if($re['tipo']==1){
                                                        ?>
                                                    <option value="1">Por rutas</option>   
                                                   <option value="2">Personalizado</option>  
                                                        <?php
                                                    }
                                                  
                                                    if($re['tipo']==2){
                                                        ?>
                                             
                                                     
                                                   <option value="2">Personalizado</option> 
                                                   <option value="1">Por rutas</option> 
                                                   <?php
                                                   }
                                                   ?> 
                                                  </select>
                                                  </div>

                                                  
                                            <div class="form-group mt-3 mb-0">
                                                <button  name="enviar" href="lugar.php" type="submit" class="btn btn-primary">Actualizar</button>
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
        <!-- site__body / end -->