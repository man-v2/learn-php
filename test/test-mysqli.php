<?php 
require_once '../models/user.php';

if ( $_SERVER['REQUEST_METHOD']=='GET' ) {
    $id = $_GET['id'];
	echo $id;
}
?>