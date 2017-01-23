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
body,td,th {
	color: #000000;
}
body {
	font-family: "Trebuchet MS", Tahoma, Arial;
	font-size: 12px;
	color: #FFFFFF;
	background-image: url(fondov2.gif);

}
.Estilo7 {color: #000000}
.Estilo8 {font-family: "Trebuchet MS"; font-size: 18px;}
.Estilo2 {color: #000000;
	font-size: 24px;
	font-weight: bold;
}
-->
</style>

<body>
<div align="center" class="Estilo7" > 
  <blockquote>
    <p>
      
      <center>
        
        <p><strong><font size="5" face="Trebuchet MS"><br>
        </font></strong></p>
        <table width="720" border="0" align="center">
          <tr>
            <td><div align="center"><span class="Estilo2">INFORME DE HORAS <br>
              POR OPERADOR</span></div></td>
            <td><div align="center"><img src="rutas_small.jpg" width="189" height="84"></div></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </center>
    </p>
    </blockquote>
  <form name="form1" method="post" action="informe_operador_horas2.php" target="_blank">
    <table width="56%" border="0" align="center">
      <tr> 
        <td width="36%" class="texto2_1"><div align="right"><strong>Seleccione 
            Operador :</strong> </div></td>
        <td width="26%">
          <select name="operador" id="operador" >
            <option >Seleccione Operador</option>
            <?php
   		///////////// Para LAN
//$conexion = mysql_connect("localhost", "usuario", "clave");
//mysql_select_db("avance", $conexion);

///////////// Para WAN
$conexion = mysql_connect("localhost", "rutas_sistemas", "7RJWmWVxDfFo");
mysql_select_db("rutas_sistema_avanceobra", $conexion);
   			
			$result=mysql_query("select operador from mant_maqtra order by operador asc",$conexion);
	
			while($row = mysql_fetch_array($result))
			{
			 if(!$row[0]==""){
				printf("<option value='%s'>%s</option>",$row["0"] , $row["0"]);
   			}
			}
   			mysql_free_result($result);
			mysql_close($link); 
		 ?>
          </select>        </td>
        <td width="38%">&nbsp;</td>
      </tr>
    </table>
    <br>
    <table width="399" border="0">
      <tr>
        <td><strong>Precio del Trato</strong></td>
        <td><font color="#000000">
          <select name="trato" id="trato" >
            <option >Seleccione Trato</option>
            <?php
  		///////////// Para LAN
//$conexion = mysql_connect("localhost", "usuario", "clave");
//mysql_select_db("avance", $conexion);

///////////// Para WAN
$conexion = mysql_connect("localhost", "rutas_sistemas", "7RJWmWVxDfFo");
mysql_select_db("rutas_sistema_avanceobra", $conexion);

   			
			$result=mysql_query("select * from empresa order by operador asc",$conexion);
	
			/* while($row = mysql_fetch_array($result))
			{
			 if(!$row[3]==""){
				printf("<option value='%s'>%s</option>",$row["3"] , $row["3"]);
   			}
			} */
   			mysql_free_result($result);
			mysql_close($link); 
			
		 ?>
            <option value='1000'>1000</option>
            <option value='1500'>1500</option>
            <option value='1900'>1900</option>
            <option value='2000'>2000</option>
            <option value='2100'>2100</option>
            <option value='2200'>2200</option>
            <option value='2500'>2500</option>
            <option value='2700'>2700</option>
            <option value='3500'>3500</option>
            <option value='5000'>5000</option>
          </select>
        </font></td>
      </tr>
      <tr>
        <td><strong>Dias Habiles del Periodo</strong></td>
        <td><input type="text" name="habiles" id="habiles"></td>
      </tr>
      <tr>
        <td><strong>Dias Festivos del Periodo</strong></td>
        <td><input type="text" name="festivos" id="festivos"></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <table width="44%" border="0" align="center">
          <tr>
        <td width="41%" height="20" class="texto2_1"><strong>Fecha de Inicio</strong><br>
            <input type="text"  name="fecha_inicio" id="fechainicio" />
            <br>
           
            <br></td>
        <td width="17%" class="texto2_1"></td>
        <td width="42%" class="texto2_1"><strong>Fecha de Termino</strong><br>
            <input type="text"  name="fecha_termino"  id="fechatermino" />
            <br>            </td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <table width="200" border="1" align="center">
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
  <table width="121" border="1">
    <tr>
      <td width="111"><div align="center"><a href="index.php"><img src="img_bot/volver_v2.jpg" width="120" height="34" /></a></div></td>
    </tr>
  </table>
  <br>
  
  <p class="texto2">&nbsp;</p>
</div>
</body>
</html>