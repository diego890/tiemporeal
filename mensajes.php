<?php 
	$con = mysqli_connect("us-cdbr-azure-southcentral-f.cloudapp.net","b87e13c9e227f0","20ab15ad","chat4");
	$sql = "SELECT * FROM mensajes ORDER BY timestamp DESC LIMIT 1";

	echo $res = mysqli_query($con,$sql) or die(mysqli_error());
	
	while ($row = mysqli_fetch_array($res)) {
		echo "Mensaje: ".$row['mensaje'];
		echo "<br>";
	}
 ?>
