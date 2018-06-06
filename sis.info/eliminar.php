<?php
include("funcion/conectarse.php");
require_once("sesion.class.php");

$sesion = new sesion();
$usuario = $sesion->get("usuario");

if( $usuario == false )
{
    header("Location: cerrarsesion.php");
}
else {


    ?>
    <?PHP
    include("funcion/conectarse.php");
    $id = $_GET['id'];
    /*Se eliminan los datos de usuario segun el id*/

    $query = "DELETE FROM user WHERE codigo='$id'";
    $resultado = $conexion->query($query);


    if ($resultado > 0) {

        echo "
    <html>
    <head>
    <meta http-equiv='refresh' content='0; url=users.php'>
    <script>
    alert('Usuario Eliminado Con Exito');
    </script>
    </head>
    </html>";
    } else {

        echo "
    <html>
    <head>
    <meta http-equiv='refresh' content='0; url=users.php'>
    <script>
    alert('Error al Tratar de Eliminar el Usuario');
    </script>
    </head>
    </html>";
    }

}
?>


