<?php

if($_POST["action"]=="rancagua"){ include("config_rancagua.php"); }
if($_POST["action"]=="curico"){ include("config_curico.php"); }

echo "<option value=''>Seleccionar Obra</option>";

$sql ="SELECT * FROM obra order by nombre asc";
    $result = mysql_query($sql); 
    while($row = mysql_fetch_row($result))
    { 
		if($row[1]!=""){
?>
<option value="<?php echo $row[0]; ?>"> <?php echo $row[1]; ?></option>
<?php } ?>
<?php } ?>