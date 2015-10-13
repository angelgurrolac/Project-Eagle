<?php
 
function Conectarse() 
{ 
   $link=mysqli_connect("localhost","root","");
   if (!($link)) 
   { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } else{

   }
   if (!mysqli_select_db($link,"projecte")) 
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 

   return $link; 



} 

$link=Conectarse();
mysqli_query($link,"SET NAMES 'utf8'");




?> 