<? 
 
 include("conexion.php");
 
 $obra = $_POST['obra'];
 $cliente = $_POST['cliente'];
 $operador = $_POST['operador'];
 $maquina = $_POST['maquina'];
 $t_realiza = $_POST['t_realiza'];
 $d_trabajo = $_POST['d_trabajo']; 
 $sql="insert into obra(obra,cliente,operador,maquina,t_realiza,d_trabajo) values ('$obra','$cliente','$operador','$maquina','$t_realiza','$d_trabajo')";
 $result = mysql_query($sql);
 ?>