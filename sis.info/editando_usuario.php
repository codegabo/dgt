<?php
include("funcion/conectarse.php");

$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$genero=$_POST['genero'];
$nacimiento=$_POST['nacimiento'];
$cargo=$_POST['cargo'];
$contra=$_POST['contra'];
$user=$_POST['usuario'];

$query="UPDATE user SET nombre_use ='$nombre', apellido_use='$apellido',genero_use ='$genero',fechanaci ='$nacimiento',cargo_use ='$cargo',usuario_use='$user',contra_use='$contra'  WHERE codigo='$codigo' ";
$resultado=$conexion->query($query);

if ($resultado>0){

	echo "
    <html>
    <head>
    <meta http-equiv='refresh' content='0; url=users.php'>
    <script>
    alert('Información actualizada');
    </script>
    </head>
    </html>";
}



?>
