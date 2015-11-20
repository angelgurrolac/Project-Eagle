
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <link rel="shortcut icon" href="../../assets/images/logo-favicon.ico" />

    <link rel="stylesheet" type="text/css" href="../../assets/css/login.css" />
    

    
</head>

<body>
 <!-- Main -->
 <div id="main">
  
    <section id="contact" class="two">
        <div class="container">
            <div class="row">
                <div class="11u 12u$(mobile)"> </div>
                <div class="1u$ 12u$(mobile)">
                  <input class="btn-registrar"  style="background-color:#8C949C;"type="button" value="Iniciar sesión" onClick=" window.location.href='../index.php' ">
              </div>
          </div>
          <header>
            <img class="estilo-logo-login" src="../../assets/images/logo_efectos.png" alt="Project Eagle"  align="middle" >  
        </header>
        
        <form method="post" action="registroc.php">
            <div class="row">
                
                
                <div class="3u 12u$(mobile)"> </div>
                <div class="6u 12u$(mobile)"><input  onkeypress="return alpha(event,letras)" max="70" name="nombres" type="text" placeholder="Nombres"  required /></div>
                <div class="3u$ 12u$(mobile)"> </div>
                
                <div class="3u 12u$(mobile)"> </div>
                <div class="6u 12u$(mobile)">    
                    <input  name="apellidop" type="text" onkeypress="return alpha(event,letras)" max="20" class="txt-datosr" placeholder="Apellido Paterno"  required /></div>
                    <div class="3u$ 12u$(mobile)"> </div>
                    
                    
                    <div class="3u 12u$(mobile)"> </div>
                    <div class="6u 12u$(mobile)"><input  max="20" name="apellidom" type="text"  onkeypress="return alpha(event,letras)" class="txt-datosr" placeholder="Apellido Materno"  required /></div>
                    <div class="3u$ 12u$(mobile)"> </div>
                
                <div class="3u 12u$(mobile)"> </div>
                <div class="6u 12u$(mobile)"><input max="50" name="usuario" type="text" placeholder="Nombre de usuario"  required /></div>
                <div class="3u$ 12u$(mobile)"> </div>
                    
                    <div class="3u 12u$(mobile)"> </div>
                    <div class="6u 12u$(mobile)">   <input pattern=".{8,}" title="La contraseña debe contener más de 8 caracteres." type="password" name="contrasena" class="txt-datosr tooltip-right"  placeholder="Contrasena"  size="30" required /></div>
                    <div class="3u$ 12u$(mobile)"> </div>
                    
                    
                    <div class="3u 12u$(mobile)"> </div>
                    <div class="6u 12u$(mobile)"> 
                        <input id="registrar"  type="submit" value="Registrar" name="commit"></div>
                        <label name="errorc"></label>
                        <div class="3u$ 12u$(mobile)"> </div>
                        
                        
                    </div>
                    
                    
                    <div class="row">
                        <div class="3.5u 12u$(mobile)">  <a class="acerca" >Acerca de Project Eagle</a></div>
                        <div class="8.5u$ 12u$(mobile)">
                            
                        </div>
                    </div>
                    
                </form>   
            </div>
        </section>
    </div>
    
    //fin
    
    
    
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