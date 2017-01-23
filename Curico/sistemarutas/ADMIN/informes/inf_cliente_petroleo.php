<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
include("conexion.php"); 
$cliente=$_POST["cliente2"];
$fecha_inicio=$_POST["fecha_inicio"];
$fecha_final=$_POST["fecha_final"];
$sql="select * from cliente where id=".$cliente."";
		  $result = mysql_query($sql); 
			while($row = mysql_fetch_row($result))
			{
			$nombre_cliente=$row[1];
			}	

?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo3 {font-size: 24px}
.Estilo5 {font-size: 24px; font-weight: bold; }
.Estilo6 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<table width="861" border="0" align="center">
  <tr>
    <td width="851" height="333"><table width="851" height="331" border="0">
      <tr>
        <td width="841" height="98"><table width="841" border="0">
          <tr>
            <td width="542" height="138"><table width="525" border="0">
              <tr>
                <td width="83" height="23"><p><img src="../../rutas_small.jpg" width="172" height="84" /></p></td>
                <td width="432"><div align="center"><span class="Estilo5">Informe por Cliente</span></div></td>
              </tr>

            </table>            </td>
            <td width="283"><div align="center">
              <p align="center"><strong>Constructora RUTAS SpA<br />
RUT: 76.495.749-0<br />
Planta Curicó </strong></p>
              <p align="center"></p>
            </div></td>
          </tr>
        </table>          </td>
        </tr>
      <tr>
        <td height="74"><table width="841" border="0">
          <tr>
            <td width="130">Cliente:</td>
            <td width="695"><?php echo $nombre_cliente; ?></td>
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
        <td height="105"><br />
        <div align="center"><span class="Estilo6">Detalle Mezclas</span>
        </div><br />
        <table width="841" border="1">
          <tr>
            <td width="87" height="23">N° Orden de Compra</td>
            <td width="78"><p>N° Guia</p>                </td>
            <td width="69">Cantidad</td>
            <td width="65">Precio</td>
            <td width="85">Total</td>
            <td width="89">Fecha</td>
            <td width="">Producto Comprado</td>
			<td width="50">T °</td>
          </tr>
		 <? $sql2="select * from  pesaje where fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."'  and cliente='".$cliente."' and nula!='si'" ;
		 //	echo $sql2;
		  $sumacantidad=0;
		  $sumatotal=0;
		  $result2 = mysql_query($sql2); 
						while($row = mysql_fetch_row($result2))
						{
							$orden=$row[0];
							$temperatura=$row[1];
							$n_guia=$row[10];
							$fecha=$row[4];	
							$tipo_mezcla=$row[13];
							
						$sql2list="select * from mezclas ml, detalle_pesaje dp where dp.guia='".$orden."' and ml.id=dp.producto";
						//echo $sql2list;
							$result2li = mysql_query($sql2list); 
							while($row = mysql_fetch_row($result2li))
							{
								if($tipo_mezcla=="emulsion" || $tipo_mezcla=="combustible")
								{
									if($tipo_mezcla=="emulsion")
										{
										$entro1="si";
										}
									if($tipo_mezcla=="combustible")
										{
										$entro2="si";
										}
								
									
									
									
								}else{
									// $temperatura=$row[1];
									$producto=$row[2];
									$cantidad=$row[6];
									$precio=$row[7];
									$total=$cantidad*$precio;
									$sumacantidad=$sumacantidad+$cantidad ;
									$sumatotal= $sumatotal+$total;
									echo "<tr>";
									echo "<td height='24'>".$n_guia."</td>";
									echo "<td>".$orden."</td>";
									echo "<td>".$cantidad."</td>";
									echo "<td>".number_format($precio, 0, '', '.')."</td>";
									echo "<td>".number_format($total, 0, '', '.')."</td>";
									echo "<td>".$fecha."</td>";
									echo "<td>".$producto."</td>";
									echo "<td>".$temperatura."</td>";
									echo "</tr>";
								}
							}
						}
			?>
          
        </table>
          <table width="841" border="1">
            <tr>
              <td width="89">Total</td>
              <td width="78"><p>&nbsp;</p>                </td>
              <td width="70"><? echo $sumacantidad; ?></td>
              <td width="61">&nbsp;</td>
              <td width="89"><?  echo number_format($sumatotal, 0, '', '.');   ?></td>
              <td width="414">&nbsp;</td>
            </tr>
          </table>
          <div align="center"><br />
              <? if($entro1=="si")
			{
			?>
              <strong class="Estilo6">Detalle Emulsiones</strong>
          </div><br />
          <table width="841" border="1">
          <tr>
            <td width="87" height="23">N° Orden de Compra</td>
            <td width="78"><p>N° Guia</p>                </td>
            <td width="69">Cantidad</td>
            <td width="65">Precio</td>
            <td width="85">Total</td>
            <td width="89">Fecha</td>
            <td width="322">Producto Comprado</td>
          </tr>
<? $sql2="select * from  pesaje where fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."'  and cliente='".$cliente."' and tipo_guia='emulsion' and nula!='si'" ;
		  $sumacantidad=0;
		  $sumatotal=0;
		  $result2 = mysql_query($sql2); 
		  			
					
						while($row = mysql_fetch_row($result2))
						{
							$orden=$row[0];
							$n_guia=$row[10];
							$fecha=$row[4];	
							$sql2list="select * from mezclas ml, detalle_pesaje dp where dp.guia='".$orden."' and ml.id=dp.producto";
							$result2li = mysql_query($sql2list); 
							while($row = mysql_fetch_row($result2li))
							{
								$producto=$row[2];
								$cantidad=$row[6];
								$precio=str_replace(',', '.',$row[7]);
								$total=$cantidad*$precio;
								$sumacantidad=$sumacantidad+$cantidad ;
							 	$sumatotal= $sumatotal+$total;
								echo "<tr>";
								echo "<td height='24'>".$n_guia."</td>";
								echo "<td>".$orden."</td>";
								echo "<td>".$cantidad."</td>";
								echo "<td>".$precio."</td>";
								echo "<td>".number_format($total, 0, '', '.')."</td>";
								echo "<td>".$fecha."</td>";
								echo "<td>".$producto."</td>";
								echo "</tr>";
							}
						}
			?>
          
        </table>
          <table width="841" border="1">
            <tr>
              <td width="89">Total</td>
              <td width="78"><p>&nbsp;</p>                </td>
              <td width="70"><? echo $sumacantidad; ?></td>
              <td width="61">&nbsp;</td>
              <td width="89"><?  echo number_format($sumatotal, 0, '', '.');   ?></td>
              <td width="414">&nbsp;</td>
            </tr>
          </table>
          <div align="center">
            <? } ?>
            <br />
            <br />
            <? if($entro2=="si")
			{
			?>
            <strong class="Estilo6">Detalle Combustibles</strong>
              </div>
            <br />
          </div>
          <table width="841" border="1">
          <tr>
            <td width="87" height="23">N° Orden de Compra</td>
            <td width="78"><p>N° Guia</p>                </td>
            <td width="69">Cantidad</td>
            <td width="65">Precio</td>
            <td width="85">Total</td>
            <td width="89">Fecha</td>
            <td width="322">Producto Comprado</td>
          </tr>
<? $sql2="select * from  pesaje where fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."'  and cliente='".$cliente."' and tipo_guia='combustible' and nula!='si'" ;
		  $sumacantidad=0;
		  $sumatotal=0;
		  $result2 = mysql_query($sql2); 
		  			
					
						while($row = mysql_fetch_row($result2))
						{
							$orden=$row[0];
							$temperatura=$row[1];
							$n_guia=$row[10];
							$fecha=$row[4];	
							$sql2list="select * from mezclas ml, detalle_pesaje dp where dp.guia='".$orden."' and ml.id=dp.producto";
							$result2li = mysql_query($sql2list); 
							while($row = mysql_fetch_row($result2li))
							{
								$temperatura=$row[1];
								$producto=$row[2];
								$cantidad=$row[6];
								$precio=$row[7];
								$total=$cantidad*$precio;
								$sumacantidad=$sumacantidad+$cantidad ;
							 	$sumatotal= $sumatotal+$total;
								echo "<tr>";
								echo "<td height='24'>".$n_guia."</td>";
								echo "<td>".$orden."</td>";
								echo "<td>".$cantidad."</td>";
								echo "<td>".number_format($precio, 0, '', '.')."</td>";
								echo "<td>".number_format($total, 0, '', '.')."</td>";
								echo "<td>".$fecha."</td>";
								echo "<td>".$producto."</td>";
								//echo "<td>".$temperatura."</td>";
								echo "</tr>";
							}
						}
			?>
          
        </table>
          <table width="841" border="1">
            <tr>
              <td width="89">Total</td>
              <td width="78"><p>&nbsp;</p>                </td>
              <td width="70"><? echo $sumacantidad; ?></td>
              <td width="61">&nbsp;</td>
              <td width="89"><?  echo number_format($sumatotal, 0, '', '.');   ?></td>
              <td width="414">&nbsp;</td>
            </tr>
          </table>
          <? } ?>
          </td>
      </tr>
    </table></td>
  </tr>
       <tr>
        <td height="86">
        <br /> <center>
          <strong> Servicio de Planta </strong>
        </center>
        <br />
        <table width="841" border="1">
          <tr>
            <td width="73" height="23">N° Guia</td>
			<td width="62" height="23">Partida Control</td>
            <td width="65"><p>Cantidad</p></td>
            <td width="89">Precio</td>
            <td width="101">Fecha</td>
            <td width="230">Producto Comprado</td>
            <td width="77">Patente</td>
            
          </tr>
           <? $sql2="select * from pesaje pe,camiones cam where pe.fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and  cam.id=pe.patente and cliente='".$cliente."' and pe.nula!='si' and pe.tipo_guia='servicio'";
		//	echo $sql2;
		   		 $sumacantidad=0;
		  $sumatotal=0;
		  $result2 = mysql_query($sql2); 
						while($row = mysql_fetch_row($result2))
						{
							$guia=$row[0];
							$n_orden=$row[12];
							$fletero=$row[1];
							$fecha=$row[4];	
							$patente=$row[17];
							$tipo_mezcla=$row[13];
							$cliente=$row[21];		
							$partidacontrol=$row[14];								
							$sql2list="select * from  detalle_pesaje where guia='".$guia."' ";
							
							$result2li = mysql_query($sql2list); 
							while($row = mysql_fetch_row($result2li))
							{
								
									
									$producto=$row[1];
									$cantidad=$row[2];
									$precio=$row[3];
									$service=$cantidad*$precio;
									$sumacantidad=$sumacantidad+$cantidad ;
									echo "<tr>";
									echo "<td height='24'>".$guia."</td>";
									echo "<td height='24'>".$partidacontrol."</td>";
									echo "<td>".$cantidad."</td>";
									echo "<td>".number_format($precio, 0, '', '.')."</td>";
									echo "<td>".$fecha."</td>";
									echo "<td>".$producto."</td>";
									echo "<td>".$patente."</td>";
									
									echo "</tr>";
								
							}
						}
			?>
        </table>
          <table width="841" border="1">
            <tr>
            <td width="71" height="23">Total</td>

            <td width="68"></td>
			 <td width="66"></td>
	<td width="87"><p><?  echo number_format($service, 0, '', '.');   ?></p>                </td>        
		<td width="101"></td>
		
            <td width="230"></td>
            <td width="77"></td>
          
                           
              
            </tr>
          </table>
          
          </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
