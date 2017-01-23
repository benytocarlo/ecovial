<?php 
include("conexion.php"); 

$fecha_inicio=$_POST["fecha_inicio"];
$fecha_final=$_POST["fecha_final"];


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
                  <td width="83" height="23"><p><img src="../../rutas_small.jpg" width="172" height="84" /></p></td>
                  <td width="432"><div align="center"><span class="Estilo5">Informe de Guias de<span class="Estilo1"> Servicio de Planta</span></span></div></td>
                </tr>
            </table></td>
        <td width="283"><p align="center"><strong>Constructora RUTAS SpA<br />
RUT: 76.495.749-0<br />
Planta Curicó</strong></p></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="74"><table width="841" border="0">
          <tr>
            <td width="130">Desde:</td>
            <td width="695"><?php echo $fecha_inicio; ?></td>
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
          <strong> Detalle </strong>
        </center>
        <br />
        <table width="841" border="1">
          <tr>
            <td width="75" height="23">N° Guia</td>
			<td width="63" height="23">Partida Control</td>
            <td width="66"><p>Cantidad</p></td>
            <td width="91">Precio</td>
            <td width="103">Fecha</td>
            <td width="128"><div align="center">Producto <br />
              Comprado</div></td>
            <td width="61">Patente</td>
            <td width="202">Cliente</td>
             <td width="202">Obra</td>
          </tr>
           <? $sql2="select * from pesaje pe,camiones cam, cliente cli, obra ob where pe.fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and  cam.id=pe.patente and ob.id=pe.obra and cli.id=pe.cliente and pe.nula!='si' and pe.tipo_guia='servicio'";
			echo $sql2;
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
							$obra=$row[17];
							$tipo_mezcla=$row[13];
							$cliente=$row[25];	
							$obra=$row[34];		
							$partidacontrol=$row[13];								
							$sql2list="select * from  detalle_pesaje where guia='".$guia."' ";
							
							$result2li = mysql_query($sql2list); 
							while($row = mysql_fetch_row($result2li))
							{
									$tipo_mezcla=$row[13];
									$cantidad=$row[2];
									$precio=$row[3];
									$total=$cantidad*$precio;
									$sumacantidad=$sumacantidad+$cantidad ;
									echo "<tr>";
									echo "<td height='24'>".$guia."</td>";
									echo "<td height='24'>".$partidacontrol."</td>";
									echo "<td>".$cantidad."</td>";
									echo "<td>".number_format($precio, 0, '', '.')."</td>";
									echo "<td>".$fecha."</td>";
									echo "<td>".$partidacontrol."</td>";
									echo "<td>".$patente."</td>";
									echo "<td>".$cliente."</td>";
									echo "<td>".$obra."</td>";
									echo "</tr>";
								
							}
						}
			?>
        </table>
          <table width="841" border="1">
            <tr>
            <td width="73" height="23">Total</td>
<td width="65"><p>&nbsp;</p>                </td>
            <td width="89"><? echo $sumacantidad; ?></td>
            <td width="101"></td>
            <td width="230"></td>
            <td width="77"></td>
            <td width="70"></td>
            </tr>
          </table>
          
          </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
