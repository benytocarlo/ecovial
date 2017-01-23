<?php 
include("conexion.php"); 
$obra=$_POST["obra"];
$mezclita=$_POST["mezclita"];
$tipo_mezcla_id=$_POST["tipo_mezcla"];
$fecha_inicio=$_POST["fecha_inicio"];
$fecha_final=$_POST["fecha_final"];
$sql="select * from obra where id=".$obra."";
		  $result = mysql_query($sql); 
			while($row = mysql_fetch_row($result))
			{
			$nombre_obra=$row[1];
			}	
			$sql1="select * from mezclas where id=".$mezclita."";
		  $result1 = mysql_query($sql1); 
			while($row = mysql_fetch_row($result1))
			{
			$nombre_product=$row[2];
			}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo3 {font-size: 24px}
.Estilo5 {font-size: 24px; font-weight: bold; }
-->
</style>
</head>

<body>
<table width="861" border="0" align="center">
  <tr>
    <td width="851"><table width="851" height="312" border="0">
      <tr>
        <td width="841" height="98"><table width="841" border="0">
          <tr>
            <td width="542" height="138"><table width="525" border="0">
                <tr>
                  <td width="83" height="23"><p><span class="Estilo3"><img src="Ecovial_chico.jpg" alt="" width="227" height="130" /></span></p></td>
                  <td width="432"><div align="center"><span class="Estilo5">Informe de Obra por Producto</span></div></td>
                </tr>
            </table></td>
     <td width="283"><p align="center">Ecovial Ltda.<br />
77.580.000-3<br />
Hijuela 10 Lote A Maquehua<br />
Fono (75) 2543470<br />
recepcion@ecovial.cl<br />
Curicó</p></td>
            </td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="74"><table width="841" border="0">
          <tr>
            <td width="130">Obra:</td>
            <td width="695"><?php echo $nombre_obra; ?></td>
          </tr>
          <tr>
            <td width="130">Producto:</td>
            <td width="695"><?php echo $nombre_product; ?></td>
          </tr>
          <tr>
            <td>Desde:</td>
            <td><?php echo $fecha_inicio; ?></td>
          </tr>
          <tr>
            <td>Hasta:</td>
            <td><?php echo $fecha_final; ?></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td height="86"><table width="841" border="1">
          <tr>
            <td width="73" height="23">N° Guia</td>
			<td width="62" height="23">Partida Control</td>
            <td width="65"><p>Cantidad</p>                </td>
            <td width="89">Precio</td>
            <td width="159">Fletero</td>
            <td width="101">Patente</td>
            <td width="77">Fecha</td>
            <td width="231">Producto Comprado</td>
          </tr>
		  <?  
		  	if($tipo_mezcla_id=="Emulsion")
				{
		 	$sqlval="select * from transportista tra,  pesaje ing_or  , camiones cam where ing_or.fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and ing_or.obra=".$obra." and ing_or.transportista=tra.id and ing_or.patente=cam.id and ing_or.nula!='si' and ing_or.tipo_guia='emulsion'";
			//echo $sqlval;					
					$result2 = mysql_query($sqlval); 
						$sumacantidad=0;
						$sumatotal=0;
								while($row = mysql_fetch_row($result2))
										{
										$guia=$row[2];
										$orden=$row[16];
										$fecha=$row[6];
										$patente=$row[19];
										$partidacontrol=$row[12];		
										$fletero=$row[1];	
										$sqlval2="select * from detalle_pesaje dp, mezclas ml where dp.guia=".$guia." and dp.producto=ml.id and dp.producto=".$mezclita."";
										$result23 = mysql_query($sqlval2); 
										while($row = mysql_fetch_row($result23))
											{
												$cantidad =$row[2];
												$precio=$row[3];
												$producto=$row[7];							
												echo "<tr>";
												echo "<td height='24'>".$guia."</td>";
												echo "<td height='24'>".$partidacontrol."</td>";
												echo "<td>".$cantidad."</td>";
												echo "<td>".number_format($precio, 0, '', '.')."</td>";
												echo "<td>".$fletero."</td>";
												echo "<td>".$patente."</td>";
												echo "<td>".$fecha."</td>";
												echo "<td>".$producto."</td>";
												echo "</tr>";
												$total=$precio*$cantidad;
												$sumacantidad=$sumacantidad+$cantidad;
												$sumatotal= $sumatotal+$total; 
											}
									}
				}
				else
				{
				
						$sqlval="select * from transportista tra,  pesaje ing_or  , detalle_pesaje dp, camiones cam where ing_or.fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and ing_or.id=dp.guia and ing_or.obra=".$obra." and ing_or.transportista=tra.id and ing_or.patente=cam.id and ing_or.nula!='si' and ing_or.tipo_guia!='emulsion'";
//echo $sqlval;						
					$result2 = mysql_query($sqlval); 
						$sumacantidad=0;
						$sumatotal=0;
								while($row = mysql_fetch_row($result2))
										{
										$guia=$row[2];
										$orden=$row[16];
										$fecha=$row[6];
										$patente=$row[19];
										$fletero=$row[1];	
										$sqlval2="select * from detalle_pesaje dp, mezclas ml where dp.guia=".$guia." and dp.producto=ml.id and dp.producto=".$mezclita."";
//										echo $sqlval2;
										$result23 = mysql_query($sqlval2); 
										while($row = mysql_fetch_row($result23))
											{
												$cantidad =$row[2];
												$precio=$row[3];
												$producto=$row[7];							
												echo "<tr>";
												echo "<td height='24'>".$guia."</td>";
												echo "<td>".$orden."</td>";
												echo "<td>".$cantidad."</td>";
												echo "<td>".number_format($precio, 0, '', '.')."</td>";
												echo "<td>".$fletero."</td>";
												echo "<td>".$patente."</td>";
												echo "<td>".$fecha."</td>";
												echo "<td>".$producto."</td>";
												echo "</tr>";
												$total=$precio*$cantidad;
												$sumacantidad=$sumacantidad+$cantidad;
												$sumatotal= $sumatotal+$total; 
											}
									}
				}	
			?>
        </table>
          <table width="841" border="1">
            <tr>
              <td width="73">Total</td>
              <td width="66"><p><? echo $sumacantidad; ?></p>                </td>
              <td width="152">&nbsp;</td>
              <td width="107">&nbsp;</td>
              <td width="409">&nbsp;</td>
            </tr>
          </table>
          </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
