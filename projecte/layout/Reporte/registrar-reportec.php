<?php 
	$fechaaccidente = $_POST['fechaaccidente'];
	$numvictimas = $_POST['numvictimas'];
	$numdecesos = $_POST['numdecesos'];
	//victimas
	$empresa = $_POST['empresa'];
	$tipoempresa = $_POST['tipoempresa'];
	$titularminero = $_POST['titularminero'];
	$concesion = $_POST['concesion'];
	$observaciones = $_POST['observaciones'];

	   require_once('../conexion.php');




	$sql = mysqli_query($link,"INSERT INTO reporte (fecha, no_victimas, no_decesos, empresa,tipo_empresa, titular_minero,
concesion, obervaciones, estado) VALUES ('$fechaaccidente', '$numvictimas', '$numdecesos','$empresa','$tipoempresa','$titularminero','$concesion','$observaciones',1)");

	
	if ($sql) {
		echo "bien";
		header("Location: tabla-reportes.php");
	}else{
		echo "mal";
	}
?>