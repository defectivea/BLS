<!DOCTYPE html>
<html lang="en">
	<head>
		<title>BusLocationSystem</title>
		<?php
			session_start();
			require("HeaderIndex.php");
		?>		
	</head>
	
	<body onLoad="indexInit()">
    <div class="container">
    </div>	
		<?php
			if(isset($_SESSION['user_id'])) {
				require("BootstrapIndex2.php");
			}else {
				require("BootstrapIndex.php");
			}
			
			require("indexInit.php");
		?>
		
		
		
		
					

		
	</body>
</html>