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
   <title>DGT Dashboard</title>
   <meta name="title" content="Digital Global Textiles Dashboard">
   <meta name="description" content="Digital Global Textiles Dashboard">
   <meta name="author" content="Juan Gabriel Mogollón Martínez">
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="css/estilos.css">

</head>
<body>
<?php require("funcion/conectarse.php");
$consulta="SELECT * FROM user where usuario_use = '$usuario'";
$resultado=$conexion->query($consulta);
while($row1=$resultado->fetch_assoc()) {
?>
   <div><p><?php echo $row1['nombre_use'].' ';?><?php echo $row1['apellido_use'] ?></p> <a href="cerrarsesion.php">Cerrar sesión</a></div>
   <input type="hidden" value="<?php echo $row1['cargo_use']; ?>" id="cargo">

   <nav class="dashboard-menu">
      <div class="icon icon-menu burguer-menu" id="toggle"></div>
      <ul class="dashboard-menu-list" id="dashboard-menu-list">
         <li class="dashboard-menu-list-item" id="design">DISEÑOS</li>
         <li class="dashboard-menu-list-item" id="last">LO ÚLTIMO</li>
         <li class="dashboard-menu-list-item" id="users">USUARIOS</li>
         <li class="dashboard-menu-list-item" id="data">REGISTROS</li>
      </ul>
   </nav>
   <main class="content-container" id="content-container">
      <iframe src="live_design.php" frameborder="0" class="live-preview-iframe" id="live-preview-iframe"></iframe>
   </main>
</body>
<script>
//    menu desplegable
    let toggle = document.getElementById('toggle'),
        mainnav= document.getElementById('dashboard-menu-list');
    toggle.addEventListener('click',show);
    function show() {
        mainnav.classList.toggle('show-menu-block');
        document.addEventListener("click",function(event){
         if (event.target.className === "dashboard-menu-list-item") {
             if(document.getElementById("cargo").value === "Asesor"){
             mainnav.innerHTML = '<li class="dashboard-menu-list-item selected-item" id="'+event.target.id+'">'+event.target.firstChild.data+'</li>' +
                 ' <li class="dashboard-menu-list-item" id="design">DISEÑOS</li>\n' +
                 '<li class="dashboard-menu-list-item" id="last">LO ÚLTIMO</li>\n' +
                 '<li class="dashboard-menu-list-item" id="data">REGISTROS</li>';
             }
             if(document.getElementById("cargo").value === "Administrador"){
                 mainnav.innerHTML = '<li class="dashboard-menu-list-item selected-item" id="'+event.target.id+'">'+event.target.firstChild.data+'</li>' +
                     ' <li class="dashboard-menu-list-item" id="design">DISEÑOS</li>\n' +
                     '<li class="dashboard-menu-list-item" id="last">LO ÚLTIMO</li>\n' +
                 '<li class="dashboard-menu-list-item" id="users">USUARIOS</li>\n' +
                 '<li class="dashboard-menu-list-item" id="data">REGISTROS</li>';
             }
             document.getElementById("content-container").innerHTML = event.target.firstChild.data;
             if(event.target.id === 'design'){
                 document.getElementById("content-container").innerHTML =
                 '<a href=""><button class="button-dropdown-clothes icon-clothes live-all-files-available" id="live-all-files-available" ></button></a>' +
                 '<iframe src="categories.php" class="content-container-items" id="content-container-items"></iframe>';
             }
             if(event.target.id === 'last'){
                 document.getElementById("content-container").innerHTML =
                     '<a href=""><button class="button-dropdown-clothes icon-clothes live-all-files-available" id="live-all-files-available" ></button></a>' +
                     '<iframe src="news.php" class="content-container-items" id="content-container-items"></iframe>';
             }
             if(event.target.id === 'users'){
                 document.getElementById("content-container").innerHTML =
                     '<a href=""><button class="button-dropdown-clothes icon-clothes live-all-files-available" id="live-all-files-available" ></button></a>' +
                     '<iframe src="users.php" class="content-container-items" id="content-container-items"></iframe>';
             }
             if(event.target.id === 'data'){
                 document.getElementById("content-container").innerHTML =
                     '<a href=""><button class="button-dropdown-clothes icon-clothes live-all-files-available" id="live-all-files-available" ></button></a>' +
                     '<iframe src="data.php" class="content-container-items" id="content-container-items"></iframe>';
             }
         }
        }
       )
    }

//


const resize = () => {
    if(innerWidth > 639) {
        document.getElementById('toggle').click();
        if(document.getElementById("cargo").value === "Asesor"){
            document.getElementById("users").style.display = "none";
         }
    }
    if(innerWidth <= 639) {
        let toggleMenu = document.getElementById('toggle');

        mainnav.addEventListener('click', () => {
            toggleMenu.click();
        });

        mainnav.addEventListener('mouseleave', () => {
            toggleMenu.click();
        });
        if(document.getElementById("cargo").value === "Asesor"){
            document.getElementById("users").style.display = "none";
         }
    }
};

addEventListener('resize', resize);
addEventListener('DOMContentLoaded', resize);

</script>
</html>
<?php }} ?>