<?php 

include_once('../conexion.php');
$ide = $_POST['ide'];
$sql_edit= "SELECT `id_dron`,`modelo`,`marca` FROM `dron`  where id_dron=$ide;";

$res_edit = mysql_query($sql_edit);

$edit_hoteles = mysql_fetch_array($res_edit);
echo "

 
        <div id="main">
            <section id="contact" class="two">
                <div class="container">
                    <header>
                        <h4>MODIFICAR DRONES</h4>
                    </header>
                    <form method="post">
                        <div class="row">
                        <div class="2u 12u$(mobile)"><input type="hidden" name="id_editar" id='id_editar' value='$edit_dron[0]'></div>
                        <div class="2u 12u$(mobile)"> <label for='modelo_editar'>Modelo</label></div>
                        <div class="10u$ 12u$(mobile)"><input type="text" name="modelo_editar" id='modelo_editar' value='$edit_dron[1]'></div>
                        <div class="2u 12u$(mobile)"> <label for='marca_editar'>Marca</label></div>
                        <div class="10u$ 12u$(mobile)"><input type="text" name="marca_editar" id='marca_editar' value='$edit_dron[2]'></div>
                        <div class="12u$ action"><input type="submit" value="Modificar" /></div>
                    </div>
                    </form>   
                </div>
            </section>
        </div>
    ";
?>
