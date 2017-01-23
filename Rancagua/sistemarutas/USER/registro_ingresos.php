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
				<?php	include("menu_informes.php");  ?>
				
				<li></li>
		  </ul>
	  </div>	
<div class="page-content">	
			<!-- CONTENT -->
			<span class="Estilo1">Registro Interno de Petroleo</span>
			<fieldset>
				<legend></legend>
                </fieldset>
		<form action="insert.php" method="post" id="form">
		  <table width="567" height="357">
 <tr>
                        <td><strong>Fecha</strong></td>
<td><input type="text" readonly="readonly" name="fecha" id="fecha" />
                            <input type="button" value="Ver Calendario" onclick="displayCalendar(document.forms[0].fecha,'yyyy-mm-dd',this)" /></td>
 </tr>
 
                      <tr>
                        <td><strong>Centro de Costos</strong></td>
                        <td><select name="centrocostos" id="centrocostos">
                          <option value="">Elija una Opci&oacute;n</option>
                        	   <? $sql ="SELECT * FROM centrocostos";
        
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_row($result))
                                { ?>
                  <option value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                  <?}?>
                        </select></td>
                      </tr>
                       <tr>
                        <td><strong>Item</strong></td>
                        <td><select name="item" id="item">
                       <option value="">Elija una Opci&oacute;n</option>
                          <option value="Camion Imprimador">Camion Imprimador</option>
                        <option value="Furgones">Furgones</option>
                        	<option value="Varios">Varios</option>
                        </select></td>
                      </tr>
                        <tr>
                        <td><strong>Patente</strong></td>
                        <td><select name="patente" id="patente">
                          <option value="">Elija una Opci&oacute;n</option>
                          <? $sql ="SELECT * FROM camiones";
        
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_row($result))
                                { ?>
                  <option value="<? echo $row[2]; ?>"> <? echo $row[2]; ?></option>
                  <?}?>
                        </select></td>
            </tr>
                      <tr>
                        <td width="204"><strong>Producto</strong></td>
                       <td width="351"><select name="producto" id="producto">
                       
                         <option value="">Elija una Opci&oacute;n</option>
   						 <? $sql ="SELECT * FROM mezclas where tipo='Otro' order by nombre asc";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{?>
                                <option value="<? echo $row[2]; ?>"> <? echo $row[2]; ?></option>
                                <? } ?>
                       </select></td>
            </tr>
                      <tr>
                        <td><strong>Litros</strong></td>
                        <td><input type="text" name="litros" id="litros" /></td>
          </tr>
                    
                      <tr>
                        <td><input type="hidden" name="oculto" id="oculto" value="centro"/></td>
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
