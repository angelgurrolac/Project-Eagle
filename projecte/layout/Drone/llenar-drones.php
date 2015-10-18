<?php 
sleep(1);
// include_once('../conexion.php');
    $link=mysqli_connect("localhost","root","","projecte");
    
    $ide="";
    $result = $link->query('SELECT `id_dron`,`fecha_instalacion`,`modelo`,`estatus`,`calibracion`,`observaciones` FROM `dron` WHERE estatus = 1;');





    while ($row = $result->fetch_assoc()) {  
    echo"<tr>";
    echo"   <td style = 'display:none;'>".$row['id_dron']."</td>";
    echo"   <td>".$row['fecha_instalacion']."</td>"; //fecha_instalacion
    echo"   <td>".$row['modelo']."</td>"; //modelo
    echo"   <td>".$row['estatus']."</td>"; //estatus
    echo"   <td>".$row['calibracion']."</td>"; //calibracion
    echo"   <td>".$row['observaciones']."</td>"; //observaciones
    echo"<td ><a class='dato_drone' data-listadoOK='".$ide=$row['id_dron']."'  data-toggle='modal' href='tabla-drones.php#contenedor' style='cursor:pointer;'>Editar</a> <a class='dato_elim' data-listadoE='".$idEliminar=$row['id_dron']."' style='cursor:pointer;'>Eliminar</a></td>";
    echo"                            </tr>   ";
        }

?>