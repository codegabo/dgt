<?php

require_once("dompdf/dompdf_config.inc.php");
$conexion=mysql_connect("localhost","root","");
mysql_select_db("textiles",$conexion);

require 'funcion/database.php';
$id = null;
	if ( !empty($_GET['id'])) {
		$id = $_REQUEST['id'];
	}

	if ( null==$id ) {
		header("Location: index.php");
	} else {
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "select * from data_disenos where id_data = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		Database::disconnect();
	}

$codigoHTML='';
$codigoHTML.='

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
    <title>Diseño final</title>
    <style>
    @font-face {
  font-family: \'Nexa\';
  font-style: normal;
  src:url("font/Nexa Light.otf") format("opentype");
}
*{
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: "Nexa";
}
.images-container{
display:block;
text-align: center;
}
.img{
height: 250px;
}
.logo-container{
margin:30px 0;
text-align: center;
}
.logo{
display: block;
height: 100px;
}
.info-container{
display: block;
margin: 30px 30px;
}
strong{
font-size: 17px;
}
p{
font-size: 16px;
}
.subinfo-container{
margin: 15px 0;
}
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <div class="logo-container">
       <img class="logo" src="img/LOGO/medium_logo.png" alt="">
    </div>
    <div class="images-container">
       <img src="'.$data['modelo'].'" class="img" title="'.$data['modelo'].'">
       <img src="'.$data['diseno'].'" class="img" title="'.$data['diseno'].'">
    </div>
    <div class="info-container">
        <h3>Dise&ntilde;o final No. <p>'.utf8_decode($data['id_data']).'</p></h3>
       <div class="subinfo-container">
        <strong>Asesor</strong><p>'.$data['asesor'].' </p>
       </div>
       <div class="subinfo-container">
        <strong>Cliente</strong><p>'.$data['cliente'].'</p>
       </div>
       <div class="subinfo-container">
         <strong>Nombre de dise&ntilde;o</strong><p>'.$data['nombre'].' </p>
       </div>
       <div class="subinfo-container">
         <strong>Tipo de tela</strong><p>'.$data['tela'].' </p>
       </div>
       <div class="subinfo-container">
         <strong>Tipo de produci&oacute;n</strong><p>'.$data['tipo_prod'].' </p>
       </div>
       <div class="subinfo-container">
         <strong>Comentarios</strong><p>'.$data['comentarios'].' </p>
       </div>
       <div class="subinfo-container">
        <strong>Fecha y Hora de creaci&oacute;n</strong><p>'.$data['hora'].'</p>
       </div>
    </div>
</body>
</html>';

$codigoHTML=utf8_decode(utf8_encode($codigoHTML));
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("diseño_final.pdf");
?>