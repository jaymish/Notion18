<?php

	session_start();
	
	if (!isset($_SESSION['username'])) {
		header("Location: login_co.php");
	} else if(isset($_SESSION['username'])!="") {
		header("Location: home_co.php");
	}
	
	if (isset($_GET['coordinator'])) {
		unset($_SESSION['username']);
		session_unset();
		session_destroy();
		header("Location: login_co.php");
		exit;
	}