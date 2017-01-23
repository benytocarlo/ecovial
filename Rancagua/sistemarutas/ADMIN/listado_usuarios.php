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
.Estilo3 {font-size: 12px}
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
			<span class="Estilo1">Listado de Usuarios</span>
			<fieldset>
				<legend></legend>
		<form action="#" method="get">
				    <table>
                      <tr>
                        <th width="35">ID</th>
                        <th width="200">Nombre Completo</th>
                        <th width="180">Nombre User</th>
                        <th width="129">Privilegio</th>
                        <th width="130"><span class="Estilo3">Editar - Eliminar </span></th>
                      </tr>
					  	  <?	  $sql ="select * from usuarios";
						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{ 
						?>
                      <tr>
                        <td height="62"><? echo $row[0]; ?></td>
                        <td><? echo $row[1]; ?></td>
                        <td><? echo $row[2]; ?></td>
                        <td><? echo $row[4]; ?></td>
                        <td><table width="94" border="0" align="center">
                            <tr>
                              <td width="42" ><a href="editar_user.php?id=<? echo $row[0]; ?>"><img src="images/001_45.png" alt="2" width="24" height="24" border="0" /></a></td>
                              <td width="50"><a href="eliminar.php?id=<? echo $row[0]; ?>&amp;oculto=usuario"><img src="images/001_05.png" alt="1" width="24" height="24" border="0" /></a></td>
                          </tr>
                          </table></td>
                      </tr>
                     <? } ?>
                    </table>
	      </form>

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
