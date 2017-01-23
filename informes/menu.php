<ul class="nav-main">
	<?php session_start(); ?>
	<?php
		if($_SESSION["tipo"]==""){
			header("Location: index.php");
			die();
		} 
	?>
	<li><a class="active" href="dashboard.php"><i class="si si-speedometer"></i><span class="sidebar-mini-hide">Dashboard</span></a></li>
	<li class="nav-main-heading"><span class="sidebar-mini-hide">Acciones</span></li>
	<?php if($_SESSION["tipo"]=="perfil1" || $_SESSION["tipo"]=="perfil4"){ ?>
	<li><a href="registro_equipos.php">Registro de Equipos</a></li>
	<?php } ?>
	<?php if($_SESSION["tipo"]=="perfil2" || $_SESSION["tipo"]=="perfil4"){ ?>
	<li><a href="registro_petroleo.php">Registro de Petróleo</a></li>
	<?php } ?>
	<?php if($_SESSION["tipo"]=="perfil3" || $_SESSION["tipo"]=="perfil4"){ ?>
	<li><a href="busqueda_obra.php">Informe por Obra</a></li>
	<li><a href="busqueda_general.php">Informe General</a></li>
	<?php } ?>
	<li style="background-color: #a74343;color: white;font-weight: bold;">
        <a href="index.php?logout=true"><i class="si si-rocket"></i><span class="sidebar-mini-hide">Cerrar Sessión</span></a>
    </li>
</ul>