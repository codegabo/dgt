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
   <!DOCTYPE html>
   <html lang="es">
   <head>
      <meta charset="UTF-8">
      <title>Digital Gobal Textiles</title>
      <meta name="title" content="Digital Gobal Textiles">
      <meta name="description" content="Digital Gobal Textiles">
      <meta name="author" content="Juan Gabriel Mogollón Martínez">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="css/estilos.css">
   </head>
<body onmousedown="elemento(event);">
   <!--<div id="botones">-->
   <!--<button id="mas" class="zoom-button">Más ZOOM +2%</button>-->
   <!--<button id="menos" class="zoom-button">Menos  ZOOM -2%</button>-->
   <!--<p id="text"></p>-->
   <!--</div>-->


<main class="container-main">
   <section class="container-left">
   <div class="designs">
    <?php require("funcion/conectarse.php");
    $consulta="SELECT * FROM categoria ORDER BY id_imagen DESC";
    $resultado=$conexion->query($consulta);
    while($row1=$resultado->fetch_assoc()) {
//echo $row1['nombre_use']
        ?>
       <img src="<?php echo $row1["ruta"]; ?>" alt="" class="designs-img">
<?php } ?>
       </div>
       <div class="right-side">
          <div class="live-preview" id="live-preview">
             <div class="variants-container live-preview-current" id="variants-container">
                <img src="img/clothes_designs/DIBUJO%20CO-0001/#" alt="" class="live-preview-current-variant" id="live-preview-current-variant">
                <img src="img/clothes_png/BLUSA.png" alt="" class="live-preview-current" id="live-preview-current">
             </div>
             <button class="button-dropdown-clothes icon-clothes" id="button-dropdown-clothes"></button>
             <div class="zoomButtons-container">
                <button class="button-more icon-plus" id="button-more"></button>
                <button class="button-less icon-minus" id="button-less"></button>
             </div>
          </div>
          <div class="current-design">
             <h1 class="current-design-title">Flores</h1>
             <h4 class="current-design-subtitle">FL 0031</h4>
          </div>
          <div class="variants">
             <img src="img/clothes_designs/DIBUJO%20CO-0001/CO-0001-1-thumb.jpg" alt="" class="variants-img">
             <img src="img/clothes_designs/DIBUJO%20CO-0001/CO-0001-2-thumb.jpg" alt="" class="variants-img">
             <img src="img/clothes_designs/DIBUJO%20CO-0001/CO-0001-3-thumb.jpg" alt="" class="variants-img">
          </div>
       </div>
       </section>
       <section class="container-right" id="container-right">
          <img src="img/clothes_png/POLO.png"  class="container-right-img" alt="" id="1">
          <img src="img/clothes_png/LEGINS.png"  class="container-right-img" alt="" id="2">
          <img src="img/clothes_png/TSHIRT.png"  class="container-right-img" alt="" id="3">
          <img src="img/clothes_png/VESTIDO.png"  class="container-right-img" alt="" id="4">
          <img src="img/clothes_png/BLUSA.png"  class="container-right-img" alt="" id="5">
          <img src="img/clothes_png/TOP.png"  class="container-right-img" alt="" id="6">
          <img src="img/clothes_png/TSHIRT%20FEMENINA.png"  class="container-right-img" alt="" id="7">
          <img src="img/clothes_png/FALDA%20FEMENINO.png"  class="container-right-img" alt="" id="8">
          <img src="img/clothes_png/CAMISA%20HOMBRE.png"  class="container-right-img" alt="" id="9">
          <img src="img/clothes_png/PANTALONETA%20HOMBRE.png"  class="container-right-img" alt="" id="10">
          <img src="img/clothes_png/VESTIDO%20DE%20BAÑO-FEMENINO.png"  class="container-right-img" alt="" id="11">
          <img src="img/clothes_png/VESTIDO%20-FEMENINO.png"  class="container-right-img" alt="" id="12">
          <div class="container-right-close icon-close" id="container-right-close"></div>
       </section>
       </main>

       </body>

       <script>
           let buttonDropdownClothes = document.getElementById('button-dropdown-clothes'),
               containerRight = document.getElementById('container-right'),
               closeContainerRight = document.getElementById('container-right-close');
           buttonDropdownClothes.addEventListener('click', () => {
               containerRight.classList.toggle('container-right-active');
               closeContainerRight.classList.add('posi-fix');
           });
           closeContainerRight.addEventListener('click', () => {
               containerRight.classList.remove('container-right-active');
               closeContainerRight.classList.remove('posi-fix');
           });
       </script>
       <script src="js/js.js"></script>
       </html>
    <?php } ?>