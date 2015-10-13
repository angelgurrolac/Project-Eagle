<?php 
	// include_once('../conexion.php');
	
	$modelo = $_POST['modelo'];
	$marca = $_POST['marca'];
	$link=mysqli_connect("localhost","root","","projecte");

	mysqli_query($link,"INSERT INTO dron (modelo, estatus)
  				VALUES ('$modelo', 1)");

	header("Location: datos-drone.php");
?>