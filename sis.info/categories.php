<!--
if ( $row1['cargo_use'] == 'Administrador'){
                     echo '<a href="eliminar_pdf.php?id=' . $datos['id_documento'] . '" style="">
                              <div class="icon icon-delete"></div>
                           </a>';
                 }
-->
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
    ?>
    <?php
    include_once 'pdf/config.inc.php';
    $db=new Conect_MySql();
    $sql = "select*from categoria";
    $query = $db->execute($sql);
    ?>

   <!DOCTYPE html>
   <html lang="es">
   <head>
      <meta charset="UTF-8">
      <title>Categorias</title>
      <meta name="title" content="Gabo's Web Page">
      <meta name="description" content="Gabo's Web Page the best as is possible">
      <meta name="author" content="Juan Gabriel Mogollón Martínez">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="css/estilos.css">
   </head>
   <body>
   <main class="container-designer">
       <?php
       while($datos=$db->fetch_row($query)){ ?>
          <a href="edit_categories_&_own_designs.php?id=<?php echo $datos['id_imagen']; ?>" class="design">
             <h1 class="design-title"><?php echo $datos['titulo']; ?></h1>
             <div class="design-image" style="background: url('<?php echo $datos['ruta'] ?>');" >
                <img src="<?php echo $datos['ruta'] ?>" alt="">
             </div>
          </a>
       <?php } ?>
    <?php require("funcion/conectarse.php");
    $consulta="SELECT * FROM user where usuario_use = '$usuario'";
    $resultado=$conexion->query($consulta);
    while($row1=$resultado->fetch_assoc()) {
?>
    <?php
    if ( $row1['cargo_use'] == 'Administrador'){
        echo '<button class="add-users design add-users-categorie" id="button-newCategorie">
    <img  src="img/icons/add-icon.png" class="add-users-icon"/><p>Crear nueva categoria</p>
</button>


<fieldset class="newCategorie-fieldset" id="newCategorie-fieldset">
    <form action="fun_categoria.php" class="newCategorie-form" method="POST" enctype="multipart/form-data" autocomplete="off">
        <small>Recuerda,
            <ul>
                <li>Debes subir los archivos de imagenes con extensión: .png</li>
                <li>El nombre del archivo no debe contener espacios o caracteres especiales</li>
            </ul>
        </small>
        <label for="newCategorie-form-input-imagen" class="create-user-label">
            <h2 class="create-user-label-text create-user-label-text-newCategorie">Imagen</h2>
            <input type="file" id="newCategorie-form-input-imagen" class="create-user-input" name="Imagen" accept="image/png">
        </label>
        <label for="newCategorie-form-input-titulo" class="create-user-label">
            <h2 class="create-user-label-text create-user-label-text-newCategorie">Titulo</h2>
            <input type="text" id="newCategorie-form-input-titulo" class="create-user-input" name="titulo">
        </label>
        <input type="submit" class="user-form-button-newCategorie" id="user-form-button-pdf" value="Crear" name="crear">
    </form>
</fieldset>';
    }


    ?>
   </main>
   </body>
   <script>
       let buttonnewCategorie = document.getElementById('button-newCategorie'),
           newCategoriefieldset = document.getElementById('newCategorie-fieldset');
       buttonnewCategorie.addEventListener('click', () => {
           newCategoriefieldset.classList.add('newCategorie-fieldset-active')
       })
   </script>
   </html>
<?php } }?>