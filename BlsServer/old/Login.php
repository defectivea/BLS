	<?php
		require("database.php");
		include_once "db_info.php";
		$link = open_link($server_url, $user_name, $db_password, $db_name);
		
		if(isset($_POST['mail']) && isset($_POST['password'])) {
			$mail = $_POST['mail'];
			$sql = "select * from member where mail = '$mail';";
			$result = db_select($sql);
			
			if($row = mysql_fetch_assoc($result)){
				define("PASSWORD", $row['pw']);
				define("MAIL", $row['mail']);
				
				if(isset($_POST['action'])&&$_POST['action']==="ログイン"){
				
					if(PASSWORD === $_POST['password']){//パスワード確認
						$_SESSION['session'] = md5(PASSWORD);//暗号化してセッションに保存
						$_SESSION['user_id'] = $row['m_id'];//暗号化してセッションに保存
						$m_id=$_SESSION['user_id'];
						$result = mysql_query('select point from member where m_id like '.$m_id.'');
							if (!$result) {
								die('クエリーが失敗しました。'.mysql_error());
							}
						$_SESSION['t_point'] = $row['point'];
						header("Location:admin.php");
						
					}else{
						session_destroy();//セッション破棄
						print("パスワードが違います");
					}
				}
			} else {
				session_destroy();//セッション破棄
				print("メールアドレスが違います");
			}
		}
?>