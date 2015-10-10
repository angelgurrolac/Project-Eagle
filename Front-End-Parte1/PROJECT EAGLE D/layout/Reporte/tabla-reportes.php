<!DOCTYPE HTML>
<html>
	<head>
		<title>Reportes</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../../assets/css/estilo-tablas.css" /> 
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
            <!-- Tabla de los reportes generados -->
            <section id="contact" class="two">
                <div class="container">
                    <header>
                        <h4>REPORTES</h4>
                    </header>
                    <form method="post" action="#">
                        <div class="row">
                            <div class="0.5u 12u$(mobile)"><label class="icon fa-search"/></div>
                            <div class="5u 12u$(mobile) estilo-buscador"><input type="text" name="buscador" placeholder="Buscador"/></div>
                            <div class="1.5u 12u$(mobile) estilo-buscador"><button class="icon fa-plus-circle estilo-icono">      Nuevo reporte</button></div>
                        </div>
                    
                        <div class="rwd">
                            <table class="rwd_auto">
                                <thead>
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Nombre</th>
                                        <th>Número de victimas</th>
                                        <th>Empresa</th>
                                        <th>
                                            <button class="icon fa-folder-open estilo-icono"></button>
                                            <button class="icon fa-edit estilo-icono" data-toggle="modal" data-target="#myModal"></button>
                                            <button class="icon fa-remove estilo-icono"></button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="miTabla">

                                    <tr>
                                        <td>13/09/15</td>
                                        <td>007</td>
                                        <td>2</td>
                                        <td>GYM S.A</td>
                                        <td></td>
                                    </tr>

                                    
                                    <script type="text/javascript">
                                        llenarReportes();
                                    </script>
                                </tbody>
                            </table>
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