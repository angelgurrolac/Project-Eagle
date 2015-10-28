<?php 
sleep(1);
// include_once('../conexion.php');
    $link=mysqli_connect("localhost","root","admin","projecte");
    
    $result = $link->query('SELECT `cuadrante_id` FROM `cuadrante` WHERE estado=1;');

    while ($row = $result->fetch_assoc()) {  
    echo"<option value='".$row['cuadrante_id']."'>".$row['cuadrante_id']."</option>
";
        }

?>