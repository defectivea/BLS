<?php
//UPDATE $T_Table SET $T_Update $T_After
//echo '<!--updateが呼び出されました-->';
 require_once("launchSQL.php");
$dbc = mysqli_connect($db_host, $db_user,$db_pass,$db_name);
$query = "UPDATE ".$T_Table.' SET '.$T_Update.' ';






if(!($T_After == null)){
	$query = $query. $T_After ;
}





//echo '<!--update実行'.$query.'-->';



mysqli_query($dbc, $query);
mysqli_close($dbc);
$T_Table='';
//$T_Name='';
//$T_Values='';
$T_After='';
$T_Update='';
