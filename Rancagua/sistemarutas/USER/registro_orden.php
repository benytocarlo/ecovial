<?php include("conexion.php");
require_once('includes/func_inc.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema de Pesaje</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
	<SCRIPT type="text/javascript" src="dhtmlgoodies_calendar.js"></script>
    <?php $xajax->printJavascript('includes/xajax/'); ?>
    <link type="text/css" rel="stylesheet" href="dhtmlgoodies_calendar.css?" media="screen"></LINK>
<style type="text/css">
<!--
.Estilo1 {
	color: #000066;
	font-weight: bold;
	font-size: 22px;
}
-->
</style>
</head>
<body>
<?php include("conexion.php"); 
$sql="SELECT COUNT(id) FROM orden_compra";
$result = mysql_query($sql);
$count = mysql_fetch_array($result); 
$contador_presupuesto= $count[0] + 1;
?>
<div class="wrapper">
	<div class="top">
		<div class="header">
		</div>
		<div class="menu">
	<?php	include("menu.php");  ?>
		</div>
	</div>		
	<div class="content">
		<div class="sidebar column-left">
	  <ul>	
				<?php	include("menu_informes.php");  ?>
				
				<li></li>
		  </ul>
	  </div>	
<div class="page-content">	
			<!-- CONTENT -->
			<span class="Estilo1">Ingreso Orden de Compra</span>
			<fieldset>
				<legend></legend>
      </fieldset>
		<form action="insert.php" method="post" id="form" name="form">
<table width="664" border="0">
  <tr>
    <td width="219" height="50"><strong>N&deg; Orden de Compra</strong>
      <input name="num_orden" type="text" id="num_orden" size="10" /><br /><br /><br /></td>
    <td width="174"><strong>Fecha
        <input type="text" value="" readonly="readonly" name="fecha" id="fecha" />
        <input type="button" value="Ver Calendario" onclick="displayCalendar(document.forms[0].fecha,'yyyy/mm/dd',this)" />
    </strong></td>
    <td width="257"><strong>Cantidad</strong><br />
      <input type="text" name="cantidad" id="cantidad" /><br /><br /><br /></td>
    </tr>
</table>
<table width="323" height="190">
                      <tr>
                        <td width="213"><strong>Cliente<br />
                            <select name="cliente" id="cliente">
                            <option value="">Elija una Opcion</option>
                            <? $sql ="SELECT * FROM cliente order by nombre asc";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{ ?>
                            <option value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                            <?}?>
                          </select>
                        </strong></td>
                        <td width="94" height="43">&nbsp;</td>
          </tr>
                      <tr>
                        <td><strong>Tipo Producto
                          <select name="tipo_mezcla" id="tipo_mezcla" onchange="xajax_mezcla2(document.form.tipo_mezcla.value)">
                            <option value="">Elija una Opci&oacute;n</option>
                            <? $sql ="SELECT tipo, COUNT(DISTINCT tipo) as tipo_id FROM mezclas GROUP BY tipo";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{ ?>
                            <option value="<? echo $row[0]; ?>"> <? echo $row[0]; ?></option>
                            <? } ?>
                          </select>
                        <br />
                        </strong></td>
                        <td height="44">&nbsp;</td>
          </tr>
                      <tr>
                        <td id="mezcla_name">&nbsp;</td>
                        <td height="44">&nbsp;</td>
          </tr>
                      <tr>
                        <td height="46"><input type="hidden" name="oculto" id="oculto" value="ingreso_orden"/></td>
                        <td><input type="submit" name="send" class="formbutton" value="Guardar" /></td>
          </tr>
          </table>
	  </form>
	<fieldset>
	</fieldset>
	  </div>
	  <div class="clear"></div>	
	</div>		

	<p class="footer">Constructora Rutas</p>
</div>

			

</body>
</html>
