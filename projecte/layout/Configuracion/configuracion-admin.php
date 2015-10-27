<!DOCTYPE HTML>
<html>
	<head>
		<title>Configuración</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../../assets/css/estilo-tabs.css" /> 
                <!-- Scripts -->
            <script src="../../assets/js/jquery.min.js"></script>
            <script src="../../assets/js/jquery.scrolly.min.js"></script>
            <script src="../../assets/js/jquery.scrollzer.min.js"></script>
            <script src="../../assets/js/skel.min.js"></script>
            <script src="../../assets/js/util.js"></script>
            <script src="../../assets/js/main.js"></script>
        
         
    
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
                                <li><a href="tabla-drones.php" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-crosshairs">Drones</span></a></li>
                                <li><a href="../usuario/configuracion.php" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-wrench">Configuración</span></a></li>
							</ul>
						</nav>
				</div>
			</div>
        
        
         <!-- Header2 de login-->
        <div id="usuario">
            <img src="#" width="5%" height="5%" />
            <label>Jane F.</label>
            <label> | </label>
            <a href="../index.html">Salir</a>
        </div>
        
        
        <!-- Main -->
        <div id="main">
            <!-- Configuracion de administrador -->
            <section id="contact" class="two">
                <div class="container">
                    <header>
                        <h4>CONFIGURACIÓN</h4>
                    </header>
                    <form method="post" action="#">
                        <article class="tabs">
                            <section id="tab1">
                                <h2><a href="#tab1">Contraseña</a></h2>
                                <div class="row" id="mostrarc">
                                    <div class="12u$ 12u$(mobile)"></div>
                                    <div class="5u 12u$(mobile)"> <label>Contraseña actual</label></div>
                                    <div class="7u$ 12u$(mobile)"><input type="password" name="contra-actual"/></div>
                                    <div class="5u 12u$(mobile)"> <label>Nueva contraseña</label></div>
                                    <div class="7u$ 12u$(mobile)"><input type="password" name="nueva-contra"/></div>
                                    <div class="5u 12u$(mobile)"> <label>Confirmar nueva contraseña</label></div>
                                    <div class="7u$ 12u$(mobile)"><input type="password" name="confirmar-contra"/></div>
                                    <div class="12u$"><input type="submit" value="Guardar" /></div>
                            </div>
                            </section>
                            
                            <section id="tab2">
                                <h2><a href="#tab2">Fotografía</a></h2>
                                <div class="row" id="mostrarp">
                                    <div class="12u$ 12u$(mobile)"></div>
                                    <div class="3u 12u$(mobile)"> <label>Imagen actual</label></div>
                                    <div class="9u$ 12u$(mobile)"><img src="#" width="10%" height="20%" /></div>
                                    <div class="3u 12u$(mobile)"> <label>Nueva imagen</label></div>
                                    <div class="9u$ 12u$(mobile)"><input type="file" /></div>
                                    <div class="12u$"><input type="submit" value="Guardar" /></div>
                            </div>
                            </section>
                            
                            <section id="tab3">
                                <h2><a href="#tab3">Roles</a></h2>
                                <div class="row">
                                    <div class="12u$ 12u$(mobile)"></div>
                                    <div class="2u 12u$(mobile)"> <label>Usuarios</label></div>
                                    <div class="10u$ 12u$(mobile)">
                                        <select name="correo-usuario">
                                            <option>Seleccione</option>
                                        </select>
                                    </div>
                                    <div class="2u 12u$(mobile)"> <label>Asignar</label></div>
                                    <div class="1u 12u$(mobile)">
                                        <input type = "radio" name = "asigna-rol" value = "small"/>
                                    </div>
                                    <div class="2u$ 12u$(mobile)"> <label>Administrador</label></div>
                                    <div class="2u 12u$(mobile)"></div>
                                    <div class="1u 12u$(mobile)">
                                        <input type = "radio" name = "asigna-rol" value = "small"/>
                                    </div>
                                    <div class="2u$ 12u$(mobile)"> <label>Paramédico</label></div>
                                    <div class="2u 12u$(mobile)"></div>
                                    <div class="1u 12u$(mobile)">
                                        <input type = "radio" name = "asigna-rol" value = "small"/>
                                    </div>
                                    <div class="2u$ 12u$(mobile)"> <label>Consultor</label></div>
                                    <div class="12u$"><input type="submit" value="Guardar" /></div>
                                </div> 
                            </section>
                            
                            <section id="tab4">
                                <h2><a href="#tab4">Usuarios</a></h2>
<!--
                                Esto es a lo que te envia si das click a la opcion de modificar de la tabla.
                                <div class="row">
                                    <div class="12u$ 12u$(mobile)"></div>
                                    <div class="5u 12u$(mobile)"> <label>Nombre</label></div>
                                    <div class="7u$ 12u$(mobile)"><input type="text" name="modelo"/></div>
                                    <div class="5u 12u$(mobile)"> <label>Apellido paterno</label></div>
                                    <div class="7u$ 12u$(mobile)"><input type="text" name="estatus"/></div>
                                    <div class="5u 12u$(mobile)"> <label>Apellido materno</label></div>
                                    <div class="7u$ 12u$(mobile)"><input type="text" name="calibracion"/></div>
                                    <div class="5u 12u$(mobile)"> <label>Nueva contraseña</label></div>
                                    <div class="7u$ 12u$(mobile)"><input type="password" name="calibracion"/></div>
                                    <div class="5u 12u$(mobile)"> <label>Confirmar nueva contraseña</label></div>
                                    <div class="7u$ 12u$(mobile)"><input type="password" name="calibracion"/></div>
                                    <div class="12u$"><input type="submit" value="Guardar" /></div>
                                </div>
-->
                                <div class="rwd">
                            <table class="rwd_auto">
                                <thead>
                                    <tr>
                                        <th>Usuario</th>
                                        <th>Nombre</th>
                                        <th>Apellido P.</th>
                                        <th>Apellido M.</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="miTabla">
                                    <script type="text/javascript">
                                        llenarAdmin();
                                    </script>
                                </tbody>
                            </table>
                        </div>
                            </section>
                        </article>
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
        </body>
</html>