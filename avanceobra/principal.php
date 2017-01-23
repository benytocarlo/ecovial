<?php
	require_once("sesion.class.php");
	
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");
echo $usuario;
	if( $usuario == false )
	{	
		header("Location: login.php");		
	}
	else 
	{
	?>
	<HTML><head>
	<title></title>
	</head>
	<body>
	<h1>Hola:  <?php echo $sesion->get("usuario"); ?> </h1> <a href="cerrarsesion.php"> Cerrar Sesion </a>
	<p> <a href="Informe_Hoy.php">Aqui va el contenido de la pagina </a></p>
	</body>
	</HTML>
	
	<?php 
	}	
?>