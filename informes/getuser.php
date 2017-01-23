<?php
session_start();
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

$sql2="select * from usuarios  WHERE usuario='".$username ."' and password='".$password."' ";
$result2 = mysql_query($sql2); 
$número_filas = mysql_num_rows($result2);
if($número_filas==1){
	$status = "correcto";
	$sql2="select * from usuarios  WHERE usuario='".$username ."' and password='".$password."' ";
	$result2li = mysql_query($sql2); 
	while($row = mysql_fetch_row($result2li))
	{
		$_SESSION["tipo"] = $row[3];
	}
} else{
	$status = "incorrecto";
}
echo $status;
?>