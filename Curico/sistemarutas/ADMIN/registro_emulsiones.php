<?php include("conexion.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
include("conexion.php"); 
//$sqlcount="SELECT vale FROM `ingreso_petroleo` order by id desc limit 1";
 //$result = mysql_query($sqlcount); 
// echo $sqlcount;
   //      while($row = mysql_fetch_row($result))
     //                           {
       //                        $vale=$row[0] + 1;
         //                       }
?>
 
    	
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
    <link type="text/css" rel="stylesheet" href="dhtmlgoodies_calendar.css?" media="screen"></LINK></head>
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
					<h4>Mantenedores</h4>
					<ul>
                      <li><a href="listado_obras.php" > Obras</a></li>
					  <li><a href="listado_mezclas.php" >Productos</a></li>
					  <li><a href="listado_clientes.php" >Clientes</a></li>
					  <li><a href="registro_proveedor.php" >Proveedores</a></li>
					  <li><a href="registro_camion.php" >Camiones</a></li>
					  <li><a href="listado_transportista.php" >Transportistas</a></li>
					  <li><a href="listado_usuarios.php" >Usuarios</a></li>
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
			<span class="Estilo1">Registro Interno de Emulsiones</span>
			<fieldset>
				<legend></legend>
                </fieldset>
		<form action="registro_emulsiones2.php" method="post" id="form">
		  <table width="" height="357" align="center">
 <tr>
                        <td colspan="3"><p>&nbsp;</p></td>
</tr>
 
                      <tr>
                        <td><strong>Conductor</strong></td>
                        <td colspan="2"><select name="chofer" id="chofer">
                          <option value="">Elija una Opci&oacute;n</option>
                          <? $sql ="SELECT DISTINCT nombre FROM chofer ORDER BY nombre ASC";
					echo $sql;
						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{?>
                          <option value="<? echo $row[0]; ?>"> <? echo $row[0]; ?></option>
                          <?}?>
                        </select></td>
                      </tr>
                       <tr>
                        <td><strong>Patente Surtidor</strong></td>
                        <td colspan="2"><select name="patente" id="patente">
                          <option value="">Elija una Opci&oacute;n</option>
                          <? $sql ="SELECT * FROM camiones where patente != '' ORDER BY  patente ASC ";
        
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_row($result))
                                { ?>
                          <option value="<? echo $row[2]; ?>"> <? echo $row[2]; ?></option>
                          <?}?>
                        </select></td>
                      </tr>
                        <tr>
                        <td><strong>Fecha</strong></td>
                        <td colspan="2"><input type="text" readonly="readonly" name="fecha" />
                          <input type="button" value="Ver Calendario" onclick="displayCalendar(document.forms[0].fecha,'yyyy-mm-dd',this)" /></td>
            </tr>
                        <tr>
                          <td><strong>Nro. de Gu&iacute;a</strong></td>
                          <td colspan="2"><input type="text" name="guia" id="guia" /></td>
                        </tr>
                      <tr>
                        <td width="204"><strong>Obra</strong></td>
                       <td colspan="2"><select name="obra" id="obra">
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
                        <td><strong>Producto</strong></td>
                        <td colspan="2"><select name="producto" id="producto">
                          <option value="">Elija una Opci&oacute;n</option>
                          <option value="CSS-1H">CSS-1H</option>
                          <option value="E-Prime">E-Prime</option>
                          <option value="Bituflex">Bituflex-Elastomerico</option>
                          </select></td>
                      </tr>
                      <tr>
                        <td><strong>Litros</strong></td>
                        <td colspan="2"><input type="text" name="litros" id="litros" /></td>
          </tr>
                      <tr>
                        <td><strong>Superficie (m2)</strong></td>
                        <td colspan="2"><input type="text" name="superficie" id="superficie" /></td>
                      </tr>
                      <tr>
                        <td><strong>Cliente</strong></td>
                        <td colspan="2"><select name="cliente" id="cliente">
                          <option value="">Elija una Opci&oacute;n</option>
                          <?$sql ="SELECT * FROM cliente order by nombre asc";
        
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_row($result))
                                {?>
                          <option value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                          <?}?>
                        </select></td>
                      </tr>
                     <tr>
                        <td>&nbsp;</td>
                        <td colspan="2">&nbsp;</td>
                      </tr>
                      <tr>
                        <td><input type="hidden" name="oculto" id="oculto" value="centro"/></td>
   <td colspan="2"><input type="submit" name="send" class="formbutton" value="Guardar" /></td>
                      </tr>
                    </table>
	  </form>
	<fieldset>
	</fieldset>
		  </div>
	  <div class="clear"></div>	
	</div>		

	<p class="footer"></p>
</div>

			

</body>
</html>
