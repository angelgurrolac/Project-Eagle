<!DOCTYPE HTML>
<html>
	<head>
		<title>Registrar Registro</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../../assets/css/estilo-datos.css" /> 
        <link rel="stylesheet" href="../../assets/css/estilo-tablas.css"
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
            <a href="../index.html">Salir</a>
        </div>
        
        <!-- Main de color -->
        <div id="main">
            <!-- regitro de reporte -->
            <section id="contact" class="two">
                <div class="container">
                    <header>
                        <h4>NUEVO REPORTE</h4>
                    </header>
                    
                    <form method="post" action="registrar-reportec">
                        <div class="row">
                                   
                        <div class="7u 12u$(mobile)"> <label></label></div>
                            
                        <div class="1u 12u$(mobile)"> <label>Fecha</label></div>
                                
                        <div class="4u 12u$(mobile)"><input type="date" name="fecha accidente"/></div>
                               </div>
                            <div class="row">
                        <div class="3u 12u$(mobile)"> <label>Tipo de accidente</label></div>
                            <div class="4u 12u$(mobile)">       <select>
  <option value="ejemplo" selected>Seleccione</option>
</select></div>
                              <div class="1u 12u$(mobile)"> <label>Otro</label></div>
                                  <div class="3u$ 12u$(mobile)"><input type="text" name="otro accidente"/></div>
                                <div class="1u 12u$(mobile)"> <label></label></div>
                      </div>
                        
                        <div class="row">
                            <div class="3u 12u$(mobile)"> <label>Número  de víctimas</label></div>
                            <div class="4u 12u$(mobile)"><input type="number" name="num victimas"/></div>
                            <div class="5u 12u$(mobile)"></div>
                            
                        </div>
                          <div class="row">
                            <div class="3u 12u$(mobile)"> <label>Número  de decesos</label></div>
                            <div class="4u 12u$(mobile)"><input type="number" name="num decesos"/></div>
                            <div class="5u 12u$(mobile)"></div>
                            
                        </div>
                          <div class="row">
                            <div class="4u 12u$(mobile)"> <label>Nombre(s) de la(s) víctima(s) </label></div>
                            <div class="3u 12u$(mobile)"></div>
                            <div class="5u 12u$(mobile)"></div>
                            
                        </div>
                        
                        <!-- tabla de los diagnosticos de las victimas -->
                                 <form method="post" action="#">
                      
                        
                        <div class="rwd">
                            <table class="rwd_auto">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido Paterno</th>
                                        <th>Apellido Materno</th>
                                        <th>
                                            <button class="icon fa-chevron-right estilo-icono"></button>
                                            
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="miTabla">
                                    
                                    <script type="text/javascript">
                                        llenarDiagnosticos();
                                    </script>
                                </tbody>
                            </table>
                        </div>
                    </form>
                          <div class="row">
                            <div class="3u 12u$(mobile)"> <label>Empresa</label></div>
                            <div class="6u 12u$(mobile)"><input type="text" name="empresa"/></div>
                            <div class="3u 12u$(mobile)"></div>
                                
                          </div>
                        <div class="row">
                            <div class="3u 12u$(mobile)"> <label>Tipo de empresa</label></div>
                            <div class="8u 12u$(mobile)"><input type="text" name="tipo empresa"/></div>
                            <div class="1u 12u$(mobile)"></div>
                                
                          </div>
                        <div class="row">
                            <div class="3u 12u$(mobile)"> <label>Titular minero</label></div>
                            <div class="8u 12u$(mobile)"><input type="text" name="titular minero"/></div>
                            <div class="1u 12u$(mobile)"></div>
                                
                          </div>
                        
                        <div class="row">
                            <div class="3u 12u$(mobile)"> <label>Concesión</label></div>
                            <div class="6u 12u$(mobile)"><input type="text" name="concesion"/></div>
                            <div class="3u 12u$(mobile)"></div>
                                
                          </div>
                        <div class="row">
                            <div class="3u 12u$(mobile)"> <label>Observaciones</label></div>
                            <div class="6u 12u$(mobile)"><input type="text" name="observaciones"/></div>
                            <div class="3u 12u$(mobile)"></div>
                                
                          </div>
                        <div class="row">
                         <div class="12u$"><input type="submit" value="Guardar" /></div>
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
            <script src="assets/js/js-drones.js"></script>
	</body>
</html>