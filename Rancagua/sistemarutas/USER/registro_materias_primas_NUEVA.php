<?php 
require_once('includes/func_inc.php');
include("conexion.php");
include("conexcion_sql.php");
 ?>

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
    
    	<SCRIPT type="text/javascript" src="dhtmlgoodies_calendar.js"></script>
    <link type="text/css" rel="stylesheet" href="dhtmlgoodies_calendar.css?" media="screen"></LINK>
</head>
<?php $xajax->printJavascript('includes/xajax/'); ?>
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
		<form action="registro_materias_primas_confirmacion.php" method="post" id="form" name="form">
<table width="561" border="0">
  <tr>
    <td width="115" height="50"><strong>N&deg; Orden de Compra
        
    </strong></td>
    <td width="191"><strong>
      <input name="orden" type="text" id="orden" size="14" />
    </strong></td>
    <td width="77"><strong>N&deg; Guia
      
    </strong></td>
    <td width="150"><strong>
      <input name="guia" type="text" id="guia" size="14" />
    </strong></td>
  </tr>
</table>
<table width="558" height="357">
<tr>
                        <td width="203"><strong>Patente</strong></td>
                        <td width="343"><div id="select_patente">
                          <select name="patente2" id="patente2" onchange="xajax_tara(document.form.patente2.value)">
                            <option value="">Elija una Opci&oacute;n</option>
                            <?$sql ="SELECT * FROM camiones order by patente asc";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{?>
                            <option value="<? echo $row[0]; ?>"> <? echo $row[2]; ?></option>
                            <?}?>
                          </select>
                        </div></td>
</tr><tr>
                        <td width="203"><strong>N&deg; Pesaje</strong></td>
                        <td width="343"><select name="n_pesaje" id="n_pesaje" onchange="xajax_buscarpesaje2(document.form.n_pesaje.value);"/>
                <option value="">Elija una Opci&oacute;n</option>
			<?php
				 $sql2="select * from PESAJEEJES order by PEjNro DESC";
				$rs=odbc_exec($cid,$sql2)or die(exit("Error en odbc_exec"));
				while (odbc_fetch_row($rs))
				 {
					$peso=odbc_result($rs,"PEjNro");
				 ?>
				 <option value="<? echo $peso;?>"> <? echo $peso; ?></option>
				  
				  <?php
				  } 
				?>
			</select>	</td>
          </tr>
<tr>
                        <td width="203"><strong>Proveedor</strong></td>
                       <td width="343"><select name="proveedor" id="proveedor">
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
                        <td id="peso_brutoid"><strong>Peso Bruto</strong></td>
                        <td ><input type="text" name="peso" id="peso" /></td>
          </tr>
           <tr>
                        <td><strong>Tara</strong></td>
                        <td><input type="text" name="tara" id="tara" /></td>
          </tr>
                      <tr>
                        <td><strong>Precio Unitario</strong></td>
                        <td><input type="text" name="precio" id="precio" /></td>
                      </tr>
                      <tr>
                        <td><strong>Patente</strong></td>
                        <td><input type="text" name="patente" id="patente" /></td>
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
