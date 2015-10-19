<!DOCTYPE HTML>
<html>
	<head>
		<title>CONFIGURACIÓN</title>
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
								<li><a href="../Drone/tabla-drones.php" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-crosshairs">Drones</span></a></li>
                                <li><a href="configuracion.php" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-wrench">Configuración</span></a></li>
							</ul>
						</nav>
				</div>
			</div>
        
        
         <!-- Header2 de login-->
        <div id="usuario">
              <img src="#" width="5%" height="8%" />
  <label>Jane F.</label>
  <label> | </label>
  <a href="../index.html">Salir</a>
        </div>
        
        
        <!-- Main -->
        <div id="main">
            <!-- Tabla de drones -->
            <section id="contact" class="two">
                <div class="container">
                    <header>
                        <h4>CONFIGURACIÓN</h4>
                    </header>
                    <form method="POST" action="#">
                        <div class="row">
                            <!--funcion para ver -->
                            <script type="text/javascript">
function mostrarp(){
    document.getElementById('mostrarc').style.display = 'none';
document.getElementById('mostrarp').style.display = 'block';}
</script>
                            
                            <!--funcion para ocultar -->
                            <script type="text/javascript">
function mostrarc(){
document.getElementById('mostrarp').style.display = 'none';
document.getElementById('mostrarc').style.display = 'block';
}
                                
</script>
                        <div class="3u 12u$(mobile)"> <input type="button" onclick="mostrarc()" value="Contraseña" /></div>
                             <div class="4$ 12u$(mobile)"> <input type="button" onclick="mostrarp()" value="Foto de perfil" /></div>
                             </div>
                            <div class="row" id="mostrarc">
                                <div class="4u 12u$(mobile)"> <label>Contraseña actual</label></div>
                        <div class="8u$ 12u$(mobile)"><input type="password" name="contra-actual"/></div>
                        <div class="4u 12u$(mobile)"> <label>Nueva contraseña</label></div>
                        <div class="8u$ 12u$(mobile)"><input type="password" name="nueva-contra"/></div>
                        
                        <div class="4u 12u$(mobile)"> <label>Confirmar nueva contraseña</label></div>
                        <div class="8u$ 12u$(mobile)"><input type="password" name="confirmar-contra"/></div>
                                
                                 <div class="12u$"><input type="submit" value="Guardar" /></div>
                            </div>
                        <div class="row" id="mostrarp">
                                <div class="3u 12u$(mobile)"> <label>Imagen actual</label></div>
                        <div class="9u$ 12u$(mobile)"><img src="#" width="10%" height="20%" /></div>
                        
                        
                        <div class="3u 12u$(mobile)"> <label>Nueva imagen</label></div>
                        <div class="9u$ 12u$(mobile)"><input type="file" /></div>
                                
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