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
         color:white;
         font-weight: bold;
         background: #f17c53;
         text-align: center;
      }
      .title{
         font-size:1.5em;  }
      .title-logo{
         height:8em;
         display: flex;
         align-content:center;
      }
   </style>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
   <tr>
      <th colspan="2" class="title-logo"><img src="http://localhost/web_design/PROYECTOS/Digital%20Global%20Textiles/sis.info/img/LOGO/small_logo.png" alt=""></th>
      <th colspan="6" class="title">Diseños aprobados por clientes</th>
   </tr>
    <tr>
        <td class="tr-title">Consecutivo</td>
        <td class="tr-title">Nombre diseño</td>
        <td class="tr-title">Cliente</td>
        <td class="tr-title">Ruta diseño</td>
        <td class="tr-title">Ruta modelo</td>
        <td class="tr-title">Asesor</td>
        <td class="tr-title">Width</td>
        <td class="tr-title">Height</td>
    </tr>
    <?php

    $sql=mysql_query("select * from data_disenos");
    while($res=mysql_fetch_array($sql)) {

        $codigo=$res['id_data'];
        $cliente=$res['cliente'];
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
          <td class="td-content"><?php echo $cliente; ?></td>
          <td class="td-content"><?php echo $diseno; ?></td>
          <td class="td-content"><?php echo $modelo; ?></td>
          <td class="td-content"><?php echo $asesor; ?></td>
          <td class="td-content"><?php echo $width; ?></td>
          <td class="td-content"><?php echo $height; ?></td>
       </tr>
   <?php
    }
    ?>



</table>
</body>
</html>
