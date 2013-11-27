<!DOCTYPE html>
<html lang="en">
  <head>
	<title>SignUp</title>
	<?php
		session_start();
		require("HeaderForm.php");
	?>		
  </head>

  <body>
    <div class="container">
      <form class="form-signin">
        <h2 class="form-signin-heading">登録情報入力</h2>
        ユーザーＩＤ<input type="text" class="input-block-level" placeholder="userId">
        パスワード<input type="password" class="input-block-level" placeholder="Password">
       パスワード再入力<input type="password" class="input-block-level" placeholder="Password">
       メールアドレス<input type="text" class="input-block-level" placeholder="Email address">
        <button class="btn btn-large btn-primary" type="submit">登録</button>
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
		require("BootstrapForm.php");
		if(isset($_SESSION['user_id'])) {
			require("BootstrapForm2.php");
		}else {
			require("BootstrapForm.php");
		}		
	?>
	
  </body>
</html>