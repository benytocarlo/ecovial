<?php
		include("conexion.php");
		$id=$_POST["n_guia"];
		$sql="update ingreso_materias set nula='si' where id=$id";
		$result = mysql_query($sql);
		echo"<script>alert('Ingreso Materia Prima Anulada Exitosamente')</script>";
		echo"<script>location='anular_mt.php'</script>";
	
?>