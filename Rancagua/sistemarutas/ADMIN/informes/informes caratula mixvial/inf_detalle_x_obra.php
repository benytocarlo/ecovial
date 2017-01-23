<?php 
include("conexion.php"); 
$obra=$_POST["obra"];
$fecha_inicio=$_POST["fecha_inicio"];
$fecha_final=$_POST["fecha_final"];
$sql="select * from obra where id=".$obra."";
		  $result = mysql_query($sql); 
			while($row = mysql_fetch_row($result))
			{
			$nombre_obra=$row[1];
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
                  <td width="83" height="23"><p><img src="Ecovial_chico.jpg" width="200" height="66" /></p></td>
                  <td width="432"><div align="center"><span class="Estilo5">Informe Detalle por Obra</span></div></td>
                </tr>
            </table></td>
       <td width="283"><p align="center">Ecovial Ltda.<br />
77.580.000-3<br />
Hijuela 10 Lote A Maquehua<br />
Fono (75) 2543470<br />
recepcion@ecovial.cl<br />
Curicó</p></td>
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
        <td height="86">
        <br /> <center>
          <strong> Detalle Mezclas </strong>
        </center>
        <br />
        <table width="841" border="1">
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
           <? $sql2="select * from transportista tra,  pesaje ing_or   , detalle_pesaje dp, camiones cam where ing_or.fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and ing_or.obra=".$obra." and ing_or.id=dp.guia and ing_or.transportista=tra.id and ing_or.patente=cam.id and ing_or.nula!='si' order by ing_or.id asc";
		//	echo $sql2;
			$sumacantidad=0;
		  $sumatotal=0;
		  $entro1="no";
		  $result2 = mysql_query($sql2); 
						while($row = mysql_fetch_row($result2))
						{
							$guia=$row[2];
							$n_orden=$row[12];
							$fletero=$row[1];
							$fecha=$row[6];	
							$patente=$row[24];
							$tipo_mezcla=$row[15];
							$partidacontrol=$row[16];	
							
							$sql2list="select * from mezclas ml, detalle_pesaje dp where dp.guia='".$guia."' and ml.id=dp.producto order by dp.guia asc";
									
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
								}
								else{
									$producto=$row[2];
									$cantidad=$row[6];
									$precio=$row[7];
									$total=$cantidad*$precio;
									$sumacantidad=$sumacantidad+$cantidad ;
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
								}
							}
						}
			?>
        </table>
          <table width="841" border="1">
            <tr>
              <td width="140">Total</td>
              <td width="66"><p><? echo $sumacantidad; ?></p>                </td>
              <td width="152">&nbsp;</td>
              <td width="107">&nbsp;</td>
              <td width="409">&nbsp;</td>
            </tr>
          </table>
          <? 
		  if($entro1=="si")
		  {
		  ?> <br /> <center>
          <strong> Detalle Emulsiones </strong>
        </center>
        <br />
        <table width="841" border="1">
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
           <? $sql22="select * from transportista tra,  pesaje ing_or   ,camiones cam where ing_or.fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and ing_or.obra=".$obra." and ing_or.transportista=tra.id and ing_or.patente=cam.id and ing_or.nula!='si' and ing_or.tipo_guia='emulsion' order by tra.id asc";
		 $sumacantidad=0;
		  $sumatotal=0;
		  $result2 = mysql_query($sql22); 
						while($row = mysql_fetch_row($result2))
						{
							$guia=$row[2];
							$n_orden=$row[12];
							$fletero=$row[1];
							$fecha=$row[6];	
							$patente=$row[19];
							$tipo_mezcla=$row[15];
							$partidacontrol=$row[16];
							$sql2list="select * from mezclas ml, detalle_pesaje dp where dp.guia='".$guia."' and ml.id=dp.producto order by dp.guia asc";
									
							$result2li = mysql_query($sql2list); 
							while($row = mysql_fetch_row($result2li))
							{
								
									$producto=$row[2];
									$cantidad=$row[6];
									$precio=$row[7];
									$total=$cantidad*$precio;
									$sumacantidad=$sumacantidad+$cantidad ;
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
							
							}
						}
			?>
        </table>
          <table width="841" border="1">
            <tr>
              <td width="140" height="23">Total</td>
              <td width="66"><p><? echo $sumacantidad; ?></p>                </td>
              <td width="152">&nbsp;</td>
              <td width="107">&nbsp;</td>
              <td width="409">&nbsp;</td>
            </tr>
          </table>
          
          <? }  ?>
           <? 
		  if($entro2=="si")
		  {
		  ?> <br /> <center>
          <strong> Detalle Combustibles </strong>
        </center>
        <br />
        <table width="841" border="1">
          <tr>
            <td width="73" height="23">N° Guia</td>
            <td width="65"><p>Cantidad</p>                </td>
            <td width="89">Precio</td>
            <td width="159">Fletero</td>
            <td width="101">Patente</td>
            <td width="77">Fecha</td>
            <td width="231">Producto Comprado</td>
          </tr>
           <? $sql23="select * from transportista tra,  pesaje ing_or   ,camiones cam where ing_or.fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and ing_or.obra=".$obra." and ing_or.transportista=tra.id and ing_or.patente=cam.id and ing_or.nula!='si' and ing_or.tipo_guia='combustible' order by tra.id asc";
		 $sumacantidad=0;
		  $sumatotal=0;
		  $result2 = mysql_query($sql23); 
						while($row = mysql_fetch_row($result2))
						{
							$guia=$row[2];
							$n_orden=$row[12];
							$fletero=$row[1];
							$fecha=$row[6];	
							$patente=$row[19];
							$tipo_mezcla=$row[15];
							$sql2list="select * from mezclas ml, detalle_pesaje dp where dp.guia='".$guia."' and ml.id=dp.producto order by dp.guia asc";
									
							$result2li = mysql_query($sql2list); 
							while($row = mysql_fetch_row($result2li))
							{
								
									$producto=$row[2];
									$cantidad=$row[6];
									$precio=$row[7];
									$total=$cantidad*$precio;
									$sumacantidad=$sumacantidad+$cantidad ;
									echo "<tr>";
									echo "<td height='24'>".$guia."</td>";
									echo "<td>".$cantidad."</td>";
									echo "<td>".number_format($precio, 0, '', '.')."</td>";
									echo "<td>".$fletero."</td>";
									echo "<td>".$patente."</td>";
									echo "<td>".$fecha."</td>";
									echo "<td>".$producto."</td>";
									echo "</tr>";
							
							}
						}
			?>
        </table>
          <table width="841" border="1">
            <tr>
              <td width="73" height="23">Total</td>
              <td width="66"><p><? echo $sumacantidad; ?></p>                </td>
              <td width="152">&nbsp;</td>
              <td width="107">&nbsp;</td>
              <td width="409">&nbsp;</td>
            </tr>
          </table>
          
          <? }  ?>
          </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
