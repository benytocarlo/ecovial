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
.Estilo2 {color: #FFFFFF}
-->
</style>
</head>
<body>
<?   $id = $_GET['id']; 
 		  $SQL ="SELECT * from mezclas where id=$id";
		  $result = mysql_query($SQL);
		   while($row =mysql_fetch_row($result))
			{ 
		    $nombre_mezcla = $row[2];
		    $valor = $row[3];
			}
		  ?>
<div class="wrapper">
	<div class="top">
		<div class="header">
			<!-- TITLE -->
			<!-- END TITLE -->
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
					  
					  <li><a href="registro_mezclas.php" title="mybb themes">A&ntilde;adir Nuevo Producto</a></li>
					  <li><a href="listado_mezclas.php" title="spyka Webmaster resources">Listado de Productos</a></li>
					  </ul>
				</li>
				
				<li>				</li>
			    <li></li>
		  </ul><ul>	
				<?php	include("menu_informes.php");  ?>
				
				<li></li>
		  </ul>
	  </div>	
<div class="page-content">	
			<!-- CONTENT -->
			<span class="Estilo1">Editar de Producto</span>
            <fieldset>
				<legend></legend>
                </fieldset>
		<form id="form" method="post" action="actualizar.php?id=<?echo $id; ?>&oculto=mezcla">
<table width="558" height="129">
 <tr>
                        <td width="194"><strong>Tipo de Producto</strong></td>
                        <td width="352"><label>
                          <select name="tipo" id="tipo">
                            <option value="Arido" selected="selected">Arido</option>
                            <option value="Mezcla">Mezcla</option>
                            <option value="Emulsion">Emulsion</option>
							<option value="Otro">Otro</option>
                        </select>
                        </label></td>
</tr>
                      <tr>
                        <td width="194"><strong>Nombre de Producto</strong></td>
                        <td width="352"><input name="nombre" type="text" id="nombre" value="<? echo $nombre_mezcla; ?>" /></td>
                      </tr>
                      <tr>
                        <td><strong>Valor</strong></td>
                        <td><input name="valor" type="text" id="valor" value="<? echo $valor; ?>" /></td>
                      </tr>
                      <tr>
                        <td><input type="hidden" name="oculto" id="oculto" value="mezcla"/></td>
                        <td><input type="submit" name="send" class="formbutton" value="Guardar" /></td>
                      </tr>
                    </table>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
      </form>
		<fieldset>
				<legend></legend></fieldset>
		  <p>
			  <!-- END CONTENT --></p>
	  </div>
	  <div class="clear"></div>	
	</div>		

	<p class="footer">Constructora Rutas</p>
</div>

			

</body>
</html>
