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

    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>DGT Dashboard</title>
        <meta name="title" content="Digital Global Textiles Dashboard">
        <meta name="description" content="Digital Global Textiles Dashboard">
        <meta name="author" content="Juan Gabriel Mogollón Martínez">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/estilos.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bowser/1.9.4/bowser.min.js"></script>
    </head>
<body>
           <table class="users" id="table"
                  data-toggle="table"

                  data-search="true"

                  data-filter-control="true"

                  data-click-to-select="true"
                  data-toolbar="#toolbar">
              <thead>
              <tr>
                 <th data-field="cod" data-filter-control="input" data-sortable="true">ID Usuario</th>
                 <th data-field="nombre" data-filter-control="input" data-sortable="true">Nombre</th>
                 <th data-field="apellido" data-filter-control="input" data-sortable="true">Apellido</th>
                 <th data-field="cargo" data-filter-control="select" data-sortable="true">Cargo</th>
                 <th data-field="login" data-filter-control="input" data-sortable="true">Fecha/Hora Log In</th>
                 <th data-field="navegador" data-filter-control="select" data-sortable="true">Navegador</th>
              </tr>
              </thead>
              <tbody>

              <?php require("funcion/conectarse.php");
              $consulta = "SELECT * FROM login_data ORDER BY hora_inicio_sesion DESC";
              $resultado = $conexion->query($consulta);
              while ($row1 = $resultado->fetch_assoc()) {
                  ?>
                 <tr class="table-content">
                    <td><?php echo $row1['cod_usu']; ?> </td>
                    <td><?php echo $row1['nombre_usu']; ?></td>
                    <td><?php echo $row1['apelli_usu']; ?></td>
                    <td><?php echo $row1['cargo_usu']; ?></td>
                    <td><?php echo $row1['hora_inicio_sesion'] ?></td>
                    <td><?php echo $row1['navega_usu']; ?></td>
                 </tr>

                  <?php
              }
              ?>
              </tbody>
           </table>

</body>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.0/bootstrap-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/editable/bootstrap-table-editable.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/extensions/filter-control/bootstrap-table-filter-control.js"></script>

    <script !src="">
        //exporte les données sélectionnées
        var $table = $('#table');
        $(function () {
            $('#toolbar').find('select').change(function () {
                $table.bootstrapTable('refreshOptions', {
                    exportDataType: $(this).val()
                });
            });
        })

        var trBoldBlue = $("table");

        $(trBoldBlue).on("click", "tr", function (){
            $(this).toggleClass("bold-blue");
        });
    </script>
</html>
    <?php
}
?>