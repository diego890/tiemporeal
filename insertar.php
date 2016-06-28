<?php 
	
	$con =mysqli_connect('us-cdbr-azure-southcentral-f.cloudapp.net','b4c88883a80208','e4f28037','acsm_56e566ee868c1f3');
	mysqli_set_charset($con, 'utf8');
	$mensaje = $_POST['mensaje'];
	//$timestamp = date("Y-m-d H:i:s");

	$sql = "INSERT INTO mensajes values (null,'$mensaje',now())";
	
   	
   	$res = mysqli_query($con,$sql) or die (mysqli_error());
   
	echo ($mensaje);
	echo ($timestamp);

 ?>
