<?php 
      include_once('../conexion.php');
      $id = $_POST['idEliminar'];

      $link=mysqli_connect("localhost","root","admin","projecte");
      
      $sql= mysqli_query($link,"UPDATE cuadrante SET `estado`=0 WHERE `cuadrante_id`=$id;");

      
      // $res = mysqli_query($sql);

      if ( isset($sql) ){
            echo "Correcto";
            header("Location: tabla-cuadrantes.php");
      } else{
            echo "Incorrecto";      
      }
            
      

?>

