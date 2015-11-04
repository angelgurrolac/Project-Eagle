<?php 
	// include_once('../conexion.php');
	
	$fecha = $_POST['fecha'];
	$modelod = $_POST['modelod'];
	$cuadrante = $_POST['cuadrante'];
	$tiempov = $_POST['tiempov'];
	$nivelb = $_POST['nivelb'];
	$distanciar = $_POST['distanciar'];
	require_once '../conexion.php';

	mysqli_query($link,"INSERT INTO reporte_dron (fecha, Modelo, estado, cuadrante_id, tiempo_vuelo, distancia_recorrida, nivel_bateria)
  				VALUES ('$fecha', '$modelod', 1,'$cuadrante','$tiempov','$nivelb','$distanciar')");

	header("Location: reporte-datos-drone.php");
?>