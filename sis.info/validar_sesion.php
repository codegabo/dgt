

<?php
 require_once("sesion.class.php");

 $sesion = new sesion();
 
 if( isset($_POST["iniciar"]) )
 {
  $usuario = $_POST["usuarios"];
  $password = $_POST["contra"];
   
   
   if(validarUsuario($usuario,$password) == true)
   {     
     $sesion->set("usuario",$usuario);
     
     header("location: dashboard.php");
   }
   
 }
 
 function validarUsuario($usuario, $password)
 {
  include("funcion/conectarse.php");
  $consulta = "select contra_use from user where usuario_use = '$usuario' and contra_use= '$password'";
  $result = $conexion->query($consulta);
   
  
     $fila = $result->fetch_assoc();

     if( strcmp($password,$fila["contra_use"]) == 0 ){
       return true;     
     }       
     else{
       echo "<html>
           <head>
           <meta http-equiv='refresh' content='0; url=index.html'>
           </head>
           </html>";
      }           
  
}
?>
