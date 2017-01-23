<?php 
//print_r($_POST);
?>
<?php 

///////////// Para LAN
//$conexion = mysql_connect("localhost", "usuario", "clave");
//mysql_select_db("avance", $conexion);

///////////// Para WAN
$conexion = mysql_connect("localhost", "rutas_sistemas", "7RJWmWVxDfFo");
mysql_select_db("rutas_sistema_avanceobra", $conexion);


	$fecha_inicio = $_POST["fecha_inicio"];
$fecha_termino = $_POST["fecha_termino"];
	$nombre_obra = $_POST["nombre_obra"];
	//echo $clientes;
//	$maquina = $_POST["maquina"];
$fecha = $_POST["fecha"];
//echo $fecha;

$sql = "select * from control_dia where nombre_obra='$nombre_obra' and eq_asfalto!= ' ' and fecha between '$fecha_inicio' and '$fecha_termino' order by fecha asc";

	//echo $sql;
$result = mysql_query($sql,$conexion) or die(mysql_error());

$sql2 = "select * from control_dia where nombre_obra='$nombre_obra' and (eq_maq_fre!= ' ' or eq_maq_maf!= ' ') and fecha between '$fecha_inicio' and '$fecha_termino' order by fecha asc ";
	//echo $sql2;
$result2 = mysql_query($sql2,$conexion) or die(mysql_error());

$sql3 = "select * from control_dia where nombre_obra='$nombre_obra' and (imprimacion!= ' ' or riego!= ' ') and fecha between '$fecha_inicio' and '$fecha_termino' order by fecha asc ";
//	echo $sql3;
$result3 = mysql_query($sql3,$conexion) or die(mysql_error());

?>
<html>

<body>
<div align="center" > 
  <p><font color="#BABBD8" class="fondo1"><i><b>
    </b></i></font>
  <table width="801" border="0">
    <tr>
      <td width="469" height="90"><p><font face="Trebuchet MS"><strong>Constructora RUTAS SpA<br>
RUT: 76.495.749-0 </strong></font></p></td>
      <td width="367"><div align="right"><img src="rutas_small.jpg" width="191" height="84"></div></td>
    </tr>
  </table>
  <center>
    <p><font color="#000000" size="5" face="Trebuchet MS" class="fondo1"><i><b>INFORME ESTADO AVANCE DE OBRA</b></i></font></p>
  </center>
  <center><p>&nbsp;</p>
  </center>
  <table width="778" border="0">
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
      <td><?php echo $fecha_termino; ?></td>
    </tr>
  </table>
<table width="791" border="1">
      <tr>
        <td width="94"><div align="center"><font size="4" face="Trebuchet MS">Fecha</font></div></td>
		<td width="233"><div align="center"><strong><font face="Trebuchet MS">Equipo Asfalto</font></strong></div></td>
		<td width="194"><div align="center"><strong><font face="Trebuchet MS">Tipo Mezcla</font></strong></div></td>
        <td width="41"><div align="center"><strong><font face="Trebuchet MS">M3</font></strong></div></td>
        <td width="41"><div align="center"><strong><font face="Trebuchet MS">M2 Asfaltados</font></strong></div></td>
        
      </tr>
	  <?php while($row =mysql_fetch_row($result))
		{
		$fecha = $row[0];
		$eq_asfalto = $row[2];
		$mezcla = $row[3];
		$m3 = $row[4];
		$m2_asf = $row[9];
	//	$eq_maq_fre=$row[5];
	//	$m2_fresado=$row[7];
	//	$eq_maq_maf=$row[6];
	//	$m2_maf=$row[8];
			//	$suma=$suma+$monto;
		$suma1=$suma1+$m3;
		$sumita=$sumita+$m2_asf;
	//	$suma2=$suma2+$m2_fresado;
	//	$suma3=$suma3+$m2_maf;
	echo "<tr>";
		//echo"<td>$fecha_compra</td><td>$tipo_compra</td><td>$producto</td><td>$factura</td><td>$fecha_pago</td><td>$monto</td>";
     	echo "<td>".$fecha."</td>";
		echo "<td>".$eq_asfalto."</td>";
		echo "<td>".$mezcla."</td>";
     	echo "<td>".number_format($m3, 0, '', '.')."</td>";	
		echo "<td>".number_format($m2_asf, 0, '', '.')."</td>";		
     //	echo "<td>".$eq_maq_fre."</td>";	
	//	echo "<td>".$m2_fresado."</td>";
	//	echo "<td>".$eq_maq_maf."</td>";
	//	echo "<td>".$m2_maf."</td>";		
	//	echo "<td>".number_format($monto, 0, '', '.')."</td>";
//		echo "<td>".$fletero."</td>";
	//	echo "<td>".$patente."</td>";
		echo "</tr>";	      
         }?>  
               <tr>
        <td><div align="center"></div></td>
        <td></td>
        <td><div align="right"><strong>Totales</strong></div></td>
                   <?php echo "<td>".number_format($suma1, 0, '', '.')."</td>"; ?>
                   <?php echo "<td>".number_format($sumita, 0, '', '.')."</td>"; ?>
                      
      <strong> </strong>      </tr>
    </table>
  
    <br>
    <table width="791" border="1">
      <tr>
      <td width="201"><div align="center"><strong><font face="Trebuchet MS"> Fecha</font></strong></div></td>
        <td width="201"><div align="center"><strong><font face="Trebuchet MS"> Fresado</font></strong></div></td>
        <td width="94"><div align="center"><font face="Trebuchet MS"><strong>M2</strong></font></div></td>
        <td width="197"><div align="center"><strong><font face="Trebuchet MS"> MAF</font></strong></div></td>
        <td width="64"><div align="center"><font face="Trebuchet MS"><strong>M2</strong></font></div></td>
      </tr>
	  <?php while($row =mysql_fetch_row($result2))
		{
		$fecha = $row[0];
//		$eq_asfalto = $row[2];
//		$mezcla = $row[3];
//		$m3 = $row[4];
		$eq_maq_fre=$row[5];
		$m2_fresado=$row[7];
		$eq_maq_maf=$row[6];
		$m2_maf=$row[8];
			//	$suma=$suma+$monto;
//		$suma1=$suma1+$m3;
		$suma2=$suma2+$m2_fresado;
		$suma3=$suma3+$m2_maf;
	echo "<tr>";
		//echo"<td>$fecha_compra</td><td>$tipo_compra</td><td>$producto</td><td>$factura</td><td>$fecha_pago</td><td>$monto</td>";
     	echo "<td>".$fecha."</td>";
	//	echo "<td>".$eq_asfalto."</td>";
	//	echo "<td>".$mezcla."</td>";
    // 	echo "<td>".$m3."</td>";		
     	echo "<td>".$eq_maq_fre."</td>";	
		echo "<td>".number_format($m2_fresado, 0, '', '.')."</td>";
		echo "<td>".$eq_maq_maf."</td>";
		echo "<td>".number_format($m2_maf, 0, '', '.')."</td>";		
	//	echo "<td>".number_format($monto, 0, '', '.')."</td>";
//		echo "<td>".$fletero."</td>";
	//	echo "<td>".$patente."</td>";
		echo "</tr>";	      
         }?>  
               <tr>
        <td><div align="center"></div></td>
   
        
                      <td><div align="right"><strong>M2 Fresado</strong></div></td>
                   <?php echo "<td>".number_format($suma2, 0, '', '.')."</td>"; ?>
               <td><div align="right"><strong>M2 MAF</strong></div></td>
               <div align="right"><?php echo "<td>".number_format($suma3, 0, '', '.')."</td>"; ?></div>
      <strong> </strong>      </tr>
    </table> 
    <br>
    <table width="791" border="1">
      <tr>
        <td width="201"><div align="center"><strong><font face="Trebuchet MS"> Fecha</font></strong></div></td>
        <td width="201"><div align="center"><strong>M2 Imprimaci&oacute;n</strong>        
        </div>
        <div align="center"> </div></td>
        <td width="94"><div align="center"></div></td>
        <td width="197"><div align="center"><strong>M2 Riego de Liga</strong></div></td>
      </tr>
      <?php while($row =mysql_fetch_row($result3))
		{
		$fecha = $row[0];
//		$eq_asfalto = $row[2];
//		$mezcla = $row[3];
//		$m3 = $row[4];
		//$eq_maq_fre=$row[5];
		$imprimacion=$row[11];
//		$eq_maq_maf=$row[6];
		$riego=$row[12];
			//	$suma=$suma+$monto;
//		$suma1=$suma1+$m3;
		$suma22=$suma22+$imprimacion;
		$suma33=$suma33+$riego;
	echo "<tr>";
		//echo"<td>$fecha_compra</td><td>$tipo_compra</td><td>$producto</td><td>$factura</td><td>$fecha_pago</td><td>$monto</td>";
     	echo "<td>".$fecha."</td>";
	//	echo "<td>".$eq_asfalto."</td>";
	//	echo "<td>".$mezcla."</td>";
    // 	echo "<td>".$m3."</td>";		
 //    	echo "<td>".$eq_maq_fre."</td>";	
		echo "<td>".number_format($imprimacion, 0, '', '.')."</td>";
	echo "<td></td>";
		echo "<td>".number_format($riego, 0, '', '.')."</td>";		
	//	echo "<td>".number_format($monto, 0, '', '.')."</td>";
//		echo "<td>".$fletero."</td>";
	//	echo "<td>".$patente."</td>";
		echo "</tr>";	      
         }?>
      <tr>
        <td><div align="center"><strong>Total Imprimaci&oacute;n</strong></div></td>
      
        <?php echo "<td>".number_format($suma22, 0, '', '.')."</td>"; ?>
       
        <td><div align="right"><strong>Total Riego</strong></div></td>
        <div align="right"><?php echo "<td>".number_format($suma33, 0, '', '.')."</td>"; ?></div>
        <strong> </strong> </tr>
    </table>
    <br>
  <p>&nbsp;</p>
  <p>
    <?php 

///////////// Para LAN
//$conexion = mysql_connect("localhost", "usuario", "clave");
//mysql_select_db("avance", $conexion);

///////////// Para WAN
$conexion = mysql_connect("localhost", "rutas_sistemas", "7RJWmWVxDfFo");
mysql_select_db("rutas_sistema_avanceobra", $conexion);



	
	$sql2 = "select * from obra where nombre_obra='$nombre_obra' ";
//echo $sql2;
$result2 = mysql_query($sql2,$conexion) or die(mysql_error());

$sql33 = "select binder, media_serviu, trescuartos_modificado, trescuartos_mop, trescuartos_serviu, baga, bagg, mac, imprimacion, riego from obra where nombre_obra='$nombre_obra' and (binder!=' ' or  media_serviu!=' ' or trescuartos_modificado!=' ' or trescuartos_mop!=' ' or trescuartos_serviu!=' ' or baga!=' ' or bagg!=' ' or mac !=' ' or imprimacion!=' ' or riego!=' ') ";
//echo $sql33;
$result3 = mysql_query($sql33,$conexion) or die(mysql_error());
?>
  </p>
  <p>&nbsp;</p>
  <p class="texto2">&nbsp;</p>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>