<!DOCTYPE HTML>
<html>
	<head>
		<title>Reporte drone</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../../assets/css/estilo-datos.css" />
        <link rel="shortcut icon" href="../../assets/images/logo-favicon.ico">
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
                                <li><a href="../inicio.php" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Inicio</span></a></li>
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
                  require_once '../conexion.php';

                  $result = $link->query('SELECT imagen FROM `usuarios` WHERE id_user='.$idUser.';');
                  while ($row = $result->fetch_assoc()) {
                    if ($row['imagen']==null) {
                      echo "<img src='../usuario/foto-perfil/foto-default.png' width='3%'/>";
                    }else{
                      echo "<img src='../usuario/".$row['imagen']."' width='3%'/>";
                    }
                  }
                  echo " <a href='../usuario/configuracion-admin.php'><label>".$_SESSION['nombre']." ".$_SESSION['apellido']."</label></a>
                      <label> | </label>
                      <a href='../usuario/cerrarSesion.php'><label class='ancla-salir' id='cerrarSesion'>Salir</label></a>";
              }else{
                  header("Location: ../index.php");
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
                    <form method="POST" action="registrar-reported.php">
                        <div class="row">
                        <div class="3u 12u$(mobile)"> <label>Fecha</label></div>
                        <div class="9u$ 12u$(mobile)"><input type="date" name="fecha" required  /></div>
                        <div class="3u 12u$(mobile)"> <label>Modelo</label></div>
                        <div class="9u$ 12u$(mobile)"><select id="modelod" name="cuadrante" required >
                        <script type="text/javascript">llenarDrones();</script>
            
          </select></div>

                        <div class="3u 12u$(mobile)"> <label>Cuadrante</label></div>
                        <div class="9u$ 12u$(mobile)"><select id="cuadrante" name="cuadrante" required >
                        <script type="text/javascript">llenarCuadrantesReg();</script>
            
          </select></div>
                        <div class="3u 12u$(mobile)"> <label>Tiempo de vuelo</label></div>
                        <div class="9u$ 12u$(mobile)"><input onkeypress="return alpha(event,numeros+signos)" type="text" name="tiempov" required  /></div>
                            <div class="3u 12u$(mobile)"> <label>Nivel de batería</label></div>
                        <div class="9u$ 12u$(mobile)"><input  onkeypress="return alpha(event,numeros+signos)" type="text" name="nivelb" required /></div>
                            <div class="3u 12u$(mobile)"> <label>Distancia recorrida</label></div>
                        <div class="9u$ 12u$(mobile)"><input  onkeypress="return alpha(event,numeros+signos)" type="text" name="distanciar" required  /></div>
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

           <script type="text/javascript">
  <!--
  var letras =' ABCÇDEFGHIJKLMNÑOPQRSTUVWXYZabcçdefghijklmnñopqrstuvwxyzàáÀÁéèÈÉíìÍÌïÏóòÓÒúùÚÙüÜ'
  var numeros='1234567890'
  var signos='.%'

  function alpha(e,allow) {
       var k;
       k=document.all?parseInt(e.keyCode): parseInt(e.which);
       return (allow.indexOf(String.fromCharCode(k))!=-1);
  }

  // -->
  </script>

	</body>
</html>