<?php session_start();

	//session_unset($_SESSION['user']);
	session_destroy();
	session_unset();
	header('location: ./');
?>
