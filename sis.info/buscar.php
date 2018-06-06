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
   <title>Usuarios</title>
   <meta name="title" content="Gabo's Web Page">
   <meta name="description" content="Gabo's Web Page the best as is possible">
   <meta name="author" content="Juan Gabriel Mogollón Martínez">
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="all-container-users">
   <header class="users-actions">

         <label for="users-search" class="users-search-label">
          <form action="buscar.php" method="post" name="busqueda" autocomplete="off">
         <input type="text" name="busqueda"  class="users-search" id="users-search">
        
         <button  type="submit" value="Buscar"name="btn1" class="busc">
         <img src="img/icons/search-icon.png" class="users-search-icon" alt="">
      </button>
        </form>
     </label>

 <button class="add-users" id="add-users">
         <img  src="img/icons/add-icon.png" class="add-users-icon"/><p>AGREGAR</p>
      </button>

   </header>
   <section class="container-create_user" id="container-create_user">
   <fieldset class="user-fieldset">
      <legend class="legend-user-form"><h1>Nuevo usuario</h1></legend>
      <form action="add_usuario.php" class="user-form"  method="post" enctype="multipart/form-data">

         <label for="create-user-input-name" class="create-user-label">
            <h2 class="create-user-label-text">Nombres</h2>
            <input type="text" name="nombre" id="create-user-input-name" class="create-user-input">
         </label>

         <label for="create-user-input-lastName" class="create-user-label">
            <h2 class="create-user-label-text">Apellidos</h2>
            <input type="text"name="apellido" id="create-user-input-lastName" class="create-user-input">
         </label>

         <label for="create-user-input-gen" class="create-user-label">
            <h2 class="create-user-label-text">Género</h2>
            <select  name="genero" class="create-user-select" id="create-user-input-gen">
               <option value="Masculino">Masculino</option>
               <option value="Femenino">Femenino</option>
            </select>
         </label>

         <label for="create-user-input-birth" class="create-user-label">
            <h2 class="create-user-label-text">Fecha de nacimiento</h2>
            <input type="date" name="nacimiento" id="create-user-input-birth" class="create-user-input birth">
         </label>

         <label for="create-user-input-rol" class="create-user-label">
            <h2 class="create-user-label-text">Cargo - Rol</h2>
            <select name="cargo" class="create-user-select" id="create-user-input-rol">
               <option value="Administrador">Administrador</option>
               <option value="Asesor">Asesor</option>
            </select>
         </label>

         <label for="create-user-input-user" class="create-user-label">
            <h2 class="create-user-label-text">Usuario</h2>
            <input name="usuario" type="text" id="create-user-input-user" class="create-user-input">
         </label>

         <label for="create-user-input-pass" class="create-user-label">
            <h2 class="create-user-label-text">Contraseña</h2>
            <input required  name="contra" type="password" id="create-user-input-pass" class="create-user-input">
         </label>

         <input type="submit"class="user-form-button create-user-input" value="Agregar">
         <div class="container-right-close icon-close" id="close-create-user"></div>
      </form>
   </fieldset>
</section>
  
   <main class="users-container">
         <table class="users">
         <tr>
               <th>Código</th>
               <th>Nombres</th>
               <th>Apellidos</th>
               <th>Cargo</th>
               <th>Usuario</th>
               <th>Contraseña</th>
               <th>Genero</th>
               <th>Fecha de nacimiento</th>
               <th>Editar</th>
               <th>Eliminar</th>
            </tr>

         <?php  
    include ("funcion/conectarse.php");
    $bus=$_POST["busqueda"];

   
    
    $query="SELECT * FROM user where usuario_use like '%$bus%' OR nombre_use like '%$bus%' OR apellido_use like '%$bus%'";
    $resultado=$conexion->query($query);
    while($row=$resultado->fetch_assoc()){
?>
            <tr>
            <td><?php echo $row['codigo'];?></td>
             <td><?php echo $row['nombre_use'];?></td>
             <td><?php echo $row['apellido_use'];?></td>
             <td><?php echo $row['cargo_use'];?></td>
             <td><?php echo $row['usuario_use'];?></td>
             <td>***********</td>
             <td><?php echo $row['genero_use'];?></td>
             <td><?php echo $row['fechanaci'];?></td>
             <td><a href="editar.php?id=<?PHP echo $row['codigo']; ?>">Editar</a></td>
             <td><a href="eliminar.php?id=<?PHP echo $row['codigo']; ?>" >Eliminar</a></td>
            </tr>
    <?php }
    
    ?>
         </table>
   </main>

</div>
</body>
<script>
    let buttonDropdownUsers = document.getElementById('add-users'),
        containerRightUsers = document.getElementById('container-create_user'),
        closeContainerRightUsers = document.getElementById('close-create-user');

    buttonDropdownUsers.addEventListener('click', () => {
        containerRightUsers.classList.add('container-create_user-active');
        closeContainerRightUsers.classList.add('posi-fix');
      });

    closeContainerRightUsers.addEventListener('click', () =>{
        containerRightUsers.classList.remove('container-create_user-active');
        closeContainerRightUsers.classList.remove('posi-fix');
    });
</script>

</html>
<?php } ?>