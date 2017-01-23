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
    <td><div align="center"><span class="Estilo1">ESTADO DE AVANCE DE OBRAS</span></div></td>
    <td><div align="center"><img src="rutas_small.jpg" width="189" height="84" /></div></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="691" border="1" align="center">
  <tr>
    <td width="144"><div align="center"><strong>SUELDOS</strong></div></td>
    <td width="170"><div align="center"><strong>FACTURACIÓN</strong></div></td>
    <td width="152" align="center"><strong>REGISTRO MIXVIAL</strong></td>
    <td width="197" align="center"><strong>INFORMES PETROLEO MIXVIAL</strong></td>
  </tr>
  <tr>
    <td rowspan="3"><div align="center"><a href="informe_operador_horasv2.php">Semana Corrida por Operador</a></div></td>
    <td><div align="center"><a href="informe_fact_maquinaria_x_cliente1.php">Equipo por Cliente</a></div></td>
    <td align="center"><a href="ingreso_petroleo.php">Ingreso Petroleo</a><a href="informe_fact_petroleo_x_proveedor1.php"></a></td>
    <td align="center"><a href="informe_ing_petroleo_proveedor.php">Petróleo por Proveedor</a></td>
  </tr>
  <tr>
    <td><div align="center"><a href="informe_fact_petroleo_x_cliente1.php">Petróleo por Cliente</a></div></td>
    <td align="center"><a href="informe_plantaxpatente1.php">Petroleo Planta por Patente</a></td>
    <td align="center"><a href="informe_ing_petroleo_planta.php">Petróleo por Destino</a></td>
  </tr>
  <tr>
    <td><div align="center"><a href="informe_fact_petroleo_x_clientexobra1.php">Petróleo Cliente por Obra</a></div></td>
    <td align="center"><a href="informe_cliente11.php"></a></td>
    <td align="center"><a href="informe_fact_petroleo_x_proveedor1.php">Petróleo por Planta</a></td>
  </tr>
  <tr>
    <td><div align="center"><a href="informe_operador_horas.php">Horas por Operador</a></div></td>
    <td><div align="center"><a href="informe_fact_fresadora_x_cliente1.php">Fresadora por Cliente</a></div></td>
    <td align="center"><a href="informe_horometro1.php">Horometros</a></td>
    <td align="center"><a href="informe_fact_petroleo_x_patente1.php">Petróleo por Patente</a></td>
  </tr>
  <tr>
    <td><div align="center"><a href="feriados/admin/?seccion=prevision">Registro de Festivos</a></div></td>
    <td><div align="center"><a href="informe_fact_fresadora_x_obra1.php">Fresadora por Obra</a></div></td>
    <td align="center"><a href="informe_ing_petroleo_proveedor.php"></a></td>
    <td align="center"><a href="informe_cliente11.php">Petróleo por Cliente</a></td>
  </tr>
  <tr>
    <td align="center"><a href="informe_fact_cliente_por_periodo1.php">Full Equipos por Cliente</a></td>
    <td align="center"><a href="informe_equipo_operador1.php">Equipo por Operador por Periodo</a></td>
    <td align="center"><a href="informe_fact_por_periodo1.php">Full Equipos por periodo</a></td>
    <td align="center"><a href="informe_plantaxcliente.php">Petróleo Planta por Cliente</a></td>
  </tr>
  <tr>
    <td><a href="informe_fact_equipo_por_periodo1.php">Equipo por Período</a></td>
    <td align="center"><a href="informe_equipo_obra1.php">Equipo por Obra por Período</a></td>
    <td align="center"><a href="informe_fact_maquinaria_x_cliente_xoperador1.php">Equipo por Cliente Filtro Operador</a></td>
    <td align="center"><a href="informe_fact_petroleo_x_chofer1.php">Petróleo por Chofer</a></td>
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