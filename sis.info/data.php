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
<div  class="tools">
   <a href="reporteExcel.php"><div class="icon icon-down items-tools"> Descargar reporte</div></a>
</div>
<main class="data-container">
    <?php
    include ("funcion/conectarse.php");

    $query="SELECT * FROM data_disenos order by id_data";
    $resultado=$conexion->query($query);
    while($row=$resultado->fetch_assoc()){
        ?>

   <div class="data-container-item">
      <div class="top-data">
         <img src="<?php echo $row['diseno'] ?>" alt="" class="design-img">
      </div>
      <div class="bottom-data">
            <p class="design-name"><?php echo $row['nombre'] ?></p>
            <p class="design-designfor">Diseñado por <?php echo $row['asesor'] ?></p>
            <p class="design-zoom"><?php echo $row['width'] ?></p>
            <p class="design-seller"><?php echo $row['asesor']; ?></p>
         <div  class="tools">
            <a href="update_data.php?id=<?php echo $row['id_data'] ?>" class="data-edit"><div class="icon icon-pencil items-tools"></div></a>
<!--            <div class="icon icon-delete items-tools"></div>-->
         </div>
      </div>
   </div>

   <?php } ?>

</main>
</body>
</html>