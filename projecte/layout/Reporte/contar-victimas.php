<?php 
    $fecha = $_POST['fecha'];

      require_once('../conexion.php');
      
    $result = $link->query('SELECT count(*) from diagnosticos WHERE fecha="'.$fecha.'";');

    while ($row = $result->fetch_assoc()) { 
      echo $row['count(*)'];
    }
?>

