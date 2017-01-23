<?php
include("conexion.php");
		$obra=$_POST["obra"];
		$orden_compra=$_POST["orden_compra"];
		$cliente=$_POST["cliente"];
		$patente=$_POST["patente"];
		$chofer=$_POST["chofer"];
		$transportista=$_POST["transportista"];
		$guia=$_POST["n_orden"];	
		
		$sql="update pesaje set obra='$obra', n_orden='$orden_compra', cliente='$cliente', patente='$patente' ,chofer='$chofer',transportista='$transportista' where id=$guia";
		$result = mysql_query($sql);
		echo"<script>alert('Guia Actualizada Exitosamente')</script>";
		echo"<script>location='index.php'</script>";

?>