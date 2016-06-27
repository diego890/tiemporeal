<?php 
	
	$con =mysqli_connect("us-cdbr-azure-southcentral-f.cloudapp.net","b87e13c9e227f0","20ab15ad","chat4");
	$mensaje = $_POST['mensaje'];
	$timestamp = date("Y-m-d H:i:s");

	$sql = "INSERT INTO mensajes values ('','$mensaje','$timestamp')";
	$res = mysqli_query($con,$sql) or die (mysqli_error());
	header("Location: formInsertar.php");

 ?>
