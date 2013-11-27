<!DOCTYPE html>
<html lang="en">
	<head>
		<title>BusLocationSystem</title>
		<?php
			session_start();
			require("HeaderGps.php");
		?>		
	</head>
	
	<body>
		
		<?php
			if(isset($_SESSION['user_id'])) {
				require("BootstrapGps2.php");
			}else {
				require("BootstrapGps.php");
			}
		?>		
		<form>
			<input type="button" value="ファイル読み込み" onClick=###>
		</form>		
		
	</body>
</html>