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
 		  $SQL ="SELECT * from usuarios where id=$id";
		  $result = mysql_query($SQL);
		   while($row =mysql_fetch_row($result))
			{ 
		    $nombre_completo = $row[1];
		    $user = $row[2];
		    $pass = $row[3];

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
					  <li><a href="registro_user.php" title="mybb themes">A&ntilde;adir Nuevo Usuario</a></li>
					  <li><a href="listado_usuarios.php" title="spyka Webmaster resources">Listado de Usuarios</a></li>
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
			<span class="Estilo1">Editar de Usuario</span>
			<fieldset>
				<legend></legend>
                </fieldset>
		<form action="actualizar.php?id=<?echo $id; ?>&oculto=usuario" method="post" id="form">
<table width="558" height="129">
                      <tr>
                        <td width="194"><strong>Nombre Completo</strong></td>
                        <td width="352"><input name="nombre" type="text" id="nombre" value="<? echo $nombre_completo; ?>" /></td>
                      </tr>
                      <tr>
                        <td><strong>Nombre Usuario</strong></td>
                        <td><input name="user" type="text" id="user" value="<? echo $user; ?>" /></td>
                      </tr>
                      <tr>
                        <td><strong>Contrase&ntilde;a</strong></td>
                        <td><input name="pass" type="password" id="pass" value="<? echo $pass; ?>" /></td>
                      </tr>
                      <tr>
                        <td><strong>Privilegio</strong></td>
                        <td><label>
                          <select name="privilegio" id="privilegio">
                            <option value="AD">Administrador</option>
                            <option value="DG">Digitador</option>
							<option value="IF">Informes</option>
                        </select>
                        </label></td>
                      </tr>
                      <tr>
                        <td><input type="hidden" name="oculto" id="oculto" value="usuario"/></td>
                        <td><input type="submit" name="send" class="formbutton" value="Guardar" /></td>
                      </tr>
                    </table>
		  <p>&nbsp;</p>
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
