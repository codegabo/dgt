<?php 
 include("funcion/conectarse.php");
if( isset($_POST["crear"]) )
 {
    if((
		($_FILES["Imagen"] ["type"] == "image/jpg") ||
		($_FILES["Imagen"] ["type"] == "image/png")&&
		($_FILES["Imagen"] ["size"] < 2000000)
		)){
            
    
    $titulo = $_POST["titulo"];
    $fotod=$_POST['titulo'];

    /*Guardar foto*/
	$ruta ='img_categoria';
	$archivo=$_FILES['Imagen'] ['tmp_name'];
	$nombreArchivo=$_FILES['Imagen'] ['name'];
	move_uploaded_file($archivo,$ruta.'/'.$fotod.".png");
    $ruta=$ruta.'/'.$fotod.".png";
    
	$sql="INSERT INTO categoria (titulo,ruta) VALUES ('$titulo','$ruta');";
	$resultado=$conexion->query($sql);
	if ($resultado>0) {
	echo "
    <html>
    <head>
    <meta http-equiv='refresh' content='0; url=categories.php'>
    <script>
    alert('Categoria Creada');
    </script>
    </head>
    </html>";
		}

   
 }
 else{

	echo "
	<script language='javascript'>
	alert('Solo se Admiten Imagenc Con Formato PNG y JPG, no deben ser mayor a 2MB');
	window.location.href='categories.html';
	</script>
    ";

	}
}



if( isset($_POST["Editar_cat"]) )
 {
    $id=$_POST['id'];
    $titulo_cat=$_POST['titulo'];

    $query="UPDATE categoria SET titulo='$titulo_cat'  WHERE id_imagen='$id' ";
$resultado=$conexion->query($query);

if ($resultado>0){

	echo "
    <html>
    <head>
    <meta http-equiv='refresh' content='0; url=categories.php'>
    <script>
    alert('Categoria  Actualizada ');
    </script>
    </head>
    </html>";
}
 }

 if( isset($_POST["Crear_diseno"]) )
 {
   
    if((
		($_FILES["Img"] ["type"] == "image/jpg") ||
		($_FILES["Img"] ["type"] == "image/png")&&
		($_FILES["Img"] ["size"] < 2000000)
		)){
            
    
    $nombre_dis=$_POST['nombre'];
    $disenador=$_POST['disenador'];
    $caracteristicas=$_POST['caracteristicas'];
    $etiquetas=$_POST['etiquetas'];
    $radio=$_POST['radio'];
    $disenos=$_POST['disenos'];
    $nombre_variante=$_POST['nombre_variante'];
  

    $fotods=$_POST['nombre'];

    /*Guardar foto*/
	$rutas ='img_disenos';
	$archivos=$_FILES['Img'] ['tmp_name'];
	$nombreArchivos=$_FILES['Img'] ['name'];
	move_uploaded_file($archivos,$rutas.'/'.$fotods.".png");
    $rutas=$rutas.'/'.$fotods.".png";
    
	$sql="INSERT INTO disenos (nombre_dis,disenador,caracteristicas,etiquetas,radio,disenos,nombre_variante,ruta) VALUES ('$nombre_dis','$disenador','$caracteristicas','$etiquetas','$radio','$disenos','$nombre_variante','$rutas')";
	$resultado=$conexion->query($sql);
	if ($resultado>0) {
	echo "
    <html>
    <head>
    <meta http-equiv='refresh' content='0; url=categories.php'>
    <script>
    alert('Diseño Agregado');
    </script>
    </head>
    </html>";
		}

   
 }


 }
?>