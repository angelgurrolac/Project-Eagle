<?php 
	include_once('../conexion.php');
	$id_editar = $_POST['id_editar'];
	$modelo_editar = $_POST['modelo_editar'];
	// $marca_editar = $_POST['marca_editar'];

	$link=mysqli_connect("localhost","root","","projecte");
	
	$sql= mysqli_query($link,"UPDATE dron SET `modelo`='$modelo_editar' WHERE `id_dron`=$id_editar;");

	
	// $res = mysqli_query($sql);

	if ( isset($sql) ){
		echo "Correcto";
		header("Location: tabla-drones.php");
	} else{
		echo "Incorrecto";	
	}
		
	

?>

