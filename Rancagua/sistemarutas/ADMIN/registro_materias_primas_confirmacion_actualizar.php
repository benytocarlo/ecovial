<?php include("conexion.php"); ?>
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
<? 
$id=$_REQUEST["id"];
$sql =" SELECT * FROM ingreso_materias where id=".$id." ";
						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{ 
             			 $n_orden=$row[1];
						$n_guia=$row[2];
						$fecha=$row[6];
						$cantidad=$row[7];
						$precio=$row[8];
						$pesaje=$row[12];
						$patente=$row[9];
						$proveedor1=$row[3];
						$transportista=$row[4];
						$materias1=$row[5];
						$tara=$row[11];
						$pesobruto=$row[10];
						$obra=$row[15];
						$chofer=$row[16];
              			}

$sql ="SELECT * FROM materias  where id=".$materias1."";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{ 
             			 $materia=  $row[1]; 
              			}

$sql ="SELECT * FROM proveedor  where id=".$proveedor1."";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{ 
             			 $proveedor= $row[1]; 
              			}
						
						$sql ="SELECT * FROM camiones  where id=".$patente."";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{ 
             			 $patente= $row[2]; 
              			}
?>
    
    	<SCRIPT type="text/javascript" src="dhtmlgoodies_calendar.js"></script>
    <link type="text/css" rel="stylesheet" href="dhtmlgoodies_calendar.css?" media="screen"></LINK>
    <style type="text/css">
<!--
.Estilo4 {color: #666666; font-weight: bold; }
body{
background-color:#FFFFFF !important;
}
#centro{
margin-left:320px;
}
-->
    </style>
</head>
<body>
<table width="559" height="369" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div id="centro">
      <div align="center">
        <!-- CONTENT -->
        <span class="Estilo1">Ingreso de Materias Primas </span> </div>
      <fieldset>
        <legend></legend>
        </fieldset>
      <form action="index.php" method="post" id="form" name="form">
					<table width="561" border="0">
					  <tr>
						<td width="115" height="50"><strong>N&deg; Orden de Compra</strong></td>
						<td width="191"><input name="orden" readonly="readonly" type="text" id="orden" value="<? echo $n_orden; ?>" size="14" /></td>
						<td width="77"><strong>N&deg; Guia</strong></td>
						<td width="150"><input name="guia" readonly="readonly" type="text" id="guia" value="<? echo $n_guia; ?>" size="14" /></td>
					  </tr>
					</table>
					<table width="559" height="357">

                      <tr>
                        <td width="203"><strong>Proveedor </strong></td>
                       <td width="344"><select name="proveedor" id="proveedor">
                        
                         <? $sql ="SELECT * FROM proveedor order by nombre asc";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{ ?>
                        <? if($proveedor1== $row[0]) { ?>
                         <option value="<? echo $row[0]; ?>" selected="selected"> <? echo $row[1]; ?></option>
                         
                         <? } ?>
                         <?}?>
                       </select></td>
                      </tr>
					   <tr>
                        <td width="203"><strong>Transportista </strong></td>
                       <td width="344"><select name="proveedor" id="proveedor">
                        
                         <? $sql ="SELECT * FROM transportista order by nombre asc";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{ ?>
                        <? if($transportista== $row[0]) { ?>
                         <option value="<? echo $row[0]; ?>" selected="selected"> <? echo $row[1]; ?></option>
                         
                         <? } ?>
                         <?}?>
                       </select></td>
                      </tr>
					   
					   <tr>
                        <td width="203"><strong>Numero de Pesaje</strong></td>
						<td width="344">
							<? echo $pesaje;?>
						</td>
					</tr>
					<tr>
                        <td><strong>Peso Bruto</strong></td>
                        <td><input type="text" name="peso" value="<? echo $pesobruto; ?>" id="peso" readonly="readonly"/></td>
					</tr>
					  <tr>
                        <td width="203"><strong>Patente</strong></td>
						<td width="344">
							<div id="select_patente">
                            <? echo $patente;?>
                          </div>
						 </td>
                         <td width="203"><strong>Chofer</strong></td>
						<td width="344">
							<div id="select_chofer">
                            <? echo $chofer;?>
                          </div>
						 </td>
					  </tr>				  
					  <tr>
                        <td><strong>Tara</strong></td>
                        <td><input type="text" name="tara" value="<? echo $tara; ?>" id="tara" readonly="readonly"/></td>
                      </tr>
					  
                      <tr>
                        <td><strong>Materia Prima</strong></td>
                        <td><select name="materia" id="materia">
                          
                          <? $sql ="SELECT * FROM materias order by nombre asc";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{ ?>
                         <? if($materias1== $row[0]) { ?>
                          <option value="<? echo $row[0]; ?>" selected="selected"> <? echo $row[1]; ?></option>
                           <? }else{ ?>
                           
                             <? } ?>
                          <?}?>
                        </select></td>
                      </tr>
                      <tr>
                        <td><strong>Fecha Guia</strong></td>
                        <td><input name="fecha" type="text" value="<? echo $fecha; ?>" readonly="readonly" />
                        </td>
          </tr>
                      <tr>
                        <td><strong>Cantidad</strong></td>
                        <td><input name="cantidad" type="text" id="cantidad" value="<? echo $cantidad; ?>" readonly="readonly"/></td>
          </tr>
                      <tr>
                        <td><strong>Precio Unitario</strong></td>
                        <td><input name="precio" type="text" id="precio" value="<? echo $precio; ?>" readonly="readonly"/></td>
                      </tr>
                      <tr>
                        <td><strong>Obra</strong></td>
                        <td><input name="obra" type="text" id="obra" value="<? echo $obra; ?>" readonly="readonly"/></td>
                      </tr>
                      
                      <tr>
                        <td><input type="hidden" name="oculto" id="oculto" value="ingreso_materias"/><input type="button" onclick="javascript:print()" name="send" class="formbutton" value="Imprimir" /></td>
                        <td><input type="submit" name="send" class="formbutton" value="Ir el Home" /></td>
                      </tr>
                    </table>
		  </form>
      <fieldset>
        </fieldset>
    </div></td>
  </tr>
</table>
</body>
</html>
