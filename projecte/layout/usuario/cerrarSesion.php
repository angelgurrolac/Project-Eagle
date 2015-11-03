<?php 
  session_start();
  unset($_SESSION['idUsuario']);
  unset($_SESSION['nombre']); 
  unset($_SESSION['apellido']);
  unset($_SESSION['nombre_user']);
  session_destroy();
  header("Location: ../index.php");
  exit;

?>