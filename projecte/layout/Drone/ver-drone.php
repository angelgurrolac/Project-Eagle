<?php 
$link=mysqli_connect("localhost","root","admin","projecte");
$id = $_POST['idVer'];

$sql_edit= mysqli_query($link, "SELECT `id_dron`,`fecha_instalacion`,`modelo`,`estatus`,`calibracion`,`observaciones` FROM `dron` where id_dron=$id;");

$edit_drone = mysqli_fetch_array($sql_edit);
echo "
        <div id='main'>
            <section id='contact' class='three'>
                <div class='container'>
                    <header>
                        <h4>DRONE</h4>
                    </header>
                    <form method='post' action='editar-registrar-drone.php'>
                        <div class='row'>
                            <div class='3u 12u$(mobile)'> <label>Fecha de instalación ".$edit_drone['fecha_instalacion']."</label></div>
                            <div class='3u 12u$(mobile)'> <label>Modelo ".$edit_drone['modelo']."</label></div>
                            <div class='3u 12u$(mobile)'> <label>Estatus ".$edit_drone['estatus']."</label></div>
                            <div class='3u 12u$(mobile)'> <label>Calibración ".$edit_drone['calibracion']."</label></div>
                            <div class='3u 12u$(mobile)'> <label>Observaciones ".$edit_drone['observaciones']."</label></div>
                        </div>
                    </form>   
                </div>
            </section>
        </div>
    ";

?>
