<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Registro</title>

<link rel="stylesheet" type="text/css" href="../recursos/css/estilo-login.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://www.modernizr.com/downloads/modernizr-latest.js"></script>
<script type="text/javascript" src="js/login-placeholder.js"></script>
</head>
<body>
    <img src="../recursos/images/logo_efectos.png" alt="Project Eagle" class="estilo-logo-login"  align="middle" float="inherit">
<form id="slick-login" method="post" action="registroc.php">
    <select name="tipo_usuario">
  <option value="admin">Administrador</option>
  <option value="paramedico">Paramédico</option>
  <option value="otro">Otro</option>
</select>
<input type="email" name="usuario" class="placeholder" placeholder="ejemplo@ejemplo.com"  pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>
<input type="password" name="contrasena" class="placeholder" placeholder="Contraseña"  size="30" required>
<input type="password" name="ccontrasena" class="placeholder" placeholder="Confirmar contraseña"  size="30" required>
<input type="submit" value="Registrar" name="commit">
    <a  class="estilo-a" href="index.php">Iniciar sesión</a>
</form>
</body> 
</html>