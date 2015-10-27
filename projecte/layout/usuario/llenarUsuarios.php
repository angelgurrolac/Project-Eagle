<?php 
sleep(1);
// include_once('../conexion.php');
    $link=mysqli_connect("localhost","root","admin","projecte");
    
    $ide="";
    $result = $link->query('SELECT `id_user`, `nombre_user`,`nombre`,`ap_paterno`,`ap_materno` FROM `usuarios` WHERE estado = 1;');


    while ($row = $result->fetch_assoc()) {  
    echo"<tr>";
    echo"   <td style = 'display:none;'>".$row['id_user']."</td>";
    echo"   <td>".$row['nombre_user']."</td>"; //nombre_user
    echo"   <td>".$row['nombre']."</td>"; //nombre
    echo"   <td>".$row['ap_paterno']."</td>"; //ap_paterno
    echo"   <td>".$row['ap_materno']."</td>"; //ap_materno
    echo"<td >
        <a class='dato_usuario icon fa-edit' data-listadoOK='".$ide=$row['id_user']."'  data-toggle='modal' style='cursor:pointer;'></a>
        <a class='dato_elim icon fa-remove' data-listadoE='".$idEliminar=$row['id_user']."' style='cursor:pointer;'></a></td>";
    echo"                            </tr>   ";
        }

?>