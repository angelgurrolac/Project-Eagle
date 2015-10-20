<?php 
      include_once('../conexion.php');
      $id = $_POST['idEliminar'];

      $link=mysqli_connect("localhost","root","","projecte");
      
      $sql= mysqli_query($link,"UPDATE reporte SET  `no_decesos`=5 WHERE `id_reporte`=$id;");

      
      // $res = mysqli_query($sql);

      if ( isset($sql) ){
            echo "Correcto";
            header("Location: tabla-reportes.php");
      } else{
            echo "Incorrecto";      
      }
            
      

?>

