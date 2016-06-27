<?php 
	
	$con =mysqli_connect("us-cdbr-azure-southcentral-f.cloudapp.net","b756bee20634b8","93d3da43","chat3");
	$mensaje = $_POST['mensaje'];
	$timestamp = date("Y-m-d H:i:s");

	$sql = "INSERT INTO mensajes values ('','$mensaje','$timestamp')";
	$res = mysqli_query($con,$sql) or die (mysqli_error());
	header("Location: formInsertar.php");

 ?>
