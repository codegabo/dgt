<?php
include("funcion/conectarse.php");


if ( !empty($_POST)) {
    // keep track validation errors
    $disenoError = null;
    $modeloError = null;
    $widthError = null;
    $asesorError = null;
    $heightError = null;
    $nombreError = null;

    $diseno = $_POST['diseno'];
    $modelo = $_POST['modelo'];
    $width = $_POST['width'];
    $asesor = $_POST['asesor'];
    $height = $_POST['height'];
    $nombre = $_POST['nombre'];

    $valid = true;

    if ($valid) {
        $sql = "INSERT INTO data_disenos (diseno,modelo,width,asesor,height,nombre) values('$diseno','$modelo','$width','$asesor','$height','$nombre')";
        $resultado=$conexion->query($sql);
        if ($resultado>0) {
            echo "
    <html>
    <head>
    <meta http-equiv='refresh' content='0; url=live_design.php'>
    <script>
    alert('Diseño agregado');
    </script>
    </head>
    </html>";
        }
    }
}