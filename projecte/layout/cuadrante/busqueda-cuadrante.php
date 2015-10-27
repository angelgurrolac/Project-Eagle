<?php 
      include_once('../conexion.php');
      $busqueda = $_POST['busqueda'];

      $link=mysqli_connect("localhost","root","admin","projecte");
      
    $result = $link->query('SELECT `cuadrante_id`,`latitud`,`longitud`,`descripcion`,`no_trabajadores` FROM `cuadrante` WHERE cuadrante_id LIKE "%' .$busqueda. '%" AND estado=1 OR latitud LIKE "%' .$busqueda. '%" AND estado=1 OR longitud LIKE "%' .$busqueda. '%" AND estado=1 OR descripcion LIKE "%' .$busqueda. '%" AND estado=1 OR no_trabajadores LIKE "%' .$busqueda. '%" AND estado = 1;');

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
                echo"<td ><a class='ver_cuadrante' data-listadoVer='".$ide=$row['cuadrante_id']."'  data-toggle='modal' href='tabla-cuadrantes.php#contenedo-modicuadrante' style='cursor:pointer;'>Ver </a><a class='dato_cuadrante' data-listadoOK='".$ide=$row['cuadrante_id']."'  data-toggle='modal' href='tabla-cuadrantes.php#contenedo-modicuadrante' style='cursor:pointer;'>Editar</a> <a class='dato_elimC' data-listadoE='".$idEliminar=$row['cuadrante_id']."' style='cursor:pointer;'>Eliminar</a></td>";
                echo"                            </tr>   ";
            }            
      }

?>

