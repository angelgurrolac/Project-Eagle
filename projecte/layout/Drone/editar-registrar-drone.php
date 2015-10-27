<?php 
	include_once('../conexion.php');
	$id_editar = $_POST['id_editar'];
	$fecha_editar = $_POST['fecha_editar'];
	$modelo_editar = $_POST['modelo_editar'];
	$estatus_editar = $_POST['estatus_editar'];
	$calibracion_editar = $_POST['calibracion_editar'];
	$observaciones_editar = $_POST['observaciones_editar'];
	// $marca_editar = $_POST['marca_editar'];

	$link=mysqli_connect("localhost","root","admin","projecte");
	
	$sql= mysqli_query($link,"UPDATE dron SET `fecha_instalacion`='$fecha_editar', `modelo`='$modelo_editar', `estatus`='$estatus_editar', `calibracion`='$calibracion_editar', `observaciones`='$observaciones_editar' WHERE `id_dron`=$id_editar;");

	
	// $res = mysqli_query($sql);

	if ( isset($sql) ){
		echo "Correcto";
		header("Location: tabla-drones.php");
	} else{
		echo "Incorrecto";	
	}
		
	

?>

