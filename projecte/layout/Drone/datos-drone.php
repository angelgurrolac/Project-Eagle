<!DOCTYPE HTML>
<html>
	<head>
		<title>Registrar drone</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../../assets/css/estilo-datos.css" /> 
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
								<li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Inicio</span></a></li>
								<li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-file">Reportes</span></a></li>
								<li><a href="#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-stethoscope">Diagnósticos</span></a></li>
								<li><a href="#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-crosshairs">Drones</span></a></li>
                                <li><a href="#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-wrench">Configuración</span></a></li>
							</ul>
						</nav>
				</div>
			</div>
        
        
         <!-- Header2 de login-->
        <div id="usuario">
            <label>Jane F.</label>
            <label> | </label>
            <label>Salir</label>
        </div>
        
        
        <!-- Main -->
        <div id="main">
            <!-- Tabla de drones -->
            <section id="contact" class="two">
                <div class="container">
                    <header>
                        <h4>DRONES</h4>
                    </header>
                    <form method="POST" action="registrar-drone">
                        <div class="row">
                        <div class="3u 12u$(mobile)"> <label>Fecha de instalación</label></div>
                        <div class="9u$ 12u$(mobile)"><input type="date" name="modelo"/></div>
                        <div class="3u 12u$(mobile)"> <label>Modelo</label></div>
                        <div class="9u$ 12u$(mobile)"><input type="text" name="marca"/></div>
                        <div class="3u 12u$(mobile)"> <label>Estatus</label></div>
                        <div class="9u$ 12u$(mobile)"><input type="text" name="estatus"/></div>
                        <div class="3u 12u$(mobile)"> <label>Calibración</label></div>
                        <div class="9u$ 12u$(mobile)"><input type="text" name="calibracion"/></div>
                        <div class="3u 12u$(mobile)"> <label>Observaciones</label></div>
                        <div class="9u$ 12u$(mobile)"><input type="text" name="observaciones"/></div>
                        <div class="12u$"><input type="submit" value="Registrar" /></div>
                    </div>
                    </form>   
                </div>
            </section>
        </div>
        
        <div id="contenedor"></div>

        <div id="contenedorE" > </div>

        
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
            <script src="assets/js/js-drones.js"></script>
	</body>
</html>