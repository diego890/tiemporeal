<?php 
	$con = mysqli_connect('us-cdbr-azure-southcentral-f.cloudapp.net','b4c88883a80208','e4f28037','acsm_56e566ee868c1f3');
	mysqli_set_charset($con, 'utf8');
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
