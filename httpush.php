<?php 
	$con = mysqli_connect('us-cdbr-azure-southcentral-f.cloudapp.net','bf11601bdd6e36','6bff6f7b','acsm_b46a38908b8b7e4');
	set_time_limit(0);

	$fecha_ac = isset($_POST['timestamp']) ? $_POST['timestamp']:0;
	$fecha_bd = $_POST['timestamp'];

	while ($fecha_bd <= $fecha_ac) {
		$query = "SELECT timestamp FROM mensajes ORDER BY timestamp DESC LIMIT 1";
		$res = mysqli_query($con,$query);
		$row = mysqli_fetch_array($res);

		usleep(100000);
		clearstatcache();
		$fecha_bd = strtotime($row['timestamp']);
	}

	$query2 = "SELECT * FROM mensajes ORDER BY timestamp DESC LIMIT 1";
	$res2 = mysqli_query($con,$query2);

	while ($row = mysqli_fetch_array($res2)) {
		$ar["timestamp"] = strtotime($row['timestamp']);
		$ar["mensaje"]   = strtotime($row['mensaje']);
	}
	$dato_json = json_encode($ar);
	echo $dato_json;
 ?>
