<?php
$Usuario = "root";
$Password = "root";
$Servidor = "localhost";
$BaseDeDatos = "rancagua";
$conexion = mysql_connect($Servidor,$Usuario,$Password) or die ("Error El servidor no puede conectar con la BD");
$result = mysql_select_db($BaseDeDatos,$conexion);
mysql_query ("SET NAMES 'UTF8'");
?>