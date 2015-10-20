<?php 
      include_once('../conexion.php');
      $busqueda = $_POST['busqueda'];

      $link=mysqli_connect("localhost","root","","projecte");
      
    $result = $link->query('SELECT `cuadrante_id`,`latitud`,`longitud`,`descripcion`,`no_trabajadores` FROM `cuadrante` WHERE cuadrante_id LIKE "%' .$busqueda. '%" OR latitud LIKE "%' .$busqueda. '%" OR longitud LIKE "%' .$busqueda. '%" OR descripcion LIKE "%' .$busqueda. '%" OR no_trabajadores LIKE "%' .$busqueda. '%";');

      if ($busqueda=="") {
            header("Location: llenar-cuadrante.php");
      }else{
            while ($row = $result->fetch_assoc()) {  
                echo"<tr>";
                echo"   <td>".$row['cuadrante_id']."</td>"; //cuadrante_id
                echo"   <td>".$row['latitud']."</td>"; //latitud
                echo"   <td>".$row['longitud']."</td>"; //longitud
                echo"   <td>".$row['descripcion']."</td>"; //descripcion
                echo"   <td>".$row['no_trabajadores']."</td>"; //no_trabajadores
                echo"<td ><a class='dato_drone' data-listadoOK='".$ide=$row['cuadrante_id']."'  data-toggle='modal' href='tabla-drones.php#contenedor' style='cursor:pointer;'>Editar</a> <a class='dato_elim' data-listadoE='".$idEliminar=$row['cuadrante_id']."' style='cursor:pointer;'>Eliminar</a></td>";
                echo"                            </tr>   ";
            }            
      }

?>

