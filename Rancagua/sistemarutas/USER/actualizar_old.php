<?php
include("conexion.php");

$oculto=$_REQUEST["oculto"];
$id=$_REQUEST["id"];
	if($oculto=="mezcla")
	{	
		$tipo=$_POST["tipo"];
		$nombre=$_POST["nombre"];
		$valor=$_POST["valor"];
		//$sql="insert into mezclas(tipo,nombre,valor) values ('$tipo','$nombre',$valor)";
		$sql="update mezclas set tipo='$tipo', nombre='$nombre', valor='$valor' where id=$id";
		$result = mysql_query($sql);
		echo"<script>alert('Mezcla Actualizada Exitosamente')</script>";
		echo"<script>location='listado_mezclas.php'</script>";
	}
	if($oculto=="obra")
	{	
		$nombre=$_POST["nombre"];
		$ubicacion=$_POST["ubicacion"];
		$ciudad=$_POST["ciudad"];
		
		//$sql="insert into mezclas(tipo,nombre,valor) values ('$tipo','$nombre',$valor)";
		$sql="update obra set nombre='$nombre', ubicacion='$ubicacion', ciudad='$ciudad' where id=$id";
		$result = mysql_query($sql);
		echo"<script>alert('Obra Actualizada Exitosamente')</script>";
		echo"<script>location='listado_obras.php'</script>";
	}
	if($oculto=="transportista")
	{	
		$nombre=$_POST["nombre"];
		$sql="update transportista set nombre='$nombre' where id=$id";
		$result = mysql_query($sql);
		echo"<script>alert('Transportista Actualizado Exitosamente')</script>";
		echo"<script>location='listado_transportista.php'</script>";
	}
	if($oculto=="chofer")
	{	
		$nombre=$_POST["nombre"];
		$rut=$_POST["rut"];
		$sql="update chofer set nombre='$nombre' ,rut='$rut'  where id=$id";
		$result = mysql_query($sql);
		echo"<script>alert('Chofer Actualizado Exitosamente')</script>";
		echo"<script>location='listado_choferes.php'</script>";
	}
		if($oculto=="materia")
	{	
		$nombre=$_POST["nombre"];
		$sql="update materias set nombre='$nombre' where id=$id";
		$result = mysql_query($sql);
		echo"<script>alert('Materia Prima Actualizado Exitosamente')</script>";
		echo"<script>location='listado_materias.php'</script>";
	}
	if($oculto=="camion")
	{
		$id=$_REQUEST["id"];
		$tipo_vehiculo=$_POST["tipo_vehiculo"];
		$empresa=$_POST["empresa_transportista"];
		$tara=$_POST["tara"];
		$patente=$_POST["patente"];
		$chofer=$_POST["chofer"];
		
		$sql="update camiones set tipo_vehiculo='$tipo_vehiculo', patente='$patente', tara='$tara', empresa='$empresa' where id=$id";
	$result = mysql_query($sql);
		echo"<script>alert('Camion Actualizado Exitosamente')</script>";
	echo"<script>location='listado_camiones.php'</script>";	
	}
	if($oculto=="usuario")
	{
		$nom_comp=$_POST["nombre"];
		$nom_user=$_POST["user"];
		$pass_user=$_POST["pass"];
		$privilegio=$_POST["privilegio"];
		//$sql2="insert into usuarios(nom_comp,nom_user,pass_user,privilegio) values ('$nombre','$user','$pass','$privilegio')";
		$sql="update usuarios set nom_comp='$nom_comp', nom_user='$nom_user', pass_user='$pass_user', privilegio='$privilegio' where id=$id";
		$result = mysql_query($sql);
		echo"<script>alert('Usuario Actualizado Exitosamente')</script>";
		echo"<script>location='listado_usuarios.php'</script>";
	}
		if($oculto=="cliente")
	{
		$nombre=$_POST["nombre"];
		$rut=$_POST["rut"];
		$comuna=$_POST["comuna"];
		$ciudad=$_POST["ciudad"];
		$direccion=$_POST["direccion"];
		$fono=$_POST["fono"];
		$email=$_POST["email"];
		
		$sql2="insert into usuarios(nom_comp,nom_user,pass_user,privilegio) values ('$nombre','$user','$pass','$privilegio')";
		$sql="update cliente set nombre='$nombre', calle='$direccion', comuna='$comuna', ciudad='$ciudad' ,telefono='$fono',rut='$rut',email='$email' where id=$id";
		$result = mysql_query($sql);
		echo"<script>alert('Cliente Actualizado Exitosamente')</script>";
		echo"<script>location='listado_clientes.php'</script>";
	}
		if($oculto=="proveedor")
	{
		$nombre=$_POST["nombre"];
		$rut=$_POST["rut"];
		$comuna=$_POST["comuna"];
		$ciudad=$_POST["ciudad"];
		$direccion=$_POST["direccion"];
		$fono=$_POST["fono"];
		$email=$_POST["email"];
		
		//$sql2="insert into usuarios(nom_comp,nom_user,pass_user,privilegio) values ('$nombre','$user','$pass','$privilegio')";
		$sql="update proveedor set nombre='$nombre', calle='$direccion', comuna='$comuna', ciudad='$ciudad' ,telefono='$fono',rut='$rut',email='$email' where id=$id";
		$result = mysql_query($sql);
		echo"<script>alert('Proveedor Actualizado Exitosamente')</script>";
		echo"<script>location='listado_proveedores.php'</script>";
	}
	

?>