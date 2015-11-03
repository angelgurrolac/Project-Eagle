<?php 
      $fecha = $_POST['fecha'];

      $link=mysqli_connect("localhost","root","admin","projecte");
      
      $result = $link->query('SELECT `id_diagnostico`,`nombre_victima`, `ap_paterno_victima`, `ap_materno_victima` FROM diagnosticos WHERE `fecha` = "'.$fecha.'";');

    while ($row = $result->fetch_assoc()) { 
      if ($row==false) {
        echo "Sin registros";
      }else{
        echo"<tr>";
        echo"   <td style = 'display:none;'>".$row['id_diagnostico']."</td>";
        echo"   <td>".$row['nombre_victima']."</td>"; //nombre_victima
        echo"   <td>".$row['ap_paterno_victima']."</td>"; //ap_paterno_victima
        echo"   <td>".$row['ap_materno_victima']."</td>"; //ap_materno_victima
        echo"   <td></td>"; 
        echo"                            </tr>   ";
      }

    // var_dump($resultF); 

        }
            
      

?>

