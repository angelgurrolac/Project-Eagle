<?php
    session_start(); 
    sleep(1);
    require_once '../conexion.php'; 
    
    $ide="";
    $result = $link->query('SELECT `id_dron`,`fecha`,`Modelo`,`tipo_id`,`cuadrante_id`,`tiempo_vuelo`,`distancia_recorrida`,`nivel_bateria` FROM `reporte_dron` WHERE estado= 1;');

    while ($row = $result->fetch_assoc()) {
        if ($_SESSION["tipo_usuario"]==1) {
            echo"<tr>";
            echo"   <td style = 'display:none;'>".$row['id_dron']."</td>";
            echo"   <td>".$row['fecha']."</td>"; //fecha
            echo"   <td>".$row['Modelo']."</td>"; //Modelo
            echo"   <td>".$row['cuadrante_id']."</td>"; //cuadrante_id
            echo"   <td>".$row['tiempo_vuelo']."</td>"; //tiempo_vuelo
            echo"   <td>".$row['distancia_recorrida']."</td>"; //distancia_recorrida
            echo"   <td>".$row['nivel_bateria']."</td>"; //nivel_bateria
            echo"   <td>";
            echo"       <a class='ver_reported icon fa-folder-open' data-listadoVer='".$ide=$row['id_dron']."'  data-toggle='modal' href='tabla-reporte-drones.php#contenedor' style='cursor:pointer;'></a>";
            echo"       <a class='dato_reported icon fa-edit' data-listadoOK='".$ide=$row['id_dron']."'  data-toggle='modal' href='tabla-reporte-drones.php#contenedor' style='cursor:pointer;'></a>";
            echo"       <a class='rep_elim icon fa-remove' data-listadoE='".$idEliminar=$row['id_dron']."' style='cursor:pointer;'></a>";
            echo"    </td>";
            echo"</tr>";  
        } else if ($_SESSION["tipo_usuario"]==2) {
            echo"<tr>";
            echo"   <td style = 'display:none;'>".$row['id_dron']."</td>";
            echo"   <td>".$row['fecha']."</td>"; //fecha
            echo"   <td>".$row['Modelo']."</td>"; //Modelo
            echo"   <td>".$row['cuadrante_id']."</td>"; //cuadrante_id
            echo"   <td>".$row['tiempo_vuelo']."</td>"; //tiempo_vuelo
            echo"   <td>".$row['distancia_recorrida']."</td>"; //distancia_recorrida
            echo"   <td>".$row['nivel_bateria']."</td>"; //nivel_bateria
            echo"   <td>";
            echo"       <a class='ver_reported icon fa-folder-open' data-listadoVer='".$ide=$row['id_dron']."'  data-toggle='modal' href='tabla-reporte-drones.php#contenedor' style='cursor:pointer;'></a>";
            echo"    </td>";
            echo"</tr>";
        } else if ($_SESSION["tipo_usuario"]==3) {
            echo"<tr>";
            echo"   <td style = 'display:none;'>".$row['id_dron']."</td>";
            echo"   <td>".$row['fecha']."</td>"; //fecha
            echo"   <td>".$row['Modelo']."</td>"; //Modelo
            echo"   <td>".$row['cuadrante_id']."</td>"; //cuadrante_id
            echo"   <td>".$row['tiempo_vuelo']."</td>"; //tiempo_vuelo
            echo"   <td>".$row['distancia_recorrida']."</td>"; //distancia_recorrida
            echo"   <td>".$row['nivel_bateria']."</td>"; //nivel_bateria
            echo"   <td>";
            echo"       <a class='ver_reported icon fa-folder-open' data-listadoVer='".$ide=$row['id_dron']."'  data-toggle='modal' href='tabla-reporte-drones.php#contenedor' style='cursor:pointer;'></a>";
            echo"    </td>";
            echo"</tr>";
        }
    
    }

?>