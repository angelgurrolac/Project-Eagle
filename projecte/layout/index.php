<?php 
    session_start();
    if (! empty($_SESSION["nombre"])){
        header("Location: inicio.php");
    }  
?>
        <!DOCTYPE html>
        <head>
        <meta charset="utf-8">
        <title>Inicio de sesión</title>
            
            <meta name="viewport" content="width=device-width, initial-scale=1" />
    		<link rel="stylesheet" href="../assets/css/login.css" />



        </head>
        <body>
            <!-- Main -->
            <div id="main">
              
                <section id="contact" class="two">
                    <div class="container">
                        <div class="row">
                            <div class="11u 12u$(mobile)"> </div>
                            <div class="1u$ 12u$(mobile)">
                        <input class="btn-registrar"type="button" value="Regístrate" style="background-color:#8C949C;" onClick=" window.location.href='usuario/registrar.html' ">
                            </div>
                            </div>
                        <header>
                            <img class="estilo-logo-login" src="../assets/images/Logo-reducido.png" alt="Project Eagle"  align="middle" >  
                        </header>
                        
                       <form method="post" action="usuario/login.php">
                            <div class="row">
                            <div class="3u 12u$(mobile)"> </div>
                            <div class="6u 12u$(mobile)"><input type="text" name="usuario" placeholder="Usuario" max="50" required /></div>
                            <div class="3u$ 12u$(mobile)"> </div>
                                <div class="3u 12u$(mobile)"> </div>
                            <div class="6u 12u$(mobile)"><input type="password" name="contrasena" placeholder="Contraseña" min="8" maxlength="10" required /></div>
                            <div class="3u$ 12u$(mobile)"> </div>
                                
                                <div class="3u 12u$(mobile)"> </div>
                            <div class="6u 12u$(mobile)"> 
                                <input id="iniciar"  type="submit" value="Iniciar sesión" name="commit"></div>
                                <label name="errorc"></label>
                            <div class="3u$ 12u$(mobile)"> </div>
                                
                                  <div class="4u 12u$(mobile)"> </div>
                            <div class="4u$ 12u$(mobile)"> 
                               
                                
                                <p class="olvidarc"> <label href="#" class="tooltip-right" data-tooltip="Comunicate con el Administrador.">¿Has olvidado la contraseña?</label></p>
                                </div>
                                <label name="errorc"></label>
                            <div class="3u$ 12u$(mobile)"> </div>
                                
                                
                                </div>
                           
                           
                            <div class="row">
                            <div class="3.5u 12u$(mobile)">  <a href="informacion.php" class="acerca" >Acerca de Project Eagle</a></div>
                            <div class="8.5u$ 12u$(mobile)">
                    
                            </div>
                            </div>
  
                        </form>   
                    </div>
                </section>
            </div>
       
              
        </body> 
        </html>
