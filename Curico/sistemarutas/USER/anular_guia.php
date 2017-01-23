<?php
require_once('includes/func_inc.php');
include("conexion.php"); 
//include_once($_SERVER['DOCUMENT_ROOT']."/forum/2010/src/includes/func_inc.php");
//echo "http://".$_SERVER[HTTP_HOST]."/forum/2010/scr/includes/xajax/";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema de Pesaje</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<style type="text/css">
<!--
.Estilo1 {
	color: #000066;
	font-weight: bold;
	font-size: 22px;
}
-->
</style>
<script type="text/javascript">
function enviar (){
var y=document.form.password.value
	if(confirm('¿Seguro que desea Anular esta Guia?'))
	{
		
		if(y=="admin123"){
			document.form.submit()
		}else{
			window.alert("Contraseña Invalida")
		}
	}
}
</script>


</head>
<body>
<div class="wrapper">
	<div class="top">
		<div class="header">
		</div>
		<div class="menu">
	<?php	include("menu.php");  ?>
		</div>
	</div>		
	<div class="content">
<div class="sidebar column-left">
  <ul>
    <li>
      <h4>Mantenedores</h4>
      <ul>
        <li><a href="buscar_guia.php" >Buscar Guia</a><a href="listado_usuarios.php" ></a></li>
        <li><a href="editar_guia.php" > Editar Guia</a></li>
        <li><a href="anular_guia.php" >Anular  Guia</a></li>
        </ul>
    </li>
  </ul>
  <ul>
    <?php	include("menu_informes.php");  ?>
  </ul>
  <ul>
    <li></li>
  </ul>
</div>
<div class="page-content">	
			<!-- CONTENT -->
			<div id="form_pesaje"><span class="Estilo1">Anular de Guia</span>
			  <fieldset>
				<legend></legend>
              </fieldset>
		<form action="anulacion.php" method="post" name="form" id="form" target="_blank" >
        <center>
<table width="657" height="137" align="center">
<tr>
                        <td width="208" height="81"><strong>Numero de Guia</strong></td>
            <td width="219"><label>
             <select name="n_guia" id="n_guia" >
                    <option value="">Elija una Opci&oacute;n</option>
                    <?$sql ="SELECT * FROM pesaje where nula!='si' order by id desc";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{?>
                    <option value="<? echo $row[0]; ?>"> <? echo $row[0]; ?></option>
                    <?}?>
                  </select>
            </label></td>
            <td width="214">&nbsp;</td>
            </tr>
<tr>
  <td height="48"><strong>Contraseña de Autorización</strong></td>
  <td><label>
    <input type="password" name="password" id="password" />
  </label></td>
  <td><input type="button" class="formbutton" value="Anular" onclick="javascript:enviar();"/></td>
</tr>
                    </table>	
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <fieldset>
        <legend></legend>
        </fieldset>
        </center>	  
      </form>
<fieldset>
				<legend></legend>
              </fieldset>
	  </div>
     
     
      
  
      
        <div class="clear"></div>	
	</div>		

	<p class="footer">Mixvial Ltda</div>

			

</body>
</html>
