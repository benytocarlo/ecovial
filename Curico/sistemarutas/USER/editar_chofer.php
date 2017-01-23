<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<? include("conexion.php"); ?>
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
<?   $id = $_GET['id']; 
 		  $SQL ="SELECT * from chofer where id=$id";
		  $result = mysql_query($SQL);
		   while($row =mysql_fetch_row($result))
			{ 
		    $nombre = $row[2];
		    $rut = $row[1];

			}
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
				<li>
					<h4>Acceso Directo</h4>
					<ul>
						
						<li><a href="registro_chofer.php" title="mybb themes">A&ntilde;adir Nuevo Chofer</a></li>
						<li><a href="listado_choferes.php" title="spyka Webmaster resources">Listado de Choferes</a></li>
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
			<span class="Estilo1">Edici&oacute;n de Chofer</span>
				<fieldset>
				<legend></legend>
                </fieldset>
<form action="actualizar.php?id=<?echo $id; ?>&amp;oculto=chofer" method="post">
<table width="558" height="129">
                      <tr>
                        <td width="198"><strong>Rut</strong></td>
                        <td width="348"><input name="rut" type="text" id="rut" value="<? echo $rut; ?>" /></td>
                      </tr>
                      <tr>
                        <td><strong>Nombre</strong></td>
                        <td><input name="nombre" type="text" id="nombre" value="<? echo $nombre; ?>" /></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
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
