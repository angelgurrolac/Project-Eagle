<!DOCTYPE HTML>
<html>
	<head>
		<title>Reporte drone</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../../assets/css/estilo-datos.css" />
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
                                <li><a href="../Diagnostico/diagnosticos.php" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-stethoscope">Diagnósticos</span></a></li>
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
            <!-- nuevo reporte-->
            <section id="contact" class="two">
                <div class="container">
                    <header>
                        <h4>NUEVO REPORTE</h4>
                    </header>
                    <form method="POST" action="registrar-drone.php">
                        <div class="row">
                        <div class="3u 12u$(mobile)"> <label>Fecha</label></div>
                        <div class="9u$ 12u$(mobile)"><input type="date" name="fecha"/></div>
                        <div class="3u 12u$(mobile)"> <label>Modelo</label></div>
                        <div class="9u$ 12u$(mobile)"><input type="text" name="modelod"/></div>

                        <div class="3u 12u$(mobile)"> <label>Cuadrante</label></div>
                        <div class="9u$ 12u$(mobile)"><select id="cuadrante" onchange="otraOpt(this.value)">
            <option value="" selected>Seleccione</option>
          </select></div>
                        <div class="3u 12u$(mobile)"> <label>Tiempo de vuelo</label></div>
                        <div class="9u$ 12u$(mobile)"><input type="text" name="tiempov"/></div>
                            <div class="3u 12u$(mobile)"> <label>Nivel de batería</label></div>
                        <div class="9u$ 12u$(mobile)"><input type="number" name="nivelb"/></div>
                            <div class="3u 12u$(mobile)"> <label>Distancia recorrida</label></div>
                        <div class="9u$ 12u$(mobile)"><input type="text" name="distanciar"/></div>
                        <div class="12u$"><input type="submit" value="Guardar" /></div>
                    </div>
                    </form>   
                </div>
            </section>
        </div>
        
        <div id="contenedor">

        </div>

        <div id="contenedorE"></div>

        
		<!-- Footer -->
			<div id="footer">
				<!-- Copyright -->
					<ul class="copyright">
						<li>Todos los derechos reservados. Project Eagle.</li>
					</ul>
			</div>

        

	</body>
</html>