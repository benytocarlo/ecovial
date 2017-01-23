<?php 
  		///////////// Para LAN
//$conexion = mysql_connect("localhost", "usuario", "clave");
//mysql_select_db("avance", $conexion);

///////////// Para WAN
$conexion = mysql_connect("localhost", "rutas_sistemas", "7RJWmWVxDfFo");
mysql_select_db("rutas_sistema_avanceobra", $conexion);
	
		$operador = $_POST["operador"];
		$descuento = $_POST["descuento"];
	//	echo $descuento;
		$cant_vendida = $_POST["cant_vendida"];
		$cant_valor = $_POST["cant_valor"];
		$trato = $_POST["trato"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_termino = $_POST["fecha_termino"];

$fecha_inicio_aux	= $fecha_inicio." 00:00:01";
$fecha_final_aux	= $fecha_termino." 23:59:59";

$sql = "select * from control_equipos where operador='$operador' and fecha  between '$fecha_inicio_aux' and '$fecha_final_aux' order by fecha asc";
//echo $sql;
//$sql = "select * from datos where cliente='$cliente' and fecha  between '$fecha_inicio' and '$fecha_termino' ";


$result = mysql_query($sql,$conexion) or die(mysql_error());

$vardias = explode("-",$fecha_inicio);
$ano = $vardias[0];
$mes = $vardias[1];
$dia = $vardias[2];
$fechaunix = mktime(0, 0, 0, $mes, $dia, $ano);
$dia_semana = strftime("%a", $fechaunix);


if($dia_semana=='Mon'){ $semana=1;}
if($dia_semana=='Tue'){ $semana=2;}
if($dia_semana=='Wed'){ $semana=3;}
if($dia_semana=='Thu'){ $semana=4;}
if($dia_semana=='Fri'){ $semana=5;}
if($dia_semana=='Sat'){ $semana=6;}
if($dia_semana=='Sun'){ $semana=7;}

?>
<html>

<body>
<div align="center" > 
  <p><font color="#BABBD8" class="fondo1"><i><b>
    </b></i></font>
  <table width="975" border="0">
    <tr>
      <td height="137"><p><font face="Trebuchet MS"><strong>Constructora RUTAS SpA<br>
RUT: 76.495.749-0 </strong><br>
      </font></p>
      </td>
      <td><div align="right"><img src="rutas_small.jpg" alt="" width="189" height="84"></div></td>
    </tr>
  </table>
  <center>
      <p>&nbsp;</p>
      <p><font color="#000000"><strong><font size="5" face="Trebuchet MS">INFORME SEMANA CORRIDA POR OPERADOR</font></strong></font></p>
  </center>
  <table width="841" border="0">
    <tr>
      <td width="130">Operador:</td>
      <td width="695"><?php echo $operador; ?></td>
    </tr>
	<tr>
      <td width="130">Precio Trato:</td>
      <td width="695"><?php echo $trato; ?></td>
    </tr>

    <tr>
      <td>Desde:</td>
      <td><?php echo $fecha_inicio; ?></td>
    </tr>
    <tr>
      <td>Hasta:</td>
      <td><?php echo $fecha_termino; ?></td>
    </tr>
  </table>
  </p>
  <form name="form1" method="post" action="informe_proveedores2.php" target="_blank">
    <br>
    <table width="960" border="1">
      <tr>
        <td width="114"><div align="center"><font size="4" face="Trebuchet MS">Fecha</font></div></td>
		<td width="100"><div align="center"><strong><font face="Trebuchet MS">Nro. Report</font></strong></div></td>
                <td width="230"><div align="center"><strong><font face="Trebuchet MS">M&aacute;quina</font></strong></div></td>
        <td width="208"><div align="center"><strong><font face="Trebuchet MS">Obra</font></strong></div></td>
        <td width="142"><div align="center"><font face="Trebuchet MS"><strong>Total Horas </strong></font></div></td>
        <td width="126"><div align="center"><font face="Trebuchet MS"><strong>Total Horas a Pagar</strong></font>	</div></td>
   	      </tr>
	  <?php
	  $suma=0; 
	  $contador=$semana;
	  $totalacumulado;
	  $i=0;
	  $diastrabajados=0;
	  while($row =mysql_fetch_row($result))
		{
			
			
			$fecha = $row[1];
			$sqlferiado = "select * from feriados where date='$fecha'";
			$resultferiado = mysql_query($sqlferiado,$conexion) or die(mysql_error());
			$rowferiado =mysql_fetch_row($resultferiado);
			if($rowferiado){ $feriado=1; }
			
			if($i==0){
					$sqlferiado = "select * from feriados where date='$fecha_inicio'";
					$resultferiado = mysql_query($sqlferiado,$conexion) or die(mysql_error());
					$rowferiado =mysql_fetch_row($resultferiado);
					if($rowferiado){ $feriado=1; }
			}
			
			$vardias = explode("-",$fecha);
			$ano = $vardias[0];
			$mes = $vardias[1];
			$dia = $vardias[2];
			$fechaunix = mktime(0, 0, 0, $mes, $dia, $ano);
			$dia_semana = strftime("%a", $fechaunix);


			if($dia_semana=='Mon'){ $semana=1;}
			if($dia_semana=='Tue'){ $semana=2;}
			if($dia_semana=='Wed'){ $semana=3;}
			if($dia_semana=='Thu'){ $semana=4;}
			if($dia_semana=='Fri'){ $semana=5;}
			if($dia_semana=='Sat'){ $semana=6;}
			if($dia_semana=='Sun'){ $semana=7;}
			
			
			$vardias3 = explode("-",$fecha);
			$diaaux2 = $vardias3[2];
			$auxrest=$diaaux2-$diaaux;
			//echo $auxrest;
			
			
			$report = $row[2];
			$operador=$row[3];
			$equipo = $row[4];
			$obra = $row[5];
			$horas=$row[6];
			$suma=$suma+$horas;
			$suma1=$suma1+$fresado;
			if($horas<=5 and $horas>=1)
			{
				$horas_fact=6;
			}
					
			if($horas>=6)
			{
				$horas_fact=$horas;
			}
			if($horas==0)
			{
				$horas_fact=0;
				$notrabajo=0;
			}else{
				$notrabajo=1;
			}
			if($i!=0){
				if($auxrest>1){
					$auxrest=$auxrest-1;
					
					for ($i = 1; $i <= $auxrest; $i++) {
						$diafinal=$diaaux+$i;
						$fechaunix = mktime(0, 0, 0, $mes, $diafinal, $ano);
						$dia_semana2 = strftime("%a", $fechaunix);
						if($dia_semana2=="Fri")		{
							
							if($feriado==1){ $cont=2; } else{ $cont=1; }
							$totalcalc = (($suma2*$trato)/5)*$cont;
							$totalacumulado=$totalacumulado+$totalcalc;
							echo "<tr>";
							echo "<td></td><td></td><td></td><td></td><td><b>TOTAL</b></td><td><div align='right'><b>$ ".number_format($totalcalc, 0, ',', '.')."</b></div></td>";
							echo "</tr>";
							$suma2=0;
							$feriado=0;
							$contador =0;	
							$diastrabajados=0;			
						 }
						
						if($dia_semana2!="Sun" && $dia_semana2!="Sat")		{
						echo "<tr>";
						echo"<td>$vardias3[0]-$vardias3[1]-$diafinal</td><td>Sin Registro </td><td>Sin Registro</td><td>Sin Registro</td><td>0</td><td>0</td>";
						echo "</tr>";
						}
						if($contador==7 && $dia_semana2=="Sun" )		{
							
							if($feriado==1){ $cont=2; } else{ $cont=1; }
							$totalcalc = (($suma2*$trato)/5)*$cont;
							$totalacumulado=$totalacumulado+$totalcalc;
							echo "<tr>";
							echo "<td></td><td></td><td></td><td></td><td><b>TOTAL</b></td><td><div align='right'><b>$ ".number_format($totalcalc, 0, ',', '.')."</b></div></td>";
							echo "</tr>";
							$suma2=0;
							$feriado=0;
							$diastrabajados=0;			
						 }
						$contador=$contador+1;		
					  }
				}
			}
			if($i==0 && $dia_semana!="Sat"){
				echo "<tr>";
				echo"<td>$fecha</td><td>$report</td><td>$equipo</td><td>$obra</td><td>$horas</td><td>$horas_fact</td>";
				echo "</tr>";
				$suma2=$suma2+$horas_fact;
			}else{
				if($fechaauxiliar==$fecha && $dia_semana!="Sat"){
					echo "<tr>";
					echo "<td>$fecha</td><td>$report</td><td>$equipo</td><td>$obra</td><td>$horas</td><td>$horas_fact</td>";
					echo "</tr>";
					$suma2=$suma2+$horas_fact;
				}else{
					if($dia_semana!="Sat") {
					if($semanaaux!=$semana && $semanaaux==7 ){
						if($feriado==1){ $cont=2; } else{ $cont=1; }
							$totalcalc = (($suma2*$trato)/5)*$cont;
							$totalacumulado=$totalacumulado+$totalcalc;
							echo "<tr>";
							echo "<td></td><td></td><td></td><td></td><td><b>TOTAL</b></td><td><div align='right'><b>$ ".number_format($totalcalc, 0, ',', '.')."</b></div></td>";
							echo "</tr>";
							$contador =0;
							$suma2=0;
							$feriado=0;	
						 }
					echo "<tr>";
					echo"<td>$fecha</td><td>$report</td><td>$equipo</td><td>$obra</td><td>$horas</td><td>$horas_fact</td>";
					echo "</tr>";
					 if($notrabajo==1) { $diastrabajados=$diastrabajados+1; }
					$suma2=$suma2+$horas_fact;					
					 if($dia_semana=="Fri" ){
						if($feriado==1){ $cont=2; } else{ $cont=1; }
						$totalcalc = (($suma2*$trato)/5)*$cont;

						$totalacumulado=$totalacumulado+$totalcalc;
						echo "<tr>";
						echo "<td></td><td></td><td></td><td></td><td><b>TOTAL</b></td><td><div align='right'><b>$ ".number_format($totalcalc, 0, ',', '.')."</b></div></td>";
						echo "</tr>";
						$suma2=0;
						$feriado=0;				
					 }
					$contador=$contador+1; 
					}
				}
			}
			
			if($fecha_termino==$fecha){
				echo "<tr>";
				echo "<td></td><td></td><td></td><td></td><td><b>TOTAL</b></td><td><div align='right'><b>$ ".number_format($totalcalc, 0, ',', '.')."</b></div></td>";
				echo "</tr>";
			}
			$vardias2 = explode("-",$fecha);
			$diaaux = $vardias2[2];
			$i=$i+1;
			$fechaauxiliar=$fecha;
			$semanaaux=$semana;	
			$sumtotal=$sumtotal+$horas_fact;
			//$minimo=$sumtotal*$trato; 
		 }
		 
		 ?> 
         		<?if
                ($sumtotal<='59') {	;
				$sumtotal2=60; }
                
                	elseif
                ($sumtotal >= '200') {	;
				$sumtotal2=200; }
                
                else { ;
                $sumtotal2=$sumtotal; }
                                                         
             $sumtotal3=$sumtotal2-$descuento;
                                                                          
                $minimo=$sumtotal3*$trato; 
                
			
		
			
		 ?>
         
		 <?if($dia_semana!='Sun') {	;
				$cont=1;
				if($feriado==1){ $cont=2; } else{ $cont=1; }
				$totalcalc = (($suma2*$trato)/5)*$cont;
				$totalacumulado=$totalacumulado+$totalcalc;
				echo "<tr>";
				echo "<td></td><td></td><td></td><td></td><td><b>TOTAL</b></td><td><div align='right'><b>$ ".number_format($totalcalc, 0, ',', '.')."</b></div></td>";
				echo "</tr>";
			}
		 ?>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>		 
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
          
			<td><div align="right"><strong>Total :</strong></div></td>
			<td><div align="center"><strong> <?php echo $suma; ?> Hrs.</strong></div></td>
			<td><div align="center"><strong> <?php echo $sumtotal3; ?> Hrs.</strong></div></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td colspan="2"><div align="right"><strong>Total Semanas Corridas del Período</strong></div>			  <div align="center"><strong></strong></div></td>
			<td><div align="right"><strong>$ <?php echo number_format($totalacumulado, 0, ',', '.'); ?> </strong></div></td>
		</tr>
  
		<tr>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td colspan="2" align="right"><strong>Horas  Trato</strong></td>
		  <td align="right"><strong>$ <?php echo number_format($minimo, 0, ',', '.'); ?></strong></td>
	  </tr>
		<tr>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td colspan="2" align="right"><strong>D&iacute;as Vendidos (<?php echo number_format($cant_vendida, 0, ',', '.'); ?>)</strong></td>
		  <td align="left"><div align="right"><strong> $<?php echo number_format($cant_valor, 0, ',', '.'); ?></strong></div></td>
	  </tr>
    </table>
    <br>
    
    <p>&nbsp;</p>
  </form>
  </div>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>