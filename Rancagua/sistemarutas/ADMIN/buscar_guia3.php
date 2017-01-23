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
.Estilo3 {font-size: 12px}
-->
</style>


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
        <li><a href="buscar_guia2.php" > Buscar Guia Cliente Ecovial</a></li>
            
        <li><a href="buscar_guia.php" > Buscar Guia Cliente Externo</a></li>
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
			<div id="form_pesaje"><span class="Estilo1">Busqueda de Guia</span>
			  <fieldset>
				<legend></legend>
              </fieldset>
		<form action="guia_mostrar_ecovial.php" method="post" name="form" id="form" target="_blank" >
<strong><span class="Estilo1"><strong>Guía de Cliente Rutas SpA</strong></span></strong>
<tr>
  <td>&nbsp;</td>
          </tr>
            <tr>
              <td><table width="404" height="87">
                <tr>
                  <td height="81" bgcolor="#0099FF"><label><span class="Estilo1"><strong>Nro. de </strong> Guia</span>
                      <select name="n_guia" id="n_guia" >
                      <option value="">Elija una Opci&oacute;n</option>
                      <?$sql ="SELECT * FROM pesaje where nula!='si' and cliente='398' order by id desc";

						$result = mysql_query($sql); 
                        
						while($row = mysql_fetch_row($result))
						{?>
                      <option value="<? echo $row[0]; ?>"> <? echo $row[0]; ?></option>
                      <?}?>
                      </select>
                    </label></td>
                  <td bgcolor="#0099FF"><input type="submit" class="formbutton" value="Siguiente" /></td>
                  </tr>
              </table></td>
               </form>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr><form action="guia_mostrar.php" method="post" name="form" id="form" target="_blank" >
            <tr>
              <td>&nbsp;</td>
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
      <div id="form_obra" style="display:none"><span class="Estilo1">Registro de Obra</span>
        <fieldset>
				<legend></legend>
        </fieldset>
        <form method="post" id="formulario_obra" name="formulario_obra">
        
          <table width="558" height="129">
            <tr>
              <td width="200"><strong>Nombre
                  <label> </label>
              </strong></td>
              <td width="346"><input type="text" name="obra_nombre" id="obra_nombre" /></td>
            </tr>
            <tr>
              <td><strong>Ubicación</strong></td>
              <td><input type="text" name="obra_ubicacion" id="obra_ubicacion" /></td>
            </tr>
            <tr>
              <td><strong>Ciudad</strong></td>
              <td><input type="text" name="obra_ciudad" id="obra_ciudad" /></td>
            </tr>

            <tr>
              <td><input type="hidden" name="oculto" id="oculto" value="camion"/></td>
              <td><input type="button" name="send_camion" class="formbutton" value="Guardar" onclick="xajax_registro_obra()" /></td>
            </tr>
          </table>
          <p>&nbsp;</p>
        </form><fieldset>
				<legend></legend>
                </fieldset>
      </div>
     
      
       <div id="form_cliente" style="display:none" >
      <span class="Estilo1">Registro de Cliente</span>
      <fieldset>
				<legend></legend>
         </fieldset>
        <form  method="post" id="formulario_cliente" name="formulario_cliente">
          <table width="558" height="112">
            <tr>
              <td width="200"><strong>Nombre</strong></td>
              <td width="346"><input type="text" name="cliente_nombre" id="cliente_nombre" /></td>
            </tr>
            <tr>
              <td><strong>Rut</strong></td>
              <td><input type="text" name="cliente_rut" id="cliente_rut" /></td>
            </tr>
            <tr>
              <td><strong>Direcci&oacute;n</strong></td>
              <td><input type="text" name="cliente_direccion" id="cliente_direccion" /></td>
            </tr>
            <tr>
              <td><strong>Comuna</strong></td>
              <td><input type="text" name="cliente_comuna" id="cliente_comuna" /></td>
            </tr>
            <tr>
              <td><strong>Ciudad</strong></td>
              <td><input type="text" name="cliente_ciudad" id="cliente_ciudad" /></td>
            </tr>
            <tr>
              <td><strong>Fono</strong></td>
              <td><input type="text" name="cliente_fono" id="cliente_fono" /></td>
            </tr>
            <tr>
              <td><strong>Email</strong></td>
              <td><input type="text" name="cliente_email" id="cliente_email" /></td>
            </tr>
            <tr>
              <td><input type="hidden" name="oculto2" id="oculto2" value="cliente"/></td>
              <td><input type="button" name="send2" class="formbutton" value="Guardar" onclick="xajax_registro_cliente()"/></td>
            </tr>
          </table>
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
