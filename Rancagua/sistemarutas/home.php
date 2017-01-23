<?
include("conex.php"); 
session_start(); 
  $estado=$_SESSION["estado"];
 if ($estado==True)
 {

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Control de Productos</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
</head>
<body>
<div class="wrapper">
	<div class="top">
		<div class="header">
			<!-- TITLE -->
			<h1><a href="#">Sistema Control de Productos</a></h1>
			<h2>Nmbre empresa</h2>
		  <div class="clear"></div>
			<!-- END TITLE -->
		</div>
		<div class="menu">
			<ul>	
				<!-- MENU -->
				<li><a href="home.php">Inicio</a></li>
				<li><a href="mov_productos.php">Movimientos</a></li>
				<li><a href="list_productos.php">Productos</a></li>
				<li><a href="usuarios.php">Usuarios</a></li>
		      <li><a href="informes.php">Informes</a></li>
				       <table width="467" border="0">
                    <tr>
                      <td width="380" height="40"><div align="left"><strong>Bienvenido :
                      <? 
				$user2 = $_SESSION["nombre"];
 		  			echo $user2;
		      ?>
                      </strong></div></td>
                      <td width="77"><a href="index.php">Salir</a> <img src="images/logout.png" alt="Salir" width="20" height="20" /> </td>
                    </tr>
              </table>
		  </ul>
	</div>
	</div>		
	<div class="content">
		<div class="sidebar column-left">
			<ul>	
				<li>
					<h4>Ultimas Movimeintos</h4>
					<ul>
					<?
					  $SQL ="SELECT * from logs  order  by  fecha DESC  limit 6";
					   $result = mysql_query($SQL);
					   while($row =mysql_fetch_row($result))
							{ 
								echo "<li>$row[3] - $row[2]</li>";	
							} 
					 
					 ?>
                        <li></li>
                        <li><a href="mov_productos.php">Añadir Movimiento</a></li>
				    </ul>
				</li>
				
				<li>
					<h4>Ultimos Productos </h4>
					<ul>
					<?
					  $SQL ="SELECT * from producto order by cod_prod ASC limit 6  ";
					   $result = mysql_query($SQL);
					   while($row =mysql_fetch_row($result))
							{ 
								echo "<li>&gt; $row[4]</li>";	
							} 
					 
					 ?>
				      <li></li>
                      <li><a href="productos.php">Añadir Producto</a></li>
					</ul>
			  </li>
	      </ul>
	  </div>	
<div class="page-content">	
			<!-- CONTENT -->
			<h1>&nbsp;</h1>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
		  <!-- END CONTENT -->
	  </div>
		<div class="clear"></div>	
	</div>		
	<p class="footer"><a href="http://jigsaw.w3.org/css-validator/check/referer" title="valid CSS"></a> &nbsp;&nbsp; &copy; Jaime Leiva. 2010</p>
</div>
</body>
</html>
<?
}
else
{
echo"<script>location='error.php';</script>";	
}
?>