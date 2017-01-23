<?php  session_start()?>
<?
	include("conexion.php"); 
	//echo "Conexion con la base de datos conseguida.<br>";
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	// 'Comprobamos que no hay campos vacíos
	$correcto=true;  
	  if ($user=="") {
	      $correcto=False ; }
	  if ($pass=="")  {
	      $correcto=False; }
	  if($correcto==true) 
		{
			$select="SELECT * FROM usuarios WHERE nom_user='$user' and pass_user='$pass'";
			
			$result = mysql_query($select);
			while ($row = mysql_fetch_row($result))
			{
				$privilegio=$row[4];
				$nombre_completo=$row[1];
				if($privilegio=="AD")
				{
					$_SESSION["nombre"] = $nombre_completo;
					$_SESSION["estado"] = True;
					$contador=1;
					echo"<script>location='ADMIN/index.php';</script>";		
				}
				if ($privilegio=="DG") 
				{
					$_SESSION["nombre"] = $nombre_completo;
					$_SESSION["estado"] = True;
					$contador=1;
					echo"<script>location='USER/index.php';</script>";			
				}
				if ($privilegio=="IF") 
				{
					$_SESSION["nombre"] = $nombre_completo;
					$_SESSION["estado"] = True;
					$contador=1;
					echo"<script>location='INF/index.php';</script>";			
				}
						  
			}
			if($contador!=1)
			{
				echo"<script>alert('Datos Incorrectos de Ingreso');</script>";
				echo"<script>location='index.php';</script>";
			}
	    }
		else
		{
		 	//El usuario ha metido datos incorrectos
			echo"<script>alert('Datos Incorrectos de Ingreso');</script>";
		 	echo"<script>location='index.php';</script>";
	    }
		mysql_close();
?>