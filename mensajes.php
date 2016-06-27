<?php 
	$con = mysqli_connect('us-cdbr-azure-southcentral-f.cloudapp.net','bf11601bdd6e36','6bff6f7b','acsm_b46a38908b8b7e4');
	mysqli_set_charset($con, 'utf8');
	$sql = "SELECT * FROM mensajes ORDER BY timestamp DESC LIMIT 1";
	echo $res = mysqli_query($con,$sql) or die(mysqli_error());
	
	while ($row = mysqli_fetch_array($res)) {
		echo "Mensaje: ".$row['mensaje'];
		echo "<br>";
	}
 ?>
