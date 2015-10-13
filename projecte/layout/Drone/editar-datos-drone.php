<?php 
$link=mysqli_connect("localhost","root","","projecte");
$id = $_POST['ide'];

$sql_edit= mysqli_query($link, "SELECT `id_dron`,`modelo` FROM `dron`  where id_dron=$id;");

$edit_drone = mysqli_fetch_array($sql_edit);
echo "
        <div id='main'>
            <section id='contact' class='two'>
                <div class='container'>
                    <header>
                        <h4>MODIFICAR DRONES</h4>
                    </header>
                    <form method='post' action='editar-registrar-drone.php'>
                        <div class='row'>
                        <div class='2u 12u$(mobile)'><input type='hidden' name='id_editar' id='id_editar' value=".$edit_drone['id_dron']."></div>
                        <div class='2u 12u$(mobile)'> <label for='modelo_editar'>Modelo</label></div>
                        <div class='10u$ 12u$(mobile)'><input type='text' name='modelo_editar' id='modelo_editar' value=".$edit_drone['modelo']."></div>
                        <div class='2u 12u$(mobile)'> <label for='marca_editar'>Marca</label></div>
                        <div class='10u$ 12u$(mobile)'><input type='text' name='marca_editar' id='marca_editar'></div>
                        <div class='12u$ action'><input type='submit' value='Modificar'/></div>
                    </div>
                    </form>   
                </div>
            </section>
        </div>
    ";
?>
