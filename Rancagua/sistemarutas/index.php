<? 
session_start();

session_destroy();  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema de Pesajes</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<style type="text/css">
body{ background-color: #0081ab !important } 
<!--
.Estilo5 {
	color: #FFFFFF;
	font-size: medium;
}
#apDiv1 {
	position:absolute;
	left:472px;
	top:114px;
	width:343px;
	height:32px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:471px;
	top:172px;
	width:450px;
	height:33px;
	z-index:2;
}
-->
</style>
</head>
<script>
var pagina="index.php"
function vacio1()
{
	if(document.form1.user.value == "Usuario")
	{
		document.form1.user.value = "";
		document.form1.user.focus();
	}
}

function vacio2()
{
	if(document.form1.pass.value == "Password")
	{
		document.form1.pass.value = "";
		document.form1.pass.focus();
    }  
}
function validar()
{
 	if((document.form1.user.value=="")||(document.form1.pass.value==""))
  	{
	 	alert('Faltan Datos Para Ingresar al Sistema'); 
	 	location.href=pagina
	 		
  	}
}
</script>
<body>

<form id="form1" name="form1" method="post" action="login.php">
<div id="apDiv1">
  <label for="label">
  <div align="left"><span class="Estilo5">Name:</span></div>
  </label>
  
  <div align="left">
    <input type="text" name="user" id="user" />
    </div>
</div>
<div id="apDiv2">
  <label for="label">
  <div align="left"><span class="Estilo5">Contrase&ntilde;a:</span></div>
  </label>
  
  <div align="left">
    <input type="password" name="pass" id="pass" >
    <input type="submit" name="send" class="formbutton" value="Entrar" onclick="validar()"/>
    </div>
</div>

  <p><label for="name"></label></p>
					<p>&nbsp;</p>
					<h3></h3>
					<fieldset>
                    <legend>Ingreso de Usuarios</legend>
                    <p>
                      <label for="name"></label>
                    </p>
					</fieldset>
					<p>&nbsp;</p>
  <p>&nbsp;</p>
					<p>&nbsp;</p>
					<p><fieldset>
                    
                    <p>
                      <label for="name"></label>
                    </p>
					</fieldset></p>
  <p></p>
                  <div>
				      <label for="label"></label>
                    </div>
		           </form>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
