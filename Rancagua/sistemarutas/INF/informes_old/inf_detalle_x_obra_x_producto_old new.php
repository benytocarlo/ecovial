<?php 
include("conexion.php"); 
$obra=$_POST["obra"];
$mezclita=$_POST["mezclita"];

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
                  <td width="83" height="23"><p><span class="Estilo3"><img src="Logo+ISO.jpg" alt="" width="227" height="130" /></span></p></td>
                  <td width="432"><div align="center"><span class="Estilo5">Informe de Obra por Producto</span></div></td>
                </tr>
            </table></td>
            <td width="283"><div align="center">Sociedad de Mezclas Viales Mixvial Ltda. <br />
76.979.030-6 <br />
Fundo Santa Teresa de La Puente Alta, Camino a Doñihue S/N <br />
Fono (72)585376 <br />
Fax (72)585379 <br />
Rancagua</div>
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
            <td width="65"><p>Cantidad</p>                </td>
            <td width="89">Precio</td>
            <td width="159">Fletero</td>
            <td width="101">Patente</td>
            <td width="77">Fecha</td>
            <td width="231">Producto Comprado</td>
          </tr>
           <? $sql2="select * from transportista tra,  pesaje ing_or  , mezclas mle ,camiones cam where ing_or.fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and ing_or.obra=".$obra." and ing_or.transportista=tra.id and mle.id=ing_or.tipo_mezcla and ing_or.patente=cam.id and ing_or.tipo_mezcla=".$mezclita."";
		 $sumacantidad=0;
		  $sumatotal=0;
		  $result2 = mysql_query($sql2); 
						while($row = mysql_fetch_row($result2))
						{
							$orden=$row[2];
							$cantidad =$row[12];
							$precio=$row[15];
							$fletero=$row[1];
							$fecha=$row[6];	
							$producto=$row[22];	
							$patente=$row[26];	
							$tipoemulsion=$row[19];
							 if($tipoemulsion=="emulsion")
							 {
							 	$sqltipo="select * from detalle_pesaje where guia='".$orden."'";
								echo $sqltipo;
							  	$resultti = mysql_query($sqltipo); 
								while($row = mysql_fetch_row($resultti))
								{
									echo "<tr>";
									echo "<td height='24'>".$orden."</td>";
									echo "<td>".$row[2]."</td>";
									echo "<td>".number_format($row[3], 0, '', '.')."</td>";
									echo "<td>".$fletero."</td>";
									echo "<td>".$patente."</td>";
									echo "<td>".$fecha."</td>";
									echo "<td>".$row[1]."</td>";
									echo "</tr>";
									$total=$row[2]*$row[3];
									$sumacantidad=$sumacantidad+$row[2];
							 		$sumatotal= $sumatotal+$total;
								}
									 
							 }else{
							 	echo "<tr>";
								echo "<td height='24'>".$orden."</td>";
								echo "<td>".$cantidad."</td>";
								echo "<td>".number_format($precio, 0, '', '.')."</td>";
								echo "<td>".$fletero."</td>";
								echo "<td>".$patente."</td>";
								echo "<td>".$fecha."</td>";
								echo "<td>".$producto."</td>";
								echo "</tr>";
								$total=$cantidad*$precio;
								$sumacantidad=$sumacantidad+$cantidad ;
							 	$sumatotal=$sumatotal+$total;
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
