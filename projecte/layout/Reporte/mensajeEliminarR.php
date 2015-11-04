<?php 
       require_once('../conexion.php');
      $id = $_POST['idEliminar'];

       
      
      $sql= mysqli_query($link,"UPDATE reporte SET  `estado`=0 WHERE `id_reporte`=$id;");

      
      // $res = mysqli_query($sql);

      if ( isset($sql) ){
            echo "Correcto";
            header("Location: tabla-reportes.php");
      } else{
            echo "Incorrecto";      
      }
            
      

?>

