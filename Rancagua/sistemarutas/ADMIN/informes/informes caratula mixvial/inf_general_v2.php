﻿<?php 
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
                  <td width="83" height="23"><p><span class="Estilo3"><img src="Ecovial_chico.jpg" width="200" height="66" /></span></p></td>
                  <td width="432"><div align="center"><span class="Estilo5">Informe General </span></div></td>
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
        
        
        <br />
		<center>Ventas </center><br /><table width="845" border="1">
          <tr>
            <td width="597" height="23">Producto </td>
            <td width="232">&nbsp;</td>
          </tr>
           <? // $sql2="select *, SUM(pe.conver_m3)AS Total from pesaje pe, mezclas mez, obra ob where pe.fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and pe.obra=".$obra." and pe.obra=ob.id and pe.tipo_mezcla=mez.id GROUP BY pe.tipo_mezcla ";
			$igual=0;
			//$sql2="select * from pesaje pe ,obra ob where pe.fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and pe.obra=".$obra." and pe.obra=ob.id ";
	$sql2="select *,SUM(dp.litros)AS Total, SUM(dp.valor_unitario)AS Valor from pesaje pe ,detalle_pesaje dp where pe.fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and pe.nula!='si' and pe.id=dp.guia and pe.tipo_guia!='servicio' group by dp.producto";
		//	echo $sql2;

	//	$sql4="select *,SUM(dp.valor_unitario)AS Suma_Unitarios from detalle_pesaje dp, pesaje pe where pe.fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and pe.nula!='si' and pe.id=dp.guia and pe.tipo_guia!='servicio' group by dp.producto";
echo $sql4;
				        //and pesj.nula!='si'
			
            $result2 = mysql_query($sql2); 
						while($row = mysql_fetch_row($result2))
					
						{
							$guia=$row[0];
							$cantidad=$row[20];
							$cantidad2=$row[21];
							$mezcla=$row[16];
						//	$cantidad3= $cantidad*$cantidad2;
							$sql2m="select * from mezclas where id=".$mezcla."";
           						$result2m = mysql_query($sql2m); 
								
								while($row = mysql_fetch_row($result2m))
								{
									$nombre_mezcla=$row[2];
									$tipo_me=$row[1];
								}
								if($tipo_me=="Emulsion" || $tipo_me=="Otro")
								{
									echo "<tr>";
									echo "<td>".$nombre_mezcla."</td>";
									echo "<td>".$cantidad."  Lts</td>";
							//		echo "<td>$".$cantidad3."</td>";
									echo "</tr>";
								}else{
									echo "<tr>";
									echo "<td>".$nombre_mezcla." </td>";
									echo "<td>".$cantidad." M3</td>";
								//	echo "<td>$".$cantidad3."</td>";
									echo "</tr>";
								}
							
							
						}
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//		$sql4="select * from detalle_pesaje dp, pesaje pe where pe.fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and pe.nula!='si' and pe.id=dp.guia and pe.tipo_guia!='servicio'";
//echo $sql4;
				
			?>
        </table>
		<br />
		<center>
		  Ingresos </center><br /><table width="845" border="1">
          <tr>
            <td width="600" height="23">Producto </td>
            <td width="229">Total</td>
          </tr>
           <? 
			$igual=0;
			$sql23="select *,SUM(dp.cantidad_total)AS Total from materias pe ,ingreso_materias dp where dp.fecha_guia  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and pe.id=dp.materia  group by dp.materia";
	//		echo $sql23;
			$result23= mysql_query($sql23); 
						while($row = mysql_fetch_row($result23))
						{
							$guia=$row[0];
							$cantidad=$row[19];
							$nombre_mezcla=$row[1];
							
									echo "<tr>";
									echo "<td>".$nombre_mezcla." </td>";
									echo "<td>".$cantidad."</td>";
									echo "</tr>";
					
							
						}
			?>
        </table>
		<br>
		<center>
		  Servicio </center><br /><table width="845" border="1">
          <tr>
            <td width="600" height="23">Producto </td>
            <td width="229">Total</td>
          </tr>
           <? 
			$igual=0;
			$sql2="select *,SUM(dp.litros)AS Total from pesaje pe ,detalle_pesaje dp where pe.fecha_hora  BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' and pe.nula!='si' and pe.id=dp.guia and pe.tipo_guia='servicio' group by dp.producto";
          
		    $result2 = mysql_query($sql2); 
						while($row = mysql_fetch_row($result2))
						{
							$guia=$row[0];
							$cantidad=$row[20];
							$mezcla=$row[16];
									echo "<tr>";
									echo "<td>".$mezcla." </td>";
									echo "<td>".$cantidad." M3</td>";
									echo "</tr>";
							
						}
			?>
		
        </table>
          </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
