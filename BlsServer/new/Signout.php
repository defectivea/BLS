<!DOCTYPE html>
<html lang="en">
	 
	<head>

		<title>Signout</title>
		<?php
			session_start();
			require("HeaderSignOut.php");
		?>
		
	</head>
  <body>
  <div class="container">
      	<form class="form-signin" method="post" action="SessionDestroy.php">
     	   <button class="btn btn-large btn-primary" type="submit" name="signin">サインアウト</button>
      	</form>
   </div>	
    <?php
	
		require("BootstrapSignOut.php");

	?>
  </body>
</html>