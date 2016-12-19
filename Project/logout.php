<?php
	session_start();
	unset($_SESSION['username']);
	unset($_SESSION['password']);
	header('refresh:1,url=test.php');
?>