<?php
	session_start();
	$idUser= $_SESSION['idUsuario'];
	$nombrefoto=$_FILES['foto']['name'];
	$ruta=$_FILES['foto']['tmp_name'];
	$destino =  "foto-perfil/".$idUser.$nombrefoto;
	copy($ruta,$destino);

	$link=mysqli_connect("localhost","root","admin","projecte");
	

	$sql=mysqli_query($link,"UPDATE usuarios SET `imagen`= '$destino' WHERE id_user=$idUser");

	if ($sql) {
  		header("Location: configuracion-admin.php");
	}else{
		echo "Error";
	}
?>
