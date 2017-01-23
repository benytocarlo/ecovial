<? include("conexion.php"); ?>
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
<?   $id = $_GET['id']; 
 		  $SQL ="SELECT * from cliente where id=$id";
		  $result = mysql_query($SQL);
		   while($row =mysql_fetch_row($result))
			{ 
		    $nombre = $row[1];
			$rut = $row[6];
		    $direccion = $row[2];
		    $comuna = $row[3];
		    $ciudad = $row[4];
			$fono = $row[5];
			$email = $row[7];
			$giro = $row[8];
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
						<li><a href="registro_cliente.php" title="mybb themes">A&ntilde;adir Nuevo Cliente</a></li>
						<li><a href="listado_clientes.php" title="spyka Webmaster resources">Listado de Clientes</a></li>
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
			<span class="Estilo1">Editar de Cliente</span>
            <fieldset>
				<legend></legend>
                </fieldset>
		<form action="actualizar.php?id=<?echo $id; ?>&amp;oculto=camion" method="post" id="form">
<table width="558" height="129">

                      <tr>
                        <td width="198"><strong>Nombre</strong></td>
                        <td width="348"><input name="nombre" type="text" id="nombre" value="<? echo $nombre; ?>" /></td>
                      </tr>
                      <tr>
                        <td><strong>Rut</strong></td>
                        <td><input name="rut" type="text" id="rut" value="<? echo $rut; ?>" /></td>
                      </tr>
					  <tr>
                        <td><strong>Giro</strong></td>
                        <td><input name="giro" type="text" id="giro" value="<? echo $giro; ?>" /></td>
                      </tr>
                      <tr>
                        <td><strong>Direcci&oacute;n</strong></td>
                        <td><input name="direccion" type="text" id="direccion" value="<? echo $direccion; ?>" /></td>
                      </tr>
                      <tr>
                        <td><strong>Comuna</strong></td>
                        <td><input name="comuna" type="text" id="comuna" value="<? echo $comuna; ?>" /></td>
                      </tr>
                      <tr>
                        <td><strong>Ciudad</strong></td>
                        <td><input name="ciudad" type="text" id="ciudad" value="<? echo $ciudad; ?>" /></td>
                      </tr>
                      <tr>
                        <td><strong>Fono</strong></td>
                        <td><input name="fono" type="text" id="fono" value="<? echo $fono; ?>" /></td>
                      </tr>
                      <tr>
                        <td><strong>Email</strong></td>
                        <td><input name="email" type="text" id="email" value="<? echo $email; ?>" /></td>
                      </tr>
                      <tr>
                        <td><input type="hidden" name="oculto" id="oculto" value="cliente"/></td>
                        <td><input type="submit" name="send" class="formbutton" value="Guardar" /></td>
                      </tr>
                    </table>
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
