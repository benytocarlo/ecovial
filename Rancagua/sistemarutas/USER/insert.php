<?php
include("conexion.php");

$oculto=$_POST["oculto"];
	
	if($oculto=="centro")
	{
		$fecha=$_POST["fecha"];
		$centrocostos=$_POST["centrocostos"];
		$item=$_POST["item"];
		$patente=$_POST["patente"];
		$producto=$_POST["producto"];
		$litros=$_POST["litros"];
		
		if($item=="" && $fecha=="" && $centrocostos=="" && $patente=="" && $producto=="" && $litros=="" )
		{	
			echo"<script>alert('Faltan datos que ingresar')</script>";
			echo"<script>location='registro_ingresos.php'</script>";
		}else{
			$sql="insert into ingreso_petroleo(fecha,centro,item,patente,producto,litros) values ('$fecha','$centrocostos','$item','$patente','$producto','$litros')";
			$result = mysql_query($sql);
			echo"<script>alert('Registro Ingresado Exitosamente')</script>";
			echo"<script>location='index.php'</script>";
		}
	
	}
	if($oculto=="mezcla")
	{
		$tipo=$_POST["tipo"];
		$nombre=$_POST["nombre"];
		$valor=$_POST["valor"];
		$sql="insert into mezclas(tipo,nombre,valor) values ('$tipo','$nombre',$valor)";
		$result = mysql_query($sql);
		echo"<script>alert('Producto Ingresado Exitosamente')</script>";
		echo"<script>location='listado_mezclas.php'</script>";

	
	}
	if($oculto=="materia")
	{
		$nombre=$_POST["nombre"];
		$sql="insert into materias(nombre) values ('$nombre')";
		$result = mysql_query($sql);
		echo"<script>alert('Materia Prima Ingresada Exitosamente')</script>";
		echo"<script>location='listado_materias.php'</script>";

	
	}
	if($oculto=="transportista")
	{

		$nombre=$_POST["nombre"];
		$sql="insert into transportista(nombre) values ('$nombre')";
		$result = mysql_query($sql);
		echo"<script>alert('Transportista Ingresado Exitosamente')</script>";
		echo"<script>location='listado_transportista.php'</script>";

	
	}
	if($oculto=="camion")
	{
		$tipo_vehiculo=$_POST["tipo_vehiculo"];
		$empresa_transportista=$_POST["empresa_transportista"];
		$tara=$_POST["tara"];
		$patente=$_POST["patente"];
		$sql2="insert into camiones(tipo_vehiculo,patente,tara,empresa) values ('$tipo_vehiculo','$patente','$tara','$empresa_transportista')";
		$result = mysql_query($sql2);
		echo"<script>alert('Camion Ingresado Exitosamente')</script>";
		echo"<script>location='listado_camiones.php'</script>";	
	}
	if($oculto=="usuario")
	{
		$nombre=$_POST["nombre"];
		$user=$_POST["user"];
		$pass=$_POST["pass"];
		$privilegio=$_POST["privilegio"];
		$sql2="insert into usuarios(nom_comp,nom_user,pass_user,privilegio) values ('$nombre','$user','$pass','$privilegio')";
		$result = mysql_query($sql2);
		echo"<script>alert('Usuario Ingresado Exitosamente')</script>";
		echo"<script>location='listado_usuarios.php'</script>";
	}
	if($oculto=="cliente")
	{
		$rut=$_POST["rut"];
		$nombre=$_POST["nombre"];
		$direccion=$_POST["direccion"];
		$comuna=$_POST["comuna"];
		$ciudad=$_POST["ciudad"];
		$fono=$_POST["fono"];
		$email=$_POST["email"];
		$giro=$_POST["giro"];
		$sql="insert into cliente(nombre,calle,comuna,ciudad,telefono,rut,email,giro) values ('$nombre','$direccion','$comuna','$ciudad','$fono','$rut','$email','$giro')";
		$result = mysql_query($sql);
		echo"<script>alert('Cliente Ingresado Exitosamente')</script>";
		echo"<script>location='listado_clientes.php'</script>";

	
	}
	if($oculto=="proveedor")
	{
		$rut=$_POST["rut"];
		$nombre=$_POST["nombre"];
		$direccion=$_POST["direccion"];
		$comuna=$_POST["comuna"];
		$ciudad=$_POST["ciudad"];
		$fono=$_POST["fono"];
		$email=$_POST["email"];
		$sql="insert into proveedor(nombre,calle,comuna,ciudad,telefono,rut,email) values ('$nombre','$direccion','$comuna','$ciudad','$fono','$rut','$email')";
		$result = mysql_query($sql);
		echo"<script>alert('Proveedor Ingresado Exitosamente')</script>";
		echo"<script>location='listado_proveedores.php'</script>";

	
	}
	if($oculto=="obra")
	{
		
		$nombre=$_POST["nombre"];
		$ubicacion=$_POST["ubicacion"];
		$ciudad=$_POST["ciudad"];
		$sql="insert into obra(nombre,ubicacion,ciudad) values ('$nombre','$ubicacion','$ciudad')";
		$result = mysql_query($sql);
		echo"<script>alert('Obra Ingresada Exitosamente')</script>";
		echo"<script>location='listado_obras.php'</script>";

	
	}
	if($oculto=="chofer")
	{
		
		$nombre=$_POST["nombre"];
		$rut=$_POST["rut"];
		$sql="insert into chofer(rut,nombre) values ('$rut','$nombre')";
		$result = mysql_query($sql);
		echo"<script>alert('Chofer Ingresado Exitosamente')</script>";
		echo"<script>location='listado_choferes.php'</script>";

	
	}
	if($oculto=="centro")
	{
		
		$nombre=$_POST["nombre"];
		$sql="insert into centrocostos(nombre) values ('$nombre')";
		$result = mysql_query($sql);
		echo"<script>alert('Centro de Costo Ingresado Exitosamente')</script>";
		echo"<script>location='listado_centros.php'</script>";

	
	}
	if($oculto=="ingreso_materias")
	{
		$orden=$_POST["orden"];
		$guia=$_POST["guia"];
		$proveedor=$_POST["proveedor"];
		$materia=$_POST["materia"];
		$fecha=$_POST["fecha"];
		$cantidad=$_POST["cantidad"];
		$precio=$_POST["precio"];
		$patente=$_POST["patente"];
		
		
		$sql="insert into ingreso_materias(orden_compra,guia,proveedor,materia,fecha_guia,cantidad,precio_unitario,patente) values ('$orden','$guia','$proveedor','$materia','$fecha','$cantidad','$precio','$patente')";
		$result = mysql_query($sql);
		echo"<script>alert('Ingreso Exitoso')</script>";
		echo"<script>location='registro_materias_primas_confirmacion_imprimir.php'</script>";
	}
	if($oculto=="ingreso_orden")
	{
		$orden=$_POST["num_orden"];
		$cliente=$_POST["cliente"];
		$fecha=$_POST["fecha"];
		$tipo_mezcla=$_POST["tipo_mezcla"];
		$mezclita=$_POST["mezclita"];
		$cantidad=$_POST["cantidad"];
		
		$sql="insert into ingreso_orden(orden,cliente,fecha,tipo_mezcla,mezcla,cantidad) values ('$orden','$cliente','$fecha','$tipo_mezcla','$mezclita','$cantidad')";
		$result = mysql_query($sql);
		echo"<script>alert('Ingreso Exitoso')</script>";
		echo"<script>location='index.php'</script>";
	}
?>