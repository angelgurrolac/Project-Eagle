<?php 
      $id = $_POST['idEliminar'];

      $link=mysqli_connect("localhost","root","admin","projecte");
      
      $sql= mysqli_query($link,"UPDATE reporte_dron SET  `estado`=0 WHERE `id_dron`=$id;");

      
      $res = mysqli_query($sql);

      if ( isset($sql) ){
            echo "Correcto";
            header("Location: tabla-reporte-drones.php");
      } else{
            echo "Incorrecto";      
      }
            
      

?>

