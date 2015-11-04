
  <!DOCTYPE HTML>
  <html>
  <head>
    <title>Registrar Reporte</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="stylesheet" href="../../assets/css/estilo-tablas.css" />
    <link rel="stylesheet" href="../../assets/css/estilo-datos.css" />
      <!-- Scripts -->
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/jquery.scrolly.min.js"></script>
    <script src="../../assets/js/jquery.scrollzer.min.js"></script>
    <script src="../../assets/js/skel.min.js"></script>
    <script src="../../assets/js/util.js"></script>
    <script src="../../assets/js/main.js"></script>
    <script src="../../assets/js/js-reportes.js"></script> 
    
  </head>

  <body onload="deshabilitarCampos()">
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
          <li><a href="../Drone/tabla-reporte-drones.php" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-crosshairs">Drones</span></a></li>
          <li><a href="../usuario/configuracion-admin.php" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-wrench">Configuración</span></a></li>
        </ul>
      </nav>
    </div>
  </div>


  <!-- Header2 de login-->
  <div id="usuario">
          <?php 
             require_once('../conexion.php');
              session_start();
               if (! empty($_SESSION["nombre"])){
                  $idUser=$_SESSION['idUsuario'];
               

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

  <!-- Main de color -->
  <div id="main">
    <!-- regitro de reporte -->
    <section id="contact" class="two">
      <div class="container">
        <header>
          <h4>NUEVO REPORTE</h4>
        </header>
        
        <form method="post" action="registrar-reportec.php" id="mostrarRD">
          <div class="row">
           
            <div class="7u 12u$(mobile)"> <label></label></div>
            
            <div class="1u 12u$(mobile)"> <label>Fecha</label></div>
            
            <div class="4u$ 12u$(mobile)"><input type="date" name="fechaaccidente" onchange="cambiarFecha(this.value)" required/></div>
            
  <!--           
            <div class="3u 12u$(mobile)"> <label>Tipo de accidente</label></div>
            <div class="4u 12u$(mobile)">       
            <select id="tipo_accidente" onchange="otraOpt(this.value)">
              <option value="" selected>Seleccione</option>
            <?php 
              $link=mysqli_connect("localhost","root","admin","projecte");
              $result = $link->query('SELECT `id_tipo_accidente`,`descripcion` FROM `tipo_accidente`');
              while ($row = $result->fetch_assoc()) {  
                echo"<option value='".$row['id_tipo_accidente']."'>".$row['descripcion']."</option>";
              }
             ?>
             <option value="otro">Otro</option>
            </select></div> -->
     
            <div class="1u 12u$(mobile)"> <label  id="lbl-otro">Otro</label></div>
            <div class="4u$ 12u$(mobile)"><input type="text" name="otroaccidente" id="input-otro" /></div>
     
            
            
            
            
            <div class="3u 12u$(mobile)"> <label>Número  de víctimas</label></div>
            <!-- <div class="4u$ 12u$(mobile)"><label id="numvictimas" name="numvictimas"></label></div> -->
            <div class="4u$ 12u$(mobile)"><input type="text" name="numvictimas" id="numvictimas" onfocus="this.type='number';"/></div>
            
            
            
            <div class="3u 12u$(mobile)"> <label>Número  de decesos</label></div>
            <div class="4u$ 12u$(mobile)"><input type="number" name="numdecesos" id="numdecesos" /></div>
            
            
            <div class="4u 12u$(mobile)"> <label>Nombre(s) de la(s) víctima(s) </label></div>
            
            
            
            <!-- tabla de los diagnosticos de las victimas -->
            
            
            
            <div class="rwd">
              <table class="rwd_auto">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>
                     
                      
                    </th>
                  </tr>
                </thead>
                <tbody id="miTablaVic">
                </tbody>
              </table>
            </div>
            
            
            <div class="3u 12u$(mobile)"> <label>Empresa</label></div>
            <div class="6u$ 12u$(mobile)"><input type="text" name="empresa" id="empresa" /></div>
            
            
            
            <div class="3u 12u$(mobile)" pattern="[A-Za-z]" > <label>Tipo de empresa</label></div>
            <div class="6u$ 12u$(mobile)"><input type="text" onkeypress="return alpha(event,letras)" name="tipoempresa" id="tipoempresa" /></div>
            
            
            
            <div class="3u 12u$(mobile)"> <label>Titular minero</label></div>
            <div class="6u$ 12u$(mobile)"><input type="text" onkeypress="return alpha(event,letras)" name="titularminero" id="titularminero" /></div>
            
            
            
            
            
            <div class="3u 12u$(mobile)"> <label>Concesión</label></div>
            <div class="6u$ 12u$(mobile)"><input type="text" onkeypress="return alpha(event,letras)"  name="concesion" id="concesion" /></div>
            
            
            
            <div class="3u 12u$(mobile)"> <label>Observaciones</label></div>
            <div class="6u$ 12u$(mobile)"><textarea style ="resize:none;" onkeypress="return alpha(event,letras)" rows="4" cols="4" name="observaciones" id="observaciones"></textarea></div>
            
            
            
            <div class="12u"><input type="submit" value="Guardar" /><a class="icon fa-download descargar" ></a></div> </div>
            
            
            
            
            
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
      
      <script type="text/javascript">
  <!--
  var letras =' ABCÇDEFGHIJKLMNÑOPQRSTUVWXYZabcçdefghijklmnñopqrstuvwxyzàáÀÁéèÈÉíìÍÌïÏóòÓÒúùÚÙüÜ'
  var numeros='1234567890'
  var signos='´'

  function alpha(e,allow) {
       var k;
       k=document.all?parseInt(e.keyCode): parseInt(e.which);
       return (allow.indexOf(String.fromCharCode(k))!=-1);
  }

  // -->
  </script>
  </body>
  </html>