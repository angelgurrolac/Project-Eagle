<?php 
      include_once('../conexion.php');
      $id = $_POST['idEliminar'];

      require_once '../conexion.php'; 
      
      $sql= mysqli_query($link,"UPDATE dron SET  `estatus`=0 WHERE `id_dron`=$id;");

      
      // $res = mysqli_query($sql);

      if ( isset($sql) ){
            echo "Correcto";
            header("Location: tabla-drones.php");
      } else{
            echo "Incorrecto";      
      }
            
      

?>

