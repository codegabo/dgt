<?php
include("funcion/conectarse.php");


$id_data=$_POST['id_data'];
$asesor=$_POST['asesor'];

$query="UPDATE data_disenos SET id_data = '$id_data', asesor ='$asesor' WHERE id_data='$id_data'";
$resultado=$conexion->query($query);

if ($resultado>0){

    echo "
    <html>
    <head>
    <meta http-equiv='refresh' content='0; url=data.php'>
    <script>
    alert('Diseño final actualizado');
    </script>
    </head>
    </html>";
}

