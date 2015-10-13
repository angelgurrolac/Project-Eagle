<?php 
sleep(1);
include_once('../conexion.php');

    $sql =  "SELECT `id_dron`, `modelo`,`marca` FROM `dron` WHERE estatus = 1;";
    $res = mysql_query($sql);
    $ide="";
    while ($listadoOK = mysql_fetch_array($res)) {  
    echo"                             <tr>";
    echo"                               <td style = 'display:none;'>$listadoOK[0]</td>"; //No
    echo"                               <td>".$listadoOK[1]."</td>"; //modelo
    echo"                               <td>".$listadoOK[2]."</td>"; //marca
 
 
   
    echo "<td ><a class='dato_drone' data-listadoOK='".$ide=$listadoOK[0]."'  data-toggle='modal' data-target='#myModal-Edit' style='cursor:pointer;'>Editar</a> <a class='dato_elim' data-listadoE='".$idEliminar=$listadoOK[0]."'  data-target='#myModal-Delete' style='cursor:pointer;'>Eliminar</a></td>";
    echo"                            </tr>   ";
        }

?>