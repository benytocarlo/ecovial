<?php
	include("config.php");
	
	$variables  = $_POST['formulario'];
	$array = explode('&',$variables);

	for ($i=0;$i <= count($array);$i++){
	  $var = explode('=',$array[$i]); 
	  $value = urldecode($var[1]);
	  $value = str_replace("\"",'',$value);
	  $value = str_replace("'",'',$value);
	  if (!empty($var[0])){
	    $asignacion = "\$".$var[0]."='".$value."';";
	    @eval($asignacion);
	  }
	}
	$fecha = date("Y-m-d");
	if ($action == "equipo") {
		
	    $sql2="select * from control_equipos order by id desc limit 1";
		$result2 = mysql_query($sql2); 
		while($row = mysql_fetch_row($result2))
		{
			$report=$row[2];
		}
		$contadorreport = $report + 1;
		$que = "INSERT INTO control_equipos (fecha, report, operador, equipo, obra, horas, cliente, h_termino) ";
		$que.= "VALUES ('".$fecha."', '".$contadorreport."', '".$operador."', '".$equipo."', '".$obra."', '".$totalhoras."', '".$XXXXcliente."', '".$horatermino."') ";
		$res = mysql_query($que, $conexion) or die(mysql_error());
	}
	
	if ($action == "petroleo") {
	    $sql2="select * from petroleo_ecomaq order by auto desc limit 1";
		$result2 = mysql_query($sql2); 
		while($row = mysql_fetch_row($result2))
		{
			$report=$row[2];
		}
		$contadorreport = $report + 1;
		$que = "INSERT INTO petroleo_ecomaq (fecha, report, cliente, opecho, eqcam, obra, litros, horo, proveedor, precio) ";
		$que.= "VALUES ('".$fecha."', '".$contadorreport."', '".$XXXCLIENTE."', '".$operador."', '".$patente."', '".$obra."', '".$litros."', '".$horatermino."', '".$XXXPROVEEDOR."', '".$XXXPRECIO."') ";
		$res = mysql_query($que, $conexion) or die(mysql_error());
	}
	
?>