<?php
	/**
		データベースにアクセスするためのライブラリ。
		データベースを利用する場合は必ずこれらの命令を通すこと。
	*/


	/**
		データベースの情報
	*/
	$url;
	$user;
	$password;
	$database;

	/**
		DBに接続する。データベースは選択済みの状態になる。
		戻り値はデータベースのリンク情報
	*/

	function open_link($url, $user, $password, $database)
	{
		$link = mysql_connect($url, $user, $password) or die("データベースへの接続に失敗しました。");
		mysql_select_db($database, $link) or die("データベースの選択に失敗しました。");
		return $link;
	}

	/**
		SELECT文を発行する関数
		変数tableにはテーブル名
		変数whereには条件を入力する
	*/
	function make_select($table, $where)
	{
		$select = "SELECT * FROM $table WHERE $where";
		return $select;
	}

	/**
		select文を実行しＤＢから値を取得する。
		$resultを返却する
	*/
	function db_select($sql) {
		$result = mysql_query($sql);
		
		return $result;
	}
	
?>
