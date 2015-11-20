<!DOCTYPE HTML>
<html>
	<head>
		<title>Diagnosticos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="../../assets/css/estilo-datos.css">
           <link rel="shortcut icon" href="../../assets/images/logo-favicon.ico">
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
                                <li><a href="../inicio.php" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Inicio</span></a></li>
                                <li><a href="../Reporte/tabla-reportes.php" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-file">Reportes</span></a></li>
                                <li><a href="tabla-diagnostico.php" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-stethoscope">Diagnósticos</span></a></li>
                                <li><a href="../Drone/tabla-reporte-drones.php" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-crosshairs">Drones</span></a></li>
                                <li><a href="../usuario/configuracion-admin.php" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-wrench">Configuración</span></a></li>
							</ul>
						</nav>
				</div>
			</div>
        
        
         <!-- Header login de usuario-->
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
                echo " <a href='../usuario/configuracion-admin.php'><label>".$_SESSION['nombre']." ".$_SESSION['apellido']."</label></a>
                    <label> | </label>
                    <a href='../usuario/cerrarSesion.php'><label id='cerrarSesion'>Salir</label></a>";
            }else{
                header("Location: ../index.php");
            }   
        ?>
        </div>

		<!-- Main -->
			<div id="main">
				<!-- Diagnostico -->
					<section id="contact" class="two">
						<div class="container">
							<header>
								<h4>DIAGNÓSTICO</h4>
							</header>
							<form method="post" action="#">
								<div class="row">
                                    <div class="1u 12u$(mobile)"> <label>Fecha</label></div>
									<div class="4u 12u$(mobile)"><input type="date" name="fecha"/></div>
                                    <div class="1.5u 12u$(mobile)"> <label>Cuadrante</label></div>
									<div class="5u$ 12u$(mobile)"><input type="text" name="cuadrante"/></div>
									<div class="12u$">
										<input type="submit" value="Generar diagnostico" />
									</div>
								</div>
							</form>
						</div>
					</section>
                
                
                 <!-- Video -->
                <section id="drones" class="three">
						<div class="container">
							<header>
								<h4>VIDEO</h4>
							</header>
                            <video width="320" height="240" controls> </video>
						</div>
				</section>
                
                
                <!-- Diagnosstigo del herido -->
                   <section id="contact" class="two">
						<div class="container">
							<header>
								<h4>DIAGNÓSTICO DEL HERIDO</h4>
							</header>
                            <form method="post" action="#">
								<div class="row">
                                    <div class="2u 12u$(mobile)"> <label>Nombre</label></div>
									<div class="10u$ 12u$(mobile)"><input type="text" name="nombre"/></div>
                                    <div class="2u$ 12u$(mobile)"> <label>Síntomas</label></div>
								    <div class="2u$ 12u$(mobile)"> <label>Pulsaciones</label></div>
                                    <div class="2u$ 12u$(mobile)"> <label>Respiración</label></div>
                                    <div class="3u$ 12u$(mobile)"> <label>Oxígeno en la sangre</label></div>
                                    <div class="2u 12u$(mobile)"> <label>Observaciones</label></div>
									<div class="10u$ 12u$(mobile)"> <input type="text" name="observaciones"/></div>
								</div>
							</form>
						</div>
					</section>
                
                
                <!-- Reporte del drone -->
                	<section id="contact" class="three">
						<div class="container">
                            <header>
								<h4>REPORTE DEL DRONE</h4>
							</header>
                             <form method="post" action="#">
								<div class="row">
                                    <div class="2u$ 12u$(mobile)"> <label>Nombre</label></div>
                                    <div class="2u$ 12u$(mobile)"> <label>Velocidad</label></div>
								    <div class="2u$ 12u$(mobile)"> <label>Nivel de batería</label></div>
                                    <div class="3u$ 12u$(mobile)"> <label>Distancia recorrida</label></div>
								</div>
							</form>
						</div>
					</section>
			</div>
        

		<!-- Footer -->
			<div id="footer">
				<!-- Copyright -->
					<ul class="copyright">
						<li>Todos los derechos reservados. Project Eagle.</li>
					</ul>
			</div>

        
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>