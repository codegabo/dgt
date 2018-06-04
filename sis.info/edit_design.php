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

$id=$_GET['id'];



$query="SELECT * FROM disenos where id_diseno='$id'";
$resultado=$conexion->query($query);
$row=$resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <title>Title</title>
   <meta name="title" content="Gabo's Web Page">
   <meta name="description" content="Gabo's Web Page the best as is possible">
   <meta name="author" content="Juan Gabriel Mogollón Martínez">
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="container-supreedit">
<?php require("funcion/conectarse.php");
$consulta="SELECT * FROM user where usuario_use = '$usuario'";
$resultado=$conexion->query($consulta);
while($row1=$resultado->fetch_assoc()) {
//echo $row1['nombre_use']
?>
   <p class="input-item-edit"><?php echo $row['nombre_dis']; ?></p> <span class="clarification">Diseño Representativo</span>
   <div class="img-edit-container">
      <div class="tags" id="tags">
         <p class="tags-item"><?php echo $row['etiquetas']; ?></p>
      </div>
      <img src="<?php echo $row['ruta']; ?>" alt="" class="design-img edits">
      <a href="edit_design.php">
         <div class="icon icon-pencil edit-design"></div>
      </a>
   </div>
   <div class="variant-container">
      <fieldset class="design-fieldset-active" id="design-fieldset">
         <form method="post" action="fun_categoria.php" enctype="multipart/form-data" class="design-form" autocomplete="off">
            <label for="PDFuploadfile" class="PDFupload-form-label PDFupload-form-label-file" id="PDFupload-form-label-file">
               <div class="PDFupload-form-label-file-icon">
                  <img src="img/icons/load_file-icon.png" alt="">
               </div>
               Large size
            </label>
            <input type="file" id="PDFuploadfile" class="PDFupload-form-item" name="Img">
            <label for="PDFuploadfile" class="PDFupload-form-label PDFupload-form-label-file" id="PDFupload-form-label-file">
               <div class="PDFupload-form-label-file-icon">
                  <img src="img/icons/load_file-icon.png" alt="">
               </div>
               Thumb size
            </label>
            <input type="file" id="PDFuploadfile" class="PDFupload-form-item" name="Img2">
            <label for="" class="create-user-label">
               <h2 class="create-user-label-text create-user-label-text-newCategorie">Nombre</h2>
               <input type="text" id="" class="create-user-input" name="nombre">
            </label>
            <label for="" class="create-user-label">
               <h2 class="create-user-label-text create-user-label-text-newCategorie">Diseñador</h2>
               <input type="text" id="" class="create-user-input" name="disenador">
            </label>
            <label for="" class="create-user-label">
               <h2 class="create-user-label-text create-user-label-text-newCategorie">Caracteristicas</h2>
               <input type="text" id="" class="create-user-input" name="caracteristicas">
            </label>

            <label for="" class="create-user-label">
               <h2 class="create-user-label-text create-user-label-text-newCategorie">Etiquetas</h2>
               <input type="text" id="" class="create-user-input" name="etiquetas">
            </label>


            <input type="text" name="disenopadre" value="<?php echo $row['id_diseno']; ?>">
            <input type="text" name="tipo" value="variant">

            <input type="submit" class="user-form-button-newCategorie user-form-button-newCategorie-designs" id="user-form-button-pdf" name="Crear_diseno" value="Crear">
         </form>
      </fieldset>
   </div>
   <section class="variant-list">
  <?php
    $query2="SELECT * FROM disenos WHERE id_diseno_padre = '$id' ORDER BY id_diseno desc";
    $resultado2=$conexion->query($query2);
    while($row2=$resultado2->fetch_assoc()){
        ?>
      <div class="variant-card">
         <img src="<?php echo $row2['ruta']; ?>">
         <p class="clarification"><?php echo $row2['nombre_dis']; ?></p>
         <div class="tools">
            <div class="icon icon-pencil items-tools"></div>
            <div class="icon icon-delete items-tools"></div>
         </div>
      </div>

<?php } ?>
   </section>
</div>
</body>
</html>
<?php } }?>