<?php 
	include_once('conexion.php');
	
	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];
	$tipo_usuario = $_POST['tipo_usuario'];


	

	mysql_query("INSERT INTO usuarios (usuario, contrasena, tipo_usuario) 
				VALUES ('$usuario', '$contrasena', '$tipo_usuario')");

	header("Location: ../index3.php");
?>