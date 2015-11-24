<?php 
	// include_once('../conexion.php');
	
	$fechaInstalacion = $_POST['fechaInstalacion'];
	$modelo = $_POST['modelo'];
	// $estatus = $_POST['estatus'];
	$calibracion = $_POST['calibracion'];
	$observaciones = $_POST['observaciones'];
	require_once '../conexion.php'; 

	mysqli_query($link,"INSERT INTO dron (fecha_instalacion, modelo, estatus, calibracion, observaciones)
  				VALUES ('$fechaInstalacion', '$modelo', 1,'$calibracion','$observaciones')");

	header("Location: tabla-drones.php");
?>