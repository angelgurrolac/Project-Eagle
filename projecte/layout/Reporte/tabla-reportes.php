<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Reportes</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../../assets/css/estilo-tablas.css" />
        <link rel="shortcut icon" href="../../assets/images/logo-favicon.ico" />
                <!-- Scripts -->
            <script src="../../assets/js/jquery.min.js"></script>
            <script src="../../assets/js/jquery.scrolly.min.js"></script>
            <script src="../../assets/js/jquery.scrollzer.min.js"></script>
            <script src="../../assets/js/skel.min.js"></script>
            <script src="../../assets/js/util.js"></script>
            <script src="../../assets/js/main.js"></script>
            <script src="../../assets/js/js-reportes.js"></script>
            <script src="../../assets/js/js.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function(){
                $(".dato_reporte").click(function(){
                    window.location.href="#contenedo-modiregistro";
                });
                
            });
        </script>
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
                                <li><a href="tabla-reportes.php" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-file">Reportes</span></a></li>
                                <li><a href="../Diagnostico/tabla-diagnostico.php" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-stethoscope">Diagnósticos</span></a></li>
                                <li><a href="../Drone/tabla-reporte-drones.php" id="opt-reportesd" class="skel-layers-ignoreHref"><span class="icon fa-crosshairs">Drones</span></a></li>
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
                  require_once('../conexion.php');
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
            <!-- Tabla de los reportes generados -->
            <section id="contact" class="two">
                <div class="container">
                    <header>
                        <h4>REPORTES</h4>
                    </header>
                    <form method="post" action="#">
                        <div class="row">
                            <div class="0.5u 12u$(mobile)"><label class="icon fa-search"/></div>
                            <div class="5u 12u$(mobile) estilo-buscador"><input type="text" name="buscador" placeholder="Buscador" onkeyup="buscarReportes(this.value)"/></div>
                            <div class="1.5u 12u$(mobile) estilo-buscador"><a class="icon fa-plus-circle estilo-icono" href="registrar-reporte.php" id="nvo-reporte">      Nuevo reporte</a></div>
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
                                        llenarReportes();
                                    </script>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </section>
        </div>
        
       

        
            <a name="contenedo-modiregistro"><div id="contenedo-modiregistro"></div></a>
        

        
        
		<!-- Footer -->
			
        

	</body>
    <footer id="footer">
       
				<!-- Copyright -->
					
              <ul class="copyright">
        <li>Todos los derechos reservados. Project Eagle.</li>
      </ul>
				
		

    </footer>
    
</html>