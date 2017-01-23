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
			<span class="Estilo1">Registro de Petroleo</span>
			<fieldset>
				<legend></legend>
      </fieldset>
		<form action="insert.php" method="post" id="form">
		  <table width="567" height="357">
 <tr>
                        <!--<td><strong>Fecha</strong></td>
<td><input type="text" readonly="readonly" name="fecha_hora" id="fecha" />
                            <input type="button" value="Ver Calendario" onclick="displayCalendar(document.forms[0].fecha,'yyyy-mm-dd',this)" /></td>-->
 </tr>
 
                      <tr>
                        <td><strong>Tipo de Carga </strong></td>
                        <td><select name="tipo" id="tipo">
                       <option value="">Elija una Opci&oacute;n</option>
                          <option value="Camion">Camion</option>
                        <option value="Camioneta">Camioneta</option>
                        	<option value="Cargador_Frontal">Cargador Frontal</option>
							<option value="Furgones">Furgones</option>
							<option value="Otros">Otros</option>
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
                        </select>						</td>
                      </tr>
                        <tr>
                        <td><strong>Empresa</strong></td>
                        <td><select name="transportista" id="transportista">
                          <option value="">Elija una Opci&oacute;n</option>
                          <?$sql ="SELECT * FROM transportista order by nombre asc";
        
                                $result = mysql_query($sql); 
                                while($row = mysql_fetch_row($result))
                                {?>
                          <option value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                          <?}?>
                        </select></td>
                        </tr>
                      <tr>
                        <td width="204"><strong>Chofer</strong></td>
                        <td width="351"><select name="chofer" id="chofer">
                              <option value="">Elija una Opci&oacute;n</option>
                              <? $sql ="SELECT * FROM chofer order by nombre asc";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{?>
                              <option value="<? echo $row[0]; ?>"> <? echo $row[2]; ?></option>
                              <?}?>
                            </select></td>
            </tr>
                      <tr>
                        <td><strong>Litros Cargados </strong></td>
                        <td><input type="text" name="litros" id="litros" /></td>
          </tr>
                      <tr>
                        <td><strong>Observaciones</strong></td>
                        <td>
                          <label>
                          <textarea name="observaciones" cols="50" rows="5"></textarea>
                        </label></td>
                      </tr>
                    
                      <tr>
                        <td><input type="hidden" name="oculto" id="oculto" value="carga"/></td>
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
