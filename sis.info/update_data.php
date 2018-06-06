<?php
$id=$_GET['id'];
include("funcion/conectarse.php");


$query="SELECT * FROM data_disenos where id_data='$id'";
$resultado=$conexion->query($query);
$row=$resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registros</title>
    <meta name="title" content="Gabo's Web Page">
    <meta name="description" content="Gabo's Web Page the best as is possible">
    <meta name="author" content="Juan Gabriel Mogollón Martínez">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<main class="data-container">
    <form action="editando_data.php" method="post" enctype="multipart/form-data" autocomplete="off">
        <div class="data-container-item">
            <div class="top-data">
                <img src="<?php echo $row['diseno'] ?>" alt="" class="design-img">
            </div>
            <div class="bottom-data">
               <p class="design-name"><small><i>Diseño:</i> <?php echo $row['nombre'] ?></small></p>
               <p class="design-name"><small><i>Cliente:</i> <?php echo $row['cliente'] ?></small></p>
               <p class="design-designfor"><small><i>Diseñador:</i> <?php echo $row['asesor'] ?></small></p>
               <p class="design-zoom"><small><i>Anchura:</i> <?php echo $row['width'] ?></small></p>
               <p class="design-zoom"><small><i>Altura:</i> <?php echo $row['height'] ?></small></p>
               <p class="design-seller"><small><i>Asesor:</i></small></p>
               <input  type="hidden" name="id_data" value="<?php echo $row['id_data']; ?>">
               <input class="design-seller edit-name-category" name="asesor" value="<?php echo $row['asesor']; ?>">
                <div  class="tools">
                    <button type="submit" value=""  class="icon icon-pencil items-tools"></button>
<!--                    <div class="icon icon-delete items-tools"></div>-->
                </div>
            </div>
        </div>
    </form>



</main>
</body>

</html>