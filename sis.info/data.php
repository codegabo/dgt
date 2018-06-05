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
    <?php
    include("funcion/conectarse.php");
    $query2="SELECT * FROM data_disenos";
    $resultado2=$conexion->query($query2);
    while($row2=$resultado2->fetch_assoc()){
    ?>
   <div class="data-container-item">
      <div class="top-data">
         <img src="<?php echo $row2['diseno'] ?>" alt="" class="design-img">
         <div class="icon icon-pencil edit-design"></div>
      </div>
      <div class="bottom-data">
         <p class="design-name"><?php echo $row2['nombre'] ?></p>
         <p class="design-designfor">Diseñado por <?php echo $row2['asesor'] ?></p>
         <p class="design-zoom"><?php echo $row2['width'] ?></p>
         <p class="design-seller"><?php echo $row2['asesor'] ?></p>
         <div class="tools">
            <div class="icon icon-down items-tools"></div>
            <div class="icon icon-pencil items-tools"></div>
            <div class="icon icon-delete items-tools"></div>
         </div>
      </div>
   </div>
   <?php } ?>

</main>
</body>
</html>