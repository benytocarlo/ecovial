<?php
require_once('includes/func_inc.php');
//include_once($_SERVER['DOCUMENT_ROOT']."/forum/2010/src/includes/func_inc.php");
//echo "http://".$_SERVER[HTTP_HOST]."/forum/2010/scr/includes/xajax/";
?>
<?php
	include("conexion.php"); 
	include("conexcion_sql.php"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
 <? 
	$id=$_POST["n_guia"];
	$sql =" SELECT * FROM ingreso_materias where id=".$id."";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{ 
      
             			$n_orden=$row[1];
						$n_guia=$row[2];
						$proveedor=$row[3];
						$transportista=$row[4];
						$materia=$row[5];
						$fecha=$row[6];
						$cantidad=$row[7];
						$precio=$row[8];
						$patente=$row[9];
						$peso_bruto=$row[10];
						$tara=$row[11];
						$n_pesaje=$row[12];
		}
	?>
     <script>
   function sumar()
   {
    var camp1=document.form.tara.value;
    var camp2=document.form.peso.value;
	
	document.form.cantidad.value=camp2-camp1;
    
   }
  </script>   
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
				<form action="actualizar.php" method="post" id="form" name="form">
				<input type="hidden" name="id" id="id" value="<? echo $id; ?>"/>
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
                        <td width="203"><strong>Proveedor </strong></td>
                       <td width="344"><select name="proveedor" id="proveedor">
                         <option value="">Elija una Opcion</option>
                         <? $sql ="SELECT * FROM proveedor order by nombre asc";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{ ?>
                        <? if($proveedor== $row[0]) { ?>
                         <option value="<? echo $row[0]; ?>" selected="selected"> <? echo $row[1]; ?></option>
                         <? }else{ ?>
                          <option value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                         <? } ?>
                         <?}?>
                       </select></td>
                      </tr>
					  <tr>
                        <td width="203"><strong>Transportista </strong></td>
                       <td width="344"><select name="transportista" id="transportista">
                         <option value="">Elija una Opcion</option>
                         <? $sql ="SELECT * FROM transportista order by nombre asc";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{ ?>
                        <? if($transportista== $row[0]) { ?>
                         <option value="<? echo $row[0]; ?>" selected="selected"> <? echo $row[1]; ?></option>
                         <? }else{ ?>
                          <option value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                         <? } ?>
                         <?}?>
                       </select></td>
                      </tr>
					   <tr>
                        <td width="203"><strong>Numero de Pesaje</strong></td>
						<td width="344">
					  <select name="n_pesaje" id="n_pesaje" onchange="xajax_buscarpesaje2(document.form.n_pesaje.value);"/>
						<option value="">Elija una Opci&oacute;n</option>
					<?php
						 $sql2="select * from PESAJEEJES order by PEjNro DESC";
						$rs=odbc_exec($cid,$sql2)or die(exit("Error en odbc_exec"));
						while (odbc_fetch_row($rs))
						 {
							$peso=odbc_result($rs,"PEjNro");
						 ?>
						
								<? if($peso==$n_pesaje) { ?>
										<option value="<? echo $peso;?>" selected="selected"> <? echo $peso; ?></option>
								<? }else{ ?>
										 <option value="<? echo $peso;?>"> <? echo $peso; ?></option>
								<? } ?>
						  <?php
						  } 
						?>
					</select>	</td>
					</tr>
					<tr>
                        <td><strong>Peso Bruto</strong></td>
                        <td><input type="text" name="peso" value="<? echo $peso_bruto; ?>" id="peso" /></td>
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
								<? if($patente== $row[0]) { ?>
									 <option value="<? echo $row[0]; ?>" selected="selected"> <? echo $row[2]; ?></option> 
								<? }else{ ?>
									<option value="<? echo $row[0]; ?>"> <? echo $row[2]; ?></option>
								<? } ?>
                              <?}?>
							  
							   
							  
							  
                            </select>
                          </div>
						 </td>
					  </tr>				  
					  <tr>
                        <td><strong>Tara</strong></td>
                        <td><input type="text" name="tara" value="<? echo $tara; ?>" id="tara" /></td>
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
                        <td><input name="cantidad" type="text" id="cantidad" value="<? echo $cantidad; ?>" />
                       </td>
          </tr>
                      <tr>
                        <td><strong>Precio Unitario</strong></td>
                        <td><input name="precio" type="text" id="precio" value="<? echo $precio; ?>" /></td>
                      </tr>
                      
                      <tr>
                        <td><input type="hidden" name="oculto" id="oculto" value="ingreso_materias"/></td>
                        <td><input type="submit" name="send" class="formbutton" value="Deseo Guardar" /></td>
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
