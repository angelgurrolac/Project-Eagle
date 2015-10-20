<?php
session_start();  
$link=mysqli_connect("localhost","root","","projecte");

$contraactual = $_POST["contra-actual"];   
$nuevacontra = $_POST["nueva-contra"];
$confirmarcontra = $_POST["confirmar-contra"];

$pasA = sha1($contraactual);
$userContra = $_SESSION['nombre_user'];
echo $userContra;
echo $nuevacontra;
echo $confirmarcontra;
$result = mysqli_query($link, "SELECT * FROM usuarios WHERE nombre_user = '$userContra'");

//Validamos si el nombre del administrador existe en la base de datos o es correcto
if($row = mysqli_fetch_row($result))
{    
  // var_dump($row);
 if($row[5] == $pasA)
 {
  if ($nuevacontra == $confirmarcontra) {
      $newpass = sha1($nuevacontra); 
      // echo $newpass;
        $sql= mysqli_query($link,"UPDATE usuarios SET `password_encriptado`='$newpass';");
        if ( isset($sql) ){
          echo "Correcto";
          header("Location: configuracion.php");
        } else{
          echo "Incorrecto";  
        }

  }else{
      echo "error la nueva contraseña no coincide";     
  }
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