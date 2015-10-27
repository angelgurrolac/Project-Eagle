<?php 
sleep(1);
// include_once('../conexion.php');
    $link=mysqli_connect("localhost","root","admin","projecte");
    
    $ide="";
    $result = $link->query('SELECT `fecha`, `id_reporte`, `no_victimas`, `empresa` FROM reporte WHERE estado = 1');

    while ($row = $result->fetch_assoc()) {  
        echo"<tr>";
        echo"   <td style = 'display:none;'>".$row['id_reporte']."</td>";
        echo"   <td>".$row['fecha']."</td>"; //fecha
        echo"   <td>".$row['id_reporte']."</td>"; //id reporte
        echo"   <td>".$row['no_victimas']."</td>"; //numero de victimas
        echo"   <td>".$row['empresa']."</td>"; //empresa
        echo"   <td>";
        echo"       <a class='ver_reporte' data-listadoVer='".$ide=$row['id_reporte']."'  data-toggle='modal' class='icon fa-edit estilo-icono' data-target='#myModal-Edit' style='cursor:pointer;' href='tabla-reportes.php#contenedo-modiregistro'>Ver </a>";
        echo"       <a class='dato_reporte' data-listadoOK='".$ide=$row['id_reporte']."'  data-toggle='modal' class='icon fa-edit estilo-icono' data-target='#myModal-Edit' style='cursor:pointer;' href='tabla-reportes.php#contenedo-modiregistro'>Editar </a>";
        echo"       <a class='dato_elimR icon fa-remove estilo-icono' data-listadoE='".$idEliminar=$row['id_reporte']."'  data-target='#myModal-Delete' style='cursor:pointer;'>Eliminar</a>";
        echo"   </td>";
        echo"</tr>   ";
    }

?>