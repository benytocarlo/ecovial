<?php 
include("conexion.php"); 
$tipo_mezcla=$_POST["tipo_mezcla"];
$mezclita=$_POST["mezclita"];
$fecha_inicio=$_POST["fecha_inicio"];
$fecha_final=$_POST["fecha_final"];
$sql="select * from mezclas where id=".$mezclita."";
		  $result = mysql_query($sql); 
			while($row = mysql_fetch_row($result))
			{
			$nombre_mezcla=$row[2];
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
    <td width="851" height="315"><table width="851" height="313" border="0">
      <tr>
        <td width="841" height="98"><table width="841" border="0">
          <tr>
            <td width="542" height="138"><table width="548" border="0">
                <tr>
                  <td width="227" height="23"><p><span class="Estilo3"><img src="Logo+ISO.jpg" alt="" width="227" height="130" /></span></p></td>
                  <td width="311"><div align="center"><span class="Estilo5">Informe Productos Vendidos</span></div></td>
                </tr>
            </table></td>
            <td width="283"><p align="center">Sociedad de Mezclas Viales Mixvial Ltda. <br />
76.979.030-6 <br />
Fundo Santa Teresa de La Puente Alta, Camino a Doñihue S/N <br />
Fono (72)585376 <br />
Fax (72)585379 <br />
Rancagua</p></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="74"><table width="841" border="0">
          <tr>
            <td width="130">Producto:</td>
            <td width="695"><?php echo $nombre_mezcla; ?></td>
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
        <td height="87"><table width="841" border="1">
          <tr>
          <td width="93" height="24">N° Guia</td>
            <td width="93" height="24">N° Orden</td>
            <td width="105"><p>Cantidad</p>                </td>
            <td width="91">Precio</td>
            <td width="110">Total</td>
            <td width="161">Fecha</td>
            <td width="241">Cliente</td>
          </tr>
 <? $sql2="select * from  pesaje pesj ,cliente cli, mezclas mle where pesj.fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."'  and pesj.tipo_mezcla=mle.id and pesj.tipo_mezcla='".$mezclita."' and pesj.cliente=cli.id";
		$sumacantidad=0;
		  $sumatotal=0;
		  $result2 = mysql_query($sql2); 
						while($row = mysql_fetch_row($result2))
						{
							$guia=$row[0];
							$orden=$row[12];
							$cantidad =$row[10];
							$precio=$row[13];
							$total=$cantidad*$precio;
							$fecha=$row[4];	
							$cliente=$row[19];	
							$producto=$row[10];	
							$sumacantidad=$sumacantidad+$cantidad ;
							 $sumatotal= $sumatotal+$total;
							echo "<tr>";
								echo "<td height='24'>".$guia."</td>";
							echo "<td height='24'>".$orden."</td>";
							echo "<td>".$cantidad."</td>";
							echo "<td>".number_format($precio, 0, '', '.')."</td>";
							echo "<td>".number_format($total, 0, '', '.')."</td>";
							echo "<td>".$fecha."</td>";
							echo "<td>".$cliente."</td>";
						    echo "</tr>";
						}
			?>        </table>
          <table width="841" border="1">
            <tr>
              <td width="174">Totales</td>
              <td width="95"><p><? echo number_format($sumacantidad, 0, '', '.'); ?></p>                </td>
              <td width="85">&nbsp;</td>
              <td width="93"><? echo number_format($sumatotal, 0, '', '.'); ?></td>
              <td width="360">&nbsp;</td>
            </tr>
          </table>
          </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
