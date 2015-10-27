<?php 
      $id = $_POST['idEliminar'];

      $link=mysqli_connect("localhost","root","admin","projecte");
      
      $sql= mysqli_query($link,"UPDATE usuarios SET  `estado`=0 WHERE `id_user`=$id;");

      
      // $res = mysqli_query($sql);

      if ( isset($sql) ){
            echo "Correcto";
            header("Location: configuracion-admin.php");
      } else{
            echo "Incorrecto";      
      }
            
      

?>

