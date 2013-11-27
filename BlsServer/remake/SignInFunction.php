<?php
	require("database.php");
	include_once "db_info.php";
	$link = open_link($server_url, $user_name, $db_password, $db_name);
	session_start();
	
	if(isset($_POST['mail']) && isset($_POST['password'])) {
		$mail = $_POST['mail'];
		$sql = "select * from user where mail = '$mail';";
		$result = db_select($sql);
		
		if($row = mysql_fetch_assoc($result)){
			define("PASSWORD", $row['password']);
			define("MAIL", $row['mail']);
			if(PASSWORD === $_POST['password']){//パスワード確認
				$_SESSION['password'] = md5(PASSWORD);//暗号化してセッションに保存
				$_SESSION['user_id'] = $row['userid'];//暗号化してセッションに保存
				header("Location:Index.php");		
			}else{
				$_SESSION['login_errer'] = "1";
				header("Location:Signin.php");
			}
		} else {
			$_SESSION['login_errer'] = "0";
			header("Location:Signin.php");
		}
	}
?>

