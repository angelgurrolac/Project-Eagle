<?php 
  session_start();
      $busqueda = $_POST['busqueda'];

      require_once('../conexion.php');
      
    $result = $link->query('SELECT `fecha`, `id_reporte`, `no_victimas`, `empresa` FROM reporte WHERE fecha LIKE "%' .$busqueda. '%"  AND estado=1 OR id_reporte LIKE "%' .$busqueda. '%"  AND estado=1 OR no_victimas LIKE "%' .$busqueda. '%"  AND estado=1 OR empresa LIKE "%' .$busqueda. '%"  AND estado=1');

      if ($busqueda=="") {
            header("Location: llenar-reporte.php");
      }else{
            while ($row = $result->fetch_assoc()) {  
              if ($_SESSION["tipo_usuario"]==1) {
            echo"<tr>";
            echo"   <td style = 'display:none;'>".$row['id_reporte']."</td>";
            echo"   <td>".$row['fecha']."</td>"; //fecha
            echo"   <td>".$row['id_reporte']."</td>"; //id reporte
            echo"   <td>".$row['no_victimas']."</td>"; //numero de victimas
            echo"   <td>".$row['empresa']."</td>"; //empresa
            echo"   <td>";
            echo"       <a class='ver_reporte icon fa-folder-open' data-listadoVer='".$ide=$row['id_reporte']."'  data-toggle='modal' class='icon fa-edit estilo-icono' data-target='#myModal-Edit' style='cursor:pointer;' href='tabla-reportes.php#contenedo-modiregistro'> </a>";
            echo"       <a class='dato_reporte icon fa-edit' data-listadoOK='".$ide=$row['id_reporte']."'  data-toggle='modal' class='icon fa-edit estilo-icono' data-target='#myModal-Edit' style='cursor:pointer;' href='tabla-reportes.php#contenedo-modiregistro'></a>";
            echo"       <a class='dato_elimR icon fa-remove estilo-icono' data-listadoE='".$idEliminar=$row['id_reporte']."'  data-target='#myModal-Delete' style='cursor:pointer;'></a>";
            echo"   </td>";
            echo"</tr>   ";
        }else if ($_SESSION["tipo_usuario"]==2) {
            echo"<tr>";
            echo"   <td style = 'display:none;'>".$row['id_reporte']."</td>";
            echo"   <td>".$row['fecha']."</td>"; //fecha
            echo"   <td>".$row['id_reporte']."</td>"; //id reporte
            echo"   <td>".$row['no_victimas']."</td>"; //numero de victimas
            echo"   <td>".$row['empresa']."</td>"; //empresa
            echo"   <td>";
            echo"       <a class='ver_reporte icon fa-folder-open' data-listadoVer='".$ide=$row['id_reporte']."'  data-toggle='modal' class='icon fa-edit estilo-icono' data-target='#myModal-Edit' style='cursor:pointer;' href='tabla-reportes.php#contenedo-modiregistro'> </a>";
            echo"       <a class='dato_reporte icon fa-edit' data-listadoOK='".$ide=$row['id_reporte']."'  data-toggle='modal' class='icon fa-edit estilo-icono' data-target='#myModal-Edit' style='cursor:pointer;' href='tabla-reportes.php#contenedo-modiregistro'></a>";
            echo"   </td>";
            echo"</tr>   ";
        }else if ($_SESSION["tipo_usuario"]==3) {
            echo"<tr>";
            echo"   <td style = 'display:none;'>".$row['id_reporte']."</td>";
            echo"   <td>".$row['fecha']."</td>"; //fecha
            echo"   <td>".$row['id_reporte']."</td>"; //id reporte
            echo"   <td>".$row['no_victimas']."</td>"; //numero de victimas
            echo"   <td>".$row['empresa']."</td>"; //empresa
            echo"   <td>";
            echo"       <a class='ver_reporte icon fa-folder-open' data-listadoVer='".$ide=$row['id_reporte']."'  data-toggle='modal' class='icon fa-edit estilo-icono' data-target='#myModal-Edit' style='cursor:pointer;' href='tabla-reportes.php#contenedo-modiregistro'> </a>";
            echo"   </td>";
            echo"</tr>   ";
        }
            }            
      }

?>

