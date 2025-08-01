<?php

$conexion = mysqli_connect("localhost","root","","ideas_web");

$query = $conexion->query("SELECT * FROM departamentos");

echo '<option value="0">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['id']. '">' . $row['nombre'] . '</option>' . "\n";
}
