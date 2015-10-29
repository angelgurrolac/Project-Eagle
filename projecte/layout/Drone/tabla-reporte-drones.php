<!DOCTYPE HTML>
<html>
	<head>
		<title>Drones</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../../assets/css/estilo-tablas.css" /> 
                <!-- Scripts -->
            <script src="../../assets/js/jquery.min.js"></script>
            <script src="../../assets/js/jquery.scrolly.min.js"></script>
            <script src="../../assets/js/jquery.scrollzer.min.js"></script>
            <script src="../../assets/js/skel.min.js"></script>
            <script src="../../assets/js/util.js"></script>
            <script src="../../assets/js/main.js"></script>
            <script src="../../assets/js/js-drones.js"></script>
	</head>
    
	<body>
		<!-- Header -->
			<div id="header">
				<div class="top">
					<!-- Logo -->
						<div id="logo">
							<span class="image logo-pe"><img src="../../assets/images/logo_efectos.png" alt="" /></span>
						</div>

                    
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="../inicio.html" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Inicio</span></a></li>
                                <li><a href="../Reporte/tabla-reportes.php" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-file">Reportes</span></a></li>
                                <li><a href="../Diagnostico/tabla-diagnostico.php" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-stethoscope">Diagnósticos</span></a></li>
                                <li><a href="tabla-reporte-drones.php" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-crosshairs">Drones</span></a></li>
                                <li><a href="../usuario/configuracion-admin.php" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-wrench">Configuración</span></a></li>
							</ul>
						</nav>
				</div>
			</div>
        
        
         <!-- Header2 de login-->
        <div id="usuario">
        <?php 
            session_start();
             if (! empty($_SESSION["nombre"])){
                $idUser=$_SESSION['idUsuario'];
                $link=mysqli_connect("localhost","root","admin","projecte");

                $result = $link->query('SELECT imagen FROM `usuarios` WHERE id_user='.$idUser.';');
                while ($row = $result->fetch_assoc()) { 
                    echo "<img src='../usuario/".$row['imagen']."' width='5%' height='8%' />";
                }
                echo " <label>".$_SESSION['nombre']." ".$_SESSION['apellido']."</label>
                    <label> | </label>
                    <a href='../usuario/cerrarSesion.php'><label id='cerrarSesion'>Salir</label></a>";
            }else{
                header("Location: ../index.html");
            }   
        ?>
        </div>
        
        
        <!-- Main -->
        <div id="main">
            <!-- Tabla de drones -->
            <section id="contact" class="two">
                <div class="container">
                    <header>
                        <h4>REPORTE DE DRONES</h4>
                    </header>
                    <form method="post" action="#">
                        <div class="row">
                            <div class="0.5u 12u$(mobile)"><label class="icon fa-search"/></div>
                            <div class="5u 12u$(mobile) estilo-buscador"><input type="text" name="buscador" placeholder="Buscador" onkeyup="buscarReportesD(this.value)" /></div>
                            
                       </div>
                        <div class="row">
                             <div class="1.1u 12u$(mobile) estilo-buscador"><a class="icon fa-plus-circle estilo-icono" href="reporte-datos-drone.php"> Nuevo reporte</a></div>
                            <div class="1.1u 12u$(mobile) estilo-buscador"><a class="icon fa-crosshairs estilo-icono" href="tabla-drones.php"> Registro de drones</a></div>
                            <div class="1.1u$ 12u$(mobile) estilo-buscador"><a class="icon fa-area-chart estilo-icono" href="../cuadrante/tabla-cuadrantes.php"> Cuadrantes</a></div>
                            
                        </div>
                        
                        <div class="rwd">
                            <table class="rwd_auto">
                                <thead>
                                    <tr>
                                        <th>Reporte</th>
                                        <th>Fecha</th>
                                        <th>Modelo</th>
                                        <th>Cuadrante</th>
                                        <th>Tiempo de vuelo</th>
                                        <th>Nivel de bateria</th>
                                        <th>Distancia recorrida</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="miTabla">
                                    <script type="text/javascript">
                                        llenarReportesDrones();
                                    </script>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </section>
        </div>

         <div id="contenedor"></div>

         <div id="contenedoE"></div>
        
		<!-- Footer -->
			<div id="footer">
				<!-- Copyright -->
					<ul class="copyright">
						<li>Todos los derechos reservados. Project Eagle.</li>
					</ul>
            </div>

        

	</body>
</html>