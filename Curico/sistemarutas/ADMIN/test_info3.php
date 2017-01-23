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
	<link rel="stylesheet" href="styles.css" type="text/css" />
	<?php $xajax->printJavascript('includes/xajax/'); ?>s
		<SCRIPT type="text/javascript" src="dhtmlgoodies_calendar.js"></script>
	    <link type="text/css" rel="stylesheet" href="dhtmlgoodies_calendar.css?" media="screen"></LINK>
	    <style type="text/css">
	<!--
	.Estilo2 {font-weight: bold}
	-->
	    </style>
	</head>
	<body>
	
	    <!-- TITLE -->
	    <!-- END TITLE -->
	  </div>
	  <div class="menu">
	 <? // php	include("menu.php");  ?>
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
					<?php	// include("menu_informes.php");  ?>

					<li></li>
			  </ul>
		</div>	
			<div class="page-content">	
				<p>
				  <!-- CONTENT -->
			      <span class="Estilo1"><strong>Calculo de Carga</strong></span></p>
		        <table width="696" border="0">
	              <tr>
	                <td width="21" height="258"><p class="clear">&nbsp;</p>
	                </td>
	                <td width="665"><form id="form" name="form" method="post" action="insert.php"  >
	                  <table width="611" height="182" border="0">
	                    <tr>
	                      <td width="136" height="43"><strong>Tipo de Mezcla</strong></td>
							<td width="465"><label></label>
							  <div id="select_cliente">
								<select name="materia" id="materia">
								  <option value="">Elija una Opci&oacute;n</option>
								  <?$sql ="SELECT * FROM mezclas where tipo='Mezcla' order by nombre asc";

															$result = mysql_query($sql); 
															while($row = mysql_fetch_row($result))
															{?>
								  <option value="<? echo $row[0]; ?>"> <? echo $row[2]; ?></option>
								  <?}?>
								</select>
							  </div></td>
	                    </tr>


	                    <tr>
	                      <td height="43"><strong>Patente</strong></td>
	                      <td>
						  <select name="patente" id="patente" onchange="xajax_tara(document.form.patente.value)">
	                              <option value="">Elija una Opci&oacute;n</option>
	                              <?$sql ="SELECT * FROM camiones order by patente asc";

									$result = mysql_query($sql); 
									while($row = mysql_fetch_row($result))
									{?>
										  <option value="<? echo $row[0]; ?>"> <? echo $row[2]; ?></option>
	                              <?}?>
	                            </select>
						  </td>
	                    </tr>

						<tr>
	                      <td height="43"><strong>Carga Máxima en M3</strong></td>
	                      <td>
						  <input type="text" value="" id="result" name="result" readonly="readonly" />
						  </td>
	                    </tr>

						<tr>
	                      <td height="43"><strong>Carga Máxima en Kilos</strong></td>
	                      <td>
						  <input type="text" value="" id="kilo" name="kilo" readonly="readonly" />
						  </td>
	                    </tr>

	                    <tr>
	                      <td height="43">&nbsp;</td>
	                      <td><input name="button" type="button" class="formbutton" id="button" onClick="xajax_operacion_calculo(document.form.patente.value,document.form.materia.value);" value="Calcular" /></td>
	                    </tr>

						<tr>
	                      <td height="43"><strong>Temperatura</strong></td>
	                      <td>
						  <input type="text" value="" id="temperatura" name="temperatura"  />
						   <input type="hidden" value="testinfo" id="oculto" name="oculto" />
						  </td>
	                    </tr>

						 <tr>
	                      <td height="43">&nbsp;</td>
	                      <td><input name="button2" type="submit" class="formbutton" id="button2"  value="Guardar" /></td>
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