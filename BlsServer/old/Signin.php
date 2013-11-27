<!DOCTYPE html>
<html lang="en">
	 
	<head>

		<title>SignIn</title>
		<?php
			require("HeaderSignIn.php");
		?>
		
	</head>

  <body>
    <div class="container">
      <form class="form-signin" method="post" action="Login.php">
        <h2 class="form-signin-heading">サインインしてください</h2>
        メールアドレス<input type="text" class="input-block-level" placeholder="EmailAddress" name="mail">
        パスワード<input type="password" class="input-block-level" placeholder="Password" name="passward>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> IDを保存
        </label>
        <button class="btn btn-large btn-primary" type="submit" name="signin">サインイン</button>
      </form>
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
    
    <?php
		require("BootstrapSignIn.php");
	?>
  </body>
</html>