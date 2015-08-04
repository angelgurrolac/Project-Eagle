<?php
session_start();
$conexion=mysqli_connect("127.0.0.1","root","admin","projecte");
//Revisar la conexion
if (mysqli_connect_errno())
{
    echo "No se puedo conectar al servidor MySQL: " . mysqli_connect_error();
}
else
{
    //echo "Conexion exitosa";
    
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    $consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
    $resultado = mysqli_query($conexion, $consulta);
    
    $filas = array();
    
    while($fila = $resultado->fetch_assoc())
    {
        $filas['usuario'][] = $fila;
    }
    //cuando solo tenemos una instruccion las llaves son opcionales
    if(count($filas)>0){
        header( 'Location: menu.html' );
        //echo "si";
    }
    else {
        header( 'Location: index.php' );
        //echo "no";
    }
       //header( 'Location: index.html' );
    echo json_encode($filas);
}
mysqli_close($conexion);
?>