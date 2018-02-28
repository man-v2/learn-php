<?php
	$mysql_conn_str = "mysql:host=localhost;dbname=yueting;charset=utf8";

	function getDBHandler(){
		$pdo = new PDO($mysql_conn_str,'root','root');
		$pdo->query("set names utf8;"); 
        return $pdo;
	}
	
	function getMySqlDbHandler(){
		@ $db = new mysqli('localhost','root','root','yueting');
		if(mysqli_connect_errno()){
			echo 'Error: Could not connect to databases. Please try again later.';
			exit;
		}
		
	}
?>