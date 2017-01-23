<?php
error_reporting(-1);
	require_once("sesion.class.php");
//////////// Para LAN
//$conexion = mysql_connect("localhost", "usuario", "clave");
//mysql_select_db("avance", $conexion);

///////////// Para WAN
$conexion = mysql_connect("localhost", "rutas_sistemas", "7RJWmWVxDfFo");
mysql_select_db("rutas_sistema_avanceobra", $conexion);
	
	$sesion = new sesion();
	
	
	if( isset($_POST["iniciar"]) )
	{
		
		$usuario = $_POST["usuario"];
		$password = $_POST["contrasenia"];
	//	echo "$usuario";
	//	echo "$password";
		if(validarUsuario($usuario,$password) == true)

		{	
		
			$sesion->set("usuario",$usuario);
			header("location: index.php");
		}
		else 
		{
						//echo $usuario;
//		echo $password;	
			echo "Verifica tu nombre de Usuario y Password";
		}
	}
	
	function validarUsuario($usuario, $password)

	{
		

	//////////////////// CONEXION DEMO WAN FUNCIONANDO//////////////			
//$conexion = mysql_connect("localhost", "rutas_sistemas", "7RJWmWVxDfFo");
//mysql_select_db("rutas_sistema_avanceobra", $conexion);

	//////////////////// CONEXION LOCAL //////////////
		//$conexion = new mysqli("localhost","usuario","clave","avance");
//		mysql_select_db("avance", $conexion);

		$consulta = "select contrasenia from usuario where nick = '$usuario'";
		$result = mysql_query($consulta);
	//echo $consulta;
//echo $password;
	$password = $_POST["contrasenia"];
//echo $contrasenia; 
	
		$row = mysql_fetch_array($result);
		if($row[0] !="")
				{
			if($password==$row[0]){
				return true;
			}else{
				return false;
			}
		}
		else
				return false;
				echo $password;
	}

?>
<html>
<head>
<title></title>
<style type="text/css">
<!--
.Estilo1 {	font-size: 36px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="1015" border="0" align="center">
  <tr>
    <td><div align="center"><span class="Estilo1">ESTADO DE AVANCE DE OBRAS</span></div></td>
    <td><div align="center"><img src="rutas_small.jpg" width="189" height="84"></div></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form name="frmLogin" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"><div><div><label>
     <div align="center">Usuario: </div>
   </label> 
     <div align="center">
       <input type="text" name = "usuario"/>
     </div>
   </div>
    <div><label>
      <div align="center">Password: </div>
    </label> 
      <div align="center">
        <input type="password" name = "contrasenia" />
      </div>
    </div>
    <div>
      <div align="center">
        <p>
          <input type="submit" name ="iniciar" value="Iniciar Sesion"/>
          </p>
      </div>
    </div>
  </div>
</form>
</body>
</html>