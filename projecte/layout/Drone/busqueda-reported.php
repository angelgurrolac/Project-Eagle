<?php 
    session_start();
      $busqueda = $_POST['busqueda'];

      $link=mysqli_connect("localhost","root","admin","projecte");
      
    $result = $link->query('SELECT * FROM `reporte_dron` WHERE Modelo LIKE "%' .$busqueda. '%" AND estado=1 OR fecha LIKE "%' .$busqueda. '%" AND estado=1 OR cuadrante_id LIKE "%' .$busqueda. '%" AND estado=1  OR tiempo_vuelo LIKE "%' .$busqueda. '%" AND estado=1  OR distancia_recorrida LIKE "%' .$busqueda. '%" AND estado=1  OR nivel_bateria LIKE "%' .$busqueda. '%" AND estado=1; ');

      if ($busqueda=="") {
            header("Location: llenar-reporte-d.php");
      }else{
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
      }

?>

