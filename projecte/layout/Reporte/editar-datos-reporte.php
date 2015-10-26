<?php 
$link=mysqli_connect("localhost","root","admin","projecte");
$id = $_POST['ide'];

$sql_edit= mysqli_query($link, "SELECT id_reporte, fecha, no_victimas, no_decesos, empresa,tipo_empresa, titular_minero,
concesion, obervaciones, estado FROM `reporte` WHERE id_reporte=$id;");

$edit_reporte = mysqli_fetch_array($sql_edit);
echo "
<link rel='stylesheet' href='../../assets/css/estilo-datos.css' />
    <div id='main'>
        <section id='contact' class='two'>
            <div class='container'>
                <header>
                    <h4>MODIFICAR REPORTE</h4>
                </header>
                <form method='post' action='editar-registrar-reporte.php'>
                    <div class='row'>
                    <div class='9u$ 12u$(mobile)'><input type='text' name='id_editar' value='".$edit_reporte['id_reporte']."' style = 'display:none;'/></div>
                    <div class='4u$ 12u$(mobile)'> <label>Fecha ".$edit_reporte['fecha']."</label></div>
                    <div class='3u 12u$(mobile)'> <label>Número de víctimas</label></div>
                    <div class='4u$ 12u$(mobile)'><input type='number' name='numvictimas' value='".$edit_reporte['no_victimas']."'/></div>
          
                    <div class='3u 12u$(mobile)'> <label>Número  de decesos</label></div>
                    <div class='4u$ 12u$(mobile)'><input type='number' name='numdecesos' value='".$edit_reporte['no_decesos']."'/></div>
          
                    <div class='4u 12u$(mobile)'> <label>Nombre(s) de la(s) víctima(s) </label></div>
          
                    <div class='rwd'>
                    <table class='rwd_auto'>
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th></th>
                            </tr>
                        </thead>
                        <script type='text/javascript'>cambiarFecha('".$edit_reporte['fecha']."');</script>
                        <tbody id='miTablaVic'></tbody>
                    </table>
                    </div>
          
                    <div class='3u 12u$(mobile)'> <label>Empresa</label></div>
                    <div class='6u$ 12u$(mobile)'><input type='text' name='empresa' value='".$edit_reporte['empresa']."'/></div>
        
                    <div class='3u 12u$(mobile)'> <label>Tipo de empresa</label></div>
                    <div class='6u$ 12u$(mobile)'><input type='text' name='tipoempresa' value='".$edit_reporte['tipo_empresa']."'/></div>
          
                    <div class='3u 12u$(mobile)'> <label>Titular minero</label></div>
                    <div class='6u$ 12u$(mobile)'><input type='text' name='titularminero' value='".$edit_reporte['titular_minero']."'/></div>
          
                    <div class='3u 12u$(mobile)'> <label>Concesión</label></div>
                    <div class='6u$ 12u$(mobile)'><input type='text' name='concesion' value='".$edit_reporte['concesion']."'/></div>
          
                    <div class='3u 12u$(mobile)'> <label>Observaciones</label></div>
                    <div class='6u$ 12u$(mobile)'><textarea rows='4' cols='4' name='observaciones'>".$edit_reporte['obervaciones']."</textarea></div>
        
                    <div class='12u'><input type='submit' value='Guardar' /><a class='icon fa-download descargar' ></a></div> </div>
          
                </form>   
            </div>
        </section>
    </div>";
?>
