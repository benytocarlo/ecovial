<?php 
//print_r($_POST);
?>
<?php 
	$conexion = mysql_connect("localhost", "usuario", "clave");
	mysql_select_db("avance", $conexion);
	
//	$nombre_obra = $_POST["nombre_obra"];
	//echo $clientes;
//	$maquina = $_POST["maquina"];
$fecha = $_POST["fecha"];

$sql = "select * from control_dia where eq_asfalto!= ' ' group by nombre_obra asc ";
//	echo $sql;
$result = mysql_query($sql,$conexion) or die(mysql_error());

$sql2 = "select * from control_dia where eq_maq_fre!= ' ' or eq_maq_maf!= ' ' group by nombre_obra asc ";
//	echo $sql2;
$result2 = mysql_query($sql2,$conexion) or die(mysql_error());

?>
<html>

<body>
<div align="center" > 
  <p><font color="#BABBD8" class="fondo1"><i><b>
    </b></i></font>
  <table width="801" border="0">
    <tr>
      <td width="469" height="90"><p><font face="Trebuchet MS"><strong>Constructora RUTAS SpA<br>
        RUT: 76.495.749-0
      </strong></font></p></td>
      <td width="367"><div align="right"><img src="rutas_small.jpg" width="189" height="84"></div></td>
    </tr>
  </table>
  <center>
    <p><font color="#000000" size="5" face="Trebuchet MS" class="fondo1"><i><b>INFORME ESTADO AVANCE DE OBRA</b></i></font></p>
  </center>
  <center><p>&nbsp;</p>
  </center>
  <table width="778" border="0">

    <tr>
      <td width="130">Fecha:</td>
      <td width="695"><?php echo $fecha; ?></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <form name="form1" method="post" action="informe_proveedores2.php" target="_blank">
   
   
	  <?php while($row =mysql_fetch_row($result))
	/////////////////////// MEZCLAS //////////////////////
		{
		$fecha = $row[0];
		$eq_asfalto = $row[2];
		$mezcla = $row[3];
		$m3 = $row[4];
		$suma1=$suma1+$m3;
	 "<tr>";
	
      "<td>".$fecha."</td>";
		 "<td>".$eq_asfalto."</td>";
		 "<td>".$mezcla."</td>";
     	 "<td>".number_format($m3, 0, '', '.')."</td>";		
     }?>  
    
	<?php  "<td>".number_format($suma1, 0, '', '.')."</td>"?><br>
    
	  <?php while($row =mysql_fetch_row($result2))
	  	/////////////////////// FRESADO Y MAF //////////////////////
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
	 "<tr>";
		//echo"<td>$fecha_compra</td><td>$tipo_compra</td><td>$producto</td><td>$factura</td><td>$fecha_pago</td><td>$monto</td>";
     	 "<td>".$fecha."</td>";
	//	echo "<td>".$eq_asfalto."</td>";
	//	echo "<td>".$mezcla."</td>";
    // 	echo "<td>".$m3."</td>";		
     	 "<td>".$eq_maq_fre."</td>";	
		 "<td>".number_format($m2_fresado, 0, '', '.')."</td>";
		 "<td>".$eq_maq_maf."</td>";
		 "<td>".number_format($m2_maf, 0, '', '.')."</td>";		
	//	echo "<td>".number_format($monto, 0, '', '.')."</td>";
//		echo "<td>".$fletero."</td>";
	//	echo "<td>".$patente."</td>";
		 "</tr>";	      
         }?>  
           
   
        
                     
                   <?php  "<td>".number_format($suma2, 0, '', '.')."</td>"; ?>;
          
  <?php  "<td>".number_format($suma3, 0, '', '.')."</td>"; ?>

  </form>
<?php 
	$conexion = mysql_connect("localhost", "usuario", "clave");
	mysql_select_db("avance", $conexion);
	
	$sql3 = "select * from obra ";
//echo $sql3;
$result3 = mysql_query($sql3,$conexion) or die(mysql_error());

$sql4 = "select * from obra where binder!=' ' or  media_serviu!=' ' or trescuartos_modificado!=' ' or trescuartos_mop!=' ' or trescuartos_serviu!=' ' or baga!=' ' or bagg!=' ' or mac !=' ' group by nombre_obra";
echo $sql4;
$result4 = mysql_query($sql4,$conexion) or die(mysql_error());
?>
  <p><strong>ESTADO DE AVANCE DE LA OBRA</strong></p>
  <table width="525" border="1">
    <tr>
      <td><div align="center"><strong>Obra</strong></div></td>
      <td><div align="center"><strong>Fresado</strong></div></td>
      <td><div align="center"><strong>MAF</strong></div></td>
      <td><div align="center"><strong>Mezcla</strong></div></td>
      <?php while($row =mysql_fetch_row($result3))
		{
//		$m3_mez=0;
		
		$nombre_obra = $row[0];
		$binder = $row[7];
		$media_serviu = $row[8];
		$trescuartos_modificado = $row[9];
		$trescuartos_mop = $row[10];
		$trescuartos_serviu = $row[11];
		$baga = $row[12];
		$bagg = $row[13];
		$mac = $row[14];
		
// Calculo de % mezclas....aqui sumare las mezclas
$m3_mez = ($binder+$media_serviu+$trescuartos_modificado+$trescuartos_mop+$trescuartos_serviu+$baga+$bagg+$mac);
	//	echo $m3_mez;
		$total_mez=(($suma1*100)/$m3_mez);
		
	echo "</tr>";	      
         }?>  
   
    <?php while($row =mysql_fetch_row($result4))
		{
		$m_fresado = $row[5];
		$m_maf = $row[6];
		$total_fresado=(($suma2*100)/$m_fresado);
		$total_maf=(($suma3*100)/$m_maf);
	
	echo "</tr>";	
	?>
	  <tr>
	   				<?php echo "<td>".$nombre_obra."</td>";  ?>
       				<?php echo "<td>".number_format($total_fresado, 0, '', '.')." %</td>"; ?>
       				<?php echo "<td>".number_format($total_maf, 0, '', '.')." %</td>"; ?>
        			<?php echo "<td>".number_format($total_mez, 0, '', '.')." %</td>"; ?>       </tr>
    <?php     }?>  
    </tr>
    <tr>
       <?php // echo "<td>".$nombre_obra."</td>";  ?>
       <?php //echo "<td>".number_format($total_fresado, 0, '', '.')." %</td>"; ?>
       <?php //echo "<td>".number_format($total_maf, 0, '', '.')." %</td>"; ?>
        <?php //echo "<td>".number_format($total_mez, 0, '', '.')." %</td>"; ?>    </tr>
  </table>
  <p class="texto2">&nbsp;</p>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>