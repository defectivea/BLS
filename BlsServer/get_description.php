<?php
	include_once 'database.php';
	
	$link = open_link("localhost", "root", "", "bls");
	$sql = "SELECT * FROM bus,route WHERE bus.route_id=route.route_id AND bus.bus_id = ".$_GET['bus_id'];
	//echo $sql;
	$result = mysql_query($sql, $link);
	$row = mysql_fetch_assoc($result);

	echo $row["description"];

?>
