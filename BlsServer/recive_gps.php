<?php
	include_once 'database.php';
	$link = open_link("localhost", "root", "", "bls");
	
	$sql = make_insert_gps($_GET["bus_id"], $_GET["latitude"], $_GET["longitude"]);
	$result = mysql_query($sql, $link);
	echo mysql_error();
	echo $result;



?>
