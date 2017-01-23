<?php
require_once('includes/func_inc.php');
//include_once($_SERVER['DOCUMENT_ROOT']."/forum/2010/src/includes/func_inc.php");
//echo "http://".$_SERVER[HTTP_HOST]."/forum/2010/scr/includes/xajax/";
?>
<?php
	include("conexion.php"); 
	////include("include("conexcion_sql.php");"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<SCRIPT type="text/javascript" src="dhtmlgoodies_calendar.js"></script>
    <link type="text/css" rel="stylesheet" href="dhtmlgoodies_calendar.css?" media="screen"></LINK>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema de Pesaje</title>
<?php $xajax->printJavascript('includes/xajax/'); ?>
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
				      <li><a href="anular_mt.php" >Anular  Materias Primas</a></li>
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
		<form action="registro_materias_primas_confirmacion.php" method="post" name="form" id="form">
					<table width="561" border="0">
					  <tr>
						<td width="115" height="50"><strong>N&deg; Orden de Compra</strong></td>
						<td width="191"><input name="orden" type="text" id="orden" size="14" /></td>
						<td width="77"><strong>N&deg; Guia</strong></td>
						<td width="150"><input name="guia" type="text" id="guia" size="14" /></td>
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
                         <option value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                         <?}?>
                       </select></td>
                      </tr>
					  <tr>
                        <td width="203"><strong>Transportista</strong></td>
                       <td width="344"><select name="transportista" id="transportista">
                         <option value="">Elija una Opcion</option>
                         <? $sql ="SELECT * FROM transportista order by nombre asc";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{ ?>
                         <option value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                         <?}?>
                       </select></td>
                      </tr>
				
					 <tr>
                       
					</tr>
					  <tr>
                        <td width="203"><strong>Patente</strong></td>
						<td width="344">
							<div id="select_patente">
                            <select name="patente" id="patente" onchange="xajax_tara(document.form.patente.value)">
                              <option value="">Elija una Opci&oacute;n</option>
                              <?$sql ="SELECT * FROM camiones order by patente asc";

								$result = mysql_query($sql); 
								while($row = mysql_fetch_row($result))
								{?>
									  <option value="<? echo $row[0]; ?>"> <? echo $row[2]; ?></option>
                              <?}?>
                            </select>
                          </div>
						 </td>
					  </tr>				  
					  <tr>
                      
                      </tr>
					  
                      <tr>
                        <td><strong>Chofer</strong></td>
                        <td><select name="chofer" id="chofer">
                          <option value="">Elija una Opcion</option>
                          <? $sql ="SELECT DISTINCT nombre FROM chofer ORDER BY  nombre ASC ";
//echo $sql;
						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{ ?>
                          <option value="<? echo $row[0]; ?>"> <? echo $row[0]; ?></option>
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
                          <option value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                          <?}?>
                        </select></td>
                      </tr>
                      <tr>
                        <td><strong>Fecha Guia</strong></td>
                        <td><input type="text" readonly="readonly" name="fecha" />
                        <input type="button" value="Ver Calendario" onclick="displayCalendar(document.forms[0].fecha,'yyyy-mm-dd',this)" /></td>
          </tr>
                      <tr>
                        <td><strong>Cantidad</strong></td>
                        <td><input type="text" name="cantidad" id="cantidad" />
                      </td>
          </tr>
                      <tr>
                        <td><strong>Precio Unitario</strong></td>
                        <td><input type="text" name="precio" id="precio" /></td>
                      </tr>
                      <tr>
                        <td><strong>Obra</strong></td>
                        <td><select name="obra" id="obra">
                          <option value="">Elija una Opci&oacute;n</option>
                          <?$sql ="SELECT * FROM obra order by nombre asc";
        
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_row($result))
                                {?>
                          <option value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                          <?}?>
                        </select></td>
                      </tr>
                    
                      <tr>
                        <td><input type="hidden" name="oculto" id="oculto" value="ingreso_materias"/></td>
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
