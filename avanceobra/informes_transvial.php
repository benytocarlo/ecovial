<?php
	require_once("sesion.class.php");
	
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");
//echo $usuario;
	if( $usuario == false )
	{	
		header("Location: login.php");		
	}
	else 
	{
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Control de Avance de Obra</title>
<style type="text/css">
<!--
.Estilo1 {
	font-size: 36px;
	font-weight: bold;
}
.Estilo4 {font-size: 24}
-->
</style>
</head>

<body>
<p><br />
</p>
<p>&nbsp;</p>
<table width="1015" border="0" align="center">
  <tr>
    <td><div align="center"><span class="Estilo1">INFORMES DE TRANSVIAL</span></div></td>
    <td><div align="center"><img src="rutas_small.jpg" width="189" height="84" />|</div></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="463" border="1" align="center">
  <tr>
    <td align="center"><div align="center"><a href="informe_tolva_x_cliente1.php">Informe de Tolvas por Cliente</a></div></td>
    <td align="center"><a href="informe_cbaja_x_cliente1.php">Informe de Camas Baja por Cliente</a></td>
  </tr>
  <tr>
    <td align="center"><div align="center"><a href="informe_tolva_x_cliente1_old.php">Informe de Tolvas por Cliente hasta el 15 abril 2014</a></div></td>
    <td align="center"><a href="informe_cbaja_x_chofer1.php">Informe Camas Baja por Chofer</a></td>
  </tr>
  <tr>
    <td align="center"><a href="informe_tolva_x_chofer1.php">Informe Tolvas por Chofer</a></td>
    <td align="center"><a href="informe_semana_transvial_cb1.php">Informe Semana Corrida Camas Baja</a></td>
  </tr>
  <tr>
    <td align="center"><a href="informe_semana_transvial.php">Informe Semana Corrida Tolva</a></td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><div align="center"><a href="informe_petroleo_x_chofer1.php">Informe de Petróleo por Chofer</a></div></td>
    <td align="center"><a href="informe_petroleo_gral.php">Informe General de Petróleo</a></td>
  </tr>
  <tr>
    <td align="center"><a href="informe_tolva_x_chofer_obra1.php">Informe Tolva por Chofer y Obra</a></td>
    <td align="center"><a href="informe_tolva_x_cliente_obra1.php">Cliente por Obra</a></td>
  </tr>
  <tr>
    <td align="center"><a href="informe_tolva_x_patente1.php">Informe Tolva por Patente</a></td>
    <td align="center"><a href="informe_cbaja_x_patente1.php">Informe Cama Baja por Patente</a></td>
  </tr>
</table>
<br />
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="200" border="0" align="center">
  <tr>
    <td><div align="center"></h1> <a href="cerrarsesion.php"><img src="img_bot/salir.jpg" width="120" height="34" <?php echo $sesion->get("usuario"); ?> </div></td>
  </tr>
</table>
<p>&nbsp;</p>
<p class="Estilo4">&nbsp;</p>
<p class="Estilo4">&nbsp;</p>
<p class="Estilo4">&nbsp;</p>
<p><span class="Estilo4"><a href="mantenedor_ecovial.php"></a></span></p>
</body>
</html>
	<?php 
	}	
?>