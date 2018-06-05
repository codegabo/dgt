<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=registro_diseños_aprobados.xls");

$conexion=mysql_connect("localhost", "root", "");
mysql_select_db("textiles",$conexion);

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de diseños</title>
   <style>
      .tr-title{
         color:#000000;
         font-weight: bold;
         background: #b3b2b2;
      }
      .tr-content:nth-child(odd){
         background: #ffff00;
      }
   </style>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
    <tr class="tr-title">
        <td>Consecutivo</td>
        <td>Nombre diseño</td>
        <td>Ruta diseño</td>
        <td>Ruta modelo</td>
        <td>Asesor</td>
        <td>Width</td>
        <td>Height</td>
    </tr>
    <?php

    $sql=mysql_query("select * from data_disenos");
    while($res=mysql_fetch_array($sql)) {

        $codigo=$res['id_data'];
        $nombre=$res['nombre'];
        $asesor=$res['asesor'];
        $diseno=$res['diseno'];
        $modelo=$res['modelo'];
        $width=$res['width'];
        $height=$res['height'];
        ?>
       <tr class="tr-content">
          <td class="td-content"><?php echo $codigo; ?></td>
          <td class="td-content"><?php echo $nombre; ?></td>
          <td class="td-content"><?php echo $asesor; ?></td>
          <td class="td-content"><?php echo $diseno; ?></td>
          <td class="td-content"><?php echo $modelo; ?></td>
          <td class="td-content"><?php echo $width; ?></td>
          <td class="td-content"><?php echo $height; ?></td>
       </tr>
   <?php
    }
    ?>



</table>
</body>
</html>
