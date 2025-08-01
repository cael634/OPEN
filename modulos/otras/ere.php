<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Highcharts Example</title>

        <style type="text/css">

        </style>
    </head>
    <body>
<script src="../../code/highcharts.js"></script>
<script src="../../code/modules/exporting.js"></script>
<script src="../../code/modules/export-data.js"></script>
<?php
$host_mysql = "localhost";
$user_mysql = "root";
$pass_mysql = "";
$db_mysql = "open";
$mysqli = mysqli_connect($host_mysql,$user_mysql,$pass_mysql,$db_mysql);
$connection = mysqli_connect($host_mysql,$user_mysql,$pass_mysql,$db_mysql);
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
function conectarse(){
    $link = mysqli_connect("localhost","root","");
    if(!$link)
        exit();
    $bd = "open";
    $con=mysqli_select_db("transportev",$link);
    if(!$con)
        exit();
    return $link;
}

function connect(){
    $host_mysql = "localhost";
    $user_mysql = "root";
    $pass_mysql = "";
    $db_mysql = "open";
    $mysqli = mysqli_connect($host_mysql,$user_mysql,$pass_mysql,$db_mysql);
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
    return $day."/".$month."/".$year." ".$hour.":".$mins;
}

function estado($id_estado){
            if($id_estado == 0){

        
        ?><span class="badge badge-success">Iniciando</span>
        <?php

    }elseif($id_estado==1){
        
        ?><span class="badge badge-info">Preparando</span>
        <?php
    }elseif($id_estado == 2){
        ?><span class="badge badge-warning">Despachando</span>
        <?php
    }elseif($id_estado == 3){
        ?><span class="badge badge-danger">Finalizado</span>
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
<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>



        <script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Monthly Average Temperature'
    },
    subtitle: {
        text: 'Source: WorldClimate.com'
    },
    xAxis: {
        categories: [
        <?php
        
$sql = "SELECT * FROM productos_compra";
$result = mysqli_query($connection,$sql);
while($registros = mysqli_fetch_array($result))
{
    ?>
    '<?php echo $registros["id_producto"] ?>',
    <?php
}
?>
]
    },
    yAxis: {
        title: {
            text: 'Temperature (°C)'
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

        name: 'Cantidad',
        data: [
        <?php
       $sql = "SELECT * FROM productos_compra";
       $result = mysqli_query($connection,$sql);
       while($registros = mysqli_fetch_array($result))
       {
       ?>
      <?php echo $registros["monto"] ?>,
       <?php
       }
       ?>]
    },]
});
        </script>
    </body>
</html>
