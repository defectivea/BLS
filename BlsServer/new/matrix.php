<!DOCTYPE html>
<html lang="en">
	<head>
	  	<meta charset="utf-8">
	    <title>Profile</title>
	    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript" ></script>
		<script src="js/matrix.js"></script>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="">
    </head>
    
	<body>
		<?php
			$url = "http://maps.googleapis.com/maps/api/distancematrix/json?origins=33.5909,130.418701&destinations=33.602374,130.403767&language=ja&sensor=false";		
			$aaa = file_get_contents($url);
			$oJSON = json_decode($aaa,true);
			echo $oJSON["destination_addresses"][0];
			print("から");
			echo $oJSON["origin_addresses"][0];
			print("までの距離は、<br>");
			echo $oJSON["rows"][0]["elements"][0]["distance"]["text"];
			print("です。<br>かかる時間は<br>");
			echo $oJSON["rows"][0]["elements"][0]["duration"]["text"];
			print("です。");
	//		var_dump($oJSON);		
		?>
	</body>
</html>