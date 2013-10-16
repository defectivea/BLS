<?php
//select $T_Name FROM $T_Table $T_After
//$resultに出力
//echo '<!--selectが呼び出されました-->';


 require_once("launchSQL.php");


$link = mysql_connect($db_host , $db_user , $db_pass );
$db_selected = mysql_select_db($db_name , $link);


mysql_set_charset('utf8');

$query = 'select '.$T_Name. ' FROM '.$T_Table.' ';

if($T_After != null){
	$query = $query." ".$T_After;
}

$result = mysql_query($query);
////////////////////////////////////////////////////////////////////////////////
$numFields = mysql_num_fields($result);//フィールド数の取得

//フィールド名を格納する
//配列を用意する
$nameFields = array();

for($i=0;$i<$numFields;$i++){
	$nameFields[] = mysql_field_name($result, $i);
}
///////////////////////////////////////////////////////////////////
$res[][] = null;
$resnum[][]=null;
unset($res);
unset($resnum);
$res[][] = null;
$resnum[][]=null;
$num = 0;


//echo '<!--select実行'.$query.'-->';

//while ($row = mysql_fetch_assoc($result)) {
$row = mysql_fetch_assoc($result);
for($y = 0;$row ;$y++ ){

	for($x = 0;$x < $numFields ;$x++ ){
		$res[$y][$nameFields[$x]] = $row[$nameFields[$x]];
		$resnum[$y][$x] = $row[$nameFields[$x]];

	}
	$row = mysql_fetch_assoc($result);
}

$close_flag = mysql_close($link);

//if ($close_flag){
//	print('<p>切断に成功しました。</p>');
//}
$T_Table='';
$T_Name='';
//$T_Values='';
$T_After='';
//$T_Update='';