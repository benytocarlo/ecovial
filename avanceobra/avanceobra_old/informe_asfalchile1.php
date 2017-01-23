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
.Estilo9 {
	color: #000000;
	font-weight: bold;
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
    <center>
        
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    <table width="720" border="0" align="center">
          <tr>
            <td><div align="center"><span class="Estilo2">INFORME HOROMETROS</span></div></td>
            <td><div align="center"><img src="rutas_small.jpg" width="191" height="84"></div></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </center>
    </blockquote>
  <form name="form1" method="post" action="informe_asfalchile2.php" target="_blank">
    <br>
    <br>
    <table width="44%" border="0" align="center">
      <tr>
        <td width="41%" height="20" class="texto2_1"><span class="Estilo9"><br>
          Fecha de Inicio</span><br>
            <input type="text"  name="fecha_inicio" id="fechainicio" />
            <br>
           
            <br></td>
        <td width="17%" class="texto2_1"></td>
        <td width="42%" class="texto2_1"><span class="Estilo9">Fecha de Termino</span><br>
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
  <table width="121" border="1">
    <tr>
      <td width="111"><div align="center"><a href="index.php"><img src="img_bot/volver_v2.jpg" width="120" height="34" /></a></div></td>
    </tr>
  </table>
  <br>
  <br>
  <p class="texto2">&nbsp;</p>
</div>
</body>
</html>