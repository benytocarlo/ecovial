<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}
-->
</style></head>

<body>
<?php
 include("conexion.php");
 	?>
		  

<form action="insertar_reporte.php" method="post" id="form">
<p align="center"><strong>REGISTRO DE REPORTE DIARIO</strong></p>
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
    <td><input name="fecha" type="text" id="fecha" size="10" maxlength="10" /></td>
  </tr>
  <tr>
    <td>Obra</td>
    <td colspan="3"><select name="obra" id="obra">
	<? $sql ="select * from obra";
		$result = mysql_query($sql);
// 		  'Recorremos todos los registros del objeto recordset y mostramos su valor 
		while($row =mysql_fetch_row($result))
		{ ?>
       <option value='<? echo $row[0]; ?>'><? echo $row[0]; ?></option>
        <? }?>        
		</select></td>
		
  </tr>
  <tr>
    <td>Cliente</td>
    <td colspan="3"><select name="cliente" id="cliente">
	<? $sql ="select * from obra";
		$result = mysql_query($sql);
// 		  'Recorremos todos los registros del objeto recordset y mostramos su valor 
		while($row =mysql_fetch_row($result))
		{ ?>
       <option value='<? echo $row[1]; ?>'><? echo $row[1]; ?></option>
        <? }?> 
		</select></td>
  </tr>
  <tr>
    <td>Operador</td>
    <td colspan="3"><select name="operador" id="operador">
	<? $sql ="select * from obra";
		$result = mysql_query($sql);
// 		  'Recorremos todos los registros del objeto recordset y mostramos su valor 
		while($row =mysql_fetch_row($result))
		{ ?>
       <option value='<? echo $row[2]; ?>'><? echo $row[2]; ?></option>
        <? }?> 
		</select></td>
  </tr>
  <tr>
    <td>M&aacute;quina</td>
    <td colspan="3"><select name="maquina" id="maquina">
	<? $sql ="select * from obra";
		$result = mysql_query($sql);
// 		  'Recorremos todos los registros del objeto recordset y mostramos su valor 
		while($row =mysql_fetch_row($result))
		{ ?>
       <option value='<? echo $row[3]; ?>'><? echo $row[3]; ?></option>
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
    <td colspan="3"><select name="t_realiza" id="t_realiza">
	<? $sql ="select * from obra";
		$result = mysql_query($sql);
// 		  'Recorremos todos los registros del objeto recordset y mostramos su valor 
		while($row =mysql_fetch_row($result))
		{ ?>
       <option value='<? echo $row[4]; ?>'><? echo $row[4]; ?></option>
	   <? } ?>
        </select></td>
  </tr>
  <tr>
    <td>Direcci&oacute;n Trabajos </td>
    <td colspan="3"><select name="d_trabajo" id="d_trabajo">
	<? $sql ="select * from obra";
		$result = mysql_query($sql);
// 		  'Recorremos todos los registros del objeto recordset y mostramos su valor 
		while($row =mysql_fetch_row($result))
		{ ?>
       <option value='<? echo $row[5]; ?>'><? echo $row[5]; ?></option>
         <? } ?>
		</select></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td>Superficie  </td>
    <td>Otros Datos Relevantes </td>
  </tr>
  <tr>
    <td colspan="2">Fresado</td>
    <td><div align="center">
        <input name="fresado1" type="text" id="fresado1" size="4" maxlength="4" />
    x
    <input name="fresado2" type="text" id="fresado2" size="4" maxlength="4" />
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
      <div align="right">
        <textarea name="observaciones" cols="80" rows="5" id="observaciones"></textarea>
        </div>    </td>
  </tr>
</table>
<table width="200" border="1" align="center">
  <tr>
    <td><div align="center"><input name="button" type="submit" id="button"  value="Guardar"/></div></td>
  </tr>
</table>
<div align="center"></div>
<p>&nbsp;</p>
<p>&nbsp; </p>
</form>
</body>
</html>
