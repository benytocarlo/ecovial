<?php
	$conexion = mysql_connect("localhost","root","root") or die ("Error El servidor no puede conectar con la BD");
	$result = mysql_select_db("rancagua",$conexion);
	mysql_query ("SET NAMES 'UTF8'");
?>