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
    <?php
    include("funcion/conectarse.php");


    if (isset($_POST["crear"])) {
        if ((
            ($_FILES["Imagen"] ["type"] == "image/jpg") ||
            ($_FILES["Imagen"] ["type"] == "image/png") &&
            ($_FILES["Imagen"] ["size"] < 2000000)
        )) {
            $titulo = $_POST["titulo"];
            $fotod = $_POST['titulo'];

            /*Guardar foto*/
            $ruta = 'img_categoria';
            $archivo = $_FILES['Imagen'] ['tmp_name'];
            $nombreArchivo = $_FILES['Imagen'] ['name'];
            move_uploaded_file($archivo, $ruta . '/' . $fotod . ".png");
            $ruta = $ruta . '/' . $fotod . ".png";
            $sql = "INSERT INTO categoria (titulo,ruta) VALUES ('$titulo','$ruta');";
            $resultado = $conexion->query($sql);
            if ($resultado > 0) {
                echo "
    <html>
    <head>
    <meta http-equiv='refresh' content='0; url=categories.php'>
    <script>
    alert('Categoria Creada');
    </script>
    </head>
    </html>";
            }
        } else {

            echo "
	<script language='javascript'>
	alert('Solo se Admiten Imagenc Con Formato PNG, no deben ser mayor a 2MB');
	window.location.href='categories.html';
	</script>
    ";

        }
    }

    if (isset($_POST["Editar_cat"])) {
        if ((
            ($_FILES["Imagen"] ["type"] == "image/jpg") ||
            ($_FILES["Imagen"] ["type"] == "image/png") &&
            ($_FILES["Imagen"] ["size"] < 2000000)
        )) {
            $id = $_POST['id'];
            $titulo_cat = $_POST['titulo'];
            $fotod = $_POST['Imagen'];
            $ruta = 'img_categoria';
            $archivo = $_FILES['Imagen'] ['tmp_name'];
            $nombreArchivo = $_FILES['Imagen'] ['name'];
            move_uploaded_file($archivo, $ruta . '/' . $fotod . ".png");
            $ruta = $ruta . '/' . $fotod . ".png";
            $query = "UPDATE categoria SET titulo='$titulo_cat', ruta='$ruta' WHERE id_imagen='$id' ";
            $resultado = $conexion->query($query);
            if ($resultado > 0) {
                echo "
    <html>
    <head>
    <meta http-equiv='refresh' content='0; url=categories.php'>
    <script>
    alert('Categoria  Actualizada ');
    </script>
    </head>
    </html>";
            }
        } else {

            echo "
	<script language='javascript'>
	alert('Solo se Admiten Imagenc Con Formato PNG, no deben ser mayor a 2MB');
	window.location.href='categories.html';
	</script>
    ";

        }
    }

    if (isset($_POST["Crear_diseno"])) {

        $rutas = 'img_disenos';
        $rutas2 = 'img_disenos';
        $categoria = $_POST['categoria'];
        $nombre_dis = $_POST['nombre'];
        $disenador = $_POST['disenador'];
        $caracteristicas = $_POST['caracteristicas'];
        $etiquetas = $_POST['etiquetas'];
        $tipo = $_POST['tipo'];
        $disenopadre = $_POST['disenopadre'];
        $rutas = $rutas . '/' . $_POST['nombre'] . "-thumb.jpg";
        $rutas2 = $rutas2 . '/' . $_POST['nombre'] . "-large.jpg";


        $sql = "INSERT INTO disenos (id_categoria,id_diseno_padre,nombre_dis,disenador,caracteristicas,etiquetas,tipo,ruta,ruta2) VALUES ('$categoria','$disenopadre','$nombre_dis','$disenador','$caracteristicas','$etiquetas','$tipo','$rutas','$rutas2')";
        $resultado = $conexion->query($sql);
        if ($resultado > 0) {
            echo "
    <html>
    <head>
    <meta http-equiv='refresh' content='0; url=categories.php'>
    <script>
    alert('Diseño agregado');
    </script>
    </head>
    </html>";
        }
    }
}