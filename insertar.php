<?php 
	
	$con =mysqli_connect("localhost","root","","chat");
	$mensaje = $_POST['mensaje'];
	$timestamp = date("Y-m-d H:i:s");

	$sql = "INSERT INTO mensajes values ('','$mensaje','$timestamp')";
	$res = mysqli_query($con,$sql) or die (mysqli_error());
	header("Location: formInsertar.php");

 ?>