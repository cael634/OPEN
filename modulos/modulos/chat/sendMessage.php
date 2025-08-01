<?php

include "config.php";

if($_POST)
{
	$name=$_SESSION['name'];
    $msg=$_POST['msg'];
    
	$sql="INSERT INTO `chat`(`name`, `message`,`chat`) VALUES ('".$_SESSION['id_cliente']."', '".$msg."',1)";

	$query = mysqli_query($conn,$sql);
	if($query)
	{
		redir("?p=chatpage#abajo&contador=1");
	}
	else
	{
		echo "Algo salió mal";
	}
	
	}
?>