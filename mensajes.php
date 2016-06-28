<?php 
	$con = mysqli_connect('us-cdbr-azure-southcentral-f.cloudapp.net','b4c88883a80208','e4f28037','acsm_56e566ee868c1f3');
	mysqli_set_charset($con, 'utf8');
	$sql = "SELECT * FROM mensajes ORDER BY timestamp DESC LIMIT 1";
	echo $res = mysqli_query($con,$sql) or die(mysqli_error());
	
	while ($row = mysqli_fetch_array($res)) {
		echo "Mensaje: ".$row['mensaje'];
		echo "<br>";
	}
 ?>
