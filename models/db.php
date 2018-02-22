<?php
	function getDBHandler(){
		$mysql_conn_str = "mysql:host=localhost;dbname=yueting;charset=utf8";
		$pdo = new PDO($mysql_conn_str,'root','root');
	}
?>