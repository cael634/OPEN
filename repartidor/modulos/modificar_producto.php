<?php
$servername = "localhost";
$user_mysql = "u114005028_open";
$username = "u114005028_open";
$password = "632003a632003a";
$mysqli = mysqli_connect('localhost','u114005028_open','>c55CDcl','u114005028_open');
$connection = mysqli_connect('localhost','u114005028_open','>c55CDcl','u114005028_open');
function clear($var){
    htmlspecialchars($var);
    return $var;
}
function check_admin(){
    if(!isset($_SESSION['id_vendedor'])){
        redir("?p=admin&return=$url");
    }else{
    }}

function check_repartidor(){
    if(!isset($_SESSION['id_repartidor'])){
        redir("?p=admin&return=$url");
    }else{
    }}

function redir($var){
    ?>
    <script>
        window.location="<?=$var?>";
    </script>
    <?php
    die();
}
function alert($txt,$type,$url){
    //"error", "success" and "info".
    if($type==0){
        $t = "error";
    }elseif($type==1){
        $t = "success";
    }elseif($type==2){
        $t = "info";
    }else{
        $t = "info";
    }
    echo '<script>swal({ title: "Alerta", text: "'.$txt.'", icon: "'.$t.'"});';
    echo '$(".swal-button").click(function(){ window.location="?p='.$url.'"; });';
    echo '</script>';
}
function check_user($url){
    if(!isset($_SESSION['id_cliente'])){
        redir("?p=registro&return=$url");
    }else{
    }
}

function nombre_cliente($id_cliente){
    $mysqli = connect();
    $q = $mysqli->query("SELECT * FROM clientes WHERE id = '$id_cliente'");
    $r = mysqli_fetch_array($q);
    return $r['name'];
}


function connect(){
    $host_mysql = "localhost";
    $user_mysql = "root";
    $pass_mysql = "";
    $db_mysql = "open";
    $mysqli = mysqli_connect('localhost','u114005028_open','>c55CDcl','u114005028_open');
    return $mysqli;

}
function fecha($fecha){
    $e = explode("-",$fecha);
    $year = $e[0];
    $month = $e[1];
    $e2 = explode(" ",$e[2]);
    $day = $e2[0];
    $time = $e2[1];
    $e3 = explode(":",$time);
    $hour = $e3[0];
    $mins = $e3[1];
    return $year."/".$month."/".$day." ".$hour.":".$mins;
}

function estado($id_estado){
            if($id_estado == 0){

        
        ?><span class="badge badge-success">Iniciando</span>
        <?php

    }elseif($id_estado==1){
        
        ?><span class="badge badge-info">Revisado</span>
        <?php
    }elseif($id_estado == 2){
        ?><span class="badge badge-warning">Procesando el pedido</span>
        <?php
    }elseif($id_estado == 3){
        ?><span class="badge badge-danger">Terminado</span>
        <?php
    }else{
        
        ?><span class="badge badge-warning">Error</span>
    <?php
}

        
        
}

function admin_name_connected($id_vendedor){
    $mysqli = connect();
    $q = $mysqli->query("SELECT * FROM admins WHERE id = '$id_vendedor'");
    $r = mysqli_fetch_array($q);
    return $r['name'];
}





function estado_pago($estado){
    if($estado==0){
        $estado = "Sin Verificar";
    }elseif($estado==1){
        $estado = "Verificado y Aprobado";
    }elseif($estado==2){
        $estado = "Rembolsado";
    }else{
        $estado = "Sin Verificar";
    }
    return $estado;
}
?>