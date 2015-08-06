
<?php 
	include_once('php/conexion.php');
	
	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];
	$tipo_usuario = $_POST['tipo_usuario'];


	

	$insert = ("INSERT INTO usuarios (usuario, contrasena, tipo_usuario) 
				VALUES ('$usuario', '$contrasena', '$tipo_usuario')");
       

$sql=mysql_query($insert);

if($sql)
{
	echo "Registro correcto";
}
else
{
	echo "error" ;
}


?>
