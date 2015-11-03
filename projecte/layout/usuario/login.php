<?php
/****************************************
**establecemos conexion con el servidor.
**nombre del servidor: localhost.
**Nombre de usuario: root.
**Contraseña de usuario: root.
**Si la conexion fallara mandamos un msj 'ha fallado la conexion'**/
// mysql_connect('localhost','root','root')or die ('Ha fallado la conexión: '.mysql_error());
$link=mysqli_connect("localhost","root","admin","projecte");

/*Luego hacemos la conexión a la base de datos. 
**De igual manera mandamos un msj si hay algun error*/
// mysql_select_db('db_blog')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
 
/*caturamos nuestros datos que fueron enviados desde el formulario mediante el metodo POST
**y los almacenamos en variables.*/
$usuario = $_POST["usuario"];   
$password = $_POST["contrasena"];

/*Consulta de mysql con la que indicamos que necesitamos que seleccione
**solo los campos que tenga como nombre_administrador el que el formulario
**le ha enviado*/
$pas = sha1($password);
$result = mysqli_query($link, "SELECT * FROM usuarios WHERE nombre_user = '$usuario'");

//Validamos si el nombre del administrador existe en la base de datos o es correcto
if($row = mysqli_fetch_row($result))
{    
    // printf($row) ;
    // var_dump($row);
//Si el usuario es correcto ahora validamos su contraseña
 if($row[5] == $pas)
 {
  //Creamos sesión
  session_start();
  $_SESSION['tipo_usuario'] = $row[11];
  $_SESSION['idUsuario'] = $row[0]; 
  $_SESSION['nombre'] = $row[2]; 
  $_SESSION['apellido'] = $row[3]; 
  //Almacenamos el nombre de usuario en una variable de sesión usuario
  $_SESSION['nombre_user'] = $usuario; 
  // var_dump($_SESSION['nombre_user']); 
  //Redireccionamos a la pagina: index.php
  header("Location: ../inicio.php");  
 }
 else
 {
  //En caso que la contraseña sea incorrecta enviamos un msj y redireccionamos a login.php
    echo "error contraseña"; 
    // echo $pas;            
 }
}
else
{
 //en caso que el nombre de administrador es incorrecto enviamos un msj y redireccionamos a login.php  
 echo "error usuario";         
}

//Mysql_free_result() se usa para liberar la memoria empleada al realizar una consulta
mysqli_free_result($result);

/*Mysql_close() se usa para cerrar la conexión a la Base de datos y es 
**necesario hacerlo para no sobrecargar al servidor, bueno en el caso de
**programar una aplicación que tendrá muchas visitas ;) .*/
mysqli_close($link);
?>