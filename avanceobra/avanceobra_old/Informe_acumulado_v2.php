<?php 
//print_r($_POST);
?>
<?php 
	$conexion = mysql_connect("localhost", "usuario", "clave");
	mysql_select_db("avance", $conexion);
	
	$nombre_obra = $_POST["nombre_obra"];
	//echo $clientes;
//	$maquina = $_POST["maquina"];
$fecha = $_POST["fecha"];

$sql = "select * from control_dia where nombre_obra='$nombre_obra' and eq_asfalto!= ' ' and fecha >= date_add(curdate(), interval -7 day) and fecha <= curdate() order by fecha asc ";
	//echo $sql;
$result = mysql_query($sql,$conexion) or die(mysql_error());

$sql2 = "select * from control_dia where nombre_obra='$nombre_obra' and (eq_maq_fre!= ' ' or eq_maq_maf!= ' ') and fecha >= date_add(curdate(), interval -7 day) and fecha <= curdate() order by fecha asc ";
	//echo $sql2;
$result2 = mysql_query($sql2,$conexion) or die(mysql_error());

$sql5 = "select * from control_dia where nombre_obra='$nombre_obra' and eq_asfalto!= ' ' order by fecha asc ";
	//echo $sql;
$result5 = mysql_query($sql5,$conexion) or die(mysql_error());

$sql6 = "select * from control_dia where nombre_obra='$nombre_obra' and (eq_maq_fre!= ' ' or eq_maq_maf!= ' ') order by fecha asc ";
	//echo $sql2;
$result6 = mysql_query($sql6,$conexion) or die(mysql_error());
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
      <td>&nbsp;</td>
      <td><?php echo $fecha; ?></td>
    </tr>
  </table>
    <table width="791" border="1">
      <tr>
        <td width="94"><div align="center"><font size="4" face="Trebuchet MS">Fecha</font></div></td>
		<td width="233"><div align="center"><strong><font face="Trebuchet MS">Equipo Asfalto</font></strong></div></td>
		<td width="194"><div align="center"><strong><font face="Trebuchet MS">Tipo Mezcla</font></strong></div></td>
        <td width="41"><div align="center"><strong><font face="Trebuchet MS">M3</font></strong></div></td>
        
      </tr>
	  <?php while($row =mysql_fetch_row($result))
		{
		$fecha = $row[0];
		$eq_asfalto = $row[2];
		$mezcla = $row[3];
		$m3 = $row[4];
	//	$eq_maq_fre=$row[5];
	//	$m2_fresado=$row[7];
	//	$eq_maq_maf=$row[6];
	//	$m2_maf=$row[8];
			//	$suma=$suma+$monto;
		$suma1=$suma1+$m3;
	//	$suma2=$suma2+$m2_fresado;
	//	$suma3=$suma3+$m2_maf;
	echo "<tr>";
		//echo"<td>$fecha_compra</td><td>$tipo_compra</td><td>$producto</td><td>$factura</td><td>$fecha_pago</td><td>$monto</td>";
     	echo "<td>".$fecha."</td>";
		echo "<td>".$eq_asfalto."</td>";
		echo "<td>".$mezcla."</td>";
     	echo "<td>".number_format($m3, 0, '', '.')."</td>";		
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
        <td><div align="right"><strong>Total M3</strong></div></td>
                   <?php echo "<td>".number_format($suma1, 0, '', '.')."</td>"; ?>;
                      
      <strong> </strong>      </tr>
    </table>
  
    <br>
    <table width="791" border="1">
      <tr>
      <td width="145"><div align="center"><strong><font face="Trebuchet MS"> Fecha</font></strong></div></td>
        <td width="145"><div align="center"><strong><font face="Trebuchet MS"> Fresado</font></strong></div></td>
        <td width="44"><div align="center"><font face="Trebuchet MS"><strong>M2</strong></font></div></td>
         <td width="145"><div align="center"><strong><font face="Trebuchet MS"> MAF</font></strong></div></td>
        <td width="44"><div align="center"><font face="Trebuchet MS"><strong>M2</strong></font></div></td>
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
                   <?php echo "<td>".number_format($suma2, 0, '', '.')."</td>"; ?>;
               <td><div align="right"><strong>M2 MAF</strong></div></td>
               <div align="right"><?php echo "<td>".number_format($suma3, 0, '', '.')."</td>"; ?></div>
      <strong> </strong>      </tr>
    </table> 
  </form>
<?php 
	$conexion = mysql_connect("localhost", "usuario", "clave");
	mysql_select_db("avance", $conexion);
	
	$sql2 = "select * from obra where nombre_obra='$nombre_obra' ";
//echo $sql2;
$result2 = mysql_query($sql2,$conexion) or die(mysql_error());

$sql3 = "select binder, media_serviu, trescuartos_modificado, trescuartos_mop, trescuartos_serviu, baga, bagg, mac from obra where nombre_obra='$nombre_obra' and (binder!=' ' or  media_serviu!=' ' or trescuartos_modificado!=' ' or trescuartos_mop!=' ' or trescuartos_serviu!=' ' or baga!=' ' or bagg!=' ' or mac !=' ') ";
//echo $sql3;
$result3 = mysql_query($sql3,$conexion) or die(mysql_error());
?>
  <p><strong>ESTADO DE AVANCE DE LA OBRA</strong></p>
  <table width="200" border="1">
    <tr>
      <td><div align="center"><strong>Fresado</strong></div></td>
      <td><div align="center"><strong>MAF</strong></div></td>
      <td><div align="center"><strong>Mezcla</strong></div></td>
      <?php while($row =mysql_fetch_row($result3))
		{
//		$m3_mez=0;
		
		$binder = $row[0];
		$media_serviu = $row[1];
		$trescuartos_modificado = $row[2];
		$trescuartos_mop = $row[3];
		$trescuartos_serviu = $row[4];
		$baga = $row[5];
		$bagg = $row[6];
		$mac = $row[7];
		
// Calculo de % mezclas....aqui sumare las mezclas
$m3_mez = ($binder+$media_serviu+$trescuartos_modificado+$trescuartos_mop+$trescuartos_serviu+$baga+$bagg+$mac);
	//	echo $m3_mez;
		$total_mez=(($suma1*100)/$m3_mez);
		
	echo "</tr>";	      
         }?>  
   
    <?php while($row =mysql_fetch_row($result2))
		{
		$m_fresado = $row[5];
	//	echo $m_fresado;
		$m_maf = $row[6];
		
//		echo $m_maf;
		$total_fresado=(($suma2*100)/$m_fresado);
		//echo $total_fresado;
		$total_maf=(($suma3*100)/$m_maf);
	//	$suma2=$suma2+$m2_fresado;
	
// Calculo de % mezclas....aqui sumare las mezclas

//		$total_mez=(($suma1*100)/$m_maf);
		
	echo "</tr>";	      
         }?>  
    </tr>
    <tr>
       <?php echo "<td>".number_format($total_fresado, 0, '', '.')." %</td>"; ?>
       <?php echo "<td>".number_format($total_maf, 0, '', '.')." %</td>"; ?>
        <?php echo "<td>".number_format($total_mez, 0, '', '.')." %</td>"; ?>    </tr>
  </table>
  <p class="texto2">&nbsp;</p>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>