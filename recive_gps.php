<?php
	include_once "database.php"

	$link = open_link("localhost", "root", "", "bls");
	
	$sql = write_gps($_POST["bus_id"], $_POST["latitude"], $_POST["longitude"]);
	$result = mysql_query($sql, $link);
	echo $result;



?>
