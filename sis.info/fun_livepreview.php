<?php
include("funcion/conectarse.php");


if ( !empty($_POST)) {
    // keep track validation errors
    $disenoError = null;
    $modeloError = null;
    $asesorError = null;
    $nombreError = null;
    $clienteError = null;
    $telaError = null;
    $prodError = null;
    $comentariosError = null;

    $diseno = $_POST['diseno'];
    $modelo = $_POST['modelo'];
    $asesor = $_POST['asesor'];
    $nombre = $_POST['nombre'];
    $cliente= $_POST['cliente'];
    $tela = $_POST['tela'];
    $prod = $_POST['prod'];
    $comentarios = $_POST['comentarios'];

    $valid = true;

    if ($valid) {
        $sql = "INSERT INTO data_disenos (diseno,modelo,asesor,nombre,cliente,tela,tipo_prod,comentarios) values('$diseno','$modelo','$asesor','$nombre','$cliente','$tela','$prod','$comentarios')";
        $resultado=$conexion->query($sql);
        if ($resultado>0) {
            echo "
    <html>
    <head>
    <meta http-equiv='refresh' content='0; url=live_design.php'>
    <script>
    alert('Diseño final registrado');
    </script>
    </head>
    </html>";
        }
    }
}