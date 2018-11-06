<?php
	$host = "deco3800-immi.zones.eait.uq.edu.au";
	$user = "connect";
	$pw = "connect123";
	$db = "CSV_DB";
	
	$con = mysqli_connect($host, $user, $pw, $db);
	if (mysqli_connect_errno($con)) {
		echo("report_Connect_Error");
	}
?>