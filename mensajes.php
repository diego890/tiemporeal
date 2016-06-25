<?php 
	$con = mysqli_connect("localhost","root","","chat");
	$sql = "SELECT * FROM mensajes ORDER BY timestamp DESC LIMIT 1";

	echo $res = mysqli_query($con,$sql) or die(mysqli_error());
	
	while ($row = mysqli_fetch_array($res)) {
		echo "Mensaje: ".$row['mensaje'];
		echo "<br>";
	}
 ?>