<?php
include("conexion.php");
$oculto=$_REQUEST["oculto"];
	if($oculto=="mezcla")
	{
		$id=$_REQUEST["id"];
		$sql="delete  from mezclas where id=$id";
		$result = mysql_query($sql);
		echo"<script>alert('Producto Eliminada Exitosamente')</script>";
		echo"<script>location='listado_mezclas.php'</script>";
	}
	if($oculto=="camion")
	{
		$id=$_REQUEST["id"];
		$sql="delete  from camiones where id=$id";
		$result = mysql_query($sql);
		echo"<script>alert('Camion Eliminada Exitosamente')</script>";
		echo"<script>location='listado_camiones.php'</script>";	
	}
	if($oculto=="obra")
	{
		$id=$_REQUEST["id"];
		$sql="delete  from obra where id=$id";
		$result = mysql_query($sql);
		echo"<script>alert('Obra Eliminada Exitosamente')</script>";
		echo"<script>location='listado_obras.php'</script>";	
	}
	if($oculto=="usuario")
	{
		$id=$_REQUEST["id"];
		$sql="delete  from usuarios where id=$id";
		$result = mysql_query($sql);
		echo"<script>alert('Usuario Eliminada Exitosamente')</script>";
		echo"<script>location='listado_usuarios.php'</script>";
	}
		if($oculto=="cliente")
	{
		$id=$_REQUEST["id"];
		$sql="delete  from cliente where id=$id";
		$result = mysql_query($sql);
		echo"<script>alert('Cliente Eliminada Exitosamente')</script>";
		echo"<script>location='listado_clientes.php'</script>";
	}

		if($oculto=="chofer")
	{
		$id=$_REQUEST["id"];
		$sql="delete  from chofer where id=$id";
		$result = mysql_query($sql);
		echo"<script>alert('Chofer Eliminada Exitosamente')</script>";
		echo"<script>location='listado_choferes.php'</script>";
	}
		if($oculto=="centro")
	{
		$id=$_REQUEST["id"];
		$sql="delete  from centrocostos where id=$id";
		$result = mysql_query($sql);
		echo"<script>alert('Centro de Costos Eliminada Exitosamente')</script>";
		echo"<script>location='listado_centros.php'</script>";
	}
		if($oculto=="transportista")
	{
		$id=$_REQUEST["id"];
		$sql="delete  from transportista where id=$id";
		$result = mysql_query($sql);
		echo"<script>alert('Transportista Eliminado Exitosamente')</script>";
		echo"<script>location='listado_transportista.php'</script>";
	}
		if($oculto=="materia")
	{
		$id=$_REQUEST["id"];
		$sql="delete  from materias where id=$id";
		$result = mysql_query($sql);
		echo"<script>alert('Materia Prima Eliminada Exitosamente')</script>";
		echo"<script>location='listado_materias.php'</script>";
	}
		if($oculto=="cliente")
	{
		$id=$_REQUEST["id"];
		$sql="delete  from cliente where id=$id";
		$result = mysql_query($sql);
		echo"<script>alert('Cliente Eliminado Exitosamente')</script>";
		echo"<script>location='listado_cliente.php'</script>";
	}
	if($oculto=="proveedor")
	{
		$id=$_REQUEST["id"];
		$sql="delete  from proveedor where id=$id";
		$result = mysql_query($sql);
		echo"<script>alert('Proveedor Eliminado Exitosamente')</script>";
		echo"<script>location='listado_proveedores.php'</script>";
	}
	if($oculto=="guiamezcla")
	{
		$id=$_REQUEST["id"];
		$sql="delete  from detalle_pesaje where auto=$id";
		$result = mysql_query($sql);
		echo"<script>alert('Camion Eliminada Exitosamente')</script>";
		echo"<script>location='listado_camiones.php'</script>";	
	}

?>