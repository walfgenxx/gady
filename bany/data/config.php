<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 

	// connect to database
	$conn = mysqli_connect("localhost", "fxcoinprofit_web", "fxcoinprofit_web22", "fxcoinprofit_web");
	$mysqli = mysqli_connect("localhost", "fxcoinprofit_web", "fxcoinprofit_web22", "fxcoinprofit_web");

	if (!$conn) {
		die("<title>Website Under Maintainance</title><h2>Website Under Maintainance</h2>");
	}
    // define global constants
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'https://webproject.net.ng');
	}
?>