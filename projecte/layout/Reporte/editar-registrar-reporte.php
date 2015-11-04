<?php 
	include_once('../conexion.php');
	$id_editar = $_POST['id_editar'];
	$numvictimas = $_POST['numvictimas'];
	$numdecesos = $_POST['numdecesos'];
	$empresa = $_POST['empresa'];
	$tipoempresa = $_POST['tipoempresa'];
	$titularminero = $_POST['titularminero'];
	$concesion = $_POST['concesion'];
	$observaciones = $_POST['observaciones'];

	
	$sql= mysqli_query($link,"UPDATE reporte SET `no_victimas`='$numvictimas', 
		`no_decesos`='$numdecesos', `empresa`='$empresa', `tipo_empresa`='$tipoempresa', 
		`titular_minero`='$titularminero', 
		`concesion`='$concesion', 
		`obervaciones`='$observaciones' WHERE `id_reporte`=$id_editar;");

	
	// $res = mysqli_query($sql);

	if ( isset($sql) ){
		echo "Correcto";
		header("Location: tabla-reportes.php");
	} else{
		echo "Incorrecto";	
	}
		
	

?>

