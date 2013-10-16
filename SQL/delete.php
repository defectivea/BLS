<?php
//delete FROM $T_Table $T_After
//echo '<!--deleteが呼び出されました-->';
 require_once("launchSQL.php");

$dbc = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
$query = 'delete FROM '.$T_Table;






if(!($T_After == null)){
	$query = $query." ".$T_After;
}






//echo '<!--delete実行'.$query.'-->';



mysqli_query($dbc, $query);
mysqli_close($dbc);
$T_Table='';
//$T_Name='';
//$T_Values='';
$T_After='';
//$T_Update='';
