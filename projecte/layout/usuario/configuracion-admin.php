<?php 
    session_start();
 ?>
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
            <script src="../../assets/js/js-usuarios.js"></script>
            <script src="../../assets/js/js.js"></script>
        
         
    
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
                                <li><a href="../Drone/tabla-reporte-drones.php" id="opt-reportesd" class="skel-layers-ignoreHref"><span class="icon fa-crosshairs">Drones</span></a></li>
                                <li><a href="configuracion-admin.php" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-wrench">Configuración</span></a></li>
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
                      echo "<img src='../usuario/foto-perfil/foto-default.png' width='3%' />";
                    }else{
                      echo "<img src='../usuario/".$row['imagen']."' width='3%' />";
                    }
                  }
                  echo " <a href='configuracion-admin.php'><label>".$_SESSION['nombre']." ".$_SESSION['apellido']."</label></a>
                      <label> | </label>
                      <a href='../usuario/cerrarSesion.php'><label class='ancla-salir' id='cerrarSesion'>Salir</label></a>";
              }else{
                  header("Location: ../index.php");
              }   
          ?>
        </div>
        
        
        <!-- Main -->
        <div id="main">
            <!-- Configuracion de administrador -->
            <section id="contact" class="two">
                <div class="container">
                    <header>
                        <h4>CONFIGURACIÓN</h4>
                    </header>
                    
                        <article class="tabs">
                        
                            <section id="tab1">
                            <form method="post" action="cambioContrasena.php">
                                <a href="#tab1"><h2>Contraseña</h2></a>
                                <div class="row" id="mostrarc">
                                    <div class="12u$ 12u$(mobile)"></div>
                                    <div class="5u 12u$(mobile)"> <label>Contraseña actual</label></div>
                                    <div class="7u$ 12u$(mobile)"><input type="password"  pattern=".{8,}" title="La contraseña debe contener más de 8 caracteres." name="contra-actual"/></div>
                                    <div class="5u 12u$(mobile)"> <label>Nueva contraseña</label></div>
                                    <div class="7u$ 12u$(mobile)"><input type="password"  pattern=".{8,}" title="La contraseña debe contener más de 8 caracteres." name="nueva-contra"/></div>
                                    <div class="5u 12u$(mobile)"> <label>Confirmar nueva contraseña</label></div>
                                    <div class="7u$ 12u$(mobile)"><input type="password"  pattern=".{8,}" title="La contraseña debe contener más de 8 caracteres." name="confirmar-contra"/></div>
                                    <div class="12u$"><input type="submit" value="Guardar" /></div>
                            </div>
                            </form>
                            </section>

                            
                            <section id="tab2">
                            <form method="post" enctype="multipart/form-data"  action="subir.php">
                                <a href="#tab2"><h2>Fotografía</h2></a>
                                <div class="row" id="mostrarp">
                                    <div class="12u$ 12u$(mobile)"></div>
                                    <div class="3u 12u$(mobile)"> <label>Imagen actual</label></div>
                                     <?php 
                                            $result = $link->query('SELECT imagen FROM `usuarios` WHERE id_user='.$idUser.';');
                                            while ($row = $result->fetch_assoc()) { 
                                                echo "<div class='9u$ 12u$(mobile)'><img src='".$row['imagen']."' width='10%' height='20%' /></div>";
                                            }
                                        ?>
                                    <div class="3u 12u$(mobile)"> <label>Nueva imagen</label></div>
                                    <div class="9u$ 12u$(mobile)"><input type="file" id="foto" name="foto"/></div>
                                    <div class="12u$"><input type="submit" value="Guardar" /></div>
                            </div>
                            </form>
                            </section>
                            
                            <section id="tab3">
                            <form method="post" action="asignarUsuario.php">
                                <a href="#tab3"><h2>Roles</h2></a>
                                <div class="row">
                                    <div class="12u$ 12u$(mobile)"></div>
                                    <div class="2u 12u$(mobile)"> <label>Usuarios</label></div>
                                    <div class="10u$ 12u$(mobile)">
                                        <select name="correo-usuario">
                                        <?php 
                                            $link=mysqli_connect("localhost","root","admin","projecte");
                                            $result = $link->query('SELECT `id_user`,`nombre_user` FROM `usuarios`');
                                            while ($row = $result->fetch_assoc()) {  
                                              echo"<option value='".$row['id_user']."'>".$row['nombre_user']."</option>";
                                            }
                                       ?>
                                            <!-- <option>Seleccione</option> -->
                                        </select>
                                    </div>
                                    <div class="2u 12u$(mobile)"> <label>Asignar</label></div>
                                    <div class="1u 12u$(mobile)">
                                        <input type = "radio" name = "asigna-rol" value = "1"/>
                                    </div>
                                    <div class="2u$ 12u$(mobile)"> <label>Administrador</label></div>
                                    <div class="2u 12u$(mobile)"></div>
                                    <div class="1u 12u$(mobile)">
                                        <input type = "radio" name = "asigna-rol" value = "2"/>
                                    </div>
                                    <div class="2u$ 12u$(mobile)"> <label>Paramédico</label></div>
                                    <div class="2u 12u$(mobile)"></div>
                                    <div class="1u 12u$(mobile)">
                                        <input type = "radio" name = "asigna-rol" value = "3"/>
                                    </div>
                                    <div class="2u$ 12u$(mobile)"> <label>Consultor</label></div>
                                    <div class="12u$"><input type="submit" value="Guardar" /></div>
                                </div>
                                </form>
                            </section>
                            
                            <section id="tab4">
                                <a href="#tab4"><h2>Usuarios</h2></a>
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
                                        llenarUsuarios();
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

        <div id="contenedor"></div>
		<!-- Footer -->
			<div id="footer">
				<!-- Copyright -->
					<ul class="copyright">
						<li>Todos los derechos reservados. Project Eagle.</li>
					</ul>
            </div>
        </body>
</html>