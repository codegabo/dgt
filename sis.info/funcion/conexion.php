<?php
$cn=mysql_connect("localhost","basededatos","")or die("Error en Conexion");
$db=mysql_select_db("basededatos")or die("Error en Db");
mysql_query("SET NAMES 'utf8'");
return($cn);
return($db);
@mysql_query("SET NAMES 'utf8'",$cn);
?>