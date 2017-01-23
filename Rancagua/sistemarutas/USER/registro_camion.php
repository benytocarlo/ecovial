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
					<h4>Acceso Directo</h4>
					<ul>
						<li><a href="registro_camion.php" title="mybb themes">A&ntilde;adir Nuevo Cami&oacute;n</a></li>
						<li><a href="listado_camiones.php" title="spyka Webmaster resources">Listado de Camiones</a></li>
						</ul>
				</li>
				
				<li></li>
		  </ul><ul>	
				<?php	include("menu_informes.php");  ?>
				
				<li></li>
		  </ul>
	  </div>	
  <div class="page-content">	
			<!-- CONTENT -->
			<span class="Estilo1">Registro de Camión </span>
			<fieldset>
				<legend></legend>
                </fieldset>
		<form action="insert.php" method="post" id="form">
<table width="558" height="129">

                      <tr>
                        <td width="198"><strong>Tipo de vehiculo
                            <label> </label>
                        </strong></td>
                        <td width="348"><select name="tipo_vehiculo" id="tipo_vehiculo">
                           <option value="Camion">Camion</option>
						  <option value="Camioneta">Camioneta</option>
                                                  </select></td>
                      </tr>
                      <tr>
                        <td><strong>Patente
                            <label> </label>
                        </strong></td>
                        <td><input type="text" name="patente" id="patente" /></td>
                      </tr>
                      <tr>
                        <td><strong>Tara</strong></td>
                        <td><input type="text" name="tara" id="tara" /></td>
                      </tr>
                      <tr>
                        <td><strong>Empresa Transportista </strong></td>
                        <td><select name="empresa_transportista" id="empresa_transportista">
                            <option value="">Elija una Opcion</option>
                              <?$sql ="SELECT * FROM transportista";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{?>
                  <option value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                  <?}?>
                           
                          </select></td>
                      </tr>
                      <tr>
                        <td><input type="hidden" name="oculto" id="oculto" value="camion"/></td>
                        <td><input type="submit" name="send" class="formbutton" value="Guardar" /></td>
                      </tr>
                    </table>
		  <p>&nbsp;</p>
      </form>
	<fieldset>
				<legend></legend>
                </fieldset>
		  <p>
			  <!-- END CONTENT --></p>
	  </div>
	  <div class="clear"></div>	
	</div>		

	<p class="footer">Constructora Rutas</p>
</div>

			

</body>
</html>
