<?php
$state = false;
$Usuario = "root";
$Password = "root";
$Servidor = "localhost";
$BaseDeDatos = "nueva";
$conexion = mysql_connect($Servidor,$Usuario,$Password) or die ("Error El servidor no puede conectar con la BD");
$result = mysql_select_db($BaseDeDatos,$conexion);
if ($_POST['action'] == "add") { 
	$que = "INSERT INTO datos (num, fecha, obra, cliente, operador, maquina, h_inicio, h_termino, t_horas, litros, h_litros, t_realizados, d_trabajos, fresado1, fresado, data_fresado, imprimacion1, imprimacion2, data_imprimacion, observaciones) ";
	$que.= "VALUES ('".$_POST['num']."', '".$_POST['fecha']."', '".$_POST['obra']."', '".$_POST['cliente']."', '".$_POST['operador']."', '".$_POST['maquina']."', '".$_POST['h_inicio']."', '".$_POST['h_termino']."', '".$_POST['t_horas']."', '".$_POST['litros']."', '".$_POST['h_litros']."', '".$_POST['t_realizados']."', '".$_POST['d_trabajos']."', '".$_POST['fresado1']."', '".$_POST['fresado']."', '".$_POST['data_fresado']."', '".$_POST['imprimacion1']."', '".$_POST['imprimacion2']."', '".$_POST['data_imprimacion']."', '".$_POST['observaciones']."') ";
	$res = mysql_query($que);
	$state = true;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ecovial Maquinarias - Registro de Reporte</title>
<style type="text/css">
<!--
body {
	font-family: "Trebuchet MS", Tahoma, Arial;
	font-size: 12px;
	color: #333333;
}
h2 {
	font-size: 16px;
	color: #CC0000;
}
input, select {
	font-family: "Trebuchet MS", Tahoma, Arial;
	font-size: 11px;
	color: #666666;
}
.Estilo1 {font-size: 16px}
.Estilo2 {font-size: 24px}
-->
</style>
</head>
<body>
<h2 align="center" class="Estilo2">Registro de Reporte Diario</h2>
<form id="insertar" name="insertar" method="post" action="">
  <table width="1096" border="1" align="center">
    <tr>
      <td width="249">&nbsp;</td>
      <td width="48">&nbsp;</td>
      <td width="148">N&deg;</td>
      <td width="623"><input name="num" type="text" id="num" size="8" maxlength="8" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>Fecha</td>
      <td><input name="fecha" type="text" id="fecha" size="8" maxlength="8" /> 
      (Formato: a&ntilde;o-mes-d&iacute;a: Ejemplo: 20100823) </td>
    </tr>
    <tr>
      <td>Obra</td>
      <td colspan="3"><select name="obra" id="obra">
	<? $sql ="select * from empresa";
		$result = mysql_query($sql);
// 		  'Recorremos todos los registros del objeto recordset y mostramos su valor 
		while($row =mysql_fetch_row($result))
		{ ?>
       <option value='<? echo $row[1]; ?>' selected="selected"><? echo $row[1]; ?></option>
        <? }?>        
	  </select></td>
    </tr>
    <tr>
      <td>Cliente</td>
      <td colspan="3"><select name="cliente" id="cliente">
	<? $sql ="select * from empresa";
		$result = mysql_query($sql);
// 		  'Recorremos todos los registros del objeto recordset y mostramos su valor 
		while($row =mysql_fetch_row($result))
		{ ?>
       <option value='<? echo $row[2]; ?>' selected="selected"><? echo $row[2]; ?></option>
        <? }?>        
	  </select></td>
    </tr>
    <tr>
      <td>Operador</td>
      <td colspan="3"><select name="operador" id="operador">
	<? $sql ="select * from empresa";
		$result = mysql_query($sql);
// 		  'Recorremos todos los registros del objeto recordset y mostramos su valor 
		while($row =mysql_fetch_row($result))
		{ ?>
       <option value='<? echo $row[3]; ?>' selected="selected"><? echo $row[3]; ?></option>
        <? }?>        
	  </select></td>
    </tr>
    <tr>
      <td>M&aacute;quina</td>
      <td colspan="3"><select name="maquina" id="maquina">
	<? $sql ="select * from empresa";
		$result = mysql_query($sql);
// 		  'Recorremos todos los registros del objeto recordset y mostramos su valor 
		while($row =mysql_fetch_row($result))
		{ ?>
       <option value='<? echo $row[4]; ?>' selected="selected"><? echo $row[4]; ?></option>
        <? }?>        
	  </select></td>
    </tr>
    <tr>
      <td>Horometro</td>
      <td>Inicio</td>
      <td>Termino</td>
      <td>Total Horas </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="h_inicio" type="text" id="h_inicio" size="8" maxlength="8" /></td>
      <td><input name="h_termino" type="text" id="h_termino" size="8" maxlength="8" /></td>
      <td><input name="t_horas" type="text" id="t_horas" size="8" maxlength="8" /></td>
    </tr>
    <tr>
      <td>Combustible Cargado (Litros) </td>
      <td><input name="litros" type="text" id="litros" size="6" maxlength="6" /></td>
      <td>Horometro</td>
      <td><input name="h_litros" type="text" id="h_litros" size="6" maxlength="6" /></td>
    </tr>
    <tr>
      <td>Trabajos Realizados </td>
      <td colspan="3"><select name="t_realizados" id="t_realizados">
	<? $sql ="select * from empresa";
		$result = mysql_query($sql);
// 		  'Recorremos todos los registros del objeto recordset y mostramos su valor 
		while($row =mysql_fetch_row($result))
		{ ?>
       <option value='<? echo $row[5]; ?>' selected="selected"><? echo $row[5]; ?></option>
        <? }?>        
	  </select></td>
    </tr>
    <tr>
      <td>Direcci&oacute;n Trabajos </td>
      <td colspan="3"><select name="d_trabajos" id="d_trabajos">
	<? $sql ="select * from empresa";
		$result = mysql_query($sql);
// 		  'Recorremos todos los registros del objeto recordset y mostramos su valor 
		while($row =mysql_fetch_row($result))
		{ ?>
       <option value='<? echo $row[0]; ?>' selected="selected"><? echo $row[0]; ?></option>
        <? }?>        
	  </select></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
      <td>Superficie </td>
      <td>Otros Datos Relevantes </td>
    </tr>
    <tr>
      <td colspan="2">Fresado</td>
      <td><div align="center">
          <input name="fresado1" type="text" id="fresado1" size="4" maxlength="4" />
        x
        <input name="fresado" type="text" id="fresado" size="4" maxlength="4" />
      </div></td>
      <td><textarea name="data_fresado" cols="80" rows="2" id="data_fresado"></textarea></td>
    </tr>
    <tr>
      <td colspan="2">Imprimaci&oacute;n</td>
      <td><div align="center">
          <input name="imprimacion1" type="text" id="imprimacion1" size="4" maxlength="4" />
        x
        <input name="imprimacion2" type="text" id="imprimacion2" size="4" maxlength="4" />
      </div></td>
      <td><textarea name="data_imprimacion" cols="80" rows="2" id="textarea"></textarea></td>
    </tr>
    <tr>
      <td>Observaciones</td>
      <td colspan="3">
        <div align="left">
          <textarea name="observaciones" cols="80" rows="5" id="observaciones"></textarea>
          </div></td></tr>
  </table>
  <p>&nbsp;</p>
  <table width="200" border="0" align="center">
    <tr>
      <td><div align="center">
        <input type="submit" name="Submit" value="Insertar Registro" />
      </div></td>
    </tr>
  </table>
  <p>
    <input type="hidden" name="action" value="add" />
  </p>
</form>
<?php if ($state) { ?>
<p><em>Registro insertado correctamente</em></p>
<?php } ?> 
</body>
</html>
