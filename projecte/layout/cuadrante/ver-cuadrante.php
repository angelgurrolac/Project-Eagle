<?php 
require_once '../conexion.php'; 
$id = $_POST['idVer'];

$sql_edit= mysqli_query($link, "SELECT `cuadrante_id`,`latitud`,`longitud`,`descripcion`,`no_trabajadores` FROM `cuadrante` WHERE cuadrante_id=$id;");

$edit_cua = mysqli_fetch_array($sql_edit);
echo "
        <div id='main'>
            <section id='contact' class='two'>
                <div class='container'>
                    <header>
                        <h4>CUADRANTE</h4>
                    </header>
                    <form method='post' action='#'>
                        <div class='row'>
                        <div class='12u$ 12u$(mobile)'> <label>Latitud: ".$edit_cua['latitud']."</label></div>
                        <div class='12u$ 12u$(mobile)'> <label>Longitud: ".$edit_cua['longitud']."</label></div>            
                        <div class='12u$ 12u$(mobile)'> <label>Número de trabajadores: ".$edit_cua['no_trabajadores']."</label></div>
                            <div class='12u$ 12u$(mobile)'> <label>Descripción: ".$edit_cua['descripcion']."</label></div>
                    </div> 
                    </form>   
                </div>
            </section>
        </div>
    ";

?>
