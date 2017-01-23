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
.Estilo5 {
	color: #FFFFFF;
	font-size: 18px;
	font-family: "Trebuchet MS";
}
body,td,th {
	color: #000;
}
body {
	font-family: "Trebuchet MS", Tahoma, Arial;
	font-size: 12px;
	color: #FFFFFF;
	background-image: url();
}
.Estilo6 {color: #FFFFFF}
.Estilo2 {color: #000000;
	font-size: 24px;
	font-weight: bold;
}
.Estilo7 {
	color: #000000;
	font-weight: bold;
}
-->
</style>

<body>
<div align="center" > 
  <blockquote>
    <p>
      
      <center class="Estilo6">
        
        <p><strong><font size="5" face="Trebuchet MS">Generar</font></strong></p>
        <table width="720" border="0" align="center">
          <tr>
            <td><div align="center"><span class="Estilo2">INFORME SEMANA CORRIDA<br>
              POR CHOFER TOLVA</span></div></td>
            <td><div align="center"><img src="rutas_small.jpg" width="189" height="84"></div></td>
          </tr>
        </table>
        <p>&nbsp;</p>
    </center>
  </blockquote>
  <form name="form1" method="post" action="informe_semana_transvialv2.php" target="_blank">
    <table width="56%" border="0" align="center">
      <tr> 
        <td width="36%" class="texto2_1"><div align="right" class="Estilo6"><strong>Seleccione 
        ChofSeleccer :</strong> </div></td>
        <td width="26%"><font color="#000000">
          <select name="chofer" id="chofer" >
 <option >Seleccione Chofer</option>
          <?php
		  
///////////// Para LAN
//$conexion = mysql_connect("localhost", "usuario", "clave");
//mysql_select_db("avance", $conexion);

///////////// Para WAN
$conexion = mysql_connect("localhost", "rutas_sistemas", "7RJWmWVxDfFo");
mysql_select_db("rutas_sistema_avanceobra", $conexion);
   			
//			$result=mysql_query("select distinct (chofer) from petroleo_transvial where chofer!=' ' order by chofer asc",$conexion);
			$result=mysql_query("select distinct (chofer) from mant_maqtra where chofer!=' ' order by chofer asc",$conexion);
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
        </font></td><br>
		
        <td width="38%">&nbsp;</td>
      </tr>
	  <tr> 
        <td width="36%" class="texto2_1"><div align="right" class="Estilo6"><strong>Seleccione 
            Trato :</strong> </div></td>
        <td width="26%">&nbsp;</td><br>
		
        <td width="38%">&nbsp;</td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <table width="44%" border="0" align="center">
      <tr>
        <td width="41%" height="20" class="texto2_1"><span class="Estilo7">Fecha de Inicio</span><br>
            <input type="text"  name="fecha_inicio" id="fechainicio" />
            <br>
           
            <br></td>
        <td width="17%" class="texto2_1"></td>
        <td width="42%" class="texto2_1"><span class="Estilo7">Fecha de Termino</span><br>
            <input type="text"  name="fecha_termino"  id="fechatermino" />
            <br>            </td>
      </tr>
    </table>
    <br>
    <table width="496" border="0">
      <tr>
        <td align="center"><strong>* Debe indicar los dias que correspondan en el periodo</strong></td>
      </tr>
    </table>
<br>
    <table width="480" border="1">
      <tr>
        <td>Dias Trabajados</td>
        <td><label for="dt"></label>
        <input name="dt" type="text" id="dt" size="5"></td>
        <td>Total Festivos</td>
        <td><input name="df" type="text" id="df" size="5"></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <table width="200" border="1" align="center">
      <tr>
        <td><div>
          <div align="center">
            <font color="#000000">
            <input type="submit" name="Submit" value="Generar">
            </font></div>
        </div></td>
      </tr>
    </table>
  </form>
  <font color="#000000"><br>
  </font>
  <table width="121" border="1">
    <tr>
      <td width="111"><div align="center"><a href="index.php"><img src="img_bot/volver_v2.jpg" width="120" height="34" /></a></div></td>
    </tr>
  </table>
  <font color="#000000"><br>
  </font>
  <p class="texto2">&nbsp;</p>
</div>
</body>
</html>