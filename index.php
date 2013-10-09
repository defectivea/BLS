<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>Google Maps JavaScript API v3 Example: Simple Icons</title>
<script type="text/javascript"
	src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
  function initialize() {
     var myOptions = {
      zoom: 15,
      center: new google.maps.LatLng(33.583452, 130.421055),
      mapTypeId: google.maps.MapTypeId.ROADMAP
   }
   var map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);
   var image = 'http://www.fastpic.jp/images.php?file=5287545421.png';
   var myLatLng = new google.maps.LatLng(33.583452, 130.421055);
   var beachMarker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: image,
        animation: google.maps.Animation.DROP
    });
  }
 </script>
</head>
<body style="margin: 0px; padding: 0px;" onload="initialize()">
	<div id="map_canvas" style="width: 100%; height: 100%"></div>
</body>


	<?php
		require("footer_Index.php");
	?>
</html>