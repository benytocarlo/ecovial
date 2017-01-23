<?php
include("conexion.php");
		$id=$_REQUEST["n_guia"];
		$sql="update pesaje set nula='si' where id=$id";
		$result = mysql_query($sql);
		echo"<script>alert('Guia Anulada Exitosamente')</script>";
		echo"<script>location='anular_guia.php'</script>";
	
?>