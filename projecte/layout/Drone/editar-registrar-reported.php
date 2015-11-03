<?php 
	$id_editar = $_POST['id_editar'];
	$fecha_editar = $_POST['fecha_editar'];
	$modelod_editar = $_POST['modelod_editar'];
	$cuadrante_editar = $_POST['cuadrante_editar'];
	$tiempov_editar = $_POST['tiempov_editar'];
	$distanciar_editar = $_POST['distanciar_editar'];
	$nivelb_editar = $_POST['nivelb_editar'];

// echo $cuadrante_editar;
	require_once '../conexion.php'; 
	
	$sql= mysqli_query($link,"UPDATE reporte_dron SET `fecha`='$fecha_editar', `Modelo`='$modelod_editar', `cuadrante_id`='$cuadrante_editar', `tiempo_vuelo`='$tiempov_editar', `distancia_recorrida`='$distanciar_editar', `nivel_bateria`='$nivelb_editar' WHERE `id_dron`=$id_editar;");

	
	// $res = mysqli_query($sql);

	if ( isset($sql) ){
		echo "Correcto";
		header("Location: tabla-reporte-drones.php");
	} else{
		echo "Incorrecto";	
	}
		
	

?>

