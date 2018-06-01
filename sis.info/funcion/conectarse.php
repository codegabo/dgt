<?php 
$s="localhost";
$db="textiles";
$u="root";
$p="";

$conexion=new mysqli($s,$u,$p,$db);

if ($conexion->connect_errno){
	echo "NO Conectado";
}
else{

}
?>

