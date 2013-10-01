<?php
//insert into $T_Table ($T_Name) values ($T_Values)
//echo '<!--insertが呼び出されました-->';
 require_once("launchSQL.php");

$dbc = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
$query = "insert into ".$T_Table;



if($T_Name != null){
	$query = $query." (" . $T_Name .") ";
}







$query = $query.' values ('.$T_Values.')';



//echo '<!--insert実行'.$query.'-->';



mysqli_query($dbc, $query);
mysqli_close($dbc);
$T_Table='';
$T_Name='';
$T_Values='';
//$T_After='';
//$T_Update='';

?>