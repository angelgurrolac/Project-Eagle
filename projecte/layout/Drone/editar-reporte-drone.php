<?php 
require_once '../conexion.php'; 
$id = $_POST['ide'];

$sql_edit= mysqli_query($link, "SELECT `id_dron`,`fecha`,`Modelo`,`cuadrante_id`,`tiempo_vuelo`,`distancia_recorrida`,`nivel_bateria` FROM `reporte_dron` where id_dron=$id;");

$edit_reported = mysqli_fetch_array($sql_edit);
echo "
        <div id='main'>
            <section id='contact' class='three'>
                <div class='container'>
                    <header>
                        <h4>MODIFICAR REPORTE DE DRONE</h4>
                    </header>
                    <form method='post' action='editar-registrar-reported.php'>
                        <div class='row'>
                        <div class='9u$ 12u$(mobile)'><input type='text' name='id_editar' value='".$edit_reported['id_dron']."' style = 'display:none;'  /></div>
                        <div class='3u 12u$(mobile)'> <label>Fecha</label></div>
                        <div class='9u$ 12u$(mobile)'><input type='date' name='fecha_editar' value='".$edit_reported['fecha']."'/></div>
                        <div class='3u 12u$(mobile)'> <label>Modelo</label></div>
                        <div class='9u$ 12u$(mobile)'><input type='text' name='modelod_editar' value='".$edit_reported['Modelo']."'/></div>
                        <div class='3u 12u$(mobile)'> <label>Cuadrante</label></div>
                        <div class='9u$ 12u$(mobile)'>
                        <select id='cuadrante_editar' name='cuadrante_editar'>
                            <option value='".$edit_reported['cuadrante_id']."' selected>".$edit_reported['cuadrante_id']."</option>
                            <script type='text/javascript'>llenarCuadrantes();</script>
                            
                        </select></div>
                        <div class='3u 12u$(mobile)'> <label>Tiempo de vuelo</label></div>
                        <div class='9u$ 12u$(mobile)'><input onkeypress='return alpha(event,numeros+signos)' type='text' name='tiempov_editar' value='".$edit_reported['tiempo_vuelo']."'/></div>
                            <div class='3u 12u$(mobile)'> <label>Nivel de batería</label></div>
                        <div class='9u$ 12u$(mobile)'><input onkeypress='return alpha(event,numeros+signos)' type='number' name='nivelb_editar' value='".$edit_reported['distancia_recorrida']."'/></div>
                            <div class='3u 12u$(mobile)'> <label>Distancia recorrida</label></div>
                        <div class='9u$ 12u$(mobile)'><input onkeypress='return alpha(event,numeros+signos)' type='text' name='distanciar_editar' value='".$edit_reported['nivel_bateria']."'/></div>
                        <div class='12u$'><input type='submit' value='Guardar' /></div>
                    </div>
                    </form>   
                </div>
            </section>
        </div>
    ";

?>
