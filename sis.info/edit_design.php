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
          <?php
          # definimos la carpeta destino
          $carpetaDestino="img_disenos/";
          # si hay algun archivo que subir
          if(isset($_FILES["archivo"]) && $_FILES["archivo"]["name"][0])
          {
              # recorremos todos los arhivos que se han subido
              for($i=0;$i<count($_FILES["archivo"]["name"]);$i++)
              {
                  # si es un formato de imagen
                  if($_FILES["archivo"]["type"][$i]=="image/jpeg" || $_FILES["archivo"]["type"][$i]=="image/pjpeg" || $_FILES["archivo"]["type"][$i]=="image/gif" || $_FILES["archivo"]["type"][$i]=="image/png")
                  {
                      # si exsite la carpeta o se ha creado
                      if(file_exists($carpetaDestino) || @mkdir($carpetaDestino))
                      {
                          $origen=$_FILES["archivo"]["tmp_name"][$i];
                          $destino=$carpetaDestino.$_FILES["archivo"]["name"][$i];
                          # movemos el archivo
                          if(@move_uploaded_file($origen, $destino))
                          {
                              echo "<br>".$_FILES["archivo"]["name"][$i]. " <p style='color: #308e22;'>subida con exito</p>";
                          }else{
                              echo "<br><p style='color: red;'>No se ha podido subir el archivo: </p>".$_FILES["archivo"]["name"][$i];
                          }
                      }else{
                          echo "<br><p style='color: red;'>No se ha podido crear la carpeta: </p>".$carpetaDestino;
                      }
                  }else{
                      echo "<br><p style='color: red;'><i style='color:black;'>".$_FILES["archivo"]["name"][$i]."</i> - NO es imagen con extensión .jpg, .png o .gif</p>";
                  }
              }
          }else{
              echo "<br>No se ha seleccionado ningun diseño";
          }
          ?>
         <form action="" method="post" enctype="multipart/form-data" name="inscripcion" autocomplete="off">
            <small>Recuerda,
               <ul>
                  <li>Debes subir los archivos de imagenes con extensión: .jpg</li>
                  <li>El nombre del archivo no debe contener espacios o caracteres especiales</li>
               </ul>
            </small>
            <label for="PDFuploadfile" class="PDFupload-form-label PDFupload-form-label-file" id="PDFupload-form-label-file">
               <div class="PDFupload-form-label-file-icon">
                  <img src="img/icons/load_file-icon.png" alt="">
               </div>
               Elegir diseño
            </label>
            <input type="file" id="PDFuploadfile" class="PDFupload-form-item" name="archivo[]">
            <input type="submit" class="user-form-button-newCategorie user-form-button-newCategorie-designs" id="user-form-button-pdf" name="uploadImages" value="Subir">
         </form>



         <form action="fun_categoria.php" method="post" enctype="multipart/form-data" autocomplete="off" class="edir-form">
            <label for="" class="create-user-label-design">
               <h2 class="create-user-label-text create-user-label-text-newCategorie">Nombre</h2>
               <input type="text" id="" class="create-user-input" name="nombre">
            </label>
            <label for="" class="create-user-label-design">
               <h2 class="create-user-label-text create-user-label-text-newCategorie">Diseñador</h2>
               <input type="text" id="" class="create-user-input" name="disenador">
            </label>
            <label for="" class="create-user-label-design">
               <h2 class="create-user-label-text create-user-label-text-newCategorie">Caracteristicas</h2>
               <input type="text" id="" class="create-user-input" name="caracteristicas">
            </label>

            <label for="" class="create-user-label-design">
               <h2 class="create-user-label-text create-user-label-text-newCategorie">Etiquetas</h2>
               <input type="text" id="" class="create-user-input" name="etiquetas">
            </label>
            <input type="hidden" name="disenopadre" value="<?php echo $row['id_diseno']; ?>">
            <input type="hidden" name="tipo" value="variant">
            <input type="hidden" name="categoria" value="<?php echo $row['id_categoria']; ?>">
            <input type="hidden" name="tipo" value="design">
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
<!--         <p class="clarification">--><?php //echo $row2['nombre_dis']; ?><!--</p>-->
         <form method="post" action="fun_categoria.php" enctype="multipart/form-data" class="form-category" autocomplete="off">
            <h1 class="design-title" >
               <input type="file" value="<?php echo $row2['ruta']; ?>" name="Imagen" accept="image/png" style="display: flex; padding: .1em;font-size: 10px;width: 70%;position: absolute;top: 1em;">
               <input type="text" value="<?php echo $row2['nombre_dis']; ?>" name="titulo" class="edit-name-category clarification">
            </h1>
            <input type="hidden" name="id" value="<?php echo $row2['id_diseno']; ?>">

         <div class="tools">
            <button class="icon icon-pencil items-tools" id="button-newCategorie" type="submit" name="Editar_dis" ></button>
         </form>
          <a href="eliminar_diseno.php?id=<?PHP echo $row2['id_diseno']; ?>" ><div class="icon icon-delete"></div></a>
         </div>
      </div>

<?php } ?>
   </section>
</div>
</body>
</html>
<?php } }?>