<!DOCTYPE html>
<?php

include("funcion/conectarse.php");

require_once("sesion.class.php");

$sesion = new sesion();
$usuario = $sesion->get("usuario");

if( $usuario == false )
{
    header("Location: cerrarsesion.php");
}
else
{


include_once 'pdf/config.inc.php';
if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "pdf/archivos/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
            $titulo= $_POST['titulo'];
            $descri= $_POST['descripcion'];
            $db=new Conect_MySql();
            $sql = "INSERT INTO archivos_pdf(titulo,descripcion,tamanio,tipo,nombre_archivo) VALUES('$titulo','$descri','$tamanio','$tipo','$nombre')";
            $query = $db->execute($sql);
            if($query){
                echo "
                <html>
                <head>
                <meta http-equiv='refresh' content='0; url=news.php'>
                <script>
                alert('Archivo Guardado');
                </script>
                </head>
                </html>";
            }
        } else {
            echo "Error";
        }
    }
}
?>

<html lang="es">
<head>
   <meta charset="UTF-8">
   <title>Lo Último</title>
   <meta name="title" content="Digital Global Textiles">
   <meta name="description" content="Digital Global Textiles">
   <meta name="author" content="Juan Gabriel Mogollón Martínez">
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<main class="all-content-container" id="all-content-container">
   <?php require("funcion/conectarse.php");
    $consulta="SELECT * FROM user where usuario_use = '$usuario'";
    $resultado=$conexion->query($consulta);
    while($row1=$resultado->fetch_assoc()) {
?>
    <?php
    if ( $row1['cargo_use'] == 'Administrador'){
       echo '
   <fieldset class="PDFupload">
         <form method="post" action="" enctype="multipart/form-data"class="PDFupload-form" autocomplete="off" >
            <div class="more-form" id="more-form">
               <label for="PDFtitle" class="PDFupload-form-label">
                  <h2 class="create-user-label-text pdftext">Titulo</h2>
                  <input name="titulo" type="text" id="PDFtitle" class="PDFupload-form-item" required>
               </label>
               <label for="PDFdescription" class="PDFupload-form-label">
                  <h2 class="create-user-label-text pdftext">Descripción</h2>
                  <textarea  name="descripcion" type="text" id="PDFdescription" class="PDFupload-form-item PDFupload-form-item-description" required>
                  </textarea>
               </label>
               <p>Recuerda: Los nombres de los archivos .PDF no deben contener espacios ni caracteres especiales</p>
            </div>
            <label for="PDFuploadfile" class="PDFupload-form-label PDFupload-form-label-file" id="PDFupload-form-label-file">
               <div class="PDFupload-form-label-file-icon">
                  <img src="img/icons/load_file-icon.png" alt="">
               </div>
               CARGAR ARCHIVO
            </label>
            <input type="file" name="archivo" id="PDFuploadfile" class="PDFupload-form-item" accept=" application/pdf" required>
            <input  name ="subir"type="submit" class="user-form-button-pdf" id="user-form-button-pdf" value="Subir PDF">
         </form>
      </fieldset>';
      }?>
      <div class="section-container">
         <section class="files" id="files">
             <?php
             $db=new Conect_MySql();
             $sql = "select*from archivos_pdf";
             $query = $db->execute($sql);
             while($datos=$db->fetch_row($query)){ ?>


                <details class="container-list-files">
                   <summary id="summary" class="container-list-files-title">
                      <h5 class="title-big"><?php echo $datos['titulo'];?></h5>
                   </summary>
                   <label for="preview-icon" id="label-preview-icon" class="label-preview-icon">
                  <?php
                  if ( $row1['cargo_use'] == 'Administrador') {
                      echo '<a href="eliminar_pdf.php?id=' . $datos['id_documento'] . '" ><div class="icon icon-delete"></div></a>';
                  } ?>

      <input id="preview-icon" class="preview-icon" value="<?php echo $datos['nombre_archivo'];?>" readonly/>
                      <br><a href="https://docs.google.com/gview?url=https://www.digitalglobaltextiles.com/pdf/archivos/<?php echo $datos['nombre_archivo'];?>&embedded=true" target="_blank" class="preview-icon" style="text-decoration: none;">Opción 2</a>
                   </label>
                      <!--<input type="button" value="Abrir pdf" onclick="window.open('https://www.digitalglobaltextiles.com/recibo.pdf')" />--><!--<a href="#" onclick="window.open('https://www.digitalglobaltextiles.com/recibo.pdf')">Abrir archivo pdf</a>--><!--<img src="img/icons/view-icon.png" alt="" class="preview-icon">--><!--<iframe src="btn-comentario.php?id='.$data['codigo_est'].'" name="window" marginwidth="0" scrolling="yes" style="border:0px solid transparent;width:70%;height:50%;margin-left:15%;"></iframe>--><!--<iframe src="http://docs.google.com/gview?url=https://www.digitalglobaltextiles.com/recibo.pdf&embedded=true" class="pdf-iframe" frameborder="0"></iframe>-->

                   <p class="container-list-files-text"><?php echo $datos['descripcion']; ?></p>
                </details>

             <?php } ?>


         </section>
         <section class="pdf-viewer-container" id="pdf-viewer-container">
            <!--<iframe src="" frameborder="0" class="pdf-viewer-iframe"></iframe>-->
         </section>
      </div>
   </main>
</body>
<script src="js/openPDF.js"></script>
<script>
   let boton = document.getElementById('PDFupload-form-label-file'),
       moreform = document.getElementById('more-form'),
   boton1 = document.getElementById('user-form-button-pdf');
   boton.addEventListener('click', () => {
      moreform.classList.add("more-form-active");
      boton1.classList.add("user-form-button-pdf-active");
   })

</script>
</html>
<?php } }?>