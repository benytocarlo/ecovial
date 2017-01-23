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
 		  $SQL ="SELECT * from camiones where id=$id";
		  $result = mysql_query($SQL);
		   while($row =mysql_fetch_row($result))
			{ 
		    $tipo_vehiculo = $row[1];
		    $patente = $row[2];
		    $tara = $row[3];
		    $empresa = $row[4];
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
			<span class="Estilo1">Edici&oacute;n de Cami&oacute;n</span>
				<fieldset>
				<legend></legend>
                </fieldset>
<form action="actualizar.php?id=<?echo $id; ?>&amp;oculto=camion" method="post">
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
                        <td><input name="patente" type="text" id="patente" value="<? echo $patente; ?>" /></td>
                      </tr>
                      <tr>
                        <td><strong>Tara</strong></td>
                        <td><input name="tara" type="text" id="tara" value="<? echo $tara; ?>" /></td>
                      </tr>
                      <tr>
                        <td><strong>Empresa Transportista </strong></td>
                        <td>                      
                         <select name="empresa_transportista" id="empresa_transportista">
                            <option value="">Elija una Opcion</option>
                              <? $sql ="SELECT * FROM transportista";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{ 
						$idempresa=$row[0];
							?>
                        <? if($idempresa==$empresa)
						{
						?>
                        <option value="<? echo $row[0]; ?>"  selected="selected"> <? echo $row[1]; ?></option>
                 		<? } else { ?>
                        <option value="<? echo $row[0]; ?>"> <? echo $row[1]; ?></option>
                  			<? } ?>
				  
				  
				  <? } ?>
                           
                          </select>
                         
                         
                         </td>
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
