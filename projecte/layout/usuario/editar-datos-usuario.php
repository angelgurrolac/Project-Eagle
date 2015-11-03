<?php 
require_once '../conexion.php'; 
$id = $_POST['ide'];

$sql_edit= mysqli_query($link, "SELECT `id_user`,`nombre`,`ap_paterno`,`ap_materno` FROM `usuarios` where id_user=$id;");

$edit_user = mysqli_fetch_array($sql_edit);
echo "
        <div id='main'>
            <section id='contact' class='three'>
                <div class='container'>
                    <header>
                        <h4>MODIFICAR USUARIO</h4>
                    </header>
                    <form method='post' action='editar-registrar-usuario.php'>
                        <div class='row'>
                            <div class='9u$ 12u$(mobile)'><input type='text' name='id_editar' value='".$edit_user['id_user']."' style = 'display:none;'/></div>
                            <div class='3u 12u$(mobile)'> <label>Nombre</label></div>
                            <div class='9u$ 12u$(mobile)'><input type='text' name='nombre_user' value='".$edit_user['nombre']."'/></div>
                            <div class='3u 12u$(mobile)'> <label>Apellido Paterno</label></div>
                            <div class='9u$ 12u$(mobile)'><input type='text' name='ap_paterno' value='".$edit_user['ap_paterno']."'/></div>
                            <div class='3u 12u$(mobile)'> <label>Apellido Materno</label></div>
                            <div class='9u$ 12u$(mobile)'><input type='text' name='ap_materno' value='".$edit_user['ap_materno']."'/></div>
                            <div class='3u 12u$(mobile)'> <label>Nueva contraseña</label></div>
                            <div class='9u$ 12u$(mobile)'><input type='text' name='nueva-contra' value=''/></div>
                            <div class='3u 12u$(mobile)'> <label>Confirmar nueva contraseña</label></div>
                            <div class='9u$ 12u$(mobile)'><input type='text' name='vnueva-contra' value=''/></div>
                            <div class='12u$'><input type='submit' value='Modificar' /></div>
                        </div>
                    </form>   
                </div>
            </section>
        </div>
    ";

?>
