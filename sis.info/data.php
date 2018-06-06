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
         <p class="design-name"><small><i>Diseño:</i> <?php echo $row['nombre'] ?></small></p>
         <p class="design-name"><small><i>Cliente:</i> <?php echo $row['cliente'] ?></small></p>
         <p class="design-designfor"><small><i>Diseñador:</i> <?php echo $row['asesor'] ?></small></p>
         <p class="design-zoom"><small><i>Anchura:</i> <?php echo $row['width'] ?></small></p>
         <p class="design-zoom"><small><i>Altura:</i> <?php echo $row['height'] ?></small></p>
         <p class="design-seller"><small><i>Asesor:</i> <?php echo $row['asesor']; ?></small></p>
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