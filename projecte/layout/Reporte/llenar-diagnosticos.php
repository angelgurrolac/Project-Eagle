<?php 
sleep(1);
// include_once('../conexion.php');
    $link=mysqli_connect("localhost","root","","projecte");
    
    $ide="";
    $result = $link->query('SELECT `id_diagnostico`, `nombre_victima`, `ap_paterno_victima`, `ap_materno_victima` FROM diagnosticos');

    while ($row = $result->fetch_assoc()) {  
    echo"<tr>";
    echo"   <td style = 'display:none;'>".$row['id_diagnostico']."</td>";
    echo"   <td>".$row['nombre_victima']."</td>"; //nombre
    echo"   <td>".$row['ap_paterno_victima']."</td>"; //ap
    echo"   <td>".$row['ap_materno_victima']."</td>"; //am
    echo"                            </tr>   ";
        }

?>