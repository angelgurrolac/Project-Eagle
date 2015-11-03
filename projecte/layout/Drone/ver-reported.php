<?php 
require_once '../conexion.php'; 
$id = $_POST['idVer'];

$sql_edit= mysqli_query($link, "SELECT `id_dron`,`fecha`,`Modelo`,`cuadrante_id`,`tiempo_vuelo`,`distancia_recorrida`,`nivel_bateria` FROM `reporte_dron`;");

$ver_reported = mysqli_fetch_array($sql_edit);
echo "
         <div id='main'>
            <section id='contact' class='three'>
                <div class='container'>
                    <header>
                        <h4>REPORTE DE DRONE</h4>
                    </header>
                    <form method='post'>
                        <div class='row'>
                        <div class='3u 12u$(mobile)'> <label>Fecha ".$ver_reported['fecha']."</label></div>
                        <div class='3u 12u$(mobile)'> <label>Modelo ".$ver_reported['Modelo']."</label></div>
                        <div class='3u 12u$(mobile)'> <label>Cuadrante ".$ver_reported['cuadrante_id']."</label></div>
                        <div class='3u 12u$(mobile)'> <label>Tiempo de vuelo ".$ver_reported['tiempo_vuelo']."</label></div>
                            <div class='3u 12u$(mobile)'> <label>Nivel de batería ".$ver_reported['distancia_recorrida']."</label></div>
                            <div class='3u 12u$(mobile)'> <label>Distancia recorrida ".$ver_reported['nivel_bateria']."</label></div>
                    </div>
                    </form>   
                </div>
            </section>
        </div>
    ";

?>
