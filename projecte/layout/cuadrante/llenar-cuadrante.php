<?php 
sleep(1);
// include_once('../conexion.php');
    $link=mysqli_connect("localhost","root","admin","projecte");
    
    $ide="";
    $result = $link->query('SELECT `cuadrante_id`,`latitud`,`longitud`,`descripcion`,`no_trabajadores` FROM `cuadrante` WHERE estado = 1');

    while ($row = $result->fetch_assoc()) {  
    echo"<tr>";
    echo"   <td>".$row['cuadrante_id']."</td>"; //id_cuadrante
    echo"   <td>".$row['latitud']."</td>"; //latitud
    echo"   <td>".$row['longitud']."</td>"; //longitud
    echo"   <td>".$row['descripcion']."</td>"; //descripcion
    echo"   <td>".$row['no_trabajadores']."</td>"; //no_trabajadores
    echo"<td ><a class='ver_cuadrante' data-listadoVer='".$ide=$row['cuadrante_id']."'  data-toggle='modal' href='tabla-cuadrantes.php#contenedo-modicuadrante' style='cursor:pointer;'>Ver </a><a class='dato_cuadrante' data-listadoOK='".$ide=$row['cuadrante_id']."'  data-toggle='modal' href='tabla-cuadrantes.php#contenedo-modicuadrante' style='cursor:pointer;'>Editar</a> <a class='dato_elimC' data-listadoE='".$idEliminar=$row['cuadrante_id']."' style='cursor:pointer;'>Eliminar</a></td>";
    echo"                            </tr>   ";
        }

?>