<?php
	session_start();
	$idUsuario = $_POST['correo-usuario'];
	$rol = $_POST['asigna-rol'];

	// echo $nombreUsuario;
	require_once '../conexion.php'; 
	


	$sql=mysqli_query($link,"UPDATE usuarios SET `id_tipo_user`= '$rol' WHERE id_user=$idUsuario");

	if ($sql) {
  		header("Location: configuracion-admin.php");
	}else{
		echo "Error";
	}
?>
