<?php 
      session_start();
      $busqueda = $_POST['busqueda'];

      $link=mysqli_connect("localhost","root","admin","projecte");
      
    $result = $link->query('SELECT * FROM `dron` WHERE modelo LIKE "%' .$busqueda. '%" AND estatus=1 OR calibracion LIKE "%' .$busqueda. '%" AND estatus=1 OR observaciones LIKE "%' .$busqueda. '%" AND estatus=1;');

      if ($busqueda=="") {
            header("Location: llenar-drones.php");
      }else{
            while ($row = $result->fetch_assoc()) {  
              if ($_SESSION["tipo_usuario"]==1) {
                  echo"<tr>";
                  echo"   <td style = 'display:none;'>".$row['id_dron']."</td>";
                  echo"   <td>".$row['fecha_instalacion']."</td>"; //fecha_instalacion
                  echo"   <td>".$row['modelo']."</td>"; //modelo
                  echo"   <td>".$row['estatus']."</td>"; //estatus
                  echo"   <td>".$row['calibracion']."</td>"; //calibracion
                  echo"   <td>".$row['observaciones']."</td>"; //observaciones
                  echo"   <td>";
                  echo"       <a class='ver_drone icon fa-folder-open' data-listadoVer='".$ide=$row['id_dron']."'  data-toggle='modal' href='tabla-drones.php#contenedor' style='cursor:pointer;'></a>";
                  echo"       <a class='dato_drone icon fa-edit' data-listadoOK='".$ide=$row['id_dron']."'  data-toggle='modal' href='tabla-drones.php#contenedor' style='cursor:pointer;'></a>";
                  echo"       <a class='dato_elim icon fa-remove' data-listadoE='".$idEliminar=$row['id_dron']."' style='cursor:pointer;'></a>";
                  echo"   </td>";
                  echo"</tr>";
              } else if ($_SESSION["tipo_usuario"]==2) {
                  echo"<tr>";
                  echo"   <td style = 'display:none;'>".$row['id_dron']."</td>";
                  echo"   <td>".$row['fecha_instalacion']."</td>"; //fecha_instalacion
                  echo"   <td>".$row['modelo']."</td>"; //modelo
                  echo"   <td>".$row['estatus']."</td>"; //estatus
                  echo"   <td>".$row['calibracion']."</td>"; //calibracion
                  echo"   <td>".$row['observaciones']."</td>"; //observaciones
                  echo"   <td>";
                  echo"       <a class='ver_drone icon fa-folder-open' data-listadoVer='".$ide=$row['id_dron']."'  data-toggle='modal' href='tabla-drones.php#contenedor' style='cursor:pointer;'></a>";
                  echo"   </td>";
                  echo"</tr>";
              } else if ($_SESSION["tipo_usuario"]==3) {
                  echo"<tr>";
                  echo"   <td style = 'display:none;'>".$row['id_dron']."</td>";
                  echo"   <td>".$row['fecha_instalacion']."</td>"; //fecha_instalacion
                  echo"   <td>".$row['modelo']."</td>"; //modelo
                  echo"   <td>".$row['estatus']."</td>"; //estatus
                  echo"   <td>".$row['calibracion']."</td>"; //calibracion
                  echo"   <td>".$row['observaciones']."</td>"; //observaciones
                  echo"   <td>";
                  echo"       <a class='ver_drone icon fa-folder-open' data-listadoVer='".$ide=$row['id_dron']."'  data-toggle='modal' href='tabla-drones.php#contenedor' style='cursor:pointer;'></a>";
                  echo"   </td>";
                  echo"</tr>";
              }
            }            
      }

?>

