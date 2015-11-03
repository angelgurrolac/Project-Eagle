<?php 	
	$latitudc = $_POST['latitudc'];
	$longitudc = $_POST['longitudc'];
	$ntrabajadoresc = $_POST['ntrabajadoresc'];
	$descripcionc = $_POST['descripcionc'];
	$link=mysqli_connect("localhost","root","admin","projecte");

	mysqli_query($link,"INSERT INTO cuadrante (latitud, longitud, no_trabajadores, descripcion,estado)
  				VALUES ('$latitudc', '$longitudc', '$ntrabajadoresc','$descripcionc',1)");

	header("Location: datos-cuadrante.php");
?>