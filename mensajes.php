<?php 
	$con = mysqli_connect("us-cdbr-azure-southcentral-f.cloudapp.net","b756bee20634b8","93d3da43","chat3");
	$sql = "SELECT * FROM mensajes ORDER BY timestamp DESC LIMIT 1";

	echo $res = mysqli_query($con,$sql) or die(mysqli_error());
	
	while ($row = mysqli_fetch_array($res)) {
		echo "Mensaje: ".$row['mensaje'];
		echo "<br>";
	}
 ?>
