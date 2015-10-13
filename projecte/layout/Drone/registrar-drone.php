<?php 
	include_once('../conexion.php');
	
	$modelo = $_POST['modelo'];
	$marca = $_POST['marca'];
	

	mysql_query("INSERT INTO dron (modelo, marca, estatus) 
				VALUES ('$modelo', '$marca', 1)");

	header("Location: /datos-drone.php");
?>