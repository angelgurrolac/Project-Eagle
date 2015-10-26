<?php 
$link=mysqli_connect("localhost","root","admin","projecte");
$id = $_POST['idVer'];

$sql_edit= mysqli_query($link, "SELECT id_reporte, fecha, no_victimas, no_decesos, empresa,tipo_empresa, titular_minero,
concesion, obervaciones, estado FROM `reporte` WHERE id_reporte=$id;");

$edit_reporte = mysqli_fetch_array($sql_edit);
echo "
        <div id='main'>
            <section id='contact' class='two'>
                <div class='container'>
                    <header>
                        <h4>REPORTE</h4>
                    </header>
                    <form method='post' action='#'>
                        <div class='row'>
                        <div class='5u$ 12u$(mobile)'> <label>Fecha ".$edit_reporte['fecha']."</label></div>
                        <div class='3u$ 12u$(mobile)'> <label>Número de víctimas ".$edit_reporte['no_victimas']."</label></div>
              
                        <div class='3u$ 12u$(mobile)'> <label>Número de decesos ".$edit_reporte['no_decesos']."</label></div>              
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
              
                        <div class='6u$ 12u$(mobile)'> <label>Empresa: ".$edit_reporte['empresa']."</label></div>
            
                        <div class='6u$ 12u$(mobile)'> <label>Tipo de empresa: ".$edit_reporte['tipo_empresa']."</label></div>
              
                        <div class='6u$ 12u$(mobile)'> <label>Titular minero: ".$edit_reporte['titular_minero']."</label></div>
              
                        <div class='6u$ 12u$(mobile)'> <label>Concesión: ".$edit_reporte['concesion']."</label></div>
              
                        <div class='6u$ 12u$(mobile)'> <label>Observaciones: ".$edit_reporte['obervaciones']."</label></div>              
                    </form> 
                </div>
            </section>
        </div>
    ";

?>
