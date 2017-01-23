<?php
include("conexion.php");
		$id=$_REQUEST["n_guia"];
		$sql="update orden_compra set nula='si' where id=$id";
		$result = mysql_query($sql);
		echo"<script>alert('Orde de Compra Anulada Exitosamente')</script>";
		echo"<script>location='index.php'</script>";
	
?>