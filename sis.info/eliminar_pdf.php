<?php
/**
 * Created by PhpStorm.
 * User: TOSHIBA
 * Date: 7/10/2018
 * Time: 10:40 PM
 */

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

    $query = "DELETE FROM archivos_pdf WHERE id_documento='$id';";
    $resultado = $conexion->query($query);


    if ($resultado > 0) {

        echo "
    <html>
    <head>
    <meta http-equiv='refresh' content='0; url=news.php'>
    <script>
    alert('Archivo PDF eliminado');
    </script>
    </head>
    </html>";
    } else {

        echo "
    <html>
    <head>
    <meta http-equiv='refresh' content='0; url=categories.php'>
    <script>
    alert('Ha ocurrido un error al eliminar el diseño, por favor intente nuevamente o contacte con su administrador');
    </script>
    </head>
    </html>";
    }

}
?>


