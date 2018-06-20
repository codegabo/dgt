<?php
require ("funcion/conectarse.php");

if ( !empty($_POST)) {
$nombreError = null;
$apellidoError = null;
$generoError = null;
$nacimientoError = null;
$cargoError = null;
$usuarioError = null;
$contraError = null;

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$genero=$_POST['genero'];
$nacimiento=$_POST['nacimiento'];
$cargo=$_POST['cargo'];
$usuario=$_POST['usuario'];
$contra=$_POST['contra'];
$fecha = date("Y/m/d");
$hora =date("g:i:s");

    $valid = true;

    if ($valid) {
        $sql = "INSERT INTO user(nombre_use,apellido_use,genero_use,fechanaci,cargo_use,usuario_use,contra_use,fecha,hora_use) 
VALUES ('$nombre','$apellido','$genero','$nacimiento','$cargo','$usuario','$contra','$fecha','$hora')";
        $resultado=$conexion->query($sql);
        if ($resultado>0) {
            echo "
    <html>
    <head>
    <meta http-equiv='refresh' content='0; url=users.php'>
    <script>
    alert('Usuario agregado');
    </script>
    </head>
    </html>";
        }
    }
}

?>

 </body>
</html>