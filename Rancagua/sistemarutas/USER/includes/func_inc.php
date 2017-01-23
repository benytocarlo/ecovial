<?php
//incluímos la clase ajax
require ('includes/xajax/xajax.inc.php');
//require("phpmailer/class.phpmailer.php");
///////////////////////////////////////////////////////////////////////////////////////////////
function aplicar_descuento($formulario)
  {
	  include("conexion.php"); 
    $respuesta = new xajaxResponse();
	$total_neto = $formulario["total_neto"];
	$iva = $formulario["iva"];
	$total_bruto = $formulario["total_bruto"];
	$num_orden = $formulario["num_orden"];
	
	$descuento = $formulario["descuento"];
	
	$sql2="Select * from orden_compra where id=".$num_orden;

		$result = mysql_query($sql2); 
	    while($row = mysql_fetch_row($result))
		{
		 $extra_iva=$row[11];
		}
		if( $extra_iva=="Ord Compra SIN IVA")
		{
			$resta_descuento=$total_neto*$descuento/100;
			$restafinal=$total_neto-$resta_descuento;
			$restatruncado= number_format($restafinal, 0, ".", "");
			$iva=0;
			$ivatruncado=0;
			$totalfinal=$restatruncado;
			$totaltruncado= number_format($totalfinal, 0, ".", "");
			
			$respuesta->addAssign("total_descuento","value",$restatruncado);
			$respuesta->addAssign("iva","value",$ivatruncado);
			$respuesta->addAssign("total_bruto","value",$totaltruncado);
		} else {
			$resta_descuento=$total_neto*$descuento/100;
			$restafinal=$total_neto-$resta_descuento;
			$restatruncado= number_format($restafinal, 0, ".", "");
			$iva=$restatruncado*0.19;
			$ivatruncado= number_format($iva, 0, ".", "");
			$totalfinal=$restatruncado+$iva;
			$totaltruncado= number_format($totalfinal, 0, ".", "");
			
			$respuesta->addAssign("total_descuento","value",$restatruncado);
			$respuesta->addAssign("iva","value",$ivatruncado);
			$respuesta->addAssign("total_bruto","value",$totaltruncado);
		}
		
		
	
	  

    return $respuesta;
  }
 /////////////////////////////////////////////////////////////////////////////////////////////// 
 ///////////////////////////////////////////////////////////////////////////////////////////////
function aplicar_descuento2($formulario)
  {
	  include("conexion.php"); 
    $respuesta = new xajaxResponse();
	$total_neto = $formulario["total_neto"];
	$iva = $formulario["iva"];
	$total_bruto = $formulario["total_bruto"];
	$num_orden = $formulario["num_orden"];
	$descuento = $formulario["descuento"];
			$resta_descuento=$total_neto*$descuento/100;
			$restafinal=$total_neto-$resta_descuento;
			$restatruncado= number_format($restafinal, 0, ".", "");
			$iva=$restatruncado*0.19;
			$ivatruncado= number_format($iva, 0, ".", "");
			$totalfinal=$restatruncado+$iva;
			$totaltruncado= number_format($totalfinal, 0, ".", "");
			
			$respuesta->addAssign("total_descuento","value",$restatruncado);
			$respuesta->addAssign("iva","value",$ivatruncado);
			$respuesta->addAssign("total_bruto","value",$totaltruncado);
		   return $respuesta;
  }
 /////////////////////////////////////////////////////////////////////////////////////////////// 
///////////////////////////////////////////////////////////////////////////////////////////////
function lista_productos($formulario)
  {

	  include("conexion.php"); 
    $respuesta = new xajaxResponse();
	$n_presupuesto = $formulario["n_presupuesto"];
	$cantidad = $formulario["cantidad"];
	$valor_unitario = $formulario["valor_unitario"];
	$tipo_mezcla = $formulario["tipo_mezcla"];
	$id_mezcla = $formulario["id_mezcla"];
	$preciototal=$valor_unitario*$cantidad;
	$sql="insert into detalle_presupuesto(id_presupuesto,id_mezcla,cantidad,precio_unitario,precio_total) values ('$n_presupuesto','$id_mezcla','$cantidad','$valor_unitario','$preciototal')";
	$result = mysql_query($sql);
	$sql2 ="SELECT me.tipo, deta.id_mezcla, deta.precio_unitario,deta.cantidad,deta.precio_total from mezclas me, presupuesto pre, detalle_presupuesto deta where pre.id=".$n_presupuesto." and pre.id=deta.id_presupuesto and deta.id_mezcla=me.id";
	$result2 = mysql_query($sql2); 

		$contenido="<tr><th width='127'>Tipo Producto</th> <th width='154'>Nombre Producto</th> <th width='122'>Valor Unitario</th> <th width='87'>Cantidad</th> <th width='94'>Total</th> </tr> ";
		while($row = mysql_fetch_row($result2))
		{ 
		$contenido.=" <tr>";
          $contenido.="<td height='58'>".$row[0]." </td>";
            $contenido.=" <td>".$row[1]."</td>";
           $contenido.="  <td> ".$row[2]."</td>";
            $contenido.=" <td>".$row[3]."</td>";
            $contenido.=" <td>".$row[4]."</td>";
         $contenido.="  </tr>";
          } 
    $respuesta->addAssign("listado_productos","innerHTML",$contenido);
    return $respuesta;
  }
 /////////////////////////////////////////////////////////////////////////////////////////////// 
 ///////////////////////////////////////////////////////////////////////////////////////////////
function lista_orden($formulario)
  {
	 include("conexion.php"); 
    $respuesta = new xajaxResponse();
	$num_orden = $formulario["num_orden"];
	$cantidad = $formulario["cantidad"];
	$valor_unitario = $formulario["valor_unitario"];
	$unidad = $formulario["unidad"];
	$producto = $formulario["producto"];
	$tipo_compra = $formulario["tipo_compra"];
	$centro_costos = $formulario["centrocostos"];
	
	$preciototal=$valor_unitario*$cantidad;
	
	$total=0;
	$sql2 ="SELECT  deta.cantidad,deta.unidad,deta.descripcion,deta.precio_unitario,deta.total from orden_compra pre, detalle_orden_compra deta where pre.id=".$num_orden." and pre.id=deta.id_orden_compra ";
	$result2 = mysql_query($sql2); 
		$contenido="<tr><th width='296'>Nombre Producto</th> <th width='87'>Cantidad</th> <th width='78'>Valor Unitario</th> <th width='73'>Unidad</th> <th width='56'>Total</th> <th width='80'>Eliminar</th> </tr> ";
		while($row = mysql_fetch_row($result2))
		{ 
           $total=$total+ $total=$row[4];
          }     
		
	$sql="insert into detalle_orden_compra(id_orden_compra,cantidad,unidad,descripcion,precio_unitario,total,tipo_compra,centro_costos) values ('$num_orden','$cantidad','$unidad','$producto','$valor_unitario','$preciototal','$tipo_compra','$centro_costos')";
	$result = mysql_query($sql);
	$sql3 ="SELECT  * from orden_compra pre, detalle_orden_compra deta where pre.id=".$num_orden." and pre.id=deta.id_orden_compra ";
	$result2 = mysql_query($sql3); 
	$contenido="<tr><th width='34'>ID</th> <th width='296'>Nombre Producto</th> <th width='87'>Cantidad</th> <th width='78'>Valor Unitario</th> <th width='73'>Unidad</th> <th width='56'>Total</th> <th width='80'>Eliminar</th> </tr> ";
		while($row = mysql_fetch_row($result2))
		{ 
		$contenido.=" <tr>";
		$contenido.="<td >".$row[14]." </td>";
          $contenido.="<td height='58'>".$row[18]." </td>";
            $contenido.=" <td>".$row[16]."</td>";
           $contenido.="  <td> ".$row[19]."</td>";
            $contenido.=" <td>".$row[17]."</td>";
			$total_final=$row[16]*$row[19];
			$contenido.=" <td>".$total_final."</td>";
            $contenido.=" <td><input type='button' onclick='xajax_elim_product_orden(document.form.num_orden.value,".$row[14].")' value='Eliminar' class='formbutton2' ></td>";
         $contenido.="  </tr>";
          }     
    $respuesta->addAssign("listado_productos","innerHTML",$contenido);

    return $respuesta;
  }
 ///////////////////////////////////////////////////////////////////////////////////////////////
function lista_guia($formulario)
  {
	 include("conexion.php"); 
    $respuesta = new xajaxResponse();
	$peso = $formulario["peso"];
	$tara = $formulario["tara"];
	$cantidad = $peso - $tara;
	if($peso=="" || $tara =="" )
	{
		$respuesta->addScript("alert('Datos Vacios en TARA / PESO BRUTO');");
		 return $respuesta;
	}
	$n_guia = $formulario["n_guia"];
	
	$valor_unitario = $formulario["valor_mezcla"];
	$producto = $formulario["tipo_mezcla"];
	$preciototal=$valor_unitario*$cantidad;
	
	$total=0;
	$sql="insert into detalle_pesaje(guia,producto,litros,valor_unitario) values ('$n_guia','$producto','$cantidad','$valor_unitario')";
	$result = mysql_query($sql);

	
	$sql2 ="SELECT * from detalle_pesaje dp, mezclas ml where dp.guia=".$n_guia." and ml.id=dp.producto ";
	$result2 = mysql_query($sql2); 
		$contenido="<tr><th width='34'>ID</th> <th width='275'>Nombre Producto</th> <th width='66'>Cantidad</th> <th width='120'>Valor Unitario</th> <th width='97'>Total</th>  <th width='80'>Eliminar</th> </tr> ";
		while($row = mysql_fetch_row($result2))
		{ 
		$contenido.="<tr>";
		$contenido.="<td >".$row[4]."</td>";
          $contenido.="<td >".$row[7]."</td>";
            $contenido.="<td>".$row[2]."</td>";
           $contenido.="<td> ".$row[3]."</td>";
			$total_final=$row[2]*$row[3];
			$contenido.="<td>".$total_final."</td>";
            $contenido.="<td><input type='button' onclick='xajax_elim_product_guia(document.form.n_guia.value,".$row[4].")' value='Eliminar' class='formbutton2' >";
         $contenido.="</tr>";
          }     
    $respuesta->addAssign("listado_productos","innerHTML",$contenido);

    return $respuesta;
  }
 /////////////////////////////////////////////////////////////////////////////////////////////// 
  ///////////////////////////////////////////////////////////////////////////////////////////////
function lista_guia2($formulario)
  {
	 include("conexion.php"); 
    $respuesta = new xajaxResponse();
	$cantidad = $formulario["n_litros"];
	$tipo_mezcla = $formulario["tipo_mezcla"];
	if($cantidad =="" || $tipo_mezcla =="" )
	{
		$respuesta->addScript("alert('Datos Vacios en N Litros / Producto Emuslion');");
		 return $respuesta;
	}
	$n_guia = $formulario["n_guia"];
	$valor_unitario = $formulario["valor_mezcla"];
	$producto = $formulario["tipo_mezcla"];
	$preciototal=$valor_unitario*$cantidad;
	
	$total=0;
	$sql="insert into detalle_pesaje(guia,producto,litros,valor_unitario) values ('$n_guia','$producto','$cantidad','$valor_unitario')";
	$result = mysql_query($sql);

	
	$sql2 ="SELECT * from detalle_pesaje dp, mezclas ml where dp.guia=".$n_guia." and ml.id=dp.producto ";
	$result2 = mysql_query($sql2); 
		$contenido="<tr><th width='34'>ID</th> <th width='275'>Nombre Producto</th> <th width='66'>Cantidad</th> <th width='120'>Valor Unitario</th> <th width='97'>Total</th>  <th width='80'>Eliminar</th> </tr> ";
		while($row = mysql_fetch_row($result2))
		{ 
		$contenido.="<tr>";
		$contenido.="<td >".$row[4]."</td>";
          $contenido.="<td >".$row[7]."</td>";
            $contenido.="<td>".$row[2]."</td>";
           $contenido.="<td> ".$row[3]."</td>";
			$total_final=$row[2]*$row[3];
			$contenido.="<td>".$total_final."</td>";
            $contenido.="<td><input type='button' onclick='xajax_elim_product_guia(document.form.n_guia.value,".$row[4].")' value='Eliminar' class='formbutton2' >";
         $contenido.="</tr>";
          }     
    $respuesta->addAssign("listado_productos","innerHTML",$contenido);

    return $respuesta;
  }
 /////////////////////////////////////////////////////////////////////////////////////////////// 
 
 ///////////////////////////////////////////////////////////////////////////////////////////////
function lista_traslado($formulario)
  {
	 include("conexion.php"); 
    $respuesta = new xajaxResponse();
	$descripcion = $formulario["descripcion"];
	$cantidad = $formulario["cantidad"];
	$n_guia = $formulario["n_guia"];
	
	$sqlsum ="SELECT COUNT(*) as count from detalle_traslado where n_guia='".$n_guia."'" ;
    $resultsum = mysql_query($sqlsum); 
$contados = mysql_result($resultsum,0,'COUNT');
if($contados<=9)
	{
		$sql="insert into detalle_traslado(n_guia,descripcion,cantidad) values ('$n_guia','$descripcion','$cantidad')";
		$result = mysql_query($sql);
	}else
	{
		$respuesta->addScript("alert('Solo puede agregar 10 productos para el traslado');");
	}		
		$sql2 ="select * from detalle_traslado where n_guia='".$n_guia."'";
		$result2 = mysql_query($sql2); 
			$contenido="<tr><th width='34'>ID</th> <th width='443'>Nombre Producto</th> <th width='123'>Cantidad</th> <th width='80'>Eliminar</th> </tr> ";
		
			while($row = mysql_fetch_row($result2))
			{ 
			
			$contenido.="<tr>";
			$contenido.="<td>".$row[0]."</td>";
				$contenido.="<td>".$row[2]."</td>";
			   $contenido.="<td> ".$row[3]."</td>";
				$contenido.="<td><input type='button' onclick='xajax_elim_product_guia_traslado(document.form.n_guia.value,".$row[0].")' value='Eliminar' class='formbutton2' >";
			 $contenido.="</tr>";
			  }     
		$respuesta->addAssign("listado_productos","innerHTML",$contenido);
    return $respuesta;
  }
 /////////////////////////////////////////////////////////////////////////////////////////////// 

///////////////////////////////////////////////////////////////////////////////////////////////
function cargar_marca($tipo)
  {
    $db	=& JFactory::getDBO();
    $respuesta = new xajaxResponse();
    $contenido = '<select id="marca" name="marca" onchange="xajax_cargar_concesionario(document.form2.marca.value)">';
    //$contenido = '<select id="marca" name="marca" onchange="var marca=document.getElementById('marca').selectedIndex; if(marca=="0") { xajax_cargar_concesionario(document.form2.marca.value);} return false;">';
	$query="Select * from jos_marca where tipo=".$tipo." order by nombre" ;
    $db->setQuery($query);
    $comunas = $db->loadObjectList();
        $contenido.="<option value='0'>Selecciona la Marca</option>";
    foreach ($comunas as $comuna)
        {
          $contenido .= '<option value="'.$comuna->id.'">'.$comuna->nombre.'</option>';

        }
    $contenido .='</select>';
    
    $respuesta->addAssign("marca_id","innerHTML",$contenido);
    //$respuesta->addScript("document.getElementById('trcomuna').style.visibility='visible';");    
    return $respuesta;
  }
 /////////////////////////////////////////////////////////////////////////////////////////////// 
  ///////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
function mezcla($mezcla_id)
  {
    include("conexion.php"); 
    $respuesta = new xajaxResponse();
    $query="Select * from mezclas where tipo='".$mezcla_id."'";
	$result = mysql_query($query); 
	$contenido="<strong>Producto<br /><select name='mezclita' id='mezclita'  onchange='xajax_idmezcla(document.form.mezclita.options[document.form.mezclita.selectedIndex].text)'>";
		$contenido.='<option>Selleciona una Opcion</option>';
		while($row = mysql_fetch_row($result))
		{ 
		$contenido.= '<option value="'.$row[3].'">'.$row[2].'</option>';
		 }
		$contenido.="</select></strong>";
	$respuesta->addAssign("mezcla_name","innerHTML",$contenido);  
    return $respuesta;
  }
///////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
function mezcla2($mezcla_id)
  {
    include("conexion.php"); 
    $respuesta = new xajaxResponse();
    $query="Select * from mezclas where tipo='".$mezcla_id."'";
	$result = mysql_query($query); 
	$contenido="<strong>Producto<br /><select name='mezclita' id='mezclita'  onchange='xajax_idmezcla(document.form.mezclita.options[document.form.mezclita.selectedIndex].text)'>";
		$contenido.='<option>Selleciona una Opcion</option>';
		while($row = mysql_fetch_row($result))
		{ 
		$contenido.= '<option value="'.$row[0].'">'.$row[2].'</option>';
		 }
		$contenido.="</select></strong>";
	$respuesta->addAssign("mezcla_name","innerHTML",$contenido);  
    return $respuesta;
  }
///////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
function idmezcla($mezclita)
  {
    include("conexion.php"); 
    $respuesta = new xajaxResponse();
	$query="Select * from mezclas where nombre='".$mezclita."'";
	$result = mysql_query($query);
	while($row = mysql_fetch_row($result))
		{ 
		$mezclita2= $row[0];
		 }
	
	
	$respuesta->addAssign("id_mezcla","value",$mezclita2);  
    return $respuesta;
  }
///////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
function buscarpesaje($n_pesaje)
  {
    include("conexcion_sql.php");
    $respuesta = new xajaxResponse();
	$sql="select * from PESAJEEJES where PEjNro=".$n_pesaje;
    $rs=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
    while (odbc_fetch_row($rs))
     {
	  $peso=odbc_result($rs,"PEjPesTot");
	  }
	  $html="<strong>Peso Bruto</strong><input type='text' readonly='readonly' size='10' id='peso' value='".$peso."' name='peso'>";
	$respuesta->addAssign("peso_brutoid","innerHTML",$html);
    return $respuesta;}
///////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
function buscarpesaje2($n_pesaje)
  {
    include("conexcion_sql.php");
    $respuesta = new xajaxResponse();
	$sql="select * from PESAJEEJES where PEjNro=".$n_pesaje;
    $rs=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));
    while (odbc_fetch_row($rs))
     {
	  $peso=odbc_result($rs,"PEjPesTot");
	  }
		$respuesta->addAssign("peso","value",$peso);
    return $respuesta;}
///////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
function tara($patente)
  {
    include("conexion.php"); 
    $respuesta = new xajaxResponse();
    $query="Select * from camiones where id=".$patente;
	$result = mysql_query($query); 
		while($row = mysql_fetch_row($result))
		{ 
		$tara2= $row[3];
		 }
	$respuesta->addAssign("tara","value",$tara2);  
    return $respuesta;
  }
///////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
function nueva_patente()
  {
	$respuesta = new xajaxResponse();
	$respuesta->addScript("document.getElementById('form_pesaje').style.display='none';");
	$respuesta->addScript("document.getElementById('form_patente').style.display='block';");
	//$respuesta->addAssign("mezcla_name","innerHTML",$contenido);  
    return $respuesta;
  }
///////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
function nuevo_cliente($formulario)
  {
	$respuesta = new xajaxResponse();
	 include("conexion.php"); 
	$nombre=$formulario["cliente_nombre"];
	$rut=$formulario["cliente_rut"];
	$direccion=$formulario["cliente_direccion"];
	$comuna=$formulario["cliente_comuna"];
	$ciudad=$formulario["cliente_ciudad"];
	$fono=$formulario["cliente_fono"];
	$email=$formulario["cliente_email"];
	$sql="insert into cliente(nombre,calle,comuna,ciudad,telefono,rut,email) values ('$nombre','$direccion','$comuna','$ciudad','$fono','$rut','$email')";
	$result = mysql_query($sql);
	$respuesta->addScript("document.getElementById('form_pesaje').style.display='none';");
	$respuesta->addScript("document.getElementById('form_cliente').style.display='block';");
	//$respuesta->addAssign("mezcla_name","innerHTML",$contenido);  
    return $respuesta;
  }
///////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
function nuevo_chofer()
  {
	$respuesta = new xajaxResponse();
	$respuesta->addScript("document.getElementById('form_pesaje').style.display='none';");
	$respuesta->addScript("document.getElementById('form_chofer').style.display='block';");
	//$respuesta->addAssign("mezcla_name","innerHTML",$contenido);  
    return $respuesta;
  }
///////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
function nuevo_transportista()
  {
	$respuesta = new xajaxResponse();
	$respuesta->addScript("document.getElementById('form_pesaje').style.display='none';");
	$respuesta->addScript("document.getElementById('form_transportista').style.display='block';");
	//$respuesta->addAssign("mezcla_name","innerHTML",$contenido);  
    return $respuesta;
  }
///////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
function nuevo_obra()
  {
	$respuesta = new xajaxResponse();
	$respuesta->addScript("document.getElementById('form_pesaje').style.display='none';");
	$respuesta->addScript("document.getElementById('form_obra').style.display='block';");
	//$respuesta->addAssign("mezcla_name","innerHTML",$contenido);  
    return $respuesta;
  }
///////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
function registro_chofer()
  {
	$respuesta = new xajaxResponse();
	//////////////////////////actualizar select chofer////// id=select_chofer///////////////////////////////
	$respuesta->addScript("document.getElementById('form_pesaje').style.display='block';");
	$respuesta->addScript("document.getElementById('form_chofer').style.display='none';");
	//$respuesta->addAssign("mezcla_name","innerHTML",$contenido);  
    return $respuesta;
  }
///////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
function registro_camion()
  {
	$respuesta = new xajaxResponse();
	
	//////////////////////////actualizar select camion///////////// id=select_patente////////////////////////
	$respuesta->addScript("document.getElementById('form_pesaje').style.display='block';");
	$respuesta->addScript("document.getElementById('form_patente').style.display='none';");
	//$respuesta->addAssign("mezcla_name","innerHTML",$contenido);  
    return $respuesta;
  }
///////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
function registro_transportista()
  {
	$respuesta = new xajaxResponse();
	
	//////////////////////////actualizar select transportista///////////// id=select_transportista////////////////////////
	$respuesta->addScript("document.getElementById('form_pesaje').style.display='block';");
	$respuesta->addScript("document.getElementById('form_transportista').style.display='none';");
	//$respuesta->addAssign("mezcla_name","innerHTML",$contenido);  
    return $respuesta;
  }
///////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
function registro_obra()
  {
	$respuesta = new xajaxResponse();
	
	//////////////////////////actualizar select transportista///////////// id=select_transportista////////////////////////
	$respuesta->addScript("document.getElementById('form_pesaje').style.display='block';");
	$respuesta->addScript("document.getElementById('form_obra').style.display='none';");
	//$respuesta->addAssign("mezcla_name","innerHTML",$contenido);  
    return $respuesta;
  }
///////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
function registro_cliente()
  {
	$respuesta = new xajaxResponse();
	
	//////////////////////////actualizar select transportista///////////// id=select_transportista////////////////////////
	$respuesta->addScript("document.getElementById('form_pesaje').style.display='block';");
	$respuesta->addScript("document.getElementById('form_cliente').style.display='none';");
	//$respuesta->addAssign("mezcla_name","innerHTML",$contenido);  
    return $respuesta;
  }
///////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
function calcularm3($orden_compra,$factor_mezcla,$pesobruto,$tara,$orde_compra)
  {
    $respuesta = new xajaxResponse();
	 include("conexion.php"); 

    if($orden_compra=="Eliga una Opcion")
	{
		$respuesta->addScript("alert('Favor Eliga una orde de compra!');");
	}else{
		$pesototal=$pesobruto-$tara;
		$conversion=$pesototal/$factor_mezcla;
		$datotruncado= number_format($conversion, 2, ",", "");  
		$decimales = explode(",",$datotruncado);
		$num_entero=$decimales[0];
		$num_decimal=$decimales[1];
		if($num_decimal>=00 && $num_decimal<=24){ $num_decimal="00";} 
		if($num_decimal>=25 && $num_decimal<=74){ $num_decimal="50";} 
		if($num_decimal>=75 && $num_decimal<=99){ $num_decimal="00"; $num_entero=$num_entero+1;} 
		$resultado_final=$num_entero.".".$num_decimal;
		
		$query="Select * from ingreso_orden where orden='".$orde_compra."'";
		$result = mysql_query($query); 
			while($row = mysql_fetch_row($result))
			{ 
			$cantidad = $row[1];
			 }
			// print($cantidad);
		//die();
		$respuesta->addAssign("m3","value",$resultado_final); 
		/*if($resultado_final>$cantidad){
			$respuesta->addAssign("m3","value",$resultado_final);  
			$respuesta->addScript("document.getElementById('form_alerta').style.display='block';");
			$respuesta->addScript("document.getElementById('form_pesaje').style.display='none';");
		}
		else{
		$respuesta->addAssign("m3","value",$resultado_final);  
		}*/
	}
    return $respuesta;
  }
///////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
function totales($unitaorio,$m3)
  {
	$respuesta = new xajaxResponse();
	$total=$unitaorio*$m3;
	$iva=$total*0.19;
	$totalfinal=$total+$iva;
	$datotruncado= number_format($totalfinal, 0, ".", "");  
	$respuesta->addAssign("totalunitario","innerHTML",$total); 
	$respuesta->addAssign("totalunitario2","innerHTML",$total);
	$respuesta->addAssign("totalunitario3","innerHTML",$total);
	$respuesta->addAssign("iva","innerHTML",$iva);
	$respuesta->addAssign("totalfinal","innerHTML",$datotruncado);	
    return $respuesta;
  }
///////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
function tipoventa($tipoproducto)
  {
	$respuesta = new xajaxResponse();
	if($tipoproducto=="EM")
	{
		$respuesta->addScript("document.getElementById('ocultotipo1').style.display='block';");	
	}else{
		$respuesta->addScript("document.getElementById('ocultotipo1').style.display='none';");	
		
	}
	return $respuesta;
  }
///////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
function observacion($nom_autoriza,$m3_autiriza,$observacion,$n_orden)
  {
	$respuesta = new xajaxResponse();
	$sql="insert into observacion_guia(n_guia,nom_autoriza,m3_autoriza,observacion) values ('".$n_orden."','".$nom_autoriza."','".$m3_autiriza."','".$observacion."')";
	$result = mysql_query($sql);
	$respuesta->addScript("document.getElementById('form_alerta').style.display='none';");
	$respuesta->addScript("document.getElementById('form_pesaje').style.display='block';");
    return $respuesta;
  }
/////////////////////////////////////////////////////////////////////////////////////////////// 
function elim_product_guia($guia,$id)
  {
   include("conexion.php"); 
	$respuesta = new xajaxResponse();
	$sql="delete  from detalle_pesaje where auto='".$id."'";
	$result = mysql_query($sql);
	$sql2 ="SELECT * from detalle_pesaje dp, mezclas ml where dp.guia=".$guia." and ml.id=dp.producto ";
	$result2 = mysql_query($sql2); 
		$contenido="<tr><th width='34'>ID</th> <th width='275'>Nombre Producto</th> <th width='66'>Cantidad</th> <th width='120'>Valor Unitario</th> <th width='97'>Total</th>  <th width='80'>Eliminar</th> </tr> ";
		while($row = mysql_fetch_row($result2))
		{ 
		$contenido.="<tr>";
		$contenido.="<td >".$row[4]."</td>";
          $contenido.="<td >".$row[7]."</td>";
            $contenido.="<td>".$row[2]."</td>";
           $contenido.="<td> ".$row[3]."</td>";
			$total_final=$row[2]*$row[3];
			$contenido.="<td>".$total_final."</td>";
            $contenido.="<td><input type='button' onclick='xajax_elim_product_guia(document.form.n_guia.value,".$row[4].")' value='Eliminar' class='formbutton2' >";
         $contenido.="</tr>";
          }     
    $respuesta->addAssign("listado_productos","innerHTML",$contenido);
    return $respuesta;
  } 
///////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////// 
function elim_product_orden($guia,$id)
  {
   include("conexion.php"); 
	$respuesta = new xajaxResponse();
	$sql="delete  from detalle_orden_compra where id='".$id."'";
	$result = mysql_query($sql);
	$sql2 ="SELECT  * from orden_compra pre, detalle_orden_compra deta where pre.id=".$guia." and pre.id=deta.id_orden_compra ";
	$result2 = mysql_query($sql2); 
	$contenido="<tr><th width='34'>ID</th> <th width='296'>Nombre Producto</th> <th width='87'>Cantidad</th> <th width='78'>Valor Unitario</th> <th width='73'>Unidad</th> <th width='56'>Total</th> <th width='80'>Eliminar</th> </tr> ";
		while($row = mysql_fetch_row($result2))
		{ 
		$contenido.=" <tr>";
		$contenido.="<td >".$row[14]." </td>";
          $contenido.="<td height='58'>".$row[18]." </td>";
            $contenido.=" <td>".$row[16]."</td>";
           $contenido.="  <td> ".$row[19]."</td>";
            $contenido.=" <td>".$row[17]."</td>";
			$total_final=$row[16]*$row[19];
			$contenido.=" <td>".$total_final."</td>";
            $contenido.=" <td><input type='button' onclick='xajax_elim_product_orden(document.form.num_orden.value,".$row[14].")' value='Eliminar' class='formbutton2' ></td>";
         $contenido.="  </tr>";
          }   
    $respuesta->addAssign("listado_productos","innerHTML",$contenido);
    return $respuesta;
  } 
///////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////// 
function elim_product_guia_traslado($guia,$id)
  {
   include("conexion.php"); 
	$respuesta = new xajaxResponse();
	$sql="delete  from detalle_traslado where id='".$id."'";
	$result = mysql_query($sql);
	$sql2 ="select * from detalle_traslado where n_guia='".$guia."'";
	$result2 = mysql_query($sql2); 
		$contenido="<tr><th width='34'>ID</th> <th width='443'>Nombre Producto</th> <th width='123'>Cantidad</th> <th width='80'>Eliminar</th> </tr> ";
		while($row = mysql_fetch_row($result2))
		{ 
		$contenido.="<tr>";
		$contenido.="<td>".$row[0]."</td>";
            $contenido.="<td>".$row[2]."</td>";
           $contenido.="<td> ".$row[3]."</td>";
            $contenido.="<td><input type='button' onclick='xajax_elim_product_guia_traslado(document.form.n_guia.value,".$row[0].")' value='Eliminar' class='formbutton2' >";
         $contenido.="</tr>";
          }     
    $respuesta->addAssign("listado_productos","innerHTML",$contenido);
    return $respuesta;
  }
///////////////////////////////////////////////////////////////////////////////////////////////
//instanciamos el objeto de la clase xajax
$xajax = new xajax();
//asociamos la función creada anteriormente al objeto xajax
$xajax->decodeUTF8InputOff();
$xajax->setCharEncoding("UTF-8");
$xajax->registerFunction("tara");
$xajax->registerFunction("observacion");
$xajax->registerFunction("aplicar_descuento");
$xajax->registerFunction("aplicar_descuento2");
$xajax->registerFunction("totales");
$xajax->registerFunction("calcularm3");
$xajax->registerFunction("idmezcla");
$xajax->registerFunction("lista_productos");
$xajax->registerFunction("lista_orden");
$xajax->registerFunction("idmezcla");
$xajax->registerFunction("lista_guia");
$xajax->registerFunction("lista_traslado");
$xajax->registerFunction("buscarpesaje");
$xajax->registerFunction("buscarpesaje2");
$xajax->registerFunction("nuevo_cliente");
$xajax->registerFunction("nueva_patente");
$xajax->registerFunction("nuevo_chofer");
$xajax->registerFunction("nuevo_obra");
$xajax->registerFunction("nuevo_transportista");
$xajax->registerFunction("registro_chofer");
$xajax->registerFunction("registro_obra");
$xajax->registerFunction("registro_camion");
$xajax->registerFunction("registro_cliente");
$xajax->registerFunction("registro_transportista");
$xajax->registerFunction("cargar_marca");
$xajax->registerFunction("elim_product_guia");
$xajax->registerFunction("elim_product_orden");
$xajax->registerFunction("elim_product_guia_traslado");
$xajax->registerFunction("mezcla");
$xajax->registerFunction("mezcla2");
$xajax->registerFunction("tipoventa");
$xajax->registerFunction("lista_guia2");

//$xajax->debugOn();
//El objeto xajax tiene que procesar cualquier petición
$xajax->processRequests();
?>