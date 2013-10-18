<?php
$user_name;
#DBアクセス権限を与えられたユーザ名を格納する変数
$db_password;
#DBへアクセスするために必要なパスワードを格納する変数
$db_name;
#システムで使用するDB名を格納する変数
$server_url;
#DBサーバへのアドレスを格納する変数
$server_url = "localhost";
// $server_url = "172.20.17.60";
//$user_name = "pluto_utf";
$user_name = "root";
$db_password = "";
$db_name = "pluto_utf";

/**
 * include_onceの使い方
 * include_once "db_access.php";
 * include_once "インクルードするファイルの名前"
 */
?>