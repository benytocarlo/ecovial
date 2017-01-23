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
	background-image: url(fondov2.gif);

}
.Estilo7 {color: #000000}
.Estilo2 {color: #000000;
	font-size: 24px;
	font-weight: bold;
}
body,td,th {
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>

<body>
<div align="center" class="Estilo7" > 
  <blockquote>
    <p>    
    <p>    
    <p>    
    <p>    
    <p>
      <center>
        
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <table width="720" border="0" align="center">
          <tr>
            <td><div align="center"><span class="Estilo2">INFORME PETR&Oacute;LEO<br> 
              CLIENTE POR OBRA</span></div></td>
            <td><div align="center"><img src="rutas_small.jpg" width="191" height="84"></div></td>
          </tr>
        </table>
        <p>&nbsp;</p>
      </center>
    </blockquote>
  <form name="form1" method="post" action="informe_fact_petroleo_x_clientexobra2.php" target="_blank">
    <table width="57%" border="0" align="center">
      <tr> 
        <td width="33%" class="texto2_1">&nbsp;</td>
        <td width="27%">&nbsp;</td>
        <td width="40%">&nbsp;</td>
      </tr>
      <tr>
        <td height="20" class="texto2_1"><div align="right">Seleccione Cliente</div></td>
        <td class="texto2_1"><strong>
          <select name="cliente" id="cliente">
            <option>Seleccione Cliente</option>
          
            <?php
   		///////////// Para LAN
//$conexion = mysql_connect("localhost", "usuario", "clave");
//mysql_select_db("avance", $conexion);

///////////// Para WAN
$conexion = mysql_connect("localhost", "rutas_sistemas", "7RJWmWVxDfFo");
mysql_select_db("rutas_sistema_avanceobra", $conexion);
   			
			$result=mysql_query("select cliente from mant_maqtra order by cliente asc",$conexion);
	
			while($row = mysql_fetch_array($result))
			{
			 if(!$row[0]==""){
				printf("<option value='%s'>%s</option>",$row["0"] , $row["0"]);
   			}
			}
   			mysql_free_result($result);
			mysql_close($link); 
		 ?>
          </select>
        </strong></td>
        <td class="texto2_1">&nbsp;</td>
      </tr>
    </table>
    <table width="57%" border="0" align="center">
      <tr>
        <td width="33%" class="texto2_1">&nbsp;</td>
        <td width="27%">&nbsp;</td>
        <td width="40%">&nbsp;</td>
      </tr>
      <tr>
        <td height="20" class="texto2_1"><div align="right">Seleccione Obra</div></td>
        <td class="texto2_1"><select name="obra" id="obra" >
          <option >Seleccione Obra</option>
          <?php
   		///////////// Para LAN
//$conexion = mysql_connect("localhost", "usuario", "clave");
//mysql_select_db("avance", $conexion);

///////////// Para WAN
$conexion = mysql_connect("localhost", "rutas_sistemas", "7RJWmWVxDfFo");
mysql_select_db("rutas_sistema_avanceobra", $conexion);
   			
			$result=mysql_query("select obra from mant_maqtra order by obra asc",$conexion);
	
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
        <td class="texto2_1">&nbsp;</td>
      </tr>
    </table>
    <p><br>
    </p>
    <table width="44%" border="0" align="center">
    <tr>
        <td width="41%" height="20" class="texto2_1"><strong><br>
          </strong>Fecha de Inicio<br>
            <input type="text"  name="fecha_inicio" id="fechainicio" />
            <br>
           
            <br></td>
        <td width="17%" class="texto2_1"></td>
        <td width="42%" class="texto2_1">Fecha de Termino<br>
            <input type="text"  name="fecha_termino"  id="fechatermino" />
            <br>            </td>
      </tr>
    </table>
    <br>
    <br>
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
  <br>
  <br>
  <p class="texto2">&nbsp;</p>
</div>
</body>
</html>