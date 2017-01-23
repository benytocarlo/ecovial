<?php
include("conexion.php");
		$obra=$_POST["obra"];
		$orden_compra=$_POST["orden_compra"];
		$cliente=$_POST["cliente"];
		$patente=$_POST["patente"];
		$chofer=$_POST["chofer"];
		$transportista=$_POST["transportista"];
		$prod=$_POST["prod"];	
		$cantidad=$_POST["cantidad"];	
		$valor=$_POST["valor"];	
		$guia=$_POST["n_guia"];	
		$op=$_POST["op"];	
		
		$sql="update pesaje set obra='".$obra."', n_orden='".$orden_compra."', cliente='".$cliente."', patente='".$patente."', chofer='".$chofer."', transportista='".$transportista."' where id='".$guia."'";
		$result = mysql_query($sql);
		//echo $sql;
		if($op=="noemulsion"){
			$sql2="update detalle_pesaje set producto='".$prod."', litros='".$cantidad."', valor_unitario='".$valor."' where guia='".$guia."'";
			$result = mysql_query($sql2);
		}
		echo"<script>alert('Guia Actualizada Exitosamente')</script>";
		echo"<script>location='index.php'</script>";

?>

