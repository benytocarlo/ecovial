<?php
//incluímos la clase ajax
require ('includes/xajax/xajax.inc.php');
//require("phpmailer/class.phpmailer.php");
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
	$contenido="<select name='mezclita' id='mezclita'>";
		while($row = mysql_fetch_row($result))
		{ 
		$contenido.= '<option value="'.$row[3].'">'.$row[2].'</option>';
		 }
		$contenido.="</select>";
	$respuesta->addAssign("mezcla_name","innerHTML",$contenido);  
    return $respuesta;
  }
///////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
function busqueda($n_pesaje)
  {
    //include("include("conexcion_sql.php");"); 
    $respuesta = new xajaxResponse();
    $query="Select * from mezclas where tipo='".$mezcla_id."'";
	$result = mysql_query($query); 
	$contenido="<select name='mezclita' id='mezclita'>";
		while($row = mysql_fetch_row($result))
		{ 
		$contenido.= '<option value="'.$row[3].'">'.$row[2].'</option>';
		 }
		$contenido.="</select>";
	$respuesta->addAssign("mezcla_name","innerHTML",$contenido);  
    return $respuesta;
  }
///////////////////////////////////////////////////////////////////////////////////////////////

//instanciamos el objeto de la clase xajax
$xajax = new xajax();
//asociamos la función creada anteriormente al objeto xajax
$xajax->decodeUTF8InputOff();
$xajax->setCharEncoding("UTF-8");

$xajax->registerFunction("cargar_marca");
$xajax->registerFunction("mezcla");
$xajax->registerFunction("busqueda");
//$xajax->debugOn();

//El objeto xajax tiene que procesar cualquier petición
$xajax->processRequests();

?> 