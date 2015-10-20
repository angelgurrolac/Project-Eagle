<?php 
$link=mysqli_connect("localhost","root","","projecte");
$id = $_POST['ide'];

$sql_edit= mysqli_query($link, "SELECT `cuadrante_id`,`latitud`,`longitud`,`descripcion`,`no_trabajadores` FROM `cuadrante` WHERE cuadrante_id=$id;");

$edit_cua = mysqli_fetch_array($sql_edit);
echo "
        <div id='main'>
            <section id='contact' class='two'>
                <div class='container'>
                    <header>
                        <h4>MODIFICAR CUADRANTES</h4>
                    </header>
                    <form method='POST' action='editar-registrar-cuadrante.php'>
                        <div class='row'>
                        <div class='9u$ 12u$(mobile)'><input type='text' name='id_editCua' value='".$edit_cua['cuadrante_id']."' style = 'display:none;'/></div>
                        <div class='4u 12u$(mobile)'> <label>Latitud</label></div>
                        <div class='8u$ 12u$(mobile)'><input type='text' name='latitudcE' value='".$edit_cua['latitud']."'/></div>
                        <div class='4u 12u$(mobile)'> <label>Longitud</label></div>
                        <div class='8u$ 12u$(mobile)'><input type='text' name='longitudcE' value='".$edit_cua['longitud']."'/></div>
                        
                        <div class='4u 12u$(mobile)'> <label>Número de trabajadores</label></div>
                        <div class='8u$ 12u$(mobile)'><input type='number' name='ntrabajadorescE' value='".$edit_cua['no_trabajadores']."'/></div>
                            <div class='4u 12u$(mobile)'> <label>Descripción</label></div>
                            <div class='8u$ 12u$(mobile)'><textarea rows='4' cols='4' name='descripcioncE'>".$edit_cua['descripcion']."</textarea></div>
                            <div class='12u$''><input type='submit' value='Modificar' /></div>
                    </div> 
                </div>
            </section>
        </div>
    ";
?>
