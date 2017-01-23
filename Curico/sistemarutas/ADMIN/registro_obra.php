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
						<li><a href="registro_obra.php" title="mybb themes">A&ntilde;adir Nueva Obra</a></li>
					  <li><a href="listado_obras.php" title="spyka Webmaster resources">Listado de Obras</a></li>
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
			<span class="Estilo1">Registro de Obra </span>
			<fieldset>
				<legend></legend>
                </fieldset>
		<form action="insert.php" method="post" id="form">
<table width="558" height="129">
                      <tr>
                        <td width="198"><strong>Nombre</strong></td>
                        <td width="348"><input type="text" name="nombre" id="nombre" /></td>
                      </tr>
                      <tr>
                        <td><strong>Ubicacion</strong></td>
                        <td><input type="text" name="ubicacion" id="ubicacion" /></td>
                      </tr>
                      <tr>
                        <td><strong>Ciudad</strong></td>
                        <td><input type="text" name="ciudad" id="ciudad" /></td>
                      </tr>
                      <tr>
                        <td><input type="hidden" name="oculto" id="oculto" value="obra"/></td>
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
