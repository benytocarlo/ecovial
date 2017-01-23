<?php
	require_once("sesion.class.php");
	
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");
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
    <td><div align="center"><span class="Estilo1">ESTADO DE AVANCE DE OBRAS</span></div></td>
    <td><div align="center"><img src="rutas_small.jpg" width="191" height="84" /></div></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="1011" border="1" align="center">
  <tr>
    <td width="252"><div align="center"><strong>DEPARTAMENTO DE ESTUDIOS</strong></div></td>
    <td width="253"><div align="center"><strong>ECOVIAL MAQUINARIAS</strong></div></td>
    <td width="226"><div align="center"><strong>ECOVIAL ASFALTO</strong></div></td>
    <td width="252"><div align="center"><strong>INFORMES</strong></div></td>
  </tr>
  <tr>
    <td><div align="center"><a href="registro_obra.php">Registro Inicial Obra</a></div></td>
    <td rowspan="2"><div align="center"><a href="registro_ecomaq.php">Registro Estado de Avance de <br />
    Fresado y Slurry</a></div></td>
    <td rowspan="2"><div align="center"><a href="registro_asfalto.php">Registro Estado de Avance de Colocación de Asfalto</a></div></td>
    <td rowspan="2"><div align="center"><a href="Informes.php">Informes Estado Avance de Obras</a></div></td>
  </tr>
  <tr>
    <td><div align="center"><a href="mantenedor_ecovial.php">Mantenedor de BD</a></div></td>
  </tr>
</table>
<br />
<table width="618" border="1" align="center">
  <tr>
    <td width="239"><div align="center"><strong>ECOVIAL MAQUINARIAS</strong></div></td>
    <td width="138"><div align="center"></div></td>
    <td width="219"><div align="center"><strong>TRANSVIAL</strong></div></td>
  </tr>
  <tr>
    <td><div align="center"><a href="report_equipos.php">Report Equipos</a></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"><a href="report_tolvas.php">Report Tolvas</a></div></td>
  </tr>
  <tr>
    <td><div align="center"><a href="report_fresado.php">Report Fresado</a></div></td>
    <td>&nbsp;</td>
    <td><div align="center"><a href="report_camabaja.php">Report Cama Baja</a></div></td>
  </tr>
  <tr>
    <td><div align="center"><a href="report_petroleo_ecomaq.php">Report Petróleo</a></div></td>
    <td>&nbsp;</td>
    <td><div align="center"><a href="report_petroleo.php">Report Petróleo</a></div></td>
  </tr>
  <tr>
    <td><div align="center"><a href="informes_ecomaq.php"><strong>Informes 
    EcoMAQ</strong></a></div></td>
    <td>&nbsp;</td>
    <td><div align="center"><strong><a href="informes_transvial.php">Informes Transvial</a></strong></div></td>
  </tr>
</table>
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