<?php 
    $fecha = $_POST['fecha'];

    $link=mysqli_connect("localhost","root","admin","projecte");
      
    $result = $link->query('SELECT count(*) from diagnosticos WHERE fecha="'.$fecha.'";');

    while ($row = $result->fetch_assoc()) { 
      echo $row['count(*)'];
    }
?>

