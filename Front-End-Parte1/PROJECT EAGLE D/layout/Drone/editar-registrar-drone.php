<?php 
	include_once('../conexion.php');
	$id_editar = $_POST['id_editar'];
	$modelo_editar = $_POST['modelo_editar'];
	$marca_editar = $_POST['marca_editar'];
	
	$sql= "UPDATE dron SET modelo = '$modelo_editar', marca='$marca_editar' WHERE id_dron =$id_editar;";
	$res = mysql_query($sql);

	if ( isset($res) )
		echo "Correcto";
	else
		echo "Incorrecto";	
?>

