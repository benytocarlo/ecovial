<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema de Pesaje</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
</head>
<body>
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
			<!--<ul>	
				<li>
					<h4>Mantenedores</h4>
					<ul>
					  
					  <li><a href="listado_obras.php" > Obras</a></li>
					  <li><a href="listado_mezclas.php" >Productos</a></li>
					  <li><a href="listado_clientes.php" >Clientes</a></li>
					  <li><a href="listado_proveedores.php" >Proveedores</a></li>
					  <li><a href="listado_materias.php" >Materias Primas</a></li>
					  <li><a href="listado_transportista.php" >Transportistas</a></li>
					  <li><a href="listado_camiones.php" >Camiones</a></li>
					  <li><a href="listado_choferes.php" >Choferes</a></li>
					  <li><a href="listado_usuarios.php" >Usuarios</a></li>
                      <li><a href="listado_centros.php" >Centro de Costos</a></li>
				  </ul>
			  </li>
				</ul>-->
<ul>	
				<?php	include("menu_informes.php");  ?>
</ul>
          <ul><li></li>
		  </ul>
	</div>	
<div class="page-content">	
			<!-- CONTENT -->
			<table width="696" border="0">
              <tr>
                <td width="54"><p class="clear">&nbsp;</p>
                </td>
                <td width="632"><table width="614" height="418" border="0">
                  <tr>
                    <td width="318"><a href="listado_camiones.php"><img src="http://www.constructorarutas.cl/wp-content/uploads/2016/07/LOGO-RUTAS-FINAL_2a-2-03.png" alt="1" width="100%"  border="0" /></a></td></tr>
                </table></td>
              </tr>
            </table>
		</div>
	<div class="clear"></div>	
	</div>		

	<p class="footer">Constructora Rutas</p>
</div>

			

</body>
</html>
