<?php 
	require_once '../conexion.php'; 
	$id_editar = $_POST['id_editar'];
	$nombre = $_POST['nombre_user'];
	$ap_paterno = $_POST['ap_paterno'];
	$ap_materno = $_POST['ap_materno'];
	$contranueva = $_POST['nueva-contra'];
	$vcontranueva = $_POST['vnueva-contra'];

	if ($contranueva=="" || $vcontranueva=="") {
		$sql= mysqli_query($link,"UPDATE usuarios SET `nombre`='$nombre', 
			`ap_paterno`='$ap_paterno', `ap_materno`='$ap_materno' 
			WHERE `id_user`=$id_editar;");

	}else{
		$sql= mysqli_query($link,"UPDATE usuarios SET `nombre`='$nombre', 
			`ap_paterno`='$ap_paterno', `ap_materno`='$ap_materno', 
			`password_encriptado`=sha1('$contranueva')
			WHERE `id_user`=$id_editar;");
	}

	
	

	
	// $res = mysqli_query($sql);

	if ( isset($sql) ){
		echo "Correcto";
		header("Location: configuracion-admin.php");
	} else{
		echo "Incorrecto";	
	}
		
	

?>

