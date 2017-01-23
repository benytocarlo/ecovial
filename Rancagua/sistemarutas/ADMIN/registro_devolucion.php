<?php include("conexion.php"); 
require_once('includes/func_inc.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema de Pesaje</title>
<?php $xajax->printJavascript('includes/xajax/'); ?>
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
    
    	<SCRIPT type="text/javascript" src="dhtmlgoodies_calendar.js"></script>
    <link type="text/css" rel="stylesheet" href="dhtmlgoodies_calendar.css?" media="screen"></LINK>
</head>
<script type="text/javascript">
function valida(){
var x1 = document.form.n_guia.value;
var x2 = document.form.materia.value;
var x3 = document.form.fecha.value;
var x4 = document.form.patente.value;
var x5 = document.form.obra.value;
var x6 = document.form.cantidad.value;
var x7 = document.form.cantidad.value;
    //valido el nombre
    if (x1=="" || x2=="" || x3=="" || x4=="" || x5=="" || x6=="" || x7=="" ){
       alert("Faltan Datos que Ingresar");
	}else{
		document.form.submit();
	}
    //el formulario se envia
    //alert("Muchas gracias por enviar el formulario");
    //document.fvalida.submit();
} 
</script>
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
					<h4>Acciones</h4>
					<ul>
                      <li><a href="editar_mt.php" > Editar Materias Primas</a><a href="listado_usuarios.php" ></a></li>
				      <li><a href="anular_mt.php" >Anular  Materias Primas</a></li>
			      </ul>
			  </li>
				
				<li></li>
		  </ul>
<ul>	
				<?php	include("menu_informes.php");  ?>
				
				<li></li>
		  </ul>
	  </div>	
<div class="page-content">	
			<!-- CONTENT -->
			<span class="Estilo1">Reingreso de Emulsiones</span>
            <fieldset>
				<legend></legend>
      </fieldset>
		<form action="insert.php" method="post" id="form" name="form">
<table width="559" height="357">
                     <tr>
                        <td width="201" height="50"><strong>N&deg; Guia</strong></td>
                       <td width="349">
					   <select name="n_guia" id="n_guia" onchange="xajax_buscar_guia(xajax.getFormValues('form'))" >
                        <option  >Seleccione un N° Guia</option>
                         
                         <? $sql ="SELECT * FROM pesaje  where tipo_guia='emulsion' order by id desc";

						$result = mysql_query($sql); 
						while($row = mysql_fetch_row($result))
						{ ?>
                 
                         <option value="<? echo $row[0]; ?>" > <? echo $row[0]; ?></option>
                         
                      
                         <? } ?>
                       </select>
					   
					   
					  
                      </td>
                      </tr>
                    <tr>
                        <td width="201" height="50"><strong>N&deg; Orden de Compra</strong></td>
                        <td width="350"><input name="oc" type="text" id="oc" size="14" readonly="readonly"/></td>
                      </tr>
                      <tr>
                        <td width="203"><strong>Materia Prima</strong></td>
                        <td width="344">
                        <input type="text" name="materia" id="materia" readonly="readonly" size="45"/>
						<input type="hidden" readonly="readonly" name="idmateria" id="idmateria" value=""/>
						</td>
                      </tr>
                      <tr>
                        <td><strong>Fecha</strong></td>
                        <td><input type="text" readonly="readonly" name="fecha" />
                        <input type="button" value="Ver Calendario" onclick="displayCalendar(document.forms[0].fecha,'yyyy-mm-dd',this)" /></td>
          </tr>
                      <tr>
                        <td><strong>Patente</strong></td>
                        <td><input type="text" name="patente" id="patente" readonly="readonly"/></td>
                      </tr>
                      <tr>
                        <td><strong>Obra</strong></td>
                        <td><input type="text" name="obra" id="obra" readonly="readonly" size="45"/></td>
                      </tr>
					  <tr>
                        <td><strong>Cliente</strong></td>
                        <td><input type="text" name="cliente" id="cliente" readonly="readonly" size="45"//></td>
                      </tr>
                      <tr>
                        <td><strong>Cantidad de Litros </strong></td>
                        <td><input type="text" name="cantidad" id="cantidad" /></td>
                      </tr>
                      <tr>
                        <td><input type="hidden" name="oculto" id="oculto" value="devolucion"/></td>
                        <td><input type="button" onclick="valida()" name="send" class="formbutton" value="Guardar" /></td>
                      </tr>
          </table>
</form>
	<fieldset>
	</fieldset>
	  </div>
	  <div class="clear"></div>	
	</div>		

	<p class="footer">Constructora Rutas</p>
</div>

			

</body>
</html>
