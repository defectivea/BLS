<!DOCTYPE html>
<html lang="ja">
	 
	<head>

		<title>SignIn</title>
		<?php
			session_start();
			require("HeaderSignIn.php");
		?>
		
	</head>
  <body>
    <div class="container">
				<div class="row">
					  <form class="form-signin" method="post" action="Login.php">
      	  <h2 class="form-signin-heading">サインインしてください</h2>
       		メールアドレス<input type="text" class="input-block-level" placeholder="EmailAddress" name="mail">
        	パスワード<input type="password" class="input-block-level" placeholder="Password" name="password" >
        	<label class="checkbox">
          	<input type="checkbox" value="remember-me"> IDを保存
       		</label>
        	<button class="btn btn-large btn-primary" type="submit" name="signin">サインイン</button>
        </form>
					<br><br>
				</div>
				<div class="row">
	    <?php
	        if(isset($_SESSION["login_errer"]))  {
	        	if($_SESSION["login_errer"] == "0") {
	        		echo "正しいメールアドレスを入力してください。";
	        	}else{
	        		echo "パスワードが間違っています。";
	        	}
					}
					if(isset($_SESSION['user_id'])) {
						require("BootstrapSignIn2.php");
					}else {
						require("BootstrapSignIn.php");
   				}
					session_destroy();
		?>
     
		</div>
		</div>		
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>
    
  </body>
</html>
