<?php 
	
	$con =mysqli_connect('us-cdbr-azure-southcentral-f.cloudapp.net','bf11601bdd6e36','6bff6f7b','acsm_b46a38908b8b7e4');
	$mensaje = $_POST['mensaje'];
	$timestamp = date("Y-m-d H:i:s");

	$sql = "INSERT INTO mensajes values ('','$mensaje','$timestamp')";
	
   echo	$res = mysqli_query($con,$sql) or die (mysqli_error());
	header("Location: formInsertar.php");

 ?>
