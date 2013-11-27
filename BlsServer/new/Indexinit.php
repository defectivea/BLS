<?php
	require("database.php");
	include_once "db_info.php";
	$link = open_link($server_url, $user_name, $db_password, $db_name);
	session_start();
	
	$sql = "select * from user where mail = ;";
	$result = db_select($sql);
		
?>