<? 
 
 include("conexion.php");
 
 $obra = $_POST['obra'];
 $cliente = $_POST['cliente'];
 $operador = $_POST['operador'];
 $maquina = $_POST['maquina'];
 $t_realiza = $_POST['t_realiza'];
 $d_trabajo = $_POST['d_trabajo']; 
  $h_inicio = $_POST['h_inicio'];
 $num = $_POST['num'];
 $fecha = $_POST['fecha'];
 $h_inicio = $_POST['h_inicio'];
 $h_termino = $_POST['h_termino'];
 $t_horas = $_POST['t_horas'];
 $litros = $_POST['litros'];
 $h_litros = $_POST['h_litros'];
 $fresado1 = $_POST['fresado1'];
 $fresado2 = $_POST['fresado2'];
 $data_fresado = $_POST['data_fresado'];
 $imprimacion1 = $_POST['imprimacion1'];
 $imprimacion2 = $_POST['imprimacion2'];
 $data_imprimacion = $_POST['data_imprimacion'];
 $observaciones = $_POST['observaciones'];
 $sql="insert into data(num,fecha,obra,cliente,operador,maquina,h_inicio,h_termino,t_horas,litros,h_litros,t_realiza,d_trabajo,fresado1,fresado,imprimacion1,imprimacion2,data_fresado,data_imprimacion ,observaciones) values ('$num','$fecha','$obra','$cliente','$operador','$maquina','$h_inicio','$h_termino','$t_horas','$litros','$h_litros','$t_realiza','$d_trabajo','$fresado1','$fresado','$imprimacion1','$imprimacion2','$data_fresado','$data_imprimacion','$observaciones')";
 $result = mysql_query($sql);

 ?>
 