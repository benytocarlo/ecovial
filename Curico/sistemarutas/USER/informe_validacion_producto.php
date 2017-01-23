<?php
require_once('includes/func_inc.php');
//include_once($_SERVER['DOCUMENT_ROOT']."/forum/2010/src/includes/func_inc.php");
//echo "http://".$_SERVER[HTTP_HOST]."/forum/2010/scr/includes/xajax/";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<? include("conexion.php"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema de Pesaje</title>
<?php $xajax->printJavascript('includes/xajax/'); ?>
<link rel="stylesheet" href="styles.css" type="text/css" />
	<SCRIPT type="text/javascript" src="dhtmlgoodies_calendar.js"></script>
    <link type="text/css" rel="stylesheet" href="dhtmlgoodies_calendar.css?" media="screen"></LINK>
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
			<ul>	
				<li>
					<h4>Acceso Rapido</h4>
					<ul>
						<li></li>
				  </ul>
			  </li>
				
				<li></li>
		  </ul><ul>	
				<?php	include("menu_informes.php");  ?>
				
				<li></li>
		  </ul>
	</div>	
		<div class="page-content">	
		<span class="Estilo1">Informe de Validaci&oacute;n por Producto</span>
        <table width="696" border="0">
              <tr>
                <td width="21" height="258"><p class="clear">&nbsp;</p>
                </td>
                <td width="665"><form id="form" name="form"  method="post" action="informes/inf_validacion_productos.php" target="_blank">
                  <table width="611" height="137" border="0">
                   <tr>
                     <td height="43"><strong>Tipo Producto<br />
                         <select name="tipo_mezcla" id="tipo_mezcla" onchange="xajax_mezcla2(document.form.tipo_mezcla.value)">
                           <option value="">Elija una Opci&oacute;n</option>
                          <!-- <?$sql ="SELECT tipo, COUNT(DISTINCT tipo) as tipo_id FROM mezclas GROUP BY tipo";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{?>
                           <option value="<? echo $row[0]; ?>"> <? echo $row[0]; ?></option>
                           <?}?>-->
						   <option value="Arido"> Arido</option>
                                                      <option value="Emulsion"> Emulsion</option>
                                                      <option value="Mezcla"> Mezcla</option>
													  <option value="Otro"> Combustible</option>
                         </select>
                     </strong></td>
                     <td><strong>Fecha Inicio</strong><br />
                        
                           <input type="text" readonly="readonly" name="fecha_inicio" />
                           <input type="button" value="Ver Calendario" onclick="displayCalendar(document.forms[0].fecha_inicio,'yyyy-mm-dd',this)" />
                       </td>
                   </tr>
                    <tr>
                      <td width="136" height="43" id="mezcla_name">&nbsp;</td>
                      <td><strong>Fecha Termino</strong> <br />
                          
                            <input type="text" readonly="readonly" name="fecha_final" />
                            <input type="button" value="Ver Calendario" onclick="displayCalendar(document.forms[0].fecha_final,'yyyy-mm-dd',this)" />
                        </td>
                    </tr>
                    <tr>
                      <td height="43">&nbsp;</td>
                      <td><label>
                        <input name="button" type="submit" class="formbutton" id="button" value="Ver Informe" />
                      </label></td>
                    </tr>
                  </table>
                  <p>&nbsp;</p>
                                <p>&nbsp;</p>
                </form>
                </td>
        </tr>
            </table>
		</div>
	<div class="clear"></div>	
	</div>		

	<p class="footer">Constructora Rutas</p>
</div>

			

</body>
</html>
