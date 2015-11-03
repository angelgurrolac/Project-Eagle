<?php 
	// include_once('../conexion.php');
	$id_editCua = $_POST['id_editCua'];
	$latitudcE = $_POST['latitudcE'];
	$longitudcE = $_POST['longitudcE'];
	$ntrabajadorescE = $_POST['ntrabajadorescE'];
	$descripcioncE = $_POST['descripcioncE'];

	require_once '../conexion.php'; 
	
	$sql= mysqli_query($link,"UPDATE cuadrante SET `latitud`='$latitudcE', `longitud`='$longitudcE', `descripcion`='$descripcioncE', `no_trabajadores`='$ntrabajadorescE' WHERE `cuadrante_id`=$id_editCua;");

	
	// $res = mysqli_query($sql);

	if ( isset($sql) ){
		echo "Correcto";
		header("Location: tabla-cuadrantes.php");
	} else{
		echo "Incorrecto";	
	}
		
	

?>

