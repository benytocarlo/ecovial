<?php include("conexion.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema de Pesaje</title>

<link rel="stylesheet" href="styles.css" type="text/css" />
<style type="text/css">
<!--
.Estilo1 {
	color: #000066;
	font-weight: bold;
	font-size: 22px;
}
-->
</style>
<? 
$n_orden=$_POST["orden"];
$n_guia=$_POST["guia"];
$proveedor=$_POST["proveedor"];
$materia=$_POST["materia"];
$fecha=$_POST["fecha"];
$cantidad=$_POST["cantidad"];
$precio=$_POST["precio"];
$patente=$_POST["patente"];
?>
    
    	<SCRIPT type="text/javascript" src="dhtmlgoodies_calendar.js"></script>
    <link type="text/css" rel="stylesheet" href="dhtmlgoodies_calendar.css?" media="screen"></LINK>
</head>
<body>
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
				<li>
					<h4>Acciones</h4>
					<ul>
                      <li><a href="editar_mt.php" > Editar Materias Primas</a><a href="listado_usuarios.php" ></a></li>
				  </ul>
				</li>
				
				<li></li>
		  </ul>
	  <ul>	
				<?php	include("menu_informes.php");  ?>
				
				<li></li>
		  </ul>
	  </div>	
<div class="page-content">	
			<!-- CONTENT -->
			<span class="Estilo1">Ingreso de Materias Primas </span>
<fieldset>
				<legend></legend>
                </fieldset>
		<form action="insert.php" method="post" id="form">
<table width="561" border="0">
  <tr>
    <td width="115" height="50"><strong>N&deg; Orden de Compra</strong></td>
    <td width="191"><input name="orden" type="text" id="orden" value="<? echo $n_orden; ?>" size="14" /></td>
    <td width="77"><strong>N&deg; Guia</strong></td>
    <td width="150"><input name="guia" type="text" id="guia" value="<? echo $n_guia; ?>" size="14" /></td>
  </tr>
</table>
<table width="559" height="357">

                      <tr>
                        <td width="203"><strong>Proveedor</strong></td>
                       <td width="344"><select name="proveedor" id="proveedor">
                         <option value="">Elija una Opcion</option>
                         <? $sql ="SELECT * FROM proveedor order by nombre asc";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{ ?>
                        <? if($proveedor== $row[0]) { ?>
                         <option value="<? echo $row[0]; ?>" selected="selected"> <? echo $row[1]; ?></option>
                         <? }else{ ?>
                          <option value="<? echo $row[0]; ?>" se> <? echo $row[1]; ?></option>
                         <? } ?>
                         <?}?>
                       </select></td>
                      </tr>
                      <tr>
                        <td><strong>Materia Prima</strong></td>
                        <td><select name="materia" id="materia">
                          <option value="">Elija una Opcion</option>
                          <? $sql ="SELECT * FROM materias order by nombre asc";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{ ?>
                         <? if($materia== $row[0]) { ?>
                          <option value="<? echo $row[0]; ?>" selected="selected"> <? echo $row[1]; ?></option>
                           <? }else{ ?>
                            <option value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                             <? } ?>
                          <?}?>
                        </select></td>
                      </tr>
                      <tr>
                        <td><strong>Fecha Guia</strong></td>
                        <td><input name="fecha" type="text" value="<? echo $fecha; ?>" readonly="readonly" />
                        <input type="button" value="Ver Calendario" onclick="displayCalendar(document.forms[0].fecha,'yyyy-mm-dd',this)" /></td>
          </tr>
                      <tr>
                        <td><strong>Cantidad</strong></td>
                        <td><input name="cantidad" type="text" id="cantidad" value="<? echo $cantidad; ?>" /></td>
          </tr>
                      <tr>
                        <td><strong>Precio Unitario</strong></td>
                        <td><input name="precio" type="text" id="precio" value="<? echo $precio; ?>" /></td>
                      </tr>
                      <tr>
                        <td><strong>Patente</strong></td>
                        <td><input name="patente" type="text" id="patente" value="<? echo $patente; ?>" /></td>
                      </tr>
                      <tr>
                        <td><input type="hidden" name="oculto" id="oculto" value="ingreso_materias"/></td>
                        <td><input type="submit" name="send" class="formbutton" value="Esta Seguro Guardar" /></td>
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
