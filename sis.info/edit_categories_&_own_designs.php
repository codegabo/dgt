<?php
$id=$_GET['id'];
include("funcion/conectarse.php");


$query="SELECT * FROM categoria where id_imagen='$id'";
$resultado=$conexion->query($query);
$row=$resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <title>Editar Diseño</title>
   <meta name="title" content="Gabo's Web Page">
   <meta name="description" content="Gabo's Web Page the best as is possible">
   <meta name="author" content="Juan Gabriel Mogollón Martínez">
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="css/estilos.css">
   <script src="js/jquery-3.3.1.js"></script>
   <script src="js/dotdotdot.js" type="text/javascript"> </script>
</head>
<body>
<div class="title-edit-container">
   <div class="design">
      <form method="post" action="fun_categoria.php" enctype="multipart/form-data">
         <h1 class="design-title" >
            <input type="text" value="<?php echo $row['titulo']; ?>" name="titulo">
         </h1>
         <input type="hidden" name="id" value="<?php echo $row['id_imagen']; ?>">
         <button class="icon icon-pencil edit-design-card" id="button-newCategorie" type="submit" name="Editar_cat" ></button>
         <div class="design-image" >
            <img src=" <?php echo $row['ruta'] ?>"/>
         </div>
      </form>
   </div>


   <button class="add-users add-users-design " id="add-users-design">
      <img  src="img/icons/add-icon.png" class="add-users-icon"/><p>Agregar diseño</p>
   </button>
</div>
<fieldset class="design-fieldset" id="design-fieldset">
   <form action="" class="design-form">
      <label for="PDFuploadfile" class="PDFupload-form-label PDFupload-form-label-file" id="PDFupload-form-label-file">
         <div class="PDFupload-form-label-file-icon">
            <img src="img/icons/load_file-icon.png" alt="">
         </div>
        Large Size
      </label>
      <input type="file" id="PDFuploadfile" class="PDFupload-form-item">
      <label for="PDFuploadfile" class="PDFupload-form-label PDFupload-form-label-file" id="PDFupload-form-label-file">
         <div class="PDFupload-form-label-file-icon">
            <img src="img/icons/load_file-icon.png" alt="">
         </div>
         Thumb Size
      </label>
      <input type="file" id="PDFuploadfile" class="PDFupload-form-item">
      <label for="" class="create-user-label">
         <h2 class="create-user-label-text create-user-label-text-newCategorie">Nombre</h2>
         <input type="text" id="" class="create-user-input">
      </label>
      <label for="" class="create-user-label">
         <h2 class="create-user-label-text create-user-label-text-newCategorie">Diseñador</h2>
         <input type="text" id="" class="create-user-input">
      </label>
      <label for="" class="create-user-label">
         <h2 class="create-user-label-text create-user-label-text-newCategorie">Caracteristicas</h2>
         <input type="text" id="" class="create-user-input">
      </label>
      <label for="" class="create-user-label">
         <h2 class="create-user-label-text create-user-label-text-newCategorie">Etiquetas</h2>
         <input type="text" id="" class="create-user-input">
      </label>
      <!--         id categoria-->
      <label for="" class="create-user-label">
         <input type="hidden" name="id" value="<?php echo $row['id_imagen']; ?>" id="">
      </label>
      <label for="" class="create-user-label">
         <input type="hidden" id="" class="create-user-input" value="diseno">
      </label>
      <input type="submit" class="user-form-button-newCategorie user-form-button-newCategorie-designs" id="user-form-button-pdf" value="Crear">
   </form>
</fieldset>
<?php


$query2="SELECT * FROM disenos order by nombre_dis";
$resultado2=$conexion->query($query2);
while($row2=$resultado2->fetch_assoc()){
?>
<main class="data-container">
   <div class="data-container-item">
      <div class="top-data">
         <img src="<?php echo $row2['ruta'] ?>" alt="" class="design-img">
         <a href="edit_design.php">
            <div class="icon icon-pencil edit-design"></div>
         </a>
      </div>
      <div class="bottom-data">
         <p class="design-name">Nombre: <?php echo $row2['nombre_dis']; ?></p>
         <p class="design-designfor">Diseñado por: <?php echo $row2['disenador']; ?> </p>
         <p class="design-seller">Caracteristicas: <?php echo $row2['caracteristicas']; ?></p>
         <div class="tags" id="tags">
            <p class="tags-item"><?php echo $row2['etiquetas']; ?></p>
         </div>
      </div>
   </div>
    <?php } ?>
</main>
</body>
<script>
    $(document).ready(function( $ ) {
        $(".tags").dotdotdot({
            callback: function( isTruncated ) {},
            ellipsis: " \u2026 ",
            height: 80,
            keep: null,
            tolerance: 0,
            truncate: "letter",
            watch: "window",
        });

    });

    document.getElementById('add-users-design').addEventListener('click', () => {
        document.getElementById('design-fieldset').classList.add('design-fieldset-active')
    })
</script>
</html>