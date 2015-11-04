<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Cuadrantes</title>
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
            <script src="../../assets/js/js-cuadrantes.js"></script>
            <script src="../../assets/js/js.js"></script>
	</head>
    
	<body onload="tipoUsuario(<?php echo $_SESSION["tipo_usuario"];?>)">
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
                                <li><a href="../Diagnostico/tabla-diagnostico.php" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-stethoscope">Diagnósticos</span></a></li>
                                <li><a href="../Drone/tabla-reporte-drones.php" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-crosshairs">Drones</span></a></li>
                                <li><a href="../usuario/configuracion-admin.php" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-wrench">Configuración</span></a></li>
							</ul>
						</nav>
				</div>
			</div>
        
        
         <!-- Header2 de login-->
        <div id="usuario">
        <?php 
               if (! empty($_SESSION["nombre"])){
                  $idUser=$_SESSION['idUsuario'];
                  require_once '../conexion.php';

                  $result = $link->query('SELECT imagen FROM `usuarios` WHERE id_user='.$idUser.';');
                  while ($row = $result->fetch_assoc()) {
                    if ($row['imagen']==null) {
                      echo "<img src='../usuario/foto-perfil/foto-default.png' width='5%' height='8%' />";
                    }else{
                      echo "<img src='../usuario/".$row['imagen']."' width='5%' height='8%' />";
                    }
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
            <!-- Tabla de los reportes generados -->
            <section id="contact" class="two">
                <div class="container">
                    <header>
                        <h4>CUADRANTES</h4>
                    </header>
                    <form method="post" action="#">
                        <div class="row">
                            <div class="0.5u 12u$(mobile)"><label class="icon fa-search"/></div>
                            <div class="5u 12u$(mobile) estilo-buscador"><input type="text" name="buscador" placeholder="Buscador" onkeyup="buscarCuadrantes(this.value)"/></div>
                            <div class="1.5u 12u$(mobile) estilo-buscador" id="nvo-cuadran"><a href="datos-cuadrante.php"class="icon fa-plus-circle estilo-icono" >      Nuevo cuadrante</a></div>
                        </div>
                    
                        <div class="rwd">
                            <table class="rwd_auto">
                                <thead>
                                    <tr>
                                        <th>Cuadrante</th>
                                        <th>Latitud</th>
                                        <th>Longitud</th>
                                        <th>Descripción</th>
                                        <th>Número de trabajadores</th>
                                        <th>
                                           
                                           
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="miTabla">

                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    
                                    <script type="text/javascript">
                                        llenarCuadrantes();
                                    </script>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </section>
        </div>
        
          <div id="contenedor-eliminarC"></div>

         <div id="contenedo-modicuadrante"></div>

         <div id="contenedorVCua"></div>

        
		<!-- Footer -->
			<div id="footer">
				<!-- Copyright -->
					<ul class="copyright">
						<li>Todos los derechos reservados. Project Eagle.</li>
					</ul>
			</div>

        

	</body>
</html>