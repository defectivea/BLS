<?php
	/**
		データベースにアクセスするためのライブラリ。
		データベースを利用する場合は必ずこれらの命令を通すこと。
	*/


	/**
		データベースの情報
	*/
	$url = "localhost";
	$user = "user";
	$password = "bls";
	$database = "bls";

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
		ユーザIDから会員情報を読み出す
	*/
	
	/**
		Gpsテーブルに位置情報を書き込む
	*/

	function make_insert_gps($bus_id, $latitude, $longitude)
	{
		$now = date( "Y/m/d H:i:s", time());
		$insert = "INSERT INTO gps ('bus_id', 'latitude', 'longitude', 'time') VALUES($bus_id, $latitude, $longitude, $now)";

		return $insert;
	}
	


?>
