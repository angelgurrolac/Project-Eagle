<?php 
include_once('../conexion.php');
$id = $_POST['ide'];

$sql_edit= mysqli_query($link, "SELECT `id_dron`,`fecha_instalacion`,`modelo`,`estatus`,`calibracion`,`observaciones` FROM `dron` where id_dron=$id;");

$edit_drone = mysqli_fetch_array($sql_edit);
echo "
        <div id='main'>
            <section id='contact' class='three'>
                <div class='container'>
                    <header>
                        <h4>MODIFICAR DRONE</h4>
                    </header>
                    <form method='post' action='editar-registrar-drone.php'>
                        <div class='row'>
                            <div class='9u$ 12u$(mobile)'><input type='text' name='id_editar' value='".$edit_drone['id_dron']."' style = 'display:none;'/></div>
                            <div class='3u 12u$(mobile)'> <label>Fecha de instalación</label></div>
                            <div class='9u$ 12u$(mobile)'><input type='text' name='fecha_editar' value='".$edit_drone['fecha_instalacion']."'/></div>
                            <div class='3u 12u$(mobile)'> <label>Modelo</label></div>
                            <div class='9u$ 12u$(mobile)'><input type='text' name='modelo_editar' value='".$edit_drone['modelo']."'/></div>
                            <div class='3u 12u$(mobile)'> <label>Calibración</label></div>
                            <div class='9u$ 12u$(mobile)'><input type='text' name='calibracion_editar' value='".$edit_drone['calibracion']."'/></div>
                            <div class='3u 12u$(mobile)'> <label>Observaciones</label></div>
                            <div class='9u$ 12u$(mobile)'><input type='text' name='observaciones_editar' value='".$edit_drone['observaciones']."'/></div>
                            <div class='12u$'><input type='submit' value='Modificar' /></div>
                        </div>
                    </form>   
                </div>
            </section>
        </div>
    ";

?>
