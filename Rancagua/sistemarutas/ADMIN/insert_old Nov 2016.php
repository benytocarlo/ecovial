<?php
include("conexion.php");

$oculto=$_POST["oculto"];
	
	if($oculto=="testinfo")
	{
		//$fecha=NOW();
		$patente=$_POST["patente"];
		$temperatura=$_POST["temperatura"];
		$cargam3=$_POST["result"];
		$cargakg=$_POST["kilo"];
		
		if($patente=="" && $temperatura=="" )
		{	
			echo"<script>alert('Faltan datos que ingresar')</script>";
			echo"<script>location='test_info3.php'</script>";
		}else{
			$sql="insert into registro_temperatura(patente,temperatura,cargam3,cargakg) values ('$patente','$temperatura','$cargam3','$cargakg')";
			$result = mysql_query($sql);
			echo"<script>alert('Registro Ingresado Exitosamente')</script>";
			echo"<script>location='test_info3.php'</script>";
		}
	
	}
	
	if($oculto=="centro")
	{
		$fecha=$_POST["fecha"];
		$centrocostos=$_POST["centrocostos"];
		$item=$_POST["item"];
		$patente=$_POST["patente"];
		$producto=$_POST["producto"];
		$litros=$_POST["litros"];
		$precio=$_POST["precio"];
		$cliente=$_POST["cliente"];
		
		if($item=="" && $fecha=="" && $centrocostos=="" && $patente=="" && $producto=="" && $litros=="" && $precio=="" && $cliente=="" )
		{	
			echo"<script>alert('Faltan datos que ingresar')</script>";
			echo"<script>location='registro_ingresos.php'</script>";
		}else{
$sql="insert into ingreso_petroleo(fecha, vale, item, r_planta, patente, e_asfalto, producto, chofer, litros, odo, cliente) values ('$fecha','$vale','$item','$r_planta','$patente','$e_asfalto', '$producto', '$chofer', '$litros', '$odo', '$cliente')";

			$result = mysql_query($sql);
			echo"<script>alert('Registro Ingresado Exitosamente')</script>";
			echo"<script>location='index.php'</script>";
		}
	
	}
	if($oculto=="carga")
	{
		$fecha_hora=$_POST["fecha_hora"];
		$tipo=$_POST["tipo"];
		$patente=$_POST["patente"];
		$empresa=$_POST["transportista"];
		$chofer=$_POST["chofer"];
		$litros=$_POST["litros"];
		$observaciones=$_POST["observaciones"];
		error_reporting(E_ALL);
		require("phpmailer/class.phpmailer.php");
		require("phpmailer/class.smtp.php");
		$mail = new PHPMailer();
		
		/* Comentarios
		$mail->Host: Indicamos el host desde donde se hace el envío.
		$mail->From: Quien envía el correo.
		$mail->FromName: Nombre del remitente
		$mail->Subject: Asunto del correo.
		$mail->AddAddress: Dirección de destino. Se indica el correo y el nombre.
		$mail->AddCC: Dirección al que se le manda copia del correo.
		$mail->AddBCC: Dirección al que se le manda con copia oculta.
		
		*/
		
		$mail->IsSMTP();
		$mail->SMTPDebug  = 2;
		$mail->SMTPAuth   = true;                  // Habilita la autenticación SMTP
		$mail->SMTPSecure = "ssl";                 // Establece el tipo de seguridad SMTP
		$mail->Host       = "ssl://smtp.gmail.com";      // Establece Gmail como el servidor SMTP
		$mail->Port       = 465;            
		//$mail->Host = 'ssl://smtp.gmail.com';
		//$mail->Port = 465;
		//$mail->SMTPAuth = true;
		$mail->Username = 'itoknot2004@gmail.com';
		$mail->Password = '16271023';

		//$mail->Host = "localhost";
		$mail->From = "itoknot2004@gmail.com";
		$mail->FromName = "Nombre del Remitente";
		$mail->Subject = "Subject del correo";
		$mail->AddAddress("itoknot2004@gmail.com","Benito Gutierrez");
		//$mail->AddAddress("destino2@correo.com","Nombre 02");
		//$mail->AddCC("usuariocopia@correo.com");
		//$mail->AddBCC("usuariocopiaoculta@correo.com");
		$mail->IsHTML(true);
		
		$body  = "Hola <strong>amigo</strong><br>";
		$body .= "probando <i>PHPMailer<i>.<br><br>";
		$body .= "<font color='red'>Saludos</font>";
		$mail->Body = $body;
		$mail->AltBody = "Hola amigo\nprobando PHPMailer\n\nSaludos";
		
		if ($mail->Send())
		echo "Enviado";
		else
		echo "Error en el envio de mail";		


		
		
		if( $tipo=="" && $patente=="" && $transportista=="" && $chofer=="" && $litros=="" && $observaciones=="")
		{	
			echo"<script>alert('Faltan datos que ingresar')</script>";
			 echo"<script>location='registro_petroleo.php'</script>"; 
		}else{
			$sql="insert into petroleo(tipo,patente,empresa,chofer,litros,observaciones) values ('$tipo','$patente','$empresa','$chofer','$litros','$observaciones')";
			$result = mysql_query($sql);
			echo"<script>alert('Registro Ingresado Exitosamente')</script>";
			 echo"<script>location='registro_petroleo.php'</script>"; 
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
		$capacidad=$_POST["capacidad"];
		$num_camion=$_POST["num_camion"];
		$sql2="insert into camiones(tipo_vehiculo,patente,tara,empresa,capacidad,num_camion) values('$tipo_vehiculo','$patente','$tara','$empresa_transportista','$capacidad','$num_camion')";
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
		$tara=$_POST["tara"];
		$n_pesaje=$_POST["n_pesaje"];
		$peso=$_POST["peso"];
		$cant_calculada=$peso-$tara;
		$transportista = $_POST["transportista"];
		$sql="insert into ingreso_materias(orden_compra,guia,proveedor,transportista,materia,fecha_guia,cantidad_total,precio_unitario,patente,peso_bruto,tara,n_pesaje,cantidada_calculada) values ('$orden','$guia','$proveedor','$transportista','$materia','$fecha','$cantidad','$precio','$patente','$peso','$tara','$n_pesaje','$cant_calculada')";
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
	if($oculto=="devolucion")
	{
		$n_guia=$_POST["n_guia"];
		$oc=$_POST["oc"];
		$materia=$_POST["materia"];
		$fecha=$_POST["fecha"];
		$patente=$_POST["patente"];
		$obra=$_POST["obra"];
		$cliente=$_POST["cliente"];
		$cantidad=$_POST["cantidad"];
		$idmateria=$_POST["idmateria"];
		$sql="insert into devoluciones(n_guia,oc,materia,id_materia,fecha,patente,obra,cliente,cantidad) values ('$n_guia','$oc','$materia','$idmateria','$fecha','$patente','$obra','$cliente','$cantidad')";
		$result = mysql_query($sql);
		echo"<script>alert('Reingreso de Emulsion Ingresado Exitosamente')</script>";
		echo"<script>location='index.php'</script>";

	
	}
	if($oculto=="compra_insumos")
	{
		$num_orden=$_POST["num_orden"];
		$tipo_orden=$_POST["tipo_orden"];
		$cliente=$_POST["cliente"];
		$dirigido=$_POST["dirigido"];
		$total_neto=$_POST["total_neto"];
		$descuento=$_POST["descuento"];
		$total_descuento=$_POST["total_descuento"];
		$iva=$_POST["iva"];
		$total_bruto=$_POST["total_bruto"];
		$forma_pago=$_POST["forma_pago"];
		$plazo_entrega=$_POST["plazo_entrega"];
		$observaciones=$_POST["observaciones"];
		$fecha=date("Y-m-d");
		$sql="insert into orden_compra (fecha,cliente,sub_neto,descuento,iva,total,forma_de_pago,plazo_entrega,observaciones,extra_iva,dirigido) values ('$fecha','$cliente','$total_neto','$descuento','$iva','$total_bruto','$forma_pago','$plazo_entrega','$observaciones','$tipo_orden','$dirigido')";
		$result = mysql_query($sql);
		echo"<script>alert('Orden de Compra Ingresada Exitosamente')</script>";
		echo"<script>location='orden_compra.php?id=$num_orden'</script>";

	}
?>