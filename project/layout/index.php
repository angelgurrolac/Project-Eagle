<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>

<link rel="stylesheet" type="text/css" href="../recursos/css/estilo-login.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://www.modernizr.com/downloads/modernizr-latest.js"></script>
<script type="text/javascript" src="../recursos/js/login-placeholder.js"></script>
</head>
<body>
    <img src="../recursos/images/logo_efectos.png" alt="Project Eagle" class="estilo-logo-login"  align="middle" float="inherit">
<form id="slick-login" method="post" action="login.php">
    
<input type="email" name="usuario" class="placeholder" placeholder="ejemplo@ejemplo.com"  pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>
<input type="password" name="contrasena" class="placeholder" placeholder="Contraseña"   size="30" required >
<input type="submit" value="Login" name="commit">
    <a  class="estilo-a" href="registrar.php">Regístrate</a>
  
</form>
      
</body> 
</html>