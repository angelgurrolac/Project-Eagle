<!--Estos son los iconos de ver, editar y eliminar en el cuerpo de la tabla y no en el encabezado-->
<td >
    <a class='ver_diagnostico icon fa-folder-open' data-listadoVer='".$ide=$row['id_diagnostico']."'  data-toggle='modal' href='tabla-drones.php#contenedorVDrone' style='cursor:pointer;'></a> 
    <a class='dato_diagnostico icon fa-edit' data-listadoOK='".$ide=$row['id_diagnostico']."'  data-toggle='modal' href='tabla-drones.php#contenedor' style='cursor:pointer;'></a> 
    <a class='dato_elim icon fa-remove' data-listadoE='".$idEliminar=$row['id_diagnostico']."' style='cursor:pointer;'></a></td>
</td> 