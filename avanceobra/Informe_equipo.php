<?php
	require_once("sesion.class.php");
	
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");
	//echo $usuario;
	if($usuario!="caraya" && $usuario!="cvaleria" && $usuario!="pcancino" && $usuario!="jalbornoz" && $usuario!="erivera" && $usuario!="eorellana" && $usuario!="mchaura" && $usuario!="ljofre" && $usuario!="rpinto" && $usuario!="jyevenes" && $usuario!="mgonzalez" && $usuario!="citurriaga" && $usuario!="ahernandez"&& $usuario!="dsanmartin"&& $usuario!="cparraguez" && $usuario!="ycerna")

	{	
		header("Location: login.php");		
	}
	else 
	{
	?>
<html>
		<script type="text/javascript" src="lib/jquery-1.4.2.js"></script>
	<link rel="stylesheet" href="themes/base/jquery.ui.all.css">
	<script src="ui/jquery.ui.core.js"></script>
	<script src="ui/jquery.ui.widget.js"></script>
	<script src="ui/jquery.ui.datepicker.js"></script>
	<script>
	$(function() {
		$( "#fechainicio" ).datepicker({
			dateFormat: 'yy-mm-dd',
			changeMonth: true,
			changeYear: true
		});
		$( "#fechatermino" ).datepicker({
			dateFormat: 'yy-mm-dd',
			changeMonth: true,
			changeYear: true
		});
	});
	</script>



 
<style type="text/css">
<!--
body {
	font-family: "Trebuchet MS", Tahoma, Arial;
	font-size: 12px;
	color: #FFFFFF;
	background-image: url();
}
body,td,th {
	color: #000000;
}
.Estilo2 {	color: #000000;
	font-size: 24px;
	font-weight: bold;
}
.Estilo3 {font-weight: bold}
-->
</style>

<title>Control de Avance de Obra</title><body>
<div align="center" > 
  <blockquote>
    <p><font color="#BABBD8" class="fondo1"><i><b>
      </b></i></font>
      <center>
        
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <table width="720" border="0" align="center">
          <tr>
            <td><div align="center"><span class="Estilo2">INFORME OPERADOR EcoMAQ</span></div></td>
            <td><div align="center"><img src="rutas_small.jpg" width="191" height="84"></div></td>
          </tr>
        </table>
        <p>&nbsp;</p>
  <p>&nbsp;</p>
    </center>
    </blockquote>
  <form name="form1" method="post" action="Informe_equipo_v2.php" target="_parent">
    <table width="35%" border="0" align="center">
      <tr>
        <td height="20" class="texto2_1"><div align="center"><span class="Estilo12"><br>
          Fecha de Inicio</span><br>
          <input type="text"  name="fecha_inicio" id="fechainicio" />
          <br>
          <br>
        </div></td>
        <td class="texto2_1"></td>
        <td class="texto2_1"><div align="center"><span class="Estilo12">Fecha de T&eacute;rmino</span><br>
                <input type="text"  name="fecha_termino"  id="fechatermino" />
                <br>
        </div></td>
      </tr>
      <tr> 
        <td width="41%" class="texto2_1"><div align="right" class="Estilo3">
          <p align="right"><br>
              <br>
              Seleccione 
            Operador:<br>
</p>
          <p>&nbsp;</p>
        </div></td>
        <td width="59" colspan="2" class="texto2_1"><select name="operador" id="operador" >
 <option >Seleccione Operador</option>
          <?php
		  
   		///////////// Para LAN
//$conexion = mysql_connect("localhost", "usuario", "clave");
//mysql_select_db("avance", $conexion);

///////////// Para WAN
$conexion = mysql_connect("localhost", "rutas_sistemas", "7RJWmWVxDfFo");
mysql_select_db("rutas_sistema_avanceobra", $conexion);
   			
			$result=mysql_query("select distinct (operador) from control_equipos where operador!=' ' order by operador asc",$conexion);
			while($row = mysql_fetch_array($result))
			{
			 if(!$row[0]==""){
				printf("<option value='%s'>%s</option>",$row["0"] , $row["0"]);
  			}
			}
   			mysql_free_result($result);
			mysql_close($link); 
		 ?>
        </select></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <table width="200" border="0" align="center">
      <tr>
        <td><div>
          <div align="center">
            <input type="submit" name="Submit" value="Generar">
            </div>
        </div></td>
      </tr>
    </table>
  </form>
  <br>
  <br>
  <table width="121" border="1">
    <tr>
      <td width="111"><div align="center"><a href="index.php"><img src="img_bot/volver_v2.jpg" width="120" height="34" /></a></div></td>
    </tr>
  </table>
  <p class="texto2">&nbsp;</p>
</div>
</body>
</html>
<?php 
	}	
?>