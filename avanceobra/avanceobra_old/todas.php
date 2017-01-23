<html>
		<script type="text/javascript" src="lib/jquery-1.4.2.js"></script>
	<link rel="stylesheet" href="themes/base/jquery.ui.all.css">
	<script src="ui/jquery.ui.core.js"></script>
	<script src="ui/jquery.ui.widget.js"></script>
	<script src="ui/jquery.ui.datepicker.js"></script>
	<script>
	$(function() {
		$( "#fecha" ).datepicker({
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
.Estilo11 {font-size: 16px}
.Estilo12 {
	font-size: 12px;
	font-weight: bold;
}
-->
</style>

<title>Sistema Gesti&oacute;n - FUMAULE</title><body>
<div align="center" > 
  <blockquote>
    <p><font color="#BABBD8" class="fondo1"><i><b>
      </b></i></font>
      <center>
        
        <p><strong><font size="5" face="Trebuchet MS"><br>
        </font></strong></p>
      <p><strong><font size="5" face="Trebuchet MS"><br>
          </font></strong></p>
        <p>&nbsp;</p>
        <p><strong><font face="Trebuchet MS"><span class="Estilo11">INFORME DE OBRAS</span></font></strong></p>
    </center>
    </p>
  </blockquote>
  <form name="form1" method="post" action="todas_v2.php" target="_parent">
    <table width="35%" border="0" align="center">
      <tr>
        <td class="texto2_1">Fecha</td>
        <td class="texto2_1"><input type="text" name="fecha" id="fecha" /></td>
      </tr>
      <tr> 
        <td width="41%" class="texto2_1"><div align="right">
          <p align="right"><strong><br>
              <br>
              Seleccione 
            Obra:</strong><br>
</p>
          <p>&nbsp;</p>
        </div></td>
        <td width="59%" class="texto2_1"><select name="nombre_obra" id="nombre_obra" >
          <option >Todas las Obras</option>
          <?php
   			$conexion = mysql_connect("localhost", "usuario", "clave");
			mysql_select_db("avance", $conexion);
   			
			$result=mysql_query("select nombre_obra from mantenedor order by nombre_obra asc",$conexion);
	
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