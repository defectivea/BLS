<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <title>バス移動位置システム</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
		<div class="container">
    	<h1></h1>
			<!-- サインインフォームを用意する -->
			<div class="row">
				<div class="col-sm-4">
				
				</div>

				<div class="col-sm-4">
					<form class="form-signin" method="post" action="SignInFunction.php">
						<h2>サインインしてください</h2>
						<input type="text" class="input-block-level" placeholder="EmailAddress" name="mail"><br />
						<input type="password" class="input-block-level" placeholder="Password" name="password">
						<label class="checkbox"><input type="checkbox" value="remember-me">IDを保存</label>
						<button class="btn btn-large btn-primary" type="submit" name="signin">サインイン</button>

					</form>	
				</div>

				<div class="col-sm-4">
				
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					
				</div>
				<div class="col-sm-4">
					<?php
	        if(isset($_SESSION["login_errer"]))  {
	        	if($_SESSION["login_errer"] == "0") {
	        		echo "正しいメールアドレスを入力してください。";
	        	}else{
	        		echo "パスワードが間違っています。";
	        	}
				session_destroy();
			}
		?>
				</div>
				<div class="col-sm-4">

				</div>
			</div>

			<!-- ナビバーを表示する -->
			<div class="row">
				<div class="col-sm-12">
					
					<?php 
						if(isset($_SESSION['user_id'])!=0) {
							require_once 'parts\navbar\blackbar_mem.php';
						}
						else {
							require_once 'parts\navbar\blackbar.php';
						}
					?>
				</div>
			</div>
		</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

