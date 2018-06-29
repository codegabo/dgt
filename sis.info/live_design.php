<?php
include_once 'pdf/config.inc.php';
$db=new Conect_MySql();
$sql = "select*from data_disenos";
$query = $db->execute($sql);
?>
<?php
error_reporting(0);
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
    $query="SELECT * FROM categoria";
    $resultado=$conexion->query($query);
    $row=$resultado->fetch_assoc();
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
   <body onmousedown="elemento(event);" >
   <main class="container-main">
      <section class="container-left">
         <div class="designs">
             <?php require("funcion/conectarse.php");
             $consulta="SELECT * FROM categoria";
             $resultado=$conexion->query($consulta);
             while($row1=$resultado->fetch_assoc()) {
                 ?>
                <a href="live_design.php?id=<?php echo $row1['id_imagen']; ?>" class="send-category"><img src="<?php echo $row1["ruta"]; ?>" alt="" class="designs-img" id="<?php echo $row1["id_imagen"]; ?>"></a>
                <!--       <a href="editar.php?id=--><?PHP //echo $row['codigo']; ?><!--">Editar</a>-->
             <?php } ?>
         </div>
         <div class="right-side">
            <div class="live-preview" id="live-preview">
               <div class="variants-container live-preview-current" id="variants-container">
                  <img class="live-preview-current-variant" id="live-preview-current-variant" width="1000" height="1000" style="background-image: url('img/LOGO/small_logo.png'); position: absolute; left: 1px; top: 1px; background-size: 30%; background-repeat: repeat;"/>
                  <img src="img/clothes_png/BLUSA.png" alt="" class="live-preview-current" id="live-preview-current">

               </div>
               <button class="button-dropdown-clothes icon-clothes" id="button-dropdown-clothes"></button>
               <div class="zoomButtons-container">
                  <!--                  <p class="guideline guideline-1">-</p>-->
                  <!--                  <p class="guideline guideline-2">-</p>-->
                  <!--                  <p class="guideline guideline-3">-</p>-->
                  <!--                  <p class="guideline guideline-4">-</p>-->
                  <!--                  <p class="guideline guideline-5">-</p>-->
                  <!--                  <p class="guideline guideline-6">-</p>-->
                  <!--                  <p class="guideline guideline-7">-</p>-->
                  <!--                  <p class="guideline guideline-8">-</p>-->
                  <!--                  <p class="guideline guideline-9">-</p>-->
                  <!--                  <p class="guideline guideline-10">-</p>-->
                  <button class="button-less icon-minus" id="button-less"></button>
                  <input id="ranger" class="input-range-live-preview" type="range" min="35" max="165" value="100" />
                  <button class="button-more icon-plus" id="button-more"></button>
               </div>

            </div>
            <div class="current-design" id="current-design">
               <!--             <h1 class="current-design-title">Flores</h1>-->
               <button class="watchPreview" id="watchPreview">Verificar</button>
               <!--             <h4 class="current-design-subtitle">FL 0031</h4>-->
            </div>
            <div class="variants">
                <?php
                $consulta2="SELECT * FROM disenos WHERE id_categoria = '$id' AND id_diseno_padre = '0' ";
                $resultado2=$conexion->query($consulta2);
                while($row2=$resultado2->fetch_assoc()) {
                    ?>
                   <img src="<?php echo $row2["ruta"]; ?>" alt="<?php echo $row2["nombre_dis"]; ?>" class="variants-img" id="<?php echo $row2["id_diseno"]; ?>">
                <?php } ?>
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
<!--   <canvas id="canvas" width="500" height="500" style="border:1px solid #d3d3d3;">-->
<!--      Este navegador no soporta en elemento CANVAS, el cual permite proyectar el modelo final, por favor utilize este sistema con Google Chrome en su última versión.-->
<!--   </canvas>-->

   <div class="fullview-conatainer" id="fullview-conatainer">
         <div class="variants-container live-preview-current" id="live-preview-current-variant-fullview">

         </div>
      <div class="buttons">
         <button class="cotinue-design" id="cotinue-design">Continuar</button>

          <?php require("funcion/conectarse.php");
          $consulta="SELECT * FROM user where usuario_use = '$usuario'";
          $resultado=$conexion->query($consulta);
          while($row1=$resultado->fetch_assoc()) {
          ?>
         <form action="fun_livepreview.php" class="send-data" id="send-data" method="POST" enctype="multipart/form-data" autocomplete="off">
            <input type="hidden" class="asesor-input" name="asesor" value="<?php echo $row1['nombre_use']; } ?>">
            <input type="text" class="edit-name-category"name="cliente" id="inputClient" placeholder="Cliente" required>
            <button type="submit" class="save-design" id="cotinue-design">Guardar</button>
         </form>
      </div>
   </div>
   </body>

   <script>
       let buttonDropdownClothes = document.getElementById('button-dropdown-clothes'),
           containerRight = document.getElementById('container-right'),
           closeContainerRight = document.getElementById('container-right-close'),
           watchPreview = document.getElementById('watchPreview'),
           cotinueDesign = document.getElementById('cotinue-design'),
           fullviewC = document.getElementById('fullview-conatainer'),
           moreToClick = document.getElementById('button-more'),
           lessToClick = document.getElementById('button-less');
       buttonDropdownClothes.addEventListener('click', () => {
           containerRight.classList.toggle('container-right-active');
           closeContainerRight.classList.add('posi-fix');
       });
       closeContainerRight.addEventListener('click', () => {
           containerRight.classList.remove('container-right-active');
           closeContainerRight.classList.remove('posi-fix');
       });
       watchPreview.addEventListener('click', () => {
//               moreToClick.click();
//               lessToClick .click();
           fullviewC.classList.toggle('fullview-conatainer-active');
       });
       cotinueDesign.addEventListener('click', () => {
           fullviewC.classList.remove('fullview-conatainer-active');
       });
   </script>
   <script src="js/js.js"></script>
   <script>
//************************************************************
var ranger = document.getElementById('ranger');
var image =  document.getElementById('live-preview-current-variant');
var width = document.getElementById('live-preview-current-variant').offsetWidth;
var height = document.getElementById('live-preview-current-variant').offsetHeight;

ranger.onchange = function(){
    document.getElementById('live-preview-current-variant').width = width * (ranger.value / 100);
    document.getElementById('live-preview-current-variant').height = height * (ranger.value / 100);
    console.log(ranger.value);
    console.log('Alto ↓ ' + document.getElementById('live-preview-current-variant').offsetHeight);
    console.log('Ancho ↓ ' + document.getElementById('live-preview-current-variant').offsetWidth);
}
//************************************************************

//       window.onload = function() {
//           var c = document.getElementById("canvas");
//           var ctx = c.getContext("2d");
//           window.setInterval(function() {
//
//               var data = "data:image/svg+xml," +
//                   "<svg xmlns='http://www.w3.org/2000/svg' width='200' height='200'>" +
//                   "<foreignObject width='100%' height='100%'>" +
//                   "<div xmlns='http://www.w3.org/1999/xhtml' style='font-size:12px'>" +
//                   "<ul><li style='color:red'> hello </li>  <li style='color:green'>thomas</li> </ul> " +
//                   "<div class='live-preview-current-variant' id='live-preview-current-variant' style='background-image: url(&quot;img/clothes_png/BLUSA.png&quot;); position: absolute; left: 1px; top: 1px; width: 329.46px; height: 395.76px; background-size: 30%; background-repeat: repeat;border:1px solid red;'>Hola mundo</div>" +
//                   "</div>" +
//                   "</foreignObject>" +
//                   "</svg>";
//               var img = new Image();
//
//               img.src = data;
//
//               img.onload = function() { ctx.drawImage(img, 0, 0); };
//               c.width=c.width;
////               ctx.drawImage(document.getElementById("19"), 0, 0);
//               ctx.drawImage(document.getElementById("live-preview-current-variant"), 0, 0);
//               ctx.drawImage(document.getElementById("live-preview-current"), 0, 0);
//
//
//           }, 20);
//
////           ctx.drawImage(document.getElementById("live-preview-current"), 10, 10);
//       };
   </script>
</html>
<?php } ?>